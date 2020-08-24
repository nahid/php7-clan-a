<?php

class Invoke
{
    public function __invoke()
    {
        return ['nothing'];
    }
}

$invoke = new Invoke();

$db->table('users')->selet('*')
//    ->where('age', '=', 21)
        ->whereAge(21)
    ->get();

// select * from users where age=21;

$data = $invoke();

var_dump($data);