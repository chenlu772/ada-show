<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/29
 * Time: 13:21
 */

namespace frontend\models;

class UserToken extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'p_user_token';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id','expires_time'], 'integer'],
            [['token'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_token_id' => 'ID',
            'user_id' => '用户ID',
            'token' => 'token',
            'expires_time' => '过期时间',
        ];
    }

}