<?php

namespace Drupal\gitam_programme_finder\Controller;

use Drupal\Core\Controller\ControllerBase;

class ProgrammeFinderController extends ControllerBase {

  public function buildPage() {
    return [
      // Just call the theme hook! The JS/CSS is already handled by your theme.
      '#theme' => 'programme_finder_page',
    ];
  }
}