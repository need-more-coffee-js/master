<?php namespace frontend\controllers;


use frontend\models\Tusers;
use yii\web\Controller;
use yii\db\ActiveRecord;

class GenerateController extends Controller
{
    public function actionIndex()
    {
        if (isset($_POST['send']))
        {
            $text = $_POST['text_input'];
            $city = $_POST['city_input'];
            $date = $_POST['date_input'];
            $phone = $_POST['phone_input'];
            $avatar = $_POST['file_input'];

            $users = new Tusers();
            $users->user_name = $text;
            $users->city = $city;
            $users->date = $date;
            $users->phone = $phone;
//            $users->avatar = $avatar;
            $users->save();

//            $find = Tusers::find()->where(['user_id'=>1])->one();
//            var_dump($find);
        }
        return $this->render('index',['text'=>$text]);
    }
}