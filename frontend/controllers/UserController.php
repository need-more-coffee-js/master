<?php

namespace frontend\controllers;

use common\models\User;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        $model = User::find()->all();

        return $this->render('index',['model'=>$model]);
    }
}