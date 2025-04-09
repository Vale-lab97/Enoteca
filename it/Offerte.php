<?php

include 'sconto-offerte.php';
 
if(isset($_POST['sconto-vini'])){
    $vino = $_POST['sconto-vini'];
    echo "<p style=' background-color: #f2f2f2; color: black; font-size: 18px; font-weight: bold;'>Hai acquistato: " . $vino . "</p>";
    print("<p style='background-color: #f2f2f2;  color:black;  font-size: 20px;'>Numero pezzi:  " . $quantità . "</p>");
    print("<p style='background-color: #f2f2f2;  color:black;  font-size: 20px;'>Sconto applicato del 10%</p>");
    print("<p style='background-color: #f2f2f2;  color:black;  font-size: 20px; font-weight: bold;'>Totale da pagare:  " . $tot . " €</p>");
    
}
echo "<br>"."<a style = 'color:black; font-size: 20px; background-color:white'href=offerte.html>Torna indietro</a>";








?>