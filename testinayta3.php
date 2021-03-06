<?php
include("config.php");
?>
<!doctype html>

<html class="no-js" lang="fi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Search - New School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/search.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
       

    </head>
    <body>


        <div class="container">
            <header class="row">
                <div class="col">
                    <h1><center><img src="img/LogoINKARCADE.png" width="70%" height="70%" hspace="0" alt="logo" align="right"></center></h1>
                </div>
            </header>
            <section class="row">
                <nav class="col-2">
                    <ul class="nav flex-column">
                        <br>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">Front Page</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        </ul>
                </nav>
                <section class="col">
                    <nav class="row">
                    <div class="col">
                    <ul class="nav justify-content-center">
                    <li class="nav-item">
                    
                    </li>
                    <li class="nav-item">
                    
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                    </ul></div>
                    </nav>
                    <main class="row">
                        <div class="col">
                          <form class="forminappula" action="search.php" method="post">
    <input type="submit" name="someAction" value="Show All" />
</form>

<form class="forminappula" action="testinayta2.php" method="post">
    <input type="submit" name="someAction" value="Old School" />
</form>

<form class="forminappula" action="testinayta3.php" method="post">
    <input type="submit" name="someAction" value="New School" />
</form>

<form class="forminappula" action="testinayta4.php" method="post">
    <input type="submit" name="someAction" value="Realistic BW" />
</form>

<form class="forminappula" action="testinayta5.php" method="post">
    <input type="submit" name="someAction" value="Trash Polka" />
</form>
</br>

<?php
include("naytanewschool.php");
?>


</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script src="js/main.js"></script>
        <script src="js/search.js"></script>
    </body>
</html>
