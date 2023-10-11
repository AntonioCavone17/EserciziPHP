<?php
$nome = $_POST["nome"];
$eta = $_POST["eta"];
$abbonamento = $_POST["abbonamento"];
$prezzoAnnuale = 0;

if ($eta < 18 || $eta > 64) {
    echo "Costo abbonamento 35 euro <br>";
    $prezzoMensile = 35;
} else {
    $prezzoMensile = 45;
}

if($abbonamento == "Mensile"){
    $prezzoAnnuale = $prezzoMensile*12;
}else if($abbonamento == "Bimestrale"){
    $prezzoMensile = ($prezzoMensile*2) - ((($prezzoMensile * 2) * 10)/100);
    $prezzoAnnuale = $prezzoMensile*6;
}else if($abbonamento == "Trimestrale"){
    $prezzoMensile = ($prezzoMensile*3) - ((($prezzoMensile * 3) * 15)/100);
    $prezzoAnnuale = $prezzoMensile*4;
}else if($abbonamento == "Annuale"){
    $prezzoMensile = ($prezzoMensile*12) - ((($prezzoMensile * 12) * 20)/100);
    $prezzoAnnuale = $prezzoMensile;
} 

echo"
<table border='1'>
        <tr align='center'>
            <td colspan='3'>Dati inseriti nel form</td>
            <td>Output prodotto dal server</td>
        </tr>
        <tr align='center'>
            <td>Nome</td>
            <td>Eta'</td>
            <td>Pagamento</td>
            <td>Output</td>
        </tr>
        <tr align='center'>
            <td>$nome</td>
            <td>$eta</td>
            <td>$abbonamento</td>
            <td>Il prezzo per un anno e' di $prezzoAnnuale euro</td>
        </tr>
    </table>";
?>