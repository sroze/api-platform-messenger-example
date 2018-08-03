<?php

namespace App\Handler;

use App\Message\ReadMessages;
use App\MessageStorage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class ReadMessagesHandler implements MessageHandlerInterface
{
    private $messageStorage;

    public function __construct(MessageStorage $messageStorage)
    {
        $this->messageStorage = $messageStorage;
    }

    public function __invoke(ReadMessages $query)
    {
        return $this->messageStorage->all();
    }
}
