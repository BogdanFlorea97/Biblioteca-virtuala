<?php 
    session_start();
    include "connect.php";
    if(isset($_POST['imprumuta'])){

    $x=$_SESSION['id'];
    $carte=$_POST['id'];
    $primire = date("Y-m-d");
    $retur = date("Y-m-d", strtotime("$primire +1 month"));
    
    $insert = "INSERT INTO imprumuturi(idnume,idcarte,data_primire,data_returnare) VALUES ('$x', '$carte','$primire','$retur')";
    $result = $conn->query($insert);
    header("Location:afis_imp.php");
    } else{ 
        echo "nu merge";
    } 
    





?>