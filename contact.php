<!-- php -->
<?php

session_start();
include('connection.php');  

if(isset($_POST['submit'])){  

    // echo 'user submited';
    define('result','result');

    $name = $_POST['name'];
    $email =$_POST['email'];
    $subject=$_POST['subject'];
    $message = $_POST['message'];


$sqli="INSERT INTO contactus (name,email,subject,message)VALUES (?,?,?,?)";
$stmtinsert =$db->prepare($sqli);

$result=$stmtinsert->execute([$name,$email,$subject,$message]);

if(result){

    echo "<script>
    alert('MESSAGE SENT SUCCESSFULLY !!');
    window.location.href = 'index.html';
    </script>";

   

}

else{
    echo "<script>
    window.location.href = 'contact.php';
    alert('SOMETHING WENT WRONG TRY AGAIN !!');
    </script>";
}
}



?>


<!-- html code -->

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Contact | VK PHOTOGRAPHY</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">

                    <a class="site-title"><span>VK</span>PHOTOGRAPHY</a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li ><a href="index.html">Home</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="active"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay subpage-hero contact-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Contact</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-contact-us">

            <div class="container">
                
                    
                        <h2>Send a message</h2>
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="name">Name:</label>
                                      <input name="name" type="text" class="form-control" id="name" required>
</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="email">E-mail:</label>
                                      <input name="email" type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="message">Subject:</label>
                              <input name="subject" class="form-control" id="subject" required></input>
                            </div>
                            <div class="form-group">
                              <label for="message">Message:</label>
                              <textarea name="message" class="form-control form-control-comment" id="message" requried></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-green">Contact us</button>
                            </div>
                        </form>
                    
            </div>
            
        </section><!-- /.section-contact-us -->

    

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="site-title"><span>VK </span>PHOTOGRAPHY</a>
                    <p>“It’s foolish to fear what we have yet to see and know.”</p>

                </div>
                <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                    <h3>Keep in touch</h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                                href="mailto:vkphotography.info@gmail.com">vkphotography.info@gmail.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+91 756001034">+91 75 600 1034
                            </a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>Dehradun, INDIA</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="social-links">
                            <a target="blank" class="twitter-bg" href="https://twitter.com/VanshKu80309344"><i
                                    class="fa fa-twitter"></i></a>
                            <a target="blank" class="facebook-bg" href="https://www.facebook.com/iamvanshkumar"><i
                                    class="fa fa-facebook"></i></a>
                            <a target="blank" class="pinterest" href="https://www.instagram.com/vansh_uk07/"><i
                                    class="fa fa-instagram"></i></a>
                            <a target="blank" class="linkedin-bg"
                                href="https://www.linkedin.com/in/vansh-kumar-4039b9215/"><i
                                    class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-links -->
                    </div>
                    <div class="col-xs-4">
                        <div class="text-right">
                            <p>&copy; vkphotography</p>
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.copyright -->
    </footer><!-- /#footer -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>