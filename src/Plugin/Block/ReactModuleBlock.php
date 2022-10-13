<?php

namespace Drupal\custom_drupal_react_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
// https://drupalize.me/tutorial/connect-react-drupal-theme-or-module?p=3253
/**
 * Provides a 'React Module' Block.
 *
 * @Block(
 *   id = "react_module_block",
 *   admin_label = @Translation("React Module Block"),
 *   category = @Translation("React Module"),
 * )
 */
class ReactModuleBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['react_module_block']['#markup'] = '<div id="react-app"></div>';
    $build['react_module_block']['#attached']['library'][] =  'custom_drupal_react_module/react_module_block';
    return $build;
  }
}