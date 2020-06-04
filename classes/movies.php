<?php 

// definizione classe
class Movie {
    // properties
    public $title;
    public $director;
    public $year;
    public $plot;
    private $genre;

    // constructor
    public function __construct($_title, $_director, $_year, $_genre, $_plot = 'Inserire trama') {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre =$_genre;
        $this->plot = $_plot;
    }

    // methods
    public function yearDifference($actual_year) {
        return $actual_year - $this->year;
    }

    public function getGenre() {
        return $this->genre;
    }
}

// creazione oggetti
$movie1 = new Movie('titolo1', 'spielberg', 2020, 'fantasy');

$movie2 = new Movie('titolo2', 'lucas', 2010, 'sci-fi');
$movie2->plot = "trama film di lucas molto bello";

$movie3 = new Movie('titolo3', 'soderbergh', 1998, 'horror');

// get acutal year
$date_now = getdate();
$year_now = $date_now['year'];

echo "titolo: $movie1->title <br>";
echo "regista: $movie1->director <br>";
echo "anno: $movie1->year <br>";
echo "trama: $movie1->plot <br>";
echo "genere: {$movie1->getGenre()} <br>";
echo "il film è stato girato {$movie1->yearDifference($year_now)} anni fa <br><br>";

echo "titolo: $movie2->title <br>";
echo "regista: $movie2->director <br>";
echo "anno: $movie2->year <br>";
echo "trama: $movie2->plot <br>";
echo "genere: {$movie2->getGenre()} <br>";
echo "il film è stato girato {$movie2->yearDifference($year_now)} anni fa <br><br>";

echo "titolo: $movie3->title <br>";
echo "regista: $movie3->director <br>";
echo "anno: $movie3->year <br>";
echo "trama: $movie3->plot <br>";
echo "genere: {$movie3->getGenre()} <br>";
echo "il film è stato girato {$movie3->yearDifference($year_now)} anni fa <br><br>";


?>