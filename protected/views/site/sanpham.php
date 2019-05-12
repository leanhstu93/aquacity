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
                            <a target="_blank" href="<?php echo $hinhanh->hinhanh->link ?>">
                                <img src="<?php echo $hinhanh->hinhanh->url_image ?>">
                            </a>
                        </div>
                    </div>
                </section>
                <section class="detailct">
                    <article class="sv_other svo2">
                        <p class="hd-large">CÁC TIN NỔI BẬT</p>
                        <ul>
                            <?php
                                $criteria = new CDbCriteria();
                                $criteria->with = "sanpham_lang";
                                $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
                                $criteria->order = "t.id desc";
                                $criteria->limit = 5;
                                $data = Sanpham::model()->findAll($criteria);
                                if (!empty($data)) {
                                    foreach ($data as $item) {
                                        $router = Router::model()->find("idObject = ". $item->sanpham_lang->id ." AND type = ".Router::TYPE_PRODUCT);
                                        ?>
                                        <li>
                                            <a href="<?php echo $router->alias ?>">
                                                <img style="max-width:80px;"
                                                     src="<?php echo $item->UrlImage  ?>"
                                                     alt="<?php echo $item->sanpham_lang->Name ?>">
                                            </a>
                                            <a href="<?php echo $router->alias ?>"
                                               title="<?php echo $item->sanpham_lang->Name ?>">
                                                <?php echo $item->sanpham_lang->Name ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>
                    </article>
                </section>

            </div>
        </div>
    <?php $this->renderPartial('sidebar'); ?>
    </div>
</main>

<div class='ht-lq w100'>
    <div class='hd-container'>
        <div class='title'>CÁC TIN LIÊN QUAN</div>
        <div class='hd-row'>
            <?php
            $data = Loaitin::getDataByCustomSetting('list_lien_quan');
            $routerCateNews = Router::model()->find("idObject = ". $data->category->loaitin_lang->id ." AND type = ".Router::TYPE_NEWS_CATEGORY);
            if(!empty($data->post)){
                $i = 0;
                foreach ($data->post as $item){
                    $j = $i + 1;
                    ?>
                    <?php
                    if($i == 0 || $i == 5 || $i == 10){
                        ?>
                        <div class="hd-col m3 ">
                        <figure>
                        <a title="<?php echo $item->tintuc_lang->Name ?>"
                           href="<?php echo $router->alias ?>">
                            <img src="<?php echo $item->UrlImage ?>"
                                 alt="<?php echo $item->tintuc_lang->Name ?>"
                                 title="<?php echo $item->tintuc_lang->Name ?>">
                        </a>
                        <figcaption>
                        <ul>
                        <?php $i++; continue; } ?>
                    <li>
                        <a title="<?php echo $item->tintuc_lang->Name ?>"
                           href="<?php echo $router->alias ?>">
                            <?php echo $item->tintuc_lang->Name ?>
                        </a>
                    </li>
                    <?php if($j % 5 == 0 || $j == count($data->post) ) { ?>
                        </ul>
                        </figcaption>

                        </figure>
                        </div>
                        <?php
                    }
                    $i++;
                }
            }
            ?>
        </div>
    </div>
</div>