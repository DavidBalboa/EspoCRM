<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'használó',
      'action' => 'Akció',
      'createdAt' => 'Dátum',
      'target' => 'Cél',
      'targetType' => 'Cél típus',
      'authToken' => 'Hitel Token',
      'ipAddress' => 'IP-cím',
      'authLogRecord' => 'Hitelesítési napló',
    ),
    'links' => 
    array (
      'authToken' => 'Hitel Token',
      'authLogRecord' => 'Hitelesítési napló',
      'user' => 'használó',
      'target' => 'Cél',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Csak az enyém',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Olvas',
        'update' => 'frissítés',
        'delete' => 'Töröl',
        'create' => 'Teremt',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Bekapcsolt',
      'Disabled' => 'Kikapcsolt',
      'System' => 'Rendszer',
      'Users' => 'Felhasználók',
      'Email' => 'Email',
      'Data' => 'Adat',
      'Customization' => 'Testreszabás',
      'Available Fields' => 'Elérhető mezők',
      'Layout' => 'Elrendezés',
      'Entity Manager' => 'Entitás kezelő',
      'Add Panel' => 'Hozzáadás panelhez',
      'Add Field' => 'Mező hozzáadása',
      'Settings' => 'Beállítások',
      'Scheduled Jobs' => 'Ütemezett munkák',
      'Upgrade' => 'Frissítés',
      'Clear Cache' => 'Törölje a gyorsítótárat',
      'Rebuild' => 'újraépítése',
      'Teams' => 'csapatok',
      'Roles' => 'szerepek',
      'Portal' => 'Portál',
      'Portals' => 'portálok',
      'Portal Roles' => 'Portál szerepek',
      'Portal Users' => 'Portál felhasználók',
      'Outbound Emails' => 'Kimenő e-mailek',
      'Group Email Accounts' => 'Csoportos e-mail fiókok',
      'Personal Email Accounts' => 'Személyes e-mail fiókok',
      'Inbound Emails' => 'Bejövő e-mailek',
      'Email Templates' => 'E-mail sablonok',
      'Import' => 'import',
      'Layout Manager' => 'Elrendezéskezelő',
      'User Interface' => 'Felhasználói felület',
      'Auth Tokens' => 'Hiteles tokenek',
      'Auth Log' => 'Hitelesítési napló',
      'Authentication' => 'Hitelesítés',
      'Currency' => 'Valuta',
      'Integrations' => 'Integráció',
      'Extensions' => 'Extensions',
      'Upload' => 'Feltöltés',
      'Installing...' => 'Telepítés ...',
      'Upgrading...' => 'Frissítés ...',
      'Upgraded successfully' => 'Sikeresen frissített',
      'Installed successfully' => 'Telepítve sikeresen',
      'Ready for upgrade' => 'Készen áll a frissítésre',
      'Run Upgrade' => 'Frissítés futtatása',
      'Install' => 'Telepítés',
      'Ready for installation' => 'Készen áll a telepítésre',
      'Uninstalling...' => 'Eltávolítása ...',
      'Uninstalled' => 'Eltávolítva',
      'Create Entity' => 'Hozzon létre egy entitást',
      'Edit Entity' => 'Entity szerkesztése',
      'Create Link' => 'Link létrehozása',
      'Edit Link' => 'Link szerkesztése',
      'Notifications' => 'értesítések',
      'Jobs' => 'Állás',
      'Reset to Default' => 'Visszaállítás alapértelmezettre',
      'Email Filters' => 'E-mail szűrők',
      'Action History' => 'Akció története',
      'Label Manager' => 'Címkekezelő',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Részlet',
      'listSmall' => 'Lista (kis)',
      'detailSmall' => 'Részlet (kis)',
      'detailPortal' => 'Részlet (portál)',
      'detailSmallPortal' => 'Részlet (kis, portál)',
      'listSmallPortal' => 'Lista (kis, portál)',
      'listPortal' => 'Lista (portál)',
      'relationshipsPortal' => 'Kapcsolattartó panelek (portál)',
      'filters' => 'Keresési szűrők',
      'massUpdate' => 'Tömeges frissítés',
      'relationships' => 'Kapcsolattartó panelek',
      'sidePanelsDetail' => 'Oldalsó panelek (részlet)',
      'sidePanelsEdit' => 'Oldalsó panelek (szerkesztés)',
      'sidePanelsDetailSmall' => 'Oldalsó panelek (részletes kis)',
      'sidePanelsEditSmall' => 'Oldalsó panelek (kis szerkesztés)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Átalakító',
      'listForAccount' => 'Lista (a fiókhoz)',
      'listForContact' => 'Lista (az elérhetőséghez)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Cím',
      'array' => 'Sor',
      'foreign' => 'Külföldi',
      'duration' => 'tartam',
      'password' => 'Jelszó',
      'personName' => 'Személynév',
      'autoincrement' => 'Auto-növekmény',
      'bool' => 'logikai',
      'currency' => 'Valuta',
      'currencyConverted' => 'Pénznem (konvertált)',
      'date' => 'Dátum',
      'datetime' => 'Date-Time',
      'datetimeOptional' => 'Date/Date-Time',
      'email' => 'Email',
      'enum' => 'Felsorolt',
      'enumInt' => 'Enum egész szám',
      'enumFloat' => 'Enum Float',
      'float' => 'Úszó',
      'int' => 'Egész szám',
      'link' => 'Link',
      'linkMultiple' => 'Link Többszörös',
      'linkParent' => 'Link Szülő',
      'phone' => 'Telefon',
      'text' => 'Szöveg',
      'url' => 'url',
      'varchar' => 'varchar',
      'file' => 'fájl',
      'image' => 'Kép',
      'multiEnum' => 'Multi-Felsorolt',
      'attachmentMultiple' => 'Többszörös csatolás',
      'rangeInt' => 'Teljes egész szám',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Tartomány pénzneme',
      'wysiwyg' => 'wYSIWYG',
      'map' => 'Térkép',
      'number' => 'Szám (automatikus növekmény)',
      'colorpicker' => 'Színválasztó',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json objektum',
    ),
    'fields' => 
    array (
      'type' => 'típus',
      'name' => 'Név',
      'label' => 'Címke',
      'tooltipText' => 'Tooltip szöveg',
      'required' => 'Kívánt',
      'default' => 'Alapértelmezett',
      'maxLength' => 'Max. Hosszúság',
      'options' => 'Lehetőségek',
      'after' => 'Miután (mező)',
      'before' => 'Mielőtt (mező)',
      'link' => 'Link',
      'field' => 'Mező',
      'min' => 'min',
      'max' => 'Max',
      'translation' => 'Fordítás',
      'previewSize' => 'Előnézeti méret',
      'noEmptyString' => 'Az üres karakterlánc értéke nem engedélyezett',
      'defaultType' => 'Alapértelmezett típus',
      'seeMoreDisabled' => 'Letiltja a szövegvágást',
      'entityList' => 'Entity List',
      'isSorted' => 'Rendezve van (betűrendben)',
      'audited' => 'ellenőrzött',
      'trim' => 'állapot',
      'height' => 'Magasság (px)',
      'minHeight' => 'Min magasság (px)',
      'provider' => 'ellátó',
      'typeList' => 'Típus lista',
      'rows' => 'A textarea sorainak száma',
      'lengthOfCut' => 'A vágás hossza',
      'sourceList' => 'Forráslista',
      'prefix' => 'előtagja',
      'nextNumber' => 'Következő szám',
      'padLength' => 'Pad Hossz',
      'disableFormatting' => 'A formázás letiltása',
      'dynamicLogicVisible' => 'A mező láthatóvá tétele',
      'dynamicLogicReadOnly' => 'A mező csak olvasható',
      'dynamicLogicRequired' => 'Feltételek, amelyek szükségesek a területen',
      'dynamicLogicOptions' => 'Feltételes lehetőségek',
      'probabilityMap' => 'Stage Probabilities (%)',
      'readOnly' => 'Csak olvasható',
      'maxFileSize' => 'Max fájlméret (Mb)',
      'isPersonalData' => 'Személyes adatok',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Az EspoCRM frissítésre kerül a <strong> {verzió} </ strong> verzióra. Kérjük, legyen türelemmel, mert ez eltarthat egy ideig.',
      'upgradeDone' => 'Az EspoCRM frissítve lett a <strong> {verzió} </ strong> verzióra.',
      'upgradeBackup' => 'Javasoljuk, hogy biztonsági másolatot készítsen az EspoCRM fájlokról és adatokról a frissítés előtt.',
      'thousandSeparatorEqualsDecimalMark' => 'A több ezer elválasztó karakter nem lehet ugyanaz, mint a tizedespont karakter.',
      'userHasNoEmailAddress' => 'A felhasználónak nincs e-mail címe.',
      'selectEntityType' => 'Válassza ki az entitás típusát a bal oldali menüben.',
      'selectUpgradePackage' => 'Válassza ki a frissítési csomagot',
      'downloadUpgradePackage' => 'Frissítő csomag (ok) letöltése <a href="{url}"> itt </a>.',
      'selectLayout' => 'Válassza ki a kívánt elrendezést a bal oldali menüben és szerkessze azt.',
      'selectExtensionPackage' => 'Válassza ki a bővítménycsomagot',
      'extensionInstalled' => 'A (z) {name} {version} bővítmény telepítve lett.',
      'installExtension' => 'A (z) {name} {version} bővítmény készen áll a telepítésre.',
      'cronIsNotConfigured' => 'Az ütemezett feladatok nem futnak. Ezért a bejövő e-mailek, értesítések és emlékeztetők nem működnek. Kérjük, kövesse az <a target="_blank" href="https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab"> utasításokat </a> a beállításhoz cron munka.',
      'newVersionIsAvailable' => 'Új EspoCRM verzió {latestVersion} elérhető.',
      'newExtensionVersionIsAvailable' => 'A (z) {extensionName} új kiadása {latestVersion} elérhető.',
      'uninstallConfirmation' => 'Biztosan eltávolítja a bővítményt?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Az alkalmazás rendszerbeállításai.',
      'scheduledJob' => 'A cron által végzett munkák.',
      'upgrade' => 'Frissítés EspoCRM.',
      'clearCache' => 'Töröljön minden háttértárat.',
      'rebuild' => 'Rebuild backend és clear cache.',
      'users' => 'Felhasználók kezelése.',
      'teams' => 'Csapatkezelés.',
      'roles' => 'Szerepkörök irányítása.',
      'portals' => 'Portálok kezelése.',
      'portalRoles' => 'Szerepek a portálhoz.',
      'portalUsers' => 'A portál felhasználói.',
      'outboundEmails' => 'SMTP-beállítások a kimenő e-mailekhez.',
      'groupEmailAccounts' => 'Group IMAP e-mail fiókok. E-mail importálás és e-mail ügy.',
      'personalEmailAccounts' => 'A felhasználók e-mail fiókjai.',
      'emailTemplates' => 'Sablonok a kimenő e-mailekhez.',
      'import' => 'Adatok importálása CSV-fájlból.',
      'layoutManager' => 'Testreszabható elrendezések (listák, részletek, szerkesztés, keresés, tömeges frissítés).',
      'entityManager' => 'Egyéni entitások létrehozása és szerkesztése. Mezők és kapcsolatok kezelése.',
      'userInterface' => 'Az UI konfigurálása.',
      'authTokens' => 'Aktív hitelesítések. IP-címet és az utolsó hozzáférési dátumot.',
      'authentication' => 'Hitelesítési beállítások.',
      'currency' => 'Valuta beállítások és árak.',
      'extensions' => 'A bővítmények telepítése vagy eltávolítása.',
      'integrations' => 'Integráció harmadik féltől származó szolgáltatásokkal.',
      'notifications' => 'Alkalmazáson belüli és e-mail értesítési beállítások.',
      'inboundEmails' => 'A bejövő e-mailek beállításai.',
      'emailFilters' => 'A megadott szűrővel egyező e-mail üzeneteket nem importálják.',
      'actionHistory' => 'A felhasználói műveletek naplózása.',
      'labelManager' => 'Alkalmazáscímkék testreszabása.',
      'authLog' => 'Bejelentkezés története.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Kicsi',
        'medium' => 'Közepes',
        'large' => 'Nagy',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'ÉS',
      'or' => 'VAGY',
      'not' => 'NEM',
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
      'Document' => 'Dokumentum beszúrása',
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
      'username' => 'Felhasználónév',
      'ipAddress' => 'IP-cím',
      'requestTime' => 'Kérés ideje',
      'createdAt' => 'Kért At',
      'isDenied' => 'Megtagadva',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portál',
      'user' => 'használó',
      'authToken' => 'Hitel Token létrehozva',
      'requestUrl' => 'URL kérése',
      'requestMethod' => 'Kérés módja',
      'authTokenIsActive' => 'Az Auth Token aktív',
    ),
    'links' => 
    array (
      'authToken' => 'Hitel Token létrehozva',
      'user' => 'használó',
      'portal' => 'Portál',
      'actionHistoryRecords' => 'Akció története',
    ),
    'presetFilters' => 
    array (
      'denied' => 'tiltott',
      'accepted' => 'Elfogadott',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Érvénytelen hitelesítő adatok',
        'INACTIVE_USER' => 'Inaktív felhasználó',
        'IS_PORTAL_USER' => 'Portál felhasználó',
        'IS_NOT_PORTAL_USER' => 'Nem portál felhasználó',
        'USER_IS_NOT_IN_PORTAL' => 'A felhasználó nem kapcsolódik a portálhoz',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'használó',
      'ipAddress' => 'IP-cím',
      'lastAccess' => 'Utolsó hozzáférési dátum',
      'createdAt' => 'Bejelentkezési dátum',
      'isActive' => 'Aktív',
      'portal' => 'Portál',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Akció története',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktív',
      'inactive' => 'tétlen',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Inaktív beállítás',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Inaktív beállítás',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Cím',
      'dateFrom' => 'Dátum óta',
      'dateTo' => 'Dátum',
      'autorefreshInterval' => 'Automatikus frissítési időköz',
      'displayRecords' => 'Megjeleníti a rekordokat',
      'isDoubleHeight' => 'Magasság 2x',
      'mode' => 'Mód',
      'enabledScopeList' => 'Mit jelenjen meg',
      'users' => 'felhasználók',
      'entityType' => 'Entity Type',
      'primaryFilter' => 'Elsődleges szűrő',
      'boolFilterList' => 'További szűrők',
      'sortBy' => 'Rendelés (mező)',
      'sortDirection' => 'Rendelés (irány)',
      'expandedLayout' => 'Elrendezés',
      'dateFilter' => 'Dátum szűrő',
      'futureDays' => 'Következő X napok',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Hét (napirend)',
        'basicWeek' => 'Hét',
        'month' => 'Hónap',
        'basicDay' => 'Nap',
        'agendaDay' => 'Nap (napirend)',
        'timeline' => 'Idővonal',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Válassza ki az Entity Type elemet a vázlatos beállításokban.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Mező',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'egyenlő',
        'notEquals' => 'Nem egyenlő',
        'greaterThan' => 'Nagyobb, mint',
        'lessThan' => 'Kevesebb, mint',
        'greaterThanOrEquals' => 'Nagyobb vagy egyenlő',
        'lessThanOrEquals' => 'Kevesebb mint vagy egyenlő',
        'in' => 'Ban ben',
        'notIn' => 'Nem bent',
        'inPast' => 'A múltban',
        'inFuture' => 'Jövő',
        'isToday' => 'Ma van',
        'isTrue' => 'Igaz',
        'isFalse' => 'Hamis',
        'isEmpty' => 'Üres',
        'isNotEmpty' => 'Nem üres',
        'contains' => 'tartalmazza',
        'notContains' => 'Nem tartalmaz',
        'has' => 'tartalmazza',
        'notHas' => 'Nem tartalmaz',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Név (Tárgy)',
      'parent' => 'Szülő',
      'status' => 'Állapot',
      'dateSent' => 'Dátum elküldve',
      'from' => 'Tól től',
      'to' => 'Nak nek',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Válaszolni',
      'replyToString' => 'Válasz erre (karakterlánc)',
      'isHtml' => 'Html',
      'body' => 'Test',
      'bodyPlain' => 'Test (egyszerű)',
      'subject' => 'Tantárgy',
      'attachments' => 'Mellékletek',
      'selectTemplate' => 'Válassza a Sablon lehetőséget',
      'fromEmailAddress' => 'Címtől',
      'toEmailAddresses' => 'Az e-mail címzettjeihez',
      'emailAddress' => 'Email cím',
      'deliveryDate' => 'Kiszállítási dátum',
      'account' => 'számla',
      'users' => 'felhasználók',
      'replied' => 'válaszolt',
      'replies' => 'Válaszok',
      'isRead' => 'Olvasson',
      'isNotRead' => 'Nem olvasta',
      'isImportant' => 'Fontos',
      'isReplied' => 'Válaszol',
      'isNotReplied' => 'Nem válaszol',
      'isUsers' => 'A felhasználó',
      'inTrash' => 'A kukába',
      'sentBy' => 'Elküldött',
      'folder' => 'Folder',
      'inboundEmails' => 'Csoportszámlák',
      'emailAccounts' => 'Személyes számlák',
      'hasAttachment' => 'Csatlakozás',
      'assignedUsers' => 'Hozzárendelt felhasználók',
      'ccEmailAddresses' => 'CC e-mail címek',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Válasz az e-mail címekre',
      'messageId' => 'Üzenetazonosító',
      'messageIdInternal' => 'Üzenetazonosító (belső)',
      'folderId' => 'Mappaazonosító',
      'fromName' => 'Névből',
      'fromString' => 'A karakterláncból',
      'isSystem' => 'Rendszer',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'replied' => 'válaszolt',
      'replies' => 'Válaszok',
      'inboundEmails' => 'Csoportszámlák',
      'emailAccounts' => 'Személyes számlák',
      'assignedUsers' => 'Hozzárendelt felhasználók',
      'sentBy' => 'Elküldött',
      'attachments' => 'Mellékletek',
      'fromEmailAddress' => 'Az e-mail címről',
      'toEmailAddresses' => 'Az e-mail címzettjeihez',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Válasz az e-mail címekre',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'vázlat',
        'Sending' => 'elküldés',
        'Sent' => 'Küldött',
        'Archived' => 'Archivált',
        'Received' => 'kapott',
        'Failed' => 'nem sikerült',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archívum e-mailben',
      'Archive Email' => 'Archívum e-mailben',
      'Compose' => 'Összeállít',
      'Reply' => 'Válasz',
      'Reply to All' => 'Válasz mindenkinek',
      'Forward' => 'Előre',
      'Original message' => 'Eredeti üzenet',
      'Forwarded message' => 'továbbított üzenet',
      'Email Accounts' => 'Személyes e-mail fiókok',
      'Inbound Emails' => 'Csoportos e-mail fiókok',
      'Email Templates' => 'E-mail sablonok',
      'Send Test Email' => 'Küldjön e-mailt',
      'Send' => 'Elküld',
      'Email Address' => 'Email cím',
      'Mark Read' => 'Olvasottnak jelöl',
      'Sending...' => 'Küldés ...',
      'Save Draft' => 'Piszkozat mentése',
      'Mark all as read' => 'összes megjelölése olvasottként',
      'Show Plain Text' => 'Egyszerű szöveg megjelenítése',
      'Mark as Important' => 'Megjelölés fontosnak',
      'Unmark Importance' => 'Jelölje meg a fontosságot',
      'Move to Trash' => 'Kidobni a kukába',
      'Retrieve from Trash' => 'Visszalépés a kukából',
      'Move to Folder' => 'Áthelyezés a mappába',
      'Filters' => 'Szűrők',
      'Folders' => 'mappák',
      'Create Lead' => 'Lead létrehozása',
      'Create Contact' => 'Kapcsolat létrehozása',
      'Add to Contact' => 'Hozzáadás a kapcsolatokhoz',
      'Add to Lead' => 'Add az ólomhoz',
      'Create Task' => 'Feladat létrehozása',
      'Create Case' => 'Létrehozás',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Nincs SMTP beállítás. {link}.',
      'testEmailSent' => 'A tesztüzenet elküldésre került',
      'emailSent' => 'Az e-mail el lett küldve',
      'savedAsDraft' => 'Mentve mint tervezet',
      'confirmInsertTemplate' => 'Az e-mail szervezet elvész. Biztosan be kívánja illeszteni a sablont?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Küldött',
      'archived' => 'Archivált',
      'inbox' => 'Bejövő',
      'drafts' => 'Dámajáték',
      'trash' => 'Szemét',
      'important' => 'Fontos',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Jelöld olvasottként',
      'markAsNotRead' => 'Megjelölés nem olvasható',
      'markAsImportant' => 'Megjelölés fontosnak',
      'markAsNotImportant' => 'Jelölje meg a fontosságot',
      'moveToTrash' => 'Kidobni a kukába',
      'moveToFolder' => 'Áthelyezés a mappába',
      'retrieveFromTrash' => 'Visszalépés a kukából',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'status' => 'Állapot',
      'host' => 'Házigazda',
      'username' => 'Felhasználónév',
      'password' => 'Jelszó',
      'port' => 'Kikötő',
      'monitoredFolders' => 'Figyelt mappák',
      'ssl' => 'SSL',
      'fetchSince' => 'Fetch As',
      'emailAddress' => 'Email cím',
      'sentFolder' => 'Elküldött mappa',
      'storeSentEmails' => 'Elküldött e-mailek tárolása',
      'keepFetchedEmailsUnread' => 'A letöltött e-mailek olvasatlanok maradjanak',
      'emailFolder' => 'Tegye be a mappába',
      'useImap' => 'E-mailek lekérése',
      'useSmtp' => 'SMTP használata',
      'smtpHost' => 'SMTP fogadó',
      'smtpPort' => 'SMTP port',
      'smtpAuth' => 'SMTP hitelesítés',
      'smtpSecurity' => 'SMTP biztonság',
      'smtpUsername' => 'SMTP felhasználónév',
      'smtpPassword' => 'SMTP jelszó',
    ),
    'links' => 
    array (
      'filters' => 'Szűrők',
      'emails' => 'e-mailek',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktív',
        'Inactive' => 'tétlen',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'E-mail fiók létrehozása',
      'IMAP' => 'IMAP',
      'Main' => 'Fő',
      'Test Connection' => 'Vizsgálati kapcsolat',
      'Send Test Email' => 'Küldjön e-mailt',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nem sikerült csatlakozni az IMAP kiszolgálóhoz',
      'connectionIsOk' => 'A kapcsolat rendben van',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'A több mappát vesszővel kell elválasztani.

Hozzáadhat egy "Elküldött" mappát a külső e-mail kliensnek küldött e-mailek szinkronizálásához.',
      'storeSentEmails' => 'Az elküldött e-maileket az IMAP szerveren tárolja. Az e-mail cím mezőjének meg kell egyeznie a cím e-mailjeivel.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Elsődleges',
      'Opted Out' => 'Elutasított',
      'Invalid' => 'Érvénytelen',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Tól től',
      'to' => 'Nak nek',
      'subject' => 'Tantárgy',
      'bodyContains' => 'A test tartalmaz',
      'action' => 'Akció',
      'isGlobal' => 'Globális',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'E-mail szűrő létrehozása',
      'Emails' => 'e-mailek',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Figyelmen kívül hagyni',
        'Move to Folder' => 'Tegye be a mappába',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Adja meg a szűrőnek egy leíró nevet.',
      'subject' => 'Használjon helyettesítőt *:

szöveg * - szöveggel kezdődik,
* szöveg * - szöveg,
* szöveg - szöveggel végződik.',
      'bodyContains' => 'Az e-mail teste tartalmazza a megadott szavakat vagy kifejezéseket.',
      'from' => 'E-mailek küldése a megadott címről. Hagyja üresen, ha nem szükséges. Használhat helyettesítőt *.',
      'to' => 'E-mailek küldése a megadott címre. Hagyja üresen, ha nem szükséges. Használhat helyettesítőt *.',
      'isGlobal' => 'Ez a szűrő a rendszerbe érkező összes e-mailre vonatkozik.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Értesítések kihagyása',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Mappa létrehozás',
      'Manage Folders' => 'Mappák kezelése',
      'Emails' => 'e-mailek',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'status' => 'Állapot',
      'isHtml' => 'Html',
      'body' => 'Test',
      'subject' => 'Tantárgy',
      'attachments' => 'Mellékletek',
      'insertField' => 'Terület beillesztése',
      'oneOff' => 'Egyszeri',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'E-mail sablon létrehozása',
      'Info' => 'Info',
      'Available placeholders' => 'Rendelkezésre álló helyőrzők',
    ),
    'messages' => 
    array (
      'infoText' => 'Rendelkezésre álló helyőrzők:

{optOutUrl} & # 8211; A megtagadási link URL-je;

{optOutLink} & # 8211; leiratkozási link.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Ellenőrizze, hogy ezt a sablont csak egyszer használja. Például. Mass Email számára.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Tényleges',
    ),
    'placeholderTexts' => 
    array (
      'optOutUrl' => 'A le nem adható link URL-je',
      'optOutLink' => 'leiratkozási link',
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
      'Relationships' => 'Kapcsolatok',
      'Schedule' => 'Menetrend',
      'Log' => 'Bejelentkezés',
      'Formula' => 'Képlet',
    ),
    'fields' => 
    array (
      'name' => 'Név',
      'type' => 'típus',
      'labelSingular' => 'Egyetlen címke',
      'labelPlural' => 'Plurális címke',
      'stream' => 'Folyam',
      'label' => 'Címke',
      'linkType' => 'Link típusa',
      'entityForeign' => 'Külföldi szervezet',
      'linkForeign' => 'Külföldi link',
      'link' => 'Link',
      'labelForeign' => 'Külföldi címke',
      'sortBy' => 'Alapértelmezett megrendelés (mező)',
      'sortDirection' => 'Alapértelmezett megrendelés (irány)',
      'relationName' => 'A középső tábla neve',
      'linkMultipleField' => 'Link Több mező',
      'linkMultipleFieldForeign' => 'Külföldi link több területen',
      'disabled' => 'Tiltva',
      'textFilterFields' => 'Szövegszűrős mezők',
      'audited' => 'ellenőrzött',
      'auditedForeign' => 'Külföldi ellenőrzés',
      'statusField' => 'Állapotmező',
      'beforeSaveCustomScript' => 'Mielőtt elment volna az egyéni scriptet',
      'color' => 'Szín',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'A Kanban nézetben figyelmen kívül hagyott csoportok',
      'iconClass' => 'Ikon',
      'fullTextSearch' => 'Full-Text Search',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Egyik sem',
        'Base' => 'Bázis',
        'Person' => 'Személy',
        'CategoryTree' => 'Kategóriafa',
        'Event' => 'Esemény',
        'BasePlus' => 'Base Plus',
        'Company' => 'Vállalat',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Sok-sok',
        'oneToMany' => 'Egy a sokhoz',
        'manyToOne' => 'Sok-to-One',
        'parentToChildren' => 'Szülő-to-Children',
        'childrenToParent' => 'Gyermek-to-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => 'növekvő',
        'desc' => 'csökkenő',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Az entitást létrehozták',
      'linkAlreadyExists' => 'Link név konfliktus.',
      'linkConflict' => 'Névkonfliktus: már létezik egy azonos nevű link vagy mező.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'A mező frissítései be vannak jelentkezve az adatfolyamba.',
      'textFilterFields' => 'A szöveges keresés által használt mezők.',
      'stream' => 'Függetlenül attól, hogy az entitás Stream-lel rendelkezik',
      'disabled' => 'Ellenőrizze, hogy nincs-e szüksége erre a rendszerre.',
      'linkAudited' => 'A kapcsolódó rekordok létrehozása és a meglévő rekordok összekapcsolása folyamatban lesz.',
      'linkMultipleField' => 'Link Több mező hasznos módja a kapcsolatok szerkesztéséhez. Ne használja, ha nagyszámú kapcsolódó nyilvántartással rendelkezik.',
      'entityType' => 'Base Plus - Tevékenységek, előzmények és feladatok panelek.

Esemény - elérhető a Naptár és tevékenységek panelben.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Minden mező exportálása',
      'fieldList' => 'Mező lista',
      'format' => 'Formátum',
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
      'name' => 'Név',
      'version' => 'Változat',
      'description' => 'Leírás',
      'isInstalled' => 'telepített',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Eltávolítás',
      'Install' => 'Telepítés',
    ),
    'messages' => 
    array (
      'uninstalled' => 'A (z) {name} bővítmény eltávolításra került',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Csatlakozás',
      'Connected' => 'csatlakoztatva',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dinamikus logika',
      'Name' => 'Név',
      'Label' => 'Címke',
      'Type' => 'típus',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Egyik sem',
        'javascript: return this.dateTime.getNow(1);' => 'Most',
        'javascript: return this.dateTime.getNow(5);' => 'Most (5 m)',
        'javascript: return this.dateTime.getNow(15);' => 'Most (15 m)',
        'javascript: return this.dateTime.getNow(30);' => 'Most (30 m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+ 6 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+ 11 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 óra',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 nap',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 nap',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 nap',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 nap',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 nap',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 nap',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 hét',
      ),
      'dateDefault' => 
      array (
        '' => 'Egyik sem',
        'javascript: return this.dateTime.getToday();' => 'Ma',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 nap',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 hét',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+ 2 hét',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 hét',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+ 2 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+ 3 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+ 5 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+ 6 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+ 7 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+ 10 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+ 11 hónap',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 év',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'A frissítések naplózásra kerülnek.',
      'required' => 'A mező kötelező lesz. Nem lehet üresen hagyni.',
      'default' => 'A létrehozáskor alapértelmezett érték lesz.',
      'min' => 'Minimális elfogadható érték.',
      'max' => 'Maximális elfogadható érték.',
      'seeMoreDisabled' => 'Ha nincs bejelölve, a hosszú szövegek lerövidülnek.',
      'lengthOfCut' => 'Mennyi ideig lehet a szöveg előtt vágni.',
      'maxLength' => 'Max elfogadható szöveghossz.',
      'before' => 'A dátumértéknek meg kell felelnie a megadott mező dátumértékének.',
      'after' => 'A dátumértéknek a megadott mező dátumértékének után kell lennie.',
      'readOnly' => 'A mező értékét a felhasználó nem határozhatja meg. De kiszámítható a képlet szerint.',
      'maxFileSize' => 'Ha üres vagy 0, akkor nincs korlátozás.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'utca',
        'city' => 'Város',
        'state' => 'Állapot',
        'country' => 'Ország',
        'postalCode' => 'Irányítószám',
        'map' => 'Térkép',
      ),
      'personName' => 
      array (
        'salutation' => 'Üdvözlés',
        'first' => 'Első',
        'last' => 'Utolsó',
      ),
      'currency' => 
      array (
        'converted' => '(Konvertált)',
        'currency' => '(Valuta)',
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
      'User' => 'használó',
      'Team' => 'Csapat',
      'Role' => 'Szerep',
      'EmailTemplate' => 'E-mail sablon',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Személyes e-mail fiók',
      'EmailAccountScope' => 'Személyes e-mail fiók',
      'OutboundEmail' => 'Kimenő e-mail',
      'ScheduledJob' => 'Ütemezett munka',
      'ExternalAccount' => 'Külső számla',
      'Extension' => 'Kiterjesztés',
      'Dashboard' => 'Irányítópult',
      'InboundEmail' => 'Csoportos e-mail fiók',
      'Stream' => 'Folyam',
      'Import' => 'import',
      'Template' => 'Sablon',
      'Job' => 'Munka',
      'EmailFilter' => 'E-mail szűrő',
      'Portal' => 'Portál',
      'PortalRole' => 'Portál szerep',
      'Attachment' => 'Attachment',
      'EmailFolder' => 'E-mail mappa',
      'PortalUser' => 'Portál felhasználó',
      'ScheduledJobLogRecord' => 'Ütemezett feladatnapló',
      'PasswordChangeRequest' => 'Jelszóváltási kérelem',
      'ActionHistoryRecord' => 'Művelettörténeti rekord',
      'AuthToken' => 'Hitel Token',
      'UniqueId' => 'Egyéni azonosító',
      'LastViewed' => 'Utoljára megtekintett',
      'Settings' => 'Beállítások',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integráció',
      'LayoutManager' => 'Elrendezéskezelő',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Export',
      'DynamicLogic' => 'Dinamikus logika',
      'DashletOptions' => 'Dashlet opciók',
      'Admin' => 'admin',
      'Global' => 'Globális',
      'Preferences' => 'preferenciák',
      'EmailAddress' => 'Email cím',
      'PhoneNumber' => 'Telefonszám',
      'AuthLogRecord' => 'Hitelesítési napló',
      'AuthFailLogRecord' => 'Hitelesítési hibaüzenet',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'számla',
      'Contact' => 'Kapcsolatba lépni',
      'Lead' => 'Vezet',
      'Target' => 'Cél',
      'Opportunity' => 'Lehetőség',
      'Meeting' => 'Találkozó',
      'Calendar' => 'Naptár',
      'Call' => 'Hívás',
      'Task' => 'Feladat',
      'Case' => 'Ügy',
      'Document' => 'Dokumentum',
      'DocumentFolder' => 'Dokumentum mappa',
      'Campaign' => 'Kampány',
      'TargetList' => 'Tűztábla',
      'MassEmail' => 'Tömeges e-mail',
      'EmailQueueItem' => 'E-mail soros tétel',
      'CampaignTrackingUrl' => 'Követési URL',
      'Activities' => 'Tevékenységek',
      'KnowledgeBaseArticle' => 'Tudásbázis cikk',
      'KnowledgeBaseCategory' => 'Tudásbázis-kategória',
      'CampaignLogRecord' => 'Kampánynaplófelvétel',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'e-mailek',
      'User' => 'felhasználók',
      'Team' => 'csapatok',
      'Role' => 'szerepek',
      'EmailTemplate' => 'E-mail sablonok',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Személyes e-mail fiókok',
      'EmailAccountScope' => 'Személyes e-mail fiókok',
      'OutboundEmail' => 'Kimenő e-mailek',
      'ScheduledJob' => 'Ütemezett munkák',
      'ExternalAccount' => 'Külső számlák',
      'Extension' => 'Extensions',
      'Dashboard' => 'Irányítópult',
      'InboundEmail' => 'Csoportos e-mail fiókok',
      'Stream' => 'Folyam',
      'Import' => 'Eredmények importálása',
      'Template' => 'sablonok',
      'Job' => 'Állás',
      'EmailFilter' => 'E-mail szűrők',
      'Portal' => 'portálok',
      'PortalRole' => 'Portál szerepek',
      'Attachment' => 'Mellékletek',
      'EmailFolder' => 'E-mail mappák',
      'PortalUser' => 'Portál felhasználók',
      'ScheduledJobLogRecord' => 'Ütemezett munkanaplórekordok',
      'PasswordChangeRequest' => 'Jelszóváltási kérelmek',
      'ActionHistoryRecord' => 'Akció története',
      'AuthToken' => 'Hiteles tokenek',
      'UniqueId' => 'Egyedi azonosító',
      'LastViewed' => 'Utoljára megtekintett',
      'AuthLogRecord' => 'Hitelesítési napló',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Fiókok',
      'Contact' => 'Kapcsolatok',
      'Lead' => 'vezet',
      'Target' => 'célok',
      'Opportunity' => 'lehetőségek',
      'Meeting' => 'találkozók',
      'Calendar' => 'Naptár',
      'Call' => 'felhívja',
      'Task' => 'feladatok',
      'Case' => 'Olyan esetek,',
      'Document' => 'Dokumentumok',
      'DocumentFolder' => 'Dokumentummappák',
      'Campaign' => 'kampányok',
      'TargetList' => 'Céllista',
      'MassEmail' => 'Tömeges e-mailek',
      'EmailQueueItem' => 'E-mail soros elemek',
      'CampaignTrackingUrl' => 'Nyomon követési URL-ek',
      'Activities' => 'Tevékenységek',
      'KnowledgeBaseArticle' => 'Tudásbázis',
      'KnowledgeBaseCategory' => 'Tudásbázis kategóriák',
      'CampaignLogRecord' => 'Kampánynaplórekordok',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' => 
    array (
      'Misc' => 'Egyéb',
      'Merge' => 'Összeolvad',
      'None' => 'Egyik sem',
      'Home' => 'itthon',
      'by' => 'által',
      'Saved' => 'Mentett',
      'Error' => 'Hiba',
      'Select' => 'választ',
      'Not valid' => 'Nem érvényes',
      'Please wait...' => 'Kérlek várj...',
      'Please wait' => 'Kérlek várj',
      'Loading...' => 'Betöltés...',
      'Uploading...' => 'Feltöltés...',
      'Sending...' => 'Küldés ...',
      'Merging...' => 'Összevonása ...',
      'Merged' => 'összeolvadt',
      'Removed' => 'Eltávolított',
      'Posted' => 'Közzétett',
      'Linked' => 'összekapcsolt',
      'Unlinked' => 'Nem összekapcsolt',
      'Done' => 'Kész',
      'Access denied' => 'Hozzáférés megtagadva',
      'Not found' => 'Nem található',
      'Access' => 'Hozzáférés',
      'Are you sure?' => 'biztos vagy ebben?',
      'Record has been removed' => 'A felvételt eltávolították',
      'Wrong username/password' => 'Helytelen felhasználónév / jelszó',
      'Post cannot be empty' => 'A bejegyzés nem lehet üres',
      'Removing...' => 'Eltávolítása ...',
      'Unlinking...' => 'Unlinking ...',
      'Posting...' => 'Közzététel ...',
      'Username can not be empty!' => 'A felhasználónév nem lehet üres!',
      'Cache is not enabled' => 'A gyorsítótár nem engedélyezett',
      'Cache has been cleared' => 'A gyorsítótár törlődött',
      'Rebuild has been done' => 'Újraépítés történt',
      'Return to Application' => 'Visszatérés az alkalmazáshoz',
      'Saving...' => 'Megtakarítás...',
      'Modified' => 'Módosított',
      'Created' => 'Alkotó',
      'Create' => 'Teremt',
      'create' => 'teremt',
      'Overview' => 'Áttekintés',
      'Details' => 'Részletek',
      'Add Field' => 'Mező hozzáadása',
      'Add Dashlet' => 'Add hozzá a Dashletet',
      'Filter' => 'Szűrő',
      'Edit Dashboard' => 'Az irányítópult szerkesztése',
      'Add' => 'hozzáad',
      'Add Item' => 'Elem hozzáadása',
      'Reset' => 'Visszaállítás',
      'Menu' => 'Menü',
      'More' => 'Több',
      'Search' => 'Keresés',
      'Only My' => 'Csak az enyém',
      'Open' => 'Nyisd ki',
      'Admin' => 'admin',
      'About' => 'Ról ről',
      'Refresh' => 'Frissítés',
      'Remove' => 'eltávolít',
      'Options' => 'Lehetőségek',
      'Username' => 'Felhasználónév',
      'Password' => 'Jelszó',
      'Login' => 'Belépés',
      'Log Out' => 'Kijelentkezés',
      'Preferences' => 'preferenciák',
      'State' => 'Állapot',
      'Street' => 'utca',
      'Country' => 'Ország',
      'City' => 'Város',
      'PostalCode' => 'Irányítószám',
      'Followed' => 'Követi',
      'Follow' => 'Kövesse',
      'Followers' => 'Követő',
      'Clear Local Cache' => 'Helyi gyorsítótár törlése',
      'Actions' => 'Hozzászólások',
      'Delete' => 'Töröl',
      'Update' => 'frissítés',
      'Save' => 'Mentés',
      'Edit' => 'szerkesztése',
      'View' => 'Kilátás',
      'Cancel' => 'Megszünteti',
      'Apply' => 'Alkalmaz',
      'Unlink' => 'kapcsolatának megszüntetése',
      'Mass Update' => 'Tömeges frissítés',
      'Export' => 'Export',
      'No Data' => 'Nincs adat',
      'No Access' => 'Nincs hozzáférés',
      'All' => 'Minden',
      'Active' => 'Aktív',
      'Inactive' => 'tétlen',
      'Write your comment here' => 'Írja meg észrevételeit itt',
      'Post' => 'posta',
      'Stream' => 'Folyam',
      'Show more' => 'Mutass többet',
      'Dashlet Options' => 'Dashlet opciók',
      'Full Form' => 'Teljes alak',
      'Insert' => 'Insert',
      'Person' => 'Személy',
      'First Name' => 'Keresztnév',
      'Last Name' => 'Vezetéknév',
      'Original' => 'Eredeti',
      'You' => 'te',
      'you' => 'te',
      'change' => 'változás',
      'Change' => 'változás',
      'Primary' => 'Elsődleges',
      'Save Filter' => 'Szűrés mentése',
      'Administration' => 'Adminisztráció',
      'Run Import' => 'Importálás futtatása',
      'Duplicate' => 'Másolat',
      'Notifications' => 'értesítések',
      'Mark all read' => 'Jelölje meg az összeset',
      'See more' => 'Többet látni',
      'Today' => 'Ma',
      'Tomorrow' => 'Holnap',
      'Yesterday' => 'Tegnap',
      'Submit' => 'beküldése',
      'Close' => 'Bezárás',
      'Yes' => 'Igen',
      'No' => 'Nem',
      'Select All Results' => 'Válassza ki az összes eredményt',
      'Value' => 'Érték',
      'Current version' => 'Jelenlegi verzió',
      'List View' => 'Lista nézet',
      'Tree View' => 'Fanézet',
      'Unlink All' => 'Minden összekapcsolása',
      'Total' => 'Teljes',
      'Print to PDF' => 'Nyomtatás PDF formátumba',
      'Default' => 'Alapértelmezett',
      'Number' => 'Szám',
      'From' => 'Tól től',
      'To' => 'Nak nek',
      'Create Post' => 'Hozzon létre üzenetet',
      'Previous Entry' => 'Előző bejegyzés',
      'Next Entry' => 'Következő bejegyzés',
      'View List' => 'Lista megtekintése',
      'Attach File' => 'Fájl csatolása',
      'Skip' => 'Skip',
      'Attribute' => 'Tulajdonság',
      'Function' => 'Funkció',
      'Self-Assign' => 'Self-hozzárendelése',
      'Self-Assigned' => 'Self-Címzett',
      'Expand' => 'Kiterjed',
      'Collapse' => 'Összeomlás',
      'New notifications' => 'Új értesítések',
      'Manage Categories' => 'Kategóriák kezelése',
      'Manage Folders' => 'Mappák kezelése',
      'Convert to' => 'Konvertálás',
      'View Personal Data' => 'Személyes adatok megtekintése',
      'Personal Data' => 'Személyes adatok',
      'Erase' => 'Törli',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => 'Bejövő e-mail létrehozása',
      'Activities' => 'Tevékenységek',
      'History' => 'Történelem',
      'Attendees' => 'résztvevők',
      'Schedule Meeting' => 'Menetrend Találkozó',
      'Schedule Call' => 'Hívás ütemezése',
      'Compose Email' => 'E-mail írása',
      'Log Meeting' => 'Naplózás',
      'Log Call' => 'Naplóhívás',
      'Archive Email' => 'Archívum e-mailben',
      'Create Task' => 'Feladat létrehozása',
      'Tasks' => 'feladatok',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Kérlek várj...',
      'posting' => 'Közzététel ...',
      'loading' => 'Betöltés...',
      'saving' => 'Megtakarítás...',
      'confirmLeaveOutMessage' => 'Biztosan elhagyja az űrlapot?',
      'notModified' => 'Nem módosította a rekordot',
      'duplicate' => 'A létrehozott rekord már létezhet',
      'dropToAttach' => 'Csúszás csatolni',
      'fieldIsRequired' => '{kötelező mező',
      'fieldShouldBeEmail' => 'A {field} érvényes e-mailnek kell lennie',
      'fieldShouldBeFloat' => 'A {field} érvényes úszónak kell lennie',
      'fieldShouldBeInt' => 'A {field} érvényes egész számnak kell lennie',
      'fieldShouldBeDate' => 'A {field} érvényes dátumnak kell lennie',
      'fieldShouldBeDatetime' => '{field} érvényes dátumnak és időnek kell lennie',
      'fieldShouldAfter' => '{field} kell a {otherField} után',
      'fieldShouldBefore' => '{field} a {otherField}',
      'fieldShouldBeBetween' => '{field} legyen {min} és {max} között',
      'fieldShouldBeLess' => '{field} nem lehet nagyobb, mint {value}',
      'fieldShouldBeGreater' => '{field} nem lehet kevesebb, mint {value}',
      'fieldBadPasswordConfirm' => '{field} nincs megfelelően megerősítve',
      'fieldMaxFileSizeError' => 'A fájl nem haladhatja meg a {max} Mb-t',
      'fieldIsUploading' => 'Feltöltés folyamatban',
      'resetPreferencesDone' => 'A beállítások alapértelmezettre álltak',
      'confirmation' => 'biztos vagy ebben?',
      'unlinkAllConfirmation' => 'Biztos benne, hogy le szeretné kapcsolni az összes kapcsolódó iratot?',
      'resetPreferencesConfirmation' => 'Biztosan vissza kívánja állítani az alapértelmezett beállításokat?',
      'removeRecordConfirmation' => 'Biztosan eltávolítja a rekordot?',
      'unlinkRecordConfirmation' => 'Biztos benne, hogy le szeretné kapcsolni a kapcsolódó rekordot?',
      'removeSelectedRecordsConfirmation' => 'Biztosan törölni szeretne kiválasztott rekordokat?',
      'massUpdateResult' => '{count} rekordok frissítve',
      'massUpdateResultSingle' => 'A (z) {count} rekord frissítve lett',
      'noRecordsUpdated' => 'Nem készült feljegyzés',
      'massRemoveResult' => 'A (z) {count} rekordok eltávolításra kerültek',
      'massRemoveResultSingle' => 'A (z) {count} rekord eltávolítva',
      'noRecordsRemoved' => 'Nincsenek bejegyzések eltávolítva',
      'clickToRefresh' => 'Kattintson a frissítéshez',
      'streamPostInfo' => 'Írja be a <strong> @ felhasználónevet </ strong>, hogy megemlítse a felhasználókban a bejegyzést.

Elérhető markdown szintaxis:
`<Code> kódot </ code>`
`` `<kód> többsoros kód </ code>` ``
** <strong> erős szöveg </ strong> **
* <em> kiemelt szöveg </ em> *
~~ <del> törölt szöveg </ del> ~~
> blockquote
[link szöveg] (url)',
      'writeYourCommentHere' => 'Írja meg észrevételeit itt',
      'writeMessageToUser' => 'Írj üzenetet {user}',
      'writeMessageToSelf' => 'Írj üzenetet az adatfolyamodra',
      'typeAndPressEnter' => 'Írja be és nyomja meg az enter billentyűt',
      'checkForNewNotifications' => 'Új bejelentések ellenőrzése',
      'checkForNewNotes' => 'Ellenőrizze az adatfolyam frissítéseit',
      'internalPost' => 'A bejegyzést csak a belső felhasználók láthatják',
      'internalPostTitle' => 'A bejegyzést csak a belső felhasználók láthatják',
      'done' => 'Kész',
      'confirmMassFollow' => 'Biztosan követni szeretné a kiválasztott rekordokat?',
      'confirmMassUnfollow' => 'Biztosan el szeretné távolítani a kiválasztott rekordokat?',
      'massFollowResult' => 'A (z) {count} rekordokat követjük',
      'massUnfollowResult' => 'A (z) {count} rekordok nem lesznek követve',
      'massFollowResultSingle' => 'A (z) {count} rekordot követjük',
      'massUnfollowResultSingle' => 'A (z) {count} rekordot nem követi',
      'massFollowZeroResult' => 'Semmit nem követett',
      'massUnfollowZeroResult' => 'Semmi sem volt követett',
      'erasePersonalDataConfirmation' => 'A bejelölt mezők véglegesen törlődnek. biztos vagy ebben?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Csak az enyém',
      'followed' => 'Követi',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Követi',
      'all' => 'Minden',
    ),
    'massActions' => 
    array (
      'remove' => 'eltávolít',
      'merge' => 'Összeolvad',
      'massUpdate' => 'Tömeges frissítés',
      'export' => 'Export',
      'follow' => 'Kövesse',
      'unfollow' => 'unfollow',
      'convertCurrency' => 'Pénznem konvertálása',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Név',
      'firstName' => 'Keresztnév',
      'lastName' => 'Vezetéknév',
      'salutationName' => 'Üdvözlés',
      'assignedUser' => 'Hozzárendelt felhasználó',
      'assignedUsers' => 'Hozzárendelt felhasználók',
      'emailAddress' => 'Email',
      'emailAddressData' => 'E-mail címadatok',
      'emailAddressIsOptedOut' => 'Az e-mail cím ki van kapcsolva',
      'assignedUserName' => 'Hozzárendelt felhasználónév',
      'teams' => 'csapatok',
      'createdAt' => 'Létrehozva',
      'modifiedAt' => 'Módosított At',
      'createdBy' => 'Készítette',
      'modifiedBy' => 'Módosította',
      'description' => 'Leírás',
      'address' => 'Cím',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (mobil)',
      'phoneNumberHome' => 'Haza telefonálni)',
      'phoneNumberFax' => 'Telefon (fax)',
      'phoneNumberOffice' => 'Telefon (iroda)',
      'phoneNumberOther' => 'Telefon (egyéb)',
      'phoneNumberData' => 'Telefonszámadatok',
      'order' => 'Sorrend',
      'parent' => 'Szülő',
      'children' => 'Gyermekek',
      'id' => 'ID',
      'ids' => 'azonosítók',
      'type' => 'Type',
      'names' => 'nevek',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Város',
      'billingAddressCountry' => 'Ország',
      'billingAddressPostalCode' => 'Irányítószám',
      'billingAddressState' => 'Állapot',
      'billingAddressStreet' => 'utca',
      'billingAddressMap' => 'Térkép',
      'addressCity' => 'Város',
      'addressStreet' => 'utca',
      'addressCountry' => 'Ország',
      'addressState' => 'Állapot',
      'addressPostalCode' => 'Irányítószám',
      'addressMap' => 'Térkép',
      'shippingAddressCity' => 'Város (Szállítás)',
      'shippingAddressStreet' => 'Utca (Szállítás)',
      'shippingAddressCountry' => 'Ország (szállítás)',
      'shippingAddressState' => 'Állam (szállítás)',
      'shippingAddressPostalCode' => 'Irányítószám (Szállítás)',
      'shippingAddressMap' => 'Térkép (Szállítás)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Hozzárendelt felhasználó',
      'createdBy' => 'Készítette',
      'modifiedBy' => 'Módosította',
      'team' => 'Csapat',
      'roles' => 'szerepek',
      'teams' => 'csapatok',
      'users' => 'felhasználók',
      'parent' => 'Szülő',
      'children' => 'Gyermekek',
      'contacts' => 'Kapcsolatok',
      'opportunities' => 'lehetőségek',
      'leads' => 'vezet',
      'meetings' => 'találkozók',
      'calls' => 'felhívja',
      'tasks' => 'feladatok',
      'emails' => 'e-mailek',
      'accounts' => 'Fiókok',
      'cases' => 'Olyan esetek,',
      'documents' => 'Dokumentumok',
      'account' => 'számla',
      'opportunity' => 'Lehetőség',
      'contact' => 'Kapcsolatba lépni',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Folyam',
      'Emails' => 'Bejövõ postafiókom',
      'Records' => 'Felvételi lista',
      'Leads' => 'Az én vezetem',
      'Opportunities' => 'Lehetőségek',
      'Tasks' => 'Saját feladatok',
      'Cases' => 'Az én ügyeim',
      'Calendar' => 'Naptár',
      'Calls' => 'Saját hívások',
      'Meetings' => 'Találkozásom',
      'OpportunitiesByStage' => 'Lehetőségek színpadon',
      'OpportunitiesByLeadSource' => 'Lehetőségek a vezető forrásból',
      'SalesByMonth' => 'Havi eladások',
      'SalesPipeline' => 'Értékesítési csővezeték',
      'Activities' => 'Tevékenységem',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entitás} van hozzárendelve',
      'emailReceived' => 'E-mail érkezett {from}',
      'entityRemoved' => '{user} eltávolítva {entityType} {entitás}',
    ),
    'streamMessages' => 
    array (
      'post' => '{felhasználó} a {entityType} {entitás}',
      'attach' => '{user} csatolt {entityType} {entitás}',
      'status' => '{user} frissített {field} a {entityType} {entitás}',
      'update' => '{user} frissített {entityType} {entitás}',
      'postTargetTeam' => 'a (z) {user} csapat {target}',
      'postTargetTeams' => '{user} a csapatoknak {target}',
      'postTargetPortal' => '{user} a portálra {target}',
      'postTargetPortals' => '{user} kiküldött portálokra {target}',
      'postTarget' => '{felhasználó} a {target}',
      'postTargetYou' => '{felhasználó} küldött neked',
      'postTargetYouAndOthers' => '{felhasználó} a (z) {target} címre és Önnek',
      'postTargetAll' => '{felhasználó} mindenkinek',
      'postTargetSelf' => '{user} önállóan',
      'postTargetSelfAndOthers' => '{felhasználó} a {target} -be és a saját oldalára',
      'mentionInPost' => 'A (z) {felhasználó} megemlítette: {named} {entityType} {entitás}',
      'mentionYouInPost' => '{user} megemlítettél a (z) {entityType} {entitás}',
      'mentionInPostTarget' => 'A (z) {felhasználó} megemlítette a (z) {mentioned} címet',
      'mentionYouInPostTarget' => '{user} megemlített téged a {target}',
      'mentionYouInPostTargetAll' => '{user} megemlített téged a postában mindenkinek',
      'mentionYouInPostTargetNoTarget' => '{user} megemlített téged a postában',
      'create' => '{user} létre {entityType} {entitás}',
      'createThis' => '{user} létrehozta ezt a {entityType}',
      'createAssignedThis' => '{user} létrehozta ezt {entityType} hozzárendelve {assignee}',
      'createAssigned' => '{user} létre {entityType} {entitás} hozzárendelve {assignee}',
      'createAssignedYou' => '{user} által létrehozott {entityType} {entitás} hozzá van rendelve',
      'createAssignedThisSelf' => '{user} létrehozta ezt a {entityType} önálló rendszert',
      'createAssignedSelf' => '{user} létrehozta a {entityType} {entitás} önálló hozzárendelést',
      'assign' => '{user} hozzárendelt {entityType} {entitás} a {assignee}',
      'assignThis' => '{user} ezt a {entityType} nevet {assignee}',
      'assignYou' => '{user} kijelölt {entityType} {entitás} Önnek',
      'assignThisVoid' => '{user} nem rendelte hozzá ezt a {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entitás}',
      'assignThisSelf' => '{user} ezt a {entityType}',
      'assignSelf' => '{user} önkiszolgáló {entityType} {entitás}',
      'postThis' => '{user} postázva',
      'attachThis' => '{user} csatolt',
      'statusThis' => '{user} frissített {field}',
      'updateThis' => '{user} frissítette ezt a {entityType}',
      'createRelatedThis' => '{user} létrehozta a {relatedEntityType} {relatedEntity} kapcsolatos {entityType}',
      'createRelated' => '{user} létrehozta a {relatedEntityType} {relatedEntity} típust {entityType} {entitás}',
      'relate' => '{user} kapcsolódó {relatedEntityType} {relatedEntity} a {entityType} {entitás}',
      'relateThis' => '{user} kapcsolt {relatedEntityType} {relatedEntity} ezzel a {entityType}',
      'emailReceivedFromThis' => 'E-mail érkezett {from}',
      'emailReceivedInitialFromThis' => 'E-mail érkezett {from}, ez a {entityType} létrehozva',
      'emailReceivedThis' => 'E-mail érkezett',
      'emailReceivedInitialThis' => 'E-mail érkezett, ez a {entityType} létrehozva',
      'emailReceivedFrom' => 'E-mail érkezett {from}, {entityType} {entitás}',
      'emailReceivedFromInitial' => 'Az {from}, {entityType} {entitás} kapott e-mailek létrejöttek',
      'emailReceived' => 'A (z) {entityType} {entitás}',
      'emailReceivedInitial' => 'Megkapott e-mail: {entityType} {entitás} létrehozva',
      'emailReceivedInitialFrom' => 'Az {from}, {entityType} {entitás} kapott e-mailek létrejöttek',
      'emailSent' => '{by} {entityType} {entitás}',
      'emailSentThis' => '{by} küldött e-mailt',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{felhasználó} a (z) {target} címre és magát',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{felhasználó} a {target} -be és önmagába küldött',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Január',
        1 => 'Február',
        2 => 'Március',
        3 => 'Április',
        4 => 'Május',
        5 => 'Június',
        6 => 'Július',
        7 => 'Augusztus',
        8 => 'Szeptember',
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
        0 => 'Vasárnap Hétfő Kedd Szerda Csütörtök Péntek Szombat',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Nap',
        1 => 'H',
        2 => 'Hé',
        3 => 'Hét',
        4 => 'Hét',
        5 => 'Hét',
        6 => 'Hét',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'Mi',
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
        'Mr.' => 'Úr.',
        'Mrs.' => 'Asszony.',
        'Ms.' => 'Kisasszony.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'azerbajdzsáni',
        'be_BY' => 'belorusz',
        'bg_BG' => 'bolgár',
        'bn_IN' => 'bengáli',
        'bs_BA' => 'bosnyák',
        'ca_ES' => 'katalán',
        'cs_CZ' => 'cseh',
        'cy_GB' => 'walesi',
        'da_DK' => 'dán',
        'de_DE' => 'német',
        'el_GR' => 'görög',
        'en_GB' => 'Angol (UK)',
        'es_MX' => 'Spanyol (Mexikó)',
        'en_US' => 'Angol (USA)',
        'es_ES' => 'Spanyol (spanyol)',
        'et_EE' => 'észt',
        'eu_ES' => 'baszk',
        'fa_IR' => 'perzsa',
        'fi_FI' => 'finn',
        'fo_FO' => 'feröeri',
        'fr_CA' => 'Francia (Kanada)',
        'fr_FR' => 'Francia (Franciaország)',
        'ga_IE' => 'ír',
        'gl_ES' => 'galíciai',
        'gn_PY' => 'guarani',
        'he_IL' => 'héber',
        'hi_IN' => 'hindi',
        'hr_HR' => 'horvát',
        'hu_HU' => 'Magyar',
        'hy_AM' => 'örmény',
        'id_ID' => 'indonéz',
        'is_IS' => 'izlandi',
        'it_IT' => 'olasz',
        'ja_JP' => 'japán',
        'ka_GE' => 'grúz',
        'km_KH' => 'khmer',
        'ko_KR' => 'koreai',
        'ku_TR' => 'kurd',
        'lt_LT' => 'litván',
        'lv_LV' => 'lett',
        'mk_MK' => 'macedóniai',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'maláj',
        'nb_NO' => 'Norvég bokmål',
        'nn_NO' => 'Norvég nynorsk',
        'ne_NP' => 'nepáli',
        'nl_NL' => 'holland',
        'pa_IN' => 'pandzsábi',
        'pl_PL' => 'lengyel',
        'ps_AF' => 'pastu',
        'pt_BR' => 'Portugál (brazil)',
        'pt_PT' => 'Portugál (portugál)',
        'ro_RO' => 'román',
        'ru_RU' => 'orosz',
        'sk_SK' => 'szlovák',
        'sl_SI' => 'szlovén',
        'sq_AL' => 'albán',
        'sr_RS' => 'szerb',
        'sv_SE' => 'svéd',
        'sw_KE' => 'szuahéli',
        'ta_IN' => 'tamil',
        'te_IN' => 'telugu',
        'th_TH' => 'thai',
        'tl_PH' => 'tagalog',
        'tr_TR' => 'török',
        'uk_UA' => 'ukrán',
        'ur_PK' => 'urdu',
        'vi_VN' => 'vietnami',
        'zh_CN' => 'Egyszerűsített kínai (Kína)',
        'zh_HK' => 'Hagyományos kínai (Hongkong)',
        'zh_TW' => 'Hagyományos kínai (tajvani)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Tovább',
        'notOn' => 'Nem',
        'after' => 'Után',
        'before' => 'Előtt',
        'between' => 'Között',
        'today' => 'Ma',
        'past' => 'Múlt',
        'future' => 'Jövő',
        'currentMonth' => 'Jelenlegi hónap',
        'lastMonth' => 'Múlt hónap',
        'nextMonth' => 'Következő hónap',
        'currentQuarter' => 'Jelenlegi negyedév',
        'lastQuarter' => 'Utolsó negyed',
        'currentYear' => 'Jelen év',
        'lastYear' => 'Tavaly',
        'lastSevenDays' => 'Az elmúlt 7 nap',
        'lastXDays' => 'Az utolsó X napok',
        'nextXDays' => 'Következő X napok',
        'ever' => 'Valaha',
        'isEmpty' => 'Üres',
        'olderThanXDays' => 'Régebbi, mint X nap',
        'afterXDays' => 'X nap után',
      ),
      'searchRanges' => 
      array (
        'is' => 'van',
        'isEmpty' => 'Üres',
        'isNotEmpty' => 'Nem üres',
        'isOneOf' => 'Bármelyik',
        'isFromTeams' => 'A csapatból',
        'isNot' => 'Nem',
        'isNotOneOf' => 'Egyik sem',
        'anyOf' => 'Bármelyik',
        'noneOf' => 'Egyik sem',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'egyenlő',
        'like' => 'Olyan, mint (%)',
        'notLike' => 'Nem tetszik (%)',
        'startsWith' => 'Kezdődik',
        'endsWith' => 'Végződik',
        'contains' => 'tartalmazza',
        'notContains' => 'Nem tartalmaz',
        'isEmpty' => 'Üres',
        'isNotEmpty' => 'Nem üres',
        'notEquals' => 'Nem egyenlő',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'egyenlő',
        'notEquals' => 'Nem egyenlő',
        'greaterThan' => 'Nagyobb, mint',
        'lessThan' => 'Kevesebb, mint',
        'greaterThanOrEquals' => 'Nagyobb vagy egyenlő',
        'lessThanOrEquals' => 'Kevesebb mint vagy egyenlő',
        'between' => 'Között',
        'isEmpty' => 'Üres',
        'isNotEmpty' => 'Nem üres',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Egyik sem',
        '0.5' => '30 másodperc',
        1 => '1 perc',
        2 => '2 perc',
        5 => '5 perc',
        10 => '10 perc',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobil',
        'Office' => 'Hivatal',
        'Fax' => 'Fax',
        'Home' => 'itthon',
        'Other' => 'Más',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Felugrik',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'A fordítás megtalálható itt: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Bátor',
          'italic' => 'dőlt betű',
          'underline' => 'Aláhúzás',
          'strike' => 'Sztrájk',
          'clear' => 'A betűtípus stílusának eltávolítása',
          'height' => 'Vonalmagasság',
          'name' => 'Betűtípus család',
          'size' => 'Betűméret',
        ),
        'image' => 
        array (
          'image' => 'Kép',
          'insert' => 'Kép beszúrása',
          'resizeFull' => 'Teljes méret megváltoztatása',
          'resizeHalf' => 'Félidő átméretezése',
          'resizeQuarter' => 'Negyedik átméretezés',
          'floatLeft' => 'Balra lebeg',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Húzza itt a képet',
          'selectFromFiles' => 'Válasszon a fájlok közül',
          'url' => 'Kép URL',
          'remove' => 'Kép eltávolítása',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link beszúrása',
          'unlink' => 'kapcsolatának megszüntetése',
          'edit' => 'szerkesztése',
          'textToDisplay' => 'Megjeleníteni kívánt szöveg',
          'url' => 'Milyen URL-címre kell ez a link?',
          'openInNewWindow' => 'Megnyitás új ablakban',
        ),
        'video' => 
        array (
          'video' => 'Videó',
          'videoLink' => 'Video Link',
          'insert' => 'Videó beszúrása',
          'url' => 'Videó URL-je?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram vagy DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'asztal',
        ),
        'hr' => 
        array (
          'insert' => 'A horizontális szabály beillesztése',
        ),
        'style' => 
        array (
          'style' => 'Stílus',
          'normal' => 'Normál',
          'blockquote' => 'Idézet',
          'pre' => 'Kód',
          'h1' => '1. fejléc',
          'h2' => '2. fejléc',
          'h3' => '3. fejléc',
          'h4' => '4. fejléc',
          'h5' => '5. fejléc',
          'h6' => '6. fejléc',
        ),
        'lists' => 
        array (
          'unordered' => 'Rendezetlen lista',
          'ordered' => 'Rendezett lista',
        ),
        'options' => 
        array (
          'help' => 'Segítség',
          'fullscreen' => 'Teljes képernyő',
          'codeview' => 'Kód nézet',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Bekezdés',
          'outdent' => 'Outdent',
          'indent' => 'bekezdés',
          'left' => 'Balra igazít',
          'center' => 'Állítsa be a központot',
          'right' => 'Igazíts jobbra',
          'justify' => 'Teljesen igazoljon',
        ),
        'color' => 
        array (
          'recent' => 'Legutóbbi szín',
          'more' => 'Több szín',
          'background' => 'BackColor',
          'foreground' => 'Betű szín',
          'transparent' => 'Átlátszó',
          'setTransparent' => 'Átlátszó',
          'reset' => 'Visszaállítás',
          'resetToDefault' => 'Visszaállítás alapértelmezettre',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Gyorsbillentyűket',
          'close' => 'Bezárás',
          'textFormatting' => 'Szövegformázás',
          'action' => 'Akció',
          'paragraphFormatting' => 'Bekezdés formázása',
          'documentStyle' => 'Dokumentum stílusa',
        ),
        'history' => 
        array (
          'undo' => 'kibont',
          'redo' => 'Újra',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'Lista',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Klasszikus Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Klasszikus Sakura',
      'EspoVertical' => 'Függőleges Espo',
      'SakuraVertical' => 'Függő Sakura',
      'Violet' => 'Klasszikus Violet',
      'VioletVertical' => 'Függőleges Violet',
      'Hazyblue' => 'Klasszikus Hazyblue',
      'HazyblueVertical' => 'Függőleges Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Visszavált importálás',
      'Return to Import' => 'Vissza az Importáláshoz',
      'Run Import' => 'Importálás futtatása',
      'Back' => 'Hát',
      'Field Mapping' => 'Field Mapping',
      'Default Values' => 'Alapértelmezett értékek',
      'Add Field' => 'Mező hozzáadása',
      'Created' => 'Alkotó',
      'Updated' => 'korszerűsített',
      'Result' => 'Eredmény',
      'Show records' => 'Rekordok megjelenítése',
      'Remove Duplicates' => 'Duplikátumok eltávolítása',
      'importedCount' => 'Importált (számlálás)',
      'duplicateCount' => 'Duplikátumok (számlálás)',
      'updatedCount' => 'Frissítve (számlálás)',
      'Create Only' => 'Csak hozzon létre',
      'Create and Update' => 'Létrehozása és frissítése',
      'Update Only' => 'Frissítés csak',
      'Update by' => 'Frissítés',
      'Set as Not Duplicate' => 'Állítsa be, hogy ne legyen kettős',
      'File (CSV)' => 'Fájl (CSV)',
      'First Row Value' => 'Első soros érték',
      'Skip' => 'Skip',
      'Header Row Value' => 'Header Row Value',
      'Field' => 'Mező',
      'What to Import?' => 'Mi importálni?',
      'Entity Type' => 'Entity Type',
      'What to do?' => 'Mit kell tenni?',
      'Properties' => 'Tulajdonságok',
      'Header Row' => 'Fejléc sor',
      'Person Name Format' => 'Személynév formátum',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Mezőhatároló',
      'Date Format' => 'Dátum formátum',
      'Decimal Mark' => 'Tizedesjel',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Idő formátum',
      'Currency' => 'Valuta',
      'Preview' => 'Előnézet',
      'Next' => 'Következő',
      'Step 1' => '1. lépés',
      'Step 2' => '2. lépés',
      'Double Quote' => 'Dupla idézet',
      'Single Quote' => 'Egyetlen idézet',
      'Imported' => 'Importált',
      'Duplicates' => 'ismétlődések',
      'Skip searching for duplicates' => 'Keresse meg a másolatok keresését',
      'Timezone' => 'Időzóna',
      'Remove Import Log' => 'Importálási napló eltávolítása',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Kell UTF-8 kódolva',
      'duplicatesRemoved' => 'A másolatok eltávolítása',
      'inIdle' => 'Végrehajtás készenléti állapotban (nagy adatok esetén cronon keresztül)',
      'revert' => 'Ez véglegesen eltávolítja az importált rekordokat.',
      'removeDuplicates' => 'Ez véglegesen eltávolítja az összes olyan importált rekordot, amelyet duplikátumként ismernek el.',
      'confirmRevert' => 'Ez véglegesen eltávolítja az importált rekordokat. biztos vagy ebben?',
      'confirmRemoveDuplicates' => 'Ez véglegesen eltávolítja az összes olyan importált rekordot, amelyet duplikátumként ismernek el. biztos vagy ebben?',
      'confirmRemoveImportLog' => 'Ez eltávolítja az importnaplót. Minden importált nyilvántartást vezetnek. Nem tudja visszaállítani az importálási eredményeket. Biztos vagy benne?',
      'removeImportLog' => 'Ez eltávolítja az importnaplót. Minden importált nyilvántartást vezetnek. Használja, ha biztos benne, hogy az import rendben van.',
    ),
    'fields' => 
    array (
      'file' => 'fájl',
      'entityType' => 'Entity Type',
      'imported' => 'Importált rekordok',
      'duplicates' => 'Duplikált felvételek',
      'updated' => 'Frissített felvételek',
      'status' => 'Állapot',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'nem sikerült',
        'In Process' => 'Folyamatban',
        'Complete' => 'teljes',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'emailAddress' => 'Email cím',
      'team' => 'Célcsoport',
      'status' => 'Állapot',
      'assignToUser' => 'Hozzárendelés a felhasználóhoz',
      'host' => 'Házigazda',
      'username' => 'Felhasználónév',
      'password' => 'Jelszó',
      'port' => 'Kikötő',
      'monitoredFolders' => 'Figyelt mappák',
      'trashFolder' => 'Kuka mappa',
      'ssl' => 'SSL',
      'createCase' => 'Létrehozás',
      'reply' => 'Autómatikus válasz',
      'caseDistribution' => 'Case Distribution',
      'replyEmailTemplate' => 'Válasz e-mail sablon',
      'replyFromAddress' => 'Válasz a címről',
      'replyToAddress' => 'Válasz a címre',
      'replyFromName' => 'Válasz a névből',
      'targetUserPosition' => 'Célozza meg a felhasználó pozícióját',
      'fetchSince' => 'Fetch As',
      'addAllTeamUsers' => 'Minden csapatfelhasználó számára',
      'teams' => 'csapatok',
      'sentFolder' => 'Elküldött mappa',
      'storeSentEmails' => 'Elküldött e-mailek tárolása',
      'useImap' => 'E-mailek lekérése',
      'useSmtp' => 'SMTP használata',
      'smtpHost' => 'SMTP fogadó',
      'smtpPort' => 'SMTP port',
      'smtpAuth' => 'SMTP hitelesítés',
      'smtpSecurity' => 'SMTP biztonság',
      'smtpUsername' => 'SMTP felhasználónév',
      'smtpPassword' => 'SMTP jelszó',
      'fromName' => 'Névből',
      'smtpIsShared' => 'Az SMTP megosztott',
      'smtpIsForMassEmail' => 'Az SMTP a tömeges e-mailhez tartozik',
    ),
    'tooltips' => 
    array (
      'reply' => 'Értesítse az e-maileket arról, hogy e-mailjeiket megkapta.

 Néhány idő alatt csak egy e-mailt küldünk egy adott címzettnek a hurkolás megakadályozása érdekében.',
      'createCase' => 'Automatikusan hozzon létre ügyet a bejövő e-mailekről.',
      'replyToAddress' => 'Adja meg e postafiók e-mail címét, hogy a válaszok itt érkezzenek.',
      'caseDistribution' => 'Az ügyek rendezésének módja. Közvetlenül a felhasználóhoz vagy a csapathoz rendelhető.',
      'assignToUser' => 'A felhasználói ügyek hozzárendelésre kerülnek.',
      'team' => 'Csapatügyek fognak hozzárendelni.',
      'teams' => 'A csoportok e-mailjeihez hozzárendelnek.',
      'targetUserPosition' => 'Meghatározott pozícióval rendelkező felhasználókat az esetekkel osztják el.',
      'addAllTeamUsers' => 'Az e-mailek megjelennek a megadott csoportok összes felhasználójának Postafiókjában.',
      'monitoredFolders' => 'A több mappát vesszővel kell elválasztani.',
      'smtpIsShared' => 'Ha be van jelölve, akkor a felhasználók e-maileket küldhetnek az SMTP használatával. Az elérhetőséget a Szerepkörök a csoportos e-mail fiók engedélyével szabályozzák.',
      'smtpIsForMassEmail' => 'Ha be van jelölve, az SMTP elérhető lesz a Mass Email-hez.',
      'storeSentEmails' => 'Az elküldött e-maileket az IMAP szerveren tárolja.',
    ),
    'links' => 
    array (
      'filters' => 'Szűrők',
      'emails' => 'e-mailek',
      'assignToUser' => 'Hozzárendelés a felhasználóhoz',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktív',
        'Inactive' => 'tétlen',
      ),
      'caseDistribution' => 
      array (
        '' => 'Egyik sem',
        'Direct-Assignment' => 'Közvetlen hozzárendelés',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'A legkevésbé foglalt',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'E-mail fiók létrehozása',
      'IMAP' => 'IMAP',
      'Actions' => 'Hozzászólások',
      'Main' => 'Fő',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nem sikerült csatlakozni az IMAP kiszolgálóhoz',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Bekapcsolt',
      'clientId' => 'Ügyfélazonosító',
      'clientSecret' => 'Ügyfél titka',
      'redirectUri' => 'Átirányítási URI',
      'apiKey' => 'API kulcs',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google térkép',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Válasszon ki egy integrációt a menüből.',
      'noIntegrations' => 'Nincs integráció.',
    ),
    'help' => 
    array (
      'Google' => '<p> <b> A Google Developers Console-ban szerezze be az OAuth 2.0-hitelesítő adatokat. </ b> </ p> <p> Látogassa meg a <a href="https://console.developers.google.com/project"> Google fejlesztőket Konzolt </a>, hogy megkaphassa az OAuth 2.0 hitelesítő adatait, például egy ügyfélazonosítót és ügyféltitkot, amelyek mind a Google, mind az EspoCRM alkalmazásban ismertek. </ P>',
      'GoogleMaps' => '<p> Az API-kulcs beszerzése <a href="https://developers.google.com/maps/documentation/javascript/get-api-key"> itt </a>. </ p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Állapot',
      'executeTime' => 'Execute At',
      'attempts' => 'Kísérletek balra',
      'failedAttempts' => 'Sikertelen kísérletek',
      'serviceName' => 'Szolgáltatás',
      'method' => 'Módszer (elavult)',
      'methodName' => 'Módszer',
      'scheduledJob' => 'Ütemezett munka',
      'scheduledJobJob' => 'Ütemezett feladat neve',
      'data' => 'Adat',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Függőben levő',
        'Success' => 'Siker',
        'Running' => 'Futás',
        'Failed' => 'nem sikerült',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Szélesség (%)',
      'link' => 'Link',
      'notSortable' => 'Nem sortható',
      'align' => 'Igazítsa',
      'panelName' => 'Panel neve',
      'style' => 'Stílus',
      'sticked' => 'ragasztott',
      'isLarge' => 'Nagy betűméret',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Balra',
        'right' => 'Jobb',
      ),
      'style' => 
      array (
        'default' => 'Alapértelmezett',
        'success' => 'Siker',
        'danger' => 'Veszély',
        'info' => 'Info',
        'warning' => 'Figyelem',
        'primary' => 'Elsődleges',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Új panel',
      'Layout' => 'Elrendezés',
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
      'post' => 'posta',
      'attachments' => 'Mellékletek',
      'targetType' => 'Cél',
      'teams' => 'csapatok',
      'users' => 'felhasználók',
      'portals' => 'portálok',
      'type' => 'típus',
      'isGlobal' => 'Globális',
      'isInternal' => 'Belső (belső felhasználók számára)',
      'related' => 'Összefüggő',
      'createdByGender' => 'Létrehozta Nem',
      'data' => 'Adat',
      'number' => 'Szám',
    ),
    'filters' => 
    array (
      'all' => 'Minden',
      'posts' => 'Hozzászólások',
      'updates' => 'Frissítés',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'magamnak',
        'users' => 'az adott felhasználó (k) számára',
        'teams' => 'bizonyos csapat (ok)',
        'all' => 'minden belső felhasználó számára',
        'portals' => 'a portál felhasználók számára',
      ),
      'type' => 
      array (
        'Post' => 'posta',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Írja ide az üzenetet',
    ),
    'links' => 
    array (
      'superParent' => 'Szuper szülő',
      'related' => 'Összefüggő',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'logo' => 'logo',
      'url' => 'URL',
      'portalRoles' => 'szerepek',
      'isActive' => 'Aktív',
      'isDefault' => 'Alapértelmezett',
      'tabList' => 'Tab listát',
      'quickCreateList' => 'Gyors létrehozási lista',
      'companyLogo' => 'logo',
      'theme' => 'Téma',
      'language' => 'Nyelv',
      'dashboardLayout' => 'Irányítópult elrendezés',
      'dateFormat' => 'Dátum formátum',
      'timeFormat' => 'Idő formátum',
      'timeZone' => 'Időzóna',
      'weekStart' => 'A hét első napja',
      'defaultCurrency' => 'Alapértelmezett pénznem',
      'customUrl' => 'Egyéni URL',
      'customId' => 'Egyéni azonosító',
    ),
    'links' => 
    array (
      'users' => 'felhasználók',
      'portalRoles' => 'szerepek',
      'notes' => 'Megjegyzések',
      'articles' => 'Tudásbázis-cikkek',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Meghatározott portál szerepköröket fognak alkalmazni a portál összes felhasználójára.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Portál létrehozása',
      'User Interface' => 'Felhasználói felület',
      'General' => 'Tábornok',
      'Settings' => 'Beállítások',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Exportengedély',
    ),
    'links' => 
    array (
      'users' => 'felhasználók',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Megadja, hogy a portál felhasználói képesek exportálni a rekordokat.',
    ),
    'labels' => 
    array (
      'Access' => 'Hozzáférés',
      'Create PortalRole' => 'Portál szerep létrehozása',
      'Scope Level' => 'Teljesítményszint',
      'Field Level' => 'Térségi szint',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Portal felhasználó létrehozása',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Dátum formátum',
      'timeFormat' => 'Idő formátum',
      'timeZone' => 'Időzóna',
      'weekStart' => 'A hét első napja',
      'thousandSeparator' => 'Ezer elválasztó',
      'decimalMark' => 'Tizedesjel',
      'defaultCurrency' => 'Alapértelmezett pénznem',
      'currencyList' => 'Pénznem listája',
      'language' => 'Nyelv',
      'smtpServer' => 'szerver',
      'smtpPort' => 'Kikötő',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Biztonság',
      'smtpUsername' => 'Felhasználónév',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Jelszó',
      'smtpEmailAddress' => 'Email cím',
      'exportDelimiter' => 'Export-határoló',
      'receiveAssignmentEmailNotifications' => 'E-mail értesítések hozzárendeléskor',
      'receiveMentionEmailNotifications' => 'E-mail értesítések a bejegyzésben szereplő megjegyzésekről',
      'receiveStreamEmailNotifications' => 'E-mail értesítések a bejegyzésekről és az állapotfrissítésekről',
      'autoFollowEntityTypeList' => 'Globális automatikus követés',
      'signature' => 'Email aláírás',
      'dashboardTabList' => 'Tab listát',
      'defaultReminders' => 'Alapértelmezett emlékeztetők',
      'theme' => 'Téma',
      'useCustomTabList' => 'Egyéni füllista',
      'tabList' => 'Tab listát',
      'emailReplyToAllByDefault' => 'Alapértelmezés szerint az E-mail Válasz mindenkinek',
      'dashboardLayout' => 'Irányítópult elrendezés',
      'emailReplyForceHtml' => 'Email Válasz HTML-ben',
      'doNotFillAssignedUserIfNotRequired' => 'Ne töltse fel előzetesen a kijelölt felhasználót a rekord létrehozásakor',
      'followEntityOnStreamPost' => 'Az adatrögzítés után automatikusan követheti a felvételt',
      'followCreatedEntities' => 'A létrehozott rekordok automatikus követése',
      'followCreatedEntityTypeList' => 'Automatikusan követheti az egyes entitástípusok létrehozott rekordjait',
      'emailUseExternalClient' => 'Külső e-mail klienst használjon',
      'scopeColorsDisabled' => 'Távolítsa el a színeket',
      'tabColorsDisabled' => 'Letiltja a lapok színeit',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'vasárnap',
        1 => 'hétfő',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'értesítések',
      'User Interface' => 'Felhasználói felület',
      'SMTP' => 'SMTP',
      'Misc' => 'Egyéb',
      'Locale' => 'helyszín',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatikusan kövesse az összes új rekordot (amelyet bármely felhasználó hoz létre) a kiválasztott entitás típusokból. Annak érdekében, hogy információkat láthasson az adatfolyamban, és értesítéseket kaphasson a rendszer minden rekordjáról.',
      'doNotFillAssignedUserIfNotRequired' => 'A létrehozott hozzárendelt felhasználó létrehozásakor nem töltődik be saját felhasználó, hacsak a mező nem kötelező.',
      'followCreatedEntities' => 'Új rekordok létrehozásakor automatikusan követik őket, még akkor is, ha másik felhasználónak van megadva.',
      'followCreatedEntityTypeList' => 'Amikor új rekordokat hoz létre a kiválasztott entitás típusokról, automatikusan követni fog őket, még akkor is, ha másik felhasználónak van megadva.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'roles' => 'szerepek',
      'assignmentPermission' => 'Hozzárendelési engedély',
      'userPermission' => 'Felhasználói engedély',
      'portalPermission' => 'Portál engedély',
      'groupEmailAccountPermission' => 'Csoportos e-mail fiók engedély',
      'exportPermission' => 'Exportengedély',
      'dataPrivacyPermission' => 'Adatvédelmi engedély',
    ),
    'links' => 
    array (
      'users' => 'felhasználók',
      'teams' => 'csapatok',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Lehetővé teszi a rekordok hozzárendelésének és üzenetek üzeneteinek más felhasználók általi korlátozását.

minden - nincs korlátozás

csapat - csak csapattársakhoz rendelhet és küldhet

nem - csak az énhez rendelhet és küldhet',
      'userPermission' => 'Lehetővé teszi a felhasználók azon képességének korlátozását, hogy megtekinthessék a többi felhasználó tevékenységét, naptárát és streamjét.

mindenki - mindent megnéz

csapat - csak a csapattársak tevékenységét tekintheti meg

nem - nem lehet megtekinteni',
      'portalPermission' => 'Meghatározza a portálinformációkhoz való hozzáférést, és képes üzenetet küldeni a portál felhasználóknak.',
      'groupEmailAccountPermission' => 'Meghatározza a csoportos e-mail fiókokhoz való hozzáférést, és képes e-maileket küldeni az SMTP csoportból.',
      'exportPermission' => 'Meghatározza, hogy a felhasználók a rekordok exportálhatók-e.',
      'dataPrivacyPermission' => 'Lehetővé teszi a személyes adatok megtekintését és törlését.',
    ),
    'labels' => 
    array (
      'Access' => 'Hozzáférés',
      'Create Role' => 'Szerezzen szerepet',
      'Scope Level' => 'Teljesítményszint',
      'Field Level' => 'Térségi szint',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nincs beállítva',
        'enabled' => 'engedélyezve',
        'disabled' => 'Tiltva',
      ),
      'levelList' => 
      array (
        'all' => 'minden',
        'team' => 'csapat',
        'account' => 'számla',
        'contact' => 'kapcsolatba lépni',
        'own' => 'saját',
        'no' => 'nem',
        'yes' => 'Igen',
        'not-set' => 'nincs beállítva',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Olvas',
      'edit' => 'szerkesztése',
      'delete' => 'Töröl',
      'stream' => 'Folyam',
      'create' => 'Teremt',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'A hozzáférés-vezérlés minden módosítását a gyorsítótár letiltása után alkalmazzák.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'status' => 'Állapot',
      'job' => 'Munka',
      'scheduling' => 'ütemezése',
    ),
    'links' => 
    array (
      'log' => 'Bejelentkezés',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Ütemezett feladat létrehozása',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Nagytakarítás',
        'CheckInboundEmails' => 'Ellenőrizze a csoportos e-mail fiókokat',
        'CheckEmailAccounts' => 'Ellenőrizze a személyes e-mail fiókokat',
        'SendEmailReminders' => 'Küldjön e-mailes emlékeztetőket',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Küldjön e-mail értesítéseket',
        'CheckNewVersion' => 'Ellenőrizze az új verziót',
        'ProcessMassEmail' => 'Küldjön e-maileket',
        'ControlKnowledgeBaseArticleStatus' => 'A Tudásbázis-cikk állapota',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Megjegyzés: Adja hozzá ezt a sort a crontab fájlhoz az Espo Scheduled Jobs futtatásához:',
        'mac' => 'Megjegyzés: Adja hozzá ezt a sort a crontab fájlhoz az Espo Scheduled Jobs futtatásához:',
        'windows' => 'Megjegyzés: Hozzon létre egy kötegelt fájlt a következő parancsokkal, hogy futtassa az Espo Scheduled Jobs programot az ütemezett feladatokkal:',
        'default' => 'Megjegyzés: Adja hozzá ezt a parancsot a Cron feladathoz (Ütemezett feladat):',
      ),
      'status' => 
      array (
        'Active' => 'Aktív',
        'Inactive' => 'tétlen',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab jelölés. Meghatározza a munkák gyakoriságát.

* / 5 * * * * - 5 percenként

0 * / 2 * * * - 2 óránként

30 1 * * * - 01: 30-ban naponta egyszer

0 0 1 * * - a hónap első napján',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Állapot',
      'executionTime' => 'Végrehajtási idő',
      'target' => 'Cél',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Használja a gyorsítótárat',
      'dateFormat' => 'Dátum formátum',
      'timeFormat' => 'Idő formátum',
      'timeZone' => 'Időzóna',
      'weekStart' => 'A hét első napja',
      'thousandSeparator' => 'Ezer elválasztó',
      'decimalMark' => 'Tizedesjel',
      'defaultCurrency' => 'Alapértelmezett pénznem',
      'baseCurrency' => 'Alap pénznem',
      'currencyRates' => 'Értékértékek',
      'currencyList' => 'Pénznem listája',
      'language' => 'Nyelv',
      'companyLogo' => 'Vállalati logó',
      'smtpServer' => 'szerver',
      'smtpPort' => 'Kikötő',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Biztonság',
      'smtpUsername' => 'Felhasználónév',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Jelszó',
      'outboundEmailFromName' => 'Névből',
      'outboundEmailFromAddress' => 'Címtől',
      'outboundEmailIsShared' => 'Megosztott',
      'recordsPerPage' => 'Oldalankénti nyilvántartások',
      'recordsPerPageSmall' => 'Oldalankénti feljegyzések (kicsi)',
      'tabList' => 'Tab listát',
      'quickCreateList' => 'Gyors létrehozási lista',
      'exportDelimiter' => 'Export-határoló',
      'globalSearchEntityList' => 'Globális keresés entitás listája',
      'authenticationMethod' => 'hitelesítési módszer',
      'ldapHost' => 'Házigazda',
      'ldapPort' => 'Kikötő',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Teljes felhasználói DN',
      'ldapPassword' => 'Jelszó',
      'ldapBindRequiresDn' => 'A kötés DN-t igényel',
      'ldapBaseDn' => 'Base DN',
      'ldapAccountCanonicalForm' => 'Fiók Canonical Form',
      'ldapAccountDomainName' => 'Fiók domainnév',
      'ldapTryUsernameSplit' => 'Próbálja ki a felhasználónevet',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Felhasználó létrehozása az EspoCRM-ben',
      'ldapSecurity' => 'Biztonság',
      'ldapUserLoginFilter' => 'Felhasználói bejelentkezési szűrő',
      'ldapAccountDomainNameShort' => 'Fiók domain neve rövid',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Felhasználónév attribútum',
      'ldapUserObjectClass' => 'Felhasználó ObjectClass',
      'ldapUserTitleAttribute' => 'Felhasználói cím attribútum',
      'ldapUserFirstNameAttribute' => 'Felhasználói név tulajdonsága',
      'ldapUserLastNameAttribute' => 'Felhasználó utónév attribútuma',
      'ldapUserEmailAddressAttribute' => 'Felhasználói e-mail cím attribútuma',
      'ldapUserTeams' => 'Felhasználó csapatok',
      'ldapUserDefaultTeam' => 'Felhasználói alapértelmezett csapat',
      'ldapUserPhoneNumberAttribute' => 'Felhasználói telefonszám attribútum',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Export tiltása (csak az admin engedélyezve van)',
      'assignmentNotificationsEntityList' => 'Azokat a szervezeteket, amelyek értesítést kapnak a megbízásról',
      'assignmentEmailNotifications' => 'Értesítések a megbízáskor',
      'assignmentEmailNotificationsEntityList' => 'Az e-mail értesítések hozzárendelése',
      'streamEmailNotifications' => 'Értesítések a frissítések frissítéséről a belső felhasználók számára',
      'portalStreamEmailNotifications' => 'A portál felhasználói számára készült frissítésekről szóló értesítések',
      'streamEmailNotificationsEntityList' => 'Az e-mail értesítések átvitele',
      'streamEmailNotificationsTypeList' => 'Mit kell értesíteni',
      'b2cMode' => 'B2C mód',
      'avatarsDisabled' => 'Letiltja az avatarokat',
      'followCreatedEntities' => 'Kövesse a létrehozott rekordokat',
      'displayListViewRecordCount' => 'Teljes szám megjelenítése (a lista nézetben)',
      'theme' => 'Téma',
      'userThemesDisabled' => 'A felhasználói témák letiltása',
      'emailMessageMaxSize' => 'E-mail maximális méret (Mb)',
      'massEmailMaxPerHourCount' => 'Maximum óránként küldött e-mailek száma',
      'personalEmailMaxPortionSize' => 'Maximális e-mail részméret a személyes fiókok lekéréséhez',
      'inboundEmailMaxPortionSize' => 'Max. E-mail adagméret a csoportos fiókok lekéréséhez',
      'maxEmailAccountCount' => 'Személyes e-mail fiókok maximális száma felhasználóanként',
      'authTokenLifetime' => 'Hitel Token Élettartam (óra)',
      'authTokenMaxIdleTime' => 'Hitel Token Max Idle Time (óra)',
      'dashboardLayout' => 'Az irányítópult elrendezése (alapértelmezett)',
      'siteUrl' => 'A webhely URL-je',
      'addressPreview' => 'Cím előnézet',
      'addressFormat' => 'Címformátum',
      'notificationSoundsDisabled' => 'Értesítési hangok letiltása',
      'applicationName' => 'Alkalmazás neve',
      'calendarEntityList' => 'Naptár-entitások listája',
      'mentionEmailNotifications' => 'Küldjön e-mail értesítéseket a bejegyzésekben szereplő megjegyzésekről',
      'massEmailDisableMandatoryOptOutLink' => 'Tiltsa le a kötelező opt-out kapcsolatot',
      'activitiesEntityList' => 'Tevékenységek entitás listája',
      'historyEntityList' => 'Történelem entitás listája',
      'currencyFormat' => 'Valuta formátum',
      'currencyDecimalPlaces' => 'Valuta tizedes helyek',
      'aclStrictMode' => 'ACL szigorú üzemmód',
      'aclAllowDeleteCreated' => 'Lehetővé teszi a létrehozott rekordok eltávolítását',
      'adminNotifications' => 'Rendszer értesítések az adminisztrációs panelben',
      'adminNotificationsNewVersion' => 'Az új EspoCRM verzió elérhetőségének megjelenítése',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'A varchar mezők szűrésénél a "contains" operátort használja',
      'authTokenPreventConcurrent' => 'Felhasználónként csak egy hitelesítési azonosító',
      'scopeColorsDisabled' => 'Távolítsa el a színeket',
      'tabColorsDisabled' => 'Letiltja a lapok színeit',
      'tabIconsDisabled' => 'Letiltja a fül ikont',
      'emailAddressIsOptedOutByDefault' => 'Jelöljön ki új e-mail címeket, mint opciót',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Clean up deleted records',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'vasárnap',
        1 => 'hétfő',
      ),
      'currencyFormat' => 
      array (
        2 => '$ 10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Hozzászólások',
        'Status' => 'Státusz frissítések',
        'EmailReceived' => 'Fogadott e-mailek',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'A listanézetben eredetileg megjelenített bejegyzések száma.',
      'recordsPerPageSmall' => 'A kapcsolattartó panelekben eredetileg megjelenített rekordok száma.',
      'outboundEmailIsShared' => 'Engedélyezze a felhasználóknak e-maileket ebből a címről.',
      'followCreatedEntities' => 'A felhasználók automatikusan követik az általuk létrehozott rekordokat.',
      'emailMessageMaxSize' => 'Minden bejövő e-mailt, amely meghaladja a megadott méretet, nem a test és a mellékletek alapján kerül lekérésre.',
      'authTokenLifetime' => 'Meghatározza, hogy mekkora hosszúságú jelek létezhetnek.
0 - nem jelenti a lejáratot.',
      'authTokenMaxIdleTime' => 'Meghatározza, hogy az utolsó hozzáférési tokenek mennyi ideig létezhetnek.
0 - nem jelenti a lejáratot.',
      'userThemesDisabled' => 'Ha be van jelölve, akkor a felhasználók nem tudnak másik témát kiválasztani.',
      'ldapUsername' => 'A teljes DN rendszerfelhasználó, amely lehetővé teszi más felhasználók keresését. Például. "CN = LDAP rendszer felhasználó, OU = felhasználók, OU = expozíció, DC = teszt, DC = lan".',
      'ldapPassword' => 'Az LDAP kiszolgálóhoz való hozzáféréshez használt jelszó.',
      'ldapAuth' => 'Hozzáférési hitelesítő adatok az LDAP kiszolgálóhoz.',
      'ldapUserNameAttribute' => 'A felhasználó azonosítására szolgáló attribútum.
Például. "userPrincipalName" vagy "sAMAccountName" az Active Directoryhoz, az "uid" az OpenLDAP-hoz.',
      'ldapUserObjectClass' => 'ObjectClass attribútum a felhasználók kereséséhez. Például. "személy" az AD számára, "inetOrgPerson" az OpenLDAP számára.',
      'ldapAccountCanonicalForm' => 'Fiókja típusának kanonikus alakja. 4 lehetőség van: <br> - "Dn" - az űrlap a következő formátumban: CN = tesztelő, OU = expozíció, DC = teszt, DC = lan. <br> - "Backslash" - a "COMPANY \\ tester" űrlap. <br> - "Principal" - az "tester@company.com" formanyomtatvány.',
      'ldapBindRequiresDn' => 'A felhasználónév formázása a DN formában.',
      'ldapBaseDn' => 'A felhasználók keresésére használt alapértelmezett DN alap. Például. "OU = felhasználók, OU = expozíció, DC = teszt, DC = lan".',
      'ldapTryUsernameSplit' => 'A felhasználónév megosztására vonatkozó lehetőség a domainnel.',
      'ldapOptReferrals' => 'ha a hivatkozásokat az LDAP ügyfélnek kell követnie.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Ez az opció lehetővé teszi, hogy az EspoCRM hozzon létre egy felhasználót az LDAP-ból.',
      'ldapUserFirstNameAttribute' => 'Az LDAP attribútum, amelyet a felhasználó első nevének meghatározására használnak. Például. "keresztnév".',
      'ldapUserLastNameAttribute' => 'Az LDAP attribútum, amelyet a felhasználó vezetéknevének meghatározására használnak. Például. "Sn".',
      'ldapUserTitleAttribute' => 'Az LDAP attribútum, amely a felhasználó címének meghatározására szolgál. Például. "cím".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribútum, amely a felhasználó e-mail címének meghatározására szolgál. Például. "levél".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribútum, amely a felhasználó telefonszámának meghatározására szolgál. Például. "telefonszám".',
      'ldapUserLoginFilter' => 'A szűrő, amely lehetővé teszi az EspoCRM használatára képes felhasználók korlátozását. Például. "memberOf = CN = espoGroup, OU = csoportok, OU = espocrm, DC = teszt, DC = lan".',
      'ldapAccountDomainName' => 'Az LDAP kiszolgáló engedélyezéséhez használt tartomány.',
      'ldapAccountDomainNameShort' => 'Az LDAP kiszolgálóhoz való engedélyezéshez használt rövid domain.',
      'ldapUserTeams' => 'Csapatok létrehozott felhasználó számára. További információért lásd a felhasználói profilot.',
      'ldapUserDefaultTeam' => 'Alapértelmezett csapat létrehozott felhasználó számára. További információért lásd a felhasználói profilot.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Az EspoCRM alapértelmezés szerint a B2B-hez igazodik. Átválthatod B2C-re.',
      'currencyDecimalPlaces' => 'Tizedesjegyek száma. Ha üres, akkor minden meg nem térő tizedeshely jelenik meg.',
      'aclStrictMode' => 'Engedélyezve: A körök elérése tilos, ha szerepkörben nincs megadva.

Letiltva: A körök elérése akkor engedélyezett, ha szerepkörben nincs megadva.',
      'aclAllowDeleteCreated' => 'A felhasználók képesek lesznek eltávolítani a létrehozott rekordokat, még akkor is, ha nincsenek törlési hozzáféréssel.',
      'textFilterUseContainsForVarchar' => 'Ha nincs bejelölve, akkor az "operátorral kezdődik". Használhatja a "%" helyettesítő jellel.',
      'streamEmailNotificationsEntityList' => 'E-mail értesítések a követett rekordok frissítéséről. A felhasználók e-mail értesítéseket kapnak csak meghatározott entitástípusok esetén.',
      'authTokenPreventConcurrent' => 'A felhasználók több eszközön egyszerre nem tudnak bejelentkezni.',
      'emailAddressIsOptedOutByDefault' => 'Az új rekordlemezek létrehozásakor kizárt lesz.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
    ),
    'labels' => 
    array (
      'System' => 'Rendszer',
      'Locale' => 'helyszín',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuration',
      'In-app Notifications' => 'Alkalmazáson belüli értesítések',
      'Email Notifications' => 'Email Értesítések',
      'Currency Settings' => 'Pénznem beállítások',
      'Currency Rates' => 'Valutaárfolyamok',
      'Mass Email' => 'Tömeges e-mail',
      'Test Connection' => 'Vizsgálati kapcsolat',
      'Connecting' => 'Csatlakozás ...',
      'Activities' => 'Tevékenységek',
      'Admin Notifications' => 'Admin értesítések',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'A kapcsolat sikeresen létrejött.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'roles' => 'szerepek',
      'positionList' => 'Pozíciójegyzék',
    ),
    'links' => 
    array (
      'users' => 'felhasználók',
      'notes' => 'Megjegyzések',
      'roles' => 'szerepek',
      'inboundEmails' => 'Csoportos e-mail fiókok',
    ),
    'tooltips' => 
    array (
      'roles' => 'Hozzáférési szerepek. A csapat felhasználói hozzáférést biztosítanak a kiválasztott szerepekhez.',
      'positionList' => 'Elérhető pozíciók ebben a csapatban. Például. Értékes, menedzser.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Csapat létrehozása',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'body' => 'Test',
      'entityType' => 'Entity Type',
      'header' => 'Fejléc',
      'footer' => 'Lábjegyzet',
      'leftMargin' => 'Bal margó',
      'topMargin' => 'Felső margó',
      'rightMargin' => 'Jobb margó',
      'bottomMargin' => 'Alsó margó',
      'printFooter' => 'Nyomtatási Lábléc',
      'footerPosition' => 'Footer Position',
      'variables' => 'Szabad helyfoglalók',
      'pageOrientation' => 'Oldal tájolása',
      'pageFormat' => 'Papírformátum',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Sablon létrehozása',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'portré',
        'Landscape' => 'Tájkép',
      ),
      'placeholders' => 
      array (
        'today' => 'Ma (dátum)',
        'now' => 'Most (dátum-idő)',
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
      'footer' => 'Használja a {pageNumber} gombot az oldalszám nyomtatásához.',
      'variables' => 'Másolja be a szükséges helyőrzőt a fejlécre, a testre vagy a láblécre.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'userName' => 'Felhasználónév',
      'title' => 'Cím',
      'isAdmin' => 'Admin',
      'defaultTeam' => 'Alapértelmezett csapat',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'szerepek',
      'portals' => 'portálok',
      'portalRoles' => 'Portál szerepek',
      'teamRole' => 'Pozíció',
      'password' => 'Jelszó',
      'currentPassword' => 'jelenlegi jelszó',
      'passwordConfirm' => 'Jelszó megerősítése',
      'newPassword' => 'új jelszó',
      'newPasswordConfirm' => 'Erősítse meg az új jelszót',
      'avatar' => 'Avatar',
      'isActive' => 'Aktív',
      'isPortalUser' => 'Portal felhasználó',
      'contact' => 'Kapcsolatba lépni',
      'accounts' => 'Fiókok',
      'account' => 'Fiók (elsődleges)',
      'sendAccessInfo' => 'Küldjön e-mailt az Access Info a felhasználóhoz',
      'portal' => 'Portál',
      'gender' => 'nem',
      'position' => 'Pozíció a csapatban',
      'ipAddress' => 'IP-cím',
      'passwordPreview' => 'Jelszó előnézet',
      'isSuperAdmin' => 'A Super Admin',
      'lastAccess' => 'Utolsó hozzáférés',
      'acceptanceStatus' => 'Átvételi állapot',
      'acceptanceStatusMeetings' => 'Átvételi állapot (ülések)',
      'acceptanceStatusCalls' => 'Átvételi állapot (hívások)',
    ),
    'links' => 
    array (
      'teams' => 'csapatok',
      'roles' => 'szerepek',
      'notes' => 'Megjegyzések',
      'portals' => 'portálok',
      'portalRoles' => 'Portál szerepek',
      'contact' => 'Kapcsolatba lépni',
      'accounts' => 'Fiókok',
      'account' => 'Fiók (elsődleges)',
      'tasks' => 'feladatok',
      'targetLists' => 'Céllista',
    ),
    'labels' => 
    array (
      'Create User' => 'Felhasználó létrehozása',
      'Generate' => 'generál',
      'Access' => 'Hozzáférés',
      'Preferences' => 'preferenciák',
      'Change Password' => 'Jelszó módosítása',
      'Teams and Access Control' => 'Csapatok és beléptetés',
      'Forgot Password?' => 'Elfelejtett jelszó?',
      'Password Change Request' => 'Jelszóváltási kérelem',
      'Email Address' => 'Email cím',
      'External Accounts' => 'Külső számlák',
      'Email Accounts' => 'E-mail fiókok',
      'Portal' => 'Portál',
      'Create Portal User' => 'Portal felhasználó létrehozása',
      'Proceed w/o Contact' => 'Folytassa a Kapcsolat nélkül',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'A felhasználó által létrehozott összes rekord alapértelmezés szerint ehhez a csapathoz tartozik.',
      'userName' => 'Az a-z betűk, 0-9 számok, pontok, kötőjelek, @ jelek és aláhúzás megengedettek.',
      'isAdmin' => 'Adminisztrátori felhasználó hozzáférhet mindent.',
      'isActive' => 'Ha nincs bejelölve, akkor a felhasználó nem tud bejelentkezni.',
      'teams' => 'Azok a csapatok, amelyekhez ez a felhasználó tartozik. A beléptetési szint a csapat szerepét örökli.',
      'roles' => 'Kiegészítő hozzáférési szerepek. Használja, ha a felhasználó nem tartozik semmilyen csoporthoz, vagy csak a felhasználó számára kell hozzáférési szintet megnövelnie.',
      'portalRoles' => 'További portál szerepek. Használja ezt a hozzáférési szintet kizárólag a felhasználó számára.',
      'portals' => 'Azok a portálok, amelyekhez a felhasználó hozzáfér.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'A jelszó a felhasználó e-mail címére lesz elküldve.',
      'accountInfoEmailSubject' => 'EspoCRM felhasználói hozzáférési információ',
      'accountInfoEmailBody' => 'A hozzáférési adatai:

Felhasználónév: {userName}
Jelszó: {jelszó}

{SITEURL}',
      'passwordChangeLinkEmailSubject' => 'Jelszó megváltoztatása',
      'passwordChangeLinkEmailBody' => 'A {link} következő linket megváltoztathatja. Ez az egyedi URL hamarosan lejár.',
      'passwordChanged' => 'A jelszó megváltozott',
      'userCantBeEmpty' => 'A felhasználónév nem lehet üres',
      'wrongUsernamePasword' => 'Helytelen felhasználónév / jelszó',
      'emailAddressCantBeEmpty' => 'Az e-mail cím nem lehet üres',
      'userNameEmailAddressNotFound' => 'A felhasználónév / e-mail cím nem található',
      'forbidden' => 'Tilos, próbálkozzon később',
      'uniqueLinkHasBeenSent' => 'Az egyedi URL-t elküldtük a megadott e-mail címre.',
      'passwordChangedByRequest' => 'A jelszó megváltozott.',
      'setupSmtpBefore' => 'Be kell állítania az <a href="{url}"> SMTP-beállításokat </a>, hogy a rendszer képes legyen jelszót küldeni e-mailben.',
      'userNameExists' => 'Felhasználónév már létezik',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nincs beállítva',
        'Male' => 'Férfi',
        'Female' => 'Női',
        'Neutral' => 'Semleges',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Csak a csapatom',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktív',
      'activePortal' => 'Portál aktív',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'emailAddress' => 'Email',
      'website' => 'Weboldal',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'számlázási cím',
      'shippingAddress' => 'szállítási cím',
      'description' => 'Leírás',
      'sicCode' => 'Sic kód',
      'industry' => 'Ipar',
      'type' => 'típus',
      'contactRole' => 'Cím',
      'contactIsInactive' => 'tétlen',
      'campaign' => 'Kampány',
      'targetLists' => 'Céllista',
      'targetList' => 'Tűztábla',
      'originalLead' => 'Eredeti vezető',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kapcsolatok',
      'opportunities' => 'lehetőségek',
      'cases' => 'Olyan esetek,',
      'documents' => 'Dokumentumok',
      'meetingsPrimary' => 'Találkozók (bővített)',
      'callsPrimary' => 'Hívások (kibővített)',
      'tasksPrimary' => 'Feladatok (bővítve)',
      'emailsPrimary' => 'E-mailek (bővítve)',
      'targetLists' => 'Céllista',
      'campaignLogRecords' => 'Kampánynapló',
      'campaign' => 'Kampány',
      'portalUsers' => 'Portál felhasználók',
      'originalLead' => 'Eredeti vezető',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Vevő',
        'Investor' => 'Befektetői',
        'Partner' => 'Partner',
        'Reseller' => 'viszonteladó',
      ),
      'industry' => 
      array (
        'Aerospace' => 'légtér',
        'Agriculture' => 'Mezőgazdaság',
        'Advertising' => 'Hirdető',
        'Apparel & Accessories' => 'Ruházat és kiegészítők',
        'Architecture' => 'Építészet',
        'Automotive' => 'Autóipari',
        'Banking' => 'Banki',
        'Biotechnology' => 'Biotechnológiai',
        'Building Materials & Equipment' => 'Építőanyagok és berendezések',
        'Chemical' => 'Kémiai',
        'Construction' => 'Építés',
        'Computer' => 'Számítógép',
        'Defense' => 'Védelem',
        'Creative' => 'Kreatív',
        'Culture' => 'Kultúra',
        'Consulting' => 'Tanácsadó',
        'Education' => 'Oktatás',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Elektromos energia',
        'Energy' => 'Energia',
        'Entertainment & Leisure' => 'Szórakozás és szabadidő',
        'Finance' => 'Pénzügy',
        'Food & Beverage' => 'étel és ital',
        'Grocery' => 'Élelmiszerbolt',
        'Hospitality' => 'Vendégszeretet',
        'Healthcare' => 'Egészségügy',
        'Insurance' => 'Biztosítás',
        'Legal' => 'Jogi',
        'Manufacturing' => 'Gyártás',
        'Mass Media' => 'Tömegmédia',
        'Mining' => 'Bányászati',
        'Music' => 'Zene',
        'Marketing' => 'értékesítés',
        'Publishing' => 'Kiadás',
        'Petroleum' => 'Petróleum',
        'Real Estate' => 'Ingatlan',
        'Retail' => 'Kiskereskedelem',
        'Shipping' => 'Szállítás',
        'Service' => 'Szolgáltatás',
        'Support' => 'Támogatás',
        'Sports' => 'Sport',
        'Software' => 'Szoftver',
        'Technology' => 'Technológia',
        'Telecommunications' => 'Távközlési',
        'Television' => 'Televízió',
        'Testing, Inspection & Certification' => 'Vizsgálat, ellenőrzés és tanúsítás',
        'Transportation' => 'Szállítás',
        'Travel' => 'Utazás',
        'Venture Capital' => 'Kockázati tőke',
        'Wholesale' => 'nagybani',
        'Water' => 'Víz',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Fiók létrehozása',
      'Copy Billing' => 'Számlázás másolása',
      'Set Primary' => 'Állítsa be az Elsődleges beállítást',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Az ügyfelek',
      'partners' => 'partnerek',
      'recentlyCreated' => 'A közelmúltban létrehozott',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Hónap',
      'week' => 'Hét',
      'day' => 'Nap',
      'agendaWeek' => 'Hét',
      'agendaDay' => 'Nap',
      'timeline' => 'Idővonal',
    ),
    'labels' => 
    array (
      'Today' => 'Ma',
      'Create' => 'Teremt',
      'Shared' => 'megosztott',
      'Add User' => 'Felhasználó hozzáadása',
      'current' => 'jelenlegi',
      'time' => 'idő',
      'User List' => 'Felhasználói lista',
      'Manage Users' => 'Felhasználók kezelése',
      'View Calendar' => 'Naptár megtekintése',
      'Create Shared View' => 'Megosztott nézet létrehozása',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'parent' => 'Szülő',
      'status' => 'Állapot',
      'dateStart' => 'Dátum kezdete',
      'dateEnd' => 'Dátum vége',
      'direction' => 'Irány',
      'duration' => 'tartam',
      'description' => 'Leírás',
      'users' => 'felhasználók',
      'contacts' => 'Kapcsolatok',
      'leads' => 'vezet',
      'reminders' => 'Emlékeztetők',
      'account' => 'számla',
      'acceptanceStatus' => 'Átvételi állapot',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Tervezett',
        'Held' => 'Held',
        'Not Held' => 'Nem tartott',
      ),
      'direction' => 
      array (
        'Outbound' => 'induló',
        'Inbound' => 'Bejövő',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Egyik sem',
        'Accepted' => 'Elfogadott',
        'Declined' => 'Elutasította',
        'Tentative' => 'Kísérleti',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Hívás létrehozása',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Küldjön meghívókat',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Tervezett',
      'held' => 'Held',
      'todays' => 'A mai',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'description' => 'Leírás',
      'status' => 'Állapot',
      'type' => 'típus',
      'startDate' => 'Kezdő dátum',
      'endDate' => 'Befejezés dátuma',
      'targetLists' => 'Céllista',
      'excludingTargetLists' => 'Céllista kivételével',
      'sentCount' => 'Küldött',
      'openedCount' => 'Nyitott',
      'clickedCount' => 'Kattintott',
      'optedOutCount' => 'Elutasított',
      'bouncedCount' => 'Visszafordulást',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Lágy visszahúzódott',
      'leadCreatedCount' => 'Leads létrehozva',
      'revenue' => 'jövedelem',
      'revenueConverted' => 'Bevétel (átváltva)',
      'budget' => 'Költségvetés',
      'budgetConverted' => 'Költségkeret (átváltva)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Céllista',
      'excludingTargetLists' => 'Céllista kivételével',
      'accounts' => 'Fiókok',
      'contacts' => 'Kapcsolatok',
      'leads' => 'vezet',
      'opportunities' => 'lehetőségek',
      'campaignLogRecords' => 'Bejelentkezés',
      'massEmails' => 'Tömeges e-mailek',
      'trackingUrls' => 'Nyomon követési URL-ek',
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
        'Web' => 'háló',
        'Television' => 'Televízió',
        'Radio' => 'Rádió',
        'Newsletter' => 'Hírlevél',
        'Mail' => 'Levél',
      ),
      'status' => 
      array (
        'Planning' => 'Tervezés',
        'Active' => 'Aktív',
        'Inactive' => 'tétlen',
        'Complete' => 'teljes',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Kampány létrehozása',
      'Target Lists' => 'Céllista',
      'Statistics' => 'Statisztika',
      'hard' => 'kemény',
      'soft' => 'puha',
      'Unsubscribe' => 'Leiratkozás',
      'Mass Emails' => 'Tömeges e-mailek',
      'Email Templates' => 'E-mail sablonok',
      'Unsubscribe again' => 'Újrairatkozás újra',
      'Subscribe again' => 'Feliratkozás újra',
      'Create Target List' => 'Céllista létrehozása',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktív',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Leiratkozott a levelezési listáról.',
      'subscribedAgain' => 'Újra feliratkozol.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Olyan célok, amelyeknek üzeneteket kell kapniuk.',
      'excludingTargetLists' => 'Olyan célzások, amelyeknek nem kell üzeneteket kapnia.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Akció',
      'actionDate' => 'Dátum',
      'data' => 'Adat',
      'campaign' => 'Kampány',
      'parent' => 'Cél',
      'object' => 'Tárgy',
      'application' => 'Alkalmazás',
      'queueItem' => 'Sor tétel',
      'stringData' => 'String adatok',
      'stringAdditionalData' => 'String kiegészítő adatok',
      'isTest' => 'A teszt',
    ),
    'links' => 
    array (
      'queueItem' => 'Sor tétel',
      'parent' => 'Szülő',
      'object' => 'Tárgy',
      'campaign' => 'Kampány',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Küldött',
        'Opened' => 'Nyitott',
        'Opted Out' => 'Elutasított',
        'Bounced' => 'Visszafordulást',
        'Clicked' => 'Kattintott',
        'Lead Created' => 'Lead Created',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Minden',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Küldött',
      'opened' => 'Nyitott',
      'optedOut' => 'Elutasított',
      'optedIn' => 'Opted In',
      'bounced' => 'Visszafordulást',
      'clicked' => 'Kattintott',
      'leadCreated' => 'Lead Created',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Kód helyett URL helyett',
      'campaign' => 'Kampány',
    ),
    'links' => 
    array (
      'campaign' => 'Kampány',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Követési URL létrehozása',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'number' => 'Szám',
      'status' => 'Állapot',
      'account' => 'számla',
      'contact' => 'Kapcsolatba lépni',
      'contacts' => 'Kapcsolatok',
      'priority' => 'Kiemelten fontos',
      'type' => 'típus',
      'description' => 'Leírás',
      'inboundEmail' => 'Csoportos e-mail fiók',
      'lead' => 'Vezet',
      'attachments' => 'Mellékletek',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Csoportos e-mail fiók',
      'account' => 'számla',
      'contact' => 'Kapcsolat (elsődleges)',
      'Contacts' => 'Kapcsolatok',
      'meetings' => 'találkozók',
      'calls' => 'felhívja',
      'tasks' => 'feladatok',
      'emails' => 'e-mailek',
      'articles' => 'Tudásbázis-cikkek',
      'lead' => 'Vezet',
      'attachments' => 'Mellékletek',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Új',
        'Assigned' => 'Kijelölt',
        'Pending' => 'Függőben levő',
        'Closed' => 'Zárva',
        'Rejected' => 'Elutasítva',
        'Duplicate' => 'Másolat',
      ),
      'priority' => 
      array (
        'Low' => 'Alacsony',
        'Normal' => 'Normál',
        'High' => 'Magas',
        'Urgent' => 'Sürgős',
      ),
      'type' => 
      array (
        'Question' => 'Kérdés',
        'Incident' => 'Incidens',
        'Problem' => 'Probléma',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Létrehozás',
      'Close' => 'Bezárás',
      'Reject' => 'Elutasít',
      'Closed' => 'Zárva',
      'Rejected' => 'Elutasítva',
    ),
    'presetFilters' => 
    array (
      'open' => 'Nyisd ki',
      'closed' => 'Zárva',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'emailAddress' => 'Email',
      'title' => 'Cím',
      'account' => 'számla',
      'accounts' => 'Fiókok',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Fiók Típus',
      'doNotCall' => 'Ne hívj',
      'address' => 'Cím',
      'opportunityRole' => 'Lehetőség szerep',
      'accountRole' => 'Cím',
      'description' => 'Leírás',
      'campaign' => 'Kampány',
      'targetLists' => 'Céllista',
      'targetList' => 'Tűztábla',
      'portalUser' => 'Portál felhasználó',
      'originalLead' => 'Eredeti vezető',
      'acceptanceStatus' => 'Átvételi állapot',
      'accountIsInactive' => 'inaktív fiók',
      'acceptanceStatusMeetings' => 'Átvételi állapot (ülések)',
      'acceptanceStatusCalls' => 'Átvételi állapot (hívások)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => 'lehetőségek',
      'cases' => 'Olyan esetek,',
      'targetLists' => 'Céllista',
      'campaignLogRecords' => 'Kampánynapló',
      'campaign' => 'Kampány',
      'account' => 'Fiók (elsődleges)',
      'accounts' => 'Fiókok',
      'casesPrimary' => 'Ügyek (elsődleges)',
      'tasksPrimary' => 'Feladatok (bővítve)',
      'portalUser' => 'Portál felhasználó',
      'originalLead' => 'Eredeti vezető',
      'documents' => 'Dokumentumok',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Kapcsolat létrehozása',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Egyik sem--',
        'Decision Maker' => 'Döntéshozó',
        'Evaluator' => 'Kiértékelő',
        'Influencer' => 'Befolyásoló',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portál felhasználók',
      'notPortalUsers' => 'Nem Portal felhasználók',
      'accountActive' => 'Aktív',
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
      'Create Document' => 'Dokumentum létrehozása',
      'Details' => 'Részletek',
    ),
    'fields' => 
    array (
      'name' => 'Név',
      'status' => 'Állapot',
      'file' => 'fájl',
      'type' => 'típus',
      'publishDate' => 'Megjelenési dátum',
      'expirationDate' => 'Lejárati dátum',
      'description' => 'Leírás',
      'accounts' => 'Fiókok',
      'folder' => 'Folder',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Fiókok',
      'opportunities' => 'lehetőségek',
      'folder' => 'Folder',
      'leads' => 'vezet',
      'contacts' => 'Kapcsolatok',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktív',
        'Draft' => 'vázlat',
        'Expired' => 'Lejárt',
        'Canceled' => 'Törölve',
      ),
      'type' => 
      array (
        '' => 'Egyik sem',
        'Contract' => 'Szerződés',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licencszerződés',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktív',
      'draft' => 'vázlat',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Dokumentummappa létrehozása',
      'Manage Categories' => 'Mappák kezelése',
      'Documents' => 'Dokumentumok',
    ),
    'links' => 
    array (
      'documents' => 'Dokumentumok',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'status' => 'Állapot',
      'target' => 'Cél',
      'sentAt' => 'Dátum elküldve',
      'attemptCount' => 'Kísérletek',
      'emailAddress' => 'Email cím',
      'massEmail' => 'Tömeges e-mail',
      'isTest' => 'A teszt',
    ),
    'links' => 
    array (
      'target' => 'Cél',
      'massEmail' => 'Tömeges e-mail',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Függőben levő',
        'Sent' => 'Küldött',
        'Failed' => 'nem sikerült',
        'Sending' => 'elküldés',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Függőben levő',
      'sent' => 'Küldött',
      'failed' => 'nem sikerült',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Cikk létrehozása',
      'Any' => 'Bármilyen',
      'Send in Email' => 'Küldjön e-mailt',
      'Move Up' => 'Feljebb',
      'Move Down' => 'Lépjen le',
      'Move to Top' => 'Ugrás a tetejére',
      'Move to Bottom' => 'Ugrás az aljára',
    ),
    'fields' => 
    array (
      'name' => 'Név',
      'status' => 'Állapot',
      'type' => 'típus',
      'attachments' => 'Mellékletek',
      'publishDate' => 'Megjelenési dátum',
      'expirationDate' => 'Lejárati dátum',
      'description' => 'Leírás',
      'body' => 'Test',
      'categories' => 'Kategóriák',
      'language' => 'Nyelv',
      'portals' => 'portálok',
    ),
    'links' => 
    array (
      'cases' => 'Olyan esetek,',
      'opportunities' => 'lehetőségek',
      'categories' => 'Kategóriák',
      'portals' => 'portálok',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'A felülvizsgálat során',
        'Draft' => 'vázlat',
        'Archived' => 'Archivált',
        'Published' => 'Közzétett',
      ),
      'type' => 
      array (
        'Article' => 'Cikk',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'A cikk csak meghatározott portálokon érhető el.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Közzétett',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Kategória létrehozása',
      'Manage Categories' => 'Kategóriák kezelése',
      'Articles' => 'Cikkek',
    ),
    'links' => 
    array (
      'articles' => 'Cikkek',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Átalakítva',
      'Create Lead' => 'Lead létrehozása',
      'Convert' => 'Alakítani',
      'convert' => 'alakítani',
    ),
    'fields' => 
    array (
      'name' => 'Név',
      'emailAddress' => 'Email',
      'title' => 'Cím',
      'website' => 'Weboldal',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Felhasználónév',
      'doNotCall' => 'Ne hívj',
      'address' => 'Cím',
      'status' => 'Állapot',
      'source' => 'Forrás',
      'opportunityAmount' => 'Lehetőség összege',
      'opportunityAmountConverted' => 'Lehetőség Összeg (konvertált)',
      'description' => 'Leírás',
      'createdAccount' => 'számla',
      'createdContact' => 'Kapcsolatba lépni',
      'createdOpportunity' => 'Lehetőség',
      'campaign' => 'Kampány',
      'targetLists' => 'Céllista',
      'targetList' => 'Tűztábla',
      'industry' => 'Ipar',
      'acceptanceStatus' => 'Átvételi állapot',
      'opportunityAmountCurrency' => 'Lehetőség Összeg Valuta',
      'acceptanceStatusMeetings' => 'Átvételi állapot (ülések)',
      'acceptanceStatusCalls' => 'Átvételi állapot (hívások)',
    ),
    'links' => 
    array (
      'targetLists' => 'Céllista',
      'campaignLogRecords' => 'Kampánynapló',
      'campaign' => 'Kampány',
      'createdAccount' => 'számla',
      'createdContact' => 'Kapcsolatba lépni',
      'createdOpportunity' => 'Lehetőség',
      'cases' => 'Olyan esetek,',
      'documents' => 'Dokumentumok',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Új',
        'Assigned' => 'Kijelölt',
        'In Process' => 'Folyamatban',
        'Converted' => 'konvertált',
        'Recycled' => 'újrahasznosított',
        'Dead' => 'Halott',
      ),
      'source' => 
      array (
        '' => 'Egyik sem',
        'Call' => 'Hívás',
        'Email' => 'Email',
        'Existing Customer' => 'A meglévő ügyfelek',
        'Partner' => 'Partner',
        'Public Relations' => 'Közkapcsolatok',
        'Web Site' => 'Weboldal',
        'Campaign' => 'Kampány',
        'Other' => 'Más',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktív',
      'actual' => 'Tényleges',
      'converted' => 'konvertált',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'status' => 'Állapot',
      'storeSentEmails' => 'Elküldött e-mailek tárolása',
      'startAt' => 'Dátum kezdete',
      'fromAddress' => 'Címtől',
      'fromName' => 'Névből',
      'replyToAddress' => 'Válaszcím',
      'replyToName' => 'Válasznév',
      'campaign' => 'Kampány',
      'emailTemplate' => 'E-mail sablon',
      'inboundEmail' => 'Email fiók',
      'targetLists' => 'Céllista',
      'excludingTargetLists' => 'Céllista kivételével',
      'optOutEntirely' => 'Teljesen kizárni',
      'smtpAccount' => 'SMTP-fiók',
    ),
    'links' => 
    array (
      'targetLists' => 'Céllista',
      'excludingTargetLists' => 'Céllista kivételével',
      'queueItems' => 'Soros tételek',
      'campaign' => 'Kampány',
      'emailTemplate' => 'E-mail sablon',
      'inboundEmail' => 'Email fiók',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'vázlat',
        'Pending' => 'Függőben levő',
        'In Process' => 'Folyamatban',
        'Complete' => 'teljes',
        'Canceled' => 'Törölve',
        'Failed' => 'nem sikerült',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Tömeges e-mail létrehozása',
      'Send Test' => 'Teszt küldése',
      'System SMTP' => 'Rendszer SMTP',
      'system' => 'rendszer',
      'group' => 'csoport',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Válasszon legalább egy célt.',
      'testSent' => 'Tesztelendő e-mail (ek) elküldése',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'A leiratkozott címzettek e-mail címei ki lesz jelölve, és többé nem kapnak tömeges e-maileket.',
      'targetLists' => 'Olyan célok, amelyeknek üzeneteket kell kapniuk.',
      'excludingTargetLists' => 'Olyan célzások, amelyeknek nem kell üzeneteket kapnia.',
      'storeSentEmails' => 'Az e-maileket a CRM tárolja.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Tényleges',
      'complete' => 'teljes',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'parent' => 'Szülő',
      'status' => 'Állapot',
      'dateStart' => 'Dátum kezdete',
      'dateEnd' => 'Dátum vége',
      'duration' => 'tartam',
      'description' => 'Leírás',
      'users' => 'felhasználók',
      'contacts' => 'Kapcsolatok',
      'leads' => 'vezet',
      'reminders' => 'Emlékeztetők',
      'account' => 'számla',
      'acceptanceStatus' => 'Átvételi állapot',
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
        'Planned' => 'Tervezett',
        'Held' => 'Held',
        'Not Held' => 'Nem tartott',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Egyik sem',
        'Accepted' => 'Elfogadott',
        'Declined' => 'Elutasította',
        'Tentative' => 'Kísérleti',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Találkozó létrehozása',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Küldjön meghívókat',
      'on time' => 'időben',
      'before' => 'előtt',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Tervezett',
      'held' => 'Held',
      'todays' => 'A mai',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Semmi sem volt elküldve',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'account' => 'számla',
      'stage' => 'Színpad',
      'amount' => 'Összeg',
      'probability' => 'Valószínűség,%',
      'leadSource' => 'Ólomforrás',
      'doNotCall' => 'Ne hívj',
      'closeDate' => 'Bezárás dátuma',
      'contacts' => 'Kapcsolatok',
      'description' => 'Leírás',
      'amountConverted' => 'Összeg (konvertált)',
      'amountWeightedConverted' => 'Súlyozott összeg',
      'campaign' => 'Kampány',
      'originalLead' => 'Eredeti vezető',
      'amountCurrency' => 'Valamennyi pénznem',
      'contactRole' => 'Kapcsolatfelvétel',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Kapcsolatok',
      'documents' => 'Dokumentumok',
      'campaign' => 'Kampány',
      'originalLead' => 'Eredeti vezető',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Geológiai',
        'Qualification' => 'Képesítés',
        'Proposal' => 'Javaslat',
        'Negotiation' => 'Tárgyalás',
        'Needs Analysis' => 'Szükséges elemzés',
        'Value Proposition' => 'Értékajánlat',
        'Id. Decision Makers' => 'Id. Döntés hozó',
        'Perception Analysis' => 'Percepcióelemzés',
        'Proposal/Price Quote' => 'Javaslat / Ár ajánlat',
        'Negotiation/Review' => 'Tárgyalás / felülvizsgálata',
        'Closed Won' => 'Zárva nyert',
        'Closed Lost' => 'Zárva elveszett',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Lehetőség létrehozása',
    ),
    'presetFilters' => 
    array (
      'open' => 'Nyisd ki',
      'won' => 'Nyerte',
      'lost' => 'Elveszett',
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
      'name' => 'Név',
      'description' => 'Leírás',
      'entryCount' => 'Belépési szám',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'kampányok',
      'endDate' => 'Befejezés dátuma',
      'targetLists' => 'Céllista',
      'includingActionList' => 'Beleértve',
      'excludingActionList' => 'Kizárás',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Fiókok',
      'contacts' => 'Kapcsolatok',
      'leads' => 'vezet',
      'campaigns' => 'kampányok',
      'massEmails' => 'Tömeges e-mailek',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'háló',
        'Television' => 'Televízió',
        'Radio' => 'Rádió',
        'Newsletter' => 'Hírlevél',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Céllista létrehozása',
      'Opted Out' => 'Elutasított',
      'Cancel Opt-Out' => 'Visszavonás törlése',
      'Opt-Out' => 'Kiszáll',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Név',
      'parent' => 'Szülő',
      'status' => 'Állapot',
      'dateStart' => 'Dátum kezdete',
      'dateEnd' => 'Határidő',
      'dateStartDate' => 'Dátum kezdete (egész nap)',
      'dateEndDate' => 'Dátum vége (egész nap)',
      'priority' => 'Kiemelten fontos',
      'description' => 'Leírás',
      'isOverdue' => 'Elkésett',
      'account' => 'számla',
      'dateCompleted' => 'Teljesítés dátuma',
      'attachments' => 'Mellékletek',
      'reminders' => 'Emlékeztetők',
      'contact' => 'Kapcsolatba lépni',
    ),
    'links' => 
    array (
      'attachments' => 'Mellékletek',
      'account' => 'számla',
      'contact' => 'Kapcsolatba lépni',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nem kezdődött',
        'Started' => 'lépések',
        'Completed' => 'befejezték',
        'Canceled' => 'Törölve',
        'Deferred' => 'halasztott',
      ),
      'priority' => 
      array (
        'Low' => 'Alacsony',
        'Normal' => 'Normál',
        'High' => 'Magas',
        'Urgent' => 'Sürgős',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Feladat létrehozása',
      'Complete' => 'teljes',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Tényleges',
      'completed' => 'befejezték',
      'deferred' => 'halasztott',
      'todays' => 'A mai',
      'overdue' => 'Lejárt',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => 'Cím',
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
      'meetings' => 'találkozók',
      'calls' => 'felhívja',
      'tasks' => 'feladatok',
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
      'Create Formularios' => '{EntityTypeTranslated} létrehozása',
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
      'meetings' => 'találkozók',
      'calls' => 'felhívja',
      'tasks' => 'feladatok',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => '{EntityTypeTranslated} létrehozása',
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
      'meetings' => 'találkozók',
      'calls' => 'felhívja',
      'tasks' => 'feladatok',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' => 
    array (
      'Create Reclamo' => '{EntityTypeTranslated} létrehozása',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>