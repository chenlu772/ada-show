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
            <img src="<?=Yii::getAlias('@static')?>/img/ch-lu.png" />
        </div>
<!--        <div id="index-nav">
            <a href="?"><span class="ring">我是伯乐</span></a>
            <a href="?"><span class="ring">我是千里马</span></a>
            <a href="?"><span class="ring">留下足迹</span></a>
        </div>-->
        <div id="main">
            <p><a href="#">自我陈述</a></p>
            <p><a href="http://blog.csdn.net/ch_lu" target="_blank">我的博客</a></p>
            <p><a href="https://github.com/chenlu772" target="_blank">我的项目</a></p>
            <p><a href="#">留下足迹</a></p>
        </div>

    </div>

</div>
<?php $this->beginBlock('js');?>
<script src="<?=Yii::getAlias('@static')?>/js/jquery-3.1.1.js"></script>
<script src="<?=Yii::getAlias('@static')?>/js/index.js"></script>
<?php $this->endBlock();?>
