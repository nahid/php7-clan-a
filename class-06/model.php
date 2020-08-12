<?php

interface JwtAuth
{
    public function login() : bool;
    public function token() : string;
}

abstract class CRUD
{
    abstract public function table() : string;


    public function insert(array $data)
    {
        return "Successfully Inserted table " . $this->table();
    }

    public function update(int $id, array $data)
    {
        return "Successfully Updated table " . $this->table();
    }
}

class User extends CRUD implements JwtAuth
{
    public function table() : string
    {
        return 'users';
    }

    public function login() : bool
    {
        return true;
    }

    public function token() : string
    {
        return $this->table(). ':' . sha1(time());
    }
}

class Comment extends CRUD
{
    public function table() : string
    {
        return 'comments';
    }
}

class Post extends CRUD
{
    public function table() : string
    {
        return 'posts';
    }
}

class Admin extends CRUD implements JwtAuth
{
    public function table() : string
    {
        return 'admin_users';
    }

    public function login() : bool
    {
        return true;
    }

    public function token() : string
    {
        return $this->table(). ':' . sha1(time());
    }
}

class Auth
{
    public function login(JwtAuth $jwtAuth)
    {
        $login = $jwtAuth->login();
        if ($login) {
            return $jwtAuth->token();
        }

        return null;
    }
}

$auth = new Auth();

$user = new User();
$post = new Post();
$admin = new Admin();

echo $auth->login($user);


class Session
{
    public function set($key, $value)
    {

    }

    public function get($key)
    {

    }

    public function forget($key)
    {

    }
}

$session = new Session();
$session->set('user_id', 1);
$session->get('user_id');
