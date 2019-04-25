<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Użytkownik',
      'action' => 'Czynność',
      'createdAt' => 'Data',
      'target' => 'Element',
      'targetType' => 'Moduł',
      'authToken' => 'Token Autoryzacyjny',
      'ipAddress' => 'Adres IP',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' => 
    array (
      'authToken' => 'Token Autoryzacyjny',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'Użytkownik',
      'target' => 'Element',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Tylko ja',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Przeczytano',
        'update' => 'Zaktualizowano',
        'delete' => 'Usunięto',
        'create' => 'Utworzono',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Włączony',
      'Disabled' => 'Wyłączony',
      'System' => 'System',
      'Users' => 'Użytkownicy',
      'Email' => 'E-mail',
      'Data' => 'Data',
      'Customization' => 'Dostosowywanie',
      'Available Fields' => 'Dostępne Pola',
      'Layout' => 'Układ',
      'Entity Manager' => 'Menadżer jednostek',
      'Add Panel' => 'Dodaj panel',
      'Add Field' => 'Dodaj pole',
      'Settings' => 'Ustawienia',
      'Scheduled Jobs' => 'Zaplanowane zadania',
      'Upgrade' => 'Aktualizacja',
      'Clear Cache' => 'Wyczyść Pamięć Podręczną',
      'Rebuild' => 'Przebuduj',
      'Teams' => 'Zespoły',
      'Roles' => 'Role',
      'Portal' => 'Portal',
      'Portals' => 'Portale',
      'Portal Roles' => 'Role w Portalu',
      'Portal Users' => 'Użytkownicy portali',
      'Outbound Emails' => 'Poczta Wychodząca',
      'Group Email Accounts' => 'Grupowe konta pocztowe',
      'Personal Email Accounts' => 'Osobiste konta pocztowe',
      'Inbound Emails' => 'Wiadomości przychodzące',
      'Email Templates' => 'Szablony wiadomości',
      'Import' => 'Import',
      'Layout Manager' => 'Menadżer Widoku',
      'User Interface' => 'Interfejs Użytkonika',
      'Auth Tokens' => 'Tokeny autoryzacji',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autoryzacja',
      'Currency' => 'Waluta',
      'Integrations' => 'Integracje',
      'Extensions' => 'Rozszerzenia',
      'Upload' => 'Wyślij',
      'Installing...' => 'Instalacja ...',
      'Upgrading...' => 'Aktualizowanie ...',
      'Upgraded successfully' => 'Zaktualizowano pomyślnie',
      'Installed successfully' => 'Zainstalowano pomyślnie',
      'Ready for upgrade' => 'Gotowy do aktualizacji',
      'Run Upgrade' => 'Uruchom aktualizację',
      'Install' => 'Instaluj',
      'Ready for installation' => 'Gotowy do instalacji',
      'Uninstalling...' => 'Odinstalowywanie...',
      'Uninstalled' => 'Odinstalowano',
      'Create Entity' => 'Utwórz jednostkę',
      'Edit Entity' => 'Edytuj jednostkę',
      'Create Link' => 'Utwórz powiązanie',
      'Edit Link' => 'Edytuj łącze',
      'Notifications' => 'Powiadomienia',
      'Jobs' => 'Zadania',
      'Reset to Default' => 'Przywróć domyślne',
      'Email Filters' => 'Filtry wiadomości',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detale',
      'listSmall' => 'Lista (Mała)',
      'detailSmall' => 'Detale (Mała)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Filtry Wyszukiwania',
      'massUpdate' => 'Masowa aktualizacja',
      'relationships' => 'Relacje',
      'sidePanelsDetail' => 'Panel boczny (Detale)',
      'sidePanelsEdit' => 'Panel boczny (Edycja)',
      'sidePanelsDetailSmall' => 'Panel boczny (Detale Mała)',
      'sidePanelsEditSmall' => 'Panel poczby (Edycja Mała)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'List (for Account)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Tablica',
      'foreign' => 'Pole obce',
      'duration' => 'Czas',
      'password' => 'Hasło',
      'personName' => 'Imię',
      'autoincrement' => 'Automatyczne uzupełnianie',
      'bool' => 'Wartość logiczna (Prawda / Fałsz)',
      'currency' => 'Waluta',
      'currencyConverted' => 'Obecny (Konwertowany)',
      'date' => 'Data',
      'datetime' => 'DataCzas',
      'datetimeOptional' => 'Data/czas',
      'email' => 'E-mail',
      'enum' => 'Wyliczenie (Enum)',
      'enumInt' => 'Wyliczenie - Liczby całkowite (Enum Integer)',
      'enumFloat' => 'Wyliczenie zmiennoprzecinkowe (Enum Float)',
      'float' => 'Liczba zmiennoprzecinkowa (Float)',
      'int' => 'Liczba całkowita (Int)',
      'link' => 'Łącze',
      'linkMultiple' => 'Wielokrotne dowiązanie',
      'linkParent' => 'Dowiązanie rodzica',
      'phone' => 'Telefon',
      'text' => 'Tekst',
      'url' => 'Strona Internetowa',
      'varchar' => 'Tekst',
      'file' => 'Plik',
      'image' => 'Obraz',
      'multiEnum' => 'Wielokrotne wyliczenie (Multi-Enum)',
      'attachmentMultiple' => 'Załącz kilka plików',
      'rangeInt' => 'Zakres liczb całkowitych',
      'rangeFloat' => 'Zakres liczb rzeczywistych',
      'rangeCurrency' => 'Zakres waluty',
      'wysiwyg' => 'edytor wysiwyg',
      'map' => 'Mapa',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
    ),
    'fields' => 
    array (
      'type' => 'Rodzaj',
      'name' => 'Nazwa',
      'label' => 'Etykieta',
      'tooltipText' => 'Tekst w dymku podpowiedzi',
      'required' => 'Wymagane',
      'default' => 'Domyślne',
      'maxLength' => 'Długość Maksymalna',
      'options' => 'Opcje',
      'after' => 'Po (pole)',
      'before' => 'Przed (pole)',
      'link' => 'Łącze',
      'field' => 'Pole',
      'min' => 'Minimalnie',
      'max' => 'Maksymalnie',
      'translation' => 'Tłumaczenie',
      'previewSize' => 'Rozmiar podglądu',
      'noEmptyString' => 'Bez pustych znaków',
      'defaultType' => 'Typ domyślny',
      'seeMoreDisabled' => 'Wyłącz przycinanie tekstu',
      'entityList' => 'Lista jednostek',
      'isSorted' => 'Sortowalny (alfabetycznie)',
      'audited' => 'Audytowany',
      'trim' => 'Przytnij',
      'height' => 'Wysokość (px)',
      'minHeight' => 'Minimalna wysokość (px)',
      'provider' => 'Dostawca',
      'typeList' => 'Lista typów',
      'rows' => 'Ilość wierwszy w polu tekstowym',
      'lengthOfCut' => 'Długość cięcia',
      'sourceList' => 'Lista źródłowa',
      'prefix' => 'Prefiks',
      'nextNumber' => 'Następny numer',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Wyłącz formatowanie',
      'dynamicLogicVisible' => 'Conditions making field visible',
      'dynamicLogicReadOnly' => 'Conditions making field read-only',
      'dynamicLogicRequired' => 'Conditions making field required',
      'dynamicLogicOptions' => 'Opcje warunku',
      'probabilityMap' => 'Stage Probabilities (%)',
      'readOnly' => 'Tylko do odczytu',
      'maxFileSize' => 'Max File Size (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Twój EspoCRM jest aktualizowany do wersji <strong>{version}</strong>. To może chwilę czasu.',
      'upgradeDone' => 'Twój CRM został zaaktualizowany do najnowszej wersji <strong>{version}</strong>. Odśwież swoją przeglądarke aby zobaczyć zmiany.',
      'upgradeBackup' => 'Zalecamy abyś wykonał archiwizacje swoich danych, przed aktualizacją.',
      'thousandSeparatorEqualsDecimalMark' => 'Separator dziesiętny nie może być taki sam jak znak oddzielenia',
      'userHasNoEmailAddress' => 'Użytkownik nie ma przypisanego adres e-mail.',
      'selectEntityType' => 'Wybierz jednostkę z menu po lewej stonie.',
      'selectUpgradePackage' => 'Wypierz paczkę do aktualizacji',
      'downloadUpgradePackage' => 'Pobierz paczkę z aktualizacją <a href="{url}">stąd</a>.',
      'selectLayout' => 'Wybierz interesujący Cię układ z menu po lewej stronie i zacznij go edytować.',
      'selectExtensionPackage' => 'Wybierz paczkę rozszerzeń',
      'extensionInstalled' => 'Rozszerzenie {name} {version} zostało zainstalowane.',
      'installExtension' => 'Rozszerzenie {name} {version} jest gotowe do instalacji.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Ustawienia systemu dla aplikacji.',
      'scheduledJob' => 'Zadania wykonywane przez skrypt cron.',
      'upgrade' => 'Aktualizuj EspoCRM.',
      'clearCache' => 'Wyczyść wszystkie dane zapisane w pamięci podręcznej.',
      'rebuild' => 'Przebuduj oraz wyczyść pamięć podręczną.',
      'users' => 'Zarządzanie użytkownikami.',
      'teams' => 'Zarządzanie zespołami.',
      'roles' => 'Zarządzanie rolami.',
      'portals' => 'Zarządzanie portalami.',
      'portalRoles' => 'Role dla portalu.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Ustawienia SMTP dla poczty wychodzącej.',
      'groupEmailAccounts' => 'Konta grupowej poczty przychodzącej. Wiadomość zostanie zaimportowana do sprawy.',
      'personalEmailAccounts' => 'Konta pocztowe użytkowników.',
      'emailTemplates' => 'Szkice wiadomości dla poczty wychodzącej.',
      'import' => 'Importuj dane z pliku CSV.',
      'layoutManager' => 'Dostosuj interfejs (lista, detale, edycja, wyszukiwanie, masowa aktualizacja).',
      'entityManager' => 'Utwórz własne jednostki, edytuj istniejące. Zarzącaj polami i relacjami.',
      'userInterface' => 'Konfiguruj UI (interfejs użytkownika).',
      'authTokens' => 'Aktywuj autoryzacje sesji. Adres IP oraz data ostaniego wejścia.',
      'authentication' => 'Ustawienia Autoryzacji.',
      'currency' => 'Ustawienia waluty oraz przelicznika.',
      'extensions' => 'Instaluj i usuwaj rozszerzenia.',
      'integrations' => 'Integracja z usługami dodatkowymi.',
      'notifications' => 'Ustawienia powiadomień wewnętrznych i email.',
      'inboundEmails' => 'Globalne ustawienia wiadomości przychodzących.',
      'emailFilters' => 'Wiadomości które pasują do określonych kryteriów nie będą importowane.',
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
        'x-small' => 'Bardzo Małe',
        'small' => 'Małe',
        'medium' => 'Średnie',
        'large' => 'Duże',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'ORAZ',
      'or' => 'LUB',
      'not' => 'NIE',
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
      'Document' => 'Wstaw dokument',
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
      'user' => 'Użytkownik',
      'ipAddress' => 'IP Adres',
      'lastAccess' => 'Data ostatniego logowania',
      'createdAt' => 'Data Logowania',
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
      'title' => 'Tytuł',
      'dateFrom' => 'Data rozpoczęcia',
      'dateTo' => 'Data zakończenia',
      'autorefreshInterval' => 'Okres auto-odświeżenia',
      'displayRecords' => 'Pokaż rekordy',
      'isDoubleHeight' => 'Wysokość 2x',
      'mode' => 'Tryb',
      'enabledScopeList' => 'Co wyświetlić',
      'users' => 'Użytkownicy',
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
        'agendaWeek' => 'Tydzień (agenda)',
        'basicWeek' => 'Tydzień',
        'month' => 'Miesiąc',
        'basicDay' => 'Dzień',
        'agendaDay' => 'Dzień (agenda)',
        'timeline' => 'Oś czasu',
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
        'equals' => 'Równa się',
        'notEquals' => 'Nie równa się',
        'greaterThan' => 'Większy niż',
        'lessThan' => 'Mniejszy niż',
        'greaterThanOrEquals' => 'Większy lub równy',
        'lessThanOrEquals' => 'Mniejszy lub równy',
        'in' => 'In',
        'notIn' => 'Not In',
        'inPast' => 'In Past',
        'inFuture' => 'Is Future',
        'isToday' => 'Dziś',
        'isTrue' => 'Prawda',
        'isFalse' => 'Fałsz',
        'isEmpty' => 'Pusty',
        'isNotEmpty' => 'Nie jest pusty',
        'contains' => 'Zawiera',
        'notContains' => 'Nie zawiera',
        'has' => 'Zawiera',
        'notHas' => 'Nie zawiera',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Temat',
      'parent' => 'Powiązanie',
      'status' => 'Status',
      'dateSent' => 'Data wysłania',
      'from' => 'Od',
      'to' => 'Do',
      'cc' => 'Kopia Do',
      'bcc' => 'Ukryta Kopia Do',
      'replyTo' => 'Odpowiedz do',
      'replyToString' => 'Odpowiedz do (string)',
      'isHtml' => 'Format HTML',
      'body' => 'Treść',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Temat',
      'attachments' => 'Załączniki',
      'selectTemplate' => 'Wybierz szkic wiadomości',
      'fromEmailAddress' => 'Z adresu',
      'toEmailAddresses' => 'To EmailAddresses',
      'emailAddress' => 'Adres e-mail',
      'deliveryDate' => 'Data dostarczenia',
      'account' => 'Klient',
      'users' => 'Użytkownicy',
      'replied' => 'Odpowiedziane',
      'replies' => 'Odpowiedzi',
      'isRead' => 'Przeczytany',
      'isNotRead' => 'Nieprzeczytany',
      'isImportant' => 'Ważne',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Należy do użytkownika',
      'inTrash' => 'W koszu',
      'sentBy' => 'Sent By',
      'folder' => 'Folder',
      'inboundEmails' => 'Konto grupowe',
      'emailAccounts' => 'Konto osobiste',
      'hasAttachment' => 'Załącznik',
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
      'replied' => 'Odpowiedziano',
      'replies' => 'Odpowiedzi',
      'inboundEmails' => 'Konto grupowe',
      'emailAccounts' => 'Konto osobiste',
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
        'Draft' => 'Szkic',
        'Sending' => 'Wysyłanie',
        'Sent' => 'Wysłano',
        'Archived' => 'Zarchiwizowany',
        'Received' => 'Otrzymane',
        'Failed' => 'Niepowodzenie',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archiwizuj e-mail',
      'Archive Email' => 'Archiwizuj e-mail',
      'Compose' => 'Utwórz',
      'Reply' => 'Odpowiedz',
      'Reply to All' => 'Odpowiedz wszystkim',
      'Forward' => 'Przekaż',
      'Original message' => 'Oryginalna wiadomość',
      'Forwarded message' => 'Przekazana wiadomość',
      'Email Accounts' => 'Osobiste konta pocztowe',
      'Inbound Emails' => 'Grupowe konta pocztowe',
      'Email Templates' => 'Szablony wiadomości',
      'Send Test Email' => 'Wyślij wiadomość testową',
      'Send' => 'Wyślij',
      'Email Address' => 'Adres e-mail',
      'Mark Read' => 'Oznacz jako przeczytane',
      'Sending...' => 'Wysyłanie ...',
      'Save Draft' => 'Zapisz szkic',
      'Mark all as read' => 'Oznacz wszystkie jako przeczytane',
      'Show Plain Text' => 'Pokaż tylko tekst',
      'Mark as Important' => 'Oznacz jako ważne',
      'Unmark Importance' => 'Oznacz jako normalne',
      'Move to Trash' => 'Przenieś do kosza',
      'Retrieve from Trash' => 'Przywróć z kosza',
      'Move to Folder' => 'Przenieś do folderu',
      'Filters' => 'Filtry',
      'Folders' => 'Foldery',
      'Create Lead' => 'Utwórz potencjalny kontakt',
      'Create Contact' => 'Utwórz kontakt',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Utwórz zadanie',
      'Create Case' => 'Utwórz sprawę',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Brak konfiguracji SMTP {link}.',
      'testEmailSent' => 'Testowa wiadomość została wysłana',
      'emailSent' => 'Wiadomość została wysłana',
      'savedAsDraft' => 'Zapisz jako szablon',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Wysłane',
      'archived' => 'Zarchiwizowany',
      'inbox' => 'Przychodzące',
      'drafts' => 'Szkice',
      'trash' => 'Kosz',
      'important' => 'Important',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Oznacz jako przeczytane',
      'markAsNotRead' => 'Oznacz jako nieprzeczytane',
      'markAsImportant' => 'Oznacz jako ważne',
      'markAsNotImportant' => 'Oznacz jako normalne',
      'moveToTrash' => 'Przenieś do kosza',
      'moveToFolder' => 'Przenieś do folderu',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Nazwa użytkownika',
      'password' => 'Hasło',
      'port' => 'Port',
      'monitoredFolders' => 'Monitorowane katalogi',
      'ssl' => 'SSL',
      'fetchSince' => 'Od dnia',
      'emailAddress' => 'Adres e-mail',
      'sentFolder' => 'Folder wysłanych',
      'storeSentEmails' => 'Zapisz wysłane wiadomości',
      'keepFetchedEmailsUnread' => 'Pozostaw pobrane wiadomości jako nieprzeczytane',
      'emailFolder' => 'Upuść w folderze',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Użyj SMTP',
      'smtpHost' => 'Serwer SMTP',
      'smtpPort' => 'Port serwera',
      'smtpAuth' => 'Autoryzacja SMTP',
      'smtpSecurity' => 'Zabezpieczenia SMTP',
      'smtpUsername' => 'Nazwa użytkownika SMTP',
      'smtpPassword' => 'Hasło SMTP',
    ),
    'links' => 
    array (
      'filters' => 'Filtry',
      'emails' => 'Wiadomości',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktywne',
        'Inactive' => 'Nieaktywny',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Utwórz konto pocztowe',
      'IMAP' => 'IMAP',
      'Main' => 'Główne',
      'Test Connection' => 'Test połączenia',
      'Send Test Email' => 'Wyślij wiadomość testową',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Nie można połączyć z serwerem IMAP',
      'connectionIsOk' => 'Połączenie OK',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Możesz dodać folder \'Wysłane\' aby synchronizować wysłaną pocztę z zewnętrznym klientem poczty.',
      'storeSentEmails' => 'Wysłane wiadomości będą przechowywane na serwerze IMAP. Adres e-mail powinien być taki jak podany w wiadomości wychodzącej.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Główny',
      'Opted Out' => 'Wypisany',
      'Invalid' => 'Błędny',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Od',
      'to' => 'Do',
      'subject' => 'Temat',
      'bodyContains' => 'Treść zawiera',
      'action' => 'Akcja',
      'isGlobal' => 'Globalny',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Utwórz filtr poczty',
      'Emails' => 'Wiadomości',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Ignoruj',
        'Move to Folder' => 'Upuść w folderze',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Nazwa tego filtra.',
      'subject' => 'Użyj maski *:

tekst* - rozpoczyna się od tekst,
*tekst* - zawiera tekst,
*tekst - kończy się na tekst.',
      'bodyContains' => 'Treść wiadomości zawiera dowolne z podanych słów lub zwrotów.',
      'from' => 'Wiadomości zostaną wysłane z podanym adresem. Zostaw pole puste, jeśli niepotrzebne. Możesz użyć maski *.',
      'to' => 'Wiadomości zostaną wysłane na podany adres. Zostaw pole puste, jeśli niepotrzebne. Możesz użyć maski *.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Pomiń powiadomienia',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Utwórz folder',
      'Manage Folders' => 'Zarządzaj folderami',
      'Emails' => 'Wiadomości',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'status' => 'Status',
      'isHtml' => 'Format HTML',
      'body' => 'Treść',
      'subject' => 'Temat',
      'attachments' => 'Załączniki',
      'insertField' => 'Wstaw pole',
      'oneOff' => 'One-off',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Utwórz Szkic wiadomości',
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
      'oneOff' => 'Sprawdź, czy będziesz używać tego szablonu tylko raz (np w poczcie masowej).',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Bieżący',
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
      'Fields' => 'Pola',
      'Relationships' => 'Relacje',
      'Schedule' => 'Schedule',
      'Log' => 'Dziennik',
      'Formula' => 'Formuła',
    ),
    'fields' => 
    array (
      'name' => 'Nazwa',
      'type' => 'Typ',
      'labelSingular' => 'Label Singular',
      'labelPlural' => 'Label Plural',
      'stream' => 'Stream',
      'label' => 'Etykieta',
      'linkType' => 'Typ linku',
      'entityForeign' => 'Jednostka obca',
      'linkForeign' => 'Link obcy',
      'link' => 'Link',
      'labelForeign' => 'Etykieta obca',
      'sortBy' => 'Domyślna kolejność (pole)',
      'sortDirection' => 'Domyślna kolejność (kierunek)',
      'relationName' => 'Nazwa tabeli łączącej',
      'linkMultipleField' => 'Połącz kilka pól',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Wyłączony',
      'textFilterFields' => 'Pole filtrowania tekstowego',
      'audited' => 'Audited',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Status pola',
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
        '' => 'Brak',
        'Base' => 'Base',
        'Person' => 'Osoba',
        'CategoryTree' => 'Drzewo kategorii',
        'Event' => 'Wydarzenie',
        'BasePlus' => 'Base Plus',
        'Company' => 'Firma',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'Jeden-do-wielu',
        'manyToOne' => 'Many-to-One',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Rosnąco',
        'desc' => 'Malejąco',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Jednostka została utworzona',
      'linkAlreadyExists' => 'Konflikt nazw linku.',
      'linkConflict' => 'Konflikt nazw: pole ze wskazaną nazwą już istnieje.',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Updates of this field are logged in stream.',
      'textFilterFields' => 'Pola używane przez wyszukiwarkę tekstową.',
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
      'name' => 'Nazwa',
      'version' => 'Wersja',
      'description' => 'Opis',
      'isInstalled' => 'Zainstalowano',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstaluj',
      'Install' => 'Instaluj',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Rozszerzenie {name} zostało usunięte',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Połącz',
      'Connected' => 'Połączono',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Logika dynamiczna',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Nic',
        'javascript: return this.dateTime.getNow(1);' => 'Teraz',
        'javascript: return this.dateTime.getNow(5);' => 'Now (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Now (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Now (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 godzina',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 godziny',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 godziny',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 godziny',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 godzin',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 dzień',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dni',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 tydzień',
      ),
      'dateDefault' => 
      array (
        '' => 'Nic',
        'javascript: return this.dateTime.getToday();' => 'Dziś',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 dzień',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dni',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 tydzień',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 tygodnie',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 tygodnie',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 miesiąc',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 miesiące',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 miesiące',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 miesiące',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 miesięcy',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 miesięcy',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 miesięcy',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 miesięcy',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 miesięcy',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 miesięcy',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 miesięcy',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 rok',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Aktualizacje będą widoczne w osi zmian.',
      'required' => 'Pole obowiązkowe. Nie może pozostać puste.',
      'default' => 'Wartość domyślna zostanie ustawiona po utworzeniu.',
      'min' => 'Minimalna akceptowalna wartość.',
      'max' => 'Maksymalna akceptowalna wartość.',
      'seeMoreDisabled' => 'If not checked then long texts will be shortened.',
      'lengthOfCut' => 'How long text can be before it will be cut.',
      'maxLength' => 'Maksymalna akceptowalna długość pola testowego.',
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
      'User' => 'Użytkownik',
      'Team' => 'Zespół',
      'Role' => 'Rola',
      'EmailTemplate' => 'Szablon wiadomości',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Osobiste konto pocztowe',
      'EmailAccountScope' => 'Osobiste konto pocztowe',
      'OutboundEmail' => 'Poczta Wychodząca',
      'ScheduledJob' => 'Zaplanowane zadanie',
      'ExternalAccount' => 'Konto zewnętrzne',
      'Extension' => 'Rozszerzenie',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Poczta Przychodząca',
      'Stream' => 'Stream',
      'Import' => 'Importuj',
      'Template' => 'Szablon',
      'Job' => 'Zadanie',
      'EmailFilter' => 'Filtr wiadomości',
      'Portal' => 'Portal',
      'PortalRole' => 'Rola portalu',
      'Attachment' => 'Załącznik',
      'EmailFolder' => 'Folder wiadomości',
      'PortalUser' => 'Użytkownik portalu',
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
      'Account' => 'Klient',
      'Contact' => 'Kontakty',
      'Lead' => 'Potencjalny Kontakt',
      'Target' => 'Cel',
      'Opportunity' => 'Szansa sprzedaży',
      'Meeting' => 'Spotkanie',
      'Calendar' => 'Kalendarz',
      'Call' => 'Rozmowa',
      'Task' => 'Zadanie',
      'Case' => 'Sprawa',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Folder dokumentu',
      'Campaign' => 'Kampania',
      'TargetList' => 'Lista docelowa',
      'MassEmail' => 'Poczta masowa',
      'EmailQueueItem' => 'Element kolejki wiadomości',
      'CampaignTrackingUrl' => 'Adres śledzenia',
      'Activities' => 'Aktywności',
      'KnowledgeBaseArticle' => 'Artykuł bazy wiedzy',
      'KnowledgeBaseCategory' => 'Kategoria bazy wiedzy',
      'CampaignLogRecord' => 'Campaign Log Record',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
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
      'Beneficiario' => 'Beneficiario',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Wiadomości',
      'User' => 'Użytkownik',
      'Team' => 'Zespoły',
      'Role' => 'Rola',
      'EmailTemplate' => 'Szablony wiadomości',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Osobiste konta pocztowe',
      'EmailAccountScope' => 'Osobiste konta pocztowe',
      'OutboundEmail' => 'Poczta Wychodząca',
      'ScheduledJob' => 'Zaplanowane zadania',
      'ExternalAccount' => 'Konta zewnętrzne',
      'Extension' => 'Rozszerzenia',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Poczta Przychodząca',
      'Stream' => 'Stream',
      'Import' => 'Wyniki importu',
      'Template' => 'Szablony',
      'Job' => 'Zadania',
      'EmailFilter' => 'Filtry wiadomości',
      'Portal' => 'Portale',
      'PortalRole' => 'Role portalu',
      'Attachment' => 'Załączniki',
      'EmailFolder' => 'Foldery wiadomości',
      'PortalUser' => 'Użytkownicy portalu',
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
      'Account' => 'Klienci',
      'Contact' => 'Kontakty',
      'Lead' => 'Potencjalne Kontakty',
      'Target' => 'Cele',
      'Opportunity' => 'Szanse sprzedaży',
      'Meeting' => 'Spotkania',
      'Calendar' => 'Kalendarz',
      'Call' => 'Rozmowy',
      'Task' => 'Zadania',
      'Case' => 'Sprawy',
      'Document' => 'Dokumenty',
      'DocumentFolder' => 'Foldery dokumentów',
      'Campaign' => 'Kampanie',
      'TargetList' => 'Listy docelowe',
      'MassEmail' => 'Wiadomości masowe',
      'EmailQueueItem' => 'Elementy kolejki wiadomości',
      'CampaignTrackingUrl' => 'Adresy śledzenia',
      'Activities' => 'Aktywności',
      'KnowledgeBaseArticle' => 'Baza wiedzy',
      'KnowledgeBaseCategory' => 'Kategorie bazy wiedzy',
      'CampaignLogRecord' => 'Campaign Log Records',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
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
      'Beneficiario' => 'Beneficiarios',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Merge',
      'None' => 'Brak',
      'Home' => 'Home',
      'by' => 'przez',
      'Saved' => 'Zapisane',
      'Error' => 'Błąd',
      'Select' => 'Wybierz',
      'Not valid' => 'Nie poprawnie',
      'Please wait...' => 'Proszę Czekać...',
      'Please wait' => 'Proszę Czekać',
      'Loading...' => 'Ładuje...',
      'Uploading...' => 'Wgrywam na serwer...',
      'Sending...' => 'Wysyłam...',
      'Merging...' => 'Łączenie ...',
      'Merged' => 'Połączono',
      'Removed' => 'Usunięty',
      'Posted' => 'Opublikowany',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Done' => 'Gotowe',
      'Access denied' => 'Dostęp zabroniony',
      'Not found' => 'Nie znaleziono',
      'Access' => 'Dostęp',
      'Are you sure?' => 'Jesteś pewien?',
      'Record has been removed' => 'Rekord został usunięty',
      'Wrong username/password' => 'Zła nazwa użytkonika/hasło',
      'Post cannot be empty' => 'Notatka nie może byc pusta',
      'Removing...' => 'Usuwam...',
      'Unlinking...' => 'Unlinking...',
      'Posting...' => 'Nadaje...',
      'Username can not be empty!' => 'Nazwa użytkownika nie może byc pusta!',
      'Cache is not enabled' => 'Pamięć podręczna jest nie dostępna',
      'Cache has been cleared' => 'Pamięć podręczna została wyczyszczona',
      'Rebuild has been done' => 'Przebudowanie zostało zakończone',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Zapisuje...',
      'Modified' => 'Zmieniony',
      'Created' => 'Utworzony',
      'Create' => 'Utwórz',
      'create' => 'utwórz',
      'Overview' => 'Podgląd',
      'Details' => 'Detale',
      'Add Field' => 'Dodaj pole',
      'Add Dashlet' => 'Dodaj podgląd',
      'Filter' => 'Filtr',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Dodaj',
      'Add Item' => 'Dodaj element',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Więcej',
      'Search' => 'Szukaj',
      'Only My' => 'Tylko Moje',
      'Open' => 'Otwórz',
      'Admin' => 'Admin',
      'About' => 'O programie',
      'Refresh' => 'Odśwież',
      'Remove' => 'Usuń',
      'Options' => 'Opcje',
      'Username' => 'Użytkownik',
      'Password' => 'Hasło',
      'Login' => 'Login',
      'Log Out' => 'Wyloguj się',
      'Preferences' => 'Preferencje',
      'State' => 'Województwo',
      'Street' => 'Ulica',
      'Country' => 'Kraj',
      'City' => 'Miasto',
      'PostalCode' => 'Kod Pocztowy',
      'Followed' => 'Obserwowany',
      'Follow' => 'Obserwuj',
      'Followers' => 'Obserwatorzy',
      'Clear Local Cache' => 'Wyczyść Pamięć Podręczną',
      'Actions' => 'Akcja',
      'Delete' => 'Usuń',
      'Update' => 'Aktualizuj',
      'Save' => 'Zapisz',
      'Edit' => 'Edytuj',
      'View' => 'Pokaż',
      'Cancel' => 'Anuluj',
      'Apply' => 'Zatwierdź',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Masowa Akrualizacja',
      'Export' => 'Eksportuj',
      'No Data' => 'Brak Danych',
      'No Access' => 'Brak dostępu',
      'All' => 'Wszystko',
      'Active' => 'Aktywny',
      'Inactive' => 'Nieaktywny',
      'Write your comment here' => 'Dodaj swój komentarz tutaj',
      'Post' => 'Opublikuj',
      'Stream' => 'Komunikator',
      'Show more' => 'Pokaż Więcej',
      'Dashlet Options' => 'Opcje Podglądu',
      'Full Form' => 'Pełen Formularz',
      'Insert' => 'Wstaw',
      'Person' => 'Osoba',
      'First Name' => 'Imię',
      'Last Name' => 'Nazwisko',
      'Original' => 'Originalny',
      'You' => 'Ty',
      'you' => 'ty',
      'change' => 'zmień',
      'Change' => 'Zmień',
      'Primary' => 'Główny',
      'Save Filter' => 'Zapisz filtr',
      'Administration' => 'Administracja',
      'Run Import' => 'Uruchom Importowanie',
      'Duplicate' => 'Powielony',
      'Notifications' => 'powiadomienia',
      'Mark all read' => 'Oznacz wszystko jako przeczytane',
      'See more' => 'Zobacz więcej',
      'Today' => 'Dziś',
      'Tomorrow' => 'Jutro',
      'Yesterday' => 'Wczoraj',
      'Submit' => 'Wyślij',
      'Close' => 'Zamknij',
      'Yes' => 'Tak',
      'No' => 'Nie',
      'Select All Results' => 'Zaznacz wszystkie wyniki',
      'Value' => 'Wartość',
      'Current version' => 'Bieżąca wersja',
      'List View' => 'Widok listy',
      'Tree View' => 'Widok drzewka',
      'Unlink All' => 'Odłącz wszystko',
      'Total' => 'Łącznie',
      'Print to PDF' => 'Drukuj do PDF',
      'Default' => 'Domyślny',
      'Number' => 'Numer',
      'From' => 'Od',
      'To' => 'Do',
      'Create Post' => 'Utwórz post',
      'Previous Entry' => 'Poprzedni wpis',
      'Next Entry' => 'Następny wpis',
      'View List' => 'Wyświetl listę',
      'Attach File' => 'Załącz plik',
      'Skip' => 'Pomiń',
      'Attribute' => 'Atrybuty',
      'Function' => 'Funkcje',
      'Self-Assign' => 'Przypisz do siebie',
      'Self-Assigned' => 'Przypisany do Ciebie',
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
      'Create InboundEmail' => 'Utwórz pocztę przychodzącą',
      'Activities' => 'Aktywności',
      'History' => 'Historia',
      'Attendees' => 'Uczestnicy',
      'Schedule Meeting' => 'Zaplanuj Spotkanie',
      'Schedule Call' => 'Zaplanuj Telefon',
      'Compose Email' => 'Utwórz Wiadomość',
      'Log Meeting' => 'Zarejestruj Spotkanie',
      'Log Call' => 'Zarejestruj Telefon',
      'Archive Email' => 'Archiwizuj e-mail',
      'Create Task' => 'Utwórz zadanie',
      'Tasks' => 'Zadania',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Proszę czekać...',
      'posting' => 'Nadaje...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Na pewno chcesz wyjść z formularza?',
      'notModified' => 'Nie zmodyfikowałeś żadnych danych',
      'duplicate' => 'Dane które wprowadziłeś wyglądają na powielone',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => 'Pole {field} jest wymagane',
      'fieldShouldBeEmail' => '{field} powinno być poprawnym adresem e-mail',
      'fieldShouldBeFloat' => '{field} powinno być poprawną liczbą',
      'fieldShouldBeInt' => '{field} powinno być poprawną liczbą całkowitą',
      'fieldShouldBeDate' => '{field} powinno być poprawną datą',
      'fieldShouldBeDatetime' => '{field} powinno być poprawną datą/czasem',
      'fieldShouldAfter' => '{field} powinno być po {otherField}',
      'fieldShouldBefore' => '{field} powinno być przed {otherField}',
      'fieldShouldBeBetween' => '{field} powinno być między {min} i {max}',
      'fieldShouldBeLess' => '{field} powinno być mniejsze niż {value}',
      'fieldShouldBeGreater' => '{field} powinno być większe niż {value}',
      'fieldBadPasswordConfirm' => '{field} - błędnie potwierdzony',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Preferencje zostały zresetowane do domyślnych',
      'confirmation' => 'Jesteś pewien?',
      'unlinkAllConfirmation' => 'Na pewno chcesz odłąćzyć wszystkie powiązane rekordy?',
      'resetPreferencesConfirmation' => 'Na pewno chcesz zresetować ustawienia do domyślnych?',
      'removeRecordConfirmation' => 'Na pewno chcesz usunąć ten rekord?',
      'unlinkRecordConfirmation' => 'Na pewno chcesz odłączyć powiązanie?',
      'removeSelectedRecordsConfirmation' => 'Na pewno chcesz usunąć zaznaczone rekordy?',
      'massUpdateResult' => 'Ilość zaktualizowanych rekordów: {count}',
      'massUpdateResultSingle' => 'Ilość zaktualizowanych rekordów: {count}',
      'noRecordsUpdated' => 'Nic nie zaktualizowano',
      'massRemoveResult' => 'Ilość usuniętych rekordów: {count}',
      'massRemoveResultSingle' => 'Ilość usuniętych rekordów: {count}',
      'noRecordsRemoved' => 'Nic nie usunięto',
      'clickToRefresh' => 'Kliknij aby odświeżyć',
      'streamPostInfo' => 'Wpisz <strong>@użytkownik</strong> aby zaznaczyć użytkownika w poście.

Dostępne znaczniki:
`<code>kod</code>`
**<strong>pogrubiony</strong>**
*<em>pochylony</em>*
~<del>skasowany</del>~
> blockquote
[link text](url)',
      'writeYourCommentHere' => 'Dodaj swój komentarz tutaj',
      'writeMessageToUser' => 'Napisz wiadomość do {user}',
      'writeMessageToSelf' => 'Napisz wiadomość do siebie',
      'typeAndPressEnter' => 'Wpisz i wciśnij enter',
      'checkForNewNotifications' => 'Sprawdź czy są nowe powiadomienia',
      'checkForNewNotes' => 'Sprawdź czy są nowe wpisy',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Ukończone',
      'confirmMassFollow' => 'Czy na pewno chcesz śledzić wybrane rekordy?',
      'confirmMassUnfollow' => 'Are you sure you want to unfollow selected records?',
      'massFollowResult' => '{count} rekordów jest teraz śledzonych.',
      'massUnfollowResult' => '{count} rekordów nie jest teraz śledzonych.',
      'massFollowResultSingle' => '{count} rekordów są teraz śledzone',
      'massUnfollowResultSingle' => '{count} rekordów nie jest już śledzonych',
      'massFollowZeroResult' => 'Nie ma nic do śledzenia',
      'massUnfollowZeroResult' => 'Nie ma nic do zakończenia śledzenia',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Tylko Moje',
      'followed' => 'Obserwowany',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Obserwowany',
      'all' => 'Wszystko',
    ),
    'massActions' => 
    array (
      'remove' => 'Usuń',
      'merge' => 'Połącz',
      'massUpdate' => 'Masowa aktualizacja',
      'export' => 'Eksport',
      'follow' => 'Śledź',
      'unfollow' => 'Nie śledź',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Nazwa',
      'firstName' => 'Imię',
      'lastName' => 'Nazwisko',
      'salutationName' => 'Zwrot',
      'assignedUser' => 'Przypisany użytkownik',
      'assignedUsers' => 'Przypisani użytkownicy',
      'emailAddress' => 'E-mail',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Przypisana nazwa użytkownika',
      'teams' => 'Zespoły',
      'createdAt' => 'Utworzony',
      'modifiedAt' => 'Zmodyfikowany do',
      'createdBy' => 'Utworzony przez',
      'modifiedBy' => 'Zmodyfikowany przez',
      'description' => 'Opis',
      'address' => 'Adres',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (komórka)',
      'phoneNumberHome' => 'Telefon (domowy)',
      'phoneNumberFax' => 'Numer faks',
      'phoneNumberOffice' => 'Telefon (biuro)',
      'phoneNumberOther' => 'Telefon (inny)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Kolejność',
      'parent' => 'Rodzic',
      'children' => 'Children',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Miasto',
      'billingAddressCountry' => 'Kraj',
      'billingAddressPostalCode' => 'Kod Pocztowy',
      'billingAddressState' => 'Województwo',
      'billingAddressStreet' => 'Ulica',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Miasto',
      'addressStreet' => 'Ulica',
      'addressCountry' => 'Kraj',
      'addressState' => 'Województwo',
      'addressPostalCode' => 'Kod Pocztowy',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Miasto (dostawy)',
      'shippingAddressStreet' => 'Ulica (dostawy)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Kod pocztowy (dostawy)',
      'shippingAddressMap' => 'Mapa (Dostawa)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Przypisany użytkownik',
      'createdBy' => 'Utworzony przez',
      'modifiedBy' => 'Zmodyfikowany przez',
      'team' => 'Zespół',
      'roles' => 'Role',
      'teams' => 'Zespoły',
      'users' => 'Użytkownik',
      'parent' => 'Rodzic',
      'children' => 'Children',
      'contacts' => 'Kontakty',
      'opportunities' => 'Szanse sprzedaży',
      'leads' => 'Potencjalne Kontakty',
      'meetings' => 'Spotkania',
      'calls' => 'Rozmowy',
      'tasks' => 'Zadania',
      'emails' => 'Wiadomości',
      'accounts' => 'Klienci',
      'cases' => 'Sprawy',
      'documents' => 'Dokumenty',
      'account' => 'Klient',
      'opportunity' => 'Szansa sprzedaży',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Komunikator',
      'Emails' => 'Skrzynka odbiorcza',
      'Records' => 'Record List',
      'Leads' => 'Moje Potencjalne Kontakty',
      'Opportunities' => 'Moje Szanse Sprzedaży',
      'Tasks' => 'Moje Zadania',
      'Cases' => 'Moje Zlecenia',
      'Calendar' => 'Kalendarz',
      'Calls' => 'Moje Telefony',
      'Meetings' => 'Moje Spotkania',
      'OpportunitiesByStage' => 'Szanse według etapu',
      'OpportunitiesByLeadSource' => 'Szanse według potencjalnych kontaktów',
      'SalesByMonth' => 'Sprzedaż Miesięczna',
      'SalesPipeline' => 'Lejek Sprzedaży',
      'Activities' => 'Moje aktywności',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} zostało do ciebie przypisane',
      'emailReceived' => 'Wiadomość otrzymana od {from}',
      'entityRemoved' => '{user} usunął {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} opublikował {entityType} {entity}',
      'attach' => '{user} załączył {entityType} {entity}',
      'status' => '{user} zaaktualizował {field} w {entityType} {entity}',
      'update' => '{user} zaaktualizował {entityType} {entity}',
      'postTargetTeam' => '{user} opublikował dla zespołu {target}',
      'postTargetTeams' => '{user} opublikował dla zespołów {target}',
      'postTargetPortal' => '{user} opublikował na portalu {target}',
      'postTargetPortals' => '{user} opublikował na portalach {target}',
      'postTarget' => '{user} opublikował dla {target}',
      'postTargetYou' => '{user} opublikował dla ciebie',
      'postTargetYouAndOthers' => '{user} opublikował dla {target} i ciebie',
      'postTargetAll' => '{user} opublikował dla wszystkich',
      'postTargetSelf' => '{user} opublikował dla siebie',
      'postTargetSelfAndOthers' => '{user} opublikował dla {target} i siebie',
      'mentionInPost' => '{user} wspomniał {mentioned} w {entityType} {entity}',
      'mentionYouInPost' => '{user} wspomniał o tobie w {entityType} {entity}',
      'mentionInPostTarget' => '{user} wspomniał {mentioned} w wiadomości',
      'mentionYouInPostTarget' => '{user} wspomniał o tobie w wiadomości do {target}',
      'mentionYouInPostTargetAll' => '{user} wspomniał o tobie w wiadomości do wszystkich',
      'mentionYouInPostTargetNoTarget' => '{user} wspomniał o tobie w wiadomości',
      'create' => '{user} utworzył {entityType} {entity}',
      'createThis' => '{user} utworzył to {entityType}',
      'createAssignedThis' => '{user} utworzył to {entityType} przypisane do {assignee}',
      'createAssigned' => '{user} utworzył {entityType} {entity} przydzielone do {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} przypisał {entityType} {entity} do {assignee}',
      'assignThis' => '{user} przypisz to {entityType} do {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} opublikował',
      'attachThis' => '{user} załączył',
      'statusThis' => '{user} zaaktualizował {field}',
      'updateThis' => '{user} aktualizuj to {entityType}',
      'createRelatedThis' => '{user} utworzył {relatedEntityType} {relatedEntity} powiązane z tym {entityType}',
      'createRelated' => '{user} utworzył {relatedEntityType} {relatedEntity} połączone z {entityType} {entity}',
      'relate' => '{user} powiązał {relatedEntityType} {relatedEntity} z {entityType} {entity}',
      'relateThis' => '{user} połączył {relatedEntityType} {relatedEntity} z tym {entityType}',
      'emailReceivedFromThis' => 'Wiadomość otrzymana od {from}',
      'emailReceivedInitialFromThis' => 'Wiadomość od {from}, to {entityType} zostało utworzone',
      'emailReceivedThis' => '{entity} has been received',
      'emailReceivedInitialThis' => 'Wiadomość otrzymana, to {entityType} zostało utworzone',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} został otrzymane dla {entityType} {entity}',
      'emailReceivedInitial' => 'Email received: {entityType} {entity} created',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} wysłał wiadomość e-mail w sprawie {entityType} {entity}',
      'emailSentThis' => '{by} wysłał wiadomość e-mail',
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
        0 => 'Styczeń',
        1 => 'Luty',
        2 => 'Marzec',
        3 => 'Kwiecień',
        4 => 'Maj',
        5 => 'Czerwiec',
        6 => 'Lipiec',
        7 => 'Sierpień',
        8 => 'Wrzesień',
        9 => 'Październik',
        10 => 'Listopad',
        11 => 'Grudzień',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Sty',
        1 => 'Lut',
        2 => 'Mar',
        3 => 'Kwi',
        4 => 'Maj',
        5 => 'Czer',
        6 => 'Lip',
        7 => 'Sie',
        8 => 'Wrze',
        9 => 'Paź',
        10 => 'Lis',
        11 => 'Gru',
      ),
      'dayNames' => 
      array (
        0 => 'Niedziela',
        1 => 'Poniedziałek',
        2 => 'Wtorek',
        3 => 'Środa',
        4 => 'Czwartek',
        5 => 'Piątek',
        6 => 'Sobota',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Ndz',
        1 => 'Pon',
        2 => 'Wto',
        3 => 'Śro',
        4 => 'Czwa',
        5 => 'Pią',
        6 => 'Sob',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Nd',
        1 => 'Pn',
        2 => 'Wt',
        3 => 'Śr',
        4 => 'Czw',
        5 => 'Pi',
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
        'Mr.' => 'Pan.',
        'Mrs.' => 'Pani.',
        'Ms.' => 'Panna',
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
        'fa_IR' => 'Perski',
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
        'pl_PL' => 'Polski',
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
        'on' => 'Włączony',
        'notOn' => 'Nie Włączony',
        'after' => 'Po',
        'before' => 'Przed',
        'between' => 'Między',
        'today' => 'Dziś',
        'past' => 'Przeszłość',
        'future' => 'Przyszłość',
        'currentMonth' => 'Bieżący miesiąc',
        'lastMonth' => 'Poprzedni miesiąc',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Bieżący kwartał',
        'lastQuarter' => 'Poprzedni kwartał',
        'currentYear' => 'Obecny rok',
        'lastYear' => 'Poprzedni rok',
        'lastSevenDays' => 'Ostatnie 7 dni',
        'lastXDays' => 'Ostatnie X dni',
        'nextXDays' => 'Kolejne X dni',
        'ever' => 'Ever',
        'isEmpty' => 'Jest pusty',
        'olderThanXDays' => 'Starszy niż X dni',
        'afterXDays' => 'After X Days',
      ),
      'searchRanges' => 
      array (
        'is' => 'Jest',
        'isEmpty' => 'Jest Puste',
        'isNotEmpty' => 'Nie jest puste',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Jest z zespołu',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Równy',
        'like' => 'Podobieństwo (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Zaczyna sie od',
        'endsWith' => 'Kończy się znakiem',
        'contains' => 'Zawiera',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Jest Puste',
        'isNotEmpty' => 'Nie jest puste',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Równy',
        'notEquals' => 'Nie Równy',
        'greaterThan' => 'Większy Niż',
        'lessThan' => 'Mniejszy Niż',
        'greaterThanOrEquals' => 'Większy lub Równy',
        'lessThanOrEquals' => 'Mniejszy lub Równy',
        'between' => 'Między',
        'isEmpty' => 'Jest posty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Brak',
        '0.5' => '30 sekund',
        1 => '1 minuta',
        2 => '2 minuty',
        5 => '5 minut',
        10 => '10 minut',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Komórka',
        'Office' => 'Biuro',
        'Fax' => 'Faks',
        'Home' => 'Domowy',
        'Other' => 'Inny',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Wyskakujące okienko',
        'Email' => 'E-mail',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Możesz znaleść tłumaczenie tutaj: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Pogrubiony',
          'italic' => 'Pochylenie',
          'underline' => 'Podkreślenie',
          'strike' => 'Przekreślnie',
          'clear' => 'Usunięto formatowanie tekstu',
          'height' => 'Szerokość Lini',
          'name' => 'Czcionka',
          'size' => 'Rozmiar Czcionki',
        ),
        'image' => 
        array (
          'image' => 'Obraz',
          'insert' => 'Dodaj Obraz',
          'resizeFull' => 'Przeskaluj na pełny rozmiar',
          'resizeHalf' => 'Przeszkaluj na połowę rozmiaru',
          'resizeQuarter' => 'Przeskaluj do 1/4 rozmiaru',
          'floatLeft' => 'Równaj do lewej',
          'floatRight' => 'Równaj do prawej',
          'floatNone' => 'Nie zmieniaj ',
          'dragImageHere' => 'Upuść obraz tutaj',
          'selectFromFiles' => 'Wybierz plik z dysku',
          'url' => 'Adres do Obrazu',
          'remove' => 'Usuń Obraz',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Insert Link',
          'unlink' => 'Unlink',
          'edit' => 'Edytuj',
          'textToDisplay' => 'Tekst do wyświetlenia',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Otwórz w nowym oknie',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Wstaw Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabela',
        ),
        'hr' => 
        array (
          'insert' => 'Wstaw Linię Poziomą',
        ),
        'style' => 
        array (
          'style' => 'Styl',
          'normal' => 'Normalny',
          'blockquote' => 'Cytat',
          'pre' => 'Code',
          'h1' => 'Nagłówek 1',
          'h2' => 'Nagłówek 2',
          'h3' => 'Nagłówek 3',
          'h4' => 'Nagłówek 4',
          'h5' => 'Nagłówek 5',
          'h6' => 'Nagłówek 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Niewypunktowana lista',
          'ordered' => 'Lista numerowana',
        ),
        'options' => 
        array (
          'help' => 'Pomoc',
          'fullscreen' => 'Pełny Ekran',
          'codeview' => 'Źródło',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Akapit',
          'outdent' => 'Zmniejsz wcięcie',
          'indent' => 'Zwiększ wcięcie',
          'left' => 'Wyrównaj do lewej',
          'center' => 'Wyrównaj do środka',
          'right' => 'Wyrównaj do prawej',
          'justify' => 'Wyrównaj do lewej i prawej',
        ),
        'color' => 
        array (
          'recent' => 'Ostatni Kolor',
          'more' => 'Więcej Kolorów',
          'background' => 'Kolor Tła',
          'foreground' => 'Kolor Czcionki',
          'transparent' => 'Przeźroczystość',
          'setTransparent' => 'Ustwa przeźroczystość',
          'reset' => 'Reset',
          'resetToDefault' => 'Domyślnie',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Skróty klawiaturowe',
          'close' => 'Zamknij',
          'textFormatting' => 'Formatowanie tekstu',
          'action' => 'Akcja',
          'paragraphFormatting' => 'Formatowanie akapitu',
          'documentStyle' => 'Style dokumentu',
        ),
        'history' => 
        array (
          'undo' => 'Cofnij',
          'redo' => 'Redo',
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
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Vertical Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Cofnij import',
      'Return to Import' => 'Return to Import',
      'Run Import' => 'Uruchom import',
      'Back' => 'Wróć',
      'Field Mapping' => 'Mapowanie pól',
      'Default Values' => 'Wartość domyślna',
      'Add Field' => 'Dodaj pole',
      'Created' => 'Utworzony',
      'Updated' => 'Zaktualizowano',
      'Result' => 'Wyniki',
      'Show records' => 'Pokaż rekordy',
      'Remove Duplicates' => 'Usuń duplikaty',
      'importedCount' => 'Zaimportowane (ilość)',
      'duplicateCount' => 'Duplikaty (ilość)',
      'updatedCount' => 'Zaktualizowano (ilość)',
      'Create Only' => 'Tylko utwórz',
      'Create and Update' => 'Utwórz i aktualizuj',
      'Update Only' => 'Tylko aktualizuj',
      'Update by' => 'Zaktualizowane przez',
      'Set as Not Duplicate' => 'Set as Not Duplicate',
      'File (CSV)' => 'Plik (CSV)',
      'First Row Value' => 'Wartość pierwszego rzędu',
      'Skip' => 'Pomiń',
      'Header Row Value' => 'Wartość wiersza nagłówka',
      'Field' => 'Pole',
      'What to Import?' => 'Co importować?',
      'Entity Type' => 'Typ jednostki',
      'What to do?' => 'Co do zrobienia?',
      'Properties' => 'Właściwości',
      'Header Row' => 'Wiersz nagłówka',
      'Person Name Format' => 'Person Name Format',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Rozgranicznik pól',
      'Date Format' => 'Format daty',
      'Decimal Mark' => 'Znak rozdzielenia',
      'Text Qualifier' => 'Kwalifikator tekstu',
      'Time Format' => 'Format czasu',
      'Currency' => 'Waluta',
      'Preview' => 'Podgląd',
      'Next' => 'Następny',
      'Step 1' => 'Krok 1',
      'Step 2' => 'Krok 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Imported',
      'Duplicates' => 'Duplikaty',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Should be UTF-8 encoded',
      'duplicatesRemoved' => 'Duplikaty usunięte',
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
      'file' => 'Plik',
      'entityType' => 'Typ jednostki',
      'imported' => 'Zaimportowane rekordy',
      'duplicates' => 'Zdublowane rekordy',
      'updated' => 'Zaktualizowane rekordy',
      'status' => 'Status',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Niepowodzenie',
        'In Process' => 'W trakcie',
        'Complete' => 'Ukończone',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'emailAddress' => 'Adres e-mail',
      'team' => 'Zespół',
      'status' => 'Status',
      'assignToUser' => 'Przydzielone do użytkownika',
      'host' => 'Host',
      'username' => 'Nazwa użytkownika',
      'password' => 'Hasło',
      'port' => 'Port',
      'monitoredFolders' => 'Monitorowane katalogi',
      'trashFolder' => 'Katalog kosza',
      'ssl' => 'SSL',
      'createCase' => 'Utwórz sprawę',
      'reply' => 'Auto-odpowiedź',
      'caseDistribution' => 'Dystrybucja spraw',
      'replyEmailTemplate' => 'Szablon wiadomości odpowiedzi',
      'replyFromAddress' => 'Pole nadawca',
      'replyToAddress' => 'Odpowiedz do',
      'replyFromName' => 'Nazwa nadawcy',
      'targetUserPosition' => 'Pozycja użytkownika docelowego',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'Dla wszystkich członków zespołu',
      'teams' => 'Zespoły',
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
      'reply' => 'Powiadamiaj nadawcę o dostarczeniu jego wiadomości.

Zostanie wysłana tylko jedna wiadomość na jednego odbiorcę w jednostce czasu aby ustrzec przed powstaniem pętli.',
      'createCase' => 'Automatycznie twórz sprawę z przychodzących emaili',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'Wiadomości użytkownika/sprawy zostaną przypisane do.',
      'team' => 'Zespołowe wiadomości/sprawy będą powiązane z.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Define the position of users which will be destributed with cases.',
      'addAllTeamUsers' => 'Emails will appear in Inbox of all users of a specified team.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filtry',
      'emails' => 'Wiadomości',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktywne',
        'Inactive' => 'Nieaktywny',
      ),
      'caseDistribution' => 
      array (
        '' => 'Brak',
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Utwórz konto pocztowe',
      'IMAP' => 'IMAP',
      'Actions' => 'Akcje',
      'Main' => 'Main',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could not connect to IMAP server',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Włączony',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
      'apiKey' => 'Klucz API',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Mapy Google',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Select an integration from menu.',
      'noIntegrations' => 'Nie ma dostępnych integracji.',
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
      'executeTime' => 'Wykonaj o',
      'attempts' => 'Pozostałe próby',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Service',
      'method' => 'Method',
      'methodName' => 'Method',
      'scheduledJob' => 'Zaplanowane zadanie',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Oczekiwanie',
        'Success' => 'Sukces',
        'Running' => 'Running',
        'Failed' => 'Failed',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Szerokość (%)',
      'link' => 'Link',
      'notSortable' => 'Niesortowalne',
      'align' => 'Wyrównanie',
      'panelName' => 'Nazwa panelu',
      'style' => 'Styl',
      'sticked' => 'Sticked',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Lewy',
        'right' => 'Prawy',
      ),
      'style' => 
      array (
        'default' => 'Default',
        'success' => 'Powodzenie',
        'danger' => 'Niebezpieczeństwo',
        'info' => 'Informacje',
        'warning' => 'Ostrzeżenie',
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
      'post' => 'Opublikuj',
      'attachments' => 'Załącznik',
      'targetType' => 'Cel',
      'teams' => 'Zespoły',
      'users' => 'Użytkownicy',
      'portals' => 'Portale',
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
      'all' => 'Wszystko',
      'posts' => 'Posty',
      'updates' => 'Aktualizacje',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'Do siebie',
        'users' => 'Do wybranego użytkownika(ów)',
        'teams' => 'Do wybranych grup(y)',
        'all' => 'Do wszystkich użytkowników wewnętrznych',
        'portals' => 'Do wszystkich użytkowników portalu',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Tutaj wpisz swoją wiadomość',
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
      'name' => 'Nazwa',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Role',
      'isActive' => 'Jest aktywny',
      'isDefault' => 'Jest domyślny',
      'tabList' => 'Lista zakładek',
      'quickCreateList' => 'Szybkie tworzenie listy',
      'companyLogo' => 'Logo',
      'theme' => 'Motyw',
      'language' => 'Język',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Format daty',
      'timeFormat' => 'Format czasu',
      'timeZone' => 'Strefa czasowa',
      'weekStart' => 'Pierwszy dzień tygodnia',
      'defaultCurrency' => 'Domyślna waluta',
      'customUrl' => 'Inny URL',
      'customId' => 'Własny ID',
    ),
    'links' => 
    array (
      'users' => 'Użytkownicy',
      'portalRoles' => 'Role',
      'notes' => 'Notatki',
      'articles' => 'Artykuły bazy wiedzy',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Create Portal',
      'User Interface' => 'Interfejs użytkownika',
      'General' => 'General',
      'Settings' => 'Ustawienia',
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
      'users' => 'Użytkownicy',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Dostęp',
      'Create PortalRole' => 'Create Portal Role',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Utwórz Użytkownika Portalu',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format daty',
      'timeFormat' => 'Format Czasu',
      'timeZone' => 'Strefa Czasowa',
      'weekStart' => 'Pierwszy dzień tygodnia',
      'thousandSeparator' => 'Separator Dziesiętny',
      'decimalMark' => 'Znak rozdzielenia',
      'defaultCurrency' => 'Domyślna waluta',
      'currencyList' => 'Domyślana Lista',
      'language' => 'Język',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpieczenia',
      'smtpUsername' => 'Użytkownik',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Hasło',
      'smtpEmailAddress' => 'E-mail Adres',
      'exportDelimiter' => 'Znak rodzielenia eksportu',
      'receiveAssignmentEmailNotifications' => 'Prześlij wiadomość po przypisaniu',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Automatycznie obserwuj',
      'signature' => 'Sygnatura',
      'dashboardTabList' => 'Lista zakładek',
      'defaultReminders' => 'Domyślne powiadomienia',
      'theme' => 'Motyw',
      'useCustomTabList' => 'Custom Tab List',
      'tabList' => 'Lista zakładek',
      'emailReplyToAllByDefault' => 'Domyślnie odpowiadaj wszystkim',
      'dashboardLayout' => 'Styl Głównego Panelu',
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
        0 => 'Niedziela',
        1 => 'Poniedziałek',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'powiadomienia',
      'User Interface' => 'Interfejs Użytkonika',
      'SMTP' => 'SMTP',
      'Misc' => 'Różne',
      'Locale' => 'Lokalizacja',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Użytkownik będzie automatycznie obserwować nowe rekordy wybranych typów jednostek, będzie widzieć informacje w wiadomościach oraz otrzyma powiadomienia.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'roles' => 'Rola',
      'assignmentPermission' => 'Uprawnienia przypisania',
      'userPermission' => 'Uprawnienia użytkownika',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Użytkownik',
      'teams' => 'Zespoły',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Pozwala ograniczyć możliwość przypisania rekordów oraz wysyłanie wiadomości do innych użytkowników.

wszystko - brak ograniczeń

zespół - może przydzielać i wysyłać wiadomości wyłącznie do członków swojego zespołu

nie - może przypisywać i wysyłać wiadomości tylko do siebie',
      'userPermission' => 'Pozwala ograniczyć użytkownikom możliwość wyświetlania aktywności, kalendarza i wiadomości innych użytkowników.

wszystko - może przeglądać wszystko

zespół - może wyświetlać wyłącznie aktywności użytkowników swojego zespołu

nie - nic nie widzi',
      'portalPermission' => 'Defines an access to portal information, ability to convert contacts to portal users and post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Dostęp',
      'Create Role' => 'Utwórz Role ',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nie ustawiony',
        'enabled' => 'włączony',
        'disabled' => 'wyłączony',
      ),
      'levelList' => 
      array (
        'all' => 'wszystko',
        'team' => 'zespół',
        'account' => 'Klient',
        'contact' => 'contact',
        'own' => 'własny',
        'no' => 'nie',
        'yes' => 'tak',
        'not-set' => 'nie ustawiony',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Przeczytany',
      'edit' => 'Edytuj',
      'delete' => 'Usuń',
      'stream' => 'Stream',
      'create' => 'Utwórz',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Wszystkie zmiany w dostępie zostaną aktywowany w momencie wyczyszczenia pamięci.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'status' => 'Status',
      'job' => 'Zadanie',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Utwórz zaplanowane działania',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Wyczyść',
        'CheckInboundEmails' => 'Sprawdź pocztę przychodzącą',
        'CheckEmailAccounts' => 'Sprawdź osobiste konta pocztowe',
        'SendEmailReminders' => 'Wyślij przypomnienia',
        'AuthTokenControl' => 'Kontrola tokenu autentykacji',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Wyślij wiadomości masowe',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Uwaga: Dodaj tą linię do pliku crontab, aby uruchomić zaplanowane zadania Espo:',
        'mac' => 'Uwaga: Dodaj tą linię do pliku crontab, aby uruchomić zaplanowane zadania Espo:',
        'windows' => 'Uwaga: Utwórz plik wsadowy z następujących poleceń, aby uruchomić zaplanowane zadania Espo w systemie Windows:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Aktywny',
        'Inactive' => 'Nie Aktywny',
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
      'executionTime' => 'Czas realizacji',
      'target' => 'Cel',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Użyj pamięci podręcznej',
      'dateFormat' => 'Format daty',
      'timeFormat' => 'Format Czasu',
      'timeZone' => 'Strefa Czasowa',
      'weekStart' => 'Pierwszy dzień tygodnia',
      'thousandSeparator' => 'Separator Dziesiętny',
      'decimalMark' => 'Znak rozdzielenia',
      'defaultCurrency' => 'Domyślna waluta',
      'baseCurrency' => 'Podstawowa Waluta',
      'currencyRates' => 'Kurs Waluty',
      'currencyList' => 'Domyślana Lista',
      'language' => 'Język',
      'companyLogo' => 'Logo Firmowe',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Zabezpieczenia',
      'smtpUsername' => 'Użytkownik',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Hasło',
      'outboundEmailFromName' => 'Od',
      'outboundEmailFromAddress' => 'Z adresu',
      'outboundEmailIsShared' => 'Jest Udostępniane',
      'recordsPerPage' => 'Wyników na stronę',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Lista ',
      'quickCreateList' => 'Szybkie utworzenie listy',
      'exportDelimiter' => 'Znak rodzielenia eksportu',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Metoda autentykcji',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Użytkownik',
      'ldapPassword' => 'Hasło',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Nazwa konta domeny',
      'ldapTryUsernameSplit' => 'Spróbuj rodzielić nazwę użytkonika',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Utwórz uzytkonika w EspoCRM',
      'ldapSecurity' => 'Zabezpieczenia',
      'ldapUserLoginFilter' => 'Filtr użytkoników ',
      'ldapAccountDomainNameShort' => 'Krótka nazwa konta domeny',
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
      'assignmentNotificationsEntityList' => 'Jednostki o których powiadamiać przy przypisaniu',
      'assignmentEmailNotifications' => 'Wyślij powiadominie do użytkonika o przypisaniu',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify About',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'Tryb B2C',
      'avatarsDisabled' => 'Wyłącz awatary',
      'followCreatedEntities' => 'Obserwuj utworzone ',
      'displayListViewRecordCount' => 'Wyświetl łączną ilość (na widoku listy)',
      'theme' => 'Motyw',
      'userThemesDisabled' => 'wyłącz szablony użytkownika',
      'emailMessageMaxSize' => 'Maksymalny rozmiar wiadomości (MB)',
      'massEmailMaxPerHourCount' => 'Maksymalna ilość wiadomości wysłanych na godzinę',
      'personalEmailMaxPortionSize' => 'Maksymalna porcja pobieranych wiadomości dla osobistego konta',
      'inboundEmailMaxPortionSize' => 'Maksymalna porcja pobieranych wiadomości dla grupowych kont',
      'maxEmailAccountCount' => 'Max count of personal email accounts per user',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Podgląd adresu',
      'addressFormat' => 'Format adresu',
      'notificationSoundsDisabled' => 'Wyłącz powiadomienia dźwiękowe',
      'applicationName' => 'Nazwa aplikacji',
      'calendarEntityList' => 'Lista jednostek w Kalendarzu',
      'mentionEmailNotifications' => 'Wyślij informacje na temat wzmianki w postach',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'activitiesEntityList' => 'Aktywuj listę Jednostek',
      'historyEntityList' => 'Historia listy Jednostek',
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
        0 => 'Niedziela',
        1 => 'Poniedziałek',
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
      'recordsPerPage' => 'Ilość rekordów wyświetlanych w widoku listy.',
      'recordsPerPageSmall' => 'Ilość rekordów wyświetlanych w panelu relacji.',
      'outboundEmailIsShared' => 'Pozwól użytkownikom na wysyłanie wiadomości przez ten serwer SMTP.',
      'followCreatedEntities' => 'Użytkownicy będą automatycznie obserwować rekordy przez nich utworzone.',
      'emailMessageMaxSize' => 'Wszystkie przychodzące e-maile',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'If checked then users won\'t be able to select another theme.',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'Hasło do serwera LDAP',
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
      'System' => 'System',
      'Locale' => 'Lokalne',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguracja',
      'In-app Notifications' => 'Powiadomienia w aplikacji',
      'Email Notifications' => 'Powiadomienia email',
      'Currency Settings' => 'Ustwienia Waluty',
      'Currency Rates' => 'Wymiana walut',
      'Mass Email' => 'Poczta masowa',
      'Test Connection' => 'Testowanie połączenia',
      'Connecting' => 'Łączenie...',
      'Activities' => 'Aktywności ',
      'Admin Notifications' => 'Admin Notifications',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Połączenie zostało nawiązane poprawnie.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'roles' => 'Rola',
      'positionList' => 'Position List',
    ),
    'links' => 
    array (
      'users' => 'Użytkownik',
      'notes' => 'Notatki',
      'roles' => 'Role',
      'inboundEmails' => 'Grupowe konta pocztowe',
    ),
    'tooltips' => 
    array (
      'roles' => 'Wszyscy użytkownicy z zespołu otrzymają dostęp do ustawień zgodnie z rolami.',
      'positionList' => 'Pozycje dostępne w tym zespole, np sprzedawca, menadżer.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Utwórz Zespół',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'body' => 'Treść',
      'entityType' => 'Typ jednostki',
      'header' => 'Nagłówek',
      'footer' => 'Stopka',
      'leftMargin' => 'Lewy margines',
      'topMargin' => 'Górny margines',
      'rightMargin' => 'Prawy margines',
      'bottomMargin' => 'Dolny margines',
      'printFooter' => 'Drukuj stopkę',
      'footerPosition' => 'Pozycja stopki',
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
      'Create Template' => 'Utwórz szablon',
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
      'footer' => 'Użyj {pageNumber} aby wydrukować numer strony.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'userName' => 'Nazwa Użytkownika',
      'title' => 'Tytuł',
      'isAdmin' => 'Czy jest Administratorem',
      'defaultTeam' => 'Domyślny Zespół',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telefon',
      'roles' => 'Rola',
      'portals' => 'Portale',
      'portalRoles' => 'Role portalu',
      'teamRole' => 'Stanowisko',
      'password' => 'Hasło',
      'currentPassword' => 'Bieżące hasło',
      'passwordConfirm' => 'Potwierdź Hasło',
      'newPassword' => 'Nowe Hasło',
      'newPasswordConfirm' => 'Potwierdź nowe hasło',
      'avatar' => 'Awatar',
      'isActive' => 'Jest aktywny',
      'isPortalUser' => 'Is Portal User',
      'contact' => 'Kontakt',
      'accounts' => 'Klienci',
      'account' => 'Klient',
      'sendAccessInfo' => 'Wyślij użytkownikowi wiadomość z danymi dostępu',
      'portal' => 'Portal',
      'gender' => 'Płeć',
      'position' => 'Pozycja w drużynie',
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
      'teams' => 'Zespoły',
      'roles' => 'Rola',
      'notes' => 'Notatki',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Kontakt',
      'accounts' => 'Klienci',
      'account' => 'Konto (podstawowe)',
      'tasks' => 'Zadania',
      'targetLists' => 'Listy docelowe',
    ),
    'labels' => 
    array (
      'Create User' => 'Utwórz Użytkonika',
      'Generate' => 'Generuj',
      'Access' => 'Dostęp',
      'Preferences' => 'Preferencje',
      'Change Password' => 'Zmień hasło',
      'Teams and Access Control' => 'Zespoły i kontrola dostępu',
      'Forgot Password?' => 'Zapomniałeś hasła?',
      'Password Change Request' => 'Żądanie zmiany hasła',
      'Email Address' => 'Adres e-mail',
      'External Accounts' => 'Konta zewnętrzne',
      'Email Accounts' => 'Konta pocztowe',
      'Portal' => 'Portal',
      'Create Portal User' => 'Utwórz użytkownika portalu',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Wszystkie dane utworzone przez tego użytkonika zostaną przypisane do domyślnego zespołu.',
      'userName' => 'Letters a-z, numbers 0-9, dots, hyphens, @-signs and underscores are allowed.',
      'isAdmin' => 'Administrator ma dostęp do wszystkiego.',
      'isActive' => 'Jeśli odznaczone, użytkownik nie będzie mógł się zalogować',
      'teams' => 'Zespoły, do których ten użytkownik należy. Poziom dostępu jest dziedziczony z rol zespołów.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level exclusively for this user.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Hasło zostanie wysłane na adres e-mail użytkonika.',
      'accountInfoEmailSubject' => 'Informacje o koncie',
      'accountInfoEmailBody' => 'Informacje o twoim koncie:

Użytkonik: {userName}
Hasło: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Żądanie zmiany hasła',
      'passwordChangeLinkEmailBody' => 'Możesz zmienić hasło klikając w link {link}. Ten URL jest unikalny i wkrótce będzie nieważny.',
      'passwordChanged' => 'Hasło zostało zmienione',
      'userCantBeEmpty' => 'Nazwa użytkownika nie może być pusta',
      'wrongUsernamePasword' => 'Nieprawidłowa nazwa użytkownika/hasło',
      'emailAddressCantBeEmpty' => 'Adres e-mail nie może być pusty',
      'userNameEmailAddressNotFound' => 'Użytkownik/email nie został odnaleziony',
      'forbidden' => 'Zabronione, proszę spróbować później',
      'uniqueLinkHasBeenSent' => 'Unikalny adres URL został wysłany na podany adres email.',
      'passwordChangedByRequest' => 'Hasło zostało zmienione',
      'setupSmtpBefore' => 'Musisz skonfigurować <a href="{url}">pocztę wychodzącą</a> aby móc wysyłać hasła na e-mail.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Nie ustawiono',
        'Male' => 'Mężczyzna',
        'Female' => 'Kobieta',
        'Neutral' => 'Nautralne',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Tylko mój zespół',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktywny',
      'activePortal' => 'Portal Active',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'emailAddress' => 'E-mail',
      'website' => 'Strona Internetowa',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adres Firmy',
      'shippingAddress' => 'Adres Dostawy',
      'description' => 'Opis ',
      'sicCode' => 'PKD',
      'industry' => 'Branża',
      'type' => 'Rodzaj',
      'contactRole' => 'Rola',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Kampania',
      'targetLists' => 'Listy docelowe',
      'targetList' => 'Lista docelowa',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
      'opportunities' => 'Szanse sprzedaży',
      'cases' => 'Sprawy',
      'documents' => 'Dokumenty',
      'meetingsPrimary' => 'Spotkania (rozwinięte)',
      'callsPrimary' => 'Rozmowy (rozwinięte)',
      'tasksPrimary' => 'Zadania (rozwinięte)',
      'emailsPrimary' => 'Wiadomości (rozwinięte)',
      'targetLists' => 'Listy docelowe',
      'campaignLogRecords' => 'Log kampanii',
      'campaign' => 'Kampania',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Klient',
        'Investor' => 'Inwestor',
        'Partner' => 'Partner',
        'Reseller' => 'Sprzedawca',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Reklamy',
        'Apparel & Accessories' => 'Wystrój i akcesoria',
        'Architecture' => 'Architektura',
        'Automotive' => 'Motoryzacja',
        'Banking' => 'Bankowość',
        'Biotechnology' => 'Biotechnologia',
        'Building Materials & Equipment' => 'Materiały budowlane i wyposażenie',
        'Chemical' => 'Chemia',
        'Construction' => 'Construction',
        'Computer' => 'Komputery',
        'Defense' => 'Obrona',
        'Creative' => 'Kreatywność',
        'Culture' => 'Kultura',
        'Consulting' => 'Konsulting',
        'Education' => 'Edukacja',
        'Electronics' => 'Elektronika',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energetyka',
        'Entertainment & Leisure' => 'Rozrywka',
        'Finance' => 'Finanse',
        'Food & Beverage' => 'Jedzenie i napoje',
        'Grocery' => 'Sklep spożywczy',
        'Hospitality' => 'Szpital',
        'Healthcare' => 'Opieka zdrowotna',
        'Insurance' => 'Ubezpieczenia',
        'Legal' => 'Legal',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Media',
        'Mining' => 'Kopalnie',
        'Music' => 'Muzyka',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publishing',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Real Estate',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Wsparcie',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologia',
        'Telecommunications' => 'Telekomunikacja',
        'Television' => 'Telewizja',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Transport',
        'Travel' => 'Travel',
        'Venture Capital' => 'Venture Capital',
        'Wholesale' => 'Wholesale',
        'Water' => 'Woda',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Utwórz Konto',
      'Copy Billing' => 'Copy Billing',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Klienci',
      'partners' => 'Partnerzy',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Miesiąc',
      'week' => 'Tydzień',
      'day' => 'Dzień',
      'agendaWeek' => 'Tydzień',
      'agendaDay' => 'Dzień',
      'timeline' => 'Oś czasu',
    ),
    'labels' => 
    array (
      'Today' => 'Dziś',
      'Create' => 'Utwórz',
      'Shared' => 'Udostępnij',
      'Add User' => 'Dodaj użytkownika',
      'current' => 'obecne',
      'time' => 'czas',
      'User List' => 'Lista użytkowników',
      'Manage Users' => 'Zarządzaj użytkownikami',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'parent' => 'Rodzic',
      'status' => 'Status',
      'dateStart' => 'Data rozpoczęcia',
      'dateEnd' => 'Data zakończenia',
      'direction' => 'Kierunek',
      'duration' => 'Czas',
      'description' => 'Opis ',
      'users' => 'Użytkownik',
      'contacts' => 'Kontakty',
      'leads' => 'Potencjalne Kontakty',
      'reminders' => 'Przypomnienia',
      'account' => 'Klient',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planowane',
        'Held' => 'Odbyło się',
        'Not Held' => 'Nie odbyło się',
      ),
      'direction' => 
      array (
        'Outbound' => 'Wychodzący',
        'Inbound' => 'Przychodzący',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Brak',
        'Accepted' => 'Zaakceptowany',
        'Declined' => 'Odrzucony',
        'Tentative' => 'Niepewny',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Odbyło się',
      'setNotHeld' => 'Nie odbyło się',
    ),
    'labels' => 
    array (
      'Create Call' => 'Utwórz Telefon',
      'Set Held' => 'Odbyło się',
      'Set Not Held' => 'Nie odbyło się',
      'Send Invitations' => 'Wyślij Powiadomienie',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planowane',
      'held' => 'Odbyło się',
      'todays' => 'Dzisiaj',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'description' => 'Opis',
      'status' => 'Status',
      'type' => 'Typ',
      'startDate' => 'Data rozpoczęcia',
      'endDate' => 'Data zakończenia',
      'targetLists' => 'Listy docelowe',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Wysłano',
      'openedCount' => 'Otwarty',
      'clickedCount' => 'Kliknięte',
      'optedOutCount' => 'Wypisany',
      'bouncedCount' => 'Odrzucone',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Twarde odrzucenie',
      'softBouncedCount' => 'Miękkie odrzucenie',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Zwrot',
      'revenueConverted' => 'Zwrot (skonwertowany)',
      'budget' => 'Budżet',
      'budgetConverted' => 'Budżet (skonwertowany)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Listy docelowe',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Klienci',
      'contacts' => 'Kontakty',
      'leads' => 'Potencjalne kontakty',
      'opportunities' => 'Szanse sprzedaży',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Poczta masowa',
      'trackingUrls' => 'Adresy śledzenia',
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
        'Web' => 'Strona internetowa',
        'Television' => 'Telewizja',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Wiadomość',
      ),
      'status' => 
      array (
        'Planning' => 'Planowanie',
        'Active' => 'Aktywny',
        'Inactive' => 'Nieaktywny',
        'Complete' => 'Gotowe',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Utwórz kampanię',
      'Target Lists' => 'Listy docelowe',
      'Statistics' => 'Statystyki',
      'hard' => 'twardy',
      'soft' => 'miękki',
      'Unsubscribe' => 'Wypisz się',
      'Mass Emails' => 'Poczta masowa',
      'Email Templates' => 'Szablony wiadomości',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktywny',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Zostałeś wypisany z naszej listy mailingowej.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Adresaci, którzy powinni otrzymać wiadomości.',
      'excludingTargetLists' => 'Adresaci, którzy nie powinni otrzymać wiadomości.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Akcja',
      'actionDate' => 'Data',
      'data' => 'Dane',
      'campaign' => 'Kampania',
      'parent' => 'Cel',
      'object' => 'Obiekt',
      'application' => 'Aplikacja',
      'queueItem' => 'Element kolejki',
      'stringData' => 'Dane tekstowe',
      'stringAdditionalData' => 'Dodatkowe dane tekstowe',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Element kolejki',
      'parent' => 'Rodzic',
      'object' => 'Obiekt',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Wysłano',
        'Opened' => 'Otwarty',
        'Opted Out' => 'Wypisany',
        'Bounced' => 'Odrzucone',
        'Clicked' => 'Kliknięte',
        'Lead Created' => 'Lead Created',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Wszystko',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Wysłano',
      'opened' => 'Otwarty',
      'optedOut' => 'Wypisany',
      'optedIn' => 'Opted In',
      'bounced' => 'Odrzucone',
      'clicked' => 'Kliknięte',
      'leadCreated' => 'Lead Created',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Kod do wstawienia zamiast URL',
      'campaign' => 'Kampania',
    ),
    'links' => 
    array (
      'campaign' => 'Kampania',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Utwórz adres śledzenia',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'number' => 'Numer',
      'status' => 'Status',
      'account' => 'Klient',
      'contact' => 'Kontakty',
      'contacts' => 'Kontakty',
      'priority' => 'Priorytet',
      'type' => 'Rodzaj',
      'description' => 'Opis ',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Group Email Account',
      'account' => 'Klient',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Kontakty',
      'meetings' => 'Spotkania',
      'calls' => 'Rozmowy',
      'tasks' => 'Zadania',
      'emails' => 'Wiadomości',
      'articles' => 'Artykuły bazy wiedzy',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nowy',
        'Assigned' => 'Przypisany',
        'Pending' => 'Oczekiwanie',
        'Closed' => 'Zamknięty',
        'Rejected' => 'Odrzucony',
        'Duplicate' => 'Powielony',
      ),
      'priority' => 
      array (
        'Low' => 'Niski',
        'Normal' => 'Normalny',
        'High' => 'Wysoki',
        'Urgent' => 'Pilne',
      ),
      'type' => 
      array (
        'Question' => 'Pytanie',
        'Incident' => 'Zdarzenie',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Utwórz sprawę',
      'Close' => 'Zamknij',
      'Reject' => 'Odrzuć',
      'Closed' => 'Zamknięty',
      'Rejected' => 'Odrzucony',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otwórz',
      'closed' => 'Zamknięty',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'emailAddress' => 'E-mail',
      'title' => 'Tytuł',
      'account' => 'Klient',
      'accounts' => 'Klienci',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Typ Klienta',
      'doNotCall' => 'Nie Dzwoń',
      'address' => 'Adres',
      'opportunityRole' => 'Rola szansy sprzedaży',
      'accountRole' => 'Tytuł',
      'description' => 'Opis ',
      'campaign' => 'Kampania',
      'targetLists' => 'Listy docelowe',
      'targetList' => 'Lista docelowa',
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
      'opportunities' => 'Szanse sprzedaży',
      'cases' => 'Sprawy',
      'targetLists' => 'Listy docelowe',
      'campaignLogRecords' => 'Log kampanii',
      'campaign' => 'Kampania',
      'account' => 'Konto (podstawowe)',
      'accounts' => 'Klienci',
      'casesPrimary' => 'Cases (Primary)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'documents' => 'Dokumenty',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Utwórz Kontakt',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--NIC--',
        'Decision Maker' => 'Osoba Decyzyjna',
        'Evaluator' => 'Oceniający',
        'Influencer' => 'Wpływający',
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
      'Create Document' => 'Utwórz dokument',
      'Details' => 'Szczegóły',
    ),
    'fields' => 
    array (
      'name' => 'Nazwa',
      'status' => 'Status',
      'file' => 'Plik',
      'type' => 'Typ',
      'publishDate' => 'Data publikacji',
      'expirationDate' => 'Data przedawnienia',
      'description' => 'Opis',
      'accounts' => 'Klienci',
      'folder' => 'Katalog',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Klienci',
      'opportunities' => 'Szanse sprzedaży',
      'folder' => 'Katalog',
      'leads' => 'Leady',
      'contacts' => 'Kontakty',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktywny',
        'Draft' => 'Szkic',
        'Expired' => 'Przedawniony',
        'Canceled' => 'Anulowane',
      ),
      'type' => 
      array (
        '' => 'Brak',
        'Contract' => 'Kontrakt',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Postanowienia licencyjne',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktywny',
      'draft' => 'Szkic',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Utwórz folder dokumentów',
      'Manage Categories' => 'Zarządzaj katalogami',
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
      'name' => 'Nazwa',
      'status' => 'Status',
      'target' => 'Cel',
      'sentAt' => 'Data wysłania',
      'attemptCount' => 'Próby',
      'emailAddress' => 'Adres e-mail',
      'massEmail' => 'Poczta masowa',
      'isTest' => 'Testowa',
    ),
    'links' => 
    array (
      'target' => 'Cel',
      'massEmail' => 'Poczta masowa',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Oczekiwanie',
        'Sent' => 'Wysłano',
        'Failed' => 'Niepowodzenie',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Oczekiwanie',
      'sent' => 'Wysłano',
      'failed' => 'Niepowodzenie',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Utwórz artykuł',
      'Any' => 'Dowolny',
      'Send in Email' => 'Wyślij w wiadomości',
      'Move Up' => 'Przesuń w górę',
      'Move Down' => 'Przesuń w dół',
      'Move to Top' => 'Przesuń na wierzch',
      'Move to Bottom' => 'Przesuń pod spód',
    ),
    'fields' => 
    array (
      'name' => 'Nazwa',
      'status' => 'Status',
      'type' => 'Typ',
      'attachments' => 'Załączniki',
      'publishDate' => 'Data publikacji',
      'expirationDate' => 'Data przedawnienia',
      'description' => 'Opis',
      'body' => 'Treść',
      'categories' => 'Kategorie',
      'language' => 'Język',
      'portals' => 'Portale',
    ),
    'links' => 
    array (
      'cases' => 'Sprawy',
      'opportunities' => 'Szanse sprzedaży',
      'categories' => 'Kategorie',
      'portals' => 'Portale',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'W recenzji',
        'Draft' => 'Szkic',
        'Archived' => 'Zarchiwizowany',
        'Published' => 'Opublikowane',
      ),
      'type' => 
      array (
        'Article' => 'Artykuł',
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
      'Create KnowledgeBaseCategory' => 'Utwórz kategorię',
      'Manage Categories' => 'Manage Categories',
      'Articles' => 'Artykuły',
    ),
    'links' => 
    array (
      'articles' => 'Artykuły',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Przekształcony w ',
      'Create Lead' => 'Utwórz potencjalny kontakt',
      'Convert' => 'Przekształć',
      'convert' => 'przekształć',
    ),
    'fields' => 
    array (
      'name' => 'Nazwa',
      'emailAddress' => 'E-mail',
      'title' => 'Tytuł',
      'website' => 'Strona Internetowa',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Nazwa Konta',
      'doNotCall' => 'Nie Dzwoń',
      'address' => 'Adres',
      'status' => 'Status',
      'source' => 'Źródło',
      'opportunityAmount' => 'Wartość szansy sprzedaży',
      'opportunityAmountConverted' => 'Wartość szansy sprzedaży (konwertowana)',
      'description' => 'Opis ',
      'createdAccount' => 'Klient',
      'createdContact' => 'Kontakty',
      'createdOpportunity' => 'Szansa sprzedaży',
      'campaign' => 'Kampania',
      'targetLists' => 'Listy docelowe',
      'targetList' => 'Lista docelowa',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Listy docelowe',
      'campaignLogRecords' => 'Log kampanii',
      'campaign' => 'Kampania',
      'createdAccount' => 'Klient',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Szansa sprzedaży',
      'cases' => 'Zadania',
      'documents' => 'Dokumenty',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nowy',
        'Assigned' => 'Przypisany',
        'In Process' => 'W trakcie',
        'Converted' => 'Przekształcony',
        'Recycled' => 'Usunięty',
        'Dead' => 'Martwy',
      ),
      'source' => 
      array (
        '' => 'Brak',
        'Call' => 'Rozmowa',
        'Email' => 'E-mail',
        'Existing Customer' => 'Istniejący klient',
        'Partner' => 'Partner',
        'Public Relations' => 'Relacje',
        'Web Site' => 'Stwona Internetowa',
        'Campaign' => 'Kampania',
        'Other' => 'Inny',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktywny',
      'actual' => 'Bieżący',
      'converted' => 'Przekształcony',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'status' => 'Status',
      'storeSentEmails' => 'Zapisz wysłane wiadomości',
      'startAt' => 'Data rozpoczęcia',
      'fromAddress' => 'Z adresu',
      'fromName' => 'Od',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Kampania',
      'emailTemplate' => 'Szablon wiadomości',
      'inboundEmail' => 'Konto pocztowe',
      'targetLists' => 'Listy docelowe',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Wypisz się całkowicie',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Listy docelowe',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Elementy kolejki',
      'campaign' => 'Kampania',
      'emailTemplate' => 'Szablon wiadomości',
      'inboundEmail' => 'Konto pocztowe',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Szkic',
        'Pending' => 'Oczekiwanie',
        'In Process' => 'W trakcie',
        'Complete' => 'Gotowe',
        'Canceled' => 'Anulowane',
        'Failed' => 'Niepowodzenie',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Utwórz wiadomość masową',
      'Send Test' => 'Wyślij test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Wybierz przynajmniej jeden cel.',
      'testSent' => 'Wiadomość testowa powinna być wysłana',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Adresaci, którzy powinni otrzymać wiadomości.',
      'excludingTargetLists' => 'Adresaci, którzy nie powinni otrzymać wiadomości.',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'complete' => 'Ukończone',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'parent' => 'Rodzic',
      'status' => 'Status',
      'dateStart' => 'Data rozpoczęcia',
      'dateEnd' => 'Data zakończenia',
      'duration' => 'Czas',
      'description' => 'Opis ',
      'users' => 'Użytkownik',
      'contacts' => 'Kontakty',
      'leads' => 'Potencjalne Kontakty',
      'reminders' => 'Przypomnienia',
      'account' => 'Klient',
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
        'Planned' => 'Planowane',
        'Held' => 'Odbyło się',
        'Not Held' => 'Nie odbyło się',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Brak',
        'Accepted' => 'Zaakceptowany',
        'Declined' => 'Odrzucony',
        'Tentative' => 'Niepewny',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Odbyło się',
      'setNotHeld' => 'Nie odbyło się',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Utwórz Spotkanie',
      'Set Held' => 'Odbyło się',
      'Set Not Held' => 'Nie odbyło się',
      'Send Invitations' => 'Wyślij Powiadomienie',
      'on time' => 'na czas',
      'before' => 'przed',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planowane',
      'held' => 'Odbyło się',
      'todays' => 'Dzisiaj',
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
      'name' => 'Nazwa',
      'account' => 'Klient',
      'stage' => 'Etap',
      'amount' => 'Wartość',
      'probability' => 'Prawdopodobieństwo, %',
      'leadSource' => 'Zródło Potencjalnego Kontaktu',
      'doNotCall' => 'Nie Dzwoń',
      'closeDate' => 'Data Zamknięcia',
      'contacts' => 'Kontakty',
      'description' => 'Opis ',
      'amountConverted' => 'Wartość (konwertowana)',
      'amountWeightedConverted' => 'Wartość ważona',
      'campaign' => 'Kampania',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakty',
      'documents' => 'Dokumenty',
      'campaign' => 'Kampania',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'I Spotkanie',
        'Qualification' => 'Kwalifikacja',
        'Proposal' => 'Oferta Cenowa',
        'Negotiation' => 'Negocjacje',
        'Needs Analysis' => 'Dodatkowa Analiza',
        'Value Proposition' => 'Oferta Produktowa',
        'Id. Decision Makers' => 'Oferta przekazna do osoby decyzyjnej',
        'Perception Analysis' => 'Perception Analysis',
        'Proposal/Price Quote' => 'Oferta Cenowa',
        'Negotiation/Review' => 'Negocjacje ',
        'Closed Won' => 'Zakończone Wygrane',
        'Closed Lost' => 'Zakończone Przegrane',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Utwórz Szanse',
    ),
    'presetFilters' => 
    array (
      'open' => 'Otwórz',
      'won' => 'Wygrane',
      'lost' => 'Utracone',
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
      'name' => 'Nazwa',
      'description' => 'Opis',
      'entryCount' => 'Ilość jednostek',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Kampanie',
      'endDate' => 'Data zakończenia',
      'targetLists' => 'Listy docelowe',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Klienci',
      'contacts' => 'Kontakty',
      'leads' => 'Leads',
      'campaigns' => 'Kampanie',
      'massEmails' => 'Wiadomości masowe',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'Strona internetowa',
        'Television' => 'Telewizja',
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
      'Opted Out' => 'Wypisany',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Wypisz się',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nazwa',
      'parent' => 'Rodzic',
      'status' => 'Status',
      'dateStart' => 'Data rozpoczęcia',
      'dateEnd' => 'Data zwrotu',
      'dateStartDate' => 'Data rozpoczęcia',
      'dateEndDate' => 'Data zakończenia',
      'priority' => 'Pryjorytet',
      'description' => 'Opis ',
      'isOverdue' => 'Przegrzany',
      'account' => 'Klient',
      'dateCompleted' => 'Data ukończenia',
      'attachments' => 'Załączniki',
      'reminders' => 'Przypomnienia',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Załączniki',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nie Rozpoczęte',
        'Started' => 'Rozpoczęte',
        'Completed' => 'Ukończone',
        'Canceled' => 'Anulowane',
        'Deferred' => 'Opóźniony',
      ),
      'priority' => 
      array (
        'Low' => 'Niski',
        'Normal' => 'Normalny',
        'High' => 'Wysoki',
        'Urgent' => 'Pilne',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Utwórz zadanie',
      'Complete' => 'Gotowe',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Bieżący',
      'completed' => 'Ukończone',
      'deferred' => 'Opóźniony',
      'todays' => 'Dzisiaj',
      'overdue' => 'Przegrzane',
    ),
  ),
  'Beneficiario' => 
  array (
    'fields' => 
    array (
      'beneficiarioId' => 'RUT',
      'reclamosBeneficiarios' => 'Reclamos',
      'empresas' => 'Empresas',
      'beneficiarioApellidoPaterno' => 'Apellido paterno',
      'beneficiarioApellidoMaterno' => 'Apellido materno',
      'beneficiarioDv' => 'DV',
    ),
    'links' => 
    array (
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'reclamosBeneficiarios' => 'Reclamos',
      'empresas' => 'Empresas',
    ),
    'labels' => 
    array (
      'Create Beneficiario' => 'Utwórz Beneficiario',
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
      'beneficiarioId' => 'RUT',
    ),
    'links' => 
    array (
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'doctosBeneficios' => 'DoctosBeneficios',
      'categoria' => 'Categoria',
      'empresa' => 'Empresa',
      'proveedor' => 'Proveedor',
      'rol' => 'Rol',
      'comuna' => 'Comuna',
    ),
    'labels' => 
    array (
      'Create Beneficios' => 'Utwórz Beneficios',
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
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
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
      'Create Categoria' => 'Utwórz Categoria',
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
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'comunas' => 'Comunas',
    ),
    'labels' => 
    array (
      'Create Ciudad' => 'Utwórz Ciudad',
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
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'ciudad' => 'Ciudad',
      'trabajador' => 'Trabajador',
      'beneficios' => 'Beneficios',
    ),
    'labels' => 
    array (
      'Create Comuna' => 'Utwórz Comuna',
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
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'beneficios' => 'Beneficios',
    ),
    'labels' => 
    array (
      'Create DoctosBeneficio' => 'Utwórz Doctos_beneficio',
    ),
  ),
  'Empresa' => 
  array (
    'fields' => 
    array (
      'beneficios' => 'Beneficios',
      'trabajador' => 'Trabajador',
      'beneficiarios' => 'Beneficiarios',
      'reclamosEmpresa' => 'Reclamos',
    ),
    'links' => 
    array (
      'beneficios' => 'Beneficios',
      'trabajador' => 'Trabajador',
      'beneficiarios' => 'Beneficiarios',
      'reclamosEmpresa' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create Empresa' => 'Utwórz Empresa',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => 'Adres',
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
      'meetings' => 'Spotkania',
      'calls' => 'Rozmowy',
      'tasks' => 'Zadania',
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
      'Create Formularios' => 'Utwórz Formulario',
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
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => 'Utwórz MotivoReclamo',
    ),
    'tooltips' => 
    array (
      'motivoReclamoDescripcion' => 'Describa los motivos por lo cuales se pueden generar reclamos',
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
      'Create Proveedor' => 'Utwórz Proveedor',
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
      'trabajador' => 'Trabajador',
      'beneficiario' => 'Beneficiario',
      'empresa' => 'Empresa',
    ),
    'links' => 
    array (
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'motivoReclamo' => 'MotivoReclamo',
      'trabajador' => 'Trabajador',
      'beneficiario' => 'Beneficiario',
      'empresa' => 'Empresa',
    ),
    'labels' => 
    array (
      'Create Reclamo' => 'Utwórz Reclamo',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
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
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
      'beneficioss' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' => 
    array (
      'Create Rol' => 'Utwórz Rol',
    ),
  ),
  'Solicitudes' => 
  array (
    'fields' => 
    array (
      'address' => 'Adres',
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
      'meetings' => 'Spotkania',
      'calls' => 'Rozmowy',
      'tasks' => 'Zadania',
      'subcategorias' => 'Subcategorias',
      'subcategoria3' => 'Subcategoria3',
      'relacionsubcategoria' => 'relacionSubcategoria',
      'categoriarela' => 'Categoriarela',
    ),
    'labels' => 
    array (
      'Create Solicitudes' => 'Utwórz Solicitudes',
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
      'meetings' => 'Spotkania',
      'calls' => 'Połączenia',
      'tasks' => 'Zadania',
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
      'Create Subcategoria' => 'Utwórz Subcategoria',
    ),
  ),
  'Trabajador' => 
  array (
    'fields' => 
    array (
      'nombre' => 'Nombres',
      'rut' => 'Rut',
      'apellidopaterno' => 'Apellido paterno',
      'apellidomaterno' => 'Apellido materno',
      'nombrecompleto' => 'Nombres',
      'direccion' => 'Direccion',
      'email' => 'Email',
      'comunarelacion' => 'Comunarelacion',
      'empresas' => 'Empresas',
      'rol' => 'Rol',
      'empresa' => 'Empresa',
      'reclamosTrabajador' => 'Reclamos',
      'telefono' => 'Teléfono',
      'trabajadorId' => 'RUT',
    ),
    'links' => 
    array (
      'comunarelacion' => 'Comunarelacion',
      'empresas' => 'Empresas',
      'rol' => 'Rol',
      'empresa' => 'Empresa',
      'reclamosTrabajador' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create Trabajador' => 'Utwórz Trabajador',
    ),
    'tooltips' => 
    array (
      'telefono' => 'Ej. +56 2 29458565',
    ),
  ),
);
?>