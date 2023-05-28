<?php
include("../userpart/db.php");

$event_id=$_GET['id'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("DELETE FROM events WHERE id = ?");
$stmt->bind_param("i", $event_id);
$stmt->execute();

// Check if the event was deleted successfully
if ($stmt->affected_rows > 0) {
  header("Location: manageEvent.php");
} else {
  echo "Error deleting event: " . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>