<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/uNews.css">
    <title>News</title>
</head>

<body>
    <main>
        <h1>EVENT MANAGEMENT</h1>
    </main>

    <header>
        <nav>
            <ul>
                <li><a href="uHome.php">Home</a></li>
                <li><a href="uEvents.php">Events</a></li>
                <li class="active"><a href="uNews.php">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="nav-profile-icon">
                    <a href="uLogout.php"><i class="fas fa-user-circle"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <footer>

        <?php
        include("./db.php");
        ?>

        <h2>News</h2>
        <!-- <div class="news-container">
            <div class="news-item">
                <h3 class="news-title">News Title 1</h3>
                <p class="news-date">May 19, 2023</p>
                <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus nisl ac est
                    molestie,
                    at facilisis justo blandit.</p>
            </div> -->

        <?php
        $stmt = $conn->prepare("SELECT * FROM news ");
        $stmt->execute();
        $result = $stmt->get_result();
        // Check if there are any news articles
        if (mysqli_num_rows($result) > 0) {
            // Loop through each news article
            while ($row = mysqli_fetch_assoc($result)) {
                // Extract the article information
                $title = $row['title'];
                $date = date("F d, Y (H:i)", strtotime($row['created_at']));
                $content = $row['content'];
        ?>
                <div class="news-item">
                    <h3 class="news-title"><?php echo $title; ?></h3>
                    <p class="news-date"><?php echo $date; ?></p>
                    <p class="news-content"><?php echo $content; ?></p>
                </div>
        <?php
            }
        } else {
            echo 'No news articles found.';
        }
        ?>

    </footer>



</body>

</html>