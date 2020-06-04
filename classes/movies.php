<?php 

// definizione classe
class Movie {
    // properties
    public $title;
    public $director;
    public $year;
    public $plot;

    // constructor
    public function __construct($_title, $_director, $_year, $_plot = 'Inserire trama') {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->plot = $_plot;
    }
}

// creazione oggetti
$movie1 = new Movie('titolo1', 'spielberg', 2020);

echo "titolo: $movie1->title <br>";
echo "regista: $movie1->director <br>";
echo "anno: $movie1->year <br>";
echo "trama: $movie1->plot";


?>