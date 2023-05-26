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
  <section class="feedback first__feedback">
    <div class="container">
      <div class="feedback__wrapper">
        <h2 class="feedback__title block__title">Обратная связь</h2>
        <p class="feedback__subtitle">Нет времени выбирать? Заполните заявку и сотрудник вас проконсультирует.</p>
        <form class="feedback__form" id="second" action="#" novalidate>
          <p class="error__message">Заполните все обязательные для заполнения поля. Номер телефона должен быть не короче 9 символов.</p>
          <div class="feedback__item">
            <input class="feedback__name" type="text" placeholder="Имя*" name="name" minlength="2" required>
          </div>
          <div class="feedback__item">
            <input class="feedback__phone" type="text" placeholder="Телефон*" name="phone" minlength="9" required>
          </div>
          <input class="feedback__submit btn__link btn__yellow" id="second_btn" type="submit" value="Отправить" name="submit">
        </form>
      </div>
    </div>
  </section>

  <?php
  $params = ['posts_per_page' => 4];
  get_template_part('template-parts/catalog', null, $params);
  ?>


  <?php
  $reviews_params = ['posts_per_page' => 6];
  get_template_part('template-parts/reviews', null, $reviews_params);
  ?>


  <section class="feedback second__feedback">
    <div class="container">
      <h2 class="feedback__title block__title">Обратная связь</h2>
      <p class="feedback__subtitle">Нет времени выбирать? Заполните заявку и сотрудник вас проконсультирует.</p>
      <form class="feedback__form" action="#" novalidate>
        <p class="error__message">Заполните все обязательные для заполнения поля. Номер телефона должен быть не короче 9 символов.</p>
        <div class="feedback__item">
          <input class="feedback__name" type="text" placeholder="Имя*" name="name" required>
        </div>
        <div class="feedback__item">
          <input class="feedback__phone" type="text" placeholder="Телефон*" name="phone" minlength="9" required>
        </div>
        <input class="feedback__submit btn__link btn__yellow" type="submit" value="Отправить" name="submit">
      </form>
    </div>
  </section>

  <?php
  get_template_part('template-parts/fixed');
  ?>

</main>


<?php

get_footer();
?>
