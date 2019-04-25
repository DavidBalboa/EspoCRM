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
      'Enabled' => 'Diaktifkan',
      'Disabled' => 'Dinonaktifkan',
      'System' => 'Sistem',
      'Users' => 'pengguna',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Sesuaikan',
      'Available Fields' => 'Kolom yang tersedia',
      'Layout' => 'Layout',
      'Entity Manager' => 'Manajer',
      'Add Panel' => 'Tambah panel',
      'Add Field' => 'Tambah Kolom Baru',
      'Settings' => 'pengaturan',
      'Scheduled Jobs' => 'Pekerjaan yang dijadwalkan',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Hapus Cache',
      'Rebuild' => 'Rebuild',
      'Teams' => 'Tim',
      'Roles' => 'Role',
      'Portal' => 'Portal',
      'Portals' => 'portal',
      'Portal Roles' => 'Portal Role',
      'Portal Users' => 'Portal Users',
      'Outbound Emails' => 'Email keluar',
      'Group Email Accounts' => 'Akun Grup Email',
      'Personal Email Accounts' => 'Akun Email Pribadi',
      'Inbound Emails' => 'Email masuk',
      'Email Templates' => 'Template email',
      'Import' => 'Impor',
      'Layout Manager' => 'Layout Manajer',
      'User Interface' => 'Antar pengguna',
      'Auth Tokens' => 'Token Otorisasi',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'pengaturan otentikasi.',
      'Currency' => 'Mata uang',
      'Integrations' => 'integrasi',
      'Extensions' => 'ekstensi',
      'Upload' => 'Upload',
      'Installing...' => 'Installing ...',
      'Upgrading...' => 'Upgrading...',
      'Upgraded successfully' => 'upgrade berhasil',
      'Installed successfully' => 'Instalasi berhasil',
      'Ready for upgrade' => 'Siap untuk upgrade',
      'Run Upgrade' => 'Jalankan upgrade',
      'Install' => 'Instal',
      'Ready for installation' => 'Siap untuk instalasi',
      'Uninstalling...' => 'Memproses Uninstall',
      'Uninstalled' => 'Dihapus',
      'Create Entity' => 'Buat Entity',
      'Edit Entity' => 'Edit Entity',
      'Create Link' => 'Buat Tautan',
      'Edit Link' => 'Edit Tautan',
      'Notifications' => 'Pemberitahuan',
      'Jobs' => 'Pekerjaan',
      'Reset to Default' => 'Reset ke Default',
      'Email Filters' => 'Filter email',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Daftar',
      'detail' => 'Detail',
      'listSmall' => 'Daftar (Kecil)',
      'detailSmall' => 'Detail (Kecil)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Filter Pencarian',
      'massUpdate' => 'Update Massal',
      'relationships' => 'Hubungan',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'mengkonversi Timbal',
      'listForAccount' => 'Daftar (untuk Account)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Alamat',
      'array' => 'susunan',
      'foreign' => 'Asing',
      'duration' => 'Durasi',
      'password' => 'Kata sandi',
      'personName' => 'Person Name',
      'autoincrement' => 'Kenaikan Otomatis',
      'bool' => 'Boolean (sistem notasi aljabar)',
      'currency' => 'Mata uang',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Tanggal',
      'datetime' => 'Tanggal Waktu',
      'datetimeOptional' => 'Tanggal / DateTime',
      'email' => 'Email',
      'enum' => 'enum',
      'enumInt' => 'enum Integer',
      'enumFloat' => 'enum Float',
      'float' => 'Float',
      'int' => 'int',
      'link' => 'Tautan',
      'linkMultiple' => 'Beberapa Tautan',
      'linkParent' => 'Tautan Asal',
      'phone' => 'Telepon',
      'text' => 'Teks',
      'url' => 'url',
      'varchar' => 'varchar',
      'file' => 'Berkas',
      'image' => 'Gambar',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Beberapa lampiran',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Kisaran Mata Uang',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Peta',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'parsonName' => 'Nama orang',
      'multienim' => 'Multienum',
    ),
    'fields' => 
    array (
      'type' => 'Tipe',
      'name' => 'Nama',
      'label' => 'Label',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Wajib',
      'default' => 'Default',
      'maxLength' => 'Panjang maksimal',
      'options' => 'Pilihan',
      'after' => 'Setelah (kolom)',
      'before' => 'Sebelum (kolom)',
      'link' => 'Tautan',
      'field' => 'Kolom',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Terjemahan',
      'previewSize' => 'Preview Ukuran',
      'noEmptyString' => 'Tidak ada String kosong',
      'defaultType' => 'Default Jenis',
      'seeMoreDisabled' => 'Nonaktifkan Cut Teks',
      'entityList' => 'Daftar entitas',
      'isSorted' => 'Apakah Diurut (berdasarkan abjad)',
      'audited' => 'Diaudit',
      'trim' => 'Memangkas',
      'height' => 'Tinggi (px)',
      'minHeight' => 'Min Tinggi (px)',
      'provider' => 'Pemberi',
      'typeList' => 'Jenis Daftar',
      'rows' => 'Jumlah baris textarea',
      'lengthOfCut' => 'Panjang dipotong',
      'sourceList' => 'Daftar Sumber',
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
      'upgradeVersion' => 'EspoCRM Anda akan ditingkatkan ke versi <strong> {version} </ strong>. Hal ini dapat memakan waktu.',
      'upgradeDone' => 'EspoCRM Anda telah ditingkatkan ke versi <strong> {version} </ strong>.',
      'upgradeBackup' => 'Kami menyarankan untuk membuat cadangan berkas dan data EspoCRM Anda sebelum upgrade.',
      'thousandSeparatorEqualsDecimalMark' => 'Pemisah ribuan, tidak bisa sama dengan tanda desimal',
      'userHasNoEmailAddress' => 'Pengguna tidak punya alamat email.',
      'selectEntityType' => 'Pilih jenis entitas di menu sebelah kiri.',
      'selectUpgradePackage' => 'Pilih paket upgrade',
      'downloadUpgradePackage' => 'Ambil paket upgrade (s) <a href="{url}"> sini </a>.',
      'selectLayout' => 'Pilih layout yang dibutuhkan dalam menu kiri dan mengeditnya.',
      'selectExtensionPackage' => 'Pilih paket ekstensi',
      'extensionInstalled' => 'Ekstensi {name} {version} telah diinstal.',
      'installExtension' => 'Ekstensi {name} {version} siap untuk instalasi.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Apakah Anda benar-benar ingin menghapus ekstensi?',
    ),
    'descriptions' => 
    array (
      'settings' => 'pengaturan sistem aplikasi.',
      'scheduledJob' => 'Pekerjaan yang dilaksanakan oleh cron.',
      'upgrade' => 'Upgrade EspoCRM.',
      'clearCache' => 'Menghapus semua backend cache.',
      'rebuild' => 'Membangun kembali backend dan clear cache.',
      'users' => 'manajemen pengguna.',
      'teams' => 'manajemen tim.',
      'roles' => 'manajemen peran.',
      'portals' => 'manajemen portal.',
      'portalRoles' => 'Peran untuk portal.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'pengaturan SMTP untuk email keluar.',
      'groupEmailAccounts' => 'Kelompok IMAP akun email IMAP. Email impor dan email-to-Case.',
      'personalEmailAccounts' => 'Pengguna akun email.',
      'emailTemplates' => 'Template untuk email outbound.',
      'import' => 'Impor data dari file CSV.',
      'layoutManager' => 'Sesuaikan layout (daftar, detail, mengedit, pencarian, update massal).',
      'entityManager' => 'Menciptakan entitas kustom, mengedit yang sudah ada. Mengelola lapangan dan hubungan.',
      'userInterface' => 'Konfigurasi UI.',
      'authTokens' => 'sesi otomatis aktif. alamat IP dan tanggal akses terakhir.',
      'authentication' => 'pengaturan otentikasi.',
      'currency' => 'pengaturan mata uang dan rate.',
      'extensions' => 'Menginstal atau menghapus ekstensi.',
      'integrations' => 'Integrasi dengan layanan pihak ketiga.',
      'notifications' => 'Dalam aplikasi dan pengaturan pemberitahuan email.',
      'inboundEmails' => 'Pengaturan untuk email masuk.',
      'emailFilters' => 'Email pesan yang cocok dengan filter tertentu tidak akan diimpor.',
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
        'x-small' => 'X-Kecil',
        'small' => 'Kecil',
        'medium' => 'Medium',
        'large' => 'Besar',
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
      'Document' => 'Insert Dokumen',
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
      'user' => 'pengguna',
      'ipAddress' => 'Alamat IP',
      'lastAccess' => 'Akses terakhir Tanggal',
      'createdAt' => 'Tanggal Login',
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
      'title' => 'Judul',
      'dateFrom' => 'Tanggal Dari',
      'dateTo' => 'Tanggal Untuk',
      'autorefreshInterval' => 'Auto-refresh Interval',
      'displayRecords' => 'tampilan Rekaman',
      'isDoubleHeight' => '2x tinggi',
      'mode' => 'Mode',
      'enabledScopeList' => 'Apa yang akan ditampilkan',
      'users' => 'pengguna',
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
        'agendaWeek' => 'Minggu (agenda)',
        'basicWeek' => 'Minggu',
        'month' => 'Bulan',
        'basicDay' => 'Hari',
        'agendaDay' => 'Hari (agenda)',
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
      'name' => 'Nama',
      'parent' => 'Induk',
      'status' => 'Status',
      'dateSent' => 'Tanggal Dikirim',
      'from' => 'Dari',
      'to' => 'Untuk',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Membalas ke',
      'replyToString' => 'Balas Untuk (String)',
      'isHtml' => 'Apakah Html',
      'body' => 'Isi',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Subyek',
      'attachments' => 'lampiran',
      'selectTemplate' => 'Pilih Template',
      'fromEmailAddress' => 'dari Alamat',
      'toEmailAddresses' => 'Alamat Tujuan',
      'emailAddress' => 'Alamat email',
      'deliveryDate' => 'Tanggal pengiriman',
      'account' => 'Akun',
      'users' => 'pengguna',
      'replied' => 'membalas',
      'replies' => 'balasan',
      'isRead' => 'Sudah terbaca',
      'isNotRead' => 'Belum dibaca',
      'isImportant' => 'Penting',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Apakah Pengguna',
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
      'replied' => 'membalas',
      'replies' => 'balasan',
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
        'Draft' => 'Konsep',
        'Sending' => 'mengirim',
        'Sent' => 'Terkirim',
        'Archived' => 'diarsipkan',
        'Received' => 'menerima',
        'Failed' => 'Gagal',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Arsip Email',
      'Archive Email' => 'Arsip Email',
      'Compose' => 'Menyusun',
      'Reply' => 'Balasan',
      'Reply to All' => 'Balas ke semua',
      'Forward' => 'Meneruskan',
      'Original message' => 'Pesan asli',
      'Forwarded message' => 'pesan diteruskan',
      'Email Accounts' => 'Akun Email Pribadi',
      'Inbound Emails' => 'Akun Group Email',
      'Email Templates' => 'Template email',
      'Send Test Email' => 'Tes Kirim Email',
      'Send' => 'Kirim',
      'Email Address' => 'Alamat email',
      'Mark Read' => 'Tandai Terbaca',
      'Sending...' => 'Mengirim ...',
      'Save Draft' => 'Simpan konsep',
      'Mark all as read' => 'tandai semua telah dibaca',
      'Show Plain Text' => 'Tampilkan Plain Text',
      'Mark as Important' => 'Tandai sebagai Penting',
      'Unmark Importance' => 'Hapus tanda Pentingnya',
      'Move to Trash' => 'Pindah ke Trash',
      'Retrieve from Trash' => 'Mengambil dari Trash',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'Create Lead' => 'Create Lead',
      'Create Contact' => 'Buat kontak',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Buat tugas',
      'Create Case' => 'Buat Case',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Tidak ada SMTP setup. {link}.',
      'testEmailSent' => 'tes email telah dikirim',
      'emailSent' => 'Email telah dikirim',
      'savedAsDraft' => 'Disimpan sebagai konsep',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'mengirim',
      'archived' => 'diarsipkan',
      'inbox' => 'Inbox',
      'drafts' => 'draft',
      'trash' => 'Trash',
      'important' => 'Important',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Tandai sebagai terbaca',
      'markAsNotRead' => 'Tandai sebagai Tidak dibaca',
      'markAsImportant' => 'Tandai sebagai Penting',
      'markAsNotImportant' => 'Hapus tanda Pentingnya',
      'moveToTrash' => 'Pindah ke Trash',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Nama pengguna',
      'password' => 'Kata sandi',
      'port' => 'Port',
      'monitoredFolders' => 'Folder yang dipantau',
      'ssl' => 'SSL',
      'fetchSince' => 'Ambil Sejak',
      'emailAddress' => 'Alamat email',
      'sentFolder' => 'Folder terkirim',
      'storeSentEmails' => 'Simpan email terkirim',
      'keepFetchedEmailsUnread' => 'Fetched email tetap sebagai belum dibaca',
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
      'filters' => 'filter',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'non-aktif',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Buat Akun Email',
      'IMAP' => 'IMAP',
      'Main' => 'Utama',
      'Test Connection' => 'Tes koneksi',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'tidak bisa terhubung ke server IMAP',
      'connectionIsOk' => 'Koneksi Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Anda dapat menambahkan folder \'Sent\' untuk menyinkronkan email yang dikirim dari klien email eksternal.',
      'storeSentEmails' => 'email yang dikirim akan disimpan di server IMAP. Alamat email harus banyak alamat email ini sedang dikirim dari.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Utama',
      'Opted Out' => 'Memilih keluar',
      'Invalid' => 'Invalid',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Dari',
      'to' => 'Untuk',
      'subject' => 'Subyek',
      'bodyContains' => 'Isi ',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Buat Email Filter',
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
      'name' => 'Hanya nama filter.',
      'subject' => 'Gunakan wildcard *:

teks * - dimulai dengan teks,
* Text * - berisi teks,
* Text - berakhir dengan teks.',
      'bodyContains' => 'Tubuh email mengandung salah satu dari kata-kata atau frasa tertentu.',
      'from' => 'Email yang dikirim dari alamat yang ditentukan. Biarkan kosong jika tidak diperlukan. Anda dapat menggunakan wildcard *.',
      'to' => 'Email yang dikirim ke alamat yang ditentukan. Biarkan kosong jika tidak diperlukan. Anda dapat menggunakan wildcard *.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.',
      'parent' => 'Biarkan kosong untuk menerapkan filter ini secara global (untuk semua email yang masuk).',
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
      'name' => 'Nama',
      'status' => 'Status',
      'isHtml' => 'Apakah Html',
      'body' => 'Isi',
      'subject' => 'Subyek',
      'attachments' => 'lampiran',
      'insertField' => 'Insert kolom',
      'oneOff' => 'Satu-off',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Buat Template Email',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'variabel yang tersedia:

{OptOutUrl} & # 8211; URL untuk link unsubsbribe};

{OptOutLink} & # 8211; link unsubscribe.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Periksa apakah Anda akan menggunakan template ini hanya sekali. Misalnya. untuk Mass Email.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Aktual',
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
      'Fields' => 'kolom',
      'Relationships' => 'Hubungan',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Nama',
      'type' => 'Tipe',
      'labelSingular' => 'label Singular',
      'labelPlural' => 'label Plural',
      'stream' => 'Stream',
      'label' => 'Label',
      'linkType' => 'Jenis tautan',
      'entityForeign' => 'Entitas asing',
      'linkForeign' => 'Tautan Asing',
      'link' => 'tautan',
      'labelForeign' => 'Foreign label',
      'sortBy' => 'Deafault Order (lapangan)',
      'sortDirection' => 'Default Order (direction)',
      'relationName' => 'Tabel Nama Tengah',
      'linkMultipleField' => 'Link Beberapa Kolom',
      'linkMultipleFieldForeign' => 'Tautan asing Beberapa Kolom',
      'disabled' => 'Dinonaktifkan',
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
        'Base' => 'Dasar',
        'Person' => 'Orang',
        'CategoryTree' => 'Category Tree',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Banyak-ke-banyak',
        'oneToMany' => 'Satu ke Banyak',
        'manyToOne' => 'Banyak ke Satu',
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
      'entityCreated' => 'Entitas telah dibuat',
      'linkAlreadyExists' => 'Menghubungkan konflik nama.',
      'linkConflict' => 'Nama konflik: link atau kolom dengan nama yang sama sudah ada.',
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
      'name' => 'Nama',
      'version' => 'Versi',
      'description' => 'Deskripsi',
      'isInstalled' => 'Terpasang',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Uninstall',
      'Install' => 'Memasang',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Ekstensi {name} telah dihapus',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Menghubungkan',
      'Connected' => 'terhubung',
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
      'User' => 'pengguna',
      'Team' => 'Tim',
      'Role' => 'Peran',
      'EmailTemplate' => 'Template email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Akun Email Pribadi',
      'EmailAccountScope' => 'Akun Email Pribadi',
      'OutboundEmail' => 'Email keluar',
      'ScheduledJob' => 'Pekerjaan yang dijadwalkan',
      'ExternalAccount' => 'Akun eksternal',
      'Extension' => 'Ekstensiun',
      'Dashboard' => 'Dasbor',
      'InboundEmail' => 'Akun Email kelompok',
      'Stream' => 'Aliran',
      'Import' => 'Impor',
      'Template' => 'Template',
      'Job' => 'Pekerjaan',
      'EmailFilter' => 'email Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Peran Portal',
      'Attachment' => 'Lampiran',
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
      'Account' => 'Rekening',
      'Contact' => 'Kontak',
      'Lead' => 'Memimpin',
      'Target' => 'Target',
      'Opportunity' => 'Kesempatan',
      'Meeting' => 'Rapat',
      'Calendar' => 'Kalender',
      'Call' => 'Panggilan',
      'Task' => 'Tugas',
      'Case' => 'Kasus',
      'Document' => 'Dokumen',
      'DocumentFolder' => 'dokumen Folder',
      'Campaign' => 'Kampanye',
      'TargetList' => 'Target Daftar',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Barang',
      'CampaignTrackingUrl' => 'URL pelacakan',
      'Activities' => 'Kegiatan',
      'KnowledgeBaseArticle' => 'Pengetahuan Dasar Kasus',
      'KnowledgeBaseCategory' => 'Kategori Basis Pengetahuan',
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
      'Email' => 'e-mail',
      'User' => 'pengguna',
      'Team' => 'tim',
      'Role' => 'peran',
      'EmailTemplate' => 'Template email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Akun Email Pribadi',
      'EmailAccountScope' => 'Akun Email Pribadi',
      'OutboundEmail' => 'Email Keluar',
      'ScheduledJob' => 'Pekerjaan Terjadwal',
      'ExternalAccount' => 'Akun eksternal',
      'Extension' => 'ekstensi',
      'Dashboard' => 'Dasbor',
      'InboundEmail' => 'Akun Group Email',
      'Stream' => 'Aliran',
      'Import' => 'impor Hasil',
      'Template' => 'template',
      'Job' => 'Pekerjaan',
      'EmailFilter' => 'Filter email',
      'Portal' => 'portal',
      'PortalRole' => 'Peran Portal',
      'Attachment' => 'lampiran',
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
      'Account' => 'Akun',
      'Contact' => 'kontak',
      'Lead' => 'memimpin',
      'Target' => 'target',
      'Opportunity' => 'peluang',
      'Meeting' => 'rapat',
      'Calendar' => 'Kalender',
      'Call' => 'panggilan',
      'Task' => 'tugas',
      'Case' => 'kasus',
      'Document' => 'dokumen',
      'DocumentFolder' => 'dokumen Folder',
      'Campaign' => 'kampanye',
      'TargetList' => 'Daftar Target',
      'MassEmail' => 'Email massal',
      'EmailQueueItem' => 'Email Antrian Item',
      'CampaignTrackingUrl' => 'pelacakan URL',
      'Activities' => 'Kegiatan',
      'KnowledgeBaseArticle' => 'Dasar pengetahuan',
      'KnowledgeBaseCategory' => 'Kategori Basis Pengetahuan',
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
      'Merge' => 'Gabung',
      'None' => 'None',
      'Home' => 'Beranda',
      'by' => 'oleh',
      'Saved' => 'disimpan',
      'Error' => 'Error',
      'Select' => 'Pilih',
      'Not valid' => 'Tidak valid',
      'Please wait...' => 'Mohon tunggu...',
      'Please wait' => 'Mohon tunggu',
      'Loading...' => 'Loading...',
      'Uploading...' => 'Mengunggah ...',
      'Sending...' => 'Mengirim ...',
      'Merging...' => 'Mengabungkan...',
      'Merged' => 'Digabungkan',
      'Removed' => 'dihapus',
      'Posted' => 'diposting',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Done' => 'Selesai',
      'Access denied' => 'Akses ditolak',
      'Not found' => 'Tidak ditemukan',
      'Access' => 'Mengakses',
      'Are you sure?' => 'Apakah Anda yakin?',
      'Record has been removed' => 'Record telah dihapus',
      'Wrong username/password' => 'Kesalahan nama pengguna / kata sandi',
      'Post cannot be empty' => 'Posting tidak boleh kosong',
      'Removing...' => 'Menghapus ...',
      'Unlinking...' => 'Unlinking...',
      'Posting...' => 'Posting ...',
      'Username can not be empty!' => 'Nama pengguna tidak boleh kosong!',
      'Cache is not enabled' => 'Cache tidak diaktifkan',
      'Cache has been cleared' => 'Cache telah dibersihkan',
      'Rebuild has been done' => 'Rebuild has been done',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Simpan...',
      'Modified' => 'Diubah',
      'Created' => 'dibuat',
      'Create' => 'Membuat',
      'create' => 'membuat',
      'Overview' => 'Overview',
      'Details' => 'Detail',
      'Add Field' => 'Tambahkan kolom',
      'Add Dashlet' => 'Tambahkan Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'mengedit Dashboard',
      'Add' => 'Menambahkan',
      'Add Item' => 'Add Item',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'More',
      'Search' => 'Pencarian',
      'Only My' => 'Only My',
      'Open' => 'Buka',
      'Admin' => 'Admin',
      'About' => 'Tentang',
      'Refresh' => 'Refresh',
      'Remove' => 'Remove',
      'Options' => 'Pilihan',
      'Username' => 'Nama pengguna',
      'Password' => 'Kata sandi',
      'Login' => 'Masuk',
      'Log Out' => 'Keluar',
      'Preferences' => 'Pilihan',
      'State' => 'State',
      'Street' => 'jalan',
      'Country' => 'Negara',
      'City' => 'Kota',
      'PostalCode' => 'Kode Pos',
      'Followed' => 'Diikuti',
      'Follow' => 'Mengikuti',
      'Followers' => 'pengikut',
      'Clear Local Cache' => 'Hapus Cache lokal',
      'Actions' => 'Actions',
      'Delete' => 'Menghapus',
      'Update' => 'Memperbarui',
      'Save' => 'Simpan',
      'Edit' => 'mengedit',
      'View' => 'Lihat',
      'Cancel' => 'Batalkan',
      'Apply' => 'Apply',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Update Massal',
      'Export' => 'Ekspor',
      'No Data' => 'Tidak ada data',
      'No Access' => 'Tidak ada akses',
      'All' => 'Semua',
      'Active' => 'Aktif',
      'Inactive' => 'non-aktif',
      'Write your comment here' => 'Tulis komentar Anda di sini',
      'Post' => 'Post',
      'Stream' => 'Aliran',
      'Show more' => 'Menampilkan lebih banyak',
      'Dashlet Options' => 'Dashlet Options',
      'Full Form' => 'Form lengkap',
      'Insert' => 'Memasukkan',
      'Person' => 'Orang',
      'First Name' => 'Nama depan',
      'Last Name' => 'Nama keluarga',
      'Original' => 'Original',
      'You' => 'Anda',
      'you' => 'Anda',
      'change' => 'ubah',
      'Change' => 'Ubah',
      'Primary' => 'Primary',
      'Save Filter' => 'Simpan Filter',
      'Administration' => 'Administrasi',
      'Run Import' => 'Run Impor',
      'Duplicate' => 'Duplikasikan',
      'Notifications' => 'pemberitahuan',
      'Mark all read' => 'Tandai semua baca',
      'See more' => 'Lihat lebih',
      'Today' => 'Hari ini',
      'Tomorrow' => 'Besok',
      'Yesterday' => 'Kemarin',
      'Submit' => 'Submit',
      'Close' => 'Tutup',
      'Yes' => 'Ya',
      'No' => 'Tidak',
      'Select All Results' => 'Pilih Semua Hasil',
      'Value' => 'Nilai',
      'Current version' => 'Versi sekarang',
      'List View' => 'Daftar View',
      'Tree View' => 'tree View',
      'Unlink All' => 'Unlink semua',
      'Total' => 'Total',
      'Print to PDF' => 'Cetak ke PDF',
      'Default' => 'Default',
      'Number' => 'Number',
      'From' => 'Dari',
      'To' => 'Untuk',
      'Create Post' => 'Buat Post',
      'Previous Entry' => 'Previous Entry',
      'Next Entry' => 'Next Entry',
      'View List' => 'Lihat Daftar',
      'Attach File' => 'Lampirkan file',
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
      'Create InboundEmail' => 'Buat Inbound Email',
      'Activities' => 'Kegiatan',
      'History' => 'Sejarah',
      'Attendees' => 'peserta',
      'Schedule Meeting' => 'Jadwal Rapat',
      'Schedule Call' => 'Jadwal Panggilan',
      'Compose Email' => 'Menulis email',
      'Log Meeting' => 'Rapat log',
      'Log Call' => 'call log',
      'Archive Email' => 'Arsip Email',
      'Create Task' => 'Buat tugas',
      'Tasks' => 'tugas',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Mohon tunggu...',
      'posting' => 'Posting ...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Apakah Anda yakin ingin meninggalkan bentuk?',
      'notModified' => 'Anda belum mengubah catatan',
      'duplicate' => 'Catatan Anda membuat tampaknya menjadi duplikat',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} diperlukan',
      'fieldShouldBeEmail' => '{field} harus email yang valid',
      'fieldShouldBeFloat' => '{field} harus mengambang valid',
      'fieldShouldBeInt' => '{field} harus bilangan bulat yang valid',
      'fieldShouldBeDate' => '{field} harus tanggal yang valid',
      'fieldShouldBeDatetime' => '{field} harus tanggal yang valid / waktu',
      'fieldShouldAfter' => '{field} harus setelah {otherField}',
      'fieldShouldBefore' => '{field} harus sebelum {otherField}',
      'fieldShouldBeBetween' => '{field} harus antara {min} dan {max}',
      'fieldShouldBeLess' => '{field} harus kurang maka {value}',
      'fieldShouldBeGreater' => '{field} harus lebih besar maka {value}',
      'fieldBadPasswordConfirm' => '{field} tidak dikonfirmasi benar',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Preferensi telah diatur ulang ke default',
      'confirmation' => 'Apa kamu yakin?',
      'unlinkAllConfirmation' => 'Apakah Anda yakin ingin membatalkan tautan semua catatan terkait?',
      'resetPreferencesConfirmation' => 'Apakah Anda yakin ingin ulang preferensi ke default?',
      'removeRecordConfirmation' => 'Apakah Anda yakin ingin menghapus catatan?',
      'unlinkRecordConfirmation' => 'Apakah Anda yakin ingin membatalkan tautan catatan terkait?',
      'removeSelectedRecordsConfirmation' => 'Apakah Anda yakin ingin menghapus catatan yang dipilih?',
      'massUpdateResult' => '{count} catatan telah diperbarui',
      'massUpdateResultSingle' => '{count} record telah diperbarui',
      'noRecordsUpdated' => 'Tidak ada catatan yang diperbarui',
      'massRemoveResult' => '{count} catatan telah dihapus',
      'massRemoveResultSingle' => '{count} record telah dihapus',
      'noRecordsRemoved' => 'Tidak ada catatan yang dihapus',
      'clickToRefresh' => 'Klik untuk refresh',
      'streamPostInfo' => 'Ketik <strong> @nama pengguna </ strong> untuk menyebutkan pengguna di pos.

