<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'User',
      'action' => 'Action',
      'createdAt' => 'Date',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Address',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'User',
      'target' => 'Target',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Only My',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Read',
        'update' => 'Update',
        'delete' => 'Delete',
        'create' => 'Create',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Включено',
      'Disabled' => 'Отключено',
      'System' => 'Система',
      'Users' => 'Пользователи',
      'Email' => 'Эл. почта',
      'Data' => 'Данные',
      'Customization' => 'Кастомизация',
      'Available Fields' => 'Доступные поля',
      'Layout' => 'Макет',
      'Entity Manager' => 'Управление объектами',
      'Add Panel' => 'Добавить панель',
      'Add Field' => 'Добавить поле',
      'Settings' => 'Настройки',
      'Scheduled Jobs' => 'Планировщик заданий',
      'Upgrade' => 'Обновить ПО',
      'Clear Cache' => 'Очистить кэш',
      'Rebuild' => 'Перестроить ПО',
      'Teams' => 'Группы',
      'Roles' => 'Роли',
      'Portal' => 'Портал',
      'Portals' => 'Порталы',
      'Portal Roles' => 'Роли порталов',
      'Portal Users' => 'Пользователи портала',
      'Outbound Emails' => 'Исходящая эл. почта',
      'Group Email Accounts' => 'Учетные записи эл. почты групп',
      'Personal Email Accounts' => 'Учетные записи эл. почты пользователей',
      'Inbound Emails' => 'Входящая эл. почта',
      'Email Templates' => 'Шаблоны эл. писем',
      'Import' => 'Импортирование',
      'Layout Manager' => 'Управление макетами',
      'User Interface' => 'Интерфейс пользователя',
      'Auth Tokens' => 'Токены сессий аутентификации',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Аутентификация',
      'Currency' => 'Валюта',
      'Integrations' => 'Интеграции',
      'Extensions' => 'Расширения',
      'Upload' => 'Загрузить',
      'Installing...' => 'Установка...',
      'Upgrading...' => 'Обновление...',
      'Upgraded successfully' => 'Успешно обновлено',
      'Installed successfully' => 'Успешно установлено',
      'Ready for upgrade' => 'Готово к обновлению',
      'Run Upgrade' => 'Установить обновление',
      'Install' => 'Установить',
      'Ready for installation' => 'Готово к установке',
      'Uninstalling...' => 'Удаление...',
      'Uninstalled' => 'Удалено',
      'Create Entity' => 'Создать объект',
      'Edit Entity' => 'Редактировать объект',
      'Create Link' => 'Создать ссылку',
      'Edit Link' => 'Редактировать ссылку',
      'Notifications' => 'Оповещения',
      'Jobs' => 'Задания',
      'Reset to Default' => 'Восстановить умолчания',
      'Email Filters' => 'Фильтры эл. почты',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Список',
      'detail' => 'Детализация',
      'listSmall' => 'Список (сжатый)',
      'detailSmall' => 'Детализация (сжатая)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Фильтры поиска',
      'massUpdate' => 'Массовое обновление',
      'relationships' => 'Отношения',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Конвертировать лид',
      'listForAccount' => 'Список (для контрагента)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Address',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duration',
      'password' => 'Password',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Boolean',
      'currency' => 'Currency',
      'currencyConverted' => 'Валюта (сконвертированная)',
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
      'url' => 'Url',
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
      'number' => 'Номер',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'multienim' => 'Multienum',
    ),
    'fields' => 
    array (
      'type' => 'Тип',
      'name' => 'Название',
      'label' => 'Отображаемое имя',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Обязательное поле',
      'default' => 'По умолчанию',
      'maxLength' => 'Максимальная длина',
      'options' => 'Варианты',
      'after' => 'После (поля)',
      'before' => 'Перед (полем)',
      'link' => 'Ссылка',
      'field' => 'Поле',
      'min' => 'Минимальное значение',
      'max' => 'Максимальное значение',
      'translation' => 'Перевод',
      'previewSize' => 'Размер предпросмотра',
      'noEmptyString' => 'No Empty String',
      'defaultType' => 'Тип по умолчанию',
      'seeMoreDisabled' => 'Disable Text Cut',
      'entityList' => 'Список объектов',
      'isSorted' => 'Сортировать (по алфавиту)',
      'audited' => 'Аудит (отслеживать изменения значений)',
      'trim' => 'Удалять лишние пробелы (Trim)',
      'height' => 'Высота (в пикс.)',
      'minHeight' => 'Минимальная высота (в пикс.)',
      'provider' => 'Поставщик',
      'typeList' => 'Список типов',
      'rows' => 'Количество строк в текстовом поле',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Source List',
      'prefix' => 'Префикс',
      'nextNumber' => 'Следующий номер',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Отключить форматирование',
      'dynamicLogicVisible' => 'Conditions making field visible',
      'dynamicLogicReadOnly' => 'Conditions making field read-only',
      'dynamicLogicRequired' => 'Conditions making field required',
      'dynamicLogicOptions' => 'Conditional options',
      'probabilityMap' => 'Stage Probabilities (%)',
      'readOnly' => 'Read-only',
      'maxFileSize' => 'Max File Size (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM will be upgraded to version <strong>{version}</strong>. Please be patient as this may take a while.',
      'upgradeDone' => 'EspoCRM has been upgraded to version <strong>{version}</strong>.',
      'upgradeBackup' => 'We recommend making a backup of your EspoCRM files and data before upgrading.',
      'thousandSeparatorEqualsDecimalMark' => 'The thousands separator character can not be the same as the decimal point character.',
      'userHasNoEmailAddress' => 'User has no email address.',
      'selectEntityType' => 'Выберите тип объекта в левом меню.',
      'selectUpgradePackage' => 'Выберите пакет обновления',
      'downloadUpgradePackage' => 'Загрузить пакеты обновлений можно <a href="{url}">здесь</a>.',
      'selectLayout' => 'Выберите интересующий макет в левом меню и отредактируйте его.',
      'selectExtensionPackage' => 'Выберите пакет расширения',
      'extensionInstalled' => 'Расширение {name} {version} было установлено.',
      'installExtension' => 'Расширение {name} {version} готово к установке.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Системные настройки.',
      'scheduledJob' => 'Выполняемые с помощью cron задания.',
      'upgrade' => 'Обновить EspoCRM.',
      'clearCache' => 'Очистить кэш сервера.',
      'rebuild' => 'Перестроить серверную часть ПО и очистить кэш сервера.',
      'users' => 'Управление пользователями.',
      'teams' => 'Управление группами.',
      'roles' => 'Управление ролями.',
      'portals' => 'Управление порталами',
      'portalRoles' => 'Управление ролями для порталов',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Настройки SMTP для исходящих сообщений эл. почты.',
      'groupEmailAccounts' => 'Учетные записи эл. почты групп (IMAP). Импортирование сообщений эл. почты и автоматическая конвертация входящих эл. писем в обращения (Email-to-Case).',
      'personalEmailAccounts' => 'Учетные записи эл. почты пользователей.',
      'emailTemplates' => 'Шаблоны исходящих эл. писем.',
      'import' => 'Импортирование данных из CSV файла.',
      'layoutManager' => 'Редактирование макетов (списки, детализации, редактирование, поиск, массовое обновление).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Настройки пользовательского интерфейса.',
      'authTokens' => 'Активные сессии аутентификации. IP-адрес и дата последнего подключения.',
      'authentication' => 'Настройки аутентификации.',
      'currency' => 'Настройки и курсы валют.',
      'extensions' => 'Установить или удалить расширения.',
      'integrations' => 'Интеграция со сторонними сервисами.',
      'notifications' => 'Настройка оповещений (в приложении и по эл. почте).',
      'inboundEmails' => 'Настройки для входящих сообщений эл. почты.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Очень маленький',
        'small' => 'Маленький',
        'medium' => 'Средний',
        'large' => 'Большой',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'AND',
      'or' => 'OR',
      'not' => 'NOT',
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'role' => 'Role',
      'related' => 'Related',
      'file' => 'File',
      'type' => 'Type',
      'field' => 'Field',
      'sourceId' => 'Source ID',
      'storage' => 'Storage',
      'size' => 'Size (bytes)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => 'Attachment',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => 'Import File',
        'Export File' => 'Export File',
        'Mail Merge' => 'Mail Merge',
        'Mass Pdf' => 'Mass Pdf',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Вставить документ',
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
      'username' => 'Username',
      'ipAddress' => 'IP Address',
      'requestTime' => 'Request Time',
      'createdAt' => 'Requested At',
      'isDenied' => 'Is Denied',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portal',
      'user' => 'User',
      'authToken' => 'Auth Token Created',
      'requestUrl' => 'Request URL',
      'requestMethod' => 'Request Method',
      'authTokenIsActive' => 'Auth Token is Active',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token Created',
      'user' => 'User',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Action History',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Denied',
      'accepted' => 'Accepted',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Invalid credentials',
        'INACTIVE_USER' => 'Inactive user',
        'IS_PORTAL_USER' => 'Portal user',
        'IS_NOT_PORTAL_USER' => 'Not a portal user',
        'USER_IS_NOT_IN_PORTAL' => 'User is not related to the portal',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Пользователь',
      'ipAddress' => 'IP-адрес',
      'lastAccess' => 'Дата последнего подключения',
      'createdAt' => 'Дата входа',
      'isActive' => 'Is Active',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Action History',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'inactive' => 'Inactive',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Set Inactive',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Set Inactive',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Название',
      'dateFrom' => 'Дата от',
      'dateTo' => 'Дата по',
      'autorefreshInterval' => 'Интервал автообновления',
      'displayRecords' => 'Отображать записей',
      'isDoubleHeight' => 'Высота 2x',
      'mode' => 'Режим',
      'enabledScopeList' => 'Что отображать',
      'users' => 'Пользователи',
      'entityType' => 'Entity Type',
      'primaryFilter' => 'Primary Filter',
      'boolFilterList' => 'Additional Filters',
      'sortBy' => 'Order (field)',
      'sortDirection' => 'Order (direction)',
      'expandedLayout' => 'Layout',
      'dateFilter' => 'Date Filter',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Неделя (расписание)',
        'basicWeek' => 'Неделя',
        'month' => 'Месяц',
        'basicDay' => 'День',
        'agendaDay' => 'День (повестка дня)',
        'timeline' => 'Расписание',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Select Entity Type in dashlet options.',
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
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than Or Equals',
        'lessThanOrEquals' => 'Less Than Or Equals',
        'in' => 'In',
        'notIn' => 'Not In',
        'inPast' => 'In Past',
        'inFuture' => 'Is Future',
        'isToday' => 'Is Today',
        'isTrue' => 'Is True',
        'isFalse' => 'Is False',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'has' => 'Contains',
        'notHas' => 'Not Contains',
      ),
    ),
    'label' => 
    array (
      'Field' => 'Field',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Тема',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateSent' => 'Дата отправки',
      'from' => 'От',
      'to' => 'Кому',
      'cc' => 'Копия (Cc)',
      'bcc' => 'Слепая копия (Bcc)',
      'replyTo' => 'Ответить',
      'replyToString' => 'Reply To (String)',
      'isHtml' => 'HTML',
      'body' => 'Тело',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'selectTemplate' => 'Выбрать шаблон',
      'fromEmailAddress' => 'Адрес отправителя',
      'toEmailAddresses' => 'Адрес получателя',
      'emailAddress' => 'Адрес эл. почты',
      'deliveryDate' => 'Дата доставки',
      'account' => 'Контрагент',
      'users' => 'Пользователи',
      'replied' => 'Replied',
      'replies' => 'Replies',
      'isRead' => 'Is Read',
      'isNotRead' => 'Is Not Read',
      'isImportant' => 'Это важное',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Is User\'s',
      'inTrash' => 'In Trash',
      'sentBy' => 'Sent by (User)',
      'folder' => 'Папка',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'hasAttachment' => 'Has Attachment',
      'assignedUsers' => 'Assigned Users',
      'ccEmailAddresses' => 'CC Email Addresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Message Id',
      'messageIdInternal' => 'Message Id (Internal)',
      'folderId' => 'Folder Id',
      'fromName' => 'From Name',
      'fromString' => 'From String',
      'isSystem' => 'Is System',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'replied' => 'Replied',
      'replies' => 'Replies',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
      'attachments' => 'Attachments',
      'fromEmailAddress' => 'From Email Address',
      'toEmailAddresses' => 'To EmailAddresses',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Черновик',
        'Sending' => 'Отправляется',
        'Sent' => 'Отправлено',
        'Archived' => 'В архиве',
        'Received' => 'Получено',
        'Failed' => 'Сбой',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Отправить эл. письмо в архив',
      'Archive Email' => 'Отправить эл. письмо в архив',
      'Compose' => 'Новое сообщение',
      'Reply' => 'Ответить',
      'Reply to All' => 'Ответить всем',
      'Forward' => 'Переслать',
      'Original message' => 'Оригинальное сообщение',
      'Forwarded message' => 'Пересылаемое сообщение',
      'Email Accounts' => 'Учетные записи эл. почты пользователей',
      'Inbound Emails' => 'Учетные записи эл. почты групп',
      'Email Templates' => 'Шаблоны эл. писем',
      'Send Test Email' => 'Отправить тестовое эл. письмо',
      'Send' => 'Отправить',
      'Email Address' => 'Адрес эл. почты',
      'Mark Read' => 'Пометить как прочитанное',
      'Sending...' => 'Отправляется...',
      'Save Draft' => 'Сохранить черновик',
      'Mark all as read' => 'Пометить все как прочитанные',
      'Show Plain Text' => 'Show Plain Text',
      'Mark as Important' => 'Пометить как важное',
      'Unmark Importance' => 'Снять пометку важности',
      'Move to Trash' => 'Переместить в корзину',
      'Retrieve from Trash' => 'Восстановить из корзины',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Фильтры',
      'Folders' => 'Папки',
      'Create Lead' => 'Создать кандидата',
      'Create Contact' => 'Создать контакт',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Создать задачу',
      'Create Case' => 'Создать обращение',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Не настроен SMTP. {link}.',
      'testEmailSent' => 'Тестовое эл. письмо было отправлено',
      'emailSent' => 'Эл. письмо было отправлено',
      'savedAsDraft' => 'Сохранено как черновик',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Отправленные',
      'archived' => 'В архиве',
      'inbox' => 'Входящие',
      'drafts' => 'Черновики',
      'trash' => 'Корзина',
      'important' => 'Важное',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Пометить как прочитанное',
      'markAsNotRead' => 'Пометить как не прочитанное',
      'markAsImportant' => 'Пометить как важное',
      'markAsNotImportant' => 'Снять пометку важности',
      'moveToTrash' => 'Переместить в корзину',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'host' => 'Сервер',
      'username' => 'Имя пользователя',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые папки',
      'ssl' => 'SSL',
      'fetchSince' => 'Получить эл. письма начиная с',
      'emailAddress' => 'Адрес эл. почты',
      'sentFolder' => 'Папка \'Отправленные\'',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'keepFetchedEmailsUnread' => 'Оставлять полученные эл. письма непрочитанными',
      'emailFolder' => 'Put in Folder',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
    ),
    'links' => 
    array (
      'filters' => 'Фильтры',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активная',
        'Inactive' => 'Неактивная',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Создать учетную запись эл. почты',
      'IMAP' => 'IMAP',
      'Main' => 'Основное',
      'Test Connection' => 'Проверка соединения',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не удалось соединиться с IMAP сервером',
      'connectionIsOk' => 'Соединение с IMAP сервером прошло удачно',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Можете добавить папку \'Отправленные\' для синхронизации эл. писем отправленных из внешнего клиента эл. почты.',
      'storeSentEmails' => 'Отправленные эл. письма будут храниться на IMAP сервере. Адрес эл. почты должен соответствовать адресу с которого производится отправка.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Основной',
      'Opted Out' => 'Отписан',
      'Invalid' => 'Неверный адрес',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'От',
      'to' => 'Кому',
      'subject' => 'Тема',
      'bodyContains' => 'Тело письма содержит',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Создать фильтр эл. почты',
      'Emails' => 'Emails',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignore',
        'Move to Folder' => 'Put in Folder',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Просто название фильтра.',
      'subject' => 'Используйте символ *:

текст* - начинается с текста,
*текст* - содержит текст,
*текст - заканчивается текстом.',
      'bodyContains' => 'Тело эл. письма содержит любое из указанных слов или фраз.',
      'from' => 'Письма отправленные с указанного адреса. Оставьте пустым, если не требуется. Можете использовать специальный символ *.',
      'to' => 'Письма отправленные на указанный адрес. Оставьте пустым, если не требуется. Можете использовать специальный символ *.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Skip Notifications',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Create Folder',
      'Manage Folders' => 'Управление папками',
      'Emails' => 'Emails',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'isHtml' => 'HTML',
      'body' => 'Тело',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'insertField' => 'Вставить поле',
      'oneOff' => 'Одноразовый',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Создать шаблон эл. письма',
      'Info' => 'Информация',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Доступные переменные:

{optOutUrl} &#8211; URL ссылки отписки;

{optOutLink} &#8211; ссылка отписки.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Отметьте если собираетесь использовать этот шаблон только один раз. К примеру для массовой рассылки эл. писем.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальный',
    ),
    'placeholderTexts' => 
    array (
      'optOutUrl' => 'URL for an unsubsbribe link',
      'optOutLink' => 'an unsubscribe link',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'EmailTemplates' => 'Email Templates',
    ),
    'fields' => 
    array (
      'order' => 'Order',
      'childList' => 'Child List',
    ),
    'links' => 
    array (
      'emailTemplates' => 'Email Templates',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Поля',
      'Relationships' => 'Отношения',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'type' => 'Тип',
      'labelSingular' => 'Метка (единственное число)',
      'labelPlural' => 'Метка (множественное число)',
      'stream' => 'Лента',
      'label' => 'Метка',
      'linkType' => 'Link Type',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => 'Link',
      'labelForeign' => 'Foreign Label',
      'sortBy' => 'Сортировка (поле)',
      'sortDirection' => 'Сортировка (направление)',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Link Multiple Field',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Disabled',
      'textFilterFields' => 'Text Filter Fields',
      'audited' => 'Audited',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Status Field',
      'beforeSaveCustomScript' => 'Before Save Custom Script',
      'color' => 'Color',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'Ignored groups in Kanban view',
      'iconClass' => 'Icon',
      'fullTextSearch' => 'Full-Text Search',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Нет',
        'Base' => 'Base',
        'Person' => 'Person',
        'CategoryTree' => 'Category Tree',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'One-to-Many',
        'manyToOne' => 'Many-to-One',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => 'По возрастанию',
        'desc' => 'По убыванию',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Объект был создан',
      'linkAlreadyExists' => 'Конфликт названий связей (link).',
      'linkConflict' => 'Связь (link) с таким названием уже существует.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Updates of this field are logged in stream.',
      'textFilterFields' => 'Fields used by text search.',
      'stream' => 'Whether entity has a Stream.',
      'disabled' => 'Check if you don\'t need this entity in your system.',
      'linkAudited' => 'Creating related record and linking with existing record will be logged in Stream.',
      'linkMultipleField' => 'Link Multiple field provides a handy way to edit relations. Don\'t use it if you can have a large number of related records.',
      'entityType' => 'Base Plus - has Activities, History and Tasks panels.

Event - available in Calendar and Activities panel.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Export all fields',
      'fieldList' => 'Field List',
      'format' => 'Format',
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
      'name' => 'Название',
      'version' => 'Версия',
      'description' => 'Описание',
      'isInstalled' => 'Установлено',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Удалить',
      'Install' => 'Установить',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Расширение {name} было удалено',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Подключить',
      'Connected' => 'Подключено',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dynamic Logic',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'None',
        'javascript: return this.dateTime.getNow(1);' => 'Now',
        'javascript: return this.dateTime.getNow(5);' => 'Now (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Now (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Now (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hour',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 day',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 week',
      ),
      'dateDefault' => 
      array (
        '' => 'None',
        'javascript: return this.dateTime.getToday();' => 'Today',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 day',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 month',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 year',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Updates will be logged in stream.',
      'required' => 'Field will be mandatory. Can\'t be left empty.',
      'default' => 'Value will be set by default upon creating.',
      'min' => 'Min acceptable value.',
      'max' => 'Max acceptable value.',
      'seeMoreDisabled' => 'If not checked then long texts will be shortened.',
      'lengthOfCut' => 'How long text can be before it will be cut.',
      'maxLength' => 'Max acceptable length of text.',
      'before' => 'The date value should be before the date value of the specified field.',
      'after' => 'The date value should be after the date value of the specified field.',
      'readOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.',
      'maxFileSize' => 'If empty or 0 then no limit.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Street',
        'city' => 'City',
        'state' => 'State',
        'country' => 'Country',
        'postalCode' => 'Postal Code',
        'map' => 'Map',
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
      'Email' => 'Эл. письмо',
      'User' => 'Пользователь',
      'Team' => 'Группа',
      'Role' => 'Роль',
      'EmailTemplate' => 'Шаблон эл. письма',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Учетная запись эл. почты пользователя',
      'EmailAccountScope' => 'Учетная запись эл. почты пользователя',
      'OutboundEmail' => 'Исходящее эл. письмо',
      'ScheduledJob' => 'Задание планировщика',
      'ExternalAccount' => 'Внешняя учетная запись',
      'Extension' => 'Расширение',
      'Dashboard' => 'Панель виджетов',
      'InboundEmail' => 'Учетная запись эл. почты группы',
      'Stream' => 'Лента',
      'Import' => 'Импортировать',
      'Template' => 'Шаблон',
      'Job' => 'Задание',
      'EmailFilter' => 'Фильтр эл. почты',
      'Portal' => 'Портал',
      'PortalRole' => 'Роли портала',
      'Attachment' => 'Вложение',
      'EmailFolder' => 'Email Folder',
      'PortalUser' => 'Portal User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Last Viewed',
      'Settings' => 'Settings',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integration',
      'LayoutManager' => 'Layout Manager',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Export',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'Email Address',
      'PhoneNumber' => 'Phone Number',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Контрагент',
      'Contact' => 'Контакт',
      'Lead' => 'Кандидат',
      'Target' => 'Цель',
      'Opportunity' => 'Cделка',
      'Meeting' => 'Встреча',
      'Calendar' => 'Календарь',
      'Call' => 'Звонок',
      'Task' => 'Задача',
      'Case' => 'Обращение',
      'Document' => 'Документ',
      'DocumentFolder' => 'Папка с документами',
      'Campaign' => 'Кампания',
      'TargetList' => 'Список целей',
      'MassEmail' => 'Массовая рассылка эл. писем',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Целевой URL-адрес',
      'Activities' => 'Действия',
      'KnowledgeBaseArticle' => 'Статья базы знаний',
      'KnowledgeBaseCategory' => 'Категория базы знаний',
      'CampaignLogRecord' => 'Campaign Log Record',
      'Formularios' => 'Formulario',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Эл. письма',
      'User' => 'Пользователи',
      'Team' => 'Группы',
      'Role' => 'Роли',
      'EmailTemplate' => 'Шаблоны эл. писем',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Учетные записи эл. почты пользователей',
      'EmailAccountScope' => 'Учетные записи эл. почты пользователей',
      'OutboundEmail' => 'Исходящие эл. письма',
      'ScheduledJob' => 'Задания планировщика',
      'ExternalAccount' => 'Внешние учетные записи',
      'Extension' => 'Расширения',
      'Dashboard' => 'Панели виджетов',
      'InboundEmail' => 'Учетные записи эл. почты групп',
      'Stream' => 'Ленты',
      'Import' => 'Импортировать результаты',
      'Template' => 'Шаблоны',
      'Job' => 'Задания',
      'EmailFilter' => 'Фильтры эл. почты',
      'Portal' => 'Порталы',
      'PortalRole' => 'Роли порталов',
      'Attachment' => 'Вложения',
      'EmailFolder' => 'Папки Эл.почты',
      'PortalUser' => 'Portal Users',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Last Viewed',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Контрагенты',
      'Contact' => 'Контакты',
      'Lead' => 'Кандидаты',
      'Target' => 'Цели',
      'Opportunity' => 'Сделки',
      'Meeting' => 'Встречи',
      'Calendar' => 'Календари',
      'Call' => 'Звонки',
      'Task' => 'Задачи',
      'Case' => 'Обращения',
      'Document' => 'Документы',
      'DocumentFolder' => 'Папки с документами',
      'Campaign' => 'Кампании',
      'TargetList' => 'Списки целей',
      'MassEmail' => 'Массовые рассылки эл. писем',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Целевые URL-адреса',
      'Activities' => 'Действия',
      'KnowledgeBaseArticle' => 'Статьи базы знаний',
      'KnowledgeBaseCategory' => 'Категории базы знаний',
      'CampaignLogRecord' => 'Campaign Log Records',
      'Formularios' => 'Formularios',
    ),
    'labels' => 
    array (
      'Misc' => 'Разное',
      'Merge' => 'Объединить',
      'None' => 'Нет',
      'Home' => 'Home',
      'by' => 'по',
      'Saved' => 'Сохранено',
      'Error' => 'Ошибка',
      'Select' => 'Выбрать',
      'Not valid' => 'Некорректные данные',
      'Please wait...' => 'Пожалуйста, подождите...',
      'Please wait' => 'Пожалуйста, подождите',
      'Loading...' => 'Загрузка...',
      'Uploading...' => 'Загружается...',
      'Sending...' => 'Отправляется...',
      'Merging...' => 'Объединияется...',
      'Merged' => 'Объединено',
      'Removed' => 'Удалено',
      'Posted' => 'Добавлено',
      'Linked' => 'Ссылка добавлена',
      'Unlinked' => 'Ссылка убрана',
      'Done' => 'Готово',
      'Access denied' => 'В доступе отказано',
      'Not found' => 'Не найдено',
      'Access' => 'Доступ',
      'Are you sure?' => 'Вы уверены?',
      'Record has been removed' => 'Запись была удалена',
      'Wrong username/password' => 'Неверное имя пользователя/пароль',
      'Post cannot be empty' => 'Сообщение не может быть пустым',
      'Removing...' => 'Удаляется...',
      'Unlinking...' => 'Ссылка убирается...',
      'Posting...' => 'Размещается...',
      'Username can not be empty!' => 'Имя пользователя не может быть пустым!',
      'Cache is not enabled' => 'Кэш не подключен',
      'Cache has been cleared' => 'Кэш был очищен',
      'Rebuild has been done' => 'Перестройка ПО была выполнена',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Сохраняется...',
      'Modified' => 'Изменено',
      'Created' => 'Создано',
      'Create' => 'Создать',
      'create' => 'создать',
      'Overview' => 'Обзор',
      'Details' => 'Описание',
      'Add Field' => 'Добавить поле',
      'Add Dashlet' => 'Добавить виджет',
      'Filter' => 'Фильтр',
      'Edit Dashboard' => 'Редактировать панель',
      'Add' => 'Добавить',
      'Add Item' => 'Добавить',
      'Reset' => 'Сбросить',
      'Menu' => 'Меню',
      'More' => 'Больше',
      'Search' => 'Искать',
      'Only My' => 'Только мои',
      'Open' => 'Открыть',
      'Admin' => 'Администратор',
      'About' => 'О программе',
      'Refresh' => 'Обновить',
      'Remove' => 'Удалить',
      'Options' => 'Настройки',
      'Username' => 'Имя пользователя',
      'Password' => 'Пароль',
      'Login' => 'Войти',
      'Log Out' => 'Выйти',
      'Preferences' => 'Настройки',
      'State' => 'Регион',
      'Street' => 'Улица',
      'Country' => 'Страна',
      'City' => 'Город',
      'PostalCode' => 'Индекс',
      'Followed' => 'Отписаться',
      'Follow' => 'Подписаться',
      'Followers' => 'Подписчики',
      'Clear Local Cache' => 'Очистить локальный кэш',
      'Actions' => 'Действия',
      'Delete' => 'Удалить',
      'Update' => 'Обновить',
      'Save' => 'Сохранить',
      'Edit' => 'Редактировать',
      'View' => 'Просмотреть',
      'Cancel' => 'Отменить',
      'Apply' => 'Применить',
      'Unlink' => 'Убрать ссылку',
      'Mass Update' => 'Обновить все',
      'Export' => 'Экспортировать',
      'No Data' => 'Нет данных',
      'No Access' => 'Нет доступа',
      'All' => 'Все',
      'Active' => 'Активный',
      'Inactive' => 'Неактивный',
      'Write your comment here' => 'Оставьте свою заметку здесь',
      'Post' => 'Разместить',
      'Stream' => 'Лента',
      'Show more' => 'Показать еще',
      'Dashlet Options' => 'Настройки панели',
      'Full Form' => 'Раширенная форма',
      'Insert' => 'Вставить',
      'Person' => 'Личность',
      'First Name' => 'Имя',
      'Last Name' => 'Фамилия',
      'Original' => 'Оригинал',
      'You' => 'Вы',
      'you' => 'вы',
      'change' => 'изменить',
      'Change' => 'Изменить',
      'Primary' => 'Основной',
      'Save Filter' => 'Сохранить фильтр',
      'Administration' => 'Администрирование',
      'Run Import' => 'Импортировать',
      'Duplicate' => 'Дубликат',
      'Notifications' => 'Оповещения',
      'Mark all read' => 'Пометить все как прочитанное',
      'See more' => 'Подробнее',
      'Today' => 'Сегодня',
      'Tomorrow' => 'Завтра',
      'Yesterday' => 'Вчера',
      'Submit' => 'Отправить',
      'Close' => 'Закрыть',
      'Yes' => 'Да',
      'No' => 'Нет',
      'Select All Results' => 'Select All Results',
      'Value' => 'Значение',
      'Current version' => 'Текущая версия',
      'List View' => 'Отображать в виде списка',
      'Tree View' => 'Отображать в виде дерева',
      'Unlink All' => 'Убрать все ссылки',
      'Total' => 'Всего',
      'Print to PDF' => 'Распечатать в PDF',
      'Default' => 'По умолчанию',
      'Number' => 'Номер',
      'From' => 'От',
      'To' => 'До',
      'Create Post' => 'Создать сообщение',
      'Previous Entry' => 'Предыдущая запись',
      'Next Entry' => 'Следующая запись',
      'View List' => 'Просмотреть список',
      'Attach File' => 'Прикрепить файл',
      'Skip' => 'Skip',
      'Attribute' => 'Attribute',
      'Function' => 'Function',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Expand' => 'Expand',
      'Collapse' => 'Collapse',
      'New notifications' => 'New notifications',
      'Manage Categories' => 'Manage Categories',
      'Manage Folders' => 'Manage Folders',
      'Convert to' => 'Convert to',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Erase',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => 'Create Inbound Email',
      'Activities' => 'Действия',
      'History' => 'История',
      'Attendees' => 'Участники',
      'Schedule Meeting' => 'Запланировать встречу',
      'Schedule Call' => 'Запланировать звонок',
      'Compose Email' => 'Написать эл. письмо',
      'Log Meeting' => 'Записать встречу',
      'Log Call' => 'Записать звонок',
      'Archive Email' => 'Отправить эл. письмо в архив',
      'Create Task' => 'Создать задачу',
      'Tasks' => 'Задачи',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Пожалуйста, подождите...',
      'posting' => 'Размещается...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Вы действительно хотите покинуть эту форму?',
      'notModified' => 'Вы не внесли изменения в запись',
      'duplicate' => 'Создаваемая запись является дубликатом уже существующей',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} обязательно',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field} должно быть после {otherField}',
      'fieldShouldBefore' => '{field} должно быть до {otherField}',
      'fieldShouldBeBetween' => '{field} должно быть между {min} и {max}',
      'fieldShouldBeLess' => '{field} должно быть меньше чем {value}',
      'fieldShouldBeGreater' => '{field} должно быть больше чем {value}',
      'fieldBadPasswordConfirm' => '{field} подтверждено неверно',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Были восстановлены значения по умолчанию',
      'confirmation' => 'Вы уверены?',
      'unlinkAllConfirmation' => 'Вы действительно хотите убрать все связанные записи?',
      'resetPreferencesConfirmation' => 'Вы действительно хотите восстановить значения по умолчанию?',
      'removeRecordConfirmation' => 'Вы действительно хотите удалить запись?',
      'unlinkRecordConfirmation' => 'Вы действительно хотите убрать связанную запись?',
      'removeSelectedRecordsConfirmation' => 'Вы действительно хотите удалить выбранные записи?',
      'massUpdateResult' => '{count} записей было обновлено',
      'massUpdateResultSingle' => '{count} запись была обновлена',
      'noRecordsUpdated' => 'Записи не были обновлены',
      'massRemoveResult' => '{count} записей было удалено',
      'massRemoveResultSingle' => '{count} запись была удалена',
      'noRecordsRemoved' => 'Записи не были удалены',
      'clickToRefresh' => 'Нажмите для обновления',
      'streamPostInfo' => 'Введите <strong>@username</strong> чтобы упомянуть пользователей в сообщении.

