<!-- Our Blogs -->
<section id="our-blog" class="half-section bglight">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 nopadding">
                <div class="image hover-effect"><img src="<?php echo $data->urlImage ?>" alt="our blog" class="equalheight"></div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="split-box text-center center-block equalheight container-padding">
                    <div class="heading-title padding">
                        <span class="color-three wow fadeIn" data-wow-delay="300ms"><?php echo $data->expand_1 ?></span>
                        <h2 class="darkcolor bottom20 wow fadeIn" data-wow-delay="350ms"><?php echo $data->name ?></h2>

                        <a href="<?php echo Common::buildUrl($data->id, Router::TYPE_SINGLE_PAGE) ?>" class="button gradient_bg_one wow fadeInUp" data-wow-delay="450ms">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Our Blogs Ends-->