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
  <div class="panel-heading">
    <h3 class="panel-title"><?php print $fields['title']->content; ?></h3>
  </div>
  <div class="panel-body">
    <div class="media">
      <span class="pull-left">
        <span class="media-object">
        <?php print $fields['field_post_image']->content; ?>
        </span>
      </span>
  
      <div class="media-body">
          <?php print $fields['field_post_body']->content; ?>
      </div>
    </div>
  </div>
  <div class="panel-footer">
    <ol class="list-inline">
      <li><span class="label label-default"><?php print $fields['field_post_category']->content; ?></span></li>
      <li><span class="label label-default"><span class="glyphicon glyphicon-time"></span> <?php print $fields['created']->content; ?></span></li>
    </ol>    
  </div>
</div>





