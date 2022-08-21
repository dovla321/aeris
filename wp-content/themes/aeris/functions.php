<?php






function aeris_theme_setup(){
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_theme_support('widgets');


   

  register_nav_menus(array(
      'primary'=>__('Primary Menu','aeris'),
      
   ));


  
}
add_action('after_setup_theme','aeris_theme_setup');

/*function include_jquery(){

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.6.0.min.js','',1,true);

    add_action('wp_enqueue_scripts','jquery');

}
add_action('wp_enqueue_scripts','include_jquery');*/




function loadjs(){

    wp_register_script('customjs',get_template_directory_uri(). '/js/main.js','',1,true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');



    
    


    


    







   function impreza_manage_scripts() {
    wp_register_script( 'my-script', 'https://code.jquery.com/jquery-3.6.0.min.js' );
    wp_enqueue_script( 'my-script' );
}
add_action( 'wp_enqueue_scripts', 'impreza_manage_scripts', 99 );

 


  






