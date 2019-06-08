<main>
    <div class="hd-container">


      <div class="w100 pages-abouts " style="width: 100%">

      <div class="w100"> 

        <?php 

        $arrBread[0]["Name"] = $model->gioithieu_lang->Name;

       $arrBread[1]["Name"] =  $this->ngonngu[39] ;

       $arrBread[1]["Href"] = "#";

        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 

      </div>

      <div class="line w100">

        <img src="/images/line.jpg" class="w100">

      </div>

      <h3 class="tieude-news  w100"><?php echo html_entity_decode($model->gioithieu_lang->Name) ?></h3>

     

      <div class="des-newsdetail mtbv  w100"><?php echo html_entity_decode($model->gioithieu_lang->Description) ?></div>

      <div class="ct-newsdetail ndbv w100">

      <?php echo html_entity_decode($model->gioithieu_lang->Content) ?>

      </div>

      </div>

</div>
</main>
