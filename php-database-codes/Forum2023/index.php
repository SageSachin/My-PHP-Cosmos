<?php
session_start();
if (!isset ($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eKo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            text-align: center;
            padding: 1%;
        }

        .row {
            margin-top: 1%;
            margin-left: 9%;
        }

        .cardy {
            margin-right: 4%;
        }

        .no-underline {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php include 'partials/_header.php' ?>

    <!-- To add carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <!--  -->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/c3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1><strong>Demon Slayer</strong></h1>
                </div>
            </div>
        </div>
    </div>


    <!-- category container starts here -->
    <div class="container">
        <h2>eKo - Browse Categories</h2>

        <div class="row">
            <!-- fetch all the categories -->
            <!-- use a for() loop to iterate through categories -->

            <?php
            include "partials/_dbconnect.php";
            $table2 = "categories";
            $sqlz1 = "SHOW TABLES IN `$database` LIKE '" . $table2 . "'";
            $resultz1 = mysqli_query($conn, $sqlz1);
            // Check if the table exists
            if ($resultz1->num_rows > 0) {
                $sqly1 = "SELECT * FROM `categories`";
                $resulty1 = mysqli_query($conn, $sqly1);
                while ($row = mysqli_fetch_assoc($resulty1)) {
                    // echo $row['category_id'];
                    // echo $row['category_name'];
                    $id = $row['category_id'];
                    $c_name = $row['category_name'];
                    $c_desc = $row['category_description'];
                    echo '<div class="card my-2 cardy" style="width: 18rem; border-color: black">
                    <img src="https://source.unsplash.com/random/300x300/?' . $c_name . ',manga"
                        class="card-img-top card-img-bottom my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a class="no-underline" href="threadlist.php?catid=' . $id . '">' . $c_name . '</a></h5>
                        <p class="card-text">' . substr($c_desc, 0, 111) . '...</p>
                        <a href="threadlist.php?catid=' . $id . '" class="btn btn-warning">View Threads</a>
                    </div>
                </div>';

                }
            } else {
                $sqly2 = "CREATE TABLE `eko`.`categories` (`category_id` INT(25) NOT NULL AUTO_INCREMENT , `category_name` VARCHAR(60) NOT NULL , `category_description` VARCHAR(255) NOT NULL , `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`category_id`))";

                $resulty2 = mysqli_query($conn, $sqly2);

                if ($resulty2) {
                    $sqly1 = "SELECT * FROM `categories`";
                    $resulty1 = mysqli_query($conn, $sqly1);
                    while ($row = mysqli_fetch_assoc($resulty1)) {
                        // echo $row['category_id'];
                        // echo $row['category_name'];
                        $id = $row['category_id'];
                        $c_name = $row['category_name'];
                        $c_desc = $row['category_description'];
                        echo '<div class="card my-2 cardy" style="width: 18rem; border-color: black">
                        <img src="https://source.unsplash.com/random/300x300/?' . $c_name . ',manga"
                            class="card-img-top card-img-bottom my-2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a class="no-underline" href="threadlist.php?catid=' . $id . '">' . $c_name . '</a></h5>
                            <p class="card-text">' . substr($c_desc, 0, 111) . '...</p>
                            <a href="threadlist.php?catid=' . $id . '" class="btn btn-warning">View Threads</a>
                        </div>
                    </div>';

                    }
                }
            }

            ?>

        </div>
    </div>


    <?php include 'partials/_footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>