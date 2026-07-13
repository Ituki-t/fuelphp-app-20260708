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


    public static function create($title, $body, $user_id)
    {
        return \DB::insert('posts')
            ->set(array(
                'title' => $title,
                'body' => $body,
                'user_id' => $user_id,
                'created_at' => time(),
                'updated_at' => time(),
            ))
            ->execute();
    }


    public static function find_by_id($id)
    {
        return \DB::select(
            'posts.*',
            array('users.username', 'username')
        )
            ->from('posts')
            ->join('users')
            ->on('posts.user_id', '=', 'users.id')
            ->where('posts.id', $id)
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


    public static function delete($id)
    {
        return \DB::delete('posts')
            ->where('id', $id)
            ->execute();
    }
}