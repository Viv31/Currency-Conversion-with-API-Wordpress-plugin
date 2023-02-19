<?php
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
