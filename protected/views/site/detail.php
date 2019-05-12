<main>
    <div class="hd-container">
        <div class="mainpage">
            <?php
            $arrBread[0]["Name"] = $model->Name;
            $criteria = new CDbCriteria();
            $criteria->with = "loaisanpham_lang";
            $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
            $criteria->order = "t.id desc";
            $criteria->addInCondition("idLoai",$this->arridloai);
            $arrloai = Loaisanpham::model()->findAll($criteria);
            $j = 0;
            for ($i= (count($arrloai)-1); $i >= 0; $i--) {
                $j++;
                $arrBread[$j]["Name"] = $arrloai[$i]->loaisanpham_lang->Name;
                $routerCateNews = Router::model()->find("idObject = " . $arrloai[$i]->loaisanpham_lang->id . " AND type = " . Router::TYPE_NEWS_PRODUCT);
                $arrBread[$j]["Href"] = $routerCateNews->alias;
            }
            $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));

            ?>
            <div class="detail">

                <div class="bannertop"><div id='polyad_ads_zone3' style="text-align: center">	</div></div>
                <h1 class="title"><?php echo $model->Name ?>    </h1>
                <section class="detailct">
                    <div class="sapo">
                        <p style="text-align: justify;">
                            <?php echo $model->Description ?>
                        </p>
                    </div>
                    <?php echo $model->Content ?>
                    <!-- kk-star-ratings -->
                    <br clear="both" />
                    <!-- comment -->
                </section>

                <section class="detailct">
                    <article class="sv_other svo2">
                        <p class="hd-large">CÁC TIN NỔI BẬT</p>
                        <ul>
                            <?php
                            $criteria = new CDbCriteria();
                            $criteria->with = "sanpham_lang";
                            $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
                            $criteria->order = "t.id desc";
                            $criteria->limit = 5;
                            $data = Sanpham::model()->findAll($criteria);
                            if (!empty($data)) {
                                foreach ($data as $item) {
                                    $router = Router::model()->find("idObject = ". $item->sanpham_lang->id ." AND type = ".Router::TYPE_PRODUCT);
                                    ?>
                                    <li>
                                        <a href="<?php echo $router->alias ?>">
                                            <img style="max-width:80px;"
                                                 src="<?php echo $item->UrlImage  ?>"
                                                 alt="<?php echo $item->sanpham_lang->Name ?>">
                                        </a>
                                        <a href="<?php echo $router->alias ?>"
                                           title="<?php echo $item->sanpham_lang->Name ?>">
                                            <?php echo $item->sanpham_lang->Name ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </article>
                </section>

            </div>
        </div>
        <aside>
            ﻿
            <section>
                <div class='title'>Dịch vụ nâng mũi đẹp</div>
                <div class='boxct'>
                    <ul class='service_list'>

                        <li><a title='Nâng mũi s line 4D' href='https://nangmuidep.vn/nang-mui-cau-truc-4d.html'>Nâng mũi cấu trúc 4D</a></li>
                        <li><a title='Nâng mũi cấu trúc 4D Nano Form' href='https://nangmuidep.vn/nang-mui-cau-truc-4d-nanoform.html' >Nâng mũi cấu trúc 4D Nano Form</a></li>
                        <li><a title='Nâng mũi cấu trúc 4D tự thân' href='https://nangmuidep.vn/nang-mui-cau-truc-4d-tu-than.html' >Nâng mũi cấu trúc 4D tự thân</a></li>
                        <li><a title='Nâng mũi bán cấu trúc' href='https://nangmuidep.vn/nang-mui-ban-cau-truc-la-gi-so-sanh-voi-nang-mui-cau-truc.html' >Nâng mũi bán cấu trúc</a></li>

                        <li><a title='Nâng mũi s line' href='https://nangmuidep.vn/nang-mui-s-line-3d-mui-dep-chuan-theo-ti-le-vang-bao-hanh-vinh-vien.html'>Nâng mũi S line</a></li>
                        <li><a title='Nâng mũi bọc sụn' href='https://nangmuidep.vn/nang-mui-boc-sun.html' >Nâng mũi bọc sụn</a></li>
                        <li><a title='Nâng mũi Hàn Quốc' href='https://nangmuidep.vn/nang-mui-han-quoc-top-3-cong-nghe-tien-tien-nhat-ky-21.html'>Nâng mũi Hàn Quốc</a></li>
                        <li><a title='Thu nhỏ đầu mũi' href='https://nangmuidep.vn/thu-nho-dau-mui.html'>Thu nhỏ đầu mũi</a></li>

                        <li><a title='Thu gọn cánh mũi' href='https://nangmuidep.vn/thu-gon-canh-mui.html'>Thu gọn cánh mũi</a></li>
                        <li><a title='Sửa mũi hỏng sau nâng' href='https://nangmuidep.vn/sua-mui-cong-nghe-han-quoc.html'>Sửa mũi hỏng sau nâng</a></li>
                        <li><a title='Sửa mũi gồ mũi lệch' href='https://nangmuidep.vn/sua-mui-go-mui-lech-cong-nghe-han-quoc.html'>Sửa mũi gồ mũi lệch</a></li>





                    </ul>
                </div>
            </section>

            <section>
                <div class='title'><a href='https://nangmuidep.vn/cac-tin-lien-quan'>Bài viết được quan tâm</a></div>
                <div class='boxct'>
                    <ul class='sb_new'>
                        <li><a title='Bảng giá nâng mũi tại Kangnam' href='https://nangmuidep.vn/cac-dich-vu-nang-mui-tai-tham-vien-kangnam-co-gia-bao-nhieu.html'><img src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/nang-mui-tai-kangnam-1.jpg' alt='Bảng giá dịch vụ nâng mũi tại bvtm Kangnam' Title='Bảng giá nâng mũi tại Kangnam'><span>Bảng giá dịch vụ Bệnh viện thẩm mỹ KANGNAM và những THÔNG tin hữu ích </span></a></li>

                        <li><a title='Sau khi nâng mũi nên ăn gì, cần kiêng gì theo chỉ định bác sĩ' href='https://nangmuidep.vn/sau-khi-phau-thuat-nang-mui-phai-kieng-an-nhung-gi.html' rel='nofollow'><img src='https://nangmuidep.vn/wp-content/uploads/sau-nang-mui-kieng-an-gi.jpg' alt='Sau khi nâng mũi nên ăn gì, cần kiêng gì theo chỉ định bác sĩ' title='Sau khi nâng mũi nên ăn gì, cần kiêng gì theo chỉ định bác sĩ'><span>Sau khi nâng mũi nên ăn gì, cần kiêng gì theo chỉ định bác sĩ </span></a></li>

                        <li><a title='Sau khi sửa mũi bao lâu mới được quan hệ ' href='https://nangmuidep.vn/sau-khi-sua-mui-bao-lau-moi-duoc-quan.html' ><img src='https://nangmuidep.vn/wp-content/uploads/sau-khi-sua-mui-bao-lau-moi-duoc-quan-he-2.jpg' alt='Sau khi sửa mũi bao lâu mới được quan hệ ' title='Sau khi sửa mũi bao lâu mới được quan hệ '><span>Giải đáp: Sau khi sửa mũi bao lâu mới được quan hệ</span></a></li>

                        <li><a title='Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả' href='https://nangmuidep.vn/video' rel='nofollow'><img src='https://nangmuidep.vn/wp-content/uploads/1.anna-trinh-dep-rang-ngoi-nho-nang-mui-kangnam.jpg' alt='Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả' title='Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả'><span>Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả</span></a></li>
                        <li><a title='' href='https://nangmuidep.vn/co-nen-nang-mui-khong.html
'><img src='https://nangmuidep.vn/wp-content/uploads/co-nen-nang-mui-khonbg.jpg' alt='Có nên nâng mũi không? Giải đáp từ CHUYÊN GIA hàng đầu'><span>Có nên nâng mũi không? Giải đáp từ CHUYÊN GIA hàng đầu</span></a></li>
                    </ul>
                </div>
            </section>
            <section>
                <div class='title'><a title='Video phẫu thuật nâng mũi thẩm mỹ' Alt='Video sửa mũi đẹp' href='https://nangmuidep.vn/video'>Video sửa mũi cấu trúc</a></div>
                <div class='boxct'>

                    <a href='https://www.youtube.com/embed/EQYf4oD0iVo' class='fancybox-media'><img src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/nang-mui-tai-kangnam-2.jpg'></a>
                </div>
            </section>
            <section>
                <div class='title'><a title='Album trước sau nâng mũi' href='https://nangmuidep.vn/hinh-anh'>Album trước sau nâng mũi</a></div>

                <div class='boxct'>
                    <a href='https://nangmuidep.vn/hinh-anh'><img title='Xinh đẹp hơn sau phẫu thuật nâng mũi đẹp' alt='Xinh đẹp hơn sau phẫu thuật nâng mũi đẹp' src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/nang-mui-tai-kangnam.jpg'   class='aligncenter'></a>

                </div>
            </section>
            <section>
                <div class='title'><a href='https://nangmuidep.vn/cac-tin-lien-quan'>Bài viết được quan tâm</a></div>
                <div class='boxct'>
                    <ul class='sb_new'>
                        <li><a title='Bảng giá nâng mũi tại Kangnam' href='https://nangmuidep.vn/cac-dich-vu-nang-mui-tai-tham-vien-kangnam-co-gia-bao-nhieu.html'><img src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/nang-mui-tai-kangnam-1.jpg' alt='Bảng giá dịch vụ nâng mũi tại bvtm Kangnam' Title='Bảng giá nâng mũi tại Kangnam'><span>Bảng giá dịch vụ Bệnh viện thẩm mỹ KANGNAM và những THÔNG tin hữu ích </span></a></li>

                        <li><a title='Quán quân the Voice Đức Phúc sửa mũi tẹt thành công như thế nào?' href='https://nangmuidep.vn/quan-quan-voice-duc-phuc-sua-mui-tet-thanh-cong-nhu-nao.html' rel='nofollow'><img src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/1-nang-mui.jpg' alt='Quán Quân the Voice Đức Phúc sửa mũi tẹt thành công như thế nào?' title='Quán Quân the Voice Đức Phúc sửa mũi tẹt thành công như thế nào?'><span>Quán Quân the Voice Đức Phúc sửa mũi tẹt thành công như thế nào? </span></a></li>

                        <li><a title='Nghe Chang Makeup kể chuyện phẫu thuật nâng mũi thấp tẹt ' href='https://nangmuidep.vn/nghe-chang-makeup-ke-chuyen-phau-thuat-nang-mui.html' ><img src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/1-nang-mui-tai-kangnam.jpg' alt='Nghe Chang Makeup kể chuyện phẫu thuật nâng mũi thấp tẹt ' title='Nghe Chang Makeup kể chuyện phẫu thuật nâng mũi thấp tẹt '><span>Hot Blogger Chang Makeup kể về HÀNH TRÌNH phẫu thuật sửa mũi tẹt</span></a></li>

                        <li><a title='Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả' href='https://nangmuidep.vn/video' rel='nofollow'><img src='https://nangmuidep.vn/wp-content/uploads/1.anna-trinh-dep-rang-ngoi-nho-nang-mui-kangnam.jpg' alt='Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả' title='Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả'><span>Video, Clip phẫu thuật nâng mũi: từ Cận cảnh quy trình đến hiệu quả</span></a></li>
                        <li><a title='' href='https://nangmuidep.vn/co-nen-nang-mui-khong.html
'><img src='https://nangmuidep.vn/wp-content/uploads/co-nen-nang-mui-khonbg.jpg' alt='Có nên nâng mũi không? Giải đáp từ CHUYÊN GIA hàng đầu'><span>Có nên nâng mũi không? Giải đáp từ CHUYÊN GIA hàng đầu</span></a></li>
                    </ul>
                </div>
            </section><section>
                <div class='title'><a title='Video phẫu thuật nâng mũi thẩm mỹ' Alt='Video sửa mũi đẹp' href='https://nangmuidep.vn/video'>Video sửa mũi cấu trúc</a></div>
                <div class='boxct'>

                    <a href='https://www.youtube.com/embed/EQYf4oD0iVo' class='fancybox-media'><img src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/nang-mui-tai-kangnam-2.jpg'></a>
                </div>
            </section>
            <section>
                <div class='title'><a title='Album trước sau nâng mũi' href='https://nangmuidep.vn/hinh-anh'>Album trước sau nâng mũi</a></div>

                <div class='boxct'>
                    <a href='https://nangmuidep.vn/hinh-anh'><img title='Đức Phúc điển trai nhờ phẫu thuật nâng mũi đẹp' alt='Đức Phúc điển trai nhờ phẫu thuật nâng mũi đẹp' src='https://nangmuidep.vn/wp-content/uploads/2017/11/24/nang-mui-tai-kangnam.jpg'   class='aligncenter'></a>

                </div>
            </section>



            <!-- <section>
                <div class="title">Tin Tức nâng mũi</div>
                <div class="boxct">
                    <ul class="sb_new">


                                            <li><a href="https://nangmuidep.vn/nang-mui-bang-chi-gia-bao-nhieu-tien.html"><img src="https://nangmuidep.vn/wp-content/uploads/nang-mui-bang-chi-gia-bao-nhieu-65-150x150.jpg" alt=""><span>Nâng mũi bằng chỉ giá bao nhiêu? Hiệu quả có tốt không?</span></a></li>




                                            <li><a href="https://nangmuidep.vn/chi-con-1-ngay-show-truyen-hinh-thuc-te-ve-phau-thuat-tham-my-tai-viet-nam-chinh-thuc-len-song.html"><img src="https://nangmuidep.vn/wp-content/uploads/2018/10/13/kangnam-chi-20-ty-dong-lam-chuong-trinh-truyen-hinh-thuc-te-ve-tham-my/kangnam-chi-20-ty-dong-lam-chuong-trinh-truyen-hinh-thuc-te-ve-tham-my/image011-7740-1539338968-1.png" alt=""><span>Chỉ còn 1 ngày show truyền hình thực tế về phẫu thuật thẩm mỹ tại Việt Nam chính thức lên sóng</span></a></li>




                                            <li><a href="https://nangmuidep.vn/kangnam-chi-20-ty-dong-lam-chuong-trinh-truyen-hinh-thuc-te-ve-tham-my.html"><img src="https://nangmuidep.vn/wp-content/uploads/2018/10/13/kangnam-chi-20-ty-dong-lam-chuong-trinh-truyen-hinh-thuc-te-ve-tham-my/kangnam-chi-20-ty-dong-lam-chuong-trinh-truyen-hinh-thuc-te-ve-tham-my/image001-8789-1539338968-300x300.png" alt=""><span>Kangnam chi 20 tỷ đồng làm chương trình truyền hình thực tế về thẩm mỹ</span></a></li>




                                            <li><a href="https://nangmuidep.vn/huong-dan-cach-nan-lai-song-mui-bi-lech.html"><img src="https://nangmuidep.vn/wp-content/uploads/nan-lai-song-mui-bi-lech-min-300x300.jpg" alt=""><span>Cách nắn lại sống mũi bị lệch, vẹo ĐƠN GIẢN cho mũi thẳng sau 5 phút</span></a></li>




                                            <li><a href="https://nangmuidep.vn/chi-phi-sua-mui-go-gia-bao-nhieu.html"><img src="https://nangmuidep.vn/wp-content/uploads/2018/01/29/chi-phi-nang-mui-han-quoc-la-bao-nhieu/chi-phi-nang-mui-han-quoc-la-bao-nhieu/nang-mui-12-300x300.jpg" alt=""><span>Chi phí sửa mũi gồ giá bao nhiêu?</span></a></li>





                    </ul>
                </div>
            </section> -->
            <!-- <section>
                <div class="title">Tư vấn nâng mũi</div>
                <div class="boxct">
                    <ul class="sb_consult">



                                             <li><a href="https://nangmuidep.vn/nang-mui-bang-chi-ban-nhap.html"><span>Nâng mũi bằng chỉ &#8211; Bản nháp .</span></a></li>




                                             <li><a href="https://nangmuidep.vn/nang-mui-ban-cau-truc-la-gi-so-sanh-voi-nang-mui-cau-truc.html"><span>5 lưu ý cần biết về công nghệ nâng mũi bán cấu trúc 4D</span></a></li>




                                             <li><a href="https://nangmuidep.vn/nang-mui-co-dau-khong.html"><span>Phẫu thuật nâng mũi có đau không, có nguy hiểm hay không?</span></a></li>




                                             <li><a href="https://nangmuidep.vn/chi-phi-thu-nho-dau-mui-tai-tham-vien-kangnam.html"><span>Thu nhỏ đầu mũi và cánh mũi bao nhiêu tiền? Bảng giá updates 2018</span></a></li>




                                             <li><a href="https://nangmuidep.vn/sau-nang-mui-kieng-an-gi-de-mau-lanh-thuong.html"><span>Massageishealthy tư vấn sau nâng mũi kiêng ăn gì để mau lành thương?</span></a></li>




                                             <li><a href="https://nangmuidep.vn/nang-mui-bang-sun-tu-than-gia-bao-nhieu.html"><span>Nâng mũi bằng sụn tự thân giá bao nhiêu tiền?</span></a></li>




                                             <li><a href="https://nangmuidep.vn/nang-mui-gia-bao-nhieu.html"><span>Giá phẫu thuật nâng mũi hết bao nhiêu tiền? Cập nhật bảng giá 2019</span></a></li>




                                             <li><a href="https://nangmuidep.vn/sau-khi-phau-thuat-nang-mui-phai-kieng-an-nhung-gi.html"><span>Sau nâng mũi nên ăn gì, cần kiêng gì theo chỉ định của BÁC SĨ?</span></a></li>




                                             <li><a href="https://nangmuidep.vn/sau-khi-sua-mui-bao-lau-moi-duoc-quan.html"><span>Sau khi sửa mũi bao lâu mới được quan hệ?</span></a></li>




                                             <li><a href="https://nangmuidep.vn/nang-mui-bao-lau-thi-dep-tu-nhien.html"><span>Nâng mũi bao lâu thì đẹp tự nhiên và hết sưng? Cách giảm sưng hiệu quả</span></a></li>



                    </ul>
                </div>
            </section> -->
            <section >
                <div class="title">Tin Mới Nhất</div>
                <div class="boxct">
                    <ul class="sb_new">

                        <li><a href="https://nangmuidep.vn/nang-mui-bang-chi-ban-nhap.html"><img src="https://nangmuidep.vn/wp-content/uploads/nang-mui-bang-chi-2.jpg" alt=""><span>Nâng mũi bằng chỉ &#8211; Bản nháp .</span></a></li>

                        <li><a href="https://nangmuidep.vn/nang-mui-bang-chi-gia-bao-nhieu-tien.html"><img src="https://nangmuidep.vn/wp-content/uploads/nang-mui-bang-chi-gia-bao-nhieu-65-150x150.jpg" alt=""><span>Nâng mũi bằng chỉ giá bao nhiêu? Hiệu quả có tốt không?</span></a></li>

                        <li><a href="https://nangmuidep.vn/nang-mui-ban-cau-truc-la-gi-so-sanh-voi-nang-mui-cau-truc.html"><img src="https://nangmuidep.vn/wp-content/uploads/2018/12/12/5-luu-y-can-biet-ve-cong-nghe-nang-mui-ban-cau-truc-4d/5-luu-y-can-biet-ve-cong-nghe-nang-mui-ban-cau-truc-4d/nang-mui-ban-cau-truc-4d-avt-300x300.jpg" alt=""><span>5 lưu ý cần biết về công nghệ nâng mũi bán cấu trúc 4D</span></a></li>

                        <li><a href="https://nangmuidep.vn/nang-mui-co-dau-khong.html"><img src="https://nangmuidep.vn/wp-content/uploads/nang-mui-co-dau-khong-4-300x294.jpg" alt=""><span>Phẫu thuật nâng mũi có đau không, có nguy hiểm hay không?</span></a></li>

                        <li><a href="https://nangmuidep.vn/chi-con-1-ngay-show-truyen-hinh-thuc-te-ve-phau-thuat-tham-my-tai-viet-nam-chinh-thuc-len-song.html"><img src="https://nangmuidep.vn/wp-content/uploads/2018/10/13/kangnam-chi-20-ty-dong-lam-chuong-trinh-truyen-hinh-thuc-te-ve-tham-my/kangnam-chi-20-ty-dong-lam-chuong-trinh-truyen-hinh-thuc-te-ve-tham-my/image011-7740-1539338968-1.png" alt=""><span>Chỉ còn 1 ngày show truyền hình thực tế về phẫu thuật thẩm mỹ tại Việt Nam chính thức lên sóng</span></a></li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="title">Tư vấn nâng mũi</div>
                <div class="boxct">
                    <ul class="sb_consult">



                        <li><a href="https://nangmuidep.vn/khac-phuc-mui-bien-dang-nang-mui-bang-chi-bi-hong.html"><span>Khắc phục mũi biến dạng do nâng mũi bằng chỉ bị hỏng</span></a></li>




                        <li><a href="https://nangmuidep.vn/nang-mui-s-line-duoc-thuc-hien-nhu-nao.html"><span>Quy trình phẫu thuật nâng mũi s line an toàn tại Kangnam</span></a></li>




                        <li><a href="https://nangmuidep.vn/tv-mui-bi-lech-co-chinh-sua-duoc-khong.html"><span>Mũi bị lệch có chỉnh sửa được không?</span></a></li>




                        <li><a href="https://nangmuidep.vn/tv-dau-mui-mong-co-nang-mui-boc-sun-duoc-khong.html"><span>Đầu mũi mỏng có nâng mũi bọc sụn được không?</span></a></li>




                        <li><a href="https://nangmuidep.vn/cach-lam-mui-cao-tu-nhien-cua-sao-han.html"><span>Cách làm mũi cao tự nhiên của sao Hàn</span></a></li>




                        <li><a href="https://nangmuidep.vn/bi-viem-gan-b-co-nen-nang-mui-khong-chuyen-gia-giai-dap.html"><span>Bị viêm gan B có nên nâng mũi không? &#8211; Chuyên gia giải đáp</span></a></li>




                        <li><a href="https://nangmuidep.vn/sau-phau-thuat-nang-mui-co-duoc-tap-luyen-the-thao.html"><span>Sau phẫu thuật nâng mũi có được tập luyện thể thao?</span></a></li>




                        <li><a href="https://nangmuidep.vn/canh-mui-to-co-the-thu-hep-canh-mui-duoc-khong.html"><span>Cánh mũi to dày có thể thu hẹp cánh mũi được không?</span></a></li>




                        <li><a href="https://nangmuidep.vn/thoi-gian-phuc-hoi-sau-phau-thuat-nang-sua-mui.html"><span>Thời gian phục hồi sau phẫu thuật nâng, sửa mũi?</span></a></li>




                        <li><a href="https://nangmuidep.vn/sua-mui-chu-bat-gioi-duoc-khong.html"><span>Sửa mũi &#8220;Chư Bát Giới&#8221; được không?</span></a></li>



                    </ul>
                </div>
            </section>

            <section>
                <div class="title">Bình Luận Mới Nhất</div>
                <div class="boxct">
                    <ul id="recentcomments"><li class="recentcomments"><span class="comment-author"><b>Bác Sĩ Tư Vấn</b></span> on <a style="color:#136fa7;font-weight:600;" href="https://nangmuidep.vn/cac-dich-vu-nang-mui-tai-tham-vien-kangnam-co-gia-bao-nhieu.html#comment-3971">Bảng giá dịch vụ Bệnh viện thẩm mỹ KANGNAM và những THÔNG tin hữu ích</a><span class="comment-content">Nâng mũi Sline sụn tự thân có giá 35 triệu bạn nhé!<a href="https://nangmuidep.vn/cac-dich-vu-nang-mui-tai-tham-vien-kangnam-co-gia-bao-nhieu.html#comment-3971" class="more-comment">Xem thêm >></a></span></li><li class="recentcomments"><span class="comment-author"><b>Bác Sĩ Tư Vấn</b></span> on <a style="color:#136fa7;font-weight:600;" href="https://nangmuidep.vn/dang-ky-thanh-cong#comment-3970">ĐĂNG KÝ THÀNH CÔNG</a><span class="comment-content">Bạn có thể tham khảo các phương pháp nâng mũi cấu trúc như: nâng...<a href="https://nangmuidep.vn/dang-ky-thanh-cong#comment-3970" class="more-comment">Xem thêm >></a></span></li><li class="recentcomments"><span class="comment-author"><b>Bác Sĩ Tư Vấn</b></span> on <a style="color:#136fa7;font-weight:600;" href="https://nangmuidep.vn/nang-mui-gia-bao-nhieu.html#comment-3969">Giá phẫu thuật nâng mũi hết bao nhiêu tiền? Cập nhật bảng giá 2019</a><span class="comment-content">Mũi bạn bị gãy khúc do xương nên khắc phục bằng công nghệ nâng...<a href="https://nangmuidep.vn/nang-mui-gia-bao-nhieu.html#comment-3969" class="more-comment">Xem thêm >></a></span></li><li class="recentcomments"><span class="comment-author"><b>Bác Sĩ Tư Vấn</b></span> on <a style="color:#136fa7;font-weight:600;" href="https://nangmuidep.vn/nang-mui-bao-lau-thi-dep-tu-nhien.html#comment-3968">Nâng mũi bao lâu thì đẹp tự nhiên và hết sưng? Cách giảm sưng hiệu quả</a><span class="comment-content">Nếu như bạn lo lắng đến dáng mũi của mình, bạn hãy liên hệ...<a href="https://nangmuidep.vn/nang-mui-bao-lau-thi-dep-tu-nhien.html#comment-3968" class="more-comment">Xem thêm >></a></span></li><li class="recentcomments"><span class="comment-author"><b>Bác Sĩ Tư Vấn</b></span> on <a style="color:#136fa7;font-weight:600;" href="https://nangmuidep.vn/dang-ky-thanh-cong#comment-3967">ĐĂNG KÝ THÀNH CÔNG</a><span class="comment-content">Mũi bị lệch có thể do sụn của bạn bị lệch ra khỏi quỹ...<a href="https://nangmuidep.vn/dang-ky-thanh-cong#comment-3967" class="more-comment">Xem thêm >></a></span></li></ul>	</div>
            </section>

            <section>
                <div class="title">Tin Xem Nhiều Nhất</div>
                <div class="boxct">
                    <ul class="sb_new">


                        <li><a href="https://nangmuidep.vn/huong-dan-cach-nan-lai-song-mui-bi-lech.html"><img src="https://nangmuidep.vn/wp-content/uploads/nan-lai-song-mui-bi-lech-min-300x300.jpg" alt=""><span>Cách nắn lại sống mũi bị lệch, vẹo ĐƠN GIẢN cho mũi thẳng sau 5 phút</span></a></li>




                        <li><a href="https://nangmuidep.vn/cach-lam-mui-cao-tu-nhien.html"><img src="https://nangmuidep.vn/wp-content/uploads/2018/05/08/cach-lam-mui-cao-tu-nhien/cach-lam-mui-cao-tu-nhien/cach-lam-mui-cao-tu-nhien87-300x261.jpg" alt=""><span>5 cách làm mũi cao tự nhiên tại nhà hiệu quả ( Kèm Video)</span></a></li>




                        <li><a href="https://nangmuidep.vn/sau-khi-phau-thuat-nang-mui-phai-kieng-an-nhung-gi.html"><img src="https://nangmuidep.vn/wp-content/uploads/sau-nang-mui-nen-an-gi-1-min-300x300.jpg" alt=""><span>Sau nâng mũi nên ăn gì, cần kiêng gì theo chỉ định của BÁC SĨ?</span></a></li>




                        <li><a href="https://nangmuidep.vn/cac-dich-vu-nang-mui-tai-tham-vien-kangnam-co-gia-bao-nhieu.html"><img src="https://nangmuidep.vn/wp-content/uploads/2013/12/phau-thuat-nang-mui-nao-cho-dang-mui-mem-mai-tu-nhien-150x150.jpeg" alt=""><span>Bảng giá dịch vụ Bệnh viện thẩm mỹ KANGNAM và những THÔNG tin hữu ích</span></a></li>




                        <li><a href="https://nangmuidep.vn/mui-quap-la-nhu-nao-va-mui-quap-tuong-sao.html"><img src="https://nangmuidep.vn/wp-content/uploads/mui-quap-tuong-so-300x300.jpg" alt=""><span>Tướng số của người mũi quặp và cách chỉnh sửa mũi quặp đẹp như ý</span></a></li>




                    </ul>
                </div>
            </section>




        </aside>
    </div>
</main>

<div class='ht-lq w100'>
    <div class='hd-container'>
        <div class='title'>CÁC TIN LIÊN QUAN</div>
        <div class='hd-row'>
            <?php
            $data = Loaitin::getDataByCustomSetting('list_lien_quan');
            $routerCateNews = Router::model()->find("idObject = ". $data->category->loaitin_lang->id ." AND type = ".Router::TYPE_NEWS_CATEGORY);
            if(!empty($data->post)){
                $i = 0;
                foreach ($data->post as $item){
                    $j = $i + 1;
                    ?>
                    <?php
                    if($i == 0 || $i == 5 || $i == 10){
                        ?>
                        <div class="hd-col m3 ">
                        <figure>
                        <a title="<?php echo $item->tintuc_lang->Name ?>"
                           href="<?php echo $router->alias ?>">
                            <img src="<?php echo $item->UrlImage ?>"
                                 alt="<?php echo $item->tintuc_lang->Name ?>"
                                 title="<?php echo $item->tintuc_lang->Name ?>">
                        </a>
                        <figcaption>
                        <ul>
                        <?php $i++; continue; } ?>
                    <li>
                        <a title="<?php echo $item->tintuc_lang->Name ?>"
                           href="<?php echo $router->alias ?>">
                            <?php echo $item->tintuc_lang->Name ?>
                        </a>
                    </li>
                    <?php if($j % 5 == 0 || $j == count($data->post) ) { ?>
                        </ul>
                        </figcaption>

                        </figure>
                        </div>
                        <?php
                    }
                    $i++;
                }
            }
            ?>
        </div>
    </div>
</div>