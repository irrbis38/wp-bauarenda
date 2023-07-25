<?php
/**
 * Template part for reviews-part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>


<section class="reviews">
  <div class="container">
    <h2 class="reviews__title block__title">Отзывы</h2>
    <div class="reviews__slider-container">
      <div class="reviews__slider swiper">
        <div class="reviews__wrapper swiper-wrapper">

          <?php
          $query_reviews = new WP_Query([
            'post_type' => 'reviews',
            'posts_per_page' => $args['posts_per_page'],
            'orderby' => 'date',
            'order' => 'DESC'
          ]);

          if ($query_reviews->have_posts()):
            while ($query_reviews->have_posts()):
              $query_reviews->the_post();
              ?>

              <div class="reviews__item swiper-slide">
                <div class="reviews__preview">
                  <div class="reviews__img">
                    <img src="<?php echo get_field('reviews__img'); ?>" alt="<?php the_title(); ?>" />
                  </div>
                </div>
                <div class="reviews__info">
                  <h4 class="reviews__header">
                    <?php the_title(); ?>
                  </h4>
                  <p class="reviews__text">
                    <?php echo get_field('reviews__text'); ?>
                  </p>
                  <a class="reviews__link" href="#"></a>
                </div>
              </div>



              <?php
            endwhile;
            wp_reset_postdata();

          endif;
          ?>


        </div>
      </div>
      <div class="reviews__nav">
        <button class="reviews__prev"><span class="reviews__navButton"></span><img src="<?php echo bloginfo('template_url'); ?>/assets/images/intro/intro-prev.svg"
            alt="prev"></button>
        <button class="reviews__next"><span class="reviews__navButton"></span><img src="<?php echo bloginfo('template_url'); ?>/assets/images/intro/intro-next.svg"
            alt="next"></button>
      </div>
    </div>
  </div>
  <div class="reviews__pagination">
    <div class="reviews__dot"></div>
    <div class="reviews__dot"></div>
    <div class="reviews__dot"></div>
  </div>
  <div class="reviews__fullscreen">
    <div class="reviews__fullscreen-wrapper"><img class="reviews__fullscreen-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/reviews/rev1.png"
        alt="скриншот отзыва">
      <div class="reviews__fullscreen-closer">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.5 1.57617L22.5 22.5762M22.5 1.57617L1.5 22.5762" stroke="white" stroke-width="2"></path>
        </svg>
      </div>
    </div>
  </div>
</section>