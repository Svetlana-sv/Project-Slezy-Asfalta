<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Main_theme
 */

get_header();
?>
    <div class="main-page">
        <main id="primary" class="site-main main-section">
            <div class="ul ul--main">
                <div class="li li--main li--about">
	                <?php
	                while ( have_posts() ) :
		                the_post();

		                get_template_part( 'template-parts/content', get_post_type() );

	                endwhile; // End of the loop.
	                ?>
                </div>
            </div>
        </main><!-- #main -->
    </div>
<?php
get_sidebar();
get_footer();
