<?php
/*
  Template Name: Hotline Template
*/

get_header();
?>


<main class="main">
  <section class="first hotline__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a class="first__prev" href="<?php echo get_home_url(); ?>">Главная</a><a class="first__prev"
              href="<?php echo get_page_link(214) ?>">Контакты</a><span>Горячая линия</span></div>
          <h1 class="first__title intro__title">Горячая линия</h1>
          <p class="first__text intro__text">
            Мы создали горячую линию, чтобы Вам было легче сотрудничать с нашей компанией. Теперь узнать о решении проблем, аренде техники и сотрудничестве стало гораздо проще –
            ведь мы стали ещё ближе.

          </p><a class="first__link btn__link btn__yellow" href="./catalog.html">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-hotline.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-hotline@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-hotline.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-hotline.png, images/first/first-hotline@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="advantage hotline__advantage">
    <div class="container">
      <div class="advantage__container">
        <div class="advantage__main">
          <h2 class="advantage__title block__title">Есть проблемы или сложности?</h2>
          <div class="advantage__text">
            <p>Услуги нашей компании успешно охватили все сферы, где может понадобится специальная техника – от сложной стройки до сезонной уборки снега. </p>
            <p>У нас найдутся точки соприкосновения с любой компанией, которой вообще может потребоваться бульдозер, самосвал или погрузочный экскаватор. Не обошли мы вниманием и
              обычных людей – мы работаем с физическими лицами.</p>
            <p>Вы можете воспользоваться нашими услугами в любое комфортное время – мы работаем без выходных, круглые сутки, и мы будем рады Вам помочь.</p>
          </div>
        </div>
        <div class="advantage__wrapper">
          <div class="advantage__item">
            <div class="advantage__icon"><span class="icon svg-image-hotline1"></span>
            </div>
            <h4 class="advantage__header">Уважаемые клиенты и партнёры</h4>
            <p class="advantage__description">Данный раздел создан с целью улучшения качества сотрудничества с нашей компанией, и желанием руководства и собственников быть
              максимально ближе к вам.</p>
          </div>
          <div class="advantage__border"></div>
          <div class="advantage__item">
            <div class="advantage__icon"><span class="icon svg-image-hotline2"></span>
            </div>
            <h4 class="advantage__header">Есть проблемы или сложности?</h4>
            <p class="advantage__description">C сотрудниками нашего предприятия или у вас появились предложения, будем искренне признательны и благодарны, если вы нам об этом
              сообщите.</p>
          </div>
          <div class="advantage__item">
            <div class="advantage__icon"><span class="icon svg-image-hotline3"></span>
            </div>
            <h4 class="advantage__header">Напишите нам через данную форму</h4>
            <p class="advantage__description">Данная форма обратной связи, напрямую отправляет сообщение собственнику, в свою очередь, вам гарантирована полная конфиденциальность и
              молниеносная реакция на ваше обращение.</p>
          </div>
          <div class="advantage__border"></div>
          <div class="advantage__item">
            <div class="advantage__icon"><span class="icon svg-image-hotline4"></span>
            </div>
            <h4 class="advantage__header">Для желающих заказать сейчас</h4>
            <p class="advantage__description">Этот раздел создан специально для тех, кому техника «нужна ещё вчера». Наберите на линию, и мы договоримся.</p>
          </div>
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
