<?php
$data = Hinhanh::getDataByCustomSetting('home_kinh_nghiem');
?>
<div class='page3'>
    <div class='hd-container '>
        <div class="hd-row">
            <div class="hd-col m12">
                <div class="pagett"><h3 class="cnkh">
                        <a href="javascript:;">
                            <?php echo $data->category->name ?>
                        </a>
                    </h3>
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
                        if(isset($data->hinhanh[1])){
                            $name = $data->hinhanh[1]->name;
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
                            $name = $data->hinhanh[2]->name;
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
                            $name = $data->hinhanh[3]->name;
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
                            $name = $data->hinhanh[4]->name;
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
                            $name = $data->hinhanh[5]->name;
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
            <div class="pagett pagett-sub"><?php echo $data->category->name ?></div>
            <div class='hd-col m6'>
                <figure>
                    <div class="flexslider page3-slide">
                        <div class="flex-viewport">
                            <ul class="slides">
                                <?php
                                foreach ($hinhanh->hinhanh as $item){
                                ?>
                                <li>
                                    <a href="<?php echo $item->link ?>">
                                        <img title="<?php echo $item->name ?>"
                                             src='<?php echo $item->url_image ?>'
                                             alt="<?php echo $item->name ?>">
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <p><?php echo $data->category->loaitin_lang->description ?></p>
                    <div class="btn-lk">
                        <a class="hd-btn" href="https://nangmuidep.vn/hinh-anh"  rel="nofollow">Xem thêm >></a>
                    </div>
                </figure>
            </div>
            <div class='hd-col m6'>
                <?php
                    foreach ($posts->post as $item){
                        $router = Router::model()->find("idObject = ". $item->tintuc_lang->id ." AND type = ".Router::TYPE_NEWS);
                ?>
                <article>
                    <a class="pic"
                       title="<?php echo $item->tintuc_lang->Name ?>"
                       href="<?php echo $router->alias ?>">
                        <img src="<?php echo $item->UrlImage ?>" alt="<?php echo $item->tintuc_lang->Name ?>">
                    </a>
                    <a title="<?php echo $item->tintuc_lang->Name ?>"
                       href="<?php echo $router->alias ?>">
                        <strong><?php echo $item->tintuc_lang->Name ?></strong>
                    </a>
                </article>
                <?php } ?>
                <div class='btn-lk'>
                    <a rel="nofollow" class='hd-btn' href='https://nangmuidep.vn/tin-tuc'>Xem thêm >></a>
                </div>
            </div>
        </div>
    </div>
</div>