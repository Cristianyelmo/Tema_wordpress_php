
<?php

add_action('wp_enqueue_scripts','scriptsTemplate');

function scriptsTemplate(){
//Estilos del template
    wp_enqueue_style('style', get_stylesheet_uri()); 
  
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css'); 
    wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css'); 
  // Archivos Javascript
    wp_enqueue_script('jquery');

  

    wp_enqueue_script('popper' ,get_template_directory_uri() . '/js/popper.min.js');
    wp_enqueue_script('bootstrap' ,get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('holder' ,get_template_directory_uri() . '/js/holder.min.js');



}

add_action('after_setup_theme','instalarTemplate');

function instalarTemplate(){
    add_theme_support('post-thumbnails');
    add_image_size('chica',200,250,true);
    add_image_size('grande',700,400,false);
    register_nav_menus(array('main-menu'=>esc_html__('Menu principal xd','')));
}


add_action('nav_menu_css_class','functionAgregarEstilosAlMenu',1,3);

function functionAgregarEstilosAlMenu($classes,$item,$args){
    $classes[]='p-2 text-muted';
    return $classes;
}


add_action('widgets_init','iniciarWidget');

function iniciarWidget(){

    register_sidebar( array('name'=>esc_html__('Area de barra lateral derecha xd'),
                            'id'=>'barra_lateral_1',
                            'before_title'=>'<h4 class="font-italic">',
                            'after_title'=>'</h4>',
                            'before_widget'=>'<div id="%1$s" class="p-3 mb-3 bg-light rounded widget %2$s">',
                            'after_widget'=>'</div>'
    ) );








}




function mi_tema_customize_register($wp_customize) {


    $wp_customize->add_section( 'Configuracion', array(
        'title' => __( 'Configuracion' ),
       
        'priority' => 160,
        
      ) );






    $wp_customize->add_setting('txtTitulo',array(
        'default'=>'Titulo principal',
        
    ));
   
    $wp_customize->add_control('txtTitulo',array(
        'section'=>'Configuracion',
        'type'=>'text',
        'label'=>'Titulo del banner:'
    ));

    $wp_customize->add_setting('txtContenido',array(
        'default'=>'Contenido principal',
        
    ));
   
    $wp_customize->add_control('txtContenido',array(
        'section'=>'Configuracion',
        'type'=>'textarea',
        'label'=>'Contenido del banner:'
    ));

    $wp_customize->add_setting('txtURL',array(
        'default'=>'Url Banner'
        
    ));

    $wp_customize->add_control('txtURL',array(
        'section'=>'Configuracion',
        'type'=>'url',
        'label'=>'Url del Banner:'
    ));


}
add_action('customize_register', 'mi_tema_customize_register');













?>

