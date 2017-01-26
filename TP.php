<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="style.css" />
<script type="text/javascript">
function verifier() {
    var sexe = form.sexe.value;
    var email = form.nom.value;
    var nom = form.nom.value;
    var prenom = form.prenom.value;
    var telfixe = form.telfixe.value;
	var telmobile = form.telmobile.value;
    if(sexe=="")
    {
        alert('Veuillez renseigner votre civilité!');
   //     form.sexe.focus;
        return false;        
    }
    else if(email=="")
    {
         alert('Veuillez renseigner votre adresse email!');
    //    form.email.focus;
        return false;
	}
	else if(nom=="")
    {
         alert('Veuillez renseigner votre nom!');
     //   form.nom.focus;
        return false;
	}
	else if(email=="")
    {
         alert('Veuillez renseigner votre prénom!');
        //form.prenom.focus;
        return false;
	}
	else if(telfixe=="" && telmobile=="")
    {
        alert('Veuillez renseigner au moins un téléphone');
     //   form.telmobile.focus;
       // form.telfixe.focus;
        return false;
	}
	else
	{
		return true;
	}
}
</script>
<div class="cadre">
<form method="post" name="form" action="TP_2.php" onsubmit="return verifier(this);">
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
	<td colspan="3"><input size="49" type="email" name="email"></td>
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
	<td colspan="3"><input size="49" maxlength="25" type="text" name="nom"></td>
</tr>
<tr>
	<td colspan="3">Prénom <font color="red">*</font></td>
</tr>
<tr>
	<td colspan="3"><input size="49" maxlength="25" type="text" name="prenom"></p></td>
</tr>
<tr>
	<td>Téléphone fixe <font color="red">*</font></td>
	<td/>
	<td>Téléphone mobile <font color="red">*</font></td>
</tr>
<tr>
	<td><input type="text" name="telfixe" pattern="([0-9]{2}\s){4}[0-9]{2}"></td>
	<td><font size="2pts" color="grey"> ou </font></td>
	<td><input type="text" name="telmobile" pattern="([0-9]{2}\s){4}[0-9]{2}"></td>
</tr>
<tr>
	<td colspan="3"><i><font size="2pts" color="grey">Veuillez indiquer au moins un téléphone</font></i></td>
</tr>
<tr>
	<td/><td/>
	<td align="right"><input class="button" type="submit" value="Suivant"></td>
</tr>
</table>
</form>
</div>
</html>
