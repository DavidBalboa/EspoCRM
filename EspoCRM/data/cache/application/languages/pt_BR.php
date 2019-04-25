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
      'Enabled' => 'Habilitado',
      'Disabled' => 'Desabilitado',
      'System' => 'Sistema',
      'Users' => 'Usuários',
      'Email' => 'E-mail',
      'Data' => 'Data',
      'Customization' => 'Customização',
      'Available Fields' => 'Campos Disponíveis',
      'Layout' => 'Layout',
      'Entity Manager' => 'Gerenciar Entidades',
      'Add Panel' => 'Adicionar Painel',
      'Add Field' => 'Adicionar Campo',
      'Settings' => 'Preferências',
      'Scheduled Jobs' => 'Tarefas agendadas',
      'Upgrade' => 'Atualização',
      'Clear Cache' => 'Limpar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Times',
      'Roles' => 'Regras',
      'Portal' => 'Portal',
      'Portals' => 'Portals',
      'Portal Roles' => 'Portal Roles',
      'Portal Users' => 'Portal Users',
      'Outbound Emails' => 'E-mails de Saída',
      'Group Email Accounts' => 'Group Email Accounts',
      'Personal Email Accounts' => 'Personal Email Accounts',
      'Inbound Emails' => 'E-mails de Entrada',
      'Email Templates' => 'Templates dos E-mails',
      'Import' => 'Importar',
      'Layout Manager' => 'Gerenciar Layout',
      'User Interface' => 'Interface do Usuário',
      'Auth Tokens' => 'Tokens de Autenticação',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autenticação',
      'Currency' => 'Moeda',
      'Integrations' => 'Integrações',
      'Extensions' => 'Extensões',
      'Upload' => 'Upload',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Atualizando...',
      'Upgraded successfully' => 'Atualizado com sucesso',
      'Installed successfully' => 'Instalado com sucesso',
      'Ready for upgrade' => 'Pronto para a atualização',
      'Run Upgrade' => 'Rodar atualização',
      'Install' => 'Instalar',
      'Ready for installation' => 'Pronto para a instalação',
      'Uninstalling...' => 'Desinstalando...',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Criar Entidade',
      'Edit Entity' => 'Editar Entidade',
      'Create Link' => 'Criar Link',
      'Edit Link' => 'Editar Link',
      'Notifications' => 'Notifications',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Reset to Default',
      'Email Filters' => 'Email Filters',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalhe',
      'listSmall' => 'List (Pequeno)',
      'detailSmall' => 'Detalhe (Pequeno)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Filtros de Busca',
      'massUpdate' => 'Atualização em massa',
      'relationships' => 'Relacionamentos',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Converter Lead',
      'listForAccount' => 'List (for Account)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Endereço',
      'array' => 'Matriz',
      'foreign' => 'Relacionamento',
      'duration' => 'Duração',
      'password' => 'Senha',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-incremento',
      'bool' => 'Booleano',
      'currency' => 'Monetário',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Data',
      'datetime' => 'Data/Hora',
      'datetimeOptional' => 'Date/Date-Time',
      'email' => 'E-mail',
      'enum' => 'Lista',
      'enumInt' => 'Lista (Número)',
      'enumFloat' => 'Lista (Float)',
      'float' => 'Float',
      'int' => 'Número',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplo',
      'linkParent' => 'Link Pai',
      'phone' => 'Telefone',
      'text' => 'Texto',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Arquivo',
      'image' => 'Imagem',
      'multiEnum' => 'Lista múltipla',
      'attachmentMultiple' => 'Attachment Multiple',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Map',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Color Picker',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'parsonName' => 'Nome da Pessoa',
      'multienim' => 'Lista Múltipla',
    ),
    'fields' => 
    array (
      'type' => 'Tipe',
      'name' => 'Nome',
      'label' => 'Rótulo',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Obrigatório',
      'default' => 'Padrão',
      'maxLength' => 'Tamanho máximo',
      'options' => 'Opções (valores raw, não traduzíveis)',
      'after' => 'Antes (field)',
      'before' => 'Após (field)',
      'link' => 'Link',
      'field' => 'Campo',
      'min' => 'Mín',
      'max' => 'Máx',
      'translation' => 'Tradução',
      'previewSize' => 'Tamanho do Preview',
      'noEmptyString' => 'Nenhuma seqüência de caracteres vazia',
      'defaultType' => 'Default Type',
      'seeMoreDisabled' => 'Disable Text Cut',
      'entityList' => 'Entity List',
      'isSorted' => 'Is Sorted (alphabetically)',
      'audited' => 'Audited',
      'trim' => 'Trim',
      'height' => 'Height (px)',
      'minHeight' => 'Min Height (px)',
      'provider' => 'Provider',
      'typeList' => 'Type List',
      'rows' => 'Number of rows of textarea',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Source List',
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
      'upgradeVersion' => 'Sua instalação do EspoCRM será atualizada para a versão <strong>{version}</strong>. Isto pode levar algum tempo.',
      'upgradeDone' => 'Sua instalação do EspoCRM foi atualizada para a versão <strong>{version}</strong>. Atualize a janela do navegador.',
      'upgradeBackup' => 'Nós recomendamos que você faça um backup dos arquivos e dados do EspoCRM antes de atualizar.',
      'thousandSeparatorEqualsDecimalMark' => 'O separador de milhar não pode ser o mesmo do separador decimal',
      'userHasNoEmailAddress' => 'Usuário não possui endereço de e-mail.',
      'selectEntityType' => 'Escolha o tipo de entidade no menu a esquerda.',
      'selectUpgradePackage' => 'Selecione o pacote de atualização',
      'downloadUpgradePackage' => 'Download do(s) pacote(s) de atualização <a href="{url}">aqui</a>.',
      'selectLayout' => 'Selecione o layout necessário no meu a esquerda e edite ele.',
      'selectExtensionPackage' => 'Selecione o pacote de extensão',
      'extensionInstalled' => 'A extensão {name} {version} foi instalada.',
      'installExtension' => 'A extensão {name} {version} está pronta para instalação.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Você confirma a desinstalação da extensão?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Configurações gerais do aplicativo.',
      'scheduledJob' => 'Tarefas agendadas que serão executadas pelo cron.',
      'upgrade' => 'Atualizar o EspoCRM.',
      'clearCache' => 'Limpar todo o cache do backend.',
      'rebuild' => 'Reconstruir o backend e limpar o cache.',
      'users' => 'Manutenção de usuários.',
      'teams' => 'Manutenção de Times.',
      'roles' => 'Manutenção de Regras.',
      'portals' => 'Portals management.',
      'portalRoles' => 'Roles for portal.',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Configuração SMTP para envio de e-mails.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Users email accounts.',
      'emailTemplates' => 'Templates para envio de e-mails.',
      'import' => 'Importar dados de arquivo CSV.',
      'layoutManager' => 'Customizar layouts (listas, detalhes, edição, busca, atualização em massa).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Configurar a interface gráfica.',
      'authTokens' => 'Sessões autenticadas ativas. Endereço de IP e última data de acesso.',
      'authentication' => 'Configurações de autenticação.',
      'currency' => 'Configurações de moeda e taxas.',
      'extensions' => 'Instalar ou desinstalar extensoes.',
      'integrations' => 'Integração com serviços de terceiros.',
      'notifications' => 'In-app and email notification settings.',
      'inboundEmails' => 'Grupo de contas de e-mail IMAP. Importação de e-mail Email-to-Case.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
      'fieldManager' => 'Criar novos campos ou personalizar os existentes.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Mínimo',
        'small' => 'Pequeno',
        'medium' => 'Médio',
        'large' => 'Grande',
      ),
    ),
    'logicalOperators' => 
    array (
      'and' => 'AND',
      'or' => 'OR',
      'not' => 'NOT',
    ),
    'layoutManagerDataAttributes' => 
    array (
      'width' => 'Largura (%)',
      'link' => 'Link',
      'notSortable' => 'Não ordenável',
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
      'Document' => 'Insert Document',
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
      'user' => 'Usuário',
      'ipAddress' => 'Endereço de IP',
      'lastAccess' => 'Último acesso',
      'createdAt' => 'Data do login',
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
      'title' => 'Título',
      'dateFrom' => 'Desde',
      'dateTo' => 'Até a data',
      'autorefreshInterval' => 'Intervalo para auto-atualização',
      'displayRecords' => 'Exibir registros',
      'isDoubleHeight' => 'Altura 2x',
      'mode' => 'Mode',
      'enabledScopeList' => 'What to display',
      'users' => 'Users',
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
        'agendaWeek' => 'Week (agenda)',
        'basicWeek' => 'Week',
        'month' => 'Month',
        'basicDay' => 'Day',
        'agendaDay' => 'Day (agenda)',
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
      'name' => 'Assunto',
      'parent' => 'Origem',
      'status' => 'Status',
      'dateSent' => 'Data do envio',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Reply To',
      'replyToString' => 'Reply To (String)',
      'isHtml' => 'Html',
      'body' => 'Corpo',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'selectTemplate' => 'Escolher Template',
      'fromEmailAddress' => 'E-mail do rementente',
      'toEmailAddresses' => 'E-mail do destinatário',
      'emailAddress' => 'Endereço de E-mail',
      'deliveryDate' => 'Data de envio',
      'account' => 'Account',
      'users' => 'Users',
      'replied' => 'Replied',
      'replies' => 'Replies',
      'isRead' => 'Is Read',
      'isNotRead' => 'Is Not Read',
      'isImportant' => 'Is Important',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Is User\'s',
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
      'replied' => 'Replied',
      'replies' => 'Replies',
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
        'Draft' => 'Draft',
        'Sending' => 'Sending',
        'Sent' => 'Sent',
        'Archived' => 'Archived',
        'Received' => 'Received',
        'Failed' => 'Failed',
      ),
      'Draft' => 'Rascunho',
      'Sending' => 'Enviando',
      'Sent' => 'Enviado',
      'Archived' => 'Arquivado',
      'Received' => 'Recebido',
    ),
    'labels' => 
    array (
      'Create Email' => 'Criar e-mail',
      'Archive Email' => 'Arquivar e-mail',
      'Compose' => 'Compor',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a Todos',
      'Forward' => 'Encaminhar',
      'Original message' => 'Mensagem original',
      'Forwarded message' => 'Mensagem encaminhada',
      'Email Accounts' => 'Contas de e-mail',
      'Inbound Emails' => 'Group Email Accounts',
      'Email Templates' => 'Email Templates',
      'Send Test Email' => 'Enviar e-mail de teste',
      'Send' => 'Enviar',
      'Email Address' => 'Endereço de E-mail',
      'Mark Read' => 'Marcar como lido',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Salvar rascunho',
      'Mark all as read' => 'Mark all as read',
      'Show Plain Text' => 'Show Plain Text',
      'Mark as Important' => 'Mark as Important',
      'Unmark Importance' => 'Unmark Importance',
      'Move to Trash' => 'Move to Trash',
      'Retrieve from Trash' => 'Retrieve from Trash',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'Create Lead' => 'Create Lead',
      'Create Contact' => 'Create Contact',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Create Task',
      'Create Case' => 'Create Case',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Nenhuma configuração SMTP. {link}.',
      'testEmailSent' => 'O e-mail de teste enviado',
      'emailSent' => 'O e-mail foi enviado',
      'savedAsDraft' => 'Saved as draft',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Enviado',
      'archived' => 'Arquivado',
      'inbox' => 'Inbox',
      'drafts' => 'Drafts',
      'trash' => 'Trash',
      'important' => 'Important',
      'draft' => 'Rascunho',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Marcar como lido',
      'markAsNotRead' => 'Mark as Not Read',
      'markAsImportant' => 'Mark as Important',
      'markAsNotImportant' => 'Unmark Importance',
      'moveToTrash' => 'Move to Trash',
      'moveToFolder' => 'Move to Folder',
      'retrieveFromTrash' => 'Retrieve from Trash',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Usuário',
      'password' => 'Senha',
      'port' => 'Porta',
      'monitoredFolders' => 'Pastas monitoradas',
      'ssl' => 'SSL',
      'fetchSince' => 'Recuperar desde',
      'emailAddress' => 'Email Address',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
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
      'filters' => 'Filters',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Ativa',
        'Inactive' => 'Inativa',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Criar conta de e-mail',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Test Connection',
      'Send Test Email' => 'Send Test Email',
      'SMTP' => 'SMTP',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Não foi possível conectar ao servidor IMAP',
      'connectionIsOk' => 'Connection is Ok',
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
      'Primary' => 'Primário',
      'Opted Out' => 'Cancelou (opt-out)',
      'Invalid' => 'Inválido',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'From',
      'to' => 'To',
      'subject' => 'Subject',
      'bodyContains' => 'Body Contains',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Create Email Filter',
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
      'name' => 'Give the filter a descriptive name.',
      'subject' => 'Use a wildcard *:

text* - starts with text,
*text* - contains text,
*text - ends with text.',
      'bodyContains' => 'Body of the email contains any of the specified words or phrases.',
      'from' => 'Emails being sent from the specified address. Leave empty if not needed. You can use wildcard *.',
      'to' => 'Emails being sent to the specified address. Leave empty if not needed. You can use wildcard *.',
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
      'name' => 'Nome',
      'status' => 'Status',
      'isHtml' => 'Html',
      'body' => 'Conteúdo',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'insertField' => '',
      'oneOff' => 'One-off',
      'category' => 'Category',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Criar Template de E-mail',
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
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
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
      'Fields' => 'Campos',
      'Relationships' => 'Relacionamentos',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Formula' => 'Formula',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'type' => 'Tipo',
      'labelSingular' => 'Rótulo Singular',
      'labelPlural' => 'Rótulo Plural',
      'stream' => 'Fluxo',
      'label' => 'Rótulo',
      'linkType' => 'Tipo de Link',
      'entityForeign' => 'Entidade Estrangeira',
      'linkForeign' => 'Link Estrangeiro',
      'link' => 'Link',
      'labelForeign' => 'Rótulo Estrangeiro',
      'sortBy' => 'Default Order (field)',
      'sortDirection' => 'Default Order (direction)',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Link Multiple Field',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Disabled',
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
        '' => 'Nenhum',
        'Base' => 'Base',
        'Person' => 'Pessoa',
        'CategoryTree' => 'Category Tree',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Company',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'One-to-Many',
        'manyToOne' => 'Many-to-One',
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
      'entityCreated' => 'A entidade foi criada',
      'linkAlreadyExists' => 'Conflito: o link já existe.',
      'linkConflict' => 'Name conflict: link or field with the same name already exists.',
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
      'name' => 'Nome',
      'version' => 'Versão',
      'description' => 'Descrição',
      'isInstalled' => 'Instalada',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar',
    ),
    'messages' => 
    array (
      'uninstalled' => 'A extensão {name} foi desinstalada',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Conectar',
      'Connected' => 'Conectado',
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
      'User' => 'Usuário',
      'Team' => 'Time',
      'Role' => 'Regra',
      'EmailTemplate' => 'Template de E-mail',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Conta de e-mail',
      'EmailAccountScope' => 'Conta de e-mail',
      'OutboundEmail' => 'E-mail de Saída',
      'ScheduledJob' => 'Tarefa Agendada',
      'ExternalAccount' => 'Conta externa',
      'Extension' => 'Extensão',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'E-mail de Entrada',
      'Stream' => 'Fluxo',
      'Import' => 'Import',
      'Template' => 'Template',
      'Job' => 'Job',
      'EmailFilter' => 'Email Filter',
      'Portal' => 'Portal',
      'PortalRole' => 'Portal Role',
      'Attachment' => 'Attachment',
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
      'Account' => 'Conta',
      'Contact' => 'Contato',
      'Lead' => 'Lead',
      'Target' => 'Alvo',
      'Opportunity' => 'Oportunidade',
      'Meeting' => 'Reunião',
      'Calendar' => 'Calendário',
      'Call' => 'Ligação',
      'Task' => 'Tarefa',
      'Case' => 'Atendimento',
      'Document' => 'Documento',
      'DocumentFolder' => 'Document Folder',
      'Campaign' => 'Campanha',
      'TargetList' => 'Lista de Alvos',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base Article',
      'KnowledgeBaseCategory' => 'Knowledge Base Category',
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
      'Email' => 'E-mails',
      'User' => 'Usuários',
      'Team' => 'Times',
      'Role' => 'Regras',
      'EmailTemplate' => 'Templates de E-mail',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Contas de e-mail',
      'EmailAccountScope' => 'Contas de e-mail',
      'OutboundEmail' => 'E-mails de Saída',
      'ScheduledJob' => 'Tarefas Agendadas',
      'ExternalAccount' => 'Contas externas',
      'Extension' => 'Extensões',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'E-mails de Entrada',
      'Stream' => 'Fluxo',
      'Import' => 'Import',
      'Template' => 'Templates',
      'Job' => 'Jobs',
      'EmailFilter' => 'Email Filters',
      'Portal' => 'Portals',
      'PortalRole' => 'Portal Roles',
      'Attachment' => 'Attachments',
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
      'Account' => 'Contas',
      'Contact' => 'Contatos',
      'Lead' => 'Leads',
      'Target' => 'Alvos',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniões',
      'Calendar' => 'Calendário',
      'Call' => 'Ligações',
      'Task' => 'Tarefas',
      'Case' => 'Atendimentos',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Document Folders',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activities',
      'KnowledgeBaseArticle' => 'Knowledge Base',
      'KnowledgeBaseCategory' => 'Knowledge Base Categories',
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
      'Merge' => 'Mesclar',
      'None' => 'Nenhum',
      'Home' => 'Home',
      'by' => 'por',
      'Saved' => 'Salvo',
      'Error' => 'Erro',
      'Select' => 'Selecionar',
      'Not valid' => 'Inválido',
      'Please wait...' => 'Aguarde...',
      'Please wait' => 'Aguarde',
      'Loading...' => 'Carregando...',
      'Uploading...' => 'Enviando...',
      'Sending...' => 'Enviando...',
      'Merging...' => 'Mesclando...',
      'Merged' => 'Mesclado',
      'Removed' => 'Removido',
      'Posted' => 'Postado',
      'Linked' => 'Relacionado',
      'Unlinked' => 'Relacionamento removido',
      'Done' => 'Done',
      'Access denied' => 'Acesso negado',
      'Not found' => 'Not found',
      'Access' => 'Acesso',
      'Are you sure?' => 'Você confirma?',
      'Record has been removed' => 'Registro removido',
      'Wrong username/password' => 'Usuário/senha incorretos',
      'Post cannot be empty' => 'A postagem não pode estar vazia',
      'Removing...' => 'Removendo...',
      'Unlinking...' => 'Removendo relacionamento...',
      'Posting...' => 'Postando...',
      'Username can not be empty!' => 'O nome de usuário não pode estar vazio!',
      'Cache is not enabled' => 'O cache não está habilitado',
      'Cache has been cleared' => 'Cache limpo',
      'Rebuild has been done' => 'Reconstrução concluída',
      'Return to Application' => 'Return to Application',
      'Saving...' => 'Salvando...',
      'Modified' => 'Modificado',
      'Created' => 'Criado',
      'Create' => 'Criar',
      'create' => 'criar',
      'Overview' => 'Visão Geral',
      'Details' => 'Detalhes',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Adicionar Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Editar Dashboard',
      'Add' => 'Adicionar',
      'Add Item' => 'Add Item',
      'Reset' => 'Resetar',
      'Menu' => 'Menu',
      'More' => 'Mais',
      'Search' => 'Busca',
      'Only My' => 'Apenas meus',
      'Open' => 'Aberto',
      'Admin' => 'Admin',
      'About' => 'Sobre',
      'Refresh' => 'Recarregar',
      'Remove' => 'Remover',
      'Options' => 'Opções',
      'Username' => 'Usuário',
      'Password' => 'Senha',
      'Login' => 'Login',
      'Log Out' => 'Sair',
      'Preferences' => 'Preferências',
      'State' => 'Estado',
      'Street' => 'Logradouro',
      'Country' => 'País',
      'City' => 'Cidade',
      'PostalCode' => 'CEP',
      'Followed' => 'Seguido',
      'Follow' => 'Seguir',
      'Followers' => 'Followers',
      'Clear Local Cache' => 'Limpar Cache Local',
      'Actions' => 'Ações',
      'Delete' => 'Excluir',
      'Update' => 'Atualizar',
      'Save' => 'Salvar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Apply' => 'Apply',
      'Unlink' => 'Remover ligação',
      'Mass Update' => 'Atualização em Massa',
      'Export' => 'Exportar',
      'No Data' => 'Sem dados',
      'No Access' => 'Sem acesso',
      'All' => 'Tudo',
      'Active' => 'Ativo',
      'Inactive' => 'Inativo',
      'Write your comment here' => 'Escreva seu comentário aqui',
      'Post' => 'Postar',
      'Stream' => 'Fluxo',
      'Show more' => 'Exibir mais',
      'Dashlet Options' => 'Opções do Dashlet',
      'Full Form' => 'Formulário Completo',
      'Insert' => 'Inserir',
      'Person' => 'Pessoa',
      'First Name' => 'Nome',
      'Last Name' => 'Sobrenome',
      'Original' => 'Original',
      'You' => 'Você',
      'you' => 'você',
      'change' => 'modificar',
      'Change' => 'Modificar',
      'Primary' => 'Primário',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administração',
      'Run Import' => 'Executar Importação',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificações',
      'Mark all read' => 'Marcar tudo como lido',
      'See more' => 'Ver mais',
      'Today' => 'Hoje',
      'Tomorrow' => 'Amanhã',
      'Yesterday' => 'Ontem',
      'Submit' => 'Enviar',
      'Close' => 'Fechar',
      'Yes' => 'Sim',
      'No' => 'Não',
      'Select All Results' => 'Selecionar todos',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Unlink All' => 'Unlink All',
      'Total' => 'Total',
      'Print to PDF' => 'Print to PDF',
      'Default' => 'Default',
      'Number' => 'Number',
      'From' => 'From',
      'To' => 'To',
      'Create Post' => 'Create Post',
      'Previous Entry' => 'Previous Entry',
      'Next Entry' => 'Next Entry',
      'View List' => 'View List',
      'Attach File' => 'Attach File',
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
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'Activities' => 'Atividades',
      'History' => 'Histórico',
      'Attendees' => 'participantes',
      'Schedule Meeting' => 'Agendar Reunião',
      'Schedule Call' => 'Agendar Ligação',
      'Compose Email' => 'Compor E-mail',
      'Log Meeting' => 'Logar Reunião',
      'Log Call' => 'Logar Ligação',
      'Archive Email' => 'Arquivar E-mail',
      'Create Task' => 'Criar Tarefa',
      'Tasks' => 'Tarefas',
      'Add Filter' => 'Adicionar filtro',
      'Save Filters' => 'Salvar Filtros',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'posting' => 'Posting...',
      'loading' => 'Loading...',
      'saving' => 'Saving...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Você não modificou o registro',
      'duplicate' => 'O registro que você está criando parece estar duplicado',
      'dropToAttach' => 'Drop to attach',
      'fieldIsRequired' => '{field} é obrigatório',
      'fieldShouldBeEmail' => '{field} deve ser um e-mail válido',
      'fieldShouldBeFloat' => '{field} deve ser um float válido',
      'fieldShouldBeInt' => '{field} deve ser um valor inteiro',
      'fieldShouldBeDate' => '{field} deve ser uma data válida',
      'fieldShouldBeDatetime' => '{field} deve ser uma data/hora válida',
      'fieldShouldAfter' => '{field} deve ser depois de {otherField}',
      'fieldShouldBefore' => '{field} deve ser antes de {otherField}',
      'fieldShouldBeBetween' => '{field} deve estar entre {min} e {max}',
      'fieldShouldBeLess' => '{field} deve ser menos que {value}',
      'fieldShouldBeGreater' => '{field} deve ser maior que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado impropriamente',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'As preferências foram redefinidas para o padrão',
      'confirmation' => 'Você tem certeza?',
      'unlinkAllConfirmation' => 'Are you sure you want to unlink all related records?',
      'resetPreferencesConfirmation' => 'Você gostaria mesmo de redefenir as preferências para o padrão?',
      'removeRecordConfirmation' => 'Você gostaria mesmo de remover este registro?',
      'unlinkRecordConfirmation' => 'Você gostaria mesmo de desfazer este relacionamento?',
      'removeSelectedRecordsConfirmation' => 'Você gostaria mesmo de remover os registros selecionados?',
      'massUpdateResult' => '{count} registros foram atualizados',
      'massUpdateResultSingle' => '{count} registro foi atualizado',
      'noRecordsUpdated' => 'Nenhum registro foi atualizado',
      'massRemoveResult' => '{count} registros foram removidos',
      'massRemoveResultSingle' => '{count} registro foi removido',
      'noRecordsRemoved' => 'Nenhum registro foi removido',
      'clickToRefresh' => 'Clique para atualizar',
      'streamPostInfo' => 'Digite <strong>@usuario</strong> para mencionar usuários na postagem.

Sintaxe markdown disponível::
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
[link text](url)',
      'writeYourCommentHere' => 'Escreva seu comentário aqui',
      'writeMessageToUser' => 'Write a message to {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Type & press enter',
      'checkForNewNotifications' => 'Check for new notifications',
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
      'onlyMy' => 'Meus',
      'followed' => 'Followed',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Followed',
      'all' => 'All',
    ),
    'massActions' => 
    array (
      'remove' => 'Remover',
      'merge' => 'Mesclar',
      'massUpdate' => 'Atualização em Massa',
      'export' => 'Exportar',
      'follow' => 'Follow',
      'unfollow' => 'Unfollow',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'firstName' => 'Primeiro Nome',
      'lastName' => 'Sobrenome',
      'salutationName' => 'Saudação',
      'assignedUser' => 'Atribuido ao usuário',
      'assignedUsers' => 'Assigned Users',
      'emailAddress' => 'E-mail',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Nome de Usuário Designado',
      'teams' => 'Times',
      'createdAt' => 'Criado em',
      'modifiedAt' => 'Modificado em',
      'createdBy' => 'Criado por',
      'modifiedBy' => 'Modificado por',
      'description' => 'Descrção',
      'address' => 'Endereço',
      'phoneNumber' => 'Telefone',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Order',
      'parent' => 'Parent',
      'children' => 'Children',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Cidade',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'CEP',
      'billingAddressState' => 'Estado',
      'billingAddressStreet' => 'Endereço',
      'billingAddressMap' => 'Map',
      'addressCity' => 'Cidade',
      'addressStreet' => 'Logradouro',
      'addressCountry' => 'País',
      'addressState' => 'Estado',
      'addressPostalCode' => 'CEP',
      'addressMap' => 'Map',
      'shippingAddressCity' => 'Cidade (Envio)',
      'shippingAddressStreet' => 'Logradouro (Envio)',
      'shippingAddressCountry' => 'País (Envio)',
      'shippingAddressState' => 'Estado (Envio)',
      'shippingAddressPostalCode' => 'CEP (Envio)',
      'shippingAddressMap' => 'Map (Shipping)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Usuário designado',
      'createdBy' => 'Criado por',
      'modifiedBy' => 'Modificado por',
      'team' => 'Time',
      'roles' => 'Regras',
      'teams' => 'Times',
      'users' => 'Usuários',
      'parent' => 'Pai',
      'children' => 'Children',
      'contacts' => 'Contatos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Leads',
      'meetings' => 'Reuniões',
      'calls' => 'Ligações',
      'tasks' => 'Tarefas',
      'emails' => 'E-mails',
      'accounts' => 'Contas',
      'cases' => 'Atendimentos',
      'documents' => 'Documentos',
      'account' => 'Conta',
      'opportunity' => 'Oportunidade',
      'contact' => 'Contato',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Fluxo',
      'Emails' => 'My Inbox',
      'Records' => 'Record List',
      'Leads' => 'Meus Leads',
      'Opportunities' => 'Minhas Oportunidades',
      'Tasks' => 'Minhas Tarefas',
      'Cases' => 'Meus Atendimentos',
      'Calendar' => 'Calendário',
      'Calls' => 'Minhas Ligações',
      'Meetings' => 'Minhas Reuniões',
      'OpportunitiesByStage' => 'Oportunidades por Estágio',
      'OpportunitiesByLeadSource' => 'Oportunities por Origem do Lead',
      'SalesByMonth' => 'Vendas Por Mês',
      'SalesPipeline' => 'Funil de Vendas',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
      'entityRemoved' => '{user} removed {entityType} {entity}',
    ),
    'streamMessages' => 
    array (
      'post' => '{user} postou em {entityType} {entity}',
      'attach' => '{user} anexou em {entityType} {entity}',
      'status' => '{user} atualizou {field} em {entityType} {entity}',
      'update' => '{user} atualizou {entityType} {entity}',
      'postTargetTeam' => '{user} posted to team {target}',
      'postTargetTeams' => '{user} posted to teams {target}',
      'postTargetPortal' => '{user} posted to portal {target}',
      'postTargetPortals' => '{user} posted to portals {target}',
      'postTarget' => '{user} posted to {target}',
      'postTargetYou' => '{user} posted to you',
      'postTargetYouAndOthers' => '{user} posted to {target} and you',
      'postTargetAll' => '{user} posted to all',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} mencionado {mentioned} em {entityType} {entity}',
      'mentionYouInPost' => '{user} mentioned you in {entityType} {entity}',
      'mentionInPostTarget' => '{user} mentioned {mentioned} in post',
      'mentionYouInPostTarget' => '{user} mentioned you in post to {target}',
      'mentionYouInPostTargetAll' => '{user} mentioned you in post to all',
      'mentionYouInPostTargetNoTarget' => '{user} mentioned you in post',
      'create' => '{user} criou {entityType} {entity}',
      'createThis' => '{user} criou {entityType}',
      'createAssignedThis' => '{user} criou {entityType} atribuído a {assignee}',
      'createAssigned' => '{user} criou {entityType} {entity} atribuído a {assignee}',
      'createAssignedYou' => '{user} created {entityType} {entity} assigned to you',
      'createAssignedThisSelf' => '{user} created this {entityType} self-assigned',
      'createAssignedSelf' => '{user} created {entityType} {entity} self-assigned',
      'assign' => '{user} atribuiu {entityType} {entity} a {assignee}',
      'assignThis' => '{user} atribuiu {entityType} a {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} postou',
      'attachThis' => '{user} anexou',
      'statusThis' => '{user} atualizou {field}',
      'updateThis' => '{user} atualizou {entityType}',
      'createRelatedThis' => '{user} criou {relatedEntityType} {relatedEntity} relacionado a {entityType}',
      'createRelated' => '{user} criou {relatedEntityType} {relatedEntity} atribuido a {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'emailReceivedFromThis' => 'O e-mail {email} foi recebido de {from}',
      'emailReceivedInitialFromThis' => 'O e-mail {email} foi recebido de e {from} e criou um(a) {entityType}',
      'emailReceivedThis' => 'O e-mail {email} foi recebido',
      'emailReceivedInitialThis' => 'O e-mail {email} foi recebido e criou um(a) {entityType}',
      'emailReceivedFrom' => 'O e-mail {email} relacionado a {entityType} {entity} foi recebido por {from}',
      'emailReceivedFromInitial' => 'O e-mail {email} foi recebido de {from} e criou {entityType} {entity}',
      'emailReceived' => 'O e-mail {email} relacionado a {entityType} {entity} foi recebido',
      'emailReceivedInitial' => 'O e-mail {email} foi recebido e criou {entityType} {entity}',
      'emailReceivedInitialFrom' => 'O e-mail {email} foi recebido de {from} e criou {entityType} {entity}',
      'emailSent' => '{by} enviou o e-mail {email} relacionado a {entityType} {entity}',
      'emailSentThis' => '{by} enviou o e-mail {email}',
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
        0 => 'Janeiro',
        1 => 'Fevereiro',
        2 => 'Março',
        3 => 'Abril',
        4 => 'Maio',
        5 => 'Junho',
        6 => 'Julho',
        7 => 'Agosto',
        8 => 'Setembro',
        9 => 'Outubro',
        10 => 'Novembro',
        11 => 'Dezembro',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Fev',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Set',
        9 => 'Out',
        10 => 'Nov',
        11 => 'Dez',
      ),
      'dayNames' => 
      array (
        0 => 'Domingo',
        1 => 'Segunda',
        2 => 'Terça',
        3 => 'Quarta',
        4 => 'Quinta',
        5 => 'Sexta',
        6 => 'Sábado',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dom',
        1 => 'Seg',
        2 => 'Ter',
        3 => 'Qua',
        4 => 'Qui',
        5 => 'Sex',
        6 => 'Sáb',
      ),
      'dayNamesMin' => 
      array (
        0 => 'D',
        1 => 'S',
        2 => 'T',
        3 => 'Q',
        4 => 'Q',
        5 => 'S',
        6 => 'S',
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
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Srta.',
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
        'on' => 'Em',
        'notOn' => 'Menos em',
        'after' => 'Anterior',
        'before' => 'Posterior',
        'between' => 'Entre',
        'today' => 'Hoje',
        'past' => 'Passado',
        'future' => 'Futuro',
        'currentMonth' => 'Mês corrente',
        'lastMonth' => 'Último mês',
        'nextMonth' => 'Next Month',
        'currentQuarter' => 'Trimestre corrente',
        'lastQuarter' => 'Último trimestre',
        'currentYear' => 'Ano corrente',
        'lastYear' => 'Último ano',
        'lastSevenDays' => 'Last 7 Days',
        'lastXDays' => 'Last X Days',
        'nextXDays' => 'Next X Days',
        'ever' => 'Ever',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
      ),
      'searchRanges' => 
      array (
        'is' => 'Is',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Is From Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Equals',
        'like' => 'Is Like (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'contains' => 'Contains',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'notEquals' => 'Not Equals',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Igual',
        'notEquals' => 'Diferente',
        'greaterThan' => 'Maior que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Maior ou igual',
        'lessThanOrEquals' => 'Menor ou igual',
        'between' => 'Entre',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nenhum',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Celular',
        'Office' => 'Comercial',
        'Fax' => 'Fax',
        'Home' => 'Residencial',
        'Other' => 'Outro',
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
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Negrito',
          'italic' => 'Itálico',
          'underline' => 'Sublinhado',
          'strike' => 'Strike',
          'clear' => 'Remover estilo da fonte',
          'height' => 'Altura da linha',
          'name' => 'Font Family',
          'size' => 'Tamanho da fonte',
          'strikethrough' => 'Riscado',
        ),
        'image' => 
        array (
          'image' => 'Imagem',
          'insert' => 'Inserir imagem',
          'resizeFull' => 'Resize Full',
          'resizeHalf' => 'Resize Half',
          'resizeQuarter' => 'Resize Quarter',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Arraste uma imagem para cá',
          'selectFromFiles' => 'Selecione a partir dos arquivos',
          'url' => 'URL da image',
          'remove' => 'Remove Image',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Inserir link',
          'unlink' => 'Remover link',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto para exibir',
          'url' => 'Para qual URL esse link leva?',
          'openInNewWindow' => 'Abrir em uma nova janela',
        ),
        'video' => 
        array (
          'video' => 'Vídeo',
          'videoLink' => 'Link para vídeo',
          'insert' => 'Inserir vídeo',
          'url' => 'URL do vídeo?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, DailyMotion, ou Youku)',
        ),
        'table' => 
        array (
          'table' => 'Tabela',
        ),
        'hr' => 
        array (
          'insert' => 'Inserir linha horizontal',
        ),
        'style' => 
        array (
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Citação',
          'pre' => 'Código',
          'h1' => 'Título 1',
          'h2' => 'Título 2',
          'h3' => 'Título 3',
          'h4' => 'Título 4',
          'h5' => 'Título 5',
          'h6' => 'Título 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista com marcadores',
          'ordered' => 'Lista numerada',
        ),
        'options' => 
        array (
          'help' => 'Ajuda',
          'fullscreen' => 'Tela cheia',
          'codeview' => 'Ver código-fonte',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraph',
          'outdent' => 'Outdent',
          'indent' => 'Indent',
          'left' => 'Align left',
          'center' => 'Align center',
          'right' => 'Align right',
          'justify' => 'Justify full',
        ),
        'color' => 
        array (
          'recent' => 'Cor recente',
          'more' => 'Mais cores',
          'background' => 'Fundo',
          'foreground' => 'Fonte',
          'transparent' => 'Transparente',
          'setTransparent' => 'Fundo transparente',
          'reset' => 'Restaurar',
          'resetToDefault' => 'Restaurar padrão',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Atalhos do teclado',
          'close' => 'Fechar',
          'textFormatting' => 'Formatação de texto',
          'action' => 'Ação',
          'paragraphFormatting' => 'Formatação de parágrafo',
          'documentStyle' => 'Estilo de documento',
        ),
        'history' => 
        array (
          'undo' => 'Desfazer',
          'redo' => 'Refazer',
        ),
        ' paragraph' => 
        array (
          'paragraph' => 'Parágrafo',
          'outdent' => 'Menor tabulação',
          'indent' => 'Maior tabulação',
          'left' => 'Alinhar à esquerda',
          'center' => 'Alinhar ao centro',
          'right' => 'Alinha à direita',
          'justify' => 'Justificado',
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
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Retornar a Importação',
      'Run Import' => 'Executar importação',
      'Back' => 'Voltar',
      'Field Mapping' => 'Mapeamento de Campos',
      'Default Values' => 'Valores Padrão',
      'Add Field' => 'Adicionar Campo',
      'Created' => 'Criado',
      'Updated' => 'Atualizado',
      'Result' => 'Resultado',
      'Show records' => 'Exibir Registros',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
      'Create Only' => 'Create Only',
      'Create and Update' => 'Create & Update',
      'Update Only' => 'Update Only',
      'Update by' => 'Update by',
      'Set as Not Duplicate' => 'Set as Not Duplicate',
      'File (CSV)' => 'File (CSV)',
      'First Row Value' => 'First Row Value',
      'Skip' => 'Skip',
      'Header Row Value' => 'Header Row Value',
      'Field' => 'Field',
      'What to Import?' => 'What to Import?',
      'Entity Type' => 'Entity Type',
      'What to do?' => 'What to do?',
      'Properties' => 'Properties',
      'Header Row' => 'Header Row',
      'Person Name Format' => 'Person Name Format',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Field Delimiter',
      'Date Format' => 'Date Format',
      'Decimal Mark' => 'Decimal Mark',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Time Format',
      'Currency' => 'Currency',
      'Preview' => 'Preview',
      'Next' => 'Next',
      'Step 1' => 'Step 1',
      'Step 2' => 'Step 2',
      'Double Quote' => 'Double Quote',
      'Single Quote' => 'Single Quote',
      'Imported' => 'Imported',
      'Duplicates' => 'Duplicates',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
      'Revert' => 'Reverter',
    ),
    'messages' => 
    array (
      'utf8' => 'Deve estar codificado com UTF-8',
      'duplicatesRemoved' => 'Duplicates removed',
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
      'entityType' => 'Entity Type',
      'imported' => 'Imported Records',
      'duplicates' => 'Duplicate Records',
      'updated' => 'Updated Records',
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
      'name' => 'Nome',
      'emailAddress' => 'Email Address',
      'team' => 'Time',
      'status' => 'Status',
      'assignToUser' => 'Atribuído a',
      'host' => 'Host',
      'username' => 'Usuário',
      'password' => 'Senha',
      'port' => 'Porta',
      'monitoredFolders' => 'Pastas Monitoradas',
      'trashFolder' => 'Pasta da Lixeira',
      'ssl' => 'SSL',
      'createCase' => 'Criar Atendimento',
      'reply' => 'Responder',
      'caseDistribution' => 'Distribuição do Atendimento',
      'replyEmailTemplate' => 'Template do E-mail de Resposta',
      'replyFromAddress' => 'E-mail de Resposta (From)',
      'replyToAddress' => 'Responder para o Endereço',
      'replyFromName' => 'Nome de Resposta (FromName)',
      'targetUserPosition' => 'Posição do usuário alvo',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'For all team users',
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
      'reply' => 'Notificar rementente que seus e-mails foram recebidos.',
      'createCase' => 'Criar automaticamente um atendimento para os e-mais recebidos.',
      'replyToAddress' => 'Especifique o endereço de e-mail desta caixa postal para que as respostas cheguem aqui.',
      'caseDistribution' => 'Como os atendimentos serão distribuídos. Assinados diretamente ao usuário ou entregues ao time.',
      'assignToUser' => 'Usuário responsável pelos e-mails/atendimentos.',
      'team' => 'Time que será relacionado aos e-mails/atendimentos.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Define a posição dos usuários para quem serão distribuídos os atendimentos.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
    ),
    'links' => 
    array (
      'filters' => 'Filters',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
      ),
      'caseDistribution' => 
      array (
        '' => 'None',
        'Direct-Assignment' => 'Atribuição Direta',
        'Round-Robin' => 'Rodízio',
        'Least-Busy' => 'Menos Ocupado',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'IMAP' => 'IMAP',
      'Actions' => 'Ações',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Não foi possível conectar ao servidor IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Habilitado',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'URL de Redirecionamento',
      'apiKey' => 'API Key',
    ),
    'titles' => 
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Selecione uma integração no menu.',
      'noIntegrations' => 'Nenhuma integração disponível.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtenha as credenciais OAuth 2.0 do Google Developers Console.</b></p><p>Visite o <a href="https://console.developers.google.com/project">Google Developers Console</a> para obter as credenciais OAuth 2.0 como Client ID e Client Secret comuns ao Google e ao EspoCRM.</p>',
      'GoogleMaps' => '<p>Obtain API key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Execute At',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Service',
      'method' => 'Method (deprecated)',
      'methodName' => 'Method',
      'scheduledJob' => 'Scheduled Job',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Running' => 'Running',
        'Failed' => 'Failed',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Width (%)',
      'link' => 'Link',
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
        'left' => 'Left',
        'right' => 'Right',
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
      'post' => 'Postagem',
      'attachments' => 'Anexos',
      'targetType' => 'Target',
      'teams' => 'Teams',
      'users' => 'Users',
      'portals' => 'Portals',
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
      'all' => 'All',
      'posts' => 'Posts',
      'updates' => 'Updates',
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
      'writeMessage' => 'Write your message here',
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
      'name' => 'Name',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Is Active',
      'isDefault' => 'Is Default',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Quick Create List',
      'companyLogo' => 'Logo',
      'theme' => 'Theme',
      'language' => 'Language',
      'dashboardLayout' => 'Dashboard Layout',
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'defaultCurrency' => 'Default Currency',
      'customUrl' => 'Custom URL',
      'customId' => 'Custom ID',
    ),
    'links' => 
    array (
      'users' => 'Users',
      'portalRoles' => 'Roles',
      'notes' => 'Notes',
      'articles' => 'Knowledge Base Articles',
    ),
    'tooltips' => 
    array (
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.',
    ),
    'labels' => 
    array (
      'Create Portal' => 'Create Portal',
      'User Interface' => 'User Interface',
      'General' => 'General',
      'Settings' => 'Settings',
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
      'users' => 'Users',
    ),
    'tooltips' => 
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' => 
    array (
      'Access' => 'Access',
      'Create PortalRole' => 'Create Portal Role',
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
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de milhar',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticação',
      'smtpSecurity' => 'Segurança',
      'smtpUsername' => 'Usuário',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Senha',
      'smtpEmailAddress' => 'Endereço de E-mail',
      'exportDelimiter' => 'Delimitador de Exportação',
      'receiveAssignmentEmailNotifications' => 'Receber e-mail de notificação quando designado',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'autoFollowEntityTypeList' => 'Auto-Seguir',
      'signature' => 'Assinatura do E-mail',
      'dashboardTabList' => 'Lista em abas',
      'defaultReminders' => 'Default Reminders',
      'theme' => 'Theme',
      'useCustomTabList' => 'Custom Tab List',
      'tabList' => 'Tab List',
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
        0 => 'Domingo',
        1 => 'Segunda',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notificações',
      'User Interface' => 'User Interface',
      'SMTP' => 'SMTP',
      'Misc' => 'Misc',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'O usuário seguirá automaticamente todos os novos registros das entidades selecionadas, verá informações no fluxo e receberá notificações.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Regras',
      'assignmentPermission' => 'Atribuição de Permissões',
      'userPermission' => 'User Permission',
      'portalPermission' => 'Portal Permission',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' => 
    array (
      'users' => 'Usuários',
      'teams' => 'Times',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Premite restringir a habilidade para usuários atribuírem registros para outros usuários.

tudo - nenhuma restrição

time - pode atribuir para usuários do seu time

enhum - pode atribuir apenas para si mesmo',
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
      'Access' => 'Acesso',
      'Create Role' => 'Criar Regra',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'indefinido',
        'enabled' => 'habilitado',
        'disabled' => 'desabilitado',
      ),
      'levelList' => 
      array (
        'all' => 'tudo',
        'team' => 'time',
        'account' => 'account',
        'contact' => 'contact',
        'own' => 'próprio',
        'no' => 'nenhum',
        'yes' => 'yes',
        'not-set' => 'not-set',
      ),
      'assignmentPermission' => 
      array (
        'all' => 'tudo',
        'team' => 'time',
        'not-set' => 'não definido',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Ler',
      'edit' => 'Editar',
      'delete' => 'Excluir',
      'stream' => 'Stream',
      'create' => 'Create',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Todas as modificações no controle de acesso serão aplicadas após a limpeza do cache.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'job' => 'Tarefa',
      'scheduling' => 'Agendando (notação do crontab)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Agendar Tarefa',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Limpar',
        'CheckInboundEmails' => 'Verificar e-mails recebidos',
        'CheckEmailAccounts' => 'Verificar contas de e-mail pessoais',
        'SendEmailReminders' => 'Enviar lembretes por e-mail',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do EspoCRM:',
        'mac' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do EspoCRM:',
        'windows' => 'Nota: Crie um arquivo em lote com os seguintes comandos para executar as tarefas agendadas do EspoCRM no agendador de tarefas do Windows:',
        'default' => 'Nota: Adicione este comando Cron Job (Tarefa agendada):',
      ),
      'status' => 
      array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
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
      'executionTime' => 'Tempo de execução',
      'target' => 'Target',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usar Cache',
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de Milhar',
      'decimalMark' => 'Deparador Decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'baseCurrency' => 'Moeda Base',
      'currencyRates' => 'Conversão de Moedas',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'companyLogo' => 'Logo da Empresa',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticação',
      'smtpSecurity' => 'Segurança',
      'smtpUsername' => 'Usuário',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Senha',
      'outboundEmailFromName' => 'Nome do rementente',
      'outboundEmailFromAddress' => 'E-mail do rementente',
      'outboundEmailIsShared' => 'Compartilhado',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Registros por Página (Menor)',
      'tabList' => 'Lista de abas',
      'quickCreateList' => 'Lista de Criação Rápida',
      'exportDelimiter' => 'Delimitador de exportação',
      'globalSearchEntityList' => 'Pesquisa Global de Entidades',
      'authenticationMethod' => 'Método de Autenticação',
      'ldapHost' => 'Host',
      'ldapPort' => 'Porta',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Usuário',
      'ldapPassword' => 'Senha',
      'ldapBindRequiresDn' => 'Ligação exige Dn',
      'ldapBaseDn' => 'Dn Base',
      'ldapAccountCanonicalForm' => 'Formulário Canônico de Conta',
      'ldapAccountDomainName' => 'Nome de Domínio da Conta',
      'ldapTryUsernameSplit' => 'Tentar dividir o Nome de Usuário',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Criar usuário no EspoCRM',
      'ldapSecurity' => 'Segurança',
      'ldapUserLoginFilter' => 'Filtro para Login de Usuário',
      'ldapAccountDomainNameShort' => 'Nome curto do Domínio da Conta',
      'ldapOptReferrals' => 'Referências Opt',
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
      'exportDisabled' => 'Desabilitar exportação (permitido apenas para administradores)',
      'assignmentNotificationsEntityList' => 'Entities to notify about upon assignment',
      'assignmentEmailNotifications' => 'Enviar notificações sobre as designações por e-mail',
      'assignmentEmailNotificationsEntityList' => 'Entidades para notificar',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'Modo B2C',
      'avatarsDisabled' => 'Desabilitar Avatares',
      'followCreatedEntities' => 'Follow created records',
      'displayListViewRecordCount' => 'Display Total Count (on List View)',
      'theme' => 'Theme',
      'userThemesDisabled' => 'Disable User Themes',
      'emailMessageMaxSize' => 'Email Max Size (Mb)',
      'massEmailMaxPerHourCount' => 'Max number of emails sent per hour',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Max number of personal email accounts per user',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'Site URL',
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
        0 => 'Domingo',
        1 => 'Segunda',
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
      'recordsPerPageSmall' => 'Contar registros nos painéis de relacionamento.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Users will automatically follow records they created.',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'If checked then users won\'t be able to select another theme.',
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
      'System' => 'Sistema',
      'Locale' => 'Idioma',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuração',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Configurações de Moeda',
      'Currency Rates' => 'Conversão de moedas',
      'Mass Email' => 'Mass Email',
      'Test Connection' => 'Test Connection',
      'Connecting' => 'Connecting...',
      'Activities' => 'Activities',
      'Admin Notifications' => 'Admin Notifications',
      'Notifications' => 'Notificações',
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
      'name' => 'Nome',
      'roles' => 'Regras',
      'positionList' => 'Lista de Posições',
    ),
    'links' => 
    array (
      'users' => 'Usuários',
      'notes' => 'Notes',
      'roles' => 'Roles',
      'inboundEmails' => 'Group Email Accounts',
    ),
    'tooltips' => 
    array (
      'roles' => 'Todos os usuários deste time terão acesso as configurações das regras selecionadas.',
      'positionList' => 'Posições disponíveis neste time. E.g. Vendedor, Gerente.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Criar Time',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'body' => 'Body',
      'entityType' => 'Entity Type',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Left Margin',
      'topMargin' => 'Top Margin',
      'rightMargin' => 'Right Margin',
      'bottomMargin' => 'Bottom Margin',
      'printFooter' => 'Print Footer',
      'footerPosition' => 'Footer Position',
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
      'Create Template' => 'Create Template',
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
      'footer' => 'Use {pageNumber} to print page number.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'userName' => 'Usuário',
      'title' => 'Título',
      'isAdmin' => 'Administrador',
      'defaultTeam' => 'Time Padrão',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telefone',
      'roles' => 'Regras',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'teamRole' => 'Posição',
      'password' => 'Senha',
      'currentPassword' => 'Current Password',
      'passwordConfirm' => 'Confirmação da Senha',
      'newPassword' => 'Nova senha',
      'newPasswordConfirm' => 'Confirme a nova senha',
      'avatar' => 'Avatar',
      'isActive' => 'Está ativo',
      'isPortalUser' => 'Is Portal User',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'sendAccessInfo' => 'Send Email with Access Info to User',
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
      'teams' => 'Times',
      'roles' => 'Regras',
      'notes' => 'Notes',
      'portals' => 'Portals',
      'portalRoles' => 'Portal Roles',
      'contact' => 'Contact',
      'accounts' => 'Accounts',
      'account' => 'Account (Primary)',
      'tasks' => 'Tasks',
      'targetLists' => 'Lista de alvos',
    ),
    'labels' => 
    array (
      'Create User' => 'Criar Usuário',
      'Generate' => 'Gerar',
      'Access' => 'Acesso',
      'Preferences' => 'Preferências',
      'Change Password' => 'Trocar Senha',
      'Teams and Access Control' => 'Times e controle de acesso',
      'Forgot Password?' => 'Esqueceu a senha?',
      'Password Change Request' => 'Solicitar troca da senha',
      'Email Address' => 'Endereço de e-mail',
      'External Accounts' => 'Contas externas',
      'Email Accounts' => 'Contas de e-mail',
      'Portal' => 'Portal',
      'Create Portal User' => 'Create Portal User',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Todos os registros criados por este usuário serão relacionados e este time por padrão.',
      'userName' => 'Letras a-z, números 0-9 e underscores são permitidos.',
      'isAdmin' => 'Usuário Admin pode acessar tudo.',
      'isActive' => 'Se desmarcado, o usuário não conseguirá logar.',
      'teams' => 'Times aos quais este usuário pertence. O controle de acesso é herdado das regras do time.',
      'roles' => 'Regras de acesso adicionais. Use se o usuário não pertence a nenhum time ou se for necessário extender o controle de acesso deste usuário.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'A senha será enviada para o email do usuário.',
      'accountInfoEmailSubject' => 'Informações da Conta',
      'accountInfoEmailBody' => 'Informações da sua conta:

Usuário: {userName}
Senha: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Solicitação para troca da senha',
      'passwordChangeLinkEmailBody' => 'Você pode atualizar sua senha usando este link {link}. Esta URL é única e expirará em breve.',
      'passwordChanged' => 'A senha foi atualizada',
      'userCantBeEmpty' => 'O nome de usuário deve ser informado',
      'wrongUsernamePasword' => 'Usuário / senha incorretos',
      'emailAddressCantBeEmpty' => 'O endereço de e-mail deve ser informado',
      'userNameEmailAddressNotFound' => 'Usuário / E-mail não localizados',
      'forbidden' => 'Proibido, por favor tente mais tarde',
      'uniqueLinkHasBeenSent' => 'Um link único foi enviado para o endereço de e-mail informado.',
      'passwordChangedByRequest' => 'A senha foi atualizada.',
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
      'onlyMyTeam' => 'Apenas meus time',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'activePortal' => 'Portal Active',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'website' => 'Website',
      'phoneNumber' => 'Telefone',
      'billingAddress' => 'Endereço de Cobrança',
      'shippingAddress' => 'Endereço de Entrega',
      'description' => 'Descrição',
      'sicCode' => 'CNPJ',
      'industry' => 'Indústria',
      'type' => 'Tipo',
      'contactRole' => 'Regra',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campanha',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'links' => 
    array (
      'contacts' => 'Contatos',
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimentos',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Reuniões (Interno)',
      'callsPrimary' => 'Ligações (Interno)',
      'tasksPrimary' => 'Tarefas (Interno)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Lista de alvos',
      'campaignLogRecords' => 'Log da Campanha',
      'campaign' => 'Campaign',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Investidor',
        'Partner' => 'Parceiro',
        'Reseller' => 'Revendedor',
      ),
      'industry' => 
      array (
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Publicidade',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotiva',
        'Banking' => 'Banco',
        'Biotechnology' => 'Biotecnologia',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Química',
        'Construction' => 'Construction',
        'Computer' => 'Computadores',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Educação',
        'Electronics' => 'Electrônicos',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finanças',
        'Food & Beverage' => 'Alimentação',
        'Grocery' => 'Grocery',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Insurance',
        'Legal' => 'Legal',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publishing',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Real Estate',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Support',
        'Sports' => 'Sports',
        'Software' => 'Software',
        'Technology' => 'Technology',
        'Telecommunications' => 'Telecommunications',
        'Television' => 'Television',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Transportation',
        'Travel' => 'Travel',
        'Venture Capital' => 'Venture Capital',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Criar Conta',
      'Copy Billing' => 'Copiar Cobrança',
      'Set Primary' => 'Set Primary',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Customers',
      'partners' => 'Partners',
      'recentlyCreated' => 'Recently Created',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mês',
      'week' => 'Semana',
      'day' => 'Dia',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Dia',
      'timeline' => 'Timeline',
    ),
    'labels' => 
    array (
      'Today' => 'Hoje',
      'Create' => 'Criar',
      'Shared' => 'Shared',
      'Add User' => 'Add User',
      'current' => 'current',
      'time' => 'time',
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
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data Final',
      'direction' => 'Direção',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'reminders' => 'Lembretes',
      'account' => 'Conta',
      'acceptanceStatus' => 'Acceptance Status',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planejado',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada',
      ),
      'direction' => 
      array (
        'Outbound' => 'Saída',
        'Inbound' => 'Entrada',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nenhum',
        'Accepted' => 'Aceita',
        'Declined' => 'Rejeitada',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Criar Ligação',
      'Set Held' => 'Marcar como realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar Convites',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planejado',
      'held' => 'Realizado',
      'todays' => 'Hoje',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'description' => 'Descrição',
      'status' => 'Status',
      'type' => 'Tipo',
      'startDate' => 'Data de início',
      'endDate' => 'Data de fim',
      'targetLists' => 'Lista de alvos',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Enviar',
      'openedCount' => 'Abertos',
      'clickedCount' => 'Clicados',
      'optedOutCount' => 'Cancelamentos',
      'bouncedCount' => 'Bounces',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounce',
      'softBouncedCount' => 'Soft Bounce',
      'leadCreatedCount' => 'Leads Criados',
      'revenue' => 'Receita',
      'revenueConverted' => 'Revenue (converted)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converted)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de alvos',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Contas',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Mass Emails',
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
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Televisão',
        'Radio' => 'Rádio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Correio',
      ),
      'status' => 
      array (
        'Planning' => 'Planejamento',
        'Active' => 'Ativa',
        'Inactive' => 'Inativa',
        'Complete' => 'Completa',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Criar Campanha',
      'Target Lists' => 'Lista de alvos',
      'Statistics' => 'Estatísticas',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Unsubscribe',
      'Mass Emails' => 'Mass Emails',
      'Email Templates' => 'Email Templates',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' => 
    array (
      'active' => 'Ativa',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'You have been unsubscribed from our mailing list.',
      'subscribedAgain' => 'You are subscribed again.',
    ),
    'tooltips' => 
    array (
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Ação',
      'actionDate' => 'Data',
      'data' => 'Dados',
      'campaign' => 'Campanha',
      'parent' => 'Alvo',
      'object' => 'Objeto',
      'application' => 'Aplicação',
      'queueItem' => 'Queue Item',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'queueItem' => 'Queue Item',
      'parent' => 'Parent',
      'object' => 'Object',
      'campaign' => 'Campaign',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Enviado',
        'Opened' => 'Aberto',
        'Opted Out' => 'Cancelado',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicado',
        'Lead Created' => 'Lead Criado',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Tudo',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sent',
      'opened' => 'Opened',
      'optedOut' => 'Opted Out',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Clicked',
      'leadCreated' => 'Lead Created',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Code to insert instead of URL',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'campaign' => 'Campaign',
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
      'name' => 'Nome',
      'number' => 'Número',
      'status' => 'Status',
      'account' => 'Conta',
      'contact' => 'Contato',
      'contacts' => 'Contacts',
      'priority' => 'Prioridade',
      'type' => 'Tipo',
      'description' => 'Descrição',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Group Email Account',
      'account' => 'Account',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Contacts',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
      'articles' => 'Knowledge Base Articles',
      'lead' => 'Lead',
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novo',
        'Assigned' => 'Designado',
        'Pending' => 'Pendente',
        'Closed' => 'Fechado',
        'Rejected' => 'Rejeitado',
        'Duplicate' => 'Duplicado',
      ),
      'priority' => 
      array (
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Questão',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Criar Atendimento',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aberto',
      'closed' => 'Fechado',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'account' => 'Conta',
      'accounts' => 'Contas',
      'phoneNumber' => 'Telefone',
      'accountType' => 'Tipo de Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'opportunityRole' => 'Regra de Oportunidade',
      'accountRole' => 'Regra',
      'description' => 'Descrição',
      'campaign' => 'Campanha',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
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
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimento',
      'targetLists' => 'Lista de Alvos',
      'campaignLogRecords' => 'Log das Campanhas',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Portal User',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Criar Contato',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Nenhum--',
        'Decision Maker' => 'Tomador de Decisão',
        'Evaluator' => 'Avaliador',
        'Influencer' => 'Influenciador',
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
      'Create Document' => 'Criar Documento',
      'Details' => 'Detalhes',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'file' => 'Arquivo',
      'type' => 'Tipo',
      'publishDate' => 'Data de Publicação',
      'expirationDate' => 'Data de expiração',
      'description' => 'Descrição',
      'accounts' => 'Accounts',
      'folder' => 'Folder',
      'formularios' => 'Formularios',
      'source' => 'Fonte',
    ),
    'links' => 
    array (
      'accounts' => 'Contas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Folder',
      'leads' => 'Leads',
      'contacts' => 'Contacts',
      'formularios' => 'Formularios',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Ativo',
        'Draft' => 'Rascunho',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado',
      ),
      'type' => 
      array (
        '' => 'None',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'License Agreement',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Ativo',
      'draft' => 'Rascunho',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Create Document Folder',
      'Manage Categories' => 'Manage Folders',
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
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Date Sent',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'Email Address',
      'massEmail' => 'Mass Email',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Mass Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Sent' => 'Sent',
        'Failed' => 'Failed',
        'Sending' => 'Sending',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Pending',
      'sent' => 'Sent',
      'failed' => 'Failed',
    ),
  ),
  'KnowledgeBaseArticle' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseArticle' => 'Create Article',
      'Any' => 'Any',
      'Send in Email' => 'Send in Email',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Attachments',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'body' => 'Body',
      'categories' => 'Categories',
      'language' => 'Language',
      'portals' => 'Portals',
    ),
    'links' => 
    array (
      'cases' => 'Cases',
      'opportunities' => 'Opportunities',
      'categories' => 'Categories',
      'portals' => 'Portals',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'In Review' => 'In Review',
        'Draft' => 'Draft',
        'Archived' => 'Archived',
        'Published' => 'Published',
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
      'published' => 'Published',
    ),
  ),
  'KnowledgeBaseCategory' => 
  array (
    'labels' => 
    array (
      'Create KnowledgeBaseCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
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
      'Converted To' => 'Convertido Para',
      'Create Lead' => 'Criar Lead',
      'Convert' => 'Converter',
      'convert' => 'converter',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'phoneNumber' => 'Telefone',
      'accountName' => 'Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'status' => 'Status',
      'source' => 'Origem',
      'opportunityAmount' => 'Valor da Oportunidade',
      'opportunityAmountConverted' => 'Valor da Oportunidade (convertido)',
      'description' => 'Descrição',
      'createdAccount' => 'Conta',
      'createdContact' => 'Contato',
      'createdOpportunity' => 'Oportunidade',
      'campaign' => 'Campanha',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Alvos',
      'campaignLogRecords' => 'Logs das Camapnhas',
      'campaign' => 'Campaign',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
      'cases' => 'Cases',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novo',
        'Assigned' => 'Atribuído',
        'In Process' => 'Em Processo',
        'Converted' => 'Convertido',
        'Recycled' => 'Reciclado',
        'Dead' => 'Morto',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Ligação',
        'Email' => 'E-mail',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Parceiro',
        'Public Relations' => 'Relacionamento',
        'Web Site' => 'Website',
        'Campaign' => 'Campanha',
        'Other' => 'Outro',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Ativo',
      'actual' => 'Atual',
      'converted' => 'Converted',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Date Start',
      'fromAddress' => 'From Address',
      'fromName' => 'From Name',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'SMTP Account',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
        'Canceled' => 'Canceled',
        'Failed' => 'Failed',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Create Mass Email',
      'Send Test' => 'Send Test',
      'System SMTP' => 'System SMTP',
      'system' => 'system',
      'group' => 'group',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Select at least one target.',
      'testSent' => 'Test email(s) supposed to be sent',
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
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data final',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'reminders' => 'Lembretes',
      'account' => 'Conta',
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
        'Planned' => 'Planejada',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nenhum',
        'Accepted' => 'Aceita',
        'Declined' => 'Rejeitada',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Criar Reunião',
      'Set Held' => 'Marcar como realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar convites',
      'on time' => 'na hora',
      'before' => 'antes',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planejada',
      'held' => 'Realizada',
      'todays' => 'Hoje',
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
      'name' => 'Nome',
      'account' => 'Conta',
      'stage' => 'Estágio',
      'amount' => 'Valor',
      'probability' => 'Probabilidade, %',
      'leadSource' => 'Origem do Lead',
      'doNotCall' => 'Não ligar',
      'closeDate' => 'Data de Fechamento',
      'contacts' => 'Contatos',
      'description' => 'Descrição',
      'amountConverted' => 'Valor (convertido)',
      'amountWeightedConverted' => 'Valor Quantificado',
      'campaign' => 'Campanha',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage',
    ),
    'links' => 
    array (
      'contacts' => 'Contatos',
      'documents' => 'Documentos',
      'campaign' => 'Campaign',
      'originalLead' => 'Original Lead',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectando',
        'Qualification' => 'Qualificação',
        'Proposal' => 'Proposta',
        'Negotiation' => 'Negociação',
        'Needs Analysis' => 'Necessita de Análise',
        'Value Proposition' => 'Proposta de Valor',
        'Id. Decision Makers' => 'Identificação dos Decisores',
        'Perception Analysis' => 'Análise da Percepção',
        'Proposal/Price Quote' => 'Proposta/Cotação',
        'Negotiation/Review' => 'Negociação/Revisão',
        'Closed Won' => 'Ganha',
        'Closed Lost' => 'Perdida',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Criar Oportunidade',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aberta',
      'won' => 'Ganha',
      'lost' => 'Lost',
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
      'name' => 'Nome',
      'description' => 'Descrção',
      'entryCount' => 'Contagem de entrada',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campanhas',
      'endDate' => 'Data final',
      'targetLists' => 'Lista de alvos',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' => 
    array (
      'accounts' => 'Contas',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'campaigns' => 'Campanhas',
      'massEmails' => 'Mass Emails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Televisão',
        'Radio' => 'Rádio',
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
      'Create TargetList' => 'Criar Lista de Alvos',
      'Opted Out' => 'Opted Out',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Até a Data',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Prioridade',
      'description' => 'Descrição',
      'isOverdue' => 'Atrasada',
      'account' => 'Account',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Attachments',
      'reminders' => 'Reminders',
      'contact' => 'Contact',
    ),
    'links' => 
    array (
      'attachments' => 'Attachments',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Não Iniciada',
        'Started' => 'Iniciada',
        'Completed' => 'Completa',
        'Canceled' => 'Cancelada',
        'Deferred' => 'Adiada',
      ),
      'priority' => 
      array (
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Criar Tarefa',
      'Complete' => 'Concluída',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Atual',
      'completed' => 'Completa',
      'deferred' => 'Adiada',
      'todays' => 'Hoje',
      'overdue' => 'Atrasada',
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
      'Create Beneficiario' => 'Criar Beneficiario',
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
      'Create Beneficios' => 'Criar Beneficios',
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
      'Create Categoria' => 'Criar Categoria',
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
      'Create Ciudad' => 'Criar Ciudad',
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
      'Create Comuna' => 'Criar Comuna',
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
      'Create DoctosBeneficio' => 'Criar Doctos_beneficio',
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
      'Create Empresa' => 'Criar Empresa',
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
      'Create Formularios' => 'Criar Formulario',
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
      'Create MotivoReclamo' => 'Criar MotivoReclamo',
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
      'Create Proveedor' => 'Criar Proveedor',
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
      'Create Reclamo' => 'Criar Reclamo',
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
      'Create Rol' => 'Criar Rol',
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
      'Create Solicitudes' => 'Criar Solicitudes',
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
      'Create Subcategoria' => 'Criar Subcategoria',
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
      'Create Trabajador' => 'Criar Trabajador',
    ),
    'tooltips' => 
    array (
      'telefono' => 'Ej. +56 2 29458565',
    ),
  ),
  'Prospect' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'accountName' => 'Conta',
      'phone' => 'Telefone',
      'phoneOffice' => 'Telefone (Comercial)',
      'fax' => 'Fax',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'description' => 'Descrição',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Prospect' => 'Criar Prospecto',
      'Convert to Lead' => 'Converter para Lead',
    ),
  ),
);
?>