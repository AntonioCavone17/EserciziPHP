<?php
    $numUno = $_POST["numUno"];
    $numDue = $_POST["numDue"];

    echo "<B>Il Massimo Comun Divisore tra $numUno e $numDue e' uguale a:</B> ", mcd($numUno, $numDue) ,"<br>";
    echo "<B>Il minimo comune multiplo e':</B> ", mcm($numUno, $numDue) ,"<br>";

    function mcd($numUno, $numDue) {
        while($numDue != 0)
        {
            $resto = $numUno % $numDue;
            $numUno = $numDue;
            $numDue = $resto;
        }
        return $numUno;
    }

    function mcm($numUno, $numDue) {
        return ($numUno * $numDue) / mcd($numUno,$numDue);
    }
?>