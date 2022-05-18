<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Sign-Up</title>
</head>

<body>
    <!-- Navbar -->
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
                    <a class="nav-link " href="ranking.php">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="console.php">Console</a>
                </li>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle active" data-toggle="dropdown">
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
    <!-- navbar above -->


    <!-- Resgitration form -->
    <form method="post" action="gfg.php">

        <div class="container-fluid py-5 pl-5">
            <div class="column">
                <div class="col-lg-6 col-md-6 col-12">
                    <form class="form-vertical">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Registeration</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="fname">First Name</label>
                                <div class="col-md-4">
                                    <input id="fname" name="fname" type="text" placeholder="Abdullah" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="lname">Last Name</label>
                                <div class="col-md-4">
                                    <input id="lname" name="lname" type="text" placeholder="Abbasi" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email</label>
                                <div class="col-md-4">
                                    <input id="email" name="email" type="text" placeholder="abdul.ab@example.com" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- username input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">Username</label>
                                <div class="col-md-4">
                                    <input id="Username" name="Username" type="Username" placeholder="@Abdul" class="form-control input-md" required="">
                                </div>
                            </div>


                            <!-- Male Female -->
                            <div class="form-group">
                                <label class="control-label col-xs-3">
                                    Gender
                                </label>
                                <div class="col-xs-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="genderRadios" value="male" required="">
                                        Male
                                    </label>
                                </div>
                                <div class="col-xs-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="genderRadios" value="Female" required="">
                                        Female
                                    </label>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-9">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="news" checked>
                                        Send me latest news and updates.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-9">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="agree" checked>
                                        I agree to the <a href="termncondition.html" target="_blank">Terms and Conditions</a>.
                                    </label>
                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="save"></label>
                                <div class="col-md-8">
                                    <button id="save" name="save" class="btn btn-success">Register</button>
                                    <button id="clear" name="clear" class="btn btn-danger">Reset</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <!-- Registration form above -->




    <!-- footer -->

    <div class="pt-5">
        <?php
        echo file_get_contents("footer.html");
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>