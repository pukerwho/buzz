<?php

// Register Taxonomy for Board
function custom_taxonomy() {

  $labels = array(
    'name'                       => __( 'Категория', 'topot' ),
    'singular_name'              => __( 'Категория', 'topot' ),
    'menu_name'                  => __( 'Категория', 'topot' ),
    'all_items'                  => __( 'Все категории', 'topot' ),
    'parent_item'                => __( 'Родительская категория', 'topot' ),
    'parent_item_colon'          => __( 'Родительская категория:', 'topot' ),
    'new_item_name'              => __( 'Добавить категорию', 'topot' ),
    'add_new_item'               => __( 'Добавить', 'topot' ),
    'edit_item'                  => __( 'Редактировать', 'topot' ),
    'update_item'                => __( 'Обновить', 'topot' ),
    'view_item'                  => __( 'Посмотреть', 'topot' ),
    'separate_items_with_commas' => __( 'Разделить', 'topot' ),
    'add_or_remove_items'        => __( 'Добавить или удалить', 'topot' ),
    'popular_items'              => __( 'Популярные', 'topot' ),
    'search_items'               => __( 'Поиск', 'topot' ),
    'not_found'                  => __( 'Не найдено', 'topot' ),
    'no_terms'                   => __( 'No items', 'topot' ),
    'items_list'                 => __( 'Items list', 'topot' ),
    'items_list_navigation'      => __( 'Items list navigation', 'topot' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );
  register_taxonomy( 'board', array( 'items' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );