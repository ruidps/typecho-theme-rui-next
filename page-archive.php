<?php
/**
 * archive
 * @package custom
 */
Typecho_Widget::widget('Widget_Stat')->to($stat);
?>
<!DOCTYPE html>
<html class="theme-next pisces use-motion" lang="zh-CN">
<?php $this->need('inc/post/head.php'); ?>
 <body itemscope="" itemtype="http://schema.org/WebPage" lang="zh-CN"> 
 
  <div class="container sidebar-position-left page-archive"> 
   <div class="headband"></div> 
<?php $this->need('inc/header.php'); ?>
<main id="main" class="main">
	<div class="main-inner">				
		<?php $this->need('inc/arc/main.php'); ?>
		<?php $this->need('inc/sidebar.php'); ?>
	</div>
</main>
<?php $this->need('inc/footer.php'); ?>
</div> 
<?php $this->need('inc/include_js.php'); ?>
</body>
</html>