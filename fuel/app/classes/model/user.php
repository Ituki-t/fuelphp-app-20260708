<?php

class Model_User extends Model
{
    public static function find_by_username($username)
    {
        return \DB::select()
            ->from('users')
            ->where('username', $username)
            ->execute()
            ->current();

    }
}