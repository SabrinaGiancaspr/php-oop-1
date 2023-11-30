<?php

require_once 'Production.php';

class Movie extends Production {
    public $profit;
    public $duration;

    function __construct($new_title, $new_language, $new_rating, $new_profit, $new_duration)  {
        parent::__construct($new_title, $new_language, $new_rating);
        $this->setProfit($new_profit);
        $this->setDuration($new_duration);
    }

    public function setProfit($profit) {
        if (is_numeric($profit) && $profit >= 0) {
            $this->profit = $profit;
        } else {
            $this->profit = null;
        }
    }

    public function getProfit() {
        return $this->profit;
    }

    public function setDuration($duration) {
        if (is_numeric($duration) && $duration >= 0) {
            $this->duration = $duration;
        } else {
            $this->duration = null;
        }
    }

    public function getDuration() {
        return $this->duration;
    }
}
?>