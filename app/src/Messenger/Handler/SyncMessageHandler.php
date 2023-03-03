<?php

namespace App\Messenger\Handler;

use App\Messenger\Message\DefaultAsyncMessage;
use App\Messenger\Message\SyncMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SyncMessageHandler implements MessageHandlerInterface
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(DefaultAsyncMessage $message): void
    {
        $this->logger->info(\sprintf('DefaultAsyncMessage received. Content %s', $message->getData()));
    }
}