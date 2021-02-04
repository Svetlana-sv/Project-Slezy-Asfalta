<?php
/*
Template Name: Контакты
*/

get_header();
?>
    <div class="main-page">
        <main id="primary" class="site-main main-section">
            <div class="ul ul--main">
                <div class="li li--main li--about">
                    <h2>Контакты</h2>
                    <?php
                    // Вставка любой информации после второго абзаца
                    $paragraphAfter = 0; // После какого абзаца нужно вставить
                    $content = apply_filters( 'the_content', get_the_content() );
                    $content = explode( "</p>", $content );
                    for ( $i = 0; $i < count( $content ); $i++ ) {
                        if ( $i == $paragraphAfter ) {
                            ?>

                    <?php get_template_part( 'content/ploshadka.net' ); ?>

                    <?php
                    }
                    echo $content[ $i ] . "</p>";
                    }
                    ?>
                </div>
            </div>
        </main><!-- #main -->
    </div>
<?php
get_sidebar();
get_footer();
