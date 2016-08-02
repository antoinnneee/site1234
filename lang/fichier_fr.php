<?php
session_start();

//		HEADER

define("_LANGFLAG","<td><img class=\"flags\" src=\"img/Flag_En.png\"  onclick=\"window.location.href='?lang=en'\" /></td>" );
define("_REGISTER","S'inscrire");

define("_BIENVENUE","Bonjour " . $_SESSION['nom'] . " " . $_SESSION['prenom']);
define("_BIEN_AD","Vous etes connecté avec une session admin.");
define("_ACCUEIL","ACCUEIL");
define("_REALISATION","REALISATIONS");
define("_SERVICES","SERVICES");
define("_CONTACT","CONTACT");
define("_ASTUCE"," LES ASTUCES DU PÈRE BUBU");
define("_DOWNLOAD","  TÉLÉCHARGEMENT");


//		INDEX

define("_T1INDEX", " Créer, Étudier, Développer, Réparer, Modifier ");
define("_P1INDEX", "CB Technique Assistance est un Bureau d'etude qui propose un service complet allant du shéma a la realisation du prototype. ");

//		CONTACT
define("_ADDRESSCOMP","</br>Adresse : 514 chemin de Gaujouse</br>30480 Cendras</br>Telephone : +33 9 63 05 11 44</br>Email : contact@cb-technique.com </br></br>");
define("_COORD","Coordonnées");
define("_QRCONTACT","Plus rapide! Clique ici pour avoir le qrcode");
define("_MAILCONTACT","Contacter nous par email");
define("_NOMCONTACT","Nom : ");
define("_PRENOMCONTACT","Prenom : ");
define("_NOMDESOCIETECONTACT","Nom de societe : ");
define("_EMAILSOCIETECONTACT","Adresse Email : ");
?>
