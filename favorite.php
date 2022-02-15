<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if(isset($_SESSION['id'])) {
    if (isset($_GET['t_id'])) {
        $posts = getPostsByTopicId($_GET['t_id']);
        $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
    } else if (isset($_POST['search-term'])) {
        $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
        $posts = searchPosts($_POST['search-term']);
    } else {
        $posts = getFavoritePosts();
    }
}

?>
<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Favorite - Fau Web</title>

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
                        <h1 class="title">Favorite</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li> - </li>                         
                            <li>Favorite</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 


    <!-- Blog posts -->
    <section class="main-content page-listing-grid">
        <div class="container">
            
            <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="col-lg-9">
                    <div class="listing-list">
                        <div class="flat-product clearfix">
                            <div class="featured-product">
                                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">    
                            </div>
                            <div class="rate-product">
                                    <div class="link-review clearfix">
                                    </div>
                                    <div class="info-product">
                                        <h6 class="title"><a href="rekomendasi.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h6>
                                        <p><?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
          
                </div><!-- /.col-lg-9 -->    
                <?php endforeach; ?>         
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section> 


    <!-- /.Footer -->   
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <div class="modal fade flat-popupform" id="popup_login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix">
                        <form class="form-login form-listing" action="#" method="post">
                            <h3 class="title-formlogin">Log in</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="email" required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password" required="required"><i class="fa fa-lock"></i></span>
                            <div class="flat-fogot clearfix">
                                <label class="float-left">
                                   <span class="input-check">
                                        <input type="checkbox" name="check" value="0" checked="">
                                        <span class="remember">Remember me</span> 
                                    </span>
                                </label>
                                <label class="float-right link-register">
                                    <a href="#">Lost your password?</a>
                                </label>
                            </div>
                            <span class="wrap-button">
                                <button type="button" id="login-button" class=" login-btn effect-button" title="log in">LOG IN</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
    </div> 
    <div class="modal fade flat-popupform" id="popup_register">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix">
                        <form class="form-login form-listing" action="#" method="post">
                            <h3 class="title-formlogin">Sign Up</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="name" required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email" required="required"><i class="fa fa-envelope-o"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*" name="password" required="required"><i class="fa fa-lock"></i></span>
                             <span class="input-login icon-form"><input type="text" placeholder="Repeat Password*" name="password" required="required"><i class="fa fa-lock"></i></span>
                            <div class="wrap-button signup">
                                <button type="button" id="logup-button" class=" login-btn effect-button" title="log in">LOG UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div> 
    <!-- Go Top -->
    <a class="go-top effect-button">
        <i class="fa fa-angle-up"></i>
    </a>       

    </div>
    
    <!-- Javascript -->
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/tether.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script> 
    <script src="javascript/jquery.easing.js"></script>    
    <script src="javascript/jquery-waypoints.js"></script> 
    <script src="javascript/bootstrap-slider.min.js"></script>
    <script src="javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUIc2-TTbn2IGJ4W0_0ePkv3xBvA_2sCM&region=GB"></script>
    <script src="javascript/jquery-countTo.js"></script>  
    <script src="javascript/jquery.cookie.js"></script>
    <script src="javascript/parallax.js"></script>
    <script src="javascript/smoothscroll.js"></script>   

    <script src="javascript/main.js"></script>
</body>
</html>