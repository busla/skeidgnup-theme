<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>


<div class="col-lg-4">
  <div class="panel panel-default">
    <?php if (!empty($title)): ?>
      <div class="panel-heading"><h3><?php print $title; ?></h3></div>
    <?php endif; ?>

    <div class="panel-body">
      <?php foreach ($rows as $id => $row): ?>
        <div>
          <?php print $row; ?>
        </div>
          <?php endforeach; ?>
    </div>
  </div>
</div>

