<?php
session_start();
$_SESSION['loggedin'] = true;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            text-align: center;
            padding: 1%;
        }
    </style>
</head>

<body>
    <?php include 'partials/_header.php' ?>

    <div class="container">
        <p>
        <h1><strong>Welcome to our Anime Forum!</strong></h1>
        </p>
        <p>
        <h5>Are you a fan of anime? Whether you're new to the world of anime or a seasoned enthusiast, this forum is the
            perfect place to connect with fellow fans, share your favorite series, and discover new ones!
            <br>
            Join our friendly community to discuss everything anime-related, from popular shows and characters to the
            latest trends and news in the anime world. Whether you're into action, romance, comedy, or fantasy, there's
            something for everyone here.
            <br>
            Feel free to start a new discussion thread to ask questions, share your thoughts on recent episodes,
            recommend must-watch anime, or even organize group watch parties with other members. Our forum is your space
            to express your love for anime and engage with others who share your passion.
        </h5>
        </p>
        <p>
        <h5>

            Of course! Here are a few more paragraphs for your anime forum website:

            Looking for a place to share your thoughts on the latest anime releases? You've come to the right spot!
            <br>
            Our
            forum is buzzing with discussions on the hottest anime series currently airing, from action-packed shonen
            adventures to heartwarming slice-of-life stories. Dive into the conversation and let us know what you think
            about the plot twists, character developments, and epic battles that keep us all glued to our screens.
            <br>
            But it's not just about the latest hits here. Our forum is a treasure trove of nostalgia, where fans can
            reminisce about classic anime favorites that have stood the test of time. Whether you're a fan of the iconic
            series from the '90s or you're curious about the origins of anime, there's a wealth of knowledge and fond
            memories waiting to be shared.
        </h5>
        </p>
    </div>

    <?php include 'partials/_footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>