<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/lam/jquery-ui.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/calendar/js/bootstrap-timepicker.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/calendar/js/jquery.ui.datepicker-vi.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/calendar/js/jquery-ui.multidatespicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/calendar/css/jquery-ui.structure.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/calendar/css/jquery-ui.theme.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/calendar/css/prettify.css" />

<script>

 jQuery(function($) {
	
	$('#FormTimKiem_ngaynhan').multiDatesPicker({
		maxPicks: 1,
		dateFormat: "dd-mm-yy",
	});

	$.datepicker._selectDateOverload = $.datepicker._selectDate;
    $.datepicker._selectDate = function (id, dateStr) {
        var target = $(id);
        var inst = this._getInst(target[0]);
        inst.inline = true;
        $.datepicker._selectDateOverload(id, dateStr);
        inst.inline = false;
        if (target[0].multiDatesPicker != null) {
            target[0].multiDatesPicker.changed = false;
        } else {
            target.multiDatesPicker.changed = false;
        }
        this._updateDatepicker(inst);
    };
			});
			
		
</script>


<script>
jQuery(document).ready(function($){
  
	$("#form-tim-kiem").submit(function() {
		$(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
		return true; 
	});
	
	$( "#form-tim-kiem" ).find( ":input" ).prop( "disabled", false );
	
});

</script>
<style>
#FormTimKiem_ngaythue,#FormTimKiem_socho{
	width:120px
	
}
#FormTimKiem_ngaythue:focus,#FormTimKiem_socho:focus{
	background:#fff;
}
#FormTimKiem_ngaynhan{
	width:180px;
}
#FormTimKiem_mucdichsudung{
	width:150px;
}
#FormTimKiem_hangxe{
	width:150px;
}
</style>

<?php if($idNgonNgu==2){
	$nn="en/";
}
else $nn="";

?>

<div class="middle_row row_white search_row">
		<div class="container">
		
		 <?php
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-tim-kiem',
	'enableClientValidation'=>true,
	'action'=> Yii::app()->createUrl('//danh-sach-xe/'.$nn.'tim-kiem/'),
	'method'=>'get',
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	 'htmlOptions'=>array(
        'class'=>'search_form clearfix',
    ),
	));
	?>
	
	<?php //dịch tiếng anh
    $trans_city="Chọn tỉnh/ thành phố";
    $trans_pickday="Chọn ngày";
    $trans_hangsanxuat="Chọn hãng xe";
    $trans_mucdich="Chọn mục đích";
    $label_tinhthanh="Chọn nơi nhận và trả xe";
    if($idNgonNgu==2){
        $trans_city="Choose Province/City";
        $trans_pickday="Pick day";
        $trans_hangsanxuat="Choose automobile manufacturer";
        $trans_mucdich="Choose purpose";
        $label_tinhthanh="Pick rent/pay location";
    }

    
    ?>
		
            	<div class="searchbox-item">
                     <label class="label_title"><?php echo $label_tinhthanh;?></label>
					<?php 
						echo $form->dropDownList($search,
													'tinhthanh', 
													CHtml::listData(Tinhthanh::model()->findAll(
																							), 'name', 'name'),
													array('empty'=>$trans_city,
															'class' => 'form-control',
															'name'=>'tinh-thanh',
															'id'=>'FormTimKiem_tinhthanh')); 
					?> 
                </div>
                
                <div class="searchbox-item">
                     <?php echo $form->labelEx($search,'ngaynhan',array('class'=>'label_title')); ?> 
					<?php echo $form->textField($search,'ngaynhan',array('class' => 'form-control',
																		'onkeydown'=>'return false;',
																		'placeholder'=>$trans_pickday,
																		'name'=>'ngay-nhan',
																		'id'=>'FormTimKiem_ngaynhan')); ?>
                </div>
                
                <div class="searchbox-item">
                   <?php echo $form->labelEx($search,'ngaythue',array('class'=>'label_title')); ?> 
				<?php echo $form->numberField($search,'ngaythue',array(
																		'class' => 'form-control',
																		'placeholder'=>0,
																		'name'=>'ngay-thue',
																		'id'=>'FormTimKiem_ngaythue'
																		)); ?>
                </div>

                <div class="searchbox-item">
                    <?php echo $form->labelEx($search,'socho',array('class'=>'label_title')); ?> 
					<?php echo $form->numberField($search,'socho',array('class' => 'form-control',
																		'placeholder'=>0,
																		'name'=>'cho-ngoi',
																		'id'=>'FormTimKiem_socho',
																		)); ?>
                </div>

                <div class="searchbox-item">
                    <?php echo $form->labelEx($search,'hangxe',array("class"=>"label_title")); ?> 
					<?php 
						echo $form->dropDownList(	$search,
													'hangxe', 
													CHtml::listData(Hangxe::model()->findAll(array(
													)), 'TenHang', 'TenHang'),
													array('empty'=>$trans_hangsanxuat,'class' => 'form-control','name'=>'hang-xe','id'=>'FormTimKiem_hangxe')); 
					?>
                </div>
                
                 <div class="searchbox-item">
                    <?php echo $form->labelEx($search,'mucdichsudung',array("class"=>"label_title")); ?> 
				<?php 
				echo $form->dropDownList(	$search,
											'mucdichsudung', 
											CHtml::listData(MucdichthuexeLang::model()->findAll(
																						array(
																								  'condition' => 'idNgonNgu=:idNgonNgu',
																								  'params'    => array(':idNgonNgu' => $idNgonNgu)
																							  )
																					), 'MucDich', 'MucDich'),
													array('empty'=>$trans_mucdich,'class' => 'form-control','name'=>'muc-dich','id'=>'FormTimKiem_mucdichsudung')); 
					?>
                </div>
                
				<div class="searchbox-item">
                    <?php echo $form->labelEx($search,'taixe',array("class"=>"label_title")); ?> 
					<?php 
						echo $form->dropDownList(	$search,
													'taixe', 
													array("0"=>"Không",
															"1"=>"Có",
															"2"=>"Có hoặc không",
															),
													array('empty'=>"Chọn",'class' => 'form-control','name'=>'tai-xe','id'=>'FormTimKiem_taixe')); 
					?>
                </div>
				
                
                <div class="searchbox-item searchbox-submit">
                	
         
					<input class="btn_search" type="submit" value="Tìm kiếm">
			
                </div>
		<?php $this->endWidget(); ?>
		
		
		</div>
	</div>
	
	<script>
jQuery(function($) {
	$("#FormTimKiem_gionhan").timepicker();

	
});

</script>