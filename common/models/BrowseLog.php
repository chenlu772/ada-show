<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "browse_log".
 *
 * @property integer $id
 * @property string $page_url
 * @property string $page_referrer
 * @property string $browser
 * @property string $user_ip
 * @property integer $remote_port
 * @property string $create_time
 */
class BrowseLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'browse_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['remote_port', 'create_time'], 'integer'],
            [['page_url', 'page_referrer', 'browser'], 'string', 'max' => 255],
            [['user_ip'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_url' => 'Page Url',
            'page_referrer' => 'Page Referrer',
            'browser' => '浏览器',
            'user_ip' => '访问者IP',
            'remote_port' => '源端口号',
            'create_time' => '访问时间',
        ];
    }
}
