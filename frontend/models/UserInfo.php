<<<<<<< HEAD
<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/28
 * Time: 18:15
 */

namespace frontend\models;

class UserInfo extends \common\models\UserInfo
{

    public function beforeSave($insert)
    {

        $this->create_at = date('YmdHis');

        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }


=======
<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/28
 * Time: 18:15
 */

namespace frontend\models;

class UserInfo extends \common\models\UserInfo
{

    public function beforeSave($insert)
    {

        $this->create_at = date('YmdHis');

        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }


>>>>>>> 7f73e4eca1eb12e73efc533695b3f68c42c055d5
}