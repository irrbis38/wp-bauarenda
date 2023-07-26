<?php
/*
  Template Name: Our Clients Template
*/

get_header();
?>


<main class="main">
  <section class="first our-clients__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps"><a class="first__prev" href="./index.html">Главная</a><a class="first__prev" href="#">О компании</a><span class="first__current">Наши
              клиенты</span></div>
          <h1 class="first__title intro__title">Наши клиенты</h1>
          <p class="first__text intro__text">
            Здесь Вы можете ознакомиться с компаниями, которые давно пользуются нашими услугами и удовлетворены. Если Вы хотите быть в числе наших клиентов – свяжитесь с нами, мы
            детально обсудим условия сотрудничества.

          </p><a class="first__link btn__link btn__yellow" href="#">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-clients.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-clients@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-clients.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-clients.png, images/first/first-clients@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="partners">
    <div class="container">
      <h2 class="partners__title block__title">Чуть больше о партнёрах компании</h2>
      <div class="partners__wrapper">

        <?php
        $query_reviews = new WP_Query([
          'post_type' => 'clients',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC'
        ]);

        if ($query_reviews->have_posts()):
          while ($query_reviews->have_posts()):
            $query_reviews->the_post();
            ?>

            <div class="partners__item">
              <img class="partners__logo" src="<?php echo get_field('clients_logo'); ?>" alt=" <?php the_title(); ?>" />
              <div class="partners__info">
                <p class="partners__about">
                  <?php echo get_field('clients_about'); ?>
                </p>
                <a class="partners__link" href="<?php echo get_field('clients_link'); ?>" target="_blank">Перейти</a>
              </div>
            </div>



            <?php
          endwhile;
          wp_reset_postdata();

        endif;
        ?>

      </div>
      <div class="partners__text">
        <p>
          Все представленные здесь компании давно и успешно пользуются услугами аренды специальной техники от нашей компании и удовлетворены результатами. Постоянное сотрудничество
          с нами – это выгоды и преференции, которых не бывает при разовой аренде.

        </p>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/feedback-narrow');
  ?>

  <?php
  get_template_part('template-parts/popular-part');
  ?>


  <?php
  $reviews_params = ['posts_per_page' => 6];
  get_template_part('template-parts/reviews-part', null, $reviews_params);
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