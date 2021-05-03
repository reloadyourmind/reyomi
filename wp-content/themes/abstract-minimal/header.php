<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row s-header__content">

            <div class="s-header__logo">
                <a class="logo" href="/">
                   <span style="font-family: 'Libre Baskerville', serif; background: #151515; color: #fff; font-weight: 800; font-size: 40px; padding: 15px;"> <?php bloginfo( 'name' ); ?></span>
                </a>
            </div>

            <nav class="s-header__nav-wrap">

                <h2 class="s-header__nav-heading h6">Site Navigation</h2>

                <?php wp_nav_menu( array( 
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'items_wrap' => '<ul class="s-header__nav"></li>%3$s</ul>'  
                ) ); ?>
                <ul class="s-header__nav">
                    <li class="current"><a href="/" title="">Home</a></li>
                    <li class="has-children">
                        <a href="#0" title="">Categories</a>
                        <ul class="sub-menu">
                            <li><a href="category.html">Design</a></li>
                            <li><a href="category.html">Lifestyle</a></li>
                            <li><a href="category.html">Photography</a></li>
                            <li><a href="category.html">Vacation</a></li>
                            <li><a href="category.html">Work</a></li>
                            <li><a href="category.html">Health</a></li>
                            <li><a href="category.html">Family</a></li>
                            <li><a href="category.html">Relationship</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#0" title="">Blog</a>
                        <ul class="sub-menu">
                        <li><a href="single-video.html">Video Post</a></li>
                        <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-gallery.html">Gallery Post</a></li>
                        <li><a href="single-standard.html">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href="styles.html" title="">Styles</a></li>
                    <li><a href="about.html" title="">About</a></li>
                    <li><a href="contact.html" title="">Contact</a></li>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="s-header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->
                   
            <a class="s-header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
            
            <div class="s-header__search">
                    
                <form role="search" method="get" class="s-header__search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="s-header__search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="s-header__search-submit" value="Search">
                </form>

                <a href="#0" title="Close Search" class="s-header__overlay-close">Close</a>

            </div> <!-- end search wrap -->	

            <a class="s-header__search-trigger" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 004.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0018 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
            </a>

        </div> <!-- end s-header__content -->

    </header> <!-- end header -->