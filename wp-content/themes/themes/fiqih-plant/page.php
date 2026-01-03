<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main id="primary" class="site-main container" style="margin-top: 3rem; margin-bottom: 3rem;">

	<?php
	while ( have_posts() ) :
		the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="margin-bottom: 2rem; text-align: center;">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fiqih-plant' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>
        </article>
        <?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
