<?php
include 'template/header.html';
?>
<title>Shop | E-Commerce Mattia Schipilliti</title>
</head>
<body>
	<h1 align="center">Shop</h1>
<?php
include 'template/index.php';
?>
	<?php
 include 'template/filtro.php';
?>
<?php
if(!isset($_SESSION['username']))
			{ 
		echo "<h2 align='center'>Accedi o Registrati per effettuare un acquisto</h2>";
		}
	
	$filtrop = $_POST['filtrop'];
	$abito = $_POST['abito'];
	
	if($filtrop == "tuttip")
	{
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT`ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto`";
	$result = mysqli_query($connection, $query);
	include 'template/prodotto.php';
	}
else if($filtrop == "milan" && $abito =="")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
}
else if($filtrop == "juve" && $abito =="")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`,`Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "juve" && $abito == "maglia")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT`ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus' AND `Categoria` = 'Maglia'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "milan" && $abito == "maglia")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan' AND `Categoria` = 'Maglia'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "juve" && $abito == "pantaloncini")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`,`Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus' AND `Categoria` = 'Pantaloncini'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "milan" && $abito == "pantaloncini")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan' AND `Categoria` = 'Pantaloncini'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "juve" && $abito == "calzettoni")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT`ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus' AND `Categoria` = 'Calzettoni'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "milan" && $abito == "calzettoni")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`,`Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan' AND `Categoria` = 'Calzettoni'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "" && $abito == "maglia")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT`ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Categoria` = 'Maglia'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "" && $abito == "pantaloncini")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT`ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Categoria` = 'Pantaloncini'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
else if($filtrop == "" && $abito == "calzettoni")
	{
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`,`Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Categoria` = 'Calzettoni'";
	$result = mysqli_query($connection, $query);
include 'template/prodotto.php';
	} //fine elese if
	else if($filtrop == "" && $abito == "err")
	{
		echo "<h4 align='center'>Seleziona una Squadra</h4>";
	} //fine elese if
else
	{
		echo "<h4 align='center'>Seleziona un filtro</h4>";
	}
?>
	<?php
include 'template/footer.html';
?>