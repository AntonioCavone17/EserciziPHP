<?php
$numUno = $_POST["numUno"];
$numDue = $_POST["numDue"];

echo "Primo numero: ",decbin($numUno),"";
echo"<br>";
echo "Secondo numero: ",decbin($numDue),"";
echo"<br>";

switch ($_POST["operazione"]) {
    case "AND":
        echo "Risultato: ",decbin($numUno & $numDue),"";
        break;
    case "OR":
        echo "Risultato: ",decbin($numUno | $numDue),"";
        break;
    case "XOR":
        echo "Risultato: ",decbin($numUno ^ $numDue),"";
        break;
    default:
        echo"Scelta non valida";
        break;
}

?>