<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;
define('DRUPAL_FILE', __DIR__);

// 2. Load Composer autoloader
$autoloader = require_once DRUPAL_FILE . '/autoload.php';

// 3. Initialize and boot the Drupal Kernel
$request = Request::createFromGlobals();
$kernel = DrupalKernel::createFromRequest($request, $autoloader, 'prod');
$kernel->boot();
$kernel->preHandle($request);
/**
 * Bulk import Programme nodes from CSV.
 *
 * CSV columns:
 * title,category,discipline,campus,eligibility,total,duration,exam,exam_intro,body
 */

$csv_file = DRUPAL_FILE . '/sample.csv';

if (!file_exists($csv_file)) {
  print "ERROR: CSV file not found: {$csv_file}\n";
  exit;
}

/**
 * Find existing taxonomy term by name.
 */
function find_taxonomy_term($name, $vocabulary) {
  $name = trim($name);

  if ($name === '') {
    return NULL;
  }

  $terms = \Drupal::entityTypeManager()
    ->getStorage('taxonomy_term')
    ->loadByProperties([
      'name' => $name,
      'vid' => $vocabulary,
    ]);

  if (!empty($terms)) {
    return reset($terms);
  }

  return NULL;
}

/**
 * Find or create taxonomy term.
 */
function find_or_create_taxonomy_term($name, $vocabulary) {
  $name = trim($name);

  if ($name === '') {
    return NULL;
  }

  $term = find_taxonomy_term($name, $vocabulary);

  if ($term) {
    return $term;
  }

  $term = \Drupal\taxonomy\Entity\Term::create([
    'name' => $name,
    'vid' => $vocabulary,
  ]);

  $term->save();

  print "Created taxonomy term: {$name} ({$vocabulary})\n";

  return $term;
}

/**
 * Open CSV.
 */
$handle = fopen($csv_file, 'r');

if (!$handle) {
  print "ERROR: Cannot open CSV file.\n";
  exit;
}

/**
 * Read header.
 */
$headers = fgetcsv($handle);

if (!$headers) {
  print "ERROR: CSV is empty.\n";
  fclose($handle);
  exit;
}

$headers = array_map('trim', $headers);

$row_number = 1;
$success = 0;
$failed = 0;

while (($row = fgetcsv($handle, 0, ',', '"', '\\')) !== FALSE) {

  $row_number++;

  if (count($row) === 1 && trim($row[0]) === '') {
    continue;
  }

  $data = [];

  foreach ($headers as $index => $header) {
    $data[$header] = isset($row[$index])
      ? trim($row[$index])
      : '';
  }

  try {

    /**
     * Required Programme title.
     */
    if (empty($data['title'])) {
      throw new \Exception('Programme title is empty.');
    }

    /**
     * ---------------------------------------------------------
     * TAXONOMY TERMS
     * ---------------------------------------------------------
     */

    $category = find_or_create_taxonomy_term(
      $data['category'],
      'category'
    );

    $discipline = find_or_create_taxonomy_term(
      $data['discipline'],
      'disciplines'
    );

    $campus = find_or_create_taxonomy_term(
      $data['campus'],
      'campuses'
    );

    /**
     * ---------------------------------------------------------
     * CREATE PROG DETAILS PARAGRAPH
     * ---------------------------------------------------------
     */

    $paragraph_values = [
      'type' => 'prog_details',
    ];

    /**
     * Category.
     */
    if ($category) {
      $paragraph_values['field_cat'] = [
        'target_id' => $category->id(),
      ];
    }

    /**
     * Discipline.
     */
    if ($discipline) {
      $paragraph_values['field_dis'] = [
        'target_id' => $discipline->id(),
      ];
    }

    /**
     * Campus.
     */
    if ($campus) {
      $paragraph_values['field_campus'] = [
        'target_id' => $campus->id(),
      ];
    }

    /**
     * Eligibility.
     */
    if ($data['eligibility'] !== '') {
      $paragraph_values['field_elig'] = [
        'value' => $data['eligibility'],
      ];
    }

    /**
     * Total fee.
     */
    if ($data['total'] !== '') {
      $paragraph_values['field_total'] = [
        'value' => (float) $data['total'],
      ];
    }

    /**
     * Save Paragraph.
     */
    $paragraph = Paragraph::create($paragraph_values);
    $paragraph->save();

    /**
     * ---------------------------------------------------------
     * CREATE PROGRAMME NODE
     * ---------------------------------------------------------
     */

    $node_values = [
      'type' => 'programme',
      'title' => $data['title'],
      'status' => 1,
    ];

    /**
     * Duration.
     */
    if ($data['duration'] !== '') {
      $node_values['field_duration'] = [
        'value' => $data['duration'],
      ];
    }

    /**
     * Exam.
     */
    if ($data['exam'] !== '') {
      $node_values['field_exam'] = [
        'value' => $data['exam'],
      ];
    }

    /**
     * Exam Intro.
     */
    if ($data['exam_intro'] !== '') {
      $node_values['field_exam_intro'] = [
        'value' => $data['exam_intro'],
        'format' => 'basic_html',
      ];
    }

    /**
     * Body.
     */
    if ($data['body'] !== '') {
      $node_values['body'] = [
        'value' => $data['body'],
        'format' => 'basic_html',
      ];
    }

    /**
     * Attach Paragraph to Programme.
     *
     * field_meta_data = Entity Reference Revisions.
     */
    $node_values['field_meta_data'] = [
      [
        'target_id' => $paragraph->id(),
        'target_revision_id' => $paragraph->getRevisionId(),
      ],
    ];

    /**
     * Create node.
     */
    $node = Node::create($node_values);
    $node->save();

    $success++;

    print "SUCCESS: {$data['title']} (Node ID: {$node->id()})\n";

  }
  catch (\Throwable $e) {

    $failed++;

    print "ERROR on CSV row {$row_number}: {$e->getMessage()}\n";
  }
}

fclose($handle);

print "\n";
print "========================================\n";
print "IMPORT COMPLETED\n";
print "========================================\n";
print "Successful: {$success}\n";
print "Failed:     {$failed}\n";
print "========================================\n";