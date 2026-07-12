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


    public function action_detail($id)
    {
        $post = Model_Post::find_by_id($id);

        if (!$post) {
            return Response::redirect('posts/index');
        }

        $this->template->title = 'Post Detail';
        $this->template->content = View::forge('posts/detail', array('post' => $post));
    }
}