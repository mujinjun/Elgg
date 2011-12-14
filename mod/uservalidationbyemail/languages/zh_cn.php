<?php
/**
 * Email user validation plugin language pack.
 *
 * @package Elgg.Core.Plugin
 * @subpackage ElggUserValidationByEmail
 */

$simplifiedChinese = array(
	'admin:users:unvalidated' => '待审核',

	'email:validate:subject' => "%s请对%s确认您的邮件地址!",
	'email:validate:body' => "%s,

在您开始使用%s之前,需要确认您的邮件地址.

点击下方链接即可确认:

%s

如果不能点击链接，请将其复制到浏览器地址栏进行访问.

%s
%s
",
	'email:confirm:success' => "您的email确认成功!",
	'email:confirm:fail' => "您的email无法审核...",

	'uservalidationbyemail:registerok' => "请查看您的email，点击我们发送的地址以激活您的帐号.",
	'uservalidationbyemail:login:fail' => "您的帐号未经审核，无法登陆.系统已再次发送确认信请注意查收.",

	'uservalidationbyemail:admin:no_unvalidated_users' => '暂无待审核用户.',

	'uservalidationbyemail:admin:unvalidated' => '待审核',
	'uservalidationbyemail:admin:user_created' => '%s用户注册成功',
	'uservalidationbyemail:admin:resend_validation' => '重发认证信',
	'uservalidationbyemail:admin:validate' => '审核通过',
	'uservalidationbyemail:admin:delete' => '删除',
	'uservalidationbyemail:confirm_validate_user' => '通过%s审核？',
	'uservalidationbyemail:confirm_resend_validation' => '再次向%s发送认证邮件？',
	'uservalidationbyemail:confirm_delete' => '删除%s？',
	'uservalidationbyemail:confirm_validate_checked' => '认证通过选中的用户吗?',
	'uservalidationbyemail:confirm_resend_validation_checked' => '向选中的用户重发认证邮件？',
	'uservalidationbyemail:confirm_delete_checked' => '删除选中的用户？',
	'uservalidationbyemail:check_all' => '全选',

	'uservalidationbyemail:errors:unknown_users' => '未知用户',
	'uservalidationbyemail:errors:could_not_validate_user' => '无法认证用户.',
	'uservalidationbyemail:errors:could_not_validate_users' => '无法认证全部选中用户.',
	'uservalidationbyemail:errors:could_not_delete_user' => '无法删除用户.',
	'uservalidationbyemail:errors:could_not_delete_users' => '无法删除全部选中用户.',
	'uservalidationbyemail:errors:could_not_resend_validation' => '无法重发认证请求.',
	'uservalidationbyemail:errors:could_not_resend_validations' => '无法向选中用户重发认证请求.',

	'uservalidationbyemail:messages:validated_user' => '用户审核通过.',
	'uservalidationbyemail:messages:validated_users' => '选中用户审核通过.',
	'uservalidationbyemail:messages:deleted_user' => '用户删除成功.',
	'uservalidationbyemail:messages:deleted_users' => '选中用户删除成功.',
	'uservalidationbyemail:messages:resent_validation' => '认证请求发送成功.',
	'uservalidationbyemail:messages:resent_validations' => '认证请求发送成功.'

);

add_translation("zh_cn", $simplifiedChinese);