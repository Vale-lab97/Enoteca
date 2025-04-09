<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<nav>
        <div class="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="chisiamo1.htm">Chi siamo</a></li>
                <li class="has-children"><a href="#">Vini</a>
                    <ul class="sottomenù">
                        <li><a href="regioni.html">Regioni</a></li>
                    </ul>
                <li><a href="ordini.php">Ordini</a></li>
                <li><a href="Negozi.htm">Negozi</a></li>
                <li><a href="Offerte.html">Offerte</a></li>
                <li><a href="contatti1.htm">Contatti</a></li>
                <li><a href="dovesiamo1.htm">Dove siamo</a></li>
            </ul>
        </div>
    </nav>
	<?php
	
$quantità=$_POST['quantità'];
function ScontoVini($importo,$percentuale){
	$sconto=0;
	$somma=0;
	$risultato=0;
	$tot=0;
	if(isset($_POST['quantità'])){
		$risultato=$importo*$_POST['quantità'];
		$somma=$risultato/100*$percentuale;
		$sconto=$risultato-$somma;
		return $sconto;
	}
}
$tot=ScontoVini(30,20)



	?>
</body>
</html>

<?php
;
		
?>

