<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: uLogin.php");
    exit;
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/uRegistration.css">
    <title>Register</title>
</head>

<body>


    <section>

        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <input type="submit" class="button" value="Submit">
                </form>
            </div>
        </div>

        <?php
        
        $conn = mysqli_connect("localhost", "root", "", "eventmanagement");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $username = stripcslashes($username);
            $email = stripcslashes($email);
            $password = stripcslashes($password);
            
            $GLOBALS['username'] = $username;
            $GLOBALS['email'] = $email;

            $sql = "INSERT INTO registration (r_username, r_email, r_password) VALUES ('$username', '$email', '$password')";
            if (mysqli_query($conn, $sql)) {
                echo "<div class='form-box'>";
                echo "<div class='form-value'>";
                echo "<form action='uLogin.php' method='POST'>";
                echo "<h2>Saved Successfully!</h2>";
                echo "<input type='submit' class='button' value='Back to Login'>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
        ?>

    </section>



</body>

</html>