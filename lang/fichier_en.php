<?php
session_start();
//			Header
define("_LANGFLAG","<td><img class=\"flags\" src=\"img/Flag_Fr.png\"  onclick=\"window.location.href='?lang=fr'\" /></td>" );

define("_BIENVENUE","Hello " . $_SESSION['nom'] . " " . $_SESSION['prenom']);
define("_BIEN_AD","You're connect with admin session.");
define("_ACCUEIL","ACCUEIL");
define("_REALISATION","PROJECTS");
define("_SERVICES","SERVICES");
define("_CONTACT","CONTACT");
define("_ASTUCE","FATHER BUBU'S TIPS");
define("_DOWNLOAD","DOWNLOAD");
define("_REGISTER","Register");


//			Index

define("_T1INDEX", "Create , Etude , Develop , Repairing , modifier");
define("_P1INDEX", "CB Technique Assistance is a study office that offers a complete service from the schematic to the realization of the prototype. ");

//			CONTACT

define("_ADDRESSCOMP","</br>Adress : 514 chemin de Gaujouse</br>30480 Cendras</br>Phone numbers : +33 9 63 05 11 44</br>Email : contact@cb-technique.com </br></br>");
define("_COORD","Contact");
define("_QRCONTACT","Faster! Click here for the qrcode");
define("_MAILCONTACT","Contact by email");
define("_NOMCONTACT","Last name : ");
define("_PRENOMCONTACT","First name : ");
define("_NOMDESOCIETECONTACT","Company : ");
define("_EMAILSOCIETECONTACT","Email Adress : ");
?>
