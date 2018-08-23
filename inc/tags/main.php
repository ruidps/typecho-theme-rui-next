<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<?php Typecho_Widget::widget('Widget_Stat')->to($stat);?>

			
			<div class="content-wrap"> 
      <div id="content" class="content"> 
       <div id="posts" class="posts-expand"> 
        <div class="post-block page"> 
         <header class="post-header"> 
          <h2 class="post-title" itemprop="name headline">Tags</h2> 
          <div class="post-meta"> 
          </div> 
         </header> 
         <div class="post-body"> 
          <div class="tag-cloud"> 
           <div class="tag-cloud-title">
             目前共计 <?php echo getTagCount(); ?> 个标签
           </div> 
           <div class="tag-cloud-tags"> 
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=50')->to($tags); ?>
                                    <?php while ($tags->next()): ?>
                                        <a href="<?php $tags->permalink(); ?>" rel="tag" class="tag-size-<?php $tags->split(1, 5, 10, 15); ?>" title="<?php $tags->count(); ?> 篇文章">
                                            <?php $tags->name(); ?>
                                        </a>
                                    <?php endwhile; ?>
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div>