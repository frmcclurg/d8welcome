<?php

namespace Drupal\welcome\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'WelcomeBlock' block.
 *
 * @Block(
 *  id = "welcome_block",
 *  admin_label = @Translation("Welcome block"),
 * )
 */
class WelcomeBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['welcome_block']['#markup'] = 'Implement WelcomeBlock.';

    return $build;
  }

}
