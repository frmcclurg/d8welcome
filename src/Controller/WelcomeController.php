<?php

/**
 * @file
 * Contains WelcomeController.php
 * 
 * Code originally created by Drupal Console via the command:
 *   drupal generate:controller --generate-inline --learning
 */

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WelcomeController.
 *
 * @package Drupal\welcome\Controller
 */
class WelcomeController extends ControllerBase {

  /**
   * Welcome.
   *
   * @return string
   *   Return Hello string.
   */
  public function welcome() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: welcome')
    ];
  }

}
