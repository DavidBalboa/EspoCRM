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
      'Enabled' => 'Geactiveerd',
      'Disabled' => 'Uitgeschakeld',
      'System' => 'Systeem',
      'Users' => 'Gebruikers',
      'Email' => 'E-mail',
      'Data' => 'Data',
      'Customization' => 'Aanpassing',
      'Available Fields' => 'Beschikbare Velden',
      'Layout' => 'Layout',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Kader toevoegen',
      'Add Field' => 'Veld toevoegen',
      'Settings' => 'Instellingen',
      'Scheduled Jobs' => 'Geplande Opdrachten',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Cache Opschonen',
      'Rebuild' => 'Herbouwen',
      'Teams' => 'Groepen',
      'Roles' => 'Functies',
      'Portal' => 'Portal',
      'Portals' => 'Portals',
      'Portal Roles' => 'Portal Roles',
      'Portal Users' => 'Portal Users',
      'Outbound Emails' => 'Uitgaande Emails',
      'Group Email Accounts' => 'Group Email Accounts',
      'Personal Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'Inkomende Emails',
      'Email Templates' => 'Email Templates',
      'Import' => 'Importeren',
      'Layout Manager' => 'Layout Manager',
      'User Interface' => 'Gebruikers Interface',
      'Auth Tokens' => 'Auth Token',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Authenticatie',
      'Currency' => 'Valuta',
      'Integrations' => 'Integraties',
      'Extensions' => 'Extensies',
      'Upload' => 'Upload',
      'Installing...' => 'Installeren...',
      'Upgrading...' => 'Bezig met upgraden...',
      'Upgraded successfully' => 'Upgrade voltooid',
      'Installed successfully' => 'Installatie voltooid',
      'Ready for upgrade' => 'Gereed voor upgrade',
      'Run Upgrade' => 'Upgrade uitvoeren',
      'Install' => 'Installeren',
      'Ready for installation' => 'Gereed voor installatie',
      'Uninstalling...' => 'Bezig met deinstalleren...',
      'Uninstalled' => 'Gedeinstalleerd',
      'Create Entity' => 'Create Entity',
      'Edit Entity' => 'Edit Entity',
      'Create Link' => 'Create Link',
      'Edit Link' => 'Edit Link',
      'Notifications' => 'Meldingen',
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
      'list' => 'Lijst',
      'detail' => 'Detail',
      'listSmall' => 'Lijst (klein)',
      'detailSmall' => 'Detail (klein)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Zoek Filters',
      'massUpdate' => 'Massa Update',
      'relationships' => 'Relaties',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Omzetten Lead',
      'listForAccount' => 'List (for Account)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Rangschikking',
      'foreign' => 'Buitenland',
      'duration' => 'Duur',
      'password' => 'Wachtwoord',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-vermeerdering',
      'bool' => 'Bool',
      'currency' => 'Valuta',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Datum',
      'datetime' => 'Datum Tijd',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'E-mail',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Drijvende komma',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Meerdere',
      'linkParent' => 'Link Parent',
      'phone' => 'Telefoon',
      'text' => 'Tekst',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Bestand',
      'image' => 'Afbeelding',
      'multiEnum' => 'Multi-Enum',
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
      'parsonName' => 'Naam Persoon',
      'multienim' => 'Multienum',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Record Naam',
      'label' => 'Label',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Verplicht',
      'default' => 'Standaard',
      'maxLength' => 'Max Lengte',
      'options' => 'Opties',
      'after' => 'Achter (veld)',
      'before' => 'Voor (veld)',
      'link' => 'Link',
      'field' => 'Veld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Vertaling',
      'previewSize' => 'Preview Afmeting',
      'noEmptyString' => 'No Empty String',
      'defaultType' => 'Default Type',
      'seeMoreDisabled' => 'Disable Text Cut',
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
      'upgradeVersion' => 'Uw EspoCRM wordt geupgrade naar versie <strong>{version}</strong>. Dit kan enige tijd duren.',
      'upgradeDone' => 'Uw EspoCRM is geupgrade naar versie <strong>{version}</strong>. Herstart uw browser scherm.',
      'upgradeBackup' => 'We adviseren om eerst een backup te maken van uw EspoCRM bestanden en data, alvorens te upgraden.',
      'thousandSeparatorEqualsDecimalMark' => 'Het duizendtal scheidingsteken mag niet hetzelfde zijn als het decimaalteken.',
      'userHasNoEmailAddress' => 'Gebruiker heeft geen emailadres.',
      'selectEntityType' => 'Selecteer de eenheid soort in het linker menu.',
      'selectUpgradePackage' => 'Selecteer het upgradebestand',
      'downloadUpgradePackage' => 'Download benodigde upgrade bestanden <a href="{url}">hier</a>.',
      'selectLayout' => 'Selecteer de layout in het linker menu en pas deze aan.',
      'selectExtensionPackage' => 'Selecteer extensie bestand',
      'extensionInstalled' => 'Extensie {name} {version} is geinstalleerd.',
      'installExtension' => 'Extensie {name} {version} is gereed voor installatie.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Extensie definitief verwijderen?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systeem instellingen van het programma.',
      'scheduledJob' => 'Opdrachten die uitgevoerd worden door cron.',
      'upgrade' => 'Upgrade EspoCRM.',
      'clearCache' => 'Verwijder backend cache.',
      'rebuild' => 'Reconstrueer backend en schoon het geheugen.',
      'users' => 'Gebruikers beheer.',
      'teams' => 'Groepen beheer.',
      'roles' => 'Functie beheer.',
      'portals' => 'Portals management.',
      'portalRoles' => 'Roles for portal.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'SMTP instellingen voor uitgaande emails.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Users email accounts.',
      'emailTemplates' => 'Templates voor uitgaande emails.',
      'import' => 'Importeer data vanuit CSV bestand.',
      'layoutManager' => 'Bewerk layouts (lijst, detail, bewerk, zoeken, massa update).',
      'entityManager' => 'Create custom entities, edit existing ones. Manage field and relationships.',
      'userInterface' => 'Configureer UI.',
      'authTokens' => 'Actieve bevestigde sessie. IP adres en laatste inlogdatum.',
      'authentication' => 'Verificatie-instellingen',
      'currency' => 'Valuta instellingen en tarieven.',
      'extensions' => 'Extensies (de)installeren.',
      'integrations' => 'Integration with third-party services.',
      'notifications' => 'In-app and email notification settings.',
      'inboundEmails' => 'Groep IMAP email accounts. Email importeren en Email-naar-Casus.',
      'emailFilters' => 'Emails messages that match specified filter won\'t be imported.',
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
        'x-small' => 'Extra klein',
        'small' => 'Klein',
        'medium' => 'Middel',
        'large' => 'Groot',
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
      'user' => 'Gebruiker',
      'ipAddress' => 'IP Adres',
      'lastAccess' => 'Datum van laatste toegang',
      'createdAt' => 'Datum Login',
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
      'dateFrom' => 'Datum Vanaf',
      'dateTo' => 'Datum Tot',
      'autorefreshInterval' => 'Automatisch bijwerken interval',
      'displayRecords' => 'Velden weergeven',
      'isDoubleHeight' => 'Hoogte 2x',
      'mode' => 'Mode',
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
        'agendaWeek' => 'Week (agenda)',
        'basicWeek' => 'Week',
        'month' => 'Month',
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
      'name' => 'Onderwerp',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateSent' => 'Datum verzonden',
      'from' => 'Van',
      'to' => 'Naar',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Reply To',
      'replyToString' => 'Reply To (String)',
      'isHtml' => 'Is Html',
      'body' => 'Inhoud',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'selectTemplate' => 'Selecteer Template',
      'fromEmailAddress' => 'Van Adres',
      'toEmailAddresses' => 'Naar Adres',
      'emailAddress' => 'E-mailadres',
      'deliveryDate' => 'Afleverdatum',
      'account' => 'Account',
      'users' => 'Gebruikers',
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
      'Draft' => 'Concept',
      'Sending' => 'Verzenden',
      'Sent' => 'Verstuur',
      'Archived' => 'Archiveren',
      'Received' => 'Received',
    ),
    'labels' => 
    array (
      'Create Email' => 'Archiveer Email',
      'Archive Email' => 'Archiveer Email',
      'Compose' => 'Maak',
      'Reply' => 'Antwoord',
      'Reply to All' => 'Antwoord allen',
      'Forward' => 'Doorsturen',
      'Original message' => 'Originele bericht',
      'Forwarded message' => 'Doorgestuurd bericht',
      'Email Accounts' => 'Email Accounts',
      'Inbound Emails' => 'Group Email Accounts',
      'Email Templates' => 'Email Templates',
      'Send Test Email' => 'Stuur een test Email',
      'Send' => 'Versturen',
      'Email Address' => 'E-mailadres',
      'Mark Read' => 'Mark Read',
      'Sending...' => 'Verzenden...',
      'Save Draft' => 'Save Draft',
      'Mark all as read' => 'Mark all as read',
      'Show Plain Text' => 'Show Plain Text',
      'Mark as Important' => 'Mark as Important',
      'Unmark Importance' => 'Unmark Importance',
      'Move to Trash' => 'Move to Trash',
      'Retrieve from Trash' => 'Retrieve from Trash',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'Create Lead' => 'Lead Aanmaken',
      'Create Contact' => 'Contact Aanmaken',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Taak Aanmaken',
      'Create Case' => 'Create Case',
      'Mark as Not Important' => 'Mark as Not Important',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Geen SMTP setup. {link}.',
      'testEmailSent' => 'Test email is verzonden',
      'emailSent' => 'Email has been sent',
      'savedAsDraft' => 'Saved as draft',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Verstuur',
      'archived' => 'Archiveren',
      'inbox' => 'Inbox',
      'drafts' => 'Drafts',
      'trash' => 'Trash',
      'important' => 'Important',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Mark as Read',
      'markAsNotRead' => 'Mark as Not Read',
      'markAsImportant' => 'Mark as Important',
      'markAsNotImportant' => 'Mark as Not Important',
      'moveToTrash' => 'Move to Trash',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Gebruikersnaam',
      'password' => 'Wachtwoord',
      'port' => 'Poort',
      'monitoredFolders' => 'Gecontroleerde Folders',
      'ssl' => 'SSL',
      'fetchSince' => 'Opgehaald Vanaf',
      'emailAddress' => 'E-mailadres',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Laat opgehaalde e-mails als ongelezen staan',
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
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'E-mail Account Aanmaken',
      'IMAP' => 'IMAP',
      'Main' => 'Hoofd',
      'Test Connection' => 'Test verbinding',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kan geen verbinding maken met IMAP server',
      'connectionIsOk' => 'Connection is Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'You can add \'Sent\' folder to sync emails sent from external email client.',
      'storeSentEmails' => 'Sent emails will be stored on IMAP server. Email Address should much address an email is being sent from.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primair',
      'Opted Out' => 'Opted Out',
      'Invalid' => 'Onjuist',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Van',
      'to' => 'Naar',
      'subject' => 'Onderwerp',
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
      'name' => 'Just a name of the filter.',
      'subject' => 'Use wildcard *:

text* - starts with text,
*text* - contains text,
*text - ends with text.',
      'bodyContains' => 'Body of email contains any of specified words or phrases.',
      'from' => 'Emails being sent from the specified address. Leave empty if not needed.',
      'to' => 'Emails being sent to the specified address. Leave empty if not needed.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.',
      'parent' => 'Leave it empty to apply this filter globally (to all incoming emails).',
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
      'name' => 'Record Naam',
      'status' => 'Status',
      'isHtml' => 'Is Html',
      'body' => 'Inhoud',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'insertField' => 'Insert Field',
      'oneOff' => 'One-off',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'E-mail Template Aanmaken',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Available variables:

{optOutUrl} &#8211; URL for an unsubsbribe link};

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
      'Fields' => 'Fields',
      'Relationships' => 'Relaties',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'type' => 'Type',
      'labelSingular' => 'Label Singular',
      'labelPlural' => 'Label Plural',
      'stream' => 'Stream',
      'label' => 'Label',
      'linkType' => 'Link Type',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => 'Link',
      'labelForeign' => 'Foreign Label',
      'sortBy' => 'Default Order (field)',
      'sortDirection' => 'Default Order (direction)',
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
        '' => 'None',
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
        'asc' => 'Ascending',
        'desc' => 'Descending',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entity has been created',
      'linkAlreadyExists' => 'Link name conflict.',
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
      'name' => 'Record Naam',
      'version' => 'Versie',
      'description' => 'Beschrijving',
      'isInstalled' => 'Geinstalleerd',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstalleren',
      'Install' => 'Installeren',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Extensie {name} is gedeinstalleerd',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Verbinden',
      'Connected' => 'Verbonden',
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
      'Email' => 'E-mail',
      'User' => 'Gebruiker',
      'Team' => 'Groep',
      'Role' => 'Functie',
      'EmailTemplate' => 'E-mail Template',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Email Account',
      'EmailAccountScope' => 'Email Account',
      'OutboundEmail' => 'Uitgaande E-mail',
      'ScheduledJob' => 'Geplande Opdracht',
      'ExternalAccount' => 'Extern Account',
      'Extension' => 'Extensie',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Binnenkomende E-mail',
      'Stream' => 'Stream',
      'Import' => 'Importeren',
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
      'Account' => 'Account',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Kans',
      'Meeting' => 'Vergadering',
      'Calendar' => 'Kalender',
      'Call' => 'Tel. Gesprek',
      'Task' => 'Taak',
      'Case' => 'Kwestie',
      'Document' => 'Document',
      'DocumentFolder' => 'Document Folder',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base Article',
      'KnowledgeBaseCategory' => 'Knowledge Base Category',
      'CampaignLogRecord' => 'Campaign Log Record',
      'Formularios' => 'Formulario',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-mails',
      'User' => 'Gebruikers',
      'Team' => 'Groepen',
      'Role' => 'Functies',
      'EmailTemplate' => 'Email Templates',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Email Accounts',
      'EmailAccountScope' => 'Email Accounts',
      'OutboundEmail' => 'Uitgaande Emails',
      'ScheduledJob' => 'Geplande Opdrachten',
      'ExternalAccount' => 'Externe Accounts',
      'Extension' => 'Extensies',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Group Email Accounts',
      'Stream' => 'Stream',
      'Import' => 'Import Results',
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
      'Account' => 'Klanten',
      'Contact' => 'Contacten',
      'Lead' => 'Leads',
      'Target' => 'Targets',
      'Opportunity' => 'Kansen',
      'Meeting' => 'Meetings',
      'Calendar' => 'Kalender',
      'Call' => 'Calls',
      'Task' => 'Tasks',
      'Case' => 'Casus',
      'Document' => 'Documenten',
      'DocumentFolder' => 'Document Folders',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Doellijsten',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base',
      'KnowledgeBaseCategory' => 'Knowledge Base Categories',
      'CampaignLogRecord' => 'Campaign Log Records',
      'Formularios' => 'Formularios',
    ),
    'labels' => 
    array (
      'Misc' => 'Versch.',
      'Merge' => 'Samenvoegen',
      'None' => 'None',
      'Home' => 'Home',
      'by' => 'door',
      'Saved' => 'Opgeslagen',
      'Error' => 'Fout',
      'Select' => 'Selecteer',
      'Not valid' => 'Ongeldig',
      'Please wait...' => 'Even geduld...',
      'Please wait' => 'Even geduld',
      'Loading...' => 'Laden...',
      'Uploading...' => 'Uploaden...',
      'Sending...' => 'Verzenden...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Verwijderd',
      'Posted' => 'Geplaatst',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Done' => 'Done',
      'Access denied' => 'Toegang gweigerd',
      'Not found' => 'Not found',
      'Access' => 'Toegang',
      'Are you sure?' => 'Zeker?',
      'Record has been removed' => 'Record is verwijderd',
      'Wrong username/password' => 'Onjuiste gebruikersnaam/wachtwoord',
      'Post cannot be empty' => 'Veld mag niet leeg zijn',
      'Removing...' => 'Verwijderen...',
      'Unlinking...' => 'Unlinken...',
      'Posting...' => 'Plaatsen...',
      'Username can not be empty!' => 'Gebruikersnaam mag niet leeg zijn!',
      'Cache is not enabled' => 'Cache is niet geactiveerd',
      'Cache has been cleared' => 'Cache is leeg gemaakt',
      'Rebuild has been done' => 'Het reconstrueren is klaar',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Opslaan...',
      'Modified' => 'Aangepast',
      'Created' => 'Gemaakt',
      'Create' => 'Aanmaken',
      'create' => 'maak',
      'Overview' => 'Overzicht',
      'Details' => 'Details',
      'Add Field' => 'Veld toevoegen',
      'Add Dashlet' => 'Dashlet Toevoegen',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Toevoegen',
      'Add Item' => 'Add Item',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Meer',
      'Search' => 'Zoeken',
      'Only My' => 'Alleen mijn',
      'Open' => 'Open',
      'Admin' => 'Beheerder',
      'About' => 'Over',
      'Refresh' => 'Vernieuwen',
      'Remove' => 'Verwijderen',
      'Options' => 'Opties',
      'Username' => 'Gebruikersnaam',
      'Password' => 'Wachtwoord',
      'Login' => 'Login',
      'Log Out' => 'Uitloggen',
      'Preferences' => 'Voorkeuren',
      'State' => 'Provincie',
      'Street' => 'Straat',
      'Country' => 'Land',
      'City' => 'Plaats',
      'PostalCode' => 'Postcode',
      'Followed' => 'Gevolgd',
      'Follow' => 'Volgen',
      'Followers' => 'Volgers',
      'Clear Local Cache' => 'Lokale Cache Schonen',
      'Actions' => 'Acties',
      'Delete' => 'Verwijder',
      'Update' => 'Update',
      'Save' => 'Opslaan',
      'Edit' => 'Bewerken',
      'View' => 'View',
      'Cancel' => 'Annuleren',
      'Apply' => 'Apply',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Massa Update',
      'Export' => 'Exporteer',
      'No Data' => 'Geen Data',
      'No Access' => 'Geen toegang',
      'All' => 'Alles',
      'Active' => 'Actief',
      'Inactive' => 'Inactief',
      'Write your comment here' => 'Schrijf hier uw opmerkingen',
      'Post' => 'Post',
      'Stream' => 'Stream',
      'Show more' => 'Toon meer',
      'Dashlet Options' => 'Kader Opties',
      'Full Form' => 'Volledig Formulier',
      'Insert' => 'Voeg in',
      'Person' => 'Person',
      'First Name' => 'Voornaam',
      'Last Name' => 'Achternaam',
      'Original' => 'Origineel',
      'You' => 'U',
      'you' => 'u',
      'change' => 'Pas aan',
      'Change' => 'Change',
      'Primary' => 'Primair',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administratie',
      'Run Import' => 'Start Importeren',
      'Duplicate' => 'Dupliceer',
      'Notifications' => 'Meldingen',
      'Mark all read' => 'Markeer als gelezen',
      'See more' => 'Bekijk meer',
      'Today' => 'Vandaag',
      'Tomorrow' => 'Morgen',
      'Yesterday' => 'Gisteren',
      'Submit' => 'Stuur in',
      'Close' => 'Sluit',
      'Yes' => 'Ja',
      'No' => 'Nee',
      'Select All Results' => 'Select All Result',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Unlink All' => 'Unlink All',
      'Total' => 'Total',
      'Print to PDF' => 'Print to PDF',
      'Default' => 'Standaard',
      'Number' => 'Number',
      'From' => 'Van',
      'To' => 'Naar',
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
      'Create InboundEmail' => 'E-mail Gebruiker Instellen',
      'Activities' => 'Activiteiten',
      'History' => 'Historie',
      'Attendees' => 'Genodigden',
      'Schedule Meeting' => 'Afspraak Plannen',
      'Schedule Call' => 'Geplande Oproep',
      'Compose Email' => 'E-mail aanmaken',
      'Log Meeting' => 'Afspraak vastleggen',
      'Log Call' => 'Tel. Gesprek Vastleggen',
      'Archive Email' => 'Archiveer Email',
      'Create Task' => 'Taak Aanmaken',
      'Tasks' => 'Tasks',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Even geduld...',
      'posting' => 'Posting...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'U heeft niets gewijzigd',
      'duplicate' => 'Het veld dat u maakt lijkt een duplicaat',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} is verplicht',
      'fieldShouldBeEmail' => '{field} moet een geldig mailadres zijn',
      'fieldShouldBeFloat' => '{field} moet een geldige waarde zijn',
      'fieldShouldBeInt' => '{fiels} moet een geldige integer zijn',
      'fieldShouldBeDate' => '{field} moet een geldige datum zijn',
      'fieldShouldBeDatetime' => '{field} moet een geldige datum/tijd zijn',
      'fieldShouldAfter' => '{field} moet na {otherField} komen',
      'fieldShouldBefore' => '{field} moet voor {otherField} komen',
      'fieldShouldBeBetween' => '{field} moet een waarde hebben tussen {min} en {max}',
      'fieldShouldBeLess' => '{field} moet minder zijn dan {value}',
      'fieldShouldBeGreater' => '{field} moet groter zijn dan {value}',
      'fieldBadPasswordConfirm' => '{field} onjuist bevestigd',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Voorkeuren zijn naar standaard waarden terugezet',
      'confirmation' => 'Zeker?',
      'unlinkAllConfirmation' => 'Are you sure you want to unlink all related records?',
      'resetPreferencesConfirmation' => 'Weet u zeker dat u de voorkeuren naar standaard terug wil zetten?',
      'removeRecordConfirmation' => 'Record verwijderen?',
      'unlinkRecordConfirmation' => 'Relatie ontkoppelen?',
      'removeSelectedRecordsConfirmation' => 'Geselecteerde records verwijderen?',
      'massUpdateResult' => '{count} bestanden waren aangepast',
      'massUpdateResultSingle' => '{count} bestanden zijn aangepast ',
      'noRecordsUpdated' => 'Geen bestanden aangepast',
      'massRemoveResult' => '{count} bestanden waren verwijderd',
      'massRemoveResultSingle' => '{count} bestanden zijn verwijderd',
      'noRecordsRemoved' => 'Er werden geen bestanden verwijderd ',
      'clickToRefresh' => 'Click to refresh',
      'streamPostInfo' => 'Type <strong>@username</strong> to mention users in the post.

