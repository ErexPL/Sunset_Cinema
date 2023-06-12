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
	<link rel="icon" href="imgs/icon.ico">
	<link rel="stylesheet" href="movies.css">
	<title>Sunset Cinema | Movies</title>
</head>

<body>
	<video autoplay muted loop>
		<source src="background_video.mp4" type="video/mp4">
	</video>
	<header>
		<section>
			<img src="imgs/logo_black.png">
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
				<li><a href="movies.php">Movies</a></li>
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
		<h1>Warszawa, Polska</h1>
		<div class="movie_box">
			<div class="filmContainer">
				<img src="imgs/avengers1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/avengers2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/avengers3.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/avengers4.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/deadpool1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/deadpool2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
		</div>
		<h1>Berlin, Niemcy</h1>
		<div class="movie_box">
			<div class="filmContainer">
				<img src="imgs/drstrange1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/drstrange2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/grownups1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/grownups2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/ironman1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/ironman2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
		</div>
		<h1>Paryż, Francja</h1>
		<div class="movie_box">
			<div class="filmContainer">
				<img src="imgs/ironman3.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/pacificrim1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/pacificrim2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/rocky1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket_rocky2.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/rocky2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket_rocky1.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/spiderman1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
		</div>
		<h1>Madryt, Hiszpania</h1>
		<div class="movie_box">
			<div class="filmContainer">
				<img src="imgs/spiderman2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/spiderman3.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/thor1.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/thor2.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/thor3.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
			<div class="filmContainer">
				<img src="imgs/thor4.png">
				<div class="hide trailerButton"><a target="_blank">Trailer</a></div>
				<div class="hide line"></div>
				<div class="hide ticketButton"><a class="buyTicket" href="../Buy_Ticket/buy_ticket.php">Buy Ticket</a></div>
			</div>
		</div>
	</main>
	<footer>
		<p>Sunset Cinema 2022 &copy;</p>
		<img src="imgs/icon.ico">
		<p>Sunset Group Corp.</p>
	</footer>
	<script src="movies.js"></script>
</body>

</html>