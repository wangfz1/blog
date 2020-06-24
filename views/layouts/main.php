<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$assets = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <?php foreach($assets->css as $v) :?>
        <link rel="stylesheet" href="<?= $v ?>">
    <?php endforeach; ?>
</head>
<body class="layui-layout-body" style="background-image:url('pics/shanghai.jpg');">
<div class="layui-layout layui-layout-admin" style="">
<!--    <div class="layui-header" style="margin-left: 400px;height:150px;opacity: 70%">-->
<!--        <ul class="layui-nav layui-layout-left">-->
<!--            <li class="layui-nav-item"><a href="">控制台</a></li>-->
<!--            <li class="layui-nav-item"><a href="">商品管理</a></li>-->
<!--            <li class="layui-nav-item"><a href="">用户</a></li>-->
<!--            <li class="layui-nav-item">-->
<!--                <a href="javascript:;">其它系统</a>-->
<!--                <dl class="layui-nav-child">-->
<!--                    <dd><a href="">邮件管理</a></dd>-->
<!--                    <dd><a href="">消息管理</a></dd>-->
<!--                    <dd><a href="">授权管理</a></dd>-->
<!--                </dl>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->

    <div class="layui-side layui-bg-black" style="margin-top: -60px;width:400px;opacity: 85%">
        <div class="layui-side-scroll" style="width: 400px;">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                <legend style="color: white">Fanzhou Wang</legend>
            </fieldset>
            <ul class="layui-nav layui-nav-tree"  style="width: 400px;height:85%;background-image: inherit">
                <img src = "pics/avatar.jpg" class="layui-circle"  style="width: 320px;height:38%;margin:20px 40px 20px 40px;"/>

                <li class="layui-nav-item" style="margin:0 0 50px 50px"><a href="/education" style="font-size: 25px;"><img src="svg/education.svg" style="padding-bottom:5px;height:100%;width:45px"/> Education</a></li>
                <li class="layui-nav-item" style="margin:0 0 50px 50px"><a href="/interests" style="font-size: 25px"><img src="svg/interest.svg" style="padding-bottom:5px;height:100%;width:45px"/> Interests</a></li>
                <li class="layui-nav-item" style="margin:0 0 50px 50px"><a href="/travels" style="font-size: 25px"><img src="svg/travel.svg" style="padding-bottom:5px;height:100%;width:45px"/> Travels</a></li>
            </ul>

            <ul class="layui-nav layui-row"  style="width: 400px;background-image: inherit">
                <li class="layui-nav-item">
                    <a href="/education" style=""><img src="svg/instagram.svg" style="padding-bottom:5px;height:100%;width:45px"/> <b>insta</b></a>
                </li>
                <li class="layui-nav-item">
                    <a href="/education" style=""><img src="svg/webo.svg" style="padding-bottom:5px;height:100%;width:45px"/> <b>webo</b></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-body" style="margin:-40px 20px -30px 220px;background-color: white;opacity: 80%">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">内容主体区域</div>
    </div>

</div>
<?php foreach($assets->js as $v) :?>
    <script src="<?= $v ?>"></script>
<?php endforeach; ?>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>
<?php $this->endPage() ?>
