<?php
/**
 * Search results page
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package    WordPress
 * @subpackage    Starkers
 * @since        Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>
    <div class="search-results">
        <div class="container">
            <div class="row">
                <?php if (have_posts()): ?>
                    <h3 class="search-title">Search Results for '<?php echo get_search_query(); ?>'</h3>

                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post">
                            <h2><a href="<?php esc_url(the_permalink()); ?>" title="Permalink to <?php the_title(); ?>"
                                   rel="bookmark"><?php the_title(); ?></a></h2>

                        </article>
                    <?php endwhile; ?>


                <?php else: ?>
                    <h2>No results found for '<?php echo get_search_query(); ?>'</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php Starkers_Utilities::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>