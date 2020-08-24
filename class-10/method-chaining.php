<?php

class Mail
{
    public string $mailString = '';

    public function from($email)
    {
        $this->mailString .= 'From: ' . $email . "\n";

        return $this;
    }

    public function to($email)
    {
        $this->mailString .= 'To: ' . $email . "\n";

        return $this;
    }

    public function subject($subject)
    {
        $this->mailString .= 'Subject: ' . $subject . "\n";

        return $this;
    }

    public function send($body)
    {
        $this->mailString .= 'Body: ' . $body . "\n";

        return $this;
    }
}

$mail = new Mail();

echo $mail->from('nahid.dns@gmail.com')
    ->to('info@gmail.com')
    ->subject('Test Mail')
    ->send('Nothing')
    ->mailString;

Auth::user()->email;