<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);


if(isset($_POST['btn_fav'])) {
    $check = createFavorite($_GET['id']);
    if($check) {
        header("Location: favorite.php");
    }else{
        header("Location: rekomendasi.php?id=" . $_GET['id']);
    }
}

?>
<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Rekomendasi - Fau Web</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-datetimepicker.min.css">
	
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
                        <h1 class="title">Rekomendasi</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li> - </li>                         
                            <li>Rekomendasi</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 


    <!-- Blog posts -->
    <section class="main-content page-listing">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="listing-wrap">
                        
                        <div class="content-listing">

                            <div class="list-tab">
                                <h3 class="title-listing"><?php echo $post['title']; ?></h3>
                                <div class="flat-tabs" data-effect="fadeIn">
                                    <form action="" method="post">
                                        <div class="button-addlist float-right">
                                        <?php if (isset($_SESSION['id'])): ?>
                                            <button type="submit" name="btn_fav" class="flat-button">Favorite</a>
                                                </button><?php endif; ?>
                                        </div>
                                    </form>
                                    <ul class="menu-tab clearfix" id="hilang">
                                        <li class="active"><a href="#">Alat & Bahan</a></li>
                                        <li class=""><a href="#">Cara Pembuatan</a></li>
                                    </ul><!-- /.menu-tab -->
                                    <div class="content-tab">
                                        <div class="content-inner active">
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left">
                                                    <span class="effect"><img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt=""></span>                         
                                                </div>                                     
                                                <div class="content-food float-left"> 
                                                    <?php echo html_entity_decode($post['body']); ?>
                                                </div>  
                                            </div>    
                                        </div>
                                        <div class="content-inner">
                                            <div class="menu-food clearfix">
                                                <div class="content-food float-left">
                                                <?php echo html_entity_decode($post['body1']); ?>
                                                </div>                              
                                            </div>
                                        </div>  
                                    </div><!-- /.content-tab -->
                                </div>
                            </div>
                    
                        </div>
                    </div><!-- /.listing-wrap -->                   
                </div><!-- /.col-lg-9 -->    
            
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section> 
    <!-- /.Footer -->   
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    
    <!-- Javascript -->
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/tether.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script> 
    <script src="javascript/jquery.easing.js"></script>    
    <script src="javascript/jquery-waypoints.js"></script> 
    <script src="javascript/jquery-countTo.js"></script>  
    <script src="javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUIc2-TTbn2IGJ4W0_0ePkv3xBvA_2sCM&region=GB"></script>
    <script src="javascript/jquery.cookie.js"></script>
     <script src="javascript/bootstrap-datetimepicker.js"></script>
    <script src="javascript/bootstrap-datetimepicker.fr.js"></script>
    <script  src="javascript/jquery.flexslider-min.js"></script>

    <script src="javascript/parallax.js"></script>
    <script src="javascript/smoothscroll.js"></script>   

    <script src="javascript/main.js"></script>
</body>
</html>