<?php
include 'template/header.html';
?>
<title>Carrello | E-Commerce Mattia Schipilliti</title>
</head>
<body>
	<h1 align="center">Carrello</h1>
<?php
include 'template/index.php';
?><br><br><br>
<?php	
	if(!isset($_SESSION['username'])){ 

		echo "Accedi per aggiungere e confermare un ordine <br>"; 
			echo"<a href=login.php>Accedi</a>";

		}
	$username = $_SESSION['username'];
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT * FROM Composto WHERE username = '$username'";
	$result1 = mysqli_query($connection, $query);
	$prezzof=0;
	if(mysqli_num_rows($result1) != 0){	
	$Npr=0;
	echo "<a align='center' class='conferma' href='conferma.php'>Conferma ordine</a>";
	while ($row = mysqli_fetch_array($result1)){
	$idprodotto=$row[ID_Prodotto];
	$quantita=$row[Quantita];
  	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query2 = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Immagine` FROM `Prodotto` WHERE `ID_Prodotto` = '$idprodotto'";
	$result2 = mysqli_query($connection, $query2);
	include 'template/prodottocart.php';
		$Npr++;
		 $_SESSION['npr']=$Npr;
	}
	}
	if($prezzof==0){
				echo "<h1 align='center'>Il Carrello è vuoto</h1>"; 
	}
	else
	{
				echo "<h1 align='center'>Il prezzo complessivo è $_SESSION[prezzofin]</h1>"; 
	}

?>
<?php
include 'template/footer.html';
?>