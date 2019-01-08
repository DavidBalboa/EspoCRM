<?php
return array (
  'ActionHistoryRecord' => 
  array (
    'fields' => 
    array (
      'user' => 'Kullanıcı',
      'action' => 'Eylem',
      'createdAt' => 'Tarih',
      'target' => 'Hedef',
      'targetType' => 'Hedef Tipi',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Adresi',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' => 
    array (
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'Kullanıcı',
      'target' => 'Hedef',
    ),
    'presetFilters' => 
    array (
      'onlyMy' => 'Sadece Benim',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'read' => 'Oku',
        'update' => 'Güncelle',
        'delete' => 'Sil',
        'create' => 'Oluştur',
      ),
    ),
  ),
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Etkin',
      'Disabled' => 'Devre Dışı',
      'System' => 'Sistem',
      'Users' => 'Kullanıcılar',
      'Email' => 'Eposta',
      'Data' => 'Veri',
      'Customization' => 'Özelleştirme',
      'Available Fields' => 'Uygun Alanlar',
      'Layout' => 'Yerleşim',
      'Entity Manager' => 'Varlık Yönetimi',
      'Add Panel' => 'Pano Ekle',
      'Add Field' => 'Alan Ekle',
      'Settings' => 'Ayarlar',
      'Scheduled Jobs' => 'Planlanmış İşler',
      'Upgrade' => 'Yükselt',
      'Clear Cache' => 'Önbelleği Temizle',
      'Rebuild' => 'Onar',
      'Teams' => 'Takımlar',
      'Roles' => 'Görevler',
      'Portal' => 'Portal',
      'Portals' => 'Portallar',
      'Portal Roles' => 'Portal Rolleri',
      'Portal Users' => 'Portal Kullanıcıları',
      'Outbound Emails' => 'Giden Epostalar',
      'Group Email Accounts' => 'Grup E-mail Hesapları',
      'Personal Email Accounts' => 'Kişisel E-mail Hesapları',
      'Inbound Emails' => 'Gelen Epostalar',
      'Email Templates' => 'Eposta Şablonları',
      'Import' => 'İçeri Aktar',
      'Layout Manager' => 'Yerleşim Yönetimi',
      'User Interface' => 'Kullanıcı Arayüzü',
      'Auth Tokens' => 'Yetki Simgeleri',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Kimlik Doğrulama',
      'Currency' => 'Döviz',
      'Integrations' => 'Entegrasyonlar',
      'Extensions' => 'Eklentiler',
      'Upload' => 'Yükle',
      'Installing...' => 'Yükleniyor ',
      'Upgrading...' => 'Yükseltiliyor...',
      'Upgraded successfully' => 'Başarıyla Yükseltildi',
      'Installed successfully' => 'Başarıyla Yüklendi',
      'Ready for upgrade' => 'Yükseltme İçin Hazır',
      'Run Upgrade' => 'Yükseltmeyi Başlat',
      'Install' => 'Yükle',
      'Ready for installation' => 'Yükleme İçin Hazır',
      'Uninstalling...' => 'Siliniyor...',
      'Uninstalled' => 'Silindi ',
      'Create Entity' => 'Varlık Yarat',
      'Edit Entity' => 'Varlığı Düzenle',
      'Create Link' => 'Bağlantı Yarat',
      'Edit Link' => 'Bağlantıyı Düzelt',
      'Notifications' => 'Bildirimler',
      'Jobs' => 'İşler',
      'Reset to Default' => 'Öndeğerlere Dön',
      'Email Filters' => 'E-mail Filtreleri',
      'Action History' => 'Eylem Tarihçesi',
      'Label Manager' => 'Etiket Yönetimi',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detay',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Arama Filtreleri',
      'massUpdate' => 'Çoklu Güncelleme',
      'relationships' => 'İlişki Panelleri',
      'sidePanelsDetail' => 'Yan Paneller (Detay)',
      'sidePanelsEdit' => 'Yan Paneller (Düzenle)',
      'sidePanelsDetailSmall' => 'Yan Paneller (Detay Küçük)',
      'sidePanelsEditSmall' => 'Yan Paneller (Küçük Resim Düzenle)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Müşteri Potansiyeline çevir',
      'listForAccount' => 'Liste (Hesap için)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Sıralama',
      'foreign' => 'Yabancı',
      'duration' => 'Süre',
      'password' => 'Şifre',
      'personName' => 'Kişi Adı',
      'autoincrement' => 'Otomatik Arttırım',
      'bool' => 'XXXX',
      'currency' => 'Para Birimi',
      'currencyConverted' => 'Para Birimi (Dönüştürülmüş)',
      'date' => 'Tarih',
      'datetime' => 'TarihSaat',
      'datetimeOptional' => 'Tarih/TarihZaman',
      'email' => 'Eposta',
      'enum' => 'Sıralama',
      'enumInt' => 'Tamsayı Sıralama',
      'enumFloat' => 'XXXX Sıralama',
      'float' => 'Hizalama',
      'int' => 'Int',
      'link' => 'Bağlantı',
      'linkMultiple' => 'Çoklu Bağlantı',
      'linkParent' => 'Üst Bağlantı',
      'phone' => 'Telefon',
      'text' => 'Metin',
      'url' => 'Url',
      'varchar' => 'Değişken Karakter',
      'file' => 'Dosya',
      'image' => 'Resim',
      'multiEnum' => 'Çoklu-Numara',
      'attachmentMultiple' => 'Birden Çok Ek',
      'rangeInt' => 'Tam Sayı Aralığı',
      'rangeFloat' => 'Aralık Sayı',
      'rangeCurrency' => 'Döviz Aralığı',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Harita',
      'number' => 'Sayı',
      'colorpicker' => 'Renk Seçici',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
    ),
    'fields' => 
    array (
      'type' => 'Tür',
      'name' => 'İsim',
      'label' => 'Etiket',
      'tooltipText' => 'İpucu metni',
      'required' => 'Gerekli',
      'default' => 'Varsayılan',
      'maxLength' => 'Maks Uzunluk',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Bağlantı',
      'field' => 'Alan',
      'min' => 'Min',
      'max' => 'Maks',
      'translation' => 'Çeviri',
      'previewSize' => 'Önizlme Boyutu',
      'noEmptyString' => 'Boş dize yok ',
      'defaultType' => 'Ön Tanımlı Tip',
      'seeMoreDisabled' => 'Yazı Kesmeyi Devre Dışı Bırak',
      'entityList' => 'Varlık Listesi',
      'isSorted' => 'Sıralama (alfabetik)',
      'audited' => 'Denetildi ',
      'trim' => 'Kırp',
      'height' => 'Yükseklik(piksel)',
      'minHeight' => 'Min Yükseklik (piksel)',
      'provider' => 'Sağlayıcı',
      'typeList' => 'Tip Listesi',
      'rows' => 'Yazı Alanında ki Satır Sayısı',
      'lengthOfCut' => 'Kesme Uzunluğu',
      'sourceList' => 'Kaynak Listesi',
      'prefix' => 'Prefix',
      'nextNumber' => 'Sonraki Sayı',
      'padLength' => 'Tampon Uzunluğu',
      'disableFormatting' => 'Formatlamayı Devre Dışı Bırak',
      'dynamicLogicVisible' => 'Alanı görünür kılan şartlar',
      'dynamicLogicReadOnly' => 'Alanı salt okunur yapan şartlar',
      'dynamicLogicRequired' => 'Alanı zorunlu yapan şartlar',
      'dynamicLogicOptions' => 'Koşullu seçenekler',
      'probabilityMap' => 'Sahne Olasılığı (%)',
      'readOnly' => 'Salt okunur',
      'maxFileSize' => 'Maksimum Dosya Boyutu (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM <strong>{version}</strong> sürümüne güncellenecektir. Bu işlem biraz zaman alabileceği için lütfen sabırlı olunuz.',
      'upgradeDone' => 'EspoCRN <strong>{version}</strong> sürümüne yükseltilmiştir.',
      'upgradeBackup' => 'We recommend making a backup of your EspoCRM files and data before upgrading.',
      'thousandSeparatorEqualsDecimalMark' => 'The thousands separator character can not be the same as the decimal point character.',
      'userHasNoEmailAddress' => 'Kullanıcının email adresi yok',
      'selectEntityType' => 'Soldaki menüden birim türünü seçin.',
      'selectUpgradePackage' => 'Yükseltme paketini seçin.',
      'downloadUpgradePackage' => 'Güncelleme paketlerini indirin <a href="{url}">here</a>.',
      'selectLayout' => 'Gerekli yerleşim düzenini sol menüden seçin ve düzenleyin.',
      'selectExtensionPackage' => 'Eklenti paketi seçiniz ',
      'extensionInstalled' => '{name} {version} eklentisi başarıyla kuruldu',
      'installExtension' => '{name} {version} eklentisi kurulum için hazır',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Uygulamanın sistem ayarları.',
      'scheduledJob' => 'Cron tarafından gerçekleştirilmiş işler.',
      'upgrade' => 'EspoCRM i yükselt.',
      'clearCache' => 'Tüm sunucu önbelleğini temizle.',
      'rebuild' => 'Sunucuyu onar ve önbelleği temizle.',
      'users' => 'Kullanıcı Yönetimi.',
      'teams' => 'Takım Yönetimi.',
      'roles' => 'Görev Yönetimi.',
      'portals' => 'Portal yönetimi',
      'portalRoles' => 'Portal rolleri.',
      'portalUsers' => 'Portal kullanıcısı.',
      'outboundEmails' => 'Giden epostalar için SMTP ayarları.',
      'groupEmailAccounts' => 'Grup IMAP e-mail hesapları. E-mail aktarma ve e-mail-dosya',
      'personalEmailAccounts' => 'Kullanıcıların e-mail hesapları',
      'emailTemplates' => 'Giden eposta şablonları.',
      'import' => 'CSV dosyasından veri aktar.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Kullanıcı Arayğzünü ayarla.',
      'authTokens' => 'Aktif kimlik doğrulama oturumları. IP adresi ve son erişim tarihi',
      'authentication' => 'Giriş doğrulama ayarları.',
      'currency' => 'Döviz ayarları ve kurları.',
      'extensions' => 'Eklentileri kur/sil.',
      'integrations' => 'Üçüncü parti entegrasyon servisleri.',
      'notifications' => 'Uygulama içi ve e-mail bildirimi ayarları.',
      'inboundEmails' => 'IMAP eposta hesaplarını grupla. Eposta içe aktarımı ve dizinleme',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'actionHistory' => 'Kullanıcı eylemleri kütüğü',
      'labelManager' => 'Uygulama etiketlerini düzenle',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Çok Küçük',
        'small' => 'Küçük',
        'medium' => 'Orta',
        'large' => 'Büyük',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'VE',
      'or' => 'VEYA',
      'not' => 'hariç',
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
      'Document' => 'Döküman ekle.',
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
      'user' => 'Kullanıcı',
      'ipAddress' => 'IP Adresi',
      'lastAccess' => 'Son Erişim Tarihi',
      'createdAt' => 'Giriş Tarihi',
      'isActive' => 'Aktif',
      'portal' => 'Portal',
    ),
    'links' => 
    array (
      'actionHistoryRecords' => 'Eylem Tarihçesi',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif',
      'inactive' => 'Inaktif',
    ),
    'labels' => 
    array (
      'Set Inactive' => 'Inaktif Yap',
    ),
    'massActions' => 
    array (
      'setInactive' => 'Inaktif Yap',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Başlık',
      'dateFrom' => 'Başlangıç Tarih',
      'dateTo' => 'Bitiş Tarih',
      'autorefreshInterval' => 'Oto-Tazeleme Aralığı',
      'displayRecords' => 'Kayıtları Göster',
      'isDoubleHeight' => 'Yükseklik 2x',
      'mode' => 'Mod',
      'enabledScopeList' => 'Görüntülenecek Olan',
      'users' => 'Kullanıcılar',
      'entityType' => 'Varlık Tipi',
      'primaryFilter' => 'Birincil Filtre',
      'boolFilterList' => 'Ek Filtreler',
      'sortBy' => 'Sırala (alan)',
      'sortDirection' => 'Sırala (yön)',
      'expandedLayout' => 'Yerleşim',
      'dateFilter' => 'Date Filter',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Hafta (ajanda)',
        'basicWeek' => 'Hafta',
        'month' => 'Ay',
        'basicDay' => 'Gün',
        'agendaDay' => 'Gün (ajanda)',
        'timeline' => 'Zaman Tüneli',
      ),
    ),
    'messages' => 
    array (
      'selectEntityType' => 'Gösterge paneli ayarlarından varlık tipini seçin',
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
        'equals' => 'Eşittir',
        'notEquals' => 'eşit değil',
        'greaterThan' => 'büyük',
        'lessThan' => 'küçük',
        'greaterThanOrEquals' => 'Büyüktür Veya Eşittir',
        'lessThanOrEquals' => 'Küçüktür Veya Eşittir',
        'in' => ' İçinde',
        'notIn' => 'dışında',
        'inPast' => 'Geçmişte',
        'inFuture' => 'Gelecekte',
        'isToday' => 'Bugün',
        'isTrue' => 'Doğru',
        'isFalse' => 'Yanlış',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş değil',
        'contains' => 'İçeren',
        'notContains' => 'İçermez',
        'has' => 'İçeren',
        'notHas' => 'İçermez',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim (Konu)',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateSent' => 'Gönderilen Tariht',
      'from' => 'Kimden',
      'to' => 'Kime',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Cevapla',
      'replyToString' => 'Cevapla (dize)',
      'isHtml' => 'Html olarak gönder',
      'body' => 'Mesaj',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Konu',
      'attachments' => 'Dosya Ekle',
      'selectTemplate' => 'Şablonu Seçin',
      'fromEmailAddress' => 'Gönderen Adresi',
      'toEmailAddresses' => 'To EmailAddresses',
      'emailAddress' => 'Eposta Adresi',
      'deliveryDate' => 'Teslim Tarih',
      'account' => 'Hesap',
      'users' => 'Kullanıcılar',
      'replied' => 'Cevaplandı',
      'replies' => 'Cevaplar',
      'isRead' => 'Okundu',
      'isNotRead' => 'Okunmadı',
      'isImportant' => 'Önemli',
      'isReplied' => 'Yanıtlandı',
      'isNotReplied' => 'Yanıtlanmadı',
      'isUsers' => 'Kullanıcının ',
      'inTrash' => 'Çöpte',
      'sentBy' => 'Gönderen (Kullanıcı)',
      'folder' => 'Klasör ',
      'inboundEmails' => 'Grup Hesapları',
      'emailAccounts' => 'Kişisel Hesaplar',
      'hasAttachment' => 'Eki Olan',
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
      'replied' => 'Cevaplandı',
      'replies' => 'Cevaplar',
      'inboundEmails' => 'Grup Hesapları',
      'emailAccounts' => 'Kişisel Hesaplar',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Gönderen',
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
        'Draft' => 'Taslak',
        'Sending' => 'Gönderiliyor',
        'Sent' => 'Gönderildi',
        'Archived' => 'Taslakta ',
        'Received' => 'Alındı',
        'Failed' => 'Başarısız Oldu',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Arşiv E-mail',
      'Archive Email' => 'Arşiv E-mail',
      'Compose' => 'Yeni Eposta',
      'Reply' => 'Cevapla',
      'Reply to All' => 'Tümüne Cevapla',
      'Forward' => 'İlet',
      'Original message' => 'Orijinal Mesaj',
      'Forwarded message' => 'İletilmiş mesaj',
      'Email Accounts' => 'Kişisel E-mail Hesapları',
      'Inbound Emails' => 'Grup E-mail Hesapları',
      'Email Templates' => 'E-mail Taslakları',
      'Send Test Email' => 'Test e-mail Gönder',
      'Send' => 'Gönder',
      'Email Address' => 'E-mail Adresi',
      'Mark Read' => 'Okundu İşaretle',
      'Sending...' => 'Gönderiliyor...',
      'Save Draft' => 'Taslak Kaydet',
      'Mark all as read' => 'Tümünü okundu işaretle',
      'Show Plain Text' => 'Düz Metin Göster',
      'Mark as Important' => 'Önemli olarak işaretle',
      'Unmark Importance' => 'Önemli işaretini kaldır',
      'Move to Trash' => 'Çöpe taşı',
      'Retrieve from Trash' => 'Çöpten Al',
      'Move to Folder' => 'Klasöre taşı',
      'Filters' => 'Filtreler ',
      'Folders' => 'Klasörler',
      'Create Lead' => 'Müşteri Potansiyeli Oluştur',
      'Create Contact' => 'Kişi oluştur',
      'Add to Contact' => 'Kişilere Ekle',
      'Add to Lead' => 'Müşteri Potansiyellerine Ekle',
      'Create Task' => 'Görev oluştur',
      'Create Case' => 'Dosya Oluştur',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'SMTP Kurulum Yok. {link}',
      'testEmailSent' => 'Test e-maili gönderilmiştir',
      'emailSent' => 'E-mail gönderildi ',
      'savedAsDraft' => 'Taslak olarak kayıt edildi',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Gönderildi',
      'archived' => 'Arşivlendi',
      'inbox' => 'Gelen',
      'drafts' => 'Taslaklar',
      'trash' => 'Çöp',
      'important' => 'Önemli',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Okundu İşaretle',
      'markAsNotRead' => 'Okunmadı İşaretle',
      'markAsImportant' => 'Önemli olarak işaretle',
      'markAsNotImportant' => 'Önemli işaretini kaldır',
      'moveToTrash' => 'Çöpe taşı',
      'moveToFolder' => 'Klasöre taşı',
      'retrieveFromTrash' => 'Çöp Kutusu\'ndan geri getir',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim ',
      'status' => 'Durum',
      'host' => 'Host',
      'username' => 'Kullanıcı Adı',
      'password' => 'Şifre',
      'port' => 'Port',
      'monitoredFolders' => 'İzlenen Klasörler',
      'ssl' => 'SSL',
      'fetchSince' => 'İtibaren Getir',
      'emailAddress' => 'E-mail Adresi',
      'sentFolder' => 'Gönderilenler Klasörü',
      'storeSentEmails' => 'Gönderilen E-mailleri Sakla ',
      'keepFetchedEmailsUnread' => 'Getirilen E-mailleri Okunmadı Olarak Tut',
      'emailFolder' => 'Klasöre Koy',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'SMTP kullan',
      'smtpHost' => 'SMTP Sunucusu',
      'smtpPort' => 'SMTP Bağlantı Noktası',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Güvenliği',
      'smtpUsername' => 'SMTP kullanıcı adı ',
      'smtpPassword' => 'SMTP şifresi ',
    ),
    'links' => 
    array (
      'filters' => 'Filtreler',
      'emails' => 'E-postalar ',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Arşiv',
        'Inactive' => 'Inaktif',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'E-mail Hesabı Yarat',
      'IMAP' => 'IMAP',
      'Main' => 'Ana',
      'Test Connection' => 'Bağlantıyı Test Et',
      'Send Test Email' => 'Test E-postası gönder',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'IMAP Sunucusuna Bağlanılamıyor',
      'connectionIsOk' => 'Bağlantı Tamam',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Harici bir e-posta istemcisinden gönderilen e-postaları senkronize etmek için bir \'Gönderilmiş\' klasörü ekleyebilirsiniz.',
      'storeSentEmails' => 'Gönderilen e-postalar IMAP sunucusunda saklanır. E-posta Adresi alanına, adres e-postalarının gönderilmesi gerekir.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Öncelikli',
      'Opted Out' => 'SeçildiXXX',
      'Invalid' => 'Geçersiz',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Kimden',
      'to' => 'Kime',
      'subject' => 'Konu',
      'bodyContains' => 'Mesaj İçerir',
      'action' => 'Eylem',
      'isGlobal' => 'Küresel mi',
      'emailFolder' => 'Klasör',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'E-mail Filtresi Yarat',
      'Emails' => 'E-postalar ',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Skip' => 'Yoksay',
        'Move to Folder' => 'Klasöre Yaz',
      ),
    ),
    'tooltips' => 
    array (
      'name' => 'Filtreye açıklayıcı bir ad verin.',
      'subject' => 'Bir joker karakter kullanın *: \\ n \\ ntext * - metinle başlar, \\ n * metin * - metin içerir, \\ n * metin - metin ile biter.',
      'bodyContains' => 'E-postanın gövdesi belirtilen kelimeleri veya cümleleri içerir.',
      'from' => 'Belirtilen adreslere email gönderilir. İhtiyaç yok ise boş bırakın. Joker kartı da kullanabilirsiniz *.',
      'to' => 'Belirtilen adrese gönderilen e-postalar. Gerekirse boş bırakın. Joker karakteri * kullanabilirsiniz.',
      'isGlobal' => 'Bu filtre, sisteme gelen tüm e-postalara uygulanır.',
    ),
  ),
  'EmailFolder' => 
  array (
    'fields' => 
    array (
      'skipNotifications' => 'Bildirimleri Atla',
    ),
    'labels' => 
    array (
      'Create EmailFolder' => 'Klasör oluşturun',
      'Manage Folders' => 'Klasörleri Yönet',
      'Emails' => 'E-postalar ',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum',
      'isHtml' => 'Html olarak gönder',
      'body' => 'Mesaj',
      'subject' => 'Konu',
      'attachments' => 'Dosya Ekle',
      'insertField' => 'Alan Ekle',
      'oneOff' => 'Bir defalık',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Eposta Şablonu Oluştur',
      'Info' => 'Bilgi',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Kullanılabilir değişkenler: \\ n \\ n {optOutUrl} & # 8211; Bir araştırmacı olmayan kişi bağlantısı için URL; \\ n \\ n {optOutLink} & # 8211; Bir üyelikten çıkma bağlantısı.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Taslağı sadece bir defa kullanacak iseniz işaretleyiniz. Ör. Toplu Mail için',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Güncel ',
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
      'Fields' => 'Alanlar',
      'Relationships' => 'İlişkiler',
      'Schedule' => 'Planlama ',
      'Log' => 'Kütük',
      'Formula' => 'formül',
    ),
    'fields' => 
    array (
      'name' => 'İsim ',
      'type' => 'Tip',
      'labelSingular' => 'Tekil Etiket',
      'labelPlural' => 'Çoğul Etiket',
      'stream' => 'Akış',
      'label' => 'Etiket',
      'linkType' => 'Bağlantı Tipi',
      'entityForeign' => 'Yabancı Varlık',
      'linkForeign' => 'Yabancı Bağlantı ',
      'link' => 'Bağlantı',
      'labelForeign' => 'Yabancı Etiket',
      'sortBy' => 'Ön Tanımlı Sıralama (alan)',
      'sortDirection' => 'Ön Tanımlı Sıralama (yön)',
      'relationName' => 'Orta Tablo İsmi',
      'linkMultipleField' => 'Birden Çok Alanı Bağla',
      'linkMultipleFieldForeign' => 'Birden Çok Alana Yabancı Bağlantı ',
      'disabled' => 'Devre dışı',
      'textFilterFields' => 'Metin Filtre Alanları',
      'audited' => 'Denetlenmiş',
      'auditedForeign' => 'Dış Kaynak Denetimden Geçmiş',
      'statusField' => 'Durum Alanı',
      'beforeSaveCustomScript' => 'Özel Komut Dosyasını Kaydetmeden Önce',
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
        '' => 'Yok',
        'Base' => 'Temel',
        'Person' => 'Kişi',
        'CategoryTree' => 'Kategori Ağacı',
        'Event' => 'Etkinlik ',
        'BasePlus' => 'Taban Artı',
        'Company' => 'Şirket',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Çoktan Çoğa',
        'oneToMany' => 'Tekten Çoğa',
        'manyToOne' => 'Çoktan Teke ',
        'parentToChildren' => 'Ebeveyn - çocuk',
        'childrenToParent' => 'Çocuk - ebeveyn',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Artan',
        'desc' => 'Azalan',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Varlık yaratıldı',
      'linkAlreadyExists' => 'İsim çakışmalarını bağla',
      'linkConflict' => 'İsim çakışması: aynı isimde bağlantı veya alan zaten var',
    ),
    'tooltips' => 
    array (
      'statusField' => 'Bu alanın güncellemeleri akış halinde kaydedildi.',
      'textFilterFields' => 'Metin aramasında kullanılan alanlar.',
      'stream' => 'Varlığın bir Akışı olup olmadığı.',
      'disabled' => 'Sisteminizde bu öğeye ihtiyacınız yok mu kontrol edin.',
      'linkAudited' => 'Ilgili kayıt oluşturma ve varolan kayıt ile bağlantı Akış kaydedilecektir.',
      'linkMultipleField' => 'Bağlantı Çoklu alan ilişkileri düzenlemenin kullanışlı bir yoludur. Çok sayıda ilgili kayıt olabiliyorsa kullanmayın.',
      'entityType' => 'Taban Artı - Etkinlikler, Geçmiş ve Görevler panellerine sahiptir. \\ N \\ nEvent - Takvim ve Etkinlikler panelinde kullanılabilir.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' => 
  array (
    'fields' => 
    array (
      'exportAllFields' => 'Tüm alanları dışa aktar',
      'fieldList' => 'Alan Listesi',
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
      'name' => 'İsim ',
      'version' => 'Versiyon',
      'description' => 'Açıklama',
      'isInstalled' => 'Yüklendi',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Sil',
      'Install' => 'Yükle',
    ),
    'messages' => 
    array (
      'uninstalled' => '{name} eklentisi silindi',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Bağlan',
      'Connected' => 'Bağlandı',
    ),
    'help' => 
    array (
    ),
  ),
  'FieldManager' => 
  array (
    'labels' => 
    array (
      'Dynamic Logic' => 'Dinamik Mantık',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' => 
    array (
      'dateTimeDefault' => 
      array (
        '' => 'Hiçbiri ',
        'javascript: return this.dateTime.getNow(1);' => 'Şimdi',
        'javascript: return this.dateTime.getNow(5);' => 'Şimdi (5dk)',
        'javascript: return this.dateTime.getNow(15);' => 'Şimdi (15dk)',
        'javascript: return this.dateTime.getNow(30);' => 'Şimdi (30dk)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 Saat',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 Gün ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 Gün',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 Hafta',
      ),
      'dateDefault' => 
      array (
        '' => 'Yok ',
        'javascript: return this.dateTime.getToday();' => 'Bugün',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 Gün',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 Hafta',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 Hafta',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 Hafta',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 Ay',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 Yıl',
      ),
    ),
    'tooltips' => 
    array (
      'audited' => 'Güncellemeler akış olarak kaydedilecek.',
      'required' => 'Alan zorunlu olacak. Boş bırakılamaz.',
      'default' => 'Değer, oluşturulduğunda varsayılan olarak ayarlanır.',
      'min' => 'Min kabul edilebilir değer.',
      'max' => 'Maksimum kabul edilebilir değer.',
      'seeMoreDisabled' => 'Kontrol edilmediyse, uzun metinler kısaltılacaktır.',
      'lengthOfCut' => 'Metin ne kadar önce kesilebilir?',
      'maxLength' => 'Maksimum kabul edilebilir metin uzunluğu.',
      'before' => 'Tarih değeri belirtilen alanın tarih değerinden önce olmalıdır.',
      'after' => 'Tarih değeri, belirtilen alanın tarih değerinden sonra olmalıdır.',
      'readOnly' => 'Alan değeri kullanıcı tarafından belirlenemez. Ancak formülle hesaplanabilir.',
      'maxFileSize' => 'If empty or 0 then no limit.',
    ),
    'fieldParts' => 
    array (
      'address' => 
      array (
        'street' => 'Sokak',
        'city' => 'Şehir',
        'state' => 'Bölge',
        'country' => 'Ülke',
        'postalCode' => 'Posta Kodu',
        'map' => 'Harita',
      ),
      'personName' => 
      array (
        'salutation' => 'Salutation',
        'first' => 'İlk',
        'last' => 'Son',
      ),
      'currency' => 
      array (
        'converted' => '(Çevrilmiş)',
        'currency' => '(Currency)',
      ),
      'datetimeOptional' => 
      array (
        'date' => 'Tarih',
      ),
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Eposta',
      'User' => 'Kullanıcı',
      'Team' => 'Takım',
      'Role' => 'Görev',
      'EmailTemplate' => 'Eposta Şablonu',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Kişisel E-mail Hesabı',
      'EmailAccountScope' => 'Kişisel E-mail Hesabı',
      'OutboundEmail' => 'Giden Eposta',
      'ScheduledJob' => 'Zamanlanmış İşler',
      'ExternalAccount' => 'Dış Hesap',
      'Extension' => 'Eklenti',
      'Dashboard' => 'Gösterge Paneli',
      'InboundEmail' => 'Gelen Eposta',
      'Stream' => 'Akış',
      'Import' => 'Aktar',
      'Template' => 'Taslak',
      'Job' => 'İş',
      'EmailFilter' => 'E-mail Filtresi',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Rolü',
      'Attachment' => 'Eklenti',
      'EmailFolder' => 'E-posta Klasörü',
      'PortalUser' => 'Portal Kullanıcı',
      'ScheduledJobLogRecord' => 'Planlanmış İş Kütük Kaydı',
      'PasswordChangeRequest' => 'Şifre Değişim İsteği',
      'ActionHistoryRecord' => 'Eylem Tarihçesi Kaydı',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Benzersiz ID',
      'LastViewed' => 'Son Görünenler',
      'Settings' => 'Ayarlar',
      'FieldManager' => 'Alan Yöneticisi',
      'Integration' => 'Entegrasyon',
      'LayoutManager' => 'Arayüz Yöneticisi',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Dışa Aktar',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Yönetici',
      'Global' => 'Genel',
      'Preferences' => 'Ayarlar',
      'EmailAddress' => 'Email Adresi',
      'PhoneNumber' => 'Telefon Numarası',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Hesap',
      'Contact' => 'Bağlantı',
      'Lead' => 'Müşteri Potansiyeli',
      'Target' => 'Hedef',
      'Opportunity' => 'Fırsat',
      'Meeting' => 'Toplantı',
      'Calendar' => 'Takvim',
      'Call' => 'Arama',
      'Task' => 'Görev',
      'Case' => 'Dosya',
      'Document' => 'Belge',
      'DocumentFolder' => 'Doküman Klasörü',
      'Campaign' => 'Kampanya',
      'TargetList' => 'Hedef Liste',
      'MassEmail' => 'Toplu E-posta',
      'EmailQueueItem' => 'E-posta Kuyruğu Öğesi',
      'CampaignTrackingUrl' => 'İzleme URL\'si',
      'Activities' => 'Faaliyetler',
      'KnowledgeBaseArticle' => 'Bilgi Bankası Makalesi',
      'KnowledgeBaseCategory' => 'Bilgi Bankası Kategorisi',
      'CampaignLogRecord' => 'Kampanya Günlüğü Kaydı',
      'Formularios' => 'Formulario',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Epostalar',
      'User' => 'Kullanıcılar',
      'Team' => 'Takımlar',
      'Role' => 'Görevler',
      'EmailTemplate' => 'Eposta Şablonları',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Kişisel E-mail Hesapları ',
      'EmailAccountScope' => 'Kişisel E-mail Hesapları ',
      'OutboundEmail' => 'Giden Epostalar',
      'ScheduledJob' => 'Planlanmış İşler',
      'ExternalAccount' => 'Dış Hesaplar',
      'Extension' => 'Eklentiler',
      'Dashboard' => 'Gösterge Tablosu',
      'InboundEmail' => 'Gelen Epostalar',
      'Stream' => 'Akış',
      'Import' => 'Sonuçları Aktar',
      'Template' => 'Taslaklar',
      'Job' => 'İşler',
      'EmailFilter' => 'E-mail Filtreleri',
      'Portal' => 'Portallar',
      'PortalRole' => 'Portal Rolleri',
      'Attachment' => 'Ekler',
      'EmailFolder' => 'E-posta Klasörleri',
      'PortalUser' => 'Portal Kullanıcıları',
      'ScheduledJobLogRecord' => 'Planlanmış İş Kütük Kayıtları',
      'PasswordChangeRequest' => 'Şifre Değişim İstekleri',
      'ActionHistoryRecord' => 'Eylem Tarihçesi',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Benzersiz ID\'ler',
      'LastViewed' => 'Son Görünenler',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Hesaplar',
      'Contact' => 'Bağlantılar',
      'Lead' => 'Müşteri Potansiyelleri',
      'Target' => 'Hedefler',
      'Opportunity' => 'Fırsatlar',
      'Meeting' => 'Toplantılar',
      'Calendar' => 'Takvim',
      'Call' => 'Aramalar',
      'Task' => 'Görevler',
      'Case' => 'Dosyalar',
      'Document' => 'Belgeler',
      'DocumentFolder' => 'Doküman Klasörleri',
      'Campaign' => 'Kampanyalar',
      'TargetList' => 'Hedef Listeler',
      'MassEmail' => 'Toplu E-postalar',
      'EmailQueueItem' => 'E-posta Kuyruğu Öğeleri',
      'CampaignTrackingUrl' => 'İzleme URL\'leri',
      'Activities' => 'Faaliyetler ',
      'KnowledgeBaseArticle' => 'Bilgi bankası',
      'KnowledgeBaseCategory' => 'Bilgi Tabanı Kategorileri',
      'CampaignLogRecord' => 'Kampanya Günlük Kayıtları',
      'Formularios' => 'Formularios',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Birleştir',
      'None' => 'Hiç',
      'Home' => 'Ana',
      'by' => 'tarafından',
      'Saved' => 'Kaydedildi',
      'Error' => 'hata',
      'Select' => 'Seç',
      'Not valid' => 'Geçerli Değil',
      'Please wait...' => 'Lütfen bekleyin...',
      'Please wait' => 'Lütfen bekleyin',
      'Loading...' => 'Yükleniyor...',
      'Uploading...' => 'Yükleniyor...',
      'Sending...' => 'Gönderiliyor...',
      'Merging...' => 'Birleştiriliyor...',
      'Merged' => 'Birleştirildi',
      'Removed' => 'Silindi',
      'Posted' => 'Yayınlandı',
      'Linked' => 'Bağlantı Kuruldu',
      'Unlinked' => 'Bağlantı Kesildi',
      'Done' => 'Tamam',
      'Access denied' => 'Erişim engellendi',
      'Not found' => 'Bulunamadı',
      'Access' => 'Giriş',
      'Are you sure?' => 'Emin misiniz?',
      'Record has been removed' => 'Kayıt silindi',
      'Wrong username/password' => 'Yanlış kullanıcı adı/şifre',
      'Post cannot be empty' => 'Yorum alanı boş bırakılamaz',
      'Removing...' => 'Kaldırılıyor...',
      'Unlinking...' => 'Bağlantı kesiliyor...',
      'Posting...' => 'Yayınlanıyor...',
      'Username can not be empty!' => 'Kullanıcı adı boş bırakılamaz!',
      'Cache is not enabled' => 'Önbelleğe erişilemiyor',
      'Cache has been cleared' => 'Önbellek temizlendi',
      'Rebuild has been done' => 'Onarım tamamlandı',
      'Return to Application' => 'Uygulamaya Geri Dön',
      'Saving...' => 'Kaydediliyor...',
      'Modified' => 'Değişiklik Uygulandı',
      'Created' => 'Oluşturuldu',
      'Create' => 'Oluştur',
      'create' => 'oluştur',
      'Overview' => 'Genel Bakış',
      'Details' => 'Detaylar',
      'Add Field' => 'Alan Ekle',
      'Add Dashlet' => 'Önizleme Alanı Ekle',
      'Filter' => 'Filtre',
      'Edit Dashboard' => 'Gösterge Tablosunu Düzenle',
      'Add' => 'Ekle',
      'Add Item' => 'Öğe Ekle',
      'Reset' => 'Sıfırla',
      'Menu' => 'Menü',
      'More' => 'Daha Fazla',
      'Search' => 'Arama',
      'Only My' => 'Sadece Ben',
      'Open' => 'Aç',
      'Admin' => 'Yönetici',
      'About' => 'Hakkında',
      'Refresh' => 'Yenile',
      'Remove' => 'Kaldır',
      'Options' => 'Seçenekler',
      'Username' => 'Kullanıcı Adı',
      'Password' => 'Şifre',
      'Login' => 'Giriş',
      'Log Out' => 'Çıkış',
      'Preferences' => 'Seçenekler',
      'State' => 'Semt',
      'Street' => 'Sokak',
      'Country' => 'Ülke',
      'City' => 'Şehir',
      'PostalCode' => 'Posta Kodu',
      'Followed' => 'Takip Ediliyor',
      'Follow' => 'Takip Et',
      'Followers' => 'Takipçiler',
      'Clear Local Cache' => 'Önbelleği Temizle',
      'Actions' => 'Hareketler',
      'Delete' => 'Sil',
      'Update' => 'Güncelle',
      'Save' => 'Kaydet',
      'Edit' => 'Düzenle',
      'View' => 'Görünüm',
      'Cancel' => 'İptal Et',
      'Apply' => 'Uygula',
      'Unlink' => 'Bağlantıyı Kes',
      'Mass Update' => 'Çoklu Güncelleme',
      'Export' => 'Dışa Aktar',
      'No Data' => 'Veri Yok',
      'No Access' => 'Giriş Yok ',
      'All' => 'Tümü',
      'Active' => 'Aktif',
      'Inactive' => 'Pasif',
      'Write your comment here' => 'Yorumlarınızı buraya yazın',
      'Post' => 'Yayınla',
      'Stream' => 'Hareket',
      'Show more' => 'Daha fazla göster',
      'Dashlet Options' => 'Önizleme Alanı Seçenekleri',
      'Full Form' => 'Tam Form',
      'Insert' => 'Ekle',
      'Person' => 'Kişi',
      'First Name' => 'isim',
      'Last Name' => 'Soyisim',
      'Original' => 'Orjinal',
      'You' => 'Siz',
      'you' => 'Sen',
      'change' => 'Değiştir',
      'Change' => 'Değiştir',
      'Primary' => 'Birincil',
      'Save Filter' => 'Filtreyi Kaydet',
      'Administration' => 'Yöneticilik',
      'Run Import' => 'Aktarmayı Başlat',
      'Duplicate' => 'Çoğalt',
      'Notifications' => 'Bildirimler',
      'Mark all read' => 'Tümünü okundu işaretle ',
      'See more' => 'Dahasını göster',
      'Today' => 'Bugün',
      'Tomorrow' => 'Yarın',
      'Yesterday' => 'Dün',
      'Submit' => 'Gönder',
      'Close' => 'Kapat',
      'Yes' => 'Evet',
      'No' => 'Hayır',
      'Select All Results' => 'Tüm Sonuçları Seç',
      'Value' => 'Değer',
      'Current version' => 'Şuan ki versiyon',
      'List View' => 'Liste Görünüm',
      'Tree View' => 'Ağaç Görünüm',
      'Unlink All' => 'Tümünün Bağlantısını Kaldır',
      'Total' => 'Toplam',
      'Print to PDF' => 'PDF Yazdır',
      'Default' => 'Ön değer',
      'Number' => 'Sayı',
      'From' => 'Kimden',
      'To' => 'Kime',
      'Create Post' => 'Post Yarat',
      'Previous Entry' => 'Önceki Varlık',
      'Next Entry' => 'Sonraki Varlık',
      'View List' => 'Listeyi Gör',
      'Attach File' => 'Dosya Ekle',
      'Skip' => 'Atla',
      'Attribute' => 'Özellik',
      'Function' => 'İşlevi',
      'Self-Assign' => 'Kendini Atama',
      'Self-Assigned' => 'Kendinden Atanmış',
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
      'Create InboundEmail' => 'Gelen Eposta Oluştur',
      'Activities' => 'Aktiviteler',
      'History' => 'Geçmiş',
      'Attendees' => 'Katılımcılar',
      'Schedule Meeting' => 'Toplantı Ayarla',
      'Schedule Call' => 'Arama Ayarla',
      'Compose Email' => 'Eposta Gönder',
      'Log Meeting' => 'Günlük Toplantı',
      'Log Call' => 'Günlük Arama',
      'Archive Email' => 'Epostayı Arşivle',
      'Create Task' => 'Görev Oluştur',
      'Tasks' => 'Görevler',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Lütfen bekleyiniz...',
      'posting' => 'Gönderiliyor...',
      'loading' => 'Yükleniyor...',
      'saving' => 'Kayıt Ediliyor...',
      'confirmLeaveOutMessage' => 'Formu terk etmek istediğinize emin misiniz?',
      'notModified' => 'Kayıdı değiştirmediniz',
      'duplicate' => 'Oluşturduğunuz kayıt zaten mevcut olabilir',
      'dropToAttach' => 'Iliştirmek için bırak',
      'fieldIsRequired' => '{field} gerekli',
      'fieldShouldBeEmail' => '{field} geçerli bir email olmalı',
      'fieldShouldBeFloat' => '{field} geçerli bir sayı olmalı',
      'fieldShouldBeInt' => '{field} geçerli bir sayı olmalı',
      'fieldShouldBeDate' => '{field} geçerli bir tarih olmalı',
      'fieldShouldBeDatetime' => '{field} geçerli bir tarih/zaman olmalı',
      'fieldShouldAfter' => '{field} şu değerden sonra gelmeli: {otherField}',
      'fieldShouldBefore' => '{field} şu değerden önce gelmeli: {otherField}',
      'fieldShouldBeBetween' => '{field} şu iki değer arasında olmalı: {min} ve {max}',
      'fieldShouldBeLess' => '{field} şu değerden daha az olmalı: {value}',
      'fieldShouldBeGreater' => '{field} şu değerden daha büyük olmalı: {value}',
      'fieldBadPasswordConfirm' => '{field} hatalı olarak onaylandı',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Seçenekler ön değere döndürülmüştür',
      'confirmation' => 'Emin misiniz?',
      'unlinkAllConfirmation' => 'Tüm ilgili kayıtların bağlantısını kaldırmak istediğinize emin misiniz?',
      'resetPreferencesConfirmation' => 'Seçenekleri ön değerlere döndürmek istediğinize emin misiniz?',
      'removeRecordConfirmation' => 'Kaydı silmek istediğinize emin misiniz?',
      'unlinkRecordConfirmation' => 'Tüm ilgili kayıtların bağlantısını kaldırmak istediğinize emin misiniz?',
      'removeSelectedRecordsConfirmation' => 'Seçili kayıtları silmek istediğinize emin misiniz?',
      'massUpdateResult' => '{count} kayıt güncellendi',
      'massUpdateResultSingle' => '{count} kayıt güncellendi',
      'noRecordsUpdated' => 'Hiç kayıt güncellenmedi',
      'massRemoveResult' => '{count} kayıt silindi',
      'massRemoveResultSingle' => '{count} kayıt silindi',
      'noRecordsRemoved' => 'Hiç bir kayıt silinmedi',
      'clickToRefresh' => 'Tazelemek için tıklayın',
      'streamPostInfo' => 'Postadaki kullanıcılardan bahsetmek için <strong> @username </ strong> yazın. \\ N \\ nMümkün markdown sözdizimi: \\ n \'<code> kod </ code> `\\ n ** <strong> güçlü metin </ strong> * </ Em> * \\ n ~ <del> silinen metin </ del> ~ \\ n> blockquote \\ n [link text] (url)',
      'writeYourCommentHere' => 'Yorumlarınızı buraya yazın',
      'writeMessageToUser' => '{user} kullanıcısına mesaj yaz',
      'writeMessageToSelf' => 'Akışınıza bir mesaj yazın',
      'typeAndPressEnter' => 'Yaz & enter a bas',
      'checkForNewNotifications' => 'Yeni bildirimleri denetle',
      'checkForNewNotes' => 'Akış güncellemelerini kontrol et',
      'internalPost' => 'Gönderi, yalnızca dahili kullanıcılar tarafından görülecektir',
      'internalPostTitle' => 'Yazı sadece iç kullanıcılar tarafından görülür',
      'done' => 'Tamam',
      'confirmMassFollow' => 'Seçilen kayıtları takip etmek istediğinizden emin misiniz?',
      'confirmMassUnfollow' => 'Seçilen kayıtların takibini kaldırmak istediğinizden emin misiniz?',
      'massFollowResult' => '{count} kayıtları şimdi izleniyor',
      'massUnfollowResult' => '{count} kayıtları şu an takip edilmiyor',
      'massFollowResultSingle' => '{count} kaydı şimdi takip edildi',
      'massUnfollowResultSingle' => '{count} kaydı şimdi takip edilmiyor',
      'massFollowZeroResult' => 'Hiçbir şey takip edilmedi',
      'massUnfollowZeroResult' => 'Hiçbir şey takip edilmedi',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Sadece Ben',
      'followed' => 'Takip ediliyor ',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Takip ediliyor ',
      'all' => 'Hepsi',
    ),
    'massActions' => 
    array (
      'remove' => 'Sil',
      'merge' => 'Birleştir',
      'massUpdate' => 'Toplu Güncelleme',
      'export' => 'Dışa Aktar',
      'follow' => 'Takip et',
      'unfollow' => 'Ayrılmak',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'İsim',
      'firstName' => 'isim',
      'lastName' => 'Soyisim',
      'salutationName' => 'Hitap',
      'assignedUser' => 'Atanan Kişi',
      'assignedUsers' => 'Görevlendirilmiş Kullanıcılar',
      'emailAddress' => 'Eposta',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Atanan Kişi Kullanıcı Adı',
      'teams' => 'Takımlar',
      'createdAt' => 'Oluşturuldu:',
      'modifiedAt' => 'Değiştirildi:',
      'createdBy' => 'Tarafından Oluşturuldu',
      'modifiedBy' => 'tarafından Değiştirildi:',
      'description' => 'Açıklama',
      'address' => 'Adres',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (mobil)',
      'phoneNumberHome' => 'Telefon (ev)',
      'phoneNumberFax' => 'Telefon (FAX)',
      'phoneNumberOffice' => 'Telefon (ofis)',
      'phoneNumberOther' => 'Telefon (diğer)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Sipariş',
      'parent' => 'Ebeveyn',
      'children' => 'Çocuk',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Şehir',
      'billingAddressCountry' => 'Ülke',
      'billingAddressPostalCode' => 'Posta Kodu',
      'billingAddressState' => 'Semt',
      'billingAddressStreet' => 'Sokak',
      'billingAddressMap' => 'Harita',
      'addressCity' => 'Şehir',
      'addressStreet' => 'Sokak',
      'addressCountry' => 'Ülke',
      'addressState' => 'Semt',
      'addressPostalCode' => 'Posta Kodu',
      'addressMap' => 'Harita',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
      'shippingAddressMap' => 'Harita (Sevkiyat)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Görevlendirilmiş kullanıcı ',
      'createdBy' => 'Tarafından oluşturuldu',
      'modifiedBy' => 'Tarafından güncellendi',
      'team' => 'Takım',
      'roles' => 'Roller',
      'teams' => 'Takımlar',
      'users' => 'Kullanıcılar',
      'parent' => 'Ebeveyn',
      'children' => 'Çocuk',
      'contacts' => 'Bağlantılar',
      'opportunities' => 'Fırsatlar',
      'leads' => 'Müşteri Potansiyelleri',
      'meetings' => 'Toplantılar',
      'calls' => 'Aramalar',
      'tasks' => 'Görevler',
      'emails' => 'Epostalar',
      'accounts' => 'Hesaplar',
      'cases' => 'Dosyalar',
      'documents' => 'Belgeler',
      'account' => 'Hesap',
      'opportunity' => 'Fırsat',
      'contact' => 'İletişim',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Hareket',
      'Emails' => 'Gelen Kutum',
      'Records' => 'Kayıt Listesi',
      'Leads' => 'Müşteri Potansiyellerim',
      'Opportunities' => 'Fırsatlarım',
      'Tasks' => 'Görevlerim',
      'Cases' => 'Dosyalarım',
      'Calendar' => 'Takvim',
      'Calls' => 'Çağrılarım',
      'Meetings' => 'Toplantılarım',
      'OpportunitiesByStage' => 'Aşamaya Göre Fırstalar',
      'OpportunitiesByLeadSource' => 'Müşteri Potansiyeli Kaynağına Göre Fırsatlar',
      'SalesByMonth' => 'Aylık Satışlar',
      'SalesPipeline' => 'Satış Öngörüleri',
      'Activities' => 'Faaliyetlerim',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entitiyType}{entity} size görevlendirildi',
      'emailReceived' => '{form} tarafından E-mail alındı',
      'entityRemoved' => '{user} {entitiyType}{entitiy} sildi',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} {entityType} {entity} yayınladı.',
      'attach' => '{user} {entityType} {entity} yi ekledi.',
      'status' => '{user} {field}  {entityType} {entity} yi güncelledi',
      'update' => '{user} {entityType} {entity} güncelledi.',
      'postTargetTeam' => '{user} {target} takımına yazdı',
      'postTargetTeams' => '{user} {target} takımlarına yazdı',
      'postTargetPortal' => '{user} {target} portalına yazdı',
      'postTargetPortals' => '{user} {target} portallarına yazdı',
      'postTarget' => '{user} {target}  yazdı',
      'postTargetYou' => '{user} sana yazdı',
      'postTargetYouAndOthers' => '{user} {target} ve sana yazdı',
      'postTargetAll' => '{user} herkese yazdı',
      'postTargetSelf' => '{user} kendi gönderdi',
      'postTargetSelfAndOthers' => '{user}, {target} alanına ve kendisine gönderdi',
      'mentionInPost' => '{user} {entitiyType} {entitiy} de bahsedildi',
      'mentionYouInPost' => '{user} {entitiyType} {entitiy} de senden bahsetti',
      'mentionInPostTarget' => '{user} paylaşımda bahsedildi {mentioned}',
      'mentionYouInPostTarget' => '{user} sizden {target} yazısında bahsetti',
      'mentionYouInPostTargetAll' => '{user} tümüne yazılmış yazıda sizden bahsetti',
      'mentionYouInPostTargetNoTarget' => '{user} yazıda sizden bahsetti',
      'create' => '{user} oluşturdu: {entityType} {entity}',
      'createThis' => '{user} oluşturdu: {entityType}',
      'createAssignedThis' => '{user} oluşturdu: {entityType} ve şuna atandı: {assignee}',
      'createAssigned' => '{user} oluşturdu: {entityType} {entity} ve şuna atandı: {assignee}',
      'createAssignedYou' => '{user} size atanan {entityType} {entity} oluşturdu',
      'createAssignedThisSelf' => '{user}, bu {entityType} kendinden atanmış olarak oluşturdu',
      'createAssignedSelf' => '{user}, {entityType} {entity} kendinden atanmış olarak oluşturdu',
      'assign' => '{user} şunu: {entityType} {entity} şuna ataadı: {assignee}',
      'assignThis' => '{user} şunu: {entityType} şuna atadı: {assignee}',
      'assignYou' => '{user}, size {entityType} {entity} atadı',
      'assignThisVoid' => '{user}, bu {entityType} öğesinin atamasını kaldırdı',
      'assignVoid' => '{user} atanmamış {entityType} {entity}',
      'assignThisSelf' => '{user} kendisine bu {entityType} atadı',
      'assignSelf' => '{user} kendine atanan {entityType} {entity}',
      'postThis' => '{user} yayınladı',
      'attachThis' => '{user} ekledi',
      'statusThis' => '{user} güncelledi: {field}',
      'updateThis' => '{user} güncelledi: {entityType}',
      'createRelatedThis' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType}',
      'createRelated' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType} {entity}',
      'relate' => '{user} {relatedEntitiyType} {relatedEntity} ile {entitiyType} {entitiy} bağladı',
      'relateThis' => '{user} {relatedEntitiyType} {relatedEntity} ile bu {entitiyType} bağladı',
      'emailReceivedFromThis' => '{from} tarafından email alındı',
      'emailReceivedInitialFromThis' => '{from} tarafından email alındı, bu {entitiyType} oluşturuldu',
      'emailReceivedThis' => '{entity} alındı',
      'emailReceivedInitialThis' => 'Email alındı, bu {entitiyType} oluşturuldu',
      'emailReceivedFrom' => '{from} tarafından {entitiyType} {entity} ile ilgili email alındı',
      'emailReceivedFromInitial' => '{from} tarafından email alındı, {entitiyType} {entitiy} oluşturuldu',
      'emailReceived' => '{entity} şunun için alındı: {entityType} {entity}',
      'emailReceivedInitial' => 'Email alındı: {entitiyType} {entity} oluşturuldu',
      'emailReceivedInitialFrom' => '{from} tarafından email alındı, {entitiyType} {entitiy} oluşturuldu',
      'emailSent' => '{by} {entityType} {entity} ile ilgili email gönderdi',
      'emailSentThis' => '{by} email gönderdi',
    ),
    'streamMessagesMale' => 
    array (
      'postTargetSelfAndOthers' => '{user}, {target} ve kendisine gönderildi',
    ),
    'streamMessagesFemale' => 
    array (
      'postTargetSelfAndOthers' => '{user}, {target} ve kendisine yayınladı',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Ocak',
        1 => 'Şubat',
        2 => 'Mart',
        3 => 'Nisan',
        4 => 'Mayıs',
        5 => 'Haziran',
        6 => 'Temmuz',
        7 => 'Ağustos',
        8 => 'Eylül',
        9 => 'Ekim',
        10 => 'Kasım',
        11 => 'Aralık',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Ock',
        1 => 'Şbt',
        2 => 'Mrt',
        3 => 'Nsn',
        4 => 'Mys',
        5 => 'Hzr',
        6 => 'Tmz',
        7 => 'Ağs ',
        8 => 'Eyl',
        9 => 'Ekm',
        10 => 'Ksm',
        11 => 'Arlk',
      ),
      'dayNames' => 
      array (
        0 => 'Pazar',
        1 => 'Pazartesi',
        2 => 'Salı',
        3 => 'Çarşamba',
        4 => 'Perşembe',
        5 => 'Cuma',
        6 => 'Cumartesi',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Pzr',
        1 => 'Pzrt',
        2 => 'Sal',
        3 => 'Çrşm',
        4 => 'Prşm',
        5 => 'Cma',
        6 => 'Cmrt',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Pa',
        1 => 'Ps',
        2 => 'Sa',
        3 => 'Ça',
        4 => 'Pe',
        5 => 'Cu',
        6 => 'Cr',
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
        'Mr.' => 'Bay.',
        'Mrs.' => 'Bayan.',
        'Ms.' => 'Bayan',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaca',
        'az_AZ' => 'Azeri Türkçesi',
        'be_BY' => 'Rusça',
        'bg_BG' => 'Bulgarca',
        'bn_IN' => 'Bengalcw',
        'bs_BA' => 'Boşnakça',
        'ca_ES' => 'Katalanca',
        'cs_CZ' => 'Çekce',
        'cy_GB' => 'Galce',
        'da_DK' => 'Danca',
        'de_DE' => 'Almanca',
        'el_GR' => 'Yunanca',
        'en_GB' => 'English (UK)',
        'es_MX' => 'İspanyolca (Meksika)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonca',
        'eu_ES' => 'Baskça',
        'fa_IR' => 'Farsça',
        'fi_FI' => 'Fince',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'İrlandaca',
        'gl_ES' => 'Galce',
        'gn_PY' => 'Guarani',
        'he_IL' => 'İbranice',
        'hi_IN' => 'Hintçe',
        'hr_HR' => 'Hırvatça',
        'hu_HU' => 'Macarca',
        'hy_AM' => 'Ermenice',
        'id_ID' => 'Indonesian',
        'is_IS' => 'İzlandaca',
        'it_IT' => 'İtalyanca',
        'ja_JP' => 'Japonca',
        'ka_GE' => 'Gürcüce',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korece',
        'ku_TR' => 'Kürtçe',
        'lt_LT' => 'Litvanca',
        'lv_LV' => 'Letonca',
        'mk_MK' => 'Makedonca',
        'ml_IN' => 'Malay',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norveç Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepalce',
        'nl_NL' => 'Flemenkçe',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polca',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Rumence',
        'ru_RU' => 'Rusça',
        'sk_SK' => 'Slovakça',
        'sl_SI' => 'Slovence',
        'sq_AL' => 'Arnavutça',
        'sr_RS' => 'Sırpça',
        'sv_SE' => 'İsveççe',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Taicei',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Türkçe',
        'uk_UA' => 'Ukraynaca',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamca',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Da',
        'notOn' => 'NOT ON',
        'after' => 'Sonra',
        'before' => 'Önce',
        'between' => 'Arasında',
        'today' => 'Bugün',
        'past' => 'Geçmiş',
        'future' => 'Gelecek',
        'currentMonth' => 'Güncel Ay',
        'lastMonth' => 'Geçen Ay',
        'nextMonth' => 'Sonraki Ay',
        'currentQuarter' => 'Güncel Çeyrek',
        'lastQuarter' => 'Son Çeyrek',
        'currentYear' => 'Güncel Yıl',
        'lastYear' => 'Son Yıl',
        'lastSevenDays' => 'Son 7 Gün',
        'lastXDays' => 'Son X Gün',
        'nextXDays' => 'Sonraki X Gün',
        'ever' => 'Hiç',
        'isEmpty' => 'Boş',
        'olderThanXDays' => 'X Gününden Eski',
        'afterXDays' => 'X Gün sonra',
      ),
      'searchRanges' => 
      array (
        'is' => 'dır/dir/olan',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş Değil',
        'isOneOf' => 'Herhangi Biri',
        'isFromTeams' => 'Takımdan',
        'isNot' => 'Olmayan',
        'isNotOneOf' => 'Hiçbiri',
        'anyOf' => 'Herhangi Biri',
        'noneOf' => 'Hiçbiri',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Eşittir',
        'like' => 'Benzer (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Başlar',
        'endsWith' => 'Biter',
        'contains' => 'İçerir',
        'notContains' => 'İçermeyen',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş Değil',
        'notEquals' => 'Eşit Olmayan',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Eşit',
        'notEquals' => 'Eşit Değil',
        'greaterThan' => 'den Büyük',
        'lessThan' => 'den Küçük',
        'greaterThanOrEquals' => 'den Büyük ya da Eşit',
        'lessThanOrEquals' => 'den Küçük ya da Eşit',
        'between' => 'Arasında',
        'isEmpty' => 'Boş',
        'isNotEmpty' => 'Boş değil',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Hiç',
        '0.5' => '30 saniye',
        1 => '1 dakika',
        2 => '2 dakika',
        5 => '5 dakika',
        10 => '10 dakika',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobil',
        'Office' => 'Ofis',
        'Fax' => 'FAX',
        'Home' => 'Ev',
        'Other' => 'Diğer',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Yeni Pencere',
        'Email' => 'E-posta   ',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Çeviriyi bu adreste bulabilirsiniz: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Kalın',
          'italic' => 'İtalik',
          'underline' => 'Altı Çizili',
          'strike' => 'Üstü Çizili',
          'clear' => 'Yazı Karakterini Kaldır',
          'height' => 'Satır Yüksekliği',
          'name' => 'Yazı Karakteri',
          'size' => 'YazıKarakteri Boyutu',
        ),
        'image' => 
        array (
          'image' => 'Resim',
          'insert' => 'Resim Ekle',
          'resizeFull' => 'Orjinal Boyut',
          'resizeHalf' => '1/2 Boyut',
          'resizeQuarter' => '1/4 Boyut',
          'floatLeft' => 'Sola Hizala',
          'floatRight' => 'Sağa Hizala',
          'floatNone' => 'Hizalamayı Kaldır',
          'dragImageHere' => 'Resmi buraya sürükle',
          'selectFromFiles' => 'Dosya seç',
          'url' => 'Resim URL',
          'remove' => 'Resmi Kaldır',
        ),
        'link' => 
        array (
          'link' => 'Bağlantı',
          'insert' => 'Bağlantı Ekle',
          'unlink' => 'Bağlantıyı Kes',
          'edit' => 'Düzenle',
          'textToDisplay' => 'Gösterilecek Metin',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Yeni Pencerede Aç',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Bağlantısı',
          'insert' => 'Video Ekle',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tablo',
        ),
        'hr' => 
        array (
          'insert' => 'Yatay Cetvel Ekle',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'QUOTE',
          'pre' => 'Kod',
          'h1' => 'Başlık 1',
          'h2' => 'Başlık 2',
          'h3' => 'Başlık 3',
          'h4' => 'Başlık 4',
          'h5' => 'Başlık 5',
          'h6' => 'Başlık 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Düzenlenmemiş Liste',
          'ordered' => 'Düzenlenmiş Liste',
        ),
        'options' => 
        array (
          'help' => 'Yardım',
          'fullscreen' => 'Tam Ekran',
          'codeview' => 'Kod Görünümü',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Girintiyi arttır',
          'indent' => 'Girintiyi azalt',
          'left' => 'Sola hizala',
          'center' => 'Ortaya hizala',
          'right' => 'Sağa hizala',
          'justify' => 'Tam Yasla',
        ),
        'color' => 
        array (
          'recent' => 'Son Kullanılan Renk',
          'more' => 'Daha Fazla Renk',
          'background' => 'Arkaplan Rengi',
          'foreground' => 'Yazı Karakteri Rengi',
          'transparent' => 'Şeffaflık',
          'setTransparent' => 'Şeffaflığı Ayarla',
          'reset' => 'Sıfırla',
          'resetToDefault' => 'Varsayılana Sıfırla',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Klavye Kısayolları',
          'close' => 'Kapat',
          'textFormatting' => 'Metin Biçimlendirme',
          'action' => 'Eylem',
          'paragraphFormatting' => 'Paragraf Biçimlendirme',
          'documentStyle' => 'Döküman Stili',
        ),
        'history' => 
        array (
          'undo' => 'Geri Al',
          'redo' => 'Tekrrar Yap',
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
      'Revert Import' => 'Aktarımı geri çek',
      'Return to Import' => 'Aktarıma Dön',
      'Run Import' => 'Aktarımı başlat',
      'Back' => 'Geri',
      'Field Mapping' => 'Alan haritalama ',
      'Default Values' => 'Ön Tanımlı Değerler',
      'Add Field' => 'Alan Ekle',
      'Created' => 'Oluşturuldu',
      'Updated' => 'Güncellendi',
      'Result' => 'Sonuç',
      'Show records' => 'Kayıtları Göster',
      'Remove Duplicates' => 'Çifte Kayıtları Sil',
      'importedCount' => 'Aktarıldı (count)',
      'duplicateCount' => 'Çifte Kayıtlar (count)',
      'updatedCount' => 'Güncellendi (count)',
      'Create Only' => 'Sadece oluştur',
      'Create and Update' => 'Oluştur & Güncelle',
      'Update Only' => 'Sadece Güncelle',
      'Update by' => 'Güncelleyen',
      'Set as Not Duplicate' => 'Çifte Kayıt Değil Olarak İşaretle',
      'File (CSV)' => 'Dosya (CSV)',
      'First Row Value' => 'İlk Satır Değeri',
      'Skip' => 'Geç',
      'Header Row Value' => 'Başlık Satır Değeri',
      'Field' => 'Alan',
      'What to Import?' => 'Aktarılacak Olan?',
      'Entity Type' => 'Varlık Tipi',
      'What to do?' => 'Ne yapılacak?',
      'Properties' => 'Özellikler',
      'Header Row' => 'Başlık Satırı',
      'Person Name Format' => 'Kişi İsim Formatı',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Alan Sınırlayıcı',
      'Date Format' => 'Tarih Formatı',
      'Decimal Mark' => 'Ondalık İşareti',
      'Text Qualifier' => 'Metin Eleme',
      'Time Format' => 'Zaman Formatı',
      'Currency' => 'Döviz',
      'Preview' => 'Ön İzleme',
      'Next' => 'Sonraki',
      'Step 1' => 'Adım 1',
      'Step 2' => 'Adım 2',
      'Double Quote' => 'Çift Tırnak',
      'Single Quote' => 'Tek Tırnak',
      'Imported' => 'Aktarıldı',
      'Duplicates' => 'Çifte Kayıtlar',
      'Skip searching for duplicates' => 'Çiftleri aramaktan vazgeç',
      'Timezone' => 'Saat dilimi',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'UTF-8 olmalı',
      'duplicatesRemoved' => 'Çifte Kayıtlar silindi',
      'inIdle' => 'Boşta çalıştır (büyük veriler için cron aracılığıyla)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' => 
    array (
      'file' => 'Dosya',
      'entityType' => 'Varlık Tipi',
      'imported' => 'Aktarılan Kayıtlar',
      'duplicates' => 'Çifte Kayıt Kayıtları',
      'updated' => 'Güncellenen Kayıtlar',
      'status' => 'Durum ',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Failed' => 'Hata',
        'In Process' => 'Süreç İçinde',
        'Complete' => 'Tamamlandı',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'E-mail Adresi',
      'team' => 'Hedef Ekibi',
      'status' => 'Durum',
      'assignToUser' => 'Kullanıcıyı Görevlendir',
      'host' => 'Host',
      'username' => 'Kullanıcı Adı',
      'password' => 'Şifre',
      'port' => 'Port',
      'monitoredFolders' => 'İzlenen Klasörler',
      'trashFolder' => 'Çöp Klasörü ',
      'ssl' => 'SSL',
      'createCase' => 'Dosya Oluştur',
      'reply' => 'Oto-Cevap',
      'caseDistribution' => 'Dosya Dağıtımı',
      'replyEmailTemplate' => 'Cevapla E-mail Taslağı',
      'replyFromAddress' => 'Cevaplayan Adres',
      'replyToAddress' => 'Cevaplanan Asres',
      'replyFromName' => 'Cevaplayan İsim',
      'targetUserPosition' => 'Hedef Kullanıcı Pozisyonu',
      'fetchSince' => 'Şundan itibaren çek',
      'addAllTeamUsers' => 'Tüm takım kullanıcıları için',
      'teams' => 'Takımlar',
      'sentFolder' => 'Gönderilenler Klasörü',
      'storeSentEmails' => 'Gönderilen Emailleri Sakla',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'SMTP Kullan',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Güvenlik',
      'smtpUsername' => 'SMTP Kullanıcı Adı',
      'smtpPassword' => 'SMTP Password',
      'fromName' => 'From Name',
      'smtpIsShared' => 'SMTP Is Shared',
      'smtpIsForMassEmail' => 'SMTP Is for Mass Email',
    ),
    'tooltips' => 
    array (
      'reply' => 'E-posta gönderenlerine e-postalarının alındığını bildirin. \\ N \\ n Döngüleri önlemek için belirli bir süre boyunca belirli bir alıcıya yalnızca bir e-posta gönderilir.',
      'createCase' => 'Gelen maillerden otomatik Dosya oluştur',
      'replyToAddress' => 'Bu mail kutusuna ait email adreslerini, cevapların buraya düşmesi için belirtiniz.',
      'caseDistribution' => 'Dosyaların nasıl görevlendireleceği. Direk kullanıcıyı görevlendir yada takım arasında',
      'assignToUser' => 'Kullanıcı dosyaları atanacak.',
      'team' => 'Takım dosyaları atanacak.',
      'teams' => 'Ekiplerin e-postaları atanacak.',
      'targetUserPosition' => 'Dosyalar belli pozisyonlarda ki kullanıcılar arasında dağıtılır.',
      'addAllTeamUsers' => 'E-postalar, belirtilen ekiplerin tüm kullanıcılarının Gelen Kutusunda görünecek.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filtreler',
      'emails' => 'E-postalar ',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'Inaktif',
      ),
      'caseDistribution' => 
      array (
        '' => 'Hiç',
        'Direct-Assignment' => 'Direk-Görevlendirme',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'En az meşgul',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'E-mail Hesabı Oluştur',
      'IMAP' => 'IMAP',
      'Actions' => 'Eylemler',
      'Main' => 'Ana',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'IMAP sunucusuna bağlanılamıyor',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Etkinleştirildi ',
      'clientId' => 'Müşteri ID',
      'clientSecret' => 'Müşteri Özel Anahtarı',
      'redirectUri' => 'Yönlendirme URI',
      'apiKey' => 'API Anahtarı',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Haritalar',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Menüden bir entegrasyon seçin',
      'noIntegrations' => 'Geçerli entegrasyon yok',
    ),
    'help' => 
    array (
      'Google' => '<P> <b> Google Developers Console\'dan OAuth 2.0 kimlik bilgilerini elde edin. </ B> </ p> <p> <a href="https://console.developers.google.com/project"> adresini ziyaret edin. Hem Google hem de EspoCRM uygulamasının bildiği bir Müşteri Kimliği ve Müşteri Gizliliği gibi OAuth 2.0 kimlik bilgilerini edinmek için Google Developers Console \\ \'yu kullanın. </ P>',
      'GoogleMaps' => '<P> <a href="https://developers.google.com/maps/documentation/javascript/get-api-key"> Buradan </a> API anahtarı edinin. </ P>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Durum',
      'executeTime' => 'Burda çalıştır',
      'attempts' => 'Kalan hak',
      'failedAttempts' => 'Başarısız denemeler',
      'serviceName' => 'Servis',
      'method' => 'Metod',
      'methodName' => 'Metod',
      'scheduledJob' => 'İş planla',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Veri',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Bekliyor',
        'Success' => 'Başarılı',
        'Running' => 'Çalışıyor',
        'Failed' => 'Başarısız',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Genişlik (%)',
      'link' => 'Bağlantı',
      'notSortable' => 'Sıralanamaz ',
      'align' => 'Hizala',
      'panelName' => 'Panel Adı',
      'style' => 'Stil',
      'sticked' => 'Yapışmış',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Sol',
        'right' => 'Sağ',
      ),
      'style' => 
      array (
        'default' => 'Varsayılan',
        'success' => 'Başarılı ',
        'danger' => 'Uyarı',
        'info' => 'Bilgi',
        'warning' => 'Uyarı',
        'primary' => 'Öncelikli',
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
      'post' => 'Yayınla',
      'attachments' => 'Dosya Ekle',
      'targetType' => 'Hedef',
      'teams' => 'Takımlar',
      'users' => 'Kullanıcılar',
      'portals' => 'Portallar',
      'type' => 'Tip',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Veri',
      'number' => 'Numara',
    ),
    'filters' => 
    array (
      'all' => 'Hepsi',
      'posts' => 'Yazılar',
      'updates' => 'Güncellemeler',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'kendime',
        'users' => 'Belirli kullanıcılara',
        'teams' => 'Belirli takımlara',
        'all' => 'Tüm dahili kullanıcılara',
        'portals' => 'Portal kullanıcılarına',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Mesajınızı buraya yazınız',
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
      'name' => 'İsim',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roller',
      'isActive' => 'Aktif',
      'isDefault' => 'Ön Tanımlı',
      'tabList' => 'Sekme Listesi',
      'quickCreateList' => 'Çabuk liste oluştur',
      'companyLogo' => 'Logo',
      'theme' => 'Tema ',
      'language' => 'Dil',
      'dashboardLayout' => 'Gösterge Paneli Düzeni',
      'dateFormat' => 'Tarih Formatı',
      'timeFormat' => 'Zaman Formatı',
      'timeZone' => 'Saat Dilimi',
      'weekStart' => 'Haftanın ilk günü',
      'defaultCurrency' => 'Ön Tanımlı Döviz',
      'customUrl' => 'Özel URL',
      'customId' => 'Özel kimlik',
    ),
    'links' => 
    array (
      'users' => 'Kullanıcılar',
      'portalRoles' => 'Roller',
      'notes' => 'Notlar ',
      'articles' => 'Bilgi Bankası Makaleleri',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Belirtilen Portal Rolleri, bu portalın tüm kullanıcılarına uygulanacaktır.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Portal Oluştur',
      'User Interface' => 'Kullanıcı Arayüzü',
      'General' => 'Genel',
      'Settings' => 'Ayarlar',
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
      'users' => 'Kullanıcılar',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Erişim',
      'Create PortalRole' => 'Portal Rolü Oluştur',
      'Scope Level' => 'Kapsam Düzeyi',
      'Field Level' => 'Alan Düzeyi',
    ),
  ),
  'PortalUser' => 
  array (
    'labels' => 
    array (
      'Create PortalUser' => 'Portal Kullanıcısı Yarat',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Binlik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'currencyList' => 'para Birimi Listesi',
      'language' => 'Dil',
      'smtpServer' => 'Sunucu',
      'smtpPort' => 'Bağlantı Noktası',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Güvenlik',
      'smtpUsername' => 'Kullanıcı Adı',
      'emailAddress' => 'Eposta',
      'smtpPassword' => 'Şifre',
      'smtpEmailAddress' => 'Eposta Adresi',
      'exportDelimiter' => 'Export Delimiter',
      'receiveAssignmentEmailNotifications' => 'Ödev sırasında e-posta bildirimleri',
      'receiveMentionEmailNotifications' => 'Yayınlarda bahsedilen bildirimlerle ilgili e-posta bildirimleri',
      'receiveStreamEmailNotifications' => 'Yayınlar ve durum güncellemeleri ile ilgili e-posta bildirimleri',
      'autoFollowEntityTypeList' => 'Oto-Takip',
      'signature' => 'E-mail İmzası',
      'dashboardTabList' => 'Sekme Listesi',
      'defaultReminders' => 'Ön Tanımlı Hatırlatıcılar',
      'theme' => 'Tema ',
      'useCustomTabList' => 'Özel Sekme Listesi',
      'tabList' => 'Sekme Listesi',
      'emailReplyToAllByDefault' => 'Ön Tanımlı Olarak Tümüne Yanıtla',
      'dashboardLayout' => 'Kontrol Paneli Düzeni',
      'emailReplyForceHtml' => 'HTML\'de Yanıtla E-postasını Yanıtla',
      'doNotFillAssignedUserIfNotRequired' => 'Gerekli değilse, Atanmış Kullanıcıyı doldurmayın',
      'followEntityOnStreamPost' => 'Akışta yayınlandıktan sonra varlığı otomatik olarak takip etme',
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
        0 => 'Pazar',
        1 => 'Pazartesi',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Bildirimler',
      'User Interface' => 'Kullanıcı Arayüzü',
      'SMTP' => 'SMTP',
      'Misc' => 'Diğerleri',
      'Locale' => 'Lokal',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Kullanıcı, seçili varlık türlerinin tüm yeni kayıtlarını otomatik olarak izleyecek, akışta bilgi görecek ve bildirim alacaktır.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'roles' => 'Görevler',
      'assignmentPermission' => 'Görevlendirme Yetkisi',
      'userPermission' => 'Kullanıcı Yetkisi',
      'portalPermission' => 'Portal Yetkisi',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Kullanıcılar',
      'teams' => 'Takımlar',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Kayıtları atama ve diğer kullanıcılara mesaj gönderme yeteneğini kısıtlamaya izin verir. \\ N \\ n - kısıtlama yok \\ n \\ nteam - yalnızca takım arkadaşlarına atayabilir ve yayınlayabilir \\ n \\ nno - yalnızca kendine atayabilir ve kendisine gönderebilir',
      'userPermission' => 'Kullanıcıların diğer kullanıcıların etkinliklerini, takvimlerini ve akışlarını görüntüleme olanağını kısıtlamasına izin verir. \\ N \\ n - hepsini görüntüleyebilir \\ n \\ nteam - yalnızca takım arkadaşlarının etkinliklerini görüntüleyebilir \\ n \\ n - görüntüleyemezsiniz.',
      'portalPermission' => 'Portal bilgilerine bir erişimi, kişileri portal kullanıcılarına dönüştürme yeteneğini ve portal kullanıcılarına mesaj göndermeyi tanımlar.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Giriş',
      'Create Role' => 'Görev Oluştur',
      'Scope Level' => 'Kapsam Düzeyi',
      'Field Level' => 'Alan Düzeyi',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'ayarlanmadı',
        'enabled' => 'etkinleştirildi',
        'disabled' => 'devre dışı bırakıldı',
      ),
      'levelList' => 
      array (
        'all' => 'tümü',
        'team' => 'takım',
        'account' => 'Hesap',
        'contact' => 'Kişi',
        'own' => 'kendi',
        'no' => 'NO',
        'yes' => 'Evet',
        'not-set' => 'Ayarlanmamış',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Oku',
      'edit' => 'Düzenle',
      'delete' => 'Sil',
      'stream' => 'Akış',
      'create' => 'Oluştur',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Erişim kontrolündeki tüm değişiklikler, önbellek silindikten sonra uygulanır.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum',
      'job' => 'İş',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Kayıt',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Create Scheduled Job',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Temizle',
        'CheckInboundEmails' => 'Gelen Epostaları Kontrol T',
        'CheckEmailAccounts' => 'Kişisel e-mail hesaplarını kontrol et',
        'SendEmailReminders' => 'E-mail hatırlatıcıları gönder',
        'AuthTokenControl' => 'Kimlik Doğrulama Simgesi Kontrolü',
        'SendEmailNotifications' => 'E-posta Bildirimleri gönder',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Toplu E-postalar gönder',
        'ControlKnowledgeBaseArticleStatus' => 'Bilgi Bankası Makalesinin Durumunu Kontrol Edin',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Not: Espo Planlanmış İşleri çalıştırabilmek için şu kodları crontab dosyasına ekleyin:',
        'mac' => 'Not: Espo Planlanmış İşleri çalıştırabilmek için şu kodları crontab dosyasına ekleyin:',
        'windows' => 'Not: Espo Planlanmış İşleri Windows Scheduled Task ile kullanabilmek için şu kodlarla bir BATCH dosyası oluşturun: ',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'Pasif',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Crontab gösterimi. İşlerin sıklığını tanımlar. \\ N \\ n * / 5 * * * * - her 5 dakikada bir \\ n \\ n0 * / 2 * * * - her 2 saatte bir \\ n \\ n30 1 * * * - saat 01: 30\'da bir kez Gün \\ n \\ n0 0 1 * * - ayın ilk gününde',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Durum',
      'executionTime' => 'Çalışma Süresi',
      'target' => 'Hedef',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Önbelleği Kullan',
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Binlik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'baseCurrency' => 'Ana Para Birimi',
      'currencyRates' => 'Kur Değerleri',
      'currencyList' => 'para Birimi Listesi',
      'language' => 'Dil',
      'companyLogo' => 'Company Logo',
      'smtpServer' => 'Sunucu',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Kimlik doğrulama',
      'smtpSecurity' => 'Güvenlik',
      'smtpUsername' => 'Kullanıcı Adı',
      'emailAddress' => 'Eposta',
      'smtpPassword' => 'Şifre',
      'outboundEmailFromName' => 'Kimden',
      'outboundEmailFromAddress' => 'Gönderen Adresi',
      'outboundEmailIsShared' => 'Paylaşıldı',
      'recordsPerPage' => 'Sayfa Başına Kayıtlar',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Sekme Listesi',
      'quickCreateList' => 'Çabuk Oluşturma Listesi',
      'exportDelimiter' => 'Export Delimiter',
      'globalSearchEntityList' => 'Global Arama Aracısı Listesi',
      'authenticationMethod' => 'Kimlik doğrulama metodu',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Kimlik doğrulama',
      'ldapUsername' => 'Tam Kullanıcı DN',
      'ldapPassword' => 'Şifre',
      'ldapBindRequiresDn' => 'Bağlama DN gerektirir',
      'ldapBaseDn' => 'Temel DN',
      'ldapAccountCanonicalForm' => 'Hesap Kanonik Formu',
      'ldapAccountDomainName' => 'Hesap Domain İsmi',
      'ldapTryUsernameSplit' => 'Kullanıcı Adını Ayırmayı Dene',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'EspoCRM kullanıcı oluştur',
      'ldapSecurity' => 'Güvenlik',
      'ldapUserLoginFilter' => 'Kullanıcı giriş filtresi ',
      'ldapAccountDomainNameShort' => 'Hesap domain kısa adı',
      'ldapOptReferrals' => 'Opt Tavsiyeler',
      'ldapUserNameAttribute' => 'Kullanıcı Adı Özniteliği',
      'ldapUserObjectClass' => 'Kullanıcı ObjectClass',
      'ldapUserTitleAttribute' => 'Kullanıcı Başlığı Öznitelik',
      'ldapUserFirstNameAttribute' => 'Kullanıcı Adı Soyadı',
      'ldapUserLastNameAttribute' => 'Kullanıcı Soyadı Özellik',
      'ldapUserEmailAddressAttribute' => 'Kullanıcı E-posta Adresi Özniteliği',
      'ldapUserTeams' => 'Kullanıcı Ekipleri',
      'ldapUserDefaultTeam' => 'Kullanıcı Varsayılan Takımı',
      'ldapUserPhoneNumberAttribute' => 'Kullanıcı Telefon Numarası Öznitelik',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Dışa aktarımı devre dışı yap(sadece yönetici izinlidir)',
      'assignmentNotificationsEntityList' => 'Görev hakkında bilgi vermek için varlıklar',
      'assignmentEmailNotifications' => 'Atama üzerine bildirimler',
      'assignmentEmailNotificationsEntityList' => 'Atama e-posta bildirim kapsamları',
      'streamEmailNotifications' => 'Dahili kullanıcılar için Akış güncellemeleri hakkında bildirimler',
      'portalStreamEmailNotifications' => 'Portal kullanıcıları için Akış güncellemeleri ile ilgili bildirimler',
      'streamEmailNotificationsEntityList' => 'Akış e-posta bildirim kapsamları',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C Modu',
      'avatarsDisabled' => 'Avatarları devre dışı yap',
      'followCreatedEntities' => 'Oluşturulan Varlıkları Takip Et',
      'displayListViewRecordCount' => 'Toplam Sayıyı Göster (liste görünümünde)',
      'theme' => 'Tema ',
      'userThemesDisabled' => 'Kullanıcı Temalarını Devre Dışı Bırak',
      'emailMessageMaxSize' => 'E-mail maksimum boyut (MB)',
      'massEmailMaxPerHourCount' => 'Saat başı gönderilen maksimum e-mail sayısı ',
      'personalEmailMaxPortionSize' => 'Kişisel hesap getirme için maksimum e-posta bölümü boyutu',
      'inboundEmailMaxPortionSize' => 'Grup hesabı getirme için maksimum e-posta bölümü boyutu',
      'maxEmailAccountCount' => 'Kullanıcı başına maksimum kişisel e-posta hesabı sayısı',
      'authTokenLifetime' => 'Auth Token Ömrü (saat)',
      'authTokenMaxIdleTime' => 'Kimlik Doğrulama Sırası Maks Gecikme Süresi (saat)',
      'dashboardLayout' => 'Kontrol Paneli Düzeni (varsayılan)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Adres ön izlemesi',
      'addressFormat' => 'Adres formatı ',
      'notificationSoundsDisabled' => 'Bildirim seslerini devre dışı bırak ',
      'applicationName' => 'Uygulama ismi',
      'calendarEntityList' => 'Takvim Varlık Listesi',
      'mentionEmailNotifications' => 'Yayınlarda bulunan mektuplarla ilgili e-posta bildirimleri gönder',
      'massEmailDisableMandatoryOptOutLink' => 'Zorunlu devre dışı bırakma bağlantısını devre dışı bırak',
      'activitiesEntityList' => 'Etkinlikler Varlık Listesi',
      'historyEntityList' => 'Geçmiş Varlık Listesi',
      'currencyFormat' => 'Döviz Formatı',
      'currencyDecimalPlaces' => 'Döviz Ondalık Hanesi',
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
        0 => 'Pazar',
        1 => 'Pazartesi',
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
      'recordsPerPage' => 'Liste görünümlerinde başlangıçta görüntülenen kayıtların sayısı.',
      'recordsPerPageSmall' => 'İlişki panellerinde başlangıçta görüntülenen kayıtların sayısı.',
      'outboundEmailIsShared' => 'Kullanıcıların bu SMTP yoluyla e-posta göndermesine izin verin.',
      'followCreatedEntities' => 'Kullanıcılar oluşturdukları kayıtları otomatik olarak izleyecektir.',
      'emailMessageMaxSize' => 'Belirli bir boyutu aşan tüm gelen e-postalar gövdesi ve ekleri olmadan alınır.',
      'authTokenLifetime' => 'Belirteçlerin ne kadar süre var olabileceğini tanımlar. \\ N0 - sona erme anlamına gelir.',
      'authTokenMaxIdleTime' => 'Son erişim belirteçlerinin ne kadar zamandan beri mevcut olabileceğini tanımlar. \\ N0 - son kullanma anlamına gelir.',
      'userThemesDisabled' => 'İşaretlenirse kullanıcılar başka bir tema seçemez.',
      'ldapUsername' => 'Diğer kullanıcıları aramaya izin veren tam sistem kullanıcı DN\'si. Örneğin, \\ "CN = LDAP Sistem Kullanıcısı, OU = kullanıcılar, OU = espocrm, DC = test, DC = lan ".',
      'ldapPassword' => 'LDAP sunucusuna erişmek için kullanılan parola.',
      'ldapAuth' => 'LDAP sunucusu için kimlik bilgilerine erişin.',
      'ldapUserNameAttribute' => 'Kullanıcıyı tanımlayan özellik. \\ NE.g. \\ "UserPrincipalName " veya \\ "sAMAccountName " Active Directory için \\ "kullanıcı " OpenLDAP için.',
      'ldapUserObjectClass' => 'Kullanıcıları aramak için ObjectClass özniteliği. Örneğin, AD için \\ "kişi ", OpenLDAP için \\ "inetOrgPerson ".',
      'ldapAccountCanonicalForm' => 'Hesap kanonik formunuzun türü. 4 seçenek var: <br> - \'Dn\' - \'CN = tester, OU = espocrm, DC = test, DC = lan\' biçimindeki form. <br> - \'Kullanıcı adı\' - form \'tester\'. <br> - \'Ters eğik çizgi\' - \'ŞİRKET \\ tester\' formu. <br> - \'Ana\' - \'tester@company.com\' formatı.',
      'ldapBindRequiresDn' => 'Kullanıcı adını DN biçiminde biçimlendirme seçeneği.',
      'ldapBaseDn' => 'Kullanıcıları aramak için kullanılan varsayılan taban DN. Örneğin, \\ "OU = kullanıcılar, OU = espocrm, DC = test, DC = lan ".',
      'ldapTryUsernameSplit' => 'Bir kullanıcı adını alan adıyla bölme seçeneği.',
      'ldapOptReferrals' => 'Yönlendirme LDAP istemcisine uyulması gerekiyorsa.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Bu seçenek, EspoCRM\'nin LDAP\'den bir kullanıcı oluşturmasını sağlar.',
      'ldapUserFirstNameAttribute' => 'Kullanıcının ilk adını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "verilen ad ".',
      'ldapUserLastNameAttribute' => 'Kullanıcının soyadını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "sn ".',
      'ldapUserTitleAttribute' => 'Kullanıcı başlığını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "başlık ".',
      'ldapUserEmailAddressAttribute' => 'Kullanıcı e-posta adresini belirlemek için kullanılan LDAP özelliği. Örneğin \\ "posta ".',
      'ldapUserPhoneNumberAttribute' => 'Kullanıcı telefon numarasını belirlemek için kullanılan LDAP özniteliği. Örneğin \\ "telefon numarası ".',
      'ldapUserLoginFilter' => 'EspoCRM\'yi kullanabilen kullanıcıları kısıtlamaya izin veren filtre. Örneğin, \\ "memberOf = CN = espoGroup, OU = gruplar, OU = espocrm, DC = test, DC = lan ".',
      'ldapAccountDomainName' => 'LDAP sunucusuna yetki vermek için kullanılan etki alanı.',
      'ldapAccountDomainNameShort' => 'LDAP sunucusuna yetki vermek için kullanılan kısa alan.',
      'ldapUserTeams' => 'Yaratılan takımlar. Daha fazlası için bkz. Kullanıcı profili.',
      'ldapUserDefaultTeam' => 'Oluşturulan kullanıcı için varsayılan ekip. Daha fazlası için bkz. Kullanıcı profili.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'EspoCRM varsayılan olarak B2B için uyarlanmıştır. B2C\'ye geçebilirsiniz.',
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
      'System' => 'Sistem',
      'Locale' => 'Yerel',
      'SMTP' => 'SMTP',
      'Configuration' => 'Yapılandırma',
      'In-app Notifications' => 'Uygulama İçi Bildirim',
      'Email Notifications' => 'Eposta uyarıları ',
      'Currency Settings' => 'Para Birimi Ayarları',
      'Currency Rates' => 'Döviz Kurları',
      'Mass Email' => 'Toplu E-posta',
      'Test Connection' => 'Bağlantıyı Test Et',
      'Connecting' => 'Bağlanıyor...',
      'Activities' => 'Faaliyetler ',
      'Admin Notifications' => 'Admin Notifications',
    ),
    'messages' => 
    array (
      'ldapTestConnection' => 'Bağlantı başarıyla kuruldu.',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'roles' => 'Görevler',
      'positionList' => 'Pozisyon Listesi',
    ),
    'links' => 
    array (
      'users' => 'Kullanıcılar',
      'notes' => 'Notlar',
      'roles' => 'Roller',
      'inboundEmails' => 'Grup E-posta Hesapları',
    ),
    'tooltips' => 
    array (
      'roles' => 'Rollere Erişim. Bu ekibin kullanıcıları, seçilen rollerden erişim kontrolü düzeyi elde eder.',
      'positionList' => 'Bu takımda mevcut pozisyonlar. Örneğin Satış Görevlisi, Müdür.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Takım Oluştur',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Tanım',
      'body' => 'Gövde',
      'entityType' => 'Varlık Türü',
      'header' => 'Başlık ',
      'footer' => 'Sayfa Altbilgi',
      'leftMargin' => 'Sol Boşluk',
      'topMargin' => 'Üst boşluk',
      'rightMargin' => 'Sağ Boşluk',
      'bottomMargin' => 'Alt Kenar Boşluğu',
      'printFooter' => 'Baskı Altlığı',
      'footerPosition' => 'Altbilgi Konumu',
      'variables' => 'Uygun Yertutucuları',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'fontFace' => 'Font',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Şablon Oluştur',
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
      'footer' => 'Sayfa numarasını basmak için {pageNumber} kullanın.',
      'variables' => 'Başlık, Gövde veya Alt Satır yertutucusu için kopyala-yapıştır gerekli.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'userName' => 'Kullanıcı Adı',
      'title' => 'Başlık',
      'isAdmin' => 'Yönetici',
      'defaultTeam' => 'Varsayılan Takım',
      'emailAddress' => 'Eposta',
      'phoneNumber' => 'Telefon',
      'roles' => 'Görevler',
      'portals' => 'Portallar',
      'portalRoles' => 'Portal Rolleri',
      'teamRole' => 'Pozisyon ',
      'password' => 'Şifre',
      'currentPassword' => 'Şuan ki Şifre',
      'passwordConfirm' => 'Şifreyi Doğrulayın',
      'newPassword' => 'New Password',
      'newPasswordConfirm' => 'Yeni şifreyi onayla',
      'avatar' => 'Resim',
      'isActive' => 'Aktif',
      'isPortalUser' => 'Portal kullanıcısı mı',
      'contact' => 'İletişim',
      'accounts' => 'Hesaplar',
      'account' => 'Hesap (Birincil)',
      'sendAccessInfo' => 'Kullanıcıya Erişim Bilgisiyle E-posta Gönder',
      'portal' => 'Portal',
      'gender' => 'Cinsiyet',
      'position' => 'Takım halinde pozisyon',
      'ipAddress' => 'IP Adresi',
      'passwordPreview' => 'Şifre Ön İzleme',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Last Access',
      'acceptanceStatus' => 'Kabul Durumu',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'teams' => 'Takımlar',
      'roles' => 'Görevler',
      'notes' => 'Notlar',
      'portals' => 'Portallar',
      'portalRoles' => 'Portal Rolleri',
      'contact' => 'Temas',
      'accounts' => 'Hesaplar',
      'account' => 'Hesap (Birincil)',
      'tasks' => 'Görevler',
      'targetLists' => 'Hedef Listeler',
    ),
    'labels' => 
    array (
      'Create User' => 'Kullanıcı Oluştur',
      'Generate' => 'Generate',
      'Access' => 'Giriş',
      'Preferences' => 'Seçenekler',
      'Change Password' => 'Change Password',
      'Teams and Access Control' => 'Takımlar ve Erişim Kontrolü',
      'Forgot Password?' => 'Şifremi unuttum?',
      'Password Change Request' => 'Şifre Değiştirme İsteği',
      'Email Address' => 'E-Posta Adresi ',
      'External Accounts' => 'Dış Hesaplar',
      'Email Accounts' => 'E-posta hesapları',
      'Portal' => 'Internet anakapısı',
      'Create Portal User' => 'Portal Kullanıcısı Yarat',
      'Proceed w/o Contact' => 'İletişimsiz olarak devam et',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Bu kullanıcı tarafından oluşturulan tüm kayıtlar varsayılan olarak bu takımla ilişkilendirilir.',
      'userName' => 'Harf az, sayı 0-9, nokta, tire, @ işaret ve alt çizgiye izin verilir.',
      'isAdmin' => 'Yönetici kullanıcısı her şeye erişebilir.',
      'isActive' => 'İşaretlenmezse, kullanıcı giriş yapamaz.',
      'teams' => 'Bu kullanıcının bağlı olduğu takımlar. Erişim kontrol seviyesi takımın rollerinden devralınmıştır.',
      'roles' => 'Ek erişim rolleri. Kullanıcı herhangi bir ekibe üye değilse veya bu kullanıcı için yalnızca erişim denetimi düzeyini genişletmeniz gerekiyorsa kullanın.',
      'portalRoles' => 'Ek portal rolleri. Bu kullanıcı için erişim denetimi düzeyini yalnızca mülkten genişletmek için kullanın.',
      'portals' => 'Bu kullanıcının erişebildiği portallar.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Password will be sent to user\'s email address.',
      'accountInfoEmailSubject' => 'Account info',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Parola Talebini Değiştir',
      'passwordChangeLinkEmailBody' => 'Bu {link}\'i takip ederek şifrenizi değiştirebilirsiniz. Bu benzersiz URL yakın zamanda geçersiz olacaktır.',
      'passwordChanged' => 'Password has been changed',
      'userCantBeEmpty' => 'Kullanıcı adı boş olamaz.',
      'wrongUsernamePasword' => 'Yanlış kullanıcı adı / şifre',
      'emailAddressCantBeEmpty' => 'E-posta Adresi boş olamaz',
      'userNameEmailAddressNotFound' => 'Kullanıcı adı / e-posta adresi bulunamadı',
      'forbidden' => 'Yasak, lütfen daha sonra deneyin',
      'uniqueLinkHasBeenSent' => 'Benzersiz URL belirtilen e-posta adresine gönderilmiştir.',
      'passwordChangedByRequest' => 'Şifre değiştirildi.',
      'setupSmtpBefore' => 'Sistemin e-postayla şifre gönderebilmesi için <a href="{url}"> SMTP ayarlarını kurmanız </a> gerekir.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' => 
    array (
      'gender' => 
      array (
        '' => 'Ayarlanmadı',
        'Male' => 'Erkek',
        'Female' => 'Kadın',
        'Neutral' => 'Belirtilmedi',
      ),
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Yalnızca Ekibim',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif ',
      'activePortal' => 'Portal Aktif',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'website' => 'Website',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Fatura Adresi',
      'shippingAddress' => 'Teslimat Adresi',
      'description' => 'Açıklama',
      'sicCode' => 'Firma Kodu',
      'industry' => 'Sektör',
      'type' => 'Tür',
      'contactRole' => 'Başlık',
      'contactIsInactive' => 'Inaktif',
      'campaign' => 'Kampanya',
      'targetLists' => 'Hedef Listeler',
      'targetList' => 'Hedef Liste',
      'originalLead' => 'Orijinal Müşteri Potansiyeli',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Bağlantılar',
      'opportunities' => 'Fırsatlar',
      'cases' => 'Dosyalar',
      'documents' => 'Belgeler',
      'meetingsPrimary' => 'Toplantılar (genişletildi)',
      'callsPrimary' => 'Aramalar (genişletildi)',
      'tasksPrimary' => 'Görevler (genişletildi)',
      'emailsPrimary' => 'E-postalar (genişletildi)',
      'targetLists' => 'Hedef Listeler',
      'campaignLogRecords' => 'Kampanya Günlüğü',
      'campaign' => 'Kampanya',
      'portalUsers' => 'Portal Kullanıcıları',
      'originalLead' => 'Orijinal Müşteri Potansiyeli',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Müşteri',
        'Investor' => 'Yatırımcı',
        'Partner' => 'Ortak',
        'Reseller' => 'Satıcı',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Havacılık',
        'Agriculture' => 'Tarım',
        'Advertising' => 'Reklamcılık',
        'Apparel & Accessories' => 'Giyim ve Aksesuar',
        'Architecture' => 'Mimarlık',
        'Automotive' => 'Otomotiv',
        'Banking' => 'Bankacılık',
        'Biotechnology' => 'Biyoteknoloji',
        'Building Materials & Equipment' => 'Yapı Malzemeleri ve Ekipmanları',
        'Chemical' => 'Kimyasal',
        'Construction' => 'İnşaat',
        'Computer' => 'Bilgisayar',
        'Defense' => 'Savunma',
        'Creative' => 'Yaratıcı',
        'Culture' => 'Kültür',
        'Consulting' => 'Danışmanlık',
        'Education' => 'Eğitim',
        'Electronics' => 'Elektronik',
        'Electric Power' => 'Elektrik Gücü',
        'Energy' => 'Enerji',
        'Entertainment & Leisure' => 'Eğlence ve Eğlence',
        'Finance' => 'Finans',
        'Food & Beverage' => 'Yiyecek ve İçecek',
        'Grocery' => 'Bakkal',
        'Hospitality' => 'Ağırlama',
        'Healthcare' => 'Sağlık Hizmeti',
        'Insurance' => 'Sigortacılık',
        'Legal' => 'Hukuk',
        'Manufacturing' => 'Imalat',
        'Mass Media' => 'Kitle İletişim Araçları',
        'Mining' => 'Madencilik',
        'Music' => 'Müzik',
        'Marketing' => 'PAZARLAMA',
        'Publishing' => 'Yayınlama',
        'Petroleum' => 'Petrol',
        'Real Estate' => 'Gayrimenkul',
        'Retail' => 'Perakende',
        'Shipping' => 'Nakliye',
        'Service' => 'Hizmet',
        'Support' => 'Destek ',
        'Sports' => 'Spor',
        'Software' => 'Yazılım',
        'Technology' => 'Teknoloji',
        'Telecommunications' => 'Telekomünikasyon',
        'Television' => 'Televizyon!',
        'Testing, Inspection & Certification' => 'Test, Muayene ve Belgelendirme',
        'Transportation' => 'Taşımacılık ',
        'Travel' => 'Travel',
        'Venture Capital' => 'Risk Sermayesi',
        'Wholesale' => 'Toptan',
        'Water' => 'Su',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Hesap Oluştur',
      'Copy Billing' => 'Faturalamayı Kopyala',
      'Set Primary' => 'Birincil Yap',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Müşteriler',
      'partners' => 'İş Ortaklarımı',
      'recentlyCreated' => 'Yakın Zamanda Oluşturuldu',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Ay',
      'week' => 'hafta',
      'day' => 'Gün',
      'agendaWeek' => 'hafta',
      'agendaDay' => 'Gün',
      'timeline' => 'Zaman Tüneli',
    ),
    'labels' => 
    array (
      'Today' => 'Bugün',
      'Create' => 'Oluştur',
      'Shared' => 'Paylaşım seçenekleri:  ',
      'Add User' => 'Kullanıcı Ekle',
      'current' => 'Mevcut',
      'time' => 'saat',
      'User List' => 'Kullanıcı Listesi',
      'Manage Users' => 'Kullanıcıları yönet',
      'View Calendar' => 'Takvimi Göster',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'direction' => 'Yönlendirme',
      'duration' => 'Süre',
      'description' => 'Açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Bağlantılar',
      'leads' => 'Müşteri Potansiyelleri',
      'reminders' => 'Hatırlatıcılar',
      'account' => 'Hesap',
      'acceptanceStatus' => 'Kabul Durumu',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar',
      ),
      'direction' => 
      array (
        'Outbound' => 'Giden',
        'Inbound' => 'Gelen',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Yok',
        'Accepted' => 'Kabul edilmiş',
        'Declined' => 'Red edilmiş',
        'Tentative' => 'Geçici',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Düzenlendi',
      'setNotHeld' => 'Düzenlenmedi olarak ayarla',
    ),
    'labels' => 
    array (
      'Create Call' => 'Arama Oluştur',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetleri Gönder',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planlandı',
      'held' => 'Düzenlendi',
      'todays' => 'Bugünün',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'description' => 'Açıklama',
      'status' => 'Durum ',
      'type' => 'tip ',
      'startDate' => 'Başlangıç ​​tarihi',
      'endDate' => 'Bitiş tarihi',
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hedef Listeleri Hariç Tutma',
      'sentCount' => 'gönderildi',
      'openedCount' => 'Açılmış',
      'clickedCount' => 'tıklandı',
      'optedOutCount' => 'Devre dışı bırakıldı',
      'bouncedCount' => 'Geri Döndü',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Sert Geri Döndü',
      'softBouncedCount' => 'Yumuşak Geri Döndü',
      'leadCreatedCount' => 'Müşteri Potansiyelleri Oluşturuldu',
      'revenue' => 'Gelir',
      'revenueConverted' => 'Gelir (dönüştürülmüş)',
      'budget' => 'Bütçe',
      'budgetConverted' => 'Bütçe (dönüştürülmüş)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hedef Listeleri Hariç Tutma',
      'accounts' => 'Hesaplar',
      'contacts' => 'İletişim kişileri',
      'leads' => 'Müşteri Potansiyelleri',
      'opportunities' => 'Fırsatlar',
      'campaignLogRecords' => 'Kütük',
      'massEmails' => 'Toplu E-postalar',
      'trackingUrls' => 'İzleme URL\'leri',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-posta   ',
        'Web' => 'Ağ',
        'Television' => 'Televizyon!',
        'Radio' => 'radyo',
        'Newsletter' => 'Bülten',
        'Mail' => 'Email',
      ),
      'status' => 
      array (
        'Planning' => 'Planlama',
        'Active' => 'Aktif ',
        'Inactive' => 'Inaktif ',
        'Complete' => 'Tamamla',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Kampanya Oluştur',
      'Target Lists' => 'Hedef Listeler',
      'Statistics' => 'İstatistikler',
      'hard' => 'sert',
      'soft' => 'Yumuşak',
      'Unsubscribe' => 'Unsubscribe (Bülten üyeliğinden çıkma)',
      'Mass Emails' => 'Toplu E-postalar',
      'Email Templates' => 'E-posta şablonları',
      'Unsubscribe again' => 'Tekrar abonelikten çık',
      'Subscribe again' => 'Tekrar üye olun',
      'Create Target List' => 'Hedef Liste Yarat',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif ',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Posta listemizden çıktınız',
      'subscribedAgain' => 'Tekrar abone oldunuz.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Mesaj alması gereken hedefler.',
      'excludingTargetLists' => 'Mesaj almaması gereken hedefler.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Eylem',
      'actionDate' => 'Tarih',
      'data' => 'Veri',
      'campaign' => 'Kampanya',
      'parent' => 'Hedef',
      'object' => 'Nesne',
      'application' => 'Uygulama',
      'queueItem' => 'Sıra Öğesi',
      'stringData' => 'Dize Verileri',
      'stringAdditionalData' => 'Dize Ek Veri',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Sıra Öğesi',
      'parent' => 'Üst',
      'object' => 'Nesne',
      'campaign' => 'Kampanya',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'gönderildi',
        'Opened' => 'Açılmış',
        'Opted Out' => 'Devre dışı bırakıldı',
        'Bounced' => 'Geri Döndü',
        'Clicked' => 'tıklandı',
        'Lead Created' => 'Müşteri Potansiyeli Oluşturuldu',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Hepsi',
    ),
    'presetFilters' => 
    array (
      'sent' => 'gönderildi',
      'opened' => 'Açılmış',
      'optedOut' => 'Devre dışı bırakıldı',
      'optedIn' => 'Opted In',
      'bounced' => 'Geri Döndü',
      'clicked' => 'tıklandı',
      'leadCreated' => 'Müşteri Potansiyeli Oluşturuldu',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL  ',
      'urlToUse' => 'URL yerine eklemek için kod',
      'campaign' => 'Kampanya',
    ),
    'links' => 
    array (
      'campaign' => 'Kampanya',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'İzleme URL\'si Oluştur',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'number' => 'Numara',
      'status' => 'Durum',
      'account' => 'Hesap',
      'contact' => 'Bağlantı',
      'contacts' => 'İletişim ',
      'priority' => 'Öncelik',
      'type' => 'Tür',
      'description' => 'Açıklama',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Müşteri Potansiyeli',
      'attachments' => 'Ekler',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Group Email Account',
      'account' => 'Hesap',
      'contact' => 'İletişim (Birincil)',
      'Contacts' => 'İletişim kişileri',
      'meetings' => 'Toplantılar',
      'calls' => 'Aramalar',
      'tasks' => 'Görevler',
      'emails' => 'E-postalar ',
      'articles' => 'Bilgi Bankası Makaleleri',
      'lead' => 'Müşteri Potansiyeli',
      'attachments' => 'Ekler',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'Pending' => 'Beklemede',
        'Closed' => 'Kapandı',
        'Rejected' => 'Reddedildi',
        'Duplicate' => 'Kopyala',
      ),
      'priority' => 
      array (
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil',
      ),
      'type' => 
      array (
        'Question' => 'Soru',
        'Incident' => 'Olay',
        'Problem' => 'sorun',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Dosya Oluştur',
      'Close' => 'Kapat ',
      'Reject' => 'Reddet  ',
      'Closed' => 'Kapalı ',
      'Rejected' => 'Reddedildi',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aç ',
      'closed' => 'Kapalı ',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'account' => 'Hesap',
      'accounts' => 'Hesaplar',
      'phoneNumber' => 'Telefon ',
      'accountType' => 'Hesap Türü',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'opportunityRole' => 'Fırsat Rolü',
      'accountRole' => 'Başlık',
      'description' => 'Açıklama',
      'campaign' => 'Kampanya',
      'targetLists' => 'Hedef Listeler',
      'targetList' => 'Hedef Liste',
      'portalUser' => 'Portal Kullanıcı',
      'originalLead' => 'Orijinal Müşteri Potansiyeli',
      'acceptanceStatus' => 'Kabul Durumu',
      'accountIsInactive' => 'Hesap Inaktif',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' => 
    array (
      'opportunities' => 'Fırsatlar',
      'cases' => 'Dosyalar',
      'targetLists' => 'Hedef Listeler',
      'campaignLogRecords' => 'Kampanya Günlüğü',
      'campaign' => 'Kampanya',
      'account' => 'Hesap (Birincil)',
      'accounts' => 'Hesaplar',
      'casesPrimary' => 'Dosyalar (Birincil)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portal Kullanıcı',
      'originalLead' => 'Orijinal Müşteri Potansiyeli',
      'documents' => 'Belgeler',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Bağlantı Oluştur',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => 'Yok',
        'Decision Maker' => 'Karar verici',
        'Evaluator' => 'Değerlendirici',
        'Influencer' => 'Etki Eden',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Portal Kullanıcıları',
      'notPortalUsers' => 'Portal Kullanıcıları Değildir',
      'accountActive' => 'Aktif',
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
      'Create Document' => 'Belge Oluştur',
      'Details' => 'Detaylar',
    ),
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum ',
      'file' => 'Dosya',
      'type' => 'tip ',
      'publishDate' => 'Yayım tarihi:',
      'expirationDate' => 'Bitiş Tarihi ',
      'description' => 'Tanım ',
      'accounts' => 'Hesaplar',
      'folder' => 'Klasör',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Hesaplar',
      'opportunities' => 'Fırsatlar',
      'folder' => 'Klasör',
      'leads' => 'Müşteri Potansiyelleri',
      'contacts' => 'Rehber',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktif ',
        'Draft' => 'Taslak',
        'Expired' => 'Süresi Dolan ',
        'Canceled' => 'İptal edildi',
      ),
      'type' => 
      array (
        '' => 'Yok',
        'Contract' => 'Kontrat',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Lisans Anlaşması',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif ',
      'draft' => 'Taslak ',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Belge Klasörü Oluştur',
      'Manage Categories' => 'Klasörleri Yönet',
      'Documents' => 'Belgeler',
    ),
    'links' => 
    array (
      'documents' => 'Belgeler',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum ',
      'target' => 'Hedef',
      'sentAt' => 'Gönderilen Tarih',
      'attemptCount' => 'Girişimler',
      'emailAddress' => 'Email Adres ',
      'massEmail' => 'Toplu E-posta',
      'isTest' => 'Test mi',
    ),
    'links' => 
    array (
      'target' => 'Hedef',
      'massEmail' => 'Toplu E-posta',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Bekliyor',
        'Sent' => 'gönderildi',
        'Failed' => 'Hata',
        'Sending' => 'Gönderme',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Bekliyor',
      'sent' => 'gönderildi',
      'failed' => 'Hata',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Makale Oluştur',
      'Any' => 'herhangi',
      'Send in Email' => 'E-posta ile gönder',
      'Move Up' => 'Yukarı Taşı',
      'Move Down' => 'Aşağı',
      'Move to Top' => 'En Üste Taşı',
      'Move to Bottom' => 'En Alta Taşı',
    ),
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum ',
      'type' => 'tip ',
      'attachments' => 'Eklentiler',
      'publishDate' => 'Yayım tarihi:',
      'expirationDate' => 'Bitiş Tarihi ',
      'description' => 'Açıklama',
      'body' => 'Gövde',
      'categories' => 'Kategoriler  ',
      'language' => 'Dil ',
      'portals' => 'Portallar',
    ),
    'links' => 
    array (
      'cases' => 'Dosyalar',
      'opportunities' => 'Fırsatlar',
      'categories' => 'Kategoriler  ',
      'portals' => 'Portallar',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'İncelemede',
        'Draft' => 'Taslak',
        'Archived' => 'Arşivlenmiş',
        'Published' => 'Yayınlanan',
      ),
      'type' => 
      array (
        'Article' => 'Makale',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Bu makale sadece belli portallar için geçerli olacaktır.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Yayınlanan',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Kategori oluştur',
      'Manage Categories' => 'Kategorileri Yönet ',
      'Articles' => 'Makaleler',
    ),
    'links' => 
    array (
      'articles' => 'Makaleler',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Çevrildi',
      'Create Lead' => 'Müşteri Adayı Oluştur',
      'Convert' => 'Çevir',
      'convert' => 'Çevir',
    ),
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Website',
      'phoneNumber' => 'Telefon ',
      'accountName' => 'Hesap Adı',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'status' => 'Durum',
      'source' => 'Kaynak',
      'opportunityAmount' => 'Fırsat Tutarı',
      'opportunityAmountConverted' => 'Fırsat Tutarı (dönüştürülmüş)',
      'description' => 'Açıklama',
      'createdAccount' => 'Hesap',
      'createdContact' => 'Bağlantı',
      'createdOpportunity' => 'Fırsat',
      'campaign' => 'Kampanya',
      'targetLists' => 'Hedef Listeler',
      'targetList' => 'Hedef Liste',
      'industry' => 'Endüstri',
      'acceptanceStatus' => 'Kabul Durumu',
      'opportunityAmountCurrency' => 'Fırsat Döviz Tutarı',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Hedef Listeler',
      'campaignLogRecords' => 'Kampanya Günlüğü',
      'campaign' => 'Kampanya',
      'createdAccount' => 'Hesap',
      'createdContact' => 'Kişi',
      'createdOpportunity' => 'Fırsat',
      'cases' => 'Dosyalar',
      'documents' => 'Belgeler',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'In Process' => 'İşlemde',
        'Converted' => 'Çevrildi',
        'Recycled' => 'Geri Dönüştürüldü',
        'Dead' => 'Ölü',
      ),
      'source' => 
      array (
        '' => 'Hiçbiri ',
        'Call' => 'Arama',
        'Email' => 'Eposta',
        'Existing Customer' => 'Varolan Müşteri',
        'Partner' => 'Ortak',
        'Public Relations' => 'Halkla İlişkiler',
        'Web Site' => 'Web Site',
        'Campaign' => 'Kampanya',
        'Other' => 'Diğer',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif ',
      'actual' => 'Gerçek',
      'converted' => 'Dönüştürülmüş',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum ',
      'storeSentEmails' => 'Gönderilen E-postaları Sakla',
      'startAt' => 'Başlangıç ​​Tarihi',
      'fromAddress' => 'Gönderen Adresi',
      'fromName' => 'İsimden',
      'replyToAddress' => 'Yanıtlama Adresiniz',
      'replyToName' => 'Yanıtla İsim',
      'campaign' => 'Kampanya',
      'emailTemplate' => 'E-posta Şablonu',
      'inboundEmail' => 'E-posta hesabı',
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hariç Tutulan Hedef Listeleri',
      'optOutEntirely' => 'Tamamından Vazgeç',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Hedef Listeler',
      'excludingTargetLists' => 'Hariç Tutulan Hedef Listeleri',
      'queueItems' => 'Sıra Öğeleri',
      'campaign' => 'Kampanya',
      'emailTemplate' => 'E-posta Şablonu',
      'inboundEmail' => 'E-posta hesabı',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Taslak',
        'Pending' => 'kadar',
        'In Process' => 'Süreç İçinde',
        'Complete' => 'Tamamlandı',
        'Canceled' => 'İptal edildi',
        'Failed' => 'Başarısız',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Toplu E-posta Oluştur',
      'Send Test' => 'Test Gönder',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'En az bir hedef seçin.',
      'testSent' => 'Gönderilmesi beklenen e-posta (lar) testi',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Aboneliğini kaldıran alıcıların e-posta adresleri devre dışı bırakılmış olarak işaretlenecek ve artık toplu e-postalar almazlar.',
      'targetLists' => 'Mesaj alması gereken hedefler.',
      'excludingTargetLists' => 'Mesaj almaması gereken hedefler.',
      'storeSentEmails' => 'Emails will be stored in CRM.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Gerçek',
      'complete' => 'Tamamlandı',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'duration' => 'Süre',
      'description' => 'Açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Bağlantılar',
      'leads' => 'Müşteri Potansiyelleri',
      'reminders' => 'Hatırlatıcılar',
      'account' => 'Hesap',
      'acceptanceStatus' => 'Kabul Durumu',
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
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Yok',
        'Accepted' => 'Kabul edilmiş',
        'Declined' => 'Red Edilmiş',
        'Tentative' => 'Geçici',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Düzenlendi',
      'setNotHeld' => 'Düzenlenmedi olarak ayarla',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Toplantı Oluştur ',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetleri Gönder',
      'on time' => 'Zamanında',
      'before' => 'Önce',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planlandı',
      'held' => 'Düzenlenen',
      'todays' => 'Bugünün',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Hiçbir şey gönderilmedi',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'account' => 'Hesap',
      'stage' => 'Aşama',
      'amount' => 'Tutar',
      'probability' => 'Olasılık, %',
      'leadSource' => 'Müşteri Potansiyeli Kaynağı',
      'doNotCall' => 'Arama Yapma',
      'closeDate' => 'Kapanış Tarii',
      'contacts' => 'Kişiler',
      'description' => 'Açıklama',
      'amountConverted' => 'Tutar (dönüştürülen)',
      'amountWeightedConverted' => 'Ağırlıklı Tutar',
      'campaign' => 'Kampanya',
      'originalLead' => 'Orijinal Müşteri Potansiyeli',
      'amountCurrency' => 'Döviz Tutarı',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Bağlantılar',
      'documents' => 'Belgeler',
      'campaign' => 'Kampanya',
      'originalLead' => 'Orijinal Müşteri Potansiyeli',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Araştırma',
        'Qualification' => 'Yeterlilik',
        'Proposal' => 'Proposal',
        'Negotiation' => 'Görüşme',
        'Needs Analysis' => 'Analiz Yapılmalı',
        'Value Proposition' => 'Değer Önerisi',
        'Id. Decision Makers' => 'Id. Karar Vericiler',
        'Perception Analysis' => 'Algı Analizi',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Görüşme/İnceleme',
        'Closed Won' => 'Kapalı Kazanç',
        'Closed Lost' => 'Kapalı Kayıp',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Fırsat Oluştur',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aç ',
      'won' => 'Kazanıldı',
      'lost' => 'Kayıp Edildi',
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
      'name' => 'İsim',
      'description' => 'Açıklama',
      'entryCount' => 'Giriş sayısı',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Kampanyalar',
      'endDate' => 'Bitiş tarihi',
      'targetLists' => 'Hedef Listeler',
      'includingActionList' => 'Dahil',
      'excludingActionList' => 'Dışlanıyor...',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Hesaplar',
      'contacts' => 'Kişiler ',
      'leads' => 'Müşteri Potansiyelleri',
      'campaigns' => 'Kampanyalar',
      'massEmails' => 'Toplu E-postalar',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-posta   ',
        'Web' => 'Web',
        'Television' => 'Televizyon!',
        'Radio' => 'radyo',
        'Newsletter' => 'Newsletter (Bülten)',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Hedef Liste Yarat',
      'Opted Out' => 'Devre dışı bırakıldı',
      'Cancel Opt-Out' => 'Devre dışı bırakmayı İptal Et',
      'Opt-Out' => 'Devre Dışı',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Vade Tarihi',
      'dateStartDate' => 'Tarih Başlangıcı (bütün gün)',
      'dateEndDate' => 'Bitiş Tarihi (bütün gün)',
      'priority' => 'Öncelik',
      'description' => 'Açıklama',
      'isOverdue' => 'Vadesi Geçmiş',
      'account' => 'Hesap',
      'dateCompleted' => 'Tamamlanma Tarihi',
      'attachments' => 'Ekler',
      'reminders' => 'Hatırlatıcılar',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Eklentiler',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'başlamadı',
        'Started' => 'Başladı',
        'Completed' => 'Tamamlandı',
        'Canceled' => 'İptal edildi',
        'Deferred' => 'Vadeli',
      ),
      'priority' => 
      array (
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Görev Oluştur',
      'Complete' => 'Tamamla',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Gerçek',
      'completed' => 'Tamamlandı',
      'deferred' => 'Vadeli',
      'todays' => 'Bugünün',
      'overdue' => 'süresi geçmiş',
    ),
  ),
  'Formularios' => 
  array (
    'fields' => 
    array (
      'address' => 'Adres ',
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
      'meetings' => 'Toplantılar',
      'calls' => '(Seslenme)',
      'tasks' => 'Görevler',
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
      'Create Formularios' => 'Formulario oluştur',
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
  'Prospect' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Website',
      'accountName' => 'Hesap Adı',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'description' => 'açıklama',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Prospect' => 'Beklenti Oluştur',
      'Convert to Lead' => 'Müşteri Adayına Dönüştür',
    ),
  ),
);
?>