<footer>
        <div class="container py-4 my-3">
            <div class="row mb-4">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-md-6 col-sm-12 images">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Main Logo 2.png" class="school-logo" alt="main-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Group 5.png" class="school-logo sub-logo ms-3" alt="sub-logo"
                                width="117px" height="100px">
                        </div>
                        <?php 
                                $contacts = new WP_Query(array(
                                    'post_type' => 'contact_post',
                                    'posts_per_page' => 1
                                ));
                                if($contacts->have_posts()) : while($contacts->have_posts()) : $contacts->the_post();
                            ?>
                        <div class="ps-6 contact-text col-lg-6 col-md-6 col-sm-12">
                            <h4><?php the_title(); ?></h4>
                            <p>
                                <?php the_field('address'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row mx-3">
                        <div class="col-6 col-md-6 col-sm-6 info ps-5">
                            <h4>More Info</h4>
                                <p>
                                    <?php the_field('phone'); ?>
                                </p>
                                <a href="mailto:candlemba@gmail.com" class="pb-2">
                                    <?php the_field('mail'); ?>
                                </a>
                            <!-- <a href="mailto:aungkyawhtoon@gmail.com">aungkyawhtoon@gmail.com</a> -->
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 menu info ps-5">
                            <h4 class="ms-4">Menu</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="scholarship.html">Scholarship</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mt-3 follow-us">
                <h4 class="pe-3">Follow Us</h4>
                <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/twitter (1).png" class="ps-3 icons" alt="twitter">
                <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Group (2).png" class="ps-3 icons" alt="tiktok">
                <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/instagram (1).png" class="ps-3 icons" alt="instagram">
                <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Group (3).png" class="ps-3 icons" alt="facebook">
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>