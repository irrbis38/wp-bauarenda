<?php

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
							<button class="intro__prev"><span class="intro__navButton"></span><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/intro/intro-prev.svg"
									alt="prev"></button>
							<button class="intro__next"><span class="intro__navButton"></span><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/intro/intro-next.svg"
									alt="next"></button>
						</div>
					</div>
					<div class="intro__news">
						<div class="intro__category"><a href="#">Новости</a></div>
						<h3 class="intro__name"><a href="#">«Белорусская строительная неделя» снова в Минске</a></h3>
						<div class="intro__statistics">
							<p class="intro__posted">сегодня 10:00</p>
							<div class="intro__stat">
								<p class="intro__watches"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/intro/watches.svg" alt=""><span>236</span></p>
								<p class="intro__likes"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/intro/comment.svg" alt=""><span>0</span></p>
							</div>
						</div>
					</div>
					<div class="intro__promotion">
						<p class="intro__category"><a href="#">Акции</a></p>
						<h3 class="intro__name"><a href="#">15% скидка - при заказе от трёх единиц техники в аренду.</a></h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="fixed">
		<button class="fixed__toTop"><span class="button-bg"></span><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/fixed/arrow-top.svg"
				alt="подняться наверх"></button>
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
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1.5 1.57617L22.5 22.5762M22.5 1.57617L1.5 22.5762" stroke="white" stroke-width="2"></path>
			</svg>
		</div>
		<h3 class="fixed__feedbackTitle">Обратная связь</h3>
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
	<div class="fixed__bg"></div>
	<section class="technics">
		<div class="container">
			<h2 class="technics__title block__title">Наша спецтехника</h2>
			<div class="technics__wrapper">
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/1.png" alt="Бульдозеры" /></div>
					<p class="technics__name">Бульдозеры</p>
					<p class="technics__price">70 BYN в час</p>
					<p class="technics__offers">26 предложений</p>
				</div>
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/2.png" alt="Буры" /></div>
					<p class="technics__name">Буры</p>
					<p class="technics__price">от 120 BYN в час</p>
					<p class="technics__offers">4 предложения</p>
				</div>
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/3.png" alt="Мини техника" /></div>
					<p class="technics__name">Мини техника</p>
					<p class="technics__price">от 50 BYN в час</p>
					<p class="technics__offers">34 предложения</p>
				</div>
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/4.png" alt="Самосвалы" /></div>
					<p class="technics__name">Самосвалы</p>
					<p class="technics__price">от 65 BYN в час</p>
					<p class="technics__offers">8 предложений</p>
				</div>
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/5.png" alt="Тралы и низкорамные площадки" /></div>
					<p class="technics__name">Тралы и низкорамные площадки</p>
					<p class="technics__price">от 100 BYN в час</p>
					<p class="technics__offers">4 предложений</p>
				</div>
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/6.png" alt="Фронтальные погрузчики" /></div>
					<p class="technics__name">Фронтальные погрузчики</p>
					<p class="technics__price">от 50 BYN в час</p>
					<p class="technics__offers">16 предложений</p>
				</div>
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/7.png" alt="Колесные экскаваторы" /></div>
					<p class="technics__name">Колесные экскаваторы</p>
					<p class="technics__price">от 60 BYN в час</p>
					<p class="technics__offers">40 предложений</p>
				</div>
				<div class="technics__item"><a href="#"></a>
					<div class="technics__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/technics/8.png" alt="Экскаваторы-погрузчики" /></div>
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
							<h4>Работаем по всей Беларуси</h4><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/about/about-map.svg" alt="map">
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
	<section class="catalog">
		<div class="container">
			<h2 class="catalog__title block__title">Каталог техники</h2>
			<div class="catalog__nav">
				<div class="catalog__search">
					<input class="catalog__input" type="text" placeholder="Поиск"><img class="catalog__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/catalog/search.svg"
						alt="search">
				</div>

				<div class="catalog__sort"><span class="catalog__sort-type" data-type="popularity">Сортировать по</span><img class="catalog__arrow"
						src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/catalog/arrow-down.svg" alt="">
					<ul class="catalog__sort-list">
						<li class="catalog__sort-item" data-type="popularity" data-text="По популярности">Популярности</li>
						<li class="catalog__sort-item" data-type="fromMinToMax" data-text="По возрастанию">Возрастанию цены</li>
						<li class="catalog__sort-item" data-type="fromMaxToMin" data-text="По убыванию">Убыванию цены</li>
					</ul>
				</div>
			</div>
			<div class="catalog__categories-wrapper">
				<ul class="catalog__categories">
					<li class="catalog__category active" data-type="all">Все</li>
					<li class="catalog__category" data-type="excavator">Экскаваторы-погрузчики</li>
					<li class="catalog__category" data-type="tipper">Бульдозеры</li>
					<li class="catalog__category" data-type="dozer">Гусеничный экскаватор</li>
					<li class="catalog__category" data-type="loader">Погрузчик</li>
					<li class="catalog__category" data-type="fLoader">Фронтальный погрузчик</li>
					<li class="catalog__category" data-type="wheelDigger">Колесный экскаватор</li>
					<li class="catalog__category" data-type="flail">Тралы и низкорамные площадки</li>
					<li class="catalog__category" data-type="truck">Грунтовой каток</li>
					<li class="catalog__category" data-type="crane">Автокран</li>
					<li class="catalog__category" data-type="grader">Автогрейдер</li>
					<li class="catalog__category" data-type="telescopicLoader">Телескопический погрузчик</li>
					<li class="catalog__category" data-type="mini">Мини-техника</li>
					<li class="catalog__category" data-type="hydraulicHammer">Гидромолоты</li>
					<li class="catalog__category" data-type="drillingEquipment">Ямобур (буровая техника)</li>
				</ul>
				<div class="clearfix"></div>
			</div>


			<!-- Get site url -->
			<div class="page-info-ajax" style="display:none;">
				<p class="ajaxurl">
					<?php echo site_url() ?>/wp-admin/admin-ajax.php
				</p>
			</div>

			<div class="catalog__wrapper">
				<?php
				$query = new WP_Query( [ 
					'post_type' => 'technics',
					'posts_per_page' => 2,
					'meta_key' => 'catalog__popularity',
					'orderby' => 'meta_value_num',
					'order' => 'DESC',
					'cat_tech' => 'all'
				] );

				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<div class="catalog__item">
							<a href="#" class="catalog__link"></a>

							<div class="catalog__img">
								<img src="<?php echo get_field( 'catalog__img' ); ?>" alt="<?php the_title(); ?>" />
							</div>

							<a href="#" class="catalog__button">Подробнее</a>

							<div class="catalog__info">
								<h4 class="catalog__header">
									<?php the_title(); ?>
								</h4>

								<div class="catalog__options">
									<div class="catalog__feature">
										<p class="catalog__name">
											<?php echo get_field( 'catalog__name1' ); ?>
										</p>
										<p class="catalog__value">
											<?php echo get_field( 'catalog__value1' ); ?>
										</p>
									</div>

									<div class="catalog__feature">
										<p class="catalog__name">
											<?php echo get_field( 'catalog__name2' ); ?>
										</p>
										<p class="catalog__value">
											<?php echo get_field( 'catalog__value2' ); ?>
										</p>
									</div>

									<div class="catalog__feature">
										<p class="catalog__name">
											<?php echo get_field( 'catalog__name3' ); ?>
										</p>
										<p class="catalog__value">
											<?php echo get_field( 'catalog__value3' ); ?>
										</p>
									</div>
								</div>

								<p class="catalog__price">
									<?php echo get_field( 'catalog__price' ); ?> BYN
								</p>
							</div>

						</div>
						<?php
					endwhile;
					wp_reset_postdata();
					?>

					<div class="page-info-ajax" style="display:none;">
						<p class="max_pages">
							<?php echo $query->max_num_pages; ?>
						</p>
					</div>

					<?php
				endif;
				?>


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
	</section>
	<section class="feedback first__feedback">
		<div class="container">
			<div class="feedback__wrapper">
				<h2 class="feedback__title block__title">Обратная связь</h2>
				<p class="feedback__subtitle">Нет времени выбирать? Заполните заявку и сотрудник вас проконсультирует.</p>
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
						<div class="advantage__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/advantage/1.svg" alt="преимущество"></div>
						<h4 class="advantage__header">100% компетентный персонал</h4>
						<p class="advantage__description">Все наши машинисты обладают профильным образованием и имеют весомый опыт работы</p>
					</div>
					<div class="advantage__border"></div>
					<div class="advantage__item">
						<div class="advantage__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/advantage/2.svg" alt="преимущество"></div>
						<h4 class="advantage__header">24/7 мы работаем всегда!</h4>
						<p class="advantage__description">Мы понимаем, что оперативность в строительстве очень важны.</p>
					</div>
					<div class="advantage__item">
						<div class="advantage__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/advantage/3.svg" alt="преимущество"></div>
						<h4 class="advantage__header">40% экономии</h4>
						<p class="advantage__description">Наши клиенты получают очень выгодные скидки.</p>
					</div>
					<div class="advantage__border"></div>
					<div class="advantage__item">
						<div class="advantage__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/advantage/4.svg" alt="преимущество"></div>
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
				<div class="news__item news1 element-animation">
					<h4 class="news__header">«Белорусская строительная неделя» снова в Минске</h4>
					<div class="news__info">
						<p class="news__published">сегодня 10:00</p>
						<div class="news__statistics">
							<div class="news__views"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/view.svg"
									alt="количество просмотров"><span>236</span></div>
							<div class="news__comments"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/comment.svg"
									alt="количество просмотров"><span>0</span></div>
						</div>
					</div>
				</div>
				<div class="news__item news2 element-animation">
					<h4 class="news__header">Как правильно установить автокран на рабочей строительной площадке</h4>
					<div class="news__info">
						<p class="news__published">сегодня 10:00</p>
						<div class="news__statistics">
							<div class="news__views"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/view.svg"
									alt="количество просмотров"><span>236</span></div>
							<div class="news__comments"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/comment.svg"
									alt="количество просмотров"><span>0</span></div>
						</div>
					</div>
				</div>
				<div class="news__item news3 element-animation">
					<h4 class="news__header">Область применения телескопических погрузчиков</h4>
					<div class="news__info">
						<p class="news__published">сегодня 10:00</p>
						<div class="news__statistics">
							<div class="news__views"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/view.svg"
									alt="количество просмотров"><span>236</span></div>
							<div class="news__comments"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/comment.svg"
									alt="количество просмотров"><span>0</span></div>
						</div>
					</div>
				</div>
				<div class="news__item news4 element-animation">
					<h4 class="news__header">Весомые причины для аренды специализированной техники</h4>
					<div class="news__info">
						<p class="news__published">сегодня 10:00</p>
						<div class="news__statistics">
							<div class="news__views"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/view.svg"
									alt="количество просмотров"><span>236</span></div>
							<div class="news__comments"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/comment.svg"
									alt="количество просмотров"><span>0</span></div>
						</div>
					</div>
				</div>
				<div class="news__item news5 element-animation">
					<h4 class="news__header">Особенности организации вывоза строительного мусора и грунта</h4>
					<div class="news__info">
						<p class="news__published">сегодня 10:00</p>
						<div class="news__statistics">
							<div class="news__views"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/view.svg"
									alt="количество просмотров"><span>236</span></div>
							<div class="news__comments"><img class="news__icon" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/news/comment.svg"
									alt="количество просмотров"><span>0</span></div>
						</div>
					</div>
				</div>
			</div><a class="news__more btn__link btn__grey" href="#">Посмотреть все</a>
		</div>
	</section>
	<section class="brands">
		<div class="container">
			<h2 class="brands__title block__title">В нашем распоряжении машины лучших мировых производителей</h2>
			<div class="brands__wrapper">
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/1.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/2.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/3.svg" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/4.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/5.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/6.svg" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/7.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/8.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/9.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/10.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/11.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/12.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/13.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/14.png" alt="logo" /></div>
				<div class="brands__item"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/brands/15.png" alt="logo" /></div>
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
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>земляные работы;</span></li>
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>сельское хозяйство;</span></li>
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>лесное хозяйство;</span></li>
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>подготовка участка к строительству;</span></li>
				</ul>
				<ul class="need__list">
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>дорожное строительство;</span></li>
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>возведение жилой, коммерческой недвижимости, промышленных
							объектов;</span>
					</li>
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>проведение коммуникаций;</span></li>
					<li><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/need/line.svg" alt=""><span>монтаж в системах электро-, водо- и теплоснабжения.</span></li>
				</ul>
			</div>
			<p class="need__text">Специализированные машины помогают фирмам-застройщикам оперативно выполнять большие объемы работ в строительстве и других отраслях без больших
				трудозатрат и финансовых издержек. В компании «БауАренда» взять в аренду спецтехнику могут как предприятия и организации, так и клиенты-физические лица.</p>
			<p class="need__text">Мы доставим заказанную технику к оговоренному времени в любую точку Беларуси. Схему расчета стоимости услуг Вы выбираете сами (за каждый час или
				посменно). У компании «БауАренда» собственный парк спецтехники для строительства и земляных работ, состоящий из 59 мощных производительных машин, готовых к работе в любое
				время.</p>
		</div>
	</section>
	<section class="causes">
		<div class="container causes__container">
			<div class="causes__main">
				<h2 class="causes__title block__title">Почему аренда специальной техники - это выгодно?</h2>
				<p class="causes__text">За несколько предыдущих лет четко наметилась тенденция, когда аренда строительной техники становится все более популярной услугой среди строительных
					компаний и частных клиентов. Это вполне объяснимо, ведь у аренды строительной спецтехники немало весомых преимуществ перед покупкой оборудования в собственность. Среди
					них:</p>
			</div>
			<div class="causes__wrapper">
				<div class="causes__item">
					<div class="causes__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/causes/1.svg" alt="logo" /></div>
					<p class="causes__description">Возможность быстро взять в аренду спецтехнику нужного типа позволяет в короткие сроки увеличить производственные мощности, если собственное
						оборудование вышло из строя или наметилось отставание от утвержденного графика выполнения работ.</p>
				</div>
				<div class="causes__item">
					<div class="causes__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/causes/2.svg" alt="logo" /></div>
					<p class="causes__description">Экономия денежных средств за счет отсутствия затрат на зарплату водителей и операторов техники, ремонт и сервисное обслуживание машин,
						амортизацию.</p>
				</div>
				<div class="causes__item">
					<div class="causes__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/causes/3.svg" alt="logo" /></div>
					<p class="causes__description">Большой выбор даже редких машин. Аренда машин спецтехники позволяет найти для строящегося объекта за умеренную плату даже сложное и редкое
						дорогостоящее оборудование, причем сразу с услугами подготовленного опытного машиниста.</p>
				</div>
				<div class="causes__item">
					<div class="causes__icon"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/causes/4.svg" alt="logo" /></div>
					<p class="causes__description">Компании не нужно заботиться о консервации техники на зиму, искать стоянку или ангар для машин на период межсезонья.</p>
				</div>
			</div>
		</div>
	</section>
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
	<section class="reviews">
		<div class="container">
			<h2 class="reviews__title block__title">Отзывы</h2>
			<div class="reviews__slider-container">
				<div class="reviews__slider swiper">
					<div class="reviews__wrapper swiper-wrapper">
						<div class="reviews__item swiper-slide">
							<div class="reviews__preview">
								<div class="reviews__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/reviews/rev1.jpg" alt="отзыв" /></div>
							</div>
							<div class="reviews__info">
								<h4 class="reviews__header">Строительная компания АгриПО, директор Ореховский В.В.</h4>
								<p class="reviews__text">Выражаем признательность за сотрудничество. Компания «БауАренда» предоставила в аренду тралы для транспортировки леса. Техника полностью
									отрабатывает потраченные деньги. Никаких «случайностей» в виде выхода из строя не произошло. По организации работы тоже все замечательно. Подписали договор, и уже
									на следующее утро тралы были в нашем распоряжении. Рекомендуем ООО «БауАренда» как надежного контрагента!</p><a class="reviews__link" href="#"></a>
							</div>
						</div>
						<div class="reviews__item swiper-slide">
							<div class="reviews__preview">
								<div class="reviews__img"><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/reviews/rev1.jpg" alt="отзыв" /></div>
							</div>
							<div class="reviews__info">
								<h4 class="reviews__header">Строительная компания АгриПО, директор Ореховский В.В.</h4>
								<p class="reviews__text">Выражаем признательность за сотрудничество. Компания «БауАренда» предоставила в аренду тралы для транспортировки леса. Техника полностью
									отрабатывает потраченные деньги. Никаких «случайностей» в виде выхода из строя не произошло. По организации работы тоже все замечательно. Подписали договор, и уже
									на следующее утро тралы были в нашем распоряжении. Рекомендуем ООО «БауАренда» как надежного контрагента!</p><a class="reviews__link" href="#"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="reviews__nav">
					<button class="reviews__prev"><span class="reviews__navButton"></span><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/intro/intro-prev.svg"
							alt="prev"></button>
					<button class="reviews__next"><span class="reviews__navButton"></span><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/intro/intro-next.svg"
							alt="next"></button>
				</div>
			</div>
		</div>
		<div class="reviews__pagination">
			<div class="reviews__dot"></div>
			<div class="reviews__dot"></div>
			<div class="reviews__dot"></div>
		</div>
		<div class="reviews__fullscreen">
			<div class="reviews__fullscreen-wrapper"><img class="reviews__fullscreen-img" src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/reviews/rev1.jpg"
					alt="скриншот отзыва">
				<div class="reviews__fullscreen-closer">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.5 1.57617L22.5 22.5762M22.5 1.57617L1.5 22.5762" stroke="white" stroke-width="2"></path>
					</svg>
				</div>
			</div>
		</div>
	</section>
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