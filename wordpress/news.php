<?php
/*
Template Name: Новости
*/

get_header();
?>
    <div class="main-page">
        <main id="primary" class="site-main main-section">
            <div class="ul ul--main">
                <div class="li li--main">
                    <a href="https://sleziasfalta.ru/"><span>Назад</span></a>
                    <h2>Новости</h2>
		            <?php $catquery = new WP_Query( 'cat=13&posts_per_page=999' ); ?>
                    <div class="ul ul--news">
                        <div class="container container--news">
				            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                                <div class="news--main">
                                    <div class="news--text">
	                                    <?php if (!has_post_thumbnail()): ?>
                                            <div class="ul ul--news--text">
                                                    <div class="li li--news--text">
                                                        <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                                                        <a href="<?php the_permalink() ?>"><?php the_content(); ?></a>
                                                    </div>
                                                    <div class="li li--news--text-date">
                                            <span>
                                                <?php the_date(); ?>
                                            </span>
                                                    </div>
                                            </div>
	                                    <?php endif ?>
	                                    <?php if (has_post_thumbnail()): ?>
                                            <div class="img">
			                                    <?php the_post_thumbnail (); ?>
                                            </div>
                                            <div class="ul ul--news--text">
                                                    <div class="li li--news--text">
                                                        <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                                                        <a href="<?php the_permalink() ?>"><?php the_content(); ?></a>
                                                    </div>
                                                    <div class="li li--news--text-date">
                                        <span>
                                            <?php the_date(); ?>
                                        </span>
                                                    </div>
                                                </div>
	                                    <?php endif ?>
                                    </div>
                                </div>
				            <?php endwhile; ?>
                        </div>
                    </div>
		            <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </main><!-- #main -->
    </div>
<?php
get_sidebar();
get_footer();
