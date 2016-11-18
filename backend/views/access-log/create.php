<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AccessLog */

$this->title = 'Create Access Log';
$this->params['breadcrumbs'][] = ['label' => 'Access Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="access-log-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
