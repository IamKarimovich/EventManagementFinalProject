<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Booking</title>
    <link rel="stylesheet" href="./css/manageBooking.css">
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
            <a href="home.php">
                <li class="list">Home</li>
            </a>
            <a href="manageEvent.php">
                <li class="list">Manage Events</li>
            </a>
            <a href="manageCategories.php">
                <li class="list">Manage Categories</li>
            </a>
            <a href="manageNews.php">
                <li class="list">Manage News</li>
            </a>
            <li class="list">Manage Booking</li>
            <a href="manageUsers.php">
                <li class="list">Manage Users</li>
            </a>
        </ul>
    </header>
    <main>
        <div class="first">
            <p>Displaying a list of bookings:</p>
            <?php
            include("../userpart/db.php");
            $sql = "SELECT users.name AS username, events.name AS eventname, bookings.status, bookings.id
            FROM bookings
            INNER JOIN users ON bookings.user_id = users.id
            INNER JOIN events ON bookings.event_id = events.id";
            $result = mysqli_query($conn, $sql);

            // Create the table
            echo "<table>";
            echo "<tr><th>Username</th><th>Event Name</th><th>Status</th><th>Accept</th><th>Reject</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
            $disabled = $row['status'] == 'approved' ? 'disabled' : '';
            echo "<tr><td>" . $row['username'] . "</td><td>" . $row['eventname'] . "</td><td>" . $row['status'] . "</td><td><a href='./editBooking.php?id=".$row['id']."&decision=approved'><button $disabled>Accept</button></a></td><td><a href='./editBooking.php?id=".$row['id']."&decision=rejected'><button $disabled>Reject</button></a></td></tr>";
            }
            echo "</table>";

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </main>
</body>

</html>