<?php
$data = Hinhanh::getDataByCustomSetting('home_bg_phuong_phap');
?>
<div class="page2 w100" style=" background: url(<?php echo $data->hinhanh->url_image ?>) center 0 no-repeat;    background-size: cover;">
    <div class="hd-container">
        <?php
        $data = Hinhanh::getDataByCustomSetting('home_phuong_phap');
        ?>
        <h3 class="pagett"><?php echo $data->category->name ?> </h3>
        <div class="line2"></div>
        <div class=" page2-slide">
            <div class="flex-viewport">
                <ul class="slides Ta__js-slider-pp">
                    <?php foreach ($data->hinhanh as $item){ ?>
                    <li><figure>
                            <a title="<?php echo $item->name ?>" href="<?php echo $item->link ?>">
                                <img   src='<?php echo $item->url_image ?>' alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>">
                                <p><?php echo $item->name ?></p>
                            </a>
                        </figure>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>