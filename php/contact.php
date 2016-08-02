<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />


	       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <link rel="stylesheet" href="/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>
</head>

<body >
	<div class="Main">
	
<?php

		include("header.php");

	?>

	</br></br>
	<table style="width : 100%">
	<tr>
		<td <?php /* Coordonnée*/?>>
		<h3><?php echo _COORD; ?></h3>
		</td>
	</tr>
	<tr>
		<td style="width : 65%">
			<table>
				<tr>
					<td style="width : 50%"> 	<table style="border: 0.1em solid grey"><tr style="text-align: center;"><td  ><img  src="img/CBphoto.jpeg"></td>
												</tr><tr><td style="border: 0.1em solid grey; text-align: center">Bureau Claude</br>Développement élèctronique</td>
												
												</tr></table></td>
					<td>
						<p><b>CB Technique Assistance</b></br>
						
							<?php echo _ADDRESSCOMP; ?>
							
						<a href="img/qrcode.png" class="fancybox" title="Contact CBTA"><?php echo _QRCONTACT ; ?></a>
						<script>
							$(document).ready(function() {
								$('.fancybox').fancybox();
							});
						</script>
						
						</p>	
					</td>
				</tr>
			
			</table>
			</td>
		<td style="text-align: center;"><iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2862.75771691067!2d4.036020000000001!3d44.150240000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71d660ef5e695792!2sR%C3%A9paration+%C3%A9lectronique+CB+TECHNIQUE+ASSISTANCE!5e0!3m2!1sfr!2sfr!4v1429869347227" width="400" height="300" frameborder="0" style="border:0"></iframe></td>
	</tr>
	</table>
	<tr>
		<td><h3><?php echo _MAILCONTACT?> </h3></td>
	</tr>

	</table>
	<table style="width:100%;">
		<tr >
			<td style="width:35%;">
				<form method="post" action="mailing.php">
				<p class="monmail">
				<?php echo _PRENOMCONTACT; ?><input type="text" name="nom" /> 
				<?php echo _NOMCONTACT; ?><input type="text" name="prenom" /> </br>
				<?php echo _EMAILSOCIETECONTACT; ?><input type="text" name="mail_retour" /></br>
				<?php echo _NOMDESOCIETECONTACT; ?><input type="text" name="societe" /></br>
			</td><td>
				<p class="mafmail">
				<textarea name="subject" rows="1" cols="80">sujet</textarea></br>
				<textarea name="mail" rows="9" cols="80">Entrer votre mail ici</textarea>
				<input type="submit" value="Valider" />					
				</p>
				</form>
			</td>
	</td>
	</tr></table>
	</div>
</body>

</html>

