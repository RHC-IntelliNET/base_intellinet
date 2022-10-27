<?php
return array(
  0 =>
  array(
    'id' => 0,
    'label' => 'Dashboard',
    'link' => '/',
    'menu' => 2,
    'sort' => 0,
    'parent' => NULL,
    'class' => NULL,
    'depth' => 0,
    'role_id' => 0,
  ),
  2 =>
  array(
    'id' => 2,
    'label' => 'Amministrazione',
    'link' => '/it/reports',
    'menu' => 2,
    'sort' => 2,
    'parent' => NULL,
    'class' => '',
    'depth' => 0,
    'role_id' => 0,
  ),
  4 =>
  array(
    'id' => 4,
    'label' => 'Plugin',
    'link' => '/it/plugins',
    'menu' => 2,
    'sort' => 4,
    'parent' => NULL,
    'class' => '',
    'depth' => 0,
    'role_id' => 0,
  ),
  6 =>
  array(
    'id' => 6,
    'label' => 'Profilo',
    'link' => '/it/profile',
    'menu' => 2,
    'sort' => 6,
    'parent' => NULL,
    'class' => '',
    'depth' => 0,
    'role_id' => 0,
  ),

  //submenu Plugin
  8 =>
  array(
    'id' => 8,
    'label' => 'Inbox',
    'link' => '/it/pages/plugins',
    'menu' => 2,
    'sort' => 8,
    'parent' => 4,
    'class' => NULL,
    'depth' => 1,
    'role_id' => 0,
  ),
  10 =>
  array(
    'id' => 10,
    'label' => 'Market',
    'link' => '/it/pages/plugins/market',
    'menu' => 2,
    'sort' => 10,
    'parent' => 4,
    'class' => '',
    'depth' => 1,
    'role_id' => 0,
  ),

  //submenu amministrazione
  12 =>
  array(
    'id' => 12,
    'label' => 'Fonti',
    'link' => '/it/reports',
    'menu' => 2,
    'sort' => 12,
    'parent' => 2,
    'class' => NULL,
    'depth' => 1,
    'role_id' => 0,
  ),
  14 =>
  array(
    'id' => 14,
    'label' => 'Keywords',
    'link' => '/it/keywords',
    'menu' => 2,
    'sort' => 14,
    'parent' => 2,
    'class' => NULL,
    'depth' => 1,
    'role_id' => 0,
  ),

  //submenu profilo
  16 =>
  array(
    'id' => 16,
    'label' => 'Profilo',
    'link' => '/it/profile',
    'menu' => 2,
    'sort' => 16,
    'parent' => 6,
    'class' => '',
    'depth' => 1,
    'role_id' => 0,
  ),
  18 =>
  array(
    'id' => 18,
    'label' => 'Sicurezza',
    'link' => '/it/pages/password',
    'menu' => 2,
    'sort' => 18,
    'parent' => 6,
    'class' => NULL,
    'depth' => 1,
    'role_id' => 0,
  ),
);
