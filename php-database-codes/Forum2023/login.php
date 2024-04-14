<?php
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") // we can change it to POST
{
    include "partials/_dbconnect.php";
    /*
    $EMAIL=$_POST['email'];
    $PASSWORD=$_POST['pass'];
    */
    $EMAIL = isset ($_POST['email']) ? $_POST['email'] : '';
    $PASSWORD = isset ($_POST['password']) ? $_POST['password'] : '';

    // sql query to be executed
    $sql = "SELECT * FROM `Register` WHERE `Email`='$EMAIL'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($PASSWORD, $row['Password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $EMAIL;
                header("location: index.php");
            } else {
                $showError = "Invalid Credentials.";
            }
        }
    } else {
        $showError = "Invalid Credentials.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./partials/login_style.css">
</head>

<body>

    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bingo!</strong> You are logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sad.. </strong> ' . $showError . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>


    <div class="container">
        <form action="/My-PHP-Cosmos/php-database-codes/Forum2023/login.php" method="post">
            <h2 class="backlog">Login</h2>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email address</label>
                <input placeholder="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    name="email">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input placeholder="password" type="password" class="form-control" id="password" name="password">

            </div>

            <button type="submit" class="mt-3 btn btn-warning">Login</button>
        </form>
        <p class="mt-2">Don't have an Account? <a href="signup.php">Create one</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>