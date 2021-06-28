<?php
include 'template/header.html';
?>
<title>Conferma ordine | E-Commerce Mattia Schipilliti</title>
</head>
<body>
	<h2 align="center">Conferma ordine</h2>
<?php
include 'template/index.php';
	echo $prezzof;
session_start();
if(!isset($_SESSION['username'])){ 

  header( 'Location: carrello.php' ) ;

		}
		else
		{	
			//aggiungi in ordine
			$prezzofinale=$_SESSION['prezzofin'];
			$username = $_SESSION['username'];
			$connection = mysqli_connect("localhost","root","","magazzino");
    		mysqli_select_db($connection, "magazzino");
    			$Query5 = "INSERT INTO `Ordine` (`Prezzo_Complessivo`, `username`) VALUES (?,?)";
				$stmt2 = $connection->prepare($Query5);
    			$stmt2->bind_param("ds", $prezzofinale, $username);
				$stmt2->execute();
			
			$connection = mysqli_connect("localhost","root","","magazzino");
    		mysqli_select_db($connection, "magazzino");
    		$query = "DELETE FROM `Composto` WHERE `username` = '$username'";
			$result = mysqli_query($connection, $query);
			echo "<h1 align='center'>Ordine confermato!</h1>";		
			$_SESSION['prezzofin']=0;
			$_SESSION['npr']=0;
		}
	
?>