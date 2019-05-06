<main>
    <div class="hd-container">
        <div class="mainpage">
        <?php
        $arrBread[0]["Name"] = $model->Name;
        $criteria = new CDbCriteria();
        $criteria->with = "loaisanpham_lang";
        $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
        $criteria->order = "t.id desc";
        $criteria->addInCondition("idLoai",$this->arridloai);
        $arrloai = Loaisanpham::model()->findAll($criteria);
        $j = 0;
        for ($i= (count($arrloai)-1); $i >= 0; $i--) {
            $j++;
            $arrBread[$j]["Name"] = $arrloai[$i]->loaisanpham_lang->Name;
            $routerCateNews = Router::model()->find("idObject = " . $arrloai[$i]->loaisanpham_lang->id . " AND type = " . Router::TYPE_NEWS_PRODUCT);
            $arrBread[$j]["Href"] = $routerCateNews->alias;
        }
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));
        $hinhanh = Hinhanh::getDataByCustomSetting('home_banner_trang_con');
        ?>
            <div class="detail">
                <div class="bannertop">
                    <div id="polyad_ads_zone3" style="text-align: center">
                        <a target="_blank" href="<?php echo $hinhanh->hinhanh->link ?>">
                            <img src="<?php echo $hinhanh->hinhanh->url_image ?>">
                        </a>
                    </div>
                </div>
                <h1 class="title"><?php echo $model->Name ?>   </h1>
                <section class="detailct">
                    <div class="cmName">
                        <div class="wrp-share-gg">
                            <div class="g-plus" data-action="share" data-height="22"></div>
                        </div>
                    </div>
                    <div class="wrp-share">
                        <div class="fb-like" data-href="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                    <div class="sapo">
                        <?php echo $model->MoTa ?>
                    </div>
                    <?php echo $model->Content ?>
                    <div class="wrp-comment w100">
                        <?php $this->renderPartial("//layouts/comment"); ?>
                    </div>
                    <div class="banner">
                        <div id="polyad_ads_zone4">
                            <a target="_blank" href="https://benhvienthammykangnam.vn/tham-my-mui/khuyen-mai-mui/">
                                <img src="https://nangmuidep.vn/wp-content/uploads/2019/05/02/728x90.jpg">
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>