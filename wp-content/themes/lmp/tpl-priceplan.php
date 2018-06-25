<?php 
/* 
Template Name: Pricelist
*/ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id="pricelist" class="container">
   <div class="row">
   <div class="col-md-12">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>
    <?php endwhile; ?>
    </div></div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>