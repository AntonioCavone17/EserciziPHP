<?php
    $dato = $_POST["dato"];
    $tipoConversione = $_POST["tipoConversione"];

    if ($tipoConversione === "ascii") {
        if (strlen($dato) === 1) {
            $codiceASCII = ord($dato);
            echo "Il codice ASCII per il carattere <b>$dato</b> e': $codiceASCII";
        } else {
            echo "Inserisci un singolo carattere";
        }
    } elseif ($tipoConversione === "carattere") {
        if (is_numeric($dato)) {
            $carattere = chr($dato);
            echo "Il carattere ASCII per il codice <b>$dato</b> e': $carattere";
        } else {
            echo "Inserisci un numero valido come codice ASCII";
        }
    }
?>