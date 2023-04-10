<?php
/*
Plugin Name: ZendVN MyPlugin
Plugin URI: http://www.zen.vn
Description: Tìm hiểu về quá trình chuẩn xây dựng Plugin
Author: ZendVN Group
Version: 1.0
Author URI: http://www.zen.vn
*/

// $path = dirname(__FILE__) . '/includes/admin.php';
// echo '<br/>' . $path;
// $path = dirname(__FILE__) . '/includes/admin.php';  
// echo '<br/>' . plugin_dir_path(__FILE__ ) ; //lấy ra đường dẫn tuyệt đối đến thư mục plugin
// echo '<br/>' . plugins_url('/css/abc.css','zendvn',__FILE__);
// echo '<br/>' . includes_url('/css/buttons-rtl.css');
// echo '<br/>' . content_url('/themes/twentytwentyone/style-rtl.css');
// admin_url();


// register_activation_hook(__FILE__,'zendvn_mp_deactive');
//     function zendvn_mp_deactive(){
//         global $wpdb;
//         $table_name = $wpdb->prefix . "options";
//         $wpdb->update(
//             $table_name,
//             array('autoload' => 'no'),
//             array('option_name'=> 'zendvn_mp_options'),
//             array('%s'),
//             array('%s')

//         );
//     }



// //active plugin
//     function zendvn_mp_active(){
// global $wpdb;
// $table_name = $wpdb->prefix . "zendvn_mp_test";
// if( $wpdb->get_var("show table like'" . $table_name . "'") != $table_name){
//     $sql = "CREATE TABLE `" . $table_name . "` (
//         `myid` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
//         `my_name` varchar(50) DEFAULT NULL,
//         PRIMARY KEY (`myid`)
//         ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
//         require_once ABSPATH . '/wp-admin/includes/upgrade.php';
//     }
// }
//ví dụ 1
// function zendvn_mp_active(){
//     $zendvn_mp_version = "1.0";
//     //options API
//     add_option("zendvn_mp_version", $zendvn_mp_version,'','yes');
// }

//ví dụ 2
// $str = 'a:3:{s:6:"course";s:13:"Wordpress Pro";s:6:"author";s:12:"ZendVN group";s:7:"website";s:11:"www.zend.vn";}';
// echo '<pre>';
// print_r(unserialize($str));
// echo '</pre>';
// function zendvn_mp_active(){
//     $zendvn_mp_options = array(
//         'course' => 'Wordpress Pro',
//         'author' => 'ZendVN group',
//         'website'=> 'www.zend.vn'
//     );
//    // options API
//     add_option("zendvn_mp_options", $zendvn_mp_options,'','yes');
// }

//