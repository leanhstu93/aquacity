<?php
  $ttc = Thongtinchung::model()->find(" idNgonNgu =1 ");
  $ch = Cauhinh::model()->find("id = 1 ");
?>
<html>
<head>
   <meta charset="UTF-8">
   <meta property="fb:app_id" content="<?php  echo $ch->Appid;?>">
   <link href="<?php echo $ttc->Favicon ?>" rel="shortcut icon" type="image/x-icon" />
        <meta property="og:type" content="article" />

  <!--  end fb -->
  <title>Page 404</title>
  <!-- start nhung bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->

</head>
<body>
	 <?php echo $ch->body ?>
<div class="w1350">
 

  	
	<section class="page-error w100">
		<div class="w1000">
			<h1 class="page-title w100 center">Lỗi 404 <span>!</span> Không tìm thấy trang.</h1>
			<h1 class="center error-title w100">404</h1>
			<p class="text-center back"><a href="/" title="">Về trang chủ</a></p>
		</div>
	</section>
	
</div>
</body>
</html>
<style type="text/css">
	.page-error .page-title{font-size: 36px;margin-top: 20px;
    margin-bottom: 10px;    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;text-align: center}
    .page-error .page-title span {
    font-size: 50px;
    font-weight: bold;
    color: #f9ad3f;
}
h1.error-title {
    font-size: 30vh;
    font-family: sans-serif;
    position: relative;
    background: white;
    color: black;
    margin: 0;
    padding: 0;
    overflow: hidden;
    text-align: center;
}
h1.error-title:before {
    content: '';
    display: block;
    position: absolute;
    -webkit-filter: blur(20px);
    filter: blur(20px);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    mix-blend-mode: screen;
    background-image: repeating-linear-gradient(-45deg, transparent, transparent 1em, #9E2053 1em, orange 50%), repeating-linear-gradient(45deg, #111626, #111626 1em, pink 1em, #571B3D 50%);
    background-size: 3em 3em, 2em 2em;
    animation-name: ani;
    animation-duration: 8s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}
.text-center {
    text-align: center;
}
@keyframes ani{from{background-position:0 0;}
to{background-position:400% 0;}
}
@-webkit-@keyframes ani{from{background-position:0 0;}
to{background-position:400% 0;}
}
@-webkit-@keyframes ani{from{background-position:0 0;}
to{background-position:400% 0;}
}
.back a {
    display: inline-block;
    padding: 10px 30px;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 300;
    background: #f9ad3f;
}
</style>