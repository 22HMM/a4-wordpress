<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A4 School</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>

</head>

<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg shadow-sm">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between nav-toggle">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Main Logo 2.png" alt="school name" class="school-logo nav-school-logo">
                    </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse flex-wrap" id="collapsibleNavId">
                    <div class="row px-3 border-bottom pb-2 contact-nav w-100">
                        <div class="col-lg-4 col-md-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Vector.png" class="phone" alt="phone">
                            <a href="tel:+95 9 509 9246" class="text-decoration-none">+95 9 509 9246, +95 9 773
                                772 771</a>
                            <!-- <a href="tel:+95 9 773 772 771" class="ps-2 text-decoration-none"></a> -->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/envelope.png" class="email" alt="email">
                            <a href="mailto:aungkyawhtoon@gmail.com" class="ps-2 text-decoration-none">aungkyawhtoon@gmail.com</a>
                        </div>
                        <div class="col-lg-4 col-md-4 d-flex justify-content-end pe-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/twitter.png" class="ps-3 icons" alt="twitter">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Group.png" class="ps-3 icons" alt="tiktok">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Group (1).png" class="ps-3 icons" alt="facebook">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/instagram.png" class="ps-3 icons" alt="instagram">
                        </div>
                    </div>
                    <ul class="navbar-nav px-4">
                        <li class="nav-item">
                            <a href="about-us" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Education
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                $education_classes = new WP_Query(array(
                                    'post_type' => 'education',
                                    'posts_per_page' => -1,
                                    'orderby' => 'id',
                                    'order' => 'asc'
                                ));
                                if ($education_classes->have_posts()) : while ($education_classes->have_posts()) : $education_classes->the_post();
                                ?>
                                        <li>
                                        <!-- <?php echo the_permalink(); ?> -->
                                            <a class="dropdown-item" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                            <!-- <a class="dropdown-item" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> -->
                                        </li>
                                <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/scholarship" class="nav-link">Scholarship</a>
                        </li>
                        <li class="nav-item">
                            <a href="/news-events" class="nav-link">New & Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact-us" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item d-lg-none d-inline-block">
                            <a href="admission" class="nav-link admission-btn1 text-white" style="text-transform: uppercase;">Admission</a>
                        </li>
                    </ul>

                </div>
                <div class="d-flex ">
                    <a href="admission" class="admission-btn text-white" style="text-transform: uppercase;">Admission</a>
                </div>
            </div>
        </nav>
    </header>