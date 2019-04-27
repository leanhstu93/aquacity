<section class="container w100 wrap-lsp">
    <div class="w1000">
       <?php $this->renderPartial("//layouts/menuleft");?> 
      <div class="right page-cate">
      <!-- breadbrum -->
      <div class="w100"> 
        <?php 
       $arrBread[0]["Name"] = $keyword ;
        $arrBread[1]["Name"] ="Tìm kiếm";
        $arrBread[1]["Href"] ="#";
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
        <div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
      </div>
        <!-- end breadbrum -->
         <div class="head w100">Kết quả tìm kiếm: <?php echo $keyword ?></div>
         <div class="clear"></div>
        <ul class="list-pro">
        <?php
        $i=0;
        foreach ($data as $key => $value) {
          # code...
          $i++;
         ?>
          <li class="<?php echo ($i%4 == 0)? "last":"" ?>" >
            <a href="/sp/<?php echo $value->sanpham_lang->Alias ?>.html">
              <div class="wrap-img-cate">
                <img src="<?php echo $value->UrlImage ?>">
              </div>
              <div class="wrap-des-cate">
                <h3 ><?php echo $value->sanpham_lang->Name ?></h3>
                  <div class="grp-price w100">
              <div class="pleft">
                Giá cũ: <br><span><?php echo number_format($value->Gia) ?>VNĐ</span>
              </div>
              <div class="pright">
                Giá mới: <br><span><?php echo number_format($value->Gia) ?>VNĐ</span>
              </div>
            </div>
              </div>

            </a>
          </li>
          <?php } ?>
        </ul>
        <div class="clear"></div>
          <?php $this->renderPartial("//layouts/pagination",array("pages"=>$pages));?> 
            </div>  
      </div>
    </div>
</section>