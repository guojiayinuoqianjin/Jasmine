<?php
//用户自定义头像功能
include (TEMPLATEPATH . '/inc/author-avatars.php');
//优化网站代码
include (TEMPLATEPATH . '/inc/optimization-speed.php');
//主题自带插件
include (TEMPLATEPATH . '/inc/customized-plugin.php');

//注册菜单的名称
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( '首页' ) )
  );
}
add_action( 'init', 'register_my_menus' );//初始化的时候启用

//为指定菜单的li标签设置样式
function wpdocs_channel_nav_class( $classes, $item, $args ) {
 //在进行涉及变量的逻辑比较时，始终将变量放在右侧，将常量，文字或函数调用放在左侧。如果双方都不是变量，则顺序并不重要。
 //除非绝对必要，否则不应使用松散的比较，因为它们的行为可能会产生误导。
    if ( 'header-menu' === $args->theme_location ) {
    	unset($classes);//将数组清空
        $classes = array('nav-item');
		}
 
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_channel_nav_class' , 10, 4 );

//删除
function sonliss_menu_link_atts( $atts, $item, $args ) {
  $atts['class'] = 'nav-link';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'sonliss_menu_link_atts', 10, 3 );

//自定义头像
// add_filter( 'avatar_defaults', 'newgravatar' );  
 
function newgravatar ($avatar_defaults) {  
    $myavatar = get_bloginfo('template_directory') . '/assets/images/gravatar.jpg';  
    $avatar_defaults[$myavatar] = "Jasmine默认头像";  
    return $avatar_defaults;  
}
/**
 * 说明：直接去掉函数 comment_class() 和 body_class() 中输出的 "comment-author-" 和 "author-"
 */
function lxtx_comment_body_class($content){ 
    $pattern = "/(.*?)([^>]*)author-([^>]*)(.*?)/i";
    $replacement = '$1$4';
    $content = preg_replace($pattern, $replacement, $content);  
    return $content;
}
// add_filter('comment_class', 'lxtx_comment_body_class');
// add_filter('body_class', 'lxtx_comment_body_class');
?>