<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Learning_centre
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'learning-centre' ); ?></a> -->

		<div id="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-5">
						<spa>General Inquiries:  62811816 </span>
					</div>
					<div class="col text-end right-col">
						<span>Get Started Today</span>
						<a class="btn btn-primary">Register</a>
					</div>
				</div>
			</div>
		</div>
	
		<header id="masthead" class="site-header">
			<nav class="navbar navbar-expand-lg navbar-light py-0">
				<div class="container">
					<?php the_custom_logo(); ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container' => false,
								'menu_class' => 'fw-bold text-uppercase',
								'fallback_cb' => '__return_false',
								'items_wrap' => '<ul id="%1$s" class="bg-light navbar-nav mb-md-0 mb-2 mt-md-0 mt-2 fw-bold ms-3 %2$s">%3$s</ul>',
								'depth' => 2,
							)
						);
					?>
					</div>
				</div>
			</nav>
		</header>

		<?php if(!is_front_page() && !is_page('Contact Us')): ?>

			<?php $sub_title = is_page('Registration') ? 'Join Us at Baizonn!' : '' ?>

			<div id="sub-banner">
				<div>
					<div class="container">
						Home  <i class="bi bi-chevron-right"></i>
					</div>
				</div>
				<div>
					<div class="container">
						<h1 class="display-4"><?= get_the_title(); ?></h1>
					</div>
				</div>
				<div>
					<div class="container">
						<h4 class="display-4"><?= $sub_title; ?></h4>
					</div>
				</div>
			</div>
		<?php endif; ?>


