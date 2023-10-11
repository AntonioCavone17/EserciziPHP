<?php
    $numero = $_POST["numero"];

    switch ($_POST["shift"]) {
        case "shiftRight":
            echo decbin($numero >> 1);
            break;
        case "shiftLeft":
            echo decbin($numero << 1);
            break;
        case "not":
            echo decbin(~$numero);
            break;
        default:
            echo"Scelta non valida";
            break;
    }
?>