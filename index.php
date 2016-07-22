<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Prodavec_Okon
 */

get_header(); ?>
	<div class="container">
				<div class="title_site_info">
					<h1><span>Оконный портал #1</span><br>все для покупателей окон и владельцев оконного бизнеса</h1>
					<h2 style="color: gray !important;">Выберите, что хотите:</h2>
				</div>
				
				<div class="buttons_blue_place">
					<div class="button_blue_place f_left"><div onclick="window.open('/category/need_windows','_self');"  class="button_blue2"><span class="f_right">Мне нужны окна</span></div></div>
					<div class="button_blue_place f_left"><div onclick="window.open('/category/for_window_companies','_self');"  class="button_blue1"><span class="f_right">Наладить оконный бизнес</span></div></div>
				</div>
				
				<div class="place_latest_news">
					<div class="palce_news_for_blogs">
						<div class="place_news_blog f_left">
							<div class="latest_news_header">Новое в базе по окнам</div>
							<?php query_posts('showposts=5&category_name=need_windows'); ?>
							<?php while (have_posts()) : the_post(); ?> 
							<?php
								$image_url2 = wp_get_attachment_image_src($image_id,'medium');
								$image_url2 = $image_url2[0];
								if( get_the_post_thumbnail() ) {
									$image_url=get_the_post_thumbnail($image_id,array(240,240));
								} else {
									$image_url="<img  alt='Продавец Окон'  src='/wp-content/themes/prodavec_okon/img/logo_post.png'>";
								}
							?>
						
							<!--<div class="place_news_blog_img"><a href="<?php the_permalink();?>"><?php echo $image_url;?></a></div>-->
							<div class="place_news_blog_text">
								<div class="place_news_blog_header"><a href="<?php the_permalink();?>"><?php  the_title(); ?></a></div>
								<div class="place_news_blog_content">
									<?php the_excerpt(); ?>
								</div>
							</div>
							<div class="buttons_after_post_place">
								<!--<div class="like_button_place f_left">
									
								</div>-->
								<div class="read_more_place f_right">
									<div class="read_more_button f_right"><a href="<?php the_permalink();?>">Читать полностью..</a></div>
								</div>
							</div>
							<?php endwhile;?>
						</div>
						<div class="place_news_blog f_right">
							<div class="latest_news_header">Новое по оконному бизнесу</div>
							<?php query_posts('showposts=5&category_name=for_window_companies'); ?>
							<?php while (have_posts()) : the_post(); ?> 
							<?php
								$image_url2 = wp_get_attachment_image_src($image_id,'medium');
								$image_url2 = $image_url2[0];
								if( get_the_post_thumbnail() ) {
									$image_url=get_the_post_thumbnail($image_id,array(240,240));
								} else {
									$image_url="<img  alt='Продавец Окон' src='/wp-content/themes/prodavec_okon/img/logo_post.png'>";
								}
							?>						
							<!--<div class="place_news_blog_img"><a href="<?php the_permalink();?>"><?php echo $image_url;?></a></div>-->
							<div class="place_news_blog_text">
								<div class="place_news_blog_header"><a href="<?php the_permalink();?>"><?php  the_title(); ?></a></div>
								<div class="place_news_blog_content">
									<?php the_excerpt(); ?>
								</div>
							</div>
							<div class="buttons_after_post_place">
								<!--<div class="like_button_place f_left">
									
								</div>-->
								<div class="read_more_place f_right">
									<div class="read_more_button f_right"><a href="<?php the_permalink();?>">Читать полностью..</a></div>
								</div>
							</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
	</div>
<?php get_footer(); ?>
