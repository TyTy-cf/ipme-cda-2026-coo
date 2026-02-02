<?php

namespace patterns\decorator;

class DiscordDecorator extends Decorator
{

    public function send(string $message): void
    {
        echo "DiscordDecorator: " . $message;
        parent::send($message);
    }

}