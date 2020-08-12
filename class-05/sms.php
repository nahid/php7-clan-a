<?php

interface SMSInterface
{
    public function from(string $number);
    public function to(string $number);
    public function send(?string $body) : bool;
}



class SMS
{
    /**
     * @var SMSInterface
     */
    private SMSInterface $sms;

    public function __construct(SMSInterface $sms)
    {
        $this->setClient($sms);
    }

    public function setClient(SMSInterface $sms)
    {
        $this->sms = $sms;
        return $this;
    }

    public function getClient() : SMSInterface
    {
        return $this->sms;
    }

    public function from(string $number)
    {
        return $this->getClient()->from($number);
    }

    public function to(string $number)
    {
        return $this->getClient()->to($number);
    }

    public function send(?string $body) : bool
    {
       return $this->getClient()->send($body);
    }
}

class SslComSms implements SMSInterface
{

    public function from(string $number)
    {
        echo "From SSLCom: {$number} \n";
        return $this;
    }

    public function to(string $number)
    {
        echo "To SSLCom: {$number} \n";
        return $this;
    }

    public function send(?string $body) : bool
    {
        echo "Sent SSLCom: {$body}";
        return true;
    }
}

class InfoBipComSms implements SMSInterface
{

    public function from(string $number)
    {
        echo "From InfoBip: {$number} \n";
        return $this;
    }

    public function to(string $number)
    {
        echo "To InfoBip: {$number} \n";
        return $this;
    }

    public function send(?string $body) : bool
    {
        echo "Sent InfoBip: {$body}";
        return true;
    }
}

$sslComSms = new SslComSms();
$infoBip = new InfoBipComSms();
$sms = new SMS($sslComSms);

$sms->setClient($infoBip)->from("934590345")
    ->to("937495095")
    ->send("Sent MSG");