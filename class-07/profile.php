<?php

require_once 'Drivers/JsonSessionDriver.php';

session_set_save_handler(new JsonSessionDriver(), true);

session_start();

echo $_SESSION['loggedin_user'];