<?php include('header.php'); ?>
<div class="contact-us">
    <div class="row g-0">
        <div class="position-relative main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group.png" alt="" width="100%" class="banner">
            <div class="banner-text py-4 overlay">
                <h2 class="text-white fw-bold text-uppercase px-5">Contact Us</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row inner-nav">
            <ul class="d-flex align-items-center gap-2 my-5" style="font-family: var(--secondary-font); font-size: 18px !important;">
                <li>Home <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/caret-right 1.png" alt=""></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="font-family: var(--secondary-font);" class="content-para">
                    <?php echo do_shortcode('[contact-form-7 id="ed64f7c" title="Contact form 1"]'); ?>
                </div>
                <form action="" method="post" style="font-family: var(--secondary-font);" class="content-para">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="my-3">
                                <label for="" class="form-label">First
                                    Name</label>
                                <input type="text" class="form-control border-0 py-3 my-2" name="name" placeholder="First Name">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Phone
                                    No</label>
                                <input type="phone" class="form-control border-0 py-3 my-2" name="phone" placeholder="Phone No">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control border-0 py-3 my-2" name="email" placeholder="Email">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Your
                                    Area</label>
                                <input type="text" class="form-control border-0 py-3 my-2" name="email" placeholder="Select Area" style="color: #808080;  background-color: #FCFAF8; font-size: 15px !important">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-3">
                            <label for="" class="form-label">Your
                                Message</label>
                            <textarea name="message" id="" cols="30" rows="8" class="w-100 border-0 my-2 form-control">Write Comments</textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="message">
                            <a href="" class="w-100 btn rounded-3 py-4 text-white text-center">Make An Request</a>
                        </div>
                    </div>
                </form>
            </div>

            <?php
            $contacts = new WP_Query(array(
                'post_type' => 'contact_post',
                'posts_per_page' => 1
            ));
            if ($contacts->have_posts()) : while ($contacts->have_posts()) : $contacts->the_post();
            ?>
                    <div class="col-md-6 contactus" style="background-color: #FCFAF8;">
                        <div class="p-5 mx-auto">
                            <h2 class="fw-bold my-3 px-5 content-heading" style="font-family: var(--main-font);">
                                <?php the_title(); ?>
                            </h2>
                            <ul class="my-5 address" style="font-family: var(--secondary-font); font-size: 18px !important;">
                                <li class="my-3 d-flex gap-3 ">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <?php
                                        $image = get_field('location');
                                        ?>
                                        <img src="<?php echo esc_url($image['url']) ?>" alt="" width="30px" height="30px">
                                    </div>
                                    <p class="content-para">
                                        <?php the_field('address'); ?>
                                    </p>
                                </li>
                                <li class="my-3 d-flex gap-3">
                                    <div class="d-flex align-items-center">
                                        <?php
                                        $phone_image = get_field('phone_image');
                                        ?>
                                        <img src="<?php echo esc_url($phone_image['url']); ?>" alt="" width="30px" height="30px">
                                    </div>
                                    <p class="content-para">
                                        <?php the_field('phone'); ?>
                                    </p>
                                </li>
                                <li class="my-3 d-flex gap-3">
                                    <div class="d-flex align-items-center">
                                        <?php
                                        $mail_box = get_field('mail_box');
                                        ?>
                                        <img src="<?php echo esc_url($mail_box['url']); ?>" alt="" width="30px" height="30px">
                                    </div>
                                    <p class="content-para">
                                        <?php the_field('mail'); ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;

            ?>
        </div>
    </div>
    <div class="container my-5">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/image/Figmap.png" alt="" class="w-100" height="622.5px"> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122189.61233081069!2d96.12272982011615!3d16.854838896727486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb32c5515e65%3A0x30addacfe4e69810!2sA4%20International%20Mathemathics%20School!5e0!3m2!1sen!2smm!4v1718271822621!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?php include('footer.php'); ?>