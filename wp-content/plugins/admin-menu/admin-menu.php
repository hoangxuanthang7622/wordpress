<?php
/*
Plugin Name: admin-menu
Plugin URI: http://www.zen.vn
Description: admin-menu
Author: ZendVN Group
Version: 1.0
Author URI: http://www.zen.vn
*/
define('ADMIN_MENU_URL', plugin_dir_url(__FILE__));
define('ADMIN_MENU_DIR', plugin_dir_path(__FILE__));
define('ADMIN_VIEWS_DIR', ADMIN_MENU_DIR . '/views');
if(!is_admin()){
    require_once ADMIN_MENU_DIR . '/public.php';
    new ZendvnMp();
}else{
    require_once ADMIN_MENU_DIR . '/admin.php';
    new ZendvnMpAdmin();
}