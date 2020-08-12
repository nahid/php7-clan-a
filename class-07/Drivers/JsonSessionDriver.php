<?php

class JsonSessionDriver implements SessionHandlerInterface
{
    protected $file;

    public function __construct()
    {
        $this->file =__DIR__ . DIRECTORY_SEPARATOR . 'session.json';
    }

    public function close()
    {
        return true;
    }

    public function destroy($session_id)
    {
        $data = file_get_contents($this->file);
        if (is_null($data)) return false;

        $sessionData = json_decode($data, true);
        unset($sessionData[$session_id]);

        file_put_contents($this->file, json_encode($sessionData));

        return true;
    }

    public function gc($maxlifetime)
    {
        return true;
    }

    public function open($save_path, $name)
    {
        return true;
    }

    public function read($session_id)
    {
        $data = file_get_contents($this->file);
        if (is_null($data)) return null;

        $sessionData = json_decode($data, true);

        return $sessionData[$session_id] ?? '';
    }

    public function write($session_id, $session_data)
    {
        $data = file_get_contents($this->file);
        $sessionData = [];
        if (!is_null($data)) {
            $sessionData = json_decode($data, true);
        }

        $sessionData[$session_id] = $session_data;

        file_put_contents($this->file, json_encode($sessionData));

        return true;

    }
}