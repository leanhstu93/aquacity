<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
		//check user login them
		if(Yii::app()->user->isGuest){ 
			Yii::app()->theme = 'login';}
		else
		{
			//theme admin
			Yii::app()->clientScript->registerCoreScript('jquery');
			Yii::app()->theme = 'admin';
			$this->layout = '//layouts/main';
		}
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
