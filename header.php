<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bauarenda
 */

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/android-chrome-96x96.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/manifest.json">
  <link rel="yandex-tableau-widget" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/yandex-browser-manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" type="text/css">
  </noscript>
  <?php
  wp_head();
  ?>
</head>

<body>
  <header class="header" id="top">
    <div class="header__logo header__logo--small"><a href="<?php echo get_home_url(); ?>"><img class="logo__image"
          src="<?php echo bloginfo('template_url'); ?>/assets/images/header/logo-small.svg" alt="logo"></a></div>
    <div class="header__wrapper">
      <div class="header__top">
        <div class="container">
          <?php
          wp_nav_menu([
            'menu' => 'HeaderMenu',
            'container' => 'nav',
            'container_class' => 'header__menu',
            'menu_class' => 'header__menu-list',
            'echo' => true,
            'fallback_cd' => 'wp_page_menu',
            'items_wrap' => '<ul class="header__menu-list">%3$s</ul>',
            'depth' => 0
          ]);
          ?>
          <div class="header__search">
            <img class="header__icon" src="<?php echo bloginfo('template_url'); ?>/assets/images/header/search.svg" alt="icon">
            <p>поиск</p>
          </div>
        </div>
      </div>
      <div class="header__bottom">
        <div class="container">
          <div class="header__logo header__logo--big">
            <a href="<?php echo get_home_url(); ?>">
              <img class="logo__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/header/logo.svg" alt="logo">
            </a>
          </div>
          <nav class="header__contacts">
            <div class="header__item"><a class="header__contact" href="mailto:info@bauarenda.by">info@bauarenda.by</a></div>
            <div class="header__item"><a class="header__contact" href="tel:+375297477171">+375 29 747-71-71</a></div>
            <div class="header__item"><a class="header__contact" href="tel:+375291622365">+375 29 162-23-65</a>
              <div class="header__messengers">
                <div class="header__whatsapp"><a class="footer__contactsLink" href="https://wa.me/375291622365" target="_blank"></a>
                  <svg class="whatsapp" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.60761 21.4866L7.0163 21.6893C8.7194 22.7028 10.6267 23.1758 12.5341 23.1758C18.5286 23.1758 23.4332 18.3109 23.4332 12.365C23.4332 9.5272 22.2751 6.75691 20.2316 4.72986C18.188 2.7028 15.4631 1.5542 12.5341 1.5542C6.53955 1.5542 1.63484 6.41906 1.703 12.4326C1.703 14.4596 2.31608 16.4191 3.33784 18.1082L3.6103 18.5137L2.52047 22.5002L6.60761 21.4866Z"
                      fill="#E8EDF7"></path>
                    <path
                      d="M21.3896 3.64864C19.0735 1.28382 15.8719 0 12.6021 0C5.65401 0 0.068163 5.60809 0.136228 12.4324C0.136228 14.5946 0.749305 16.6892 1.77116 18.5811L0 25L6.60761 23.3108C8.44684 24.3244 10.4904 24.7974 12.5341 24.7974C19.4142 24.7974 25 19.1892 25 12.365C25 9.05409 23.7056 5.94595 21.3896 3.64864ZM12.6021 22.7028C10.7629 22.7028 8.92369 22.2299 7.35692 21.2839L6.94823 21.0812L2.99732 22.0947L4.01908 18.2434L3.74662 17.8379C0.749305 13.0407 2.17985 6.68918 7.08446 3.71616C11.9891 0.743231 18.3242 2.16218 21.3215 7.02704C24.3188 11.8919 22.8882 18.1757 17.9837 21.1487C16.4168 22.1622 14.5095 22.7028 12.6021 22.7028ZM18.5967 15.2029L17.8474 14.865C17.8474 14.865 16.7575 14.392 16.0763 14.0542C16.0081 14.0542 15.9401 13.9866 15.8719 13.9866C15.6675 13.9866 15.5313 14.0542 15.3951 14.1218C15.3951 14.1218 15.327 14.1893 14.3733 15.2704C14.3051 15.4055 14.1689 15.4731 14.0327 15.4731H13.9645C13.8965 15.4731 13.7602 15.4055 13.6921 15.338L13.3515 15.2029C12.6021 14.865 11.921 14.4595 11.376 13.919C11.2398 13.7839 11.0354 13.6488 10.8991 13.5137C10.4223 13.0407 9.94545 12.5001 9.60493 11.892L9.53676 11.7569C9.4687 11.6893 9.4687 11.6217 9.40054 11.4866C9.40054 11.3515 9.40054 11.2164 9.4687 11.1488C9.4687 11.1488 9.74116 10.8109 9.94545 10.6083C10.0818 10.473 10.1498 10.2704 10.2861 10.1353C10.4223 9.93254 10.4905 9.6623 10.4223 9.45956C10.3542 9.1217 9.53677 7.29738 9.33247 6.89201C9.19615 6.68927 9.06001 6.62176 8.85562 6.55415H8.10632C7.96999 6.55415 7.83386 6.62176 7.69754 6.62176L7.62937 6.68927C7.49314 6.75688 7.35692 6.89201 7.22069 6.95952C7.08446 7.09474 7.0163 7.22977 6.88007 7.36499C6.40322 7.9731 6.13076 8.71633 6.13076 9.45956C6.13076 10.0001 6.26699 10.5407 6.47138 11.0136L6.53955 11.2164C7.15262 12.5001 7.96999 13.6488 9.06001 14.6623L9.33247 14.9325C9.53677 15.1353 9.74116 15.2704 9.87739 15.473C11.3079 16.6893 12.9428 17.5677 14.782 18.0407C14.9864 18.1082 15.2588 18.1082 15.4632 18.1758H16.1444C16.485 18.1758 16.8937 18.0407 17.1662 17.9055C17.3705 17.7704 17.5068 17.7704 17.643 17.6353L17.7793 17.5001C17.9155 17.365 18.0518 17.2974 18.188 17.1623C18.3242 17.0272 18.4605 16.8921 18.5286 16.7568C18.6648 16.4866 18.7329 16.1487 18.8011 15.811V15.338C18.8011 15.338 18.7329 15.2704 18.5967 15.2029Z"
                      fill="white"></path>
                  </svg>
                </div>
                <div class="header__viber"><a class="footer__contactsLink" href="viber://chat?number=%2B375291622365" target="_blank"></a>
                  <svg class="viber" width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.49877 24.0822C7.49878 24.0822 7.49977 24.0816 7.50169 24.0806C7.49972 24.0817 7.49877 24.0822 7.49877 24.0822ZM8.75173 24.5735C8.75173 24.5735 8.75148 24.5728 8.75101 24.5714L8.75173 24.5735ZM7.86291 24.9986L7.56366 25.9528C7.79299 26.0247 7.98664 25.9969 8.0667 25.9821C8.16255 25.9644 8.23965 25.9369 8.28694 25.9181C8.38224 25.8804 8.46539 25.8342 8.52247 25.8006C8.64256 25.7297 8.77479 25.6376 8.90298 25.543C9.1655 25.3492 9.49348 25.0839 9.83563 24.7926C10.3815 24.3279 11.0029 23.7636 11.4989 23.2652C13.8011 23.4272 16.1155 23.2252 18.3566 22.6656L18.3545 22.6566C18.3787 22.6504 18.407 22.6435 18.4393 22.6356C18.908 22.5205 20.193 22.2051 21.3963 21.3612C22.8653 20.3309 24.2433 18.5396 24.6191 15.4567C25.3419 9.59603 24.3398 5.49465 22.0483 3.49665C21.2704 2.78929 18.7183 1.04457 13.3751 1.01636L13.3214 1.01378C13.2707 1.01154 13.1982 1.00875 13.1062 1.00627C12.9222 1.0013 12.6595 0.997556 12.3365 1.00194C11.6918 1.01068 10.7989 1.05187 9.80581 1.18257C7.86777 1.43764 5.34606 2.05773 3.62917 3.63326L3.61337 3.64777L3.59819 3.66294C1.67286 5.58827 1.08307 8.32865 1.01508 11.3998C0.982309 12.8802 0.935784 15.1958 1.64598 17.348C2.32452 19.4043 3.70573 21.3397 6.36631 22.3029C6.40584 22.6119 6.45735 23.0014 6.5137 23.3935C6.57578 23.8255 6.64569 24.2745 6.71354 24.6252C6.74672 24.7967 6.78399 24.969 6.82492 25.111C6.84411 25.1775 6.87408 25.2732 6.91832 25.3691C6.93962 25.4153 6.98013 25.497 7.04575 25.5843C7.09317 25.6475 7.25672 25.8565 7.56365 25.9528L7.86291 24.9986Z"
                      fill="#E8EDF7" stroke="white" stroke-width="2"></path>
                    <path
                      d="M15.7129 11.2588V11.272C15.7109 11.3454 15.6808 11.4151 15.6289 11.4669C15.577 11.5187 15.5071 11.5486 15.4338 11.5504C15.3605 11.5523 15.2892 11.5258 15.2348 11.4767C15.1804 11.4275 15.1469 11.3593 15.1413 11.2861C15.1605 11.0895 15.1368 10.8902 15.0718 10.7036C15.0068 10.5171 14.9022 10.3469 14.765 10.2047C14.6279 10.0626 14.4615 9.95185 14.2774 9.88023C14.0933 9.80862 13.8959 9.7778 13.6987 9.7899H13.7025C13.6293 9.78423 13.5611 9.75067 13.512 9.69615C13.4628 9.64163 13.4365 9.57033 13.4384 9.49695C13.4404 9.42358 13.4704 9.35376 13.5224 9.30191C13.5743 9.25005 13.6442 9.22013 13.7176 9.21833H13.7336H13.7326L13.7976 9.21739C14.0605 9.2173 14.3206 9.27125 14.5617 9.3759C14.8029 9.48054 15.02 9.63365 15.1995 9.8257C15.379 10.0178 15.5171 10.2447 15.6053 10.4923C15.6934 10.74 15.7297 11.0031 15.7119 11.2654V11.2598L15.7129 11.2588ZM16.6084 11.7588C16.6526 9.88689 15.4831 8.42171 13.2627 8.25787C13.2242 8.25666 13.1863 8.24769 13.1514 8.23149C13.1164 8.21528 13.085 8.19218 13.0592 8.16357C13.0334 8.13496 13.0136 8.10143 13.001 8.06499C12.9885 8.02854 12.9834 7.98994 12.9862 7.95149C12.9889 7.91304 12.9993 7.87554 13.0169 7.84123C13.0345 7.80693 13.0588 7.77653 13.0884 7.75185C13.118 7.72717 13.1523 7.70873 13.1892 7.69763C13.2262 7.68652 13.2649 7.68299 13.3032 7.68724H13.3023H13.3183C13.8452 7.68722 14.3666 7.79492 14.8504 8.00371C15.3342 8.2125 15.7703 8.51799 16.1317 8.9014C16.4932 9.28482 16.7724 9.73808 16.9524 10.2333C17.1323 10.7286 17.2091 11.2554 17.178 11.7814L17.179 11.7711C17.1739 11.8441 17.1411 11.9123 17.0873 11.9619C17.0335 12.0115 16.9628 12.0385 16.8896 12.0376C16.8165 12.0366 16.7465 12.0077 16.694 11.9567C16.6415 11.9058 16.6105 11.8366 16.6074 11.7636V11.756L16.6084 11.7588ZM18.6799 12.3511V12.353C18.6761 12.426 18.6445 12.4948 18.5917 12.5452C18.5388 12.5957 18.4686 12.624 18.3955 12.6243C18.3224 12.6247 18.2519 12.5971 18.1986 12.5472C18.1452 12.4972 18.1129 12.4288 18.1084 12.3558C18.0858 8.75693 15.6856 6.7974 12.7769 6.77668C12.7394 6.77668 12.7023 6.7693 12.6677 6.75496C12.6331 6.74063 12.6016 6.71961 12.5751 6.69312C12.5486 6.66662 12.5276 6.63517 12.5133 6.60055C12.4989 6.56594 12.4916 6.52884 12.4916 6.49137C12.4916 6.4539 12.4989 6.4168 12.5133 6.38218C12.5276 6.34757 12.5486 6.31611 12.5751 6.28962C12.6016 6.26313 12.6331 6.24211 12.6677 6.22777C12.7023 6.21343 12.7394 6.20605 12.7769 6.20605C16.034 6.22865 18.6517 8.47632 18.6781 12.3502L18.6799 12.3511ZM18.1856 16.6807V16.6892C17.7091 17.5282 16.8174 18.4548 15.8993 18.1591L15.8908 18.1459C14.254 17.5436 12.7197 16.6927 11.3418 15.6233L11.3804 15.6515C10.6948 15.1071 10.0728 14.4871 9.52636 13.8031L9.50847 13.7796C9.01365 13.1567 8.57204 12.4933 8.18831 11.7965L8.15064 11.7221C7.69663 10.9736 7.32022 10.1808 7.02728 9.35581L6.99903 9.26353C6.70336 8.34544 7.62521 7.45371 8.46891 6.97725H8.47739C8.64337 6.871 8.84269 6.82964 9.03724 6.86108C9.2318 6.89253 9.40794 6.99456 9.53201 7.14768L9.53295 7.14957C9.53295 7.14957 10.08 7.80212 10.3145 8.1251C10.5348 8.42548 10.8315 8.90665 10.9849 9.17501C11.1005 9.35839 11.1475 9.5767 11.1177 9.7914C11.0879 10.0061 10.9832 10.2033 10.822 10.3483L10.8211 10.3492L10.2919 10.773C10.2094 10.8526 10.1456 10.9496 10.1052 11.0569C10.0649 11.1642 10.0488 11.2792 10.0584 11.3935V11.3907C10.3204 12.2639 10.7933 13.0591 11.4354 13.7063C12.0775 14.3535 12.8691 14.8327 13.7402 15.1016L13.7797 15.112C13.8934 15.121 14.0077 15.1048 14.1145 15.0646C14.2212 15.0244 14.3178 14.9612 14.3974 14.8794L14.8211 14.3502C14.9667 14.1883 15.1649 14.0833 15.3806 14.0538C15.5963 14.0244 15.8155 14.0723 15.9991 14.1892L15.9954 14.1873C16.7609 14.6233 17.4229 15.1026 18.0265 15.6459L18.0161 15.6365C18.1692 15.7586 18.2711 15.9335 18.3018 16.1269C18.3324 16.3203 18.2897 16.5182 18.1818 16.6817L18.1837 16.6789L18.1856 16.6807Z"
                      fill="white"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="header__item"><a class="header__contact" href="tel:+375173744808">+375 17 374-48-08</a></div>
          </nav>
        </div>
      </div>
    </div>
    <div class="header__menu-small">
      <div class="header__search-small">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/header/search.svg" alt="поиск">
      </div>
      <div class="header__burger"><span></span></div>
    </div>
    <div class="header__search-frame">
      <div class="header__search-field">
        <div class="header__search-closer">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/images/header/header-search-closer.svg" alt="закрыть окно поиска">
        </div>
        <div class="header__search-top">
          <div class="header__search-request">
            <input class="header__search-input" type="text" placeholder="Начните поиск">
          </div>
          <nav class="header__search-nav">
            <ul class="header__search-categories">
              <li class="header__search-category active">Аренда</li>
              <li class="header__search-category">Новости</li>
              <li class="header__search-category">Услуги</li>
              <li class="header__search-category">Прочее</li>
            </ul>
          </nav>
        </div>
        <div class="header__search-output">
          <p class="header__search-init active">Популярное</p>
          <div class="header__search-results">
            <div class="header__search-item">
              <p class="header__search-name">Аренда экскаваторов CATERPILLAR</p>
              <p class="header__search-price">100 BYN</p><a href="#"></a>
            </div>
            <div class="header__search-item">
              <p class="header__search-name">Аренда экскаватора-погрузчика JCB 4CX</p>
              <p class="header__search-price">60 BYN</p><a href="#"></a>
            </div>
            <div class="header__search-item">
              <p class="header__search-name">Аренда экскаватора JCB 3CX</p>
              <p class="header__search-price">70 BYN</p><a href="#"></a>
            </div>
            <div class="header__search-item">
              <p class="header__search-name">Аренда JCB JS260 LC полуболотный</p>
              <p class="header__search-price">78 BYN</p><a href="#"></a>
            </div>
            <div class="header__search-item">
              <p class="header__search-name">Аренда Сaterpillar 323 DL</p>
              <p class="header__search-price">100 BYN</p><a href="#"></a>
            </div>
            <div class="header__search-item">
              <p class="header__search-name">Аренда Сaterpillar 325 DL</p>
              <p class="header__search-price">50 BYN</p><a href="#"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>