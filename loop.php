<?php

# コンテンツが空？
if ( !have_posts() ) {
  echo helper_loop_noposts();
} else {
  while ( have_posts() ) {
    ### header
    the_post();
    $theid = get_the_ID();

    $postclass = get_post_class('clearfix');
    $title = get_the_title();
    
    echo helper_loop_entryheader_title($theid, $postclass, $title);

    # time
    if ( !is_page() ) {
      $time = get_the_time('Y/m/d');
      echo helper_loop_time($time);
    }
    echo helper_loop_header_close();
    ### // header

    ### content
    if ( is_home() || is_archive() || is_search() ) {
      $excerpt = get_the_excerpt();
      echo helper_loop_excerpt($excerpt);
    } else {
      # pageとかの場合
      $content = get_the_content();
      echo helper_loop_content($content);
    }

    echo helper_loop_article_close();

  }
}

/* ページ送りナビゲーションを表示。WP-PageNavi対応 */
if ( function_exists( 'wp_pagenavi' ) ) {
  wp_pagenavi();
} elseif ( $wp_query->max_num_pages > 1 ) { 
  $prev = get_previous_posts_link( '&laquo; 前のページへ' );
  $next = get_next_posts_link( '次のページへ &raquo;' );

  echo helper_loop_navigation($prev, $next);
}
