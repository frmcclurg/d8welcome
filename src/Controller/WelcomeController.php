<?php

/**
 * @file
 * Contains WelcomeController.php
 * 
 * A controller is the code that is run in response to when the associated
 * URL is specified.
 * 
 * The route for this controller is specified in file "welcome.routing.yml".
 * 
 * This code was originally created by Drupal Console via the command:
 *   drupal generate:controller --generate-inline --learning
 */

/* A namespace organizes classes into "sub-folders" and guarantees that
 * the class does not conflict with another class of the same name.
 */
namespace Drupal\welcome\Controller;

/* Use keyword allows you to use other class files when needed.
 * In this case, the "WelcomeController" class is extending another
 * class "ControllerBase".  The use statement references the namespace
 * of the "ControllerBase" class.
 */
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
      /* A type of markup allows you to specify HTML tags if needed. */
      '#type' => 'markup',
      '#markup' => $this->t('A friendly <em>howdy</em> to ya\'ll!')
    ];
  }

}
