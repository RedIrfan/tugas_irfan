<?php
//~~~~~~Soal~~~~~~~~~
// 2.Bagaimana Membuat
//      a.Constructor
//      b. Destructor
//~~~~~~Jawaban~~~~~~

    class AnswerClass{
        public function __construct(){
            echo "this comes from a construct function.";
        }

        public function __destruct(){
            echo "this comes from a destruct function.";
        }
    }

    $answerno2 = new AnswerClass();

    echo "<br>";
    unset($answerno2);
    echo "<br>";

?>
