
  <div class="owl-carousel" id="owl-example">
  	 <?php
          $criteria = new CDbCriteria(); 
          $criteria->with = "tintuc_lang";
          $criteria->condition = "idNgonNgu = 1 and Active = 1 and SetHome = 1";
          $criteria->limit = 8;
          $criteria->order = "t.id desc";
          $data = Tintuc::model()->findAll($criteria);
          if($data != false){
          foreach ($data as $key => $value) { 
            ?>
		<div class="owl-slide">
      <a href="/tin-tuc/<?php echo $value->tintuc_lang->Alias ?>.html">
        <div class="left">
  			   <img src="<?php echo $value->UrlImage ?>">
        </div>
        <div class="right">
          <label class="w100"><?php echo $value->tintuc_lang->Name ?></label>
          <p class="w100">
            <?php 
                  if($value->tintuc_lang->Description != "" )
                      $mota = $value->tintuc_lang->Description;
                    else
                      $mota = $value->tintuc_lang->Content;
                   echo Common::getDescription($mota,150);  
              ?> 
          </p>
        </div>
        </a>
		</div>
	<?php	} 
}
  ?>
</div>


		<script>
			$(document).ready(function(){
			  $("#owl-example").owlCarousel({
          nav:true,
          
          loop: true,
          margin: 30,
          nav : true,
          dots : true,
          autoplay: true,
           navText: ["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],

          responsive : {
             0 : {items: 1 },
            415 : {items: 2 },
          }
         
        });
			});
		</script>
<style type="text/css">
#owl-example .owl-item  {-webkit-box-shadow: 3px 0px 6px 1px rgba(0,0,0,0.33);
-moz-box-shadow: 3px 0px 6px 1px rgba(0,0,0,0.33);
box-shadow: 3px 0px 6px 1px rgba(0,0,0,0.33);}
#owl-example .owl-dots{width: 100%;float: left;text-align: center;margin-top: 2%}
  #owl-example .owl-dots .owl-dot{width: 12px;height: 12px;border-radius: 50%;margin-right: 10px;display: inline-block;background: #cfcfcf;}
  #owl-example .owl-dots .owl-dot.active{background: #34090c}
  #owl-example .left{width: 40%;float: left}
  #owl-example .right{width: 60%;float: left;padding: 7px 15px}
  #owl-example .right p{text-align: justify;line-height: 24px;color: #726C74}
  #owl-example .right label{margin-bottom: 15px;font-size: 110%}
   .owl-theme .owl-nav .owl-prev{position: absolute;
      top: 0px;
      text-align: center;
      bottom: 0px;
      left: -50px;
      margin:auto;
      display: inline-table;
      background: transparent !important;
      border: 1px solid white;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      border:1px solid black;
      -webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -ms-transition: all .2s ease;
    -o-transition: all .2s ease;
   }
   .owl-theme .owl-nav i{
    position: absolute;
    top: 0px;
    bottom: 0px;
    margin: auto;
    display: inline-table;
    left: 0px;
    right: 0px;
    text-align: center;
    width: 100%;
   }
   .owl-theme .owl-nav .owl-prev:hover{background: white !important; color: black}
   .owl-theme .owl-nav .owl-next:hover{background: white !important; color: black}
    .owl-theme .owl-nav .owl-next{position: absolute;
      top: 0px;
      text-align: center;
      bottom: 0px;
      right: -50px;
      margin:auto;
      display: inline-table;
      background: transparent !important;
      border: 1px solid black;
      border-radius: 50%;
       width: 30px;
      height: 30px;
      -webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -ms-transition: all .2s ease;
    -o-transition: all .2s ease;
   }
   @media screen and (max-width: 650px){
    #owl-example .left,#owl-example .right{width: 100%;}
    #owl-example .right{    padding: 7px 0px;}
   }
</style>