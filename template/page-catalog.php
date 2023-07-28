<?php
/*
  Template Name: Catalog Template
*/

get_header();
?>


<main class="main">
  <section class="first catalog__page">
    <div class="container">
      <div class="first__wrapper">
        <div class="first__info">
          <div class="first__breadcrumps"><a class="first__prev" href="<?php echo get_home_url(); ?>">Главная</a><a class="first__prev"
              href="<?php echo get_page_link(187) ?>">Аренда</a><span class="first__current">Аренда колесных экскаваторов</span></div>
          <h1 class="first__title intro__title">Аренда колесных экскаваторов</h1>
          <div class="first__text intro__text">
            <p>Аренда колесного экскаватора — востребованный тип услуг в сфере строительства и инженерной области. Машины стабильны, мощны и достаточно универсальны, чтобы
              выполнять широкий спектр задач.</p>
            <p>Компания «БауАренда» предлагает услуги колесного экскаватора и профессиональных операторов для выполнения разноплановых работ.</p>
          </div>
          <button class="first__link btn__link btn__yellow rental__button">Заказать технику</button>
        </div>
        <div class="first__img">
          <picture class="picture object-fit-cover">
            <source class="object-fit-cover"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental.webp, <?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental@2x.webp 2x"
              type="image/webp" /><img class="picture__img object-fit-cover" src="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental.png"
              srcset="<?php echo bloginfo('template_url'); ?>/assets/images/first/first-rental.png, images/first/first-rental@2x.png 2x" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="catalog">
    <div class="container">
      <h2 class="catalog__title block__title">Каталог техники</h2>
      <div class="catalog__container">
        <div class="catalog__categories categories">
          <div class="categories__group">
            <div class="categories__title"><span>Землеройная техника</span><span class="categories__arrow">
                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span></div>
            <ul class="categories__list">
              <li class="categories__item">
                <button class="categories__btn">Бульдозеры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Буры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Мини техника</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Колесные экскаваторы</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Аренда гусеничного экскаватора</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Аренда гидромолота</button>
              </li>
            </ul>
          </div>
          <div class="categories__group">
            <div class="categories__title"><span>Грузоподъемная техника</span><span class="categories__arrow">
                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span></div>
            <ul class="categories__list">
              <li class="categories__item">
                <button class="categories__btn">Бульдозеры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Буры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Мини техника</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Колесные экскаваторы</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Аренда гусеничного экскаватора</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Аренда гидромолота</button>
              </li>
            </ul>
          </div>
          <div class="categories__group">
            <div class="categories__title"><span>Грузовой транспорт</span><span class="categories__arrow">
                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span></div>
            <ul class="categories__list">
              <li class="categories__item">
                <button class="categories__btn">Бульдозеры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Буры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Мини техника</button>
              </li>
            </ul>
          </div>
          <div class="categories__group">
            <div class="categories__title"><span>Дорожная техника</span><span class="categories__arrow">
                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span></div>
            <ul class="categories__list">
              <li class="categories__item">
                <button class="categories__btn">Бульдозеры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Буры</button>
              </li>
            </ul>
          </div>
          <div class="categories__group">
            <div class="categories__title"><span>Погрузочная техника</span><span class="categories__arrow">
                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></span></div>
            <ul class="categories__list">
              <li class="categories__item">
                <button class="categories__btn">Бульдозеры</button>
              </li>
              <li class="categories__item">
                <button class="categories__btn">Буры</button>
              </li>
            </ul>
          </div>
        </div>
        <div class="catalog__content">
          <div class="catalog__filters filters">
            <div class="filters__current">
              <button class="filters__clear">Сбросить фильтры</button>
            </div>
            <button class="filters__show"><span>Фильтры</span>
              <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 3H18.5" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M1 12H18.5" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                <circle cx="3" cy="3" r="2" fill="white" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></circle>
                <circle cx="17" cy="12" r="2" fill="white" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></circle>
              </svg><span class="filters__counter">0</span>
            </button>
            <div class="filters__list">
              <div class="filters__list-wrapper">
                <div class="filters__heading">Разделы</div>
                <div class="filters__categories">
                  <div class="categories__group">
                    <div class="categories__title"><span>Землеройная техника</span><span class="categories__arrow">
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></span></div>
                    <ul class="categories__list">
                      <li class="categories__item">
                        <button class="categories__btn">Бульдозеры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Буры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Мини техника</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Колесные экскаваторы</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Аренда гусеничного экскаватора</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Аренда гидромолота</button>
                      </li>
                    </ul>
                  </div>
                  <div class="categories__group">
                    <div class="categories__title"><span>Грузоподъемная техника</span><span class="categories__arrow">
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></span></div>
                    <ul class="categories__list">
                      <li class="categories__item">
                        <button class="categories__btn">Бульдозеры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Буры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Мини техника</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Колесные экскаваторы</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Аренда гусеничного экскаватора</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Аренда гидромолота</button>
                      </li>
                    </ul>
                  </div>
                  <div class="categories__group">
                    <div class="categories__title"><span>Грузовой транспорт</span><span class="categories__arrow">
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></span></div>
                    <ul class="categories__list">
                      <li class="categories__item">
                        <button class="categories__btn">Бульдозеры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Буры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Мини техника</button>
                      </li>
                    </ul>
                  </div>
                  <div class="categories__group">
                    <div class="categories__title"><span>Дорожная техника</span><span class="categories__arrow">
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></span></div>
                    <ul class="categories__list">
                      <li class="categories__item">
                        <button class="categories__btn">Бульдозеры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Буры</button>
                      </li>
                    </ul>
                  </div>
                  <div class="categories__group">
                    <div class="categories__title"><span>Погрузочная техника</span><span class="categories__arrow">
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></span></div>
                    <ul class="categories__list">
                      <li class="categories__item">
                        <button class="categories__btn">Бульдозеры</button>
                      </li>
                      <li class="categories__item">
                        <button class="categories__btn">Буры</button>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filters__heading">Фильтры</div>
                <div class="filters__wrapper"></div>
                <div class="filters__block">
                  <h4 class="filters__name">Глубина копания</h4>
                  <div class="filters__set">
                    <div class="filters__slider">
                      <div class="filters__track"></div>
                    </div>
                    <div class="filters__inputs">
                      <input class="filter__inputMin filters__range" type="range" min="4" max="8" value="4" step="1" data-filter="Глубина копания" />
                      <input class="filter__inputMax filters__range" type="range" min="4" max="8" value="8" step="1" data-filter="Глубина копания" />
                    </div>
                  </div>
                  <div class="filters__values">
                    <p class="filters__valueMin">от 4</p>
                    <p class="filters__valueMax">от 8</p>
                  </div>
                </div>
                <div class="filters__block">
                  <h4 class="filters__name">Высота выгрузки</h4>
                  <div class="filters__set">
                    <div class="filters__slider">
                      <div class="filters__track"></div>
                    </div>
                    <div class="filters__inputs">
                      <input class="filter__inputMin filters__range" type="range" min="6" max="9" value="6" step="1" data-filter="Высота выгрузки" />
                      <input class="filter__inputMax filters__range" type="range" min="6" max="9" value="9" step="1" data-filter="Высота выгрузки" />
                    </div>
                  </div>
                  <div class="filters__values">
                    <p class="filters__valueMin">от 6</p>
                    <p class="filters__valueMax">от 9</p>
                  </div>
                </div>
                <div class="filters__block">
                  <h4 class="filters__name">Объем ковша</h4>
                  <div class="filters__set">
                    <div class="filters__slider">
                      <div class="filters__track"></div>
                    </div>
                    <div class="filters__inputs">
                      <input class="filter__inputMin filters__range" type="range" min="0" max="3" value="0" step="1" data-filter="Объем ковша" />
                      <input class="filter__inputMax filters__range" type="range" min="0" max="3" value="3" step="1" data-filter="Объем ковша" />
                    </div>
                  </div>
                  <div class="filters__values">
                    <p class="filters__valueMin">от 0</p>
                    <p class="filters__valueMax">от 3</p>
                  </div>
                </div>
                <div class="filters__block">
                  <h4 class="filters__name">Максимальный вылет стрелы</h4>
                  <div class="filters__set">
                    <div class="filters__slider">
                      <div class="filters__track"></div>
                    </div>
                    <div class="filters__inputs">
                      <input class="filter__inputMin filters__range" type="range" min="4" max="18" value="4" step="1" data-filter="Максимальный вылет стрелы" />
                      <input class="filter__inputMax filters__range" type="range" min="4" max="18" value="18" step="1" data-filter="Максимальный вылет стрелы" />
                    </div>
                  </div>
                  <div class="filters__values">
                    <p class="filters__valueMin">от 4</p>
                    <p class="filters__valueMax">от 18</p>
                  </div>
                </div>
                <div class="filters__block">
                  <h4 class="filters__name">Мощность двигателя</h4>
                  <div class="filters__set">
                    <div class="filters__slider">
                      <div class="filters__track"></div>
                    </div>
                    <div class="filters__inputs">
                      <input class="filter__inputMin filters__range" type="range" min="90" max="265" value="90" step="1" data-filter="Мощность двигателя" />
                      <input class="filter__inputMax filters__range" type="range" min="90" max="265" value="265" step="1" data-filter="Мощность двигателя" />
                    </div>
                  </div>
                  <div class="filters__values">
                    <p class="filters__valueMin">от 90</p>
                    <p class="filters__valueMax">от 265</p>
                  </div>
                </div>
                <div class="filters__block">
                  <h4 class="filters__name">Высота подъема ковша</h4>
                  <div class="filters__set">
                    <div class="filters__slider">
                      <div class="filters__track"></div>
                    </div>
                    <div class="filters__inputs">
                      <input class="filter__inputMin filters__range" type="range" min="8" max="12" value="8" step="1" data-filter="Высота подъема ковша" />
                      <input class="filter__inputMax filters__range" type="range" min="8" max="12" value="12" step="1" data-filter="Высота подъема ковша" />
                    </div>
                  </div>
                  <div class="filters__values">
                    <p class="filters__valueMin">от 8</p>
                    <p class="filters__valueMax">от 12</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog__wrapper">
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__card card">
              <div class="card__picture"> <img src="./images/catalog/1.jpg" alt="Аренда экскаватора JCB JS260 LC полуболотный" /></div>
              <div class="card__info">
                <h4 class="card__title">Аренда экскаватора JCB JS260 LC полуболотный</h4>
                <div class="card__features">
                  <div class="card__feature"><span class="card__featureName">Объем фронтального ковша</span><span class="card__valueName">1,3 м3</span></div>
                  <div class="card__feature"><span class="card__featureName">Высота выгрузки</span><span class="card__valueName">2690 мм</span></div>
                  <div class="card__feature"><span class="card__featureName">Мощность двигателя</span><span class="card__valueName">100 л.с.</span></div>
                  <div class="card__feature"><span class="card__featureName">4я характеристика</span><span class="card__valueName">4 м</span></div>
                  <div class="card__feature"><span class="card__featureName">5я характеристика</span><span class="card__valueName">5 м</span></div>
                </div>
                <div class="card__prices">
                  <div class="card__price"><span class="card__priceName">цена за час</span><span class="card__priceValue">80 BYN</span></div>
                  <div class="card__price"><span class="card__priceName">цена за смену (8 ч.)</span><span class="card__priceValue">8650 BYN</span></div>
                </div><a class="card__button btn__link btn__yellow" href="./catalog-item.html">Арендовать</a>
              </div>
            </div>
            <div class="catalog__nofound">
              <p class="catalog__sorry">Нам жаль, но по вашему запросу ничего не нашлось</p>
              <div class="catalog__recommendation">
                <p>Скорректируйте ваш запрос или</p>
                <p><a href="#">передите в каталог</a></p>
              </div>
            </div>
          </div>
          <ul class="page-numbers">
            <li><span class="page-numbers prev"></span></li>
            <li><span class="page-numbers current">1</span></li>
            <li><a class="page-numbers">2</a></li>
            <li><a class="page-numbers">3</a></li>
            <li><a class="page-numbers">4</a></li>
            <li><span class="page-numbers dots">...</span></li>
            <li><a class="page-numbers">10</a></li>
            <li><span class="page-numbers next"></span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/feedback-narrow');
  ?>

  <section class="infoBlock catalog__infoBlock">
    <div class="container">
      <h2 class="infoBlock__title block__title">Особенности спецтехники</h2>
      <div class="infoBlock__wrapper">
        <p>Экскаваторы с автомобильным шасси — ключевое оборудование на строительных площадках. Машины оснащены разнообразными функциями, которые необходимы для большинства
          строительных мероприятий.</p>
        <p>Предоставленные колесные экскаваторы в ассортименте выделяются:</p>
        <ul>
          <li>простым управлением хода;</li>
          <li>специальным насосом поворота;</li>
          <li>гидравликой с регулированием по нагрузке;</li>
          <li>большим рабочим диапазоном;</li>
          <li>добавочным освещением рабочей зоны;</li>
          <li>брызговиками;</li>
          <li>охлаждающим вентилятором и т.д.</li>
        </ul>
        <p>Для работы в городских условиях или на асфальтированных территориях оптимальна аренда колесного экскаватора. Минск и другие регионы Беларуси могут приобрести услуги
          аренды экскаватора по выгодной стоимости.</p>
      </div>
    </div>
  </section>
  <section class="benefits">
    <div class="container">
      <h2 class="benefits__title block__title">Преимущества колесных экскаваторов</h2>
      <div class="benefits__wrapper">
        <p>Компания «БауАренда» предоставляет в аренду технику от надежных мировых брендов, которые демонстрируют качество, комфорт оператора, надежность и безопасность.</p>
        <div class="benefits__block">
          <h3>Управляемость и транспортировка</h3>
          <p>Колесные экскаваторы передвигаются со скоростью до 40 км в час, легко преодолевая мощеные поверхности между строительными площадками и объектами. Скорость передвижения
            агрегата позволяет транспортировать технику на небольшие расстояния без низкорамных платформ.</p>
          <p>Мобильность транспорта значительно повышает продуктивность, когда необходимо выполнить несколько задач на просторной рабочей территории. Кроме того, устройство ходовой
            части транспорта не причиняет асфальту повреждений.</p>
          <h3>Стабильность и сбалансированность</h3>
          <p>Колесные экскаваторы по устойчивости во время работы сопоставимы с гусеничными аналогами. Для обеспечения устойчивости машины колесный экскаватор оснащен поворотной
            платформой, которая имеет коробчатую конструкцию. Аренда колесного экскаватора — экономное владение универсальным и мощным приспособлением для работы на мощеных
            городских территориях.</p>
          <h3>Универсальность</h3>
          <p>Универсальное навесное оборудование обеспечивает повышенную подъемную силу и мощность копания, благодаря чему колесные экскаваторы могут выполнять те же задачи, что и
            гусеничные экскаваторы.</p>
          <p>Аренда колесного экскаватора — выгодная услуга, применимая в разнообразных деятельностях и направлениях:</p>
          <ul>
            <li>на свалках;</li>
            <li>дорожных работах;</li>
            <li>погрузочно-разгрузочных работах;</li>
            <li>обработке отходов;</li>
            <li>установке коммунальных услуг и т.д.</li>
          </ul>
          <h3>Универсальность и многофункциональность</h3>
          <p>Колесная машина отличается исключительной универсальностью. При правильном оснащении экскаватор может выполнять самые разные задачи. С помощью навесного оборудования
            колесная модель используется для выполнения расширенного ряда работ. Колесные машины маневренны и могут работать в местах, недоступных для других типов строительной
            техники.</p>
          <h3>Мощность</h3>
          <p>Колесные экскаваторы — мощные и производительные машины. При использовании стабилизаторов грузоподъемность экскаваторов на автомобильном шасси зачастую выше, чем у
            гусеничных машин.</p>
          <p>Растущая популярность, которую набирает эксплуатация колесных экскаваторов, объясняется мобильностью, удобством использования в городах и производительностью
            спецтехники.</p>
          <h3>Комфорт оператора</h3>
          <p>Модели поставляются с удобной кабиной, увеличенной дверью, расширенным ветровым стеклом, зеркалами, большим потолочным окном и боковой камерой с отдельным монитором в
            кабине.</p>
          <p>Некоторые модели оснащены системой управления, которую можно регулировать по высоте в соответствии с потребностями оператора. Кроме того, машины имеют пониженный
            уровень вибрации и встроенные в кабину фонари для повышенной видимости.</p>
          <p>Операторы могут рассчитывать на превосходную скорость, мобильность и надежность при выполнении тяжелых задач. Все это помогает максимизировать производство, снизить
            затраты и повысить эффективность работы на стройплощадке.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="infoBlock catalog__infoBlock">
    <div class="container">
      <h2 class="infoBlock__title block__title">Особенности эксплуатации</h2>
      <div class="infoBlock__wrapper">
        <p>Аренда колесного экскаватора востребована для транспортировки во время дорожных, придорожных, городских или мостовых работ. Это самоходная техника, которая безопасно
          работает на любом дорожном покрытии, не нанося повреждения асфальту или бетону.</p>
        <p>Устройство ходовой части в виде резиновых шин открывает доступ к городской среде, асфальтированным дорогам, строительным плитам и парковкам. Машины с различным навесным
          оборудованием зачастую эксплуатируются в следующих областях:</p>
        <ul>
          <li>копание;</li>
          <li>работы по сносу,</li>
          <li>обслуживание дорог и придорожных участков;</li>
          <li>перемещение бетонных заграждений;</li>
          <li>очищение канав;</li>
          <li>резка асфальта;</li>
          <li>обслуживании коммунальных сетей;</li>
          <li>строительство автомагистралей и улиц;</li>
          <li>возведение мостов;</li>
          <li>обустройство участков и улучшение земель.</li>
        </ul>
        <p>Другие области применения, где широко применяются колесные экскаваторы — проекты по очистке канав и подземные инженерные коммуникации.</p>
        <p>Аренда спецтехники — результативное и экономное использование времени и бюджета проекта. При всех преимуществах колесные экскаваторы представляют собой производительные
          универсальные машины на рынке строительной спецтехники.</p>
      </div>
    </div>
  </section>
  <section class="benefits benefits__second">
    <div class="container">
      <h2 class="benefits__title block__title">Преимущества аренды спецтехники в “Бауаренда</h2>
      <div class="benefits__wrapper">
        <div class="benefits__block">
          <h3>Аренда без ограничений по сроку</h3>
          <ul>
            <li>Продолжительность владения спецтехникой не ограничена. Доступна почасовая, понедельная и помесячная аренда с минимальным сроком от 4 часов.</li>
          </ul>
          <h3>Собственный передовой автопарк</h3>
          <ul>
            <li>Компания «БауАренда» располагает собственным парком оснащенной и исправной спецтехники от проверенных мировых марок — Cat, HITACHI, KOMATSU и Hyundai. В
              ассортименте 37 единиц строительной спецтехники, 22 единицы автотехники.</li>
          </ul>
          <h3>Конкурентные цены</h3>
          <ul>
            <li>Мы гордимся тем, что предлагаем клиентам доступные цены, скидки при аренде от двух единиц техники, а также бонусы для постоянных заказчиков.</li>
          </ul>
          <div class="columns_break"></div>
          <h3>Клиентоориентированность</h3>
          <p>Компания использует отдельный подход к каждому клиенту. Исполнительно, ответственно и в сроки выполняем перечень работ, предусмотренный в договоре.</p>
          <h3>Комплексная услуга</h3>
          <ul>
            <li>При необходимости аренда экскаватора сопровождается услугами оператора, стоимость работы которого входит в стоимость аренды.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php
  $reviews_params = ['posts_per_page' => 6];
  get_template_part('template-parts/reviews-part', null, $reviews_params);
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
  get_template_part('template-parts/fixed-part');
  ?>
</main>


<?php
get_footer();
?>
