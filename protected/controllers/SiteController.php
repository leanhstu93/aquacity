<?php

class SiteController extends Controller {
    /**
     * Declares class-based actions.
     */
    public $sharefb = "";
    public $sharetw = "";
    public $sharegg ="";
    public $arridloai = array();
    public $text = "";
    public $ttc = "";
    public $ch = "";
    public $hinhanh = "";
    public $footer = "";
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }
    public function actionxoafile()
    {
        $file = "/images/banner/img-01.jpg"; 
        echo Common::deletefile($file);
    }
    public function init()
    {
        Yii::app()->theme = 'frontend';
        Yii::app()->session;
       if(isset($_SESSION['lang'])){
            if($_SESSION['lang'] == 2)
                $this->lang = 2;
             $this->ngonngu = Common::translate($this->lang);
            return true;
        }
       $this->lang = 1;
       $this->ngonngu = Common::translate($this->lang);
        $this->ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
        $this->hinhanh = Hinhanh::model()->find("id=1");
        $this->ch = Cauhinh::model()->find("id = 1 ");
        $this->footer = Footer::model()->find("id = 1 ");
        # lấy dữ liệu theo cấu hình setting
        $custom = Custom::model()->find('id = 1');
        Yii::app()->clientScript->registerMetaTag( $this->ch->Title, '', null, array('property' => 'og:title'), 'meta_og_title');
            Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$this->ch->ImageCompany, '', null, array('property' => 'og:image'), 'meta_og_image');
        Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag($this->ch->Description, '', null, array('property' => 'og:description'), 'meta_og_description');
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionGioithieu() { 
        
       $criteria = new CDbCriteria();
        $criteria->with = "gioithieu_lang";
        $criteria->condition = "Active = 1";
        $criteria->order = "t.id";
        $model = Gioithieu::model()->find($criteria);
        $this->pageTitle = $model->gioithieu_lang->Name;
        $this->render('gioithieu',array('model'=>$model));
    }

    public function actionIndex() {
        Yii::app()->theme = 'frontend';
        $this->layout = '//layouts/main';
        $ch = Cauhinh::model()->find();
        $ttc = Thongtinchung::model()->find();
        $this->pageTitle = $ch->Title;
        //meta
        Yii::app()->clientScript->registerMetaTag( $ch->Title, '', null, array('property' => 'og:title'), 'meta_og_title');
        Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$ttc->Banner, '', null, array('property' => 'og:image'), 'meta_og_image');
        Yii::app()->clientScript->registerMetaTag(Common::curPageURLY(), '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag($ch->Description, '', null, array('property' => 'og:description'), 'meta_og_description');
        Yii::app()->clientScript->registerMetaTag($ch->Description, 'description', null);
        Yii::app()->clientScript->registerMetaTag($ch->Keyword, 'keywords', null);
        //end meta
        $this->render('index');
    }
    public function actionDieukhoan()
    {
        $this->render('dieukhoan');
    }
    public function getloaicon1($id,$name = "Loaisanpham")
  {
    array_push($this->arridloai, $id);
    $lsp = $name::model()->find("Parent =$id"); 
    if($lsp != NULL)
    {
        $this->getloaicon($lsp->id,$name);
    }
    return $this->arridloai;   
  }
  public function getloaicon($id,$name = "Loaisanpham")
  {
    array_push($this->arridloai, $id);
    $lsp = $name::model()->findAll("Parent =$id and Active = 1"); 
    foreach ($lsp as $key => $value) {
        # code...
        if($lsp != NULL)
        {
            $this->getloaicon($value->id,$name);
        }
    }
  }
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest){
                echo $error['message'];
                 $this->render('404', $error);
            }
            else
                $this->render('404');
        }
         $this->render('404');
    }
    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    //đăng nhập kiểm tra thành viên bằng ajax

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }


    
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='dktv-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    public function guimail($name,$from,$body)
    {
        $mail = new YiiMailer();
        //$mail->clearLayout();//if layout is already set in config
        $mail->setFrom($from, $name);
        $mail->setTo(Yii::app()->params['adminEmail']);
        $mail->setSubject($name);
        $mail->setBody($body);
        $mail->send();
        //
    }
    public function sendmail($email =null,$subject = null,$data= null,$view)
    {   
        $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
        $message = new YiiMailMessage;
        $message->view =$view;
        $message->subject =$subject;
        $params = array('data'=>$data);
        $message->setBody($params, 'text/html');
        $message->addTo($ttc->Email);
        $message->from = $ttc->Email;
        $kq = Yii::app()->mail->send($message);
       // if ($kq) echo "OK"; 
       // else echo "0 OK"; 

    }
       public function actionLienhe()
    {

        $this->pageTitle = $this->ngonngu[46];
        if(isset($_POST['hoten']))
        {
            $gioithieu = Thongtinchung::model()->find("id = 1");
            $email = $gioithieu->Email;
            $subject = $_SERVER['HTTP_HOST']." - Người dùng liên hệ";
            $data = $_POST;
            //end mail
            $this->sendmail($email,$subject,$data,'lienhe');
             $this->render('lienhe',array("note"=>1));
        }
       
        $this->render('lienhe',array("note"=>0));
    }
 
    public function actionLanguagechange($lang){
        Yii::app()->session;
        if($lang == 1) $_SESSION['lang'] = 1;
        if($lang == 2) $_SESSION['lang'] = 2;
      
       $this->redirect("".Yii::app()->request->urlReferrer."");
    }

	public function actionLoaitin($alias)
  	{
        $criteria = new CDbCriteria();
        $criteria->with = "loaitin_lang";
        $criteria->condition = "Alias = '$alias'";
        $model = Loaitin::model()->find($criteria);
        if($model != false) {
            $criteria = new CDbCriteria();
            $criteria->with = "tintuc_lang";
            $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
            $criteria->order = "t.id desc";
            $this->arridloai = array();
            $this->getloaicon($model->id,"Loaitin");
            $criteria->addInCondition("idLoaiTin",$this->arridloai);
            
            $count = Tintuc::model()->count($criteria);
            $pages = new CPagination($count);
            $pages->pageSize = 20;
            $pages->applyLimit($criteria);                      
            $tintuc = Tintuc::model()->findAll($criteria);
           
            $this->loaitin = $model->id;
            //meta
             // loai cha
        $this->arridloai = array();
        $this->getloaicha($model->Parent,"Loaitin");
            Yii::app()->clientScript->registerMetaTag($model->loaitin_lang->Name, '', null, array('property' => 'og:title'), 'meta_og_title');
            $this->pageTitle = $model->loaitin_lang->Name;
            $this->render("cat",array("data"=>$tintuc,'pages'=>$pages, 'lt'=>$model));
        }
        else
            $this->render("404");
  }
  public function actionTags($alias)
  {
        $tag = Tags::model()->find("Active = 1 and Alias ='$alias'");
        if($tag != false)
        {
            $tags_tt = TagsTintuc::model()->findAll("idTags = $tag->id");
            if($tags_tt != false)
            {
                $arr_tt = array();
                foreach ($tags_tt as $key => $value) {
                    # code...
                    $arr_tt[] = $value->idTinTuc;
                }
                $this->pageTitle = $this->ngonngu[2];
                $criteria = new CDbCriteria();
                $criteria->with = "tintuc_lang";
                $criteria->addInCondition("t.id ", $arr_tt);
                $criteria->order = "t.id desc";
                $count = Tintuc::model()->count($criteria);
                $pages = new CPagination($count);
                $pages->pageSize = 10;
                $pages->applyLimit($criteria);
                $tintuc = Tintuc::model()->findAll($criteria);
                $this->render("tags",array("data"=>$tintuc,'pages'=>$pages,'tag'=>$tag));
            }
            else
                $this->render("404");
        }
        else
            $this->render("404");
  }
  public function actionTimkiem()
  {
    $alias =$_GET['tukhoa'];
    $criteria = new CDbCriteria();
    $criteria->with ="tintuc_lang";
    $criteria->condition ="Active = 1 and Name like '%$alias%'";
    $criteria->order = "t.id desc";
    $this->pageTitle = $this->ngonngu[50];
    $count = Tintuc::model()->count($criteria);
    $pages = new CPagination($count);
    $pages->pageSize =9;
    $pages->applyLimit($criteria);
    $c_json = json_encode($criteria);
    $model = Common::get_cache("timkiem_".$c_json);
    if($model == false)
    {
    	$model = Tintuc::model()->findAll($criteria);
    	Common::set_cache("timkiem_".$c_json,$model);
    }
    $this->render("cat",array("data"=>$model,'pages'=>$pages));
  }
    public function getloaicha($parent,$name = "Loaisanpham")
  {
   if($parent != 0)
   {
        array_push($this->arridloai, $parent);
        $lsp = $name::model()->findAll("id = $parent and Active = 1"); 
        foreach ($lsp as $key => $value) {
            # code...
            if($lsp != NULL )
            {
                $this->getloaicha($value->Parent,$name);
            }
        }
    }
  }
      public function actionChitiet($alias)
      {
        $criteria = new CDbCriteria();
        $criteria->condition = "Alias = '$alias' and idNgonNgu = $this->lang";
        $criteria->with = "tintuc_lang";
        $model = Common::get_cache("tin_".$alias);
        if($model == false)
        {
        	$model = Tintuc::model()->find($criteria);
        	Common::set_cache("tin_".$alias,$model);
        }
        $count = count($model);
        if($count != 0)
        {
            Common::viewcount($model->id);
            $this->pageTitle = $model->tintuc_lang->Name;
            $criteria = new CDbCriteria();
            $criteria->condition = "t.id = $model->idLoaiTin and idNgonNgu = $this->lang";
            $criteria->with = "loaitin_lang";
            $c_json = json_encode($criteria);
            $data = Common::get_cache("tin_".$c_json);
            if($data == false)
            {
            	$data = Loaitin::model()->find($criteria);
            	Common::set_cache("tin_".$c_json,$data);
            }
            Yii::app()->clientScript->registerMetaTag( $model->tintuc_lang->Name, '', null, array('property' => 'og:title'), 'meta_og_title');
            Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$model->UrlImage, '', null, array('property' => 'og:image'), 'meta_og_image');
           Yii::app()->clientScript->registerMetaTag(Common::curPageURLY(), '', null, array('property' => 'og:url'), 'meta_og_site_name');
            Yii::app()->clientScript->registerMetaTag($model->tintuc_lang->Description, '', null, array('property' => 'og:description'), 'meta_og_description');
            $this->loaitin = $data->id;
             //meta
            if(isset($model->Seo_Keywords))
                Yii::app()->clientScript->registerMetaTag($model->Seo_Keywords, 'keywords', null);
            if(isset($model->Seo_Description))
                Yii::app()->clientScript->registerMetaTag($model->Seo_Description, 'description', null);
            // loai cha
            $this->arridloai = array();
            $this->getloaicha($data->Parent,"Loaitin");
            array_push( $this->arridloai, $data->id);
            $this->render("detail",array('model'=>$model, 'loaitin'=>$data));
        }
        else
        {
            $this->render("404");
        }
    
      }
      public function actionViewclip($alias)
      {
        $model = Video::model()->find("Alias = '$alias' and Active = 1");
        if($model != false)
        {
            $this->pageTitle = $model->Name;
            Yii::app()->clientScript->registerMetaTag( $model->Name, '', null, array('property' => 'og:title'), 'meta_og_title');
            Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$model->UrlImage, '', null, array('property' => 'og:image'), 'meta_og_image');
            Yii::app()->clientScript->registerMetaTag(Common::curPageURLY(), '', null, array('property' => 'og:url'), 'meta_og_site_name');
            $mota = $model->Description;
            $mota = Common::getDescription($mota,50);                                                    
            Yii::app()->clientScript->registerMetaTag($mota, '', null, array('property' => 'og:description'), 'meta_og_description');
        $criteria = new CDbCriteria();
        $criteria->condition = "Active = 1 and id > $model->id";
        $criteria->order = "t.id desc";
        $criteria->limit = 8;
        $rela = Video::model()->findAll($criteria);
        if(count($rela) < 8)
        {
             $criteria = new CDbCriteria();
            $criteria->condition = "Active = 1 and id < $model->id";
            $criteria->order = "t.id desc";
            $criteria->limit = 8;
             $rela = Video::model()->findAll($criteria);
        }

            $this->render('viewclip',array( 'model'=>$model,'rela' => $rela));
        }

      }
      public function actionXemraovat($alias)
      {
      	$model = Common::get_cache("raovat_".$alias);
      	if($model == false)
      	{
        	$model = Raovat::model()->find("Active = 1 and Alias = '$alias'");
        	Common::set_cache("raovat_".$alias,$model);
        }
        if($model != false)
        {
            $this->pageTitle = $model->Name;
            $criteria = new CDbCriteria();
            $criteria->condition = " id != $model->id and Active =1 and SetHome = 1";
            $criteria->order = "id desc";
            $criteria->limit = 10;
            $hot = Common::get_cache("raovathot_".$model->id);
            if($hot == false)
            {
            	$hot = Raovat::model()->findAll($criteria);
            	Common::set_cache("raovathot_".$model->id,$hot);
            }
            $this->render('xemraovat',array('model'=>$model,'hot'=>$hot));
        }
        else{
            $this->pageTitle = "404 Page Not Found";
            $this->render('404');
        }
        
      }
      public function actionRaovat()
      {
         $criteria = new CDbCriteria();
         $criteria->condition ="Active = 1" ;
         $criteria->order = "id desc";
         $count = Raovat::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 9;
        $pages->applyLimit($criteria);
        $c_json = json_encode($criteria);
        $model = Common::get_cache("raovat_".$c_json);
        if($model== false)
        {
         	$model = Raovat::model()->findAll($criteria);
         	Common::set_cache("raovat_".$c_json,$model);
        }
        $this->pageTitle = "Rao vặt";
        Yii::app()->clientScript->registerMetaTag( "Rao vặt", '', null, array('property' => 'og:title'), 'meta_og_title');
       // Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$video->UrlImage, '', null, array('property' => 'og:image'), 'meta_og_image');
       Yii::app()->clientScript->registerMetaTag(Common::curPageURLY(), '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag("Xem rao vặt", '', null, array('property' => 'og:description'), 'meta_og_description');
         $criteria = new CDbCriteria();
         $criteria->condition ="Active = 1 and SetHome = 1";
         $criteria->order = "id desc";
        $hot = Common::get_cache("raovathot");
        if($hot == false)
        {
        	$hot = Raovat::model()->findAll($criteria);
        	Common::set_cache("raovathot",$hot);
        }
        $this->render('raovat',array( 'data'=>$model,'pages'=>$pages, 'hot'=>$hot));
      }
      public function actionVideo()
      {
         $criteria = new CDbCriteria();
         $criteria->condition ="Active = 1" ;
         $criteria->order = "id desc";
         $count = Video::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 9;
        $pages->applyLimit($criteria);
        $c_json = json_encode($criteria);
    	$model = Video::model()->findAll($criteria);
         $this->pageTitle = "Video";
        Yii::app()->clientScript->registerMetaTag( "video", '', null, array('property' => 'og:title'), 'meta_og_title');
       // Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$video->UrlImage, '', null, array('property' => 'og:image'), 'meta_og_image');
       Yii::app()->clientScript->registerMetaTag(Common::curPageURLY(), '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag("Xem clip mới nhất", '', null, array('property' => 'og:description'), 'meta_og_description');
        $this->render('video',array( 'data'=>$model,'pages'=>$pages));
      }
        public function actionMaxacthuc()
        {
            Yii::app()->theme = 'frontend';
            $this->layout = '//layouts/random_image';
            $this->render('index');
        }
        public function actionRefreshmaxn()
        {
            Yii::app()->theme = 'frontend';
            $this->layout = '//layouts/refresh';
            $this->render('index');
        }
        public function actionRefreshmaxn1()
        {
            Yii::app()->theme = 'frontend';
            $this->layout = '//layouts/refresh1';
            $this->render('index');
        }
        public function actionBinhluan()
        {
            $model = new Binhluan;
            
            $model->idNguoiDung = Yii::app()->user->getState('idthanhvien');
            if(!isset($model->idNguoiDung) )
            {
                die("lưu bình luận thất bại");
            }
            $model->idBaiViet = $_POST['idBaiViet'];
            $model->Content = $_POST['Content'];
            $model->Parent = $_POST['Parent'];
            $model->save();
            print_r($model->getErrors());
            $kq= array();
            $kq = json_encode($kq);
            print_r($kq);
        }
        public function actionBinhluan_video()
        {
            $model = new Binhluan;
            $model->idNguoiDung = Yii::app()->user->getState('idthanhvien');
            if(!isset($model->idNguoiDung) )
            {
                die("lưu bình luận thất bại");
            }
            $model->idBaiViet = $_POST['idBaiViet'];
            $model->Content = $_POST['Content'];
            $model->Parent = $_POST['Parent'];
            $model->Type = 1;
            $model->save();
            print_r($model->getErrors());
            $kq= array();
            $kq = json_encode($kq);
            print_r($kq);
        }
        public function actionAjaxcomment($id)
        {
            $this->layout = '//layouts/ajax_comment';
            $this->render('ajax_comment',array("id"=>$id));
        }
        public function actionAjaxcommentvideo($id)
        {
            $this->layout = '//layouts/ajax_comment';
            $this->render('ajax_comment_video',array("id"=>$id));
        }
        public function actionajaxlike()
        {
            $kq = array();
            $ip = Common::getRemoteIPAddress();
            $idbl = $_POST['idBinhLuan'];
            $idbv = $_POST['idBaiViet'];
            $model = Like::model()->find("IP = '$ip' and idBinhLuan = $idbl and Type = 0 ");
            if($model == false)
            {
                $model = new Like;
                $model->idBinhLuan = $idbl;
                $model->Type = 0;
                $model->IP = $ip;
                $model->save();
                $kq = array("kq"=>1);
            }
            else
            {
               $model->delete();
                $kq = array("kq"=>0);
            }
            $jkq = json_encode($kq);
            print_r($jkq);
            $this->actionXulylike();
            die();
        }
        public function actionXulylike()
        {
            $criteria = new  CDbCriteria();
            $criteria->condition = "Active = 1";
            $model = Binhluan::model()->findAll($criteria);
            foreach ($model as $key => $value) {
                # code...
                $bl = Binhluan::model()->find("id = $value->id");
                $data = Like::model()->count("idBinhLuan = $value->id");
                $bl->CountLike = $data;
                $bl->save();
            }
        }
        public function actionDemreport()
        {
            $criteria = new  CDbCriteria();
            $criteria->condition = "Active = 1";
            $model = Binhluan::model()->findAll($criteria);
            foreach ($model as $key => $value) {
                # code...
                $bl = Binhluan::model()->find("id = $value->id");
                $data = Report::model()->count("idBinhLuan = $value->id");
                $bl->CountReport = $data;
                $bl->save();
            }
        }
        public function actionReport()
        {
            $report = new Report;
            $ip = Common::getRemoteIPAddress();
            $idbl = $_POST["idBinhLuan"];
            $model = Report::model()->find("IP = '$ip' and idBinhLuan = $idbl");
            if($model == true)
            {
                $kq = array("kq"=>0);
                $jkq = json_encode($kq);
                print_r($jkq);
            }
            else
            {
                $report->IP = $ip;
                $report->idBinhLuan = $_POST["idBinhLuan"];
                $report->Content = $_POST["Content"];
                $report->idLoai = $_POST["idLoai"];
                $report->Email = $_POST["Email"];
                $report->save();
                $kq = array();
                if($report == true)
                {
                   $kq = array("kq"=>1);
                }
                else
                     $kq = array("kq"=>0);
                $jkq = json_encode($kq);
                print_r($jkq);
            }
            $this->actionReport();
        }
    public function actionQuanlytaikhoan($id)
    {
        $this->pageTitle = "Cập nhật tài khoản";

        $id = Yii::app()->user->getState('idthanhvien');
        if(!isset($id)) $this->redirect("/");
        $model = Nguoithue::model()->find("id = $id");
        $this->render('quanlytaikhoan',array('model'=>$model));
    }
   public function actionXulybaogia(){
    if(isset($_POST["Gui"]) && isset($_POST["Baogia"])){
        $model=new Baogia;
        $model->attributes=$_POST['Baogia'];
        $getdate = getdate();
        $model->Date = $getdate[0];
   
        if($model->save()){
            unset($_POST['Baogia']);
            unset($_POST['Gui']);
            Yii::app()->user->setFlash('success', 'Hệ thống đã nhận được yêu cầu của quý khách!');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
    }
  
    Yii::app()->user->setFlash('error', 'Yêu cầu thất bại!');
    $this->redirect(Yii::app()->request->urlReferrer);
   }
   public function actionSanpham($alias)
    {
        $criteria = new CDbCriteria();
        $criteria->with = "sanpham_lang";
        $criteria->condition = "Alias = '$alias'" ;
        $sp = Sanpham::model()->find($criteria);
        $criteria = new CDbCriteria();
        $criteria->with = "loaisanpham_lang";
        $criteria->condition = "t.id = $sp->idLoai and idNgonNgu = $this->lang";
        $lsp = Loaisanpham::model()->find($criteria);
        $idsp = $sp->sanpham_lang->idSP;
        $this->pageTitle = $sp->sanpham_lang->Name;
        Yii::app()->clientScript->registerMetaTag(strip_tags($sp->sanpham_lang->Name), '', null, array('property' => 'og:title'), 'meta_og_title');
        Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$sp->UrlImage, '', null, array('property' => 'og:image'), 'meta_og_image');
        Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag(strip_tags($sp->sanpham_lang->MoTa), '', null, array('property' => 'og:description'), 'meta_og_description');
        $this->render("sanpham",array("model"=>$sp,"lsp"=>$lsp));

    }
     public function actionLoaisp($alias = null)
    {
        if($alias != null)
        {
            $criteria = new CDbCriteria();
            $criteria->with ="loaisanpham_lang";
            $criteria->condition = "Alias = '$alias' ";
            $lsp = Loaisanpham::model()->find($criteria);
            if($lsp == false) {$this->render("../system/error404");return false;}
            $this->pageTitle = $lsp->loaisanpham_lang->Name;
            $this->arridloai = array();
            $this->getloaicon($lsp->id);
            $criteria = new CDbCriteria();
          //$criteria->with ="loaisanpham_lang";
             $criteria->with ="sanpham_lang";
               $criteria->condition = "idNgonNgu = $this->lang and Active = 1 ";
            $criteria->addInCondition("idLoai",$this->arridloai);
            // $lsp = Loaisanpham::model()->findAll($criteria);
            // print_r($this->arridloai);die();
               $count = Sanpham::model()->count($criteria);
             $pages = new CPagination($count);
            $pages->pageSize = 12;
            $pages->applyLimit($criteria);
            $criteria->order = "t.id desc";
            $sp = Sanpham::model()->findAll($criteria);
            $this->pageTitle = $lsp->loaisanpham_lang->Name;
            // loai cha
            $this->arridloai = array();
            $this->getloaicha($lsp->Parent,"Loaisanpham");
            Yii::app()->clientScript->registerMetaTag( $lsp->loaisanpham_lang->Name, '', null, array('property' => 'og:title'), 'meta_og_title');
            Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$lsp->UrlImage, '', null, array('property' => 'og:image'), 'meta_og_image');
            Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
            Yii::app()->clientScript->registerMetaTag($lsp->loaisanpham_lang->Name, '', null, array('property' => 'og:description'), 'meta_og_description');
                $this->render("loaisp",array('lsp'=>$lsp,'data' => $sp,'pages'=>$pages));

        }
        else
        {
            $criteria = new CDbCriteria();
            $criteria->with ="sanpham_lang";
            $criteria->condition = "idNgonNgu = $this->lang and Active = 1 ";
            // $lsp = Loaisanpham::model()->findAll($criteria);
            // print_r($this->arridloai);die();
            $count = Sanpham::model()->count($criteria);
             $pages = new CPagination($count);
            $pages->pageSize = 12;
            $pages->applyLimit($criteria);
            $criteria->order = "t.id desc";
            $sp = Sanpham::model()->findAll($criteria);
            $this->pageTitle = $this->ngonngu[165];
            $this->render("loaisp",array('sp' => $sp,'pages'=>$pages));
        }
    }
}
