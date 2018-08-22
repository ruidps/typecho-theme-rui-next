<?phpif (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<?php Typecho_Widget::widget('Widget_Stat')->to($stat);?>


<div class="content-wrap"> 
      <div id="content" class="content"> 
       <div id="posts" class="posts-expand"> 
        <div class="post-block page"> 
         <header class="post-header"> 
          <h2 class="post-title" itemprop="name headline">分类</h2> 
          <div class="post-meta"> 
          </div> 
         </header> 
         <div class="post-body"> 
          <div class="category-all-page"> 
           <div class="category-all-title">
             目前共计 <?php echo $stat->categoriesNum; ?> 个分类
           </div> 
           <div class="category-all"> 
            <ul class="category-list">
             <?php
								
								$this->widget('Widget_Metas_Category_List')
                                    ->parse('<li class="category-list-item">
              <a class="category-list-link" href="{permalink}">{name}</a>
              <span class="category-list-count">{count}</span>
            </li>'); ?>
            </ul> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div>