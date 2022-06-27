<?php
/*
Template Name: Contact
*/
?>


<?php
// Contrôler si ACF est actif
if (!function_exists('get_field')) return;
?>

<?php get_header() ?>

<body>

    <section class="intro py-5">
        <div class="container position-relative">
            <?php
            $image = get_field('pattern');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pattern pattern_title position-absolute" />
            <?php endif; ?>
            <div class="row"></div>
            <div class="col col-md-7 col-lg-5">
                <h1 class="mt-4 mb-4"><?php the_field('title_page_contact'); ?></h1>
                <p><?php the_field('text_intro_contact'); ?></p>
            </div>
    </section>


    <section class="pb-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col col-md-5">
                    <h2 class="mb-3"><?php the_field('subtitle_section1_contact'); ?></h2>
                    <p><?php the_field('text_section1_contact'); ?></p>
                </div>
                <div class="row position-relative">
                    <div class="col-md-6 px-3 p-md-5 mb-4">
                        <div class="mb-4">
                            <h4><?php the_field('phone_label'); ?></h4>
                            <span><?php the_field('phone_info'); ?></span>
                        </div>
                        <div class="mb-4">
                            <h4><?php the_field('email_label'); ?></h4>
                            <span><?php the_field('email_info'); ?></span>
                        </div>
                        <div class="mb-4">
                            <h4><?php the_field('map_label'); ?></h4>
                        </div>

                        <div>
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24156.756637577993!2d-73.957995!3d40.814902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f64208a32dc5%3A0xc6648b8ebdeb938e!2s632%20W%20125th%20St%2C%20New%20York%2C%20NY%2010027!5e0!3m2!1sfr!2sus!4v1655892301986!5m2!1sfr!2sus" width="90%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                    <div class="col-md-6 position-relative">
                        <form>
                            <?php echo do_shortcode('[forminator_form id="294"]'); ?>
                        </form>
                        <?php
                        $image = get_field('pattern');
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pattern pattern_contact1 position-absolute" />
                        <?php endif; ?>
                    </div>

                    <?php
                    $image = get_field('pattern_vertical');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pattern-v pattern_contact2 position-absolute" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



    <?php get_template_part('subscribe_newsletter') ?>

    <?php get_footer() ?>