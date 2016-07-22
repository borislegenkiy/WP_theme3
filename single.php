<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Prodavec_Okon
 */
get_header(); ?>

<div class="container">
	<main class="content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="data">
					<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					} ?>
				</div>
				<!--<div class="data"><?php the_date();?></div>-->
				<h1><?php the_title();?></h1>
				<?php if ( is_active_sidebar( 'single-header-1' ) ) : ?>
					<?php dynamic_sidebar( 'single-header-1' ); ?>
				<?php endif; ?>
				<?
					if( get_the_post_thumbnail() ) {
						echo "<div class='place_content_img'>".get_the_post_thumbnail($image_id)."</div>";
					}
				?>
				<? the_content(''); ?>
				<?php if ( is_active_sidebar( 'single-footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'single-footer-1' ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="after_post">
			<div class="after_post_line1">
				<!--
				<div class="like_p f_left">
					<div class="place_likes f_left">
						<div class="place_like f_left">
							<img src="/wp-content/themes/prodavec_okon/img/like+.png">
						</div>
						<div class="counter_likes f_left">
							1234567
						</div>
					</div>
					<div class="like_m f_right">
						<div class="place_like f_left">
							<img src="/wp-content/themes/prodavec_okon/img/like-.png">
						</div>
						<div class="counter_likes f_left">
							1234567
						</div>
					</div>
				</div>
				-->
			</div>
			<div class="place_social f_right">
				<div class="name_social_links">ПОДЕЛИТЬСЯ ЗАПИСЬЮ</div>
				<div class="place_social_icons">
					<?php echo do_shortcode('[smm_buttons]');?>
				</div>
			</div>
		</div>
		
		<div class="recommended">
			<?php
				$categories = get_the_category($post->ID);
				if ($categories) {
					$category_ids = array();
					foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
					$args=array (
					  'category__in' => $category_ids,
					  'post__not_in' => array($post->ID),
					  'showposts'=>7,
					  'orderby'=>rand,
					  'caller_get_posts'=>1);
					$my_query = new wp_query($args);
					//echo $my_query['0'];
					echo "
						<div class='recommended_article f_left'>
							<div class='recommended_article_header'>
								<div class='recommended_article_header_img f_left'><img src='/wp-content/themes/prodavec_okon/img/notes.png'></div>
								<div class='recommended_article_header_text f_left'>РЕКОМЕНДУЕМЫЕ СТАТЬИ</div>
							</div>
							<div class='recommended_article_blk'>
								<ul class='recommended_article_links'>
						";
					if( $my_query->have_posts() ) {
						while ($my_query->have_posts()) {
							$my_query->the_post();
							?>
							<li><span class="seolink" rel="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></span></li>
							<?php
							$count++;
						}
						echo "</ul>
							</div>
						</div>";
					}
					wp_reset_query();
				}
			?>
		</div>

		<div class="social_comments_place">
			<div class='recommended_article_header'>
				<div class='recommended_article_header_img f_left'><img src='/wp-content/themes/prodavec_okon/img/notes.png'></div>
				<div class='recommended_article_header_text f_left'>КОММЕНТАРИИ</div>
			</div>
			<div class="social_comments">
				<div class="social_vk f_left">
					<div id="vk_comments"></div>
					<script type="text/javascript">
					VK.Widgets.Comments("vk_comments", {limit: 10, width: "330", attach: "*"});
					</script>
				</div>
				<div class="social_facebook f_left">
					<div id="fb-root"></div>
					<div class="fb-comments" data-href="<?php echo get_permalink();?>" data-width="330" data-numposts="5"></div>
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>