<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Console</title>
    <link rel="stylesheet" href="css/night.css">

    <!--
    code for night mode
-->

    <style>
        section {
            height: 100vh;
            width: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

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


        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');



        .container {
            background-color: black;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10;
            overflow-x: hidden;
            width: 100vw;


        }

        h1 {
            margin: 10px;
        }

        .box {

            color: blue;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 900px;
            height: 600px;
            margin: 10px;
            border-radius: 6px;
            box-shadow: 2px 4px 5px rgba(0, 0, 0, 0.3);
            transform: translateX(400%);
            transition: transform 0.4s ease;
        }

        .box:nth-of-type(even) {
            transform: translateX(-400%);
        }

        .box.show {
            transform: translateX(0);
        }

        .box h2 {
            font-size: 45px;
        }

        .HandW {
            height: 610px;
            width: 900px;
        }

        html {
            height: 100vh;
        }

        body {
            height: 500vh;
            background: white;
        }


        canvas {
            position: fixed;
            left: 600px;
            top: 400px;
            transform: translate(-50%, -50%);
            max-width: 1000px;
            max-height: 5000px;
        }
    </style>
</head>


<body>
    <!--
        
    -->

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
                <li class="nav-item">
                    <a class="nav-link" href="ranking.php">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="console.php">Console</a>
                </li>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Sign IN / Sign UP
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Sign In</a>
                        <a class="dropdown-item" href="registeration.php">Sign Up</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>




    <!-- night mode -->
    <div class="mainBody">
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

    <div>
        <section class="one">
            <div id="gamepage" class="py-5">
                <h2 id="gamepageheading" class="py-5">
                    Playstation 4
                </h2>
            </div>
        </section>
    </div>





    <div class="container">
        <div class="box">
            <h2><img class="HandW" src="images/PS41.jpg" alt=""></h2>
        </div>
        <div class="box">
            <h2><img class="HandW" src="images/PS42.png" alt=""></h2>
        </div>
        <div class="box">
            <h2><img class="HandW" src="images/PS43.jpg" alt=""></h2>
        </div>
        <div class="box">
            <h2><img class="HandW" src="images/PS44.jpg" alt=""></h2>
        </div>
        <div class="box">
            <h2><img class="HandW" src="images/PS45.jpg" alt=""></h2>
        </div>
        <div class="box">
            <h2><img class="HandW" src="images/PS46.jpg" alt=""></h2>
        </div>
        <div class="box">
            <h2><img class="HandW" src="images/PS47.jpg" alt=""></h2>
        </div>

    </div>


    <script>
        const boxes = document.querySelectorAll('.box')
        window.addEventListener('scroll', checkBoxes)
        checkBoxes()

        function checkBoxes() {
            const triggerBottom = window.innerHeight / 5 * 4
            boxes.forEach(box => {
                const boxTop = box.getBoundingClientRect().top
                if (boxTop < triggerBottom) {
                    box.classList.add('show')
                } else {
                    box.classList.remove('show')
                }
            })
        }
    </script>

    <div class="pt-1">
        <div class="container">
            <iframe width="600" height="500" src="https://www.youtube.com/embed/Jw8HCFZkBds?start=35" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



    <div class="pt-5">
        <?php
        echo file_get_contents("footer.html");
        ?>
    </div>
</body>

</html>