<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 */
namespace backend\models;

use Yii;

/**
 * ContactForm is the model behind the contact form.
 */
class Visitor extends \common\models\Visitor
{

    public function afterFind()
    {
        $this->create_time = date('Y-m-d H:i:s', strtotime($this->create_time));
        parent::afterFind();
    }

}