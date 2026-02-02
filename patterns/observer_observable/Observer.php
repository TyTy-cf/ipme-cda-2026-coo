<?php

namespace patterns\observer_observable;

interface Observer
{

    public function notify(): void;

}