<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
		<link href="/favicon.ico" rel="icon">
		<?php $this->header(); ?>
	</head>
	<body>
		
		<div class="top">
			<div class="top1">
				<a class="title" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a><br>
				<span class="titles"><?php $this->options->description() ?></span>
			</div>
			<div class="uldiv">
				<ul class="clearfix" id="nav_menu">
				    <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
				    <?php $this->widget('Widget_Contents_Page_List')
	               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
			</div>
		
		</div>
		<br>
