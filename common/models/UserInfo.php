<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/28
 * Time: 18:12
 */

namespace common\models;

class UserInfo extends \yii\db\ActiveRecord
{


    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['open_id', 'union_id', 'session_key'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'ID',
            'open_id' => 'openId',
            'union_id' => 'unionId',
            'session_key' => '',
            'create_at' => '创建时间',
        ];
    }

}