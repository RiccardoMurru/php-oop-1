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
$movie1 = new Movie('Amadeus', 'Milos Forman', 1984, 'Musica, Drammatico, Storico');
$movie1->plot = "The life, success and troubles of Wolfgang Amadeus Mozart, as told by Antonio Salieri, the contemporaneous composer who was insanely jealous of Mozart's talent and claimed to have murdered him.";

$movie2 = new Movie('Star Wars', 'George Lucas', 1977, 'Sci-fi, Azione, Avventura');
$movie2->plot = "Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire's world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.";

$movie3 = new Movie('The Fly', 'David Cronenberg', 1986, 'Horror, Drammatico, Sci-fi');

// get acutal year
$date_now = getdate();
$year_now = $date_now['year'];

?>