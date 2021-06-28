<?php 
session_start();
			$pr=$_POST['p'];
			$idfinale=$_POST['idid'];
			$qtfinale=$_POST['qt'];
			$username = $_SESSION['username'];
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$Query1 = "INSERT INTO `Composto` (`ID_Prodotto`, `Quantita`, `username`) VALUES (?,?,?)";
	$stmt1 = $connection->prepare($Query1);
    $stmt1->bind_param("sss", $idfinale, $pr, $username);
    $stmt1->execute();
			$qtq=($qtfinale-$pr); //quantità query
			echo $qtq;
			//rimuovi quantità
			$connection = mysqli_connect("localhost","root","","magazzino");
    		mysqli_select_db($connection, "magazzino");
    			$Query6 = "UPDATE `Prodotto` SET `Quantita` = '$qtq' WHERE `Prodotto`.`ID_Prodotto` = '$idfinale'";
				$result6 = mysqli_query($connection, $Query6);
  header( 'Location: shop.php ' ) ;
?>