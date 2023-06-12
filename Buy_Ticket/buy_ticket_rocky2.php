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
            <h1>ROCKY BALBOA II</h1>
            <img src="../_Movies/imgs/rocky2.png" alt="">
              <aside>
                <div class="release-date-area">
                  <img src="imgs/calendar.png" alt="">
                  <h3><b>RELEASE DATE</b><br>15.06.1979</h3>
                  <img src="imgs/time-left.png" alt="">
                  <h3><b>LENGTH</b><br>212 min</h3>
                </div>
                <p>W filmie "Rocky II" mają miejsce bardzo ważne wydarzenia dla głównego bohatera. Rocky (Sylvester Stallone) po wyjściu ze szpitala oświadcza się swojej dziewczynie, Adrian (Talia Shire). Niedługo potem biorą ślub. Rocky postanawia zerwać z boksem i zająć się czymś innym, w tym wypadku są to reklamy. Prasa i telewizja ciągle atakują mistrza, sugerując, że walka Rocky'ego i Apollo (Carl Weathers) była sprzedana. Apollo czując się urażonym wzywa Balboe do rewanżu, ten natomiast unika konfrontacji jak tylko może. Na domiar złego jego żona po urodzeniu syna zapada w śpiączkę. Rocky w końcu decyduje się na rewanż z Creedem. Pod bacznym okiem trenera Mickey'a Goldmilla (Burgess Meredith) przygotowuje się do walki.</p>
                <table>
                  <tr>
                    <th>GENRE</th>
                    <td>Action</td>
                  </tr>
                  <tr>
                    <th>DIRECTOR</th>
                    <td>Sylvester Stallone</td>
                  </tr>
                  <tr>
                    <th>PRODUCTION</th>
                    <td>USA</td>
                  </tr>
                  <tr>
                    <th>RECOMMENDED AGE</th>
                    <td>16+</td>
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