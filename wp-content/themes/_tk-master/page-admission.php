<?php include('header.php'); ?>
<div class="admissions">
    <div class="row g-0">
        <div class="position-relative main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/Mask group.png" alt="" width="100%" class="banner">
            <div class="banner-text py-4 overlay">
                <h2 class="text-white fw-bold text-uppercase px-5">Admissions</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row inner-nav">
            <ul class="d-flex align-items-center gap-2 my-5" style="font-family: var(--secondary-font); font-size: 18px;">
                <li>Home <img src="<?php echo get_template_directory_uri(); ?>/includes/a4-school/images/caret-right 1.png" alt=""></li>
                <li>Admissions</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <?php
            $admissions = new WP_Query(array(
                'post_type' => 'admission_page',
                'posts_per_page' => 1
            ));
            if($admissions->have_posts()) : while($admissions->have_posts()) : $admissions->the_post();
        ?>
            <div class="row">
                <h2 class=" text-uppercase my-3 fw-bold text-center content-heading heading" style="color: var(--primary-color); font-family: var(--main-font);">
                    <?php echo the_field('heading'); ?>
                </h2>
                <div class="my-2 content-para" style="font-family: var(--secondary-font);font-size: 16px; color: var(--primary-text);">
                    <?php
                        the_content();
                    ?>
                </div>
            </div>
        <?php
            endwhile;
        endif;
        ?>

        <div class="row my-5">
            <div class="col-md-6 mx-auto ">
                <div style="font-family: var(--secondary-font);" class="content-para">
                    <?php echo do_shortcode('[contact-form-7 id="ff89794" title="Admission"]'); ?>
                </div>
                <!-- <form action="" method="post" style="font-family: var(--secondary-font);">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="my-3">
                                <label for="" class="form-label " style="font-size: 18px;">First Name</label>
                                <input type="text" class="form-control border-0 py-3 my-2" name="name" placeholder="First Name" style="color: #808080;  background-color: #FCFAF8; font-size: 15px">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label  " style="font-size: 18px;">Phone No</label>
                                <input type="phone" class="form-control border-0 py-3 my-2" name="phone" placeholder="Phone No" style="color: #808080;  background-color: #FCFAF8; font-size: 15px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-3">
                                <label for="" class="form-label " style="font-size: 18px;">Email</label>
                                <input type="email" class="form-control border-0 py-3 my-2" name="email" placeholder="Email" style="color: #808080;  background-color: #FCFAF8; font-size: 15px">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label " style="font-size: 18px;">Subject</label>
                                <input type="text" class="form-control border-0 py-3 my-2" name="email" placeholder="Subject" style="color: #808080;  background-color: #FCFAF8; font-size: 15px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-3">
                            <label for="" class="form-label " style="font-size: 18px;">Your Message</label>
                            <textarea name="message" id="" cols="30" rows="8" class="w-100 border-0 my-2 form-control" style="color: #808080;  background-color: #FCFAF8; font-size: 15px;">Write Comments</textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div>
                            <a href="" class="btn w-100 rounded-3 py-3 text-white text-center" style="background-color: var(--secondary-color);">Send Message</a>
                        </div>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>