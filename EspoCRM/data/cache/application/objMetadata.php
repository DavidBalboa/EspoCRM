<?php
return (object) [
    'app' => (object) [
        'acl' => (object) [
            'mandatory' => (object) [
                'scopeLevel' => (object) [
                    'Note' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'own',
                        'create' => 'yes'
                    ],
                    'Portal' => (object) [
                        'read' => 'all',
                        'edit' => 'no',
                        'delete' => 'no',
                        'create' => 'no'
                    ],
                    'Attachment' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'own',
                        'create' => 'yes'
                    ],
                    'EmailAccount' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'own',
                        'create' => 'yes'
                    ],
                    'EmailFilter' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'own',
                        'create' => 'yes'
                    ],
                    'EmailFolder' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'own',
                        'create' => 'yes'
                    ],
                    'Preferences' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'no',
                        'create' => 'no'
                    ],
                    'Notification' => (object) [
                        'read' => 'own',
                        'edit' => 'no',
                        'delete' => 'own',
                        'create' => 'no'
                    ],
                    'ActionHistoryRecord' => (object) [
                        'read' => 'no',
                        'edit' => 'no',
                        'delete' => 'no',
                        'create' => 'no'
                    ],
                    'Role' => false,
                    'PortalRole' => false,
                    'MassEmail' => 'Campaign',
                    'CampaignLogRecord' => 'Campaign',
                    'CampaignTrackingUrl' => 'Campaign',
                    'EmailQueueItem' => false
                ],
                'fieldLevel' => (object) [
                    
                ],
                'scopeFieldLevel' => (object) [
                    'Attachment' => (object) [
                        'parent' => false
                    ],
                    'EmailFolder' => (object) [
                        'assignedUser' => false
                    ],
                    'Email' => (object) [
                        'inboundEmails' => false,
                        'emailAccounts' => false
                    ],
                    'User' => (object) [
                        'password' => false,
                        'passwordConfirm' => false
                    ]
                ]
            ],
            'default' => (object) [
                'scopeLevel' => (object) [
                    'User' => (object) [
                        'read' => 'all',
                        'edit' => 'no'
                    ],
                    'Import' => false
                ],
                'fieldLevel' => (object) [
                    
                ],
                'scopeFieldLevel' => (object) [
                    'User' => (object) [
                        'gender' => false
                    ]
                ]
            ],
            'strictDefault' => (object) [
                'scopeLevel' => (object) [
                    'User' => (object) [
                        'read' => 'own',
                        'edit' => 'no'
                    ],
                    'Import' => false
                ],
                'fieldLevel' => (object) [
                    
                ],
                'scopeFieldLevel' => (object) [
                    'User' => (object) [
                        'gender' => false
                    ]
                ]
            ],
            'valuePermissionList' => [
                0 => 'assignmentPermission',
                1 => 'userPermission',
                2 => 'portalPermission',
                3 => 'groupEmailAccountPermission',
                4 => 'exportPermission',
                5 => 'dataPrivacyPermission'
            ],
            'valuePermissionHighestLevels' => (object) [
                'assignmentPermission' => 'all',
                'userPermission' => 'all',
                'portalPermission' => 'yes',
                'groupEmailAccountPermission' => 'all',
                'exportPermission' => 'yes',
                'dataPrivacyPermission' => 'yes'
            ],
            'permissionsDefaults' => (object) [
                'assignmentPermission' => 'all',
                'userPermission' => 'all',
                'portalPermission' => 'no',
                'groupEmailAccountPermission' => 'no',
                'exportPermission' => 'yes',
                'dataPrivacyPermission' => 'no'
            ],
            'permissionsStrictDefaults' => (object) [
                'assignmentPermission' => 'no',
                'userPermission' => 'no',
                'portalPermission' => 'no',
                'groupEmailAccountPermission' => 'no',
                'exportPermission' => 'no',
                'dataPrivacyPermission' => 'no'
            ],
            'scopeLevelTypesDefaults' => (object) [
                'boolean' => true,
                'record' => (object) [
                    'read' => 'all',
                    'stream' => 'all',
                    'edit' => 'all',
                    'delete' => 'no',
                    'create' => 'yes'
                ]
            ],
            'scopeLevelTypesStrictDefaults' => (object) [
                'boolean' => false,
                'record' => false
            ]
        ],
        'aclPortal' => (object) [
            'mandatory' => (object) [
                'scopeLevel' => (object) [
                    'User' => (object) [
                        'read' => 'own',
                        'edit' => 'no',
                        'delete' => 'no',
                        'stream' => 'no',
                        'create' => 'no'
                    ],
                    'Team' => false,
                    'Note' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'own',
                        'create' => 'yes'
                    ],
                    'Notification' => (object) [
                        'read' => 'own',
                        'edit' => 'no',
                        'delete' => 'own',
                        'create' => 'no'
                    ],
                    'Portal' => false,
                    'Attachment' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'own',
                        'create' => 'yes'
                    ],
                    'EmailAccount' => false,
                    'ExternalAccount' => false,
                    'Role' => false,
                    'PortalRole' => false,
                    'EmailFilter' => false,
                    'EmailFolder' => false,
                    'EmailTemplate' => false,
                    'ActionHistoryRecord' => false,
                    'Preferences' => (object) [
                        'read' => 'own',
                        'edit' => 'own',
                        'delete' => 'no',
                        'create' => 'no'
                    ],
                    'MassEmail' => 'Campaign',
                    'CampaignLogRecord' => 'Campaign',
                    'CampaignTrackingUrl' => 'Campaign',
                    'EmailQueueItem' => false
                ],
                'fieldLevel' => (object) [
                    
                ],
                'scopeFieldLevel' => (object) [
                    'Preferences' => (object) [
                        'smtpServer' => false,
                        'smtpPort' => false,
                        'smtpSecurity' => false,
                        'smtpUsername' => false,
                        'smtpPassword' => false,
                        'smtpAuth' => false,
                        'receiveAssignmentEmailNotifications' => false,
                        'receiveMentionEmailNotifications' => false,
                        'defaultReminders' => false,
                        'autoFollowEntityTypeList' => false,
                        'emailReplyForceHtml' => false,
                        'emailReplyToAllByDefault' => false,
                        'signature' => false,
                        'followCreatedEntities' => false,
                        'followEntityOnStreamPost' => false,
                        'doNotFillAssignedUserIfNotRequired' => false,
                        'useCustomTabList' => false,
                        'tabList' => false,
                        'emailUseExternalClient' => false,
                        'dashboardLayout' => false
                    ],
                    'Call' => (object) [
                        'reminders' => false
                    ],
                    'Meeting' => (object) [
                        'reminders' => false
                    ],
                    'Attachment' => (object) [
                        'parent' => false
                    ],
                    'Note' => (object) [
                        'isInternal' => false,
                        'isGlobal' => false
                    ],
                    'Email' => (object) [
                        'inboundEmails' => false,
                        'emailAccounts' => false
                    ],
                    'User' => (object) [
                        'isAdmin' => false,
                        'contact' => false,
                        'accounts' => false,
                        'portalRoles' => false,
                        'portals' => false,
                        'isActive' => false
                    ]
                ]
            ],
            'strictDefault' => (object) [
                'scopeLevel' => (object) [
                    
                ],
                'fieldLevel' => (object) [
                    'assignedUser' => (object) [
                        'read' => 'yes',
                        'edit' => 'no'
                    ],
                    'assignedUsers' => (object) [
                        'read' => 'yes',
                        'edit' => 'no'
                    ],
                    'teams' => false
                ],
                'scopeFieldLevel' => (object) [
                    'Call' => (object) [
                        'users' => (object) [
                            'read' => 'yes',
                            'edit' => 'no'
                        ],
                        'leads' => false
                    ],
                    'Meeting' => (object) [
                        'users' => (object) [
                            'read' => 'yes',
                            'edit' => 'no'
                        ],
                        'leads' => false
                    ],
                    'KnowledgeBaseArticle' => (object) [
                        'assignedUser' => false
                    ],
                    'User' => (object) [
                        'gender' => false
                    ]
                ]
            ],
            'valuePermissionList' => [
                0 => 'exportPermission'
            ],
            'permissionsStrictDefaults' => (object) [
                'exportPermission' => 'no'
            ],
            'scopeLevelTypesStrictDefaults' => (object) [
                'boolean' => false,
                'record' => false
            ],
            'default' => (object) [
                'scopeFieldLevel' => (object) [
                    'KnowledgeBaseArticle' => (object) [
                        'portals' => false,
                        'order' => false,
                        'status' => false,
                        'assignedUser' => false
                    ],
                    'Case' => (object) [
                        'status' => (object) [
                            'read' => 'yes',
                            'edit' => 'no'
                        ],
                        'account' => (object) [
                            'read' => 'yes',
                            'edit' => 'no'
                        ],
                        'contacts' => (object) [
                            'read' => 'yes',
                            'edit' => 'no'
                        ],
                        'contact' => (object) [
                            'read' => 'yes',
                            'edit' => 'no'
                        ]
                    ]
                ]
            ]
        ],
        'adminPanel' => (object) [
            'system' => (object) [
                'label' => 'System',
                'itemList' => [
                    0 => (object) [
                        'url' => '#Admin/settings',
                        'label' => 'Settings',
                        'description' => 'settings'
                    ],
                    1 => (object) [
                        'url' => '#Admin/userInterface',
                        'label' => 'User Interface',
                        'description' => 'userInterface'
                    ],
                    2 => (object) [
                        'url' => '#Admin/authentication',
                        'label' => 'Authentication',
                        'description' => 'authentication'
                    ],
                    3 => (object) [
                        'url' => '#ScheduledJob',
                        'label' => 'Scheduled Jobs',
                        'description' => 'scheduledJob'
                    ],
                    4 => (object) [
                        'url' => '#Admin/currency',
                        'label' => 'Currency',
                        'description' => 'currency'
                    ],
                    5 => (object) [
                        'url' => '#Admin/notifications',
                        'label' => 'Notifications',
                        'description' => 'notifications'
                    ],
                    6 => (object) [
                        'url' => '#Admin/integrations',
                        'label' => 'Integrations',
                        'description' => 'integrations'
                    ],
                    7 => (object) [
                        'url' => '#Admin/upgrade',
                        'label' => 'Upgrade',
                        'description' => 'upgrade'
                    ],
                    8 => (object) [
                        'url' => '#Admin/clearCache',
                        'label' => 'Clear Cache',
                        'description' => 'clearCache'
                    ],
                    9 => (object) [
                        'url' => '#Admin/rebuild',
                        'label' => 'Rebuild',
                        'description' => 'rebuild'
                    ]
                ],
                'order' => 0
            ],
            'users' => (object) [
                'label' => 'Users',
                'itemList' => [
                    0 => (object) [
                        'url' => '#User',
                        'label' => 'Users',
                        'description' => 'users'
                    ],
                    1 => (object) [
                        'url' => '#Team',
                        'label' => 'Teams',
                        'description' => 'teams'
                    ],
                    2 => (object) [
                        'url' => '#Role',
                        'label' => 'Roles',
                        'description' => 'roles'
                    ],
                    3 => (object) [
                        'url' => '#Admin/authLog',
                        'label' => 'Auth Log',
                        'description' => 'authLog'
                    ],
                    4 => (object) [
                        'url' => '#Admin/authTokens',
                        'label' => 'Auth Tokens',
                        'description' => 'authTokens'
                    ],
                    5 => (object) [
                        'url' => '#ActionHistoryRecord',
                        'label' => 'Action History',
                        'description' => 'actionHistory'
                    ]
                ],
                'order' => 5
            ],
            'customization' => (object) [
                'label' => 'Customization',
                'itemList' => [
                    0 => (object) [
                        'url' => '#Admin/layouts',
                        'label' => 'Layout Manager',
                        'description' => 'layoutManager'
                    ],
                    1 => (object) [
                        'url' => '#Admin/entityManager',
                        'label' => 'Entity Manager',
                        'description' => 'entityManager'
                    ],
                    2 => (object) [
                        'url' => '#Admin/labelManager',
                        'label' => 'Label Manager',
                        'description' => 'labelManager'
                    ],
                    3 => (object) [
                        'url' => '#Admin/extensions',
                        'label' => 'Extensions',
                        'description' => 'extensions'
                    ]
                ],
                'order' => 10
            ],
            'email' => (object) [
                'label' => 'Email',
                'itemList' => [
                    0 => (object) [
                        'url' => '#Admin/outboundEmails',
                        'label' => 'Outbound Emails',
                        'description' => 'outboundEmails'
                    ],
                    1 => (object) [
                        'url' => '#Admin/inboundEmails',
                        'label' => 'Inbound Emails',
                        'description' => 'inboundEmails'
                    ],
                    2 => (object) [
                        'url' => '#InboundEmail',
                        'label' => 'Group Email Accounts',
                        'description' => 'groupEmailAccounts'
                    ],
                    3 => (object) [
                        'url' => '#EmailAccount',
                        'label' => 'Personal Email Accounts',
                        'description' => 'personalEmailAccounts'
                    ],
                    4 => (object) [
                        'url' => '#EmailFilter',
                        'label' => 'Email Filters',
                        'description' => 'emailFilters'
                    ],
                    5 => (object) [
                        'url' => '#EmailTemplate',
                        'label' => 'Email Templates',
                        'description' => 'emailTemplates'
                    ]
                ],
                'order' => 15
            ],
            'portal' => (object) [
                'label' => 'Portal',
                'itemList' => [
                    0 => (object) [
                        'url' => '#Portal',
                        'label' => 'Portals',
                        'description' => 'portals'
                    ],
                    1 => (object) [
                        'url' => '#PortalUser',
                        'label' => 'Portal Users',
                        'description' => 'portalUsers'
                    ],
                    2 => (object) [
                        'url' => '#PortalRole',
                        'label' => 'Portal Roles',
                        'description' => 'portalRoles'
                    ]
                ],
                'order' => 20
            ],
            'data' => (object) [
                'label' => 'Data',
                'itemList' => [
                    0 => (object) [
                        'url' => '#Import',
                        'label' => 'Import',
                        'description' => 'import'
                    ],
                    1 => (object) [
                        'url' => '#LeadCapture',
                        'label' => 'Lead Capture',
                        'description' => 'leadCapture'
                    ],
                    2 => (object) [
                        'url' => '#Attachment',
                        'label' => 'Attachments',
                        'description' => 'attachments'
                    ]
                ],
                'order' => 25
            ]
        ],
        'currency' => (object) [
            'symbolMap' => (object) [
                'AED' => 'د.إ',
                'AFN' => '؋',
                'ALL' => 'L',
                'ANG' => 'ƒ',
                'AOA' => 'Kz',
                'ARS' => '$',
                'AUD' => '$',
                'AWG' => 'ƒ',
                'AZN' => '₼',
                'BAM' => 'KM',
                'BBD' => '$',
                'BDT' => '৳',
                'BGN' => 'лв',
                'BHD' => '.د.ب',
                'BIF' => 'FBu',
                'BMD' => '$',
                'BND' => '$',
                'BOB' => 'Bs.',
                'BRL' => 'R$',
                'BSD' => '$',
                'BTN' => 'Nu.',
                'BWP' => 'P',
                'BYR' => 'p.',
                'BZD' => 'BZ$',
                'CAD' => '$',
                'CDF' => 'FC',
                'CHF' => 'Fr.',
                'CLP' => '$',
                'CNY' => '¥',
                'COP' => '$',
                'CRC' => '₡',
                'CUC' => '$',
                'CUP' => '₱',
                'CVE' => '$',
                'CZK' => 'Kč',
                'DJF' => 'Fdj',
                'DKK' => 'kr',
                'DOP' => 'RD$',
                'DZD' => 'دج',
                'EEK' => 'kr',
                'EGP' => '£',
                'ERN' => 'Nfk',
                'ETB' => 'Br',
                'EUR' => '€',
                'FJD' => '$',
                'FKP' => '£',
                'GBP' => '£',
                'GEL' => '₾',
                'GGP' => '£',
                'GHC' => '₵',
                'GHS' => 'GH₵',
                'GIP' => '£',
                'GMD' => 'D',
                'GNF' => 'FG',
                'GTQ' => 'Q',
                'GYD' => '$',
                'HKD' => '$',
                'HNL' => 'L',
                'HRK' => 'kn',
                'HTG' => 'G',
                'HUF' => 'Ft',
                'IDR' => 'Rp',
                'ILS' => '₪',
                'IMP' => '£',
                'INR' => '₹',
                'IQD' => 'ع.د',
                'IRR' => '﷼',
                'ISK' => 'kr',
                'JEP' => '£',
                'JMD' => 'J$',
                'JPY' => '¥',
                'KES' => 'KSh',
                'KGS' => 'лв',
                'KHR' => '៛',
                'KMF' => 'CF',
                'KPW' => '₩',
                'KRW' => '₩',
                'KYD' => '$',
                'KZT' => '₸',
                'LAK' => '₭',
                'LBP' => '£',
                'LKR' => '₨',
                'LRD' => '$',
                'LSL' => 'M',
                'LTL' => 'Lt',
                'LVL' => 'Ls',
                'MAD' => 'MAD',
                'MDL' => 'lei',
                'MGA' => 'Ar',
                'MKD' => 'ден',
                'MMK' => 'K',
                'MNT' => '₮',
                'MOP' => 'MOP$',
                'MUR' => '₨',
                'MVR' => 'Rf',
                'MWK' => 'MK',
                'MXN' => '$',
                'MYR' => 'RM',
                'MZN' => 'MT',
                'NAD' => '$',
                'NGN' => '₦',
                'NIO' => 'C$',
                'NOK' => 'kr',
                'NPR' => '₨',
                'NZD' => '$',
                'OMR' => '﷼',
                'PAB' => 'B/.',
                'PEN' => 'S/.',
                'PGK' => 'K',
                'PHP' => '₱',
                'PKR' => '₨',
                'PLN' => 'zł',
                'PYG' => 'Gs',
                'QAR' => '﷼',
                'RMB' => '￥',
                'RON' => 'lei',
                'RSD' => 'Дин.',
                'RUB' => '₽',
                'RWF' => 'R₣',
                'SAR' => '﷼',
                'SBD' => '$',
                'SCR' => '₨',
                'SDG' => 'ج.س.',
                'SEK' => 'kr',
                'SGD' => '$',
                'SHP' => '£',
                'SLL' => 'Le',
                'SOS' => 'S',
                'SRD' => '$',
                'SSP' => '£',
                'STD' => 'Db',
                'SVC' => '$',
                'SYP' => '£',
                'SZL' => 'E',
                'THB' => '฿',
                'TJS' => 'SM',
                'TMT' => 'T',
                'TND' => 'د.ت',
                'TOP' => 'T$',
                'TRL' => '₤',
                'TRY' => '₺',
                'TTD' => 'TT$',
                'TVD' => '$',
                'TWD' => 'NT$',
                'TZS' => 'TSh',
                'UAH' => '₴',
                'UGX' => 'USh',
                'USD' => '$',
                'UYU' => '$U',
                'UZS' => 'лв',
                'VEF' => 'Bs',
                'VND' => '₫',
                'VUV' => 'VT',
                'WST' => 'WS$',
                'XAF' => 'FCFA',
                'XBT' => 'Ƀ',
                'XCD' => '$',
                'XOF' => 'CFA',
                'XPF' => '₣',
                'YER' => '﷼',
                'ZAR' => 'R',
                'ZWD' => 'Z$',
                'BTC' => '฿'
            ]
        ],
        'defaultDashboardLayouts' => (object) [
            'Standard' => [
                0 => (object) [
                    'name' => 'My Espo',
                    'layout' => [
                        0 => (object) [
                            'id' => 'defaultActivities',
                            'name' => 'Activities',
                            'x' => 2,
                            'y' => 2,
                            'width' => 2,
                            'height' => 2
                        ],
                        1 => (object) [
                            'id' => 'defaultStream',
                            'name' => 'Stream',
                            'x' => 0,
                            'y' => 0,
                            'width' => 2,
                            'height' => 4
                        ],
                        2 => (object) [
                            'id' => 'defaultTasks',
                            'name' => 'Tasks',
                            'x' => 2,
                            'y' => 4,
                            'width' => 2,
                            'height' => 2
                        ]
                    ]
                ]
            ]
        ],
        'defaultDashboardOptions' => (object) [
            'Standard' => (object) [
                'defaultStream' => (object) [
                    'displayRecords' => 10
                ]
            ]
        ],
        'deprecatedControllerActions' => (object) [
            'BpmnProcess' => (object) [
                'postActionStop' => true
            ],
            'GoogleContacts' => (object) [
                'actionPush' => true
            ],
            'MailChimp' => (object) [
                'actionUpdate' => true
            ],
            'MailChimpCampaign' => (object) [
                'actionCreate' => true
            ],
            'MailChimpList' => (object) [
                'actionCreate' => true
            ],
            'MailChimpListGroup' => (object) [
                'actionCreate' => true
            ],
            'Quote' => (object) [
                'postActionGetAttributesForEmail' => true
            ],
            'Report' => (object) [
                'actionPopulateTargetList' => true,
                'actionSyncTargetListWithReports' => true,
                'postActionExportList' => true,
                'postActionGetEmailAttributes' => true
            ],
            'Voip' => (object) [
                'actionChangeUserSettings' => true,
                'actionAddConnector' => true,
                'actionRemoveConnector' => true,
                'postActionTestConnection' => true
            ],
            'VoipEvent' => (object) [
                'actionCancel' => true,
                'actionSave' => true,
                'actionDial' => true,
                'actionDialFromCall' => true,
                'actionTestConnection' => true
            ],
            'VoipMessage' => (object) [
                'actionCancel' => true
            ]
        ],
        'emailNotifications' => (object) [
            'handlerClassNameMap' => (object) [
                'Case' => '\\Espo\\Modules\\Crm\\Business\\EmailNotificationHandlers\\CaseObj'
            ]
        ],
        'entityTemplateList' => [
            0 => 'Base',
            1 => 'BasePlus',
            2 => 'Event',
            3 => 'Person',
            4 => 'Company'
        ],
        'export' => (object) [
            'formatList' => [
                0 => 'xlsx',
                1 => 'csv'
            ],
            'formatDefs' => (object) [
                'csv' => (object) [
                    'mimeType' => 'text/csv',
                    'fileExtension' => 'csv'
                ],
                'xlsx' => (object) [
                    'mimeType' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    'fileExtension' => 'xlsx'
                ]
            ],
            'exportFormatClassNameMap' => (object) [
                'csv' => '\\Espo\\Core\\Export\\Csv',
                'xlsx' => '\\Espo\\Core\\Export\\Xlsx'
            ]
        ],
        'fileStorage' => (object) [
            'implementationClassNameMap' => (object) [
                'EspoUploadDir' => '\\Espo\\Core\\FileStorage\\Storages\\EspoUploadDir'
            ]
        ],
        'formula' => (object) [
            'functionList' => [
                0 => (object) [
                    'name' => 'ifThenElse',
                    'insertText' => 'ifThenElse(CONDITION, CONSEQUENT, ALTERNATIVE)'
                ],
                1 => (object) [
                    'name' => 'ifThen',
                    'insertText' => 'ifThenElse(CONDITION, CONSEQUENT)'
                ],
                2 => (object) [
                    'name' => 'string\\concatenate',
                    'insertText' => 'string\\concatenate(STRING_1, STRING_2)'
                ],
                3 => (object) [
                    'name' => 'string\\substring',
                    'insertText' => 'string\\substring(STRING, START, LENGTH)'
                ],
                4 => (object) [
                    'name' => 'string\\trim',
                    'insertText' => 'string\\trim(STRING)'
                ],
                5 => (object) [
                    'name' => 'datetime\\today',
                    'insertText' => 'datetime\\today()'
                ],
                6 => (object) [
                    'name' => 'datetime\\now',
                    'insertText' => 'datetime\\now()'
                ],
                7 => (object) [
                    'name' => 'datetime\\format',
                    'insertText' => 'datetime\\format(VALUE)'
                ],
                8 => (object) [
                    'name' => 'datetime\\addMinutes',
                    'insertText' => 'datetime\\addMinutes(VALUE, MINUTES)'
                ],
                9 => (object) [
                    'name' => 'datetime\\addHours',
                    'insertText' => 'datetime\\addHours(VALUE, HOURS)'
                ],
                10 => (object) [
                    'name' => 'datetime\\addDays',
                    'insertText' => 'datetime\\addDays(VALUE, DAYS)'
                ],
                11 => (object) [
                    'name' => 'datetime\\addWeeks',
                    'insertText' => 'datetime\\addWeeks(VALUE, WEEKS)'
                ],
                12 => (object) [
                    'name' => 'datetime\\addMonths',
                    'insertText' => 'datetime\\addMonths(VALUE, MONTHS)'
                ],
                13 => (object) [
                    'name' => 'datetime\\addYears',
                    'insertText' => 'datetime\\addYears(VALUE, YEARS)'
                ],
                14 => (object) [
                    'name' => 'datetime\\diff',
                    'insertText' => 'datetime\\diff(VALUE_1, VALUE_2, INTERVAL_TYPE)'
                ],
                15 => (object) [
                    'name' => 'number\\format',
                    'insertText' => 'number\\format(VALUE)'
                ],
                16 => (object) [
                    'name' => 'number\\abs',
                    'insertText' => 'number\\abs(VALUE)'
                ],
                17 => (object) [
                    'name' => 'number\\round',
                    'insertText' => 'number\\round(VALUE, PRECISION)'
                ],
                18 => (object) [
                    'name' => 'entity\\isNew',
                    'insertText' => 'entity\\isNew()'
                ],
                19 => (object) [
                    'name' => 'entity\\isAttributeChanged',
                    'insertText' => 'entity\\isAttributeChanged(ATTRIBUTE)'
                ],
                20 => (object) [
                    'name' => 'entity\\isAttributeNotChanged',
                    'insertText' => 'entity\\isAttributeNotChanged(ATTRIBUTE)'
                ],
                21 => (object) [
                    'name' => 'entity\\attribute',
                    'insertText' => 'entity\\attribute(ATTRIBUTE)'
                ],
                22 => (object) [
                    'name' => 'entity\\attributeFetched',
                    'insertText' => 'entity\\attributeFetched(ATTRIBUTE)'
                ],
                23 => (object) [
                    'name' => 'entity\\setAttribute',
                    'insertText' => 'entity\\setAttribute(ATTRIBUTE, VALUE)'
                ],
                24 => (object) [
                    'name' => 'entity\\addLinkMultipleId',
                    'insertText' => 'entity\\addLinkMultipleId(LINK, ID)'
                ],
                25 => (object) [
                    'name' => 'entity\\hasLinkMultipleId',
                    'insertText' => 'entity\\hasLinkMultipleId(LINK, ID)'
                ],
                26 => (object) [
                    'name' => 'entity\\isRelated',
                    'insertText' => 'entity\\isRelated(LINK, ID)'
                ],
                27 => (object) [
                    'name' => 'env\\userAttribute',
                    'insertText' => 'env\\userAttribute(ATTRIBUTE)'
                ]
            ]
        ],
        'jsLibs' => (object) [
            'Flotr' => (object) [
                'path' => 'client/lib/flotr2.js',
                'exportsTo' => 'window',
                'exportsAs' => 'Flotr'
            ],
            'Summernote' => (object) [
                'path' => 'client/lib/summernote.min.js',
                'exportsTo' => '$',
                'exportsAs' => 'summernote'
            ],
            'Textcomplete' => (object) [
                'path' => 'client/lib/jquery.textcomplete.js',
                'exportsTo' => '$',
                'exportsAs' => 'textcomplete'
            ],
            'Select2' => (object) [
                'path' => 'client/lib/select2.min.js',
                'exportsTo' => '$',
                'exportsAs' => 'select2'
            ],
            'Selectize' => (object) [
                'path' => 'client/lib/selectize.min.js',
                'exportsTo' => '$',
                'exportsAs' => 'selectize'
            ],
            'Cropper' => (object) [
                'path' => 'client/lib/cropper.min.js',
                'exportsTo' => '$',
                'exportsAs' => 'cropper'
            ],
            'gridstack' => (object) [
                'path' => 'client/lib/gridstack.all.js',
                'exportsTo' => '$',
                'exportsAs' => 'gridstack'
            ],
            'Colorpicker' => (object) [
                'path' => 'client/lib/bootstrap-colorpicker.js',
                'exportsTo' => '$',
                'exportsAs' => 'colorpicker'
            ],
            'full-calendar' => (object) [
                'path' => 'client/modules/crm/lib/fullcalendar.min.js',
                'exportsTo' => '$',
                'exportsAs' => 'fullCalendar'
            ],
            'vis' => (object) [
                'path' => 'client/modules/crm/lib/vis.min.js',
                'exportsAs' => 'vis',
                'noAppCache' => true
            ]
        ],
        'popupNotifications' => (object) [
            'event' => (object) [
                'url' => 'Activities/action/popupNotifications',
                'interval' => 15,
                'view' => 'crm:views/meeting/popup-notification'
            ]
        ]
    ],
    'clientDefs' => (object) [
        'ActionHistoryRecord' => (object) [
            'controller' => 'controllers/record',
            'createDisabled' => true,
            'recordViews' => (object) [
                'list' => 'views/action-history-record/record/list'
            ],
            'modalViews' => (object) [
                'detail' => 'views/action-history-record/modals/detail'
            ]
        ],
        'Attachment' => (object) [
            'controller' => 'controllers/record',
            'createDisabled' => true,
            'recordViews' => (object) [
                'list' => 'views/attachment/record/list',
                'detail' => 'views/attachment/record/detail'
            ],
            'modalViews' => (object) [
                'detail' => 'views/attachment/modals/detail'
            ],
            'filterList' => [
                0 => 'orphan'
            ]
        ],
        'AuthLogRecord' => (object) [
            'controller' => 'controllers/record',
            'recordViews' => (object) [
                'list' => 'views/admin/auth-log-record/record/list',
                'detail' => 'views/admin/auth-log-record/record/detail',
                'detailSmall' => 'views/admin/auth-log-record/record/detail-small'
            ],
            'modalViews' => (object) [
                'detail' => 'views/admin/auth-log-record/modals/detail'
            ],
            'filterList' => [
                0 => 'accepted',
                1 => 'denied'
            ],
            'createDisabled' => true,
            'relationshipPanels' => (object) [
                'actionHistoryRecords' => (object) [
                    'create' => false,
                    'select' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-view-only'
                ]
            ]
        ],
        'AuthToken' => (object) [
            'controller' => 'controllers/record',
            'recordViews' => (object) [
                'list' => 'views/admin/auth-token/record/list',
                'detail' => 'views/admin/auth-token/record/detail',
                'detailSmall' => 'views/admin/auth-token/record/detail-small'
            ],
            'modalViews' => (object) [
                'detail' => 'views/admin/auth-token/modals/detail'
            ],
            'filterList' => [
                0 => 'active',
                1 => 'inactive'
            ],
            'createDisabled' => true,
            'relationshipPanels' => (object) [
                'actionHistoryRecords' => (object) [
                    'create' => false,
                    'select' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-view-only'
                ]
            ]
        ],
        'Dashboard' => (object) [
            'controller' => 'Controllers.Dashboard'
        ],
        'DynamicLogic' => (object) [
            'itemTypes' => (object) [
                'and' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/group-base',
                    'operator' => 'and'
                ],
                'or' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/group-base',
                    'operator' => 'or'
                ],
                'not' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/group-not',
                    'operator' => 'not'
                ],
                'equals' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
                    'operatorString' => '='
                ],
                'notEquals' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
                    'operatorString' => '&ne;'
                ],
                'greaterThan' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
                    'operatorString' => '&gt;'
                ],
                'lessThan' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
                    'operatorString' => '&lt;'
                ],
                'greaterThanOrEquals' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
                    'operatorString' => '&ge;'
                ],
                'lessThanOrEquals' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
                    'operatorString' => '&le;'
                ],
                'isEmpty' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
                    'operatorString' => '= &empty;'
                ],
                'isNotEmpty' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
                    'operatorString' => '&ne; &empty;'
                ],
                'isTrue' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
                    'operatorString' => '= 1'
                ],
                'isFalse' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
                    'operatorString' => '= 0'
                ],
                'in' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-multiple-values-base',
                    'operatorString' => '&isin;'
                ],
                'notIn' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-multiple-values-base',
                    'operatorString' => '&notin;'
                ],
                'isToday' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-is-today',
                    'operatorString' => '='
                ],
                'inFuture' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-in-future',
                    'operatorString' => '&isin;'
                ],
                'inPast' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-in-past',
                    'operatorString' => '&isin;'
                ],
                'contains' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-value-link',
                    'operatorString' => '&niv;'
                ],
                'notContains' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-value-link',
                    'operatorString' => '&notni;'
                ],
                'has' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-value-enum',
                    'operatorString' => '&niv;'
                ],
                'notHas' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions-string/item-value-enum',
                    'operatorString' => '&notni;'
                ]
            ],
            'fieldTypes' => (object) [
                'bool' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'isTrue',
                        1 => 'isFalse'
                    ]
                ],
                'varchar' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'equals',
                        1 => 'notEquals',
                        2 => 'isEmpty',
                        3 => 'isNotEmpty'
                    ]
                ],
                'email' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty'
                    ]
                ],
                'phone' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty'
                    ]
                ],
                'text' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty'
                    ]
                ],
                'int' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'equals',
                        3 => 'notEquals',
                        4 => 'greaterThan',
                        5 => 'lessThan',
                        6 => 'greaterThanOrEquals',
                        7 => 'lessThanOrEquals'
                    ]
                ],
                'float' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'equals',
                        3 => 'notEquals',
                        4 => 'greaterThan',
                        5 => 'lessThan',
                        6 => 'greaterThanOrEquals',
                        7 => 'lessThanOrEquals'
                    ]
                ],
                'date' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'isToday',
                        3 => 'inFuture',
                        4 => 'inPast',
                        5 => 'equals',
                        6 => 'notEquals'
                    ]
                ],
                'datetime' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'isToday',
                        3 => 'inFuture',
                        4 => 'inPast'
                    ]
                ],
                'datetimeOptional' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'isToday',
                        3 => 'inFuture',
                        4 => 'inPast'
                    ]
                ],
                'enum' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/enum',
                    'typeList' => [
                        0 => 'equals',
                        1 => 'notEquals',
                        2 => 'isEmpty',
                        3 => 'isNotEmpty',
                        4 => 'in',
                        5 => 'notIn'
                    ]
                ],
                'link' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/link',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'equals',
                        3 => 'notEquals'
                    ]
                ],
                'linkParent' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/link-parent',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'equals',
                        3 => 'notEquals'
                    ]
                ],
                'linkMultiple' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/link-multiple',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'contains',
                        3 => 'notContains'
                    ]
                ],
                'foreign' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
                    'typeList' => [
                        0 => 'equals',
                        1 => 'notEquals',
                        2 => 'isEmpty',
                        3 => 'isNotEmpty'
                    ]
                ],
                'id' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/enum',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty'
                    ]
                ],
                'multiEnum' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'has',
                        3 => 'notHas'
                    ]
                ],
                'array' => (object) [
                    'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
                    'typeList' => [
                        0 => 'isEmpty',
                        1 => 'isNotEmpty',
                        2 => 'has',
                        3 => 'notHas'
                    ]
                ]
            ],
            'conditionTypes' => (object) [
                'isTrue' => (object) [
                    'valueType' => 'empty'
                ],
                'isFalse' => (object) [
                    'valueType' => 'empty'
                ],
                'isEmpty' => (object) [
                    'valueType' => 'empty'
                ],
                'isNotEmpty' => (object) [
                    'valueType' => 'empty'
                ],
                'equals' => (object) [
                    'valueType' => 'field'
                ],
                'notEquals' => (object) [
                    'valueType' => 'field'
                ],
                'greaterThan' => (object) [
                    'valueType' => 'field'
                ],
                'lessThan' => (object) [
                    'valueType' => 'field'
                ],
                'greaterThanOrEquals' => (object) [
                    'valueType' => 'field'
                ],
                'lessThanOrEquals' => (object) [
                    'valueType' => 'field'
                ],
                'in' => (object) [
                    'valueType' => 'field'
                ],
                'notIn' => (object) [
                    'valueType' => 'field'
                ],
                'contains' => (object) [
                    'valueType' => 'custom'
                ],
                'notContains' => (object) [
                    'valueType' => 'custom'
                ],
                'inPast' => (object) [
                    'valueType' => 'empty'
                ],
                'isFuture' => (object) [
                    'valueType' => 'empty'
                ],
                'isToday' => (object) [
                    'valueType' => 'empty'
                ],
                'has' => (object) [
                    'valueType' => 'field'
                ],
                'notHas' => (object) [
                    'valueType' => 'field'
                ]
            ]
        ],
        'Email' => (object) [
            'controller' => 'controllers/email',
            'acl' => 'acl/email',
            'model' => 'models/email',
            'views' => (object) [
                'list' => 'views/email/list',
                'detail' => 'views/email/detail'
            ],
            'recordViews' => (object) [
                'list' => 'views/email/record/list',
                'detail' => 'views/email/record/detail',
                'edit' => 'views/email/record/edit',
                'editQuick' => 'views/email/record/edit-quick',
                'detailQuick' => 'views/email/record/detail-quick',
                'compose' => 'views/email/record/compose'
            ],
            'modalViews' => (object) [
                'detail' => 'views/email/modals/detail',
                'compose' => 'views/modals/compose-email'
            ],
            'quickCreateModalType' => 'compose',
            'menu' => (object) [
                'list' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Compose',
                            'action' => 'composeEmail',
                            'style' => 'danger',
                            'acl' => 'create'
                        ]
                    ],
                    'dropdown' => [
                        0 => (object) [
                            'label' => 'Archive Email',
                            'link' => '#Email/create',
                            'acl' => 'create'
                        ],
                        1 => (object) [
                            'label' => 'Email Templates',
                            'link' => '#EmailTemplate',
                            'acl' => 'read',
                            'aclScope' => 'EmailTemplate'
                        ],
                        2 => (object) [
                            'label' => 'Folders',
                            'link' => '#EmailFolder'
                        ],
                        3 => (object) [
                            'label' => 'Filters',
                            'link' => '#EmailFilter'
                        ]
                    ]
                ],
                'detail' => (object) [
                    'dropdown' => [
                        0 => (object) [
                            'label' => 'Reply',
                            'action' => 'reply',
                            'acl' => 'read'
                        ],
                        1 => (object) [
                            'label' => 'Reply to All',
                            'action' => 'replyToAll',
                            'acl' => 'read'
                        ],
                        2 => (object) [
                            'label' => 'Forward',
                            'action' => 'forward',
                            'acl' => 'read'
                        ]
                    ]
                ]
            ],
            'filterList' => [
                
            ],
            'defaultFilterData' => (object) [
                
            ],
            'boolFilterList' => [
                
            ],
            'iconClass' => 'fas fa-envelope'
        ],
        'EmailAccount' => (object) [
            'controller' => 'controllers/email-account',
            'recordViews' => (object) [
                'list' => 'views/email-account/record/list',
                'detail' => 'views/email-account/record/detail',
                'edit' => 'views/email-account/record/edit'
            ],
            'views' => (object) [
                'list' => 'views/email-account/list'
            ],
            'searchPanelDisabled' => true,
            'formDependency' => (object) [
                'storeSentEmails' => (object) [
                    'map' => (object) [
                        'true' => [
                            0 => (object) [
                                'action' => 'show',
                                'fields' => [
                                    0 => 'sentFolder'
                                ]
                            ],
                            1 => (object) [
                                'action' => 'setRequired',
                                'fields' => [
                                    0 => 'sentFolder'
                                ]
                            ]
                        ]
                    ],
                    'default' => [
                        0 => (object) [
                            'action' => 'hide',
                            'fields' => [
                                0 => 'sentFolder'
                            ]
                        ],
                        1 => (object) [
                            'action' => 'setNotRequired',
                            'fields' => [
                                0 => 'sentFolder'
                            ]
                        ]
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'filters' => (object) [
                    'select' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-edit-and-remove'
                ],
                'emails' => (object) [
                    'select' => false,
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/remove-only'
                ]
            ]
        ],
        'EmailFilter' => (object) [
            'controller' => 'controllers/record',
            'modalViews' => (object) [
                'edit' => 'views/email-filter/modals/edit'
            ],
            'recordViews' => (object) [
                'detail' => 'views/email-filter/record/detail',
                'edit' => 'views/email-filter/record/edit',
                'editQuick' => 'views/email-filter/record/edit-small',
                'detailQuick' => 'views/email-filter/record/detail-small'
            ],
            'searchPanelDisabled' => false,
            'menu' => (object) [
                'list' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Emails',
                            'link' => '#Email',
                            'style' => 'default',
                            'aclScope' => 'Email'
                        ]
                    ]
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ]
        ],
        'EmailFolder' => (object) [
            'controller' => 'controllers/record',
            'views' => (object) [
                'list' => 'views/email-folder/list'
            ],
            'recordViews' => (object) [
                'list' => 'views/email-folder/record/list'
            ],
            'menu' => (object) [
                'list' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Emails',
                            'link' => '#Email',
                            'style' => 'default',
                            'aclScope' => 'Email'
                        ]
                    ]
                ]
            ],
            'searchPanelDisabled' => true
        ],
        'EmailTemplate' => (object) [
            'controller' => 'controllers/record',
            'views' => (object) [
                'list' => 'views/email-template/list'
            ],
            'recordViews' => (object) [
                'edit' => 'views/email-template/record/edit',
                'detail' => 'views/email-template/record/detail',
                'editQuick' => 'views/email-template/record/edit-quick'
            ],
            'modalViews' => (object) [
                'select' => 'views/modals/select-records-with-categories'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'information',
                        'label' => 'Info',
                        'view' => 'views/email-template/record/panels/information'
                    ]
                ],
                'edit' => [
                    0 => (object) [
                        'name' => 'information',
                        'label' => 'Info',
                        'view' => 'views/email-template/record/panels/information'
                    ]
                ]
            ],
            'menu' => (object) [
                'list' => (object) [
                    'dropdown' => [
                        0 => (object) [
                            'label' => 'Manage Categories',
                            'link' => '#EmailTemplateCategory',
                            'acl' => 'edit',
                            'aclScope' => 'EmailTemplateCategory'
                        ]
                    ]
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'filterList' => [
                0 => 'actual'
            ],
            'placeholderList' => [
                0 => 'optOutUrl',
                1 => 'optOutLink'
            ]
        ],
        'EmailTemplateCategory' => (object) [
            'controller' => 'controllers/record-tree',
            'collection' => 'collections/tree',
            'menu' => (object) [
                'listTree' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'List View',
                            'link' => '#EmailTemplateCategory/list',
                            'acl' => 'read',
                            'style' => 'default'
                        ],
                        1 => (object) [
                            'label' => 'Email Templates',
                            'link' => '#EmailTemplate',
                            'acl' => 'read',
                            'aclScope' => 'EmailTemplate',
                            'style' => 'default'
                        ]
                    ]
                ],
                'list' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Tree View',
                            'link' => '#EmailTemplateCategory',
                            'acl' => 'read',
                            'style' => 'default'
                        ],
                        1 => (object) [
                            'label' => 'Email Templates',
                            'link' => '#EmailTemplate',
                            'acl' => 'read',
                            'aclScope' => 'EmailTemplate',
                            'style' => 'default'
                        ]
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'emailTemplates' => (object) [
                    'create' => false
                ]
            ]
        ],
        'ExternalAccount' => (object) [
            'controller' => 'controllers/external-account'
        ],
        'Import' => (object) [
            'controller' => 'controllers/import',
            'acl' => 'acl/import',
            'recordViews' => (object) [
                'list' => 'views/import/record/list',
                'detail' => 'views/import/record/detail'
            ],
            'views' => (object) [
                'list' => 'views/import/list',
                'detail' => 'views/import/detail'
            ],
            'bottomPanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'imported',
                        'label' => 'Imported',
                        'view' => 'views/import/record/panels/imported'
                    ],
                    1 => (object) [
                        'name' => 'duplicates',
                        'label' => 'Duplicates',
                        'view' => 'views/import/record/panels/duplicates',
                        'rowActionsView' => 'views/import/record/row-actions/duplicates'
                    ],
                    2 => (object) [
                        'name' => 'updated',
                        'label' => 'Updated',
                        'view' => 'views/import/record/panels/updated'
                    ]
                ]
            ],
            'searchPanelDisabled' => true,
            'iconClass' => 'fas fa-file-import'
        ],
        'InboundEmail' => (object) [
            'recordViews' => (object) [
                'detail' => 'views/inbound-email/record/detail',
                'edit' => 'views/inbound-email/record/edit',
                'list' => 'views/inbound-email/record/list'
            ],
            'formDependency' => (object) [
                'reply' => (object) [
                    'map' => (object) [
                        'true' => [
                            0 => (object) [
                                'action' => 'show',
                                'fields' => [
                                    0 => 'replyEmailTemplate',
                                    1 => 'replyFromAddress',
                                    2 => 'replyFromName'
                                ]
                            ],
                            1 => (object) [
                                'action' => 'setRequired',
                                'fields' => [
                                    0 => 'replyEmailTemplate'
                                ]
                            ]
                        ]
                    ],
                    'default' => [
                        0 => (object) [
                            'action' => 'hide',
                            'fields' => [
                                0 => 'replyEmailTemplate',
                                1 => 'replyFromAddress',
                                2 => 'replyFromName'
                            ]
                        ],
                        1 => (object) [
                            'action' => 'setNotRequired',
                            'fields' => [
                                0 => 'replyEmailTemplate'
                            ]
                        ]
                    ]
                ]
            ],
            'searchPanelDisabled' => true,
            'relationshipPanels' => (object) [
                'filters' => (object) [
                    'select' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-edit-and-remove'
                ],
                'emails' => (object) [
                    'select' => false,
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/remove-only'
                ]
            ],
            'defaultSidePanelFieldLists' => (object) [
                'detail' => [
                    
                ],
                'detailSmall' => [
                    
                ],
                'edit' => [
                    
                ],
                'editSmall' => [
                    
                ]
            ]
        ],
        'Job' => (object) [
            'modalViews' => (object) [
                'detail' => 'Admin.Job.Modals.Detail'
            ],
            'recordViews' => (object) [
                'list' => 'Admin.Job.Record.List',
                'detailQuick' => 'Admin.Job.Record.DetailSmall'
            ]
        ],
        'LastViewed' => (object) [
            'controller' => 'controllers/last-viewed',
            'views' => (object) [
                'list' => 'views/last-viewed/list'
            ],
            'recordViews' => (object) [
                'list' => 'views/last-viewed/record/list'
            ]
        ],
        'LeadCapture' => (object) [
            'controller' => 'controllers/record',
            'searchPanelDisabled' => true,
            'recordViews' => (object) [
                'detail' => 'views/lead-capture/record/detail'
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'targetList' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'subscribeToTargetList'
                                ]
                            ]
                        ],
                        'required' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'subscribeToTargetList'
                                ]
                            ]
                        ]
                    ],
                    'subscribeContactToTargetList' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'subscribeToTargetList'
                                ]
                            ]
                        ],
                        'required' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'subscribeToTargetList'
                                ]
                            ]
                        ]
                    ],
                    'optInConfirmationLifetime' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'optInConfirmation'
                                ]
                            ]
                        ],
                        'required' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'optInConfirmation'
                                ]
                            ]
                        ]
                    ],
                    'optInConfirmationSuccessMessage' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'optInConfirmation'
                                ]
                            ]
                        ]
                    ],
                    'optInConfirmationEmailTemplate' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'optInConfirmation'
                                ]
                            ]
                        ],
                        'required' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isTrue',
                                    'attribute' => 'optInConfirmation'
                                ]
                            ]
                        ]
                    ],
                    'apiKey' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'id'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'request',
                        'label' => 'Request',
                        'isForm' => true,
                        'view' => 'views/lead-capture/record/panels/request'
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'logRecords' => (object) [
                    'rowActionsView' => 'views/record/row-actions/remove-only',
                    'layout' => 'listForLeadCapture',
                    'select' => false,
                    'create' => false
                ]
            ]
        ],
        'Note' => (object) [
            'collection' => 'collections/note',
            'recordViews' => (object) [
                'edit' => 'views/note/record/edit',
                'editQuick' => 'views/note/record/edit'
            ],
            'modalViews' => (object) [
                'edit' => 'views/note/modals/edit'
            ],
            'itemViews' => (object) [
                'Post' => 'views/stream/notes/post'
            ]
        ],
        'Notification' => (object) [
            'controller' => 'controllers/notification',
            'acl' => 'acl/notification',
            'aclPortal' => 'acl-portal/notification',
            'collection' => 'collections/note',
            'itemViews' => (object) [
                'System' => 'views/notification/items/system'
            ]
        ],
        'PasswordChangeRequest' => (object) [
            'controller' => 'controllers/password-change-request'
        ],
        'Portal' => (object) [
            'controller' => 'controllers/record',
            'relationshipPanels' => (object) [
                'users' => (object) [
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-unlink-only',
                    'layout' => 'listSmall',
                    'selectPrimaryFilterName' => 'activePortal'
                ]
            ],
            'searchPanelDisabled' => true
        ],
        'PortalRole' => (object) [
            'recordViews' => (object) [
                'detail' => 'views/portal-role/record/detail',
                'edit' => 'views/portal-role/record/edit',
                'editQuick' => 'views/portal-role/record/edit',
                'list' => 'views/portal-role/record/list'
            ],
            'relationshipPanels' => (object) [
                'users' => (object) [
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
                ]
            ],
            'views' => (object) [
                'list' => 'views/portal-role/list'
            ]
        ],
        'PortalUser' => (object) [
            'controller' => 'controllers/portal-user',
            'views' => (object) [
                'detail' => 'views/user/detail',
                'list' => 'views/portal-user/list'
            ],
            'recordViews' => (object) [
                'list' => 'views/user/record/list',
                'detail' => 'views/user/record/detail',
                'edit' => 'views/user/record/edit',
                'detailSmall' => 'views/user/record/detail-quick',
                'editSmall' => 'views/user/record/edit-quick'
            ],
            'defaultSidePanelFieldLists' => (object) [
                'detail' => [
                    0 => 'avatar'
                ],
                'detailSmall' => [
                    0 => 'avatar'
                ],
                'edit' => [
                    0 => 'avatar'
                ],
                'editSmall' => [
                    0 => 'avatar'
                ]
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ]
                ]
            ],
            'filterList' => [
                0 => 'activePortal'
            ],
            'boolFilterList' => [
                
            ],
            'selectDefaultFilters' => (object) [
                'filter' => 'activePortal'
            ]
        ],
        'Preferences' => (object) [
            'recordViews' => (object) [
                'edit' => 'views/preferences/record/edit'
            ],
            'views' => (object) [
                'edit' => 'views/preferences/edit'
            ],
            'acl' => 'acl/preferences',
            'aclPortal' => 'acl-portal/preferences'
        ],
        'Role' => (object) [
            'recordViews' => (object) [
                'detail' => 'views/role/record/detail',
                'edit' => 'views/role/record/edit',
                'editQuick' => 'views/role/record/edit',
                'list' => 'views/role/record/list'
            ],
            'relationshipPanels' => (object) [
                'users' => (object) [
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
                ],
                'teams' => (object) [
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
                ]
            ],
            'views' => (object) [
                'list' => 'views/role/list'
            ]
        ],
        'ScheduledJob' => (object) [
            'controller' => 'controllers/record',
            'relationshipPanels' => (object) [
                'log' => (object) [
                    'readOnly' => true,
                    'view' => 'views/scheduled-job/record/panels/log'
                ]
            ],
            'recordViews' => (object) [
                'list' => 'views/scheduled-job/record/list',
                'detail' => 'views/scheduled-job/record/detail'
            ],
            'views' => (object) [
                'list' => 'views/scheduled-job/list'
            ],
            'jobWithTargetList' => [
                0 => 'CheckEmailAccounts'
            ]
        ],
        'ScheduledJobLogRecord' => (object) [
            'controller' => 'controllers/record'
        ],
        'Stream' => (object) [
            'controller' => 'controllers/stream',
            'iconClass' => 'far fa-newspaper'
        ],
        'Team' => (object) [
            'defaultSidePanel' => (object) [
                'edit' => false,
                'editSmall' => false
            ],
            'defaultSidePanelFieldLists' => (object) [
                'detail' => [
                    0 => 'createdAt'
                ]
            ],
            'relationshipPanels' => (object) [
                'users' => (object) [
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-unlink-only',
                    'layout' => 'listForTeam',
                    'selectPrimaryFilterName' => 'active'
                ]
            ],
            'recordViews' => (object) [
                'detail' => 'views/team/record/detail',
                'edit' => 'views/team/record/edit',
                'list' => 'views/team/record/list'
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'iconClass' => 'fas fa-users'
        ],
        'Template' => (object) [
            'controller' => 'controllers/record',
            'recordViews' => (object) [
                'detail' => 'views/template/record/detail',
                'edit' => 'views/template/record/edit'
            ],
            'formDependency' => (object) [
                'printFooter' => (object) [
                    'map' => (object) [
                        'true' => [
                            0 => (object) [
                                'action' => 'show',
                                'fields' => [
                                    0 => 'footer',
                                    1 => 'footerPosition'
                                ]
                            ]
                        ]
                    ],
                    'default' => [
                        0 => (object) [
                            'action' => 'hide',
                            'fields' => [
                                0 => 'footer',
                                1 => 'footerPosition'
                            ]
                        ]
                    ]
                ]
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'body' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'entityType'
                                ]
                            ]
                        ]
                    ],
                    'header' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'entityType'
                                ]
                            ]
                        ]
                    ],
                    'variables' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'entityType'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'User' => (object) [
            'controller' => 'controllers/user',
            'model' => 'models/user',
            'acl' => 'acl/user',
            'views' => (object) [
                'detail' => 'views/user/detail',
                'list' => 'views/user/list'
            ],
            'recordViews' => (object) [
                'detail' => 'views/user/record/detail',
                'detailSmall' => 'views/user/record/detail-quick',
                'edit' => 'views/user/record/edit',
                'editSmall' => 'views/user/record/edit-quick',
                'list' => 'views/user/record/list'
            ],
            'modalViews' => (object) [
                'detail' => 'views/user/modals/detail'
            ],
            'defaultSidePanel' => (object) [
                'detail' => (object) [
                    'name' => 'default',
                    'label' => false,
                    'view' => 'views/user/record/panels/default-side',
                    'isForm' => true
                ],
                'detailSmall' => (object) [
                    'name' => 'default',
                    'label' => false,
                    'view' => 'views/user/record/panels/default-side',
                    'isForm' => true
                ],
                'edit' => (object) [
                    'name' => 'default',
                    'label' => false,
                    'view' => 'views/user/record/panels/default-side',
                    'isForm' => true
                ],
                'editSmall' => (object) [
                    'name' => 'default',
                    'label' => false,
                    'view' => 'views/user/record/panels/default-side',
                    'isForm' => true
                ]
            ],
            'defaultSidePanelFieldLists' => (object) [
                'detail' => [
                    0 => 'avatar',
                    1 => 'createdAt',
                    2 => 'lastAccess'
                ],
                'detailSmall' => [
                    0 => 'avatar',
                    1 => 'lastAccess'
                ],
                'edit' => [
                    0 => 'avatar'
                ],
                'editSmall' => [
                    0 => 'avatar'
                ]
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/user/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/user/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'targetLists' => (object) [
                    'create' => false,
                    'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
                    'layout' => 'listForTarget',
                    'view' => 'crm:views/record/panels/target-lists'
                ]
            ],
            'filterList' => [
                0 => 'active'
            ],
            'boolFilterList' => [
                0 => 'onlyMyTeam'
            ],
            'selectDefaultFilters' => (object) [
                'filter' => 'active'
            ],
            'iconClass' => 'fas fa-user-circle'
        ],
        'Account' => (object) [
            'controller' => 'controllers/record',
            'aclPortal' => 'crm:acl-portal/account',
            'views' => (object) [
                'detail' => 'crm:views/account/detail'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'contacts' => (object) [
                    'filterList' => [
                        0 => 'all',
                        1 => 'accountActive'
                    ],
                    'layout' => 'listForAccount',
                    'orderBy' => 'name'
                ],
                'opportunities' => (object) [
                    'layout' => 'listForAccount'
                ],
                'campaignLogRecords' => (object) [
                    'rowActionsView' => 'views/record/row-actions/empty',
                    'select' => false,
                    'create' => false
                ],
                'targetLists' => (object) [
                    'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
                    'layout' => 'listForTarget',
                    'view' => 'crm:views/record/panels/target-lists'
                ]
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'recentlyCreated'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'additionalLayouts' => (object) [
                'detailConvert' => (object) [
                    'type' => 'detail'
                ]
            ],
            'color' => '#edc755',
            'iconClass' => 'fas fa-building'
        ],
        'Calendar' => (object) [
            'colors' => (object) [
                'Meeting' => '#558BBD',
                'Call' => '#CF605D',
                'Task' => '#76BA4E'
            ],
            'scopeList' => [
                0 => 'Meeting',
                1 => 'Call',
                2 => 'Task'
            ],
            'allDayScopeList' => [
                0 => 'Task'
            ],
            'modeList' => [
                0 => 'month',
                1 => 'agendaWeek',
                2 => 'agendaDay',
                3 => 'timeline'
            ],
            'canceledStatusList' => [
                0 => 'Not Held',
                1 => 'Canceled'
            ],
            'completedStatusList' => [
                0 => 'Held',
                1 => 'Completed'
            ],
            'additionalColorList' => [
                0 => '#AB78AD',
                1 => '#CC9B45'
            ],
            'iconClass' => 'far fa-calendar-alt'
        ],
        'Call' => (object) [
            'controller' => 'controllers/record',
            'acl' => 'crm:acl/call',
            'views' => (object) [
                'detail' => 'crm:views/call/detail'
            ],
            'recordViews' => (object) [
                'list' => 'crm:views/call/record/list',
                'detail' => 'crm:views/call/record/detail'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ],
                'edit' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ],
                'editSmall' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ]
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'planned'
                ],
                1 => (object) [
                    'name' => 'held',
                    'style' => 'success'
                ],
                2 => (object) [
                    'name' => 'todays'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'activityDefs' => (object) [
                'link' => 'calls',
                'activitiesCreate' => true,
                'historyCreate' => true
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'reminders' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'and',
                                    'value' => [
                                        0 => (object) [
                                            'type' => 'notEquals',
                                            'attribute' => 'status',
                                            'value' => 'Held'
                                        ],
                                        1 => (object) [
                                            'type' => 'notEquals',
                                            'attribute' => 'status',
                                            'value' => 'Not Held'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'iconClass' => 'fas fa-phone'
        ],
        'Campaign' => (object) [
            'controller' => 'controllers/record',
            'menu' => (object) [
                'list' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Target Lists',
                            'link' => '#TargetList',
                            'acl' => 'read',
                            'style' => 'default',
                            'aclScope' => 'TargetList'
                        ]
                    ],
                    'dropdown' => [
                        0 => (object) [
                            'label' => 'Mass Emails',
                            'link' => '#MassEmail',
                            'acl' => 'read',
                            'aclScope' => 'MassEmail'
                        ],
                        1 => (object) [
                            'label' => 'Email Templates',
                            'link' => '#EmailTemplate',
                            'acl' => 'read',
                            'aclScope' => 'EmailTemplate'
                        ]
                    ]
                ]
            ],
            'recordViews' => (object) [
                'detail' => 'crm:views/campaign/record/detail'
            ],
            'views' => (object) [
                'detail' => 'crm:views/campaign/detail'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'statistics',
                        'label' => 'Statistics',
                        'view' => 'crm:views/campaign/record/panels/campaign-stats',
                        'hidden' => false,
                        'isForm' => true
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'campaignLogRecords' => (object) [
                    'view' => 'crm:views/campaign/record/panels/campaign-log-records',
                    'layout' => 'listForCampaign',
                    'rowActionsView' => 'views/record/row-actions/remove-only',
                    'select' => false,
                    'create' => false
                ]
            ],
            'filterList' => [
                0 => 'active'
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'targetLists' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'or',
                                    'value' => [
                                        0 => (object) [
                                            'type' => 'equals',
                                            'attribute' => 'type',
                                            'value' => 'Email'
                                        ],
                                        1 => (object) [
                                            'type' => 'equals',
                                            'attribute' => 'type',
                                            'value' => 'Newsletter'
                                        ],
                                        2 => (object) [
                                            'type' => 'equals',
                                            'attribute' => 'type',
                                            'value' => 'Mail'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'excludingTargetLists' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'or',
                                    'value' => [
                                        0 => (object) [
                                            'type' => 'equals',
                                            'attribute' => 'type',
                                            'value' => 'Email'
                                        ],
                                        1 => (object) [
                                            'type' => 'equals',
                                            'attribute' => 'type',
                                            'value' => 'Newsletter'
                                        ],
                                        2 => (object) [
                                            'type' => 'equals',
                                            'attribute' => 'type',
                                            'value' => 'Mail'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'contactsTemplate' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'type',
                                    'value' => 'Mail'
                                ]
                            ]
                        ]
                    ],
                    'leadsTemplate' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'type',
                                    'value' => 'Mail'
                                ]
                            ]
                        ]
                    ],
                    'accountsTemplate' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'type',
                                    'value' => 'Mail'
                                ]
                            ]
                        ]
                    ],
                    'usersTemplate' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'type',
                                    'value' => 'Mail'
                                ]
                            ]
                        ]
                    ],
                    'mailMergeOnlyWithAddress' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'type',
                                    'value' => 'Mail'
                                ]
                            ]
                        ]
                    ]
                ],
                'panels' => (object) [
                    'mailMerge' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'type',
                                    'value' => 'Mail'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'iconClass' => 'fas fa-chart-line'
        ],
        'CampaignLogRecord' => (object) [
            'acl' => 'crm:acl/campaign-tracking-url'
        ],
        'CampaignTrackingUrl' => (object) [
            'controller' => 'controllers/record',
            'acl' => 'crm:acl/campaign-tracking-url',
            'recordViews' => (object) [
                'edit' => 'crm:views/campaign-tracking-url/record/edit',
                'editQuick' => 'crm:views/campaign-tracking-url/record/edit-small'
            ],
            'defaultSidePanel' => (object) [
                'edit' => false,
                'editSmall' => false
            ]
        ],
        'Case' => (object) [
            'controller' => 'controllers/record',
            'recordViews' => (object) [
                'detail' => 'crm:views/case/record/detail'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/case/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/case/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'open'
                ],
                1 => (object) [
                    'name' => 'closed',
                    'style' => 'success'
                ]
            ],
            'relationshipPanels' => (object) [
                'articles' => (object) [
                    'create' => false,
                    'recordListView' => 'crm:views/knowledge-base-article/record/list-for-case',
                    'rowActionsView' => 'crm:views/knowledge-base-article/record/row-actions/for-case'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'selectDefaultFilters' => (object) [
                'filter' => 'open'
            ],
            'allowInternalNotes' => true,
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'number' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'id'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'additionalLayouts' => (object) [
                'detailPortal' => (object) [
                    'type' => 'detail'
                ],
                'detailSmallPortal' => (object) [
                    'type' => 'detail'
                ],
                'listPortal' => (object) [
                    'type' => 'list'
                ]
            ],
            'iconClass' => 'fas fa-wrench'
        ],
        'Contact' => (object) [
            'controller' => 'controllers/record',
            'aclPortal' => 'crm:acl-portal/contact',
            'views' => (object) [
                'detail' => 'crm:views/contact/detail'
            ],
            'recordViews' => (object) [
                'detail' => 'crm:views/contact/record/detail',
                'detailQuick' => 'crm:views/contact/record/detail-small'
            ],
            'defaultSidePanelFieldLists' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'assignedUser'
                    ],
                    1 => (object) [
                        'name' => 'teams'
                    ],
                    2 => (object) [
                        'name' => 'portalUser'
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'assignedUser'
                    ],
                    1 => (object) [
                        'name' => 'teams'
                    ],
                    2 => (object) [
                        'name' => 'portalUser'
                    ]
                ]
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'campaignLogRecords' => (object) [
                    'rowActionsView' => 'views/record/row-actions/empty',
                    'select' => false,
                    'create' => false
                ],
                'opportunities' => (object) [
                    'layout' => 'listForContact'
                ],
                'targetLists' => (object) [
                    'create' => false,
                    'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
                    'layout' => 'listForTarget',
                    'view' => 'crm:views/record/panels/target-lists'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'additionalLayouts' => (object) [
                'detailConvert' => (object) [
                    'type' => 'detail'
                ],
                'listForAccount' => (object) [
                    'type' => 'listSmall'
                ]
            ],
            'filterList' => [
                0 => 'portalUsers'
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'accountId'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'color' => '#a4c5e0',
            'iconClass' => 'fas fa-id-badge'
        ],
        'Document' => (object) [
            'controller' => 'controllers/record',
            'views' => (object) [
                'list' => 'crm:views/document/list'
            ],
            'modalViews' => (object) [
                'select' => 'crm:views/document/modals/select-records'
            ],
            'filterList' => [
                0 => 'active',
                1 => 'draft'
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'selectDefaultFilters' => (object) [
                'filter' => 'active'
            ],
            'menu' => (object) [
                'list' => (object) [
                    'dropdown' => [
                        0 => (object) [
                            'label' => 'Manage Folders',
                            'link' => '#DocumentFolder',
                            'acl' => 'edit',
                            'aclScope' => 'DocumentFolder'
                        ]
                    ]
                ]
            ],
            'iconClass' => 'far fa-file-alt'
        ],
        'DocumentFolder' => (object) [
            'controller' => 'controllers/record-tree',
            'collection' => 'collections/tree',
            'menu' => (object) [
                'listTree' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'List View',
                            'link' => '#DocumentFolder/list',
                            'acl' => 'read',
                            'style' => 'default'
                        ],
                        1 => (object) [
                            'label' => 'Documents',
                            'link' => '#Document',
                            'acl' => 'read',
                            'style' => 'default',
                            'aclScope' => 'Document'
                        ]
                    ]
                ],
                'list' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Tree View',
                            'link' => '#DocumentFolder',
                            'acl' => 'read',
                            'style' => 'default'
                        ],
                        1 => (object) [
                            'label' => 'Documents',
                            'link' => '#Document',
                            'acl' => 'read',
                            'style' => 'default',
                            'aclScope' => 'Document'
                        ]
                    ]
                ]
            ]
        ],
        'EmailQueueItem' => (object) [
            'controller' => 'controllers/record',
            'views' => (object) [
                'list' => 'crm:views/email-queue-item/list'
            ],
            'recordViews' => (object) [
                'list' => 'crm:views/email-queue-item/record/list'
            ]
        ],
        'KnowledgeBaseArticle' => (object) [
            'controller' => 'controllers/record',
            'views' => (object) [
                'list' => 'crm:views/knowledge-base-article/list'
            ],
            'recordViews' => (object) [
                'editQuick' => 'crm:views/knowledge-base-article/record/edit-quick',
                'detailQuick' => 'crm:views/knowledge-base-article/record/detail-quick',
                'detail' => 'crm:views/knowledge-base-article/record/detail',
                'list' => 'crm:views/knowledge-base-article/record/list'
            ],
            'modalViews' => (object) [
                'select' => 'crm:views/knowledge-base-article/modals/select-records'
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'published',
                    'inPortalDisabled' => true
                ]
            ],
            'boolFilterList' => [
                0 => (object) [
                    'name' => 'onlyMy',
                    'inPortalDisabled' => true
                ]
            ],
            'relationshipPanels' => (object) [
                'cases' => (object) [
                    'create' => false,
                    'rowActionsView' => 'views/record/row-actions/relationship-view-and-unlink'
                ]
            ],
            'menu' => (object) [
                'list' => (object) [
                    'dropdown' => [
                        0 => (object) [
                            'label' => 'Manage Categories',
                            'link' => '#KnowledgeBaseCategory',
                            'acl' => 'edit',
                            'aclScope' => 'KnowledgeBaseCategory'
                        ]
                    ]
                ]
            ],
            'additionalLayouts' => (object) [
                'detailPortal' => (object) [
                    'type' => 'detail'
                ],
                'detailSmallPortal' => (object) [
                    'type' => 'detail'
                ],
                'listPortal' => (object) [
                    'type' => 'list'
                ],
                'relationshipsPortal' => (object) [
                    'type' => 'relationships'
                ]
            ],
            'iconClass' => 'fas fa-book'
        ],
        'KnowledgeBaseCategory' => (object) [
            'controller' => 'controllers/record-tree',
            'collection' => 'collections/tree',
            'menu' => (object) [
                'listTree' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'List View',
                            'link' => '#KnowledgeBaseCategory/list',
                            'acl' => 'read',
                            'style' => 'default'
                        ],
                        1 => (object) [
                            'label' => 'Articles',
                            'link' => '#KnowledgeBaseArticle',
                            'acl' => 'read',
                            'style' => 'default',
                            'aclScope' => 'KnowledgeBaseArticle'
                        ]
                    ]
                ],
                'list' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Tree View',
                            'link' => '#KnowledgeBaseCategory',
                            'acl' => 'read',
                            'style' => 'default'
                        ],
                        1 => (object) [
                            'label' => 'Articles',
                            'link' => '#KnowledgeBaseArticle',
                            'acl' => 'read',
                            'style' => 'default',
                            'aclScope' => 'KnowledgeBaseArticle'
                        ]
                    ]
                ]
            ]
        ],
        'Lead' => (object) [
            'controller' => 'crm:controllers/lead',
            'views' => (object) [
                'detail' => 'crm:views/lead/detail'
            ],
            'recordViews' => (object) [
                'detail' => 'crm:views/lead/record/detail'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'convertedTo',
                        'label' => 'Converted To',
                        'view' => 'crm:views/lead/record/panels/converted-to',
                        'notRefreshable' => true,
                        'hidden' => true,
                        'style' => 'success',
                        'isForm' => true
                    ],
                    1 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    3 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ],
                'edit' => [
                    0 => (object) [
                        'name' => 'convertedTo',
                        'label' => 'Converted To',
                        'view' => 'crm:views/lead/record/panels/converted-to',
                        'notRefreshable' => true,
                        'hidden' => true,
                        'style' => 'success',
                        'isForm' => true
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'convertedTo',
                        'label' => 'Converted To',
                        'view' => 'crm:views/lead/record/panels/converted-to',
                        'notRefreshable' => true,
                        'hidden' => true,
                        'style' => 'success',
                        'isForm' => true
                    ],
                    1 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    3 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ],
                'editSmall' => [
                    0 => (object) [
                        'name' => 'convertedTo',
                        'label' => 'Converted To',
                        'view' => 'crm:views/lead/record/panels/converted-to',
                        'notRefreshable' => true,
                        'hidden' => true,
                        'style' => 'success',
                        'isForm' => true
                    ]
                ]
            ],
            'relationshipPanels' => (object) [
                'campaignLogRecords' => (object) [
                    'rowActionsView' => 'views/record/row-actions/empty',
                    'select' => false,
                    'create' => false
                ],
                'targetLists' => (object) [
                    'create' => false,
                    'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
                    'layout' => 'listForTarget',
                    'view' => 'crm:views/record/panels/target-lists'
                ]
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'actual'
                ],
                1 => (object) [
                    'name' => 'converted',
                    'style' => 'success'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'name' => (object) [
                        'required' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isEmpty',
                                    'attribute' => 'accountName'
                                ],
                                1 => (object) [
                                    'type' => 'isEmpty',
                                    'attribute' => 'emailAddress'
                                ],
                                2 => (object) [
                                    'type' => 'isEmpty',
                                    'attribute' => 'phoneNumber'
                                ]
                            ]
                        ]
                    ]
                ],
                'panels' => (object) [
                    'convertedTo' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'status',
                                    'value' => 'Converted'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'color' => '#d6a2c9',
            'iconClass' => 'fas fa-address-card'
        ],
        'MassEmail' => (object) [
            'controller' => 'controllers/record',
            'acl' => 'crm:acl/mass-email',
            'recordViews' => (object) [
                'detail' => 'crm:views/mass-email/record/detail',
                'edit' => 'crm:views/mass-email/record/edit',
                'editQuick' => 'crm:views/mass-email/record/edit-small'
            ],
            'views' => (object) [
                'detail' => 'crm:views/mass-email/detail'
            ],
            'defaultSidePanel' => (object) [
                'edit' => false,
                'editSmall' => false
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'status' => (object) [
                        'readOnly' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'and',
                                    'value' => [
                                        0 => (object) [
                                            'type' => 'or',
                                            'value' => [
                                                0 => (object) [
                                                    'type' => 'equals',
                                                    'attribute' => 'status',
                                                    'value' => 'Complete'
                                                ],
                                                1 => (object) [
                                                    'type' => 'equals',
                                                    'attribute' => 'status',
                                                    'value' => 'In Process'
                                                ],
                                                2 => (object) [
                                                    'type' => 'equals',
                                                    'attribute' => 'status',
                                                    'value' => 'Failed'
                                                ]
                                            ]
                                        ],
                                        1 => (object) [
                                            'type' => 'isNotEmpty',
                                            'attribute' => 'id'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'options' => (object) [
                    'status' => [
                        0 => (object) [
                            'optionList' => [
                                0 => 'Draft',
                                1 => 'Pending'
                            ],
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'in',
                                    'attribute' => 'status',
                                    'value' => [
                                        0 => 'Draft',
                                        1 => 'Pending'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'actual'
                ],
                1 => (object) [
                    'name' => 'complete',
                    'style' => 'success'
                ]
            ]
        ],
        'Meeting' => (object) [
            'controller' => 'controllers/record',
            'acl' => 'crm:acl/meeting',
            'views' => (object) [
                'detail' => 'crm:views/meeting/detail'
            ],
            'recordViews' => (object) [
                'list' => 'crm:views/meeting/record/list',
                'detail' => 'crm:views/meeting/record/detail'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'options' => (object) [
                            'fieldList' => [
                                0 => 'users',
                                1 => 'contacts',
                                2 => 'leads'
                            ]
                        ],
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ],
                'edit' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ],
                'editSmall' => [
                    0 => (object) [
                        'name' => 'attendees',
                        'label' => 'Attendees',
                        'view' => 'crm:views/meeting/record/panels/attendees',
                        'sticked' => true,
                        'isForm' => true,
                        'notRefreshable' => true
                    ]
                ]
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'planned'
                ],
                1 => (object) [
                    'name' => 'held',
                    'style' => 'success'
                ],
                2 => (object) [
                    'name' => 'todays'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'activityDefs' => (object) [
                'link' => 'meetings',
                'activitiesCreate' => true,
                'historyCreate' => true
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'reminders' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'and',
                                    'value' => [
                                        0 => (object) [
                                            'type' => 'notEquals',
                                            'attribute' => 'status',
                                            'value' => 'Held'
                                        ],
                                        1 => (object) [
                                            'type' => 'notEquals',
                                            'attribute' => 'status',
                                            'value' => 'Not Held'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'iconClass' => 'fas fa-briefcase'
        ],
        'Opportunity' => (object) [
            'controller' => 'controllers/record',
            'views' => (object) [
                'detail' => 'crm:views/opportunity/detail'
            ],
            'recordViews' => (object) [
                'edit' => 'crm:views/opportunity/record/edit',
                'editSmall' => 'crm:views/opportunity/record/edit-small',
                'list' => 'crm:views/opportunity/record/list',
                'kanban' => 'crm:views/opportunity/record/kanban'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/opportunity/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ],
                'detailSmall' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'filterList' => [
                0 => (object) [
                    'name' => 'open'
                ],
                1 => (object) [
                    'name' => 'won',
                    'style' => 'success'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'additionalLayouts' => (object) [
                'detailConvert' => (object) [
                    'type' => 'detail'
                ],
                'listForAccount' => (object) [
                    'type' => 'listSmall'
                ],
                'listForContact' => (object) [
                    'type' => 'listSmall'
                ]
            ],
            'kanbanViewMode' => true,
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'lastStage' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'stage',
                                    'value' => 'Closed Lost'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'color' => '#9fc77e',
            'iconClass' => 'fas fa-dollar-sign'
        ],
        'Target' => (object) [
            'controller' => 'controllers/record',
            'views' => (object) [
                'detail' => 'Crm:Target.Detail'
            ],
            'menu' => (object) [
                'detail' => (object) [
                    'buttons' => [
                        0 => (object) [
                            'label' => 'Convert to Lead',
                            'action' => 'convertToLead',
                            'acl' => 'edit'
                        ]
                    ]
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ]
        ],
        'TargetList' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'optedOut',
                        'label' => 'Opted Out',
                        'view' => 'crm:views/target-list/record/panels/opted-out'
                    ]
                ]
            ],
            'recordViews' => (object) [
                'detail' => 'crm:views/target-list/record/detail'
            ],
            'relationshipPanels' => (object) [
                'contacts' => (object) [
                    'actionList' => [
                        0 => (object) [
                            'label' => 'Unlink All',
                            'action' => 'unlinkAllRelated',
                            'acl' => 'edit',
                            'data' => (object) [
                                'link' => 'contacts'
                            ]
                        ]
                    ],
                    'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
                    'view' => 'crm:views/target-list/record/panels/relationship'
                ],
                'leads' => (object) [
                    'actionList' => [
                        0 => (object) [
                            'label' => 'Unlink All',
                            'action' => 'unlinkAllRelated',
                            'acl' => 'edit',
                            'data' => (object) [
                                'link' => 'leads'
                            ]
                        ]
                    ],
                    'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
                    'view' => 'crm:views/target-list/record/panels/relationship'
                ],
                'accounts' => (object) [
                    'actionList' => [
                        0 => (object) [
                            'label' => 'Unlink All',
                            'action' => 'unlinkAllRelated',
                            'acl' => 'edit',
                            'data' => (object) [
                                'link' => 'accounts'
                            ]
                        ]
                    ],
                    'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
                    'view' => 'crm:views/target-list/record/panels/relationship'
                ],
                'users' => (object) [
                    'create' => false,
                    'actionList' => [
                        0 => (object) [
                            'label' => 'Unlink All',
                            'action' => 'unlinkAllRelated',
                            'acl' => 'edit',
                            'data' => (object) [
                                'link' => 'users'
                            ]
                        ]
                    ],
                    'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
                    'view' => 'crm:views/target-list/record/panels/relationship'
                ]
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'entryCount' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'id'
                                ]
                            ]
                        ]
                    ],
                    'optedOutCount' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'isNotEmpty',
                                    'attribute' => 'id'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'iconClass' => 'fas fa-crosshairs'
        ],
        'Task' => (object) [
            'controller' => 'controllers/record',
            'recordViews' => (object) [
                'list' => 'crm:views/task/record/list',
                'detail' => 'crm:views/task/record/detail'
            ],
            'views' => (object) [
                'list' => 'crm:views/task/list',
                'detail' => 'crm:views/task/detail'
            ],
            'dynamicLogic' => (object) [
                'fields' => (object) [
                    'dateCompleted' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'equals',
                                    'attribute' => 'status',
                                    'value' => 'Completed'
                                ]
                            ]
                        ]
                    ],
                    'reminders' => (object) [
                        'visible' => (object) [
                            'conditionGroup' => [
                                0 => (object) [
                                    'type' => 'and',
                                    'value' => [
                                        0 => (object) [
                                            'type' => 'isNotEmpty',
                                            'attribute' => 'dateEnd'
                                        ],
                                        1 => (object) [
                                            'type' => 'isEmpty',
                                            'attribute' => 'dateEndDate'
                                        ],
                                        2 => (object) [
                                            'type' => 'notEquals',
                                            'attribute' => 'status',
                                            'value' => 'Completed'
                                        ],
                                        3 => (object) [
                                            'type' => 'notEquals',
                                            'attribute' => 'status',
                                            'value' => 'Canceled'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'filterList' => [
                0 => 'actual',
                1 => (object) [
                    'name' => 'completed',
                    'style' => 'success'
                ],
                2 => (object) [
                    'name' => 'todays'
                ],
                3 => (object) [
                    'name' => 'overdue',
                    'style' => 'danger'
                ],
                4 => (object) [
                    'name' => 'deferred'
                ]
            ],
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'iconClass' => 'fas fa-tasks',
            'kanbanViewMode' => true
        ],
        'Beneficiario' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'color' => '#989191',
            'iconClass' => 'fas fa-address-book'
        ],
        'Beneficios' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ]
        ],
        'Categoria' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ]
        ],
        'Ciudad' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ]
        ],
        'Comuna' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ]
        ],
        'DoctosBeneficio' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ]
        ],
        'Empresa' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'kanbanViewMode' => false,
            'color' => NULL,
            'iconClass' => NULL
        ],
        'EstadoReclamo' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ]
        ],
        'Formularios' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'color' => '#bd4646',
            'iconClass' => 'fas fa-bed',
            'kanbanViewMode' => false
        ],
        'MotivoReclamo' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'color' => '#ff0000',
            'iconClass' => 'fas fa-caret-square-up',
            'kanbanViewMode' => false
        ],
        'Proveedor' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ]
        ],
        'Reclamo' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'color' => '#ff0000',
            'iconClass' => 'fas fa-tired'
        ],
        'Rol' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ]
        ],
        'Solicitudes' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'kanbanViewMode' => false,
            'color' => NULL,
            'iconClass' => NULL
        ],
        'Subcategoria' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'sidePanels' => (object) [
                'detail' => [
                    0 => (object) [
                        'name' => 'activities',
                        'label' => 'Activities',
                        'view' => 'crm:views/record/panels/activities',
                        'aclScope' => 'Activities'
                    ],
                    1 => (object) [
                        'name' => 'history',
                        'label' => 'History',
                        'view' => 'crm:views/record/panels/history',
                        'aclScope' => 'Activities'
                    ],
                    2 => (object) [
                        'name' => 'tasks',
                        'label' => 'Tasks',
                        'view' => 'crm:views/record/panels/tasks',
                        'aclScope' => 'Task'
                    ]
                ]
            ],
            'kanbanViewMode' => false,
            'color' => NULL,
            'iconClass' => NULL
        ],
        'Trabajador' => (object) [
            'controller' => 'controllers/record',
            'boolFilterList' => [
                0 => 'onlyMy'
            ],
            'kanbanViewMode' => false,
            'color' => NULL,
            'iconClass' => NULL
        ]
    ],
    'dashlets' => (object) [
        'Emails' => (object) [
            'view' => 'views/dashlets/emails',
            'aclScope' => 'Email',
            'entityType' => 'Email',
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30,
                            7 => 50
                        ]
                    ]
                ],
                'defaults' => (object) [
                    'sortBy' => 'dateSent',
                    'asc' => false,
                    'displayRecords' => 5,
                    'expandedLayout' => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'subject',
                                    'link' => true
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'dateSent',
                                    'view' => 'views/fields/datetime-short'
                                ],
                                1 => (object) [
                                    'name' => 'personStringData'
                                ]
                            ]
                        ]
                    ],
                    'searchData' => (object) [
                        'bool' => (object) [
                            'onlyMy' => true
                        ],
                        'primary' => 'inbox'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Records' => (object) [
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30,
                            7 => 50
                        ]
                    ],
                    'entityType' => (object) [
                        'type' => 'enum',
                        'view' => 'views/dashlets/fields/records/entity-type',
                        'translation' => 'Global.scopeNames'
                    ],
                    'primaryFilter' => (object) [
                        'type' => 'enum',
                        'view' => 'views/dashlets/fields/records/primary-filter'
                    ],
                    'boolFilterList' => (object) [
                        'type' => 'multiEnum',
                        'view' => 'views/dashlets/fields/records/bool-filter-list'
                    ],
                    'sortBy' => (object) [
                        'type' => 'enum',
                        'view' => 'views/dashlets/fields/records/sort-by'
                    ],
                    'sortDirection' => (object) [
                        'type' => 'enum',
                        'view' => 'views/dashlets/fields/records/sort-direction',
                        'options' => [
                            0 => 'asc',
                            1 => 'desc'
                        ],
                        'translation' => 'EntityManager.options.sortDirection'
                    ],
                    'expandedLayout' => (object) [
                        'type' => 'base',
                        'view' => 'views/dashlets/fields/records/expanded-layout'
                    ]
                ],
                'defaults' => (object) [
                    'displayRecords' => 10,
                    'autorefreshInterval' => 0.5,
                    'expandedLayout' => (object) [
                        'rows' => [
                            
                        ]
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'entityType'
                                ],
                                1 => false
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'primaryFilter'
                                ],
                                1 => (object) [
                                    'name' => 'sortBy'
                                ]
                            ],
                            3 => [
                                0 => (object) [
                                    'name' => 'boolFilterList'
                                ],
                                1 => (object) [
                                    'name' => 'sortDirection'
                                ]
                            ],
                            4 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            5 => [
                                0 => (object) [
                                    'name' => 'expandedLayout'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Stream' => (object) [
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30,
                            7 => 50
                        ]
                    ]
                ],
                'defaults' => (object) [
                    'displayRecords' => 10,
                    'autorefreshInterval' => 0.5
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Activities' => (object) [
            'view' => 'crm:views/dashlets/activities',
            'options' => (object) [
                'view' => 'crm:views/dashlets/options/activities',
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'enabledScopeList' => (object) [
                        'type' => 'multiEnum',
                        'translation' => 'Global.scopeNamesPlural',
                        'required' => true
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30,
                            7 => 50
                        ]
                    ],
                    'futureDays' => (object) [
                        'type' => 'int',
                        'min' => 0,
                        'required' => true
                    ]
                ],
                'defaults' => (object) [
                    'displayRecords' => 10,
                    'autorefreshInterval' => 0.5,
                    'futureDays' => 3,
                    'enabledScopeList' => [
                        0 => 'Meeting',
                        1 => 'Call',
                        2 => 'Task'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'enabledScopeList'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'futureDays'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Calendar' => (object) [
            'view' => 'crm:views/dashlets/calendar',
            'aclScope' => 'Calendar',
            'options' => (object) [
                'view' => 'crm:views/dashlets/options/calendar',
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'enabledScopeList' => (object) [
                        'type' => 'multiEnum',
                        'translation' => 'Global.scopeNamesPlural',
                        'required' => true
                    ],
                    'mode' => (object) [
                        'type' => 'enum',
                        'options' => [
                            0 => 'basicWeek',
                            1 => 'agendaWeek',
                            2 => 'timeline',
                            3 => 'month',
                            4 => 'basicDay',
                            5 => 'agendaDay'
                        ]
                    ],
                    'users' => (object) [
                        'type' => 'linkMultiple',
                        'entity' => 'User',
                        'view' => 'views/fields/assigned-users',
                        'sortable' => true
                    ],
                    'teams' => (object) [
                        'type' => 'linkMultiple',
                        'entity' => 'Team',
                        'view' => 'crm:views/calendar/fields/teams'
                    ]
                ],
                'defaults' => (object) [
                    'autorefreshInterval' => 0.5,
                    'mode' => 'basicWeek',
                    'enabledScopeList' => [
                        0 => 'Meeting',
                        1 => 'Call',
                        2 => 'Task'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'mode'
                                ],
                                1 => (object) [
                                    'name' => 'enabledScopeList'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'users'
                                ],
                                1 => false
                            ],
                            3 => [
                                0 => (object) [
                                    'name' => 'teams'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Calls' => (object) [
            'view' => 'crm:views/dashlets/calls',
            'aclScope' => 'Call',
            'entityType' => 'Call',
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30
                        ]
                    ],
                    'expandedLayout' => (object) [
                        'type' => 'base',
                        'view' => 'views/dashlets/fields/records/expanded-layout'
                    ]
                ],
                'defaults' => (object) [
                    'sortBy' => 'dateStart',
                    'asc' => true,
                    'displayRecords' => 5,
                    'populateAssignedUser' => true,
                    'expandedLayout' => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'name',
                                    'link' => true
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'dateStart'
                                ]
                            ]
                        ]
                    ],
                    'searchData' => (object) [
                        'bool' => (object) [
                            'onlyMy' => true
                        ],
                        'primary' => 'planned',
                        'advanced' => (object) [
                            1 => (object) [
                                'type' => 'or',
                                'value' => (object) [
                                    1 => (object) [
                                        'type' => 'today',
                                        'field' => 'dateStart',
                                        'dateTime' => true
                                    ],
                                    2 => (object) [
                                        'type' => 'future',
                                        'field' => 'dateEnd',
                                        'dateTime' => true
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'expandedLayout'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Cases' => (object) [
            'view' => 'views/dashlets/abstract/record-list',
            'aclScope' => 'Case',
            'entityType' => 'Case',
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15
                        ]
                    ],
                    'expandedLayout' => (object) [
                        'type' => 'base',
                        'view' => 'views/dashlets/fields/records/expanded-layout'
                    ]
                ],
                'defaults' => (object) [
                    'sortBy' => 'createdAt',
                    'asc' => false,
                    'displayRecords' => 5,
                    'populateAssignedUser' => true,
                    'expandedLayout' => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'number'
                                ],
                                1 => (object) [
                                    'name' => 'name',
                                    'link' => true
                                ],
                                2 => (object) [
                                    'name' => 'type'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'status'
                                ],
                                1 => (object) [
                                    'name' => 'priority'
                                ]
                            ]
                        ]
                    ],
                    'searchData' => (object) [
                        'bool' => (object) [
                            'onlyMy' => true
                        ],
                        'primary' => 'open'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'expandedLayout'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Leads' => (object) [
            'view' => 'views/dashlets/abstract/record-list',
            'aclScope' => 'Lead',
            'entityType' => 'Lead',
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30
                        ]
                    ],
                    'expandedLayout' => (object) [
                        'type' => 'base',
                        'view' => 'views/dashlets/fields/records/expanded-layout'
                    ]
                ],
                'defaults' => (object) [
                    'sortBy' => 'createdAt',
                    'asc' => false,
                    'displayRecords' => 5,
                    'populateAssignedUser' => true,
                    'expandedLayout' => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'name',
                                    'link' => true
                                ],
                                1 => (object) [
                                    'name' => 'addressCity'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'status'
                                ],
                                1 => (object) [
                                    'name' => 'source'
                                ]
                            ]
                        ]
                    ],
                    'searchData' => (object) [
                        'bool' => (object) [
                            'onlyMy' => true
                        ],
                        'primary' => 'actual'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'expandedLayout'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Meetings' => (object) [
            'view' => 'crm:views/dashlets/meetings',
            'aclScope' => 'Meeting',
            'entityType' => 'Meeting',
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30
                        ]
                    ],
                    'expandedLayout' => (object) [
                        'type' => 'base',
                        'view' => 'views/dashlets/fields/records/expanded-layout'
                    ]
                ],
                'defaults' => (object) [
                    'sortBy' => 'dateStart',
                    'asc' => true,
                    'displayRecords' => 5,
                    'populateAssignedUser' => true,
                    'expandedLayout' => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'name',
                                    'link' => true
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'dateStart'
                                ]
                            ]
                        ]
                    ],
                    'searchData' => (object) [
                        'bool' => (object) [
                            'onlyMy' => true
                        ],
                        'primary' => 'planned',
                        'advanced' => (object) [
                            1 => (object) [
                                'type' => 'or',
                                'value' => (object) [
                                    1 => (object) [
                                        'type' => 'today',
                                        'field' => 'dateStart',
                                        'dateTime' => true
                                    ],
                                    2 => (object) [
                                        'type' => 'future',
                                        'field' => 'dateEnd',
                                        'dateTime' => true
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'expandedLayout'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'Opportunities' => (object) [
            'view' => 'views/dashlets/abstract/record-list',
            'aclScope' => 'Opportunity',
            'entityType' => 'Opportunity',
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30
                        ]
                    ],
                    'expandedLayout' => (object) [
                        'type' => 'base',
                        'view' => 'views/dashlets/fields/records/expanded-layout'
                    ]
                ],
                'defaults' => (object) [
                    'sortBy' => 'closeDate',
                    'asc' => true,
                    'displayRecords' => 5,
                    'populateAssignedUser' => true,
                    'expandedLayout' => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'name',
                                    'link' => true
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'stage'
                                ],
                                1 => (object) [
                                    'name' => 'amount'
                                ]
                            ]
                        ]
                    ],
                    'searchData' => (object) [
                        'bool' => (object) [
                            'onlyMy' => true
                        ],
                        'primary' => 'open'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'expandedLayout'
                                ],
                                1 => false
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'OpportunitiesByLeadSource' => (object) [
            'view' => 'crm:views/dashlets/opportunities-by-lead-source',
            'aclScope' => 'Opportunity',
            'options' => (object) [
                'view' => 'crm:views/dashlets/options/chart',
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'dateFrom' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateTo' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateFilter' => (object) [
                        'type' => 'enum',
                        'options' => [
                            0 => 'currentYear',
                            1 => 'currentQuarter',
                            2 => 'currentMonth',
                            3 => 'ever',
                            4 => 'between'
                        ],
                        'default' => 'currentYear',
                        'translation' => 'Global.options.dateSearchRanges'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'dateFilter'
                                ],
                                1 => false
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'dateFrom'
                                ],
                                1 => (object) [
                                    'name' => 'dateTo'
                                ]
                            ]
                        ]
                    ]
                ],
                'defaults' => (object) [
                    'dateFilter' => 'currentYear'
                ]
            ]
        ],
        'OpportunitiesByStage' => (object) [
            'view' => 'crm:views/dashlets/opportunities-by-stage',
            'aclScope' => 'Opportunity',
            'options' => (object) [
                'view' => 'crm:views/dashlets/options/chart',
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'dateFrom' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateTo' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateFilter' => (object) [
                        'type' => 'enum',
                        'options' => [
                            0 => 'currentYear',
                            1 => 'currentQuarter',
                            2 => 'currentMonth',
                            3 => 'ever',
                            4 => 'between'
                        ],
                        'default' => 'currentYear',
                        'translation' => 'Global.options.dateSearchRanges'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'dateFilter'
                                ],
                                1 => false
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'dateFrom'
                                ],
                                1 => (object) [
                                    'name' => 'dateTo'
                                ]
                            ]
                        ]
                    ]
                ],
                'defaults' => (object) [
                    'dateFilter' => 'currentYear'
                ]
            ]
        ],
        'SalesByMonth' => (object) [
            'view' => 'crm:views/dashlets/sales-by-month',
            'aclScope' => 'Opportunity',
            'options' => (object) [
                'view' => 'crm:views/dashlets/options/chart',
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'dateFrom' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateTo' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateFilter' => (object) [
                        'type' => 'enum',
                        'options' => [
                            0 => 'currentYear',
                            1 => 'currentQuarter',
                            2 => 'between'
                        ],
                        'default' => 'currentYear',
                        'translation' => 'Global.options.dateSearchRanges'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'dateFilter'
                                ],
                                1 => false
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'dateFrom'
                                ],
                                1 => (object) [
                                    'name' => 'dateTo'
                                ]
                            ]
                        ]
                    ]
                ],
                'defaults' => (object) [
                    'dateFilter' => 'currentYear'
                ]
            ]
        ],
        'SalesPipeline' => (object) [
            'view' => 'crm:views/dashlets/sales-pipeline',
            'aclScope' => 'Opportunity',
            'options' => (object) [
                'view' => 'crm:views/dashlets/options/chart',
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'dateFrom' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateTo' => (object) [
                        'type' => 'date',
                        'required' => true
                    ],
                    'dateFilter' => (object) [
                        'type' => 'enum',
                        'options' => [
                            0 => 'currentYear',
                            1 => 'currentQuarter',
                            2 => 'currentMonth',
                            3 => 'ever',
                            4 => 'between'
                        ],
                        'default' => 'currentYear',
                        'translation' => 'Global.options.dateSearchRanges'
                    ],
                    'useLastStage' => (object) [
                        'type' => 'bool'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title',
                                    'span' => 2
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'dateFilter'
                                ],
                                1 => (object) [
                                    'name' => 'useLastStage'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'dateFrom'
                                ],
                                1 => (object) [
                                    'name' => 'dateTo'
                                ]
                            ]
                        ]
                    ]
                ],
                'defaults' => (object) [
                    'dateFilter' => 'currentYear'
                ]
            ]
        ],
        'Tasks' => (object) [
            'view' => 'crm:views/dashlets/tasks',
            'aclScope' => 'Task',
            'entityType' => 'Task',
            'options' => (object) [
                'fields' => (object) [
                    'title' => (object) [
                        'type' => 'varchar',
                        'required' => true
                    ],
                    'autorefreshInterval' => (object) [
                        'type' => 'enumFloat',
                        'options' => [
                            0 => 0,
                            1 => 0.5,
                            2 => 1,
                            3 => 2,
                            4 => 5,
                            5 => 10
                        ]
                    ],
                    'displayRecords' => (object) [
                        'type' => 'enumInt',
                        'options' => [
                            0 => 3,
                            1 => 4,
                            2 => 5,
                            3 => 10,
                            4 => 15,
                            5 => 20,
                            6 => 30
                        ]
                    ],
                    'expandedLayout' => (object) [
                        'type' => 'base',
                        'view' => 'views/dashlets/fields/records/expanded-layout'
                    ]
                ],
                'defaults' => (object) [
                    'sortBy' => 'dateEnd',
                    'asc' => true,
                    'displayRecords' => 5,
                    'expandedLayout' => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'name',
                                    'link' => true
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'status'
                                ],
                                1 => (object) [
                                    'name' => 'dateEnd'
                                ]
                            ]
                        ]
                    ],
                    'searchData' => (object) [
                        'bool' => (object) [
                            'onlyMy' => true
                        ],
                        'primary' => 'actualStartingNotInFuture'
                    ]
                ],
                'layout' => [
                    0 => (object) [
                        'rows' => [
                            0 => [
                                0 => (object) [
                                    'name' => 'title'
                                ]
                            ],
                            1 => [
                                0 => (object) [
                                    'name' => 'displayRecords'
                                ],
                                1 => (object) [
                                    'name' => 'autorefreshInterval'
                                ]
                            ],
                            2 => [
                                0 => (object) [
                                    'name' => 'expandedLayout',
                                    'fullWidth' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'entityDefs' => (object) [
        'ActionHistoryRecord' => (object) [
            'fields' => (object) [
                'number' => (object) [
                    'type' => 'autoincrement',
                    'index' => true
                ],
                'targetType' => (object) [
                    'view' => 'views/action-history-record/fields/target-type',
                    'translation' => 'Global.scopeNames'
                ],
                'target' => (object) [
                    'type' => 'linkParent',
                    'view' => 'views/action-history-record/fields/target'
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'action' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'read',
                        1 => 'update',
                        2 => 'create',
                        3 => 'delete'
                    ]
                ],
                'createdAt' => (object) [
                    'type' => 'datetime'
                ],
                'user' => (object) [
                    'type' => 'link'
                ],
                'ipAddress' => (object) [
                    'type' => 'varchar',
                    'maxLength' => '39'
                ],
                'authToken' => (object) [
                    'type' => 'link'
                ],
                'authLogRecord' => (object) [
                    'type' => 'link'
                ]
            ],
            'links' => (object) [
                'user' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'target' => (object) [
                    'type' => 'belongsToParent'
                ],
                'authToken' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'AuthToken',
                    'foreignName' => 'id',
                    'foreign' => 'actionHistoryRecords'
                ],
                'authLogRecord' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'AuthLogRecord',
                    'foreignName' => 'id',
                    'foreign' => 'actionHistoryRecords'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'number',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'ipAddress',
                    1 => 'userName'
                ]
            ]
        ],
        'ArrayValue' => (object) [
            'fields' => (object) [
                'value' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 100
                ],
                'entity' => (object) [
                    'type' => 'linkParent'
                ],
                'attribute' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ]
            ],
            'indexes' => (object) [
                'entityTypeValue' => (object) [
                    'columns' => [
                        0 => 'entityType',
                        1 => 'value'
                    ]
                ],
                'entityValue' => (object) [
                    'columns' => [
                        0 => 'entityType',
                        1 => 'entityId',
                        2 => 'value'
                    ]
                ]
            ]
        ],
        'Attachment' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'view' => 'views/attachment/fields/name'
                ],
                'type' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'size' => (object) [
                    'type' => 'int',
                    'min' => 0
                ],
                'parent' => (object) [
                    'type' => 'linkParent',
                    'view' => 'views/attachment/fields/parent'
                ],
                'related' => (object) [
                    'type' => 'linkParent',
                    'noLoad' => true,
                    'view' => 'views/attachment/fields/parent'
                ],
                'sourceId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 36,
                    'readOnly' => true,
                    'disabled' => true,
                    'index' => true
                ],
                'field' => (object) [
                    'type' => 'varchar',
                    'disabled' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'contents' => (object) [
                    'type' => 'text',
                    'notStorable' => true
                ],
                'role' => (object) [
                    'type' => 'enum',
                    'maxLength' => 36,
                    'options' => [
                        0 => 'Attachment',
                        1 => 'Inline Attachment',
                        2 => 'Import File',
                        3 => 'Export File',
                        4 => 'Mail Merge',
                        5 => 'Mass Pdf'
                    ]
                ],
                'storage' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 24,
                    'default' => NULL
                ],
                'storageFilePath' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 260,
                    'default' => NULL
                ],
                'global' => (object) [
                    'type' => 'bool',
                    'default' => false
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'foreign' => 'attachments'
                ],
                'related' => (object) [
                    'type' => 'belongsToParent'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'parent' => (object) [
                    'columns' => [
                        0 => 'parentType',
                        1 => 'parentId'
                    ]
                ]
            ],
            'sourceList' => [
                0 => 'Document'
            ]
        ],
        'AuthLogRecord' => (object) [
            'fields' => (object) [
                'username' => (object) [
                    'type' => 'varchar',
                    'readOnly' => true,
                    'maxLength' => 100
                ],
                'portal' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'user' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'authToken' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'ipAddress' => (object) [
                    'type' => 'varchar',
                    'maxLength' => '45',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'isDenied' => (object) [
                    'type' => 'bool',
                    'readOnly' => true
                ],
                'denialReason' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'CREDENTIALS',
                        2 => 'INACTIVE_USER',
                        3 => 'IS_PORTAL_USER',
                        4 => 'IS_NOT_PORTAL_USER',
                        5 => 'USER_IS_NOT_IN_PORTAL'
                    ],
                    'readOnly' => true
                ],
                'requestTime' => (object) [
                    'type' => 'float',
                    'readOnly' => true
                ],
                'requestUrl' => (object) [
                    'type' => 'varchar',
                    'readOnly' => true
                ],
                'requestMethod' => (object) [
                    'type' => 'varchar',
                    'readOnly' => true,
                    'maxLength' => '15'
                ],
                'authTokenIsActive' => (object) [
                    'type' => 'foreign',
                    'link' => 'authToken',
                    'field' => 'isActive',
                    'readOnly' => true,
                    'view' => 'views/fields/foreign-bool'
                ]
            ],
            'links' => (object) [
                'user' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User',
                    'noJoin' => true
                ],
                'portal' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Portal'
                ],
                'authToken' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'AuthToken',
                    'foreign' => 'authLog',
                    'foreignName' => 'id'
                ],
                'actionHistoryRecords' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'ActionHistoryRecord',
                    'foreign' => 'authLogRecord'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'requestTime',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'ipAddress',
                    1 => 'username'
                ]
            ],
            'indexes' => (object) [
                'ipAddress' => (object) [
                    'columns' => [
                        0 => 'ipAddress'
                    ]
                ],
                'ipAddressRequestTime' => (object) [
                    'columns' => [
                        0 => 'ipAddress',
                        1 => 'requestTime'
                    ]
                ],
                'requestTime' => (object) [
                    'columns' => [
                        0 => 'requestTime'
                    ]
                ]
            ]
        ],
        'AuthToken' => (object) [
            'fields' => (object) [
                'token' => (object) [
                    'type' => 'varchar',
                    'maxLength' => '36',
                    'index' => true,
                    'readOnly' => true
                ],
                'hash' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 150,
                    'index' => true,
                    'readOnly' => true
                ],
                'userId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => '36',
                    'readOnly' => true
                ],
                'user' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'portal' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'ipAddress' => (object) [
                    'type' => 'varchar',
                    'maxLength' => '45',
                    'readOnly' => true
                ],
                'isActive' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'lastAccess' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'user' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'portal' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Portal'
                ],
                'actionHistoryRecords' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'ActionHistoryRecord',
                    'foreign' => 'authToken'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'lastAccess',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'ipAddress',
                    1 => 'userName'
                ]
            ],
            'indexes' => (object) [
                'token' => (object) [
                    'columns' => [
                        0 => 'token',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Currency' => (object) [
            'fields' => (object) [
                'rate' => (object) [
                    'type' => 'float'
                ]
            ]
        ],
        'Email' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'subject' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'notStorable' => true,
                    'view' => 'views/email/fields/subject',
                    'disabled' => true,
                    'trim' => true
                ],
                'fromName' => (object) [
                    'type' => 'varchar'
                ],
                'fromString' => (object) [
                    'type' => 'varchar'
                ],
                'replyToString' => (object) [
                    'type' => 'varchar'
                ],
                'addressNameMap' => (object) [
                    'type' => 'jsonObject',
                    'disabled' => true,
                    'readOnly' => true
                ],
                'from' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'required' => true,
                    'view' => 'views/email/fields/from-address-varchar',
                    'textFilterDisabled' => true
                ],
                'to' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'required' => true,
                    'view' => 'views/email/fields/email-address-varchar',
                    'textFilterDisabled' => true
                ],
                'cc' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'view' => 'views/email/fields/email-address-varchar',
                    'textFilterDisabled' => true
                ],
                'bcc' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'view' => 'views/email/fields/email-address-varchar',
                    'textFilterDisabled' => true
                ],
                'replyTo' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'view' => 'views/email/fields/email-address-varchar',
                    'textFilterDisabled' => true
                ],
                'personStringData' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true,
                    'view' => 'views/email/fields/person-string-data'
                ],
                'isRead' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'default' => true,
                    'readOnly' => true
                ],
                'isNotRead' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'readOnly' => true
                ],
                'isReplied' => (object) [
                    'type' => 'bool',
                    'readOnly' => true
                ],
                'isNotReplied' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'readOnly' => true
                ],
                'isImportant' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'default' => false
                ],
                'inTrash' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'default' => false
                ],
                'folderId' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'default' => false,
                    'textFilterDisabled' => true
                ],
                'isUsers' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'default' => false
                ],
                'folder' => (object) [
                    'type' => 'link',
                    'notStorable' => true,
                    'readOnly' => true
                ],
                'nameHash' => (object) [
                    'type' => 'text',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'typeHash' => (object) [
                    'type' => 'text',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'idHash' => (object) [
                    'type' => 'text',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'messageId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 255,
                    'readOnly' => true,
                    'index' => true
                ],
                'messageIdInternal' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 300,
                    'readOnly' => true,
                    'textFilterDisabled' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'base',
                    'notStorable' => true,
                    'view' => 'views/email/fields/email-address'
                ],
                'fromEmailAddress' => (object) [
                    'type' => 'link',
                    'view' => 'views/email/fields/from-email-address',
                    'textFilterDisabled' => true
                ],
                'toEmailAddresses' => (object) [
                    'type' => 'linkMultiple'
                ],
                'ccEmailAddresses' => (object) [
                    'type' => 'linkMultiple'
                ],
                'replyToEmailAddresses' => (object) [
                    'type' => 'linkMultiple'
                ],
                'bodyPlain' => (object) [
                    'type' => 'text',
                    'seeMoreDisabled' => true,
                    'clientReadOnly' => true
                ],
                'body' => (object) [
                    'type' => 'wysiwyg',
                    'view' => 'views/email/fields/body',
                    'attachmentField' => 'attachments',
                    'useIframe' => true
                ],
                'isHtml' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Draft',
                        1 => 'Sending',
                        2 => 'Sent',
                        3 => 'Archived',
                        4 => 'Failed'
                    ],
                    'default' => 'Archived',
                    'clientReadOnly' => true
                ],
                'attachments' => (object) [
                    'type' => 'attachmentMultiple',
                    'sourceList' => [
                        0 => 'Document'
                    ]
                ],
                'hasAttachment' => (object) [
                    'type' => 'bool',
                    'readOnly' => true
                ],
                'parent' => (object) [
                    'type' => 'linkParent',
                    'entityList' => [
                        0 => 'Account',
                        1 => 'Lead',
                        2 => 'Contact',
                        3 => 'Opportunity',
                        4 => 'Case',
                        5 => 'Formularios',
                        6 => 'Solicitudes',
                        7 => 'Subcategoria',
                        8 => 'Beneficios',
                        9 => 'DoctosBeneficio',
                        10 => 'Ciudad',
                        11 => 'Comuna',
                        12 => 'Rol',
                        13 => 'Reclamo',
                        14 => 'MotivoReclamo',
                        15 => 'Beneficiario',
                        16 => 'Categoria',
                        17 => 'EstadoReclamo'
                    ]
                ],
                'dateSent' => (object) [
                    'type' => 'datetime'
                ],
                'deliveryDate' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'sentBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'noLoad' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => false,
                    'view' => 'views/fields/assigned-user'
                ],
                'replied' => (object) [
                    'type' => 'link',
                    'noJoin' => true,
                    'readOnly' => true
                ],
                'replies' => (object) [
                    'type' => 'linkMultiple',
                    'readOnly' => true,
                    'orderBy' => 'dateSent'
                ],
                'isSystem' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'readOnly' => true
                ],
                'isJustSent' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'disabled' => true,
                    'notStorable' => true
                ],
                'isBeingImported' => (object) [
                    'type' => 'bool',
                    'disabled' => true,
                    'notStorable' => true
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'users' => (object) [
                    'type' => 'linkMultiple',
                    'noLoad' => true,
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'readOnly' => true,
                    'columns' => (object) [
                        'inTrash' => 'inTrash',
                        'folderId' => 'folderId'
                    ]
                ],
                'assignedUsers' => (object) [
                    'type' => 'linkMultiple',
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'readOnly' => true
                ],
                'inboundEmails' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true
                ],
                'emailAccounts' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true
                ],
                'account' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'formularios' => (object) [
                    'type' => 'link'
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam'
                ],
                'assignedUsers' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'relationName' => 'entityUser'
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'emails',
                    'additionalColumns' => (object) [
                        'isRead' => (object) [
                            'type' => 'bool',
                            'default' => false
                        ],
                        'isImportant' => (object) [
                            'type' => 'bool',
                            'default' => false
                        ],
                        'inTrash' => (object) [
                            'type' => 'bool',
                            'default' => false
                        ],
                        'folderId' => (object) [
                            'type' => 'varchar',
                            'default' => NULL,
                            'maxLength' => 24
                        ]
                    ]
                ],
                'sentBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'attachments' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Attachment',
                    'foreign' => 'parent',
                    'relationName' => 'attachments'
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'entityList' => [
                        
                    ],
                    'foreign' => 'emails'
                ],
                'replied' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Email',
                    'foreign' => 'replies'
                ],
                'replies' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Email',
                    'foreign' => 'replied'
                ],
                'fromEmailAddress' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'EmailAddress'
                ],
                'toEmailAddresses' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'EmailAddress',
                    'relationName' => 'emailEmailAddress',
                    'conditions' => (object) [
                        'addressType' => 'to'
                    ],
                    'additionalColumns' => (object) [
                        'addressType' => (object) [
                            'type' => 'varchar',
                            'len' => '4'
                        ]
                    ]
                ],
                'ccEmailAddresses' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'EmailAddress',
                    'relationName' => 'emailEmailAddress',
                    'conditions' => (object) [
                        'addressType' => 'cc'
                    ],
                    'additionalColumns' => (object) [
                        'addressType' => (object) [
                            'type' => 'varchar',
                            'len' => '4'
                        ]
                    ]
                ],
                'bccEmailAddresses' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'EmailAddress',
                    'relationName' => 'emailEmailAddress',
                    'conditions' => (object) [
                        'addressType' => 'bcc'
                    ],
                    'additionalColumns' => (object) [
                        'addressType' => (object) [
                            'type' => 'varchar',
                            'len' => '4'
                        ]
                    ]
                ],
                'replyToEmailAddresses' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'EmailAddress',
                    'relationName' => 'emailEmailAddress',
                    'conditions' => (object) [
                        'addressType' => 'rto'
                    ],
                    'additionalColumns' => (object) [
                        'addressType' => (object) [
                            'type' => 'varchar',
                            'len' => '4'
                        ]
                    ]
                ],
                'inboundEmails' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'InboundEmail',
                    'foreign' => 'emails'
                ],
                'emailAccounts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'EmailAccount',
                    'foreign' => 'emails'
                ],
                'account' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account'
                ],
                'formularios' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'emails',
                    'entity' => 'Formularios',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'dateSent',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'bodyPlain',
                    2 => 'body'
                ],
                'fullTextSearch' => true
            ],
            'indexes' => (object) [
                'dateSent' => (object) [
                    'columns' => [
                        0 => 'dateSent',
                        1 => 'deleted'
                    ]
                ],
                'dateSentStatus' => (object) [
                    'columns' => [
                        0 => 'dateSent',
                        1 => 'status',
                        2 => 'deleted'
                    ]
                ]
            ]
        ],
        'EmailAccount' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 100,
                    'trim' => true,
                    'view' => 'views/email-account/fields/email-address'
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Active',
                        1 => 'Inactive'
                    ],
                    'default' => 'Active'
                ],
                'host' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'port' => (object) [
                    'type' => 'varchar',
                    'default' => '143',
                    'required' => true
                ],
                'ssl' => (object) [
                    'type' => 'bool'
                ],
                'username' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'password' => (object) [
                    'type' => 'password'
                ],
                'monitoredFolders' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'default' => 'INBOX',
                    'view' => 'views/email-account/fields/folders',
                    'tooltip' => true
                ],
                'sentFolder' => (object) [
                    'type' => 'varchar',
                    'view' => 'views/email-account/fields/folder'
                ],
                'storeSentEmails' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'keepFetchedEmailsUnread' => (object) [
                    'type' => 'bool'
                ],
                'fetchSince' => (object) [
                    'type' => 'date',
                    'required' => true
                ],
                'fetchData' => (object) [
                    'type' => 'jsonObject',
                    'readOnly' => true
                ],
                'emailFolder' => (object) [
                    'type' => 'link',
                    'view' => 'views/email-account/fields/email-folder'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'useImap' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'useSmtp' => (object) [
                    'type' => 'bool'
                ],
                'smtpHost' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'smtpPort' => (object) [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 9999,
                    'default' => 25
                ],
                'smtpAuth' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'smtpSecurity' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'SSL',
                        2 => 'TLS'
                    ]
                ],
                'smtpUsername' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'smtpPassword' => (object) [
                    'type' => 'password'
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'filters' => (object) [
                    'type' => 'hasChildren',
                    'foreign' => 'parent',
                    'entity' => 'EmailFilter'
                ],
                'emails' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Email',
                    'foreign' => 'emailAccounts'
                ],
                'emailFolder' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'EmailFolder'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'EmailAddress' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true
                ],
                'lower' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'index' => true
                ],
                'invalid' => (object) [
                    'type' => 'bool'
                ],
                'optOut' => (object) [
                    'type' => 'bool'
                ]
            ],
            'links' => (object) [
                
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'EmailFilter' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 100,
                    'tooltip' => true,
                    'trim' => true
                ],
                'from' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 255,
                    'tooltip' => true,
                    'trim' => true
                ],
                'to' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 255,
                    'tooltip' => true,
                    'trim' => true
                ],
                'subject' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 255,
                    'tooltip' => true
                ],
                'bodyContains' => (object) [
                    'type' => 'array',
                    'tooltip' => true
                ],
                'isGlobal' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'parent' => (object) [
                    'type' => 'linkParent'
                ],
                'action' => (object) [
                    'type' => 'enum',
                    'default' => 'Skip',
                    'options' => [
                        0 => 'Skip',
                        1 => 'Move to Folder'
                    ],
                    'view' => 'views/email-filter/fields/action'
                ],
                'emailFolder' => (object) [
                    'type' => 'link',
                    'view' => 'views/email-filter/fields/email-folder'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'entityList' => [
                        0 => 'User',
                        1 => 'EmailAccount',
                        2 => 'InboundEmail'
                    ]
                ],
                'emailFolder' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'EmailFolder'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ]
        ],
        'EmailFolder' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 64,
                    'trim' => true
                ],
                'order' => (object) [
                    'type' => 'int'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'skipNotifications' => (object) [
                    'type' => 'bool'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'order',
                'asc' => true
            ]
        ],
        'EmailTemplate' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'subject' => (object) [
                    'type' => 'varchar'
                ],
                'body' => (object) [
                    'type' => 'text',
                    'view' => 'views/fields/wysiwyg',
                    'useIframe' => true
                ],
                'isHtml' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'oneOff' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'tooltip' => true
                ],
                'attachments' => (object) [
                    'type' => 'attachmentMultiple'
                ],
                'category' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/link-category-tree'
                ],
                'assignedUser' => (object) [
                    'type' => 'link'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ]
            ],
            'links' => (object) [
                'attachments' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Attachment',
                    'foreign' => 'parent'
                ],
                'category' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'emailTemplates',
                    'entity' => 'EmailTemplateCategory'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'bodyPlain',
                    2 => 'body',
                    3 => 'subject'
                ]
            ]
        ],
        'EmailTemplateCategory' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'order' => (object) [
                    'type' => 'int',
                    'minValue' => 1,
                    'required' => true,
                    'textFilterDisabled' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple'
                ],
                'parent' => (object) [
                    'type' => 'link'
                ],
                'childList' => (object) [
                    'type' => 'jsonArray',
                    'notStorable' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'parent' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'children',
                    'entity' => 'EmailTemplateCategory'
                ],
                'children' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'parent',
                    'entity' => 'EmailTemplateCategory'
                ],
                'emailTemplates' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'category',
                    'entity' => 'EmailTemplate'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'parent',
                'asc' => true
            ],
            'additionalTables' => (object) [
                'EmailTemplateCategoryPath' => (object) [
                    'fields' => (object) [
                        'id' => (object) [
                            'type' => 'id',
                            'dbType' => 'int',
                            'len' => '11',
                            'autoincrement' => true,
                            'unique' => true
                        ],
                        'ascendorId' => (object) [
                            'type' => 'varchar',
                            'len' => '100',
                            'index' => true
                        ],
                        'descendorId' => (object) [
                            'type' => 'varchar',
                            'len' => '24',
                            'index' => true
                        ]
                    ]
                ]
            ]
        ],
        'Extension' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true
                ],
                'version' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 50
                ],
                'fileList' => (object) [
                    'type' => 'jsonArray'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'isInstalled' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'checkVersionUrl' => (object) [
                    'type' => 'url'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ]
        ],
        'ExternalAccount' => (object) [
            'fields' => (object) [
                'id' => (object) [
                    'type' => 'id',
                    'maxLength' => 64
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'enabled' => (object) [
                    'type' => 'bool'
                ]
            ]
        ],
        'Import' => (object) [
            'fields' => (object) [
                'entityType' => (object) [
                    'type' => 'enum',
                    'translation' => 'Global.scopeNames',
                    'required' => true,
                    'readOnly' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'In Process',
                        1 => 'Complete',
                        2 => 'Failed'
                    ],
                    'readOnly' => true,
                    'view' => 'views/fields/enum-styled',
                    'style' => (object) [
                        'Complete' => 'success',
                        'Failed' => 'danger'
                    ]
                ],
                'file' => (object) [
                    'type' => 'file',
                    'required' => true,
                    'readOnly' => true
                ],
                'importedCount' => (object) [
                    'type' => 'int',
                    'readOnly' => true,
                    'notStorable' => true
                ],
                'duplicateCount' => (object) [
                    'type' => 'int',
                    'readOnly' => true,
                    'notStorable' => true
                ],
                'updatedCount' => (object) [
                    'type' => 'int',
                    'readOnly' => true,
                    'notStorable' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ]
        ],
        'InboundEmail' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 100,
                    'view' => 'views/inbound-email/fields/email-address',
                    'trim' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Active',
                        1 => 'Inactive'
                    ],
                    'default' => 'Active'
                ],
                'host' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'port' => (object) [
                    'type' => 'varchar',
                    'default' => '143'
                ],
                'ssl' => (object) [
                    'type' => 'bool'
                ],
                'username' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'password' => (object) [
                    'type' => 'password'
                ],
                'monitoredFolders' => (object) [
                    'type' => 'varchar',
                    'default' => 'INBOX',
                    'view' => 'views/inbound-email/fields/folders',
                    'tooltip' => true
                ],
                'fetchSince' => (object) [
                    'type' => 'date',
                    'required' => true
                ],
                'fetchData' => (object) [
                    'type' => 'jsonObject',
                    'readOnly' => true
                ],
                'assignToUser' => (object) [
                    'type' => 'link',
                    'tooltip' => true
                ],
                'team' => (object) [
                    'type' => 'link',
                    'tooltip' => true
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'addAllTeamUsers' => (object) [
                    'type' => 'bool',
                    'tooltip' => true,
                    'default' => true
                ],
                'sentFolder' => (object) [
                    'type' => 'varchar',
                    'view' => 'views/inbound-email/fields/folder'
                ],
                'storeSentEmails' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'useImap' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'useSmtp' => (object) [
                    'type' => 'bool'
                ],
                'smtpIsShared' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'smtpIsForMassEmail' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'smtpHost' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'smtpPort' => (object) [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 9999,
                    'default' => 25
                ],
                'smtpAuth' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'smtpSecurity' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'SSL',
                        2 => 'TLS'
                    ]
                ],
                'smtpUsername' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'smtpPassword' => (object) [
                    'type' => 'password'
                ],
                'createCase' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'caseDistribution' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Direct-Assignment',
                        2 => 'Round-Robin',
                        3 => 'Least-Busy'
                    ],
                    'default' => 'Direct-Assignment',
                    'tooltip' => true
                ],
                'targetUserPosition' => (object) [
                    'type' => 'enum',
                    'view' => 'views/inbound-email/fields/target-user-position',
                    'tooltip' => true
                ],
                'reply' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'replyEmailTemplate' => (object) [
                    'type' => 'link'
                ],
                'replyFromAddress' => (object) [
                    'type' => 'varchar'
                ],
                'replyToAddress' => (object) [
                    'type' => 'varchar',
                    'tooltip' => true
                ],
                'replyFromName' => (object) [
                    'type' => 'varchar'
                ],
                'fromName' => (object) [
                    'type' => 'varchar'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'foreign' => 'inboundEmails'
                ],
                'assignToUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'team' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Team'
                ],
                'replyEmailTemplate' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'EmailTemplate'
                ],
                'filters' => (object) [
                    'type' => 'hasChildren',
                    'foreign' => 'parent',
                    'entity' => 'EmailFilter'
                ],
                'emails' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Email',
                    'foreign' => 'inboundEmails'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'Integration' => (object) [
            'fields' => (object) [
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'enabled' => (object) [
                    'type' => 'bool'
                ]
            ]
        ],
        'Job' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'view' => 'views/admin/job/fields/name'
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Pending',
                        1 => 'Running',
                        2 => 'Success',
                        3 => 'Failed'
                    ],
                    'default' => 'Pending'
                ],
                'executeTime' => (object) [
                    'type' => 'datetime',
                    'required' => true
                ],
                'serviceName' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 100
                ],
                'method' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 100
                ],
                'methodName' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'scheduledJob' => (object) [
                    'type' => 'link'
                ],
                'scheduledJobJob' => (object) [
                    'type' => 'foreign',
                    'link' => 'scheduledJob',
                    'field' => 'job'
                ],
                'pid' => (object) [
                    'type' => 'int'
                ],
                'attempts' => (object) [
                    'type' => 'int'
                ],
                'targetId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 48
                ],
                'targetType' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 64
                ],
                'failedAttempts' => (object) [
                    'type' => 'int'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'scheduledJob' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'ScheduledJob'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'methodName',
                    2 => 'serviceName',
                    3 => 'scheduledJobName'
                ]
            ],
            'indexes' => (object) [
                'executeTime' => (object) [
                    'columns' => [
                        0 => 'status',
                        1 => 'executeTime'
                    ]
                ],
                'status' => (object) [
                    'columns' => [
                        0 => 'status',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'LeadCapture' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100,
                    'trim' => true
                ],
                'campaign' => (object) [
                    'type' => 'link'
                ],
                'isActive' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'subscribeToTargetList' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'subscribeContactToTargetList' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'targetList' => (object) [
                    'type' => 'link'
                ],
                'fieldList' => (object) [
                    'type' => 'multiEnum',
                    'default' => [
                        0 => 'firstName',
                        1 => 'lastName',
                        2 => 'emailAddress'
                    ],
                    'view' => 'views/lead-capture/fields/field-list',
                    'required' => true,
                    'ignoreFieldList' => [
                        0 => 'targetList',
                        1 => 'targetLists',
                        2 => 'acceptanceStatusMeetings',
                        3 => 'acceptanceStatusCalls',
                        4 => 'campaign',
                        5 => 'source',
                        6 => 'teams',
                        7 => 'createdOpportunity',
                        8 => 'createdAccount',
                        9 => 'createdContact'
                    ]
                ],
                'optInConfirmation' => (object) [
                    'type' => 'bool'
                ],
                'optInConfirmationEmailTemplate' => (object) [
                    'type' => 'link'
                ],
                'optInConfirmationLifetime' => (object) [
                    'type' => 'int',
                    'default' => 48,
                    'min' => 1
                ],
                'optInConfirmationSuccessMessage' => (object) [
                    'type' => 'text',
                    'tooltip' => true
                ],
                'leadSource' => (object) [
                    'type' => 'enum',
                    'view' => 'crm:views/opportunity/fields/lead-source',
                    'customizationOptionsDisabled' => true,
                    'default' => 'Web Site'
                ],
                'apiKey' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 36,
                    'readOnly' => true,
                    'view' => 'views/lead-capture/fields/api-key'
                ],
                'targetTeam' => (object) [
                    'type' => 'link'
                ],
                'exampleRequestUrl' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'readOnly' => true
                ],
                'exampleRequestMethod' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'readOnly' => true
                ],
                'exampleRequestPayload' => (object) [
                    'type' => 'text',
                    'notStorable' => true,
                    'readOnly' => true,
                    'seeMoreDisabled' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'targetList' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'TargetList'
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign'
                ],
                'targetTeam' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Team'
                ],
                'optInConfirmationEmailTemplate' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'EmailTemplate'
                ],
                'logRecords' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'LeadCaptureLogRecord',
                    'foreign' => 'leadCapture'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'LeadCaptureLogRecord' => (object) [
            'fields' => (object) [
                'number' => (object) [
                    'type' => 'autoincrement',
                    'index' => true,
                    'readOnly' => true
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'isCreated' => (object) [
                    'type' => 'bool'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'leadCapture' => (object) [
                    'type' => 'link'
                ],
                'target' => (object) [
                    'type' => 'linkParent'
                ]
            ],
            'links' => (object) [
                'leadCapture' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'LeadCapture',
                    'foreign' => 'logRecords'
                ],
                'target' => (object) [
                    'type' => 'belongsToParent',
                    'entityList' => [
                        0 => 'Contact',
                        1 => 'Lead'
                    ]
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'number',
                'asc' => false
            ]
        ],
        'NextNumber' => (object) [
            'fields' => (object) [
                'entityType' => (object) [
                    'type' => 'varchar',
                    'index' => true
                ],
                'fieldName' => (object) [
                    'type' => 'varchar'
                ],
                'value' => (object) [
                    'type' => 'int',
                    'default' => 1
                ]
            ]
        ],
        'Note' => (object) [
            'fields' => (object) [
                'post' => (object) [
                    'type' => 'text',
                    'rows' => 30
                ],
                'data' => (object) [
                    'type' => 'jsonObject',
                    'readOnly' => true
                ],
                'type' => (object) [
                    'type' => 'varchar',
                    'readOnly' => true,
                    'view' => 'views/fields/enum',
                    'options' => [
                        0 => 'Post'
                    ]
                ],
                'targetType' => (object) [
                    'type' => 'varchar'
                ],
                'parent' => (object) [
                    'type' => 'linkParent',
                    'readOnly' => true
                ],
                'related' => (object) [
                    'type' => 'linkParent',
                    'readOnly' => true
                ],
                'attachments' => (object) [
                    'type' => 'attachmentMultiple',
                    'view' => 'views/stream/fields/attachment-multiple'
                ],
                'number' => (object) [
                    'type' => 'autoincrement',
                    'index' => true,
                    'readOnly' => true
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'noLoad' => true
                ],
                'portals' => (object) [
                    'type' => 'linkMultiple',
                    'noLoad' => true
                ],
                'users' => (object) [
                    'type' => 'linkMultiple',
                    'noLoad' => true
                ],
                'isGlobal' => (object) [
                    'type' => 'bool'
                ],
                'createdByGender' => (object) [
                    'type' => 'foreign',
                    'link' => 'createdBy',
                    'field' => 'gender'
                ],
                'notifiedUserIdList' => (object) [
                    'type' => 'jsonArray',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'isInternal' => (object) [
                    'type' => 'bool'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'attachments' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Attachment',
                    'relationName' => 'attachments',
                    'foreign' => 'parent'
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'foreign' => 'notes'
                ],
                'superParent' => (object) [
                    'type' => 'belongsToParent'
                ],
                'related' => (object) [
                    'type' => 'belongsToParent'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'foreign' => 'notes'
                ],
                'portals' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Portal',
                    'foreign' => 'notes'
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'notes'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'number',
                'asc' => false
            ],
            'statusStyles' => (object) [
                'Lead' => (object) [
                    'Assigned' => 'primary',
                    'In Process' => 'primary',
                    'Converted' => 'success',
                    'Recycled' => 'danger',
                    'Dead' => 'danger'
                ],
                'Case' => (object) [
                    'Assigned' => 'primary',
                    'Pending' => 'default',
                    'Closed' => 'success',
                    'Rejected' => 'danger',
                    'Duplicate' => 'danger'
                ],
                'Opportunity' => (object) [
                    'Proposal' => 'primary',
                    'Negotiation' => 'primary',
                    'Closed Won' => 'success',
                    'Closed Lost' => 'danger'
                ],
                'Task' => (object) [
                    'Completed' => 'success',
                    'Started' => 'primary',
                    'Canceled' => 'danger'
                ],
                'Meeting' => (object) [
                    'Held' => 'success'
                ],
                'Call' => (object) [
                    'Held' => 'success'
                ]
            ],
            'indexes' => (object) [
                'createdAt' => (object) [
                    'type' => 'index',
                    'columns' => [
                        0 => 'createdAt'
                    ]
                ],
                'parent' => (object) [
                    'type' => 'index',
                    'columns' => [
                        0 => 'parentId',
                        1 => 'parentType'
                    ]
                ],
                'parentAndSuperParent' => (object) [
                    'type' => 'index',
                    'columns' => [
                        0 => 'parentId',
                        1 => 'parentType',
                        2 => 'superParentId',
                        3 => 'superParentType'
                    ]
                ]
            ]
        ],
        'Notification' => (object) [
            'fields' => (object) [
                'number' => (object) [
                    'type' => 'autoincrement',
                    'index' => true
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'noteData' => (object) [
                    'type' => 'jsonObject',
                    'notStorable' => true
                ],
                'type' => (object) [
                    'type' => 'varchar'
                ],
                'read' => (object) [
                    'type' => 'bool'
                ],
                'emailIsProcessed' => (object) [
                    'type' => 'bool'
                ],
                'user' => (object) [
                    'type' => 'link'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'message' => (object) [
                    'type' => 'text'
                ],
                'related' => (object) [
                    'type' => 'linkParent',
                    'readOnly' => true
                ],
                'relatedParent' => (object) [
                    'type' => 'linkParent',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'user' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'related' => (object) [
                    'type' => 'belongsToParent'
                ],
                'relatedParent' => (object) [
                    'type' => 'belongsToParent'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'number',
                'asc' => false
            ],
            'indexes' => (object) [
                'createdAt' => (object) [
                    'type' => 'index',
                    'columns' => [
                        0 => 'createdAt'
                    ]
                ],
                'user' => (object) [
                    'type' => 'index',
                    'columns' => [
                        0 => 'userId',
                        1 => 'createdAt'
                    ]
                ]
            ]
        ],
        'PasswordChangeRequest' => (object) [
            'fields' => (object) [
                'requestId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 24,
                    'index' => true
                ],
                'user' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'index' => true
                ],
                'url' => (object) [
                    'type' => 'url'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'user' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ]
            ]
        ],
        'PhoneNumber' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 36,
                    'index' => true
                ],
                'type' => (object) [
                    'type' => 'enum'
                ],
                'numeric' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 36,
                    'index' => true
                ]
            ],
            'links' => (object) [
                
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'Portal' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100,
                    'trim' => true
                ],
                'logo' => (object) [
                    'type' => 'image'
                ],
                'url' => (object) [
                    'type' => 'url',
                    'notStorable' => true,
                    'readOnly' => true
                ],
                'customId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 36,
                    'view' => 'views/portal/fields/custom-id',
                    'trim' => true,
                    'index' => true
                ],
                'isActive' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'isDefault' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'notStorable' => true
                ],
                'portalRoles' => (object) [
                    'type' => 'linkMultiple'
                ],
                'tabList' => (object) [
                    'type' => 'array',
                    'view' => 'views/portal/fields/tab-list'
                ],
                'quickCreateList' => (object) [
                    'type' => 'array',
                    'translation' => 'Global.scopeNames',
                    'view' => 'views/portal/fields/quick-create-list'
                ],
                'companyLogo' => (object) [
                    'type' => 'image'
                ],
                'theme' => (object) [
                    'type' => 'enum',
                    'view' => 'views/preferences/fields/theme',
                    'translation' => 'Global.themes',
                    'default' => ''
                ],
                'language' => (object) [
                    'type' => 'enum',
                    'view' => 'views/preferences/fields/language',
                    'default' => ''
                ],
                'timeZone' => (object) [
                    'type' => 'enum',
                    'detault' => '',
                    'view' => 'views/preferences/fields/time-zone'
                ],
                'dateFormat' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'MM/DD/YYYY',
                        1 => 'YYYY-MM-DD',
                        2 => 'DD.MM.YYYY',
                        3 => 'DD/MM/YYYY'
                    ],
                    'default' => '',
                    'view' => 'views/preferences/fields/date-format'
                ],
                'timeFormat' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'HH:mm',
                        1 => 'hh:mma',
                        2 => 'hh:mmA',
                        3 => 'hh:mm A',
                        4 => 'hh:mm a'
                    ],
                    'default' => '',
                    'view' => 'views/preferences/fields/time-format'
                ],
                'weekStart' => (object) [
                    'type' => 'enumInt',
                    'options' => [
                        0 => 0,
                        1 => 1
                    ],
                    'default' => -1,
                    'view' => 'views/preferences/fields/week-start'
                ],
                'defaultCurrency' => (object) [
                    'type' => 'enum',
                    'default' => '',
                    'view' => 'views/preferences/fields/default-currency'
                ],
                'dashboardLayout' => (object) [
                    'type' => 'jsonArray',
                    'view' => 'views/settings/fields/dashboard-layout'
                ],
                'dashletsOptions' => (object) [
                    'type' => 'jsonObject',
                    'disabled' => true
                ],
                'customUrl' => (object) [
                    'type' => 'url'
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'portals'
                ],
                'portalRoles' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'PortalRole',
                    'foreign' => 'portals'
                ],
                'notes' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Note',
                    'foreign' => 'portals'
                ],
                'articles' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'KnowledgeBaseArticle',
                    'foreign' => 'portals'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'PortalRole' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'maxLength' => 150,
                    'required' => true,
                    'type' => 'varchar',
                    'trim' => true
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'fieldData' => (object) [
                    'type' => 'jsonObject'
                ],
                'exportPermission' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'not-set',
                        1 => 'yes',
                        2 => 'no'
                    ],
                    'default' => 'not-set',
                    'tooltip' => true,
                    'translation' => 'Role.options.levelList'
                ]
            ],
            'links' => (object) [
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'portalRoles'
                ],
                'portals' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Portal',
                    'foreign' => 'portalRoles'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'Preferences' => (object) [
            'fields' => (object) [
                'timeZone' => (object) [
                    'type' => 'enum',
                    'detault' => '',
                    'view' => 'views/preferences/fields/time-zone'
                ],
                'dateFormat' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'MM/DD/YYYY',
                        1 => 'YYYY-MM-DD',
                        2 => 'DD.MM.YYYY',
                        3 => 'DD/MM/YYYY'
                    ],
                    'default' => '',
                    'view' => 'views/preferences/fields/date-format'
                ],
                'timeFormat' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'HH:mm',
                        1 => 'hh:mma',
                        2 => 'hh:mmA',
                        3 => 'hh:mm A',
                        4 => 'hh:mm a'
                    ],
                    'default' => '',
                    'view' => 'views/preferences/fields/time-format'
                ],
                'weekStart' => (object) [
                    'type' => 'enumInt',
                    'options' => [
                        0 => 0,
                        1 => 1
                    ],
                    'default' => -1,
                    'view' => 'views/preferences/fields/week-start'
                ],
                'defaultCurrency' => (object) [
                    'type' => 'enum',
                    'default' => '',
                    'view' => 'views/preferences/fields/default-currency'
                ],
                'thousandSeparator' => (object) [
                    'type' => 'varchar',
                    'default' => ',',
                    'maxLength' => 1,
                    'view' => 'views/settings/fields/thousand-separator'
                ],
                'decimalMark' => (object) [
                    'type' => 'varchar',
                    'default' => '.',
                    'required' => true,
                    'maxLength' => 1
                ],
                'dashboardLayout' => (object) [
                    'type' => 'jsonArray',
                    'view' => 'views/settings/fields/dashboard-layout'
                ],
                'dashletsOptions' => (object) [
                    'type' => 'jsonObject'
                ],
                'sharedCalendarUserList' => (object) [
                    'type' => 'jsonArray'
                ],
                'calendarViewDataList' => (object) [
                    'type' => 'jsonArray'
                ],
                'presetFilters' => (object) [
                    'type' => 'jsonObject'
                ],
                'smtpEmailAddress' => (object) [
                    'type' => 'varchar',
                    'readOnly' => true,
                    'notStorable' => true,
                    'view' => 'views/preferences/fields/smtp-email-address',
                    'trim' => true
                ],
                'smtpServer' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'smtpPort' => (object) [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 9999,
                    'default' => 25
                ],
                'smtpAuth' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'smtpSecurity' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'SSL',
                        2 => 'TLS'
                    ]
                ],
                'smtpUsername' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'smtpPassword' => (object) [
                    'type' => 'password'
                ],
                'language' => (object) [
                    'type' => 'enum',
                    'default' => '',
                    'view' => 'views/preferences/fields/language'
                ],
                'exportDelimiter' => (object) [
                    'type' => 'varchar',
                    'default' => ',',
                    'required' => true,
                    'maxLength' => 1
                ],
                'receiveAssignmentEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'receiveMentionEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'receiveStreamEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'autoFollowEntityTypeList' => (object) [
                    'type' => 'multiEnum',
                    'view' => 'views/preferences/fields/auto-follow-entity-type-list',
                    'translation' => 'Global.scopeNamesPlural',
                    'notStorable' => true,
                    'tooltip' => true
                ],
                'signature' => (object) [
                    'type' => 'text',
                    'view' => 'views/fields/wysiwyg'
                ],
                'defaultReminders' => (object) [
                    'type' => 'jsonArray',
                    'view' => 'crm:views/meeting/fields/reminders'
                ],
                'theme' => (object) [
                    'type' => 'enum',
                    'view' => 'views/preferences/fields/theme',
                    'translation' => 'Global.themes'
                ],
                'useCustomTabList' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'tabList' => (object) [
                    'type' => 'array',
                    'view' => 'views/preferences/fields/tab-list'
                ],
                'emailReplyToAllByDefault' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'emailReplyForceHtml' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'isPortalUser' => (object) [
                    'type' => 'bool',
                    'notStorable' => true
                ],
                'doNotFillAssignedUserIfNotRequired' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'followEntityOnStreamPost' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'followCreatedEntities' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'followCreatedEntityTypeList' => (object) [
                    'type' => 'multiEnum',
                    'view' => 'views/preferences/fields/auto-follow-entity-type-list',
                    'translation' => 'Global.scopeNamesPlural',
                    'tooltip' => true
                ],
                'emailUseExternalClient' => (object) [
                    'type' => 'bool'
                ],
                'scopeColorsDisabled' => (object) [
                    'type' => 'bool'
                ],
                'tabColorsDisabled' => (object) [
                    'type' => 'bool'
                ]
            ]
        ],
        'Role' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'maxLength' => 150,
                    'required' => true,
                    'type' => 'varchar',
                    'trim' => true
                ],
                'assignmentPermission' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'not-set',
                        1 => 'all',
                        2 => 'team',
                        3 => 'no'
                    ],
                    'default' => 'not-set',
                    'tooltip' => true,
                    'translation' => 'Role.options.levelList'
                ],
                'userPermission' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'not-set',
                        1 => 'all',
                        2 => 'team',
                        3 => 'no'
                    ],
                    'default' => 'not-set',
                    'tooltip' => true,
                    'translation' => 'Role.options.levelList'
                ],
                'portalPermission' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'not-set',
                        1 => 'yes',
                        2 => 'no'
                    ],
                    'default' => 'not-set',
                    'tooltip' => true,
                    'translation' => 'Role.options.levelList'
                ],
                'groupEmailAccountPermission' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'not-set',
                        1 => 'all',
                        2 => 'team',
                        3 => 'no'
                    ],
                    'default' => 'not-set',
                    'tooltip' => true,
                    'translation' => 'Role.options.levelList'
                ],
                'exportPermission' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'not-set',
                        1 => 'yes',
                        2 => 'no'
                    ],
                    'default' => 'not-set',
                    'tooltip' => true,
                    'translation' => 'Role.options.levelList'
                ],
                'dataPrivacyPermission' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'not-set',
                        1 => 'yes',
                        2 => 'no'
                    ],
                    'default' => 'not-set',
                    'tooltip' => true,
                    'translation' => 'Role.options.levelList'
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'fieldData' => (object) [
                    'type' => 'jsonObject'
                ]
            ],
            'links' => (object) [
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'roles',
                    'audited' => false
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'foreign' => 'roles'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'ScheduledJob' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true
                ],
                'job' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'view' => 'views/scheduled-job/fields/job'
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Active',
                        1 => 'Inactive'
                    ]
                ],
                'scheduling' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'view' => 'views/scheduled-job/fields/scheduling',
                    'tooltip' => true
                ],
                'lastRun' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'isInternal' => (object) [
                    'type' => 'bool',
                    'readOnly' => true,
                    'disabled' => true,
                    'default' => false
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'log' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'ScheduledJobLogRecord',
                    'foreign' => 'scheduledJob'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ],
            'jobSchedulingMap' => (object) [
                'CheckInboundEmails' => '*/2 * * * *',
                'CheckEmailAccounts' => '*/1 * * * *',
                'SendEmailReminders' => '*/2 * * * *',
                'Cleanup' => '1 1 * * 0',
                'AuthTokenControl' => '*/6 * * * *',
                'SendEmailNotifications' => '*/2 * * * *',
                'ProcessMassEmail' => '15 * * * *',
                'ControlKnowledgeBaseArticleStatus' => '10 1 * * *'
            ],
            'jobs' => (object) [
                'Dummy' => (object) [
                    'isSystem' => true,
                    'scheduling' => '1 */12 * * *'
                ],
                'CheckNewVersion' => (object) [
                    'name' => 'Check for New Version',
                    'isSystem' => true,
                    'scheduling' => '15 5 * * *'
                ],
                'CheckNewExtensionVersion' => (object) [
                    'name' => 'Check for New Versions of Installed Extensions',
                    'isSystem' => true,
                    'scheduling' => '25 5 * * *'
                ]
            ]
        ],
        'ScheduledJobLogRecord' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'readOnly' => true
                ],
                'status' => (object) [
                    'type' => 'varchar',
                    'readOnly' => true
                ],
                'executionTime' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'scheduledJob' => (object) [
                    'type' => 'link'
                ],
                'target' => (object) [
                    'type' => 'linkParent'
                ]
            ],
            'links' => (object) [
                'scheduledJob' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'ScheduledJob'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'executionTime',
                'asc' => false
            ]
        ],
        'Settings' => (object) [
            'fields' => (object) [
                'useCache' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'recordsPerPage' => (object) [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 200,
                    'default' => 20,
                    'required' => true,
                    'tooltip' => true
                ],
                'recordsPerPageSmall' => (object) [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 100,
                    'default' => 10,
                    'required' => true,
                    'tooltip' => true
                ],
                'timeZone' => (object) [
                    'type' => 'enum',
                    'default' => 'UTC',
                    'options' => [
                        0 => 'UTC',
                        1 => 'Africa/Abidjan',
                        2 => 'Africa/Accra',
                        3 => 'Africa/Addis_Ababa',
                        4 => 'Africa/Algiers',
                        5 => 'Africa/Asmara',
                        6 => 'Africa/Bamako',
                        7 => 'Africa/Bangui',
                        8 => 'Africa/Banjul',
                        9 => 'Africa/Bissau',
                        10 => 'Africa/Blantyre',
                        11 => 'Africa/Brazzaville',
                        12 => 'Africa/Bujumbura',
                        13 => 'Africa/Cairo',
                        14 => 'Africa/Casablanca',
                        15 => 'Africa/Ceuta',
                        16 => 'Africa/Conakry',
                        17 => 'Africa/Dakar',
                        18 => 'Africa/Dar_es_Salaam',
                        19 => 'Africa/Djibouti',
                        20 => 'Africa/Douala',
                        21 => 'Africa/El_Aaiun',
                        22 => 'Africa/Freetown',
                        23 => 'Africa/Gaborone',
                        24 => 'Africa/Harare',
                        25 => 'Africa/Johannesburg',
                        26 => 'Africa/Juba',
                        27 => 'Africa/Kampala',
                        28 => 'Africa/Khartoum',
                        29 => 'Africa/Kigali',
                        30 => 'Africa/Kinshasa',
                        31 => 'Africa/Lagos',
                        32 => 'Africa/Libreville',
                        33 => 'Africa/Lome',
                        34 => 'Africa/Luanda',
                        35 => 'Africa/Lubumbashi',
                        36 => 'Africa/Lusaka',
                        37 => 'Africa/Malabo',
                        38 => 'Africa/Maputo',
                        39 => 'Africa/Maseru',
                        40 => 'Africa/Mbabane',
                        41 => 'Africa/Mogadishu',
                        42 => 'Africa/Monrovia',
                        43 => 'Africa/Nairobi',
                        44 => 'Africa/Ndjamena',
                        45 => 'Africa/Niamey',
                        46 => 'Africa/Nouakchott',
                        47 => 'Africa/Ouagadougou',
                        48 => 'Africa/Porto-Novo',
                        49 => 'Africa/Sao_Tome',
                        50 => 'Africa/Tripoli',
                        51 => 'Africa/Tunis',
                        52 => 'Africa/Windhoek',
                        53 => 'America/Adak',
                        54 => 'America/Anchorage',
                        55 => 'America/Anguilla',
                        56 => 'America/Antigua',
                        57 => 'America/Araguaina',
                        58 => 'America/Argentina/Buenos_Aires',
                        59 => 'America/Argentina/Catamarca',
                        60 => 'America/Argentina/Cordoba',
                        61 => 'America/Argentina/Jujuy',
                        62 => 'America/Argentina/La_Rioja',
                        63 => 'America/Argentina/Mendoza',
                        64 => 'America/Argentina/Rio_Gallegos',
                        65 => 'America/Argentina/Salta',
                        66 => 'America/Argentina/San_Juan',
                        67 => 'America/Argentina/San_Luis',
                        68 => 'America/Argentina/Tucuman',
                        69 => 'America/Argentina/Ushuaia',
                        70 => 'America/Aruba',
                        71 => 'America/Asuncion',
                        72 => 'America/Atikokan',
                        73 => 'America/Bahia',
                        74 => 'America/Bahia_Banderas',
                        75 => 'America/Barbados',
                        76 => 'America/Belem',
                        77 => 'America/Belize',
                        78 => 'America/Blanc-Sablon',
                        79 => 'America/Boa_Vista',
                        80 => 'America/Bogota',
                        81 => 'America/Boise',
                        82 => 'America/Cambridge_Bay',
                        83 => 'America/Campo_Grande',
                        84 => 'America/Cancun',
                        85 => 'America/Caracas',
                        86 => 'America/Cayenne',
                        87 => 'America/Cayman',
                        88 => 'America/Chicago',
                        89 => 'America/Chihuahua',
                        90 => 'America/Costa_Rica',
                        91 => 'America/Creston',
                        92 => 'America/Cuiaba',
                        93 => 'America/Curacao',
                        94 => 'America/Danmarkshavn',
                        95 => 'America/Dawson',
                        96 => 'America/Dawson_Creek',
                        97 => 'America/Denver',
                        98 => 'America/Detroit',
                        99 => 'America/Dominica',
                        100 => 'America/Edmonton',
                        101 => 'America/Eirunepe',
                        102 => 'America/El_Salvador',
                        103 => 'America/Fortaleza',
                        104 => 'America/Glace_Bay',
                        105 => 'America/Godthab',
                        106 => 'America/Goose_Bay',
                        107 => 'America/Grand_Turk',
                        108 => 'America/Grenada',
                        109 => 'America/Guadeloupe',
                        110 => 'America/Guatemala',
                        111 => 'America/Guayaquil',
                        112 => 'America/Guyana',
                        113 => 'America/Halifax',
                        114 => 'America/Havana',
                        115 => 'America/Hermosillo',
                        116 => 'America/Indiana/Indianapolis',
                        117 => 'America/Indiana/Knox',
                        118 => 'America/Indiana/Marengo',
                        119 => 'America/Indiana/Petersburg',
                        120 => 'America/Indiana/Tell_City',
                        121 => 'America/Indiana/Vevay',
                        122 => 'America/Indiana/Vincennes',
                        123 => 'America/Indiana/Winamac',
                        124 => 'America/Inuvik',
                        125 => 'America/Iqaluit',
                        126 => 'America/Jamaica',
                        127 => 'America/Juneau',
                        128 => 'America/Kentucky/Louisville',
                        129 => 'America/Kentucky/Monticello',
                        130 => 'America/Kralendijk',
                        131 => 'America/La_Paz',
                        132 => 'America/Lima',
                        133 => 'America/Los_Angeles',
                        134 => 'America/Lower_Princes',
                        135 => 'America/Maceio',
                        136 => 'America/Managua',
                        137 => 'America/Manaus',
                        138 => 'America/Marigot',
                        139 => 'America/Martinique',
                        140 => 'America/Matamoros',
                        141 => 'America/Mazatlan',
                        142 => 'America/Menominee',
                        143 => 'America/Merida',
                        144 => 'America/Metlakatla',
                        145 => 'America/Mexico_City',
                        146 => 'America/Miquelon',
                        147 => 'America/Moncton',
                        148 => 'America/Monterrey',
                        149 => 'America/Montevideo',
                        150 => 'America/Montserrat',
                        151 => 'America/Nassau',
                        152 => 'America/New_York',
                        153 => 'America/Nipigon',
                        154 => 'America/Nome',
                        155 => 'America/Noronha',
                        156 => 'America/North_Dakota/Beulah',
                        157 => 'America/North_Dakota/Center',
                        158 => 'America/North_Dakota/New_Salem',
                        159 => 'America/Ojinaga',
                        160 => 'America/Panama',
                        161 => 'America/Pangnirtung',
                        162 => 'America/Paramaribo',
                        163 => 'America/Phoenix',
                        164 => 'America/Port-au-Prince',
                        165 => 'America/Port_of_Spain',
                        166 => 'America/Porto_Velho',
                        167 => 'America/Puerto_Rico',
                        168 => 'America/Rainy_River',
                        169 => 'America/Rankin_Inlet',
                        170 => 'America/Recife',
                        171 => 'America/Regina',
                        172 => 'America/Resolute',
                        173 => 'America/Rio_Branco',
                        174 => 'America/Santa_Isabel',
                        175 => 'America/Santarem',
                        176 => 'America/Santiago',
                        177 => 'America/Santo_Domingo',
                        178 => 'America/Sao_Paulo',
                        179 => 'America/Scoresbysund',
                        180 => 'America/Sitka',
                        181 => 'America/St_Barthelemy',
                        182 => 'America/St_Johns',
                        183 => 'America/St_Kitts',
                        184 => 'America/St_Lucia',
                        185 => 'America/St_Thomas',
                        186 => 'America/St_Vincent',
                        187 => 'America/Swift_Current',
                        188 => 'America/Tegucigalpa',
                        189 => 'America/Thule',
                        190 => 'America/Thunder_Bay',
                        191 => 'America/Tijuana',
                        192 => 'America/Toronto',
                        193 => 'America/Tortola',
                        194 => 'America/Vancouver',
                        195 => 'America/Whitehorse',
                        196 => 'America/Winnipeg',
                        197 => 'America/Yakutat',
                        198 => 'America/Yellowknife',
                        199 => 'Antarctica/Casey',
                        200 => 'Antarctica/Davis',
                        201 => 'Antarctica/DumontDUrville',
                        202 => 'Antarctica/Macquarie',
                        203 => 'Antarctica/Mawson',
                        204 => 'Antarctica/McMurdo',
                        205 => 'Antarctica/Palmer',
                        206 => 'Antarctica/Rothera',
                        207 => 'Antarctica/Syowa',
                        208 => 'Antarctica/Vostok',
                        209 => 'Arctic/Longyearbyen',
                        210 => 'Asia/Aden',
                        211 => 'Asia/Almaty',
                        212 => 'Asia/Amman',
                        213 => 'Asia/Anadyr',
                        214 => 'Asia/Aqtau',
                        215 => 'Asia/Aqtobe',
                        216 => 'Asia/Ashgabat',
                        217 => 'Asia/Baghdad',
                        218 => 'Asia/Bahrain',
                        219 => 'Asia/Baku',
                        220 => 'Asia/Bangkok',
                        221 => 'Asia/Beirut',
                        222 => 'Asia/Bishkek',
                        223 => 'Asia/Brunei',
                        224 => 'Asia/Choibalsan',
                        225 => 'Asia/Chongqing',
                        226 => 'Asia/Colombo',
                        227 => 'Asia/Damascus',
                        228 => 'Asia/Dhaka',
                        229 => 'Asia/Dili',
                        230 => 'Asia/Dubai',
                        231 => 'Asia/Dushanbe',
                        232 => 'Asia/Gaza',
                        233 => 'Asia/Harbin',
                        234 => 'Asia/Hebron',
                        235 => 'Asia/Ho_Chi_Minh',
                        236 => 'Asia/Hong_Kong',
                        237 => 'Asia/Hovd',
                        238 => 'Asia/Irkutsk',
                        239 => 'Asia/Jakarta',
                        240 => 'Asia/Jayapura',
                        241 => 'Asia/Jerusalem',
                        242 => 'Asia/Kabul',
                        243 => 'Asia/Kamchatka',
                        244 => 'Asia/Karachi',
                        245 => 'Asia/Kashgar',
                        246 => 'Asia/Kathmandu',
                        247 => 'Asia/Khandyga',
                        248 => 'Asia/Kolkata',
                        249 => 'Asia/Krasnoyarsk',
                        250 => 'Asia/Kuala_Lumpur',
                        251 => 'Asia/Kuching',
                        252 => 'Asia/Kuwait',
                        253 => 'Asia/Macau',
                        254 => 'Asia/Magadan',
                        255 => 'Asia/Makassar',
                        256 => 'Asia/Manila',
                        257 => 'Asia/Muscat',
                        258 => 'Asia/Nicosia',
                        259 => 'Asia/Novokuznetsk',
                        260 => 'Asia/Novosibirsk',
                        261 => 'Asia/Omsk',
                        262 => 'Asia/Oral',
                        263 => 'Asia/Phnom_Penh',
                        264 => 'Asia/Pontianak',
                        265 => 'Asia/Pyongyang',
                        266 => 'Asia/Qatar',
                        267 => 'Asia/Qyzylorda',
                        268 => 'Asia/Rangoon',
                        269 => 'Asia/Riyadh',
                        270 => 'Asia/Sakhalin',
                        271 => 'Asia/Samarkand',
                        272 => 'Asia/Seoul',
                        273 => 'Asia/Shanghai',
                        274 => 'Asia/Singapore',
                        275 => 'Asia/Taipei',
                        276 => 'Asia/Tashkent',
                        277 => 'Asia/Tbilisi',
                        278 => 'Asia/Tehran',
                        279 => 'Asia/Thimphu',
                        280 => 'Asia/Tokyo',
                        281 => 'Asia/Ulaanbaatar',
                        282 => 'Asia/Urumqi',
                        283 => 'Asia/Ust-Nera',
                        284 => 'Asia/Vientiane',
                        285 => 'Asia/Vladivostok',
                        286 => 'Asia/Yakutsk',
                        287 => 'Asia/Yekaterinburg',
                        288 => 'Asia/Yerevan',
                        289 => 'Atlantic/Azores',
                        290 => 'Atlantic/Bermuda',
                        291 => 'Atlantic/Canary',
                        292 => 'Atlantic/Cape_Verde',
                        293 => 'Atlantic/Faroe',
                        294 => 'Atlantic/Madeira',
                        295 => 'Atlantic/Reykjavik',
                        296 => 'Atlantic/South_Georgia',
                        297 => 'Atlantic/St_Helena',
                        298 => 'Atlantic/Stanley',
                        299 => 'Australia/Adelaide',
                        300 => 'Australia/Brisbane',
                        301 => 'Australia/Broken_Hill',
                        302 => 'Australia/Currie',
                        303 => 'Australia/Darwin',
                        304 => 'Australia/Eucla',
                        305 => 'Australia/Hobart',
                        306 => 'Australia/Lindeman',
                        307 => 'Australia/Lord_Howe',
                        308 => 'Australia/Melbourne',
                        309 => 'Australia/Perth',
                        310 => 'Australia/Sydney',
                        311 => 'Europe/Amsterdam',
                        312 => 'Europe/Andorra',
                        313 => 'Europe/Athens',
                        314 => 'Europe/Belgrade',
                        315 => 'Europe/Berlin',
                        316 => 'Europe/Bratislava',
                        317 => 'Europe/Brussels',
                        318 => 'Europe/Bucharest',
                        319 => 'Europe/Budapest',
                        320 => 'Europe/Busingen',
                        321 => 'Europe/Chisinau',
                        322 => 'Europe/Copenhagen',
                        323 => 'Europe/Dublin',
                        324 => 'Europe/Gibraltar',
                        325 => 'Europe/Guernsey',
                        326 => 'Europe/Helsinki',
                        327 => 'Europe/Isle_of_Man',
                        328 => 'Europe/Istanbul',
                        329 => 'Europe/Jersey',
                        330 => 'Europe/Kaliningrad',
                        331 => 'Europe/Kiev',
                        332 => 'Europe/Lisbon',
                        333 => 'Europe/Ljubljana',
                        334 => 'Europe/London',
                        335 => 'Europe/Luxembourg',
                        336 => 'Europe/Madrid',
                        337 => 'Europe/Malta',
                        338 => 'Europe/Mariehamn',
                        339 => 'Europe/Minsk',
                        340 => 'Europe/Monaco',
                        341 => 'Europe/Moscow',
                        342 => 'Europe/Oslo',
                        343 => 'Europe/Paris',
                        344 => 'Europe/Podgorica',
                        345 => 'Europe/Prague',
                        346 => 'Europe/Riga',
                        347 => 'Europe/Rome',
                        348 => 'Europe/Samara',
                        349 => 'Europe/San_Marino',
                        350 => 'Europe/Sarajevo',
                        351 => 'Europe/Simferopol',
                        352 => 'Europe/Skopje',
                        353 => 'Europe/Sofia',
                        354 => 'Europe/Stockholm',
                        355 => 'Europe/Tallinn',
                        356 => 'Europe/Tirane',
                        357 => 'Europe/Uzhgorod',
                        358 => 'Europe/Vaduz',
                        359 => 'Europe/Vatican',
                        360 => 'Europe/Vienna',
                        361 => 'Europe/Vilnius',
                        362 => 'Europe/Volgograd',
                        363 => 'Europe/Warsaw',
                        364 => 'Europe/Zagreb',
                        365 => 'Europe/Zaporozhye',
                        366 => 'Europe/Zurich',
                        367 => 'Indian/Antananarivo',
                        368 => 'Indian/Chagos',
                        369 => 'Indian/Christmas',
                        370 => 'Indian/Cocos',
                        371 => 'Indian/Comoro',
                        372 => 'Indian/Kerguelen',
                        373 => 'Indian/Mahe',
                        374 => 'Indian/Maldives',
                        375 => 'Indian/Mauritius',
                        376 => 'Indian/Mayotte',
                        377 => 'Indian/Reunion',
                        378 => 'Pacific/Apia',
                        379 => 'Pacific/Auckland',
                        380 => 'Pacific/Chatham',
                        381 => 'Pacific/Chuuk',
                        382 => 'Pacific/Easter',
                        383 => 'Pacific/Efate',
                        384 => 'Pacific/Enderbury',
                        385 => 'Pacific/Fakaofo',
                        386 => 'Pacific/Fiji',
                        387 => 'Pacific/Funafuti',
                        388 => 'Pacific/Galapagos',
                        389 => 'Pacific/Gambier',
                        390 => 'Pacific/Guadalcanal',
                        391 => 'Pacific/Guam',
                        392 => 'Pacific/Honolulu',
                        393 => 'Pacific/Johnston',
                        394 => 'Pacific/Kiritimati',
                        395 => 'Pacific/Kosrae',
                        396 => 'Pacific/Kwajalein',
                        397 => 'Pacific/Majuro',
                        398 => 'Pacific/Marquesas',
                        399 => 'Pacific/Midway',
                        400 => 'Pacific/Nauru',
                        401 => 'Pacific/Niue',
                        402 => 'Pacific/Norfolk',
                        403 => 'Pacific/Noumea',
                        404 => 'Pacific/Pago_Pago',
                        405 => 'Pacific/Palau',
                        406 => 'Pacific/Pitcairn',
                        407 => 'Pacific/Pohnpei',
                        408 => 'Pacific/Port_Moresby',
                        409 => 'Pacific/Rarotonga',
                        410 => 'Pacific/Saipan',
                        411 => 'Pacific/Tahiti',
                        412 => 'Pacific/Tarawa',
                        413 => 'Pacific/Tongatapu',
                        414 => 'Pacific/Wake',
                        415 => 'Pacific/Wallis'
                    ]
                ],
                'dateFormat' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'MM/DD/YYYY',
                        1 => 'YYYY-MM-DD',
                        2 => 'DD.MM.YYYY',
                        3 => 'DD/MM/YYYY'
                    ],
                    'default' => 'MM/DD/YYYY'
                ],
                'timeFormat' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'HH:mm',
                        1 => 'hh:mma',
                        2 => 'hh:mmA',
                        3 => 'hh:mm A',
                        4 => 'hh:mm a'
                    ],
                    'default' => 'HH:mm'
                ],
                'weekStart' => (object) [
                    'type' => 'enumInt',
                    'options' => [
                        0 => 0,
                        1 => 1
                    ],
                    'default' => 0
                ],
                'thousandSeparator' => (object) [
                    'type' => 'varchar',
                    'default' => ',',
                    'maxLength' => 1,
                    'view' => 'views/settings/fields/thousand-separator'
                ],
                'decimalMark' => (object) [
                    'type' => 'varchar',
                    'default' => '.',
                    'required' => true,
                    'maxLength' => 1
                ],
                'currencyList' => (object) [
                    'type' => 'multiEnum',
                    'default' => [
                        0 => 'USD',
                        1 => 'EUR'
                    ],
                    'options' => [
                        0 => 'AED',
                        1 => 'ANG',
                        2 => 'ARS',
                        3 => 'AUD',
                        4 => 'BAM',
                        5 => 'BGN',
                        6 => 'BHD',
                        7 => 'BND',
                        8 => 'BOB',
                        9 => 'BRL',
                        10 => 'BWP',
                        11 => 'CAD',
                        12 => 'CHF',
                        13 => 'CLP',
                        14 => 'CNY',
                        15 => 'COP',
                        16 => 'CRC',
                        17 => 'CZK',
                        18 => 'DKK',
                        19 => 'DOP',
                        20 => 'DZD',
                        21 => 'EEK',
                        22 => 'EGP',
                        23 => 'EUR',
                        24 => 'FJD',
                        25 => 'GBP',
                        26 => 'GNF',
                        27 => 'HKD',
                        28 => 'HNL',
                        29 => 'HRK',
                        30 => 'HUF',
                        31 => 'IDR',
                        32 => 'ILS',
                        33 => 'INR',
                        34 => 'IRR',
                        35 => 'JMD',
                        36 => 'JOD',
                        37 => 'JPY',
                        38 => 'KES',
                        39 => 'KRW',
                        40 => 'KWD',
                        41 => 'KYD',
                        42 => 'KZT',
                        43 => 'LBP',
                        44 => 'LKR',
                        45 => 'LTL',
                        46 => 'LVL',
                        47 => 'MAD',
                        48 => 'MDL',
                        49 => 'MKD',
                        50 => 'MUR',
                        51 => 'MXN',
                        52 => 'MYR',
                        53 => 'NAD',
                        54 => 'NGN',
                        55 => 'NIO',
                        56 => 'NOK',
                        57 => 'NPR',
                        58 => 'NZD',
                        59 => 'OMR',
                        60 => 'PEN',
                        61 => 'PGK',
                        62 => 'PHP',
                        63 => 'PKR',
                        64 => 'PLN',
                        65 => 'PYG',
                        66 => 'QAR',
                        67 => 'RON',
                        68 => 'RSD',
                        69 => 'RUB',
                        70 => 'SAR',
                        71 => 'SCR',
                        72 => 'SEK',
                        73 => 'SGD',
                        74 => 'SKK',
                        75 => 'SLL',
                        76 => 'SVC',
                        77 => 'THB',
                        78 => 'TND',
                        79 => 'TRY',
                        80 => 'TTD',
                        81 => 'TWD',
                        82 => 'TZS',
                        83 => 'UAH',
                        84 => 'UGX',
                        85 => 'USD',
                        86 => 'UYU',
                        87 => 'UZS',
                        88 => 'VND',
                        89 => 'YER',
                        90 => 'ZAR',
                        91 => 'ZMK'
                    ],
                    'required' => true
                ],
                'defaultCurrency' => (object) [
                    'type' => 'enum',
                    'default' => 'USD',
                    'required' => true,
                    'view' => 'views/settings/fields/default-currency'
                ],
                'baseCurrency' => (object) [
                    'type' => 'enum',
                    'default' => 'USD',
                    'required' => true,
                    'view' => 'views/settings/fields/default-currency'
                ],
                'currencyRates' => (object) [
                    'type' => 'base',
                    'view' => 'views/settings/fields/currency-rates'
                ],
                'outboundEmailIsShared' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'tooltip' => true
                ],
                'outboundEmailFromName' => (object) [
                    'type' => 'varchar',
                    'default' => 'EspoCRM',
                    'trim' => true
                ],
                'outboundEmailFromAddress' => (object) [
                    'type' => 'varchar',
                    'default' => 'crm@example.com',
                    'trim' => true
                ],
                'smtpServer' => (object) [
                    'type' => 'varchar'
                ],
                'smtpPort' => (object) [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 9999,
                    'default' => 25
                ],
                'smtpAuth' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'smtpSecurity' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'SSL',
                        2 => 'TLS'
                    ]
                ],
                'smtpUsername' => (object) [
                    'type' => 'varchar',
                    'required' => true
                ],
                'smtpPassword' => (object) [
                    'type' => 'password'
                ],
                'tabList' => (object) [
                    'type' => 'array',
                    'view' => 'views/settings/fields/tab-list'
                ],
                'quickCreateList' => (object) [
                    'type' => 'array',
                    'translation' => 'Global.scopeNames',
                    'view' => 'views/settings/fields/quick-create-list'
                ],
                'language' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'en_US'
                    ],
                    'default' => 'en_US',
                    'view' => 'views/settings/fields/language',
                    'isSorted' => true
                ],
                'globalSearchEntityList' => (object) [
                    'type' => 'multiEnum',
                    'translation' => 'Global.scopeNames',
                    'view' => 'views/settings/fields/global-search-entity-list'
                ],
                'exportDelimiter' => (object) [
                    'type' => 'varchar',
                    'default' => ',',
                    'required' => true,
                    'maxLength' => 1
                ],
                'companyLogo' => (object) [
                    'type' => 'image'
                ],
                'authenticationMethod' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Espo',
                        1 => 'LDAP'
                    ],
                    'default' => 'Espo'
                ],
                'ldapHost' => (object) [
                    'type' => 'varchar',
                    'required' => true
                ],
                'ldapPort' => (object) [
                    'type' => 'varchar',
                    'default' => 389
                ],
                'ldapSecurity' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'SSL',
                        2 => 'TLS'
                    ]
                ],
                'ldapAuth' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'ldapUsername' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapPassword' => (object) [
                    'type' => 'password',
                    'tooltip' => true
                ],
                'ldapBindRequiresDn' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'ldapUserLoginFilter' => (object) [
                    'type' => 'varchar',
                    'tooltip' => true
                ],
                'ldapBaseDn' => (object) [
                    'type' => 'varchar',
                    'tooltip' => true
                ],
                'ldapAccountCanonicalForm' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Dn',
                        1 => 'Username',
                        2 => 'Backslash',
                        3 => 'Principal'
                    ],
                    'tooltip' => true
                ],
                'ldapAccountDomainName' => (object) [
                    'type' => 'varchar',
                    'tooltip' => true
                ],
                'ldapAccountDomainNameShort' => (object) [
                    'type' => 'varchar',
                    'tooltip' => true
                ],
                'ldapAccountFilterFormat' => (object) [
                    'type' => 'varchar'
                ],
                'ldapTryUsernameSplit' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'ldapOptReferrals' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'ldapPortalUserLdapAuth' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'tooltip' => true
                ],
                'ldapCreateEspoUser' => (object) [
                    'type' => 'bool',
                    'default' => true,
                    'tooltip' => true
                ],
                'ldapUserNameAttribute' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapUserObjectClass' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapUserFirstNameAttribute' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapUserLastNameAttribute' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapUserTitleAttribute' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapUserEmailAddressAttribute' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapUserPhoneNumberAttribute' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'tooltip' => true
                ],
                'ldapUserDefaultTeam' => (object) [
                    'type' => 'link',
                    'tooltip' => true,
                    'entity' => 'Team'
                ],
                'ldapUserTeams' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true,
                    'entity' => 'Team'
                ],
                'ldapPortalUserPortals' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true,
                    'entity' => 'Portal'
                ],
                'ldapPortalUserRoles' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true,
                    'entity' => 'PortalRole'
                ],
                'exportDisabled' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'assignmentEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'assignmentEmailNotificationsEntityList' => (object) [
                    'type' => 'multiEnum',
                    'translation' => 'Global.scopeNamesPlural',
                    'view' => 'views/settings/fields/assignment-email-notifications-entity-list'
                ],
                'assignmentNotificationsEntityList' => (object) [
                    'type' => 'multiEnum',
                    'translation' => 'Global.scopeNamesPlural',
                    'view' => 'views/settings/fields/assignment-notifications-entity-list'
                ],
                'postEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'updateEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'mentionEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'streamEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'portalStreamEmailNotifications' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'streamEmailNotificationsEntityList' => (object) [
                    'type' => 'multiEnum',
                    'translation' => 'Global.scopeNamesPlural',
                    'view' => 'views/settings/fields/stream-email-notifications-entity-list',
                    'tooltip' => true
                ],
                'streamEmailNotificationsTypeList' => (object) [
                    'type' => 'multiEnum',
                    'options' => [
                        0 => 'Post',
                        1 => 'Status',
                        2 => 'EmailReceived'
                    ]
                ],
                'b2cMode' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'tooltip' => true
                ],
                'avatarsDisabled' => (object) [
                    'type' => 'bool',
                    'default' => false
                ],
                'followCreatedEntities' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'tooltip' => true
                ],
                'adminPanelIframeUrl' => (object) [
                    'type' => 'varchar'
                ],
                'displayListViewRecordCount' => (object) [
                    'type' => 'bool'
                ],
                'userThemesDisabled' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'theme' => (object) [
                    'type' => 'enum',
                    'view' => 'views/settings/fields/theme',
                    'translation' => 'Global.themes'
                ],
                'emailMessageMaxSize' => (object) [
                    'type' => 'float',
                    'min' => 0,
                    'tooltip' => true
                ],
                'inboundEmailMaxPortionSize' => (object) [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 500
                ],
                'personalEmailMaxPortionSize' => (object) [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 500
                ],
                'maxEmailAccountCount' => (object) [
                    'type' => 'int'
                ],
                'massEmailMaxPerHourCount' => (object) [
                    'type' => 'int',
                    'min' => 1
                ],
                'authTokenLifetime' => (object) [
                    'type' => 'float',
                    'min' => 0,
                    'default' => 0,
                    'tooltip' => true
                ],
                'authTokenMaxIdleTime' => (object) [
                    'type' => 'float',
                    'min' => 0,
                    'default' => 0,
                    'tooltip' => true
                ],
                'authTokenPreventConcurrent' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'dashboardLayout' => (object) [
                    'type' => 'jsonArray',
                    'view' => 'views/settings/fields/dashboard-layout'
                ],
                'dashletsOptions' => (object) [
                    'type' => 'jsonObject',
                    'disabled' => true
                ],
                'siteUrl' => (object) [
                    'type' => 'varchar'
                ],
                'applicationName' => (object) [
                    'type' => 'varchar'
                ],
                'readableDateFormatDisabled' => (object) [
                    'type' => 'bool'
                ],
                'addressFormat' => (object) [
                    'type' => 'enumInt',
                    'options' => [
                        0 => 1,
                        1 => 2,
                        2 => 3,
                        3 => 4
                    ]
                ],
                'addressPreview' => (object) [
                    'type' => 'address',
                    'notStorable' => true,
                    'readOnly' => true,
                    'view' => 'views/settings/fields/address-preview'
                ],
                'currencyFormat' => (object) [
                    'type' => 'enumInt',
                    'options' => [
                        0 => 1,
                        1 => 2
                    ]
                ],
                'currencyDecimalPlaces' => (object) [
                    'type' => 'int',
                    'tooltip' => true,
                    'min' => 0,
                    'max' => 20
                ],
                'notificationSoundsDisabled' => (object) [
                    'type' => 'bool'
                ],
                'calendarEntityList' => (object) [
                    'type' => 'multiEnum',
                    'view' => 'views/settings/fields/calendar-entity-list'
                ],
                'activitiesEntityList' => (object) [
                    'type' => 'multiEnum',
                    'view' => 'views/settings/fields/activities-entity-list'
                ],
                'historyEntityList' => (object) [
                    'type' => 'multiEnum',
                    'view' => 'views/settings/fields/history-entity-list'
                ],
                'googleMapsApiKey' => (object) [
                    'type' => 'varchar'
                ],
                'massEmailDisableMandatoryOptOutLink' => (object) [
                    'type' => 'bool'
                ],
                'aclStrictMode' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'aclAllowDeleteCreated' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'lastViewedCount' => (object) [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 200,
                    'default' => 20,
                    'required' => true
                ],
                'adminNotifications' => (object) [
                    'type' => 'bool'
                ],
                'adminNotificationsNewVersion' => (object) [
                    'type' => 'bool'
                ],
                'adminNotificationsNewExtensionVersion' => (object) [
                    'type' => 'bool'
                ],
                'textFilterUseContainsForVarchar' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'scopeColorsDisabled' => (object) [
                    'type' => 'bool'
                ],
                'tabColorsDisabled' => (object) [
                    'type' => 'bool'
                ],
                'tabIconsDisabled' => (object) [
                    'type' => 'bool'
                ],
                'emailAddressIsOptedOutByDefault' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'outboundEmailBccAddress' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'cleanupDeletedRecords' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'addressPreviewStreet' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'addressPreviewCity' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPreviewState' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPreviewCountry' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPreviewPostalCode' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPreviewMap' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'map',
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ]
            ]
        ],
        'Team' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100,
                    'trim' => true
                ],
                'roles' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'positionList' => (object) [
                    'type' => 'array',
                    'tooltip' => true
                ],
                'userRole' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'teams'
                ],
                'roles' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Role',
                    'foreign' => 'teams'
                ],
                'notes' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Note',
                    'foreign' => 'teams'
                ],
                'inboundEmails' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'InboundEmail',
                    'foreign' => 'teams'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'Template' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'body' => (object) [
                    'type' => 'text',
                    'view' => 'views/fields/wysiwyg'
                ],
                'header' => (object) [
                    'type' => 'text',
                    'view' => 'views/fields/wysiwyg'
                ],
                'footer' => (object) [
                    'type' => 'text',
                    'view' => 'views/fields/wysiwyg',
                    'tooltip' => true
                ],
                'entityType' => (object) [
                    'type' => 'enum',
                    'required' => true,
                    'translation' => 'Global.scopeNames',
                    'view' => 'views/fields/entity-type'
                ],
                'leftMargin' => (object) [
                    'type' => 'float',
                    'default' => 10
                ],
                'rightMargin' => (object) [
                    'type' => 'float',
                    'default' => 10
                ],
                'topMargin' => (object) [
                    'type' => 'float',
                    'default' => 10
                ],
                'bottomMargin' => (object) [
                    'type' => 'float',
                    'default' => 25
                ],
                'printFooter' => (object) [
                    'type' => 'bool'
                ],
                'footerPosition' => (object) [
                    'type' => 'float',
                    'default' => 15
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'variables' => (object) [
                    'type' => 'base',
                    'notStorable' => true,
                    'tooltip' => true
                ],
                'pageOrientation' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Portrait',
                        1 => 'Landscape'
                    ],
                    'default' => 'Portrait'
                ],
                'pageFormat' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'A3',
                        1 => 'A4',
                        2 => 'A5',
                        3 => 'A6',
                        4 => 'A7'
                    ],
                    'default' => 'A4'
                ],
                'fontFace' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'aealarabiya',
                        2 => 'aefurat',
                        3 => 'cid0cs',
                        4 => 'cid0ct',
                        5 => 'cid0jp',
                        6 => 'cid0kr',
                        7 => 'courier',
                        8 => 'dejavusans',
                        9 => 'dejavusanscondensed',
                        10 => 'dejavusansextralight',
                        11 => 'dejavusansmono',
                        12 => 'dejavuserif',
                        13 => 'dejavuserifcondensed',
                        14 => 'freemono',
                        15 => 'freesans',
                        16 => 'freeserif',
                        17 => 'helvetica',
                        18 => 'hysmyeongjostdmedium',
                        19 => 'kozgopromedium',
                        20 => 'kozminproregular',
                        21 => 'msungstdlight',
                        22 => 'pdfacourier',
                        23 => 'pdfahelvetica',
                        24 => 'pdfasymbol',
                        25 => 'pdfatimes',
                        26 => 'stsongstdlight',
                        27 => 'symbol',
                        28 => 'times'
                    ],
                    'default' => ''
                ]
            ],
            'links' => (object) [
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam'
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'UniqueId' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'index' => true
                ],
                'data' => (object) [
                    'type' => 'jsonObject'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'terminateAt' => (object) [
                    'type' => 'datetime'
                ],
                'target' => (object) [
                    'type' => 'linkParent'
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'target' => (object) [
                    'type' => 'belongsToParent'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ]
        ],
        'User' => (object) [
            'fields' => (object) [
                'isAdmin' => (object) [
                    'type' => 'bool',
                    'tooltip' => true
                ],
                'userName' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 50,
                    'required' => true,
                    'view' => 'views/user/fields/user-name',
                    'tooltip' => true
                ],
                'name' => (object) [
                    'type' => 'personName',
                    'view' => 'views/user/fields/name'
                ],
                'password' => (object) [
                    'type' => 'password',
                    'maxLength' => 150,
                    'internal' => true,
                    'disabled' => true
                ],
                'passwordConfirm' => (object) [
                    'type' => 'password',
                    'maxLength' => 150,
                    'internal' => true,
                    'disabled' => true,
                    'notStorable' => true
                ],
                'salutationName' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Mr.',
                        2 => 'Ms.',
                        3 => 'Mrs.'
                    ],
                    'required' => false,
                    'isSorted' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false
                ],
                'firstName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'default' => ''
                ],
                'lastName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'required' => true,
                    'default' => ''
                ],
                'isActive' => (object) [
                    'type' => 'bool',
                    'tooltip' => true,
                    'default' => true
                ],
                'isPortalUser' => (object) [
                    'type' => 'bool',
                    'layoutMassUpdateDisabled' => true
                ],
                'isSuperAdmin' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'disabled' => true
                ],
                'title' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100,
                    'trim' => true
                ],
                'position' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100,
                    'notStorable' => true,
                    'where' => (object) [
                        'LIKE' => (object) [
                            'leftJoins' => [
                                0 => [
                                    0 => 'teams',
                                    1 => 'teamsPosition'
                                ]
                            ],
                            'sql' => 'teamsPositionMiddle.role LIKE {value}',
                            'distinct' => true
                        ],
                        '=' => (object) [
                            'leftJoins' => [
                                0 => [
                                    0 => 'teams',
                                    1 => 'teamsPosition'
                                ]
                            ],
                            'sql' => 'teamsPositionMiddle.role = {value}',
                            'distinct' => true
                        ],
                        '<>' => (object) [
                            'leftJoins' => [
                                0 => [
                                    0 => 'teams',
                                    1 => 'teamsPosition'
                                ]
                            ],
                            'sql' => 'teamsPositionMiddle.role <> {value}',
                            'distinct' => true
                        ],
                        'IS NULL' => (object) [
                            'leftJoins' => [
                                0 => [
                                    0 => 'teams',
                                    1 => 'teamsPosition'
                                ]
                            ],
                            'sql' => 'teamsPositionMiddle.role IS NULL',
                            'distinct' => true
                        ],
                        'IS NOT NULL' => (object) [
                            'leftJoins' => [
                                0 => [
                                    0 => 'teams',
                                    1 => 'teamsPosition'
                                ]
                            ],
                            'sql' => 'teamsPositionMiddle.role IS NOT NULL',
                            'distinct' => true
                        ]
                    ],
                    'trim' => true,
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'textFilterDisabled' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'email',
                    'required' => false
                ],
                'phoneNumber' => (object) [
                    'type' => 'phone',
                    'typeList' => [
                        0 => 'Mobile',
                        1 => 'Office',
                        2 => 'Home',
                        3 => 'Fax',
                        4 => 'Other'
                    ],
                    'defaultType' => 'Mobile'
                ],
                'token' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'authTokenId' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'authLogRecordId' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'ipAddress' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'defaultTeam' => (object) [
                    'type' => 'link',
                    'tooltip' => true
                ],
                'acceptanceStatus' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'exportDisabled' => true,
                    'disabled' => true
                ],
                'acceptanceStatusMeetings' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'view' => 'crm:views/lead/fields/acceptance-status',
                    'link' => 'meetings',
                    'column' => 'status'
                ],
                'acceptanceStatusCalls' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'view' => 'crm:views/lead/fields/acceptance-status',
                    'link' => 'calls',
                    'column' => 'status'
                ],
                'teamRole' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true,
                    'columns' => (object) [
                        'role' => 'userRole'
                    ],
                    'view' => 'views/user/fields/teams',
                    'default' => 'javascript: return {teamsIds: []}'
                ],
                'roles' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true,
                    'required' => true,
                    'readOnly' => false
                ],
                'portals' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'portalRoles' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'contact' => (object) [
                    'type' => 'link',
                    'view' => 'views/user/fields/contact'
                ],
                'accounts' => (object) [
                    'type' => 'linkMultiple'
                ],
                'account' => (object) [
                    'type' => 'link',
                    'notStorable' => true,
                    'readOnly' => true
                ],
                'portal' => (object) [
                    'type' => 'link',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'avatar' => (object) [
                    'type' => 'image',
                    'view' => 'views/user/fields/avatar',
                    'previewSize' => 'small'
                ],
                'sendAccessInfo' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'disabled' => true
                ],
                'gender' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Male',
                        2 => 'Female',
                        3 => 'Neutral'
                    ],
                    'default' => ''
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'lastAccess' => (object) [
                    'type' => 'datetime',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'directAccessDisabled' => true
                ],
                'reclamos' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'empresas' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ],
                'emailAddressIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ]
            ],
            'links' => (object) [
                'defaultTeam' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Team'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'foreign' => 'users',
                    'additionalColumns' => (object) [
                        'role' => (object) [
                            'type' => 'varchar',
                            'len' => 100
                        ]
                    ],
                    'layoutRelationshipsDisabled' => true
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'roles' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Role',
                    'foreign' => 'users',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => false
                ],
                'portals' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Portal',
                    'foreign' => 'users',
                    'layoutRelationshipsDisabled' => true
                ],
                'portalRoles' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'PortalRole',
                    'foreign' => 'users',
                    'layoutRelationshipsDisabled' => true
                ],
                'preferences' => (object) [
                    'type' => 'hasOne',
                    'entity' => 'Preferences'
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'users'
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'users'
                ],
                'emails' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Email',
                    'foreign' => 'users'
                ],
                'notes' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Note',
                    'foreign' => 'users',
                    'layoutRelationshipsDisabled' => true
                ],
                'contact' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Contact',
                    'foreign' => 'portalUser'
                ],
                'accounts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Account',
                    'foreign' => 'portalUsers',
                    'relationName' => 'AccountPortalUser'
                ],
                'tasks' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Task',
                    'foreign' => 'assignedUser'
                ],
                'targetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'users'
                ],
                'targetListIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'reclamos' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'user',
                    'entity' => 'Reclamo',
                    'audited' => false,
                    'isCustom' => true
                ],
                'empresas' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'userEmpresa',
                    'foreign' => 'users',
                    'entity' => 'Empresa',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'userName',
                'asc' => true,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'userName'
                ]
            ]
        ],
        'Account' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 249,
                    'required' => true,
                    'trim' => true
                ],
                'website' => (object) [
                    'type' => 'url',
                    'strip' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'email',
                    'isPersonalData' => true
                ],
                'phoneNumber' => (object) [
                    'type' => 'phone',
                    'typeList' => [
                        0 => 'Office',
                        1 => 'Mobile',
                        2 => 'Fax',
                        3 => 'Other'
                    ],
                    'defaultType' => 'Office'
                ],
                'type' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Customer',
                        2 => 'Investor',
                        3 => 'Partner',
                        4 => 'Reseller'
                    ],
                    'default' => ''
                ],
                'industry' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Advertising',
                        2 => 'Aerospace',
                        3 => 'Agriculture',
                        4 => 'Apparel & Accessories',
                        5 => 'Architecture',
                        6 => 'Automotive',
                        7 => 'Banking',
                        8 => 'Biotechnology',
                        9 => 'Building Materials & Equipment',
                        10 => 'Chemical',
                        11 => 'Construction',
                        12 => 'Consulting',
                        13 => 'Computer',
                        14 => 'Culture',
                        15 => 'Creative',
                        16 => 'Defense',
                        17 => 'Education',
                        18 => 'Electronics',
                        19 => 'Electric Power',
                        20 => 'Energy',
                        21 => 'Entertainment & Leisure',
                        22 => 'Finance',
                        23 => 'Food & Beverage',
                        24 => 'Grocery',
                        25 => 'Healthcare',
                        26 => 'Hospitality',
                        27 => 'Insurance',
                        28 => 'Legal',
                        29 => 'Manufacturing',
                        30 => 'Mass Media',
                        31 => 'Marketing',
                        32 => 'Mining',
                        33 => 'Music',
                        34 => 'Publishing',
                        35 => 'Petroleum',
                        36 => 'Real Estate',
                        37 => 'Retail',
                        38 => 'Service',
                        39 => 'Sports',
                        40 => 'Software',
                        41 => 'Support',
                        42 => 'Shipping',
                        43 => 'Travel',
                        44 => 'Technology',
                        45 => 'Telecommunications',
                        46 => 'Television',
                        47 => 'Transportation',
                        48 => 'Testing, Inspection & Certification',
                        49 => 'Venture Capital',
                        50 => 'Wholesale',
                        51 => 'Water'
                    ],
                    'default' => '',
                    'isSorted' => true
                ],
                'sicCode' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 40,
                    'trim' => true
                ],
                'contactRole' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'disabled' => true,
                    'maxLength' => 100
                ],
                'contactIsInactive' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'default' => false,
                    'disabled' => true
                ],
                'billingAddress' => (object) [
                    'type' => 'address',
                    'trim' => true
                ],
                'billingAddressStreet' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'billingAddressCity' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'billingAddressState' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'billingAddressCountry' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'billingAddressPostalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'shippingAddress' => (object) [
                    'type' => 'address',
                    'view' => 'crm:views/account/fields/shipping-address'
                ],
                'shippingAddressStreet' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar',
                    'trim' => true
                ],
                'shippingAddressCity' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'shippingAddressState' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'shippingAddressCountry' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'shippingAddressPostalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'campaign' => (object) [
                    'type' => 'link',
                    'layoutListDisabled' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'targetLists' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'exportDisabled' => true,
                    'noLoad' => true
                ],
                'targetList' => (object) [
                    'type' => 'link',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'entity' => 'TargetList'
                ],
                'originalLead' => (object) [
                    'type' => 'link',
                    'layoutMassUpdateDisabled' => true,
                    'layoutListDisabled' => true,
                    'readOnly' => true,
                    'view' => 'views/fields/link-one'
                ],
                'targetListIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'emailAddressIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ],
                'billingAddressMap' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ],
                'shippingAddressMap' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'accounts'
                ],
                'opportunities' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Opportunity',
                    'foreign' => 'account'
                ],
                'cases' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Case',
                    'foreign' => 'account'
                ],
                'documents' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Document',
                    'foreign' => 'accounts',
                    'audited' => true
                ],
                'meetingsPrimary' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'account',
                    'layoutRelationshipsDisabled' => true
                ],
                'emailsPrimary' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Email',
                    'foreign' => 'account',
                    'layoutRelationshipsDisabled' => true
                ],
                'callsPrimary' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'account',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasksPrimary' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Task',
                    'foreign' => 'account',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'calls' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'emails' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Email',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign',
                    'foreign' => 'accounts',
                    'noJoin' => true
                ],
                'campaignLogRecords' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'CampaignLogRecord',
                    'foreign' => 'parent'
                ],
                'targetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'accounts'
                ],
                'portalUsers' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'accounts'
                ],
                'originalLead' => (object) [
                    'type' => 'hasOne',
                    'entity' => 'Lead',
                    'foreign' => 'createdAccount'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'emailAddress'
                ]
            ],
            'indexes' => (object) [
                'createdAt' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'deleted'
                    ]
                ],
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Call' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Planned',
                        1 => 'Held',
                        2 => 'Not Held'
                    ],
                    'default' => 'Planned',
                    'view' => 'views/fields/enum-styled',
                    'style' => (object) [
                        'Held' => 'success'
                    ],
                    'audited' => true
                ],
                'dateStart' => (object) [
                    'type' => 'datetime',
                    'required' => true,
                    'default' => 'javascript: return this.dateTime.getNow(15);',
                    'audited' => true
                ],
                'dateEnd' => (object) [
                    'type' => 'datetime',
                    'required' => true,
                    'after' => 'dateStart'
                ],
                'duration' => (object) [
                    'type' => 'duration',
                    'start' => 'dateStart',
                    'end' => 'dateEnd',
                    'options' => [
                        0 => 300,
                        1 => 600,
                        2 => 900,
                        3 => 1800,
                        4 => 2700,
                        5 => 3600,
                        6 => 7200
                    ],
                    'default' => 300,
                    'notStorable' => true,
                    'select' => 'TIMESTAMPDIFF(SECOND, call.date_start, call.date_end)',
                    'orderBy' => 'duration {direction}'
                ],
                'reminders' => (object) [
                    'type' => 'jsonArray',
                    'notStorable' => true,
                    'view' => 'crm:views/meeting/fields/reminders',
                    'layoutListDisabled' => true
                ],
                'direction' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Outbound',
                        1 => 'Inbound'
                    ],
                    'default' => 'Outbound'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'parent' => (object) [
                    'type' => 'linkParent',
                    'entityList' => [
                        0 => 'Account',
                        1 => 'Lead',
                        2 => 'Contact',
                        3 => 'Opportunity',
                        4 => 'Case',
                        5 => 'Formularios',
                        6 => 'Solicitudes',
                        7 => 'Subcategoria',
                        8 => 'Beneficios',
                        9 => 'DoctosBeneficio',
                        10 => 'Ciudad',
                        11 => 'Comuna',
                        12 => 'Rol',
                        13 => 'Reclamo',
                        14 => 'MotivoReclamo',
                        15 => 'Beneficiario',
                        16 => 'Categoria',
                        17 => 'EstadoReclamo'
                    ]
                ],
                'account' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'acceptanceStatus' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'options' => [
                        0 => 'None',
                        1 => 'Accepted',
                        2 => 'Tentative',
                        3 => 'Declined'
                    ],
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'where' => (object) [
                        '=' => (object) [
                            'leftJoins' => [
                                0 => 'users',
                                1 => 'contacts',
                                2 => 'leads'
                            ],
                            'sql' => 'contactsMiddle.status = {value} OR leadsMiddle.status = {value} OR usersMiddle.status = {value}',
                            'distinct' => true
                        ],
                        '<>' => 'call.id NOT IN (SELECT call_id FROM call_contact WHERE deleted = 0 AND status = {value}) AND call.id NOT IN (SELECT call_id FROM call_user WHERE deleted = 0 AND status = {value}) AND call.id NOT IN (SELECT call_id FROM call_lead WHERE deleted = 0 AND status = {value})',
                        'IN' => (object) [
                            'leftJoins' => [
                                0 => 'users',
                                1 => 'leads',
                                2 => 'contacts'
                            ],
                            'sql' => 'contactsMiddle.status IN {value} OR leadsMiddle.status IN {value} OR usersMiddle.status IN {value}',
                            'distinct' => true
                        ],
                        'NOT IN' => 'call.id NOT IN (SELECT call_id FROM call_contact WHERE deleted = 0 AND status IN {value}) AND call.id NOT IN (SELECT call_id FROM call_user WHERE deleted = 0 AND status IN {value}) AND call.id NOT IN (SELECT call_id FROM call_lead WHERE deleted = 0 AND status IN {value})',
                        'IS NULL' => (object) [
                            'leftJoins' => [
                                0 => 'users',
                                1 => 'contacts',
                                2 => 'leads'
                            ],
                            'sql' => 'contactsMiddle.status IS NULL AND leadsMiddle.status IS NULL AND usersMiddle.status IS NULL',
                            'distinct' => true
                        ],
                        'IS NOT NULL' => 'call.id NOT IN (SELECT call_id FROM call_contact WHERE deleted = 0 AND status IS NULL) OR call.id NOT IN (SELECT call_id FROM call_user WHERE deleted = 0 AND status IS NULL) OR call.id NOT IN (SELECT call_id FROM call_lead WHERE deleted = 0 AND status IS NULL)'
                    ],
                    'view' => 'crm:views/meeting/fields/acceptance-status'
                ],
                'users' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'view' => 'crm:views/meeting/fields/users',
                    'columns' => (object) [
                        'status' => 'acceptanceStatus'
                    ],
                    'orderBy' => 'name'
                ],
                'contacts' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'view' => 'crm:views/meeting/fields/contacts',
                    'columns' => (object) [
                        'status' => 'acceptanceStatus'
                    ],
                    'orderBy' => 'name'
                ],
                'leads' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'view' => 'crm:views/meeting/fields/attendees',
                    'columns' => (object) [
                        'status' => 'acceptanceStatus'
                    ],
                    'orderBy' => 'name'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ]
            ],
            'links' => (object) [
                'account' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account'
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'calls',
                    'additionalColumns' => (object) [
                        'status' => (object) [
                            'type' => 'varchar',
                            'len' => '36',
                            'default' => 'None'
                        ]
                    ]
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'calls',
                    'additionalColumns' => (object) [
                        'status' => (object) [
                            'type' => 'varchar',
                            'len' => '36',
                            'default' => 'None'
                        ]
                    ]
                ],
                'leads' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Lead',
                    'foreign' => 'calls',
                    'additionalColumns' => (object) [
                        'status' => (object) [
                            'type' => 'varchar',
                            'len' => '36',
                            'default' => 'None'
                        ]
                    ]
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'foreign' => 'calls'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'dateStart',
                'asc' => false
            ],
            'indexes' => (object) [
                'dateStartStatus' => (object) [
                    'columns' => [
                        0 => 'dateStart',
                        1 => 'status'
                    ]
                ],
                'dateStart' => (object) [
                    'columns' => [
                        0 => 'dateStart',
                        1 => 'deleted'
                    ]
                ],
                'status' => (object) [
                    'columns' => [
                        0 => 'status',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ],
                'assignedUserStatus' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'status'
                    ]
                ]
            ]
        ],
        'Campaign' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Planning',
                        1 => 'Active',
                        2 => 'Inactive',
                        3 => 'Complete'
                    ],
                    'default' => 'Planning'
                ],
                'type' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Email',
                        1 => 'Newsletter',
                        2 => 'Web',
                        3 => 'Television',
                        4 => 'Radio',
                        5 => 'Mail'
                    ],
                    'default' => 'Email'
                ],
                'startDate' => (object) [
                    'type' => 'date'
                ],
                'endDate' => (object) [
                    'type' => 'date'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'targetLists' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'excludingTargetLists' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'sentCount' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'openedCount' => (object) [
                    'view' => 'crm:views/campaign/fields/int-with-percentage',
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'clickedCount' => (object) [
                    'view' => 'crm:views/campaign/fields/int-with-percentage',
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'optedInCount' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'optedOutCount' => (object) [
                    'view' => 'crm:views/campaign/fields/int-with-percentage',
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'bouncedCount' => (object) [
                    'view' => 'crm:views/campaign/fields/int-with-percentage',
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'hardBouncedCount' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'softBouncedCount' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'leadCreatedCount' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'openedPercentage' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'clickedPercentage' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'optedOutPercentage' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'bouncedPercentage' => (object) [
                    'type' => 'int',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'revenue' => (object) [
                    'type' => 'currency',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'budget' => (object) [
                    'type' => 'currency'
                ],
                'contactsTemplate' => (object) [
                    'type' => 'link',
                    'view' => 'crm:views/campaign/fields/template',
                    'targetEntityType' => 'Contact'
                ],
                'leadsTemplate' => (object) [
                    'type' => 'link',
                    'view' => 'crm:views/campaign/fields/template',
                    'targetEntityType' => 'Lead'
                ],
                'accountsTemplate' => (object) [
                    'type' => 'link',
                    'view' => 'crm:views/campaign/fields/template',
                    'targetEntityType' => 'Account'
                ],
                'usersTemplate' => (object) [
                    'type' => 'link',
                    'view' => 'crm:views/campaign/fields/template',
                    'targetEntityType' => 'User'
                ],
                'mailMergeOnlyWithAddress' => (object) [
                    'type' => 'bool',
                    'default' => true
                ],
                'revenueCurrency' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'varchar',
                    'disabled' => true,
                    'maxLength' => 6
                ],
                'revenueConverted' => (object) [
                    'notStorable' => true,
                    'readOnly' => true,
                    'type' => 'currencyConverted',
                    'importDisabled' => true
                ],
                'budgetCurrency' => (object) [
                    'type' => 'varchar',
                    'disabled' => true,
                    'maxLength' => 6
                ],
                'budgetConverted' => (object) [
                    'type' => 'currencyConverted',
                    'readOnly' => true,
                    'importDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'targetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'campaigns'
                ],
                'excludingTargetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'campaignsExcluding',
                    'relationName' => 'campaignTargetListExcluding'
                ],
                'accounts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Account',
                    'foreign' => 'campaign'
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'campaign'
                ],
                'leads' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Lead',
                    'foreign' => 'campaign'
                ],
                'opportunities' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Opportunity',
                    'foreign' => 'campaign'
                ],
                'campaignLogRecords' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'CampaignLogRecord',
                    'foreign' => 'campaign'
                ],
                'trackingUrls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'CampaignTrackingUrl',
                    'foreign' => 'campaign'
                ],
                'massEmails' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'MassEmail',
                    'foreign' => 'campaign',
                    'layoutRelationshipsDisabled' => true
                ],
                'contactsTemplate' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Template',
                    'noJoin' => true
                ],
                'leadsTemplate' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Template',
                    'noJoin' => true
                ],
                'accountsTemplate' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Template',
                    'noJoin' => true
                ],
                'usersTemplate' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Template',
                    'noJoin' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'createdAt' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'CampaignLogRecord' => (object) [
            'fields' => (object) [
                'action' => (object) [
                    'type' => 'enum',
                    'required' => true,
                    'maxLength' => 50,
                    'options' => [
                        0 => 'Sent',
                        1 => 'Opened',
                        2 => 'Opted Out',
                        3 => 'Bounced',
                        4 => 'Clicked',
                        5 => 'Opted In',
                        6 => 'Lead Created'
                    ]
                ],
                'actionDate' => (object) [
                    'type' => 'datetime',
                    'required' => true
                ],
                'data' => (object) [
                    'type' => 'jsonObject',
                    'view' => 'crm:views/campaign-log-record/fields/data'
                ],
                'stringData' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'stringAdditionalData' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'application' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'maxLength' => 36,
                    'default' => 'Espo'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'campaign' => (object) [
                    'type' => 'link'
                ],
                'parent' => (object) [
                    'type' => 'linkParent'
                ],
                'object' => (object) [
                    'type' => 'linkParent'
                ],
                'queueItem' => (object) [
                    'type' => 'link'
                ],
                'isTest' => (object) [
                    'type' => 'bool',
                    'default' => false
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign',
                    'foreign' => 'campaignLogRecords'
                ],
                'queueItem' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'EmailQueueItem',
                    'noJoin' => true
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'entityList' => [
                        0 => 'Account',
                        1 => 'Contact',
                        2 => 'Lead',
                        3 => 'Opportunity',
                        4 => 'User'
                    ]
                ],
                'object' => (object) [
                    'type' => 'belongsToParent',
                    'entityList' => [
                        0 => 'Email',
                        1 => 'CampaignTrackingUrl'
                    ]
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'actionDate',
                'asc' => false
            ],
            'indexes' => (object) [
                'actionDate' => (object) [
                    'columns' => [
                        0 => 'actionDate',
                        1 => 'deleted'
                    ]
                ],
                'action' => (object) [
                    'columns' => [
                        0 => 'action',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'CampaignTrackingUrl' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'url' => (object) [
                    'type' => 'url',
                    'required' => true
                ],
                'urlToUse' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'readOnly' => true
                ],
                'campaign' => (object) [
                    'type' => 'link',
                    'required' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign',
                    'foreign' => 'trackingUrls'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'name',
                'asc' => true
            ]
        ],
        'Case' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'number' => (object) [
                    'type' => 'autoincrement',
                    'index' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'New',
                        1 => 'Assigned',
                        2 => 'Pending',
                        3 => 'Closed',
                        4 => 'Rejected',
                        5 => 'Duplicate'
                    ],
                    'default' => 'New',
                    'view' => 'views/fields/enum-styled',
                    'style' => (object) [
                        'Closed' => 'success',
                        'Duplicate' => 'danger',
                        'Rejected' => 'danger'
                    ],
                    'audited' => true
                ],
                'priority' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Low',
                        1 => 'Normal',
                        2 => 'High',
                        3 => 'Urgent'
                    ],
                    'default' => 'Normal',
                    'audited' => true
                ],
                'type' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Question',
                        2 => 'Incident',
                        3 => 'Problem'
                    ],
                    'default' => '',
                    'audited' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'account' => (object) [
                    'type' => 'link'
                ],
                'lead' => (object) [
                    'type' => 'link'
                ],
                'contact' => (object) [
                    'type' => 'link',
                    'view' => 'crm:views/case/fields/contact'
                ],
                'contacts' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'crm:views/case/fields/contacts',
                    'orderBy' => 'name'
                ],
                'inboundEmail' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'attachments' => (object) [
                    'type' => 'attachmentMultiple'
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'inboundEmail' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'InboundEmail'
                ],
                'account' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account',
                    'foreign' => 'cases'
                ],
                'lead' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Lead',
                    'foreign' => 'cases'
                ],
                'contact' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Contact',
                    'foreign' => 'casesPrimary'
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'cases',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'calls' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'emails' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Email',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'articles' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'KnowledgeBaseArticle',
                    'foreign' => 'cases',
                    'audited' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'number',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'number'
                ]
            ],
            'indexes' => (object) [
                'status' => (object) [
                    'columns' => [
                        0 => 'status',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ],
                'assignedUserStatus' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'status'
                    ]
                ]
            ]
        ],
        'Contact' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'personName',
                    'isPersonalData' => true
                ],
                'salutationName' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Mr.',
                        2 => 'Ms.',
                        3 => 'Mrs.'
                    ],
                    'isPersonalData' => false,
                    'required' => false,
                    'isSorted' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false
                ],
                'firstName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'default' => ''
                ],
                'lastName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'required' => true,
                    'default' => ''
                ],
                'accountId' => (object) [
                    'type' => 'varchar',
                    'where' => (object) [
                        '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id = {value})',
                        '<>' => 'contact.id NOT IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id = {value})',
                        'IN' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id IN {value})',
                        'NOT IN' => 'contact.id NOT IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id IN {value})',
                        'IS NULL' => 'contact.account_id IS NULL',
                        'IS NOT NULL' => 'contact.account_id IS NOT NULL'
                    ],
                    'disabled' => true
                ],
                'title' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100,
                    'notStorable' => true,
                    'select' => 'accountContact.role',
                    'orderBy' => 'accountContact.role {direction}',
                    'where' => (object) [
                        'LIKE' => (object) [
                            'leftJoins' => [
                                0 => 'accounts'
                            ],
                            'sql' => 'accountsMiddle.role LIKE {value}',
                            'distinct' => true
                        ],
                        '=' => (object) [
                            'leftJoins' => [
                                0 => 'accounts'
                            ],
                            'sql' => 'accountsMiddle.role = {value}',
                            'distinct' => true
                        ],
                        '<>' => (object) [
                            'leftJoins' => [
                                0 => 'accounts'
                            ],
                            'sql' => 'accountsMiddle.role <> {value}',
                            'distinct' => true
                        ],
                        'IS NULL' => (object) [
                            'leftJoins' => [
                                0 => 'accounts'
                            ],
                            'sql' => 'accountsMiddle.role IS NULL',
                            'distinct' => true
                        ],
                        'IS NOT NULL' => (object) [
                            'leftJoins' => [
                                0 => 'accounts'
                            ],
                            'sql' => 'accountsMiddle.role IS NOT NULL',
                            'distinct' => true
                        ]
                    ],
                    'trim' => true,
                    'textFilterDisabled' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'emailAddress' => (object) [
                    'type' => 'email',
                    'isPersonalData' => true
                ],
                'phoneNumber' => (object) [
                    'type' => 'phone',
                    'typeList' => [
                        0 => 'Mobile',
                        1 => 'Office'
                    ],
                    'defaultType' => 'Mobile',
                    'isPersonalData' => true,
                    'notStorable' => true,
                    'required' => false,
                    'tooltipText' => 'Ingrese telefono eje: celular: 954408013 - Oficina: 225785895 ',
                    'tooltip' => true
                ],
                'doNotCall' => (object) [
                    'type' => 'bool'
                ],
                'address' => (object) [
                    'type' => 'address',
                    'isPersonalData' => true
                ],
                'addressStreet' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'addressCity' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressState' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressCountry' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPostalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'account' => (object) [
                    'type' => 'link',
                    'view' => 'crm:views/contact/fields/account'
                ],
                'accounts' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'crm:views/contact/fields/accounts',
                    'columns' => (object) [
                        'role' => 'contactRole',
                        'isInactive' => 'contactIsInactive'
                    ],
                    'orderBy' => 'name'
                ],
                'accountRole' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'exportDisabled' => true,
                    'importDisabled' => true,
                    'view' => 'crm:views/contact/fields/account-role',
                    'textFilterDisabled' => true
                ],
                'accountIsInactive' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'select' => 'accountContact.is_inactive',
                    'orderBy' => 'accountContact.is_inactive {direction}',
                    'where' => (object) [
                        '=' => (object) [
                            'leftJoins' => [
                                0 => 'accounts'
                            ],
                            'sql' => 'accountsMiddle.is_inactive = {value}',
                            'distinct' => true
                        ],
                        '<>' => (object) [
                            'leftJoins' => [
                                0 => 'accounts'
                            ],
                            'sql' => 'accountsMiddle.is_inactive <> {value}',
                            'distinct' => true
                        ]
                    ],
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true
                ],
                'accountType' => (object) [
                    'type' => 'foreign',
                    'link' => 'account',
                    'field' => 'type',
                    'readOnly' => true,
                    'view' => 'views/fields/foreign-enum'
                ],
                'opportunityRole' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'options' => [
                        0 => '',
                        1 => 'Decision Maker',
                        2 => 'Evaluator',
                        3 => 'Influencer'
                    ],
                    'layoutMassUpdateDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'customizationRequiredDisabled' => true,
                    'customizationIsSortedDisabled' => true,
                    'customizationAuditedDisabled' => true,
                    'customizationReadOnlyDisabled' => true,
                    'where' => (object) [
                        '=' => (object) [
                            'leftJoins' => [
                                0 => 'opportunities'
                            ],
                            'sql' => 'opportunitiesMiddle.role = {value}',
                            'distinct' => true
                        ],
                        '<>' => 'contact.id NOT IN (SELECT contact_id FROM contact_opportunity WHERE deleted = 0 AND role = {value})',
                        'IN' => (object) [
                            'leftJoins' => [
                                0 => 'opportunities'
                            ],
                            'sql' => 'opportunitiesMiddle.role IN {value}',
                            'distinct' => true
                        ],
                        'NOT IN' => 'contact.id NOT IN (SELECT contact_id FROM contact_opportunity WHERE deleted = 0 AND role IN {value})',
                        'LIKE' => (object) [
                            'leftJoins' => [
                                0 => 'opportunities'
                            ],
                            'sql' => 'opportunitiesMiddle.role LIKE {value}',
                            'distinct' => true
                        ],
                        'IS NULL' => (object) [
                            'leftJoins' => [
                                0 => 'opportunities'
                            ],
                            'sql' => 'opportunitiesMiddle.role IS NULL',
                            'distinct' => true
                        ],
                        'IS NOT NULL' => 'contact.id NOT IN (SELECT contact_id FROM contact_opportunity WHERE deleted = 0 AND role IS NULL)'
                    ],
                    'view' => 'crm:views/contact/fields/opportunity-role'
                ],
                'acceptanceStatus' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'exportDisabled' => true,
                    'disabled' => true
                ],
                'acceptanceStatusMeetings' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'view' => 'crm:views/lead/fields/acceptance-status',
                    'link' => 'meetings',
                    'column' => 'status'
                ],
                'acceptanceStatusCalls' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'view' => 'crm:views/lead/fields/acceptance-status',
                    'link' => 'calls',
                    'column' => 'status'
                ],
                'campaign' => (object) [
                    'type' => 'link',
                    'layoutListDisabled' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true,
                    'notNull' => false,
                    'isPersonalData' => false,
                    'required' => false,
                    'useNumericFormat' => false,
                    'audited' => false,
                    'tooltip' => false
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'targetLists' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true
                ],
                'targetList' => (object) [
                    'type' => 'link',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'exportDisabled' => true,
                    'entity' => 'TargetList'
                ],
                'portalUser' => (object) [
                    'type' => 'link',
                    'layoutMassUpdateDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'readOnly' => true,
                    'notStorable' => true,
                    'view' => 'views/fields/link-one'
                ],
                'originalLead' => (object) [
                    'type' => 'link',
                    'layoutMassUpdateDisabled' => true,
                    'layoutListDisabled' => true,
                    'readOnly' => true,
                    'view' => 'views/fields/link-one'
                ],
                'targetListIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'rutBeneficiario' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'maxLength' => 20,
                    'tooltipText' => 'Ingrese Rut: 17281236-6',
                    'isPersonalData' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'formularios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'emailAddressIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ],
                'addressMap' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'account' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account'
                ],
                'accounts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Account',
                    'foreign' => 'contacts',
                    'additionalColumns' => (object) [
                        'role' => (object) [
                            'type' => 'varchar',
                            'len' => 100
                        ],
                        'isInactive' => (object) [
                            'type' => 'bool',
                            'default' => false
                        ]
                    ],
                    'layoutRelationshipsDisabled' => true
                ],
                'opportunities' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Opportunity',
                    'foreign' => 'contacts'
                ],
                'casesPrimary' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Case',
                    'foreign' => 'contact',
                    'layoutRelationshipsDisabled' => true
                ],
                'cases' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Case',
                    'foreign' => 'contacts'
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'contacts',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'contacts',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'emails' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Email',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign',
                    'foreign' => 'contacts',
                    'noJoin' => true
                ],
                'campaignLogRecords' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'CampaignLogRecord',
                    'foreign' => 'parent'
                ],
                'targetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'contacts'
                ],
                'portalUser' => (object) [
                    'type' => 'hasOne',
                    'entity' => 'User',
                    'foreign' => 'contact'
                ],
                'originalLead' => (object) [
                    'type' => 'hasOne',
                    'entity' => 'Lead',
                    'foreign' => 'createdContact'
                ],
                'documents' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Document',
                    'foreign' => 'contacts',
                    'audited' => true
                ],
                'tasksPrimary' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Task',
                    'foreign' => 'contact',
                    'layoutRelationshipsDisabled' => true
                ],
                'formularios' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'contact',
                    'entity' => 'Formularios',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'emailAddress'
                ]
            ],
            'indexes' => (object) [
                'createdAt' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'deleted'
                    ]
                ],
                'firstName' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'deleted'
                    ]
                ],
                'name' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'lastName'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Document' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'view' => 'crm:views/document/fields/name',
                    'trim' => true
                ],
                'file' => (object) [
                    'type' => 'file',
                    'required' => true,
                    'view' => 'crm:views/document/fields/file'
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Active',
                        1 => 'Draft',
                        2 => 'Expired',
                        3 => 'Canceled'
                    ],
                    'view' => 'views/fields/enum-styled',
                    'style' => (object) [
                        'Canceled' => 'danger',
                        'Expired' => 'danger'
                    ]
                ],
                'type' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Contract',
                        2 => 'NDA',
                        3 => 'EULA',
                        4 => 'License Agreement'
                    ]
                ],
                'publishDate' => (object) [
                    'type' => 'date',
                    'required' => true,
                    'default' => 'javascript: return this.dateTime.getToday();'
                ],
                'expirationDate' => (object) [
                    'type' => 'date',
                    'after' => 'publishDate'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'accounts' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true
                ],
                'folder' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/link-category-tree'
                ],
                'formularios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => false,
                    'layoutMassUpdateDisabled' => false,
                    'importDisabled' => false,
                    'noLoad' => false,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'accounts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Account',
                    'foreign' => 'documents'
                ],
                'opportunities' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Opportunity',
                    'foreign' => 'documents'
                ],
                'leads' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Lead',
                    'foreign' => 'documents'
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'documents'
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'folder' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'documents',
                    'entity' => 'DocumentFolder'
                ],
                'formularios' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'formulariosDocument',
                    'foreign' => 'documents',
                    'entity' => 'Formularios',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ]
        ],
        'DocumentFolder' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'parent' => (object) [
                    'type' => 'link'
                ],
                'childList' => (object) [
                    'type' => 'jsonArray',
                    'notStorable' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'parent' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'children',
                    'entity' => 'DocumentFolder'
                ],
                'children' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'parent',
                    'entity' => 'DocumentFolder'
                ],
                'documents' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'folder',
                    'entity' => 'Document'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'parent',
                'asc' => true
            ],
            'additionalTables' => (object) [
                'DocumentFolderPath' => (object) [
                    'fields' => (object) [
                        'id' => (object) [
                            'type' => 'id',
                            'dbType' => 'int',
                            'len' => '11',
                            'autoincrement' => true,
                            'unique' => true
                        ],
                        'ascendorId' => (object) [
                            'type' => 'varchar',
                            'len' => '100',
                            'index' => true
                        ],
                        'descendorId' => (object) [
                            'type' => 'varchar',
                            'len' => '24',
                            'index' => true
                        ]
                    ]
                ]
            ]
        ],
        'EmailQueueItem' => (object) [
            'fields' => (object) [
                'massEmail' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Pending',
                        1 => 'Sent',
                        2 => 'Failed',
                        3 => 'Sending'
                    ],
                    'readOnly' => true
                ],
                'attemptCount' => (object) [
                    'type' => 'int',
                    'readOnly' => true,
                    'default' => 0
                ],
                'target' => (object) [
                    'type' => 'linkParent',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'sentAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'varchar',
                    'readOnly' => true
                ],
                'isTest' => (object) [
                    'type' => 'bool'
                ]
            ],
            'links' => (object) [
                'massEmail' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'MassEmail',
                    'foreign' => 'queueItems'
                ],
                'target' => (object) [
                    'type' => 'belongsToParent'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ]
        ],
        'KnowledgeBaseArticle' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Draft',
                        1 => 'In Review',
                        2 => 'Published',
                        3 => 'Archived'
                    ],
                    'view' => 'crm:views/knowledge-base-article/fields/status',
                    'default' => 'Draft'
                ],
                'language' => (object) [
                    'type' => 'enum',
                    'view' => 'crm:views/knowledge-base-article/fields/language',
                    'default' => '',
                    'customizationOptionsDisabled' => true
                ],
                'type' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Article'
                    ]
                ],
                'portals' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'publishDate' => (object) [
                    'type' => 'date'
                ],
                'expirationDate' => (object) [
                    'type' => 'date',
                    'after' => 'publishDate'
                ],
                'order' => (object) [
                    'type' => 'int',
                    'disableFormatting' => true,
                    'textFilterDisabled' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'categories' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/link-multiple-category-tree'
                ],
                'attachments' => (object) [
                    'type' => 'attachmentMultiple'
                ],
                'body' => (object) [
                    'type' => 'wysiwyg'
                ]
            ],
            'links' => (object) [
                'cases' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Case',
                    'foreign' => 'articles'
                ],
                'portals' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Portal',
                    'foreign' => 'articles'
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'categories' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'articles',
                    'entity' => 'KnowledgeBaseCategory'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'order',
                'asc' => true
            ]
        ],
        'KnowledgeBaseCategory' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'order' => (object) [
                    'type' => 'int',
                    'required' => true,
                    'disableFormatting' => true,
                    'textFilterDisabled' => true
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'parent' => (object) [
                    'type' => 'link'
                ],
                'childList' => (object) [
                    'type' => 'jsonArray',
                    'notStorable' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'parent' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'children',
                    'entity' => 'KnowledgeBaseCategory'
                ],
                'children' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'parent',
                    'entity' => 'KnowledgeBaseCategory'
                ],
                'articles' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'categories',
                    'entity' => 'KnowledgeBaseArticle'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'parent',
                'sortByByColumn' => 'parentId',
                'asc' => true
            ],
            'additionalTables' => (object) [
                'KnowledgeBaseCategoryPath' => (object) [
                    'fields' => (object) [
                        'id' => (object) [
                            'type' => 'id',
                            'dbType' => 'int',
                            'len' => '11',
                            'autoincrement' => true,
                            'unique' => true
                        ],
                        'ascendorId' => (object) [
                            'type' => 'varchar',
                            'len' => '100',
                            'index' => true
                        ],
                        'descendorId' => (object) [
                            'type' => 'varchar',
                            'len' => '24',
                            'index' => true
                        ]
                    ]
                ]
            ]
        ],
        'Lead' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'personName',
                    'isPersonalData' => true
                ],
                'salutationName' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Mr.',
                        2 => 'Ms.',
                        3 => 'Mrs.',
                        4 => 'Dr.'
                    ]
                ],
                'firstName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'default' => ''
                ],
                'lastName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'default' => ''
                ],
                'title' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'New',
                        1 => 'Assigned',
                        2 => 'In Process',
                        3 => 'Converted',
                        4 => 'Recycled',
                        5 => 'Dead'
                    ],
                    'default' => 'New',
                    'view' => 'views/fields/enum-styled',
                    'style' => (object) [
                        'Converted' => 'success',
                        'Recycled' => 'danger',
                        'Dead' => 'danger'
                    ],
                    'audited' => true
                ],
                'source' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Call',
                        2 => 'Email',
                        3 => 'Existing Customer',
                        4 => 'Partner',
                        5 => 'Public Relations',
                        6 => 'Web Site',
                        7 => 'Campaign',
                        8 => 'Other'
                    ],
                    'default' => ''
                ],
                'industry' => (object) [
                    'type' => 'enum',
                    'view' => 'crm:views/lead/fields/industry',
                    'customizationOptionsDisabled' => true,
                    'default' => '',
                    'isSorted' => true
                ],
                'opportunityAmount' => (object) [
                    'type' => 'currency',
                    'audited' => true
                ],
                'opportunityAmountConverted' => (object) [
                    'type' => 'currencyConverted',
                    'readOnly' => true,
                    'importDisabled' => true
                ],
                'website' => (object) [
                    'type' => 'url',
                    'strip' => true
                ],
                'address' => (object) [
                    'type' => 'address',
                    'isPersonalData' => true
                ],
                'addressStreet' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'addressCity' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressState' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressCountry' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPostalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'email',
                    'isPersonalData' => true
                ],
                'phoneNumber' => (object) [
                    'type' => 'phone',
                    'typeList' => [
                        0 => 'Mobile',
                        1 => 'Office',
                        2 => 'Home',
                        3 => 'Fax',
                        4 => 'Other'
                    ],
                    'defaultType' => 'Mobile',
                    'isPersonalData' => true
                ],
                'doNotCall' => (object) [
                    'type' => 'bool'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'accountName' => (object) [
                    'type' => 'varchar'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'acceptanceStatus' => (object) [
                    'type' => 'varchar',
                    'notStorable' => true,
                    'exportDisabled' => true,
                    'disabled' => true
                ],
                'acceptanceStatusMeetings' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'view' => 'crm:views/lead/fields/acceptance-status',
                    'link' => 'meetings',
                    'column' => 'status'
                ],
                'acceptanceStatusCalls' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'view' => 'crm:views/lead/fields/acceptance-status',
                    'link' => 'calls',
                    'column' => 'status'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'campaign' => (object) [
                    'type' => 'link',
                    'layoutListDisabled' => true
                ],
                'createdAccount' => (object) [
                    'type' => 'link',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true
                ],
                'createdContact' => (object) [
                    'type' => 'link',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'view' => 'crm:views/lead/fields/created-contact'
                ],
                'createdOpportunity' => (object) [
                    'type' => 'link',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'view' => 'crm:views/lead/fields/created-opportunity'
                ],
                'targetLists' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true
                ],
                'targetList' => (object) [
                    'type' => 'link',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'entity' => 'TargetList'
                ],
                'targetListIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'readOnly' => true,
                    'disabled' => true
                ],
                'opportunityAmountCurrency' => (object) [
                    'type' => 'varchar',
                    'disabled' => true,
                    'maxLength' => 6
                ],
                'addressMap' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ],
                'emailAddressIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'leads',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'leads',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'cases' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Case',
                    'foreign' => 'lead',
                    'audited' => true
                ],
                'emails' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Email',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'createdAccount' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account',
                    'noJoin' => true,
                    'foreign' => 'originalLead'
                ],
                'createdContact' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Contact',
                    'noJoin' => true,
                    'foreign' => 'originalLead'
                ],
                'createdOpportunity' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Opportunity',
                    'noJoin' => true,
                    'foreign' => 'originalLead'
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign',
                    'foreign' => 'leads',
                    'noJoin' => true
                ],
                'campaignLogRecords' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'CampaignLogRecord',
                    'foreign' => 'parent'
                ],
                'targetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'leads'
                ],
                'documents' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Document',
                    'foreign' => 'leads',
                    'audited' => true
                ]
            ],
            'convertEntityList' => [
                0 => 'Account',
                1 => 'Contact',
                2 => 'Opportunity'
            ],
            'convertFields' => (object) [
                'Contact' => (object) [
                    
                ],
                'Account' => (object) [
                    'name' => 'accountName',
                    'billingAddressStreet' => 'addressStreet',
                    'billingAddressCity' => 'addressCity',
                    'billingAddressState' => 'addressState',
                    'billingAddressPostalCode' => 'addressPostalCode',
                    'billingAddressCountry' => 'addressCountry'
                ],
                'Opportunity' => (object) [
                    'amount' => 'opportunityAmount',
                    'leadSource' => 'source'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'accountName',
                    2 => 'emailAddress'
                ]
            ],
            'indexes' => (object) [
                'firstName' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'deleted'
                    ]
                ],
                'name' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'lastName'
                    ]
                ],
                'status' => (object) [
                    'columns' => [
                        0 => 'status',
                        1 => 'deleted'
                    ]
                ],
                'createdAt' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'deleted'
                    ]
                ],
                'createdAtStatus' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'status'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ],
                'assignedUserStatus' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'status'
                    ]
                ]
            ]
        ],
        'MassEmail' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Draft',
                        1 => 'Pending',
                        2 => 'Complete',
                        3 => 'In Process',
                        4 => 'Failed'
                    ],
                    'default' => 'Pending'
                ],
                'storeSentEmails' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'tooltip' => true
                ],
                'optOutEntirely' => (object) [
                    'type' => 'bool',
                    'default' => false,
                    'tooltip' => true
                ],
                'fromAddress' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'view' => 'crm:views/mass-email/fields/from-address'
                ],
                'fromName' => (object) [
                    'type' => 'varchar'
                ],
                'replyToAddress' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'replyToName' => (object) [
                    'type' => 'varchar'
                ],
                'startAt' => (object) [
                    'type' => 'datetime',
                    'required' => true
                ],
                'emailTemplate' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'crm:views/mass-email/fields/email-template'
                ],
                'campaign' => (object) [
                    'type' => 'link'
                ],
                'targetLists' => (object) [
                    'type' => 'linkMultiple',
                    'required' => true,
                    'tooltip' => true
                ],
                'excludingTargetLists' => (object) [
                    'type' => 'linkMultiple',
                    'tooltip' => true
                ],
                'inboundEmail' => (object) [
                    'type' => 'link'
                ],
                'smtpAccount' => (object) [
                    'type' => 'base',
                    'notStorable' => true,
                    'view' => 'crm:views/mass-email/fields/smtp-account'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'emailTemplate' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'EmailTemplate'
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign',
                    'foreign' => 'massEmails'
                ],
                'targetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'massEmails'
                ],
                'excludingTargetLists' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'TargetList',
                    'foreign' => 'massEmailsExcluding',
                    'relationName' => 'massEmailTargetListExcluding'
                ],
                'inboundEmail' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'InboundEmail'
                ],
                'queueItems' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'EmailQueueItem',
                    'foreign' => 'massEmail'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ]
        ],
        'Meeting' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Planned',
                        1 => 'Held',
                        2 => 'Not Held'
                    ],
                    'default' => 'Planned',
                    'view' => 'views/fields/enum-styled',
                    'style' => (object) [
                        'Held' => 'success'
                    ],
                    'audited' => true
                ],
                'dateStart' => (object) [
                    'type' => 'datetime',
                    'required' => true,
                    'default' => 'javascript: return this.dateTime.getNow(15);',
                    'audited' => true
                ],
                'dateEnd' => (object) [
                    'type' => 'datetime',
                    'required' => true,
                    'after' => 'dateStart'
                ],
                'duration' => (object) [
                    'type' => 'duration',
                    'start' => 'dateStart',
                    'end' => 'dateEnd',
                    'options' => [
                        0 => 900,
                        1 => 1800,
                        2 => 3600,
                        3 => 7200,
                        4 => 10800,
                        5 => 86400
                    ],
                    'default' => 3600,
                    'notStorable' => true,
                    'select' => 'TIMESTAMPDIFF(SECOND, meeting.date_start, meeting.date_end)',
                    'orderBy' => 'duration {direction}'
                ],
                'reminders' => (object) [
                    'type' => 'jsonArray',
                    'notStorable' => true,
                    'view' => 'crm:views/meeting/fields/reminders',
                    'layoutListDisabled' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'parent' => (object) [
                    'type' => 'linkParent',
                    'entityList' => [
                        0 => 'Account',
                        1 => 'Lead',
                        2 => 'Contact',
                        3 => 'Opportunity',
                        4 => 'Case',
                        5 => 'Formularios',
                        6 => 'Solicitudes',
                        7 => 'Subcategoria',
                        8 => 'Beneficios',
                        9 => 'DoctosBeneficio',
                        10 => 'Ciudad',
                        11 => 'Comuna',
                        12 => 'Rol',
                        13 => 'Reclamo',
                        14 => 'MotivoReclamo',
                        15 => 'Beneficiario',
                        16 => 'Categoria',
                        17 => 'EstadoReclamo'
                    ]
                ],
                'account' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'acceptanceStatus' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'options' => [
                        0 => 'None',
                        1 => 'Accepted',
                        2 => 'Tentative',
                        3 => 'Declined'
                    ],
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'where' => (object) [
                        '=' => (object) [
                            'leftJoins' => [
                                0 => 'users',
                                1 => 'contacts',
                                2 => 'leads'
                            ],
                            'sql' => 'contactsMiddle.status = {value} OR leadsMiddle.status = {value} OR usersMiddle.status = {value}',
                            'distinct' => true
                        ],
                        '<>' => 'meeting.id NOT IN (SELECT meeting_id FROM contact_meeting WHERE deleted = 0 AND status = {value}) AND meeting.id NOT IN (SELECT meeting_id FROM meeting_user WHERE deleted = 0 AND status = {value}) AND meeting.id NOT IN (SELECT meeting_id FROM lead_meeting WHERE deleted = 0 AND status = {value})',
                        'IN' => (object) [
                            'leftJoins' => [
                                0 => 'users',
                                1 => 'leads',
                                2 => 'contacts'
                            ],
                            'sql' => 'contactsMiddle.status IN {value} OR leadsMiddle.status IN {value} OR usersMiddle.status IN {value}',
                            'distinct' => true
                        ],
                        'NOT IN' => 'meeting.id NOT IN (SELECT meeting_id FROM contact_meeting WHERE deleted = 0 AND status IN {value}) AND meeting.id NOT IN (SELECT meeting_id FROM meeting_user WHERE deleted = 0 AND status IN {value}) AND meeting.id NOT IN (SELECT meeting_id FROM lead_meeting WHERE deleted = 0 AND status IN {value})',
                        'IS NULL' => (object) [
                            'leftJoins' => [
                                0 => 'users',
                                1 => 'contacts',
                                2 => 'leads'
                            ],
                            'sql' => 'contactsMiddle.status IS NULL AND leadsMiddle.status IS NULL AND usersMiddle.status IS NULL',
                            'distinct' => true
                        ],
                        'IS NOT NULL' => 'meeting.id NOT IN (SELECT meeting_id FROM contact_meeting WHERE deleted = 0 AND status IS NULL) OR meeting.id NOT IN (SELECT meeting_id FROM meeting_user WHERE deleted = 0 AND status IS NULL) OR meeting.id NOT IN (SELECT meeting_id FROM lead_meeting WHERE deleted = 0 AND status IS NULL)'
                    ],
                    'view' => 'crm:views/meeting/fields/acceptance-status'
                ],
                'users' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'crm:views/meeting/fields/users',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'columns' => (object) [
                        'status' => 'acceptanceStatus'
                    ],
                    'orderBy' => 'name'
                ],
                'contacts' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'view' => 'crm:views/meeting/fields/contacts',
                    'columns' => (object) [
                        'status' => 'acceptanceStatus'
                    ],
                    'orderBy' => 'name'
                ],
                'leads' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'crm:views/meeting/fields/attendees',
                    'layoutDetailDisabled' => true,
                    'layoutListDisabled' => true,
                    'columns' => (object) [
                        'status' => 'acceptanceStatus'
                    ],
                    'orderBy' => 'name'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ]
            ],
            'links' => (object) [
                'account' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account'
                ],
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'meetings',
                    'additionalColumns' => (object) [
                        'status' => (object) [
                            'type' => 'varchar',
                            'len' => '36',
                            'default' => 'None'
                        ]
                    ]
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'meetings',
                    'additionalColumns' => (object) [
                        'status' => (object) [
                            'type' => 'varchar',
                            'len' => '36',
                            'default' => 'None'
                        ]
                    ]
                ],
                'leads' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Lead',
                    'foreign' => 'meetings',
                    'additionalColumns' => (object) [
                        'status' => (object) [
                            'type' => 'varchar',
                            'len' => '36',
                            'default' => 'None'
                        ]
                    ]
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'foreign' => 'meetings'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'dateStart',
                'asc' => false
            ],
            'indexes' => (object) [
                'dateStartStatus' => (object) [
                    'columns' => [
                        0 => 'dateStart',
                        1 => 'status'
                    ]
                ],
                'dateStart' => (object) [
                    'columns' => [
                        0 => 'dateStart',
                        1 => 'deleted'
                    ]
                ],
                'status' => (object) [
                    'columns' => [
                        0 => 'status',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ],
                'assignedUserStatus' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'status'
                    ]
                ]
            ]
        ],
        'Opportunity' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'amount' => (object) [
                    'type' => 'currency',
                    'required' => true,
                    'audited' => true
                ],
                'amountConverted' => (object) [
                    'type' => 'currencyConverted',
                    'readOnly' => true,
                    'importDisabled' => true
                ],
                'amountWeightedConverted' => (object) [
                    'type' => 'float',
                    'readOnly' => true,
                    'notStorable' => true,
                    'select' => 'opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100',
                    'where' => (object) [
                        '=' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) = {value}',
                        '<' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) < {value}',
                        '>' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) > {value}',
                        '<=' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) <= {value}',
                        '>=' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) >= {value}',
                        '<>' => '(opportunity.amount * amountCurrencyRate.rate * opportunity.probability / 100) <> {value}',
                        'IS NULL' => 'opportunity.amount IS NULL',
                        'IS NOT NULL' => 'opportunity.amount IS NOT NULL'
                    ],
                    'orderBy' => 'amountWeightedConverted {direction}',
                    'view' => 'views/fields/currency-converted'
                ],
                'account' => (object) [
                    'type' => 'link'
                ],
                'contacts' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'crm:views/opportunity/fields/contacts',
                    'columns' => (object) [
                        'role' => 'opportunityRole'
                    ],
                    'orderBy' => 'name'
                ],
                'stage' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Prospecting',
                        1 => 'Qualification',
                        2 => 'Proposal',
                        3 => 'Negotiation',
                        4 => 'Closed Won',
                        5 => 'Closed Lost'
                    ],
                    'view' => 'crm:views/opportunity/fields/stage',
                    'default' => 'Prospecting',
                    'audited' => true,
                    'probabilityMap' => (object) [
                        'Prospecting' => 10,
                        'Qualification' => 20,
                        'Proposal' => 50,
                        'Negotiation' => 80,
                        'Closed Won' => 100,
                        'Closed Lost' => 0
                    ],
                    'fieldManagerAdditionalParamList' => [
                        0 => (object) [
                            'name' => 'probabilityMap',
                            'view' => 'crm:views/opportunity/admin/field-manager/fields/probability-map'
                        ]
                    ]
                ],
                'lastStage' => (object) [
                    'type' => 'enum',
                    'view' => 'crm:views/opportunity/fields/last-stage',
                    'customizationOptionsDisabled' => true,
                    'customizationDefaultDisabled' => true
                ],
                'probability' => (object) [
                    'type' => 'int',
                    'required' => true,
                    'min' => 0,
                    'max' => 100
                ],
                'leadSource' => (object) [
                    'type' => 'enum',
                    'view' => 'crm:views/opportunity/fields/lead-source',
                    'customizationOptionsDisabled' => true,
                    'default' => ''
                ],
                'closeDate' => (object) [
                    'type' => 'date',
                    'required' => true,
                    'audited' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'campaign' => (object) [
                    'type' => 'link'
                ],
                'originalLead' => (object) [
                    'type' => 'link',
                    'layoutMassUpdateDisabled' => true,
                    'layoutListDisabled' => true,
                    'readOnly' => true,
                    'view' => 'views/fields/link-one'
                ],
                'contactRole' => (object) [
                    'type' => 'enum',
                    'notStorable' => true,
                    'layoutMassUpdateDisabled' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationRequiredDisabled' => true,
                    'customizationIsSortedDisabled' => true,
                    'customizationAuditedDisabled' => true,
                    'customizationReadOnlyDisabled' => true,
                    'where' => (object) [
                        '=' => (object) [
                            'leftJoins' => [
                                0 => 'contacts'
                            ],
                            'sql' => 'contactsMiddle.role = {value}',
                            'distinct' => true
                        ],
                        '<>' => 'opportunity.id NOT IN (SELECT opportunity_id FROM contact_opportunity WHERE deleted = 0 AND role = {value})',
                        'IN' => (object) [
                            'leftJoins' => [
                                0 => 'contacts'
                            ],
                            'sql' => 'contactsMiddle.role IN {value}',
                            'distinct' => true
                        ],
                        'NOT IN' => 'opportunity.id NOT IN (SELECT opportunity_id FROM contact_opportunity WHERE deleted = 0 AND role IN {value})',
                        'LIKE' => (object) [
                            'leftJoins' => [
                                0 => 'contacts'
                            ],
                            'sql' => 'contactsMiddle.role LIKE {value}',
                            'distinct' => true
                        ],
                        'IS NULL' => (object) [
                            'leftJoins' => [
                                0 => 'contacts'
                            ],
                            'sql' => 'contactsMiddle.role IS NULL',
                            'distinct' => true
                        ],
                        'IS NOT NULL' => 'opportunity.id NOT IN (SELECT opportunity_id FROM contact_opportunity WHERE deleted = 0 AND role IS NULL)'
                    ],
                    'view' => 'crm:views/opportunity/fields/contact-role',
                    'customizationOptionsDisabled' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => false,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'amountCurrency' => (object) [
                    'type' => 'varchar',
                    'disabled' => true,
                    'maxLength' => 6
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'account' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account',
                    'foreign' => 'opportunities'
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'opportunities',
                    'additionalColumns' => (object) [
                        'role' => (object) [
                            'type' => 'varchar',
                            'len' => 50
                        ]
                    ]
                ],
                'meetings' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'calls' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true,
                    'audited' => true
                ],
                'emails' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Email',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'documents' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Document',
                    'foreign' => 'opportunities',
                    'audited' => true
                ],
                'campaign' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Campaign',
                    'foreign' => 'opportunities',
                    'noJoin' => true
                ],
                'originalLead' => (object) [
                    'type' => 'hasOne',
                    'entity' => 'Lead',
                    'foreign' => 'createdOpportunity'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'stage' => (object) [
                    'columns' => [
                        0 => 'stage',
                        1 => 'deleted'
                    ]
                ],
                'lastStage' => (object) [
                    'columns' => [
                        0 => 'lastStage'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ],
                'createdAt' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'deleted'
                    ]
                ],
                'createdAtStage' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'stage'
                    ]
                ],
                'assignedUserStage' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'stage'
                    ]
                ]
            ]
        ],
        'Reminder' => (object) [
            'fields' => (object) [
                'remindAt' => (object) [
                    'type' => 'datetime',
                    'index' => true
                ],
                'startAt' => (object) [
                    'type' => 'datetime',
                    'index' => true
                ],
                'type' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Popup',
                        1 => 'Email'
                    ],
                    'maxLength' => 36,
                    'index' => true,
                    'default' => 'Popup'
                ],
                'seconds' => (object) [
                    'type' => 'enumInt',
                    'options' => [
                        0 => 0,
                        1 => 60,
                        2 => 120,
                        3 => 300,
                        4 => 600,
                        5 => 900,
                        6 => 1800,
                        7 => 3600,
                        8 => 7200,
                        9 => 10800,
                        10 => 18000,
                        11 => 86400,
                        12 => 172800,
                        13 => 259200,
                        14 => 432000
                    ],
                    'default' => 0
                ],
                'entityType' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'entityId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 50
                ],
                'userId' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 50
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'remindAt',
                'asc' => false
            ]
        ],
        'Target' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'personName'
                ],
                'salutationName' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Mr.',
                        2 => 'Mrs.',
                        3 => 'Ms.',
                        4 => 'Dr.',
                        5 => 'Drs.'
                    ]
                ],
                'firstName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'default' => ''
                ],
                'lastName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'required' => true,
                    'default' => ''
                ],
                'title' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'accountName' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 100
                ],
                'website' => (object) [
                    'type' => 'url'
                ],
                'address' => (object) [
                    'type' => 'address'
                ],
                'addressStreet' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'addressCity' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressState' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressCountry' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPostalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'emailAddress' => (object) [
                    'type' => 'email'
                ],
                'phoneNumber' => (object) [
                    'type' => 'phone',
                    'typeList' => [
                        0 => 'Mobile',
                        1 => 'Office',
                        2 => 'Home',
                        3 => 'Fax',
                        4 => 'Other'
                    ],
                    'defaultType' => 'Mobile'
                ],
                'doNotCall' => (object) [
                    'type' => 'bool'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'addressMap' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ],
                'emailAddressIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'firstName' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'deleted'
                    ]
                ],
                'name' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'lastName'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'TargetList' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'entryCount' => (object) [
                    'type' => 'int',
                    'readOnly' => true,
                    'notStorable' => true,
                    'layoutFiltersDisabled' => true,
                    'layoutMassUpdateDisabled' => true
                ],
                'optedOutCount' => (object) [
                    'type' => 'int',
                    'readOnly' => true,
                    'notStorable' => true,
                    'layoutListDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'layoutMassUpdateDisabled' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'campaigns' => (object) [
                    'type' => 'link'
                ],
                'includingActionList' => (object) [
                    'type' => 'multiEnum',
                    'view' => 'crm:views/target-list/fields/including-action-list',
                    'layoutDetailDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'layoutLinkDisabled' => true,
                    'notStorable' => true,
                    'required' => true,
                    'disabled' => true
                ],
                'excludingActionList' => (object) [
                    'type' => 'multiEnum',
                    'view' => 'crm:views/target-list/fields/including-action-list',
                    'layoutDetailDisabled' => true,
                    'layoutFiltersDisabled' => true,
                    'layoutLinkDisabled' => true,
                    'notStorable' => true,
                    'disabled' => true
                ],
                'targetStatus' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Listed',
                        1 => 'Opted Out'
                    ],
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'importDisabled' => true,
                    'view' => 'crm:views/target-list/fields/target-status'
                ],
                'isOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'campaigns' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Campaign',
                    'foreign' => 'targetLists'
                ],
                'massEmails' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'MassEmail',
                    'foreign' => 'targetLists'
                ],
                'campaignsExcluding' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Campaign',
                    'foreign' => 'excludingTargetLists'
                ],
                'massEmailsExcluding' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'MassEmail',
                    'foreign' => 'excludingTargetLists'
                ],
                'accounts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Account',
                    'foreign' => 'targetLists',
                    'additionalColumns' => (object) [
                        'optedOut' => (object) [
                            'type' => 'bool'
                        ]
                    ]
                ],
                'contacts' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Contact',
                    'foreign' => 'targetLists',
                    'additionalColumns' => (object) [
                        'optedOut' => (object) [
                            'type' => 'bool'
                        ]
                    ]
                ],
                'leads' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Lead',
                    'foreign' => 'targetLists',
                    'additionalColumns' => (object) [
                        'optedOut' => (object) [
                            'type' => 'bool'
                        ]
                    ]
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'User',
                    'foreign' => 'targetLists',
                    'additionalColumns' => (object) [
                        'optedOut' => (object) [
                            'type' => 'bool'
                        ]
                    ]
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'createdAt' => (object) [
                    'columns' => [
                        0 => 'createdAt',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Task' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'status' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Not Started',
                        1 => 'Started',
                        2 => 'Completed',
                        3 => 'Canceled',
                        4 => 'Deferred'
                    ],
                    'view' => 'views/fields/enum-styled',
                    'style' => (object) [
                        'Completed' => 'success'
                    ],
                    'default' => 'Not Started',
                    'audited' => true
                ],
                'priority' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => 'Low',
                        1 => 'Normal',
                        2 => 'High',
                        3 => 'Urgent'
                    ],
                    'default' => 'Normal',
                    'audited' => true
                ],
                'dateStart' => (object) [
                    'type' => 'datetimeOptional',
                    'before' => 'dateEnd'
                ],
                'dateEnd' => (object) [
                    'type' => 'datetimeOptional',
                    'after' => 'dateStart',
                    'view' => 'crm:views/task/fields/date-end',
                    'audited' => true
                ],
                'dateStartDate' => (object) [
                    'type' => 'date',
                    'disabled' => true
                ],
                'dateEndDate' => (object) [
                    'type' => 'date',
                    'disabled' => true
                ],
                'dateCompleted' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'isOverdue' => (object) [
                    'type' => 'bool',
                    'readOnly' => true,
                    'notStorable' => true,
                    'view' => 'crm:views/task/fields/is-overdue',
                    'disabled' => true
                ],
                'reminders' => (object) [
                    'type' => 'jsonArray',
                    'notStorable' => true,
                    'view' => 'crm:views/meeting/fields/reminders'
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'parent' => (object) [
                    'type' => 'linkParent',
                    'entityList' => [
                        0 => 'Account',
                        1 => 'Contact',
                        2 => 'Lead',
                        3 => 'Opportunity',
                        4 => 'Case',
                        5 => 'Formularios',
                        6 => 'Solicitudes',
                        7 => 'Subcategoria',
                        8 => 'Beneficios',
                        9 => 'DoctosBeneficio',
                        10 => 'Ciudad',
                        11 => 'Comuna',
                        12 => 'Rol',
                        13 => 'Reclamo',
                        14 => 'MotivoReclamo',
                        15 => 'Beneficiario',
                        16 => 'Categoria',
                        17 => 'EstadoReclamo'
                    ]
                ],
                'account' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'contact' => (object) [
                    'type' => 'link',
                    'readOnly' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'attachments' => (object) [
                    'type' => 'attachmentMultiple',
                    'sourceList' => [
                        0 => 'Document'
                    ]
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User',
                    'foreign' => 'tasks'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'entityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'parent' => (object) [
                    'type' => 'belongsToParent',
                    'foreign' => 'tasks'
                ],
                'account' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Account'
                ],
                'contact' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Contact'
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'dateStartStatus' => (object) [
                    'columns' => [
                        0 => 'dateStart',
                        1 => 'status'
                    ]
                ],
                'dateEndStatus' => (object) [
                    'columns' => [
                        0 => 'dateEnd',
                        1 => 'status'
                    ]
                ],
                'dateStart' => (object) [
                    'columns' => [
                        0 => 'dateStart',
                        1 => 'deleted'
                    ]
                ],
                'status' => (object) [
                    'columns' => [
                        0 => 'status',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ],
                'assignedUserStatus' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'status'
                    ]
                ]
            ]
        ],
        'Beneficiario' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'beneficiarioId' => (object) [
                    'type' => 'int',
                    'required' => true,
                    'min' => 3000000,
                    'max' => 99999999,
                    'disableFormatting' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'reclamosBeneficiarios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'empresas' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ],
                'beneficiarioApellidoPaterno' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'maxLength' => 100,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'beneficiarioApellidoMaterno' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'maxLength' => 100,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'beneficiarioDv' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'maxLength' => 1,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'beneficios1' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'reclamosBeneficiarios' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'beneficiario',
                    'entity' => 'Reclamo',
                    'audited' => false,
                    'isCustom' => true
                ],
                'empresas' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'beneficiarioEmpresa',
                    'foreign' => 'beneficiarios',
                    'entity' => 'Empresa',
                    'audited' => false,
                    'isCustom' => true
                ],
                'beneficios1' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'beneficiario1',
                    'entity' => 'Beneficios',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Beneficios' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'titulo' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'descripcion' => (object) [
                    'type' => 'wysiwyg',
                    'required' => false,
                    'readOnly' => false,
                    'useIframe' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'direccion' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'validohasta' => (object) [
                    'notNull' => false,
                    'type' => 'date',
                    'required' => false,
                    'useNumericFormat' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'titulolegal' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'descripcionlegal' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'pasoapaso' => (object) [
                    'type' => 'wysiwyg',
                    'required' => false,
                    'readOnly' => false,
                    'useIframe' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'empresa' => (object) [
                    'type' => 'link'
                ],
                'proveedor' => (object) [
                    'type' => 'link'
                ],
                'rol' => (object) [
                    'type' => 'link'
                ],
                'comuna' => (object) [
                    'type' => 'link'
                ],
                'doctosBeneficios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'beneficiarioId' => (object) [
                    'type' => 'int',
                    'required' => true,
                    'min' => 5000000,
                    'max' => 99999999,
                    'disableFormatting' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'beneficiario1' => (object) [
                    'type' => 'link'
                ],
                'categoria' => (object) [
                    'type' => 'link'
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'empresa' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'beneficios',
                    'entity' => 'Empresa',
                    'audited' => false,
                    'isCustom' => true
                ],
                'proveedor' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'beneficios',
                    'entity' => 'Proveedor',
                    'audited' => false,
                    'isCustom' => true
                ],
                'rol' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'beneficioss',
                    'entity' => 'Rol',
                    'audited' => false,
                    'isCustom' => true
                ],
                'comuna' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'beneficios',
                    'entity' => 'Comuna',
                    'audited' => false,
                    'isCustom' => true
                ],
                'doctosBeneficios' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'beneficios',
                    'entity' => 'DoctosBeneficio',
                    'audited' => false,
                    'isCustom' => true
                ],
                'beneficiario1' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'beneficios1',
                    'entity' => 'Beneficiario',
                    'audited' => false,
                    'isCustom' => true
                ],
                'categoria' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'beneficioss',
                    'entity' => 'Categoria',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Categoria' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'nombreCategoria' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'reclamos' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'reclamos1' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'beneficioss' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'subcategorias' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'categoriaId' => (object) [
                    'type' => 'int',
                    'required' => false,
                    'disableFormatting' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'reclamos' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'categoria',
                    'entity' => 'Reclamo',
                    'audited' => false,
                    'isCustom' => true
                ],
                'reclamos1' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'categoria1',
                    'entity' => 'Reclamo',
                    'audited' => false,
                    'isCustom' => true
                ],
                'beneficioss' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'categoria',
                    'entity' => 'Beneficios',
                    'audited' => false,
                    'isCustom' => true
                ],
                'subcategorias' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'categoria',
                    'entity' => 'Subcategoria',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Ciudad' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'comunas' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'comunas' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'ciudad',
                    'entity' => 'Comuna',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Comuna' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'ciudad' => (object) [
                    'type' => 'link'
                ],
                'trabajador' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'beneficios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'ciudad' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'comunas',
                    'entity' => 'Ciudad',
                    'audited' => false,
                    'isCustom' => true
                ],
                'trabajador' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'comunarelacion',
                    'entity' => 'Trabajador',
                    'audited' => false,
                    'isCustom' => true
                ],
                'beneficios' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'comuna',
                    'entity' => 'Beneficios',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'DoctosBeneficio' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'descripcion' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'documentosbeneficio' => (object) [
                    'type' => 'file',
                    'required' => false,
                    'sourceList' => [
                        
                    ],
                    'audited' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'beneficios' => (object) [
                    'type' => 'link'
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'documentosbeneficio' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Attachment',
                    'skipOrmDefs' => true
                ],
                'beneficios' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'doctosBeneficios',
                    'entity' => 'Beneficios',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Empresa' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'beneficios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'trabajador' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ],
                'beneficiarios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ],
                'reclamosEmpresa' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'empresaId' => (object) [
                    'type' => 'int',
                    'required' => false,
                    'min' => NULL,
                    'max' => 99999999,
                    'disableFormatting' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'users' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'beneficios' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'empresa',
                    'entity' => 'Beneficios',
                    'audited' => false,
                    'isCustom' => true
                ],
                'trabajador' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'trabajadorEmpresa',
                    'foreign' => 'empresa',
                    'entity' => 'Trabajador',
                    'audited' => false,
                    'isCustom' => true
                ],
                'beneficiarios' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'beneficiarioEmpresa',
                    'foreign' => 'empresas',
                    'entity' => 'Beneficiario',
                    'audited' => false,
                    'isCustom' => true
                ],
                'reclamosEmpresa' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'empresa',
                    'entity' => 'Reclamo',
                    'audited' => false,
                    'isCustom' => true
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'userEmpresa',
                    'foreign' => 'empresas',
                    'entity' => 'User',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name'
                ],
                'fullTextSearch' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'EstadoReclamo' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'reclamos' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'reclamos' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'estadoReclamo',
                    'entity' => 'Reclamo',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Formularios' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'personName',
                    'isPersonalData' => true,
                    'required' => true,
                    'tooltipText' => 'Ingresar Nombre',
                    'tooltip' => true
                ],
                'salutationName' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Mr.',
                        2 => 'Ms.',
                        3 => 'Mrs.',
                        4 => 'Dr.'
                    ]
                ],
                'firstName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'default' => '',
                    'required' => true,
                    'tooltipText' => 'Ingrese Nombre',
                    'isPersonalData' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true
                ],
                'lastName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'required' => true,
                    'default' => ''
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'emailAddress' => (object) [
                    'type' => 'email',
                    'isPersonalData' => true
                ],
                'phoneNumber' => (object) [
                    'type' => 'phone',
                    'typeList' => [
                        0 => 'Mobile',
                        1 => 'Office'
                    ],
                    'defaultType' => 'Celular',
                    'isPersonalData' => true,
                    'notStorable' => true,
                    'required' => false,
                    'tooltipText' => 'Ingresé Número de contacto  Eje celular: 954408013 - Oficina: 225185872',
                    'tooltip' => true
                ],
                'address' => (object) [
                    'type' => 'address',
                    'isPersonalData' => true
                ],
                'addressStreet' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'addressCity' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressState' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressCountry' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPostalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => false,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'rut' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'maxLength' => 20,
                    'tooltipText' => 'Ingrese Rut  (Ej: 12.345.678-9)',
                    'isPersonalData' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'beneficioSolicitado' => (object) [
                    'type' => 'enum',
                    'required' => true,
                    'tooltipText' => 'Ingrese Beneficio',
                    'isSorted' => true,
                    'isPersonalData' => false,
                    'options' => [
                        0 => 'Ninguno',
                        1 => 'Educación',
                        2 => 'Gimnasio'
                    ],
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true,
                    'default' => 'Ninguno'
                ],
                'fechaSolicitud' => (object) [
                    'notNull' => false,
                    'type' => 'datetime',
                    'required' => true,
                    'default' => 'javascript: return this.dateTime.getNow(1);',
                    'tooltipText' => 'Ingrese Fecha Solicitud',
                    'isPersonalData' => false,
                    'useNumericFormat' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'fechaDesde' => (object) [
                    'notNull' => false,
                    'type' => 'date',
                    'required' => true,
                    'useNumericFormat' => false,
                    'default' => 'javascript: return this.dateTime.getToday();',
                    'isPersonalData' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'fechaHasta' => (object) [
                    'notNull' => false,
                    'type' => 'date',
                    'required' => true,
                    'tooltipText' => 'Ingrese Fecha Hasta',
                    'useNumericFormat' => false,
                    'isPersonalData' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'listaGym' => (object) [
                    'type' => 'enum',
                    'required' => false,
                    'options' => [
                        0 => '- Seleccionar Gym -',
                        1 => 'Sportlife',
                        2 => 'Pasco Club',
                        3 => 'Pacific Fitness',
                        4 => 'Centro Xtremo',
                        5 => 'Brisas del Maipo'
                    ],
                    'isPersonalData' => false,
                    'default' => '- Seleccionar Gym -',
                    'isSorted' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true,
                    'tooltipText' => 'Ingrese GYM'
                ],
                'estadoFormulario' => (object) [
                    'type' => 'enum',
                    'required' => true,
                    'options' => [
                        0 => '- Estado Formulario -',
                        1 => 'Creado',
                        2 => 'Inrgesado',
                        3 => 'Modificado',
                        4 => 'Eliminado'
                    ],
                    'isSorted' => true,
                    'tooltipText' => 'Ingrese estado',
                    'isPersonalData' => false,
                    'default' => '- Estado Formulario -',
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'observacion' => (object) [
                    'type' => 'text',
                    'required' => false,
                    'rows' => 30,
                    'lengthOfCut' => 100,
                    'maxLength' => 200,
                    'seeMoreDisabled' => false,
                    'tooltipText' => 'Inrgese Observación con un máximo de: 200 caracteres',
                    'default' => 'Sin Observaciones...',
                    'isPersonalData' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'documents' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => false,
                    'layoutMassUpdateDisabled' => false,
                    'importDisabled' => false,
                    'noLoad' => false,
                    'isCustom' => true
                ],
                'numeroFormulario' => (object) [
                    'type' => 'number',
                    'len' => 36,
                    'notNull' => false,
                    'unique' => false,
                    'nextNumber' => 500002,
                    'padLength' => 5,
                    'prefix' => '',
                    'tooltipText' => 'Num',
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'contact' => (object) [
                    'type' => 'link'
                ],
                'emailAddressIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ],
                'addressMap' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'documents' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'formulariosDocument',
                    'foreign' => 'formularios',
                    'entity' => 'Document',
                    'audited' => false,
                    'isCustom' => true
                ],
                'contact' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'formularios',
                    'entity' => 'Contact',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'rut',
                    1 => 'name'
                ],
                'fullTextSearch' => false
            ],
            'indexes' => (object) [
                'firstName' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'deleted'
                    ]
                ],
                'name' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'lastName'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'MotivoReclamo' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'motivoReclamoId' => (object) [
                    'type' => 'number',
                    'len' => 36,
                    'notNull' => false,
                    'unique' => false,
                    'nextNumber' => 1,
                    'padLength' => 5,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'motivoReclamoDescripcion' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'maxLength' => 100,
                    'tooltipText' => 'Describa los motivos por lo cuales se pueden generar reclamos',
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'reclamosMotivoReclamo' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'reclamosMotivoReclamo' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'motivoReclamo',
                    'entity' => 'Reclamo',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name'
                ],
                'fullTextSearch' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Proveedor' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'rut' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'direccion' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'beneficios' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'beneficios' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'proveedor',
                    'entity' => 'Beneficios',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Reclamo' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'reclamoId' => (object) [
                    'type' => 'number',
                    'len' => 36,
                    'notNull' => false,
                    'unique' => false,
                    'nextNumber' => 1,
                    'padLength' => 5,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'reclamoTitulo' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'maxLength' => 100,
                    'tooltipText' => 'Breve descripción del reclamo',
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'reclamoObservacion' => (object) [
                    'type' => 'text',
                    'required' => true,
                    'rows' => 30,
                    'lengthOfCut' => 400,
                    'maxLength' => 500,
                    'tooltipText' => 'Describa su situación',
                    'seeMoreDisabled' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'motivoReclamo' => (object) [
                    'type' => 'link'
                ],
                'beneficiario' => (object) [
                    'type' => 'link'
                ],
                'empresa' => (object) [
                    'type' => 'link'
                ],
                'categoria1' => (object) [
                    'type' => 'link'
                ],
                'user' => (object) [
                    'type' => 'link'
                ],
                'estado' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'estadoReclamo' => (object) [
                    'type' => 'link',
                    'defaultAttributes' => (object) [
                        'estadoReclamoId' => '5cc34e67958f06a8f',
                        'estadoReclamoName' => 'Creado'
                    ],
                    'required' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'motivoReclamo' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'reclamosMotivoReclamo',
                    'entity' => 'MotivoReclamo',
                    'audited' => false,
                    'isCustom' => true
                ],
                'beneficiario' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'reclamosBeneficiarios',
                    'entity' => 'Beneficiario',
                    'audited' => false,
                    'isCustom' => true
                ],
                'empresa' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'reclamosEmpresa',
                    'entity' => 'Empresa',
                    'audited' => false,
                    'isCustom' => true
                ],
                'categoria' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'reclamos',
                    'entity' => 'Categoria',
                    'audited' => false,
                    'isCustom' => true
                ],
                'categoria1' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'reclamos1',
                    'entity' => 'Categoria',
                    'audited' => false,
                    'isCustom' => true
                ],
                'user' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'reclamos',
                    'entity' => 'User',
                    'audited' => false,
                    'isCustom' => true
                ],
                'estadoReclamo' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'reclamos',
                    'entity' => 'EstadoReclamo',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Rol' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'beneficioss' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'trabajador' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ],
                'rolId' => (object) [
                    'type' => 'int',
                    'required' => true,
                    'disableFormatting' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'users' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'beneficioss' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'rol',
                    'entity' => 'Beneficios',
                    'audited' => false,
                    'isCustom' => true
                ],
                'trabajador' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'trabajadorRol',
                    'foreign' => 'rol',
                    'entity' => 'Trabajador',
                    'audited' => false,
                    'isCustom' => true
                ],
                'users' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'userRol',
                    'foreign' => 'rols',
                    'entity' => 'User',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Solicitudes' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'personName',
                    'isPersonalData' => true
                ],
                'salutationName' => (object) [
                    'type' => 'enum',
                    'options' => [
                        0 => '',
                        1 => 'Mr.',
                        2 => 'Ms.',
                        3 => 'Mrs.',
                        4 => 'Dr.'
                    ]
                ],
                'firstName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'default' => ''
                ],
                'lastName' => (object) [
                    'type' => 'varchar',
                    'trim' => true,
                    'maxLength' => 100,
                    'required' => true,
                    'default' => ''
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'emailAddress' => (object) [
                    'type' => 'email',
                    'isPersonalData' => true
                ],
                'phoneNumber' => (object) [
                    'type' => 'phone',
                    'typeList' => [
                        0 => 'Mobile',
                        1 => 'Office',
                        2 => 'Home',
                        3 => 'Fax',
                        4 => 'Other'
                    ],
                    'defaultType' => 'Mobile',
                    'isPersonalData' => true
                ],
                'address' => (object) [
                    'type' => 'address',
                    'isPersonalData' => true
                ],
                'addressStreet' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'addressCity' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressState' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressCountry' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'addressPostalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => false,
                    'notNull' => false,
                    'isPersonalData' => false,
                    'required' => true,
                    'useNumericFormat' => false,
                    'audited' => false,
                    'tooltip' => false
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => false,
                    'notNull' => false,
                    'isPersonalData' => false,
                    'required' => false,
                    'useNumericFormat' => false,
                    'audited' => false,
                    'tooltip' => false
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => false,
                    'view' => 'views/fields/user',
                    'required' => false,
                    'audited' => false,
                    'tooltip' => false
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => false,
                    'view' => 'views/fields/user',
                    'required' => false,
                    'audited' => false,
                    'tooltip' => false
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => false,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'rut' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => false,
                    'audited' => false,
                    'isPersonalData' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'estadoSolicitud' => (object) [
                    'type' => 'enum',
                    'required' => true,
                    'options' => [
                        0 => 'Aprobado',
                        1 => 'En proceso',
                        2 => 'Rechazado',
                        3 => 'Cancelado'
                    ],
                    'audited' => true,
                    'isPersonalData' => false,
                    'default' => 'Aprobado',
                    'isSorted' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'beneficio' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => false,
                    'isPersonalData' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'carga' => (object) [
                    'type' => 'multiEnum',
                    'storeArrayValues' => true,
                    'required' => false,
                    'isPersonalData' => false,
                    'options' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'ciudad' => (object) [
                    'type' => 'enum',
                    'required' => false,
                    'isPersonalData' => false,
                    'options' => false,
                    'isSorted' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'categoria' => (object) [
                    'type' => 'enum',
                    'required' => false,
                    'isPersonalData' => false,
                    'options' => false,
                    'isSorted' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'subcategoria' => (object) [
                    'type' => 'enum',
                    'required' => false,
                    'isPersonalData' => false,
                    'options' => false,
                    'isSorted' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'documento' => (object) [
                    'type' => 'file',
                    'required' => false,
                    'isPersonalData' => false,
                    'sourceList' => [
                        
                    ],
                    'audited' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'numeroSolicitud' => (object) [
                    'type' => 'number',
                    'len' => 36,
                    'notNull' => false,
                    'unique' => false,
                    'nextNumber' => 5,
                    'padLength' => 5,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'fechahasta' => (object) [
                    'notNull' => false,
                    'type' => 'date',
                    'required' => false,
                    'isPersonalData' => false,
                    'useNumericFormat' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'relacionsubcategoria' => (object) [
                    'type' => 'link'
                ],
                'emailAddressIsOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ],
                'addressMap' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'documento' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'Attachment',
                    'skipOrmDefs' => true
                ],
                'relacionsubcategoria' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'relacionsolicitudes',
                    'entity' => 'Subcategoria',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'rut'
                ],
                'fullTextSearch' => false
            ],
            'indexes' => (object) [
                'firstName' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'deleted'
                    ]
                ],
                'name' => (object) [
                    'columns' => [
                        0 => 'firstName',
                        1 => 'lastName'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Subcategoria' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'idcategoria' => (object) [
                    'type' => 'int',
                    'required' => false,
                    'disableFormatting' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'nombreSubcategoria' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'relacionsolicitudes' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'noLoad' => true,
                    'importDisabled' => true,
                    'isCustom' => true
                ],
                'categoria' => (object) [
                    'type' => 'link'
                ],
                'subcategoriaId' => (object) [
                    'type' => 'int',
                    'required' => false,
                    'min' => NULL,
                    'max' => NULL,
                    'disableFormatting' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'meetings' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Meeting',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'calls' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Call',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'tasks' => (object) [
                    'type' => 'hasChildren',
                    'entity' => 'Task',
                    'foreign' => 'parent',
                    'layoutRelationshipsDisabled' => true
                ],
                'relacionsolicitudes' => (object) [
                    'type' => 'hasMany',
                    'foreign' => 'relacionsubcategoria',
                    'entity' => 'Solicitudes',
                    'audited' => false,
                    'isCustom' => true
                ],
                'categoria' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'subcategorias',
                    'entity' => 'Categoria',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'name',
                    1 => 'nombreSubcategoria'
                ],
                'fullTextSearch' => false
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ],
        'Trabajador' => (object) [
            'fields' => (object) [
                'name' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true
                ],
                'description' => (object) [
                    'type' => 'text'
                ],
                'createdAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'modifiedAt' => (object) [
                    'type' => 'datetime',
                    'readOnly' => true
                ],
                'createdBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'modifiedBy' => (object) [
                    'type' => 'link',
                    'readOnly' => true,
                    'view' => 'views/fields/user'
                ],
                'assignedUser' => (object) [
                    'type' => 'link',
                    'required' => true,
                    'view' => 'views/fields/assigned-user'
                ],
                'teams' => (object) [
                    'type' => 'linkMultiple',
                    'view' => 'views/fields/teams'
                ],
                'nombre' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'rut' => (object) [
                    'type' => 'varchar',
                    'required' => true,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true,
                    'maxLength' => 12
                ],
                'apellidopaterno' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'apellidomaterno' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'nombrecompleto' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'direccion' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'email' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ],
                'comunarelacion' => (object) [
                    'type' => 'link'
                ],
                'rol' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ],
                'empresa' => (object) [
                    'type' => 'linkMultiple',
                    'layoutDetailDisabled' => true,
                    'layoutMassUpdateDisabled' => true,
                    'importDisabled' => true,
                    'noLoad' => true,
                    'isCustom' => true
                ],
                'telefono' => (object) [
                    'type' => 'varchar',
                    'required' => false,
                    'trim' => true,
                    'maxLength' => 15,
                    'tooltipText' => 'Ej. +56 2 29458565',
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => true,
                    'isCustom' => true
                ],
                'trabajadorId' => (object) [
                    'type' => 'int',
                    'required' => true,
                    'max' => 8,
                    'disableFormatting' => false,
                    'audited' => false,
                    'readOnly' => false,
                    'tooltip' => false,
                    'isCustom' => true
                ]
            ],
            'links' => (object) [
                'createdBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'modifiedBy' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'assignedUser' => (object) [
                    'type' => 'belongsTo',
                    'entity' => 'User'
                ],
                'teams' => (object) [
                    'type' => 'hasMany',
                    'entity' => 'Team',
                    'relationName' => 'EntityTeam',
                    'layoutRelationshipsDisabled' => true
                ],
                'comunarelacion' => (object) [
                    'type' => 'belongsTo',
                    'foreign' => 'trabajador',
                    'entity' => 'Comuna',
                    'audited' => false,
                    'isCustom' => true
                ],
                'rol' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'trabajadorRol',
                    'foreign' => 'trabajador',
                    'entity' => 'Rol',
                    'audited' => false,
                    'isCustom' => true
                ],
                'empresa' => (object) [
                    'type' => 'hasMany',
                    'relationName' => 'trabajadorEmpresa',
                    'foreign' => 'trabajador',
                    'entity' => 'Empresa',
                    'audited' => false,
                    'isCustom' => true
                ]
            ],
            'collection' => (object) [
                'sortBy' => 'createdAt',
                'asc' => false,
                'textFilterFields' => [
                    0 => 'rut',
                    1 => 'nombre',
                    2 => 'apellidopaterno',
                    3 => 'apellidomaterno',
                    4 => 'name',
                    5 => 'nombrecompleto'
                ],
                'fullTextSearch' => true
            ],
            'indexes' => (object) [
                'name' => (object) [
                    'columns' => [
                        0 => 'name',
                        1 => 'deleted'
                    ]
                ],
                'assignedUser' => (object) [
                    'columns' => [
                        0 => 'assignedUserId',
                        1 => 'deleted'
                    ]
                ]
            ]
        ]
    ],
    'fields' => (object) [
        'address' => (object) [
            'actualFields' => [
                0 => 'street',
                1 => 'city',
                2 => 'state',
                3 => 'country',
                4 => 'postalCode'
            ],
            'fields' => (object) [
                'street' => (object) [
                    'type' => 'text',
                    'maxLength' => 255,
                    'dbType' => 'varchar'
                ],
                'city' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'state' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'country' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'postalCode' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'map' => (object) [
                    'type' => 'map',
                    'notStorable' => true,
                    'readOnly' => true,
                    'layoutListDisabled' => true,
                    'provider' => 'Google',
                    'height' => 300,
                    'exportDisabled' => true,
                    'importDisabled' => true
                ]
            ],
            'notMergeable' => true,
            'notCreatable' => false,
            'filter' => true,
            'skipOrmDefs' => true,
            'personalData' => true
        ],
        'array' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'options',
                    'type' => 'array',
                    'view' => 'views/admin/field-manager/fields/options'
                ],
                2 => (object) [
                    'name' => 'translation',
                    'type' => 'varchar',
                    'hidden' => true
                ],
                3 => (object) [
                    'name' => 'noEmptyString',
                    'type' => 'bool',
                    'default' => false
                ],
                4 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                5 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'notCreatable' => false,
            'notSortable' => true,
            'fieldDefs' => (object) [
                'type' => 'jsonArray',
                'storeArrayValues' => true
            ],
            'translatedOptions' => true,
            'personalData' => true
        ],
        'arrayInt' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'options',
                    'type' => 'arrayInt'
                ],
                2 => (object) [
                    'name' => 'translation',
                    'type' => 'varchar',
                    'hidden' => true
                ],
                3 => (object) [
                    'name' => 'noEmptyString',
                    'type' => 'bool',
                    'default' => false
                ],
                4 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                5 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'notCreatable' => true,
            'fieldDefs' => (object) [
                'type' => 'jsonArray'
            ]
        ],
        'attachmentMultiple' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'sourceList',
                    'type' => 'multiEnum',
                    'view' => 'views/admin/field-manager/fields/source-list'
                ],
                2 => (object) [
                    'name' => 'maxFileSize',
                    'type' => 'float',
                    'tooltip' => true,
                    'min' => 0
                ],
                3 => (object) [
                    'name' => 'previewSize',
                    'type' => 'enum',
                    'default' => 'medium',
                    'options' => [
                        0 => '',
                        1 => 'x-small',
                        2 => 'small',
                        3 => 'medium',
                        4 => 'large'
                    ]
                ]
            ],
            'actualFields' => [
                0 => 'ids'
            ],
            'notActualFields' => [
                0 => 'names'
            ],
            'linkDefs' => (object) [
                'type' => 'hasChildren',
                'entity' => 'Attachment',
                'foreign' => 'parent',
                'layoutRelationshipsDisabled' => true,
                'relationName' => 'attachments'
            ],
            'notSortable' => true,
            'filter' => true,
            'hookClassName' => '\\Espo\\Core\\Utils\\FieldManager\\Hooks\\AttachmentMultipleType',
            'personalData' => true
        ],
        'autoincrement' => (object) [
            'params' => [
                
            ],
            'notCreatable' => false,
            'filter' => true,
            'fieldDefs' => (object) [
                'type' => 'int',
                'autoincrement' => true,
                'unique' => true
            ],
            'textFilter' => true,
            'readOnly' => true
        ],
        'base' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool'
                ]
            ],
            'filter' => false,
            'notCreatable' => true,
            'fieldDefs' => (object) [
                'notStorable' => true
            ]
        ],
        'bool' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'default',
                    'type' => 'bool'
                ],
                1 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                2 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'notNull' => true
            ]
        ],
        'colorpicker' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'colorpicker'
                ],
                2 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                3 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => false,
            'fieldDefs' => (object) [
                'type' => 'varchar',
                'maxLength' => 7
            ],
            'notCreatable' => true
        ],
        'currency' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'min',
                    'type' => 'float'
                ],
                2 => (object) [
                    'name' => 'max',
                    'type' => 'float'
                ],
                3 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                4 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'actualFields' => [
                0 => 'currency',
                1 => ''
            ],
            'fields' => (object) [
                'currency' => (object) [
                    'type' => 'varchar',
                    'disabled' => true,
                    'maxLength' => 6
                ],
                'converted' => (object) [
                    'type' => 'currencyConverted',
                    'readOnly' => true,
                    'importDisabled' => true
                ]
            ],
            'filter' => true,
            'personalData' => true
        ],
        'currencyConverted' => (object) [
            'params' => [
                
            ],
            'filter' => true,
            'notCreatable' => true,
            'skipOrmDefs' => true
        ],
        'date' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'enum',
                    'view' => 'views/admin/field-manager/fields/date/default',
                    'options' => [
                        0 => '',
                        1 => 'javascript: return this.dateTime.getToday();',
                        2 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');',
                        3 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');',
                        4 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');',
                        5 => 'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');',
                        6 => 'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');',
                        7 => 'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');',
                        8 => 'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');',
                        9 => 'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');',
                        10 => 'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');',
                        11 => 'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');',
                        12 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');',
                        13 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');',
                        14 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');',
                        15 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');',
                        16 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');',
                        17 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');',
                        18 => 'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');',
                        19 => 'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');',
                        20 => 'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');',
                        21 => 'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');',
                        22 => 'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');',
                        23 => 'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');',
                        24 => 'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');',
                        25 => 'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');',
                        26 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');'
                    ],
                    'translation' => 'FieldManager.options.dateDefault'
                ],
                2 => (object) [
                    'name' => 'after',
                    'type' => 'varchar'
                ],
                3 => (object) [
                    'name' => 'before',
                    'type' => 'varchar'
                ],
                4 => (object) [
                    'type' => 'bool',
                    'name' => 'useNumericFormat'
                ],
                5 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                6 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'notNull' => false
            ],
            'personalData' => true
        ],
        'datetime' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'enum',
                    'view' => 'views/admin/field-manager/fields/date/default',
                    'options' => [
                        0 => '',
                        1 => 'javascript: return this.dateTime.getNow(1);',
                        2 => 'javascript: return this.dateTime.getNow(5);',
                        3 => 'javascript: return this.dateTime.getNow(15);',
                        4 => 'javascript: return this.dateTime.getNow(30);',
                        5 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);',
                        6 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);',
                        7 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);',
                        8 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);',
                        9 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);',
                        10 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);',
                        11 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);',
                        12 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);',
                        13 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);',
                        14 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);',
                        15 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);',
                        16 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);',
                        17 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);',
                        18 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);',
                        19 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);',
                        20 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);',
                        21 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);',
                        22 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);',
                        23 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);'
                    ],
                    'translation' => 'FieldManager.options.dateTimeDefault'
                ],
                2 => (object) [
                    'name' => 'after',
                    'type' => 'varchar'
                ],
                3 => (object) [
                    'name' => 'before',
                    'type' => 'varchar'
                ],
                4 => (object) [
                    'type' => 'bool',
                    'name' => 'useNumericFormat'
                ],
                5 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                6 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'notNull' => false
            ],
            'personalData' => true
        ],
        'datetimeOptional' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'enum',
                    'view' => 'views/admin/field-manager/fields/date/default',
                    'options' => [
                        0 => '',
                        1 => 'javascript: return this.dateTime.getNow(1);',
                        2 => 'javascript: return this.dateTime.getNow(5);',
                        3 => 'javascript: return this.dateTime.getNow(15);',
                        4 => 'javascript: return this.dateTime.getNow(30);',
                        5 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);',
                        6 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);',
                        7 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);',
                        8 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);',
                        9 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);',
                        10 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);',
                        11 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);',
                        12 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);',
                        13 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);',
                        14 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);',
                        15 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);',
                        16 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);',
                        17 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);',
                        18 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);',
                        19 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);',
                        20 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);',
                        21 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);',
                        22 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);',
                        23 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);'
                    ],
                    'translation' => 'FieldManager.options.dateTimeDefault'
                ],
                2 => (object) [
                    'name' => 'after',
                    'type' => 'varchar'
                ],
                3 => (object) [
                    'name' => 'before',
                    'type' => 'varchar'
                ],
                4 => (object) [
                    'type' => 'bool',
                    'name' => 'useNumericFormat'
                ],
                5 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                6 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'actualFields' => [
                0 => '',
                1 => 'date'
            ],
            'fields' => (object) [
                'date' => (object) [
                    'type' => 'date',
                    'disabled' => true
                ]
            ],
            'filter' => true,
            'notCreatable' => true,
            'fieldDefs' => (object) [
                'type' => 'datetime',
                'notNull' => false
            ],
            'view' => 'views/fields/datetime-optional',
            'personalData' => true
        ],
        'duration' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'default',
                    'type' => 'int'
                ],
                1 => (object) [
                    'name' => 'options',
                    'type' => 'arrayInt'
                ]
            ],
            'notCreatable' => true,
            'fieldDefs' => (object) [
                'type' => 'int'
            ]
        ],
        'email' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ]
            ],
            'actualFields' => [
                0 => 'isOptedOut',
                1 => ''
            ],
            'notActualFields' => [
                0 => 'data'
            ],
            'fields' => (object) [
                'isOptedOut' => (object) [
                    'type' => 'bool',
                    'notStorable' => true,
                    'layoutDetailDisabled' => true,
                    'mergeDisabled' => true,
                    'customizationDefaultDisabled' => true,
                    'customizationReadOnlyDisabled' => true
                ]
            ],
            'notCreatable' => true,
            'filter' => true,
            'fieldDefs' => (object) [
                'notStorable' => true
            ],
            'textFilter' => true,
            'personalData' => true
        ],
        'enum' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'options',
                    'type' => 'array',
                    'view' => 'views/admin/field-manager/fields/options'
                ],
                2 => (object) [
                    'name' => 'default',
                    'type' => 'enum',
                    'view' => 'views/admin/field-manager/fields/options/default'
                ],
                3 => (object) [
                    'name' => 'isSorted',
                    'type' => 'bool'
                ],
                4 => (object) [
                    'name' => 'translation',
                    'type' => 'varchar',
                    'hidden' => true
                ],
                5 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                6 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'type' => 'varchar'
            ],
            'translatedOptions' => true,
            'personalData' => true
        ],
        'enumFloat' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'options',
                    'type' => 'array'
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'float'
                ],
                2 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                3 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'notCreatable' => true,
            'fieldDefs' => (object) [
                'type' => 'float'
            ]
        ],
        'enumInt' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'options',
                    'type' => 'array'
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'int'
                ],
                2 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                3 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'notCreatable' => true,
            'fieldDefs' => (object) [
                'type' => 'int'
            ]
        ],
        'file' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'sourceList',
                    'type' => 'multiEnum',
                    'view' => 'views/admin/field-manager/fields/source-list'
                ],
                2 => (object) [
                    'name' => 'maxFileSize',
                    'type' => 'float',
                    'tooltip' => true,
                    'min' => 0
                ],
                3 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ]
            ],
            'actualFields' => [
                0 => 'id'
            ],
            'notActualFields' => [
                0 => 'name'
            ],
            'filter' => true,
            'linkDefs' => (object) [
                'type' => 'belongsTo',
                'entity' => 'Attachment',
                'skipOrmDefs' => true
            ],
            'personalData' => true
        ],
        'float' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'float'
                ],
                2 => (object) [
                    'name' => 'min',
                    'type' => 'float'
                ],
                3 => (object) [
                    'name' => 'max',
                    'type' => 'float'
                ],
                4 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                5 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'notNull' => false
            ]
        ],
        'foreign' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'link',
                    'type' => 'varchar',
                    'view' => 'views/admin/field-manager/fields/foreign/link',
                    'required' => true
                ],
                1 => (object) [
                    'name' => 'field',
                    'type' => 'varchar',
                    'view' => 'views/admin/field-manager/fields/foreign/field',
                    'required' => true
                ]
            ],
            'fieldTypeList' => [
                0 => 'varchar',
                1 => 'enum',
                2 => 'enumInt',
                3 => 'enumFloat',
                4 => 'int',
                5 => 'float',
                6 => 'website',
                7 => 'date',
                8 => 'datetime',
                9 => 'text',
                10 => 'number',
                11 => 'bool'
            ],
            'filter' => true,
            'notCreatable' => false,
            'fieldDefs' => (object) [
                'readOnly' => true
            ]
        ],
        'image' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'previewSize',
                    'type' => 'enum',
                    'default' => 'small',
                    'options' => [
                        0 => 'x-small',
                        1 => 'small',
                        2 => 'medium',
                        3 => 'large'
                    ]
                ],
                2 => (object) [
                    'name' => 'maxFileSize',
                    'type' => 'float',
                    'tooltip' => true,
                    'min' => 0
                ],
                3 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ]
            ],
            'actualFields' => [
                0 => 'id'
            ],
            'notActualFields' => [
                0 => 'name'
            ],
            'filter' => true,
            'linkDefs' => (object) [
                'type' => 'belongsTo',
                'entity' => 'Attachment',
                'skipOrmDefs' => true
            ],
            'personalData' => true
        ],
        'int' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'int'
                ],
                2 => (object) [
                    'name' => 'min',
                    'type' => 'int'
                ],
                3 => (object) [
                    'name' => 'max',
                    'type' => 'int'
                ],
                4 => (object) [
                    'name' => 'disableFormatting',
                    'type' => 'bool'
                ],
                5 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                6 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'textFilter' => true,
            'personalData' => true
        ],
        'jsonArray' => (object) [
            'notCreatable' => true,
            'notMergeable' => true,
            'notSortable' => true,
            'filter' => false
        ],
        'jsonObject' => (object) [
            'notCreatable' => true,
            'notMergeable' => true,
            'filter' => false
        ],
        'link' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                2 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ],
                3 => (object) [
                    'name' => 'default',
                    'type' => 'link',
                    'view' => 'views/admin/field-manager/fields/link/default'
                ]
            ],
            'actualFields' => [
                0 => 'id'
            ],
            'notActualFields' => [
                0 => 'name'
            ],
            'filter' => true,
            'notCreatable' => true
        ],
        'linkMultiple' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'sortable',
                    'type' => 'bool',
                    'default' => false,
                    'hidden' => true
                ],
                2 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'actualFields' => [
                0 => 'ids'
            ],
            'notActualFields' => [
                0 => 'names'
            ],
            'notCreatable' => true,
            'notSortable' => true,
            'filter' => true
        ],
        'linkParent' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'entityList',
                    'type' => 'multiEnum',
                    'view' => 'Admin.FieldManager.Fields.EntityList'
                ],
                2 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                3 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'actualFields' => [
                0 => 'id',
                1 => 'type'
            ],
            'notActualFields' => [
                0 => 'name'
            ],
            'filter' => true,
            'notCreatable' => true,
            'fieldDefs' => (object) [
                'notStorable' => true
            ]
        ],
        'map' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'provider',
                    'type' => 'enum',
                    'options' => [
                        0 => 'Google'
                    ],
                    'default' => 'Google'
                ],
                1 => (object) [
                    'name' => 'height',
                    'type' => 'int',
                    'default' => 300
                ]
            ],
            'filter' => false,
            'notCreatable' => true,
            'notSortable' => true,
            'fieldDefs' => (object) [
                'notStorable' => true
            ]
        ],
        'multiEnum' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'options',
                    'type' => 'array',
                    'view' => 'views/admin/field-manager/fields/options'
                ],
                2 => (object) [
                    'name' => 'translation',
                    'type' => 'varchar',
                    'hidden' => true
                ],
                3 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                4 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'notCreatable' => false,
            'notSortable' => true,
            'fieldDefs' => (object) [
                'type' => 'jsonArray',
                'storeArrayValues' => true
            ],
            'translatedOptions' => true,
            'personalData' => true
        ],
        'number' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'prefix',
                    'type' => 'varchar',
                    'maxLength' => 16
                ],
                1 => (object) [
                    'name' => 'nextNumber',
                    'type' => 'int',
                    'min' => 0,
                    'required' => true,
                    'default' => 1
                ],
                2 => (object) [
                    'name' => 'padLength',
                    'type' => 'int',
                    'default' => 5,
                    'required' => true,
                    'min' => 1,
                    'max' => 20
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'type' => 'varchar',
                'len' => 36,
                'notNull' => false,
                'unique' => false
            ],
            'hookClassName' => '\\Espo\\Core\\Utils\\FieldManager\\Hooks\\NumberType',
            'textFilter' => true,
            'readOnly' => true
        ],
        'password' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ]
            ],
            'notSortable' => true,
            'notCreatable' => true,
            'filter' => false
        ],
        'personName' => (object) [
            'actualFields' => [
                0 => 'salutation',
                1 => 'first',
                2 => 'last'
            ],
            'notActualFields' => [
                0 => ''
            ],
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ]
            ],
            'fields' => (object) [
                'salutation' => (object) [
                    'type' => 'enum'
                ],
                'first' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ],
                'last' => (object) [
                    'type' => 'varchar',
                    'trim' => true
                ]
            ],
            'naming' => 'prefix',
            'notMergeable' => true,
            'notCreatable' => true,
            'filter' => true,
            'skipOrmDefs' => true,
            'personalData' => true,
            'textFilter' => true,
            'fullTextSearch' => true,
            'fullTextSearchColumnList' => [
                0 => 'first',
                1 => 'last'
            ]
        ],
        'phone' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'typeList',
                    'type' => 'array',
                    'default' => [
                        0 => 'Mobile',
                        1 => 'Office',
                        2 => 'Home',
                        3 => 'Fax',
                        4 => 'Other'
                    ],
                    'view' => 'views/admin/field-manager/fields/options'
                ],
                2 => (object) [
                    'name' => 'defaultType',
                    'type' => 'varchar',
                    'default' => 'Mobile'
                ]
            ],
            'notActualFields' => [
                0 => 'data'
            ],
            'notCreatable' => true,
            'filter' => true,
            'fieldDefs' => (object) [
                'notStorable' => true
            ],
            'translatedOptions' => true,
            'textFilter' => true,
            'personalData' => true
        ],
        'rangeCurrency' => (object) [
            'actualFields' => [
                0 => 'from',
                1 => 'to'
            ],
            'fields' => (object) [
                'from' => (object) [
                    'type' => 'currency'
                ],
                'to' => (object) [
                    'type' => 'currency'
                ]
            ],
            'naming' => 'prefix',
            'notMergeable' => true,
            'notCreatable' => true,
            'filter' => false,
            'skipOrmDefs' => true
        ],
        'rangeFloat' => (object) [
            'actualFields' => [
                0 => 'from',
                1 => 'to'
            ],
            'fields' => (object) [
                'from' => (object) [
                    'type' => 'float'
                ],
                'to' => (object) [
                    'type' => 'float'
                ]
            ],
            'naming' => 'prefix',
            'notMergeable' => true,
            'notCreatable' => true,
            'filter' => false,
            'skipOrmDefs' => true
        ],
        'rangeInt' => (object) [
            'actualFields' => [
                0 => 'from',
                1 => 'to'
            ],
            'fields' => (object) [
                'from' => (object) [
                    'type' => 'int'
                ],
                'to' => (object) [
                    'type' => 'int'
                ]
            ],
            'naming' => 'prefix',
            'notMergeable' => true,
            'notCreatable' => true,
            'filter' => false,
            'skipOrmDefs' => true
        ],
        'text' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'text'
                ],
                2 => (object) [
                    'name' => 'maxLength',
                    'type' => 'int'
                ],
                3 => (object) [
                    'name' => 'seeMoreDisabled',
                    'type' => 'bool',
                    'tooltip' => true
                ],
                4 => (object) [
                    'name' => 'rows',
                    'type' => 'int',
                    'default' => 30,
                    'min' => 1
                ],
                5 => (object) [
                    'name' => 'lengthOfCut',
                    'type' => 'int',
                    'default' => 400,
                    'min' => 1,
                    'tooltip' => true
                ],
                6 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'personalData' => true,
            'textFilter' => true,
            'fullTextSearch' => true
        ],
        'url' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'varchar'
                ],
                2 => (object) [
                    'name' => 'maxLength',
                    'type' => 'int'
                ],
                3 => (object) [
                    'name' => 'strip',
                    'type' => 'bool'
                ],
                4 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                5 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'type' => 'varchar'
            ],
            'personalData' => true
        ],
        'varchar' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'varchar'
                ],
                2 => (object) [
                    'name' => 'maxLength',
                    'type' => 'int'
                ],
                3 => (object) [
                    'name' => 'trim',
                    'type' => 'bool',
                    'default' => true
                ],
                4 => (object) [
                    'name' => 'audited',
                    'type' => 'bool'
                ],
                5 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'personalData' => true,
            'textFilter' => true,
            'fullTextSearch' => true
        ],
        'wysiwyg' => (object) [
            'params' => [
                0 => (object) [
                    'name' => 'required',
                    'type' => 'bool',
                    'default' => false
                ],
                1 => (object) [
                    'name' => 'default',
                    'type' => 'text'
                ],
                2 => (object) [
                    'name' => 'height',
                    'type' => 'int'
                ],
                3 => (object) [
                    'name' => 'minHeight',
                    'type' => 'int'
                ],
                4 => (object) [
                    'name' => 'readOnly',
                    'type' => 'bool'
                ],
                5 => (object) [
                    'name' => 'attachmentField',
                    'type' => 'varchar',
                    'hidden' => true
                ],
                6 => (object) [
                    'name' => 'useIframe',
                    'type' => 'bool'
                ]
            ],
            'filter' => true,
            'fieldDefs' => (object) [
                'type' => 'text'
            ],
            'personalData' => true,
            'textFilter' => true,
            'fullTextSearch' => true
        ]
    ],
    'integrations' => (object) [
        'GoogleMaps' => (object) [
            'fields' => (object) [
                'apiKey' => (object) [
                    'type' => 'varchar',
                    'maxLength' => 255,
                    'required' => true
                ]
            ],
            'allowUserAccounts' => false,
            'view' => 'views/admin/integrations/google-maps',
            'authMethod' => 'GoogleMaps'
        ]
    ],
    'scopes' => (object) [
        'ArrayValue' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Attachment' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'AuthLogRecord' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'AuthToken' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Currency' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Dashboard' => (object) [
            'entity' => false,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Email' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllAccountContactOwnNo',
            'notifications' => true,
            'object' => true,
            'customizable' => true,
            'activity' => true,
            'activityStatusList' => [
                0 => 'Draft'
            ],
            'historyStatusList' => [
                0 => 'Archived',
                1 => 'Sent'
            ]
        ],
        'EmailAccount' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false
        ],
        'EmailAccountScope' => (object) [
            'entity' => false,
            'layouts' => false,
            'tab' => false,
            'acl' => 'boolean'
        ],
        'EmailAddress' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'EmailFilter' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'notifications' => false,
            'object' => false,
            'customizable' => false
        ],
        'EmailTemplate' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => true,
            'acl' => true,
            'customizable' => false
        ],
        'EmailTemplateCategory' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => 'recordAllTeamNo',
            'customizable' => true,
            'importable' => false,
            'type' => 'CategoryTree',
            'notifications' => false
        ],
        'Extension' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'ExternalAccount' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => 'boolean',
            'aclPortal' => false,
            'customizable' => false
        ],
        'Import' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => true,
            'acl' => 'boolean',
            'customizable' => false
        ],
        'InboundEmail' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false
        ],
        'Integration' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Job' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'LastViewed' => (object) [
            'entity' => false,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'LeadCapture' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'LeadCaptureLogRecord' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Note' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Notification' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'PasswordChangeRequest' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'PhoneNumber' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Portal' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Preferences' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Role' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'ScheduledJob' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'ScheduledJobLogRecord' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'Stream' => (object) [
            'entity' => false,
            'layouts' => false,
            'tab' => true,
            'acl' => false,
            'customizable' => false
        ],
        'Team' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => true,
            'acl' => true,
            'aclActionList' => [
                0 => 'read'
            ],
            'aclLevelList' => [
                0 => 'all',
                1 => 'team',
                2 => 'no'
            ],
            'customizable' => false
        ],
        'Template' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => true,
            'acl' => 'recordAllTeamNo',
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'no'
            ],
            'customizable' => true,
            'disabled' => false
        ],
        'UniqueId' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'customizable' => false
        ],
        'User' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclActionList' => [
                0 => 'read',
                1 => 'edit'
            ],
            'aclActionLevelListMap' => (object) [
                'edit' => [
                    0 => 'own',
                    1 => 'no'
                ]
            ],
            'customizable' => true,
            'object' => true
        ],
        'Account' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllAccountNo',
            'module' => 'Crm',
            'customizable' => true,
            'stream' => true,
            'importable' => true,
            'notifications' => true,
            'object' => true,
            'hasPersonalData' => true
        ],
        'Activities' => (object) [
            'entity' => false,
            'layouts' => false,
            'tab' => false,
            'acl' => 'boolean',
            'aclPortal' => 'boolean',
            'module' => 'Crm',
            'customizable' => false
        ],
        'Calendar' => (object) [
            'entity' => false,
            'tab' => true,
            'acl' => 'boolean',
            'module' => 'Crm'
        ],
        'Call' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllAccountContactOwnNo',
            'module' => 'Crm',
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'calendar' => true,
            'activity' => true,
            'object' => true,
            'activityStatusList' => [
                0 => 'Planned'
            ],
            'historyStatusList' => [
                0 => 'Held',
                1 => 'Not Held'
            ],
            'statusField' => 'status'
        ],
        'Campaign' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'module' => 'Crm',
            'customizable' => true,
            'stream' => false,
            'importable' => false,
            'object' => true,
            'statusField' => 'status'
        ],
        'CampaignLogRecord' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'module' => 'Crm',
            'customizable' => false,
            'stream' => false,
            'importable' => false
        ],
        'CampaignTrackingUrl' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'module' => 'Crm',
            'customizable' => false,
            'stream' => false,
            'importable' => false
        ],
        'Case' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllAccountContactOwnNo',
            'module' => 'Crm',
            'customizable' => true,
            'stream' => true,
            'importable' => true,
            'notifications' => true,
            'object' => true,
            'statusField' => 'status'
        ],
        'Contact' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllAccountContactNo',
            'module' => 'Crm',
            'customizable' => true,
            'stream' => true,
            'importable' => true,
            'notifications' => true,
            'object' => true,
            'hasPersonalData' => true
        ],
        'Document' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'module' => 'Crm',
            'customizable' => true,
            'importable' => false,
            'notifications' => true,
            'object' => true
        ],
        'DocumentFolder' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => 'recordAllTeamNo',
            'aclPortal' => 'recordAllNo',
            'module' => 'Crm',
            'customizable' => true,
            'importable' => false,
            'type' => 'CategoryTree',
            'stream' => false,
            'notifications' => false
        ],
        'EmailQueueItem' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'notifications' => false,
            'object' => false,
            'customizable' => false,
            'module' => 'Crm'
        ],
        'KnowledgeBaseArticle' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => 'recordAllTeamNo',
            'aclPortal' => 'recordAllNo',
            'module' => 'Crm',
            'customizable' => true,
            'importable' => true,
            'notifications' => false,
            'object' => true
        ],
        'KnowledgeBaseCategory' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => 'recordAllTeamNo',
            'aclPortal' => 'recordAllNo',
            'module' => 'Crm',
            'customizable' => true,
            'importable' => false,
            'type' => 'CategoryTree',
            'stream' => false,
            'notifications' => false
        ],
        'Lead' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllOwnNo',
            'module' => 'Crm',
            'customizable' => true,
            'stream' => true,
            'importable' => true,
            'notifications' => true,
            'object' => true,
            'statusField' => 'status',
            'hasPersonalData' => true
        ],
        'MassEmail' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'notifications' => false,
            'object' => false,
            'customizable' => false,
            'module' => 'Crm'
        ],
        'Meeting' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllAccountContactOwnNo',
            'module' => 'Crm',
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'calendar' => true,
            'activity' => true,
            'object' => true,
            'activityStatusList' => [
                0 => 'Planned'
            ],
            'historyStatusList' => [
                0 => 'Held',
                1 => 'Not Held'
            ],
            'statusField' => 'status'
        ],
        'Opportunity' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => 'recordAllAccountContactOwnNo',
            'module' => 'Crm',
            'customizable' => true,
            'stream' => true,
            'importable' => true,
            'notifications' => true,
            'object' => true,
            'statusField' => 'stage',
            'kanbanStatusIgnoreList' => [
                0 => 'Closed Lost'
            ]
        ],
        'Reminder' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'module' => 'Crm',
            'customizable' => false,
            'importable' => false
        ],
        'Target' => (object) [
            'entity' => false,
            'layouts' => false,
            'tab' => false,
            'acl' => false,
            'module' => 'Crm',
            'customizable' => false,
            'importable' => false,
            'notifications' => false,
            'object' => true
        ],
        'TargetList' => (object) [
            'entity' => true,
            'layouts' => false,
            'tab' => true,
            'acl' => true,
            'module' => 'Crm',
            'customizable' => false,
            'stream' => false,
            'importable' => false,
            'notifications' => true,
            'object' => true
        ],
        'Task' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'activityStatusList' => [
                0 => 'Not Started',
                1 => 'Started'
            ],
            'historyStatusList' => [
                0 => 'Completed'
            ],
            'module' => 'Crm',
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'calendar' => true,
            'object' => true,
            'statusField' => 'status',
            'stream' => true,
            'kanbanStatusIgnoreList' => [
                0 => 'Canceled',
                1 => 'Deferred'
            ]
        ],
        'Beneficiario' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Beneficios' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Categoria' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Ciudad' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Comuna' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'DoctosBeneficio' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Empresa' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'Base',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true,
            'statusField' => NULL
        ],
        'EstadoReclamo' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Formularios' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'hasPersonalData' => true,
            'stream' => true,
            'disabled' => false,
            'type' => 'Person',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true,
            'statusField' => NULL
        ],
        'MotivoReclamo' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true,
            'statusField' => NULL
        ],
        'Proveedor' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'Base',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Reclamo' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Rol' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true
        ],
        'Solicitudes' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'hasPersonalData' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'Person',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true,
            'statusField' => NULL
        ],
        'Subcategoria' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'BasePlus',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true,
            'statusField' => NULL
        ],
        'Trabajador' => (object) [
            'entity' => true,
            'layouts' => true,
            'tab' => true,
            'acl' => true,
            'aclPortal' => true,
            'aclPortalLevelList' => [
                0 => 'all',
                1 => 'account',
                2 => 'contact',
                3 => 'own',
                4 => 'no'
            ],
            'customizable' => true,
            'importable' => true,
            'notifications' => true,
            'stream' => false,
            'disabled' => false,
            'type' => 'Base',
            'module' => 'Custom',
            'object' => true,
            'isCustom' => true,
            'statusField' => NULL
        ]
    ],
    'themes' => (object) [
        'Espo' => (object) [
            'stylesheet' => 'client/css/espo/espo.css',
            'stylesheetIframe' => 'client/css/espo/espo-iframe.css',
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'navbarHeight' => 43,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartSuccessColor' => '#87C956',
            'chartTickColor' => '#e8eced',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#D4729B'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#D4729B'
            ]
        ],
        'EspoRtl' => (object) [
            'stylesheet' => 'client/css/espo/espo-rtl.css',
            'stylesheetIframe' => 'client/css/espo/espo-rtl-iframe.css',
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'navbarHeight' => 43,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#87C956',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#D4729B'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#D4729B'
            ]
        ],
        'EspoVertical' => (object) [
            'stylesheet' => 'client/css/espo/espo-vertical.css',
            'stylesheetIframe' => 'client/css/espo/espo-vertical-iframe.css',
            'navbarIsVertical' => true,
            'navbarStaticItemsHeight' => 65,
            'recordTopButtonsStickTop' => 61,
            'recordTopButtonsBlockHeight' => 21,
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'logo' => 'client/img/logo-33.png',
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#87C956',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#D4729B'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#D4729B'
            ]
        ],
        'Hazyblue' => (object) [
            'stylesheet' => 'client/css/espo/hazyblue.css',
            'stylesheetIframe' => 'client/css/espo/hazyblue-iframe.css',
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'navbarHeight' => 43,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#85b75f',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#d69cc7'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#d69cc7'
            ]
        ],
        'HazyblueVertical' => (object) [
            'stylesheet' => 'client/css/espo/hazyblue-vertical.css',
            'stylesheetIframe' => 'client/css/espo/hazyblue-vertical-iframe.css',
            'navbarIsVertical' => true,
            'navbarStaticItemsHeight' => 65,
            'recordTopButtonsStickTop' => 61,
            'recordTopButtonsBlockHeight' => 21,
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'logo' => 'client/img/logo-33.png',
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#85b75f',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#d69cc7'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#d69cc7'
            ]
        ],
        'Sakura' => (object) [
            'stylesheet' => 'client/css/espo/sakura.css',
            'stylesheetIframe' => 'client/css/espo/sakura-iframe.css',
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'navbarHeight' => 43,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#83CD77',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#D4729B'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#D4729B'
            ]
        ],
        'SakuraVertical' => (object) [
            'stylesheet' => 'client/css/espo/sakura-vertical.css',
            'stylesheetIframe' => 'client/css/espo/sakura-vertical-iframe.css',
            'navbarIsVertical' => true,
            'navbarStaticItemsHeight' => 65,
            'recordTopButtonsStickTop' => 61,
            'recordTopButtonsBlockHeight' => 21,
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'logo' => 'client/img/logo-33.png',
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#83CD77',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#D4729B'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#D4729B'
            ]
        ],
        'Violet' => (object) [
            'stylesheet' => 'client/css/espo/violet.css',
            'stylesheetIframe' => 'client/css/espo/violet-iframe.css',
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'navbarHeight' => 43,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'textColor' => '#333',
            'fontSize' => 14,
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#7BC169',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#D4729B'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#D4729B'
            ]
        ],
        'VioletVertical' => (object) [
            'stylesheet' => 'client/css/espo/violet-vertical.css',
            'stylesheetIframe' => 'client/css/espo/violet-vertical-iframe.css',
            'navbarIsVertical' => true,
            'navbarStaticItemsHeight' => 65,
            'recordTopButtonsStickTop' => 61,
            'recordTopButtonsBlockHeight' => 21,
            'dashboardCellHeight' => 155,
            'dashboardCellMargin' => 19,
            'modalFooterAtTheTop' => true,
            'modalFullHeight' => true,
            'fontSize' => 14,
            'logo' => 'client/img/logo-33.png',
            'textColor' => '#333',
            'chartGridColor' => '#ddd',
            'chartTickColor' => '#e8eced',
            'chartSuccessColor' => '#7BC169',
            'chartColorList' => [
                0 => '#6FA8D6',
                1 => '#4E6CAD',
                2 => '#EDC555',
                3 => '#ED8F42',
                4 => '#DE6666',
                5 => '#7CC4A4',
                6 => '#8A7CC2',
                7 => '#D4729B'
            ],
            'chartColorAlternativeList' => [
                0 => '#6FA8D6',
                1 => '#EDC555',
                2 => '#ED8F42',
                3 => '#7CC4A4',
                4 => '#D4729B'
            ]
        ]
    ]
];
?>