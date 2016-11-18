<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AccessLog */

$this->title = 'Update Access Log: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Access Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="access-log-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
