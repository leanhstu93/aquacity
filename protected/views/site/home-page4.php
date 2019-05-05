<?php $data = Loaitin::getDataByCustomSetting('home_kien_thuc'); ?>
<?php $hinhanh = Hinhanh::getDataByCustomSetting('home_bg_cau_hoi'); ?>
<?php $routerCateNews = Router::model()->find("idObject = ". $data->category->loaitin_lang->id ." AND type = ".Router::TYPE_NEWS_CATEGORY); ?>
<div class='page4 w100' style="    background: url(<?php echo $hinhanh->hinhanh->url_image ?>) center 0 no-repeat;    background-size: cover;">
    <div class='hd-container'>
        <figure>
            <div class='pagett'>
                <h5><?php echo $data->category->loaitin_lang->Name  ?></h5>
                <div class='btn-lk2'>
                    <a class='hd-btn' href='<?php echo $routerCateNews->alias ?>' rel='nofollow'>Xem thêm</a>
                </div>
            </div>
            <ul>
                <?php
                foreach ($data->post as $item) {
                    $router = Router::model()->find("idObject = ". $item->tintuc_lang->id ." AND type = ".Router::TYPE_NEWS);
                    ?>
                    <li>
                        <a title='<?php echo $item->tintuc_lang->Name ?>'
                           href='<?php echo $router->alias ?>'>
                            <b><?php echo $item->tintuc_lang->Name ?></b><i><?php echo $item->mo_rong ?></i> </a>
                        <a href='<?php echo $router->alias ?>' class='button' rel='nofollow'>Trả
                            lời</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </figure>
    </div>
</div>
