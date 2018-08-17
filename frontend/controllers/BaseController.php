<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/25
 * Time: 13:26
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\BrowseLog;

class BaseController extends Controller {

    public $user_id;
    public $username;

    public function beforeAction($action)
    {
        if(empty($this->user_id) && empty($this->username)){
            $this->user_id = intval(Yii::$app->session->get(Yii::$app->params['user_id']));
            $this->username = Yii::$app->session->get(Yii::$app->params['username']);
        }

        return parent::beforeAction($action);
    }


    public function afterAction($action, $result)
    {
        (new BrowseLog())->saveLog();
        return parent::afterAction($action, $result);
    }


    public function success($data)
    {
        return json_encode([
            'status'    => 0,
            'data'      => $data,
        ]);
    }

    public function fail($msg)
    {
        return json_encode([
            'status'    => 0,
            'msg'      => $msg,
        ]);
    }
}