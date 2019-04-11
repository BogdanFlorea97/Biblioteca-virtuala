<?php 
    session_start();
    include "connect.php";
    if(isset($_POST['sterge'])){

    
    $id=$_POST['id'];
    $titlu=$_POST['titlu'];
    $autor=$_POST['autor'];
    $editura=$_POST['editura'];
    $an=$_POST['an'];
    $nr=$_POST['nr'];
    
    $delete = "DELETE FROM carti
               WHERE id=$id";
    $result = $conn->query($delete);
    if($result)
	{
		header("Location:afis.php");
	}else{
		echo "Problema la stergere";}
    
    } else{ 
        echo "nu merge";
    } 
    





?>