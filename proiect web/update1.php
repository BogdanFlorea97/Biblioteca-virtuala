<?php include "header.php";

    if($_SESSION["isAdmin"]!=1)
        {
            header("Location:index.php");
        } else{ 

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
           if(isset($_POST['actualizeaza'])){
                   echo "<form class='afis' action='update.php' method='post'><tr><td>
                   <input type='text' name='titlu' value=".$_POST['titlu']."></td><td>
                   <input type='text' name='autor' value=".$_POST['autor']."></td><td>
                   <input type='text' name='editura' value=".$_POST['editura']."></td><td>
                   <input type='text' name='an' value=".$_POST['an']."></td><td>
                   <input type='text' name='nr' value=".$_POST['nr']."></td><td>
                   <input type='hidden' name='id' value=".$_POST['id']."></td><td>
                   <button type='submit' name ='update' >Update</button></td></tr>
                   </form>";
           }
          }
          ?>
          
      </tbody>
      
      </table>
      <?php include "footer.php";?>