<?php
require_once ADMIN_MENU_DIR . '/includes/support.php';
class ZendvnMpAdmin{
    public function __construct()
    {
        // echo '<br>' . __METHOD__;
        add_action('admin_menu' ,array($this, 'settingMenu5') );
        // add_action('admin_menu' ,array($this, 'removeMenu') );
    }
    //them 1 submenu vao dashboard cua wp menu
    public function settingMenu(){
        $menuSlup = 'zendvn-mp-my-setting';
        add_posts_page('My setting title', 'My setting','manage_options',$menuSlup,array($this, 'settingPage'));
    }
    
    //them 1 nhom menu moi vao he thong menu wp
    public function settingMenu2(){
        $menuSlup = 'zendvn-mp-my-setting';
        add_menu_page('My setting title', 'My setting ','manage_options',
                        $menuSlup,array($this, 'settingPage'), ADMIN_MENU_URL. '/images/icon-setting16x16.png'  );
        add_menu_page('My setting 2 title', 'My setting 2','manage_options',
                        $menuSlup .'-2',array($this, 'settingPage') );
    }

     //them 1 nhom menu moi vao he thong menu wp
     public function settingMenu3(){
        $menuSlup = 'zendvn-mp-my-setting';
        add_menu_page('My setting title', 'My setting ','manage_options',
                        $menuSlup,array($this, 'settingPage'), ADMIN_MENU_URL. '/images/icon-setting16x16.png'  );
        add_submenu_page($menuSlup,'about title', 'about', 'manage_options',
                             $menuSlup .'-about',array($this, 'aboutPage'));
        add_submenu_page($menuSlup,'help title', 'help', 'manage_options',
                             $menuSlup .'-help', array($this, 'helpPage'));
    }

     //them 1 nhom menu moi vao vi tri bat ki
     public function settingMenu4(){
        $menuSlup = 'zendvn-mp-my-setting';
        add_menu_page('My setting title', 'My setting ','manage_options',
                        $menuSlup,array($this, 'settingPage'), ADMIN_MENU_URL. '/images/icon-setting16x16.png',1  );
        add_submenu_page($menuSlup,'about title', 'about', 'manage_options',
                             $menuSlup .'-about',array($this, 'aboutPage'));
        add_submenu_page($menuSlup,'help title', 'help', 'manage_options',
                             $menuSlup .'-help', array($this, 'helpPage'));
    }

     //xoa bo cac menu trong he thong menu wp
     public function removeMenu(){
        $menuSlup = 'zendvn-mp-my-setting';
        remove_submenu_page($menuSlup,$menuSlup .'-about');
        remove_menu_page($menuSlup);

        remove_submenu_page('edit.php','post-new.php');
        remove_menu_page('edit.php');
    }

     //them 1 nhom menu moi vao vi tri bat ki
     public function settingMenu5(){
        $menuSlup = 'zendvn-mp-my-setting';
        add_utility_page('My setting title', 'My setting ','manage_options',
                        $menuSlup,array($this, 'settingPage'), ADMIN_MENU_URL. '/images/icon-setting16x16.png'  );
        add_object_page('My setting 2 title', 'My setting 2 ','manage_options',
                        $menuSlup. '-2',array($this, 'settingPage'), ADMIN_MENU_URL. '/images/icon-setting16x16.png'  );
        add_submenu_page($menuSlup,'about title', 'about', 'manage_options',
                             $menuSlup .'-about',array($this, 'aboutPage'));
        add_submenu_page($menuSlup,'help title', 'help', 'manage_options',
                             $menuSlup .'-help', array($this, 'helpPage'));
    }

    public function aboutPage(){
        echo '<h2> My about</h2>';
    }
    public function helpPage(){
        echo '<h2> My help</h2>';
    }

    public function settingPage(){
       require ADMIN_VIEWS_DIR . '/setting-page.php';
    }

}