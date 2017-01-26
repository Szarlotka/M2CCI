<?php
session_start();
?>

<!DOCTYPE html>
<html>

<form method="post" action="TP_2.php">
<table>
<tr>
	<td colspan="3"><label for="civilite">Civilité <font color="red">*</font></label></td>	
</tr>												
<tr>
	<td colspan="3"><INPUT type="radio" name="sexe" value= "Mme">Madame
		<INPUT type="radio" name="sexe" value= "Mr">Monsieur</td>
</tr>
<tr>
	<td colspan="3">Votre adresse email <font color="red">*</font></td>
</tr>
<tr>
	<td colspan="3"><input size="49" type="text" name="email"></td>
</tr>
<tr>
	<td colspan="3">Votre date de naissance <font size="2pts" color="grey"> (jj/mm/aaaa) </font></td>
</tr>
<tr>
	<td colspan="3"><input size="49" type="text" name="dateNaiss"></td>
</tr>
<tr>
	<td colspan="3">Nom <font color="red">*</font></td>
</tr>
<tr>
	<td colspan="3"><input size="49" type="text" name="nom"></td>
</tr>
<tr>
	<td colspan="3">Prénom <font color="red">*</font></td>
</tr>
<tr>
	<td colspan="3"><input size="49" type="text" name="prenom"></p></td>
</tr>
<tr>
	<td>Téléphone fixe <font color="red">*</font></td>
	<td/>
	<td>Téléphone mobile <font color="red">*</font></td>
</tr>
<tr>
	<td><input type="text" name="telfixe"></td>
	<td><font size="2pts" color="grey"> ou </font></td>
	<td><input type="text" name="telmobile"></td>
</tr>
<tr>
	<td colspan="3"><i><font size="2pts" color="grey">Veuillez indiquer au moins un téléphone</font></i></td>
</tr>
<tr>
	<td/><td/>
	<td><input type="submit" value="Suivant"></td>
</tr>
</table>
</form>

</html>

<!--maxlength ou size pour taille de boite de dialogue-->
