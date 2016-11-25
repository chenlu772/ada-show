<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/25
 * Time: 14:53
 */
/* @var $model frontend\models\Visitor */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '您愿意留下您的联系方式吗？'
?>
<div class="visitor-form" style="padding-top: 20px">

    <?php $form = ActiveForm::begin()?>

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $form->field($model, 'true_name')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'message')->textarea(['maxlength' => true])?>

    <?= $form->field($model, 'occupation')->hiddenInput()->label(false)?>

    <div class="form-group">
        <?= Html::submitButton('确定', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
