<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/14
 * Time: 16:27
 */
use yii\widgets\ActiveForm;
?>

<?php /*$form = ActiveForm::begin([
        'action'    => Yii::$app->urlManager->createUrl('site/upload-img'),
        'options' => ['enctype' => 'multipart/form-data']
]) */?><!--
<?/*= $form->field($model, 'file')->fileInput() */?>
<?php /*//$form->field($model, 'file[]')->fileInput(['multiple' => true]) */?>

    <button>Submit</button>

--><?php /*ActiveForm::end() */?>

<?php $this->beginBlock('css');?>
    <title>css3 transform属性相册图片墙</title>
    <link href="<?=Yii::getAlias('@static')?>/css/style.css" type="text/css" rel="stylesheet">
<?php $this->endBlock();?>

<div class="site-upload">
<div class="container">
    <img src="<?=Yii::getAlias('@static')?>/img/mm2.jpg" class="pic1"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm2.jpg" class="pic2"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm3.jpg" class="pic3"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm4.jpg" class="pic4"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm5.jpg" class="pic5"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm6.jpg" class="pic6"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm7.jpg" class="pic7"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm8.jpg" class="pic8"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm9.jpg" class="pic9"  />
    <img src="<?=Yii::getAlias('@static')?>/img/mm10.jpg" class="pic10"  />
</div>
</div>
