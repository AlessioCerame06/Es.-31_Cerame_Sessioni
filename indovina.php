<?php
    session_start();
?>
<style>
    .stileTabella {
        border: black, 2px, solid;
        border-collapse: collapse;
    }

</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if (!isset($_SESSION["nTentativi"])) {
                $_SESSION["nTentativi"] = 0;
                $_SESSION["numeriIndovinati"] = 0;
            }
            $_SESSION["nTentativi"] ++;
            $numeroCasuale = rand(1, 20);
            $numero = $_GET["numero"];
            if ($numeroCasuale == $numero) {
                $strEsito = "I due numeri sono uguali";
                $_SESSION["numeriIndovinati"] ++;
            } else {
                $strEsito = "I due numeri sono diversi";
            }
            echo "<table class='stileTabella'>";
            echo "<tr><th class='stileTabella'>Numero inserito</th><th class='stileTabella'>Numero casuale</th><th class='stileTabella'>Esito</th>
            <th class='stileTabella'>Numero tentativi</th><th class='stileTabella'>Numeri indovinati</th></tr>";
            echo "<tr><td class='stileTabella'>$numero</td><td class='stileTabella'>$numeroCasuale</td><td class='stileTabella'>$strEsito</td>
            <td class='stileTabella'>" . $_SESSION['nTentativi'] . "</td><td class='stileTabella'>" . $_SESSION["numeriIndovinati"] . "</td></tr>";
            echo "</table>";
            echo "<a href='scelta.html'>Ritorna alla pagina precedente</a>";
        ?>
        
    </body>
</html>