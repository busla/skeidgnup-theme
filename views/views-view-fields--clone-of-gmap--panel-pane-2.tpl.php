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
<?php if (!empty($fields['coordinates']->content)): ?>
<div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title">Upplýsingar</h3></div>

    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td><h4><span class="icon-location"></span> <?php print $fields['coordinates']->content; ?></h4></td>
        </tr>
        <tr>
          <td><h4><span class="icon-mail"></span> <?php print $fields['email']->content; ?></h4></td>
        </tr>
        <tr>
          <td><h4><span class="icon-phone"></span> <?php print $fields['phone']->content; ?></h4></td>    
        </tr>
      </tbody>
  </table>
</div>
<?php endif; ?>