<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RealEstate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'realestate'); ?></a>

		<header id="masthead" class="site-header">

			<div class="top-nav bg-success">
				<div class="container">
					<div class="d-flex justify-content-between">
						<div>

							<?php
							$email = get_field('top_nav_email', 'option');

							if ($email) { ?>
								<?php $top_nav_email_icon = get_field('top_nav_email_icon', 'option'); ?>
								<?php if ($top_nav_email_icon) : ?>
									<img src="<?php echo esc_url($top_nav_email_icon['url']); ?>" alt="<?php echo esc_attr($top_nav_email_icon['alt']); ?>" />
								<?php endif; ?>
								<a href="mailto:<?php echo $email; ?>" class="top-nav-menu-item"><?php echo $email; ?></a>
							<?php }
							?>

							<?php
							$phone = get_field('top_nav_phone', 'option');

							if ($phone) { ?>

								<?php $top_nav_phone_icon = get_field('top_nav_phone_icon', 'option'); ?>
								<?php if ($top_nav_phone_icon) : ?>
									<img src="<?php echo esc_url($top_nav_phone_icon['url']); ?>" alt="<?php echo esc_attr($top_nav_phone_icon['alt']); ?>" />
								<?php endif; ?>
								<a href="tel:<?php echo $phone; ?>" class="top-nav-menu-item"><?php echo $phone; ?></a>
							<?php }
							?>


						</div>
						<div>
							<a href="" class="top-nav-menu-item">
							<?php $user_icon = get_field( 'user_icon', 'option' ); ?>
								<?php if ( $user_icon ) : ?>
									<img src="<?php echo esc_url( $user_icon['url'] ); ?>" alt="<?php echo esc_attr( $user_icon['alt'] ); ?>" />
								<?php endif; ?>
								<?php the_field( 'login_signup_text', 'option' ); ?>
								</a>

						</div>
					</div>
				</div>
			</div>
	

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'realestate'); ?></button>
				<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>
					
						<a class="navbar-brand" href="#"></a>

						<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="mt-2"><?php bloginfo('name'); ?></a></h1>
				
				<?php
				endif;
				?>
				
				
			</div><!-- .site-branding -->
						
						<?php
						wp_nav_menu(array(
							'theme_location'    => 'primary',
							'depth'             => 3,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav ms-auto',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
						?>
						<span class="menu-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
						</svg>
						</span>
						
					</div>

				</nav>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->