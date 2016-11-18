<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VisitorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Visitors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitor-index">
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
            'true_name',
            'mobile',
            // 'email:email',
            // 'create_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
   		</div>
   	</div>
</div>
