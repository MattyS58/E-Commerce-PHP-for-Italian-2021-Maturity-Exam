	<?php
	$filtrop = $_POST['filtrop'];
	$abito = $_POST['abito'];
	if($filtrop == "tuttip")
	{
	$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto`";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	}
else if($filtrop == "milan" && $abito =="")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else if($filtrop == "juve" && $abito =="")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else if($filtrop == "juve" && $abito == "maglia")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus' AND `Categoria` = 'Maglia'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else if($filtrop == "milan" && $abito == "maglia")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan' AND `Categoria` = 'Maglia'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else if($filtrop == "juve" && $abito == "pantaloncini")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus' AND `Categoria` = 'Pantaloncini'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else if($filtrop == "milan" && $abito == "pantaloncini")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan' AND `Categoria` = 'Pantaloncini'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else if($filtrop == "juve" && $abito == "calzettoni")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Juventus' AND `Categoria` = 'Calzettoni'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else if($filtrop == "milan" && $abito == "calzettoni")
	{
		$connection = mysqli_connect("localhost","root","","magazzino");
	mysqli_select_db($connection, "magazzino");
	$query = "SELECT `Nome`,`Descrizione`,`Squadra`,`Prezzo`,`Quantita`,`Immagine` FROM `Prodotto` WHERE `Squadra` = 'Milan' AND `Categoria` = 'Calzettoni'";
	$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) != 0)
    {
        echo "<table border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
		echo "<th>Aggingi al carrello</th>"; 
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>$row[Nome]</td>";
            echo "<td>$row[Descrizione]</td>";
			echo "<td>$row[Squadra]</td>";
            echo "<td>$row[Prezzo]€</td>";
            echo "<td>$row[Quantita]</td>";
			echo "<td> <img src=$row[Immagine] width=150 class=dx> </td>";
			echo "<td> <a href=login.html>Aggiungi al Carrello</a> </td>";
            echo "</tr>";
        }
echo "</table>";
    }
	} //fine elese if
else
	{
		echo "Seleziona un filtro";
	}
	
?>