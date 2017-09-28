<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/25
 * Time: 13:05
 */
namespace frontend\controllers;

use common\models\Base;
use frontend\models\Visitor;
use Yii;


class VisitorController extends BaseController {

    /*
     * 职业选择页
     * */
    public function actionIndex(){

        return $this->render('index');
    }

    /*
     * 访客信息填写页
     * */
    public function actionCreate(){
        $model = new Visitor();
        $model->user_id = $this->user_id;
        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()) && $model->save()){

            return $this->render('thanks');
        }else{
            $occupation = Yii::$app->request->get('occupation', 0);
            if(!in_array($occupation, array_keys(Visitor::$OCCUPATION))){
                $occupation = 0;
            }
            $model->occupation = $occupation;
            return $this->render('form', [
                'model' => $model,
            ]);
        }

    }

    public function actionInfo(){
        var_dump(Base::isMobile());
        var_dump(Base::isWeChatBrowser());

    }


}