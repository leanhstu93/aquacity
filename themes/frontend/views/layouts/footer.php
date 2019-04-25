 <?php
$gioithieu = Gioithieu::model()->find("id = 1");
 ?>
 <div id="column-bottom" class="h-column column clearfix ">
    <div class="column-wrapper">
      <div class="column-inner-wrapper">
        <div id="box-1" class="box box-1 products-box bestsellers-box ">
          <div class="box-title-wrapper">
            <h2 class="box-title"> Bán chạy nhất </h2>
          </div>
          <div class="box-content-wrapper">
            <div class="box-content ">
              <?php
              $criteria = new CDbCriteria();
              $criteria->limit = "3";
              $best_sale = Sanpham::model()->findAll($criteria);
              foreach ($best_sale as $key => $value) {
                # code...
              
               ?>
              <div class="product clearfix">
                <div class="product-wrapper clearfix">
                  <a href="<?php echo Yii::app()->request->baseUrl ?>sanpham/<?php echo $value->Alias ?>.html" class="product-image-link" title="<?php echo $value->Name ?>">
                    <img src="<?php echo $value->UrlImage ?>" alt="<?php echo $value->Name ?>" width="157" height="206"></a>
                    <h3 class="">
                      <a href="<?php echo Yii::app()->request->baseUrl ?>sanpham/<?php echo $value->Alias ?>.html"><?php echo $value->Name ?></a>
                    </h3><div class="product-prices box-has-prices-without-tax ">
                      <div class="product-price"><div class="price-withouttax"><span class="what-price">Giá cũ: </span><span class="price-value"><?php echo number_format($value->Gia*1.2)  ?></span></div><div class="price-withtax"><span class="what-price single-price">Giá mới: </span><span class="taxed-price-value"><?php echo number_format($value->Gia)  ?></span></div></div></div></div></div>
                      <?php } ?>

                     </div>
                   </div>
                 </div>
                 <div id="box-83" class="box box-83 articles-box ">
                  <div class="box-title-wrapper">
                    <h2 class="box-title">Tin tức</h2>
                    <?php $news = TintucLang::model()->find(); ?>
                  </div>
                  <div class="box-content-wrapper">
                    <div class="box-content ">
                      <div class="item">
                        <div class="article-box-image">
                          <a href="<?php echo Yii::app()->request->baseUrl ?>tin/<?php echo $news->Alias ?>.html">
                            <img src="<?php echo $news->HinhAnh ?>" style="    max-width: 41%;" width="400" height="203"></a>
                          </div>
                          <div class="article-box-details">
                            <h3>
                              <a href="<?php echo Yii::app()->request->baseUrl ?>tin/<?php echo $news->Alias ?>.html"><?php echo $news->TieuDe ?></a></h3><div class="date"><?php  echo
                              date("d/m/Y",$news->Date) ?>
                            </div>
                            <div class="article-short-excerpt">
</div></div></div></div>
<div class="view_all_articles">
  <a href="<?php echo Yii::app()->request->baseUrl ?>tin-tuc.html">xem hết</a></div></div></div>

  <div id="box-7" class="box box-7 news-box ">
    <div class="box-title-wrapper">
      <h2 class="box-title">Liên kết mạng xã hội</h2>
    </div>
      <div class="box-content-wrapper">
        <!-- lien ket mang xa hoi -->
        <ul class="list social ">
            <li class="item-content">
                            <a href="<?php echo $gioithieu->Facebook ?>" target="_blank">
                                        <div class="item-image">
                  <i class="fa fb pull-left"></i>
                </div>
                                                                </a>
                    </li>
            <li class="item-content">
                            <a href="<?php echo $gioithieu->Twitter ?>" target="_blank">
                                        <div class="item-image">
                    <i class="fa tw pull-left"></i>
                </div>
                                                                </a>
                    </li>
            <li class="item-content">
                                        <div class="item-image">

                    <i class="fa googleplus pull-left"></i>
                </div>
                                                        </li>
          
            <li class="item-content">
                            <a href="<?php echo $gioithieu->Youtube ?>" target="_blank">
                                        <div class="item-image">
                    <i class="fa youtube pull-left"></i>
                </div>
                                                                </a>
                    </li>
    </ul>
        <!-- end lien ket mang xa hoi -->

        </div></div>
        <div id="box-91" class="box newsletter-box box-91 ">
          <div class="box-title-wrapper">
            <h2 class="box-title"><font style="color:black;">Nhận tin mới</font></h2></div><form id="newsletter_form_91" action="" method="post" class="box-content"><div><font style="color:black;"><input type="hidden" name="ModuleName" value="com.summercart.newsletter"><input type="hidden" name="action" value="subscribe"><input type="hidden" name="NewsletterID" value="4"><input type="hidden" name="CMSBoxID" value="91"><p>Nhập email để nhận tin khuyến mãi mới nhất:</p><input type="text" name="SubscriberEmail" value="" class="input-text"><div class="right"><span class="button simple-button"><input type="submit" value="Gửi" class="button_blue"><span class="button-addon"></span></span></div></font></div></form><script type="text/javascript">$(function(){ $('#newsletter_form_91').submit(function(){ var emailJqObj = $('[name="SubscriberEmail"]', this); var email = emailJqObj.val(); var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/; if (!filter.test(email)) { alert ('Please provide a valid email address.'); emailJqObj.focus(); return false; } }); }); </script></div></div></div></div>