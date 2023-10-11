<?php
define('PUNTEGGIOVITTORIA', 3);
define('PUNTEGGIOPAREGGIO', 1);

$nome = $_POST["nome"];
$vittorie = $_POST["vittorie"];
$pareggi = $_POST["pareggi"];
$sconfitte = $_POST["sconfitte"];

$nome2 = $_POST["nome2"];
$vittorie2 = $_POST["vittorie2"];
$pareggi2 = $_POST["pareggi2"];
$sconfitte2 = $_POST["sconfitte2"];

$sommaVittorie = PUNTEGGIOVITTORIA*$vittorie;
$sommaPareggi = PUNTEGGIOPAREGGIO*$pareggi;
$punteggioTotale = $sommaVittorie + $sommaPareggi;

$sommaVittorie2 = PUNTEGGIOVITTORIA*$vittorie2;
$sommaPareggi2 = PUNTEGGIOPAREGGIO*$pareggi2;
$punteggioTotale2 = $sommaVittorie2 + $sommaPareggi2;

$partiteGiocate = $vittorie + $pareggi + $sconfitte;
$partiteGiocate2 = $vittorie2 + $pareggi2 + $sconfitte2;

if($punteggioTotale > $punteggioTotale2){
    $squadraVincitrice = $nome;
    $squadraSconfitta = $nome2;
    $risultatoAlto = $punteggioTotale;
    $risultatoBasso = $punteggioTotale2;
}else{
    $squadraVincitrice = $nome2;
    $squadraSconfitta = $nome;
    $risultatoAlto = $punteggioTotale2;
    $risultatoBasso = $punteggioTotale;
}

if($partiteGiocate == $partiteGiocate2){
    $partite = "Le squadre hano giocato lo stesso numero di partite.";
}else{
    $partite = "Le due squadre hanno giocato un numero di partite diverso.";
}
echo"
<table border='1'>
            <tr align='center'>
                <td colspan='2'>Dati inseriti nel form</td>
                <td>Output prodotto dal server</td>
            </tr>
            <tr align='center'>
                <td>
                    Nome <br>
                    Vinte <br>
                    Pareggiate <br>
                    Perse
                </td>
                <td>
                    <B>$nome</B><br>
                    $vittorie<br>
                    $pareggi<br>
                    $sconfitte
                </td>
                <td align='left' rowspan='2'>
                    <b>Classifica</b> <br>
                    $squadraVincitrice = $risultatoAlto<br>
                    $squadraSconfitta = $risultatoBasso<br>
                    $partite
                </td>
            </tr>
            <tr align='center'>
                <td>
                    Nome <br>
                    Vinte <br>
                    Pareggiate <br>
                    Perse
                </td>
                <td>
                    <B>$nome2</B><br>
                    $vittorie2<br>
                    $pareggi2<br>
                    $sconfitte
                </td>
            </tr>
        </table>
";

?>