<?php
include 'dbConnection.php';


$nome= $_POST['nome'];
$cognome =$_POST['cognome'];
$via = $_POST['via'];
$città = $_POST['città'];
$email = $_POST['email'];
$prodotto =$_POST['prodotto'];


if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(isset($_POST['cognome'])){
    $cognome = $_POST['cognome'];
}

if(isset($_POST['via'])){
    $via = $_POST['via'];
}

if(isset($_POST['città'])){
    $città = $_POST['città'];
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}

if(isset($_POST['prodotto'])){
    $prodotto = $_POST['prodotto'];
}
echo 'Ordine inviato con successo!';
?>

<?php
	// preparo ed invio la query
	$query = "INSERT INTO ordini (Nome, Cognome, Via , Città,Email, Prodotto)
	VALUES ('$nome', '$cognome', '$via', '$città', '$email'.'$prodotto')";
	$result = mysqli_query($dblink, $query);
	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysqli_error($dblink));
	}

	$numero = mysqli_num_rows( $result);
	$num=0;
	

	while($row=mysqli_fetch_array($result)){
		$num++;
		echo $row['Nome'], $row['Cognome'] , $row['Via'] , $row['Città'] , $row['Email'], $row['Prodotto'];
	}
	mysqli_close($dblink);
	
    
?>