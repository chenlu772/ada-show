<?php
/**
 * Created by PhpStorm.
 * User: Lu.Chen
 * Date: 2018/8/20
 * Time: 11:03
 */
namespace common\models;

use Yii;
class UserPoetry extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'p_user_poetry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id','poetry_id'], 'integer'],
            [['date'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_poetry_id' => 'ID',
            'user_id' => '用户ID',
            'poetry_id' => '诗词ID',
            'date' => '日期',
            'create_at' => '创建时间',
        ];
    }

}