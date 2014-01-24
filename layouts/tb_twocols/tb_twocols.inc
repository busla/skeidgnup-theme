<?php

// Plugin definition
$plugin = array(
  'title' => t('TB Two columns'),
  'category' => t('Columns: 2'),
  'icon' => 'tb_twocols.png',
  'theme' => 'tb_twocols',
  'css' => '../../css/style.css',
  'regions' => array(
    'header' => t('Header'),
    'introduction' => t('Introduction'),
    'search_form' => t('Search form'),
    'contact_links' => t('Contact links'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'right-row-one' => t('Row one'),
    'right-row-two' => t('Row two'),
    'right-row-three' => t('Row three'),
  ),
);
