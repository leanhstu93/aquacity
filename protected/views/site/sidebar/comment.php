<section>
    <div class="title">Bình Luận Mới Nhất</div>
    <div class="boxct">
        <ul id="recentcomments">
            <?php
            foreach ($data->post as $item) {
                $router = Router::model()->find("idObject = ". $item->tintuc_lang->id ." AND type = ".Router::TYPE_NEWS);
            ?>
            <li class="recentcomments">
                <span class="comment-author"><b>Bác Sĩ Tư Vấn</b></span> on
                <a style="color:#136fa7;font-weight:600;"
                   href="<?php echo $router->alias ?>.html">
                    <?php echo $item->tintuc_lang->Name ?>
                </a>
                <span class="comment-content">
                    <?php echo Common::getDescription($item->tintuc_lang->Description,100).'...'; ?>
                    <a href="<?php echo $router->alias ?>.html"
                       class="more-comment">Xem thêm >></a></span></li>
            <?php } ?>
        </ul>
    </div>
</section>