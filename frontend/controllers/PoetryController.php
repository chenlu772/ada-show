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
        print_r($model->jscode2session($code));

    }

    public function actionOnePoetry(){

        $model = new Poetry();
        $poetry= $model->getOnePoetry();

        print_r($poetry);
    }





}