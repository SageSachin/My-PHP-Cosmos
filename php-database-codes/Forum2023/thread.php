<?php
session_start();
$_SESSION['loggedin'] = true;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Threads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./partials/thread_style.css">
    <style>
        .container {
            text-align: center;
            padding: 1%;
        }

        .que-user-img {
            border-radius: 50%;
        }

        .container2 {
            margin-left: 2%;
        }

        .heading1 {
            margin-left: 5.4%;
        }

        .heading2 {
            margin-left: 5.4%;
            margin-top: 2%;
        }

        h1 {
            margin-left: 5.4%;
        }

        .mid {
            text-align: center;
        }

        .no-underline {
            text-decoration: none;
            color: blue;
        }

        .form-design {
            margin-left: 5.5%;
            margin-right: 8%;
        }

        .comment-right {
            margin-left: 7%;
        }
    </style>
</head>

<body>
    <?php include 'partials/_header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <?php
    $id_ab = isset ($_GET['threadid']) ? $_GET['threadid'] : '';
    $sql_ab = "SELECT * FROM `threads` WHERE thread_id=$id_ab";
    $result_ab = mysqli_query($conn, $sql_ab);
    while ($row = mysqli_fetch_array($result_ab)) {
        $thread_name = $row['thread_title'];
        $thread_desc = $row['thread_description'];

    }
    ?>

    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4 mid">
                <?php echo $thread_name ?>
            </h1>
            <p class="lead">
                <?php echo $thread_desc ?>
            </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
            <p><b>posted by: Sachin</b></p>
            </p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>