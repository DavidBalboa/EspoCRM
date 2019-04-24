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
      'Enabled' => 'Povoleno',
      'Disabled' => 'Zakázáno',
      'System' => 'Systém',
      'Users' => 'Uživatelé',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Přizpůsobení',
      'Available Fields' => 'Dostupná pole',
      'Layout' => 'Layout',
      'Entity Manager' => 'Správa entit',
      'Add Panel' => 'Přidat panel',
      'Add Field' => 'Přidat pole',
      'Settings' => 'Nastavení',
      'Scheduled Jobs' => 'Naplánované akce',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Vyčistit cache',
      'Rebuild' => 'Přestavět',
      'Teams' => 'Týmy',
      'Roles' => 'Role',
      'Portal' => 'Portal',
      'Portals' => 'Portals',
      'Portal Roles' => 'Portal Roles',
      'Portal Users' => 'Portal Users',
      'Outbound Emails' => 'Odchozí emaily',
      'Group Email Accounts' => 'Group Email Accounts',
      'Personal Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'Příchozí emaily',
      'Email Templates' => 'Šablony emailů',
      'Import' => 'Import',
      'Layout Manager' => 'Správa layoutu',
      'User Interface' => 'Uživatelské rozhraní',
      'Auth Tokens' => 'Autentizační tokeny',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autentizace',
      'Currency' => 'Měna',
      'Integrations' => 'Integrace',
      'Extensions' => 'Rozšíření',
      'Upload' => 'Nahrát',
      'Installing...' => 'Instaluji...',
      'Upgrading...' => 'Upgraduji...',
      'Upgraded successfully' => 'Úspěšně upgradováno',
      'Installed successfully' => 'Úspěšně nainstalováno',
      'Ready for upgrade' => 'Připraveno k upgradu',
      'Run Upgrade' => 'Spustit upgrade',
      'Install' => 'Instalovat',
      'Ready for installation' => 'Připraveno k instalaci',
      'Uninstalling...' => 'Odebírám...',
      'Uninstalled' => 'Odebráno',
      'Create Entity' => 'Vytvořit entitu',
      'Edit Entity' => 'Upravit entitu',
      'Create Link' => 'Vytvořit link',
      'Edit Link' => 'Upravit link',
      'Notifications' => 'Upozornění',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Reset to Default',
      'Email Filters' => 'Email Filters',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Seznam',
      'detail' => 'Detail',
      'listSmall' => 'Seznam (malý)',
      'detailSmall' => 'Detail (malý)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Vyhledávací filtry',
      'massUpdate' => 'Hromadný update',
      'relationships' => 'Vztah',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Konvertovat stopu',
      'listForAccount' => 'Seznam (pro organizace)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresa',
      'array' => 'Pole',
      'foreign' => 'Zahraniční',
      'duration' => 'Trvání',
      'password' => 'Heslo',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Boolean',
      'currency' => 'Měna',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Datum',
      'datetime' => 'DateTime',
      'datetimeOptional' => 'Datum/DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Vícenásobný link',
      'linkParent' => 'Rodičovský link',
      'phone' => 'Telefon',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Soubor',
      'image' => 'Obrázenk',
      'multiEnum' => 'Vícenásobný Enum',
      'attachmentMultiple' => 'Attachment Multiple',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Map',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'parsonName' => 'Jméno',
      'multienim' => 'Multienum',
    ),
    'fields' => 
    array (
      'type' => 'Typ',
      'name' => 'Jméno',
      'label' => 'Popisek',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Povinné',
      'default' => 'Výchozí',
      'maxLength' => 'Maximální délka',
      'options' => 'Možnosti',
      'after' => 'Po (pole)',
      'before' => 'Před (pole)',
      'link' => 'Link',
      'field' => 'Pole',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Překlad',
      'previewSize' => 'Velikost náhledu',
      'noEmptyString' => 'Neprázdný řetězec',
      'defaultType' => 'Výchozí typ',
      'seeMoreDisabled' => 'Zakázat ořez textu',
      'entityList' => 'Entity List',
      'isSorted' => 'Is Sorted (alphabetically)',
      'audited' => 'Audited',
      'trim' => 'Trim',
      'height' => 'Height (px)',
      'minHeight' => 'Min Height (px)',
      'provider' => 'Provider',
      'typeList' => 'Type List',
      'rows' => 'Number of rows of textarea',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Source List',
      'prefix' => 'Prefix',
      'nextNumber' => 'Next Number',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Disable Formatting',
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
      'upgradeVersion' => 'EspoCRM bude upgradováno na verzi <strong>{version}</strong>. Toto může chvíli trvat.',
      'upgradeDone' => 'EspoCRM bylo upgradováno na verzi <strong>{version}</strong>.',
      'upgradeBackup' => 'Doporučujeme zálohovat soubory a data EspoCRM před upgradem.',
      'thousandSeparatorEqualsDecimalMark' => 'Oddělovač tisíců nemůže být stejný jako desetinný symbol.',
      'userHasNoEmailAddress' => 'Uživatel nemá emailovou adresu.',
      'selectEntityType' => 'Vybrat entitu v levém menu.',
      'selectUpgradePackage' => 'Vybrat upgrade balíček',
      'downloadUpgradePackage' => 'Stáhnout upgradovací balíčky na <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/">tomto odkaze</a>.',
      'selectLayout' => 'Vybrat požadovaný layout v levém menu a upravit ho.',
      'selectExtensionPackage' => 'Vybrat rozšiřující balíček',
      'extensionInstalled' => 'Rozšíření {name} {version} bylo nainstalováno.',
      'installExtension' => 'Rozšíření {name} {version} je připraveno k instalaci.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Opravdu odinstalovat vybrané rozšíření?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systémová nastavení aplikace.',
      'scheduledJob' => 'Činnosti vykonávané CRONem.',
      'upgrade' => 'Upgradovat EspoCRM.',
      'clearCache' => 'Vyčistit veškerou cache.',
      'rebuild' => 'Přestavě backend a vyčistit cache.',
      'users' => 'Správa uživatelů.',
      'teams' => 'Správa týmů.',
      'roles' => 'Správa rolí.',
      'portals' => 'Portals management.',
      'portalRoles' => 'Roles for portal.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Nastavení SMTP pro odchozí emaily.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Users email accounts.',
      'emailTemplates' => 'Šablony pro odchozí emaily.',
      'import' => 'Importovat data z CSV souboru.',
      'layoutManager' => 'Přizpůsobit layouty (seznam, detail, upravit, hledat, hromadný update).',
      'entityManager' => 'Vytvořit vlastní entity, úpravit existující. Správa polí a vztahů.',
      'userInterface' => 'Nastavit uživatelské rozhraní.',
      'authTokens' => 'Aktivní autentizační sessions. IP adresa a datum posledního přístupu.',
      'authentication' => 'Nastavení autentizace.',
      'currency' => 'Nastavení měn a kurzů.',
      'extensions' => 'Instalovat a odebrat rozšíření.',
      'integrations' => 'Integrace se službami třetích stran.',
      'notifications' => 'Nastavení In-app a emailových upozornění.',
      'inboundEmails' => 'Skupinové IMAP účty. Email import a Email-to-Case.',
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
        'x-small' => 'Extra-malý',
        'small' => 'Malý',
        'medium' => 'Střední',
        'large' => 'Velký',
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
      'Document' => 'Insert Document',
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
      'user' => 'Uživatel',
      'ipAddress' => 'IP adresa',
      'lastAccess' => 'Datum posledního přístupu',
      'createdAt' => 'Datum přihlášení',
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
      'title' => 'Titulek',
      'dateFrom' => 'Datum od',
      'dateTo' => 'Datum do',
      'autorefreshInterval' => 'Interval automatického obnovení',
      'displayRecords' => 'Zobrazit záznamů',
      'isDoubleHeight' => 'Výška 2x',
      'mode' => 'Mód',
      'enabledScopeList' => 'What to display',
      'users' => 'Users',
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
        'agendaWeek' => 'Týden (agenda)',
        'basicWeek' => 'Týden',
        'month' => 'Měsíc',
        'basicDay' => 'Day',
        'agendaDay' => 'Day (agenda)',
        'timeline' => 'Timeline',
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
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Jméno',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateSent' => 'Datum odeslání',
      'from' => 'Od',
      'to' => 'Komu',
      'cc' => 'Kopie',
      'bcc' => 'Skrytá kopie',
      'replyTo' => 'Reply To',
      'replyToString' => 'Reply To (String)',
      'isHtml' => 'Je HTML',
      'body' => 'Tělo',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Předmět',
      'attachments' => 'Přílohy',
      'selectTemplate' => 'Vybrat šablonu',
      'fromEmailAddress' => 'Adresa od',
      'toEmailAddresses' => 'Adresa komu',
      'emailAddress' => 'Emailová adresa',
      'deliveryDate' => 'Datum doručení',
      'account' => 'Účet',
      'users' => 'Uživatelé',
      'replied' => 'Replied',
      'replies' => 'Replies',
      'isRead' => 'Is Read',
      'isNotRead' => 'Is Not Read',
      'isImportant' => 'Is Important',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Is User\'s',
      'inTrash' => 'In Trash',
      'sentBy' => 'Sent By',
      'folder' => 'Folder',
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
        'Draft' => 'Draft',
        'Sending' => 'Sending',
        'Sent' => 'Sent',
        'Archived' => 'Archived',
        'Received' => 'Received',
        'Failed' => 'Failed',
      ),
      'Draft' => 'Draft',
      'Sending' => 'Posílání',
      'Sent' => 'Posláno',
      'Archived' => 'Archivováno',
      'Received' => 'Obdrženo',
    ),
    'labels' => 
    array (
      'Create Email' => 'Vytvořit email',
      'Archive Email' => 'Archivovat email',
      'Compose' => 'Složit',
      'Reply' => 'Odpovědět',
      'Reply to All' => 'Odpovědět všem',
      'Forward' => 'Přeposlat',
      'Original message' => 'Původní zpráva',
      'Forwarded message' => 'Přeposlaná zpráva',
      'Email Accounts' => 'Emailové účty',
      'Inbound Emails' => 'Group Email Accounts',
      'Email Templates' => 'Email Templates',
      'Send Test Email' => 'Poslat testovací email',
      'Send' => 'Poslat',
      'Email Address' => 'Emailová adresa',
      'Mark Read' => 'Označit jako přečtěné',
      'Sending...' => 'Posílání...',
      'Save Draft' => 'Uložit draft',
      'Mark all as read' => 'Označit vše jako přečtené',
      'Show Plain Text' => 'Zobrazit Plain Text',
      'Mark as Important' => 'Mark as Important',
      'Unmark Importance' => 'Unmark Importance',
      'Move to Trash' => 'Move to Trash',
      'Retrieve from Trash' => 'Retrieve from Trash',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'Create Lead' => 'Vytvořit stopu',
      'Create Contact' => 'Vytvořit kontakt',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Vytvořit úkol',
      'Create Case' => 'Vytvořit událost',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Chybí SMTP nastavení. {link}.',
      'testEmailSent' => 'Testovací email byl poslán',
      'emailSent' => 'Email byl odeslán',
      'savedAsDraft' => 'Uloženo jako draft',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Odesláné',
      'archived' => 'Archivované',
      'inbox' => 'Doručené',
      'drafts' => 'Drafty',
      'trash' => 'Trash',
      'important' => 'Important',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Označit jako přečtené',
      'markAsNotRead' => 'Mark as Not Read',
      'markAsImportant' => 'Mark as Important',
      'markAsNotImportant' => 'Unmark Importance',
      'moveToTrash' => 'Move to Trash',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Jméno',
      'status' => 'Status',
      'host' => 'Server',
      'username' => 'Uživatelské jméno',
      'password' => 'Heslo',
      'port' => 'Port',
      'monitoredFolders' => 'Synchronizované složky',
      'ssl' => 'SSL',
      'fetchSince' => 'Nastaveno od',
      'emailAddress' => 'Emailová adresa',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
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
      'filters' => 'Filters',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivní',
        'Inactive' => 'Neaktivní',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Vytvořit emailový účet',
      'IMAP' => 'IMAP',
      'Main' => 'Hlavní',
      'Test Connection' => 'Test spojení',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nemohu se připojit k IMAP serveru',
      'connectionIsOk' => 'Spojení je OK',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Můžete přidat složku \'Odeslané\' k synchronizaci externím emailovým klientem.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primární',
      'Opted Out' => 'Odhlášené',
      'Invalid' => 'Neplatné',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'From',
      'to' => 'To',
      'subject' => 'Subject',
      'bodyContains' => 'Body Contains',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Create Email Filter',
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
      'name' => 'Give the filter a descriptive name.',
      'subject' => 'Use a wildcard *:

text* - starts with text,
*text* - contains text,
*text - ends with text.',
      'bodyContains' => 'Body of the email contains any of the specified words or phrases.',
      'from' => 'Emails being sent from the specified address. Leave empty if not needed. You can use wildcard *.',
      'to' => 'Emails being sent to the specified address. Leave empty if not needed. You can use wildcard *.',
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
      'Manage Folders' => 'Manage Folders',
      'Emails' => 'Emails',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Jméno',
      'status' => 'Status',
      'isHtml' => 'Je HTML',
      'body' => 'Tělo',
      'subject' => 'Předmět',
      'attachments' => 'Přílohy',
      'insertField' => '',
      'oneOff' => 'One-off',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Vytvořit šablonu',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubsbribe link;

{optOutLink} &#8211; an unsubscribe link.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
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
      'Fields' => 'Pole',
      'Relationships' => 'Vztahy',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Jméno',
      'type' => 'Typ',
      'labelSingular' => 'Popisek jednotného čísla',
      'labelPlural' => 'Popisek množného čísla',
      'stream' => 'Stream',
      'label' => 'Popisek',
      'linkType' => 'Typ linku',
      'entityForeign' => 'Cizí entita',
      'linkForeign' => 'Cizí link',
      'link' => 'Link',
      'labelForeign' => 'Cizí popisek',
      'sortBy' => 'Výchozí řazení (pole)',
      'sortDirection' => 'Výchozí řazení (směr)',
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
        '' => '',
        'Base' => 'Báze',
        'Person' => 'Osoba',
        'CategoryTree' => 'Strom kategorií',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'N-N',
        'oneToMany' => '1-N',
        'manyToOne' => 'N-1',
        'parentToChildren' => 'Rodič-Potomek',
        'childrenToParent' => 'Potomek-Rodič',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Vzestupně',
        'desc' => 'Sestupně',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entita byla vytvořena',
      'linkAlreadyExists' => 'Konflikt: link již existuje.',
      'linkConflict' => 'Name conflict: link or field with the same name already exists.',
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
      'name' => 'Jméno',
      'version' => 'Verze',
      'description' => 'Popis',
      'isInstalled' => 'Instalováno',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Odebrat',
      'Install' => 'Nainstalovat',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Rozšíření {name} bylo odebráno',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Připojit',
      'Connected' => 'Připojeno',
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
      'Email' => 'Email',
      'User' => 'Uživatel',
      'Team' => 'Tým',
      'Role' => 'Role',
      'EmailTemplate' => 'Emailová šablona',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Emailový účet',
      'EmailAccountScope' => 'Emailový účet',
      'OutboundEmail' => 'Odchozí email',
      'ScheduledJob' => 'Naplánovaná činnost',
      'ExternalAccount' => 'Externí účet',
      'Extension' => 'Rozšíření',
      'Dashboard' => 'Nástěnka',
      'InboundEmail' => 'Účet příchozích emailů',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Template',
      'Job' => 'Job',
      'EmailFilter' => 'Email Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Role',
      'Attachment' => 'Attachment',
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
      'Account' => 'Organizace',
      'Contact' => 'Kontakt',
      'Lead' => 'Stopa',
      'Target' => 'Cíl',
      'Opportunity' => 'Případ',
      'Meeting' => 'Schůzka',
      'Calendar' => 'Kalendář',
      'Call' => 'Volání',
      'Task' => 'Úkol',
      'Case' => 'Událost',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Složka dokumentů',
      'Campaign' => 'Kampaň',
      'TargetList' => 'Cílový seznam',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base Article',
      'KnowledgeBaseCategory' => 'Knowledge Base Category',
      'CampaignLogRecord' => 'Campaign Log Record',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Emaily',
      'User' => 'Uživatelé',
      'Team' => 'Týmy',
      'Role' => 'Role',
      'EmailTemplate' => 'Emailové šablony',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Emailové účty',
      'EmailAccountScope' => 'Emailové účty',
      'OutboundEmail' => 'Odchozí emaily',
      'ScheduledJob' => 'Naplánované činnosti',
      'ExternalAccount' => 'Externí účty',
      'Extension' => 'Rozšíření',
      'Dashboard' => 'Nástěnka',
      'InboundEmail' => 'Účty příchozích emailů',
      'Stream' => 'Stream',
      'Import' => 'Výsledky importu',
      'Template' => 'Templates',
      'Job' => 'Jobs',
      'EmailFilter' => 'Email Filters',
      'Portal' => 'Portals',
      'PortalRole' => 'Portal Roles',
      'Attachment' => 'Attachments',
      'EmailFolder' => 'Email Folders',
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
      'Account' => 'Organizace',
      'Contact' => 'Kontakty',
      'Lead' => 'Stopy',
      'Target' => 'Cíle',
      'Opportunity' => 'Případy',
      'Meeting' => 'Schůzky',
      'Calendar' => 'Kalendáře',
      'Call' => 'Volání',
      'Task' => 'Úkoly',
      'Case' => 'Události',
      'Document' => 'Dokumenty',
      'DocumentFolder' => 'Složky dokumentů',
      'Campaign' => 'Kampaně',
      'TargetList' => 'Cílové seznamy',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base',
      'KnowledgeBaseCategory' => 'Knowledge Base Categories',
      'CampaignLogRecord' => 'Campaign Log Records',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' => 
    array (
      'Misc' => 'Různé',
      'Merge' => 'Sloučit',
      'None' => '-',
      'Home' => 'Home',
      'by' => 'dle',
      'Saved' => 'Uloženo',
      'Error' => 'Chyba',
      'Select' => 'Vybrat',
      'Not valid' => 'Neplatné',
      'Please wait...' => 'Prosím počkejte...',
      'Please wait' => 'Prosím počkejte',
      'Loading...' => 'Nahrávání...',
      'Uploading...' => 'Uploaduje se...',
      'Sending...' => 'Posíláse...',
      'Merging...' => 'Slučuje se...',
      'Merged' => 'Sloučeno',
      'Removed' => 'Odstraněno',
      'Posted' => 'Zasláno',
      'Linked' => 'Nalinkováno',
      'Unlinked' => 'Odlinkováno',
      'Done' => 'Hovoto',
      'Access denied' => 'Přístup odepřen',
      'Not found' => 'Not found',
      'Access' => 'Přístup',
      'Are you sure?' => 'Jste si jisti?',
      'Record has been removed' => 'Záznam byl odstraněn',
      'Wrong username/password' => 'Neplatné přihlašovací jméno/heslo',
      'Post cannot be empty' => 'Příspěvek nemůže být prázdný',
      'Removing...' => 'Odstraňování...',
      'Unlinking...' => 'Odlinkování...',
      'Posting...' => 'Zasílání...',
      'Username can not be empty!' => 'Přihlašovací jméno nemůže být prázdné!',
      'Cache is not enabled' => 'Cache není povolena',
      'Cache has been cleared' => 'Cache byla vyčištěna',
      'Rebuild has been done' => 'Přestavba byla dokončena',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Ukládání...',
      'Modified' => 'Modifikováno',
      'Created' => 'Vytvořeno',
      'Create' => 'Vytvořit',
      'create' => 'vytvořit',
      'Overview' => 'Přehled',
      'Details' => 'Detaily',
      'Add Field' => 'Přidat pole',
      'Add Dashlet' => 'Přidat panel',
      'Filter' => 'Filtr',
      'Edit Dashboard' => 'Upravit nástěnku',
      'Add' => 'Přidat',
      'Add Item' => 'Add Item',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Více',
      'Search' => 'Hledat',
      'Only My' => 'Pouze moje',
      'Open' => 'Otevřený',
      'Admin' => 'Admin',
      'About' => 'O EspoCRM',
      'Refresh' => 'Obnovit',
      'Remove' => 'Odebrat',
      'Options' => 'Možnosti',
      'Username' => 'Uživatelské jméno',
      'Password' => 'heslo',
      'Login' => 'Přihlásit',
      'Log Out' => 'Odhlásit',
      'Preferences' => 'Předvolby',
      'State' => 'Kraj',
      'Street' => 'Ulice',
      'Country' => 'Země',
      'City' => 'Město',
      'PostalCode' => 'PSČ',
      'Followed' => 'Sledováno',
      'Follow' => 'Sledovat',
      'Followers' => 'Sledující',
      'Clear Local Cache' => 'Vyčistit lokální cache',
      'Actions' => 'Akce',
      'Delete' => 'Smazat',
      'Update' => 'Aktualizovat',
      'Save' => 'Uložit',
      'Edit' => 'Upravit',
      'View' => 'Zobrazit',
      'Cancel' => 'Zrušit',
      'Apply' => 'Použít',
      'Unlink' => 'Odlinkovat',
      'Mass Update' => 'Hromadný update',
      'Export' => 'Export',
      'No Data' => 'Žádná data',
      'No Access' => 'Nepřístupno',
      'All' => 'Vše',
      'Active' => 'Aktivní',
      'Inactive' => 'Neaktivní',
      'Write your comment here' => 'Napište Vás komentář',
      'Post' => 'Poslat',
      'Stream' => 'Stream',
      'Show more' => 'Ukázat více',
      'Dashlet Options' => 'Možnosti panelu',
      'Full Form' => 'Plný formulář',
      'Insert' => 'Vlořiz',
      'Person' => 'Osoba',
      'First Name' => 'Křestní jméno',
      'Last Name' => 'Příjmení',
      'Original' => 'Originál',
      'You' => 'Vy',
      'you' => 'vy',
      'change' => 'změna',
      'Change' => 'Změna',
      'Primary' => 'Primární',
      'Save Filter' => 'Uložit filtr',
      'Administration' => 'Administrace',
      'Run Import' => 'Spustit import',
      'Duplicate' => 'Duplikovat',
      'Notifications' => 'Upozornění',
      'Mark all read' => 'Označit jako přečtené',
      'See more' => 'Zobrazit více',
      'Today' => 'Dnes',
      'Tomorrow' => 'Zítra',
      'Yesterday' => 'Včera',
      'Submit' => 'Vložit',
      'Close' => 'Zavřít',
      'Yes' => 'Ano',
      'No' => 'Ne',
      'Select All Results' => 'Vybrat celý výsledek',
      'Value' => 'Hodnota',
      'Current version' => 'Současná verze',
      'List View' => 'Seznamový pohled',
      'Tree View' => 'Stromový pohled',
      'Unlink All' => 'Odlinkovat vše',
      'Total' => 'Celkem',
      'Print to PDF' => 'Print to PDF',
      'Default' => 'Default',
      'Number' => 'Number',
      'From' => 'From',
      'To' => 'To',
      'Create Post' => 'Create Post',
      'Previous Entry' => 'Previous Entry',
      'Next Entry' => 'Next Entry',
      'View List' => 'View List',
      'Attach File' => 'Attach File',
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
      'Create InboundEmail' => 'Vytvořit příchodí email',
      'Activities' => 'Aktivity',
      'History' => 'Historie',
      'Attendees' => 'Účastníci',
      'Schedule Meeting' => 'Plánovaná schůzka',
      'Schedule Call' => 'Plánované volání',
      'Compose Email' => 'Sestavit email',
      'Log Meeting' => 'Zapsat schůzku',
      'Log Call' => 'Zapsat volání',
      'Archive Email' => 'Archivovat email',
      'Create Task' => 'Vytvořit úkol',
      'Tasks' => 'Úkoly',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Prosím počkejte...',
      'posting' => 'Posting...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Opravdu chcete opustit formulář?',
      'notModified' => 'Záznam nebyl upraven',
      'duplicate' => 'Vytvářený záznam je duplicitní',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} je povinné',
      'fieldShouldBeEmail' => '{field} má být platný email',
      'fieldShouldBeFloat' => '{field} má být platný float',
      'fieldShouldBeInt' => '{field} má být platný integer',
      'fieldShouldBeDate' => '{field} má být platné datum',
      'fieldShouldBeDatetime' => '{field} má být platné date/time',
      'fieldShouldAfter' => '{field} má být po {otherField}',
      'fieldShouldBefore' => '{field} má být před {otherField}',
      'fieldShouldBeBetween' => '{field} má být mezi {min} a {max}',
      'fieldShouldBeLess' => '{field} má být menší než {value}',
      'fieldShouldBeGreater' => '{field} má být většá než {value}',
      'fieldBadPasswordConfirm' => '{field} není správně potvrzeno',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Předvolby byly resetovány na výchozí.',
      'confirmation' => 'Opravdu to chcete?',
      'unlinkAllConfirmation' => 'Opravdu chcete odlinkovat všechny související záznamy?',
      'resetPreferencesConfirmation' => 'Opravdu chcete resetovat předvolby na výchozí?',
      'removeRecordConfirmation' => 'Opravdu chcete smazat záznam?',
      'unlinkRecordConfirmation' => 'Opravdu chcete odlinkovat všechny související záznamy?',
      'removeSelectedRecordsConfirmation' => 'Opravdu chcete odebrat vybrané záznamy?',
      'massUpdateResult' => '{count} záznamů bylo upraveno',
      'massUpdateResultSingle' => '{count} záznam byl upraven',
      'noRecordsUpdated' => 'Žádné záznamy nebyly upraveny',
      'massRemoveResult' => '{count} záznamů bylo odstraněno',
      'massRemoveResultSingle' => '{count} záznam byl odstraněn',
      'noRecordsRemoved' => 'Žádné záznamy nebyly odstraněny',
      'clickToRefresh' => 'Kliknout pro obnovení',
      'streamPostInfo' => 'Napište <strong>@username</strong> pro zmínění uživatelů v příspěvku.

Dostupná syntaxe:
`<code>code</code>`
**<strong>tučný text</strong>**
*<em>kurzíva</em>*
~<del>smazaný text</del>~
> citace
[text](url)',
      'writeYourCommentHere' => 'Write your comment here',
      'writeMessageToUser' => 'Write a message to {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Type & press enter',
      'checkForNewNotifications' => 'Check for new notifications',
      'checkForNewNotes' => 'Check for stream updates',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Done',
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
      'onlyMy' => 'Pouze moje',
      'followed' => 'Sledované',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Sledované',
      'all' => 'All',
    ),
    'massActions' => 
    array (
      'remove' => 'Odstranit',
      'merge' => 'Sloučit',
      'massUpdate' => 'Hromadně upravit',
      'export' => 'Export',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Název',
      'firstName' => 'Křestní jméno',
      'lastName' => 'Příjmení',
      'salutationName' => 'Oslovení',
      'assignedUser' => 'Přiřazený uživatel',
      'assignedUsers' => 'Assigned Users',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Přiřazená uživatelská jména',
      'teams' => 'Týmy',
      'createdAt' => 'Vytvořeno',
      'modifiedAt' => 'Upraveno',
      'createdBy' => 'Vytvořil',
      'modifiedBy' => 'Upravil',
      'description' => 'Popis',
      'address' => 'Adresa',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (Mobil)',
      'phoneNumberHome' => 'Telefon (Domácí)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Kancelář)',
      'phoneNumberOther' => 'Telefon (Další)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Pořadí',
      'parent' => 'Rodič',
      'children' => 'Potomek',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Město',
      'billingAddressCountry' => 'Země',
      'billingAddressPostalCode' => 'PSČ',
      'billingAddressState' => 'Kraj',
      'billingAddressStreet' => 'Ulice',
      'billingAddressMap' => 'Map',
      'addressCity' => 'Město',
      'addressStreet' => 'Ulice',
      'addressCountry' => 'Země',
      'addressState' => 'Kraj',
      'addressPostalCode' => 'PSČ',
      'addressMap' => 'Map',
      'shippingAddressCity' => 'Město (doručovací)',
      'shippingAddressStreet' => 'Ulice (doručovací)',
      'shippingAddressCountry' => 'Země (doručovací)',
      'shippingAddressState' => 'Kraj (doručovací)',
      'shippingAddressPostalCode' => 'PSČ (doručovací)',
      'shippingAddressMap' => 'Map (Shipping)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Přiřazený uživatel',
      'createdBy' => 'Vytvořil',
      'modifiedBy' => 'Upravil',
      'team' => 'Tým',
      'roles' => 'Role',
      'teams' => 'Týmy',
      'users' => 'Uživatelé',
      'parent' => 'Rodič',
      'children' => 'Potomek',
      'contacts' => 'Kontakty',
      'opportunities' => 'Případy',
      'leads' => 'Stopy',
      'meetings' => 'Schůzky',
      'calls' => 'Volání',
      'tasks' => 'Úkoly',
      'emails' => 'Emaily',
      'accounts' => 'Organizace',
      'cases' => 'Události',
      'documents' => 'Dokumenty',
      'account' => 'Organizace',
      'opportunity' => 'Případ',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Emails' => 'My Inbox',
      'Records' => 'Record List',
      'Leads' => 'Moje stopy',
      'Opportunities' => 'Moje případy',
      'Tasks' => 'Moje úkoly',
      'Cases' => 'Moje události',
      'Calendar' => 'Kalendář',
      'Calls' => 'Moje volání',
      'Meetings' => 'Moje schůzky',
      'OpportunitiesByStage' => 'Případy podle stavu',
      'OpportunitiesByLeadSource' => 'Případy podle zdroje',
      'SalesByMonth' => 'Prodeje za měsíc',
      'SalesPipeline' => 'Prodejní pipeline',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} Ti byla přiřazena.',
      'emailReceived' => 'Email přijat od {from}',
      'entityRemoved' => '{user} removed {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} poslal {entityType} {entity}',
      'attach' => '{user} připojený {entityType} {entity}',
      'status' => '{user} upravil {field} k {entityType} {entity}',
      'update' => '{user} upravil {entityType} {entity}',
      'postTargetTeam' => '{user} posted to team {target}',
      'postTargetTeams' => '{user} posted to teams {target}',
      'postTargetPortal' => '{user} posted to portal {target}',
      'postTargetPortals' => '{user} posted to portals {target}',
      'postTarget' => '{user} posted to {target}',
      'postTargetYou' => '{user} posted to you',
      'postTargetYouAndOthers' => '{user} posted to {target} and you',
      'postTargetAll' => '{user} posted to all',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} zmínil {mentioned} v {entityType} {entity}',
      'mentionYouInPost' => '{user} mentioned you in {entityType} {entity}',
      'mentionInPostTarget' => '{user} mentioned {mentioned} in post',
      'mentionYouInPostTarget' => '{user} mentioned you in post to {target}',
      'mentionYouInPostTargetAll' => '{user} mentioned you in post to all',
      'mentionYouInPostTargetNoTarget' => '{user} mentioned you in post',
      'create' => '{user} vytvořil {entityType} {entity}',
      'createThis' => '{user} vytvořil {entityType}',
      'createAssignedThis' => '{user} vytvořil {entityType} přiřazené {assignee}',
      'createAssigned' => '{user} vytvořil {entityType} {entity} přiřazené {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} přiřadil {entityType} {entity} {assignee}',
      'assignThis' => '{user} přiřadil {entityType} {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} poslal',
      'attachThis' => '{user} připojil',
      'statusThis' => '{user} upravil {field}',
      'updateThis' => '{user} upravil {entityType}',
      'createRelatedThis' => '{user} vytvořil {relatedEntityType} {relatedEntity} související s {entityType}',
      'createRelated' => '{user} vytvořil {relatedEntityType} {relatedEntity} související s {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => 'Email přijat od {from}',
      'emailReceivedInitialFromThis' => 'Tento email byl přijat od {from}, vytvořen {entityType}',
      'emailReceivedThis' => 'Email přijat',
      'emailReceivedInitialThis' => 'Email přijat, vytvořen {entityType}',
      'emailReceivedFrom' => 'Email přijat od {from}, související s {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email přijat od {from}, vytvořeno {entityType} {entity}',
      'emailReceived' => 'Email přijat, související s {entityType} {entity}',
      'emailReceivedInitial' => 'Email přijat: {entityType} {entity} vytvořeno',
      'emailReceivedInitialFrom' => 'Email přijak od {from}, vytvořeno {entityType} {entity}',
      'emailSent' => '{by} poslal email související s {entityType} {entity}',
      'emailSentThis' => '{by} poslal email',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} posted to {target} and himself',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} posted to {target} and herself',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Leden',
        1 => 'Únor',
        2 => 'Březen',
        3 => 'Duben',
        4 => 'Květen',
        5 => 'Červen',
        6 => 'červenec',
        7 => 'Srpen',
        8 => 'Září',
        9 => 'Říjen',
        10 => 'Listopad',
        11 => 'Prosinec',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Led',
        1 => 'Úno',
        2 => 'Bře',
        3 => 'Dub',
        4 => 'Kvě',
        5 => 'Črv',
        6 => 'Črc',
        7 => 'Srp',
        8 => 'Zář',
        9 => 'Říj',
        10 => 'Lis',
        11 => 'Pro',
      ),
      'dayNames' => 
      array (
        0 => 'Neděle',
        1 => 'Pondělí',
        2 => 'Úterý',
        3 => 'Středa',
        4 => 'Čtvrtek',
        5 => 'Pátek',
        6 => 'Sobota',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Ned',
        1 => 'Pon',
        2 => 'Úte',
        3 => 'Stř',
        4 => 'Čtv',
        5 => 'Pát',
        6 => 'Sob',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Ne',
        1 => 'Po',
        2 => 'Út',
        3 => 'St',
        4 => 'Čt',
        5 => 'Pá',
        6 => 'So',
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
        'Mr.' => 'Pan',
        'Mrs.' => 'Paní',
        'Ms.' => 'Slečna',
        'Dr.' => 'Doktor(ka)',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Dne',
        'notOn' => 'Jiného dne než',
        'after' => 'Po',
        'before' => 'Před',
        'between' => 'Mezi',
        'today' => 'Dnes',
        'past' => 'Minulé',
        'future' => 'Budoucí',
        'currentMonth' => 'Tento měsíc',
        'lastMonth' => 'Minulý měsíc',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Toto kvartál',
        'lastQuarter' => 'Minulý kvartál',
        'currentYear' => 'Tento rok',
        'lastYear' => 'Minulý rok',
        'lastSevenDays' => 'Last 7 Days',
        'lastXDays' => 'Last X Days',
        'nextXDays' => 'Next X Days',
        'ever' => 'Ever',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
      ),
      'searchRanges' => 
      array (
        'is' => 'Je',
        'isEmpty' => 'Je prázdné',
        'isNotEmpty' => 'Není prázdné',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Is From Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Rovná se',
        'like' => 'Is Like (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Začíná',
        'endsWith' => 'Ends With',
        'contains' => 'Obsahuje',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Rovná se',
        'notEquals' => 'Nerovná se',
        'greaterThan' => 'Větší než',
        'lessThan' => 'Menší než',
        'greaterThanOrEquals' => 'Větší než nebo se rovná',
        'lessThanOrEquals' => 'Menší než nebo se rovná',
        'between' => 'Mezi',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Není',
        '0.5' => '30 sekund',
        1 => '1 minuta',
        2 => '2 minuty',
        5 => '5 minuty',
        10 => '10 minut',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobilní',
        'Office' => 'Kancelář',
        'Fax' => 'Fax',
        'Home' => 'Domácí',
        'Other' => 'Další',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Vyskakovací',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Tučné',
          'italic' => 'Kurzíva',
          'underline' => 'Podtržené',
          'strike' => 'Přeškrtnuté',
          'clear' => 'Odebrat styl písma',
          'height' => 'Velikost řádku',
          'name' => 'Rodina písma',
          'size' => 'Velikost písma',
        ),
        'image' => 
        array (
          'image' => 'Obrázek',
          'insert' => 'Vložit obrázek',
          'resizeFull' => 'Změna velikost 1/1',
          'resizeHalf' => 'Změna velikosti 1/2',
          'resizeQuarter' => 'Změna velikosti 1/4',
          'floatLeft' => 'Plavat vlevo',
          'floatRight' => 'Plavat vpravo',
          'floatNone' => 'Neplavat',
          'dragImageHere' => 'Přesunout obrázek sem.',
          'selectFromFiles' => 'Vybrat ze souboru',
          'url' => 'URL obrázku',
          'remove' => 'Odebrat obrázek',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Vložit link',
          'unlink' => 'Odebrat link',
          'edit' => 'Upravit',
          'textToDisplay' => 'Text k zobrazení',
          'url' => 'Na jaké URL má link směřovat?',
          'openInNewWindow' => 'Otevřít v novém okně',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video link',
          'insert' => 'Vložit video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, nebo DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabulka',
        ),
        'hr' => 
        array (
          'insert' => 'Vložit horizontální čáru',
        ),
        'style' => 
        array (
          'style' => 'Styl',
          'normal' => 'Normální',
          'blockquote' => 'Citace',
          'pre' => 'Kód',
          'h1' => 'Nadpis 1',
          'h2' => 'Nadpis 2',
          'h3' => 'Nadpis 3',
          'h4' => 'Nadpis 4',
          'h5' => 'Nadpis 5',
          'h6' => 'Nadpis 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Neřazený seznam',
          'ordered' => 'Řazený seznam',
        ),
        'options' => 
        array (
          'help' => 'Nápověda',
          'fullscreen' => 'Celá obrazovka',
          'codeview' => 'Zobrazit kód',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Odstavec',
          'outdent' => 'Předsadit',
          'indent' => 'Odsadit',
          'left' => 'Zarovnat vlevo',
          'center' => 'Zarovnat na střed',
          'right' => 'Zarovnat vpravo',
          'justify' => 'Zarovnat do bloku',
        ),
        'color' => 
        array (
          'recent' => 'Nedávná baarva',
          'more' => 'Víc barev',
          'background' => 'Barva pozadí',
          'foreground' => 'Barva písma',
          'transparent' => 'Průhlednost',
          'setTransparent' => 'Nastavení průhlednosti',
          'reset' => 'Resetovat',
          'resetToDefault' => 'Resetovat na výchozí',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Klávesové zkratky',
          'close' => 'Zavřít',
          'textFormatting' => 'Formát textu',
          'action' => 'Akce',
          'paragraphFormatting' => 'Formát odstavce',
          'documentStyle' => 'Styl dokumentu',
        ),
        'history' => 
        array (
          'undo' => 'Zpět',
          'redo' => 'Znovu',
        ),
        'UPOZORNĚNÍ' => 'Překlady lze najít zde: https://github.com/HackerWins/summernote/tree/master/lang',
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'List',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Classic Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Classic Sakura',
      'EspoVertical' => 'Vertical Espo',
      'SakuraVertical' => 'Vertical Sakura',
      'Violet' => 'Classic Violet',
      'VioletVertical' => 'Vertical Violet',
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Vertical Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Reverzní import',
      'Return to Import' => 'Návrat do importu',
      'Run Import' => 'Spustit import',
      'Back' => 'Zpět',
      'Field Mapping' => 'Mapování polí',
      'Default Values' => 'Výchozí hodnoty',
      'Add Field' => 'Přidat pole',
      'Created' => 'Vytvořeno',
      'Updated' => 'Aktualizováno',
      'Result' => 'Výsledek',
      'Show records' => 'Zobrazit záznamy',
      'Remove Duplicates' => 'Odebrat duplicity',
      'importedCount' => 'Naimportováno (počet)',
      'duplicateCount' => 'Duplicity (počet)',
      'updatedCount' => 'Aktualizováno (počet)',
      'Create Only' => 'Create Only',
      'Create and Update' => 'Create & Update',
      'Update Only' => 'Update Only',
      'Update by' => 'Update by',
      'Set as Not Duplicate' => 'Set as Not Duplicate',
      'File (CSV)' => 'File (CSV)',
      'First Row Value' => 'First Row Value',
      'Skip' => 'Skip',
      'Header Row Value' => 'Header Row Value',
      'Field' => 'Field',
      'What to Import?' => 'What to Import?',
      'Entity Type' => 'Entity Type',
      'What to do?' => 'What to do?',
      'Properties' => 'Properties',
      'Header Row' => 'Header Row',
      'Person Name Format' => 'Person Name Format',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Field Delimiter',
      'Date Format' => 'Date Format',
      'Decimal Mark' => 'Decimal Mark',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Time Format',
      'Currency' => 'Currency',
      'Preview' => 'Preview',
      'Next' => 'Next',
      'Step 1' => 'Step 1',
      'Step 2' => 'Step 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Imported',
      'Duplicates' => 'Duplicates',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Mělo by být v UTF-8 kódování',
      'duplicatesRemoved' => 'Duplicity odstraněny',
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
      'file' => 'Soubor',
      'entityType' => 'Typ entity',
      'imported' => 'Naimportované záznamy',
      'duplicates' => 'Duplicitní záznamy',
      'updated' => 'Aktualizované záznamy',
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
      'name' => 'Jméno',
      'emailAddress' => 'Email Address',
      'team' => 'Tým',
      'status' => 'Status',
      'assignToUser' => 'Přiřadit k uživateli',
      'host' => 'Server',
      'username' => 'Uživatelské jméno',
      'password' => 'Heslo',
      'port' => 'Port',
      'monitoredFolders' => 'Synchronizované složky',
      'trashFolder' => 'Koš',
      'ssl' => 'SSL',
      'createCase' => 'Vytvořit událost',
      'reply' => 'Auto-odpověď',
      'caseDistribution' => 'Distribuce událostí',
      'replyEmailTemplate' => 'Odpověď: Šablona',
      'replyFromAddress' => 'Odpověď: Od',
      'replyToAddress' => 'Odpověď: Komu',
      'replyFromName' => 'Odpověď: Jméno',
      'targetUserPosition' => 'Pozice cílového uživatele',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'For all team users',
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
      'reply' => 'Upozornit odesílatele emailů, že jejich emaily byly přijaty.

 Pro potlačení zacyklení, pouze jeden email za časové období bude poslán každému příjemci.',
      'createCase' => 'Automaticky vytvořit událost z příchozích emailů.',
      'replyToAddress' => 'Specifikovat emailovou adresu této schánky, aby sem chodily odpovědi.',
      'caseDistribution' => 'Nastavení, jak budou události přiřazovány - přímo uživateli nebo dle týmů.',
      'assignToUser' => 'Emaily/události přiřadit uživateli.',
      'team' => 'Emaily/události přiřadit týmu.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Definice pozice uživatelů, kterým budou redistribuovány události.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filters',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivní',
        'Inactive' => 'Neaktivní',
      ),
      'caseDistribution' => 
      array (
        '' => 'None',
        'Direct-Assignment' => 'Přímé přiřazení',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Poslední zaneprázdněný',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Vytvořit emailový účet',
      'IMAP' => 'IMAP',
      'Actions' => 'Akce',
      'Main' => 'Hlavní',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nelze se připojit k IMAP serveru',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Povoleno',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Přesměrování URI',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Vybrat integraci z menu.',
      'noIntegrations' => 'Žádné integrace nejsou dostupné.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtain OAuth 2.0 credentials from the Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.</p>',
      'GoogleMaps' => '<p>Obtain API key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Execute At',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Service',
      'method' => 'Method (deprecated)',
      'methodName' => 'Method',
      'scheduledJob' => 'Scheduled Job',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Running' => 'Running',
        'Failed' => 'Failed',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Šířka (%)',
      'link' => 'Link',
      'notSortable' => 'Neřaditelné',
      'align' => 'Zarovnání',
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
        'left' => 'Vlevo',
        'right' => 'Vpravo',
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
      'post' => 'Post',
      'attachments' => 'Přílohy',
      'targetType' => 'Target',
      'teams' => 'Teams',
      'users' => 'Users',
      'portals' => 'Portals',
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
      'all' => 'All',
      'posts' => 'Posts',
      'updates' => 'Updates',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'to myself',
        'users' => 'to particular user(s)',
        'teams' => 'to particular team(s)',
        'all' => 'to all internal users',
        'portals' => 'to portal users',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Write your message here',
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
      'name' => 'Name',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Is Active',
      'isDefault' => 'Is Default',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Quick Create List',
      'companyLogo' => 'Logo',
      'theme' => 'Theme',
      'language' => 'Language',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'defaultCurrency' => 'Default Currency',
      'customUrl' => 'Custom URL',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'Users',
      'portalRoles' => 'Roles',
      'notes' => 'Notes',
      'articles' => 'Knowledge Base Articles',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Create Portal',
      'User Interface' => 'User Interface',
      'General' => 'General',
      'Settings' => 'Settings',
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
      'users' => 'Users',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Access',
      'Create PortalRole' => 'Create Portal Role',
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
      'dateFormat' => 'Formát data',
      'timeFormat' => 'Formát času',
      'timeZone' => 'Časové pásmo',
      'weekStart' => 'Začátek týdne',
      'thousandSeparator' => 'Oddělovač tisíců',
      'decimalMark' => 'Desetinný oddělovač',
      'defaultCurrency' => 'Výchozí měna',
      'currencyList' => 'Seznam měn',
      'language' => 'Jazyk',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpečení',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Heslo',
      'smtpEmailAddress' => 'Emailová adresa',
      'exportDelimiter' => 'Export Delimiter',
      'receiveAssignmentEmailNotifications' => 'Dostávat emailová upozornění dle přiřazení',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => 'Emailový podpis',
      'dashboardTabList' => 'Seznam záložek',
      'defaultReminders' => 'Výchozí upozornění',
      'theme' => 'Theme',
      'useCustomTabList' => 'Custom Tab List',
      'tabList' => 'Tab List',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email Reply in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'Auto-follow record after posting in Stream',
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
        0 => 'Neděle',
        1 => 'Pondělí',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Upozornění',
      'User Interface' => 'User Interface',
      'SMTP' => 'SMTP',
      'Misc' => 'Misc',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Uživatel bude automaticky sledovat všechny nové záznamy vybraných entit, uvidí informace ve streamu a bude dostávat upozornění.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Jméno',
      'roles' => 'Role',
      'assignmentPermission' => 'Přiřazení oprávnění',
      'userPermission' => 'Uživatelská oprávnění',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Uživatelé',
      'teams' => 'Týmy',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Povolit omezení přiřazení záznamů ostatním uživatelům.n
vše - bez omezení

tým - povoluje přiřadit uživatelům ze svého týmu

ne - povoluje přiřadit pouze sobě',
      'userPermission' => 'Povolit omezení zobrazení aktivit ostatních uživatelů.

vše - viditelné vše

tým - viditelné u uživatelů ze svého týmu

ne - není viditelné',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Přístup',
      'Create Role' => 'Vytvořit roli',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'není nastaveno',
        'enabled' => 'povoleno',
        'disabled' => 'zakázáno',
      ),
      'levelList' => 
      array (
        'all' => 'vše',
        'team' => 'tým',
        'account' => 'account',
        'contact' => 'contact',
        'own' => 'vlastní',
        'no' => 'ne',
        'yes' => 'yes',
        'not-set' => 'není nastaveno',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Číst',
      'edit' => 'Upravit',
      'delete' => 'Smazat',
      'stream' => 'Stream',
      'create' => 'Create',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Všechny změny v nastavení ACL budou aplikovány po vyčištění cache.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Jméno',
      'status' => 'Status',
      'job' => 'Činnost',
      'scheduling' => 'Plánování (crontab notace)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Vytvořit naplánovanou činnost',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Vyčistit',
        'CheckInboundEmails' => 'Zkontrolovat příchozí emaily',
        'CheckEmailAccounts' => 'Zkontrolovat emaily',
        'SendEmailReminders' => 'Připomenutí emaiů k poslání',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Poznámka: přidejte tento řádek do crontab souboru pro spuštění ESPO naplánovaných činností:',
        'mac' => 'Poznámka: přidejte tento řádek do crontab souboru pro spuštění ESPO naplánovaných činností:',
        'windows' => 'Poznánmka: Vytvořte batch soubor s následujícími příkazy pro spuštění ESPO naplánovaných činností pomocí Windows Scheduled Tasks:',
        'default' => 'Poznámka: přidejte tento příkaz do Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

*/5 * * * * - every 5 minutes

0 */2 * * * - every 2 hours

30 1 * * * - at 01:30 once a day

0 0 1 * * - on the first day of the month',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Čas vykonání',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Použít cache',
      'dateFormat' => 'Formát data',
      'timeFormat' => 'Formát času',
      'timeZone' => 'Časové pásmo',
      'weekStart' => 'První den v týdnu',
      'thousandSeparator' => 'Oddělovač tisíců',
      'decimalMark' => 'Desetinný oddělovač',
      'defaultCurrency' => 'Výchozí měna',
      'baseCurrency' => 'Bázová měna',
      'currencyRates' => 'Kurzy měn',
      'currencyList' => 'Seznam měn',
      'language' => 'Jazyk',
      'companyLogo' => 'Logo společnosti',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpečení',
      'smtpUsername' => 'Uživatelské jméno',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Heslo',
      'outboundEmailFromName' => 'Od (jméno)',
      'outboundEmailFromAddress' => 'Od (adresa)',
      'outboundEmailIsShared' => 'Sdílení',
      'recordsPerPage' => 'Záznamy na stránku',
      'recordsPerPageSmall' => 'Záznamy na stránku (malý)',
      'tabList' => 'Seznam záložek',
      'quickCreateList' => 'Rychlé odkazy',
      'exportDelimiter' => 'Export Delimiter',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Autentizační metoda',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Uživatelské jméno',
      'ldapPassword' => 'Heslo',
      'ldapBindRequiresDn' => 'Přiřazení vyžaduje Dn',
      'ldapBaseDn' => 'Bázové Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Zkuste rozdělit uživatelské jméno',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Vytvořit uživatele v EspoCRM',
      'ldapSecurity' => 'Zabezpečení',
      'ldapUserLoginFilter' => 'Filtr uživatelského přihlášení',
      'ldapAccountDomainNameShort' => 'Account Domain Name krátké',
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
      'exportDisabled' => 'Disable Export (only admin is allowed)',
      'assignmentNotificationsEntityList' => 'Entity k upozornění podle přiřazení',
      'assignmentEmailNotifications' => 'Poslat emailová upozornění podle přiřazení',
      'assignmentEmailNotificationsEntityList' => 'Entity k upozornění emailem podle přiřazení',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Disable Avatars',
      'followCreatedEntities' => 'Sledovat vytvořené entity',
      'displayListViewRecordCount' => 'Display Total Count (on List View)',
      'theme' => 'Theme',
      'userThemesDisabled' => 'Disable User Themes',
      'emailMessageMaxSize' => 'Email Max Size (Mb)',
      'massEmailMaxPerHourCount' => 'Max number of emails sent per hour',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Max number of personal email accounts per user',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Address Preview',
      'addressFormat' => 'Address Format',
      'notificationSoundsDisabled' => 'Disable Notification Sounds',
      'applicationName' => 'Application Name',
      'calendarEntityList' => 'Calendar Entity List',
      'mentionEmailNotifications' => 'Send email notifications about mentions in posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'activitiesEntityList' => 'Activities Entity List',
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
      'disableExport' => 'Zakázat export (povolenou pouze adminovi)',
      'disableAvatars' => 'Zakázat avatary',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Neděle',
        1 => 'Pondělí',
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
      'recordsPerPage' => 'Number of records initially displayed in list views.',
      'recordsPerPageSmall' => 'Počet záznamů v panelu vztahů.',
      'outboundEmailIsShared' => 'Povolit posílání emailů uživatelům pomocí SMTP.',
      'followCreatedEntities' => 'Pokud uživatel vytvoří záznam, bude jej sledovat automaticky.',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'If checked then users won\'t be able to select another theme.',
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
      'ldapUserTeams' => 'Teams for created user. For more, see user profile.',
      'ldapUserDefaultTeam' => 'Default team for created user. For more, see user profile.',
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
      'System' => 'Systém',
      'Locale' => 'Locale',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfigurace',
      'In-app Notifications' => 'In-app notifikace',
      'Email Notifications' => 'Email notifikace',
      'Currency Settings' => 'Nastavení měn',
      'Currency Rates' => 'Kurzy měn',
      'Mass Email' => 'Mass Email',
      'Test Connection' => 'Test Connection',
      'Connecting' => 'Connecting...',
      'Activities' => 'Activities',
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
      'name' => 'Jméno',
      'roles' => 'Role',
      'positionList' => 'Seznam pozic',
    ),
    'links' => 
    array (
      'users' => 'Uživatelé',
      'notes' => 'Notes',
      'roles' => 'Roles',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Access Roles. Users of this team obtain access control level from selected roles.',
      'positionList' => 'Available positions in this team. E.g. Salesperson, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Vytvořit tým',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'body' => 'Body',
      'entityType' => 'Entity Type',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Left Margin',
      'topMargin' => 'Top Margin',
      'rightMargin' => 'Right Margin',
      'bottomMargin' => 'Bottom Margin',
      'printFooter' => 'Print Footer',
      'footerPosition' => 'Footer Position',
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
      'Create Template' => 'Create Template',
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
      'footer' => 'Use {pageNumber} to print page number.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Jméno',
      'userName' => 'Uživatelské jméno',
      'title' => 'Title',
      'isAdmin' => 'Je admin',
      'defaultTeam' => 'Výchozí tým',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'Role',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'teamRole' => 'Pozice',
      'password' => 'Heslo',
      'currentPassword' => 'Current Password',
      'passwordConfirm' => 'Potvrzení hesla',
      'newPassword' => 'Nové heslo',
      'newPasswordConfirm' => 'Potvrzení nového hesla',
      'avatar' => 'Avatar',
      'isActive' => 'Je aktivní',
      'isPortalUser' => 'Is Portal User',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'sendAccessInfo' => 'Send Email with Access Info to User',
      'portal' => 'Portal',
      'gender' => 'Gender',
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
      'teams' => 'Týmy',
      'roles' => 'Role',
      'notes' => 'Notes',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'tasks' => 'Tasks',
      'targetLists' => 'Cílové seznamy',
    ),
    'labels' => 
    array (
      'Create User' => 'Vytvořit uživatele',
      'Generate' => 'Generovat',
      'Access' => 'Přístup',
      'Preferences' => 'Předvolby',
      'Change Password' => 'Změnit heslo',
      'Teams and Access Control' => 'Týmy a kontrola přístupu',
      'Forgot Password?' => 'Zapomenuté heslo?',
      'Password Change Request' => 'Požadavek na změnu hesla',
      'Email Address' => 'Emailová adresa',
      'External Accounts' => 'Externí účty',
      'Email Accounts' => 'Emailové účty',
      'Portal' => 'Portal',
      'Create Portal User' => 'Create Portal User',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'All records created by this user will be related to this team by default.',
      'userName' => 'Letters a-z, numbers 0-9 and underscores are allowed.',
      'isAdmin' => 'Admin user can access everything.',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Teams which this user belongs to. Access control level is inherited from team\'s roles.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level only for this user.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Heslo bude posláno na emailovou adresu uživatele.',
      'accountInfoEmailSubject' => 'EspoCRM Informace k uživatelskému přístupu',
      'accountInfoEmailBody' => 'Vaše přístupové informace jsou:

Přihlašovací jméno: {userName}
Heslo: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Požadavek na změnu hesla',
      'passwordChangeLinkEmailBody' => 'Můžete změnit Vaše heslo pomocí tohoto odkazu {link}, tato url adresa z bezpečnostních důvodů brzy vyprší.',
      'passwordChanged' => 'Heslo bylo změněno',
      'userCantBeEmpty' => 'Uživatelské jméno nemůže být prázdné',
      'wrongUsernamePasword' => 'Nesprávné uživatelské jmén/heslo',
      'emailAddressCantBeEmpty' => 'Emailová adresa nemůže zůstat prázdná',
      'userNameEmailAddressNotFound' => 'Uživatelské jméno/heslo nebylo nalezeno',
      'forbidden' => 'Tato operace není povolena, prosím zkuste to později',
      'uniqueLinkHasBeenSent' => 'Unikátní link byl poslán na zadanou emailovou adresu.',
      'passwordChangedByRequest' => 'Heslo bylo změněo.',
      'setupSmtpBefore' => 'You need to setup <a href="{url}">SMTP settings</a> to make the system be able to send password in email.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Not Set',
        'Male' => 'Male',
        'Female' => 'Female',
        'Neutral' => 'Neutral',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Pouze můj tým',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivní',
      'activePortal' => 'Portal Active',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Název',
      'emailAddress' => 'Email',
      'website' => 'Web',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Fakturační adresa',
      'shippingAddress' => 'Doručovací adresa',
      'description' => 'Popis',
      'sicCode' => 'IČ',
      'industry' => 'Průmysl',
      'type' => 'Typ',
      'contactRole' => 'Pozice',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Kampaň',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
      'opportunities' => 'Případy',
      'cases' => 'Události',
      'documents' => 'Dokumenty',
      'meetingsPrimary' => 'Schůzky (rozšířené)',
      'callsPrimary' => 'Volání (rozšířené)',
      'tasksPrimary' => 'Úkoly (rozšířené)',
      'emailsPrimary' => 'Emaily (rozšířené)',
      'targetLists' => 'Cílové seznamy',
      'campaignLogRecords' => 'Log kampaně',
      'campaign' => 'Kampaň',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Zákazník',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Prodejce',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Zeměděltví',
        'Advertising' => 'Reklama',
        'Apparel & Accessories' => 'Oblečení a doplňky',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotive',
        'Banking' => 'Bankovnictví',
        'Biotechnology' => 'Biotechnologie',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Chemie',
        'Construction' => 'Construction',
        'Computer' => 'Počítače',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Vzdělání',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Zábava a volný čas',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Stravování a nápoje',
        'Grocery' => 'Potraviny',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Pojištění',
        'Legal' => 'Právo',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Vydavatelství',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Nemovitosti',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Služby',
        'Support' => 'Support',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Telekomunikace',
        'Television' => 'TV',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Doprava',
        'Travel' => 'Travel',
        'Venture Capital' => 'Rizikový kapitál',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Vytvořit organizaci',
      'Copy Billing' => 'Zkopírovat fakturační údaje',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Zákazníci',
      'partners' => 'Partneři',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Měsíc',
      'week' => 'Týden',
      'day' => 'Den',
      'agendaWeek' => 'Týden',
      'agendaDay' => 'Den',
      'timeline' => 'Timeline',
    ),
    'labels' => 
    array (
      'Today' => 'Dnes',
      'Create' => 'Vytvořit',
      'Shared' => 'Shared',
      'Add User' => 'Add User',
      'current' => 'current',
      'time' => 'time',
      'User List' => 'User List',
      'Manage Users' => 'Manage Users',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Název',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateStart' => 'Datum zahájení',
      'dateEnd' => 'Datum ukončení',
      'direction' => 'Směr',
      'duration' => 'Trvání',
      'description' => 'Popis',
      'users' => 'Uživatelé',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'reminders' => 'Připomenutí',
      'account' => 'Organizace',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Plánovaný',
        'Held' => 'Uskutečněný',
        'Not Held' => 'Neuskutečněný',
      ),
      'direction' => 
      array (
        'Outbound' => 'Odchozí',
        'Inbound' => 'Příchozí',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Přijatý',
        'Declined' => 'Odmítnutý',
        'Tentative' => 'Předběžný',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Nastavit jako uskutečněný',
      'setNotHeld' => 'Nastavit jako neuskutečněný',
    ),
    'labels' => 
    array (
      'Create Call' => 'Vytvořit volání',
      'Set Held' => 'Nastavit jako uskutečněný',
      'Set Not Held' => 'Nastavit jako neuskutečněný',
      'Send Invitations' => 'Poslat pozvánky',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plánovaný',
      'held' => 'Uskutečněný',
      'todays' => 'Dnešní',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Název',
      'description' => 'Popis',
      'status' => 'Status',
      'type' => 'Typ',
      'startDate' => 'Datum zahájení',
      'endDate' => 'Datum ukončení',
      'targetLists' => 'Cílové seznamy',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Poslané',
      'openedCount' => 'Otevřené',
      'clickedCount' => 'Kliknuté',
      'optedOutCount' => 'Odhlášené',
      'bouncedCount' => 'Odmítnuté',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Tvrdě odmítnuté',
      'softBouncedCount' => 'Měkce odmítnuté',
      'leadCreatedCount' => 'Vytvořených stop',
      'revenue' => 'Příjem',
      'revenueConverted' => 'příjem (konvertováno)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converted)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Cílové seznamy',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Organizace',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'opportunities' => 'Případy',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Mass Emails',
      'trackingUrls' => 'Tracking URLs',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'TV',
        'Radio' => 'Rádio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Email',
      ),
      'status' => 
      array (
        'Planning' => 'Plánované',
        'Active' => 'Aktivní',
        'Inactive' => 'Neaktivní',
        'Complete' => 'Kompletní',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Vytvořit kampaň',
      'Target Lists' => 'Cílové seznamy',
      'Statistics' => 'Statistiky',
      'hard' => 'těžký',
      'soft' => 'měkký',
      'Unsubscribe' => 'Unsubscribe',
      'Mass Emails' => 'Mass Emails',
      'Email Templates' => 'Email Templates',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivní',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'You have been unsubscribed from our mailing list.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Akce',
      'actionDate' => 'Datum',
      'data' => 'Data',
      'campaign' => 'Kampaň',
      'parent' => 'Cíl',
      'object' => 'Objekt',
      'application' => 'Aplikace',
      'queueItem' => 'Queue Item',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Queue Item',
      'parent' => 'Parent',
      'object' => 'Object',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Poslané',
        'Opened' => 'Otevřené',
        'Opted Out' => 'Odhlášené',
        'Bounced' => 'Odmítnuté',
        'Clicked' => 'Kliknuté',
        'Lead Created' => 'Vytvořeno stop',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Vše',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sent',
      'opened' => 'Opened',
      'optedOut' => 'Opted Out',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Clicked',
      'leadCreated' => 'Lead Created',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Code to insert instead of URL',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'campaign' => 'Campaign',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Create Tracking URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Název',
      'number' => 'Číslo',
      'status' => 'Status',
      'account' => 'Organizace',
      'contact' => 'Kontakt',
      'contacts' => 'Contacts',
      'priority' => 'Priorita',
      'type' => 'Typ',
      'description' => 'Popis',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Group Email Account',
      'account' => 'Account',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Contacts',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
      'articles' => 'Knowledge Base Articles',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nový',
        'Assigned' => 'Přiřazený',
        'Pending' => 'Čekající',
        'Closed' => 'Uzavřený',
        'Rejected' => 'Odmítnutý',
        'Duplicate' => 'Duplikovaný',
      ),
      'priority' => 
      array (
        'Low' => 'Malá',
        'Normal' => 'Normální',
        'High' => 'Vysoká',
        'Urgent' => 'Urgentní',
      ),
      'type' => 
      array (
        'Question' => 'Otázka',
        'Incident' => 'Incident',
        'Problem' => 'Problém',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Vytvořit událost',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otevřený',
      'closed' => 'Zavřený',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Název',
      'emailAddress' => 'Email',
      'title' => 'Pozice',
      'account' => 'Organizace',
      'accounts' => 'Organizace',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Typ organizace',
      'doNotCall' => 'Nevolat',
      'address' => 'Adresa',
      'opportunityRole' => 'Pozice vzhledem k případu',
      'accountRole' => 'Pozice',
      'description' => 'Popis',
      'campaign' => 'Kampaň',
      'targetLists' => 'Cílové seznamy',
      'targetList' => 'Cílový seznam',
      'portalUser' => 'Portal User',
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
      'opportunities' => 'Případy',
      'cases' => 'Události',
      'targetLists' => 'Cílové seznamy',
      'campaignLogRecords' => 'Log kampaně',
      'campaign' => 'Kampaň',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Vytvořit kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--',
        'Decision Maker' => 'Rozhoduje',
        'Evaluator' => 'Hodnotí',
        'Influencer' => 'Má vliv',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portal Users',
      'notPortalUsers' => 'Not Portal Users',
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
      'Create Document' => 'Vytvořit dokument',
      'Details' => 'Detaily',
    ),
    'fields' => 
    array (
      'name' => 'Název',
      'status' => 'Status',
      'file' => 'Soubor',
      'type' => 'Typ',
      'publishDate' => 'Datum publikace',
      'expirationDate' => 'Datum expirace',
      'description' => 'Popis',
      'accounts' => 'Organizace',
      'folder' => 'Složka',
      'formularios' => 'Formularios',
      'source' => 'Zdroj',
    ),
    'links' => 
    array (
      'accounts' => 'Organizace',
      'opportunities' => 'Případy',
      'folder' => 'Složka',
      'leads' => 'Leads',
      'contacts' => 'Contacts',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivní',
        'Draft' => 'Draft',
        'Expired' => 'Expirovaný',
        'Canceled' => 'Zrušený',
      ),
      'type' => 
      array (
        '' => '-',
        'Contract' => 'Kontrakt',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licenční smlouva',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivní',
      'draft' => 'Draft',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Vytvořit složku',
      'Manage Categories' => 'Spravovat složky',
      'Documents' => 'Documents',
      'documents' => 'Dokumenty',
    ),
    'links' => 
    array (
      'documents' => 'Dokumenty',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Date Sent',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'Email Address',
      'massEmail' => 'Mass Email',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Mass Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Sent' => 'Sent',
        'Failed' => 'Failed',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Pending',
      'sent' => 'Sent',
      'failed' => 'Failed',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Create Article',
      'Any' => 'Any',
      'Send in Email' => 'Send in Email',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Attachments',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'body' => 'Body',
      'categories' => 'Categories',
      'language' => 'Language',
      'portals' => 'Portals',
    ),
    'links' => 
    array (
      'cases' => 'Cases',
      'opportunities' => 'Opportunities',
      'categories' => 'Categories',
      'portals' => 'Portals',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Review',
        'Draft' => 'Draft',
        'Archived' => 'Archived',
        'Published' => 'Published',
      ),
      'type' => 
      array (
        'Article' => 'Article',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Published',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'Articles' => 'Articles',
    ),
    'links' => 
    array (
      'articles' => 'Articles',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Konvertováno do',
      'Create Lead' => 'Vytvořit stopu',
      'Convert' => 'Konvertovat',
      'convert' => 'konvertovat',
    ),
    'fields' => 
    array (
      'name' => 'Název',
      'emailAddress' => 'Email',
      'title' => 'Pozice',
      'website' => 'Web',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Název organizace',
      'doNotCall' => 'Nevolat',
      'address' => 'Adresa',
      'status' => 'Status',
      'source' => 'Zdroj',
      'opportunityAmount' => 'Částka případu',
      'opportunityAmountConverted' => 'Částka případu (konvertováno)',
      'description' => 'Popis',
      'createdAccount' => 'Organizace',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Případ',
      'campaign' => 'Kampaň',
      'targetLists' => 'Cílové seznamy',
      'targetList' => 'Cílový seznam',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Cílové seznamy',
      'campaignLogRecords' => 'Log kampaně',
      'campaign' => 'Kampaň',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
      'cases' => 'Cases',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nový',
        'Assigned' => 'Přiřazený',
        'In Process' => 'V procesu',
        'Converted' => 'Konvertovaný',
        'Recycled' => 'Recyklovaný',
        'Dead' => 'Mrtvý',
      ),
      'source' => 
      array (
        '' => '-',
        'Call' => 'Volání',
        'Email' => 'Email',
        'Existing Customer' => 'Existující zákazník',
        'Partner' => 'Partner',
        'Public Relations' => 'Veřejné vztahy',
        'Web Site' => 'Web',
        'Campaign' => 'Kampaň',
        'Other' => 'Ostatní',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivní',
      'actual' => 'Actual',
      'converted' => 'Konvertovaný',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Date Start',
      'fromAddress' => 'From Address',
      'fromName' => 'From Name',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
        'Canceled' => 'Canceled',
        'Failed' => 'Failed',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Create Mass Email',
      'Send Test' => 'Send Test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Select at least one target.',
      'testSent' => 'Test email(s) supposed to be sent',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'complete' => 'Complete',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Název',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateStart' => 'Datum zahájení',
      'dateEnd' => 'Datum ukončení',
      'duration' => 'Trvání',
      'description' => 'Popis',
      'users' => 'Uživatelé',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'reminders' => 'Připomenutí',
      'account' => 'Organizace',
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
        'Planned' => 'Planovaný',
        'Held' => 'Uskutečněný',
        'Not Held' => 'Neuskutečněný',
      ),
      'acceptanceStatus' => 
      array (
        'None' => '-',
        'Accepted' => 'Přijatý',
        'Declined' => 'Odmítnutý',
        'Tentative' => 'Předběžný',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Nastavit jako uskutečněný',
      'setNotHeld' => 'Nastavit jako neuskutečněný',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Vytvořit schůzku',
      'Set Held' => 'Nastavit jako uskutečněný',
      'Set Not Held' => 'Nastavit jako neuskutečněný',
      'Send Invitations' => 'Odeslat pozvánky',
      'on time' => 'na čas',
      'before' => 'před',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plánovaný',
      'held' => 'Uskutečněný',
      'todays' => 'Dnešní',
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
      'name' => 'Název',
      'account' => 'Organizace',
      'stage' => 'Stav',
      'amount' => 'Částka',
      'probability' => 'Pravděpodobnost, %',
      'leadSource' => 'Zdrojová stopa',
      'doNotCall' => 'Nevolat',
      'closeDate' => 'Deadline',
      'contacts' => 'Kontakty',
      'description' => 'Popis',
      'amountConverted' => 'Částka (konvertováno)',
      'amountWeightedConverted' => 'Vážená částka',
      'campaign' => 'Kampaň',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
      'documents' => 'Dokumenty',
      'campaign' => 'Kampaň',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualification',
        'Proposal' => 'Proposal',
        'Negotiation' => 'Negotiation',
        'Needs Analysis' => 'Needs Analysis',
        'Value Proposition' => 'Value Proposition',
        'Id. Decision Makers' => 'Id. Decision Makers',
        'Perception Analysis' => 'Perception Analysis',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Negotiation/Review',
        'Closed Won' => 'Closed Won',
        'Closed Lost' => 'Closed Lost',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Vytvořit případ',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otevřený',
      'won' => 'Vyhraný',
      'lost' => 'Lost',
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
      'name' => 'Název',
      'description' => 'Popis',
      'entryCount' => 'Počet vstupů',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Kampaně',
      'endDate' => 'Datum ukončení',
      'targetLists' => 'Cílové seznamy',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Organizace',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'campaigns' => 'Kampaně',
      'massEmails' => 'Mass Emails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'TV',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Vytvořit cílový seznam',
      'Opted Out' => 'Odhlášené',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Název',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateStart' => 'Datum zahájení',
      'dateEnd' => 'Datum dokončení',
      'dateStartDate' => 'Datum zahájení (celý den)',
      'dateEndDate' => 'Datum ukončení (celý den)',
      'priority' => 'Priorita',
      'description' => 'Popis',
      'isOverdue' => 'Je zpozděné',
      'account' => 'Organizace',
      'dateCompleted' => 'Datum dokončení',
      'attachments' => 'Přílohy',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Přílohy',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nezahájeno',
        'Started' => 'Zahájeno',
        'Completed' => 'Dokončeno',
        'Canceled' => 'Zrušeno',
        'Deferred' => 'Odloženo',
      ),
      'priority' => 
      array (
        'Low' => 'Malá',
        'Normal' => 'Normální',
        'High' => 'Vysoká',
        'Urgent' => 'Urgentní',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Vytvořit úkol',
      'Complete' => 'Dokončit',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuální',
      'completed' => 'Dokončené',
      'deferred' => 'Deferred',
      'todays' => 'Dnešní',
      'overdue' => 'Zpožděné',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => 'Address',
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
      'Create Formularios' => 'Vytvořit Formulario',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => 'Vytvořit MotivoReclamo',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' => 
    array (
      'Create Reclamo' => 'Vytvořit Reclamo',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>