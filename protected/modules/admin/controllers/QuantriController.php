<?php

class QuantriController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return Common::phanquyen(16);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Quantri;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Quantri']))
		{
			Common::setFileLog($model->id);
			$_POST['Quantri']['NgayDangKy'] = strtotime("now");

			$model->attributes=$_POST['Quantri'];
			$model->MatKhau = md5($_POST['Quantri']["MatKhau"]);
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		if($id == Yii::app()->user->getState('iduser'))
			$this->redirect(array('admin'));
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Quantri']))
		{
			$_POST['Quantri']['NgayDangKy'] = strtotime("now");
			if($model->MatKhau != $_POST['Quantri']["MatKhau"])
				$_POST['Quantri']["MatKhau"] = md5($_POST['Quantri']["MatKhau"]);
			$model->attributes=$_POST['Quantri'];

			
			if($model->save())
			{
				Common::setFileLog($model->id);
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	public function actionSuataikhoan()
	{
		$id = Yii::app()->user->getState('iduser');
		$model=$this->loadModel($id);
		Common::setFileLog($model->id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Quantri']))
		{
			$_POST['Quantri']['NgayDangKy'] = strtotime("now");
			if($model->MatKhau != $_POST['Quantri']["MatKhau"])
				$_POST['Quantri']["MatKhau"] = md5($_POST['Quantri']["MatKhau"]);
			$model->attributes=$_POST['Quantri'];

			
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('suataikhoan',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if($id == Yii::app()->user->getState('iduser'))
			$this->redirect(array('admin'));
		$this->loadModel($id)->delete();
		Common::setFileLog($id);
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Quantri');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Quantri('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Quantri']))
			$model->attributes=$_GET['Quantri'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Quantri the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Quantri::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Quantri $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='quantri-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
