<?php
    session_start();
    if($_SESSION["isLogged"]==1)
        {
            header("Location:index.php");
        }   else {
        
    if(isset($_POST['registrare'])){
        include "connect.php";
        $nume=mysqli_real_escape_string($conn,$_POST['nume']);
        $parola=mysqli_real_escape_string($conn,$_POST['parola']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);

        if (empty($nume) || empty($parola) || empty($email)){
            header("Location:register.php");
            exit();
        } else {
            //Check if input characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $nume)) {
                header("Location:register.php");
                exit();
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location:register.php");
                    exit();
                } else {
                    $hashedPwd = password_hash($parola, PASSWORD_BCRYPT);
                    $sql = "INSERT INTO utilizatori(nume,parola,email,admin) VALUES ('$nume', '$hashedPwd', '$email', '0')";
                    mysqli_query($conn,$sql);
                    header("Location:index.php");
                    exit();

    }}}} else {
        header("Location:register.php");
        exit();
    }}

 ?>