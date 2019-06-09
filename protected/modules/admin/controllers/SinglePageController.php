<?php

class SinglePageController extends Controller
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
        $model=new SinglePage;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        extract($_POST['SinglePage']);
        if(isset($_POST['SinglePage']))
        {
            $model->attributes=$_POST['SinglePage'];
            $model->date_create = time();
            if($model->save()) {
                $insert_id = Yii::app()->db->getLastInsertID();
                //xu ly node
                if(empty($alias)) {
                    $alias = Common::bodau($model->name);
                }
                //Xu ly node

                $router = Router::model()->find("alias = '$alias'");
                if(!empty($router)) {
                    $alias = $alias."-".$insert_id;
                }

                Router::processRouter(['alias' => $alias, 'idObject' => $insert_id, 'type' =>Router::TYPE_SINGLE_PAGE]);
                //end xu ly node
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
        $criteria = new CDbCriteria();
        $criteria->condition = "type = ".Router::TYPE_SINGLE_PAGE." AND idObject = ".$model->id;
        $router = Router::model()->find($criteria);
        if(isset($_POST['SinglePage']))
        {
            extract($_POST['SinglePage']);

            $model->attributes=$_POST['SinglePage'];
            if($model->save()){

                if(empty($alias)) {
                    $alias = Common::bodau($model->name);
                }
                $routerCheck = Router::model()->find("alias = '".$alias."' AND id != ".$router->id);
                if(!empty($routerCheck)) {
                    $alias = $alias."-".$model->id;

                }
                $router->alias = $alias;
                $router->save();
                $this->redirect(array('admin'));
            }
        }

        $this->render('update',array(
            'model'=>$model,
            'alias' => $router->alias,
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

        #xu ly router
        Router::processRouter(['alias' => '', 'idObject' => $id, 'type' => Router::TYPE_SINGLE_PAGE], 'delete');
        #End xu ly router

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('SinglePage');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new SinglePage('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['SinglePage']))
            $model->attributes=$_GET['SinglePage'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return SinglePage the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=SinglePage::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param SinglePage $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='single-page-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
