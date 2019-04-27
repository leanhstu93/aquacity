<?php

class AdminController extends CController {
    
    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout='//layouts/column1';
    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu=array();
    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    
    public $breadcrumbs=array();
    public function init() {
//        if (Yii::app()->user->isGuest) {
//           // $this->redirect('../');
//        }
       
    }
    public function shorter_text($text, $string = 130)
    {
        $str = strip_tags($text);
        if(strlen($str)>$string) {
            $strCut = substr($str, 0, $string);
            $str = substr($strCut, 0, strrpos($strCut, ' ')).'...';
        }
        return $str;
    }
    function convert_to_url($str) {
        $chars = array( 
            'a' =>  array('ấ','ầ','ẩ','ẫ','ậ','Ấ','Ầ','Ẩ','Ẫ','Ậ','ắ','ằ','ẳ','ẵ','ặ','Ắ','Ằ','Ẳ','Ẵ','Ặ','á','à','ả','ã','ạ','â','ă','Á','À','Ả','Ã','Ạ','Â','Ă'),
            'e' =>  array('ế','ề','ể','ễ','ệ','Ế','Ề','Ể','Ễ','Ệ','é','è','ẻ','ẽ','ẹ','ê','É','È','Ẻ','Ẽ','Ẹ','Ê'),
            'i' =>  array('í','ì','ỉ','ĩ','ị','Í','Ì','Ỉ','Ĩ','Ị'),
            'o' =>  array('ố','ồ','ổ','ỗ','ộ','Ố','Ồ','Ổ','Ô','Ộ','ớ','ờ','ở','ỡ','ợ','Ớ','Ờ','Ở','Ỡ','Ợ','ó','ò','ỏ','õ','ọ','ô','ơ','Ó','Ò','Ỏ','Õ','Ọ','Ô','Ơ'),
            'u' =>  array('ứ','ừ','ử','ữ','ự','Ứ','Ừ','Ử','Ữ','Ự','ú','ù','ủ','ũ','ụ','ư','Ú','Ù','Ủ','Ũ','Ụ','Ư'),
            'y' =>  array('ý','ỳ','ỷ','ỹ','ỵ','Ý','Ỳ','Ỷ','Ỹ','Ỵ'),
            'd' =>  array('đ','Đ'),
        );
        foreach ($chars as $key => $arr) 
        foreach ($arr as $val)
        $str = trim(str_replace($val,$key,$str));
        while (strpos($str,"  ")!==false)
            $str = str_replace("  "," ",$str);
        $find_array=array(" ","/","'",'"',"@","#","+",",",":",";","?","%",'!');
        $str = str_replace($find_array,"-",$str);
        while (strpos($str,"--")!==false)
            $str = str_replace("--","-",$str);
        return strtolower($str);
    }
    public function menu_showNested($parentID) 
    {
        $rol = Category::model()->findAll(array(
            'condition'=>'paren_id='.$parentID,
            'order'=>'`order`',
            ));
        
        if (count($rol) > 0) {
            echo "\n";
            echo "<ol class='dd-list'>\n";
                foreach ($rol as $row) {
                    echo "\n";
                    
                    echo "<li class='dd-item' data-id='{$row->id}'>\n";
                        echo "<div class='dd-handle'>{$row->id}: {$row->name}</div>\n";
                    
                        // Run this function again (it would stop running when the mysql_num_result is 0
                        $this->menu_showNested($row->id);
                    
                    echo "</li>\n";
                }
            echo "</ol>\n";
        }
    }
    public function echoNesCate($condition = 'is null')
    {
        $rol = Category::model()->findAll(array(
            'condition'=>'paren_id '.$condition,
            'order'=>'`order`',
            ));
        echo "<div class='cf nestable-lists'>\n";
            echo "<div class='dd' id='nestableMenu'>\n\n";
                echo "<ol class='dd-list'>\n";
                    foreach ($rol as $row) {
                        echo "\n";
                        
                        echo "<li class='dd-item' data-id='{$row->id}'>";
                            echo "<div class='dd-handle'>{$row->id}: {$row->name}</div>";
                        $this->menu_showNested($row->id);
                        echo "</li>\n";
                    }
                echo "</ol>\n\n";
            echo "</div>\n";
        echo "</div>\n\n";
    }
    public function get_first_image($img,$content)
    {
        if ($img == '') {
            preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',$content, $matches);
            if (isset($matches[1][0])) {
                $first_image = $matches[1][0];
                if ($first_image != '')
                    return $first_image;
                
            }
            else
            {
                return Yii::app()->request->baseUrl.'/images/no-image.jpg';
            }
        }
        else
        {
            return $img;
        }
    }
    public function checkType($type)
    {
        if ($type == 1) {
          $value = 'video';
        }
        else if($type == 2)
        {
          $value = 'picture';
        }
        else
        {
          $value = '';
        }
        return $value;
    }
    public function get_image_video($img,$link)
    {
        if ($img != '') {
            return $img;
        }
        else
        {
             if(preg_match('/www.youtube.com/',$link) || preg_match('/youtube.com/',$link)){
                 $array = explode("watch?v=", $link);
                 if(isset($array[1]))
                    return "http://img.youtube.com/vi/".$array[1]."/0.jpg";
                 else
                    return "";
             }
             else if (preg_match('/www.youtu.be/',$link) || preg_match('/youtu.be/',$link)){
                 $array = explode("/", $link);
                 if(isset($array[1]))
                    return "http://img.youtube.com/vi/".$array[1]."/0.jpg";
                 else
                    return "";
             }
        }
    }
    public function get_images_post($linkImages,$conten,$linkVideo)
    {        
        if ($linkVideo == '') {
            return self::get_first_image($linkImages,$conten);
        }
        else
        {
            return self::get_image_video($linkImages,$linkVideo);
        }
    }
}