<header id="header">
    <!-- Navbar -->
    <nav class="navbar">

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span
                                    class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img
                                    src="<?php bloginfo('template_directory'); ?>/img/brand-logo.png"
                                    alt="Quantitativ Brokers"/></a>
                    </div>
                </div>

                <div class="col-sm-8">

                    <div class="top-menu">
                        <span class="call">Call: +43 664 452 5988</span> <span><a
                                    href="mailto:email@lebens-mittel-punkt.net">email@lebens-mittel-punkt.net</a></span>
                        <span><a href="javascript:void(0)" class="lang">English</a>  -  <a href="javascript:void(0)" class="lang">German</a></span>
                        <span class="search-holder">
                        <form class="search-form" itemprop="potentialAction" itemscope="" itemtype="http://schema.org/SearchAction" method="get" action="<?php echo bloginfo('url'); ?>" role="search">
                            <meta itemprop="target" content="<?php echo bloginfo('url'); ?>/?s={s}">
                            <input itemprop="query-input" id="s" type="search" name="s" placeholder="Search for...?">
                            <button id="searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>

                        </span>
                    </div>

                    <div class="social">
                        <ul>
                            <li>
                                <a href="facebook"><i class="icon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="facebook"><i class="icon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="facebook"><i class="icon-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <?php $defaults = array(
                        'theme_location' => '',
                        'menu' => 'main',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => 'navbar',
                        'menu_class' => 'navbar-collapse collapse',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="navbar" class="nav navbar-nav navbar-collapse collapse">%3$s</ul>',
                        'depth' => 0,
                        'walker' => ''
                    );

                    wp_nav_menu($defaults); ?>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </nav>


    <div class="content-wrapper">

        <?php $height = get_field('banner_height'); ?>


        <?php if (is_front_page()) { ?>
            <!-- Home page Banner -->
            <section id="slider"
                     class="cover bg-black fullscreen image-slider slider-all-controls controls-inside parallax margin-padding-80 <?php if( $height ): echo $height; endif; ?>">
                <ul class="slides">


                    <?php $args = array('post_type' => 'slides');
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            // vars
                            $slide_title = get_field('title');
                            $slide_main_title = get_field('main_title');
                            $slide_date = get_field('date');
                            $read_more = get_field('read_more');
                            ?>
                            <li>
                                <div class="background-image-holder">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="slider-content">
                                        <div class="title"><?php echo $slide_title?></div>
                                        <div class="main_title"><?php echo $slide_main_title?></div>
                                        <div class="date"><?php echo $slide_date?></div>
                                        <a href="<?php echo $read_more?>" class="button">Read More</a>

                                    </div>

                                </div>
                            </li>
                        <?php endwhile;
                    } ?>
                </ul>
            </section>

<!-- Event page Banner -->
        <?php } else if(is_page( 'events' ))  { ?>

        <section id="slider"
                 class="cover fullscreen image-slider slider-all-controls controls-inside parallax margin-padding-80 <?php if( $height ): echo $height; endif; ?>">
            <ul class="slides">
                <?php $args = array('post_type' => 'event', 'posts_per_page' => 1);
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) : $my_query->the_post();
                        // vars
                        $slide_title = get_field('title');
                        $slide_date =  get_field('start_date');
                        $event_short_description = get_field('short_description');
                        ?>
                        <li>
                            <div class="background-image-holder">
                                <?php the_post_thumbnail(); ?>
                                <div class="slider-content events">
                                    <div class="date"><?php echo $slide_date?></div>
                                    <div class="title"><?php echo $slide_title?></div>
                                    <div class="description"><?php echo $event_short_description?></div>
                                    <a href="<?php the_permalink();?>" class="button">Read More</a>

                                </div>

                            </div>
                        </li>
                    <?php endwhile;
                } ?>
            </ul>
        </section>

<!-- General Page Header  -->
        <?php } else  { ?>

            <section id="slider"
                     class="cover fullscreen image-slider slider-all-controls controls-inside parallax margin-padding-80 <?php if( $height ): echo $height; endif; ?>">
                <ul class="slides">
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <li>
                            <div class="background-image-holder">
                                <?php the_post_thumbnail(); ?>
                                <div class="slider-content">
                                    <div class="main_title"><?php the_title(); ?></div>
                                </div>

                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </section>
            <?php } ?>
</header>
