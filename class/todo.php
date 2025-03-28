<?php
    class Task {
        public $taskName;
        public $isCompleted;

        public function __construct($taskName, $isCompleted = false)
        {
            $this->taskName = $taskName;
            $this->isCompleted = $isCompleted;
        }

        public function markCompleted() {
            $this->isCompleted = true;
        }

        public function getTaskInfo() {
            $status = $this->isCompleted ? "Completed" : "Pending";
            return "Task name: {$this->taskName}, Status: {$status}";
        }
    }

    $task1 = new Task ("Clean the room", true);
    $task2 = new Task ("Code small things");
    $task3 = new Task ("Clean the room");

    $task2->markCompleted();

    echo $task1->getTaskInfo() . "<br>";
    echo $task2->getTaskInfo() . "<br>";
    echo $task3->getTaskInfo();
?>