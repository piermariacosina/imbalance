<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/fonts.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
    <!--[if IE 7]>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <!--[if IE 6]>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" media="screen" />
    <![endif]-->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_enqueue_script('jquery'); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<?php
		if( is_home() || is_search() ) {
		wp_enqueue_script('jquery');
		wp_enqueue_script('grid', get_template_directory_uri() . '/js/grid.js', 'jquery', false);
		}
	?> 
    <script src="<?php bloginfo('template_url'); ?>/js/columnizer.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/columnize.js" type="text/javascript"></script>   
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/animatedcollapse.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/collapse.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.random.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slideto.min.js"></script>
</head>
<body <?php body_class(); ?>>

	<div id="outer">
    	<div id="top">
        	<div id="logo">
        		<?php         		
	        	ob_start();
				ob_implicit_flush(0);
				echo get_option('imbalance_custom_logo'); 
				$my_logo = ob_get_contents();
				ob_end_clean();
        		if (
		        $my_logo == ''
        		): ?>
        		<a href="<?php bloginfo("url"); ?>/">
				<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
        		<?php else: ?>
        		<a href="<?php bloginfo("url"); ?>/"><img src="<?php echo get_option('imbalance_custom_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>        		
        		<?php endif ?>
        	</div>
        </div>
        <div id="menu">
            <!--<div id="navicons">
                <ul>
                    <li><a id="subscribe" href="<?php bloginfo('rss2_url'); ?>" title="">Subscribe</a></li>
                    <li><a id="twitter" href="<?php echo get_option('imbalance_twturl'); ?>" title="">Twitter</a></li>
                    <li><a id="facebook" href="<?php echo get_option('imbalance_fbkurl'); ?>" title="">Facebook</a></li>
                </ul>
            </div>-->
            <div id="cats">
            	<ul>
                	<li><a href="#" rel="toggle[projects]" title="" <?php if ( is_front_page()) { ?> class="active"<?php } ?> >Projects</a></li>
                	<?php if ( function_exists( 'wp_nav_menu' ) ) {
                		wp_nav_menu( array( 'menu' => 'Main menu' , 'container' => '' , 'fallback_cb'=> 'custom_menu' , 'depth' => 1 ) ); }
                	else
                	    { custom_menu(); }
                	?>
                	<li><a href="#" rel="toggle[search]" title="">Search</a></li>
                	<li class="outside"><a href="/thedoersproject/theblog/" title="" >Go to Blog</a></li>
                </ul>
            </div>
        </div>
        <div id="projects">
        		  <?php
                  	wp_nav_menu( array( 'menu' => 'Project menu', 'container' => '' , 'menu_class' => 'mcol2' , 'fallback_cb'=> 'custom_menu' , 'depth' => 1 ) );
                  ?>
        </div>
        
        <div id="search">
			<?php get_search_form(); ?>
        </div>