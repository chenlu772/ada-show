<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/18
 * Time: 14:45
 */
namespace frontend\models;

use Yii;

/**
 * ContactForm is the model behind the contact form.
 */
class Visitor extends \common\models\Visitor
{

    public function beforeSave($insert)
    {
        $this->create_time = date('YmdHis');
        return parent::beforeSave($insert);
    }

}