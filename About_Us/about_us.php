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
    <link rel="stylesheet" href="about_us.css">
	<title>Sunset Cinema | About Us</title>
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
				<li><a href="../Merch/merch.php">Merch</a></li>
				<li><a href="about_us.php">About Us</a></li>
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
		<section id="aboutUs">
			<h1>About Us</h1>
			<p>Organizacja Sunset Cinema została założona przez 3 wybitnych reżyserów filmowych - David Zyzz, Jacob Fuss oraz Cristóbal Pazdierro. Sunset Cinema Poland jest tylko jednym z kin zafundowanych przez naszą grupę, która obecna jest w branży kinowej od 10 lat. W tym momencie Sunset Cinema jest pierwszą siecią kinową na świecie, która oferuje jakość obrazu wideo w rozdzielczości 16K. Nasza orgnaizacja działa w 4 krajach - Hiszpanii, Francji, Niemczech oraz Polsce. Rocznie organizuje 14,5 miliona projekcji filmowych, które wyświetlane są ponad 300 milionom widzów.</p>
			<ul>Obecnie Sunset Cienma posiada 4 kina rozmieszczone po całej Europie. Znajdują się one w następujących miastach:<br><br>
				<li>Warszawa, Polska</li>
				<li>Berlin, Niemcy</li>
				<li>Paryż, Francja</li>
				<li>Madryt, Hiszpania</li>
			</ul>
			<img src="imgs/map.png">
		</section>
		<section id="creators">
			<h1>Creators</h1>
			<img class="img" src="imgs/zyzz.png">
			<p class="p">David Zyzz - stosunkowo młody i nowy reżyser tej wspaniałej grupy kinowej, jednak stał się wyjątkowo popularny dzięki swojej karieże w bodybuildingu. Pochodzi on z Australi co ma wpływ na jego dziwne zachowania takie jak dymanie pająka. Jest on żonaty z 5 metrowym wężęm. Jego przeszłość jest interesująca jest on emerytowanym żołnierzem grupy uderzeniowej Australi "Pyton", do jego osiągniec należy zabicie Bin Ladena i Obamy.</p>
			<p class="reverse_p">Jacob Fuss - jest zarządca organizacji przez co ma niewiele czasu na inne rzeczy, pochodzi on Sudanu połódniowego co wiele wyjaśnia. Zyskał wielką popularność dzieki jego umijętnoścom. Jego historia jest naprawde interesująca jest on byłym piłkarzem reprezentacji francji w pewnym meczu dominował boisko ale niestety otrzymał czerwoną kartkę. Był to jego ostatni mecz był znany ze swojej szybkości i sile "jak u goryla".</p>
			<img class="reverse_img" src="imgs/fuss.png">
			<img class="img" src="imgs/pazdzior.png">
			<p class="p">Cristóbal Pazdierro - założyciel całej organizacji pochodzi on ze Stanów Zjednoczonych. Cały swój sukces zawdzięcza swoim loczkom i zniewalającej muskulaturze osiągnął bardzo wiele. Był on piratem zbadał cały ocean i znalazł 2 złote monety położył na nich fundamenty organizacji. Także był kiedyś piłkarzem lecz po ostrej krytyce trenera Szymona zrezygnował ze swojej kariery i poświecił sie podbojom mórz.</p>
		</section>
	</main>
	<footer>
		<p>Sunset Cinema 2022 &copy;</p>
		<img src="../_Movies/imgs/icon.ico">
		<p>Sunset Group Corp.</p>
	</footer>
</body>
</html>