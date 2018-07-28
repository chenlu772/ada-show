<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/7/27
 * Time: 11:52
 */

$this->title = '';
?>
<?php $this->beginBlock('css');?>
<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@static')?>/css/index.css">
<?php $this->endBlock();?>



<?php $this->beginBlock('js');?>
<script src="<?=Yii::getAlias('@static')?>/js/jquery-3.1.1.js"></script>
<script src="<?=Yii::getAlias('@static')?>/js/index.js"></script>
<?php $this->endBlock();?>
