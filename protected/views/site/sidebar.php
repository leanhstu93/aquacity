<aside>
    <!-- SERVICE STRAT -->
    <?php
    $criteria = new CDbCriteria();
    $criteria->with = "loaisanpham_lang";
    $criteria->condition ="Active = 1 and idNgonNgu = $this->lang" ;
    $criteria->limit = 16;
    $data = Loaisanpham::model()->findAll($criteria);
    $count = Loaisanpham::model()->count($criteria);
    // Common::debug($model);
    if($count > 0) {
        $this->renderPartial('sidebar/service', ['data' => $data], false);
    }
    ?>
    <?php
    $data = Loaitin::getDataByCustomSetting('list_care');
    $routerCateNews = Router::model()->find("idObject = ". $data->category->loaitin_lang->id ." AND type = ".Router::TYPE_NEWS_CATEGORY);
    if(!empty($data->post)){
    ?>
        <?php $this->renderPartial('sidebar/news-care',[ 'data' =>$data ,'routerCateNews' => $routerCateNews],false); ?>

    <?php } ?>
    <!-- SERVICE END -->

    <!-- VIDEO START -->
    <?php
    $hinhanh = Hinhanh::getDataByCustomSetting('trang_con_banner_video_sidebar');
    if(!empty($hinhanh->hinhanh)){
        ?>
        <?php $this->renderPartial('sidebar/video',[ 'data' => $hinhanh],false); ?>
    <?php } ?>
    <!-- VIDEO END -->

    <!-- Truoc -sau nang mui -->
    <?php
    $hinhanh = Hinhanh::getDataByCustomSetting('trang_con_banner_truoc_sau_nang_mui');

    if(!empty($hinhanh->hinhanh)) {
    ?>
        <?php $this->renderPartial('sidebar/truoc-sau-nang-mui',[ 'data' => $hinhanh],false); ?>
    <?php } ?>
    
    <?php
    $criteria = new CDbCriteria();
    $criteria->with = "tintuc_lang";
    $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
    $criteria->order = "t.id desc";
    $criteria->limit = 5;
    $tintuc = Tintuc::model()->findAll($criteria);
    if(!empty($tintuc)) {
        $this->renderPartial('sidebar/news-new', ['data' => $tintuc], false);
    }
    ?>
    <!-- SERVICE END -->

    <?php $data = Loaitin::getDataByCustomSetting('list_comment'); ?>
    <?php
    if(!empty($data)) {
        $this->renderPartial('sidebar/comment', ['data' => $data], false);
    }
    ?>


</aside>