Sintaks yang tersedia:
`<Code> Kode </ code>`
** <Strong> teks yang kuat </ strong> **
* <Em> menekankan teks </ em> *
~ <Del> teks yang dihapus </ del> ~
> blockquote
[D](url)',
      'writeYourCommentHere' => 'Tulis komentar Anda di sini',
      'writeMessageToUser' => 'Tulis pesan ke {user}',
      'writeMessageToSelf' => 'Tulis pesan ke diri sendiri',
      'typeAndPressEnter' => 'Ketik & tekan enter',
      'checkForNewNotifications' => 'Periksa pemberitahuan baru',
      'checkForNewNotes' => 'Periksa entri Streaming baru',
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
      'onlyMy' => 'Only My',
      'followed' => 'Diikuti',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Diikuti',
      'all' => 'Semua',
    ),
    'massActions' => 
    array (
      'remove' => 'Menghapus',
      'merge' => 'Menggabungkan',
      'massUpdate' => 'Update Massal',
      'export' => 'Ekspor',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Nama',
      'firstName' => 'Nama depan',
      'lastName' => 'Nama keluarga',
      'salutationName' => 'Salam',
      'assignedUser' => 'Pengguna yang Ditugaskan',
      'assignedUsers' => 'Pengguna yang Ditugaskan',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Nama Pengguna Ditugaskan',
      'teams' => 'Tim',
      'createdAt' => 'Dibuat Pada',
      'modifiedAt' => 'Dimodifikasi Pada',
      'createdBy' => 'Dibuat oleh',
      'modifiedBy' => 'Dimodifikasi oleh',
      'description' => 'Deskripsi',
      'address' => 'Alamat',
      'phoneNumber' => 'Telepon',
      'phoneNumberMobile' => 'Telepon (Ponsel)',
      'phoneNumberHome' => 'Telepon (Rumah)',
      'phoneNumberFax' => 'Telepon (Fax)',
      'phoneNumberOffice' => 'Telepon (Kantor)',
      'phoneNumberOther' => 'Telepon (Lainnya)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Pesanan',
      'parent' => 'Induk',
      'children' => 'Turunan',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Kota',
      'billingAddressCountry' => 'Negara',
      'billingAddressPostalCode' => 'Kode Pos',
      'billingAddressState' => 'Negara',
      'billingAddressStreet' => 'jalan',
      'billingAddressMap' => 'Peta',
      'addressCity' => 'Kota',
      'addressStreet' => 'jalan',
      'addressCountry' => 'Negara',
      'addressState' => 'Negara',
      'addressPostalCode' => 'Kode Pos',
      'addressMap' => 'Peta',
      'shippingAddressCity' => 'Kota (Pengiriman)',
      'shippingAddressStreet' => 'Jalan (Pengiriman)',
      'shippingAddressCountry' => 'Negara (Pengiriman)',
      'shippingAddressState' => 'Negara (Pengiriman)',
      'shippingAddressPostalCode' => 'Kode Pos (Pengiriman)',
      'shippingAddressMap' => 'Peta (Pengiriman)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Pengguna yang Ditugaskan',
      'createdBy' => 'Dibuat Oleh',
      'modifiedBy' => 'Dimodifikasi Oleh',
      'team' => 'Tim',
      'roles' => 'Role',
      'teams' => 'Tim',
      'users' => 'Pengguna',
      'parent' => 'Induk',
      'children' => 'Turunan',
      'contacts' => 'kontak',
      'opportunities' => 'peluang',
      'leads' => 'memimpin',
      'meetings' => 'rapat',
      'calls' => 'panggilan',
      'tasks' => 'tugas',
      'emails' => 'email',
      'accounts' => 'Akun',
      'cases' => 'kasus',
      'documents' => 'dokumen',
      'account' => 'Rekening',
      'opportunity' => 'Kesempatan',
      'contact' => 'Kontak',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Emails' => 'My Inbox',
      'Records' => 'Record List',
      'Leads' => 'Memimpin saya',
      'Opportunities' => 'Peluang saya',
      'Tasks' => 'Tugas saya',
      'Cases' => 'Kasus saya',
      'Calendar' => 'Kalender',
      'Calls' => 'Panggilan saya',
      'Meetings' => 'Rapat saya',
      'OpportunitiesByStage' => 'Peluang oleh Tahap',
      'OpportunitiesByLeadSource' => 'Peluang oleh Lead Source',
      'SalesByMonth' => 'Penjualan Menurut Bulan',
      'SalesPipeline' => 'Pipeline penjualan',
      'Activities' => 'Aktivitas saya',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{EntityType} {entity} Telah ditugaskan pada Anda',
      'emailReceived' => 'Email diterima dari {dari}',
      'entityRemoved' => '{pengguna} dihapus {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{pengguna} diposting pada {entityType} {entity}',
      'attach' => '{pengguna} melekat pada {entityType} {entity}',
      'status' => '{pengguna} diperbarui {kolom} dari {entityType} {entity}',
      'update' => '{pengguna} diperbarui {entityType} {entity}',
      'postTargetTeam' => '{pengguna} diposting ke tim {target}',
      'postTargetTeams' => '{pengguna} diposting ke tim {target}',
      'postTargetPortal' => '{pengguna} diposting ke portal {target}',
      'postTargetPortals' => '{pengguna} diposting ke portal {target}',
      'postTarget' => '{pengguna} diposting ke {target}',
      'postTargetYou' => '{pengguna} diposting ke Anda',
      'postTargetYouAndOthers' => '{pengguna} diposting ke {target} dan Anda',
      'postTargetAll' => '{pengguna} diposting ke semua',
      'postTargetSelf' => '{pengguna} diposting ke sendiri',
      'postTargetSelfAndOthers' => '{pengguna} diposting ke {target} dan sendiri',
      'mentionInPost' => '{pengguna} disebutkan {disebutkan} di {entityType} {entity}',
      'mentionYouInPost' => '{pengguna} menyebut Anda dalam {entityType} {entity}',
      'mentionInPostTarget' => '{pengguna} disebutkan {mentioned} dalam posting',
      'mentionYouInPostTarget' => '{pengguna
} menyebut Anda dalam posting ke {target}',
      'mentionYouInPostTargetAll' => '{pengguna} menyebut Anda dalam posting ke semua',
      'mentionYouInPostTargetNoTarget' => '{pengguna} menyebut Anda dalam posting',
      'create' => '{pengguna} dibuat {entityType} {entity}',
      'createThis' => '{pengguna} dibuat ini {entityType}',
      'createAssignedThis' => '{pengguna} membuat ini {entityType} ditugaskan kepada {petugas}',
      'createAssigned' => '{pengguna} membuat {entityType} {entity} ditugaskan kepada {petugas}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{pengguna} menugaskan {entityType} {entity} ke {petugas}',
      'assignThis' => '{pengguna} menugaskan ini {entityType} ke {petugas}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{pengguna} memposting',
      'attachThis' => '{pengguna} melampirkan',
      'statusThis' => '{pengguna} memperbarui {kolom}',
      'updateThis' => '{pengguna} memperbarui ini {entityType}',
      'createRelatedThis' => '{pengguna} membuat {relatedEntityType} {relatedEntity} terkait dengan ini {entityType} ',
      'createRelated' => '{pengguna} membuat {relatedEntityType} {relatedEntity} terkait dengan {entityType} {entity}',
      'relate' => '{pengguna} linked {relatedEntityType} {relatedEntity} dengan {entityType} {entity}',
      'relateThis' => '{pengguna} linked {relatedEntityType} {relatedEntity} dengan ini {entityType}',
      'emailReceivedFromThis' => 'Email yang diterima dari {from}',
      'emailReceivedInitialFromThis' => 'Email yang diterima dari {from}, ini {entityType} dibuat',
      'emailReceivedThis' => 'email yang diterima',
      'emailReceivedInitialThis' => 'Email yang diterima, ini {entityType} dibuat',
      'emailReceivedFrom' => 'Email yang diterima dari {dari}, terkait dengan {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email yang diterima dari {dari}, {entityType} {entity} dibuat',
      'emailReceived' => 'Email yang diterima terkait dengan {entityType} {entity}',
      'emailReceivedInitial' => 'Email yang diterima: {entityType} {entity} dibuat',
      'emailReceivedInitialFrom' => 'Email yang diterima dari {dari}, {entityType} {entity} dibuat',
      'emailSent' => '{Oleh} email yang dikirim berhubungan dengan {entityType} {entity}',
      'emailSentThis' => '{by} mengirim email',
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
        2 => 'Maret',
        3 => 'April',
        4 => 'Mei',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'Agustus',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'Desember',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Februari',
        2 => 'Mar',
        3 => 'April',
        4 => 'Mei',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'Agustus',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'Desember',
      ),
      'dayNames' => 
      array (
        0 => 'Minggu',
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Minggu',
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Minggu',
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
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
        'Mr.' => 'Bapak.',
        'Mrs.' => 'Ibu',
        'Ms.' => 'Nona.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikanas',
        'az_AZ' => 'Azerbaijan',
        'be_BY' => 'Belarusia',
        'bg_BG' => 'Bulgaria',
        'bn_IN' => 'Benggala',
        'bs_BA' => 'Bosnia',
        'ca_ES' => 'catalan',
        'cs_CZ' => 'Ceko',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Denmark',
        'de_DE' => 'Jerman',
        'el_GR' => 'Yunani',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanyol (Spain)',
        'et_EE' => 'Estonia',
        'eu_ES' => 'basque',
        'fa_IR' => 'Persia',
        'fi_FI' => 'Finlandia',
        'fo_FO' => 'Faroe',
        'fr_CA' => 'Perancis (Kanada)',
        'fr_FR' => 'Perancis (France)',
        'ga_IE' => 'Irlandia',
        'gl_ES' => 'galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Ibrani',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Kroasia',
        'hu_HU' => 'Hongaria',
        'hy_AM' => 'Armenia',
        'id_ID' => 'bahasa Indonesia',
        'is_IS' => 'bahasa Islandia',
        'it_IT' => 'Italia',
        'ja_JP' => 'Jepang',
        'ka_GE' => 'Georgia',
        'km_KH' => 'khmer',
        'ko_KR' => 'Korea',
        'ku_TR' => 'Kurd',
        'lt_LT' => 'Lithuania',
        'lv_LV' => 'Latvia',
        'mk_MK' => 'Macedonia',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Melayu',
        'nb_NO' => 'Norwegia Bokmål',
        'nn_NO' => 'Norwegia Norway',
        'ne_NP' => 'Nepal',
        'nl_NL' => 'Belanda',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polandia',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugis (Brasil)',
        'pt_PT' => 'Portugis (Portugal)',
        'ro_RO' => 'Rumania',
        'ru_RU' => 'Rusia',
        'sk_SK' => 'Slowakia',
        'sl_SI' => 'Slovenia',
        'sq_AL' => 'bahasa Albania',
        'sr_RS' => 'Serbia',
        'sv_SE' => 'Swedia',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turki',
        'uk_UA' => 'Ukraina',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnam',
        'zh_CN' => 'Cina Sederhana (Cina)',
        'zh_HK' => 'Cina tradisional (Hong Kong)',
        'zh_TW' => 'Tradisional Cina (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Di',
        'notOn' => 'Tidak menyala',
        'after' => 'Setelah',
        'before' => 'Sebelum',
        'between' => 'Antara',
        'today' => 'Hari ini',
        'past' => 'Lalu',
        'future' => 'Masa depan',
        'currentMonth' => 'Bulan berjalan',
        'lastMonth' => 'Bulan lalu',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'saat Quarter',
        'lastQuarter' => 'terakhir Quarter',
        'currentYear' => 'Tahun ini',
        'lastYear' => 'Tahun lalu',
        'lastSevenDays' => '7 Hari Terakhir',
        'lastXDays' => 'X Hari Terakhir',
        'nextXDays' => 'X Hari Berikutnya',
        'ever' => 'Pernah',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
      ),
      'searchRanges' => 
      array (
        'is' => 'Adalah',
        'isEmpty' => 'Kosong',
        'isNotEmpty' => 'Tidak Kosong',
        'isOneOf' => 'Apakah Salah Satu',
        'isFromTeams' => 'Adalah dari Tim',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Sama dengan',
        'like' => 'Seperti (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Dimulai dengan',
        'endsWith' => 'Berakhir dengan',
        'contains' => 'Isi',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Kosong',
        'isNotEmpty' => 'Tidak Kosong',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'sama dengan',
        'notEquals' => 'tidak sama dengan',
        'greaterThan' => 'Lebih besar dari',
        'lessThan' => 'Kurang dari',
        'greaterThanOrEquals' => 'Lebih besar dari, atau setara dengan',
        'lessThanOrEquals' => 'Kurang dari, atau setara dengan',
        'between' => 'Antara',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'tak satupun',
        '0.5' => '30 detik',
        1 => '1 menit',
        2 => '2 menit',
        5 => '5 menit',
        10 => '10 menit',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'mobil',
        'Office' => 'Kantor',
        'Fax' => 'Fax',
        'Home' => 'Rumah',
        'Other' => 'Lain',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Muncul',
        'Email' => 'E-mail',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Anda dapat menemukan terjemahan di sini: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Tebal',
          'italic' => 'miring',
          'underline' => 'Garis bawah',
          'strike' => 'Strike',
          'clear' => 'Hapus Font Style',
          'height' => 'Tinggi garis',
          'name' => 'Font Family',
          'size' => 'Ukuran huruf',
        ),
        'image' => 
        array (
          'image' => 'Gambar',
          'insert' => 'Insert Gambar',
          'resizeFull' => 'mengubah ukuran penuh',
          'resizeHalf' => 'mengubah separuh ukuran',
          'resizeQuarter' => 'mengubah seperempat ukuran',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Seret gambar kesini',
          'selectFromFiles' => 'Pilih dari file',
          'url' => 'URL gambar',
          'remove' => 'Hapus Gambar',
        ),
        'link' => 
        array (
          'link' => 'Tautan',
          'insert' => 'Sisipkan Tautan',
          'unlink' => 'membatalkan tautan',
          'edit' => 'mengedit',
          'textToDisplay' => 'Teks untuk menampilkan',
          'url' => 'Untuk apa URL tautan ini?',
          'openInNewWindow' => 'Buka di jendela baru',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video link',
          'insert' => 'Insert Video',
          'url' => 'URL Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, atau Dailymotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabel',
        ),
        'hr' => 
        array (
          'insert' => 'Masukkan Aturan Horizontal',
        ),
        'style' => 
        array (
          'style' => 'Style',
          'normal' => 'Normal',
          'blockquote' => 'Kutipan',
          'pre' => 'Kode',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'daftar tidak berurutan',
          'ordered' => 'daftar berurutan',
        ),
        'options' => 
        array (
          'help' => 'Bantuan',
          'fullscreen' => 'Layar penuh',
          'codeview' => 'Tampilan kode',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'outdent',
          'indent' => 'Indent',
          'left' => 'Rata kiri',
          'center' => 'rata tengah',
          'right' => 'rata kanan',
          'justify' => 'sesuaikan penuh',
        ),
        'color' => 
        array (
          'recent' => 'Warna terbaru',
          'more' => 'lebih banyak Warna',
          'background' => 'Warna Belakang',
          'foreground' => 'Warna huruf',
          'transparent' => 'Transparan',
          'setTransparent' => 'set transparan',
          'reset' => 'reset',
          'resetToDefault' => 'Reset ke default',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'shortcut keyboard',
          'close' => 'Tutup',
          'textFormatting' => 'format teks',
          'action' => 'Action',
          'paragraphFormatting' => 'format paragraf',
          'documentStyle' => 'dokumen Style',
        ),
        'history' => 
        array (
          'undo' => 'Undo',
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
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Sakura',
      'EspoVertical' => 'Espo Vertikal',
      'SakuraVertical' => 'Sakura Vertikal',
      'Violet' => 'Ungu',
      'VioletVertical' => 'Violet Vertical',
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Vertical Hazyblue',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Kembalikan Impor',
      'Return to Import' => 'Kembali ke Impor',
      'Run Import' => 'Run Impor',
      'Back' => 'Kembali',
      'Field Mapping' => 'Field Mapping',
      'Default Values' => 'Default Values',
      'Add Field' => 'Tambahkan kolom',
      'Created' => 'dibuat',
      'Updated' => 'Diperbarui',
      'Result' => 'Hasil',
      'Show records' => 'Tampilkan catatan',
      'Remove Duplicates' => 'Hapus Duplikat',
      'importedCount' => 'Impor (count)',
      'duplicateCount' => 'Duplikat (count)',
      'updatedCount' => 'Updated (count)',
      'Create Only' => 'Create Only',
      'Create and Update' => 'Create & Update',
      'Update Only' => 'Update Only',
      'Update by' => 'Perbarui oleh',
      'Set as Not Duplicate' => 'Ditetapkan sebagai Tidak Duplikat',
      'File (CSV)' => 'Berkas (CSV)',
      'First Row Value' => 'Nilai Row pertama',
      'Skip' => 'Lewati',
      'Header Row Value' => 'Header Row Value',
      'Field' => 'Kolom',
      'What to Import?' => 'Impor Apa?',
      'Entity Type' => 'Tipe entitas',
      'What to do?' => 'Apa yang harus dilakukan?',
      'Properties' => 'properti',
      'Header Row' => 'Header Row',
      'Person Name Format' => 'Format Nama Orang',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Pembatas Kolom',
      'Date Format' => 'Format tanggal',
      'Decimal Mark' => 'Tanda Desimal',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Format waktu',
      'Currency' => 'Mata uang',
      'Preview' => 'Preview',
      'Next' => 'Berikutnya',
      'Step 1' => 'Langkah 1',
      'Step 2' => 'Langkah 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Impor',
      'Duplicates' => 'duplikat',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Harus UTF-8 encoded',
      'duplicatesRemoved' => 'duplikat dihapus',
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
      'file' => 'File',
      'entityType' => 'Jenis entitas',
      'imported' => 'Rekaman dimpor',
      'duplicates' => 'duplikat Rekaman',
      'updated' => 'Rekaman Diperbarui',
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
      'name' => 'Nama',
      'emailAddress' => 'Alamat email',
      'team' => 'Tim',
      'status' => 'Status',
      'assignToUser' => 'Tugaskan ke Pengguna',
      'host' => 'Host',
      'username' => 'Nama pengguna',
      'password' => 'Kata sandi',
      'port' => 'Port',
      'monitoredFolders' => 'Folder yang dipantau',
      'trashFolder' => 'Trash Folder',
      'ssl' => 'SSL',
      'createCase' => 'Create Case',
      'reply' => 'Auto-Reply',
      'caseDistribution' => 'Case Distribution',
      'replyEmailTemplate' => 'Template Balas Email',
      'replyFromAddress' => 'Balas Dari Alamat',
      'replyToAddress' => 'Balas Untuk Alamat',
      'replyFromName' => 'Balas Dari Nama',
      'targetUserPosition' => 'Target Posisi Pengguna',
      'fetchSince' => 'Ambil Sejak',
      'addAllTeamUsers' => 'Untuk semua pengguna tim',
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
      'reply' => 'Beritahu pengirim email bahwa email mereka telah diterima.

 Hanya satu email akan dikirim ke penerima tertentu selama beberapa waktu untuk mencegah perulangan.',
      'createCase' => 'Secara otomatis membuat kasus dari email yang masuk.',
      'replyToAddress' => 'Tentukan alamat email dari kotak surat ini untuk membuat tanggapan datang ke sini.',
      'caseDistribution' => 'Bagaimana kasus akan ditugaskan untuk. Ditugaskan langsung ke pengguna atau antar tim.',
      'assignToUser' => 'email pengguna / kasus akan ditugaskan untuk.',
      'team' => 'email tim / kasus akan terkait dengan.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Menentukan posisi pengguna yang akan didistribusikan dengan kasus.',
      'addAllTeamUsers' => 'Email akan muncul di Inbox dari semua pengguna dari tim tertentu.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'filter',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'non-aktif',
      ),
      'caseDistribution' => 
      array (
        '' => 'tak satupun',
        'Direct-Assignment' => 'Tugas Langsung',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Setidaknya-Sibuk',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Buat Akun Email',
      'IMAP' => 'IMAP',
      'Actions' => 'Actions',
      'Main' => 'Utama',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'tidak bisa terhubung ke server IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Diaktifkan',
      'clientId' => 'ID klien',
      'clientSecret' => 'klien Rahasia',
      'redirectUri' => 'redirect URI',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Pilih integrasi dari menu.',
      'noIntegrations' => 'Tidak ada integrasi tersedia.',
    ),
    'help' => 
    array (
      'Google' => '<P> <b> Mendapatkan OAuth 2.0 mandat dari Google Developers Console. </ B> </ p> <p> Kunjungi <a href="https://console.developers.google.com/project"> Google Developers konsol </a> untuk mendapatkan OAuth 2.0 mandat seperti ID Klien dan Klien Rahasia yang dikenal baik aplikasi Google dan EspoCRM. </ p>',
      'GoogleMaps' => '<p>Obtain API key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'mengeksekusi Pada',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Layanan',
      'method' => 'metode',
      'methodName' => 'Method',
      'scheduledJob' => 'Pekerjaan Terjadwal',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Tunda',
        'Success' => 'Berhasil',
        'Running' => 'Berjalan',
        'Failed' => 'Gagal',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Lebar (%)',
      'link' => 'Tautan',
      'notSortable' => 'Not Sortable',
      'align' => 'Rata',
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
        'left' => 'Kiri',
        'right' => 'Kanan',
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
      'post' => 'Posting',
      'attachments' => 'lampiran',
      'targetType' => 'Target',
      'teams' => 'tim',
      'users' => 'pengguna',
      'portals' => 'portal',
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
      'all' => 'Semua',
      'posts' => 'Posts',
      'updates' => 'update',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'untuk sendiri',
        'users' => 'Untuk pengguna tertentu',
        'teams' => 'Untuk tim tertentu',
        'all' => 'Untuk semua pengguna internal',
        'portals' => 'Untuk semua pengguna Portal',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Tulis pesan Anda disini',
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
      'name' => 'Nama',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'peran',
      'isActive' => 'Aktif',
      'isDefault' => 'Atur ',
      'tabList' => 'Daftar tabel',
      'quickCreateList' => 'Buat Daftar Cepat',
      'companyLogo' => 'Logo',
      'theme' => 'Tema',
      'language' => 'Bahasa',
      'dashboardLayout' => 'dashboard Layout',
      'dateFormat' => 'Format tanggal',
      'timeFormat' => 'Format waktu',
      'timeZone' => 'Zona waktu',
      'weekStart' => 'Hari Pertama dalam satu minggu',
      'defaultCurrency' => 'Setelan mata uang',
      'customUrl' => 'Custom URL',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'pengguna',
      'portalRoles' => 'peran',
      'notes' => 'Catatan',
      'articles' => 'Basis Pengetahuan Artikel',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Peran spesifik Portal akan diterapkan untuk semua pengguna portal ini.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Buat Portal',
      'User Interface' => 'Antarmuka pengguna',
      'General' => 'Umum',
      'Settings' => 'pengaturan',
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
      'users' => 'pengguna',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Akses',
      'Create PortalRole' => 'Buat Portal Peran',
      'Scope Level' => 'lingkup Tingkat',
      'Field Level' => 'Tingkat Kolom',
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
      'dateFormat' => 'Format tanggal',
      'timeFormat' => 'Format waktu',
      'timeZone' => 'Zona waktu',
      'weekStart' => 'Hari Pertama dalam satu minggu',
      'thousandSeparator' => 'Thousand Separator',
      'decimalMark' => 'Tanda desimal',
      'defaultCurrency' => 'Setelan mata uang',
      'currencyList' => 'Daftar mata uang',
      'language' => 'Bahasa',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Tupoksi',
      'smtpSecurity' => 'Keamanan',
      'smtpUsername' => 'Nama pengguna',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Kata sandi',
      'smtpEmailAddress' => 'Alamat email',
      'exportDelimiter' => 'Pembatas Ekspor',
      'receiveAssignmentEmailNotifications' => 'Menerima Pemberitahuan Email pada Tugas',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => 'email Signature',
      'dashboardTabList' => 'Daftar tabel',
      'defaultReminders' => 'Atur Pengingat',
      'theme' => 'Tema',
      'useCustomTabList' => 'Daftar Tabel Biasa',
      'tabList' => 'Daftar tabel',
      'emailReplyToAllByDefault' => 'Email Balas ke Semua sebagai pengaturan',
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
        0 => 'Minggu',
        1 => 'Senin',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'pemberitahuan',
      'User Interface' => 'Antarmuka pengguna',
      'SMTP' => 'SMTP',
      'Misc' => 'Lain-lain',
      'Locale' => 'lokal',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Pengguna secara otomatis akan mengikuti semua catatan baru jenis entitas yang dipilih, akan melihat informasi yang mengalir dan menerima pemberitahuan.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'roles' => 'peran',
      'assignmentPermission' => 'Ijin Penugasan',
      'userPermission' => 'Izin pengguna',
      'portalPermission' => 'Izin Portal',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'pengguna',
      'teams' => 'tim',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Memungkinkan untuk membatasi kemampuan untuk menetapkan catatan dan pesan posting ke pengguna lain.

semua - tidak ada pembatasan

Tim - dapat menetapkan dan posting hanya untuk rekan

tidak ada - dapat menetapkan dan posting hanya untuk diri',
      'userPermission' => 'Memungkinkan untuk membatasi kemampuan bagi pengguna untuk melihat kegiatan, kalender dan aliran pengguna lain.

semua - bisa melihat semua

Tim - dapat melihat kegiatan rekan tim hanya

tidak ada - tidak bisa melihat',
      'portalPermission' => 'Mendefinisikan akses ke portal informasi, kemampuan untuk mengkonversi kontak untuk pengguna portal dan memposting pesan ke pengguna Portal.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Mengakses',
      'Create Role' => 'Buat Peran',
      'Scope Level' => 'lingkup Tingkat',
      'Field Level' => 'Tingkat lapangan',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'tidak diatur',
        'enabled' => 'diaktifkan',
        'disabled' => 'dimatikan',
      ),
      'levelList' => 
      array (
        'all' => 'semua',
        'team' => 'tim',
        'account' => 'Account',
        'contact' => 'kontak',
        'own' => 'sendiri',
        'no' => 'tidak',
        'yes' => 'ya',
        'not-set' => 'tidak diatur',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Baca',
      'edit' => 'Edit',
      'delete' => 'Hapus',
      'stream' => 'Aliran',
      'create' => 'Membuat',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Semua perubahan dalam kontrol akses akan diterapkan setelah cache dibersihkan.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'status' => 'Status',
      'job' => 'Pekerjaan',
      'scheduling' => 'penjadwalan',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Buat Pekerjaan Terjadwal',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Membersihkan',
        'CheckInboundEmails' => 'Periksa Akun Email Grup',
        'CheckEmailAccounts' => 'Periksa Akun Email Pribadi',
        'SendEmailReminders' => 'Kirim Pengingat Email',
        'AuthTokenControl' => 'Tupoksi Token Kontrol',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Kirim Mass Email',
        'ControlKnowledgeBaseArticleStatus' => 'Basis Pengetahuan kontrol Status Pasal',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Catatan: Tambahkan baris ini ke file kontak untuk menjalankan Espo Pekerjaan Terjadwal:',
        'mac' => 'Catatan: Tambahkan baris ini ke file kontak untuk menjalankan Espo Pekerjaan Terjadwal:',
        'windows' => 'Catatan: Buat file batch dengan perintah berikut untuk menjalankan Espo Pekerjaan Terjadwal menggunakan Windows Scheduled Tasks:',
        'default' => 'Catatan: Tambahkan perintah ini untuk Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'non-aktif',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'notasi crontab. Mendefinisikan frekuensi berjalan pekerjaan.

* / 5 * * * * - setiap 5 menit

0 * / 2 * * * - setiap 2 jam

30 1 * * * - di 1:30 sekali sehari

0 0 1 * * - pada hari pertama bulan',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Waktu eksekusi',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Gunakan Cache',
      'dateFormat' => 'Format tanggal',
      'timeFormat' => 'Format waktu',
      'timeZone' => 'Zona waktu',
      'weekStart' => 'Hari Pertama Minggu',
      'thousandSeparator' => 'Pemisah ribuan',
      'decimalMark' => 'Tanda desimal',
      'defaultCurrency' => 'Setekan Mata Uang',
      'baseCurrency' => 'Mata uang dasar',
      'currencyRates' => 'Nilau Tukar',
      'currencyList' => 'Daftar mata uang',
      'language' => 'Bahasa',
      'companyLogo' => 'Logo perusahaan',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Tupoksi',
      'smtpSecurity' => 'Keamanan',
      'smtpUsername' => 'Nama pengguna',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Kata sandi',
      'outboundEmailFromName' => 'Dari nama',
      'outboundEmailFromAddress' => 'dari Alamat',
      'outboundEmailIsShared' => 'Dibagikan ',
      'recordsPerPage' => 'Catatan Per Halaman',
      'recordsPerPageSmall' => 'Catatan Per Halaman (Kecil)',
      'tabList' => 'Daftar tabel',
      'quickCreateList' => 'Buat Daftar Cepat ',
      'exportDelimiter' => 'ekspor Pembatas',
      'globalSearchEntityList' => 'Daftar Pencarian Global Entity',
      'authenticationMethod' => 'Metode otentikasi',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Tupoksi',
      'ldapUsername' => 'Nama pengguna',
      'ldapPassword' => 'Kata sandi',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Nama akun Domain',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Buat Pengguna di EspoCRM',
      'ldapSecurity' => 'Keamanan',
      'ldapUserLoginFilter' => 'Filter Login Pengguna',
      'ldapAccountDomainNameShort' => 'Akun Domain Name Pendek',
      'ldapOptReferrals' => 'opt Rujukan',
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
      'exportDisabled' => 'Menonaktifkan Ekspor (hanya admin diperbolehkan)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Kirim Notifikasi Email pada Tugas',
      'assignmentEmailNotificationsEntityList' => 'Entitas untuk Beritahu tentang dengan Email pada Tugas',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'B2C Modus',
      'avatarsDisabled' => 'Nonaktifkan Avatar',
      'followCreatedEntities' => 'Ikuti Entitas yang Dibuat',
      'displayListViewRecordCount' => 'Menampilkan total Count (pada Daftar View)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Nonaktifkan Pengguna Tema',
      'emailMessageMaxSize' => 'E-mail Max Ukuran (Mb)',
      'massEmailMaxPerHourCount' => 'Max hitungan e-mail yang dikirim per jam',
      'personalEmailMaxPortionSize' => 'Max ukuran porsi email untuk pengambilan akun pribadi',
      'inboundEmailMaxPortionSize' => 'Max ukuran porsi email untuk kelompok akun pengambilan',
      'maxEmailAccountCount' => 'Max hitungan account email pribadi per pengguna',
      'authTokenLifetime' => 'Tupoksi Token Lifetime (jam)',
      'authTokenMaxIdleTime' => 'Tupoksi Token Max Idle Time (jam)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'alamat URL',
      'addressPreview' => 'alamat Preview',
      'addressFormat' => 'alamat Format',
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
        0 => 'Minggu',
        1 => 'Senin',
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
      'recordsPerPage' => 'Jumlah record awalnya ditampilkan dalam daftar tampilan.',
      'recordsPerPageSmall' => 'Jumlah record awal ditampilkan dalam panel hubungan.',
      'outboundEmailIsShared' => 'Memungkinkan pengguna untuk mengirim email melalui SMTP ini.',
      'followCreatedEntities' => 'Pengguna secara otomatis akan mengikuti catatan mereka menciptakan.',
      'emailMessageMaxSize' => 'Semua email masuk melebihi ukuran tertentu akan diambil w / o tubuh dan lampiran.',
      'authTokenLifetime' => 'Mendefinisikan bagaimana token lama bisa eksis.
0 - berarti tidak ada kadaluarsa.',
      'authTokenMaxIdleTime' => 'Mendefinisikan berapa lama sejak token akses terakhir bisa eksis.
0 - berarti tidak ada kadaluarsa.',
      'userThemesDisabled' => 'Jika dicentang maka pengguna tidak akan dapat memilih tema lain.',
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
      'System' => 'Sistem',
      'Locale' => 'lokal',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfigurasi',
      'In-app Notifications' => 'Pemberitahuan Dalam aplikasi ',
      'Email Notifications' => 'notifikasi email',
      'Currency Settings' => 'Pengaturan mata Uang',
      'Currency Rates' => 'Rate Mata Uang',
      'Mass Email' => 'e-mail massal',
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
      'name' => 'Nama',
      'roles' => 'peran',
      'positionList' => 'Daftar posisi',
    ),
    'links' => 
    array (
      'users' => 'pengguna',
      'notes' => 'Catatan',
      'roles' => 'peran',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Peran akses. Pengguna tim ini memperoleh tingkat kontrol akses dari peran yang dipilih.',
      'positionList' => 'posisi yang tersedia di tim ini. Misalnya. Sales Person, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Buat Tim',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'body' => 'Tubuh',
      'entityType' => 'Jenis entitas',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Batas Kiri',
      'topMargin' => 'Batas Atas',
      'rightMargin' => 'Batas kanan',
      'bottomMargin' => 'Batas Bawah',
      'printFooter' => 'cetak Footer',
      'footerPosition' => 'Posisi Footer ',
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
      'Create Template' => 'Buat Template',
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
      'footer' => 'Gunakan {PageNumber} untuk mencetak nomor halaman.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'userName' => 'Nama pengguna',
      'title' => 'Judul',
      'isAdmin' => 'adalah Admin',
      'defaultTeam' => 'Pengaturan Tim',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telepon',
      'roles' => 'peran',
      'portals' => 'portal',
      'portalRoles' => 'Peran Portal',
      'teamRole' => 'Posisi',
      'password' => 'Kata sandi',
      'currentPassword' => 'kata sandi saat ini',
      'passwordConfirm' => 'konfirmasi sandi',
      'newPassword' => 'kata sandi baru',
      'newPasswordConfirm' => 'Konfirmasi password baru',
      'avatar' => 'Avatar',
      'isActive' => 'Aktif',
      'isPortalUser' => 'Adalah Portal Pengguna',
      'contact' => 'Kontak',
      'accounts' => 'Akun',
      'account' => 'Account (Primary)',
      'sendAccessInfo' => 'Kirim Email dengan Access Info untuk Pengguna',
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
      'teams' => 'tim',
      'roles' => 'Roles',
      'notes' => 'Catatan',
      'portals' => 'portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Kontak',
      'accounts' => 'Akun',
      'account' => 'Account (Primary)',
      'tasks' => 'Tasks',
      'targetLists' => 'Daftar Target',
    ),
    'labels' => 
    array (
      'Create User' => 'Buat pengguna',
      'Generate' => 'Perbanyak',
      'Access' => 'Akses',
      'Preferences' => 'Pilihan',
      'Change Password' => 'Ganti kata sandi',
      'Teams and Access Control' => 'Tim dan akses kontrol',
      'Forgot Password?' => 'Lupa kata sandi?',
      'Password Change Request' => 'Permintaan penggantian kata sandi',
      'Email Address' => 'Alamat email',
      'External Accounts' => 'Accounts eksternal',
      'Email Accounts' => 'Akun email',
      'Portal' => 'Portal',
      'Create Portal User' => 'Buat Portal Pengguna',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Semua catatan yang dibuat oleh pengguna ini akan berhubungan dengan tim ini secara default.',
      'userName' => 'Huruf a-z, angka 0-9, titik, tanda hubung, @ -signs dan garis bawah diperbolehkan.',
      'isAdmin' => 'user admin dapat mengakses segala sesuatu.',
      'isActive' => 'Jika dicentang maka pengguna tidak akan bisa login.',
      'teams' => 'Tim yang pengguna ini milik. Tingkat kontrol akses diwariskan dari peran tim.',
      'roles' => 'peran akses tambahan. Menggunakannya jika pengguna bukan milik tim manapun atau Anda perlu untuk memperpanjang tingkat kontrol akses eksklusif untuk pengguna ini.',
      'portalRoles' => 'peran Portal tambahan. Menggunakannya untuk memperluas tingkat kontrol akses eksklusif untuk pengguna ini.',
      'portals' => 'Portal yang pengguna ini memiliki akses ke.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Password akan dikirimkan ke alamat email pengguna.',
      'accountInfoEmailSubject' => 'EspoCRM Info Pengguna Access',
      'accountInfoEmailBody' => 'akses informasi Anda:

Username: {username}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Ubah Password Permintaan',
      'passwordChangeLinkEmailBody' => 'Anda dapat mengubah password Anda dengan tautan ini {link}. url yang unik ini akan segera expired.',
      'passwordChanged' => 'Sandi telah diubah',
      'userCantBeEmpty' => 'Username tidak boleh kosong',
      'wrongUsernamePasword' => 'Salah username / password',
      'emailAddressCantBeEmpty' => 'Alamat Email tidak boleh kosong',
      'userNameEmailAddressNotFound' => 'Username / Email Alamat tidak ditemukan',
      'forbidden' => 'Dilarang, coba nanti',
      'uniqueLinkHasBeenSent' => 'URL unik telah dikirim ke alamat email tertentu.',
      'passwordChangedByRequest' => 'Password telah berubah.',
      'setupSmtpBefore' => 'Anda perlu pengaturan href="{url}"> SMTP pengaturan </a> untuk membuat sistem dapat mengirim password email.',
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
      'onlyMyTeam' => 'Hanya Tim saya',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif',
      'activePortal' => 'Portal Aktif',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'emailAddress' => 'E-mail',
      'website' => 'Situs web',
      'phoneNumber' => 'Telepon',
      'billingAddress' => 'Alamat tagihan',
      'shippingAddress' => 'Alamat Pengiriman',
      'description' => 'Deskripsi',
      'sicCode' => 'Kode Sic',
      'industry' => 'Industri',
      'type' => 'Mengetik',
      'contactRole' => 'Judul',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Kampanye',
      'targetLists' => 'Daftar Target',
      'targetList' => 'Target Daftar',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Kontak',
      'opportunities' => 'peluang',
      'cases' => 'kasus',
      'documents' => 'dokumen',
      'meetingsPrimary' => 'Rapat (diperluas)',
      'callsPrimary' => 'Panggilan (diperluas)',
      'tasksPrimary' => 'Tugas (diperluas)',
      'emailsPrimary' => 'Email (diperluas)',
      'targetLists' => 'Daftar Target',
      'campaignLogRecords' => 'kampanye Log',
      'campaign' => 'Kampanye',
      'portalUsers' => 'Pengguna Portal',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Pelanggan',
        'Investor' => 'Investor',
        'Partner' => 'Pasangan',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Pertanian',
        'Advertising' => 'pengiklanan',
        'Apparel & Accessories' => 'Pakaian & Aksesoris',
        'Architecture' => 'Architecture',
        'Automotive' => 'otomotif',
        'Banking' => 'Perbankan',
        'Biotechnology' => 'bioteknologi',
        'Building Materials & Equipment' => 'Bahan & Peralatan Bangunan',
        'Chemical' => 'Bahan kimia',
        'Construction' => 'Construction',
        'Computer' => 'Komputer',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'pendidikan',
        'Electronics' => 'Elektronik',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energi',
        'Entertainment & Leisure' => 'Hiburan & Kenyamanan',
        'Finance' => 'Keuangan',
        'Food & Beverage' => 'makanan & Minuman',
        'Grocery' => 'toko bahan makanan',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Kesehatan',
        'Insurance' => 'Asuransi',
        'Legal' => 'Hukum',
        'Manufacturing' => 'pabrik',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Penerbitan',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Perumahan',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Layanan',
        'Support' => 'Support',
        'Sports' => 'Olahraga',
        'Software' => 'Perangkat lunak',
        'Technology' => 'Teknologi',
        'Telecommunications' => 'telekomunikasi',
        'Television' => 'Televisi',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Angkutan',
        'Travel' => 'Travel',
        'Venture Capital' => 'Modal usaha',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'buat akun',
      'Copy Billing' => 'Salin Penagihan',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'pelanggan',
      'partners' => 'Rekan',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Bulan',
      'week' => 'Minggu',
      'day' => 'Hari',
      'agendaWeek' => 'Minggu',
      'agendaDay' => 'Hari',
      'timeline' => 'Timeline',
    ),
    'labels' => 
    array (
      'Today' => 'Hari ini',
      'Create' => 'Membuat',
      'Shared' => 'Bersama',
      'Add User' => 'Tambahkan pengguna',
      'current' => 'arus',
      'time' => 'waktu',
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
      'name' => 'Nama',
      'parent' => 'Induk',
      'status' => 'Status',
      'dateStart' => 'Tanggal mulai',
      'dateEnd' => 'Tanggal akhir',
      'direction' => 'Arah',
      'duration' => 'Lamanya',
      'description' => 'Deskripsi',
      'users' => 'pengguna',
      'contacts' => 'kontak',
      'leads' => 'memimpin',
      'reminders' => 'pengingat',
      'account' => 'Rekening',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Berencana',
        'Held' => 'diadakan',
        'Not Held' => 'tidak Dimiliki',
      ),
      'direction' => 
      array (
        'Outbound' => 'Keluar',
        'Inbound' => 'Masuk',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'tak satupun',
        'Accepted' => 'diterima',
        'Declined' => 'ditolak',
        'Tentative' => 'Sementara',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'set Dimiliki',
      'setNotHeld' => 'Set Tidak Dimiliki',
    ),
    'labels' => 
    array (
      'Create Call' => 'Buat Panggilan',
      'Set Held' => 'set Dimiliki',
      'Set Not Held' => 'Set Tidak Dimiliki',
      'Send Invitations' => 'Mengirim undangan',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Berencana',
      'held' => 'diadakan',
      'todays' => 'hari ini',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'description' => 'Deskripsi',
      'status' => 'Status',
      'type' => 'Mengetik',
      'startDate' => 'Mulai tanggal',
      'endDate' => 'Tanggal akhir',
      'targetLists' => 'Daftar Target',
      'excludingTargetLists' => 'Tidak termasuk Daftar Sasaran',
      'sentCount' => 'mengirim',
      'openedCount' => 'dibuka',
      'clickedCount' => 'diklik',
      'optedOutCount' => 'Memilih keluar',
      'bouncedCount' => 'terpental',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Terpental Keras',
      'softBouncedCount' => 'lembut Terpental',
      'leadCreatedCount' => 'memimpin Dibuat',
      'revenue' => 'Pendapatan',
      'revenueConverted' => 'Pendapatan (dikonversi)',
      'budget' => 'anggaran belanja',
      'budgetConverted' => 'Anggaran (dikonversi)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Daftar Target',
      'excludingTargetLists' => 'Tidak termasuk Daftar Sasaran',
      'accounts' => 'Akun',
      'contacts' => 'kontak',
      'leads' => 'memimpin',
      'opportunities' => 'peluang',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Email massal',
      'trackingUrls' => 'pelacakan URL',
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
        'Web' => 'jaringan',
        'Television' => 'Televisi',
        'Radio' => 'Radio',
        'Newsletter' => 'laporan berkala',
        'Mail' => 'Surat',
      ),
      'status' => 
      array (
        'Planning' => 'perencanaan',
        'Active' => 'Aktif',
        'Inactive' => 'non-aktif',
        'Complete' => 'Lengkap',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Buat Kampanye',
      'Target Lists' => 'Daftar Target',
      'Statistics' => 'statistika',
      'hard' => 'keras',
      'soft' => 'lembut',
      'Unsubscribe' => 'berhenti berlangganan',
      'Mass Emails' => 'Email massal',
      'Email Templates' => 'Template email',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Anda telah berhenti berlangganan dari milis kami.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Target yang harus menerima pesan.',
      'excludingTargetLists' => 'Target yang seharusnya tidak menerima pesan.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Tindakan',
      'actionDate' => 'Tanggal',
      'data' => 'Data',
      'campaign' => 'Kampanye',
      'parent' => 'Target',
      'object' => 'Obyek',
      'application' => 'Aplikasi',
      'queueItem' => 'antrian Barang',
      'stringData' => 'data String',
      'stringAdditionalData' => 'String Data Tambahan',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'antrian Barang',
      'parent' => 'Induk',
      'object' => 'Obyek',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'mengirim',
        'Opened' => 'dibuka',
        'Opted Out' => 'Memilih keluar',
        'Bounced' => 'terpental',
        'Clicked' => 'diklik',
        'Lead Created' => 'memimpin Dibuat',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Semua',
    ),
    'presetFilters' => 
    array (
      'sent' => 'mengirim',
      'opened' => 'dibuka',
      'optedOut' => 'Memilih keluar',
      'optedIn' => 'Opted In',
      'bounced' => 'terpental',
      'clicked' => 'diklik',
      'leadCreated' => 'memimpin Dibuat',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Kode untuk menyisipkan bukan URL',
      'campaign' => 'Kampanye',
    ),
    'links' => 
    array (
      'campaign' => 'Kampanye',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Buat Tracking URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'number' => 'Jumlah',
      'status' => 'Status',
      'account' => 'Akun',
      'contact' => 'Kontak',
      'contacts' => 'kontak',
      'priority' => 'Prioritas',
      'type' => 'Mengetik',
      'description' => 'Deskripsi',
      'inboundEmail' => 'Email masuk',
      'lead' => 'Memimpin',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Email masuk',
      'account' => 'Akun',
      'contact' => 'Kontak (Primer)',
      'Contacts' => 'kontak',
      'meetings' => 'rapat',
      'calls' => 'panggilan',
      'tasks' => 'tugas',
      'emails' => 'email',
      'articles' => 'Basis Pengetahuan Artikel',
      'lead' => 'Memimpin',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Baru',
        'Assigned' => 'ditugaskan',
        'Pending' => 'tertunda',
        'Closed' => 'Tertutup',
        'Rejected' => 'Ditolak',
        'Duplicate' => 'Duplikat',
      ),
      'priority' => 
      array (
        'Low' => 'Rendah',
        'Normal' => 'Normal',
        'High' => 'Tinggi',
        'Urgent' => 'Penting',
      ),
      'type' => 
      array (
        'Question' => 'Pertanyaan',
        'Incident' => 'Kejadian',
        'Problem' => 'Masalah',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Buat Case',
      'Close' => 'Tutup',
      'Reject' => 'Menolak',
      'Closed' => 'Tertutup',
      'Rejected' => 'Ditolak',
    ),
    'presetFilters' => 
    array (
      'open' => 'Buka',
      'closed' => 'Tertutup',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'emailAddress' => 'E-mail',
      'title' => 'Judul',
      'account' => 'Akun',
      'accounts' => 'Akun',
      'phoneNumber' => 'Telepon',
      'accountType' => 'Jenis akun',
      'doNotCall' => 'Jangan panggil',
      'address' => 'Alamat',
      'opportunityRole' => 'peluang Peran',
      'accountRole' => 'Judul',
      'description' => 'Deskripsi',
      'campaign' => 'Kampanye',
      'targetLists' => 'Daftar Target',
      'targetList' => 'Daftar Target',
      'portalUser' => 'Portal Pengguna',
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
      'opportunities' => 'peluang',
      'cases' => 'kasus',
      'targetLists' => 'Daftar Target',
      'campaignLogRecords' => 'kampanye Log',
      'campaign' => 'Kampanye',
      'account' => 'Akun (Primer)',
      'accounts' => 'Akun',
      'casesPrimary' => 'Kasus (Primer)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portal Pengguna',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Buat kontak',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--tak satupun--',
        'Decision Maker' => 'Pengambil keputusan',
        'Evaluator' => 'Penilai',
        'Influencer' => 'influencer',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Pengguna Portal',
      'notPortalUsers' => 'Bukan Pengguna Portal',
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
      'Create Document' => 'Buat Dokumen',
      'Details' => 'rincian',
    ),
    'fields' => 
    array (
      'name' => 'Nama',
      'status' => 'Status',
      'file' => 'Berkas',
      'type' => 'Mengetik',
      'publishDate' => 'mempublikasikan Tanggal',
      'expirationDate' => 'Tanggal kadaluarsa',
      'description' => 'Deskripsi',
      'accounts' => 'Akun',
      'folder' => 'Direktori',
      'formularios' => 'Formularios',
      'source' => 'Sumber',
    ),
    'links' => 
    array (
      'accounts' => 'Akun',
      'opportunities' => 'peluang',
      'folder' => 'Direktori',
      'leads' => 'Leads',
      'contacts' => 'Contacts',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktif',
        'Draft' => 'Konsep',
        'Expired' => 'kedaluwarsa',
        'Canceled' => 'Dibatalkan',
      ),
      'type' => 
      array (
        '' => 'tak satupun',
        'Contract' => 'Kontrak',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Perjanjian lisensi',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif',
      'draft' => 'Konsep',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Buat Dokumen Folder',
      'Manage Categories' => 'mengelola Folder',
      'Documents' => 'Documents',
    ),
    'links' => 
    array (
      'documents' => 'dokumen',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Tanggal Dikirim',
      'attemptCount' => 'upaya',
      'emailAddress' => 'Alamat email',
      'massEmail' => 'Mass Email',
      'isTest' => 'adalah Uji',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Email massal',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'tertunda',
        'Sent' => 'mengirim',
        'Failed' => 'Gagal',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'tertunda',
      'sent' => 'mengirim',
      'failed' => 'Gagal',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Buat Pasal',
      'Any' => 'Apa saja',
      'Send in Email' => 'Kirim Email',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom',
    ),
    'fields' => 
    array (
      'name' => 'Nama',
      'status' => 'Status',
      'type' => 'Mengetik',
      'attachments' => 'lampiran',
      'publishDate' => 'mempublikasikan Tanggal',
      'expirationDate' => 'Tanggal kadaluarsa',
      'description' => 'Deskripsi',
      'body' => 'Tubuh',
      'categories' => 'kategori',
      'language' => 'Bahasa',
      'portals' => 'portal',
    ),
    'links' => 
    array (
      'cases' => 'kasus',
      'opportunities' => 'peluang',
      'categories' => 'kategori',
      'portals' => 'portal',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'dalam Ulasan',
        'Draft' => 'Konsep',
        'Archived' => 'diarsipkan',
        'Published' => 'Diterbitkan',
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
      'published' => 'Diterbitkan',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Buat Kategori',
      'Manage Categories' => 'mengelola Kategori',
      'Articles' => 'Articles',
    ),
    'links' => 
    array (
      'articles' => 'Artikel',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Dikonversi ke',
      'Create Lead' => 'Create Lead',
      'Convert' => 'Ubah',
      'convert' => 'ubah',
    ),
    'fields' => 
    array (
      'name' => 'Nama',
      'emailAddress' => 'E-mail',
      'title' => 'Judul',
      'website' => 'Situs web',
      'phoneNumber' => 'Telepon',
      'accountName' => 'Nama akun',
      'doNotCall' => 'Jangan panggil',
      'address' => 'Alamat',
      'status' => 'Status',
      'source' => 'Sumber',
      'opportunityAmount' => 'peluang Jumlah',
      'opportunityAmountConverted' => 'Peluang Jumlah (dikonversi)',
      'description' => 'Deskripsi',
      'createdAccount' => 'Rekening',
      'createdContact' => 'Kontak',
      'createdOpportunity' => 'Kesempatan',
      'campaign' => 'Kampanye',
      'targetLists' => 'Daftar Target',
      'targetList' => 'Target Daftar',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Daftar Target',
      'campaignLogRecords' => 'kampanye Log',
      'campaign' => 'Kampanye',
      'createdAccount' => 'Rekening',
      'createdContact' => 'Kontak',
      'createdOpportunity' => 'Kesempatan',
      'cases' => 'kasus',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Baru',
        'Assigned' => 'ditugaskan',
        'In Process' => 'dalam Proses',
        'Converted' => 'dikonversi',
        'Recycled' => 'daur ulang',
        'Dead' => 'Mati',
      ),
      'source' => 
      array (
        '' => 'tak satupun',
        'Call' => 'Panggilan',
        'Email' => 'E-mail',
        'Existing Customer' => 'Pelanggan yang ada',
        'Partner' => 'Pasangan',
        'Public Relations' => 'Hubungan Masyarakat',
        'Web Site' => 'Situs web',
        'Campaign' => 'Kampanye',
        'Other' => 'Lain',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktif',
      'actual' => 'Sebenarnya',
      'converted' => 'dikonversi',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'status' => 'Status',
      'storeSentEmails' => 'Simpan EmailTerkirim',
      'startAt' => 'Tanggal mulai',
      'fromAddress' => 'Alamat pengirim',
      'fromName' => 'nama pengirim',
      'replyToAddress' => 'Balas ke Alamat',
      'replyToName' => 'Balas-ke Nama',
      'campaign' => 'Kampanye',
      'emailTemplate' => 'Template email',
      'inboundEmail' => 'Akun email',
      'targetLists' => 'Daftar Target',
      'excludingTargetLists' => 'Tidak termasuk Daftar Sasaran',
      'optOutEntirely' => 'Opt-Out Sepenuhnya',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Daftar Target',
      'excludingTargetLists' => 'Tidak termasuk Daftar Sasaran',
      'queueItems' => 'antrian Item',
      'campaign' => 'Kampanye',
      'emailTemplate' => 'Template email',
      'inboundEmail' => 'Akun email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Konsep',
        'Pending' => 'tertunda',
        'In Process' => 'dalam Proses',
        'Complete' => 'Lengkap',
        'Canceled' => 'Dibatalkan',
        'Failed' => 'Gagal',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Buat Mass Email',
      'Send Test' => 'Kirim Uji',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Pilih setidaknya satu sasaran.',
      'testSent' => 'Uji email (s) seharusnya dikirim',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'alamat email penerima yang berhenti berlangganan akan ditandai sebagai memilih keluar dan mereka tidak akan menerima email massal lagi.',
      'targetLists' => 'Target yang harus menerima pesan.',
      'excludingTargetLists' => 'Target yang seharusnya tidak menerima pesan.',
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
      'name' => 'Nama',
      'parent' => 'Induk',
      'status' => 'Status',
      'dateStart' => 'Tanggal mulai',
      'dateEnd' => 'Tanggal akhir',
      'duration' => 'Lamanya',
      'description' => 'Deskripsi',
      'users' => 'pengguna',
      'contacts' => 'kontak',
      'leads' => 'memimpin',
      'reminders' => 'pengingat',
      'account' => 'Akun',
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
        'Planned' => 'Berencana',
        'Held' => 'diadakan',
        'Not Held' => 'tidak diadakan',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'tak satupun',
        'Accepted' => 'diterima',
        'Declined' => 'ditolak',
        'Tentative' => 'Sementara',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'set diadakan',
      'setNotHeld' => 'Set Tidak diadakan',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Buat Rapat',
      'Set Held' => 'set diadakan',
      'Set Not Held' => 'Set Tidak diadakan',
      'Send Invitations' => 'Kirim undangan',
      'on time' => 'tepat waktu',
      'before' => 'sebelum',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Berencana',
      'held' => 'diadakan',
      'todays' => 'hari ini',
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
      'name' => 'Nama',
      'account' => 'Rekening',
      'stage' => 'Tahap',
      'amount' => 'Jumlah',
      'probability' => 'Probabilitas,%',
      'leadSource' => 'memimpin Sumber',
      'doNotCall' => 'Jangan panggil',
      'closeDate' => 'Tutup Tanggal',
      'contacts' => 'kontak',
      'description' => 'Deskripsi',
      'amountConverted' => 'Jumlah (dikonversi)',
      'amountWeightedConverted' => 'jumlah Tertimbang',
      'campaign' => 'Kampanye',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'kontak',
      'documents' => 'dokumen',
      'campaign' => 'Kampanye',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Pencarian',
        'Qualification' => 'Kualifikasi',
        'Proposal' => 'Proposal',
        'Negotiation' => 'Negosiasi',
        'Needs Analysis' => 'Butuh analisa',
        'Value Proposition' => 'Proposisi nilai',
        'Id. Decision Makers' => 'Id. Pembuat keputusan',
        'Perception Analysis' => 'Analisis persepsi',
        'Proposal/Price Quote' => 'Proposal / Harga Penawaran',
        'Negotiation/Review' => 'Negosiasi / Ulasan',
        'Closed Won' => 'tertutup Won',
        'Closed Lost' => 'tertutup Hilang',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Buat Peluang',
    ),
    'presetFilters' => 
    array (
      'open' => 'Buka',
      'won' => 'Won',
      'lost' => 'Kalah',
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
      'name' => 'Nama',
      'description' => 'Deskripsi',
      'entryCount' => 'entri Hitungan',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'kampanye',
      'endDate' => 'Tanggal akhir',
      'targetLists' => 'Daftar Target',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Akun',
      'contacts' => 'kontak',
      'leads' => 'memimpin',
      'campaigns' => 'kampanye',
      'massEmails' => 'Email massal',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'jaringan',
        'Television' => 'Televisi',
        'Radio' => 'Radio',
        'Newsletter' => 'laporan berkala',
      ),
      'targetStatus' => 
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Buat target Daftar',
      'Opted Out' => 'Memilih keluar',
      'Cancel Opt-Out' => 'Batal Opt-Out',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nama',
      'parent' => 'Induk',
      'status' => 'Status',
      'dateStart' => 'Tanggal mulai',
      'dateEnd' => 'Tanggal jatuh tempo',
      'dateStartDate' => 'Tanggal mulai (sepanjang hari)',
      'dateEndDate' => 'Tanggal akhir (sepanjang hari)',
      'priority' => 'Prioritas',
      'description' => 'Deskripsi',
      'isOverdue' => 'Apakah tempo',
      'account' => 'Rekening',
      'dateCompleted' => 'Tanggal Selesai',
      'attachments' => 'lampiran',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'lampiran',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Belum mulai',
        'Started' => 'mulai',
        'Completed' => 'Lengkap',
        'Canceled' => 'Dibatalkan',
        'Deferred' => 'Tangguhan',
      ),
      'priority' => 
      array (
        'Low' => 'Rendah',
        'Normal' => 'Normal',
        'High' => 'Tinggi',
        'Urgent' => 'Penting',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Buat tugas',
      'Complete' => 'Lengkap',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Sebenarnya',
      'completed' => 'Lengkap',
      'deferred' => 'Tangguhan',
      'todays' => 'hari ini',
      'overdue' => 'Terlambat',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'reclamosBeneficiarios' => 'Reclamos',
      'empresas' => 'Empresas',
    ),
    'labels' => 
    array (
      'Create Beneficiario' => 'Buat Beneficiario',
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
      'Create Beneficios' => 'Buat Beneficios',
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
      'Create Categoria' => 'Buat Categoria',
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
      'Create Ciudad' => 'Buat Ciudad',
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
      'Create Comuna' => 'Buat Comuna',
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
      'Create DoctosBeneficio' => 'Buat Doctos_beneficio',
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
      'Create Empresa' => 'Buat Empresa',
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
      'Create Formularios' => 'Buat Formulario',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => 'Buat MotivoReclamo',
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
      'Create Proveedor' => 'Buat Proveedor',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'motivoReclamo' => 'MotivoReclamo',
      'trabajador' => 'Trabajador',
      'beneficiario' => 'Beneficiario',
      'empresa' => 'Empresa',
    ),
    'labels' => 
    array (
      'Create Reclamo' => 'Buat Reclamo',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'beneficioss' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' => 
    array (
      'Create Rol' => 'Buat Rol',
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
      'Create Solicitudes' => 'Buat Solicitudes',
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
      'Create Subcategoria' => 'Buat Subcategoria',
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
      'Create Trabajador' => 'Buat Trabajador',
    ),
    'tooltips' => 
    array (
      'telefono' => 'Ej. +56 2 29458565',
    ),
  ),
);
?>