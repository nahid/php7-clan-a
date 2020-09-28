<?php

class UnauthorizedUserException extends \Exception
{
    public function __construct($message = 'Unauthorized user!', $code = 401, Throwable $throwable = null)
    {
        parent::__construct($message, $code, $throwable);
    }
}