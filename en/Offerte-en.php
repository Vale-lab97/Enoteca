<?php

include 'sconto-offerte-en.php';
 
if(isset($_POST['sconto-vini'])){
    $vino = $_POST['sconto-vini'];
    echo "You have purchased: " . $vino;
    print("<br>" ."Number of peaces:  ".$quantità);
    print("<br>" ."10% discount applied");
    print("<br>"."Amount due:  ".$tot." €");

}
echo "<br>"."<a href=Deals.html>Go back</a>";








?>