<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package stale-pixels
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');

/* we should be doing:

*/
?>
</div>
<script>
    jQuery(document).ready(function ($) {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
  <div class="container-fluid">
    <?php get_sidebar('footerfull'); ?>
  </div><!-- #container -->

    <nav class="navbar navbar-light bg-faded footer">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url( __( 'http://wordpress.org/', 'stale-pixels' ) ); ?>">
                    <?php echo __('WordPress inside', 'stale-pixels'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url( __( 'http://www.rimron.co.uk/code/stale-pixels', 'stale-pixels' ) ); ?>">
                    <?php echo $the_theme->get( 'Name' ); ?> outside</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url( __( 'http://www.rimron.co.uk/about', 'stale-pixels' ) ); ?>">
                    <?php echo __( 'Colophon', 'stale-pixels' ); ?></a>
            </li>
        </ul>
        <form method="get" id="searchform" action="http://rimron.localhost.xalior.com/" role="search" class="form-inline float-xs-right">
            <input class="form-control" id="s" name="s" type="text" placeholder="Search">
            <button class="btn btn-outline-success" id="searchsubmit" name="submit" type="submit" value="Search">Search</button>
        </form>
    </nav>
</div><!-- #page - from the header[*].php -->

<?php wp_footer(); ?>
</body>

</html>
