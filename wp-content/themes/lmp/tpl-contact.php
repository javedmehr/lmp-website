<?php 
/* 
Template Name: Contact
*/ 
?>

    <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



        <div class="container">
            <div class="row">
               

        <div class="col-sm-12">

            <?php the_content(); ?>

        </div>
            </div>
</div>

        <?php endwhile; ?>
                <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>