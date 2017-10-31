<?php
// wp_head
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');


// // pre get posts
// function my_pre_get_posts($query) {
//   if( is_admin() || ! $query->is_main_query() ){
//     return;
//   }

//   if ( $query->is_home() ) {
//     $query->set( 'posts_per_page', '5' );
//     $query->set( 'post_type',array( 'post', 'seminar' ) );
//     $query->set( 'cat','-1' );
//     return;
//   }

//   if ( $query->is_post_type_archive('seminar') ) {
//     $query->set( 'posts_per_page', '10' );
//     return;
//   }

//   if ( $query->is_archive() ) {
//     $query->set( 'posts_per_page', '10' );
//     return;
//   }

// }
// add_action( 'pre_get_posts', 'my_pre_get_posts' );


// // seminar content default
// add_filter( 'default_content', 'my_editor_content' );
// function my_editor_content( $content ) {
//   $screen = get_current_screen();
//   if ( $screen -> post_type == 'seminar' ) {
//     $content = '[mwform_formkey slug="seminar-form"]';
//   }
//     return $content;
// }


// // seminar content hidden
// function post_output_css() {
//   $post_type = get_post_type();
//   if ($post_type == 'seminar') {
//       $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
//       echo $hide_postdiv_css;
//   }
// }
// add_action('admin_head', 'post_output_css');


// // paginate custom
// function my_pagination() {
//   global $wp_query;
//   $big = 99999999;
//   $page_format = paginate_links(array(
//     'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//     'format' => 'page/%#%/',
//     'current' => max(1, get_query_var('paged')),
//     'total' => $wp_query->max_num_pages,
//     'prev_text'      => __('<i class="fa fa-chevron-left" aria-hidden="true"></i><span> BACK</span>'),
//     'next_text'      => __('<span>NEXT </span><i class="fa fa-chevron-right" aria-hidden="true"></i>'),
//     'mid_size'  => 2,
//     'type'  => 'array'
//    ));
//   if(is_array($page_format)) {
//     $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
//     echo '              <div class="C-paginate">'."\n";
//     echo '                <div class="C-paginate__inner">'."\n";
//     echo '                  <ul class="C-paginate__list">'."\n";
//     foreach ($page_format as $page) {
//       echo "                   <li>$page</li>"."\n";
//     }
//     echo '                  </ul>'."\n";
//     echo '                </div>'."\n";
//     echo '              </div>'."\n";
//   }
//   wp_reset_query();
// }


// content br change to html5
add_filter( 'the_content', 'brHTML5' );
function brHTML5( $content ) {
    $content = str_replace('<br />', '<br>', $content);
    return $content;
}

