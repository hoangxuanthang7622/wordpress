<?php
/*
Plugin Name: admin-menu
Plugin URI: http://www.zen.vn
Description: admin-menu
Author: ZendVN Group
Version: 1.0
Author URI: http://www.zen.vn
*/
define('ZENDVN_MP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ZENDVN_MP_PLUGIN_DIR', plugin_dir_path(__FILE__));
if(!is_admin()){
    require_once ZENDVN_MP_PLUGIN_DIR . '/includes/public.php';
    new ZendvnMp();
}else{

}