<?php

namespace patterns\decorator;

abstract class Notifier
{
    public abstract function send(string $message);

}