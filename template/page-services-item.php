<?php
/*
  Template Name: ServicesItem Template
*/

get_header();
?>


<main class="main">
  <section class="first services-item__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><a href="<?php echo get_page_link(237) ?>">Услуги</a><span>Бурение
              отверстий</span></div>
          <h1 class="first__title intro__title">Бурение отверстий</h1>
          <p class="first__text intro__text">
            Ямобур – навесное оборудование для бурения отверстий различного диаметра и глубины в земле. Обычно устанавливается на экскаватор-погрузчик. За одну рабочую смену можно
            пробурить более 100 скважин.

          </p>
          <button class="first__link btn__link btn__yellow rental__button" type="button">Получить расчет</button>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-item.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-item@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-item.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-item.png, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-services-item@2x.png 2x"
              alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="infoBlock services-item__infoBlock infoBlock__cases">
    <div class="container">
      <h2 class="infoBlock__title block__title">Услуги ямобура могут потребоваться в следующих случаях:</h2>
      <div class="infoBlock__wrapper">
        <p>Экскаваторы с автомобильным шасси — ключевое оборудование на строительных площадках. Машины оснащены разнообразными функциями, которые необходимы для большинства
          строительных мероприятий.</p>
        <p>Предоставленные колесные экскаваторы в ассортименте выделяются:</p>
        <ul>
          <li>Подготовка отверстий для свайного фундамента.</li>
          <li>Установка опор для линий электропередач и столбов для ограждений.</li>
          <li>Укрепление аварийного фундамента и откосов.</li>
          <li>Работы по озеленению территории.</li>
          <li>Выполнение гидрогеологических изысканий.</li>
          <li>Прокладка инженерных сетей.</li>
        </ul>
        <p>Услуги ямобура могут использоваться для разработки грунтов любого типа. Наиболее распространены шнековые и лопастные буры. Шнековые представляют собой центральный
          стержень со стальной рабочей спиралью и забурником в нижней части. Применяется для монтажа свай и опор, бурения скважин. Лопасные выполнены в виде стержня с двумя
          копающими лопастями и забурником со спиральной лентой в нижней части. При работе с мерзлыми грунтами выбирают буры с лопастями из твердых сплавов. Реже используются
          ковшовые буры. Они служат для изыскательного сверления с целью взятия проб грунта. Представляют собой пустотелую конструкцию цилиндрической формы с ножками в нижней
          части.</p>
        <p>Услуги бурения по низким ценам в Минске и по всей Беларуси предлагает частное предприятие «БауАренда».</p>
      </div>
    </div>
  </section>
  <section class="infoBlock services-item__infoBlock">
    <div class="container">
      <h2 class="infoBlock__title block__title">К преимуществам сотруднечиства с компанией можно отнести:</h2>
      <div class="infoBlock__wrapper">
        <p>Аренда колесного экскаватора востребована для транспортировки во время дорожных, придорожных, городских или мостовых работ. Это самоходная техника, которая безопасно
          работает на любом дорожном покрытии, не нанося повреждения асфальту или бетону.</p>
        <p>Устройство ходовой части в виде резиновых шин открывает доступ к городской среде, асфальтированным дорогам, строительным плитам и парковкам. Машины с различным навесным
          оборудованием зачастую эксплуатируются в следующих областях:</p>
        <ul>
          <li>доступные цены</li>
          <li>индивидуальный подход к каждому клиенту</li>
          <li>наличие обширного парка спецтехники для выполнения любых земляных и строительных работ</li>
        </ul>
        <p>Если у вас остались какие-либо вопросы или вы хотите обсудить условия сотрудничества – позвоните нам прямо сейчас и мы с удовольствием проконсультируем вас по любым
          вопросам.</p>
        <p>Вы также можете взять в аренду ямобур. Дополнительно с услугой бурения предлагаем вывоз строительного мусора.</p>
      </div>
    </div>
  </section>


  <?php
  get_template_part('template-parts/work-part');
  ?>

  <?php
  get_template_part('template-parts/feedback-narrow');
  ?>

  <section class="prices features">
    <div class="container">
      <h2 class="features__title block__title">Цены</h2>
      <div class="features__wrapper">
        <div class="feature__header">
          <h3>Экскаваторы-погрузчики</h3><span>Цена без НДС</span>
        </div>
        <ul class="feature__list">
          <li>
            <p>Venieri VF 10.23C</p>
            <p>60 BYN</p>
          </li>
          <li>
            <p>JCB 3CX</p>
            <p>60 BYN</p>
          </li>
          <li>
            <p>JCB 4CX</p>
            <p>60 BYN</p>
          </li>
        </ul>
        <div class="feature__header">
          <h3>Самосвалы</h3>
        </div>
        <ul class="feature__list">
          <li>
            <p>MAN TGS 33.400</p>
            <p>45 BYN</p>
          </li>
          <li>
            <p>МАЗ</p>
            <p>45 BYN</p>
          </li>
          <li>
            <p>MАЗ-5516</p>
            <p>45 BYN</p>
          </li>
          <li>
            <p>MAN TGS 41.390</p>
            <p>50 BYN</p>
          </li>
        </ul>
        <div class="feature__header">
          <h3>Экскаваторы гусеничные</h3>
        </div>
        <ul class="feature__list">
          <li>
            <p>JCB JS 220 болотный</p>
            <p>60 BYN</p>
          </li>
          <li>
            <p>Hitachi ZX210 LCK-3 полуболотный</p>
            <p>60 BYN</p>
          </li>
          <li>
            <p>JCB JS 260LC</p>
            <p>65 BYN</p>
          </li>
          <li>
            <p>Caterpillar 323 DL</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>Сaterpillar 325 DL</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>HITACHI ZX280 LC полуболотный</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>HITACHI ZX 350 H полуболотный</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>Сaterpillar 330BL UHD</p>
            <p>110 BYN</p>
          </li>
        </ul>
        <div class="feature__header">
          <h3>Бульдозеры</h3>
        </div>
        <ul class="feature__list">
          <li>
            <p>KOMATSU D65 EX-12</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>KOMATSU D65 PX-12 болотный</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>KOMATSU D65 PX-12 с рыхлителем</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>KOMATSU D61 PX-12</p>
            <p>70 BYN</p>
          </li>
          <li>
            <p>Caterpillar D6R</p>
            <p>70 BYN</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/advantage-services-price-part');
  ?>

  <?php
  $reviews_params = ['posts_per_page' => 6];
  get_template_part('template-parts/reviews-part', null, $reviews_params);
  ?>

  <?php
  get_template_part('template-parts/feedback-wide');
  ?>


  <?php
  get_template_part('template-parts/qa-part');
  ?>


  <?php
  get_template_part('template-parts/fixed-part');
  ?>
</main>


<?php
get_footer();
?>
