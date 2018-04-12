<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SecureBuy - A blockchain secured marketplace</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/lora-web-font.css" />
        <link rel="stylesheet" href="assets/css/opensans-web-font.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#main_navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top" id="main_navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo3.png" alt="logo" class="img-responsive" height="10px" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#home">Validate Product</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="home-content text-center">
                                    <h1>SecureBuy</h1>
                                    <h4>A blockchain secured marketplace for all your needs</h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Sections -->
        <section id="service" class="service sections">
            <div class="container">
                <div class="heading text-center">
                    <h1>Our Products</h1>
                    <div class="separator"></div>
                </div>
                <!-- Example row of columns -->
                <div class="row">
                    <div class="wrapper">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-pencil"></i>
                                <h5>Pencil</h5>
                                <div class="separator2"></div>
                                <form action = "http://localhost:5000/txion" method = "post">
                                <!--<p><input class="btn btn-primary" name = "product1" value="submit" >Buy</p>-->
                                <p><input type = "hidden" name = "prodID" value="0123456789abcdef" /></p>
                                <p><input class="btn btn-primary" type = "submit" value = "Buy" /></p>
                                </form>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-camera-retro"></i>
                                <h5>Camera</h5>
                                <div class="separator2"></div>
                                <form action = "http://localhost:5000/txion" method = "post">
                                <!--<p><input class="btn btn-primary" name = "product1" value="submit" >Buy</p>-->
                                <p><input type = "hidden" name = "prodID" value="abcdef0123456789" /></p>
                                <p><input class="btn btn-primary" type = "submit" value = "Buy" /></p>
                                </form>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-lightbulb-o"></i>
                                <h5>Light Bulb</h5>
                                <div class="separator2"></div>
                                <form action = "http://localhost:5000/txion" method = "post">
                                <!--<p><input class="btn btn-primary" name = "product1" value="submit" >Buy</p>-->
                                <p><input type = "hidden" name = "prodID" value="9876543210fedcba" /></p>
                                <p><input class="btn btn-primary" type = "submit" value = "Buy" /></p>
                                </form>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-lock"></i>
                                <h5>Lock</h5>
                                <div class="separator2"></div>
                                <form action = "http://localhost:5000/txion" method = "post">
                                <!--<p><input class="btn btn-primary" name = "product1" value="submit" >Buy</p>-->
                                <p><input type = "hidden" name = "prodID" value="fedbca9786543210" /></p>
                                <p><input class="btn btn-primary" type = "submit" value = "Buy" /></p>
                                </form>
                            </div>
                        </div> 

                    </div>
                </div>
            </div> <!-- /container -->       
        </section>


        <section id="service" class="service sections">
            <div class="container">
                <div class="heading text-center">
                    <h1>Validate Product</h1>
                    <div class="separator"></div>
                </div>
                <form action = "http://localhost:5000/blocks" method = "post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="productval" placeholder="Enter Transaction ID" name = "transactionId">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="productkey" placeholder="Enter key" name = "key">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="qrcode" placeholder="Enter scanned Product ID" name = "QRcode_ProductID">
                    </div>
                    <div class="form-group">
                    <p><input class="btn btn-primary" value="Validate" type="submit"></p>
                    </div>
                </form>
            </div>
        </section>        
        <!-- Sections -->
        <section id="testimonial" class="testimonial lightbg sections">
            <div class="container">
                <div class="heading text-center">
                    <h1>See what others are saying about us</h1>
                    <div class="separator"></div>
                </div>
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                    <img class="img-responsive " src="assets/images/team/1.jpg" alt="Team Member">

                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1">
                                    <img class="img-responsive" src="assets/images/team/2.jpg" alt="Team Member">

                                </li>
                          
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center margin-top-60">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3 details">
                                            <p>" Secure Buy is the best blockchain based marketplace, had a pleasant experience shopping with them."</p>
                                            <small>Rohan from <a href="#">Gurgaon</a></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3 details">

                                            <p>" Completely tension free as I was sure that no one would be able to tamper with my purchase"</p>
                                            <small>Sakshi from <a href="#">Hyderabad</a></small>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>

                </div>
            </div> <!-- /container -->       
        </section>

      


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>
        <script src="assets/js/plugins.js"></script>
         <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
