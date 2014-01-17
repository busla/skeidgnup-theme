<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
  <div class="row">
    <div class="col-lg-12">
      <?php print $content['header']; ?>

    </div>
  </div>
  <div class="row">
    <div class="col-lg-7">
      <div class="panel panel-default">
        <div class="panel-heading"><h1 class="panel-title">Fréttir, viðburðir og aðrar tilkynningar</h1></div></div>

          <?php print $content['left']; ?>

      

    </div>
  <div class="col-lg-5">
      <div class="row">
        <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h1 class="panel-title">Stjórnsýslan</h1></div>
        <div class="panel-body">
          <?php print $content['right-row-one']; ?>
        </div>
      </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h1 class="panel-title">Yfirlit</h1></div>
        <div class="panel-body">
          <?php print $content['right-row-two']; ?>
        </div>
      </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div><?php print $content['right-row-three']; ?></div>          
        </div>
      </div>
    </div>

