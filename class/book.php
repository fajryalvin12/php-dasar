<?php 
    class Book {
        public $title;
        public $author; 

        public function __construct($title, $author)
        {
            $this->title = $title;
            $this->author = $author;
        }

        public function getInfo() {
            return "The book " . $this->title . " is written by " . $this->author;
        }
    }
    $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
    echo $book1 -> getInfo()
?>