<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<section  class="padding-y event-detail">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 ">
                <span class="description"><?php the_field('short_description'); ?></span>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <span class="start-date">Start Date: <?php the_field('start_date')?></span>
                <span class="end-date"> End Date: <?php the_field('end_date')?></span>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <span class="detail">
                    <?php the_field('detail'); ?>
                </span>
            </div>

            <div class="col-lg-8 col-lg-offset-2">
                <a href="javascript:void(0)" class="button large margin-top register">Register Now</a>

                <div class="form-holder" >
                    form
                </div>
            </div>



        </div>

    </div>
</section>


<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>