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
      #signupform{
        padding-top: 75px;
        margin: 0 auto;
        width: 25%;
      }
      .inv {
  display: none;
}
    </style>

        <script >

    var a;
    var check = function() 
    {
        if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value) 
        {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
            document.getElementById('submit').disabled = false;
        } 
        else 
        {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
            document.getElementById('submit').disabled = true;
        }
    }
    </script>
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
    <form id="signupform" method="post" action="signup1.php" >
    <div class="form-group">
      <label for="signupName">Name:</label>
      <input type="name" name="Name" class="form-control" id="signupName"><br>
      <label for="signupName">Email:</label>
      <input type="email" name="Email" class="form-control" id="Email"><br>
      <label for="">Password:</label>
      <input type="password" name="Password" class="form-control" id="password" onkeyup='check();' /><br>
      <label for="">Confirm password:</label>
      <div><input type="password" name="confirm_password" class="form-control" id="confirm_password"  onkeyup='check();' > <span id='message'></span></div><br>

      
      <div>
      <button type="submit" id="submit" class="btn btn-default btn-primary">Sign Up</button>
      </div>
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
