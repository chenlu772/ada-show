<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "access_log".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $occuption
 * @property string $create_time
 */
class AccessLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'access_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'occupation', 'create_time'], 'integer'],
            [['occupation', 'create_time'], 'required'],
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
            'create_time' => 'Create Time',
        ];
    }
}
