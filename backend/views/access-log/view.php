<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AccessLog */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Access Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-log-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'occupation',
            'create_time',
        ],
    ]) ?>

</div>
