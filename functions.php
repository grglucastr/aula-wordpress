<?php

function showSitePrimaryMenu($current_page){
  
  $site_menu = '<nav class="nav">'; 
  $locations = get_nav_menu_locations();
  $theme_location = "primary";
  $menu = get_term($locations[$theme_location], 'nav_menu');
  $menu_items = wp_get_nav_menu_items($menu->term_id);
  
  foreach($menu_items as $menu_item){
    if($menu_item->menu_item_parent == 0){
      
      $subitems = array();
            
      foreach($menu_items as $sub_item){  
        if($sub_item->menu_item_parent == $menu_item->ID){
          $url = $sub_item->url;
          $url_title = $sub_item->title;
          
          $subitems[] = '<a class="dropdown-item" href="'.$url.'">'.$url_title.'</a>';  
        }
      }
      
      $url = $menu_item->url;
      $url_title = $menu_item->title;
      $drop = count($subitems) > 0 ?  "dropdown-toggle" : "";
      $active = $current_page == $url_title ? "active":"";
      
      
      if(count($subitems) > 0){
        $dropId = "navbarDropdown".$menu_item->ID;
        $dropComp  = 'role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
        
        $site_menu .= '<a class="nav-link '.$active.' dropdown dropdown-toggle" id="'.$dropId.'" href="'.$url.'" '.$dropComp.' >'.$url_title.'</a>';
        
        $site_menu .= '<div class="dropdown-menu" aria-labelledby="'.$dropId.'">';
        foreach($subitems as $sub){
          $site_menu .= $sub;
        }
        $site_menu .= '</div>';     
      }else{
        $site_menu .= '<a class="nav-link '.$active.' " href="'.$url.'">'.$url_title.'</a>';  
      }
    }
  }
  $site_menu .= '</nav>';
  
  echo $site_menu;
}

add_theme_support('post-thumbnails');

// Exerpt Length Control
function set_excerpt_length(){
  return 45;
}
add_filter('excerpt_length', 'set_excerpt_length'); // Edit somehting


// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
  
  register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  
  
  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  
  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');


// Posts Format
add_theme_support('post-formats', array('aside', 'gallery'));

// Customizer File
require get_template_directory() . '/inc/customizer.php';

?>


