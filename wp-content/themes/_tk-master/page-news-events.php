<?php include_once('header.php'); ?>
<div class="news-events">
    <div class="row g-0">
            <div class="position-relative main-title">
                <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group.png" alt="" width="100%" class="banner">
                <div class="banner-text py-4 overlay">
                    <h2 class="text-white fw-bold text-uppercase px-5">News & Events</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row inner-nav">
                <ul class="d-flex align-items-center gap-2 my-5 " style="font-family: var(--secondary-font); font-size: 18px;">
                    <li>Home <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/caret-right 1.png" alt=""></li>
                    <li>News & Events</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row" style="border-bottom: 2px solid #808080; margin-bottom: 30px;">
                <div class="col-md-8">
                    <?php
                        $news_events = new WP_Query(array(
                            'post_type' => 'new_event',
                            'posts_per_page' => 2,
                        ));
                        if($news_events->have_posts()) : while($news_events->have_posts()) : $news_events->the_post();
                    ?>
                        <div class="content">
                            <div style="width: 97%;">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/football.jpg" alt="" class="w-100"> -->
                                 <?php the_post_thumbnail('', array('class'=> 'w-100', 'style'=> 'height: 622px;')); ?>
                            </div>
                            <div class="my-4 py-1">
                                <ul class="d-flex p-0" style="font-family: var(--secondary-font);">
                                    <li class="m-0 p-0 date" style="font-family: var(--secondary-font);color: #808080;">
                                        <?php 
                                            $calendar = get_field('calendar');
                                            if($calendar) :
                                         ?>
                                            <img src="<?php echo esc_url($calendar['url']); ?>" alt="" class="me-2 calendar">
                                        <?php
                                            endif;
                                        ?>
                                            <!-- June 5, 2024 -->
                                             <?php echo get_the_date('F, j, Y'); ?>
                                    </li>
                                    <li class="mx-3 user" style="font-family: var(--secondary-font);color: #808080;">
                                        <?php 
                                            $admin_image = get_field('admin_image');
                                            if($admin_image) :
                                         ?>
                                            <img src="<?php echo esc_url($admin_image['url']); ?>" alt="" class="me-2 user">
                                        <?php
                                            endif;
                                        ?>
                                        <?php the_field('admin') ?>
                                        </li>
                                </ul>
                                <div>
                                    <h2 class="fw-bold content-heading"
                                        style="font-family: var(--main-font); color: var(--primary-text); font-size: 28px;">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="py-2 content-para"
                                        style="font-family: var(--secondary-font); color: var(--primary-text); font-size: 16px;">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="my-4 button">
                                    <a href="<?php echo the_permalink(); ?>" class="btn text-white rounded-5"
                                        style="font-size: 18px;font-family: var(--secondary-font);background-color: var(--secondary-color); padding: 15px 30px;">Read
                                        More <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/arrow_up_right_to_square.png" alt="" class="mx-1"></a>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                        $related_posts = new WP_Query(array(
                            'post_type' => 'new_event',
                            'posts_per_page' => 4,
                            'orderby' => 'id',
                            'order' => 'desc'
                        ));
                        if($related_posts->have_posts()) : while($related_posts->have_posts()) : $related_posts->the_post();
                    ?>
                        <h2 class="mb-5 content-heading" style="font-family: var(--main-font); font-size: 28px;">
                            <?php
                                $heading = get_field('latest');
                                if($heading) :
                                    echo $heading;
                                endif;
                            ?>
                        </h2>
                        <div class="">
                                <a href="<?php echo get_permalink(); ?>" class="row my-4 latest-posts align-items-center text-decoration-none">
                                    <div class="col-md-4 ps-3 col-sm-4 col-4">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/A4 Img  (4) 1 (4).png" alt="" class="w-100"> -->
                                         <?php the_post_thumbnail('', array('style'=>'width: 118px; height: 118px;')); ?>
                                    </div>
                                    <div class="col-md-8 inner-heading col-sm-8 posts col-8">
                                        <p class=" fw-bold my-2 " style="font-family: var(--secondary-font);">
                                            <?php the_title(); ?>
                                        </p>
                                        <p class="" style="font-size: 16px;font-family: var(--secondary-font);color: #808080;">
                                            <?php echo get_the_date(); ?>
                                        </p>
                                    </div>
                                </a>
                        </div>
                    <?php
                        endwhile;
                    endif;

                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?>