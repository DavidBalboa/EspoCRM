<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => '用户',
      'action' => '动作',
      'createdAt' => '日期',
      'target' => '目标',
      'targetType' => '目标类型',
      'authToken' => '授权令牌',
      'ipAddress' => 'IP地址',
      'authLogRecord' => '身份验证日志记录',
    ),
    'links' => 
    array (
      'authToken' => '授权令牌',
      'authLogRecord' => '身份验证日志记录',
      'user' => '用户',
      'target' => '目标',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => '只有我的',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => '读取',
        'update' => '升级',
        'delete' => '删除',
        'create' => '创建',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => '已启用',
      'Disabled' => '已禁用',
      'System' => '系统',
      'Users' => '用户',
      'Email' => '电子邮件',
      'Data' => '数据',
      'Customization' => '自定义',
      'Available Fields' => '可用的字段',
      'Layout' => '布局',
      'Entity Manager' => '功能管理器',
      'Add Panel' => '添加面板',
      'Add Field' => '添加字段',
      'Settings' => '设置',
      'Scheduled Jobs' => '计划任务',
      'Upgrade' => '升级',
      'Clear Cache' => '清除缓存',
      'Rebuild' => '重建',
      'Teams' => '团队',
      'Roles' => '角色',
      'Portal' => '门户',
      'Portals' => '门户',
      'Portal Roles' => '门户角色',
      'Portal Users' => '门户用户',
      'Outbound Emails' => '外发邮件',
      'Group Email Accounts' => '邮件组帐户',
      'Personal Email Accounts' => '私人邮件帐户',
      'Inbound Emails' => '入站邮件',
      'Email Templates' => '邮件模板',
      'Import' => '导入',
      'Layout Manager' => '布局管理器',
      'User Interface' => '用户界面',
      'Auth Tokens' => '认证令牌',
      'Auth Log' => '身份验证日志',
      'Authentication' => '身份验证',
      'Currency' => '货币',
      'Integrations' => '集成',
      'Extensions' => '扩展',
      'Upload' => '上传',
      'Installing...' => '正在安装...',
      'Upgrading...' => '正在升级...',
      'Upgraded successfully' => '升级成功',
      'Installed successfully' => '安装成功',
      'Ready for upgrade' => '准备升级',
      'Run Upgrade' => '开始升级',
      'Install' => '安装',
      'Ready for installation' => '准备安装',
      'Uninstalling...' => '正在卸载…',
      'Uninstalled' => '已卸载',
      'Create Entity' => '创建实体',
      'Edit Entity' => '编辑实体',
      'Create Link' => '创建链接',
      'Edit Link' => '编辑链接',
      'Notifications' => '提醒',
      'Jobs' => '任务',
      'Reset to Default' => '重置为默认',
      'Email Filters' => '邮件过滤器',
      'Action History' => '动作历史',
      'Label Manager' => '标签管理',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => '附件',
    ),
    'layouts' => 
    array (
      'list' => '列表',
      'detail' => '详情',
      'listSmall' => '列表（小）',
      'detailSmall' => '详情（小）',
      'detailPortal' => '详情(门户)',
      'detailSmallPortal' => '详情(小,门户)',
      'listSmallPortal' => '列表(小,门户)',
      'listPortal' => '列表(门户)',
      'relationshipsPortal' => '关系面板(门户)',
      'filters' => '搜索过滤器',
      'massUpdate' => '批量更新',
      'relationships' => '关系面板',
      'sidePanelsDetail' => '侧板（详情）',
      'sidePanelsEdit' => '侧板（编辑）',
      'sidePanelsDetailSmall' => '侧面板（小详情）',
      'sidePanelsEditSmall' => '侧面板（小编辑）',
      'kanban' => '看板',
      'detailConvert' => '转换潜在客户',
      'listForAccount' => '列表（帐户）',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => '动作',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duration',
      'password' => 'Password',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Boolean',
      'currency' => 'Currency',
      'currencyConverted' => '货币（已转换）',
      'date' => 'Date',
      'datetime' => 'DateTime',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'phone' => 'Phone',
      'text' => 'Text',
      'url' => 'URL',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Image',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Attachment Multiple',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Map',
      'number' => '数字',
      'colorpicker' => '拾色器',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
    ),
    'fields' => 
    array (
      'type' => '类型',
      'name' => '名称',
      'label' => '标签',
      'tooltipText' => '工具提示文本',
      'required' => '必填',
      'default' => '默认',
      'maxLength' => '最大长度',
      'options' => '选项',
      'after' => '在之后（字段）',
      'before' => '在之前（字段）',
      'link' => '连接',
      'field' => '字段',
      'min' => '最小',
      'max' => '最大',
      'translation' => '翻译',
      'previewSize' => '预览大小',
      'noEmptyString' => '不允许清空字符串',
      'defaultType' => '默认类型',
      'seeMoreDisabled' => '禁用文本剪切',
      'entityList' => '功能列表',
      'isSorted' => '排序（按字母顺序）',
      'audited' => '审计',
      'trim' => '修剪',
      'height' => '高度 (px)',
      'minHeight' => '最小高度 (px)',
      'provider' => '提供者',
      'typeList' => '类型列表',
      'rows' => '文本框高度',
      'lengthOfCut' => '切割长度',
      'sourceList' => '源列表',
      'prefix' => '称谓',
      'nextNumber' => '下一个数',
      'padLength' => '填充长度',
      'disableFormatting' => '禁用格式',
      'dynamicLogicVisible' => '条件使字段可见',
      'dynamicLogicReadOnly' => '条件使字段只读',
      'dynamicLogicRequired' => '条件使字段可得',
      'dynamicLogicOptions' => '条件选项',
      'probabilityMap' => '阶段概率 (%)',
      'readOnly' => '只读',
      'maxFileSize' => '文件最大大小',
      'isPersonalData' => '个人数据',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => '使用数字格式',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM将升级至版本<strong>{version}</strong>, 升级可能需要一段时间，请耐心等待。',
      'upgradeDone' => 'EspoCRM已升级至版本<strong>{version}</strong>。',
      'upgradeBackup' => '建议在升级EspoCRM之前备份文件和数据。',
      'thousandSeparatorEqualsDecimalMark' => '千分分隔符不能与小数点字符相同。',
      'userHasNoEmailAddress' => '用户未设置Email地址。',
      'selectEntityType' => '在左侧菜单选择功能类型。',
      'selectUpgradePackage' => '选择升级包',
      'downloadUpgradePackage' => '点击<a href="{url}">这里</a>下载升级包。',
      'selectLayout' => '在左侧菜单选择并编辑所需的布局。',
      'selectExtensionPackage' => '选择扩展包',
      'extensionInstalled' => '扩展{name}{version}已安装。',
      'installExtension' => '扩展{name}{version}已准备好进行安装。',
      'cronIsNotConfigured' => '计划作业没有运行。因此入站邮件、通知和提醒都不起作用。 请按照[instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab)设置 cron job.',
      'newVersionIsAvailable' => '有新的EspoCRM版本{latestVersion}可用。',
      'newExtensionVersionIsAvailable' => '{extensionName}有新版本{latestVersion}可以使用。',
      'uninstallConfirmation' => '是否卸载扩展？',
    ),
    'descriptions' => 
    array (
      'settings' => '应用程序的系统设置。',
      'scheduledJob' => '由Cron执行的作业。',
      'upgrade' => '升级EspoCRM。',
      'clearCache' => '清除所有后端缓存。',
      'rebuild' => '重建后端并清除缓存。',
      'users' => '用户管理。',
      'teams' => '团队管理。',
      'roles' => '角色管理。',
      'portals' => '门户管理。',
      'portalRoles' => '门户的角色。',
      'portalUsers' => '门户用户。',
      'outboundEmails' => '外发邮件的SMTP服务器设置。',
      'groupEmailAccounts' => '组邮件帐户IMAP。邮件导入和邮件到工单。',
      'personalEmailAccounts' => '用户邮件帐户。',
      'emailTemplates' => '外发邮件模板。',
      'import' => '从CSV文件导入数据。',
      'layoutManager' => '自定义布局（列表，详情，编辑，搜索，批量更新）。',
      'entityManager' => '创建并编辑自定义记录。管理字段和关系。',
      'userInterface' => '配置UI。',
      'authTokens' => '活动身份验证会话, IP 地址和最后访问日期。',
      'authentication' => '身份验证设置。',
      'currency' => '货币设置和汇率。',
      'extensions' => '安装或卸载扩展。',
      'integrations' => '集成第三方服务。',
      'notifications' => '系统内部通知和邮件通知设置。',
      'inboundEmails' => '入站邮件设置。',
      'emailFilters' => 'Email内容与过滤器规则相匹配将无法被导入。',
      'actionHistory' => '记录用户行为。',
      'labelManager' => '自定义应用标签。',
      'authLog' => '历史登录记录信息',
      'leadCapture' => 'Web-to-Lead的API入口点。',
      'attachments' => '存储在系统中的所有文件附件。',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => '最小',
        'small' => '小',
        'medium' => '中',
        'large' => '大',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => '和',
      'or' => '或者',
      'not' => '不',
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'role' => '角色',
      'related' => '相关',
      'file' => 'File',
      'type' => '类型',
      'field' => '字段',
      'sourceId' => '源ID',
      'storage' => '存储',
      'size' => '大小(bytes)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => '附加',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => '内联附件',
        'Export File' => '导出文件',
        'Mail Merge' => '邮件合并',
        'Mass Pdf' => 'Mass Pdf',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => '插入文档',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Orphan',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'username' => '用户名',
      'ipAddress' => 'IP地址',
      'requestTime' => '请求时间',
      'createdAt' => '请求时间',
      'isDenied' => '被拒绝',
      'denialReason' => '拒绝原因',
      'portal' => '门户',
      'user' => '用户',
      'authToken' => '身份验证令牌已创建',
      'requestUrl' => '请求URL',
      'requestMethod' => '请求方法',
      'authTokenIsActive' => '身份验证令牌已激活',
    ),
    'links' => 
    array (
      'authToken' => '创建身份验证令牌',
      'user' => '用户',
      'portal' => '门户',
      'actionHistoryRecords' => '历史操作',
    ),
    'presetFilters' => 
    array (
      'denied' => '禁止',
      'accepted' => '通过',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => '无效的证书',
        'INACTIVE_USER' => '未激活用户',
        'IS_PORTAL_USER' => '门户用户',
        'IS_NOT_PORTAL_USER' => '不是门户用户',
        'USER_IS_NOT_IN_PORTAL' => '用户与门户无关',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => '用户',
      'ipAddress' => 'IP地址',
      'lastAccess' => '最后访问日期',
      'createdAt' => '登录日期',
      'isActive' => '已激活',
      'portal' => '门户',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => '历史操作',
    ),
    'presetFilters' => 
    array (
      'active' => '激活',
      'inactive' => '未激活',
    ),
    'labels' => 
    array (
      'Set Inactive' => '设为未激活',
    ),
    'massActions' => 
    array (
      'setInactive' => '设为未激活',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => '标题',
      'dateFrom' => '开始日期',
      'dateTo' => '结束日期',
      'autorefreshInterval' => '自动刷新间隔',
      'displayRecords' => '显示记录',
      'isDoubleHeight' => '2倍高度',
      'mode' => '模式',
      'enabledScopeList' => '显示什么',
      'users' => '用户',
      'entityType' => '功能类型',
      'primaryFilter' => '主要过滤器',
      'boolFilterList' => '扩展过滤器',
      'sortBy' => '订单（字段）',
      'sortDirection' => '订单（方向）',
      'expandedLayout' => '布局',
      'dateFilter' => '日期过滤器',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => '周（议程）',
        'basicWeek' => '周',
        'month' => '月',
        'basicDay' => '日',
        'agendaDay' => '日（议程）',
        'timeline' => '时间线',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => '在看板设置里选择实体类型。',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Field',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => '等于',
        'notEquals' => '不等于',
        'greaterThan' => '大于',
        'lessThan' => '少于',
        'greaterThanOrEquals' => '大于或等于',
        'lessThanOrEquals' => '少于或者等于',
        'in' => '在里面',
        'notIn' => '不在里面',
        'inPast' => '过去',
        'inFuture' => '今后',
        'isToday' => '今天',
        'isTrue' => '正确',
        'isFalse' => '错误',
        'isEmpty' => '空',
        'isNotEmpty' => '不为空',
        'contains' => '包含',
        'notContains' => '不包含',
        'has' => '包含',
        'notHas' => '不包含',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => '命名（主题）',
      'parent' => '关联',
      'status' => '状态',
      'dateSent' => '发送日期',
      'from' => '发件人',
      'to' => '收件人',
      'cc' => '抄送',
      'bcc' => '密送',
      'replyTo' => '回复',
      'replyToString' => '回复（字符串）',
      'isHtml' => '是HTML',
      'body' => '正文',
      'bodyPlain' => 'Body (Plain)',
      'subject' => '主题',
      'attachments' => '附件',
      'selectTemplate' => '选择模板',
      'fromEmailAddress' => '发件人地址',
      'toEmailAddresses' => '收件人地址',
      'emailAddress' => '邮件地址',
      'deliveryDate' => '邮寄日期',
      'account' => '账户',
      'users' => '用户',
      'replied' => '已回复',
      'replies' => '回复',
      'isRead' => '已读',
      'isNotRead' => '未读',
      'isImportant' => '重要',
      'isReplied' => '已回复',
      'isNotReplied' => '未回复',
      'isUsers' => '是用户的',
      'inTrash' => '在垃圾箱',
      'sentBy' => '发送者',
      'folder' => '文件夹',
      'inboundEmails' => '组帐户',
      'emailAccounts' => '个人帐户',
      'hasAttachment' => '有附件',
      'assignedUsers' => '已指派用户',
      'ccEmailAddresses' => 'CC地址',
      'bccEmailAddresses' => 'BCC地址',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Message Id',
      'messageIdInternal' => 'Message Id (Internal)',
      'folderId' => 'Folder Id',
      'fromName' => '发件人',
      'fromString' => 'From String',
      'isSystem' => 'Is System',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'replied' => '已回复',
      'replies' => '回复',
      'inboundEmails' => '邮件组帐户',
      'emailAccounts' => '个人帐户',
      'assignedUsers' => '已指派用户',
      'sentBy' => '发送者',
      'attachments' => '附件',
      'fromEmailAddress' => '发件人地址',
      'toEmailAddresses' => '收件人地址',
      'ccEmailAddresses' => 'CC地址',
      'bccEmailAddresses' => 'BCC地址',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => '草稿',
        'Sending' => '发送中',
        'Sent' => '发送',
        'Archived' => '归档',
        'Received' => '已接收',
        'Failed' => '失败',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => '归档邮件',
      'Archive Email' => '归档邮件',
      'Compose' => '写邮件',
      'Reply' => '回复',
      'Reply to All' => '回复全部',
      'Forward' => '转发',
      'Original message' => '原始消息',
      'Forwarded message' => '已转发消息',
      'Email Accounts' => '个人邮件帐户',
      'Inbound Emails' => '邮件组帐户',
      'Email Templates' => '邮件模板',
      'Send Test Email' => '发送测试邮件',
      'Send' => '发送',
      'Email Address' => '邮件地址',
      'Mark Read' => '标记为已读',
      'Sending...' => '发送中...',
      'Save Draft' => '保存草稿',
      'Mark all as read' => '标记所有为已读',
      'Show Plain Text' => '显示纯文本',
      'Mark as Important' => '标记为重要',
      'Unmark Importance' => '取消重要标记',
      'Move to Trash' => '移到垃圾箱',
      'Retrieve from Trash' => '从垃圾箱中取回',
      'Move to Folder' => '移动到文件夹',
      'Filters' => '筛选器',
      'Folders' => '文件夹',
      'Create Lead' => '创建潜在客户',
      'Create Contact' => '创建联系人',
      'Add to Contact' => '添加到联系人',
      'Add to Lead' => '添加至潜在客户',
      'Create Task' => '创建任务',
      'Create Case' => '创建工单',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => '无SMTP设置。{link}。',
      'testEmailSent' => '测试邮件已发送',
      'emailSent' => '邮件已发送',
      'savedAsDraft' => '保存为草稿',
      'confirmInsertTemplate' => '邮件正文将丢失,您确定要插入模板吗?',
    ),
    'presetFilters' => 
    array (
      'sent' => '已发送',
      'archived' => '归档',
      'inbox' => '收件箱',
      'drafts' => '草稿箱',
      'trash' => '垃圾箱',
      'important' => '重要的',
    ),
    'massActions' => 
    array (
      'markAsRead' => '标记为已读',
      'markAsNotRead' => '标记为未读',
      'markAsImportant' => '标记为重要',
      'markAsNotImportant' => '取消重要标记',
      'moveToTrash' => '移到垃圾箱',
      'moveToFolder' => '移动到文件夹',
      'retrieveFromTrash' => '从垃圾箱回收',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'host' => '主机',
      'username' => '用户名',
      'password' => '密码',
      'port' => '端口',
      'monitoredFolders' => '监视的文件夹',
      'ssl' => 'SSL',
      'fetchSince' => '获取从',
      'emailAddress' => '邮件地址',
      'sentFolder' => '发送文件夹',
      'storeSentEmails' => '存储发送的邮件',
      'keepFetchedEmailsUnread' => '保持获取的邮件为未读',
      'emailFolder' => '放入文件夹',
      'useImap' => 'Fetch Emails',
      'useSmtp' => '使用SMTP',
      'smtpHost' => 'SMTP主机',
      'smtpPort' => 'SMTP端口',
      'smtpAuth' => 'SMTP授权',
      'smtpSecurity' => 'SMTP安全协议',
      'smtpUsername' => 'SMTP用户名',
      'smtpPassword' => 'SMTP密码',
    ),
    'links' => 
    array (
      'filters' => '过滤器',
      'emails' => '邮箱',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '启用',
        'Inactive' => '未启用',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => '创建邮件帐户',
      'IMAP' => 'IMAP',
      'Main' => '主要',
      'Test Connection' => '测试连接',
      'Send Test Email' => '发送编辑邮件',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => '无法连接到IMAP服务器',
      'connectionIsOk' => '连接正常',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => '多个文件夹用逗号分隔。

添加 ‘Sent’ 文件夹与外部邮件客户端同步已发邮件。',
      'storeSentEmails' => '发送的电子邮件将存储在IMAP服务器上,电子邮件地址字段应该与将要发送的电子邮件地址匹配。',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => '首选',
      'Opted Out' => '选择退出',
      'Invalid' => '无效',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => '从',
      'to' => '至',
      'subject' => '主题',
      'bodyContains' => '正文包含',
      'action' => '活动',
      'isGlobal' => '全局',
      'emailFolder' => '文件夹',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => '创建邮件过滤器',
      'Emails' => '邮件',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => '忽略',
        'Move to Folder' => '放入文件夹',
      ),
    ),
    'tooltips' => 
    array (
      'name' => '给过滤器一个描述性名称。',
      'subject' => '使用通配符 *:

text* - 以text开头,
*text* - 包含text,
*text - 以text结尾.',
      'bodyContains' => '电子邮件的正文包含任何指定的单词或短语。',
      'from' => '邮件正发往指定的地址,如不需要请留空,可以使用通配符*。',
      'to' => '邮件正在发往指定地址,如不需要请留空,可使用通配符 *。',
      'isGlobal' => '将此筛选器应用到系统中所有的入站邮件。',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => '跳过通知',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => '创建文件夹',
      'Manage Folders' => '管理文件夹',
      'Emails' => '邮箱',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'isHtml' => '是HTML',
      'body' => '正文',
      'subject' => '主题',
      'attachments' => '附件',
      'insertField' => '插入字段',
      'oneOff' => '一次性',
      'category' => '分类',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => '创建邮件模板',
      'Info' => '信息',
      'Available placeholders' => '可用变量',
    ),
    'messages' => 
    array (
      'infoText' => '可用变量：

{optOutUrl} &#8211; URL为一个退订链接;

{optOutLink} &#8211;一个退订链接。',
    ),
    'tooltips' => 
    array (
      'oneOff' => '如果此模板你仅用一次则选中此项。例如，批量邮件。',
    ),
    'presetFilters' => 
    array (
      'actual' => '所有',
    ),
    'placeholderTexts' => 
    array (
      'optOutUrl' => '取消订阅地址',
      'optOutLink' => '取消订阅链接',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => '创建分类',
      'Manage Categories' => '管理分类',
      'EmailTemplates' => '邮件模板',
    ),
    'fields' => 
    array (
      'order' => '顺序',
      'childList' => '子列表',
    ),
    'links' => 
    array (
      'emailTemplates' => '邮件模板',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => '字段',
      'Relationships' => '关系',
      'Schedule' => '时间表',
      'Log' => '日志',
      'Formula' => '公式',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'type' => '类型',
      'labelSingular' => '单标签',
      'labelPlural' => '多标签',
      'stream' => '信息流',
      'label' => '标签',
      'linkType' => '连接类型',
      'entityForeign' => '外部实体',
      'linkForeign' => '外部连接',
      'link' => '连接',
      'labelForeign' => '外部标签',
      'sortBy' => '默认排序（字段）',
      'sortDirection' => '默认排序（方向）',
      'relationName' => '中间表名称',
      'linkMultipleField' => '连接多个字段',
      'linkMultipleFieldForeign' => '外部连接多个字段',
      'disabled' => '禁用',
      'textFilterFields' => '文本过滤字段',
      'audited' => '已审核',
      'auditedForeign' => '外部审核',
      'statusField' => '字段状态',
      'beforeSaveCustomScript' => '在保存自定义脚本之前',
      'color' => '颜色',
      'kanbanViewMode' => '预览看板',
      'kanbanStatusIgnoreList' => '看板视图中被忽略的组',
      'iconClass' => '图标',
      'fullTextSearch' => '全文搜索',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => '无',
        'Base' => '基本',
        'Person' => '个人',
        'CategoryTree' => '类别树',
        'Event' => '时间',
        'BasePlus' => '基础增强',
        'Company' => '公司',
      ),
      'linkType' => 
      array (
        'manyToMany' => '多对多',
        'oneToMany' => '一对多',
        'manyToOne' => '多对一',
        'parentToChildren' => '父对子',
        'childrenToParent' => '子对父',
      ),
      'sortDirection' => 
      array (
        'asc' => '升序',
        'desc' => '降序',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => '实体已创建',
      'linkAlreadyExists' => '连接名称冲突。',
      'linkConflict' => '名称冲突：已存在同名连接或字段。',
    ),
    'tooltips' => 
    array (
      'statusField' => '此字段的更新记录在信息流中。',
      'textFilterFields' => '文字搜索使用的字段。',
      'stream' => '不论实体是否有信息流。',
      'disabled' => '检查您的系统中是否不需要此实体。',
      'linkAudited' => '在信息流中将记录创建相关记录并链接现有记录。',
      'linkMultipleField' => '链接多字段提供了编辑关系的方便的方式。不要使用它，如果你可以有大量的相关记录。',
      'entityType' => 'Base Plus  - 具有活动，历史和任务面板。活动 - 在“日历和活动”面板中可用。',
      'fullTextSearch' => '需要运行重新构建。',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => '导出所有字段',
      'fieldList' => '字段列表',
      'format' => '格式',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'version' => '版本',
      'description' => '描述',
      'isInstalled' => '已安装',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => '卸载',
      'Install' => '安装',
    ),
    'messages' => 
    array (
      'uninstalled' => '扩展{name}已卸载',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => '连接',
      'Connected' => '已连接',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => '动态逻辑',
      'Name' => '名称',
      'Label' => '标签',
      'Type' => '类型',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => '无',
        'javascript: return this.dateTime.getNow(1);' => '现在',
        'javascript: return this.dateTime.getNow(5);' => '现在（5分钟）',
        'javascript: return this.dateTime.getNow(15);' => '现在（15分钟）',
        'javascript: return this.dateTime.getNow(30);' => '现在（30分钟）',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1周',
      ),
      'dateDefault' => 
      array (
        '' => '无',
        'javascript: return this.dateTime.getToday();' => '今天',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1天',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2天',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3天',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4天',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5天',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6天',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7天',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8天',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9天',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10天',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1周',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2周',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3周',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1年',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => '更新将会记录在信息流中。',
      'required' => '字段将是强制性的。不能留空。',
      'default' => '值将在创建时默认设置。',
      'min' => '最小可接受的值。',
      'max' => '最大可接受的值。',
      'seeMoreDisabled' => '如果没有检查，那么长的文本将被缩短。',
      'lengthOfCut' => '文字可以在多长时间之前被剪掉。',
      'maxLength' => '最大可接受的文本长度。',
      'before' => '日期值应在指定字段的日期值之前。',
      'after' => '日期值应在指定字段的日期值之后。',
      'readOnly' => '用户不能指定字段值。但可以通过公式计算。',
      'maxFileSize' => '如果为空或0，则没有限制.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => '街道',
        'city' => '城市',
        'state' => '省市',
        'country' => '国家',
        'postalCode' => '邮编',
        'map' => '地图',
      ),
      'personName' => 
      array (
        'salutation' => 'Salutation',
        'first' => 'First',
        'last' => 'Last',
      ),
      'currency' => 
      array (
        'converted' => '(Converted)',
        'currency' => '(Currency)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Date',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => '电子邮件',
      'User' => '用户',
      'Team' => '团队',
      'Role' => '角色',
      'EmailTemplate' => '邮件模板',
      'EmailTemplateCategory' => '邮件模板类别',
      'EmailAccount' => '个人邮件帐户',
      'EmailAccountScope' => '个人邮件帐户',
      'OutboundEmail' => '外发邮件',
      'ScheduledJob' => '计划任务',
      'ExternalAccount' => '外部帐户',
      'Extension' => '扩展',
      'Dashboard' => '仪表板',
      'InboundEmail' => '邮件组帐户',
      'Stream' => '信息流',
      'Import' => '导入',
      'Template' => '模板',
      'Job' => '工作',
      'EmailFilter' => '邮件过滤器',
      'Portal' => '门户',
      'PortalRole' => '门户角色',
      'Attachment' => '附件',
      'EmailFolder' => '邮件文件夹',
      'PortalUser' => '门户用户',
      'ScheduledJobLogRecord' => '计划作业日志记录',
      'PasswordChangeRequest' => '要求修改密码',
      'ActionHistoryRecord' => '动作历史纪录',
      'AuthToken' => '授权令牌',
      'UniqueId' => '唯一身份',
      'LastViewed' => '最近看过',
      'Settings' => '设置',
      'FieldManager' => '字段管理',
      'Integration' => '集成',
      'LayoutManager' => '布局管理',
      'EntityManager' => '记录管理',
      'Export' => '导出',
      'DynamicLogic' => '动态逻辑',
      'DashletOptions' => '看板选项',
      'Admin' => '管理员',
      'Global' => '全局',
      'Preferences' => '属性',
      'EmailAddress' => 'Email 地址',
      'PhoneNumber' => '电话号码',
      'AuthLogRecord' => '身份验证日志记录',
      'AuthFailLogRecord' => '认证失败日志记录',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => '客户',
      'Contact' => '联系人',
      'Lead' => '潜在客户',
      'Target' => '目标',
      'Opportunity' => '商机',
      'Meeting' => '会晤',
      'Calendar' => '日历',
      'Call' => '通话',
      'Task' => '任务',
      'Case' => '工单',
      'Document' => '文件',
      'DocumentFolder' => '文档文件夹',
      'Campaign' => '营销活动',
      'TargetList' => '目标列表',
      'MassEmail' => '群发电子邮件',
      'EmailQueueItem' => '电子邮件队列项',
      'CampaignTrackingUrl' => '跟踪网址',
      'Activities' => '活动',
      'KnowledgeBaseArticle' => '知识库文章',
      'KnowledgeBaseCategory' => '知识库类别',
      'CampaignLogRecord' => '营销活动日志记录',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => '电子邮件',
      'User' => '用户',
      'Team' => '团队',
      'Role' => '角色',
      'EmailTemplate' => '邮件模板',
      'EmailTemplateCategory' => '邮件模板类别',
      'EmailAccount' => '个人邮件帐户',
      'EmailAccountScope' => '个人邮件帐户',
      'OutboundEmail' => '外发邮件',
      'ScheduledJob' => '计划任务',
      'ExternalAccount' => '外部帐户',
      'Extension' => '扩展',
      'Dashboard' => '仪表板',
      'InboundEmail' => '邮件组帐户',
      'Stream' => '信息流',
      'Import' => '导入结果',
      'Template' => '模板',
      'Job' => '工作',
      'EmailFilter' => '邮件过滤器',
      'Portal' => '门户',
      'PortalRole' => '门户角色',
      'Attachment' => '附件',
      'EmailFolder' => '邮件文件夹',
      'PortalUser' => '门户用户',
      'ScheduledJobLogRecord' => '计划作业日志记录',
      'PasswordChangeRequest' => '要求更改密码',
      'ActionHistoryRecord' => '历史操作',
      'AuthToken' => '授权令牌',
      'UniqueId' => '唯一身份',
      'LastViewed' => '最近看过',
      'AuthLogRecord' => '身份验证登录',
      'AuthFailLogRecord' => '身份验证失败的日志',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => '客户',
      'Contact' => '联系人',
      'Lead' => '潜在客户',
      'Target' => '目标',
      'Opportunity' => '商机',
      'Meeting' => '会晤',
      'Calendar' => '日历',
      'Call' => '通话',
      'Task' => '任务',
      'Case' => '工单',
      'Document' => '文件',
      'DocumentFolder' => '文档文件夹',
      'Campaign' => '营销活动',
      'TargetList' => '目标列表',
      'MassEmail' => '群发电子邮件',
      'EmailQueueItem' => '电子邮件队列项',
      'CampaignTrackingUrl' => '跟踪网址',
      'Activities' => '活动',
      'KnowledgeBaseArticle' => '知识库',
      'KnowledgeBaseCategory' => '知识库类别',
      'CampaignLogRecord' => '营销活动日志记录',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' => 
    array (
      'Misc' => '杂项',
      'Merge' => '合并',
      'None' => '无',
      'Home' => '家',
      'by' => '由',
      'Saved' => '已保存',
      'Error' => '错误',
      'Select' => '选择',
      'Not valid' => '无效',
      'Please wait...' => '请稍候...',
      'Please wait' => '请稍候',
      'Loading...' => '载入中...',
      'Uploading...' => '正在上传...',
      'Sending...' => '正在发送...',
      'Merging...' => '合并中...',
      'Merged' => '已合并',
      'Removed' => '已移除',
      'Posted' => '发信息',
      'Linked' => '已连接',
      'Unlinked' => '未连接',
      'Done' => '完成',
      'Access denied' => '拒绝访问',
      'Not found' => '未找到',
      'Access' => '访问',
      'Are you sure?' => '你确定？',
      'Record has been removed' => '记录已删除',
      'Wrong username/password' => '用户名或密码错误',
      'Post cannot be empty' => '内容不能为空',
      'Removing...' => '正在移除...',
      'Unlinking...' => '正在取消连接...',
      'Posting...' => '信息发送中…',
      'Username can not be empty!' => '用户名不能为空！',
      'Cache is not enabled' => '缓存未启用',
      'Cache has been cleared' => '缓存已清除',
      'Rebuild has been done' => '重建已经完成',
      'Return to Application' => '返回至应用',
      'Saving...' => '保存中…',
      'Modified' => '已修改',
      'Created' => '已创建',
      'Create' => '创建',
      'create' => '创建',
      'Overview' => '概览',
      'Details' => '详情',
      'Add Field' => '添加字段',
      'Add Dashlet' => '添加看板',
      'Filter' => '过滤',
      'Edit Dashboard' => '编辑仪表板',
      'Add' => '添加',
      'Add Item' => '添加项',
      'Reset' => '重置',
      'Menu' => '菜单',
      'More' => '更多',
      'Search' => '搜索',
      'Only My' => '仅自己',
      'Open' => '打开',
      'Admin' => '管理员',
      'About' => '关于',
      'Refresh' => '刷新',
      'Remove' => '移除',
      'Options' => '选项',
      'Username' => '用户名',
      'Password' => '密码',
      'Login' => '登录',
      'Log Out' => '退出',
      'Preferences' => '属性',
      'State' => '省',
      'Street' => '街',
      'Country' => '国家',
      'City' => '城市',
      'PostalCode' => '邮编',
      'Followed' => '已关注',
      'Follow' => '关注',
      'Followers' => '关注者',
      'Clear Local Cache' => '清除本地缓存',
      'Actions' => '操作',
      'Delete' => '删除',
      'Update' => '更新',
      'Save' => '保存',
      'Edit' => '编辑',
      'View' => '预览',
      'Cancel' => '取消',
      'Apply' => '应用',
      'Unlink' => '取消连接',
      'Mass Update' => '批量更新',
      'Export' => '导出',
      'No Data' => '没有数据',
      'No Access' => '没有访问',
      'All' => '所有',
      'Active' => '激活',
      'Inactive' => '未激活',
      'Write your comment here' => '在这里写下您的评论',
      'Post' => '帖子',
      'Stream' => '信息流',
      'Show more' => '显示更多',
      'Dashlet Options' => '看板选项',
      'Full Form' => '完整格式',
      'Insert' => '插入',
      'Person' => '人',
      'First Name' => '名字',
      'Last Name' => '姓氏',
      'Original' => '源',
      'You' => '你',
      'you' => '你',
      'change' => '更改',
      'Change' => '更改',
      'Primary' => '首选',
      'Save Filter' => '保存过滤器',
      'Administration' => '管理',
      'Run Import' => '运行导入',
      'Duplicate' => '创建副本',
      'Notifications' => '通知',
      'Mark all read' => '标记所有为已读',
      'See more' => '查看更多',
      'Today' => '今天',
      'Tomorrow' => '明天',
      'Yesterday' => '昨天',
      'Submit' => '提交',
      'Close' => '关闭',
      'Yes' => '是',
      'No' => '否',
      'Select All Results' => '选择所有结果',
      'Value' => '值',
      'Current version' => '当前版本',
      'List View' => '列表视图',
      'Tree View' => '树型视图',
      'Unlink All' => '全部取消连接',
      'Total' => '总计',
      'Print to PDF' => '打印到 PDF',
      'Default' => '默认',
      'Number' => '编号',
      'From' => '从',
      'To' => '至',
      'Create Post' => '创建帖子',
      'Previous Entry' => '上一记录',
      'Next Entry' => '下一记录',
      'View List' => '列表视图',
      'Attach File' => '附加文件',
      'Skip' => '跳过',
      'Attribute' => '属性',
      'Function' => '功能',
      'Self-Assign' => '自分配',
      'Self-Assigned' => '指派给自己',
      'Expand' => 'Expand',
      'Collapse' => 'Collapse',
      'New notifications' => '新通知',
      'Manage Categories' => '管理类别',
      'Manage Folders' => '管理文件夹',
      'Convert to' => '转换',
      'View Personal Data' => '查看个人数据',
      'Personal Data' => '个人数据',
      'Erase' => 'Erase',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => '创建入站电子邮件',
      'Activities' => '活动',
      'History' => '历史',
      'Attendees' => '参加者',
      'Schedule Meeting' => '安排会晤',
      'Schedule Call' => '计划通话',
      'Compose Email' => '写邮件',
      'Log Meeting' => '会晤会议',
      'Log Call' => '通话记录',
      'Archive Email' => '存档电子邮件',
      'Create Task' => '创建任务',
      'Tasks' => '任务',
    ),
    'messages' => 
    array (
      'pleaseWait' => '请稍候...',
      'posting' => '正在发信息...',
      'loading' => '载入中...',
      'saving' => '保存中…',
      'confirmLeaveOutMessage' => '你确定要离开吗？',
      'notModified' => '你没有修改记录',
      'duplicate' => '您创建的记录可能已经存在',
      'dropToAttach' => '降到附件',
      'fieldIsRequired' => '{field} 是必选的',
      'fieldShouldBeEmail' => '{field}应该是一个有效的电子邮件',
      'fieldShouldBeFloat' => '{field}应该是一个有效的浮点数',
      'fieldShouldBeInt' => '{field}应该是一个有效的整数',
      'fieldShouldBeDate' => '{field}应该是有效的日期',
      'fieldShouldBeDatetime' => '{field}应该是有效的日期/时间',
      'fieldShouldAfter' => '{field}应该在{otherField}之后',
      'fieldShouldBefore' => '{field}应该在{otherField}之前',
      'fieldShouldBeBetween' => '{field}应在{min}和{max}之间',
      'fieldShouldBeLess' => '{field}应小于{value}',
      'fieldShouldBeGreater' => '{field}应大于{value}',
      'fieldBadPasswordConfirm' => '{field}未被妥善确认',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => '属性已重置为默认值',
      'confirmation' => '你确定吗？',
      'unlinkAllConfirmation' => '你确定要取消所有相关记录的连接吗？',
      'resetPreferencesConfirmation' => '你确定要将属性重置为默认值吗？',
      'removeRecordConfirmation' => '你确定要删除该记录吗？',
      'unlinkRecordConfirmation' => '你确定要取消相关记录的链接吗？',
      'removeSelectedRecordsConfirmation' => '你确定要移除所选记录吗？',
      'massUpdateResult' => '{count} 条记录已更新',
      'massUpdateResultSingle' => '{count} 记录已更新',
      'noRecordsUpdated' => '没有记录被更新',
      'massRemoveResult' => '{count} 条记录已删除',
      'massRemoveResultSingle' => '{count} 记录已删除',
      'noRecordsRemoved' => '没有记录被删除',
      'clickToRefresh' => '点击刷新',
      'streamPostInfo' => '输入<strong>@用户名</strong> 来提到用户。

可用markdown语法：
`<code>代码</code>`
**<strong>粗体</strong>**
*<em>强调文字</em>*
~<del>删除文字</del>~
> 引用
(链接文本)[url]',
      'writeYourCommentHere' => '在这里写评论',
      'writeMessageToUser' => '写消息给{user}',
      'writeMessageToSelf' => '在你的信息流里写条信息',
      'typeAndPressEnter' => '输入并按Enter键',
      'checkForNewNotifications' => '检查新通知',
      'checkForNewNotes' => '检查',
      'internalPost' => '邮件只能被内部用户',
      'internalPostTitle' => '邮件只能由内部用户看到',
      'done' => '已做',
      'confirmMassFollow' => '您确定要跟踪选定的记录吗？',
      'confirmMassUnfollow' => '您确定要取消跟踪所选记录吗？',
      'massFollowResult' => '{count}记录现已被跟踪',
      'massUnfollowResult' => '{count}记录现已被取消跟踪',
      'massFollowResultSingle' => '{count}记录现已被跟踪',
      'massUnfollowResultSingle' => '{count}记录现已被取消跟踪',
      'massFollowZeroResult' => '没有任何跟踪',
      'massUnfollowZeroResult' => '没有任何取消跟踪',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => '仅自己',
      'followed' => '已关注',
    ),
    'presetFilters' => 
    array (
      'followed' => '已关注',
      'all' => '所有',
    ),
    'massActions' => 
    array (
      'remove' => '移除',
      'merge' => '合并',
      'massUpdate' => '批量更新',
      'export' => '导出',
      'follow' => '跟踪',
      'unfollow' => '取消跟踪',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'firstName' => '名字',
      'lastName' => '姓氏',
      'salutationName' => '称呼',
      'assignedUser' => '已指派用户',
      'assignedUsers' => '已指派用户',
      'emailAddress' => '电子邮件',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => '已指派用户名',
      'teams' => '团队',
      'createdAt' => '创建于',
      'modifiedAt' => '修改于',
      'createdBy' => '创建者',
      'modifiedBy' => '修改者',
      'description' => '描述',
      'address' => '地址',
      'phoneNumber' => '电话',
      'phoneNumberMobile' => '电话（手机）',
      'phoneNumberHome' => '电话（家庭）',
      'phoneNumberFax' => '电话（传真）',
      'phoneNumberOffice' => '电话（办公）',
      'phoneNumberOther' => '电话（其他）',
      'phoneNumberData' => 'Phone Number Data',
      'order' => '订购',
      'parent' => '上级目录',
      'children' => '下级目录',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => '城市',
      'billingAddressCountry' => '国家',
      'billingAddressPostalCode' => '邮政编码',
      'billingAddressState' => '州',
      'billingAddressStreet' => '街道',
      'billingAddressMap' => '地图',
      'addressCity' => '城市',
      'addressStreet' => '街道',
      'addressCountry' => '国家',
      'addressState' => '州',
      'addressPostalCode' => '邮政编码',
      'addressMap' => '地图',
      'shippingAddressCity' => '城市（邮寄）',
      'shippingAddressStreet' => '街道（邮寄）',
      'shippingAddressCountry' => '省（邮寄）',
      'shippingAddressState' => '国家（邮寄）',
      'shippingAddressPostalCode' => '邮政编码（邮寄）',
      'shippingAddressMap' => '地图（邮寄）',
    ),
    'links' => 
    array (
      'assignedUser' => '已指派用于',
      'createdBy' => '创建者',
      'modifiedBy' => '修改者',
      'team' => '团队',
      'roles' => '角色',
      'teams' => '团队',
      'users' => '用户',
      'parent' => '父母',
      'children' => '子女',
      'contacts' => '联系人',
      'opportunities' => '商机',
      'leads' => '潜在客户',
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'emails' => '电子邮件',
      'accounts' => '客户',
      'cases' => '工单',
      'documents' => '文件',
      'account' => '客户',
      'opportunity' => '商机',
      'contact' => '联系人',
    ),
    'dashlets' => 
    array (
      'Stream' => '信息流',
      'Emails' => '我的收件箱',
      'Records' => '记录清单',
      'Leads' => '我的潜在客户',
      'Opportunities' => '我的商机',
      'Tasks' => '我的任务',
      'Cases' => '我的工单',
      'Calendar' => '日历',
      'Calls' => '我的通话',
      'Meetings' => '我的会晤',
      'OpportunitiesByStage' => '商机阶段',
      'OpportunitiesByLeadSource' => '源自潜在客户的商机',
      'SalesByMonth' => '按月销售',
      'SalesPipeline' => '销售渠道',
      'Activities' => '我的活动',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType}{entity}已分配给你',
      'emailReceived' => '收到{from}的邮件',
      'entityRemoved' => '{user}已移除{entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user}在{entityType}发信息：{entity}',
      'attach' => '{user}附加在{entityType}{entity}',
      'status' => '{user}更新{entityType}{entity}的{field}',
      'update' => '{user}更新了{entityType}{entity}',
      'postTargetTeam' => '{user}发信息到团队{target}',
      'postTargetTeams' => '{user}发信息到小组{target}',
      'postTargetPortal' => '{user}发信息到门户{target}',
      'postTargetPortals' => '{user}发信息到门户{target}',
      'postTarget' => '{user}发信息到{target}',
      'postTargetYou' => '{user}发信息给您',
      'postTargetYouAndOthers' => '{user}发信息给您和{target}',
      'postTargetAll' => '{user}发信息到所有',
      'postTargetSelf' => '{user}给自己发信息',
      'postTargetSelfAndOthers' => '{user}发信息给{target}和用户他们自己',
      'mentionInPost' => '{user}在{entityType}{entity}中提到{mentioned}',
      'mentionYouInPost' => '{user}在{entityType}{entity}中提及了您',
      'mentionInPostTarget' => '{user}在文章中提到',
      'mentionYouInPostTarget' => '{user}在邮件中将您提到了{target}',
      'mentionYouInPostTargetAll' => '{user}在邮件中提到你所有',
      'mentionYouInPostTargetNoTarget' => '{user}在帖子中提到你',
      'create' => '{user}创建{entityType}{entity}',
      'createThis' => '{user}创建{entityType}',
      'createAssignedThis' => '{user}创建{entityType}并指派给{assignee}',
      'createAssigned' => '{user}创建{entityType}{entity}并指派给{assignee}',
      'createAssignedYou' => '{user}创建{entityType}{entity}并指派给你',
      'createAssignedThisSelf' => '{user}创建{entityType}并指派给自己',
      'createAssignedSelf' => '{user}创建了{entityType}{entity}并指派给自己',
      'assign' => '{user}指派{entityType}{entity}给{assignee}',
      'assignThis' => '{user}指派{entityType}给{assignee}',
      'assignYou' => '{user}指派了{entityType}{entity}给你',
      'assignThisVoid' => '{user}取消{entityType}的指派',
      'assignVoid' => '{user}取消{entityType}{entity}的指派',
      'assignThisSelf' => '{user}把{entityType}指派给自己',
      'assignSelf' => '{user}把{entityType}{entity}指派给自己',
      'postThis' => '{user} posted',
      'attachThis' => '添加附件',
      'statusThis' => '{user}更新{field}',
      'updateThis' => '{user}更新{entityType}',
      'createRelatedThis' => '{user} created with {relatedEntityType} {relatedEntity} related to this {entityType}',
      'createRelated' => '{user} created with {relatedEntityType} {relatedEntity} related to {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => '收到{from}的电子邮件',
      'emailReceivedInitialFromThis' => '从{from}这个{entityType}创建收到的电子邮件',
      'emailReceivedThis' => '已收到的电子邮件',
      'emailReceivedInitialThis' => '电子邮件收到此{entityType}创建',
      'emailReceivedFrom' => '从{from}收到的电子邮件中，涉及到的{entityType}{entity)',
      'emailReceivedFromInitial' => '从{from}，{entityType}{entity}创建收到的电子邮件',
      'emailReceived' => '收到的电子邮件与{entityType}{entity}有关',
      'emailReceivedInitial' => '收到电子邮件：{entityType} {entity} created',
      'emailReceivedInitialFrom' => '从{from}，{entityType}{entity}创建收到的电子邮件',
      'emailSent' => '{by}发送与{entityType}{entity}相关的电子邮件',
      'emailSentThis' => '{by}发送电子邮件',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user}发信息给{target}和他自己',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user}发信息给{target}和她自己',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => '一月',
        1 => '二月',
        2 => '三月',
        3 => '四月',
        4 => '五月',
        5 => '六月',
        6 => '七月',
        7 => '八月',
        8 => '九月',
        9 => '十月',
        10 => '十一月',
        11 => '十二月',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => '周日',
        1 => '周一',
        2 => '周二',
        3 => '周三',
        4 => '周四',
        5 => '周五',
        6 => '周六',
      ),
      'dayNamesShort' => 
      array (
        0 => '周日',
        1 => '周一',
        2 => '周二',
        3 => '周三',
        4 => '周四',
        5 => '周五',
        6 => '周六',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => '天',
      'h' => '小时',
      'm' => '分',
      's' => '秒',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => '先生',
        'Mrs.' => '太太',
        'Ms.' => '女士',
        'Dr.' => '博士',
      ),
      'language' => 
      array (
        'af_ZA' => '南非荷兰语',
        'az_AZ' => '阿塞拜疆',
        'be_BY' => '白俄罗斯语',
        'bg_BG' => '保加利亚语',
        'bn_IN' => '孟加拉',
        'bs_BA' => '波斯尼亚',
        'ca_ES' => '加泰罗尼亚语',
        'cs_CZ' => '捷克语',
        'cy_GB' => '威尔士语',
        'da_DK' => '丹麦语',
        'de_DE' => '德语',
        'el_GR' => '希腊语',
        'en_GB' => '英语（英国）',
        'es_MX' => '西班牙（墨西哥）',
        'en_US' => '英语（美国）',
        'es_ES' => '西班牙语（西班牙）',
        'et_EE' => '爱沙尼亚语',
        'eu_ES' => '巴斯克',
        'fa_IR' => '波斯语',
        'fi_FI' => '芬兰',
        'fo_FO' => '法罗语',
        'fr_CA' => '法语（加拿大）',
        'fr_FR' => '法语（法国）',
        'ga_IE' => '爱尔兰',
        'gl_ES' => '加利西亚',
        'gn_PY' => '瓜拉尼',
        'he_IL' => '希伯来语',
        'hi_IN' => '印地语',
        'hr_HR' => '克罗地亚语',
        'hu_HU' => '匈牙利',
        'hy_AM' => '亚美尼亚语',
        'id_ID' => '印度尼西亚',
        'is_IS' => '冰岛的',
        'it_IT' => '意大利语',
        'ja_JP' => '日本',
        'ka_GE' => '格鲁吉亚',
        'km_KH' => '高棉',
        'ko_KR' => '韩语',
        'ku_TR' => '库尔德',
        'lt_LT' => '立陶宛语',
        'lv_LV' => '拉脱维亚',
        'mk_MK' => '马其顿',
        'ml_IN' => '马拉雅拉姆',
        'ms_MY' => '马来语',
        'nb_NO' => '挪威语',
        'nn_NO' => '挪威新手',
        'ne_NP' => '尼泊尔',
        'nl_NL' => '荷兰语',
        'pa_IN' => '旁遮普语',
        'pl_PL' => '抛光',
        'ps_AF' => '普什图语',
        'pt_BR' => '葡萄牙语（巴西）',
        'pt_PT' => '葡萄牙语（葡萄牙）',
        'ro_RO' => '罗马尼亚语',
        'ru_RU' => '俄语',
        'sk_SK' => '斯洛伐克',
        'sl_SI' => '斯洛文尼亚',
        'sq_AL' => '阿尔巴尼亚语',
        'sr_RS' => '塞尔维亚',
        'sv_SE' => '瑞典',
        'sw_KE' => '斯瓦希里语',
        'ta_IN' => '泰米尔语',
        'te_IN' => '泰卢固语',
        'th_TH' => '泰国',
        'tl_PH' => '他加禄语',
        'tr_TR' => '土耳其',
        'uk_UA' => '乌克兰',
        'ur_PK' => '乌尔都语',
        'vi_VN' => '越南语',
        'zh_CN' => '简体中文（中国大陆）',
        'zh_HK' => '繁体中文（中国香港）',
        'zh_TW' => '繁体中文（中国台湾）',
      ),
      'dateSearchRanges' => 
      array (
        'on' => '在',
        'notOn' => '不在',
        'after' => '之后',
        'before' => '之前',
        'between' => '之间',
        'today' => '今天',
        'past' => '过去',
        'future' => '未来',
        'currentMonth' => '这个月',
        'lastMonth' => '上个月',
        'nextMonth' => '下个月',
        'currentQuarter' => '当前季度',
        'lastQuarter' => '上季度',
        'currentYear' => '今年',
        'lastYear' => '去年',
        'lastSevenDays' => '最近7天',
        'lastXDays' => '最近X天',
        'nextXDays' => '下一个X天',
        'ever' => '永远',
        'isEmpty' => '为空',
        'olderThanXDays' => '早于X天',
        'afterXDays' => 'X天后',
      ),
      'searchRanges' => 
      array (
        'is' => '是的',
        'isEmpty' => '为空',
        'isNotEmpty' => '不为空',
        'isOneOf' => '任何',
        'isFromTeams' => '来自团队',
        'isNot' => '不是',
        'isNotOneOf' => '没有',
        'anyOf' => '任何',
        'noneOf' => '没有',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => '等于',
        'like' => '类似 (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => '以...开始',
        'endsWith' => '以...结束',
        'contains' => '包含',
        'notContains' => '不包含',
        'isEmpty' => '为空',
        'isNotEmpty' => '不为空',
        'notEquals' => '不等于',
      ),
      'intSearchRanges' => 
      array (
        'equals' => '等于',
        'notEquals' => '不等于',
        'greaterThan' => '比...更棒',
        'lessThan' => '少于',
        'greaterThanOrEquals' => '大于或等于',
        'lessThanOrEquals' => '小于或等于',
        'between' => '之间',
        'isEmpty' => '为空',
        'isNotEmpty' => '非空',
      ),
      'autorefreshInterval' => 
      array (
        0 => '无',
        '0.5' => '30 秒',
        1 => '1 分钟',
        2 => '2 分钟',
        5 => '5 分钟',
        10 => '10 分钟',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => '手机',
        'Office' => '办公室',
        'Fax' => '传真',
        'Home' => '家庭',
        'Other' => '其他',
      ),
      'reminderTypes' => 
      array (
        'Popup' => '通知',
        'Email' => '电子邮件',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => '你可以在这里找到翻译：https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => '粗体',
          'italic' => '斜体',
          'underline' => '下划线',
          'strike' => '删除线',
          'clear' => '移除字体样式',
          'height' => '行高',
          'name' => '字体',
          'size' => '字体大小',
        ),
        'image' => 
        array (
          'image' => '图片',
          'insert' => '插入图像',
          'resizeFull' => '调至最大',
          'resizeHalf' => '调至一半',
          'resizeQuarter' => '调至四分之一',
          'floatLeft' => '左浮动',
          'floatRight' => '右浮动',
          'floatNone' => '无浮动',
          'dragImageHere' => '将图像拖至此处',
          'selectFromFiles' => '从文件选择',
          'url' => '图片 URL',
          'remove' => '移除图像',
        ),
        'link' => 
        array (
          'link' => '链接',
          'insert' => '插入链接',
          'unlink' => '取消链接',
          'edit' => '编辑',
          'textToDisplay' => '要显示的文本',
          'url' => '此链接应打开哪个 URL？',
          'openInNewWindow' => '在新窗口中打开',
        ),
        'video' => 
        array (
          'video' => '视频',
          'videoLink' => '视频链接',
          'insert' => '插入视频',
          'url' => '视频 URL？',
          'providers' => '(YouTube, Vimeo, Vine, Instagram 或 DailyMotion)',
        ),
        'table' => 
        array (
          'table' => '表格',
        ),
        'hr' => 
        array (
          'insert' => '插入水平规则',
        ),
        'style' => 
        array (
          'style' => '样式',
          'normal' => '正常',
          'blockquote' => '引用',
          'pre' => '代码',
          'h1' => '标题 1',
          'h2' => '标题 2',
          'h3' => '标题 3',
          'h4' => '标题 4',
          'h5' => '标题 5',
          'h6' => '标题 6',
        ),
        'lists' => 
        array (
          'unordered' => '无序列表',
          'ordered' => '有序列表',
        ),
        'options' => 
        array (
          'help' => '帮助',
          'fullscreen' => '全屏',
          'codeview' => '代码视图',
        ),
        'paragraph' => 
        array (
          'paragraph' => '段落',
          'outdent' => '减少缩进',
          'indent' => '缩进',
          'left' => '左对齐',
          'center' => '居中对齐',
          'right' => '右对齐',
          'justify' => '两端对齐',
        ),
        'color' => 
        array (
          'recent' => '最近的颜色',
          'more' => '更多颜色',
          'background' => '背景颜色',
          'foreground' => '字体颜色',
          'transparent' => '透明',
          'setTransparent' => '设置透明度',
          'reset' => '重置',
          'resetToDefault' => '重置为默认',
        ),
        'shortcut' => 
        array (
          'shortcuts' => '键盘快捷键',
          'close' => '关闭',
          'textFormatting' => '文本格式化',
          'action' => '行动',
          'paragraphFormatting' => '段落格式化',
          'documentStyle' => '文档样式',
        ),
        'history' => 
        array (
          'undo' => '撤消',
          'redo' => '重做',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'List',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => '樱花',
      'EspoVertical' => 'Espo w/ 侧边栏',
      'SakuraVertical' => 'Sakura w/ 侧边栏',
      'Violet' => '紫色',
      'VioletVertical' => 'Violet w/ 侧边栏',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue w/ 侧边栏',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => '反向导入',
      'Return to Import' => '返回导入',
      'Run Import' => '运行导入',
      'Back' => '返回',
      'Field Mapping' => '字段映射',
      'Default Values' => '默认值',
      'Add Field' => '添加字段',
      'Created' => '已创建',
      'Updated' => '已更新',
      'Result' => '结果',
      'Show records' => '显示记录',
      'Remove Duplicates' => '移除重复',
      'importedCount' => '已导入（计数）',
      'duplicateCount' => '重复（计数）',
      'updatedCount' => '已更新（计数）',
      'Create Only' => '仅创建',
      'Create and Update' => '创建和更新',
      'Update Only' => '仅更新',
      'Update by' => '更新者',
      'Set as Not Duplicate' => '设置为不重复',
      'File (CSV)' => '文件(CSV)',
      'First Row Value' => '第一行值',
      'Skip' => '跳过',
      'Header Row Value' => '标题行值',
      'Field' => '字段',
      'What to Import?' => '要导入什么？',
      'Entity Type' => '功能类型',
      'What to do?' => '做什么？',
      'Properties' => '属性',
      'Header Row' => '标题行',
      'Person Name Format' => '人名格式',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => '字段分隔符',
      'Date Format' => '日期格式',
      'Decimal Mark' => '十进制标志',
      'Text Qualifier' => '文本限定符',
      'Time Format' => '时间格式',
      'Currency' => '货币',
      'Preview' => '预览',
      'Next' => '下一步',
      'Step 1' => '步骤 1',
      'Step 2' => '步骤 2',
      'Double Quote' => '双引号',
      'Single Quote' => '单引号',
      'Imported' => '已导入',
      'Duplicates' => '副本',
      'Skip searching for duplicates' => '跳过重复项',
      'Timezone' => '时区',
      'Remove Import Log' => '删除导入日志',
      'New Import' => '新的导入',
      'Import Results' => '导入结果',
    ),
    'messages' => 
    array (
      'utf8' => '应该为UTF-8编码',
      'duplicatesRemoved' => '去重',
      'inIdle' => '空闲时执行',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' => 
    array (
      'file' => '文件',
      'entityType' => '功能类型',
      'imported' => '已导入记录',
      'duplicates' => '重复记录',
      'updated' => '已更新记录',
      'status' => '状态',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => '已失败',
        'In Process' => '处理中',
        'Complete' => '完成',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件地址',
      'team' => '目标团队',
      'status' => '状态',
      'assignToUser' => '指派给用户',
      'host' => 'SMTP服务器',
      'username' => '用户名',
      'password' => '密码',
      'port' => '端口',
      'monitoredFolders' => '监视文件夹',
      'trashFolder' => '垃圾文件夹',
      'ssl' => 'SSL',
      'createCase' => '创建工单',
      'reply' => '自动回复',
      'caseDistribution' => '工单分发',
      'replyEmailTemplate' => '回复邮件模板',
      'replyFromAddress' => '回复发件地址',
      'replyToAddress' => '回复收件地址',
      'replyFromName' => '回复发件名',
      'targetUserPosition' => '目标用户位置',
      'fetchSince' => '获取自',
      'addAllTeamUsers' => '为所有团队用户',
      'teams' => '团队',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'useImap' => 'Fetch Emails',
      'useSmtp' => '使用SMTP',
      'smtpHost' => 'SMTP主机',
      'smtpPort' => 'SMTP端口',
      'smtpAuth' => 'SMTP验证',
      'smtpSecurity' => 'SMTP安全协议',
      'smtpUsername' => 'SMTP用户名',
      'smtpPassword' => 'SMTP密码',
      'fromName' => '发件人',
      'smtpIsShared' => '共享',
      'smtpIsForMassEmail' => 'SMTP可用于大规模电子邮件',
    ),
    'tooltips' => 
    array (
      'reply' => '通知他们的电子邮件已收到电子邮件发件人。

 只有一个电子邮件会期间的时间，以防止循环一段时间被发送到特定的收件人。',
      'createCase' => '自动从传入电子邮件创建工单。',
      'replyToAddress' => '指定此邮箱的电子邮件地址，以便响应到这里。',
      'caseDistribution' => '如何分配工单，直接指派给用户或团队。',
      'assignToUser' => '用户工单将会指派给。',
      'team' => '团队工单将会指派给。',
      'teams' => '团队电子邮件将会指派给。',
      'targetUserPosition' => '具有指定位置的用户将与工单一起分发。',
      'addAllTeamUsers' => '电子邮件将出现在指定团队的所有用户的“收件箱”中。',
      'monitoredFolders' => '多个文件夹用逗号分隔。',
      'smtpIsShared' => '如果勾选此选项，用户就可以使用SMTP发送电子邮件。可用性由角色通过组电子邮件帐户权限控制',
      'smtpIsForMassEmail' => '如果勾选的话，SMTP将可用于群发邮件',
      'storeSentEmails' => '发送的电子邮件将存储在IMAP服务器上。',
    ),
    'links' => 
    array (
      'filters' => '过滤器',
      'emails' => '邮箱',
      'assignToUser' => '分配给用户',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '激活',
        'Inactive' => '未激活',
      ),
      'caseDistribution' => 
      array (
        '' => '没有',
        'Direct-Assignment' => '直接分配',
        'Round-Robin' => '循环',
        'Least-Busy' => '最不忙',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => '创建电子邮件帐户',
      'IMAP' => 'IMAP',
      'Actions' => '操作',
      'Main' => '主要',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => '无法连接到IMAP服务器',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => '启用',
      'clientId' => '客户端ID',
      'clientSecret' => '客户端密钥',
      'redirectUri' => '重定向URI',
      'apiKey' => '接口密匙',
    ),
    'titles' => 
    array (
      'GoogleMaps' => '谷歌地图',
    ),
    'messages' => 
    array (
      'selectIntegration' => '从菜单中选择一个积分。',
      'noIntegrations' => '没有集成可用。',
    ),
    'help' => 
    array (
      'Google' => '<p> <b>从Google Developers Console获取OAuth 2.0凭据。</ b> </ p> <p>访问<a href ="https://console.developers.google.com/project" > Google Developers Console </a>，以获取Google和EspoCRM应用程序已知的OAuth 2.0凭据，例如客户端ID和客户端密钥。</ p>',
      'GoogleMaps' => '<p>获得应用程序界面密匙 <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => '状态',
      'executeTime' => '执行At',
      'attempts' => '尝试左',
      'failedAttempts' => '失败尝试',
      'serviceName' => '服务',
      'method' => '方法',
      'methodName' => '方法',
      'scheduledJob' => '计划作业',
      'scheduledJobJob' => '计划工作名称',
      'data' => '数据',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => '有待',
        'Success' => '成功',
        'Running' => '运行',
        'Failed' => '失败',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => '宽度（％）',
      'link' => '链接',
      'notSortable' => '不可排序',
      'align' => '对齐',
      'panelName' => '面板名称',
      'style' => '样式',
      'sticked' => '已贴',
      'isLarge' => '大字体',
      'dynamicLogicVisible' => '使面板可见的条件',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => '剩下',
        'right' => '对',
      ),
      'style' => 
      array (
        'default' => '默认',
        'success' => '成功',
        'danger' => '危险',
        'info' => '信息',
        'warning' => '警告',
        'primary' => '主要',
      ),
    ),
    'labels' => 
    array (
      'New panel' => '新的面板',
      'Layout' => '布局',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'campaign' => '运动',
      'isActive' => '激活',
      'subscribeToTargetList' => '订阅目标列表',
      'subscribeContactToTargetList' => '订阅目标列表',
      'targetList' => '目标列表',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Lead Source',
      'apiKey' => 'API Key',
      'targetTeam' => '目标团队',
      'exampleRequestMethod' => '方法',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
    ),
    'links' => 
    array (
      'targetList' => '目标列表',
      'campaign' => '运行',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => '目标团队',
      'logRecords' => '日志',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => '创建入口点',
      'Generate New API Key' => 'Generate New API Key',
      'Request' => '请求',
      'Confirm Opt-In' => '确认选择',
    ),
    'messages' => 
    array (
      'generateApiKey' => '创建新的API KEY',
      'optInConfirmationExpired' => '选择确认链接已过期',
      'optInIsConfirmed' => '选择确认。',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => '支持Markdown',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Number',
      'data' => 'Data',
      'target' => '目标',
      'leadCapture' => 'Lead Capture',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created',
    ),
    'links' => 
    array (
      'leadCapture' => 'Lead Capture',
      'target' => '目标',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => '帖子',
      'attachments' => '附件',
      'targetType' => '目标',
      'teams' => '团队',
      'users' => '用户',
      'portals' => '门户',
      'type' => '类型',
      'isGlobal' => '全局',
      'isInternal' => '内部（用于内部用户）',
      'related' => '相关的',
      'createdByGender' => 'Created By Gender',
      'data' => '数据',
      'number' => '数字',
    ),
    'filters' => 
    array (
      'all' => '所有',
      'posts' => '帖子',
      'updates' => '更新',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => '给我自己',
        'users' => '给特殊用户',
        'teams' => '给特殊对',
        'all' => '所有内部门户',
        'portals' => '给门户用户',
      ),
      'type' => 
      array (
        'Post' => '帖子',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => '在这里写信息',
    ),
    'links' => 
    array (
      'superParent' => 'Super Parent',
      'related' => 'Related',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'logo' => '商标',
      'url' => '网址',
      'portalRoles' => '角色',
      'isActive' => '活跃',
      'isDefault' => '是默认值',
      'tabList' => '选项卡列表',
      'quickCreateList' => '快速创建列表',
      'companyLogo' => '商标',
      'theme' => '主题',
      'language' => '语言',
      'dashboardLayout' => '仪表板布局',
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周起始日',
      'defaultCurrency' => '默认货币',
      'customUrl' => '自定义网址',
      'customId' => '用户ID',
    ),
    'links' => 
    array (
      'users' => '用户',
      'portalRoles' => '角色',
      'notes' => '笔记',
      'articles' => '知识库文章',
    ),
    'tooltips' => 
    array (
      'portalRoles' => '指定的门户角色将应用于此门户的所有用户。',
    ),
    'labels' => 
    array (
      'Create Portal' => '创建门户',
      'User Interface' => '用户界面',
      'General' => '常规',
      'Settings' => '设置',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => '导出权限',
    ),
    'links' => 
    array (
      'users' => '用户',
    ),
    'tooltips' => 
    array (
      'exportPermission' => '门户用户是否具有导出记录的权限',
    ),
    'labels' => 
    array (
      'Access' => '访问',
      'Create PortalRole' => '创建门户角色',
      'Scope Level' => '范围级别',
      'Field Level' => '现场级',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => '创建门户用户',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周始于',
      'thousandSeparator' => '千位分隔符',
      'decimalMark' => '十进制标志',
      'defaultCurrency' => '默认货币',
      'currencyList' => '货币列表',
      'language' => '语言',
      'smtpServer' => 'SMTP服务器',
      'smtpPort' => '端口',
      'smtpAuth' => '验证',
      'smtpSecurity' => '安全协议',
      'smtpUsername' => '用户名',
      'emailAddress' => '邮件',
      'smtpPassword' => '密码',
      'smtpEmailAddress' => '邮件地址',
      'exportDelimiter' => '导出分隔符',
      'receiveAssignmentEmailNotifications' => '任务邮件提醒',
      'receiveMentionEmailNotifications' => '邮寄时提及的邮件提醒',
      'receiveStreamEmailNotifications' => '关于邮寄和更新状态的邮件提醒',
      'autoFollowEntityTypeList' => '全局自动跟随',
      'signature' => '邮件签名',
      'dashboardTabList' => '功能列表',
      'defaultReminders' => '默认提醒',
      'theme' => '主题',
      'useCustomTabList' => '启用自定义功能列表',
      'tabList' => '功能列表',
      'emailReplyToAllByDefault' => '此邮件签名默认用于所有回复邮件.',
      'dashboardLayout' => '仪表板布局',
      'emailReplyForceHtml' => '超文本语言回复邮件',
      'doNotFillAssignedUserIfNotRequired' => '不要在创建记录时预先填充指定的用户',
      'followEntityOnStreamPost' => '在信息流发信息后自动跟踪记录',
      'followCreatedEntities' => '自动跟踪创建的记录',
      'followCreatedEntityTypeList' => '自动跟踪特定功能创建的记录',
      'emailUseExternalClient' => '使用外部邮件客户端',
      'scopeColorsDisabled' => '禁用颜色范围',
      'tabColorsDisabled' => '禁用功能菜单颜色',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => '星期日',
        1 => '星期一',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => '通知',
      'User Interface' => '用户界面',
      'SMTP' => 'SMTP',
      'Misc' => '杂项',
      'Locale' => '语言环境',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => '自动跟随所选实体类型的所有新记录(由任何用户创建),能够在信息流中看到信息并接收关于系统中所有记录的通知。',
      'doNotFillAssignedUserIfNotRequired' => '当创建记录时，分配的用户不会被自己的用户填充，除非字段是必需的。',
      'followCreatedEntities' => '当创建新记录时，即使分配给另一个用户，它们也会自动跟随。',
      'followCreatedEntityTypeList' => '当创建选定实体类型的新记录时，即使将它们分配给另一个用户，它们也会自动跟随。',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'roles' => '角色',
      'assignmentPermission' => '分配许可',
      'userPermission' => '用户权限',
      'portalPermission' => '门户权限',
      'groupEmailAccountPermission' => '邮件组权限',
      'exportPermission' => '导出权限',
      'dataPrivacyPermission' => '数据隐私权限',
    ),
    'links' => 
    array (
      'users' => '用户',
      'teams' => '团队',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => '允许限制将记录和消息分配给其他用户的能力。

所有的 - 没有限制
团队 - 只能分配和发信息给队友
否 - 只能分配和发信息给自己',
      'userPermission' => '允许以限制用户查看活动，日历和其他用户的数据流的能力。

所有 - 可以查看所有
团队 - 可以查看队友的活动只
否 - 无法查看',
      'portalPermission' => '对门户信息的访问，可以向门户用户发送消息。',
      'groupEmailAccountPermission' => '对组邮件帐户的访问，从组邮件SMTP发送邮件的能力。',
      'exportPermission' => '用户是否具有导出记录的能力。',
      'dataPrivacyPermission' => '允许查看和删除个人数据。',
    ),
    'labels' => 
    array (
      'Access' => '访问',
      'Create Role' => '创建角色',
      'Scope Level' => '范围级别',
      'Field Level' => '场级',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => '未设置',
        'enabled' => '启用',
        'disabled' => '禁用',
      ),
      'levelList' => 
      array (
        'all' => '全部',
        'team' => '团队',
        'account' => '客户',
        'contact' => '联系',
        'own' => '所有者',
        'no' => '没有',
        'yes' => '是',
        'not-set' => '未设置',
      ),
    ),
    'actions' => 
    array (
      'read' => '读取',
      'edit' => '编辑',
      'delete' => '删除',
      'stream' => '信息流',
      'create' => '创建',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => '访问控制中的所有更改将在缓存清除后应用。',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'job' => '工作',
      'scheduling' => '计划',
    ),
    'links' => 
    array (
      'log' => '日志',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => '创建计划作业',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => '清理',
        'CheckInboundEmails' => '检查组电子邮件帐户',
        'CheckEmailAccounts' => '检查个人电子邮件帐户',
        'SendEmailReminders' => '发送电子邮件提醒',
        'AuthTokenControl' => '授权令牌控制',
        'SendEmailNotifications' => '发送邮件通知',
        'CheckNewVersion' => '检查新版本',
        'ProcessMassEmail' => '发送大量电子邮件',
        'ControlKnowledgeBaseArticleStatus' => '控制知识库文章状态',
      ),
      'cronSetup' => 
      array (
        'linux' => '注意：将此行添加到crontab文件以运行Espo计划作业：',
        'mac' => '注意：将此行添加到crontab文件以运行Espo计划作业：',
        'windows' => '注意：使用以下命令创建批处理文件以使用Windows计划任务运行Espo计划作业：',
        'default' => '注意：将此命令添加到Cron Job（计划任务）：',
      ),
      'status' => 
      array (
        'Active' => '激活',
        'Inactive' => '未激活',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'crontab符号。定义任务运行频率。

* / 5 * * * * - 每 5 分钟

0 * / 2 * * * - 每 2 小时

30 1 * * * - 每天的 01:30

0 0 1 * * - 在每月的第一天',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => '状态',
      'executionTime' => '执行时间',
      'target' => '目标',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => '使用缓存',
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周始于',
      'thousandSeparator' => '千位分隔符',
      'decimalMark' => '十进制标志',
      'defaultCurrency' => '默认货币',
      'baseCurrency' => '基本货币',
      'currencyRates' => '速率值',
      'currencyList' => '货币列表',
      'language' => '语言',
      'companyLogo' => '公司LOGO',
      'smtpServer' => 'SMTP服务器',
      'smtpPort' => '端口',
      'smtpAuth' => '验证',
      'smtpSecurity' => '安全协议',
      'smtpUsername' => '用户名',
      'emailAddress' => '电子邮件',
      'smtpPassword' => '密码',
      'outboundEmailFromName' => '发件人',
      'outboundEmailFromAddress' => '发件人地址',
      'outboundEmailIsShared' => '是否共享',
      'recordsPerPage' => '每页记录',
      'recordsPerPageSmall' => '每页记录（小）',
      'tabList' => '功能列表',
      'quickCreateList' => '快速创建列表',
      'exportDelimiter' => '导出分隔符',
      'globalSearchEntityList' => '全局搜索功能列表',
      'authenticationMethod' => '验证方法',
      'ldapHost' => '主机',
      'ldapPort' => '端口',
      'ldapAuth' => '验证',
      'ldapUsername' => '完整用户DN',
      'ldapPassword' => '密码',
      'ldapBindRequiresDn' => '绑定需要域名',
      'ldapBaseDn' => '基本DN',
      'ldapAccountCanonicalForm' => '帐户规范表格',
      'ldapAccountDomainName' => '帐户域名',
      'ldapTryUsernameSplit' => '尝试拆分用户名',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => '在EspoCRM中创建用户',
      'ldapSecurity' => '安全协议',
      'ldapUserLoginFilter' => '用户登录过滤器',
      'ldapAccountDomainNameShort' => '帐户短域名',
      'ldapOptReferrals' => '选择推荐',
      'ldapUserNameAttribute' => '用户名属性',
      'ldapUserObjectClass' => '用户对象类',
      'ldapUserTitleAttribute' => '用户标题属性',
      'ldapUserFirstNameAttribute' => '用户名字属性',
      'ldapUserLastNameAttribute' => '用户姓名属性',
      'ldapUserEmailAddressAttribute' => '用户邮箱地址属性',
      'ldapUserTeams' => '用户团队',
      'ldapUserDefaultTeam' => '用户默认团队',
      'ldapUserPhoneNumberAttribute' => '用户手机号码属性',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => '禁用导出（仅允许管理员）',
      'assignmentNotificationsEntityList' => '发送通知功能列表',
      'assignmentEmailNotifications' => '任务分配提醒',
      'assignmentEmailNotificationsEntityList' => '分配邮件提醒范围',
      'streamEmailNotifications' => '信息流中的内部用户更新提醒',
      'portalStreamEmailNotifications' => '信息流中的门户用户更新提醒',
      'streamEmailNotificationsEntityList' => '邮件通知信息流范围',
      'streamEmailNotificationsTypeList' => '通知',
      'b2cMode' => 'B2C模式',
      'avatarsDisabled' => '禁用头像',
      'followCreatedEntities' => '跟踪创建的记录',
      'displayListViewRecordCount' => '显示总计数（在列表视图上）',
      'theme' => '主题',
      'userThemesDisabled' => '禁用用户主题',
      'emailMessageMaxSize' => '电子邮件最大大小（Mb）',
      'massEmailMaxPerHourCount' => '每小时发送的电子邮件的最大计数',
      'personalEmailMaxPortionSize' => '个人帐户提取的最大电子邮件部分大小',
      'inboundEmailMaxPortionSize' => '群组帐户提取的最大电子邮件部分大小',
      'maxEmailAccountCount' => '每个用户的个人电子邮件帐户的最大计数',
      'authTokenLifetime' => '验证Token存活时间（小时）',
      'authTokenMaxIdleTime' => '验证Token最大空闲等待时间（小时）',
      'dashboardLayout' => '仪表板的布局(默认)',
      'siteUrl' => '站点地址',
      'addressPreview' => '地址预览',
      'addressFormat' => '地址格式',
      'notificationSoundsDisabled' => '禁用通知声音',
      'applicationName' => '应用名称',
      'calendarEntityList' => '日历功能列表',
      'mentionEmailNotifications' => '文章@邮件通知',
      'massEmailDisableMandatoryOptOutLink' => '禁用强制选择退出链接',
      'activitiesEntityList' => '活动功能列表',
      'historyEntityList' => '历史功能列表',
      'currencyFormat' => '货币格式',
      'currencyDecimalPlaces' => '货币小数位',
      'aclStrictMode' => 'ACL 限制模式',
      'aclAllowDeleteCreated' => '允许删除创建的记录',
      'adminNotifications' => '管理面板中的系统通知',
      'adminNotificationsNewVersion' => '当新的EspoCRM版本可用时显示通知',
      'adminNotificationsNewExtensionVersion' => '扩展有新版本可用时通知',
      'textFilterUseContainsForVarchar' => '在过滤varchar字段时使用“contains”操作符.',
      'authTokenPreventConcurrent' => '每个用户只有一个认证令牌',
      'scopeColorsDisabled' => '禁用颜色范围',
      'tabColorsDisabled' => '禁用功能菜单颜色',
      'tabIconsDisabled' => '禁用标签图标',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => '外部BCC地址',
      'cleanupDeletedRecords' => '清理已删除的记录',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => '星期日',
        1 => '星期一',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => '收到消息',
        'Status' => '状态更新',
        'EmailReceived' => '收到邮件',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => '列表视图中最初显示的记录数。',
      'recordsPerPageSmall' => '最初在关系面板中显示的记录数。',
      'outboundEmailIsShared' => '允许用户使用此地址发送邮件。',
      'followCreatedEntities' => '用户将自动跟随他们创建的记录。',
      'emailMessageMaxSize' => '所有超过指定大小的入站电子邮件都将获取w / o正文和附件。',
      'authTokenLifetime' => '令牌可以存在多长时间. 
0  - 表示永不过期。',
      'authTokenMaxIdleTime' => '最后一次访问令牌可以存活多久.
0 -表示永不过期。',
      'userThemesDisabled' => '如果选中，用户将无法选择其他主题。',
      'ldapUsername' => '全系统DN用户允许搜索其他用户。例如: "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan"。',
      'ldapPassword' => '访问LDAP服务器的密码。',
      'ldapAuth' => '访问LDAP的凭证。',
      'ldapUserNameAttribute' => '识别用户的属性。
E.g. "用户主要名字" or "sAM账户名" 对于活动目录, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => '搜索用户的对象类属性。例如 "人" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => '你帐户的规范形式。有4个选项：<br>- \'Dn\' - 格式为 ’CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - 格式为 \'tester\'.<br>- \'Backslash\' - 格式为 \'COMPANY\\tester\'.<br>- \'Principal\' - 格式为 \'tester@company.com’。',
      'ldapBindRequiresDn' => '此项用于格式化DN中的用户名。',
      'ldapBaseDn' => '默认的基本DN用于搜索用户,例如: "OU=用户,OU=espocrm,DC=测试, DC=lan".',
      'ldapTryUsernameSplit' => '此选项用于从域中剥离用户名。',
      'ldapOptReferrals' => '如果 参考应遵循LDAP客户端。',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => '此选项允许EspoCRM创建一个来自LDAP的用户。',
      'ldapUserFirstNameAttribute' => '轻量级目录访问协议属性用来确定用户的姓.例如: "名字".',
      'ldapUserLastNameAttribute' => '轻量级目录访问协议属性用来确定用户的名.例如: " 序列号".',
      'ldapUserTitleAttribute' => '轻量级目录访问协议属性用来确定用户标题.例如: "标题".',
      'ldapUserEmailAddressAttribute' => '轻量级目录访问协议属性用来确定用户的电子邮件地址。例如: "邮件".',
      'ldapUserPhoneNumberAttribute' => '轻量级目录访问协议属性用来确定用户的手机号码。例如: "手机号码".',
      'ldapUserLoginFilter' => '筛选器可以禁止使用的EspoCRM用户操作 例如: "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => '用于 LDAP 服务器身份验证的域。',
      'ldapAccountDomainNameShort' => '用于 LDAP 服务器身份验证的短域。',
      'ldapUserTeams' => '已创建用户的团队。更多信息，请查看用户资料。',
      'ldapUserDefaultTeam' => '建用户的默认团队。更多信息，请查看用户资料。',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => '默认情况下，EspoCRM使用B2B模式,您可以将其切换到B2C模式。',
      'currencyDecimalPlaces' => '小数位数。如果留空，所有非空的小数位都将显示。',
      'aclStrictMode' => '启用: 如果在角色中没有指定作用范围，则禁止访问未指定的范围。

禁用: 如果在角色中没有指定作用范围，则允许访问未指定的范围。',
      'aclAllowDeleteCreated' => '用户将能够删除他们创建的记录，即使他们没有删除访问权限。',
      'textFilterUseContainsForVarchar' => '如果没有勾选，则使用“start with”操作符,您可以使用通配符“%”。',
      'streamEmailNotificationsEntityList' => '关于跟踪记录的流更新的电子邮件通知。用户只会收到指定实体类型的电子邮件通知。',
      'authTokenPreventConcurrent' => '用户不能同时在多个设备上登录。',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => '删除的记录将在一段时间后从数据库中删除。',
    ),
    'labels' => 
    array (
      'System' => '系统',
      'Locale' => '语言环境',
      'SMTP' => 'SMTP',
      'Configuration' => '配置',
      'In-app Notifications' => '应用内通知',
      'Email Notifications' => '电子邮件通知',
      'Currency Settings' => '货币设置',
      'Currency Rates' => '货币汇率',
      'Mass Email' => '群发邮件',
      'Test Connection' => '测试连接',
      'Connecting' => '连接中...',
      'Activities' => '活动',
      'Admin Notifications' => '管理通知',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => '连接已成功建立。',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'roles' => '角色',
      'positionList' => '位置列表',
    ),
    'links' => 
    array (
      'users' => '用户',
      'notes' => '笔记',
      'roles' => '角色',
      'inboundEmails' => '组电子邮件帐户',
    ),
    'tooltips' => 
    array (
      'roles' => '访问角色。此团队的用户从选定的角色获取访问控制级别。',
      'positionList' => '在这个团队中可用的位置。例如。销售员，经理。',
    ),
    'labels' => 
    array (
      'Create Team' => '创建团队',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'body' => '正文',
      'entityType' => '功能类型',
      'header' => '标题',
      'footer' => '页脚',
      'leftMargin' => '左边距',
      'topMargin' => '上边距',
      'rightMargin' => '右边距',
      'bottomMargin' => '下边距',
      'printFooter' => '打印页脚',
      'footerPosition' => '页脚位置',
      'variables' => '可用占位符',
      'pageOrientation' => '页面方向',
      'pageFormat' => '页面格式',
      'fontFace' => '字体',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => '创建模板',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => '人物',
        'Landscape' => '风景',
      ),
      'placeholders' => 
      array (
        'today' => 'Today (date)',
        'now' => 'Now (date-time)',
      ),
      'fontFace' => 
      array (
        'aealarabiya' => 'AlArabiya',
        'aefurat' => 'Aefurat',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serif',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => 'FreeMono',
        'freesans' => 'FreeSans',
        'freeserif' => 'FreeSerif',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => 'Kozgo Pro Medium',
        'kozminproregular' => 'Kozmin Pro Regular',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'PDFA Symbol',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'Symbol',
        'times' => 'Times',
      ),
    ),
    'tooltips' => 
    array (
      'footer' => '使用{pageNumber}打印页码。',
      'variables' => '复制粘贴所需的占位符到标题，正文或页脚。',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'userName' => '用户名',
      'title' => '标题',
      'isAdmin' => '管理员',
      'defaultTeam' => '默认团队',
      'emailAddress' => '电子邮件',
      'phoneNumber' => '电话',
      'roles' => '角色',
      'portals' => '门户',
      'portalRoles' => '门户角色',
      'teamRole' => '位置',
      'password' => '密码',
      'currentPassword' => '当前密码',
      'passwordConfirm' => '确认密码',
      'newPassword' => '新密码',
      'newPasswordConfirm' => '确认新密码',
      'avatar' => '头像',
      'isActive' => '活跃',
      'isPortalUser' => '门户用户',
      'contact' => '联系人',
      'accounts' => '客户',
      'account' => '帐户（主要）',
      'sendAccessInfo' => '通过邮件向用户发送访问信息.',
      'portal' => '门户网站',
      'gender' => '性别',
      'position' => '在队中的位置',
      'ipAddress' => 'IP地址',
      'passwordPreview' => '密码预览',
      'isSuperAdmin' => '超级管理员',
      'lastAccess' => '最后访问',
      'acceptanceStatus' => '验收状态',
      'acceptanceStatusMeetings' => '接受状态(Meetings)',
      'acceptanceStatusCalls' => '接受状态(Calls)',
    ),
    'links' => 
    array (
      'teams' => '团队',
      'roles' => '角色',
      'notes' => '笔记',
      'portals' => '门户',
      'portalRoles' => '门户角色',
      'contact' => '联系人',
      'accounts' => '客户',
      'account' => '帐户（主要）',
      'tasks' => '任务',
      'targetLists' => '目标列表',
    ),
    'labels' => 
    array (
      'Create User' => '创建用户',
      'Generate' => '生成',
      'Access' => '访问',
      'Preferences' => '优先',
      'Change Password' => '更改密码',
      'Teams and Access Control' => '团队和访问控制',
      'Forgot Password?' => '忘记密码？',
      'Password Change Request' => '密码更改请求',
      'Email Address' => '电子邮件地址',
      'External Accounts' => '外部帐户',
      'Email Accounts' => '电子邮件帐户',
      'Portal' => '门户',
      'Create Portal User' => '创建门户用户',
      'Proceed w/o Contact' => '继续创建联系人',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => '默认情况下，此用户创建的所有记录都将与此小组相关。',
      'userName' => '允许使用字符: a-z，0-9，.，-，@, _',
      'isAdmin' => '管理员拥有最大权限.',
      'isActive' => '如果取消选中则用户将无法登录。',
      'teams' => '该用户所属的团队。访问控制级别从团队角色继承。',
      'roles' => '其他访问角色。如果用户不属于任何团队，或者需要为此用户专门扩展访问控制级别，请使用此角色。',
      'portalRoles' => '其他门户网站角色。使用它来为此用户专门扩展访问控制级别。',
      'portals' => '此用户有权访问的门户。',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => '密码将发送到用户的电子邮件地址。',
      'accountInfoEmailSubject' => 'EspoCRM用户访问信息',
      'accountInfoEmailBody' => '您的访问信息：

用户名：{userName}
密码：{password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => '更改密码请求',
      'passwordChangeLinkEmailBody' => '您可以通过以下链接来更改密码{link}。此唯一网址即将过期。',
      'passwordChanged' => '密码已被更改',
      'userCantBeEmpty' => '用户名不能为空',
      'wrongUsernamePasword' => '用户名/密码错误',
      'emailAddressCantBeEmpty' => '电子邮件地址不能为空',
      'userNameEmailAddressNotFound' => '用户名/电子邮件地址未找到',
      'forbidden' => '禁止访问，请稍后再试',
      'uniqueLinkHasBeenSent' => '唯一网址已发送到指定的电子邮件地址。',
      'passwordChangedByRequest' => '密码已被更改。',
      'setupSmtpBefore' => '您需要配置<a href="{url}"> SMTP服务器</a>，以便系统能够通过电子邮件发送密码信息。',
      'userNameExists' => '用户名已经存在',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => '未设置',
        'Male' => '男士',
        'Female' => '女士',
        'Neutral' => '中立的',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => '只有我的团队',
    ),
    'presetFilters' => 
    array (
      'active' => '激活',
      'activePortal' => '门户活动',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'website' => '网站',
      'phoneNumber' => '电话',
      'billingAddress' => '账单地址',
      'shippingAddress' => '邮寄地址',
      'description' => '描述',
      'sicCode' => 'Sic代码',
      'industry' => '行业',
      'type' => '类型',
      'contactRole' => '标题',
      'contactIsInactive' => '未激活',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'originalLead' => '原始潜在客户',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => '联系人',
      'opportunities' => '商机',
      'cases' => '工单',
      'documents' => '文件',
      'meetingsPrimary' => '会晤（已举行）',
      'callsPrimary' => '通话（已展开）',
      'tasksPrimary' => '任务（展开）',
      'emailsPrimary' => '电子邮件（展开）',
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'portalUsers' => '门户网站用户',
      'originalLead' => '原始潜在客户',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => '顾客',
        'Investor' => '投资者',
        'Partner' => '伙伴',
        'Reseller' => '经销商',
      ),
      'industry' => 
      array (
        'Aerospace' => '航天',
        'Agriculture' => '农业',
        'Advertising' => '广告',
        'Apparel & Accessories' => '服饰与配饰',
        'Architecture' => '建筑',
        'Automotive' => '汽车',
        'Banking' => '银行业',
        'Biotechnology' => '生物技术',
        'Building Materials & Equipment' => '建筑材料与设备',
        'Chemical' => '化学',
        'Construction' => '施工',
        'Computer' => '电脑',
        'Defense' => '国防',
        'Creative' => '创意',
        'Culture' => '文化',
        'Consulting' => '咨询',
        'Education' => '教育',
        'Electronics' => '电子产品',
        'Electric Power' => '电力',
        'Energy' => '能源',
        'Entertainment & Leisure' => '娱乐休闲',
        'Finance' => '金融',
        'Food & Beverage' => '食品与饮料',
        'Grocery' => '杂货',
        'Hospitality' => '医药',
        'Healthcare' => '卫生保健',
        'Insurance' => '保险',
        'Legal' => '法律',
        'Manufacturing' => '制造业',
        'Mass Media' => '大众传媒',
        'Mining' => '矿产',
        'Music' => '音乐',
        'Marketing' => '百货',
        'Publishing' => '出版',
        'Petroleum' => '石油',
        'Real Estate' => '房地产',
        'Retail' => '零售',
        'Shipping' => '邮寄',
        'Service' => '服务',
        'Support' => '支持',
        'Sports' => '体育',
        'Software' => '软件',
        'Technology' => '技术',
        'Telecommunications' => '电信',
        'Television' => '电视',
        'Testing, Inspection & Certification' => '检测',
        'Transportation' => '运输',
        'Travel' => 'Travel',
        'Venture Capital' => '风险投资',
        'Wholesale' => '批发',
        'Water' => '水利',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => '创建客户',
      'Copy Billing' => '复制账单地址',
      'Set Primary' => '设置首选',
    ),
    'presetFilters' => 
    array (
      'customers' => '顾客',
      'partners' => '伙伴',
      'recentlyCreated' => '最近已创建的',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => '月',
      'week' => '周',
      'day' => '天',
      'agendaWeek' => '周',
      'agendaDay' => '天',
      'timeline' => '时间线',
    ),
    'labels' => 
    array (
      'Today' => '今天',
      'Create' => '创建',
      'Shared' => '共享',
      'Add User' => '添加用户',
      'current' => '当前',
      'time' => '时间',
      'User List' => '用户列表',
      'Manage Users' => '管理用户',
      'View Calendar' => '查看日历',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '开始日期',
      'dateEnd' => '日期结束',
      'direction' => '方向',
      'duration' => '持续时间',
      'description' => '描述',
      'users' => '用户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'reminders' => '提醒',
      'account' => '客户',
      'acceptanceStatus' => '接受状态',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => '已计划',
        'Held' => '已进行',
        'Not Held' => '未进行',
      ),
      'direction' => 
      array (
        'Outbound' => '呼出',
        'Inbound' => '呼入',
      ),
      'acceptanceStatus' => 
      array (
        'None' => '无',
        'Accepted' => '接受',
        'Declined' => '拒绝',
        'Tentative' => '暂缓',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => '设为进行',
      'setNotHeld' => '设为未进行',
    ),
    'labels' => 
    array (
      'Create Call' => '创建通话',
      'Set Held' => '设为举行',
      'Set Not Held' => '设为未举行',
      'Send Invitations' => '发送邀请',
    ),
    'presetFilters' => 
    array (
      'planned' => '已计划',
      'held' => '已进行',
      'todays' => '今天的',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'description' => '描述',
      'status' => '状态',
      'type' => '类型',
      'startDate' => '开始日期',
      'endDate' => '结束日期',
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'sentCount' => '发送',
      'openedCount' => '开业',
      'clickedCount' => '点击',
      'optedOutCount' => '选择退出',
      'bouncedCount' => '退回',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => '硬弹跳',
      'softBouncedCount' => '软弹跳',
      'leadCreatedCount' => '已创建的潜在客户',
      'revenue' => '收入',
      'revenueConverted' => '收入（转换）',
      'budget' => '预算',
      'budgetConverted' => '预算（转换）',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'accounts' => '客户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'opportunities' => '商机',
      'campaignLogRecords' => '日志',
      'massEmails' => '群发电子邮件',
      'trackingUrls' => '追踪网址',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => '电子邮件',
        'Web' => '网址',
        'Television' => '电视',
        'Radio' => '无线电',
        'Newsletter' => '通讯',
        'Mail' => '邮件',
      ),
      'status' => 
      array (
        'Planning' => '规划',
        'Active' => '激活',
        'Inactive' => '非活动',
        'Complete' => '完成',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => '创建营销活动',
      'Target Lists' => '目标列表',
      'Statistics' => '统计',
      'hard' => '硬',
      'soft' => '柔软的',
      'Unsubscribe' => '取消订阅',
      'Mass Emails' => '群发电子邮件',
      'Email Templates' => '电子邮件模板',
      'Unsubscribe again' => '再次退订',
      'Subscribe again' => '再次订阅',
      'Create Target List' => '创建目标列表',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => '激活',
    ),
    'messages' => 
    array (
      'unsubscribed' => '您已取消订阅我们的邮寄名单。',
      'subscribedAgain' => '你再次被订阅。',
    ),
    'tooltips' => 
    array (
      'targetLists' => '目标应该接收的消息。',
      'excludingTargetLists' => '目标不会接收营销活动消息。',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => '动作',
      'actionDate' => '日期',
      'data' => '数据',
      'campaign' => '营销活动',
      'parent' => '目标',
      'object' => '目的',
      'application' => '应用',
      'queueItem' => '队列项',
      'stringData' => '字符串数据',
      'stringAdditionalData' => '字符串附加数据',
      'isTest' => '测试',
    ),
    'links' => 
    array (
      'queueItem' => '队列项',
      'parent' => '关联',
      'object' => '目的',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => '发送',
        'Opened' => '开业',
        'Opted Out' => '取消订阅',
        'Bounced' => '退回',
        'Clicked' => '点击',
        'Lead Created' => '已创建的潜在客户',
        'Opted In' => '订阅',
      ),
    ),
    'labels' => 
    array (
      'All' => '全部',
    ),
    'presetFilters' => 
    array (
      'sent' => '发送',
      'opened' => '打开',
      'optedOut' => '选择退出',
      'optedIn' => 'Opted In',
      'bounced' => '反弹',
      'clicked' => '点击',
      'leadCreated' => '已创建的潜在客户',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => '网址',
      'urlToUse' => '要插入代码而不是网址',
      'campaign' => '营销活动',
    ),
    'links' => 
    array (
      'campaign' => '营销活动',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => '创建跟踪网址',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'number' => '编号',
      'status' => '状态',
      'account' => '客户',
      'contact' => '联系人',
      'contacts' => '联系人',
      'priority' => '优先',
      'type' => '类型',
      'description' => '描述',
      'inboundEmail' => '入站邮件',
      'lead' => '潜在客户',
      'attachments' => '附件',
    ),
    'links' => 
    array (
      'inboundEmail' => '入站电子邮件',
      'account' => '客户',
      'contact' => '联系人（主）',
      'Contacts' => '联系人',
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'emails' => '电子邮件',
      'articles' => '知识库文章',
      'lead' => '潜在客户',
      'attachments' => '附件',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => '新建',
        'Assigned' => '已指派',
        'Pending' => '待定',
        'Closed' => '关闭',
        'Rejected' => '拒绝',
        'Duplicate' => '重复',
      ),
      'priority' => 
      array (
        'Low' => '低',
        'Normal' => '正常',
        'High' => '高',
        'Urgent' => '紧急',
      ),
      'type' => 
      array (
        'Question' => '询问',
        'Incident' => '事件',
        'Problem' => '问题',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => '创建工单',
      'Close' => '关',
      'Reject' => '拒绝',
      'Closed' => '关闭',
      'Rejected' => '拒绝',
    ),
    'presetFilters' => 
    array (
      'open' => '打开',
      'closed' => '关闭',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'title' => '标题',
      'account' => '客户',
      'accounts' => '客户',
      'phoneNumber' => '电话',
      'accountType' => '客户类型',
      'doNotCall' => '不要电联',
      'address' => '地址',
      'opportunityRole' => '商机角色',
      'accountRole' => '标题',
      'description' => '描述',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'portalUser' => '门户网站用户',
      'originalLead' => '原始潜在客户',
      'acceptanceStatus' => '验收状态',
      'accountIsInactive' => '账户未激活',
      'acceptanceStatusMeetings' => '接受状态(Meetings)',
      'acceptanceStatusCalls' => '接受状态(Calls)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => '商机',
      'cases' => '工单',
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'account' => '帐户（主要）',
      'accounts' => '客户',
      'casesPrimary' => '工单（主要）',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => '门户用户',
      'originalLead' => '原始潜在客户',
      'documents' => '文件',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => '创建联系人',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '—无—',
        'Decision Maker' => '决策者',
        'Evaluator' => '评估者',
        'Influencer' => '影响者',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => '门户用户',
      'notPortalUsers' => '不是门户用户',
      'accountActive' => '激活',
    ),
    'tooltips' => 
    array (
      'rutBeneficiario' => 'Ingrese Rut: 17281236-6',
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => '创建文档',
      'Details' => '细节',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'file' => '文件',
      'type' => '类型',
      'publishDate' => '发布日期',
      'expirationDate' => '结束日期',
      'description' => '描述',
      'accounts' => '账户',
      'folder' => '文件夹',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => '账户',
      'opportunities' => '商机',
      'folder' => '文件夹',
      'leads' => '潜在客户',
      'contacts' => '联系人',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '激活',
        'Draft' => '草案',
        'Expired' => '已过期',
        'Canceled' => '取消',
      ),
      'type' => 
      array (
        '' => '没有',
        'Contract' => '合同',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => '许可协议',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => '激活',
      'draft' => '草案',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => '创建文档文件夹',
      'Manage Categories' => '管理文件夹',
      'Documents' => '文件',
    ),
    'links' => 
    array (
      'documents' => '文件',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'target' => '目标',
      'sentAt' => '发送日期',
      'attemptCount' => '尝试',
      'emailAddress' => '电子邮件地址',
      'massEmail' => '群发电子邮件',
      'isTest' => '是测试',
    ),
    'links' => 
    array (
      'target' => '目标',
      'massEmail' => '群发电子邮件',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => '有待',
        'Sent' => '发送',
        'Failed' => '失败',
        'Sending' => '发送中',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => '有待',
      'sent' => '发送',
      'failed' => '失败',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => '创建文章',
      'Any' => '任何',
      'Send in Email' => '在电子邮件中发送',
      'Move Up' => '提升',
      'Move Down' => '下降',
      'Move to Top' => '移到顶部',
      'Move to Bottom' => '移到底部',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'type' => '类型',
      'attachments' => '附件',
      'publishDate' => '发布日期',
      'expirationDate' => '结束日期',
      'description' => '描述',
      'body' => '身体',
      'categories' => '分类',
      'language' => '语言',
      'portals' => '门户',
    ),
    'links' => 
    array (
      'cases' => '工单',
      'opportunities' => '商机',
      'categories' => '分类',
      'portals' => '门户',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => '回顾',
        'Draft' => '草案',
        'Archived' => '存档',
        'Published' => '发布时间',
      ),
      'type' => 
      array (
        'Article' => '文章',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => '文章仅在特定门户网站上可用。',
    ),
    'presetFilters' => 
    array (
      'published' => '发布',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => '创建类别',
      'Manage Categories' => '管理类别',
      'Articles' => '用品',
    ),
    'links' => 
    array (
      'articles' => '文章',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => '已转换为',
      'Create Lead' => '创建潜在客户',
      'Convert' => '转换',
      'convert' => '转换',
    ),
    'fields' => 
    array (
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'title' => '标题',
      'website' => '网站',
      'phoneNumber' => '电话',
      'accountName' => '客户名称',
      'doNotCall' => '不要电联',
      'address' => '地址',
      'status' => '状态',
      'source' => '客户来源',
      'opportunityAmount' => '项目预算',
      'opportunityAmountConverted' => '项目预算（转换）',
      'description' => '描述',
      'createdAccount' => '客户',
      'createdContact' => '联系人',
      'createdOpportunity' => '商机',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'industry' => '行业',
      'acceptanceStatus' => '验收状态',
      'opportunityAmountCurrency' => '机会金额货币',
      'acceptanceStatusMeetings' => '接受状态(Meetings)',
      'acceptanceStatusCalls' => '接受状态(Calls)',
    ),
    'links' => 
    array (
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'createdAccount' => '客户',
      'createdContact' => '联系人',
      'createdOpportunity' => '商机',
      'cases' => '工单',
      'documents' => '文件',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => '新建',
        'Assigned' => '指派',
        'In Process' => '处理中',
        'Converted' => '已转换',
        'Recycled' => '已回收',
        'Dead' => '没机会',
      ),
      'source' => 
      array (
        '' => '无',
        'Call' => '通话',
        'Email' => '电子邮件',
        'Existing Customer' => '现有客户',
        'Partner' => '伙伴',
        'Public Relations' => '公共关系',
        'Web Site' => '网站',
        'Campaign' => '营销活动',
        'Other' => '其他',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => '激活',
      'actual' => '所有',
      'converted' => '已转换',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'status' => '状态',
      'storeSentEmails' => '存储发送的电子邮件',
      'startAt' => '开始日期',
      'fromAddress' => '发件人地址',
      'fromName' => '发件人',
      'replyToAddress' => '回复地址',
      'replyToName' => '回复名称',
      'campaign' => '营销活动',
      'emailTemplate' => '邮件模板',
      'inboundEmail' => '邮件帐户',
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'optOutEntirely' => '完全选择退出',
      'smtpAccount' => 'SMTP帐户',
    ),
    'links' => 
    array (
      'targetLists' => '目标列表',
      'excludingTargetLists' => '排除目标列表',
      'queueItems' => '队列项',
      'campaign' => '营销活动',
      'emailTemplate' => '邮件模板',
      'inboundEmail' => '邮件帐户',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => '草稿',
        'Pending' => '待定',
        'In Process' => '处理中',
        'Complete' => '完成',
        'Canceled' => '已取消',
        'Failed' => '失败',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => '创建群发电子邮件',
      'Send Test' => '发送测试',
      'System SMTP' => '系统SMTP',
      'system' => '系统',
      'group' => '组',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => '至少选择一个目标。',
      'testSent' => '测试电子邮件应该发送',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => '已取消订阅的收件人的电子邮件地址将被标记为已停用，他们将不会再收到任何群发电子邮件。',
      'targetLists' => '应该接收消息的目标。',
      'excludingTargetLists' => '不应该接收消息的目标。',
      'storeSentEmails' => '邮件将存储在CRM中.',
    ),
    'presetFilters' => 
    array (
      'actual' => '所有',
      'complete' => '完成',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '开始日期',
      'dateEnd' => '结束日期',
      'duration' => '持续时间',
      'description' => '描述',
      'users' => '用户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'reminders' => '提醒',
      'account' => '客户',
      'acceptanceStatus' => '接受状态',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => '已计划',
        'Held' => '举行',
        'Not Held' => '未举行',
      ),
      'acceptanceStatus' => 
      array (
        'None' => '无',
        'Accepted' => '接受',
        'Declined' => '拒绝',
        'Tentative' => '暂定',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => '设为举行',
      'setNotHeld' => '设为未举行',
    ),
    'labels' => 
    array (
      'Create Meeting' => '创建会晤',
      'Set Held' => '设为举行',
      'Set Not Held' => '设为未举行',
      'Send Invitations' => '发送邀请',
      'on time' => '准时',
      'before' => '之前',
    ),
    'presetFilters' => 
    array (
      'planned' => '已计划',
      'held' => '举行',
      'todays' => '今天的',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => '什么都没发送',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'account' => '客户',
      'stage' => '阶段',
      'amount' => '项目预算',
      'probability' => '概率%',
      'leadSource' => '客户来源',
      'doNotCall' => '不要电联',
      'closeDate' => '关闭日期',
      'contacts' => '联系人',
      'description' => '描述',
      'amountConverted' => '金额（转换）',
      'amountWeightedConverted' => '金额加权',
      'campaign' => '营销活动',
      'originalLead' => '原始潜在客户',
      'amountCurrency' => '金额货币',
      'contactRole' => '联系人角色',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => '联系人',
      'documents' => '文件',
      'campaign' => '营销活动运动',
      'originalLead' => '原始潜在客户',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => '预期',
        'Qualification' => '评价',
        'Proposal' => '提案',
        'Negotiation' => '协商',
        'Needs Analysis' => '需求分析',
        'Value Proposition' => '价值主张',
        'Id. Decision Makers' => 'Id决策者',
        'Perception Analysis' => '感性分析',
        'Proposal/Price Quote' => '提案/报价',
        'Negotiation/Review' => '协商/审核',
        'Closed Won' => '赢得并结束',
        'Closed Lost' => '失去并结束',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => '创建商机',
    ),
    'presetFilters' => 
    array (
      'open' => '打开',
      'won' => '韩元',
      'lost' => '丢失',
    ),
  ),
  'Project' => 
  array (
    'labels' => 
    array (
      'Create Project' => 'Create Project',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'account' => 'Account',
    ),
    'links' => 
    array (
      'projectTasks' => 'Project Tasks',
    ),
  ),
  'ProjectTask' => 
  array (
    'labels' => 
    array (
      'Create ProjectTask' => 'Create Project Task',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'project' => 'Project',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'estimatedEffort' => 'Estimated Effort (hrs)',
      'actualDuration' => 'Actual Duration (hrs)',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'description' => '描述',
      'entryCount' => '条目计数',
      'optedOutCount' => '取消订阅',
      'campaigns' => '营销活动',
      'endDate' => '结束日期',
      'targetLists' => '目标列表',
      'includingActionList' => '包含',
      'excludingActionList' => '排除',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => '客户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'campaigns' => '营销活动',
      'massEmails' => '群发电子邮件',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => '电子邮件',
        'Web' => 'Web',
        'Television' => '电视',
        'Radio' => '广播',
        'Newsletter' => '新闻稿',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => '创建目标列表',
      'Opted Out' => '选择退出',
      'Cancel Opt-Out' => '取消退出',
      'Opt-Out' => '退出',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '开始日期',
      'dateEnd' => '结束日期',
      'dateStartDate' => '日期开始（全天）',
      'dateEndDate' => '日期结束（全天）',
      'priority' => '优先级',
      'description' => '描述',
      'isOverdue' => '逾期',
      'account' => '客户',
      'dateCompleted' => '完成日期',
      'attachments' => '附件',
      'reminders' => '提醒',
      'contact' => '联系人',
    ),
    'links' => 
    array (
      'attachments' => '附件',
      'account' => '用户',
      'contact' => '联系人',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => '未开始',
        'Started' => '开始',
        'Completed' => '已完成',
        'Canceled' => '取消',
        'Deferred' => '推迟',
      ),
      'priority' => 
      array (
        'Low' => '低',
        'Normal' => '正常',
        'High' => '高',
        'Urgent' => '紧急',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => '创建任务',
      'Complete' => '完成',
    ),
    'presetFilters' => 
    array (
      'actual' => '所有',
      'completed' => '完成',
      'deferred' => '延期',
      'todays' => '今天',
      'overdue' => '过期',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => '地址',
      'meetings1' => 'Meetings1',
      'rut' => 'Rut Beneficiario',
      'beneficioSolicitado' => 'Beneficio Solicitado',
      'fechaSolicitud' => 'Fecha Solicitud',
      'fechaDesde' => 'Fecha Desde',
      'fechaHasta' => 'Fecha Hasta',
      'listaGym' => 'Lista Gym',
      'estadoFormulario' => 'Estado Formulario',
      'observacion' => 'Observacion',
      'contacts' => 'Beneficiario',
      'accounts' => 'Accounts',
      'contacts1' => 'Contactoss',
      'contact' => 'Contact',
      'documents' => 'Documents',
      'numeroFormulario' => 'Numero Formulario',
    ),
    'links' => 
    array (
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'emails' => 'Emails',
      'meetings1' => 'Meetings1',
      'contacts' => 'Beneficiario',
      'accounts' => 'Accounts',
      'contacts1' => 'Contacts1',
      'contact' => 'Contact',
      'documents' => 'Documents',
    ),
    'labels' => 
    array (
      'Create Formularios' => '创建 Formulario',
    ),
    'tooltips' => 
    array (
      'rut' => 'Ingrese Rut  (Eje: 12.345.678-9)',
      'beneficioSolicitado' => 'Ingrese Beneficio',
      'fechaSolicitud' => 'Ingrese Fecha Solicitud',
      'fechaHasta' => 'Ingrese Fecha Hasta',
      'estadoFormulario' => 'Ingrese estado',
      'observacion' => 'Inrgese Observación con un máximo de: 200 caracteres',
      'listaGym' => 'Ingrese GYM',
      'numeroFormulario' => 'Num',
    ),
    'options' => 
    array (
      'beneficioSolicitado' => 
      array (
        'Ninguno' => 'Ninguno',
        'Educación' => 'Educación',
        'Gimnasio' => 'Gimnasio',
      ),
      'listaGym' => 
      array (
        '- Seleccionar Gym -' => '- Seleccionar Gym -',
        'Sportlife' => 'Sportlife',
        'Pasco Club' => 'Pasco Club',
        'Pacific Fitness' => 'Pacific Fitness',
        'Centro Xtremo' => 'Centro Xtremo',
        'Brisas del Maipo' => 'Brisas del Maipo',
      ),
      'estadoFormulario' => 
      array (
        '- Estado Formulario -' => '- Estado Formulario -',
        'Creada' => 'Creada',
        'Ingreseda' => 'Ingreseda',
        'Eliminada' => 'Eliminada',
        'Modificada' => 'Modificada',
        'Creado' => 'Creado',
        'Inrgesado' => 'Inrgesado',
        'Modificado' => 'Modificado',
        'Eliminado' => 'Eliminado',
      ),
    ),
  ),
  'MotivoReclamo' => 
  array (
    'fields' => 
    array (
      'motivoReclamoId' => 'MotivoReclamoId',
      'motivoReclamoDescripcion' => 'Descripción',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'links' => 
    array (
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => '创建 MotivoReclamo',
    ),
    'tooltips' => 
    array (
      'motivoReclamoDescripcion' => 'Describa los motivos por lo cuales se pueden generar reclamos',
    ),
  ),
  'Reclamo' => 
  array (
    'fields' => 
    array (
      'reclamoId' => 'ReclamoId',
      'reclamoTitulo' => 'Título',
      'reclamoObservacion' => 'Observación',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'links' => 
    array (
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' => 
    array (
      'Create Reclamo' => '创建 Reclamo',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>