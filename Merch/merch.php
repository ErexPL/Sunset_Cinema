<?php

require '../Sign_Up/config.php';

if(!empty($_SESSION["id"])) {

    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM register WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<link rel="icon" href="../_Movies/imgs/icon.ico">
    <link rel="stylesheet" href="merch.css">
	<title>Sunset Cinema | Merch</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
</head>

<body>
    <video autoplay muted loop>
		<source src="../_Movies/background_video.mp4" type="video/mp4">
	</video>
    <header>
		<section>
            <img src="../_Movies/imgs/logo_black.png">
            <img id="icon" src="../Sign_Up/imgs/profile.png">
            <p>Logged in as:<br>
                <?php

                    if (!empty($_SESSION["id"])) {

                        echo $row["username"];

                    } else {

                        echo "Guest";

                    }

                ?>
            </p>
        </section>
		<nav>
			<ul>
				<li><a href="../_Movies/movies.php">Movies</a></li>
				<li><a href="merch.php">Merch</a></li>
				<li><a href="../About_Us/about_us.php">About Us</a></li>
				<li><a href="../Sign_Up/sign_up.php">Register/Login</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Merch</h1>
		<section class="container">
			<div class="card">
			  <h3>Pazdzior</h3>
			  <img src="imgs/pazdzior.png" alt="koszulka pazdzior">
			</div>
			<div class="card">
			  <h3>Black power</h3>
			  <img src="imgs/fuss.png" alt="koszulka fuss">
			</div>
			<div class="card">
			  <h3>Zyzz</h3>
			  <img src="imgs/zyzz.png" alt="koszulka zyzz">
			</div>
			<div class="card">
			  <h3>Black #1</h3>
			  <img src="imgs/black1.png" alt="koszulka black 1">
			</div>
			<div class="card">
				<h3>Black #2</h3>
				<img src="imgs/black2.png" alt="koszulka black 2">
			</div>
			<div class="card">
				<h3>Pulse</h3>
				<img src="imgs/pulse.png" alt="koszulka pulse">
			</div>
			<div class="card">
				<h3>Sus</h3>
				<img src="imgs/sus.png" alt="koszulka sus">
			</div>
			<div class="card">
				<h3>Bald man</h3>
				<img src="imgs/bald.png" alt="koszulka bald">
			</div>
		</section>
		<article>
			<p>
				Grupa Sunset Cinema sprzedaje swój merch na swoim sklepie internetowym który znajduje sie w poniższym linku:<br><br><a href="https://coub.com/view/ujcaw">Link do sklepu</a><br><br>
				Obecnie Sunset Cienma posiada 4 sklepy stacjnare rozmieszczone po całej Europie. Znajdują się one w następujących miastach:<br><br>
			</p>
			<ul>Obecnie Sunset Cienma posiada 4 kina rozmieszczone po całej Europie. Znajdują się one w następujących miastach:<br><br>
				<li>Warszawa, Polska</li>
				<li>Berlin, Niemcy</li>
				<li>Paryż, Francja</li>
				<li>Madryt, Hiszpania</li>
			</ul>
		</article>
		<h1>coming soon</h1>
		<section class="coming">
			<img src="imgs/chad.png" alt="koszulka chad">
			<img src="imgs/yoo.png" alt="koszulka yoo">
			<img src="imgs/cuck.png" alt="koszulka cuck">
		</section>

	</main>
	<footer>
		<p>Sunset Cinema 2022 &copy;</p>
		<img src="../_Movies/imgs/icon.ico">
		<p>Sunset Group Corp.</p>
	</footer>
</body>
</html>
