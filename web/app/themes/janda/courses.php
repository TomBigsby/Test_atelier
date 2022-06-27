<?php
/*
Template Name: Courses
*/
?>


<?php
// Contrôler si ACF est actif
if (!function_exists('get_field')) return;
?>

<?php get_header() ?>

<body>

    <div class="courses">
        <section class="intro py-5">
            <div class="container position-relative">
                <?php
                $image = get_field('pattern');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pattern pattern_title position-absolute" />
                <?php endif; ?>
                <div class="row"></div>
                <div class="col col-md-7 col-lg-5">
                    <h1 class="mt-4 mb-4"><?php the_field('title-page_courses'); ?></h1>
                    <p><?php the_field('text_intro_courses'); ?></p>
                </div>
        </section>

        <section>
            <div class="container">
                <div class="row mb-4">
                    <h2 class="mb-5"><?php the_field('subtitle_section1_courses'); ?></h2>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card">
                            <?php
                            $image = get_field('course_image1');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                            <?php endif; ?>

                            <div class="card-body">
                                <h3 class="card-title mb-3"><?php the_field('course_title1'); ?></h3>
                                <p class="card-text"><?php the_field('course_text1'); ?></p>
                                <button class="btn btn-secondary">See more...</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card">
                            <?php
                            $image = get_field('course_image2');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                            <?php endif; ?>
                            <div class="card-body">
                                <h3 class="card-title mb-3"><?php the_field('course_title2'); ?></h3>
                                <p class="card-text"><?php the_field('course_text2'); ?></p>
                                <button class="btn btn-secondary">See more...</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <?php
                            $image = get_field('course_image3');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                            <?php endif; ?>
                            <div class="card-body">
                                <h3 class="card-title mb-3"><?php the_field('course_title3'); ?></h3>
                                <p class="card-text"><?php the_field('course_text3'); ?>
                                </p>
                                <button class="btn btn-secondary">See more...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container"><?php get_template_part('testimonials') ?></div>
    </div>

    <?php get_template_part('subscribe_newsletter') ?>

    <?php get_footer() ?>