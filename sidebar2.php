<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prodavec_Okon
 */
?>
<aside class="right-sidebar">
	<div class="сategories">
		<?php
			$categories = get_categories('child_of=280');
			if($categories){
				echo "
					<h2>Рубрики</h2>
					<ul class='list_sideabar'>
				";
				$all_categories="";
				foreach($categories as $category) {
					$i++;
					$all_categories=$all_categories."
					<li><span class='seolink' rel='".get_category_link($category->term_id)."' title='".$category->cat_name."'>".$category->cat_name."</span></li>";
				}
				echo $all_categories;
				echo "
					</ul>";
			}
		?>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php endif; ?>
	</div>
</aside>


