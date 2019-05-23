<main>
    <div class="hd-container">
        <div class="mainpage">
            <?php
            $arrBread[0]["Name"] = $model->Name;
            $criteria = new CDbCriteria();
            $criteria->with = "loaitin_lang";
            $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
            $criteria->order = "t.id desc";
            $criteria->addInCondition("idLoaiTin",$this->arridloai);
            $arrloai = Loaitin::model()->findAll($criteria);
            $j = 0;
            for ($i= (count($arrloai)-1); $i >= 0; $i--) {
                $j++;
                $arrBread[$j]["Name"] = $arrloai[$i]->loaitin_lang->Name;
                $routerCateNews = Router::model()->find("idObject = " . $arrloai[$i]->loaitin_lang->id . " AND type = " . Router::TYPE_NEWS_CATEGORY);
                $arrBread[$j]["Href"] = $routerCateNews->alias;
            }
            $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));
            $hinhanh = Hinhanh::getDataByCustomSetting('home_banner_trang_con');
            ?>
            <div class="detail">

                <div class="bannertop"><div id='polyad_ads_zone3' style="text-align: center">
                        <a target="_blank" href="<?php echo $hinhanh->hinhanh->link ?>">
                            <img src="<?php echo $hinhanh->hinhanh->url_image ?>">
                        </a>
                    </div>
                </div>
                <h1 class="title"><?php echo $model->Name ?>    </h1>
                <section class="detailct">
                    <div class="sapo">
                        <p style="text-align: justify;">
                            <?php echo $model->Description ?>
                        </p>
                    </div>
                    <?php echo $model->Content ?>
                    <!-- kk-star-ratings -->
                    <br clear="both" />
                    <!-- comment -->
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