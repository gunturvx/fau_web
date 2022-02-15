<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Sign Up - Fau Web</title>

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
                        <h1 class="title">Sign Up</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li> - </li>                         
                            <li>Sign Up</li>
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
                        <div class="sub-title">
                        <form action="register.php" method="post">
                        <h2 class="form-title">Register</h2>

                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" >
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email"  value="<?php echo $email; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password"  value="<?php echo $password; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf"  value="<?php echo $passwordConf; ?>" class="text-input">
                        </div>
                        <div>
                            <button type="submit" name="register-btn" class="btn btn-big">Register</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
            <p>Sudah Mempunyai Akun ?</p><button type="submit" name="login-btn" class="btn btn-big" ><a href="login.php">Sign In</a></button>
           </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        
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