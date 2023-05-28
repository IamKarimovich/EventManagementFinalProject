<?php
include("../userpart/db.php");

$news_title = $_POST['title'];
$content = $_POST['message'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO news (title,content) VALUES (?, ?)");
$stmt->bind_param("ss", $news_title,$content);

$stmt->execute();

// Check if the event was added successfully
if ($stmt->affected_rows > 0) {
  header("Location: manageNews.php");
} else {
  echo "Error adding event: " . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>