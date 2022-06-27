<?php get_header() ?>


<div class="container">
  <div class="row hero d-flex justify-content-between position-relative">
    <div class="col-md-6">
      <div class="hero_title">
        <i aria-hidden="true" class="fas fa-circle me-2"></i>
        <span><?php the_field('title_above_section1'); ?></span>
      </div>
      <h1 class="row my-4 mx-0"><?php the_field('title_section1'); ?></h1>
      <p class="row m-0"><?php the_field('text_intro_section1'); ?></p>
      <button class="btn btn-primary my-4"><?php the_field('cta_section2'); ?></button>
      <div>
        <?php
        $image = get_field('pattern');
        if (!empty($image)) : ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pattern pattern_home1 position-absolute" />
        <?php endif; ?>

      </div>
    </div>
    <div class="col col-md-5 ">
      <div class="position-relative">
        <?php
        $image = get_field('image_hero_section1');
        if (!empty($image)) : ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
        <?php endif; ?>
        <div class="play_bt position-absolute rounded-circle d-flex justify-content-center align-items-center">
          <i class="fas fa-play fa-lg text-white"></i>
        </div>
      </div>

    </div>
  </div>

  <div class="brands d-flex flex-column flex-lg-row justify-content-md-center align-items-center">
    <div class="col-12 col-md-auto pe-0 pe-lg-5"><span>Featured in</span></div>
    <div class="col d-flex flex-wrap flex-md-nowrap justify-content-between">
      <?php
      $image = get_field('logo1');
      if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
      <?php endif; ?>
      <?php
      $image = get_field('logo2');
      if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
      <?php endif; ?>
      <?php
      $image = get_field('logo3');
      if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
      <?php endif; ?>
      <?php
      $image = get_field('logo4');
      if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
      <?php endif; ?>
      <?php
      $image = get_field('logo5');
      if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
      <?php endif; ?>
    </div>

  </div>


  <div class="rating">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <div class="row">
          <div class="col">
            <div class="rating_line-1"><?php the_field('rating1_note'); ?></div>
            <div class="rating_stars">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
            </div>
            <div class="rating_text"><?php the_field('rating1_text1'); ?></div>
            <div class="rating_text"><?php the_field('rating1_text2'); ?></div>
          </div>
          <div class="col">
            <div class="rating_line-1"><?php the_field('rating2_note'); ?></div>
            <div class="rating_stars">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
            </div>
            <div class="rating_text"><?php the_field('rating2_text1'); ?></div>
            <div class="rating_text"><?php the_field('rating2_text2'); ?></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="testimonial">
          <div class="row testimonial_title mb-4">
            <h3><?php the_field('testimonial_title'); ?></h3>
          </div>
          <div class="row d-flex flex-md-row-reverse justify-content-between">

            <div class="col-md-4 mb-4">
              <?php
              $image = get_field('customer_photo');
              if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="110" height="110" alt="">
              <?php endif; ?>
            </div>

            <div class="col-md-7 me-4">
              <div class="row mb-3">
                <span class="testimonial_customer mb-3"><?php the_field('testimonial_customer_name'); ?></span>
                <p><?php the_field('customer_review'); ?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="bloc_title mb-3"> <?php the_field('title_above_section2'); ?> </div>
        <h2><?php the_field('title_section2'); ?></h2>
      </div>
      <div class="col-md-5">
        <button class="btn btn-primary float-md-end mb-3"><?php the_field('cta_section2'); ?></button>
      </div>
    </div>
    <div class="mt-4">
      <div class="row g-4">
        <div class="col-md-4">

          <?php
          $image = get_field('course_image1');
          if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mb-4" />
          <?php endif; ?>

          <h3 class="mb-3"><?php the_field('course_title1'); ?></h3>
          <p><?php the_field('course_excerpt1'); ?></p>
        </div>
        <div class="col-md-4">

          <?php
          $image = get_field('course_image2');
          if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mb-4" />
          <?php endif; ?>

          <h3 class="mb-3"><?php the_field('course_title2'); ?></h3>
          <p><?php the_field('course_excerpt2'); ?></p>
        </div>
        <div class="col-md-4">

          <?php
          $image = get_field('course_image3');
          if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid mb-4" />
          <?php endif; ?>

          <h3 class="mb-3"><?php the_field('course_title3'); ?></h3>
          <p><?php the_field('course_excerpt3'); ?></p>
        </div>
      </div>
    </div>
    <div class="separator row">
      <div class="text_separator">Features & Benefits</div>
    </div>
    <div class="feat_benef_bloc position-relative">
      <div class="row g-4">
        <div class="col-md-4">
          <h3 class="mb-4"><?php the_field('features'); ?></h3>
          <ul>
            <li><?php the_field('features_list1'); ?></li>
            <li><?php the_field('features_list2'); ?></li>
            <li><?php the_field('features_list3'); ?></li>
            <li><?php the_field('features_list4'); ?></li>
            <li><?php the_field('features_list5'); ?></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="mb-4"><?php the_field('benefits'); ?></h3>
          <ul>
            <li><?php the_field('benefits_list1'); ?></li>
            <li><?php the_field('benefits_list2'); ?></li>
            <li><?php the_field('benefits_list3'); ?></li>
            <li><?php the_field('benefits_list4'); ?></li>
            <li><?php the_field('benefits_list5'); ?></li>
          </ul>
        </div>
        <div class="col col-md-4">
          <?php
          $image = get_field('feature_benefits_image');
          if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
          <?php endif; ?>
        </div>
        <div>
          <?php
          $image = get_field('pattern');
          if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pattern pattern_home2 position-absolute" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="container">
  <section>
    <div class="row">
      <div class="col-md-9">
        <div class="bloc_title mb-3"><?php the_field('title_above_section3'); ?></div>
        <h2 class="mb-3"><?php the_field('title_section3'); ?></h2>
        <p class="mb-5"><?php the_field('excerpt_section3'); ?></p>
      </div>
    </div>
    <div class="row d-flex flex-column flex-lg-row">
      <div class="col">
        <div class="row g-4 mb-4 d-flex flex-column flex-md-row">
          <div class="col col-md-6 col-lg-5">
            <?php
            $image = get_field('image_trainer_1');
            if (!empty($image)) : ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
            <?php endif; ?>
          </div>
          <div class="col-md-6 col-lg-4 d-flex flex-column justify-content-center">
            <h3 class="mb-3"><?php the_field('name_trainer_1'); ?></h3>
            <p><?php the_field('description_trainer_1'); ?></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="row g-4 mb-4 d-flex flex-column flex-md-row">
          <div class="col col-md-6 col-lg-5">
            <?php
            $image = get_field('image_trainer_2');
            if (!empty($image)) : ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
            <?php endif; ?>
          </div>
          <div class="col-md-6 col-lg-4 d-flex flex-column justify-content-center">
            <h3 class="mb-3"><?php the_field('name_trainer_2'); ?></h3>
            <p><?php the_field('description_trainer_2'); ?></p>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>


<div class="container">
  <?php get_template_part('testimonials') ?>
</div>


<?php get_template_part('subscribe_newsletter') ?>

<?php get_footer() ?>