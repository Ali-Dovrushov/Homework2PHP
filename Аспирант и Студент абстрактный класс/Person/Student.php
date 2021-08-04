<?php
    abstract class Person {
        public $surname, $id_book;

        function __construct($surname, $id_book)
        {
            $this->surname = $surname;
            $this->id_book = $id_book;
        }

        function DisplayInfo()
        {
            echo "Surname: " . $this->surname;
            echo "ID book: " . $this->id_book;
        }
    }
    class Student extends Person
    {
        public $course;

        function __construct($surname, $id_book, $course)
        {
            parent::__construct($surname, $id_book);
            $this->course = $course;
        }

        function DisplayInfo()
        {
            echo "Surname: " . $this->surname . "</br>";
            echo "Course: " . $this->course . "</br>";
            echo "ID book: " . $this->id_book . "</br> </br>";
        }
    }

    $student = new Student("Ali", 2, 4);
    $student->DisplayInfo();

    if (isset($_POST['student'])) {
        $student = $_POST['student'];
    }
?>