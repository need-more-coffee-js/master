<?php namespace frontend\controllers;


use frontend\models\Users;
use yii\rest\ActiveController;

class ApiController extends ActiveController
{
    public $modelClass = Users::class;
}