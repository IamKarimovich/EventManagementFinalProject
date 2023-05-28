<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Events</title>
  <link rel="stylesheet" href="./css/manageEvent.css">

  <style>
    table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 4px;
}

button:hover {
  background-color: #3e8e41;
}
  </style>



</head>
<?php
include("../userpart/db.php");
?>

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
      <a href="manageBooking.php">
        <li class="list">Manage Booking</li>
      </a>
      <a href="manageUsers.php">
        <li class="list">Manage Users</li>
      </a>
    </ul>
  </header>
  <main>
    <div class="first">
      <p>Displaying a list of events:</p>
      <table>
      <thead>
        <tr>
          <th>Event Name</th>
          <th>Category</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $sql = "SELECT * FROM events";
        $result = $conn->query($sql);
 
              if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $sql2 = "SELECT * FROM categories WHERE id=".$row['category_id'];
                $result2 = $conn->query($sql2);
                $row2=$result2 -> fetch_assoc();
                $category_name = $row2['name'] ;
              echo "
                <tr>
                  <td>".$row['name']."</td>
                  <td>".$category_name."</td>
                  <td><a href ='./deleteEvent.php?id=".$row['id']."'<button>Delete</button> </a></td>
                </tr>";
              }
            }
        ?>
        </tbody>
        </table>

    </div>
    <div class="second">

    <?php
        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);
 
    ?>




      <p>Adding a new event:</p>
      <form action="./addEvent.php" method="POST">
        <input type="text" name="event_title" placeholder="Event Title" class="input">
        <button type="submit" name="submit" class="button">Add Event</button></br></br>
        <label for="category">Select an category:</label>
        <select id="category" name="category">
          <?php 
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['name']."</option>";
                
            }
          }
          ?>
          
        </select>
        <textarea id="message" name="message" placeholder="Event description here..." required></textarea>
      </form>
    </div>



  </main>
</body>

</html>