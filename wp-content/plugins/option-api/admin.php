<?php
require_once ZENDVN_MP_PLUGIN_DIR . '/includes/support.php';
class ZendvnMpAdmin{
	
	public function __construct(){
		//echo '<br>' . __METHOD__;
		add_action('admin_init', array($this,'update_autoload3'));
      

	}

    public function update_autoload3(){
        update_option('zendvn_mp_wp_plugin_version','2.0');
        update_option('zendvn_mp_wp_version','2.0');
    }

    public function update_autoload(){
       $old_options = get_option('zendvn_mp_wp_plugin_version');
        delete_option('zendvn_mp_wp_plugin_version');
        add_option('zendvn_mp_wp_plugin_version', $old_options,'','yes');
       }

    public function del_options(){
     delete_option('zendvn_mp_wp_version');
     delete_option('zenvd_mp_wp_course');
    }

    public function update_options2(){
        update_option('zendvn_mp_wp_version','4.5');
       $old_options = get_option('zenvd_mp_wp_course');
       $old_options['course'] = 'Wordpress 5';
        update_option('zenvd_mp_wp_course',$old_options);
    }


    public function update_options(){
        update_option('zendvn_mp_wp_version','4.5');
        $arrOption = array(
            'course' => 'Wordpress 4.5',
            'author' => 'ZendVN group',
            'website'=> 'www.zend.vn'
        );
        update_option('zenvd_mp_wp_course',$arrOption);
    }


    public function get_options(){
        $tmp = get_option('zendvn_mp_wp_version','3.0');
        echo '<br/>' . $tmp;

        $arrOption = array(
            'course' => 'Wordpress Pro',
            'author' => 'ZendVN group',
            'website'=> 'www.zend.vn'
   );
        $tmp = get_option('zenvd_mp_wp_course',$arrOption);
        echo '<pre>';
        print_r($tmp);
        echo '</pre>';


    }
    public function add_array_option(){
       $arrOption = array(
                'course' => 'Wordpress Pro',
                'author' => 'ZendVN group',
                'website'=> 'www.zend.vn'
       );
       add_option('zenvd_mp_wp_course',$arrOption,'','yes');
    }
    public function add_new_option(){
        add_option( 'zendvn_mp_wp_version', '4.0','','yes' );
        add_option( 'zendvn_mp_wp_plugin_version', '4.0','','no' );
    }
}

