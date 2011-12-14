<?php
/**
* Elgg send a message action page
*
* @package ElggMessages
*/

$simplifiedChinese = array(
	/**
	* Menu items and titles
	*/

	'messages' => "消息",
	'messages:back' => "返回消息",
	'messages:user' => "%s的收件箱",
	'messages:posttitle' => "%s的消息: %s",
	'messages:inbox' => "收件箱",
	'messages:send' => "发送",
	'messages:sent' => "发件箱",
	'messages:message' => "消息",
	'messages:title' => "主题",
	'messages:to' => "收件人",
	'messages:from' => "发件人",
	'messages:fly' => "发送",
	'messages:replying' => "回复",
	'messages:inbox' => "收件箱",
	'messages:sendmessage' => "发送消息",
	'messages:compose' => "新建消息",
	'messages:add' => "新建消息",
	'messages:sentmessages' => "发件箱",
	'messages:recent' => "最新消息",
	'messages:original' => "原始消息",
	'messages:yours' => "您的消息",
	'messages:answer' => "回复",
	'messages:toggle' => '反向选择全部',
	'messages:markread' => '标记为已读',
	'messages:recipient' => '选择收件人&hellip;',
	'messages:to_user' => '收件人: %s',

	'messages:new' => '新消息',

	'notification:method:site' => '消息',

	'messages:error' => '保存消息时出错，请重试.',

	'item:object:messages' => '消息',

	/**
	* Status messages
	*/

	'messages:posted' => "消息成功发送.",
	'messages:success:delete:single' => '消息删除成功',
	'messages:success:delete' => '消息删除成功',
	'messages:success:read' => '消息标记为已读',
	'messages:error:messages_not_selected' => '为选中消息',
	'messages:error:delete:single' => '无法删除消息',

	/**
	* Email messages
	*/

	'messages:email:subject' => '您有新消息!',
	'messages:email:body' => "您有来自%s的新消息.内容如下:


	%s


	点这儿查看信息:

	%s

	回复%s的消息点这儿:

	%s

	请勿回复该邮件.",

	/**
	* Error messages
	*/

	'messages:blank' => "抱歉，您的消息内容为空.",
	'messages:notfound' => "抱歉没有找到对应的消息.",
	'messages:notdeleted' => "抱歉消息无法删除.",
	'messages:nopermission' => "您无权修改该信息.",
	'messages:nomessages' => "暂无消息.",
	'messages:user:nonexist' => "无法找到对应的收件人.",
	'messages:user:blank' => "您需要选择收件人.",
);

add_translation("zh_cn", $simplifiedChinese);