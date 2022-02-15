<!-- Koneksi -->
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>

<?php
$sumber = 'https://masak-apa-tomorisakura.vercel.app/api/recipes';
$konten = file_get_contents ($sumber);
$data   = json_decode ($konten, true);
//var_dump ($data);
?>                         

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Resep Terupdate - Fau Web</title>

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
                        <h1 class="title">Resep Terupdate - Fau Web</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li> - </li>                         
                            <li>Resep Terupdate</li>
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
                            <h1 class="title">Resep Makanan Terupdate</h1>
                            <div class="sub-title">
                            Cari Resep Makanan Terlengkap disini Temukan bahan-bahan, alat-alat dan cara pembuatan berbagai jenis roti hanya dengan sekali klik
                            </div>
                    </div>
               </div>
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php foreach ($data['results'] as $row): ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="flat-product">
                                    <div class="featured-product">
                                        <img src="<?php echo $row['thumb'] ?>" alt="" class="slider-image">    
                                        <div class="rate-product">
                                            <div class="info-product">
                                                <p class="title"><?php echo $row['title']; ?></p>
                                                <p>Tingkatan  : <?php echo $row['dificulty']; ?></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>        
                        <?php endforeach; ?>
                    </div>              
                </div><!-- /.col-lg-12 -->             
            </div><!-- /.row -->     
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