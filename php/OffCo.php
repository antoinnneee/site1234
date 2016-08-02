<?php

session_start();
echo("test");
session_destroy();
header('location: http://localhost/index.php');


?>
