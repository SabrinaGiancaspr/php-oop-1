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
          // Restituisce il titolo della produzione
    }

    public function getLanguage(){
        return $this->language;
        // Restituisce la lingua della produzione
    }

    public function getRating(){
        return $this->rating;
         // Restituisce il rating della produzione
    }
    
    public function setRating($rating){
        //controllo se rating è numerico e se è un numero tra 0 e 10
        if(is_numeric($rating) && $rating >= 0 && $rating <= 10 ){

            $this->rating = floatval($rating);
        }else{
            $this->rating = null;
            var_dump('rating number is not valid');
            // se il rating non è valido, imposta il rating a null e stampa un messaggio di avviso
        }
    }
}

// Creazione di un nuovo oggetto Production
$emma_puzza = new Production("Emma puzza", "Italiano", 9.5);
$rina_profuma = new Production("Rina", "Inglese", 10);
$madame_milano= new Production("Madame", "Italiano", "10");

//creo array movies
$movies = [$emma_puzza, $rina_profuma, $madame_milano];
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Films</th>
            <th scope="col">Title</th>
            <th scope="col">Language</th>
            <th scope="col">Rating</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($movies as $i => $film){
            ?>
            <tr>
                <th scope="row"><?php echo $i + 1 ?></th>
                <td><?php echo $film->getTitle() ?></td>
                <td><?php echo $film->getLanguage() ?></td>
                <td><?php echo $film->getRating() ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
</div>
</body>
</html>