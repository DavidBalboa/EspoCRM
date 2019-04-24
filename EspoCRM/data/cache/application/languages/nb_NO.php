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
      'Enabled' => 'Aktivert',
      'Disabled' => 'Deaktivert',
      'System' => 'System',
      'Users' => 'Brukere',
      'Email' => 'Epost',
      'Data' => 'Data',
      'Customization' => 'Tilpass',
      'Available Fields' => 'Tilgjengelige felt',
      'Layout' => 'Oppsett',
      'Entity Manager' => 'Enhetsadministrator',
      'Add Panel' => 'Legg til panel',
      'Add Field' => 'Legg til felt',
      'Settings' => 'Innstillinger',
      'Scheduled Jobs' => 'Planlagte oppgaver',
      'Upgrade' => 'Oppgrader',
      'Clear Cache' => 'Tøm hurtigminne',
      'Rebuild' => 'Gjennbygg',
      'Teams' => 'Grupper',
      'Roles' => 'Roller',
      'Portal' => 'Portal',
      'Portals' => 'Portaler',
      'Portal Roles' => 'Portalroller',
      'Portal Users' => 'Portalbrukere',
      'Outbound Emails' => 'Utgående epost',
      'Group Email Accounts' => 'Felles epostkonti',
      'Personal Email Accounts' => 'Personlige epostkonti',
      'Inbound Emails' => 'Inngående epost',
      'Email Templates' => 'Epostmaler',
      'Import' => 'Importer',
      'Layout Manager' => 'Oppsettsadministrator',
      'User Interface' => 'Brukergrensesnitt',
      'Auth Tokens' => 'Tilgangsoversikt',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autentisering',
      'Currency' => 'Valuta',
      'Integrations' => 'Integrasjoner',
      'Extensions' => 'Utvidelser',
      'Upload' => 'Last opp',
      'Installing...' => 'Installerer…',
      'Upgrading...' => 'Oppgraderer…',
      'Upgraded successfully' => 'Oppgradering var vellykket',
      'Installed successfully' => 'Installeringen var vellykket',
      'Ready for upgrade' => 'Klar for oppgradering',
      'Run Upgrade' => 'Kjør oppgradering',
      'Install' => 'Installér',
      'Ready for installation' => 'Klar for installasjon',
      'Uninstalling...' => 'Avinstallerer…',
      'Uninstalled' => 'Avinstallert',
      'Create Entity' => 'Ny enhet',
      'Edit Entity' => 'Rediger enhet',
      'Create Link' => 'Ny lenke',
      'Edit Link' => 'Rediger lenke',
      'Notifications' => 'Varslinger',
      'Jobs' => 'Oppgaver',
      'Reset to Default' => 'Nullstill til forvalg',
      'Email Filters' => 'Epostfilter',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detalj',
      'listSmall' => 'Liste (liten)',
      'detailSmall' => 'Detalj (liten)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Søkefiltre',
      'massUpdate' => 'Endre utvalg',
      'relationships' => 'Relasjonspanel',
      'sidePanelsDetail' => 'Sidepanel (detaljer)',
      'sidePanelsEdit' => 'Sidepanel (rediger)',
      'sidePanelsDetailSmall' => 'Sidepanel (små detaljer)',
      'sidePanelsEditSmall' => 'Sidepanel (redigering, liten)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Konverter ledetråd',
      'listForAccount' => 'Liste (for konto)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Tabell',
      'foreign' => 'Fremmed',
      'duration' => 'Varighet',
      'password' => 'Passord',
      'personName' => 'Navn på person',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Bolsk',
      'currency' => 'Valuta',
      'currencyConverted' => 'Valuta (konvertert)',
      'date' => 'Dato',
      'datetime' => 'DatoTid',
      'datetimeOptional' => 'Dato/DatoTid',
      'email' => 'Epost',
      'enum' => 'Enum',
      'enumInt' => 'Enum heltall',
      'enumFloat' => 'Enum flyt',
      'float' => 'Flyt',
      'int' => 'Int',
      'link' => 'Lenke',
      'linkMultiple' => 'Lenke flertall',
      'linkParent' => 'Lenke forelder',
      'phone' => 'Telefon',
      'text' => 'Tekst',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Fil',
      'image' => 'Bilde',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Vedlegg flertall',
      'rangeInt' => 'Avgrenset heltall',
      'rangeFloat' => 'Avgrenset flyt',
      'rangeCurrency' => 'Avgrenset valuta',
      'wysiwyg' => 'WYSIWYG',
      'map' => 'Kart',
      'number' => 'Nummer',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'multienim' => 'Multienum',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Navn',
      'label' => 'Merkelapp',
      'tooltipText' => 'Tekst for verktøystips',
      'required' => 'Påkrevd',
      'default' => 'Forvalg',
      'maxLength' => 'Max lengde',
      'options' => 'Valg',
      'after' => 'Etter (felt)',
      'before' => 'Før (felt)',
      'link' => 'Lenke',
      'field' => 'Felt',
      'min' => 'Min',
      'max' => 'Maks',
      'translation' => 'Oversettelse',
      'previewSize' => 'Forhåndsvisningsstørrelse',
      'noEmptyString' => 'Ingen tom streng',
      'defaultType' => 'Forvalgt type',
      'seeMoreDisabled' => 'Deaktiver tekstkutt',
      'entityList' => 'Enhetsliste',
      'isSorted' => 'Sortert (alfabetisk)',
      'audited' => 'Gjennomgått',
      'trim' => 'Trim',
      'height' => 'Høyde (px)',
      'minHeight' => 'Min. høyde (px)',
      'provider' => 'Tilbyder',
      'typeList' => 'Listetype',
      'rows' => 'Antall rader i tekstområde',
      'lengthOfCut' => 'Kuttlengde',
      'sourceList' => 'Kildeliste',
      'prefix' => 'Prefiks',
      'nextNumber' => 'Neste nummer',
      'padLength' => 'Feltlengde',
      'disableFormatting' => 'Deaktiver tekstformatering',
      'dynamicLogicVisible' => 'Vilkår som gjør feltet synlig',
      'dynamicLogicReadOnly' => 'Vilkår som gjør feltet skrivebeskyttet',
      'dynamicLogicRequired' => 'Vilkår som gjør feltet påkrevd',
      'dynamicLogicOptions' => 'Betingede valg',
      'probabilityMap' => 'Stadiesannsynlighet (%)',
      'readOnly' => 'Skrivebeskyttet',
      'maxFileSize' => 'Max File Size (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM vil oppgraderes til versjon <strong>{version}</strong>. Dette kan ta litt tid.',
      'upgradeDone' => 'EspoCRM har blitt oppgradert til versjon <strong>{version}</strong>.',
      'upgradeBackup' => 'Det er anbefalt å ta backup av EspoCRMs filer og data før oppgradering.',
      'thousandSeparatorEqualsDecimalMark' => 'Skillet for tusentall kan ikke være et desimaltegn',
      'userHasNoEmailAddress' => 'Brukeren har ikke epostadresse',
      'selectEntityType' => 'Velg enhetstype i venstre meny.',
      'selectUpgradePackage' => 'Velg oppgraderingspakke',
      'downloadUpgradePackage' => 'Last ned oppgraderingspakke(r) <a href="{url}">her</a>. ',
      'selectLayout' => 'Velg oppsett i venstre meny for å redigere det.',
      'selectExtensionPackage' => 'Velg utvidelsespakke',
      'extensionInstalled' => 'Utvidelsen <em>{name} {version}</em> er installert,',
      'installExtension' => 'Utvidelsen <em>{name} {version}</em> er klar for installasjon.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Er du sikker på at du ønsker å avinstallere utvidelsen?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Grunnleggende systeminnstillinger',
      'scheduledJob' => 'Oppgaver som utføres av cron.',
      'upgrade' => 'Oppgrader EspoCRM.',
      'clearCache' => 'Tøm hurtigminne for serverdelen.',
      'rebuild' => 'Gjennbygg serverdel og tøm hurtigminne.',
      'users' => 'Administrer brukere.',
      'teams' => 'Administrer grupper.',
      'roles' => 'Administrer roller.',
      'portals' => 'Administrer portaler.',
      'portalRoles' => 'Roller for portal.',
      'portalUsers' => 'Portalbrukere.',
      'outboundEmails' => 'Innstillinger for utgående epost (SMTP).',
      'groupEmailAccounts' => 'Epostkonti for grupper (IMAP). Import og epost-til-sak.',
      'personalEmailAccounts' => 'Enkeltbrukeres epostkonti.',
      'emailTemplates' => 'Maler for utgående epost.',
      'import' => 'Importer data fra CSV-fil.',
      'layoutManager' => 'Tilpass oppsett (rediger, søk og endre mange lister og detaljer samtidig).',
      'entityManager' => 'Opprett egne enheter og rediger eksisterende. Administrer felt og relasjoner.',
      'userInterface' => 'Konfigurer hvilke elementer som skal vises i grensesnittet.',
      'authTokens' => 'Aktive tilgangssesjoner, se IP-adresser og dato for forrige pålogging.',
      'authentication' => 'Tilgangsinnstillinger.',
      'currency' => 'Valuta- og prisinstillinger',
      'extensions' => 'Installer eller fjern utvidelser.',
      'integrations' => 'Integrasjon med tredjepartstjenester.',
      'notifications' => 'Innstillinger for vasler i appen og på epost.',
      'inboundEmails' => 'Innstillinger for inngående eposter.',
      'emailFilters' => 'Eposter som samstemmer med filteret vil <em>ikke</em> importeres.',
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
        'x-small' => 'Bitteliten',
        'small' => 'Liten',
        'medium' => 'Mellomstor',
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
      'Document' => 'Sett inn dokument',
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
      'user' => 'Bruker',
      'ipAddress' => 'IP-adresse',
      'lastAccess' => 'Forrige pålogging',
      'createdAt' => 'Påloggingsdato',
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
      'title' => 'Tittel',
      'dateFrom' => 'Fra dato',
      'dateTo' => 'Til dato',
      'autorefreshInterval' => 'Intervall for automatisk oppdatering',
      'displayRecords' => 'Antall oppføringer',
      'isDoubleHeight' => 'Dobbel høyde',
      'mode' => 'Visning',
      'enabledScopeList' => 'Hva som skal vises',
      'users' => 'Brukere',
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
        'agendaWeek' => 'Uke (agenda)',
        'basicWeek' => 'Uke',
        'month' => 'Måned',
        'basicDay' => 'Dag',
        'agendaDay' => 'Dag (agenda)',
        'timeline' => 'Tidslinje',
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
        'equals' => 'Lik',
        'notEquals' => 'Ikke lik',
        'greaterThan' => 'Større enn',
        'lessThan' => 'Mindre enn',
        'greaterThanOrEquals' => 'Større enn eller lik',
        'lessThanOrEquals' => 'Mindre enn eller lik',
        'in' => 'I',
        'notIn' => 'Ikke i',
        'inPast' => 'I fortiden',
        'inFuture' => 'I fremtiden',
        'isToday' => 'Er idag',
        'isTrue' => 'Er sann',
        'isFalse' => 'Er falsk',
        'isEmpty' => 'Er tom',
        'isNotEmpty' => 'Er ikke tom',
        'contains' => 'Inneholder',
        'notContains' => 'Inneholder ikke',
        'has' => 'Contains',
        'notHas' => 'Not Contains',
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
      'name' => 'Navn (emne)',
      'parent' => 'Forelder',
      'status' => 'Status',
      'dateSent' => 'Dato sendt',
      'from' => 'Fra',
      'to' => 'Til',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Svar til',
      'replyToString' => 'Svar til (string)',
      'isHtml' => 'Er HTML',
      'body' => 'Brødtekst',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Emne',
      'attachments' => 'Vedlegg',
      'selectTemplate' => 'Velg mal',
      'fromEmailAddress' => 'Avsenderadresse',
      'toEmailAddresses' => 'Sendt til adresse',
      'emailAddress' => 'Epostadresse',
      'deliveryDate' => 'Leveringsdato',
      'account' => 'Konto',
      'users' => 'Brukere',
      'replied' => 'Svart',
      'replies' => 'Svar',
      'isRead' => 'Lest',
      'isNotRead' => 'Ikke lest',
      'isImportant' => 'Er viktig',
      'isReplied' => 'Er besvart',
      'isNotReplied' => 'Er ikke besvart',
      'isUsers' => 'Er brukerens',
      'inTrash' => 'I søppelkurv',
      'sentBy' => 'Sent av (bruker)',
      'folder' => 'Mappe',
      'inboundEmails' => 'Gruppekonti',
      'emailAccounts' => 'Personlige konti',
      'hasAttachment' => 'Har vedlegg',
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
      'replied' => 'Svart',
      'replies' => 'Svar',
      'inboundEmails' => 'Gruppekonti',
      'emailAccounts' => 'Personlige konti',
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
        'Draft' => 'Utkast',
        'Sending' => 'Sender',
        'Sent' => 'Sendt',
        'Archived' => 'Arkivert',
        'Received' => 'Mottatt',
        'Failed' => 'Feilet',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Arkivert epost',
      'Archive Email' => 'Arkivert epost',
      'Compose' => 'Skriv ny',
      'Reply' => 'Svar',
      'Reply to All' => 'Svar til alle',
      'Forward' => 'Videresend',
      'Original message' => 'Original melding',
      'Forwarded message' => 'Videresendt melding',
      'Email Accounts' => 'Personlige epostkonti',
      'Inbound Emails' => 'Epostkonti for grupper',
      'Email Templates' => 'Epostmaler',
      'Send Test Email' => 'Send test-epost',
      'Send' => 'Send',
      'Email Address' => 'Epostadresse',
      'Mark Read' => 'Marker som lest',
      'Sending...' => 'Sender…',
      'Save Draft' => 'Lagre utkast',
      'Mark all as read' => 'Marker alle som lest',
      'Show Plain Text' => 'Vis ren tekst',
      'Mark as Important' => 'Merk som viktig',
      'Unmark Importance' => 'Fjern viktig-markering',
      'Move to Trash' => 'Flytt til søppelkurv',
      'Retrieve from Trash' => 'Gjennopprett fra søppelkurv',
      'Move to Folder' => 'Flytt til mappe',
      'Filters' => 'Filtre',
      'Folders' => 'Mapper',
      'Create Lead' => 'Opprett ledetråd',
      'Create Contact' => 'Opprett kontakt',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Opprett gjøremål',
      'Create Case' => 'Opprett sak',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Ingen SMTP-oppsett. {link}.',
      'testEmailSent' => 'Test-epost har blitt sendt',
      'emailSent' => 'Epost er sendt',
      'savedAsDraft' => 'Lagret som utkast',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sendt',
      'archived' => 'Arkivert',
      'inbox' => 'Innboks',
      'drafts' => 'Utkast',
      'trash' => 'Søppelkurv',
      'important' => 'Viktig',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Marker som lest',
      'markAsNotRead' => 'Marker som ulest',
      'markAsImportant' => 'Marker som viktig',
      'markAsNotImportant' => 'Fjern viktig-markering',
      'moveToTrash' => 'Flytt til søppelkurv',
      'moveToFolder' => 'Flytt til mappe',
      'retrieveFromTrash' => 'Hent fra søppelkurv',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'host' => 'Tjener',
      'username' => 'Brukernavn',
      'password' => 'Passord',
      'port' => 'Port',
      'monitoredFolders' => 'Overvåkede mapper',
      'ssl' => 'SSL',
      'fetchSince' => 'Hent fra dato',
      'emailAddress' => 'Epostadresse',
      'sentFolder' => 'Sendt-mappe',
      'storeSentEmails' => 'Lagre sendte eposter',
      'keepFetchedEmailsUnread' => 'Vis hentede eposter som ulest',
      'emailFolder' => 'Legg i mappe',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Bruk SMTP',
      'smtpHost' => 'SMTP-tjener',
      'smtpPort' => 'SMTP-tjener',
      'smtpAuth' => 'SMTP-autentisering',
      'smtpSecurity' => 'SMTP-sikkerhet',
      'smtpUsername' => 'SMTP-brukernavn',
      'smtpPassword' => 'SMTP-passord',
    ),
    'links' => 
    array (
      'filters' => 'Filtre',
      'emails' => 'Eposter',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktive',
        'Inactive' => 'Inaktive',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Ny epostkonto',
      'IMAP' => 'IMAP-innstillinger',
      'Main' => 'Hovedinnstillinger',
      'Test Connection' => 'Test tilkobling',
      'Send Test Email' => 'Send testepost',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kunne ikke koble til IMAP-tjener',
      'connectionIsOk' => 'Tilkoblingen er OK',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Du kan legge til en \'Sendt\'-mappe for å synkroniskere eposter sendt fra eksterne klienter.',
      'storeSentEmails' => 'Sendte eposter vil lagres på IMAP-tjeneren. Epostadressefeltet må matche adressen epostene vil sendes fra.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primæradresse',
      'Opted Out' => 'Avmeldt',
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
      'bodyContains' => 'Brødtekst inneholder',
      'action' => 'Handling',
      'isGlobal' => 'Er global',
      'emailFolder' => 'Mappe',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Nytt epostfilter',
      'Emails' => 'Eposter',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorer',
        'Move to Folder' => 'Putt i mappe',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Gi filteret et beskrivende navn.',
      'subject' => 'Bruk jokertegnet * (stjerne):

tekst* – starter med \'tekst\',
*tekst* – inneholder \'tekst\',
*tekst – slutter med \'tekst\'.',
      'bodyContains' => 'Epostens brødtekst inneholder en eller flere av de spesifiserte ordene eller frasene.',
      'from' => 'Eposter sendt fra den angitte adressen. Kan stå tom. Du kan bruke jokertegn * (stjerne).',
      'to' => 'Eposter sendt til den angitte adressen. Kan stå tom. Du kan bruke jokertegn * (stjerne).',
      'isGlobal' => 'Bruker dette filteret for alle eposter som kommer inn til applikasjonen.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Hopp over varslinger',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Opprett mappe',
      'Manage Folders' => 'Administrer mapper',
      'Emails' => 'Eposter',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'isHtml' => 'Er HTML',
      'body' => 'Brødtekst',
      'subject' => 'Emne',
      'attachments' => 'Vedlegg',
      'insertField' => 'Sett inn felt',
      'oneOff' => 'Bruk en gang',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Ny epostmal',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Tilgjengelige variabler:

{optOutUrl} &#8211; kun URLen til en avmeldingsside;

{optOutLink} &#8211; En lenke med teksten \'Meld med av*.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Velg denne hvis du kun skal bruke malen en gang, f.eks. til masseutsendt epost.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Reell',
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
      'Fields' => 'Felt',
      'Relationships' => 'Relasjoner',
      'Schedule' => 'Planlegg',
      'Log' => 'Logg',
      'Formula' => 'Formel',
    ),
    'fields' => 
    array (
      'name' => 'Navn',
      'type' => 'Type',
      'labelSingular' => 'Merkelapp (entall)',
      'labelPlural' => 'Merkelapp (flertall)',
      'stream' => 'Strøm',
      'label' => 'Merkelapp',
      'linkType' => 'Lenketype',
      'entityForeign' => 'Fremmed enhet',
      'linkForeign' => 'Fremmed lenke',
      'link' => 'Lenke',
      'labelForeign' => 'Fremmed merkelapp',
      'sortBy' => 'Forvalgt sortering (felt)',
      'sortDirection' => 'Forvalgt sortering (rettning)',
      'relationName' => 'Midtre tabellnavn',
      'linkMultipleField' => 'Koble flere felt',
      'linkMultipleFieldForeign' => 'Kobling av flere fremmede felt',
      'disabled' => 'Deaktivert',
      'textFilterFields' => 'Tekstfilterfelt',
      'audited' => 'Revidert',
      'auditedForeign' => 'Revidert av utenforstående',
      'statusField' => 'Statusfelt',
      'beforeSaveCustomScript' => 'Før egendefinert lagrings-script',
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
        'Base' => 'Base',
        'Person' => 'Person',
        'CategoryTree' => 'Kategoritre',
        'Event' => 'Handling',
        'BasePlus' => 'Base pluss',
        'Company' => 'Foretak',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Mange-til-mange',
        'oneToMany' => 'En-til-mange',
        'manyToOne' => 'Mange-til-en',
        'parentToChildren' => 'Forelder-til-barn',
        'childrenToParent' => 'Barn-til-forelder',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Økende',
        'desc' => 'Avtagende',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Enheten har blitt opprettet',
      'linkAlreadyExists' => 'Konflikt med lenkenavn.',
      'linkConflict' => 'Navnekonflikt: lenke eller felt med det samme navnet eksisterer allerede.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Endringer i dette feltet logges i strømmen.',
      'textFilterFields' => 'Feltene brukes til tekstsøk.',
      'stream' => 'Hvorvidt enheten har en strøm.',
      'disabled' => 'Marker hvis du ikke trenger denne enheten i ditt system.',
      'linkAudited' => 'Opprettelse av relatert oppføring og kobling med eksisterende oppføring vil logges i strømmen.',
      'linkMultipleField' => '\'Koble flere\'-feltet er en lettvint måte å redigere relasjoner på. Ikke bruk den hvis du har markert et stort antall relaterte oppføringer.',
      'entityType' => 'Base pluss – har aktivitets-, historie- og oppgavepaneler.

Hendelse – tilgjengelig i kalender- og aktivitetspanelet.',
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
      'useCustomFieldList' => 'Egendefinert feltliste',
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
      'version' => 'Versjon',
      'description' => 'Beskrivelse',
      'isInstalled' => 'Installert',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Avinstallert',
      'Install' => 'Installér',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Utvidelsen <em>{name}</em> har blitt avinstallert',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Koble til',
      'Connected' => 'Tilkoblet',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dynamisk logikk',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Ingen',
        'javascript: return this.dateTime.getNow(1);' => 'Nå',
        'javascript: return this.dateTime.getNow(5);' => 'Nå (5 min)',
        'javascript: return this.dateTime.getNow(15);' => 'Nå (15 min)',
        'javascript: return this.dateTime.getNow(30);' => 'Nå (30 min)',
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
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dager',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dager',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dager',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dager',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dager',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 uke',
      ),
      'dateDefault' => 
      array (
        '' => 'Ingen',
        'javascript: return this.dateTime.getToday();' => 'Idag',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 dag',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dager',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 uke',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 uker',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 uker',
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
      'audited' => 'Endringer vil bli logget i strømmen.',
      'required' => 'Felt vil bli påkrevd. Kan ikke være tom.',
      'default' => 'Verdi vil angis som forvalg ved ny oppføring.',
      'min' => 'Minste aksepterte verdi.',
      'max' => 'Høyeste aksepterte verdi.',
      'seeMoreDisabled' => 'Lange tekster forkortes hvis valgt.',
      'lengthOfCut' => 'Hvor lange tekster kan være før de forkortes.',
      'maxLength' => 'Maksimal lengde på tekst.',
      'before' => 'Datoverdien må være tidligere en datoverdien spesifisert i feltet.',
      'after' => 'Datoverdien må være senere enn datoverdien spesifisert i feltet.',
      'readOnly' => 'Feltets verdi kan ikke endres av brukeren, kan kun vise resultat fra formel.',
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
      'Email' => 'Epost',
      'User' => 'Bruker',
      'Team' => 'Gruppe',
      'Role' => 'Rolle',
      'EmailTemplate' => 'Epostmal',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personlig epostkonto',
      'EmailAccountScope' => 'Personlig epostkonto',
      'OutboundEmail' => 'Utgående epost',
      'ScheduledJob' => 'Planlagte oppgaver',
      'ExternalAccount' => 'Ekstern konto',
      'Extension' => 'Utvidelse',
      'Dashboard' => 'Dashbord',
      'InboundEmail' => 'Epostkonto for gruppe',
      'Stream' => 'Strøm',
      'Import' => 'Import',
      'Template' => 'Mal',
      'Job' => 'Oppgave',
      'EmailFilter' => 'Epostfilter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portalrolle',
      'Attachment' => 'Vedlegg',
      'EmailFolder' => 'Epostmappe',
      'PortalUser' => 'Portalbruker',
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
      'Account' => 'Konto',
      'Contact' => 'Kontakt',
      'Lead' => 'Ledetråd',
      'Target' => 'Mål',
      'Opportunity' => 'Mulighet',
      'Meeting' => 'Møte',
      'Calendar' => 'Kalender',
      'Call' => 'Samtale',
      'Task' => 'Gjøremål',
      'Case' => 'Sak',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Dokumentmappe',
      'Campaign' => 'Kampanje',
      'TargetList' => 'Målgruppe',
      'MassEmail' => 'Masseutsendt epost',
      'EmailQueueItem' => 'Køobjekt for epost',
      'CampaignTrackingUrl' => 'Sporings-URL',
      'Activities' => 'Aktiviteter',
      'KnowledgeBaseArticle' => 'Kunnskapsbaseartikkel',
      'KnowledgeBaseCategory' => 'Kunnskapsbasekategori',
      'CampaignLogRecord' => 'Loggoppføring for kampanje',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Eposter',
      'User' => 'Brukere',
      'Team' => 'Grupper',
      'Role' => 'Roller',
      'EmailTemplate' => 'Epostmaler',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Personlige epostkonti',
      'EmailAccountScope' => 'Personlige epostkonti',
      'OutboundEmail' => 'Utgående eposter',
      'ScheduledJob' => 'Planlagte oppgaver',
      'ExternalAccount' => 'Eksterne konti',
      'Extension' => 'Utvidelser',
      'Dashboard' => 'Dashbord',
      'InboundEmail' => 'Epostkonti for grupper',
      'Stream' => 'Strøm',
      'Import' => 'Importer resultater',
      'Template' => 'Maler',
      'Job' => 'Oppgaver',
      'EmailFilter' => 'Epostfiltre',
      'Portal' => 'Portaler',
      'PortalRole' => 'Portalroller',
      'Attachment' => 'Vedlegg',
      'EmailFolder' => 'Epostmapper',
      'PortalUser' => 'Portalbrukere',
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
      'Account' => 'Konti',
      'Contact' => 'Kontakter',
      'Lead' => 'Ledetråder',
      'Target' => 'Mål',
      'Opportunity' => 'Muligheter',
      'Meeting' => 'Møter',
      'Calendar' => 'Kalender',
      'Call' => 'Samtaler',
      'Task' => 'Gjøremål',
      'Case' => 'Saker',
      'Document' => 'Dokumenter',
      'DocumentFolder' => 'Dokumentmapper',
      'Campaign' => 'Kampanjer',
      'TargetList' => 'Målgrupper',
      'MassEmail' => 'Masseutsendte eposter',
      'EmailQueueItem' => 'Køobjekter for eposter',
      'CampaignTrackingUrl' => 'Sporings-ULRer',
      'Activities' => 'Aktiviteter',
      'KnowledgeBaseArticle' => 'Kunnskapsbaser',
      'KnowledgeBaseCategory' => 'Kunnskapsbasekategorier',
      'CampaignLogRecord' => 'Loggoppføringer for kampanje',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' => 
    array (
      'Misc' => 'Diverse',
      'Merge' => 'Flett sammen',
      'None' => 'Ingen',
      'Home' => 'Hjem',
      'by' => 'av',
      'Saved' => 'Lagret',
      'Error' => 'Feilmelding',
      'Select' => 'Velg',
      'Not valid' => 'Ugyldig',
      'Please wait...' => 'Vennligst vent…',
      'Please wait' => 'Vennligst vent',
      'Loading...' => 'Laster…',
      'Uploading...' => 'Laster opp…',
      'Sending...' => 'Sender…',
      'Merging...' => 'Fletter sammen…',
      'Merged' => 'Ferdig sammenflettet',
      'Removed' => 'Fjernet',
      'Posted' => 'Postet',
      'Linked' => 'Lenket',
      'Unlinked' => 'Avlenket',
      'Done' => 'Ferdig',
      'Access denied' => 'Tilgang nektet',
      'Not found' => 'Ikke funnet',
      'Access' => 'Tilgang',
      'Are you sure?' => 'Er du sikker?',
      'Record has been removed' => 'Oppføringen har blitt fjernet',
      'Wrong username/password' => 'Feil brukernavn og/eller passord',
      'Post cannot be empty' => 'Posten kan ikke forbli tom',
      'Removing...' => 'Fjerner…',
      'Unlinking...' => 'Avkobler…',
      'Posting...' => 'Poster…',
      'Username can not be empty!' => 'Brukernavn kan ikke forbli tomt!',
      'Cache is not enabled' => 'Hurtigminne er ikke aktivert',
      'Cache has been cleared' => 'Hurtigminne er tømt',
      'Rebuild has been done' => 'Gjenoppbyggingen er ferdig ',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Lagrer…',
      'Modified' => 'Endret',
      'Created' => 'Opprettet',
      'Create' => 'Opprett',
      'create' => 'opprett',
      'Overview' => 'Oversikt',
      'Details' => 'Detaljer',
      'Add Field' => 'Nytt felt',
      'Add Dashlet' => 'Ny dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Rediger dashbord',
      'Add' => 'Legg til',
      'Add Item' => 'Legg til gjenstand',
      'Reset' => 'Nullstill',
      'Menu' => 'Meny',
      'More' => 'Mer',
      'Search' => 'Søk',
      'Only My' => 'Kun meg',
      'Open' => 'Åpne',
      'Admin' => 'Admin',
      'About' => 'Om',
      'Refresh' => 'Forny',
      'Remove' => 'Fjern',
      'Options' => 'Valg',
      'Username' => 'Brukernavn',
      'Password' => 'Passord',
      'Login' => 'Logg inn',
      'Log Out' => 'Logg ut',
      'Preferences' => 'Preferanser',
      'State' => 'Fylke',
      'Street' => 'Gatenavn',
      'Country' => 'Land',
      'City' => 'By',
      'PostalCode' => 'Postkode',
      'Followed' => 'Følger',
      'Follow' => 'Følg',
      'Followers' => 'Følgere',
      'Clear Local Cache' => 'Tøm lokalt hurtigminne',
      'Actions' => 'Handlinger',
      'Delete' => 'Slett',
      'Update' => 'Oppdatér',
      'Save' => 'Lagre',
      'Edit' => 'Rediger',
      'View' => 'Vis',
      'Cancel' => 'Avbryt',
      'Apply' => 'Bruk',
      'Unlink' => 'Avlenk',
      'Mass Update' => 'Endre utvalg',
      'Export' => 'Eksport',
      'No Data' => 'Ingen data',
      'No Access' => 'Ingen tilgang',
      'All' => 'Alle',
      'Active' => 'Aktive',
      'Inactive' => 'Inaktive',
      'Write your comment here' => 'Skriv en kommentar her',
      'Post' => 'Post',
      'Stream' => 'Strøm',
      'Show more' => 'Vis mer',
      'Dashlet Options' => 'Dashlet-innstillinger',
      'Full Form' => 'Vis hele skjema',
      'Insert' => 'Sett inn',
      'Person' => 'Person',
      'First Name' => 'Fornavn',
      'Last Name' => 'Etternavn',
      'Original' => 'Original',
      'You' => 'Du',
      'you' => 'du',
      'change' => 'endre',
      'Change' => 'Endre',
      'Primary' => 'Primær',
      'Save Filter' => 'Lagre filter',
      'Administration' => 'Administrasjon',
      'Run Import' => 'Kjør import',
      'Duplicate' => 'Dupliser',
      'Notifications' => 'Varsler',
      'Mark all read' => 'Marker som lest',
      'See more' => 'Se mer',
      'Today' => 'Idag',
      'Tomorrow' => 'Imorgen',
      'Yesterday' => 'Igår',
      'Submit' => 'Send inn',
      'Close' => 'Lukk',
      'Yes' => 'Ja',
      'No' => 'Nei',
      'Select All Results' => 'Select All Results',
      'Value' => 'Verdi',
      'Current version' => 'Nåværende versjon',
      'List View' => 'Listevisning',
      'Tree View' => 'Trevisning',
      'Unlink All' => 'Avlenk alle',
      'Total' => 'Total',
      'Print to PDF' => 'Skriv til PDF',
      'Default' => 'Forvalg',
      'Number' => 'Nummer',
      'From' => 'Fra',
      'To' => 'Til',
      'Create Post' => 'Ny post',
      'Previous Entry' => 'Forrige innlegg',
      'Next Entry' => 'Neste innlegg',
      'View List' => 'Vis liste',
      'Attach File' => 'Legg ved fil',
      'Skip' => 'Hopp over',
      'Attribute' => 'Egenskap',
      'Function' => 'Funksjon',
      'Self-Assign' => 'Tildel til meg selv',
      'Self-Assigned' => 'Tildelt til meg selv',
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
      'Create InboundEmail' => 'Opprett inngående epost',
      'Activities' => 'Aktiviteter',
      'History' => 'Historie',
      'Attendees' => 'Deltagere',
      'Schedule Meeting' => 'Planlegg møte',
      'Schedule Call' => 'Planlegg samtale',
      'Compose Email' => 'Skriv epost',
      'Log Meeting' => 'Logg møte',
      'Log Call' => 'Logg samtale',
      'Archive Email' => 'Arkiver epost',
      'Create Task' => 'Opprett gjøremål',
      'Tasks' => 'Gjøremål',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Vennligst vent…',
      'posting' => 'Poster…',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Er du sikker på at du vil forlate skjemaet?',
      'notModified' => 'Du har ikke endret oppføringen',
      'duplicate' => 'Oppføringen du forsøker å opprette finnes kanskje allerede.',
      'dropToAttach' => 'Dra-og-slipp for å legge ved',
      'fieldIsRequired' => '{field} er påkrevd',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field} må plasseres etter {otherField}',
      'fieldShouldBefore' => '{field} må plasseres før {otherField}',
      'fieldShouldBeBetween' => '{field} må være mellom {min} og {max}',
      'fieldShouldBeLess' => '{field} må være mindre enn {value}',
      'fieldShouldBeGreater' => '{field} må være større enn {value}',
      'fieldBadPasswordConfirm' => '{field} er ikke riktig bekreftet',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Preferansene har blitt nullstilt til forvalg',
      'confirmation' => 'Er du sikker?',
      'unlinkAllConfirmation' => 'Er du sikker på at du vil avlenke alle relaterte oppføringer?',
      'resetPreferencesConfirmation' => 'Er du sikker på at du vil nullstille preferansene?',
      'removeRecordConfirmation' => 'Er du sikker på at du vil fjerne oppføringen?',
      'unlinkRecordConfirmation' => 'Er du sikker på at du vil avlenke den relaterte oppføringen?',
      'removeSelectedRecordsConfirmation' => 'Er du sikker på at du vil fjerne den valgte oppføringen?',
      'massUpdateResult' => '{count} oppføringer ble oppdatert',
      'massUpdateResultSingle' => '{count} oppføring ble oppdatert',
      'noRecordsUpdated' => 'Ingen oppføringer ble oppdatert',
      'massRemoveResult' => '{count} oppføringer ble fjernet',
      'massRemoveResultSingle' => '{count} oppføring ble fjernet',
      'noRecordsRemoved' => 'Ingen oppføringer ble fjernet',
      'clickToRefresh' => 'Trykk for å oppdatere',
      'streamPostInfo' => 'Skriv <strong>@brukernavn</strong> for å nevne brukere i posten.

Tilgjengelig markdown-syntaks:
`<code>kode</code>`
**<strong>fet / fremhevet tekst</strong>**
*<em>kursiv / uthevet tekst</em>*
~<del>gjennomstreket tekst</del>~
> blokksitering
[lenketekst](url)',
      'writeYourCommentHere' => 'Skriv en kommentar her',
      'writeMessageToUser' => 'Skriv en melding til {user}',
      'writeMessageToSelf' => 'Skriv en melding i din egen strøm',
      'typeAndPressEnter' => 'Skriv og trykk enter',
      'checkForNewNotifications' => 'Se etter nye varsler',
      'checkForNewNotes' => 'Se etter oppdateringer i strømmen',
      'internalPost' => 'Posten vil kun bli synlig for interne brukere',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Ferdig',
      'confirmMassFollow' => 'Er du sikker på at du vil følge valgte oppføringer?',
      'confirmMassUnfollow' => 'Er du sikker på at du vil avfølge valgte oppføringer?',
      'massFollowResult' => '{count} oppføringer følges nå',
      'massUnfollowResult' => '{count} oppføringer er nå avfulgt',
      'massFollowResultSingle' => '{count} oppføring følges nå',
      'massUnfollowResultSingle' => '{count} oppføring er nå avfulgt',
      'massFollowZeroResult' => 'Ingenting ble fulgt',
      'massUnfollowZeroResult' => 'Ingenting ble avfulgt',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Vis kun mine',
      'followed' => 'Fulgt',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Fulgt',
      'all' => 'Alle',
    ),
    'massActions' => 
    array (
      'remove' => 'Fjernet',
      'merge' => 'Flett sammen',
      'massUpdate' => 'Endre utvalg',
      'export' => 'Eksport',
      'follow' => 'Følg',
      'unfollow' => 'Avfølg',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Navn',
      'firstName' => 'Fornavn',
      'lastName' => 'Etternavn',
      'salutationName' => 'Titulering',
      'assignedUser' => 'Tildelt bruker',
      'assignedUsers' => 'Tildelt brukerne',
      'emailAddress' => 'Epost',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Tildelt brukernavn',
      'teams' => 'Grupper',
      'createdAt' => 'Opprettet den',
      'modifiedAt' => 'Endret den',
      'createdBy' => 'Opprettet av',
      'modifiedBy' => 'Endret av',
      'description' => 'Beskrivelse',
      'address' => 'Adresse',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (mobil)',
      'phoneNumberHome' => 'Telefon (hjem)',
      'phoneNumberFax' => 'Telefon (fax)',
      'phoneNumberOffice' => 'Telefon (kontor)',
      'phoneNumberOther' => 'Telefon (annen)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Sortering',
      'parent' => 'Forelder',
      'children' => 'Barn',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'By',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'Postkode',
      'billingAddressState' => 'Stat',
      'billingAddressStreet' => 'Gate',
      'billingAddressMap' => 'Kart',
      'addressCity' => 'By',
      'addressStreet' => 'Gate',
      'addressCountry' => 'Land',
      'addressState' => 'Stat',
      'addressPostalCode' => 'Postkode',
      'addressMap' => 'Kart',
      'shippingAddressCity' => 'By (levering)',
      'shippingAddressStreet' => 'Gate (levering)',
      'shippingAddressCountry' => 'Land (levering)',
      'shippingAddressState' => 'Fylke (levering)',
      'shippingAddressPostalCode' => 'Postkode (levering)',
      'shippingAddressMap' => 'Kart (levering)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Tildelt bruker',
      'createdBy' => 'Opprettet av',
      'modifiedBy' => 'Endret av',
      'team' => 'Gruppe',
      'roles' => 'Roller',
      'teams' => 'Grupper',
      'users' => 'Brukere',
      'parent' => 'Forelder',
      'children' => 'Barn',
      'contacts' => 'Kontakter',
      'opportunities' => 'Muligheter',
      'leads' => 'Ledetråder',
      'meetings' => 'Møter',
      'calls' => 'Samtaler',
      'tasks' => 'Gjøremål',
      'emails' => 'Eposter',
      'accounts' => 'Konti',
      'cases' => 'Saker',
      'documents' => 'Dokumenter',
      'account' => 'Konto',
      'opportunity' => 'Mulighet',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Strøm',
      'Emails' => 'Min innboks',
      'Records' => 'Record List',
      'Leads' => 'Mine ledetråder',
      'Opportunities' => 'Mine muligheter',
      'Tasks' => 'Mine gjøremål',
      'Cases' => 'Mine saker',
      'Calendar' => 'Kalender',
      'Calls' => 'Mine samtaler',
      'Meetings' => 'Mine møter',
      'OpportunitiesByStage' => 'Muligheter etter stadie',
      'OpportunitiesByLeadSource' => 'Muligheter etter ledetrådkilde',
      'SalesByMonth' => 'Salg etter måned',
      'SalesPipeline' => 'Salgsforløp',
      'Activities' => 'Mine aktiviteter',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} har blitt tildelt deg',
      'emailReceived' => 'Epost mottatt fra {from}',
      'entityRemoved' => '{user} fjernet {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} postet på {entityType} {entity}',
      'attach' => '{user} vedlagt til {entityType} {entity}',
      'status' => '{user} endret {field} i {entityType} {entity}',
      'update' => '{user} oppdaterte {entityType} {entity}',
      'postTargetTeam' => '{user} postet til gruppen {target}',
      'postTargetTeams' => '{user} postet til gruppene {target}',
      'postTargetPortal' => '{user} postet til portalen {target}',
      'postTargetPortals' => '{user} postet til portalene {target}',
      'postTarget' => '{user} postet til {target}',
      'postTargetYou' => '{bruker} postet til deg',
      'postTargetYouAndOthers' => '{user} postet til {target} og deg',
      'postTargetAll' => '{user} postet til alle',
      'postTargetSelf' => '{user} selvpostet',
      'postTargetSelfAndOthers' => '{user} postet til {mål} og seg selv',
      'mentionInPost' => '{user} nevnte {mentioned} i {entityType} {entity}',
      'mentionYouInPost' => '{user} nevnte deg i {entityType} {entity}',
      'mentionInPostTarget' => '{bruker} nevnte {mentioned} i posten',
      'mentionYouInPostTarget' => '{user} nevnte deg i posten til {target}',
      'mentionYouInPostTargetAll' => '{user} nevnte deg i en post til alle',
      'mentionYouInPostTargetNoTarget' => '{user} nevnte deg i en post',
      'create' => '{user} opprettet {entityType} {entity}',
      'createThis' => '{user} opprettet {entityType}',
      'createAssignedThis' => '{user} opprettet {entityType} og tildelte den til {assignee}',
      'createAssigned' => '{user} opprettet {entityType} {entity} og tildelte den til {assignee}',
      'createAssignedYou' => '{user} opprettet {entityType} {entity} tildelt deg',
      'createAssignedThisSelf' => '{user} opprettet {entityType} og tildelte den til seg selv',
      'createAssignedSelf' => '{user} opprette {entityType} {entity} og tildelte den til seg selv',
      'assign' => '{user} tildelte {entityType} {entity} til {assignee}',
      'assignThis' => '{user} tildelte {entityType} til {assignee}',
      'assignYou' => '{user} tildelte {entityType} {entity} til deg',
      'assignThisVoid' => '{user} fjernet tildelingen til {entityType}',
      'assignVoid' => '{user} fjernet tildelingen til {entityType} {entity}',
      'assignThisSelf' => '{user} tildelte {entityType} til seg selv',
      'assignSelf' => '{user} tildelte {entityType} {entity} til seg selv',
      'postThis' => '{user} postet',
      'attachThis' => '{user} vedla',
      'statusThis' => '{user} endret {field}',
      'updateThis' => '{user} endret {entityType}',
      'createRelatedThis' => '{user} opprettet {relatedEntityType} {relatedEntity} relatert til {entityType}',
      'createRelated' => '{user} opprettet {relatedEntityType} {relatedEntity} relatert til {entityType} {entity}',
      'relate' => '{user} lenket {relatedEntityType} {relatedEntity} til {entityType} {entity}',
      'relateThis' => '{user} lenket {relatedEntityType} {relatedEntity} til {entityType}',
      'emailReceivedFromThis' => 'Epost fra {from}',
      'emailReceivedInitialFromThis' => 'Epost fra {from}, opprettet av {entityType}',
      'emailReceivedThis' => 'Epost mottatt',
      'emailReceivedInitialThis' => 'Epost mottatt, opprettet av {entityType}',
      'emailReceivedFrom' => 'Epost fra {from}, relatert til {entityType} {entity}',
      'emailReceivedFromInitial' => 'Epost fra {from}, {entityType} {entity} opprettet',
      'emailReceived' => 'Epost mottatt, relatert til {entityType} {entity}',
      'emailReceivedInitial' => 'Epost mottatt: {entityType} {entity} opprettet',
      'emailReceivedInitialFrom' => 'Epost fra {from}, {entityType} {entity} opprettet',
      'emailSent' => '{by} sendte epost relatert til {entityType} {entity}',
      'emailSentThis' => '{by} sendte epost',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} postet til {target} og seg selv',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} postet til {target} og seg selv',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Januar',
        1 => 'Februar',
        2 => 'Mars',
        3 => 'April',
        4 => 'Mai',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'August',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'Desember',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Des',
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
        'Mr.' => 'herr',
        'Mrs.' => 'fru',
        'Ms.' => 'frøken',
        'Dr.' => 'doktor',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afikaans',
        'az_AZ' => 'Aserbajdsjansk',
        'be_BY' => 'Hviterussisk',
        'bg_BG' => 'Bulgarsk',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnisk',
        'ca_ES' => 'Katalansk',
        'cs_CZ' => 'Tsjekkisk',
        'cy_GB' => 'Walisisk',
        'da_DK' => 'Dansk',
        'de_DE' => 'Tysk',
        'el_GR' => 'Gresk',
        'en_GB' => 'Engelsk (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'Engelsk (US)',
        'es_ES' => 'Spansk (Spania)',
        'et_EE' => 'Estisk',
        'eu_ES' => 'Baskisk',
        'fa_IR' => 'Persisk',
        'fi_FI' => 'Finsk',
        'fo_FO' => 'Færøysk',
        'fr_CA' => 'Fransk (Canada)',
        'fr_FR' => 'Fransk (Frankrike)',
        'ga_IE' => 'Irsk',
        'gl_ES' => 'Galisisk',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebraisk',
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
        'lt_LT' => 'Litausk',
        'lv_LV' => 'Latvisk',
        'mk_MK' => 'Makedonsk',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malayisk',
        'nb_NO' => 'Norsk (Bokmål)',
        'nn_NO' => 'Norsk (Nynorsk)',
        'ne_NP' => 'Nepalsk',
        'nl_NL' => 'Nederlandsk',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polsk',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugisisk (Brasil)',
        'pt_PT' => 'Portugisisk (Portugal)',
        'ro_RO' => 'Rumensk',
        'ru_RU' => 'Russisk',
        'sk_SK' => 'Slovakisk',
        'sl_SI' => 'Slovensk',
        'sq_AL' => 'Albansk',
        'sr_RS' => 'Serbisk',
        'sv_SE' => 'Svensk',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamilsk',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thailandsk',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Tyrkisk',
        'uk_UA' => 'Ukrainsk',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamsk',
        'zh_CN' => 'Forenklet kinesisk (Kina)',
        'zh_HK' => 'Tradisjonell kinesisk (Hong Kong)',
        'zh_TW' => 'Tradisjonell kinesisk (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'På',
        'notOn' => 'Av',
        'after' => 'Etter',
        'before' => 'Før',
        'between' => 'Mellom',
        'today' => 'Idag',
        'past' => 'Fortid',
        'future' => 'Fremtid',
        'currentMonth' => 'Inneværende måned',
        'lastMonth' => 'Forrige måned',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Inneværende kvartal',
        'lastQuarter' => 'Forrige kvartal',
        'currentYear' => 'Inneværende år',
        'lastYear' => 'Forrige år',
        'lastSevenDays' => 'Siste 7 dager',
        'lastXDays' => 'Siste X dager',
        'nextXDays' => 'Neste X dager',
        'ever' => 'Noensinne',
        'isEmpty' => 'Er tom',
        'olderThanXDays' => 'Eldre enn X dager',
        'afterXDays' => 'Etter X dager',
      ),
      'searchRanges' => 
      array (
        'is' => 'Er',
        'isEmpty' => 'Er tom',
        'isNotEmpty' => 'Er ikke tom',
        'isOneOf' => 'Er en av',
        'isFromTeams' => 'Er fra gruppe',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Lik',
        'like' => 'Er som (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Starter med',
        'endsWith' => 'Slutter med',
        'contains' => 'Inneholder',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Er tom',
        'isNotEmpty' => 'Er ikke tom',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Lik',
        'notEquals' => 'Ikke lik',
        'greaterThan' => 'Større enn',
        'lessThan' => 'Mindre enn',
        'greaterThanOrEquals' => 'Større enn eller lik',
        'lessThanOrEquals' => 'Mindre enn eller lik',
        'between' => 'Mellom',
        'isEmpty' => 'Er tom',
        'isNotEmpty' => 'Er ikke tom',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Ingen',
        '0.5' => '30 sekunder',
        1 => 'Ett minutt',
        2 => '2 minutter',
        5 => '5 minutter',
        10 => '10 minutter',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobil',
        'Office' => 'Kontor',
        'Fax' => 'Faks',
        'Home' => 'Hjem',
        'Other' => 'Annet',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'Epost',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Du finner oversettelser her: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Fet',
          'italic' => 'Kursiv',
          'underline' => 'Understrek',
          'strike' => 'Gjennomstrek',
          'clear' => 'Fjern formatering',
          'height' => 'Linjehøyde',
          'name' => 'Skriftfamilie',
          'size' => 'Skriftstørrelse',
        ),
        'image' => 
        array (
          'image' => 'Bilde',
          'insert' => 'Sett inn bilde',
          'resizeFull' => 'Sett full størrelse',
          'resizeHalf' => 'Sett halv størrelse',
          'resizeQuarter' => 'Sett kvart størrelse',
          'floatLeft' => 'Flyt til venstre',
          'floatRight' => 'Flyt til høyre',
          'floatNone' => 'Fjern flyt',
          'dragImageHere' => 'Dra et bilde hit',
          'selectFromFiles' => 'Velg blant filer',
          'url' => 'Bilde-URL',
          'remove' => 'Fjern bilde',
        ),
        'link' => 
        array (
          'link' => 'Lenke',
          'insert' => 'Sett inn lenke',
          'unlink' => 'Fjern lenke',
          'edit' => 'Rediger',
          'textToDisplay' => 'Tekst som skal vises',
          'url' => 'Hvilken URL skal denne lenken peke til?',
          'openInNewWindow' => 'Åpne i nytt vindu',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Videolenke',
          'insert' => 'Sett inn video',
          'url' => 'Video-URL',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, eller DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabell',
        ),
        'hr' => 
        array (
          'insert' => 'Sett inn horisontal linje',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Vanlig',
          'blockquote' => 'Sitat',
          'pre' => 'Kode',
          'h1' => 'Overskrift 1',
          'h2' => 'Overskrift 2',
          'h3' => 'Overskrift 3',
          'h4' => 'Overskrift 4',
          'h5' => 'Overskrift 5',
          'h6' => 'Overskrift 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Punktliste',
          'ordered' => 'Nummerert liste',
        ),
        'options' => 
        array (
          'help' => 'Hjelp',
          'fullscreen' => 'Fullskjerm',
          'codeview' => 'HTML-visning',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Avsnitt',
          'outdent' => 'Tilbakerykk',
          'indent' => 'Innrykk',
          'left' => 'Venstrejuster',
          'center' => 'Midtstilt',
          'right' => 'Høyrejustert',
          'justify' => 'Blokkjustert',
        ),
        'color' => 
        array (
          'recent' => 'Nylig valgt farge',
          'more' => 'Flere farger',
          'background' => 'Bakgrunnsfarge',
          'foreground' => 'Forgrunnsfarge',
          'transparent' => 'Gjennomsiktig',
          'setTransparent' => 'Sett gjennomsiktighet',
          'reset' => 'Nullstill',
          'resetToDefault' => 'Tilbakestill til forvalg',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Hurtigtaster',
          'close' => 'Lukk',
          'textFormatting' => 'Tekstformatering',
          'action' => 'Handling',
          'paragraphFormatting' => 'Stil for avsnitt',
          'documentStyle' => 'Dokumentstil',
        ),
        'history' => 
        array (
          'undo' => 'Angre',
          'redo' => 'Gjør om',
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
      'EspoVertical' => 'Espo med sidemeny',
      'SakuraVertical' => 'Sakura med sidemeny',
      'Violet' => 'Fiolett',
      'VioletVertical' => 'Fiolett med sidemeny',
      'Hazyblue' => 'Røykblå',
      'HazyblueVertical' => 'Røykblå med sidemeny',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Reversér import',
      'Return to Import' => 'Tilbake til import',
      'Run Import' => 'Kjør import',
      'Back' => 'Tilbake',
      'Field Mapping' => 'Feltstyring',
      'Default Values' => 'Forvalgte verdier',
      'Add Field' => 'Legg til felt',
      'Created' => 'Opprettet',
      'Updated' => 'Oppdatert',
      'Result' => 'Resultat',
      'Show records' => 'Vis oppføring',
      'Remove Duplicates' => 'Fjern duplikater',
      'importedCount' => 'Importert (antall)',
      'duplicateCount' => 'Duplikater (antall)',
      'updatedCount' => 'Oppdatert (antall)',
      'Create Only' => 'Bare opprett',
      'Create and Update' => 'Opprett & oppdater',
      'Update Only' => 'Bare oppdater',
      'Update by' => 'Oppdatert av',
      'Set as Not Duplicate' => 'Endre til \'ikke duplikat\'',
      'File (CSV)' => 'Fil (CSV)',
      'First Row Value' => 'Verdi for første rad',
      'Skip' => 'Hopp over',
      'Header Row Value' => 'Verdi for overskriftsrad',
      'Field' => 'Felt',
      'What to Import?' => 'Hva skal importeres?',
      'Entity Type' => 'Enhetstype',
      'What to do?' => 'Hva må gjøres?',
      'Properties' => 'Egenskaper',
      'Header Row' => 'Overskriftsrad',
      'Person Name Format' => 'Format for personnavn',
      'John Smith' => 'Ola Nordmann',
      'Smith John' => 'Nordmann Ola',
      'Smith, John' => 'Nordmann, Ola',
      'Field Delimiter' => 'Skilletegn for felt',
      'Date Format' => 'Datoformat',
      'Decimal Mark' => 'Desimaltegn',
      'Text Qualifier' => 'Tekstkvalifisering',
      'Time Format' => 'Tidsformat',
      'Currency' => 'Valuta',
      'Preview' => 'Forhåndsvisning',
      'Next' => 'Nest',
      'Step 1' => 'Steg 1',
      'Step 2' => 'Steg 2',
      'Double Quote' => 'Dobbelt anførselstegn',
      'Single Quote' => 'Enkelt anførselstegn',
      'Imported' => 'Importert',
      'Duplicates' => 'Duplikater',
      'Skip searching for duplicates' => 'Dropp å søke etter duplikater',
      'Timezone' => 'Tidssone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Bør være UTF-8-kodet',
      'duplicatesRemoved' => 'Duplikater fjernet',
      'inIdle' => 'Kjør når kapasitet er ledig (for store mengder data, via cron)',
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
      'entityType' => 'Enhetstype',
      'imported' => 'Importerte oppføringer',
      'duplicates' => 'Duplikatoppføringer',
      'updated' => 'Oppdaterte oppføringer',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Feilet',
        'In Process' => 'Behandles',
        'Complete' => 'Komplett',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'emailAddress' => 'Epostadresse',
      'team' => 'Målgruppe',
      'status' => 'Status',
      'assignToUser' => 'Tildel til bruker',
      'host' => 'Tjener',
      'username' => 'Brukernavn',
      'password' => 'Passord',
      'port' => 'Port',
      'monitoredFolders' => 'Overvåkede mapper',
      'trashFolder' => 'Søppelkurv-mappe',
      'ssl' => 'SSL',
      'createCase' => 'Opprett sak',
      'reply' => 'Automatisk svar',
      'caseDistribution' => 'Distribusjon av sak',
      'replyEmailTemplate' => 'Epostmal for svar',
      'replyFromAddress' => 'Svar fra adresse',
      'replyToAddress' => 'Svar til adresse',
      'replyFromName' => 'Svar fra navn',
      'targetUserPosition' => 'Målbrukerens posisjon',
      'fetchSince' => 'Hent fra dato',
      'addAllTeamUsers' => 'For alle gruppens brukere',
      'teams' => 'Grupper',
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
      'reply' => 'Varsle senderen når eposten er mottatt.

For å unngå \'looping\' vil det kun sendes <em>en</em> epost til mottageren innen en gitt tidsperiode.',
      'createCase' => 'Opprett sak automatisk for inngående eposter.',
      'replyToAddress' => 'Spesifiser epostadressen til denne postkassen for at svar skal bli sendt hit.',
      'caseDistribution' => 'Hvordan saker vil bli tildelt – direkte til en bruker eller til gruppen.',
      'assignToUser' => 'Brukere som sakene tildeles til.',
      'team' => 'Gruppes som sakene tildeles til.',
      'teams' => 'Grupper som eposter tildeles til.',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Eposter vil vises i innboksen til alle brukere i de valgte gruppene.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filtre',
      'emails' => 'Eposter',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktive',
        'Inactive' => 'Inaktive',
      ),
      'caseDistribution' => 
      array (
        '' => 'Ingen',
        'Direct-Assignment' => 'Direktetildeling',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Minst opptatte',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Opprett epostkonto',
      'IMAP' => 'IMAP-innstillinger',
      'Actions' => 'Handlinger',
      'Main' => 'Hovedinnstillinger',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kunne ikke koble til IMAP-tjeneren',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Aktivert',
      'clientId' => 'Klient-ID',
      'clientSecret' => 'Klienthemmelighet',
      'redirectUri' => 'Videresendings-URI',
      'apiKey' => 'API-nøkkel',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Velg en integrasjon fra menyen.',
      'noIntegrations' => 'Ingen integrasjoner er tilgjengelig.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Hent OAuth 2.0 akkreditiver fra Google Developers Console.</b></p><p>Besøk <a href="https://console.developers.google.com/project">Google Developers Console</a> for å hente OAuth 2.0 akkreditiver, som f.eks. Client ID og Client Secret som er kjent av både Google og EspoCRM-appen.</p>',
      'GoogleMaps' => '<p>Hent API-nøkkel <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">her</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Utfør på',
      'attempts' => 'Forsøk igjen',
      'failedAttempts' => 'Mislykkede forsøk',
      'serviceName' => 'Tjeneste',
      'method' => 'Metode',
      'methodName' => 'Method',
      'scheduledJob' => 'Planlagte oppgaver',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Ventende',
        'Success' => 'Suksess',
        'Running' => 'Kjører',
        'Failed' => 'Feilet',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Bredde (%)',
      'link' => 'Lenke',
      'notSortable' => 'Ikke sorterbar',
      'align' => 'Plassering',
      'panelName' => 'Panelnavn',
      'style' => 'Stil',
      'sticked' => 'Festet',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Venstre',
        'right' => 'Høyre',
      ),
      'style' => 
      array (
        'default' => 'Forvalg',
        'success' => 'Suksess',
        'danger' => 'Fare',
        'info' => 'Info',
        'warning' => 'Varsel',
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
      'attachments' => 'Vedlegg',
      'targetType' => 'Mål',
      'teams' => 'Grupper',
      'users' => 'Brukere',
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
      'updates' => 'Oppdateringer',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'til meg selv',
        'users' => 'til valgt(e) bruker(e)',
        'teams' => 'til valgt(e) gruppe(r)',
        'all' => 'til alle interne brukere',
        'portals' => 'til portalbrukere',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Skriv en melding her',
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
      'isActive' => 'Er aktiv',
      'isDefault' => 'Er forvalg',
      'tabList' => 'Liste over dashlet-samlinger',
      'quickCreateList' => 'Opprett liste raskt',
      'companyLogo' => 'Logo',
      'theme' => 'Stiltema',
      'language' => 'Språk',
      'dashboardLayout' => 'Dashbordoppsett',
      'dateFormat' => 'Datoformat',
      'timeFormat' => 'Tidsformat',
      'timeZone' => 'Tidssone',
      'weekStart' => 'Første dag i uken',
      'defaultCurrency' => 'Forvalgt valuta',
      'customUrl' => 'Egendefinert URL',
      'customId' => 'Egendefinert ID',
    ),
    'links' => 
    array (
      'users' => 'Brukere',
      'portalRoles' => 'Roller',
      'notes' => 'Notater',
      'articles' => 'Kunnskapsbaseartikler',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Spesifiserte portalroller vil gjelde for alle brukere i denne portalen.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Opprett portal',
      'User Interface' => 'Brukergrensesnitt',
      'General' => 'Generelt',
      'Settings' => 'Innstillinger',
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
      'users' => 'Brukere',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Tilgang',
      'Create PortalRole' => 'Opprett portalrolle',
      'Scope Level' => 'Omfangsnivå',
      'Field Level' => 'Feltnivå',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Opprett portalbruker',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datoformat',
      'timeFormat' => 'Tidsformat',
      'timeZone' => 'Tidssone',
      'weekStart' => 'Første dagen i uken',
      'thousandSeparator' => 'Tusentallsdeler',
      'decimalMark' => 'Desimaltegn',
      'defaultCurrency' => 'Forvalgt valuta',
      'currencyList' => 'Valutaliste',
      'language' => 'Språk',
      'smtpServer' => 'Tjener',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autentisering',
      'smtpSecurity' => 'Sikkerhet',
      'smtpUsername' => 'Brukernavn',
      'emailAddress' => 'Epost',
      'smtpPassword' => 'Passord',
      'smtpEmailAddress' => 'Epostadresse',
      'exportDelimiter' => 'Skilletegn for eksport',
      'receiveAssignmentEmailNotifications' => 'Epostvarsel når du blir tildelt noe',
      'receiveMentionEmailNotifications' => 'Epostvarsel når du nevnes i poster',
      'receiveStreamEmailNotifications' => 'Epostvarsel om post- og statusoppdateringer',
      'autoFollowEntityTypeList' => 'Følg automatisk',
      'signature' => 'Epostsignatur',
      'dashboardTabList' => 'Menyliste',
      'defaultReminders' => 'Forvalgte påminnelser',
      'theme' => 'Stiltema',
      'useCustomTabList' => 'Egendefinert menyliste',
      'tabList' => 'Menyliste',
      'emailReplyToAllByDefault' => 'Epostsvar sendes til alle som forvalg',
      'dashboardLayout' => 'Dashbordutforming',
      'emailReplyForceHtml' => 'Send epost med HTML-formatering',
      'doNotFillAssignedUserIfNotRequired' => 'Ikke fyll ut \'tildelt bruker\' hvis det ikke er påkrevd',
      'followEntityOnStreamPost' => 'Følg enhet automatisk etter posting i strøm.',
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
      'Notifications' => 'Varsler',
      'User Interface' => 'Brukergrensesnitt',
      'SMTP' => 'SMTP',
      'Misc' => 'Diverse',
      'Locale' => 'Språk og nasjonalitet',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Brukeren vil automatisk følge alle nye oppføringer til de valgte enhetstypene, motta varsler og se informasjonen i strømmen.',
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
      'assignmentPermission' => 'Tildelingsrettigheter',
      'userPermission' => 'Brukerrettigheter',
      'portalPermission' => 'Portalrettigheter',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Brukere',
      'teams' => 'Grupper',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Gjør det mulig å begrense tildeling av oppføringer og å poste meldinger til andre brukere.

Alle – ingen restriksjoner

Gruppe – kan tildele og poste til medlemmer av gruppen

Ingen – kan kun tildele og poste til seg selv',
      'userPermission' => 'Gjør det mulig å avgrense om brukere skal kunne se aktiviteter, kalenderen og strømmen til andre brukere.

Alle – kan se alt

Gruppe – viser kun informasjon fra deltagere i gruppen

Ingen – får ikke se noe',
      'portalPermission' => 'Definerer tilgangen til portalinformasjon, muligheten til å poste meldinger og til å konvertere kontakter til portalbrukere.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Tilgang',
      'Create Role' => 'Opprett rolle',
      'Scope Level' => 'Omfangsnivå',
      'Field Level' => 'Feltnivå',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'udefinert',
        'enabled' => 'aktivert',
        'disabled' => 'deaktivert',
      ),
      'levelList' => 
      array (
        'all' => 'alle',
        'team' => 'gruppe',
        'account' => 'konto',
        'contact' => 'kontakt',
        'own' => 'eie',
        'no' => 'nei',
        'yes' => 'ja',
        'not-set' => 'udefinert',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Les',
      'edit' => 'Rediger',
      'delete' => 'Slett',
      'stream' => 'Strøm',
      'create' => 'Opprett',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Endringer i tillgangskontrollen vil først tre i kraft etter at hurtigminne er tømt.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'job' => 'Oppgave',
      'scheduling' => 'Planlegging',
    ),
    'links' => 
    array (
      'log' => 'Logg',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Opprett planlagt oppgave',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Opprydning',
        'CheckInboundEmails' => 'Sjekk gruppenes epostkonti',
        'CheckEmailAccounts' => 'Sjekk personlige epostkonti',
        'SendEmailReminders' => 'Send epostpåminnelser',
        'AuthTokenControl' => 'Kontroll av autentiseringstoken',
        'SendEmailNotifications' => 'Send epostvarsler',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Send epost til mange',
        'ControlKnowledgeBaseArticleStatus' => 'Kontrollér kunnskapsbaseartikkelens status',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Merk: Legg denne linjen til crontab-filen som kjører EspoCRMs planlagte oppgaver:',
        'mac' => 'Merk: Legg denne linjen til crontab-filen som kjører EspoCRMs planlagte oppgaver:',
        'windows' => 'Merk: Opprett en batch-fil med følgende kommandoer for å kjøre EspoCRMs planlagte oppgaver via Windows Scheduled Tasks:',
        'default' => 'Merk: Legg denne kommandoen til Cron Job (planlagte oppgaver):',
      ),
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab-notasjon. Definerer hvor hyppig oppgavene kjøres.

