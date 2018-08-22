<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="content-wrap">
				  <div id="content" class="content">
		  <section id="posts" class="posts-expand">
		  <?php while($this->next()): ?>
		  <article class="post post-type-normal" itemscope itemtype="http://schema.org/Article">
		  <div class="post-block">
			<link itemprop="mainEntityOfPage" href="<?php $this->permalink(); ?>">
			<span hidden itemprop="author" itemscope itemtype="http://schema.org/Person">
			  <meta itemprop="name" content="<?php $this->author(); ?>">
			  <meta itemprop="description" content="<?php $this->options->description(); ?>">
			  <meta itemprop="image" content="/usr/themes/rui/images/avatar.jpg">
			</span>
			<span hidden itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
			  <meta itemprop="name" content="<?php $this->options->title(); ?>">
			</span>
			  <header class="post-header">
				  <h2 class="post-title" itemprop="name headline">
						<a class="post-title-link" href="<?php $this->permalink() ?>" itemprop="url">
						  <?php $this->title() ?>
						</a>
				  </h2>
				<div class="post-meta">
				  <span class="post-time">
					  <span class="post-meta-item-icon">
						<i class="fa fa-calendar-o"></i>
					  </span>
						<span class="post-meta-item-text">发表于</span>
					  <time title="创建时间：<?php $this->date('y-m-d'); ?>" itemprop="dateCreated" datetime="<?php $this->date('c'); ?>"><?php $this->date('Y-m-d'); ?></time>
					  <!--time title="创建时间：2018-07-25 21:22:35 / 修改时间：21:31:32" itemprop="dateCreated datePublished" datetime="">2018-07-25</time-->
				  </span>
					<span class="post-category" >
					  <span class="post-meta-divider">|</span>
					  <span class="post-meta-item-icon">
						<i class="fa fa-folder-o"></i>
					  </span>
						<span class="post-meta-item-text">分类于</span>
						<span itemprop="about" itemscope itemtype="http://schema.org/Thing"><span itemprop="name"><?php $this->category(','); ?></span></span>
					</span>
				</div>
			  </header>
			<div class="post-body" itemprop="articleBody">
					<p><?php $this->content('阅读全文 »'); ?></p>
			</div>
			<footer class="post-footer">
				<div class="post-eof"></div>
			</footer>
		  </div>
		  </article>
		  <?php endwhile; ?>
		  <!--article class="post post-type-normal" itemscope itemtype="http://schema.org/Article">
		  <div class="post-block">
			<link itemprop="mainEntityOfPage" href="http://yoursite.com/2018/07/24/hello-world/">
			<span hidden itemprop="author" itemscope itemtype="http://schema.org/Person">
			  <meta itemprop="name" content="Yun ruirui">
			  <meta itemprop="description" content="闲暇时光要懂得珍惜">
			  <meta itemprop="image" content="/images/avatar.jpg">
			</span>
			<span hidden itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
			  <meta itemprop="name" content="Ruirui">
			</span>
			  <header class="post-header">
				  <h2 class="post-title" itemprop="name headline">
						<a class="post-title-link" href="/2018/07/24/hello-world/" itemprop="url">
						  Hello World
						</a>
				  </h2>
				<div class="post-meta">
				  <span class="post-time">
					  <span class="post-meta-item-icon">
						<i class="fa fa-calendar-o"></i>
					  </span>
						<span class="post-meta-item-text">发表于</span>
					  <time title="创建时间：2018-07-24 09:33:49" itemprop="dateCreated datePublished" datetime="2018-07-24T09:33:49+08:00">2018-07-24</time>
				  </span>
				</div>
			  </header>
			<div class="post-body" itemprop="articleBody">
					<p>Welcome to <a href="https://hexo.io/" target="_blank" rel="noopener">Hexo</a>! This is your very first post. Check <a href="https://hexo.io/docs/" target="_blank" rel="noopener">documentation</a> for more info. If you get any problems when using Hexo, you can find the answer in <a href="https://hexo.io/docs/troubleshooting.html" target="_blank" rel="noopener">troubleshooting</a> or you can ask me on <a href="https://github.com/hexojs/hexo/issues" target="_blank" rel="noopener">GitHub</a>.</p>
		<h2 id="Quick-Start"><a href="#Quick-Start" class="headerlink" title="Quick Start"></a>Quick Start</h2><h3 id="Create-a-new-post"><a href="#Create-a-new-post" class="headerlink" title="Create a new post"></a>Create a new post</h3><figure class="highlight bash"><table><tr><td class="gutter"><pre><span class="line">1</span><br></pre></td><td class="code"><pre><span class="line">$ hexo new <span class="string">"My New Post"</span></span><br></pre></td></tr></table></figure>
		<p>More info: <a href="https://hexo.io/docs/writing.html" target="_blank" rel="noopener">Writing</a></p>
		<h3 id="Run-server"><a href="#Run-server" class="headerlink" title="Run server"></a>Run server</h3><figure class="highlight bash"><table><tr><td class="gutter"><pre><span class="line">1</span><br></pre></td><td class="code"><pre><span class="line">$ hexo server</span><br></pre></td></tr></table></figure>
		<p>More info: <a href="https://hexo.io/docs/server.html" target="_blank" rel="noopener">Server</a></p>
		<h3 id="Generate-static-files"><a href="#Generate-static-files" class="headerlink" title="Generate static files"></a>Generate static files</h3><figure class="highlight bash"><table><tr><td class="gutter"><pre><span class="line">1</span><br></pre></td><td class="code"><pre><span class="line">$ hexo generate</span><br></pre></td></tr></table></figure>
		<p>More info: <a href="https://hexo.io/docs/generating.html" target="_blank" rel="noopener">Generating</a></p>
		<h3 id="Deploy-to-remote-sites"><a href="#Deploy-to-remote-sites" class="headerlink" title="Deploy to remote sites"></a>Deploy to remote sites</h3><figure class="highlight bash"><table><tr><td class="gutter"><pre><span class="line">1</span><br></pre></td><td class="code"><pre><span class="line">$ hexo deploy</span><br></pre></td></tr></table></figure>
		<p>More info: <a href="https://hexo.io/docs/deployment.html" target="_blank" rel="noopener">Deployment</a></p>
			</div>
			<footer class="post-footer">
				<div class="post-eof"></div>
			</footer>
		  </div>
		  </article-->
		  </section>
				  </div>
				</div>