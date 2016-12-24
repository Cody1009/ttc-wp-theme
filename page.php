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

            </div>
                  <div class="post-content">
<!-- アイキャッチ画像 -->

<!-- 記事の内容表示 -->
                          <?php the_content(); ?>
                        </div>

                  </div>


          </div><!-- </div> post 終わり-->
        <?php endwhile;

             else:?>
          <p>There is no page</p>

        <?php endif;
         ?>
        </div>
        <!-- posts 終わり -->




<!-- main end -->
<?php get_sidebar(); ?>

<!-- footer start -->
<?php get_footer(); ?>
