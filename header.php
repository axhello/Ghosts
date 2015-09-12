<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <title><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/screen.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="home-template nav-closed">
    <div class="nav">
        <h3 class="nav-title"><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span><span class="memu2">菜单</span></h3>
        <a href="#" class="nav-close">
            <span class="hidden">关闭</span>
        </a>
        <ul>
            <li class="nav-" role="presentation">
                <a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php $this->widget('Widget_Contents_Page_List')
            ->parse('<li class="nav-"><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
        <a class="subscribe-button" href="#">订阅</a>
    </div>
    <span class="nav-cover"></span>
    <div class="site-wrapper">
        <header class="main-header">
            <nav class="main-nav overlay clearfix">
                <h3 class="menu-button"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span><span class="memu1">菜单</span></h3>
            </nav>
            <div class="vertical">
                <div class="main-header-content inner">
                <a href="<?php $this->options->siteUrl(); ?>"><h1 class="page-title"><?php $this->options->title() ?></h1></a>
                    <h2 class="page-description"><?php $this->options->description() ?></h2>
                </div>
            </div>
        </header>