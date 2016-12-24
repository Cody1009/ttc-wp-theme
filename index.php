<?php get_header(); ?>

<!-- メイン始まり -->
      <div id="main"  class="container col-sm-8">

<!--  posts-->
<!-- ワードプレス　ループの書き方 -->

<?php

if (have_posts()):
       while (have_posts()):
          the_post();
      ?>




          <div id="posts">
            <div class="post">


            <div class="post-header">
              <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <div class="post-meta">
                <?php echo get_the_date(); ?> [<?php the_category(', '); ?>]

              </div>
            </div>
                  <div class="post-content">
<!-- アイキャッチ画像 -->

                        <div class="post-image">
                          <?php if (has_post_thumbnail()): ?>
                                 <?php the_post_thumbnail(array(100, 100)); ?>
                          <?php else: ?>
                      <img src="<?php echo get_name_directory_uri(); ?>ttcimg/no image_Fotor.jpg"  width="100" height="100">


                          <?php endif; ?>


                        </div>
                        <div class="post-body">
                          <?php the_excerpt(); ?>
                        </div>

                  </div>


          </div><!-- </div> post 終わり-->
        <?php endwhile;

             else:?>
          <p>There is no more posts!</p>

        <?php endif;
         ?>

         <div class="navigation">
              <div class="prev"><?php previous_posts_link(); ?></div>
              <div class="next"> <?php next_posts_link(); ?></div>

         </div>
        </div>
        <!-- posts 終わり -->




<!-- main end -->
<?php get_sidebar(); ?>

<!-- footer start -->
<?php get_footer(); ?>
