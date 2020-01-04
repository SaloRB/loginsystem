<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="50" height="50" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <?php
            if (isset($_SESSION['userId'])) {
                echo '
                    <div>
                        <form class="form-inline" action="includes/logout.inc.php" method="post">
                            <button class="btn btn-dark" type="submit" name="logout-submit">Logout</button>
                        </form>
                    </div>
                    ';
            } else {
                echo '
                    <div>
                        <form class="form-inline" action="includes/login.inc.php" method="post">
                            <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/Email...">
                            <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
                            <button class="btn btn-dark my-2 my-sm-0" type="submit" name="login-submit">Login</button>
                        </form>
                    </div>

                    <div>
                        <form class="form-inline">
                            <a class="btn btn-outline-dark mx-2" href="signup.php">Sign Up</a>
                        </form>
                    </div>
                    ';
            }
            ?>
        </nav>
    </header>