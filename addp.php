<?php 
$nomep = $_POST['nomep'];
$descrizione = $_POST['Descrizione'];
$prezzo = $_POST['Prezzo'];
$quantita = $_POST['Quantita'];
$categoria = $_POST['Categoria'];
$squadra = $_POST['Squadra'];
$idcollo = $_POST['idcoll'];
$idoper = $_POST['idoper'];

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$upload_path = "images/";
	$filename = basename($_FILES['Immagine']['name']);
	$nome_immagine = $upload_path.$filename;
	$check = true;
	$output = "";
	
	if(file_exists($nome_immagine))
	{
		$check = false;
		$output = "Il file già esiste";
	}
	$ext = strtoupper(pathinfo($nome_immagine, PATHINFO_EXTENSION));
	if($ext != "PNG" && $ext != "JPG" && $ext != "JPEG"){
		$check = false;
		$output = "Estenzione non falida (Solo PNG, JPG O JPEG)";
	}
	if($check){
		if(!move_uploaded_file($_FILES['Immagine']['tmp_name'],$nome_immagine)){
			echo "Upload Fallito...";
     		echo "<a href='admin.php'>Clicca qui per riprovare</a>";
		}
		else
		{
			echo "File caricato con successo<br>";
		}
	}
	else
	{
		echo $output;
		echo "<a href='admin.php'>Clicca qui per riprovare</a>";

	}
}

if (strlen($nomep) !=0 && strlen($descrizione) !=0 && strlen($prezzo) !=0 && strlen($quantita) !=0 && strlen($categoria) !=0 && strlen($squadra)!=0 && strlen($idcollo)!=0)
{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT Nome, Cognome FROM Operatore WHERE `ID_Operatore` = '$idoper'"; //rilevamento nome e cognome da id operatore
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result); 
	$nome = $row[Nome]; 
	$cognome = $row[Cognome]; 
	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query = "INSERT INTO Prodotto (Nome, Descrizione, Prezzo, Quantita, Categoria, Squadra, immagine) VALUES (?,?,?,?,?,?,?)";//caricamento prodotto 
	$stmt = $connection->prepare($Query);
    $stmt->bind_param("sssssss", $nomep, $descrizione, $prezzo, $quantita, $categoria, $squadra, $nome_immagine);
    $stmt->execute();
	
		$connection = mysqli_connect("localhost","root","","magazzino"); 
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT * FROM `Prodotto` WHERE `Nome` = '$nomep'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result); 
	$id = $row[ID_Prodotto]; //id appena caricato

	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Collo` (`ID_Collo`) VALUES (?)"; //inserimento collo 
	$stmt = $connection->prepare($Query1); 
    $stmt->bind_param("s", $idcollo);
    $stmt->execute();
	echo "$idcollo è l'id collo appena aggiunto o già presente<br>"; 

	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Disassembla` (`ID_Collo`, `ID_Operatore`) VALUES (?,?)"; // inserimento dati dissembla
	$stmt = $connection->prepare($Query1);
    $stmt->bind_param("ss", $idcollo, $idoper);
    $stmt->execute();	
	echo "L'operatore $nome $cognome ha disassemblato il collo $idcollo <br>"; 
	
	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Operatore` (`ID_Operatore`, `Nome`, `Cognome`) VALUES (?,?,?)"; //inserimento dati operatore
	$stmt = $connection->prepare($Query1);
    $stmt->bind_param("sss", $idoper, $nome, $cognome );
    $stmt->execute();	
	
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Carica` (`ID_Operatore`, `ID_Prodotto`) VALUES (?,?)"; //iserimento dati carica prodotto e id operatore
	$stmt = $connection->prepare($Query1);
    $stmt->bind_param("ss", $idoper, $id);
    $stmt->execute();	
	echo "L'operatore $nome $cognome con numero $idoper ha appena caricato il prodotto $id<br>"; 
	
	
	echo "Inserimento Prodotto effettutato!<br>";
	echo "<a href='admin.php'>Clicca qui per tornare alla pagina admin</a>";
}
		else
		{
		echo "Hai lasciato i campi vuoti";	
		}
?>