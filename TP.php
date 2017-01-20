<?php
session_start();
?>

<!DOCTYPE html>
<html>

<form method="post" action="TP_2.php">
<p><label for="civilite">Civilité <font color="red">*</font> :</label> <br>													
<INPUT type="radio" name="sexe" value= "mme">Madame
<INPUT type="radio" name="sexe" value= "mr">Monsieur</p>
<p>Votre adresse email <font color="red">*</font><br>
<input type="text" name="email"></p>
<p>Votre date de naissance <font size="2pts" color="grey"> (jj/mm/aaaa) </font><br>
<input type="text" name="dateNaiss"></p>
<p>Nom <font color="red">*</font><br>
<input type="text" name="nom"></p>
<p>Prénom <font color="red">*</font><br>
<input type="text" name="prenom"></p>
<p>Téléphone fixe <font color="red">*</font> Téléphone mobile <font color="red">*</font><br>
<input type="text" name="telfixe"> <font size="2pts" color="grey"> ou </font><input type="text" name="telmobile"></p>
<p> <font size="2pts" color="grey">Veuillez indiquer au moins un téléphone</font></p>
<p><input type="submit" value="Suivant"/></p>
</form>

</html>

<!--maxlength ou size pour taille de boite de dialogue-->
