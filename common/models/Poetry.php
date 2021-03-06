<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/27
 * Time: 13:48
 */
namespace common\models;

use Yii;
class Poetry extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'p_poetry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id'], 'integer'],
            [['title'], 'string', 'max' => 128],
            [['content'], 'string', 'max' => 6000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'poetry_id' => 'ID',
            'author_id' => '作者',
            'title' => '标题',
            'content' => '内容',
            'source' => '来源',
            'create_at' => '创建时间',
        ];
    }

}