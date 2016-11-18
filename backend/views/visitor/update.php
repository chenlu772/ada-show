<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Visitor */

$this->title = 'Update Visitor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Visitors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visitor-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
