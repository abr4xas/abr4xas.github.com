<?php

    ini_set('register_globals', 'Off');
    ini_set('allow_call_time_pass_reference','Off');
    ini_set('allow_url_fopen','On');
    ini_set('allow_url_include','Off');
    ini_set('default_mimetype','text/html');
    ini_set('default_socket_timeout','45');
    ini_set('display_errors', "off");
    ini_set('magic_quotes_gpc','Off');
    ini_set('max_execution_time','30');
    ini_set('max_file_uploads','20');
    ini_set('max_input_time','1000');
    ini_set('mysqli.connect_timeout','30');
    ini_set('post_max_size','1M'); 
    ini_set('safe_mode','Off');
    ini_set('session.gc_maxlifetime','1200');
    ini_set('session.cache_expire','180');
    ini_set('short_open_tag','Off');
    ini_set('upload_max_filesize','1M');
    #nuevo valores ha probar
    ini_set('file_uploads','off');
    ini_set('output_buffering',4096);
    ini_set('memory_limit','256M');
    ini_set('mysql.cache_size','2048');
    ini_set('display_errors', "off");
    error_reporting(0);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="adblock"   content="disable" />
<meta name="author" content="Programacion Angel Cruz - @abr4xas" />
<meta name="copyright" content="CopyLeft (c) 2012 by El Cubo y Awven" />
<meta name="rating"    content="General" />
<meta name="resource-type" content="document" />
<meta name="revisit-after" content="2 days" />
<meta name="revisit" content="1" />
<meta name="robots" content="index,follow" />
<meta http-equiv="pragma" content="cache" />
<meta http-equiv="cache-control" content ="cache" />
<meta http-equiv="vary" content="content-language" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="no-email-collection" content="http://www.unspam.com/noemailcollection/" />
<meta property="og:title" content="<?php echo isset($title) ? _h($title) : config('blog.title') ?>" />

<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>

<!-- CSS SECTION -->
<link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo site_url() ?>assets/css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo site_url() ?>assets/css/flexslider_1.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo site_url() ?>assets/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo site_url() ?>assets/css/media.css" type="text/css" />
<link id="changestylesheet" rel="stylesheet" href="<?php echo site_url() ?>assets/css/ColourThemes/orange.css" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />
<!-- CSS SECTION -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" /> 

<!-- JAVASCRIPT SECTION -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo site_url() ?>assets/js/jquery-1.7.1.min.js"><\/script>')</script>
<script src="<?php echo site_url() ?>assets/js/modernizr.js"></script>
<script src="<?php echo site_url() ?>assets/js/jquery.jcarousel.min.js"></script>
<script src="<?php echo site_url() ?>assets/js/flickr.js"></script>
<script src="<?php echo site_url() ?>assets/js/twitter.js"></script>
<script src="<?php echo site_url() ?>assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?php echo site_url() ?>assets/js/jquery.easing.js"></script>
<script src="<?php echo site_url() ?>assets/js/jquery.mousewheel.js"></script> 
<script src="<?php echo site_url() ?>assets/js/custom.js"></script>
<!-- JAVASCRIPT SECTION -->
</head>

<body>
    <script src="http://cf.ads.kontextua.com/container/tags/40631.js"></script>
<!-- SOCIAL MEDIA BUTTONS SECTION -->
<section class="socialmedia_buttons">
	<div class="largecontainer">
        <ul class="sbut">
            <li><a href="http://twitter.com/<?php echo config('usr.tw')?>" title="twitter" target="_blank"><img src="<?php echo site_url() ?>assets/images/twitter.png" alt="Join us on twitter"></a></li>
            <li><a href="http://facebook.com/<?php echo config('usr.fb')?>" title="facebook" target="_blank"><img src="<?php echo site_url() ?>assets/images/facebook.png" alt="Join us on facebook"></a></li>
            <li><a href="<?php echo site_url()?>rss" title="<?php echo config('blog.title')?>  Feed" target="_blank"><img src="<?php echo site_url() ?>assets/images/rss.png" alt="Join us on rss"></a></li>            
        </ul>
	</div>
    <div class="shadoweffect"></div>
</section>
<div class="clear"></div>
<!-- SOCIAL MEDIA BUTTONS SECTION -->

