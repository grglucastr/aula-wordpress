$locations = get_nav_menu_locations();
          $theme_location = "primary";          
          $menu = get_term( $locations[$theme_location], 'nav_menu' );
          $menu_items = wp_get_nav_menu_items($menu->term_id);
          
          var_dump($menu_items);
          
          $pagename = get_query_var('pagename');
          $post = $wp_query->get_queried_object();  
          
          $current_page = "";
          if(is_null($post)){
            $current_page = "Home";
          }else{
            $current_page = $post->post_title;
          }
          
          
           ?>
           
           <div class="nav">
             <?php 
             foreach($menu_items as $menu_item){
                if($menu_item->menu_item_parent == 0){
                    
                    $subitems = array();
                    
                    foreach($menu_items as $sub_item){
                      if($sub_item->menu_item_parent == $menu_item->id){
                        $subitems[] = '<a class="dropdown-item" href="'.$sub_item->url.'">'.$sub_item->title.'</a>';
                      }
                    }
                  
                    $class_dropdown = count($subitems) > 0 ? "dropdown-toggle" : "";
                    $html_id = count($subitems) > 0 ? "navbarDropdown".$menu_item->id : "simpleItem".$menu_item->id;
                    
                  
                    if($current_page == $menu_item->title){ ?>
                        <a href="<?=$menu_item->url; ?>" id="<?=$html_id?>" class="nav-link active <?=$class_dropdown; ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                          <?=$menu_item->title;?> 
                        </a>
            <?php   }else{ ?>
                        <a href="<?=$menu_item->url; ?>" id="<?=$html_id?>" class="nav-link <?=$class_dropdown; ?>"> 
                           <?=$menu_item->title;?>
                        </a>
            <?php   }
                    
                    if(count($subitems) > 0){ ?>
                      <div>
                        
                        
                      </div>
                      
            <?php   }
                    foreach($subitems as $subitem){
                      
                    }
                }
             }
             
             
             
             
             
             
                    if($current_page == $menu_item->title): ?>
                    
                
             
            <?php 
                    else: 
             ?>
                 <a href="<?=$menu_item->url; ?>" class="nav-link"> <?=$menu_item->title;?> </a>  
             
             <?php
                    endif; 
                endif; 
             endforeach;