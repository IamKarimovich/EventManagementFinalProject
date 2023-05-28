<?php

session_start();
$event_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
include("./db.php");



$stmt = $conn->prepare("SELECT * FROM bookings WHERE user_id = ? and event_id=? ");
    $stmt->bind_param("ii", $user_id,$event_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {

        echo "booking already exists!";

    } else {

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO bookings (event_id, user_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $event_id, $user_id);

        $stmt->execute();

        header("Location: uEvents.php");

    }
  


$stmt->close();
$conn->close();






?>