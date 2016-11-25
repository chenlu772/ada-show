<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/25
 * Time: 13:51
 */

$this->title = '';
?>
<?php $this->beginBlock('css');?>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@static')?>/css/visitor.css">
<?php $this->endBlock();?>
<div id="web">
    <h1>请问您是?</h1>
    <ul>
        <li>HR</li>
        <li>开发</li>
        <li>测试</li>
        <li>产品</li>
        <li>猎头</li>
        <li>主管</li>
        <li>老板</li>
        <li>其他</li>
    </ul>

</div>

