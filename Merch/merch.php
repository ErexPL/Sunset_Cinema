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
				<li><a href="
                    <?php

                        if (!empty($_SESSION["id"])) {

                            echo "../Sign_Up/logout.php";

                        } else {

                            echo "../Sign_Up/sign_up.php";

                        }

                    ?>
                ">
                    <?php

                        if (!empty($_SESSION["id"])) {

                            echo "Logout";

                        } else {

                            echo "Register/Login";

                        }

                    ?>
                </a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Merch</h1>
		<section>
			<div>
			  <h3>Pazdzior</h3>
			  <img src="imgs/pazdzior.png">
			</div>
			<div>
			  <h3>Black power</h3>
			  <img src="imgs/fuss.png">
			</div>
			<div>
			  <h3>Zyzz</h3>
			  <img src="imgs/zyzz.png">
			</div>
			<div>
			  <h3>Black #1</h3>
			  <img src="imgs/black1.png">
			</div>
			<div>
				<h3>Black #2</h3>
				<img src="imgs/black2.png">
			</div>
			<div>
				<h3>Pulse</h3>
				<img src="imgs/pulse.png">
			</div>
			<div>
				<h3>Sus</h3>
				<img src="imgs/sus.png">
			</div>
		</section>
		<article>
			<p>Wszystkie koszulki wyświetlone w powyższym katalogu są dostępne przez 24/7 w naszych sklepach stacjonarnych starannie rozmieszczonych po Europie w taki sposób, aby zapewnić naszym klientom największą wygodę.</p>
			<ul>Obecnie Sunset Cienma posiada aż 500 sklepów stacjonarnych, które stale zostają zaopatrzone w najnowszy merch. Znajdują się one w następujących krajach:<br><br>
				<li>Polska - 200 sklepów</li>
				<li>Niemcy - 150 sklepów</li>
				<li>Francja - 75 sklepów</li>
				<li>Hiszpania - 75 sklepów</li>
			</ul>
		</article>
		<h1>Coming soon</h1>
		<section>
			<div>
			  <h3>Bald</h3>
			  <img src="imgs/bald.png">
			</div>
			<div>
			  <h3>Chad</h3>
			  <img src="imgs/chad.png">
			</div>
			<div>
			  <h3>Yoo</h3>
			  <img src="imgs/yoo.png">
			</div>
			<div>
			  <h3>Cuck</h3>
			  <img src="imgs/cuck.png">
			</div>
		</section>
	</main>
	<footer>
		<p>Sunset Cinema 2022 &copy;</p>
		<img src="../_Movies/imgs/icon.ico">
		<p>Sunset Group Corp.</p>
	</footer>
</body>
</html>
