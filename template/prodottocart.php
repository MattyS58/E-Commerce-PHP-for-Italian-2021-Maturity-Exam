<?php
global $prezzof;

if (mysqli_num_rows($result2) != 0)
    {
        echo "<table width=1000 border=1 align=center>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Descrizione</th>";
		echo "<th>Squadra</th>"; 
        echo "<th>Prezzo</th>";
		echo "<th>Quantità</th>";
		echo "<th>Immagine</th>";
        echo "</tr>";
        while ($row1 = mysqli_fetch_array($result2))
        {
			global $prezzof;
            echo "<tr width=200>";
            echo "<td>$row1[Nome]</td>";
            echo "<td class=table1 align=center>$row1[Descrizione]</td>";
			echo "<td width=100 class=table align=center>$row1[Squadra]</td>";
            echo "<td class=table align=center>$row1[Prezzo]€</td>";
            echo "<td class=table align=center>$quantita</td>";
			echo "<td class=table align=center> <img src=$row1[Immagine] width=150 class=dx> </td>";
            echo "</tr>";
			$prezzof = (($row1[Prezzo] * $quantita) + $prezzof);
		}
echo "</table>";
    }
			 $_SESSION['prezzofin']=$prezzof;
?>
