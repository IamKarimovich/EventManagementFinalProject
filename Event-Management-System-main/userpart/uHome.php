<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: uLogin.php");
    exit;
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/uHome.css">
    <title>Home</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li class="active"><a href="uHome.php">Home</a></li>
                <li><a href="uEvents.php">Events</a></li>
                <li><a href="uNews.php">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="nav-profile-icon">
                    <a href="uLogout.php"><i class="fas fa-user-circle"></i></a>
                </li>
                
            </ul>
        </nav>

    </header>
    <main>
        <h1>EVENT MANAGEMENT</h1>
    </main>

    <footer>
        <div class="row">
            <div class="col">
                <div class="sub1"></div>
            </div>
            <div class="col">
                <div class="sub2"></div>
            </div>
            <div class="col">
                <div class="sub3"></div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col">
                <div class="sub1"></div>
            </div>
            <div class="col">
                <div class="sub2"></div>
            </div>
            <div class="col">
                <div class="sub3"></div>
            </div>
        </div> -->
        <?php

        $conn = new mysqli("localhost", "root", "");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Create database
        $sql = "CREATE DATABASE EventManagement";

        $conn->close();
        ?>

        

    </footer>
</body>

</html>