<?php

include("auth.php");
$mail=$_SESSION["username"];
$code=$_GET['code'];

$msg = "Your code is ".$code;

$msg = wordwrap($msg,70);

mail($mail,"Password generator",$msg);
?>