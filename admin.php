<?php include 'template/header.html';?>
<title>Admin | E-Commerce Mattia Schipilliti</title>
</head>
<body>
<h1 align="center">Admin</h1>
<?php
include 'template/index.php';
	if(!isset($_SESSION['ruolo'])){ 
						header("Location: benvenuto.php");			
		}
		else
		{
						echo"Benvenuto Admin";
		}
	
?>
	<form align="center" action="addp.php" method="post" enctype="multipart/form-data">
  Nome:<br>
  <input type="text" id="nomep" name="nomep"><br>
  Descrizione :<br>
		<textarea type="text" id="Descrizione" name="Descrizione"></textarea> <br>
	  Prezzo:<br>
  <input type="text" id="Prezzo" name="Prezzo"><br>
  Quantità:<br>
  <input type="text" id="Quantita" name="Quantita"><br>
  Categoria:<br>
  <input type="text" id="Categoria" name="Categoria"><br>
		Squadra:<br>
  <input type="text" id="Squadra" name="Squadra"><br>
		ID Collo:<br>
  <input type="text" id="idcoll" name="idcoll"><br>
			ID Operatore:<br>
  <input type="text" id="idoper" name="idoper"><br>
	  Immagine:<br>
  <input type="file" id="Immagine" name="Immagine"><br><br>
		<input type="submit" value="Inserisci prodotto">
</form>
<p align="center"><a href="download/app.apk">Download APP</a></p>
<?php
include 'template/footer.html';
?>