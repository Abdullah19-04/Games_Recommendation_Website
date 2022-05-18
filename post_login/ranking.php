<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="css/night.css">

    <style>
        #rankingpage {
            text-align: center;

        }

        th {
            color: #fff;
        }

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
            background-image: url('images/PS47.jpg');
            background-size: 100% 100%;
            color: transparent;
            -webkit-background-clip: text;
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
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="gamepage.php">Game Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="ranking.php">Ranking</a>
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



    <!--  sorting table (table.js) table.css  -->
    <div id="gamepage" class="py-5">
        <h2 id="gamepageheading" class="py-5">
            Ranking Page
        </h2>
    </div>

    <div class="py-5">
        <table class="table table-striped">
            <tr class="bg-info">
                <th data-column="name" data-order="desc">Name &#9650</th>
                <th data-column="Date_Released" data-order="desc">Date Released &#9650</th>
                <th data-column="Rating" data-order="desc">Platforms &#9650</th>
            </tr>

            <tbody id="myTable">

            </tbody>
        </table>
    </div>

    <script>
        var myArray = [{
                'name': 'NEED FOR SPEED PAYBACK',
                'Date_Released': '27/09/2021',
                'Rating': 'PlayStation 4 | Xbox One'
            },
            {
                'name': 'WWE 2K22',
                'Date_Released': '8/03/2022',
                'Rating': 'PlayStation 4 | PlayStation 5 | Xbox Series S/X'
            },
            {
                'name': 'Injustice Gods Among Us',
                'Date_Released': '12/11/2013',
                'Rating': 'PlayStation 4 | Xbox 360'
            },
            {
                'name': 'Spider Man Miles Morales',
                'Date_Released': '12/11/2020',
                'Rating': 'PlayStation 4 | PlayStation 5'
            },
            {
                'name': 'Gran Turismo 7',
                'Date_Released': '4/03/2022',
                'Rating': 'PlayStation 4 | PlayStation 5'
            },
            {
                'name': 'Fifa 2022',
                'Date_Released': '27/09/2021',
                'Rating': 'PlayStation 4 | PlayStation 5 | Xbox Series S/X'
            },
            {
                'name': 'SpongeBob SquarePants',
                'Date_Released': '23/06/2020',
                'Rating': 'PlayStation 4 | Xbox One'
            },
            {
                'name': 'Uncharted: The Lost Legacy',
                'Date_Released': '22/08/2017',
                'Rating': 'PlayStation 4'
            },
            {
                'name': 'STAR WARS Jedi Fallen Order',
                'Date_Released': '15/11/2019',
                'Rating': 'PlayStation 4 | PlayStation 5 | Xbox Series S/X'
            },
            {
                'name': 'Plants vs Zombies Warfare 2',
                'Date_Released': '23/02/2016',
                'Rating': 'PlayStation 4 |  Xbox One'
            },
        ]

        $('th').on('click', function() {
            var column = $(this).data('column')
            var order = $(this).data('order')
            var text = $(this).html()
            text = text.substring(0, text.length - 1)

            if (order == 'desc') {
                $(this).data('order', "asc")
                myArray = myArray.sort((a, b) => a[column] > b[column] ? 1 : -1)
                text += '&#9660'

            } else {
                $(this).data('order', "desc")
                myArray = myArray.sort((a, b) => a[column] < b[column] ? 1 : -1)
                text += '&#9650'

            }
            $(this).html(text)
            buildTable(myArray)
        })

        buildTable(myArray)

        function buildTable(data) {
            var table = document.getElementById('myTable')
            table.innerHTML = ''
            for (var i = 0; i < data.length; i++) {
                var row = `<tr>
							<td>${data[i].name}</td>
							<td>${data[i].Date_Released}</td>
							<td>${data[i].Rating}</td>
					  </tr>`
                table.innerHTML += row

            }
        }
    </script>

    <!-- footer  -->
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