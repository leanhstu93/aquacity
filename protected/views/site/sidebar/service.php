<?php
foreach ($data as $item) {
    ?>
    <section>
        <div class='title'>
            <?php echo $item->loaisanpham_lang->Name ?>
        </div>
        <div class='boxct'>
            <ul class='service_list'>
                <?php
                $criteria = new CDbCriteria();
                $criteria->with = "sanpham_lang";
                $criteria->condition ="Active = 1 and idNgonNgu = $this->lang" ;
                $criteria->limit = 16;
                $model = Sanpham::model()->findAll($criteria);
                $count = Sanpham::model()->count($criteria);
                if($count > 0){
                    foreach ($model as $item_child){
                        $router = Router::model()->find("idObject = ". $item_child->sanpham_lang->id ." AND type = ".Router::TYPE_PRODUCT);
                    }
                    ?>
                    <li>
                        <a title='<?php echo $item_child->sanpham_lang->Name  ?>'
                           href='<?php echo $router->alias ?>.html'>
                            <?php echo $item_child->sanpham_lang->Name  ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
    <?php
}
?>