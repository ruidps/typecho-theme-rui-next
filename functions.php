<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	//网址
	$siteUrl = Helper::options()->siteUrl;
	//
    $hexo_title = new Typecho_Widget_Helper_Form_Element_Text('hexo_title', NULL, 'Ruirui', _t('网站标题'), _t('输入网站标题'));
    $form->addInput($hexo_title);
	
	$hexo_subtitle = new Typecho_Widget_Helper_Form_Element_Text('hexo_subtitle', NULL, 'ruirui的新新新站', _t('网站副标题'), _t('输入网站副标题'));
    $form->addInput($hexo_subtitle);
	
	$hexo_description = new Typecho_Widget_Helper_Form_Element_Text('hexo_description', NULL, '有些东西还是要写篇文章记下来的好', _t('网站描述'), _t('网站描述'));
    $form->addInput($hexo_description);
	
	$hexo_keywords = new Typecho_Widget_Helper_Form_Element_Text('hexo_keywords', NULL, 'ruirui的新新新站', _t('网站关键词'), _t('整站关键词，可以与主副标题一致'));
    $form->addInput($hexo_keywords);
	
	$hexo_author = new Typecho_Widget_Helper_Form_Element_Text('hexo_author', NULL, 'Yun ruirui', _t('博主名字'), _t('头像下方名字'));
    $form->addInput($hexo_author);
	
	//links
	$link_github = new Typecho_Widget_Helper_Form_Element_Text('link_github', NULL, 'yunruios', _t('github名称'), _t('例如：yunruios--本条以及以下都是非必填'));
    $form->addInput($link_github);
	
	$link_email = new Typecho_Widget_Helper_Form_Element_Text('link_email', NULL, 'kim987@qq.com', _t('邮箱'), _t('跳转邮箱链接'));
    $form->addInput($link_email);
	
	$link_google = new Typecho_Widget_Helper_Form_Element_Text('link_google', NULL, 'Yun ruirui', _t('google+名称'), _t('youname'));
    $form->addInput($link_google);
	
	$link_twitter = new Typecho_Widget_Helper_Form_Element_Text('link_twitter', NULL, 'Yun ruirui', _t('推特名称'), _t('youname'));
    $form->addInput($link_twitter);
	
	$link_facebook = new Typecho_Widget_Helper_Form_Element_Text('link_facebook', NULL, 'Yun ruirui', _t('facebook'), _t('youname'));
    $form->addInput($link_facebook);
	
	$link_youtube = new Typecho_Widget_Helper_Form_Element_Text('link_youtube', NULL, 'Yun ruirui', _t('youtube'), _t('youname'));
    $form->addInput($link_youtube);
	
	$link_test = new Typecho_Widget_Helper_Form_Element_Text('link_test', NULL, '此处默认值', _t('link测试'), _t('可以自行前往functions.php修改，在inc/sidebar.php引用'));
    $form->addInput($link_test);
	
	//菜单侧边栏设置
//	$next_nav = new Typecho_Widget_Helper_Form_Element_Checkbox('next_nav',
//         array('main' => _t('首页'),
//             'archive' => _t('归档'),
//             'categories' => _t('分类'),
//             'tags' => _t('标签'),
//             'about' => _t('关于'),
//             'search' => _t('搜索'),
//         ),
//         array('main','archive','categories','tags','about',), _t('侧边导航栏设置'));
//     $form->addInput($next_nav->multiMode());
	
	$sidebarOthers = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarOthers',
        array('ShowFeed' => _t('显示RSS订阅'),
        ),
        array('ShowFeed'), _t('其他设置'));

    $form->addInput($sidebarOthers->multiMode());

}
function getGravatar($email, $s = 40, $d = 'mm', $g = 'g')
{
    $hash = md5($email);
    $avatar = "//cdn.v2ex.com/gravatar/$hash?s=$s&d=$d&r=$g";
    return $avatar;
}

function getTagCount()
{
    $tags = Typecho_Widget::widget('Widget_Metas_Tag_Cloud');
    // 获取标签数目
    $count = 0;
    while ($tags->next()):
        $count++;
    endwhile;
    return $count;
}

function getIconName($slug)
{
    // 得到页面缩略名对应的字体图标名
    $names = array('archive' => 'archive', 'about' => 'user', 'categories' => 'folder-open', 'tags' => 'tags', 'links' => 'users');
	if(isset($names[$slug])){
		return $names[$slug];
	}else{
		return $slug;
	}
}

function themeInit($archive)
{
    //归档列表全部输出
    if ($archive->is('archive') && !$archive->is('search')) {
        $archive->parameter->pageSize = 10; // 自定义条数
    }
	if ($archive->is('index') && !$archive->is('search')) {
        $archive->parameter->pageSize = 10; // 自定义条数
    }
}


