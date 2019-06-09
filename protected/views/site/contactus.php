<section id="contactus" class="padding_top">
    <div class="container">
        <div class="row  margin_bottom">
            <div class="col-md-12 col-sm-12">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                    <span class="color-three"><?php echo $data->description ?></span>
                    <h2 class="darkcolor"><?php echo $data->name ?></h2>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 top60 wow fadeInUp" data-wow-delay="350ms">
                <?php echo $data->content ?>
            </div>
            <div class="col-lg-6 col-sm-12 top60">
                <form class="getin_form wow fadeInUp" name="Baogia" method="post" data-wow-delay="400ms" action="/site/Xulybaogia">
                    <div class="row">
                        <div class="col-sm-12" id="result"></div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="text" placeholder="Họ tên :" required id="first_name" name="Baogia[Name]">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="text" placeholder="Địa chỉ:" required id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="email" placeholder="Email:" required id="email" name="Baogia[Email]">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="tel" placeholder="Điện thoại:" id="phone" name="Baogia[Phone]">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group bottom35">
                                <textarea dirname="Baogia[Description]" class="form-control" placeholder="Tin nhắn" id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="button gradient_bg_two" id="submit_btn" value="1" name="Gui">Gửi cho chúng tôi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Location Map here-->
    <div id="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.25996341946!2d106.77654181480088!3d10.791390592311386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175268467db5eb7%3A0x528e50407e4d5aed!2zxJDGsOG7nW5nIDU2LCBRdeG6rW4gMiwgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1sen!2s!4v1559793125833!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>