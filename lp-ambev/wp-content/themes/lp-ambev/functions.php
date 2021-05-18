<?php

function adiciona_recuros(){

    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme','adiciona_recuros');

function  showmenu(){
    
    register_nav_menu(
        'menu-navegacao',
        'Menu de navegacao'
    );
}

add_action('init','showmenu');