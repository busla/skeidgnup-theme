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
       <?php print $content['left']; ?>
    </div>
    
    <div class="col-lg-5">
      
      <div class="row">
        <div class="col-lg-12">
          <?php print $content['right-row-one']; ?>         
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12">
          <?php print $content['right-row-two']; ?>          
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12">
          <?php print $content['right-row-three']; ?>         
        </div>
      </div>
      
    </div>        
  </div>
  
  <div class="row">
    <div class="col-lg-9 col-lg-offset-3">
      <div class="row">
        <div class="col-lg-3">
         <?php print $content['bottom-left']; ?>
        </div>
        <div class="col-lg-3">
         <?php print $content['bottom-middle']; ?>
        </div>
        <div class="col-lg-3">
         <?php print $content['bottom-right']; ?>
        </div>            
      </div>
    </div>  
  </div>

