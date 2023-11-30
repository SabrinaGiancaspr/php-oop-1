<?php
require_once 'movie.php'; 
require_once 'serie.php';
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
                    <th scope="col">Movies</th>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Profits</th>
                    <th scope="col">Duration</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $movies = [
                    new Movie("Emma puzza", "Italiano", 9.5, 500000, 120),
                    new Movie("Rina", "Inglese", 10, 750000, 105),
                    new Movie("Madame", "Italiano", "10", 900000, 150)
                ];

                foreach ($movies as $i => $film) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td><?php echo $film->getTitle() ?></td>
                        <td><?php echo $film->getLanguage() ?></td>
                        <td><?php echo $film->getRating() ?></td>
                        <td><?php echo $film->getProfit() ?> $</td>
                        <td><?php echo $film->getDuration() ?> min</td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Series</th>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Seasons</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                 $series = [
                    new Serie("The Walking Dead", "Inglese", 7, 12),
                    new Serie("How To Get Away With A Murderer", "Inglese", 10, 6),
                    new Serie("Vis a Vis", "Spagnolo", 5, 4),
                ];

                foreach ($series as $i => $serie){
                ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td><?php echo $serie->getTitle()?></td>
                        <td><?php echo $serie->getLanguage()?></td>
                        <td><?php echo $serie->getRating()?></td>
                        <td><?php echo $serie->getSeason()?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>