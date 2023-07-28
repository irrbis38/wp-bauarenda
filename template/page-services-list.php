<?php
/*
  Template Name: ServicesList Template
*/

get_header();
?>


<main class="main">
  <section class="first services-list__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><span>Услуги</span></div>
          <h1 class="first__title intro__title">Услуги</h1>
          <p class="first__text intro__text">
            Выпало много снега, и Вы не знаете, что с ним делать? Накопился строительный мусор на объекте? Все это и многое другое легко решить, если обратить внимание на услуги
            компании «БауАренда». 12 лет успешной работы в сфере аренды оборудования специального назначения – лучшее подтверждение, что Вы обратились по адресу. В Вашем
            распоряжении огромный парк современной техники, с помощью которой можно выполнить самые различные задачи.

          </p>
          <button class="first__link btn__link btn__yellow rental__button" type="button">Получить консультацию</button>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-list.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-list@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-list.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-list.png, images/first/first-services-list@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="points">
    <div class="container">
      <h2 class="points__title block__title">Услуги, которые выполняет наша фирма</h2>
      <ul class="points__wrapper">
        <li>
          <p>Работаем не только в Минске, но и по всей Беларуси. К Вашим услугам 59 единиц полностью исправной техники. Если это необходимо, оборудование предоставляется вместе с
            опытным оператором. Наш главный принцип работы – создание комфортной среды для сотрудничества. Сделаем все, чтобы Вы порекомендовали нас своим партнерам.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/1.jpg"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/1.jpg, <?php echo bloginfo('template_url'); ?>/assets/images/services/1@2x.jpg 2x" alt="">
            </picture>
          </div>
        </li>
        <li>
          <h3>Вывоз и утилизация грунта</h3>
          <p>Мы поможем Вам вывезти грунт по самой низкой стоимости в Республике Беларусь.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.png 2x"
                alt="">
            </picture><span>Вывоз и утилизация грунта</span><a href="./services-item.html">Подробнее</a>
          </div>
        </li>
        <li>
          <h3>Бурение отверстий</h3>
          <p>Поможем пробурить в комфортное для Вас время и в любые погодные условия.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.png 2x"
                alt="">
            </picture><span>Бурение отверстий</span><a href="./services-item.html">Подробнее</a>
          </div>
        </li>
        <li>
          <h3>Уборка и вывоз снега</h3>
          <p>Вывоз снега с компанией «БауАренда» – больше не проблема. Поможем и с транспортировкой.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.png 2x"
                alt="">
            </picture><span>Уборка и вывоз снега</span><a href="./services-item.html">Подробнее</a>
          </div>
        </li>
        <li>
          <h3>Земляные работы</h3>
          <p>Мы поможем провести земляные работы любой сложности и в любое время года.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.png 2x"
                alt="">
            </picture><span>Земляные работы</span><a href="./services-item-subservices.html">Подробнее</a>
          </div>
        </li>
        <li>
          <h3>Вывоз строительного мусора</h3>
          <p>Мы поможем очистить строительную площадку от ненужного хлама.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.png 2x"
                alt="">
            </picture><span>Вывоз строительного мусора</span><a href="./services-item.html">Подробнее</a>
          </div>
        </li>
        <li>
          <h3>Доставка негабаритных грузов</h3>
          <p>Мы предлагаем своим клиентам самую оптимальную стоимость доставки в Беларуси.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.png 2x"
                alt="">
            </picture><span>Доставка негабаритных грузов</span><a href="./services-item.html">Подробнее</a>
          </div>
        </li>
        <li>
          <h3>Продажа строительного песка</h3>
          <p>Мы предлагаем поставку сырья для строительства. У песка нет альтернативной замены.</p>
          <div>
            <picture class="picture object-fit-cover">
              <source class="object-fit-cover"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.webp, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.webp 2x"
                type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png"
                srcset="<?php echo bloginfo('template_url'); ?>/assets/images/services/services1.png, <?php echo bloginfo('template_url'); ?>/assets/images/services/services1@2x.png 2x"
                alt="">
            </picture><span>Продажа строительного песка</span><a href="./services-item.html">Подробнее</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <?php
  get_template_part('template-parts/feedback-narrow');
  ?>

  <?php
  get_template_part('template-parts/advantage-services-price-part');
  ?>

  <?php
  get_template_part('template-parts/work-part');
  ?>

  <?php
  $reviews_params = ['posts_per_page' => 6];
  get_template_part('template-parts/reviews-part', null, $reviews_params);
  ?>


  <?php
  get_template_part('template-parts/feedback-wide');
  ?>

  <section class="company">
    <div class="container">
      <h2 class="company__title block__title">У нас можно арендовать спецтехнику</h2>
      <div class="company__wrapper">
        <div class="company__block">
          <div class="company__part"><span class="company__numbers">37</span>
            <div class="company__text">
              <p>единиц строительной техники</p>
            </div>
          </div>
          <div class="company__part"><span class="company__numbers">22</span>
            <div class="company__text">
              <p>единиц автотехники</p>
            </div>
          </div>
        </div>
        <div class="company__block">
          <div class="company__text company__text--white">
            <p>Стоит отметить, что аренда – весьма востребованная услуга. Это не случайно, ведь отпадает необходимость в покупке дорогостоящего оборудования. За небольшие деньги Вы
              можете выполнить все поставленные задачи. Не нужно обновлять и ремонтировать автопарк, беспокоиться о месте стоянки, выплачивать зарплату операторам и сервисным
              работникам. Все это берет на себя «БауАренда».</p>
          </div>
        </div>
        <div class="company__block">
          <div class="company__text company__text--white">
            <p>Мы не просто предлагаем спецтехнику, а делаем так, чтобы заказчик решил с нашей помощью все свои вопросы. Это значит, что сотрудники нашей компании готовы дать
              экспертную консультацию по поводу особенностей применения конкретных «представителей» автопарка. Подберем бульдозер с любым рабочим органом, предоставим в пользование
              фронтальный погрузчик – сделаем все, чтобы Вы остались довольны обращением к нам.</p>
          </div>
        </div>
        <div class="company__block">
          <div class="company__text">
            <h3>Стремимся найти взаимопонимание с клиентом</h3>
            <p>ведь только так можно добиться высокого уровня оказания услуг.</p>
          </div>
        </div>
        <div class="company__block">
          <div class="company__text">
            <h3>Работаем быстро, без промедлений</h3>
            <p>Ценим свое и чужое время. Вы сразу убедитесь в этом, обратившись к нам.</p>
          </div>
        </div>
      </div><a class="company__link btn__link btn__yellow" href="./rental.html">Аренда спецтехники</a>
    </div>
  </section>

  <?php
  get_template_part('template-parts/fixed-part');
  ?>
</main>


<?php
get_footer();
?>
