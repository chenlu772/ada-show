<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/14
 * Time: 16:27
 */
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin([
        'action'    => Yii::$app->urlManager->createUrl('site/upload-img'),
        'options' => ['enctype' => 'multipart/form-data']
]) ?>
<?= $form->field($model, 'file')->fileInput() ?>
<?php //$form->field($model, 'file[]')->fileInput(['multiple' => true]) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>