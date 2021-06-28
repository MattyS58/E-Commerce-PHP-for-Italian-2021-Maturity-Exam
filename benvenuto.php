<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}
?>
<?php
include 'template/header.html';
?>
<title>Benvenuto | E-Commerce Mattia Schipilliti</title>
</head>
<body>
	<h1 align="center">Benvenuto <?php echo "$_SESSION[username]";?></h1>
	
<?php
include 'template/index.php';
?>
	<h3  align="center"> Grazie per esserti registrato o aver effettuato l'accesso!</h3>
	<h4><a href="profilo.php">Clicca qui per accedere alla pagina del tuo profilo</a><br></h4>
	<h4><a href="index.php">Clicca qui per tornare alla homepage</a></h4>
	
<?php
include 'template/footer.html';
?>