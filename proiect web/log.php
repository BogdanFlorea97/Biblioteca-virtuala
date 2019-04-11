<?php
    session_start();
    if($_SESSION["isLogged"]==1)
        {
            header("Location:index.php");
        }   else {
        
    if (isset($_POST['login'])) 
    {
        include "connect.php";

        $nume= mysqli_real_escape_string($conn,$_POST['nume']);
        $parola= mysqli_real_escape_string($conn,$_POST['parola']);

        if (empty($nume) || empty($parola))
        {
            header("Location:login.php");
            exit();
        } else {

            $test="SELECT * FROM utilizatori WHERE nume='$nume'"; 
            $result = $conn->query($test);
        
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $hashedPwdCheck = password_verify($parola, $row['parola']);
                    if ($hashedPwdCheck == false) {
                        header("Location:login.php");
                        echo "merge1";
                        exit();
                    }
                    
                   elseif ($hashedPwdCheck == true) {
                        //Log in the user here
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['nume'] = $row['nume'];
                        $_SESSION['parola'] = $row['parola'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION["isAdmin"] = $row['admin'];
                        header("Location:index.php");
                        $_SESSION['isLogged']=1;
                        exit();
                    
                }
            }
            $conn->close();
        }
    }
    }
    else {
        header("Location:login.php");
        exit();
    }}
 ?>