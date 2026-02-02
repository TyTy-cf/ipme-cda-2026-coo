<?php

namespace patterns\decorator;

class SMSDecorator extends Decorator
{
    public function send(string $message): void
    {
        echo "SMSDecorator: " . $message;
        parent::send($message);
    }

}