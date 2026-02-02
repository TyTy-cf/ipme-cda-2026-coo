<?php

namespace patterns\builder;

use patterns\singleton\Singleton;

class SingletonService extends LeagueItem
{

    private Singleton $singleton;

    /**
     * @param Singleton $singleton
     */
    public function __construct(Singleton $singleton)
    {
        $this->singleton = $singleton;
    }

    public function getSingleton(): Singleton
    {
        return $this->singleton;
    }

    public function setSingleton(Singleton $singleton): void
    {
        $this->singleton = $singleton;
    }

}