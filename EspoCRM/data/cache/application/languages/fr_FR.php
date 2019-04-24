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
      'Enabled' => 'Actif',
      'Disabled' => 'Inactif',
      'System' => 'Système',
      'Users' => 'Utilisateurs',
      'Email' => 'Email',
      'Data' => 'Données',
      'Customization' => 'Personnalisation',
      'Available Fields' => 'Champs disponibles',
      'Layout' => 'Disposition',
      'Entity Manager' => 'Gestionnaire d\'entité',
      'Add Panel' => 'Ajouter un panneau',
      'Add Field' => 'Ajouter un champ',
      'Settings' => 'Paramètres',
      'Scheduled Jobs' => 'Tâches planifiées',
      'Upgrade' => 'Mettre à jour',
      'Clear Cache' => 'Vider le cache',
      'Rebuild' => 'Reconstruire',
      'Teams' => 'Équipes',
      'Roles' => 'Rôles',
      'Portal' => 'Portail',
      'Portals' => 'Portails',
      'Portal Roles' => 'Rôles Portail',
      'Portal Users' => 'Portal Users',
      'Outbound Emails' => 'Emails sortants',
      'Group Email Accounts' => 'Comptes email communs',
      'Personal Email Accounts' => 'Comptes email personnels',
      'Inbound Emails' => 'Emails entrants',
      'Email Templates' => 'Modèles d\'email',
      'Import' => 'Import',
      'Layout Manager' => 'Gestionnaire de modèles',
      'User Interface' => 'Interface utilisateur',
      'Auth Tokens' => 'Jetons d\'authentification',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Authentification',
      'Currency' => 'Devise',
      'Integrations' => 'Intégrations',
      'Extensions' => 'Extensions',
      'Upload' => 'Mettre en ligne',
      'Installing...' => 'Installation...',
      'Upgrading...' => 'Mise à jour...',
      'Upgraded successfully' => 'Mise à jour réussie',
      'Installed successfully' => 'Installé avec succès',
      'Ready for upgrade' => 'Prêt pour la mise à jour',
      'Run Upgrade' => 'Démarrer la mise à jour',
      'Install' => 'Installer',
      'Ready for installation' => 'Prêt pour l\'installation',
      'Uninstalling...' => 'Désinstallation...',
      'Uninstalled' => 'Désinstallé',
      'Create Entity' => 'Créer une entité',
      'Edit Entity' => 'Éditer une entité',
      'Create Link' => 'Créer un lien',
      'Edit Link' => 'Éditer un lien',
      'Notifications' => 'Notifications',
      'Jobs' => 'Travaux',
      'Reset to Default' => 'Valeurs par défaut',
      'Email Filters' => 'Filtres email',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Détail',
      'listSmall' => 'Liste (réduite)',
      'detailSmall' => 'Détail (réduit)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Filtres de recherche',
      'massUpdate' => 'Mise à jour groupée',
      'relationships' => 'Relationship Panels',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convertir le prospect',
      'listForAccount' => 'Liste (compte)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Tableau',
      'foreign' => 'Étranger',
      'duration' => 'Durée',
      'password' => 'Mot de passe',
      'personName' => 'Nom',
      'autoincrement' => 'Auto-incrément',
      'bool' => 'Case à cocher',
      'currency' => 'Devise',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Date',
      'datetime' => 'Date et heure',
      'datetimeOptional' => 'Date/Date et heure',
      'email' => 'Email',
      'enum' => 'Énumération',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Lien multiple',
      'linkParent' => 'Lien parent',
      'phone' => 'Téléphone',
      'text' => 'Texte',
      'url' => 'Url',
      'varchar' => 'Phrase',
      'file' => 'Fichier',
      'image' => 'Image',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Pièces jointes multiples',
      'rangeInt' => 'Plage d\'entiers',
      'rangeFloat' => 'Intervalle réel',
      'rangeCurrency' => 'Plage de devises',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Carte',
      'number' => 'Number',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'multienim' => 'Multienum',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Nom',
      'label' => 'Libellé',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Requis',
      'default' => 'Par défaut',
      'maxLength' => 'Longueur max',
      'options' => 'Options',
      'after' => 'Après (le champ)',
      'before' => 'Avant (le champ)',
      'link' => 'Lien',
      'field' => 'Champ',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Traduction',
      'previewSize' => 'Prévisualiser la taille',
      'noEmptyString' => 'Empty string value is not allowed',
      'defaultType' => 'Type par défaut',
      'seeMoreDisabled' => 'Désactiver l\'abréviation de texte',
      'entityList' => 'Liste d\'entités',
      'isSorted' => 'Trié (alphabétique)',
      'audited' => 'Audité',
      'trim' => 'Rogner',
      'height' => 'Hauteur (px)',
      'minHeight' => 'Hauteur min. (px)',
      'provider' => 'Fournisseur',
      'typeList' => 'Liste de types',
      'rows' => 'Nombre de lignes de la zone de texte',
      'lengthOfCut' => 'Longueur de coupe',
      'sourceList' => 'Liste des sources',
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
      'upgradeVersion' => 'EspoCRM will be upgraded to version <strong>{version}</strong>. Please be patient as this may take a while.',
      'upgradeDone' => 'EspoCRM has been upgraded to version <strong>{version}</strong>.',
      'upgradeBackup' => 'We recommend making a backup of your EspoCRM files and data before upgrading.',
      'thousandSeparatorEqualsDecimalMark' => 'The thousands separator character can not be the same as the decimal point character.',
      'userHasNoEmailAddress' => 'User has no email address.',
      'selectEntityType' => 'Sélectionner le type d\'entité dans le menu de gauche.',
      'selectUpgradePackage' => 'Sélectionner le pack de mise à jour',
      'downloadUpgradePackage' => 'Téléchargement nécessaire des packs de mise à jour <a href="{url}">ici</a>.',
      'selectLayout' => 'Sélectionnez le modèle dans le menu de gauche et modifiez-le.',
      'selectExtensionPackage' => 'Sélectionner un pack d\'extension',
      'extensionInstalled' => 'L\'extension {name} {version} a été installé.',
      'installExtension' => 'L\'extension {name} {version} est prête pour l\'installation.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Paramètres système de l\'application.',
      'scheduledJob' => 'Tâches qui sont exécutées par Cron.',
      'upgrade' => 'Mettre à jour le système.',
      'clearCache' => 'Vider tout le cache.',
      'rebuild' => 'Reconstruire et vider tout le cache.',
      'users' => 'Gestion des utilisateurs.',
      'teams' => 'Gestion des équipes.',
      'roles' => 'Gestion des rôles.',
      'portals' => 'Gestion des portails',
      'portalRoles' => 'Rôles du portail',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Paramètres SMTP pour les emails sortants.',
      'groupEmailAccounts' => 'Comptes email IMAP communs',
      'personalEmailAccounts' => 'Comptes email utilisateurs',
      'emailTemplates' => 'Modèles pour les emails sortants.',
      'import' => 'Importer les données d\'un fichier CSV.',
      'layoutManager' => 'Personnalisation des interfaces (listes, détails, édition, recherche, mise à jour groupée).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Configurer l\'interface utilisateur.',
      'authTokens' => 'Auth sessions actives. Adresse IP et date du dernier accès.',
      'authentication' => 'Paramètres d\'authentification.',
      'currency' => 'Réglages des devises et des taux.',
      'extensions' => 'Installer ou désinstaller des extensions.',
      'integrations' => 'Intégration avec des services tiers.',
      'notifications' => 'Paramètres des notifications emails et internes au CRM.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
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
        'x-small' => 'Très petit',
        'small' => 'Petit',
        'medium' => 'Moyen',
        'large' => 'Large',
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
      'Document' => 'Ajouter un document',
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
      'user' => 'Utilisateur',
      'ipAddress' => 'Adresse IP',
      'lastAccess' => 'Dernière date d\'accès',
      'createdAt' => 'Date de connexion',
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
      'setInactive' => 'Passer en inactif',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Titre',
      'dateFrom' => 'Début',
      'dateTo' => 'Fin',
      'autorefreshInterval' => 'Intervalle de rafraîchissement automatique',
      'displayRecords' => 'Afficher les enregistrements',
      'isDoubleHeight' => 'Hauteur 2x',
      'mode' => 'Mode',
      'enabledScopeList' => 'Afficher',
      'users' => 'Utilisateurs',
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
        'agendaWeek' => 'Semaine (agenda)',
        'basicWeek' => 'Semaine',
        'month' => 'Mois',
        'basicDay' => 'Jour',
        'agendaDay' => 'Jour (calendrier)',
        'timeline' => 'Plage de temps',
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
        'notEquals' => 'N\'est pas égale',
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
        'notContains' => 'Ne contient pas',
        'has' => 'Contains',
        'notHas' => 'Ne contient pas',
      ),
    ),
    'label' => 
    array (
      'Field' => 'Field',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Name (Subject)',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateSent' => 'Date d\'envoi',
      'from' => 'De',
      'to' => 'À',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Répondre à',
      'replyToString' => 'Répondre à (texte)',
      'isHtml' => 'Html',
      'body' => 'Corps',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Objet',
      'attachments' => 'Pièces-jointes',
      'selectTemplate' => 'Sélectionner un modèle',
      'fromEmailAddress' => 'Depuis l\'adresse',
      'toEmailAddresses' => 'À l\'adresse',
      'emailAddress' => 'Adresse email',
      'deliveryDate' => 'Date de remise',
      'account' => 'Compte',
      'users' => 'Utilisateurs',
      'replied' => 'Répondu',
      'replies' => 'Réponses',
      'isRead' => 'Lu',
      'isNotRead' => 'Non lu',
      'isImportant' => 'Important',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Utilisateurs',
      'inTrash' => 'Supprimé',
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
      'replied' => 'Répondu',
      'replies' => 'Réponses',
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
        'Draft' => 'Brouillon',
        'Sending' => 'En cours d\'envoi',
        'Sent' => 'Envoyé',
        'Archived' => 'Archivé',
        'Received' => 'Reçu',
        'Failed' => 'Echec',
      ),
    ),
    'labels' => 
    array (
      'Create Email' => 'Archiver l\'Email',
      'Archive Email' => 'Archiver l\'Email',
      'Compose' => 'Composer',
      'Reply' => 'Répondre',
      'Reply to All' => 'Répondre à tous',
      'Forward' => 'Transférer',
      'Original message' => 'Message d\'origine',
      'Forwarded message' => 'Message transféré',
      'Email Accounts' => 'Comptes emails',
      'Inbound Emails' => 'Comptes email communs',
      'Email Templates' => 'Modèles d\'email',
      'Send Test Email' => 'Envoyer un email test',
      'Send' => 'Envoyer',
      'Email Address' => 'Adresse email',
      'Mark Read' => 'Marquer comme lu',
      'Sending...' => 'Envoi en cours...',
      'Save Draft' => 'Sauvegarder le brouillon',
      'Mark all as read' => 'Marquer tout comme lu',
      'Show Plain Text' => 'Afficher texte brut',
      'Mark as Important' => 'Marquer comme important',
      'Unmark Importance' => 'Marquer comme non important',
      'Move to Trash' => 'Mettre à la corbeille',
      'Retrieve from Trash' => 'Enlever de la corbeille',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'Create Lead' => 'Créer un Prospect',
      'Create Contact' => 'Créer un Contact',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Créer une tâche',
      'Create Case' => 'Créer un Ticket',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Aucun compte SMTP n\'a été installé. {link}.',
      'testEmailSent' => 'L\'email de test a été envoyé',
      'emailSent' => 'L\'email a été envoyé',
      'savedAsDraft' => 'Sauvegardé en tant que brouillon',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Envoyé',
      'archived' => 'Archivé',
      'inbox' => 'Boite de réception',
      'drafts' => 'Brouillons',
      'trash' => 'Corbeille',
      'important' => 'Important',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Marquer commer lu',
      'markAsNotRead' => 'Marquer comme non-lu',
      'markAsImportant' => 'Marquer comme important',
      'markAsNotImportant' => 'Marquer comme non important',
      'moveToTrash' => 'Mettre à la corbeille',
      'moveToFolder' => 'Deplacer vers',
      'retrieveFromTrash' => 'Récupérer de la corbeille',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'host' => 'Hôte',
      'username' => 'Nom d\'utilisateur',
      'password' => 'Mot de passe',
      'port' => 'Port',
      'monitoredFolders' => 'Dossiers surveillés',
      'ssl' => 'SSL',
      'fetchSince' => 'Apporté depuis',
      'emailAddress' => 'Adresse email',
      'sentFolder' => 'Dossier d\'envoi',
      'storeSentEmails' => 'Conserver les emails envoyés',
      'keepFetchedEmailsUnread' => 'Conserver les emails reçu non lus',
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
      'filters' => 'Filtres',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Créer un compte email',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Tester la connexion',
      'Send Test Email' => 'Envoyer un message de test',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Impossible de se connecter au serveur IMAP',
      'connectionIsOk' => 'Connexion établie',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Multiple folders should be separated by comma.

You can add a \'Sent\' folder to sync emails sent from an external email client.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primaire',
      'Opted Out' => 'Désinscrit',
      'Invalid' => 'Invalide',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'De',
      'to' => 'A',
      'subject' => 'Objet',
      'bodyContains' => 'Corps de texte contient',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Créer un filtre email',
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
      'name' => 'Juste un nom de filtre',
      'subject' => 'Utilisez un caractère générique [ * ]:

texte* = commence par "texte"
*texte* = contient "texte"
*texte = fini par "texte"',
      'bodyContains' => 'Le corps de l\'email contient l\'un des mots ou phrases',
      'from' => 'Emails envoyés de cette adresse. Laisser vide si inutile. Vous pouvez utiliser des caractères de substitution: *',
      'to' => 'Emails envoyés de cette adresse. Laisser vide si inutile. Vous pouvez utiliser des caractères de substitution: *',
      'isGlobal' => 'Applies this filter to all emails incoming to system.',
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
      'name' => 'Nom',
      'status' => 'Statut',
      'isHtml' => 'Html',
      'body' => 'Corps',
      'subject' => 'Objet',
      'attachments' => 'Pièces-jointes',
      'insertField' => 'Ajouter un champ',
      'oneOff' => 'Une seule fois',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Créer un modèle d\'email',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' => 
    array (
      'infoText' => 'Available variables:

{optOutUrl} &#8211; URL for an unsubsbribe link;

{optOutLink} &#8211; an unsubscribe link.',
    ),
    'tooltips' => 
    array (
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Réel',
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
      'Fields' => 'Champs',
      'Relationships' => 'Relations',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Nom',
      'type' => 'Type',
      'labelSingular' => 'Libellé singulier',
      'labelPlural' => 'Libellé pluriel',
      'stream' => 'Flux',
      'label' => 'Libellé',
      'linkType' => 'Type de lien',
      'entityForeign' => 'Entité étrangère',
      'linkForeign' => 'Lien étranger',
      'link' => 'Lien',
      'labelForeign' => 'Libellé étranger',
      'sortBy' => 'Tri par défaut (champs)',
      'sortDirection' => 'Tri par défaut (sens)',
      'relationName' => 'Nom de table intermédiaire',
      'linkMultipleField' => 'Lier un champ multiple',
      'linkMultipleFieldForeign' => 'Lier un champ multiple étranger',
      'disabled' => 'Désactivé',
      'textFilterFields' => 'Champs de filtre textuel',
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
        '' => 'Aucun',
        'Base' => 'Base',
        'Person' => 'Personne',
        'CategoryTree' => 'Arborescence catégories',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Plusieurs-à-Plusieurs',
        'oneToMany' => 'Un-à-Plusieurs',
        'manyToOne' => 'Plusieurs-à-Un',
        'parentToChildren' => 'Parent-Enfant',
        'childrenToParent' => 'Enfant-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Croissant',
        'desc' => 'Décroissant',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'L\'entité a bien été créée',
      'linkAlreadyExists' => 'Conflit: lien déjà existant.',
      'linkConflict' => 'Conflit de nom : un lien ou un champ portant ce nom existe déjà. ',
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
      'exportAllFields' => 'Exporter tous les champs',
      'fieldList' => 'Choix de champs',
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
      'name' => 'Nom',
      'version' => 'Version',
      'description' => 'Description',
      'isInstalled' => 'Installé',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Désinstaller',
      'Install' => 'Installer',
    ),
    'messages' => 
    array (
      'uninstalled' => 'L\'extension {name} a bien été désinstallée',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connecter',
      'Connected' => 'Connecté',
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
      'Email' => 'Email',
      'User' => 'Utilisateur',
      'Team' => 'Équipe',
      'Role' => 'Rôle',
      'EmailTemplate' => 'Modèle d\'email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Compte Email',
      'EmailAccountScope' => 'Compte Email',
      'OutboundEmail' => 'Email Sortant',
      'ScheduledJob' => 'Tâche planifiée',
      'ExternalAccount' => 'Compte externe',
      'Extension' => 'Extension',
      'Dashboard' => 'Tableau de bord',
      'InboundEmail' => 'Email entrant',
      'Stream' => 'Flux',
      'Import' => 'Import',
      'Template' => 'Modèle',
      'Job' => 'Tâche',
      'EmailFilter' => 'Filtre email',
      'Portal' => 'Portail',
      'PortalRole' => 'Rôle Portail',
      'Attachment' => 'Pièce jointe',
      'EmailFolder' => 'Email Folder',
      'PortalUser' => 'Portal User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Dernier enregistrement',
      'Settings' => 'Paramètres',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integration',
      'LayoutManager' => 'Layout Manager',
      'EntityManager' => 'Entity Manager',
      'Export' => 'Exporter',
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
      'Account' => 'Compte',
      'Contact' => 'Contact',
      'Lead' => 'Prospect',
      'Target' => 'Cible',
      'Opportunity' => 'Opportunité',
      'Meeting' => 'Rendez-vous',
      'Calendar' => 'Calendrier',
      'Call' => 'Appel',
      'Task' => 'Tâche',
      'Case' => 'Ticket',
      'Document' => 'Document',
      'DocumentFolder' => 'Dossier',
      'Campaign' => 'Campagne',
      'TargetList' => 'Liste de cibles',
      'MassEmail' => 'Emails groupé',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activités',
      'KnowledgeBaseArticle' => 'Article de la base de connaissance',
      'KnowledgeBaseCategory' => 'Catégorie de la base de connaissance',
      'CampaignLogRecord' => 'Campaign Log Record',
      'Formularios' => 'Formulario',
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Emails',
      'User' => 'Utilisateurs',
      'Team' => 'Équipes',
      'Role' => 'Rôles',
      'EmailTemplate' => 'Modèles d\'email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Comptes Email',
      'EmailAccountScope' => 'Comptes Email',
      'OutboundEmail' => 'Emails sortants',
      'ScheduledJob' => 'Tâches planifiées',
      'ExternalAccount' => 'Comptes externes',
      'Extension' => 'Extensions',
      'Dashboard' => 'Tableau de bord',
      'InboundEmail' => 'Emails entrants',
      'Stream' => 'Flux',
      'Import' => 'Importer les résultats',
      'Template' => 'Modèles',
      'Job' => 'Tâches',
      'EmailFilter' => 'Filtres Email',
      'Portal' => 'Portails',
      'PortalRole' => 'Roles Portail',
      'Attachment' => 'Pièces jointes',
      'EmailFolder' => 'Email Folders',
      'PortalUser' => 'Portal Users',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Dernières vues',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Comptes',
      'Contact' => 'Contacts',
      'Lead' => 'Prospects',
      'Target' => 'Cibles',
      'Opportunity' => 'Opportunités',
      'Meeting' => 'Rendez-vous',
      'Calendar' => 'Calendrier',
      'Call' => 'Appels',
      'Task' => 'Tâches',
      'Case' => 'Tickets',
      'Document' => 'Documents',
      'DocumentFolder' => 'Dossiers',
      'Campaign' => 'Campagnes',
      'TargetList' => 'Listes de cibles',
      'MassEmail' => 'Emails groupés',
      'EmailQueueItem' => 'File d\'attente',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activités',
      'KnowledgeBaseArticle' => 'Base de connaissance',
      'KnowledgeBaseCategory' => 'Catégories de la base de connaissance',
      'CampaignLogRecord' => 'Logs',
      'Formularios' => 'Formularios',
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' => 
    array (
      'Misc' => 'Divers',
      'Merge' => 'Fusionner',
      'None' => 'Aucun',
      'Home' => 'Accueil',
      'by' => 'par',
      'Saved' => 'Sauvegardé',
      'Error' => 'Erreur',
      'Select' => 'Sélectionner',
      'Not valid' => 'Invalide',
      'Please wait...' => 'Veuillez patienter...',
      'Please wait' => 'Veuillez patienter',
      'Loading...' => 'Chargement...',
      'Uploading...' => 'Mise en ligne...',
      'Sending...' => 'Envoi...',
      'Merging...' => 'Fusion...',
      'Merged' => 'Fusionné',
      'Removed' => 'Supprimé',
      'Posted' => 'Posté',
      'Linked' => 'Lié',
      'Unlinked' => 'Délié',
      'Done' => 'Effectué ',
      'Access denied' => 'Accès refusé',
      'Not found' => 'Pas de résultat',
      'Access' => 'Accès',
      'Are you sure?' => 'Êtes-vous sûr?',
      'Record has been removed' => 'La donnée a été supprimée',
      'Wrong username/password' => 'Mauvaise combinaison nom d\'utilisateur/mot de passe',
      'Post cannot be empty' => 'La note ne peut pas être laissée vide',
      'Removing...' => 'Suppression...',
      'Unlinking...' => 'Suppression du lien...',
      'Posting...' => 'Mise en ligne...',
      'Username can not be empty!' => 'Le nom d\'utilisateur ne peut pas être laissé vide!',
      'Cache is not enabled' => 'Le cache est désactivé',
      'Cache has been cleared' => 'Le cache a été vidé',
      'Rebuild has been done' => 'La reconstruction a été faite',
      'Return to Application' => 'Retour à l\'application',
      'Saving...' => 'Sauvegarde...',
      'Modified' => 'Modifié',
      'Created' => 'Créé',
      'Create' => 'Créer',
      'create' => 'Créer',
      'Overview' => 'Vue d\'ensemble',
      'Details' => 'Détails',
      'Add Field' => 'Ajouter un filtre',
      'Add Dashlet' => 'Ajouter un widget',
      'Filter' => 'Filtre',
      'Edit Dashboard' => 'Éditer le tableau de bord',
      'Add' => 'Ajouter',
      'Add Item' => 'Ajouter un élément',
      'Reset' => 'Réinitialiser',
      'Menu' => 'Menu',
      'More' => 'Plus',
      'Search' => 'Recherche',
      'Only My' => 'Perso',
      'Open' => 'Ouvrir',
      'Admin' => 'Admin',
      'About' => 'A propos',
      'Refresh' => 'Rafraîchir',
      'Remove' => 'Supprimer',
      'Options' => 'Options',
      'Username' => 'Nom d\'utilisateur',
      'Password' => 'Mot de passe',
      'Login' => 'Connexion',
      'Log Out' => 'Se déconnecter',
      'Preferences' => 'Préférences',
      'State' => 'Région',
      'Street' => 'Rue',
      'Country' => 'Pays',
      'City' => 'Ville',
      'PostalCode' => 'Code postal',
      'Followed' => 'Suivi',
      'Follow' => 'Suivre',
      'Followers' => 'Suiveurs',
      'Clear Local Cache' => 'Vider le cache local',
      'Actions' => 'Actions',
      'Delete' => 'Supprimer',
      'Update' => 'Mettre à jour',
      'Save' => 'Sauvegarder',
      'Edit' => 'Éditer',
      'View' => 'Voir',
      'Cancel' => 'Annuler',
      'Apply' => 'Appliquer',
      'Unlink' => 'Délier',
      'Mass Update' => 'Mise à jour groupée',
      'Export' => 'Exporter',
      'No Data' => 'Aucune donnée',
      'No Access' => 'Aucun accès',
      'All' => 'Tous',
      'Active' => 'Actif',
      'Inactive' => 'Inactif',
      'Write your comment here' => 'Écrivez votre commentaire ici',
      'Post' => 'Poster',
      'Stream' => 'Flux',
      'Show more' => 'Voir davantage',
      'Dashlet Options' => 'Options du widget',
      'Full Form' => 'Formulaire complet',
      'Insert' => 'Insérer',
      'Person' => 'Personne',
      'First Name' => 'Prénom',
      'Last Name' => 'Nom',
      'Original' => 'Original',
      'You' => 'Vous',
      'you' => 'vous',
      'change' => 'changer',
      'Change' => 'Changer',
      'Primary' => 'Primaire',
      'Save Filter' => 'Sauvegarder le filtre',
      'Administration' => 'Administration',
      'Run Import' => 'Démarrer l\'import',
      'Duplicate' => 'Dupliquer',
      'Notifications' => 'Notifications',
      'Mark all read' => 'Marquer tout comme lu',
      'See more' => 'Voir davantage',
      'Today' => 'Aujourd\'hui',
      'Tomorrow' => 'Demain',
      'Yesterday' => 'Hier',
      'Submit' => 'Envoyer',
      'Close' => 'Fermer',
      'Yes' => 'Oui',
      'No' => 'Non',
      'Select All Results' => 'Select All Results',
      'Value' => 'Valeur',
      'Current version' => 'Version actuelle',
      'List View' => 'Vue en liste',
      'Tree View' => 'Vue en arborescence',
      'Unlink All' => 'Tout déconnecter',
      'Total' => 'Total',
      'Print to PDF' => 'Enregistrer en PDF',
      'Default' => 'Par défaut',
      'Number' => 'Nombre',
      'From' => 'De',
      'To' => 'A',
      'Create Post' => 'Créer une publication',
      'Previous Entry' => 'Précédent',
      'Next Entry' => 'Suivant',
      'View List' => 'Vue en liste',
      'Attach File' => 'Attacher un fichier',
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
      'Create InboundEmail' => 'Créer un email entrant',
      'Activities' => 'Activités',
      'History' => 'Historique',
      'Attendees' => 'Participants',
      'Schedule Meeting' => 'Planifier un rendez-vous',
      'Schedule Call' => 'Programmer un appel',
      'Compose Email' => 'Composer un Email',
      'Log Meeting' => 'Rapporter un rendez-vous',
      'Log Call' => 'Rapporter un appel',
      'Archive Email' => 'Archiver l\'Email',
      'Create Task' => 'Créer une tâche',
      'Tasks' => 'Tâches',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Veuillez patienter...',
      'posting' => 'Publication...',
      'loading' => 'Chargement...',
      'saving' => 'Sauvegarde...',
      'confirmLeaveOutMessage' => 'Êtes-vous sûr de vouloir quitter le formulaire?',
      'notModified' => 'Vous n\'avez pas modifié l\'enregistrement',
      'duplicate' => 'The record you are creating might already exist',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} est requis',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field} doit être après {otherField}',
      'fieldShouldBefore' => '{field} doit être avant {otherField}',
      'fieldShouldBeBetween' => '{field} doit être compris entre {min} et {max}',
      'fieldShouldBeLess' => '{field} doit être moins élevé que {value}',
      'fieldShouldBeGreater' => '{field} doit être plus grand que {value}',
      'fieldBadPasswordConfirm' => '{field} n\'a pas été confirmé correctement',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Vos préférences ont été réinitialisées.',
      'confirmation' => 'Êtes-vous sûr?',
      'unlinkAllConfirmation' => 'Êtes-vous certain de vouloir déconnecter tous les enregistrements liés ?',
      'resetPreferencesConfirmation' => 'Êtes-vous sûr de vouloir réinitialiser vos préférences?',
      'removeRecordConfirmation' => 'Êtes-vous sûr de vouloir supprimer cet enregistrement?',
      'unlinkRecordConfirmation' => 'Êtes-vous sûr de vouloir casser cette relation?',
      'removeSelectedRecordsConfirmation' => 'Êtes-vous sûr de vouloir supprimer les enregistrements sélectionnés?',
      'massUpdateResult' => '{count} enregistrements ont été mis à jour',
      'massUpdateResultSingle' => '{count} enregistrement a été mis à jour',
      'noRecordsUpdated' => 'Aucun enregistrement n\'a été trouvé',
      'massRemoveResult' => '{count} enregistrements ont été supprimés',
      'massRemoveResultSingle' => '{count} enregistrement a été supprimé',
      'noRecordsRemoved' => 'Aucun enregistrement n\'a été trouvé',
      'clickToRefresh' => 'Cliquer pour rafraîchir',
      'streamPostInfo' => 'Type <strong>@username</strong> to mention users in the post.

Available markdown syntax:
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
[link text](url)',
      'writeYourCommentHere' => 'Écrivez votre commentaire ici',
      'writeMessageToUser' => 'Écrire un message à {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Écrivez puis appuyez sur la touche Entrée',
      'checkForNewNotifications' => 'Vérifier les nouvelles notifications',
      'checkForNewNotes' => 'Check for stream updates',
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
      'onlyMy' => 'Perso',
      'followed' => 'Suivi',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Suivi',
      'all' => 'Tous',
    ),
    'massActions' => 
    array (
      'remove' => 'Supprimer',
      'merge' => 'Fusionner',
      'massUpdate' => 'Mise à jour groupée',
      'export' => 'Exporter',
      'follow' => 'Suivre',
      'unfollow' => 'Ne plus suivre',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Nom',
      'firstName' => 'Prénom',
      'lastName' => 'Nom de famille',
      'salutationName' => 'Salutation',
      'assignedUser' => 'Utilisateur assigné',
      'assignedUsers' => 'Utilisateurs assignés',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Nom de l\'utilisateur assigné',
      'teams' => 'Équipes',
      'createdAt' => 'Date de création',
      'modifiedAt' => 'Modifié à',
      'createdBy' => 'Créé par',
      'modifiedBy' => 'Modifié par',
      'description' => 'Description',
      'address' => 'Adresse',
      'phoneNumber' => 'Téléphone',
      'phoneNumberMobile' => 'Téléphone (Mobile)',
      'phoneNumberHome' => 'Téléphone (Maison)',
      'phoneNumberFax' => 'Fax',
      'phoneNumberOffice' => 'Téléphone (Bureau)',
      'phoneNumberOther' => 'Téléphone (Autre)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Tri',
      'parent' => 'Parent',
      'children' => 'Enfants',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Ville',
      'billingAddressCountry' => 'Pays',
      'billingAddressPostalCode' => 'Code postal',
      'billingAddressState' => 'Régions',
      'billingAddressStreet' => 'Rue',
      'billingAddressMap' => 'Carte',
      'addressCity' => 'Ville',
      'addressStreet' => 'Rue',
      'addressCountry' => 'Pays',
      'addressState' => 'Régions',
      'addressPostalCode' => 'Code postal',
      'addressMap' => 'Carte',
      'shippingAddressCity' => 'Ville (livraison)',
      'shippingAddressStreet' => 'Rue (livraison)',
      'shippingAddressCountry' => 'Pays (livraison)',
      'shippingAddressState' => 'Région (livraison)',
      'shippingAddressPostalCode' => 'Code Postal (livraison)',
      'shippingAddressMap' => 'Carte (Transport)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Utilisateur assigné',
      'createdBy' => 'Créé par',
      'modifiedBy' => 'Modifié par',
      'team' => 'Équipe',
      'roles' => 'Rôles',
      'teams' => 'Équipes',
      'users' => 'Utilisateurs',
      'parent' => 'Parent',
      'children' => 'Enfants',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunités',
      'leads' => 'Prospects',
      'meetings' => 'Rendez-vous',
      'calls' => 'Appels',
      'tasks' => 'Tâches',
      'emails' => 'Emails',
      'accounts' => 'Comptes',
      'cases' => 'Tickets',
      'documents' => 'Documents',
      'account' => 'Compte',
      'opportunity' => 'Opportunité',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Flux',
      'Emails' => 'Ma boite de réception',
      'Records' => 'Record List',
      'Leads' => 'Mes prospects',
      'Opportunities' => 'Mes opportunités',
      'Tasks' => 'Mes tâches',
      'Cases' => 'Mes tickets',
      'Calendar' => 'Calendrier',
      'Calls' => 'Mes appels',
      'Meetings' => 'Mes rendez-vous',
      'OpportunitiesByStage' => 'Opportunités par étape',
      'OpportunitiesByLeadSource' => 'Opportunités par source de prospects',
      'SalesByMonth' => 'Ventes par mois',
      'SalesPipeline' => 'Canaux de vente',
      'Activities' => 'Mes activités',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} vous a été assigné',
      'emailReceived' => 'Email reçu de la part de {from}',
      'entityRemoved' => '{user} a supprimé {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} a posté sur {entityType} {entity}',
      'attach' => '{user} a joint un fichier à {entityType} {entity}',
      'status' => '{user} a mis à jour le {field} pour {entityType} {entity}',
      'update' => '{user} a mis à jour {entityType} {entity}',
      'postTargetTeam' => '{user} a publié pour l’équipe {target}',
      'postTargetTeams' => '{user} a publié pour les équipes {target}',
      'postTargetPortal' => '{user} a publié sur le portail {target}',
      'postTargetPortals' => '{user} a publié sur les portails {target}',
      'postTarget' => '{user} a publié pour {target}',
      'postTargetYou' => '{user} a publié pour vous',
      'postTargetYouAndOthers' => '{user} a publié pour {target} et vous',
      'postTargetAll' => '{user} a publié pour tous',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} a mentionné {mentioned} dans {entityType} {entity}',
      'mentionYouInPost' => '{user} vous a mentionné dans {entityType} {entity}',
      'mentionInPostTarget' => '{user} a mentionné {mentionned} dans une publication',
      'mentionYouInPostTarget' => '{user} vous a mentionné dans une publication pour {target}',
      'mentionYouInPostTargetAll' => '{user} vous a mentionné dans une publication pour tous',
      'mentionYouInPostTargetNoTarget' => '{user} vous a mentionné dans une publication',
      'create' => '{user} a créé {entityType} {entity}',
      'createThis' => '{user} a créé {entityType}',
      'createAssignedThis' => '{user} a créé {entityType} assignée à {assignee}',
      'createAssigned' => '{user} a créé {entityType} {entity} et l\'a assigné à {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} a assigné {entityType} {entity} à {assignee}',
      'assignThis' => '{user} a assigné {entityType} à {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} a posté',
      'attachThis' => '{user} a joint un fichier',
      'statusThis' => '{user} a mis à jour {field}',
      'updateThis' => '{user} a mis à jour {entityType}',
      'createRelatedThis' => '{user} a créé {relatedEntityType} {relatedEntity} reliée à {entityType}',
      'createRelated' => '{user} a créé {relatedEntityType} {relatedEntity} relié au {entityType} {entity}',
      'relate' => '{user} a relié {relatedEntityType} {relatedEntity} avec {entityType} {entity}',
      'relateThis' => '{user} a relié {relatedEntityType} {relatedEntity} avec {entityType}',
      'emailReceivedFromThis' => 'Email reçu de la part de {from}',
      'emailReceivedInitialFromThis' => 'Email reçu de la part de {from}, {entityType} créé',
      'emailReceivedThis' => 'Email reçu',
      'emailReceivedInitialThis' => 'Email reçu, {entityType} créé',
      'emailReceivedFrom' => 'Email reçu de la part de  {from}, relié à {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email reçu de la part de {from}, {entityType} {entity} créé',
      'emailReceived' => 'Email reçu relié à {entityType} {entity}',
      'emailReceivedInitial' => 'Email reçu: {entityType} {entity} créé',
      'emailReceivedInitialFrom' => 'Email reçu de la part de {from}, {entityType} {entity} créé',
      'emailSent' => '{by} a envoyé un email lié à {entityType} {entity}',
      'emailSentThis' => '{by} a envoyé un email',
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
        0 => 'Janvier',
        1 => 'Février',
        2 => 'Mars',
        3 => 'Avril',
        4 => 'Mai',
        5 => 'Juin',
        6 => 'Juillet',
        7 => 'Août',
        8 => 'Septembre',
        9 => 'Octobre',
        10 => 'Novembre',
        11 => 'Décembre',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Fév',
        2 => 'Mar',
        3 => 'Avr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aoû',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Déc',
      ),
      'dayNames' => 
      array (
        0 => 'Dimanche',
        1 => 'Lundi',
        2 => 'Mardi',
        3 => 'Mercredi',
        4 => 'Jeudi',
        5 => 'Vendredi',
        6 => 'Samedi',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dim',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mer',
        4 => 'Jeu',
        5 => 'Ven',
        6 => 'Sam',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Di',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Me',
        4 => 'Je',
        5 => 'Ve',
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
        'Mr.' => 'M.',
        'Mrs.' => 'Mme.',
        'Ms.' => 'Mlle.',
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
        'on' => 'Actif',
        'notOn' => 'Inactif',
        'after' => 'Après',
        'before' => 'Avant',
        'between' => 'Entre',
        'today' => 'Aujourd\'ui',
        'past' => 'Passé',
        'future' => 'Futur',
        'currentMonth' => 'Mois en cours',
        'lastMonth' => 'Dernier mois',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Quinzaine en cours',
        'lastQuarter' => 'Dernière quinzaine',
        'currentYear' => 'Année en cours',
        'lastYear' => 'Dernière année',
        'lastSevenDays' => '7 derniers jours',
        'lastXDays' => 'Derniers X jours',
        'nextXDays' => 'Prochains X jours',
        'ever' => 'Toujours',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
      ),
      'searchRanges' => 
      array (
        'is' => 'Est',
        'isEmpty' => 'Est vide',
        'isNotEmpty' => 'Non vide',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Provient de l’équipe',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Égale',
        'like' => 'Correspond à (%)',
        'notLike' => 'N\'est pas (%)',
        'startsWith' => 'Commence par',
        'endsWith' => 'Fini par',
        'contains' => 'Contient',
        'notContains' => 'Ne contient pas',
        'isEmpty' => 'Est vide',
        'isNotEmpty' => 'Non vide',
        'notEquals' => 'N\'est pas égale',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Egale',
        'notEquals' => 'N\'est pas égale',
        'greaterThan' => 'Plus grand que',
        'lessThan' => 'Moins grand que',
        'greaterThanOrEquals' => 'Plus grand que ou égale',
        'lessThanOrEquals' => 'Moins grand que ou égale',
        'between' => 'Entre',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Aucun',
        '0.5' => '30 secondes',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Bureau',
        'Fax' => 'Fax',
        'Home' => 'Maison',
        'Other' => 'Autre',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Vous pouvez trouver des traductions ici: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Gras',
          'italic' => 'Italique',
          'underline' => 'Soulignement',
          'strike' => 'Texte barré',
          'clear' => 'Supprimer le style d\'écriture',
          'height' => 'Hauteur de ligne',
          'name' => 'Police de caractère',
          'size' => 'Taille de police',
        ),
        'image' => 
        array (
          'image' => 'Image',
          'insert' => 'Insérer une Image',
          'resizeFull' => 'Redimensionner 100%',
          'resizeHalf' => 'Redimensionner de moitié',
          'resizeQuarter' => 'Redimensionner de quart',
          'floatLeft' => 'Marge à gauche',
          'floatRight' => 'Marge à droite',
          'floatNone' => 'Pas de marge',
          'dragImageHere' => 'Glissez une image ici',
          'selectFromFiles' => 'Sélectionner depuis les fichiers',
          'url' => 'URL de l\'image',
          'remove' => 'Supprimer l\'Image',
        ),
        'link' => 
        array (
          'link' => 'Lien',
          'insert' => 'Insérer un Lien',
          'unlink' => 'Supprimer le lien',
          'edit' => 'Éditer',
          'textToDisplay' => 'Texte à afficher',
          'url' => 'Vers quelle URL le lien doit-il pointer?',
          'openInNewWindow' => 'Ouvrir dans une nouvelle fenêtre',
        ),
        'video' => 
        array (
          'video' => 'Vidéo',
          'videoLink' => 'Lien vidéo',
          'insert' => 'Insérer une Vidéo',
          'url' => 'URL de la vidéo ?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, ou DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tableau',
        ),
        'hr' => 
        array (
          'insert' => 'Insérer une règle horizontale',
        ),
        'style' => 
        array (
          'style' => 'Style',
          'normal' => 'Normal',
          'blockquote' => 'Citation',
          'pre' => 'Code',
          'h1' => 'Titre 1',
          'h2' => 'Titre 2',
          'h3' => 'Titre 3',
          'h4' => 'Titre 4',
          'h5' => 'Titre 5',
          'h6' => 'Titre 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Liste non ordonnée',
          'ordered' => 'Liste ordonnée',
        ),
        'options' => 
        array (
          'help' => 'Aide',
          'fullscreen' => 'Plein écran',
          'codeview' => 'Voir le code',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraphe',
          'outdent' => 'Diminuer le retrait',
          'indent' => 'Accentuer le retrait',
          'left' => 'Aligner à gauche',
          'center' => 'Aligner au centre',
          'right' => 'Aligner à droite',
          'justify' => 'Justifier',
        ),
        'color' => 
        array (
          'recent' => 'Couleur récente',
          'more' => 'Plus de couleurs',
          'background' => 'Couleur de fond',
          'foreground' => 'Couleur de la police',
          'transparent' => 'Transparent',
          'setTransparent' => 'Rendre transparent',
          'reset' => 'Réinitialiser',
          'resetToDefault' => 'Remettre à zéro',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Raccourcis clavier',
          'close' => 'Fermer',
          'textFormatting' => 'Formattage du texte',
          'action' => 'Action',
          'paragraphFormatting' => 'Formattage du paragraphe',
          'documentStyle' => 'Style du document',
        ),
        'history' => 
        array (
          'undo' => 'Aller en arrière',
          'redo' => 'Aller en avant',
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
      'EspoVertical' => 'Espo w/ sidebar',
      'SakuraVertical' => 'Sakura w/ sidebar',
      'Violet' => 'Violet',
      'VioletVertical' => 'Violet w/ sidebar',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue w/ sidebar',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Annuler l\'import',
      'Return to Import' => 'Retourner à l\'import',
      'Run Import' => 'Démarrer l\'import',
      'Back' => 'Retour',
      'Field Mapping' => 'Correspondance des champs',
      'Default Values' => 'Valeurs par défaut',
      'Add Field' => 'Ajouter un champ',
      'Created' => 'Créé',
      'Updated' => 'Mis à jour',
      'Result' => 'Résultat',
      'Show records' => 'Montrer les enregistrements',
      'Remove Duplicates' => 'Supprimer les doublons',
      'importedCount' => 'Importés (compte)',
      'duplicateCount' => 'Doublons (compte)',
      'updatedCount' => 'Mis à jour (compte)',
      'Create Only' => 'Créer uniquement',
      'Create and Update' => 'Créer et modifier',
      'Update Only' => 'Modifier uniquement',
      'Update by' => 'Modifié par',
      'Set as Not Duplicate' => 'Marquer comme distincts',
      'File (CSV)' => 'Fichier (CSV)',
      'First Row Value' => 'Valeur de la première ligne',
      'Skip' => 'Ignorer',
      'Header Row Value' => 'Valeur de la ligne d\'entête',
      'Field' => 'Champs',
      'What to Import?' => 'Importer quoi ?',
      'Entity Type' => 'Type d’entité',
      'What to do?' => 'Faire quoi ?',
      'Properties' => 'Propriétés',
      'Header Row' => 'Ligne d’entête ',
      'Person Name Format' => 'Format du nom des personnes',
      'John Smith' => 'Jean Dupont',
      'Smith John' => 'Dupont Jean',
      'Smith, John' => 'Dupont, Jean',
      'Field Delimiter' => 'Délimiteur de champs',
      'Date Format' => 'Format des dates',
      'Decimal Mark' => 'Séparateur de décimales',
      'Text Qualifier' => 'Marqueurs de texte',
      'Time Format' => 'Format de l\'heure',
      'Currency' => 'Devise',
      'Preview' => 'Prévisualiser',
      'Next' => 'Suivant',
      'Step 1' => 'Étape 1',
      'Step 2' => 'Étape 2',
      'Double Quote' => 'Guillemet',
      'Single Quote' => 'Apostrophe',
      'Imported' => 'Importé',
      'Duplicates' => 'Doublons',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' => 
    array (
      'utf8' => 'Devrait être en UTF-8',
      'duplicatesRemoved' => 'Doublons supprimés',
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
      'file' => 'Fichier',
      'entityType' => 'Type d\'entité',
      'imported' => 'Enregistrements importés',
      'duplicates' => 'Enregistrements doublons',
      'updated' => 'Enregistrements mis à jour',
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
      'name' => 'Nom',
      'emailAddress' => 'Adresse email',
      'team' => 'Target Team',
      'status' => 'Statut',
      'assignToUser' => 'Assigner à l\'utilisateur',
      'host' => 'Hôte',
      'username' => 'Nom d\'utilisateur',
      'password' => 'Mot de passe',
      'port' => 'Port',
      'monitoredFolders' => 'Dossiers surveillés',
      'trashFolder' => 'Dossier Corbeille',
      'ssl' => 'SSL',
      'createCase' => 'Créer un ticket',
      'reply' => 'Réponse automatique',
      'caseDistribution' => 'Distribution des tickets',
      'replyEmailTemplate' => 'Modèle de réponse email',
      'replyFromAddress' => 'Adresse de réponse',
      'replyToAddress' => 'Adresse de  destination',
      'replyFromName' => 'Nom pour répondre',
      'targetUserPosition' => 'Target User Position',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'Pour tous les membres de l\'équipe',
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
      'reply' => 'Notify email senders that their emails has been received.

 Only one email will be sent to a particular recipient during some period of time to prevent looping.',
      'createCase' => 'Création automatique de tickets à partir des emails entrant',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User cases will be assigned to.',
      'team' => 'Team cases will be assigned to.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filtre',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
      ),
      'caseDistribution' => 
      array (
        '' => 'Aucun',
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Ajouter un compte email',
      'IMAP' => 'IMAP',
      'Actions' => 'Actions',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Impossible de se connecter au serveur IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Activé',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Sélectionnez une intégration à partir du menu.',
      'noIntegrations' => 'Aucune intégration n\'est disponible.',
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
      'status' => 'Statut',
      'executeTime' => 'Exécuté à',
      'attempts' => 'Tentatives restantes',
      'failedAttempts' => 'Tentatives échouées',
      'serviceName' => 'Service',
      'method' => 'Méthode',
      'methodName' => 'Method',
      'scheduledJob' => 'Tâche planifiée',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Données',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'En attente',
        'Success' => 'Succès',
        'Running' => 'En cours',
        'Failed' => 'Échec',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Largeur (%)',
      'link' => 'Lien',
      'notSortable' => 'Not Sortable',
      'align' => 'Align',
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
        'left' => 'Gauche',
        'right' => 'Droite',
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
      'post' => 'Poster',
      'attachments' => 'Pièces-jointes',
      'targetType' => 'Cible',
      'teams' => 'Équipes',
      'users' => 'Utilisateurs',
      'portals' => 'Portails',
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
      'all' => 'Tous',
      'posts' => 'Publications',
      'updates' => 'Mises à jour',
    ),
    'options' => 
    array (
      'targetType' => 
      array (
        'self' => 'to myself',
        'users' => 'to particular user(s)',
        'teams' => 'to particular team(s)',
        'all' => 'to all internal users',
        'portals' => 'to portal users',
      ),
      'type' => 
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' => 
    array (
      'writeMessage' => 'Écrivez votre message ici',
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
      'name' => 'Nom',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Rôles',
      'isActive' => 'Actif',
      'isDefault' => 'Par défaut',
      'tabList' => 'Liste des onglets',
      'quickCreateList' => 'Liste de création rapide',
      'companyLogo' => 'Logo',
      'theme' => 'Thème',
      'language' => 'Langue',
      'dashboardLayout' => 'Organisation Dashboard',
      'dateFormat' => 'Format date',
      'timeFormat' => 'Format heure',
      'timeZone' => 'Fuseau',
      'weekStart' => 'Premier jour de la semaine',
      'defaultCurrency' => 'Devise par défaut',
      'customUrl' => 'Lien personnalisé',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'Utilisateurs',
      'portalRoles' => 'Rôles',
      'notes' => 'Notes',
      'articles' => 'Articles de la base de connaissance',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Créer un Portail',
      'User Interface' => 'Interface utilisateur',
      'General' => 'Général',
      'Settings' => 'Paramètres',
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
      'users' => 'Utilisateurs',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Accès',
      'Create PortalRole' => 'Créer un rôle Portail',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
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
      'dateFormat' => 'Format de la date',
      'timeFormat' => 'Format de l\'heure',
      'timeZone' => 'Fuseau horaire',
      'weekStart' => 'Premier jour de la semaine',
      'thousandSeparator' => 'Séparateur de milliers',
      'decimalMark' => 'Symbole décimal',
      'defaultCurrency' => 'Devise par défaut',
      'currencyList' => 'Liste des devises',
      'language' => 'Langage',
      'smtpServer' => 'Serveur',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sécurité',
      'smtpUsername' => 'Nom d\'utilisateur',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mot de passe',
      'smtpEmailAddress' => 'Adresse email',
      'exportDelimiter' => 'Délimitant pour l\'export',
      'receiveAssignmentEmailNotifications' => 'Email notifications upon assignment',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Global Auto-Follow',
      'signature' => 'Signature email',
      'dashboardTabList' => 'Liste des onglets',
      'defaultReminders' => 'Notifications par défaut',
      'theme' => 'Thème',
      'useCustomTabList' => 'Liste d\'onglets personnalisé',
      'tabList' => 'Liste des onglets',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
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
        0 => 'Dimanche',
        1 => 'Lundi',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notifications',
      'User Interface' => 'Interface utilisateurs',
      'SMTP' => 'SMTP',
      'Misc' => 'Divers',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Automatically follow ALL new records (created by any user) of the selected entity types. To be able to see information in the stream and receive notifications about all records in the system.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'roles' => 'Rôles',
      'assignmentPermission' => 'Assignation de permissions',
      'userPermission' => 'Permission utilisateur',
      'portalPermission' => 'Permission portail',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Utilisateurs',
      'teams' => 'Équipes',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Permet de restreindre la capacité pour les utilisateurs d\'attribuer des enregistrements aux autres utilisateurs.

tous - aucune restriction

équipe - peuvent assigner aux utilisateurs de l\'équipe

non - seulement à soi',
      'userPermission' => 'Allows to restrict an ability for users to view activities, calendar and stream of other users.

all - can view all

team - can view activities of teammates only

no - can\'t view',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' => 
    array (
      'Access' => 'Accès',
      'Create Role' => 'Créer un rôle',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'non-défini',
        'enabled' => 'activé',
        'disabled' => 'désactivé',
      ),
      'levelList' => 
      array (
        'all' => 'tous',
        'team' => 'équipe',
        'account' => 'Compte',
        'contact' => 'Contact',
        'own' => 'soi',
        'no' => 'non',
        'yes' => 'oui',
        'not-set' => 'non défini',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Voir',
      'edit' => 'Modifier',
      'delete' => 'Supprimer',
      'stream' => 'Flux',
      'create' => 'Créer',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Veuillez vider le cache pour que les changements soient pris en compte.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'job' => 'Tâche',
      'scheduling' => 'Planification (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Créer une tâche planifiée',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Nettoyer',
        'CheckInboundEmails' => 'Vérifier les emails entrants',
        'CheckEmailAccounts' => 'Vérifier ses comptes emails personnels',
        'SendEmailReminders' => 'Envoyer des notifications par email',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Envoyer emails groupés',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Note: Ajoutez cette ligne dans le fichier crontab pour lancer les tâches planifiées:',
        'mac' => 'Note: Ajoutez cette ligne dans le fichier crontab pour lancer les tâches planifiées:',
        'windows' => 'Note: Créez un fichier de commandes avec les commandes suivantes pour exécuter des tâches planifiées Windows',
        'default' => 'Note: Ajouter cette commande pour Cron (tâche planifiée):',
      ),
      'status' => 
      array (
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
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
      'status' => 'Statut',
      'executionTime' => 'Temps d\'exécution',
      'target' => 'Cible',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Utiliser la mise en cache',
      'dateFormat' => 'Format de la date',
      'timeFormat' => 'Format horaire',
      'timeZone' => 'Fuseau horaire',
      'weekStart' => 'Premier jour de la semaine',
      'thousandSeparator' => 'Séparateur de millier',
      'decimalMark' => 'Symbole décimal',
      'defaultCurrency' => 'Devise par défaut',
      'baseCurrency' => 'Devise de base',
      'currencyRates' => 'Taux des devises',
      'currencyList' => 'Liste des devises',
      'language' => 'Langue',
      'companyLogo' => 'Logo',
      'smtpServer' => 'Serveur',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sécurité',
      'smtpUsername' => 'Nom d\'utilisateur',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mot de passe',
      'outboundEmailFromName' => 'De',
      'outboundEmailFromAddress' => 'Depuis l\'adresse',
      'outboundEmailIsShared' => 'Est partagé',
      'recordsPerPage' => 'Enregistrements par page',
      'recordsPerPageSmall' => 'Enregistrements par page (réduits)',
      'tabList' => 'Liste des onglets',
      'quickCreateList' => 'Liste des créations rapides',
      'exportDelimiter' => 'Délimitant en exportation',
      'globalSearchEntityList' => 'Liste des entités pour la recherche global',
      'authenticationMethod' => 'Méthode d\'authentification',
      'ldapHost' => 'Hôte',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Full User DN',
      'ldapPassword' => 'Mot de passe',
      'ldapBindRequiresDn' => 'Bind Requires DN',
      'ldapBaseDn' => 'Base DN',
      'ldapAccountCanonicalForm' => 'Compte forme canonique',
      'ldapAccountDomainName' => 'Compte du nom de domaine',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Créer un utilisateur dans EspoCRM',
      'ldapSecurity' => 'Sécurité',
      'ldapUserLoginFilter' => 'Filtre des connexions utilisateur',
      'ldapAccountDomainNameShort' => 'Compte du nom de domaine réduit',
      'ldapOptReferrals' => 'Abonnés parrainés',
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
      'exportDisabled' => 'Désactiver l\'Export (seul l\'administrateur pourra le faire)',
      'assignmentNotificationsEntityList' => 'Entities to notify about upon assignment',
      'assignmentEmailNotifications' => 'Notifications upon assignment',
      'assignmentEmailNotificationsEntityList' => 'Assignment email notifications scopes',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'Mode B2C',
      'avatarsDisabled' => 'Désactiver les avatars',
      'followCreatedEntities' => 'Follow created records',
      'displayListViewRecordCount' => 'Afficher le Nombre Total (listes)',
      'theme' => 'Thème',
      'userThemesDisabled' => 'Désactiver les thèmes utilisateur',
      'emailMessageMaxSize' => 'Taille maximale d\'Emails (Mo)',
      'massEmailMaxPerHourCount' => 'Nombre maximum d\'Emails par heure',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Nombre maximum de comptes Emails personnels par utilisateur',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'URL du site',
      'addressPreview' => 'Address Preview',
      'addressFormat' => 'Address Format',
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
        0 => 'Dimanche',
        1 => 'Lundi',
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
      'recordsPerPage' => 'Number of records initially displayed in list views.',
      'recordsPerPageSmall' => 'Nombre d\'enregistrements dans les panneaux de relations.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Les utilisateurs suivront automatiquement leurs entrées',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'Si coché alors les utilisateurs ne pourront pas sélectionner un autre thème',
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
      'System' => 'Système',
      'Locale' => 'Local',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuration',
      'In-app Notifications' => 'Notifications internes',
      'Email Notifications' => 'Notifications par email',
      'Currency Settings' => 'Paramètres de devises',
      'Currency Rates' => 'Taux des devises',
      'Mass Email' => 'Emails groupés',
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
      'name' => 'Nom',
      'roles' => 'Rôles',
      'positionList' => 'Position de liste',
    ),
    'links' => 
    array (
      'users' => 'Utilisateurs',
      'notes' => 'Notes',
      'roles' => 'Rôles',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Permissions. Les utilisateurs de cette équipe obtiennent le niveau d\'accès des rôles sélectionnés.',
      'positionList' => 'Postes disponibles dans cette équipe. Par exemple : conseiller, manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Créer une équipe',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'body' => 'Corps de texte',
      'entityType' => 'Type d’entité',
      'header' => 'Entête',
      'footer' => 'Pied de page',
      'leftMargin' => 'Marge gauche',
      'topMargin' => 'Marge du haut',
      'rightMargin' => 'Marge droite',
      'bottomMargin' => 'Marge du bas',
      'printFooter' => 'Imprimer les pieds de page',
      'footerPosition' => 'Position des pieds de page',
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
      'Create Template' => 'Créer un modèle',
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
      'footer' => 'Utiliser {pageNumber} pour imprimer la page.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'userName' => 'Nom d\'utilisateur',
      'title' => 'Titre',
      'isAdmin' => 'Est administrateur',
      'defaultTeam' => 'Équipe par défaut',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Téléphone',
      'roles' => 'Rôles',
      'portals' => 'Portails',
      'portalRoles' => 'Rôles de Portail',
      'teamRole' => 'Position',
      'password' => 'Mot de passe',
      'currentPassword' => 'Mot de passe actuel',
      'passwordConfirm' => 'Confirmer le mot de passe',
      'newPassword' => 'Nouveau mot de passe',
      'newPasswordConfirm' => 'Confirmer le nouveau mot de passe',
      'avatar' => 'Avatar',
      'isActive' => 'Est actif',
      'isPortalUser' => 'Utilisateur de Portail',
      'contact' => 'Contact',
      'accounts' => 'Comptes',
      'account' => 'Compte (principal)',
      'sendAccessInfo' => 'Envoyer un email avec ses accès à l\'utilisateur',
      'portal' => 'Portail',
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
      'teams' => 'Équipes',
      'roles' => 'Rôles',
      'notes' => 'Notes',
      'portals' => 'Portails',
      'portalRoles' => 'Rôles Portail',
      'contact' => 'Contact',
      'accounts' => 'Comptes',
      'account' => 'Compte (principal)',
      'tasks' => 'Tasks',
      'targetLists' => 'Listes de cibles',
    ),
    'labels' => 
    array (
      'Create User' => 'Créer un utilisateur',
      'Generate' => 'Générer',
      'Access' => 'Accès',
      'Preferences' => 'Préférences',
      'Change Password' => 'Changer le mot de passe',
      'Teams and Access Control' => 'Équipes et permissions',
      'Forgot Password?' => 'Mot de passe oublié?',
      'Password Change Request' => 'Changement de mot de passe',
      'Email Address' => 'Adresse email',
      'External Accounts' => 'Comptes externes',
      'Email Accounts' => 'Comptes email',
      'Portal' => 'Portail',
      'Create Portal User' => 'Créer un utilisateur de Portail',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Toutes les données créées par cet utilisateur seront liés à cette équipe par défaut.',
      'userName' => 'Lettres a-z, nombres 0-9 et underscores autorisés.',
      'isAdmin' => 'Un administrateur accède à tout.',
      'isActive' => 'Si décoché, alors l\'utilisateur ne pourra plus se connecter.',
      'teams' => 'Les équipes auxquelles l\'utilisateur appartient. Permissions héritées de celles de l\'équipe.',
      'roles' => 'Rôles d\'accès supplémentaires. Utilisez-les si l\'utilisateur ne fait pas partie d\'une équipe ou si vous avez besoin d\'étendre le niveau des permissions uniquement pour cet utilisateur.',
      'portalRoles' => 'Rôles de Portail additionnels',
      'portals' => 'Portails auxquels cet utilisateur a accès',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Les identifiants (y compris le mot de passe) seront envoyés à l\'adresse email de l\'utilisateur.',
      'accountInfoEmailSubject' => 'EspoCRM : vos identifiants de connexion',
      'accountInfoEmailBody' => 'Bonjour,

Vos identifiants sont les suivants:

Nom d\'utilisateur: {userName}
Mot de passe: {password}

{siteUrl}

&Agrave; bient&ocirc;t,',
      'passwordChangeLinkEmailSubject' => 'Demande de nouveau mot de passe',
      'passwordChangeLinkEmailBody' => 'You can change your password by following this link {link}. This unique URL will be expired soon.',
      'passwordChanged' => 'Le mot de passe a été modifié',
      'userCantBeEmpty' => 'Le nom d\'utilisateur ne peut être laissé vide',
      'wrongUsernamePasword' => 'Mauvaise combinaison nom d\'utilisateur/mot de passe',
      'emailAddressCantBeEmpty' => 'L\'adresse email ne peut être laissée vide',
      'userNameEmailAddressNotFound' => 'Cette combinaison utilisateur/adresse email n\'a pas été retrouvée.',
      'forbidden' => 'Erreur, veuillez réessayer plus tard.',
      'uniqueLinkHasBeenSent' => 'Un lien unique et temporaire a été envoyé à votre adresse email.',
      'passwordChangedByRequest' => 'Le mot de passe a été modifié.',
      'setupSmtpBefore' => 'You need to setup <a href="{url}">SMTP settings</a> to make the system be able to send password in email.',
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
      'onlyMyTeam' => 'De mon équipe',
    ),
    'presetFilters' => 
    array (
      'active' => 'Actif',
      'activePortal' => 'Portail actif',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'website' => 'Site internet',
      'phoneNumber' => 'Téléphone',
      'billingAddress' => 'Adresse de facturation',
      'shippingAddress' => 'Adresse de livraison',
      'description' => 'Description',
      'sicCode' => 'Sic Code',
      'industry' => 'Industrie',
      'type' => 'Type',
      'contactRole' => 'Titre',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campagne',
      'targetLists' => 'Listes de cibles',
      'targetList' => 'Liste de cibles',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunités',
      'cases' => 'Tickets',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Rendez-vous (étendus)',
      'callsPrimary' => 'Appels (étendus)',
      'tasksPrimary' => 'Tâches (étendues)',
      'emailsPrimary' => 'Emails (étendus)',
      'targetLists' => 'Listes de cibles',
      'campaignLogRecords' => 'Log de campagne',
      'campaign' => 'Campagne',
      'portalUsers' => 'Utilisateurs Portail',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Client',
        'Investor' => 'Investisseur',
        'Partner' => 'Partenaire',
        'Reseller' => 'Revendeur',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Publicité',
        'Apparel & Accessories' => 'Mode et accessoires',
        'Architecture' => 'Architecture',
        'Automotive' => 'Auto',
        'Banking' => 'Banque',
        'Biotechnology' => 'Biotechnologie',
        'Building Materials & Equipment' => 'Matériaux de construction & équipements',
        'Chemical' => 'Chimie',
        'Construction' => 'Construction',
        'Computer' => 'Informatique',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Education',
        'Electronics' => 'Électronique',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Énergie',
        'Entertainment & Leisure' => 'Divertissement et loisirs',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Alimentation',
        'Grocery' => 'Épicerie',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Santé',
        'Insurance' => 'Assurance',
        'Legal' => 'Droit',
        'Manufacturing' => 'Industrie',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publication',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Immobilier',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Support',
        'Sports' => 'Sports',
        'Software' => 'Logiciel',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Télécommunications',
        'Television' => 'Télévision',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Transport',
        'Travel' => 'Travel',
        'Venture Capital' => 'Investissement',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Créer un compte',
      'Copy Billing' => 'Copie de facturation',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Clients',
      'partners' => 'Partenaires',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mois',
      'week' => 'Semaine',
      'day' => 'Jour',
      'agendaWeek' => 'Semaine',
      'agendaDay' => 'Jour',
      'timeline' => 'Plage de temps',
    ),
    'labels' => 
    array (
      'Today' => 'Aujourd\'hui',
      'Create' => 'Créer',
      'Shared' => 'Partagé',
      'Add User' => 'Ajouter un utilisateur',
      'current' => 'actuel',
      'time' => 'heure',
      'User List' => 'Liste utilisateurs',
      'Manage Users' => 'Gérer les utilisateurs',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de début',
      'dateEnd' => 'Date de fin',
      'direction' => 'Direction',
      'duration' => 'Durée',
      'description' => 'Description',
      'users' => 'Utilisateurs',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'reminders' => 'Notifications',
      'account' => 'Compte',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Prévu',
        'Held' => 'Effectué',
        'Not Held' => 'Non effectué',
      ),
      'direction' => 
      array (
        'Outbound' => 'Sortant',
        'Inbound' => 'Entrant',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Aucun',
        'Accepted' => 'Accepté',
        'Declined' => 'Décliné',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Définir comme effectué',
      'setNotHeld' => 'Définir comme non effectué',
    ),
    'labels' => 
    array (
      'Create Call' => 'Créer un appel',
      'Set Held' => 'Définir comme effectué',
      'Set Not Held' => 'Définir comme non effectué',
      'Send Invitations' => 'Envoyer les invitations',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Prévu',
      'held' => 'Effectué',
      'todays' => 'Aujourd\'hui',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'description' => 'Description',
      'status' => 'Statut',
      'type' => 'Type',
      'startDate' => 'Date de début',
      'endDate' => 'Date de fin',
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Exclure les listes de cibles',
      'sentCount' => 'Envoyé',
      'openedCount' => 'Ouvert',
      'clickedCount' => 'Cliqué',
      'optedOutCount' => 'Désinscrit',
      'bouncedCount' => 'Renvoyé',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Rejeté fortement',
      'softBouncedCount' => 'Rejeté',
      'leadCreatedCount' => 'Prospects créés',
      'revenue' => 'Revenu',
      'revenueConverted' => 'Revenu (converti)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converti)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Excluant les listes de cibles',
      'accounts' => 'Comptes',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'opportunities' => 'Opportunités',
      'campaignLogRecords' => 'Logs',
      'massEmails' => 'Emails groupés',
      'trackingUrls' => 'Tracking URLs',
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
        'Web' => 'Web',
        'Television' => 'Télévision',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planning',
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
        'Complete' => 'Terminer',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Créer une campagne',
      'Target Lists' => 'Listes de cibles',
      'Statistics' => 'Statistiques',
      'hard' => 'fort',
      'soft' => 'faible',
      'Unsubscribe' => 'Se désinscrire',
      'Mass Emails' => 'Emails groupés',
      'Email Templates' => 'Modèles d\'email',
      'Unsubscribe again' => 'Se re-désabonner',
      'Subscribe again' => 'Se réinscrire',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Actif',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Vous avez été désinscrit de notre liste d\'envoi',
      'subscribedAgain' => 'Vous vous êtes réinscrit.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Cibles devant recevoir les messages',
      'excludingTargetLists' => 'Cibles ne devant pas recevoir les messages',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Action',
      'actionDate' => 'Date',
      'data' => 'Donnée',
      'campaign' => 'Campagne',
      'parent' => 'Cible',
      'object' => 'Objet',
      'application' => 'Application',
      'queueItem' => 'Mettre en file d\'attente',
      'stringData' => 'Chaîne de texte',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Mettre en file d\'attente',
      'parent' => 'Parent',
      'object' => 'Objet',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Envoyé',
        'Opened' => 'Ouvert',
        'Opted Out' => 'Désinscrit',
        'Bounced' => 'Renvoyé',
        'Clicked' => 'Cliqué',
        'Lead Created' => 'Prospect créé',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Tous',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Envoyé',
      'opened' => 'Ouvert',
      'optedOut' => 'Désinscrit',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Cliqué',
      'leadCreated' => 'Prospect créé',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Code à insérer au lieu de l\'URL',
      'campaign' => 'Campagne',
    ),
    'links' => 
    array (
      'campaign' => 'Campagne',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Create Tracking URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'number' => 'Nombre',
      'status' => 'Statut',
      'account' => 'Compte',
      'contact' => 'Contact',
      'contacts' => 'Contacts',
      'priority' => 'Priorité',
      'type' => 'Type',
      'description' => 'Description',
      'inboundEmail' => 'Email entrant',
      'lead' => 'Prospect',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Emails entrants',
      'account' => 'Compte',
      'contact' => 'Contact (principal)',
      'Contacts' => 'Contacts',
      'meetings' => 'Rendez-vous',
      'calls' => 'Appels',
      'tasks' => 'Tâches',
      'emails' => 'Emails',
      'articles' => 'Articles base de connaissance',
      'lead' => 'Prospect',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Pending' => 'En cours',
        'Closed' => 'Fermé',
        'Rejected' => 'Rejeté',
        'Duplicate' => 'Dupliquer',
      ),
      'priority' => 
      array (
        'Low' => 'Basse',
        'Normal' => 'Normale',
        'High' => 'Haute',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Question',
        'Incident' => 'Incident',
        'Problem' => 'Problème',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Créer un ticket',
      'Close' => 'Fermer',
      'Reject' => 'Rejeter',
      'Closed' => 'Fermé',
      'Rejected' => 'Rejeté',
    ),
    'presetFilters' => 
    array (
      'open' => 'Ouvert',
      'closed' => 'Fermé',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'title' => 'Titre',
      'account' => 'Compte',
      'accounts' => 'Comptes',
      'phoneNumber' => 'Téléphone',
      'accountType' => 'Type de compte',
      'doNotCall' => 'Ne pas appeler',
      'address' => 'Adresse',
      'opportunityRole' => 'Rôle d\'opportunité',
      'accountRole' => 'Titre',
      'description' => 'Description',
      'campaign' => 'Campagne',
      'targetLists' => 'Listes de cibles',
      'targetList' => 'Liste de cibles',
      'portalUser' => 'Utilisateur Portail',
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
      'opportunities' => 'Opportunités',
      'cases' => 'Tickets',
      'targetLists' => 'Listes de cibles',
      'campaignLogRecords' => 'Rapporter une campagne',
      'campaign' => 'Campagne',
      'account' => 'Compte (principal)',
      'accounts' => 'Comptes',
      'casesPrimary' => 'Tickets (principal)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Utilisateur Portail',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Créer un Contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Aucun--',
        'Decision Maker' => 'Décisionnaire',
        'Evaluator' => 'Évaluateur',
        'Influencer' => 'Influenceur',
      ),
    ),
    'presetFilters' => 
    array (
      'portalUsers' => 'Utilisateurs Portail',
      'notPortalUsers' => 'N\'est pas un utilisateur Portail',
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
      'Create Document' => 'Créer un Document',
      'Details' => 'Détails',
    ),
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'file' => 'Fichier',
      'type' => 'Type',
      'publishDate' => 'Date de publication',
      'expirationDate' => 'Date d\'expiration',
      'description' => 'Description',
      'accounts' => 'Comptes',
      'folder' => 'Dossier',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'accounts' => 'Comptes',
      'opportunities' => 'Opportunités',
      'folder' => 'Dossier',
      'leads' => 'Prospects',
      'contacts' => 'Contacts',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Actif',
        'Draft' => 'Brouillon',
        'Expired' => 'Expiré',
        'Canceled' => 'Annulé',
      ),
      'type' => 
      array (
        '' => 'Aucun',
        'Contract' => 'Contrat',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Accord de licence',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Actif',
      'draft' => 'Brouillon',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Créer un dossier',
      'Manage Categories' => 'Gérer les dossiers',
      'Documents' => 'Documents',
    ),
    'links' => 
    array (
      'documents' => 'Documents',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'target' => 'Cible',
      'sentAt' => 'Date d\'envoi',
      'attemptCount' => 'Tentatives',
      'emailAddress' => 'Adresse email',
      'massEmail' => 'Emails groupé',
      'isTest' => 'Test',
    ),
    'links' => 
    array (
      'target' => 'Cible',
      'massEmail' => 'Emails groupé',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'En cours',
        'Sent' => 'Envoyé',
        'Failed' => 'Echec',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'En cours',
      'sent' => 'Envoyé',
      'failed' => 'Échec',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Créer un article',
      'Any' => 'Any',
      'Send in Email' => 'Envoyer par mail',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom',
    ),
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'type' => 'Type',
      'attachments' => 'Pièces jointes',
      'publishDate' => 'Date de publication',
      'expirationDate' => 'Date d\'expiration',
      'description' => 'Description',
      'body' => 'Corps de texte',
      'categories' => 'Catégories',
      'language' => 'Langue',
      'portals' => 'Portails',
    ),
    'links' => 
    array (
      'cases' => 'Tickets',
      'opportunities' => 'Opportunités',
      'categories' => 'Catégories',
      'portals' => 'Portails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Review',
        'Draft' => 'Brouillon',
        'Archived' => 'Archivé',
        'Published' => 'Publié',
      ),
      'type' => 
      array (
        'Article' => 'Article',
      ),
    ),
    'tooltips' => 
    array (
      'portals' => 'Article will be available only in specified portals.',
    ),
    'presetFilters' => 
    array (
      'published' => 'Publié',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Créer une catégorie',
      'Manage Categories' => 'Gérer les catégories',
      'Articles' => 'Articles',
    ),
    'links' => 
    array (
      'articles' => 'Articles',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Converti en',
      'Create Lead' => 'Créer un prospect',
      'Convert' => 'Convertir',
      'convert' => 'convert',
    ),
    'fields' => 
    array (
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'title' => 'Titre',
      'website' => 'Site internet',
      'phoneNumber' => 'Téléphone',
      'accountName' => 'Nom du compte',
      'doNotCall' => 'Ne pas appeler',
      'address' => 'Adresse',
      'status' => 'Statut',
      'source' => 'Source',
      'opportunityAmount' => 'Montant en jeu de l\'opportunité',
      'opportunityAmountConverted' => 'Montant en jeu de l\'opportunité (converti)',
      'description' => 'Description',
      'createdAccount' => 'Compte',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunité',
      'campaign' => 'Campagne',
      'targetLists' => 'Listes de cibles',
      'targetList' => 'Liste de cibles',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Listes de cibles',
      'campaignLogRecords' => 'Journaux de campagne',
      'campaign' => 'Campagne',
      'createdAccount' => 'Compte',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunité',
      'cases' => 'Tickets',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'In Process' => 'En cours',
        'Converted' => 'Converti',
        'Recycled' => 'Recyclé',
        'Dead' => 'Dead',
      ),
      'source' => 
      array (
        '' => 'Aucun',
        'Call' => 'Appel',
        'Email' => 'Email',
        'Existing Customer' => 'Client existant',
        'Partner' => 'Partenaire',
        'Public Relations' => 'Relations publiques',
        'Web Site' => 'Site internet',
        'Campaign' => 'Campagne',
        'Other' => 'Autre',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Actif',
      'actual' => 'En cours',
      'converted' => 'Converti',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'storeSentEmails' => 'Conserver les emails envoyés',
      'startAt' => 'Date de début',
      'fromAddress' => 'Adresse de l’émetteur',
      'fromName' => 'Nom de l\'expéditeur',
      'replyToAddress' => 'Addresse de réponse',
      'replyToName' => 'Nom pour répondre',
      'campaign' => 'Campagne',
      'emailTemplate' => 'Modèle d\'email',
      'inboundEmail' => 'Compte email',
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Liste des cibles à exclure',
      'optOutEntirely' => 'Désinscription email globale',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Liste des cibles à exclure',
      'queueItems' => 'File d\'attente',
      'campaign' => 'Campagne',
      'emailTemplate' => 'Modèle d\'email',
      'inboundEmail' => 'Compte email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Brouillon',
        'Pending' => 'En attente',
        'In Process' => 'En cours',
        'Complete' => 'Terminé',
        'Canceled' => 'Annulé',
        'Failed' => 'Échec',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Créer un email groupé',
      'Send Test' => 'Envoyer un message de test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Sélectionner au moins une cible',
      'testSent' => 'Le message de test est supposé être envoyé',
    ),
    'tooltips' => 
    array (
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
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
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de début',
      'dateEnd' => 'Date de fin',
      'duration' => 'Durée',
      'description' => 'Description',
      'users' => 'Utilisateurs',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'reminders' => 'Notifications',
      'account' => 'Compte',
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
        'Planned' => 'Prévu',
        'Held' => 'Effectué',
        'Not Held' => 'Non effectué',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Aucun',
        'Accepted' => 'Accepté',
        'Declined' => 'Décliné',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Définir comme effectué',
      'setNotHeld' => 'Définir comme non effectué',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Créer un Rendez-vous',
      'Set Held' => 'Définir comme effectué',
      'Set Not Held' => 'Définir comme non effectué',
      'Send Invitations' => 'Envoyer des Invitations',
      'on time' => 'à l\'heure',
      'before' => 'en avance',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Prévu',
      'held' => 'Effectué',
      'todays' => 'Aujourd\'hui',
    ),
    'messages' => 
    array (
      'nothingHasBeenSent' => 'Aucun envoi effectué',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'account' => 'Compte',
      'stage' => 'Etape',
      'amount' => 'Montant',
      'probability' => 'Probabilité, %',
      'leadSource' => 'Source du prospect',
      'doNotCall' => 'Ne pas appeler',
      'closeDate' => 'Date de fermeture',
      'contacts' => 'Contacts',
      'description' => 'Description',
      'amountConverted' => 'Montant (converti)',
      'amountWeightedConverted' => 'Montant pondéré',
      'campaign' => 'Campagne',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'documents' => 'Documents',
      'campaign' => 'Campagne',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospection',
        'Qualification' => 'Qualification',
        'Proposal' => 'Proposition',
        'Negotiation' => 'Négociation',
        'Needs Analysis' => 'Analyse des besoins',
        'Value Proposition' => 'Valeur de la proposition',
        'Id. Decision Makers' => 'Id. Decisionnaire',
        'Perception Analysis' => 'Analyse de la perception',
        'Proposal/Price Quote' => 'Proposition/devis',
        'Negotiation/Review' => 'Négociation/évaluation',
        'Closed Won' => 'Conclusion gagnante',
        'Closed Lost' => 'Conclusion perdante',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Créer une opportunité',
    ),
    'presetFilters' => 
    array (
      'open' => 'Ouvert',
      'won' => 'Gagné',
      'lost' => 'Perdu',
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
      'name' => 'Nom',
      'description' => 'Description',
      'entryCount' => 'Compteur d\'entrées',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campagnes',
      'endDate' => 'Date de fin',
      'targetLists' => 'Listes de cibles',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Comptes',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'campaigns' => 'Campagnes',
      'massEmails' => 'Emails groupés',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Télévision',
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
      'Create TargetList' => 'Créer une liste de cibles',
      'Opted Out' => 'Désinscrit',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de début',
      'dateEnd' => 'Date d\'échéance',
      'dateStartDate' => 'Date de début (toute la journée)',
      'dateEndDate' => 'Date de fin (toute la journée)',
      'priority' => 'Priorité',
      'description' => 'Description',
      'isOverdue' => 'En retard',
      'account' => 'Compte',
      'dateCompleted' => 'Date de Clôture',
      'attachments' => 'Pièces jointes',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Pièces jointes',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'N\'a pas démarré',
        'Started' => 'Démarré',
        'Completed' => 'Terminé',
        'Canceled' => 'Annulé',
        'Deferred' => 'Reporté',
      ),
      'priority' => 
      array (
        'Low' => 'Basse',
        'Normal' => 'Normale',
        'High' => 'Haute',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Créer une tâche',
      'Complete' => 'Clôturer',
    ),
    'presetFilters' => 
    array (
      'actual' => 'En cours',
      'completed' => 'Terminés',
      'deferred' => 'Deferred',
      'todays' => 'Aujourd\'hui',
      'overdue' => 'En retard',
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
      'Create Formularios' => 'Créer un Formulario',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' => 
    array (
      'Create MotivoReclamo' => 'Créer un MotivoReclamo',
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
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' => 
    array (
      'Create Reclamo' => 'Créer un Reclamo',
    ),
    'tooltips' => 
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>