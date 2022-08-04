<?php

namespace frontend\controllers;

use frontend\models\Users;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        $model = Users::find()->all();
        //return $this->render('index',['model'=>$model]);

        $url = 'http://testapp/frontend/web/api';
        $curl_res = curl_init($url);
        curl_setopt($curl_res, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl_res, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_res, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl_res, CURLOPT_HEADER, false);
        $response = curl_exec($curl_res);
        $response_json = json_decode($response,true);

        curl_close($curl_res);
        return $this->render('index',['model'=>$model,'response'=>$response_json]);
    }
}