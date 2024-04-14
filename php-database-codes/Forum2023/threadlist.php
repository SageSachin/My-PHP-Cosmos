<?php
session_start();
$_SESSION['loggedin'] = true;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./partials/threadlist_style.css">
    <style>
        .container {
            text-align: center;
            padding: 1%;
        }

        .que-user-img {
            border-radius: 50%;
        }

        .container2 {
            margin-left: 3%;
            padding: 1%;
        }

        .heading1 {
            margin-left: 5.4%;
        }

        .mid {
            text-align: center;
        }

        .no-underline {
            text-decoration: none;
            color: blue;
        }

        .message {
            margin-left: 5.5%;
            margin-top: 1%;
        }

        .form-design {
            margin-left: 5.5%;
            margin-right: 8%;
        }
    </style>
</head>

<body>
    <?php include 'partials/_header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <?php
    $id2 = isset ($_GET['catid']) ? $_GET['catid'] : '';
    $sql06 = "SELECT * FROM `categories` WHERE category_id=$id2";
    $result06 = mysqli_query($conn, $sql06);
    while ($row = mysqli_fetch_array($result06)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];

    }
    ?>


    <?php
    $showAlert2 = false;
    $method = $_SERVER['REQUEST_METHOD'];
    $table3 = "threads";
    if ($method == 'POST') {
        $sql_thread_table = "SHOW TABLES IN `$database` LIKE '" . $table3 . "'";
        $result_thread_table = mysqli_query($conn, $sql_thread_table);
        // Check if the table exists
        if ($result_thread_table->num_rows > 0) {
            $th_title = isset ($_POST['title10']) ? $_POST['title10'] : '';
            $th_desc = isset ($_POST['description10']) ? $_POST['description10'] : '';

            $sql_que = "INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_ctg_id`, `thread_user_id`, `created`) VALUES ('$th_title', '$th_desc', '$id2', '0', current_timestamp());";
            $result_que = mysqli_query($conn, $sql_que);
            $showAlert2 = true;
            if ($showAlert2) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>hooray!</strong> 
                Your thread has been added, please wait for community to respond.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }

        } else {
            $sql_thread_create = "CREATE TABLE `eko`.`threads` (`thread_id` INT(11) NOT NULL AUTO_INCREMENT , `thread_title` TEXT NOT NULL , `thread_description` TEXT NOT NULL , `thread_ctg_id` INT(11) NOT NULL , `thread_user_id` INT(11) NOT NULL , `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`thread_id`))";

            $result_thread_create = mysqli_query($conn, $sql_thread_create);

            if ($result_thread_create) {
                $th_title = isset ($_POST['title10']) ? $_POST['title10'] : '';
                $th_desc = isset ($_POST['description10']) ? $_POST['description10'] : '';

                $sql_que = "INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_ctg_id`, `thread_user_id`, `created`) VALUES ('$th_title', '$th_desc', '$id2', '0', current_timestamp());";
                $result_que = mysqli_query($conn, $sql_que);
                $showAlert2 = true;
                if ($showAlert2) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>hooray!</strong> 
                    Your thread has been added, please wait for community to respond.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        }

    }
    ?>

    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4 mid">Welcome to
                <?php echo $catname ?> Forums!
            </h1>
            <p class="lead">
                <?php echo $catdesc ?>
            </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-warning btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="container2 my-4">
        <h1 class="heading1">Start a Discussion</h1>

        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
            <!-- 
            $_SERVER['REQUEST_URI'] will give you:
            /some-dir/yourpage.php?q=bogus&n=10 
            -->
            <div class="mb-3 form-design my-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title10">
                <div id="emailHelp" class="form-text">Keep your title as crisp as possible</div>
            </div>
            <div class="mb-3 form-design">
                <label for="description" class="form-label">Elaborate Your Concern</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                        name="description10"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-warning my-2 form-design">Submit</button>
        </form>

        <h1 class="heading1 my-5">Browse Questions</h1>

        <?php
        $id03 = isset ($_GET['catid']) ? $_GET['catid'] : '';
        $sql09 = "SELECT * FROM `threads` WHERE thread_ctg_id=$id03";
        $result09 = mysqli_query($conn, $sql09);
        $noResult = true;

        while ($row = mysqli_fetch_array($result09)) {
            $noResult = false;
            $catname2 = $row['thread_title'];
            $catdesc2 = $row['thread_description'];
            $Tid = $row['thread_id'];


            echo '<div class="d-flex align-items-center my-4">
            <div class="flex-shrink-0">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                    alt="error" width="50px" height="50px" class="que-user-img">
            </div>
            <div class="flex-grow-0 ms-4">
                <h6><a class="no-underline" href="thread.php?threadid=' . $Tid . '">' . $catname2 . '</a></h6>
                ' . $catdesc2 . '
            </div>
            </div>';

        }

        if ($noResult) {
            echo '<div class="jumbotron my-4">
            <h1 class="display-6 heading1">
            No Result Found!
            </h1>
            <hr class="my-4">
            <p><div class="message"><b>Be the first one to add your question..</b></div></p>
            </div>
            </div>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>