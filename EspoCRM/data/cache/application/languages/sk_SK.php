<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Používateľ',
      'action' => 'Akcia',
      'createdAt' => 'Dátum',
      'target' => 'Cieľ',
      'targetType' => 'Typ cieľa',
      'authToken' => 'Auth token',
      'ipAddress' => 'IP Adresa',
      'authLogRecord' => 'Záznam Auth protokolu',
    ),
    'links' => 
    array (
      'authToken' => 'Auth token',
      'authLogRecord' => 'Záznam Auth protokolu',
      'user' => 'Používateľ',
      'target' => 'Cieľ',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Len moje',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Čítať',
        'update' => 'Zmeniť',
        'delete' => 'Zmazať',
        'create' => 'Vytvoriť',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Povolený',
      'Disabled' => 'Zablokovaný',
      'System' => 'Systém',
      'Users' => 'Používatelia',
      'Email' => 'Email',
      'Data' => 'Dáta',
      'Customization' => 'Prispôsobenie',
      'Available Fields' => 'Dostupné polia',
      'Layout' => 'Rozmiestnenie',
      'Entity Manager' => 'Manažér entít',
      'Add Panel' => 'Pridať panel',
      'Add Field' => 'Pridať pole',
      'Settings' => 'Nastavenia',
      'Scheduled Jobs' => 'Naplánované behy',
      'Upgrade' => 'Aktualizácia',
      'Clear Cache' => 'Vymazať cache',
      'Rebuild' => 'Prekompilovať',
      'Teams' => 'Tímy',
      'Roles' => 'Role',
      'Portal' => 'Portál',
      'Portals' => 'Portály',
      'Portal Roles' => 'Portálové role',
      'Portal Users' => 'Portáloví používatelia',
      'Outbound Emails' => 'Odchádzajúca pošta',
      'Group Email Accounts' => 'Skupinové emailové kontá',
      'Personal Email Accounts' => 'Osobné emailové kontá',
      'Inbound Emails' => 'Prichadzajúca pošta',
      'Email Templates' => 'Emailové šablóny',
      'Import' => 'Import',
      'Layout Manager' => 'Manažér rozmiestnenia',
      'User Interface' => 'Používateľské rozhranie',
      'Auth Tokens' => 'Auth tokeny',
      'Auth Log' => 'Auth protokol',
      'Authentication' => 'Overenie',
      'Currency' => 'Mena',
      'Integrations' => 'Integrácie',
      'Extensions' => 'Rozšírenia',
      'Upload' => 'Nahrať',
      'Installing...' => 'Inštaluje sa ...',
      'Upgrading...' => 'Aktualizuje sa ...',
      'Upgraded successfully' => 'Aktualizácia prebehla úspešne',
      'Installed successfully' => 'Inštalácia prebehla úspešne',
      'Ready for upgrade' => 'Pripravené na aktualizáciu',
      'Run Upgrade' => 'Spustiť aktualizáciu',
      'Install' => 'Inštalovať',
      'Ready for installation' => 'Pripravené na inštaláciu',
      'Uninstalling...' => 'Odinštalovanie ...',
      'Uninstalled' => 'Odinštalované',
      'Create Entity' => 'Vytvoriť entitu',
      'Edit Entity' => 'Zmeniť entitu',
      'Create Link' => 'Vytvoriť odkaz',
      'Edit Link' => 'Zmeniť odkaz',
      'Notifications' => 'Upozornenia',
      'Jobs' => 'Behy',
      'Reset to Default' => 'Reset do pôvodných nastavení
',
      'Email Filters' => 'Emailové filtre',
      'Action History' => 'História akcií',
      'Label Manager' => 'Správca popiskov',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Zoznam',
      'detail' => 'Detail',
      'listSmall' => 'Zoznam (malý)',
      'detailSmall' => 'Detail (malý)',
      'detailPortal' => 'Detail (portál)',
      'detailSmallPortal' => 'Detail (malý, portál)
',
      'listSmallPortal' => 'Zoznam (malý, portál)',
      'listPortal' => 'Zoznam (portál)',
      'relationshipsPortal' => 'Panely vzťahov (portál)',
      'filters' => 'Vyhľadávacie filtre',
      'massUpdate' => 'Hromadná zmena',
      'relationships' => 'Panely vzťahov',
      'sidePanelsDetail' => 'Bočné panely (Detail)',
      'sidePanelsEdit' => 'Bočné panely (Editovací)',
      'sidePanelsDetailSmall' => 'Bočné panely (Malý detail)',
      'sidePanelsEditSmall' => 'Bočné panely (Malý editovací)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Konvertovať stopu',
      'listForAccount' => 'Zoznam (pre účet)',
      'listForContact' => 'Zoznam (pre kontakt)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresa',
      'array' => 'Pole',
      'foreign' => 'Cudzí',
      'duration' => 'Trvanie',
      'password' => 'Heslo',
      'personName' => 'Meno osoby',
      'autoincrement' => 'Auto-inkrement',
      'bool' => 'Boolen',
      'currency' => 'Mena',
      'currencyConverted' => 'Mena (Konvertovaná)',
      'date' => 'Dátum',
      'datetime' => 'Dátum-Čas',
      'datetimeOptional' => 'Dátum/Dátum-Čas',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Integer',
      'link' => 'odkaz',
      'linkMultiple' => 'Viacnásobný odkaz',
      'linkParent' => 'Rodičovský odkaz',
      'phone' => 'Telefón',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Súbor',
      'image' => 'Obrázok',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Viacnásobná príloha',
      'rangeInt' => 'Rozsah Integer',
      'rangeFloat' => 'Rozsah Float',
      'rangeCurrency' => 'Rozsah Mena',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mapa',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Výber farby',
      'jsonArray' => 'Pole Json',
      'jsonObject' => 'Objekt Json',
    ),
    'fields' => 
    array (
      'type' => 'Typ',
      'name' => 'Názov',
      'label' => 'Popisok',
      'tooltipText' => 'Text nápovedy',
      'required' => 'Povinný',
      'default' => 'Predvolený',
      'maxLength' => 'Max dĺžka',
      'options' => 'Možnosti',
      'after' => 'Za (poľom)',
      'before' => 'Pred (poľom)',
      'link' => 'odkaz',
      'field' => 'Pole',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Preklad',
      'previewSize' => 'Veľkosť náhľadu',
      'noEmptyString' => 'Prázdny reťazec nie je povolený',
      'defaultType' => 'Predvolený typ',
      'seeMoreDisabled' => 'Zakázať orezanie textu',
      'entityList' => 'Zoznam entít',
      'isSorted' => 'Je zoradený (abecedne)',
      'audited' => 'Sledovaný',
      'trim' => 'Orezať medzery',
      'height' => 'Výška (px)',
      'minHeight' => 'Min. výška (px)',
      'provider' => 'Poskytovateľ',
      'typeList' => 'Zoznam typov',
      'rows' => 'Počet riadkov textovej oblasti',
      'lengthOfCut' => 'Dĺžka orezania',
      'sourceList' => 'Zdrojový zoznam',
      'prefix' => 'Prefix',
      'nextNumber' => 'Ďalšie číslo',
      'padLength' => 'Dĺžka doplnenia',
      'disableFormatting' => 'Zakázať formátovanie',
      'dynamicLogicVisible' => 'Podmienky pre viditeľnosť poľa',
      'dynamicLogicReadOnly' => 'Podmienky pre pole len na čítanie',
      'dynamicLogicRequired' => 'Podmienky pre povinné pole',
      'dynamicLogicOptions' => 'Podmienečné možnosti',
      'probabilityMap' => 'Pravdepodobnosť fázy (%)',
      'readOnly' => 'Len na čítanie',
      'maxFileSize' => 'Max. veľkosť súboru (MB)',
      'isPersonalData' => 'Sú osobné dáta',
      'useIframe' => 'Použite Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM bude aktualizované na verziu <strong>{version}</strong>. Prosím o trpezlivosť, môže to chvíľu trvať.',
      'upgradeDone' => 'EspoCRM bolo aktualizované na verziu <strong>{version}</strong>.',
      'upgradeBackup' => 'Pred aktualizáciou odporúčame urobiť zálohu súborov a dát EspoCRM.',
      'thousandSeparatorEqualsDecimalMark' => 'Oddeľovač tisícov nemôže byť rovnaký ako oddeľovač desatinných miest.',
      'userHasNoEmailAddress' => 'Používateľ nemá emailovú adresu.',
      'selectEntityType' => 'Vyber typ entity v ľavom menu',
      'selectUpgradePackage' => 'Vyber balíček s aktualizáciou',
      'downloadUpgradePackage' => 'Stiahni balíček(y) s aktualizáciou <a href="{url}">tu</a>.',
      'selectLayout' => 'Vyber požadované rozmiestnenie v ľavom menu a uprav ho.',
      'selectExtensionPackage' => 'Vyber balíček s rozšírením',
      'extensionInstalled' => 'Rozšírenie {name} {version} bolo nainštalované.',
      'installExtension' => 'Rozšírenie {name} {version} je pripravené na inštaláciu.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'Je k dispozícii nová verzia EspoCRM {latestVersion}.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Ste si istý, že chcete rozšírenie odinštalovať?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systémové nastavenia aplikácie.',
      'scheduledJob' => 'Behy, ktoré sú spúšťané cron-om.',
      'upgrade' => 'Aktualizácia EspoCRM.',
      'clearCache' => 'Vymazať všetky vyrovnávacie pamate na serveri.',
      'rebuild' => 'Prekompilovat serverovú časť a vymazať vyrovnávaciu pamäť.',
      'users' => 'Správa používateľov.',
      'teams' => 'Správa tímov.',
      'roles' => 'Správa rolí.',
      'portals' => 'Správa portálov.',
      'portalRoles' => 'Portálové role.',
      'portalUsers' => 'Používatelia portálu.',
      'outboundEmails' => 'Nastavenia SMTP pre odchádzajúce emaily.',
      'groupEmailAccounts' => 'Skupinové IMAP účty. Import Emailov a Email-to-Case',
      'personalEmailAccounts' => 'Emailové účtu používateľov.',
      'emailTemplates' => 'Šablóny pre odchádzajúce emaily.',
      'import' => 'Import dát z CSV súboru.',
      'layoutManager' => 'Prispôsobenie rozmiestnenia (zoznam, detail, zmeny, vyhľadávanie, hromadná zmena)',
      'entityManager' => 'Vytvoriť a meniť vlastné entity. Správa polí a väzieb.',
      'userInterface' => 'Konfigurácia UI.',
      'authTokens' => 'Aktívne auth relácie, IP adresa a dátum posledného prístupu.',
      'authentication' => 'Nastavenia overenia.',
      'currency' => 'Nastavenia meny a kurzy.',
      'extensions' => 'Inštalácia alebo odinštalácia rozšírení.',
      'integrations' => 'Integrácia so službami tretích strán.',
      'notifications' => 'Nastavenia upozornení v aplikácii a emailom.',
      'inboundEmails' => 'Nastavenia pre prichádzajúce emaily.',
      'emailFilters' => 'Emailové správy, ktoré vyhovujú danému filtru, nebudú importované.',
      'actionHistory' => 'Protokol používateľských akcií.',
      'labelManager' => 'Prispôsobenie popiskov v aplikácii.',
      'authLog' => 'História prihlásení.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Extra malý (XS)',
        'small' => 'Malý (S)',
        'medium' => 'Stredný (M)',
        'large' => 'Veľký (L)',
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
      'Document' => 'Vložiť dokument',
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
      'username' => 'Používateľské meno',
      'ipAddress' => 'IP adresa',
      'requestTime' => 'Čas požiadavky',
      'createdAt' => 'Požadované o',
      'isDenied' => 'Je zakázaný',
      'denialReason' => 'Dôvod zákazu',
      'portal' => 'Portál',
      'user' => 'Používateľ',
      'authToken' => 'Auth token vytvorený',
      'requestUrl' => 'URL požiadavky',
      'requestMethod' => 'Metóda požiadavky',
      'authTokenIsActive' => 'Auth token je aktívny',
    ),
    'links' => 
    array (
      'authToken' => 'Auth token vytvorený',
      'user' => 'Používateľ',
      'portal' => 'Portál',
      'actionHistoryRecords' => 'História akcií',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Zakázaný',
      'accepted' => 'Akceptovaný',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Chybné prihlasovacie údaje',
        'INACTIVE_USER' => 'Neaktívny používateľ',
        'IS_PORTAL_USER' => 'Portálový používateľ',
        'IS_NOT_PORTAL_USER' => 'Nie je portálový používateľ',
        'USER_IS_NOT_IN_PORTAL' => 'Používateľ nie je priradný k portálu',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Používateľ',
      'ipAddress' => 'IP Adresa',
      'lastAccess' => 'Dátum posledného prístupu',
      'createdAt' => 'Dátum prihlásenia',
      'isActive' => 'Je aktívny',
      'portal' => 'Portál',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'História akcií',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktívny',
      'inactive' => 'Neaktívny',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Nastaviť neaktívny',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Nastaviť neaktívny',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Nadpis',
      'dateFrom' => 'Dátum od',
      'dateTo' => 'Dátum do',
      'autorefreshInterval' => 'Interval auto obnovy',
      'displayRecords' => 'Zobrazené záznamy',
      'isDoubleHeight' => 'Výška 2x',
      'mode' => 'Režim',
      'enabledScopeList' => 'Čo zobraziť',
      'users' => 'Používatelia',
      'entityType' => 'Typ entity',
      'primaryFilter' => 'Primárny filter',
      'boolFilterList' => 'Dodatočné filtre',
      'sortBy' => 'Poradie (pole)',
      'sortDirection' => 'Poradie (smer)',
      'expandedLayout' => 'Rozmiestnenie',
      'dateFilter' => 'Filter dátumu',
      'futureDays' => 'Ďalších X dní',
      'useLastStage' => 'Zoskupiť podľa posleného dosiahnutého štádia',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Týždeň (agenda)',
        'basicWeek' => 'Týždeň',
        'month' => 'Mesiac',
        'basicDay' => 'Deň',
        'agendaDay' => 'Deň (agenda)',
        'timeline' => 'Časová os',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Vyberte typ entity v možnostiach dashletu.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Pole',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Rovná sa',
        'notEquals' => 'Nerovná sa',
        'greaterThan' => 'Väčší ako',
        'lessThan' => 'Menší ako',
        'greaterThanOrEquals' => 'Väčší ako alebo rovný',
        'lessThanOrEquals' => 'Menší alebo rovný',
        'in' => 'V',
        'notIn' => 'Nie v',
        'inPast' => 'V minulosti',
        'inFuture' => 'V budúcnosti',
        'isToday' => 'Je dnes',
        'isTrue' => 'Je pravda',
        'isFalse' => 'Je nepravda',
        'isEmpty' => 'Je prázdny',
        'isNotEmpty' => 'Nie je prázdny',
        'contains' => 'Obsahuje',
        'notContains' => 'Neobsahuje',
        'has' => 'Obsahuje',
        'notHas' => 'Neobsahuje',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov (predmet)',
      'parent' => 'Rodič',
      'status' => 'Status',
      'dateSent' => 'Dátum odoslania',
      'from' => 'Od',
      'to' => 'Komu',
      'cc' => 'Kópia',
      'bcc' => 'Slepá kópia',
      'replyTo' => 'Odpovedať',
      'replyToString' => 'Odpovedať (String)',
      'isHtml' => 'Je Html',
      'body' => 'Telo',
      'bodyPlain' => 'Telo (jednoduché)',
      'subject' => 'Predmet',
      'attachments' => 'Prílohy',
      'selectTemplate' => 'Vybrať šablónu',
      'fromEmailAddress' => 'Adresa odosielateľa',
      'toEmailAddresses' => 'Emailové adresy adresátov',
      'emailAddress' => 'Emailová adresa',
      'deliveryDate' => 'Dátum doručenia',
      'account' => 'Účet',
      'users' => 'Používatelia',
      'replied' => 'Odpovedané',
      'replies' => 'Odpovede',
      'isRead' => 'Je prečítané',
      'isNotRead' => 'Nie je prečítané',
      'isImportant' => 'Je dôležité',
      'isReplied' => 'Je odpovedaný',
      'isNotReplied' => 'Je neodpovedaný',
      'isUsers' => 'Je používateľské',
      'inTrash' => 'V koši',
      'sentBy' => 'Odoslaný od',
      'folder' => 'Priečinok',
      'inboundEmails' => 'Skupinové účty',
      'emailAccounts' => 'Osobné účty',
      'hasAttachment' => 'Má prílohy',
      'assignedUsers' => 'Priradení používatelia',
      'ccEmailAddresses' => 'CC emailové adresy',
      'bccEmailAddresses' => 'BCC emailové adresy',
      'replyToEmailAddresses' => 'Emailové adresy na odpoveď',
      'messageId' => 'Id správy',
      'messageIdInternal' => 'Id správy (interné)',
      'folderId' => 'Id priečinku',
      'fromName' => 'Meno odosielateľa',
      'fromString' => 'Reťazec odosielateľa',
      'isSystem' => 'Je systémový',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'replied' => 'Opdovedané',
      'replies' => 'Odpovede',
      'inboundEmails' => 'Skupinové účty',
      'emailAccounts' => 'Osobné účty',
      'assignedUsers' => 'Priradení používatelia',
      'sentBy' => 'Odoslaný od',
      'attachments' => 'Prílohy',
      'fromEmailAddress' => 'Emailová adresa odosielateľa',
      'toEmailAddresses' => 'Na emailové adresy',
      'ccEmailAddresses' => 'CC emaliové adresy',
      'bccEmailAddresses' => 'BCC emailové adresy',
      'replyToEmailAddresses' => 'Emailové adresy na odpoveď',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Koncept',
        'Sending' => 'Odosiela sa',
        'Sent' => 'Odoslané',
        'Archived' => 'Archivované',
        'Received' => 'Prijaté',
        'Failed' => 'Chybné',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archivovať email',
      'Archive Email' => 'Archivovať email',
      'Compose' => 'Vytvoriť',
      'Reply' => 'Odpovedať',
      'Reply to All' => 'Odpovedať všetkým',
      'Forward' => 'Preposlať',
      'Original message' => 'Originálna správa',
      'Forwarded message' => 'Preposlaná správa',
      'Email Accounts' => 'Osobné emailové účty',
      'Inbound Emails' => 'Skupinové emailové účty',
      'Email Templates' => 'Emailové šablóny',
      'Send Test Email' => 'Poslať testovací email',
      'Send' => 'Poslať',
      'Email Address' => 'Emailová adresa',
      'Mark Read' => 'Označiť ako prečítané',
      'Sending...' => 'Odosiela sa ...',
      'Save Draft' => 'Uložiť koncept',
      'Mark all as read' => 'Označiť všetko ako prečítané',
      'Show Plain Text' => 'Zobraziť ako čistý text',
      'Mark as Important' => 'Označiť ako dôležité',
      'Unmark Importance' => 'Zrušiť označenie dôležitosti',
      'Move to Trash' => 'Presunúť to koša',
      'Retrieve from Trash' => 'Vytiahnuť z koša',
      'Move to Folder' => 'Presunúť do priečinka',
      'Filters' => 'Filtre',
      'Folders' => 'Priečinky',
      'Create Lead' => 'Vytvoriť stopu',
      'Create Contact' => 'Vytvoriť kontakt',
      'Add to Contact' => 'Pridať do kontaktu',
      'Add to Lead' => 'Pridať do stopy',
      'Create Task' => 'Vytvoriť úlohu',
      'Create Case' => 'Vytvoriť prípad',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Chýba SMTP nastavenie. {link}.',
      'testEmailSent' => 'Testovací email bol odoslaný',
      'emailSent' => 'Email bol odoslaný',
      'savedAsDraft' => 'Uložené ako koncept',
      'confirmInsertTemplate' => 'Telo emailu bude stratené. Ste si istý, že chcete vložiť šablónu?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Odoslané',
      'archived' => 'Archivované',
      'inbox' => 'Doručná pošta',
      'drafts' => 'Koncepty',
      'trash' => 'Kôš',
      'important' => 'Dôležité',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Označiť ako prečítané',
      'markAsNotRead' => 'Označiť ako neprečítane',
      'markAsImportant' => 'Označiť ako dôležité',
      'markAsNotImportant' => 'Zrušiť označenie dôležité',
      'moveToTrash' => 'Presunúť do koša',
      'moveToFolder' => 'Presunúť do priečinka',
      'retrieveFromTrash' => 'Vytiahnuť z koša',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'status' => 'Stav',
      'host' => 'Host',
      'username' => 'Používateľské meno',
      'password' => 'Heslo',
      'port' => 'Port',
      'monitoredFolders' => 'Sledované priečinky',
      'ssl' => 'SSL',
      'fetchSince' => 'Stiahnuť od',
      'emailAddress' => 'Emailová adresa',
      'sentFolder' => 'Priečinok Odoslané',
      'storeSentEmails' => 'Uložiť odoslané emaily',
      'keepFetchedEmailsUnread' => 'Ponechať stiahnuté emaily neprečítané',
      'emailFolder' => 'Vložiť do priečinku',
      'useImap' => 'Načítať emaily',
      'useSmtp' => 'Použiť SMTP',
      'smtpHost' => 'SMTP server',
      'smtpPort' => 'SMTP port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP bezpečnosť',
      'smtpUsername' => 'SMTP používateľské meno',
      'smtpPassword' => 'SMTP heslo',
    ),
    'links' => 
    array (
      'filters' => 'Filtre',
      'emails' => 'Emaily',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktívne',
        'Inactive' => 'Neaktívne',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Vytvoriť emailový účet',
      'IMAP' => 'IMAP',
      'Main' => 'Hlavné',
      'Test Connection' => 'Test spojenia',
      'Send Test Email' => 'Odoslať testovací email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nedá sa pripojiť k IMAP serveru',
      'connectionIsOk' => 'Spojenie je OK',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Viaceré priečinky majú byť oddelené čiarkou.

Môžete pridať priečinok s odoslanou poštou na synchronizovanie emailov odoslaných exteným emailovým klientom.',
      'storeSentEmails' => 'Odoslané emaily budú uložené na serveri IMAP. Pole s emailovou adresou by sa malo zhodovať s adresou, z ktorej budú emaily odoslané.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primárne',
      'Opted Out' => 'Neuplatnené',
      'Invalid' => 'Vadný',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Od',
      'to' => 'Komu',
      'subject' => 'Predmet',
      'bodyContains' => 'Telo obsahuje',
      'action' => 'Akcia',
      'isGlobal' => 'Je globálny',
      'emailFolder' => 'Priečinok',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Vytvoriť emailový filter',
      'Emails' => 'Emaily',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorovať',
        'Move to Folder' => 'Vložiť do priečinka',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Zadajte filtru popisný názov.',
      'subject' => 'Použite zástupný znak *:

text* - začína s text,
*text* - obsahuje text,
*text - končí na text.',
      'bodyContains' => 'Telo emailu obsahuje akékoľvek zadané slová alebo frázy.',
      'from' => 'Emaily odoslané zo špecifikovanej adresy. Ponechaj prázdne nie je potrebné. Môžeš použiť zástupný znak *.',
      'to' => 'Emaily odoslané na špecifikovanú adresu. Ponechaj prázdne nie je potrebné. Môžeš použiť zástupný znak *.',
      'isGlobal' => 'Aplikuje tento filter na všetky emaily prichádzajúce do systému.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Preskočiť upozornenia',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Vytvoriť priečinok',
      'Manage Folders' => 'Spravovať priečinky',
      'Emails' => 'Emaily',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'status' => 'Stav',
      'isHtml' => 'Je Html',
      'body' => 'Telo',
      'subject' => 'Predmet',
      'attachments' => 'Prílohy',
      'insertField' => 'Vlož pole',
      'oneOff' => 'One-off',
      'category' => 'Kategória',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Vytvoriť šablónu emailu',
      'Info' => 'Info',
      'Available placeholders' => 'Dostupné náhrady',
    ),
    'messages' => 
    array (
      'infoText' => 'Dostupné náhrady:

{optOutUrl} &#8211; URL pre odkaz na odregistrovanie;

{optOutLink} &#8211; odkaz na odregistrovanie.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Skontroluj ci použiješ túto šablónu iba raz. Napr. pre hromadný email.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuálne',
    ),
    'placeholderTexts' => 
    array (
      'optOutUrl' => 'URL pre odkaz na odhlásenie odberu',
      'optOutLink' => 'odkaz na odhlásenie odberu',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Vytvoriť kategóriu',
      'Manage Categories' => 'Spravovať kategórie',
      'EmailTemplates' => 'Emailové šablony',
    ),
    'fields' => 
    array (
      'order' => 'Poradie',
      'childList' => 'Podradený zoznam',
    ),
    'links' => 
    array (
      'emailTemplates' => 'Emailové šablony',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Polia',
      'Relationships' => 'Väzby',
      'Schedule' => 'Plánované',
      'Log' => 'Protokol',
      'Formula' => 'Vzorec',
    ),
    'fields' => 
    array (
      'name' => 'Názov',
      'type' => 'Typ',
      'labelSingular' => 'Jenotné číslo popisku',
      'labelPlural' => 'Množné číslo popisku',
      'stream' => 'Stream',
      'label' => 'Popisok',
      'linkType' => 'Typ linky',
      'entityForeign' => 'Cudzia entita',
      'linkForeign' => 'Cudzia linka',
      'link' => 'Odkaz',
      'labelForeign' => 'Cudzí popisok',
      'sortBy' => 'Predvolené poradie (pole)',
      'sortDirection' => 'Predvolené poradie (smer)',
      'relationName' => 'Názov strednej tabuľky',
      'linkMultipleField' => 'Zlinkovať viaceré polia',
      'linkMultipleFieldForeign' => 'Cudzia linka viacerých polí',
      'disabled' => 'Zablokované',
      'textFilterFields' => 'Polia textového filtra',
      'audited' => 'Sledované',
      'auditedForeign' => 'Cudzí sledovaný',
      'statusField' => 'Pole stavu',
      'beforeSaveCustomScript' => 'Pred uložením vlastného skriptu',
      'color' => 'Farba',
      'kanbanViewMode' => 'Pohľad Kanban',
      'kanbanStatusIgnoreList' => 'Ignorované skupiny v pohľade Kanban',
      'iconClass' => 'Ikona',
      'fullTextSearch' => 'Full-Textové vyhľadávanie',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Žiadne',
        'Base' => 'Základné',
        'Person' => 'Osoba',
        'CategoryTree' => 'Strom kategórií',
        'Event' => 'Udalosť',
        'BasePlus' => 'Základ plus',
        'Company' => 'Spoločnosť',
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
        'asc' => 'Vzostupne',
        'desc' => 'Zostupne',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entita bola vytvorená',
      'linkAlreadyExists' => 'Konflikt v názve linky.',
      'linkConflict' => 'Konflikt v názve: linka alebo pole s rovnakým názvom už existuje.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Zmeny tohoto poľa sú zapisované do streamu',
      'textFilterFields' => 'Polia použité v textovom vyhľadávaní',
      'stream' => 'Či má entita stream',
      'disabled' => 'Označte ak nepotrebujete túto entitu vo svojom systéme.',
      'linkAudited' => 'Vytvorenie súvisiaceho záznamu a zlinkovanie s existujúcim záznamom bude zaznamenané v streame.',
      'linkMultipleField' => 'Pole "Link Multiple" poskytuje šikovný spôsob ako editovať relácie. Nepoužívajte ho ak chcete mať veľké množstvo súvisiacich záznamov (relácií).',
      'entityType' => 'Base Plus - má panely a aktivitami, históroiu a s úlohami.

Udalosť - dostupná v kalendári a v paneli aktivít.',
      'fullTextSearch' => 'Spustenie prestavby je vyžadované',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Exportovať všetky polia',
      'fieldList' => 'Zoznam polí',
      'format' => 'Formát',
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
      'name' => 'Názov',
      'version' => 'Verzia',
      'description' => 'Popis',
      'isInstalled' => 'Nainštalovaný',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Odinštalovaný',
      'Install' => 'Inštalovať',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Rozšírenie {name} bolo odinštalované',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Spojenie',
      'Connected' => 'Spojené',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dynamická logika',
      'Name' => 'Názov',
      'Label' => 'Popisok',
      'Type' => 'Typ',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Žiadny',
        'javascript: return this.dateTime.getNow(1);' => 'Teraz',
        'javascript: return this.dateTime.getNow(5);' => 'Teraz (5 min)',
        'javascript: return this.dateTime.getNow(15);' => 'Teraz (10 min)',
        'javascript: return this.dateTime.getNow(30);' => 'Teraz (30 min)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hodina',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 hodiny',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 hodiny',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 hodiny',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 hodín',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 day',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dní',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dní',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 týždeň',
      ),
      'dateDefault' => 
      array (
        '' => 'Žiadny',
        'javascript: return this.dateTime.getToday();' => 'Dnes',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 deň',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dní',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dní',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dní',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dní',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dní',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dní',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 týždeň',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 týždne',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 týždne',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mesiac',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 mesiace',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 mesiace',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 mesiace',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 mesiacov',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 mesiacov',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 mesiacov',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 mesiacov',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 mesiacov',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10  mesiacov',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 mesiacov',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 rok',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Zmeny budú zapisované do streamu.',
      'required' => 'Pole bude povinné. Nemôže byť prázdne.',
      'default' => 'Hodnota bude pri vytváraní predvolene nastavená.',
      'min' => 'Min. akceptovateľná hodnota.',
      'max' => 'Max. akceptovateľná hodnota.',
      'seeMoreDisabled' => 'Ak nie je označené, tak dlhý text bude skrátený.',
      'lengthOfCut' => 'Aký dlhý môže byť text pretým ako bude orezaný.',
      'maxLength' => 'Max. akceptovateľná dĺžka textu.',
      'before' => 'Hodnota dátumu by nemala byť pred dátumom v špecifikovanom poli',
      'after' => 'Hodnota dátumu by nemala byť po dátume v špecifikovanom poli',
      'readOnly' => 'Hodnota poľa nemôže byť špecifikovaná používateľom. Ale môže byť vypočítaná vzorcom.',
      'maxFileSize' => 'Ak prázdne alebo 0, tak bez limitu',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Ulica',
        'city' => 'Obec',
        'state' => 'Štát',
        'country' => 'Krajina',
        'postalCode' => 'PSČ',
        'map' => 'Mapa',
      ),
      'personName' => 
      array (
        'salutation' => 'Oslovenie',
        'first' => 'Prvý',
        'last' => 'Posledný',
      ),
      'currency' => 
      array (
        'converted' => '(Konvertovaný)',
        'currency' => '(Mena)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Dátum',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Používateľ',
      'Team' => 'Tím',
      'Role' => 'Rola',
      'EmailTemplate' => 'Šablóna emailu',
      'EmailTemplateCategory' => 'Kategórie emailových šablón',
      'EmailAccount' => 'Osobný emailový účet',
      'EmailAccountScope' => 'Osobný emailový účet',
      'OutboundEmail' => 'Odchádzajúci email',
      'ScheduledJob' => 'Naplánovaný beh',
      'ExternalAccount' => 'Externý účet',
      'Extension' => 'Rozšírenie',
      'Dashboard' => 'Plocha',
      'InboundEmail' => 'Skupinový emailový účet',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Šablóna',
      'Job' => 'Beh',
      'EmailFilter' => 'Emailový filter',
      'Portal' => 'Portál',
      'PortalRole' => 'Portálová rola',
      'Attachment' => 'Príloha',
      'EmailFolder' => 'Poštový priečinok',
      'PortalUser' => 'Portálový používateľ',
      'ScheduledJobLogRecord' => 'Záznam protokolu plánovaného behu',
      'PasswordChangeRequest' => 'Požiadavka na zmenu hesla',
      'ActionHistoryRecord' => 'Záznam histórie akcií',
      'AuthToken' => 'Auth token',
      'UniqueId' => 'Jedinečné ID',
      'LastViewed' => 'Naposledy videné',
      'Settings' => 'Nastavenia',
      'FieldManager' => 'Správca polí',
      'Integration' => 'Integrácia',
      'LayoutManager' => 'Správca rozmiestnenia',
      'EntityManager' => 'Správca entít',
      'Export' => 'Export',
      'DynamicLogic' => 'Dynamická logika',
      'DashletOptions' => 'Možnosti dashletov',
      'Admin' => 'Admin',
      'Global' => 'Globálny',
      'Preferences' => 'Možnosti',
      'EmailAddress' => 'Emailová adresa',
      'PhoneNumber' => 'Telefónne číslo',
      'AuthLogRecord' => 'Záznam Auth protokolu',
      'AuthFailLogRecord' => 'Záznam Auth chybového protokolu',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Účet',
      'Contact' => 'Kontakt',
      'Lead' => 'Stopa',
      'Target' => 'Cieľ',
      'Opportunity' => 'Príležitosť',
      'Meeting' => 'Stretnutie',
      'Calendar' => 'Kalendár',
      'Call' => 'Hovor',
      'Task' => 'Úloha',
      'Case' => 'Prípad',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Priečinok dokumentov',
      'Campaign' => 'Kampaň',
      'TargetList' => 'Zoznam cieľov',
      'MassEmail' => 'Hromadný email',
      'EmailQueueItem' => 'Položka emailovej fronty',
      'CampaignTrackingUrl' => 'Sledovacia URL',
      'Activities' => 'Aktivity',
      'KnowledgeBaseArticle' => 'Článok znalostnej databázy',
      'KnowledgeBaseCategory' => 'Kategória znalostnej databázy',
      'CampaignLogRecord' => 'Záznam protokolu kampane',
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
      'Email' => 'Emaily',
      'User' => 'Používatelia',
      'Team' => 'Tímy',
      'Role' => 'Role',
      'EmailTemplate' => 'Emailové šablóny',
      'EmailTemplateCategory' => 'Kategórie emailových šablón',
      'EmailAccount' => 'Osobné emailové účty',
      'EmailAccountScope' => 'Osobné emailové účty',
      'OutboundEmail' => 'Odchádzajúce emaily',
      'ScheduledJob' => 'Naplánované behy',
      'ExternalAccount' => 'Externé účty',
      'Extension' => 'Rozšírenia',
      'Dashboard' => 'Plocha',
      'InboundEmail' => 'Skupinové emailové účty',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Šablóny',
      'Job' => 'Behy',
      'EmailFilter' => 'Emailové filtre',
      'Portal' => 'Portály',
      'PortalRole' => 'Portálové role',
      'Attachment' => 'Prílohy',
      'EmailFolder' => 'Emailové priečinky',
      'PortalUser' => 'Portáloví používatelia',
      'ScheduledJobLogRecord' => 'Záznamy protokolu plánovaného behu',
      'PasswordChangeRequest' => 'Požiadavky na zmenu hesla',
      'ActionHistoryRecord' => 'História akcií',
      'AuthToken' => 'Auth tokeny',
      'UniqueId' => 'Jedinečné IDs',
      'LastViewed' => 'Naposledy videné',
      'AuthLogRecord' => 'Auth protokol',
      'AuthFailLogRecord' => 'Auth chybový protokol',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Účty',
      'Contact' => 'Kontakty',
      'Lead' => 'Stopy',
      'Target' => 'Ciele',
      'Opportunity' => 'Príležitosti',
      'Meeting' => 'Stretnutia',
      'Calendar' => 'Kalendár',
      'Call' => 'Hovory',
      'Task' => 'Úlohy',
      'Case' => 'Prípady',
      'Document' => 'Dokumenty',
      'DocumentFolder' => 'Priečinky dokumentov',
      'Campaign' => 'Kampane',
      'TargetList' => 'Cieľové zoznamy',
      'MassEmail' => 'Hromadné emaily',
      'EmailQueueItem' => 'Položky emailovej fronty',
      'CampaignTrackingUrl' => 'Sledovacie URLs',
      'Activities' => 'Aktivity',
      'KnowledgeBaseArticle' => 'Databáza znalostí',
      'KnowledgeBaseCategory' => 'Kategórie databázy znalostí',
      'CampaignLogRecord' => 'Záznamy protokolu kampane',
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
      'Misc' => 'Rôzne',
      'Merge' => 'Zlúčiť',
      'None' => 'Žiadne',
      'Home' => 'Domov',
      'by' => 'od',
      'Saved' => 'Uložené',
      'Error' => 'Chyba',
      'Select' => 'Vybrať',
      'Not valid' => 'Nesprávny',
      'Please wait...' => 'Prosím čakajte ...',
      'Please wait' => 'Prosím čakajte',
      'Loading...' => 'Sťahovanie ...',
      'Uploading...' => 'Nahrávanie ...',
      'Sending...' => 'Posielanie ...',
      'Merging...' => 'Zlučovanie ...',
      'Merged' => 'Zlúčené',
      'Removed' => 'Odstránené',
      'Posted' => 'Odoslané',
      'Linked' => 'Zlinkované',
      'Unlinked' => 'Odlinkované',
      'Done' => 'Hotovo',
      'Access denied' => 'Prístup zamietnutý',
      'Not found' => 'Nenájdené',
      'Access' => 'Prístup',
      'Are you sure?' => 'Si si istý?',
      'Record has been removed' => 'Záznam bol odstránený',
      'Wrong username/password' => 'Nesprávne používateľské meno/heslo',
      'Post cannot be empty' => 'Príspevok nemôže byť prázdny',
      'Removing...' => 'Odstraňujem ...',
      'Unlinking...' => 'Ruším linku ...',
      'Posting...' => 'Posielam ...',
      'Username can not be empty!' => 'Používateľské meno nemôže byť prázdne!',
      'Cache is not enabled' => 'Vyrovnávacia pamäť nie je povolená',
      'Cache has been cleared' => 'Vyrovnávacia pamäť bola vymazaná',
      'Rebuild has been done' => 'Rekompilácia bola dokončená',
      'Return to Application' => 'Návrat do aplikácie',
      'Saving...' => 'Ukladám ...',
      'Modified' => 'Zmenené',
      'Created' => 'Vytvorené',
      'Create' => 'Vytvoriť',
      'create' => 'vytvoriť',
      'Overview' => 'Prehľad',
      'Details' => 'Detaily',
      'Add Field' => 'Pridať pole',
      'Add Dashlet' => 'Pridať Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Zmeniť plochu',
      'Add' => 'Pridať',
      'Add Item' => 'Pridať položku',
      'Reset' => 'Reset',
      'Menu' => 'Ponuka',
      'More' => 'Viac',
      'Search' => 'Hľadať',
      'Only My' => 'Len moje',
      'Open' => 'Otvoriť',
      'Admin' => 'Admin',
      'About' => 'O',
      'Refresh' => 'Obnoviť',
      'Remove' => 'Odstrániť',
      'Options' => 'Možnosti',
      'Username' => 'Používateľské meno',
      'Password' => 'Heslo',
      'Login' => 'Prihlásiť',
      'Log Out' => 'Odhlásiť',
      'Preferences' => 'Nastavenia',
      'State' => 'Stav',
      'Street' => 'Ulica',
      'Country' => 'Krajina',
      'City' => 'Mesto',
      'PostalCode' => 'PSČ',
      'Followed' => 'Sledované',
      'Follow' => 'Sledovať',
      'Followers' => 'Sledujúci',
      'Clear Local Cache' => 'Zmazať lokálnu vyrovnávaciu pamäť',
      'Actions' => 'Akcie',
      'Delete' => 'Zmazať',
      'Update' => 'Aktualizovať',
      'Save' => 'Uložiť',
      'Edit' => 'Zmeniť',
      'View' => 'Prezerať',
      'Cancel' => 'Zrušiť',
      'Apply' => 'Použiť',
      'Unlink' => 'Odlinkovať',
      'Mass Update' => 'Hromadná zmena',
      'Export' => 'Export',
      'No Data' => 'Žiadne dáta',
      'No Access' => 'Žiadny prístup',
      'All' => 'Všetko',
      'Active' => 'Aktívne',
      'Inactive' => 'Neaktívne',
      'Write your comment here' => 'Sem zapíš svoj komentár',
      'Post' => 'Príspevok',
      'Stream' => 'Stream',
      'Show more' => 'Ukázať viac',
      'Dashlet Options' => 'Možnosti Dashletu',
      'Full Form' => 'Celý formulár',
      'Insert' => 'Vložiť',
      'Person' => 'Osoba',
      'First Name' => 'Prvé meno',
      'Last Name' => 'Priezvisko',
      'Original' => 'Originál',
      'You' => 'Ty',
      'you' => 'ty',
      'change' => 'zmeniť',
      'Change' => 'Zmeniť',
      'Primary' => 'Primárne',
      'Save Filter' => 'Uložiť filter',
      'Administration' => 'Správa',
      'Run Import' => 'Spustiť import',
      'Duplicate' => 'Duplikát',
      'Notifications' => 'Upozornenia',
      'Mark all read' => 'Označiť všetko ako prečítané',
      'See more' => 'Vidieť viac',
      'Today' => 'Dnes',
      'Tomorrow' => 'Zajtra',
      'Yesterday' => 'Včera',
      'Submit' => 'Odoslať',
      'Close' => 'Zavrieť',
      'Yes' => 'Áno',
      'No' => 'Nie',
      'Select All Results' => 'Vybrať všetky výsledky',
      'Value' => 'Hodnota',
      'Current version' => 'Súčasná verzia',
      'List View' => 'Zobrazenie zoznamu',
      'Tree View' => 'Zobrazenie stromu',
      'Unlink All' => 'Odliknovať všetko',
      'Total' => 'Spolu',
      'Print to PDF' => 'Tlačiť do PDF',
      'Default' => 'Predvolený',
      'Number' => 'Počet',
      'From' => 'Od',
      'To' => 'Komu',
      'Create Post' => 'Vytvoriť príspevok',
      'Previous Entry' => 'Predošlá položka',
      'Next Entry' => 'Ďalšia položka',
      'View List' => 'Zobraziť zoznam',
      'Attach File' => 'Pripojiť súbor',
      'Skip' => 'Preskočiť',
      'Attribute' => 'Atribút',
      'Function' => 'Funkcia',
      'Self-Assign' => 'Samopriradenie',
      'Self-Assigned' => 'Samopriradený',
      'Expand' => 'Rozbaliť',
      'Collapse' => 'Zbaliť',
      'New notifications' => 'Nové upozornenia',
      'Manage Categories' => 'Spravovať kategórie',
      'Manage Folders' => 'Spravovať priečinky',
      'Convert to' => 'Konvertovať na',
      'View Personal Data' => 'Prezerať osobné dáta',
      'Personal Data' => 'Osobné dáta',
      'Erase' => 'Vymazať',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => 'Vytvorit prichádzajúci email',
      'Activities' => 'Aktivity',
      'History' => 'História',
      'Attendees' => 'Zúčastnení',
      'Schedule Meeting' => 'Naplánovať stretnutie',
      'Schedule Call' => 'Naplánovať hovor',
      'Compose Email' => 'Zostaviť email',
      'Log Meeting' => 'Zápis zo stretnutia',
      'Log Call' => 'Zápis hovoru',
      'Archive Email' => 'Archivovať email',
      'Create Task' => 'Vytvoriť úlohu',
      'Tasks' => 'Úlohy',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Čakajte prosím ...',
      'posting' => 'Odosielam ...',
      'loading' => 'Nahrávanie...',
      'saving' => 'Ukladanie...',
      'confirmLeaveOutMessage' => 'Si si istý, že chceš opustiť formulár?',
      'notModified' => 'Nezmenil si záznam',
      'duplicate' => 'Záznam, ktorý vytvárate by už mohol existovať',
      'dropToAttach' => 'Pustením pripoj',
      'fieldIsRequired' => '{field} je povinné',
      'fieldShouldBeEmail' => '{field} by ma byť platný email',
      'fieldShouldBeFloat' => '{field} by mal byt platný Float',
      'fieldShouldBeInt' => '{field} by mal byť platné celé číslo',
      'fieldShouldBeDate' => '{field} má byť platný dátum',
      'fieldShouldBeDatetime' => '{field} má byť platný dátum a čas',
      'fieldShouldAfter' => '{field} by malo byť až za {otherField}',
      'fieldShouldBefore' => '{field} by malo byť pred {otherField}',
      'fieldShouldBeBetween' => '{field} by malo byť medzi {min} a {max}',
      'fieldShouldBeLess' => '{field} by nemalo byť väčšie ako {value}',
      'fieldShouldBeGreater' => '{field} by nemalo byť menšie ako {value}',
      'fieldBadPasswordConfirm' => '{field} nebolo korektne potvrdené',
      'fieldMaxFileSizeError' => 'Súbor by nemal prekročiť {max} MB',
      'fieldIsUploading' => 'Prebieha nahrávanie',
      'resetPreferencesDone' => 'Nastavenia boli resetnuté do prednastavených hodnôt',
      'confirmation' => 'Si si istý?',
      'unlinkAllConfirmation' => 'Si si istý, že chces odlinkovať všetky súvisiace záznamy?',
      'resetPreferencesConfirmation' => 'Si si istý, že chceš resetnúť nastavenia na prednastavené hodnoty?',
      'removeRecordConfirmation' => 'Si si istý, že chceš odstániť záznam?',
      'unlinkRecordConfirmation' => 'Si si istý, že chceš odlinkovať súvisiaci záznam?',
      'removeSelectedRecordsConfirmation' => 'Si si istý, že chceš odstrániť vybrané záznamy?',
      'massUpdateResult' => '{count} záznamov bolo zmenených',
      'massUpdateResultSingle' => '{count}. záznam bol zmenený',
      'noRecordsUpdated' => 'Žiadne záznamy neboli zmenené',
      'massRemoveResult' => '{count} záznamov bolo odstránených',
      'massRemoveResultSingle' => '{count}. záznam bol odstránený',
      'noRecordsRemoved' => 'Žiadne záznamy neboli odstránené',
      'clickToRefresh' => 'Kliknutím obnoviť',
      'streamPostInfo' => 'Zapíšte <strong>@username</strong> ak chcete spomenúť používateľa v príspevku.

Dostupná markdown syntax:
`<code>code</code>`
```<code>viacriadkový kód</code>```
**<strong>tučný text</strong>**
*<em>zvýraznený text</em>*
~~<del>zmazaný text</del>~~
> citát
[link text](url)',
      'writeYourCommentHere' => 'Zapíš sem svoj komentár',
      'writeMessageToUser' => 'Napíš správu používateľovi {user}',
      'writeMessageToSelf' => 'Napíšte správu do svojho streamu',
      'typeAndPressEnter' => 'Napíš a stlač enter',
      'checkForNewNotifications' => 'Kontrola nových upozornení',
      'checkForNewNotes' => 'Skontrolovať aktualizácie v streame',
      'internalPost' => 'Príspevok bude viditeľný len pre interných používateľov',
      'internalPostTitle' => 'Príspevok je viditeľný len pre interných používateľov',
      'done' => 'Hotovo',
      'confirmMassFollow' => 'Ste si istý, že chcete sledovať vybrané záznamy?',
      'confirmMassUnfollow' => 'Ste si istý, že nechcete už ďalej sledovať vybrané záznamy?',
      'massFollowResult' => '{count} záznamov je teraz sledovaných',
      'massUnfollowResult' => '{count} záznamov teraz nie je sledovaných',
      'massFollowResultSingle' => '{count} záznam je teraz sledovaný',
      'massUnfollowResultSingle' => '{count} záznam teraz nie je sledovaný',
      'massFollowZeroResult' => 'Nič sa nesledovalo',
      'massUnfollowZeroResult' => 'Nič sa nestalo nesledované',
      'erasePersonalDataConfirmation' => 'Označené polia budú zmazané natrvalo. Ste si istý?',
      'massPrintPdfMaxCountError' => 'Nedá sa tlačiť viac ako {maxCount}  zázanmov',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Len moje',
      'followed' => 'Sledované',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Sledované',
      'all' => 'Všetko',
    ),
    'massActions' => 
    array (
      'remove' => 'Odstrániť',
      'merge' => 'Zlúčiť',
      'massUpdate' => 'Hromadná zmena',
      'export' => 'Export',
      'follow' => 'Sledovať',
      'unfollow' => 'Nesledovať',
      'convertCurrency' => 'Konvertovať menu',
      'printPdf' => 'Tlač do PDF',
    ),
    'fields' => 
    array (
      'name' => 'Názov',
      'firstName' => 'Prvé meno',
      'lastName' => 'Priezvisko',
      'salutationName' => 'Oslovenie',
      'assignedUser' => 'Priradený používateľ',
      'assignedUsers' => 'Priradení používatelia',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Dáta emailovej adresy',
      'emailAddressIsOptedOut' => 'Emailová adresa je odregistrovaná',
      'assignedUserName' => 'Priradené používateľské meno',
      'teams' => 'Tímy',
      'createdAt' => 'Vytvorené',
      'modifiedAt' => 'Zmenené',
      'createdBy' => 'Vytvoril',
      'modifiedBy' => 'Zmenil',
      'description' => 'Popis',
      'address' => 'Adresa',
      'phoneNumber' => 'Telefón',
      'phoneNumberMobile' => 'Telefón (mobilný)',
      'phoneNumberHome' => 'Telefón (Domov)',
      'phoneNumberFax' => 'Telefón (Fax)',
      'phoneNumberOffice' => 'Telefón (Kancelária)',
      'phoneNumberOther' => 'Telefón (Iné)',
      'phoneNumberData' => 'Dáta telefónneho čísla',
      'order' => 'Poradie',
      'parent' => 'Rodič',
      'children' => 'Potomkovia',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Typ',
      'names' => 'Názvy',
      'targetListIsOptedOut' => 'Je vylúčný z odberu (Cieľový zoznam)',
      'billingAddressCity' => 'Obec',
      'billingAddressCountry' => 'Krajina',
      'billingAddressPostalCode' => 'PSČ',
      'billingAddressState' => 'Štát',
      'billingAddressStreet' => 'Ulica',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Obec',
      'addressStreet' => 'Ulica',
      'addressCountry' => 'Krajina',
      'addressState' => 'Štát',
      'addressPostalCode' => 'PSČ',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Obec (Doručovacia)',
      'shippingAddressStreet' => 'Ulica (Doručovacia)',
      'shippingAddressCountry' => 'Krajina (Doručovacia)',
      'shippingAddressState' => 'Štát (Doručovacia)',
      'shippingAddressPostalCode' => 'PSČ (Doručovacia)',
      'shippingAddressMap' => 'Mapa (Doručovacia)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Priradený používateľ',
      'createdBy' => 'Vytvoril',
      'modifiedBy' => 'Zmenil',
      'team' => 'Tím',
      'roles' => 'Role',
      'teams' => 'Tímy',
      'users' => 'Používatelia',
      'parent' => 'Rodič',
      'children' => 'Potomkovia',
      'contacts' => 'Kontakty',
      'opportunities' => 'Príležitosti',
      'leads' => 'Stopy',
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'emails' => 'Emaily',
      'accounts' => 'Účty',
      'cases' => 'Prípady',
      'documents' => 'Dokumemty',
      'account' => 'Účty',
      'opportunity' => 'Príležitosti',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Emails' => 'Moja doručená pošta',
      'Records' => 'Zoznam záznamov',
      'Leads' => 'Moje stopy',
      'Opportunities' => 'Moje príležitosti',
      'Tasks' => 'Moje úlohy',
      'Cases' => 'Moje prípady',
      'Calendar' => 'Kalendár',
      'Calls' => 'Moje hovory',
      'Meetings' => 'Moje stretnutia',
      'OpportunitiesByStage' => 'Príležitosti podľa fázy',
      'OpportunitiesByLeadSource' => 'Príležitosti podľa zdroja stopy',
      'SalesByMonth' => 'Predaje po mesiacoch',
      'SalesPipeline' => 'Predajná reťaz',
      'Activities' => 'Moje aktivity',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} ti bola priradená',
      'emailReceived' => 'Email prijatý od {from}',
      'entityRemoved' => '{user} odstránil {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} napísal do {entityType} {entity}',
      'attach' => '{user} pripojil na {entityType} {entity}
