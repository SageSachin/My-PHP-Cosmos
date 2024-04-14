<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WebiX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST") // we can change it to POST
    {
        /*
        $EMAIL=$_POST['email'];
        $PASSWORD=$_POST['pass'];
        */
        $NAME = isset($_POST['name']) ? $_POST['name'] : '';
        $EMAIL = isset($_POST['email']) ? $_POST['email'] : '';
        $DESC = isset($_POST['desc']) ? $_POST['desc'] : '';
      
      // Connecting to the database
      $servername="localhost";
      $username="root";
      $password=""; // becoz we r using xampp in our computer hence no password
      $database="contacts";
      
      // create a connection
      $conn = mysqli_connect($servername,$username,$password,$database);
      
      // Die if connection was not successful
      if(!$conn)
      {
          die("Sorry we failed to connect: ".mysqli_connect_error());
      }
      else
      {
          // sunmit to database
          // sql query to be executed
          $sql="INSERT INTO `contacts` (`Name`, `Email`, `Concern`, `dt`) VALUES ('$NAME', '$EMAIL', '$DESC', current_timestamp())";
          $result=mysqli_query($conn,$sql);
          
          // adding new records
          if($result)
          {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congo!</strong> Your details has been submitted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }
          else
          {
              echo "Record was not created! ".mysqli_error($conn);
          }
      }
    }
    ?>
    <div class="container mt-3">
        <h2>Contact Us for your concerns</h2>
        <form action="/My-PHP-Cosmos/php-basics/Form.php" method="post">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea name="desc" class="form-control" id="desc" cols="15" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>