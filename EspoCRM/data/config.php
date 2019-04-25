<?php
return [
    'cacheTimestamp' => 1546615166,
    'database' => [
        'driver' => 'pdo_mysql',
        'host' => '10.128.0.218',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'dbname' => 'ESPOCRMDB',
        'user' => 'soporte',
        'password' => 'soporte'
    ],
    'useCache' => true,
    'recordsPerPage' => 20,
    'recordsPerPageSmall' => 5,
    'applicationName' => 'EspoCRM',
    'version' => '5.4.5',
    'timeZone' => 'America/Santiago',
    'dateFormat' => 'YYYY-MM-DD',
    'timeFormat' => 'HH:mm',
    'weekStart' => 1,
    'thousandSeparator' => '.',
    'decimalMark' => ',',
    'exportDelimiter' => ';',
    'currencyList' => [
        0 => 'CLP'
    ],
    'defaultCurrency' => 'CLP',
    'baseCurrency' => 'CLP',
    'currencyRates' => [

    ],
    'outboundEmailIsShared' => false,
    'outboundEmailFromName' => 'Sebastian',
    'outboundEmailFromAddress' => 'dbalboa@losheroes.cl',
    'smtpServer' => 'smtp.losheroes.cl',
    'smtpPort' => 587,
    'smtpAuth' => true,
    'smtpSecurity' => 'TLS',
    'smtpUsername' => 'dbalboa@losheroes.cl',
    'smtpPassword' => 'Lleuque.201808',
    'languageList' => [
        0 => 'en_GB',
        1 => 'en_US',
        2 => 'es_MX',
        3 => 'cs_CZ',
        4 => 'da_DK',
        5 => 'de_DE',
        6 => 'es_ES',
        7 => 'hr_HR',
        8 => 'hu_HU',
        9 => 'fr_FR',
        10 => 'id_ID',
        11 => 'it_IT',
        12 => 'lt_LT',
        13 => 'nb_NO',
        14 => 'nl_NL',
        15 => 'tr_TR',
        16 => 'sk_SK',
        17 => 'sr_RS',
        18 => 'ro_RO',
        19 => 'ru_RU',
        20 => 'pl_PL',
        21 => 'pt_BR',
        22 => 'uk_UA',
        23 => 'vi_VN',
        24 => 'zh_CN'
    ],
    'language' => 'es_MX',
    'logger' => [
        'path' => 'data/logs/espo.log',
        'level' => 'WARNING',
        'rotation' => true,
        'maxFileNumber' => 30
    ],
    'authenticationMethod' => 'Espo',
    'globalSearchEntityList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity'
    ],
    'tabList' => [
        0 => 'Formularios',
        1 => 'Team',
        2 => 'Email',
        3 => 'Contact',
        4 => 'Account',
        5 => '_delimiter_',
        6 => 'Document',
        7 => 'User',
        8 => 'Template',
        9 => 'Stream',
        10 => 'Calendar',
        11 => 'Lead',
        12 => 'EmailTemplate',
        13 => 'Case',
        14 => 'Campaign',
        15 => 'KnowledgeBaseArticle',
        16 => 'Meeting',
        17 => 'Task',
        18 => 'Call'
    ],
    'quickCreateList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity',
        4 => 'Meeting',
        5 => 'Call',
        6 => 'Task',
        7 => 'Case',
        8 => 'Email'
    ],
    'exportDisabled' => false,
    'adminNotifications' => true,
    'adminNotificationsNewVersion' => true,
    'adminNotificationsCronIsNotConfigured' => true,
    'adminNotificationsNewExtensionVersion' => true,
    'assignmentEmailNotifications' => false,
    'assignmentEmailNotificationsEntityList' => [
        0 => 'Lead',
        1 => 'Opportunity',
        2 => 'Task',
        3 => 'Case'
    ],
    'assignmentNotificationsEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task',
        3 => 'Email',
        4 => 'Formularios'
    ],
    'portalStreamEmailNotifications' => true,
    'streamEmailNotificationsEntityList' => [
        0 => 'Case'
    ],
    'streamEmailNotificationsTypeList' => [
        0 => 'Post',
        1 => 'Status',
        2 => 'EmailReceived'
    ],
    'emailMessageMaxSize' => 10,
    'notificationsCheckInterval' => 10,
    'disabledCountQueryEntityList' => [
        0 => 'Email'
    ],
    'maxEmailAccountCount' => 2,
    'followCreatedEntities' => false,
    'b2cMode' => false,
    'restrictedMode' => false,
    'theme' => 'Espo',
    'massEmailMaxPerHourCount' => 100,
    'personalEmailMaxPortionSize' => 10,
    'inboundEmailMaxPortionSize' => 20,
    'authTokenLifetime' => 0,
    'authTokenMaxIdleTime' => 120,
    'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
    'addressFormat' => 1,
    'displayListViewRecordCount' => true,
    'dashboardLayout' => [
        0 => (object) [
            'name' => 'My Espo',
            'layout' => [
                0 => (object) [
                    'id' => 'default-activities',
                    'name' => 'Activities',
                    'x' => 2,
                    'y' => 2,
                    'width' => 2,
                    'height' => 4
                ],
                1 => (object) [
                    'id' => 'default-stream',
                    'name' => 'Stream',
                    'x' => 0,
                    'y' => 0,
                    'width' => 2,
                    'height' => 4
                ]
            ]
        ]
    ],
    'calendarEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
    ],
    'activitiesEntityList' => [
        0 => 'Meeting',
        1 => 'Call'
    ],
    'historyEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Email'
    ],
    'lastViewedCount' => 20,
    'cleanupJobPeriod' => '1 month',
    'cleanupActionHistoryPeriod' => '15 days',
    'cleanupAuthTokenPeriod' => '1 month',
    'currencyFormat' => 2,
    'currencyDecimalPlaces' => 2,
    'aclStrictMode' => false,
    'aclAllowDeleteCreated' => false,
    'inlineAttachmentUploadMaxSize' => 20,
    'textFilterUseContainsForVarchar' => false,
    'tabColorsDisabled' => false,
    'massPrintPdfMaxCount' => 50,
    'emailKeepParentTeamsEntityList' => [
        0 => 'Case'
    ],
    'recordListMaxSizeLimit' => 200,
    'noteDeleteThresholdPeriod' => '1 month',
    'noteEditThresholdPeriod' => '7 days',
    'isInstalled' => true,
    'siteUrl' => 'http://localhost:8080/EspoCRM',
    'passwordSalt' => 'd2a8a691d4e134d8',
    'cryptKey' => '036b34d325b82f17e831daf6387d6c09',
    'fullTextSearchMinLength' => 4,
    'outboundEmailBccAddress' => '',
    'massEmailDisableMandatoryOptOutLink' => false,
    'userThemesDisabled' => false,
    'avatarsDisabled' => false,
    'scopeColorsDisabled' => false,
    'tabIconsDisabled' => false,
    'dashletsOptions' => (object) [

    ],
    'notificationSoundsDisabled' => false,
    'mentionEmailNotifications' => false,
    'streamEmailNotifications' => false
];
?>
