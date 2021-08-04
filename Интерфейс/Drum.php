<?php
    interface iToolss {
        function play();
    }

    class Drum implements iToolss {
        public $drum;

        function __construct ($drum) {
            $this->drum = $drum;
        }

        function play() {
            echo "Drum diametr = " . $this->drum . "</br>";
        }
    }

    $drum = new Drum(45);

    $drum->play();

    if (isset($_POST['drum'])) {
        $drum = $_POST['drum'];
    }
?>