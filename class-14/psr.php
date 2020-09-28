<?php declare(strict_types=1);


namespace App;

use App\Service\{
    Sms,
    Email,
    Push
};


class FirstName
{
    public $a = 5;
    protected $b = 5;

    public const STATUS = true;
    /*public function __construct(
        User $user,
        Email $email,
        SmsService $smsService
    )
    {
        // something
    }*/

    protected $arr = [
        'a',
        'b',
        'c',
    ];
    public function helloWorld()
    {
        $a = function ($a) use($a){

        }

        $user = new User();


        if ($mango == 'mango' &&
            $orange == 'orange' &&
            $banana == 'banana' &&
            $mango == 'mango' &&
            $orange == 'orange' &&
            $banana == 'banana'
        ) {

        }
            $userFirstName = $user->first_name;
    }

    public function sum($a, $c, $b = null): ?string
    {
        $this->sum(2, 2);
    }


}

class B extends A implements
    \ArrayAccess,
    \Iterator,
    \Countable
{
    use ATrait;
    use BTrait;
    use Ctrait;

}

$a = new A();



