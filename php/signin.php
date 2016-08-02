<?php session_start();?>
<form method="post" action="php/pCheck.php">
 <table>
 <tr>
 <td style="width: 100%">
	<p class="sig">
    Email : <input type="text" name="mail" style="width: 100px" />
    password : <input type="password" name="passwd" style="width: 80px"/>
    <input type="submit" value="Valider" />
    </td>
    <td> 
	<?php echo _LANGFLAG; ?>
	</p>
	</td style="width: 5%">
	<tr><td style="text-align : right;">    
		<a href="register.php"><?php echo _REGISTER; ?></a>
	</td></tr>
 </tr>
 </table>

</form>
