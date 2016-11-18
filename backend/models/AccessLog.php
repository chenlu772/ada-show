<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/17
 * Time: 14:53
 */
namespace backend\models;

use Yii;

/**
 * ContactForm is the model behind the contact form.
 */
class AccessLog extends \common\models\AccessLog
{

    public function afterFind()
    {
        $this->create_time = date('Y-m-d H:i:s', strtotime($this->create_time));
        parent::afterFind();
    }

}