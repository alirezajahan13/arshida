<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arshida
 */

get_header();
?>

	<main id="primary" class="site-main mainView">

		<?php if ( have_posts() ) : ?>
			<div class="generalHeading highMargined centeredText bottomBorder">
				<h1>مجله آرشیدا بست</h1>
			</div>
			<!--<header class="page-header highMargined bottomBorder archiveCatTitle">
				 <?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				//the_archive_description( '<span class="archive-description">', '</span>' );
				?>
			</header>--><!-- .page-header -->
			<div class="categorySecParent highMargined">
				<?php
				$categories = get_terms( array(
					'taxonomy' => 'category',
					'hide_empty' => true,
					'exclude'=>array('1')
				) );
				foreach($categories as $category) {
				echo '<a class="categoryItem" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				}
				?>
			</div>
			<div class="archiveParent">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
