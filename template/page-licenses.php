<?php
/*
  Template Name: Licenses Template
*/

get_header();
?>


<main class="main">
  <section class="first licenses__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><a href="<?php echo get_page_link(198) ?>">О компании</a><span>Лицензии и
              сертификаты</span>
          </div>
          <h1 class="first__title intro__title">Лицензии <br class="remove__md">и сертификаты</h1>
          <p class="first__text intro__text">
            Эта страница нашего сайта посвящена достижениям компании в целом и ее отдельных сотрудников. Здесь Вы увидите сертификаты и лицензии, официально подтверждающие
            профессионализм нашей команды. Убедитесь сами, в «БауАренда» Вам будут помогать только профессионалы.

          </p><a class="first__link btn__link btn__yellow" href="./catalog.html">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-licenses.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-licenses@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-licenses.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-licenses.png, images/first/first-licenses@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="infoBlock licenses__promotions">
    <div class="container">
      <h2 class="infoBlock__title block__title">Профессиональный подход к работе с техникой от «БауАренда»</h2>
      <div class="infoBlock__wrapper">
        <p>Наша работа подразумевает постоянное взаимодействие со сложной и дорогостоящей техникой. Это требует профильной подготовки штатных сотрудников, прежде всего, водителей и
          операторов. Вкладываться с постоянное обучение и подготовку персонала в этом бизнесе не менее важно, чем в приобретение собственно спецтехники.</p>
        <p>Каждый работник «БауАренда», ежедневно взаимодействующий со сложной техникой, проходит профильную подготовку перед получением допуска к работе. Кроме операторов, мы
          регулярно организуем обучение также и других сотрудников компании: менеджеров-консультантов, которые общаются с клиентами напрямую, механиков, ремонтников и т. д. Наш
          принцип — профессионализм во всем. Считаем, что качественный сервис возможно предоставить клиенту лишь тогда, когда каждый работник компании досконально разбирается в
          особенностях спецтехники, с которой мы работаем.</p>
        <p>Без знаний особенностей эксплуатационных характеристик, целевого назначения, нюансов обслуживания просто невозможно грамотно и полно проконсультировать заказчика и
          подобрать нужную спецтехнику для решения стоящих перед клиентом задач. А для «БауАренда» это центральный вопрос — суметь дать полную информацию и подобрать набор услуг,
          комплект техники, которая наилучшим образом решит проблему каждого клиента.</p>
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
