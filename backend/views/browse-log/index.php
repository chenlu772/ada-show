<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BrowseLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '浏览记录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="browse-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="box box-success">
        <div class="box-body">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>

    <div class="box box-success">
        <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [

            'id',
            [
                'label' =>'当前访问',
                'format'=> 'raw',
                'value' => function($data){
                    if(mb_strlen($data->page_url, 'utf-8') > 71){
                        return mb_substr($data->page_url, 21, 50, 'utf-8').'...';
                    }else{
                        return mb_substr($data->page_url, 21, 50, 'utf-8');
                    }
                }
            ],
            [
                'label' =>'来自',
                'format'=> 'raw',
                'value' => function($data){
                    if(mb_strlen($data->page_referrer, 'utf-8') > 71){
                        return mb_substr($data->page_referrer, 21, 50, 'utf-8').'...';
                    }else{
                        return mb_substr($data->page_referrer, 21, 50, 'utf-8');
                    }
                }
            ],
            [
                'label' =>'浏览器',
                'format'=> 'raw',
                'value' => function($data){
                    if(mb_strlen($data->browser, 'utf-8') > 50){
                        return mb_substr($data->browser, 0, 47, 'utf-8').'...';
                    }else{
                        return $data->browser;
                    }
                }
            ],
            'user_ip',
            'remote_port',
            'create_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
    </div>
</div>
