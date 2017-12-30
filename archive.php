<!--archive-->
<?php get_header('archive'); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php

							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">



								<section class="entry-content cf">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="d-1of3 m-all">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail( 'archive-600' ); ?>
										<h3 class="h2 entry-title"><?php the_title() ?></h3>
									</a>
								</div>
							<?php endwhile; ?>
						</section>

						</article>
									
							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
