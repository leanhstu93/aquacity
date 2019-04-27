<?php

class LoaikhachhangController extends Controller
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
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
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
		$model=new Loaikhachhang;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Loaikhachhang']))
		{
			$model->attributes=$_POST['Loaikhachhang'];
			if($model->save())
			{
				$ltl = new LoaikhachhangLang;
				$ltl->attributes=$_POST['LoaikhachhangLang'];
				$ltl->idLoaiKhachHang = $model->id;
				$ltl->idNgonNgu = 1;
				$ltl->Alias = Common::bodau($ltl->Name);
				$ltl->save();
				$ltl = new LoaikhachhangLang;
				$ltl->attributes=$_POST['LoaikhachhangLang_'];
				$ltl->idLoaiKhachHang = $model->id;
				$ltl->idNgonNgu = 2;
				$ltl->Alias = Common::bodau($ltl->Name);
				$ltl->save();
				$this->redirect(array('admin'));
			}
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Loaikhachhang']))
		{
			$model->attributes=$_POST['Loaikhachhang'];
			if($model->save())
			{
				$ltl = LoaikhachhangLang::model()->find("idNgonNgu = 1 and idLoaiKhachHang = $model->id");
				$ltl->attributes=$_POST['LoaikhachhangLang'];
				$ltl->idLoaiKhachHang = $model->id;
				$ltl->idNgonNgu = 1;
				$ltl->Alias = Common::bodau($ltl->Name);
				$ltl->save();
				$ltl = LoaikhachhangLang::model()->find("idNgonNgu = 2 and idLoaiKhachHang = $model->id");
				$ltl->attributes=$_POST['LoaikhachhangLang_'];
				$ltl->idLoaiKhachHang = $model->id;
				$ltl->idNgonNgu = 2;
				$ltl->Alias = Common::bodau($ltl->Name);
				$ltl->save();
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
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

		$count = Khachhang::model()->count("idLoaiKhachHang = $id");
		if($count > 0)
			throw new CHttpException(404,'Không thể xóa loại tin tức này.');
		$count = Loaikhachhang::model()->count("Parent = $id");
		if($count > 0)
			throw new CHttpException(404,'Không thể xóa loại tin tức này.');
		$this->loadModel($id)->delete();
		LoaikhachhangLang::model()->deleteAll("`idLoaiKhachHang` = :idl",array(":idl"=>$id));
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Loaikhachhang');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Loaikhachhang('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Loaikhachhang']))
			$model->attributes=$_GET['Loaikhachhang'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Loaikhachhang the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Loaikhachhang::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Loaikhachhang $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='Loaikhachhang-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
