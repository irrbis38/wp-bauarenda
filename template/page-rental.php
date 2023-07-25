<?php
/*
  Template Name: Rental Template
*/

get_header();
?>


<main class="main">
  <section class="first rental__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><span>Услуги строительной техники</span></div>
          <h1 class="first__title intro__title">Услуги строительной техники</h1>
          <p class="first__text intro__text">
            Необходимость в аренде дорожно-строительной техники может возникнуть в следующих случаях: у физических лиц – разовое производство земляных работ, у юридических лиц –
            отсутствие собственного парка техники, необходимость в сжатые сроки нарастить производственные мощности, тестирование техники перед покупкой.

          </p>
          <button class="first__link btn__link btn__yellow rental__button">Заказать технику</button>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental-main.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental-main@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental-main.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental-main.png, images/first/first-rental-main@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="park">
    <div class="container">
      <h2 class="park__title block__title">Наш парк техники</h2>
      <div class="park__container">
        <div class="park__block">
          <h3 class="park__category"><a href="./catalog.html">Землеройная техника</a></h3>
          <div class="park__wrapper">
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental1-1.png" alt="Бульдозеры" /></div>
              <p class="park__name">Бульдозеры</p>
              <p class="park__price">70 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental1-2.png" alt="Буры" /></div>
              <p class="park__name">Буры</p>
              <p class="park__price">от 120 BYN в час</p>
              <p class="park__amount">4 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental1-3.png" alt="Мини техника" /></div>
              <p class="park__name">Мини техника</p>
              <p class="park__price">от 50 BYN в час</p>
              <p class="park__amount">34 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental1-4.png" alt="Колесные экскаваторы" /></div>
              <p class="park__name">Колесные экскаваторы</p>
              <p class="park__price">от 60 BYN в час</p>
              <p class="park__amount">40 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental1-5.png" alt="Аренда гусеничного экскаватора" /></div>
              <p class="park__name">Аренда гусеничного экскаватора</p>
              <p class="park__price">65 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental1-6.png" alt="Аренда гидромолота" /></div>
              <p class="park__name">Аренда гидромолота</p>
              <p class="park__price">70 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
          </div>
        </div>
        <div class="park__block">
          <h3 class="park__category"><a href="./catalog.html">Грузоподъемная техника</a></h3>
          <div class="park__wrapper">
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental2-1.png" alt="Аренда автокрана" /></div>
              <p class="park__name">Аренда автокрана</p>
              <p class="park__price">280 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
          </div>
        </div>
        <div class="park__block">
          <h3 class="park__category"><a href="./catalog.html">Грузовой транспорт</a></h3>
          <div class="park__wrapper">
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental3-1.png" alt="Самосвалы" /></div>
              <p class="park__name">Самосвалы</p>
              <p class="park__price">от 65 BYN в час</p>
              <p class="park__amount">8 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental3-1.png" alt="Тралы и низкорамные площадки" /></div>
              <p class="park__name">Тралы и низкорамные площадки</p>
              <p class="park__price">от 100 BYN в час</p>
              <p class="park__amount">4 предложения</p>
            </div>
          </div>
        </div>
        <div class="park__block">
          <h3 class="park__category"><a href="./catalog.html">Дорожная техника</a></h3>
          <div class="park__wrapper">
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental4-1.png" alt="Аренда катка" /></div>
              <p class="park__name">Аренда катка</p>
              <p class="park__price">65 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental4-2.png" alt="Аренда автогрейдера" /></div>
              <p class="park__name">Аренда автогрейдера</p>
              <p class="park__price">70 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
          </div>
        </div>
        <div class="park__block">
          <h3 class="park__category"><a href="./catalog.html">Погрузочная техника</a></h3>
          <div class="park__wrapper">
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental5-1.png" alt="Аренда телескопического погрузчика" /></div>
              <p class="park__name">Аренда телескопического погрузчика</p>
              <p class="park__price">70 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental5-2.png" alt="Колесные экскаваторы" /></div>
              <p class="park__name">Колесные экскаваторы</p>
              <p class="park__price">60 BYN в час</p>
              <p class="park__amount">26 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental5-3.png" alt="Фронтальные погрузчики" /></div>
              <p class="park__name">Фронтальные погрузчики</p>
              <p class="park__price">от 50 BYN в час</p>
              <p class="park__amount">16 предложений</p>
            </div>
            <div class="park__item">
              <div class="park__image"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/rental/rental5-4.png" alt="Экскаваторы-погрузчики" /></div>
              <p class="park__name">Экскаваторы-погрузчики</p>
              <p class="park__price">70 BYN в час</p>
              <p class="park__amount">36 предложений</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/feedback-narrow');
  ?>

  <section class="infoBlock rental__infoBlock">
    <div class="container">
      <h2 class="infoBlock__title block__title">Аренда различной строительной техники</h2>
      <div class="infoBlock__wrapper">
        <p>Рынок аренды техники с каждым годом растет, а сама услуга приобретает все большую популярность. Это можно объяснить следующими причинами:</p>
        <ul>
          <li>Фиксированная стоимость аренды землеройной техники позволяет прогнозировать и контролировать расходы.</li>
          <li>Возможность увеличить производственные мощности в пиковые периоды.</li>
          <li>Отсутствие собственного парка спецтехники избавляет от множества проблем: не нужно иметь собственные ремонтные мастерские и стояночные места, вести учет работ по
            техническому сервису и платить налоги на имущество.</li>
        </ul>
        <p>Сфера применения землеройной техники достаточно широка. Без нее не обойтись при бурении скважин, разработке фундаментов и траншей, снятии плодородного слоя грунта,
          прокладки транспортных путей, возведении и реконструкции инженерных сооружений, планировке участка перед началом строительных работ, подготовке территорий для добычи
          природных ресурсов. Компания «БауАренда» предлагает строительную технику в аренду в Минске: экскаваторы, бульдозеры, ямобуры, экскаваторы-погрузчики, гидромолоты,
          самосвалы. Техника подается на объект в технически исправном состоянии, с необходимым навесным оборудованием, квалифицированным машинистом и достаточным запасом горючего.
          При аренде землеройной техники на долгосрочный период действует система скидок. Если у вас остались какие-либо вопросы – звоните нам прямо сейчас и мы с радостью на них
          ответим.</p>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/video-part');
  ?>

  <?php
  get_template_part('template-parts/causes-part');
  ?>

  <?php
  get_template_part('template-parts/feedback-wide');
  ?>

  <?php
  get_template_part('template-parts/advantage-part');
  ?>

  <?php
  get_template_part('template-parts/popular-part');
  ?>

  <?php
  get_template_part('template-parts/qa-part');
  ?>

  <?php
  $reviews_params = ['posts_per_page' => 6];
  get_template_part('template-parts/reviews-part', null, $reviews_params);
  ?>


  <?php
  get_template_part('template-parts/fixed-part');
  ?>

</main>

<?php
get_footer();
?>
