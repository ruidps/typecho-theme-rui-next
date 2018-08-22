<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<header id="header" class="header" itemscope="" itemtype="http://schema.org/WPHeader"> 
    <div class="header-inner">
     <div class="site-brand-wrapper"> 
      <div class="site-meta custom-logo"> 
       <div class="custom-logo-site-title"> 
        <a href="/" class="brand" rel="start"> <span class="logo-line-before"><i></i></span> <span class="site-title"><?php $this->options->hexo_title();?></span> <span class="logo-line-after"><i></i></span> </a> 
       </div> 
       <h1 class="site-subtitle" itemprop="description"><?php $this->options->hexo_subtitle();?></h1> 
      </div> 
      <div class="site-nav-toggle"> 
       <button aria-label="切换导航栏"> <span class="btn-bar"></span> <span class="btn-bar"></span> <span class="btn-bar"></span> </button> 
      </div> 
     </div> 
     <nav class="site-nav"> 
      <ul id="menu" class="menu">
       <li class="menu-item menu-item-主页 <?php if($this->is('index')): ?>menu-item-active<?php endif; ?>"> <a href="<?php $this->options->siteUrl(); ?>" rel="section"> <i class="menu-item-icon fa fa-fw fa-home"></i> <br /><?php _e('首页'); ?></a> </li> 
       <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	   <?php while($pages->next()): ?>
	   <li class="menu-item menu-item-<?php $pages->title(); ?> <?php if($this->is('page', $pages->slug)): ?>menu-item-active<?php endif; ?>"> <a href="<?php $pages->permalink(); ?>" rel="section"> <i class="menu-item-icon fa fa-fw fa-<?php echo getIconName($pages->slug); ?>"></i> <br /><?php $pages->title(); ?></a> </li> 
       <?php endwhile; ?>
	   <!--li class="menu-item menu-item-分类"> <a href="/categories/" rel="section"> <i class="menu-item-icon fa fa-fw fa-th"></i> <br />分类</a> </li> 
       <li class="menu-item menu-item-归档"> <a href="/archives/" rel="section"> <i class="menu-item-icon fa fa-fw fa-archive"></i> <br />归档</a> </li> 
       <li class="menu-item menu-item-schedule"> <a href="/schedule/" rel="section"> <i class="menu-item-icon fa fa-fw fa-calendar"></i> <br />日程表</a> </li> 
       <li class="menu-item menu-item-sitemap"> <a href="/sitemap.xml" rel="section"> <i class="menu-item-icon fa fa-fw fa-sitemap"></i> <br />站点地图</a> </li> 
       <li class="menu-item menu-item-commonweal"> <a href="/404/" rel="section"> <i class="menu-item-icon fa fa-fw fa-heartbeat"></i> <br />公益 404</a> </li--> 
      </ul> 
     </nav> 
    </div> 
   </header> 