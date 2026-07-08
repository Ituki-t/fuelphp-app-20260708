<?php

class Controller_Posts extends Controller_Template
{
    public function action_index()
    {
        $posts = Model_Post::find_all();

        $this->template->title = 'Posts';
        $this->template->content = View::forge('posts/index', array('posts' => $posts));
    }


    public function action_create()
    {
        if (Input::method() == 'POST')
            {
                Model_Post::create(Input::post('title'), Input::post('body'));
                Response::redirect('posts/index');
            }

            $this->template->title = 'Create Post';
            $this->template->content = View::forge('posts/create');
    }
}