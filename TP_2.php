<?php
session_start();

$_SESSION['sexe'] = $_POST['sexe'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['dateNaiss'] = $_POST['dateNaiss'];

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['telfixe'] = $_POST['telfixe'];
$_SESSION['telmobile'] = $_POST['telmobile'];

?>

<!DOCTYPE html>
<html>
<form method="post"action="TP_3.php">
<table>
<tr>
	<td colspan="4">Mot de passe pour protéger vos données <font color="red">*</font></td>
</tr>
<tr>
	<td colspan="4"><input size="49" type="text" name="mdp"></td>
</tr>
<tr>
	<td colspan="4">Adresse <font color="red">*</font></td>
</tr>
<tr>
	<td colspan="4"><input size="49" type="text" name="adresse"></td>
</tr>
<tr>
	<td colspan="4">Complément d'adresse</td>
</tr>
<tr>
	<td>Bâtiment</td>
	<td>Escalier</td>
	<td>Etage</td>
	<td>Porte</td>
</tr>
<tr>
	<td><input size="8" type="text" name="bat"></td>
	<td><input size="8" type="text" name="escalier"></td>
	<td><input size="8" type="text" name="etage"></td>
	<td><input size="8" type="text" name="porte"></td>
</tr>
</table>
<table>
<tr>
	<td>Code Postal <font color="red">* </font></td>
	<td>Ville <font color="red">*</font></t32
</tr>
<tr>
	<td><input size="12" type="text" name="CP"></td>
	<td><input size="32" type="text" name="ville"></td>
</tr>
<tr>
	<td colspan="2">Pays<font color="red">*</font></td>
</tr>
<tr>
	<td colspan="2"><input size="49" type="text" name="pays"></td>
</tr>
<tr>
	<td><input type="submit" value="Retour"/></td>
	<td><input type="submit" value="Valider"/></td>
</tr>
</table>
</form>
</html>
