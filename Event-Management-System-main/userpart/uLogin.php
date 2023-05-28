<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/uLogin.css">
    <title>Login</title>
</head>

<body>
    <?php error_reporting(E_ERROR | E_PARSE); ?>


    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="processLog.php" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have an account ? <a href="uRegistration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>


    </section>




</body>

</html>