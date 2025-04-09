<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Deals</title>
</head>
<body>
<div class="lang-it">
        <a href="index.html"><img src="img/it.png"></a>
    </div>
    <div class="lang-it">
        <a href="en.html"><img src="img/en.png"></a>
    </div>
    <nav>
        <div class="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="AboutUs.html">About us</a></li>
                <li class="has-children"><a href="#">Wines</a>
                    <ul class="sottomenù">
                        <li><a href="Regions.html">Regions</a></li>
                    </ul>
                <li><a href="Orders.php">Orders</a></li>
                <li><a href="Shops.html">Shops</a></li>
                <li><a href="Deals.html">Deals</a></li>
                <li><a href="ContactUs.html">Contact us </a></li>
                <li><a href="FindUs.html">Find us</a></li>
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

