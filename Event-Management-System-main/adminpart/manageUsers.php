<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="./css/manageUsers.css">
    <style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 1em;
}

th, td {
  text-align: left;
  padding: 0.5em;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 0.5em;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 0.2em 0.5em;
  cursor: pointer;
}

button[disabled] {
  background-color: #ddd;
  color: #aaa;
  cursor: not-allowed;
}
    </style>
</head>
<body>

    <header>
        <ul>
            <a href="home.php"><li class="list">Home</li></a>
            <a href="manageEvent.php"><li class="list">Manage Events</li></a>
            <a href="manageCategories.php"><li class="list">Manage Categories</li></a>
            <a href="manageNews.php"><li class="list">Manage News</li></a>
            <a href="manageBooking.php"><li class="list">Manage Booking</li></a>
            <li class="list">Manage Users</li>
            
        </ul>
    </header>
    <main>
        <div class="first">
            <p>Displaying a list of users:</p>
            <?php
            include("../userpart/db.php");
            // Prepare the SELECT statement
            $sql = "SELECT id, name, email, password FROM users WHERE status = 'user'";

            // Execute the statement and fetch the results
            $result = $conn->query($sql);

            // Check if there are any rows returned
            if ($result->num_rows > 0) {
            // Output the table headers
            echo "<table><tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th><th>Delete</th></tr>";

            // Output the table rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td><button onclick=\"deleteUser(" . $row["id"] . ")\">Delete</button></td></tr>";
            }

            // Output the table footer
            echo "</table>";
            } else {
            echo "No users found";
            }

            // Close the result and database connection
            $result->close();
            $conn->close();
            ?>
          </div>
          
    </main>
</body>
</html>