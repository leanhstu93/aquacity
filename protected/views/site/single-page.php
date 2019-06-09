<section id="our-blog" class="bglight padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12" style="margin-bottom: 4%">
                <div class="news_item shadow">
                    <div class="news_desc text-left">
                        <h3 class="text-capitalize font-light darkcolor"><a href="blog-detail.html"><?php echo html_entity_decode($model->name) ?> </a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <?php echo $model->date ?>
                            <li><a href="#."><i class="far fa-calendar-alt"></i>Feb 14</a></li>
                            <li><a href="#."> <i class="far fa-user"></i> peter </a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>5</a></li>
                            <li><a href="#."><i class="fas fa-tags"></i> fashion, agency, secret</a></li>
                        </ul>
                       <div class="wrp-content w100">
                           <?php echo html_entity_decode($model->content) ?>
                       </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>