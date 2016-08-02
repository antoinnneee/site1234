<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=Id', 'root', 'ant26/07');
$db = new PDO('mysql:host=localhost;dbname=forum', 'root', 'ant26/07');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
