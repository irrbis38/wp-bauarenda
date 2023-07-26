<?php
/*
  Template Name: Reviews Template
*/

get_header();
?>

<main class="main">

  <section class="first reviews__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><a href="<?php echo get_page_link(198) ?>">О
              компании</a><span>Отзывы</span></div>
          <h1 class="first__title intro__title">Отзывы</h1>
          <p class="first__text intro__text">
            На белорусском рынке аренды спецтехники работает пока не так много фирм, но все равно выбрать среди них компанию, которая точно не подведет, не просто. Неправильный
            выбор грозит не только негативными личными впечатлениями, но и потерями времени и денег, а порой и деловой репутации, что гораздо серьезнее.

          </p><a class="first__link btn__link btn__yellow" href="#">Каталог</a>
        </div>
        <div class="first__img">

          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-reviews.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-reviews@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-reviews.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-reviews.png, images/first/first-partners@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews-list">
    <div class="container">
      <h2 class="reviews-list__title block__title">Отзывы заказчиков услуг «БауАренда»</h2>
      <div class="reviews-list__wrapper">

        <?php
        $current = absint(max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page')));

        $query_reviews = new WP_Query([
          'post_type' => 'reviews',
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'DESC',
          'paged' => $current,
        ]);

        if ($query_reviews->have_posts()):
          while ($query_reviews->have_posts()):
            $query_reviews->the_post();
            ?>

            <div class="reviews__item swiper-slide">
              <div class="reviews__preview">
                <div class="reviews__img"><img src="<?php echo get_field('reviews__img'); ?>" alt="<?php the_title(); ?>" /></div>
              </div>
              <div class="reviews__info">
                <h4 class="reviews__header">
                  <?php the_title(); ?>
                </h4>
                <p class="reviews__text">
                  <?php echo get_field('reviews__text'); ?>
                </p>
              </div>
            </div>

            <?php

          endwhile;

          // pagination
        
          echo wp_kses_post(
            paginate_links(
              [
                'total' => $query_reviews->max_num_pages,
                'current' => $current,
                'show_all' => false,
                'end_size' => 1,
                'mid_size' => 2,
                'prev_next' => true,
                'prev_text' => '',
                'next_text' => '',
                'type' => 'list'
              ]
            )
          );

          wp_reset_postdata();

        endif;
        ?>


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
      </div>
  </section>

  <?php
  get_template_part('template-parts/feedback-narrow');
  ?>

  <section class="grateful">
    <div class="container">
      <h2 class="grateful__title block__title">Отзывы благодарных клиентов – постоянных и нет</h2>
      <div class="qrateful__wrapper">
        <p>Рассказывать о собственных достижениях и успехах недостаточно для того, чтобы клиенты выбор в нашу пользу. Конечно, мы понимаем, что в сегодняшних условиях жесткой
          конкуренции мало кто готов поверить на слово. Поэтому мы стремимся к тому, чтобы нас рекомендовали те, кто уже успел воспользоваться услугами компании «БауАренда» и
          оценить качество нашего сервиса. А недостатка в довольных клиентах, которые стали постоянными заказчиками, у нас нет.</p>
        <p>Поэтому мы приняли решение не расписывать долго и подробно свои достоинства, а предоставить слово тем, кто уже с нами работал и продолжает это делать. На этой странице
          сайта компании «БауАренда» мы собрали вместе отзывы, мнения и комментарии наших заказчиков об услугах компании. Изучая их, Вы увидите, в чем наши сильные стороны, почему
          компании и частные клиенты выбирают нас, чем наш сервис отличается от предложений других фирм, работающих в сфере аренды спецтехники.</p>
        <p>Отзыв каждого клиента для нас — подтверждение того, что мы выбрали верный подход к ведению бизнеса. Попробуйте — и Вы убедитесь в справедливости этих слов.</p>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/popular-part');
  ?>

  <?php
  get_template_part('template-parts/feedback-wide');
  ?>

  <?php
  get_template_part('template-parts/fixed-part');
  ?>

</main>


<?php

get_footer();
?>