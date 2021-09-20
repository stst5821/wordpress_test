<?php get_header(); ?>
  <h1 class="title">index.phpだよ</h1>
  <p>
    <img src="<?php echo get_template_directory_uri(); ?>/images/no_img.png" alt="画像">
  </p>

  <!-- 記事一覧 -->

  <div id="main" class="col-md-9">
      <h1>記事一覧</h1>
      <hr>
      <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
        <!-- アイキャッチ画像があれば表示する -->
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } 
        ?>
        <!-- 投稿タイトル表示 -->
        <h2>
          <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <section>
          <p>作成日時：<?php the_time('Y年n月j日'); ?></p>
          <!-- 本文を抜粋表示 -->
          <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
        </section>
        <hr>
      <?php 
          endwhile;
      endif;
      ?>
 		</div>

<?php get_footer(); ?>