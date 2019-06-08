<?php
$data = Hinhanh::getDataByCustomSetting('home_kinh_nghiem');
?>
<div class='page3 w100'>
    <div class='hd-container '>
        <div class="hd-row">
            <div class="hd-col m12">
                <div class="pagett"><h2 class="cnkh">
                        <a href="javascript:;">
                            <?php echo html_entity_decode($data->category->name) ?>
                        </a>
                    </h2>
                </div>
                <div class="line1"></div>
                <div class="hd-row cckh">
                    <div class="hd-col m2">
                        <?php
                        if(isset($data->hinhanh[0])){
                            $name = $data->hinhanh[0]->name;
                            $link = $data->hinhanh[0]->link;
                            $url_image = $data->hinhanh[0]->url_image;
                            ?>
                        <div class="img">
                            <a title="<?php echo html_entity_decode($name) ?>" href="<?php echo $link ?>">
                                <img  src='<?php echo $url_image ?>' alt="<?php echo html_entity_decode($name) ?>">
                                <div class="faded">
                                    <p class="tt"><?php echo html_entity_decode($name) ?></p>
                                    <p class="ct">

                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                        <?php
                        if(isset($data->hinhanh[1])){
                            $name = html_entity_decode($data->hinhanh[1]->name);
                            $link = $data->hinhanh[1]->link;
                            $url_image = $data->hinhanh[1]->url_image;
                            ?>
                            <div class="img">
                                <a title="<?php echo $name ?>" href="<?php echo $link ?>">
                                    <img  src='<?php echo $url_image ?>' alt="<?php echo $name ?>">
                                    <div class="faded">
                                        <p class="tt"><?php echo $name ?></p>
                                        <p class="ct">

                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="hd-col m4">
                        <?php
                        if(isset($data->hinhanh[2])){
                            $name = html_entity_decode($data->hinhanh[2]->name);
                            $link = $data->hinhanh[2]->link;
                            $url_image = $data->hinhanh[2]->url_image;
                            ?>
                            <div class="img">
                                <a title="<?php echo $name ?>" href="<?php echo $link ?>">
                                    <img  src='<?php echo $url_image ?>' alt="<?php echo $name ?>">
                                    <div class="faded">
                                        <p class="tt"><?php echo $name ?></p>
                                        <p class="ct">

                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="hd-col m4">
                        <?php
                        if(isset($data->hinhanh[3])){
                            $name = html_entity_decode($data->hinhanh[3]->name);
                            $link = $data->hinhanh[3]->link;
                            $url_image = $data->hinhanh[3]->url_image;
                            ?>
                            <div class="img">
                                <a title="<?php echo $name ?>" href="<?php echo $link ?>">
                                    <img  src='<?php echo $url_image ?>' alt="<?php echo $name ?>">
                                    <div class="faded">
                                        <p class="tt"><?php echo $name ?></p>
                                        <p class="ct">

                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="hd-col m2">
                        <?php
                        if(isset($data->hinhanh[4])){
                            $name = html_entity_decode($data->hinhanh[4]->name);
                            $link = $data->hinhanh[4]->link;
                            $url_image = $data->hinhanh[4]->url_image;
                            ?>
                            <div class="img">
                                <a title="<?php echo $name ?>" href="<?php echo $link ?>">
                                    <img  src='<?php echo $url_image ?>' alt="<?php echo $name ?>">
                                    <div class="faded">
                                        <p class="tt"><?php echo $name ?></p>
                                        <p class="ct">

                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <?php
                        if(isset($data->hinhanh[5])){
                            $name = html_entity_decode($data->hinhanh[5]->name);
                            $link = $data->hinhanh[5]->link;
                            $url_image = $data->hinhanh[5]->url_image;
                            ?>
                            <div class="img">
                                <a title="<?php echo $name ?>" href="<?php echo $link ?>">
                                    <img  src='<?php echo $url_image ?>' alt="<?php echo $name ?>">
                                    <div class="faded">
                                        <p class="tt"><?php echo $name ?></p>
                                        <p class="ct">

                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $posts = Loaitin::getDataByCustomSetting('home_kien_thuc');

        $hinhanh = Hinhanh::getDataByCustomSetting('home_kien_thuc');
        ?>
        <div class='hd-row'>
            <div class="pagett"><h2 class="cnkh">
                    <a href="javascript:;">
                        <?php echo html_entity_decode($hinhanh->category->name) ?>
                    </a>
                </h2>
            </div>

            <?php if(!empty($hinhanh)){ ?>
            <div class='hd-col m6'>
                <figure>
                    <div class="flexslider page3-slide">
                        <div class="flex-viewport">
                            <ul class="slides Ta__js-slider-kienthuc slide">
                                <?php
                                foreach ($hinhanh->hinhanh as $item){
                                ?>
                                <li>
                                    <a href="<?php echo $item->link ?>">
                                        <img title="<?php echo html_entity_decode($item->name) ?>"
                                             src='<?php echo $item->url_image ?>'
                                             alt="<?php echo html_entity_decode($item->name) ?>">
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <p><?php echo html_entity_decode($hinhanh->category->description) ?></p>
                    <div class="btn-lk">
                        <a class="hd-btn" href="<?php echo $hinhanh->category->link ?>"  rel="nofollow">Xem thêm >></a>
                    </div>
                </figure>
            </div>
            <?php } ?>
            <?php if(!empty($posts) && !empty($posts->post)){ ?>
            <div class='hd-col m6'>
                <?php
                foreach ($posts->post as $item){
                ?>
                <article>
                    <a class="pic"
                       title="<?php echo html_entity_decode($item->tintuc_lang->Name) ?>"
                       href="<?php echo Common::buildUrl($item->tintuc_lang->id,Router::TYPE_NEWS) ?>">
                        <img src="<?php echo $item->UrlImage ?>" alt="<?php echo html_entity_decode($item->tintuc_lang->Name) ?>">
                    </a>
                    <a title="<?php echo html_entity_decode($item->tintuc_lang->Name) ?>"
                       href="<?php echo Common::buildUrl($item->tintuc_lang->id,Router::TYPE_NEWS) ?>">
                        <strong><?php echo html_entity_decode($item->tintuc_lang->Name) ?></strong>
                    </a>
                </article>
                <?php } ?>
                <div class='btn-lk'>
                    <a rel="nofollow" class='hd-btn'
                       href='<?php echo Common::buildUrl($posts->category->loaitin_lang->id,Router::TYPE_NEWS_CATEGORY) ?>'>Xem thêm >></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>