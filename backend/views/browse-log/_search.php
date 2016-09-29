<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BrowseLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="browse-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'page_url') ?>

    <?= $form->field($model, 'page_referrer') ?>

    <?= $form->field($model, 'browser') ?>

    <?= $form->field($model, 'user_ip') ?>

    <?php // echo $form->field($model, 'remote_port') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
