<?php include "header.php";
      if($_SESSION["isAdmin"]!=1)
        {
            header("Location:index.php");
        }   
        ?>
<form class="afis" action="ic.php" method="post">
    Titlu: <input type="text" name="titlu"><br>
    Autor: <input type="text" name="autor"><br>
    Editura: <input type="text" name="editura"><br>
    An Aparitie: <input type="number" name="an"><br>
    Nr Exemplare: <input type="number" name="nr"><br>
    <button type="submit" name ="submit">submit</button>
</form>
<body>
<?php include "footer.php" ?>