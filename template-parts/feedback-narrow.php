<?php
/**
 * Template part for feedback-narrow
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>

<section class="feedback first__feedback">
  <div class="container">
    <div class="feedback__wrapper">
      <h2 class="feedback__title block__title">Нужна консультация?</h2>
      <p class="feedback__subtitle">Заполните заявку и сотрудник вас проконсультирует.</p>
      <form class="feedback__form" id="second" action="#" novalidate>
        <p class="error__message">Заполните все обязательные для заполнения поля. Номер телефона должен быть не короче 9 символов.</p>
        <div class="feedback__item">
          <input class="feedback__name" type="text" placeholder="Имя*" name="name" minlength="2" required>
        </div>
        <div class="feedback__item">
          <input class="feedback__phone" type="text" placeholder="Телефон*" name="phone" minlength="9" required>
        </div>
        <input class="feedback__submit btn__link btn__yellow" id="second_btn" type="submit" value="Отправить" name="submit">
      </form>
    </div>
  </div>
</section>