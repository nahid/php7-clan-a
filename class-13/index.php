<?php

require 'vendor/autoload.php';

use App\Models\{
    PostClass,
    UserClass
};

$user = new UserClass();

//echo $user->echo();

echo today();
//dump(qarray(["data" => ["status" => true, "message" => "nothing"]])->get());