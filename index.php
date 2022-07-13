<?php
require_once "classi/movie.php";

$film = new Movie("Il gladiatore", "storico", 1997);

$film->setCountry("USA");
$film->setVote(3);

$film2 = new Movie("il signore degli anelli", "fantasy", 2002);

$film2->setCountry("USA");
$film2->setVote(4);

var_dump($film);
var_dump($film2);

$film->printFilm();
$film2->printFilm();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            
        ?>
    </div>
    
</body>
</html>