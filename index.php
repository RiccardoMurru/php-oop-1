<?php 
include_once __DIR__ . '/classes/movies.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Movies OOP</title>
</head>
<body>
    <main class="container d-flex flex-column align-items-center">
        <h1 class="my-4">Movies</h1>
        <div class="card w-75 mb-4">
            <div class="card-body">
                <h2 class="text-center text-primary mb-3">Informazioni su: <?php echo $movie1->title ?></h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        Titolo: <?php echo $movie1->title ; ?>
                    </li>
                    <li class="list-group-item">
                        Regista: <?php echo $movie1->director ; ?>
                    </li>
                    <li class="list-group-item">
                        Anno: <?php echo $movie1->year ; ?>
                    </li>
                    <li class="list-group-item">
                        Genere: <?php echo $movie1->getGenre() ; ?>
                    </li>
                    <li class="list-group-item text-justify">
                        Trama: <?php echo $movie1->plot ; ?>
                    </li>
                    <li class="list-group-item">
                        Il film <strong><?php echo $movie1->title ?></strong> è stato girato <?php echo $movie1->yearDifference($year_now) ; ?> anni fa
                    </li>
                </ul>
            </div>
        </div>
        <div class="card w-75 mb-4">
            <div class="card-body">
                <h2 class="text-center text-primary mb-3">Informazioni su: <?php echo $movie2->title ?></h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        Titolo: <?php echo $movie2->title ; ?>
                    </li>
                    <li class="list-group-item">
                        Regista: <?php echo $movie2->director ; ?>
                    </li>
                    <li class="list-group-item">
                        Anno: <?php echo $movie2->year ; ?>
                    </li>
                    <li class="list-group-item">
                        Genere: <?php echo $movie2->getGenre() ; ?>
                    </li>
                    <li class="list-group-item text-justify">
                        Trama: <?php echo $movie2->plot ; ?>
                    </li>
                    <li class="list-group-item">
                        Il film <strong><?php echo $movie2->title ?></strong> è stato girato <?php echo $movie2->yearDifference($year_now) ; ?> anni fa
                    </li>
                </ul>
            </div>
        </div>
        <div class="card w-75 mb-4">
            <div class="card-body">
                <h2 class="text-center text-primary mb-3"> Informazioni su: <?php echo $movie3->title ?></h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        Titolo: <?php echo $movie3->title ; ?>
                    </li>
                    <li class="list-group-item">
                        Regista: <?php echo $movie3->director ; ?>
                    </li>
                    <li class="list-group-item">
                        Anno: <?php echo $movie3->year ; ?>
                    </li>
                    <li class="list-group-item">
                        Genere: <?php echo $movie3->getGenre() ; ?>
                    </li>
                    <li class="list-group-item text-justify">
                        Trama: <?php echo $movie3->plot ; ?>
                    </li>
                    <li class="list-group-item">
                        Il film <strong><?php echo $movie3->title ?></strong> è stato girato <?php echo $movie3->yearDifference($year_now) ; ?> anni fa
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>