<?php

class Production {
    public $title;
    public $language;
    public $rating;

    function __construct($new_title, $new_language, $new_rating)  {
        $this->setTitle($new_title);
        $this->setLanguage($new_language);
        $this->setRating($new_rating);
    }

    public function setTitle(string $title) {
        if ($title) {
            $this->title = $title;
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function setLanguage(string $language) {
        if ($language) {
            $this->language = $language;
        }
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setRating($rating) {
        if (is_numeric($rating) && $rating >= 0 && $rating <= 10 ) {
            $this->rating = floatval($rating);
        } else {
            $this->rating = null;
            var_dump('rating number is not valid');
        }
    }
}
?>