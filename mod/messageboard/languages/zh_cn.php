<?php

$simplifiedChinese = array(

	/**
	 * Menu items and titles
	 */

	'messageboard:board' => "留言板",
	'messageboard:messageboard' => "留言板",
	'messageboard:viewall' => "查看所有",
	'messageboard:postit' => "发表",
	'messageboard:history:title' => "历史",
	'messageboard:none' => "当前留言板没有内容",
	'messageboard:num_display' => "显示留言数目",
	'messageboard:desc' => "可以将留言板放在个人资料中，别人可以给您留言.",

	'messageboard:user' => "%s的留言板",

	'messageboard:replyon' => '回复',
	'messageboard:history' => "历史",

	'messageboard:owner' => '%s的留言板',
	'messageboard:owner_history' => '%s在%s的留言板上的留言',

	/**
	 * Message board widget river
	 */
	'messageboard:river:added' => "发表",
	'messageboard:river:user' => "%s的",
	'messageboard:river:messageboard' => "留言板",


	/**
	 * Status messages
	 */

	'messageboard:posted' => "您留言成功.",
	'messageboard:deleted' => "留言已删除.",

	/**
	 * Email messages
	 */

	'messageboard:email:subject' => '您有新的留言!',
	'messageboard:email:body' => "%s给您留言了.内容如下:


%s


查看留言点击这里:

	%s

查看%s的资料点击这里:

	%s

请勿回复该邮件.",

	/**
	 * Error messages
	 */

	'messageboard:blank' => "您得输入内容才能发表留言.",
	'messageboard:notfound' => "很抱歉没能找到相关内容.",
	'messageboard:notdeleted' => "很抱歉该留言无法删除.",
	'messageboard:somethingwentwrong' => "留言保存错误，请核实您的内容是否有误.",

	'messageboard:failure' => "添加留言时出现异常，请重试..",

);

add_translation("zh_cn", $simplifiedChinese);
