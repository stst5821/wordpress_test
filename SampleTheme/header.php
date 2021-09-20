<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 親テーマは↓を使う、子テーマはget_stylesheet_directory_uriを使う。 -->
  <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <p>キャッチフレーズ：<?php bloginfo('description'); ?></p>
  <nav>
  <!-- メニューにセットしたページを表示する -->
  <?php
		$args = array(
			'menu_class' => 'nav navbar-nav',
			'container' => false,
		);
		wp_nav_menu($args);
		?>
  </nav>