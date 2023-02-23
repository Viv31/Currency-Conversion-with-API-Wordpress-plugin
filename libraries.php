<?php
//calling admin jquery
if (!function_exists('CCC__load_admin_js'))
{
    function CCC__load_admin_js()
    {
        //adding jquery
        wp_enqueue_script(array(
            'jquery'
        ));
    }
    add_action('wp_enqueue_scripts', 'CCC__load_admin_js');

}

/* Include CSS and Script */
   add_action('wp_enqueue_scripts','plugin_css_jsscripts');
   function plugin_css_jsscripts() {
      // CSS
      wp_enqueue_style( 'style-css', plugins_url( '/style.css', __FILE__ ));
   
      // JavaScript
      wp_enqueue_script( 'script-js', plugins_url( '/script.js', __FILE__ ),array('jquery'));
   
      // Pass ajax_url to script.js
      wp_localize_script( 'script-js', 'plugin_ajax_object',
      array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
   }


//Register our custom css and js files
if (!function_exists('CCC__register_script'))
{
    add_action('init', 'CCC__register_script');
    function CCC__register_script()
    {
        wp_register_script('bootstrap_js', plugins_url('assets/js/bootstrap.min.js', __FILE__) , array(
            'jquery'
        ) , '4.6.0');
        wp_register_script('custom_js', plugins_url('assets/js/script.js', __FILE__) , array(
            'CustonJquery'
        ) , '4.6.0');
        wp_register_style('boostrap_css', plugins_url('assets/css/bootstrap-min.css', __FILE__) , false, '4.6.0', 'all');
        wp_register_style('custom_css', plugins_url('assets/css/style.css', __FILE__) , false, '1.0.0', 'all');
    }

}

// use the registered jquery and style above
if (!function_exists('CCC__enqueue_style'))
{

    add_action('wp_enqueue_scripts', 'CCC__enqueue_style');
    function CCC__enqueue_style()
    {
        wp_enqueue_script('bootstrap_js');
        wp_enqueue_script('jquery');
        wp_enqueue_script('custom_js');
        wp_enqueue_style('boostrap_css');
        wp_enqueue_style('custom_css');
    }

}
