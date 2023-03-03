<?php

namespace App\Messenger\Message;

class SyncMessage
{
    private string $data;
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }

}