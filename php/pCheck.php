<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Id;charset=utf8', 'root', 'ant26/07', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('SELECT Nom, Prenom, Email, Password, level_account FROM users WHERE Email = ? AND Password = ?');
$req -> execute (array($_POST['mail'],$_POST['passwd']));

	
while ($donnees = $req->fetch())
{

		$_SESSION['nom'] = $donnees['Nom'];
	$_SESSION['prenom'] = $donnees['Prenom'];
	$_SESSION['level_account'] = $donnees['level_account'];
	echo "Nom :".$donnees['Nom']. "Prenom" . $donnees['Prenom'];
	echo "</br>".$_SESSION['nom'].$_SESSION['prenom']."</br>";
	

}


$req -> closeCursor();
     
   header('location: http://localhost');

?>
