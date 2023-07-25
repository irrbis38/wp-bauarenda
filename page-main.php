<?php
/*
  Template Name: Main Page Template
*/

get_header();
?>

<main class="main">
  <section class="intro index__page">
    <div class="container">
      <div class="intro__wrapper">
        <div class="intro__about">
          <h1 class="intro__title">Аренда строительной техники</h1><a class="intro__link btn__link btn__yellow" href="#">Каталог</a>
        </div>
        <div class="intro__info">
          <div class="intro__slider swiper">
            <div class="intro__block swiper-wrapper">
              <div class="intro__slide swiper-slide">
                <h3 class="intro__header">37 единиц спецтехники для вас</h3>
                <p class="intro__text">Компания «БауАренда» предлагает строительную технику в аренду в Минске: экскаваторы, бульдозеры, ямобуры, экскаваторы-погрузчики,
                  гидромолоты, самосвалы.</p>
              </div>
              <div class="intro__slide swiper-slide">
                <h3 class="intro__header">Аренда экскаваторов по выгодным ценам</h3>
                <p class="intro__text">Компания «Бауаренда» всегда готова предложить вам аренду строительной техники в широком ассортименте по выгодным ценам.</p>
              </div>
              <div class="intro__slide swiper-slide">
                <h3 class="intro__header">Скидка 15% при заказе от трех единиц техники</h3>
                <p class="intro__text">5% скидка - при заказе от трёх единиц техники в аренду. Работать с нами комфортно: 7 дней в неделю; 22 вида техники; 100% качество.</p>
              </div>
            </div>
            <div class="intro__nav">
              <button class="intro__prev"><span class="intro__navButton"></span><img src="<?php echo bloginfo('template_url'); ?>/assets/images/intro/intro-prev.svg"
                  alt="prev"></button>
              <button class="intro__next"><span class="intro__navButton"></span><img src="<?php echo bloginfo('template_url'); ?>/assets/images/intro/intro-next.svg"
                  alt="next"></button>
            </div>
          </div>
          <div class="intro__news">

            <?php
            // get current date to next compare
            $today = getdate();
            $day = ($today['mday'] < 10) ? "0" . $today['mday'] : $today['mday'];
            $month = ($today['mon'] < 10) ? "0" . $today['mon'] : $today['mon'];
            $year = $today["year"];
            $current_date = "$day.$month.$year";
            ?>

            <?php
            $query_news = new WP_Query([
              'post_type' => 'news',
              'posts_per_page' => 1,
              'orderby' => 'date',
              'order' => 'DESC'
            ]);

            if ($query_news->have_posts()):
              while ($query_news->have_posts()):
                $query_news->the_post();
                ?>

                <div class="intro__category"><a href="#">Новости</a></div>
                <h3 class="intro__name"><a href="#">
                    <?php the_title(); ?>
                  </a></h3>
                <div class="intro__statistics">
                  <p class="intro__posted">


                    <?php
                    $publish_date = get_the_date('d.m.Y');
                    $publish_date === $current_date ? print 'сегодня' : the_time('d.m.Y');
                    ?>
                    <?php
                    the_time('H:i');
                    ?>
                  </p>
                  <div class="intro__stat">
                    <p class="intro__watches"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/intro/watches.svg" alt=""><span>236</span></p>
                    <p class="intro__likes"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/intro/comment.svg" alt=""><span>0</span></p>
                  </div>
                </div>

                <?php
              endwhile;
              wp_reset_postdata();

            endif;
            ?>




          </div>
          <div class="intro__promotion">
            <p class="intro__category"><a href="#">Акции</a></p>
            <h3 class="intro__name"><a href="#">15% скидка - при заказе от трёх единиц техники в аренду.</a></h3>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
  get_template_part('template-parts/fixed');
  ?>


  <section class="technics">
    <div class="container">
      <h2 class="technics__title block__title">Наша спецтехника</h2>
      <div class="technics__wrapper">
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/1.png" alt="Бульдозеры" /></div>
          <p class="technics__name">Бульдозеры</p>
          <p class="technics__price">70 BYN в час</p>
          <p class="technics__offers">26 предложений</p>
        </div>
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/2.png" alt="Буры" /></div>
          <p class="technics__name">Буры</p>
          <p class="technics__price">от 120 BYN в час</p>
          <p class="technics__offers">4 предложения</p>
        </div>
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/3.png" alt="Мини техника" /></div>
          <p class="technics__name">Мини техника</p>
          <p class="technics__price">от 50 BYN в час</p>
          <p class="technics__offers">34 предложения</p>
        </div>
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/4.png" alt="Самосвалы" /></div>
          <p class="technics__name">Самосвалы</p>
          <p class="technics__price">от 65 BYN в час</p>
          <p class="technics__offers">8 предложений</p>
        </div>
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/5.png" alt="Тралы и низкорамные площадки" /></div>
          <p class="technics__name">Тралы и низкорамные площадки</p>
          <p class="technics__price">от 100 BYN в час</p>
          <p class="technics__offers">4 предложений</p>
        </div>
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/6.png" alt="Фронтальные погрузчики" /></div>
          <p class="technics__name">Фронтальные погрузчики</p>
          <p class="technics__price">от 50 BYN в час</p>
          <p class="technics__offers">16 предложений</p>
        </div>
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/7.png" alt="Колесные экскаваторы" /></div>
          <p class="technics__name">Колесные экскаваторы</p>
          <p class="technics__price">от 60 BYN в час</p>
          <p class="technics__offers">40 предложений</p>
        </div>
        <div class="technics__item"><a href="#"></a>
          <div class="technics__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/technics/8.png" alt="Экскаваторы-погрузчики" /></div>
          <p class="technics__name">Экскаваторы-погрузчики</p>
          <p class="technics__price">от 70 BYN в час</p>
          <p class="technics__offers">36 предложений</p>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="container">
      <h2 class="about__title block__title">Главное о нас</h2>
      <div class="about__wrapper">
        <div class="about__top element-animation">
          <div class="about__light">
            <div class="about__first">
              <p class="about__number">37</p>
              <p class="about__text">единиц строительной техники</p>
              <p class="about__number">22</p>
              <p class="about__text">единицы автотехники</p>
            </div>
            <div class="about__second">
              <p>У нас каждый заказчик найдет технику, подходящую для решения собственных задач. Экскаваторы, погрузчики, бульдозеры, самосвалы, строительства зданий, дорог,
                земляных работ — все это найдется в ассортименте спецтехники «БауАренда».</p>
            </div>
          </div>
          <div class="about__dark">
            <h4 class="about__subtitle">Взаимопонимание с клиентом</h4>
            <p class="about__description">Стремимся найти взаимопонимание с клиентом, ведь только так можно добиться высокого уровня оказания услуг.</p>
          </div>
        </div>
        <div class="about__bottom element-animation">
          <div class="about__dark">
            <h4 class="about__subtitle">Работаем быстро</h4>
            <p class="about__description">Работаем быстро, без промедлений. Ценим свое и чужое время. Вы сразу убедитесь в этом, обратившись к нам.</p>
          </div>
          <div class="about__light">
            <div class="about__first">
              <h4>Работаем по всей Беларуси</h4><img src="<?php echo bloginfo('template_url'); ?>/assets/images/about/about-map.svg" alt="map">
            </div>
            <div class="about__second">
              <p>С нами воспользоваться нужной спецтехникой могут клиенты по всей Беларуси, а не только жители столицы и ее пригородов. Звоните и заказывайте технику, нужную для
                решения Ваших задач, и мы доставим ее в любую точку страны.</p>
            </div>
          </div>
        </div>
      </div><a class="about__link btn__link btn__yellow" href="#">Подробнее</a>
    </div>
  </section>


  <?php
  $params = ['posts_per_page' => 12];
  get_template_part('template-parts/catalog', null, $params);
  ?>

  <?php
  get_template_part('template-parts/feedback-narrow');
  ?>

  <section class="services">
    <div class="container">
      <h2 class="services__title block__title">Услуги, которые выполняет наша фирма</h2>
      <div class="services__wrapper">
        <div class="services__item services1 element-animation">
          <div class="services__item-bg"></div>
          <div class="services__info">
            <h4 class="services__header">Все услуги</h4>
            <p class="services__text">Работаем не только в Минске, но и по всей Беларуси. К Вашим услугам 59 единиц полностью исправной техники.</p>
          </div>
        </div>
        <div class="services__item services2 element-animation">
          <div class="services__info">
            <h4 class="services__header">Уборка и вывоз снега для утилизации</h4>
            <p class="services__text">Компания «БауАренда» оказывает услуги по уборке снега в Минске круглосуточно и ежедневно.</p>
          </div>
        </div>
        <div class="services__item services3 element-animation">
          <div class="services__info">
            <h4 class="services__header">Вывоз мусора со стройплощадки</h4>
            <p class="services__text">Если вам нужно срочно вывезти строительный мусор компания «Бауаренда» поможет вам.</p>
          </div>
        </div>
        <div class="services__item services4 element-animation">
          <div class="services__info">
            <h4 class="services__header">Вывоз и утилизация грунта</h4>
            <p class="services__text">Мы предлагаем самую низкую стоимость вывоза грунта за куб в Минске и области при традиционно высоком качестве оказываемых услуг.</p>
          </div>
        </div>
        <div class="services__item services5 element-animation">
          <div class="services__info">
            <h4 class="services__header">Продажа строительного песка</h4>
            <p class="services__text">Компания «БауАренда» поставляет поставку сырья, для которого нет альтернативной замены.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="advantage">
    <div class="container">
      <div class="advantage__container">
        <div class="advantage__main">
          <h2 class="advantage__title block__title">Аренда спецтехники у нас - выгодно и надежно</h2>
          <p class="advantage__text">Аренда спецтехники – профильное направление работы для компании «БауАренда». Качество наших услуг аренды спецтехники успели справедливо оценить
            сотни компаний и частных заказчиков. Благодаря этому, за время работы мы обзавелись широким кругом постоянных клиентов и деловых партнеров. А это лучший маркер и
            объективное свидетельство успеха компании, правильно выбранного подхода к ведению бизнеса.</p><a class="advantage__link btn__link btn__yellow" href="#">Подробнее</a>
        </div>
        <div class="advantage__wrapper">
          <div class="advantage__item">
            <div class="advantage__icon"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/advantage/1.svg" alt="преимущество"></div>
            <h4 class="advantage__header">100% компетентный персонал</h4>
            <p class="advantage__description">Все наши машинисты обладают профильным образованием и имеют весомый опыт работы</p>
          </div>
          <div class="advantage__border"></div>
          <div class="advantage__item">
            <div class="advantage__icon"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/advantage/2.svg" alt="преимущество"></div>
            <h4 class="advantage__header">24/7 мы работаем всегда!</h4>
            <p class="advantage__description">Мы понимаем, что оперативность в строительстве очень важны.</p>
          </div>
          <div class="advantage__item">
            <div class="advantage__icon"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/advantage/3.svg" alt="преимущество"></div>
            <h4 class="advantage__header">40% экономии</h4>
            <p class="advantage__description">Наши клиенты получают очень выгодные скидки.</p>
          </div>
          <div class="advantage__border"></div>
          <div class="advantage__item">
            <div class="advantage__icon"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/advantage/4.svg" alt="преимущество"></div>
            <h4 class="advantage__header">37 наименований спецтехники</h4>
            <p class="advantage__description">Наш парк состоит из 37 различных единиц спецтехники.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="news">

    <div class="container">
      <h2 class="news__title block__title">Новости</h2>
      <div class="news__wrapper">

        <?php
        $query_news = new WP_Query([
          'post_type' => 'news',
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC'
        ]);

        if ($query_news->have_posts()):
          while ($query_news->have_posts()):
            $query_news->the_post();
            ?>


            <div class="news__item">
              <h4 class="news__header"><a href="#">
                  <?php the_title(); ?>
                </a></h4>
              <div class="news__info">
                <p class="news__published">
                  <?php
                  $publish_date = get_the_date('d.m.Y');
                  $publish_date === $current_date ? print 'сегодня' : the_time('d.m.Y');
                  ?>
                  <?php
                  the_time('H:i');
                  ?>
                </p>
                <div class="news__statistics">
                  <div class="news__views"><img class="news__icon" src="<?php echo bloginfo('template_url'); ?>/assets/images/news/view.svg"
                      alt="количество просмотров"><span>236</span></div>
                  <div class="news__comments"><img class="news__icon" src="<?php echo bloginfo('template_url'); ?>/assets/images/news/comment.svg"
                      alt="количество просмотров"><span>0</span></div>
                </div>
              </div>
            </div>



            <?php
          endwhile;
          wp_reset_postdata();

        endif;
        ?>

      </div>
      <a class="news__more btn__link btn__grey" href="#">Посмотреть все</a>
    </div>
  </section>
  <section class="brands">
    <div class="container">
      <h2 class="brands__title block__title">В нашем распоряжении машины лучших мировых производителей</h2>
      <div class="brands__wrapper">
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/1.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/2.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/3.svg" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/4.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/5.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/6.svg" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/7.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/8.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/9.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/10.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/11.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/12.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/13.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/14.png" alt="logo" /></div>
        <div class="brands__item"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/brands/15.png" alt="logo" /></div>
      </div>
    </div>
  </section>
  <section class="need">
    <div class="container">
      <h2 class="need__title block__title">В каких случаях необходима аренда специализированных машин</h2>
      <p class="need__text">Аренда, перевозка спецтехники требуется в самых разнообразных ситуациях и не только на стройплощадке. Специализированная техника применяется в следующих
        отраслях:</p>
      <div class="need__wrapper">
        <ul class="need__list">
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>земляные работы;</span></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>сельское хозяйство;</span></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>лесное хозяйство;</span></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>подготовка участка к строительству;</span></li>
        </ul>
        <ul class="need__list">
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>дорожное строительство;</span></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>возведение жилой, коммерческой недвижимости, промышленных
              объектов;</span>
          </li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>проведение коммуникаций;</span></li>
          <li><img src="<?php echo bloginfo('template_url'); ?>/assets/images/need/line.svg" alt=""><span>монтаж в системах электро-, водо- и теплоснабжения.</span></li>
        </ul>
      </div>
      <p class="need__text">Специализированные машины помогают фирмам-застройщикам оперативно выполнять большие объемы работ в строительстве и других отраслях без больших
        трудозатрат и финансовых издержек. В компании «БауАренда» взять в аренду спецтехнику могут как предприятия и организации, так и клиенты-физические лица.</p>
      <p class="need__text">Мы доставим заказанную технику к оговоренному времени в любую точку Беларуси. Схему расчета стоимости услуг Вы выбираете сами (за каждый час или
        посменно). У компании «БауАренда» собственный парк спецтехники для строительства и земляных работ, состоящий из 59 мощных производительных машин, готовых к работе в любое
        время.</p>
    </div>
  </section>

  <?php
  get_template_part('template-parts/causes');
  ?>

  <section class="reasons">
    <div class="container">
      <h2 class="reasons__title block__title">Почему аренда специальной техники - это выгодно?</h2>
      <div class="reasons__wrapper">
        <div class="reasons__item reason1 element-animation">
          <p class="reasons__text">Услуги аренды спецтехники юридическим лицам и частным клиентам — простое и выгодное решение для выполнения любых работ в строительстве и не
            только, где нужно специализированное дорогостоящее оборудование. При небольших вложениях Вы сможете подобрать все нужные виды машин и уложиться в утвержденный график
            работ.</p>
          <p class="reasons__text">Компания «БауАренда» с готовностью идет навстречу пожеланиям клиентов, поэтому аренда спецтехники в нашей фирме ведется на привлекательных
            условиях:</p>
        </div>
        <div class="reasons__item reason2 element-animation">
          <p class="reasons__number">01</p>
          <p class="reasons__text">Машины доставляются на объект клиента вместе с подготовленным опытным экипажем, отвечающим за состояние техники и выполнение нужных заказчику
            работ.</p>
        </div>
        <div class="reasons__item reason3 element-animation">
          <p class="reasons__number">02</p>
          <p class="reasons__text">Цена аренды спецтехники рассчитывается индивидуально, исходя из продолжительности проката. Чем дольше срок аренды оборудования, тем выгоднее
            стоимость услуг в расчете на час работы.</p>
        </div>
        <div class="reasons__item reason4 element-animation">
          <p class="reasons__number">03</p>
          <p class="reasons__text">Машины доставляются в полностью исправном техническом состоянии, заправленные достаточным объемом топлива, с полным набором навесного
            оборудования, указанного в договоре.</p>
        </div>
        <div class="reasons__item reason5 element-animation">
          <p class="reasons__number">04</p>
          <p class="reasons__text">Аренда строительной техники и других спецмашин доступна на различные сроки от нескольких часов до нескольких лет.</p>
        </div>
      </div>
      <p class="reasons__posttext">Отличительная особенность компании «БауАренда» – готовность к обсуждению условий взаимовыгодного сотрудничества индивидуально с каждым клиентом.
        Широкий выбор типов и моделей оборудования в сочетании с гибкой ценовой политикой помогают нам подобрать для каждого клиента оптимальную схему сотрудничества, выгодную
        каждой стороне.</p>
    </div>
  </section>
  <section class="machines">
    <div class="container">
      <h2 class="machines__title block__title">Большой выбор арендной техники в парке «БауАренда»</h2>
      <div class="machines__intro">
        <div class="machines__intro-bg"></div>
        <h3 class="machines__header">Вся техника</h3>
        <p class="machines__subheader">Компания «БауАренда» располагает собственным парком специализированного оборудования для строительных и других работ. К услугам наших
          клиентов производительные и полностью готовые к работе</p>
      </div>
      <div class="machines__wrapper">
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Экскаваторы-погрузчики</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Автосамосвалы</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Бульдозеры</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Погрузчики</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Экскаваторы</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Грунтовые катки</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Низкорамные площадки и тралы</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Автокраны</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Автогрейдеры</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Гидромолоты</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Ямобуры</p>
        </div>
        <div class="machines__item"><a class="machines__link" href="#"></a>
          <p class="machines__name">Мини-техника</p>
        </div>
      </div>
      <p class="machines__text">Всего в нашем парке 59 единиц техники, которая способна решить любые задачи от разработки грунта до перевозки негабаритных грузов, нуждающихся в
        особо бережной транспортировке. Мы работаем напрямую без посредников, что позволяет нам предлагать клиентам привлекательные условия сотрудничества и доступные цены.</p>
      <p class="machines__text">Если Вам нужны услуги мощной современной спецтехники, тогда смело обращайтесь к нам. Мы не только доставим оборудование в срок на Ваш объект, но и
        поможем определиться, какие модели машин лучше всего подойдут для решения поставленной задачи. Исходя из особенностей объекта, его расположения и подъездных путей,
        специфики работ мы подберем для Вас оптимальные варианты арендной техники, чтобы Вы смогли успешно справиться с работами и не переплачивали, если задачу можно решить с
        помощью бюджетных моделей.</p>
      <p class="machines__text">Воспользуйтесь преимуществами аренды спецтехники от компании «БауАренда», чтобы не покупать дорогостоящую технику для выполнения разовых работ.
        Позвоните нам по телефону, напишите на электронную почту или в мессенджеры, либо заполните форму обратной связи или заказа телефонного звонка. Мы всегда рады плодотворному
        сотрудничеству!</p>
    </div>
  </section>

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
</main>

<?php

get_footer();
?>