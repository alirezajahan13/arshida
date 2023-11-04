<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arshida
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

<div class="mainSiteOverlay"></div>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<a href="#" class="logoSection">
				<svg width="80" height="70" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#81a8af" d="M14 3h1v9h-1V3zM3 12H1V3h2a4.111 4.111 0 0 1 3.999 4.517c.013.1.02.236.02.374A4.11 4.11 0 0 1 3.005 12zm-1-1h1c.31 0 3-.12 3-3.5S3.12 4 3 4H2v7zm11-2v-.5a3.116 3.116 0 0 0-.783-2.003 2.332 2.332 0 0 0-1.732-.666l-.054-.001c-.594 0-1.132.241-1.521.631A3.978 3.978 0 0 0 8 9.001v.009c0 .881.322 1.686.854 2.306.43.429 1.03.697 1.692.697l.089-.002a3.398 3.398 0 0 0 2.228-.922l-.712-.708a2.402 2.402 0 0 1-1.515.63l-.076.002c-.385 0-.734-.153-.99-.402A2.54 2.54 0 0 1 9 9.001h4zm-2.5-2.2.066-.002c.362 0 .691.141.935.372.209.224.361.505.427.818l-2.778.011a1.433 1.433 0 0 1 1.337-1.2z"/></svg>
			</a>
			<div class="menuSection">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'mainMenu'
						)
					);
				?>
			</div>
			<div class="headerIcon">
				<div class="showInMobileMenu">
					<svg id="openMenuMob" class="openMenuMob" width="25" height="25" stroke="#28416e" stroke-width="2.2" stroke-linecap="round" viewBox="2 10 20 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6h18M3 12h18M3 18h18"></path></svg>
					<a href="#" class="phoneIcon">
						
					</a>
				</div>
				<div class="showInDesktopMenu">
					<a href="#" class="searchIcon">
						<svg width="25" height="25" viewBox="0 -2 15 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m14.5 14.5-4-4m-4 2a6 6 0 1 1 0-12 6 6 0 0 1 0 12Z" stroke="#324b4f" stroke-width=".6"/></svg>
					</a>
					<a href="#" class="AccountIcon">
						<svg width="25" height="25" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#324b4f" stroke-linecap="round" stroke-linejoin="round" stroke-width=".6"><circle cx="8" cy="6" r="3.25"/><path d="M2.75 14.25c0-2.5 2-5 5.25-5s5.25 2.5 5.25 5"/></svg>
					</a>
					<a href="#" class="CartIcon">
						<svg width="25" height="25" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="2" stroke="#324b4f" fill="none"><path d="M4.62 9.96h10.72l6.37 27.89h27.98l6.48-21.5-39.5-.56m35.06 28.56H21.67a3.21 3.21 0 0 1-3.28-3.28c0-3.22 3.32-3.22 3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/></svg>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="stickyHeaderParent">
		<div class="mainHeaderBack">
			<div class="mainHeader mainView">
				<a href="#" class="logoSection">
					<svg width="80" height="70" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#81a8af" d="M14 3h1v9h-1V3zM3 12H1V3h2a4.111 4.111 0 0 1 3.999 4.517c.013.1.02.236.02.374A4.11 4.11 0 0 1 3.005 12zm-1-1h1c.31 0 3-.12 3-3.5S3.12 4 3 4H2v7zm11-2v-.5a3.116 3.116 0 0 0-.783-2.003 2.332 2.332 0 0 0-1.732-.666l-.054-.001c-.594 0-1.132.241-1.521.631A3.978 3.978 0 0 0 8 9.001v.009c0 .881.322 1.686.854 2.306.43.429 1.03.697 1.692.697l.089-.002a3.398 3.398 0 0 0 2.228-.922l-.712-.708a2.402 2.402 0 0 1-1.515.63l-.076.002c-.385 0-.734-.153-.99-.402A2.54 2.54 0 0 1 9 9.001h4zm-2.5-2.2.066-.002c.362 0 .691.141.935.372.209.224.361.505.427.818l-2.778.011a1.433 1.433 0 0 1 1.337-1.2z"/></svg>
				</a>
				<div class="menuSection">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container_class'=>'mainMenu'
							)
						);
					?>
				</div>
				<div class="headerIcon">
					<a href="#" class="searchIcon">
						<svg width="25" height="25" viewBox="0 -2 15 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m14.5 14.5-4-4m-4 2a6 6 0 1 1 0-12 6 6 0 0 1 0 12Z" stroke="#324b4f" stroke-width=".6"/></svg>
					</a>
					<a href="#" class="AccountIcon">
						<svg width="25" height="25" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#324b4f" stroke-linecap="round" stroke-linejoin="round" stroke-width=".6"><circle cx="8" cy="6" r="3.25"/><path d="M2.75 14.25c0-2.5 2-5 5.25-5s5.25 2.5 5.25 5"/></svg>
					</a>
					<a href="#" class="CartIcon">
						<svg width="25" height="25" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="2" stroke="#324b4f" fill="none"><path d="M4.62 9.96h10.72l6.37 27.89h27.98l6.48-21.5-39.5-.56m35.06 28.56H21.67a3.21 3.21 0 0 1-3.28-3.28c0-3.22 3.32-3.22 3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/></svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>