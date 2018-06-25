<?php 
/* 
Template Name: About
*/ 
?>

    <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div id="aboutus" class="page-about">
                <section class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/about-bg.jpg">
                    <div class="container">
                        <div class="row">
                            <h1 class="about-title">
                    About
                    <span>Al-wahab Garden</span>
                </h1>
                            <div class="text-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php endwhile; ?>



                <section id="ceo-message" class="container section-default">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1 class="title">ceo <span>message</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php $the_query = new WP_Query( 'page_id=34' ); ?>
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                <div class="col-md-6 col-md-offset-1 image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col-md-4">
                                    <?php the_content(); ?>
                                </div>
                    </div>
                    <?php endwhile;?>
                </section>


                <div id="team-behind">

                    <section class="container section-default">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    Team behind
                                </div>

                            </div>
                        </div>

                        <div class="teams">

                            <?php $args = array('post_type' => 'team');
$my_query = new WP_Query( $args );
if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                       
                                        <h1 class="team-title"><?php the_title() ?></h1>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="team-content">
                                        <?php the_content() ?>
                                        </div>
                                    </div>

                                </div>
                                <?php endwhile;} ?>
                        </div>

                    </section>
                </div>

                <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
