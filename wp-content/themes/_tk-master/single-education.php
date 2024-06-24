<?php include_once('header.php') ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="primary">
        <div class="row g-0">
            <div class="position-relative main-title">
                <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group.png" alt="" width="100%" class="banner">
                <div class="banner-text py-4 overlay">
                    <h2 class="text-white fw-bold text-uppercase px-5">Primary Classes</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row inner-nav">
                <ul class="d-flex align-items-center gap-2 my-5" style="font-family: var(--secondary-font); font-size: 18px;">
                    <li>Home <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/caret-right 1.png" alt=""></li>
                    <li>Education <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/caret-right 1.png" alt=""></li>
                    <li>Primary Class</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row main-content">
                <div class="col-md-8 content-col">
                    <h2 class="heading text-uppercase my-4 fw-bold content-heading" style="color: var(--primary-color); font-family: var(--main-font);">
                        <?php the_title(); ?>
                    </h2>
                    <div>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/primary.png" alt="" class="w-100"> -->
                         <?php the_post_thumbnail('', array('class'=> 'w-100')); ?>
                    </div>
                    <div>
                        <div class="my-4 fs-5 w-100 tracking-wide content-para edu-text" style="color: var(--primary-color); font-family: var(--secondary-font);">
                            <?php the_content() ?>
                        </div>
                    </div>
                    <div class="my-5 para-content">
                        <h2 class="content-heading heading" style="color: var(--secondary-text); font-family: var(--main-font); font-size: 28px;">
                            <?php the_field('title1'); ?>
                        </h2>
                        <p class="my-3 content-para" style="color: var(--primary-text); font-family: var(--secondary-font);">
                            <?php the_field('content1'); ?>
                        </p>
                    </div>
                    <div class="my-5 para-content">
                        <h2 class="content-heading heading" style="color: var(--secondary-text); font-family: var(--main-font); font-size: 28px;">
                            <?php the_field('title2'); ?>    
                        </h2>
                        <p class="my-3 content-para" style="color: var(--primary-text); font-family: var(--secondary-font);">
                            <?php the_field('content2'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 lectures">
                    <h2 class="w-100 py-3 px-4 text-white m-0 heading content-heading" style="background-color: #FF9900; font-family: var(--main-font);">
                        <?php the_field('heading'); ?> 
                    </h2>
                    <div class="h-auto py-5 lecuture" style="background-color: #FCFAF8;">
                        <ul class="py-2 lecture-list">
                            <?php
                                for($index=1; $index < 12; $index++) {
                                    $subject = get_field('subject'. $index);
                                    if($subject) {
                                        echo "<li class='my-4'>" .esc_html($subject). "</li>";
                                    }
                                }
                            ?>
                            <!-- <li class="my-4">Myanmar</li> -->
                            <!-- <li class="my-4">Chinese</li>
                            <li class="my-4">English</li>
                            <li class="my-4">Mathematics</li>
                            <li class="my-4">Science</li>
                            <li class="my-4">Social Studies</li>
                            <li class="my-4">Computer Science</li>
                            <li class="my-4">Art</li> -->
                        </ul>
                        <ul class="px-2 student-list" style="font-family: var(--secondary-font);">
                            <li class="mb-3">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/_x35_3.png" alt="" class="mx-2" width="15px"> -->
                                 <?php
                                    $image = get_field('book');
                                    if($image) :
                                ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="" class="mx-2" width="15px">
                                <?php
                                    endif;
                                ?>
                                <span class="fw-bold"><?php the_field('lectures'); ?></span> <span><?php the_field('numbers') ?></span></li>
                            <li class="my-3">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/reading-book 1.png" alt="" class="mx-2" width="15px"> -->
                                <?php
                                    $image = get_field('enrolled_image');
                                    if($image) :
                                ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="" class="mx-2" width="15px">
                                <?php
                                    endif;
                                ?>
                                <span class="fw-bold"><?php the_field('enrolled'); ?></span> <span><?php the_field('enrolled_no'); ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    endwhile;
?>
<?php include_once('footer.php') ?>