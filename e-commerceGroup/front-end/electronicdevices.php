<!DOCTYPE html>
<?php 
session_start(); 
include("../includes/functions.php")
?>
<html>

<head>
    <title>The Selling Board</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        section {
            min-height: 80vh;
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }

        footer {
            background-color: black;
            color: white;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .social-icons i {
            font-size: 24px;

        }

        footer {}
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" name="logo">TSB</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="electronicdevices.php">Electronic Devices</a></li>
                            <li><a href="homeliving.php">Home and Living</a></li>
                            <li><a href="fashion.php">Fashion</a></li>
                            <li><a href="sports.php">Sports</a></li>
                            <li><a href="grocery.php">Grocery</a></li>
                        </ul>
                    </li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="cart.php">Add to Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="container-fluid">
            <h1>Categories \ Electronic Devices</h1>
        </div>
    </div>
    <hr>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-2">
                <h3> <?php fetchNumberOfProducts('Electronic Devices') ?> Items Found</h3>
            </div>

            <div class="col-md-9" style="text-align: right;">
                <h3>Sort By:
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Price High to Low</a></li>
                            <li><a href="#">Price Low to High</a></li>
                        </ul>
                    </div>
                    View: <a href="#"><span class="glyphicon glyphicon-th-large active"></a></span></li> <a
                        href="#"><span class="glyphicon glyphicon-th-list"></a></span>
                </h3>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <?php
        fetchProductbyCateg('Electronic Devices');
        ?>
    </div>

    <footer class="text-center">
        <a href="#home" class="btn btn-secondary"><span class="glyphicon glyphicon-circle-arrow-up"></span> Back to
            top</a>
        <p>© 2024 The Selling Board</p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/jeanfideliom/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/yourprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>

</html>