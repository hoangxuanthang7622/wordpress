<?php
require_once ZENDVN_MP_PLUGIN_DIR . '/includes/support.php';
class ZendvnMp{
    public function __construct()
    {
        echo '<br/>' . __METHOD__;
        //hàm thay đổi toàn bộ title trong hook 'the_title'
        add_filter('the_title',array($this,'theTitle'));
        //hàm sử dụng 2 tham số của hook 'the_title'
        // add_filter('the_title',array($this,'theTitle2'), 10, 2);
        // add_filter('the_title',array($this,'theTitle3'), 10, 2);
        //hiển thị các action hiện đang thực thi trong hook
        add_action('wp_footer',array($this,'showFunction'));
        //sử dụng tham số content trong hook 'the content'
        add_filter('the_content',array($this,'changeContent'));
        add_filter('the_content',array($this,'changeContent2'));
        add_filter('the_content',array($this,'changeContent3'));

        remove_filter('the_content', 'convert_smilies');
        //loai bo tat ca cac ham trong hook theo độ ưu tiên
        remove_all_filters('the_content', 10);
         //loai bo tat ca cac ham trong hook 
         remove_all_filters('the_content');
         //kiem tra su ton tai cua filter trong hook
         echo '<br/>' . has_filter('the_content','convert_smilies');
    }
    public function changeContent3($content){
        global $post;
        // echo '<pre>';
        // print_r($post->post_type);
        // echo '<pre/>';
        if($post->post_type == 'page'){

            $content .= "day là bai viet cua thanggg";
        }
        return $content;
    }


     //sử dụng tham số content trong hook 'the content'
     public function changeContent2($content){
        $content = str_replace('WordPress', '<u>WP<u/>', $content);
        return $content;
    }

        //sử dụng tham số content trong hook 'the content'
    public function changeContent($content){
        $content .= 'day la bai viet cua thang';
        return $content;
    }
        //hiển thị các action hiện đang thực thi trong hook
    public function showFunction(){
        ZendvnMpSupport::showFunc('the_content');
    }
    public function theTitle2($title,$id){
        echo "<br/>" . $id;
        if($id == 1){
           $title= str_replace("hello", "xin chào",$title );
        }
        return $title;

    }
    //hiển thị các action hiện đang thực thi trong hook
   
    public function theTitle3($title,$id){
        echo "<br/>" . $id;
        if($id == 1){
           $title= 'chao mung cac ban den voi the gioi wp';
        }
        return $title;

    }
    public function theTitle(){
        $str = 'thay doi tieu de cua bai viet';
        return $str;

    }
}