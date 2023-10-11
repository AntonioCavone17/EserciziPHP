<?php

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$regione = $_POST["regione"];
$indirizzo = $_POST["indirizzo"];
$partitaIVA = $_POST["partitaIVA"];
$telefono = $_POST["telefono"];

$descrizione = $_POST["descrizione"];
$codice = $_POST["codice"];
$giancenza = $_POST["giacenza"];
$prezzoUnitario = $_POST["prezzoUnitario"];
$percentualeIva = $_POST["percentualeIva"];
$quantita = $_POST["quantita"];
$sconto = $_POST["sconto"];

$prezzoTotale = $prezzoUnitario*$quantita;
$prezzoIva = ($prezzoTotale*$percentualeIva)/100;


echo"<B>Dati cliente</B>
    <br>
    Nome: $nome
    <br>
    Cognome: $cognome
    <br>
    Regione: $regione
    <br>
    Indirizzo: $indirizzo
    <br>
    Parita IVA: $partitaIVA
    <br>
    Recapito telefonico: $telefono
    <br><br>
    <B>Dati prodotto</B>
    <br>
    Descrizione: $descrizione
    <br>
    Codice prodotto: $codice
    <br>
    Giacenza: $giancenza
    <br>
    Prezzo unitario: $prezzoUnitario euro
    <br>
    Percentuale IVA: $percentualeIva %
    <br>
    Quantita': $quantita
    <br>
    Percentuale sconto: $sconto %
    <br><br>
    Prezzo totale(IVA Inclusa): ",$prezzoTotale + $prezzoIva," euro
    <br>
    ";

    $percentualeSconto = ($prezzoTotale*$sconto)/100;
    $prezzoScontato = $prezzoTotale-$percentualeSconto;
    if ($sconto != "") {
        echo "Prezzo totale SCONTATO: $prezzoScontato euro";
    } else {
        echo "Nessuno sconto e' stato applicato";
    }
?>