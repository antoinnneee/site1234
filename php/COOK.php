<?php
session_start();
echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> CB technique assistance </title>';
?>


 <table>
 <tr>
 <td style="width: 100%">

 <?php
 if ($_SESSION['level_account'] <= 10)
 echo _BIENVENUE;
 else
 echo _BIENVENUE . "</br>" . _BIEN_AD;
?>
  </td>
<?php echo _LANGFLAG; ?>

 </tr>
 </table>


<a href="php/OffCo.php">Disconnect</a>
