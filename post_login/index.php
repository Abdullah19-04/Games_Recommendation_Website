<!DOCTYPE html>
<html lang="en">

<head>
    <title>Game Console Recommendation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/night.css">
    <!-- social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Game Dingo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="gamepage.php">Game Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ranking.php">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="console.php">Console</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">log Out</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- above is for navigation-->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/WWE2k22.jpg" alt="WWE 2K22" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>WWE 2K22</h3>
                    <p>A virtual wrestling experience</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Spider Man Miles Morales.jpg" alt="Spiderman Miles Morales " width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Spiderman Miles Morales</h3>
                    <p>Experience the life of Miles as a Spiderman</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Gran Turismo 7.jpg" alt="Gran Turismo 7" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Gran Turismo 7</h3>
                    <p>Fasten your seatbelt for the Racing Experience</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <section id="detail" class="my-5">
        <div class="py-5">
            <h2 class="text-center">
                Game Details
            </h2>
        </div>

        <div class="container-fluid">
            <?php

            $json = file_get_contents('homepage_data.json');
            $json_data = json_decode($json, true);


            foreach ($json_data as $value) : ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/<?= $value['image']; ?>" class="img-fluid image1_index">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-4"><?= $value['Title']; ?></h2>
                        <p class="py-2"><b>Details:</b> <?= $value['Details']; ?>
                            <br><b>Genre:</b> <?= $value['Genre']; ?>
                            <br><b>Developers:</b> <?= $value['Developers']; ?>
                            <br><b>Features:</b> <?= $value['Features']; ?>
                            <br><b>Release Date:</b> <?= $value['Release_date']; ?>
                            <br><b>Platform:</b> <?= $value['Platform']; ?>
                        </p>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </section>


    <form method="post" action="commentform.php">
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">
                    Comment here
                </h2>
            </div>
            <div class="w-50 m-auto">
                <form action="commentform.php" method="post">
                    <div class="form-group">
                        <label> Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Email</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Mobile</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Comment</label>
                        <input type="text" name="comment" autocomplete="off" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-outline-danger">submit</button>
                </form>
            </div>
        </section>

        <div class="pt-5">
            <?php
            echo file_get_contents("footer.html");
            ?>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>



</html>