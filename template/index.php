<?php
session_start();
?>

	<div id="container">
  <div class="navigazione">
  <a class="pulsante" href="index.php" >Home</a>
  <a class="pulsante" href="contatti.php">Contatti</a>
  <a class="pulsante" href="shop.php">Shop</a>
  <a class="dx" href="carrello.php"><img class="carrello" src="images/carrello.png" width="51"> <?php echo $_SESSION['npr'];?></a> 
  <div class="dropdown dx">
    <button class="dropbtn dx">
		<?php
		if(!isset($_SESSION['username'])){ 
			
			echo"Accedi qui";
		}
		else
		{
			echo"$_SESSION[username]";
		}
		?>
		
    </button>
    <div class="dropdown-content dx">
	<?php
		if(!isset($_SESSION['username'])){ 
			
			echo"<a href=login.php>Accedi</a>";
		}
		else
		{
			
		}
		?>
      <a href="profilo.php">Profilo</a>
      <a href="logout.php">Esci</a>
    </div>
  </div>
</div>
		<?php
?>
	<!-- Inizio Pagina-->