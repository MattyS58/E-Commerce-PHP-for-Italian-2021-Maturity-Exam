<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Conferma | E-Commerce Mattia Schipilliti</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<h1 align="center">Login conferma</h1>
	<div id="container">
  <div class="navigazione">
  <a class="pulsante" href="index.php" >Home</a>
  <a class="pulsante" href="">Contatti</a>
  <a class="pulsante" href="shop.php">Shop</a>
  <a class="dx" href="carrello.php"><img class="carrello" src="images/carrello.png" width="51"></a> 
  <div class="dropdown dx">
    <button class="dropbtn dx">Profilo
    </button>
    <div class="dropdown-content dx">
      <a href="profilo.php">Profilo</a>
      <a href="logout.php">Esci</a>
    </div>
  </div>
</div
	  <?php 		
$username= $_POST['username'];
$password= $_POST['password'];
$pwhash= crypt($password, 'Chiavedicryptqualunque');
if (strlen($username) !=0 && strlen($password) !=0)
{
	$connection = mysqli_connect("localhost","root","","magazzino");
    mysqli_select_db($connection, "magazzino");
    $Query = "SELECT * FROM Utente WHERE username = '$username' ";
    $result = mysqli_query($connection, $Query);
if (mysqli_num_rows($result) == 0)
{
	echo "<h1>Inserisci un username valido</h1>";
	echo "<a class=pulsante href=login.html>Riprova</a>";
}
    else
    { 
    $user_row = mysqli_fetch_array($result);
        if ($pwhash==$user_row['password']){
            echo "<h1>Password corretta</h1>";
        	session_start();
        	session_unset();
            session_destroy();
            session_start();
            $_SESSION['username']= $username;
            $_SESSION['start_time']=time();
			header("location: benvenuto.php");
			//admin
			$connection = mysqli_connect("localhost","root","","magazzino");
    mysqli_select_db($connection, "magazzino");
	$Query = "SELECT * FROM Utente WHERE ruolo = 'admin' AND username = '$username'";
    $result = mysqli_query($connection, $Query);
if (mysqli_num_rows($result) != 0) //admin if
{
		$_SESSION['ruolo'] = $result; 
		echo"Benvenuto Admin";
		 header("location: admin.php");
    exit;
	}
	
}
    else
	{
		
	}
            echo "<h1>Password errata</h1>";
			echo "<a class=pulsante href=login.html>Riprova</a>";
        }
    }
        else
        {
        echo "<h1>Hai lasciato i campi vuoti</h1>";
		echo "<a class=pulsante href=login.html>Riprova</a>";
        }
		?>
</div>	
<?php
include 'template/footer.html';
?>
</body>
</html>
