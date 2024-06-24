


<?php include_once('header.php'); ?>
<div class="about-us">
    <div class="row g-0">
        <div class="position-relative main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group.png" alt="" width="100%" class="banner">
            <div class="banner-text py-4 overlay">
                <h2 class="text-white fw-bold text-uppercase px-5">About Us</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row inner-nav">
            <ul class="d-flex align-items-center gap-2 my-5 " style="font-family: var(--secondary-font);">
                <li>Home <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/caret-right 1.png" alt=""></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <?php
            $about_contents = new WP_Query(array(
                'post_type' => 'about_content',
                'posts_per_page' => 1,
            ));
            if($about_contents->have_posts()) : while($about_contents->have_posts()) : $about_contents->the_post();
        ?>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-4 content" style="line-height: 25px;">
                    <p style="font-size: 18px; font-weight: 700;"><?php the_title(); ?></p>
                    <h3 class="heading"><?php echo get_field('header'); ?></h3>
                    <div class="words param" style="padding-top: 20px;">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 content second-param" style="margin: 43px 0; line-height: 25px;">
                    <p class="words">
                        <?php the_field('first_content'); ?>
                    </p>
                    <p class="words">
                    <?php the_field('second_content'); ?>
                    </p>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 image">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group (8).png" alt="building" class="w-100">
                </div>
            </div>
        <?php
            endwhile;
        endif;
        ?>
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
<?php include_once('footer.php'); ?>