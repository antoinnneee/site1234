<?php

		
include ("config.php");
?>

<head><link rel="stylesheet" href="/CSS/header.css" />
<link rel="stylesheet" href="/CSS/fomain.css" />
<link rel="stylesheet" href="/CSS/form.css" />
<?php echo '<title> CB technique assistance </title>';?>
</head>
	
	
<nav class="HiHeader">

	

		<?php
	if ($_SESSION['nom']!= "") 
		include("COOK.php");
	else
		include("signin.php");
		
		?>
	
</nav>

<nav class="header">
	<div id="header-item">
		<?php
		echo '<a href="index.php"> <img src="/img/title.png" border="0" /></a></br>';

		?>
	</div>
		<div id="header-item_sort">
		<?php
		/* echo 'Ici seront mises toutes les categories'; */
		?>
		
		<table class="csstable">
			<tr >
				
				<td class="csstd"><a class="cellink" href=" <?php echo 'http://localhost/?lang='  . $_SESSION['lang'] ; ?> "   > <?php echo _ACCUEIL ; ?> </a></td>
				<td class="csstd"><a class="cellink" href=" <?php echo 'http://localhost/realisation.php?lang='  . $_SESSION['lang'] ; ?> " > <?php echo _REALISATION ; ?> </a></td>
				<td class="csstd"><a class="cellink" href=" <?php echo 'http://localhost/service.php?lang='  . $_SESSION['lang'] ; ?> "  > <?php echo _SERVICES ; ?> </a></td>
				<td class="csstd"><a class="cellink" href=" <?php echo 'http://localhost/contact.php?lang='  . $_SESSION['lang'] ; ?> "  > <?php echo _CONTACT ; ?> </a></td>
				<td class="csstd"><a class="cellink" href=" <?php echo 'http://localhost/forum?lang='  . $_SESSION['lang'] ; ?> "  > FORUM </a></td>
				<?php	if ($_SESSION['nom']!= "") 
				{?>
				<td class='csstd'> <a class='cellink' href=" <?php echo 'http://localhost/astuce.php?lang='  . $_SESSION['lang'] ; ?> "  > <?php echo _ASTUCE ; ?> </a></td>
				<td class='csstd'> <a class='cellink' href=" <?php echo 'http://localhost/donwload.php?lang='  . $_SESSION['lang'] ; ?> "  > <?php echo _DOWNLOAD ; ?> </a></td>
				<?php }?>
				
			</tr>
		
		</table>
		
		
	</div>

</nav>
