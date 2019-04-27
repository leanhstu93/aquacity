<?php

class LoginController extends AdminController
{
    public function actionIndex()
    {
        $model = new LoginForm;
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                Yii::app()->request->redirect(Yii::app()->user->returnUrl);
            }
        }
        Yii::app()->theme = 'login';
        $this->render('index', array('model' => $model));
    }
}