<?php

include("./db.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL statement
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

// Execute SQL statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {

session_start();

// Perform login validation here

// If login is successful, set session variable
$_SESSION["loggedin"] = true;

  // User exists, get ID
  $row = $result->fetch_assoc();
  $id = $row["id"];
  session_start();
  $_SESSION['user_id'] = $id;
  $account_type = $row["status"];
  $_SESSION['user_role'] = $account_type;

    if($account_type=="user")
    {
         header("Location: uHome.php");
    }else{
         header("Location: ../adminpart/home.php");
    }

 
} else {
  // User doesn't exist, return error
  echo "Error: User not found";
}

// Close connection
$stmt->close();
$conn->close();
?>