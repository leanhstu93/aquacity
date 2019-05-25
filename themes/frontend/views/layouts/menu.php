<section class="w100 wrp-menu menu">
    <div class="w1000">
        <ul class="menupc">
            <li class="hd-dropdown-hover"><a class="active" href='/'> Trang chủ </a></li>
            <?php $criteria = new CDbCriteria();
            $criteria->condition = "active = 1 and set_home = 1";
            $criteria->limit = 3;
            $model = SinglePage::model()->findAll($criteria);
            $count = SinglePage::model()->count($criteria);
            if ($count > 0) {
                foreach ($model as $key => $value) {
                    $router = Router::model()->find("idObject = " . $value->id . " AND type = " . Router::TYPE_SINGLE_PAGE); ?>
                    <li class="hd-dropdown-hover"><a
                                href='/<?php echo $router->alias ?>.html'> <?php echo $value->name ?> </a>
                    </li>                <?php }
            } ?>
            <li class="hd-dropdown-hover"><a> Dịch vụ </a> <?php $criteria = new CDbCriteria();
                $criteria->with = "sanpham_lang";
                $criteria->condition = "Active = 1 and idNgonNgu = $this->lang";
                $criteria->limit = 16;
                $model = Sanpham::model()->findAll($criteria);
                $count = Sanpham::model()->count($criteria);
                if ($count > 0) { ?>
                    <div class="hd-dropdown-content">
                        <article class="hd-row">
                            <div class="hd-col m3">
                                <ul>
                                    <figure>                                        <?php $i = 0;
                                        foreach ($model as $key => $value) {
                                            $i++;
                                            $router = Router::model()->find("idObject = " . $value->sanpham_lang->id . " AND type = " . Router::TYPE_PRODUCT);
                                            echo "<li>";
                                            echo '<a href="' . Yii::app()->request->baseUrl . $router->alias . '">' . $value->sanpham_lang->NameShort . '</a>                ';
                                            echo "</li>";
                                            if ($i % 4 == 0 && $i < $count) {
                                                echo '</figure></ul> </div> <div class="hd-col m3"> <ul><figure>';
                                            }
                                            if ($i == $count) {
                                                echo '</figure></ul> </div>';
                                            }
                                        } ?>
                        </article>
                    </div>                    <?php } ?>                </li>
                          <?php $criteria = new CDbCriteria();
            $criteria->with = "loaitin_lang";
            $criteria->condition = "Active = 1 and Parent = 0 and idNgonNgu = $this->lang";
            $criteria->order = "t.Order";
            $model = Loaitin::model()->findAll($criteria);
            $count = Loaitin::model()->count($criteria); ?>                <?php foreach ($model as $key => $value) {
                Common::menutintuc($value->id, "Loaitin", $this->lang);
            } ?>
            <li class="hd-dropdown-hover"><a href='/video.html'> Video </a></li>
        </ul>
<!--        <a rel="nofollow" href="#Ta__js-tu-van" data-toggle="modal" class="regist btnkn2tv">Đăng kí tư vấn</a> <a-->
<!--                rel="nofollow" id="callme" href="tel:--><?php //echo $this->ttc->Phone ?><!--" class="call btncallme"><i-->
<!--                    class="animated tada"></i> --><?php //echo $this->ttc->Phone ?><!--        </a></div>-->
    <script type="text/javascript">           $(function () {
            $(".key").focus(function (e) {
                $(this).keydown(function (e) {
                    if (e.which == 13) {
                        key = $(this).parent().find(".key").val();
                        window.location.href = "tim-kiem.html?keyword=" + key + "";
                    }
                })
            });
            $(".btn_timkiem").click(function () {
                key = $(".key").val();
                window.location.href = "tim-kiem.html?keyword=" + key + "";
            });
        })         </script>
    <script>          $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 250) {
                    $("section.menu").addClass("fix-scroll");
                } else {
                    $("section.menu").removeClass("fix-scroll");
                }
            });
        });        </script>
</section>