<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Vartotojas',
      'action' => 'Veiksmas',
      'createdAt' => 'Data',
      'target' => 'Tikslas',
      'targetType' => 'Adresatų tipas',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Adresss',
      'authLogRecord' => 'Auth žurnalo įrašas',
    ),
    'links' => 
    array (
      'authToken' => 'Autentikavimo žymė',
      'authLogRecord' => 'Auth žurnalo įrašas',
      'user' => 'Vartotojas',
      'target' => 'Tikslas',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Tik mano',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Skaityti',
        'update' => 'Atnaujinti',
        'delete' => 'Ištrinti',
        'create' => 'Sukurti',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Įjungta',
      'Disabled' => 'Išjungta',
      'System' => 'Sistema',
      'Users' => 'Vartotojai',
      'Email' => 'El. paštas',
      'Data' => 'Duomenys',
      'Customization' => 'Pritaikymas',
      'Available Fields' => 'Galimi laukeliai',
      'Layout' => 'Išdėstymas',
      'Entity Manager' => 'Vedinių tvarkyklė',
      'Add Panel' => 'Pridėti skydelį',
      'Add Field' => 'Pridėti laukelį',
      'Settings' => 'Nustatymai',
      'Scheduled Jobs' => 'Suplanuoti darbai',
      'Upgrade' => 'Atnaujinimas',
      'Clear Cache' => 'Išvalyti talpyklą',
      'Rebuild' => 'Atstatyti',
      'Teams' => 'Komandos',
      'Roles' => 'Rolės',
      'Portal' => 'Portalas
',
      'Portals' => 'Portalai',
      'Portal Roles' => 'Portalo rolės',
      'Portal Users' => 'Portalo vartotojai',
      'Outbound Emails' => 'Išsiunčiami el. laiškai',
      'Group Email Accounts' => 'El. pašto grupės',
      'Personal Email Accounts' => 'Asmeninės el. pašto paskyros',
      'Inbound Emails' => 'Gaunami el. laiškai',
      'Email Templates' => 'El. laiškų šabonai',
      'Import' => 'Importuoti',
      'Layout Manager' => 'Išdėstymo tvarkyklė',
      'User Interface' => 'Vartotojo sąsaja',
      'Auth Tokens' => 'Autentikavimo priemonė',
      'Auth Log' => 'Auth Prisijungti',
      'Authentication' => 'Autentikavimas',
      'Currency' => 'Valiuta',
      'Integrations' => 'Integracijos',
      'Extensions' => 'Plėtiniai',
      'Upload' => 'Įkelti',
      'Installing...' => 'Diegiama...',
      'Upgrading...' => 'Atnaujinama...',
      'Upgraded successfully' => 'Sėkmingai atnaujinta',
      'Installed successfully' => 'Sėkmingai įdiegta',
      'Ready for upgrade' => 'Paruošta atnaujinimui',
      'Run Upgrade' => 'Vykdyti atnaujinimą',
      'Install' => 'Diegti',
      'Ready for installation' => 'Paruošta diegimui',
      'Uninstalling...' => 'Išdiegiama...',
      'Uninstalled' => 'Išdiegta',
      'Create Entity' => 'Sukurti vedinį',
      'Edit Entity' => 'Redaguoti vedinį',
      'Create Link' => 'Sukurti nuorodą',
      'Edit Link' => 'Redaguoti nuorodą',
      'Notifications' => 'Pranešimai',
      'Jobs' => 'Užduotys',
      'Reset to Default' => 'Atstatyti numatytus',
      'Email Filters' => 'El. pašto filtrai',
      'Action History' => 'Veiksmų istorija',
      'Label Manager' => 'Etikečių tvarkyklė',
      'Lead Capture' => '"Lead Capture"',
      'Attachments' => 'Priedai',
    ),
    'layouts' => 
    array (
      'list' => 'Sąrašas',
      'detail' => 'Plati informacija',
      'listSmall' => 'Sąrašas (mažas)',
      'detailSmall' => 'Plati informacija (mažesnis variantas)',
      'detailPortal' => 'Plati informacija (Portalas)',
      'detailSmallPortal' => 'Plati informacija (mažesnis variantas, portalas)',
      'listSmallPortal' => 'Sąrašas (mažas, portalas)',
      'listPortal' => 'Sąrašas (Portalas)',
      'relationshipsPortal' => 'Santykių grupės (portalas)',
      'filters' => 'Paieškos filtrai',
      'massUpdate' => 'Masinis atnaujinimas',
      'relationships' => 'Sąsajų skiltys',
      'sidePanelsDetail' => 'Šoninės panelės (išsamiau)',
      'sidePanelsEdit' => 'Šoninės panelės (redaguoti)',
      'sidePanelsDetailSmall' => 'Šoninės panelės (smulkios)',
      'sidePanelsEditSmall' => 'Šoninės panelės (redaguoti smulkias)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Konvertuoti potencialų klienta',
      'listForAccount' => 'Sąrašas (paskyrai)',
      'listForContact' => 'Sąrašas (kontaktams)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresas',
      'array' => 'Rikiavimas',
      'foreign' => 'Užsietientiškas',
      'duration' => 'Trukmė',
      'password' => 'Slaptažodis',
      'personName' => 'Asmens vardas',
      'autoincrement' => 'Auto-padidinimas',
      'bool' => 'Būlis',
      'currency' => 'Valiuta',
      'currencyConverted' => 'Valiuta (konvertuota)',
      'date' => 'Data',
      'datetime' => 'Data-laikas',
      'datetimeOptional' => 'Data / data-laikas',
      'email' => 'El. paštas',
      'enum' => 'Enum',
      'enumInt' => 'Sąrašas',
      'enumFloat' => 'Sąrašo padėtis',
      'float' => 'Padėtis',
      'int' => 'Skaitmuo',
      'link' => 'Nuoroda',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'phone' => 'Telefonas',
      'text' => 'Tekstas',
      'url' => 'Url',
      'varchar' => 'Dydis',
      'file' => 'Failas',
      'image' => 'Nuotrauka',
      'multiEnum' => 'Daugiskaitinis skaičiavimas',
      'attachmentMultiple' => 'Keli prisegtukai',
      'rangeInt' => 'Sveikų skaičių diapazonas',
      'rangeFloat' => 'Nuo... iki',
      'rangeCurrency' => 'Valiutų gruopė',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Žemėlapis',
      'number' => 'Numeris (automatinis prieaugis)',
      'colorpicker' => 'Spalvos pasirinkimas',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json objektas',
    ),
    'fields' => 
    array (
      'type' => 'Tipas',
      'name' => 'Vardas',
      'label' => 'Etiketė',
      'tooltipText' => 'Įrankių juostos tekstas',
      'required' => 'Privaloma',
      'default' => 'Numatytas',
      'maxLength' => 'Maksimalus ilgis',
      'options' => 'Pasirinkimai',
      'after' => 'Po (laukelis)',
      'before' => 'Prieš (laukelis)',
      'link' => 'Nuoroda',
      'field' => 'Laukelis',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Vertimas',
      'previewSize' => 'Peržiūrėti dydį',
      'noEmptyString' => 'Tuščios eilutės reikšmė neleidžiama',
      'defaultType' => 'Numatytas typas',
      'seeMoreDisabled' => 'Išjungti teksto i6kirpimą',
      'entityList' => 'Vedinių sąrašas',
      'isSorted' => 'Surūšiuota (pagal abėcėlę)',
      'audited' => 'Audituota',
      'trim' => 'Apkirpti',
      'height' => 'Aukštis (px)',
      'minHeight' => 'Minimalus aukštis (px)',
      'provider' => 'Tiekėjas',
      'typeList' => 'Tipų sąrašas',
      'rows' => 'Teksto eilučių eilučių skaičius',
      'lengthOfCut' => 'Iškirpimo ilgis',
      'sourceList' => 'Šaltinių sąrašas',
      'prefix' => 'Prefiksas',
      'nextNumber' => 'Kitas numeris',
      'padLength' => 'Pado ilgis',
      'disableFormatting' => 'Išjungti formatavimą',
      'dynamicLogicVisible' => 'Sąlygos, įgalinačios matyti laukelį',
      'dynamicLogicReadOnly' => 'Sąlygos, leidžiančios tik skaityti laukelį',
      'dynamicLogicRequired' => 'Sąlygos, nustatančios laukelį privalomu',
      'dynamicLogicOptions' => 'Sąlyginės galimybės',
      'probabilityMap' => 'Tikimybių etapai (%)',
      'readOnly' => 'Tik skaitymui',
      'maxFileSize' => 'Maksimalus failo dydis (Mb)',
      'isPersonalData' => 'Ar asmeniniai duomenys',
      'useIframe' => 'Naudokite "Iframe"',
      'useNumericFormat' => 'Naudokite skaitmeninį formatą',
      'strip' => 'Juostos juosta',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM bus atnaujinta į versiją <strong> {version} </ strong>. Būkite kantrūs, nes tai gali užtrukti.',
      'upgradeDone' => 'EspoCRM buvo atnaujinta į versiją <strong> {version} </ strong>.',
      'upgradeBackup' => 'Prieš atnaujinant EspoCRM, rekomenduojame išsisaugoti failų ir duomenų bazės kopijas.',
      'thousandSeparatorEqualsDecimalMark' => 'Tūkstančių skirtukų simbolis negali būti toks pat kaip dešimtainio skirtuko simbolis.',
      'userHasNoEmailAddress' => 'Vartotojas neturi el. pašto adreso.',
      'selectEntityType' => 'Pasirinkite objekto tipą kairiajame meniu.',
      'selectUpgradePackage' => 'Pasirinkite atnaujinimo paketą',
      'downloadUpgradePackage' => 'Atsisiųskite atnaujinimo paketą <a href="{url}">čia</a>.',
      'selectLayout' => 'Pasirinkite norimą išdėtymo variantą kairiajame meniu ir redaguokite jį.',
      'selectExtensionPackage' => 'Pasirinkite plėtinių paketą',
      'extensionInstalled' => 'Plėtinys {name} {version} yra įdiegtas.',
      'installExtension' => 'Plėtinys {name} {version} yra paruoštas diegimui.',
      'cronIsNotConfigured' => 'Numatytos darbo vietos neveikia. Taigi įeinantys laiškai, pranešimai ir priminimai neveikia. Prašome laikytis [instrukcijų] (https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) nustatyti cron darbą.',
      'newVersionIsAvailable' => 'Nauja EspoCRM versija {latestVersion} yra prieinama.',
      'newExtensionVersionIsAvailable' => 'Yra nauja {extensionName} versija {latestVersion}.',
      'uninstallConfirmation' => 'Ar tikrai norite pašalinti plėtinį?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Sistemos programos nustatymai.',
      'scheduledJob' => 'Užduotys, kurias vykdo cron.',
      'upgrade' => 'Atnaujinti EspoCRM.',
      'clearCache' => 'Išvalyti visą vartotojo valdymo panelės talpyklą.',
      'rebuild' => 'Atkurti vartotojo valdymo panelę ir išvalyti talpyklą.',
      'users' => 'Vartotojų nustatymai.',
      'teams' => 'Komandų nustatymai.',
      'roles' => 'Rolių nustatymai.',
      'portals' => 'Portalų valdymas.',
      'portalRoles' => 'Portalo rolės.',
      'portalUsers' => 'Portalo vartotojai.',
      'outboundEmails' => 'El. pašto SMTP nustatymai išsiunčiamiems laiškams.',
      'groupEmailAccounts' => 'IMAP grupės el.pašto paskyros. Importuoti el. laiškus ir el. pastas pagal atvejį.',
      'personalEmailAccounts' => 'Vartotojų el. pašto paskyros.',
      'emailTemplates' => 'Išsiunčiamų laiškų šablonai.',
      'import' => 'Importuoti duomenis iš CSV failo.',
      'layoutManager' => 'Išdėstymo pritaikymas pagal save(sąrašas, plati informacija, keisti, ieškoti, masinis atnaujinimas).',
      'entityManager' => 'Sukurkite ir redaguokite pritaikytus vedinius. Tvarkykite laukelius ir sąsajas.',
      'userInterface' => 'Konfiguruoti UI.',
      'authTokens' => 'Aktyvios utentikavimo sesijos. IP adresas ir paskutinio prisijungimo data.',
      'authentication' => 'Autentikavimo nustatymai.',
      'currency' => 'Valiutų nustatymai ir kursai.',
      'extensions' => 'Įdiegti arba išdiegti plėtinius.',
      'integrations' => 'Trečiųjų šalių paslaugų integracija.',
      'notifications' => 'Programų ir el.pašto pranšimų nustatymai',
      'inboundEmails' => 'Gaunamų el. laiškų nustatymai.',
      'emailFilters' => 'El. pašto laiškai, atitinkantys nurodytą filtrą, nebus importuoti.',
      'actionHistory' => 'Vartotojo veiksmų žurnalas.',
      'labelManager' => 'Prisitaikykite aplikacijų etiketes',
      'authLog' => 'Prisijungimo istorija.',
      'leadCapture' => 'API prisijungimo taškai "Web-to-Lead".',
      'attachments' => 'Visi failo priedai, saugomi sistemoje.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-mažas',
        'small' => 'Mažas',
        'medium' => 'Vidutinis',
        'large' => 'Didelis',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'IR',
      'or' => 'ARBA',
      'not' => 'NE',
    ),
  ),
  'Attachment' => 
  array (
    'fields' => 
    array (
      'role' => 'Vaidmuo',
      'related' => 'Susijęs',
      'file' => 'Failas',
      'type' => 'Įveskite',
      'field' => 'Laukas',
      'sourceId' => 'Šaltinio ID',
      'storage' => 'Sandėliavimas',
      'size' => 'Dydis (baitai)',
    ),
    'options' => 
    array (
      'role' => 
      array (
        'Attachment' => 'Priedas',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => 'Importuoti failą',
        'Export File' => 'Eksporto failas',
        'Mail Merge' => 'Pašto suliejimo',
        'Mass Pdf' => 'Masinis pdf',
      ),
    ),
    'insertFromSourceLabels' => 
    array (
      'Document' => 'Įterpti dokumentą
',
    ),
    'presetFilters' => 
    array (
      'orphan' => 'Našlaitis',
    ),
  ),
  'AuthLogRecord' => 
  array (
    'fields' => 
    array (
      'username' => 'Naudotojo vardas',
      'ipAddress' => 'IP adresas',
      'requestTime' => 'Užklausos laikas',
      'createdAt' => 'Prašoma at',
      'isDenied' => 'Yra atmesta',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portalas',
      'user' => 'Vartotojas',
      'authToken' => 'Sukurtas "Auth Token"',
      'requestUrl' => 'Prašyti URL',
      'requestMethod' => 'Prašymo metodas',
      'authTokenIsActive' => 'Auth Token yra aktyvus',
    ),
    'links' => 
    array (
      'authToken' => 'Sukurtas "Auth Token"',
      'user' => 'Naudotojas',
      'portal' => 'Portalas',
      'actionHistoryRecords' => 'Veiksmų istorija',
    ),
    'presetFilters' => 
    array (
      'denied' => 'Atmesta',
      'accepted' => 'Priimta',
    ),
    'options' => 
    array (
      'denialReason' => 
      array (
        'CREDENTIALS' => 'Netinkami įgaliojimai',
        'INACTIVE_USER' => 'Pakviesti naudotoją',
        'IS_PORTAL_USER' => 'Portalo naudotojas',
        'IS_NOT_PORTAL_USER' => 'Ne portalo naudotojas',
        'USER_IS_NOT_IN_PORTAL' => 'Vartotojas nėra susijęs su portalu',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Vartotojas',
      'ipAddress' => 'IP Adresss',
      'lastAccess' => 'Paskutinio prisijungimo data',
      'createdAt' => 'Prisijungimo data',
      'isActive' => 'Yra aktyvus',
      'portal' => 'Portalas',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Veiksmų istorija',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktyvus',
      'inactive' => 'Neaktyvus',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Nustatyti neaktyvią',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Nustatyti kaip neaktyvų',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Pavadinimas',
      'dateFrom' => 'Data nuo',
      'dateTo' => 'Data iki',
      'autorefreshInterval' => 'Automatinio atnaujinimo intervalas',
      'displayRecords' => 'Rodyti įrašus',
      'isDoubleHeight' => 'Aukštis 2x',
      'mode' => 'Režimas',
      'enabledScopeList' => 'Ką rodyti',
      'users' => 'Vartotojai',
      'entityType' => 'Vedinio tipas',
      'primaryFilter' => 'Pirminis filtras',
      'boolFilterList' => 'Papildomi filtrai',
      'sortBy' => 'Rikiavimas (laukelių)',
      'sortDirection' => 'Rikiavimas kryptis)',
      'expandedLayout' => 'Išdėstymas',
      'dateFilter' => 'Data filtras',
      'futureDays' => 'Kitas X dienas',
      'useLastStage' => 'Grupė pagal paskutinį pasiektą etapą',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Savaitė (darbotvarkė)',
        'basicWeek' => 'Savaitė',
        'month' => 'Mėnuo',
        'basicDay' => 'Diena',
        'agendaDay' => 'Diena (darbotvarkė) ',
        'timeline' => 'Chronologija',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Pasirinkite vedinio tipą  iš skydelio variantų',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Laukelis',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Lygu',
        'notEquals' => 'Nelygu',
        'greaterThan' => 'Daugiau nei',
        'lessThan' => 'Mažiau nei',
        'greaterThanOrEquals' => 'Daugiau nei arba lygu',
        'lessThanOrEquals' => 'Mažiau nei arba lygu',
        'in' => 'yra',
        'notIn' => 'Nėra',
        'inPast' => 'Praeityje',
        'inFuture' => 'Ateitis',
        'isToday' => 'Šiandien',
        'isTrue' => 'Yra teisinga',
        'isFalse' => 'Yra klaidinga',
        'isEmpty' => 'Yra tuščia',
        'isNotEmpty' => 'Yra netuščia',
        'contains' => 'Turi',
        'notContains' => 'Neturi',
        'has' => 'Turi',
        'notHas' => 'Neturi',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas (pavadinimas)',
      'parent' => 'Pagrindinis',
      'status' => 'Statusas',
      'dateSent' => 'Išsiuntimo data',
      'from' => 'Nuo',
      'to' => 'Kam',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Atsakyti kam',
      'replyToString' => 'Atsakyti (eilutė)',
      'isHtml' => 'Html formatas',
      'body' => 'Laiško tekstas',
      'bodyPlain' => 'Tekstas (paprastas)',
      'subject' => 'Tema',
      'attachments' => 'Prisegtukai',
      'selectTemplate' => 'Pasirinkti šabloną',
      'fromEmailAddress' => 'Nuo adreso',
      'toEmailAddresses' => 'El. Pašto adresai',
      'emailAddress' => 'El. pašto adresas',
      'deliveryDate' => 'Pristatymo data',
      'account' => 'Paskyra',
      'users' => 'Vartotojai',
      'replied' => 'Atsakyta',
      'replies' => 'Atsakymai',
      'isRead' => 'Perskaityta',
      'isNotRead' => 'Neeperskaityta',
      'isImportant' => 'Svarbūs',
      'isReplied' => 'Yra atsakyta',
      'isNotReplied' => 'Yra neatsakyta',
      'isUsers' => 'Vartotojo',
      'inTrash' => 'Šiukšlinėje',
      'sentBy' => 'Išsiųsta',
      'folder' => 'Aplankas',
      'inboundEmails' => 'Grupės paskyros',
      'emailAccounts' => 'Asmeninės paskyros',
      'hasAttachment' => 'Turi prisegtuką',
      'assignedUsers' => 'Priskirti vartotojai',
      'ccEmailAddresses' => 'CC el. Pašto adresai',
      'bccEmailAddresses' => 'BCC el. Pašto adresai',
      'replyToEmailAddresses' => 'Atsakymas į el. Pašto adresus',
      'messageId' => 'Pranešimo id',
      'messageIdInternal' => 'Pranešimo ID (vidinis)',
      'folderId' => 'Aplanko ID',
      'fromName' => 'Iš vardo',
      'fromString' => 'Iš stygos',
      'isSystem' => 'Ar sistema',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'replied' => 'Atsakyta',
      'replies' => 'Atsakymai',
      'inboundEmails' => 'Grupės paskyros',
      'emailAccounts' => 'Asmeninės paskyros',
      'assignedUsers' => 'Priskirti vartotojai',
      'sentBy' => 'Išsiųsta',
      'attachments' => 'Priedas',
      'fromEmailAddress' => 'Nuo el. Pašto adreso',
      'toEmailAddresses' => 'El. Pašto adresai',
      'ccEmailAddresses' => 'CC el. Pašto adresai',
      'bccEmailAddresses' => 'BCC el. Pašto adresai',
      'replyToEmailAddresses' => 'Atsakymas į el. Pašto adresus',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Juodraštis',
        'Sending' => 'Siunčiama',
        'Sent' => 'Išsiųsta',
        'Archived' => 'Suarchyvuota',
        'Received' => 'Gauta',
        'Failed' => 'Nepavyko',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Suarchyvuoti laiškai',
      'Archive Email' => 'Suarchyvuoti laiškai',
      'Compose' => 'Rašyti',
      'Reply' => 'Atsakyti',
      'Reply to All' => 'Atsakyti visiems',
      'Forward' => 'Persiųsti',
      'Original message' => 'Originali žinutė',
      'Forwarded message' => 'Persiųsti žinutę',
      'Email Accounts' => 'Asmeninės el.pašto paskyros',
      'Inbound Emails' => 'Grupės el.pašto paskyros',
      'Email Templates' => 'El. laiškų šabonai',
      'Send Test Email' => 'Siųsti bandomąjį el. laišką',
      'Send' => 'Siųsti',
      'Email Address' => 'El. pašto adresas',
      'Mark Read' => 'Pažymėti, kaip skaitytą',
      'Sending...' => 'Siunčiama...',
      'Save Draft' => 'Išsaugoti juodraštį',
      'Mark all as read' => 'Visus pažymėti kaip skaitytus',
      'Show Plain Text' => 'Rodyti paprastą tekstą',
      'Mark as Important' => 'Pažymėti kaip svarbų',
      'Unmark Importance' => 'Atšaukti žymėtimą kaip svarbų',
      'Move to Trash' => 'Perkelti į šiukšlinę',
      'Retrieve from Trash' => 'Gražinti iš šiukšlinės',
      'Move to Folder' => 'Perkelti į aplanką',
      'Filters' => 'Filtrai',
      'Folders' => 'Aplankai',
      'Create Lead' => 'Sukurti potencialų klientą',
      'Create Contact' => 'Sukurti kontaktą',
      'Add to Contact' => 'Pridėti prie kontaktų',
      'Add to Lead' => 'Pridėti prie švino',
      'Create Task' => 'Sukurti užduotį',
      'Create Case' => 'Sukurti atvejį',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Nėra SMTP nustatymų. {link}.',
      'testEmailSent' => 'Bandomasis el. laiškas išsiųstas',
      'emailSent' => 'El. laiškas yra išsiųstas',
      'savedAsDraft' => 'Juodraštis šsaugotas',
      'confirmInsertTemplate' => 'El. Paštas bus prarastas. Ar tikrai norite įterpti šabloną?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Išsiųsta',
      'archived' => 'Suarchyvuota',
      'inbox' => 'Gautieji',
      'drafts' => 'Juodraščiai',
      'trash' => 'Šiukšlinė',
      'important' => 'Svarbu',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Pažymėti kaip skaitytą',
      'markAsNotRead' => 'Pažymėti kaip neskaitytą',
      'markAsImportant' => 'Pažymėti kaip svarbų',
      'markAsNotImportant' => 'Atšaukti svarbą',
      'moveToTrash' => 'Perkelti į šiukšlinę',
      'moveToFolder' => 'Perkelti į aplanką',
      'retrieveFromTrash' => 'Iškelti iš šiukšlinės',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'status' => 'Statusas',
      'host' => 'Priegloba',
      'username' => 'Vartotojo vardas',
      'password' => 'Slaptažodis',
      'port' => 'Prievadas',
      'monitoredFolders' => 'Stebimi aplankai',
      'ssl' => 'SSL',
      'fetchSince' => 'Surinkti nuo',
      'emailAddress' => 'El. pašto adresas',
      'sentFolder' => 'Išsiųstų laiškų aplankas',
      'storeSentEmails' => 'Saugoti išsiųstus laiškus',
      'keepFetchedEmailsUnread' => 'Laikyti surinktus el. laiškus kaip neskaitytus',
      'emailFolder' => 'Įkelti į aplanką',
      'useImap' => 'Tikrinti paštą',
      'useSmtp' => 'Naudoti SMTP',
      'smtpHost' => 'SMTP priegloba',
      'smtpPort' => 'SMTP prievadas',
      'smtpAuth' => 'SMTP autentikavimas',
      'smtpSecurity' => 'SMTP apsauga',
      'smtpUsername' => 'SMTP vartotojo vardas',
      'smtpPassword' => 'SMTP slaptažodis',
    ),
    'links' => 
    array (
      'filters' => 'Filtrai',
      'emails' => 'El. laiškai',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktyvus',
        'Inactive' => 'Neaktyvus',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Sukurti el. pašto paskyrą',
      'IMAP' => 'IMAP',
      'Main' => 'Pagrindinis',
      'Test Connection' => 'Patikrinti ryšį',
      'Send Test Email' => 'Siųsti bandomąjį el. paštą',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nepavyko prisijungti prie IMAP serverio',
      'connectionIsOk' => 'Geras ryšys',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Keli aplankai turėtų būti atskirti kableliais.

Galite pridėti "Išsiųsti" aplanką, kad sinchronizuotumėte el. laiškus, siunčiamus iš išorinio el. pašto kliento.',
      'storeSentEmails' => 'Siunčiami el. aiškai bus saugomi IMAP serveryje. El pašto adreso laukelis turi atitikti el pašto adresą, iš kurio bus siunčiamas laiškas',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Pirminis',
      'Opted Out' => 'Pasirinkta',
      'Invalid' => 'Neteisingas',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Nuo',
      'to' => 'Kam',
      'subject' => 'Tema',
      'bodyContains' => 'Tekste yra',
      'action' => 'Veiksmas',
      'isGlobal' => 'yra globalus',
      'emailFolder' => 'Aplankas',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Sukurti el.pašto filtrą',
      'Emails' => 'El. laiška',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignoruoti',
        'Move to Folder' => 'Įkelti į aplanką',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Pavadinkite filtrą apibūdinančiu pavadinimu',
      'subject' => 'Naudokite pakaitos simbolį *:

tekstas * - prasideda tekstas,
* tekstas * - yra teksto
* tekstas - baigiasi tekstu.',
      'bodyContains' => 'El. laiške yra bet kuris iš nurodytų žodžių ar frazių.',
      'from' => 'El. Laiškai siunčiami iš nurodyto adreso. Palikite tuščią, jei nereikia. Galite naudoti pakaitos simbolį *.',
      'to' => 'El. Laiškai siunčiami į nurodytą adresą. Palikite tuščią, jei nereikia. Galite naudoti pakaitos simbolį *.',
      'isGlobal' => 'Šis filtras taikomas visiems sistemoje gaunamiems el. laiškams.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Praleisti pranešimus',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Sukurti aplanką',
      'Manage Folders' => 'Tvarkyti aplankus',
      'Emails' => 'El. laiškai',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'status' => 'Statusas',
      'isHtml' => 'Html formatas',
      'body' => 'Laiško tekstas',
      'subject' => 'Tema',
      'attachments' => 'Prisegtukai',
      'insertField' => 'Įterpti laukelį',
      'oneOff' => 'Vienkartinis',
      'category' => 'Kategorija',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Sukurti el. pašto laiško šabloną',
      'Info' => 'Informacija',
      'Available placeholders' => 'Galimi užpildai',
    ),
    'messages' => 
    array (
      'infoText' => 'Galimi užpildai:

{optOutUrl} & # 8211; "Unsubsbribe" nuorodos URL;

{optOutLink} & # 8211; Atsisakyti prenumeratos nuorodą.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Pažymėkite, jei ketinate naudoti šį šabloną tik vieną kartą. Pavyzdžiui masiniems el. laiškams.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Esamas',
    ),
    'placeholderTexts' => 
    array (
      'optOutUrl' => 'URL nepasirinkto šlamšto nuorodos',
      'optOutLink' => 'atsisakyti prenumeratos nuorodą',
    ),
  ),
  'EmailTemplateCategory' => 
  array (
    'labels' => 
    array (
      'Create EmailTemplateCategory' => 'Sukurti kategoriją',
      'Manage Categories' => 'Maldyti kategorijas',
      'EmailTemplates' => 'Laiško šablonas',
    ),
    'fields' => 
    array (
      'order' => 'Užsakyti',
      'childList' => 'Vaikų sąrašas',
    ),
    'links' => 
    array (
      'emailTemplates' => 'Laiškų šablonai',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Laukeliai',
      'Relationships' => 'Sąsajos',
      'Schedule' => 'Tvarkaraštis',
      'Log' => 'Žurnalas',
      'Formula' => 'Formulė',
    ),
    'fields' => 
    array (
      'name' => 'Vardas',
      'type' => 'Tipas',
      'labelSingular' => 'Etiketė vienaskaita',
      'labelPlural' => 'Etiketė daugiskaita',
      'stream' => 'Srautas',
      'label' => 'Etiketė',
      'linkType' => 'Nuorodos tipas',
      'entityForeign' => 'Užsienio subjektas',
      'linkForeign' => 'Užsienio ryšys',
      'link' => 'Nuoroda',
      'labelForeign' => 'Užsienio etiketė',
      'sortBy' => 'Numatytas rikiavimas (laukeliai)',
      'sortDirection' => 'Numatytas rikiavimas (kryptis)',
      'relationName' => 'Vidurinis lentelės pavadinimas',
      'linkMultipleField' => 'Susieti kelis laukelius',
      'linkMultipleFieldForeign' => 'Užsienio ryšių keli laukai',
      'disabled' => 'Išjungtas',
      'textFilterFields' => 'Teksto filtro laukai',
      'audited' => 'Patikrinta',
      'auditedForeign' => 'Patikrinta iš išorės',
      'statusField' => 'Būsenos laukelis',
      'beforeSaveCustomScript' => 'Prieš išsaugant tinkintą tekstą',
      'color' => 'Spalva',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'Ignoruojamos grupės Kanbanoje',
      'iconClass' => 'Piktograma',
      'fullTextSearch' => 'Pilna teksto paieška',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Joks',
        'Base' => 'Pagrindas',
        'Person' => 'Asmuo',
        'CategoryTree' => 'Kategorijų medis',
        'Event' => 'Įvykis',
        'BasePlus' => 'Bazė Plius',
        'Company' => 'Įmonė',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Daugelis-daugeliui',
        'oneToMany' => 'Vienas-daugeliui',
        'manyToOne' => 'Daugelis-vienam',
        'parentToChildren' => 'Pagrindinis-antriniui',
        'childrenToParent' => 'Vaikai tėvams',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Didėjančia tvarka',
        'desc' => 'Mažėjančia tvarka',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Įrašas buvo sukurtas',
      'linkAlreadyExists' => 'Sąsajos pavadinimo konfliktas.',
      'linkConflict' => 'Vardas konfliktas: nuoroda ar laukas su tuo pačiu pavadinimu jau egzistuoja.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Šio lauko atnaujinimai įrašomi sraute.',
      'textFilterFields' => 'Laukeliai, naudojami teksto paieškoje.',
      'stream' => 'Nesvarbu, ar objektas turi srautą',
      'disabled' => 'Patikrinkite, ar jums nereikia šio objekto sistemoje.',
      'linkAudited' => 'Susijusio įrašo kūrimas ir susiejimas su esamu įrašu bus registruojamas sraute.',
      'linkMultipleField' => '"Susieti daugelį laukelių" yra patogus būdas redaguoti sasajas. Nenaudokite to, jei galite turėti daug panašių įrašų.',
      'entityType' => 'Bazė plius - rodo "Veiklos", "Istorija" ir "Užduotys" skiltis.
Įvykis - pasiekiamas skiltyje "Kalendorius" ir "Veiklos".',
      'fullTextSearch' => 'Reikia atlikti rekonstrukciją.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Eksportuoti visus laukus',
      'fieldList' => 'Laukelių sąrašas',
      'format' => 'Formatas',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel) ',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'version' => 'Versija',
      'description' => 'Aprašymas',
      'isInstalled' => 'Įdiegta',
      'checkVersionUrl' => 'Naujų versijų tikrinimo URL',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Išdiegta',
      'Install' => 'Įdiegti',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Plėtinys {name} yra išdiegtas',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Prisijungti',
      'Connected' => 'Prisijungta',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dinaminė logika',
      'Name' => 'Vardas',
      'Label' => 'Etiketė',
      'Type' => 'Tipas',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Joks',
        'javascript: return this.dateTime.getNow(1);' => 'Dabar',
        'javascript: return this.dateTime.getNow(5);' => 'Dabar (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Dabar (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Dabar (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 valanda',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 valandos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 valandų',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 valandų',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 diena',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dienos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dienos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dienos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dienos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dienos',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 savaitė',
      ),
      'dateDefault' => 
      array (
        '' => 'Joks',
        'javascript: return this.dateTime.getToday();' => 'Šiandien',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 diena',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dienos',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dienų',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 savaitė',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 savaitės',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 savaitės',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mėnuo',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 mėnesiai',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 mėnesių',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 mėnesių',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 metai',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Atnaujinimai bus įrašomi sraute.',
      'required' => 'Laukas bus privalomas. Negalima palikti tuščio.',
      'default' => 'Vertė nustatoma pagal numatytuosius nustatymus.',
      'min' => 'Minimali priimtina vertė.',
      'max' => 'Maksimali priimtina vertė.',
      'seeMoreDisabled' => 'Jeigu nepažymėta, ilgi tekstai bus sutrumpinti',
      'lengthOfCut' => 'Kokio ilgio gali būti tekstas, prieš apkerpant',
      'maxLength' => 'Maksimalus priimtinas teksto ilgis.',
      'before' => 'Duomenų vertė turėtų būti prieš duomenų vertės nurodytą laukelį',
      'after' => 'Duomenų vertė turėtų būti poduomenų vertės nurodyto laukelio',
      'readOnly' => 'artotojas negali nurodyti laukelio vertės. Bet gali būti apskaičiuojamas pagal formulę.',
      'maxFileSize' => 'Jei tuščia arba 0, tai nelimituojama',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Gatvė',
        'city' => 'Miestas',
        'state' => 'Rajonas/regionas',
        'country' => 'Šalis',
        'postalCode' => 'Pašto kodas',
        'map' => 'Žemėlapis',
      ),
      'personName' => 
      array (
        'salutation' => 'Sveikinimas',
        'first' => 'Pirmas',
        'last' => 'Paskutinis',
      ),
      'currency' => 
      array (
        'converted' => '(Konvertuota)',
        'currency' => '(Valiuta)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Data',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'El. paštas',
      'User' => 'Vartotojas',
      'Team' => 'Komanda',
      'Role' => 'Rolė',
      'EmailTemplate' => 'el. pašto laiško šablonas',
      'EmailTemplateCategory' => 'Laiškų šablonų kategorijos',
      'EmailAccount' => 'Asmeninė el. pašto paskyra',
      'EmailAccountScope' => 'Asmeninė el. pašto paskyra',
      'OutboundEmail' => 'Išsiunčiamas laiškas',
      'ScheduledJob' => 'Suplanuoti darbai',
      'ExternalAccount' => 'Išorinė paskyra',
      'Extension' => 'Plėtinys',
      'Dashboard' => 'Prietaisų skydelis',
      'InboundEmail' => 'Grupės el. pašto paskyra ',
      'Stream' => 'Srautas',
      'Import' => 'Importuoti',
      'Template' => 'Šablonas',
      'Job' => 'Darbas',
      'EmailFilter' => 'El. pašto filtras',
      'Portal' => 'Portalas',
      'PortalRole' => 'Portalo rolė',
      'Attachment' => 'Prisegtukas',
      'EmailFolder' => 'El. pašto aplankas',
      'PortalUser' => 'Portalo vartotojas',
      'ScheduledJobLogRecord' => 'Suplanuotų užduočių žunalo įrašai',
      'PasswordChangeRequest' => 'Slaptažodžio pakeitimo prašymas',
      'ActionHistoryRecord' => 'Veiksmų istorijos įrašas',
      'AuthToken' => 'Autentikavimo žymė',
      'UniqueId' => 'Unikalus ID',
      'LastViewed' => 'Paskutiniai peržiūrėti',
      'Settings' => 'Nustatymai',
      'FieldManager' => 'Laukelio tvarkyklė',
      'Integration' => 'Integracija',
      'LayoutManager' => 'Išdėstymo tvarkyklė',
      'EntityManager' => 'Vedinių tvarkyklė',
      'Export' => 'Eksportuoti',
      'DynamicLogic' => 'Dinaminė logika',
      'DashletOptions' => 'Panelio pasirinkimai',
      'Admin' => 'Admin',
      'Global' => 'Pasaulinis',
      'Preferences' => 'Nustatymai',
      'EmailAddress' => 'El. pašto adresas',
      'PhoneNumber' => 'Telefono numeris',
      'AuthLogRecord' => 'Auth žurnalo įrašas',
      'AuthFailLogRecord' => 'Atvykti failų žurnalo įrašą',
      'LeadCapture' => '"Lead Capture Entry Point"',
      'LeadCaptureLogRecord' => 'Švino surinkimo žurnalo įrašas',
      'ArrayValue' => 'Masyvo vertė',
      'Account' => 'Įmonė',
      'Contact' => 'Kontaktas',
      'Lead' => 'Potencialus klientas',
      'Target' => 'Adresatas',
      'Opportunity' => 'Galimybė',
      'Meeting' => 'Susitikimas',
      'Calendar' => 'Kalendorius',
      'Call' => 'Skambutis',
      'Task' => 'Užduotis',
      'Case' => 'Atvejis',
      'Document' => 'Dokumentas',
      'DocumentFolder' => 'Dokumento aplankas',
      'Campaign' => 'Kampanija',
      'TargetList' => 'Adresatų sarašas',
      'MassEmail' => 'Masinis el. Paštas',
      'EmailQueueItem' => 'Siųsti eilės elementą',
      'CampaignTrackingUrl' => 'Stebėjiimo URL',
      'Activities' => 'Veikla',
      'KnowledgeBaseArticle' => 'Žinių bazės straipsnis',
      'KnowledgeBaseCategory' => 'Žinių bazės kategorija',
      'CampaignLogRecord' => 'Kampanijos žurnalo įrašas',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'El. laiškai',
      'User' => 'Vartotojai',
      'Team' => 'Komandos',
      'Role' => 'Rolės',
      'EmailTemplate' => 'El. laiškų šabonai',
      'EmailTemplateCategory' => 'Laiškų šablonų kategorijos ',
      'EmailAccount' => 'Asmeninės el. pašto paskyros',
      'EmailAccountScope' => 'Asmeninės el. pašto paskyros',
      'OutboundEmail' => 'Išsiunčiami el. laiškai',
      'ScheduledJob' => 'Suplanuoti darbai',
      'ExternalAccount' => 'Išorinės paskyros',
      'Extension' => 'Plėtiniai',
      'Dashboard' => 'Prietaisų skydelis',
      'InboundEmail' => 'Grupės el. pašto paskyros',
      'Stream' => 'Srautas',
      'Import' => 'Importuoti',
      'Template' => 'Šablonai',
      'Job' => 'Užduotys',
      'EmailFilter' => 'El. pašto filtrai',
      'Portal' => 'Portalai',
      'PortalRole' => 'Partalų rolės',
      'Attachment' => 'Prisegtukai',
      'EmailFolder' => 'El. pašto aplankai',
      'PortalUser' => 'Portalo vartotojai',
      'ScheduledJobLogRecord' => 'Suplanuotų užduočių žunalo įrašai',
      'PasswordChangeRequest' => 'Slaptažodžio pakeitimo prašymai',
      'ActionHistoryRecord' => 'Veiksmų istorija',
      'AuthToken' => 'Autentikavimo priemonė',
      'UniqueId' => 'Unikalūs ID',
      'LastViewed' => 'Paskutiniai peržiūrėti',
      'AuthLogRecord' => 'Auth Prisijungti',
      'AuthFailLogRecord' => 'Atvykti failų žurnalas',
      'LeadCapture' => '"Lead Capture"',
      'LeadCaptureLogRecord' => 'Švino surinkimo žurnalas',
      'ArrayValue' => 'Masyvo reikšmės',
      'Account' => 'Įmonės',
      'Contact' => 'Kontaktai',
      'Lead' => 'Potencialūs klientai',
      'Target' => 'Adresatai',
      'Opportunity' => 'Galimybės',
      'Meeting' => 'Susitikimai',
      'Calendar' => 'Kalendorius',
      'Call' => 'Skambučiai',
      'Task' => 'Užduotys',
      'Case' => 'Atvejai',
      'Document' => 'Dokumentai',
      'DocumentFolder' => 'Dokumentų aplankai',
      'Campaign' => 'Kampanijos',
      'TargetList' => 'Adresatų sarašai',
      'MassEmail' => 'Masiniai laiškai',
      'EmailQueueItem' => 'El. Pašto eilės elementai',
      'CampaignTrackingUrl' => 'Stebejimo URL',
      'Activities' => 'Veikla',
      'KnowledgeBaseArticle' => 'Žinių bazė',
      'KnowledgeBaseCategory' => 'Žinių bazės kategorijos',
      'CampaignLogRecord' => 'Kampanijos žurnalo įrašai',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' => 
    array (
      'Misc' => 'Įvairūs',
      'Merge' => 'Sujungti',
      'None' => 'Joks',
      'Home' => 'Pradžia',
      'by' => 'Pagal',
      'Saved' => 'Išsaugota',
      'Error' => 'Klaida',
      'Select' => 'pasirinkti',
      'Not valid' => 'Negalioja',
      'Please wait...' => 'Prašome palaukti...',
      'Please wait' => 'Prašome palaukti',
      'Loading...' => 'Kraunama...',
      'Uploading...' => 'įkeliama...',
      'Sending...' => 'Siunčiama...',
      'Merging...' => 'Sujungiama...',
      'Merged' => 'Sujungta',
      'Removed' => 'Pašalimta',
      'Posted' => 'Paskelbta',
      'Linked' => 'Susieta',
      'Unlinked' => 'Atsieta',
      'Done' => 'Įvykdyta',
      'Access denied' => 'Prieiga uždrausta',
      'Not found' => 'Nerasta',
      'Access' => 'Prieiga',
      'Are you sure?' => 'Ar esate įsitikinę?',
      'Record has been removed' => 'Įrašas buvo pašalintas',
      'Wrong username/password' => 'Neteisingas prisijungimo vardas/slaptažodis',
      'Post cannot be empty' => 'Pranešimas negali būti tuščias',
      'Removing...' => 'Šalinama...',
      'Unlinking...' => 'Atsiejama...',
      'Posting...' => 'Skelbiama...',
      'Username can not be empty!' => 'Vartotojo vardas negali būti tuščias!',
      'Cache is not enabled' => 'Talpykla yra išjungta',
      'Cache has been cleared' => 'Talpykla buvo išvalyta',
      'Rebuild has been done' => 'Atstatymas buvo įvykdytas',
      'Return to Application' => 'Grįžti į aplikaciją',
      'Saving...' => 'Saugoma...',
      'Modified' => 'Pakeista',
      'Created' => 'Sukurta',
      'Create' => 'Sukurti',
      'create' => 'sukurti',
      'Overview' => 'Peržiūra',
      'Details' => 'Išsamiau',
      'Add Field' => 'Pridėti laukelį',
      'Add Dashlet' => 'Pridėti panelę',
      'Filter' => 'Filtras',
      'Edit Dashboard' => 'Redaguoti prietaisų skydelį',
      'Add' => 'Pridėti',
      'Add Item' => 'Pridėti elementą',
      'Reset' => 'Atstatyti',
      'Menu' => 'Meniu',
      'More' => 'Daugiau',
      'Search' => 'Paieška',
      'Only My' => 'Tik mano',
      'Open' => 'Atidaryti',
      'Admin' => 'Admin',
      'About' => 'Apie',
      'Refresh' => 'Atnaujinti',
      'Remove' => 'Pašalinti',
      'Options' => 'Pasirinkimai',
      'Username' => 'Vartotojo vardas',
      'Password' => 'Slaptažodis',
      'Login' => 'Prisijungti',
      'Log Out' => 'Atsijungti',
      'Preferences' => 'Nustatymai',
      'State' => 'Rajonas/regionas',
      'Street' => 'Gatvė',
      'Country' => 'Šalis',
      'City' => 'Miestas',
      'PostalCode' => 'Pašto kodas',
      'Followed' => 'Stebimas',
      'Follow' => 'Stebėti',
      'Followers' => 'Sekėjai',
      'Clear Local Cache' => 'Išvalyti talpyklą',
      'Actions' => 'Veiksmai',
      'Delete' => 'Ištrinti',
      'Update' => 'Atnaujinti',
      'Save' => 'Išsaugoti',
      'Edit' => 'Taisyti',
      'View' => 'Žiūrėti',
      'Cancel' => 'Atšaukti',
      'Apply' => 'Taikyti',
      'Unlink' => 'Atsieti',
      'Mass Update' => 'Masinis atnaujinimas',
      'Export' => 'Eksportuoti',
      'No Data' => 'Nėra duomenų',
      'No Access' => 'Nėra priėjimo',
      'All' => 'Visi',
      'Active' => 'Aktyvus',
      'Inactive' => 'Neaktyvus',
      'Write your comment here' => 'Parašykite savo komentarą čia',
      'Post' => 'Paskelbti',
      'Stream' => 'Srautas',
      'Show more' => 'Rodyti daugiau',
      'Dashlet Options' => 'Panelio pasirinkimai',
      'Full Form' => 'Pilna forma',
      'Insert' => 'Įterpti',
      'Person' => 'Asmuo',
      'First Name' => 'Vardas',
      'Last Name' => 'Pavardė',
      'Original' => 'Pradinis',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'keisti',
      'Change' => 'Pakeisti',
      'Primary' => 'Pirminis',
      'Save Filter' => 'Išsaugoti filtrą',
      'Administration' => 'Administravimas',
      'Run Import' => 'Vykdyti importavimą',
      'Duplicate' => 'Dublikatas',
      'Notifications' => 'Pranešimai',
      'Mark all read' => 'Pažymėti kaip skaitytą',
      'See more' => 'Plačiau',
      'Today' => 'Šiandien',
      'Tomorrow' => 'Rytoj',
      'Yesterday' => 'Vakar',
      'Submit' => 'Pateikti',
      'Close' => 'Uždaryti',
      'Yes' => 'Taip',
      'No' => 'Ne',
      'Select All Results' => 'Pasirinkti visus rezultatus',
      'Value' => 'Vertė',
      'Current version' => 'Dabartinė versija',
      'List View' => 'Rodyti kaip sąrašą
',
      'Tree View' => 'Rodyti kaip medį',
      'Unlink All' => 'Atsieti visus',
      'Total' => 'Iš viso',
      'Print to PDF' => 'Spausdinti į PDF',
      'Default' => 'Numatytas',
      'Number' => 'Numeris',
      'From' => 'Nuo',
      'To' => 'Kam',
      'Create Post' => 'Sukurti pranešimą',
      'Previous Entry' => 'Ankstesnis įrašas',
      'Next Entry' => 'Kitas įrašas',
      'View List' => 'Žiūrėti sąrašą',
      'Attach File' => 'Prisegti failą',
      'Skip' => 'Praleisti',
      'Attribute' => 'Savybė',
      'Function' => 'Funkcija',
      'Self-Assign' => 'Savęs priskyrimas',
      'Self-Assigned' => 'Sau priskirta',
      'Expand' => 'Išskleisti',
      'Collapse' => 'Suskleisti',
      'New notifications' => 'Nauji pranešimai',
      'Manage Categories' => 'Tvarkyti kategorijas',
      'Manage Folders' => 'Tvarkyti aplankus',
      'Convert to' => 'Eksportuoti į',
      'View Personal Data' => 'Peržiūrėkite asmeninius duomenis',
      'Personal Data' => 'Asmeniniai duomenys',
      'Erase' => 'Ištrinti',
      'Move Over' => 'Pasitrauk',
      'Create InboundEmail' => 'Sukurti gaunamą el. laišką',
      'Activities' => 'Veikla',
      'History' => 'Istorija',
      'Attendees' => 'Dalyviai',
      'Schedule Meeting' => 'Suplanuotas susitikimas',
      'Schedule Call' => 'Suplnanuotas skambutis',
      'Compose Email' => 'Rašyti laišką',
      'Log Meeting' => 'Susitikimo eiga',
      'Log Call' => 'Skambučio eiga',
      'Archive Email' => 'Suarchyvuoti laiškai',
      'Create Task' => 'Sukurti užduotį',
      'Tasks' => 'Užduotys',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Prašome palaukti...',
      'posting' => 'Skelbiama...',
      'loading' => 'Kraunama...',
      'saving' => 'Saugoma...',
      'confirmLeaveOutMessage' => 'Ar tikrai norite palikti formą?',
      'notModified' => 'Jūs nepakeitėte įrašo',
      'duplicate' => 'Jūsų sukurtas įrašas jau gali būti',
      'dropToAttach' => 'Įmeskite norėdami prisegti',
      'fieldIsRequired' => '{field} yra privalomas',
      'fieldShouldBeEmail' => '{laukas} turėtų būti tinkamas el. pašto adresas',
      'fieldShouldBeFloat' => '{laukas} turėtų būti tinkamas',
      'fieldShouldBeInt' => '{laukas} turi būti teisingas sveikasis skaičius',
      'fieldShouldBeDate' => '{laukas} turėtų būti galiojanti data',
      'fieldShouldBeDatetime' => '{field} turėtų būti teisinga data / laikas',
      'fieldShouldAfter' => '{field} turėtų būti po {otherField}',
      'fieldShouldBefore' => '{field} turėtų būti prieš {otherField}',
      'fieldShouldBeBetween' => '{field} turėtų būti tarp {min} ir {max}',
      'fieldShouldBeLess' => '{field} neturėtų būti didesnis nei {value}',
      'fieldShouldBeGreater' => '{field} neturėtų būti mažesnis nei {value}',
      'fieldBadPasswordConfirm' => '{field} nėra tinkamai patvirtintas',
      'fieldMaxFileSizeError' => 'Failas neturėtų viršyti {max} Mb',
      'fieldIsUploading' => 'Įkėlimas vykdomas',
      'resetPreferencesDone' => 'Parametrai buvo atstatyti pagal numatytuosius nustatymus',
      'confirmation' => 'Ar esate įsitikinę?',
      'unlinkAllConfirmation' => 'Ar tikrai norite atsieti visus susijusius įrašus?',
      'resetPreferencesConfirmation' => 'Ar tikrai norite atstatyti parametrus pagal numatytuosius nustatymus?',
      'removeRecordConfirmation' => 'Ar tikrai norite pašalinti įrašą?',
      'unlinkRecordConfirmation' => 'Ar tikrai norite atsieti susijusį įrašą?',
      'removeSelectedRecordsConfirmation' => 'Ar tikrai norite pašalinti pasirinktus įrašus?',
      'massUpdateResult' => '{count} įrašai yra atnaujinti',
      'massUpdateResultSingle' => '{count} įrašas yra atnaujintas',
      'noRecordsUpdated' => 'Jokių įrašų nebuvo atnaujinta',
      'massRemoveResult' => '{count} įrašai buvo pašalinti',
      'massRemoveResultSingle' => '{count} įrašas buvo pašalintas',
      'noRecordsRemoved' => 'Jokie įrašai nebuvo pašalinti',
      'clickToRefresh' => 'Spustelėkite, kad atnaujintumėte',
      'streamPostInfo' => 'Įrašykite naudotojo įrašus naudodami <strong> @pavadinimus </ strong>.

Galimas žymėjimo sintaksė:
`<code> kodas </ code>`
`` `<code> daugiataškis kodas </ code>` ``
** <strong> stipraus teksto </ strong> **
* <em> pabrėžė tekstas </ em> *
~~ <del> ištrintas tekstas </ del> ~~
> blockquote
[nuorodos tekstas] (url)',
      'writeYourCommentHere' => 'Parašykite savo komentarą čia',
      'writeMessageToUser' => 'Parašykite žinute vsartotojui {user}',
      'writeMessageToSelf' => 'Parašykite žinutę savo sraute',
      'typeAndPressEnter' => 'Įveskite ir paspauskite ENTER',
      'checkForNewNotifications' => 'Patikrinti, ar yra naujų pranešimų',
      'checkForNewNotes' => 'Patikrinkite srauto naujienas',
      'internalPost' => 'Prenšimą matys tik vidiniai vartotojai',
      'internalPostTitle' => 'Paštą mato tik vidiniai vartotojai',
      'done' => 'Padaryta',
      'confirmMassFollow' => 'Ar tikrai norite sekti pasirinktus įrašus?',
      'confirmMassUnfollow' => 'Ar tikrai norite nebesekti pasirinktų įrašų?',
      'massFollowResult' => '{count} įrašai yra sekami',
      'massUnfollowResult' => '{count} įrašai nėra sekami',
      'massFollowResultSingle' => '{count} įrašas yra sekamas',
      'massUnfollowResultSingle' => '{count} įrašas nėra sekamas',
      'massFollowZeroResult' => 'Nėra sekamų įrašų',
      'massUnfollowZeroResult' => 'Nėra nesekamų įrašų',
      'erasePersonalDataConfirmation' => 'Pažymėti laukai bus ištrinti visam laikui. Ar tu tuo tikras?',
      'massPrintPdfMaxCountError' => 'Negalima spausdinti daugiau {maxCount} įrašų.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Tik mano',
      'followed' => 'Stebimas',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Stebimas',
      'all' => 'Visi',
    ),
    'massActions' => 
    array (
      'remove' => 'Pašalinti',
      'merge' => 'Sujungti',
      'massUpdate' => 'Masinis atnaujinimas',
      'export' => 'Eksportuoti',
      'follow' => 'Stebėti',
      'unfollow' => 'Nebesekti',
      'convertCurrency' => 'Pakeisti valiutą',
      'printPdf' => 'Spausdinti PDF formatu',
    ),
    'fields' => 
    array (
      'name' => 'Vardas',
      'firstName' => 'Vardas',
      'lastName' => 'Pavardė',
      'salutationName' => 'Sveikinimas',
      'assignedUser' => 'Priskirtas darbuotojas',
      'assignedUsers' => 'Priskirti vartotojai',
      'emailAddress' => 'El. paštas',
      'emailAddressData' => 'El. pašto duomenys',
      'emailAddressIsOptedOut' => 'El. Pašto adresas yra išjungtas',
      'assignedUserName' => 'Priskirto vartotojo vardas',
      'teams' => 'Komandos',
      'createdAt' => 'Sukurta',
      'modifiedAt' => 'Koreguota',
      'createdBy' => 'Sukurta',
      'modifiedBy' => 'Koreguota',
      'description' => 'Aprašymas',
      'address' => 'Adresas',
      'phoneNumber' => 'Telefonas',
      'phoneNumberMobile' => 'Telefonas (mobilus)',
      'phoneNumberHome' => 'Telefonas (namų)',
      'phoneNumberFax' => 'Faksas',
      'phoneNumberOffice' => 'Telefonas (biuro)',
      'phoneNumberOther' => 'Telefonas (kitas)',
      'phoneNumberData' => 'Telefono numerio duomenys',
      'order' => 'Eilė',
      'parent' => 'Pagrindinis',
      'children' => 'Antrinis',
      'id' => 'ID',
      'ids' => 'ID',
      'type' => 'Įveskite',
      'names' => 'Vardai',
      'targetListIsOptedOut' => 'Atmetamas (tikslinius sąrašus)',
      'billingAddressCity' => 'Miestas',
      'billingAddressCountry' => 'Šalis',
      'billingAddressPostalCode' => 'Pašto kodas',
      'billingAddressState' => 'Rajonas/regionas',
      'billingAddressStreet' => 'Gatvė',
      'billingAddressMap' => 'Žemėlapis',
      'addressCity' => 'Miestas',
      'addressStreet' => 'Gatvė',
      'addressCountry' => 'Šalis',
      'addressState' => 'Rajonas/regionas',
      'addressPostalCode' => 'Pašto kodas',
      'addressMap' => 'Žemėlapis',
      'shippingAddressCity' => 'Miestas(Pristatymo)',
      'shippingAddressStreet' => 'Gatvė (Pristatymo)',
      'shippingAddressCountry' => 'Šalis (Pristatymo)',
      'shippingAddressState' => 'Raj./regionas (Pristatymo)',
      'shippingAddressPostalCode' => 'Pašto kodas(Pristatymo)',
      'shippingAddressMap' => 'Žemėlapis (pristatymo)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Priskirtas darbuotojas',
      'createdBy' => 'Sukurta',
      'modifiedBy' => 'Koreguota',
      'team' => 'Komanda',
      'roles' => 'Rolės',
      'teams' => 'Komandos',
      'users' => 'Vartotojai',
      'parent' => 'Pagrindinis',
      'children' => 'Antrinis',
      'contacts' => 'Kontaktai',
      'opportunities' => 'Galimybės',
      'leads' => 'Potencialūs klientai',
      'meetings' => 'Susitikimai',
      'calls' => 'Skambučiai',
      'tasks' => 'Užduotys',
      'emails' => 'El. laiška',
      'accounts' => 'Įmonės',
      'cases' => 'Atvejai',
      'documents' => 'Dokumentai',
      'account' => 'Įmonė',
      'opportunity' => 'Galimybė',
      'contact' => 'Kontaktas',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Srautas',
      'Emails' => 'Gautieji',
      'Records' => 'Įrašų sąrašas',
      'Leads' => 'Mano potencialūs klientai',
      'Opportunities' => 'Mano galimybės',
      'Tasks' => 'Mano užduotys',
      'Cases' => 'Mano atvejai',
      'Calendar' => 'Kalendorius',
      'Calls' => 'Mano skambučiai',
      'Meetings' => 'Mano susitikimai',
      'OpportunitiesByStage' => 'Galimybės pagal etapą',
      'OpportunitiesByLeadSource' => 'Galimybės pagal potencialaus kliento šaltinį',
      'SalesByMonth' => 'Pardavimai pagal mėnesį',
      'SalesPipeline' => 'Pardavimų planas',
      'Activities' => 'Mano veikla',
    ),
    'notificationMessages' => 
    array (
      'assign' => '
{entityType} {entity} buvo priskirta tau',
      'emailReceived' => 'Laiškas gautas nuo {from}',
      'entityRemoved' => '{user} pašalino {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} paskelbė {entityType} {entity}',
      'attach' => '{user} prisegė{entityType} {entity}',
      'status' => '{user} atnaujino {field} {entityType} {entity}',
      'update' => '{user} atnaujino {entityType} {entity}',
      'postTargetTeam' => '{user} parašė komandai {target}',
      'postTargetTeams' => '{user} parašė komandoms {target}',
      'postTargetPortal' => '{user} parašė portale {target}',
      'postTargetPortals' => '{user} parašė portaluose {target}',
      'postTarget' => '{user} parašė {target}',
      'postTargetYou' => '{user} parašė tau',
      'postTargetYouAndOthers' => '{user} parašė {target} ir tau',
      'postTargetAll' => '{user} parašė visiems',
      'postTargetSelf' => '{user} sau paskelbtas',
      'postTargetSelfAndOthers' => '
{user} paskelbė {target} ir sau',
      'mentionInPost' => '{user} paminėjo {mentioned} {entityType} {entity}',
      'mentionYouInPost' => '{user} paminėjo tave {entityType} {entity}',
      'mentionInPostTarget' => '{user} paminėjo {mentioned} pranešime',
      'mentionYouInPostTarget' => '{user} paminėjo tave pranšime {target}',
      'mentionYouInPostTargetAll' => '{user} paminėjo tave pranešime visiems',
      'mentionYouInPostTargetNoTarget' => '{user} paminėjo tave pranešime',
      'create' => '{user} sukurė {entityType} {entity}',
      'createThis' => '{user} sukūrė{entityType}',
      'createAssignedThis' => '{user} sukūrė{entityType} assigned to {assignee}',
      'createAssigned' => '{user} sukurė {entityType} {entity} priskyrė vartotojui {assignee}',
      'createAssignedYou' => '{user} sukūrė {entityType} {entity} priskyrė tau ',
      'createAssignedThisSelf' => '{user} sukūrė šį {entityType}, priskyrė sau',
      'createAssignedSelf' => '{user} sukūrė{entityType} {entity} priskyrė sau',
      'assign' => '{user} priskyrė {entityType} {entity} vartotojui {assignee}',
      'assignThis' => '{user} priskyrė {entityType} to {assignee}',
      'assignYou' => '{user} priskyrė {entityType} {entity} tau',
      'assignThisVoid' => '{user} nusiėmė priskyrimą  nuo šio {entityType}',
      'assignVoid' => '{user} nusiėmė priskyrimą {entityType} {entity}',
      'assignThisSelf' => '{user} prisiskyrė sau šį {entityType}',
      'assignSelf' => '{user} prisiskyrė sau {entityType} {entity}',
      'postThis' => '{user} paskelbė',
      'attachThis' => '{user} prisegė',
      'statusThis' => '{user} atnaujino {field}',
      'updateThis' => '{user} atnaujino{entityType}',
      'createRelatedThis' => '{user} sukūrė {relatedEntityType} {relatedEntity} susijusį su {entityType}',
      'createRelated' => '{user} sukūrė {relatedEntityType} {relatedEntity} susijusį su {entityType} {entity}',
      'relate' => '{user} susiejo {relatedEntityType} {relatedEntity} su {entityType} {entity}',
      'relateThis' => '{user} susiejo {relatedEntityType} {relatedEntity} su šiuo {entityType}',
      'emailReceivedFromThis' => 'El. laiškas gautas nuo {from}',
      'emailReceivedInitialFromThis' => 'El. laiškas gautas nuo {from},šis {entityType} sukurtas',
      'emailReceivedThis' => 'El. laiškas gautas',
      'emailReceivedInitialThis' => 'El .laiškas gautas, šis {entityType} sukurtas',
      'emailReceivedFrom' => 'El. laiškas gautas nuo {from}, susijęs su {entityType} {entity}',
      'emailReceivedFromInitial' => 'El. Laiškas gautas nuo {from}, {entityType} {entity} sukurta',
      'emailReceived' => 'Gautas el. laiškas, susijęs su {entityType} {entity}',
      'emailReceivedInitial' => 'El. laiškas gautas: {entityType} {entity} sukurta',
      'emailReceivedInitialFrom' => 'El. Laiškas gautas nuo {from}, {entityType} {entity} sukurta',
      'emailSent' => '{by} išsiųstas el. laiškas, susijęs su {entityType} {entity}',
      'emailSentThis' => '{by} išsiųstas el.laiškas',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} paskelbė {target} ir sau',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} paskelbė {target} ir sau',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Sausis',
        1 => 'Vasaris',
        2 => 'Kovas',
        3 => 'Balandis',
        4 => 'Gegužė',
        5 => 'Birželis',
        6 => 'Liepa',
        7 => 'Rugpjūtis',
        8 => 'Rugsėjis',
        9 => 'Spalis',
        10 => 'Lapkritis',
        11 => 'Gruodis',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Sau',
        1 => 'Vas',
        2 => 'Kov',
        3 => 'Bal',
        4 => 'Geg',
        5 => 'Bir',
        6 => 'Lie',
        7 => 'Rugp',
        8 => 'Rugs',
        9 => 'Spa',
        10 => 'Lap',
        11 => 'Gru',
      ),
      'dayNames' => 
      array (
        0 => 'Sekmadienis',
        1 => 'Pirmadienis',
        2 => 'Antradienis',
        3 => 'Trečiadienis',
        4 => 'Ketvirtadienis',
        5 => 'Penktadienis',
        6 => 'Šeštadienis',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Sek',
        1 => 'Pir',
        2 => 'Ant',
        3 => 'Tre',
        4 => 'Ket',
        5 => 'Pen',
        6 => 'Šeš',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Se',
        1 => 'Pi',
        2 => 'An',
        3 => 'Tr',
        4 => 'Ke',
        5 => 'Pe',
        6 => 'Še',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => 'd',
      'h' => 'H',
      'm' => 'min',
      's' => 's',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Ponas',
        'Mrs.' => 'Ponia',
        'Ms.' => 'Panelė',
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
        'es_MX' => 'Spanish (Mexico) ',
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
        'lt_LT' => 'Lietuvių',
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
        'on' => 'Yra',
        'notOn' => 'Nėra',
        'after' => 'Po',
        'before' => 'Prieš',
        'between' => 'Tarp',
        'today' => 'Šiandien',
        'past' => 'Praeitis',
        'future' => 'Ateitis',
        'currentMonth' => 'Esamas Mėnuo',
        'lastMonth' => 'Praeitas mėnuo',
        'nextMonth' => 'Kitas mėnuo',
        'currentQuarter' => 'Esamas ketvirtis',
        'lastQuarter' => 'Praeitas ketvirtis ',
        'currentYear' => 'Šie metai',
        'lastYear' => 'Praeiti metai',
        'lastSevenDays' => 'Paskutinės 7 dienos',
        'lastXDays' => 'Paskutinės X dienos/ų',
        'nextXDays' => 'Kitos X dienos/ų',
        'ever' => 'Kada nors',
        'isEmpty' => 'Yra tuščia',
        'olderThanXDays' => 'Senesni nei X dienos/ų',
        'afterXDays' => 'Po X dienų',
      ),
      'searchRanges' => 
      array (
        'is' => 'Yra',
        'isEmpty' => 'Yra tuščia',
        'isNotEmpty' => 'Netuščia',
        'isOneOf' => 'Bet kuris',
        'isFromTeams' => 'Yra nuo komandos',
        'isNot' => 'Ne',
        'isNotOneOf' => 'Nei vienas',
        'anyOf' => 'Bet kuris',
        'noneOf' => 'Nei vienas',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Lygu',
        'like' => 'Yra tarsi (%)',
        'notLike' => 'Nėra panašus (%)',
        'startsWith' => 'Prasideda',
        'endsWith' => 'Baigiasi',
        'contains' => 'Yra',
        'notContains' => 'Neturi',
        'isEmpty' => 'Yra tuščia',
        'isNotEmpty' => 'Yra netuščia',
        'notEquals' => 'Nelygu',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Lygu',
        'notEquals' => 'Nelygu',
        'greaterThan' => 'Daugiau nei',
        'lessThan' => 'Mažiau nei',
        'greaterThanOrEquals' => 'Daugiau nei arba lygu',
        'lessThanOrEquals' => 'Mažiau nei arba lygu',
        'between' => 'Tarp',
        'isEmpty' => 'Yra tuščia',
        'isNotEmpty' => 'Yra netuščia',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Joks',
        '0.5' => '30 sekundžių',
        1 => '1 minutė',
        2 => '2 minutės',
        5 => '5 minutės',
        10 => '10 minučių',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobilus',
        'Office' => 'Biuro',
        'Fax' => 'Faksas',
        'Home' => 'Namų',
        'Other' => 'Kitas',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Iššokantis langas',
        'Email' => 'El. paštas',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Jūs galite rasti vertimus čia: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Paryškintas',
          'italic' => 'Pasvirasis',
          'underline' => 'Pabrauktas',
          'strike' => 'Strike',
          'clear' => 'Pašalinti šrifto stilių',
          'height' => 'Eilutės aukštis',
          'name' => 'Šriftas',
          'size' => 'Šrifto dydis',
        ),
        'image' => 
        array (
          'image' => 'Paveiksliukas',
          'insert' => 'Iterpti paveiksliuką',
          'resizeFull' => 'Pakeisti į pilną dydį',
          'resizeHalf' => 'Pakeisti į pusę dydžio',
          'resizeQuarter' => 'Pakeisti į ketvirtį dydžio',
          'floatLeft' => 'Padėtis kairėje',
          'floatRight' => 'Padėtis dešinėje',
          'floatNone' => 'Nenustatyta padėtis',
          'dragImageHere' => 'Vilkti paveiksliuką čia',
          'selectFromFiles' => 'Pasirinkti iš turimų failų',
          'url' => 'Paveiksliuko URL',
          'remove' => 'Pašalinti paveiksliuką',
        ),
        'link' => 
        array (
          'link' => 'Nuoroda',
          'insert' => 'įterpti nuorodą',
          'unlink' => 'Atsieti',
          'edit' => 'Taisyti',
          'textToDisplay' => 'Rodyti tekstą',
          'url' => 'Į kurį URL ši nuoroda turėtų nukreipti?',
          'openInNewWindow' => 'Atidaryti naujame lange',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video nuoroda',
          'insert' => 'Iterpti video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Lentelė',
        ),
        'hr' => 
        array (
          'insert' => 'įterpti horizontalų brūkšnį',
        ),
        'style' => 
        array (
          'style' => 'Stilius',
          'normal' => 'Normalus',
          'blockquote' => 'Citata',
          'pre' => 'kodas',
          'h1' => 'Antraštė 1',
          'h2' => 'Antraštė 2',
          'h3' => 'Antraštė 3',
          'h4' => 'Antraštė 4',
          'h5' => 'Antraštė 5',
          'h6' => 'Antraštė 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Nesurikiuotas sąrašas',
          'ordered' => 'Surikiuotas sąrašas',
        ),
        'options' => 
        array (
          'help' => 'Pagalba',
          'fullscreen' => 'Pilnas ekranas',
          'codeview' => 'Žiūrėti kodą',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Teksto padėtis',
          'outdent' => 'Atitraukta nuo krašto',
          'indent' => 'Prie pat krašto',
          'left' => 'Lygiuoti kairėje',
          'center' => 'Lygiuoti viduryje',
          'right' => 'Lygiuoti dešinėje',
          'justify' => 'lygiuoti į abi puses',
        ),
        'color' => 
        array (
          'recent' => 'Naujausia spalva',
          'more' => 'Daugiau spalvų',
          'background' => 'Buvusi spalva',
          'foreground' => 'Srifto spalva',
          'transparent' => 'Permatoma',
          'setTransparent' => 'Nustatyti permatomą',
          'reset' => 'Atstatyti',
          'resetToDefault' => 'Atstatyti numatytają',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Klaviatūros nuorodos',
          'close' => 'Uždaryti',
          'textFormatting' => 'Teksto formatavimas',
          'action' => 'Veiksmas',
          'paragraphFormatting' => 'Teksto padėties formatavimas',
          'documentStyle' => 'Dokumento stilius',
        ),
        'history' => 
        array (
          'undo' => 'Anuliuoti',
          'redo' => 'Grąžinti',
        ),
      ),
    ),
    'listViewModes' => 
    array (
      'list' => 'Sąrašas',
      'kanban' => 'Kanban',
    ),
    'themes' => 
    array (
      'Espo' => 'Klasikinis espo',
      'EspoRtl' => 'Iš dešinės į kairę Espo',
      'Sakura' => 'Klasikinė Sakura',
      'EspoVertical' => 'Vertikali Espo',
      'SakuraVertical' => 'Vertikali Sakura',
      'Violet' => 'Klasikinis violetinis',
      'VioletVertical' => 'Vertikali violetinė',
      'Hazyblue' => 'Klasikinis "Hazyblue"',
      'HazyblueVertical' => 'Vertikalios bangos',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Atšaukti importavimą',
      'Return to Import' => 'Grįžti į importavimą',
      'Run Import' => 'Vykdyti importavimą',
      'Back' => 'Atgal',
      'Field Mapping' => 'Laukelių išdėstymas',
      'Default Values' => 'Numatytosios vertės',
      'Add Field' => 'Pridėti laukelį',
      'Created' => 'Sukurta',
      'Updated' => 'Atnaujinta',
      'Result' => 'Rezultatas',
      'Show records' => 'Rodyti įrašus',
      'Remove Duplicates' => 'Pašalinti dublikatus',
      'importedCount' => 'Importuota (count)',
      'duplicateCount' => 'Dublikatų (count)',
      'updatedCount' => 'Atnaujinta (count)',
      'Create Only' => 'Tik sukurti',
      'Create and Update' => 'Sukurti ir atnaujinti',
      'Update Only' => 'Tik atnaujinti',
      'Update by' => 'Atnaujinta',
      'Set as Not Duplicate' => 'Pažymėti kaip ne dublikatą',
      'File (CSV)' => 'Failas (CSV)',
      'First Row Value' => 'Pirmos eilutės vertė',
      'Skip' => 'Praleisti',
      'Header Row Value' => 'Antraštinės eilutės vertė',
      'Field' => 'Laukelis',
      'What to Import?' => 'Ką importuoti?',
      'Entity Type' => 'Vedinio tipas',
      'What to do?' => 'Ką daryti?',
      'Properties' => 'Savybės',
      'Header Row' => 'Antraštinė eilutė',
      'Person Name Format' => 'Asmens vardo formatas',
      'John Smith' => 'Vardenis Pavardenis',
      'Smith John' => 'Pavardenis Vardenis',
      'Smith, John' => 'Pavardenis, Vardenis',
      'Field Delimiter' => 'Laukelių atskyrimas',
      'Date Format' => 'Datos formatas',
      'Decimal Mark' => 'Dešimtainis ženklas',
      'Text Qualifier' => 'Teksto kvalifikacija',
      'Time Format' => 'Laiko formatas',
      'Currency' => 'Valiuta',
      'Preview' => 'Peržiūra',
      'Next' => 'Kitas',
      'Step 1' => 'Pirmas žingsnis',
      'Step 2' => 'Antras žingsnis',
      'Double Quote' => 'Dviguba citata',
      'Single Quote' => 'Vienintelė citata',
      'Imported' => 'Importuota',
      'Duplicates' => 'Dublikatai',
      'Skip searching for duplicates' => 'Praleisti dublikatų paiešką',
      'Timezone' => 'Laiko zona',
      'Remove Import Log' => 'Pašalinti importo žurnalą',
      'New Import' => 'Naujas importas',
      'Import Results' => 'Importuoti rezultatus',
    ),
    'messages' => 
    array (
      'utf8' => 'Turėtų būti užkoduotas UTF-8',
      'duplicatesRemoved' => 'Dublikatai pašalinti',
      'inIdle' => 'Vykdyti tuščiąja eiga (dideliems duomenims; per cron)',
      'revert' => 'Tai pašalins visus importuotus įrašus visam laikui.',
      'removeDuplicates' => 'Tai visam laikui pašalins visus importuotus įrašus, kurie buvo pripažinti kaip pasikartojantys.',
      'confirmRevert' => 'Tai pašalins visus importuotus įrašus visam laikui. Ar tu tuo tikras?',
      'confirmRemoveDuplicates' => 'Tai visam laikui pašalins visus importuotus įrašus, kurie buvo pripažinti kaip pasikartojantys. Ar tu tuo tikras?',
      'confirmRemoveImportLog' => 'Tai pašalins importo žurnalą. Visi importuoti įrašai bus saugomi. Jūs negalėsite sugrąžinti importo rezultatų. Ar tu esi įsitikinęs?',
      'removeImportLog' => 'Tai pašalins importo žurnalą. Visi importuoti įrašai bus saugomi. Naudok jį, jei esate tikri, kad importas yra gerai.',
    ),
    'fields' => 
    array (
      'file' => 'Failas',
      'entityType' => 'Vedinio tipas',
      'imported' => 'Importuoti įrašai',
      'duplicates' => 'Dublikuoti įrašai',
      'updated' => 'Atnaujinti įrašai',
      'status' => 'Statusas',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Nepavyko',
        'In Process' => 'Vyksta',
        'Complete' => 'Įvykdyta',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'emailAddress' => 'El. pašto adresas',
      'team' => 'Adresatų komanda',
      'status' => 'Statusas',
      'assignToUser' => 'Priskirti darbuotojui',
      'host' => 'Hostas',
      'username' => 'Vartotojo vardas',
      'password' => 'Slaptažodis',
      'port' => 'Prievadas',
      'monitoredFolders' => 'Stebimi aplankai',
      'trashFolder' => 'Šiukliadėžės aplankas',
      'ssl' => 'SSL',
      'createCase' => 'Sukurti atvejį',
      'reply' => 'Auto-atsakymas',
      'caseDistribution' => 'Case Distribution',
      'replyEmailTemplate' => 'Atsakymo el. pašto šablonas',
      'replyFromAddress' => 'Atsakyti nuo adreso',
      'replyToAddress' => 'Atsakyti adresatui',
      'replyFromName' => 'Atsakyti nuo vardo',
      'targetUserPosition' => 'Adresato pozicija',
      'fetchSince' => 'Išeiti iš',
      'addAllTeamUsers' => 'Visiems komandos nariams',
      'teams' => 'Komandos',
      'sentFolder' => 'Išsiųstų laiškų aplankas',
      'storeSentEmails' => 'Išsaugoti išsiųstus el. laiškus',
      'useImap' => 'Paimkite el. Laiškus',
      'useSmtp' => 'Naudoti SMTP',
      'smtpHost' => 'SMTP priegloba',
      'smtpPort' => 'SMTP prievadas',
      'smtpAuth' => 'SMTP autentikavimas',
      'smtpSecurity' => 'SMTP sauga',
      'smtpUsername' => 'SMTP vartotojo vardas',
      'smtpPassword' => 'SMTP slaptažodis',
      'fromName' => 'Nuo vardo',
      'smtpIsShared' => 'SMTP yra bendrai naudojamas',
      'smtpIsForMassEmail' => 'SMTP yra masinio el. pašto adresas',
    ),
    'tooltips' => 
    array (
      'reply' => 'Pranešti siuntėjams, kad jų el. Laiškai buvo gauti.

  Tam tikram gavėjui per tam tikrą laikotarpį bus išsiųstas tik vienas el. laiškas, kad būtų išvengta kartojimų.',
      'createCase' => 'Automatiškai sukurkite atvejį iš gaunamų el. laiškų.',
      'replyToAddress' => 'Patikslinkite pašto dėžutės el. pašto adresą, kad  jam galima būtų priskirti gaunamus laiškus',
      'caseDistribution' => 'Kaip bus priskirtas aptarnavimas. Priskirtas tiesiogiai vartotojui arba tarp komandos narių.',
      'assignToUser' => 'Vartotojo darbai bus priskirti.',
      'team' => 'Komandos darbai bus priskirti.',
      'teams' => 'Komandos el. laiškai bus priskirti.',
      'targetUserPosition' => 'Vartotojai su nurodyta pozicija bus platinami su atvejais.',
      'addAllTeamUsers' => 'El. Laiškai bus rodomi visų žinomų komandų naudotojų gautuosiuose.',
      'monitoredFolders' => 'Keli aplankai turėtų būti atskirti kableliais.',
      'smtpIsShared' => 'Jei pažymėsite, vartotojai galės siųsti el. laiškus naudodami šį SMTP. Prieinamumą kontroliuoja Rolės, per leidimą grupės el. Pašto paskyrai.',
      'smtpIsForMassEmail' => 'Jei pažymėta, SMTP bus prieinamas masiniams el.laiškams.',
      'storeSentEmails' => 'Išsiųsti el. laiškai bus saugomi IMAP serveryje.',
    ),
    'links' => 
    array (
      'filters' => 'Filtrai',
      'emails' => 'El. laiška',
      'assignToUser' => 'Priskirti vartotoją',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktyvus',
        'Inactive' => 'Neaktyvus',
      ),
      'caseDistribution' => 
      array (
        '' => 'Joks',
        'Direct-Assignment' => 'Tiesioginis priskyrimas',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'mažiausiai-užimta',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Sukurti el. Pašto paskyrą',
      'IMAP' => 'IMAP',
      'Actions' => 'Veiksmai',
      'Main' => 'Pagrindinis',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nepavyko prisijungti prie IMAP serverio',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Įjungta',
      'clientId' => 'Kliento ID',
      'clientSecret' => 'Kliento užuomina',
      'redirectUri' => 'Nukreipti URL',
      'apiKey' => 'API raktas',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google žemėlapiai',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Pasirinkite integraciją iš meniu.',
      'noIntegrations' => 'Nėra galimų integracijų',
    ),
    'help' => 
    array (
      'Google' => '<p> <b> Gaukite įgaliojimus OAuth 2.0 iš "Google Developers Console". </ b> </ p> <p> Apsilankykite <a href="https://console.developers.google.com/project"> "Google Developers" Konsolė </ a>, norint gauti "OAuth 2.0" kredencialus, pvz., "Client ID" ir "Client Secret", kurie yra žinomi tiek "Google", tiek "EspoCRM" programai. </ P>',
      'GoogleMaps' => '<p> Gaukite API raktą <a href="https://developers.google.com/maps/documentation/javascript/get-api-key"> čia </a>. </ p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Statusas',
      'executeTime' => 'Vykdyti',
      'attempts' => 'Liko bandymų',
      'failedAttempts' => 'Nepavykę bandymai',
      'serviceName' => 'Paslauga',
      'method' => 'Metodas (nebetinkamas)',
      'methodName' => 'Metodas',
      'scheduledJob' => 'Suplanuoti darbai',
      'scheduledJobJob' => 'Numatytas darbo pavadinimas',
      'data' => 'Duomenys',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Vykdoma',
        'Success' => 'Pavyko',
        'Running' => 'Vykdoma',
        'Failed' => 'Nepavyko',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Ilgis (%)',
      'link' => 'Nuoroda',
      'notSortable' => 'Nerūšiuojama',
      'align' => 'Lygiuoti',
      'panelName' => 'Panelės pavadinimas',
      'style' => 'Stilius',
      'sticked' => 'Prikabinta',
      'isLarge' => 'Didelis šrifto dydis',
      'dynamicLogicVisible' => 'Sąlygos, dėl kurių skydas matomas',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Kairėje',
        'right' => 'Dešinėje',
      ),
      'style' => 
      array (
        'default' => 'Numatytas',
        'success' => 'Sėminga',
        'danger' => 'Pavojus',
        'info' => 'Informacija',
        'warning' => 'Įspėjimas',
        'primary' => 'Pirminis',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Nauja panelė',
      'Layout' => 'Išdėtymas',
    ),
  ),
  'LeadCapture' => 
  array (
    'fields' => 
    array (
      'name' => 'vardas',
      'campaign' => 'Kampanija',
      'isActive' => 'Yra aktyvus',
      'subscribeToTargetList' => 'Prenumeruoti tikslinius sąrašus',
      'subscribeContactToTargetList' => 'Prenumeruoti, jei yra',
      'targetList' => 'Tikslinis sąrašas',
      'fieldList' => 'Išlaidų laukai',
      'optInConfirmation' => 'Dvigubas opt-in',
      'optInConfirmationEmailTemplate' => 'Atsisakyti patvirtinimo el. Laiško šablono',
      'optInConfirmationLifetime' => 'Parinkimo patvirtinimo galiojimo laikas (valandos)',
      'optInConfirmationSuccessMessage' => 'Tekstas rodomas po patvirtinimo patvirtinimo',
      'leadSource' => 'Švino šaltinis',
      'apiKey' => 'API raktas',
      'targetTeam' => 'Tikslinė komanda',
      'exampleRequestMethod' => 'Metodas',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Naudingoji apkrova',
    ),
    'links' => 
    array (
      'targetList' => 'Tikslinis sąrašas',
      'campaign' => 'Kampanija',
      'optInConfirmationEmailTemplate' => 'Atsisakyti patvirtinimo el. Laiško šablono',
      'targetTeam' => 'Tikslinė komanda',
      'logRecords' => 'Prisijungti',
    ),
    'labels' => 
    array (
      'Create LeadCapture' => 'Sukurkite atvykimo tašką',
      'Generate New API Key' => 'Sukurti naują API raktą',
      'Request' => 'Prašymas',
      'Confirm Opt-In' => 'Patvirtinkite pasirinkimą',
    ),
    'messages' => 
    array (
      'generateApiKey' => 'Sukurkite naują API raktą',
      'optInConfirmationExpired' => 'Prisijungimo patvirtinimo nuoroda baigėsi.',
      'optInIsConfirmed' => 'Atsisakymas patvirtintas.',
    ),
    'tooltips' => 
    array (
      'optInConfirmationSuccessMessage' => 'Žymėjimas yra palaikomas.',
    ),
  ),
  'LeadCaptureLogRecord' => 
  array (
    'fields' => 
    array (
      'number' => 'Numeris',
      'data' => 'Duomenys',
      'target' => 'Tikslinė',
      'leadCapture' => '"Lead Capture"',
      'createdAt' => 'Įeina į',
      'isCreated' => 'Sukurtas švinas',
    ),
    'links' => 
    array (
      'leadCapture' => '"Lead Capture"',
      'target' => 'Tikslinė',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Paskelbti',
      'attachments' => 'Prisegtukai',
      'targetType' => 'Adresatas',
      'teams' => 'Komandos',
      'users' => 'Vartotojai',
      'portals' => 'Portalai',
      'type' => 'Tipas',
      'isGlobal' => 'Yra pasaulis',
      'isInternal' => 'Yra vidinis (vidiniams vartotojams)',
      'related' => 'Susijęs',
      'createdByGender' => 'Sukurta pagal lytį',
      'data' => 'Duomenys',
      'number' => 'Numeris',
    ),
    'filters' => 
    array (
      'all' => 'Visi',
      'posts' => 'Pranešimai',
      'updates' => 'Atnaujinimai',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'sau',
        'users' => 'konkrečiam vartotojui (ams)',
        'teams' => 'konkrečiai komandai (oms)',
        'all' => 'visiems vidiniams vartotojams',
        'portals' => 'konkretiems vartotojams',
      ),
      'type' => 
      array (
        'Post' => 'Paštas',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Žinutę rašykite čia',
    ),
    'links' => 
    array (
      'superParent' => 'Super tėvų',
      'related' => 'Susijęs',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'logo' => 'Logotipas',
      'url' => 'URL',
      'portalRoles' => 'Rolės',
      'isActive' => 'Aktyvus',
      'isDefault' => 'Numatytasis',
      'tabList' => 'Tabų sąrašas',
      'quickCreateList' => 'Greitai sukurti sąrašą',
      'companyLogo' => 'Logotipas',
      'theme' => 'Tema',
      'language' => 'Kalba',
      'dashboardLayout' => 'Prietaisų skydelio išdėstymas',
      'dateFormat' => 'Datos formatas',
      'timeFormat' => 'Laiko formatas',
      'timeZone' => 'Laiko zona',
      'weekStart' => 'Pirma savaitės diena',
      'defaultCurrency' => 'Pagrindinė valiuta',
      'customUrl' => 'Pritaikytas URL',
      'customId' => 'Pritaikytas ID',
    ),
    'links' => 
    array (
      'users' => 'Vartotojai',
      'portalRoles' => 'Rolės',
      'notes' => 'Pastabos',
      'articles' => 'Žinių bazės straipsniai',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Nurodyti portalo vaidmenys bus taikomi visiems šio portalo naudotojams.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Sukurti portalą',
      'User Interface' => 'Vartotojo sąsaja',
      'General' => 'Pagrindinis',
      'Settings' => 'Nustatymai',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Eksportuoti leidimą',
    ),
    'links' => 
    array (
      'users' => 'Vartotojai',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Nustato, ar portalo naudotojai gali eksportuoti įrašus.',
    ),
    'labels' => 
    array (
      'Access' => 'Prieiga',
      'Create PortalRole' => 'Sukurti portalo rolę',
      'Scope Level' => 'Taikymo lygis',
      'Field Level' => 'Laukelio lygis',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Sukurti portalo vartotoją',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datos formatas',
      'timeFormat' => 'Laiko formatas',
      'timeZone' => 'Laiko zona',
      'weekStart' => 'Pirma savaitės diena',
      'thousandSeparator' => 'Tūkstančių atskyriklis',
      'decimalMark' => 'Dešimtainis ženklas',
      'defaultCurrency' => 'Pagrindinė valiuta',
      'currencyList' => 'Valiutų sąrašas',
      'language' => 'Kalba',
      'smtpServer' => 'Serveris',
      'smtpPort' => 'Prievadas',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sauga',
      'smtpUsername' => 'Vartotojo vardas',
      'emailAddress' => 'El. paštas',
      'smtpPassword' => 'Slaptažodis',
      'smtpEmailAddress' => 'El. pašto adresas',
      'exportDelimiter' => 'Eksporto delimiteris',
      'receiveAssignmentEmailNotifications' => 'El. Laiškų siuntimas perduodant',
      'receiveMentionEmailNotifications' => 'El. Pašto pranešimai apie paminimus pranešimuose',
      'receiveStreamEmailNotifications' => 'Pranešimai el. paštu apie įrašus ir būsenos pasikeitimus',
      'autoFollowEntityTypeList' => 'Globalus auto-sekimas',
      'signature' => 'El. pašto parašas',
      'dashboardTabList' => 'Tabų sąrašas',
      'defaultReminders' => 'Numatyti priminimai',
      'theme' => 'Tema',
      'useCustomTabList' => 'Pritaikytas lentelių sąrašas',
      'tabList' => 'Tabų sąrašas',
      'emailReplyToAllByDefault' => 'Atsakyti visiems pagal numatytus nustatymus',
      'dashboardLayout' => 'Prietaisų skydelio išdėstymas',
      'emailReplyForceHtml' => 'Siųsti atsakymą HTML formatu',
      'doNotFillAssignedUserIfNotRequired' => 'Neužpildykite priskirto vartotojo įrašų kūrimo metu',
      'followEntityOnStreamPost' => 'Automatiškai sekti  įrašus, paskelbus "Sraute"',
      'followCreatedEntities' => 'Automatiškai sekti sukurtus įrašus',
      'followCreatedEntityTypeList' => 'Automatiškai sekti specialių vedinių tipų sukurtus įrašus',
      'emailUseExternalClient' => 'Naudokite išorinį el. Pašto klientą',
      'scopeColorsDisabled' => 'Išjunkite spalvų apimtį',
      'tabColorsDisabled' => 'Išjungti kortelių spalvas',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sekmadienis',
        1 => 'Pirmadienis',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Pranešimai',
      'User Interface' => 'Vartotojo sąsaja',
      'SMTP' => 'SMTP',
      'Misc' => 'Įvairūs',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Iš naujo nustatyti informacijos suvestinę pagal nutylėjimą',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatiškai sekti visus naujus sukurtus įrašus (sukurtus bet kurio vartotojo) pasirinktų vedinių tipų, kad galėtumėte matyti sraute esančią informaciją ir gauti pranešimus apie visus sistemos įrašus.',
      'doNotFillAssignedUserIfNotRequired' => 'Kurdamas įrašą priskirtas vartotojas nebus užpildytas, nebent laukelis yra privalomas.',
      'followCreatedEntities' => 'Kuriant naujus įrašus jie bus automatiškai stebimi, net jei jie bus priskirti kitam vartotojui.',
      'followCreatedEntityTypeList' => 'Kai kuriate naujus pasirinktų subjektų tipų įrašus, jie bus automatiškai stebimi, net jei jie bus priskirti kitam vartotojui.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'roles' => 'Rolės',
      'assignmentPermission' => 'Priskyrimo leidimas',
      'userPermission' => 'Vartotojo leidimas',
      'portalPermission' => 'Portalo leidimas',
      'groupEmailAccountPermission' => 'Grupės el. pašto paskyros leidimas',
      'exportPermission' => 'Eksportuoti leidimą',
      'dataPrivacyPermission' => 'Duomenų privatumo leidimas',
    ),
    'links' => 
    array (
      'users' => 'Vartotojai',
      'teams' => 'Komandos',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Leidžia apriboti galimybę priskirti įrašus ir siųsti pranešimus kitiems vartotojams.

visi - jokių apribojimų

komanda - gali priskirti  tik komandos narius ir skelbti tik komandos nariams

ne - gali priskirti save ir skelbti tik sau',
      'userPermission' => 'Leidžia apriboti vartotojų galimybę peržiūrėti kitų vartotojų veiklą, kalendorių ir srautą.

visi - gali peržiūrėti visus

komanda - gali matyti tik komandos narių veiklą

Ne - negali peržiūrėti',
      'portalPermission' => 'Nurodo prieigą prie portalo informacijos, galimybė skelbti pranešimus portalo vartotojams.',
      'groupEmailAccountPermission' => 'Nurodo prieigą prie grupės el. pašto abonementų, galimybę siųsti el. laiškus iš grupės SMTP.',
      'exportPermission' => 'Nurodo, ar vartotojai gali eksportuoti įrašus.',
      'dataPrivacyPermission' => 'Leidžia peržiūrėti ir ištrinti asmens duomenis.',
    ),
    'labels' => 
    array (
      'Access' => 'Prieiga',
      'Create Role' => 'Sukurti rolę',
      'Scope Level' => 'Taikymo lygis',
      'Field Level' => 'Laukelių lygis',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'Nenustatyta',
        'enabled' => 'įjungta',
        'disabled' => 'išjumgta',
      ),
      'levelList' => 
      array (
        'all' => 'visi',
        'team' => 'komanda',
        'account' => 'paskyra',
        'contact' => 'kontaktai',
        'own' => 'mano',
        'no' => 'ne',
        'yes' => 'taip',
        'not-set' => 'Nenustatyta',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Skaityti',
      'edit' => 'Taisyti',
      'delete' => 'Ištrinti',
      'stream' => 'Srautas',
      'create' => 'Sukurti',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Visi prieigos kontrolės pakeitimai bus taikomi, kai išvaloma talpyklos atmintinė.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'status' => 'Statusas',
      'job' => 'Darbas',
      'scheduling' => 'Planavimas',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Sukurkite numatytą darbą',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Išvalytis',
        'CheckInboundEmails' => 'Patikrinkite grupės el. pašto paskyras',
        'CheckEmailAccounts' => 'Patikrinkite asmenines el. pašto paskyras',
        'SendEmailReminders' => 'Siųsti priminimus el. paštu',
        'AuthTokenControl' => 'Autentikavimo žymės kontrolė',
        'SendEmailNotifications' => 'Siųsti pranešimus el. paštu',
        'CheckNewVersion' => 'Patikrinkite, ar nėra naujos versijos',
        'ProcessMassEmail' => 'Siųsti masinius el. laiškus',
        'ControlKnowledgeBaseArticleStatus' => 'Kontroliuoti žinių bazės straipsnio statusą',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Pastaba: įtraukite šią eilutę į crontab failą, kad paleistumėte "Espo Suplanuoti darbai":',
        'mac' => 'Pastaba: įtraukite šią eilutę į crontab failą, kad paleistumėte "Espo Suplanuoti darbai":',
        'windows' => 'Pastaba: sukurkite paketinį failą šiomis komandomis, kad paleistumėte "Espo" darbus pagal grafiką, naudojant "Windows" numatytus uždavinius:',
        'default' => 'Pastaba: pridėkite šią komandą į Cron Job (suplanuotą užduotį):',
      ),
      'status' => 
      array (
        'Active' => 'Aktyvus',
        'Inactive' => 'Neaktyvus',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Cron užduočių žymėjimas. Nurodo darbo eigos dažnumą.

* / 5 * * * * - kas 5 minutes

0 * / 2 * * * - kas 2 valandas

30 1 * * * -  tokiu laiku 01:30 kartą per dieną

0 0 1 * * - pirmąją mėnesio dieną',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Statusas',
      'executionTime' => 'Vykdymo laikas',
      'target' => 'Adresatas',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Naudoti talpyklą',
      'dateFormat' => 'Datos formatas',
      'timeFormat' => 'Laiko formatas',
      'timeZone' => 'Laiko zona',
      'weekStart' => 'Pirma savaitės diena',
      'thousandSeparator' => 'Tūkstančių atskyriklis',
      'decimalMark' => 'Dešimtainis ženklas',
      'defaultCurrency' => 'Numatytoji valiuta',
      'baseCurrency' => 'Pagrindinė valiuta',
      'currencyRates' => 'Valiutų kursas',
      'currencyList' => 'Valiutų sąrašas',
      'language' => 'Kalba',
      'companyLogo' => 'įmonės logotipas',
      'smtpServer' => 'Serveris',
      'smtpPort' => 'Prievadas',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sauga',
      'smtpUsername' => 'Vartotojo vardas',
      'emailAddress' => 'El. paštas',
      'smtpPassword' => 'Slaptažodis',
      'outboundEmailFromName' => 'Nuo vardo',
      'outboundEmailFromAddress' => 'Nuo adreso',
      'outboundEmailIsShared' => 'Yra pasidalinta',
      'recordsPerPage' => 'Įrašai puslapyje',
      'recordsPerPageSmall' => 'Įrašai puslapyje (mažas)',
      'tabList' => 'Tabų sąrašas',
      'quickCreateList' => 'Greitai sukurti sąrašą',
      'exportDelimiter' => 'Eksporto delimiteris',
      'globalSearchEntityList' => 'Globalus paieškos subjektų sąrašas',
      'authenticationMethod' => 'Autentifikavimo metodas',
      'ldapHost' => 'Hostas',
      'ldapPort' => 'Prievadas',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Pilnas vartotojo DN',
      'ldapPassword' => 'Slaptažodis',
      'ldapBindRequiresDn' => 'Bind Requires DN',
      'ldapBaseDn' => 'Bazė DN',
      'ldapAccountCanonicalForm' => 'Paskyros kanoninė forma',
      'ldapAccountDomainName' => 'Paskytos domeno vardas',
      'ldapTryUsernameSplit' => 'Pabandykite atskirti vartotojo vardą',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Sukurti vartotoją programoje EspoCRM',
      'ldapSecurity' => 'Sauga',
      'ldapUserLoginFilter' => 'Vartotojo prisijungimo filtras',
      'ldapAccountDomainNameShort' => 'Trumpas paskyros domeno vardas',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Vartotojo prisijungimo vardo savybė',
      'ldapUserObjectClass' => 'Vartotojo objekto klasė',
      'ldapUserTitleAttribute' => 'Vartotojo kreipinio savybė',
      'ldapUserFirstNameAttribute' => 'Vartotojo vardo savybė',
      'ldapUserLastNameAttribute' => 'Vartotojo pavardės savybė',
      'ldapUserEmailAddressAttribute' => 'Vartotojo el. pašto adreso savybė',
      'ldapUserTeams' => 'Vartotojo komandos',
      'ldapUserDefaultTeam' => 'Vartotojo numatytoji komanda',
      'ldapUserPhoneNumberAttribute' => 'Vartotojo telefono nr. savybė',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Išjungti eksportavimą (leidžiama tik admionistratoriui)',
      'assignmentNotificationsEntityList' => 'Vedinys pranešti apie priskyrimą',
      'assignmentEmailNotifications' => 'Pranešimai apie priskyrimą',
      'assignmentEmailNotificationsEntityList' => 'Pranešimų el. paštu priskyrimo taikymo sritis',
      'streamEmailNotifications' => 'Pranešimai apie "Srauto" naujinius vidiniams naudotojams',
      'portalStreamEmailNotifications' => '
Pranešimai apie naujinius "Sraute" portalo naudotojams',
      'streamEmailNotificationsEntityList' => '"Srauto" pranešimai el. paštu taikymo sritis',
      'streamEmailNotificationsTypeList' => 'Ką pranešti apie',
      'b2cMode' => 'B2C režimas',
      'avatarsDisabled' => 'Išjungti piktogramas',
      'followCreatedEntities' => 'Sekti sukurtus įrašus',
      'displayListViewRecordCount' => 'Rodyti visus (sąrašo rodmenyje)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Išjungti naudotojo temas',
      'emailMessageMaxSize' => 'Maksimalus el. laiško dydis (Mb)',
      'massEmailMaxPerHourCount' => 'Maksimalus per valandą siunčiamų el. Laiškų skaičius',
      'personalEmailMaxPortionSize' => 'Maksimalus el. pašto siuntimo dydis asmeninei paskyrai',
      'inboundEmailMaxPortionSize' => 'Maksimalus el. laiškų kiekis grupės paskyrai laikomas',
      'maxEmailAccountCount' => 'Maksimalus asmeninių el. Pašto paskyrų skaičius vienam vartotojui',
      'authTokenLifetime' => 'Autentikavimo žymės gyvavimas (valandomis)',
      'authTokenMaxIdleTime' => 'Autentikavimo žymės maksimalus laikas (valandomis)',
      'dashboardLayout' => 'Prietaisų skydelio išdėstymas (numatytas)',
      'siteUrl' => 'Tinklapio adresas',
      'addressPreview' => 'Adreso peržiūra',
      'addressFormat' => 'Adreso formatas',
      'notificationSoundsDisabled' => 'Išjungti prenešimų garsus',
      'applicationName' => 'Aplikacijos pavadinimas',
      'calendarEntityList' => 'Kalendoriaus vedinių sąrašas',
      'mentionEmailNotifications' => 'Siųskite el. Paštu pranešimus apie paminimus pranešimuose',
      'massEmailDisableMandatoryOptOutLink' => 'Išjungti privalomą atsisakymo nuorodą',
      'activitiesEntityList' => 'Veiklos subjektų sąrašas',
      'historyEntityList' => 'Istorijos subjektų sąrašas',
      'currencyFormat' => 'Valiutos formatas',
      'currencyDecimalPlaces' => 'Valiutos dešimtainiai skaičiai',
      'aclStrictMode' => 'ACL griežtas režimas',
      'aclAllowDeleteCreated' => 'Leisti pašalinti sukurtus įrašus',
      'adminNotifications' => 'Sisteminiai pranešimai administravimo skiltyje',
      'adminNotificationsNewVersion' => 'Rodyti pranešimą, kai yra prieinama nauja EspoCRM versija',
      'adminNotificationsNewExtensionVersion' => 'Rodyti pranešimą, kai yra prieinamos naujos plėtinių versijos',
      'textFilterUseContainsForVarchar' => 'Filtruoti varchar laukus naudokite "containing" operatorių',
      'authTokenPreventConcurrent' => 'Tik vienas autorinis raktas vienam vartotojui',
      'scopeColorsDisabled' => 'Išjunkite spalvų apimtį',
      'tabColorsDisabled' => 'Išjungti kortelių spalvas',
      'tabIconsDisabled' => 'Išjungti kortelių piktogramas',
      'emailAddressIsOptedOutByDefault' => 'Pažymėkite naujus el. Pašto adresus kaip pasirinktą',
      'outboundEmailBccAddress' => 'BCC adresas išoriniams klientams',
      'cleanupDeletedRecords' => 'Išvalyti ištrintus įrašus',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sekmadienis',
        1 => 'Pirmadienis',
      ),
      'currencyFormat' => 
      array (
        1 => '10 USD',
        2 => '$10',
      ),
      'streamEmailNotificationsTypeList' => 
      array (
        'Post' => 'Pranešimai',
        'Status' => 'Būsenos atnaujinimai',
        'EmailReceived' => 'Gauti el. Laiškai',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPage' => 'Iš pradžių rodomas įrašų skaičius sąrašo rodinyje.',
      'recordsPerPageSmall' => 'Įrašų skaičius rodomas sąsajų skiltyje',
      'outboundEmailIsShared' => 'Leiskite vartotojams siųsti el. laiškus iš šio adreso.',
      'followCreatedEntities' => 'Vartotojai automatiškai seks įrašus, kuriuos jie sukūrė.',
      'emailMessageMaxSize' => 'Visi gaunami laiškai, viršijantys numatytą dydį, bus laikomi be turinio ir prisegtukų.',
      'authTokenLifetime' => 'Nurodo, kiek laiko gali egzistuoti žymės.
0 - tai reiškia galioja be pabaigos.',
      'authTokenMaxIdleTime' => 'Nurodo, kiek laiko gali egzistuoti žymės nuo paskutinio prisijungimo.
0 - means no expiration. ',
      'userThemesDisabled' => 'Jei pažymėsite, vartotojai negalės pasirinkti kitos temos.',
      'ldapUsername' => 'Visas sistemos naudotojo DN, kuris leidžia ieškoti kitų vartotojų. Pavyzdžiui "CN = LDAP sistemos naudotojas, OU = vartotojai, OU = espocrm, DC = testas, DC = lan".',
      'ldapPassword' => 'Slaptažodis prieigai prie LDAP serverio.',
      'ldapAuth' => 'Prisijunkite LDAP serverio kredencialus.',
      'ldapUserNameAttribute' => 'Savybė identifikuoti vartotojui.
Pvz. "userPrincipalName" arba "sAMAccountName" Active Directory, "uid" OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass atributas naudotojų paieškai. Pavyzdžiui "person" AD, "inetOrgPerson", skirta OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Jūsų paskyros kanoninės formos tipas. Yra 4 variantai: <br> - \'Dn\' - forma formatu \'CN = tester, OU = espocrm, DC = test, DC = lan\'. <br> - "Vartotojo vardas" - forma "testeris". <br> - "Backslash" - forma "COMPANY \\ tester". <br> - "Principal" - forma "tester@company.com".',
      'ldapBindRequiresDn' => 'Galimybė formatuoti vartotojo vardą DN formoje.',
      'ldapBaseDn' => 'Numatytoji DN bazė, naudojama vartotojų paieškai. Pavyzdžiui "OU = vartotojai, OU = espocrm, DC = testas, DC = lan".',
      'ldapTryUsernameSplit' => 'Galimybė suskirstyti naudotojo vardą į domeną.',
      'ldapOptReferrals' => 'jei kreiptis į LDAP klientą.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Ši parinktis leidžia EspoCRM sukurti naudotoją iš LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP atributas, naudojamas vartotojo vardui nustatyti. Pavyzdžiui "duotas vardas".',
      'ldapUserLastNameAttribute' => 'LDAP atributas, naudojamas vartotojo vardui nustatyti. Pavyzdžiui "sn"',
      'ldapUserTitleAttribute' => 'LDAP atributas, kuris naudojamas vartotojo vardui nustatyti. Pavyzdžiui "pavadinimas".',
      'ldapUserEmailAddressAttribute' => 'LDAP savybė, kuri naudojama vartotojo el. pašto adresui nustatyti. Pavyzdžiui "paštas".',
      'ldapUserPhoneNumberAttribute' => 'LDAP savybė, kuri naudojama vartotojo telefono numeriui nustatyti. Pavyzdžiui "telefono nr.".',
      'ldapUserLoginFilter' => 'Filtras, leidžiantis apriboti vartotojus, kurie gali naudoti EspoCRM. Pavyzdžiui "memberOf = CN = espoGroup, OU = groups, OU = espocrm, DC = test, DC = lan".',
      'ldapAccountDomainName' => 'Domenas, kuris naudojamas įgalioti LDAP serverį.',
      'ldapAccountDomainNameShort' => 'Trumpasis Ddomenas, kuris naudojamas įgalioti LDAP serverį.',
      'ldapUserTeams' => 'Komandos sukurtam vartotojui. Jei norite daugiau, žiūrėkite vartotojo profilį.',
      'ldapUserDefaultTeam' => 'Numatytoji komanda sukurtam vartotojui. Jei norite daugiau, žiūrėkite vartotojo profilį.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Pagal nutylėjimą EspoCRM pritaikytas B2B. Galite jį perjungti į B2C.',
      'currencyDecimalPlaces' => 'Dešimtainių skaičių kiekis. Jei tuščia, bus rodomas visos netuščios dešimtosios dalys.',
      'aclStrictMode' => 'Įjungta: prieiga prie taikymo sričių bus uždrausta, jei ji nenurodyta rolėse.
Neleidžiama: prieiga prie taikymo sričių bus leidžiama, jei ji nenurodyta rolėse.',
      'aclAllowDeleteCreated' => 'Vartotojai galės pašalinti įrašus, kuriuos jie sukūrė, net jei jie neturi pašalinimo galimybės.',
      'textFilterUseContainsForVarchar' => 'Jei neužregistruotas, tada prasideda "operatorius". Galite naudoti pakaitos simbolį \'%\'.',
      'streamEmailNotificationsEntityList' => 'Siųskite el. Paštu pranešimus apie srauto atnaujinimus pagal įrašus. Vartotojai gaus pranešimus elektroniniu paštu tik tam tikro tipo subjektams.',
      'authTokenPreventConcurrent' => 'Vartotojai negalės vienu metu prisijungti prie kelių įrenginių.',
      'emailAddressIsOptedOutByDefault' => 'Kuriant naują įrašą elektroninio pašto prenumerata bus pažymėta kaip pasirinkta.',
      'cleanupDeletedRecords' => 'Ištrinti įrašai bus ištrinti iš duomenų bazės po kurio laiko.',
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Locale',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfigūravimas',
      'In-app Notifications' => 'Pranešimai programoje',
      'Email Notifications' => 'El. laiškų pranešimai',
      'Currency Settings' => 'Caliutų nustatymai',
      'Currency Rates' => 'Valiutų kursai',
      'Mass Email' => 'Masiniai el. laiškai',
      'Test Connection' => 'Patikrinti ryšį',
      'Connecting' => 'Prisijungiama...',
      'Activities' => 'Veikla',
      'Admin Notifications' => 'Administratoriaus priminimai',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Prisijungėte sėkmingai. Ryšys veikia.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'roles' => 'Rolės',
      'positionList' => 'Pozicijų sąrašas',
    ),
    'links' => 
    array (
      'users' => 'Vartotojai',
      'notes' => 'Pastabos',
      'roles' => 'Rolės',
      'inboundEmails' => 'Grupės el. pašto paskyros',
    ),
    'tooltips' => 
    array (
      'roles' => 'Prieigos rolės. Šios komandos vartotojai gauna prieigos kontrolės lygį iš pasirinktų rolių.',
      'positionList' => 'Galimos pozicijos šioje komandoje. Pavyzdžiui pardavėjas, vadybininkas.
',
    ),
    'labels' => 
    array (
      'Create Team' => 'Sukurti komandą',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'body' => 'Laiško tekstas',
      'entityType' => 'Vedinio tipas',
      'header' => 'Antraštė',
      'footer' => 'Poraštė',
      'leftMargin' => 'Kairė paraštė',
      'topMargin' => 'Viršutinė paraštė',
      'rightMargin' => 'Dešinė paraštė',
      'bottomMargin' => 'Apatinė paraštė',
      'printFooter' => 'Spausdinti poraštę',
      'footerPosition' => 'Poraštės pozicija',
      'variables' => 'Galimi sandoriai',
      'pageOrientation' => 'Lapo padėtis',
      'pageFormat' => 'Lapo formatas',
      'fontFace' => 'Šriftas',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Sukurti šabloną',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Stačias',
        'Landscape' => 'Gulščias',
      ),
      'placeholders' => 
      array (
        'today' => 'Šiandien (data)',
        'now' => 'Dabar (data-laikas)',
      ),
      'fontFace' => 
      array (
        'aealarabiya' => 'AlArabiya',
        'aefurat' => 'Aefuratas',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serifas',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => '"FreeMono"',
        'freesans' => 'FreeSans',
        'freeserif' => '"FreeSerif"',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => '"Kozgo Pro Medium"',
        'kozminproregular' => '"Kozmin Pro Regular"',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'PDFA simbolis',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'Simbolis',
        'times' => 'Laikai',
      ),
    ),
    'tooltips' => 
    array (
      'footer' => 'Naudokite {page Number}, jei norite spausdinti puslapio numerį.',
      'variables' => 'Kopijavimui reikia įterpti žymeklį į antraštę, kūną arba poraštę.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'userName' => 'Vartotojo vardas',
      'title' => 'Pavadinimas',
      'isAdmin' => 'Yra Adminas',
      'defaultTeam' => 'Pagrindinė komanda',
      'emailAddress' => 'El. paštas',
      'phoneNumber' => 'Telefonas',
      'roles' => 'Rolės',
      'portals' => 'Portalai',
      'portalRoles' => 'Portalų rolės',
      'teamRole' => 'Pozicija',
      'password' => 'Slaptažodis',
      'currentPassword' => 'Esamas lapažodis',
      'passwordConfirm' => 'Patvirtinti slaptažodį',
      'newPassword' => 'Naujas slaptažodis',
      'newPasswordConfirm' => 'Patvirtinkite naują slaptažodį',
      'avatar' => 'Kriptograma',
      'isActive' => 'Aktyvus',
      'isPortalUser' => 'Portalo vartotojas',
      'contact' => 'Kontaktas',
      'accounts' => 'Įmonės',
      'account' => 'Paskyra (pirminė)',
      'sendAccessInfo' => 'Siųsti el. laišką su prieigos informacija vartotojui',
      'portal' => 'Portalas',
      'gender' => 'Lytis',
      'position' => 'Pozicija komandoje',
      'ipAddress' => 'IP Adresss',
      'passwordPreview' => 'Slaptažodžio peržiūra',
      'isSuperAdmin' => 'Yra superadministratorius',
      'lastAccess' => 'Paskutinė prieiga',
      'acceptanceStatus' => 'Priėmimo statusas',
      'acceptanceStatusMeetings' => 'Priėmimo statusas (susirinkimai)',
      'acceptanceStatusCalls' => 'Priėmimo statusas (skambučiai)',
    ),
    'links' => 
    array (
      'teams' => 'Komandos',
      'roles' => 'Rolės',
      'notes' => 'Pastabos',
      'portals' => 'Portalai',
      'portalRoles' => 'Portalo rolės',
      'contact' => 'Kontaktas',
      'accounts' => 'Įmonės',
      'account' => 'Paskyra (pirminė)',
      'tasks' => 'Užduotys',
      'targetLists' => 'Adresatų sarašai',
    ),
    'labels' => 
    array (
      'Create User' => 'Sukurti vartotoją',
      'Generate' => 'Generuoti',
      'Access' => 'Prieiga',
      'Preferences' => 'Nustatymai',
      'Change Password' => 'Pakeisti slaptažodį',
      'Teams and Access Control' => 'Komandos ir prieigos kontrolė',
      'Forgot Password?' => 'Pamiršote slaptažodį?',
      'Password Change Request' => 'Slaptažodžio keitimo prašymas',
      'Email Address' => 'El. pašto adresas',
      'External Accounts' => 'Išorinės paskyros',
      'Email Accounts' => 'El. pašto paskyros',
      'Portal' => 'Portalas',
      'Create Portal User' => 'Sukurti portalo vartotoją',
      'Proceed w/o Contact' => 'Pereiti prie kontaktų',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Visi šio naudotojo sukurti įrašai bus susiję su šia komanda pagal nutylėjimą.',
      'userName' => 'Leidžiami raidės a-z, skaičiai 0-9, taškai, brūkšniai, @ -žymėjimai ir pabraukimai.',
      'isAdmin' => 'Administratorius turi prieigą prie visko',
      'isActive' => 'Jei nepažymėta, vartotojas negalės prisijungti.',
      'teams' => 'Komandos,kurioms priklauso šis naudotojas. Prieigos kontrolės lygis yra perimtas iš komandos rolės.',
      'roles' => 'Papildomos prieigos vaidmenys. Naudokite jį, jei naudotojas nepriklauso jokiai komandai arba jums reikia išplėsti prieigos kontrolės lygį tik šiam vartotojui.',
      'portalRoles' => 'Papildomos portalo rolės. Naudokite ją, kad galėtumėte išplėsti prieigos kontrolės lygį tik šiam vartotojui.',
      'portals' => 'Portalai, prie kurių šis vartotojas turi prieigą.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Slaptažodis bus išsiųstas vartotojo el. pašto adresu.',
      'accountInfoEmailSubject' => 'EspoCRM User Access Info',
      'accountInfoEmailBody' => 'Your access information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Change Password Request',
      'passwordChangeLinkEmailBody' => 'You can change your password by following this link {link}. This unique URL will be expired soon.',
      'passwordChanged' => 'Slpatažodis buvo pakeistas',
      'userCantBeEmpty' => 'Vartotojo vardas negali būti tuščias',
      'wrongUsernamePasword' => 'Neteisingas prisijungimo vardas/slaptažodis',
      'emailAddressCantBeEmpty' => 'El. pašto adresas negali būti tuščias',
      'userNameEmailAddressNotFound' => 'Vartotojo vardas/el. pašto adresas nerastas',
      'forbidden' => 'Draudžiama, prašome pabandyti vėliau',
      'uniqueLinkHasBeenSent' => 'Unikalus URL buvo išsiųstas nurodytu el. pašto adresu.',
      'passwordChangedByRequest' => 'Slaptažodis pakeistas.',
      'setupSmtpBefore' => 'Jūs turite nustatyti <a href="{url}"> SMTP nustatymus </a>, kad sistema galėtų išsiųsti slaptažodį el. paštu.',
      'userNameExists' => 'Toks vartotojas jau sukurtas',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nenustatyta',
        'Male' => 'Vyras',
        'Female' => 'Moteris',
        'Neutral' => 'Neutrali lytis',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Tik mano komanda',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktyvus',
      'activePortal' => 'Aktyvus portalas',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Pavadinimas',
      'emailAddress' => 'El. paštas',
      'website' => 'Internetinė Svetainė',
      'phoneNumber' => 'Telefonas',
      'billingAddress' => 'Mokėtojo adresas',
      'shippingAddress' => 'Siuntimo adresas',
      'description' => 'Aprašymas',
      'sicCode' => 'Sic kodas',
      'industry' => 'Pramonės šaka',
      'type' => 'Tipas',
      'contactRole' => 'Pavadinimas',
      'contactIsInactive' => 'Neaktyvus',
      'campaign' => 'Kampanija',
      'targetLists' => 'Adresatų sarašai',
      'targetList' => 'Adresatų sarašas',
      'originalLead' => 'Originalus švinas',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kontaktai',
      'opportunities' => 'Galimybės',
      'cases' => 'Atvejai',
      'documents' => 'Dokumentai',
      'meetingsPrimary' => 'Susitikimai (išplėsta)',
      'callsPrimary' => 'Skambučiai (išplėsta)',
      'tasksPrimary' => 'Užduotys (išplėsta)',
      'emailsPrimary' => 'El. laiškai (išplėsta)',
      'targetLists' => 'Adresatų sarašai ',
      'campaignLogRecords' => 'Kampanijos žurnalas',
      'campaign' => 'Kampanija',
      'portalUsers' => 'Portalo vartotojai',
      'originalLead' => 'Originalus švinas',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klientas',
        'Investor' => 'Investuotojas',
        'Partner' => 'Partneris',
        'Reseller' => 'Perpardavinėtojas',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerokosmosas',
        'Agriculture' => 'Žemdirbystė',
        'Advertising' => 'Reklama',
        'Apparel & Accessories' => 'Drabužiai ir aksesuarai',
        'Architecture' => 'Architektūra',
        'Automotive' => 'Automobiliai',
        'Banking' => 'Bankininkystė',
        'Biotechnology' => 'Biotechnologijos',
        'Building Materials & Equipment' => 'Statybinės medžiagos ir įranga',
        'Chemical' => 'Chemijos pramonė',
        'Construction' => 'Statyba',
        'Computer' => 'Kompiuterija',
        'Defense' => 'Ginyba',
        'Creative' => 'Kūryba',
        'Culture' => 'Kultūra',
        'Consulting' => 'Konsultavimas',
        'Education' => 'Mokslas',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Elektros energija',
        'Energy' => 'Energetika',
        'Entertainment & Leisure' => 'Pramogos ir laisvalaikis',
        'Finance' => 'Finansai',
        'Food & Beverage' => 'Maistas ir gėrimai
',
        'Grocery' => 'Maisto prekių parduotuvė',
        'Hospitality' => 'Svetingumas',
        'Healthcare' => 'Sveikatos apsauga',
        'Insurance' => 'Draudimas',
        'Legal' => 'Teisė',
        'Manufacturing' => 'Gamyba',
        'Mass Media' => 'Žiniasklaida',
        'Mining' => 'Gavyba',
        'Music' => 'Muzika',
        'Marketing' => 'Marketingas',
        'Publishing' => 'Leidyba',
        'Petroleum' => 'Degalinės',
        'Real Estate' => 'Nekilnojamas turtas',
        'Retail' => 'Mažmeninė prekyba',
        'Shipping' => 'Siuntimas',
        'Service' => 'Paslaugos',
        'Support' => 'Palaikymas',
        'Sports' => 'Sportas',
        'Software' => 'Programinė įranga',
        'Technology' => 'Technologijos',
        'Telecommunications' => 'Telekomunikacijos',
        'Television' => 'Televizija',
        'Testing, Inspection & Certification' => 'Testavimas, tikrinimas ir sertifikavimas',
        'Transportation' => 'Transportas',
        'Travel' => 'Kelionės',
        'Venture Capital' => 'Rizikos kapitalas',
        'Wholesale' => 'Didmeninė prekyba',
        'Water' => 'Vanduo',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Sukurti paskyrą',
      'Copy Billing' => 'Kopijuoti pristatymo adresą',
      'Set Primary' => 'Nutatyti pirminiu',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Klientai',
      'partners' => 'Partneriai',
      'recentlyCreated' => 'Neseniai sukurta',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mėnuo',
      'week' => 'Savaitė',
      'day' => 'Diena',
      'agendaWeek' => 'Savaitė',
      'agendaDay' => 'Diena',
      'timeline' => 'Chronologija',
    ),
    'labels' => 
    array (
      'Today' => 'Šiandien',
      'Create' => 'Sukurti',
      'Shared' => 'Pasidalinta',
      'Add User' => 'Pridėti vartotoją',
      'current' => 'esamas',
      'time' => 'laikas',
      'User List' => 'Vartotojų sąrašas',
      'Manage Users' => 'Tvarkyti vartotojus',
      'View Calendar' => 'Peržiūrėti kalendorių',
      'Create Shared View' => 'Sukurkite bendrąjį rodinį',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'parent' => 'Pagrindinis',
      'status' => 'Statusas',
      'dateStart' => 'Pradžios data',
      'dateEnd' => 'Pabaigos data',
      'direction' => 'Kryptis',
      'duration' => 'Trukmė',
      'description' => 'Aprašymas',
      'users' => 'Vartotojai',
      'contacts' => 'Kontaktai',
      'leads' => 'Potencialūs klientai',
      'reminders' => 'Priminimai',
      'account' => 'Įmonė',
      'acceptanceStatus' => 'Priėmimo statusas',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Suplanuota',
        'Held' => 'Įvykdyta',
        'Not Held' => 'Neįvykdyta',
      ),
      'direction' => 
      array (
        'Outbound' => 'Siunčiami',
        'Inbound' => 'Gaunami',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Joks',
        'Accepted' => 'Priimta',
        'Declined' => 'Atmesta',
        'Tentative' => 'Preliminarus',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Pažymėti kaip įvykdytą',
      'setNotHeld' => 'Pažymėti kaip neįvykdytą',
    ),
    'labels' => 
    array (
      'Create Call' => 'Sukurti skambutį',
      'Set Held' => 'Pažymėti kaip įvykdytą',
      'Set Not Held' => 'Pažymėti kaip neįvykdytą',
      'Send Invitations' => 'Siųsti pakvietimus',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Suplanuota',
      'held' => 'Įvykdyta',
      'todays' => 'Šiandienos',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'description' => 'Aprašymas',
      'status' => 'Statusas',
      'type' => 'Tipas',
      'startDate' => 'Pradžios data',
      'endDate' => 'Pabaigos data',
      'targetLists' => 'Adresatų sarašai ',
      'excludingTargetLists' => 'Neįtraukti adresatų sąrašų',
      'sentCount' => 'Išsiųsta',
      'openedCount' => 'Atverta',
      'clickedCount' => 'Paspausta',
      'optedOutCount' => 'Pasirinkta',
      'bouncedCount' => 'Atmesta',
      'optedInCount' => 'Pasirinkta',
      'hardBouncedCount' => 'Griežtai atmestas',
      'softBouncedCount' => 'Laikinai atmestas',
      'leadCreatedCount' => 'Potencialūs klientai sukurti',
      'revenue' => 'Pajamos',
      'revenueConverted' => 'Pajamos (konvertuotos)',
      'budget' => 'Biudžetas',
      'budgetConverted' => 'Biudžetas (kovertuotas)',
      'contactsTemplate' => 'Kontaktai šablonas',
      'leadsTemplate' => 'Pasiunčia šabloną',
      'accountsTemplate' => 'Sąskaitų šablonas',
      'usersTemplate' => 'Vartotojų šablonas',
      'mailMergeOnlyWithAddress' => 'Praleisti įrašus be užpildyto adreso',
    ),
    'links' => 
    array (
      'targetLists' => 'Adresatų sąrašai',
      'excludingTargetLists' => 'Neįtraukti adresatų sąrašų',
      'accounts' => 'Įmonės',
      'contacts' => 'Kontaktai',
      'leads' => 'Potencialūs klientai',
      'opportunities' => 'Galimybės',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Masiniai el. laiškai',
      'trackingUrls' => 'Stebėjimo URL',
      'contactsTemplate' => 'Kontaktai šablonas',
      'leadsTemplate' => 'Pasiunčia šabloną',
      'accountsTemplate' => 'Sąskaitų šablonas',
      'usersTemplate' => 'Vartotojų šablonas',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'El. paštas',
        'Web' => 'Internetas',
        'Television' => 'Televizija',
        'Radio' => 'Radijas',
        'Newsletter' => 'Naujienlaiškis',
        'Mail' => 'Paštas',
      ),
      'status' => 
      array (
        'Planning' => 'Planuojama',
        'Active' => 'Aktyvus',
        'Inactive' => 'Neaktyvus',
        'Complete' => 'Įvykdyta',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Sukurti kampaniją',
      'Target Lists' => 'Adresatų sąrašai',
      'Statistics' => 'Statistika',
      'hard' => 'kieta',
      'soft' => 'minkšta',
      'Unsubscribe' => 'Atsisakyti prenumeratos',
      'Mass Emails' => 'Masiniai el. laiškai',
      'Email Templates' => 'El. laiškų šabonai',
      'Unsubscribe again' => 'Atsisakyti prenumeratos dar kartą',
      'Subscribe again' => 'Užsisakyti prenumeratą dar kartą',
      'Create Target List' => 'Sukurti adresatų sąrašą',
      'Mail Merge' => 'Pašto suliejimo',
      'Generate Mail Merge PDF' => 'Sukurkite "Mail Merge PDF"',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktyvus',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Jūsų el, pašto adresas buvo pašalintas iš mūsų adresatų sąrašo.',
      'subscribedAgain' => 'Jūs užsisakėte prenumeratą dar kartą',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Adresatai, kurie turėtų gauti laiškus.',
      'excludingTargetLists' => 'Adresatai, kurie neturėtų gauti laiškų.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Veiksmas',
      'actionDate' => 'Data',
      'data' => 'Duomenys',
      'campaign' => 'Kampanija',
      'parent' => 'Adresatas',
      'object' => 'Objektas',
      'application' => 'Programėlė',
      'queueItem' => 'Eilės elementas',
      'stringData' => 'Eilutės duomenys',
      'stringAdditionalData' => 'Papildomų duomenų eilutė',
      'isTest' => 'Testuojama',
    ),
    'links' => 
    array (
      'queueItem' => 'Eilės elementas',
      'parent' => 'Pagrindinis',
      'object' => 'Ojektas',
      'campaign' => 'Kampanija',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Išsiųsta',
        'Opened' => 'Atverta',
        'Opted Out' => 'Pasirinkta',
        'Bounced' => 'Atmesta',
        'Clicked' => 'Paspausta',
        'Lead Created' => 'Sukurtas potencialus klientas',
        'Opted In' => 'Pasirinkta',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Visi',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Išsiųsta',
      'opened' => 'Atverta',
      'optedOut' => 'Pasirinkta',
      'optedIn' => 'Pasirinkta',
      'bounced' => 'Atmesta',
      'clicked' => 'Paspausta',
      'leadCreated' => 'Sukurtas potencialus klientas',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Įterpti kodą vietoj URL',
      'campaign' => 'Kampanija',
    ),
    'links' => 
    array (
      'campaign' => 'Kampanija',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Sukurkite stebėjimo URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'number' => 'Numeris',
      'status' => 'Statusas',
      'account' => 'Įmonė',
      'contact' => 'Kontaktas',
      'contacts' => 'Kontaktai',
      'priority' => 'Prioritetas',
      'type' => 'Tipas',
      'description' => 'Aprašymas',
      'inboundEmail' => 'Grupės el. Pašto sąskaita',
      'lead' => 'Potencialus klientas',
      'attachments' => 'Prisegtukai',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Grupės el. Pašto sąskaita',
      'account' => 'Įmonė',
      'contact' => 'Kontaktas (pirminis)',
      'Contacts' => 'Kontaktai',
      'meetings' => 'Susitikimai',
      'calls' => 'Skambučiai',
      'tasks' => 'Užduotys',
      'emails' => 'El. laiška',
      'articles' => 'Žinių bazės straipsniai',
      'lead' => 'Potencialus klientas',
      'attachments' => 'Prisegtukai',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Naujas',
        'Assigned' => 'Priskirta',
        'Pending' => 'Vykdoma',
        'Closed' => 'Uždaryta',
        'Rejected' => 'Atmesta',
        'Duplicate' => 'Dublikatas',
      ),
      'priority' => 
      array (
        'Low' => 'Žemas',
        'Normal' => 'Normalus',
        'High' => 'Aukštas',
        'Urgent' => 'Skubu',
      ),
      'type' => 
      array (
        'Question' => 'Klausimas',
        'Incident' => 'Incidentas',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Sukurti atvejį',
      'Close' => 'Uždaryti',
      'Reject' => 'Atmesti',
      'Closed' => 'Uždaryta',
      'Rejected' => 'Atmesta',
    ),
    'presetFilters' => 
    array (
      'open' => 'Atidaryti',
      'closed' => 'Uždaryta',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'emailAddress' => 'El. paštas',
      'title' => 'Pavadinimas',
      'account' => 'Įmonė',
      'accounts' => 'Įmonės',
      'phoneNumber' => 'Telefonas',
      'accountType' => 'Įmonės tipas',
      'doNotCall' => 'Neskambinti',
      'address' => 'Adresas',
      'opportunityRole' => 'Galimybės rolė',
      'accountRole' => 'Pavadinimas',
      'description' => 'Aprašymas',
      'campaign' => 'Kampanija',
      'targetLists' => 'Adresatų sarašai',
      'targetList' => 'Adresatų sarašas',
      'portalUser' => 'Portalo vartotojas',
      'originalLead' => 'Originalus potencialus klientas',
      'acceptanceStatus' => 'Priėmimo statusas',
      'accountIsInactive' => 'Įmonė neaktyvi',
      'acceptanceStatusMeetings' => 'Priėmimo statusas (susirinkimai)',
      'acceptanceStatusCalls' => 'Priėmimo statusas (skambučiai)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => 'Galimybės',
      'cases' => 'Atvejai',
      'targetLists' => 'Adresatų sarašai',
      'campaignLogRecords' => 'Kampanijos žurnalas',
      'campaign' => 'Kampanija',
      'account' => 'Kontaktas (pirminis)',
      'accounts' => 'Įmonės',
      'casesPrimary' => 'Bylos (pirminis)',
      'tasksPrimary' => 'Užduotys (išplėstos)',
      'portalUser' => 'Portalo vartotojas',
      'originalLead' => 'Originalus potencialus klientas',
      'documents' => 'Dokumentai',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Sukurti kontaktą',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Nėra--',
        'Decision Maker' => 'Sprendimus priimantis žmogus',
        'Evaluator' => 'Vertintojas',
        'Influencer' => 'Darantis įtaką',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portalo vartotojai',
      'notPortalUsers' => 'Ne portalo vartotojas',
      'accountActive' => 'Aktyvus',
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
      'Create Document' => 'Sukurti dokumentą',
      'Details' => 'Išsamiau',
    ),
    'fields' => 
    array (
      'name' => 'Vardas',
      'status' => 'Statusas',
      'file' => 'Failas',
      'type' => 'Tipas',
      'publishDate' => 'Paskelbimo data',
      'expirationDate' => 'Galiojimo pabaigos data',
      'description' => 'Aprašymas',
      'accounts' => 'Įmonės',
      'folder' => 'Aplankas',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Įmonės',
      'opportunities' => 'Galimybės',
      'folder' => 'Aplankas',
      'leads' => 'Potencialūs klientai',
      'contacts' => 'Kontaktai',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktyvus',
        'Draft' => 'Juodraštis',
        'Expired' => 'Pasibaigė',
        'Canceled' => 'Atšaukta',
      ),
      'type' => 
      array (
        '' => 'Joks',
        'Contract' => 'Kontraktas',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licencijos sutartis',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktyvus',
      'draft' => 'Juodraštis',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Sukurti dokumento aplanką',
      'Manage Categories' => 'Tvarkyti aplankus',
      'Documents' => 'Dokumentai',
    ),
    'links' => 
    array (
      'documents' => 'Dokumentai',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'status' => 'Statusas',
      'target' => 'Adresatas',
      'sentAt' => 'Išsiuntimo data',
      'attemptCount' => 'Bandymai',
      'emailAddress' => 'El. pašto adresas',
      'massEmail' => 'Masinis el. Paštas',
      'isTest' => 'Testuojama',
    ),
    'links' => 
    array (
      'target' => 'Adresatas',
      'massEmail' => 'Masinis el. Paštas',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Vykdoma',
        'Sent' => 'Išsiųsta',
        'Failed' => 'Nepavyko',
        'Sending' => 'Siunčiama',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Vykdoma',
      'sent' => 'Išsiųsta',
      'failed' => 'Nepavyko',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Sukurti straipsnį',
      'Any' => 'Bet koks',
      'Send in Email' => 'Siųsti el. laišku',
      'Move Up' => 'Judėti aukštyn',
      'Move Down' => 'Judėti žemyn',
      'Move to Top' => 'Judėti į viršų',
      'Move to Bottom' => 'Judėti į apačią',
    ),
    'fields' => 
    array (
      'name' => 'Vardas',
      'status' => 'Statusas',
      'type' => 'Tipas',
      'attachments' => 'Prisegtukai',
      'publishDate' => 'Paskelbimo data',
      'expirationDate' => 'Galiojimo pabaigos data',
      'description' => 'Aprašymas',
      'body' => 'Laiško tekstas',
      'categories' => 'Kategorijos',
      'language' => 'Kalba',
      'portals' => 'Portalai',
    ),
    'links' => 
    array (
      'cases' => 'Atvejai',
      'opportunities' => 'Galimybės',
      'categories' => 'Kategorijos',
      'portals' => 'Portalai',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'Peržiūrima',
        'Draft' => 'Juodraštis',
        'Archived' => 'Suarchyvuota',
        'Published' => 'Paskelbta',
      ),
      'type' => 
      array (
        'Article' => 'Straipsnis',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Straipsnis bus prieinamas tik nurodytuose portaluose.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Paskelbta',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Sukurti kategoriją',
      'Manage Categories' => 'Tvarkyti kategorijas',
      'Articles' => 'Straipsniai',
    ),
    'links' => 
    array (
      'articles' => 'Straipsniai',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Konvertuota į',
      'Create Lead' => 'Sukurti potencialų klientą',
      'Convert' => 'Konvertuoti',
      'convert' => 'konvertuoti',
    ),
    'fields' => 
    array (
      'name' => 'Vardas',
      'emailAddress' => 'El. paštas',
      'title' => 'Pavadinimas',
      'website' => 'Internetinė Svetainė',
      'phoneNumber' => 'Telefonas',
      'accountName' => 'Įmonės pavadinimas',
      'doNotCall' => 'Neskambinti',
      'address' => 'Adresas',
      'status' => 'Statusas',
      'source' => 'Šaltinis',
      'opportunityAmount' => 'Pardavimo galimybės suma',
      'opportunityAmountConverted' => 'Galimybių suma (konvertuota)',
      'description' => 'Aprašymas',
      'createdAccount' => 'Įmonė',
      'createdContact' => 'Kontaktas',
      'createdOpportunity' => 'Galimybė',
      'campaign' => 'Kampanija',
      'targetLists' => 'Adresatų sarašai',
      'targetList' => 'Adresatų sarašas',
      'industry' => 'Pramonės šaka',
      'acceptanceStatus' => 'Priėmimo statusas',
      'opportunityAmountCurrency' => 'Galimybių suma Valiuta',
      'acceptanceStatusMeetings' => 'Priėmimo statusas (susirinkimai)',
      'acceptanceStatusCalls' => 'Priėmimo statusas (skambučiai)',
    ),
    'links' => 
    array (
      'targetLists' => 'Adresatų sarašai',
      'campaignLogRecords' => 'Kampanijos žurnalas',
      'campaign' => 'Kampanija',
      'createdAccount' => 'Įmonė',
      'createdContact' => 'Kontaktas',
      'createdOpportunity' => 'Galimybė',
      'cases' => 'Atvejai',
      'documents' => 'Dokumentai',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Naujas',
        'Assigned' => 'Priskirta',
        'In Process' => 'Vyksta',
        'Converted' => 'Konvertuota',
        'Recycled' => 'Ištrinta',
        'Dead' => 'Numarintas',
      ),
      'source' => 
      array (
        '' => 'Joks',
        'Call' => 'Skambutis',
        'Email' => 'El. paštas',
        'Existing Customer' => 'Egzistuojantis klientas',
        'Partner' => 'Partneris',
        'Public Relations' => 'Viešieji ryšiai',
        'Web Site' => 'Internetinė svetainė',
        'Campaign' => 'Kampanija',
        'Other' => 'Kiti',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktyvus',
      'actual' => 'Esamas',
      'converted' => 'Konvertuota',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'status' => 'Statusas',
      'storeSentEmails' => 'Saugoti išsiųstus el. laiškus',
      'startAt' => 'Pradžios data',
      'fromAddress' => 'Nuo adreso',
      'fromName' => 'Nuo vardo',
      'replyToAddress' => 'Atsakyti adresu',
      'replyToName' => 'Atsakyti vardui',
      'campaign' => 'Kampanija',
      'emailTemplate' => 'el. pašto laiško šablonas',
      'inboundEmail' => 'El. pašto paskyra',
      'targetLists' => 'Adresatų sarašai',
      'excludingTargetLists' => 'Neįtraukiami sdresatų sarašai',
      'optOutEntirely' => 'Atsisakyti visam laikui',
      'smtpAccount' => 'SMTP paskyra',
    ),
    'links' => 
    array (
      'targetLists' => 'Adresatų sarašai',
      'excludingTargetLists' => 'Neįtraukiami sdresatų sarašai',
      'queueItems' => 'Eilės elementai',
      'campaign' => 'Kampanija',
      'emailTemplate' => 'El. pašto laiško šablonas',
      'inboundEmail' => 'El. pašto paskyra',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Juodraštis',
        'Pending' => 'Vykdoma',
        'In Process' => 'Vyksta',
        'Complete' => 'Įvykdyta',
        'Canceled' => 'Atšaukta',
        'Failed' => 'Nepavyko',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Sukurti masinį laišką',
      'Send Test' => 'Siųsti bandomajį laišką',
      'System SMTP' => 'Sistema SMTP',
      'system' => 'sistema',
      'group' => 'grupė',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Pasirinkiite bent vieną adresatą',
      'testSent' => 'Bandomasis laiškas turėtų būti išsiųstas',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Atsisakiusių prenumeratos gavėjų el, pašto adresai bus pažymėti kaip nebenorintys gauti laiškų, kad ateityje nebegautų masinių pranešimų.',
      'targetLists' => 'Adresatai, kuriems turėtų būti siunčiami laiškai.',
      'excludingTargetLists' => 'Adresatai, kuriems turėtų būti siunčiami laiškai.',
      'storeSentEmails' => 'El. laiškai bus saugomi CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Esamas',
      'complete' => 'Įvykdyta',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'parent' => 'Pagrindinis',
      'status' => 'Statusas',
      'dateStart' => 'Pradžios data',
      'dateEnd' => 'Pabaigos data',
      'duration' => 'Trukmė',
      'description' => 'Aprašymas',
      'users' => 'Vartotojai',
      'contacts' => 'Kontaktai',
      'leads' => 'Potencialūs klientai',
      'reminders' => 'Priminimai',
      'account' => 'Įmonė',
      'acceptanceStatus' => 'Priėmimo statusas',
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
        'Planned' => 'Suplanuota',
        'Held' => 'Įvykdyta',
        'Not Held' => 'Neįvykdyta',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Joks',
        'Accepted' => 'Priimta',
        'Declined' => 'Atšaukta',
        'Tentative' => 'Preliminarus',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Pažymėti kaip įvykdytą',
      'setNotHeld' => 'Pažymėti kaip neįvykdytą',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Sukurti susitikimą',
      'Set Held' => 'Pažymėti kaip įvykdytą',
      'Set Not Held' => 'Pažymėti kaip neįvykdytą',
      'Send Invitations' => 'Siųsti pakvietimus',
      'on time' => 'laiku',
      'before' => 'prieš',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Suplanuota',
      'held' => 'Įvykdyta',
      'todays' => 'Šiandienos',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Nieko nebuvo išsiųsta',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'account' => 'Įmonė',
      'stage' => 'Stadija',
      'amount' => 'Suma',
      'probability' => 'Tikimybė, %',
      'leadSource' => 'Potencialaus kliento šaltinis',
      'doNotCall' => 'Neskambinti',
      'closeDate' => 'Uždarymo data',
      'contacts' => 'Kontaktai',
      'description' => 'Aprašymas',
      'amountConverted' => 'Suma (konvertuota)',
      'amountWeightedConverted' => 'Pasverta suma',
      'campaign' => 'Kampanija',
      'originalLead' => 'Originalus švinas',
      'amountCurrency' => 'Valiutos suma',
      'contactRole' => 'Kontakto vaidmuo',
      'lastStage' => 'Paskutinis etapas',
    ),
    'links' => 
    array (
      'contacts' => 'Kontaktai',
      'documents' => 'Dokumentai',
      'campaign' => 'Kampanija',
      'originalLead' => 'Originalus švinas',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Potencialių klientų paieška',
        'Qualification' => 'Kvalifikacija',
        'Proposal' => 'Pasiūlymas',
        'Negotiation' => 'Derybos',
        'Needs Analysis' => 'Reikalinga analizė',
        'Value Proposition' => 'Pasiūlymo vertė',
        'Id. Decision Makers' => 'Id. Sprendimus priimantys žmonės',
        'Perception Analysis' => 'Suvokimo analizė',
        'Proposal/Price Quote' => 'Pasiūlymas/Kainoraštis',
        'Negotiation/Review' => 'Derybos/Apžvalga',
        'Closed Won' => 'Laimėta',
        'Closed Lost' => 'Pralaimėta',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Sukurti pardavimo galimybę',
    ),
    'presetFilters' => 
    array (
      'open' => 'Atidaryti',
      'won' => 'Laimėta',
      'lost' => 'Pralaimėta',
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
      'name' => 'Vardas',
      'description' => 'Aprašymas',
      'entryCount' => 'Įrašų skaičius',
      'optedOutCount' => 'Pasirinkta suma',
      'campaigns' => 'Kampanijos',
      'endDate' => 'Pabaigos data',
      'targetLists' => 'Adresatų sarašai',
      'includingActionList' => 'Įskaitant',
      'excludingActionList' => 'Išskyrus',
      'targetStatus' => 'Tikslo būsena',
      'isOptedOut' => 'Yra atmesta',
    ),
    'links' => 
    array (
      'accounts' => 'Įmonės',
      'contacts' => 'Kontaktai',
      'leads' => 'Potencialūs klientai',
      'campaigns' => 'Kampanijos',
      'massEmails' => 'Masiniai el. laiškai',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'El. paštas',
        'Web' => 'Internetas',
        'Television' => 'Televizija',
        'Radio' => 'Radijas',
        'Newsletter' => 'Naujienlaiškis',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Pasirinkta',
        'Listed' => 'Sąraše',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Sukurti adresatų sąrašą',
      'Opted Out' => 'Pasirinkta',
      'Cancel Opt-Out' => 'Atšaukti atsisakymą',
      'Opt-Out' => 'Atsisakyti',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Vardas',
      'parent' => 'Pagrindinis',
      'status' => 'Statusas',
      'dateStart' => 'Pradžios data',
      'dateEnd' => 'Terminas',
      'dateStartDate' => 'Pradžios data (visą dieną)',
      'dateEndDate' => 'Pabaigos data (visą dieną)',
      'priority' => 'Prioritetas',
      'description' => 'Aprašymas',
      'isOverdue' => 'Vėluoja',
      'account' => 'Įmonė',
      'dateCompleted' => 'Įvykdymo data',
      'attachments' => 'Prisegtukai',
      'reminders' => 'Priminimai',
      'contact' => 'kontaktas',
    ),
    'links' => 
    array (
      'attachments' => 'Prisegtukai',
      'account' => 'Paskyra',
      'contact' => 'Kontaktai',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nepradėta',
        'Started' => 'Started',
        'Completed' => 'Užbaigta',
        'Canceled' => 'Atšaukta',
        'Deferred' => 'Atidėta',
      ),
      'priority' => 
      array (
        'Low' => 'Žemas',
        'Normal' => 'Normalus',
        'High' => 'Aukštas',
        'Urgent' => 'Skubu',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Sukurti užduotį',
      'Complete' => 'Įvykdyta',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Esamas',
      'completed' => 'Užbaigta',
      'deferred' => 'Atidėta',
      'todays' => 'Šiandienos',
      'overdue' => 'Vėluoja',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => 'Adresas',
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
      'meetings' => 'Susitikimai',
      'calls' => 'Skambučiai',
      'tasks' => 'Užduotys',
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
      'Create Formularios' => 'Sukurti Formulario',
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
      'meetings' => 'Susitikimai',
      'calls' => 'Skambučiai',
      'tasks' => 'Užduotys',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => 'Sukurti MotivoReclamo',
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
      'meetings' => 'Susitikimai',
      'calls' => 'Skambučiai',
      'tasks' => 'Užduotys',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' => 
    array (
      'Create Reclamo' => 'Sukurti Reclamo',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>