<div class="page-cate w100">
     <?php 
           $arrBread[0]["Name"] = "Tag: ".$tag->Name;
            $criteria = new CDbCriteria();
            $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
             $criteria->addInCondition("idLoaiTin",$this->arridloai);
            $criteria->order = "t.id desc";
            $criteria->with = "loaitin_lang";
             $arrloai = Loaitin::model()->findAll($criteria);
            $j = 0;
             for ($i= (count($arrloai)-1); $i >= 0; $i--) { 
                $j++;
             $arrBread[$j]["Href"] = "/loai-tin/".$arrloai[$i]->loaitin_lang->Alias.".html";
              $arrBread[$j]["Name"] = $arrloai[$i]->loaitin_lang->Name;
            
            }
            $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
            <!-- end breadbrum -->
    <div class="left">
        <section class="news-large w100">
            <?php if($data != false){ ?>
            <div class=" wrp-news-top w100">
                <div class="l-left">
                    <a href="/tin-tuc/<?php echo $data[0]->tintuc_lang->Alias ?>.html">
                        <div class="wrp-img">
                            <img src="<?php echo $data[0]->UrlImage ?>
                            " class="w100">
                        </div>
                        <div class="wrp-des">
                            <label class="w100"> <?php echo $data[0]->tintuc_lang->Name ?> </label>
                            <p class="w100">
                                <?php 
                              //  print_r($model);die();
                                    if($data[0]->tintuc_lang->Description != "" )
                                        $mota = $data[0]->tintuc_lang->Description;
                                      else
                                        $mota = $data[0]->tintuc_lang->Content;
                                     echo Common::getDescription($mota,250);  
                                ?> 
                            </p>
                        </div>
                    </a>
                </div>
                <div class="l-right">
                    <ul>
                        <?php for($i = 1; $i < 7; $i++) {
                            if(!isset($data[$i])) break;
                        ?>
                        <li>
                            <a href="/tin-tuc/<?php echo $data[$i]->tintuc_lang->Alias ?>.html">
                                <?php echo $data[$i]->tintuc_lang->Name ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="wrp-news-top-thumb w100">
                <ul>
                    <?php for($i = 7; $i < 11; $i++) { 
                       if(!isset($data[$i])) break;
                        ?>
                    <li>
                        <a href="/tin-tuc/<?php echo $data[$i]->tintuc_lang->Alias ?>.html">
                            <div class="wrp-img">
                                <img src="<?php echo $data[$i]->UrlImage ?>" class="w100">
                            </div>
                            <label class="w100">
                                <?php echo $data[$i]->tintuc_lang->Name ?>
                            </label>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
        <section class="news-cate">
            <div class="news-cate-left">
                <ul>
                    <?php
                    $i = 0;
                        for ($j = 11; $j < count($data);$j++) {
                             if(!isset($data[$j])) break;
                            $i++;
                    ?>
                    <li class="<?php echo $i % 2 ==  0 ? "last" : ""; ?>" >
                        <a href="/tin-tuc/<?php echo  $data[$j]->tintuc_lang->Alias ?>.html">
                           
                            <div class="wrp-img">
                                <img src="<?php echo  $data[$j]->UrlImage ?>">
                            </div>
                            <label class="w100">
                               <?php echo $data[$j]->tintuc_lang->Name ?>
                            </label>
                            <p class="w100">
                                <?php 
                                if( $data[$j]->tintuc_lang->Description != "" )
                                    $mota =  $data[$j]->tintuc_lang->Description;
                                  else
                                    $mota =  $data[$j]->tintuc_lang->Content;
                                 echo Common::getDescription($mota,100);  
                            ?> 
                            </p>
                        </a>
                    </li>
                    <?php } ?>
                    
                </ul>
            </div>
        </section>
        <?php } ?>
        <!-- iteam -->
      <?php $this->renderPartial("//layouts/pagination",array("pages"=>$pages));?> 
    </div>
   <?php $this->renderPartial("//layouts/right"); ?>
</div>