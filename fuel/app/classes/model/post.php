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


    public static function create($title, $body)
    {
        return \DB::insert('posts')
            ->set(array(
                'title' => $title,
                'body' => $body,
                'created_at' => time(),
                'updated_at' => time(),
                'created_by' => 1,
            ))
            ->execute();
    }


    public static function find_by_id($id)
    {
        return \DB::select()
            ->from('posts')
            ->where('id', $id)
            ->execute()
            ->current();
    }


    public static function update($id, $data)
    {
        return \DB::update('posts')
            ->set($data)
            ->where('id', $id)
            ->execute();
    }
}