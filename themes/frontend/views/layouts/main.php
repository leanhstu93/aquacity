<?php
  $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
  $ch = Cauhinh::model()->find("id = 1 ");
  common::luuThongtin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="google-site-verification" content="thIN_-Eh2apP5tF5RbzPfhi9py5rRlzJ7yez8g2NP4g" />
   <!-- fb -->
   <meta property="fb:app_id" content="<?php  echo $ch->Appid;?>" />
   <link href="<?php echo $ttc->Favicon ?>" rel="shortcut icon" type="image/x-icon" />
    <meta property="og:type" content="article" />
    <script type="text/javascript">
        var appid = '<?php  echo $ch->Appid;?> ';
    </script>
  <!--  end fb -->
  <title><?php echo $this->pageTitle ?></title>
  <!-- start nhung bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/all.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/settings.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/navigation.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/style.css">
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-3.1.1.min.js"></script>
   <script type="text/javascript">
     $(function(){$(".alert button").click(function(event) {/* Act on the event */ $(this).parent().hide("fast"); }); })
   </script>

    <?php echo $ch->head ?>
</head>
<body class="gradients" data-spy="scroll" data-target=".navbar" data-offset="90">
 <?php echo $ch->body ?>
 <?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . " <button>x</button> </div>\n";
    }
?>
 <?php $this->renderPartial("//layouts/loader"); ?>
  <div class="w1350">
      <?php $this->renderPartial("//layouts/header"); ?>
    <?php  echo $content ?>
      <?php $this->renderPartial("//layouts/footer"); ?>
    <?php // $this->renderPartial("//layouts/messengerFB"); ?>



      <!--Bootstrap Core-->
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/propper.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.appear.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.matchHeight-min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/owl.carousel.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-countTo.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/parallaxie.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.cubeportfolio.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.fancybox.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/morphext.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/particles.min.js"></script>

      <!--Revolution SLider-->
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.themepunch.tools.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.themepunch.revolution.min.js"></script>
      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.actions.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.carousel.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.kenburn.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.layeranimation.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.migration.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.navigation.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.parallax.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.slideanims.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/revolution.extension.video.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl ?>/js/functions.js"></script>
 </div>
</body>
</html>