<!-- HEADER AND MAIN SECTION -->
<div class="mainbg background8">
	
    <!-- CONTAINER -->
    <div class="maincontainer">
        
        <!-- MAIN SECTION -->
        <section class="main_section">
        
        	<!-- HEADER SECTION -->
            <header class="header">
                
                <div class="logonav">
                    <!-- LOGO SECTION -->
                    <section class="logo">
                        <a href="<?php echo site_url() ?>" title="<?php echo config('blog.title') ?>">
                            <img src="<?php echo site_url() ?>assets/images/logo.png" />
                        </a></section>
                    <!-- LOGO SECTION -->
                    
                    <!-- NAVIGATION SECTION -->
                    <nav class="nav">
                        <ul>
                            <li><a href="<?php echo site_url() ?>" title="<?php echo config('blog.title') ?>">Home</a></li>
                        </ul>
                    
                    </nav>
                    <!-- NAVIGATION SECTION -->
                    <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </header>
            <div class="clear"></div>
            <!-- HEADER SECTION -->
          	<!-- PAGE TITLE SECTION -->
            <section class="mainpage_title">
            </section>
			<!-- PAGE TITLE SECTION -->       
        	<div class="container">
            <!-- SIDEBAR SECTION -->
            <div class="sidebararea floatright"> 
                <!-- WIDGET -->
                <div class="widget">
                    <h3>Siguenos</h3>
                    <ul>
            <li><a href="http://twitter.com/<?php echo config('usr.tw')?>" title="twitter" target="_blank">Twitter</a></li>
            <li><a href="http://facebook.com/<?php echo config('usr.fb')?>" title="facebook" target="_blank">Facebook</a></li>
            <li><a href="https://github.com/awven" title="Github" target="_blank">Github</a></li>
            <li><a href="<?php echo site_url()?>rss" title="<?php echo config('blog.title')?>  Feed" target="_blank">RSS</a></li>            
                    </ul>
                </div>
                <!-- WIDGET -->                           
                <!-- WIDGET -->
                <div class="widget">
                	<h3>Blog Roll</h3>
                	<ul>
                    	<li><a href="http://xombra.com" title="Visita a Xombra.com" target="_blank">Xombra.com</a></li>
                        <li><a href="http://abr4xas.org" title="Visita a abr4xas.org" target="_blank">abr4xas.org</a></li>
                    </ul>
                </div>
                <!-- WIDGET -->
                <!-- WIDGET -->
                <div class="widget">
                	<h3>Sponsors</h3>
                        <?php
                        //PHP Random HTML Script
                        $number = '3'; 
                        $rnd = rand(1, $number); // number of banners to shuffle
                         
                        $rndbnn[1] = '<a href="//affiliates.mozilla.org/link/banner/42597" target="_blank" title="Firefox OS">
                                      <img src="//affiliates.mozilla.org/media/uploads/banners/75e624f195107db70dc78c7c496cd76fde65af73.png" 
                                      alt="Firefox OS" style="display:block; margin:0 auto 0 auto;"></a>';

                        $rndbnn[2] = '<a href="http://vaslibre.org.ve" target="_blank" title="VaSLibre">
                                      <img style="display:block; margin:0 auto 0 auto;" src="http://img834.imageshack.us/img834/2085/vaslibrelog.png" 
                                      alt="vaslibre" width="142" height="86"></a>';

                        $rndbnn[3] = '<a href="http://abr4xas.org" target="_blank" title="El Blog de abr4xas">
                                      <img style="display:block; margin:0 auto 0 auto;" src="http://oi43.tinypic.com/venayq.jpg" 
                                      alt="El Blog de abr4xas"></a>';

                        ?>
                	<ul>
                    	<?php 
                                echo '<li>'."$rndbnn[$rnd]".'</li>';
                        ?> 
                    </ul>
                </div>
                <!-- WIDGET -->
                <!-- WIDGET -->
                <div class="widget">
                    <h3>Subscribe</h3>
                    <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" 
                        onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=Awvene', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                        <fieldset>
                            <p>Enter your email address:</p>
                            <input type="text" class="commentinput" name="email"/>
                            <input type="hidden" value="Awvene" name="uri"/>
                            <input type="hidden" name="loc" value="en_US"/>
                            <input type="submit" class="widgetinputbutton" value="Subscribe" />
                            <p>Delivered by <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></p>
                        </fieldset>
                    </form>
                </div>
                <!-- WIDGET -->                
                <!-- WIDGET -->
                <div class="widget">
                	<h3>Licencia</h3>
                	<p><?php echo config('blog.authorbio') ?></p>
                </div>
                <!-- WIDGET -->
            </div>
            <!-- SIDEBAR SECTION -->
            <!-- MAIN CONTENT SECTION -->
            <div class="contentarea floatleft">

                <?php echo content()?>

            </div>
            <!-- MAIN CONTENT SECTION -->
            </div> 
                   
        </section>
        <div class="clear"></div>
        <!-- MAIN SECTION -->
        
    </div>
    <!-- CONTAINER -->

</div>
<!-- HEADER AND MAIN SECTION -->

<!-- FOOTER WIDGET SECTION -->
<section class="footerwidget_area">

	<div class="footer_widget_container">

	</div>

</section>
<!-- FOOTER WIDGET SECTION -->
<div class="clear"></div>
<!-- FOOTER SECTION -->
<footer class="footer">

	&copy; 2012 - UBL Designs, All rights reserved!&nbsp; -  
    <!-- DO NOT REMOVE, IF FOUND TO BE REMOVED DMCA TAKE DOWN NOTICE WILL BE PROVIDED TO SHUT YOUR HOSTING DOWN, TO YOUR HOSTING PROVIDER -->
    <a href="http://www.derby-web-design-agency.co.uk" title="Template by UBL Designs" target="_blank">Template By UBL Designs</a>
    <!-- DO NOT REMOVE, IF FOUND TO BE REMOVED DMCA TAKE DOWN NOTICE WILL BE PROVIDED TO SHUT YOUR HOSTING DOWN, TO YOUR HOSTING PROVIDER -->

</footer>
<!-- FOOTER SECTION -->

<!-- BACK TO TOP BUTTON -->
<div class="backtotop"><a title="Back to the top">Back To Top</a></div>
<!-- BACK TO TOP BUTTON -->

</body>
</html>