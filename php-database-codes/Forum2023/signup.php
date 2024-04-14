<?php
$showAlert = false;
$showError = false;
$table1 = "Register";
if ($_SERVER['REQUEST_METHOD'] == "POST") // we can change it to POST
{
    include "partials/_dbconnect.php";
    /*
    $EMAIL=$_POST['email'];
    $PASSWORD=$_POST['pass'];
    */

    $sqlb = "SHOW TABLES IN `$database` LIKE '" . $table1 . "'";
    $result2 = mysqli_query($conn, $sqlb);
    // Check if the table exists
    if ($result2->num_rows > 0) {
        $FIRSTNAME = isset ($_POST['firstname']) ? $_POST['firstname'] : '';
        $LASTNAME = isset ($_POST['lastname']) ? $_POST['lastname'] : '';
        $EMAIL = isset ($_POST['email']) ? $_POST['email'] : '';
        $CONTACT = isset ($_POST['contact']) ? $_POST['contact'] : '';
        $ADDRESS = isset ($_POST['address']) ? $_POST['address'] : '';
        $PINCODE = isset ($_POST['pincode']) ? $_POST['pincode'] : '';
        $CITY = isset ($_POST['city']) ? $_POST['city'] : '';
        $PASSWORD = isset ($_POST['password']) ? $_POST['password'] : '';

        $exists = false;

        //check if username already exists
        $existSql = "SELECT * FROM `Register` WHERE `Email` = '$EMAIL'";
        $result = mysqli_query($conn, $existSql);
        $nRows = mysqli_num_rows($result);

        if ($nRows > 0) {
            $showError = "Username already exists.";
        } else {
            // sql query to be executed
            $hash = password_hash($PASSWORD, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `Register` (`First Name`, `Last Name`, `Email`, `Contact`, `Address`, `Pincode`, `City`, `Password`) VALUES ('$FIRSTNAME', '$LASTNAME', '$EMAIL', '$CONTACT', '$ADDRESS', '$PINCODE', '$CITY', '$hash')";

            $result = mysqli_query($conn, $sql);

            // adding new records
            if ($result) {
                $showAlert = true;
                header("location: index.php");
            }
        }
    }
    // If table does not exists
    else {
        $sqle = "CREATE TABLE `eko`.`Register` (`Sno` INT(225) NOT NULL AUTO_INCREMENT , `First Name` TEXT NOT NULL , `Last Name` TEXT NOT NULL , `Email` VARCHAR(50) NOT NULL , `Contact` INT(10) NOT NULL , `Address` VARCHAR(225) NOT NULL , `Pincode` VARCHAR(20) NOT NULL , `City` TEXT NOT NULL , `Password` VARCHAR(100) NOT NULL , PRIMARY KEY (`Sno`), UNIQUE `username` (`Email`))";

        $result5 = mysqli_query($conn, $sqle);

        if ($result5) {
            $FIRSTNAME = isset ($_POST['firstname']) ? $_POST['firstname'] : '';
            $LASTNAME = isset ($_POST['lastname']) ? $_POST['lastname'] : '';
            $EMAIL = isset ($_POST['email']) ? $_POST['email'] : '';
            $CONTACT = isset ($_POST['contact']) ? $_POST['contact'] : '';
            $ADDRESS = isset ($_POST['address']) ? $_POST['address'] : '';
            $PINCODE = isset ($_POST['pincode']) ? $_POST['pincode'] : '';
            $CITY = isset ($_POST['city']) ? $_POST['city'] : '';
            $PASSWORD = isset ($_POST['password']) ? $_POST['password'] : '';

            $exists = false;

            //check if username already exists
            $existSql = "SELECT * FROM `Register` WHERE `Email` = '$EMAIL'";
            $result = mysqli_query($conn, $existSql);
            $nRows = mysqli_num_rows($result);

            if ($nRows > 0) {
                $showError = "Username already exists.";
            } else {
                // sql query to be executed
                $hash = password_hash($PASSWORD, PASSWORD_DEFAULT);

                $sql = "INSERT INTO `Register` (`First Name`, `Last Name`, `Email`, `Contact`, `Address`, `Pincode`, `City`, `Password`) VALUES ('$FIRSTNAME', '$LASTNAME', '$EMAIL', '$CONTACT', '$ADDRESS', '$PINCODE', '$CITY', '$hash')";

                $result = mysqli_query($conn, $sql);

                // adding new records
                if ($result) {
                    $showAlert = true;
                    header("location: index.php");
                }
            }
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./partials/signup_style.css">
</head>

<body>
    <?php
    if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bingo!</strong> Your account has been created.
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


    <div class="container mt-5">
        <h2 class="signup">Signup</h2>
        <div class="col-md-6 ">
            <div class="form-container col-md-12">
                <form action="/My-PHP-Cosmos/php-database-codes/Forum2023/signup.php" method="post">
                    <div class="name">
                        <div class="side form-group">
                            <label for="exampleFormControlInput1">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="first name" name="firstname">
                        </div>
                        <div class="side2 form-group">

                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="last name" name="lastname">

                        </div>
                    </div>

                    <div class="form-group mt-1">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email"
                            name="email">
                    </div>
                    <div class="form-group mt-1">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password"
                            name="password">
                    </div>
                    <div class="form-group mt-1">
                        <label for="exampleFormControlInput1">Contact Number</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="phone"
                            name="contact">
                    </div>
                    <div class="form-group mt-1">
                        <label for="exampleFormControlInput1">Address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="house/flat no./area" name="address">
                    </div>
                    <div class="agalbagal mt-1">
                        <div class="agal form-group">
                            <label for="exampleFormControlInput1">Pin Code</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="pin"
                                name="pincode">
                        </div>
                        <div class="bagal form-group mt-1">
                            <label for="exampleFormControlInput1">City</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="city"
                                name="city">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning mt-3">Create Account</button>
                </form>
            </div>
        </div>

        <div class="already">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>