<?php

// Plugin definition
$plugin = array(
  'title' => t('TB Two columns image float'),
  'category' => t('Columns: 2'),
  'icon' => 'tb_twocols_img_float.png',
  'theme' => 'tb_twocols_img_float',
  'css' => '../../css/style.css',
  'regions' => array(
    'header' => t('Header'),
    'left' => t('Left side'),
    'image' => t('Image'),
    'right' => t('Right side'),
    'bottom' => t('Bottom'),
  ),
);
