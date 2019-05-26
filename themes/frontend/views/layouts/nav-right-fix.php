<div class="tuts">
    <ul>
        <?php
        $data = SinglePage::getDataByCustomSetting('one_nav_right_chi_phi');
        if(!empty($data)) {
        ?>
        <li class="n1" onclick='toggle_visibility("t1");'>
            <a href="<?php echo Common::buildUrl($data->id, Router::TYPE_SINGLE_PAGE) ?>">
                <span><i class="fa fa-opencart"></i><?php echo $data->name ?></span>
            </a>

            <div class="t1" id="t1">
                <div class="t1b">
                    <div class="giadv">
                        <?php echo $data->content ?>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>
        <?php
        $data = SinglePage::getDataByCustomSetting('list_nav_right_two');
        if(!empty($data)) {
        ?>
        <li class="n2" onclick='toggle_visibility("t2");'>
            <span><i class="fa fa-image"></i>Hình ảnh</span>
            <div class="t2" id="t2">
                <div class="t2b">
                    <?php foreach ($data as $item) { ?>
                        <a class="w100" href="<?php echo Common::buildUrl($item->id, Router::TYPE_SINGLE_PAGE) ?>">
                            <img width="70px" src="<?php echo $item->urlImage ?>">
                            <?php echo $item->name ?>
                        </a>
                    <?php } ?>

                </div>
            </div>
        </li>
        <?php } ?>
        <?php
            $videoSetting = videoSetting::model()->find('id=1');
        ?>
        <li class="n3" onclick='toggle_visibility("t3");'>
            <span><i class="fa fa-video-camera"></i> Video</span>
            <div class="t3" id="t3">
                <div class="t3b">
                    <a rel="nofollow" href="/video.html" class="fancybox-media">
                        <img src="<?php echo $videoSetting->urlImage ?>"
                             alt="<?php echo $videoSetting->name ?>">\
                    </a>

                    <div class="btn-lk">
                        <a class="hd-btn" href="/video.html">Video khác</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="n4" onclick='toggle_visibility("t4");'>
            <span><i class="fa fa-map-marker"></i>Bản đồ</span>
            <div class="t4" id="t4">
                <div class="t4b">
                    <p class="map_tt">522 Nguyễn Chí Thanh Phường 7 Quận 10 Hồ Chí Minh</p>
                    <div class="map_ct">
                        <a target="_blank" rel="nofollow"
                           href="https://www.google.com/maps?ll=10.781776,106.684865&z=15&t=m&hl=vi-VN&gl=US&mapclient=embed&cid=13066055420611463133">
                            <img src="/images/map.png">
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <?php
        $posts = Loaitin::getDataByCustomSetting('list_nav_right_five');
        if(!empty($posts)) {
        ?>
        <li class="n5" onclick='toggle_visibility("t5");'>
            <span><i class="fa fa-users"></i>Kinh nghiệm</span>
            <div class="t5" id="t5">
                <div class="t2b">
                <?php
                foreach ($posts->post as $item){
                ?>
                <a href="<?php echo Common::buildUrl($item->tintuc_lang->id,Router::TYPE_NEWS) ?>">
                    <?php echo $item->tintuc_lang->Name ?>
                </a>
                    <?php } ?>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>