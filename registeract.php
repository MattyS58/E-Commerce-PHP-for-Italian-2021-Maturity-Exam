<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$nome = $_POST['Nome'];
$cognome = $_POST['Cognome'];
$via = $_POST['Via'];
$citta = $_POST['Città'];
$CAP = $_POST['CAP'];
$telefono = $_POST['Telefono'];
$ruolo = 'user';//inserimento user in ruolo di default alla registrazione

$pwhash = crypt($password, 'Chiavedicryptqualunque');
if (strlen($username) !=0 && strlen($password) !=0)
{

	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query = "INSERT INTO Utente (username, password, Nome, Cognome, Via, Citta, CAP, Telefono, ruolo) VALUES (?,?,?,?,?,?,?,?,?)";
	$stmt = $connection->prepare($Query);
    $stmt->bind_param("sssssssss", $username, $pwhash, $nome, $cognome, $via, $citta, $CAP, $telefono, $ruolo);
    $stmt->execute();
	
	echo "Registrazione Completata, Benvenuto!";
	header("Location: benvenuto.php");

}
		else
		{
		echo "Hai lasciato i campi vuoti <br>";	
		echo "<a href='register.php'>Clicca qui per riprovare</a>";
		}

?>