Available markdown syntax:
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
[text](url)',
      'writeYourCommentHere' => 'Schrijf hier uw opmerkingen',
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
      'onlyMy' => 'Alleen mijn',
      'followed' => 'Gevolgd',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Gevolgd',
      'all' => 'Alles',
    ),
    'massActions' => 
    array (
      'remove' => 'Verwijderen',
      'merge' => 'Samenvoegen',
      'massUpdate' => 'Massa Update',
      'export' => 'Exporteer',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'firstName' => 'Voornaam',
      'lastName' => 'Achternaam',
      'salutationName' => 'Aanhef',
      'assignedUser' => 'Toegewezen Gebruiker',
      'assignedUsers' => 'Assigned Users',
      'emailAddress' => 'E-mail',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Toegewezen Gebruikersnaam',
      'teams' => 'Groepen',
      'createdAt' => 'Aangemaakt op',
      'modifiedAt' => 'Aangepast op',
      'createdBy' => 'Aangemaakt door',
      'modifiedBy' => 'Aangepast door',
      'description' => 'Beschrijving',
      'address' => 'Adres',
      'phoneNumber' => 'Telefoon',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Order',
      'parent' => 'Behorende bij',
      'children' => 'Children',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Plaats',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'Postcode',
      'billingAddressState' => 'Provincie',
      'billingAddressStreet' => 'Straat',
      'billingAddressMap' => 'Map',
      'addressCity' => 'Plaats',
      'addressStreet' => 'Straat',
      'addressCountry' => 'Land',
      'addressState' => 'Provincie',
      'addressPostalCode' => 'Postcode',
      'addressMap' => 'Map',
      'shippingAddressCity' => 'Plaats (Verzending)',
      'shippingAddressStreet' => 'Straat (Verzending)',
      'shippingAddressCountry' => 'Land (Verzending)',
      'shippingAddressState' => 'Provincie (Verzending)',
      'shippingAddressPostalCode' => 'Postcode (Verzending)',
      'shippingAddressMap' => 'Map (Shipping)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Toegewezen Gebruiker',
      'createdBy' => 'Aangemaakt door',
      'modifiedBy' => 'Aangepast door',
      'team' => 'Groep',
      'roles' => 'Functies',
      'teams' => 'Groepen',
      'users' => 'Gebruikers',
      'parent' => 'Behorende bij',
      'children' => 'Children',
      'contacts' => 'Contacten',
      'opportunities' => 'Kansen',
      'leads' => 'Leads',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'E-mails',
      'accounts' => 'Klanten',
      'cases' => 'Casus',
      'documents' => 'Documenten',
      'account' => 'Account',
      'opportunity' => 'Kans',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Emails' => 'My Inbox',
      'Records' => 'Record List',
      'Leads' => 'Mijn Leads',
      'Opportunities' => 'Mijn Kansen',
      'Tasks' => 'Mijn Taken',
      'Cases' => 'Mijn Casus',
      'Calendar' => 'Kalender',
      'Calls' => 'Mijn Tel.gesprekken',
      'Meetings' => 'Mijn Afspraken',
      'OpportunitiesByStage' => 'Status van Kansen',
      'OpportunitiesByLeadSource' => 'Kansen per Leadbron',
      'SalesByMonth' => 'Verkopen per maand',
      'SalesPipeline' => 'Verkoop mogelijkheden',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'E-mail ontvangen van',
      'entityRemoved' => '{user} removed {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} geplaatst op {entityType} {entity}',
      'attach' => '{user} toegevoegd aan {entityType} {entity}',
      'status' => '{user} paste {field} aan op {entityType} {entity}',
      'update' => '{user} paste {entityType} {entity} aan',
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
      'mentionInPost' => '{user} vermeldde {mentioned} op {entityType} {entity}',
      'mentionYouInPost' => '{user} mentioned you in {entityType} {entity}',
      'mentionInPostTarget' => '{user} mentioned {mentioned} in post',
      'mentionYouInPostTarget' => '{user} mentioned you in post to {target}',
      'mentionYouInPostTargetAll' => '{user} mentioned you in post to all',
      'mentionYouInPostTargetNoTarget' => '{user} mentioned you in post',
      'create' => '{user} creërde {entityType} {entity} ',
      'createThis' => '{user} creërde deze {entityType} ',
      'createAssignedThis' => '{user} maakte deze {entityType} toegewezen aan {assignee}',
      'createAssigned' => '{user} creërde {entityType} {entity} en wees toe aan {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} wees {entityType} {entity} toe aan {assignee}',
      'assignThis' => '{user} wees deze {entityType} toe aan {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} gepost',
      'attachThis' => '{user} toegevoegd',
      'statusThis' => '{user} paste {field} aan',
      'updateThis' => '{user} paste dit {entityType} aan',
      'createRelatedThis' => '{user} maakte {relatedEntityType} {relatedEntity} en koppelde dit aan {entityType}',
      'createRelated' => '{user} creërde {relatedEntityType} {relatedEntity} gekoppeld aan {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => 'E-mail ontvangen van',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} is ontvangen',
      'emailReceivedInitialThis' => 'Email bericht ontvangen en maakte deze {entityType}',
      'emailReceivedFrom' => 'E-mail ontvangen van {from}, behorende bij {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} is ontvangen voor {entityType} {entity}',
      'emailReceivedInitial' => 'Email is ontvangen en gemaakt met {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} sent email related to {entityType} {entity}',
      'emailSentThis' => '{by} sent email',
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
        0 => 'Januari',
        1 => 'Februari',
        2 => 'Maart',
        3 => 'April',
        4 => 'Mei',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'Augustus',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Maa',
        3 => 'Apr',
        4 => 'Mei',
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
        0 => 'Zondag',
        1 => 'Maandag',
        2 => 'Dinsdag',
        3 => 'Woensdag',
        4 => 'Donderdag',
        5 => 'Vrijdag',
        6 => 'Zaterdag',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Zon',
        1 => 'Maa',
        2 => 'Din',
        3 => 'Woe',
        4 => 'Don',
        5 => 'Vrij',
        6 => 'Zat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Zo',
        1 => 'Ma',
        2 => 'Di',
        3 => 'Wo',
        4 => 'Do',
        5 => 'Vr',
        6 => 'Za',
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
        'Mr.' => 'Dhr.',
        'Mrs.' => 'Mevr.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbeidzjaans',
        'be_BY' => 'Wit-Russisch',
        'bg_BG' => 'Bulgaars',
        'bn_IN' => 'Bengaals',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Catalaans',
        'cs_CZ' => 'Tsjechisch',
        'cy_GB' => 'Wels',
        'da_DK' => 'Deens',
        'de_DE' => 'Duits',
        'el_GR' => 'Grieks',
        'en_GB' => 'Engels (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'Engels (VS)',
        'es_ES' => 'Spaans (Spanje)',
        'et_EE' => 'Estlands',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Perzisch',
        'fi_FI' => 'Fins',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'Frans (Canada)',
        'fr_FR' => 'Frans (Frankrijk)',
        'ga_IE' => 'Iers',
        'gl_ES' => 'Galicisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebreeuws',
        'hi_IN' => 'Hindies',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Hongaars',
        'hy_AM' => 'Armeens',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'IJslands',
        'it_IT' => 'Italiaans',
        'ja_JP' => 'Japans',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreaans',
        'ku_TR' => 'Koerdisch',
        'lt_LT' => 'Litouws',
        'lv_LV' => 'Lets',
        'mk_MK' => 'Macedonisch',
        'ml_IN' => 'Maleisisch',
        'ms_MY' => 'Maleis',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Noors Nynorsk',
        'ne_NP' => 'Nepalees',
        'nl_NL' => 'Nederlands',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Pools',
        'ps_AF' => 'Pasjtoe',
        'pt_BR' => 'Portugees (Brazilie',
        'pt_PT' => 'Portugees (Portugal)',
        'ro_RO' => 'Roemeens',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowaaks',
        'sl_SI' => 'Sloveens',
        'sq_AL' => 'Albanees',
        'sr_RS' => 'Servisch',
        'sv_SE' => 'Zweeds',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thais',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turks',
        'uk_UA' => 'OekraГЇens',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'ViГ«tnamees',
        'zh_CN' => 'Vereenvoudigd Chinees (China)',
        'zh_HK' => 'Traditioneel Chinees (Hong Kong)',
        'zh_TW' => 'Traditioneel Chinees (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Op',
        'notOn' => 'Niet op',
        'after' => 'Na',
        'before' => 'Voor',
        'between' => 'Tussen',
        'today' => 'Vandaag',
        'past' => 'Verleden',
        'future' => 'Toekomst',
        'currentMonth' => 'Huidige Maand',
        'lastMonth' => 'Vorige Maand',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Dit Kwartaal',
        'lastQuarter' => 'Vorige Kwartaal',
        'currentYear' => 'Huidige Jaar',
        'lastYear' => 'Vorig Jaar',
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
        'is' => 'Is',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Is From Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Equals',
        'like' => 'Is Like (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Equals',
        'notEquals' => 'Is niet gelijk aan',
        'greaterThan' => 'Groter dan',
        'lessThan' => 'Minder dan',
        'greaterThanOrEquals' => 'Groter dan of gelijk aan',
        'lessThanOrEquals' => 'Minder dan of gelijk aan',
        'between' => 'Tussen',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 seconden',
        1 => '1 minuut',
        2 => '2 minuten',
        5 => '5 minuten',
        10 => '10 minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobiel',
        'Office' => 'Kantoor',
        'Fax' => 'Fax',
        'Home' => 'Prive',
        'Other' => 'Overig',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'E-mail',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'U kunt hier de vertaling vinden: https://github.com/xx',
        'font' => 
        array (
          'bold' => 'Vet',
          'italic' => 'Italic',
          'underline' => 'Onderstreept',
          'strike' => 'Opvallend',
          'clear' => 'Verwijder Opmaak Lettertype',
          'height' => 'Lijn Hoogte',
          'name' => 'Familie Lettertype',
          'size' => 'Lettergrootte',
        ),
        'image' => 
        array (
          'image' => 'Foto',
          'insert' => 'Afbeelding invoegen',
          'resizeFull' => 'Volledig schalen',
          'resizeHalf' => 'Schaal 50%',
          'resizeQuarter' => 'Schaal 25%',
          'floatLeft' => 'Links zweven',
          'floatRight' => 'Rechts zweven',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Sleep afbeelding naar hier',
          'selectFromFiles' => 'Selecteer uit bestanden',
          'url' => 'Afbeelding URL',
          'remove' => 'Afbeelding verwijderen',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link invoegen',
          'unlink' => 'Unlink',
          'edit' => 'Bewerken',
          'textToDisplay' => 'Weer te geven tekst',
          'url' => 'Naar welke URL dient deze link te verwijzen?',
          'openInNewWindow' => 'In nieuw scherm openen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video invoegen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram of DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabel',
        ),
        'hr' => 
        array (
          'insert' => 'Horizontale Regel toevoegen',
        ),
        'style' => 
        array (
          'style' => 'Stijl',
          'normal' => 'Normaal',
          'blockquote' => 'Citaat',
          'pre' => 'Code',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Ongesorteerde lijst',
          'ordered' => 'Gesorteerde lijst',
        ),
        'options' => 
        array (
          'help' => 'Hulp',
          'fullscreen' => 'Volledig scherm',
          'codeview' => 'Code View',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraaf',
          'outdent' => 'Outdent',
          'indent' => 'Indent',
          'left' => 'Links uitlijnen',
          'center' => 'Centreren',
          'right' => 'Rechts uitlijnen',
          'justify' => 'Rechtsvaardig volledig',
        ),
        'color' => 
        array (
          'recent' => 'Recente kleur',
          'more' => 'Meer kleur',
          'background' => 'Achtergrondkleur',
          'foreground' => 'Tekstkleur',
          'transparent' => 'Transparent',
          'setTransparent' => 'Transparent instellen',
          'reset' => 'Reset',
          'resetToDefault' => 'Standaardinstellingen terugzetten',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Keyboard snelkoppelingen',
          'close' => 'Sluit',
          'textFormatting' => 'Tekstopmaak',
          'action' => 'Actie',
          'paragraphFormatting' => 'Paragraafopmaak',
          'documentStyle' => 'Documentopmaak',
        ),
        'history' => 
        array (
          'undo' => 'Herstel',
          'redo' => 'Opnieuw',
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
      'EspoVertical' => 'Espo (Vertical)',
      'SakuraVertical' => 'Sakura (Vertical)',
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
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Voor Import geef Enter',
      'Run Import' => 'Start Importeren',
      'Back' => 'Terug',
      'Field Mapping' => 'Velden Overzicht',
      'Default Values' => 'Voorkeur waarden',
      'Add Field' => 'Veld toevoegen',
      'Created' => 'Gemaakt',
      'Updated' => 'Geupdate',
      'Result' => 'Resultaat',
      'Show records' => 'Toon Velden',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
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
      'utf8' => 'Should be UTF-8 encoded',
      'duplicatesRemoved' => 'Duplicates removed',
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
      'file' => 'Bestand',
      'entityType' => 'Entity Type',
      'imported' => 'Imported Records',
      'duplicates' => 'Duplicate Records',
      'updated' => 'Updated Records',
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
      'name' => 'Record Naam',
      'emailAddress' => 'E-mailadres',
      'team' => 'Groep',
      'status' => 'Status',
      'assignToUser' => 'Assign to User',
      'host' => 'Host',
      'username' => 'Gebruikersnaam',
      'password' => 'Wachtwoord',
      'port' => 'Poort',
      'monitoredFolders' => 'Gecontroleerde Folders',
      'trashFolder' => 'Trash Folder',
      'ssl' => 'SSL',
      'createCase' => 'Create Case',
      'reply' => 'Auto-Reply',
      'caseDistribution' => 'Case Distribution',
      'replyEmailTemplate' => 'Reply Email Template',
      'replyFromAddress' => 'Reply From Address',
      'replyToAddress' => 'Reply To Address',
      'replyFromName' => 'Reply From Name',
      'targetUserPosition' => 'Target User Position',
      'fetchSince' => 'Opgehaald Vanaf',
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
      'reply' => 'Notify email senders that their emails has been received.

 Only one email will be sent to a particular recipient during some period of time to prevent looping.',
      'createCase' => 'Automatically create case from incoming emails.',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User emails/cases will be assigned to.',
      'team' => 'Team emails/cases will be related to.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Define the position of users which will be destributed with cases.',
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
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
      ),
      'caseDistribution' => 
      array (
        '' => 'None',
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'E-mail Account Aanmaken',
      'IMAP' => 'IMAP',
      'Actions' => 'Acties',
      'Main' => 'Hoofd',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kan geen verbinding maken met IMAP server',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Geactiveerd',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Geheim',
      'redirectUri' => 'Redirect URI',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Selecteer een integratie in het menu.',
      'noIntegrations' => 'No Integrations is available.',
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
      'method' => 'Method',
      'methodName' => 'Method',
      'scheduledJob' => 'Geplande Opdracht',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'In afwachting',
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
      'width' => 'Width (%)',
      'link' => 'Link',
      'notSortable' => 'Not Sortable',
      'align' => 'Align',
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
        'left' => 'Left',
        'right' => 'Right',
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
      'attachments' => 'Bijlagen',
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
      'all' => 'Alles',
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
      'dateFormat' => 'Datumnotatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijdzone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Decimaal scheidingsteken',
      'defaultCurrency' => 'Standaard Valuta',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'smtpServer' => 'Server',
      'smtpPort' => 'Poort',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Beveiliging',
      'smtpUsername' => 'Gebruikersnaam',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Wachtwoord',
      'smtpEmailAddress' => 'E-mailadres',
      'exportDelimiter' => 'Scheidingsteken Export',
      'receiveAssignmentEmailNotifications' => 'Ontvang bevestiging toewijzingen per email.',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => 'Email Signature',
      'dashboardTabList' => 'Tab List',
      'defaultReminders' => 'Default Reminders',
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
        0 => 'Zondag',
        1 => 'Maandag',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Meldingen',
      'User Interface' => 'Gebruikers Interface',
      'SMTP' => 'SMTP',
      'Misc' => 'Versch.',
      'Locale' => 'Lokaal',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'User will automatically follow all new records of the selected entity types, will see information in the stream and receive notifications.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'roles' => 'Functies',
      'assignmentPermission' => 'Assignment Permission',
      'userPermission' => 'User Permission',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Gebruikers',
      'teams' => 'Groepen',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Allows to restrict an ability for users to assign records to other users.

all - no restriction

team - can assign to users from own teams

no - can assign only to self',
      'userPermission' => 'Allows users to view activities of other users.

all - can view all

team - can view user\'s activities from own teams

no - can\'t view',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Toegang',
      'Create Role' => 'Functie aanmaken',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'niet-actief',
        'enabled' => 'ingeschakeld',
        'disabled' => 'uitgeschakeld',
      ),
      'levelList' => 
      array (
        'all' => 'allemaal',
        'team' => 'team',
        'account' => 'account',
        'contact' => 'contact',
        'own' => 'eigen',
        'no' => 'nee',
        'yes' => 'yes',
        'not-set' => 'niet-actief',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Lees',
      'edit' => 'Bewerken',
      'delete' => 'Verwijder',
      'stream' => 'Stream',
      'create' => 'Create',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Alle wijzigingen in een toegangscontrolesysteem worden toegepast nadat de cache is geschoond.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Scheduling (crontab notatie)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Geplande Opdracht Aanmaken',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Opschonen',
        'CheckInboundEmails' => 'Controleer Binnenkomende Emails',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Stuur Herinnering Email',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Opgelet; Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'mac' => 'Opgelet; Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'windows' => 'Opgelet: Maak een batch bestand met de volgende commando\'s om de geplande opdrachten voor Espo onder Windows te gebruiken:',
        'default' => 'Opgelet: Voeg deze regel toe aan de Cron Job (geplande opdracht):',
      ),
      'status' => 
      array (
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Defines when and how often job will be run

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
      'executionTime' => 'Start Tijd',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Gebruik Cache',
      'dateFormat' => 'Datumnotatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijdzone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Decimaal scheidingsteken',
      'defaultCurrency' => 'Standaard Valuta',
      'baseCurrency' => 'Basisvaluta',
      'currencyRates' => 'Tariefwaarden',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'companyLogo' => 'Bedrijfslogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Poort',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Beveiliging',
      'smtpUsername' => 'Gebruikersnaam',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Wachtwoord',
      'outboundEmailFromName' => 'Van Naam',
      'outboundEmailFromAddress' => 'Van Adres',
      'outboundEmailIsShared' => 'Is Gedeeld',
      'recordsPerPage' => 'Records per pagina',
      'recordsPerPageSmall' => 'Records per pagina (Klein)',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Lijst aanmaken',
      'exportDelimiter' => 'Scheidingsteken Export',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Authenticatie Methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Poort',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Gebruikersnaam',
      'ldapPassword' => 'Wachtwoord',
      'ldapBindRequiresDn' => 'Bind vereist DN',
      'ldapBaseDn' => 'Basis Dn',
      'ldapAccountCanonicalForm' => 'Standaard Formulier Gebruiker',
      'ldapAccountDomainName' => 'Domeinnaam Account',
      'ldapTryUsernameSplit' => 'Probeer gesplitste Gebruikersnaam',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Gebruiker aanmaken in EspoCRM',
      'ldapSecurity' => 'Beveiliging',
      'ldapUserLoginFilter' => 'Gebruikers Login Filter',
      'ldapAccountDomainNameShort' => 'Korte Gebruikers Domein Naam',
      'ldapOptReferrals' => 'Opt Referentie',
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
      'exportDisabled' => 'Exporteren Uitschakelen (Uitsluitend toegestaan voor Admin)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Verzend Email na Toewijzing',
      'assignmentEmailNotificationsEntityList' => 'Entities om over te informeren',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Avatar uitschakelen',
      'followCreatedEntities' => 'Follow Created Entities',
      'displayListViewRecordCount' => 'Display Total Count (on List View)',
      'theme' => 'Theme',
      'userThemesDisabled' => 'Disable User Themes',
      'emailMessageMaxSize' => 'Email Max Size (Mb)',
      'massEmailMaxPerHourCount' => 'Max count of emails sent per hour',
      'personalEmailMaxPortionSize' => 'Max email portion size for a personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for a group account fetching',
      'maxEmailAccountCount' => 'Max count of personal email accounts per user',
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
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Zondag',
        1 => 'Maandag',
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
      'recordsPerPageSmall' => 'Aantal records in relatie kaders.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Users will automatically follow records they created.',
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
      'System' => 'Systeem',
      'Locale' => 'Lokaal',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuratie',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Valutainstellingen',
      'Currency Rates' => 'Currency Rates',
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
      'name' => 'Record Naam',
      'roles' => 'Functies',
      'positionList' => 'Overzichtlijst',
    ),
    'links' => 
    array (
      'users' => 'Gebruikers',
      'notes' => 'Notes',
      'roles' => 'Roles',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Alle gebruikers van deze groep krijgen de rechten uit de geselecteerde rollen.',
      'positionList' => 'Beschikbare functies in dit team. Zoals Verkoop, Manager ed.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Groep Aanmaken',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'body' => 'Inhoud',
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
      'name' => 'Record Naam',
      'userName' => 'Gebruikersnaam',
      'title' => 'Titel',
      'isAdmin' => 'Is beheerder',
      'defaultTeam' => 'Standaardgroep',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telefoon',
      'roles' => 'Functies',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'teamRole' => 'Positie',
      'password' => 'Wachtwoord',
      'currentPassword' => 'Current Password',
      'passwordConfirm' => 'Bevestig Wachtwoord',
      'newPassword' => 'Nieuw Wachtwoord',
      'newPasswordConfirm' => 'Nieuwe Wachtwoord Bevestigen',
      'avatar' => 'Avatar',
      'isActive' => 'Is actief',
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
      'teams' => 'Groepen',
      'roles' => 'Functies',
      'notes' => 'Notes',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'tasks' => 'Tasks',
      'targetLists' => 'Doellijsten',
    ),
    'labels' => 
    array (
      'Create User' => 'Gebruiker Aanmaken',
      'Generate' => 'Genereer',
      'Access' => 'Toegang',
      'Preferences' => 'Voorkeuren',
      'Change Password' => 'Wachtwoord wijzigen',
      'Teams and Access Control' => 'Groeps toegang beheer',
      'Forgot Password?' => 'Wachtwoord vergeten?',
      'Password Change Request' => 'Verzoek voor aanpassen Wachtwoord',
      'Email Address' => 'E-mailadres',
      'External Accounts' => 'Externe Accounts',
      'Email Accounts' => 'Email Accounts',
      'Portal' => 'Portal',
      'Create Portal User' => 'Create Portal User',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Alle records aangemaakt door gebruiker worden standaard aan de groep gekoppeld.',
      'userName' => 'Letters a-z, cijfers 0-9 en underscores zijn toegestaan.',
      'isAdmin' => 'Gebruiker admin heeft overal toegang',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Tot welke groep deze gebruiekr behoord. Toegang beheer is afhankelijk van groep regels.',
      'roles' => 'Aanvullende toegangs regels. Gebruik dit als een gebruiker tot geen enkele groep behoord of als er meer rechten gegeven moeten worden.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Wachtwoord wordt naar het emailadres van de gebruiker verzonden.',
      'accountInfoEmailSubject' => 'Informatie Gebruiker',
      'accountInfoEmailBody' => 'Uw gegevens:

Gebruikersnaam: {userName}
Wachtwoord: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Verzoek tot Wachtwoord verandering',
      'passwordChangeLinkEmailBody' => 'U kunt het wachtwoord veranderen via deze link {link}. Deze unieke link (url) wordt spoedig weer opgeheven.',
      'passwordChanged' => 'Het wachtwoord is gewijzigd',
      'userCantBeEmpty' => 'Gebruikersnaam kan niet leeg zijn',
      'wrongUsernamePasword' => 'Onjuiste gebruikersnaam/wachtwoord',
      'emailAddressCantBeEmpty' => 'E-mail adres kan niet leeg zijn',
      'userNameEmailAddressNotFound' => 'Gebruikersnaam/E-mail adres niet gevonden',
      'forbidden' => 'Toegang niet juist, probeer later',
      'uniqueLinkHasBeenSent' => 'Een unieke link is naar het gespecificeerde email adres gezonden.',
      'passwordChangedByRequest' => 'Het wachtwoord is aangepast',
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
      'onlyMyTeam' => 'Only My Team',
    ),
    'presetFilters' => 
    array (
      'active' => 'Actief',
      'activePortal' => 'Portal Active',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'E-mail',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'billingAddress' => 'Factuur Adres',
      'shippingAddress' => 'Verzend Adres',
      'description' => 'Beschrijving',
      'sicCode' => 'Sic Code',
      'industry' => 'Industrie',
      'type' => 'Type',
      'contactRole' => 'Titel',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Contacten',
      'opportunities' => 'Kansen',
      'cases' => 'Casus',
      'documents' => 'Documenten',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Doellijsten',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klant',
        'Investor' => 'Investeerder',
        'Partner' => 'Partner',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotive',
        'Banking' => 'Bankwezen',
        'Biotechnology' => 'Biotechnology',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Chemical',
        'Construction' => 'Construction',
        'Computer' => 'Computer',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Onderwijs',
        'Electronics' => 'Electronica',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Verzekeringen',
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
      'Create Account' => 'Klant Aanmaken',
      'Copy Billing' => 'Kopieer van Factuur',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Customers',
      'partners' => 'Partners',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Month',
      'week' => 'Week',
      'day' => 'Dag',
      'agendaWeek' => 'Week',
      'agendaDay' => 'Dag',
      'timeline' => 'Timeline',
    ),
    'labels' => 
    array (
      'Today' => 'Vandaag',
      'Create' => 'Aanmaken',
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
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Eind Datum',
      'direction' => 'Richting',
      'duration' => 'Duur',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'reminders' => 'Herineringen',
      'account' => 'Account',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Gepland',
        'Held' => 'Vasthouden',
        'Not Held' => 'Niet Vasthouden',
      ),
      'direction' => 
      array (
        'Outbound' => 'Uitgaande',
        'Inbound' => 'Binnenkomende',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Geaccepteerd',
        'Declined' => 'Geweigerd',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Tel. Gesprek Aanmaken',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Uitnodiging versturen',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Gepland',
      'held' => 'Vasthouden',
      'todays' => 'Huidig',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'description' => 'Beschrijving',
      'status' => 'Status',
      'type' => 'Type',
      'startDate' => 'Start Date',
      'endDate' => 'End Date',
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Verstuur',
      'openedCount' => 'Opened',
      'clickedCount' => 'Clicked',
      'optedOutCount' => 'Opted Out',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Revenue',
      'revenueConverted' => 'revenue (converted)',
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
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Klanten',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'opportunities' => 'Kansen',
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
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planning',
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
        'Complete' => 'Complete',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Create Campaign',
      'Target Lists' => 'Doellijsten',
      'Statistics' => 'Statistics',
      'hard' => 'hard',
      'soft' => 'soft',
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
      'active' => 'Actief',
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
      'action' => 'Actie',
      'actionDate' => 'Datum',
      'data' => 'Data',
      'campaign' => 'Campaign',
      'parent' => 'Target',
      'object' => 'Object',
      'application' => 'Application',
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
        'Sent' => 'Verstuur',
        'Opened' => 'Opened',
        'Opted Out' => 'Opted Out',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicked',
        'Lead Created' => 'Lead Created',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Alles',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Verstuur',
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
      'name' => 'Record Naam',
      'number' => 'Number',
      'status' => 'Status',
      'account' => 'Account',
      'contact' => 'Contact',
      'contacts' => 'Contacten',
      'priority' => 'Prioriteit',
      'type' => 'Type',
      'description' => 'Beschrijving',
      'inboundEmail' => 'Inbound Email',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Inbound Email',
      'account' => 'Account',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Contacten',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'E-mails',
      'articles' => 'Knowledge Base Articles',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'Pending' => 'In afwachting',
        'Closed' => 'Gesloten',
        'Rejected' => 'Afgewezen',
        'Duplicate' => 'Dupliceer',
      ),
      'priority' => 
      array (
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Vraag',
        'Incident' => 'Incident',
        'Problem' => 'Probleem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Create Case',
      'Close' => 'Sluit',
      'Reject' => 'Reject',
      'Closed' => 'Gesloten',
      'Rejected' => 'Afgewezen',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'closed' => 'Gesloten',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'E-mail',
      'title' => 'Titel',
      'account' => 'Account',
      'accounts' => 'Klanten',
      'phoneNumber' => 'Telefoon',
      'accountType' => 'Klant Type',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'opportunityRole' => 'Functie Kansen',
      'accountRole' => 'Titel',
      'description' => 'Beschrijving',
      'campaign' => 'Campaign',
      'targetLists' => 'Doellijsten',
      'targetList' => 'Target List',
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
      'opportunities' => 'Kansen',
      'cases' => 'Casus',
      'targetLists' => 'Doellijsten',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Klanten',
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
      'Create Contact' => 'Contact Aanmaken',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Geen--',
        'Decision Maker' => 'Beslisser',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Beinvloeder',
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
      'Create Document' => 'Document Aanmaken',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'file' => 'Bestand',
      'type' => 'Type',
      'publishDate' => 'Publicatiedatum',
      'expirationDate' => 'Vervaldatum',
      'description' => 'Beschrijving',
      'accounts' => 'Klanten',
      'folder' => 'Folder',
      'formularios' => 'Formularios',
      'source' => 'Bron',
    ),
    'links' => 
    array (
      'accounts' => 'Klanten',
      'opportunities' => 'Kansen',
      'folder' => 'Folder',
      'leads' => 'Leads',
      'contacts' => 'Contacts',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Actief',
        'Draft' => 'Concept',
        'Expired' => 'Vervallen',
        'Canceled' => 'Geannuleerd',
      ),
      'type' => 
      array (
        '' => 'None',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licentie Overeenkomst',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Actief',
      'draft' => 'Concept',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Create Document Folder',
      'Manage Categories' => 'Manage Folders',
      'Documents' => 'Documenten',
    ),
    'links' => 
    array (
      'documents' => 'Documenten',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Datum verzonden',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'E-mailadres',
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
        'Pending' => 'In afwachting',
        'Sent' => 'Verstuur',
        'Failed' => 'Failed',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'In afwachting',
      'sent' => 'Verstuur',
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
      'Converted To' => 'Geconverteerd naar',
      'Create Lead' => 'Lead Aanmaken',
      'Convert' => 'Converteren',
      'convert' => 'converteren',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'E-mail',
      'title' => 'Titel',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'accountName' => 'Naam Klant',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'status' => 'Status',
      'source' => 'Bron',
      'opportunityAmount' => 'Bedrag Kansen',
      'opportunityAmountConverted' => 'Bedrag Kans (geconverteerd)',
      'description' => 'Beschrijving',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Kans',
      'campaign' => 'Campaign',
      'targetLists' => 'Doellijsten',
      'targetList' => 'Target List',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Doellijsten',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Kans',
      'cases' => 'Cases',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'In Process' => 'In Behandeling',
        'Converted' => 'Geconverteerd',
        'Recycled' => 'Opnieuw verwerkt',
        'Dead' => 'Dood',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Tel. Gesprek',
        'Email' => 'E-mail',
        'Existing Customer' => 'Bestaande Klant',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Webpagina',
        'Campaign' => 'Campaign',
        'Other' => 'Overig',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Actief',
      'actual' => 'Werkelijke',
      'converted' => 'Geconverteerd',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Start Datum',
      'fromAddress' => 'Van Adres',
      'fromName' => 'Van Naam',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Campaign',
      'emailTemplate' => 'E-mail Template',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'E-mail Template',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Concept',
        'Pending' => 'In afwachting',
        'In Process' => 'In Behandeling',
        'Complete' => 'Complete',
        'Canceled' => 'Geannuleerd',
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
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Eind Datum',
      'duration' => 'Duur',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'reminders' => 'Herineringen',
      'account' => 'Account',
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
        'Planned' => 'Gepland',
        'Held' => 'Vasthouden',
        'Not Held' => 'Niet Vasthouden',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Geaccepteerd',
        'Declined' => 'Geweigerd',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Plan Vergadering',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Uitnodiging versturen',
      'on time' => 'op tijd',
      'before' => 'voordat',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Gepland',
      'held' => 'Vasthouden',
      'todays' => 'Huidig',
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
      'name' => 'Record Naam',
      'account' => 'Account',
      'stage' => 'Stadium',
      'amount' => 'Aantal',
      'probability' => 'Waarschijnlijkheid, %',
      'leadSource' => 'Leadbron',
      'doNotCall' => 'Niet Bellen',
      'closeDate' => 'Datum gesloten',
      'contacts' => 'Contacten',
      'description' => 'Beschrijving',
      'amountConverted' => 'Bedrag (geconverteerd)',
      'amountWeightedConverted' => 'Afgewogen bedrag',
      'campaign' => 'Campaign',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Contacten',
      'documents' => 'Documenten',
      'campaign' => 'Campaign',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectie',
        'Qualification' => 'Kwalificatie',
        'Proposal' => 'Voorstel',
        'Negotiation' => 'Onderhandeling',
        'Needs Analysis' => 'Analyse behoefte',
        'Value Proposition' => 'Waarde voorstel',
        'Id. Decision Makers' => 'Id. Beslissers',
        'Perception Analysis' => 'Perceptie Analyse',
        'Proposal/Price Quote' => 'Voorstel/Offerte',
        'Negotiation/Review' => 'Onderhandeling/Beoordeling',
        'Closed Won' => 'Gesloten Gewonnen',
        'Closed Lost' => 'Gesloten Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Kans aanmaken',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'won' => 'Gewonnen',
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
      'name' => 'Record Naam',
      'description' => 'Beschrijving',
      'entryCount' => 'Entry Count',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campaigns',
      'endDate' => 'End Date',
      'targetLists' => 'Doellijsten',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Klanten',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'campaigns' => 'Campaigns',
      'massEmails' => 'Mass Emails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Television',
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
      'Create TargetList' => 'Create Target List',
      'Opted Out' => 'Opted Out',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Date Due',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Prioriteit',
      'description' => 'Beschrijving',
      'isOverdue' => 'Te Laat',
      'account' => 'Account',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Bijlagen',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Bijlagen',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Niet Gestart',
        'Started' => 'Gestart',
        'Completed' => 'Voltooid',
        'Canceled' => 'Geannuleerd',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Taak Aanmaken',
      'Complete' => 'Complete',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Werkelijke',
      'completed' => 'Voltooid',
      'deferred' => 'Deferred',
      'todays' => 'Huidig',
      'overdue' => 'Laat',
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
      'Create Formularios' => 'Klant Formulario',
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