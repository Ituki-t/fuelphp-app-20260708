<?php
return array(
  'version' => 
  array(
    'app' => 
    array(
      'default' => 
      array(
        0 => '001_create_users',
        1 => '002_create_posts',
        2 => '003_add_user_id_to_posts',
        3 => '004_drop_created_by_from_posts',
        4 => '005_recreate_users',
      ),
    ),
    'module' => 
    array(
    ),
    'package' => 
    array(
      'auth' => 
      array(
      ),
    ),
  ),
  'folder' => 'migrations/',
  'table' => 'migration',
);
