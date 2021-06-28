<?php
include 'template/header.html';
?>
<title>Home | E-Commerce Mattia Schipilliti</title>
</head>
<body>
	<h1 align="center">Home</h1>
	
<?php
include 'template/index.php';
?>
	
		<h1 align="center">Benvenuto sull' E-Commerce di Mattia Schipilliti </h1>
		<h3 align="center">Accedi e visita lo Shop per acquistare il tuo prodotto sportivo! </h1>


	<?php
	
	
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE ID_Prodotto = '2'
UNION
SELECT `ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE ID_Prodotto = '4'
UNION
SELECT `ID_Prodotto`, `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE ID_Prodotto = '10'";
	$result = mysqli_query($connection, $query);
	
if (mysqli_num_rows($result) != 0)
    {
	echo "<table width=200 align=center>";
	while ($row = mysqli_fetch_array($result))
        {
		echo "<tr>";
        echo "<th> <img src=$row[Immagine] width=150></th>";
        echo "</tr>";        
		echo "<td>$row[Nome]</td>";
		}
	
echo "</table>";
}
?>
<?php
include 'template/footer.html';
?>