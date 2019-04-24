<?php
return [
    'cacheTimestamp' => 1556126883,
    'database' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'port' => '',
        'charset' => 'utf8mb4',
        'dbname' => 'ESPOCRM',
        'user' => 'root',
        'password' => ''
    ],
    'useCache' => true,
    'recordsPerPage' => 20,
    'recordsPerPageSmall' => 5,
    'applicationName' => 'EspoCRM',
    'version' => '5.6.1',
    'timeZone' => 'UTC',
    'dateFormat' => 'MM/DD/YYYY',
    'timeFormat' => 'hh:mm a',
    'weekStart' => 1,
    'thousandSeparator' => '.',
    'decimalMark' => ',',
    'exportDelimiter' => ';',
    'currencyList' => [
        0 => 'USD'
    ],
    'defaultCurrency' => 'USD',
    'baseCurrency' => 'USD',
    'currencyRates' => [
        
    ],
    'outboundEmailIsShared' => true,
    'outboundEmailFromName' => 'EspoCRM',
    'outboundEmailFromAddress' => '',
    'smtpServer' => '',
    'smtpPort' => '25',
    'smtpAuth' => false,
    'smtpSecurity' => '',
    'smtpUsername' => '',
    'smtpPassword' => '',
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
        9 => 'fa_IR',
        10 => 'fr_FR',
        11 => 'id_ID',
        12 => 'it_IT',
        13 => 'lt_LT',
        14 => 'lv_LV',
        15 => 'nb_NO',
        16 => 'nl_NL',
        17 => 'tr_TR',
        18 => 'sk_SK',
        19 => 'sr_RS',
        20 => 'ro_RO',
        21 => 'ru_RU',
        22 => 'pl_PL',
        23 => 'pt_BR',
        24 => 'uk_UA',
        25 => 'vi_VN',
        26 => 'zh_CN'
    ],
    'language' => 'es_ES',
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
        0 => 'Campaign',
        1 => 'Formularios',
        2 => 'User',
        3 => 'KnowledgeBaseArticle',
        4 => 'Calendar',
        5 => 'Contact',
        6 => 'Task',
        7 => 'Solicitudes',
        8 => 'Categoria',
        9 => 'Subcategoria',
        10 => 'Empresa',
        11 => 'Trabajador',
        12 => 'Beneficios',
        13 => 'DoctosBeneficio',
        14 => 'Ciudad',
        15 => 'Comuna',
        16 => 'Proveedor',
        17 => 'Rol'
    ],
    'quickCreateList' => [
        0 => 'Contact',
        1 => 'Account',
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
        3 => 'Email'
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
    'emailNotificationsDelay' => 30,
    'emailMessageMaxSize' => 10,
    'notificationsCheckInterval' => 10,
    'disabledCountQueryEntityList' => [
        0 => 'Email'
    ],
    'maxEmailAccountCount' => 2,
    'followCreatedEntities' => false,
    'b2cMode' => false,
    'restrictedMode' => false,
    'theme' => 'EspoVertical',
    'massEmailMaxPerHourCount' => 100,
    'personalEmailMaxPortionSize' => 50,
    'inboundEmailMaxPortionSize' => 50,
    'authTokenLifetime' => 0,
    'authTokenMaxIdleTime' => 120,
    'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
    'addressFormat' => 1,
    'displayListViewRecordCount' => false,
    'dashboardLayout' => [
        0 => (object) [
            'name' => 'My Espo',
            'layout' => [
                0 => (object) [
                    'id' => 'default-activities',
                    'name' => 'Activities',
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
    'cleanupJobPeriod' => '1 month',
    'cleanupActionHistoryPeriod' => '15 days',
    'cleanupAuthTokenPeriod' => '1 month',
    'currencyFormat' => 2,
    'currencyDecimalPlaces' => 2,
    'aclStrictMode' => false,
    'aclAllowDeleteCreated' => false,
    'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
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
    'emailForceUseExternalClient' => false,
    'useWebSocket' => false,
    'isInstalled' => true,
    'siteUrl' => 'http://localhost/EspoCRM/EspoCRM',
    'passwordSalt' => '133b03d37f60d2ed',
    'cryptKey' => '90eb758ade1698926ddeb3811ab67a47',
    'fullTextSearchMinLength' => 4,
    'authTokenPreventConcurrent' => false,
    'defaultPortalId' => '5cb959048f98c7eb7',
    'userThemesDisabled' => false,
    'dashletsOptions' => (object) [
        'default-activities' => (object) [
            'title' => 'Mis Beneficios',
            'autorefreshInterval' => 0.5,
            'enabledScopeList' => [
                0 => 'Task'
            ],
            'displayRecords' => 10,
            'futureDays' => 3
        ]
    ],
    'avatarsDisabled' => false,
    'scopeColorsDisabled' => false,
    'tabIconsDisabled' => false
];
?>