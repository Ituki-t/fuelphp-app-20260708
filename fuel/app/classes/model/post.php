<?php

class Model_Post extends Model
{
    public static function find_all()
    {
        return \DB::select()
            ->from('posts')
            ->order_by('created_at', 'desc')
            ->execute()
            ->as_array();
    }
}