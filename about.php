<!-- Koneksi -->
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>About Us - Fau Web</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
	
	<!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

</head>                                 
<body class="header_sticky"> 
    <!-- Preloader -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading</h2>
        </div>
    </section>   

    <!-- Boxed -->
    <div class="boxed">

    <!-- Header Dipanggil dari folder app/includes/header.php ( agar header sama dengan page yg lain) -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
            
     <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">About Us</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li> - </li>                         
                            <li>About Us</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <section class="flat-row section-about1 parallax parallax3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title">About Us</h1>
                    </div>
                        <div class="text-content">
                            <p>Fau adalah sebuah website yang dibuat untuk orang yang ingin belajar membuat kue dan roti. Fau merupakan website yang menampilkan cara pembuatan kue dan roti dengan menampilkan alat, bahan dan tata cara pembuatan kue dan roti. Website Fau dibuat pada tahun 2021 oleh tiga orang mahasiswa yaitu Fatwa Meilidya, Andi Soehartanto Putra, dan Usama Waliyyudin. Nama Fau diambil dari singkatan pendirinya yaitu Fatwa, Andi, Usama.</p>
                        </div>
                </div>
            </div>
        </div>     
    </section> 
    <section class="flat-row bg-theme section-step">
        <div class="container">
         <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title">Our Team</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="listing-team">
                        <div class="wrap-team">
                            <div class="flat-team">
                                <div class="avatar">
                                    <img src="images/about/t1.jpg" alt="image">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                    </ul>
                                    <div class="content-team">
                                        <h5 class="name">Fatwa Meilidya</h5>
                                        <p class="position">Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flat-team">
                                <div class="avatar">
                                    <img src="images/about/t1.jpg" alt="image">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                    </ul>
                                    <div class="content-team">
                                        <h5 class="name">Andi Soehartanto Putra</h5>
                                        <p class="position">Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flat-team">
                                <div class="avatar">
                                    <img src="images/about/t1.jpg" alt="image">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                    </ul>
                                    <div class="content-team">
                                        <h5 class="name">Usama Waliyyudin</h5>
                                        <p class="position">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      
    <!-- /.Footer -->   
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
 
    <!-- Javascript -->
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/tether.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script> 
    <script src="javascript/jquery.easing.js"></script>    
    <script src="javascript/jquery-waypoints.js"></script> 
    <script src="javascript/jquery.fancybox.js"></script>
    <script src="javascript/jquery-waypoints.js"></script> 
    <script src="javascript/owl.carousel.js"></script> 
    <script src="javascript/jquery-countTo.js"></script>  
    <script src="javascript/jquery.cookie.js"></script>
    <script src="javascript/parallax.js"></script>
    <script src="javascript/smoothscroll.js"></script>   

    <script src="javascript/main.js"></script>
</body>
</html>