<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage News</title>
  <link rel="stylesheet" href="./css/manageNews.css">
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

<body>

  <?php error_reporting(E_ERROR | E_PARSE); ?>
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
      <li class="list">Manage News</li>
      <a href="manageBooking.php">
        <li class="list">Manage Booking</li>
      </a>
      <a href="manageUsers.php">
        <li class="list">Manage Users</li>
      </a>
    </ul>
  </header>
  <main>

    <?php
    include("../userpart/db.php");
    ?>

     <div class="first">
      <p>Displaying a list of events:</p>
      <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $sql = "SELECT * FROM news";
        $result = $conn->query($sql);
 
              if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              echo "
                <tr>
                  <td>".$row['title']."</td>
                  <td>".$row['content']."</td>
                  <td><a href ='./deleteNews.php?id=".$row['id']."'<button>Delete</button> </a></td>
                </tr>";
              }
            }
        ?>
        </tbody>
        </table>
  
    </div>

    <div class="second">
      <p>Adding a new news article:</p>
      <form action="./addnews.php" method="POST">
        <input type="text" name="title" placeholder="Article Title" class="input" required>
        <button type="submit" name="submit" class="button">Add News Article</button></br></br>
        <textarea id="message" name="message"  required></textarea> Content
      </form>
    </div>
  </main>


</body>

</html>