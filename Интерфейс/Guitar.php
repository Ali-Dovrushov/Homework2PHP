<?php
    interface iTools {
        function play();
    }

    class Guitar implements iTools {
        public $guitar;

        function __construct ($guitar) {
            $this->guitar = $guitar;
        }

        function play() {
            echo "Guitar play = " . $this->guitar . "</br>";
        }
    }

    $guitar = new Guitar("Mi");

    $guitar->play();

    if (isset($_POST['guitar'])) {
        $guitar = $_POST['guitar'];
    }
?>