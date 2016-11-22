<?php

/* @var $this yii\web\View */

$this->title = '';
?>
<?php $this->beginBlock('css');?>
<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@static')?>/css/index.css">
<?php $this->endBlock();?>
<div class="site-index">
    <div id="web">
        <div id="banner">
            <img src="<?=Yii::getAlias('@static')?>/img/art_ch-lu.png" />
        </div>
        <nav id="index-nav">
            <a href="?">栏目一</a>
            <a href="?">栏目二</a>
            <a href="?">栏目三</a>
        </nav>
        <div id="main">
            <p><a href="#">自我陈述</a></p>
            <p><a href="#">个性展示</a></p>
            <p><a href="#">我的博客</a></p>
            <p><a href="#">分享空间</a></p>
            <p><a href="#">友情链接</a></p>
        </div>

    </div>

</div>
<?php $this->beginBlock('js');?>
<script src="<?=Yii::getAlias('@static')?>/js/jquery-3.1.1.js"></script>
<script src="<?=Yii::getAlias('@static')?>/js/index.js"></script>
<?php $this->endBlock();?>