Доступный синтаксис разметки:
`<code>код</code>`
**<strong>важный текст</strong>**
*<em>эмоционально выделенный текст</em>*
~<del>удаленный текст</del>~
> цитата
[текст ссылки](URL)',
      'writeYourCommentHere' => 'Оставьте свою заметку здесь',
      'writeMessageToUser' => 'Оставить сообщение для {user}',
      'writeMessageToSelf' => 'Оставить сообщение для себя',
      'typeAndPressEnter' => 'Введите и нажмите enter',
      'checkForNewNotifications' => 'Проверить новые оповещения',
      'checkForNewNotes' => 'Проверить новые события в Ленте',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Готово',
      'confirmMassFollow' => 'Are you sure you want to follow selected records?',
      'confirmMassUnfollow' => 'Are you sure you want to unfollow selected records?',
      'massFollowResult' => '{count} records now are followed',
      'massUnfollowResult' => '{count} records now are not followed',
      'massFollowResultSingle' => '{count} record now is followed',
      'massUnfollowResultSingle' => '{count} record now is not followed',
      'massFollowZeroResult' => 'Nothing got followed',
      'massUnfollowZeroResult' => 'Nothing got unfollowed',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Только мои',
      'followed' => 'Отписаться',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Отписаться',
      'all' => 'Все',
    ),
    'massActions' => 
    array (
      'remove' => 'Удалить',
      'merge' => 'Объединить',
      'massUpdate' => 'Обновить все',
      'export' => 'Экспортировать',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'firstName' => 'Имя',
      'lastName' => 'Фамилия',
      'salutationName' => 'Обращение',
      'assignedUser' => 'Ответственный',
      'assignedUsers' => 'Ответственные',
      'emailAddress' => 'Адрес эл. почты',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Имя ответственного',
      'teams' => 'Группы',
      'createdAt' => 'Создано в',
      'modifiedAt' => 'Изменено в',
      'createdBy' => 'Создано (кем)',
      'modifiedBy' => 'Изменено (кем)',
      'description' => 'Описание',
      'address' => 'Адрес',
      'phoneNumber' => 'Телефон',
      'phoneNumberMobile' => 'Телефон (Мобильный)',
      'phoneNumberHome' => 'Телефон (Домашний)',
      'phoneNumberFax' => 'Телефон (Факс)',
      'phoneNumberOffice' => 'Телефон (Офисный)',
      'phoneNumberOther' => 'Телефон (Дополнительно)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Порядок',
      'parent' => 'Источник',
      'children' => 'Потомок',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Город',
      'billingAddressCountry' => 'Страна',
      'billingAddressPostalCode' => 'Индекс',
      'billingAddressState' => 'Регион',
      'billingAddressStreet' => 'Улица',
      'billingAddressMap' => 'Карта',
      'addressCity' => 'Город',
      'addressStreet' => 'Улица',
      'addressCountry' => 'Страна',
      'addressState' => 'Регион',
      'addressPostalCode' => 'Индекс',
      'addressMap' => 'Карта',
      'shippingAddressCity' => 'Город доставки',
      'shippingAddressStreet' => 'Улица доставки',
      'shippingAddressCountry' => 'Страна доставки',
      'shippingAddressState' => 'Регион доставки',
      'shippingAddressPostalCode' => 'Индекс доставки',
      'shippingAddressMap' => 'Карта (доставка)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Ответственный',
      'createdBy' => 'Создан (кем)',
      'modifiedBy' => 'Изменен (кем)',
      'team' => 'Группа',
      'roles' => 'Роли',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'parent' => 'Источник',
      'children' => 'Потомок',
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'leads' => 'Кандидаты',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Эл. письма',
      'accounts' => 'Контрагенты',
      'cases' => 'Обращения',
      'documents' => 'Документы',
      'account' => 'Контрагент',
      'opportunity' => 'Cделка',
      'contact' => 'Контакт',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Лента',
      'Emails' => 'Моя почта',
      'Records' => 'Record List',
      'Leads' => 'Мои кандидаты',
      'Opportunities' => 'Мои сделки',
      'Tasks' => 'Мои задачи',
      'Cases' => 'Мои обращения',
      'Calendar' => 'Календарь',
      'Calls' => 'Мои звонки',
      'Meetings' => 'Мои встречи',
      'OpportunitiesByStage' => 'Сделки по стадиям',
      'OpportunitiesByLeadSource' => 'Сделки по источнику кандидатов',
      'SalesByMonth' => 'Продажи по месяцам',
      'SalesPipeline' => 'Источники продаж',
      'Activities' => 'Мои действия',
    ),
    'notificationMessages' => 
    array (
      'assign' => 'Вам было назначено {entityType} {entity}',
      'emailReceived' => 'Получено эл. письмо от {from}',
      'entityRemoved' => '{user} удалил {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} оставил примечание к {entityType} {entity}',
      'attach' => '{user} прикрепил к {entityType} {entity}',
      'status' => '{user} обновил {field} (чего) {entityType} {entity}',
      'update' => '{user} обновил {entityType} {entity}',
      'postTargetTeam' => '{user} оставил сообщение для группы {target}',
      'postTargetTeams' => '{user} оставил сообщение для групп {target}',
      'postTargetPortal' => '{user} оставил сообщение для портала {target}',
      'postTargetPortals' => '{user} оставил сообщение для порталов {target}',
      'postTarget' => '{user} оставил сообщение для {target}',
      'postTargetYou' => '{user} оставил сообщение для Вас',
      'postTargetYouAndOthers' => '{user} оставил сообщение для {target} и для Вас',
      'postTargetAll' => '{user} оставил сообщение для всех',
      'postTargetSelf' => '{user} оставил сообщение у себя на ленте',
      'postTargetSelfAndOthers' => '{user} оставил сообщение для {target} и для себя',
      'mentionInPost' => '{user} упомянул {mentioned} в {entityType} {entity}',
      'mentionYouInPost' => '{user} упомянул Вас в {entityType} {entity}',
      'mentionInPostTarget' => '{user} упомянул {mentioned} в сообщении',
      'mentionYouInPostTarget' => '{user} упомянул Вас в сообщении для {target}',
      'mentionYouInPostTargetAll' => '{user} упомянул Вас в сообщении для всех',
      'mentionYouInPostTargetNoTarget' => '{user} упомянул Вас в сообщении',
      'create' => '{user} создал {entityType} {entity}',
      'createThis' => '{user} создал {entityType}',
      'createAssignedThis' => '{user} создал {entityType} назначил {assignee}',
      'createAssigned' => '{user} создал {entityType} {entity} (кому) {assignee}',
      'createAssignedYou' => '{user} создал {entityType} {entity} Вам',
      'createAssignedThisSelf' => '{user} создал этот {entityType} self-assigned',
      'createAssignedSelf' => '{user} создал {entityType} {entity} self-assigned',
      'assign' => '{user} назначил {entityType} {entity} (кому) {assignee}',
      'assignThis' => '{user} назначил {entityType} {assignee}',
      'assignYou' => '{user} назначил {entityType} {entity} Вам',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} назначил {entityType} на себя',
      'assignSelf' => '{user} назначил {entityType} {entity} на себя',
      'postThis' => '{user} оставил сообщение',
      'attachThis' => '{user} прикрепил',
      'statusThis' => '{user} обновил {field}',
      'updateThis' => '{user} обновил {entityType}',
      'createRelatedThis' => '{user} создал {relatedEntityType} {relatedEntity} относящееся к {entityType}',
      'createRelated' => '{user} создал {relatedEntityType} {relatedEntity} относящееся к {entityType} {entity}',
      'relate' => '{user} связал {relatedEntityType} {relatedEntity} с {entityType} {entity}',
      'relateThis' => '{user} связал {relatedEntityType} {relatedEntity} с этим {entityType}',
      'emailReceivedFromThis' => 'Получено эл. письмо от {from}',
      'emailReceivedInitialFromThis' => 'Получено эл. письмо от {from}, {entityType} создано',
      'emailReceivedThis' => 'Получено эл. письмо',
      'emailReceivedInitialThis' => 'Получено эл. письмо, создано {entityType}',
      'emailReceivedFrom' => 'Получено эл. письмо от {from}, относится к {entityType} {entity}',
      'emailReceivedFromInitial' => 'Получено эл. письмо от {from}, {entityType} {entity} создано',
      'emailReceived' => 'Получено эл. письмо относящееся к {entityType} {entity}',
      'emailReceivedInitial' => 'Получено эл. письмо: {entityType} {entity} создано',
      'emailReceivedInitialFrom' => 'Получено эл. письмо от {from}, {entityType} {entity} создано',
      'emailSent' => '{by} отправил эл. письмо относящееся к {entityType} {entity}',
      'emailSentThis' => '{by} отправил эл. письмо',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} оставил сообщение для {target} и для себя',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} оставила сообщение для {target} и для себя',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Январь',
        1 => 'Февраль',
        2 => 'Март',
        3 => 'Апрель',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Август',
        8 => 'Сентябрь',
        9 => 'Октябрь',
        10 => 'Ноябрь',
        11 => 'Декабрь',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Янв',
        1 => 'Февр',
        2 => 'Март',
        3 => 'Апр',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Авг',
        8 => 'Сент',
        9 => 'Окт',
        10 => 'Нояб',
        11 => 'Дек',
      ),
      'dayNames' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Вскр',
        1 => 'Пнд',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чтв',
        5 => 'Птн',
        6 => 'Сб',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Вс',
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Г-н.',
        'Mrs.' => 'Г-жа.',
        'Ms.' => 'Мисс.',
        'Dr.' => 'Д-р.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Африкаанс',
        'az_AZ' => 'Азербайджанский',
        'be_BY' => 'Белорусский',
        'bg_BG' => 'Болгарский',
        'bn_IN' => 'Бенгальский',
        'bs_BA' => 'Боснийский',
        'ca_ES' => 'Каталонский',
        'cs_CZ' => 'Чешский',
        'cy_GB' => 'Валлийский',
        'da_DK' => 'Датский',
        'de_DE' => 'Немецкий',
        'el_GR' => 'Греческий',
        'en_GB' => 'Английский (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'Английский (US)',
        'es_ES' => 'Испанский (Испания)',
        'et_EE' => 'Эстонский',
        'eu_ES' => 'Баскский',
        'fa_IR' => 'Персидский',
        'fi_FI' => 'Финский',
        'fo_FO' => 'Фарерский',
        'fr_CA' => 'Французский (Канада)',
        'fr_FR' => 'Французский (Франция)',
        'ga_IE' => 'Ирландский',
        'gl_ES' => 'Галицкий',
        'gn_PY' => 'Гуарани',
        'he_IL' => 'Иврит',
        'hi_IN' => 'Хинди',
        'hr_HR' => 'Хорватский',
        'hu_HU' => 'Венгерский',
        'hy_AM' => 'Армянский',
        'id_ID' => 'Индонезийский',
        'is_IS' => 'Исландский',
        'it_IT' => 'Итальянский',
        'ja_JP' => 'Японский',
        'ka_GE' => 'Грузинский',
        'km_KH' => 'Кхмерийский',
        'ko_KR' => 'Корейский',
        'ku_TR' => 'Курдский',
        'lt_LT' => 'Литовский',
        'lv_LV' => 'Латвийский',
        'mk_MK' => 'Македонский',
        'ml_IN' => 'Малайялам',
        'ms_MY' => 'Малайский',
        'nb_NO' => 'Норвежский букмол',
        'nn_NO' => 'Норвежский нюнорск',
        'ne_NP' => 'Непальский',
        'nl_NL' => 'Нидерландский',
        'pa_IN' => 'Панджабский',
        'pl_PL' => 'Польский',
        'ps_AF' => 'Пушту',
        'pt_BR' => 'Португальский (Бразилия)',
        'pt_PT' => 'Португальский (Португалия)',
        'ro_RO' => 'Румынский',
        'ru_RU' => 'Русский',
        'sk_SK' => 'Словацкий',
        'sl_SI' => 'Словенский',
        'sq_AL' => 'Албанский',
        'sr_RS' => 'Сербский',
        'sv_SE' => 'Шведский',
        'sw_KE' => 'Суахили',
        'ta_IN' => 'Тамильский',
        'te_IN' => 'Телугу',
        'th_TH' => 'Тайский',
        'tl_PH' => 'Тагальский',
        'tr_TR' => 'Турецкий',
        'uk_UA' => 'Украинский',
        'ur_PK' => 'Урду',
        'vi_VN' => 'Вьетнамский',
        'zh_CN' => 'Упрощенный китайский (Китай)',
        'zh_HK' => 'Традиционный китайский (Гонконг)',
        'zh_TW' => 'Традиционный китайский (Тайвань)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'На',
        'notOn' => 'Не на',
        'after' => 'После',
        'before' => 'До',
        'between' => 'Между',
        'today' => 'Сегодня',
        'past' => 'Прошлое',
        'future' => 'Будущее',
        'currentMonth' => 'Текущий месяц',
        'lastMonth' => 'Прошлый месяц',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Текущий квартал',
        'lastQuarter' => 'Прошлый квартал',
        'currentYear' => 'Текущий год',
        'lastYear' => 'Прошлый год',
        'lastSevenDays' => 'Последние 7 дней',
        'lastXDays' => 'Последние X дней',
        'nextXDays' => 'Следующие X дней',
        'ever' => 'Ever',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
      ),
      'searchRanges' => 
      array (
        'is' => 'Является',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Из группы',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Равняется',
        'like' => 'Как (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Начинается с',
        'endsWith' => 'Ends With',
        'contains' => 'Содержит',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Пусто',
        'isNotEmpty' => 'Не пусто',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Равняется',
        'notEquals' => 'Не равняется',
        'greaterThan' => 'Больше чем',
        'lessThan' => 'Меньше чем',
        'greaterThanOrEquals' => 'Больше чем или равняется',
        'lessThanOrEquals' => 'Меньше чем или равняется',
        'between' => 'Между',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Нет',
        '0.5' => '30 секунд',
        1 => '1 минута',
        2 => '2 минуты',
        5 => '5 минут',
        10 => '10 минут',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Мобильный',
        'Office' => 'Офисный',
        'Fax' => 'Факс',
        'Home' => 'Домашний',
        'Other' => 'Дополнительно',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Всплывающее окно',
        'Email' => 'Эл. письмо',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Полужирный',
          'italic' => 'Курсив',
          'underline' => 'Подчёркнутый',
          'strike' => 'Зачеркнутый',
          'clear' => 'Убрать стили шрифта',
          'height' => 'Высота линии',
          'name' => 'Название шрифта',
          'size' => 'Размер шрифта',
        ),
        'image' => 
        array (
          'image' => 'Изображение',
          'insert' => 'Вставить изображение',
          'resizeFull' => 'Восстановить размер',
          'resizeHalf' => 'Уменьшить до 50%',
          'resizeQuarter' => 'Уменьшить до 25%',
          'floatLeft' => 'Расположить слева',
          'floatRight' => 'Расположить справа',
          'floatNone' => 'Расположение по умолчанию',
          'dragImageHere' => 'Перетащите изображение сюда',
          'selectFromFiles' => 'Выбрать из файлов',
          'url' => 'URL изображения',
          'remove' => 'Удалить изображение',
        ),
        'link' => 
        array (
          'link' => 'Ссылка',
          'insert' => 'Вставить ссылку',
          'unlink' => 'Убрать ссылку',
          'edit' => 'Редактировать',
          'textToDisplay' => 'Отображаемый текст',
          'url' => 'URL для перехода',
          'openInNewWindow' => 'Открывать в новом окне',
        ),
        'video' => 
        array (
          'video' => 'Видео',
          'videoLink' => 'Ссылка на видео',
          'insert' => 'Вставить видео',
          'url' => 'URL видео',
          'providers' => '(YouTube, Vimeo, Vine, Instagram или DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Таблица',
        ),
        'hr' => 
        array (
          'insert' => 'Вставить горизонтальную линию',
        ),
        'style' => 
        array (
          'style' => 'Стиль',
          'normal' => 'Нормальный',
          'blockquote' => 'Цитата',
          'pre' => 'Код',
          'h1' => 'Заголовок 1',
          'h2' => 'Заголовок 2',
          'h3' => 'Заголовок 3',
          'h4' => 'Заголовок 4',
          'h5' => 'Заголовок 5',
          'h6' => 'Заголовок 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Маркированный список',
          'ordered' => 'Нумерованный список',
        ),
        'options' => 
        array (
          'help' => 'Помощь',
          'fullscreen' => 'На весь экран',
          'codeview' => 'Исходный код',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Параграф',
          'outdent' => 'Уменьшить отступ',
          'indent' => 'Увеличить отступ',
          'left' => 'Выровнять по левому краю',
          'center' => 'Выровнять по центру',
          'right' => 'Выровнять по правому краю',
          'justify' => 'Растянуть по ширине',
        ),
        'color' => 
        array (
          'recent' => 'Последний цвет',
          'more' => 'Еще цвета',
          'background' => 'Цвет фона',
          'foreground' => 'Цвет шрифта',
          'transparent' => 'Прозрачный',
          'setTransparent' => 'Сделать прозрачным',
          'reset' => 'Сбросить',
          'resetToDefault' => 'Восстановить умолчания',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Сочетания клавиш',
          'close' => 'Закрыть',
          'textFormatting' => 'Форматирование текста',
          'action' => 'Действие',
          'paragraphFormatting' => 'Форматирование параграфа',
          'documentStyle' => 'Стиль документа',
        ),
        'history' => 
        array (
          'undo' => 'Отмена',
          'redo' => 'Повтор',
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
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo (вертикальная)',
      'SakuraVertical' => 'Sakura (вертикальная)',
      'Violet' => 'Violet',
      'VioletVertical' => 'Violet (вертикальная)',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue w/ sidebar',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Обратить импортирование',
      'Return to Import' => 'Вернуться к импортированию',
      'Run Import' => 'Импортировать',
      'Back' => 'Назад',
      'Field Mapping' => 'Сопоставление полей',
      'Default Values' => 'Значения по умолчанию',
      'Add Field' => 'Добавить поле',
      'Created' => 'Создано',
      'Updated' => 'Обновлено',
      'Result' => 'Результат',
      'Show records' => 'Показать записи',
      'Remove Duplicates' => 'Убрать дубликаты',
      'importedCount' => 'Импортировано: (count)',
      'duplicateCount' => 'Дубликатов: (count)',
      'updatedCount' => 'Обновлено: (count)',
      'Create Only' => 'Только создать',
      'Create and Update' => 'Создать и обновить',
      'Update Only' => 'Только обновить',
      'Update by' => 'Обновить по',
      'Set as Not Duplicate' => 'Пометить как не дубликат',
      'File (CSV)' => 'Файл (CSV)',
      'First Row Value' => 'Значение из первой строки',
      'Skip' => 'Пропустить',
      'Header Row Value' => 'Значение из строки заголовка',
      'Field' => 'Поле',
      'What to Import?' => 'Что импортировать?',
      'Entity Type' => 'Тип объекта',
      'What to do?' => 'Что делать?',
      'Properties' => 'Свойства',
      'Header Row' => 'Есть строка заголовков',
      'Person Name Format' => 'Формат личных имен',
      'John Smith' => 'Имя Фамилия',
      'Smith John' => 'Фамилия Имя',
      'Smith, John' => 'Фамилия, Имя',
      'Field Delimiter' => 'Разделитель полей',
      'Date Format' => 'Формат даты',
      'Decimal Mark' => 'Десятичный разделитель',
      'Text Qualifier' => 'Спецификатор текста',
      'Time Format' => 'Формат времени',
      'Currency' => 'Валюта',
      'Preview' => 'Предпросмотр',
      'Next' => 'Далее',
      'Step 1' => 'Шаг 1',
      'Step 2' => 'Шаг 2',
      'Double Quote' => 'Двойные кавычки',
      'Single Quote' => 'Одиночные кавычки',
      'Imported' => 'Импортировано',
      'Duplicates' => 'Дубликатов',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Должен быть в кодировке UTF-8',
      'duplicatesRemoved' => 'Дубликаты убраны',
      'inIdle' => 'Execute in idle (for big data; via cron)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' => 
    array (
      'file' => 'Файл',
      'entityType' => 'Тип объекта',
      'imported' => 'Импортированные записи',
      'duplicates' => 'Дубликаты',
      'updated' => 'Обновленные записи',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Failed',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'emailAddress' => 'Адрес эл. почты',
      'team' => 'Группа',
      'status' => 'Статус',
      'assignToUser' => 'Назначить пользователю',
      'host' => 'Сервер',
      'username' => 'Имя пользователя',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые папки',
      'trashFolder' => 'Корзина',
      'ssl' => 'SSL',
      'createCase' => 'Создавать обращения',
      'reply' => 'Автоответчик',
      'caseDistribution' => 'Распределение обращений',
      'replyEmailTemplate' => 'Ответить по шаблону',
      'replyFromAddress' => 'Адрес отправителя',
      'replyToAddress' => 'Обратный адрес',
      'replyFromName' => 'Имя отправителя',
      'targetUserPosition' => 'Должность (положение в группе) пользователя',
      'fetchSince' => 'Получить эл. письма начиная с',
      'addAllTeamUsers' => 'Для всех пользователей группы',
      'teams' => 'Teams',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password',
      'fromName' => 'From Name',
      'smtpIsShared' => 'SMTP Is Shared',
      'smtpIsForMassEmail' => 'SMTP Is for Mass Email',
    ),
    'tooltips' => 
    array (
      'reply' => 'Уведомлять отправителей, что их эл. письма были получены.

 Чтобы предотвратить зацикливание только одно эл. письмо будет отправлено конкретному получателю в течение некоторого периода времени.',
      'createCase' => 'Автоматически создавать обращения из входящих эл. писем',
      'replyToAddress' => 'Укажите адрес этого ящика эл. почты, чтобы ответы приходили на него.',
      'caseDistribution' => 'Как будут назначаться обращения: непосредственно пользователю или распределяться среди группы.',
      'assignToUser' => 'Эл. письма и обращения будут назначаться этому пользователю.',
      'team' => 'Эл. письма и обращения будут относиться к этой группе.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Эл. письма бдут появляться в папке \'Входящие\' всех пользователей указанной группы.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Фильтры',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активная',
        'Inactive' => 'Неактивная',
      ),
      'caseDistribution' => 
      array (
        '' => 'Нет',
        'Direct-Assignment' => 'Прямое назначение',
        'Round-Robin' => 'По круговому циклу',
        'Least-Busy' => 'Наименее занятому',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Создать учетную запись эл. почты',
      'IMAP' => 'IMAP',
      'Actions' => 'Действия',
      'Main' => 'Основное',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не удалось соединиться с IMAP сервером',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Включено',
      'clientId' => 'Идентификатор клиента (Client ID)',
      'clientSecret' => 'Секретный ключ (Client Secret)',
      'redirectUri' => 'URI перенаправления (Redirect URI)',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Выберите интерацию из меню.',
      'noIntegrations' => 'Нет доступных интергаций.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Получите учетные данные OAuth 2.0 из консоли разработчика Google.</b></p><p>Посетите <a href="https://console.developers.google.com/project">консоль разработчика Google</a> для получения учетных данных OAuth 2.0 таких как Client ID и Client Secret.</p></p>',
      'GoogleMaps' => '<p>Obtain API key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Статус',
      'executeTime' => 'Выполнено в',
      'attempts' => 'Осталось попыток',
      'failedAttempts' => 'Неудачных попыток',
      'serviceName' => 'Сервис',
      'method' => 'Метод',
      'methodName' => 'Method',
      'scheduledJob' => 'Задание планировщика',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Данные',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'В ожидании',
        'Success' => 'Успех',
        'Running' => 'Выполняется',
        'Failed' => 'Сбой',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Ширина (%)',
      'link' => 'Ссылка',
      'notSortable' => 'Не сортируемый',
      'align' => 'Выровнять',
      'panelName' => 'Panel Name',
      'style' => 'Style',
      'sticked' => 'Sticked',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'по левому краю',
        'right' => 'по правому краю',
      ),
      'style' => 
      array (
        'default' => 'Default',
        'success' => 'Success',
        'danger' => 'Danger',
        'info' => 'Info',
        'warning' => 'Warning',
        'primary' => 'Primary',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'New panel',
      'Layout' => 'Layout',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'campaign' => 'Campaign',
      'isActive' => 'Is Active',
      'subscribeToTargetList' => 'Subscribe to Target List',
      'subscribeContactToTargetList' => 'Subscribe Contact if exists',
      'targetList' => 'Target List',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Lead Source',
      'apiKey' => 'API Key',
      'targetTeam' => 'Target Team',
      'exampleRequestMethod' => 'Method',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
    ),
    'links' => 
    array (
      'targetList' => 'Target List',
      'campaign' => 'Campaign',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Target Team',
      'logRecords' => 'Log',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => 'Create Entry Point',
      'Generate New API Key' => 'Generate New API Key',
      'Request' => 'Request',
      'Confirm Opt-In' => 'Confirm Opt-In',
    ),
    'messages' => 
    array (
      'generateApiKey' => 'Create new API Key',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => 'Markdown is supported.',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Number',
      'data' => 'Data',
      'target' => 'Target',
      'leadCapture' => 'Lead Capture',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created',
    ),
    'links' => 
    array (
      'leadCapture' => 'Lead Capture',
      'target' => 'Target',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Разместить',
      'attachments' => 'Вложения',
      'targetType' => 'Цель',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'portals' => 'Порталы',
      'type' => 'Type',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number',
    ),
    'filters' => 
    array (
      'all' => 'Все',
      'posts' => 'Сообщения',
      'updates' => 'Обновления',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'Себе',
        'users' => 'Определенному пользователю или пользователям',
        'teams' => 'Определенной группе или группам',
        'all' => 'Всем пользователям',
        'portals' => 'Всем пользователям портала',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Напишите Ваше сообщение здесь',
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
      'name' => 'Название',
      'logo' => 'Логотип',
      'url' => 'URL',
      'portalRoles' => 'Роли',
      'isActive' => 'Активный',
      'isDefault' => 'Портал по умолчанию',
      'tabList' => 'Список вкладок',
      'quickCreateList' => 'Список для быстрого создания',
      'companyLogo' => 'Логотип',
      'theme' => 'Тема',
      'language' => 'Язык',
      'dashboardLayout' => 'Планировка панели виджетов',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'defaultCurrency' => 'Валюта по умолчанию',
      'customUrl' => 'Пользовательский URL',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'portalRoles' => 'Роли',
      'notes' => 'Заметки',
      'articles' => 'Статьи базы знаний',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Указанные роли портала будут применены ко всем пользователям портала.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Создать портал',
      'User Interface' => 'Интерфейс пльзователя',
      'General' => 'Основное',
      'Settings' => 'Настройки',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Export Permission',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create PortalRole' => 'Создать роль портала',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Create Portal User',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Тысячный разделитель',
      'decimalMark' => 'Десятичный разделитель',
      'defaultCurrency' => 'Валюта по умолчанию',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Аутентификация',
      'smtpSecurity' => 'Безопасность',
      'smtpUsername' => 'Имя пользователя',
      'emailAddress' => 'Адрес эл. почты',
      'smtpPassword' => 'Пароль',
      'smtpEmailAddress' => 'Адрес эл. почты',
      'exportDelimiter' => 'Разделитель полей при экспорте',
      'receiveAssignmentEmailNotifications' => 'Получать оповещения по эл. почте при назначении',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Автоподписка',
      'signature' => 'Подпись к эл. письмам',
      'dashboardTabList' => 'Список вкладок',
      'defaultReminders' => 'Напоминания по умолчанию.',
      'theme' => 'Тема',
      'useCustomTabList' => 'Настраиваемый список вкладок',
      'tabList' => 'Список вкладок',
      'emailReplyToAllByDefault' => 'Email Reply to All by Default',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email Reply in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not fill Assigned User if not required',
      'followEntityOnStreamPost' => 'Auto-follow entity after posting in Stream',
      'followCreatedEntities' => 'Auto-follow created records',
      'followCreatedEntityTypeList' => 'Auto-follow created records of specific entity types',
      'emailUseExternalClient' => 'Use an external email client',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Оповещения',
      'User Interface' => 'Интерфейс пльзователя',
      'SMTP' => 'SMTP',
      'Misc' => 'Разное',
      'Locale' => 'Локаль',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Пользователь будет автоматически подисан на все новые записи о выбранных типах объектов, будет видеть эту информацию в ленте и получать оповещения.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'roles' => 'Роли',
      'assignmentPermission' => 'Assignment Permission',
      'userPermission' => 'User Permission',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'teams' => 'Группы',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Позволяет ограничить возможность назначать задания и отправлять сообщения другим пользователям.

все - без ограничений

группа - могут назначать задания и отправлять сообщения только членам своей группы

нет - могут назначать задания и отправлять сообщения только себе',
      'userPermission' => 'Позволяет ограничить возможности пользователей просматривать деятельность, календарь и ленту других пользователей.

все - могут просматривать

группа - могут просматривать деятельность только членов своей группы

нет - не могут просматривать',
      'portalPermission' => 'Определяет доступ к информации портала, способность конвертировать контакты в пользователей портала и отправлять сообщения пользователям портала.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create Role' => 'Создать роль',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'не установлено',
        'enabled' => 'включено',
        'disabled' => 'отключено',
      ),
      'levelList' => 
      array (
        'all' => 'все',
        'team' => 'группа',
        'account' => 'контрагент',
        'contact' => 'контакт',
        'own' => 'владелец',
        'no' => 'нет',
        'yes' => 'да',
        'not-set' => 'не установлено',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Чтение',
      'edit' => 'Редактирование',
      'delete' => 'Удаление',
      'stream' => 'Лента',
      'create' => 'Создать',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Все изменения применятся только после очистки кэша.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'job' => 'Задание',
      'scheduling' => 'Планирование',
    ),
    'links' => 
    array (
      'log' => 'Лог',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Создать задание',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Очистка',
        'CheckInboundEmails' => 'Проверка входящей эл. почты групп',
        'CheckEmailAccounts' => 'Проверка входящей эл. почты пользователей',
        'SendEmailReminders' => 'Отправка напоминаний по эл. почте',
        'AuthTokenControl' => 'Контроль за токенами аутентификации',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Отправка массовых рассылок эл. писем',
        'ControlKnowledgeBaseArticleStatus' => 'Контроль статуса статей базы знаний',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Заметка: Добавьте эту строку в crontab для запуска планировщика заданий Espo:',
        'mac' => 'Заметка: Добавьте эту строку в crontab для запуска планировщика заданий Espo:',
        'windows' => 'Заметка: Создайте пакетный файл со следующими командами для запуска планировщика заданий Espo используя планировщик заданий Windows:',
        'default' => 'Заметка: Добавьте эту команду в Cron (Планировщик заданий):',
      ),
      'status' => 
      array (
        'Active' => 'Активно',
        'Inactive' => 'Неактивно',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Определяет периодичность выполнения задания.

*/5 * * * * - каждые 5 минут

0 */2 * * * - каждые 2 часа

30 1 * * * - каждый день один раз в 01:30

0 0 1 * * - каждый первый день месяца',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Статус',
      'executionTime' => 'Время запуска',
      'target' => 'Цель',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Использовать кэш',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Тысячный разделитель',
      'decimalMark' => 'Десятичный разделитель',
      'defaultCurrency' => 'Валюта по умолчанию',
      'baseCurrency' => 'Базовая валюта',
      'currencyRates' => 'Курсы обмена',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'companyLogo' => 'Логотип компании',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Security',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Адрес эл. почты',
      'smtpPassword' => 'Password',
      'outboundEmailFromName' => 'Имя отправителя',
      'outboundEmailFromAddress' => 'Адрес отправителя',
      'outboundEmailIsShared' => 'Может использоваться всеми пользователями',
      'recordsPerPage' => 'Записей на страницу',
      'recordsPerPageSmall' => 'Записей на страницу (сжатый вид)',
      'tabList' => 'Список вкладок',
      'quickCreateList' => 'Список для быстрого создания',
      'exportDelimiter' => 'Разделитель полей при экспорте',
      'globalSearchEntityList' => 'Список объектов глобального поиска',
      'authenticationMethod' => 'Метод аутентификации',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Username',
      'ldapPassword' => 'Password',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Create User in EspoCRM',
      'ldapSecurity' => 'Security',
      'ldapUserLoginFilter' => 'User Login Filter',
      'ldapAccountDomainNameShort' => 'Account Domain Name Short',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Username Attribute',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'User Title Attribute',
      'ldapUserFirstNameAttribute' => 'User First Name Attribute',
      'ldapUserLastNameAttribute' => 'User Last Name Attribute',
      'ldapUserEmailAddressAttribute' => 'User Email Address Attribute',
      'ldapUserTeams' => 'User Teams',
      'ldapUserDefaultTeam' => 'User Default Team',
      'ldapUserPhoneNumberAttribute' => 'User Phone Number Attribute',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Отключение возможности экпортирования (будет доступно только администратору)',
      'assignmentNotificationsEntityList' => 'Объекты для оповещения при назначении',
      'assignmentEmailNotifications' => 'Оповещать по эл. почте при назначении',
      'assignmentEmailNotificationsEntityList' => 'Объекты для оповещения по эл. почте при назначении',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'Режим B2C',
      'avatarsDisabled' => 'Отключить использование аватар',
      'followCreatedEntities' => 'Подписываться на создаваемые объекты',
      'displayListViewRecordCount' => 'Показывать общее количество (при отображении в виде списка)',
      'theme' => 'Тема',
      'userThemesDisabled' => 'Отключить использование пользовательских тем',
      'emailMessageMaxSize' => 'Максимальный размер эл. письма (в Мб)',
      'massEmailMaxPerHourCount' => 'Максимальное число отсылаемых в час эл. писем',
      'personalEmailMaxPortionSize' => 'Max email portion size for a personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for a group account fetching',
      'maxEmailAccountCount' => 'Максимальное число персональных учетных записей эл. почты для пользователя',
      'authTokenLifetime' => 'Время жизни токена аутентификации (в часах)',
      'authTokenMaxIdleTime' => 'Максимальный срок простоя токена аутентификации (в часах)',
      'dashboardLayout' => 'Планировка панели виджетов (по умолчанию)',
      'siteUrl' => 'URL сайта',
      'addressPreview' => 'Просмотр формата адреса',
      'addressFormat' => 'Формат Адреса',
      'notificationSoundsDisabled' => 'Отключить звуковые напоминания',
      'applicationName' => 'Название приложения',
      'calendarEntityList' => 'Список объектов календаря',
      'mentionEmailNotifications' => 'Send email notifications about mentions in posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'activitiesEntityList' => 'Список объектов действий',
      'historyEntityList' => 'History Entity List',
      'currencyFormat' => 'Currency Format',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'ACL Strict Mode',
      'aclAllowDeleteCreated' => 'Allow to remove created records',
      'adminNotifications' => 'System notifications in administration panel',
      'adminNotificationsNewVersion' => 'Show notification when new EspoCRM version is available',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Use \'contains\' operator when filtering varchar fields',
      'authTokenPreventConcurrent' => 'Only one auth token per user',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
      'tabIconsDisabled' => 'Disable tab icons',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Clean up deleted records',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Posts',
        'Status' => 'Status updates',
        'EmailReceived' => 'Received emails',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Число изначально отображаемых записей в виде списка',
      'recordsPerPageSmall' => 'Число записей в связанных панелях.',
      'outboundEmailIsShared' => 'Разрешить пользователям отправлять эл. письма через этот SMTP.',
      'followCreatedEntities' => 'Пользователи будут автоматически подписаны на создаваемые ими записи.',
      'emailMessageMaxSize' => 'Все входящие эл. письма, размер которых превышает заданный, будут пропущены.',
      'authTokenLifetime' => 'Определяет сколько времени могут существовать токены.
0 - без ограничений.',
      'authTokenMaxIdleTime' => 'Определяет как долго с момента последнего подключения могут существовать токены.
0 - без ограничений.',
      'userThemesDisabled' => 'Если отмечено, то пользователи не смогут выбрать другую тему.',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'The password to access to LDAP server.',
      'ldapAuth' => 'Access credentials for the LDAP server.',
      'ldapUserNameAttribute' => 'The attribute to identify the user. 
E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass attribute for searching users. E.g. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:<br>- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'The option to format the username in the DN form.',
      'ldapBaseDn' => 'The default base DN used for searching users. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'The option to split a username with the domain.',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'This option allows EspoCRM to create a user from the LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP attribute which is used to determine the user first name. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Команды для созданного пользователя. Подробнее см. в профиле пользователя.',
      'ldapUserDefaultTeam' => 'Команда по умолчанию для созданного пользователя. Подробнее см. в профиле пользователя.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'By default EspoCRM is adapted for B2B. You can switch it to B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Users will be able to remove records they created even if they don\'t have a delete access.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
    ),
    'labels' => 
    array (
      'System' => 'Система',
      'Locale' => 'Локаль',
      'SMTP' => 'SMTP',
      'Configuration' => 'Конфигурация',
      'In-app Notifications' => 'Оповещения в приложении',
      'Email Notifications' => 'Оповещения по эл. почте',
      'Currency Settings' => 'Настройки валют',
      'Currency Rates' => 'Курсы обмена валют',
      'Mass Email' => 'Массовая рассылка эл. писем',
      'Test Connection' => 'Test Connection',
      'Connecting' => 'Connecting...',
      'Activities' => 'Действия',
      'Admin Notifications' => 'Admin Notifications',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'The connection successfully established.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'roles' => 'Роли',
      'positionList' => 'Список должностей',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'notes' => 'Заметки',
      'roles' => 'Роли',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Роли доступа. Пользователи этой группы получают права доступа исходя из выбранных ролей.',
      'positionList' => 'Имеющиеся в этой группе должности. Например продавец, менеджер.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Создать группу',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'body' => 'Тело',
      'entityType' => 'Тип объекта',
      'header' => 'Шапка',
      'footer' => 'Подвал',
      'leftMargin' => 'Левый отступ',
      'topMargin' => 'Верхний отступ',
      'rightMargin' => 'Правый отступ',
      'bottomMargin' => 'Нижний отступ',
      'printFooter' => 'Отображать подвал',
      'footerPosition' => 'Положение подвала',
      'variables' => 'Available Placeholders',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Создать шаблон',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Portrait',
        'Landscape' => 'Landscape',
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
      'footer' => 'Используйте {pageNumber} для отображения номера страницы.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'userName' => 'Имя пользователя',
      'title' => 'Должность',
      'isAdmin' => 'Права администратора',
      'defaultTeam' => 'Группа по умолчанию',
      'emailAddress' => 'Эл. почта',
      'phoneNumber' => 'Телефон',
      'roles' => 'Роли',
      'portals' => 'Порталы',
      'portalRoles' => 'Роли порталов',
      'teamRole' => 'Должность (положение в группе)',
      'password' => 'Пароль',
      'currentPassword' => 'Текущий пароль',
      'passwordConfirm' => 'Подтвердить пароль',
      'newPassword' => 'Новый пароль',
      'newPasswordConfirm' => 'Подтвердить новый пароль',
      'avatar' => 'Аватар',
      'isActive' => 'Активен',
      'isPortalUser' => 'Пользователь портала',
      'contact' => 'Контакты',
      'accounts' => 'Контрагенты',
      'account' => 'Контрагент',
      'sendAccessInfo' => 'Отправить пользователю эл. письмо с реквизитами доступа',
      'portal' => 'Портал',
      'gender' => 'Пол',
      'position' => 'Position in Team',
      'ipAddress' => 'IP Address',
      'passwordPreview' => 'Password Preview',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Last Access',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'teams' => 'Группы',
      'roles' => 'Роли',
      'notes' => 'Заметки',
      'portals' => 'Порталы',
      'portalRoles' => 'Роли порталов',
      'contact' => 'Контакт',
      'accounts' => 'Контрагенты',
      'account' => 'Учетная запись (Основная)',
      'tasks' => 'Tasks',
      'targetLists' => 'Списки целей',
    ),
    'labels' => 
    array (
      'Create User' => 'Создать пользователя',
      'Generate' => 'Сгенерировать',
      'Access' => 'Доступ',
      'Preferences' => 'Настройки',
      'Change Password' => 'Изменить пароль',
      'Teams and Access Control' => 'Группы и уровень доступа',
      'Forgot Password?' => 'Забыли пароль?',
      'Password Change Request' => 'Запрос смены пароля',
      'Email Address' => 'Адрес эл. почты',
      'External Accounts' => 'Внешние учетные записи',
      'Email Accounts' => 'Учетные записи эл. почты',
      'Portal' => 'Портал',
      'Create Portal User' => 'Создать пользователя портала',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Все записи, созданные этим пользователем, по умолчанию будут относиться к этой группе.',
      'userName' => 'Допускаются латинские буквы a-z, цифры 0-9, точки, дефисы, символы @ и подчеркивания.',
      'isAdmin' => 'Пользователь с правами администратора может получить доступ ко всему.',
      'isActive' => 'Если флажок не установлен, то пользователь не сможет войти в систему.',
      'teams' => 'Группы к которым принадлежит данный пользователь. Уровень доступа наследуется от ролей группы.',
      'roles' => 'Дополнительные роли доступа. Используйте это если пользователь не принадлежит ни к одной группе или вам необходимо расширить уровень доступа только для этого пользователя.',
      'portalRoles' => 'Дополнительные роли портала. Используйте это если необходимо расширить уровень доступа только для этого пользователя.',
      'portals' => 'Порталы к которым имеет доступ этот пользователь.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Пароль будет выслан на адрес эл. почты пользователя.',
      'accountInfoEmailSubject' => 'Информация об учетной записи EspoCRM',
      'accountInfoEmailBody' => 'Информация о Вашей учетной записи:

Имя пользователя: {userName}
Пароль: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Запрос смены пароля',
      'passwordChangeLinkEmailBody' => 'You can change your password by following this link {link}. This unique URL will be expired soon.',
      'passwordChanged' => 'Пароль был изменен',
      'userCantBeEmpty' => 'Имя пользователя не может быть пустым',
      'wrongUsernamePasword' => 'Неверное имя пользователя/пароль',
      'emailAddressCantBeEmpty' => 'Адрес эл. почты не может быть пустым',
      'userNameEmailAddressNotFound' => 'Имя пользователя/Адрес эл. почты не найдены',
      'forbidden' => 'Запрещено, повторите попытку позже',
      'uniqueLinkHasBeenSent' => 'Уникальная ссылка была отправлена на указанный адрес эл. почты.',
      'passwordChangedByRequest' => 'Пароль был изменен.',
      'setupSmtpBefore' => 'Вы должны настроить <a href="{url}">SMTP settings</a> чтобы система имела возможность отправлять пароль по электронной почте.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Не установлен',
        'Male' => 'Мужской',
        'Female' => 'Женский',
        'Neutral' => 'Нейтральный',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Только моя группа',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активные',
      'activePortal' => 'Активный портал',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'website' => 'Сайт',
      'phoneNumber' => 'Телефон',
      'billingAddress' => 'Платежный адрес',
      'shippingAddress' => 'Почтовый адрес',
      'description' => 'Описание',
      'sicCode' => 'SIC код',
      'industry' => 'Вид деятельности',
      'type' => 'Тип',
      'contactRole' => 'Должность',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'documents' => 'Документы',
      'meetingsPrimary' => 'Встречи (развернуто)',
      'callsPrimary' => 'Звонки (развернуто)',
      'tasksPrimary' => 'Задачи (развернуто)',
      'emailsPrimary' => 'Письма (развернуто)',
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'portalUsers' => 'Пользователи портала',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Заказчик',
        'Investor' => 'Вкладчик',
        'Partner' => 'Партнер',
        'Reseller' => 'Посредник',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotive',
        'Banking' => 'Banking',
        'Biotechnology' => 'Biotechnology',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Chemical',
        'Construction' => 'Construction',
        'Computer' => 'Computer',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Education',
        'Electronics' => 'Electronics',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Insurance',
        'Legal' => 'Legal',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publishing',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Real Estate',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Support',
        'Sports' => 'Sports',
        'Software' => 'Software',
        'Technology' => 'Technology',
        'Telecommunications' => 'Telecommunications',
        'Television' => 'Television',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Transportation',
        'Travel' => 'Travel',
        'Venture Capital' => 'Venture Capital',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Создать контрагента',
      'Copy Billing' => 'Копировать адрес',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Заказчики',
      'partners' => 'Партнеры',
      'recentlyCreated' => 'Недавно созданный',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Месяц',
      'week' => 'Неделя',
      'day' => 'День',
      'agendaWeek' => 'Неделя',
      'agendaDay' => 'День',
      'timeline' => 'Расписание',
    ),
    'labels' => 
    array (
      'Today' => 'Сегодня',
      'Create' => 'Создать',
      'Shared' => 'Общий',
      'Add User' => 'Добавить пользователя',
      'current' => 'текущий',
      'time' => 'время',
      'User List' => 'Список пользователей',
      'Manage Users' => 'Управлять пользователями',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'direction' => 'Категория',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'reminders' => 'Напоминания',
      'account' => 'Контрагент',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Запланирован',
        'Held' => 'Состоялся',
        'Not Held' => 'Не состоялся',
      ),
      'direction' => 
      array (
        'Outbound' => 'Исходящий',
        'Inbound' => 'Входящий',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
        'Accepted' => 'Согласен',
        'Declined' => 'Не согласен',
        'Tentative' => 'Есть сомнения',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Состоялось',
      'setNotHeld' => 'Не состоялось',
    ),
    'labels' => 
    array (
      'Create Call' => 'Создать звонок',
      'Set Held' => 'Состоялось',
      'Set Not Held' => 'Не состоялось',
      'Send Invitations' => 'Отправить приглашения',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'description' => 'Описание',
      'status' => 'Статус',
      'type' => 'Тип',
      'startDate' => 'Дата начала',
      'endDate' => 'Дата окончания',
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'sentCount' => 'Отправлено',
      'openedCount' => 'Открыто',
      'clickedCount' => 'Проследовало по ссылке',
      'optedOutCount' => 'Отписалось',
      'bouncedCount' => 'Возвратов писем',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Жестких возвратов',
      'softBouncedCount' => 'Мягких возвратов',
      'leadCreatedCount' => 'Кандидатов создано',
      'revenue' => 'Доход',
      'revenueConverted' => 'Доход (сконвертированный)',
      'budget' => 'Бюджет',
      'budgetConverted' => 'Бюджет (сконвертированный)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'accounts' => 'Контрагенты',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'opportunities' => 'Сделки',
      'campaignLogRecords' => 'Журнал',
      'massEmails' => 'Массовые рассылки эл. писем',
      'trackingUrls' => 'Целевые URL-адреса',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Эл. письмо',
        'Web' => 'Интернет',
        'Television' => 'Телевидение',
        'Radio' => 'Радио',
        'Newsletter' => 'Информационный бюллетень',
        'Mail' => 'Письмо',
      ),
      'status' => 
      array (
        'Planning' => 'Запланирована',
        'Active' => 'Активна',
        'Inactive' => 'Не активна',
        'Complete' => 'Завершена',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Создать кампанию',
      'Target Lists' => 'Списки целей',
      'Statistics' => 'Статистика',
      'hard' => 'жесткий',
      'soft' => 'мягкий',
      'Unsubscribe' => 'Отписаться',
      'Mass Emails' => 'Массовые рассылки эл. писем',
      'Email Templates' => 'Шаблоны эл. писем',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активна',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Вы были удалены из нашего списка рассылки.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Цели которые должны получить сообщения.',
      'excludingTargetLists' => 'Цели которые не должны получить сообщения.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Действие',
      'actionDate' => 'Дата',
      'data' => 'Данные',
      'campaign' => 'Кампания',
      'parent' => 'Цель',
      'object' => 'Объект',
      'application' => 'Приложение',
      'queueItem' => 'Queue Item',
      'stringData' => 'Строка данных',
      'stringAdditionalData' => 'Строка дополнительных данных',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Queue Item',
      'parent' => 'Источник',
      'object' => 'Объект',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Отправлено',
        'Opened' => 'Открыто',
        'Opted Out' => 'Отписалось',
        'Bounced' => 'Возвратов писем',
        'Clicked' => 'Проследовало по ссылке',
        'Lead Created' => 'Кандидатов создано',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Все',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Отправлено',
      'opened' => 'Открыто',
      'optedOut' => 'Отписалось',
      'optedIn' => 'Opted In',
      'bounced' => 'Возвратов писем',
      'clicked' => 'Проследовало по ссылке',
      'leadCreated' => 'Кандидатов создано',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'Целевой URL-адрес',
      'urlToUse' => 'Код для подстановки вместо целевого URL-адреса',
      'campaign' => 'Кампания',
    ),
    'links' => 
    array (
      'campaign' => 'Кампания',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Создать целевой URL-адрес',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'number' => 'Номер',
      'status' => 'Статус',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
      'contacts' => 'Контакты',
      'priority' => 'Приоритет',
      'type' => 'Тип',
      'description' => 'Описание',
      'inboundEmail' => 'Входящая эл. почта',
      'lead' => 'Лид',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Входящая эл. почта',
      'account' => 'Контрагент',
      'contact' => 'Контакт (основной)',
      'Contacts' => 'Контакты',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Эл. письма',
      'articles' => 'Статьи базы знаний',
      'lead' => 'Лид',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новое',
        'Assigned' => 'Назначено',
        'Pending' => 'В ожидании',
        'Closed' => 'Закрыто',
        'Rejected' => 'Отклонено',
        'Duplicate' => 'Дубликат',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Обычный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
      'type' => 
      array (
        'Question' => 'Вопрос',
        'Incident' => 'Происшествие',
        'Problem' => 'Проблема',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Создать обращение',
      'Close' => 'Закрыть',
      'Reject' => 'Отклонить',
      'Closed' => 'Закрыто',
      'Rejected' => 'Отклонено',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открытые',
      'closed' => 'Закрытые',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'title' => 'Должность',
      'account' => 'Контрагент',
      'accounts' => 'Контрагенты',
      'phoneNumber' => 'Телефон',
      'accountType' => 'Тип контрагента',
      'doNotCall' => 'Не звонить',
      'address' => 'Адрес',
      'opportunityRole' => 'Роль в сделке',
      'accountRole' => 'Должность',
      'description' => 'Описание',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'portalUser' => 'Пользователь портала',
      'originalLead' => 'Original Lead',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => 'Cделки',
      'cases' => 'Обращения',
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'account' => 'Контрагент (основной)',
      'accounts' => 'Контрагенты',
      'casesPrimary' => 'Обращения (основной)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Пользователь портала',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Создать контакт',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => 'Нет',
        'Decision Maker' => 'Принимающий решение',
        'Evaluator' => 'Оценщик',
        'Influencer' => 'Консультант',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Пользователи порталов',
      'notPortalUsers' => 'Не пользователи порталов',
      'accountActive' => 'Active',
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
      'Create Document' => 'Создать документ',
      'Details' => 'Описание',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'file' => 'Файл',
      'type' => 'Тип',
      'publishDate' => 'Опубликован',
      'expirationDate' => 'Актуален до',
      'description' => 'Описание',
      'accounts' => 'Контрагенты',
      'folder' => 'Папка',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенты',
      'opportunities' => 'Сделки',
      'folder' => 'Папка',
      'leads' => 'Лиды',
      'contacts' => 'Contacts',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Действующий',
        'Draft' => 'Черновик',
        'Expired' => 'Просрочен',
        'Canceled' => 'Отменен',
      ),
      'type' => 
      array (
        '' => 'Нет',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'License Agreement',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Действующий',
      'draft' => 'Черновик',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Создать папку',
      'Manage Categories' => 'Управление папками',
      'Documents' => 'Документы',
    ),
    'links' => 
    array (
      'documents' => 'Документы',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'target' => 'Цель',
      'sentAt' => 'Дата отправки',
      'attemptCount' => 'Попыток',
      'emailAddress' => 'Адрес эл. почты',
      'massEmail' => 'Массовая рассылка эл. писем',
      'isTest' => 'Тест',
    ),
    'links' => 
    array (
      'target' => 'Цель',
      'massEmail' => 'Массовая рассылка эл. писем',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'В ожидании',
        'Sent' => 'Отправлено',
        'Failed' => 'Сбой',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'В ожидании',
      'sent' => 'Отправлено',
      'failed' => 'Сбой',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Создать статью',
      'Any' => 'Любой',
      'Send in Email' => 'Отправить на имейл',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom',
    ),
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'type' => 'Тип',
      'attachments' => 'Вложения',
      'publishDate' => 'Опубликована',
      'expirationDate' => 'Актуальна до',
      'description' => 'Описание',
      'body' => 'Тело',
      'categories' => 'Категории',
      'language' => 'Язык',
      'portals' => 'Порталы',
    ),
    'links' => 
    array (
      'cases' => 'Обращения',
      'opportunities' => 'Сделки',
      'categories' => 'Категории',
      'portals' => 'Порталы',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'На рассмотрении',
        'Draft' => 'Черновик',
        'Archived' => 'В архиве',
        'Published' => 'Опубликована',
      ),
      'type' => 
      array (
        'Article' => 'Статья',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Опубликована',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Создать категорию',
      'Manage Categories' => 'Управление категориями',
      'Articles' => 'Статьи',
    ),
    'links' => 
    array (
      'articles' => 'Статьи',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Конвертирован в',
      'Create Lead' => 'Создать кандидата',
      'Convert' => 'Конвертировать',
      'convert' => 'конвертация',
    ),
    'fields' => 
    array (
      'name' => 'Имя',
      'emailAddress' => 'Адрес эл. почты',
      'title' => 'Должность',
      'website' => 'Сайт',
      'phoneNumber' => 'Телефон',
      'accountName' => 'Контрагент',
      'doNotCall' => 'Не звонить',
      'address' => 'Адрес',
      'status' => 'Статус',
      'source' => 'Источник',
      'opportunityAmount' => 'Сумма сделки',
      'opportunityAmountConverted' => 'Сумма сделки (сконвертированная)',
      'description' => 'Описание',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
      'campaign' => 'Кампания',
      'targetLists' => 'Списки целей',
      'targetList' => 'Список целей',
      'industry' => 'Вид деятельности',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Списки целей',
      'campaignLogRecords' => 'Журнал кампании',
      'campaign' => 'Кампания',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
      'cases' => 'Сделки',
      'documents' => 'Документы',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новый',
        'Assigned' => 'Назначен',
        'In Process' => 'В процессе',
        'Converted' => 'Конвертирован',
        'Recycled' => 'Удален',
        'Dead' => 'Мертв',
      ),
      'source' => 
      array (
        '' => 'Нет',
        'Call' => 'Звонок',
        'Email' => 'Эл. письмо',
        'Existing Customer' => 'Существующий клиент',
        'Partner' => 'Партнер',
        'Public Relations' => 'Связи с общественностью',
        'Web Site' => 'Сайт',
        'Campaign' => 'Кампания',
        'Other' => 'Другое',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активный',
      'actual' => 'Актуальный',
      'converted' => 'Конвертированны',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'status' => 'Статус',
      'storeSentEmails' => 'Сохранять отправленные эл. письма',
      'startAt' => 'Дата начала',
      'fromAddress' => 'Адрес отправителя',
      'fromName' => 'Имя отправителя',
      'replyToAddress' => 'Обратный адрес',
      'replyToName' => 'Имя для обратного адреса',
      'campaign' => 'Кампания',
      'emailTemplate' => 'Шаблон эл. письма',
      'inboundEmail' => 'Учетная запись эл. почты',
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'optOutEntirely' => 'Отписать навсегда',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Списки целей',
      'excludingTargetLists' => 'Исключая списки целей',
      'queueItems' => 'Queue Items',
      'campaign' => 'Кампания',
      'emailTemplate' => 'Шаблон эл. письма',
      'inboundEmail' => 'Учетная запись эл. почты',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Черновик',
        'Pending' => 'В ожидании',
        'In Process' => 'В процессе',
        'Complete' => 'Завершена',
        'Canceled' => 'Отменена',
        'Failed' => 'Сбой',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Создать массовую рассылку эл. писем',
      'Send Test' => 'Отправить тестовое эл. письмо',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Выберите хотя бы одну цель',
      'testSent' => 'Должно отправиться тестовое эл. письмо',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Адреса эл. почты получателей, которые отписались будут помечены как отписавшиеся и больше не будут получать массовые рассылки эл. писем.',
      'targetLists' => 'Цели которые должны получить сообщения.',
      'excludingTargetLists' => 'Цели которые не должны получить сообщения.',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальные',
      'complete' => 'Завершенные',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'reminders' => 'Напоминания',
      'account' => 'Контрагент',
      'acceptanceStatus' => 'Acceptance Status',
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
        'Planned' => 'Запланирована',
        'Held' => 'Состоялась',
        'Not Held' => 'Не состоялась',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
        'Accepted' => 'Согласен',
        'Declined' => 'Не согласен',
        'Tentative' => 'Есть сомнения',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Состоялось',
      'setNotHeld' => 'Не состоялось',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Создать встречу',
      'Set Held' => 'Состоялось',
      'Set Not Held' => 'Не состоялось',
      'Send Invitations' => 'Отправить приглашения',
      'on time' => 'во время',
      'before' => 'до начала',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nothing were sent',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'account' => 'Контрагент',
      'stage' => 'Стадия',
      'amount' => 'Сумма',
      'probability' => 'Вероятность успеха, %',
      'leadSource' => 'Источник кандидата',
      'doNotCall' => 'Не звонить',
      'closeDate' => 'Дата закрытия',
      'contacts' => 'Контакты',
      'description' => 'Описание',
      'amountConverted' => 'Сумма (сконвертированная)',
      'amountWeightedConverted' => 'Сумма (средневзвешенная)',
      'campaign' => 'Кампания',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'documents' => 'Документы',
      'campaign' => 'Кампания',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Привлечение клиента',
        'Qualification' => 'Оценка возможности',
        'Proposal' => 'Предложение',
        'Negotiation' => 'Согласование',
        'Needs Analysis' => 'Требует анализа',
        'Value Proposition' => 'Выбор предложения/оферты',
        'Id. Decision Makers' => 'Определение ответственного лица',
        'Perception Analysis' => 'Проведение анализа',
        'Proposal/Price Quote' => 'Отправлено предложение/оферта',
        'Negotiation/Review' => 'Согласование/рассмотрение',
        'Closed Won' => 'Закрыто - Успех',
        'Closed Lost' => 'Закрыто - Провал',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Создать сделку',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открыть',
      'won' => 'Успешные',
      'lost' => 'Провальные',
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
      'name' => 'Название',
      'description' => 'Описание',
      'entryCount' => 'Количество',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Кампании',
      'endDate' => 'Дата окончания',
      'targetLists' => 'Списки целей',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенты',
      'contacts' => 'Контакты',
      'leads' => 'Кандидаты',
      'campaigns' => 'Кампании',
      'massEmails' => 'Массовые рассылки эл. писем',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Эл. письмо',
        'Web' => 'Интернет',
        'Television' => 'Телевидение',
        'Radio' => 'Радио',
        'Newsletter' => 'Информационный бюллетень',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Создать список целей',
      'Opted Out' => 'Отписавшиеся',
      'Cancel Opt-Out' => 'Отменить отписку',
      'Opt-Out' => 'Отписать',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Название',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'dateStartDate' => 'Дата начала (весь день)',
      'dateEndDate' => 'Дата окончания (весь день)',
      'priority' => 'Приоритет',
      'description' => 'Описание',
      'isOverdue' => 'Просрочена',
      'account' => 'Контрагент',
      'dateCompleted' => 'Дата завершения',
      'attachments' => 'Вложения',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Вложения',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Не началась',
        'Started' => 'Началась',
        'Completed' => 'Завершена',
        'Canceled' => 'Отменена',
        'Deferred' => 'Отложена',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Обычный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Создать задачу',
      'Complete' => 'Завершить',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуальные',
      'completed' => 'Завершенные',
      'deferred' => 'Отложенные',
      'todays' => 'На сегодня',
      'overdue' => 'Просроченные',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => 'Адрес',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
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
      'Create Formularios' => 'Создать Formulario',
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
);
?>