<?php 
    class Book {
        // init the variable 
        public $title;
        public $author; 

        // construct new object using existed variable
        public function __construct($title, $author)
        {
            $this->title = $title;
            $this->author = $author;
        }

        // create new function 
        public function getInfo() {
            return "The book " . $this->title . " is written by " . $this->author;
        }
    }
    
    $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
    echo $book1 -> getInfo()
?>