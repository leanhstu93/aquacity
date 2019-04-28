<?php
  $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
  $ch = Cauhinh::model()->find("id = 1 ");
  common::luuThongtin();
?>
<script type="text/javascript">
 var appid = '<?php  echo $ch->Appid;?> ';
</script>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="google-site-verification" content="thIN_-Eh2apP5tF5RbzPfhi9py5rRlzJ7yez8g2NP4g" />
   <!-- fb -->
   <meta property="fb:app_id" content="<?php  echo $ch->Appid;?>" />
   <link href="<?php echo $ttc->Favicon ?>" rel="shortcut icon" type="image/x-icon" />
    <meta property="og:type" content="article" />

  <!--  end fb -->
  <title><?php echo $this->pageTitle ?></title>
  <!-- start nhung bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/animate.css">
  <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.js"></script>
   <script src="<?php echo Yii::app()->request->baseUrl ?>/js/animatescroll.js"></script>
   <script type="text/javascript">
     $(function(){$(".alert button").click(function(event) {/* Act on the event */ $(this).parent().hide("fast"); }); })
   </script>
</head>
<body>
 <?php echo $ch->body ?>
 <?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . " <button>x</button> </div>\n";
    }
?>
  <div class="w1350">
     <div class="wrp-bg-white w100">
    <section  class="hedear-top w100">
      <div class="w1000">
        <ul>
          <li>
            <a href="<?php echo $this->ttc->Google ?>" target="_blank">
              <i class="fa fa-google-plus" aria-hidden="true"></i>
            </a>
          </li>
           <li>
            <a href="<?php echo $this->ttc->Facebook ?>" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </li>
           <li>
            <a href="<?php echo $this->ttc->Youtube ?>" target="_blank">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <header class="w100">
      <div class="w1000">
        <div class="wrp-col3 w100">
          <div class="col3">
            <a href="/">
              <img src="<?php echo $this->ttc->Logo ?>">
            </a>
          </div>
          <div class="col3">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span><?php echo $this->ttc->Address ?></span>
          </div>
          <div class="col3">
            <div class="left">
              <ul>
                <li>
                  Chăm sóc khách hàng
                </li>
                <li>
                  <i class="fa fa-phone" aria-hidden="true"></i><span> <?php echo $this->ttc->Phone ?></span>
                </li>
                 <li>
                  <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $this->ttc->Tel ?></span>
                </li>
                <li>
                  <i class="fa fa-envelope-o" aria-hidden="true"></i> <span><?php echo $this->ttc->Email ?></span>
                </li>
              </ul>
            </div>
            <div class="right">
              <img src="/images/Customer-Service.png">
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="menu w100">
      <div class="w1000">
       <?php $this->renderPartial("//layouts/menu"); ?>
      </div>
    </section>
    </div>
    <?php echo $content ?>
    <footer class="w100">
      <div class="w1000">
        <div class="col3">
          <div class="wrp-logo-ft">
            <img src="<?php echo $this->ttc->Logo ?>">
          </div>
          <ul>
            <li>
              Địa chỉ: <?php echo $this->ttc->Address ?>
            </li>
            <li>
              Hotline 1: <?php echo $this->ttc->Phone ?>
            </li>
            <li>
              Hotline 2: <?php echo $this->ttc->Tel ?>
            </li>
          </ul>
        </div>
        <div class="col3">
          <label class="w100">
            Mạng xã hội 
          </label>
          <ul>
          <li>
            <a href="<?php echo $this->ttc->Google ?>" target="_blank">
              <i class="fa fa-google-plus" aria-hidden="true"></i>
            </a>
          
            <a href="<?php echo $this->ttc->Facebook ?>" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          
            <a href="<?php echo $this->ttc->Youtube ?>" target="_blank">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <br>
          <label class="w100"> Menu </label>
          <ul>
            <li ><a href='/gioi-thieu.html'> Giới thiệu </a></li>
     <?php 
           $criteria = new CDbCriteria();
           $criteria->with = "loaisanpham_lang";
           $criteria->condition ="Active = 1 and Parent = 0 and idNgonNgu = $this->lang" ;
           $criteria->order = "t.Order";
           $lsp = Loaisanpham::model()->findAll($criteria);
           //$count = Loaisanpham::model()->count($criteria);
           foreach ($lsp as $key => $value) {
             # code...
          ?>
          <li>
            <a href="/loai-san-pham/<?php echo $value->loaisanpham_lang->Alias ?>.html">
              <?php echo $value->loaisanpham_lang->Name ?>
            </a>
          </li>
          <?php } ?>
           <?php 
           $criteria = new CDbCriteria();
           $criteria->with = "loaitin_lang";
           $criteria->condition ="Active = 1 and Parent = 0 and idNgonNgu = $this->lang" ;
           $criteria->order = "t.Order";
           $lsp = Loaitin::model()->findAll($criteria);
           //$count = Loaisanpham::model()->count($criteria);
           foreach ($lsp as $key => $value) {
             # code...
          ?>
          <li>
            <a href="/sp/<?php echo $value->loaitin_lang->Alias ?>.html">
              <?php echo $value->loaitin_lang->Name ?>
            </a>
          </li>
          <?php } ?>
    <li ><a href='/lien-he.html'> Liên hệ </a></li>
          </ul>
        </div>
        <div class="col3">
          <label class="w100">Thanh toán</label>
          <ul>
            <li>
               <p>
                Ngân hàng Vietcombank Chi nhánh Phú Thọ
              </p>
              <p>
                <span>Chủ tài khoản:</span><span> CÔNG TY TNHH THƯƠNG MẠI IN ẤN – QUẢNG CÁO TUẤN KHOA KHÔI</span>
              </p>
              <p>
                <span>Số Tài Khoản:</span><span> 0421000478336</span>
              </p>
             
            </li>
            <li>
               <p>
                Ngân hàng Vietcombank Chi nhánh Phú Thọ
              </p>
              <p>
                <span>Chủ tài khoản:</span><span> NGUYỄN THỊ GÁI</span>
              </p>
              <p>
                <span>Số Tài Khoản:</span><span> 0441000664339</span>
              </p>
             
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <?php $this->renderPartial("//layouts/nav-bottom"); ?>
    <?php $this->renderPartial("//layouts/messengerFB"); ?>
 </div>
 </div>

</body>
</html>
