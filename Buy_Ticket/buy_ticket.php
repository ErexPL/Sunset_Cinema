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
    <link rel="stylesheet" href="buy_ticket.css">
    <link rel="stylesheet" href="button-arrow.css">
    <script src="buy_ticket.js"></script>
	<title>Sunset Cinema | Buy Ticket</title>
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
        <div class="container">
            <h1>NAZWA FILMU</h1>
            <section id="text-img">
                <img src="ph.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, architecto. Voluptatem dolorem aliquid numquam, facilis, ipsum eveniet commodi illo ipsa ad neque quibusdam iusto ipsam porro assumenda voluptate quia sint placeat! Nesciunt sunt nostrum fugiat magnam? Dolorem expedita voluptates eos assumenda itaque obcaecati error omnis tenetur, esse, quasi qui natus debitis vel repudiandae fugit maxime? Quos velit inventore enim fugit modi. Neque nesciunt accusamus eveniet optio consequuntur fugiat. Eaque culpa voluptas eius eum, suscipit illum est hic rem! Consequatur, voluptates unde corrupti numquam hic sapiente nulla officia ullam explicabo quaerat eligendi adipisci incidunt quae temporibus optio error quidem veniam deleniti.</p>
            </section>
            <section id="button-sec">
                <div class="add-to-cart-btn">
                    BUY TICKET
                    <div class="center-con">
                        <div class="round">
                            <div id="cta">
                                <span class="arrow primera next "></span>
                                <span class="arrow segunda next "></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="more-info">
                
            </section>
        </div>
    </main>
	<footer>
		<p>Sunset Cinema 2022 &copy;</p>
		<img src="../_Movies/imgs/icon.ico">
		<p>Sunset Group Corp.</p>
	</footer>
</body>
</html>