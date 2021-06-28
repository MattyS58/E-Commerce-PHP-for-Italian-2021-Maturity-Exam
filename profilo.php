<?php	
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Commerce Mattia Schipilliti</title>
	<!-- Link -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<h1 align="center">Profilo</h1>
	<div id="container">
  <div class="navigazione">
  <a class="pulsante" href="index.php">Home</a>
  <a class="pulsante" href="contatti.php">Contatti</a>
  <a class="pulsante" href="shop.php">Shop</a>
  <a class="dx" href="carrello.php"><img class="carrello" src="images/carrello.png" width="51"></a>
  <a href="logout.php" class="pulsante dx">Esci</a>

  </div><br>
	<!-- Inizio Pagina-->
	<?php
		if (session_status() !=PHP_SESSION_NONE) {
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT Nome, Cognome, Via, CAP, Citta, Telefono FROM Utente WHERE `username` = '$_SESSION[username]'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align='center'>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Cognome</th>";
        echo "<th>Via</th>";
        echo "<th>CAP</th>";
		echo "<th>Città</th>";
		echo "<th>Telefono</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Cognome]</td>";
            echo "<td>$row[Via]</td>";
            echo "<td>$row[CAP]</td>";
			echo "<td>$row[Citta]</td>";
			echo "<td>$row[Telefono]</td>";
            echo "</tr>";
        }
echo "</table>";
    }
else
    {
        echo "<a class=pulsante href=login.html>Clicca qui per accedere</a>";
        mysqli_close($connection);

    }
}	
	else
	{
			echo'non connnesso';
	}
	?>
<?php
include 'template/footer.html';
?>
