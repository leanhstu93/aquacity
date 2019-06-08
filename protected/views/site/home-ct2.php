<div class="page1">

    <div class="w1000">
        <h2 class="pagett"> Thông tin mới nhất về nâng mũi Sài Gòn Halo </h2>
        <div class="line1"></div>
        <div class="ct2">
            <div class="hd-row w100">
                <div class="hd-col m3">
                    <?php
                    $videoSetting = videoSetting::model()->find('id=1');
                    ?>
                    <a href="/video.html">
                        <img load="step1" src="<?php echo $videoSetting->urlImage ?>" alt="<?php echo html_entity_decode($videoSetting->name) ?>">
                        <div class="faded">
                            <p class="tt"><?php echo html_entity_decode($videoSetting->name) ?></p>
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
                        ?>
                        <div class="hd-col m3">
                            <a href="<?php echo Common::buildUrl($value->tintuc_lang->id, Router::TYPE_NEWS) ?>">
                                <img load="step1" src="<?php echo $value->UrlImage ?>"
                                     alt="<?php echo html_entity_decode($value->tintuc_lang->Name) ?>">
                                <div class="faded">
                                    <p class="tt"><?php echo html_entity_decode($value->tintuc_lang->Name) ?></p>
                                </div>
                            </a>
                        </div>
            <?php
                    }
                }
            ?>

                <?php
                    $single_page = SinglePage::model()->find('active = 1 AND set_home = 1');
                    if($single_page != false){
                ?>
                    <div class="hd-col m3">
                        <a href="<?php echo Common::buildUrl($single_page->id,Router::TYPE_SINGLE_PAGE) ?>">
                            <img load="step1" src="<?php echo $single_page->urlImage ?>" alt="<?php echo html_entity_decode($single_page->name) ?>">
                            <div class="faded">
                                <p class="tt"><?php echo html_entity_decode($single_page->name) ?> </p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>

            <div class="ct3 w100">
                <h2 class="pagett"> Sài Gòn Halo - Đội ngũ bác sĩ nâng mũi hàng đầu Sài Gòn </h2>
                <div class="line1"></div>
                <div class="content slideanim">
                    <?php
                    $data = SinglePage::getDataByCustomSetting('list_doctor');
                    $i = 0;
                    foreach ($data as $item){
                        $i++;
                    ?>
                    <div id="doctor-<?php echo $item->id ?>" class="city <?php echo $i == 1 ? 'city2' : '' ?>">
                        <div class="text">
                            <div class="tt">
                                <?php echo html_entity_decode($item->description) ?> <b> <?php echo html_entity_decode($item->name) ?></b>
                            </div>
                            <div class="ct">
                                <?php echo html_entity_decode($item->content) ?>
                            </div>
                            <div class="img">
                                <img src="<?php echo $item->urlImage ?>" alt="<?php echo html_entity_decode($item->name) ?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="button">
                    <ul class="tabname">
                        <?php
                        $i = 0;
                        foreach ($data as $item){
                            $i++;
                        ?>
                        <li>
                            <button class="tablink tab<?php echo $i ?> <?php echo $i == 1 ? 'active' : '' ?> tab1" onclick="openCity(event, 'doctor-<?php echo $item->id ?>');">
                                <img  src="<?php echo $item->urlImage ?>" alt="<?php echo html_entity_decode($item->name) ?>">
                            </button>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>