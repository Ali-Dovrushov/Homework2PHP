<?php
    interface iTool {
        function play();
    }

    class Pipe implements iTool {
        public $pipe;

        function __construct ($pipe) {
            $this->pipe = $pipe;
        }

        function play() {
            echo "Pipe area = " . $this->pipe . "</br>";
        }
    }

    $pipe = new Pipe(12);

    $pipe->play();

    if (isset($_POST['pipe'])) {
        $pipe = $_POST['pipe'];
    }
?>