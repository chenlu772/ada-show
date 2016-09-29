<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BrowseLog */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Browse Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="browse-log-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'page_url:url',
            'page_referrer',
            'browser',
            'user_ip',
            'remote_port',
            'create_time',
        ],
    ]) ?>

</div>
