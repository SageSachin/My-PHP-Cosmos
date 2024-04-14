<?php
// to check if session already started..

if (!isset ($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    $loggedin = false;
} else {
    $loggedin = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .dropdown-menu {
            /* text-align: center; */
        }

        .user-image {
            border-radius: 50%;
        }

        .user-identity {
            margin-left: 10%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><span><b>eKo</b></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><b>About</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact-me"><b>Contact</b></a>
                    </li>
                </ul>

                <div class="search mx-2">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline bg-light" type="submit"><b>Search</b></button>
                    </form>
                </div>

                <div class="user mx-1">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b>
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                        alt="error" width="32px" height="32px" class="user-image">
                                </b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end my-2">
                                <li class="user-identity">
                                    ⭐
                                    <b>
                                        <?php echo $_SESSION['email'] ?>
                                    </b>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php
                                if (!$loggedin) {
                                    echo '<li><a class="dropdown-item" href="login.php">Login</a></li>';
                                    echo '<li><a class="dropdown-item" href="signup.php">Signup</a></li>';
                                }
                                if ($loggedin) {
                                    echo '<li><a class="dropdown-item" href="login.php">Add Account</a></li>';
                                    echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</body>

</html>