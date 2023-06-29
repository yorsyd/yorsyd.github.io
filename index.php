<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header ("Location: login.php");
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>

	<link rel="stylesheet" type="text/css" href="css/style-home.css">
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
</head>

<body>
	<!-- Navbar Start -->
	<nav class="navbar">
		<a href="index.php" class="navbar-logo"><img src="img/logo.png" alt=""></a>

		<div class="navbar-nav">
			<a href="catalog.html">Nike</a>
			<a href="catalog.html">Converse</a>
			<a href="catalog.html">new Balance</a>
			<a href="catalog.html">Vans</a>
		</div>

		<div class="navbar-login">
			<a href="logout.php" target="">logut</a>
		</div>

		<div class="navbar-icon">
			<a href="" target="_blank"><img src="img/cart.png"> </a>
		</div>
		<div class="navbar-icon">
			<a href="wishlist.html"><img src="img/love.png"></a>
		</div>
	</nav>

	<div class="first" id="home">
		<main class="content">
			<h1>Selamat Datang</h1>
			<p>
				beragam pilihan sepatu siap anda miliki
			</p>
		</main>
	</div>

	<div class="about">
		<div class="about-image">
			<img src="img/about.jpeg">
		</div>
		<div class="about-text">
			<h2>Berbelanja di <span>UrbaneThreads</span></h2><br>
			<p>
				<b>Urbane Threads</b> adalah sebuah toko sepatu yang menghadirkan gaya modern dan urban kepada para
				penggemar mode.
				Dengan koleksi yang beragam, menawarkan sepatu-sepatu berkualitas tinggi yang dirancang untuk memenuhi
				kebutuhan
				gaya hidup perkotaan yang aktif dan trendi. Kami percaya bahwa sepatu adalah aksesoris penting dalam
				mengekspresikan
				identitas dan gaya pribadi seseorang. Setiap produk yang kami tawarkan dipilih dengan hati-hati dari
				merek-merek terkenal dan
				pabrikan yang terpercaya, sehingga Anda dapat yakin akan mendapatkan sepatu yang tahan lama dan nyaman.
			</p>
		</div>
	</div>

	<div class="kategori">
		<div class="head">
			<h2>Kategori</h2>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/nikeCategory.jpg" alt="pria">
				<button class="btn">Nike</button>
			</a>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/converseCategory.jpg">
				<button class="btn">Converse</button>
			</a>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/newbalanceCategory.jpg">
				<button class="btn">New Balance</button>
			</a>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/vansCategory.jpg">
				<button class="btn">Vans</button>
			</a>
		</div>
	</div>

	<div class="rekomendasi">
		<div class="head">
			<h2>koleksi</h2>
		</div>

		<div class="kotakBesar">
			<img src="img/Collection/kolak1.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi1.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi10.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi11.jpg" alt="">
		</div>

		<div class="kotakKecil">
			<img src="img/Collection/koleksi12.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi13.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi2.jpg" alt="">
		</div>
		<div class="kotakBesar">
			<img src="img/Collection/kolak2.png" alt="">
		</div>

		<div class="kotakBesar">
			<img src="img/Collection/kolak4.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi6.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi7.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi8.jpg" alt="">
		</div>
	</div>

	<div class="footer">
		<footer>@copyright <b>urbane threads</b> 2023</footer>
		<a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png"></a>
		<a href="https://www.twitter.com" target="_blank"><img src="img/twitter.png"></a>
		<a href="https://www.tiktok.com/foryou" target="_blank"><img src="img/tiktok.png"></a>
	</div>
</body>

</html>
=======


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>

	<link rel="stylesheet" type="text/css" href="css/style-home.css">
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
</head>

<body>
	<!-- Navbar Start -->
	<nav class="navbar">
		<a href="#" class="navbar-logo"><img src="img/logo.png" alt=""></a>

		<div class="navbar-nav">
			<a href="catalog.html">Nike</a>
			<a href="catalog.html">Converse</a>
			<a href="catalog.html">new Balance</a>
			<a href="catalog.html">Vans</a>
		</div>

		<div class="navbar-login">
			<a href="login.php" target="_blank">masuk</a>
		</div>

		<div class="navbar-icon">
			<a href="" target="_blank"><img src="img/cart.png"> </a>
		</div>
		<div class="navbar-icon">
			<a href="" target="_blank"><img src="img/love.png"></a>
		</div>
	</nav>

	<div class="first" id="home">
		<main class="content">
			<h1>Selamat Datang</h1>
			<p>
				beragam pilihan sepatu siap anda miliki
			</p>
		</main>
	</div>

	<div class="about">
		<div class="about-image">
			<img src="img/about.jpeg">
		</div>
		<div class="about-text">
			<h2>Berbelanja di <span>UrbaneThreads</span></h2><br>
			<p>
				<b>Urbane Threads</b> adalah sebuah toko sepatu yang menghadirkan gaya modern dan urban kepada para
				penggemar mode.
				Dengan koleksi yang beragam, menawarkan sepatu-sepatu berkualitas tinggi yang dirancang untuk memenuhi
				kebutuhan
				gaya hidup perkotaan yang aktif dan trendi. Kami percaya bahwa sepatu adalah aksesoris penting dalam
				mengekspresikan
				identitas dan gaya pribadi seseorang. Setiap produk yang kami tawarkan dipilih dengan hati-hati dari
				merek-merek terkenal dan
				pabrikan yang terpercaya, sehingga Anda dapat yakin akan mendapatkan sepatu yang tahan lama dan nyaman.
			</p>
		</div>
	</div>

	<div class="kategori">
		<div class="head">
			<h2>Kategori</h2>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/nikeCategory.jpg" alt="pria">
				<button class="btn">Nike</button>
			</a>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/converseCategory.jpg">
				<button class="btn">Converse</button>
			</a>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/newbalanceCategory.jpg">
				<button class="btn">New Balance</button>
			</a>
		</div>
		<div class="kotak">
			<a href="catalog.html">
				<img src="img/vansCategory.jpg">
				<button class="btn">Vans</button>
			</a>
		</div>
	</div>

	<div class="rekomendasi">
		<div class="head">
			<h2>koleksi</h2>
		</div>

		<div class="kotakBesar">
			<img src="img/Collection/kolak1.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi1.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi10.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi11.jpg" alt="">
		</div>

		<div class="kotakKecil">
			<img src="img/Collection/koleksi12.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi13.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi2.jpg" alt="">
		</div>
		<div class="kotakBesar">
			<img src="img/Collection/kolak2.png" alt="">
		</div>

		<div class="kotakBesar">
			<img src="img/Collection/kolak4.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi6.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi7.jpg" alt="">
		</div>
		<div class="kotakKecil">
			<img src="img/Collection/koleksi8.jpg" alt="">
		</div>
	</div>

	<div class="footer">
		<footer>@copyright <b>urbane threads</b> 2023</footer>
		<a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png"></a>
		<a href="https://www.twitter.com" target="_blank"><img src="img/twitter.png"></a>
		<a href="https://www.tiktok.com/foryou" target="_blank"><img src="img/tiktok.png"></a>
	</div>
</body>

</html>
>>>>>>> Stashed changes:index.php