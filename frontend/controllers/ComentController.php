<?php

namespace frontend\controllers;

use yii\web\Controller;

class ComentController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}