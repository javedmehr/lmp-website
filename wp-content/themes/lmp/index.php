<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="section-default" id="press">
<div class="container">
    <div class="row">
        <div class="col-lg-12">

<?php if ( have_posts() ): ?>
<div class="text-center">
    <h1 class="heading">
        Press	
    </h1>
</div>
<ul class="post-list">
<?php while ( have_posts() ) : the_post(); ?>
    <li class="post-item">
     
                <div class="content">
                    <h3><?php the_title(); ?></h3>
                    <div class="date"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> </time> </div>
                    <div class="desc">
                        <?php the_content(); ?>
                    </div>
                    
                    </div>
	</li>
<?php endwhile; ?>
</ul>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
        </div>
        </div>
        </div>
</section>
    


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>