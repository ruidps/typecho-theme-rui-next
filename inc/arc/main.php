<<<<<<< HEAD
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
=======
<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit;?>
>>>>>>> 26aa803e9d53755bb1f6472fc40561c1828b138c
<div class="content-wrap"> 
      <div id="content" class="content"> 
       <div class="post-block archive"> 
        <div id="posts" class="posts-collapse"> 
         <span class="archive-move-on"></span> 
         <?php
		Typecho_Widget::widget('Widget_Stat')->to($stat);
		 $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                    $year = 0;
                    $mon = 0;
                    $i = 0;
                    $j = 0;
                    $output = '<span class="archive-page-counter">
      非常好！ 目前共计 ' . $stat->publishedPostsNum . ' 篇日志， 继续努力。
    </span>
';
                    while ($archives->next()):
                        $year_tmp = date('Y', $archives->created);
                        $mon_tmp = date('m', $archives->created);
                        //var_dump($year_tmp);
                        $y = $year;
                        $m = $mon;
                        //if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
                        //if ($year != $year_tmp && $year > 0) $output .= '</ul>';
                        if ($year != $year_tmp) {
                            $year = $year_tmp;
                            //$output .= '<div class="al_year">'. $year .' 年</div><ul class="al_mon_list">'; //输出年份
                            $output .= '<div class="collection-title">
										          <h2 class="archive-year motion-element" id="archive-year-' . $year . '">' . $year . '</h2>
										        </div>
										        '; //输出年份
                        }
                        //$output .= '<li>'.date('m/d',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章日期和标题
                        $output .= '<article class="post post-type-normal" itemscope itemtype="http://schema.org/Article">
										    <header class="post-header">
										      <h1 class="post-title">
										            <a class="post-title-link" href="' . $archives->permalink . '" itemprop="url">
										                <span itemprop="name">' . $archives->title . '</span>
										            </a>
										      </h1>
										      <div class="post-meta">
										      <time class="post-time" itemprop="dateCreated" datetime="' . date('c', $archives->created) . '" content="' . date('yy-m-d', $archives->created) . '">
										            ' . date('m-d', $archives->created) . '
										          </time>
										      </div>
										    </header>
										  </article>
										  ';
                    endwhile;
                    echo $output;
                    ?>
         
        </div> 
       </div> 
      </div> 
     </div> 
