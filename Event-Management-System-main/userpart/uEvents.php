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
    <link rel="stylesheet" href="./css/uEvents.css">
    <title>Events</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="uHome.php">Home</a></li>
                <li class="active"><a href="uEvents.php">Events</a></li>
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
        <div class="container">
            <h1>EVENTS</h1>
            <?php
                include("./db.php");
                // SQL query to retrieve all events
                $sql = "SELECT * FROM events";
                $result = $conn->query($sql);

                // Loop through results and display each event
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='event-list'>
                        <div class='event-card'>
                            <h2> ".$row['name']." </h2>
                            <p>".$row['description']."</p>
                        <a href='./joinToEvent.php?id=".$row['id']."'><button>Join</button></a>
                        </div>
                    </div>";
                }
                } else {
                echo "No events found.";
                }

                
               
                

                $conn->close();
            ?>

        </div>
    </main>

    <footer>

    </footer>
</body>

</html>