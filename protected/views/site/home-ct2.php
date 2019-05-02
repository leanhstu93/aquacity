<div class="ct2">
    <div class="hd-row w100">
        <div class="hd-col m3">
            <?php
            $videoSetting = videoSetting::model()->find('id=1');
            ?>
            <a href="/video.html">
                <img load="step1" src="<?php echo $videoSetting->urlImage ?>" alt="<?php echo $videoSetting->name ?>">

                <div class="faded">
                    <p class="tt"><?php echo $videoSetting->name ?></p>

                </div>
            </a>
        </div>
        <?php
        $criteria = new CDbCriteria();
        $criteria->with = "tintuc_lang";
        $criteria->condition = "Active = 1 and SetHome = 1";
        $criteria->order = "t.id desc";
        $criteria->limit = 2;
        $tintuc = Tintuc::model()->findAll($criteria);
        if($tintuc != false){
            foreach ($tintuc as $value) {
                $router = Router::model()->find("idObject = " . $value->tintuc_lang->id . " AND type = " . Router::TYPE_NEWS);
                ?>
                <div class="hd-col m3">
                    <a href="<?php echo Common::buildUrl($router->alias) ?>">
                        <img load="step1" src="<?php echo $value->UrlImage ?>"
                             alt="<?php echo $value->tintuc_lang->Name ?>">
                        <div class="faded">
                            <p class="tt"><?php echo $value->tintuc_lang->Name ?></p>
                        </div>
                    </a>
                </div>
    <?php
            }
        }
    ?>

        <?php
            $single_page = SinglePage::model()->find('active = 1 AND set_home = 1');
            if($single_page != false) {
                $router = Router::model()->find("idObject = ". $single_page->id ." AND type = ".Router::TYPE_SINGLE_PAGE);
        ?>
            <div class="hd-col m3">
                <a href="<?php echo Common::buildUrl($router->alias) ?>">
                    <img load="step1" src="<?php echo $single_page->urlImage ?>" alt="<?php echo $single_page->name ?>">
                    <div class="faded">
                        <p class="tt"><?php echo $single_page->name ?> </p>
                    </div>
                </a>
        <?php } ?>
    </div>
    <div class="btn-lk w100">
        <a class="hd-btn" href="<?php echo Common::buildUrl($router_sp_home->alias) ?>">Xem thêm &gt;&gt;</a>
    </div>
    <div class="ct3 w100">
        <div class="content slideanim">
            <div id="London" class="city city2">
                <div class="text">
                    <div class="tt">
                        Giáo sư <b> KANG KYOUNG-JIN</b>
                    </div>
                    <div class="ct">
                        Chủ tịch Hiệp hội Thẩm mỹ Hàn Quốc, giám đốc khoa Phẫu thuật thẩm mỹ Bệnh viện Baptish Memorial Wallace
                    </div>
                    <div class="img">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/uploads/kang.png" src="https://nangmuidep.vn/wp-content/uploads/kang.png" alt="hình ảnh bác sĩ">
                    </div>
                </div>
            </div>
            <div id="Paris" class="city">
                <div class="text">
                    <div class="tt">
                        Tiến sĩ<b> FELIX TRẦN</b>
                    </div>
                    <div class="ct">
                        Giám đốc chuyên môn Bệnh viện Thẩm mỹ Kangnam, Trưởng khoa Thẩm mỹ Mũi, Thành viên hiệp hội thẩm mỹ Hàn Quốc (KCCS)
                    </div>
                    <div class="img">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/uploads/bs3.png" src="https://nangmuidep.vn/wp-content/uploads/bs3.png" alt="hình ảnh bác sĩ 2">
                    </div>
                </div>
            </div>
            <div id="Tokyo" class="city">
                <div class="text">
                    <div class="tt">
                        Bác sĩ<b> Donald Hưng</b>
                    </div>
                    <div class="ct">
                        Bác sĩ Đa khoa, Chứng chỉ hành nghề: Khám bệnh, chữa bệnh chuyên khoa Chấn thương chỉnh hình
                    </div>
                    <div class="img">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/uploads/Untitled-1-1.png" src="https://nangmuidep.vn/wp-content/uploads/Untitled-1-1.png">
                    </div>
                </div>
            </div>
            <div id="Viene" class="city">
                <div class="text">
                    <div class="tt">
                        Bác sĩ<b> Jose Nguyễn</b>
                    </div>
                    <div class="ct">
                        Bác sĩ đa khoa Đại học Y Thái Nguyên, Chứng chỉ Bác sĩ chuyên khoa Phẫu thuật tạo hình
                    </div>
                    <div class="img">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/uploads/bs1-1.png" src="https://nangmuidep.vn/wp-content/uploads/bs1-1.png">
                    </div>
                </div>
            </div>
            <div id="Hanoi" class="city">
                <div class="text">
                    <div class="tt">
                        Thạc sĩ<b> Kevin Phạm</b>
                    </div>
                    <div class="ct">
                        Thạc sĩ chuyên ngành Phẫu thuật Tạo hình Đại học Y Hà Nội, Chứng chỉ chuyên khoa Tai mũi họng
                    </div>
                    <div class="img">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/uploads/bs2.png" src="https://nangmuidep.vn/wp-content/uploads/bs2.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <ul class="tabname">
                <li>
                    <button class="tablink active tab1" onclick="openCity(event, &quot;London&quot;);">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/uploads/2017/12/01/bacsi1.png" src="https://nangmuidep.vn/wp-content/uploads/2017/12/01/bacsi1.png" alt="hình ảnh bác sĩ">
                    </button>
                </li>
                <li>
                    <button class="tablink tab2" onclick="openCity(event, &quot;Paris&quot;);">
                        <img src="https://nangmuidep.vn/wp-content/themes/dichvu/media/images/home/bacsi3.png&quot;" alt="hình ảnh bác sĩ">
                    </button>
                </li>
                <li>
                    <button class="tablink tab3" onclick="openCity(event, &quot;Tokyo&quot;);">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/uploads/2017/12/01/bacsi3.png" src="https://nangmuidep.vn/wp-content/uploads/2017/12/01/bacsi3.png" alt="bác sĩ 4">
                    </button>
                </li>
                <li>
                    <button class="tablink tab4" onclick="openCity(event, &quot;Viene&quot;);">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/themes/dichvu/media/images/home/bacsi1.png" src="https://nangmuidep.vn/wp-content/themes/dichvu/media/images/home/bacsi1.png" alt="hình ảnh bác sĩ">
                    </button>
                </li>
                <li>
                    <button class="tablink tab5" onclick="openCity(event, &quot;Hanoi&quot;);">
                        <img load="step1" rel="https://nangmuidep.vn/wp-content/themes/dichvu/media/images/home/bacsi2.png" src="https://nangmuidep.vn/wp-content/themes/dichvu/media/images/home/bacsi2.png" alt="bac sĩ 2">
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>