*/5 * * * * – hvert 5. minutt

0 */2 * * * – hver andre time

30 1 * * * – klokken 01:30 en gang om dagen

0 0 1 * * – første dagen i hver måned',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Utførelsestid',
      'target' => 'Mål',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Bruk hurtigminne',
      'dateFormat' => 'Datoformat',
      'timeFormat' => 'Tidsformat',
      'timeZone' => 'Tidssone',
      'weekStart' => 'Første dagen i uken',
      'thousandSeparator' => 'Tusentallsdeler',
      'decimalMark' => 'Desimaltegn',
      'defaultCurrency' => 'Forvalgt valuta',
      'baseCurrency' => 'Hovedvaluta',
      'currencyRates' => 'Pris-/renteverdier',
      'currencyList' => 'Valutaliste',
      'language' => 'Språk',
      'companyLogo' => 'Foretakslogo',
      'smtpServer' => 'Tjener',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autentisering',
      'smtpSecurity' => 'Sikkerhet',
      'smtpUsername' => 'Brukernavn',
      'emailAddress' => 'Epost',
      'smtpPassword' => 'Passord',
      'outboundEmailFromName' => 'Fra-navn',
      'outboundEmailFromAddress' => 'Fra-adresse',
      'outboundEmailIsShared' => 'Er delt',
      'recordsPerPage' => 'Oppføringer pr side',
      'recordsPerPageSmall' => 'Oppføringer pr side (liten)',
      'tabList' => 'Menyliste',
      'quickCreateList' => 'Opprett liste raskt',
      'exportDelimiter' => 'Skilletegn for eksport',
      'globalSearchEntityList' => 'Globalsøk for enhetsliste',
      'authenticationMethod' => 'Autentiseringsmetode',
      'ldapHost' => 'Tjener',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autentisering',
      'ldapUsername' => 'Full bruker DN',
      'ldapPassword' => 'Passord',
      'ldapBindRequiresDn' => 'Binding krever DN',
      'ldapBaseDn' => 'Base DN',
      'ldapAccountCanonicalForm' => 'Kanonisk skjema for konto',
      'ldapAccountDomainName' => 'Domenenavn for konto',
      'ldapTryUsernameSplit' => 'Prøv å splitte brukernavn',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Opprett bruker i EspoCRM',
      'ldapSecurity' => 'Sikkerhet',
      'ldapUserLoginFilter' => 'Innloggingsfilter for bruker',
      'ldapAccountDomainNameShort' => 'Kort domenenavn for konto',
      'ldapOptReferrals' => 'Opt-refferanser',
      'ldapUserNameAttribute' => 'Brukernavnegenskap',
      'ldapUserObjectClass' => 'ObjectClass for bruker',
      'ldapUserTitleAttribute' => 'Tittel-egenskap for bruker',
      'ldapUserFirstNameAttribute' => 'Fornavns-egenskap for bruker',
      'ldapUserLastNameAttribute' => 'Etternavns-egenskap for bruker',
      'ldapUserEmailAddressAttribute' => 'Epost-egenskap for bruker',
      'ldapUserTeams' => 'Grupper for bruker',
      'ldapUserDefaultTeam' => 'Forvalgt gruppe for bruker',
      'ldapUserPhoneNumberAttribute' => 'Telefonnummer-egenskap for bruker',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Deaktiver eksport (kun tillat for admin)',
      'assignmentNotificationsEntityList' => 'Enheter som varsles ved tildeling',
      'assignmentEmailNotifications' => 'Varslinger ved tildeling',
      'assignmentEmailNotificationsEntityList' => 'Epostvarslenes omfang ved tildeling',
      'streamEmailNotifications' => 'Varsling når strømmen til interne brukere oppdateres',
      'portalStreamEmailNotifications' => 'Varsling når strømmen til portalbrukere oppdateres',
      'streamEmailNotificationsEntityList' => 'Epostvarslenes omfang ved endring i strøm',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C-modus',
      'avatarsDisabled' => 'Deaktiver avatar',
      'followCreatedEntities' => 'Følg nyopprettede enheter',
      'displayListViewRecordCount' => 'Vis totalt antall (i listevisning)',
      'theme' => 'Stiltema',
      'userThemesDisabled' => 'Deaktiver stiltemabytte for brukere',
      'emailMessageMaxSize' => 'Maks epoststørrelse (Mb)',
      'massEmailMaxPerHourCount' => 'Maks antall eposter sendt pr time',
      'personalEmailMaxPortionSize' => 'Maks antall eposter som kan hentes inn fra tidligere dato for personlig konto',
      'inboundEmailMaxPortionSize' => 'Maks antall eposter som kan hentes inn fra tidligere dato for gruppekonto',
      'maxEmailAccountCount' => 'Maks antall epostkonti pr bruker',
      'authTokenLifetime' => 'Levetiden for autentiseringstoken (timer)',
      'authTokenMaxIdleTime' => 'Lengst tillate inaktivitet fra autentiseringstoken (timer)',
      'dashboardLayout' => 'Dashbordoppsett (forvalg)',
      'siteUrl' => 'Nettsidens URL',
      'addressPreview' => 'Forhåndsvisning av adresse',
      'addressFormat' => 'Adresseformat',
      'notificationSoundsDisabled' => 'Skru av varslingslyd',
      'applicationName' => 'Applikasjonsnavn',
      'calendarEntityList' => 'Enhetsliste for kalender',
      'mentionEmailNotifications' => 'Send epostvarsler når man nevnes i en post',
      'massEmailDisableMandatoryOptOutLink' => 'Deaktiver påbudt avmeldingslenke',
      'activitiesEntityList' => 'Enhetsliste for aktiviteter',
      'historyEntityList' => 'Enhetsliste for historie',
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
      'recordsPerPage' => 'Antall oppføringer som vises i listevisning fra starten.',
      'recordsPerPageSmall' => 'Antall oppføringer som vises i relasjonspanel fra starten.',
      'outboundEmailIsShared' => 'Tillat brukere å sende eposter via denne SMTP-tjeneren.',
      'followCreatedEntities' => 'Brukere vil automatisk følge oppføringer de selv oppretter.',
      'emailMessageMaxSize' => 'Alle inngående eposter som overskrider en spesifisert størrelse vil bli hentet uten brødtekst og vedlegg.',
      'authTokenLifetime' => 'Definerer hvor lenge tokens kan eksistere
