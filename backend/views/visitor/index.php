<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VisitorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '访客记录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitor-index">

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
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            [
                'label' => '职业',
                'value' => function($data){
                    return \backend\models\Visitor::$OCCUPATION[$data->occupation];
                }
            ],
            'true_name',
            'mobile',
            'email:email',
            [
                'label' => '添加时间',
                'value' => function($data){
                    return date('Y-m-d H:i:s', strtotime($data->create_time));
                }
            ],

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}{delete}'],
        ],
    ]); ?>
   		</div>
   	</div>
</div>
