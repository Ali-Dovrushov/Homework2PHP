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

    class Aspirant extends Person
    {
        public $candidate;

        function __construct($surname, $id_book, $condidate)
        {
            parent::__construct($surname, $id_book);
            $this->candidate = $condidate;
        }

        function DisplayInfo()
        {
            echo "Surname: " . $this->surname . "</br>";
            echo "Candidate: " . $this->candidate . "</br>";
            echo "ID book: " . $this->id_book . "</br>";
        }
    }

    if (isset($_POST['person'])) {
        $aspirant = $_POST['aspirant'];
    }

    $aspirant = new Aspirant("Rufat", 4, "PHP engineer");
    $aspirant->DisplayInfo();
?>