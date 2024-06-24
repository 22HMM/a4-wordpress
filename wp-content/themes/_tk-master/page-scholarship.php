<?php include('header.php'); ?>
<div class="scholarship">
    <div class="row g-0">
            <div class="position-relative main-title">
                <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group.png" alt="" width="100%" class="banner">
                <div class="banner-text py-4 overlay">
                    <h2 class="text-white fw-bold text-uppercase px-5">Scholarships</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row inner-nav">
                <ul class="d-flex align-items-center gap-2 my-5 " style="font-family: var(--secondary-font); font-size: 18px;">
                    <li>Home <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/caret-right 1.png" alt=""></li>
                    <li>Schoolarship</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex flex-wrap">
                <?php
                    $scholarship_images = new WP_Query(array(
                        'post_type' => 'scholarship_images',
                        'posts_per_page' => -1,
                        'orderby' => 'id',
                        'order' => 'asc',
                    ));
                    if($scholarship_images->have_posts()) : while($scholarship_images->have_posts()) : $scholarship_images->the_post();
                ?>
                <div class="col-md-4">
                    <?php the_post_thumbnail('',array('class' => 'w-100 my-3')) ?>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 1.png" alt="" class="w-100 my-3"> -->
                </div>
                <?php
                    endwhile;
                endif;
                ?>
                <!-- <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 2.png" alt="" class="w-100 my-3">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 3.png" alt="" class="w-100 my-3">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 4.png" alt="" class="w-100 my-3">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 5.png" alt="" class="w-100 my-3">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 6.png" alt="" class="w-100 my-3">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 7.png" alt="" class="w-100 my-3">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 8.png" alt="" class="w-100 my-3">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/ASS 9.png" alt="" class="w-100 my-3">
                </div> -->
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>