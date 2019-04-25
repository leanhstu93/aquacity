 <?php $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang "); ?>
 <section class="wrap-slide w100 wrp-header">
      <div class="rel w100">
      <section class="headerPart-top">
            <ul>
            <li>
                <a href="/cart.html"><?php echo $this->ngonngu[35] ?>(<span class="items_total"><?php echo Yii::app()->shoppingCart->getCount(); ?></span>)</a>
              </li>
              <li>
                <select class="sl-lang">
                  <option value="1" > <?php echo $this->ngonngu[61] ?></option>
                  <option value="2" <?php echo $this->lang == 2 ? "selected" : "" ?>>  English</option>
                </select>
              </li>
              <li>
                <img src="/images/ictime.png" /><?php echo $this->ngonngu[38] ?> 11h - 22h
              </li>
              <li>
                <img src="/images/icphone.png" /><?php echo $ttc->Tel ?>
              </li>
              <li>
                <img src="/images/icmap.png" /><?php echo $ttc->Address ?>
              </li>
            </ul>
      </section>
       <section class="menu w100">
          <div class="wrap-menu w100">
             <div class="w1000">
             <div class="wrp-logo">
                <a href="/">
                  <img class="w100" src="<?php echo $ttc->Logo ?>">
                </a>
             </div>
            <?php $this->renderPartial("//layouts/menu",array('ttc'=>$ttc));?> 
          </div>
        </div>
      </section>
      </div>
  </section>
  <script>
    $(function(){
      $(window).scroll(function(){
        if($(this).scrollTop()>250){
          $(".wrp-header").addClass("fix-scroll");
        }
        else{
          $(".wrp-header").removeClass("fix-scroll");
        }
      });
    }); 
  </script>
  <style type="text/css">
    .wrp-header.fix-scroll{position: fixed !important; max-width: 1350px; left: 0px; right: 0px; top:   0px; margin:auto;z-index: 99;transition: all 1s ease-in-out;}
    .wrp-header.fix-scroll section.headerPart-top{display: none;}
    .wrp-header.fix-scroll  section.menu .wrp-logo{width: 4%;    display: inline-table;top: 3%}
    .wrp-header.fix-scroll .wrap-menu{padding-bottom: 0}
    .wrp-header.fix-scroll  #cssmenu{margin-top: 0}
    #cssmenu ul ul li a{    background: #e52d27;    color: white;}
    #cssmenu li:hover > ul{border: 1px solid rgb(229, 45, 39);}
  </style>