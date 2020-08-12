<?php

require_once 'Drivers/JsonSessionDriver.php';

$handler = new JsonSessionDriver();
session_set_save_handler($handler, true);

session_start();

$_SESSION['loggedin_user'] = 'Nahid';