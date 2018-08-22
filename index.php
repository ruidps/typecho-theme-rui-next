<?php
/**
 * 第一版的仿next主题<a href="http://yunrui.online">rui.plus</a>
 * 
 * @package rui.next
 * @author ruiplus
 * @version 1.0.0
 * @link http://yunrui.online
 */
?>
<?phpif (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<!DOCTYPE html>
<html class="theme-next pisces use-motion" lang="zh-CN">
<?php $this->need('inc/head.php'); ?>
 <body itemscope="" itemtype="http://schema.org/WebPage" lang="zh-CN"> 
  <div class="container sidebar-position-left page-home"> 
   <div class="headband"></div> 
<?php $this->need('inc/header.php'); ?>
<main id="main" class="main">
	<div class="main-inner">				
		<?php $this->need('inc/main.php'); ?>
		<?php $this->need('inc/sidebar.php'); ?>
	</div>
</main>
<?php $this->need('inc/footer.php'); ?>
</div> 
<?php $this->need('inc/include_js.php'); ?>
</body>
</html>