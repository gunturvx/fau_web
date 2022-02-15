<header id="header" class="header clearfix">
        <div class="container">
            <div class="row">                 
                <div class="col-lg-4">
                    <div id="logo" class="logo float-left">
                        <a href="index.php" rel="home">
                            <img src="images/logo.png" alt="image">
                        </a>
                    </div><!-- /.logo -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="nav-wrap">                            
                        <nav id="mainnav" class="mainnav float-left">
                            <ul class="menu"> 
                                <li><a href="index.php">Home</a> 
                                </li>
                                <li><a href="resep_lengkap.php">Resep Lengkap</a>
                                </li> 
                                <li><a href="favorite.php">Favorite</a>
                                </li> 
                                <li><a href="resep_with_api.php">Resep Terupdate</a>
                                </li> 
                                <li><a href="about.php">About Us</a>
                                </li>                       
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->  
                                <div class="button-addlist float-right">
                                    <button type="button" ><?php if (isset($_SESSION['id'])): ?><?php if($_SESSION['admin']): ?>
                                    <a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>" ><?php echo $_SESSION['username']; ?></a><?php endif; ?>
                                    <a href="<?php echo BASE_URL . '/logout.php' ?>"  >Logout </a>
                                  <?php else: ?>
                                    <a href="<?php echo BASE_URL . '/login.php' ?>" > Sign In</a>
                                    <?php endif; ?>
                                    </button>
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-lg-8 -->                                    
            </div><!-- /.row -->
        </div>
    </header><!-- /.header -->