<section id="our-pricings" class="padding bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                    <span class="color-three">KIẾN TRÚC ĐỘC ĐÁO</span>
                    <h2 class="darkcolor bottom20"><?php echo $data->category->loaitin_lang->Name ?></h2>
                    <p class="bottom30">
                        <?php echo $data->category->loaitin_lang->Description ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row three-col-pricing">
            <?php
            foreach ($data->post as $item){
            ?>
            <div class="col-lg-4 col-sm-12">
                <div class="price-table top60 wow fadeIn" data-wow-delay="350ms">
                    <h3 class="bottom20 darkcolor"><?php echo $item->tintuc_lang->Name ?></h3>
                    <div class="w100 wrp-desc">
                        <?php echo $item->tintuc_lang->Content ?>
                    </div>
                    <div class="clearfix"></div>
                    <a href="tel:<?php echo $this->ttc->Phone ?>" class="button btnprimary top50">TƯ VẤN NGAY </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
</section>