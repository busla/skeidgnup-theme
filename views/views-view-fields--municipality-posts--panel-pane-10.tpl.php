<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<div class="panel panel-default">
<div class="panel-body">
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-5">
    <div class="thumbnail pull-left">
      <?php
      if (!isset($fields['field_image']->content)) {
        $news_image = '<img src="' . $GLOBALS['base_url'] .'/'; 
        $news_image .= drupal_get_path('theme', 'skeidgnup_theme') . '/skeidgnup-logo-200px.png' . '" alt="Merki hreppsins" />';
      }
      else {
        $news_image = $fields['field_image']->content;
      } 
      print $news_image;
      ?>
    </div>  
  </div>
  <div class="col-lg-9 col-md-9 col-sm-7">

<h2><?php print $fields['title']->content; ?></h2>
  <?php 
    if(!empty($fields['field_body']->content)) {
      print $fields['field_body']->content;
    }
  ?>
  </div>  
</div>
<hr />
<ul class="list-inline text-muted">
  <li><span class="icon-clock"></span><?php print $fields['created']->content; ?></li>
  <li class="pull-right"><span class="icon-user"></span><?php print $fields['field_real_name']->content; ?></li>

</ul>
<hr />

</div>
</div>
