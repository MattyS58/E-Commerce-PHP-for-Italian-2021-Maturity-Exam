<?php
session_start();

//reset dell'array di sessione
$_SESSION = []; 
 
session_unset();

//distruggere la sessione
session_destroy();
 

//redirect in login
header("location: login.php");
exit;
?>