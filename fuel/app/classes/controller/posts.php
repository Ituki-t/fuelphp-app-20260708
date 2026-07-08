<?php

class Controller_Posts extends Controller_Template
{
    public function action_index()
    {
        $posts = Model_Post::find_all();

        $this->template->title = 'Posts';
        $this->template->content = View::forge('posts/index', array('posts/index' => $posts));
    }
}