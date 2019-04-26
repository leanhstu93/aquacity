<?php
	/**
	* 
	*/
	class Toan_ckfinder extends Cwidget
	{
		public $basePath = '/filemanager';
		public $target;
		public $function;
		public $url;
        public $cs;
		public function init()
		{
			$this->cs = Yii::app()->clientScript;
			$this->url = Yii::app()->getBaseUrl(true).$this->basePath;
			$this->cs->registerScriptFile($this->url.'/ckfinder.js',CClientScript::POS_HEAD);
		}
        public function run()
        {
            if($this->function)
            {
                $script = 'jQuery("'.$this->target.'").click(function(e){
                   e.preventDefault();
                   CKFinder.popup({basePath:"'.$this->url.'",selectActionFunction:'.$this->function.'});
                });jQuery("#selectImages2").click(function(e){
                   e.preventDefault();
                   CKFinder.popup({basePath:"'.$this->url.'",selectActionFunction:setFile2});
                });';
            }
            else{
                $script = 'jQuery("'.$this->target.'").click(function(e){
                   e.preventDefault();
                   CKFinder.popup({basePath:"'.$this->url.'"});
                });jQuery("#selectImages2").click(function(e){
                   e.preventDefault();
                   CKFinder.popup({basePath:"'.$this->url.'"});
                });';
            }
            $this->cs->registerScript('ckfinder',$script,CClientScript::POS_END);
        }
		
	}