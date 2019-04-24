<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Utilizator',
      'action' => 'Acțiune',
      'createdAt' => 'Dată',
      'target' => 'Țintă',
      'targetType' => 'Tipul Țintei',
      'authToken' => 'Token Autentificare',
      'ipAddress' => 'Adresă IP',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' => 
    array (
      'authToken' => 'Token Autentificare',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'Utilizator',
      'target' => 'Țintă',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Doar Eu',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Citește',
        'update' => 'Actualizare',
        'delete' => 'Șterge',
        'create' => 'Creează',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activat',
      'Disabled' => 'Dezactivat',
      'System' => 'Sistem',
      'Users' => 'Utilizatori',
      'Email' => 'Email',
      'Data' => 'Date',
      'Customization' => 'Personalizare',
      'Available Fields' => 'Câmpuri disponibile',
      'Layout' => 'Aspect',
      'Entity Manager' => 'Manager Entitate',
      'Add Panel' => 'Adaugă Panou',
      'Add Field' => 'Adaugă Câmp',
      'Settings' => 'Setări',
      'Scheduled Jobs' => 'Activități Planificate',
      'Upgrade' => 'Actualizare',
      'Clear Cache' => 'Șterge Cache',
      'Rebuild' => 'Reconstruire',
      'Teams' => 'Echipe',
      'Roles' => 'Roluri',
      'Portal' => 'Portal',
      'Portals' => 'Portaluri',
      'Portal Roles' => 'Roluri Portaluri',
      'Portal Users' => 'Utilizatorii portalului',
      'Outbound Emails' => 'Email-uri trimise',
      'Group Email Accounts' => 'Grup Conturi Email',
      'Personal Email Accounts' => 'Conturi Personale Email',
      'Inbound Emails' => 'Email-uri intrate',
      'Email Templates' => 'Template-uri Email',
      'Import' => 'Importare',
      'Layout Manager' => 'Manager Aspect',
      'User Interface' => 'Interfață Utilizator',
      'Auth Tokens' => 'Token-uri Autentificare',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autentificare',
      'Currency' => 'Monedă',
      'Integrations' => 'Integrări',
      'Extensions' => 'Extensii',
      'Upload' => 'Încarcă',
      'Installing...' => 'Se instaleză...',
      'Upgrading...' => 'Se actualizează...',
      'Upgraded successfully' => 'S-a actualizat cu succes',
      'Installed successfully' => 'S-a instalat cu succes',
      'Ready for upgrade' => 'Gata pentru actualizare',
      'Run Upgrade' => 'Rulează actualizarea',
      'Install' => 'Instalare',
      'Ready for installation' => 'Gata pentru instalare',
      'Uninstalling...' => 'Se dezinstalează...',
      'Uninstalled' => 'Dezinstalat',
      'Create Entity' => 'Crează Entitate',
      'Edit Entity' => 'Editare Entitate',
      'Create Link' => 'Crează Link',
      'Edit Link' => 'Editează Link',
      'Notifications' => 'Notificări',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Resetează la Implicit',
      'Email Filters' => 'Filtre Email',
      'Action History' => 'Istoric Acțiune',
      'Label Manager' => 'Manager Etichetă',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Listă',
      'detail' => 'Detaliu',
      'listSmall' => 'Listă (Mic)',
      'detailSmall' => 'Detaliu (Mic)',
      'detailPortal' => 'Detaliu (Portal)',
      'detailSmallPortal' => 'Detaliu (Mic, Portal)',
      'listSmallPortal' => 'Listă (Mic, Portal)',
      'listPortal' => 'Listă (Portaluri)',
      'relationshipsPortal' => 'Panouri Relație (Portal)',
      'filters' => 'Filtre Căutare',
      'massUpdate' => 'Actualizează tot',
      'relationships' => 'Panouri Relație',
      'sidePanelsDetail' => 'Panouri Laterale (Detaliu)',
      'sidePanelsEdit' => 'Panouri Laterale (Editează)',
      'sidePanelsDetailSmall' => 'Panouri Laterale (Detaliu Mic)',
      'sidePanelsEditSmall' => 'Panouri Laterale (Editează Mic)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'Listă (pentru Cont)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresă',
      'array' => 'Array',
      'foreign' => 'Străin',
      'duration' => 'Durată',
      'password' => 'Parolă',
      'personName' => 'Nume Persoană',
      'autoincrement' => 'Auto-incrementare',
      'bool' => 'Boolean',
      'currency' => 'Valută',
      'currencyConverted' => 'Valută (Convertită)',
      'date' => 'Dată',
      'datetime' => 'DatăTimp',
      'datetimeOptional' => 'Dată/DatăTimp',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplu',
      'linkParent' => 'Link Părinte',
      'phone' => 'Telefon',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Fișier',
      'image' => 'Imagine',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Atașare Multiplă',
      'rangeInt' => 'Interval Integer',
      'rangeFloat' => 'Interval Float',
      'rangeCurrency' => 'Interval Valută',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Hartă',
      'number' => 'Număr (auto-incrementare)',
      'colorpicker' => 'Selector Culoarea',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
    ),
    'fields' => 
    array (
      'type' => 'Tip',
      'name' => 'Nume',
      'label' => 'Etichetă',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Obligatoriu',
      'default' => 'Inițial',
      'maxLength' => 'Lungime Maximă',
      'options' => 'Opțiuni',
      'after' => 'După (câmp)',
      'before' => 'Înainte (câmp)',
      'link' => 'Link',
      'field' => 'Câmp',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Tranducere',
      'previewSize' => 'Previzualizare Mărime',
      'noEmptyString' => 'Șirul nu poate fi gol',
      'defaultType' => 'Tip Implicit',
      'seeMoreDisabled' => 'Dezactivează Text Cut',
      'entityList' => 'Listă Entitate',
      'isSorted' => 'Este Sortat (alfabetică)',
      'audited' => 'Audiate',
      'trim' => 'Aranjează',
      'height' => 'Înălțime (px)',
      'minHeight' => 'Înălțime Min (px)',
      'provider' => 'Furnizor',
      'typeList' => 'Tip Listă',
      'rows' => 'Numbăr de rânduri din textarea',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Lista Sursă',
      'prefix' => 'Prefix',
      'nextNumber' => 'Următorul Număr',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Dezactivează Formatarea',
      'dynamicLogicVisible' => 'Condiții care fac câmpul vizibil',
      'dynamicLogicReadOnly' => 'Condiții care fac câmpul numai-citit',
      'dynamicLogicRequired' => 'Condiții care fac câmpul necesar',
      'dynamicLogicOptions' => 'Opțiuni Condiționale',
      'probabilityMap' => 'Etape Probabilități (%)',
      'readOnly' => 'Numai-citit',
      'maxFileSize' => 'Mărimea Maximă A Fișierului (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM se va actualiza la versiunea <strong>{version}</strong>. Vă rugăm așteptați, s-ar putea să dureze puțin.',
      'upgradeDone' => 'EspoCRM a fost actualizată la versiunea <strong>{version}</strong>.',
      'upgradeBackup' => 'Vă rugăm să faceți o copie de rezervă a EspoCRM înainte de a face actualizarea.',
      'thousandSeparatorEqualsDecimalMark' => 'Separatorul de mii nu poate fi același cu separatorul de zecimale.',
      'userHasNoEmailAddress' => 'Utilizatorul nu are adresă de email.',
      'selectEntityType' => 'Selectați tipul entității aflat în meniul din stânga.',
      'selectUpgradePackage' => 'Selectați pachetul de actualizare',
      'downloadUpgradePackage' => 'Descarcă pachetul de actualizare <a href="{url}">here</a>.',
      'selectLayout' => 'Selectați aspectul dorit din meniul din stanga și editați-l.',
      'selectExtensionPackage' => 'Selectează pachetul de extensii ',
      'extensionInstalled' => ' Extenisa {name} {version} a fost instalată. ',
      'installExtension' => 'Extenisa {name} {version} este gata pentru instalare.',
      'cronIsNotConfigured' => 'Activitățiile programate nu rulează. Astfel, email-urile primite, notificările și mementourile nu funcționează. Te rugăm să urmezi <a target="_blank" href="https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab">instructions</a>  pentru a seta o activitate cron. ',
      'newVersionIsAvailable' => ' O nouă vesiune de EspoCRM {latestVersion} este disponibilă. ',
      'newExtensionVersionIsAvailable' => 'O nouă versiune {latestVersion} din {extensionName} este disponibilă.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Setările de sistem ale aplicației.',
      'scheduledJob' => 'Activități care sunt executate de cron.',
      'upgrade' => 'Actualizare aplicație.',
      'clearCache' => 'Șterge tot cache-ul din backend.',
      'rebuild' => 'Reconstruire backend și ștergere cache.',
      'users' => 'Management Utilizatori.',
      'teams' => 'Management Echipe.',
      'roles' => 'Management Roluri.',
      'portals' => 'Management Portaluri',
      'portalRoles' => 'Roluri pentru portal.',
      'portalUsers' => 'Utilizatorii portalului.',
      'outboundEmails' => 'Setări SMTP pentru trimitere email-uri.',
      'groupEmailAccounts' => 'Grupează conturi email IMAP. Importă Email și Email-către-Caz.',
      'personalEmailAccounts' => 'Conturi utilizatori email',
      'emailTemplates' => 'Șabloane pentru email-urile trimise.',
      'import' => 'Importare date din fișier CSV.',
      'layoutManager' => 'Personalizare aspect (listă, detaliu, editare, căutare, actualizează tot).',
      'entityManager' => 'Creează și editează entități personalizate. Gestionează câmpuri și relații.',
      'userInterface' => 'Configurare UI.',
      'authTokens' => 'Sesiuni Auth Active. Adresă IP și data ultimei accesări.',
      'authentication' => 'Setări de autentificare.',
      'currency' => 'Setări valură și curs valutar.',
      'extensions' => 'Instalează sau dezinstalează extensii.',
      'integrations' => 'Integrează cu serviciile terților. ',
      'notifications' => 'Notificări pentru setări în aplicație și email.',
      'inboundEmails' => 'Setări pentru email-urile primite.',
      'emailFilters' => 'Mesajele din email care se potrivesc cu filtrul specificat nu o să fie importate.',
      'actionHistory' => 'Jurnalul acțiunilor utilizatorului.',
      'labelManager' => 'Personalizează etichetele aplicației.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Mic',
        'small' => 'Mic',
        'medium' => 'Mediu',
        'large' => 'Mare',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'ȘI',
      'or' => 'SAU',
      'not' => 'NU',
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
      'Document' => 'Inserează Document',
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
      'user' => 'Utilizator',
      'ipAddress' => 'Adresa IP',
      'lastAccess' => 'Data ultimei accesări',
      'createdAt' => 'Data conectării',
      'isActive' => 'Este Activă',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Istoric Acțiune',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
      'inactive' => 'Inactiv',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Setează Inactiv',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Setează Inactiv',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Titlu',
      'dateFrom' => 'Forma Datei',
      'dateTo' => 'Dată către',
      'autorefreshInterval' => 'Interval de auto-împrospătare',
      'displayRecords' => 'Afișează Înregistrările',
      'isDoubleHeight' => 'Înălțime 2x',
      'mode' => 'Mod',
      'enabledScopeList' => 'Ce să se afișeze',
      'users' => 'Utilizatori',
      'entityType' => 'Tipul Entității',
      'primaryFilter' => 'Filtru Principal',
      'boolFilterList' => 'Filtre Adiționale',
      'sortBy' => 'Ordonare (câmp)',
      'sortDirection' => 'Ordonare (direcție)',
      'expandedLayout' => 'Aspect',
      'dateFilter' => 'Filtru Dată',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Săptămână (agendă)',
        'basicWeek' => 'Săptămână',
        'month' => 'Lună',
        'basicDay' => 'Zi',
        'agendaDay' => 'Zi (agendă)',
        'timeline' => 'Cronologie',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Selectează Tipul Entității în opțiunile dashlet.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Câmp',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Egal',
        'notEquals' => 'Nu este egal',
        'greaterThan' => 'Mai mare decât',
        'lessThan' => 'Mai mic decât',
        'greaterThanOrEquals' => 'Mai mare sau egal',
        'lessThanOrEquals' => 'Mai mic sau egal',
        'in' => 'În',
        'notIn' => 'Nu în',
        'inPast' => 'În Trecut',
        'inFuture' => 'În Viitor',
        'isToday' => 'Este Astăzi',
        'isTrue' => 'Este Adevărat',
        'isFalse' => 'Este Fals',
        'isEmpty' => 'Este Gol',
        'isNotEmpty' => 'Nu este Gol',
        'contains' => 'Conține',
        'notContains' => 'Nu Conține',
        'has' => 'Conține',
        'notHas' => 'Nu Conține',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => ' Nume (Subiect)',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateSent' => 'Data trimiterii',
      'from' => 'De la',
      'to' => 'Către',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Răspunde la',
      'replyToString' => 'Răspunde la (Șir)',
      'isHtml' => 'În format Html',
      'body' => 'Conținut',
      'bodyPlain' => 'Conținut (Simplu)',
      'subject' => 'Subiect',
      'attachments' => 'Atașamente',
      'selectTemplate' => 'Selectează Șablon',
      'fromEmailAddress' => 'De la adresa',
      'toEmailAddresses' => 'Către adresa',
      'emailAddress' => 'Adresă Email',
      'deliveryDate' => 'Data Livrării',
      'account' => 'COnt',
      'users' => 'Utilizatori',
      'replied' => 'A Răspuns',
      'replies' => 'Răspunsuri',
      'isRead' => 'Este Citit',
      'isNotRead' => 'Nu este citit',
      'isImportant' => 'Este Important',
      'isReplied' => 'A fost răspuns',
      'isNotReplied' => 'Nu a fost răspuns',
      'isUsers' => 'Este al utilizatorului',
      'inTrash' => 'În Coșul de gunoi',
      'sentBy' => 'Trimis de',
      'folder' => 'Dosar',
      'inboundEmails' => 'Grup Conturi',
      'emailAccounts' => 'Conturi Personale',
      'hasAttachment' => 'Are Atașamente',
      'assignedUsers' => 'Utilizatori Alocați',
      'ccEmailAddresses' => 'CC Adresă Email',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Id Mesaj',
      'messageIdInternal' => 'Id Mesaj (Intern)',
      'folderId' => 'Dosar Id',
      'fromName' => 'De la Nume',
      'fromString' => 'De la Șir',
      'isSystem' => 'Este Sistem',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'replied' => 'A Răspuns',
      'replies' => 'Răspunsuri',
      'inboundEmails' => 'Grup Conturi',
      'emailAccounts' => 'Conturi Personale',
      'assignedUsers' => 'Utilizatori Alocați',
      'sentBy' => 'Trimis de',
      'attachments' => 'Atașamente',
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
        'Draft' => 'Schiță',
        'Sending' => 'Se trimite',
        'Sent' => 'Trimis',
        'Archived' => 'Arhivat',
        'Received' => 'Primit',
        'Failed' => 'Eșuat',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Arhivează Email',
      'Archive Email' => 'Arhivează Email',
      'Compose' => 'Compune',
      'Reply' => 'Răspunde',
      'Reply to All' => 'Răspunde la Tot',
      'Forward' => 'Redirecționează',
      'Original message' => 'Mesaj Original',
      'Forwarded message' => 'Redirecționează mesaj',
      'Email Accounts' => 'Conturi Personale Email',
      'Inbound Emails' => 'Grup Conturi Email',
      'Email Templates' => 'Șablon Email',
      'Send Test Email' => 'Trimite Test Email',
      'Send' => 'Trimite',
      'Email Address' => 'Adresă Email',
      'Mark Read' => 'Marchează ca Citit',
      'Sending...' => 'Se trimite...',
      'Save Draft' => 'Salvează Schiță',
      'Mark all as read' => 'Marchează tot ca Citit',
      'Show Plain Text' => 'Afișează Textul Simplu',
      'Mark as Important' => 'Marchează ca Important',
      'Unmark Importance' => 'Anulează marcarea importanței',
      'Move to Trash' => 'Mută în coșul de gunoi',
      'Retrieve from Trash' => 'Recuperează din coșul de gunoi',
      'Move to Folder' => 'Mută în Dosar',
      'Filters' => 'Filtre',
      'Folders' => 'Dosare',
      'Create Lead' => 'Creați Lead',
      'Create Contact' => 'Creați Contact',
      'Add to Contact' => 'Adăugați la Contacte',
      'Add to Lead' => 'Adăugați la Lead',
      'Create Task' => 'Creați Sarcină',
      'Create Case' => 'Creați Caz',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Nici o setare SMTP. {link}.',
      'testEmailSent' => 'Email-ul test a fost trmimis',
      'emailSent' => 'Email-ul a fost trimis',
      'savedAsDraft' => 'Salvat ca schiță',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Trimis',
      'archived' => 'Arhivat',
      'inbox' => 'Căsuța poștală',
      'drafts' => 'Schițe',
      'trash' => 'Coș de gunoi',
      'important' => 'Importă',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Marchează ca Citit',
      'markAsNotRead' => 'Marchează ca necitit',
      'markAsImportant' => 'Marchează ca Important',
      'markAsNotImportant' => 'Anulează marcarea importanței',
      'moveToTrash' => 'Mută în Coșul de gunoi',
      'moveToFolder' => 'Mută în Dosar',
      'retrieveFromTrash' => 'Recuperează din Coșul de gunoi',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Status',
      'host' => 'Gazdă',
      'username' => 'Nume utilizator',
      'password' => 'Parolă',
      'port' => 'Port',
      'monitoredFolders' => 'Dosare monitorizate',
      'ssl' => 'SSL',
      'fetchSince' => 'Ia începând din',
      'emailAddress' => 'Adresă Email',
      'sentFolder' => 'Trimite Dosar',
      'storeSentEmails' => 'Trimite Email-uri Magazin',
      'keepFetchedEmailsUnread' => 'Păstrează Email-urile luate ca necitite',
      'emailFolder' => 'Pune în Dosar',
      'useImap' => 'Ia Email-uri',
      'useSmtp' => 'Folosește SMTP',
      'smtpHost' => 'Gazdă SMTP',
      'smtpPort' => 'Port SMTP',
      'smtpAuth' => 'Autentificare SMTP',
      'smtpSecurity' => 'Securitate SMTP',
      'smtpUsername' => 'Nume Utilizator SMTP',
      'smtpPassword' => 'Parolă SMTP',
    ),
    'links' => 
    array (
      'filters' => 'Filtre',
      'emails' => 'Email-uri',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Creează Cont Email',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Conexiune Test',
      'Send Test Email' => 'Trimite Email Test',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nu s-a putut conecta la server-ul IMAP',
      'connectionIsOk' => 'Conexiunea este Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Dosarele multiple nu ar trebui separate prin virgulă. 

Poți trimite un dosar \'Trmis\' pentru a sincroniza email-urile trimise dintr-un client extern de email-uri.',
      'storeSentEmails' => 'Mesajele trmise o să fie stocate pe serverul IMAP. Câmpul adresei de email trebuie să se potrivească cu adresa de email de unde vor fi trimise email-urile.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primar',
      'Opted Out' => 'Renunțat la',
      'Invalid' => 'Nu este valid',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'De la',
      'to' => 'Către',
      'subject' => 'Subiect',
      'bodyContains' => 'Conținutul Conține',
      'action' => 'Acțiune',
      'isGlobal' => 'Este Global',
      'emailFolder' => 'Dosar',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Creează Filtru Email',
      'Emails' => 'Email-uri',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignoră',
        'Move to Folder' => 'Pune în Dosar',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Dă-i filtrului un nume descriptiv.',
      'subject' => 'Folosește un wildcard *:

text* - începe cu text,
*text* - conține text,
*text - se termină cu text. ',
      'bodyContains' => 'Conținutul email-ului conține unul dintre cuvintele sau frazele specificate.',
      'from' => 'Email-urile trimise de la adresa specificată. Dacă nu este necesar, lasă gol. Poți folosi un wildcard *.',
      'to' => 'Email-urile trimise de la adresa specificată. Dacă nu este necesar, lasă gol. Poți folosi un wildcard *.',
      'isGlobal' => 'Aplică acest filtru la toate email-urile primite în sistem.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Sări peste Notificări',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Creează Dosar',
      'Manage Folders' => 'Gestionează Dosare',
      'Emails' => 'Email-uri',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Status',
      'isHtml' => 'În format Html',
      'body' => 'Conținutul',
      'subject' => 'Subiect',
      'attachments' => 'Atașamente',
      'insertField' => 'Inserează Câmp',
      'oneOff' => 'Pornit-oprit',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Creează Șablon Email',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Variabile disponibile:

{optOutUrl} &#8211; URL un link de dezabonare;

{optOutLink} &#8211; un link de dezabonare. ',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Bifează dacă o să folosești acest șablon doar o dată. Ex. pentru Email-uri în masă.',
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
      'Fields' => 'Câmpuri',
      'Relationships' => 'Relații',
      'Schedule' => 'Program',
      'Log' => 'Jurnal',
      'Formula' => 'Formulă',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'type' => 'Tip',
      'labelSingular' => 'Etichetă Singulară',
      'labelPlural' => 'Etichetă Plurală',
      'stream' => 'Stream',
      'label' => 'Etichetă',
      'linkType' => 'Tipul Link-ului',
      'entityForeign' => 'Entitate Străină',
      'linkForeign' => 'Link Străin',
      'link' => 'Link',
      'labelForeign' => 'Etichetă Străină',
      'sortBy' => 'Ordonare Implicită (câmp)',
      'sortDirection' => 'Ordonare Implicită (direcție)',
      'relationName' => 'Nume tabel mijlociu',
      'linkMultipleField' => 'Link Câmp Multiplu',
      'linkMultipleFieldForeign' => 'Link Străin Câmp Multimplu',
      'disabled' => 'Dezactivat',
      'textFilterFields' => 'Câmpurile de filtrare a textului',
      'audited' => 'Audiate',
      'auditedForeign' => 'Audiate Străin',
      'statusField' => 'Stare Câmp',
      'beforeSaveCustomScript' => 'Înainte de a salva scriptul personalizat',
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
        '' => 'Nici unul',
        'Base' => 'Bază',
        'Person' => 'Persoană',
        'CategoryTree' => 'Arbore Categorie',
        'Event' => 'Eveniment',
        'BasePlus' => 'Bază Plus',
        'Company' => 'Companie',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Multe-către-multe',
        'oneToMany' => 'Una-către-multe',
        'manyToOne' => 'Multe-către-una',
        'parentToChildren' => 'Părinte-către-Copil',
        'childrenToParent' => 'Copil-către-Părinte',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascendent',
        'desc' => 'Descendent',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entitatea a fost creată',
      'linkAlreadyExists' => 'Confict nume link.',
      'linkConflict' => 'Confilct nume: link-ul sau câmpul cu același nume există deja.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Actualizările acestui câmp sunt autentificate în stream.',
      'textFilterFields' => 'Câmpuri folosite de căutarea text.',
      'stream' => 'Dacă entittatea are un Stream.',
      'disabled' => 'Bifează dacă nu ai nevoie de această entitate în sistemul tău.',
      'linkAudited' => 'Se creează înregistrări asemănătoare și se conectează cu înregistrările existente, fiind autentificate în Stream.',
      'linkMultipleField' => 'Câmpurile multiple conectate, oferă o posibilitate ușoară de a edita relatții. Nu folosi dacă ai un număr mare de înregistrări asemănătoare.',
      'entityType' => 'Bază Plus - are Activități, Istoric și pnouri de sarcini.

Event - disponibile în Calendar și panoul de Activități.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Exportă toate câmpurile',
      'fieldList' => 'Listă Câmp',
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
      'name' => 'Nume',
      'version' => 'Versiune',
      'description' => 'Descriere',
      'isInstalled' => 'Instalat',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Dezinstalează',
      'Install' => 'Instalează',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Extenisa {name} a fost dezinstalată',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Conectare',
      'Connected' => 'Conectat',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Logică Dinamică',
      'Name' => 'Nume',
      'Label' => 'Etichetă',
      'Type' => 'Tip',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Nici unul',
        'javascript: return this.dateTime.getNow(1);' => 'Acum',
        'javascript: return this.dateTime.getNow(5);' => 'Acum (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Acum (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Acum (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 oră',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+0 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 zi',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 săptămână',
      ),
      'dateDefault' => 
      array (
        '' => 'Nici unul',
        'javascript: return this.dateTime.getToday();' => 'Astăzi',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 zi',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 săptâmână',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 săptămâni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 săptămâni',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 lună',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 an',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Actualizătile o să fie autentificate în stream',
      'required' => 'Câmpul o să fie obligatoriu. Nu poate fi lăsat necompletat.',
      'default' => 'La creeare, valoarea o să fie setată la valoarea implicită.',
      'min' => 'Valoarea min acceptată.',
      'max' => 'Valoarea max acceptată',
      'seeMoreDisabled' => 'Dacă nu este bifat, textele lungi o să fie scurtate.',
      'lengthOfCut' => 'Cum o să fie textele înainte să fie tăiate',
      'maxLength' => 'Lungimea max acceptată a textului.',
      'before' => 'Valoarea datei ar trebui să fie înaintea valorii datei câmpului specificat.',
      'after' => 'Valoarea datei ar trebui să fie după valorea datei câmpului specificat.',
      'readOnly' => 'Valoare câmpului nu poate fi specificată de utilizator. Dar poate fi calculată cu ajutorul formulei.',
      'maxFileSize' => 'Dacă este necompletat sau 0, atunci nici o limită.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Stradă',
        'city' => 'Oraș',
        'state' => 'Stat',
        'country' => 'Țară',
        'postalCode' => 'Cod Poștal',
        'map' => 'Hartă',
      ),
      'personName' => 
      array (
        'salutation' => 'Salutare',
        'first' => 'First',
        'last' => 'Last',
      ),
      'currency' => 
      array (
        'converted' => '(Convertit)',
        'currency' => '(Currency)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Dată',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Utilizator',
      'Team' => 'Echipă',
      'Role' => 'Rol',
      'EmailTemplate' => 'Șablon Email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Cont Personal de Email',
      'EmailAccountScope' => 'Cont Personal de Email',
      'OutboundEmail' => 'Email ieșire',
      'ScheduledJob' => 'Activități planificate',
      'ExternalAccount' => 'Cont Extern',
      'Extension' => 'Extensie',
      'Dashboard' => 'Tablou de bord',
      'InboundEmail' => 'Cont Grup Email',
      'Stream' => 'Stream',
      'Import' => 'Importă',
      'Template' => 'Șablon',
      'Job' => 'Activitate',
      'EmailFilter' => 'Filtru Email',
      'Portal' => 'Portal',
      'PortalRole' => 'Rol Portal',
      'Attachment' => 'Atașament',
      'EmailFolder' => 'Dosar Email',
      'PortalUser' => 'Utilizator Portal',
      'ScheduledJobLogRecord' => '"Jurnal Înregistrări Activități Planificate',
      'PasswordChangeRequest' => 'Cerere Schimbare Parolă',
      'ActionHistoryRecord' => 'Istoric Înregistrări Acțiune',
      'AuthToken' => 'Token Auth',
      'UniqueId' => 'ID Unic',
      'LastViewed' => 'Ultima Vizualizare',
      'Settings' => 'Setări',
      'FieldManager' => 'Manager Câmp',
      'Integration' => 'Integrare',
      'LayoutManager' => 'Manager Aspect',
      'EntityManager' => 'Manger Entități',
      'Export' => 'Export',
      'DynamicLogic' => 'Logică Dinamică',
      'DashletOptions' => 'Opțiuni Dashlet',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferințe',
      'EmailAddress' => 'Adresă Email',
      'PhoneNumber' => 'Număr Telefon',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Cont',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Țintă',
      'Opportunity' => 'Oportunitate',
      'Meeting' => 'Întâlnire',
      'Calendar' => 'Calendar',
      'Call' => 'Apel',
      'Task' => 'Sarcină',
      'Case' => 'Caz',
      'Document' => 'Document',
      'DocumentFolder' => 'Dosar Document',
      'Campaign' => 'Campanie',
      'TargetList' => 'Listă Țintă',
      'MassEmail' => 'Email în Masă',
      'EmailQueueItem' => 'Email Element de așteptare',
      'CampaignTrackingUrl' => 'Urmărire URL',
      'Activities' => 'Activități',
      'KnowledgeBaseArticle' => 'Atricol Bază de Cunoștințe',
      'KnowledgeBaseCategory' => 'Categorie Bază de Cunoștințe',
      'CampaignLogRecord' => 'Înregistrare Jurnal Campanie',
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
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Email-uri',
      'User' => 'Utilizatori',
      'Team' => 'Echipe',
      'Role' => 'Roluri',
      'EmailTemplate' => 'Șabloane Email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Conturi Personale Email',
      'EmailAccountScope' => 'Conturi Personale Email',
      'OutboundEmail' => 'Email-uri trimise',
      'ScheduledJob' => 'Activități Planificate',
      'ExternalAccount' => 'Conturi Externe',
      'Extension' => 'Extensii',
      'Dashboard' => 'Tablou de bord',
      'InboundEmail' => 'Conturi Grup Email',
      'Stream' => 'Stream',
      'Import' => 'Importă Rezultate',
      'Template' => 'Șabloane',
      'Job' => 'Activități',
      'EmailFilter' => 'Filtre Email',
      'Portal' => 'Portaluri',
      'PortalRole' => 'Roluri Portaluri',
      'Attachment' => 'Atașamente',
      'EmailFolder' => 'Dosare Email',
      'PortalUser' => 'Utilizatori Portal',
      'ScheduledJobLogRecord' => 'Jurnal înregistrări Activități Planificate',
      'PasswordChangeRequest' => 'Cereri Schimbare Parolă',
      'ActionHistoryRecord' => 'Istoric Acțiune',
      'AuthToken' => 'Tokeni Auth',
      'UniqueId' => 'ID-uri Unice',
      'LastViewed' => 'Ultima Vizualizare',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Conturi',
      'Contact' => 'Contacte',
      'Lead' => 'Lead-uri',
      'Target' => 'Ținte',
      'Opportunity' => 'Oportunități',
      'Meeting' => 'Întâlniri',
      'Calendar' => 'Calendar',
      'Call' => 'Apeluri',
      'Task' => 'Sarcini',
      'Case' => 'Cazuri',
      'Document' => 'Documente',
      'DocumentFolder' => 'Dosare Document',
      'Campaign' => 'Campanii',
      'TargetList' => 'Liste Țintă',
      'MassEmail' => 'Email-uri în Masă',
      'EmailQueueItem' => 'Email Element de Așteptare',
      'CampaignTrackingUrl' => 'Urmărire URL-uri',
      'Activities' => 'Activității',
      'KnowledgeBaseArticle' => 'Bază de Cunoștințe',
      'KnowledgeBaseCategory' => 'Categorii Bază de Cunoștințe',
      'CampaignLogRecord' => 'Înregistrări Jurnal Campanie',
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
    ),
    'labels' => 
    array (
      'Misc' => 'Amestecat',
      'Merge' => 'Îmbina',
      'None' => 'Nici unul',
      'Home' => 'Acasă',
      'by' => 'de',
      'Saved' => 'Salvat',
      'Error' => 'Eroare',
      'Select' => 'Selectează',
      'Not valid' => 'Nu este valid',
      'Please wait...' => 'Vă rugăm așteptați...',
      'Please wait' => 'Vă rugăm așteptați',
      'Loading...' => 'Se încarcă...',
      'Uploading...' => 'Se încarcă...',
      'Sending...' => 'Se trimite...',
      'Merging...' => 'Se îmbină...',
      'Merged' => 'Îmbinate',
      'Removed' => 'Șters',
      'Posted' => 'Publicat',
      'Linked' => 'Legat',
      'Unlinked' => 'Nu este legat',
      'Done' => 'Terminat',
      'Access denied' => 'Acces refuzat',
      'Not found' => 'Nu a fost găsit',
      'Access' => 'Acces',
      'Are you sure?' => 'Ești sigur?',
      'Record has been removed' => 'Înregistrarea a fost ștearsă',
      'Wrong username/password' => 'Nume utilizator/parola nu sunt corecte',
      'Post cannot be empty' => 'Articolul nu poate fi gol',
      'Removing...' => 'Se șterge...',
      'Unlinking...' => 'Se deconectează...',
      'Posting...' => 'Se publică...',
      'Username can not be empty!' => 'Numele de utilizator nu poate fi gol!',
      'Cache is not enabled' => 'Cache-ul nu este activat',
      'Cache has been cleared' => 'Cache-ul a fost șters',
      'Rebuild has been done' => 'Reconstruit cu succes',
      'Return to Application' => 'Întoarce-te la aplicație',
      'Saving...' => 'Se salvează...',
      'Modified' => 'Modificat',
      'Created' => 'Creat',
      'Create' => 'Creaza',
      'create' => 'creaza',
      'Overview' => 'Prezentare generală',
      'Details' => 'Detalii',
      'Add Field' => 'Adaugă Câmp',
      'Add Dashlet' => 'Adaugă Dashlet',
      'Filter' => 'Filtru',
      'Edit Dashboard' => 'Editare tablu de bord',
      'Add' => 'Adaugă',
      'Add Item' => 'Adaugă Element',
      'Reset' => 'Resetare',
      'Menu' => 'Meniu',
      'More' => 'Mai mult',
      'Search' => 'Căutare',
      'Only My' => 'Doar eu',
      'Open' => 'Deschide',
      'Admin' => 'Admin',
      'About' => 'Despre',
      'Refresh' => 'Reîmprospătare',
      'Remove' => 'Șterge',
      'Options' => 'Opțiuni',
      'Username' => 'Nume Utilizator',
      'Password' => 'Parolă',
      'Login' => 'Conectare',
      'Log Out' => 'Deconectare',
      'Preferences' => 'Preferințe',
      'State' => 'Stat',
      'Street' => 'Stradă',
      'Country' => 'Țara',
      'City' => 'Oraș',
      'PostalCode' => 'Code Poștal',
      'Followed' => 'Urmărit',
      'Follow' => 'Urmărește',
      'Followers' => 'Urmăritori',
      'Clear Local Cache' => 'Ștergere Cache Local',
      'Actions' => 'Acțiuni',
      'Delete' => 'Șterge',
      'Update' => 'Actualizare',
      'Save' => 'Salvează',
      'Edit' => 'Editare',
      'View' => 'Vizualizare',
      'Cancel' => 'Anulează',
      'Apply' => 'Aplică',
      'Unlink' => 'Nu mai leaga',
      'Mass Update' => 'Actualizează tot',
      'Export' => 'Export',
      'No Data' => 'Nu sunt date',
      'No Access' => 'Acces nepermis',
      'All' => 'Toate',
      'Active' => 'Activ',
      'Inactive' => 'Inactiv',
      'Write your comment here' => 'Scrie comentariul tău aici',
      'Post' => 'Publică',
      'Stream' => 'Stream',
      'Show more' => 'Afișează mai mult',
      'Dashlet Options' => 'Opțiuni Dashlet',
      'Full Form' => 'Formă întreagă',
      'Insert' => 'Inserare',
      'Person' => 'Persoană',
      'First Name' => 'Prenume',
      'Last Name' => 'Nume',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'schimbă',
      'Change' => 'Schimbă',
      'Primary' => 'Primar',
      'Save Filter' => 'Salvează Filtru',
      'Administration' => 'Administrare',
      'Run Import' => 'Rulează Import',
      'Duplicate' => 'Duplicat',
      'Notifications' => 'Notificări',
      'Mark all read' => 'Marchează tot ca citit',
      'See more' => 'Vezi mai Mult',
      'Today' => 'Astăzi',
      'Tomorrow' => 'Mâine',
      'Yesterday' => 'Ieri',
      'Submit' => 'Trimite',
      'Close' => 'Închide',
      'Yes' => 'Da',
      'No' => 'Nu',
      'Select All Results' => 'Selectează toate rezultatele',
      'Value' => 'Valoare',
      'Current version' => 'Verisune actuală',
      'List View' => 'Vizualizare listă',
      'Tree View' => 'Vizualizare Arbore',
      'Unlink All' => 'Dezleagă tot',
      'Total' => 'Total',
      'Print to PDF' => 'Imprimă către PDF',
      'Default' => 'Implicit',
      'Number' => 'Număr',
      'From' => 'De la',
      'To' => 'Către',
      'Create Post' => 'Creează Articol',
      'Previous Entry' => 'Intrarea Precedentă',
      'Next Entry' => 'Următoarea Intrare',
      'View List' => 'Vizualizare Listă',
      'Attach File' => 'Fișier Atașat',
      'Skip' => 'Sări',
      'Attribute' => 'Atribut',
      'Function' => 'Funcție',
      'Self-Assign' => 'Auto-atribuire',
      'Self-Assigned' => 'Auto=Atribuit',
      'Expand' => 'Expandează',
      'Collapse' => 'Minimizează',
      'New notifications' => 'Notificare Nouă',
      'Manage Categories' => 'Gestionează Categorii',
      'Manage Folders' => 'Gestionează Dosare',
      'Convert to' => 'Convert to',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Erase',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => 'Creare Email Intrare',
      'Activities' => 'Activități',
      'History' => 'Istoric',
      'Attendees' => 'Participanți',
      'Schedule Meeting' => 'Planifică Întâlnire',
      'Schedule Call' => 'Planifică Apel',
      'Compose Email' => 'Compune Email',
      'Log Meeting' => 'Jurnal Intalnire',
      'Log Call' => 'Jurnal Apel',
      'Archive Email' => 'Arhivează Email',
      'Create Task' => 'Crează Sarcină',
      'Tasks' => 'Activități',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Vă rugăm așteptați...',
      'posting' => 'Se publică...',
      'loading' => 'Se încarcă...',
      'saving' => 'Se salvează...',
      'confirmLeaveOutMessage' => 'Ești sigur că vrei să părăsești formularul?',
      'notModified' => 'Nu ai modificat înregistrarea',
      'duplicate' => 'Înregistrarea pe care o creezi pare să fie duplicat',
      'dropToAttach' => 'Trage pentru a atașa',
      'fieldIsRequired' => '{field} este obligatoriu',
      'fieldShouldBeEmail' => '{field} trebuie să fie o adresă de email validă',
      'fieldShouldBeFloat' => '{field} trebuie să fie float valid',
      'fieldShouldBeInt' => '{field} trebuie sa fie întreg valid',
      'fieldShouldBeDate' => '{field} trebuie sa fie dată validă',
      'fieldShouldBeDatetime' => '{field} trebuie să fie data/timp valid',
      'fieldShouldAfter' => '{field} trebuie sa fie după {otherField}',
      'fieldShouldBefore' => '{field} trebuie sa fie înainte de {otherField}',
      'fieldShouldBeBetween' => '{field} trebuie sa fie între {min} și  {max}',
      'fieldShouldBeLess' => '{field} trebuie sa fie mai puțin de {value}',
      'fieldShouldBeGreater' => '{field} trebuie sa fie mai mare de {value}',
      'fieldBadPasswordConfirm' => '{field} confirmat în mod necorespunzator',
      'fieldMaxFileSizeError' => 'Fișierul nu ar trebui să depășească {max} Mb',
      'fieldIsUploading' => 'Se încarcă',
      'resetPreferencesDone' => 'Preferințele au fost resetate la valori implicite',
      'confirmation' => 'Ești sigur?',
      'unlinkAllConfirmation' => 'Ești sigur că vrei să dezlegi toate înregistrările asemănătoare?',
      'resetPreferencesConfirmation' => 'Eșt sigur că vrei să resetezi preferințele la valori implicite?',
      'removeRecordConfirmation' => 'Eșt sigur că vrei să înlături înregistrarea?',
      'unlinkRecordConfirmation' => 'Eșt sigur că vrei să dezlegi înregistrarea asemănătoare?',
      'removeSelectedRecordsConfirmation' => 'Eșt sigur că vrei să înlături înregistrările selectate?',
      'massUpdateResult' => '{count} înregistrările au fost actualizate',
      'massUpdateResultSingle' => '{count} înregistrarea a fost actualizată',
      'noRecordsUpdated' => 'Nu a fost actualizat nici o înregistrare',
      'massRemoveResult' => '{count} înregistrări au fost șterse',
      'massRemoveResultSingle' => '{count} înregistrare a fost ștearsă',
      'noRecordsRemoved' => 'Înregistrările nu au fost șterse',
      'clickToRefresh' => 'Apasă pentru reîmprospătare',
      'streamPostInfo' => 'Tastează <strong>@username</strong> pentru a menționa utilizatorii în articol. 

Available markdown syntax:
`<code>code</code>`
```<code>multiline code</code>```
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~~<del>deleted text</del>~~
> blockquote
[link text](url)',
      'writeYourCommentHere' => 'Scrie comentariul tău aici',
      'writeMessageToUser' => 'Scrie un mesaj către{user}',
      'writeMessageToSelf' => 'Scrie un mesaj pe stream',
      'typeAndPressEnter' => 'Tastează & apasă enter',
      'checkForNewNotifications' => 'Verifică pentru noi notificări',
      'checkForNewNotes' => 'Verifică pentru actualizări stream',
      'internalPost' => 'Articolul va fi vizulaizat doar de utilizatori interni',
      'internalPostTitle' => 'Articolul este vizualizat de utilizatori interni',
      'done' => 'Terminat',
      'confirmMassFollow' => 'Ești sigur că vrei să urmărești înregistrările selectate?',
      'confirmMassUnfollow' => 'Ești sigur că nu mai vrei să urmărești înregistrările selectate?',
      'massFollowResult' => '{count} înregistrările sunt urmărite',
      'massUnfollowResult' => '{count} înregistările nu mai sunt urmărite',
      'massFollowResultSingle' => '{count} înregistrarea este urmărită',
      'massUnfollowResultSingle' => '{count} înregistrarea nu mai este urmărită',
      'massFollowZeroResult' => 'Nimic nu a fost urmărit',
      'massUnfollowZeroResult' => 'Nimic nu a mai fost neurmărit',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Doar eu',
      'followed' => 'Urmărit',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Urmărit',
      'all' => 'Tot',
    ),
    'massActions' => 
    array (
      'remove' => 'Șterge',
      'merge' => 'Îmbină',
      'massUpdate' => 'Actualizează tot',
      'export' => 'Exportă',
      'follow' => 'Urmărește',
      'unfollow' => 'Nu mai urmări',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'firstName' => 'Prenume',
      'lastName' => 'Nume',
      'salutationName' => 'Salutare',
      'assignedUser' => 'Utilizator alocat',
      'assignedUsers' => 'Utilizatori alocați',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Nume utilizator alocat',
      'teams' => 'Echipe',
      'createdAt' => 'creat la',
      'modifiedAt' => 'Modificat la',
      'createdBy' => 'creat de',
      'modifiedBy' => 'Modificat de',
      'description' => 'Descriere',
      'address' => 'Adresă',
      'phoneNumber' => 'Phone',
      'phoneNumberMobile' => 'Telefon (Mobil)',
      'phoneNumberHome' => 'Telefon (Acasă)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Birou)',
      'phoneNumberOther' => 'Telefon (Altul)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Ordonează',
      'parent' => 'Părinte',
      'children' => 'Copil',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Oraș',
      'billingAddressCountry' => 'Țara',
      'billingAddressPostalCode' => 'Cod Poștal',
      'billingAddressState' => 'Stat',
      'billingAddressStreet' => 'Strada',
      'billingAddressMap' => 'Hartă',
      'addressCity' => 'Oraș',
      'addressStreet' => 'Strada',
      'addressCountry' => 'Țara',
      'addressState' => 'Stat',
      'addressPostalCode' => 'Cod Poștal',
      'addressMap' => 'Hartă',
      'shippingAddressCity' => 'Oraș (Livrare)',
      'shippingAddressStreet' => 'Stradă (Livrare)',
      'shippingAddressCountry' => 'Țară (Livrare)',
      'shippingAddressState' => 'Stat (Livrare)',
      'shippingAddressPostalCode' => 'Cod Poștal (Livrare)',
      'shippingAddressMap' => 'Hartă (Livrare)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Utilizator alocat',
      'createdBy' => 'creat de',
      'modifiedBy' => 'Modificat de',
      'team' => 'Echipă',
      'roles' => 'Roluri',
      'teams' => 'Echipe',
      'users' => 'Utilizatori',
      'parent' => 'Părinte',
      'children' => 'Copil',
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunități',
      'leads' => 'Lead-uri',
      'meetings' => 'Întâlniri',
      'calls' => 'Apeluri',
      'tasks' => 'Sarcini',
      'emails' => 'Email-uri',
      'accounts' => 'Conturi',
      'cases' => 'Cazuri',
      'documents' => 'Documente',
      'account' => 'Cont',
      'opportunity' => 'Oportunitate',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Emails' => 'Căsuța mea poștală',
      'Records' => 'Listă Înregistrare',
      'Leads' => 'Lead-urile mele',
      'Opportunities' => 'Oportunitățile mele',
      'Tasks' => 'Sarcinile mele',
      'Cases' => 'Cazurile mele',
      'Calendar' => 'Calendar',
      'Calls' => 'Apelurile mele',
      'Meetings' => 'Întâlnirile mele',
      'OpportunitiesByStage' => 'Oportunități în funcție de stadiu',
      'OpportunitiesByLeadSource' => 'Oportunități în funcție de Sursa Lead-ului',
      'SalesByMonth' => 'Vânzări pe luna',
      'SalesPipeline' => 'Linie de Vanzari',
      'Activities' => 'Activitățiile mele',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} a fost alocată ție',
      'emailReceived' => 'Email trimis de la {from}',
      'entityRemoved' => '{user} șters {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} publicat la {entityType} {entity}',
      'attach' => '{user} atașat la {entityType} {entity}',
      'status' => '{user} actualizat {field} pe {entityType} {entity}',
      'update' => '{user} actualizat {entityType} {entity}',
      'postTargetTeam' => '{user} publicat către echipă {target}',
      'postTargetTeams' => '{user} publicat către echipe {target}',
      'postTargetPortal' => '{user} publicat către portal {target}',
      'postTargetPortals' => '{user} publicat către portaluri {target}',
      'postTarget' => '{user} publicat către {target}',
      'postTargetYou' => '{user} publicat către tine',
      'postTargetYouAndOthers' => '{user} publicat către {target} și tine',
      'postTargetAll' => '{user} publicat la toți',
      'postTargetSelf' => '{user} auto-publicat',
      'postTargetSelfAndOthers' => '{user} publicat la {target} și la el însuși',
      'mentionInPost' => '{user} menționat {mentioned} în {entityType} {entity}',
      'mentionYouInPost' => '{user} menționat în {entityType} {entity}',
      'mentionInPostTarget' => '{user} menționat {mentioned} în articol',
      'mentionYouInPostTarget' => '{user} te-a menționat în articolul, lui {target}',
      'mentionYouInPostTargetAll' => '{user} te-a menționat în articolul, tuturor',
      'mentionYouInPostTargetNoTarget' => '{user} te-a menționat în articol',
      'create' => '{user} a creat {entityType} {entity}',
      'createThis' => '{user} a creaat acest {entityType}',
      'createAssignedThis' => '{user} a creat acest {entityType} alocat lui {assignee}',
      'createAssigned' => '{user} a creat {entityType} {entity} și alocat lui {assignee}',
      'createAssignedYou' => '{user} a creat {entityType} {entity} alocată ție',
      'createAssignedThisSelf' => '{user} a creat {entityType} auto-alocată',
      'createAssignedSelf' => '{user} a creat {entityType} {entity} auto-alocată',
      'assign' => '{user} a alocat {entityType} {entity} lui {assignee}',
      'assignThis' => '{user} a alocat acest {entityType} lui {assignee}',
      'assignYou' => '{user} a alocat {entityType} {entity} ție',
      'assignThisVoid' => '{user} a oprit alocarea {entityType}',
      'assignVoid' => '{user} a oprit alocarea {entityType} {entity}',
      'assignThisSelf' => '{user} a auto-alocat {entityType}',
      'assignSelf' => '{user} a auto-alocat {entityType} {entity}',
      'postThis' => '{user} publicat',
      'attachThis' => '{user} atașat',
      'statusThis' => '{user} a actualizat {field}',
      'updateThis' => '{user} a actualizat acest {entityType}',
      'createRelatedThis' => '{user} a creat {relatedEntityType} {relatedEntity} asemănătoare cu {entityType}',
      'createRelated' => '{user} a creat {relatedEntityType} {relatedEntity} asemănătoare cu {entityType} {entity}',
      'relate' => '{user} a legat {relatedEntityType} {relatedEntity} cu {entityType} {entity}',
      'relateThis' => '{user} a legat {relatedEntityType} {relatedEntity} cu {entityType',
      'emailReceivedFromThis' => 'Email primit de la {from}',
      'emailReceivedInitialFromThis' => 'Email primit de la {from}, a creat {entityType}',
      'emailReceivedThis' => 'Email primit',
      'emailReceivedInitialThis' => 'Email primit, a creat această {entityType}',
      'emailReceivedFrom' => 'Email primit de la {from}, asemănător cu {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email primit de la {from}, creat {entityType} {entity}',
      'emailReceived' => 'Email a fost primit pentru {entityType} {entity}',
      'emailReceivedInitial' => 'Email primt: creat {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Email primit de la {from}, creat {entityType} {entity}',
      'emailSent' => '{by} a trimis emailul asemănător {entityType} {entity}',
      'emailSentThis' => '{by} a trimis email',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} a publica la {target} și lui',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} posted to {target} și ei',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Ianuarie',
        1 => 'Februarie',
        2 => 'Martie',
        3 => 'Aprilie',
        4 => 'Mai',
        5 => 'Iunie',
        6 => 'Iulie',
        7 => 'August',
        8 => 'Septembrie',
        9 => 'Octombrie',
        10 => 'Noiembrie',
        11 => 'Decembrie',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Ian',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Iun',
        6 => 'Iul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Duminică',
        1 => 'Luni',
        2 => 'Marți',
        3 => 'Miercuri',
        4 => 'Joi',
        5 => 'Vineri',
        6 => 'sâmbăta',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dum',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mie',
        4 => 'Joi',
        5 => 'Vin',
        6 => 'Sâm',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Du',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Mi',
        4 => 'Jo',
        5 => 'Vi',
        6 => 'Sâ',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => 'z',
      'h' => 'o',
      'm' => 'm',
      's' => 's',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Dl.',
        'Mrs.' => 'D-na.',
        'Ms.' => 'D-șoara',
        'Dr.' => 'Dl.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Africană',
        'az_AZ' => 'Azerbaijană',
        'be_BY' => 'Belarusă',
        'bg_BG' => 'Bulgară',
        'bn_IN' => 'Bengaleză',
        'bs_BA' => 'Bosniacă',
        'ca_ES' => 'Catalană',
        'cs_CZ' => 'Cehă',
        'cy_GB' => 'Galeză',
        'da_DK' => 'Daneză',
        'de_DE' => 'Germană',
        'el_GR' => 'Greacă',
        'en_GB' => 'Engleză (UK)',
        'es_MX' => 'Spaniolă (Mexic)',
        'en_US' => 'Engleză (US)',
        'es_ES' => 'Spaniolă (Spania)',
        'et_EE' => 'Estoniană',
        'eu_ES' => 'Bască',
        'fa_IR' => 'Persană',
        'fi_FI' => 'Finlandeză',
        'fo_FO' => 'Feroeză',
        'fr_CA' => 'Franceză (Canada)',
        'fr_FR' => 'Franceză (Franța)',
        'ga_IE' => 'Irlandeză',
        'gl_ES' => 'Galiciană',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Ebraică',
        'hi_IN' => 'Hindusă',
        'hr_HR' => 'Croată',
        'hu_HU' => 'Maghiară',
        'hy_AM' => 'Armeană',
        'id_ID' => 'Indoneziană',
        'is_IS' => 'Islandeză',
        'it_IT' => 'Italiană',
        'ja_JP' => 'Japoneză',
        'ka_GE' => 'Georgiană',
        'km_KH' => 'Khmeră',
        'ko_KR' => 'Coreană',
        'ku_TR' => 'Curdă',
        'lt_LT' => 'Lituaniană',
        'lv_LV' => 'Letonă',
        'mk_MK' => 'Macedoneană',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malai',
        'nb_NO' => 'Norvegiană Bokmål',
        'nn_NO' => 'Norvegiană Nynorsk',
        'ne_NP' => 'Nepaleză',
        'nl_NL' => 'Olandeză',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Poloneză',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugheză (Brazilia)',
        'pt_PT' => 'Portugheză (Portugalia)',
        'ro_RO' => 'Română',
        'ru_RU' => 'Rusă',
        'sk_SK' => 'Slovacă',
        'sl_SI' => 'Slovenă',
        'sq_AL' => 'Albaneză',
        'sr_RS' => 'Sârbă',
        'sv_SE' => 'Suedeză',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamilă',
        'te_IN' => 'Telugu',
        'th_TH' => 'Tailandeză',
        'tl_PH' => 'Tagalogă',
        'tr_TR' => 'Turcă',
        'uk_UA' => 'Ucraineană',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnameză',
        'zh_CN' => 'Chineză Simplificată (China)',
        'zh_HK' => 'Chineză Tradițională (Honk Kong)',
        'zh_TW' => 'Chineză Tradițională (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Pornit',
        'notOn' => 'Oprit',
        'after' => 'După',
        'before' => 'Înainte',
        'between' => 'Între',
        'today' => 'Astăzi',
        'past' => 'În trecut',
        'future' => 'În viitor',
        'currentMonth' => 'Luna curentă',
        'lastMonth' => 'Luna trecută',
        'nextMonth' => 'Luna viitoare',
        'currentQuarter' => 'Trimestru actual',
        'lastQuarter' => 'Trimestrul trecut',
        'currentYear' => 'Anul curent',
        'lastYear' => 'Anul trecut',
        'lastSevenDays' => 'În ultimele 7 zile',
        'lastXDays' => 'Ultimele X zile',
        'nextXDays' => 'Următoarele X zile',
        'ever' => 'Vreodată',
        'isEmpty' => 'Este gol',
        'olderThanXDays' => 'Mai vechi decât X zile',
        'afterXDays' => 'După X zile',
      ),
      'searchRanges' => 
      array (
        'is' => 'Este',
        'isEmpty' => 'Este gol',
        'isNotEmpty' => 'Nu este gol',
        'isOneOf' => 'Oricare dintre',
        'isFromTeams' => 'Face parte din echipa',
        'isNot' => 'Nu este',
        'isNotOneOf' => 'Nici unul dintre',
        'anyOf' => 'Oricare dintre',
        'noneOf' => 'Nici unul dintre',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Egal',
        'like' => 'Este ca (%)',
        'notLike' => 'Nu este ca (%)',
        'startsWith' => 'Începe cu',
        'endsWith' => 'Se termină cu',
        'contains' => 'Conține',
        'notContains' => 'Nu Conține',
        'isEmpty' => 'Este gol',
        'isNotEmpty' => 'Nu este gol',
        'notEquals' => 'Nu este egal',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Egal',
        'notEquals' => 'Nu este egal',
        'greaterThan' => 'Mai mare decât',
        'lessThan' => 'Mai mic decât',
        'greaterThanOrEquals' => 'Mai mare sau egal',
        'lessThanOrEquals' => 'Mai mic sau egal',
        'between' => 'Între',
        'isEmpty' => 'Este gol',
        'isNotEmpty' => 'Nu este gol',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nici unul',
        '0.5' => '30 secunde',
        1 => '1 minut',
        2 => '2 minute',
        5 => '5 minute',
        10 => '10 minute',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobil',
        'Office' => 'Birou',
        'Fax' => 'Fax',
        'Home' => 'Acasă',
        'Other' => 'Altele',
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
        'NOTICE' => 'Puteți găsi traducerea aici: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Bold',
          'italic' => 'Italic',
          'underline' => 'Subliniat',
          'strike' => 'Tăiat',
          'clear' => 'Șterge stil font',
          'height' => 'Înălțime linie',
          'name' => 'Familie Font',
          'size' => 'Mărime Font',
        ),
        'image' => 
        array (
          'image' => 'Imagine',
          'insert' => 'Inserare Imagine',
          'resizeFull' => 'Redimensionare completă',
          'resizeHalf' => 'Redimensionare la jumatate',
          'resizeQuarter' => 'Redimensionare la sfert',
          'floatLeft' => 'Plutire la stânga',
          'floatRight' => 'Plutire la dreapta',
          'floatNone' => 'Fără plutire',
          'dragImageHere' => 'Trage o imaginea aici',
          'selectFromFiles' => 'Selectează din fișiere',
          'url' => 'URL Imagine',
          'remove' => 'Ștergere imagine',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Inserare Link',
          'unlink' => 'Dezleagă',
          'edit' => 'Editare',
          'textToDisplay' => 'Text de afișat',
          'url' => 'Către ce URL să ducă acest link?',
          'openInNewWindow' => 'Deschidere în fereastră noua',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Link Video',
          'insert' => 'Inserare Video',
          'url' => 'URL Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, sau DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabel',
        ),
        'hr' => 
        array (
          'insert' => 'Inserare Linie Orizontală',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Ofertă',
          'pre' => 'Cod',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Listă neordonată',
          'ordered' => 'Listă ordonată',
        ),
        'options' => 
        array (
          'help' => 'Ajutor',
          'fullscreen' => 'Pe tot ecranul',
          'codeview' => 'Vizualizare cod',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Neindentat',
          'indent' => 'Indentat',
          'left' => 'Aliniere stânga',
          'center' => 'Aliniere centru',
          'right' => 'Aliniere dreapta',
          'justify' => 'Justify complet',
        ),
        'color' => 
        array (
          'recent' => 'Culoarea recentă',
          'more' => 'Mai multe culori',
          'background' => 'Culoare fundal',
          'foreground' => 'Culoare font',
          'transparent' => 'Transparent',
          'setTransparent' => 'Setare transparență',
          'reset' => 'Resetare',
          'resetToDefault' => 'Resetare la implicit',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Scurtături tastatură',
          'close' => 'Închide',
          'textFormatting' => 'Formatare Text',
          'action' => 'Acțiune',
          'paragraphFormatting' => 'Formatare Paragraf',
          'documentStyle' => 'Stil Document',
        ),
        'history' => 
        array (
          'undo' => 'Anulează',
          'redo' => 'Reface',
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
      'Espo' => 'Classic Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Classic Sakura',
      'EspoVertical' => 'Vertical Espo',
      'SakuraVertical' => 'Vertical Sakura',
      'Violet' => 'Classic Violet',
      'VioletVertical' => 'Vertical Violet',
      'Hazyblue' => 'Azur',
      'HazyblueVertical' => 'Azur w/ sidebar ',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Revenire la importare',
      'Run Import' => 'Rulează Importarea',
      'Back' => 'Înapoi',
      'Field Mapping' => 'Câmp mapare',
      'Default Values' => 'Valori implicite',
      'Add Field' => 'Adăugare Câmp',
      'Created' => 'Creat',
      'Updated' => 'Actualizat',
      'Result' => 'Rezultat',
      'Show records' => 'Arată înregistrările',
      'Remove Duplicates' => 'Elimină duplicatele',
      'importedCount' => 'Importat (numără)',
      'duplicateCount' => 'Duplicate (numără)',
      'updatedCount' => 'Actualizat (numără)',
      'Create Only' => 'Doar crearea',
      'Create and Update' => 'Creare % Actualizare',
      'Update Only' => 'Doar actualizare',
      'Update by' => 'Actualizat de',
      'Set as Not Duplicate' => 'Setat ca Nu Duplicat',
      'File (CSV)' => 'Fișier (CSV)',
      'First Row Value' => 'Prima Valoare Rând',
      'Skip' => 'Sări',
      'Header Row Value' => 'Valoarea Header Rând',
      'Field' => 'Câmp',
      'What to Import?' => 'Ce să se importe?',
      'Entity Type' => 'Tip Entitate',
      'What to do?' => 'Ce să se întâmple?',
      'Properties' => 'Proprietăți',
      'Header Row' => 'Rând Header',
      'Person Name Format' => 'Format Nume Persoană',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Delimitator Câmp',
      'Date Format' => 'Format Dată',
      'Decimal Mark' => 'Marcaj zecimal',
      'Text Qualifier' => 'Textul calificare',
      'Time Format' => 'Format timp',
      'Currency' => 'Valută',
      'Preview' => 'Previzualizare',
      'Next' => 'Următorul',
      'Step 1' => 'Pasul 1',
      'Step 2' => 'Pasul 2',
      'Double Quote' => 'Ofertă dublă',
      'Single Quote' => 'Ofertă unică',
      'Imported' => 'Importat',
      'Duplicates' => 'Duplicate',
      'Skip searching for duplicates' => 'Sări peste căutarea duplicatelor',
      'Timezone' => 'Fus orar',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Ar trebui să fie codificat UTF-8',
      'duplicatesRemoved' => 'Duplicatele au fost înlăturate',
      'inIdle' => 'Executați în modul inactiv (pentru date mari; via crom)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' => 
    array (
      'file' => 'Fișier',
      'entityType' => 'Tip Entitate',
      'imported' => 'Înregistrări Importate',
      'duplicates' => 'Înregistrări duplicate',
      'updated' => 'Înregistrări actualizate',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Nu s-a reușit',
        'In Process' => 'În Proces',
        'Complete' => 'Terminat',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Adresă Email',
      'team' => 'Echipa',
      'status' => 'Status',
      'assignToUser' => 'Atribuie utilizatorului',
      'host' => 'Gazda',
      'username' => 'Nume Utilizator',
      'password' => 'Parola',
      'port' => 'Port',
      'monitoredFolders' => 'Directoare Monitorizate',
      'trashFolder' => 'Gunoi',
      'ssl' => 'SSL',
      'createCase' => 'Creare Caz',
      'reply' => 'Raspunde',
      'caseDistribution' => 'Distribuire Caz',
      'replyEmailTemplate' => 'Template Raspuns Email ',
      'replyFromAddress' => 'Raspunde cu Adresa',
      'replyToAddress' => 'Răspunde la Adresa',
      'replyFromName' => 'Raspunde cu Numele',
      'targetUserPosition' => 'Poziția Țintă a Utiliztorului',
      'fetchSince' => 'Fetch începând cu',
      'addAllTeamUsers' => 'Pentru toți utilizatorii echipei',
      'teams' => 'Echipe',
      'sentFolder' => 'Trimite dosar',
      'storeSentEmails' => 'Stochează Email-uri trimisw',
      'useImap' => 'Fetch email-uri',
      'useSmtp' => 'Folosește SMTP',
      'smtpHost' => 'Gazdă SMTP',
      'smtpPort' => 'Port SMTP',
      'smtpAuth' => 'Autentificare SMTP',
      'smtpSecurity' => 'SEcuritate SMTP',
      'smtpUsername' => 'Nume utilizator SMTP',
      'smtpPassword' => 'Parolă SMTP',
      'fromName' => 'De la Nume',
      'smtpIsShared' => 'SMTP este partajat',
      'smtpIsForMassEmail' => 'SMTP este din Email-uri în Masă',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notificați expeditorii că email-urile lor au fost primite.

 Doar un email va fi trimis unui anumit destinatar într-o anumită perioadă de timp pentru a preveni looping.',
      'createCase' => 'Creați cazul automat din email-urile primite',
      'replyToAddress' => 'Specificați adresa de email a acestei căsuțe poștale pentru a redirecționa răspunsurile aici.',
      'caseDistribution' => 'Cum o să fie atribuite cazurile. Atribuite direct utilizatorului sau în rândul echipei.',
      'assignToUser' => 'Cazurile utilizatorului o să fie atribuite.',
      'team' => 'Cazurile echipei o să fie atribuite.',
      'teams' => 'Email-urile echipei o să fie atribuite.',
      'targetUserPosition' => 'Utilizatoriilor cu poziția specificată o să le fie distribuite cazurile.',
      'addAllTeamUsers' => 'Email-urile o să apară în căsuța poștală a tuturor utilizatorilor din echipele specificate.',
      'monitoredFolders' => 'Dosarele multiple ar trebui separate prin virgulă',
      'smtpIsShared' => 'Dacă este bifat, utiliatorii o să poată trimite email-uri folosind SMTP. Disponibilitatea este controlată de Roluri prin intermediul permisiunilor din Grupul Contului Email.',
      'smtpIsForMassEmail' => 'Dacă este bifat, SMTP o să fie disponibil pentru Email în Masă.',
      'storeSentEmails' => 'Email-urile trimise o să fie stocate pe server-ul IMAP',
    ),
    'links' => 
    array (
      'filters' => 'Filtre',
      'emails' => 'Email-uri',
      'assignToUser' => 'Atribuit Utilizatorului',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
      ),
      'caseDistribution' => 
      array (
        '' => 'Nici unul',
        'Direct-Assignment' => 'Atribuire directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Cel putin, Ocupat',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Creare Email intrare',
      'IMAP' => 'IMAP',
      'Actions' => 'Actiuni',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could neconectat la server-ul IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Activat',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirecționare URI',
      'apiKey' => 'Cheie API',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Selectați o integrare din meniu',
      'noIntegrations' => 'Nu este disponibilă nici o integrare',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtain OAuth 2.0 credentials from the Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.</p>',
      'GoogleMaps' => '<p>Obține cheia API <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Execută la',
      'attempts' => 'Încercări rămase',
      'failedAttempts' => 'Încercări nereușite',
      'serviceName' => 'Serviciu',
      'method' => 'Metodă (depreciată)',
      'methodName' => 'Metodă',
      'scheduledJob' => 'Activitate Planificată',
      'scheduledJobJob' => 'Nume Activitate Planificată',
      'data' => 'Date',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'În așteptare',
        'Success' => 'Succes',
        'Running' => 'Rulează',
        'Failed' => 'Eșuat',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Lăţime (%)',
      'link' => 'Link',
      'notSortable' => 'Nu se poate sorta',
      'align' => 'Aliniere',
      'panelName' => 'Nume Panou',
      'style' => 'Stil',
      'sticked' => 'Lipit',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Stânga',
        'right' => 'Dreapta',
      ),
      'style' => 
      array (
        'default' => 'Implicit',
        'success' => 'Succes',
        'danger' => 'Pericol',
        'info' => 'Info',
        'warning' => 'Avertisment',
        'primary' => 'Primar',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Panou nou',
      'Layout' => 'Aspect',
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
      'post' => 'Publică',
      'attachments' => 'Atașamente',
      'targetType' => 'Țintă',
      'teams' => 'Echipe',
      'users' => 'Utilizatori',
      'portals' => 'Portale',
      'type' => 'Tip',
      'isGlobal' => 'Este Global',
      'isInternal' => 'Este Intern (nu pentru utilizatori interni)',
      'related' => 'Legat',
      'createdByGender' => 'Creat de genul',
      'data' => 'Date',
      'number' => 'Număr',
    ),
    'filters' => 
    array (
      'all' => 'Tot',
      'posts' => 'Postări',
      'updates' => 'Actualizări',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'către mine',
        'users' => 'către utilizatori anume',
        'teams' => 'către echipe anume',
        'all' => 'către toți utilizatorii interni',
        'portals' => 'către utilizatorii portalului',
      ),
      'type' => 
      array (
        'Post' => 'Postare',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Scrieți mesajul aici',
    ),
    'links' => 
    array (
      'superParent' => 'Super Părinte',
      'related' => 'Legat',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roluri',
      'isActive' => 'Este Activ',
      'isDefault' => 'Este Implicit',
      'tabList' => 'Listă filă',
      'quickCreateList' => 'Crează listă rapidă',
      'companyLogo' => 'Logo',
      'theme' => 'Temă',
      'language' => 'Limbă',
      'dashboardLayout' => 'Aspect bord',
      'dateFormat' => 'Format dată',
      'timeFormat' => 'Format oră',
      'timeZone' => 'Fus orar',
      'weekStart' => 'Prima zi a săptămânii',
      'defaultCurrency' => 'Valută implicită',
      'customUrl' => 'URL particularizat',
      'customId' => 'ID particularizat',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
      'portalRoles' => 'Roluri',
      'notes' => 'Note',
      'articles' => 'Articole Bază de Cunoștință',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Rolurile specificate ale portalului o să fie aplicate la toți utilizatorii portalului.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Crați portal',
      'User Interface' => 'Interfață utilizator',
      'General' => 'General',
      'Settings' => 'Setări',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Permisiune de exportare',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Definiți dacă utilizatorii portalului au abilitatea să exporte înregistrările.',
    ),
    'labels' => 
    array (
      'Access' => 'Acces',
      'Create PortalRole' => 'Creați Rolul Portalului',
      'Scope Level' => 'Nivel Domeniu',
      'Field Level' => 'Nivel câmp',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Creați Utilizator Portal',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format Dată',
      'timeFormat' => 'Format oră',
      'timeZone' => 'Fus orar',
      'weekStart' => 'Prima zi a săptămânii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Marcaj zecimal',
      'defaultCurrency' => 'Valută implicită',
      'currencyList' => 'Listă valute',
      'language' => 'Limbă',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parolă',
      'smtpEmailAddress' => 'Adresă Email',
      'exportDelimiter' => 'Delimitator Exportare',
      'receiveAssignmentEmailNotifications' => 'Notificări email pentru sarcină',
      'receiveMentionEmailNotifications' => 'Notificări email despre mențiuni în postări',
      'receiveStreamEmailNotifications' => 'Notificări email despre postări și actualizare statusului',
      'autoFollowEntityTypeList' => 'Auto-urmărire globală',
      'signature' => 'Semnătură Email',
      'dashboardTabList' => 'Listă filă',
      'defaultReminders' => 'Default Reminders',
      'theme' => 'Temă',
      'useCustomTabList' => 'Listă Personalizată Personalizată',
      'tabList' => 'Listă filă',
      'emailReplyToAllByDefault' => 'Răspunde cu un email la tot, în mod implicit',
      'dashboardLayout' => 'Aspect bord',
      'emailReplyForceHtml' => 'Răspunde la email în HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'După publicare în Stream, auto-urmărește înregistrarea',
      'followCreatedEntities' => 'Auto-urmărire înregistrări create',
      'followCreatedEntityTypeList' => 'Auto-urmărire înregistrări create sau anumite tipuri de entitate',
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
        0 => 'Duminică',
        1 => 'Luni',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notificări',
      'User Interface' => 'Interfață utilizator',
      'SMTP' => 'SMTP',
      'Misc' => 'Amestecat',
      'Locale' => 'Local',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatically follow ALL new records (created by any user) of the selected entity types. To be able to see information in the stream and receive notifications about all records in the system.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'roles' => 'Roluri',
      'assignmentPermission' => 'Permisiuni Sarcină',
      'userPermission' => 'Permisiuni Utilizator',
      'portalPermission' => 'Permisiuni Portal',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
      'teams' => 'Echipe',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Allows to restrict an ability to assign records and post messages to other users.

all - no restriction

team - can assign and post only to teammates

no - can assign and post only to self',
      'userPermission' => 'Allows to restrict an ability for users to view activities, calendar and stream of other users.

all - can view all

team - can view activities of teammates only

no - can\'t view',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Acces',
      'Create Role' => 'Creare Rol',
      'Scope Level' => 'Nivel Domeniu',
      'Field Level' => 'Nivel Câmp',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nu a fost setat',
        'enabled' => 'activat',
        'disabled' => 'dezactivat',
      ),
      'levelList' => 
      array (
        'all' => 'toate',
        'team' => 'echipa',
        'account' => 'cont',
        'contact' => 'contact',
        'own' => 'personal',
        'no' => 'nu',
        'yes' => 'da',
        'not-set' => 'nu a fost setat',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Citește',
      'edit' => 'Editare',
      'delete' => 'Șterge',
      'stream' => 'Stream',
      'create' => 'Creați',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Toate schimbările din controlul de acces o să fie aplicate după ce memoria chache este ștearsă.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Stare',
      'job' => 'Activitate',
      'scheduling' => 'Planificare',
    ),
    'links' => 
    array (
      'log' => 'Jurnal',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Creați activiate planificată',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Curățare',
        'CheckInboundEmails' => 'Verificare Grup Conturi Email',
        'CheckEmailAccounts' => 'Verificare Conturi Personale de Email',
        'SendEmailReminders' => 'Trimite Mementouri Email',
        'AuthTokenControl' => 'Control Autentificare Token',
        'SendEmailNotifications' => 'Trimite Notificări Email',
        'CheckNewVersion' => 'Verificați dacă există versiuni mai noi',
        'ProcessMassEmail' => 'Trimite Email-uri în Masă',
        'ControlKnowledgeBaseArticleStatus' => 'Controlează Starea Articolelor Bază de Cunoștințe',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Notă: Adaugă acestă linie în fișierul crontab pentru a rula Activitățile Espo planificate:',
        'mac' => 'Notă: Adaugă acestă linie în fișierul crontab pentru a rula Activitățile Espo planificate:',
        'windows' => 'Notă: Crează un fișier batch care să conțina următoarele comenzi pentru a rula Activitățile Espo planificate, folosind Windows Scheduled Tasks:',
        'default' => 'Notă: Adaugă această comandă în Cron Job (Sacini planificate):',
      ),
      'status' => 
      array (
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Notificări Crontab. Definește frecvența rulării activității.

*/5 * * * * - la fiecare 5 minute

0 */2 * * * - la fiecare 2 ore

30 1 * * * - la 01:30 o dată pe zi

0 0 1 * * - în prima zi a luni',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Stare',
      'executionTime' => 'Timp Execuție',
      'target' => 'Țintă',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Folosește Cache',
      'dateFormat' => 'Format Dată',
      'timeFormat' => 'Format Oră',
      'timeZone' => 'Fus orar',
      'weekStart' => 'Prima zi a săptămânii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Marcaj zecimal',
      'defaultCurrency' => 'Valută implicită',
      'baseCurrency' => 'Valută de Bază',
      'currencyRates' => 'Valori Rate',
      'currencyList' => 'Listă valute',
      'language' => 'Limbă',
      'companyLogo' => 'Logo Companie',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parolă',
      'outboundEmailFromName' => 'De la Nume',
      'outboundEmailFromAddress' => 'De la adresa',
      'outboundEmailIsShared' => 'Este Distribuit',
      'recordsPerPage' => 'Înregistrări per pagină',
      'recordsPerPageSmall' => 'Înregistrări per pagină (mic)',
      'tabList' => 'Listă filă',
      'quickCreateList' => 'Creare listă rapidă',
      'exportDelimiter' => 'Delimitator Export',
      'globalSearchEntityList' => 'Căutare Globală Listă Entitate',
      'authenticationMethod' => 'Metodă de autentificare',
      'ldapHost' => 'Gazdă',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorizare',
      'ldapUsername' => 'Nume Utilizator',
      'ldapPassword' => 'Parolă',
      'ldapBindRequiresDn' => 'Necesită DN',
      'ldapBaseDn' => 'Bază DN',
      'ldapAccountCanonicalForm' => 'Forma Canonică a Contului',
      'ldapAccountDomainName' => 'Nume Cont Domeniu',
      'ldapTryUsernameSplit' => 'Încercă tăierea numelui de utilizator',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Creați utilizator în EspoCRM',
      'ldapSecurity' => 'Securitate',
      'ldapUserLoginFilter' => 'Filtru Autentificare Utilizator',
      'ldapAccountDomainNameShort' => 'Nume scurt al contului domeniului',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Atribut Nume utilizator',
      'ldapUserObjectClass' => 'Utilizator ObjectClass',
      'ldapUserTitleAttribute' => 'Atribut Titlu Utilizator',
      'ldapUserFirstNameAttribute' => 'Atribut Prenume Utilizator',
      'ldapUserLastNameAttribute' => 'Atribut Nume Utilizator',
      'ldapUserEmailAddressAttribute' => 'Atribut Adresă de Email Utilizator',
      'ldapUserTeams' => 'Echipele Utilizatorului',
      'ldapUserDefaultTeam' => 'Echipa implicită a Utilizatorului',
      'ldapUserPhoneNumberAttribute' => 'Atribut număr de telefon utilizator',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Dezactivează Exportul (doar adminul este permis)',
      'assignmentNotificationsEntityList' => 'Entitățiile să fie notificate despre sarcină',
      'assignmentEmailNotifications' => 'Notificări despre sarcină',
      'assignmentEmailNotificationsEntityList' => 'Trimiteți subiecte de notificări prin e-mail',
      'streamEmailNotifications' => 'Notificări despre actualizări în Stream pentru utilizatrii interni',
      'portalStreamEmailNotifications' => 'Notificări despre actualizări în Stream pentru portal utilizatrii',
      'streamEmailNotificationsEntityList' => 'Redirecționați câmpurile de notificări prin e-mail',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'Mod B2C',
      'avatarsDisabled' => 'Dezactivare Avatare',
      'followCreatedEntities' => 'Urmăriți înregistrările create',
      'displayListViewRecordCount' => 'Afișează Numărul Total (în vizualizarea listei)',
      'theme' => 'Temă',
      'userThemesDisabled' => 'Dezactivare Teme Utilizatori',
      'emailMessageMaxSize' => 'Mărime Max Email (Mb)',
      'massEmailMaxPerHourCount' => 'Numărul maxim de email-uri trimise pe oră',
      'personalEmailMaxPortionSize' => 'Dimensiunea max a părții email pentru contul fetching personal',
      'inboundEmailMaxPortionSize' => 'Dimensiunea max a părții email pentru contul fetching al grupului',
      'maxEmailAccountCount' => 'Numărul max al conturile personale de email, per utilizator',
      'authTokenLifetime' => 'Auth Token Lifetime (ore)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (ore)',
      'dashboardLayout' => 'Aspeci Bord (implicit)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Previzualizare Adresă',
      'addressFormat' => 'Format Adresă',
      'notificationSoundsDisabled' => 'Dezactivează Sunetele Notificărilor',
      'applicationName' => 'Nume Aplicație',
      'calendarEntityList' => 'Calendar Listă Entitate',
      'mentionEmailNotifications' => 'Trimite notificări email despre mențiuni în postări',
      'massEmailDisableMandatoryOptOutLink' => 'Dezactivare link-uri obligatorii opt-out',
      'activitiesEntityList' => 'Activități Listă Entitate',
      'historyEntityList' => 'Istoric Listă Entitate',
      'currencyFormat' => 'Format Valută',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'Mod Strict ACL',
      'aclAllowDeleteCreated' => 'Permite ștergerea înregistrărilor create',
      'adminNotifications' => 'Notificări de sistem în panoul de administrare',
      'adminNotificationsNewVersion' => 'Afișează notificări atunci când o nouă versiune EspoCRM este disponibilă',
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
        0 => 'Duminică',
        1 => 'Luni',
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
      'recordsPerPage' => 'Numărul de înregistrări afișate inițial în vizualizarea listei.',
      'recordsPerPageSmall' => 'Numărul de înregistrări afișate inițial în panul de ralații.',
      'outboundEmailIsShared' => 'Permite utilizatorilor să trimită email-uri de pe această adresă.',
      'followCreatedEntities' => 'Utilizatorii o să urmeze automat înregistrări pe care le-au creat.',
      'emailMessageMaxSize' => 'Toate email-urile de intrare care depățesc o anumită mărime, o să fie fetched fără conținut și atașamente.',
      'authTokenLifetime' => 'Definește cât timp o să existe tokeni.
0 - nu au dată de expirare.',
      'authTokenMaxIdleTime' => 'Definește cât timp de la ultima accesare, pot să existe tokeni.
0 - nu au dată de expirare.',
      'userThemesDisabled' => 'Dacă este bifat, utilizatorii nu o să poată selecta o altă temă.',
      'ldapUsername' => 'Utilizatorul de sistem complet DN, care permite căutarea altor utilizatori. EX."CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'Parola de accesare a serverului LDAP.',
      'ldapAuth' => 'Acreditările de acces pentru serverul LDAP.',
      'ldapUserNameAttribute' => 'Atributul pentru identificare utilizatorului. EX."userPrincipalName" sau "sAMAccountName" pentru Directorul Activ, "uid" pentru OpenLDAP. ',
      'ldapUserObjectClass' => 'Atributul ObjectClass pentru a căuta utilizatori. Ex. "person" pentru AD, "inetOrgPerson" pentru OpenLDAP. ',
      'ldapAccountCanonicalForm' => 'Tipul contului tău de tip canonic. Sunt 4 opțiuni::<br>- \'Dn\' - formularul în format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - forumularul \'tester\'.<br>- \'Backslash\' - formularul \'COMPANY\\tester\'.<br>- \'Principal\' - formularul \'tester@company.com\'." ',
      'ldapBindRequiresDn' => 'Opțiunile pentru a formata numele utilizatorului în formatul DN.',
      'ldapBaseDn' => 'Baza DN implicită pentru a căuta utilizatori.Ex. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Opțiunea de a tăia numele utilizatorului cu domeniul.',
      'ldapOptReferrals' => 'dacă recomandările ar trebui urmate la clientul LDAP.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Această opțiune permite EspoCRM să creeze un utilizator din LDAP',
      'ldapUserFirstNameAttribute' => 'Atributul LDAP care este folosit pentru a determina prenumele utilizatorului. Ex. "givenname".',
      'ldapUserLastNameAttribute' => 'Atributul LDAP care este folosit pentru a determina numele utilizatorului. Ex."sn".',
      'ldapUserTitleAttribute' => 'Atributul LDAP care este folosit pentru a determina titlul utilizatorului. Ex."title".',
      'ldapUserEmailAddressAttribute' => 'Atributul LDAP care este folosit pentru a determina adresa de email a utilizatorului. Ex."mail".',
      'ldapUserPhoneNumberAttribute' => 'Atributul LDAP care este folosit pentru a determina numărul de telefon al utilizatorului. Ex. "telephoneNumber".',
      'ldapUserLoginFilter' => 'Filtrul care permite restricționarea utilizatorilor să folosească EspoCRM. Ex. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Domeniul care este folosit pentru autorizarea serverului LDAP.',
      'ldapAccountDomainNameShort' => 'Domeniul scurt care este folsoit pentru autorizarea serverului LDAP.',
      'ldapUserTeams' => 'Echipe pentru crearea utilizatorului. Pentru mai multe, vezi profil utilizator.',
      'ldapUserDefaultTeam' => 'Echipa implicită pentru utilizatorul creat. Pentru mai multe detalii, consultați profilul utilizatorului.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Implicit, EspoCRM este adaptat pentru B2B. Puteți comuta la B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Utilizatorii vor putea elimina înregistrările pe care le-au creat chiar dacă nu au acces la ștergere.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
    ),
    'labels' => 
    array (
      'System' => 'Sistem',
      'Locale' => 'Localizare',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configurare',
      'In-app Notifications' => 'Notificări în aplicație',
      'Email Notifications' => 'Notificări Email',
      'Currency Settings' => 'Setări Valută',
      'Currency Rates' => 'Currency Rates',
      'Mass Email' => 'Email în Masă',
      'Test Connection' => 'Conexiune Test',
      'Connecting' => 'Se conectează...',
      'Activities' => 'Activități',
      'Admin Notifications' => 'Notificări Admin',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Conexiunea a fost stabilită cu succes',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'roles' => 'Roluri',
      'positionList' => 'Listă Poziție',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
      'notes' => 'Note',
      'roles' => 'Roluri',
      'inboundEmails' => 'Grup conturi Email',
    ),
    'tooltips' => 
    array (
      'roles' => 'Roluri Acces. Utilizatorii acestei echipe obțin nivel de control al accesului din rolurile selectate.',
      'positionList' => 'Poziții disponibile în această echipă. Ex. Agent de vânzări, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Creare Echipă',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'body' => 'Body',
      'entityType' => 'Tip Entitate',
      'header' => 'Header',
      'footer' => 'Foorter',
      'leftMargin' => 'Marginea Stângă',
      'topMargin' => 'Marginea de Sus',
      'rightMargin' => 'Marginea Dreaptă',
      'bottomMargin' => 'Marginea de Jos',
      'printFooter' => 'Imprimare Footer',
      'footerPosition' => 'Poziție Footer',
      'variables' => 'Substituenți disponibili',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Creați Șablon',
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
      'footer' => 'Folosiți {pageNumber} pentru a imprima numărul paginii.',
      'variables' => 'Copiere-lipire are nevoie de substituenți pentru Haeder, Body și Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'userName' => 'Nume Utilizator',
      'title' => 'Titlu',
      'isAdmin' => 'Este Admin',
      'defaultTeam' => 'Echipă Inițială',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'Roluri',
      'portals' => 'Portaluri',
      'portalRoles' => 'Roluri Portal',
      'teamRole' => 'Poziție',
      'password' => 'Parola',
      'currentPassword' => 'Parolă Actuală',
      'passwordConfirm' => 'Confirmare Parolă',
      'newPassword' => 'Parolă Nouă',
      'newPasswordConfirm' => 'Confirmare Parolă Nouă',
      'avatar' => 'Avatar',
      'isActive' => 'Este Activ',
      'isPortalUser' => 'Este Utilizator Portal',
      'contact' => 'Contact',
      'accounts' => 'Conturi',
      'account' => 'Cont (Principal)',
      'sendAccessInfo' => 'Trimite Email cu Informații de Acces către Utilizator',
      'portal' => 'Portal',
      'gender' => 'Sex',
      'position' => 'Poziția în Echipă',
      'ipAddress' => 'IP Adresă',
      'passwordPreview' => 'Previzualizare Parolă',
      'isSuperAdmin' => 'Este Super Admin',
      'lastAccess' => 'Last Access',
      'acceptanceStatus' => 'Stare Acceptare',
      'acceptanceStatusMeetings' => 'Stare Acceptare (Întâlniri)',
      'acceptanceStatusCalls' => 'Stare Acceptare (Apeluri)',
    ),
    'links' => 
    array (
      'teams' => 'Echipe',
      'roles' => 'Roluri',
      'notes' => 'Note',
      'portals' => 'Portaluri',
      'portalRoles' => 'Roluri Portaluri',
      'contact' => 'Contact',
      'accounts' => 'Conturi',
      'account' => 'Cont (Principal)',
      'tasks' => 'Sarcini',
      'targetLists' => 'Liste Țintă',
    ),
    'labels' => 
    array (
      'Create User' => 'Creare Utilizator',
      'Generate' => 'Generare',
      'Access' => 'Acces',
      'Preferences' => 'Preferințe',
      'Change Password' => 'Schimbare Parolă',
      'Teams and Access Control' => 'Echipe și Acces Control',
      'Forgot Password?' => 'Ai uitat Parola?',
      'Password Change Request' => 'Cerere Schimbare Parolă',
      'Email Address' => 'Adresă Email',
      'External Accounts' => 'Conturi Externe',
      'Email Accounts' => 'Conturi Email',
      'Portal' => 'Portal',
      'Create Portal User' => 'Creați Utilizator Portal',
      'Proceed w/o Contact' => 'Continuă fără Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Toate înregistrările create de acest utilizator vor fi legate de această echipă în mod implicit.',
      'userName' => 'Scrisorile a-z, numerele 0-9, puncte, cratime, @ și underscores sunt permise.',
      'isAdmin' => 'Utilizatorii admin au acces la tot.',
      'isActive' => 'Dacă nu este bifat, utilizatorul nu o să se poată autentifica.',
      'teams' => 'Echipele din care face parte acest utilizator. Nivelul de control al accesului este moștenit din rolurile echipei.',
      'roles' => 'Roluri suplimentare de acces. Utilizați-l dacă utilizatorul nu aparține nici unei echipe sau trebuie să extindeți nivelul de control al accesului exclusiv pentru acest utilizator.',
      'portalRoles' => 'Roluri suplimentare de portal. Utilizați-l pentru a extinde nivelul de control al accesului exclusiv pentru acest utilizator.',
      'portals' => 'Portalurile la care are acces acest utilizator.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Parola va fi trimisă în email-ul utilizatorului.',
      'accountInfoEmailSubject' => 'Informații Acces Utilizator EspoCRM',
      'accountInfoEmailBody' => 'Informațiile tale de acces :

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Cerere Schimbare Parolă',
      'passwordChangeLinkEmailBody' => 'Vă puteți schimba parola urmând acest link {link}. Această adresă URL unică va expira în curând.',
      'passwordChanged' => 'Parola a fost schimbată',
      'userCantBeEmpty' => 'Numele de utilizator nu poate fi necompletat',
      'wrongUsernamePasword' => 'Nume utilizator/parolă greșit(e).',
      'emailAddressCantBeEmpty' => 'Adresa de Email nu poate fi necompletată',
      'userNameEmailAddressNotFound' => 'Nume utilizator/Adresă de email nu a(u) fost găsi(e)',
      'forbidden' => 'Înterzis, încercați mai târziu',
      'uniqueLinkHasBeenSent' => 'URL-ul unic a fost trimis la adresa de email specificată.',
      'passwordChangedByRequest' => 'Parola a fost schimbată.',
      'setupSmtpBefore' => 'Pentru a face sistemul să poată trimite parola în email , trebui să setați <a href="{url}">setările SMTP</a>.',
      'userNameExists' => 'Acest nume de utilizator există deja',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nu este setat',
        'Male' => 'Masculin',
        'Female' => 'Feminin',
        'Neutral' => 'Neutru',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Doar în Echipa Mea',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
      'activePortal' => 'Portal Activ',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adresa de Facturare',
      'shippingAddress' => 'Adresa de Transport',
      'description' => 'Descriere',
      'sicCode' => 'Cod Sic',
      'industry' => 'Industrie',
      'type' => 'Tip',
      'contactRole' => 'Rol',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunitati',
      'cases' => 'Cazuri',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Target Lists',
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
        'Customer' => 'Client',
        'Investor' => 'Investitor',
        'Partner' => 'Partener',
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
        'Education' => 'Educatie',
        'Electronics' => 'Electronice',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finante',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Asigurari',
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
        'Technology' => 'Tehnologie',
        'Telecommunications' => 'Telecomunicații',
        'Television' => 'Televiziune',
        'Testing, Inspection & Certification' => 'Testare, Inspecție & Certificări',
        'Transportation' => 'Transport',
        'Travel' => 'Călătorit',
        'Venture Capital' => 'Capital de risc',
        'Wholesale' => 'Angro',
        'Water' => 'Apă',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Creare cont',
      'Copy Billing' => 'Copiați facturarea',
      'Set Primary' => 'Setați primar',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Clienți',
      'partners' => 'Parteneri',
      'recentlyCreated' => 'Create recent',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Lună',
      'week' => 'Săptămână',
      'day' => 'Zi',
      'agendaWeek' => 'Săptămână',
      'agendaDay' => 'Zi',
      'timeline' => 'Cronologie',
    ),
    'labels' => 
    array (
      'Today' => 'Astăzi',
      'Create' => 'Crează',
      'Shared' => 'Partajat',
      'Add User' => 'Adăugare utilizator',
      'current' => 'actual',
      'time' => 'timp',
      'User List' => 'Listă Utiliziator',
      'Manage Users' => 'Gestionare Utilizatori',
      'View Calendar' => 'Vizualizare Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateStart' => 'Dată început',
      'dateEnd' => 'Dată terminare',
      'direction' => 'Direcție',
      'duration' => 'Durată',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'reminders' => 'Mementouri',
      'account' => 'Cont',
      'acceptanceStatus' => 'Starea de acceptare',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planificat',
        'Held' => 'Reținut',
        'Not Held' => 'Nereșinut',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ieșire',
        'Inbound' => 'Intrare',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nici unul',
        'Accepted' => 'Acceptat',
        'Declined' => 'Respins',
        'Tentative' => 'Tentativă',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Setează ca reținut',
      'setNotHeld' => 'Setează ca nereținut',
    ),
    'labels' => 
    array (
      'Create Call' => 'Creare Apelare',
      'Set Held' => 'Setează ca reținut',
      'Set Not Held' => 'Setează ca nereținut',
      'Send Invitations' => 'Trimite invitații',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planificat',
      'held' => 'Reținut',
      'todays' => 'Azi',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'description' => 'Descriere',
      'status' => 'Stare',
      'type' => 'Tip',
      'startDate' => 'Dată începere',
      'endDate' => 'Dată terminare',
      'targetLists' => 'Liste țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'sentCount' => 'Trimis',
      'openedCount' => 'Deschis',
      'clickedCount' => 'Apăsat',
      'optedOutCount' => 'Ales să nu',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Venituri',
      'revenueConverted' => 'Venituri (convertit)',
      'budget' => 'Buget',
      'budgetConverted' => 'Buget (convertit)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste Țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'accounts' => 'Conturi',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'opportunities' => 'Oportunități',
      'campaignLogRecords' => 'Jurnal',
      'massEmails' => 'Email-uri în Masă',
      'trackingUrls' => 'Urmărire URL-uri',
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
        'Television' => 'Televiziune',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planificare',
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
        'Complete' => 'Complet',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Crează Campanie',
      'Target Lists' => 'Liste Țintă',
      'Statistics' => 'Statistici',
      'hard' => 'tare',
      'soft' => 'ușor',
      'Unsubscribe' => 'Dezabonare',
      'Mass Emails' => 'Email-uri în Masă',
      'Email Templates' => 'Șabloane Email',
      'Unsubscribe again' => 'Dezabonare încă o dată',
      'Subscribe again' => 'Abonare încă o dată',
      'Create Target List' => 'Creați Listă Țintă',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'V-ați dezabonat din lista noastră de mail-uri',
      'subscribedAgain' => 'V-ați abonat încă o dată.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Țintele care ar trebui să primească mesaje.',
      'excludingTargetLists' => 'Țintele care nu ar trebui să primească mesaje.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Acțiune',
      'actionDate' => 'Dată',
      'data' => 'Date',
      'campaign' => 'Campanie',
      'parent' => 'Țintă',
      'object' => 'Obiect',
      'application' => 'Aplicație',
      'queueItem' => 'Elementul de așteptare',
      'stringData' => 'Șir Date',
      'stringAdditionalData' => 'Șir de Date Adiționale',
      'isTest' => 'Este Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Elementul de așteptare',
      'parent' => 'Părinte',
      'object' => 'Obiect',
      'campaign' => 'Campanie',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Trimis',
        'Opened' => 'Deschis',
        'Opted Out' => 'Ales să nu',
        'Bounced' => 'Bounced',
        'Clicked' => 'Apăsat',
        'Lead Created' => 'Lead-ul a fost creat',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Tot',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Trimis',
      'opened' => 'Deschis',
      'optedOut' => 'Ales să nu',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Apăsat',
      'leadCreated' => 'Lead-ul a fost creat',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Cod pentru inserare, în locul URL',
      'campaign' => 'Campanie',
    ),
    'links' => 
    array (
      'campaign' => 'Campanie',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Creați Urmărire URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'number' => 'Număr',
      'status' => 'Stare',
      'account' => 'Cont',
      'contact' => 'Contact',
      'contacts' => 'Contacte',
      'priority' => 'Prioritate',
      'type' => 'Tip',
      'description' => 'Descriere',
      'inboundEmail' => 'Grup Cont Email',
      'lead' => 'Lead',
      'attachments' => 'Atașamente',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Grup Cont Email',
      'account' => 'Cont',
      'contact' => 'Contact (Principal)',
      'Contacts' => 'Contacte',
      'meetings' => 'Întâlniri',
      'calls' => 'Apeluri',
      'tasks' => 'Sarcini',
      'emails' => 'Email-uri',
      'articles' => 'Articole Bază de Cunoștință',
      'lead' => 'Lead',
      'attachments' => 'Atașamente',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nou',
        'Assigned' => 'Alocat',
        'Pending' => 'În așteptare',
        'Closed' => 'Închis',
        'Rejected' => 'Respins',
        'Duplicate' => 'Duplicat',
      ),
      'priority' => 
      array (
        'Low' => 'Scăzut',
        'Normal' => 'Normal',
        'High' => 'Înalt',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Întrebare',
        'Incident' => 'Incident',
        'Problem' => 'Problemă',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Creare Caz',
      'Close' => 'Închis',
      'Reject' => 'Respins',
      'Closed' => 'Închis',
      'Rejected' => 'Respins',
    ),
    'presetFilters' => 
    array (
      'open' => 'Deschis',
      'closed' => 'Închis',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Rol',
      'account' => 'Cont',
      'accounts' => 'Conturi',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Tip cont',
      'doNotCall' => 'Nu sunați',
      'address' => 'Adresă',
      'opportunityRole' => 'Rol Oportunitate',
      'accountRole' => 'Rol',
      'description' => 'Descriere',
      'campaign' => 'Campanie',
      'targetLists' => 'Liste Țintă',
      'targetList' => 'Listă țintă',
      'portalUser' => 'Utilizator Portal',
      'originalLead' => 'Lead Original',
      'acceptanceStatus' => 'Stare Acceptare',
      'accountIsInactive' => 'Cont Inactiv',
      'acceptanceStatusMeetings' => 'Stare Acceptare (Întâlniri)',
      'acceptanceStatusCalls' => 'Stare Acceptare (Apeluri)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunități',
      'cases' => 'Cazuri',
      'targetLists' => 'Liste Țintă',
      'campaignLogRecords' => 'Jurnal Campanie',
      'campaign' => 'Campanie',
      'account' => 'Cont (Principal)',
      'accounts' => 'Conturi',
      'casesPrimary' => 'Cazuri (Principal)',
      'tasksPrimary' => 'Sarcini (extins)',
      'portalUser' => 'Utilizator Portal',
      'originalLead' => 'Lead Original',
      'documents' => 'Documente',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Creare Contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Nici unul--',
        'Decision Maker' => 'Factor de decizie',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Influencer',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Utilizatori Portal',
      'notPortalUsers' => 'Nu sunt Utilizatori ai Portalului',
      'accountActive' => 'Activ',
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
      'Create Document' => 'Creați Document',
      'Details' => 'Detalii',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Stare',
      'file' => 'Fișier',
      'type' => 'Tip',
      'publishDate' => 'Publică Dată',
      'expirationDate' => 'Data expirării',
      'description' => 'Descriere',
      'accounts' => 'Conturi',
      'folder' => 'Dosar',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Conturi',
      'opportunities' => 'Oportunități',
      'folder' => 'Dosar',
      'leads' => 'Lead-uri',
      'contacts' => 'Contacte',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activ',
        'Draft' => 'Schiță',
        'Expired' => 'Expirat',
        'Canceled' => 'Anulat',
      ),
      'type' => 
      array (
        '' => 'Nici unul',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Acord de licențiere',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
      'draft' => 'Schiță',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Creați Dosarul Documentului',
      'Manage Categories' => 'Gestionare Dosare',
      'Documents' => 'Documente',
    ),
    'links' => 
    array (
      'documents' => 'Documente',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Stare',
      'target' => 'Țintă',
      'sentAt' => 'Dată Trimitere',
      'attemptCount' => 'Încercări',
      'emailAddress' => 'Adresă Email',
      'massEmail' => 'Email în Masă',
      'isTest' => 'Este test',
    ),
    'links' => 
    array (
      'target' => 'Țintă',
      'massEmail' => 'Email în Masă',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'În așteptare',
        'Sent' => 'Trimis',
        'Failed' => 'Eșuat',
        'Sending' => 'Se trimite',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'În așteptare',
      'sent' => 'Trimis',
      'failed' => 'Eșuat',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Creați Articol',
      'Any' => 'Oricare',
      'Send in Email' => 'Trimite în Email',
      'Move Up' => 'Mută Sus',
      'Move Down' => 'Mută Jos',
      'Move to Top' => 'Mută la Început',
      'Move to Bottom' => 'Mută la Sfârșit',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Stare',
      'type' => 'Tip',
      'attachments' => 'Atașamente',
      'publishDate' => 'Publică Dată',
      'expirationDate' => 'Data Expirării',
      'description' => 'Descriere',
      'body' => 'Conținut',
      'categories' => 'Categorii',
      'language' => 'Limbă',
      'portals' => 'Portaluri',
    ),
    'links' => 
    array (
      'cases' => 'Cazuri',
      'opportunities' => 'Oportunități',
      'categories' => 'Ctegorii',
      'portals' => 'Portaluri',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'În revizuire',
        'Draft' => 'Schiță',
        'Archived' => 'Arhivat',
        'Published' => 'Publicat',
      ),
      'type' => 
      array (
        'Article' => 'Articol',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Articolul o să fie disponibil doar în portalurile specificate.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publicat',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Creați Categorie',
      'Manage Categories' => 'Gestionare Categorii',
      'Articles' => 'Articole',
    ),
    'links' => 
    array (
      'articles' => 'Articole',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertit la',
      'Create Lead' => 'Creare Lead',
      'Convert' => 'Convertește',
      'convert' => 'convertește',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Nume Cont',
      'doNotCall' => 'Nu sunați',
      'address' => 'Adresa',
      'status' => 'Stare',
      'source' => 'Sursa',
      'opportunityAmount' => 'Sumă Oportunitate',
      'opportunityAmountConverted' => 'Sumă Oportunitate (convertită)',
      'description' => 'Descriere',
      'createdAccount' => 'Cont',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Oportunitate',
      'campaign' => 'Campanie',
      'targetLists' => 'Liste Țintă',
      'targetList' => 'Listă Țintă',
      'industry' => 'Industrie',
      'acceptanceStatus' => 'Stare Acceptare',
      'opportunityAmountCurrency' => 'Valută Sumă Oportunitate',
      'acceptanceStatusMeetings' => 'Stare Acceptare (Întâlniri)',
      'acceptanceStatusCalls' => 'Stare Acceptare (Apeluri)',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste Țintă',
      'campaignLogRecords' => 'Jurnal Campanie',
      'campaign' => 'Campanie',
      'createdAccount' => 'Cont',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Oportunitate',
      'cases' => 'Cazuri',
      'documents' => 'Documente',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nou',
        'Assigned' => 'Atribuit',
        'In Process' => 'În Proces',
        'Converted' => 'Convertit',
        'Recycled' => 'Reciclat',
        'Dead' => 'Inactiv',
      ),
      'source' => 
      array (
        '' => 'Nici unul',
        'Call' => 'Apel',
        'Email' => 'Email',
        'Existing Customer' => 'Client Existent',
        'Partner' => 'Partener',
        'Public Relations' => 'Relații Publice',
        'Web Site' => 'Site Web',
        'Campaign' => 'Campanie',
        'Other' => 'Altele',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
      'actual' => 'Actual',
      'converted' => 'Convertit',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Stare',
      'storeSentEmails' => 'Stocați email-urile trimise',
      'startAt' => 'Data Începerii',
      'fromAddress' => 'Din Adresă',
      'fromName' => 'Din Nume',
      'replyToAddress' => 'Răspundeți la Adresă',
      'replyToName' => 'Răspundeți la Nume',
      'campaign' => 'Campanie',
      'emailTemplate' => 'Șablon Email',
      'inboundEmail' => 'Cont Email',
      'targetLists' => 'Liste Țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'Cont SMTP',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste Țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'queueItems' => 'Elemente de Așteptare',
      'campaign' => 'Campanie',
      'emailTemplate' => 'Șablon Email',
      'inboundEmail' => 'Cont Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Schiță',
        'Pending' => 'În așteptare',
        'In Process' => 'În proces',
        'Complete' => 'Terminat',
        'Canceled' => 'Anulat',
        'Failed' => 'Eșuat',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Creați Email în Masă',
      'Send Test' => 'Trimite Test',
      'System SMTP' => 'Sistem SMTP',
      'system' => 'sistem',
      'group' => 'grup',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Selectați cel puțin o țintă.',
      'testSent' => 'Email(uri) test care ar trebui să fie trimise',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Adresele de email ale destinatarilor care s-au dezabonat, vor fi marcate ca fiind oprite și nu vor mai primi email-uri în masă ',
      'targetLists' => 'Țintele care ar trebui să primească mesaje.',
      'excludingTargetLists' => 'Țintele care nu ar trebui să primească mesaje.',
      'storeSentEmails' => 'Email-urile o să fie stocate în CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'complete' => 'Terminat',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateStart' => 'Dată Început',
      'dateEnd' => 'Dată Terminare',
      'duration' => 'Durată',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'reminders' => 'Mementouri',
      'account' => 'Cont',
      'acceptanceStatus' => 'Stare Acceptare',
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
        'Planned' => 'Planificat',
        'Held' => 'Reținut',
        'Not Held' => 'Nereținut',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nici unul',
        'Accepted' => 'Acceptat',
        'Declined' => 'Respins',
        'Tentative' => 'Tentativă',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Setat ca reținut',
      'setNotHeld' => 'Setat ca nereținut',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Creare Întâlnire',
      'Set Held' => 'Setat ca reținut',
      'Set Not Held' => 'Setat ca nereținut',
      'Send Invitations' => 'Trimite Invitații',
      'on time' => 'la timp',
      'before' => 'înainte',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planificat',
      'held' => 'Reținut',
      'todays' => 'Astăzi',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nu a fost trimis nimic',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'account' => 'Cont',
      'stage' => 'Stadiu',
      'amount' => 'Sumă',
      'probability' => 'Probabilitate, %',
      'leadSource' => 'Sursă Lead',
      'doNotCall' => 'Nu sunați',
      'closeDate' => 'Data Închiderii',
      'contacts' => 'Contacte',
      'description' => 'Descriere',
      'amountConverted' => 'Sumă (convertit)',
      'amountWeightedConverted' => 'Suma ponderată',
      'campaign' => 'Campanie',
      'originalLead' => 'Lead Original',
      'amountCurrency' => 'Sumă Valută',
      'contactRole' => 'Rol Contact',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Contacte',
      'documents' => 'Documente',
      'campaign' => 'Campanie',
      'originalLead' => 'Lead Original',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectare',
        'Qualification' => 'Calificări',
        'Proposal' => 'Propunere',
        'Negotiation' => 'Negociere',
        'Needs Analysis' => 'Necesită Analiză',
        'Value Proposition' => 'Propunere Valoare',
        'Id. Decision Makers' => 'Id. Factori de Decizie',
        'Perception Analysis' => 'Analiză Percepției',
        'Proposal/Price Quote' => 'Propunere/Preț Ofertă',
        'Negotiation/Review' => 'Negociere/Revizuire',
        'Closed Won' => 'Închide Câștigat',
        'Closed Lost' => 'Închide Pierdut',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Creare Oportunitate',
    ),
    'presetFilters' => 
    array (
      'open' => 'Deschide',
      'won' => 'Câștigat',
      'lost' => 'Pierdut',
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
      'name' => 'Nume',
      'description' => 'Descriere',
      'entryCount' => 'Numără Intrări',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campanii',
      'endDate' => 'Dată Terminare',
      'targetLists' => 'Liste Țintă',
      'includingActionList' => 'Include',
      'excludingActionList' => 'Exclude',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Conturi',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'campaigns' => 'Campanii',
      'massEmails' => 'Email-uri în Masă',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televiziune',
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
      'Create TargetList' => 'Creați Listă Țintă',
      'Opted Out' => 'Ales să nu',
      'Cancel Opt-Out' => 'Anulează alegerea de ieșire',
      'Opt-Out' => 'Aleg să nu',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateStart' => 'Dată Începere',
      'dateEnd' => 'Dată Scadență',
      'dateStartDate' => 'Dată Începere (toată ziua)',
      'dateEndDate' => 'Dată Terminare (toată ziua)',
      'priority' => 'Prioritate',
      'description' => 'Descriere',
      'isOverdue' => 'Este Restant',
      'account' => 'Cont',
      'dateCompleted' => 'Dată Terminare',
      'attachments' => 'Atașamente',
      'reminders' => 'Mementouri',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Atașamente',
      'account' => 'Cont',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nu a început',
        'Started' => 'Început',
        'Completed' => 'Terminat',
        'Canceled' => 'Anulat',
        'Deferred' => 'Amânat',
      ),
      'priority' => 
      array (
        'Low' => 'Scăzut',
        'Normal' => 'Normal',
        'High' => 'Înalt',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Crează Sarcine',
      'Complete' => 'Terminat',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Terminat',
      'deferred' => 'Amânat',
      'todays' => 'Astăzi',
      'overdue' => 'Restant',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'doctosBeneficios' => 'DoctosBeneficios',
      'categoria' => 'Categoria',
      'empresa' => 'Empresa',
      'proveedor' => 'Proveedor',
      'rol' => 'Rol',
      'comuna' => 'Comuna',
    ),
    'labels' => 
    array (
      'Create Beneficios' => 'Creare Beneficios',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
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
      'Create Categoria' => 'Creare Categoria',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'comunas' => 'Comunas',
    ),
    'labels' => 
    array (
      'Create Ciudad' => 'Creare Ciudad',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'ciudad' => 'Ciudad',
      'trabajador' => 'Trabajador',
      'beneficios' => 'Beneficios',
    ),
    'labels' => 
    array (
      'Create Comuna' => 'Creare Comuna',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'beneficios' => 'Beneficios',
    ),
    'labels' => 
    array (
      'Create DoctosBeneficio' => 'Creare Doctos_beneficio',
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
      'Create Empresa' => 'Creare Empresa',
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
      'Create Formularios' => 'Creare Formulario',
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
      'Create Proveedor' => 'Creare Proveedor',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'beneficioss' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' => 
    array (
      'Create Rol' => 'Creare Rol',
    ),
  ),
  'Solicitudes' => 
  array (
    'fields' => 
    array (
      'address' => 'Address',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'subcategorias' => 'Subcategorias',
      'subcategoria3' => 'Subcategoria3',
      'relacionsubcategoria' => 'relacionSubcategoria',
      'categoriarela' => 'Categoriarela',
    ),
    'labels' => 
    array (
      'Create Solicitudes' => 'Creare Solicitudes',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
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
      'Create Subcategoria' => 'Creare Subcategoria',
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
      'Create Trabajador' => 'Creare Trabajador',
    ),
  ),
);
?>