<?php

namespace patterns\builder;

abstract class LeagueBuilder
{

    protected LeagueItem $leagueItem;

    public function getItem(): LeagueItem {
        return $this->leagueItem;
    }

    abstract public function createItem(int $id);

}