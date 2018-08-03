<?php

namespace App\Handler;

use App\Message\WriteMessage;
use App\MessageStorage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class WriteMessageHandler implements MessageHandlerInterface
{
    private $messageStorage;

    public function __construct(MessageStorage $messageStorage)
    {
        $this->messageStorage = $messageStorage;
    }

    public function __invoke(WriteMessage $command)
    {
        $this->messageStorage->add($command->message);
    }
}
