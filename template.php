<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_preprocess_HOOK() for node template
 */

function skeidgnup_theme_field__field_post_category__post(&$variables) {
  $output = '';
 
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div ' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }
 
  // Render the items.
  $output .= '<ul class="list-inline"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li ' . $variables['item_attributes'][$delta] . '><span class="glyphicon glyphicon-tag"></span> ' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';
 
  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';
//    kpr($variables);
  return $output;
}

function skeidgnup_theme_preprocess_views_view_field(&$vars) {
//  kpr($vars['field']);
}

function skeidgnup_theme_preprocess_views_view(&$vars) {
  if (isset($vars['view']->name)) {
    $function = 'skeidgnup_theme_preprocess_views_view__'.$vars['view']->name; 
    if (function_exists($function)) {
     $function($vars);
    }
  }
}

function skeidgnup_theme_preprocess_views_view__skeidgnup_news(&$vars) {
//   kpr($vars['view']->display);
  }







/*
function skeidgnup_theme_menu_link__menu_block(&$variables) {

  $element = $variables['element'];
  $sub_menu = '';
  
  if ($element['#below']) {

    // Prevent dropdown functions from being added to management menu as to not affect navbar module.
    if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
      $sub_menu = drupal_render($element['#below']);
    }

    else {
      // Add our own wrapper
      
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="nav nav-list tree">' . drupal_render($element['#below']) . '</ul>';
     //  $element['#localized_options']['attributes']['class'][] = 'nav nav-list tree';
      // $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
        $element['#localized_options']['html'] = TRUE;
      // Check if this element is nested within another
        if (strpos( $element['#href'], 'nolink')) {
        // Generate as dropdown submenu
        // $element['#attributes']['class'][] = 'tree-toggler';
//        $element['#attributes']['class'][] = 'expanded';
        // $element['#attributes']['class'][] = 'collapsed';

        $element['#title'] = '<label class="tree-toggle nav-header">' . '<span class="glyphicon glyphicon-circle-arrow-right"></span> ' . $element['#title'] . '</label>';
        
      }
      
      // Set dropdown trigger element to # to prevent inadvertant page loading with submenu click
      // $element['#localized_options']['attributes']['data-target'] = '#';
    }
  }
 // Issue #1896674 - On primary navigation menu, class 'active' is not set on active menu item.
 // @see http://drupal.org/node/1896674

  
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);

//   dpm($element);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
*/

