<!DOCTYPE html>

<html>

<head>
    <title>The Selling Board</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }

        .resized-image {
            width: 300px;
            height: 300px;
        }

        footer {
            background-color: black;
            color: white;
            padding: 20px 0;
        }

        .social-icons i {
            font-size: 24px;

        }
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
                            <li><a href="#">Home and Living</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Grocery</a></li>
                        </ul>
                    </li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="cart.php">Add to Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">About Us</h1>
            <p class="lead text-justify">We are a group of committed New Era University students who are enthusiastic
                about website development
                and programming. Our primary objective is to attain expertise in both front-end and back-end development
                in order to produce all-encompassing and cutting-edge web solutions. Our objective is to develop
                efficiently
                operating and user-friendly websites that align with the demands of the contemporary digital landscape
                through
                the integration of our expertise and capabilities.</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="container">
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto resized-image" src="../images/profile/lester.png"
                    alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading" style="text-align: center;">Mark Lester Laurente</h2>
                <p class="lead text-justify">Lester possesses extensive knowledge of HTML, CSS, and JavaScript as a
                    front-end
                    developer. His abilities convert our conceptualizations into visually captivating, functional, and
                    interactive web experiences.</p>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="container">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading" style="text-align: center;">Brylle Simon B. Galquiera</h2>
                <p class="lead text-justify">Brylle possesses expertise in front-end and back-end development.
                    By leveraging his adaptability, we are capable of developing dependable and cohesive web
                    applications
                    that effortlessly merge server-side functionality with user-facing elements.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto resized-image" src="../images/profile/brylle.png"
                    alt="Generic placeholder image">
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="container">
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto resized-image" src="../images/profile/jean.png"
                    alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading" style="text-align: center;">Jean Fidelio E. Marquez</h2>
                <p class="lead text-justify">Jean is an expert in user interfaces and a front-end and back-end
                    developer.
                    His extensive repertoire of abilities guarantees not only the smooth operation of our projects
                    but also the development of an engaging and user-friendly interface.</p>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="container">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading" style="text-align: center;">Ron Anthony A. Sy</h2>
                <p class="lead text-justify">Ron develops both the front end and the rear end. His proficiency in both
                    domains
                    enables us to construct comprehensive and dynamic web solutions that harmonize aesthetics and
                    functionality.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto resized-image" src="../images/profile/ron.png"
                    alt="Generic placeholder image">
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

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