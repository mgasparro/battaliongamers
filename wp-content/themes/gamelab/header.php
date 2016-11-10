<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="shortcut icon" href="<?php echo smt_getOption( 'general', 'favicon'); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script>
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
			var gglapikey= '<?php echo smt_getOption( 'integration', 'gglapikey' ); ?>';
		</script>
		<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>>
		<div id="page">
		
			<header class="site-header">
				
				<div class="topmenu-search-container">
					
					<div class="boxed-container">
						
						<!-- extra Menu -->
						<nav id='extra-menu' class="site-navigation<?php if( smt_getOption( 	'menu', 'mobile' )!= 'extra-menu' ) echo ' mobile-menu'; ?>" role="navigation">
						<?php wp_nav_menu(array( 
							'depth'=>0,
							'theme_location' => 'extra-menu',
							'menu_class'    => 'nav-menu',
							'fallback_cb' => 'smt_default_menu'
						));	?>
						</nav>	
						<!-- / extra Menu -->
					
						
						<!-- Search -->
						<div class="headersearch" title="">
						<?php $search_text = empty($_GET['s']) ? 'Search...' : get_search_query(); ?> 
						<div class="searchform" title="">
							<form method="get" ifaviconffd="searchform" action="<?php echo home_url( '/' ); ?>"> 
								<input type="text" value="<?php echo $search_text; ?>" class='searchtxt' 
									name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"  
									onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" 
								/>
								<input type="submit" class="searchbtn" id="searchsubmit" value="">
								<div class="dec_search"></div>
								<div style='clear:both'></div>
							</form>
						</div><!-- #search -->
						<div class="search-trigger"></div>
						</div>
						<!-- / Search -->
					
					</div>
					<!-- / Boxed-container -->
				
				</div>
				
				
				<div class="boxed-container logo-menu-wrap">
				
					<!-- Logo -->
					<?php get_template_part( 'extras/logo' ); ?>
					<!-- / Logo -->
					
					
					<!-- Mobile Menu Trigger -->
						<div id="mobile-menu-trigger">
						<a href="#" class="icon">&#xf0c9;</a>
						</div>
					<!-- /Mobile Menu Trigger -->
					
					
					<!-- Main Menu -->
					<nav id='main-menu' class="site-navigation<?php if( smt_getOption( 'menu', 'mobile' )!= 'main-menu' ) echo ' mobile-menu'; ?>" role="navigation">
						<?php wp_nav_menu(array(
							'depth'=>0,
							'theme_location'=>'main-menu',
							'menu_class'=>'nav-menu',
							'fallback_cb' => 'smt_default_menu'
						)); ?>
					</nav>
					<!-- / Main Menu -->
					
					<div class="clear"></div>
			
				
				</div>
				<!-- / boxed-container bottomline -->
					
				
				<!-- Slider -->
				<?php get_template_part( 'extras/slider' ); ?>
				<!-- / Slider -->
				<div class="clear"></div>
				
					
				<div class="boxed-container">
					<div class="clear"></div>
				</div>
				
			</header>
			
			
			<div id="wrapper" class="site-content" role="main">
				<div class="boxed-container">