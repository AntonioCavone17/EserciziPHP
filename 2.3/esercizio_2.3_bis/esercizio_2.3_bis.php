<?php
$marca = $_POST["marca"];
$modello = $_POST["modello"];
$porteHDMI = $_POST["porteHDMI"];
$refreshrate = $_POST["refreshrate"];
$risoluzione = $_POST["risoluzione"];
$consiglioHdmi;
$consiglioRefreshrate;
$consiglioRisoluzione;

$marca2 = $_POST["marca2"];
$modello2 = $_POST["modello2"];
$porteHDMI2 = $_POST["porteHDMI2"];
$refreshrate2 = $_POST["refreshrate2"];
$risoluzione2 = $_POST["risoluzione2"];
$consiglioHdmi2;
$consiglioRefreshrate2;
$consiglioRisoluzione2;


if ($porteHDMI < 2) {
    $consiglioHdmi = "Ti consiglio di acquistare un televisore con almeno due porte hdmi";
} else {
    $consiglioHdmi = "Porte HDMI: ok.";
}

 if($refreshrate < 50) {
    $consiglioRefreshrate = "Ti consigliamo di acquistare un televisiore con un refreshrate maggiore di 50Hz";
} else {
    $consiglioRefreshrate = "Refresh rate: ok.";
}

if ($risoluzione == "HD Ready" || $risoluzione == "Full HD") {
    $consiglioRisoluzione = "Ti consigliamo di comprare un televisore che abbia una risoluzione piu alta del Full HD";
} else {
    $consiglioRisoluzione = "Risoluzione: ok.";
}

if ($porteHDMI2 < 2) {
    $consiglioHdmi2 = "Ti consiglio di acquistare un televisore con almeno due porte hdmi";
} else {
    $consiglioHdmi2 = "Porte HDMI: ok.";
}

 if($refreshrate2 < 50) {
    $consiglioRefreshrate2 = "Ti consigliamo di acquistare un televisiore con un refreshrate maggiore di 50Hz";
} else {
    $consiglioRefreshrate2 = "Refresh rate: ok.";
}

if ($risoluzione2 == "HD Ready" || $risoluzione == "Full HD") {
    $consiglioRisoluzione2 = "Ti consigliamo di comprare un televisore che abbia una risoluzione piu alta del Full HD";
} else {
    $consiglioRisoluzione2 = "Risoluzione: ok.";
}


echo "
    <table border='1'>
        <tr align='center'>
            <td colspan='2'>Dati inseriti nel form</td>
            <td>Output prodotto dal server</td>
        </tr>
        <tr align='center'>
            <td>
                Marca<br>
                Modello<br>
                Porte hdmi<br>
                Refresh rate<br>
                Risoluzione
            </td>
            <td>
                $marca<br>
                $modello<br>
                $porteHDMI<br>
                $refreshrate<br>
                $risoluzione
            </td>
            <td align='left'>
                <b>Consigli di acquisto</b> <br>
                $consiglioHdmi<br>
                $consiglioRefreshrate<br>
                $consiglioRisoluzione
            </td>
        </tr>
        <tr align='center'>
            <td>
                Marca<br>
                Modello<br>
                Porte hdmi<br>
                Refresh rate<br>
                Risoluzione
            </td>
            <td>
                $marca2<br>
                $modello2<br>
                $porteHDMI2<br>
                $refreshrate2<br>
                $risoluzione2
            </td>
            <td align='left'>
                <b>Consigli di acquisto</b> <br>
                $consiglioHdmi2<br>
                $consiglioRefreshrate2<br>
                $consiglioRisoluzione2
            </td>
        </tr>
    </table>";
?>