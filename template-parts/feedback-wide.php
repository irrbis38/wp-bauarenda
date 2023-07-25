<?php
/**
 * Template part for feedback-wide
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>

<section class="feedback second__feedback">
  <div class="container">
    <h2 class="feedback__title block__title">Заказать спецтехнику</h2>
    <p class="feedback__subtitle">Получите индивидуальное предложение на аренду техники.</p>
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