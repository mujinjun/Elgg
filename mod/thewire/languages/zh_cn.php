<?php
/**
 * The Wire Simplified Chinese language file
 */

$simplifiedChinese = array(

	/**
	 * Menu items and titles
	 */
    'thewire' => "微博",
	'thewire:everyone' => "全部微博",
	'thewire:user' => "%s的微博",
	'thewire:friends' => "好友微博",
	'thewire:reply' => "回复",
	'thewire:replying' => "回复%s (@%s)中...",
	'thewire:thread' => "主题",
	'thewire:charleft' => "剩余字数",
	'thewire:tags' => "含'%s'标签的微博",
	'thewire:noposts' => "暂无微博",
	'item:object:thewire' => "微博",
	'thewire:update' => '更新',
	'thewire:by' => '%s发表的微博',

	'thewire:previous' => "以前",
	'thewire:hide' => "隐藏",
	'thewire:previous:help' => "查看以前的微博",
	'thewire:hide:help' => "隐藏以前的微博",

	/**
	 * The wire river
	 */
	'river:create:object:thewire' => "%s跟%s说",
	'thewire:wire' => '微博',

	/**
	 * Wire widget
	 */
	'thewire:widget:desc' => '显示最新微博',
	'thewire:num' => '显示条数',
	'thewire:moreposts' => '更多微博',


    /**
	 * Status messages
	 */
	'thewire:posted' => "成功提交至微博.",
	'thewire:deleted' => "微博删除成功.",
	'thewire:blank' => "对不起，需要输入内容方可提交.",
	'thewire:notfound' => "很抱歉，没能找到对应的微博.",
	'thewire:notdeleted' => "很抱歉，无法删除该微博.",

	/**
	 * Notifications
	 */
	'thewire:notify:subject' => "新微博",
	'thewire:notify:reply' => '%s回复了%s的微博:',
	'thewire:notify:post' => '%s更新了微博:',
);

add_translation("zh_cn", $simplifiedChinese);
