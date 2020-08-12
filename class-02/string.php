<?php

$name = 'Bangladesh';
//echo $name[2];

//echo "Emam Mehedi";

$name = "Emam Mehedi";

/*
 * 1. Single Quote
 * 2. Double Quote
 * 3. Heredoc
 * 4. Nowdoc
 * */

$name = 'Rafsan';

/*echo 'Hello {$name}';
echo 'Hello Rafsan. \n How are you?';*/
//echo $name;

// Heredoc example
$msg = <<<"SHAON"
Hello {$name}
How are you?
SHAON;

//Nowdoc example

$msg1 = <<<'msg1'
Hello {$name}
How are you?
msg1;

$va1 = 'Hello Rafsan <br/>
How are you?';


echo $msg1;

//echo $msg;
