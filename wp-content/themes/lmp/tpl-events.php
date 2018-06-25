<?php
/* 
Template Name: Events
*/
?>

<?php Starkers_Utilities::get_template_parts(array('parts/shared/html-header', 'parts/shared/header')); ?>

<div id="event">
    <section class="grey-bg">
        <div class="container text-center event-subheading">
            <div class="row">
                <div class="col-sm-12">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua.
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 workshop">
                    <div class="image-holder">
                        <img class="img-responsive"
                             src="<?php bloginfo('template_directory'); ?>/img/workshop-img.png"
                             alt="workshop">
                    </div>
                    <div class="heading">
                        <h3>Workshop</h3>
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>

                </div>

                <div class="col-sm-4 training">
                    <div class="image-holder">
                        <img class="img-responsive"
                             src="<?php bloginfo('template_directory'); ?>/img/training.jpg"
                             alt="workshop">
                    </div>
                    <div class="heading">
                        <h3>Trainings</h3>
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>

                </div>

                <div class="col-sm-4 seminars">
                    <div class="image-holder">
                        <img class="img-responsive"
                             src="<?php bloginfo('template_directory'); ?>/img/seminar.jpg"
                             alt="workshop">
                    </div>
                    <div class="heading">
                        <h3>Seminars</h3>
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>For various trainings and seminars, please <b>contact us</b> for details or enquiries.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center">
            <div class="page-title">
                <h2><span>Event </span>2018</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
            </div>
        </div>
    </section>


    <section id="post-holder">

        <div class="container">
            <div class="row">
                <?php $args = array('post_type' => 'event');
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) {
                while ($my_query->have_posts()) : $my_query->the_post();

                    // vars
                    $event_title = get_field('title');
                    $event_start_date = get_field('start_date');
                    $event_end_date = get_field('end_date');
                    $event_short_description = get_field('short_description');

                    ?>
                    <!--  post start    -->
                    <div class="post">
                        <div class="col-sm-6">
                            <div class="image-holder"><?php the_post_thumbnail();?></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="content-holder">
                                <div class="post-date"><?php echo $event_start_date?></div>
                                <div class="post-title"><?php echo $event_title?></div>
                                <div class="post-content"><?php echo $event_short_description?></div>
                                <div class="button-holder">
                                    <a href="<?php the_permalink();?>" class="button">More Info</a>
                                    <a href="javascript:void(0)" class="button">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  post end    -->

                <?php endwhile;
                } ?>

            </div>
        </div>
    </section>


</div>

<?php Starkers_Utilities::get_template_parts(array('parts/shared/footer', 'parts/shared/html-footer')); ?>
