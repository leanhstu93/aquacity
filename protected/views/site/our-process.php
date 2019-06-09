
<section id="our-process" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="heading-title text-center wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="darkcolor bottom20 text-capitalize"><?php echo $data->category->loaitin_lang->Name ?> </h2>
                    <p class="bottom0"><?php echo $data->category->loaitin_lang->Description ?> </p>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <?php
                foreach ($data->post as $item) {
                ?>
                <li class="wow fadeIn" data-wow-delay="300ms" style="width: calc(100% / 5)">
                    <div class="wrp-img">
                        <img src="<?php echo $item->UrlImage ?>" style="width:100%" />
                    </div>
                    <h4 class="font-light darkcolor bottom25" style="font-size: 18px; padding: 0; margin-bottom: 10px; margin-top: 10px;">
                        <?php echo $item->tintuc_lang->Name ?>
                    </h4>
                    <p><?php echo $item->tintuc_lang->Description ?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>