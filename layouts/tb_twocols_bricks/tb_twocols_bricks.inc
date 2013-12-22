<?php

// Plugin definition
$plugin = array(
  'title' => t('TB Two columns bricks'),
  'category' => t('Columns: 2'),
  'icon' => 'tb_twocols_bricks.png',
  'theme' => 'tb_twocols_bricks',
  'css' => '../../css/style.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'right-row-one' => t('Row one'),
    'right-row-two' => t('Row two'),
    'right-row-three' => t('Row three'),
    'bottom-left' => t('Bottom left'),
    'bottom-middle' => t('Bottom middle'),
    'bottom-right' => t('Bottom right'),      
  ),
);
