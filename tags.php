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
			<main class="content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?
					$image_url2 = wp_get_attachment_image_src($image_id,'medium');
					$image_url2 = $image_url2[0];
					if( get_the_post_thumbnail() ) {
						$image_url=get_the_post_thumbnail($image_id,array(240,240));
					} else {
						$image_url="<img src='/wp-content/themes/prodavec_okon/img/logo_post.png'>";
					}
					?>
					
					<div class="item_content">
						<table>
							<tr>
								<td class="item_content_td1"><a href="<?php the_permalink();?>"><?php echo $image_url;?></a></td>
								<td class="item_content_td2">
									<div class="item_content_header">
										<a href="<?php the_permalink();?>"><?php  the_title(); ?></a>
									</div>
									
									<div class="text_item"> 	
										<?php the_excerpt(); ?>
									</div>
									
									<div class="text_item"> 	
										<a href="<?php the_permalink();?>">Читать все..</a>
									</div>
								</td>
							</tr>
						</table>
					</div>
				<?php endwhile; ?>
				
				<div class="digits">
		            <?php wp_pagenavi(); ?>
				</div>
			</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
