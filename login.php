<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accedi | E-Commerce Mattia Schipilliti</title>
	<!-- Link -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<h1 align="center">Accedi</h1>
	<div id="container">
  <div class="navigazione">
  <a class="pulsante" href="index.php" >Home</a>
  <a class="pulsante" href="">Contatti</a>
  <a class="pulsante" href="shop.php">Shop</a>  <a class="dx" href="carrello.php"><img class="carrello" src="images/carrello.png" width="51"></a> 
  
</div><br>
<!-- Inizio Pagina-->
<form align="center" action="loginact.php" method="post">
  Username:<br>
  <input type="text" id="username" name="username"><br>
  Password:<br>
  <input type="password" id="password" name="password"><br>
	<br>
	<input type="submit" value="Accedi"><br>
	
     <a href="register.php"> o Clicca qui per Registrarti</a>

</form>
</div>

<?php
include 'template/footer.html';
?>
