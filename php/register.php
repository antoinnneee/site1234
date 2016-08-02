<?



?>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />

</head>

<body >
	<div class="Main">
<?php
		include("header.php");
?>

<form method="post" action="php/Check.php">
 
<p class="reg">
    Nom : <input type="text" name="nom" /> </br>
    Prenom : <input type="text" name="prenom" /> </br>
    Email : <input type="text" name="mail" /></br>
    Nom de societe : <input type="text" name="boite" /></br>
	Pseudonyme forum : <input type="text" name="forum_pseudo" /></br>
    Password : <input type="password" name="passwd" /></br>
	Password : <input type="password" name="verifPass" /></br>
	
    
    
    <input type="submit" value="Valider" />
</p>
 
</form>
	</br></br></br></br>
	
	</div>
</body>

</html>
