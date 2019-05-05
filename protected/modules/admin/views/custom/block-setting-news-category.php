<div class="col-md-12 col-lg-6">
    <div class="panel panel-default">
        <div class="panel-title">
            <h1>Cấu hình danh mục bài viết</h1>
            <ul class="panel-tools">
                <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
            </ul>
        </div>
        <div class="panel-body">
            <?php foreach ($data as $key_parent => $item){?>
                <div class="form-group">
                    <label class="col-sm-4 control-label form-label"><?php echo $item['name'] ?>:</label>
                    <div class="col-sm-8">
                        <?php
                        $criteria=new CDbCriteria();
                        $criteria->with=array("loaitin_lang");
                        $criteria->condition = "idNgonNgu = 1";
                        $loaitin= Loaitin::model()->findAll($criteria);
                        $listdata = CHtml::listData($loaitin,'id','loaitin_lang.Name');
                        ?>
                        <select name="Custom[CUSTOM_NEWS_CATEGORY][<?php echo $key_parent ?>][data]" class="selectpicker">
                            <?php
                            foreach ($listdata as $key => $name){
                                $selected = $key == $item['data'] ? $selected = 'selected' : '';
                                ?>
                                <option <?php echo $selected ?> value="<?php echo $key ?>">  <?php echo $name ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            <?php } ?>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <?php echo CHtml::submitButton('Lưu dữ liệu',['class' => 'btn btn-default']); ?>
                </div>
            </div>
        </div>
    </div>
</div>