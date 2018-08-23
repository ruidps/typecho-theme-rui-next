<?php
/**
 * Post页面
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<!DOCTYPE html>
<html class="theme-next pisces use-motion" lang="zh-CN">
<?php $this->need('inc/post/head.php'); ?>
 <body itemscope="" itemtype="http://schema.org/WebPage" lang="zh-CN"> 
 
  <div class="container sidebar-position-left page-post-detail"> 
   <div class="headband"></div> 
<?php $this->need('inc/post/header.php'); ?>
<main id="main" class="main">
	<div class="main-inner">				
		<?php $this->need('inc/post/post_main.php'); ?>
		<?php $this->need('inc/post/post_sidebar.php'); ?>
	</div>
</main>
<?php $this->need('inc/footer.php'); ?>
</div> 
<?php $this->need('inc/include_js.php'); ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('/lib/js/src/scrollspy.js?v=6.3.0'); ?>"></script> 
<script type="text/javascript" src="<?php $this->options->themeUrl('/lib/js/src/post-details.js?v=6.3.0'); ?>"></script>  
<script type="text/javascript" src="<?php $this->options->themeUrl('/lib/js/src/post_sidebar.js?v=0.4.5.2'); ?>"></script> 
</body>
</html>