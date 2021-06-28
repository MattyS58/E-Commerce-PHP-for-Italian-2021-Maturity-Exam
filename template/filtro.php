<br>
<form align="center" method="post" action="shop.php">
    
    <select name='filtrop' onchange="clickD(value)">
        <option defaultSelected value="">Seleziona una squadra</option>
        <option  value="tuttip">Tutti i prodotti</option>
        <option  value="milan">Prodotti Milan</option>
        <option value="juve" >Prodotti Juventus</option>
    </select>
    
    <script>
         function clickD(value){
    if(value === "tuttip"){
     document.getElementById("abito").disabled= true;


    }
    else
    {
         document.getElementById("abito").disabled= false;
		
         }
    }
      </script>
    
    <select name="abito" id="abito">
        <option defaultSelected value="">Seleziona abito</option>
        <option value="err">Tutti i prodotti</option>
        <option id="maglia" value="maglia">Maglie</option>
        <option  id="pantaloncini" value="pantaloncini">Pantaloncini</option>
        <option id="calzettoni" value="calzettoni">Calzettoni</option>
    </select> <br>
	<br>
    <input type="submit" value="Filtra" id="filtrogo" >
	
</form>
<br>