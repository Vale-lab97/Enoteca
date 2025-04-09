<?php
include 'dbConnection.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<style>
    .alert{
    margin-top: 20px;
    color: black;
    font-size: 15px;
    text-align: center;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
</style>

<?php
    $Nome = $_POST['nome'];
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
?>
<!-- BOOTSTRAP ALERT -->
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Ben fatto!</h4>
  <span>ORDINE INVIATO!</span><br>
  <a href="index.html">Torna alla home</a>
  <hr>
</div>
<!-- END BOOTSTRAP ALERT -->

<?php
	// preparo ed invio la query
	$query = "INSERT INTO ordini (prodotto, nome, cognome)
	VALUES ('$opzioni','$Nome', '$Cognome')";
	$result = mysqli_query($dblink, $query);
	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysqli_error($dblink));
	}
	
	/* $numero = mysqli_num_rows($result);
    $num=0;
	while($row=mysqli_fetch_array($result)){
		$num++;
		echo('<select name=Prodotto>');
		echo("option value='Scegli prodotto'".$row['Prodotto']);
	} */
	
	mysqli_close($dblink);
    
?>