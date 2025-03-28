<?php
    class Student {
        public $name;
        public $scores; 

        public function __construct($name, $scores)
        {
            $this->name = $name;
            $this->scores = $scores;
        }

        public function calculateAverage() {
            return array_sum($this->scores) / count($this->scores);
        }

        public function getGrade() {
            // if (array_sum($this->scores) / count($this->scores) >= 90) {
            //     return "A";
            // } else if (array_sum($this->scores) / count($this->scores) >= 80) {
            //     return "B";
            // } else if (array_sum($this->scores) / count($this->scores) >= 70) {
            //     return "C";
            // } else if (array_sum($this->scores) / count($this->scores) >= 60 ) {
            //     return "D";
            // } else {
            //     return "E";
            // }
            $average = $this->calculateAverage();

            if ($average >= 90) {
                return "A";
            } else if ($average >= 80) {
                return "B";
            } else if ($average >= 70) {
                return "C";
            } else if ($average >= 60 ) {
                return "D";
            } else {
                return "E";
            }
        }
    }

    $students = [
        new Student("Fajry", [90, 85, 70, 95]),
        new Student("Antony", [70, 80, 80, 90]),
        new Student("Mudryk", [60, 90, 90, 70])
    ];

    // foreach ($students as $student) {
    //     echo $student->name . "<br>";
    // }

    // $initialScore = 0;
    // foreach ($students as $student) {
    //     $initialScore = $student->calculateAverage();
    // }
    // echo "Average Score :" . $initialScore;

    // foreach ($students as $score) {
    //     echo "Grade : " . $score->getGrade();
    // }

    foreach ($students as $student) {
        echo "Student : " . $student->name . "<br>";
        echo "Average Score : " . $student->calculateAverage() . "<br>";
        echo "Grade : " . $student->getGrade() . "<br>";
    }
?>