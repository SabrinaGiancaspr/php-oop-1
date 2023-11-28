<?php 
//definizione della classe 
class Production{
    //dichiarazione variabili 
    public $title;
    public $language;
    public $rating;

    //costruttore
    function __construct($new_title, $new_language, $new_rating)  {
        $this->title = $new_title;
        $this->language = $new_language;
        $this->setRating($new_rating);
    }

    public function getTitle(){
        return $this->title;
    }

    public function getLanguage(){
        return $this->language;
    }

    public function getRating(){
        return $this->rating;
    }
    
    public function setRating($rating){
        if(is_numeric($rating) && $rating >= 0 && $rating <= 10 ){
            $this->rating = $rating;
        }else{
            $this->rating = null;
            var_dump('rating number is not valid');
        }
    }
}

// Creazione di un nuovo oggetto Production
$emma_puzza = new Production("Emma puzza", "Italiano", 9.5);
$rina_profuma = new Production("Rina", "Inglese", 10);

$movies = [$emma_puzza, $rina_profuma];
// Stampare le informazioni dell'oggetto
// echo "Titolo: " . $emma_puzza->title . "<br>";
// echo "Lingua: " . $emma_puzza->language . "<br>";
// echo "Rating: " . $emma_puzza->rating . "<br>";

// Stampare le informazioni dell'oggetto
// echo "Titolo: " . $rina_profuma->title . "<br>";
// echo "Lingua: " . $rina_profuma->language . "<br>";
// echo "Rating: " . $rina_profuma->rating . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
            foreach($movies as $film){
                ?>
                <li><?php echo $film->getTitle() ?></li>
                <li><?php echo $film-> getLanguage()?></li>
                <li><?php echo $film->getRating()?> </li>
                <?php
            }
        ?>
        
    </ul>
</body>
</html>