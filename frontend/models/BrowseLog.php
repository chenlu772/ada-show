<?php

namespace frontend\models;

use Yii;

/**
 * ContactForm is the model behind the contact form.
 */
class BrowseLog extends \common\models\BrowseLog
{

    public function saveLog(){

        $this->page_url = empty(Yii::$app->request->absoluteUrl) ? '' : Yii::$app->request->absoluteUrl;
        $this->page_referrer = empty(Yii::$app->request->referrer)?'':Yii::$app->request->referrer;
        $this->user_ip = empty(Yii::$app->request->userIP) ? '' : Yii::$app->request->userIP;
        $this->remote_port = $_SERVER['REMOTE_PORT'];
        $this->browser = empty(Yii::$app->request->userAgent) ? '' : Yii::$app->request->userAgent;
        $this->create_time = date('YmdHis');
        $this->save();
    }

}