<?php


class Home extends Controller
{

    public function index()
    {
        $auth = new Auth(new UserRepository());
        $username = '';
        $password = '';
        if (!empty($_POST)) {
            $username = !empty($_POST['uname']) ? $_POST['uname'] : null;
            $password = !empty($_POST['password']) ? $_POST['password'] : null;
            if ($auth->isAuthorized($username, $password)) {
                $_SESSION['user'] = $username;
            }
        }
        if (!empty($_SESSION['user'])) {
            header('Location: ' . $_SESSION['url']);
        } else {
            $this->view('home/auth');
        }

    }

    public function a()
    {
        $_SESSION['url'] = $_SERVER['REQUEST_URI'];
        if (!empty($_SESSION['user'])) {
            $this->view('home/a');
        } else {
            $this->view('home/auth');
        }
    }

    public function b()
    {
        $_SESSION['url'] = $_SERVER['REQUEST_URI'];
        if (!empty($_SESSION['user'])) {
            $this->view('home/b');
        } else {
            $this->view('home/auth');
        }

    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
    }
}