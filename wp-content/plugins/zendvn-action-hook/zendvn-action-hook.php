<?php
/*
Plugin Name: Hook Action
Plugin URI: http://www.zen.vn
Description: Hook Action
Author: ZendVN Group
Version: 1.0
Author URI: http://www.zen.vn
*/
// add action 1
add_action('wp_footer', 'zendvn_mp_footer2', 19 );
add_action('wp_footer', 'zendvn_myplugin_new_data',18 );
function zendvn_myplugin_new_data(){

	echo '<div>Chao mung cac ban den voi khoa lap 
			trinh Wordpress chuyen nghiep cua 
			<a href="http://www.zend.vn">ZendVN group</a>
		</div>';
} 
function zendvn_mp_footer2(){
    echo '<div> hello world</div>';
}
// add action 2
add_action('wp_footer', 'zendvn_mp_footer' );
function zendvn_mp_footer(){
    echo "<br/> Page:" . is_page();
}
add_action('wp_head', 'zendvn_mp_new_css' );
function zendvn_mp_new_css(){
    if(is_page() == true){

        $cssUrl = plugins_url('/css/abc.css', __FILE__);
        $css = '<link rel = "stylesheet" type="text/css" media="all" href="' . $cssUrl . '" />';
        echo $css;
    }
}


// remove action
add_action('wp_head', 'zendvn_mp_new_css1' );
function zendvn_mp_new_css1(){
            $cssUrl = plugins_url('/css/abc.css', __FILE__);
            $css = '<link rel = "stylesheet" type="text/css" media="all" href="' . $cssUrl . '" />';
            echo $css;
        }
remove_action('wp_head','zendvn_mp_new_css' );

//remove_all 
remove_all_actions('wp_head', 20);

//has_action
echo '<br/>' . has_action('wp_head','rsd_link');


// create action hook
add_action('new_action_hook', 'new_action_callback', 10, 2);
function new_action_callback($courseName, $author)
{
    echo '<p>khóa học lập trình' . $courseName . 'tai' . $author;
}
// function zendvn_wp_new_hook(){
//     do_action('new_action_hook');
// }
//ví dụ
function zendvn_wp_new_hook($courseName = 'Wordpress', $author = 'ZendVN')
{
    do_action('new_action_hook', $courseName, $author);
}


// create class for action
//cách 1
$includeDir = plugin_dir_path(__FILE__) . 'includes';
require_once $includeDir . '/public.php ';
$zendvnMp = new ZendvnMp();
add_action('wp_footer', array($zendvnMp,'newFooter'  ));
add_action('wp_footer', array($zendvnMp,'newFooter2'  ));


//cách 2
new ZendvnMp();
class ZendvnMp{
    public function __construct()
    {
        add_action('wp_footer', array($this,'newFooter'));
        add_action('wp_footer', array($this,'newFooter2'));
        
    }
    public function newFooter(){
        echo '<div>hello world <div/>';
    }
    public function newFooter2(){
        echo '<div>hello world2 <div/>';
    }
}


//cách 3
class ZendvnMp{
    public static function init()
    {
        add_action('wp_footer', array(__CLASS__,'newFooter'));
        add_action('wp_footer', array(__CLASS__,'newFooter2'));
        
    }
    public static function newFooter(){
        echo '<div>hello world <div/>';
    }
    public static function newFooter2(){
        echo '<div>hello world2 <div/>';
    }
}
ZendvnMp::init();
