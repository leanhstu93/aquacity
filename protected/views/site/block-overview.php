<section id="aboutus" class="padding_top">
    <div class="container">
        <div class="row aboutus-wrapp d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-5 col-sm-5">
                <div class="image about-bordered">
                    <img src="<?php echo $data->urlImage ?>" alt="image">
                </div>
                <div class="about-gradient gradient_bg_two"></div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-7">
                <div class="heading-title">
                    <span class="color-two"><?php echo $data->expand_1 ?></span>
                    <h2 class="darkcolor"><?php echo $data->name ?></h2>
                    <p class="top20 bottom20">
                        <?php echo $data->description ?>
                    </p>
                    <a href="<?php echo Common::buildUrl($data->id, Router::TYPE_SINGLE_PAGE) ?>" class="button gradient_bg_one"> xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>