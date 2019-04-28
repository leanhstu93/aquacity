<div class="page-video w100">
      <?php 
       $arrBread[0]["Name"] = 'Video';
     
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
        <!-- end breadbrum -->
    <div class="left">
        <section class="news-cate">
            <div class="news-cate-left">
                <ul>
                    <?php

                    $i = 0;
                        for ($j = 0; $j < count($data);$j++) {
                             if(!isset($data[$j])) break;
                            $i++;
                    ?>
                    <li class="<?php echo $i % 3 ==  0 ? "last" : ""; ?>" >
                        <a href="/video/<?php echo  $data[$j]->Alias ?>.html">
                           
                            <div class="wrp-img">
                                <img src="<?php echo  $data[$j]->UrlImage ?>">
                                <div class="play-ft">
                                  <i class="fa fa-play" aria-hidden="true"></i>
                              </div>
                            </div>
                            <label class="w100">
                               <?php echo $data[$j]->Name ?>
                            </label>
                            
                        </a>
                    </li>
                    <?php 
                  
                    } ?>
                    
                </ul>
            </div>
        </section>
         <?php $this->renderPartial("//layouts/pagination",array("pages"=>$pages));?> 
    </div>
    <?php $this->renderPartial("//layouts/right"); ?>
</div>