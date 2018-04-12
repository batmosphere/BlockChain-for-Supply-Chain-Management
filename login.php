    <?php
        session_start();
        $_SESSION["Password"] =  $_SESSION["ID"] = $_SESSION["Email"]= "";
    ?>
    
    

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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
        <style type="text/css">
            #mainbody{
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            }
            .bg-1{
                background-color: #0000FF;
                color: white;
            }
            .img-responsive{
                margin: 0 auto;
            }
            #loginform{
                padding-top: 200px;
                margin: 0 auto;
                width: 25%;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target="#main_navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container-fluid bg-1 text-center">
            <h3 class="margin"><bold>SECURE BUY</bold></h3>
        </div>
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top" id="main_navbar">
        <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
        <form id="loginform" action="loginb.php" method="post" >
            <div class="form-group">
                <label for="userID">User ID:</label>
                <input type="text" class="form-control" name="ID">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="Password">
            </div>

            <button type="submit" class="btn btn-primary btn-sm" >Login</button>
            
            <button type="submit" class="btn btn-default btn-sm" ><a href="signup.php">Sign Up</button>
            
            </div>
        </form>
                <!-- Collect the nav links, forms, and other content for toggling -->
                
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
       

 
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>
        <script src="assets/js/plugins.js"></script>
         <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
