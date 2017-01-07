<?php
/**
 * Template Name: Homepage Special Sidebar
 *
 * @package stale-pixels
 */

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<!-- .php -->

<div class="wrapper" id="single-wrapper">
    <div class="<?php echo $container?>" id="content">
        <div class="row">
            <div class="col-md-8 content-area" id="primary">
                <main class="site-main" id="main" role="main">

                    <?php while (have_posts()) : the_post(); ?>
                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                            <header class="entry-header">
                                <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
                            </header><!-- .entry-header -->

                            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

                            <div class="entry-content">
                                <?php the_content(); ?>
                                <?php
                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
                                    'after' => '</div>',
                                ));
                                ?>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer">
                                <?php edit_post_link(__('Edit', 'understrap'), '<span class="edit-link">', '</span>'); ?>
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>
                </main><!-- #main -->
            </div><!-- #primary -->

            <div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
                <?php get_sidebar('homepage'); ?>
            </div>
        </div><!-- .row -->
    </div><!-- #content -->
</div><!-- Wrapper end -->
<!-- .php -->

<?php get_footer(); ?>
