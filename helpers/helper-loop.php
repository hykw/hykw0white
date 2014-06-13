<?php

if (!function_exists('helper_loop_noposts')) {
  function helper_loop_noposts()
  {
    return <<< EOL
<article id="post-0" class="post error404 not-found clearfix">
  <header class="entry-header">
    <h1 class="entry-title">Not Found</h1>
  </header>
  <div class="entry-content clearfix">
    <p>コンテンツがありません。</p>
  </div>
</article>
EOL;
  }
}

if (!function_exists('helper_loop_entryheader_title')) {
  function helper_loop_entryheader_title($id, $ar_postclass, $title)
  {
    $postclass = implode(' ', $ar_postclass);

    $ret = '';
    $ret .= <<< EOL

          <!-- article start -->
          <article id="post-{$id}" class="{$postclass}">
            <header class="entry-header">

EOL;

    if ( is_home() || is_archive() || is_search() ) { 
      $permalink = get_the_permalink();
      $thumnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
#     $thumnail = get_the_post_thumbnail(get_the_ID(), array(70, 70));
      
      $ret .= <<< EOL
              {$thumnail}
              <h1 class="entry-title">
                <a href="{$permalink}" rel="bookmark">{$title}</a>
              </h1>

EOL;
    } else {
      # pageとかの場合
      $thumnail = get_the_post_thumbnail();

      $ret .= <<< EOL
              {$thumnail}
              <h1 class="entry-title">{$title}</h1>

EOL;
    }

    return $ret;
  }
}

if (!function_exists('helper_loop_time')) {
  function helper_loop_time($time)
  {
    return <<< EOL
              <p class="published">{$time}</p>
EOL;
  }
}

if (!function_exists('helper_loop_excerpt')) {
  function helper_loop_excerpt($excerpt)
  {
    return <<< EOL
            <div class="entry-summary">
              {$excerpt}
            </div>
EOL;
  }
}

if (!function_exists('helper_loop_content')) {
  function helper_loop_content($content)
  {
    $ret = '';
    $ret .= <<< EOL
  <div class="entry-content">
    {$content}
EOL;

    $params = array(
                    'before' => '<p class="link_pages">',
                    'after' => '</p>',
                    'pagelink' => '<span>%</span>'
                    );
    wp_link_pages( $params );
 
    $ret .= <<< EOL

  </div><!-- #entry-content -->
EOL;

    return $ret;
  }
}

if (!function_exists('helper_loop_header_close')) {
  function helper_loop_header_close()
  {
    return <<< EOL

            </header>

EOL;
  }
}

if (!function_exists('helper_loop_article_close')) {
  function helper_loop_article_close()
  {
    return <<< EOL

          </article><!-- #article end -->

EOL;
  }
}

if (!function_exists('helper_loop_navigation')) {
  function helper_loop_navigation($prev, $next)
  {
    return <<< EOL
  <div class="wp-pagenavi">
    <span class="nav-previous">{$prev}</span>
    <span class="nav-next">{$next}</span>
  </div><!-- #nav-above -->
EOL;
  }
}
