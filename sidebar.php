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
			require_once("db.php");
		
			$url = $_SERVER["REQUEST_URI"];
			
			$parts_url = explode("/", $url);
			if ($parts_url[2]=='for_window_companies') {
				$args = 'child_of=260';
			}
			if ($parts_url[2]=='need_windows') {
				$args = 'child_of=280';
			}
			if ($parts_url[2]!='need_windows' && $parts_url[2]!='for_window_companies') {
							$str_sql1 = "SELECT  `id` FROM  `wp_posts` WHERE `post_name`='".$parts_url[1]."'";
							
							$post_id = $wc->results($str_sql1);
							foreach($post_id as $id) {
								$main_id = $id['id'];
							}
							
							$str_sql2 = "SELECT  `term_taxonomy_id` FROM `wp_term_relationships` WHERE `object_id`= '".$main_id."'";
							$post_term_taxonomy = $wc->results($str_sql2);
							foreach($post_term_taxonomy as $term_taxonomy) {
								$main_term_taxonomy = $term_taxonomy['term_taxonomy_id'];
							}
							
							$str_sql3 = "SELECT `parent` FROM `wp_term_taxonomy` WHERE `term_taxonomy_id`='".$main_term_taxonomy."'";
							$parent_term_taxonomy = $wc->results($str_sql3);
							foreach($parent_term_taxonomy as $parent) {
								$parent_post = $parent['parent'];
							}
							
							if ($parent_post==260) {
								$args = 'child_of=260';
								$flag_not_show = false;
							}
							else {
								if ($parent_post==280) {
									$args = 'child_of=280';
									$flag_not_show = false;
								} else {
									
									$flag_not_show = true;
								}
							}
			}
			if (!$flag_not_show) {
				$categories = get_categories($args);
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
			}
		?>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php endif; ?>
	</div>
</aside>