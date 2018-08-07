<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/27
 * Time: 14:15
 */

namespace common\models;
use frontend\models\UserInfo;
use frontend\models\UserToken;
use yii;

class weChat
{

    const EXPIRES = 7*24*3600;

    public function jscode2session($code){

        $url = Yii::$app->params['jscode2session'].
            'appid='.Yii::$app->params['poetry_appId'].
            '&secret='.Yii::$app->params['poetry_appSecret'].
            '&js_code='.$code.
            '&grant_type=authorization_code';
        //$ret = CommonFunc::curlGet($url);

        $ret = [
            'session_key'=> 'LPwUCt9dBpy6tANXYrsFnQ==',
            'expires_in' => 7200,
            'openid'     => 'oXaXz0A-g8V3B6CUWIaoLNDnZ9PM'
        ];

        if (isset($ret['session_key'])){

            $tokenModel = new UserToken();
            $userInfo = [];
            if (isset($ret['openid'])) {

                $userInfo = UserInfo::find()
                    ->select(['user_id','open_id','union_id','session_key'])
                    ->andWhere(['open_id' => $ret['openid']])
                    ->one();

                if (empty($userInfo) && isset($ret['unionid'])) {
                    $userInfo = UserInfo::find()->where(['union_id' => $ret['unionid']])->one();
                }
            }

            if (empty($userInfo)){//新用户
                $data = [
                    'session_key'   => $ret['session_key'],
                    'union_id'      => isset($ret['unionid'])?$ret['unionid']:'',
                    'open_id'       => isset($ret['openid'])?$ret['openid']:'',
                ];

                $userModel = new UserInfo();
                $userModel->session_key = $data['session_key'];
                $userModel->union_id    = $data['union_id'];
                $userModel->open_id     = $data['open_id'];
                $user = $userModel->save(true);

                if ($user){
                    $token = strtoupper(md5($ret['session_key'].time()));
                    $expiresTime = time() + self::EXPIRES;

                    $tokenData = [
                        'user_id'   => $userModel->primaryKey,
                        'token'     => $token,
                        'expires_time'  => $expiresTime,
                    ];

                    if ($tokenModel->load($tokenData) && $tokenModel->save($tokenData)){
                        unset($tokenData['user_id']);
                        return $tokenData;
                    }
                }

            }else{//老用户

                $expiresTime = time() + self::EXPIRES;

                $tokenUser = UserToken::find()->andWhere(['user_id'=>$userInfo->user_id])->one();
                if (empty($tokenUser)){

                    $token = strtoupper(md5($userInfo->session_key.time()));

                    $tokenModel->user_id = $userInfo->user_id;
                    $tokenModel->token   = $token;
                    $tokenModel->expires_time = $expiresTime;

                    if (!$tokenModel->save()){
                        return false;
                    }
                }else{
                    $token = $tokenUser->token;
                    $tokenUser->expires_time = $expiresTime;
                    $tokenUser->save();
                }

                return $token;
            }

        }

        return false;
    }

}