<?php
/*
  Template Name: Our Partners Template
*/

get_header();
?>


<main class="main">
  <section class="first our-partners__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps"><a class="first__prev" href="<?php echo get_home_url(); ?>">Главная</a><a class="first__prev" href="<?php echo get_page_link(198) ?>">О
              компании</a><span class="first__current">Наши
              партнеры</span></div>
          <h1 class="first__title intro__title">Наши партнеры</h1>
          <p class="first__text intro__text">
            Эта страница познакомит Вас с бизнес-партнерами компании «БауАренда». Если Вы хотите быть в их числе, тогда присылайте нам свое коммерческое предложение, звоните и
            расскажите о возможностях своей компании, чем мы можем быть полезны друг другу. Компания «БауАренда» всегда открыта к конструктивному сотрудничеству. Ждем Ваших
            предложений!

          </p><a class="first__link btn__link btn__yellow" href="#">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-partners.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-partners@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-partners.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-clients.png, images/first/first-partners@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="partners">
    <div class="container">
      <h2 class="partners__title block__title">Узнайте больше о партнерах компании «БауАренда»</h2>
      <div class="partners__wrapper">


        <?php
        $query_reviews = new WP_Query([
          'post_type' => 'partners',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC'
        ]);

        if ($query_reviews->have_posts()):
          while ($query_reviews->have_posts()):
            $query_reviews->the_post();
            ?>

            <div class="partners__item">
              <img class="partners__logo" src="<?php echo get_field('partners_logo'); ?>" alt=" <?php the_title(); ?>" />
              <div class="partners__info">
                <p class="partners__about">
                  <?php echo get_field('partners_about'); ?>
                </p>
                <a class="partners__link" href="<?php echo get_field('partners_link'); ?>" target="_blank">Перейти</a>
              </div>
            </div>



            <?php
          endwhile;
          wp_reset_postdata();

        endif;
        ?>

      </div>
      <div class="partners__text">
        <p>Бизнес на рынке аренды спецтехники подразумевает высокую вовлеченность коллектива от директора до механика в процесс профильной работы. Ежедневно мы контролируем
          техническое состояние парка, заботимся о работоспособности и сервисном обслуживании техники, следим за соблюдением тайминга, принимаем и обрабатываем клиентские заявки.
        </p>
        <p>Сосредоточенность команды на профильной деятельности оставляет нам не так много времени на решение других вспомогательных задач, так же необходимых для полноценного
          функционирования компании. А ведь для этого фирме требуется профессиональное юридическое, бухгалтерское, маркетинговое и другое сопровождение, регулярные поставки
          запчастей, расходных материалов для работы техники.</p>
        <p>
          Мы не стремимся объять необъятное и просто поручаем выполнение этих функций нашим проверенным деловым партнерам, в которых мы уверены и хотим работать в одном ритме.
          Сильная и развитая сеть деловых партнеров — важное преимущество нашей компании. Благодаря отлаженным партнерским связям мы можем позволить себе сконцентрироваться на
          развитии и совершенствовании основной деятельности.

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