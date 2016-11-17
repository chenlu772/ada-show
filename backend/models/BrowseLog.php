<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/29
 * Time: 17:42
 */

namespace backend\models;

use Yii;

/**
 * ContactForm is the model behind the contact form.
 */
class BrowseLog extends \common\models\BrowseLog
{

    public function afterFind()
    {
        $this->create_time = date('Y-m-d H:i:s', strtotime($this->create_time));
        parent::afterFind();
    }

}