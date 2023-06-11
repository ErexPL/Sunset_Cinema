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
    <link rel="stylesheet" href="style.css">
    <script src="buy_ticket.js" defer></script>
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
            <h1>THE AVENGERS: ENDGAME</h1>
            <img src="../_Movies/imgs/avengers4.png" alt="">
              <aside>
                <div class="release-date-area">
                  <img src="imgs/calendar.png" alt="">
                  <h3><b>RELEASE DATE</b><br>10.04.2019</h3>
                  <img src="imgs/time-left.png" alt="">
                  <h3><b>LENGTH</b><br>182 min</h3>
                </div>
                <p>Thanos (Josh Brolin) dołożył wszelkich starań, by zrównać wszechświat z ziemią w wyniku czego Tony Stark- Iron Man (Robert Downey Jr.) i Nebula (Karen Gillan) utknęli na planecie Tytan. Tymczasem Kapitan Ameryka (Chris Evans) podejrzewa, że sygnał alarmowy przed niszczycielskimi wydarzeniami zablokował Nick Fury (Samuel L. Jackson), aby w ten sposób móc wprowadzić posiłki. Avengersi postanawiają działać. Ich drogi krzyżują się z Ant-Manem (Paul Rudd) oraz Kapitan Marvel (Brie Larson), którzy dołączają do zespołu i wspólnie z superbohaterami jednoczą siły w walce z Thanosem.</p>
                <table>
                  <tr>
                    <th>GENRE</th>
                    <td>Action, Sci-Fi</td>
                  </tr>
                  <tr>
                    <th>DIRECTOR</th>
                    <td>Anthony Russo</td>
                  </tr>
                  <tr>
                    <th>PRODUCTION</th>
                    <td>USA</td>
                  </tr>
                  <tr>
                    <th>RECOMMENDED AGE</th>
                    <td>12+</td>
                  </tr>
                </table>
              </aside>
              <form action="movies" id="subForm">
                <h2>BUY TICKETS</h2>
                <label>Ticket type:</label>
                <select id="ticket" required>
                  <option value="12">Normalny</option>
                  <option value="10">Ulgowy</option>
                </select>
                <label>Choose date:</label>
                <input type="date">
                <label>Choose time:</label>
                <select id="time" required>
                  <option value="10">5:00</option>
                  <option value="12">10:00</option>
                  <option value="8">15:00</option>
                  <option value="9">20:00</option>
                </select>
                <section id="button-sec">
                  <a href="../AfterTicket/After_ticket.php">
                    <div class="add-to-cart-btn">BUY TICKET</div>
                  </a>
                </section>
              </form>
              <div class="section">
                <div class="screen"></div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <ul class="showcase">
                  <li>
                    <div class="seat"></div>
                    <small>N/A</small>
                  </li>
                  <li>
                    <div class="seat selected"></div>
                    <small>Selected</small>
                  </li>
                  <li>
                    <div class="seat occupied"></div>
                    <small>Occupied</small>
                  </li>
                </ul>
                <p class="text">You have selected <span id="count">0</span> seats for a price of $<span id="total">0</span></p>
              </div>
          </div>
    </main>
	<footer>
		<p>Sunset Cinema 2022 &copy;</p>
		<img src="../_Movies/imgs/icon.ico">
		<p>Sunset Group Corp.</p>
	</footer>
</body>
</html>