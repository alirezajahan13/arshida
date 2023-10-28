<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package drshafaee

 */



?>

<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('lightBorder mainRadius mediumMargined'); ?>>

	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>

	<header class="entry-header">

		<?php if ( is_home() && ! is_front_page() ){ ?>

			<h3 class="entry-title"><?php echo get_the_title() ?></h3>

		<?php } else{ ?>

			<h3 class="entry-title"><?php echo get_the_title() ?></h3>

		<?php } ?>

	</header><!-- .entry-header -->

	<div class="archiveCardExc lighterText"><?php the_excerpt(); ?></div>

	<div class="archivePostFooter highPadding">

		<span><svg width="18" height="18" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="2" stroke="#81a8af" fill="none"><circle cx="32" cy="32" r="25.3"/><path d="M32 11.88v20.89l11.22 8.61"/></svg><?php echo get_the_date() ?></span>

		<span><svg width="18" height="18" fill="#81a8af" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" xml:space="preserve"><path d="M47.022 11.422a3.888 3.888 0 0 0-1.814-2.44l-4.964-2.887a3.737 3.737 0 0 0-2.923-.35 3.76 3.76 0 0 0-2.265 1.886l-12.491 24.48-8.63 12.839a12.18 12.18 0 0 0-2.075 6.759l-.038 7.836-1.696 2.958a1 1 0 1 0 1.735.995l1.695-2.958 6.723-3.952a12.113 12.113 0 0 0 4.772-5.18l6.884-14.225 14.58-22.76a3.9 3.9 0 0 0 .507-3.001zm-2.19 1.923L30.22 36.155l-6.97 14.381a10.106 10.106 0 0 1-3.984 4.327L14.6 57.607a.976.976 0 0 0-.33-.325.976.976 0 0 0-.436-.12l.026-5.444c.01-2.023.61-3.978 1.736-5.652l8.662-12.89L36.837 8.54c.217-.424.6-.744 1.054-.878a1.729 1.729 0 0 1 1.349.162l4.963 2.886c.436.253.754.683.873 1.178.12.496.03 1.027-.244 1.456z"/><path d="M53.475 10.042a6.643 6.643 0 0 0-3.028-3.653L39.338.13a.999.999 0 1 0-.982 1.742l11.109 6.26a4.646 4.646 0 0 1 2.116 2.555c.967 2.844 1.033 9.122-9.34 19.168-4.297 3.649-4.418 7.357-3.763 9.825a1.001 1.001 0 0 0 1.933-.512c-.727-2.742.354-5.435 3.173-7.833 10.652-10.312 11.258-17.27 9.89-21.292z"/></svg><?php echo get_the_author() ?></span>

	</div>

</a><!-- #post-<?php the_ID(); ?> -->