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
            return $this->success($wechatData);
        }

        return $this->fail('操作失败');
    }

    public function actionOnePoetry(){

        $userId = Yii::$app->session->get('user_id');
        if (!$userId){
            return $this->fail('未授权登录');
        }

        $model = new Poetry();
        $poetry= $model->getOnePoetry($userId);

        return $this->success($poetry);
    }
}