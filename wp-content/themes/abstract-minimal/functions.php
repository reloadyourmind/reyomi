<?php
// Шота для скриптов и стилей


// Регистрируем меню
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

// Убрать id у элементов меню
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

// Замена класса текущей страницы
/*add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'current ';
  }
  return $classes;
}*/

add_filter('wp_nav_menu_objects', 'add_li_class_if_has_child');
function add_li_class_if_has_child( $items ){
	foreach( $items as $item ){
		if( __nav_hasSub( $item->ID, $items ) )
			$item->classes[] = 'has-children'; // все элементы поля "classes" меню, будут совмещены и выведены в атрибут class HTML тега <li>
	}

	return $items;
}
function __nav_hasSub( $item_id, $items ){
	foreach( $items as $item ){
		if( $item->menu_item_parent && $item->menu_item_parent == $item_id )
			return true;
	}

	return false;
}