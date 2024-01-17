<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CMTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cmtheme' ); ?></a>

	<?php
	$uri = "{$_SERVER['REQUEST_URI']}";
	$background ='bg-white';
	if ($uri == '/') {
		$background ='bg-trasparent navbar-home';
	}
	?>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-sm <?php echo $background; ?>">
			<div class="container-fluid">
				<?php the_custom_logo(); ?>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<?php /* Primary navigation */ 
					wp_nav_menu( array(
						'menu' => 'top-menu',
						'depth' => 2,
						'container' => false,
						'menu_class' => 'nav',
						//Process nav menu using our custom nav walker 
						'walker' => new wp_bootstrap_navwalker())
					);
					?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->