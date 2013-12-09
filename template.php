<?php

/**
 * @file
 * template.php
 */


function skeidgnup_theme_preprocess_panels_pane($variables) {
  dpm('type: ' . $variables['pane']->type);
}
