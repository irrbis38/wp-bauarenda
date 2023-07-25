<?php
/**
 * Template part for popular-part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>

<section class="popular">
  <div class="container">
    <h2 class="popular__title block__title">Популярная техника</h2>
    <div class="popular__wrapper">

      <?php
      $query_posts = new WP_Query([
        'post_type' => 'technics',
        'posts_per_page' => 4,
        'cat_tech' => 'tippers'
      ]);

      if ($query_posts->have_posts()):

        while ($query_posts->have_posts()):
          $query_posts->the_post();

          // get_template_part('template-parts/catalog-card');
      
          ?>

          <div class="catalog__card card">
            <div class="card__picture"> <img src="<?php echo get_field('card_image'); ?>" alt=<?php the_title(); ?> /></div>
            <div class="card__info">
              <h4 class="card__title">
                <?php the_title(); ?>
              </h4>
              <div class="card__features">
                <div class="card__feature"><span class="card__featureName">
                    <?php echo get_field_object('featureValue1')['label']; ?>
                  </span><span class="card__valueName">
                    <?php echo get_field('featureValue1'); ?>
                    <?php echo get_field_object('featureValue1')['append']; ?>
                  </span></div>
                <div class="card__feature"><span class="card__featureName">
                    <?php echo get_field_object('featureValue2')['label']; ?>
                  </span><span class="card__valueName">
                    <?php echo get_field('featureValue2'); ?>
                    <?php echo get_field_object('featureValue2')['append']; ?>
                  </span></div>
                <div class="card__feature"><span class="card__featureName">
                    <?php echo get_field_object('featureValue3')['label']; ?>
                  </span><span class="card__valueName">
                    <?php echo get_field('featureValue3'); ?>
                    <?php echo get_field_object('featureValue3')['append']; ?>
                  </span></div>
                <div class="card__feature"><span class="card__featureName">
                    <?php echo get_field_object('featureValue4')['label']; ?>
                  </span><span class="card__valueName">
                    <?php echo get_field('featureValue4'); ?>
                    <?php echo get_field_object('featureValue4')['append']; ?>
                  </span></div>
                <div class="card__feature"><span class="card__featureName">
                    <?php echo get_field_object('featureValue5')['label']; ?>
                  </span><span class="card__valueName">
                    <?php echo get_field('featureValue5'); ?>
                    <?php echo get_field_object('featureValue5')['append']; ?>
                  </span></div>
              </div>
              <div class="card__prices">
                <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">
                    <?php echo get_field('price_per_hour'); ?> BYN
                  </span></div>
                <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">
                    <?php echo get_field('price_per_shift'); ?> BYN
                  </span></div>
              </div>
              <a class="card__button btn__link btn__yellow" href="#">Арендовать</a>
            </div>
          </div>

          <?php

        endwhile;
        wp_reset_postdata();

      endif;
      ?>


    </div>
  </div>
</section>
