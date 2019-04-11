<?php include "header.php";
        if($_SESSION["isLogged"]!=1)
        {
          exit();
        }
        ?>

        <table id="users">
        <thead>
          <tr>
            <th>Nume</th>
            <th>Titlu</th>
            <th>Data primire</th>
            <th>Data returnare</th>
          </tr>
        </thead>
          
      <tbody>
          <?php
          include "connect.php";
              $x=$_SESSION['id'];
              $y=$_SESSION['nume'];
              $sql="SELECT * FROM imprumuturi,utilizatori,carti WHERE $x = imprumuturi.idnume AND $x=utilizatori.id AND imprumuturi.idcarte=carti.id";
              

              $sql1="SELECT * FROM imprumuturi,utilizatori,carti WHERE imprumuturi.idnume=utilizatori.id AND imprumuturi.idcarte=carti.id";

              $rez=mysqli_query($conn,$sql);

              $rez1=mysqli_query($conn,$sql1);

              if($_SESSION["isLogged"]==1 && $_SESSION["isAdmin"]==0)
              {
                while($row=mysqli_fetch_array($rez))
                {
                    
                    echo "<tr><td>".$row['nume'] ."</td><td>".$row['titlu']."</td><td>".$row['data_primire'] ."</td><td>".$row['data_returnare']. "</td></tr>";
                   
                } 
              } else if($_SESSION["isLogged"]==1 && $_SESSION["isAdmin"]==1)
              {
                while($row=mysqli_fetch_array($rez1))
                {
                    
                    echo "<tr><td>".$row['nume'] ."</td><td>".$row['titlu']."</td><td>".$row['data_primire'] ."</td><td>".$row['data_returnare']. "</td></tr>";
                   
                } 
              }
          
          ?>
      </tbody>
      
      </table>
      <?php include "footer.php";?>