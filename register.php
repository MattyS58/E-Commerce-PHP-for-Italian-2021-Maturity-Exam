<!doctype html>	
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrati | E-Commerce Mattia Schipilliti</title>
	<!-- Link -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<h1 align="center">Registrati</h1>
	<div id="container">
  <div class="navigazione">
  <a class="pulsante" href="index.php" >Home</a>
  <a class="pulsante" href="">Contatti</a>
  <a class="pulsante" href="shop.php">Shop</a>
  <a class="dx" href="carrello.php"><img class="carrello" src="images/carrello.png" width="51"></a> 
  
</div>
<!-- Inizio Pagina-->
<form align="center" action="registeract.php" method="post"><br>
  Username:<br>
  <input type="text" id="username" name="username"><br>
  Password:<br>
  <input type="password" id="password" name="password"><br>

	  Nome:<br>
  <input type="text" id="Nome" name="Nome"><br>
  Cognome:<br>
  <input type="text" id="Cognome" name="Cognome"><br>
	  Via:<br>
  <input type="text" id="Via" name="Via"><br>
  Città:<br>
  <input type="text" id="Città" name="Città"><br>
	  CAP:<br>
  <input type="text" id="CAP" name="CAP"><br>
  Telefono:<br>
  <input type="text" id="Telefono" name="Telefono"><br><br>
		<input type="submit" value="Registrati"><br><br>
	<a href="login.php">Se sei già registrato, clicca qui per accedere</a>
</form>
	
</div>	
<?php
include 'template/footer.html';
?>
