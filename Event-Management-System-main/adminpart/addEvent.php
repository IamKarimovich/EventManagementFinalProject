<?php
include("../userpart/db.php");

$event_name = $_POST['event_title'];
$description = $_POST['message'];
$category_id = $_POST['category'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO events (name, description,category_id) VALUES (?, ?,?)");
$stmt->bind_param("ssi", $event_name, $description,$category_id);

$stmt->execute();

// Check if the event was added successfully
if ($stmt->affected_rows > 0) {
  header("Location: manageEvent.php");
} else {
  echo "Error adding event: " . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>