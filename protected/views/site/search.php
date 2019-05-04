<?php
$dk = new CDbCriteria;  
$dk->condition = "tieude like :tk or tomtat like :tk";	
$dk ->params =array(':tk'=>"%$tukhoa%");
$dk ->order = 'idbv DESC';
$dk->select ='idbv, tieude, tomtat, urlhinh, Ngay';		
$dulieu = new CActiveDataProvider('Baiviet', 
	array( 'criteria'=>$dk, 'pagination'=>array('pageSize'=>5), )	
);
$this->widget('zii.widgets.CListView', 
   array(
  'dataProvider'=>$dulieu,  'itemView'=>'search_1bv',   
	  'itemsTagName'=>'div', 'itemsCssClass'=>'bv',	   
  	  'pagerCssClass'=>'pages', 'summaryText'=>'',    
     'pager'=>array(
	      'prevPageLabel'=>'&lsaquo;', 'nextPageLabel'=>'&rsaquo;',
	      'firstPageLabel'=>'&laquo;', 'lastPageLabel'=>'&raquo;',
	      'header' =>'','selectedPageCssClass' => 'hienhanh'
	  )
)
);
