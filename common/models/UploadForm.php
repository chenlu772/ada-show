<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/14
 * Time: 16:24
 */
namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * UploadForm is the model behind the upload form.
 */
class UploadForm extends Model
{
    /**
     * @var UploadedFile file attribute
     */
    public $file;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['file'], 'file', 'extensions' => 'jpg, png, gif', 'mimeTypes' => 'image/jpeg, image/png, image/gif', 'maxFiles' => 4],
        ];
    }
}