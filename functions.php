<?php

add_action('init', 'registrujMenu');
add_action('widgets_init', 'registrujSidebar');

function registrujMenu() {
    register_nav_menu('primary', 'Menu');
}

function registrujSidebar() {
    register_sidebar(array(
        'name' => __('Sidebar', 'HWGeeks'), 'id' => 'left-sidebar', 'description' => '',
        'class' => '', 'before_widget' => '', 'after_widget' => '',
        'before_title' => '<header>', 'after_title' => '</header>'));
}

