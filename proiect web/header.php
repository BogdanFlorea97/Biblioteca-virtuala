<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="assets\css\style.css">
</head>
<body>

<?php
    session_start();
    $_SESSION["isLogged"];
    if($_SESSION["isLogged"]==1 &&$_SESSION["isAdmin"]==1)
    {
      include "meniu_admin.php";
    } elseif($_SESSION["isLogged"]==1 &&$_SESSION["isAdmin"]==0) {
         include "meniu_util.php";
    } else {
        include "meniu.php";
    }
?>
    