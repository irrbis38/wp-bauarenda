<?php
/**
 * Template part for categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

?>

<?php
$terms = get_terms( [ 
	'taxonomy' => 'cat_tech',
	'hide_empty' => false,
	'parent' => 0,
	// 'order' => 'term_id'
] );
foreach ( $terms as $term ) :
	$children = get_terms( [ 
		'taxonomy' => $term->taxonomy,
		'parent' => $term->term_id,
		'hide_empty' => false,
	] );
	?>

	<div class="categories__group">
		<div class="categories__title"><span>
				<?php echo $term->name ?>
			</span><span class="categories__arrow">
				<svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L4.5 5L8 1" stroke="#1F1E1D" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg></span></div>
		<ul class="categories__list">

			<?php foreach ( $children as $child ) : ?>
				<li class="categories__item">
					<button class="categories__btn" data-category=<?php echo $term->slug ?> data-subcategory=<?php echo $child->slug ?>><?php echo $child->name ?></button>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>

	<?php
endforeach;
?>
