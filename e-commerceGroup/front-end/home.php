<!DOCTYPE html>
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

        .carousel {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }

        .carousel-inner img {
            width: 100%;
            /* Make sure the images fill the carousel container */
            height: auto;
            /* Maintain aspect ratio */
            display: block;
            /* Ensures proper spacing */
            margin: auto;
            /* Centers the images horizontally */
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
    </style>
</head>

<body data-spy="scroll" data-target=".navbar">
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
    <section>
        <header class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1>Top Categories</h1>
                    <aside>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/LebronXXI.png" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/AirForce1.png" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/DunkLow.jpg" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/AirJordan.jpg" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="list-group">
                                <a href="#" class="list-group-item" style="padding: 0; margin: 0;">
                                    <div class="col-md-3" style="padding: 0; margin: 0;">
                                        <img src="../images/Tatum2.jpg" style="width: 80px; height: 100px;">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="list-group-item-heading">
                                            <h4>PHP: 10,895</h4>
                                            <h4>Shoes</h4>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="list-group-item-text">Lorem ipsum</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </aside>

                </div>
                <div class="col-md-4">
                    <h1>Top Products</h1>
                    <div>
                        <div id="carousel1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel1" data-slide-to="1"></li>
                                <li data-target="#carousel1" data-slide-to="2"></li>
                                <li data-target="#carousel1" data-slide-to="3"></li>
                                <li data-target="#carousel1" data-slide-to="4"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../images/LebronXXI.png" alt="Lebron XXI">
                                    <div class="carousel-caption">
                                        <h4>My Photo 1</h4>
                                        <p>My Shoes 1</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/AirForce1.png" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 2</h4>
                                        <p>My Shoes 2</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/AirJordan.jpg" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 3</h4>
                                        <p>My Shoes 3</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/DunkLow.jpg" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 4</h4>
                                        <p>My Shoes 4</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/Tatum2.jpg" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 5</h4>
                                        <p>My Shoes 5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
                <div class="col-md-4">
                    <h1>Promotions</h1>
                    <div>
                        <div id="carousel2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel2" data-slide-to="1"></li>
                                <li data-target="#carousel2" data-slide-to="2"></li>
                                <li data-target="#carousel2" data-slide-to="3"></li>
                                <li data-target="#carousel2" data-slide-to="4"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../images/LebronXXI.png" alt="Lebron XXI">
                                    <div class="carousel-caption">
                                        <h4>My Photo 1</h4>
                                        <p>My Shoes 1</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/AirForce1.png" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 2</h4>
                                        <p>My Shoes 2</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/AirJordan.jpg" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 3</h4>
                                        <p>My Shoes 3</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/DunkLow.jpg" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 4</h4>
                                        <p>My Shoes 4</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../images/Tatum2.jpg" alt="Air Force 1">
                                    <div class="carousel-caption">
                                        <h4>My Photo 5</h4>
                                        <p>My Shoes 5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>






    </section>
    <section>
        <div class="container">
            <div class="page-header">
                <h3>All Products</h3>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="../images/LebronXXI.png" style="width: 100%;">
                    <div class="caption">
                        <h4 class="pull-right">PHP: 10,895</h4>
                        <h4><a href="product.php">Shoes</a></h4>
                        <p>Last time around, LeBron flipped the script on his shoe game as only the King can. The encore
                            is
                            even
                            better. The LeBron XXI has a cabling system that works with an Air Zoom unit and a light,
                            low-to-the-ground design, giving you agile fluidity and explosiveness without excess weight.
                            Created
                            for your ascent and the next generation of hoopers, it's ideal for Bron-like open-floor
                            attacks
                            and
                            rising towards the rim when the game's pace turns up. This rugged design encourages you to
                            keep
                            going even when things get difficult. With its extra-durable rubber outsole, this version
                            gives
                            you
                            traction for outdoor courts.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

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