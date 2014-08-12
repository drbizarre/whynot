<!doctype html>
<html class="no-js" lang="en">
	<head>
    <?php
    include("layouts/head.php"); 
    ?>
  </head>
<body>
    <!-- start topbar -->
    <?php
    include("layouts/top.php"); 
    ?>
    <!-- end topbar -->

    <!-- start header -->
   <?php
   include("layouts/header.php"); 
   ?>
    <!-- end header -->
	<section class="post-wrapper-top">
    	<div class="container">
            <div class="post-wrapper-top-shadow">
                <span class="s1"></span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Inicio</a></li>
                    <li>404 - Not Found</li>
                </ul>
                <h2>404 - Not Found</h2>
            </div>

        </div>
	</section><!-- end post-wrapper-top -->
    
    <section class="section1">
    	<div class="container clearfix">
			<div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                <div class="notfound">
                    <h2 class="big-title">404 - Not Found</h2>
                    <h4 class="small-title">The page you are looking for no longer exists.<br>
        Perhaps you can return back to the site's homepage and see if you can find what you are looking for.</h4>
                    <a class="button" href="index.php">BACK TO HOME</a>
                </div><!-- end message -->
  			</div><!-- end content -->
		</div><!-- end container -->
	</section><!-- end section -->
   
    <!-- start footer -->
    <?php include("layouts/footer.php");  ?>
    <!-- end footer -->
    <div class="dmtop">Scroll to Top</div>

    <!-- Main Scripts-->
    <?php
    include("layouts/scripts.php"); 
    ?>
	</body>
</html>