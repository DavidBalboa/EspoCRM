<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Korisnik',
      'action' => 'Akcija',
      'createdAt' => 'Datum',
      'target' => 'Meta',
      'targetType' => 'Vrsta mete',
      'authToken' => 'Auth token',
      'ipAddress' => 'IP adresa',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' => 
    array (
      'authToken' => 'Auth token',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'Korisnik',
      'target' => 'Meta',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Samo moje',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Pročitaj',
        'update' => 'Ažuriraj',
        'delete' => 'Obriši',
        'create' => 'Napravi',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Uključeno',
      'Disabled' => 'Isključeno',
      'System' => 'Sistem',
      'Users' => 'Korisnici',
      'Email' => 'E-pošta',
      'Data' => 'Podaci',
      'Customization' => 'Prilagođavanje',
      'Available Fields' => 'Dostupna polja',
      'Layout' => 'Izgled',
      'Entity Manager' => 'Entity Upravljač',
      'Add Panel' => 'Dodaj panel',
      'Add Field' => 'Dodaj polje',
      'Settings' => 'Podešavanja',
      'Scheduled Jobs' => 'Raspored radnji',
      'Upgrade' => 'Nadogradi',
      'Clear Cache' => 'Očisti cache',
      'Rebuild' => 'Obnovi',
      'Teams' => 'Timovi',
      'Roles' => 'Role',
      'Portal' => 'Portal',
      'Portals' => 'Portali',
      'Portal Roles' => 'Portal role',
      'Portal Users' => 'Korisnici portala',
      'Outbound Emails' => 'Odlazna e-pošta',
      'Group Email Accounts' => 'Grupni računi  e-pošte',
      'Personal Email Accounts' => 'Osobni računi e-pošte',
      'Inbound Emails' => 'Dolazna e-pošta',
      'Email Templates' => 'Nacrti za e-poštu',
      'Import' => 'Import',
      'Layout Manager' => 'Upravljač izgledom',
      'User Interface' => 'Korisničko sučelje',
      'Auth Tokens' => 'Pristupni tokeni',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autentikacija',
      'Currency' => 'Valuta',
      'Integrations' => 'Integracije',
      'Extensions' => 'Ekstenzije',
      'Upload' => 'Učitaj',
      'Installing...' => 'Instaliranje...',
      'Upgrading...' => 'Nadograđivanje...',
      'Upgraded successfully' => 'Uspješno nadograđeno',
      'Installed successfully' => 'Uspješno instalirano',
      'Ready for upgrade' => 'Spremno za nadograđivanje',
      'Run Upgrade' => 'Pokreni nadograđivanje',
      'Install' => 'Instaliraj',
      'Ready for installation' => 'Spremno za instalaciju',
      'Uninstalling...' => 'Deinstaliranje...',
      'Uninstalled' => 'Deinstalirano',
      'Create Entity' => 'Napravi entity',
      'Edit Entity' => 'Izmjena entiteta',
      'Create Link' => 'Napravi Poveznicu',
      'Edit Link' => 'Izmjena Poveznice',
      'Notifications' => 'Obavještavanje',
      'Jobs' => 'Radnje',
      'Reset to Default' => 'Vrati na početnu vrijednost',
      'Email Filters' => 'Filteri E-pošte',
      'Action History' => 'Povijest akcija',
      'Label Manager' => 'Upravljanje labelama',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalji',
      'listSmall' => 'Lista (mala)',
      'detailSmall' => 'Detaljno (malo)',
      'detailPortal' => 'Detalji (Portal)',
      'detailSmallPortal' => 'Detalji (Mali, Portal)',
      'listSmallPortal' => 'Lista (Mala, Portal)',
      'listPortal' => 'Lista (Portal)',
      'relationshipsPortal' => 'Panel relacija (Portal)',
      'filters' => 'Filteri pretrage',
      'massUpdate' => 'Masovna izmjena',
      'relationships' => 'Paneli veza',
      'sidePanelsDetail' => 'Bočni paneli (Detalji)',
      'sidePanelsEdit' => 'Bočni paneli (Izmjene)',
      'sidePanelsDetailSmall' => 'Bočni paneli (Detalji Mali)',
      'sidePanelsEditSmall' => 'Bočni paneli (izmjene male)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Pretvori izvor',
      'listForAccount' => 'Lista (za Tvrtke)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresa',
      'array' => 'Izbornik',
      'foreign' => 'Strani',
      'duration' => 'Trajanje',
      'password' => 'Lozinka',
      'personName' => 'Ime osobe',
      'autoincrement' => 'Autoprirast',
      'bool' => 'Logičko',
      'currency' => 'Valuta',
      'currencyConverted' => 'Valuta (konvertirana)',
      'date' => 'Datum',
      'datetime' => 'Datum i vrijeme',
      'datetimeOptional' => 'Datum/Datum i vrijeme',
      'email' => 'E-pošta',
      'enum' => 'Lista',
      'enumInt' => 'Lista cijelih brojeva',
      'enumFloat' => 'Lista decimalnih brojeva',
      'float' => 'Decimalni broj',
      'int' => 'Cijeli broj',
      'link' => 'Poveznica',
      'linkMultiple' => 'Višestruka Poveznica',
      'linkParent' => 'Matična Poveznica',
      'phone' => 'Telefon',
      'text' => 'Tekst',
      'url' => 'URL adresa',
      'varchar' => 'Kratki tekst',
      'file' => 'Datoteka',
      'image' => 'Slika',
      'multiEnum' => 'Multi-lista',
      'attachmentMultiple' => 'Više priloga',
      'rangeInt' => 'Raspon cijelih brojeva',
      'rangeFloat' => 'Raspon decimalnih brojeva',
      'rangeCurrency' => 'Raspon valuta',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Mapa',
      'number' => 'Broj',
      'colorpicker' => 'Izbornik boja',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
    ),
    'fields' => 
    array (
      'type' => 'Vrsta',
      'name' => 'Ime',
      'label' => 'Natpis',
      'tooltipText' => 'Objašnjenje',
      'required' => 'Obavezno',
      'default' => 'Početno',
      'maxLength' => 'Maksimalna dužina',
      'options' => 'Opcije',
      'after' => 'Poslije (polja)',
      'before' => 'Prije (polja)',
      'link' => 'Poveznica',
      'field' => 'Polje',
      'min' => 'Min',
      'max' => 'Maks',
      'translation' => 'Prijevod',
      'previewSize' => 'Veličina prikaza',
      'noEmptyString' => 'Prazan unos nije dozvoljen',
      'defaultType' => 'Početna Vrsta',
      'seeMoreDisabled' => 'Isključi izrezivanje teksta',
      'entityList' => 'Lista entiteta',
      'isSorted' => 'Sortirano po (abecednom redu)',
      'audited' => 'Pod revizijom',
      'trim' => 'Skrati',
      'height' => 'Visina (px)',
      'minHeight' => 'Min visina (px)',
      'provider' => 'Pružatelj',
      'typeList' => 'Vrsta liste',
      'rows' => 'Broj redova tekstualnog polja',
      'lengthOfCut' => 'Dužina izrezivanja',
      'sourceList' => 'Lista izvora',
      'prefix' => 'Prefiks',
      'nextNumber' => 'Slijedeći broj',
      'padLength' => 'Dužina ',
      'disableFormatting' => 'Isključi formatiranje',
      'dynamicLogicVisible' => 'Uvjeti da polje bude vidljivo',
      'dynamicLogicReadOnly' => 'Uvjeti da polje bude samo za čitanje',
      'dynamicLogicRequired' => 'Uvjeti da polje bude potrebno',
      'dynamicLogicOptions' => 'Uvjetne opcije',
      'probabilityMap' => 'Faza Vjerojatnosti (%)',
      'readOnly' => 'Samo za čitanje',
      'maxFileSize' => 'Maks Veličina Datoteke (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM će biti nadograđen na verziju na <strong>{version}</ strong>. Budite strpljivi jer to može potrajati.',
      'upgradeDone' => 'EspoCRM je nadograđen na verziju na <strong>{version}</strong>,.',
      'upgradeBackup' => 'Preporučamo izradu rezervne kopije EspoCRM datoteka i podataka prije nadogradnje.',
      'thousandSeparatorEqualsDecimalMark' => 'Oznaka za tisuće ne može biti ista kao decimalna oznaka.',
      'userHasNoEmailAddress' => 'Korisnik nema e-mail adresu.',
      'selectEntityType' => 'Izaberite tip entiteta u lijevom izborniku.',
      'selectUpgradePackage' => 'Izaberi paket nadogradnje',
      'downloadUpgradePackage' => 'Preuzmi paket nadogradnje <a href="{url}">ovdje</a>.',
      'selectLayout' => 'Izaberi željeni izgled u lijevom izborniku.',
      'selectExtensionPackage' => 'Izaberi paket ekstenzije',
      'extensionInstalled' => 'Ekstenzija {name} {version} je instalirana.',
      'installExtension' => 'Ekstenzija {name} {version} je spremna za instalaciju.',
      'cronIsNotConfigured' => 'Zakazane radnje nisu pokrenute, stoga dolazna E-pošta, obavijesti i podsjetnici nisu u funkciji. Molimo slijedite <a target="_blank" href="https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab">instructions</a> za postavljanje zakazanih radnji.',
      'newVersionIsAvailable' => 'Nova EspoCRM verzija {latestVersion} je dostupna.',
      'newExtensionVersionIsAvailable' => 'Nova verzija {latestVersion} ekstenzije {extensionName} je dostupna.',
      'uninstallConfirmation' => 'Jeste li sigurni u deinstalaciju ekstenzije?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Sistemska podešavanja aplikacije.',
      'scheduledJob' => 'Poslovi koji se obavljaju putem cron-a.',
      'upgrade' => 'Nadogradi EspoCRM.',
      'clearCache' => 'Očistite sav backend cache.',
      'rebuild' => 'Obnovi backend i očisti cache.',
      'users' => 'Upravljanje korisnicima.',
      'teams' => 'Upravljanje timovima',
      'roles' => 'Upravljanje ulogama.',
      'portals' => 'Upravljanje portalima',
      'portalRoles' => 'Uloge za portale.',
      'portalUsers' => 'Korisnici portala.',
      'outboundEmails' => 'SMTP podešavanja za odlaznu e-poštu.',
      'groupEmailAccounts' => 'Grupni IMAP računi e-pošte. E-pošta uvoz i E-pošta za Probleme.',
      'personalEmailAccounts' => 'Korisnički računi e-pošte.',
      'emailTemplates' => 'Šablone odlazne e-pošte.',
      'import' => 'Uvoz podataka iz CSV datoteke.',
      'layoutManager' => 'Prilagodba preglede (lista, detaljno, izmjena, pretraživanje, masovna izmjena).',
      'entityManager' => 'Kreiranje i uređivanje prilagođenih entiteta. Upravljanje poljima i odnosima.',
      'userInterface' => 'Konfiguracije sučelja',
      'authTokens' => 'Aktivne sesije. IP adresa i zadnji datum pristupa.',
      'authentication' => 'Postavke autentikacije.',
      'currency' => 'Podešavanja valute i tečajeva.',
      'extensions' => 'Instalirati ili deinstalirati ekstenzije.',
      'integrations' => 'Integracija sa trećim uslugama.',
      'notifications' => 'Postavke aplikacijskog obavještavanja e-poštom.',
      'inboundEmails' => 'Postavke dolazne e-pošte.',
      'emailFilters' => 'E-mail poruke koje se podudaraju sa određenim filterom neće biti uvezene.',
      'actionHistory' => 'Dnevnik korisničkih akcija.',
      'labelManager' => 'Prilagodi nazive aplikacija',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Vrla malo',
        'small' => 'Malo',
        'medium' => 'Srednje',
        'large' => 'Veliko',
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
      'Document' => 'Umetanje dokumenta',
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
      'user' => 'Korisnik',
      'ipAddress' => 'IP adresa',
      'lastAccess' => 'Zadnji pristup',
      'createdAt' => 'Prijava',
      'isActive' => 'Je aktivan',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Povijest akcija',
    ),
    'presetFilters' => 
    array (
      'active' => 'Je aktivan',
      'inactive' => 'Je neaktivan',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Postavi kao neaktivan',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Postavi kao neaktivan',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Naslov',
      'dateFrom' => 'Datum od',
      'dateTo' => 'Datum do',
      'autorefreshInterval' => 'Interval automatskog osvježavanja',
      'displayRecords' => 'Prikaz zapisa',
      'isDoubleHeight' => 'Visina 2x',
      'mode' => 'Način',
      'enabledScopeList' => 'Što prikazati',
      'users' => 'Korisnici',
      'entityType' => 'Vsta entiteta',
      'primaryFilter' => 'Primarni filter',
      'boolFilterList' => 'Dodatni Filteri',
      'sortBy' => 'Redoslijed (polja)',
      'sortDirection' => 'Redoslijed (smjer)',
      'expandedLayout' => 'Raspored',
      'dateFilter' => 'Filter Datuma',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Tjedan (raspored)',
        'basicWeek' => 'Tjedan',
        'month' => 'Mjesec',
        'basicDay' => 'Dan',
        'agendaDay' => 'Dan (raspored)',
        'timeline' => 'Vremenska linija',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Izaberi tip entiteta u opcijama za  dashlet.',
    ),
  ),
  'DynamicLogic' => 
  array (
    'labels' => 
    array (
      'Field' => 'Polje',
    ),
    'options' => 
    array (
      'operators' => 
      array (
        'equals' => 'Jednak',
        'notEquals' => 'Nije jednako',
        'greaterThan' => 'Veće od',
        'lessThan' => 'Manje od',
        'greaterThanOrEquals' => 'Više ili jednako',
        'lessThanOrEquals' => 'Manje ili jednako',
        'in' => 'U',
        'notIn' => 'Ne u',
        'inPast' => 'U prošlosti',
        'inFuture' => 'Da li je budućnost',
        'isToday' => 'Je danas',
        'isTrue' => 'Točno je',
        'isFalse' => 'Je netočno',
        'isEmpty' => 'Prazno',
        'isNotEmpty' => 'Nije prazno',
        'contains' => 'Sadrži',
        'notContains' => 'Ne sadrži',
        'has' => 'Sadrži',
        'notHas' => 'Ne sadrži',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime (subjekt)',
      'parent' => 'Matični',
      'status' => 'Status',
      'dateSent' => 'Datum slanja',
      'from' => 'Od',
      'to' => 'Za',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Odgovoriti na',
      'replyToString' => 'Odgovoriti na (string)',
      'isHtml' => 'je HTML',
      'body' => 'Sadržaj',
      'bodyPlain' => 'Sadržaj (čisti tekst)',
      'subject' => 'Predmet',
      'attachments' => 'Prilozi',
      'selectTemplate' => 'Odabir šablone',
      'fromEmailAddress' => 'Od adrese',
      'toEmailAddresses' => 'Na adresu',
      'emailAddress' => 'Adresa e-pošte',
      'deliveryDate' => 'Datum isporuke',
      'account' => 'Tvrtka',
      'users' => 'Korisnici',
      'replied' => 'Odgovorio',
      'replies' => 'Odgovori',
      'isRead' => 'je pročitano',
      'isNotRead' => 'nije pročitano',
      'isImportant' => 'je važna',
      'isReplied' => 'Je odgovoreno',
      'isNotReplied' => 'Nije odgovoreno',
      'isUsers' => 'je od korisnika',
      'inTrash' => 'u otpadu',
      'sentBy' => 'Poslano od strane',
      'folder' => 'Mapa',
      'inboundEmails' => 'Grupni računi',
      'emailAccounts' => 'Osobni računi',
      'hasAttachment' => 'Ima prilog',
      'assignedUsers' => 'Zaduženi korisnici',
      'ccEmailAddresses' => 'CC Email Adrese',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'ID Poruke',
      'messageIdInternal' => 'ID Poruke (Interno)',
      'folderId' => 'ID Mape',
      'fromName' => 'Od Naziv',
      'fromString' => 'Od String',
      'isSystem' => 'Je sustav',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'replied' => 'odgovorio',
      'replies' => 'Odgovori',
      'inboundEmails' => 'Grupni računi',
      'emailAccounts' => 'Osobni računi',
      'assignedUsers' => 'Zaduženi korisnici',
      'sentBy' => 'Poslano od strane',
      'attachments' => 'Prilozi',
      'fromEmailAddress' => 'Pošiljatelj Email Adresa',
      'toEmailAddresses' => 'To EmailAddrese',
      'ccEmailAddresses' => 'CC EmailAddrese',
      'bccEmailAddresses' => 'BCC EmailAddrese',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Nacrt',
        'Sending' => 'Slanje',
        'Sent' => 'Poslano',
        'Archived' => 'Arhivirano',
        'Received' => 'Primljeno',
        'Failed' => 'Neuspješno',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Arhiva E-pošte',
      'Archive Email' => 'Arhiva E-pošte',
      'Compose' => 'Sastaviti',
      'Reply' => 'Odgovoriti',
      'Reply to All' => 'Odgovoriti na sve',
      'Forward' => 'Proslijediti',
      'Original message' => '---------------------------- Originalna poruka ----------------------------',
      'Forwarded message' => 'Proslijeđena poruka',
      'Email Accounts' => 'Osobni račun e-pošte',
      'Inbound Emails' => 'Grupni račun e-pošte',
      'Email Templates' => 'Šablone e-pošte',
      'Send Test Email' => 'Pošalji probnu poruku',
      'Send' => 'Pošalji',
      'Email Address' => 'Adresa e-pošte',
      'Mark Read' => 'Označi kao pročitano',
      'Sending...' => 'Slanje...',
      'Save Draft' => 'Spremi kao nacrt',
      'Mark all as read' => 'Označi sve kao pročitano',
      'Show Plain Text' => 'Prikaži običan tekst',
      'Mark as Important' => 'Označite kao važno',
      'Unmark Importance' => 'Ukinite oznaku važno',
      'Move to Trash' => 'Pošalji u smeće',
      'Retrieve from Trash' => 'Vrati iz smeća',
      'Move to Folder' => 'Premjesti u folder',
      'Filters' => 'Filteri',
      'Folders' => 'Mape',
      'Create Lead' => 'Napraviti izvor',
      'Create Contact' => 'Napraviti kontakt',
      'Add to Contact' => 'Dodaj u Kontakt',
      'Add to Lead' => 'Dodaj u Izvor',
      'Create Task' => 'Napraviti zadatak',
      'Create Case' => 'Kreiranje prijave problema',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'SMTP nije podešen. {link}.',
      'testEmailSent' => 'Test poruka je poslana',
      'emailSent' => 'Poruka je poslana',
      'savedAsDraft' => 'Sačuvano kao nacrt',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Poslano',
      'archived' => 'Arhivirano',
      'inbox' => 'Primljeno',
      'drafts' => 'Nacrti',
      'trash' => 'Smeće',
      'important' => 'Važno',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Označi kao pročitano',
      'markAsNotRead' => 'Označi kao nepročitano',
      'markAsImportant' => 'Označite kao važno',
      'markAsNotImportant' => 'Uklonite oznaku važno',
      'moveToTrash' => 'Pošalji u smeće',
      'moveToFolder' => 'Premjesti u mapu',
      'retrieveFromTrash' => 'Vrati iz smeća',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'host' => 'Server',
      'username' => 'Korisničko ime',
      'password' => 'Lozinka',
      'port' => 'Port',
      'monitoredFolders' => 'Nadgledani folderi',
      'ssl' => 'SSL',
      'fetchSince' => 'Preuzmi od',
      'emailAddress' => 'Adresa e-pošte',
      'sentFolder' => 'Mapa poslanih',
      'storeSentEmails' => 'Čuvanje poslanih poruka',
      'keepFetchedEmailsUnread' => 'Zadrži nepročitani status novih poruka',
      'emailFolder' => 'Stavi u mapu',
      'useImap' => 'Dohvat E-pošte',
      'useSmtp' => 'Koristi SMTP',
      'smtpHost' => 'SMTP host',
      'smtpPort' => 'SMTP port',
      'smtpAuth' => 'SMTP auth',
      'smtpSecurity' => 'SMTP sigurnost',
      'smtpUsername' => 'SMTP korisničko ime',
      'smtpPassword' => 'SMTP lozinka',
    ),
    'links' => 
    array (
      'filters' => 'Filteri',
      'emails' => 'E-poruke',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Napravite račun e-pošte',
      'IMAP' => 'IMAP',
      'Main' => 'Glavni',
      'Test Connection' => 'Testiranje veze',
      'Send Test Email' => 'Poštalji probnu e-poštu',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Neuspjelo spajanje na IMAP server',
      'connectionIsOk' => 'Veza u redu',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Više mapa mora biti odvojeno zarezom.

Možete dodati mapu "poslano" da biste sinkronizirali e-poštu poslanu sa drugog mail klijenta.',
      'storeSentEmails' => 'Poslane poruke će biti spremljene na IMAP serveru. Polje "Adresa e-pošte" mora se podudarati sa adresom sa koje će slanje biti izvršeno.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primarna',
      'Opted Out' => 'Ne želi',
      'Invalid' => 'Netočno',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Od',
      'to' => 'Za',
      'subject' => 'Predmet',
      'bodyContains' => 'Tekst sadži',
      'action' => 'Akcija',
      'isGlobal' => 'Je globalna',
      'emailFolder' => 'Mapa',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Napravi filter e-pošte',
      'Emails' => 'E-poruke',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignorirati',
        'Move to Folder' => 'Staviti u mapu',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Dajte filteru opisno ime.',
      'subject' => 'Koristite asterisk *:

text* - počinje sa text,
*text* - sadrži text,
*text - završava sa text.',
      'bodyContains' => 'Sadržaj e-pošte ima bilo koju od navedenih riječi ili fraza.',
      'from' => 'Poruke poslane sa navedene adrese. Ostaviti prazno ako nije potrebno. Možete koristiti asterisk *.',
      'to' => 'Poruke za navedenu adresu. Ostaviti prazno ako nije potrebno. Možete koristiti asterisk *.',
      'isGlobal' => 'Primjenjuje ovaj filter na svim email porukama koje dolaze u sustav.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Preskoči obavijesti',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Napraviti Mapu',
      'Manage Folders' => 'Upravljanje Mapama',
      'Emails' => 'E-poruke',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'isHtml' => 'Je HTML',
      'body' => 'Sadržaj',
      'subject' => 'Predmet',
      'attachments' => 'Prilozi',
      'insertField' => 'Ubaci polje',
      'oneOff' => 'Jednokratno',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Kreiraj šablonu e-pošte',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Dostupne varijable: 

{optOutUrl} &#8211; URL za link za odjavljivanje;

{optOutLink} &#8211; link za odjavljivanje.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Označite ako namjeravate da koristite ovu šablonu samo jednom. Npr. masovna poruka.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Trenutni',
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
      'Fields' => 'Polja',
      'Relationships' => 'Odnosi',
      'Schedule' => 'Raspored',
      'Log' => 'Dnevnik',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'type' => 'Tip',
      'labelSingular' => 'Natpis jednina',
      'labelPlural' => 'Natpis množina',
      'stream' => 'Tok vijesti',
      'label' => 'Natpis',
      'linkType' => 'Vrsta Poveznice',
      'entityForeign' => 'Strani entitet',
      'linkForeign' => 'Strana Poveznica',
      'link' => 'Poveznica',
      'labelForeign' => 'Strani natpis',
      'sortBy' => 'Početno sortiranje (polje)',
      'sortDirection' => 'Početno sortiranje (smjer)',
      'relationName' => 'Naziv srednje tabele',
      'linkMultipleField' => 'Povezivanje više polja',
      'linkMultipleFieldForeign' => 'Povezivanje više stranih polja',
      'disabled' => 'Onemogućeno',
      'textFilterFields' => 'Tekst filter polja',
      'audited' => 'Revizija',
      'auditedForeign' => 'Vanjska Revizija',
      'statusField' => 'Status polja',
      'beforeSaveCustomScript' => 'Prilagođeni kod prije spremanja',
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
        '' => 'Nema',
        'Base' => 'Bazna',
        'Person' => 'Osoba',
        'CategoryTree' => 'Drvo Kategorija',
        'Event' => 'Događaj',
        'BasePlus' => 'Bazno plus',
        'Company' => 'Kompanija',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Više-na-više',
        'oneToMany' => 'Jedan-na-Više',
        'manyToOne' => 'Više-na-Jedan',
        'parentToChildren' => 'Nadređeni-Podređeni',
        'childrenToParent' => 'Podređeni-Nadređeni',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Uzlazno',
        'desc' => 'Silazno',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entitet je stvoren',
      'linkAlreadyExists' => 'Konflikt u nazivu poveznice.',
      'linkConflict' => 'Konflikt u nazivu : poveznica ili polje sa istim nazivom već postoji.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Ažuriranja ovog polja se prikazuju u toku vijesti.',
      'textFilterFields' => 'Polja koja se koriste za pretraživanje teksta.',
      'stream' => 'Da li entitet ima tok vijesti.',
      'disabled' => 'Provjerite da li vam ne treba ovaj entitet u sustavu.',
      'linkAudited' => 'Stvaranje povezanog unosa i povezivanje sa postojećim unosom će biti vidljivo u toku vijesti.',
      'linkMultipleField' => 'Višestuka veza polja pruža zgodan način za uređivanje odnosa. Nemojte ga koristiti ako imate veliki broj povezanih zapisa.',
      'entityType' => 'Bazni plus - ima aktivnosti, povijesti i panele zadataka.

Događaj - Dostupan u kalendaru i panelu aktivnosti.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Izvoz svih polja',
      'fieldList' => 'Lista Polja',
      'format' => 'Format',
    ),
    'options' => 
    array (
      'format' => 
      array (
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel),',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'version' => 'Verzija',
      'description' => 'Opis',
      'isInstalled' => 'Instalirano',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstaliraj',
      'Install' => 'Instaliraj',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Ekstenzija {name} je deinstalirana',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Poveži',
      'Connected' => 'Povezano',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dinamička Logika',
      'Name' => 'Naziv',
      'Label' => 'Natpis',
      'Type' => 'Vrsta',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Nema',
        'javascript: return this.dateTime.getNow(1);' => 'Sada',
        'javascript: return this.dateTime.getNow(5);' => 'Sada (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Sada (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Sada (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 sat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 sata',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 sata',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 sata',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 Sati',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 dan',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 Dan(a)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 Dan(a)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dana.',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dana.',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dana.',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 tjedan',
      ),
      'dateDefault' => 
      array (
        '' => 'Nema',
        'javascript: return this.dateTime.getToday();' => 'Danas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 Dan',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 Dan(a)',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 tjedan',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 tjedna',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 tjedna',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mjesec',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 mjeseca',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 mjeseca',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 mjeseca',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 mjeseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 mjeseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 mjeseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 mjeseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 mjeseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 mjeseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 mjeseci',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 godina',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Ispravke će biti vidljive u toku vijesti.',
      'required' => 'Polje će biti obavezno. Ne može ostati prazno.',
      'default' => 'Vrijednost će biti postavljena na početnu.',
      'min' => 'Min prihvatljiva vrijednost.',
      'max' => 'Maks prihvatljiva vrijednost.',
      'seeMoreDisabled' => 'Ako nije odznačeno onda će dugi tekstovi biti skraćeni.',
      'lengthOfCut' => 'Koliko teksta može biti prije skraćivanja.',
      'maxLength' => 'Maksimalna prihvatljiva dužina teksta.',
      'before' => 'Vrijednost datuma mora biti prije datumske vrijednosti određenog polja.',
      'after' => 'Vrijednost datuma mora biti poslije datumske vrijednosti određenog polja.',
      'readOnly' => 'Vrijednost polja ne može biti određen od strane korisnika. Ali može se izračunati formulom.',
      'maxFileSize' => 'Ako je prazno ili 0, nema ograničenja.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Ulica',
        'city' => 'Grad',
        'state' => 'Država',
        'country' => 'Zemlja',
        'postalCode' => 'Poštanski broj',
        'map' => 'Mapa',
      ),
      'personName' => 
      array (
        'salutation' => 'Titula',
        'first' => 'Prvi',
        'last' => 'Zadnji',
      ),
      'currency' => 
      array (
        'converted' => '(Konvertirano)',
        'currency' => '(Valuta)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Datum',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-pošta',
      'User' => 'Korisnik',
      'Team' => 'Tim',
      'Role' => 'Uloga',
      'EmailTemplate' => 'Šablona e-pošte',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Osobni račun e-pošte',
      'EmailAccountScope' => 'Osobni račun e-pošte',
      'OutboundEmail' => 'Odlazna e-pošta',
      'ScheduledJob' => 'Zakazane radnje',
      'ExternalAccount' => 'Vanjski račun',
      'Extension' => 'Ekstenzija',
      'Dashboard' => 'Radna površina',
      'InboundEmail' => 'Grupni račun e-pošte',
      'Stream' => 'Tok vijesti',
      'Import' => 'Uvoz',
      'Template' => 'Šablona',
      'Job' => 'Posao',
      'EmailFilter' => 'Filter e-pošte',
      'Portal' => 'Portal',
      'PortalRole' => 'Uloga za portal',
      'Attachment' => 'Prilog',
      'EmailFolder' => 'Mapa e-pošte',
      'PortalUser' => 'Korisnik portala',
      'ScheduledJobLogRecord' => 'Upis dnevnika zakazanih poslova',
      'PasswordChangeRequest' => 'Zahtjev za promjenom lozinke',
      'ActionHistoryRecord' => 'Zapis Povijesti Akcija',
      'AuthToken' => 'Auth token',
      'UniqueId' => 'Jedinstveni ID',
      'LastViewed' => 'Poslednji put pregledano',
      'Settings' => 'Postavke',
      'FieldManager' => 'Upravljanje poljima',
      'Integration' => 'Integracija',
      'LayoutManager' => 'Upravljanje izgledom',
      'EntityManager' => 'Upravljanje entitetima',
      'Export' => 'Izvoz',
      'DynamicLogic' => 'Dinamička logika',
      'DashletOptions' => 'Opcije za dashlet',
      'Admin' => 'Admin',
      'Global' => 'Globalno',
      'Preferences' => 'Postavke',
      'EmailAddress' => 'Adresa e-pošte',
      'PhoneNumber' => 'Telefonski broj',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Tvrtka',
      'Contact' => 'Kontakt',
      'Lead' => 'Izvor',
      'Target' => 'Meta',
      'Opportunity' => 'Prilika',
      'Meeting' => 'Sastanak',
      'Calendar' => 'Kalendar',
      'Call' => 'Poziv',
      'Task' => 'Zadatak',
      'Case' => 'Prijava problema',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Mapa dokumenta',
      'Campaign' => 'Kampanja',
      'TargetList' => 'Lista meta',
      'MassEmail' => 'Masovna e-pošta',
      'EmailQueueItem' => 'Email sa liste čekanja',
      'CampaignTrackingUrl' => 'URL za praćenje',
      'Activities' => 'Aktivnosti',
      'KnowledgeBaseArticle' => 'Baza znanja članak',
      'KnowledgeBaseCategory' => 'Baza znanja kategorija',
      'CampaignLogRecord' => 'Upis dnevnika kampanje',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-poruke',
      'User' => 'Korisnici',
      'Team' => 'Timovi',
      'Role' => 'Uloge',
      'EmailTemplate' => 'Šablone e-pošte',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Osobni računi e-pošte',
      'EmailAccountScope' => 'Osobni računi e-pošte',
      'OutboundEmail' => 'Odlazne e-pošte',
      'ScheduledJob' => 'Zakazane radnje',
      'ExternalAccount' => 'Vanjski računi',
      'Extension' => 'Ekstenzije',
      'Dashboard' => 'Radna površina',
      'InboundEmail' => 'Grupni računi e-pošte',
      'Stream' => 'Tok viesti',
      'Import' => 'Rezultati uvoza',
      'Template' => 'Šablone',
      'Job' => 'Radnje',
      'EmailFilter' => 'Filteri e-pošte',
      'Portal' => 'Portali',
      'PortalRole' => 'Uloge za portal',
      'Attachment' => 'Prilozi',
      'EmailFolder' => 'Mapa e-pošte',
      'PortalUser' => 'Korisnici portala',
      'ScheduledJobLogRecord' => 'Upisi dnevnika zakazanih poslova',
      'PasswordChangeRequest' => 'Zahtjevi za promjenama lozinke',
      'ActionHistoryRecord' => 'Povijest akcija',
      'AuthToken' => 'Auth Tokeni',
      'UniqueId' => 'Jedinstveni ID-evi',
      'LastViewed' => 'Posljednji put pregledano',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Tvrtke',
      'Contact' => 'Kontakti',
      'Lead' => 'Izvori',
      'Target' => 'Mete',
      'Opportunity' => 'Prilike',
      'Meeting' => 'Sastanci',
      'Calendar' => 'Kalendar',
      'Call' => 'Pozivi',
      'Task' => 'Zadaci',
      'Case' => 'Prijave problema',
      'Document' => 'Dokumenti',
      'DocumentFolder' => 'Mape Dokumenata',
      'Campaign' => 'Kampanje',
      'TargetList' => 'Liste meta',
      'MassEmail' => 'Masovne e-pošta',
      'EmailQueueItem' => 'Email sa liste za čekanje',
      'CampaignTrackingUrl' => 'Praćenje URL-ova',
      'Activities' => 'Aktivnosti',
      'KnowledgeBaseArticle' => 'Baza znanja',
      'KnowledgeBaseCategory' => 'Baza znanja Kategorije',
      'CampaignLogRecord' => 'Upisi dnevnika kampanje',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' => 
    array (
      'Misc' => 'Ostalo',
      'Merge' => 'Spoji',
      'None' => 'Nema',
      'Home' => 'Početna',
      'by' => 'od',
      'Saved' => 'Spremljeno',
      'Error' => 'Greška',
      'Select' => 'Odaberite',
      'Not valid' => 'Nije točan',
      'Please wait...' => 'Pričekajte...',
      'Please wait' => 'Pričekajte',
      'Loading...' => 'Učitavanje...',
      'Uploading...' => 'Prijenos...',
      'Sending...' => 'Slanje...',
      'Merging...' => 'Spajanje ...',
      'Merged' => 'Spojeno',
      'Removed' => 'Obrisano',
      'Posted' => 'Objavljeno',
      'Linked' => 'Povezano',
      'Unlinked' => 'Nepovezano',
      'Done' => 'Obavljeno',
      'Access denied' => 'Pristup odbijen',
      'Not found' => 'Nije pronađeno',
      'Access' => 'Pristup',
      'Are you sure?' => 'Jeste li sigurni?',
      'Record has been removed' => 'Zapis je obrisan',
      'Wrong username/password' => 'Pogrešno korisničko ime / lozinka',
      'Post cannot be empty' => 'Unos ne može biti prazan',
      'Removing...' => 'Brisanje ...',
      'Unlinking...' => 'Opoziv poveznice ...',
      'Posting...' => 'Postavljanje ...',
      'Username can not be empty!' => 'Korisničko ime ne može biti prazno!',
      'Cache is not enabled' => 'Cache nije omogućen',
      'Cache has been cleared' => 'Cache je obrisan',
      'Rebuild has been done' => 'Obnova je izvršena',
      'Return to Application' => 'Povratak na aplikaciju',
      'Saving...' => 'Spremanje...',
      'Modified' => 'Izmjenjeno',
      'Created' => 'Kreirano',
      'Create' => 'Kreiraj',
      'create' => 'kreiraj',
      'Overview' => 'Pregled',
      'Details' => 'Detaljno',
      'Add Field' => 'Dodaj polje',
      'Add Dashlet' => 'Dodaj Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Izmjena radne površine',
      'Add' => 'Dodaj',
      'Add Item' => 'Dodajte stavku',
      'Reset' => 'Resetiranje',
      'Menu' => 'Izbornik',
      'More' => 'Još',
      'Search' => 'Pretraga',
      'Only My' => 'Samo moje',
      'Open' => 'Otvori',
      'Admin' => 'Admin',
      'About' => 'O...',
      'Refresh' => 'Osvježi',
      'Remove' => 'Obriši',
      'Options' => 'Opcije',
      'Username' => 'Korisničko ime',
      'Password' => 'Lozinka',
      'Login' => 'Prijava',
      'Log Out' => 'Odjavljivanje',
      'Preferences' => 'Postavke',
      'State' => 'Status',
      'Street' => 'Ulica',
      'Country' => 'Zemlja',
      'City' => 'Grad',
      'PostalCode' => 'Poštanski broj',
      'Followed' => 'Prati se',
      'Follow' => 'Pratiti',
      'Followers' => 'Pratitelji',
      'Clear Local Cache' => 'Očisti lokalni cache',
      'Actions' => 'Akcije',
      'Delete' => 'Brisanje',
      'Update' => 'Izmjena',
      'Save' => 'Spremanje',
      'Edit' => 'Izmjena',
      'View' => 'Pregled',
      'Cancel' => 'Otkaži',
      'Apply' => 'Primjeniti',
      'Unlink' => 'Micanje Poveznice',
      'Mass Update' => 'Masovna izmjena',
      'Export' => 'Izvoz',
      'No Data' => 'Nema podataka',
      'No Access' => 'Nema pristupa',
      'All' => 'Sve',
      'Active' => 'Aktivan',
      'Inactive' => 'Neaktivan',
      'Write your comment here' => 'Napišite vaš komentar ovdje',
      'Post' => 'Unos',
      'Stream' => 'Tok vijesti',
      'Show more' => 'Prikaži više',
      'Dashlet Options' => 'Dashlet Opcije',
      'Full Form' => 'Cijela forma',
      'Insert' => 'Umetanje',
      'Person' => 'Osoba',
      'First Name' => 'Ime',
      'Last Name' => 'Prezime',
      'Original' => 'Original',
      'You' => 'Ti',
      'you' => 'ti',
      'change' => 'promjena',
      'Change' => 'Promjena',
      'Primary' => 'Primarno',
      'Save Filter' => 'Spremi filter',
      'Administration' => 'Administracija',
      'Run Import' => 'Pokreni uvoz',
      'Duplicate' => 'Dupliciraj',
      'Notifications' => 'Obavijesti',
      'Mark all read' => 'Označi sve kao pročitano',
      'See more' => 'Vidi više',
      'Today' => 'Danas',
      'Tomorrow' => 'Sutra',
      'Yesterday' => 'Jučer',
      'Submit' => 'Pošalji',
      'Close' => 'Zatvori',
      'Yes' => 'Da',
      'No' => 'Ne',
      'Select All Results' => 'Izaberi sve rezultate',
      'Value' => 'Vrijednost',
      'Current version' => 'Trenutna verzija',
      'List View' => 'Tablični prikaz',
      'Tree View' => 'Hijerarhijski prikaz',
      'Unlink All' => 'Ukloni sve poveznice',
      'Total' => 'Ukupno',
      'Print to PDF' => 'Ispis u PDF',
      'Default' => 'Početno',
      'Number' => 'Broj',
      'From' => 'Od',
      'To' => 'Za',
      'Create Post' => 'Kreiraj unos',
      'Previous Entry' => 'Prethodni unos',
      'Next Entry' => 'Slijedeći unos',
      'View List' => 'Tablični Prikaz',
      'Attach File' => 'Priložite datoteku',
      'Skip' => 'Preskoči',
      'Attribute' => 'Atribut',
      'Function' => 'Funkcija',
      'Self-Assign' => 'Samo-dodjela',
      'Self-Assigned' => 'Samo-dodijeljeno',
      'Expand' => 'Raširi',
      'Collapse' => 'Suzi',
      'New notifications' => 'Nove obavijesti',
      'Manage Categories' => 'Upravljanje Kategorijama',
      'Manage Folders' => 'Upravljanje Mapama',
      'Convert to' => 'Convert to',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Erase',
      'Move Over' => 'Move Over',
      'Create InboundEmail' => 'Napravite dolazni Email',
      'Activities' => 'Aktivnosti',
      'History' => 'Povijest',
      'Attendees' => 'Uzvanici',
      'Schedule Meeting' => 'Zakaži sastanak',
      'Schedule Call' => 'Zakaži poziv',
      'Compose Email' => 'Sastavi e-poštu',
      'Log Meeting' => 'Zabilježi sastanak',
      'Log Call' => 'Zabilježi poziv',
      'Archive Email' => 'Arhiva E-pošte',
      'Create Task' => 'Napravi Zadatak',
      'Tasks' => 'Zadaci',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Pričekajte...',
      'posting' => 'Postavljanje ...',
      'loading' => 'Učitava se...',
      'saving' => 'Spremanje...',
      'confirmLeaveOutMessage' => 'Jeste li sigurni da želite odustati od unosa?',
      'notModified' => 'Niste promijenili zapis',
      'duplicate' => 'Upis koji stvarate možda već postoji',
      'dropToAttach' => 'Dovuci za prilaganje',
      'fieldIsRequired' => '{field} je obavezno',
      'fieldShouldBeEmail' => '{field} treba biti važeći e-mail',
      'fieldShouldBeFloat' => '{field} treba biti važeći decimlani broj',
      'fieldShouldBeInt' => '{field} treba biti važeći celi broj',
      'fieldShouldBeDate' => '{field} treba biti važeći datum',
      'fieldShouldBeDatetime' => '{field} treba biti važeći datum / vrijeme',
      'fieldShouldAfter' => '{Field} mora biti nakon {otherField}',
      'fieldShouldBefore' => '{field} mora biti prije {otherField}',
      'fieldShouldBeBetween' => '{Field} mora biti između {min} i {max}',
      'fieldShouldBeLess' => '{Field} treba da bude manje od {value}',
      'fieldShouldBeGreater' => '{Field} mora biti veće od {value}',
      'fieldBadPasswordConfirm' => '{Field} nije potvrđeno',
      'fieldMaxFileSizeError' => 'Ne smije premašiti {max} Mb',
      'fieldIsUploading' => 'Prijenos u toku',
      'resetPreferencesDone' => 'Postavke su vraćene na početne',
      'confirmation' => 'Jeste li sigurni?',
      'unlinkAllConfirmation' => 'Jeste li sigurni da želite maknuti vezu između svih povezanih zapisa?',
      'resetPreferencesConfirmation' => 'Jeste li sigurni da želite da vratite postavke na početne?',
      'removeRecordConfirmation' => 'Jeste li sigurni da želite obrisati zapis?',
      'unlinkRecordConfirmation' => 'Jeste li sigurni da želite maknuti poveznicu?',
      'removeSelectedRecordsConfirmation' => 'Jeste li sigurni da želite obrisati odabrane zapise?',
      'massUpdateResult' => '{Count} zapisa je izmijenjeno',
      'massUpdateResultSingle' => '{Count} zapis je izmijenjen',
      'noRecordsUpdated' => 'Nisu izvršene izmjene',
      'massRemoveResult' => '{count} zapisa je obrisano',
      'massRemoveResultSingle' => '{count} zapis je obrisan',
      'noRecordsRemoved' => 'Nije obrisan niti jedan zapis',
      'clickToRefresh' => 'Kliknite za osvježavanje',
      'streamPostInfo' => 'Unesi <strong>@imekoriniska</strong> da ga spomenete.

Dostupna sintaksa:
`<code>kod</code>`
```<code>multilinijski kod</code>```
**<strong>strong tekst</strong>**
*<em>naglašeni tekst</em>*
~~<del>obrisan tekst</del>~~
> blockquote
[link text](url)',
      'writeYourCommentHere' => 'Napišite vaš komentar ovdje',
      'writeMessageToUser' => 'Napišite poruku za {user}',
      'writeMessageToSelf' => 'Napiši poruku na tok vijesti',
      'typeAndPressEnter' => 'Ukucajte & pritisnite enter',
      'checkForNewNotifications' => 'Provjerite za nove obavijesti',
      'checkForNewNotes' => 'Provjeri izmjene toka vijesti',
      'internalPost' => 'Objavu će vidjeti samo interni korisnici',
      'internalPostTitle' => 'Post se prikazuju samo internim korisnicima',
      'done' => 'Izvršeno',
      'confirmMassFollow' => 'Da li ste sigurni da želite pratiti odabrane unose?',
      'confirmMassUnfollow' => 'Da li ste sigurni da ne želite pratiti odabrane unose?',
      'massFollowResult' => '{count} unosa se prati',
      'massUnfollowResult' => '{count} unosa se ne prati',
      'massFollowResultSingle' => '{count} unos se prati',
      'massUnfollowResultSingle' => '{count} unos se ne prati',
      'massFollowZeroResult' => 'Ništa se ne prati',
      'massUnfollowZeroResult' => 'Za ništa nije prekinuto praćenje',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Samo moje',
      'followed' => 'Prati se',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Prati se',
      'all' => 'Sve',
    ),
    'massActions' => 
    array (
      'remove' => 'Makni',
      'merge' => 'Spoji',
      'massUpdate' => 'Masovna izmjena',
      'export' => 'Izvoz...',
      'follow' => 'Pratiti',
      'unfollow' => 'Otkaži praćenje',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'firstName' => 'Ime',
      'lastName' => 'Prezime',
      'salutationName' => 'Titula',
      'assignedUser' => 'Dodijeljeno korisniku',
      'assignedUsers' => 'Dodijeljeno korisnicima',
      'emailAddress' => 'E-pošta',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Dodijeljeno korisničko ime',
      'teams' => 'Timovi',
      'createdAt' => 'Napravljeno u',
      'modifiedAt' => 'Izmjenjeno u',
      'createdBy' => 'Napravio',
      'modifiedBy' => 'Izmjenio',
      'description' => 'Opis',
      'address' => 'Adresa',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (mobitel)',
      'phoneNumberHome' => 'Telefon (kućni)',
      'phoneNumberFax' => 'Telefon (Faks)',
      'phoneNumberOffice' => 'Telefon (kanc)',
      'phoneNumberOther' => 'Telefon (Drugo)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Redoslijed',
      'parent' => 'Master',
      'children' => 'Child',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Grad',
      'billingAddressCountry' => 'Zemlja',
      'billingAddressPostalCode' => 'Poštanski broj',
      'billingAddressState' => 'Zemlja',
      'billingAddressStreet' => 'Ulica',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Grad',
      'addressStreet' => 'Ulica',
      'addressCountry' => 'Zemlja',
      'addressState' => 'Zemlja',
      'addressPostalCode' => 'Poštanski broj',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Grad (Dostava)',
      'shippingAddressStreet' => 'Ulica (Dostava)',
      'shippingAddressCountry' => 'Država (Dostava)',
      'shippingAddressState' => 'Zemlja (Dostava)',
      'shippingAddressPostalCode' => 'Poštanski broj (dostava)',
      'shippingAddressMap' => 'Karta (Dostava)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Dodijeljen korisniku',
      'createdBy' => 'Napravio',
      'modifiedBy' => 'Izmijenio',
      'team' => 'Tim',
      'roles' => 'Uloge',
      'teams' => 'Timovi',
      'users' => 'Korisnici',
      'parent' => 'Roditelj',
      'children' => 'Children',
      'contacts' => 'Kontakti',
      'opportunities' => 'Prilike',
      'leads' => 'Izvori',
      'meetings' => 'Sastanci',
      'calls' => 'Pozivi',
      'tasks' => 'Zadaci',
      'emails' => 'E-poruke',
      'accounts' => 'Tvrtke',
      'cases' => 'Prijave problema',
      'documents' => 'Dokumenti',
      'account' => 'Tvrtka',
      'opportunity' => 'Prilika',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Tok vijesti',
      'Emails' => 'Moje primljene',
      'Records' => 'Lista zapisa',
      'Leads' => 'Moji izvori',
      'Opportunities' => 'Mojie prilike',
      'Tasks' => 'Moji zadaci',
      'Cases' => 'Moji prijavljeni problemi',
      'Calendar' => 'Kalendar',
      'Calls' => 'Moji pozivi',
      'Meetings' => 'Moji sastanci',
      'OpportunitiesByStage' => 'Prilike po fazama',
      'OpportunitiesByLeadSource' => 'Prilike po izvorima',
      'SalesByMonth' => 'Prodaja po mjesecima',
      'SalesPipeline' => 'Slijed prodaja',
      'Activities' => 'Moje aktivnosti',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} je dodijeljen tebi',
      'emailReceived' => 'E-pošta primljena od {from}',
      'entityRemoved' => '{user} obrisao {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} je postavio {entityType} {entity}',
      'attach' => '{user} je priložio {entityType} {entity}',
      'status' => '{user} je izmijenio {field} od {entityType} {entity}',
      'update' => '{user} je izmijenio {entityType} {entity}',
      'postTargetTeam' => '{user} je objavio timu {target}',
      'postTargetTeams' => '{user} je objavio timovima {target}',
      'postTargetPortal' => '{user} je objavio na portalu {target}',
      'postTargetPortals' => '{user} je objavio na portalima {target}',
      'postTarget' => '{user} je postavio objavu na {target}',
      'postTargetYou' => '{user} je objavio tebi',
      'postTargetYouAndOthers' => '{user} je objavio {target} i tebi',
      'postTargetAll' => '{user} je objavio svima',
      'postTargetSelf' => '{user} samo objavio',
      'postTargetSelfAndOthers' => '{user} je objavio {target} i samom sebi ',
      'mentionInPost' => '{user} je spomenuo {mentioned} u {entityType} {entity}',
      'mentionYouInPost' => '{user} je spomenuo tebe u {entityType} {entity}',
      'mentionInPostTarget' => '{user} je spomenuo {mentioned} u objavi',
      'mentionYouInPostTarget' => '{user} je spomenuo tebe u objavi prema {target}',
      'mentionYouInPostTargetAll' => '{user} je spomenuo tebe u objavi svima',
      'mentionYouInPostTargetNoTarget' => '{user} te spominje u objavi',
      'create' => '{user} je napravio {entityType} {entity}',
      'createThis' => '{user} je napravio ovo {entityType}',
      'createAssignedThis' => '{user} je napravio ovo {entityType} i zadužio {assignee}',
      'createAssigned' => '{user} je napravio {entityType} {entity} i zadužio {assignee}',
      'createAssignedYou' => '{user} je napravio {entityType} {entity} i dodijeljen je tebi',
      'createAssignedThisSelf' => '{user} je napravio ovaj {entityType} i dodijelio sam sebi',
      'createAssignedSelf' => '{user} je napravio {entityType} {entity} i dodijelio sebi',
      'assign' => '{user} je zadužio {assignee} za {entityType} {entity}',
      'assignThis' => '{user} je zadužio {assignee} za {entityType} ',
      'assignYou' => '{user} je dodijelio {entityType} {entity} tebi',
      'assignThisVoid' => '{user} je uklonio dodjelu za {entityType}',
      'assignVoid' => '{user} je uklonio dodjelu za {entityType} {entity}',
      'assignThisSelf' => '{user} je dodjelio sebi ovaj {entityType}',
      'assignSelf' => '{user} je sebi dodjelio {entityType} {entity}',
      'postThis' => '{user} je objavio',
      'attachThis' => '{user} je priložio',
      'statusThis' => '{user} je izmijenio {field}',
      'updateThis' => '{user} je izmijenio ovo {entityType}',
      'createRelatedThis' => '{user} je napravio {relatedEntityType} {relatedEntity} koji je povezan sa ovim {entityType}',
      'createRelated' => '{user} je napravio {relatedEntityType} {relatedEntity} koje je povezan sa {entityType} {entity}',
      'relate' => '{user} je povezao {relatedEntityType} {relatedEntity} sa {entityType} {entity}',
      'relateThis' => '{user} je povezao {relatedEntityType} {relatedEntity} sa ovim {entityType}',
      'emailReceivedFromThis' => 'E-pošta primljena od {from}',
      'emailReceivedInitialFromThis' => 'E-pošta primljena od {from}, {entityType} je napravljen',
      'emailReceivedThis' => 'E-pošta primljena',
      'emailReceivedInitialThis' => 'E-pošta primljena, {entitiTipe} je napravljen',
      'emailReceivedFrom' => 'E-pošta primljena od {from}, u vezi sa {entityType} {entity}',
      'emailReceivedFromInitial' => 'E-pošta primljena od {from}, {entityType} {entity} je napravljen',
      'emailReceived' => 'E-pošta primljena u vezi sa {entityType} {entity}',
      'emailReceivedInitial' => 'E-pošta primljena: {entityType} {entity} je napravljen',
      'emailReceivedInitialFrom' => 'E-pošta primljena od {from}, {entityType} {entity} je napravljen',
      'emailSent' => '{by} poslao e-mail u vezi sa {entityType} {entity}',
      'emailSentThis' => '{by} je poslao e-poštu',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user} je pisao {target} i sebi',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user} je pisao {target} i sebi',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Siječanj',
        1 => 'Veljača',
        2 => 'Ožujak ',
        3 => 'Travanj',
        4 => 'Svibanj',
        5 => 'Lipanj',
        6 => 'Srpanj',
        7 => 'Kolovoz',
        8 => 'Rujan',
        9 => 'Listopad',
        10 => 'Studeni',
        11 => 'Prosinac',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Sij',
        1 => 'Velj',
        2 => 'Ožu',
        3 => 'Tra',
        4 => 'Svi',
        5 => 'Lip',
        6 => 'Srp',
        7 => 'Kol',
        8 => 'Ruj',
        9 => 'Lis',
        10 => 'Stu',
        11 => 'Pro',
      ),
      'dayNames' => 
      array (
        0 => 'Nedjelja',
        1 => 'Ponedjeljak',
        2 => 'Utorak',
        3 => 'Srijeda',
        4 => 'Četvrtak',
        5 => 'Petak',
        6 => 'Subota',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Ned.',
        1 => 'Pon.',
        2 => 'Uto.',
        3 => 'Sri.',
        4 => 'Čet.',
        5 => 'Pet.',
        6 => 'Sub.',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Ne',
        1 => 'Po',
        2 => 'Ut',
        3 => 'Sr',
        4 => 'Če',
        5 => 'Pe',
        6 => 'Su',
      ),
    ),
    'durationUnits' => 
    array (
      'd' => 'd',
      'h' => 's',
      'm' => 'm',
      's' => 'sec',
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'G-din',
        'Mrs.' => 'Gđa',
        'Ms.' => 'Gđa',
        'Dr.' => 'Dr',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosanski',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'Njemački',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Španjolski (Meksiko)',
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
        'hr_HR' => 'Hrvatski',
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
        'on' => 'Uključen',
        'notOn' => 'Isključen',
        'after' => 'Poslije:',
        'before' => 'Prije:',
        'between' => 'Između',
        'today' => 'Danas',
        'past' => 'Prošli',
        'future' => 'Budući',
        'currentMonth' => 'Tekući mjesec',
        'lastMonth' => 'Prošlog meseca',
        'nextMonth' => 'Slijedeći Mjesec',
        'currentQuarter' => 'Trenutni kvartal',
        'lastQuarter' => 'Prethodni kvartal',
        'currentYear' => 'Tekuće godine',
        'lastYear' => 'Prošle godine',
        'lastSevenDays' => 'Posljednjih 7 dana',
        'lastXDays' => 'Posljednjih x dana',
        'nextXDays' => 'Slijedećih x dana',
        'ever' => 'Ikad',
        'isEmpty' => 'Je prazno',
        'olderThanXDays' => 'Stariji od x dana',
        'afterXDays' => 'Poslije x dana',
      ),
      'searchRanges' => 
      array (
        'is' => 'Je',
        'isEmpty' => 'Prazno',
        'isNotEmpty' => 'Nije prazno',
        'isOneOf' => 'Bilo koji od',
        'isFromTeams' => 'Je iz tima',
        'isNot' => 'Nije',
        'isNotOneOf' => 'Nijedno od',
        'anyOf' => 'Bilo koji od',
        'noneOf' => 'Nijedno od',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Jednak je',
        'like' => 'Je kao (%)',
        'notLike' => 'Nije kao (%)',
        'startsWith' => 'Počinje sa',
        'endsWith' => 'Završava sa',
        'contains' => 'Sadrži',
        'notContains' => 'Ne sadrži',
        'isEmpty' => 'Prazno',
        'isNotEmpty' => 'Nije prazno',
        'notEquals' => 'Nije jednako',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Jednako je',
        'notEquals' => 'Nije jednako',
        'greaterThan' => 'Veće od',
        'lessThan' => 'Manje od',
        'greaterThanOrEquals' => 'Veće ili jednako',
        'lessThanOrEquals' => 'Manje ili jednako',
        'between' => 'Između',
        'isEmpty' => 'Je prazno',
        'isNotEmpty' => 'Nije prazno',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nema',
        '0.5' => '30 sekundi',
        1 => '1 minuta',
        2 => '2 minute',
        5 => '5 minuta',
        10 => '10 minuta',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobitel',
        'Office' => 'Kancelarija',
        'Fax' => 'Faks',
        'Home' => 'Kućni',
        'Other' => 'Drugo',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Iskačući',
        'Email' => 'E-porukom',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Možete pronaći prevod ovdje: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Podebljan',
          'italic' => 'Nakošen',
          'underline' => 'Podvučen',
          'strike' => 'Precrtan',
          'clear' => 'Ukloni stil fonta',
          'height' => 'Visina linije',
          'name' => 'Obitelj fontova',
          'size' => 'Veličina fonta',
        ),
        'image' => 
        array (
          'image' => 'Slika',
          'insert' => 'Ubaci sliku',
          'resizeFull' => 'Puna veličina',
          'resizeHalf' => 'Prepolovi veličinu',
          'resizeQuarter' => 'Četvrtina veličine',
          'floatLeft' => 'Poravnaj lijevo',
          'floatRight' => 'Poravnaj desno',
          'floatNone' => 'Bez poravnavanja',
          'dragImageHere' => 'Prevuci sliku ovdje',
          'selectFromFiles' => 'Izaberite neku od datoteka',
          'url' => 'URL slike',
          'remove' => 'Ukloni sliku',
        ),
        'link' => 
        array (
          'link' => 'Veza',
          'insert' => 'Umetni Poveznicu',
          'unlink' => 'Obriši poveznicu',
          'edit' => 'Izmjena',
          'textToDisplay' => 'Tekst za prikaz',
          'url' => 'Na koji URL treba  voditi ovaj link?',
          'openInNewWindow' => 'Otvori u novom prozoru',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video veza',
          'insert' => 'Ubaci video',
          'url' => 'Video URL adresa?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram ili Dailymotion)',
        ),
        'table' => 
        array (
          'table' => 'Tablica',
        ),
        'hr' => 
        array (
          'insert' => 'Ubaci horizontalnu liniju',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normalno',
          'blockquote' => 'Citat',
          'pre' => 'Kod',
          'h1' => 'Naslov 1',
          'h2' => 'Naslov 2',
          'h3' => 'Naslov 3',
          'h4' => 'Naslov 4',
          'h5' => 'Naslov 5',
          'h6' => 'Naslov 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Spisak bez rednih brojeva',
          'ordered' => 'Spisak sa rednim brojevima',
        ),
        'options' => 
        array (
          'help' => 'Pomoć',
          'fullscreen' => 'Cijeli ekran',
          'codeview' => 'Pregled koda',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Izvuci red',
          'indent' => 'Uvuci red',
          'left' => 'Poravnaj lijevo',
          'center' => 'Centriraj',
          'right' => 'Poravnaj desno',
          'justify' => 'Poravnaj obostrano',
        ),
        'color' => 
        array (
          'recent' => 'Nedavna boja',
          'more' => 'Više boja',
          'background' => 'Boja pozadine',
          'foreground' => 'Boja teksta',
          'transparent' => 'Transparentan',
          'setTransparent' => 'Postavi kao transparentan',
          'reset' => 'Reset',
          'resetToDefault' => 'Reset na početne',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Prečice na tastaturi',
          'close' => 'Zatvori',
          'textFormatting' => 'Formatiranje teksta',
          'action' => 'Akcija',
          'paragraphFormatting' => 'Formatiranje paragrafa',
          'documentStyle' => 'Stil dokumenta',
        ),
        'history' => 
        array (
          'undo' => 'Unazad',
          'redo' => 'Unaprijed',
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
      'EspoVertical' => 'Espo sa bočnim izbornikom',
      'SakuraVertical' => 'Sakura sa bočnim izbornikom',
      'Violet' => 'Classic Violet',
      'VioletVertical' => 'Violet sa bočnim izbornikom',
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Haziblue sa bočnim izbornikom',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Poništi uvoz',
      'Return to Import' => 'Povratak na uvoz',
      'Run Import' => 'Pokreni uvoz',
      'Back' => 'Nazad',
      'Field Mapping' => 'Mapiranje polja',
      'Default Values' => 'Početne vrijednosti',
      'Add Field' => 'Dodaj polje',
      'Created' => 'Napravljeno',
      'Updated' => 'Ažurirano',
      'Result' => 'Rezultat',
      'Show records' => 'Prikazani unosi',
      'Remove Duplicates' => 'Ukloni duplikate',
      'importedCount' => 'Uvezeno (broj)',
      'duplicateCount' => 'Duplikati (broj)',
      'updatedCount' => 'Ažurirano (broj)',
      'Create Only' => 'Samo kreiraj',
      'Create and Update' => 'Kreiraj i izmijeni',
      'Update Only' => 'Samo izmijeni',
      'Update by' => 'Izmjena od',
      'Set as Not Duplicate' => 'Odredi da nije duplikat',
      'File (CSV)' => 'Datoteka (CSV);',
      'First Row Value' => 'Vrijednost prvog reda',
      'Skip' => 'Preskoči',
      'Header Row Value' => 'Vrijednost naslovnog reda',
      'Field' => 'Polje',
      'What to Import?' => 'Šta da uvozi?',
      'Entity Type' => 'Tip entiteta',
      'What to do?' => 'Šta da radim?',
      'Properties' => 'Svojstva',
      'Header Row' => 'Naslovni red',
      'Person Name Format' => 'Format imena osobe',
      'John Smith' => 'Pero Perić',
      'Smith John' => 'Perić Pero',
      'Smith, John' => 'Perić, Pero',
      'Field Delimiter' => 'Graničnik polja',
      'Date Format' => 'Format datuma',
      'Decimal Mark' => 'Decimalna oznaka',
      'Text Qualifier' => 'Kvalifikator teksta',
      'Time Format' => 'Format vremena',
      'Currency' => 'Valuta',
      'Preview' => 'Pregledaj',
      'Next' => 'Slijedeća',
      'Step 1' => 'Korak 1',
      'Step 2' => 'Korak 2',
      'Double Quote' => 'Navodnici',
      'Single Quote' => 'Apostrof',
      'Imported' => 'Uvezeni',
      'Duplicates' => 'Duplikati',
      'Skip searching for duplicates' => 'Preskočite potragu za duplikatima',
      'Timezone' => 'Vremenska zona',
      'Remove Import Log' => 'Obriši dnevnik uvoza',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Trebalo bi biti UTF-8 kodiranje',
      'duplicatesRemoved' => 'Duplikati uklonjeni',
      'inIdle' => 'Izvršava se u praznom hodu (za velike podatke; preko cron)',
      'revert' => 'Ova radnja će trajno obrisati sve uvezene zapise.',
      'removeDuplicates' => 'Ova radnja će obrisati sve uvezene zapise koji su protumačeni kao duplikati.',
      'confirmRevert' => 'Ova radnja će trajno obrisati sve uvezene zapise. Jeste li sigurni?',
      'confirmRemoveDuplicates' => 'Ova radnja će obrisati sve uvezene zapise koji su protumačeni kao duplikati. Jeste li sigurni?',
      'confirmRemoveImportLog' => 'Ova radnja briše dnevnik uvoza. Svi uvezeni zapisi će biti zadržani. Nećete moći vratiti zapise dnevnika. Jeste li sigurni?',
      'removeImportLog' => 'Ova radnja briše dnevnik uvoza. Svi uvezeni zapisi će biti zadržani. Koristiti samo ako ste sigurni da je uvoz prošao bez greške.',
    ),
    'fields' => 
    array (
      'file' => 'Datoteka',
      'entityType' => 'Tip entiteta',
      'imported' => 'Uvezeni zapisi',
      'duplicates' => 'Duplirani zapisi',
      'updated' => 'Ažurirani zapisi',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Neuspješno',
        'In Process' => 'U procesu',
        'Complete' => 'Gotovo',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'emailAddress' => 'Adresa e-pošte',
      'team' => 'Ciljani tim',
      'status' => 'Status',
      'assignToUser' => 'Zaduži korisnika',
      'host' => 'Host',
      'username' => 'Korisničko ime',
      'password' => 'Lozinka',
      'port' => 'Port',
      'monitoredFolders' => 'Nadgledani folderi',
      'trashFolder' => 'Folder za otpad',
      'ssl' => 'SSL',
      'createCase' => 'Napravi predmet',
      'reply' => 'Automatski odgovor',
      'caseDistribution' => 'Distribucija predmeta',
      'replyEmailTemplate' => 'Šablona odgovora na e-poštu',
      'replyFromAddress' => 'Odgovor sa adrese',
      'replyToAddress' => 'Adresa za slanje odgovora',
      'replyFromName' => 'Tko šalje odgovor',
      'targetUserPosition' => 'Pozicija ciljanog korisnika',
      'fetchSince' => 'Preuzmi od',
      'addAllTeamUsers' => 'Za sve korisnike tima',
      'teams' => 'Timovi',
      'sentFolder' => 'Mapa Poslane Pošte',
      'storeSentEmails' => 'Spremaj Poslanu Poštu',
      'useImap' => 'Dohvati E-poštu',
      'useSmtp' => 'Koristi SMTP',
      'smtpHost' => 'SMTP Server',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Aut',
      'smtpSecurity' => 'SMTP Sigurnost',
      'smtpUsername' => 'SMTP Korisničko ime',
      'smtpPassword' => 'SMTP Lozinka',
      'fromName' => 'Od Naziv',
      'smtpIsShared' => 'SMTP je dijeljen',
      'smtpIsForMassEmail' => 'SMTP je za Masovnu E-poštu',
    ),
    'tooltips' => 
    array (
      'reply' => 'Obavijesti e-pošiljaoce da je e-pošta primljena. 

 Samo jedna poruka će biti poslana određenom primaocu u određenom vremenskom periodu da se spriječi ponavljanje.',
      'createCase' => 'Automatski napravi prijavu problema za sve dolazne e-pošte.',
      'replyToAddress' => 'Navedite adresu ovog sandučića kako bi odgovori stizali u njega.',
      'caseDistribution' => 'Kako će prijave problema biti raspoređivane. Rasporediti direktno na korisnika ili unutar tima.',
      'assignToUser' => 'Korisnički predmeti će biti dodijeljeni',
      'team' => 'Predmeti tima će biti dodijeljeni.',
      'teams' => 'E-pošta timova će biti dodijeljena.',
      'targetUserPosition' => 'Korisnicima sa određenim položajem će dodijeljene prijave problema.',
      'addAllTeamUsers' => 'E-pošta će se pojaviti u Primljenim svih korisnika navedenih timova.',
      'monitoredFolders' => 'Više mapa mora biti odvojeno zarezom.',
      'smtpIsShared' => 'Ako je označeno, korisnici će moći slati email poruke koristeći ovaj SMTP. Dostupnost je upravljiva sa Ulogama, preko Dozvola za korištenje Grupnih računa E-pošte.',
      'smtpIsForMassEmail' => 'Ako je uključeno, SMTP će biti dostupan za masovne poruke.',
      'storeSentEmails' => 'Poslane poruke će biti spremljene na IMAP serveru.',
    ),
    'links' => 
    array (
      'filters' => 'Filteri',
      'emails' => 'E-poruke',
      'assignToUser' => 'Dodijeli korisniku',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
      ),
      'caseDistribution' => 
      array (
        '' => 'Nema',
        'Direct-Assignment' => 'Dirktna dodjela',
        'Round-Robin' => 'U krug',
        'Least-Busy' => 'Najmanje zauzet',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Stvoriti račun e-pošte',
      'IMAP' => 'IMAP',
      'Actions' => 'Akcije',
      'Main' => 'Glavni',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nemoguće povezivanje na IMAP server',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Omogućeno',
      'clientId' => 'ID klijenta',
      'clientSecret' => 'Tajna Klijenta',
      'redirectUri' => 'Preusmjeravanje URI',
      'apiKey' => 'API ključ',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google mape',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Izaberite neku integraciju iz menija.',
      'noIntegrations' => 'Nema integracija je na raspolaganju.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Dohvaćanje OAuth2.0 akreditiva iz Google konzole.</b></p><p>Posetite<a href="https://console.developers.google.com/project">Google konzolu</a> da dobijete OAuth2.0 akreditiv kao što su ID klijenta i Tajna Klijenta koje moraju znati i Google i EspoCRM.</p>',
      'GoogleMaps' => '<p>Nabavite API ključ <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">ovdje</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Izvrši u',
      'attempts' => 'Preostali pokušaji',
      'failedAttempts' => 'Neuspjelih pokušaja',
      'serviceName' => 'Usluga',
      'method' => 'Metoda',
      'methodName' => 'Metoda',
      'scheduledJob' => 'Zakazane radnje',
      'scheduledJobJob' => 'Naziv zakazane radnje',
      'data' => 'Podaci',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Čeka',
        'Success' => 'Uspješno',
        'Running' => 'Izvršavanje',
        'Failed' => 'Neuspješno',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Širina (%)',
      'link' => 'Veza',
      'notSortable' => 'Nije sortabilno',
      'align' => 'Poravnavanje',
      'panelName' => 'Ime panela',
      'style' => 'Stil',
      'sticked' => 'Ljepljivo',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Lijevo',
        'right' => 'Desno',
      ),
      'style' => 
      array (
        'default' => 'Podrazumijevano',
        'success' => 'Uspješno',
        'danger' => 'Opasnost',
        'info' => 'Info',
        'warning' => 'Upozorenje',
        'primary' => 'Primarno',
      ),
    ),
    'labels' => 
    array (
      'New panel' => 'Novi panel',
      'Layout' => 'Izgled',
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
      'post' => 'Objavi',
      'attachments' => 'Prilozi',
      'targetType' => 'Meta',
      'teams' => 'Timovi',
      'users' => 'Korisnici',
      'portals' => 'Portali',
      'type' => 'Vrsta',
      'isGlobal' => 'Je globalno',
      'isInternal' => 'Je interno',
      'related' => 'Povezano',
      'createdByGender' => 'Napravio spol',
      'data' => 'Podaci',
      'number' => 'Broj',
    ),
    'filters' => 
    array (
      'all' => 'Sve',
      'posts' => 'Objave',
      'updates' => 'Izmjene',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'sebi',
        'users' => 'određenom korisniku',
        'teams' => 'određenom timu',
        'all' => 'svim internim korisnicima',
        'portals' => 'korisnicima portala',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Napišite svoju poruku ovdje',
    ),
    'links' => 
    array (
      'superParent' => 'Super Nadležni',
      'related' => 'Povezano',
    ),
  ),
  'Portal' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'logo' => 'Logo',
      'url' => 'URL adresa',
      'portalRoles' => 'Uloge',
      'isActive' => 'Aktivan',
      'isDefault' => 'Je podrazumijevano',
      'tabList' => 'Lista kartica',
      'quickCreateList' => 'Lista za brzo pravljenje',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Jezik',
      'dashboardLayout' => 'Kontrolna tabela raspored',
      'dateFormat' => 'Format datuma',
      'timeFormat' => 'Format vremena',
      'timeZone' => 'Vremenska zona',
      'weekStart' => 'Prvi dan tjedna',
      'defaultCurrency' => 'Uobičajena valuta',
      'customUrl' => 'Prilagođeni URL',
      'customId' => 'Prilagođeni ID',
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
      'portalRoles' => 'Uloge',
      'notes' => 'Bilješke',
      'articles' => 'Članci Baze znanja',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Navedene Portal Uloge će se primijeniti na sve korisnike ovog portala.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Napravite portal',
      'User Interface' => 'Korisničko sučelje',
      'General' => 'Općenito',
      'Settings' => 'Postavke',
    ),
  ),
  'PortalRole' => 
  array (
    'fields' => 
    array (
      'exportPermission' => 'Dozvola Izvoza',
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Određuje da li portalski korisnik ima pravo izvoza podataka.',
    ),
    'labels' => 
    array (
      'Access' => 'Pristup',
      'Create PortalRole' => 'Stvoriti Portal ulogu',
      'Scope Level' => 'Nivo obuhvata',
      'Field Level' => 'Nivo polja',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Napravi korisnika portala',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format datuma',
      'timeFormat' => 'Format vremena',
      'timeZone' => 'Vremenska zona',
      'weekStart' => 'Prvi dan tjedna',
      'thousandSeparator' => 'Oznaka tisućica',
      'decimalMark' => 'Decimalna oznaka',
      'defaultCurrency' => 'Uobičajena valuta',
      'currencyList' => 'Popis valuta',
      'language' => 'Jezik',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizacija',
      'smtpSecurity' => 'Sigurnost',
      'smtpUsername' => 'Korisničko ime',
      'emailAddress' => 'Adresa e-pošte',
      'smtpPassword' => 'Lozinka',
      'smtpEmailAddress' => 'Adresa e-pošte',
      'exportDelimiter' => 'Graničnik izvoza',
      'receiveAssignmentEmailNotifications' => 'E-mail obavijesti prilikom dodeljivanja',
      'receiveMentionEmailNotifications' => 'Email obavijesti o spominjanju u postovima',
      'receiveStreamEmailNotifications' => 'E-mail obavijesti o porukama i ažuriranju statusa',
      'autoFollowEntityTypeList' => 'Globalni Auto-Follow',
      'signature' => 'E-pošta potpis',
      'dashboardTabList' => 'Lista kartica',
      'defaultReminders' => 'Početni podsjetnici',
      'theme' => 'Tema',
      'useCustomTabList' => 'Prilagođena Lista kartica',
      'tabList' => 'Lista kartica',
      'emailReplyToAllByDefault' => 'Postavi \'Odgovori na sve\' kao početnu vrijednost',
      'dashboardLayout' => 'Raspored za Kontrolni prikaz',
      'emailReplyForceHtml' => 'E-mail odgovor u HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Ne popunjavaj automatski dodijeljenog korisnika pri kreiranju zapisa',
      'followEntityOnStreamPost' => 'Automatsko slijeđenje zapisa nakon upisa u tok vijesti',
      'followCreatedEntities' => 'Automatsko slijeđenje kreiranih zapisa',
      'followCreatedEntityTypeList' => 'Automatsko slijeđenje kreiranih zapisa odabrane vrste entiteta',
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
        0 => 'Nedjelja',
        1 => 'Ponedjeljak',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Obavijesti',
      'User Interface' => 'Korisničko sučelje',
      'SMTP' => 'SMTP',
      'Misc' => 'Ostalo',
      'Locale' => 'Lokalno',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatically slijedi SVE nove zapise odabrane vrste entiteta (kreirane od svih korisnika). Kako bi bili u mogućnosti vidjeti informacije tijeka vijesti i primati obavijesti o svim zapisima u sustavu.',
      'doNotFillAssignedUserIfNotRequired' => 'Pri kreiranju zapisa, podatak "dodijeljeni korisnik" neće biti popunjen vlastitim imenom osim ako je polje obavezno za unos.',
      'followCreatedEntities' => 'Pri kreiranju zapisa, biti će automatski slijeđeni, čak i ako se dodijele drugom korisniku.',
      'followCreatedEntityTypeList' => 'Pri kreiranju zapisa vrste odabranog entiteta, biti će automatski slijeđeni, čak i ako se dodijele drugom korisniku.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'roles' => 'Uloge',
      'assignmentPermission' => 'Dozvola zaduživanja',
      'userPermission' => 'Dozvola korisnika',
      'portalPermission' => 'Dozvola za portal',
      'groupEmailAccountPermission' => 'Prava pristupa Grupnom računu E-pošte',
      'exportPermission' => 'Dozvola Izvoza',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
      'teams' => 'Timovi',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Omogućuje ograničavanje pristupa za dodjeljivanje zapisa i poruka drugim korisnicima.
sve - Nikakvo ograničenje
tim- može zadužiti i pisati samo članovima tima
ne- može zadužiti i pisati samo sebi',
      'userPermission' => 'Omogućava ograničavanje sposobnosti korisnicima da vide aktivnosti, kalendar i tok drugima 
sve - da vide sve
tim - mogu vidjeti aktivnosti samo članova tima
ne - ne vide.',
      'portalPermission' => 'Definira se pristup informacijama sa portala, mogućnost postavljanja poruka korisnicima portala.',
      'groupEmailAccountPermission' => 'Određuje pristup grupnim računima E-pošte, kao i mogućnost slanja grupnih SMTP poruka.',
      'exportPermission' => 'Određuje da li korisnik ima pravo izvoza podataka.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Pristup',
      'Create Role' => 'Pravljenje uloge',
      'Scope Level' => 'Nivo obuhvata',
      'Field Level' => 'Nivo polja',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nije podešeno',
        'enabled' => 'omogućeno',
        'disabled' => 'onemogućeno',
      ),
      'levelList' => 
      array (
        'all' => 'sve',
        'team' => 'tim',
        'account' => 'tvrtka',
        'contact' => 'kontakt',
        'own' => 'vlastiti',
        'no' => 'ne',
        'yes' => 'da',
        'not-set' => 'nije podešeno',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Čitanje',
      'edit' => 'Izmjena',
      'delete' => 'Brisanje',
      'stream' => 'Tok vijesti',
      'create' => 'Kreiranje',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Sve promjene u vidu kontrole pristupa će se primjenjivati nakon što se cache očisti.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'job' => 'Posao',
      'scheduling' => 'Zakazivanje',
    ),
    'links' => 
    array (
      'log' => 'Dnevnik',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Napravi zakazan posao',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Pospremanje',
        'CheckInboundEmails' => 'Provjerite grupne račune e-pošte',
        'CheckEmailAccounts' => 'Provjerite osobne račune e-pošte',
        'SendEmailReminders' => 'Pošalji podsjetnike e-poštom',
        'AuthTokenControl' => 'Kontrola autorizacijskih tokena',
        'SendEmailNotifications' => 'Pošalji E-mail obavijesti',
        'CheckNewVersion' => 'Provjera za novom verzijom',
        'ProcessMassEmail' => 'Pošalji masovne e-pooruke',
        'ControlKnowledgeBaseArticleStatus' => 'Kontrola statusa članaka baze znanja',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Napomena: Dodajte ovu liniju u crontab datoteku za pokretanje ESPO zakazanih poslova:',
        'mac' => 'Napomena: Dodajte ovu liniju u crontab datoteku za pokretanje ESPO zakazanih poslova:',
        'windows' => 'Bilješka: Napravi datoteku sa slijedećim komandama kako bi se pokretali Espo zakazani poslovi koristeći Windows zakazane zadatke:',
        'default' => 'Napomena: Dodaj ovu komandu za Cron Job (Planirani Zadatak):',
      ),
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab bilješka. Definira učestalost posla.

*/5 * * * * - svakih 5 minuta

0 */2 * * * - svaka 2 sata

30 1 * * * - u 01:30 svakog dana

0 0 1 * * - prvog dana u mjesecu',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Vrijeme izvršenja',
      'target' => 'Meta',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Koristi cache',
      'dateFormat' => 'Format datuma',
      'timeFormat' => 'Format vremena',
      'timeZone' => 'Vremenska zona',
      'weekStart' => 'Prvi dan tjedna',
      'thousandSeparator' => 'Oznaka tisuća',
      'decimalMark' => 'Decimalna oznaka',
      'defaultCurrency' => 'Uobičajena valuta',
      'baseCurrency' => 'Osnovna valuta:',
      'currencyRates' => 'Rate Vrijednosti',
      'currencyList' => 'Spisak valuta',
      'language' => 'Jezik',
      'companyLogo' => 'Logo kompanije',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizacija',
      'smtpSecurity' => 'Sigurnost',
      'smtpUsername' => 'Korisničko ime:',
      'emailAddress' => 'Adresa e-pošte',
      'smtpPassword' => 'Lozinka',
      'outboundEmailFromName' => 'Od imena',
      'outboundEmailFromAddress' => 'Od Addresa',
      'outboundEmailIsShared' => 'Se dijeli',
      'recordsPerPage' => 'Zapisi po stranici',
      'recordsPerPageSmall' => 'Zapisa po stranici (mala str)',
      'tabList' => 'Lista kartica',
      'quickCreateList' => 'Brzo Kreiranje Liste',
      'exportDelimiter' => 'Graničnik izvoza',
      'globalSearchEntityList' => 'Globalna pretraga Liste entiteta',
      'authenticationMethod' => 'Metoda autentikacije',
      'ldapHost' => 'HOST',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorizacija',
      'ldapUsername' => 'Puni korisnički DN',
      'ldapPassword' => 'Lozinka',
      'ldapBindRequiresDn' => 'Bind zahtijeva DN',
      'ldapBaseDn' => 'Osnovni DN',
      'ldapAccountCanonicalForm' => 'Tvrtka kanonska Forma',
      'ldapAccountDomainName' => 'Naziv Domene Računa',
      'ldapTryUsernameSplit' => 'Pokušajte Podjelu Korisničkog Imena',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Napraviti korisnika u EspoCRM',
      'ldapSecurity' => 'Sigurnost',
      'ldapUserLoginFilter' => 'Filter prijava korisnika',
      'ldapAccountDomainNameShort' => 'Kratki Naziv Domene Računa',
      'ldapOptReferrals' => 'Opt Preporuke',
      'ldapUserNameAttribute' => 'Korisničko ime Atribut',
      'ldapUserObjectClass' => 'Korisnik ObjectClass',
      'ldapUserTitleAttribute' => 'Korisnik titula Atribut',
      'ldapUserFirstNameAttribute' => 'Korisnik Ime Atribut',
      'ldapUserLastNameAttribute' => 'Korisnik Prezime Atribut',
      'ldapUserEmailAddressAttribute' => 'Korisnik E-mail adresa Atribut',
      'ldapUserTeams' => 'Timovi korisnika',
      'ldapUserDefaultTeam' => 'Početni tim korisnika',
      'ldapUserPhoneNumberAttribute' => 'Korisnik broj telefona Atribut',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Onemogućiti izvoz (samo administratoru je dozvoljeno)',
      'assignmentNotificationsEntityList' => 'Za koje entitete se obavještava po dodjeli',
      'assignmentEmailNotifications' => 'Obavijesti prilikom dodjele',
      'assignmentEmailNotificationsEntityList' => 'Obim obavještavanja e-poštom pri dodjeli',
      'streamEmailNotifications' => 'Obavijesti o unosima u tok vijesti za interne korisnike',
      'portalStreamEmailNotifications' => 'Obavijesti o unosima u tok vijesti za korisnike portala',
      'streamEmailNotificationsEntityList' => 'Obim obavještavanja e-poštom za tok vijesti',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C režim',
      'avatarsDisabled' => 'Isključi avatare',
      'followCreatedEntities' => 'Slijedi kreirane zapise',
      'displayListViewRecordCount' => 'Prikaži ukupan broj (na prikazu: Lista)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Onemogući korisničke teme',
      'emailMessageMaxSize' => 'E-pošta maksimalna veličina (MB)',
      'massEmailMaxPerHourCount' => 'Maks broj e-pošta po satu',
      'personalEmailMaxPortionSize' => 'Maks veličina uvoza e-pošta za osobne račune',
      'inboundEmailMaxPortionSize' => 'Maks veličina uvoza e-pošta za grupne račune',
      'maxEmailAccountCount' => 'Maks broj ličnih naloga pošte po korisniku',
      'authTokenLifetime' => 'Dužina trajanja tokena za pristup (sati)',
      'authTokenMaxIdleTime' => 'Maksimalno trajanje tokena na čekanju (sati)',
      'dashboardLayout' => 'Izgled radne površine (standardan)',
      'siteUrl' => 'URL stranice',
      'addressPreview' => 'Adresa prikaza',
      'addressFormat' => 'Format adrese',
      'notificationSoundsDisabled' => 'Onemogućavanje zvukova obavijesti',
      'applicationName' => 'Ime aplikacije',
      'calendarEntityList' => 'Lista entiteta za kalendar',
      'mentionEmailNotifications' => 'Slati obavijesti e-porukom o pominjanju u unosima ',
      'massEmailDisableMandatoryOptOutLink' => 'Onemogućili obavezan link za oznaku "ne želi"',
      'activitiesEntityList' => 'Lista entiteta za aktivnosti',
      'historyEntityList' => 'Lista entiteta za povijest',
      'currencyFormat' => 'Format valute',
      'currencyDecimalPlaces' => 'Valuta decimale',
      'aclStrictMode' => 'ACL strogo',
      'aclAllowDeleteCreated' => 'Dozvola brisanja zapisa',
      'adminNotifications' => 'Sistemske obavijesti u administratorskom panelu',
      'adminNotificationsNewVersion' => 'Pokaži obavijest kada je dostupna nova EspoCRM verzija',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Koristi operator \'sadrži\' pri filtriranju tekst polja',
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
        0 => 'Nedjelja',
        1 => 'Ponedjeljak',
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
      'recordsPerPage' => 'Broj unosa prvotno prikazan u listama.',
      'recordsPerPageSmall' => 'Broj unosa prvobitno prikazan u panelima odnosa',
      'outboundEmailIsShared' => 'Dozvolite korisnicima da šalju poruke sa ove adrese.',
      'followCreatedEntities' => 'Korisnici će automatski pratiti unose koje naprave.',
      'emailMessageMaxSize' => 'Sve dolazne poruke e-pošte koje prelaze određenu veličinu će biti preuzete bez teksta i priloga.',
      'authTokenLifetime' => 'Definira koliko dugo tokeni mogu postojati.
0 - Znači da nema isteka.',
      'authTokenMaxIdleTime' => 'Definira koliko dugo nakon prethodnog pristupna token opstaje.
0 - Znači da nema isteka.',
      'userThemesDisabled' => 'Ako je označeno onda korisnici neće moći izabrati drugu temu.',
      'ldapUsername' => 'Kompletan zapis korisničkog DN-a koji omogućava da tražite druge korisnike. Npr "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'Lozinka za pristup u LDAP serveru.',
      'ldapAuth' => 'Korisnički podaci za pristup LDAP serveru.',
      'ldapUserNameAttribute' => 'Atribut za identifikaciju korisnika. 
Npr. "userPrincipalName" ili "sAMAccountName" za Active Directory, "uid" za OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass atribut za pretraživanje korisnika. Npr. "person" za AD, "inetOrgPerson " za OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Vrsta forme vašeg računa. Postoje 4 opcije:<br>- \'Dn\' - forma u formatu \'CN=tester,OU=espocrm,DC=test, DC=lan\'.<br>- \'Username\' - the form \'tester\'.<br>- \'Backslash\' - the form \'COMPANY\\tester\'.<br>- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Mogućnost da se korisničko ime formatira u DN formatu.',
      'ldapBaseDn' => 'DN osnova za pretragu korisnika. Npr. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Opcija da podijeli ime sa domenom.',
      'ldapOptReferrals' => 'ako poveznice moraju slijediti LDAP klijent.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Ova opcija dozvoljava da EspoCRM napravi LDAP korisnika.',
      'ldapUserFirstNameAttribute' => 'LDAP-atribut koji se koristi za određivanje korisničkog imena. Npr  "GivenName ".',
      'ldapUserLastNameAttribute' => 'LDAP-atribut koji se koristi za određivanje Prezimena. Npr. "sn".',
      'ldapUserTitleAttribute' => 'LDAP atribut koji se koristi za određivanje titule. Npr "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP-atribut koji se koristi za određivanje korisničke email adrese. Npr "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP-atribut koji se koristi za određivanje broja telefona korisnika. Npr "telephoneNumber ".',
      'ldapUserLoginFilter' => 'Filter koji dozvoljava ograničavanje korisničkog pristupa EspoCRM-a. Npr "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Domena koji se koristi za autorizaciju na LDAP serveru.',
      'ldapAccountDomainNameShort' => 'Kratka domena koji se koristi za autorizaciju na LDAP serveru.',
      'ldapUserTeams' => 'Timovi napravljenog korisnika. Za više detalja, pogledajte korisnički profil.',
      'ldapUserDefaultTeam' => 'Podrazumijevani tim za napravljenog korisnika. Za više detalja, pogledajte korisnički profil.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Po defaultu EspoCRM je prilagođen za B2B. Možete ga prebaciti na B2C.',
      'currencyDecimalPlaces' => 'Broj decimalnih mjesta. Ako je prazno, onda će biti prikazana sva decimalna mjesta.',
      'aclStrictMode' => 'Uključeno: Pristup entitetima će biti zabranjen ako nije određeno u ulogama.

Isključeno: Pristup entitetima će biti dozvoljen ako nije određeno u ulogama',
      'aclAllowDeleteCreated' => 'Korisnici će moći brisati samo vlastite zapise, čak i ako nemaju ovlast brisanja.',
      'textFilterUseContainsForVarchar' => 'Ako nije označeno, koristi se \'počinje sa\' operator. Možete koristiti asterisk \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
    ),
    'labels' => 
    array (
      'System' => 'Sistem',
      'Locale' => 'Locale',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguracija',
      'In-app Notifications' => 'Obavijesti u aplikaciji',
      'Email Notifications' => 'Obavijesti e-porukama',
      'Currency Settings' => 'Podešavanja valute',
      'Currency Rates' => 'Tečaj valuta',
      'Mass Email' => 'Masovna e-pošta',
      'Test Connection' => 'Test veze',
      'Connecting' => 'Povezivanje ...',
      'Activities' => 'Aktivnosti',
      'Admin Notifications' => 'Admin Obavijesti',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Veza uspješno uspostavljena.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'roles' => 'Uloge',
      'positionList' => 'Lista pozicija',
    ),
    'links' => 
    array (
      'users' => 'Korisnici',
      'notes' => 'Bilješke',
      'roles' => 'Uloge',
      'inboundEmails' => 'Grupni E-mail računi',
    ),
    'tooltips' => 
    array (
      'roles' => 'Pristupne uloge. Korisnici ovog tima dobivaju kontrolu pristupa za odabrane uloge.',
      'positionList' => 'Slobodne pozicije u ovom timu. Npr. prodavač, direktor.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Napravi tim',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'body' => 'Sadržaj',
      'entityType' => 'Vrsta entiteta',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Lijeva margina',
      'topMargin' => 'Gornja margina',
      'rightMargin' => 'Desna margina',
      'bottomMargin' => 'Donja margina',
      'printFooter' => 'Štampaj footer',
      'footerPosition' => 'Pozicija footera',
      'variables' => 'Dostupni zapisi',
      'pageOrientation' => 'Orijentacija stranice',
      'pageFormat' => 'Format stranice',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Napravi šablonu',
    ),
    'options' => 
    array (
      'pageOrientation' => 
      array (
        'Portrait' => 'Portret',
        'Landscape' => 'Pejzaž',
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
      'footer' => 'Koristiti {pageNumber} za ispis stranice određenog broja.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'userName' => 'Korisničko ime',
      'title' => 'Naslov',
      'isAdmin' => 'Je admin',
      'defaultTeam' => 'Početni tim',
      'emailAddress' => 'E-pošta',
      'phoneNumber' => 'Telefon',
      'roles' => 'Uloge',
      'portals' => 'Portali',
      'portalRoles' => 'Uloge za portal',
      'teamRole' => 'Položaj',
      'password' => 'Lozinka',
      'currentPassword' => 'Trenutna lozinka',
      'passwordConfirm' => 'Potvrdite lozinku',
      'newPassword' => 'Nova lozinka',
      'newPasswordConfirm' => 'Potvrdite novu lozinku',
      'avatar' => 'Avatar',
      'isActive' => 'Je aktivno',
      'isPortalUser' => 'Je korisnik portala',
      'contact' => 'Kontakt',
      'accounts' => 'Tvrtke',
      'account' => 'Tvrtka (osnovno)',
      'sendAccessInfo' => 'Pošaljite e-poštu sa pristupnim podacima za korisnike',
      'portal' => 'Portal',
      'gender' => 'Spol',
      'position' => 'Pozicija u timu',
      'ipAddress' => 'IP adresa',
      'passwordPreview' => 'Pregled lozinke',
      'isSuperAdmin' => 'Je Super Admin',
      'lastAccess' => 'Last Access',
      'acceptanceStatus' => 'Status prihvaćanja',
      'acceptanceStatusMeetings' => 'Status prihvaćanja (Sastanci)',
      'acceptanceStatusCalls' => 'Status prihvaćanja (pozivi)',
    ),
    'links' => 
    array (
      'teams' => 'Timovi',
      'roles' => 'Uloge',
      'notes' => 'Bilješke',
      'portals' => 'Portali',
      'portalRoles' => 'Uloge za portal',
      'contact' => 'Kontakt',
      'accounts' => 'Tvrtke',
      'account' => 'Tvrtka (osnovno)',
      'tasks' => 'Zadaci',
      'targetLists' => 'Liste meta',
    ),
    'labels' => 
    array (
      'Create User' => 'Napravi korisnika',
      'Generate' => 'Generiraj',
      'Access' => 'Pristup',
      'Preferences' => 'Postavke',
      'Change Password' => 'Promjena lozinke',
      'Teams and Access Control' => 'Timovi i kontrola pristupa',
      'Forgot Password?' => 'Zaboravili ste lozinku?',
      'Password Change Request' => 'Zahtjev za promjenu lozinke',
      'Email Address' => 'Adresa e-pošte',
      'External Accounts' => 'Eksterni računi',
      'Email Accounts' => 'Nalozi e-pošte',
      'Portal' => 'Portal',
      'Create Portal User' => 'Napravi korisnika portala',
      'Proceed w/o Contact' => 'Nastavite bez kontakta',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Svi zapisi napravljeni od strane ovog korisnika će inicijalno biti u vezi sa ovim timom.',
      'userName' => 'Slova AZ, broj 0-9, točke, crtice, @-znak i donje crte su dozvoljeni.',
      'isAdmin' => 'Admin korisnik može pristupiti svemu.',
      'isActive' => 'Ukoliko nije označeno, korisnik se neće moći prijaviti.',
      'teams' => 'Timovi kojima ovaj korisnik pripada. Nivo kontrole pristupa je naslijeđen od uloga tima.',
      'roles' => 'Dodatne pristupne uloge. Koristite ovo ako korisnik ne pripada nijednoj ekipi ili treba da prošire nivo kontrole pristupa isključivo za ovog korisnika.',
      'portalRoles' => 'Dodatne portal uloge. Koristite za veći nivo kontrole pristupa isključivo ovog korisnika.',
      'portals' => 'Portali kojima korisnik ima pristup.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Lozinka će biti poslana na adresu korisnika.',
      'accountInfoEmailSubject' => 'EspoCRM Korisnik - podaci za pristup',
      'accountInfoEmailBody' => 'Vaši podaci za pristup:

Korisničko ime: {userName} 
Lozinka: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Upit za promjenu lozinke',
      'passwordChangeLinkEmailBody' => 'Možete promijeniti lozinku prateći ovaj link {link}. Ovaj jedinstveni URL traje samo kratko vrijeme.',
      'passwordChanged' => 'Lozinka je promijenjena',
      'userCantBeEmpty' => 'Korisničko ime ne može biti prazno',
      'wrongUsernamePasword' => 'Pogrešno korisničko ime/lozinka',
      'emailAddressCantBeEmpty' => 'Adresa e-pošte ne može biti prazna',
      'userNameEmailAddressNotFound' => 'Korisničko ime/Adresa e-pošte nije pronađena',
      'forbidden' => 'Zabranjeno, pokušajte kasnije',
      'uniqueLinkHasBeenSent' => 'Jedinstvena URL adresa je poslana na određenu adresu.',
      'passwordChangedByRequest' => 'Lozinka je promijenjena.',
      'setupSmtpBefore' => 'Potrebno je da <a href="{url}">SMTP postavke</a>href="{url}"> budu unijete i točne kako bi lozinka bila poslana.',
      'userNameExists' => 'Korisničko ime već postoji',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nije postavljeno',
        'Male' => 'Muški',
        'Female' => 'Ženski',
        'Neutral' => 'Neutralan',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Samo moj tim',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivno',
      'activePortal' => 'Portal aktivan',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Naziv',
      'emailAddress' => 'Email',
      'website' => 'Site',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adresa za naplatu',
      'shippingAddress' => 'Adresa za dostavu',
      'description' => 'Opis',
      'sicCode' => 'Sic kod',
      'industry' => 'Industrija',
      'type' => 'Vrsta',
      'contactRole' => 'Naslov',
      'contactIsInactive' => 'Neaktivno',
      'campaign' => 'Kampanja',
      'targetLists' => 'Liste meta',
      'targetList' => 'Lista meta',
      'originalLead' => 'Originalni izvor',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakti',
      'opportunities' => 'Prilike',
      'cases' => 'Predmeti',
      'documents' => 'Dokumenti',
      'meetingsPrimary' => 'Sastanci (prošireno)',
      'callsPrimary' => 'Pozivi (prošireno)',
      'tasksPrimary' => 'Zadaci (prošireno)',
      'emailsPrimary' => 'E-pošta (prošireno)',
      'targetLists' => 'Liste meta',
      'campaignLogRecords' => 'Dnevnik kampanje',
      'campaign' => 'Kampanja',
      'portalUsers' => 'Korisnici portala',
      'originalLead' => 'Originalni izvor',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klijent',
        'Investor' => 'Investitor',
        'Partner' => 'Partner',
        'Reseller' => 'Distributer',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Avijacija',
        'Agriculture' => 'Poljoprivreda',
        'Advertising' => 'Oglašavanje',
        'Apparel & Accessories' => 'Odjeća i pribor',
        'Architecture' => 'Arhitektura',
        'Automotive' => 'Automobili',
        'Banking' => 'Bankarstvo',
        'Biotechnology' => 'Biotehnologija',
        'Building Materials & Equipment' => 'Građevinski materijal i oprema',
        'Chemical' => 'Kemijska',
        'Construction' => 'Izgradnja',
        'Computer' => 'Računala',
        'Defense' => 'Obrana',
        'Creative' => 'Kreativna ind',
        'Culture' => 'Kultura',
        'Consulting' => 'Consulting',
        'Education' => 'Obrazovanje',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Električna energija',
        'Energy' => 'Energija',
        'Entertainment & Leisure' => 'Zabava & opuštanje',
        'Finance' => 'Financije',
        'Food & Beverage' => 'Hrana i piće',
        'Grocery' => 'Mješovita roba',
        'Hospitality' => 'Uslužna djelatnost',
        'Healthcare' => 'Zdravstvena zaštita',
        'Insurance' => 'Osiguranje',
        'Legal' => 'Pravni poslovi',
        'Manufacturing' => 'Proizvodnja',
        'Mass Media' => 'Masovni mediji',
        'Mining' => 'Rudarstvo',
        'Music' => 'Muzika',
        'Marketing' => 'Marketing',
        'Publishing' => 'Izdavaštvo',
        'Petroleum' => 'Naftna',
        'Real Estate' => 'Nekretnine',
        'Retail' => 'Maloprodaja',
        'Shipping' => 'Dostava',
        'Service' => 'Usluge',
        'Support' => 'Podrška',
        'Sports' => 'Sportovi',
        'Software' => 'Softver',
        'Technology' => 'Tehnologija',
        'Telecommunications' => 'Telekomunikacije',
        'Television' => 'Televizija',
        'Testing, Inspection & Certification' => 'Testiranje, inspekcija i certificiranje',
        'Transportation' => 'Transport',
        'Travel' => 'Putovanje',
        'Venture Capital' => 'Preduzetnički kapital',
        'Wholesale' => 'Veleprodaja',
        'Water' => 'Voda',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Kreiraj Tvrtku',
      'Copy Billing' => 'Kopiranje Naplatne adrese',
      'Set Primary' => 'Podesi kao primarno',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Klijenti',
      'partners' => 'Partneri',
      'recentlyCreated' => 'Nedavno kreirano',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mjesec',
      'week' => 'Tjedan',
      'day' => 'Dan',
      'agendaWeek' => 'Tjedan',
      'agendaDay' => 'Dan',
      'timeline' => 'Vremenska linija',
    ),
    'labels' => 
    array (
      'Today' => 'Danas',
      'Create' => 'Kreiraj',
      'Shared' => 'Dijeljeno',
      'Add User' => 'Dodaj korisnika',
      'current' => 'trenutno',
      'time' => 'vrijeme',
      'User List' => 'Lista korisnika',
      'Manage Users' => 'Upravljanje korisnicima',
      'View Calendar' => 'Prikaži kalendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'parent' => 'Nadređeni',
      'status' => 'Status',
      'dateStart' => 'Početni datum',
      'dateEnd' => 'Završni datum',
      'direction' => 'Smjer',
      'duration' => 'Trajanje',
      'description' => 'Opis',
      'users' => 'Korisnici',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'reminders' => 'Podsjetnici',
      'account' => 'Tvrtka',
      'acceptanceStatus' => 'Status prihvaćanja',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planiran',
        'Held' => 'Održan',
        'Not Held' => 'Nije održano',
      ),
      'direction' => 
      array (
        'Outbound' => 'Odlazna',
        'Inbound' => 'Dolazna',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nema',
        'Accepted' => 'Prihvaćeno',
        'Declined' => 'Odbijeno',
        'Tentative' => 'Tentativni',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Postavi kao održano',
      'setNotHeld' => 'Postavi kao nije održano',
    ),
    'labels' => 
    array (
      'Create Call' => 'Postavi poziv',
      'Set Held' => 'Postavi kao održano',
      'Set Not Held' => 'Postavi kao nije održano',
      'Send Invitations' => 'Pošalji Pozivnice',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planirano',
      'held' => 'Održan',
      'todays' => 'Današnji',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'description' => 'Opis',
      'status' => 'Status',
      'type' => 'Tip',
      'startDate' => 'Datum početka',
      'endDate' => 'Završni datum',
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'sentCount' => 'Poslano',
      'openedCount' => 'Otvoren',
      'clickedCount' => 'Kliknuto',
      'optedOutCount' => 'Ne želi',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Kreiran izvor',
      'revenue' => 'Prihod',
      'revenueConverted' => 'Prihod (konvertiran)',
      'budget' => 'Budžet',
      'budgetConverted' => 'Budžet (konvertiran)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'accounts' => 'Tvrtke',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'opportunities' => 'Prilike',
      'campaignLogRecords' => 'Dnevnik',
      'massEmails' => 'Masovna e-pošta',
      'trackingUrls' => 'Praćenje URL-ova',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-pošta',
        'Web' => 'Web',
        'Television' => 'Televizija',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Pošta',
      ),
      'status' => 
      array (
        'Planning' => 'Planiranje',
        'Active' => 'Aktivna',
        'Inactive' => 'Neaktivna',
        'Complete' => 'Gotova',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Napravite kampanju',
      'Target Lists' => 'Liste meta',
      'Statistics' => 'Statistika',
      'hard' => 'tvrd',
      'soft' => 'mek',
      'Unsubscribe' => 'Odjavi se',
      'Mass Emails' => 'Masovna e-pošta',
      'Email Templates' => 'Šablone e-pošte',
      'Unsubscribe again' => 'Ponovo se odjavite',
      'Subscribe again' => 'Ponovo se prijavite',
      'Create Target List' => 'Napravite listu meta',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivne',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Odjavljeni ste sa naše liste.',
      'subscribedAgain' => 'Ponovo ste pretplaćeni.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Mete koje trebaju primati poruke.',
      'excludingTargetLists' => 'Mete koje ne trebaju primati poruke.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Akcija',
      'actionDate' => 'Datum',
      'data' => 'Podaci',
      'campaign' => 'Kampanja',
      'parent' => 'Meta',
      'object' => 'Objekt',
      'application' => 'Aplikacija',
      'queueItem' => 'U redu čekanja',
      'stringData' => 'String podatak',
      'stringAdditionalData' => 'String dodatni podataci',
      'isTest' => 'Je Test',
    ),
    'links' => 
    array (
      'queueItem' => 'U redu čekanja',
      'parent' => 'Nadređeni',
      'object' => 'Objekt',
      'campaign' => 'Kampanja',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Poslano',
        'Opened' => 'Otvorena',
        'Opted Out' => 'Ne želi',
        'Bounced' => 'Bounced',
        'Clicked' => 'Kliknuto',
        'Lead Created' => 'Izvor kreiran',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Sve',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Poslano',
      'opened' => 'Otvorena',
      'optedOut' => 'Ne želi',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Kliknuto',
      'leadCreated' => 'Izvor Kreiran',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL adresa',
      'urlToUse' => 'Kod za ubacivanje umjesto URL',
      'campaign' => 'Kampanja',
    ),
    'links' => 
    array (
      'campaign' => 'Kampanja',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Kreirati URL za praćenje',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'number' => 'Broj',
      'status' => 'Status',
      'account' => 'Tvrtka',
      'contact' => 'Kontakt',
      'contacts' => 'Kontakti',
      'priority' => 'Prioritet',
      'type' => 'Vrsta',
      'description' => 'Opis',
      'inboundEmail' => 'Grupni Email račun',
      'lead' => 'Izvor',
      'attachments' => 'Prilozi',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Grupni Email račun',
      'account' => 'Tvrtka',
      'contact' => 'Kontakt (osnovni)',
      'Contacts' => 'Kontakti',
      'meetings' => 'Sastanci',
      'calls' => 'Pozivi',
      'tasks' => 'Zadaci',
      'emails' => 'E-poruke',
      'articles' => 'Baza znanja',
      'lead' => 'Izvor',
      'attachments' => 'Prilozi',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novi',
        'Assigned' => 'Dodijeljen',
        'Pending' => 'Neriješen',
        'Closed' => 'Zatvoren',
        'Rejected' => 'Odbijen',
        'Duplicate' => 'Duplikat',
      ),
      'priority' => 
      array (
        'Low' => 'Nizak',
        'Normal' => 'Normalan',
        'High' => 'Visok',
        'Urgent' => 'Hitan',
      ),
      'type' => 
      array (
        'Question' => 'Pitanje',
        'Incident' => 'Incident',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Napravi prijavu problema',
      'Close' => 'Zatvori',
      'Reject' => 'Odbijen',
      'Closed' => 'Zatvoren',
      'Rejected' => 'Odbijen',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otvoren',
      'closed' => 'Zatvoren',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'emailAddress' => 'E-mail',
      'title' => 'Naslov',
      'account' => 'Tvrtka',
      'accounts' => 'Tvrtke',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Vrsta Tvrtke',
      'doNotCall' => 'Ne zovi',
      'address' => 'Adresa',
      'opportunityRole' => 'Uloga prilika',
      'accountRole' => 'Naslov',
      'description' => 'Opis',
      'campaign' => 'Kampanja',
      'targetLists' => 'Liste meta',
      'targetList' => 'Lista meta',
      'portalUser' => 'Korisnik portala',
      'originalLead' => 'Originalni izvor',
      'acceptanceStatus' => 'Status prihvaćanja',
      'accountIsInactive' => 'Tvrtka Neaktivna',
      'acceptanceStatusMeetings' => 'Status prihvaćanja (Sastanak)',
      'acceptanceStatusCalls' => 'Status prihvaćanja (pozivi)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => 'Prilike',
      'cases' => 'Predmeti',
      'targetLists' => 'Liste meta',
      'campaignLogRecords' => 'Dnevnik kampanje',
      'campaign' => 'Kampanja',
      'account' => 'Tvrtka (osnovno)',
      'accounts' => 'Tvrtke',
      'casesPrimary' => 'Prijave problema (osnovni)',
      'tasksPrimary' => 'Zadaci (prošireno)',
      'portalUser' => 'Korisnik portala',
      'originalLead' => 'Originalni izvor',
      'documents' => 'Dokumenti',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Napravi kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => 'Nema',
        'Decision Maker' => 'Donositelj odluka',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Utjecajna osoba',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Korisnici portala',
      'notPortalUsers' => 'Nisu korisnici portala',
      'accountActive' => 'Aktivan',
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
      'Create Document' => 'Napravi dokument',
      'Details' => 'Detaljnije',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'file' => 'Datoteka',
      'type' => 'Vrsta',
      'publishDate' => 'Datum objave',
      'expirationDate' => 'Rok upotrebe',
      'description' => 'Opis',
      'accounts' => 'Tvrtke',
      'folder' => 'Mapa',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Tvrtke',
      'opportunities' => 'Prilike',
      'folder' => 'Mape',
      'leads' => 'Izvori',
      'contacts' => 'Kontakti',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktivan',
        'Draft' => 'Nacrt',
        'Expired' => 'Istekao',
        'Canceled' => 'Otkazan',
      ),
      'type' => 
      array (
        '' => 'Nema',
        'Contract' => 'Ugovor',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Ugovor o licenci',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivan',
      'draft' => 'Nacrt',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Kreiranje mape za dokumente',
      'Manage Categories' => 'Upravljanje mapama',
      'Documents' => 'Dokumenti',
    ),
    'links' => 
    array (
      'documents' => 'Dokumenti',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'target' => 'Meta',
      'sentAt' => 'Datum slanja',
      'attemptCount' => 'Pokušaji',
      'emailAddress' => 'Email adresa',
      'massEmail' => 'Masovna e-pošta',
      'isTest' => 'Je test',
    ),
    'links' => 
    array (
      'target' => 'Meta',
      'massEmail' => 'Masovna e-pošta',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Čeka',
        'Sent' => 'Poslano',
        'Failed' => 'Neuspješno',
        'Sending' => 'Slanje',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Čeka',
      'sent' => 'Poslano',
      'failed' => 'Neuspješno',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Kreiraj članak',
      'Any' => 'Bilo koji',
      'Send in Email' => 'Pošalji u e-pošti',
      'Move Up' => 'Pomakni gore',
      'Move Down' => 'Pomakni dole',
      'Move to Top' => 'Pomakni na vrh',
      'Move to Bottom' => 'Pomakni na dno',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'type' => 'Vrsta',
      'attachments' => 'Prilozi',
      'publishDate' => 'Datum objave',
      'expirationDate' => 'Rok isteka',
      'description' => 'Opis',
      'body' => 'Sadržaj',
      'categories' => 'Kategorije',
      'language' => 'Jezik',
      'portals' => 'Portali',
    ),
    'links' => 
    array (
      'cases' => 'Prijave problema',
      'opportunities' => 'Prilike',
      'categories' => 'Kategorije',
      'portals' => 'Portali',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'U pregledu',
        'Draft' => 'Nacrt',
        'Archived' => 'Arhiviran',
        'Published' => 'Objavljen',
      ),
      'type' => 
      array (
        'Article' => 'Članak',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Članak će biti dostupan samo u određenim portalima.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Objavljen',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Napravi Kategoriju',
      'Manage Categories' => 'Izmjena Kategorije',
      'Articles' => 'Članci',
    ),
    'links' => 
    array (
      'articles' => 'Članci',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Pretvoriti u',
      'Create Lead' => 'Napravi izvor',
      'Convert' => 'Pretvoriti',
      'convert' => 'pretvori',
    ),
    'fields' => 
    array (
      'name' => 'Ime',
      'emailAddress' => 'E-mail',
      'title' => 'Naslov',
      'website' => 'Sajt',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Ime stranke',
      'doNotCall' => 'Ne zovi',
      'address' => 'Adresa',
      'status' => 'Status',
      'source' => 'Potiče od',
      'opportunityAmount' => 'Vrijednost prilike',
      'opportunityAmountConverted' => 'Vrijednost prilike (konvertirano)',
      'description' => 'Opis',
      'createdAccount' => 'Tvrtka',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Prilika',
      'campaign' => 'Kampanja',
      'targetLists' => 'Liste meta',
      'targetList' => 'Lista meta',
      'industry' => 'Industrija',
      'acceptanceStatus' => 'Status prihvaćanja',
      'opportunityAmountCurrency' => 'Iznos prilike u valuti',
      'acceptanceStatusMeetings' => 'Status prihvaćanja (Sastanak)',
      'acceptanceStatusCalls' => 'Status prihvaćanja (pozivi)',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste meta',
      'campaignLogRecords' => 'Dnevnik kampanje',
      'campaign' => 'Kampanja',
      'createdAccount' => 'Tvrtka',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Prilika',
      'cases' => 'Prijave problema',
      'documents' => 'Dokumenti',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novo',
        'Assigned' => 'Dodijeljen',
        'In Process' => 'U procesu',
        'Converted' => 'Konvertiran',
        'Recycled' => 'Recikliran',
        'Dead' => 'Mrtav',
      ),
      'source' => 
      array (
        '' => 'Nema',
        'Call' => 'Poziv',
        'Email' => 'E-mail',
        'Existing Customer' => 'Postojeći Klijent',
        'Partner' => 'Partner',
        'Public Relations' => 'Odnosi sa javnošću',
        'Web Site' => 'Sajt',
        'Campaign' => 'Kampanja',
        'Other' => 'Drugo',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktivan',
      'actual' => 'Aktualan',
      'converted' => 'Konvertiran',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'status' => 'Status',
      'storeSentEmails' => 'Čuvaj poslane e-pošte',
      'startAt' => 'Početni datum',
      'fromAddress' => 'Dolazna adresa',
      'fromName' => 'Od osobe',
      'replyToAddress' => 'Adresa za odgovor',
      'replyToName' => 'Odgovori osobi',
      'campaign' => 'Kampanja',
      'emailTemplate' => 'Šablona e-pošte',
      'inboundEmail' => 'Račun E-pošte',
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'optOutEntirely' => 'Potpuno "ne želi"',
      'smtpAccount' => 'SMTP Račun',
    ),
    'links' => 
    array (
      'targetLists' => 'Liste meta',
      'excludingTargetLists' => 'Isključujući liste meta',
      'queueItems' => 'Na redu čekanja',
      'campaign' => 'Kampanja',
      'emailTemplate' => 'Šablona e-pošte',
      'inboundEmail' => 'Račun e-pošte',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Nacrt',
        'Pending' => 'Čeka',
        'In Process' => 'U procesu',
        'Complete' => 'Gotovo',
        'Canceled' => 'Otkazano',
        'Failed' => 'Neuspješno',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Napravi masovnu e-poštu',
      'Send Test' => 'Pošalji Test',
      'System SMTP' => 'Sistemski SMTP',
      'system' => 'sustav',
      'group' => 'grupa',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Izabrati najmanje jedan cilj.',
      'testSent' => 'Test-poruke koje će biti poslane',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'E-mail adrese primatelja koji su se odjavili će biti označene kao odjavljeni i neće više primati masovne mejlove.',
      'targetLists' => 'Mete koji trebaju primiti poruke.',
      'excludingTargetLists' => 'Mete koje ne trebaju primiti poruke.',
      'storeSentEmails' => 'E-poruke će biti spremljene u CRM-u.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktualan',
      'complete' => 'Završeno',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Naziv',
      'parent' => 'Nadređeni',
      'status' => 'Status',
      'dateStart' => 'Početni datum',
      'dateEnd' => 'Završni datum',
      'duration' => 'Trajanje',
      'description' => 'Opis',
      'users' => 'Korisnici',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'reminders' => 'Podsjetnici',
      'account' => 'Tvrtka',
      'acceptanceStatus' => 'Status prihvaćanja',
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
        'Planned' => 'Planiran',
        'Held' => 'Održano',
        'Not Held' => 'Nije održano',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nema',
        'Accepted' => 'Prihvaćeno',
        'Declined' => 'Odbijeno',
        'Tentative' => 'Tentativno',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Postavi kao održano',
      'setNotHeld' => 'Postavi kao nije održano',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Napravi sastanak',
      'Set Held' => 'Postavi održano',
      'Set Not Held' => 'Postavi nije održano',
      'Send Invitations' => 'Pošalji pozive',
      'on time' => 'na vrijeme',
      'before' => 'prije',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planirano',
      'held' => 'Održano',
      'todays' => 'Današnja',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Ništa nije poslano',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'account' => 'Tvrtka',
      'stage' => 'Faza',
      'amount' => 'Iznos',
      'probability' => 'Vjerojatnost,%',
      'leadSource' => 'Izvor potiče od',
      'doNotCall' => 'Ne zovi',
      'closeDate' => 'Datum zatvaranja',
      'contacts' => 'Kontakti',
      'description' => 'Opis',
      'amountConverted' => 'Iznos (konvertirano)',
      'amountWeightedConverted' => 'Iznos (ponderirano)',
      'campaign' => 'Kampanja',
      'originalLead' => 'Originalni izvor',
      'amountCurrency' => 'Iznos u valuti',
      'contactRole' => 'Uloga kontakta',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakti',
      'documents' => 'Dokumenti',
      'campaign' => 'Kampanja',
      'originalLead' => 'Originalni izvor',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Izviđanje',
        'Qualification' => 'Kvalifikacija',
        'Proposal' => 'Prijedlog',
        'Negotiation' => 'Pregovori',
        'Needs Analysis' => 'Analiza potrebna',
        'Value Proposition' => 'Dobitak',
        'Id. Decision Makers' => 'Id. Donosioci odluka',
        'Perception Analysis' => 'Analiza percepcije',
        'Proposal/Price Quote' => 'Prijedlog/Cijena ponuda',
        'Negotiation/Review' => 'Pregovori/pregled',
        'Closed Won' => 'Zatvoreno Dobiveno',
        'Closed Lost' => 'Zatvoreno Izgubljeno',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Napravi Priliku',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otvorene',
      'won' => 'Dobivene',
      'lost' => 'Izgubljene',
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
      'name' => 'Ime',
      'description' => 'Opis',
      'entryCount' => 'Točka unosa',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Kampanje',
      'endDate' => 'Krajnji datum',
      'targetLists' => 'Liste meta',
      'includingActionList' => 'Uključujući',
      'excludingActionList' => 'Isključujući',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Tvrtke',
      'contacts' => 'Kontakti',
      'leads' => 'Izvori',
      'campaigns' => 'Kampanje',
      'massEmails' => 'Masovne e-pošta',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Televizija',
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
      'Create TargetList' => 'Napravi listu meta',
      'Opted Out' => 'Ne želi',
      'Cancel Opt-Out' => 'Odbaci "ne želi"',
      'Opt-Out' => 'Mogućnost odbijanja',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Ime',
      'parent' => 'Nadležni',
      'status' => 'Status',
      'dateStart' => 'Početni datum',
      'dateEnd' => 'Rok',
      'dateStartDate' => 'Datum početka (cijeli dan)',
      'dateEndDate' => 'Datum završetka (cijeli dan)',
      'priority' => 'Prioritet',
      'description' => 'Opis',
      'isOverdue' => 'Kasni',
      'account' => 'Tvrtka',
      'dateCompleted' => 'Datum završetka',
      'attachments' => 'Prilozi',
      'reminders' => 'Podsjetnici',
      'contact' => 'Kontakt',
    ),
    'links' => 
    array (
      'attachments' => 'Prilozi',
      'account' => 'Tvrtka',
      'contact' => 'Kontakt',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nije počelo',
        'Started' => 'Započelo',
        'Completed' => 'Završeno',
        'Canceled' => 'Otkazano',
        'Deferred' => 'Odloženo',
      ),
      'priority' => 
      array (
        'Low' => 'Nizak',
        'Normal' => 'Normalan',
        'High' => 'Visok',
        'Urgent' => 'Hitan',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Kreiraj Zadatak',
      'Complete' => 'Završeno',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktualno',
      'completed' => 'Završeno',
      'deferred' => 'Odloženi',
      'todays' => 'Današnji',
      'overdue' => 'Kašnjenje',
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
      'meetings' => 'Sastanci',
      'calls' => 'Pozivi',
      'tasks' => 'Zadaci',
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
      'Create Formularios' => 'Kreiraj Formulario',
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
      'meetings' => 'Sastanci',
      'calls' => 'Pozivi',
      'tasks' => 'Zadaci',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => 'Kreiraj MotivoReclamo',
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
      'meetings' => 'Sastanci',
      'calls' => 'Pozivi',
      'tasks' => 'Zadaci',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' => 
    array (
      'Create Reclamo' => 'Kreiraj Reclamo',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>