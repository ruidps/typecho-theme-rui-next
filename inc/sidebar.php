<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php Typecho_Widget::widget('Widget_Stat')->to($stat);?>
<div class="sidebar-toggle"> 
      <div class="sidebar-toggle-line-wrap"> 
       <span class="sidebar-toggle-line sidebar-toggle-line-first"></span> 
       <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span> 
       <span class="sidebar-toggle-line sidebar-toggle-line-last"></span> 
      </div> 
     </div> 
     <aside id="sidebar" class="sidebar"> 
      <div class="sidebar-inner"> 
       <section class="site-overview-wrap sidebar-panel sidebar-panel-active"> 
        <div class="site-overview"> 
         <div class="site-author motion-element" itemprop="author" itemscope="" itemtype="http://schema.org/Person"> 
          <img class="site-author-image" itemprop="image" src="<?php $this->options->themeUrl('/images/avatar.jpg'); ?>" alt="<?php $this->options->hexo_author();?>" /> 
          <p class="site-author-name" itemprop="name"><?php $this->options->hexo_author();?></p> 
          <p class="site-description motion-element" itemprop="description"><?php $this->options->hexo_description();?></p> 
         </div> 
         <nav class="site-state motion-element"> 
          <div class="site-state-item site-state-posts"> 
           <a href="/archives"> <span class="site-state-item-count"><?php echo $stat->publishedPostsNum; ?></span> <span class="site-state-item-name">日志</span> </a> 
          </div> 
          <div class="site-state-item site-state-categories"> 
           <a href="/categories"> <span class="site-state-item-count"><?php echo $stat->categoriesNum; ?></span> <span class="site-state-item-name">分类</span> </a> 
          </div> 
          <div class="site-state-item site-state-tags"> 
           <a href="/tags"> <span class="site-state-item-count"><?php echo getTagCount(); ?></span> <span class="site-state-item-name">标签</span> </a> 
          </div> 
         </nav> 
         <!--div class="feed-link motion-element"> 
          <a href="/atom.xml" rel="alternate"> <i class="fa fa-rss"></i> RSS </a> 
         </div-->
			<?php if (!empty($this->options->sidebarOthers) && in_array('ShowFeed', $this->options->sidebarOthers)): ?>
                <div class="feed-link motion-element">
                    <a href="<?php $this->options->feedUrl(); ?>" rel="alternate">
                        <i class="menu-item-icon icon-next-feed"></i>
                        RSS
                    </a>
                </div>
            <?php endif; ?>
				<div class="links-of-author motion-element"> 
				
				<?php if (!empty($this->options->link_github) && $this->options->link_github):?> 
					<span class="links-of-author-item"> <a href="https://github.com/<?php $this->options->link_github();?>" target="_blank" title="GitHub" rel="external nofollow"><i class="fa fa-fw fa-github"></i>GitHub</a> </span> 
				<?php endif;?>
				
				<?php if (!empty($this->options->link_email) && $this->options->link_email):?>
					<span class="links-of-author-item"> <a href="mailto:<?php $this->options->link_email();?>" target="_blank" title="E-Mail" rel="external nofollow"><i class="fa fa-fw fa-envelope"></i>E-Mail</a> </span> 
				<?php endif;?>
				
				<?php if (!empty($this->options->link_google) && $this->options->link_google):?>
					<span class="links-of-author-item"> <a href="https://plus.google.com/<?php $this->options->link_google();?>" target="_blank" title="Google" rel="external nofollow"><i class="fa fa-fw fa-google"></i>Google</a> </span> 
				<?php endif;?>
				
				<?php if (!empty($this->options->link_twitter) && $this->options->link_twitter):?>
					<span class="links-of-author-item"> <a href="https://twitter.com/<?php $this->options->link_twitter();?>" target="_blank" title="Twitter" rel="external nofollow"><i class="fa fa-fw fa-twitter"></i>Twitter</a> </span> 
				<?php endif;?>
				
				<?php if (!empty($this->options->link_facebook) && $this->options->link_facebook):?>
					<span class="links-of-author-item"> <a href="https://www.facebook.com/<?php $this->options->link_facebook();?>" target="_blank" title="FB Page" rel="external nofollow"><i class="fa fa-fw fa-facebook"></i>FB Page</a> </span> 
				<?php endif;?>
				
				<?php if (!empty($this->options->link_youtube) && $this->options->link_youtube):?>
				<span class="links-of-author-item"> <a href="https://youtube.com/<?php $this->options->link_youtube();?>" target="_blank" title="YouTube" rel="external nofollow"><i class="fa fa-fw fa-youtube"></i>YouTube</a> </span>
				<?php endif;?>
          <!--span class="links-of-author-item"> <a href="https://vk.com/yourname" target="_blank" title="VK Group" rel="external nofollow"><i class="fa fa-fw fa-vk"></i>VK Group</a> </span> 
          <span class="links-of-author-item"> <a href="https://stackoverflow.com/yourname" target="_blank" title="StackOverflow" rel="external nofollow"><i class="fa fa-fw fa-stack-overflow"></i>StackOverflow</a> </span> 
          <span class="links-of-author-item"> <a href="https://youtube.com/yourname" target="_blank" title="YouTube" rel="external nofollow"><i class="fa fa-fw fa-youtube"></i>YouTube</a> </span> 
          <span class="links-of-author-item"> <a href="https://instagram.com/yourname" target="_blank" title="Instagram" rel="external nofollow"><i class="fa fa-fw fa-instagram"></i>Instagram</a> </span> 
          <span class="links-of-author-item"> <a href="skype:yourname?call|chat" target="_blank" title="Skype" rel="external nofollow"><i class="fa fa-fw fa-skype"></i>Skype</a> </span--> 
         </div> 
        </div> 
       </section> 
       <div class="back-to-top"> 
        <i class="fa fa-arrow-up"></i> 
        <span id="scrollpercent"><span>0</span>%</span> 
       </div> 
      </div> 
     </aside> 