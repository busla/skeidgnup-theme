<?php

// Plugin definition
$plugin = array(
  'title' => t('TB Two columns bottom'),
  'category' => t('Columns: 2'),
  'icon' => 'tb_twocols_bottom.png',
  'theme' => 'tb_twocols_bottom',
  'css' => '../../css/style.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'bottom' => t('Bottom'),
  ),
);
