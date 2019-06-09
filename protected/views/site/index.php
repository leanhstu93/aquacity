
<!--Main Slider-->
<?php $this->renderPartial('ourhome'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="services-slider" class="owl-carousel">
                <?php
                $data = SinglePage::getDataByCustomSetting('list_after_banner_slide');
                foreach ($data as $item) {
                ?>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"> <?php echo preg_replace('/<\/?p>/i', '', $item->icon);  ?> </span>
                        <h4 class="bottom10"><a href="javascript:void(0)"><?php echo $item->name ?> </a></h4>
                        <p><?php echo $item->description ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!--About us-->
<?php
$data = SinglePage::getDataByCustomSetting('block_overview');

if (!empty($data)) {
    $this->renderPartial('block-overview',['data' => $data]);
}
 ?>

<!--About us ends-->

<!-- WOrk Process-->
<?php
$posts = Loaitin::getDataByCustomSetting('block_project');
if(!empty($posts->post)) {
    $this->renderPartial('our-process',['data' => $posts]);
?>
<!--WOrk Process ends-->
<?php } ?>
<?php
$data = Hinhanh::getDataByCustomSetting('block_support');

if(!empty($data)) {
    $this->renderPartial('our-team',['data' => $data]);
}
?>
<!-- Our Team-->

<!-- Our Team ends-->


<!--Some Feature ends-->
<?php
$data = Thuvienanh::getDataByCustomSetting('block_utilities');
if(!empty($data->hinhanh)) {
    $this->renderPartial('portfolio',['data' => $data]);
} ?>


<!-- Counters -->
<section id="funfacts" class="padding_top fact-iconic gradient_bg_two">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 margin_bottom whitecolor text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <h3 class="bottom25">Số liệu thông kê</h3>
                <p class="title">Đây là những số liệu hoàn toàn trung thực do chúng tôi thông kê được, chúng tôi luôn cam kết mang đến những giá trị hiện hữu và vô hình cho các khách hàng chúng tôi</p>
            </div>
            <div class="col-md-7 col-sm-12 text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom  wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-icon bottom15">
                            <i class="far fa-handshake"></i>
                        </div>
                        <div class="counters">
                            <span class="count_nums" data-to="2500" data-speed="2500"> </span>
                        </div>
                        <p class="title">Căn hộ bán ra</p>
                    </div>
                    <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight" data-wow-delay="350ms">
                        <div class="img-icon bottom15">
                            <i class="far fa-handshake"></i>
                        </div>
                        <div class="counters">
                            <span class="count_nums" data-to="9500" data-speed="2500"> </span>
                        </div>
                        <p class="title">Khách hàng hài lòng</p>
                    </div>
                    <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight" data-wow-delay="300ms">
                        <div class="img-icon bottom15">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="counters">
                            <span class="count_nums" data-to="6000" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                        </div>
                        <p class="title">Dự án đang thực hiện</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counters ends-->

<!-- Pricing Tables -->
<?php
$posts = Loaitin::getDataByCustomSetting('block_architecture');
if(!empty($posts->post)) {
    $this->renderPartial('our-pricings', ['data' => $posts]);
}
?>
<!--Pricing Tables ends-->
<!-- Testimonials -->
<?php
$posts = Loaitin::getDataByCustomSetting('block_sales_policy');
if(!empty($posts->post)) {
    $this->renderPartial('our-testimonial', ['data' => $posts]);
}
?>

<!--Testimonials Ends-->
<?php
$data = SinglePage::getDataByCustomSetting('block_ground');
if(!empty($data)) {
    $this->renderPartial('our-blog', ['data' => $data]);
}
?>

<!-- Contact US -->
<?php
$data = SinglePage::getDataByCustomSetting('block_contact');
if(!empty($data)) {
    $this->renderPartial('contactus', ['data' => $data]);
}
?>

<!--Contact US Ends-->