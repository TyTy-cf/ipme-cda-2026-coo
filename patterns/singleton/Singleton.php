<?php

namespace patterns\singleton;

use DateTime;

class Singleton
{

    private static Singleton $instance;

    private DateTime $createdAt;

    private function __construct() {
        $this->createdAt = new DateTime();
    }

    public static function getInstance(): Singleton {
        session_start();
        if (!isset($_SESSION['singleton'])) {
//            self::$instance = new Singleton();
            $_SESSION['singleton'] = new Singleton();
        }
        self::$instance = $_SESSION['singleton'];
        session_write_close();
        return self::$instance;
    }

    public function getCreatedAt(): DateTime {
        return $this->createdAt;
    }

}