<?php
/**
 * Template part for work-part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>

<section class="work">
  <div class="container">
    <h2 class="work__title block__title">Как мы работаем</h2>
    <ul class="work__steps">
      <li class="work__step">
        <h3>Консультируем</h3><span class="icon svg-image-work-icon1"></span>
      </li>
      <li class="work__step">
        <h3>Заключаем договор</h3><span class="icon svg-image-work-icon2"></span>
      </li>
      <li class="work__step">
        <h3>Проводим необходимые работы</h3><span class="icon svg-image-work-icon3"></span>
      </li>
      <li class="work__step">
        <h3>Предоставляем отчетность</h3><span class="icon svg-image-work-icon4"></span>
      </li>
      <li class="work__step">
        <h3>Предоставляем все закрывающие документы</h3><span class="icon svg-image-work-icon5"></span>
      </li>
      <li class="work__step">
        <picture class="picture object-fit-cover">
          <source class="object-fit-cover"
            srcset="<?php echo bloginfo('template_url'); ?>/assets/images/work/work-bg.webp, <?php echo bloginfo('template_url'); ?>/assets/images/work/work-bg@2x.webp 2x"
            type="image/webp"><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/work/work-bg.png"
            srcset="<?php echo bloginfo('template_url'); ?>/assets/images/work/work-bg.png, <?php echo bloginfo('template_url'); ?>/assets/images/work/work-bg@2x.png 2x" alt="">
        </picture>
      </li>
    </ul>
  </div>
</section>
