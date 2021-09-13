<?php

$pass = $_POST['pass'];

if ($pass == bLu3_dEsS3rT) //password already setup
{header ("location: http://127.0.0.1/webcafe/login.php");} //only authorize staff can login

else header ("location: http://127.0.0.1/webcafe/homepage.php");

?>