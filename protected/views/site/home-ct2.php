<div class="ct2">
    <div class="hd-row w100">
        <div class="hd-col m3">
            <?php
            $videoSetting = videoSetting::model()->find('id=1');
            ?>
            <a href="">
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
            </div>
        <?php } ?>
    </div>
    <div class="btn-lk w100">
        <a class="hd-btn" href="<?php echo Common::buildUrl($router_sp_home->alias) ?>">Xem thêm &gt;&gt;</a>
    </div>
    <div class="ct3 w100">
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
                        <?php echo $item->description ?> <b> <?php echo $item->name ?></b>
                    </div>
                    <div class="ct">
                        <?php echo $item->content ?>
                    </div>
                    <div class="img">
                        <img src="<?php echo $item->urlImage ?>" alt="<?php echo $item->name ?>">
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
                        <img  src="<?php echo $item->urlImage ?>" alt="<?php echo $item->name ?>">
                    </button>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>