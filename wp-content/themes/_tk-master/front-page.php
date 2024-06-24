<?php include_once('header.php'); ?>
<main>
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/banner 1.png" alt="banner image" class="w-100 img-fluid" style="width: 100%;">
    </div>
    <div class="container bg-info educare-service">
        <?php 
            $index_content = new WP_Query(array(
                'post_type' => 'index_page',
                'posts_per_page' => 1
            ));
            if($index_content->have_posts()) : while($index_content->have_posts()) : $index_content->the_post();
        ?>
            <div class="row content p-5">
                <div class="col-lg-6 col-sm-12 about-content">
                    <h5 class="heading mb-4"><?php the_title(); ?></h5>
                    <h2 class="heading col-sm-12"><?php the_field('header'); ?></h2>
                    <div class="py-4">
                        <?php the_content(); ?>
                    </div>
                    <a href="#" class="readmore-btn">Read More</a>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/A4 Building 1.png" alt="a4-building" class="a4-building"> -->
                     <?php the_post_thumbnail(); ?>
                </div>
            </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    <div class="container discover">
        <div class="row content">
            <?php
               $education_classes = new WP_Query(array(
                'post_type' => 'education',
                'posts_per_page' => -1,
                'orderby' => 'id',
                'order' => 'asc'
            ));
            if($education_classes->have_posts()) : while($education_classes->have_posts()) : $education_classes->the_post();
            ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card-design">
                        <?php the_post_thumbnail('', array('class'=> 'w-100 object-fit-cover border-0 rounded-5', 'style'=> 'height: 380px')); ?>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group (5).png" alt="primary" class="w-100"> -->
                        <div class="test">
                            <h5 class="header"><?php the_title(); ?></h5>
                            <div class="text">
                                <a href="#" class="readmore-btn">Read More
                                    <svg class="edit-icon ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card-design">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group (6).png" alt="secondary" class="w-100">
                    <div class="test">
                        <h5 class="header">Secondary</h5>
                        <div class="text">
                            <a href="#" class="readmore-btn">Read More
                                <svg class="edit-icon ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card-design">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group (10).png" alt="cambridge igcse" class="igcse-image w-100">
                    <div class="test">
                        <h5 class="header">Cambridge IGCSE</h5>
                        <div class="text">
                            <a href="#" class="readmore-btn">Read More
                                <svg class="edit-icon ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <?php
                endwhile;
            endif;
            ?>
            <?php
                $welcome_content = new WP_Query(array(
                    'post_type' => 'index_page',
                    'posts_per_page' => 1,
                ));
                if($welcome_content->have_posts()) : while($welcome_content->have_posts()) : $welcome_content->the_post();
            ?>
            <div class="col-lg-3 col-md-6 col-sm-6 pt-5 welcome">
                <p class="mt-5 words"><?php echo get_field('welcome') ?></p>
                <h3><?php the_field('discover') ?></h3>
            </div>
            <?php
                endwhile;
            endif;

            ?>
        </div>
    </div>
    
    <div class="container-fluid solution">
        <div class="container py-3">
            <?php 
                $solution_content = new WP_Query(array(
                    'post_type' => 'about_solution',
                    'posts_per_page' => 1,
                ));
                if($solution_content->have_posts()) : while($solution_content->have_posts()) : $solution_content->the_post();
            ?>
                <div class="row content justify-content-evenly">
                    <div class="col-md-5 col-lg-3">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div>
                           <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            endif;
            ?>
            <div class="row g-3 mb-5 justify-content-around cards">
                <?php
                    $languages = new WP_Query(array(
                        'post_type' => 'about_languages',
                        'posts_per_page' => -1,
                        'orderby' => 'id',
                        'order' => 'asc'
                    ));
                    if($languages->have_posts()) : while($languages->have_posts()) : $languages->the_post();
                ?>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="card-design px-3 h-100">
                            <div class="d-flex justify-content-center">
                                <?php the_post_thumbnail('', array('width'=> '50px')); ?>
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/language.png" alt="languages" width="50px"> -->
                            </div>
                            <h5 class="mt-4 mb-3"><?php the_title(); ?></h5>
                            <div>
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

    <div class="container news-events my-5">
        <div class="row justify-content-between px-2">
            <h2 class="col-md-6 col-sm-6 heading">News and Events</h2>
            <div class="col-md-6 col-sm-6 news d-flex justify-content-end">
                <a href="news-events" class="text-decoration-none">See All News & Events</a>
            </div>
        </div>
    </div>
    <div class="curriculum mb-5">
        <div class="row g-0">
            <?php
                $curriculum_images = new WP_Query(array(
                    'post_type' => 'curriculum_posts',
                    'posts_per_page' => -1,
                    'orderBy' => 'id',
                    'order' => 'asc'
                ));
                if($curriculum_images->have_posts()) : while($curriculum_images->have_posts()) : $curriculum_images->the_post();
            ?>
                <div class="col-lg-3 col-sm-12 col-md-6">
                    <div class="img-box position-relative">
                        <?php the_post_thumbnail('', array('class' => 'move-image')); ?>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/football.jpg" class="move-image" alt="football" width="100%"> -->
                        <div class="aside">
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </div>

                </div>
            <?php
                endwhile;
            endif;
            ?>
            <!-- <div class="col-lg-3 col-sm-12 col-md-6">
                <div class="img-box position-relative">

                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/meeting.jpg" alt="meeting" width="100%" class="move-image">
                    <div class="aside">
                        <p>
                            Our Curriculum how to build a <br> complete
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6">
                <div class="img-box position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/children.jpg" alt="children" width="100%" class="move-image">
                    <div class="aside">
                        <p>
                            Our Curriculum how to build a <br> complete
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6">
                <div class="img-box position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/groupdiscussion.jpg" alt="groupdiscussion" width="100%" class="move-image">
                    <div class="aside">
                        <p>
                            Our Curriculum how to build a <br> complete
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</main>
<?php include_once('footer.php'); ?>