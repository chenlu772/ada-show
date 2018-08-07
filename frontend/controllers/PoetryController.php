<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/27
 * Time: 11:47
 */
namespace frontend\controllers;

use frontend\models\Poetry;
use Yii;
use common\models\weChat;

class PoetryController extends BaseController{


    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionOnLogin(){

        $code = Yii::$app->request->get('code');

        $model = new weChat();
        $wechatData = $model->jscode2session($code);

        if ($wechatData){
            return json_encode($wechatData);
        }

        return false;
    }

    public function actionOnePoetry(){

        $model = new Poetry();
        $poetry= $model->getOnePoetry();

        return json_encode($poetry);
    }





}