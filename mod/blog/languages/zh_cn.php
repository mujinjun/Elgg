<?php
/**
 * Blog Simplified Chinese language file.
 *
 */

$simplifiedChinese = array(
    'blog' => '博客',
    'blog:blogs' => '博客',
    'blog:revisions' => '修改',
    'blog:archives' => '档案',
    'blog:blog' => '博客',
    'item:object:blog' => '博客',

    'blog:title:user_blogs' => '%s的博客',
    'blog:title:all_blogs' => '整个网站的博客',
    'blog:title:friends' => '好友博客',

    'blog:group' => '群组博客',
    'blog:enableblog' => '群组成员',
    'blog:write' => '写博客',

    // Editing
    'blog:add' => '新建博客',
    'blog:edit' => '编辑博客',
    'blog:excerpt' => '摘录',
    'blog:body' => '正文',
    'blog:save_status' => '存储草稿: ',
    'blog:never' => '永远不',

    // Statuses
    'blog:status' => '状态',
    'blog:status:draft' => '草稿',
    'blog:status:published' => '发表',
    'blog:status:unsaved_draft' => '未保存的草稿',

    'blog:revision' => '修改',
    'blog:auto_saved_revision' => '自动保存修改',

    // messages
    'blog:message:saved' => '博客文章存储.',
    'blog:error:cannot_save' => '抱歉，您的文章无法存储.',
    'blog:error:cannot_write_to_container' => '抱歉，没有足够的空间来存储.',
    'blog:error:post_not_found' => '抱歉，无法找到您指定的文章.',
    'blog:messages:warning:draft' => '您的草稿尚未保存!',
    'blog:edit_revision_notice' => '(旧版本)',
    'blog:message:deleted_post' => '删除文章.',
    'blog:error:cannot_delete_post' => '不能删除文章.',
    'blog:none' => '您的博客没有文章',
    'blog:error:missing:title' => '请输入题目!',
    'blog:error:missing:description' => '请输入正文!',
    'blog:error:cannot_edit_post' => '该文章不存在或您以对他设置权限.',
    'blog:error:revision_not_found' => '无法找到这个修改.',

    // river
    'river:create:object:blog' => '%s发表新日志 %s',
    'river:comment:object:blog' => '%s对日志 %s 进行了评论',

    // notifications
	'blog:newpost' => '新日志',

    // widget
    'blog:widget:description' => '显示最近的文章',
    'blog:moreblogs' => '更多文章',
    'blog:numbertodisplay' => '显示文章数量',
    'blog:noblogs' => '没有文章'
);

add_translation('zh_cn', $simplifiedChinese);

