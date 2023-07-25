<?php
/**
 * Template part for fixed-part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>


<div class="fixed">
  <button class="fixed__toTop"><span class="button-bg"></span><img src="<?php echo bloginfo('template_url'); ?>/assets/images/fixed/arrow-top.svg" alt="подняться наверх"></button>
  <button class="fixed__showField">
    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="25" cy="25" r="25" fill="#FFCB09"></circle>
      <path
        d="M22.9922 26.9067C24.4998 28.4361 26.324 29.6169 28.3366 30.3662L31.0594 28.1995C31.1401 28.1439 31.2358 28.1141 31.3338 28.1141C31.4319 28.1141 31.5276 28.1439 31.6083 28.1995L36.6638 31.4567C36.8558 31.5721 37.0182 31.7306 37.1384 31.9195C37.2586 32.1085 37.3332 32.3228 37.3563 32.5456C37.3794 32.7683 37.3504 32.9934 37.2716 33.203C37.1928 33.4126 37.0663 33.601 36.9022 33.7534L34.5333 36.0934C34.194 36.4286 33.7771 36.6746 33.3196 36.8094C32.8622 36.9443 32.3784 36.9638 31.9116 36.8662C27.2549 35.9044 22.9627 33.6519 19.5255 30.3662C16.1646 27.0477 13.8389 22.8253 12.8305 18.2112C12.7309 17.7516 12.7517 17.274 12.8909 16.8248C13.0301 16.3756 13.2829 15.97 13.625 15.6473L16.0805 13.2784C16.2325 13.1222 16.4178 13.0025 16.6226 12.9281C16.8274 12.8537 17.0463 12.8266 17.2631 12.8488C17.4798 12.8711 17.6887 12.9421 17.8742 13.0565C18.0596 13.1709 18.2168 13.3258 18.3338 13.5095L21.6994 18.5001C21.7575 18.5784 21.7888 18.6734 21.7888 18.7709C21.7888 18.8684 21.7575 18.9634 21.6994 19.0417L19.4822 21.7067C20.2518 23.6791 21.4508 25.4554 22.9922 26.9067Z"
        fill="white"></path>
    </svg>
  </button>
</div>
<div class="fixed__feedback">
  <div class="fixed__close">
    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
      <path d="M1 1L22 22M22 1L1 22" stroke="#474543" stroke-width="2"></path>
    </svg>
  </div>
  <div class="fixed__wrapper">
    <h3 class="fixed__feedbackTitle">Обратная связь</h3>
    <p class="fixed__feedback-subtitle">Заполните заявку и сотрудник вас проконсультирует.</p>
    <form class="fixed__form" action="#" novalidate>
      <p class="error__message">Заполните все обязательные для заполнения поля.</p>
      <div class="feedback__item fixed__item">
        <input class="fixed__name feedback__name" type="text" placeholder="Имя*" name="name" required>
      </div>
      <div class="feedback__item fixed__item">
        <input class="fixed__name feedback__name" type="text" placeholder="Телефон*" name="phone" minlength="9" required>
      </div>
      <input class="fixed__submit btn__yellow btn__link" type="submit" value="Отправить" name="submit">
    </form>
  </div>
</div>
<div class="fixed__bg"></div>