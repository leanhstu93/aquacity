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
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/animate.css">
  <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.js"></script>
   <script src="<?php echo Yii::app()->request->baseUrl ?>/js/animatescroll.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/carousel/owl.carousel.css">
    <script type="text/javascript" src="/js/carousel/owl.carousel.min.js"></script>
   <script type="text/javascript">
     $(function(){$(".alert button").click(function(event) {/* Act on the event */ $(this).parent().hide("fast"); }); })
   </script>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/style.css">
</head>
<body class="kns">
 <?php echo $ch->body ?>
 <?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . " <button>x</button> </div>\n";
    }
?>
  <div class="w1350">
      <?php $this->renderPartial("//layouts/header"); ?>
    <?php echo $content ?>
      <?php $this->renderPartial("//layouts/footer"); ?>
    <?php $this->renderPartial("//layouts/nav-bottom"); ?>
    <?php $this->renderPartial("//layouts/messengerFB"); ?>
 </div>
</body>
</html>
