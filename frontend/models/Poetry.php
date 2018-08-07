<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/27
 * Time: 13:47
 */
namespace frontend\models;

use Yii;
class Poetry extends \common\models\Poetry
{

    public function getOnePoetry(){

        $poetry = '';
        while (empty($poetry)){
            $randNum = rand(1, Yii::$app->params['poetry_maxNum']);
            $poetry  = Poetry::find()
                ->select(['poetry_id','author_id','title','content'])
                ->where(['poetry_id'=>$randNum])->asArray()->one();
        }
        $authorId = $poetry['author_id'];
        $author = Author::getAuthor($authorId);

        $poetry['author'] = '';
        $poetry['dynasty']= '';

        if (!empty($author)){
            $poetry['author'] = $author['name'];
            $poetry['dynasty']= $author['dynasty'];
        }

        return $poetry;
    }



}