<?php
/*
  Template Name: Company Template
*/

get_header();
?>


<main class="main">
  <section class="first company__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><span>О компании</span></div>
          <h1 class="first__title intro__title">О компании</h1>
          <p class="first__text intro__text">
            Компания «БауАренда» уже много лет работает на рынке. Мы не просто оказываем услуги по аренде техники, мы задаем тон всем остальным, своей деятельностью наглядно
            демонстрируя европейский уровень взаимодействия с клиентами. Каждый обратившийся может рассчитывать на всестороннюю поддержку с нашей стороны. Если Вам нужен бульдозер,
            каток, гидромолот и т.д. – точки соприкосновения непременно найдутся. Просто свяжитесь с нами и озвучьте особенности своего проекта.

          </p><a class="first__link btn__link btn__yellow" href="./catalog.html">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-company.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-company@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-company.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-company.png, images/first/first-company@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="company">
    <div class="container">
      <h2 class="company__title block__title">У нас собственный парк техники:</h2>
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
      </div>
    </div>
  </section>

  <section class="services-list">
    <div class="container">
      <h2 class="services-list__title block__title">Список оказываемых услуг</h2>
      <div class="services-list__wrapper">
        <div class="services-list__block">
          <p>Мы работаем не только в столице, но и на всей территории Беларуси. К услугам наших клиентов – более 50 единиц исправной и готовой к работе техники. При необходимости
            мы предоставляем клиентам сотрудника, готового помочь с управлением. Мы годами делаем всё, чтобы клиент оставался доволен.</p>
        </div>
        <div class="services-list__block">
          <h3>Уборка и вывоз снега</h3>
          <p>Вывоз снега с компанией «БауАренда» – больше не проблема. Поможем и с транспортировкой.</p>
        </div>
        <div class="services-list__block">
          <h3>Вывоз и утилизация грунта</h3>
          <p>Мы поможем Вам вывезти грунт по самой низкой стоимости в Республике Беларусь.</p>
        </div>
        <div class="services-list__block">
          <h3>Земляные работы</h3>
          <p>Мы поможем провести земляные работы любой сложности и в любое время года.</p>
        </div>
        <div class="services-list__block">
          <h3>Бурение отверстий</h3>
          <p>Поможем пробурить в комфортное для Вас время и в любые погодные условия.</p>
        </div>
        <div class="services-list__block">
          <h3>Продажа строительного песка</h3>
          <p>Мы предлагаем поставку сырья для строительства. У песка нет альтернативной замены.</p>
        </div>
        <div class="services-list__block">
          <h3>Вывоз строительного мусора</h3>
          <p>Мы поможем очистить строительную площадку от ненужного хлама.</p>
        </div>
        <div class="services-list__block">
          <h3>Доставка негабаритных грузов</h3>
          <p>Мы предлагаем своим клиентам самую оптимальную стоимость доставки в Беларуси.</p>
        </div>
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