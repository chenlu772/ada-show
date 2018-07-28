<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/27
 * Time: 14:15
 */

namespace common\models;
use yii;

class weChat
{

    public function jscode2session($code){

        $url = Yii::$app->params['jscode2session'].
            'appid='.Yii::$app->params['poetry_appId'].
            '&secret='.Yii::$app->params['poetry_appSecret'].
            '&js_code='.$code.
            '&grant_type=authorization_code';
        $ret = CommonFunc::curlGet($url);

        return $ret;
    }

}