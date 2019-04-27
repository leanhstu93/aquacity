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
    public function init()
    {
        Yii::app()->theme = 'frontend';
        Yii::app()->session;
        $this->lang = 1;
       if(isset($_SESSION['lang'])){
            if($_SESSION['lang'] == 2)
                $this->lang = $_SESSION['lang'];
        }

         $this->ngonngu = Common::translate($this->lang);
         $this->ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
        $this->ch = Cauhinh::model()->find("id = 1 ");

        Yii::app()->clientScript->registerMetaTag( $this->ch->Title, '', null, array('property' => 'og:title'), 'meta_og_title');
       //     Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$this->ch->ImageCompany, '', null, array('property' => 'og:image'), 'meta_og_image');
        Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag($this->ch->Description, '', null, array('property' => 'og:description'), 'meta_og_description');
    }
 
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionGioithieu($alias) { 
         $criteria = new CDbCriteria();
        $criteria->with ="gioithieu_lang";
        $criteria->condition = "Active = 1 and Alias = '$alias' and idNgonNgu = $this->lang";
        $model = Gioithieu::model()->find($criteria);
        $this->pageTitle = $model->gioithieu_lang->Name;
        $this->render('gioithieu',array('model'=>$model));
    }
    public function actionIndex() {
        Yii::app()->theme = 'frontend';
        $this->layout = '//layouts/main';
        $ttc = Cauhinh::model()->find();
        $this->pageTitle = $ttc->Title;
        $criteria = new CDbCriteria();
        $criteria->with="sanpham_lang";
        $criteria->condition = "Active = 1 and SetHome = 1 and idNgonNgu = ".$this->lang;
        $criteria->order ="t.id desc";
        $criteria->limit= 12;
        $spnb = Sanpham::model()->findAll($criteria);
        $criteria = new CDbCriteria();
        $criteria->with = "tintuc_lang";
        $criteria->condition = "Active = 1 and SetHome = 1 and idNgonNgu = ".$this->lang ;
        $criteria->order ="t.id desc";
        $criteria->limit= 4;
        $ttnb = Tintuc::model()->findAll($criteria);
        $criteria = new CDbCriteria();
        $criteria->condition = "Active = 1";
        $criteria->order ="t.id desc";
        $criteria->limit= 3;
        $slide = Slide::model()->findAll($criteria);
        $criteria = new CDbCriteria();
        $criteria->condition = "Active = 1";
        $criteria->order ="t.id desc";
        $criteria->limit= 3;
        $hinhanh = Hinhanh::model()->findAll($criteria);
        $this->render('index',array('spnb'=>$spnb,'ttnb'=>$ttnb,'slide'=>$slide,'hinhanh'=>$hinhanh));
    }
    public function actionDieukhoan()
    {
        $this->render('dieukhoan');
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
  public function actionTimkiem()
  {
    $alias =$_GET['keyword'];
    $criteria = new CDbCriteria();
    $criteria->with ="sanpham_lang";
    $criteria->condition ="Active = 1 and Name like '%$alias%' and idLoai != 10";
    $criteria->limit = 10;
    $count = Sanpham::model()->count($criteria);
    $pages = new CPagination($count);
    $pages->pageSize = 12;
    $pages->applyLimit($criteria);
    $model = Sanpham::model()->findAll($criteria);
    $this->pageTitle = $this->ngonngu[50];
    Yii::app()->clientScript->registerMetaTag( "Tìm kiếm: ".$_GET['keyword'], '', null, array('property' => 'og:title'), 'meta_og_title');
    Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$this->ch->ImageCompany, '', null, array('property' => 'og:image'), 'meta_og_image');
    Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
    Yii::app()->clientScript->registerMetaTag("Tìm kiếm: ".$_GET['keyword'], '', null, array('property' => 'og:description'), 'meta_og_description');
    $this->render("timkiem",array("data"=>$model,'keyword'=>$_GET['keyword'],'pages'=>$pages));
  }
  public function actionVideo(){
    $criteria = new CDbCriteria();
    $criteria->with ="video_lang";
    $criteria->condition = "Active = 1 and idNgonNgu = $this->lang";
    $count = Video::model()->count($criteria);
     $pages = new CPagination($count);
    $pages->pageSize = 12;
    $pages->applyLimit($criteria);
     $data = Video::model()->findAll($criteria);
    Yii::app()->clientScript->registerMetaTag( "Video", '', null, array('property' => 'og:title'), 'meta_og_title');
    Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$this->ttc->Logo, '', null, array('property' => 'og:image'), 'meta_og_image');
    Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
    Yii::app()->clientScript->registerMetaTag("video", '', null, array('property' => 'og:description'), 'meta_og_description');
    $this->render("video",array('data'=>$data,'pages'=>$pages));
  }
  public function actionHinhanh(){
    $criteria = new CDbCriteria();
    $criteria->with ="hinhanh_lang";
    $criteria->condition = "Active = 1 and idNgonNgu = $this->lang";
    $count = Hinhanh::model()->count($criteria);
    $pages = new CPagination($count);
    $pages->pageSize = 12;
    $pages->applyLimit($criteria);
    $data = Hinhanh::model()->findAll($criteria);
    Yii::app()->clientScript->registerMetaTag( "Hình Ảnh", '', null, array('property' => 'og:title'), 'meta_og_title');
    Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$this->ttc->Logo, '', null, array('property' => 'og:image'), 'meta_og_image');
    Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
    Yii::app()->clientScript->registerMetaTag("Hình Ảnh", '', null, array('property' => 'og:description'), 'meta_og_description');
    $this->render("hinhanh",array('data'=>$data,'pages'=>$pages));
  }
    public function actionLoaisp($alias = null)
    {
        if($alias != null)
        {
            $criteria = new CDbCriteria();
            $criteria->with ="loaisanpham_lang";
            $criteria->condition = "Alias = '$alias' ";
            $lsp = Loaisanpham::model()->find($criteria);
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
            if($lsp->id == 10)
                $this->render("loaisp1",array('lsp'=>$lsp,'sp' => $sp,'pages'=>$pages));
            else
                $this->render("loaisp",array('lsp'=>$lsp,'sp' => $sp,'pages'=>$pages));

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
    public function actionCheckout(){
        $this->pageTitle = "Check out";
          $donhang = new NncmsDonhang;
        $nguoidung = new NncmsNguoidung;
         $cart = Yii::createComponent(array(
            'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart'
        ));
        //Important!
        $cart->init();
        $data = Yii::app()->shoppingCart->getPositions();

        if(isset($_POST['NncmsNguoidung']) && isset($_POST['NncmsDonhang'])){
            $getdate = getdate();
            $email = $_POST["NncmsNguoidung"]["Email"];
            $nguoidung=NncmsNguoidung::model()->find("Email = '".$email."'");
            if($nguoidung == false ) {
                $nguoidung = new NncmsNguoidung;
                $nguoidung->NgayDangKy = $getdate[0];
            }
            
            $nguoidung->attributes = $_POST['NncmsNguoidung'];
            $nguoidung->TenTaiKhoan = $nguoidung->Email;
            if($nguoidung->save())
            {
                Yii::app()->session;
                if(isset($_SESSION['idDH'])){
                    $idDH = $_SESSION['idDH'];
                    $donhang = NncmsDonhang::model()->find("idDH = ".$idDH." and TinhTrang = 0 ");
                    if($donhang == false)  $donhang = new NncmsDonhang;
                }
                $donhang->idNguoiDung = $nguoidung->idNguoiDung;
                $getdate = getdate();
                $donhang->ThoiGianDat = $getdate[0];
                $donhang->TenNguoiNhan = $nguoidung->HoTen;
                $donhang->attributes=$_POST['NncmsDonhang'];
                $donhang->TinhTrang = 0;
                if($donhang->save()){
                    $_SESSION['idDH'] = $donhang->idDH;
                    foreach ($data as $key => $value) {
                        # code...
                        $dhct = NncmsDonhangchitiet::model()->find("idDH = ".$donhang->idDH." and idSP = ".$value->getId()." ");
                        if($dhct == false){
                            $dhct = new NncmsDonhangchitiet;
                        }
                       
                        $dhct->idDH = $donhang->idDH;
                        $dhct->idSP = $value->getId();
                        $dhct->SoLuong = $value->getQuantity();
                        $dhct->Gia = $value->getSumPrice();
                        $dhct->save();
                    }
                    unset($_POST['NncmsDonhang']);
                    $data = $donhang;
                   // $_POST['NncmsDonhang'] = array();
                    /* guimail */
                    
                    $subject = $_SERVER['HTTP_HOST']." - | Đặt hàng thành công.";
                    $subject_GH = $_SERVER['HTTP_HOST']." - | Giao hàng.";
                   // Yii::app()->user->setFlash('sendmail', "1");

                    $this->sendmail($this->ch->Email,$subject_GH,$data,'mailgiaohang');
                    $this->sendmail($email,$subject,$data,'maildathang');

                    /* end gui mai */
                    $this->render("dathangthanhcong",array('nguoidung'=>$nguoidung));
                    die();
                }
            
            }
        }
        //
        $this->render("checkout",array("data"=>$data,"donhang"=>$donhang,"nguoidung"=>$nguoidung));
    }
    public function actionremoveAllcart(){
        Yii::app()->shoppingCart->clear();
         $cart = Yii::createComponent(array(
            'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart'
        ));
         $cart->init();
        $data = Yii::app()->shoppingCart->getPositions();
         $this->render("viewcart_ajax",array('data' => $data));
    }
    public function actionremovecart(){
        $idsp = $_POST["idsp"];
         $cart = Yii::createComponent(array(
            'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart'
        ));
        //Important!
        $cart->init();
        $sp = Sanpham::model()->findByPk($idsp);
        Yii::app()->shoppingCart->remove($sp->getId()); //no items
        $data = Yii::app()->shoppingCart->getPositions();
        $this->render("viewcart_ajax",array('data' => $data));
    }
    public function actionViewcartajax(){
        $idsp = $_POST["idsp"];
        $qua = $_POST["qua"];
        $cart = Yii::createComponent(array(
            'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart'
        ));
        //Important!
        $cart->init();
         $sp = Sanpham::model()->findByPk($idsp);
        Yii::app()->shoppingCart->update($sp,$qua); //1 item with id=1, quantity=1.
        $data = Yii::app()->shoppingCart->getPositions();
        $this->render("viewcart_ajax",array('data' => $data));
    }
    public function actionCapnhatgiohang(){ 

        $daysl = $_POST['sl']; $dayid = $_POST['idsp']; 

        for($i=0; $i<count($dayid); $i++){
            $idsp = $dayid[$i]; $qua = $daysl[$i];
           $cart = Yii::createComponent(array(
            'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart'
            ));
            //Important!
            $cart->init();
             $sp = Sanpham::model()->findByPk($idsp);
            Yii::app()->shoppingCart->update($sp,$qua); //1 item with id=1, quantity=1.
            $data = Yii::app()->shoppingCart->getPositions();
        }   
        
        $this->render("viewcart_ajax",array('data' => $data));
    }
    public function actionAddtocart(){
        $cart = Yii::createComponent(array(
            'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart'
        ));
        //Important!
        $cart->init();
       $idsp = $_POST['idsp'];
       $qua = $_POST['qua'];
       $sp = Sanpham::model()->findByPk($idsp);
       Yii::app()->shoppingCart->put($sp,$qua); //1 item with id=1, quantity=1.
       $res = array("kq"=>1);
       $kq = json_encode($res);
       print_r($kq);
    }
    public function actionViewcart(){
        $data = Yii::app()->shoppingCart->getPositions();
        $this->render("cart",array("data"=>$data));
    }
    public function actionSanpham($alias)
    {
        $criteria = new CDbCriteria();
        $criteria->with = "sanpham_lang";
        $criteria->condition = "Alias = '$alias' and idNgonNgu = ".$this->lang;
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
        if($sp->idLoai == 10)
            $this->render("sanphamnuocsuoi",array("model"=>$sp,"lsp"=>$lsp));
        else
        $this->render("sanpham",array("model"=>$sp,"lsp"=>$lsp));

    }
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
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
        $message = new YiiMailMessage;
        $message->view =$view;
        $message->subject =$subject;
        $params = array('data'=>$data);
        $message->setBody($params, 'text/html');
        $message->addTo($email);
        $message->from = Yii::app()->params['adminEmail'];
        $kq = Yii::app()->mail->send($message);
       // if ($kq) echo "OK"; 
       // else echo "0 OK"; 

    }
       public function actionLienhe()
    {
        $this->pageTitle = $this->ngonngu[46];
        Yii::app()->clientScript->registerMetaTag($this->ngonngu[46], '', null, array('property' => 'og:title'), 'meta_og_title');
        Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$this->ch->ImageCompany, '', null, array('property' => 'og:image'), 'meta_og_image');
        Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag($this->ngonngu[46], '', null, array('property' => 'og:description'), 'meta_og_description');
        if(isset($_POST['hoten']))
        {
            $gioithieu = Thongtinchung::model()->find("id = 1");
            $email = $gioithieu->Email;
            $subject = $_SERVER['HTTP_HOST']." - Người dùng liên hệ";
            $data = $_POST;
            $data["logo"] = $this->ttc->Logo;
            //end mail
            $this->sendmail($email,$subject,$data,'lienhe');
            $this->render('lienhe',array("note"=>1));
            die();
        }
        $this->render('lienhe',array("note"=>0));
    }
    public function actionForgotpassword(){
        $email = $_POST['email'];
        $count = Nguoithue::model()->count("Email = '$email'");
        $pass = rand(100000,999999);
        
        if($count > 0){
            $chuoingaunhien = Common::chuoingaunhien(200);
            $data = Nguoithue::model()->find("Email = '$email'");
            $data->MaNgauNhien = $pass;
             $data->MatKhau = md5($pass);
            $data->save();
            //mail
            $subject = $_SERVER['HTTP_HOST']." - Xác nhận phục hồi mật khẩu";
            //end mail
            $this->sendmail($email,$subject,$data,'quenmatkhau');
            $_SESSION['sussess'] = $this->ngonngu[151];
        }
        else
        {
            $count = Nguoichothue::model()->count("Email = '$email'");
            if($count > 0)
            {
                 $chuoingaunhien = Common::chuoingaunhien(200);
                $data = Nguoithue::model()->find("Email = '$email'");
                $data->MaNgauNhien = $pass;
                $data->MatKhau = md5($pass);
                $data->save();
                //mail
                $subject = $_SERVER['HTTP_HOST']." - Xác nhận phục hồi mật khẩu";
                //end mail
                $this->sendmail($email,$subject,$data,'quenmatkhau');
                $_SESSION['sussess'] = $this->ngonngu[151];
            }
            else
            {
                 $_SESSION['warning'] = $this->ngonngu[150];
               
            }
        }
         $this->redirect("/");
    }
 
    public function actionLanguagechange($lang){
        Yii::app()->session;
        if($lang == 1) $_SESSION['lang'] = 1;
        if($lang == 2) $_SESSION['lang'] = 2;
      
       $this->redirect("".Yii::app()->request->urlReferrer."");
    }

  public function actionLoaitin($alias = null)
  {
    if($alias == null)
    {
        $this->pageTitle = $this->ngonngu[2];
        $criteria = new CDbCriteria();
        $criteria->with = "tintuc_lang";
        $criteria->condition = "Active = 1 and idNgonNgu = $this->lang";
        $criteria->order = "t.id desc";
        $count = Tintuc::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 6;
        $pages->applyLimit($criteria);
        $tintuc = Tintuc::model()->findAll($criteria);
        $this->render("loaitintuc",array("data"=>$tintuc,'pages'=>$pages));
    }
    else
    {
        $this->pageTitle = $this->ngonngu[2];
        $criteria = new CDbCriteria();
        $criteria->with = "loaitin_lang";
        $criteria->condition = "Alias = '$alias'";

        $model = Loaitin::model()->find($criteria);
        $criteria = new CDbCriteria();
        $criteria->with = "tintuc_lang";
        $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
        $this->arridloai = array();
        $this->getloaicon($model->id,"Loaitin");
        $criteria->addInCondition("idLoaiTin",$this->arridloai);
        $criteria->order ="t.id desc";
        $count = Tintuc::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 4;
        $pages->applyLimit($criteria);
        $tintuc = Tintuc::model()->findAll($criteria);
        // loai cha
        $this->arridloai = array();
        $this->getloaicha($model->Parent,"Loaitin");
        Yii::app()->clientScript->registerMetaTag($model->loaitin_lang->Name, '', null, array('property' => 'og:title'), 'meta_og_title');
        Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$this->ch->ImageCompany, '', null, array('property' => 'og:image'), 'meta_og_image');
        Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
        Yii::app()->clientScript->registerMetaTag($model->loaitin_lang->Name, '', null, array('property' => 'og:description'), 'meta_og_description');
        $this->render("loaitintuc",array("data"=>$tintuc,'pages'=>$pages,'lt'=>$model));
    }
  }

  public function actionTintuc($alias)
  {
    $criteria = new CDbCriteria();
    $criteria->with = "tintuc_lang";
    $criteria->condition = "Alias = '$alias'";
    $model = Tintuc::model()->find($criteria);
    $criteria = new CDbCriteria();
    $criteria->with = "tintuc_lang";
    $criteria->condition = "  t.id = $model->id and idNgonNgu = $this->lang";
    $model = Tintuc::model()->find($criteria);
    $this->pageTitle = $model->tintuc_lang->Name;
    $criteria = new CDbCriteria();
    $criteria->with = "loaitin_lang";
    $criteria->condition = "t.id = $model->idLoaiTin and idNgonNgu = $this->lang";
    $lt = Loaitin::model()->find($criteria);
    // loai cha
    $this->arridloai = array();
    $this->getloaicha($lt->Parent,"Loaitin");
    array_push( $this->arridloai, $lt->id);
    Yii::app()->clientScript->registerMetaTag($model->tintuc_lang->Name, '', null, array('property' => 'og:title'), 'meta_og_title');
    Yii::app()->clientScript->registerMetaTag("http://".$_SERVER["HTTP_HOST"].$model->UrlImage, '', null, array('property' => 'og:image'), 'meta_og_image');
    Yii::app()->clientScript->registerMetaTag($_SERVER["REQUEST_URI"], '', null, array('property' => 'og:url'), 'meta_og_site_name');
    Yii::app()->clientScript->registerMetaTag(strip_tags($model->tintuc_lang->Description), '', null, array('property' => 'og:description'), 'meta_og_description');
    $this->render("tintuc",array('model'=>$model,'lt'=>$lt));
  }
  function luuThongtin(){
        //$idloai=0;
        //if ($action=="cat") $idloai=$params[0]; 
        //elseif($action=="detail") {
          //  $idbv = $params[0]; settype($idbv,"int");
            //$row = $this->detail($idbv); if ($row) $idloai = $row['idloai'];
        //}
        //settype($idloai,"int");
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $userAgent = mysql_escape_string($_SERVER['HTTP_USER_AGENT']);
    //    $username=(isset($_SESSION['login_user'])==true)? $_SESSION['login_user']:"";
        $idSession = session_id();
        $model = Sessions::model()->find("idSession = '$idSession'");
      //  $sql = "SELECT idSession FROM sessions WHERE idSession='$idSession'";
      //  if(!$ses = $this->db->query($sql) ) die ($this->db->error);
        $getdate = getdate();
        if ($model != false ){ // người này có rồi, giờ request lại 
            $model->lastVisit = $getdate[0];

            $model->save();
           // $this->db->query($sql) or die($this->db->error." : " . $sql);
        } else { //người này chưa có, mới vào lần đầu
            $model = new Sessions;
            $model->idSession = $idSession;
            $model->userAgent = $userAgent;
            $model->lastVisit = $getdate[0];
            $model->session_start = $getdate[0];
            $model->ipAddress = $ipAddress;
            $model->save();
            $truycap = Counttruycap::model()->find('id = 1');
            $truycap->Count = $truycap->Count+1;
            $truycap->save();
           
         //   $sql="INSERT INTO sessions SET idSession = '$idSession', 
         //       userAgent = '$userAgent', lastVisit = unix_timestamp(), 
          //      session_start = unix_timestamp(),username = '$username',
          //      ipAddress = '$ipAddress', idloai = $idloai";
           // $this->db->query($sql) or die($this->db->error);
        }
        $sessionTime = 15; //thời gian lưu thông tin 
        Sessions::model()->deleteAll("lastVisit + 15 <= ".$getdate[0]);
      //  $sql="DELETE FROM sessions WHERE unix_timestamp()-lastVisit >=$sessionTime*60";
      //  $this->db->query($sql) or die($this->db->error);
        }//luuthongtin
        function DemSoNguoiXem(){
         // $sql="select count(*) from sessions where idloai=$idloai 
          //      or idloai in (select idloai from phanloaibai where idcha=$idloai)";
         // $rs=$this->db->query($sql) or die($this ->db->error);
         // $row= $rs->fetch_row();  $songuoi=$row[0];
          $songuoi = Sessions::model()->count();
          return $songuoi;
        }


    }
