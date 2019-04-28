<?php

class TintucController extends Controller
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
				'users'=>array(''),
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
		$model=new Tintuc;
		$tt = new TintucLang;
        $tt_ = new TintucLang;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tintuc']))
		{

			$model->idNguoiDang = Yii::app()->user->getState("iduser");
			$model->attributes=$_POST['Tintuc'];
			
			if(!is_array($model->idTags))
				$model->idTags = array(0);
			$model->idTags = json_encode($model->idTags);
			
			$getdate = getdate();
			$model->Date = $getdate[0];
			
			if($model->save())
			{
				/*
				if($model->UrlImage != '')
				{
					$file = basename($model->UrlImage);
					Common::resizeform($file,58,58);
					Common::resizeform($file,80,60);
					Common::resizeform($file,90,70);
					Common::resizeform($file,530,370);
				}
				*/
				$tt = new TintucLang;
				$tt->attributes=$_POST['TintucLang'];
				$tt->Name = trim($tt->Name);
				$tt->idTinTuc = $model->id;
				$tt->idNgonNgu = 1;
				$tt->Alias = Common::bodau($tt->Name);
				if($tt->save())
				{
					$tt->Alias = $tt->Alias."-".$tt->id;
					$tt->save();
					$tt_ = new TintucLang;
					$tt_->attributes=$_POST['TintucLang_'];
					$tt_->Name = trim($tt_->Name);
					$tt_->idTinTuc = $model->id;
					$tt_->idNgonNgu = 2;
					$tt_->Name = $model->id;
					$tt_->Alias = Common::bodau($tt_->Name);
					if($tt_->save())
					{
						$tt_->Alias = $tt_->Alias."-".$tt_->id;
						$tt_->save();
						$this->redirect(array('admin'));
					}
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'tt'=>$tt,
			'tt_'=>$tt_
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

		$tt = TintucLang::model()->find("idNgonNgu = 1 and idTinTuc = $model->id");
        $tt_ = TintucLang::model()->find("idNgonNgu = 2 and idTinTuc = $model->id");
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Tintuc']))
		{	 
			$model->idNguoiDang = Yii::app()->user->getState("iduser");
			$model->attributes=$_POST['Tintuc'];
			
			TagsTintuc::model()->deleteAll("`idTinTuc` = :id",array(":id"=>$id));
			/*if(is_array($model->idTags))
			{
				foreach ($model->idTags as $key => $value) {
					# code...
					$tags= new TagsTintuc;
					$tags->idTinTuc = $id;
					$tags->idTags = $value;
					$tags->save();
				}
			}
			*/
			if(!is_array($model->idTags))
				$model->idTags = array(0);
			$model->idTags = json_encode($model->idTags);
			if($model->save())
			{
				/*if($model->UrlImage != '')
				{
					$file = basename($model->UrlImage);
					Common::resizeform($file,58,58);
					Common::resizeform($file,80,60);
					Common::resizeform($file,90,70);
					Common::resizeform($file,530,370);
				}
				*/
				$tt = TintucLang::model()->find("idTinTuc = $id and idNgonNgu = 1");
				$tt->attributes=$_POST['TintucLang'];
				$tt->Alias = Common::bodau($tt->Name);
				if($tt->save())
					{
						$tt->Alias = $tt->Alias."-".$tt->id;
						$tt->save();
						$tt_ = TintucLang::model()->find("idTinTuc = $id and idNgonNgu = 2");
						$tt_->attributes=$_POST['TintucLang_'];
						$tt_->Name = $model->id;
						$tt_->Alias = Common::bodau($tt_->Name);
						if($tt_->save())
						{
							$tt_->Alias = $tt_->Alias."-".$tt_->id;
							$tt_->save();
							$this->redirect(array('admin'));
						}
					}
			}
		}
		$this->render('update',array(
			'model'=>$model,
			'tt' => $tt,
			'tt_' => $tt_
		));
	}
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
		TintucLang::model()->deleteAll("idTinTuc = $id");
		TagsTintuc::model()->deleteAll("idTinTuc = $id");
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Tintuc');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tintuc('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tintuc']))
			$model->attributes=$_GET['Tintuc'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tintuc the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tintuc::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tintuc $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tintuc-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
