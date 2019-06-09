<section id="ourhome">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_thumbs" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <?php
                $slide = Hinhanh::getDataByCustomSetting('slide');
                foreach ($slide->hinhanh as $value){
                ?>
                <!-- SLIDE  -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-thumb="images/banner-classic-2.jpg">

                    <!-- MAIN IMAGE -->
                    <img src="<?php echo $value->url_image ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYER NR. 1 -->

                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['15','15','15','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-100']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['center','center','center','center']" data-splitin="none" data-splitout="none"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1 class="text-capitalize fontbold">
                            <span class="gradient_color_three"><?php echo $value->name ?> </span>
                        </h1>
                    </div>
                    <div class="tp-caption tp-resizeme whitecolor" data-x="['center','center','center','center']" data-hoffset="['15','15','15','0']" data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','40']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['center','center','center','center']" data-fontsize="['24','24','20','20']" data-splitin="none" data-splitout="none"
                         data-frames='[{"delay":1800,"speed":2400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h4 class="darkcolor font-light text-center"><?php echo $value->description ?></h4>
                    </div>
                </li>
                <?php } ?>
                <!-- SLIDE 2  -->
            </ul>
        </div>
    </div>
</section>