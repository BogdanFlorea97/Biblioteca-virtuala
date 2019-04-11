<?php include "header.php";?>
<div class="log">
    <h2>Înregistraţi-vă</h2>
</div>
<form class="register-form" action="reg.php" method="post">
<fieldset>
<legend>Date de conectare</legend>
    <input class="form__input" type="text" name="nume" placeholder ="Username"><br>
    <input class="form__input"  type="password" name="parola" placeholder ="Password"><br>
    <input class="form__input" type="email" name="email" placeholder ="Email"><br>
    <button class="button" type="submit" name ="registrare">Înregistrare</button>
</fieldset>
</form>
<?php include "footer.php";?>
