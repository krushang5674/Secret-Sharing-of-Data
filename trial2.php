<?php
session_start();
$path=$_SESSION["filedec"];
require("encrypt.php");
require("decrypt.php");
//echo $path;
$encrypted =  file_get_contents($path);
$Pass = "Passwort";
$crypted= decrypt($encrypted,$Pass);        
file_put_contents("Decrypted.xml",$crypted);


?>
<html>
<head>
	<title>EHR DECRYPTED</title>
	</head>
	<body>
	<h1>EHR DECRYPTED</h1>
		<button type="submit" value="Continue" onClick="window.location.href='one.php'">Continue</button>
	</body>
</html>