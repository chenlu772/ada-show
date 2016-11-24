<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '关于我们';
//$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginBlock('css');?>
<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@static')?>/css/about.css">
<?php $this->endBlock();?>
<div class="site-about" style="padding-top: 20px">
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="about">
        <div id="main_one">
            <h3>关于CH-LU</h3>
            <p>
                CH-LU(<a href="http://www.ch-lu.com">www.ch-lu.com</a>)是一个个人网站，用于学习、交流、个人展示等等方面。
            </p>
        </div>
        <div id="main_two">
            <h3>网站建设</h3>
            <p><span>前端开发：</span><span> cugerchen@foxmail.com</span></p>
            <p><span>后端开发：</span><span> ada@ch-lu.com</span></p>
        </div>
    </div>
</div>
