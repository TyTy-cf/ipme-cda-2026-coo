<?php

namespace patterns\decorator;

class MailDecorator extends Decorator
{
    public function send(string $message): void
    {
        echo "MailDecorator: " . $message;
        parent::send($message);
    }
}