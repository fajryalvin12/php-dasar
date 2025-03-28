<?php
    class Movie {
        public $title;
        public $director;
        public $releaseYear; 

        public function __construct($title, $director, $releaseYear)
        {
            $this->title = $title;
            $this->director = $director;
            $this->releaseYear = $releaseYear;
        }

        public function getMovieInfo() {
            return "Detail Movie, name : {$this->title}, director: {$this->director}, release year : {$this->releaseYear}";
        }
        public function isClassic() {
            $isClassic = $this->releaseYear < 2000 ? "Yes" : "No";
            return $isClassic;
        }
    }

    $movie1 = new Movie("Terminator 2", "James Cameroon", 1991);
    $movie2 = new Movie("Kungfu Hustle", "Stephen Chow", 2004);
    $movie3 = new Movie("The Conjuring", "James Wan", 2013);

    echo $movie1->title . " = is the movie classic?" . $movie1->isClassic() . "<br>";
    echo $movie2->title . " = is the movie classic?" . $movie2->isClassic() . "<br>";
    echo $movie3->title . " = is the movie classic?" . $movie3->isClassic() . "<br>";
?>