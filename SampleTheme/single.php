<?php get_header(); ?>
  <h1 class="title">固定ページpage.phpだよ</h1>
  <?php if(have_posts()):
    while(have_posts()):the_post(); ?>

  <h1><?php the_title(); ?></h1>
  <section>
    <?php the_content(); ?>
  </section>
  <?php endwhile;
  endif; ?>
<?php get_footer(); ?>