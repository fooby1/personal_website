<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
	<?php wp_footer(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Joel Stephenson Blog</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="http://joelstephenson.com/blog/wp-content/themes/IndiGo/css/blog.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://joelstephenson.com/blog/wp-content/themes/IndiGo/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://joelstephenson.com/blog/wp-content/themes/IndiGo/css/socialize-bookmarks.css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:300,100,400,700' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jplayer.css" media="screen" />

<script type="text/javascript" src="http://joelstephenson.com/blog/wp-content/themes/IndiGo/javascript/header.js"></script>

</head>

<body id="top">

<!-- START PRELOADER -->

<div class="ole">
	<section id="jSplash">
		<div id="circle"></div>
	</section>
</div>

<!-- END PRELOADER -->

<!-- START HEADER -->

<div id="header-wrapper">

	<div class="header clear">

		<div class="holder">

			<div id="logo">
				<a href="http://joelstephenson.com/blog"><img src="http://joelstephenson.com/images/logo.png" alt="" /></a>
			</div><!--END LOGO-->

			<div id="primary-menu">
				<?php wp_nav_menu(); ?>


			</div><!--END PRIMARY MENU-->

		</div><!--END HOLDER-->

	</div><!--END HEADER-->

</div><!--END HEADER-WRAPPER-->

<!-- END HEADER -->

<!-- START MAIN CONTENT -->

			<div class="holder">


<?php get_sidebar(); ?>
