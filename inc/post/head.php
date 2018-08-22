<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


 <head> 
  <meta charset="UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" /> 
  <meta name="theme-color" content="#222" /> 
  <meta http-equiv="Cache-Control" content="no-transform" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <link href="<?php $this->options->themeUrl('lib/font-awesome/css/font-awesome.min.css?v=4.6.2'); ?>" rel="stylesheet" type="text/css" /> 
  <link href="<?php $this->options->themeUrl('lib/css/main.css?v=6.3.0'); ?>" rel="stylesheet" type="text/css" /> 
  <link rel="apple-touch-icon" sizes="180x180" href="<?php $this->options->themeUrl('images/apple-touch-icon-next.png?v=6.3.0'); ?>" /> 
  <link rel="icon" type="image/png" sizes="32x32" href="<?php $this->options->themeUrl('images/favicon-32x32-next.png?v=6.3.0'); ?>" /> 
  <link rel="icon" type="image/png" sizes="16x16" href="<?php $this->options->themeUrl('images/favicon-16x16-next.png?v=6.3.0'); ?>" /> 
  <link rel="mask-icon" href="<?php $this->options->themeUrl('images/logo.svg?v=6.3.0'); ?>" color="#222" /> 
  <script type="text/javascript" id="hexo.configurations">
  var NexT = window.NexT || {};
  var CONFIG = {
    root: '/',
    scheme: 'Pisces',
    version: '6.3.0',
    sidebar: {"position":"left","display":"post","offset":12,"b2t":true,"scrollpercent":true,"onmobile":false},
    fancybox: false,
    fastclick: false,
    lazyload: false,
    tabs: true,
    motion: {"enable":true,"async":false,"transition":{"post_block":"fadeIn","post_header":"slideDownIn","post_body":"slideDownIn","coll_header":"slideLeftIn","sidebar":"slideUpIn"}},
    algolia: {
      applicationID: '',
      apiKey: '',
      indexName: '',
      hits: {"per_page":10},
      labels: {"input_placeholder":"Search for Posts","hits_empty":"We didn't find any results for the search: ${query}","hits_stats":"${hits} results found in ${time} ms"}
    }
  };
</script> 
  <meta name="description" content="<?php $this->excerpt(50); ?>" /> 
  <meta name="keywords" content="<?php $this->options->hexo_keywords();?>" /> 
  <meta property="og:type" content="article" /> 
  <meta property="og:title" content="<?php $this->title() ?>" /> 
  <meta property="og:url" content="<?php $this->permalink() ?>" /> 
  <meta property="og:site_name" content="<?php $this->options->hexo_title();?>" /> 
  <meta property="og:description" content="<?php $this->excerpt(50); ?>" /> 
  <meta property="og:locale" content="zh-CN" /> 
  <meta name="twitter:card" content="summary" /> 
  <meta name="twitter:title" content="<?php $this->title() ?>" /> 
  <!--   字段描述和关键词  等待添加-->
  <meta name="twitter:description" content="<?php $this->excerpt(50); ?>" /> 
  <link rel="alternate" href="/atom.xml" title="<?php $this->options->hexo_title();?>" type="application/atom+xml" /> 
  <link rel="canonical" href="<?php $this->permalink() ?>" /> 
  <script type="text/javascript" id="page.configurations">
  CONFIG.page = {
    sidebar: "",
  };
</script> 
  <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章'),
        ), '', ' - '); ?><?php $this->options->title(); ?></title> 
  <noscript> 
   <style type="text/css">
    .use-motion .motion-element,
    .use-motion .brand,
    .use-motion .menu-item,
    .sidebar-inner,
    .use-motion .post-block,
    .use-motion .pagination,
    .use-motion .comments,
    .use-motion .post-header,
    .use-motion .post-body,
    .use-motion .collection-title { opacity: initial; }
    .use-motion .logo,
    .use-motion .site-title,
    .use-motion .site-subtitle {
      opacity: initial;
      top: initial;
    }
    .use-motion {
      .logo-line-before i { left: initial; }
      .logo-line-after i { right: initial; }
    }
  </style> 
  </noscript> 
  <?php $this->header(); ?>
 </head> 