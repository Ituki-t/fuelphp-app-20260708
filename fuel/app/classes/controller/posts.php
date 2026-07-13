<?php

class Controller_Posts extends Controller_Template
{
    public function before()
    {
        parent::before();

        if (\Session::get('user_id') === null) {
            return \Response::redirect('accounts/login');
        }
    }

    public function action_index()
    {
        $posts = Model_Post::find_all();

        $this->template->title = 'Posts';
        $this->template->content = View::forge('posts/index', array('posts' => $posts));
    }


    public function action_create()
    {
        $user_id = \Auth::get_user_id();
        if (Input::method() == 'POST')
            {
                Model_Post::create(Input::post('title'), Input::post('body'), $user_id);
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


    public function action_edit($id)
    {
        $post = Model_Post::find_by_id($id);

        if (!$post) {
            return Response::redirect('posts/index');
        }

        if (Input::method() == 'POST')
            {
                Model_Post::update($id, array(
                    'title' => Input::post('title'),
                    'body' => Input::post('body'),
                    'updated_at' => time(),
                ));
                Response::redirect('posts/index');
            }

        $this->template->title = 'Edit Post';
        $this->template->content = View::forge('posts/edit', array('post' => $post));
    }



    public function action_delete($id)
    {
        $post = Model_Post::find_by_id($id);

        if (!$post) {
            return Response::redirect('posts/index');
        }

        Model_Post::delete($id);

        return Response::redirect('posts/index');
    }
}