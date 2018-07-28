<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/28
 * Time: 11:15
 */
namespace common\models;

class Author extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at'], 'integer'],
            [['name', 'dynasty'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'author_id' => 'ID',
            'name' => '姓名',
            'dynasty' => '朝代',
            'create_at' => '添加时间',
        ];
    }




}