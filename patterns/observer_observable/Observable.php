<?php

namespace patterns\observer_observable;

abstract class Observable
{

    /** @var array<Observer> $observers */
    private array $observers = [];

    public function addObserver(Observer $observer): Observable {
        $this->observers[] = $observer;
        return $this;
    }

    public function unregister(Observer $observer): Observable {
        unset($this->observers[array_search($observer, $this->observers)]);
        return $this;
    }

    public function notifyAll(): void {
        foreach ($this->observers as $observer) {
            $observer->notify();
        }
    }

    public function notify(Observer $observer): void
    {
        $observer->notify();
    }

}