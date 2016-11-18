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
            [['occupation', 'create_time'], 'required'],
            [['true_name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID，对应user表的id字段',
            'occupation' => '职业',
            'true_name' => 'True Name',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'create_time' => 'Create Time',
        ];
    }
}
