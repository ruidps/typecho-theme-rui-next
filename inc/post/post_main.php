<?phpif (!defined('__TYPECHO_ROOT_DIR__')) exit;?>

     <div class="content-wrap"> 
      <div id="content" class="content"> 
       <div id="posts" class="posts-expand"> 
        <article class="post post-type-normal" itemscope="" itemtype="http://schema.org/Article"> 
         <div class="post-block"> 
          <link itemprop="mainEntityOfPage" href="<?php $this->permalink(); ?>" /> 
          <span hidden="" itemprop="author" itemscope="" itemtype="http://schema.org/Person"> 
           <meta itemprop="name" content="<?php $this->options->hexo_author(); ?>" /> 
           <meta itemprop="description" content="<?php $this->options->hexo_description(); ?>" /> 
           <meta itemprop="image" content="/usr/themes/rui/images/avatar.jpg" /> </span> 
          <span hidden="" itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization"> 
           <meta itemprop="name" content="<?php $this->options->hexo_title(); ?>" /> </span> 
          <header class="post-header"> 
           <h2 class="post-title" itemprop="name headline"><?php $this->title() ?></h2> 
           <div class="post-meta"> 
            <span class="post-time"> <span class="post-meta-item-icon"> <i class="fa fa-calendar-o"></i> </span> <span class="post-meta-item-text">发表于</span> <time title="创建时间：<?php $this->date('Y-m-d'); ?>" itemprop="dateCreated datePublished" datetime="<?php $this->date('c'); ?>"><?php $this->date('Y-m-d'); ?></time> </span> 
           <span class="post-category">&nbsp; | &nbsp; 分类于<span itemprop="about" itemscope itemtype="https://schema.org/Thing"><?php $this->category(' , '); ?></span>
		   </div> 
          </header> 
          <div class="post-body" itemprop="articleBody"> 
           <?php $this->content(); ?>
          </div> 
          <footer class="post-footer"> 
		  <div class="post-tags">
          
				
          <?php $this->tags(', ', true, ' '); ?>
				
          
			</div>
           <div class="post-nav"> 
            <div class="post-nav-next post-nav-item">
                                    <?php $this->theNext('<i class="fa fa-chevron-left"></i>%s', ''); ?>
                                </div> 
            <span class="post-nav-divider"></span> 
            <div class="post-nav-prev post-nav-item">
                                    <?php $this->thePrev('%s<i class="fa fa-chevron-right"></i>', ''); ?>
                                </div>
           </div> 
          </footer> 
         </div> 
        </article> 
       </div> 
      </div> 
     </div>