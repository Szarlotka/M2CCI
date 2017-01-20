<?php
session_start();
if(!empty($_POST['sexe'])){ 
foreach($_POST['sexe'] as $val) {
		$_SESSION['sexe'] = $val;	
};}
echo $_session['sexe'];
?>

<!DOCTYPE html>
<html>

<form method="post"action="TP_3.php">
<p>Mot de passe pour protéger vos données <font color="red">*</font><br>
<input type="text" name="mdp"></p>
<p>Adresse <font color="red">*</font><br>
<input type="text" name="adresse"></p>
<p>Complément d'adresse</p>
<p>Bâtiment Escalier Etage Porte<br>
<input type="text" name="bat"><input type="text" name="escalier"><input type="text" name="etage"><input type="text" name="porte"></p>
<p>Code Postal <font color="red">* </font>Ville <font color="red">*</font><br>
<input type="text" name="CP"><input type="text" name="ville"></p>
<p>Pays<font color="red">*</font><br>
<input type="text" name="pays"></p>
<p><input type="submit" value="Retour"/>
<input type="submit" value="Valider"/></p>
</form>

</html>
