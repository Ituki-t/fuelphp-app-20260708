<?php

namespace Fuel\Migrations;

class Create_users
{
    public function up()
    {
        \DBUtil::create_table('users', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'username' => array('type' => 'varchar', 'constraint' => 255),
            'email' => array('type' => 'varchar', 'constraint' => 255),
            'password' => array('type' => 'varchar', 'constraint' => 255),
            'created_at' => array('type' => 'int', 'constraint' => 11),
            'updated_at' => array('type' => 'int', 'constraint' => 11),
        ), array('id'));
    }

    public function down()
    {
        \DBUtil::drop_table('users');
    }
}