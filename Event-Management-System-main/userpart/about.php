<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/about.css">
    <title>About Us</title>
</head>
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: uLogin.php");
    exit;
}
?>
<body>
    <main>
        <h1>EVENT MANAGEMENT</h1>
    </main>
    <header>
        <nav>
            <ul>
                <li><a href="uHome.php">Home</a></li>
                <li><a href="uEvents.php">Events</a></li>
                <li><a href="uNews.php">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="active"><a href="about.php">About Us</a></li>
                <li class="nav-profile-icon">
                    <a href="uLogout.php"><i class="fas fa-user-circle"></i></a>
                </li>
            </ul>
        </nav>

    </header>

    <section class="about-section">
        <h2>About Us</h2>
        <p>Welcome to our Event Management System! We are a dedicated team passionate about creating unforgettable experiences and bringing your events to life. With years of experience in the industry, we specialize in planning and managing a wide range of events, from corporate conferences to social gatherings.
At our core, we believe in the power of attention to detail. Our goal is to understand your vision and turn it into a reality. From selecting the perfect venue to coordinating vendors and handling logistics, we take care of every aspect of event management.
We pride ourselves on our professionalism, reliability, and personalized approach. Our experienced team is committed to providing top-notch customer service and ensuring that your event runs smoothly from start to finish.
With our expertise in event planning, creative design, and flawless execution, we strive to exceed your expectations. We work closely with you to tailor our services to your specific needs, ensuring that every detail aligns with your vision and goals.
Our mission is to deliver seamless experiences and create extraordinary memories. We invite you to explore our portfolio of successful events and get in touch with us to discuss how we can make your next event truly remarkable.
Thank you for considering our Event Management System. We look forward to the opportunity to collaborate with you and bring your event to life</p>
    </section>



    <footer>
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <br>
        <p>E-mail: eventmanagement2023@gmail.com</p>
    </footer>
</body>

</html>