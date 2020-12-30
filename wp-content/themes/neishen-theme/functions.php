<?php 

wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
wp_enqueue_style( 'bootstrap-grid.min', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css' );
wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );




add_action('wp_enqueue_scripts', 'my_scripts_method'); // когда ВП начинает подставлять скрипты, мы ципляемся за wp_enqueue_scripts и подставляем my_scripts_method
function my_scripts_method(){
    //отменаем зареганную jquery
    //вместо 'jquery-core' можно вписать 'jquery', тогда будет отменён ещё и jquery-migrate (для версий jquery 1.9 и ниже)
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
}

wp_enqueue_script('slick',    get_template_directory_uri() . '/slick/slick.min.js', 'jquery',    null,           true);
//                название     это имточник(папка с темой)      расположение     зависит от     указывать      подключить в футере?
//                скрипта                                                                   или нет версию
wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', 'jquery', null, true ); // зависимость от jquery
wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', null, null, true ); // здесь нет зависимости от jquery
