<?php

namespace patterns\decorator;

class Decorator extends Notifier
{

    protected Notifier|null $wrapper = null;

    /**
     * @param Notifier|null $wrapper
     */
    public function __construct(Notifier|null $wrapper = null)
    {
        $this->wrapper = $wrapper;
    }

    public function send(string $message): void
    {
        if ($this->wrapper !== null) {
            $this->wrapper->send($message);
        }
    }

    public function getWrapper(): ?Notifier
    {
        return $this->wrapper;
    }

    public function setWrapper(?Notifier $wrapper): void
    {
        $this->wrapper = $wrapper;
    }

}