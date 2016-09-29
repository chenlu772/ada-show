<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BrowseLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="browse-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'page_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page_referrer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'browser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remote_port')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
