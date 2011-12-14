<?php
/**
 * Core Simplified Chinese Language
 *
 * @package Elgg.Core
 * @subpackage Languages.simplifiedChinese
 */

$simplifiedChinese= array(
/**
 * Sites
 */

	'item:site' => '网站',

/**
 * Sessions
 */

	'login' => "登入",
	'loginok' => "您已经登入.",
	'loginerror' => "无法登入系统，可能是由于您尚未完成账号认证作业、您提供的资料不正确，或者是登入的错误次数太多.请确认您的资料后再试一次.",
	'login:empty' => "必须输入用户名及密码.",
	'login:baduser' => "无法加载您的账户.",
	'auth:nopams' => "网络连接错误. 您没有安装用户认证书.",

	'logout' => "登出",
	'logoutok' => "您已经登出.",
	'logouterror' => "系统无法将您登出.请再试一次.",

	'loggedinrequired' => "在浏览页面时，您必须先登录.",
	'adminrequired' => "要浏览该页面，您必须是系统管理者.",
	'membershiprequired' => "要浏览该页面，您必须是小组成员.",


/**
 * Errors
 */
	'exception:title' => "错误警告.",

	'actionundefined' => "您所要求的动作 (%s) 系统并未定义.",
	'actionnotfound' => "动作  %s 未找到指定文件.",
	'actionloggedout' => "抱歉, 您无法在登出后执行这个动作.",
	'actionunauthorized' => '您未被授权执行此操作',

	'InstallationException:SiteNotInstalled' => '请求无效.站点未被配置或是数据库 不存在.',
	'InstallationException:MissingLibrary' => '无法加载 %s',
	'InstallationException:CannotLoadSettings' => 'Elgg 无法加载. 文件不存在或出错.',

	'SecurityException:Codeblock' => "执行个人的程式码区块被拒绝存取",
	'DatabaseException:WrongCredentials' => "Elgg无法使用目前的参数连接到资料库.",
	'DatabaseException:NoConnect' => "Elgg无法选取资料库'%s', 请检查该资料库是否已经建立, 并且有权存取它.",
	'SecurityException:FunctionDenied' => "存取私人的功能 '%s' 被拒.",
	'DatabaseException:DBSetupIssues' => "出现一些问题: ",
	'DatabaseException:ScriptNotFound' => "Elgg无法找到所需的资料程代码, 其位置%s.",
	'DatabaseException:InvalidQuery' => "无效查询",

	'IOException:FailedToLoadGUID' => "载入新的 %s 失败, GUID:%d",
	'InvalidParameterException:NonElggObject' => "传递一個非Elgg物件到一個Elgg物件的建构元!",
	'InvalidParameterException:UnrecognisedValue' => "传递到(物件)建构元的值无法辨识.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d 不是一個有效的 %s",

	'PluginException:MisconfiguredPlugin' => "%s 是一個未经适当组态的插件(plugin).",
	'PluginException:CannotStart' => '%s 无法启用',
	'PluginException:InvalidID' => "%s 插件ID无效.",
	'PluginException:InvalidPath' => "%s 插件路径无效.",
	'PluginException:InvalidManifest' => ' %s的插件明显无效',
	'PluginException:InvalidPlugin' => '%s 不是一个可信的插件.',
	'PluginException:InvalidPlugin:Details' => '%s 不是一个合法插件: %s',

	'ElggPlugin:MissingID' => '插件ＩＤ丢失',
	'ElggPlugin:NoPluginPackagePackage' => '缺少插件pluginID％的封装（指导）',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => ' %s 文件遗失',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => ' "%s"链接方式无效',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => ' "%s"提供方式无效',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => ' 在插件 %s中的 %s 链接无效".插件冲突或无响应!',

	'ElggPlugin:Exception:CannotIncludeFile' => '无法为插件 %s包括 %s (指南: %s) at %s.  检查权限!',
	'ElggPlugin:Exception:CannotRegisterViews' => '无法为在 %s的插件打开意见目录 (指南: %s).  检查权限!',
	'ElggPlugin:Exception:CannotRegisterLanguages' => '不能为在 %s的插件注册语言 %s (guid: %s). 检查权限!',
	'ElggPlugin:Exception:CannotRegisterClasses' => '不能为在 %s的插件注册类 %s (指南: %s). 检查权限!',
	'ElggPlugin:Exception:NoID' => '没有插件的标识ID %s!',

	'PluginException:ParserError' => ' API版本的插件错误解析清单.',
	'PluginException:NoAvailableParser' => ' 在API 版本的插件清单中无法找到一个解析器%s.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "插件的清单中缺少必要的属性.",

	'ElggPlugin:Dependencies:Requires' => '请求',
	'ElggPlugin:Dependencies:Suggests' => '建议',
	'ElggPlugin:Dependencies:Conflicts' => '冲突',
	'ElggPlugin:Dependencies:Conflicted' => '冲突',
	'ElggPlugin:Dependencies:Provides' => '提供',
	'ElggPlugin:Dependencies:Priority' => '优先',

	'ElggPlugin:Dependencies:Elgg' => 'Elgg 版本',
	'ElggPlugin:Dependencies:PhpExtension' => 'PHP 扩展: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP的 ini 设置: %s',
	'ElggPlugin:Dependencies:Plugin' => '插件: %s',
	'ElggPlugin:Dependencies:Priority:After' => '在 %s之后',
	'ElggPlugin:Dependencies:Priority:Before' => '在 %s之前',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s 没有安装',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => '丢失',


	'InvalidParameterException:NonElggUser' => "传递一个非ElggUser到ElggUser构造!",

	'InvalidParameterException:NonElggSite' => "传递一个非ElggSite到ElggSite构造!",

	'InvalidParameterException:NonElggGroup' => "传递一个非ElggGroup到ElggGroup构造!",

	'IOException:UnableToSaveNew' => "无法保存新的%s",

	'InvalidParameterException:GUIDNotForExport' => "GUID 在出口时没有被指定, 这不应该发生.",
	'InvalidParameterException:NonArrayReturnValue' => "实体序列化功能通过非数组返回值参数",

	'ConfigurationException:NoCachePath' => "缓存路径设置为 nothing!",
	'IOException:NotDirectory' => "%s 不是一个目录.",

	'IOException:BaseEntitySaveFailed' => "无法保存新对象的基本实体信息!",
	'InvalidParameterException:UnexpectedODDClass' => "进口（）通过了一项意想不到的ODD类",
	'InvalidParameterException:EntityTypeNotSet' => "实体类型必须设置.",

	'ClassException:ClassnameNotClass' => "%s 不是一个 %s.",
	'ClassNotFoundException:MissingClass' => "类'%s' 没有被发现, 丢失了插件?",
	'InstallationException:TypeNotSupported' => "不支持类型 %s.这表明在你的安装中有错误, 很可能由一个不完整的更新造成.",

	'ImportException:ImportFailed' => "不能进口元素 %d",
	'ImportException:ProblemSaving' => "在存储 %s时有问题",
	'ImportException:NoGUID' => "新的实体已创建，但没有GUID，这不应该发生.",

	'ImportException:GUIDNotFound' => "实体 '%d' 不能被发现.",
	'ImportException:ProblemUpdatingMeta' => "在实体'%d 的更新'%s 时有一个问题' '",

	'ExportException:NoSuchEntity' => "没有这样的 GUID:%d",

	'ImportException:NoODDElements' => "在导入数据中没有发现 OpenDD 元素, 导入失败.",
	'ImportException:NotAllImported' => "不是所有的元素被导入.",

	'InvalidParameterException:UnrecognisedFileMode' => "未确认的文件模式 '%s'",
	'InvalidParameterException:MissingOwner' => "文件 %s (文件 guid:%d) (所有者 guid:%d) 正在丢失一个拥有者!",
	'IOException:CouldNotMake' => "不能生成 %s",
	'IOException:MissingFileName' => "在打开文件前您必须指定一个名字.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "无法为文件 %u 装载文件保存类 %s ",
	'NotificationException:NoNotificationMethod' => "没有指定通知方法.",
	'NotificationException:NoHandlerFound' => "没找到处理程序 '%s' 或是它不可调用.",
	'NotificationException:ErrorNotifyingGuid' => "在通知%d时有错误",
	'NotificationException:NoEmailAddress' => "无法为GUID得到Email地址:%d",
	'NotificationException:MissingParameter' => "缺少必要的参数, '%s'",

	'DatabaseException:WhereSetNonQuery' => "集合不包含WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "在选取的类型查询中, 遗漏部份栏位",
	'DatabaseException:UnspecifiedQueryType' => "无法识别或未指定的查询类型.",
	'DatabaseException:NoTablesSpecified' => "查询未指定表格名称.",
	'DatabaseException:NoACL' => "查诣未提供存取控制",

	'InvalidParameterException:NoEntityFound' => "找不到该项目, 不是不存在就是您无法存取它.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s 无法找到, 或者您无法存取它.",
	'InvalidParameterException:IdNotExistForGUID' => "抱歉, '%s' 不存在于 guid:%d",
	'InvalidParameterException:CanNotExportType' => "抱歉, 我不知道如何汇出 '%s'",
	'InvalidParameterException:NoDataFound' => "无法找到任何资料.",
	'InvalidParameterException:DoesNotBelong' => "不属于该项目.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "不属于或为参照到该项目.",
	'InvalidParameterException:MissingParameter' => "遗漏参数, 您必須将它提供给GUID..",
	'InvalidParameterException:LibraryNotRegistered' => '%s没有注册',

	'APIException:ApiResultUnknown' => "API的结果传回未知的型态, 这种情况不应该发生.",
	'ConfigurationException:NoSiteID' => "未指定网站的ID.",
	'SecurityException:APIAccessDenied' => "抱歉, API存取功能已经被管理者设定为失效.",
	'SecurityException:NoAuthMethods' => "未找到授权的方法, 无法针对要求授权该API.",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "在呼叫expose_method()时, 方法或功能函式未设定",
	'InvalidParameterException:APIParametersArrayStructure' => "在呼叫显露的方法 '%s'时, 参数阵列的结构不正确.",
	'InvalidParameterException:UnrecognisedHttpMethod' => "无法辨识的方法呼叫'%s'",
	'APIException:MissingParameterInMethod' => "遗漏参数 %s , 方法为 %s",
	'APIException:ParameterNotArray' => "%s 看起来不是一个阵列.",
	'APIException:UnrecognisedTypeCast' => "无法辨识的cast型态 %s , 其变数为: '%s' ,其方法为 '%s'",
	'APIException:InvalidParameter' => "无效的参数 '%s' ,其方法为 '%s'",
	'APIException:FunctionParseError' => "%s(%s)解析错误.",
	'APIException:FunctionNoReturn' => "%s(%s) 未传回任何值.",
	'APIException:APIAuthenticationFailed' => "方法调用失败的API认证",
	'APIException:UserAuthenticationFailed' => "方法调用失败的用户认证",
	'SecurityException:AuthTokenExpired' => "授权的权仗(token)遗失, 无效或过期.",
	'CallException:InvalidCallMethod' => "%s 被呼叫时必须使用 '%s''",
	'APIException:MethodCallNotImplemented' => "呼叫的方法 '%s' 未被执行.",
	'APIException:FunctionDoesNotExist' => "方法 '%s' 的功能函式无法呼叫",
	'APIException:AlgorithmNotSupported' => "演算法 '%s' 不被支援或者被停用了.",
	'ConfigurationException:CacheDirNotSet' => "快取目录 'cache_path' 未被设定.",
	'APIException:NotGetOrPost' => "要求的方法必须为GET或POST",
	'APIException:MissingAPIKey' => "遗失 X-Elgg-apikey HTTP 的标头",
	'APIException:BadAPIKey' => "损坏的API键值",
	'APIException:MissingHmac' => "遗失 X-Elgg-hmac 的标头",
	'APIException:MissingHmacAlgo' => "遗失 X-Elgg-hmac-algo 的标头",
	'APIException:MissingTime' => "遗失 X-Elgg-time 的标头",
	'APIException:MissingNonce' => "遗失 X-Elgg-nonce 的标头",
	'APIException:TemporalDrift' => "X-Elgg-time的时间远超过过去或未來. Epoch.",
	'APIException:NoQueryString' => "在查查询的字串中没有资料",
	'APIException:MissingPOSTHash' => "遗失 X-Elgg-posthash 的标头",
	'APIException:MissingPOSTAlgo' => "遗失 X-Elgg-posthash_algo 的标头",
	'APIException:MissingContentType' => "遗失张贴资料的內容型态",
	'SecurityException:InvalidPostHash' => "张贴的资料hash不合法 - 预期为 %s 但实际为 got %s.",
	'SecurityException:DupePacket' => "Packet签署已经存在.",
	'SecurityException:InvalidAPIKey' => "不合法或遗失的API Key.",
	'NotImplementedException:CallMethodNotImplemented' => "呼叫的方法 '%s' 目前未被支援.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC 方法呼叫 call '%s' 未被执行.",
	'InvalidParameterException:UnexpectedReturnFormat' => "呼叫方法 '%s' 传回不被预期的结果.",
	'CallException:NotRPCCall' => "呼叫看起来不是合法的 XML-RPC call",

	'PluginException:NoPluginName' => "无法找到该插件的名称",

	'SecurityException:authenticationfailed' => "使用者无法被授权",

	'CronException:unknownperiod' => '%s 不是一个可理解的周期.',

	'SecurityException:deletedisablecurrentsite' => '您不能刪除或停用这个您正在浏览的网站!',

	'RegistrationException:EmptyPassword' => '密码字段不能为空',
	'RegistrationException:PasswordMismatch' => '密码必须匹配',
	'LoginException:BannedUser' => '您已从本网站被禁止，无法登录',
	'LoginException:UsernameFailure' => '我们不能登陆您. 请核对您的用户名和密码.',
	'LoginException:PasswordFailure' => '我们不能登陆您.请核对用户名和密码.',
	'LoginException:AccountLocked' => '您的帐户因为过多的登录失败而被锁定.',

	'memcache:notinstalled' => 'PHP memcache 模组未安装, 您必须安装php5-memcache',
	'memcache:noservers' => '未定义memcache 服务器,请指定 $CONFIG->memcache_servers 变数',
	'memcache:versiontoolow' => 'Memcache 至少需要版本 %s , 您目前执行的版本为 %s',
	'memcache:noaddserver' => '多伺服器的支援已经被停止, 您或许需要更新您的PECL memcache 程式库',

	'deprecatedfunction' => '警告: 这段程使码使用了不支援的函式 \'%s\' , 且不相容于目前版本的Elgg',

	'pageownerunavailable' => '警告: 本页的拥有者 %d 无法存取!',
/**
	'viewfailure' => '在视图中有一个内部的失败',
	'changebookmark' => '请更改您的此页书签',
/**
 * API
 */
	'system.api.list' => "列出在本系统中所有可用的API呼叫.",
	'auth.gettoken' => "该API呼叫让使用者登入,传回被授权的权仗(token), 可以被用来窃取使用者名称与密码",

/**
 * User details
 */

	'name' => "显示名称",
	'email' => "电子邮件",
	'username' => "帐号",
	'loginusername' => "用户名或邮件",
	'password' => "密码",
	'passwordagain' => "密码 (再次输入确认)",
	'admin_option' => "设定为管理员?",

/**
 * Access
 */

	'PRIVATE' => "私人的",
	'LOGGED_IN' => "登入会员",
	'PUBLIC' => "公开",
	'access:friends:label' => "朋友",
	'access' => "权限",

/**
 * Dashboard and widgets
 */

	'dashboard' => "我的首页",
	'dashboard:nowidgets' => "首页是您通往整个网站的桥梁. 请按一下'编辑页面以便添加「小工具(widgets)」; 这样一来, 您就可以在「我的首页」中, 掌控整个社群的动态.",
	'widgets:add:description' => "点击任意窗口按钮将其增加至页面.",
	'widgets:position:fixed' => '(修正页面中的位置)',
	'widget:unavailable' => '您已经添加了此窗口',
	'widget:numbertodisplay' => '显示的项目数量',

	'widget:delete' => '移走 %s',
	'widget:edit' => '定制此窗口',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'widgets:save:success' => "窗口存储成功.",
	'widgets:save:failure' => "窗口存储失败，请您再试一次.",
	'widgets:add:success' => "窗口增加成功.",
	'widgets:add:failure' => "无法增加窗口.",
	'widgets:move:failure' => "无法存储新窗口的位置.",
	'widgets:remove:failure' => "无法移除此窗口",

/**
 * Groups
 */

	'group' => "群组",
	'item:group' => "群组",

/**
 * Users
 */

	'user' => "使用者",
	'item:user' => "使用者",

/**
 * Friends
 */

	'friends' => "好友",
	'friends:yours' => "您的好友",
	'friends:owned' => "%s的好友",
	'friend:add' => "增加好友",
	'friend:remove' => "移除好友",

	'friends:add:successful' => "您已经成功地将 %s 加为好友.",
	'friends:add:failure' => "系统无法将 %s 加为好友. 请再试一次.",

	'friends:remove:successful' => "您已经成功地将 %s 从好友中移除.",
	'friends:remove:failure' => "系统无法将%s 从您的好友中移除. 请再试一次.",

	'friends:none' => "该使用者尚未添加任何好友.",
	'friends:none:you' => "您加未添加任何好友! 按照您的兴趣搜寻, 以便寻找朋友.",

	'friends:none:found' => "未发现任何好友.",

	'friends:of:none' => "尚无人将该使用者添加为好友.",
	'friends:of:none:you' => "尚无人添加您为好友. 完善您的个人资料，以便让其他人找到您!",

	'friends:of:owned' => "将%s 添加问好友的人",

	'friends:of' => "朋友",
	'friends:collections' => "朋友收藏",
	'collections:add' => "新的收藏",
	'friends:collections:add' => "新的朋友收藏",
	'friends:addfriends' => "选择好友",
	'friends:collectionname' => "收藏名称",
	'friends:collectionfriends' => "收藏中的朋友",
	'friends:collectionedit' => "编辑收藏",
	'friends:nocollections' => "您现在在还没有任何收藏.",
	'friends:collectiondeleted' => "您的收藏已被删除.",
	'friends:collectiondeletefailed' => "我们不能删除这个收藏. 您没有权限, 或有一些其它的问题出现.",
	'friends:collectionadded' => "您的收藏被成功创建",
	'friends:nocollectionname' => "您需要在创建收藏前给他命名.",
	'friends:collections:members' => "收藏成员",
	'friends:collections:edit' => "编辑收藏",

	'friends:river:add' => "是一个与 %s的朋友",

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

	'avatar' => '头像',
	'avatar:create' => '创建您的头像',
	'avatar:edit' => '编辑头像',
	'avatar:preview' => '预览',
	'avatar:upload' => '上传一个新头像',
	'avatar:current' => '当前头像',
	'avatar:crop:title' => '头像裁剪工具',
	'avatar:upload:instructions' => "您的头像已经通过网站显示. 您可以随时改变它. (接收的文件格式: GIF, JPG or PNG)",
	'avatar:create:instructions' => '点击并拖动下面的正方形以确定您想如何裁剪您的头像. 预览将出现在右侧框中. 您若对这个预览满意, 点击 \'创建头像\'. 这个裁减头像将在整个网站中作为您的头像.',
	'avatar:upload:success' => '头像上传成功',
	'avatar:upload:fail' => '头像上传失败',
	'avatar:resize:fail' => '调整头像大小失败',
	'avatar:crop:success' => '裁剪头像成功',
	'avatar:crop:fail' => '头像裁剪失败',

	'profile:edit' => '编辑个人资料',
	'profile:aboutme' => "关于我",
	'profile:description' => "关于我",
	'profile:briefdescription' => "简介",
	'profile:location' => "住址",
	'profile:skills' => "才能",
	'profile:interests' => "兴趣",
	'profile:contactemail' => "联系电子邮件",
	'profile:phone' => "电话",
	'profile:mobile' => "手机",
	'profile:website' => "网址",
	'profile:twitter' => "Twitter用户名",
	'profile:saved' => "您的个人简介成功保存.",

	'admin:appearance:profile_fields' => '编辑个人简介区',
	'profile:edit:default' => '编辑个人简介区',
	'profile:label' => "个人简介标签",
	'profile:type' => "个人简介类型",
	'profile:editdefault:delete:fail' => '删除默认的简介目录字段失败',
	'profile:editdefault:delete:success' => '默认简介项被删除!',
	'profile:defaultprofile:reset' => '默认系统简介重设',
	'profile:resetdefault' => '重设默认简介',
	'profile:explainchangefields' => "你可以用下面的表格用您自己的代替存在的简介字段. \n\n给新的简介字段一个标签, 例如e, '最喜爱的球队', 然后选择字段类型 (eg. text, url, tags), 并点击'Add' 标签. 拖动在字段标签旁按钮重新排序字段. 要编辑一个字段的标签-点击在标签上的文字，使其可编辑. \n\n在任何时候你都可以恢复到默认配置文件设置, 但你将丢失已经输入到在简介页上的自定义字段的所有信息.",
	'profile:editdefault:success' => '目录成功加入到默认配置文件',
	'profile:editdefault:fail' => '默认配置文件无法保存',


/**
 * Feeds
 */
	'feed:rss' => '这页的RSS种子',
/**
 * Links
 */
    'link:view' => '视图链接',
	'link:view:all' => '查看所有',


/**
 * River
 */
	'river' => "河流",
	'river:relationship:friend' => '和 成为朋友',
	'river:noaccess' => '您没有查看这个目录的权限.',
	'river:posted:generic' => '%s 发表',
	'riveritem:single:user' => '一个用户',
	'riveritem:plural:user' => '一些用户',
	'river:ingroup' => '到组 %s',
	'river:none' => '没有动态',

	'river:widget:title' => "动态",
	'river:widget:description' => "显示最新动态",
	'river:widget:type' => "动态类型",
	'river:widgets:friends' => '好友动态',
	'river:widgets:all' => '所有网站动态',

/**
 * Notifications
 */
	'notifications:usersettings' => "通知设置",
	'notifications:methods' => "请指定您想允许哪种方法.",

	'notifications:usersettings:save:ok' => "您的通知设置成功保存.",
	'notifications:usersettings:save:fail' => "在保存您的通知设置时有个问题.",

	'user.notification.get' => '给指定用户返回通知设置.',
	'user.notification.set' => '给指定用户设置通知设置.',
/**
 * Search
 */

	'search' => "搜索",
	'searchtitle' => "搜索: %s",
	'users:searchtitle' => "搜索用户: %s",
	'groups:searchtitle' => "搜索组: %s",
	'advancedsearchtitle' => "%s 与结果相匹配 %s",
	'notfound' => "没发现结果.",
	'next' => "下一个",
	'previous' => "上一个",

	'viewtype:change' => "改变表类型",
	'viewtype:list' => "列表视图",
	'viewtype:gallery' => "画廊",

	'tag:search:startblurb' => "项目与标签匹配'%s':",

	'user:search:startblurb' => "用户匹配 '%s':",
	'user:search:finishblurb' => "想看更多, 点击这儿.",

	'group:search:startblurb' => "组匹配 '%s':",
	'group:search:finishblurb' => "想看更多, 点击这儿.",
	'search:go' => 'Go',
	'userpicker:only_friends' => '只有朋友',

/**
 * Account
 */

	'account' => "账户",
	'settings' => "设置",
	'tools' => "工具",

	'register' => "注册",
	'registerok' => "您已成功注册 %s.",
	'registerbad' => "您的注册不成功因为未知的错误.",
	'registerdisabled' => "注册已被系统管理员停用",

	'registration:notemail' => '您提供的这Email 地址是一个无效的Email地址.',
	'registration:userexists' => '那个用户名已经存在',
	'registration:usernametooshort' => '您的用户名至少%u 字符长.',
	'registration:passwordtooshort' => '密码至少%u字符长.',
	'registration:dupeemail' => '这个Email地址已经被注册.',
	'registration:invalidchars' => '对不起, 您的用户名包含以下无效字符: %s. 所有这些字符都是无效的：%s',
	'registration:emailnotvalid' => '对不起, 你输入的Email地址在系统中是无效的',
	'registration:passwordnotvalid' => '对不起, 你输入的密码在系统中是无效的',
	'registration:usernamenotvalid' => '对不起, 您输入的用户名在系统中是无效的',

	'adduser' => "增加用户",
	'adduser:ok' => "您已成功添加新用户.",
	'adduser:bad' => "新用户不能被创建.",

	'user:set:name' => "账户名设置",
	'user:name:label' => "我的显示名",
	'user:name:success' => "成功改变您在系统中的名字.",
	'user:name:fail' => "不能改变您在系统中的名字.  请确认您的名字不会太长并再试一遍.",

	'user:set:password' => "账户密码",
	'user:current_password:label' => '当前密码',
	'user:password:label' => "您的新密码",
	'user:password2:label' => "再次输入您的新密码",
	'user:password:success' => "密码变更",
	'user:password:fail' => "不能改变您在系统中的密码.",
	'user:password:fail:notsame' => "这两个密码不相同!",
	'user:password:fail:tooshort' => "密码太短!",
	'user:password:fail:incorrect_current_password' => '当前密码输入不正确.',
	'user:resetpassword:unknown_user' => '无效用户.',
	'user:resetpassword:reset_password_confirm' => '重置您的密码将通过电子邮件发送新密码至您登记的电邮地址.',

	'user:set:language' => "语言设置s",
	'user:language:label' => "您的语言",
	'user:language:success' => "您的语言设置已被更新.",
	'user:language:fail' => "您的语言设置不能被保存.",

	'user:username:notfound' => '用户名 %s 无法找到.',

	'user:password:lost' => "丢失密码",
	'user:password:resetreq:success' => '成功申请新密码, 邮件发送',
	'user:password:resetreq:fail' => '无法申请新密码.',

	'user:password:text' => '要申请新的密码，请输入您的用户名，单击请求按钮.',

	'user:persistent' => '记住我',

	'walled_garden:welcome' => '欢迎',

/**
 * Administration
 */
	'menu:page:header:administer' => '管理员',
	'menu:page:header:configure' => '配置',
	'menu:page:header:develop' => '发展',

	'admin:view_site' => '查看网站',
	'admin:loggedin' => ' 作为 %s 登录 ',
	'admin:menu' => '菜单',

	'admin:configuration:success' => "您的设置已存储.",
	'admin:configuration:fail' => "您的设置未存储.",

	'admin:unknown_section' => '无效管理行为.',

	'admin' => "管理员",
	'admin:description' => "管理面板允许你控制系统的各个方面, 从用户管理到插件行为. 选择下面的一个选项开始.",

	'admin:statistics' => "数据",
	'admin:statistics:overview' => '概述',

	'admin:appearance' => '外表',
	'admin:utilities' => '公用事业',

	'admin:users' => "用户",
	'admin:users:online' => '当前在线',
	'admin:users:newest' => '最新',
	'admin:users:add' => '添加新用户',
	'admin:users:description' => "管理面板允许您为您的网站控制您的设置. 选择下面的一个选项开始.",
	'admin:users:adduser:label' => "点击这儿添加新用户...",
	'admin:users:opt:linktext' => "配置用户...",
	'admin:users:opt:description' => "配置用户和账户信息. ",
	'admin:users:find' => '查找',

	'admin:settings' => '设置',
	'admin:settings:basic' => '基本设置',
	'admin:settings:advanced' => '高级设置',
	'admin:site:description' => "管理面板允许您为您的网站控制全局设置. 选择下面的一个选项开始",
	'admin:site:opt:linktext' => "配置站点...",
	'admin:site:access:warning' => "更改访问设置只影响在未来对内容的创建权限.",

	'admin:dashboard' => '仪表盘',
	'admin:widget:online_users' => '在线用户',
	'admin:widget:online_users:help' => '列出当前在线用户',
	'admin:widget:new_users' => '新用户',
	'admin:widget:new_users:help' => '列出最新用户',
	'admin:widget:content_stats' => '内容统计',
	'admin:widget:content_stats:help' => '保持对您的用户创建的内容的跟踪',
	'widget:content_stats:type' => '内容类型',
	'widget:content_stats:number' => '数字',

	'admin:widget:admin_welcome' => '欢迎',
	'admin:widget:admin_welcome:help' => " 对 Elgg的管理区域的简短介绍",
	'admin:widget:admin_welcome:intro' =>
'欢迎来到 Elgg! 现在您正在查看管理员仪表盘. 追踪网站正在发生的事是有用的.',

	'admin:widget:admin_welcome:admin_overview' =>
"右侧的菜单位管理与区域提供管理导航. 它组织成"
. " 三个选项:
	<dl>
		<dt>管理员</dt><dd>每天的任务像检测报告内容, 检查谁在线，并查看统计信息.</dd>
		<dt>配置</dt><dd>不确定任务如设网站名或激活插件.</dd>
		<dt>进展</dt><dd>对于创建设计主题的插件的开发商来说. (需要开发插件.)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />确定通过页脚链接查看可得到的资源，感谢您您使用Elgg!',

	'admin:footer:faq' => '管理员 FAQ',
	'admin:footer:manual' => '管理手册',
	'admin:footer:community_forums' => 'Elgg 社区论坛',
	'admin:footer:blog' => 'Elgg 博客',

	'admin:plugins:category:all' => '所有插件',
	'admin:plugins:category:admin' => '管理',
	'admin:plugins:category:bundled' => '捆绑',
	'admin:plugins:category:content' => '内容',
	'admin:plugins:category:development' => '发展',
	'admin:plugins:category:extension' => '扩展',
	'admin:plugins:category:service' => '服务/API',

	'admin:plugins:markdown:unknown_plugin' => '未知插件n.',
	'admin:plugins:markdown:unknown_file' => '未知文件.',


	'admin:notices:could_not_delete' => '无法删除通知.',

	'admin:options' => '管理选择',


/**
 * Plugins
 */
	'plugins:settings:save:ok' => "为插件 %s的设置 已保存成功.",
	'plugins:settings:save:fail' => "在为  %s 插件保存设置时出现一个问题.",
	'plugins:usersettings:save:ok' => " 为 %s 插件的用户设置成功保存.",
	'plugins:usersettings:save:fail' => "在为 %s插件保存用户设置 设置时出现一个问题.",
	'item:object:plugin' => '插件',

	'admin:plugins' => "插件",
	'admin:plugins:activate_all' => '激活所有',
	'admin:plugins:deactivate_all' => '关闭所有',
	'admin:plugins:description' => "此管理面板允许您控制和配置您的网站上安装的工具.",
	'admin:plugins:opt:linktext' => "配置工具...",
	'admin:plugins:opt:description' => "在网站上配置工具安装. ",
	'admin:plugins:label:author' => "作者",
	'admin:plugins:label:copyright' => "版权所有",
	'admin:plugins:label:categories' => '分类',
	'admin:plugins:label:licence' => "牌照",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:moreinfo' => '更多信息',
	'admin:plugins:label:version' => '版本',
	'admin:plugins:label:location' => '地点',
	'admin:plugins:label:dependencies' => '依赖',

	'admin:plugins:warning:elgg_version_unknown' => '这个插件使用了传统的清单文件，没有指定兼容Elgg版本.它可能不运行!',
	'admin:plugins:warning:unmet_dependencies' => '这个插件已经不能满足依赖关系，不能被激活. 更多信息下检查依赖关系.',
	'admin:plugins:warning:invalid' => '%s 是一个无效的 Elgg 插件. 核对<a href="http://docs.elgg.org/Invalid_Plugin">这个Elgg 文档</a> 获得故障排除技巧.',
	'admin:plugins:cannot_activate' => '无法激活',

	'admin:plugins:set_priority:yes' => "重新排序 %s.",
	'admin:plugins:set_priority:no' => "无法重新排序 %s.",
	'admin:plugins:deactivate:yes' => "停用 %s.",
	'admin:plugins:deactivate:no' => "无法停用%s.",
	'admin:plugins:activate:yes' => "激活 %s.",
	'admin:plugins:activate:no' => "无法激活 %s.",
	'admin:plugins:categories:all' => '所有类别',
	'admin:plugins:plugin_website' => '插件网址',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => '版本%s',
	'admin:plugins:simple' => '简单',
	'admin:plugins:advanced' => '高级',
	'admin:plugin_settings' => '插件设置',
	'admin:plugins:simple_simple_fail' => '无法保存设置.',
	'admin:plugins:simple_simple_success' => '保存设置.',
	'admin:plugins:simple:cannot_activate' => '无法激活这个插件. 查看插件更新的管理区以获得更多信息.',

	'admin:plugins:dependencies:type' => '类型',
	'admin:plugins:dependencies:name' => '名字',
	'admin:plugins:dependencies:expected_value' => '测试值',
	'admin:plugins:dependencies:local_value' => '实际值',
	'admin:plugins:dependencies:comment' => '评论',

	'admin:statistics:description' => "这是一个在您网站上统计的概述. 如果您需要更多详细数据, 一个专业的管理功能是可用的",
	'admin:statistics:opt:description' => "查看用户和您的网站对象的统计信息.",
	'admin:statistics:opt:linktext' => "查看统计...",
	'admin:statistics:label:basic' => "基本站点数据",
	'admin:statistics:label:numentities' => "网站实体",
	'admin:statistics:label:numusers' => "用户数",
	'admin:statistics:label:numonline' => "在线用户数",
	'admin:statistics:label:onlineusers' => "在线用户",
	'admin:statistics:label:version' => "Elgg 版本",
	'admin:statistics:label:version:release' => "发布",
	'admin:statistics:label:version:version' => "版本",

	'admin:user:label:search' => "查找用户:",
	'admin:user:label:searchbutton' => "查找",

	'admin:user:ban:no' => "不能禁止用户",
	'admin:user:ban:yes' => "禁止用户.",
	'admin:user:self:ban:no' => "您不能禁止自己",
	'admin:user:unban:no' => "不能解除禁止用户",
	'admin:user:unban:yes' => "用户未禁止.",
	'admin:user:delete:no' => "不能删除用户",
	'admin:user:delete:yes' => "用户 %s 已被删除",
	'admin:user:self:delete:no' => "您不能删除自己",

	'admin:user:resetpassword:yes' => "密码重设, 用户通知.",
	'admin:user:resetpassword:no' => "密码不能被重设.",

	'admin:user:makeadmin:yes' => "用户现在是一个管理员.",
	'admin:user:makeadmin:no' => "我们不能让这个用户成为管理员.",

	'admin:user:removeadmin:yes' => "用户不再是管理员.",
	'admin:user:removeadmin:no' => "我们不能取消这个用户的管理员特权.",
	'admin:user:self:removeadmin:no' => "您不能取消您自己的管理员特权.",

	'admin:appearance:menu_items' => '菜单目录',
	'admin:menu_items:configure' => '配置主要的菜单目录',
	'admin:menu_items:description' => '选择您想显示功能连接的菜单项目.  未使用的项目将作为“更多“在列表的末尾.',
	'admin:menu_items:hide_toolbar_entries' => '从工具栏菜单中删除链接?',
	'admin:user:self:delete:no' => "您不能删除自己",

	'admin:user:resetpassword:yes' => "密码重置, 用户通知.",
	'admin:user:resetpassword:no' => "密码不能被重置.",

	'admin:user:makeadmin:yes' => "用户不是管理员.",
	'admin:user:makeadmin:no' => "我们无法让该用户成为管理员.",

	'admin:user:removeadmin:yes' => "用户不再是管理员.",
	'admin:user:removeadmin:no' => "我们无法去除该用户的管理员权限.",
	'admin:user:self:removeadmin:no' => "您无法自己去除您自己的管理员权限.",

	'admin:appearance:menu_items' => '菜单项',
	'admin:menu_items:configure' => '配置主菜单项',
	'admin:menu_items:description' => '选择您想要显示为功能连接的菜单项.  未使用的项目将作为“更多“在列表的末尾.',
	'admin:menu_items:hide_toolbar_entries' => '从工具栏中删除连接？',
	'admin:menu_items:saved' => '保存菜单项.',
	'admin:add_menu_item' => '添加自定义菜单项',
	'admin:add_menu_item:description' => '填写显示名称和URL添加自定义项目到您的导航菜单.',

	'admin:appearance:default_widgets' => '默认小工具',
	'admin:default_widgets:unknown_type' => '未知的小工具类型',
	'admin:default_widgets:instructions' => '添加，删除，位置和配置所选部件页的默认部件.'
		. '  这些变化将只适用于站点的新内容.',



/**
 * User settings
 */
	'usersettings:description' => "用户设置面板使您可以控制??所有的个人设置, 从用户管理查看插件如何运作e. 选择下面的选项开始.",

	'usersettings:statistics' => "您的统计资料",
	'usersettings:statistics:opt:description' => "查看统计信息的用户和您的网站对象.",
	'usersettings:statistics:opt:linktext' => "账户统计",

	'usersettings:user' => "您的设置",
	'usersettings:user:opt:description' => "这是您控制用户设置.",
	'usersettings:user:opt:linktext' => "改变您的设置",

	'usersettings:plugins' => "工具",
	'usersettings:plugins:opt:description' => "为您的积极工具配置设置（如果有）.",
	'usersettings:plugins:opt:linktext' => "配置您的工具",

	'usersettings:plugins:description' => "此面板可以通过系统管理员控制和配置您的工具安装的个人设置.",
	'usersettings:statistics:label:numentities' => "您的内容",

	'usersettings:statistics:yourdetails' => "您的详细信息",
	'usersettings:statistics:label:name' => "全名",
	'usersettings:statistics:label:email' => "Email",
	'usersettings:statistics:label:membersince' => "会员自",
	'usersettings:statistics:label:lastlogin' => "最后一次登录",

/**
 * Activity river
 */
	'river:all' => '所有站点动态',
	'river:mine' => '我的动态',
	'river:friends' => '好友动态',
	'river:select' => '显示 %s',
	'river:comments:more' => '+%u 更多',
	'river:generic_comment' => '评论 %s %s',

	'friends:widget:description' => "显示部分好友.",
	'friends:num_display' => "显示的好友数",
	'friends:icon_size' => "图标大小",
	'friends:tiny' => "小",
	'friends:small' => "少",

/**
 * Generic action words
 */

	'save' => "保存",
	'reset' => '重置',
	'publish' => "发布",
	'cancel' => "删除",
	'saving' => "保存 ...",
	'update' => "更新",
	'edit' => "编辑",
	'delete' => "删除",
	'accept' => "接受",
	'load' => "装载",
	'upload' => "上传",
	'ban' => "禁令",
	'unban' => "解除禁令",
	'banned' => "已禁令",
	'enable' => "启用",
	'disable' => "禁用",
	'request' => "请求",
	'complete' => "完成",
	'open' => '打开',
	'close' => '关闭',
	'reply' => "回复",
	'more' => '更多',
	'comments' => '评论',
	'import' => '进口',
	'export' => '出口',
	'untitled' => '无题',
	'help' => '帮助',
	'send' => '发送',
	'post' => '发表',
	'submit' => '提交',
	'comment' => '评论',
	'upgrade' => '更新',

	'site' => '站点',
	'activity' => '动态',
	'members' => '会员',

	'up' => '上',
	'down' => '下',
	'top' => '顶',
	'bottom' => '底',

	'invite' => "邀请",

	'resetpassword' => "重设密码",
	'makeadmin' => "成为管理员",
	'removeadmin' => "删除管理员",

	'option:yes' => "是",
	'option:no' => "否",

	'unknown' => '未知的',

	'active' => '主动的',
	'total' => '全部',

	'learnmore' => "点击这里了解更多.",

	'content' => "内容",
	'content:latest' => '最新动态',
	'content:latest:blurb' => '或者，点击这里从整个网站查看最新内容.',

	'link:text' => '视图链接',
/**
 * Generic questions
 */

	'question:areyousure' => '您确定吗?',

/**
 * Generic data words
 */

	'title' => "标题",
	'description' => "说明",
	'tags' => "标签",
	'spotlight' => "聚光灯",
	'all' => "所有",
	'mine' => "我的",

	'by' => '由',

	'annotations' => "注解",
	'relationships' => "关系",
	'metadata' => "元数据",
	'tagcloud' => "标签云",
	'tagcloud:allsitetags' => "所有的站点标签",

/**
 * Entity actions
 */
	'edit:this' => '编辑本',
	'delete:this' => '删除此',
	'comment:this' => '对此有何评论',

/**
 * Input / output strings
 */

	'deleteconfirm' => "您确定删除此项目?",
	'fileexists' => "一个文件已被上传。要替代它，请在下面选择它:",

/**
 * User add
 */

	'useradd:subject' => '创建用户账号',
	'useradd:body' => '
%s,

　　　　一个用户账户已经在 %s为您创建. 要登陆，请访问:

%s

　　　　用这些用户凭证登陆:

　　　　用户名: %s
　　　　密码: %s

　　　　一旦您已登陆, 我们强烈建议您修改密码.
',

/**
 * System messages
 **/

	'systemmessages:dismiss' => "点击关闭",


/**
 * Import / export
 */
	'importsuccess' => "数据导入成功",
	'importfail' => "数据的开放导入失败.",

/**
 * Time
 */

	'friendlytime:justnow' => "于现在",
	'friendlytime:minutes' => "于%s分钟前",
	'friendlytime:minutes:singular' => "于一分钟前",
	'friendlytime:hours' => "于%s小时前",
	'friendlytime:hours:singular' => "于一小时前",
	'friendlytime:days' => "于%s天前",
	'friendlytime:days:singular' => "于昨天",
	'friendlytime:date_format' => 'j F Y @ g:ia',

	'date:month:01' => '一月 %s',
	'date:month:02' => '二月 %s',
	'date:month:03' => '三月 %s',
	'date:month:04' => '四月 %s',
	'date:month:05' => '五月 %s',
	'date:month:06' => '六月 %s',
	'date:month:07' => '七月 %s',
	'date:month:08' => '八月 %s',
	'date:month:09' => '九月 %s',
	'date:month:10' => '十月 %s',
	'date:month:11' => '十一月 %s',
	'date:month:12' => '十二月 %s',


/**
 * System settings
 */

	'installation:sitename' => "您的网站名:",
	'installation:sitedescription' => "您的网站的简短介绍 (可选):",
	'installation:wwwroot' => "网站 URL:",
	'installation:path' => "该Elgg安装的完整路径:",
	'installation:dataroot' => "数据目录的完整路径:",
	'installation:dataroot:warning' => "您必须手动创建这个目录. 它应该在一个不同的目录安装到您的Elgg.",
	'installation:sitepermissions' => "默认访问权限:",
	'installation:language' => "默认网站语言:",
	'installation:debug' => "调试模式提供了额外的信息，可以用于诊断故障. 然而, 它可以使系统慢下来，因此它仅应该在你有问题时使用:",
	'installation:debug:none' => '关闭调试模式 (推荐)',
	'installation:debug:error' => '只显示关键错误',
	'installation:debug:warning' => '显示错误和警告',
	'installation:debug:notice' => '记录所有错误警告和通知',

	// Walled Garden support
	'installation:registration:description' => '用户注册是默认启用.，如果您不希望新用户可以自己注册请打开这个功能.',
	'installation:registration:label' => '允许新用户注册',
	'installation:walled_garden:description' => '使网站作为专用网络运行. 这不会允许非注册用户查看任何网站网页除特别标明公开的之外.',
	'installation:walled_garden:label' => '限制页面注册用户',

	'installation:httpslogin' => "启用此使用户通过HTTPS进行登录. 您将需要在您的服务器上启用https 工作.",
	'installation:httpslogin:label' => "启用 HTTPS 登录",
	'installation:view' => "进入网站的默认试图或者留下空白作为默认试图 (如果有疑问，保留为默认):",

	'installation:siteemail' => "网站email 地址 (当发送系统email时用)",

    'installation:disableapi' => "Elgg为创建web服务提供API以便远程应用程序能联系您的网站.",
	'installation:disableapi:label' => "启用Elgg的Web服务API ",

	'installation:allow_user_default_access:description' => "如果选中，将允许个人用户设置自己的默认访问级别，可以通过预约系统默认的访问级别.",
	'installation:allow_user_default_access:label' => "允许用户默认访问",

	'installation:simplecache:description' => "这个简单缓存通过包括一些 CSS 和 JavaScript 文件的缓存静态内容 提高性能. 通常你会希望这个.",
	'installation:simplecache:label' => "使用简单缓存(推荐)",

	'installation:viewpathcache:description' => "视图文件路径缓存 通过它的视图的缓存路径减少插件的装载时间.",
	'installation:viewpathcache:label' => "使用视图文件路径缓存(推荐)",

	'upgrading' => '升级...',
	'upgrade:db' => '你的数据库进行了升级.',
	'upgrade:core' => '您的Elgg安装已更新',
	'upgrade:unable_to_upgrade' => '无法更新.',
	'upgrade:unable_to_upgrade_info' =>
		'这个安装不能更新因为在 Elgg 核心视图目录中的遗留视图已被删除
 这些视图已经过时需要删除才能使Elgg正常运行您还没有改变Elgg核心
　　　　您可以删除视图目录 或用来自最新的下载自<a href="http://elgg.org">elgg.org</a>.<br /><br />Elgg 包裹替代
		如果您需要详细说明, 请访问 <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		升级Elgg 文件</a>.  如果您需要帮助, 请邮寄至
		<a href="http://community.elgg.org/pg/groups/discussion/">社区支持论坛a>.',

	'update:twitter_api:deactivated' => 'Twitter API (先前的 Twitter 服务) 在升级过程中被停用. 如果需要请手动激活它.',
	'update:oauth_api:deactivated' => 'OAuth API (先前的OAuth Lib) 在升级过程中被停用.  如果需要请手动激活它',

	'deprecated:function' => '%s()被%s()废弃 ',

/**
 * Welcome
 */

	'welcome' => "欢迎",
	'welcome:user' => '欢迎 %s',

/**
 * Emails
 */
	'email:settings' => "Email设置",
	'email:address:label' => "您的email地址",

	'email:save:success' => "新email 地址已保存, 核查要求.",
	'email:save:fail' => "新的电子邮件地址无法保存.",

	'friend:newfriend:subject' => "%s 已经成为您的好友!",
	'friend:newfriend:body' => "%s 已经将您加为好友!

　　　　要查看他们的个人资料请点击这里:

%s

　　　　您无须回复这个Email。",



	'email:resetpassword:subject' => "密码重置!",
	'email:resetpassword:body' => "嗨 %s,

　　　　您的密码被重设为: %s",


	'email:resetreq:subject' => "请求新密码.",
	'email:resetreq:body' => "嗨 %s,

　　　　某人 (从 IP地址 %s) 已为他的账户申请新的密码.

　　　　如果您请求这个请点击下面的链接, 否则忽视这个email.

%s
",

/**
 * user default access
 */

'default_access:settings' => "您的默认访问级别",
'default_access:label' => "默认的访问",
'user:default_access:success' => "您的新默认访问级别已存储.",
'user:default_access:failure' => "您的新默认访问级别无法存储.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"输入数据丢失",

/**
 * Comments
 */

	'comments:count' => "%s 评论",

	'riveraction:annotation:generic_comment' => '%s 评论 %s',

	'generic_comments:add' => "发表评论",
	'generic_comments:post' => "发表评论",
	'generic_comments:text' => "评论",
	'generic_comments:latest' => "最新评论",
	'generic_comment:posted' => "您的评论成功发表.",
	'generic_comment:deleted' => "这个评论成功删除.",
	'generic_comment:blank' => "对不起, 在我们保存它之前您需要真正的东西放到您的评论中.",
	'generic_comment:notfound' => "对不起, 我们不能发现指定的项目.",
	'generic_comment:notdeleted' => "对不起, 我们不能删除这个评论.",
	'generic_comment:failure' => "进入您的意见时发生意外错误，请再试一遍.",
	'generic_comment:none' => '没有评论',

	'generic_comment:email:subject' => '您有一个新评论!',
	'generic_comment:email:body' => "在您的项目上有一个新评论\"%s\" from %s. 它是:


%s


　　　　要回复或查看原始项目，请点击这里:

%s

　　　　要查看％s的个人档案，请点击这里:

%s

　　　　您不能回复这个email.",

/**
* Entities
 */
	'byline' => '由%s发布',
	'entity:default:strapline' => '发布:%s，发布人：%s',
	'entity:default:missingsupport:popup' => '这个实体不能被正确显示. 这可能因为它需要通过安装插件来支持.',

	'entity:delete:success' => '该入口％s已被删除',
	'entity:delete:fail' => '该入口%s 不能被删除',


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => '表已丢失 __标记 或__ts 领域',
	'actiongatekeeper:tokeninvalid' => "我们遇到了一个错误 (标记不匹配). 这可能意味着您使用的网页已过期.请重试一遍.",
	'actiongatekeeper:timeerror' => '您正在使用的网页已经过期请刷新重试.',
	'actiongatekeeper:pluginprevents' => '一个扩展已经阻止这个表提交.',


/**
 * Word blacklists
 */
	'word:blacklist' => '而且,那么,但是,她,他,她,他,一个,而不是,也约,现在,因而,然而,尽管如此,同样的,否则,因此,反过来说,相反,因此,此外,然而,相反,同时,相应地,这一点,似乎什么,谁,是谁,无论谁,任何人',

/**
 * Tag labels
 */

	'tag_names:tags' => '标签',
	'tags:site_cloud' => '网站标签云',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => '无法连接 %s. 您可能会遇到存储内容的问题.',
	'js:security:token_refreshed' => '连接到％s恢复!',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Greek",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Spanish",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Dutch",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanian",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "中文",
    "zh_cn" => "简体中文",
	"zu" => "Zulu",
);

add_translation("zh_cn",$simplifiedChinese);
