<?php
/*
  Template Name: Promotions Template
*/

get_header();
?>


<main class="main">
  <section class="first promotions__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><span>Акции</span></div>
          <h1 class="first__title intro__title">Акции</h1>
          <p class="first__text intro__text">
            Задача грамотно и профессионально распределить собственные ресурсы сегодня остро стоит перед любой компанией. Мы понимаем потребности клиентов, поэтому стремимся в
            любой ситуации предложить выгодные условия сотрудничества, используем в работе гибкую политику ценообразования.

          </p><a class="first__link btn__link btn__yellow" href="./catalog.html">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-promotions.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-promotions@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-promotions.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-promotions.png, images/first/first-promotions@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="promotions">
    <div class="container">
      <h2 class="promotions__title block__title">БауАренда - работа в удовольствие!</h2>
      <div class="promotions__wrapper">
        <div class="promotions__picture"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/promotions/promotions.png" alt="Акции"></div>
        <div class="promotions__info">
          <h3>Превосходное антикризисное предложение!</h3>
          <p>15% скидка - при заказе от трёх единиц техники в аренду.</p>
          <p>Работать с нами комфортно:</p>
          <ul>
            <li>7 дней в неделю;</li>
            <li>23 вида техники;</li>
            <li>100% качество.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="infoBlock infoBlock__promotions">
    <div class="container">
      <h2 class="infoBlock__title block__title">Получайте максимальную выгоду с акциями «БауАренда»</h2>
      <div class="infoBlock__wrapper">
        <p>На этой странице Вы найдете наиболее выгодные спецпредложения компании «БауАренда». Будьте внимательны и почаще посещайте этот раздел, чтобы не пропустить информацию о
          новых акционных предложениях. Каждая акция ограничена по времени, поэтому не упускайте шанса сэкономить на аренде профессиональной производительной спецтехники без потери
          качества. Рекомендуем добавить эту страницу в избранное или в закладки, чтобы быть в курсе действующих спецпредложений компании «БауАренда».</p>
        <p>Акционные предложения — это лучший вариант для новых клиентов познакомиться с возможностями и качеством обслуживания в «БауАренда» с максимальной выгодой. Минимум
          расходов и максимум результата. С нашими акциями возможности профессиональной спецтехники становятся доступными максимальному кругу клиентов, корпоративных и частных.</p>
        <p>Акции «БауАренда» расширяют границы возможного для всех, кому необходимы услуги профессиональной строительной или автомобильной техники.</p>
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
