<?php
/**
 * Elgg file plugin language pack
 *
 * @package ElggFile
 */

$simplifiedChinese = array(

	/**
	 * Menu items and titles
	 */
	'file' => "文件",
	'file:user' => "%s的文件",
	'file:friends' => "好友的文件",
	'file:all' => "所有文件",
	'file:edit' => "编辑文件",
	'file:more' => "更多的文件",
	'file:list' => "清单监视",
	'file:group' => "群组文件",
	'file:gallery' => "缩图监视",
	'file:gallery_list' => "缩图或清单监视",
	'file:num_files' => "显示的文件数",
	'file:user:gallery'=>'监视 %s 的缩图',
	'file:via' => '透过文件',
	'file:upload' => "上传文件",
	'file:replace' => '替换文件的内容(如果不要变更文件，请留下空白)',
	'file:list:title' => "%s's %s %s",
	'file:title:friends' => "朋友的",

	'file:add' => '上传文件',

	'file:file' => "文件",
	'file:title' => "标题",
	'file:desc' => "描述",
	'file:tags' => "标签",

	'file:list:list' => '转到列表视图',
	'file:list:gallery' => '转到缩略图浏览方式',

	'file:types' => "上传的文件类型",

	'file:type:' => '文件',
	'file:type:all' => "所有文件",
	'file:type:video' => "影片",
	'file:type:document' => "文件",
	'file:type:audio' => "音乐",
	'file:type:image' => "图片",
	'file:type:general' => "一般",

	'file:user:type:video' => "%s的影片",
	'file:user:type:document' => "%s的文件",
	'file:user:type:audio' => "%s的音乐",
	'file:user:type:image' => "%s的图片",
	'file:user:type:general' => "%s的一般文件",

	'file:friends:type:video' => "朋友的影片",
	'file:friends:type:document' => "朋友的文件",
	'file:friends:type:audio' => "朋友的音乐",
	'file:friends:type:image' => "朋友的图片",
	'file:friends:type:general' => "朋友的一般文件",

	'file:widget' => "文件小工具（widget）",
	'file:widget:description' => "最近文件的陈列",

	'groups:enablefiles' => '启动组文件',

	'file:download' => "下载",

	'file:delete:confirm' => "您确定要删除这个文件吗?",

	'file:tagcloud' => "标签云",

	'file:display:number' => "显示的文件数",

	'river:create:object:file' => '%s上传了%s',
	'river:comment:object:file' => '%s对文件%s发表了评论',

	'item:object:file' => '文件',
	
	'file:newupload' => '有新文件上传了',

	/**
	 * Embed media
	 **/

		'file:embed' => "嵌入的媒体",
		'file:embedall' => "所有",

	/**
	 * Status messages
	 */

		'file:saved' => "文件存储成功",
		'file:deleted' => "文件删除成功",

	/**
	 * Error messages
	 */

		'file:none' => "没有文件上传",
		'file:uploadfailed' => "抱歉：系统无法存储文件",
		'file:downloadfailed' => "抱歉：文件目前无法使用",
		'file:deletefailed' => "文件目前无法删除",
		'file:noaccess' => "您没有变更文件的权限",
		'file:cannotload' => "载入文件时发生错误",
		'file:nofile' => "必须选取一个文件",
);

add_translation("zh_cn",$simplifiedChinese);
