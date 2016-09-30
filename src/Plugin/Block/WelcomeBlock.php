<?php
/**
 * 
 * This code was originally created by Drupal Console via the command:
 *   drupal generate:plugin:block --generate-inline --learning
 */

namespace Drupal\welcome\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'WelcomeBlock' block.
 *
 * @Block(
 *  id = "welcome_block",
 *  admin_label = @Translation("Welcome block"),
 * )
 * 
 * Annotations (see above) enable drupal to find our block code.
 * Provide basic details of the block such as the admin label and id.
 */
class WelcomeBlock extends BlockBase {
  /**
   * {@inheritdoc}
   * 
   * Build and return a renderable array for a custom block content.
   */
  public function build() {
    # get the configuration with the module's configuration name:
    $config = \Drupal::config('welcome.adminsettings');
    
    $build = [];
    # Get the value of "welcome_message" property with the get method
    # $build['welcome_block']['#markup'] = $config->get('welcome_message');

    # The value $config->get('welcome_message') will be inserted to replace the @welcome_message placeholder.
    # This escapes HTML in order to introduce an additional layer of security
    # $build['welcome_block']['#markup'] = $this->t('@welcome_message', array('@welcome_message' => $config->get('welcome_message')));
    
    # Use PHP function "strip_tags()" order to strip out HTML.  If the optional second parameter is omitted, all HTML is removed:
    $build['welcome_block']['#markup'] = $this->t(strip_tags($config->get('welcome_message')));

    return $build;
  }

}
