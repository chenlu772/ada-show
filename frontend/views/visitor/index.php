<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/25
 * Time: 13:51
 */
use frontend\models\Visitor;

$this->title = '';
?>
<?php $this->beginBlock('css');?>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@static')?>/css/visitor.css">
<?php $this->endBlock();?>
<div id="web">
    <h1>请问您是?</h1>
    <ul>
        <?php foreach(Visitor::$OCCUPATION as $k=>$v) {?>
        <li value="<?= $k?>"><div><?= $v?></div></li>
        <?php }?>
    </ul>
    <input type="button" value="确定"  class="btn" disabled="disabled">
</div>
<?php $this->beginBlock('js');?>
<script>

    $("#web").find("ul").children("li").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        $(this).children("div").css("border","solid #286090 1px").parent().siblings().children("div").css("border","solid #999 1px");
        $("#web").find("input").prop("disabled",false).addClass('btn-primary');
    });

    $(".btn").click(function () {
        var occupation = $("#web ul li[class='on']").val();

        window.location.href = '<?= Yii::$app->urlManager->createUrl(['visitor/create', 'occupation'=>''])?>' + occupation;
    });
</script>
<?php $this->endBlock();?>
