<?php

namespace Fuel\Migrations;

class Recreate_users
{
    public function up()
    {
        \DBUtil::create_table('users', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'username' => array('type' => 'varchar', 'constraint' => 255),
            'email' => array('type' => 'varchar', 'constraint' => 255),
            'password' => array('type' => 'varchar', 'constraint' => 255),
            'created_at' => array('type' => 'datetime'),
            'updated_at' => array('type' => 'datetime'),
        ), array('id'));

        \DBUtil::create_index(
            'users',
            'username',
            'users_username_unique',
            'UNIQUE'
        );

        \DBUtil::create_index(
            'users',
            'email',
            'users_email_unique',
            'UNIQUE'
        );
    }

    public function down()
    {
        \DBUtil::drop_table('users');
    }
}