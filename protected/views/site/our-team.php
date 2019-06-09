<section id="our-team" class="padding bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                    <span class="color-two"><?php echo $data->category->extend_1 ?></span>
                    <h2 class="darkcolor bottom20"><?php echo $data->category->name ?></h2>
                    <p class="bottom30"><?php echo $data->category->description ?> </p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($data->hinhanh as $item) {
            ?>
            <div class="col-lg-4 col-md-4">
                <div class="team-box top30">
                    <div class="image">
                        <img src="<?php echo $item->url_image ?>" alt="">
                    </div>
                    <div class="team-content">
                        <h3 class="darkcolor top30"><?php echo $item->name ?></h3>
                        <div class="txt-desc">
                            <?php echo $item->description ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>