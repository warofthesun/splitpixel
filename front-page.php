<?php
/*
 Template Name: Front Page
 
*/
?>
<?php get_header(); ?>
<!--FRONT-PAGE.PHP-->
			<div id="content" class="front-page">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<div class="welcome">
									<div class="d-1of2 m-all">
										&nbsp;
									</div>
									<div class="d-1of2 m-all last-col section_one">
										<div><?php the_field('section_one'); ?></div>
									</div>
								</div>
								<div style="clear:both"></div>
								<div class="about">
									<div class="d-2of3 t-all m-all">
										<h2>Locations &amp; Responsibilities</h2>
										<div class="d-1of2 t-1of2 m-all">
											<div class="location__logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/griffin_logo.png"></div>
											<div class="location__content">
												<div class="location__description"><?php the_field('location_one_description'); ?></div>
												<div class="location__responsibilities"><?php the_field('location_one_responsibilities'); ?></div>
											</div>
										</div>
										<div class="d-1of2 t-1of2 m-all">
											<div class="location__logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/emma_logo.png"></div>
											<div class="location__content">
												<div class="location__description"><?php the_field('location_two_description'); ?></div>
												<div class="location__responsibilities"><?php the_field('location_two_responsibilities'); ?></div>
											</div>
										</div>
									</div>
									
									<div class="d-1of3 t-all m-all">
										<h2>Tools I Use</h2>
										<div class="d-all">
											<div class="tools"><?php the_field('tools_i_use'); ?></div>
										</div>
									</div>
								</div>
								<div style="clear:both" name="work"></div>
								<div class="entry-content cf">
									<?php the_content(); ?>
								</div>
								<div style="clear:both"></div>
								<div class="cheers m-all">
									<div class="d-1of4">&nbsp;</div>
									<div class="d-1of2">
									<?php the_field('cheers'); ?>
									</div>
									<div class="d-1of4">&nbsp;</div>
								</div>
									
							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					

				</div>

			</div>


<?php get_footer(); ?>
