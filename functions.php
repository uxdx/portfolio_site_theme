<?php




// css 로딩
function load_stylesheets()
{
    // style.css
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
    // css/animate.css
    wp_register_style('animate', get_theme_file_uri('/css/animate.min.css'), array(), 1, 'all');
    wp_enqueue_style('animate');
    // dist/bootstrap.css
    wp_register_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'), array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    // css/custom.css
    wp_register_style('custom', get_theme_file_uri('/css/custom.css'), array(), 1, 'all');
    wp_enqueue_style('custom');
    // font-awesome
    wp_register_style('font-awesome', get_theme_file_uri('/css/font-awesome.min.css'), array(), 1, 'all');
    wp_enqueue_style('font-awesome');
    // ionicons
    wp_register_style('icons', get_theme_file_uri('/css/ionicons.min.css'), array(), 1, 'all');
    wp_enqueue_style('icons');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


//load scripts
function addjs()
{
    wp_register_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_theme_file_uri('/js/jquery.js'), array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('imagesloaded', get_theme_file_uri('/js/imagesloaded.min.js'), array(), 1, 1, 1);
    wp_enqueue_script('imagesloaded');

    wp_register_script('isotope', get_theme_file_uri('/js/isotope.js'), array(), 1, 1, 1);
    wp_enqueue_script('isotope');

    wp_register_script('wow', get_theme_file_uri('/js/wow.min.js'), array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('custom', get_theme_file_uri('/js/custom.js'), array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'addjs');



// 메뉴 등록
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
    'category' => __('Category Menu'),
));


// 콘솔에 로그 출력 함수
function Console_log($data)
{
    echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
}

// 썸네일 사용 가능
add_theme_support('post-thumbnails');

// 커스터마이저 세팅
// require get_stylesheet_directory() . '/inc/pure-customizer.php';
// new Pure_Customizer();

function pure_customize_register($wp_customize)
{
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
    $wp_customize->add_setting('my_custom_css', array(
        'default' => '#f72525',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control('my_custom_css', array(
        'label' => __('Custom Theme CSS'),
        'type' => 'textarea',
        'section' => 'my_custom_css',
    ));
    $wp_customize->add_section('my_custom_css', array(
        'title' => __('Custom CSS'),
        'description' => __('Add custom CSS here'),
        'panel' => '', // Not typically needed.
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));
    $wp_customize->add_panel('menus', array(
        'title' => __('Menus'),
        'description' => $description, // Include html tags such as <p>.
        'priority' => 160, // Mixed with top-level-section hierarchy.
    ));
}
add_action('customize_register', 'pure_customize_register');
function my_custom_css_output()
{
    echo '<style type="text/css" id="custom-theme-css">' .
        get_theme_mod('custom_theme_css', '') . '</style>';
}
add_action('wp_head', 'my_custom_css_output');
