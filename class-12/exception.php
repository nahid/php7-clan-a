<?php

require 'custome-exception.php';


class Auth
{
    protected $loggedin = null;


    public function isLoggedIn()
    {
        if ($this->loggedin === false) {
            throw new Exception();
        }

        if ($this->loggedin === null) {
            throw new UnauthorizedUserException();
        }

        return true;
    }
}


$auth = new Auth();


try {
    $auth->isLoggedIn();
    echo "Authorized User";
} catch (UnauthorizedUserException $exception) {
    header("Content-Type: application/json");

    echo json_encode([
        'type' => 'error',
        'msg' => $exception->getMessage(),
        'code' => $exception->getCode(),
    ]);

} catch (\Exception $exception) {
    echo "Value is FALSE";
}
