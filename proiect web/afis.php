<?php include "header.php";
        if($_SESSION["isLogged"]!=1)
        {
         echo  '<table id="users">
        <thead>
          <tr>
            <th>Titlu</th>
            <th>Autor</th>
            <th>Editura</th>
            <th>An</th>
            <th>Numar exemplare</th>
          </tr>
        </thead>
          
      <tbody>';
          include "connect.php";
          
              $sql="SELECT * FROM Carti";
              $rez=mysqli_query($conn,$sql);

          while($row=mysqli_fetch_array($rez))
                {
                    if($row['nr']!=0)
                        echo "<tr><td>".$row['titlu'] ."</td><td>".$row['autor']." "  ."</td><td>".$row['editura'] ."</td><td>".$row['an'] ."</td><td>".$row['nr']. "</td></tr>";
                    
                } 
        }else{
        echo '<table id="users">
        <thead>
          <tr>
            
            <th></th>
            <th>Titlu</th>
            <th>Autor</th>
            <th>Editura</th>
            <th>An</th>
            <th>Numar exemplare</th>
          </tr>
        </thead>
          
      <tbody>';
          include "connect.php";
          
              $sql="SELECT * FROM Carti";
              $rez=mysqli_query($conn,$sql);
              if($_SESSION["isLogged"]==1)
              { 
                if($_SESSION["isAdmin"]==1){
                while($row=mysqli_fetch_array($rez))
                {
                   
                   echo "<form class='afis' action='imprumuta.php' method='post'><tr><td>
                   <input type='hidden' name='id' value=". $row['id']."></td><td>
                   <input type='text' name='titlu' readonly='readonly' value=". $row['titlu']."></td><td>
                   <input type='text' name='autor' readonly='readonly' value=". $row['autor']."></td><td>
                   <input type='text' name='editura' readonly='readonly' value=". $row['editura']."></td><td>
                   <input type='text' name='an' readonly='readonly' value=". $row['an'] ."></td><td>
                   <input type='text' name='nr' readonly='readonly' value=". $row['nr'] ."></td><td>
                   <button type='submit' name ='imprumuta' >Imprumuta</button></td><td>
                   <button type='submit' name = 'actualizeaza' formaction='update1.php'>Actualizeaza</button></td><td>
                   <button type='submit' name = 'sterge' formaction='delete.php'>Sterge</button></td></tr>
                   </form>";

                }
              } else{ 
                while($row=mysqli_fetch_array($rez))
                {
                    
                   echo "<form class='afis' action='imprumuta.php' method='post'><tr><td>
                   <input type='hidden' name='id' value=". $row['id']."></td><td>
                   <input type='text' name='titlu' readonly='readonly' value=". $row['titlu']."></td><td>
                   <input type='text' name='autor' readonly='readonly' value=". $row['autor']."></td><td>
                   <input type='text' name='editura' readonly='readonly' value=". $row['editura']."></td><td>
                   <input type='text' name='an' readonly='readonly' value=". $row['an'] ."></td><td>
                   <input type='text' name='nr' readonly='readonly' value=". $row['nr'] ."></td><td>
                   <button type='submit' name ='imprumuta' >Imprumuta</button></td><td>
                   </form>";

                }
              }
              }  
                
            }
          
          ?>
          
      </tbody>
    
      </table>
      </body>
      <?php include "footer.php";?>