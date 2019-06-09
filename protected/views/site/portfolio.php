<!--Gallery-->
<section id="portfolio" class="gradient_bg_one padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">

                    <h2 class="whitecolor bottom20"><?php echo $data->category->name ?></h2>
                    <p class="heading_space whitecolor"><?php echo $data->category->description ?>

                    </p>

                </div>
            </div>
        </div>
        <div id="portfolio-flat" class="cbp border-portfolio">
            <?php
            foreach ($data->hinhanh as $item) {
            ?>
            <div class="cbp-item web logo">
                <img src="<?php echo $item->url_image ?>" alt="<?php echo $item->name ?>">
                <div class="overlay center-block whitecolor">
                    <a class="plus" data-fancybox="group-<?php echo $item->id ?>" href="<?php echo $item->url_image ?>"></a>
                    <h4 class="top30"><?php echo $item->name ?></h4>
                    <p><?php echo $item->description ?></p>
                    <div class="hidden">
                        <?php
                        $arr = json_decode($item->data);
                        foreach ($arr as $value){?>
                            <a data-fancybox="group-<?php echo $item->id ?>"
                               href="<?php echo $value ?>"></a>
                        <?php   }
                        ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--Gallery ends -->