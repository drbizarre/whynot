    <header class="header">
    	<div class="container">
        	<div class="site-header clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 title-area pull-left">
                    <div class="site-title" id="title">
                        <a href="<?php echo action('SiteController@showIndex'); ?>" title="">
                            <img src="images/logo-wn.png" alt="Agencia Tecnólogia">	
                        </a>
                    </div>
                </div><!-- title area -->
                <div class="col-lg-9 col-md-12 col-sm-12">
                   <div id="nav">
                        <div class="container clearfix">
                        <ul id="jetmenu" class="jetmenu blue">
                            <li <?php echo (isset($option) && $option=='whynot')?'class="active"':''; ?>><a href="<?php echo route('conoce-whynot'); ?>">Why Not?</a></li>
                            <li <?php echo (isset($option) && $option=='desarrollo')?'class="active"':''; ?>><a href="<?php echo route('desarrollo-web'); ?>">Desarrollo Web</a>
                            <li <?php echo (isset($option) && $option=='design')?'class="active"':''; ?>><a href="<?php echo route('disenio-web'); ?>">Diseño Web</a>
                            <li <?php echo (isset($option) && $option=='seo')?'class="active"':''; ?>><a href="<?php echo route('seo'); ?>">SEO</a>
                            <li <?php echo (isset($option) && $option=='colaboraciones')?'class="active"':''; ?>><a href="<?php echo route('colaboraciones'); ?>">Colaboraciones</a>
                            <li <?php echo (isset($option) && $option=='contactanos')?'class="active"':''; ?>><a href="<?php echo route('contactanos'); ?>">Contáctanos</a>
                            </li>
                        </ul>
                        </div>
                    </div><!-- nav -->   
                </div><!-- title area -->
            </div><!-- site header -->
    	</div><!-- end container -->
    </header>