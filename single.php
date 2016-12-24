<?php get_header(); ?>

<!-- メイン始まり -->
      <div id="main" class="container">

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

<!-- 記事の内容表示 -->
                          <?php the_content(); ?>
                        </div>

                  </div>
                  <div class="navigation">
                       <div class="prev"><?php previous_post_link(); ?></div>
                       <div class="next"> <?php next_post_link(); ?></div>

                  </div>

          </div><!-- </div> post 終わり-->
        <?php endwhile;

             else:?>
          <p>There is no more posts!</p>

        <?php endif;
         ?>
        </div>
        <!-- posts 終わり -->




<!-- main end -->
<?php get_sidebar(); ?>

<!-- footer start -->
<?php get_footer(); ?>
