<?php
session_start();

$_SESSION['adresse'] = $_POST['adresse'];
$_SESSION['CP'] = $_POST['CP'];
$_SESSION['ville'] = $_POST['ville'];

?>

<!DOCTYPE html>
<html>
<body>
<p><b>Merci de votre saisie !</b></p>
<br>
<p>Vous êtes :</p> <br>
<p><?php echo $_SESSION['sexe'].' ';?><b><?php echo$_SESSION['prenom'].' '.$_SESSION['nom']; ?></b></p>
<p>Vous avez ? ans</p>
<p>Vous habitez <?php echo $_SESSION['adresse'].', '.$_SESSION['CP'].' '.$_SESSION['ville'] ?></p>
<br />
<p>Votre téléphone est le <?php echo $_SESSION['telmobile']; ?></p>
</body>
</html>
