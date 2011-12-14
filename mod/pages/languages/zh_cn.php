<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$simplifiedChinese = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "页面",
	'pages:owner' => "%s的页面",
	'pages:friends' => "朋友的页面",
	'pages:all' => "所有页面",
	'pages:add' => "添加页面",

	'pages:group' => "组页面",
	'groups:enablepages' => '启动组页面',

	'pages:edit' => "编辑该页面",
	'pages:delete' => "删除该页面",
	'pages:history' => "历史",
	'pages:view' => "查看页面",
	'pages:revision' => "修订",

	'pages:navigation' => "导航",
	'pages:via' => "经由页面",
	'item:object:page_top' => '顶级页面',
	'item:object:page' => '页面',
	'pages:nogroup' => '这组没有任何页面',
	'pages:more' => '更多页面',
	'pages:none' => '没有页面',

	/**
	* River
	**/

	'pages:river:create' => '创建页面',
	'pages:river:created' => "%s编写",
	'pages:river:updated' => "%s更新",
	'pages:river:posted' => "%s提交",
	'pages:river:update' => "页面命名完成",
	'river:commented:object:page' => '页面',
	'river:commented:object:page_top' => '页面',

	/**
	 * Form fields
	 */

	'pages:title' => '页面标题',
	'pages:description' => '页面文本',
	'pages:tags' => '标签',
	'pages:access_id' => '阅读权限',
	'pages:write_access_id' => '写权限',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => '无法访问该页',
	'pages:cantedit' => '不能编辑该页',
	'pages:saved' => '页面保存完毕',
	'pages:notsaved' => '页面无法保存',
	'pages:error:no_title' => '页面需指定标题',
	'pages:delete:success' => '页面删除成功。',
	'pages:delete:failure' => '当前页无法删除。',

	/**
	 * Page
	 */
	'pages:strapline' => '最新更新 %s，更新人:%s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => '修订%s，修订人:%s',

	/**
	 * Widget
	 **/

	'pages:num' => '每页显示页面条数',
	'pages:widget:description' => "您的页面列表",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "查看页面",
	'pages:label:edit' => "编辑页面",
	'pages:label:history' => "页面历史",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "当前页",
	'pages:sidebar:children' => "子页面",
	'pages:sidebar:parent' => "父页面",

	'pages:newchild' => "创建子页面",
	'pages:backtoparent' => "返回'%s'",
);

add_translation("zh_cn", $simplifiedChinese);