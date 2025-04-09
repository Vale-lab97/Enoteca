<?php
include 'dbConnection.php';
?>
  <?php
    $Nome = $_POST['name'];
    $Cognome = $_POST['cognome'];
    $opzioni = $_POST['Scelta-Opzione'];

    
    if(isset($_POST['name'])){
        $Nome = $_POST['name'];
    }
    
    if(isset($_POST['cognome'])){
        $Cognome = $_POST['cognome'];
    }

    if(isset($_POST['Scelta-Opzione'])){
        $opzioni = $_POST['Scelta-Opzione'];
    }
	header('location:Orders.php');
	echo "Ordine inviato!";

	
?>
<?php
	// preparo ed invio la query
	$query = "INSERT INTO ordini (Prodotto, Nome, Cognome)
	VALUES ('$opzioni','$Nome', '$Cognome')";
	$result = mysqli_query($dblink, $query);
	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysqli_error($dblink));
	}

	$numero = mysqli_num_rows( $result);
	$num=0;
	

	while($row=mysqli_fetch_array($result)){
		$num++;
		echo('<select name=Prodotto>');
		echo("option value='Scegli prodotto'".$row['Prodotto']);
	}
	
	mysqli_close($dblink);
	
    
?>