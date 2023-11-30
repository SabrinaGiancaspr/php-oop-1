<?php

require_once 'Production.php';

class Serie extends Production {
    public $season;

    function __construct($new_title, $new_language, $new_rating, $new_season) {
        parent::__construct($new_title, $new_language, $new_rating);
        $this->setSeason($new_season);
    }

    public function setSeason($season) {
        if (is_numeric($season) && $season >= 1) {
            $this->season = $season;
        } else {
            $this->season = null;
        }
    }

    public function getSeason() {
        return $this->season;
    }
}
?>