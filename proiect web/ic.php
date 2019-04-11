<?php
    //session_start();
    
    if(isset($_POST['submit'])){
        include "connect.php";
        $titlu=$_POST['titlu'];
        $autor=$_POST['autor'];
        $editura=$_POST['editura'];
        $an=$_POST['an'];
        $nr=$_POST['nr'];

        $sql = "INSERT INTO Carti(titlu,autor,editura,an,nr) VALUES ('$titlu', '$autor', '$editura', '$an', '$nr')";
        mysqli_query($conn,$sql);
        include "afis.php";
        exit();

    } else{
        echo "Mai incearca!";
        exit();
    }

 ?>