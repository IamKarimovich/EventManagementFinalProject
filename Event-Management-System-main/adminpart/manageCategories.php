<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
    <link rel="stylesheet" href="./css/manageCategories.css">
</head>
<body>
    <header>
        <ul>
            <a href="home.php"><li class="list">Home</li></a>
            <a href="manageEvent.php"><li class="list">Manage Events</li></a>
            <li class="list">Manage Categories</li>
            <a href="manageNews.php"><li class="list">Manage News</li></a>
            <a href="manageBooking.php"><li class="list">Manage Booking</li></a>
            <a href="manageUsers.php"><li class="list">Manage Users</li></a>
            
        </ul>
    </header>
    <main>
        <div class="first">
          <p>Displaying a list of existing categories</p>
          <ul>
            <li class="list1">Category 1 <button class="button">Edit</button> <button class="button">Delete</button></li>
            <li class="list1">Category 2 <button class="button">Edit</button> <button class="button">Delete</button></li>
            <!-- Add more list items dynamically -->
          </ul>
        </div>
        <div class="second">
          <p>Adding a new category</p>
          <form action="add_category.php" method="POST">
            <input type="text" name="category_name" placeholder="Category Name" class="input">
            <button type="submit" name="submit" class="button">Add Category</button>
          </form>
        </div>
    </main>
</body>
</html>