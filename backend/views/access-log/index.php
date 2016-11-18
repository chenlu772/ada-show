<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AccessLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '访问记录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-log-index">

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
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'occupation',
            'create_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
   		</div>
   	</div>
</div>
