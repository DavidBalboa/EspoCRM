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
      'Enabled' => 'Aktiv',
      'Disabled' => 'Inaktiv',
      'System' => 'System',
      'Users' => 'Brugere',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Tilpasning',
      'Available Fields' => 'Felter til rådighed',
      'Layout' => 'Layout',
      'Entity Manager' => 'Entitetsmanager',
      'Add Panel' => 'Tilføj Panel',
      'Add Field' => 'Tilføj Felt',
      'Settings' => 'Indstillinger',
      'Scheduled Jobs' => 'Planlagte Jobs',
      'Upgrade' => 'Opgrader',
      'Clear Cache' => 'Tøm Cache',
      'Rebuild' => 'Genopbyg',
      'Teams' => 'Teams',
      'Roles' => 'Roller',
      'Portal' => 'Portal',
      'Portals' => 'Portaler',
      'Portal Roles' => 'Portalroller',
      'Portal Users' => 'Portalbrugere',
      'Outbound Emails' => 'Udgående Email',
      'Group Email Accounts' => 'Gruppe Emailkonti',
      'Personal Email Accounts' => 'Personlige Emailkonti',
      'Inbound Emails' => 'Indgående Email',
      'Email Templates' => 'Emailskabeloner',
      'Import' => 'Import',
      'Layout Manager' => 'Layoutmanager',
      'User Interface' => 'Brugergrænseflade',
      'Auth Tokens' => 'Auth Token',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autentifikation',
      'Currency' => 'Valuta',
      'Integrations' => 'Integrationer',
      'Extensions' => 'Udvidelser',
      'Upload' => 'Upload',
      'Installing...' => 'Installerer....',
      'Upgrading...' => 'Opgraderer....',
      'Upgraded successfully' => 'Opgraderet succesfuldt',
      'Installed successfully' => 'Installeret succesfuldt',
      'Ready for upgrade' => 'Klar til opgradering',
      'Run Upgrade' => 'Kør Opgradering',
      'Install' => 'Installer',
      'Ready for installation' => 'Klar til installation',
      'Uninstalling...' => 'Afinstallerer....',
      'Uninstalled' => 'Afinstalleret',
      'Create Entity' => 'Opret Entitet',
      'Edit Entity' => 'Rediger Entitet',
      'Create Link' => 'Opret Link',
      'Edit Link' => 'Rediger Link',
      'Notifications' => 'Notifikationer',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Reset til Standard',
      'Email Filters' => 'Emailfiltre',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' =>
    array (
      'list' => 'Liste',
      'detail' => 'Detalje',
      'listSmall' => 'Liste (LIlle)',
      'detailSmall' => 'Detalje (Lille)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Søgefiltre',
      'massUpdate' => 'Masseopdater',
      'relationships' => 'Relationspaneler',
      'sidePanelsDetail' => 'Sidepaneler (Detaljer)',
      'sidePanelsEdit' => 'Sidepaneler  (Rediger)',
      'sidePanelsDetailSmall' => 'Sidepaneler  (detalje lille)',
      'sidePanelsEditSmall' => 'Sidepaneler (rediger lille)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Konverter Lead',
      'listForAccount' => 'Liste (for Konto)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' =>
    array (
      'address' => 'Adresse',
      'array' => 'Liste',
      'foreign' => 'Fremmed',
      'duration' => 'Varighed',
      'password' => 'Kodeord',
      'personName' => 'Personnavn',
      'autoincrement' => 'Automatisk stigende',
      'bool' => 'Boolsk',
      'currency' => 'Valuta',
      'currencyConverted' => 'Valuta (Konverteret)',
      'date' => 'Dato',
      'datetime' => 'DatoTid',
      'datetimeOptional' => 'Dato/DatoTid',
      'email' => 'Email',
      'enum' => 'Enkelt udvælgelse',
      'enumInt' => 'Enkelt udvælgelse Heltal',
      'enumFloat' => 'Enkelt udvælgelse Reelt tal',
      'float' => 'Reelt tal',
      'int' => 'Heltal',
      'link' => 'Link',
      'linkMultiple' => 'Flere Links',
      'linkParent' => 'Overordnet Link',
      'phone' => 'Telefon',
      'text' => 'Tekst',
      'url' => 'Url',
      'varchar' => 'Tekst (Max 255)',
      'file' => 'Fil',
      'image' => 'Billede',
      'multiEnum' => 'Multi-udvælgelse',
      'attachmentMultiple' => 'Flere vedhæftninger',
      'rangeInt' => 'Område Heltal',
      'rangeFloat' => 'Område Reelt tal',
      'rangeCurrency' => 'Område Valuta',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Kort',
      'number' => 'Nummer',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'multienim' => 'Multiudvælgelse',
    ),
    'fields' =>
    array (
      'type' => 'Type',
      'name' => 'Navn',
      'label' => 'Betegnelse',
      'tooltipText' => 'Værktøjstip Tekst',
      'required' => 'Nødvendig',
      'default' => 'Standard',
      'maxLength' => 'Max længde',
      'options' => 'Muligheder',
      'after' => 'Efter (Felt)',
      'before' => 'Før (Felt)',
      'link' => 'Link',
      'field' => 'Felt',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Oversættelse',
      'previewSize' => 'Eksempel Str.',
      'noEmptyString' => 'Empty string value is not allowed',
      'defaultType' => 'Standard Type',
      'seeMoreDisabled' => 'Forhindre fjernelse af tekst',
      'entityList' => 'Entitetsliste',
      'isSorted' => 'Er sorteret (alfabetisk)',
      'audited' => 'Er Revideret',
      'trim' => 'Trim',
      'height' => 'Højde (px)',
      'minHeight' => 'Min Højde (px)',
      'provider' => 'Provider½',
      'typeList' => 'Typeliste',
      'rows' => 'Antal rækker i tekstområde',
      'lengthOfCut' => 'Længde af Vist Tekst',
      'sourceList' => 'Kildeliste',
      'prefix' => 'Præfix',
      'nextNumber' => 'Næste Nummer',
      'padLength' => 'Feltlængde',
      'disableFormatting' => 'Deaktiver Formatering',
      'dynamicLogicVisible' => 'Betingelser der gør feltet synligt',
      'dynamicLogicReadOnly' => 'Betingelser der gør feltet skrivebeskyttet',
      'dynamicLogicRequired' => 'Betingelser der gør feltet påkrævet',
      'dynamicLogicOptions' => 'Betingelsesmuligheder',
      'probabilityMap' => 'Stadiesandsynlighed (%)',
      'readOnly' => 'Skrivebeskyttet',
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
      'selectEntityType' => 'Vælg entitetstype i venstremenuen',
      'selectUpgradePackage' => 'Vælg opgraderingspakke',
      'downloadUpgradePackage' => 'Download opgraderingspakke(r) <a href="{url}">her</a>.',
      'selectLayout' => 'Vælg ønsket layout i venstremenuen og rediger',
      'selectExtensionPackage' => 'Vælg udvidelsespakke',
      'extensionInstalled' => 'Udvidelse {name} {version} er blevet installeret',
      'installExtension' => 'Udvidelsen {name} {version} er klar til installation',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' =>
    array (
      'settings' => 'Applikationens systemindstillinger',
      'scheduledJob' => 'Opgaver som køres v.hj.a. et cronjob',
      'upgrade' => 'Opgrader EspoCRM',
      'clearCache' => 'Tøm backend cache',
      'rebuild' => 'Genopbyg backend og tøm cache',
      'users' => 'Administration af Brugere',
      'teams' => 'Administration af Hold',
      'roles' => 'Administration af Roller',
      'portals' => 'Administration af Portal',
      'portalRoles' => 'Roller for portal',
      'portalUsers' => 'Portalbrugere',
      'outboundEmails' => 'SMTP-indstillinger til udgående emails',
      'groupEmailAccounts' => 'Imap Gruppekonti. Email import og emails til sager.',
      'personalEmailAccounts' => 'Brugers emailkonti',
      'emailTemplates' => 'Skabeloner til udgående emails',
      'import' => 'Importer data fra CSV-fil',
      'layoutManager' => 'Tilret layouts (liste, detalje, rediger, søg, masseopdater)',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Konfigurer brugergrænseflade.',
      'authTokens' => 'Aktive Auth-sessioner. IP-adresse og sidste adgangsdato.',
      'authentication' => 'Autentifikationsindstillinger',
      'currency' => 'Valutakurser og -indstillinger.',
      'extensions' => 'Installer eller afinstaller udvidelser.',
      'integrations' => 'Integration med tredie-parts services.',
      'notifications' => 'Indstillinger for in-app og email.',
      'inboundEmails' => 'Indstillinger for indkommende emails.',
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
        'x-small' => 'Meget lille',
        'small' => 'Lille',
        'medium' => 'Middel',
        'large' => 'Stor',
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
      'Document' => 'Indsæt dokument.',
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
      'user' => 'Bruger',
      'ipAddress' => 'IP-adresse',
      'lastAccess' => 'Sidste adgangsdato.',
      'createdAt' => 'Logindato',
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
      'title' => 'Titel',
      'dateFrom' => 'Dato fra.',
      'dateTo' => 'Dato til.',
      'autorefreshInterval' => 'Genindlæsningsinterval',
      'displayRecords' => 'Antal viste linier.',
      'isDoubleHeight' => 'Dobbelt højde.',
      'mode' => 'Mode',
      'enabledScopeList' => 'Hvad skal vises.',
      'users' => 'Brugere',
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
        'agendaWeek' => 'Uge (agenda)',
        'basicWeek' => 'Uge',
        'month' => 'Måned',
        'basicDay' => 'Dag',
        'agendaDay' => 'Dag (agenda)',
        'timeline' => 'Tidslinie',
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
        'equals' => 'Lig med',
        'notEquals' => 'Ikke Lig Med',
        'greaterThan' => 'Større End',
        'lessThan' => 'Mindre End',
        'greaterThanOrEquals' => 'Større End eller Lig Med',
        'lessThanOrEquals' => 'Mindre End eller Lig Med',
        'in' => 'I',
        'notIn' => 'Ikke I',
        'inPast' => 'I Fortiden',
        'inFuture' => 'I Fremtiden',
        'isToday' => 'Er Idag',
        'isTrue' => 'Er Sand',
        'isFalse' => 'Er Falsk',
        'isEmpty' => 'Er Tom',
        'isNotEmpty' => 'Er Ikke Tom',
        'contains' => 'Indeholder',
        'notContains' => 'Indeholder Ikke',
        'has' => 'Indeholder',
        'notHas' => 'Indeholder Ikke',
      ),
    ),
    'label' =>
    array (
      'Field' => 'Felt',
    ),
  ),
  'Email' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn (Emne)',
      'parent' => 'Henviser til',
      'status' => 'Status',
      'dateSent' => 'Dato sendt',
      'from' => 'Fra',
      'to' => 'Til',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Svar Til',
      'replyToString' => 'Svar Til (Streng) ',
      'isHtml' => 'Er Html',
      'body' => 'Indhold',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Emne',
      'attachments' => 'Vedhæftet',
      'selectTemplate' => 'Vælg Skabelon',
      'fromEmailAddress' => 'Fra Adresse',
      'toEmailAddresses' => 'Til Adresse',
      'emailAddress' => 'Emailadresse',
      'deliveryDate' => 'Afleveringsdato',
      'account' => 'Konto',
      'users' => 'Brugere',
      'replied' => 'Besvaret',
      'replies' => 'Svar',
      'isRead' => 'Læst',
      'isNotRead' => 'Ikke Læst',
      'isImportant' => 'Vigtig',
      'isReplied' => 'Er Besvaret',
      'isNotReplied' => 'Er Ikke Besvaret',
      'isUsers' => 'Er Brugers',
      'inTrash' => 'I Papirkurv',
      'sentBy' => 'Sendt af (Bruger)',
      'folder' => 'Mappe',
      'inboundEmails' => 'Gruppekonti',
      'emailAccounts' => 'Personlige Konti',
      'hasAttachment' => 'Har Vedhæftet',
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
      'replied' => 'Besvaret',
      'replies' => 'Svar',
      'inboundEmails' => 'Gruppekonti',
      'emailAccounts' => 'Personlige Konti',
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
        'Draft' => 'Kladder',
        'Sending' => 'Sender',
        'Sent' => 'Sendt',
        'Archived' => 'Arkiveret',
        'Received' => 'Modtaget',
        'Failed' => 'Fejlet',
      ),
    ),
    'labels' =>
    array (
      'Create Email' => 'Arkiver Email',
      'Archive Email' => 'Arkiver Email',
      'Compose' => 'Opret',
      'Reply' => 'Besvar',
      'Reply to All' => 'Svar til Alle',
      'Forward' => 'Videresend',
      'Original message' => 'Oprindelig besked',
      'Forwarded message' => 'Videresendt besked',
      'Email Accounts' => 'Personlige Emailkonti',
      'Inbound Emails' => 'Gruppe Emailkonti',
      'Email Templates' => 'Emailskabeloner',
      'Send Test Email' => 'Send Test-email',
      'Send' => 'Send',
      'Email Address' => 'Emailadresse',
      'Mark Read' => 'Marker som Læst',
      'Sending...' => 'Sender..',
      'Save Draft' => 'Gem Kladde',
      'Mark all as read' => 'Marker alle som Læst',
      'Show Plain Text' => 'Vis som Tekst',
      'Mark as Important' => 'Marker som Vigtig',
      'Unmark Importance' => 'Fjern markering som Vigtig',
      'Move to Trash' => 'Flyt til Papirkurv',
      'Retrieve from Trash' => 'Hent fra Papirkurv',
      'Move to Folder' => 'Flyt til Mappe',
      'Filters' => 'Filtre',
      'Folders' => 'Mapper',
      'Create Lead' => 'Opret Lead',
      'Create Contact' => 'Opret Kontakt',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Opret Opgave',
      'Create Case' => 'Opret Sag',
    ),
    'messages' =>
    array (
      'noSmtpSetup' => 'Ingen SMTP indstillinger {link}.',
      'testEmailSent' => 'Test-email afsendt',
      'emailSent' => 'Email afsendt',
      'savedAsDraft' => 'Gemt som Kladde',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' =>
    array (
      'sent' => 'Sendt',
      'archived' => 'Arkiveret',
      'inbox' => 'Indbakke',
      'drafts' => 'Kladder',
      'trash' => 'Papirkurv',
      'important' => 'Vigtig',
    ),
    'massActions' =>
    array (
      'markAsRead' => 'Marker som Læst',
      'markAsNotRead' => 'Mark som Ikke Læst',
      'markAsImportant' => 'Marker som Vigtig',
      'markAsNotImportant' => 'Fjern Vigtig-markering',
      'moveToTrash' => 'Flyt til Papirkurv',
      'moveToFolder' => 'Flyt til Mappe',
      'retrieveFromTrash' => 'Hent fra Papirkurv',
    ),
  ),
  'EmailAccount' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'host' => 'Vært',
      'username' => 'Brugernavn',
      'password' => 'Kodeord',
      'port' => 'Port',
      'monitoredFolders' => 'Overvågede Mapper',
      'ssl' => 'SSL',
      'fetchSince' => 'Hent Siden',
      'emailAddress' => 'Emailadresse',
      'sentFolder' => 'Sendt Mappe',
      'storeSentEmails' => 'Gem Sendte Emails',
      'keepFetchedEmailsUnread' => 'Behold Hentede Emails som Ulæste',
      'emailFolder' => 'Læg i Mappe',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Brug SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Sikkerhed',
      'smtpUsername' => 'SMTP Brugernavn',
      'smtpPassword' => 'SMTP Kodeord',
    ),
    'links' =>
    array (
      'filters' => 'Filtre',
      'emails' => 'Emails',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'labels' =>
    array (
      'Create EmailAccount' => 'Opret Emailkonto',
      'IMAP' => 'IMAP',
      'Main' => 'Konto',
      'Test Connection' => 'Test Forbindelse',
      'Send Test Email' => 'Send Testemail',
      'SMTP' => 'SMTP',
    ),
    'messages' =>
    array (
      'couldNotConnectToImap' => 'Kunne ikke forbinde til IMAP server',
      'connectionIsOk' => 'Forbindelse OK',
    ),
    'tooltips' =>
    array (
      'monitoredFolders' => 'Du kan tilføje en \'Sendt\' mappe for at synkronisere emails sendt fra en ekstern emailklient.',
      'storeSentEmails' => 'Sendte emails bliver lagret på IMAP serveren. Emailadressefeltet skal matche adressen emails vil blive sendt fra.',
    ),
  ),
  'EmailAddress' =>
  array (
    'labels' =>
    array (
      'Primary' => 'Primær',
      'Opted Out' => 'Fravalgt',
      'Invalid' => 'Ugyldig',
    ),
  ),
  'EmailFilter' =>
  array (
    'fields' =>
    array (
      'from' => 'Fra',
      'to' => 'Til',
      'subject' => 'Emne',
      'bodyContains' => 'Mail indeholder',
      'action' => 'Handling',
      'isGlobal' => 'Er Global',
      'emailFolder' => 'Mappe',
    ),
    'labels' =>
    array (
      'Create EmailFilter' => 'Opret Emailfilter',
      'Emails' => 'Emails',
    ),
    'options' =>
    array (
      'action' =>
      array (
        'Skip' => 'Ignorer',
        'Move to Folder' => 'Læg i Mappe',
      ),
    ),
    'tooltips' =>
    array (
      'name' => 'Giv filtret et beskrivende navn',
      'subject' => 'Brug et wildcard *

tekst* - begynder med tekst
*tekst* - indeholder tekst
*tekst - slutter med tekst',
      'bodyContains' => 'Emailens brødtekst indeholder et eller flere af de angivne ord eller sætninger.',
      'from' => 'Emails sendt fra den angivne adresse. Efterlad tom hvis unødvendig. Du kan benytte wildcard*.',
      'to' => 'Emails sendt fra den angivne adresse. Efterlad tom hvis unødvendig. Du kan benytte wildcard*.',
      'isGlobal' => 'Bruger dette filter på alle emails, der kommer ind i systemet.',
    ),
  ),
  'EmailFolder' =>
  array (
    'fields' =>
    array (
      'skipNotifications' => 'Spring over Notifikationer',
    ),
    'labels' =>
    array (
      'Create EmailFolder' => 'Opret Mappe',
      'Manage Folders' => 'Administrer Mapper',
      'Emails' => 'Emails',
    ),
  ),
  'EmailTemplate' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'isHtml' => 'Er Html',
      'body' => 'Indhold',
      'subject' => 'Emne',
      'attachments' => 'Vedhæftet',
      'insertField' => 'Indsæt Felt',
      'oneOff' => 'Kun en gang',
      'category' => 'Category',
    ),
    'links' =>
    array (
    ),
    'labels' =>
    array (
      'Create EmailTemplate' => 'Opret Emailskabelon',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' =>
    array (
      'infoText' => 'Tilgængelige variabler:

{optOutUrl} &#8211; URL til afmeldingslink

{optOutLink} &#8211; afmeldingslink',
    ),
    'tooltips' =>
    array (
      'oneOff' => 'Check hvis du kun skal bruge denne skabelon en enkelt gang. F.eks. til masse-email.',
    ),
    'presetFilters' =>
    array (
      'actual' => 'Aktuel',
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
      'Fields' => 'Felter',
      'Relationships' => 'Relationer',
      'Schedule' => 'Planlæg',
      'Log' => 'Log',
      'Formula' => 'Formel',
    ),
    'fields' =>
    array (
      'name' => 'Navn',
      'type' => 'Type',
      'labelSingular' => 'Betegnelse Ental',
      'labelPlural' => 'Betegnelse Flertal',
      'stream' => 'aktiviteter',
      'label' => 'Betegnelse',
      'linkType' => 'Relationsype',
      'entityForeign' => 'Fremmedentitet',
      'linkForeign' => 'Fremmedlink',
      'link' => 'Link',
      'labelForeign' => 'Fremmedbetegnelse',
      'sortBy' => 'Standard Sortering (Felt)',
      'sortDirection' => 'Standard Sortering (Rækkefølge)',
      'relationName' => 'Midterste Tabelnavn',
      'linkMultipleField' => 'Link flere Felter',
      'linkMultipleFieldForeign' => 'Fremmedlink flere Felter',
      'disabled' => 'Inaktiv',
      'textFilterFields' => 'Tekstfilter Felter',
      'audited' => 'Revideret',
      'auditedForeign' => 'Revideret af udenforstående',
      'statusField' => 'Statusfelt',
      'beforeSaveCustomScript' => 'Før Lagring af Brugerdefineret Script',
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
        '' => 'Ingen',
        'Base' => 'Basis',
        'Person' => 'Person',
        'CategoryTree' => 'Kategoritræ',
        'Event' => 'Begivenhed',
        'BasePlus' => 'Base Plus',
        'Company' => 'Firma',
      ),
      'linkType' =>
      array (
        'manyToMany' => 'n:n',
        'oneToMany' => '1:n',
        'manyToOne' => 'n:1',
        'parentToChildren' => 'Forældre til Børn',
        'childrenToParent' => 'Børn til Forældre',
      ),
      'sortDirection' =>
      array (
        'asc' => 'Stigende',
        'desc' => 'Faldende',
      ),
    ),
    'messages' =>
    array (
      'entityCreated' => 'Entitet er oprettet',
      'linkAlreadyExists' => 'Navnekonflikt i Link',
      'linkConflict' => 'Navnekonflikt i Link eller Felt med samme navn eksisterer allerede.',
    ),
    'tooltips' =>
    array (
      'statusField' => 'Opdateringer af dette felt bliver logget i listen',
      'textFilterFields' => 'Felter brugt af tekstsøgning',
      'stream' => 'hvorvidt entiteten har en Liste',
      'disabled' => 'Marker hvis du ikke behøver denne entitet i dit system.',
      'linkAudited' => 'Oprettelse af relaterede poster og sammenkædning med eksisterende poster bliver logget i Listen.',
      'linkMultipleField' => '\'Forbind-Flere\'-feltet er en bekvem måde at redigere relationer. Brug den ikke, hvis du har markeret et stort antal relaterede poster.',
      'entityType' => 'Base Plus - har Aktivitets-, historiks- og opgavepaneler.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' =>
  array (
    'fields' =>
    array (
      'exportAllFields' => 'Export all fields',
      'fieldList' => 'Feltliste',
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
      'name' => 'Navn',
      'version' => 'Version',
      'description' => 'Beskrivelse',
      'isInstalled' => 'Installeret',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' =>
    array (
      'Uninstall' => 'Afinstaller',
      'Install' => 'Installer',
    ),
    'messages' =>
    array (
      'uninstalled' => 'Udvidelse {name} er blevet afinstalleret',
    ),
  ),
  'ExternalAccount' =>
  array (
    'labels' =>
    array (
      'Connect' => 'Forbind',
      'Connected' => 'Forbundet',
    ),
    'help' =>
    array (
    ),
  ),
  'FieldManager' =>
  array (
    'labels' =>
    array (
      'Dynamic Logic' => 'Dynamisk Logik',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' =>
    array (
      'dateTimeDefault' =>
      array (
        '' => 'Ingen',
        'javascript: return this.dateTime.getNow(1);' => 'Nu',
        'javascript: return this.dateTime.getNow(5);' => 'Nu (5 min)',
        'javascript: return this.dateTime.getNow(15);' => 'Nu (15 min)',
        'javascript: return this.dateTime.getNow(30);' => 'Nu (30 min)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 time',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 timer',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 dag',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dage',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 uge',
      ),
      'dateDefault' =>
      array (
        '' => 'Ingen',
        'javascript: return this.dateTime.getToday();' => 'Idag',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 dag',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dage',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 uge',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 uger',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 uger',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 måned',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 måneder',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 år',
      ),
    ),
    'tooltips' =>
    array (
      'audited' => 'Opdateringer bliver logget i listen',
      'required' => 'Feltet vil være påkrævet. Kan ikke efterlades tomt.',
      'default' => 'Værdien vil blive sat som standard ved ny oprettelse',
      'min' => 'Mindste accepterede værdi',
      'max' => 'Højeste accepterede værdi.',
      'seeMoreDisabled' => 'Skal markeres hvis lange tekster ikke skal afkortes.',
      'lengthOfCut' => 'Hvor lang en tekst kan være, før den afkortes.',
      'maxLength' => 'Højest accepterede tekstlængde',
      'before' => 'Datoværdien må ikke være tidligere end datoeværdien i det angivne felt.',
      'after' => 'Datoværdien skal være senere end datoværdien i det angivne felt.',
      'readOnly' => 'Feltværdien kan ikke angives af brugeren, men beregnes gennem formel.',
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
      'User' => 'Bruger',
      'Team' => 'Team',
      'Role' => 'Rolle',
      'EmailTemplate' => 'Emailskabelon',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personlig Emailkonto',
      'EmailAccountScope' => 'Personlig Emailkonto',
      'OutboundEmail' => 'Udgående Email',
      'ScheduledJob' => 'Planlagt Job',
      'ExternalAccount' => 'Ekstern Konto',
      'Extension' => 'Udvidelse',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gruppe Emailkonto',
      'Stream' => 'Aktiviteter',
      'Import' => 'Import',
      'Template' => 'Skabelon',
      'Job' => 'Job',
      'EmailFilter' => 'Email Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Rolle',
      'Attachment' => 'Vedhæftet',
      'EmailFolder' => 'Emailmappe',
      'PortalUser' => 'Portalbruger',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Sidst set',
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
      'Account' => 'Konto',
      'Contact' => 'Kontakt',
      'Lead' => 'Lead',
      'Target' => 'Mål',
      'Opportunity' => 'Mulighed',
      'Meeting' => 'Møde',
      'Calendar' => 'Kalender',
      'Call' => 'Opkald',
      'Task' => 'Opgave',
      'Case' => 'Sag',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Dokumentmappe',
      'Campaign' => 'Kampagne',
      'TargetList' => 'Kontaktliste',
      'MassEmail' => 'Masse-Email',
      'EmailQueueItem' => 'Emne i Email-Kø',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Aktiviteter',
      'KnowledgeBaseArticle' => 'Vidensbase Artikel',
      'KnowledgeBaseCategory' => 'Vidensbase Kategori',
      'CampaignLogRecord' => 'Kampagnelog Post',
      'Formularios' => 'Formulario',
      'Solicitudes' => 'Solicitudes',
      'Categoria' => 'Categoria',
      'Subcategoria' => 'Subcategoria',
      'Empresa' => 'Empresa',
      'Trabajador' => 'Trabajador',
      'Beneficios' => 'Beneficios',
      'DoctosBeneficio' => 'Doctos_beneficio',
      'Ciudad' => 'Ciudad',
      'Comuna' => 'Comuna',
      'Proveedor' => 'Proveedor',
      'Rol' => 'Rol',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' =>
    array (
      'Email' => 'Emails',
      'User' => 'Brugere',
      'Team' => 'Teams',
      'Role' => 'Roller',
      'EmailTemplate' => 'Emailskabeloner',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personlige Emailkonti',
      'EmailAccountScope' => 'Personlige Emailkonti',
      'OutboundEmail' => 'Udgående Emails',
      'ScheduledJob' => 'Planlagte Jobs',
      'ExternalAccount' => 'Eksterne Konti',
      'Extension' => 'Udvidelser',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gruppe Emailkonti',
      'Stream' => 'Aktiviteter',
      'Import' => 'Importresultater',
      'Template' => 'Skabeloner',
      'Job' => 'Jobs',
      'EmailFilter' => 'Email Filtre',
      'Portal' => 'Portaler',
      'PortalRole' => 'Portal Roller',
      'Attachment' => 'Vedhæftede',
      'EmailFolder' => 'Emailmapper',
      'PortalUser' => 'Portalbrugere',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Sidst set',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Konti',
      'Contact' => 'Kontakter',
      'Lead' => 'Leads',
      'Target' => 'Mål',
      'Opportunity' => 'Muligheder',
      'Meeting' => 'Møder',
      'Calendar' => 'Kalender',
      'Call' => 'Opkald',
      'Task' => 'Opgaver',
      'Case' => 'Sager',
      'Document' => 'Dokumenter',
      'DocumentFolder' => 'Dokumentmapper',
      'Campaign' => 'Kampagner',
      'TargetList' => 'Kontaktlister',
      'MassEmail' => 'Masse-Emails',
      'EmailQueueItem' => 'Emner i Email-Kø',
      'CampaignTrackingUrl' => 'Tracking URL\'er',
      'Activities' => 'Aktiviteter',
      'KnowledgeBaseArticle' => 'Vidensbase',
      'KnowledgeBaseCategory' => 'Vidensbase Kategorier',
      'CampaignLogRecord' => 'Kampagnelog Post',
      'Formularios' => 'Formularios',
      'Solicitudes' => 'Solicitudes',
      'Categoria' => 'Categorias',
      'Subcategoria' => 'Subcategorias',
      'Empresa' => 'Empresas',
      'Trabajador' => 'Trabajadores',
      'Beneficios' => 'Beneficios',
      'DoctosBeneficio' => 'Doctos_beneficios',
      'Ciudad' => 'Ciudads',
      'Comuna' => 'Comunas',
      'Proveedor' => 'Proveedors',
      'Rol' => 'Rols',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' =>
    array (
      'Misc' => 'Forskellige',
      'Merge' => 'Sammenfør',
      'None' => 'Ingen',
      'Home' => 'Hjem',
      'by' => 'af',
      'Saved' => 'Gemt',
      'Error' => 'Fejl',
      'Select' => 'Vælg',
      'Not valid' => 'Ikke gyldig',
      'Please wait...' => 'Vent venligst',
      'Please wait' => 'Vent venligst',
      'Loading...' => 'Arbejder...',
      'Uploading...' => 'Uploader...',
      'Sending...' => 'Sender...',
      'Merging...' => 'Sammenfører...',
      'Merged' => 'Sammenført...',
      'Removed' => 'Fjernet',
      'Posted' => 'Bogført',
      'Linked' => 'Linket',
      'Unlinked' => 'Link slettet',
      'Done' => 'Færdig',
      'Access denied' => 'Adgang nægtet',
      'Not found' => 'Ikke fundet',
      'Access' => 'Adgang',
      'Are you sure?' => 'Er du sikker?',
      'Record has been removed' => 'Optegnelse er slettet',
      'Wrong username/password' => 'Forkert Brugernavn/Kodeord',
      'Post cannot be empty' => 'Post kan ikke være tom',
      'Removing...' => 'Fjerner...',
      'Unlinking...' => 'Sletter Link...',
      'Posting...' => 'Bogfører...',
      'Username can not be empty!' => 'Brugernavn skal udfyldes!',
      'Cache is not enabled' => 'Cache er ikke aktiv',
      'Cache has been cleared' => 'Cache er tømt',
      'Rebuild has been done' => 'Genopbygning er udført',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Gemmer...',
      'Modified' => 'Ændret',
      'Created' => 'Oprettet',
      'Create' => 'Opret',
      'create' => 'opret',
      'Overview' => 'Overblik',
      'Details' => 'Detaljer',
      'Add Field' => 'Tilføj Felt',
      'Add Dashlet' => 'Tilføj Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Rediger Dashboard',
      'Add' => 'Tilføj',
      'Add Item' => 'Tilføj emne',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Mere',
      'Search' => 'Søg',
      'Only My' => 'Kun min',
      'Open' => 'Åben',
      'Admin' => 'Admin',
      'About' => 'Om',
      'Refresh' => 'Opdater',
      'Remove' => 'Fjern',
      'Options' => 'Muligheder',
      'Username' => 'Brugernavn',
      'Password' => 'Kodeord',
      'Login' => 'Login',
      'Log Out' => 'Log Ud',
      'Preferences' => 'Brugerindstillinger',
      'State' => 'State',
      'Street' => 'Gade',
      'Country' => 'Land',
      'City' => 'By',
      'PostalCode' => 'Postnummer',
      'Followed' => 'Abonneret',
      'Follow' => 'Abonner',
      'Followers' => 'Abonnenter',
      'Clear Local Cache' => 'Tøm Lokal Cache',
      'Actions' => 'Handlinger',
      'Delete' => 'Slet',
      'Update' => 'Opdater',
      'Save' => 'Gem',
      'Edit' => 'Rediger',
      'View' => 'Se',
      'Cancel' => 'Fortryd',
      'Apply' => 'Anvend',
      'Unlink' => 'Slet Link',
      'Mass Update' => 'Masseopdater',
      'Export' => 'Eksporter',
      'No Data' => 'Ingen Data',
      'No Access' => 'Ingen Adgang',
      'All' => 'Alle',
      'Active' => 'Aktiv',
      'Inactive' => 'Inaktiv',
      'Write your comment here' => 'Skriv din kommentar her',
      'Post' => 'Post',
      'Stream' => 'Aktiviteter',
      'Show more' => 'Vis mere',
      'Dashlet Options' => 'Dashlet Muligheder',
      'Full Form' => 'Komplet formular',
      'Insert' => 'Indføj',
      'Person' => 'Person',
      'First Name' => 'Fornavn',
      'Last Name' => 'Efternavn',
      'Original' => 'Original',
      'You' => 'Dig',
      'you' => 'dig',
      'change' => 'ændre',
      'Change' => 'Ændre',
      'Primary' => 'Primær',
      'Save Filter' => 'Gem Filter',
      'Administration' => 'Administration',
      'Run Import' => 'Kør Import',
      'Duplicate' => 'Dupliker',
      'Notifications' => 'Notifikationer',
      'Mark all read' => 'Marker alle som Læst',
      'See more' => 'Se mere',
      'Today' => 'Idag',
      'Tomorrow' => 'I morgen',
      'Yesterday' => 'I går',
      'Submit' => 'Udfør',
      'Close' => 'Luk',
      'Yes' => 'Ja',
      'No' => 'Nej',
      'Select All Results' => 'Select All Results',
      'Value' => 'Værdi',
      'Current version' => 'Nuværende version',
      'List View' => 'Listevisning',
      'Tree View' => 'Trævisning',
      'Unlink All' => 'Fjern alle Link',
      'Total' => 'I Alt',
      'Print to PDF' => 'Print til PDF',
      'Default' => 'Standard',
      'Number' => 'Nummer',
      'From' => 'Fra',
      'To' => 'Til',
      'Create Post' => 'Opret Post',
      'Previous Entry' => 'Tidligere Indtastning',
      'Next Entry' => 'Næste Indtastning',
      'View List' => 'Listevisning',
      'Attach File' => 'Vedhæft Fil',
      'Skip' => 'Spring over',
      'Attribute' => 'Attribut',
      'Function' => 'Funktion',
      'Self-Assign' => 'Tildel til mig selv',
      'Self-Assigned' => 'Tildelt til mig selv',
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
      'Create InboundEmail' => 'Opret Indkommende Email',
      'Activities' => 'Aktiviteter',
      'History' => 'Historik',
      'Attendees' => 'Deltagere',
      'Schedule Meeting' => 'Planlæg Møde',
      'Schedule Call' => 'Planlæg Opkald',
      'Compose Email' => 'Skriv Email',
      'Log Meeting' => 'Log møde',
      'Log Call' => 'Logge Opkald',
      'Archive Email' => 'Arkiver Email',
      'Create Task' => 'Opret Opgave',
      'Tasks' => 'Opgaver',
    ),
    'messages' =>
    array (
      'pleaseWait' => 'Vent venligst',
      'posting' => 'Sender...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Er du sikker på, at du vil forlade formularen',
      'notModified' => 'Du har ikke foretaget nogen ændringer i posten',
      'duplicate' => 'Posten du opretter eksisterer måske allerede.',
      'dropToAttach' => 'Træk og Slip for at vedhæftede',
      'fieldIsRequired' => ' {field} er nødvendigt',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field} skal være efter {otherField}',
      'fieldShouldBefore' => '{field} skal være før {otherField}',
      'fieldShouldBeBetween' => '{field} skal være mellem {min} og {max}',
      'fieldShouldBeLess' => '{field} skal være mindre end {value}',
      'fieldShouldBeGreater' => '{field} skal være større end {value}',
      'fieldBadPasswordConfirm' => '{field} ikke bekræftet korrekt',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Indstillinger er nulstillet til standard',
      'confirmation' => 'Er du sikker?',
      'unlinkAllConfirmation' => 'Er du sikker på, at du vil fjerne link til alle relaterede poster?',
      'resetPreferencesConfirmation' => 'Er du sikker på, at du vil nulstille indstillinger til standard?',
      'removeRecordConfirmation' => 'Er du sikker på, at du vil fjerne posten?',
      'unlinkRecordConfirmation' => 'Er du sikker på, at du vil fjerne linket til den relaterede post?',
      'removeSelectedRecordsConfirmation' => 'Er du sikker på, at du vil fjerne de valgte poster?',
      'massUpdateResult' => '{count} poster er opdaterede ',
      'massUpdateResultSingle' => '{count} post er opdateret ',
      'noRecordsUpdated' => 'Ingen poster blev opdateret',
      'massRemoveResult' => '{count} poster er blevet fjernet ',
      'massRemoveResultSingle' => '{count} post er blevet fjernet ',
      'noRecordsRemoved' => 'Ingen poster blev fjernet',
      'clickToRefresh' => 'Klik for opdatering',
      'streamPostInfo' => 'Skriv <strong>@username</strong> for at nævne brugere i posten

Tilgængelig syntax:
`<code>kode</code>`
**<strong>fed tekst</strong>**
*<em>markeret tekst</em>*
~<del>gennemstreget tekst</del>~
> blokcitering
[link text](url) ',
      'writeYourCommentHere' => 'Skriv din kommentar her',
      'writeMessageToUser' => 'Skriv meddelelse til {user}',
      'writeMessageToSelf' => 'Skriv en meddelelse på din liste.',
      'typeAndPressEnter' => 'Skriv & tryk enter',
      'checkForNewNotifications' => 'Kontroller for nye notifikationer',
      'checkForNewNotes' => 'Tjek for listeopdateringer.',
      'internalPost' => 'Posten vil kun kunne ses af interne brugere.',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Færdig',
      'confirmMassFollow' => 'Er du sikker på, at du vil følge de valgte poster.',
      'confirmMassUnfollow' => 'Er du sikker på, at du vil stoppe med at følge de valgte poster.',
      'massFollowResult' => '{count} poster følges nu.',
      'massUnfollowResult' => '{count} poster følges ikke mere',
      'massFollowResultSingle' => '{count} post følges nu.',
      'massUnfollowResultSingle' => '{count} post følges ikke mere.',
      'massFollowZeroResult' => 'Ingenting blev fulgt',
      'massUnfollowZeroResult' => 'Ingenting blev ikke fulgt.',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' =>
    array (
      'onlyMy' => 'Kun Min',
      'followed' => 'Abonneret',
    ),
    'presetFilters' =>
    array (
      'followed' => 'Abonneret',
      'all' => 'Alt',
    ),
    'massActions' =>
    array (
      'remove' => 'Fjern',
      'merge' => 'Føj sammen',
      'massUpdate' => 'Masseopdater',
      'export' => 'Eksporter',
      'follow' => 'Følg',
      'unfollow' => 'Følg ikke',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' =>
    array (
      'name' => 'Navn',
      'firstName' => 'Fornavn',
      'lastName' => 'Efternavn',
      'salutationName' => 'Hilsen',
      'assignedUser' => 'Tildelt Bruger',
      'assignedUsers' => 'Tildelte Brugere',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Tildelt Brugernavn',
      'teams' => 'Teams',
      'createdAt' => 'Oprettet',
      'modifiedAt' => 'Ændret ',
      'createdBy' => 'Oprettet af',
      'modifiedBy' => 'Ændret af',
      'description' => 'Beskrivelse',
      'address' => 'Adresse',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Mobil',
      'phoneNumberHome' => 'Telefon (Hjemme)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Kontor)',
      'phoneNumberOther' => 'Telefon (Andet)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Rækkefølge',
      'parent' => 'Overordnet',
      'children' => 'Underordnet',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'By',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'Postnummer',
      'billingAddressState' => 'Stat',
      'billingAddressStreet' => 'Gade',
      'billingAddressMap' => 'Kort',
      'addressCity' => 'By',
      'addressStreet' => 'Gade',
      'addressCountry' => 'Land',
      'addressState' => 'Stat',
      'addressPostalCode' => 'Postnummer',
      'addressMap' => 'Kort',
      'shippingAddressCity' => 'By (Levering)',
      'shippingAddressStreet' => 'Gade (Levering)',
      'shippingAddressCountry' => 'Land (Levering)',
      'shippingAddressState' => 'Stat (Levering)',
      'shippingAddressPostalCode' => 'Postnummer (Levering)',
      'shippingAddressMap' => 'Kort (Levering)',
    ),
    'links' =>
    array (
      'assignedUser' => 'Tildelt Bruger',
      'createdBy' => 'Oprettet af',
      'modifiedBy' => 'Ændret af',
      'team' => 'Team',
      'roles' => 'Roller',
      'teams' => 'Teams',
      'users' => 'Brugere',
      'parent' => 'Overordnet',
      'children' => 'Underordnet',
      'contacts' => 'Kontakter',
      'opportunities' => 'Muligheder',
      'leads' => 'Leads',
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'emails' => 'Emails',
      'accounts' => 'Konti',
      'cases' => 'Sager',
      'documents' => 'Dokumenter',
      'account' => 'Konto',
      'opportunity' => 'Mulighed',
      'contact' => 'Kontakt',
    ),
    'dashlets' =>
    array (
      'Stream' => 'Aktiviteter',
      'Emails' => 'Min Indbakke',
      'Records' => 'Record List',
      'Leads' => 'Mine Leads',
      'Opportunities' => 'Mine Muligheder',
      'Tasks' => 'Mine Opgaver',
      'Cases' => 'Mine Opgaver',
      'Calendar' => 'Kalender',
      'Calls' => 'Mine Opkald',
      'Meetings' => 'Mine Møder',
      'OpportunitiesByStage' => 'Muligheder efter Stadie',
      'OpportunitiesByLeadSource' => 'Muligheder efter Lead Kilde',
      'SalesByMonth' => 'Salg pr. Måned',
      'SalesPipeline' => 'Salgspipeline',
      'Activities' => 'Mine Aktiviteter',
    ),
    'notificationMessages' =>
    array (
      'assign' => '{entityType} {entity} er oprettet til dig',
      'emailReceived' => 'Email modtaget fra {from}',
      'entityRemoved' => '
 {user} fjernede {entityType} {entity} ',
    ),
    'streamMessages' =>
    array (
      'post' => '{user} har noteret på {entityType} {entity}',
      'attach' => '{user} vedhæftede på {entityType} {entity}',
      'status' => '{user} opdaterede {field} i {entityType} {entity}',
      'update' => '{user} opdaterede {entityType} {entity}',
      'postTargetTeam' => '{user} skrev til team {target}',
      'postTargetTeams' => '{user} skrev til teams {target}',
      'postTargetPortal' => '{user} skrev til portal {target}',
      'postTargetPortals' => '{user} skrev til portaler {target}',
      'postTarget' => '{user} skrev til {target}',
      'postTargetYou' => '{user} skrev til dig',
      'postTargetYouAndOthers' => '{user} skrev til {target} og dig',
      'postTargetAll' => '{user} skrev til alle',
      'postTargetSelf' => '{user} har skrevet til sig selv.',
      'postTargetSelfAndOthers' => '{user} skrev til {target} og sig selv.',
      'mentionInPost' => '{user} nævnte {mentioned} i {entityType} {entity}',
      'mentionYouInPost' => '{user} nævnte dig i {entityType} {entity}',
      'mentionInPostTarget' => '{user} nævnte {mentioned} i besked',
      'mentionYouInPostTarget' => '{user} nævnte dig i besked til {target}',
      'mentionYouInPostTargetAll' => '{user} nævnte dig i besked til alle',
      'mentionYouInPostTargetNoTarget' => '{user} nævnte dig i besked',
      'create' => '{user} oprettede {entityType} {entity}',
      'createThis' => '{user} oprettede denne {entityType}',
      'createAssignedThis' => '{user} oprettede denne {entityType} tildelt {assignee}',
      'createAssigned' => '{user} oprettede {entityType} {entity} tildelt {assignee}',
      'createAssignedYou' => '{user} oprettede {entityType} {entity} og teldelte den til dig.',
      'createAssignedThisSelf' => '{user} oprettede denne {entityType} tildelt til sig selv.',
      'createAssignedSelf' => '{user} oprettede {entityType} {entity} tildelt til sig selv.',
      'assign' => '{user} oprettede {entityType} {entity} til {assignee}',
      'assignThis' => '{user} tildelte {assignee} denne {entityType} ',
      'assignYou' => '{user}tildelte{entityType} {entity} til dig.',
      'assignThisVoid' => '{user} fjernede tildelingen til {entityType}',
      'assignVoid' => '{user} fjernede tildelingen til {entityType} {entity}',
      'assignThisSelf' => '{user} tildelte sig selv denne {entityType}',
      'assignSelf' => '{user} tildelte sig selv {entityType} {entity}',
      'postThis' => '{user} noterede',
      'attachThis' => '{user} vedhæftede',
      'statusThis' => '{user} opdaterede {field}',
      'updateThis' => '{user} opdaterede denne {entityType}',
      'createRelatedThis' => '{user} oprettede {relatedEntityType} {relatedEntity} relateret til denne {entityType} ',
      'createRelated' => '{user} oprettede {relatedEntityType} {relatedEntity} relateret til {entityType} {entity} ',
      'relate' => '{user} linkede {relatedEntityType} {relatedEntity} med {entityType} {entity} ',
      'relateThis' => '{user} linkede {relatedEntityType} {relatedEntity} med denne {entityType} ',
      'emailReceivedFromThis' => 'Email modtaget fra {from} ',
      'emailReceivedInitialFromThis' => 'Email modtaget fra {from}, denne {entityType} oprettet',
      'emailReceivedThis' => 'Email modtaget',
      'emailReceivedInitialThis' => 'Email modtaget, denne {entityType} er oprettet',
      'emailReceivedFrom' => 'Email modtaget fra {from}, relateret til {entityType} {entity} ',
      'emailReceivedFromInitial' => 'Email modtaget fra {from}, {entityType} {entity} oprettet',
      'emailReceived' => 'Email modtaget relateret til, {entityType} {entity}',
      'emailReceivedInitial' => '
 Emailmodtaget: {entityType} {entity} oprettet',
      'emailReceivedInitialFrom' => 'Email modtaget fra {from}, {entityType} {entity} oprettet',
      'emailSent' => '{by} har sendt email relateret til {entityType} {entity}',
      'emailSentThis' => '{by} har sendt email',
    ),
    'streamMessagesMale' =>
    array (
      'postTargetSelfAndOthers' => '{user} sendte til {target} og sig selv',
    ),
    'streamMessagesFemale' =>
    array (
      'postTargetSelfAndOthers' => '{user} sendte til {target} og sig selv',
    ),
    'lists' =>
    array (
      'monthNames' =>
      array (
        0 => 'Januar',
        1 => 'Februar',
        2 => 'Marts',
        3 => 'April',
        4 => 'Maj',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'August',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' =>
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Maj',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' =>
      array (
        0 => 'Søndag',
        1 => 'Mandag',
        2 => 'Tirsdag',
        3 => 'Onsdag',
        4 => 'Torsdag',
        5 => 'Fredag',
        6 => 'Lørdag',
      ),
      'dayNamesShort' =>
      array (
        0 => 'Søn',
        1 => 'Man',
        2 => 'Tir',
        3 => 'Ons',
        4 => 'Tor',
        5 => 'Fre',
        6 => 'Lør',
      ),
      'dayNamesMin' =>
      array (
        0 => 'Sø',
        1 => 'Ma',
        2 => 'Ti',
        3 => 'On',
        4 => 'To',
        5 => 'Fr',
        6 => 'Lø',
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
        'Mr.' => 'Hr.',
        'Mrs.' => 'Fr.',
        'Ms.' => 'Fr.',
        'Dr.' => 'Dr.',
      ),
      'language' =>
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Aserbajdsjansk',
        'be_BY' => 'Hviderussisk',
        'bg_BG' => 'Bulgarsk',
        'bn_IN' => 'Bengalsk',
        'bs_BA' => 'Bosnisk',
        'ca_ES' => 'Catalansk',
        'cs_CZ' => 'Tjekkisk',
        'cy_GB' => 'Walisisk',
        'da_DK' => 'Dansk',
        'de_DE' => 'Tysk',
        'el_GR' => 'Græsk',
        'en_GB' => 'Engelsk (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'Engelsk (US)',
        'es_ES' => 'Spansk (Spanien)',
        'et_EE' => 'Estisk',
        'eu_ES' => 'Baskisk',
        'fa_IR' => 'Persisk',
        'fi_FI' => 'Finsk',
        'fo_FO' => 'Færøsk',
        'fr_CA' => 'Fransk (Canada)',
        'fr_FR' => 'Fransk (Frankrig)',
        'ga_IE' => 'Irsk',
        'gl_ES' => 'Galicisk',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebræisk',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Kroatisk',
        'hu_HU' => 'Ungarsk',
        'hy_AM' => 'Armensk',
        'id_ID' => 'Indonesisk',
        'is_IS' => 'Islandsk',
        'it_IT' => 'Italiensk',
        'ja_JP' => 'Japansk',
        'ka_GE' => 'Georgisk',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreansk',
        'ku_TR' => 'Kurdisk',
        'lt_LT' => 'Lithauisk',
        'lv_LV' => 'Lettisk',
        'mk_MK' => 'Makedonsk',
        'ml_IN' => 'Malayalam ',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norsk Bokmål',
        'nn_NO' => 'Norsk Nynorsk',
        'ne_NP' => 'Nepalesisk',
        'nl_NL' => 'Hollandsk',
        'pa_IN' => 'Punjab',
        'pl_PL' => 'Polsk',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugisisk (Brasilien)',
        'pt_PT' => 'Portugisisk (Portugal)',
        'ro_RO' => 'Rumænsk',
        'ru_RU' => 'Russisk',
        'sk_SK' => 'Slovakisk',
        'sl_SI' => 'Slovensk',
        'sq_AL' => 'Albansk',
        'sr_RS' => 'Serbisk',
        'sv_SE' => 'Svensk',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamilsk',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Tyrkisk',
        'uk_UA' => 'Ukrainsk',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamesisk',
        'zh_CN' => 'Forenklet kinesisk (Kina)',
        'zh_HK' => 'Traditionel kinesisk (Hong Kong)',
        'zh_TW' => 'Traditionel kinesisk (Taiwan)',
      ),
      'dateSearchRanges' =>
      array (
        'on' => 'On',
        'notOn' => 'Not On',
        'after' => 'Efter',
        'before' => 'Før',
        'between' => 'Mellem',
        'today' => 'Idag',
        'past' => 'Fortid',
        'future' => 'Fremtid',
        'currentMonth' => 'Indeværende Måned',
        'lastMonth' => 'Sidste Måned',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Indeværende Kvartal',
        'lastQuarter' => 'Sidste Kvartal',
        'currentYear' => 'Indeværende År',
        'lastYear' => 'Sidste År',
        'lastSevenDays' => 'Sidste 7 Dage',
        'lastXDays' => 'Sidste X Dage',
        'nextXDays' => 'Næste X Dage',
        'ever' => 'For evigt',
        'isEmpty' => 'Er Tom',
        'olderThanXDays' => 'Ældre End X Dage',
        'afterXDays' => 'Efter X Dage',
      ),
      'searchRanges' =>
      array (
        'is' => 'Er',
        'isEmpty' => 'Er Tom',
        'isNotEmpty' => 'Er Ikke Tom',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Er Fra Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' =>
      array (
        'equals' => 'Er Lig Med',
        'like' => 'Som (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Begynder Med',
        'endsWith' => 'Ender Med',
        'contains' => 'Indeholder',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Er Tom',
        'isNotEmpty' => 'Er Ikke Tom',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' =>
      array (
        'equals' => 'Lig Med',
        'notEquals' => 'Ikke Lig Med',
        'greaterThan' => 'Større End',
        'lessThan' => 'Mindre End',
        'greaterThanOrEquals' => 'Større End eller Lig Med',
        'lessThanOrEquals' => 'Mindre End eller Lig Med',
        'between' => 'Mellem',
        'isEmpty' => 'Er Tom',
        'isNotEmpty' => 'Er Ikke Tom',
      ),
      'autorefreshInterval' =>
      array (
        0 => 'Ingen',
        '0.5' => '30 sekunder',
        1 => '1 minut',
        2 => '2 minutter',
        5 => '5 minutter',
        10 => '10 minutter',
      ),
      'phoneNumber' =>
      array (
        'Mobile' => 'Mobil',
        'Office' => 'Kontor',
        'Fax' => 'Fax',
        'Home' => 'Hjemme',
        'Other' => 'Andet',
      ),
      'reminderTypes' =>
      array (
        'Popup' => 'Popup',
        'Email' => 'Email',
      ),
    ),
    'sets' =>
    array (
      'summernote' =>
      array (
        'NOTICE' => 'Du kan finde oversættelse her:
https://github.com/HackerWins/summernote/tree/master/lang',
        'font' =>
        array (
          'bold' => 'Fed',
          'italic' => 'Kursiv',
          'underline' => 'Understreget',
          'strike' => 'Gennemstreget',
          'clear' => 'Fjern Font Style',
          'height' => 'Linjehøjde',
          'name' => 'Font Family',
          'size' => 'Font størrelse',
        ),
        'image' =>
        array (
          'image' => 'Billede',
          'insert' => 'Indsæt Billede',
          'resizeFull' => 'Originalstørrelse',
          'resizeHalf' => 'Halv størrelse',
          'resizeQuarter' => 'Kvart størrelse',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Træk et billede hertil',
          'selectFromFiles' => 'Vælg fra filer',
          'url' => 'Billede URL',
          'remove' => 'Fjern Billede',
        ),
        'link' =>
        array (
          'link' => 'Link',
          'insert' => 'Indsæt Link',
          'unlink' => 'Fjern Link',
          'edit' => 'Rediger',
          'textToDisplay' => 'Tekst til skærm',
          'url' => 'Hvilken URL skal linket henvise til?',
          'openInNewWindow' => 'Åbn i nyt vindue',
        ),
        'video' =>
        array (
          'video' => 'Video',
          'videoLink' => 'Videolink',
          'insert' => 'Indsæt Video',
          'url' => 'Video URL',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, eller DailyMotion) ',
        ),
        'table' =>
        array (
          'table' => 'Tabel',
        ),
        'hr' =>
        array (
          'insert' => 'Indsæt vandret streg',
        ),
        'style' =>
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Citat',
          'pre' => 'Kildekode',
          'h1' => 'Overskrift 1',
          'h2' => 'Overskrift 2',
          'h3' => 'Overskrift 3',
          'h4' => 'Overskrift 4',
          'h5' => 'Overskrift 5',
          'h6' => 'Overskrift 6',
        ),
        'lists' =>
        array (
          'unordered' => 'Usorteret liste',
          'ordered' => 'Nummereret liste',
        ),
        'options' =>
        array (
          'help' => 'Hjælp',
          'fullscreen' => 'Fuld skærm',
          'codeview' => 'Vis Html-kode',
        ),
        'paragraph' =>
        array (
          'paragraph' => 'Afsnit',
          'outdent' => 'Ryk ud',
          'indent' => 'Ryk ind',
          'left' => 'Venstrestillet',
          'center' => 'Centreret',
          'right' => 'Højrestillet',
          'justify' => 'Lige margener',
        ),
        'color' =>
        array (
          'recent' => 'Sidste farve',
          'more' => 'Mere farve',
          'background' => 'Baggrundsfarve',
          'foreground' => 'Skriftfarve',
          'transparent' => 'Transparent',
          'setTransparent' => 'Vælg transparent',
          'reset' => 'Nulstil',
          'resetToDefault' => 'Nulstil til standard',
        ),
        'shortcut' =>
        array (
          'shortcuts' => 'Tastaturgenveje',
          'close' => 'Luk',
          'textFormatting' => 'Tekstformatering',
          'action' => 'Handling',
          'paragraphFormatting' => 'Afsnitsformatering',
          'documentStyle' => 'Domumentstil',
        ),
        'history' =>
        array (
          'undo' => 'Fortryd',
          'redo' => 'Gendan',
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
      'EspoRtl' => 'Højre-Venstre Espo',
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo m/ sidemenu',
      'SakuraVertical' => 'Sakura M/ sidemenu',
      'Violet' => 'Violet',
      'VioletVertical' => 'Violet m/ sidemenu',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue m/ sidemenu',
    ),
  ),
  'Import' =>
  array (
    'labels' =>
    array (
      'Revert Import' => 'Fortryd Import',
      'Return to Import' => 'Gå tilbage til Import',
      'Run Import' => 'Kør Import',
      'Back' => 'Tilbage',
      'Field Mapping' => 'Mapning af Felter',
      'Default Values' => 'Standard værdier',
      'Add Field' => 'Tilføj Felt',
      'Created' => 'Oprettet',
      'Updated' => 'Opdateret',
      'Result' => 'Resultat',
      'Show records' => 'Vis Poster',
      'Remove Duplicates' => 'Fjern Dubletter',
      'importedCount' => 'Importeret (Antal)',
      'duplicateCount' => 'Dubletter (Antal)',
      'updatedCount' => 'Opdateret (Antal)',
      'Create Only' => 'Opret Kun',
      'Create and Update' => 'Opret og Opdater',
      'Update Only' => 'Opdater Kun',
      'Update by' => 'Opdateret af',
      'Set as Not Duplicate' => 'Marker som Ikke Dublet',
      'File (CSV)' => 'Fil (CSV)',
      'First Row Value' => 'Værdi første række',
      'Skip' => 'Spring over',
      'Header Row Value' => 'Værdi Overskriftsrække',
      'Field' => 'Felt',
      'What to Import?' => 'Hvad skal Importeres',
      'Entity Type' => 'Entitetstype',
      'What to do?' => 'Hvad skal gøres',
      'Properties' => 'Egenskaber',
      'Header Row' => 'Overskriftsrække',
      'Person Name Format' => 'Personnavn format',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Feltafgrænser',
      'Date Format' => 'Datoformat',
      'Decimal Mark' => 'Decimaltegn',
      'Text Qualifier' => 'Tekstbegrænser',
      'Time Format' => 'Tidsformat',
      'Currency' => 'Valuta',
      'Preview' => 'Eksempel',
      'Next' => 'Næste',
      'Step 1' => 'Trin 1',
      'Step 2' => 'Trin 2',
      'Double Quote' => 'Dobbelte Anførselstegn',
      'Single Quote' => 'Enkelte Anførselstegn',
      'Imported' => 'Importeret',
      'Duplicates' => 'Dubletter',
      'Skip searching for duplicates' => 'Drop søgning efter dubletter',
      'Timezone' => 'Tidszone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' =>
    array (
      'utf8' => 'Kodning skal være UTF-8',
      'duplicatesRemoved' => 'Dubletter fjernet',
      'inIdle' => 'Kør når kapacitet er ledig. (for store datamængder via cron)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' =>
    array (
      'file' => 'Fil',
      'entityType' => 'Entitetstype',
      'imported' => 'Imprterede Poster',
      'duplicates' => 'Dobbelte Poster',
      'updated' => 'Opdaterede Poster',
      'status' => 'Status',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Failed' => 'Fejlet',
        'In Process' => 'Behandles',
        'Complete' => 'Fuldført',
      ),
    ),
  ),
  'InboundEmail' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'emailAddress' => 'Imailadresse',
      'team' => 'Målteam',
      'status' => 'Status',
      'assignToUser' => 'Tildel til Bruger',
      'host' => 'Vært',
      'username' => 'Brugernavn',
      'password' => 'Kodeord',
      'port' => 'Port',
      'monitoredFolders' => 'Overvågede Mapper',
      'trashFolder' => 'Papirkurv',
      'ssl' => 'SSL',
      'createCase' => 'Opret Sag',
      'reply' => 'Autosvar',
      'caseDistribution' => 'Sag Fordeling',
      'replyEmailTemplate' => 'Skabelon Besvar-email',
      'replyFromAddress' => 'Besvar Fra Adresse',
      'replyToAddress' => 'Svar Til Adresse',
      'replyFromName' => 'Svar Fra Navn',
      'targetUserPosition' => 'Position Målgruppe',
      'fetchSince' => 'Hent Siden',
      'addAllTeamUsers' => 'For alle teambrugere',
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
      'reply' => 'Giv afsender besked om, at deres email er modtaget

Kun en email i en bestemt tidsperiode til en modtager for at undgå looping',
      'createCase' => 'Opret automatisk en sag fra indkommende emails',
      'replyToAddress' => 'Angiv denne malbox emailadresse for at modtage svar her.',
      'caseDistribution' => 'Hvordan sager tildeles. Tildelt direkte til brugeren eller til teamet.',
      'assignToUser' => 'Bruger sager bliver tildelt.',
      'team' => 'Team sager bliver tildelt',
      'teams' => 'Teams emails bliver tildelt',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Emails vil kunne ses i alle brugeres indbakke i angivne teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' =>
    array (
      'filters' => 'Filtre',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
      'caseDistribution' =>
      array (
        '' => 'Ingen',
        'Direct-Assignment' => 'Direkte tildeling',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Mindst-Optaget',
      ),
    ),
    'labels' =>
    array (
      'Create InboundEmail' => 'Opret Emailkonto',
      'IMAP' => 'IMAP',
      'Actions' => 'Handlinger',
      'Main' => 'Main',
    ),
    'messages' =>
    array (
      'couldNotConnectToImap' => 'Kunne ikke forbinde til IMAPserver',
    ),
  ),
  'Integration' =>
  array (
    'fields' =>
    array (
      'enabled' => 'Aktiv',
      'clientId' => 'Klient ID',
      'clientSecret' => 'Hemmelig Klient',
      'redirectUri' => 'Omdiriger URL',
      'apiKey' => 'API Nøgle',
    ),
    'titles' =>
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' =>
    array (
      'selectIntegration' => 'Vælg en integration fra menu',
      'noIntegrations' => 'Ingen integration til rådighed',
    ),
    'help' =>
    array (
      'Google' => '<p><b>Hent OAuth 2.0 credentials fra Google Developers Console.</b></p><p>Besøg <a href="https://console.developers.google.com/project">Google Developers Console</a> for at hente OAuth 2.0 credentials såsom Client ID og Hemmelig Client  som er kendt af både Google og EspoCRM applicationen.</p> ',
      'GoogleMaps' => '<p>Hent API nøgle <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">her</a>.</p> ',
    ),
  ),
  'Job' =>
  array (
    'fields' =>
    array (
      'status' => 'Status',
      'executeTime' => 'Udfør når',
      'attempts' => 'Forsøg tilbage',
      'failedAttempts' => 'Fejlede forsøg',
      'serviceName' => 'Service',
      'method' => 'Metode',
      'methodName' => 'Method',
      'scheduledJob' => 'Planlagt job',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Pending' => 'Afventer',
        'Success' => 'Succes',
        'Running' => 'Kører',
        'Failed' => 'Fejlet',
      ),
    ),
  ),
  'LayoutManager' =>
  array (
    'fields' =>
    array (
      'width' => 'Bredde (%)',
      'link' => 'Link',
      'notSortable' => 'Kan ikke sorteres',
      'align' => 'Tilpas',
      'panelName' => 'Panelnavn',
      'style' => 'Stil',
      'sticked' => 'Fæstnet',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' =>
    array (
      'align' =>
      array (
        'left' => 'Venstre',
        'right' => 'Højre',
      ),
      'style' =>
      array (
        'default' => 'Standard',
        'success' => 'Succes',
        'danger' => 'Fare',
        'info' => 'Info',
        'warning' => 'Advarsel',
        'primary' => 'Primær',
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
      'attachments' => 'Vedhæftninger',
      'targetType' => 'Mål',
      'teams' => 'Teams',
      'users' => 'Brugere',
      'portals' => 'Portaler',
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
      'all' => 'Alle',
      'posts' => 'Poster',
      'updates' => 'Opdateringer',
    ),
    'options' =>
    array (
      'targetType' =>
      array (
        'self' => 'til mig selv',
        'users' => 'til bestemt(e) bruger(e)',
        'teams' => 'til bestemt(e) team(s)',
        'all' => 'til alle interne brugere',
        'portals' => 'til portalbrugere',
      ),
      'type' =>
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' =>
    array (
      'writeMessage' => 'Skriv din meddelelse her',
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
      'name' => 'Navn',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roller',
      'isActive' => 'Er Aktiv',
      'isDefault' => 'Er Standard',
      'tabList' => 'Menuvalg',
      'quickCreateList' => 'Opret Liste Hurtigt',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Sprog',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Datoformat',
      'timeFormat' => 'Tidsformat',
      'timeZone' => 'Tidszone',
      'weekStart' => 'Første Dag i Ugen',
      'defaultCurrency' => 'Standardvaluta',
      'customUrl' => 'Brugerdefineret URL',
      'customId' => 'Brugerdefineret ID',
    ),
    'links' =>
    array (
      'users' => 'Brugere',
      'portalRoles' => 'Roller',
      'notes' => 'Notater',
      'articles' => 'Vidensbase Artikler',
    ),
    'tooltips' =>
    array (
      'portalRoles' => 'Specificerede Portalroller som tildeles alle brugere af denne portal',
    ),
    'labels' =>
    array (
      'Create Portal' => 'Opret Portal',
      'User Interface' => 'Brugergrænseflade',
      'General' => 'Almindelig',
      'Settings' => 'Indstillinger',
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
      'users' => 'Brugere',
    ),
    'tooltips' =>
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' =>
    array (
      'Access' => 'Adgang',
      'Create PortalRole' => 'Opret Portalrolle',
      'Scope Level' => 'Adgangsniveau',
      'Field Level' => 'Feltniveau',
    ),
  ),
  'PortalUser' =>
  array (
    'labels' =>
    array (
      'Create PortalUser' => 'Opret Portalbruger',
    ),
  ),
  'Preferences' =>
  array (
    'fields' =>
    array (
      'dateFormat' => 'Datoformat',
      'timeFormat' => 'Tidsformat',
      'timeZone' => 'Tidszone',
      'weekStart' => 'Første Dag i Ugen',
      'thousandSeparator' => 'Tusindtalsseparator',
      'decimalMark' => 'Decimaltegn',
      'defaultCurrency' => 'Standardvaluta',
      'currencyList' => 'Valutaliste',
      'language' => 'Sprog',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sikkerhed',
      'smtpUsername' => 'Brugernavn',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Kodeord',
      'smtpEmailAddress' => 'Emailadresse',
      'exportDelimiter' => 'Eksportbegrænser',
      'receiveAssignmentEmailNotifications' => 'Email notifikationer efter tildeling',
      'receiveMentionEmailNotifications' => 'Email notifikationer når du nævnes i poster.',
      'receiveStreamEmailNotifications' => 'Email notifikationer om post- og statusopdateringer',
      'autoFollowEntityTypeList' => 'Auto-følg',
      'signature' => 'Emailsignatur',
      'dashboardTabList' => 'Menuliste',
      'defaultReminders' => 'Standard for Underretninger',
      'theme' => 'Tema',
      'useCustomTabList' => 'Brugerdefineret Menuliste',
      'tabList' => 'Menuliste',
      'emailReplyToAllByDefault' => 'Emailsvar til Alle som Standard',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email Svar i HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Udfyld ikke Tildelt Bruger, hvis det ikke er påkrævet.',
      'followEntityOnStreamPost' => 'Auto-følg entitet efter at have postet i liste.',
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
        0 => 'Søndag',
        1 => 'Mandag',
      ),
    ),
    'labels' =>
    array (
      'Notifications' => 'Notifikationer',
      'User Interface' => 'Brugergrænseflade',
      'SMTP' => 'SMTP',
      'Misc' => 'Forskelligt',
      'Locale' => 'Landestandard',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' =>
    array (
      'autoFollowEntityTypeList' => 'Bruger vil automatisk følge alle nye poster i de valgte entitetstyper, vil se nyheder i aktiviteter og modtage notifikationer.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'roles' => 'Roller',
      'assignmentPermission' => 'Tilladelse til tildeling',
      'userPermission' => 'Brugertilladelse',
      'portalPermission' => 'Portaltilladelse',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' =>
    array (
      'users' => 'Brugere',
      'teams' => 'Teams',
    ),
    'tooltips' =>
    array (
      'assignmentPermission' => 'Tillader at begrænse mulighed for at tildele optegnelser og sende meddelelser til andre brugere.

alle - ingen begrænsninger

team - kan kun tildele og sende til andre teammedlemmer

nej - kan kun tildele og sende til sig selv',
      'userPermission' => 'Tillader at begrænse brugeres mulighed for at se andre brugeres aktiviteter og kalender.

alle - kan se alt

team - kan kun se teammedlemmers aktiviteter

nej - kan ikke se',
      'portalPermission' => 'Definerer adgang til portalinformation, mulighed for at konvertere kontakter til portalbrugere og sende meddelelser til portalbrugere.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' =>
    array (
      'Access' => 'Adgang',
      'Create Role' => 'Opret Rolle',
      'Scope Level' => 'Adgangsniveau',
      'Field Level' => 'Feltniveau',
    ),
    'options' =>
    array (
      'accessList' =>
      array (
        'not-set' => 'Ikke angivet',
        'enabled' => 'Aktiv',
        'disabled' => 'Inaktiv',
      ),
      'levelList' =>
      array (
        'all' => 'Alle',
        'team' => 'team',
        'account' => 'Konto',
        'contact' => 'Kontakt',
        'own' => 'Egne',
        'no' => 'nej',
        'yes' => 'ja',
        'not-set' => 'Ikke angivet',
      ),
    ),
    'actions' =>
    array (
      'read' => 'Læs',
      'edit' => 'Rediger',
      'delete' => 'Slet',
      'stream' => 'Aktiviteter',
      'create' => 'Opret',
    ),
    'messages' =>
    array (
      'changesAfterClearCache' => 'Alle ændringer i adgangskontrol bliver aktiveret efter cache er tømt.',
    ),
  ),
  'ScheduledJob' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Planlæg',
    ),
    'links' =>
    array (
      'log' => 'Log',
    ),
    'labels' =>
    array (
      'Create ScheduledJob' => 'Opret Planlagt Job',
    ),
    'options' =>
    array (
      'job' =>
      array (
        'Cleanup' => 'Ryd op',
        'CheckInboundEmails' => 'Tjek Gruppe Emailkonti',
        'CheckEmailAccounts' => 'Tjek Personlige Emailkonti',
        'SendEmailReminders' => 'Send Emailpåmindelse',
        'AuthTokenControl' => 'Auth Token kontrol',
        'SendEmailNotifications' => 'Send Email Notifikationer',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Send Masse-Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Kontroller Videnbase Artikels Status',
      ),
      'cronSetup' =>
      array (
        'linux' => 'Kommentar: Tilføj denne linje i crontabfilen for at køre Espo-Planlagte Jobs:',
        'mac' => 'Kommentar: Tilføj denne linje i crontabfilen for at køre Espo-Planlagte Jobs:',
        'windows' => 'Kommentar: Opret en batchfil med følgende kommando for at køre Espo-Planlagte Jobs v.hj.a. Windows Opgavestyring.',
        'default' => 'Kommentar: Tilføj denne kommando til Cron Job (Opgavestyring):',
      ),
      'status' =>
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'tooltips' =>
    array (
      'scheduling' => 'Definerer hvornår og hvor ofte et cronjob kører.

*/5 * * * * - hver 5 minutter

0 */2 * * * - hver 2 timer

30 1 * * * - kl. 01:30 en gang om dagen

0 0 1 * * - den første dag i måneden',
    ),
  ),
  'ScheduledJobLogRecord' =>
  array (
    'fields' =>
    array (
      'status' => 'Status',
      'executionTime' => 'Tid for udførelse',
      'target' => 'Mål',
    ),
  ),
  'Settings' =>
  array (
    'fields' =>
    array (
      'useCache' => 'Brug Cache',
      'dateFormat' => 'Datoformat',
      'timeFormat' => 'Tidsformat',
      'timeZone' => 'Tidszone',
      'weekStart' => 'Første Dag i Ugen',
      'thousandSeparator' => 'Tusindtalsseparator',
      'decimalMark' => 'Decimaltegn',
      'defaultCurrency' => 'Standardvaluta',
      'baseCurrency' => 'Basisvaluta',
      'currencyRates' => 'Vekselkurser',
      'currencyList' => 'Valutaliste',
      'language' => 'Sprog',
      'companyLogo' => 'Firmalogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sikkerhed',
      'smtpUsername' => 'Brugernavn',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Kodeord',
      'outboundEmailFromName' => 'Fra Navn',
      'outboundEmailFromAddress' => 'Fra Adresse',
      'outboundEmailIsShared' => 'Er Delt',
      'recordsPerPage' => 'Poster pr. Side',
      'recordsPerPageSmall' => 'Poster pr. Side (Lille)',
      'tabList' => 'Menuliste',
      'quickCreateList' => 'Opret Liste Hurtigt',
      'exportDelimiter' => 'Eksportbegrænser',
      'globalSearchEntityList' => 'Enheder til Global Søgning',
      'authenticationMethod' => 'Autentificeringsmetode',
      'ldapHost' => 'Vært',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Fuld Bruger DN',
      'ldapPassword' => 'Kodeord',
      'ldapBindRequiresDn' => 'Bind Kræver DN',
      'ldapBaseDn' => 'Basis DN',
      'ldapAccountCanonicalForm' => 'Konto Kanonisk Form',
      'ldapAccountDomainName' => 'Konto Domænenavn',
      'ldapTryUsernameSplit' => 'Prøv Split Brugernavn',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Opret bruger i EspoCrm',
      'ldapSecurity' => 'Sikkerhed',
      'ldapUserLoginFilter' => 'Bruger Login Filter',
      'ldapAccountDomainNameShort' => 'Konto Domænenavn Kort',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Brugernavn Attribut',
      'ldapUserObjectClass' => 'Bruger ObjectClass',
      'ldapUserTitleAttribute' => 'Bruger Titel Attribut',
      'ldapUserFirstNameAttribute' => 'Bruger Fornavn Attribut',
      'ldapUserLastNameAttribute' => 'Bruger Efternavn Attribut',
      'ldapUserEmailAddressAttribute' => 'Bruger Emailadresse Attribut',
      'ldapUserTeams' => 'Bruger Teams',
      'ldapUserDefaultTeam' => 'Bruger Standardteam',
      'ldapUserPhoneNumberAttribute' => 'Bruger Telefonnummer Attribut',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Deaktiver Eksport (kun admin har tilladelse)',
      'assignmentNotificationsEntityList' => 'Entiteter der underrettes ved tildeling',
      'assignmentEmailNotifications' => 'Notifikationer ved tildeling',
      'assignmentEmailNotificationsEntityList' => 'Omfang af Email-notifikationer ved tildeling',
      'streamEmailNotifications' => 'Notifikationer om opdateringer i listen for interne brugere',
      'portalStreamEmailNotifications' => 'Notifikationer om opdateringer i listen for portalbrugere',
      'streamEmailNotificationsEntityList' => 'Omfang af email-notifikationer ved ændring i liste',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Deaktiver Avatars',
      'followCreatedEntities' => 'Følg Oprettede Entiteter',
      'displayListViewRecordCount' => 'Vis Totale Antal (ved listevisning)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Deaktiver Brugertemaer',
      'emailMessageMaxSize' => 'Email Maks Str. (MB)',
      'massEmailMaxPerHourCount' => 'Maks antal Emails sendt pr. time',
      'personalEmailMaxPortionSize' => 'Maks antal emails pr. hentning til personlig konto.',
      'inboundEmailMaxPortionSize' => 'Maks antal emails pr. hentning til gruppekonto',
      'maxEmailAccountCount' => 'Maks antal personlige email konti pr. bruger',
      'authTokenLifetime' => 'Auth Token levetid (timer)',
      'authTokenMaxIdleTime' => 'Auth Token Maks Inaktivitetstid (timer)',
      'dashboardLayout' => 'Dashboard Layout (standard)',
      'siteUrl' => 'Webadresse',
      'addressPreview' => 'Adresse Eksempelvisning',
      'addressFormat' => 'Adresseformat',
      'notificationSoundsDisabled' => 'Daktiver Notifikationslyde',
      'applicationName' => 'Navn på Applikation',
      'calendarEntityList' => 'Enhedsliste for Kalender',
      'mentionEmailNotifications' => 'Send email-notifikationer når man nævnes i poster',
      'massEmailDisableMandatoryOptOutLink' => 'Deaktiver krævet afmeldingslink',
      'activitiesEntityList' => 'Entitetsliste for Aktiviteter',
      'historyEntityList' => 'Entitetsliste for Historik',
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
        0 => 'Søndag',
        1 => 'Mandag',
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
      'recordsPerPage' => 'Antal Poster i listevisning.',
      'recordsPerPageSmall' => 'Antal Poster i relationspaneler',
      'outboundEmailIsShared' => 'Tillad brugere at sende emails vi denne SMTP',
      'followCreatedEntities' => 'Brugere vil automatisk følge poster de har oprettet',
      'emailMessageMaxSize' => 'Alle indkommende emails som overskrider en fastsat størrelse vil blive hentet uden tekst og vedhæftninger.',
      'authTokenLifetime' => 'Definerer hvor længe tokens kan eksistere.
0 - betyder udløber aldrig',
      'authTokenMaxIdleTime' => 'Definerer hvor længe tokens kan eksistere efter sidste adgang.
0 - betyder udløber aldrig',
      'userThemesDisabled' => 'Ved markering kan brugere ikke vælge et andet tema.',
      'ldapUsername' => 'Fuldstændig systembrugers DN som muliggør søgning efter andre brugere. F.eks. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".  ',
      'ldapPassword' => 'Kodeordet for adgang til LDAP server',
      'ldapAuth' => 'Adgangsinformation for LDAP server',
      'ldapUserNameAttribute' => 'Attributten til identifikation af brugeren.
F.eks. "userPrincipalName" oller "sAMAccountName" til Active Directory, "uid" til OpenLDAP. ',
      'ldapUserObjectClass' => 'ObjectClass attribut til søgning af brugere. F.eks. "person" for AD, "inetOrgPerson" for OpenLDAP',
      'ldapAccountCanonicalForm' => 'Din kontotypes kanoniske format. Der er 4 muligheder:
<br>- \'Dn\' - varianten i formatet \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - varianten \'tester\'.<br>- \'Backslash\' - varianten \'COMPANY\\tester\'.<br>- \'Principal\' - varianten \'tester@company.com\'. ',
      'ldapBindRequiresDn' => 'Muligheden for at formatere brugernavnet i DN-format',
      'ldapBaseDn' => 'Standard basis DN der benyttes til søgning af brugere. F.eks. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Muligheden for at adskille et brugernavn fra domænet.',
      'ldapOptReferrals' => 'hvis referencer skal følges til LDAP klienten',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Denne mulighed tillader EspoCRM at oprette en bruger fra LDAP serveren',
      'ldapUserFirstNameAttribute' => 'LDAP attribut som bruges til at fastslå brugerens fornavn.',
      'ldapUserLastNameAttribute' => 'LDAP attribut som bruges til at fastslå brugerens efternavn. F.eks. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribut som bruges til at fastslå brugerens titel. F.eks. "title"',
      'ldapUserEmailAddressAttribute' => 'LDAP attribut som bruges til at fastslå brugerens emailadresse. F.eks. "mail"',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribut som bruges til at fastslå brugerens telefonnummer. F.eks. "telephoneNumber"',
      'ldapUserLoginFilter' => 'Filtret som tillader at begrænse gruppen af brugere, der kan benytte EspoCRM.
F.eks. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan". ',
      'ldapAccountDomainName' => 'Domænet som bruges til autorisering til LDAP serveren',
      'ldapAccountDomainNameShort' => 'Det korte domæne som bruges til autorisering til LDAP serveren',
      'ldapUserTeams' => 'Teams til oprettet bruger. For mere, se brugerprofilen.',
      'ldapUserDefaultTeam' => 'Standardteam for oprettet bruger. For mere, se brugerprofilen.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'EspoCRM er som standard indstillet til B2B. Du kan skifte det til B2C.',
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
      'System' => 'System',
      'Locale' => 'Område',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguration',
      'In-app Notifications' => 'In-app notifikationer',
      'Email Notifications' => 'Emailnotifikationer',
      'Currency Settings' => 'Valutaindstillinger',
      'Currency Rates' => 'Vekselkurser',
      'Mass Email' => 'Masse Email',
      'Test Connection' => 'Test Forbindelse',
      'Connecting' => 'Forbinder...',
      'Activities' => 'Aktiviteter',
      'Admin Notifications' => 'Admin Notifications',
    ),
    'messages' =>
    array (
      'ldapTestConnection' => 'Forbindelsen er succesfuldt etableret.',
    ),
  ),
  'Team' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'roles' => 'Roller',
      'positionList' => 'Stillingsbetegnelse',
    ),
    'links' =>
    array (
      'users' => 'Brugere',
      'notes' => 'Notater',
      'roles' => 'Roller',
      'inboundEmails' => 'Gruppe-email konti',
    ),
    'tooltips' =>
    array (
      'roles' => 'Brugere i dette team arver alle adgangsrettigheder fra de valgte roller.',
      'positionList' => 'Stillinger til rådighed i dette team. F.eks. Sælger, Manager osv.',
    ),
    'labels' =>
    array (
      'Create Team' => 'Opret Team',
    ),
  ),
  'Template' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'body' => 'Indhold',
      'entityType' => 'Entitetstype',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Venstre Margin',
      'topMargin' => 'Top Margin',
      'rightMargin' => 'Højre Margin',
      'bottomMargin' => 'Bund Margin',
      'printFooter' => 'Udskriv Footer',
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
      'Create Template' => 'Opret Skabelon',
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
      'footer' => 'Brug {pageNumber} til at printe sidetal.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'userName' => 'Brugernavn',
      'title' => 'Titel',
      'isAdmin' => 'Er Admin',
      'defaultTeam' => 'Standard Team',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'Roller',
      'portals' => 'Portaler',
      'portalRoles' => 'Portalroller',
      'teamRole' => 'Stilling',
      'password' => 'Kodeord',
      'currentPassword' => 'Nuværende Kodeord',
      'passwordConfirm' => 'Bekræft Kodeord',
      'newPassword' => 'Nyt Kodeord',
      'newPasswordConfirm' => 'Bekræft Nyt Kodeord',
      'avatar' => 'Avatar',
      'isActive' => 'Er Aktiv',
      'isPortalUser' => 'Er Portalbruger',
      'contact' => 'Kontakt',
      'accounts' => 'Konti',
      'account' => 'Konto (Primær)',
      'sendAccessInfo' => 'Send Email med info om  Adgang til Bruger',
      'portal' => 'Portal',
      'gender' => 'Køn',
      'position' => 'Position i Teamet',
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
      'teams' => 'Teams',
      'roles' => 'Roller',
      'notes' => 'Notater',
      'portals' => 'Portaler',
      'portalRoles' => 'Portalroller',
      'contact' => 'Kontakt',
      'accounts' => 'Konti',
      'account' => 'Konto (Primær)',
      'tasks' => 'Opgaver',
      'targetLists' => 'Kontaktlister',
    ),
    'labels' =>
    array (
      'Create User' => 'Opret Bruger',
      'Generate' => 'Generér',
      'Access' => 'Adgang',
      'Preferences' => 'Brugerindstillinger',
      'Change Password' => 'Skift Kodeord',
      'Teams and Access Control' => 'Teams og Adgangskontrol',
      'Forgot Password?' => 'Glemt Kodeord?',
      'Password Change Request' => 'Anmodning om Ændring af Kodeord',
      'Email Address' => 'Emailadresse',
      'External Accounts' => 'Eksterne Konti',
      'Email Accounts' => 'Emailkonti',
      'Portal' => 'Portal',
      'Create Portal User' => 'Opret Portalbruger',
      'Proceed w/o Contact' => 'Forsæt uden Kontakt',
    ),
    'tooltips' =>
    array (
      'defaultTeam' => 'Alle poster oprettet af denne bruger bliver som standard relateret til dette team.',
      'userName' => 'Bogstaver a-z, tal 0-9, punktummer, bindestreger, @ og understregning er tilladte.',
      'isAdmin' => 'Brugeren Admin kan tilgå alt.',
      'isActive' => 'Hvis ikke markeret kan bruger ikke logge ind.',
      'teams' => 'Teams som denne bruger tilhører. Adgangsniveau er arvet fra teamroller.',
      'roles' => 'Yderligere adgangsroller. Brug det hvis bruger ikke tilhører et team, eller hvis der er brug for at udvide adgangsniveauet specielt for denne bruger.',
      'portalRoles' => 'Yderligere portalroller. Brug det til at udvide adgangsniveauet specielt for denne bruger',
      'portals' => 'Portaler som denne bruger har adgang til.',
    ),
    'messages' =>
    array (
      'passwordWillBeSent' => 'Kodeord sendes til brugers emailadresse.',
      'accountInfoEmailSubject' => 'EspoCRM Info om Brugeradgang.',
      'accountInfoEmailBody' => 'Dine Logindetaljer:

Brugernavn: {userName}
Kodeord: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Anmodning om Ændring af Kodeord',
      'passwordChangeLinkEmailBody' => 'You can change your password by following this link {link}. This unique URL will be expired soon.',
      'passwordChanged' => 'Kodeordet er ændret',
      'userCantBeEmpty' => 'Brugernavn kan ikke være tomt.',
      'wrongUsernamePasword' => 'Forkert brugernavn/kodeord',
      'emailAddressCantBeEmpty' => 'Emailadresse kan ikke være tom',
      'userNameEmailAddressNotFound' => 'Brugernavn/Emailadresse ikke fundet.',
      'forbidden' => 'Forbudt. Prøv venligst senere.',
      'uniqueLinkHasBeenSent' => 'Den unikke URL er sendt til den angivne emailadresse.',
      'passwordChangedByRequest' => 'Kodeordet er ændret.',
      'setupSmtpBefore' => 'Det er nødvendigt af udfylde <a href="{url}">SMTP indstillinger</a> for at systemet kan sende kodeordet i en email.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' =>
    array (
      'gender' =>
      array (
        '' => 'Ikke Sat',
        'Male' => 'Hankøn',
        'Female' => 'Kunkøn',
        'Neutral' => 'Neutral',
      ),
    ),
    'boolFilters' =>
    array (
      'onlyMyTeam' => 'Kun Mit Team',
    ),
    'presetFilters' =>
    array (
      'active' => 'Aktiv',
      'activePortal' => 'Portal Aktiv',
    ),
  ),
  'Account' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Betalingsadresse',
      'shippingAddress' => 'Leveringsadresse',
      'description' => 'Beskrivelse',
      'sicCode' => 'Sic Kode',
      'industry' => 'Industri',
      'type' => 'Type',
      'contactRole' => 'Titel',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlister',
      'targetList' => 'Kontaktliste',
      'originalLead' => 'Oprindelig Lead',
      'formularios' => 'Formularios',
    ),
    'links' =>
    array (
      'contacts' => 'Kontakter',
      'opportunities' => 'Muligheder',
      'cases' => 'Sager',
      'documents' => 'Dokumenter',
      'meetingsPrimary' => 'Møder (udvidet)',
      'callsPrimary' => 'Opkald (udvidet)',
      'tasksPrimary' => 'Opgaver (udvidet)',
      'emailsPrimary' => 'Emails (udvidet)',
      'targetLists' => 'Kontaktlister',
      'campaignLogRecords' => 'Kampagne-log',
      'campaign' => 'Kampagne',
      'portalUsers' => 'Portalbrugere',
      'originalLead' => 'Oprindelig Lead',
      'formularios' => 'Formularios',
    ),
    'options' =>
    array (
      'type' =>
      array (
        'Customer' => 'Kunde',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Forhandler',
      ),
      'industry' =>
      array (
        'Aerospace' => 'Luft- og Rumfart',
        'Agriculture' => 'Landbrug',
        'Advertising' => 'Reklamebranchen',
        'Apparel & Accessories' => 'Beklædningsindustri',
        'Architecture' => 'Arkitektur',
        'Automotive' => 'Automobilbranchen',
        'Banking' => 'Bankvæsen',
        'Biotechnology' => 'Bioteknologi',
        'Building Materials & Equipment' => 'Byggematerialer og Boligudstyr',
        'Chemical' => 'Kemiindustri',
        'Construction' => 'Konstruktion',
        'Computer' => 'Komputer',
        'Defense' => 'Forsvar',
        'Creative' => 'Kreativ',
        'Culture' => 'Kultur',
        'Consulting' => 'Consulting',
        'Education' => 'Uddannelse',
        'Electronics' => 'Elektronik',
        'Electric Power' => 'Elektroenergi',
        'Energy' => 'Energi',
        'Entertainment & Leisure' => 'Underholdning og Fritid',
        'Finance' => 'Finanssektoren',
        'Food & Beverage' => 'Føde- og Drikkevarer',
        'Grocery' => 'Detailhandel',
        'Hospitality' => 'Hotel og Restaurant',
        'Healthcare' => 'Sundhed',
        'Insurance' => 'Forsikring',
        'Legal' => 'Retsvæsen',
        'Manufacturing' => 'Produktion',
        'Mass Media' => 'Massemedier',
        'Mining' => 'Mineindustri',
        'Music' => 'Musik',
        'Marketing' => 'Marketing',
        'Publishing' => 'Medien',
        'Petroleum' => 'Olieindustri',
        'Real Estate' => 'Ejendom',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Service',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Teknologi',
        'Telecommunications' => 'Telekommunikation',
        'Television' => 'TV',
        'Testing, Inspection & Certification' => 'Testning, Inspektion og Certificering',
        'Transportation' => 'Transport',
        'Travel' => 'Travel',
        'Venture Capital' => 'Risikokapital',
        'Wholesale' => 'Engros',
        'Water' => 'Vand',
      ),
    ),
    'labels' =>
    array (
      'Create Account' => 'Opret Konto',
      'Copy Billing' => 'Kopier Betalingsadresse',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' =>
    array (
      'customers' => 'Kunder',
      'partners' => 'Partnere',
      'recentlyCreated' => 'Nyligt Oprettet',
    ),
  ),
  'Calendar' =>
  array (
    'modes' =>
    array (
      'month' => 'Måned',
      'week' => 'Uge',
      'day' => 'Dag',
      'agendaWeek' => 'Uge',
      'agendaDay' => 'Dag',
      'timeline' => 'Tidslinje',
    ),
    'labels' =>
    array (
      'Today' => 'Idag',
      'Create' => 'Opret',
      'Shared' => 'Delt',
      'Add User' => 'Tilføj Bruger',
      'current' => 'Aktuel',
      'time' => 'Tid',
      'User List' => 'Brugerliste',
      'Manage Users' => 'Administrer Brugere',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'parent' => 'Henviser til',
      'status' => 'Status',
      'dateStart' => 'Startdato',
      'dateEnd' => 'Slutdato',
      'direction' => 'Retning',
      'duration' => 'Varighed',
      'description' => 'Beskrivelse',
      'users' => 'Brugere',
      'contacts' => 'Kontakter',
      'leads' => 'Leads',
      'reminders' => 'Underretninger',
      'account' => 'Konto',
      'acceptanceStatus' => 'Acceptstatus',
    ),
    'links' =>
    array (
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Planned' => 'Planlagt',
        'Held' => 'Gennemført',
        'Not Held' => 'Ikke Gennemført',
      ),
      'direction' =>
      array (
        'Outbound' => 'Udgående',
        'Inbound' => 'Indgående',
      ),
      'acceptanceStatus' =>
      array (
        'None' => 'Ingen',
        'Accepted' => 'Accepteret',
        'Declined' => 'Nægtet',
        'Tentative' => 'Med Forbehold',
      ),
    ),
    'massActions' =>
    array (
      'setHeld' => 'Marker som Gennemført',
      'setNotHeld' => 'Marker som Ikke Gennemført',
    ),
    'labels' =>
    array (
      'Create Call' => 'Opret Opkald',
      'Set Held' => 'Marker som Gennemført',
      'Set Not Held' => 'Marker som Ikke Gennemført',
      'Send Invitations' => 'Send Invitationer',
    ),
    'presetFilters' =>
    array (
      'planned' => 'Planlagt',
      'held' => 'Gennemført',
      'todays' => 'For Idag',
    ),
  ),
  'Campaign' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'description' => 'Beskrivelse',
      'status' => 'Status',
      'type' => 'Type',
      'startDate' => 'Startdato',
      'endDate' => 'Slutdato',
      'targetLists' => 'Kontaktliste',
      'excludingTargetLists' => 'Udelukker Kontaktlister',
      'sentCount' => 'Sendt',
      'openedCount' => 'Åbnet',
      'clickedCount' => 'Klikket',
      'optedOutCount' => 'Sat som Opt-Out',
      'bouncedCount' => 'Kan ikke leveres',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Afvist',
      'softBouncedCount' => 'Kan ikke leveres i øjeblikket',
      'leadCreatedCount' => 'Oprettede Leads',
      'revenue' => 'Indtægt',
      'revenueConverted' => 'Indtægt (konverteret)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (konverteret)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' =>
    array (
      'targetLists' => 'Kontaktliste',
      'excludingTargetLists' => 'Udelukker Kontaktlister',
      'accounts' => 'Konti',
      'contacts' => 'Kontakter',
      'leads' => 'Leads',
      'opportunities' => 'Muligheder',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Masse-Email',
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
        'Radio' => 'Radio',
        'Newsletter' => 'Nyhedsbrev',
        'Mail' => 'Mail',
      ),
      'status' =>
      array (
        'Planning' => 'Planlægning',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Fuldført',
      ),
    ),
    'labels' =>
    array (
      'Create Campaign' => 'Opret Kampagne',
      'Target Lists' => 'Kontaktlister',
      'Statistics' => 'Statistikker',
      'hard' => 'Hård',
      'soft' => 'Blød',
      'Unsubscribe' => 'Afmeld',
      'Mass Emails' => 'Masse-Emails',
      'Email Templates' => 'Emailskabeloner',
      'Unsubscribe again' => 'Frameld igen',
      'Subscribe again' => 'Tilmeld igen',
      'Create Target List' => 'Opret Kontaktliste',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' =>
    array (
      'active' => 'Aktiv',
    ),
    'messages' =>
    array (
      'unsubscribed' => 'Din mailadresse er fjernet fra vores mailliste.',
      'subscribedAgain' => 'Du er tilmeldt igen.',
    ),
    'tooltips' =>
    array (
      'targetLists' => 'Kontakter som skal modtage meddelelser',
      'excludingTargetLists' => 'Kontakter som ikke skal modtage meddelelser',
    ),
  ),
  'CampaignLogRecord' =>
  array (
    'fields' =>
    array (
      'action' => 'Handling',
      'actionDate' => 'Dato',
      'data' => 'Data',
      'campaign' => 'Kampagne',
      'parent' => 'Mål',
      'object' => 'Objekt',
      'application' => 'Applikation',
      'queueItem' => 'Sæt i Kø',
      'stringData' => 'Streng Data',
      'stringAdditionalData' => 'Streng Ekstra Data',
      'isTest' => 'Is Test',
    ),
    'links' =>
    array (
      'queueItem' => 'Sæt i Kø',
      'parent' => 'Henviser til',
      'object' => 'Objekt',
      'campaign' => 'Campaign',
    ),
    'options' =>
    array (
      'action' =>
      array (
        'Sent' => 'Sendt',
        'Opened' => 'Åbnet',
        'Opted Out' => 'Sat til Opt-Out',
        'Bounced' => 'Kunne ikke leveres',
        'Clicked' => 'Klikket',
        'Lead Created' => 'Lead Oprettet',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' =>
    array (
      'All' => 'Alle',
    ),
    'presetFilters' =>
    array (
      'sent' => 'Sendt',
      'opened' => 'Åbnet',
      'optedOut' => 'Sat til Opt-Out',
      'optedIn' => 'Opted In',
      'bounced' => 'Kunne ikke leveres',
      'clicked' => 'Klikket',
      'leadCreated' => 'Lead Oprettet',
    ),
  ),
  'CampaignTrackingUrl' =>
  array (
    'fields' =>
    array (
      'url' => 'URL',
      'urlToUse' => 'Kode til indsættelse i stedet for URL',
      'campaign' => 'Kampagne',
    ),
    'links' =>
    array (
      'campaign' => 'Kampagne',
    ),
    'labels' =>
    array (
      'Create CampaignTrackingUrl' => 'Opret Tracking URL',
    ),
  ),
  'Case' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Konto',
      'contact' => 'Kontakt',
      'contacts' => 'Kontakter',
      'priority' => 'Prioritet',
      'type' => 'Type',
      'description' => 'Beskrivelse',
      'inboundEmail' => 'Ingående Email',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'links' =>
    array (
      'inboundEmail' => 'Indgående Email',
      'account' => 'Konto',
      'contact' => 'Kontakt (Primær)',
      'Contacts' => 'Kontakter',
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'emails' => 'Emails',
      'articles' => 'Vidensbase Artikler',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'New' => 'Ny',
        'Assigned' => 'Tildelt',
        'Pending' => 'Venter',
        'Closed' => 'Lukket',
        'Rejected' => 'Afvist',
        'Duplicate' => 'Dublet',
      ),
      'priority' =>
      array (
        'Low' => 'Lav',
        'Normal' => 'Normal',
        'High' => 'Høj',
        'Urgent' => 'Vigtig',
      ),
      'type' =>
      array (
        'Question' => 'Spørgsmål',
        'Incident' => 'Hændelse',
        'Problem' => 'Problem',
      ),
    ),
    'labels' =>
    array (
      'Create Case' => 'Opret Sag',
      'Close' => 'Luk',
      'Reject' => 'Afvis',
      'Closed' => 'Lukket',
      'Rejected' => 'Afvist',
    ),
    'presetFilters' =>
    array (
      'open' => 'Åben',
      'closed' => 'Lukket',
    ),
  ),
  'Contact' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'account' => 'Konto',
      'accounts' => 'Konti',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Kontotype',
      'doNotCall' => 'Ring Ikke',
      'address' => 'Adresse',
      'opportunityRole' => 'Mulighed Rolle',
      'accountRole' => 'Titel',
      'description' => 'Beskrivelse',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlister',
      'targetList' => 'Kontaktliste',
      'portalUser' => 'Portalbruger',
      'originalLead' => 'Oprindelig Lead',
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
      'opportunities' => 'Muligheder',
      'cases' => 'Sager',
      'targetLists' => 'Kontaktlister',
      'campaignLogRecords' => 'Kampagne-log',
      'campaign' => 'Kampagne',
      'account' => 'Konto (Primær)',
      'accounts' => 'Konti',
      'casesPrimary' => 'Sager (Primære)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portalbruger',
      'originalLead' => 'Oprindelig Lead',
      'documents' => 'Dokumenter',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' =>
    array (
      'Create Contact' => 'Opret Kontakt',
    ),
    'options' =>
    array (
      'opportunityRole' =>
      array (
        '' => '--Ingen--',
        'Decision Maker' => 'Beslutningstager',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Har Indflydelse',
      ),
    ),
    'presetFilters' =>
    array (
      'portalUsers' => 'Portalbrugere',
      'notPortalUsers' => 'Ikke Portalbrugere',
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
      'Create Document' => 'Opret Dokument',
      'Details' => 'Detaljer',
    ),
    'fields' =>
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'file' => 'Fil',
      'type' => 'Type',
      'publishDate' => 'Offentliggørelsesdato',
      'expirationDate' => 'Afslutningsdato',
      'description' => 'Beskrivelse',
      'accounts' => 'Konti',
      'folder' => 'Mappe',
      'formularios' => 'Formularios',
    ),
    'links' =>
    array (
      'accounts' => 'Konti',
      'opportunities' => 'Muligheder',
      'folder' => 'Mappe',
      'leads' => 'Leads',
      'contacts' => 'Kontakter',
      'formularios' => 'Formularios',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Active' => 'Aktiv',
        'Draft' => 'Kladde',
        'Expired' => 'Udløbet',
        'Canceled' => 'Aflyst',
      ),
      'type' =>
      array (
        '' => 'ingen',
        'Contract' => 'Kontrakt',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licensaftale',
      ),
    ),
    'presetFilters' =>
    array (
      'active' => 'Aktiv',
      'draft' => 'Kladde',
    ),
  ),
  'DocumentFolder' =>
  array (
    'labels' =>
    array (
      'Create DocumentFolder' => 'Opret Dokumentmappe',
      'Manage Categories' => 'Administrer Mapper',
      'Documents' => 'Dokumenter',
    ),
    'links' =>
    array (
      'documents' => 'Dokumenter',
    ),
  ),
  'EmailQueueItem' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'target' => 'Mål',
      'sentAt' => 'Dato Sendt',
      'attemptCount' => 'Forsøg',
      'emailAddress' => 'Emailadresse',
      'massEmail' => 'Masse-Email',
      'isTest' => 'Er Test',
    ),
    'links' =>
    array (
      'target' => 'Mål',
      'massEmail' => 'Masse-Email',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Pending' => 'Afventer',
        'Sent' => 'Sendt',
        'Failed' => 'Fejlet',
        'Sending' => 'Sender',
      ),
    ),
    'presetFilters' =>
    array (
      'pending' => 'Afventer',
      'sent' => 'Sendt',
      'failed' => 'Fejlet',
    ),
  ),
  'KnowledgeBaseArticle' =>
  array (
    'labels' =>
    array (
      'Create KnowledgeBaseArticle' => 'Opret Artikel',
      'Any' => 'hvilken som helst',
      'Send in Email' => 'Send i Email',
      'Move Up' => 'Flyt Op',
      'Move Down' => 'Flyt Ned',
      'Move to Top' => 'Flyt til Top',
      'Move to Bottom' => 'Flyt til Bund',
    ),
    'fields' =>
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Vedhæftede',
      'publishDate' => 'Startdato',
      'expirationDate' => 'Slutdato',
      'description' => 'Beskrivelse',
      'body' => 'Indhold',
      'categories' => 'Kategorier',
      'language' => 'Sprog',
      'portals' => 'Portaler',
    ),
    'links' =>
    array (
      'cases' => 'Sager',
      'opportunities' => 'Muligheder',
      'categories' => 'Kategorier',
      'portals' => 'Portaler',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'In Review' => 'Venter på Godkendelse',
        'Draft' => 'Kladde',
        'Archived' => 'Arkiveret',
        'Published' => 'Publiseret',
      ),
      'type' =>
      array (
        'Article' => 'Artikel',
      ),
    ),
    'tooltips' =>
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' =>
    array (
      'published' => 'Publiseret',
    ),
  ),
  'KnowledgeBaseCategory' =>
  array (
    'labels' =>
    array (
      'Create KnowledgeBaseCategory' => 'Opret Kategori',
      'Manage Categories' => 'Administrer Kategorier',
      'Articles' => 'Artikler',
    ),
    'links' =>
    array (
      'articles' => 'Artikler',
    ),
  ),
  'Lead' =>
  array (
    'labels' =>
    array (
      'Converted To' => 'Konverteret Til',
      'Create Lead' => 'Opret Lead',
      'Convert' => 'Konverter',
      'convert' => 'convert',
    ),
    'fields' =>
    array (
      'name' => ' Navn',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'website' => 'Website',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Kontonavn',
      'doNotCall' => 'Ring Ikke!',
      'address' => 'Adresse',
      'status' => 'Status',
      'source' => 'Kilde',
      'opportunityAmount' => 'Beløb for Mulighed',
      'opportunityAmountConverted' => 'Beløb for Mulighed (Konverteret)',
      'description' => 'Beskrivelse',
      'createdAccount' => 'Konto',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Mulighed',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlister',
      'targetList' => 'Kontaktliste',
      'industry' => 'Industri',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' =>
    array (
      'targetLists' => 'Kontaktlister',
      'campaignLogRecords' => 'Kampagne-log',
      'campaign' => 'Kampagne',
      'createdAccount' => 'Konto',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Mulighed',
      'cases' => 'Sager',
      'documents' => 'Dokumenter',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'New' => 'Ny',
        'Assigned' => 'Tildelt',
        'In Process' => 'Under Behandling',
        'Converted' => 'Konverteret',
        'Recycled' => 'Genbrugt',
        'Dead' => 'Død',
      ),
      'source' =>
      array (
        '' => 'Ingen',
        'Call' => 'Samtale',
        'Email' => 'Email',
        'Existing Customer' => 'Eksisterende Kunde',
        'Partner' => 'Partner',
        'Public Relations' => 'PR',
        'Web Site' => 'Webside',
        'Campaign' => 'Kampagne',
        'Other' => 'Andet',
      ),
    ),
    'presetFilters' =>
    array (
      'active' => 'Aktiv',
      'actual' => 'Aktuel',
      'converted' => 'Konverteret',
    ),
  ),
  'MassEmail' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'storeSentEmails' => 'Lager Sendte Emails',
      'startAt' => 'Startdato',
      'fromAddress' => 'Fra Adresse',
      'fromName' => 'Fra Navn',
      'replyToAddress' => 'Svar-til Adresse',
      'replyToName' => 'Svar-til Navn',
      'campaign' => 'Kampagne',
      'emailTemplate' => 'Emailskabelon',
      'inboundEmail' => 'Emailkonto',
      'targetLists' => 'Kontaktlister',
      'excludingTargetLists' => 'Ekskluderer Kontaktlister',
      'optOutEntirely' => 'Fuldstændig Opt-Out',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' =>
    array (
      'targetLists' => 'Kontaktlister',
      'excludingTargetLists' => 'Ekskluderer Kontaktlister',
      'queueItems' => 'Objekter i Kø',
      'campaign' => 'Kampagne',
      'emailTemplate' => 'Emailskabelon',
      'inboundEmail' => 'Emailkonto',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Draft' => 'Kladde',
        'Pending' => 'Afventer',
        'In Process' => 'Under Behandling',
        'Complete' => 'Færdig',
        'Canceled' => 'Afbrudt',
        'Failed' => 'Fejlet',
      ),
    ),
    'labels' =>
    array (
      'Create MassEmail' => 'Opret Masse-Email',
      'Send Test' => 'Send Test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' =>
    array (
      'selectAtLeastOneTarget' => 'Vælg mindst et Mål',
      'testSent' => 'Testemail(s) formodes at være sendt',
    ),
    'tooltips' =>
    array (
      'optOutEntirely' => 'Emailadresser tilhørende modtagere, som er afmeldt, bliver markeret som "afmeldt", og de vil ikke modtage masse-emails fremover.',
      'targetLists' => 'Kontakter der skal modtage meddelelser',
      'excludingTargetLists' => 'Kontakter der ikke skal modtage meddelelser',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' =>
    array (
      'actual' => 'Aktuel',
      'complete' => 'Færdig',
    ),
  ),
  'Meeting' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'parent' => 'Henviser til',
      'status' => 'Status',
      'dateStart' => 'Startdato',
      'dateEnd' => 'Slutdato',
      'duration' => 'Varighed',
      'description' => 'Beskrivelse',
      'users' => 'Brugere',
      'contacts' => 'Kontakter',
      'leads' => 'leads',
      'reminders' => 'Påmindelser',
      'account' => 'Konto',
      'acceptanceStatus' => 'Acceptstatus',
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
        'Planned' => 'Planlagt',
        'Held' => 'Gennemført',
        'Not Held' => 'Ikke Gennemført',
      ),
      'acceptanceStatus' =>
      array (
        'None' => 'Ingen',
        'Accepted' => 'Accepteret',
        'Declined' => 'Nægtet',
        'Tentative' => 'Forsøgt',
      ),
    ),
    'massActions' =>
    array (
      'setHeld' => 'Marker som Gennemført',
      'setNotHeld' => 'Marker som Ikke Gennemført',
    ),
    'labels' =>
    array (
      'Create Meeting' => 'Opret Møde',
      'Set Held' => 'Marker som Gennemført',
      'Set Not Held' => 'Marker som Ikke Gennemført',
      'Send Invitations' => 'Send Invitationer',
      'on time' => 'Til Tiden',
      'before' => 'Før',
    ),
    'presetFilters' =>
    array (
      'planned' => 'Planlagt',
      'held' => 'Gennemført',
      'todays' => 'Dagens',
    ),
    'messages' =>
    array (
      'nothingHasBeenSent' => 'Intet blev sendt',
    ),
  ),
  'Opportunity' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'account' => 'Konto',
      'stage' => 'Stadie',
      'amount' => 'Beløb',
      'probability' => 'Sandsynlighed, %',
      'leadSource' => 'Leadkilde',
      'doNotCall' => 'Ring Ikke!',
      'closeDate' => 'Slutdato',
      'contacts' => 'Kontakter',
      'description' => 'Beskrivelse',
      'amountConverted' => 'Beløb (konverteret)',
      'amountWeightedConverted' => 'Beløb Vægtet',
      'campaign' => 'Kampagne',
      'originalLead' => 'Oprindelig Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' =>
    array (
      'contacts' => 'Kontakter',
      'documents' => 'Dokumenter',
      'campaign' => 'Kampagne',
      'originalLead' => 'Oprindelig Lead',
    ),
    'options' =>
    array (
      'stage' =>
      array (
        'Prospecting' => 'Undersøges',
        'Qualification' => 'Kvalifikation',
        'Proposal' => 'Tilbud',
        'Negotiation' => 'Forhandler',
        'Needs Analysis' => 'Behovsanalyse',
        'Value Proposition' => 'Vejledende Tilbud',
        'Id. Decision Makers' => 'Identifikation af Beslutningstagere',
        'Perception Analysis' => 'Analyse af Opfattelsen',
        'Proposal/Price Quote' => 'Tilbud/Pristilbud',
        'Negotiation/Review' => 'Forhandler/Gennemgår',
        'Closed Won' => 'Vundet og Lukket',
        'Closed Lost' => 'Tabt og Lukket',
      ),
    ),
    'labels' =>
    array (
      'Create Opportunity' => 'Opret Mulighed',
    ),
    'presetFilters' =>
    array (
      'open' => 'Åbn',
      'won' => 'Vundet',
      'lost' => 'Tabt',
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
      'name' => 'Navn',
      'description' => 'Beskrivelse',
      'entryCount' => 'Antal Enheder',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Kampagner',
      'endDate' => 'Slutdato',
      'targetLists' => 'Kontaktliste',
      'includingActionList' => 'Inkluder',
      'excludingActionList' => 'Ekskluder',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' =>
    array (
      'accounts' => 'Konti',
      'contacts' => 'Kontakter',
      'leads' => 'Leads',
      'campaigns' => 'Kampagner',
      'massEmails' => 'Masse-Emails',
    ),
    'options' =>
    array (
      'type' =>
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'TV',
        'Radio' => 'Radio',
        'Newsletter' => 'Nyhedsbrev',
      ),
      'targetStatus' =>
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' =>
    array (
      'Create TargetList' => 'Opret Kontaktliste',
      'Opted Out' => 'Afmeldt',
      'Cancel Opt-Out' => 'Fortryd Afmelding',
      'Opt-Out' => 'Afmeld',
    ),
  ),
  'Task' =>
  array (
    'fields' =>
    array (
      'name' => 'Navn',
      'parent' => 'Henviser til',
      'status' => 'Status',
      'dateStart' => 'Startdato',
      'dateEnd' => 'Tidsfrist',
      'dateStartDate' => 'Startdato (Hele dagen)',
      'dateEndDate' => 'Slutdato (Hele dagen)',
      'priority' => 'Prioritet',
      'description' => 'Beskrivelse',
      'isOverdue' => 'Er Overskredet',
      'account' => 'Konto',
      'dateCompleted' => 'Afsluttet Dato',
      'attachments' => 'Vedhæftede',
      'reminders' => 'Underretninger',
      'contact' => 'Contact',
    ),
    'links' =>
    array (
      'attachments' => 'Vedhæftede',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Not Started' => 'Ikke Startet',
        'Started' => 'Startet',
        'Completed' => 'Afsluttet',
        'Canceled' => 'Afbrudt',
        'Deferred' => 'Udsat',
      ),
      'priority' =>
      array (
        'Low' => 'Lav',
        'Normal' => 'Normal',
        'High' => 'Høj',
        'Urgent' => 'Vigtig',
      ),
    ),
    'labels' =>
    array (
      'Create Task' => 'Opret Opgave',
      'Complete' => 'Afslut',
    ),
    'presetFilters' =>
    array (
      'actual' => 'Aktuel',
      'completed' => 'Afsluttet',
      'deferred' => 'Udsat',
      'todays' => 'Dagens',
      'overdue' => 'Overskredet',
    ),
  ),
  'Beneficios' =>
  array (
    'fields' =>
    array (
      'titulo' => 'Titulo',
      'descripcion' => 'Descripcion',
      'direccion' => 'Direccion',
      'validohasta' => 'Valido_hasta',
      'titulolegal' => 'Titulo_legal',
      'descripcionlegal' => 'Descripcion_legal',
      'pasoapaso' => 'Paso_a_paso',
      'doctosBeneficios' => 'DoctosBeneficios',
      'categoria' => 'Categoria',
      'empresa' => 'Empresa',
      'proveedor' => 'Proveedor',
      'rol' => 'Rol',
      'comuna' => 'Comuna',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'doctosBeneficios' => 'DoctosBeneficios',
      'categoria' => 'Categoria',
      'empresa' => 'Empresa',
      'proveedor' => 'Proveedor',
      'rol' => 'Rol',
      'comuna' => 'Comuna',
    ),
    'labels' =>
    array (
      'Create Beneficios' => 'Opret Beneficios ',
    ),
  ),
  'Categoria' =>
  array (
    'fields' =>
    array (
      'subcategorias7' => 'Subcategorias7',
      'subcategoria' => 'Subcategoria',
      'subcategoria1' => 'Subcategoria',
      'subcategoria2' => 'Subcategoria2',
      'nombreCategoria' => 'Nombre Categoria',
      'subcategorias4' => 'Subcategorias4',
      'subcategoriass' => 'Subcategoriass',
      'relacionsubcategorias' => 'RelacionSubcategorias',
      'solicitudessrelacion' => 'Solicitudessrelacion',
      'beneficios' => 'Beneficios',
      'subcategorias' => 'Subcategorias',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'subcategorias7' => 'Subcategorias7',
      'subcategoria' => 'Subcategoria',
      'subcategoria1' => 'Subcategoria',
      'subcategoria2' => 'Subcategoria2',
      'subcategorias4' => 'Subcategorias4',
      'subcategoriass' => 'Subcategoriass',
      'relacionsubcategorias' => 'RelacionSubcategorias',
      'solicitudessrelacion' => 'Solicitudessrelacion',
      'beneficios' => 'Beneficios',
      'subcategorias' => 'Subcategorias',
    ),
    'labels' =>
    array (
      'Create Categoria' => 'Opret Categoria ',
    ),
  ),
  'Ciudad' =>
  array (
    'fields' =>
    array (
      'comunas' => 'Comunas',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'comunas' => 'Comunas',
    ),
    'labels' =>
    array (
      'Create Ciudad' => 'Opret Ciudad ',
    ),
  ),
  'Comuna' =>
  array (
    'fields' =>
    array (
      'ciudad' => 'Ciudad',
      'trabajador' => 'Trabajador',
      'beneficios' => 'Beneficios',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'ciudad' => 'Ciudad',
      'trabajador' => 'Trabajador',
      'beneficios' => 'Beneficios',
    ),
    'labels' =>
    array (
      'Create Comuna' => 'Opret Comuna ',
    ),
  ),
  'DoctosBeneficio' =>
  array (
    'fields' =>
    array (
      'descripcion' => 'Descripcion',
      'documentosbeneficio' => 'Documentos_beneficio',
      'beneficios' => 'Beneficios',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'beneficios' => 'Beneficios',
    ),
    'labels' =>
    array (
      'Create DoctosBeneficio' => 'Opret Doctos_beneficio ',
    ),
  ),
  'Empresa' =>
  array (
    'fields' =>
    array (
      'beneficios' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'links' =>
    array (
      'beneficios' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' =>
    array (
      'Create Empresa' => 'Opret Empresa ',
    ),
  ),
  'Formularios' =>
  array (
    'fields' =>
    array (
      'address' => 'Adresse',
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
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
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
      'Create Formularios' => 'Opret Formulario',
    ),
    'tooltips' =>
    array (
      'rut' => 'Ingrese Rut  (Ej: 12.345.678-9)',
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
  'Proveedor' =>
  array (
    'fields' =>
    array (
      'rut' => 'Rut',
      'direccion' => 'Direccion',
      'beneficios' => 'Beneficios',
    ),
    'links' =>
    array (
      'beneficios' => 'Beneficios',
    ),
    'labels' =>
    array (
      'Create Proveedor' => 'Opret Proveedor ',
    ),
  ),
  'Rol' =>
  array (
    'fields' =>
    array (
      'beneficioss' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'beneficioss' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' =>
    array (
      'Create Rol' => 'Opret Rol ',
    ),
  ),
  'Solicitudes' =>
  array (
    'fields' =>
    array (
      'address' => 'Adresse',
      'rut' => 'Rut',
      'estadoSolicitud' => 'Estado solicitud',
      'beneficio' => 'Beneficio',
      'carga' => 'Carga',
      'ciudad' => 'Ciudad',
      'categoria' => 'Categoria',
      'subcategoria' => 'Subcategoria',
      'documento' => 'Documento',
      'subcategorias' => 'Subcategorias',
      'subcategoria3' => 'Subcategoria3',
      'numeroSolicitud' => 'N° Solicitud',
      'fechahasta' => 'Duración del beneficio',
      'relacionsubcategoria' => 'relacionSubcategoria',
      'categoriarela' => 'Categoriarela',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'subcategorias' => 'Subcategorias',
      'subcategoria3' => 'Subcategoria3',
      'relacionsubcategoria' => 'relacionSubcategoria',
      'categoriarela' => 'Categoriarela',
    ),
    'labels' =>
    array (
      'Create Solicitudes' => 'Opret Solicitudes',
    ),
    'options' =>
    array (
      'estadoSolicitud' =>
      array (
        'Aprobado' => 'Aprobado',
        'En proceso' => 'En proceso',
        'Rechazado' => 'Rechazado',
        'Cancelado' => 'Cancelado',
      ),
      'carga' =>
      array (
      ),
      'ciudad' =>
      array (
      ),
      'categoria' =>
      array (
      ),
      'subcategoria' =>
      array (
      ),
    ),
  ),
  'Subcategoria' =>
  array (
    'fields' =>
    array (
      'idcategoria' => 'Idcategoria',
      'categoria1' => 'Categoria',
      'nombreSubcategoria' => 'NombreSubcategoria',
      'categoria2' => 'Categoria2',
      'categoria4' => 'Categoria4',
      'categoriass' => 'Categoriass',
      'relacioncategoria' => 'RelacionCategoria',
      'relacionsolicitudes' => 'relacionSolicitudes',
      'categoria' => 'Categoria',
    ),
    'links' =>
    array (
      'meetings' => 'Møder',
      'calls' => 'Opkald',
      'tasks' => 'Opgaver',
      'categoria1' => 'Categoria',
      'categoria2' => 'Categoria2',
      'categoria4' => 'Categoria4',
      'categoriass' => 'Categoriass',
      'relacioncategoria' => 'RelacionCategoria',
      'relacionsolicitudes' => 'relacionSolicitudes',
      'categoria' => 'Categoria',
    ),
    'labels' =>
    array (
      'Create Subcategoria' => 'Opret Subcategoria ',
    ),
  ),
  'Trabajador' =>
  array (
    'fields' =>
    array (
      'nombre' => 'Nombres',
      'rut' => 'Rut',
      'apellidopaterno' => 'Apellido_paterno',
      'apellidomaterno' => 'Apellido_materno',
      'nombrecompleto' => 'Nombre_completo',
      'direccion' => 'Direccion',
      'email' => 'Email',
      'telefono' => 'Telefono',
      'comunarelacion' => 'Comunarelacion',
      'empresas' => 'Empresas',
      'rol' => 'Rol',
      'empresa' => 'Empresa',
    ),
    'links' =>
    array (
      'comunarelacion' => 'Comunarelacion',
      'empresas' => 'Empresas',
      'rol' => 'Rol',
      'empresa' => 'Empresa',
    ),
    'labels' =>
    array (
      'Create Trabajador' => 'Opret Trabajador ',
    ),
  ),
);
?>
