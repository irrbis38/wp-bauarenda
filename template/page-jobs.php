<?php
/*
  Template Name: Jobs Template
*/

get_header();
?>

<main class="main">
  <section class="first jobs__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><a href="<?php echo get_page_link(209) ?>">О
              компании</a><span>Вакансии</span></div>
          <h1 class="first__title intro__title">Вакансии</h1>
          <p class="first__text intro__text">
            Фирма «БауАренда» давно и хорошо известна на белорусском рынке аренды спецтехники как сильный игрок. Достичь такого успеха в столь специфической бизнес-нише нам помогла
            в числе прочего грамотная кадровая политика.

          </p><a class="first__link btn__link btn__yellow" href="./catalog.html">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-jobs.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-jobs@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-jobs.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-jobs.png, images/first/first-jobs@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="jobs">
    <div class="container">
      <h2 class="jobs__title block__title">Список актуальных вакансий в «БауАренда» и полезная советы претендентам</h2>
      <div class="jobs__about">
        <p>Работники фирмы «БауАренда» — это больше, чем группа людей, каждый из которых хорошо разбирается в своей профессии. На удалось сформировать слаженную команду, где
          ценится вклад каждого участника в общий результат. Задача кадровой политики компании «БауАренда» — поддерживать такие условия труда и микроклимат в коллективе, чтобы наши
          работники с гордостью говорили другим о том, что работают в «БакАренда».</p>
      </div>
      <div class="jobs__wrapper">
        <div class="jobs__block">
          <p>На этой странице мы публикуем информацию об открытых на данный момент вакансиях в компании. Но прежде, чем Вы перейдете к их изучению, рекомендуем внимательно
            ознакомиться с принципами кадровой политики компании. Прочитав их, Вы поймете, насколько комфортной будет для Вас работа в «БауАренда»:</p>
        </div>
        <div class="jobs__block">
          <h3>Официальное трудоустройство.</h3>
          <p>Машины доставляются на объект клиента вместе с подготовленным опытным экипажем, отвечающим за состояние техники и выполнение нужных заказчику работ.</p>
        </div>
        <div class="jobs__block">
          <h3>Конкурентный уровень заработной платы.</h3>
          <p>Эффективность работы техники прямо зависит от квалификации и опыта людей, которые с ней работают. Мы ценим опыт, навыки и умения своих работников, поэтому предлагаем
            конкурентную зарплату. Плюс положенные по закону надбавки и доплаты в случае переработок.</p>
        </div>
        <div class="jobs__block">
          <h3>Полноценная материально-техническая база.</h3>
          <p>Наш парк укомплектован современной мощной спецтехникой известных брендов, и мы наладили его снабжение всеми необходимыми запчастями, комплектующими, расходниками, ГСМ.
            Весь необходимый инвентарь и оборудование для обслуживания и ремонта техники у нас также в наличии.</p>
        </div>
        <div class="jobs__block">
          <h3>Ищем людей на постоянную работу.</h3>
          <p>Мы целенаправленно ищем людей, которые надолго станут неотъемлемой частью команды «БауАренда». Наша цель — долгосрочное трудоустройство, а не подработка или сезонная
            занятость. А для этого мы стремимся создать в компании максимально комфортные условия труда.</p>
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