',
      'status' => '{user} zaktualizoval {field} v {entityType} {entity}',
      'update' => '{user} zaktualizoval {entityType} {entity}',
      'postTargetTeam' => '{user} napísal do {target} tímu',
      'postTargetTeams' => '{user} napísal do {target} tímov',
      'postTargetPortal' => '{user} napísal do {target} portálu',
      'postTargetPortals' => '
{user} napísal do {target} portálov',
      'postTarget' => '{user} napísal do {target}',
      'postTargetYou' => '{user} Vám napísal',
      'postTargetYouAndOthers' => '{user} napísal do {target} a Vám',
      'postTargetAll' => '{user} napísal všetkým',
      'postTargetSelf' => '{user} sám sebe',
      'postTargetSelfAndOthers' => '{user} zapísal do {target} a sebe',
      'mentionInPost' => '{user} spomenul {mentioned} v {entityType} {entity}',
      'mentionYouInPost' => '{user} Vás spomenul {entityType} {entity}',
      'mentionInPostTarget' => '{user} spomenul {mentioned} in príspevku',
      'mentionYouInPostTarget' => '{user} Vás spomenul v príspevku do {target}',
      'mentionYouInPostTargetAll' => '{user} Vás spomenul v príspevku pre všetkých',
      'mentionYouInPostTargetNoTarget' => '{user} Vás spomenul v príspevku',
      'create' => '{user} vytvoril {entityType} {entity}',
      'createThis' => '{user} vytvoril tento {entityType}',
      'createAssignedThis' => '{user} vytvoril tento {entityType} priradený k {assignee}',
      'createAssigned' => '{user} vytvoril {entityType} {entity} priradený k {assignee}',
      'createAssignedYou' => '{user} vytvoril {entityType} {entity} priradný Vám',
      'createAssignedThisSelf' => '{user} vytvoril tento {entityType} sebe pridelený',
      'createAssignedSelf' => '{user} vytvoril tento {entityType} {entity} sebe pridelený',
      'assign' => '{user} priradil {entityType} {entity} k {assignee}',
      'assignThis' => '{user} priradil tento {entityType} k {assignee}',
      'assignYou' => '{user} pridelil {entityType} {entity} Vám',
      'assignThisVoid' => '{user} zrušil priradenie tohoto {entityType}',
      'assignVoid' => '{user} zrušil priradenie {entityType} {entity}',
      'assignThisSelf' => '{user} priradil sebe tento {entityType}',
      'assignSelf' => '{user} priradil sebe {entityType} {entity}',
      'postThis' => '{user} napísal príspevok',
      'attachThis' => '{user} pripojil',
      'statusThis' => '{user} aktualizoval {field}',
      'updateThis' => '{user} aktualizoval tento {entityType}',
      'createRelatedThis' => '{user} vytvoril {relatedEntityType} {relatedEntity} súvisiaci s týmto {entityType}',
      'createRelated' => '{user} vytvoril {relatedEntityType} {relatedEntity} súvisiaci s {entityType} {entity}',
      'relate' => '{user} zlinkoval {relatedEntityType} {relatedEntity} s {entityType} {entity}',
      'relateThis' => '{user} zlinkoval {relatedEntityType} {relatedEntity} s týmto {entityType}',
      'emailReceivedFromThis' => 'Email prijatý od {from}',
      'emailReceivedInitialFromThis' => 'Email prijatý od {from}, tento {entityType} vytvorený',
      'emailReceivedThis' => 'Email prijatý',
      'emailReceivedInitialThis' => 'Email prijatý, tento {entityType} vytvorený',
      'emailReceivedFrom' => 'Email prijatý od {from}, súvisiaci s {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email prijatý od {from}, {entityType} {entity} vytvorený',
      'emailReceived' => 'Email prijatý súvisiaci s {entityType} {entity}',
      'emailReceivedInitial' => 'Email prijatý: {entityType} {entity} vytvorený',
      'emailReceivedInitialFrom' => 'Email prijatý od {from}, {entityType} {entity} vytvorený',
      'emailSent' => '{by} odoslal email súvisiaci s {entityType} {entity}',
      'emailSentThis' => '{by} odoslal email',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} napísal do {target} a sebe',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} napísala do {target} a sebe',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Január',
        1 => 'Február',
        2 => 'Marec',
        3 => 'Apríl',
        4 => 'Máj',
        5 => 'Jún',
        6 => 'Júl',
        7 => 'August',
        8 => 'September',
        9 => 'Október',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Máj',
        5 => 'Jún',
        6 => 'Júl',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Nedeľa',
        1 => 'Pondelok',
        2 => 'Utorok',
        3 => 'Streda',
        4 => 'Štvrtok',
        5 => 'Piatok',
        6 => 'Sobota',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Ned',
        1 => 'Pon',
        2 => 'Uto',
        3 => 'Str',
        4 => 'Štv',
        5 => 'Pia',
        6 => 'Sob',
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
      'd' => 'd',
      'h' => 'h',
      'm' => 'm',
      's' => 's',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Pán',
        'Mrs.' => 'Pani',
        'Ms.' => 'Slečna',
        'Dr.' => 'Dr.',
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
        'sk_SK' => 'Slovensky',
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
        'on' => 'V deň',
        'notOn' => 'Nie v deň',
        'after' => 'Po',
        'before' => 'Pred',
        'between' => 'Medzi',
        'today' => 'Dnes',
        'past' => 'Minulosť',
        'future' => 'Budúcnosť',
        'currentMonth' => 'Tento mesiac',
        'lastMonth' => 'Minulý mesiac',
        'nextMonth' => 'Ďalší mesiac',
        'currentQuarter' => 'Tento štvrťrok',
        'lastQuarter' => 'Minulý štvrťrok',
        'currentYear' => 'Tento rok',
        'lastYear' => 'Minulý rok',
        'lastSevenDays' => 'Posledných 7 dní',
        'lastXDays' => 'Posledných X dní',
        'nextXDays' => 'Ďalších X dní',
        'ever' => 'Vždy',
        'isEmpty' => 'Je prázdny',
        'olderThanXDays' => 'Starší ako X dní',
        'afterXDays' => 'Po X dňoch',
      ),
      'searchRanges' => 
      array (
        'is' => 'Je',
        'isEmpty' => 'Je prázdny',
        'isNotEmpty' => 'Nie je prázdny',
        'isOneOf' => 'Hociktorý z',
        'isFromTeams' => 'Je z tímu',
        'isNot' => 'Nie je',
        'isNotOneOf' => 'Žiadny z',
        'anyOf' => 'Hociktorý z',
        'noneOf' => 'Žiadny z',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Rovná sa',
        'like' => 'Je ako (%)',
        'notLike' => 'Nie je podobné (%)',
        'startsWith' => 'Začína s',
        'endsWith' => 'Končí s',
        'contains' => 'Obsahuje',
        'notContains' => 'Neobsahuje',
        'isEmpty' => 'Je prázdny',
        'isNotEmpty' => 'Nie je prázdny',
        'notEquals' => 'Nerovná sa',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Rovná sa',
        'notEquals' => 'Nerovná sa',
        'greaterThan' => 'Väčší ako',
        'lessThan' => 'Menší ako',
        'greaterThanOrEquals' => 'Väčší ako alebo rovný',
        'lessThanOrEquals' => 'Menší ako alebo rovný',
        'between' => 'Medzi',
        'isEmpty' => 'Je prázdny',
        'isNotEmpty' => 'Nie je prázdny',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Žiadny',
        '0.5' => '30 sekúnd',
        1 => '1 minúta',
        2 => '2 minúty',
        5 => '5 minút',
        10 => '10 minút',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobil',
        'Office' => 'Kancelária',
        'Fax' => 'Fax',
        'Home' => 'Domov',
        'Other' => 'Iný',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Vyskakovacie okno',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Preklad nájdete tu: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Tučné',
          'italic' => 'Šikmé',
          'underline' => 'Podčiarknuté',
          'strike' => 'Prečiarknuté',
          'clear' => 'Odstrániť štýl písma',
          'height' => 'Výška čiary',
          'name' => 'Druh písma',
          'size' => 'Veľkosť písma',
        ),
        'image' => 
        array (
          'image' => 'Obrázok',
          'insert' => 'Vložiť obrázok',
          'resizeFull' => 'Zmeniť na celú',
          'resizeHalf' => 'Zmeniť na polovicu',
          'resizeQuarter' => 'Zmeniť na štvrtinu',
          'floatLeft' => 'Plávajúci vľavo',
          'floatRight' => 'Plávajúci vpravo',
          'floatNone' => 'Neplávajúci',
          'dragImageHere' => 'Potiahite obrázok sem',
          'selectFromFiles' => 'Výber zo súboru',
          'url' => 'URL obrázka',
          'remove' => 'Odstrániť obrázok',
        ),
        'link' => 
        array (
          'link' => 'Odkaz',
          'insert' => 'Vložiť odkaz',
          'unlink' => 'Odstrániť odkaz',
          'edit' => 'Zmeniť',
          'textToDisplay' => 'Text na zobrazenie',
          'url' => 'Na akú URL má odkazovať tento odkaz?',
          'openInNewWindow' => 'Otvoriť v novom okne',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Odkaz na video',
          'insert' => 'Vložiť video',
          'url' => 'URL na video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, alebo DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabuľka',
        ),
        'hr' => 
        array (
          'insert' => 'Vložiť horizontálne pravítko',
        ),
        'style' => 
        array (
          'style' => 'Štýl',
          'normal' => 'Normálny',
          'blockquote' => 'Citát',
          'pre' => 'Kód',
          'h1' => 'Hlavička 1',
          'h2' => 'Hlavička 2',
          'h3' => 'Hlavička 3',
          'h4' => 'Hlavička 4',
          'h5' => 'Hlavička 5',
          'h6' => 'Hlavička 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Neusporiadaný zoznam',
          'ordered' => 'Usporiadaný zoznam',
        ),
        'options' => 
        array (
          'help' => 'Pomoc',
          'fullscreen' => 'Celá obrazovka',
          'codeview' => 'Náhľad kódu',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Odstavec',
          'outdent' => 'Prisadiť',
          'indent' => 'Odsadiť',
          'left' => 'Zarovnať vľavo',
          'center' => 'Zarovnať na stred',
          'right' => 'Zarovnať vpravo',
          'justify' => 'Zarovnať celok',
        ),
        'color' => 
        array (
          'recent' => 'Posledná farba',
          'more' => 'Viac farieb',
          'background' => 'Farba pozadia',
          'foreground' => 'Farba písma',
          'transparent' => 'Priesvitný',
          'setTransparent' => 'Nastaviť priesvitný',
          'reset' => 'Reset',
          'resetToDefault' => 'Reset do východzích nastavení',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Klávesové skratky',
          'close' => 'Zavrieť',
          'textFormatting' => 'Formátovanie textu',
          'action' => 'Akcia',
          'paragraphFormatting' => 'Formátovanie odstavca',
          'documentStyle' => 'Štýl dokumentu',
        ),
        'history' => 
        array (
          'undo' => 'Vrátiť',
          'redo' => 'Znova',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'Zoznam',
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
      'HazyblueVertical' => 'Vetical Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Odvolať import',
      'Return to Import' => 'Návrat do importu',
      'Run Import' => 'Spustiť import',
      'Back' => 'Späť',
      'Field Mapping' => 'Mapovanie polí',
      'Default Values' => 'Predvolené hodnoty',
      'Add Field' => 'Pridať pole',
      'Created' => 'Vytvorený',
      'Updated' => 'Zmenený',
      'Result' => 'Výsledok',
      'Show records' => 'Zobraziť záznamy',
      'Remove Duplicates' => 'Odstrániť duplikáty',
      'importedCount' => 'Importované (počet)',
      'duplicateCount' => 'Duplikáty (počet)',
      'updatedCount' => 'Zmenené (počet)',
      'Create Only' => 'Len vytvoriť',
      'Create and Update' => 'Vytvoriť a zmeniť',
      'Update Only' => 'Len zmeniť',
      'Update by' => 'Zmenil',
      'Set as Not Duplicate' => 'Nastav ako neduplicitný',
      'File (CSV)' => 'Súbor (CSV)',
      'First Row Value' => 'Hodnota prvého riadku',
      'Skip' => 'Preskočiť',
      'Header Row Value' => 'Hodnota hlavičkového riadku',
      'Field' => 'Pole',
      'What to Import?' => 'Čo importovať?',
      'Entity Type' => 'Typ entity',
      'What to do?' => 'Čo robiť?',
      'Properties' => 'Vlastnosti',
      'Header Row' => 'Hlavičkový riadok',
      'Person Name Format' => 'Formát mena osoby',
      'John Smith' => 'Jozef Kováč',
      'Smith John' => 'Kováč Jozef',
      'Smith, John' => 'Kováč, Jozef',
      'Field Delimiter' => 'Oddeľovač polí',
      'Date Format' => 'Formát dátumu',
      'Decimal Mark' => 'Oddeľovač desatinných miest',
      'Text Qualifier' => 'Kvalifikátor textu',
      'Time Format' => 'Formát času',
      'Currency' => 'Mena',
      'Preview' => 'Náhľad',
      'Next' => 'Ďalší',
      'Step 1' => 'Krok 1',
      'Step 2' => 'Krok 2',
      'Double Quote' => 'Dvojité úvodzovky',
      'Single Quote' => 'Apostrof',
      'Imported' => 'Importované',
      'Duplicates' => 'Duplikáty',
      'Skip searching for duplicates' => 'Preskoč hľadanie duplikátov',
      'Timezone' => 'Časová zóna',
      'Remove Import Log' => 'Odstrániť protokol importu',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Malo by byť kódované v UTF-8',
      'duplicatesRemoved' => 'Duplikáty odstránené',
      'inIdle' => 'Vykonať v slabej prevádzke (pre veľké dáta; cez cron)',
      'revert' => 'Toto odstráni všetky importované záznamy natrvalo.',
      'removeDuplicates' => 'Toto navždy odstráni všetky naimportované záznamy, ktoré boli identofikované ako duplikáty.',
      'confirmRevert' => 'Toto odstráni všetky importované záznamy natrvalo. Ste si istý?',
      'confirmRemoveDuplicates' => 'Toto navždy odstráni všetky naimportované záznamy, ktoré boli identofikované ako duplikáty. Ste si istý?',
      'confirmRemoveImportLog' => 'Toto odstráni protokol importu. Všetky naimportované záznamy zostanú zachované. Nebudte mať možnosť vrátiť výsledky importu. Ste si istý?',
      'removeImportLog' => 'Toto odstráni protokol importu. Všetky importované záznamy budú zachované. Použite to, ak ste si istý, že import je v poriadku.',
    ),
    'fields' => 
    array (
      'file' => 'Súbor',
      'entityType' => 'Typ entity',
      'imported' => 'Importované záznamy',
      'duplicates' => 'Duplicitné záznamy',
      'updated' => 'Zmenené záznamy',
      'status' => 'Stav',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Chybný',
        'In Process' => 'V procese',
        'Complete' => 'Dokončený',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'emailAddress' => 'Emailová adresa',
      'team' => 'Cieľový tím',
      'status' => 'Stav',
      'assignToUser' => 'Priradiť používateľovi',
      'host' => 'Host',
      'username' => 'Používateľské meno',
      'password' => 'Heslo',
      'port' => 'Port',
      'monitoredFolders' => 'Monitorované priečinky',
      'trashFolder' => 'Priečinok na smeti',
      'ssl' => 'SSL',
      'createCase' => 'Vytvoriť prípad',
      'reply' => 'Auto odpoveď',
      'caseDistribution' => 'Distribúcia prípadu',
      'replyEmailTemplate' => 'Šablóna na odpoveď',
      'replyFromAddress' => 'Odpovedať z adresy',
      'replyToAddress' => 'Odpovedať na adresu',
      'replyFromName' => 'Odpovedať pod menom',
      'targetUserPosition' => 'Cieľová užívateľská pozícia',
      'fetchSince' => 'Načítať od',
      'addAllTeamUsers' => 'Pre všetkých používateľov tímu',
      'teams' => 'Tímy',
      'sentFolder' => 'Odoslaný priečinok',
      'storeSentEmails' => 'Uložiť odoslané emaily',
      'useImap' => 'Načítať emaily',
      'useSmtp' => 'Použiť SMTP',
      'smtpHost' => 'SMTP server',
      'smtpPort' => 'SMTP port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP bezpečnosť',
      'smtpUsername' => 'SMTP používateľské meno',
      'smtpPassword' => 'SMTP heslo',
      'fromName' => 'Meno odosielateľa',
      'smtpIsShared' => 'SMTP je zdieľané',
      'smtpIsForMassEmail' => 'SMTP je pre hromadné emaily',
    ),
    'tooltips' => 
    array (
      'reply' => 'Upozorniť odosielateľov, že ich emaily boli prijaté.

Len jeden mail bude poslaný určitému adresátovi počas nejakého časového úseku, aby sa zabránilo zacykleniu.',
      'createCase' => 'Automaticky vytvoriť prípad z prichádzajúceho mailu',
      'replyToAddress' => 'Definujte emailovú adresu tejto emailovej schránky aby odpovede prišli sem.',
      'caseDistribution' => 'Ako budú prípady priradené. Priradené priamo použivateľovi alebo tímu.',
      'assignToUser' => 'Používateľ, ktorému budú priradené prípady.',
      'team' => 'Tím, ktorému budú priradené prípady.',
      'teams' => 'Tímy, ktorým budú priradené emaily.',
      'targetUserPosition' => 'Používatelia s danou pozíciou budú distribuované s prípadmi.',
      'addAllTeamUsers' => 'Emaily sa objavia v doručenej pošte všetkých používateľov špecifikovaného tímu.',
      'monitoredFolders' => 'Viaceré priečinky majú byť oddelené čiarkou.',
      'smtpIsShared' => 'Ak je označené, potom budú používatelia môcť posielať emaily pomocou tohoto SMTP. Dostupnosť je riadená rolami cez práva skupinového emailového účtu.',
      'smtpIsForMassEmail' => 'Ak je označené, potom SMTP bude k dispozícii pre hromadné emaily.',
      'storeSentEmails' => 'Odoslané emaily budú uložené na serveri IMAP.',
    ),
    'links' => 
    array (
      'filters' => 'Filtre',
      'emails' => 'Emaily',
      'assignToUser' => 'Priradiť používateľovi',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
      ),
      'caseDistribution' => 
      array (
        '' => 'Žiadny',
        'Direct-Assignment' => 'Priame priradenie',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Najmenej vyťažený',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Vutvoriť emailový účet',
      'IMAP' => 'IMAP',
      'Actions' => 'Akcie',
      'Main' => 'Hlavný',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nedá sa pripojiť k IMAP serveru',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Povolený',
      'clientId' => 'ID klienta',
      'clientSecret' => 'Bezpečnostná fráza klienta',
      'redirectUri' => 'URI na presmerovanie',
      'apiKey' => 'API kľúč',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Vyberte integráciu z ponuky',
      'noIntegrations' => 'Žiadne integrácie nie sú dostupné.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Získať OAuth 2.0 prihlasovacie údaje z Google Developers Console.</b></p><p>Navštívte <a href="https://console.developers.google.com/project">Google Developers Console</a> na získanie OAuth 2.0 prihlasovacích údajov ako je Client ID a Client Secret, ktoré sú známe obom aj Google aj aplikácii EspoCRM.</p>',
      'GoogleMaps' => '<p>Získať API kľúč <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">tu</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Stav',
      'executeTime' => 'Vykonať v',
      'attempts' => 'Zostávajúce pokusy',
      'failedAttempts' => 'Zlyhané pokusy',
      'serviceName' => 'Služba',
      'method' => 'Metóda (',
      'methodName' => 'Metóda',
      'scheduledJob' => 'Naplánovaný beh',
      'scheduledJobJob' => 'Názov naplánovaného behu',
      'data' => 'Dáta',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Nerozhodnutý',
        'Success' => 'Úspešný',
        'Running' => 'Prebiehajúci',
        'Failed' => 'Chybný',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Šírka (%)',
      'link' => 'Odkaz',
      'notSortable' => 'Nezoraditeľné',
      'align' => 'Zarovnať',
      'panelName' => 'Názov panela',
      'style' => 'Štýl',
      'sticked' => 'Prilepený',
      'isLarge' => 'Veľká veľkosť písma',
      'dynamicLogicVisible' => 'Podmienky, ktoré robia panel viditeľný',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Vľavo',
        'right' => 'Vpravo',
      ),
      'style' => 
      array (
        'default' => 'Predvolený',
        'success' => 'Úspech',
        'danger' => 'Nebezpečný',
        'info' => 'Info',
        'warning' => 'Varovanie',
        'primary' => 'Primárny',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Nový panel',
      'Layout' => 'Rozmiestnenie',
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
      'post' => 'Príspevok',
      'attachments' => 'Prílohy',
      'targetType' => 'Cieľ',
      'teams' => 'Tímy',
      'users' => 'Používatelia',
      'portals' => 'Portály',
      'type' => 'Typ',
      'isGlobal' => 'Je globálny',
      'isInternal' => 'Je interný (pre interných používateľov)',
      'related' => 'Súvisiaci',
      'createdByGender' => 'Pohlavie autora',
      'data' => 'Dáta',
      'number' => 'Číslo',
    ),
    'filters' => 
    array (
      'all' => 'Všetko',
      'posts' => 'Príspevky',
      'updates' => 'Zmeny',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'mne',
        'users' => 'určitému používatelovi',
        'teams' => 'určitému tímu',
        'all' => 'všetkým interným používateľom',
        'portals' => 'portálovým používateľom',
      ),
      'type' => 
      array (
        'Post' => 'Príspevok',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Sem napíšte svoju správu',
    ),
    'links' => 
    array (
      'superParent' => 'Super rodič',
      'related' => 'Súvisiaci',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Role',
      'isActive' => 'Je aktívny',
      'isDefault' => 'Je predvolený',
      'tabList' => 'Záložkový zoznam',
      'quickCreateList' => 'Rýchle vytvorenie zoznamu',
      'companyLogo' => 'Logo',
      'theme' => 'Téma',
      'language' => 'Jazyk',
      'dashboardLayout' => 'Rozloženie plochy',
      'dateFormat' => 'Formát dátumu',
      'timeFormat' => 'Formát času',
      'timeZone' => 'Časová zóna',
      'weekStart' => 'Prvý deň týždňa',
      'defaultCurrency' => 'Predvolená mena',
      'customUrl' => 'Vlastná URL',
      'customId' => 'Vlastné ID',
    ),
    'links' => 
    array (
      'users' => 'Používatelia',
      'portalRoles' => 'Role',
      'notes' => 'Poznámky',
      'articles' => 'Články databázy znalostí',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Špecifikované portálové role budú aplikované na všetkých používateľov tohoto portálu.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Vytvoriť portál',
      'User Interface' => 'Používateľské rozhranie',
      'General' => 'Všeobecné',
      'Settings' => 'Nastavenia',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Exportovať oprávnenie',
    ),
    'links' => 
    array (
      'users' => 'Používatelia',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Definuje či portáloví používatelia majú možnosť exportovať záznamy.',
    ),
    'labels' => 
    array (
      'Access' => 'Prístup',
      'Create PortalRole' => 'Vytvoriť portálovú rolu',
      'Scope Level' => 'Úroveň rozsahu',
      'Field Level' => 'Úroveň poľa',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Vytvoriť portálového používateľa',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formát dátumu',
      'timeFormat' => 'Formát času',
      'timeZone' => 'Časová zóna',
      'weekStart' => 'Prvý deň týždňa',
      'thousandSeparator' => 'Oddeľovač tisícov',
      'decimalMark' => 'Oddeľovač desatinných miest',
      'defaultCurrency' => 'Predvolená mena',
      'currencyList' => 'Zoznam mien',
      'language' => 'Jazyk',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Bezpečnosť',
      'smtpUsername' => 'Používateľské meno',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Heslo',
      'smtpEmailAddress' => 'Emailová adresa',
      'exportDelimiter' => 'Oddeľovač exportu',
      'receiveAssignmentEmailNotifications' => 'Emailové notifikácie v okamihu priradenia',
      'receiveMentionEmailNotifications' => 'Emailové notifikácie o zmienkach v príspevkoch',
      'receiveStreamEmailNotifications' => 'Emailové notifikácie o zmenách v príspevkoch a stavoch',
      'autoFollowEntityTypeList' => 'Globálne auto-sledovanie',
      'signature' => 'Emailový podpis',
      'dashboardTabList' => 'Zoznam záložiek',
      'defaultReminders' => 'Predvolené pripomienky',
      'theme' => 'Téma',
      'useCustomTabList' => 'Prispôsobný zoznam záložiek',
      'tabList' => 'Zoznam záložiek',
      'emailReplyToAllByDefault' => 'Standardne odpovedať všetkým',
      'dashboardLayout' => 'Rozmiestnenie plochy',
      'emailReplyForceHtml' => 'Na email odpovedať v HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Nevypĺňajte priradeného používateľa pri vytváraní záznamu',
      'followEntityOnStreamPost' => 'Automaticky sledovať záznam po zápise do streamu',
      'followCreatedEntities' => 'Automaticky sledovať vytvorené záznamy',
      'followCreatedEntityTypeList' => 'Automaticky sledovať vytvorené záznamy špecifických typov entít',
      'emailUseExternalClient' => 'Použite externého emailového klienta',
      'scopeColorsDisabled' => 'Zakázať farby rozsahu',
      'tabColorsDisabled' => 'Zakázať farby záložky',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Nedeľa',
        1 => 'Pondelok',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Upozornenia',
      'User Interface' => 'Používateľské rozhranie',
      'SMTP' => 'SMTP',
      'Misc' => 'Rôzne',
      'Locale' => 'Národné nastavenia',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automaticky sledovať všetky nové záznamy (vytvorené ľubovoľným používateľom) vybraných typov entít. Aby bolo možné vidieť informáciu v streame a prijímať notifikácie o všetkých záznamoch v systéme.',
      'doNotFillAssignedUserIfNotRequired' => 'Keď vytvoríte záznam, priradený používateľ nebude vyplnený s vlastným používateľom aj keď je pole povinné.',
      'followCreatedEntities' => 'Keď vytvoríte nové záznamy, tieto budú automaticky sledované dokonca aj keď sú priradené inému používateľovi.',
      'followCreatedEntityTypeList' => 'Keď vytvoríte nové záznamy vybraného typu entity, tieto budú automaticky sledované dokonca aj keď sú priradené inému používateľovi.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'roles' => 'Role',
      'assignmentPermission' => 'Práva na priradenie',
      'userPermission' => 'Používateľské práva',
      'portalPermission' => 'Portálové práva',
      'groupEmailAccountPermission' => 'Práva ku skupinovým emailovým účtom',
      'exportPermission' => 'Exportovať oprávnenie',
      'dataPrivacyPermission' => 'Práva pre súkromie dát',
    ),
    'links' => 
    array (
      'users' => 'Používatelia',
      'teams' => 'Tímy',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Umožňuje obmedziť možnosť priradiť záznam a posielanie správ iným používateľom

all - bez obmedzení

team - môže priradiť a posielať iba členom tímu

no - môže priradiť a posielať len sebe',
      'userPermission' => 'Umožňuje obmedziť možnosť používateľovi vidieť ativity, kalendár a stream iných používateľov.

all - môže vidieť všetko

team - môže vidieť aktivity iba vrámci tímu

no - nemôže vidieť',
      'portalPermission' => 'Definuje prístup k portálovej informácii, možnosť posielať správy portálovým používateľom.',
      'groupEmailAccountPermission' => 'Definuje prístup k skupinovým emailovým účtom, možnosť posielať emaily zo skupinového SMTP.',
      'exportPermission' => 'Definuje či používatelia majú možnosť exportovať záznamy.',
      'dataPrivacyPermission' => 'Povoľuje prezerať a mazať osobné údaje.',
    ),
    'labels' => 
    array (
      'Access' => 'Prístup',
      'Create Role' => 'Vytvoriť rolu',
      'Scope Level' => 'Úroveň rozsahu',
      'Field Level' => 'Úroveň poľa',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nenastavený',
        'enabled' => 'povolený',
        'disabled' => 'zablokovaný',
      ),
      'levelList' => 
      array (
        'all' => 'všetko',
        'team' => 'tím',
        'account' => 'účet',
        'contact' => 'kontakt',
        'own' => 'vlastný',
        'no' => 'nie',
        'yes' => 'áno',
        'not-set' => 'nenastavený',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Čítať',
      'edit' => 'Zmeniť',
      'delete' => 'Vymazať',
      'stream' => 'Stream',
      'create' => 'Vytvoriť',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Všetky zmeny v riadení prístupu budú aplikované po vymazaní vyrovnávacej pamäte.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'status' => 'Stav',
      'job' => 'Beh',
      'scheduling' => 'Plánovanie',
    ),
    'links' => 
    array (
      'log' => 'Protokol',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Vytvoriť plánovaný beh',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Vyčistiť',
        'CheckInboundEmails' => 'Skontrolovať skupinové emailové účty',
        'CheckEmailAccounts' => 'Skontrolovať osobné emailové účty',
        'SendEmailReminders' => 'Poslať emailovú pripomienku',
        'AuthTokenControl' => 'Ovládanie Auth Tokenu',
        'SendEmailNotifications' => 'Poslať emailové upozornenia',
        'CheckNewVersion' => 'Skontroluj novú verziu',
        'ProcessMassEmail' => 'Odoslať hromadné emaily',
        'ControlKnowledgeBaseArticleStatus' => 'Riadenie stavu článku databázy znalostí',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Poznámka: Pridajte tento riadok do súbru crontab-u, aby fungovali plánované behy Espo',
        'mac' => 'Poznámka: Pridajte tento riadok do súbru crontab-u, aby fungovali plánované behy Espo',
        'windows' => 'Poznámka: Vytvorte dávkový súbor s nasledujúcimi príkazmi, aby fungovali plánované behy Espo v Plánovaných úlohách Windows',
        'default' => 'Poznámka: Pridajte tento príkaz do Cron Job (Scheduled Task)',
      ),
      'status' => 
      array (
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Zápis Crontab. Definuje frekvenciu spúšťania behov.

*/5 * * * * - každých 5 minút

0 */2 * * * - každé 2 hodiny

30 1 * * * - o 01:30 raz za deň

0 0 1 * * - v prvý deň mesiaca',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Stav',
      'executionTime' => 'Čas priebehu',
      'target' => 'Cieľ',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Použiť vyrovnávaciu pamäť',
      'dateFormat' => 'Formát dátumu',
      'timeFormat' => 'Formát času',
      'timeZone' => 'Časová zóna',
      'weekStart' => 'Prvý deň týždňa',
      'thousandSeparator' => 'Oddeľovač tisícov',
      'decimalMark' => 'Oddeľovač desatinných miest',
      'defaultCurrency' => 'Predvolená mena',
      'baseCurrency' => 'Základná mena',
      'currencyRates' => 'Kurzové hodnoty',
      'currencyList' => 'Zoznam mien',
      'language' => 'Jazyk',
      'companyLogo' => 'Logo spoločnosti',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Bezpečnosť',
      'smtpUsername' => 'Používateľské meno',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Heslo',
      'outboundEmailFromName' => 'Meno odosielateľa',
      'outboundEmailFromAddress' => 'Adresa odosielateľa',
      'outboundEmailIsShared' => 'Je zdieľaný',
      'recordsPerPage' => 'Záznamov na stranu',
      'recordsPerPageSmall' => 'Záznamov na stranu (malú)',
      'tabList' => 'Zoznam záložiek',
      'quickCreateList' => 'Rýchle vytvorenie zoznamu',
      'exportDelimiter' => 'Oddeľovač exportu',
      'globalSearchEntityList' => 'Globálny zoznam vyhľadávaných entít',
      'authenticationMethod' => 'Metóda overovania',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Úplné DN používateľa',
      'ldapPassword' => 'Heslo',
      'ldapBindRequiresDn' => 'Napojenie vyžaduje DN',
      'ldapBaseDn' => 'Základné DN',
      'ldapAccountCanonicalForm' => 'Kanonický tvar účtu',
      'ldapAccountDomainName' => 'Doménové meno účtu',
      'ldapTryUsernameSplit' => 'Pokus rozdeliť používateľské meno',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Vytvoriť používateľa v EspoCRM',
      'ldapSecurity' => 'Bezpečnosť',
      'ldapUserLoginFilter' => 'Filter používateľských mien',
      'ldapAccountDomainNameShort' => 'Krátke doménové meno účtu',
      'ldapOptReferrals' => 'LDAP odporúčania servera (opt referrals)',
      'ldapUserNameAttribute' => 'Atribút používateľského mena',
      'ldapUserObjectClass' => 'ObjectCalss používateľa',
      'ldapUserTitleAttribute' => 'Atribút s titulom používateľa',
      'ldapUserFirstNameAttribute' => 'Atribút s prvým menom používateľa',
      'ldapUserLastNameAttribute' => 'Adribút s priezviskom používateľa',
      'ldapUserEmailAddressAttribute' => 'Atribút s emailovou adresou používateľa',
      'ldapUserTeams' => 'Používateľské tímy',
      'ldapUserDefaultTeam' => 'Predvolený tím používateľa',
      'ldapUserPhoneNumberAttribute' => 'Atribút s telefónnym číslom používateľa',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Zakázať export (povolený len adminovi)',
      'assignmentNotificationsEntityList' => 'Entity, na ktoré sa má upozorňovať v okamihu priradenia',
      'assignmentEmailNotifications' => 'Upozornenie v okamihu priradenia',
      'assignmentEmailNotificationsEntityList' => 'Rozsah emailových upozornení o priradení',
      'streamEmailNotifications' => 'Upozornenia o zmenách v streame interných používateľov',
      'portalStreamEmailNotifications' => 'Upozornenia o zmenách v streame portálových používateľov',
      'streamEmailNotificationsEntityList' => 'Rozsahy emailových notifikácií zo streamu',
      'streamEmailNotificationsTypeList' => 'Na čo upozornovať',
      'b2cMode' => 'Režim B2C',
      'avatarsDisabled' => 'Zakázať avatary',
      'followCreatedEntities' => 'Sledovať vytvorené záznamy',
      'displayListViewRecordCount' => 'Zobraziť celkový počet (v zobrazení zoznamu)',
      'theme' => 'Téma',
      'userThemesDisabled' => 'Zakázať používateľské témy',
      'emailMessageMaxSize' => 'Maximálna veľkosť emailu (MB)',
      'massEmailMaxPerHourCount' => 'Max. počet emailov odoslaných za hodinu',
      'personalEmailMaxPortionSize' => 'Maximálna veľkosť z emaily na stiahnutie pre osobný účet',
      'inboundEmailMaxPortionSize' => 'Maximálna veľkosť z emaily na stiahnutie pre skupinový účet',
      'maxEmailAccountCount' => 'Max. počet osobných emailových účtov na používateľa',
      'authTokenLifetime' => 'Doba života Auth Tokenu (hodiny)',
      'authTokenMaxIdleTime' => 'Maximálny čas nečinnosti Auth Tokenu (hodiny)',
      'dashboardLayout' => 'Rozloženie plochy (predvolené)',
      'siteUrl' => 'URL stránky',
      'addressPreview' => 'Náhľad adresy',
      'addressFormat' => 'Formát adresy',
      'notificationSoundsDisabled' => 'Zakázať zvuk upozornení',
      'applicationName' => 'Názov aplikácie',
      'calendarEntityList' => 'Zoznam kalendárových entít',
      'mentionEmailNotifications' => 'Odošli emailovú notifikáciu o zmienkach v príspevkoch',
      'massEmailDisableMandatoryOptOutLink' => 'Zakázať povinnú odkaz na odhlásenie odberu',
      'activitiesEntityList' => 'Zoznam entít aktivít',
      'historyEntityList' => 'Zoznam entít histórie',
      'currencyFormat' => 'Formát meny',
      'currencyDecimalPlaces' => 'Desatinné miesta meny',
      'aclStrictMode' => 'ACL striktný režim',
      'aclAllowDeleteCreated' => 'Povoliť odstrániť vytvorené záznamy',
      'adminNotifications' => 'Systémové upozornenia v administračnom paneli',
      'adminNotificationsNewVersion' => 'Zobraziť upozornenie, keď je k dispozícii nová verzia EspoCRM',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Použite operátor \'obsahuje\' keď filtrujete polia typu varchar',
      'authTokenPreventConcurrent' => 'Len jeden auth token na používateľa',
      'scopeColorsDisabled' => 'Zakázať farby rozsahu',
      'tabColorsDisabled' => 'Zakázať farby záložky',
      'tabIconsDisabled' => 'Zakázať ikony záložiek',
      'emailAddressIsOptedOutByDefault' => 'Označiť adresu ako odregistrovanú',
      'outboundEmailBccAddress' => 'BCC adresa na externých klientov',
      'cleanupDeletedRecords' => 'Clean up deleted records',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Nedeľa',
        1 => 'Pondelok',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Príspevky',
        'Status' => 'Aktualizácie stavu',
        'EmailReceived' => 'Prijaté emaily',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Počet záznamov na začiatku zobrazených v zozname.',
      'recordsPerPageSmall' => 'Počet záznamov na začiatku zobrazených v paneloch vzťahov.',
      'outboundEmailIsShared' => 'Povoliť používateľom odosielať emaily z tejto adresy.',
      'followCreatedEntities' => 'Používatelia budú automaticky sledovať záznamy, ktoré vytvorili.',
      'emailMessageMaxSize' => 'Všetky prichádzajúce emaily prevyšujúce predpísanú veľkosť budú načítané bez tela a príloh.',
      'authTokenLifetime' => 'Definuje ako dlh môže token existovať.
0 - znamená bez expirácie.',
      'authTokenMaxIdleTime' => 'Definuje ako dlho od posledného prístupu môže token existovať.
0 - znamená bez expirácie.',
      'userThemesDisabled' => 'Ak je toto označené, používateľ nebude môcť vybrať inú tému.',
      'ldapUsername' => 'Úplné systémové DN používateľa, ktoré umožní vyhľadávať iných používateľov. Napr.: "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'Heslo na prístup k serveru LDAP',
      'ldapAuth' => 'Prihlasovacie údaje pre server LDAP.',
      'ldapUserNameAttribute' => 'Atribút, ktorý identifikuje používateľa. Napr.: "userPrincipalName" alebo "sAMAccountName" pre Active Directory, "uid" pre OpenLDAP.',
      'ldapUserObjectClass' => 'Atribút ObjectClass pre vyhľadávanie používateľov. Napr.: "person" pre AD, "inetOrgPerson" pre OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Typ vášho účtu v kanonickej forme. Sú 4 možnosti: <br>- \'Dn\' - vo formáte \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - vo formáte \'tester\'.<br>- \'Backslash\' - vo formáte \'COMPANY\\tester\'.<br>- \'Principal\' - vo formáte \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Možnosť formátovať používateľské meno do formátu DN.',
      'ldapBaseDn' => 'Predvolené základné DN použité na vyhľadávanie používateľov. Napr.: "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Možnosť oddeliť používateľské meno od domény.',
      'ldapOptReferrals' => 'ak majú byť odporúčania servera (referrals) sledované LDAP klientom',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Táto možnosť umožňuje EspoCRM vytvoriť používateľa z LDAPu.',
      'ldapUserFirstNameAttribute' => 'LDAP atribút, ktorý je použitý na určenie prvého mena používateľa. Napr.: "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP atribút, ktorý je použitý na určenie priezviska používateľa. Napr.: "sn".',
      'ldapUserTitleAttribute' => 'LDAP atribút, ktorý je použitý na určenie titulu používateľa. Napr.: "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP atribút, ktorý je použitý na určenie emailovej adresy používateľa. Napr.: "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP atribút, ktorý určuje telefónne číslo používateľa. Napr. "telephoneNumber".',
      'ldapUserLoginFilter' => 'Filter, ktorý umožňuje obmedziť používateľov, ktorí môžu používať EspoCRM. napr. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Doména, ktorá je použitá na autorizáciu v LDAP serveri.',
      'ldapAccountDomainNameShort' => 'Skrátená doména, ktorá je použitá na autorizáciu v LDAP serveri.',
      'ldapUserTeams' => 'Tímy pre vytvoreného používateľa. Viac informácií v používateľskom profile.',
      'ldapUserDefaultTeam' => 'Predvolený tím pre vytvoreného používateľa. Viac informácií v používateľskom profile.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Štandardne je EspoCRM pripravené na B2B. Môžete prepnúť do B2C.',
      'currencyDecimalPlaces' => 'Počet desatinných miest. Ak zostane prázdne, všetky neprázdne desatinné miesta sa zobrazia.',
      'aclStrictMode' => 'Povolené: Prístup k rozsahom bude zakázaný ak to nie je špecifikované v roliach.

Zakázané: Prístup k rozsahom bude povolený ak to nie je specifikované v roliach.',
      'aclAllowDeleteCreated' => 'Používatelia budú môcť vymazať záznamy, ktoré vytvorili aj keď nebudú mať priradené právo mazať.',
      'textFilterUseContainsForVarchar' => 'Ak nie je označené, potom je použitý operátor \'začína s\'. Môžete použiť zástupnú znak \'%\'.',
      'streamEmailNotificationsEntityList' => 'Emailové upozornenia o zmenách v streamoch sledovaných záznamov.
Používatelia budú prijímať emailové upozornenia len od daných typov entít.',
      'authTokenPreventConcurrent' => 'Používatelia sa nebudú môcť prihlásiť na viacerých zariadeniach súčasne.',
      'emailAddressIsOptedOutByDefault' => 'Keď vytvárate nový záznam, emailová adresa bude označená ako odregistrovaná.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
    ),
    'labels' => 
    array (
      'System' => 'Systém',
      'Locale' => 'Národné nastavenia',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfigurácia',
      'In-app Notifications' => 'Upozornenia v aplikácii',
      'Email Notifications' => 'Emailové upozornenia',
      'Currency Settings' => 'Nastavenia meny',
      'Currency Rates' => 'Menové kurzy',
      'Mass Email' => 'Hromadný email',
      'Test Connection' => 'Test pripojenia',
      'Connecting' => 'Pripájanie...',
      'Activities' => 'Aktivity',
      'Admin Notifications' => 'Administrátorské upozornenia',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Spojenie bolo úspešne vytvorené.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'roles' => 'Role',
      'positionList' => 'Zoznam pozícií',
    ),
    'links' => 
    array (
      'users' => 'Používatelia',
      'notes' => 'Poznámky',
      'roles' => 'Role',
      'inboundEmails' => 'Skupinové emailové účty',
    ),
    'tooltips' => 
    array (
      'roles' => 'Prístupové role. Používatelia z tohoto tímu získajú úroveň prístupu z vybraných rolí.',
      'positionList' => 'Dostupné pozície v tomto tíme, napr. Obchodník, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Vytvoriť tím',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'body' => 'Telo',
      'entityType' => 'Typ entity',
      'header' => 'Hlavička',
      'footer' => 'Päta',
      'leftMargin' => 'Ľavý okraj',
      'topMargin' => 'Horný okraj',
      'rightMargin' => 'Pravý okraj',
      'bottomMargin' => 'Spodný okraj',
      'printFooter' => 'Tlačiť pätu',
      'footerPosition' => 'Pozícia päty',
      'variables' => 'Dostupné náhrady',
      'pageOrientation' => 'Orientácia stránky',
      'pageFormat' => 'Formát papiera',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Vytvoriť šablónu',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Na výšku',
        'Landscape' => 'Na šírku',
      ),
      'placeholders' => 
      array (
        'today' => 'Dnes (dátum)',
        'now' => 'Teraz (dátum a čas)',
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
      'footer' => 'Použiť {pageNumber} na tlač čísla strany.',
      'variables' => 'Nakopírujte požadovanú náhradu do hlavičky, tela a päty.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Meno',
      'userName' => 'Používateľské meno',
      'title' => 'Titul',
      'isAdmin' => 'Je admin',
      'defaultTeam' => 'Predvolený tím',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefón',
      'roles' => 'Role',
      'portals' => 'Portály',
      'portalRoles' => 'Portálové role',
      'teamRole' => 'Pozícia',
      'password' => 'Heslo',
      'currentPassword' => 'Súčasné heslo',
      'passwordConfirm' => 'Potvrdiť heslo',
      'newPassword' => 'Nové heslo',
      'newPasswordConfirm' => 'Potvrdiť nové heslo',
      'avatar' => 'Avatar',
      'isActive' => 'Je aktívny',
      'isPortalUser' => 'Je portálový používateľ',
      'contact' => 'Konktakt',
      'accounts' => 'Účty',
      'account' => 'Účet (primárny)',
      'sendAccessInfo' => 'Poslať používateľovi email s informáciou o prístupe',
      'portal' => 'Portál',
      'gender' => 'Pohlavie',
      'position' => 'Pozícia v tíme',
      'ipAddress' => 'IP Adresa',
      'passwordPreview' => 'Ukážka hesla',
      'isSuperAdmin' => 'Je super admin',
      'lastAccess' => 'Posledný prístup',
      'acceptanceStatus' => 'Akceptačný stav',
      'acceptanceStatusMeetings' => 'Akceptačný stav (Stretnutia)',
      'acceptanceStatusCalls' => 'Akceptačný stav (Hovory)',
    ),
    'links' => 
    array (
      'teams' => 'Tímy',
      'roles' => 'Role',
      'notes' => 'Poznámky',
      'portals' => 'Portály',
      'portalRoles' => 'Portálové role',
      'contact' => 'Kontakt',
      'accounts' => 'Účty',
      'account' => 'Účet (Primárny)',
      'tasks' => 'Úlohy',
      'targetLists' => 'Zoznamy cieľov',
    ),
    'labels' => 
    array (
      'Create User' => 'Vytvoriť používateľa',
      'Generate' => 'Generovať',
      'Access' => 'Prístup',
      'Preferences' => 'Možnosti',
      'Change Password' => 'Zmeniť heslo',
      'Teams and Access Control' => 'Tímy a riadenie prístupu',
      'Forgot Password?' => 'Zabudli ste heslo?',
      'Password Change Request' => 'Požiadavka na zmenu hesla',
      'Email Address' => 'Emailová adresa',
      'External Accounts' => 'Externé účty',
      'Email Accounts' => 'Emailové účty',
      'Portal' => 'Portál',
      'Create Portal User' => 'Vytvoriť používateľa portálu',
      'Proceed w/o Contact' => 'Pokračovať bez kontaktu',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Všetky záznamy vytvorené týmto používateľom budú štandartne súvisieť s týmto tímom.',
      'userName' => 'Písmená a-z, čísla 0-9, bodky, pomlčky, znak @ a podtrhovník sú povolené.',
      'isAdmin' => 'Administrátor má prístup ku všetkému.',
      'isActive' => 'Ak je toto neoznačené, tak používateľ sa nebude môcť prihlásiť.',
      'teams' => 'Tímy, ku ktorým tento používateľ patrí. Systém riadenia prístupu je zdedený z tímových rolí.',
      'roles' => 'Role na dodatočný prístup. Použite ich ak používateľ nepatrí k žiadnemu tímu alebo potrebujete rozšíriť systém riadenia prístupu výnimočne len pre tohoto používateľa.',
      'portalRoles' => 'Dodatočné portálové role. Použite ich ak potrebujete rozšíriť systém riadenia prístupu výnimočne len pre tohoto používateľa.',
      'portals' => 'Portály, do ktorých má tento používateľ prístup.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Heslo bude poslané na používateľov email.',
      'accountInfoEmailSubject' => 'Info o používateľskom prístupe EspoCRM',
      'accountInfoEmailBody' => 'Vaš prístupové informácie:',
      'passwordChangeLinkEmailSubject' => 'Požiadavka na zmenu hesla',
      'passwordChangeLinkEmailBody' => 'Svoje heslo môžete zmeniť použitím tohoto odkazu {link}. Táto jedinečná URL čoskoro expiruje.',
      'passwordChanged' => 'Heslo bolo zmenené',
      'userCantBeEmpty' => 'Používateľské meno nesmie byť prázdne',
      'wrongUsernamePasword' => 'Nesprávne meno/heslo',
      'emailAddressCantBeEmpty' => 'Emailová adresa nesmie byť prázdna',
      'userNameEmailAddressNotFound' => 'Používateľské meno/Emailová adresa sa nenašla',
      'forbidden' => 'Odmietnutý prístup, skúste neskôr',
      'uniqueLinkHasBeenSent' => 'Jedinečná URL bola odoslaná na uvedenú emailovú adresu.',
      'passwordChangedByRequest' => 'Heslo bolo zmenené.',
      'setupSmtpBefore' => 'Potrebujete nastaviť <a href="{url}">SMTP nastavenia</a> aby Váš systém bol schopný odoslať heslo v emaile.',
      'userNameExists' => 'Používateľské meno už existuje',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nenastavené',
        'Male' => 'Muž',
        'Female' => 'Žena',
        'Neutral' => 'Neutrálny',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Len môj tím',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktívny',
      'activePortal' => 'Portál aktívny',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'emailAddress' => 'Email',
      'website' => 'Webová stránka',
      'phoneNumber' => 'Telefón',
      'billingAddress' => 'Fakturačná adresa',
      'shippingAddress' => 'Dodacia adresa',
      'description' => 'Popis',
      'sicCode' => 'Sic kód',
      'industry' => 'Priemysel',
      'type' => 'Typ',
      'contactRole' => 'Titul',
      'contactIsInactive' => 'Neaktívny',
      'campaign' => 'Kampaň',
      'targetLists' => 'Cieľové zoznamy',
      'targetList' => 'Cieľový zoznam',
      'originalLead' => 'Pôvodná stopa',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
      'opportunities' => 'Príležitosti',
      'cases' => 'Prípady',
      'documents' => 'Dokumenty',
      'meetingsPrimary' => 'Stretnutia (rozbalené)',
      'callsPrimary' => 'Volania (rozbalené)',
      'tasksPrimary' => 'Úlohy (rozbalené)',
      'emailsPrimary' => 'Emaily (rozbalené)',
      'targetLists' => 'Zoznamy cieľov',
      'campaignLogRecords' => 'Protokol kampane',
      'campaign' => 'Kampaň',
      'portalUsers' => 'Používatelia portálu',
      'originalLead' => 'Pôvodná stopa',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Zákazník',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Predajca',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Letectvo',
        'Agriculture' => 'Poľnohospodárstvo',
        'Advertising' => 'Reklama',
        'Apparel & Accessories' => 'Oblečenie a doplnky',
        'Architecture' => 'Architektúra',
        'Automotive' => 'Automobilový priemysel',
        'Banking' => 'Bankovníctvo',
        'Biotechnology' => 'Biotechnológie',
        'Building Materials & Equipment' => 'Stavebný materiál a náradie',
        'Chemical' => 'Chémia',
        'Construction' => 'Staviteľstvo',
        'Computer' => 'Počítače',
        'Defense' => 'Obrana',
        'Creative' => 'Tvorivé',
        'Culture' => 'Kultúra',
        'Consulting' => 'Konzultácie',
        'Education' => 'Vzdelávanie',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Elektrická energia',
        'Energy' => 'Energia',
        'Entertainment & Leisure' => 'Zábava',
        'Finance' => 'Financie',
        'Food & Beverage' => 'Jedlo a pitie',
        'Grocery' => 'Potraviny',
        'Hospitality' => 'Stravovanie',
        'Healthcare' => 'Zdravie',
        'Insurance' => 'Poistenie',
        'Legal' => 'Právo',
        'Manufacturing' => 'Výroba',
        'Mass Media' => 'Masmédiá',
        'Mining' => 'Ťažba',
        'Music' => 'Hudba',
        'Marketing' => 'Marketing',
        'Publishing' => 'Vydavateľstvo',
        'Petroleum' => 'Ropa',
        'Real Estate' => 'Nehnuteľnosti',
        'Retail' => 'Obchod',
        'Shipping' => 'Preprava',
        'Service' => 'Služby',
        'Support' => 'Podpora',
        'Sports' => 'Šport',
        'Software' => 'Software',
        'Technology' => 'Technológie',
        'Telecommunications' => 'Telekomunikácie',
        'Television' => 'Televízia',
        'Testing, Inspection & Certification' => 'Testovanie, Inšpekcie & certifikácie',
        'Transportation' => 'Doprava',
        'Travel' => 'Cestovanie',
        'Venture Capital' => 'Rizikový kapitál',
        'Wholesale' => 'Veľkoobchod',
        'Water' => 'Vodohospodárstvo',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Vytvoriť účet',
      'Copy Billing' => 'Kopírovať fakturačnú',
      'Set Primary' => 'Nastaviť primárny',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Zázazníci',
      'partners' => 'Partneri',
      'recentlyCreated' => 'Naposledy vytvorený',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mesiac',
      'week' => 'Týždeň',
      'day' => 'Deň',
      'agendaWeek' => 'Týždeň',
      'agendaDay' => 'Deň',
      'timeline' => 'Časová os',
    ),
    'labels' => 
    array (
      'Today' => 'Dnes',
      'Create' => 'Vytvoriť',
      'Shared' => 'Zdieľať',
      'Add User' => 'Pridať používateľa',
      'current' => 'súčasný',
      'time' => 'čas',
      'User List' => 'Užívateľský zoznam',
      'Manage Users' => 'Spravovať používateľov',
      'View Calendar' => 'Zobraziť kalendár',
      'Create Shared View' => 'Vytvoriť zdieľaný pohľad',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Meno',
      'parent' => 'Rodič',
      'status' => 'Stav',
      'dateStart' => 'Počiatočný dátum',
      'dateEnd' => 'Konečný dátum',
      'direction' => 'Smer',
      'duration' => 'Trvanie',
      'description' => 'Popis',
      'users' => 'Používatelia',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'reminders' => 'Pripomienky',
      'account' => 'Účet',
      'acceptanceStatus' => 'Akceptačný stav',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Plánovaný',
        'Held' => 'Zadržaný',
        'Not Held' => 'Nezadržaný',
      ),
      'direction' => 
      array (
        'Outbound' => 'Odchádzajúci',
        'Inbound' => 'Prichádzajúci',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Žiadny',
        'Accepted' => 'Akceptovaný',
        'Declined' => 'Odmietnutý',
        'Tentative' => 'Predbežne',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Nastaviť pozdržaný',
      'setNotHeld' => 'Nastaviť nepozdržaný',
    ),
    'labels' => 
    array (
      'Create Call' => 'Vytvoriť hovor',
      'Set Held' => 'Nastaviť pozdržaný',
      'Set Not Held' => 'Nastaviť nepozdržaný',
      'Send Invitations' => 'Poslať pozvánky',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plánovaný',
      'held' => 'Pozdržaný',
      'todays' => 'Dnešné',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'description' => 'Popis',
      'status' => 'Stav',
      'type' => 'Typ',
      'startDate' => 'Začiatočný dátum',
      'endDate' => 'Konečný dátum',
      'targetLists' => 'Cieľový zoznam',
      'excludingTargetLists' => 'Vylúčiť cieľové zoznamy',
      'sentCount' => 'Poslaný',
      'openedCount' => 'Otvorený',
      'clickedCount' => 'Kliknutý',
      'optedOutCount' => 'Odregistrovaný',
      'bouncedCount' => 'Odrazený',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Tvrdo odrazený',
      'softBouncedCount' => 'Ľahko odrazený',
      'leadCreatedCount' => 'Stopy vytvorené',
      'revenue' => 'Príjem',
      'revenueConverted' => 'Príjem (konvertovaný)',
      'budget' => 'Rozpočet',
      'budgetConverted' => 'Rozpočet (konvertovaný)',
      'contactsTemplate' => 'Šablona kontaktov',
      'leadsTemplate' => 'Šablona stôp',
      'accountsTemplate' => 'Šablona účtov',
      'usersTemplate' => 'Šablona používateľov',
      'mailMergeOnlyWithAddress' => 'Preskoč záznamy bez vyplnenej adresy',
    ),
    'links' => 
    array (
      'targetLists' => 'Cieľové zoznamy',
      'excludingTargetLists' => 'Vylúčiť cieľové zoznamy',
      'accounts' => 'Účty',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'opportunities' => 'Príležitosti',
      'campaignLogRecords' => 'Protokol',
      'massEmails' => 'Hromadné emaily',
      'trackingUrls' => 'Sledovacie URLs',
      'contactsTemplate' => 'Šablona kontaktov',
      'leadsTemplate' => 'Šablona stôp',
      'accountsTemplate' => 'Šablona účtov',
      'usersTemplate' => 'Šablona používateľov',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televíza',
        'Radio' => 'Rozhlas',
        'Newsletter' => 'Novinky',
        'Mail' => 'Pošta',
      ),
      'status' => 
      array (
        'Planning' => 'Plánovanie',
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
        'Complete' => 'Dokončený',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Vytvoriť kampaň',
      'Target Lists' => 'Cieľové zoznamy',
      'Statistics' => 'Štatistiky',
      'hard' => 'tvrdý',
      'soft' => 'jemný',
      'Unsubscribe' => 'Odregistrovať',
      'Mass Emails' => 'Hromadné emaily',
      'Email Templates' => 'Emailové šablóny',
      'Unsubscribe again' => 'Odhlásiť odber znova',
      'Subscribe again' => 'Prihlásiť odber znova',
      'Create Target List' => 'Vytvoriť cieľový list',
      'Mail Merge' => 'Spojenie mailov',
      'Generate Mail Merge PDF' => 'Generovanie spojených mailov do PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktívny',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Boli ste odstránený z nášho emailového zoznamu.',
      'subscribedAgain' => 'Ste znova prihlásený na odber.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Ciele, ktoré by mali obdržať správy.',
      'excludingTargetLists' => 'Ciele, ktoré by nemali obdržať správy.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Akcia',
      'actionDate' => 'Dátum',
      'data' => 'Dáta',
      'campaign' => 'Kampaň',
      'parent' => 'Cieľ',
      'object' => 'Objekt',
      'application' => 'Aplikácia',
      'queueItem' => 'Položka fronty',
      'stringData' => 'Reťazcové dáta',
      'stringAdditionalData' => 'Reťazcové dodatočné data',
      'isTest' => 'Je test',
    ),
    'links' => 
    array (
      'queueItem' => 'Položka fronty',
      'parent' => 'Rodič',
      'object' => 'Objekt',
      'campaign' => 'Kampaň',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Odoslaný',
        'Opened' => 'Otvorený',
        'Opted Out' => 'Odregistrovaný',
        'Bounced' => 'Vrátený',
        'Clicked' => 'Kliknutý',
        'Lead Created' => 'Stopa vytvorená',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Všetko',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Odoslaný',
      'opened' => 'Otvorený',
      'optedOut' => 'Odregistrovaný',
      'optedIn' => 'Opted In',
      'bounced' => 'Vrátený',
      'clicked' => 'Kliknutý',
      'leadCreated' => 'Stopa vytvorená',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Kód na vloženie namiesto URL',
      'campaign' => 'Kampaň',
    ),
    'links' => 
    array (
      'campaign' => 'Kampaň',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Vytvoriť sledovaciu URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'number' => 'Číslo',
      'status' => 'Stav',
      'account' => 'Účet',
      'contact' => 'Kontakt',
      'contacts' => 'Kontakty',
      'priority' => 'Priorita',
      'type' => 'Typ',
      'description' => 'Popis',
      'inboundEmail' => 'Skupinový emailový účet',
      'lead' => 'Stopa',
      'attachments' => 'Prílohy',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Skupinový emailový účet',
      'account' => 'Účet',
      'contact' => 'Kontakt (Primárny)',
      'Contacts' => 'Kontakty',
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'emails' => 'Emaily',
      'articles' => 'Článok znalostnej základne',
      'lead' => 'Stopa',
      'attachments' => 'Prílohy',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nový',
        'Assigned' => 'Priradený',
        'Pending' => 'Nevybavený',
        'Closed' => 'Uzavretý',
        'Rejected' => 'Odmietnutý',
        'Duplicate' => 'Duplikát',
      ),
      'priority' => 
      array (
        'Low' => 'Nízka',
        'Normal' => 'Normálna',
        'High' => 'Vysoká',
        'Urgent' => 'Urgentná',
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
      'Create Case' => 'Vytvoriť prípad',
      'Close' => 'Zavrieť',
      'Reject' => 'Odmietnuť',
      'Closed' => 'Uzavretý',
      'Rejected' => 'Odmietnutý',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otvoriť',
      'closed' => 'Uzavretý',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'emailAddress' => 'Email',
      'title' => 'Titul',
      'account' => 'Účet',
      'accounts' => 'Účty',
      'phoneNumber' => 'Telefón',
      'accountType' => 'Typ účtu',
      'doNotCall' => 'Nevolať',
      'address' => 'Adresa',
      'opportunityRole' => 'Rola príležitosti',
      'accountRole' => 'Titul',
      'description' => 'Popis',
      'campaign' => 'Kampaň',
      'targetLists' => 'Zoznamy cieľov',
      'targetList' => 'Zoznam cieľov',
      'portalUser' => 'Portálový používateľ',
      'originalLead' => 'Pôvodná stopa',
      'acceptanceStatus' => 'Akceptačný status',
      'accountIsInactive' => 'Účet neaktívny',
      'acceptanceStatusMeetings' => 'Akceptačný stav (stretnutia)',
      'acceptanceStatusCalls' => 'Akceptačný stav (Hovory)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => 'Príležitosti',
      'cases' => 'Prípady',
      'targetLists' => 'Zoznamy cieľov',
      'campaignLogRecords' => 'Protokol kampane',
      'campaign' => 'Kampaň',
      'account' => 'Účet (Primárny)',
      'accounts' => 'Účty',
      'casesPrimary' => 'Prípady (Primárne)',
      'tasksPrimary' => 'Úlohy (rozbalené)',
      'portalUser' => 'Portálový používateľ',
      'originalLead' => 'Pôvodná stopa',
      'documents' => 'Dokumenty',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Vytvoriť kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Žiadne--',
        'Decision Maker' => 'Kto rozhoduje',
        'Evaluator' => 'Kto ohodnocuje',
        'Influencer' => 'Kto ovplyvňuje',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portáloví používatelia',
      'notPortalUsers' => 'Nie portáloví používatelia',
      'accountActive' => 'Aktívny',
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
      'Create Document' => 'Vytvoriť dokument',
      'Details' => 'Detaily',
    ),
    'fields' => 
    array (
      'name' => 'Názov',
      'status' => 'Stav',
      'file' => 'Súbor',
      'type' => 'Typ',
      'publishDate' => 'Dátum publikovania',
      'expirationDate' => 'Dátum expirácie',
      'description' => 'Popis',
      'accounts' => 'Účty',
      'folder' => 'Priečinok',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Účty',
      'opportunities' => 'Príležitosti',
      'folder' => 'Priečinok',
      'leads' => 'Stopy',
      'contacts' => 'Kontakty',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktívny',
        'Draft' => 'Koncept',
        'Expired' => 'Vypršaný',
        'Canceled' => 'Zrušený',
      ),
      'type' => 
      array (
        '' => 'Žiadny',
        'Contract' => 'Zmluva',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licenčná zmluva',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktívny',
      'draft' => 'Koncept',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Vytvoriť priečinok pre dokumenty',
      'Manage Categories' => 'Spravovať priečinky',
      'Documents' => 'Dokumenty',
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
      'name' => 'Názov',
      'status' => 'Stav',
      'target' => 'Cieľ',
      'sentAt' => 'Dátum odoslania',
      'attemptCount' => 'Pokusy',
      'emailAddress' => 'Emailová adresa',
      'massEmail' => 'Hromadný email',
      'isTest' => 'Je test',
    ),
    'links' => 
    array (
      'target' => 'Cieľ',
      'massEmail' => 'Hromadný email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Nevybavený',
        'Sent' => 'Odoslaný',
        'Failed' => 'Chybný',
        'Sending' => 'Odosielanie',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Nevybavený',
      'sent' => 'Odoslaný',
      'failed' => 'Chybný',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Vytvoriť článok',
      'Any' => 'Hocijaký',
      'Send in Email' => 'Poslať emailom',
      'Move Up' => 'Presunúť hore',
      'Move Down' => 'Presunúť dole',
      'Move to Top' => 'Presunúť navrch',
      'Move to Bottom' => 'Presunúť naspodok',
    ),
    'fields' => 
    array (
      'name' => 'Názov',
      'status' => 'Stav',
      'type' => 'Typ',
      'attachments' => 'Prílohy',
      'publishDate' => 'Dátum publikovania',
      'expirationDate' => 'Dátum expirácie',
      'description' => 'Popis',
      'body' => 'Telo',
      'categories' => 'Kategórie',
      'language' => 'Jazyk',
      'portals' => 'Portály',
    ),
    'links' => 
    array (
      'cases' => 'Prípady',
      'opportunities' => 'Príležitosti',
      'categories' => 'Kategórie',
      'portals' => 'Protály',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'V revízii',
        'Draft' => 'Koncept',
        'Archived' => 'Archivovaný',
        'Published' => 'Publikovaný',
      ),
      'type' => 
      array (
        'Article' => 'Článok',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Článok bude dostupný len v uvedených portáloch.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publikovaný',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Vytvoriť kategóriu',
      'Manage Categories' => 'Spravovať kategórie',
      'Articles' => 'Články',
    ),
    'links' => 
    array (
      'articles' => 'Články',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Konvertovaný na',
      'Create Lead' => 'Vytvoriť stopu',
      'Convert' => 'Konvertovať',
      'convert' => 'konvertovať',
    ),
    'fields' => 
    array (
      'name' => 'Názov',
      'emailAddress' => 'Email',
      'title' => 'Titul',
      'website' => 'Webová stránka',
      'phoneNumber' => 'Telefón',
      'accountName' => 'Názov účtu',
      'doNotCall' => 'Nevolať',
      'address' => 'Adresa',
      'status' => 'Stav',
      'source' => 'Zdroj',
      'opportunityAmount' => 'Obnos príležitosti',
      'opportunityAmountConverted' => 'Obnos príležitosti (konvertovaný)',
      'description' => 'Popis',
      'createdAccount' => 'Účet',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Príležitosť',
      'campaign' => 'Kampaň',
      'targetLists' => 'Cieľové zoznamy',
      'targetList' => 'Cieľový zoznam',
      'industry' => 'Priemysel',
      'acceptanceStatus' => 'Akceptačný stav',
      'opportunityAmountCurrency' => 'Mena obnosu príležitosti',
      'acceptanceStatusMeetings' => 'Akceptačný stav (stretnutia)',
      'acceptanceStatusCalls' => 'Akceptačný stav (hovory)',
    ),
    'links' => 
    array (
      'targetLists' => 'Cieľové zoznamy',
      'campaignLogRecords' => 'Protokol kampane',
      'campaign' => 'Kampaň',
      'createdAccount' => 'Účet',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Príležitosť',
      'cases' => 'Prípady',
      'documents' => 'Dokumenty',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nový',
        'Assigned' => 'Priradený',
        'In Process' => 'V procese',
        'Converted' => 'Konvertovaný',
        'Recycled' => 'Recyklovaný',
        'Dead' => 'Mŕtvy',
      ),
      'source' => 
      array (
        '' => 'Žiadny',
        'Call' => 'Hovor',
        'Email' => 'Email',
        'Existing Customer' => 'Existujúci zákazník',
        'Partner' => 'Partner',
        'Public Relations' => 'Vzťahy s verejnosťou',
        'Web Site' => 'Webová stránka',
        'Campaign' => 'Kampaň',
        'Other' => 'Iné',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktívny',
      'actual' => 'Aktuálny',
      'converted' => 'Konvertovaný',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'status' => 'Stav',
      'storeSentEmails' => 'Uložiť odoslané emaily',
      'startAt' => 'Dátum začatia',
      'fromAddress' => 'Adresa odosielateľa',
      'fromName' => 'Meno odosielateľa',
      'replyToAddress' => 'Odpovedať na adresu',
      'replyToName' => 'Odpovedať na meno',
      'campaign' => 'Kampaň',
      'emailTemplate' => 'Šablóna emailu',
      'inboundEmail' => 'Emailový účet',
      'targetLists' => 'Cieľové zoznamy',
      'excludingTargetLists' => 'Vylúčiť cieľové zoznamy',
      'optOutEntirely' => 'Odregistrovať úplne',
      'smtpAccount' => 'účet SMTP',
    ),
    'links' => 
    array (
      'targetLists' => 'Cieľové zoznamy',
      'excludingTargetLists' => 'Vylúčiť cieľové zoznamy',
      'queueItems' => 'Položky fronty',
      'campaign' => 'Kampaň',
      'emailTemplate' => 'Šablóna emailu',
      'inboundEmail' => 'Emailový účet',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Koncept',
        'Pending' => 'Nevybavený',
        'In Process' => 'V procese',
        'Complete' => 'Kompletný',
        'Canceled' => 'Zrušený',
        'Failed' => 'Chybný',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Vytvoriť hromadný email',
      'Send Test' => 'Poslať test',
      'System SMTP' => 'SMTP systém',
      'system' => 'systém',
      'group' => 'skupina',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Vyberte aspoň jeden cieľ',
      'testSent' => 'Testovaci(e) email(y) sa považujú za odoslané',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Emailové adresy adresátov, ktorý sa odhlásili z odberu, budú označené ako odregistrované a nebudú sa im odosielať žiadne hromadné emaily.',
      'targetLists' => 'Ciele, ktoré by mali obdržať správy.',
      'excludingTargetLists' => 'Ciele, ktoré by nemali obdržať správy.',
      'storeSentEmails' => 'Emaily budú uložené v CRM',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuálny',
      'complete' => 'Dokončiť',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'parent' => 'Rodič',
      'status' => 'Stav',
      'dateStart' => 'Počiatočný dátum',
      'dateEnd' => 'Koncový dátum',
      'duration' => 'Trvanie',
      'description' => 'Popis',
      'users' => 'Používatelia',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'reminders' => 'Pripomienky',
      'account' => 'Účet',
      'acceptanceStatus' => 'Akceptačný stav',
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
        'Planned' => 'Plánovaný',
        'Held' => 'Pozdržaný',
        'Not Held' => 'Nepozdržaný',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Žiadny',
        'Accepted' => 'Akceptovaný',
        'Declined' => 'Odmietnutý',
        'Tentative' => 'Predbežný',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Nastaviť pozdržaný',
      'setNotHeld' => 'Nastaviť nepozdržaný',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Vytvoriť stretnutie',
      'Set Held' => 'Nastaviť pozdržaný',
      'Set Not Held' => 'Nastaviť nepozdržaný',
      'Send Invitations' => 'Poslať pozvánky',
      'on time' => 'na čas',
      'before' => 'pred',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Plánovaný',
      'held' => 'Pozdržaný',
      'todays' => 'Dnešné',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nič nebolo odoslané',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'account' => 'Účet',
      'stage' => 'Fáza',
      'amount' => 'Množstvo',
      'probability' => 'Uskutočniteľnosť, %',
      'leadSource' => 'Zdroj stopy',
      'doNotCall' => 'Nevolať',
      'closeDate' => 'Dátum uzatvorenia',
      'contacts' => 'Kontakty',
      'description' => 'Popis',
      'amountConverted' => 'Množstvo (konvertované)',
      'amountWeightedConverted' => 'Množstvo vážené',
      'campaign' => 'Kampaň',
      'originalLead' => 'Pôvodná stopa',
      'amountCurrency' => 'Mena obnosu',
      'contactRole' => 'Rola kontaktu',
      'lastStage' => 'Posledné štádium',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
      'documents' => 'Dokumenty',
      'campaign' => 'Kampaň',
      'originalLead' => 'Pôvodná stopa',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prieskum',
        'Qualification' => 'Kvalifikácia',
        'Proposal' => 'Návrh',
        'Negotiation' => 'Vyjednávanie',
        'Needs Analysis' => 'Potrebuje analýzu',
        'Value Proposition' => 'Navrhovaná hodnota',
        'Id. Decision Makers' => 'Kto rozhoduje',
        'Perception Analysis' => 'Analýza vnímania',
        'Proposal/Price Quote' => 'Návrh/Uvedenie ceny',
        'Negotiation/Review' => 'Vyjednávanie/Revízia',
        'Closed Won' => 'Uzavreté "Zisk"',
        'Closed Lost' => 'Uzavreté "Strata"',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Vytvoriť príležitosť',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otvoriť',
      'won' => 'Zisk',
      'lost' => 'Strata',
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
      'name' => 'Názov',
      'description' => 'Popis',
      'entryCount' => 'Počet vstupov',
      'optedOutCount' => 'Počet vylúčených z odberu',
      'campaigns' => 'Kampane',
      'endDate' => 'Dátum ukončenia',
      'targetLists' => 'Cieľové zoznamy',
      'includingActionList' => 'Vrátane',
      'excludingActionList' => 'Vylúčené',
      'targetStatus' => 'Cieľový stav',
      'isOptedOut' => 'Je vylúčený z odberu',
    ),
    'links' => 
    array (
      'accounts' => 'Účty',
      'contacts' => 'Kontakty',
      'leads' => 'Stopy',
      'campaigns' => 'Kampane',
      'massEmails' => 'Hromadné emaily',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televízia',
        'Radio' => 'Rozhlas',
        'Newsletter' => 'Novinky',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Vylúčený z odberu',
        'Listed' => 'Zaradený',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Vytvoriť zoznam cieľov',
      'Opted Out' => 'Odregistrovaný',
      'Cancel Opt-Out' => 'Zrušiť odregistrovanie',
      'Opt-Out' => 'Odregistrovať',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Názov',
      'parent' => 'Rodič',
      'status' => 'Stav',
      'dateStart' => 'Začiatočný dátum',
      'dateEnd' => 'Konečný dátum',
      'dateStartDate' => 'Začiatočný dátum (celý deň)',
      'dateEndDate' => 'Začiatočný dátum (celý deň)',
      'priority' => 'Priorita',
      'description' => 'Popis',
      'isOverdue' => 'Je prešlý',
      'account' => 'Účet',
      'dateCompleted' => 'Dátum dokončenia',
      'attachments' => 'Prílohy',
      'reminders' => 'Pripomienky',
      'contact' => 'Kontakt',
    ),
    'links' => 
    array (
      'attachments' => 'Prílohy',
      'account' => 'Účet',
      'contact' => 'Kontakt',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nenaštartovaný',
        'Started' => 'Naštartovaný',
        'Completed' => 'Dokončený',
        'Canceled' => 'Zrušený',
        'Deferred' => 'Odložený',
      ),
      'priority' => 
      array (
        'Low' => 'Nízka',
        'Normal' => 'Normálna',
        'High' => 'Vysoká',
        'Urgent' => 'Urgentná',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Vytvoriť úlohu',
      'Complete' => 'Dokončiť',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktuálny',
      'completed' => 'Dokončený',
      'deferred' => 'Odložený',
      'todays' => 'Dnešné',
      'overdue' => 'Prešlý',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'doctosBeneficios' => 'DoctosBeneficios',
      'categoria' => 'Categoria',
      'empresa' => 'Empresa',
      'proveedor' => 'Proveedor',
      'rol' => 'Rol',
      'comuna' => 'Comuna',
    ),
    'labels' => 
    array (
      'Create Beneficios' => 'Vytvoriť Beneficios',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
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
      'Create Categoria' => 'Vytvoriť Categoria',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'comunas' => 'Comunas',
    ),
    'labels' => 
    array (
      'Create Ciudad' => 'Vytvoriť Ciudad',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'ciudad' => 'Ciudad',
      'trabajador' => 'Trabajador',
      'beneficios' => 'Beneficios',
    ),
    'labels' => 
    array (
      'Create Comuna' => 'Vytvoriť Comuna',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'beneficios' => 'Beneficios',
    ),
    'labels' => 
    array (
      'Create DoctosBeneficio' => 'Vytvoriť Doctos_beneficio',
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
      'Create Empresa' => 'Vytvoriť Empresa',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => 'Adresa',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
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
      'Create Formularios' => 'Vytvoriť Formulario',
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
      'Create Proveedor' => 'Vytvoriť Proveedor',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'beneficioss' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' => 
    array (
      'Create Rol' => 'Vytvoriť Rol',
    ),
  ),
  'Solicitudes' => 
  array (
    'fields' => 
    array (
      'address' => 'Adresa',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
      'subcategorias' => 'Subcategorias',
      'subcategoria3' => 'Subcategoria3',
      'relacionsubcategoria' => 'relacionSubcategoria',
      'categoriarela' => 'Categoriarela',
    ),
    'labels' => 
    array (
      'Create Solicitudes' => 'Vytvoriť Solicitudes',
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
      'meetings' => 'Stretnutia',
      'calls' => 'Hovory',
      'tasks' => 'Úlohy',
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
      'Create Subcategoria' => 'Vytvoriť Subcategoria',
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
      'Create Trabajador' => 'Vytvoriť Trabajador',
    ),
  ),
);
?>