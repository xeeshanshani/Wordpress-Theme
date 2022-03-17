<?php 
register_nav_menus( array(
    'primary-menu' => __( 'Primary Menu' ),
    'footer-menu' => __( 'Footer Menu' ),
    'social-menu' => __( 'Social Menu' ),
) );
   

// Add Featured Image Support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'automatic-feed-links' );

register_sidebar( array(
    'name' => __( 'Sidebar', '24-news' ),
    'id' => 'sidebar',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', '24-news' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

// Add categpry for post
function create_post_type() {
    register_post_type( 'post',
        array(
            'labels' => array(
                'name' => __( 'Post' ),
                'singular_name' => __( 'Post' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'post'),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'page-attributes', 'post-formats' ),
            'taxonomies' => array('category', 'post_tag'),
            'menu_icon' => 'dashicons-admin-post',
        )
    );
}

// template for post
function post_template($single_template) {
    global $post;

    if ($post->post_type == 'post') {
        $single_template = dirname( __FILE__ ) . '/single-post.php';
    }
    return $single_template;
}
add_theme_support('category-thumbnails');
add_theme_support('custom-post-type-ui');




?>