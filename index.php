<?php 
include_once __DIR__ . '/classes/movies.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Movies</h1>
        <div>
            <h2>Informazioni su: <?php echo $movie1->title ?></h2>
            <ul>
                <li>
                    Titolo: <?php echo $movie1->title ; ?>
                </li>
                <li>
                    Regista: <?php echo $movie1->director ; ?>
                </li>
                <li>
                    Anno: <?php echo $movie1->year ; ?>
                </li>
                <li>
                    Genere: <?php echo $movie1->getGenre() ; ?>
                </li>
                <li>
                    Trama: <?php echo $movie1->plot ; ?>
                </li>
                <li>
                    Il film <strong><?php echo $movie1->title ?></strong> è stato girato <?php echo $movie1->yearDifference($year_now) ; ?> anni fa
                </li>
            </ul>
        </div>
        <div>
            <h2>Informazioni su: <?php echo $movie2->title ?></h2>
            <ul>
                <li>
                    Titolo: <?php echo $movie2->title ; ?>
                </li>
                <li>
                    Regista: <?php echo $movie2->director ; ?>
                </li>
                <li>
                    Anno: <?php echo $movie2->year ; ?>
                </li>
                <li>
                    Genere: <?php echo $movie2->getGenre() ; ?>
                </li>
                <li>
                    Trama: <?php echo $movie2->plot ; ?>
                </li>
                <li>
                    Il film <strong><?php echo $movie2->title ?></strong> è stato girato <?php echo $movie2->yearDifference($year_now) ; ?> anni fa
                </li>
            </ul>
        </div>
        <div>
            <h2>Informazioni su: <?php echo $movie3->title ?></h2>
            <ul>
                <li>
                    Titolo: <?php echo $movie3->title ; ?>
                </li>
                <li>
                    Regista: <?php echo $movie3->director ; ?>
                </li>
                <li>
                    Anno: <?php echo $movie3->year ; ?>
                </li>
                <li>
                    Genere: <?php echo $movie3->getGenre() ; ?>
                </li>
                <li>
                    Trama: <?php echo $movie3->plot ; ?>
                </li>
                <li>
                    Il film <strong><?php echo $movie3->title ?></strong> è stato girato <?php echo $movie3->yearDifference($year_now) ; ?> anni fa
                </li>
            </ul>
        </div>
    </main>
</body>
</html>