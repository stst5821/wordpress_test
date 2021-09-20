<?php
function test_setup() {
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効にする
  add_theme_support('menus');
}
add_action('after_setup_theme','test_setup'); // test_setup関数をafter_setup_themeアクションフックに登録