<?php
/*
 Plugin Name: widgets
Plugin URI: http://www.zend.vn
Description: widgets
Author: ZendVN group
Version: 1.0
Author URI: http://www.zend.vn
*/

define('ZENDVN_MP_WG_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ZENDVN_MP_WG_IMAGES_URL', ZENDVN_MP_WG_PLUGIN_URL . 'images');
define('ZENDVN_MP_CSS_URL', ZENDVN_MP_WG_PLUGIN_URL . 'css');
define('ZENDVN_MP_JS_URL', ZENDVN_MP_WG_PLUGIN_URL . 'js');

define('ZENDVN_MP_WG_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ZENDVN_MP_WG_VIEWS_DIR', ZENDVN_MP_WG_PLUGIN_DIR . '/views');
define('ZENDVN_MP_INCLUDES_DIR', ZENDVN_MP_WG_PLUGIN_DIR . '/includes');
define('ZENDVN_MP_WIDGET_DIR', ZENDVN_MP_WG_PLUGIN_DIR . '/widgets');

if(!is_admin()){
	// require_once ZENDVN_MP_WG_PLUGIN_URL . '/public.php';x
	new ZendvnMp();
}else{
	require_once ZENDVN_MP_INCLUDES_DIR . '/html.php';
	require_once ZENDVN_MP_PLUGIN_DIR . '/admin.php';
	new ZendvnMpAdmin();
	
	require_once ZENDVN_MP_WIDGET_DIR . '/db_simple.php';
	new ZendvnMp_Widget_Db_Simple();
	/* add_action('wp_dashboard_setup', 'zendvn_mp_widget_db');
	
	function zendvn_mp_widget_db(){
		wp_add_dashboard_widget('zendvn_mp_widget_db_simple', 'My Plugin Information', 
						'zendvn_mp_widget_db_simple_display');
	}
	
	function zendvn_mp_widget_db_simple_display(){
		echo '<p> Đây là khóa học lập trình WP 4.x</p>';
		echo '<ul>'
			 . '<li>contact: training@zend.vn</li>'
			 . '<li>website: www.zend.vn</li>'	
			 . '</ul>';	
	} */
}

/* require_once ZENDVN_MP_WIDGET_DIR . '/simple.php';

add_action('widgets_init', 'zendvn_mp_widget_simple');

function zendvn_mp_widget_simple(){
	register_widget('Zendvn_Mp_Widget_Simple');
}

add_action('widgets_init', 'zendvn_mp_widget_remove');

function zendvn_mp_widget_remove(){
	unregister_widget('Zendvn_Mp_Widget_Simple');
	unregister_widget('WP_Widget_Search');
}
 */

