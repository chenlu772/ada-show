<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BrowseLogSearch */
/* @var $form yii\widgets\ActiveForm */

use dosamigos\datepicker\DatePicker;
?>

<div class="browse-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],
    ]); ?>

    <?= $form->field($model, 'page_url') ?>

    <?= $form->field($model, 'page_referrer') ?>

    <?= $form->field($model, 'browser') ?>

    <?= $form->field($model, 'user_ip') ?>

    <?php // echo $form->field($model, 'remote_port') ?>

    <?= $form->field($model, 'create_time')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => true,
        // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
