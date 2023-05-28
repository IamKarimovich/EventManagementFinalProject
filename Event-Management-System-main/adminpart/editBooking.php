<?php
include("../userpart/db.php");

$id=$_GET['id'];
$decision = $_GET['decision'];

// Prepare the UPDATE statement
$sql = "UPDATE bookings SET status = ? WHERE id = ?";

// Prepare the statement and bind the parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $decision, $id);

// Execute the statement
if ($stmt->execute()) {
  header("Location: ./manageBooking.php");
} else {
  echo "Error updating booking: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();
?>
