<?php

class Controller_Accounts extends Controller_Template
{
    public function action_signup()
    {
        if (Input::method() == 'POST') {
            $username = Input::post('username');
            $email = Input::post('email');
            $password = password_hash(Input::post('password'), PASSWORD_DEFAULT);

            Model_User::create($username, $email, $password);
            return Response::redirect('accounts/login');
        }

        $this->template->title = 'Sign Up';
        $this->template->content = View::forge('accounts/signup');
    }


    public function action_login()
    {
        $error = '';

        if (\Input::method() == 'POST') {
            $username = \Input::post('username');
            $password = \Input::post('password');

            $user = Model_User::find_by_username($username);

            if ($user && password_verify($password, $user['password'])) {
                \Session::set('user_id', $user['id']);
                \Session::set('username', $user['username']);
                return \Response::redirect('posts/index');
            } else {
                $error = 'Invalid username or password.';
            }
        }
        $this->template->title = 'Login';
        $this->template->content = View::forge('accounts/login', array('error' => $error));
    }


    public function action_logout()
    {
        \Session::destroy();

        return \Response::redirect('accounts/login');
    }
}