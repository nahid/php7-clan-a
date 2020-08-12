<?php

// class
class Man
{
    protected $name;
    protected $email;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail(string $name)
    {
        if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Invalid email!");
        }

        $this->email = $name;
    }

    public function getEmail()
    {
        return $this->name;
    }

    public function sendMail($body)
    {
        echo "Mail sent to " . $this->email;
        //Mail::send($this->email, $body);
    }
}

// instance / instantiate
$man = new Man;

$man1 = clone $man;

$man1->setEmail("nahid@nahid.im");

var_dump($man, $man1);
if ($man == $man1) {
    echo "Same";
}

$man->sendMail("hello");

/* Object
$man->setEmail("arifgmail.com");
$man->sendMail("hello");*/