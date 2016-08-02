<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Id;charset=utf8', 'root', 'ant26/07', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	$req = $bdd->prepare('INSERT INTO mail(Nom, Prenom, subject, mail, mail_retour, societe) VALUES(?, ?, ?, ?, ?, ?)');
	$req -> execute (array($_POST['nom'], $_POST['prenom'],$_POST['subject'], $_POST['mail'], $_POST['mail_retour'], $_POST['societe']));
	$req -> closeCursor();

$message = wordwrap($_POST['mail'], 70, "\r\n");
mail('hexalinkus@gmail.com' , 'Mon Sujet', $message );


/* please wait more information to continue ( OS hebergeur/ crossplatform solution)*/




header('location: http://localhost');	
?>
