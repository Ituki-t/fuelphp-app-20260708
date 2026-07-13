<?php

namespace Fuel\Migrations;

class Drop_created_by_from_posts
{
    public function up()
    {
        \DBUtil::drop_fields('posts', array(
            'created_by',
        ));
    }

    public function down()
    {
        \DBUtil::add_fields('posts', array(
            'created_by' => array(
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ),
        ));
    }
}