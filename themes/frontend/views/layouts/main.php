<!Doctype html>
<html lang="vi">
<head>
  <?php
$ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");

$ch = Cauhinh::model()->find("id = 1 ");
echo "<script>
  var appid = $ch->Appid;
</script>";
?>
   <meta charset="UTF-8">
  <title><?php echo $this->pageTitle ?></title>
  <base href="http://mexitaco.vn/" />
  <!-- start nhung bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <meta name="google-site-verification" content="DwNruzO6ID3N0zsxJWRDJqA9OtWzE2hqmiZcbPiubSY" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/ta.js"></script>
    <!-- end icon --><meta property="og:email" content="leanh.stu93@gmail.com">
<meta property="og:phone_number" content="01693897418">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo $ttc->Favicon ?>" type="image/x-icon" />
  <!-- Optional theme -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/font-awesome.min.css">
  <!-- end css -->
  <!-- end nhung bootstrap -->
<?php echo $ch->head ?>
 <script type="text/javascript">
   $(function(){
      $(".key").focus(function(e){
        $(this).keydown(function(e){
          if(e.which == 13){
            key = $(this).parent().find(".key").val();
            window.location.href="tim-kiem.html?keyword="+key+"";
          }
        })
      });
      $(".btn_timkiem").click(function(){
        key = $(".key").val();
        window.location.href="tim-kiem.html?keyword="+key+"";
      });
   })
 </script>
</head>
<body>
  <div class="w1350">
    
  <?php echo $content ?>
    <footer class="w100">
      <div class="w1000">
       <div class="col3">
         <img src="<?php echo $ttc->Logo ?>" >
       </div>
      
      <!-- col3 -->
      <div class="col3">
         <label>Menu</label>
         <ul>
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
            <a href="/menu/<?php echo $value->loaisanpham_lang->Alias ?>.html">
              <?php echo $value->loaisanpham_lang->Name ?>
            </a>
          </li>
          <?php } ?>
         </ul>
         <div class="clear"></div>
         <p class="w100">
           <strong><?php echo $this->ngonngu[8] ?>:</strong><?php echo $ttc->Address; ?>
          </p>
          <p>
           <strong>Hotline:</strong><?php echo $ttc->Tel ?>
         </p>
      </div>
      <!-- col3 -->
      <div class="col3">
        <label>Facebook</label>
        <div class="wrp-social w100">
          <iframe style="border:none;overflow:hidden;width:100%;height:230px;float:right;" src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/Mexi-Taco-1437188266294977/?ref=bookmarks&amp;width=330&amp;height=330&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=637240566349503" width="400" height="190" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <?php //  $this->renderPartial("//layouts/popup");?> 
  <?php //  $this->renderPartial("//layouts/blockphone");?> 
   <?php  $this->renderPartial("//layouts/messengerFB");?> 
</body>
</html>
