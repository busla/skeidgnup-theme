<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_preprocess_HOOK() for node template
 */



/*
function skeidgnup_theme_preprocess_views_view_fields(&$vars) {
  if ($vars['view']->name == 'municipality_posts') {
    $vars['fields']['title']->wrapper_prefix .= '<span class="glyphicon glyphicon-chevron-right"></span>';
    dpm($vars['fields']['field_image']);
  } 
  
}
*/


/*
function skeidgnup_theme_preprocess_panels_pane($variables) {
  //dpm('type: ' . $variables['pane']->type);
  if ($variables['pane']->type == 'views_panes') {
    kpr('subtype: ' . $variables['pane']->subtype);
  }
}

*/
function skeidgnup_theme_preprocess_views_view(&$vars) {
  if (isset($vars['view']->name)) {
    $function = 'skeidgnup_theme_preprocess_views_view__'.$vars['view']->name; 
    if (function_exists($function)) {
     $function($vars);
    }
  }
}

/*
function skeidgnup_theme_views_view__municipality_posts__panel_pane_10(&$vars) {
  dpm($vars);
}
*/

function skeidgnup_theme_preprocess_views_view_table(&$vars) {
  $vars['classes_array'][] = 'table';
  $vars['classes_array'][] = 'table-striped';
//  $vars['classes_array'][] = 'table-responsive';  
}



function skeidgnup_theme_theme() {
  $items = array();
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'skeidgnup_theme') . '/templates/user',
    'template' => 'user-form',
    'preprocess functions' => array(
       'skeidgnup_theme_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'skeidgnup_theme') . '/templates/user',
    'template' => 'user-form',
    'preprocess functions' => array(
      'skeidgnup_theme_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'skeidgnup_theme') . '/templates/user',
    'template' => 'user-form',
    'preprocess functions' => array(
      'skeidgnup_theme_preprocess_user_pass'
    ),
  );  
  return $items;
}

function skeidgnup_theme_preprocess_user_login(&$vars) {
  
  $vars['intro_text'] = t('Innskráning á vef Skeiða- og Gnúpverjahrepps.');
  $vars['theme_logo'] = '<img class="img-thumbnail" src="' . $GLOBALS['base_url'] .'/'. drupal_get_path('theme', 'skeidgnup_theme') . '/skeidgnup-logo-200px.png' . '" alt="Merki hreppsins" />';
}

function skeidgnup_theme_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('Sækja um nýtt lykilorð.');
  $vars['theme_logo'] = '<img class="img-thumbnail" src="' . $GLOBALS['base_url'] .'/'. drupal_get_path('theme', 'skeidgnup_theme') . '/skeidgnup-logo-200px.png' . '" alt="Merki hreppsins" />';
}


function skeidgnup_theme_preprocess_user_register_form(&$vars) {
  $vars['intro_text'] = t('Nýskráning notanda.');
  $vars['theme_logo'] = '<img class="img-thumbnail" src="' . $GLOBALS['base_url'] .'/'. drupal_get_path('theme', 'skeidgnup_theme') . '/skeidgnup-logo.png' . '" alt="Merki hreppsins" />';
}



function skeidgnup_theme_preprocess_field(&$vars) {
  $function = 'theme_preprocess_field__'. $vars['element']['#field_name'];
    if(function_exists($function)) {
      $vars = $function($vars);
    }
}


/*
function skeidgnup_theme_field__field_staff(&$variables) {
    //kpr($variables);
  $output = '';

  // Render the label, if it's not hidden.


  // Render the items.
  $output .= $variables['content_attributes'];

  foreach ($variables['items'] as $delta => $item) {
     // if (!empty($element['#items'][$delta]['relation'])) {
          $output .= '<div class="col-lg-6"><ul class="list-group">';
          $output .= '<li class="list-group-item"><h4>' . drupal_render($item['member_committee']) . '</h4></li>';
          $output .= '<li class="list-group-item">' . drupal_render($item['member_party']) . '</li>';          
          $output .= '</ul></div>';
  }

//  }  // Render the top-level DIV.
//  $output = '<div>' . $output . '</div>';

  return $output;  
}  

/*
function skeidgnup_theme_item_list(&$vars) {
  
  kpr($vars);
}
*/
/*
function skeidgnup_theme_links(&$vars) {

}
*/
/*
function skeidgnup_theme_preprocess_links(&$variables) {
  if (isset($variables['attributes']) && isset($variables['attributes']['class'])) {
    $string = is_string($variables['attributes']['class']);
    if ($string) {
      $variables['attributes']['class'] = explode(' ', $variables['attributes']['class']);
    }

    if ($key = array_search('inline', $variables['attributes']['class'])) {
      $variables['attributes']['class'][$key] = 'list-inline';
    }

    if ($string) {
      $variables['attributes']['class'] = implode(' ', $variables['attributes']['class']);
    }
  }

}

*/

/*
function skeidgnup_theme_preprocess_field(&$variables) {

  if ($variables['element']['#field_name'] == 'field_staff') {
    kpr($variables);
   
    $element = $variables['element'];
    
    $variables['items'] = array();
    
    foreach ($element['#items'] as $delta => $item) {
      if (!empty($element[$delta])) {
        $variables['items'][$delta]['member_committee'] = $element[$delta]['relation']['links'];        
        $variables['items'][$delta]['member_party'] = $element[$delta]['relation']['fields'];        
      }
    }      
    

  } 
}

*/
/*
// Add "img-responsive" class to the img tag for images uploaded
// through the images content type
function skeidgnup_theme_field__field_image__post($variables) { 
  $output = '';
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }
  
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'img-responsive';
    $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
  }
  
  $output .= '</div>';
  
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  return $output;
}
*/







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

