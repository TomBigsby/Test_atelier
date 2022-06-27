<?php

function montheme_supports()
{
    // activer les menus dans le backoffice
    add_theme_support('menus');
    // gestion des emplacements de menu
    register_nav_menu('header', 'header menu');
}


// ajout du menu de navigation
add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items($items, $args)
{
    $menu = wp_get_nav_menu_object($args->menu);

    return $items;
}

// activation des classes utilisées par Bootstrap
function montheme_menu_class($classes)
{
    $classes[] = 'nav-link';
    $classes[] = 'menu-item';
    return $classes;
}


/* Autoriser l'import de fichiers SVG */
function svg_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'svg_mime_types');



// chargement menu burger JS
function wpmu_burger_menu_scripts()
{
    wp_enqueue_script('burger-menu', get_stylesheet_directory_uri() . '/assets/js/burger-menu.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'wpmu_burger_menu_scripts');



function my_theme_scripts()
{
    wp_enqueue_script('my-great-script', get_template_directory_uri() . '/js/my-great-script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');




// ajout des bibliothèques Bootstrap, jquery, la feuille CSS du thème, les polices Googles Fonts et Font Awesome
function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('janda', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500&display=swap', array(), null);
    wp_enqueue_style('load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
}



// intégration block ACF
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    // Check function exists.
    if (function_exists('acf_register_block_type'))

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('testimonial', 'quote'),
        ));
}


// check ACF
if (!function_exists('get_field')) {
    add_action('template_redirect', 'template_redirect_warning_missing_acf', 0);
    function template_redirect_warning_missing_acf()
    {
        wp_die(sprintf('Ce site ne fonctionne pas sans l\'extension Advanced Custom Fields. Merci de vous connecter au site pour l\'activer.', wp_login_url()));
    }
}


add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_action('nav_menu_css_class', 'montheme_menu_class');
