<?php
session_start();
if (mysqli_num_rows($result) != 0)
    {
        echo "<table width=1000 border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
        echo "<th>Quantità</th>";
		echo "<th>Immagine</th>"; 
	if(!isset($_SESSION['username']))
			{ 		}
	else{
		echo "<th>Seleziona Quantità</th>"; 
	}
        echo "</tr>";
        while ($row = mysqli_fetch_array($result))
        {
			$n++;
			session_start();
            echo "<tr width=200>";
            echo "<td>$row[Nome]</td>";
            echo "<td class=table1 align=center>$row[Descrizione]</td>";
			echo "<td width=100 class=table align=center>$row[Squadra]</td>";
            echo "<td class=table align=center>$row[Prezzo]€</td>";
            echo "<td class=table align=center>$row[Quantita]</td>";
			$a = 'id';
			$b = 'qt';
			${$a.$n} = $row[ID_Prodotto];
			${$b.$n} = $row[Quantita];
			echo "<td class=table align=center> <img src=$row[Immagine] width=150 class=dx> </td>";
			if(!isset($_SESSION['username']))
			{ 		}
		else
		{
			echo "<td><form align='center' method='post' action='/saveid.php'>
			<input type='number' min='0' name='p' id='p' class='nprodotto'>
			<input type='text' name='idid' id='idid' class='nascondi'value=${$a.$n}>
			<input type='text' name='qt' id='qt' class='nascondi' value=${$b.$n}>
			<input type='submit'value='Aggiungi al carrello' id='addcart'>
			</form></td>";
		}
		}
echo "</table>";
    }
?>