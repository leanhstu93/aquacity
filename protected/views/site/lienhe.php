<?php $this->renderPartial("//layouts/header");?> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZA2gDBikBGXs_MQ0reMm7Nsqaigbx9v4&sensor=false&language=vi"> </script>

<?php $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
$ch = Cauhinh::model()->find("id = 1 ");
$idmap = $ch->googlemap;
 ?>

<script>
function hienbandonhatnghe() {
    var opt = {
      center: new google.maps.LatLng(<?php echo $idmap ?>),
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.ROADMAP //ROADMAP/SATELLITE/HYBRID/TERRAIN
    };
    var bd1 = new google.maps.Map(document.getElementById("map_canvas"), opt);
    //tạo maker, infowindow
    var m1 = new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $idmap ?>),
        map: bd1,
	  title:'Mời nhắp vào'
});
var info = new google.maps.InfoWindow(
      { content: "Đây là <?php echo $ttc->Company ?>",
        size: new google.maps.Size()
});
google.maps.event.addListener(m1,'click',function(){info.open(bd1,m1)});

}
google.maps.event.addDomListener(window, 'load', hienbandonhatnghe);
</script>
 <section class="container w1000">
    <div class="w1000">
    <?php $this->renderPartial("//layouts/menuleft");?>
    <div class="right contact-page"> 
    	<?php if($note == 1){ ?>
		<div class="alert alert-success fade in w100" style="margin-top:18px;"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    <strong><?php echo $this->ngonngu[23] ?>!</strong> <?php echo $this->ngonngu[24] ?>.
</div>
<?php } ?>
    	 <div class="w100"> 
        <?php 
        $arrBread[0]["Name"] = $this->ngonngu[46];
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
      </div>
      <div class="head"><?php echo $this->ngonngu[46] ?></div>
      <div id="map_canvas" style="height:350px; width:100%;"> </div>
      <div class="w100 wrap-info-ct">
      <div class="w50">
      	<h4 class="heading"><img src="<?php echo $ttc->Logo ?>">	</h4>
      	<div class="excerpt">
				<p class="mails"><img src="/images/icmailxanh.png" style="width: 13px;"> <?php echo $ttc->Email ?></p>
				<p class="dia-chi"><img src="/images/icmap1.png" style="width: 13px;"><?php echo $ttc->Address ?></p>
				<p class="telephone"><img src="/images/icphone1.png" style="width: 13px;"> <?php echo $ttc->Tel ?></p>
				<p class="fax"><img src="/images/icfax.png" style="width: 13px;"> <?php echo $ttc->Fax ?></p>
			</div>
            </div>
		<div class="media-body text-left w50">
				<h4 class="heading"><?php echo $this->ngonngu[156] ?></h4>
				<div class="excerpt">
					<div role="form" class="wpcf7" id="wpcf7-f137-o1" lang="vi" dir="ltr">
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form">
<p> <?php echo $this->ngonngu[3] ?> *<br>
    <span class="wpcf7-form-control-wrap your-name">
    	<input  type="text" name="hoten" value="" size="40" class="form-control" required></span> </p>
<p> Email*<br>
    <span class="wpcf7-form-control-wrap your-email">
    	<input type="email" name="email" value="" size="40" class="form-control" required></span> </p>

<p> <?php echo $this->ngonngu[127] ?>*<br>
    <span class="wpcf7-form-control-wrap your-message">
    	<textarea name="noidung" cols="40" rows="3" class="form-control1" 	required></textarea></span> </p>
<p>
	<input type="submit" value="<?php echo $this->ngonngu[158] ?>" class="wpcf7-form-control wpcf7-submit">
</p>

</form></div>
      </div>
    </div>
    </div>
</section>
<style type="text/css">
    .contact-page .wrap-info-ct .heading img{width: 30%}
	.contact-page .wrap-info-ct{    margin-top: 5%;}
	.contact-page .wrap-info-ct .heading{    color: #ee4023; font-size: 110%;margin-bottom: 3%;
    line-height: 25px;}
    .contact-page .excerpt p img{margin-right: 5px}
    .contact-page .excerpt p{width: 100%;float: left;margin-bottom: 2%}
    .form-control1{
    	width: 100%;
    	padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    margin-top: 1%;
    }
    .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    margin-top: 1%;
}
.wpcf7-submit {
    width: 80px;
    border: 0px;
    color: white;
    height: 30px;
    background: #ee4023;
}
.alert-success {
    color: #dc4e40;
    background-color: #e3b9b5;
    border-color: #dc4e40;
}
.alert-success {
    background-image: -webkit-linear-gradient(top,#f5cac6 0,#ebd3d1 100%);
    background-image: -o-linear-gradient(top,#f5cac6 0,#ebd3d1 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#f5cac6),to(#c8e5bc));
       background-image: linear-gradient(to bottom,#f5cac6 0,#ebd3d1 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffc8e5bc', GradientType=0);
    background-repeat: repeat-x;
    border-color: #dc4e40;
}
.contact-page .head{
        font-size: 150%;
    width: 100%;
    float: left;
    margin-bottom: 3%;
    font-weight: bold;
}
.alert {
	padding: 1% 2%;

    text-shadow: 0 1px 0 rgba(255,255,255,.2);
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.25),0 1px 2px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.25),0 1px 2px rgba(0,0,0,.05);
}
.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5;
}
.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5;
}
</style>