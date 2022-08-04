<?php

namespace frontend\models;

use yii\base\Model;
use Yii;
use yii\db\ActiveRecord;


/**
 * User model
 *
 * @property string $user_name
 * @property string $city
 * @property int $phone
 * @property int $date
 */
class Tusers extends ActiveRecord
{
//    public $user_name;
//    public $date;
//    public $city;
//    public $phone;
//    public $avatar;

    public static function tableName(): string
    {
        return '{{t_users}}';
    }

    public function rules(): array
    {
        return [
            [['user_name','city','phone','date'],'required']
        ];
    }

}