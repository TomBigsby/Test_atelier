<?php wp_head() ?>

<section class="happy_students position-relative">

    <div class="d-none d-lg-block">
        <?php
        $image = get_field('pattern_vertical');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pattern-v pattern_course1 position-absolute" />
        <?php endif; ?>
    </div>

    <div class="bloc_deco position-absolute"></div>
    <div class="row">
        <div class="col-md-12 col-lg-4">
            <h2><?php the_field('title_testimonials'); ?></h2>
            <p><?php the_field('text_testimonials'); ?></p>
            <button class="btn btn-primary mt-3 mb-4"><?php the_field('cta_testimonials'); ?></button>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="row d-flex justify-content-between flex-column flex-md-row">
                <div class="col-5 col-md-3 mb-4 align-self-md-center">
                    <?php
                    $image = get_field('image_student_1');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <div class="row pb-4 d-flex justify-content-between">
                        <div class="col-8 col-md-9">
                            <?php
                            $image = get_field('image_student_2');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                        <div class="col-4 col-md-3 align-self-end">
                            <?php
                            $image = get_field('image_student_3');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-4 col-md-3">
                            <?php
                            $image = get_field('image_student_4');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                        <div class="col-8 col-md-9">
                            <?php
                            $image = get_field('image_student_5');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md-3 mt-4 align-self-end align-self-md-center">
                    <?php
                    $image = get_field('image_student_6');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>