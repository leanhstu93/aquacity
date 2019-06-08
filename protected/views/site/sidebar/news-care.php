<section>
    <div class='title'>
        <a href='<?php echo $routerCateNews->alias ?>.html'>
            <?php echo $data->category->loaitin_lang->Name  ?>
        </a>
    </div>
    <div class='boxct'>
        <ul class='sb_new'>
            <?php
            foreach ($data->post as $item) {
                $router = Router::model()->find("idObject = ". $item->tintuc_lang->id ." AND type = ".Router::TYPE_NEWS);
                ?>
                <li>
                    <a title='<?php echo $item->tintuc_lang->Name ?>'
                       href='<?php echo $router->alias ?>.html'>
                        <img src='<?php echo $item->UrlImage ?>'
                             alt='<?php echo $item->tintuc_lang->Name ?>'
                             Title='<?php echo $item->tintuc_lang->Name ?>'>
                        <span><?php echo $item->tintuc_lang->Name ?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>