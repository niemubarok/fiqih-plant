<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main id="primary" class="site-main container" style="margin-top: 3rem; margin-bottom: 3rem;">

	<?php
	while ( have_posts() ) :
		the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="margin-bottom: 2rem;">
                <div class="entry-meta" style="color: var(--fp-brown); margin-bottom: 0.5rem; font-size: 0.9rem;">
                    <?php echo get_the_date(); ?> | <?php the_category( ', ' ); ?>
                </div>
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail" style="margin-bottom: 2rem;">
                    <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: auto; border-radius: 12px;' ) ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content" style="max-width: 800px; margin: 0 auto;">
                <?php
                the_content();
                ?>
            </div>
        </article>
        <?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
