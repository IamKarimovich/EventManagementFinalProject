<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/contact.css">
    <title>Contact Us</title>
</head>
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: uLogin.php");
    exit;
}
?>
<body>
    <?php error_reporting(E_ERROR | E_PARSE); ?>

    <main>
        <h1>EVENT MANAGEMENT</h1>
    </main>
    <header>
        <nav>
            <ul>
                <li><a href="uHome.php">Home</a></li>
                <li><a href="uEvents.php">Events</a></li>
                <li><a href="uNews.php">News</a></li>
                <li class="active"><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="nav-profile-icon">
                <a href="uLogout.php"><i class="fas fa-user-circle"></i></a>
                </li>
            </ul>
        </nav>

    </header>
    <div class="contact-wrapper">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include("./db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_name = $_POST['name'];
        $c_email = $_POST['email'];
        $c_message = $_POST['message'];
        $c_name = stripcslashes($c_name);
        $c_email = stripcslashes($c_email);
        $c_message = stripcslashes($c_message);

        $sql = "INSERT INTO contactus (user_name, user_email, message) VALUES ('$c_name', '$c_email', '$c_message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Sent successfully!');</script>";
    } else {
        echo "<script>alert('Couldn't sent. Try Again!');</script>";
    }
}

    mysqli_close($conn);

    ?>


</body>

</html>