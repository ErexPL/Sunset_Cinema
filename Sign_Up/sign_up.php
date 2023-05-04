<?php

require "config.php";

if(isset($_POST["submit_r"])){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password_r = $_POST["password_r"];
    $confirm_password = $_POST["confirm_password"];

    $duplicate = mysqli_query($connection, "SELECT * FROM register WHERE username = '$username' OR email = '$email'");

    if(mysqli_num_rows($duplicate) > 0) {

        echo "<script> alert('Username or Email is already taken'); </script>";

    } else {

        if($password_r == $confirm_password) {

            $query = "INSERT INTO register VALUES('','$username','$email','$password_r')";
            mysqli_query($connection, $query);

            echo "<script> alert('Registration successful'); </script>";

        } else {

            echo "<script> alert('Password does not match'); </script>";

        }

    }

}

if(isset($_POST["submit_l"])){

    $username_email = $_POST["username_email"];
    $password_l = $_POST["password_l"];

    $result = mysqli_query($connection, "SELECT * FROM register WHERE username = '$username_email' OR email = '$username_email'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0) {

        if($password_l == $row["password"]) {

            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];

            header("Location: ../_Movies/movies.php");

        } else {

            echo "<script> alert('Wrong password'); </script>";

        }

    } else {

        echo "<script> alert('User is not registered'); </script>";

    }

}

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
    <link rel="stylesheet" href="sign_up.css">
    <title>Sunset Cinema | Register/Login</title>
</head>

<body>
    <video autoplay muted loop>
        <source src="../_Movies/background_video.mp4" type="video/mp4">
    </video>
    <header>
        <section>
            <img src="../_Movies/imgs/logo_black.png">
            <img id="icon" src="imgs/profile.png">
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

                            echo "logout.php";

                        } else {

                            echo "sign_up.php";

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
        <section id="section1">
            <h2>Register</h2>
            <form class="" action="" method="post" autocomplete="off">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required value=""><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required value=""><br>
                <label for="password_r">Password:</label>
                <input type="password" name="password_r" id="password_r" required value=""><br>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" required value=""><br>
                <button type="submit_r" name="submit_r">Register</button>
            </form>
        </section>
        <section>
            <h2>Login</h2>
            <form class="" action="" method="post" autocomplete="off">
                <label for="username_email">Username/Email:</label>
                <input type="text" name="username_email" id="username_email" required value=""><br>
                <label for="password_l">Password:</label>
                <input type="password" name="password_l" id="password_l" required value=""><br>
                <button type="submit_l" name="submit_l">Login</button>
            </form>
        </section>
    </main>
    <footer>
		<p>Sunset Cinema 2022 &copy;</p>
		<img src="../_Movies/imgs/icon.ico">
		<p>Sunset Group Corp.</p>
	</footer>
</body>

</html>