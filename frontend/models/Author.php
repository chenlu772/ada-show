<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/28
 * Time: 11:15
 */

namespace frontend\models;

class Author extends \common\models\Author
{

    public static function getAuthor($authorId){

        return self::findOne($authorId);
    }



}