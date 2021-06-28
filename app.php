<?php
include 'template/header.html'; //collegamento all'header della pagina
?>
<title>E-Commerce Mattia Schipilliti</title>
</head>
<body>	
	
<?php
	$qt = $_GET['qta'];  // quantità ricevuta e scritta nella variabile qt	
	$id = $_GET['idpr']; // id ricevuto e scritto nella variabile id
	$idoperatore = $_GET['id']; // idoperatoredetto
	$nomeoper = $_GET['nome']; //nomeoperatore
	$cognomeoper = $_GET['cognome']; //cognomeoperatore
	$idc = $_GET['idcollo']; //idcollo
	
	
	

	$connection = mysqli_connect("localhost","root","","magazzino"); //connesione al database
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Collo` (`ID_Collo`) VALUES (?)"; //inserimento collo 
	$stmt = $connection->prepare($Query1); 
    $stmt->bind_param("s", $idc);
    $stmt->execute();
	echo "$idc è l'id collo appena aggiunto o già presente<br>"; 

	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Disassembla` (`ID_Collo`, `ID_Operatore`) VALUES (?,?)"; // inserimento dati dissembla
	$stmt = $connection->prepare($Query1);
    $stmt->bind_param("ss", $idc, $idoperatore);
    $stmt->execute();	
	echo "L'operatore $nomeoper $cognomeoper ha disassemblato il collo $idc <br>"; 
	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Operatore` (`ID_Operatore`, `Nome`, `Cognome`) VALUES (?,?,?)"; //inserimento dati operatore
	$stmt = $connection->prepare($Query1);
    $stmt->bind_param("sss", $idoperatore, $nomeoper, $cognomeoper );
    $stmt->execute();	
	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Carica` (`ID_Operatore`, `ID_Prodotto`) VALUES (?,?)"; //iserimento dati carica prodotto e id operatore
	$stmt = $connection->prepare($Query1);
    $stmt->bind_param("ss", $idoperatore, $id);
    $stmt->execute();	
	echo "L'operatore $nomeoper $cognomeoper con numero $idoperatore ha appena caricato il prodotto $id<br>"; 
	
	
	
	$connection = mysqli_connect("localhost","root","","magazzino"); 
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`,`Quantita` FROM `Prodotto` WHERE `ID_Prodotto` = '$id'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result); 
	$qtcorr = $row[Quantita]; // quantità corrente 
	echo "Quantità prima dell'inserimento è $qtcorr<br>"; // stampa la quantità corrente 
	$qtfin = ($qtcorr + $qt); //somma la quantità corrente e quella rivevuta dall'app
	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query = "UPDATE `Prodotto` SET `Quantita` = '$qtfin' WHERE `Prodotto`.`ID_Prodotto` = '$id'";
	$result7 = mysqli_query($connection, $Query);
	

	
	//stampa messaggi 
		
		echo "L'id del prodotto è $id <br>"; 
		echo "La quantità presente ora nel Database è $qtfin<br>";
		echo "<h2>Quantità Aggiornata</h2>";

?>