<?php
	include "header.php";
?>

<div class="log">
    <h2>Logaţi-vă</h2>
</div>


<form class="register-form" action="log.php" method="post">
<fieldset>
<legend>Date de conectare</legend>
    <input class="form__input" type="text" name="nume" placeholder ="Username"><br>
    <input class="form__input"  type="password" name="parola" placeholder ="Password"><br>
    <button class="button" type="submit" name ="login">Login</button>
</fieldset>
</form>
<?php include "footer.php";?>

</body>
</html>

 
 