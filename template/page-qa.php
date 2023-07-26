<?php
/*
  Template Name: Questions-Answers Template
*/

get_header();
?>


<main class="main">

  <section class="first qa__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps"><a class="first__prev" href="./index.html">Главная</a><a class="first__prev" href="#">О компании</a><span
              class="first__current">Вопрос/ответ</span></div>
          <h1 class="first__title intro__title">Вопрос/ответ</h1>
          <p class="first__text intro__text">«Насколько быстро вы доставляете строительную технику?»<br>Наша компания отлично понимает, что такое оперативность при строительстве –
            и мы стараемся уложится с доставкой любой специальной техники в кратчайшие сроки.

          </p><a class="first__link btn__link btn__yellow" href="#">Каталог</a>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-qa.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-qa@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-qa.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-clients.png, images/first/first-qa@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>


  <?php
  $qa_params = ['title' => 'Вопрос/ответ'];
  get_template_part('template-parts/qa-part', null, $qa_params);
  ?>

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
