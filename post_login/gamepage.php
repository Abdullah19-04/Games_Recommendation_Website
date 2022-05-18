<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/night.css">
    <title>Game Page</title>

    <style>
        #gamepage {
            background-color: 050505;

        }

        #gamepageheading {
            font-size: 160px;
            font-weight: 900;
            color: white;
            text-align: center;
            background-image: url('images/glass.jpg');
            background-size: 100% 100%;
            color: transparent;
            -webkit-background-clip: text;
        }


        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>


<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Game Dingo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="gamepage.php" id="navbardrop" data-toggle="dropdown">
                        Game Page
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#detail">Games</a>
                        <a class="dropdown-item" href="#reviews">Reviews</a>
                        <a class="dropdown-item" href="termncondition.html">Terms and Conditions</a>

                    </div>
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





    <!-- night mode -->

    <div class=" mainBody">
        <div class="toggleContainer">
            <input id="checkbox" type="checkbox" value="off">
            <script>
                const checkbox = document.querySelector("#checkbox");
                const mainBody = document.querySelector("Body");
                checkbox.addEventListener("click", () => mainBody.classList.toggle("darkBg"));
            </script>
        </div>
    </div>

    <!-- night mode above -->

    <div id="gamepage" class="py-5">
        <h2 id="gamepageheading" class="py-5">
            GAME PAGE
        </h2>
    </div>



    <!-- Game section -->
    <section id="detail" class="my-5">
        <div class="py-5">
            <h2 class="text-center">
                Game Detailed Descriptions
            </h2>
        </div>
        <div class="container-fluid">
            <?php

            $json = file_get_contents('gamepage_data.json');
            $json_data = json_decode($json, true);

            foreach ($json_data as $value) : ?>
                <div class="row">
                    <form method="post" action="gamepagereview.php">
                        <div class="col-lg-8 col-md-8 col-12">
                            <img src="images/<?= $value['image']; ?>" class="img" style="height: 500px; width: 1000px;">
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4><?= $value['Title']; ?></h4>
                            <p class="py-2 text-justify"><b>Details:</b> <?= $value['Details']; ?>

                                <br><b>Genre:</b> <?= $value['Genre']; ?>
                                <br><b>Developers:</b> <?= $value['Developers']; ?>
                                <br><b>Features:</b> <?= $value['Features']; ?>
                                <br><b>Release Date:</b> <?= $value['Release_date']; ?>
                                <br><b>Platform:</b> <?= $value['Platform']; ?>
                            <div class="form-group">
                                <label> <b> Review </b></label>
                                <input type="text" name="Review" placeholder="Enter game's name and review" autocomplete="off" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-outline-danger">submit</button>
                            <p class="pt-2"> <a href="<?= $value['Buy']; ?>" target="_blank" class="btn btn-success"> Buy It </a>
                            </p>
                    </form>
                </div>
        </div>
        <br>
    <?php endforeach; ?>
    </section>






    <!--  -->


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Reviews
    </button>

    <!-- Modal -->
    <section id="reviews">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Latest Reviews</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <?php
                            $json = file_get_contents('reviews.json');
                            $json_data = json_decode($json, true);

                            foreach ($json_data as $value) : ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <br><b>Reviews:</b> <?= $value['Review']; ?>
                                    </div>
                                </div>
                                <br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        </div>


    </section>
























    <!-- footer below -->

    <div class="pt-5">
        <?php
        echo file_get_contents("footer.html");
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>