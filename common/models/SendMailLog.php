<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "send_mail_log".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string $create_time
 */
class SendMailLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'send_mail_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'email', 'subject', 'body'], 'required'],
            [['id', 'user_id', 'create_time'], 'integer'],
            [['name'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 32],
            [['subject'], 'string', 'max' => 64],
            [['body'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
            'create_time' => 'Create Time',
        ];
    }


    public function autoSave($model, $user_id){

        foreach($model as $key=>$value){
            if(in_array($key, array_values($this->attributes()))){
                $this->$key = $value;
            }
        }
        $this->user_id = $user_id;
        $this->create_time = date('YmdHis');
        $this->save(false);
    }
}
