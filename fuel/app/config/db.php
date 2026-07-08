<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'default' => array(
        'type' => 'mysqli',
        'connection' => array(
            'hostname'   => 'db',
            'database'   => 'fuelphp-db',
            'username'   => 'root',
            'password'   => 'root',
            'persistent' => false,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8mb4',
        'caching'      => false,
        'profiling'    => true,
    )

);
