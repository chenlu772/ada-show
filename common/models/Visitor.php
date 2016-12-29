<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "visitor".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $occupation
 * @property string $true_name
 * @property integer $mobile
 * @property string $email
 * @property string $create_time
 */
class Visitor extends \yii\db\ActiveRecord
{

    public static $OCCUPATION = [
        '1' => 'HR',
        '2' => '开发',
        '3' => '测试',
        '4' => '产品',
        '5' => '猎头',
        '6' => '主管',
        '7' => '老板',
        '8' => '其他',
    ];


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visitor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'occupation', 'mobile', 'create_time'], 'integer'],
            [['occupation'], 'required'],
            [['true_name'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 64],
            ['email', 'email'],
            [['message'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'occupation' => '职业',
            'true_name' => '称呼',
            'mobile' => '手机号码',
            'email' => '邮件地址',
            'message' => '留言',
            'create_time' => '添加时间',
        ];
    }
}
