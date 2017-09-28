<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Visitor */

$this->title = '访客详情：'.$model->id;
$this->params['breadcrumbs'][] = ['label' => '访客记录', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitor-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            [
                'label' => '职业',
                'value' => \backend\models\Visitor::$OCCUPATION[$model->occupation]
            ],
            'true_name',
            'mobile',
            'email:email',
            'create_time',
        ],
    ]) ?>

</div>
