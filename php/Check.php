
<?php
if ($_POST['passwd'] == $_POST['verifPass'])
{
		
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=Id;charset=utf8', 'root', 'ant26/07', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO users(Nom, Prenom, Email, Societe, Password, forum_pseudo) VALUES(?, ?, ?, ?, ?, ?)');
	$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['boite'], $_POST['passwd'], $_POST['forum_pseudo']));
	$req->closeCursor();



	echo 'Compte creer';
	header('location: http://localhost');
}
else
{
		
	echo "Les mots de passe ne sont pas identiques";
	header('refresh:5; url=register.php');
}

?>
