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
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php endif; ?>
	</div>
</aside>