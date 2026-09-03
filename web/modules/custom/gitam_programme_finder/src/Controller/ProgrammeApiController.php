<?php

namespace Drupal\gitam_programme_finder\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;
use Drupal\image\Entity\ImageStyle;

class ProgrammeApiController extends ControllerBase {
  public function getProgrammesData() {
    // Load Category Taxonomy Terms
    $term_storage = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
    $tids = \Drupal::entityQuery('taxonomy_term')
      ->condition('vid', 'category')
      ->accessCheck(FALSE)
      ->execute();

    $terms = $term_storage->loadMultiple($tids);
    $raw_categories = [];

    foreach ($terms as $term) {
      $term_name = $term->getName();
      $clean_name = strtolower(trim($term_name));
      
      if (str_contains($clean_name, 'undergraduate') || str_contains($clean_name, 'ug')) {
        $raw_categories['ug'] = [
          'key' => 'ug',
          'label' => $term_name,
        ];
      } elseif (str_contains($clean_name, 'postgraduate') || str_contains($clean_name, 'pg')) {
        $raw_categories['pg'] = [
          'key' => 'pg',
          'label' => $term_name,
        ];
      } elseif (str_contains($clean_name, 'ph.d.') || str_contains($clean_name, 'phd')) {
        $raw_categories['phd'] = [
          'key' => 'phd',
          'label' => $term_name,
        ];
      }
    }

    // Enforce strict order: UG -> PG -> PhD
    $ordered_keys = ['ug', 'pg', 'phd'];
    $categories = $programmes_data = [];

    foreach ($ordered_keys as $key) {
      if (isset($raw_categories[$key])) {
        $categories[] = $raw_categories[$key];
      }
    }
    
    $programmes_data = [
      'ug' => [],
      'pg' => [],
      'phd' => [],
    ];

    $node_storage = \Drupal::entityTypeManager()->getStorage('node');
    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'programme')
      ->condition('status', 1)
      ->accessCheck(FALSE)
      ->execute();

    $nodes = $node_storage->loadMultiple($nids);

    foreach ($nodes as $node) {
      $prog_title = $node->getTitle();
      
      // 1. Get Base Node Fields
      $dur = $node->hasField('field_duration') && !$node->get('field_duration')->isEmpty() ? $node->get('field_duration')->value : '';
      $exam = $node->hasField('field_exam') && !$node->get('field_exam')->isEmpty() ? $node->get('field_exam')->value : '';
      $examIntro = $node->hasField('field_exam_intro') && !$node->get('field_exam_intro')->isEmpty() ? $node->get('field_exam_intro')->value : '';

      if ($node->hasField('field_programme_image') && !$node->get('field_programme_image')->isEmpty()) {
          $file_uri = $node->get('field_programme_image')->entity->getFileUri();
          $image_style = ImageStyle::load('medium'); 
          $image_url = $image_style->buildUrl($file_uri);
      }else{
          $image_url = \Drupal::service('file_url_generator')->generateAbsoluteString('public://default_images/logo.webp');
      }
      
      // 2. Loop through Paragraphs (field_meta_data)
      if ($node->hasField('field_meta_data') && !$node->get('field_meta_data')->isEmpty()) {
        foreach ($node->get('field_meta_data')->referencedEntities() as $paragraph) {
          
          // --- A. Extract Category ---
          $cat_key = 'ug';
          if ($paragraph->hasField('field_cat') && !$paragraph->get('field_cat')->isEmpty()) {
            $cat_term = $paragraph->get('field_cat')->entity;
            if ($cat_term) {
              $clean_cat_name = strtolower(trim($cat_term->getName()));
              if (str_contains($clean_cat_name, 'postgraduate') || str_contains($clean_cat_name, 'pg')) {
                $cat_key = 'pg';
              } elseif (str_contains($clean_cat_name, 'ph.d') || str_contains($clean_cat_name, 'phd')) {
                $cat_key = 'phd';
              }
            }
          }
          // --- B. Extract Discipline & Icon ---
          $disc_name = 'General';
          $icon = '📚';
          if ($paragraph->hasField('field_dis') && !$paragraph->get('field_dis')->isEmpty()) {
            $disc_term = $paragraph->get('field_dis')->entity;
            if ($disc_term) {
              $disc_name = $disc_term->getName();
              if ($disc_term->hasField('field_icon') && !$disc_term->get('field_icon')->isEmpty()) {
                $icon = $disc_term->get('field_icon')->value;
              }
            }
          }

          // --- C. Extract Campus ---
          $campus_key = '';
          if ($paragraph->hasField('field_campus') && !$paragraph->get('field_campus')->isEmpty()) {
            $campus_term = $paragraph->get('field_campus')->entity;
            if ($campus_term) {
              $raw_campus = strtolower(trim($campus_term->getName()));
              // Format campus name to match your expected array keys
              if (str_contains($raw_campus, 'visakhapatnam')) {
                $campus_key = 'vizag';
              } elseif (str_contains($raw_campus, 'hyderabad')) {
                $campus_key = 'hyd';
              } elseif (str_contains($raw_campus, 'bengaluru')) {
                $campus_key = 'blr';
              } else {
                $campus_key = $raw_campus;
              }
            }
          }

          // --- D. Extract Fee & Eligibility ---
          $fee_total = $paragraph->hasField('field_total') && !$paragraph->get('field_total')->isEmpty() ? (float) $paragraph->get('field_total')->value : 0;
          $eligibility = $paragraph->hasField('field_elig') && !$paragraph->get('field_elig')->isEmpty() ? $paragraph->get('field_elig')->value : '';

          // --- E. Initialize Array Structure if not exists ---
          if (!isset($programmes_data[$cat_key][$disc_name])) {
            $programmes_data[$cat_key][$disc_name] = [
              'icon' => $icon,
              'programs' => [],
            ];
          }

          if (!isset($programmes_data[$cat_key][$disc_name]['programs'][$prog_title])) {
            $programmes_data[$cat_key][$disc_name]['programs'][$prog_title] = [
              'dur' => $dur,
              'campuses' => [],
              'fee' => ['total' => $fee_total], // Base fee from the first paragraph processed
              'elig' => $eligibility,
              'proImg' => $image_url,
              'exam' => $exam,
              'examIntro' => $examIntro,
              'secs' => [],
            ];
          }

          // --- F. Append Campus to the Program ---
          if ($campus_key && !in_array($campus_key, $programmes_data[$cat_key][$disc_name]['programs'][$prog_title]['campuses'])) {
            $programmes_data[$cat_key][$disc_name]['programs'][$prog_title]['campuses'][] = $campus_key;
          }
        }
      }
    }
    return new JsonResponse(['programmes' => $programmes_data,'categories' => $categories]);
  }
}