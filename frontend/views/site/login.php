<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="padding-top: 20px">
    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>Please fill out the following fields to login:</p>-->

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    如果您忘记了密码，您可以 <?= Html::a('重置', ['site/request-password-reset']) ?>。
                </div>

                <div class="form-group">
                    <?= Html::submitButton('确定', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
