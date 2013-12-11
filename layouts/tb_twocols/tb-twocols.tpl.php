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
<div class="wrapper">
  <div class="frontpage-left">
    <h2>Fréttir</h2>
    <div class="inside"><?php print $content['left']; ?></div>
  </div>

<div class="frontpage-right">
    <h2>Yfirlit</h2>
      <div class="inside"><?php print $content['right']; ?></div>        
        <div class="wrapper">
          <div class="frontpage-right">
            <div class="inside"><?php print $content['right-row-one']; ?></div>          
          </div>
        </div>
        <div class="wrapper">
          <div class="frontpage-right">
            <div class="inside"><?php print $content['right-row-two']; ?></div>          
          </div>
        </div>
        <div class="wrapper">
          <div class="frontpage-right">
            <div class="inside"><?php print $content['right-row-three']; ?></div>          
          </div>
        </div>
     
      </div>
</div>
