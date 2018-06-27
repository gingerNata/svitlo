<?php
namespace Drupal\svitlo\Controller;

/**
 * Provides route responses for the Svitlo module.
 */
class SvitloController {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function home() {
    $menu_tree = \Drupal::menuTree();
    $menu_name = 'main';

// Build the typical default set of menu tree parameters.
    $parameters = $menu_tree->getCurrentRouteMenuTreeParameters($menu_name);

// Load the tree based on this set of parameters.
    $tree = $menu_tree->load($menu_name, $parameters);

// Transform the tree using the manipulators you want.
    $manipulators = array(
      // Only show links that are accessible for the current user.
      array(
        'callable' => 'menu.default_tree_manipulators:checkAccess',
      ),
      // Use the default sorting of menu links.
      array(
        'callable' => 'menu.default_tree_manipulators:generateIndexAndSort',
      ),
    );
    $tree = $menu_tree->transform($tree, $manipulators);

// Finally, build a renderable array from the transformed tree.
    $menu = $menu_tree->build($tree);
    
    return $menu;
  }

}