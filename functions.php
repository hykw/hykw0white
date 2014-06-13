<?php

/*
 * 子テンプレートの functions.php の書き方
----------------------
$helpers = Array(
                 'helper-loop.php',
                 );
foreach ($helpers as $helper) {
  $file = sprintf('%s/helpers/%s', get_stylesheet_directory(), $helper);
  if (file_exists($file))
    require_once($file);
}
----------------------
*/

require_once(get_template_directory().'/helpers/helper-loop.php');

add_editor_style('editor-style.css');

### setup
if (!function_exists('hykw0white_setup')) {
  function hykw0white_setup()
  {
    $supports = Array(
                      'custom-header',
                      'custom-background',
                      'menus',
                      'post-thumbnails',
                      'automatic-feed-links',
                      );
    foreach ($supports as $support) {
      add_theme_support($support);
    }
    set_post_thumbnail_size( 672, 372, true );
    /*
     # http://wpdocs.sourceforge.jp/関数リファレンス/add_theme_support
    add_theme_support('post-formats', array(
                                            'aside',
                                            'link',
                                            ));
    */
                                            

    add_theme_support('html5', array(
                                      'search-form',
                                      'comment-form',
                                      'comment-list',
                                      'gallery',
                                      'caption',
                                      ));
  
    $spaces = str_repeat(' ', 12);
    register_sidebar( array(
                            'name' => 'Widget Area1',
                            'id' => 'widget-area1',
                            'before_widget' => "\n".$spaces."<!-- s:widget -->\n".$spaces.'<li id="%1$s" class="widget-container %2$s">',
                            'after_widget' => "\n".$spaces."</li><!-- e:widget -->\n",
                            'before_title' => '<h3 class="widget-title">',
                            'after_title' => '</h3>',
                            ) );
  }
}
add_action('after_setup_theme', 'hykw0white_setup' );

### navigation
if (!function_exists('hykw0white_navimenu_setup')) {
  function hykw0white_navimenu_setup() 
  {
    register_nav_menus(array(
                             'navi_area1' => 'グローバルナビ',
                             'navi_area2' => 'フッターナビ',
                             ));
  }
}
add_action('after_setup_theme', 'hykw0white_navimenu_setup');
