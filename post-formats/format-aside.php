
              <?php
                /*
                 * Web project format
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
              <div class="m-all">
                <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                <div class="d-1of12">
                  &nbsp;
                </div>
                <div class="d-4of5 last-col">
                  <section class="entry-content cf" itemprop="articleBody">
                    <?php
                      // the content (pretty self explanatory huh)
                      the_content();

                    ?>
                  </section> <?php // end article section ?>
                </div>
                  <div class="d-1of12">
                    &nbsp;
                  </div>
              </div>
              <div style="clear:both"></div>
              <div class="d-1of12">
                &nbsp;
              </div>
              <div class="d-4of5 m-all format-image last-col"><img src="<?php the_field( 'first_feature' ); ?>"></div>
              <div class="d-1of12">
                &nbsp;
              </div>
              <div class="d-all m-all">


                <footer class="article-footer">
                  <?php the_field('post_content')?>
                  <?php printf( __( 'See all', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Related to:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer> <?php // end article footer ?>

                <?php //comments_template(); ?>
              </div>
              </article> <?php // end article ?>
