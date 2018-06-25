<?php
/* 
Template Name: Home Page 
*/
?>

<?php Starkers_Utilities::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>


    <?php

    // vars

    // about content
    $about = get_field('about_content');
    $about_text = $about['about_text'];
    $about_image = $about['about_image'];

    // consultancy content
    $consultancy = get_field('consultancy');
    $consultancy_text = $consultancy['consultancy_text'];
    $consultancy_image = $consultancy['consultancy_image'];

    // Collaboration content
    $collaboration = get_field('Collaboration');
    $collaboration_text = $collaboration['collaboration_text'];
    $collaboration_image = $collaboration['collaboration_image'];

    // Partner

    $partner_subheading = get_field("partner_subheading");

    // Partner Image Loop

    $total = 0;
    $images = [];

    if (have_rows('partners')): ?>
        <?php while (have_rows('partners')): the_row();
            // vars
            $image = get_sub_field('partner_logo');
            $images[$total] = $image;
            $total++;
            ?>
        <?php endwhile; ?>
    <?php endif; ?>


    <section id="about">
        <div class="container">
             <div class="row">
                <div class="col-sm-12">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="content-holder">
                                <?php if ($about): ?>
                                    <?php echo $about_text; ?>

                            </div>
                        </div>
                        <div class="display-table-cell">
                            <div class="image-holder">
                                <img src="<?php echo $about_image; ?>"
                                     alt=""/>
                            <?php endif; ?>
                            <?php endwhile; ?>
                            </div>
                        </div>
                     </div>
                </div>

            </div>
        </div>
    </section>

    <!--  Events  -->

    <section id="events">
        <div class="container">
            <div class="row text-center">
                <h2>Events</h2>
            </div>
            <div class="row">

                <?php $args = array('post_type' => 'event');
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <?php

                        // vars
                        $event_title = get_field('title');
                        $event_start_date = get_field('start_date');
                        $event_end_date = get_field('end_date');
                        $event_short_description = get_field('short_description');
                        //$event_detail = get_field('detail');

                        ?>
                        <div class="col-sm-4">
                            <div class="eventBox">
                                <div class="image-holder">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="content-holder">
                                    <div class="title"><?php echo $event_title ?></div>
                                    <div class="date"><?php echo $event_start_date ?>
                                        - <?php echo $event_end_date ?></div>
                                    <div class="content"><?php echo $event_short_description ?></div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                } ?>

            </div>
        </div>
    </section>

    <!--  Consultancy  -->

    <section id="consultancy">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3>Consultancy</h3>
                            <p>
                                <?php echo $consultancy_text ?>
                            </p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                        <div class="display-table-cell">
                            <img class="img-responsive"
                                 src="<?php echo $consultancy_image ?>"
                                 alt="Consultancy">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row margin-top">

                <div class="col-sm-12">

                    <div class="display-table">
                        <div class="display-table-cell"><img class="img-responsive"
                                                             src="<?php echo $collaboration_image ?>"
                                                             alt="Collaburation"></div>
                        <div class="display-table-cell padding-left">
                            <h3>Collaboration</h3>
                            <p><?php echo $collaboration_text ?></p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <!--  Partner  -->

    <section id="partner" class="padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Our Partners</h2>
                    <p><?php echo $partner_subheading ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="logos-holder">
                        <?php
                        $colors = array("red", "green", "blue", "yellow");

                        foreach ($images as $value) { ?>
                            <div class="partner-logo"><img
                                        src="<?php echo $value ?>" alt="<?php echo $value ?>">
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--  Blog  -->

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="image-holder">
                                <img src="<?php bloginfo('template_directory'); ?>/img/blog-image.jpg"
                                     alt="Collaburation">
                            </div>
                        </div>
                        <div class="display-table-cell">
                            <div class="content-holder margin-left">
                                <h2>From the Garden Dairy</h2>
                                <p>From Our Blog</p>
                                <div class="posts-holder">

                                    <?php $the_query = new WP_Query('posts_per_page=2'); ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                        <!--                                    Post One-->

                                        <a href="<?php the_permalink() ?>" class="post">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="image-holder">
                                                        <?php the_post_thumbnail(); ?>
                                                    </div>
                                                </div>
                                                <div class="display-table-cell">
                                                    <div class="content-holder">
                                                        <div class="category">category </div>
                                                        <h3> <?php the_title(); ?></h3>
                                                        <p><?php the_excerpt(); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php Starkers_Utilities::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>