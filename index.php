<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts(true);
}

?>
<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Fau Web</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
	
	<!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="84ec2cb0-b0c7-4071-85f3-9b04071a325f";
    (function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";
    s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</head>                                 
<body class="header_sticky">   
    <!-- Preloader -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading</h2>
        </div>
    </section> 
    <!-- Header Dipanggil dari folder app/includes/header.php ( agar header sama dengan page yg lain) -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>           
    

    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
                <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                    <ul><!-- SLIDE  -->
                
                         <!-- SLIDE 1 -->
                         <li data-index="rs-3050" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">                        

                        <!-- MAIN IMAGE -->
                        <img src="images/slides/1.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption title-slide" 
                            id="slide-3050-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-128','-128','-128','-50']" 
                            data-fontsize="['65','65','45','30']"
                            data-lineheight="['65','65','45','35']"
                            data-fontweight="['600','600','600','600']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"

                            data-type="text" 
                            data-responsive_offset="on"                             

                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[10,10,10,10]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 16; white-space: nowrap;">Cari Resep Makanan Terlengkap disini
                        </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption sub-title" 
                            id="slide-3050-layer-4" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-32','-32','-32','20']"
                            data-fontsize="['20',20','20','14']" 
                            data-lineheight="['35','35','35','20']"
                            data-fontweight="['300','300','300','300']"
                            data-width="['1200','660','660','350']"
                            data-height="none"
                            data-whitespace="['nowrap',normal','normal','normal']" 

                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 17; white-space: nowrap;">Temukan bahan-bahan, alat-alat dan cara pembuatan berbagai jenis roti <span>hanya dengan sekali klik </span> 
                        </div>
                        </li>

                        <!-- SLIDE 2 -->
                       <li data-index="rs-3051" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">                        

                            <!-- MAIN IMAGE -->
                            <img src="images/slides/2.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>    
                              <!-- SLIDE 3 -->
                       <li data-index="rs-3051" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">                        

                        <!-- MAIN IMAGE -->
                        <img src="images/slides/3.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        </li>        
                                      
                    </ul>
                </div>
    </div><!-- END REVOLUTION SLIDER -->      

    <section class="flat-row section-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title">Rekomendasi</h1>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php foreach ($posts as $post): ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="flat-product">
                                    <div class="featured-product">
                                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">    
                                        <div class="rate-product">
                                            <div class="info-product">
                                                <h6 class="title"><a href="rekomendasi.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h6>
                                                <p><?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
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
        </div><!-- /.container -->   
    </section> 
    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    </div>
    
     <!-- Javascript -->
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/tether.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script> 
    <script src="javascript/jquery.easing.js"></script>    
    <script src="javascript/jquery-waypoints.js"></script> 
    <script src="javascript/jquery-countTo.js"></script>  
    <script src="javascript/owl.carousel.js"></script>
    <script src="javascript/jquery.cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="javascript/parallax.js"></script>
    <script src="javascript/bootstrap-slider.min.js"></script>
    <script src="javascript/smoothscroll.js"></script>   

    <script src="javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>