0 – betyr ingen utløpstid.',
      'authTokenMaxIdleTime' => 'Definerer hvor lenge det siste tilgangstokenet er gyldig.
0 = ingen utløpstid.',
      'userThemesDisabled' => 'Brukere vil ikke kunne velge andre stiltema enn det forvalgte.',
      'ldapUsername' => 'Hele systemet bruker DN, som tillater å søke etter andre brukere. F.eks: "CN=LDAP System User,CN=tester,OU=espocrm,DC=test,DC=lan".',
      'ldapPassword' => 'Passordet som gir tilgang til LDAP-tjeneren.',
      'ldapAuth' => 'Tilgangsinformasjon for LDAP-tjeneren.',
      'ldapUserNameAttribute' => 'Egenskapen som identifiserer brukeren. F.eks: "userPrincipalName" eller "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass-egenskapen for å søke blant brukere, f.eks: "person" for AD, "inetOrgPerson" for OpenLDAP. ',
      'ldapAccountCanonicalForm' => 'Ulike kanoniske formatvarianter. Det er 4 muligheter:<br>- \'Dn\' - varianten i formatet \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - varianten \'tester\'.<br>- \'Backslash\' - varianten \'COMPANY\\tester\'.<br>- \'Principal\' - varianten \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Muligheten til å formatere brukernavnet i DN-format.',
      'ldapBaseDn' => 'Forvalgt DN-base brukt for å søke blant brukere. F.eks: "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Dette valget splitter et brukernavn fra domenet.',
      'ldapOptReferrals' => 'Om referanser må følges til LDAP-klienten.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Dette valget tillater EspoCRM å opprette en bruker fra LDAP-tjeneren.',
      'ldapUserFirstNameAttribute' => 'LDAP-egenskap som brukes for å avgjøre brukeres fornavn, f.eks: "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP-egenskap som brukes for å avgjøre brukeres etternavn, f.eks: "sn".',
      'ldapUserTitleAttribute' => 'LDAP-egenskap som brukes for å avgjøre brukeres tittel, f.eks: "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP-egenskap som brukes for å avgjøre brukeres epostadresse, f.eks: "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP-egenskap som brukes for å avgjøre brukeres telefonnummer, f.eks: "telephoneNumber".',
      'ldapUserLoginFilter' => 'Filteret som avgjør hvilke brukere som får tilgang til EspoCRM, f.eks "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Domenet som brukes for autentisering av LDAP-tjeneren.',
      'ldapAccountDomainNameShort' => 'Det korte domenet som brukes for autentisering av LDAP-tjeneren.',
      'ldapUserTeams' => 'Grupper for opprettet bruker. Gå til brukerens profil for å se mer.',
      'ldapUserDefaultTeam' => 'Forvalgt gruppe for opprettet bruker. Gå til brukerens profil for å se mer.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'EspoCRM er tilpasset B2B som forvalg. Du kan bytte til B2C.',
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
      'Locale' => 'Språk og nasjonalitet',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfigurasjon',
      'In-app Notifications' => 'Varslinger i appen',
      'Email Notifications' => 'Epostvarslinger',
      'Currency Settings' => 'Valutainnstillinger',
      'Currency Rates' => 'Valutapriser',
      'Mass Email' => 'Masseutsendt epost',
      'Test Connection' => 'Test oppkobling',
      'Connecting' => 'Kobler til…',
      'Activities' => 'Aktiviteter',
      'Admin Notifications' => 'Admin Notifications',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Tilkoblingen er etablert.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'roles' => 'Roller',
      'positionList' => 'Posisjonliste',
    ),
    'links' => 
    array (
      'users' => 'Brukere',
      'notes' => 'Notater',
      'roles' => 'Roller',
      'inboundEmails' => 'Epostkonti for grupper',
    ),
    'tooltips' => 
    array (
      'roles' => 'Roller for tilgangskontroll. Brukere i denne gruppen får tilgangsnivå tilsvarende de valgte rollene.',
      'positionList' => 'Tilgjengelige posisjoner i denne gruppen. F.eks. salgsperson, leder etc.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Opprett gruppe',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'body' => 'Brødtekst',
      'entityType' => 'Enhetstype',
      'header' => 'Overskrift',
      'footer' => 'Footer',
      'leftMargin' => 'Venstremarg',
      'topMargin' => 'Toppmarg',
      'rightMargin' => 'Høyremarg',
      'bottomMargin' => 'Bunnmarg',
      'printFooter' => 'Skriv ut footer',
      'footerPosition' => 'Footer-posisjon',
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
      'Create Template' => 'Opprett mal',
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
      'footer' => 'Bruk {pageNumber} for å skrive ut sidenummer',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'userName' => 'Brukernavn',
      'title' => 'Tittel',
      'isAdmin' => 'Er admin',
      'defaultTeam' => 'Forvalgt gruppe',
      'emailAddress' => 'Epost',
      'phoneNumber' => 'Telefon',
      'roles' => 'Roller',
      'portals' => 'Portaler',
      'portalRoles' => 'Portalroller',
      'teamRole' => 'Posisjon',
      'password' => 'Passord',
      'currentPassword' => 'Nåværende passord',
      'passwordConfirm' => 'Bekreft passord',
      'newPassword' => 'Nytt passord',
      'newPasswordConfirm' => 'Bekreft nytt passord',
      'avatar' => 'Avatar',
      'isActive' => 'Er aktiv',
      'isPortalUser' => 'Er portalbruker',
      'contact' => 'Kontakt',
      'accounts' => 'Konti',
      'account' => 'Konto (Primær)',
      'sendAccessInfo' => 'Send tilgangsinformasjonen på epost til brukeren',
      'portal' => 'Portal',
      'gender' => 'Kjønn',
      'position' => 'Posisjon i gruppen',
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
      'teams' => 'Grupper',
      'roles' => 'Roller',
      'notes' => 'Notater',
      'portals' => 'Portaler',
      'portalRoles' => 'Portalroller',
      'contact' => 'Kontakt',
      'accounts' => 'Konti',
      'account' => 'Konto (Primær)',
      'tasks' => 'Oppgaver',
      'targetLists' => 'Målgrupper',
    ),
    'labels' => 
    array (
      'Create User' => 'Opprett bruker',
      'Generate' => 'Generer',
      'Access' => 'Tilgang',
      'Preferences' => 'Preferanser',
      'Change Password' => 'Endre passord',
      'Teams and Access Control' => 'Grupper og tilgangskontroll',
      'Forgot Password?' => 'Glemt passordet?',
      'Password Change Request' => 'Spør om å få bytte passord',
      'Email Address' => 'Epostadresse',
      'External Accounts' => 'Eksterne konti',
      'Email Accounts' => 'Epostkonti',
      'Portal' => 'Portal',
      'Create Portal User' => 'Opprett portalbruker',
      'Proceed w/o Contact' => 'Fortsett uten kontakt',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Alle oppføringer som opprettes av denne brukeren vil bli relatert til denne gruppen som forvalg.',
      'userName' => 'Bokstaver fra a-z, nummer fra 0-9, punktum, bindestrek, krøllalfa og understrek er tillat.',
      'isAdmin' => 'Adminbruker har tilgang til alt.',
      'isActive' => 'Brukeren kan ikke logge inn når dette valget ikke er markert.',
      'teams' => 'Grupper som denne brukeren tilhører. Tilgangsnivået arves fra gruppens roller.',
      'roles' => 'Ytterligere tilgangsroller. Benyttes hvis brukeren ikke tilhører til noen gruppe eller når du har behov for å utvide tilgangsnivået for kun en bruker.',
      'portalRoles' => 'Ytterligere portalroller. Benyttes for å utvide tilgangsnivået for kun en bruker.',
      'portals' => 'Portaler som brukeren har tilgang til.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Passordet vil sendes til brukerens epostadresse.',
      'accountInfoEmailSubject' => 'EspoCRM-brukerens tilgangsinformasjon',
      'accountInfoEmailBody' => 'Påloggingsinformasjon:

Brukernavn: {userName}
Passord: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Spør om å få bytte passord',
      'passwordChangeLinkEmailBody' => 'You can change your password by following this link {link}. This unique URL will be expired soon.',
      'passwordChanged' => 'Passordet har blitt forandret',
      'userCantBeEmpty' => 'Brukernavn-feltet må fylles ut',
      'wrongUsernamePasword' => 'Feil brukernavn og / eller passord',
      'emailAddressCantBeEmpty' => 'Epostadresse-feltet må fylles ut',
      'userNameEmailAddressNotFound' => 'Brukernavn og / eller passordet finnes ikke',
      'forbidden' => 'Ikke tillat, prøv igjen senere',
      'uniqueLinkHasBeenSent' => 'Den unike lenken er sendt til den angitte epostadressen.',
      'passwordChangedByRequest' => 'Passordet er endret.',
      'setupSmtpBefore' => 'For å sende ut passord via epost må du først sette opp en <a href="{url}">SMTP-tjener</a>.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Ikke satt',
        'Male' => 'Mann',
        'Female' => 'Kvinne',
        'Neutral' => 'Nøytral',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Bare min gruppe',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'activePortal' => 'Aktiv portal',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'emailAddress' => 'Epost',
      'website' => 'Nettside',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Faktureringsadresse',
      'shippingAddress' => 'Leveringsadresse',
      'description' => 'Beskrivelse',
      'sicCode' => 'SIC-kode',
      'industry' => 'Industri',
      'type' => 'Type',
      'contactRole' => 'Tittel',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Kampanje',
      'targetLists' => 'Målgrupper',
      'targetList' => 'Målgruppe',
      'originalLead' => 'Original ledetråd',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakter',
      'opportunities' => 'Muligheter',
      'cases' => 'Saker',
      'documents' => 'Dokumenter',
      'meetingsPrimary' => 'Møter (utvidet)',
      'callsPrimary' => 'Samtaler (utvidet)',
      'tasksPrimary' => 'Gjøremål (utvidet)',
      'emailsPrimary' => 'Eposter (utvidet)',
      'targetLists' => 'Målgrupper',
      'campaignLogRecords' => 'Kampanjelogg',
      'campaign' => 'Kampanje',
      'portalUsers' => 'Portalbrukere',
      'originalLead' => 'Original ledetråd',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Kunder',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Forhandler',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Romfart',
        'Agriculture' => 'Jordbruk',
        'Advertising' => 'Markedsføring',
        'Apparel & Accessories' => 'Klær & tilbehør',
        'Architecture' => 'Arkitektur',
        'Automotive' => 'Bilbransjen',
        'Banking' => 'Banktjenester',
        'Biotechnology' => 'Bioteknologi',
        'Building Materials & Equipment' => 'Byggematerialer & utstyr',
        'Chemical' => 'Kjemisk',
        'Construction' => 'Annleggsbygging',
        'Computer' => 'Informasjonsteknologi',
        'Defense' => 'Forsvaret',
        'Creative' => 'Kreative fagfelt',
        'Culture' => 'Kultur',
        'Consulting' => 'Konsultasjon',
        'Education' => 'Utdanning',
        'Electronics' => 'Elektronikk',
        'Electric Power' => 'Elektrisk kraft',
        'Energy' => 'Energi',
        'Entertainment & Leisure' => 'Underholdning & fritid',
        'Finance' => 'Finans',
        'Food & Beverage' => 'Mat & drikke',
        'Grocery' => 'Dagligvare',
        'Hospitality' => 'Innlosjering',
        'Healthcare' => 'Helse',
        'Insurance' => 'Forsikring',
        'Legal' => 'Juridisk',
        'Manufacturing' => 'Produksjon',
        'Mass Media' => 'Massemedia',
        'Mining' => 'Gruvedrift',
        'Music' => 'Musikk',
        'Marketing' => 'Markedsføring',
        'Publishing' => 'Forlag',
        'Petroleum' => 'Olje- og gass',
        'Real Estate' => 'Eiendom',
        'Retail' => 'Detaljhandel',
        'Shipping' => 'Varelevering',
        'Service' => 'Service',
        'Support' => 'Kundestøtte',
        'Sports' => 'Sport',
        'Software' => 'Programvare',
        'Technology' => 'Teknologi',
        'Telecommunications' => 'Telekommunikasjon',
        'Television' => 'Fjernsyn',
        'Testing, Inspection & Certification' => 'Testing, inspeksjon og sertifisering',
        'Transportation' => 'Transport',
        'Travel' => 'Travel',
        'Venture Capital' => 'Risikokapital',
        'Wholesale' => 'Engros',
        'Water' => 'Vann',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Opprett konto',
      'Copy Billing' => 'Kopier fakturering',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Kunder',
      'partners' => 'Partnere',
      'recentlyCreated' => 'Nylig opprette',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Måned',
      'week' => 'Uke',
      'day' => 'Dag',
      'agendaWeek' => 'Uke',
      'agendaDay' => 'Dag',
      'timeline' => 'Tidslinje',
    ),
    'labels' => 
    array (
      'Today' => 'Idag',
      'Create' => 'Opprett',
      'Shared' => 'Delt',
      'Add User' => 'Legg til bruker',
      'current' => 'nåværende',
      'time' => 'tid',
      'User List' => 'Brukerliste',
      'Manage Users' => 'Administrer brukere',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'parent' => 'Forelder',
      'status' => 'Status',
      'dateStart' => 'Startdato',
      'dateEnd' => 'Sluttdato',
      'direction' => 'Rettning',
      'duration' => 'Varighet',
      'description' => 'Beskrivelse',
      'users' => 'Brukere',
      'contacts' => 'Kontakter',
      'leads' => 'Ledetråder',
      'reminders' => 'Påminnelser',
      'account' => 'Konto',
      'acceptanceStatus' => 'Akseptstatus',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planlagt',
        'Held' => 'Gjennomført',
        'Not Held' => 'Ikke gjennomført',
      ),
      'direction' => 
      array (
        'Outbound' => 'Utgående',
        'Inbound' => 'Inngående',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Ingen',
        'Accepted' => 'Akseptert',
        'Declined' => 'Avslått',
        'Tentative' => 'Forsøkt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Merk som gjennomført',
      'setNotHeld' => 'Merk som ikke gjennomført',
    ),
    'labels' => 
    array (
      'Create Call' => 'Opprett samtale',
      'Set Held' => 'Merk som gjennomført',
      'Set Not Held' => 'Merk som ikke gjennomført',
      'Send Invitations' => 'Send invitasjoner',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planlagt',
      'held' => 'Gjennomført',
      'todays' => 'Dagens',
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
      'endDate' => 'Sluttdato',
      'targetLists' => 'Målgruppe',
      'excludingTargetLists' => 'Ekskluder følgende målgrupper',
      'sentCount' => 'Sendt',
      'openedCount' => 'Åpnet',
      'clickedCount' => 'Klikket på',
      'optedOutCount' => 'Avmeldt',
      'bouncedCount' => 'Avslått',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Tydelig avslått',
      'softBouncedCount' => 'Diffust avslått',
      'leadCreatedCount' => 'Opprettede ledetråder',
      'revenue' => 'Omsetning',
      'revenueConverted' => 'Omsetning (konvertert)',
      'budget' => 'Budsjett',
      'budgetConverted' => 'Budsjett (konvertert)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Målgrupper',
      'excludingTargetLists' => 'Ekskluderte målgrupper',
      'accounts' => 'Konti',
      'contacts' => 'Kontakter',
      'leads' => 'Ledetråder',
      'opportunities' => 'Muligheter',
      'campaignLogRecords' => 'Logg',
      'massEmails' => 'Masseutsendte eposter',
      'trackingUrls' => 'Sporingslenker',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Epost',
        'Web' => 'Nettside',
        'Television' => 'Fjernsyn',
        'Radio' => 'Radio',
        'Newsletter' => 'Nyhetsbrev',
        'Mail' => 'Post',
      ),
      'status' => 
      array (
        'Planning' => 'Planlagt',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Ferdig',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Opprett kampanje',
      'Target Lists' => 'Målgruppe',
      'Statistics' => 'Statistikk',
      'hard' => 'hard',
      'soft' => 'myk',
      'Unsubscribe' => 'Meld meg av',
      'Mass Emails' => 'Masseutsendte eposter',
      'Email Templates' => 'Epostmaler',
      'Unsubscribe again' => 'Avmeld igjen',
      'Subscribe again' => 'Påmeld igjen',
      'Create Target List' => 'Opprett målgruppe',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Du er ikke lenger oppført i vår epostliste.',
      'subscribedAgain' => 'Du er påmeldt igjen.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Målgruppe(r) som skal motta meldinger.',
      'excludingTargetLists' => 'Målgruppe(r) som ikke skal motta meldinger.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Handling',
      'actionDate' => 'Dato',
      'data' => 'Data',
      'campaign' => 'Kampanje',
      'parent' => 'Mål',
      'object' => 'Objekt',
      'application' => 'Applikasjon',
      'queueItem' => 'Køgjenstand',
      'stringData' => 'Datastreng',
      'stringAdditionalData' => 'Tilleggsdatastreng',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Køgjenstand',
      'parent' => 'Forelder',
      'object' => 'Objekt',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Sendt',
        'Opened' => 'Åpnet',
        'Opted Out' => 'Avmeldt',
        'Bounced' => 'Avslått',
        'Clicked' => 'Klikket på',
        'Lead Created' => 'Ledetråd opprettet',
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
      'opened' => 'Åpnet',
      'optedOut' => 'Avmeldt',
      'optedIn' => 'Opted In',
      'bounced' => 'Avslått',
      'clicked' => 'Klikket på',
      'leadCreated' => 'Ledetråd opprettet',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Kode for å sette inn URL',
      'campaign' => 'Kampanje',
    ),
    'links' => 
    array (
      'campaign' => 'Kampanje',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Opprett sporings-URL',
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
      'inboundEmail' => 'Inngående epost',
      'lead' => 'Ledetråd',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Inngående epost',
      'account' => 'Konto',
      'contact' => 'Kontakt (primær)',
      'Contacts' => 'Kontakter',
      'meetings' => 'Møter',
      'calls' => 'Samtaler',
      'tasks' => 'Gjøremål',
      'emails' => 'Eposter',
      'articles' => 'Kunnskapsbaseartikler',
      'lead' => 'Ledetråd',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Ny',
        'Assigned' => 'Tilegnet',
        'Pending' => 'Venter',
        'Closed' => 'Lukket',
        'Rejected' => 'Avslått',
        'Duplicate' => 'Duplikat',
      ),
      'priority' => 
      array (
        'Low' => 'Lav',
        'Normal' => 'Vanlig',
        'High' => 'Høy',
        'Urgent' => 'Haster',
      ),
      'type' => 
      array (
        'Question' => 'Spørsmål',
        'Incident' => 'Hendelse',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Opprett sak',
      'Close' => 'Lukk',
      'Reject' => 'Avslå',
      'Closed' => 'Lukket',
      'Rejected' => 'Avslått',
    ),
    'presetFilters' => 
    array (
      'open' => 'Åpen',
      'closed' => 'Lukket',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'emailAddress' => 'Epost',
      'title' => 'Tittel',
      'account' => 'Konto',
      'accounts' => 'Konti',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Kontotype',
      'doNotCall' => 'Ikke ring!',
      'address' => 'Adresse',
      'opportunityRole' => 'Mulighetsrolle',
      'accountRole' => 'Tittel',
      'description' => 'Beskrivelse',
      'campaign' => 'Kampanje',
      'targetLists' => 'Målgrupper',
      'targetList' => 'Målgruppe',
      'portalUser' => 'Portalbruker',
      'originalLead' => 'Original ledetråd',
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
      'opportunities' => 'Muligheter',
      'cases' => 'Saker',
      'targetLists' => 'Målgrupper',
      'campaignLogRecords' => 'Kampanjelogg',
      'campaign' => 'Kampanje',
      'account' => 'Konto (primær)',
      'accounts' => 'Konti',
      'casesPrimary' => 'Saker (primær)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portalbruker',
      'originalLead' => 'Original ledetråd',
      'documents' => 'Dokumenter',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Opprett kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Ingen--',
        'Decision Maker' => 'Beslutningstager',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Påvirker',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portalbrukere',
      'notPortalUsers' => 'Ikke portalbrukere',
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
      'Create Document' => 'Opprett dokument',
      'Details' => 'Detaljer',
    ),
    'fields' => 
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'file' => 'Fil',
      'type' => 'Type',
      'publishDate' => 'Publiseringsdato',
      'expirationDate' => 'Utløpsdato',
      'description' => 'Beskrivelse',
      'accounts' => 'Konti',
      'folder' => 'Mappe',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Konti',
      'opportunities' => 'Muligheter',
      'folder' => 'Mappe',
      'leads' => 'Ledetråd',
      'contacts' => 'Kontakter',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Draft' => 'Utkast',
        'Expired' => 'Utgått',
        'Canceled' => 'Kansellert',
      ),
      'type' => 
      array (
        '' => 'Ingen',
        'Contract' => 'Kontrakt',
        'NDA' => 'Hemmeligholdsavtale (NDA)',
        'EULA' => 'Sluttbrukeravtale (EULA)',
        'License Agreement' => 'Lisensavtale',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'draft' => 'Utkast',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Opprett dokumentmappe',
      'Manage Categories' => 'Administrer mapper',
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
      'sentAt' => 'Dato sendt',
      'attemptCount' => 'Forsøk',
      'emailAddress' => 'Epostadresse',
      'massEmail' => 'Masseutsendt epost',
      'isTest' => 'Er test',
    ),
    'links' => 
    array (
      'target' => 'Mål',
      'massEmail' => 'Masseutsendt epost',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Venter',
        'Sent' => 'Sendt',
        'Failed' => 'Feilet',
        'Sending' => 'Sender',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Venter',
      'sent' => 'Sendt',
      'failed' => 'Feilet',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Opprett artikkel',
      'Any' => 'Hva som helst',
      'Send in Email' => 'Send i epost',
      'Move Up' => 'Flytt opp',
      'Move Down' => 'Flytt ned',
      'Move to Top' => 'Flytt til toppen',
      'Move to Bottom' => 'Flytt til bunnen',
    ),
    'fields' => 
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Vedlegg',
      'publishDate' => 'Publiseringsdato',
      'expirationDate' => 'Utløpsdato',
      'description' => 'Beskrivelse',
      'body' => 'Brødtekst',
      'categories' => 'Kategorier',
      'language' => 'Språk',
      'portals' => 'Portaler',
    ),
    'links' => 
    array (
      'cases' => 'Saker',
      'opportunities' => 'Muligheter',
      'categories' => 'Kategorier',
      'portals' => 'Portaler',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'Venter på godkjenning',
        'Draft' => 'Utkas',
        'Archived' => 'Arkivert',
        'Published' => 'Publisert',
      ),
      'type' => 
      array (
        'Article' => 'Artikkel',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publisert',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Opprett kategori',
      'Manage Categories' => 'Administrer kategorier',
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
      'Converted To' => 'Konvertert til',
      'Create Lead' => 'Opprett ledetråd',
      'Convert' => 'Konvertert',
      'convert' => 'konvertert',
    ),
    'fields' => 
    array (
      'name' => 'Navn',
      'emailAddress' => 'Epost',
      'title' => 'Tittel',
      'website' => 'Nettside',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Kontonavn',
      'doNotCall' => 'Ikke ring!',
      'address' => 'Adresse',
      'status' => 'Status',
      'source' => 'Kilde',
      'opportunityAmount' => 'Beløp for mulighet',
      'opportunityAmountConverted' => 'Beløp for mulighet (konverter)',
      'description' => 'Beskrivelse',
      'createdAccount' => 'Konto',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Mulighet',
      'campaign' => 'Kampanje',
      'targetLists' => 'Målgrupper',
      'targetList' => 'Målgruppe',
      'industry' => 'Industri',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Målgrupper',
      'campaignLogRecords' => 'Kampanjelogg',
      'campaign' => 'Kampanje',
      'createdAccount' => 'Konto',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Mulighet',
      'cases' => 'Saker',
      'documents' => 'Dokumenter',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Ny',
        'Assigned' => 'Tildelt',
        'In Process' => 'Under behandling',
        'Converted' => 'Konvertert',
        'Recycled' => 'Brukt på nytt',
        'Dead' => 'Død',
      ),
      'source' => 
      array (
        '' => 'Ingen',
        'Call' => 'Samtale',
        'Email' => 'Epost',
        'Existing Customer' => 'Eksisterende kunde',
        'Partner' => 'Partner',
        'Public Relations' => 'Informasjon og samfunnskontakt (PR)',
        'Web Site' => 'Nettside',
        'Campaign' => 'Kampanje',
        'Other' => 'Annet',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktive',
      'actual' => 'Aktuell',
      'converted' => 'Konvertert',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'status' => 'Status',
      'storeSentEmails' => 'Lager sendte eposter',
      'startAt' => 'Startdato',
      'fromAddress' => 'Fra-adresse',
      'fromName' => 'Fra-navn',
      'replyToAddress' => 'Svar-til adresse',
      'replyToName' => 'Svar-til navn',
      'campaign' => 'Kampanje',
      'emailTemplate' => 'Epostmal',
      'inboundEmail' => 'Epostkonto',
      'targetLists' => 'Målgrupper',
      'excludingTargetLists' => 'Ekskluderte målgrupper',
      'optOutEntirely' => 'Fullstendig avmelding',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Målgrupper',
      'excludingTargetLists' => 'Ekskluderte målgrupper',
      'queueItems' => 'Køobjekter',
      'campaign' => 'Kampanje',
      'emailTemplate' => 'Epostmal',
      'inboundEmail' => 'Epostkonto',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Utkast',
        'Pending' => 'Venter',
        'In Process' => 'Under behandling',
        'Complete' => 'Ferdig',
        'Canceled' => 'Kansellert',
        'Failed' => 'Feilet',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Opprett masseutsendt epost',
      'Send Test' => 'Send test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Velg minst ett mål.',
      'testSent' => 'Test epost(ene) som skal sendes',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Epostadresser fra mottagere som har meldt seg av, vil merkes som \'avmeldt\' og mottar ikke fremtidige utsendelser.',
      'targetLists' => 'Mål som ikke skal motta meldinger.',
      'excludingTargetLists' => 'Mål som ikke skal motta meldinger.',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuell',
      'complete' => 'Ferdig',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'parent' => 'Forelder',
      'status' => 'Status',
      'dateStart' => 'Startdato',
      'dateEnd' => 'Sluttdato',
      'duration' => 'Varighet',
      'description' => 'Beskrivelse',
      'users' => 'Brukere',
      'contacts' => 'Kontakter',
      'leads' => 'Ledetråder',
      'reminders' => 'Påminnelser',
      'account' => 'Konto',
      'acceptanceStatus' => 'Akseptstatus',
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
        'Held' => 'Gjennomført',
        'Not Held' => 'Ikke gjennomført',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Ingen',
        'Accepted' => 'Akseptert',
        'Declined' => 'Avslått',
        'Tentative' => 'Førsøkt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Merk som gjennomført',
      'setNotHeld' => 'Merk som ikke gjennomført',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Opprett møte',
      'Set Held' => 'Merk som gjennomført',
      'Set Not Held' => 'Merk som ikke gjennomført',
      'Send Invitations' => 'Send invitasjoner',
      'on time' => 'på tiden',
      'before' => 'før',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planlagt',
      'held' => 'Gjennomført',
      'todays' => 'Dagens',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Ingenting ble sendt',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'account' => 'Konto',
      'stage' => 'Stadie',
      'amount' => 'Beløp',
      'probability' => 'Sansynlighet, %',
      'leadSource' => 'Ledetrådkilde',
      'doNotCall' => 'Ikke ring!',
      'closeDate' => 'Avslutningsdato',
      'contacts' => 'Kontakter',
      'description' => 'Beskrivelse',
      'amountConverted' => 'Beløp',
      'amountWeightedConverted' => 'Vektet beløp',
      'campaign' => 'Kampanje',
      'originalLead' => 'Original ledetråd',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakter',
      'documents' => 'Dokumenter',
      'campaign' => 'Kampanje',
      'originalLead' => 'Original ledetråd',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Undersøkes',
        'Qualification' => 'Kvalitetskontrolleres',
        'Proposal' => 'Prisforslag',
        'Negotiation' => 'Forhandler',
        'Needs Analysis' => 'Trenger analyse',
        'Value Proposition' => 'Verdivurdering',
        'Id. Decision Makers' => 'Ser etter beslutningstagere',
        'Perception Analysis' => 'Undersøker hvordan vi oppfattes',
        'Proposal/Price Quote' => 'Prisforslag/-nivå foreslått',
        'Negotiation/Review' => 'Forhandler/gjennomgår',
        'Closed Won' => 'Vunnet og lukket',
        'Closed Lost' => 'Tapt og lukket',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Opprett mulighet',
    ),
    'presetFilters' => 
    array (
      'open' => 'Åpen',
      'won' => 'Vunnet',
      'lost' => 'Tapt',
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
      'entryCount' => 'Antall enheter',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Kampanjer',
      'endDate' => 'Sluttdato',
      'targetLists' => 'Målgrupper',
      'includingActionList' => 'Inkludert',
      'excludingActionList' => 'Eksludert',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Konti',
      'contacts' => 'Kontakter',
      'leads' => 'Ledetråder',
      'campaigns' => 'Kampanjer',
      'massEmails' => 'Masseutsendte eposter',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Epost',
        'Web' => 'Nettside',
        'Television' => 'Fjernsyn',
        'Radio' => 'Radio',
        'Newsletter' => 'Nyhetsbrev',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Opprett målgruppe',
      'Opted Out' => 'Avmeldt',
      'Cancel Opt-Out' => 'Angre avmelding',
      'Opt-Out' => 'Avmeld',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Navn',
      'parent' => 'Forelder',
      'status' => 'Status',
      'dateStart' => 'Startdato',
      'dateEnd' => 'Tidsfrist',
      'dateStartDate' => 'Startdato (hele dagen)',
      'dateEndDate' => 'Sluttdato (hele dagen)',
      'priority' => 'Prioritet',
      'description' => 'Beskrivelse',
      'isOverdue' => 'På overtid',
      'account' => 'Konto',
      'dateCompleted' => 'Gjennomført',
      'attachments' => 'Vedlegg',
      'reminders' => 'Påminnelser',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Vedlegg',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Ikke påbegynt',
        'Started' => 'Påbegynt',
        'Completed' => 'Gjennomført',
        'Canceled' => 'Avbrutt',
        'Deferred' => 'Utsatt',
      ),
      'priority' => 
      array (
        'Low' => 'Lav',
        'Normal' => 'Vanlig',
        'High' => 'Høy',
        'Urgent' => 'Haster',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Opprett oppgave',
      'Complete' => 'Gjennomført',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuell',
      'completed' => 'Gjennomført',
      'deferred' => 'Utsatt',
      'todays' => 'Dagens',
      'overdue' => 'På overtid',
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
      'meetings' => 'Møter',
      'calls' => 'Samtaler',
      'tasks' => 'Oppgaver',
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
      'Create Formularios' => 'Opprett Formulario',
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
      'meetings' => 'Møter',
      'calls' => 'Samtaler',
      'tasks' => 'Oppgaver',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => 'Opprett MotivoReclamo',
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
      'meetings' => 'Møter',
      'calls' => 'Samtaler',
      'tasks' => 'Oppgaver',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' => 
    array (
      'Create Reclamo' => 'Opprett Reclamo',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>