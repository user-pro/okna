<?php
      remove_action('wp_head', 'wp_generator');  	
      remove_action('wp_head', 'wlwmanifest_link'); 
      remove_action('wp_head', 'rsd_link');
      remove_action('wp_head', 'print_emoji_detection_script', 7);  	
      remove_action('wp_print_styles', 'print_emoji_styles');  	
      remove_action('admin_print_scripts', 'print_emoji_detection_script');  	
      remove_action('admin_print_styles', 'print_emoji_styles'); 	
      remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );  	
      remove_action( 'wp_head', 'wp_resource_hints', 2 );
      remove_action('wp_head', 'rel_canonical');
      remove_action('wp_head', 'wp_shortlink_wp_head'); 

      remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

   add_action('wp_enqueue_scripts', 'site_scripts');
   function site_scripts() {
      wp_dequeue_style( 'wp-block-library');
      wp_deregister_script('wp_embed');
      wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], '0.0.0');
      wp_enqueue_script( 'lazy', 'https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.4.0/dist/lazyload.min.js', [], '0.0.1', true);
      wp_enqueue_script( 'lazy-observe', 'https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.4.0/dist/lazyload.min.js', [], '0.0.1', true);
      wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/script.js', [], '0.0.1', true);

   }


   add_action( 'after_setup_theme', 'theme_register_menu' );
   function theme_register_menu() {
      
      register_nav_menus( [ 
         'menu_main_header' => 'Меню в шапке', 
         'footer_menu' => 'Меню в подвале', 
      ]);
   }
   

add_action('wp_ajax_send_email', 'send_email');
add_action('wp_ajax_nopriv_send_email', 'send_email');
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once('includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
   require_once('includes/carbon-fields-options/theme-options.php');
   require_once('includes/carbon-fields-options/post-meta.php');
}
add_action( 'init', 'create_global_variable');
function create_global_variable() {
   global $okna_data;
   $okna_data = [
      'phone' => carbon_get_theme_option('site_phone'),
      'phone_digits' => carbon_get_theme_option('site_phone_digits'),
      'email' => carbon_get_theme_option('site_email'),
      'doors_link' => carbon_get_theme_option('site_doors_link'),
   ];
}
function convertToWebpSrc($src) {
   $src_webp = $src . '.webp';
   return str_replace('uploads', 'uploads-webpc/uploads', $src_webp);
}



function send_email() {
  $method = $_SERVER['REQUEST_METHOD'];
  if ($method !== 'POST') {
    exit();
  }

  $form_subject = 'Заявка с сайта PizzaTime';
  $user_phone_number = $_POST['user_phone'];
  $user_name = $_POST['name'];
  

  

  $message = 'Пользователь ' . $user_name . ' с телефоном:  ' . $user_phone_number . ' ждёт звонка менеджера';
  $message = 'Пользователь ' . $user_name . ' с телефоном:  ' . $user_phone_number . ' ждёт звонка менеджера';

  $to = carbon_get_theme_option('site_email');
  
  $success_send = wp_mail($to, 'Заявка на замер', $message);

  if ($success_send) {
     echo 'success';

  } else {
    echo 'error';
  }
  wp_die();
}
