<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/28
 * Time: 18:12
 */

namespace common\models;

class UserInfo extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'user_info';
    }


}