<?php 
    session_start();
    include "connect.php";
    if(isset($_POST['update'])){
        
    
    $id=$_POST['id'];
    $titlu=$_POST['titlu'];
    $autor=$_POST['autor'];
    $editura=$_POST['editura'];
    $an=$_POST['an'];
    $nr=$_POST['nr'];
    
    $update = "UPDATE carti
               SET titlu = '$titlu',autor = '$autor',editura = '$editura',an = '$an',nr = '$nr'
               WHERE id = '$id'";
    $result = $conn->query($update);
    header("Location:afis.php");
    } else{ 
        echo "nu merge";
    } 
    





?>