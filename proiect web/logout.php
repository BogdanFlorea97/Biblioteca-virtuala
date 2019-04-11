<?php
// Initialize the session
session_start();
$_SESSION["isLogged"]=0;
$_SESSION["isAdmin"]=0;
header("location: index.php");
exit;
?>