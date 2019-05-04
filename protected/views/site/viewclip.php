<div class="page-viewclip w100">
      <?php 
           $arrBread[0]["Name"] = $model->Name;
           $arrBread[1]["Href"] = "/video.html";
            $arrBread[1]["Name"] = "video";
            $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
            <!-- end breadbrum -->
     <div class="left">
        <div class="wrp-view-clip w100">
            <div class="wrp-iframe w100">
                <?php echo $model->Link ?>
            </div>
            <label class="w100"> <?php echo $model->Name ?></label>
            <div class="w100 des">
                 <?php echo $model->Description ?>
            </div>
        </div>
         <div class="wrp-comment w100">
              <?php $this->renderPartial("//layouts/comment"); ?>
            </div>
        <div class="tt-tlq w100">
            Bạn muốn xem
        </div>
        <div class="rela-video w100">
            <ul>
                <?php 
                $i=0;
                foreach ($rela as $key => $value) {
                    # code...
                    $i++;
                ?>

                <li class="<?php echo $i % 4 ==  0 ? "last" : ""; ?>">
                    <a href="/video/<?php echo $value->Alias ?>.html">
                        <div class="wrp-img">
                            <img src="<?php echo $value->UrlImage ?>" class="w100">
                            <div class="play-ft">
                                  <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </div>
                        <label class="w100">
                            <?php echo $value->Name ?>
                        </label>
                    </a>
                </li>
                 
                <?php } ?>
            </ul>
        </div>
     </div>
      <?php $this->renderPartial("//layouts/right"); ?>
</div>