<section id="our-testimonial" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                    <span><?php echo $data->category->loaitin_lang->Description ?></span>
                    <h2 class="darkcolor"><?php echo $data->category->loaitin_lang->Name ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <?php
                    foreach ($data->post as $item){
                    ?>
                    <div class="item">
                        <div class="testimonial-wrapp">
                     <span class="quoted gradient_bg_four">
                        <i class="fa fa-quote-right"></i>
                     </span>
                            <div class="testimonial-text">
                                <p class="bottom40"><?php echo $item->tintuc_lang->Description ?></p>
                            </div>

                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>