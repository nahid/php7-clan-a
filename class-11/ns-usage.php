<?php

require 'namespace.php';

use Usr\Local\Bin\{PHP as P, Python as Py};
use function Usr\Func\get_conf as conf;


$py = new Py();
$php = new P();

conf();



/*namespace Nahid\JsonQ;

if (!function_exists('env')) {
    function env($name)
    {
        echo "Nahid " . $name;
    }
}

namespace Rafsan\JsonQ;

if (!function_exists('env')) {
    function env($name)
    {
        echo 'Rafsan ' . $name;
    }
}

\Rafsan\JsonQ\env("hello");

\Nahid\JsonQ\env("hello");

echo $_ENV['HOST_NAME'];*/






