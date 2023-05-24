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
			$query_posts = new WP_Query( [ 
				'post_type' => 'technics',
				'posts_per_page' => $args['posts_per_page'],
				'meta_key' => 'catalog__popularity',
				'orderby' => 'meta_value_num',
				'order' => 'DESC',
				'cat_tech' => 'all'
			] );

			if ( $query_posts->have_posts() ) :
				while ( $query_posts->have_posts() ) :
					$query_posts->the_post();
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
