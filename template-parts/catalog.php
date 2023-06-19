<?php
/**
 * Template part for catalog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>

<section class="catalog">

  <div class="container">
    <h2 class="catalog__title block__title">Каталог техники</h2>
    <div class="catalog__container">
      <div class="catalog__categories categories">

        <?php
        get_template_part('template-parts/categories', null, null);
        ?>

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

                <?php
                get_template_part('template-parts/categories', null, null);
                ?>

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

        <!-- Get site url -->
        <div class="page-info-ajax" style="display:none;">
          <p class="ajaxurl">
            <?php echo site_url() ?>/wp-admin/admin-ajax.php
          </p>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
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
              </div>
              <div class="card__button btn__link btn__yellow">Арендовать</div>
            </div>
          </div>
        </div>
        <div class="catalog__nofound">
          <p class="catalog__sorry">Нам жаль, но по вашему запросу ничего не нашлось</p>
          <div class="catalog__recommendation">
            <p>Скорректируйте ваш запрос или</p>
            <p><a href="#">передите в каталог</a></p>
          </div>
        </div>
        <button class="catalog__more btn__link btn__grey">Показать больше</button>
      </div>
    </div>
  </div>
</section>
