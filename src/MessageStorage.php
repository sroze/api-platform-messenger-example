<?php

namespace App;

class MessageStorage
{
    private $fileName = 'messages.json';

    public function all() : array
    {
        return file_exists($this->fileName) ? json_decode(file_get_contents($this->fileName), true) : [];
    }

    public function add(string $message)
    {
        file_put_contents($this->fileName, json_encode(array_merge($this->all(), [$message])));
    }
}
