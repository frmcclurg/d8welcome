<?php

/**
 * @file
 * Contains WelcomeController.php
 * 
 * This code generates and returns the page content.
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

/* The keyword "use" allows you to use other class files when needed.
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
    # Retrieve the configuration from the admin settings
    $config = $this->config('welcome.adminsettings');

    return [
      # A type of markup allows you to specify HTML tags if needed.
      '#type' => 'markup',
      # '#markup' => $this->t('A friendly <em>howdy</em> to ya\'ll!')
      # Retrieve the value currently saved in the admin form
      '#markup' => $this->t($config->get('welcome_message')),
    ];
  }

}
