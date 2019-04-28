<?php
  $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
  $ch = Cauhinh::model()->find("id = 1 ");
?>
     <footer class="footer">

        <!-- Footer Columns -->
        <div class="footer-columns">
            <div class="container">
                <div class="row position-r theme-padding">
                     
                    <!-- widget -->
                    <div class="col-lg-3 col-sm-3 col-xs-6 r-full-width">
                        <!-- Contact widget -->
                        <div class="footer-widget">
                            <div class="contact-list">

                                <!-- Logo Holder -->
                                <a href="/" class="inner-logo-2"></a>
                                <!-- Logo Holder -->

                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?php echo $ttc->Address ?></li>
                                    <li><i class="fa fa-headphones"></i><?php echo $ttc->Tel ?></li>
                                    <li><i class="fa fa-envelope-o"></i><?php echo $ttc->Email ?></li>
                                   
                                    <li><i class="fa fa-globe"></i>www.vaatv.vn</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contact widget -->
                    
                    </div>
                    <!-- widget -->

                    <!-- widget -->
                    <div class="col-lg-3 col-sm-3 col-xs-6 r-full-width">
                        <!-- populer post  -->
                        <div class="footer-widget">
                            <h3>Tin mới đây </h3>
                            <div class="recent-post-widget">
                                <ul>
                                <?php 
                                $criteria = new CDbCriteria();
                                $criteria->with = "tintuc_lang";
                                $criteria->condition = "Active = 1 and idNgonNgu= 1";
                                $criteria->order = "t.id desc";
                                $criteria->limit = 4;
                                $data = Tintuc::model()->findAll($criteria);
                                foreach ($data as $key => $value) {
                                    # code...
                              
                                ?>
                                    <li>
                                        <!-- blog post -->
                                        <div class="post-wrap small-post">
                                            <!-- blog img -->
                                            <div class="post-thumb">
                                                <?php 
                                                    $urlimage = basename($value->UrlImage);
                                                    $urlimage = "58x58/".$urlimage;
                                                    $urlimage = Common::getResize($urlimage);
                                                    if($urlimage != false) $urlimage1 = $urlimage;
                                                    else  $urlimage1 = $value->UrlImage;
                                                ?>
                                                <img  src="<?php echo $urlimage1 ?>" alt="<?php echo $value->tintuc_lang->Name ?>">
                                            </div>
                                            <!-- blog img -->

                                            <!-- post detail -->
                                            <div class="post-content">
                                                <h5><a href="/bai-viet/<?php echo $value->tintuc_lang->Alias ?>.html"><?php echo $value->tintuc_lang->Name ?></a></h5>
                                                <!-- post meta -->
                                                <ul class="post-meta">
                                                    <li><i class="icon-clock"></i><?php echo date("d/m/Y",$value->Date) ?></li>
                                                    
                                                </ul>
                                                <!-- post meta -->
                                            </div>
                                            <!-- post detail -->
                                        </div>
                                        <!-- blog post -->
                                    </li>
                                    <?php   } ?>
                             
                                </ul>
                                
                            </div>
                        </div>
                        <!-- populer post  -->
                    </div>
                    <!-- widget -->
                   
                    <!-- widget -->
                    <div class="col-lg-3 col-sm-3 col-xs-6 r-full-width">
                        <!-- quick links -->
                        <div class="footer-widget mb-30">
                            <h3>Menu</h3>
                            <div class="quick-links">
                                <ul>
                                <?php
                            $criteria = new CDbCriteria();
                            $criteria->with ="loaitin_lang";
                            $criteria->condition ="t.Active = 1 and t.Parent = 0 and loaitin_lang.idNgonNgu =1";
                            $criteria->order = "t.Order ";
                            $data = Loaitin::model()->findAll($criteria);
                            foreach ($data as $key => $value) {
                              # code...
                             ?>
                                    <li><a href="/loai-tin/<?php echo $value->loaitin_lang->Alias ?>.html"><?php echo $value->loaitin_lang->Name ?></a></li>
                              <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- quick links -->

                         <!-- populer tags -->
                     
                        <!-- populer tags -->
                    </div>
                    <!-- widget -->

                     <!-- widget -->
                    <div class="col-lg-3 col-sm-3 col-xs-6 r-full-width">

                        <!-- Contact widget -->
                        <div class="footer-widget mb-30">
                            <h3>Video</h3>
                            <div class="flicker-imgs-list">
                                <ul>
                                <?php $criteria = new CDbCriteria();
                                $criteria->condition = "Active = 1 ";
                                $criteria->limit = 8;
                                $data = Video::model()->findAll($criteria) ;
                                foreach ($data as $key => $value) {
                                    # code...
                                 ?>
                                    <li><a href="/video/<?php echo $value->Alias ?>.html" >
                                        <?php 
                                            $urlimage = basename($value->UrlImage);
                                            $urlimage = "58x58/".$urlimage;
                                            $urlimage = Common::getResize($urlimage);
                                            if($urlimage != false) $urlimage1 = $urlimage;
                                            else  $urlimage1 = $value->UrlImage;
                                        ?>
                                        <img  class="thum58px" src="<?php echo  $urlimage1 ?>" alt="<?php echo $value->Name ?>"></a></li>
                                <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- Contact widget -->

                        <!-- Newsletter widget -->
                          <div class="footer-widget">
                            <h3 class="mb-20">Tags mới đây </h3>
                            <div class="populer-tags">
                                <ul>
                                <?php
                                $criteria = new CDbCriteria();
                                $criteria->condition = "Active = 1";
                                $criteria->limit = 7;
                                $data = Tags::model()->findAll($criteria);
                                foreach ($data as $key => $value) {
                                  # code...
                                
                                 ?>
                                    <li><a href="/tags/<?php echo $value->Alias ?>.html"><?php echo $value->Name ?></a></li>
                                    <?php } ?>
                                 
                                </ul>
                            </div>
                        </div>
                        <!-- Newsletter widget -->

                    </div>
                    <!-- widget -->

                    <!-- back To Button -->
                    <span id="scrollup" class="scrollup"><i class="fa fa-angle-up"></i></span>
                    <!-- back To Button -->
                    
                </div>
            </div>
        </div>
        <!-- Footer Columns -->

        <!-- Copyright Bar -->
        <div class="sub-footer">
            <div class="container">
                <div class="copyright-bar">
                    <p>ngoisaoxanh.vn <i class="fa fa-copyright"></i> 2016, All Rights Reserved</p>
                    <ul>
                         <li><a href="#">home</a></li>
                         <li><a href="#">about</a></li>
                         <li><a href="#">blog</a></li>
                         <li><a href="#">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Copyright Bar -->

        <!-- contact popup -->
     
         <!-- contact popup -->

    </footer>