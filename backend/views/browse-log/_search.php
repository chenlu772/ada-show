<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
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

    <?= $form->field($model, 'page_url') ?>

    <?= $form->field($model, 'page_referrer') ?>

    <?= $form->field($model, 'browser') ?>

    <?= $form->field($model, 'user_ip') ?>

    <?php // echo $form->field($model, 'remote_port') ?>

    <?= $form->field($model, 'create_time_b')->widget(DateTimePicker::className(),
        [
            'template'=>"{input}{reset}{button}",
            'clientOptions' => [
                'autoclose' => true,
                'linkFormat' => 'yyyy-MM-dd', // if inline = true
                'format' => 'yyyy-mm-dd', // if inline = false
                'todayBtn' => true,
                'pickerPosition'=>"bottom-left",
                'language'=>'zh-CN',
                'minView'=>'month'
            ]
        ])->label('访问时间'); ?>
    -
    <?= $form->field($model, 'create_time_e')->widget(DateTimePicker::className(),
        [
            'template'=>"{input}{reset}{button}",
            'clientOptions' => [
                'autoclose' => true,
                'linkFormat' => 'yyyy-MM-dd', // if inline = true
                'format' => 'yyyy-mm-dd', // if inline = false
                'todayBtn' => true,
                'pickerPosition'=>"bottom-left",
                'language'=>'zh-CN',
                'minView'=>'month'
            ]
        ])->label(false); ?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
