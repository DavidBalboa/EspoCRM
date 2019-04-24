<?php
return array (
  'ActionHistoryRecord' =>
  array (
    'fields' =>
    array (
      'user' => 'Usuario',
      'action' => 'Acción',
      'createdAt' => 'Fecha',
      'target' => 'Entidad objetivo',
      'targetType' => 'Tipo de entidad',
      'authToken' => 'Token de autenticación',
      'ipAddress' => 'Dirección IP',
      'authLogRecord' => 'Auth Log Record',
    ),
    'links' =>
    array (
      'authToken' => 'Token de autenticación',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'Usuario',
      'target' => 'Objetivo',
    ),
    'presetFilters' =>
    array (
      'onlyMy' => 'Solo míos',
    ),
    'options' =>
    array (
      'action' =>
      array (
        'read' => 'Leer',
        'update' => 'Guardar',
        'delete' => 'Eliminar',
        'create' => 'Crear',
      ),
    ),
  ),
  'Admin' =>
  array (
    'labels' =>
    array (
      'Enabled' => 'Activado',
      'Disabled' => 'Desactivado',
      'System' => 'Sistema',
      'Users' => 'Usuarios',
      'Email' => 'Correos',
      'Data' => 'Datos',
      'Customization' => 'Personalizaciones',
      'Available Fields' => 'Campos disponibles',
      'Layout' => 'Diseño',
      'Entity Manager' => 'Entidades',
      'Add Panel' => 'Añadir Panel',
      'Add Field' => 'Añadir Campo',
      'Settings' => 'Ajustes',
      'Scheduled Jobs' => 'Tareas programadas',
      'Upgrade' => 'Actualizar',
      'Clear Cache' => 'Limpiar caché',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Equipos',
      'Roles' => 'Roles',
      'Portal' => 'Portales',
      'Portals' => 'Portales',
      'Portal Roles' => 'Roles del portal',
      'Portal Users' => 'Usuarios del portal',
      'Outbound Emails' => 'Salientes',
      'Group Email Accounts' => 'Grupales',
      'Personal Email Accounts' => 'Personales',
      'Inbound Emails' => 'Entrantes',
      'Email Templates' => 'Plantillas',
      'Import' => 'Importar',
      'Layout Manager' => 'Diseño',
      'User Interface' => 'Interfaz de usuario',
      'Auth Tokens' => 'Tokens',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autenticación',
      'Currency' => 'Moneda',
      'Integrations' => 'Integración',
      'Extensions' => 'Extensiones',
      'Upload' => 'Subir',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Actualizando',
      'Upgraded successfully' => 'Actualización exitosa',
      'Installed successfully' => 'Instalado de forma exitosa',
      'Ready for upgrade' => 'Listo para actualizar',
      'Run Upgrade' => 'Ejecutar actualización',
      'Install' => 'Instalar',
      'Ready for installation' => 'Listo para instalación',
      'Uninstalling...' => 'Desinstalando',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Crear entidad',
      'Edit Entity' => 'Editar Entidad',
      'Create Link' => 'Crear enlace',
      'Edit Link' => 'Editar Enlace',
      'Notifications' => 'Notificaciones',
      'Jobs' => 'Trabajos',
      'Reset to Default' => 'Aplicar a valores por defecto',
      'Email Filters' => 'Filtros',
      'Action History' => 'Histórico',
      'Label Manager' => 'Etiquetas',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
    ),
    'layouts' =>
    array (
      'list' => 'Lista',
      'detail' => 'Detalle',
      'listSmall' => 'Lista (pequeña)',
      'detailSmall' => 'Detalle (Pequeño)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Filtros de Búsqueda',
      'massUpdate' => 'Actualización masiva',
      'relationships' => 'Paneles de relaciones',
      'sidePanelsDetail' => 'Paneles laterales (detalle)',
      'sidePanelsEdit' => 'Paneles laterales (editar)',
      'sidePanelsDetailSmall' => 'Paneles laterales (detalle pequeño)',
      'sidePanelsEditSmall' => 'Paneles laterales (editar pequeño)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convertir posible cliente',
      'listForAccount' => 'Listado (por Cuentas)',
      'listForContact' => 'List (for Contact)',
    ),
    'fieldTypes' =>
    array (
      'address' => 'Dirección',
      'array' => 'Lista ordenable',
      'foreign' => 'Clave foránea',
      'duration' => 'Duración',
      'password' => 'Contraseña',
      'personName' => 'Nombre',
      'autoincrement' => 'Incremental',
      'bool' => 'SI / NO',
      'currency' => 'Moneda',
      'currencyConverted' => 'Moneda (convertido)',
      'date' => 'Fecha',
      'datetime' => 'Fecha y hora',
      'datetimeOptional' => 'Fecha / Fecha y hora',
      'email' => 'Correo electrónico',
      'enum' => 'Lista',
      'enumInt' => 'Lista de enteros',
      'enumFloat' => 'Lista de decimales',
      'float' => 'Decimal',
      'int' => 'Entero',
      'link' => 'Enlace',
      'linkMultiple' => 'Enlace múltiple',
      'linkParent' => 'Enlace Padre',
      'phone' => 'Teléfono',
      'text' => 'Área de texto simple',
      'url' => 'Url',
      'varchar' => 'Texto',
      'file' => 'Archivo',
      'image' => 'Imagen',
      'multiEnum' => 'Lista múltiple',
      'attachmentMultiple' => 'Adjuntos múltiples',
      'rangeInt' => 'Rango de enteros',
      'rangeFloat' => 'Rango de decimales',
      'rangeCurrency' => 'Rango de moneda',
      'wysiwyg' => 'Área de texto con editor',
      'map' => 'Mapa',
      'number' => 'Número',
      'colorpicker' => 'Selector de color',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object',
      'multienim' => 'Lista múltiple',
    ),
    'fields' =>
    array (
      'type' => 'Tipo',
      'name' => 'Nombre',
      'label' => 'Etiqueta',
      'tooltipText' => 'Texto de la ayuda',
      'required' => 'Requerido',
      'default' => 'Por defecto',
      'maxLength' => 'Longitud máxima',
      'options' => 'Ajustes',
      'after' => 'Después (campo)',
      'before' => 'Antes (campo)',
      'link' => 'Enlace',
      'field' => 'Campo',
      'min' => 'Mínimo',
      'max' => 'Máximo',
      'translation' => 'Traducción',
      'previewSize' => 'Tamaño de vista previa',
      'noEmptyString' => 'No están permitidos los valores de cadenas vacías',
      'defaultType' => 'Tipo por defecto',
      'seeMoreDisabled' => 'Desactivar cortar texto',
      'entityList' => 'Lista de entidades',
      'isSorted' => '¿Se debe ordenar?',
      'audited' => 'Auditada',
      'trim' => 'Recortar',
      'height' => 'Altura (px)',
      'minHeight' => 'Altura mínima (px)',
      'provider' => 'Proveedor',
      'typeList' => 'Tipo de lista',
      'rows' => 'Número de filas del área de texto',
      'lengthOfCut' => 'Longitud del corte',
      'sourceList' => 'Lista de tomas de contacto',
      'prefix' => 'Prefijo',
      'nextNumber' => 'Siguiente Número',
      'padLength' => 'Longitud del relleno',
      'disableFormatting' => 'Desactivar formateo',
      'dynamicLogicVisible' => 'Condiciones para hacer el campo visible',
      'dynamicLogicReadOnly' => 'Condiciones para hacer el campo solo lectura',
      'dynamicLogicRequired' => 'Condiciones para hacer el campo obligatorio',
      'dynamicLogicOptions' => 'Opciones condicionales',
      'probabilityMap' => 'Probabilidades de la etapa (%)',
      'readOnly' => 'Solo lectura',
      'maxFileSize' => 'Tamaño máximo de archivo (MB)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
    ),
    'messages' =>
    array (
      'upgradeVersion' => 'EspoCRM se actualizará a la versión <strong>{version}</ strong>. Por favor sea paciente ya que esto puede tomar varios minutos.',
      'upgradeDone' => 'EspoCRM se ha actualizado a la versión <strong>{version}</ strong>.',
      'upgradeBackup' => 'Recomendamos hacer una copia de seguridad de los archivos y datos de EspoCRM antes de actualizar.',
      'thousandSeparatorEqualsDecimalMark' => 'El símbolo de separador de miles no puede ser el mismo que el de punto decimal.',
      'userHasNoEmailAddress' => 'El usuario no tiene dirección de correo electrónico.',
      'selectEntityType' => 'Seleccione el tipo de entidad en el menú de la izquierda.',
      'selectUpgradePackage' => 'Seleccione el paquete para actualizar',
      'downloadUpgradePackage' => 'Si necesita paquetes de actualización puede descargarlos desde <a href=\'{url}\'>acá</a>.',
      'selectLayout' => 'Seleccione el diseño necesario en el menú de la izquierda y edítelo.',
      'selectExtensionPackage' => 'Seleccione el paquete de la extensión',
      'extensionInstalled' => 'La extensión {name} {version} ha sido instalada',
      'installExtension' => 'La extensión {name} {version} está lista para ser instalada.',
      'cronIsNotConfigured' => 'Las tareas programadas no se están ejecutando. Siga las <a target="_blank" href="https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab">instrucciones</a> para configurar las tareas CRON.',
      'newVersionIsAvailable' => 'La nueva versión de EspoCRM {latestVersion} está disponible.',
      'newExtensionVersionIsAvailable' => 'El nuevo lanzamiento {latestVersion} de {extensionName} está disponible.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
    ),
    'descriptions' =>
    array (
      'settings' => 'Ajustes generales del sistema.',
      'scheduledJob' => 'Trabajos que se ejecutan en segundo plano (CRON).',
      'upgrade' => 'Actualiza EspoCRM.',
      'clearCache' => 'Limpia toda la memoria caché del sistema.',
      'rebuild' => 'Reconstruir el sistema y limpia la caché.',
      'users' => 'Gestión de usuarios.',
      'teams' => 'Gestión de equipos.',
      'roles' => 'Gestión de roles.',
      'portals' => 'Gestión de portales.',
      'portalRoles' => 'Roles para el portal.',
      'portalUsers' => 'Usuarios del portal.',
      'outboundEmails' => 'Ajustes para los correos del sistema y de envíos masivos.',
      'groupEmailAccounts' => 'Ajustes de cuentas de correo grupales. Ejemplo: casilla de soporte.',
      'personalEmailAccounts' => 'Ajustes de cuentas de correo personales de los usuarios.',
      'emailTemplates' => 'Plantillas para de correos salientes.',
      'import' => 'Importar datos desde CSV.',
      'layoutManager' => 'Personalizar diseños (listas, detalles, editar, buscar, actualización masiva).',
      'entityManager' => 'Crear y editar entidades personalizadas. Administrar campos y relaciones.',
      'userInterface' => 'Configurar interfaz de usuario: Logo, tema, menu, etc.',
      'authTokens' => 'Sesiones de usuarios activas. Direcciones IP y última fecha de acceso.',
      'authentication' => 'Ajustes de autenticación.',
      'currency' => 'Ajustes de moneda y tipos de cambio.',
      'extensions' => 'Instalar o desinstalar extensiones.',
      'integrations' => 'Integración con los servicios de terceros.',
      'notifications' => 'Ajustes de notificaciones del sistema y por correo electrónico.',
      'inboundEmails' => 'Ajustes para los correos entrantes.',
      'emailFilters' => 'Filtros para los correos entrantes.',
      'actionHistory' => 'Registro de las acciones del usuario.',
      'labelManager' => 'Personaliza las etiquetas de las aplicaciones.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
    ),
    'options' =>
    array (
      'previewSize' =>
      array (
        'x-small' => 'Muy Pequeño',
        'small' => 'Pequeño',
        'medium' => 'Mediano',
        'large' => 'Grande',
      ),
    ),
    'logicalOperators' =>
    array (
      'and' => 'Y',
      'or' => 'O',
      'not' => 'NO',
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
      'Document' => 'Insertar documento',
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
      'user' => 'Usuario',
      'ipAddress' => 'Dirección IP',
      'lastAccess' => 'Fecha del último acceso',
      'createdAt' => 'Fecha de acceso',
      'isActive' => 'Está activo',
      'portal' => 'Portal',
    ),
    'links' =>
    array (
      'actionHistoryRecords' => 'Histórico',
    ),
    'presetFilters' =>
    array (
      'active' => 'Activo',
      'inactive' => 'Inactivo',
    ),
    'labels' =>
    array (
      'Set Inactive' => 'Establecer Inactivo',
    ),
    'massActions' =>
    array (
      'setInactive' => 'Establecer Inactivo',
    ),
  ),
  'DashletOptions' =>
  array (
    'fields' =>
    array (
      'title' => 'Título',
      'dateFrom' => 'Fecha desde',
      'dateTo' => 'Fecha hasta',
      'autorefreshInterval' => 'Actualizar cada:',
      'displayRecords' => 'Mostrar Registros',
      'isDoubleHeight' => 'Altitud 2x',
      'mode' => 'Modo',
      'enabledScopeList' => 'Qué mostrar',
      'users' => 'Usuarios',
      'entityType' => 'Tipo de entidad',
      'primaryFilter' => 'Filtro principal',
      'boolFilterList' => 'Filtros adicionales',
      'sortBy' => 'Ordenar (campo)',
      'sortDirection' => 'Ordenar (dirección)',
      'expandedLayout' => 'Diseño',
      'dateFilter' => 'Date Filter',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage',
    ),
    'options' =>
    array (
      'mode' =>
      array (
        'agendaWeek' => 'Semana (orden del día)',
        'basicWeek' => 'Semana',
        'month' => 'Mes',
        'basicDay' => 'Día',
        'agendaDay' => 'Día (agenda)',
        'timeline' => 'Línea de tiempo',
      ),
    ),
    'messages' =>
    array (
      'selectEntityType' => 'Seleccione el tipo de entidad en las opciones de la caja.',
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
        'equals' => 'Es igual',
        'notEquals' => 'No es igual',
        'greaterThan' => 'Es mayor que',
        'lessThan' => 'Es menor que',
        'greaterThanOrEquals' => 'Es mayor o igual que',
        'lessThanOrEquals' => 'Es menor o igual que',
        'in' => 'Está en',
        'notIn' => 'No está en',
        'inPast' => 'Es antes de hoy',
        'inFuture' => 'Es después de hoy',
        'isToday' => 'Es hoy',
        'isTrue' => 'Es verdadero',
        'isFalse' => 'Es falso',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No está vacío',
        'contains' => 'Contiene',
        'notContains' => 'No Contiene',
        'has' => 'Contiene',
        'notHas' => 'No Contiene',
      ),
    ),
  ),
  'Email' =>
  array (
    'fields' =>
    array (
      'name' => 'Asunto',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateSent' => 'Fecha de envío',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'CCO',
      'replyTo' => 'Responder a',
      'replyToString' => 'Responder a (string)',
      'isHtml' => 'Es HTML',
      'body' => 'Cuerpo',
      'bodyPlain' => 'Cuerpo (plano)',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'selectTemplate' => 'Seleccione una plantilla',
      'fromEmailAddress' => 'De (email)',
      'toEmailAddresses' => 'A (email)',
      'emailAddress' => 'Dirección de correo electrónico',
      'deliveryDate' => 'Fecha de entrega',
      'account' => 'Cuenta',
      'users' => 'Usuarios',
      'replied' => 'Es una respuesta a:',
      'replies' => 'Respondiste en:',
      'isRead' => 'Es leído',
      'isNotRead' => 'No leído',
      'isImportant' => 'Es importante',
      'isReplied' => 'Tiene respuesta',
      'isNotReplied' => 'No se respondieron',
      'isUsers' => 'Es del usuario',
      'inTrash' => 'En papelera',
      'sentBy' => 'Enviado por',
      'folder' => 'Carpeta',
      'inboundEmails' => 'Cuentas grupales',
      'emailAccounts' => 'Cuentas personales',
      'hasAttachment' => 'Tiene adjunto',
      'assignedUsers' => 'Usuarios asignados',
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
      'replied' => 'Es una respuesta a:',
      'replies' => 'Respondiste en:',
      'inboundEmails' => 'Cuentas grupales',
      'emailAccounts' => 'Cuentas personales',
      'assignedUsers' => 'Usuarios asignados',
      'sentBy' => 'Enviado por',
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
        'Draft' => 'Borrador',
        'Sending' => 'Enviando',
        'Sent' => 'Enviado',
        'Archived' => 'Archivado',
        'Received' => 'Recibido',
        'Failed' => 'Falló',
      ),
    ),
    'labels' =>
    array (
      'Create Email' => 'Nuevo correo archivado',
      'Archive Email' => 'Nuevo correo archivado',
      'Compose' => 'Nuevo',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a todos',
      'Forward' => 'Reenviar',
      'Original message' => 'Mensaje original',
      'Forwarded message' => 'Mensaje reenviado',
      'Email Accounts' => 'Ir a cuentas de correo personales',
      'Inbound Emails' => 'Ir a cuentas de correo grupales',
      'Email Templates' => 'Plantillas de correo',
      'Send Test Email' => 'Enviar correo electrónico de prueba',
      'Send' => 'Enviar',
      'Email Address' => 'Correo electrónico',
      'Mark Read' => 'Marcar como leído',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Guardar borrador',
      'Mark all as read' => 'Marcar todos como leídos',
      'Show Plain Text' => 'Ver en texto plano',
      'Mark as Important' => 'Marcar como importante',
      'Unmark Importance' => 'Marcar como No importante',
      'Move to Trash' => 'Mover a la papelera',
      'Retrieve from Trash' => 'Recuperar de la papelera',
      'Move to Folder' => 'Mover a la carpeta',
      'Filters' => 'Filtros',
      'Folders' => 'Ir a carpetas de correo',
      'Create Lead' => 'Crear posible cliente',
      'Create Contact' => 'Crear contacto',
      'Add to Contact' => 'Agregar a contacto',
      'Add to Lead' => 'Agregar a posible cliente',
      'Create Task' => 'Crear tarea',
      'Create Case' => 'Crear ticket',
    ),
    'messages' =>
    array (
      'noSmtpSetup' => 'Sin configuración SMTP. {link}.',
      'testEmailSent' => 'El correo de prueba ha sido enviado.',
      'emailSent' => 'El correo electrónico ha sido enviada',
      'savedAsDraft' => 'Guardado como borrador',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?',
    ),
    'presetFilters' =>
    array (
      'sent' => 'Enviados',
      'archived' => 'Archivado',
      'inbox' => 'Bandeja de entrada',
      'drafts' => 'Borradores',
      'trash' => 'Papelera',
      'important' => 'Importante',
    ),
    'massActions' =>
    array (
      'markAsRead' => 'Marcar como leído',
      'markAsNotRead' => 'Marcar como No leído',
      'markAsImportant' => 'Marcar como importante',
      'markAsNotImportant' => 'Marcar como No importante',
      'moveToTrash' => 'Mover a la papelera',
      'moveToFolder' => 'Mover a la carpeta',
      'retrieveFromTrash' => 'Recuperar de la papelera',
    ),
  ),
  'EmailAccount' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre de la cuenta',
      'status' => 'Estado',
      'host' => 'Servidor',
      'username' => 'Nombre de usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas sincronizadas',
      'ssl' => '¿Usa SSL?',
      'fetchSince' => 'Traer correos desde',
      'emailAddress' => 'Correo electrónico',
      'sentFolder' => 'Carpeta de enviados',
      'storeSentEmails' => 'Almacenar correos enviados',
      'keepFetchedEmailsUnread' => 'Mantener los correos que se han obtenido sin leer',
      'emailFolder' => 'Poner en la carpeta',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Usar SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Autentificación SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpUsername' => 'Usuario SMTP',
      'smtpPassword' => 'Contraseña SMTP',
    ),
    'links' =>
    array (
      'filters' => 'Filtros',
      'emails' => 'Correos',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
    ),
    'labels' =>
    array (
      'Create EmailAccount' => 'Crear cuenta pesonal',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Probar conexión',
      'Send Test Email' => 'Enviar correo electrónico de prueba',
      'SMTP' => 'SMTP',
    ),
    'messages' =>
    array (
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
      'connectionIsOk' => 'Conexión correcta',
    ),
    'tooltips' =>
    array (
      'monitoredFolders' => 'Las carpetas deben estar separadas por comas.

Puede agregar una carpeta \'Enviados\' para sincronizar los correos electrónicos enviados desde un cliente externo.',
      'storeSentEmails' => 'Los correos electrónicos enviados se almacenarán en el servidor IMAP. El campo Dirección de correo electrónico debe coincidir con la dirección desde donde se enviarán los correos electrónicos.',
    ),
  ),
  'EmailAddress' =>
  array (
    'labels' =>
    array (
      'Primary' => 'Principal',
      'Opted Out' => 'Se dieron de baja',
      'Invalid' => 'Inválido',
    ),
  ),
  'EmailFilter' =>
  array (
    'fields' =>
    array (
      'from' => 'De',
      'to' => 'Para',
      'subject' => 'Asunto',
      'bodyContains' => 'Contenido del cuerpo',
      'action' => 'Acción',
      'isGlobal' => 'Es global',
      'emailFolder' => 'Carpeta',
    ),
    'labels' =>
    array (
      'Create EmailFilter' => 'Crear un filtro de email',
      'Emails' => 'Correos',
    ),
    'options' =>
    array (
      'action' =>
      array (
        'Skip' => 'Ignorar',
        'Move to Folder' => 'Poner en la carpeta',
      ),
    ),
    'tooltips' =>
    array (
      'name' => 'Dé al filtro un nombre descriptivo.',
      'subject' => 'Filtra los correos con el asunto. Dejar en blanco si no es necesario. Puede usar el comodín *:

texto* - empieza con texto,
*texot* - contiene texto,
*texto - termina con texto.',
      'bodyContains' => 'Filtra los correos que en el cuerpo contengan cualquiera de estas palabras o frases.',
      'from' => 'Filtra los correos enviados desde esta dirección. Dejar en blanco si no es necesario. Puede usar el comodín *.',
      'to' => 'Filtra los correos enviados a esta dirección. Dejar en blanco si no es necesario. Puede usar el comodín *.',
      'isGlobal' => 'Aplica este filtro a todos los correos entrantes del sistema.',
    ),
  ),
  'EmailFolder' =>
  array (
    'fields' =>
    array (
      'skipNotifications' => 'Omitir notificaciones',
    ),
    'labels' =>
    array (
      'Create EmailFolder' => 'Crear carpeta',
      'Manage Folders' => 'Administrar carpetas',
      'Emails' => 'Correos',
    ),
  ),
  'EmailTemplate' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'isHtml' => 'Es HTML',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'insertField' => 'Insertar campo',
      'oneOff' => 'Único',
      'category' => 'Category',
    ),
    'links' =>
    array (
    ),
    'labels' =>
    array (
      'Create EmailTemplate' => 'Crear plantilla de correo',
      'Info' => 'Información',
      'Available placeholders' => 'Available placeholders',
    ),
    'messages' =>
    array (
      'infoText' => 'Variables disponibles:

{optOutUrl} &#8211; URL del enlace de baja.

{optOutLink} &#8211;  Enlace de baja.',
    ),
    'tooltips' =>
    array (
      'oneOff' => 'Marque la casilla si usted va a utilizar esta plantilla solo una vez. Por ejemplo para correo masivo.',
    ),
    'presetFilters' =>
    array (
      'actual' => 'Actuales',
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
      'Relationships' => 'Relaciones',
      'Schedule' => 'Programar',
      'Log' => 'Registros',
      'Formula' => 'Fórmula',
    ),
    'fields' =>
    array (
      'name' => 'Nombre',
      'type' => 'Tipo',
      'labelSingular' => 'Etiqueta en singular',
      'labelPlural' => 'Etiqueta en plural',
      'stream' => 'Historia',
      'label' => 'Etiqueta',
      'linkType' => 'Tipo de enlace',
      'entityForeign' => 'Entidad foránea',
      'linkForeign' => 'Enlace Foráneo',
      'link' => 'Enlace',
      'labelForeign' => 'Etiqueta Foránea',
      'sortBy' => 'Orden por defecto (campo)',
      'sortDirection' => 'Orden por defecto (dirección)',
      'relationName' => 'Nombre de la Tabla Intermedia',
      'linkMultipleField' => 'Enlaza múltiples campos',
      'linkMultipleFieldForeign' => 'Enlaza múltiples campos foráneos',
      'disabled' => 'Desactivado',
      'textFilterFields' => 'Los campos de filtro de texto',
      'audited' => 'Auditado',
      'auditedForeign' => 'Foráneo auditado',
      'statusField' => 'Campo estado',
      'beforeSaveCustomScript' => 'Antes de guardar la secuencia de comandos personalizada',
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
        '' => 'Ninguno',
        'Base' => 'Base',
        'Person' => 'Persona',
        'CategoryTree' => 'Árbol de categorías',
        'Event' => 'Evento',
        'BasePlus' => 'Base Plus',
        'Company' => 'Empresa',
      ),
      'linkType' =>
      array (
        'manyToMany' => 'Mucho-a-Muchos',
        'oneToMany' => 'Uno-a-Muchos',
        'manyToOne' => 'Muchos-a-uno',
        'parentToChildren' => 'Padres-a-Hijos',
        'childrenToParent' => 'Hijos-a-Padres',
      ),
      'sortDirection' =>
      array (
        'asc' => 'Ascendente',
        'desc' => 'Descendente',
      ),
    ),
    'messages' =>
    array (
      'entityCreated' => 'La entidad ha sido creada',
      'linkAlreadyExists' => 'Conflicto de nombres en el enlace.',
      'linkConflict' => 'Conflicto de nombres: un enlace o campo con el mismo nombre ya existe.',
    ),
    'tooltips' =>
    array (
      'statusField' => 'Las actualizaciones de este campo se registran en la historia.',
      'textFilterFields' => 'Campos utilizados por la búsqueda de texto.',
      'stream' => 'Marque para que la entidad tenga historia.',
      'disabled' => 'Marque si no necesita esta entidad en su sistema.',
      'linkAudited' => 'Crear un registro relacionado y vincularlo con el registro existente, hará que se registre en la historia.',
      'linkMultipleField' => 'El campo de relaciones múltiples proporciona una manera práctica de editar relaciones. No lo use si puede tener un gran número de registros relacionados.',
      'entityType' => 'Base: Sin elementos adicionales

Base Plus - Similar a Posibles clientes y Oportunidades (tiene paneles de Actividades planeadas, Historial de actividades y Tareas).

Evento - Similar a Reuniones y Llamadas (disponible en Calendario y en el Panel de Actividades).

Persona - Similar a Contacto.

Empresa - Similar a Cuenta.',
      'fullTextSearch' => 'Running rebuild is required.',
    ),
  ),
  'Export' =>
  array (
    'fields' =>
    array (
      'exportAllFields' => 'Exportar todos los campos',
      'fieldList' => 'Lista de campos',
      'format' => 'Formato',
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
      'name' => 'Nombre',
      'version' => 'Versión',
      'description' => 'Descripción',
      'isInstalled' => 'Instalado',
      'checkVersionUrl' => 'An URL for checking new versions',
    ),
    'labels' =>
    array (
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar',
    ),
    'messages' =>
    array (
      'uninstalled' => 'Extensión {name} ha sido desinstalada',
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
      'Dynamic Logic' => 'Lógica dinámica',
      'Name' => 'Name',
      'Label' => 'Label',
      'Type' => 'Type',
    ),
    'options' =>
    array (
      'dateTimeDefault' =>
      array (
        '' => 'Nada',
        'javascript: return this.dateTime.getNow(1);' => 'Ahora',
        'javascript: return this.dateTime.getNow(5);' => 'Ahora (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Ahora (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Ahora (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hora',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 horas',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 día',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 días',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 semana',
      ),
      'dateDefault' =>
      array (
        '' => 'Nada',
        'javascript: return this.dateTime.getToday();' => 'Hoy',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 días',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 semana',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 semanas',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 mes',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 meses',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 año',
      ),
    ),
    'tooltips' =>
    array (
      'audited' => 'Las actualizaciones se registrarán en la historia.',
      'required' => 'El campo será obligatorio. No se puede dejar vacío.',
      'default' => 'El valor se establecerá de forma predeterminada al guardar.',
      'min' => 'Valor mínimo aceptado.',
      'max' => 'Valor máximo aceptado.',
      'seeMoreDisabled' => 'Si no se marca, los textos largos se cortarán.',
      'lengthOfCut' => 'Que largo tendrán los textos antes de ser cortados.',
      'maxLength' => 'Longitud máxima aceptable del texto.',
      'before' => 'El valor de fecha debe ser anterior al valor de fecha del campo especificado.',
      'after' => 'El valor de fecha debe ser posterior al valor de fecha del campo especificado.',
      'readOnly' => 'El usuario no puede especificar el valor del campo. Pero se puede calcular por fórmula.',
      'maxFileSize' => 'Si está vacío o es 0, entonces no limitar',
    ),
    'fieldParts' =>
    array (
      'address' =>
      array (
        'street' => 'Calle',
        'city' => 'Ciudad',
        'state' => 'Estado',
        'country' => 'País',
        'postalCode' => 'Código Postal',
        'map' => 'Mapa',
      ),
      'personName' =>
      array (
        'salutation' => 'Saludo',
        'first' => 'Nombre',
        'last' => 'Apellido',
      ),
      'currency' =>
      array (
        'converted' => '(Convertido)',
        'currency' => '(Currency)',
      ),
      'datetimeOptional' =>
      array (
        'date' => 'Fecha',
      ),
    ),
  ),
  'Global' =>
  array (
    'scopeNames' =>
    array (
      'Email' => 'Correo electrónico',
      'User' => 'Usuario',
      'Team' => 'Equipo',
      'Role' => 'Rol',
      'EmailTemplate' => 'Plantilla de Correo',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Cuenta de correo personal',
      'EmailAccountScope' => 'Cuenta de correo personal',
      'OutboundEmail' => 'Correo Saliente',
      'ScheduledJob' => 'Tarea Programada',
      'ExternalAccount' => 'Cuenta Externa',
      'Extension' => 'Extensión',
      'Dashboard' => 'Escritorio',
      'InboundEmail' => 'Cuenta de correo grupal',
      'Stream' => 'Historia',
      'Import' => 'Importar',
      'Template' => 'Plantilla',
      'Job' => 'Trabajo',
      'EmailFilter' => 'Filtro de correo',
      'Portal' => 'Portal',
      'PortalRole' => 'Rol del portal',
      'Attachment' => 'Adjuntos',
      'EmailFolder' => 'Carpeta de correo electrónico',
      'PortalUser' => 'Usuario del portal',
      'ScheduledJobLogRecord' => 'Registro del registro de trabajo programado',
      'PasswordChangeRequest' => 'Solicitar Cambio de Contraseña',
      'ActionHistoryRecord' => 'Registro del histórico',
      'AuthToken' => 'Token de autenticación',
      'UniqueId' => 'ID Único',
      'LastViewed' => 'Historial de acciones',
      'Settings' => 'Ajustes',
      'FieldManager' => 'Administrador de campos',
      'Integration' => 'Integración',
      'LayoutManager' => 'Administrador de diseño',
      'EntityManager' => 'Gestionar de entidades',
      'Export' => 'Exportar',
      'DynamicLogic' => 'Lógica dinámica',
      'DashletOptions' => 'Ajustes de cajas',
      'Admin' => 'Administrador',
      'Global' => 'Global',
      'Preferences' => 'Preferencias',
      'EmailAddress' => 'Correo electrónico',
      'PhoneNumber' => 'Número de teléfono',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'Account' => 'Cuenta',
      'Contact' => 'Contacto',
      'Lead' => 'Posible cliente',
      'Target' => 'Objetivo',
      'Opportunity' => 'Oportunidad',
      'Meeting' => 'Reunión',
      'Calendar' => 'Calendario',
      'Call' => 'Llamada',
      'Task' => 'Tarea',
      'Case' => 'Ticket',
      'Document' => 'Documento',
      'DocumentFolder' => 'Carpeta de documento',
      'Campaign' => 'Campaña',
      'TargetList' => 'Lista de objetivos',
      'MassEmail' => 'Correo masivo',
      'EmailQueueItem' => 'Elemento en cola de correos',
      'CampaignTrackingUrl' => 'URL de seguimiento',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Artículo de la base de conocimiento',
      'KnowledgeBaseCategory' => 'Categoría de la base de conocimiento',
      'CampaignLogRecord' => 'Registro del registro de la campaña',
      'Formularios' => 'Formulario',
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
      'Reclamo' => 'Reclamo',
      'MotivoReclamo' => 'MotivoReclamo',
    ),
    'scopeNamesPlural' =>
    array (
      'Email' => 'Correos',
      'User' => 'Usuarios',
      'Team' => 'Equipos',
      'Role' => 'Roles',
      'EmailTemplate' => 'Plantillas de correo',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Cuentas de correo personales',
      'EmailAccountScope' => 'Cuentas de correo personales',
      'OutboundEmail' => 'Salientes',
      'ScheduledJob' => 'Tareas programadas',
      'ExternalAccount' => 'Cuentas externas',
      'Extension' => 'Extensiones',
      'Dashboard' => 'Escritorio',
      'InboundEmail' => 'Cuentas de correo grupales',
      'Stream' => 'Historia',
      'Import' => 'Resultados de importaciones',
      'Template' => 'Plantillas',
      'Job' => 'Trabajos',
      'EmailFilter' => 'Filtros',
      'Portal' => 'Portales',
      'PortalRole' => 'Roles del portal',
      'Attachment' => 'Adjuntos',
      'EmailFolder' => 'Carpetas de correo',
      'PortalUser' => 'Usuarios del portal',
      'ScheduledJobLogRecord' => 'Registros del registro de trabajo programado',
      'PasswordChangeRequest' => 'Solicitar Cambios de Contraseñas',
      'ActionHistoryRecord' => 'Histórico',
      'AuthToken' => 'Tokens',
      'UniqueId' => 'ID Únicos',
      'LastViewed' => 'Historial de acciones',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'Account' => 'Cuentas',
      'Contact' => 'Contactos',
      'Lead' => 'Posibles clientes',
      'Target' => 'Objetivos',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniones',
      'Calendar' => 'Calendario',
      'Call' => 'Llamadas',
      'Task' => 'Tareas',
      'Case' => 'Tickets',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Carpetas de documentos',
      'Campaign' => 'Campañas',
      'TargetList' => 'Lista de objetivos',
      'MassEmail' => 'Correos masivos',
      'EmailQueueItem' => 'Elementos en cola de correos',
      'CampaignTrackingUrl' => 'URLs de seguimiento',
      'Activities' => 'Actividades',
      'KnowledgeBaseArticle' => 'Base de conocimiento',
      'KnowledgeBaseCategory' => 'Categorías de la base de conocimiento',
      'CampaignLogRecord' => 'Registros del registro de la campaña',
      'Formularios' => 'Formularios',
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
      'Reclamo' => 'Reclamos',
      'MotivoReclamo' => 'MotivoReclamos',
    ),
    'labels' =>
    array (
      'Misc' => 'Misceláneos',
      'Merge' => 'Unir',
      'None' => 'Ninguno',
      'Home' => 'Inicio',
      'by' => 'por',
      'Saved' => 'Guardado',
      'Error' => 'Error',
      'Select' => 'Seleccionar',
      'Not valid' => 'No válido',
      'Please wait...' => 'Por favor espere...',
      'Please wait' => 'Por favor espere',
      'Loading...' => 'Cargando...',
      'Uploading...' => 'Subiendo...',
      'Sending...' => 'Enviando...',
      'Merging...' => 'Fusionando...',
      'Merged' => 'Fusionado	',
      'Removed' => 'Eliminado',
      'Posted' => 'Publicado',
      'Linked' => 'Enlazado',
      'Unlinked' => 'Desenlazado',
      'Done' => 'Hecho',
      'Access denied' => 'Acceso denegado',
      'Not found' => 'No encontrado',
      'Access' => 'Acceso',
      'Are you sure?' => '¿Está seguro?',
      'Record has been removed' => 'Registro Eliminado',
      'Wrong username/password' => 'Nombre de usuario/contraseña incorrectos',
      'Post cannot be empty' => 'La entrada no puede estar vacia',
      'Removing...' => 'Removiendo...',
      'Unlinking...' => 'Desenlazando...',
      'Posting...' => 'Publicando...',
      'Username can not be empty!' => '¡El nombre de usuario no puede estar vacío!',
      'Cache is not enabled' => 'La caché no está habilitada',
      'Cache has been cleared' => 'La caché fue limpiada correctamente',
      'Rebuild has been done' => 'El sistema se ha reconstruido correctamente',
      'Return to Application' => 'Volver a la aplicación',
      'Saving...' => 'Guardando...',
      'Modified' => 'Modificado',
      'Created' => 'Creado',
      'Create' => 'Crear',
      'create' => 'crear',
      'Overview' => 'General',
      'Details' => 'Detalles',
      'Add Field' => 'Añadir Campo',
      'Add Dashlet' => 'Añadir Caja',
      'Filter' => 'Filtro',
      'Edit Dashboard' => 'Editar escritorio',
      'Add' => 'Añadir',
      'Add Item' => 'Agregar elemento',
      'Reset' => 'Resetear',
      'Menu' => 'Menú',
      'More' => 'Más',
      'Search' => 'Buscar',
      'Only My' => 'Solo míos',
      'Open' => 'Abiertos',
      'Admin' => 'Administrador',
      'About' => 'Acerca',
      'Refresh' => 'Actualizar',
      'Remove' => 'Eliminar',
      'Options' => 'Ajustes',
      'Username' => 'Nombre de usuario',
      'Password' => 'Contraseña',
      'Login' => 'Entrar',
      'Log Out' => 'Salir',
      'Preferences' => 'Preferencias',
      'State' => 'Estado',
      'Street' => 'Calle',
      'Country' => 'País',
      'City' => 'Ciudad',
      'PostalCode' => 'Código Postal',
      'Followed' => 'Siguiendo',
      'Follow' => 'Seguir',
      'Followers' => 'Seguidores',
      'Clear Local Cache' => 'Borrar la caché local',
      'Actions' => 'Acciones',
      'Delete' => 'Borrar',
      'Update' => 'Guardar',
      'Save' => 'Guardar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Apply' => 'Aplicar',
      'Unlink' => 'Desenlazar',
      'Mass Update' => 'Actualización masiva',
      'Export' => 'Exportar',
      'No Data' => 'Sin Datos',
      'No Access' => 'Sin acceso',
      'All' => 'Todos',
      'Active' => 'Activo',
      'Inactive' => 'Inactivo',
      'Write your comment here' => 'Escriba su comentario aquí',
      'Post' => 'Publicar',
      'Stream' => 'Historia',
      'Show more' => 'Mostrar mas',
      'Dashlet Options' => 'Ajustes de cajas',
      'Full Form' => 'Formulario Completo',
      'Insert' => 'Insertar',
      'Person' => 'Persona',
      'First Name' => 'Nombre',
      'Last Name' => 'Apellidos',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'cambiar',
      'Change' => 'Cambio',
      'Primary' => 'Principal',
      'Save Filter' => 'Guardar Filtro',
      'Administration' => 'Administración',
      'Run Import' => 'Ejecutar importación',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificaciones',
      'Mark all read' => 'Marcar todos como leído',
      'See more' => 'Ver más',
      'Today' => 'Hoy',
      'Tomorrow' => 'Mañana',
      'Yesterday' => 'Ayer',
      'Submit' => 'Enviar',
      'Close' => 'Cerrar',
      'Yes' => 'Si',
      'No' => 'No',
      'Select All Results' => 'Seleccionar todos los resultados',
      'Value' => 'Valor',
      'Current version' => 'Versión actual',
      'List View' => 'Vista de Lista',
      'Tree View' => 'Vista de árbol',
      'Unlink All' => 'Desenlazar todo',
      'Total' => 'Total',
      'Print to PDF' => 'Imprimir PDF',
      'Default' => 'Por defecto',
      'Number' => 'Número',
      'From' => 'De',
      'To' => 'Para',
      'Create Post' => 'Crear entrada',
      'Previous Entry' => 'Entrada anterior',
      'Next Entry' => 'Siguiente Entrada',
      'View List' => 'Ver lista completa',
      'Attach File' => 'Adjuntar archivo',
      'Skip' => 'Omitir',
      'Attribute' => 'Atributo',
      'Function' => 'Función',
      'Self-Assign' => 'Autoasignar',
      'Self-Assigned' => 'Autosegnado',
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
      'Create InboundEmail' => 'Crear correo entrante',
      'Activities' => 'Actividades',
      'History' => 'Historial de actividades',
      'Attendees' => 'Asistentes',
      'Schedule Meeting' => 'Programar reunión',
      'Schedule Call' => 'Programar llamada',
      'Compose Email' => 'Escribir correo',
      'Log Meeting' => 'Registrar reunión',
      'Log Call' => 'Registrar llamada',
      'Archive Email' => 'Nuevo Correo Archivado',
      'Create Task' => 'Crear tarea',
      'Tasks' => 'Tareas',
    ),
    'messages' =>
    array (
      'pleaseWait' => 'Por favor espere...',
      'posting' => 'Publicando...',
      'loading' => 'Cargando...',
      'saving' => 'Guardando...',
      'confirmLeaveOutMessage' => '¿Seguro que quieres salir del formulario?',
      'notModified' => 'Usted no ha modificado el registro',
      'duplicate' => 'El registro que está creando parece ser un duplicado',
      'dropToAttach' => 'Arrastre para adjuntar',
      'fieldIsRequired' => '{field} es requerido',
      'fieldShouldBeEmail' => '{field} debe ser un correo electrónico válido',
      'fieldShouldBeFloat' => '{field} debe ser un decimal válido',
      'fieldShouldBeInt' => '{field} debe ser un entero válido',
      'fieldShouldBeDate' => '{field} debe ser una fecha válida',
      'fieldShouldBeDatetime' => '{field} debe ser una fecha válida fecha/hora',
      'fieldShouldAfter' => '{field} debe estar después de {otherField}',
      'fieldShouldBefore' => '{field} debe estar antes de {otherField}',
      'fieldShouldBeBetween' => '{field} debe estar entre {min} y {max}',
      'fieldShouldBeLess' => '{field} no debería ser mayor que {value}',
      'fieldShouldBeGreater' => '{field} no debería ser menor que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado de forma incorrecta',
      'fieldMaxFileSizeError' => 'El archivo no puede exeder los {max} Mb',
      'fieldIsUploading' => 'Uploading in progress',
      'resetPreferencesDone' => 'Preferencias se ha restablecido a los valores predeterminados',
      'confirmation' => '¿Está seguro?',
      'unlinkAllConfirmation' => '¿Seguro que deseas desvincular todos los registros relacionados?',
      'resetPreferencesConfirmation' => '¿Está seguro que desea restablecer las preferencias?',
      'removeRecordConfirmation' => '¿Está seguro que quiere eliminar los registros?',
      'unlinkRecordConfirmation' => '¿Está seguro que quiere desenlazar la relación?',
      'removeSelectedRecordsConfirmation' => '¿Está seguro que quiere eliminar los registros seleccionados?',
      'massUpdateResult' => '{count} registros se han actualizado',
      'massUpdateResultSingle' => '{count} registro ha sido actualizado',
      'noRecordsUpdated' => 'Ningún registro fue actualizado',
      'massRemoveResult' => '{count} registros se han eliminado',
      'massRemoveResultSingle' => '{count} registro se ha eliminado',
      'noRecordsRemoved' => 'Ningún registro fue eliminado',
      'clickToRefresh' => 'Clic para actualizar',
      'streamPostInfo' => 'Escriba <strong>@usuario</strong> para mencionar usuarios en el comentario.

La sintaxis markdown disponible es:

`<code>código</code>`
**<strong>texto en negritas</strong>**
*<em>un texto con énfasis</em>*
~<del>el texto eliminado</del>~
> Citar bloque
[nombre del enlace](url)',
      'writeYourCommentHere' => 'Escriba su comentario aquí',
      'writeMessageToUser' => 'Escribir un mensaje a {user}',
      'writeMessageToSelf' => 'Escribir un mensaje en tu historia',
      'typeAndPressEnter' => 'Escriba y presione enter',
      'checkForNewNotifications' => 'Comprobar si hay nuevas notificaciones',
      'checkForNewNotes' => 'Comprobar si hay actualizaciones en la historia',
      'internalPost' => 'El puesto será visto solo por los usuarios internos',
      'internalPostTitle' => 'El mensaje es visto solo por usuarios internos',
      'done' => 'Hecho',
      'confirmMassFollow' => '¿Está seguro que desea seguir los registros seleccionados?',
      'confirmMassUnfollow' => '¿Está seguro que desea dejar de seguir los registros seleccionados?',
      'massFollowResult' => 'Se han seguido {count} registros',
      'massUnfollowResult' => 'Se han dejado de seguir {count} registros',
      'massFollowResultSingle' => 'Se han seguido {count} registro',
      'massUnfollowResultSingle' => 'Se han dejado de seguir {count} registro',
      'massFollowZeroResult' => 'Nada se siguió',
      'massUnfollowZeroResult' => 'Nada se dejó de seguir',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
    ),
    'boolFilters' =>
    array (
      'onlyMy' => 'Solo míos',
      'followed' => 'Siguiendo',
    ),
    'presetFilters' =>
    array (
      'followed' => 'Siguiendo',
      'all' => 'Todos',
    ),
    'massActions' =>
    array (
      'remove' => 'Eliminar',
      'merge' => 'Unir',
      'massUpdate' => 'Actualización masiva',
      'export' => 'Exportar',
      'follow' => 'Seguir',
      'unfollow' => 'Dejar de seguir',
      'convertCurrency' => 'Convert Currency',
      'printPdf' => 'Print to PDF',
    ),
    'fields' =>
    array (
      'name' => 'Nombre',
      'firstName' => 'Nombre',
      'lastName' => 'Apellidos',
      'salutationName' => 'Saludo',
      'assignedUser' => 'Usuario asignado',
      'assignedUsers' => 'Usuarios asignados',
      'emailAddress' => 'Correo electrónico',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Nombre de usuario asignado',
      'teams' => 'Equipos',
      'createdAt' => 'Creado en',
      'modifiedAt' => 'Modificado el',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'description' => 'Descripción',
      'address' => 'Dirección',
      'phoneNumber' => 'Teléfono',
      'phoneNumberMobile' => 'Teléfono (Móvil)',
      'phoneNumberHome' => 'Teléfono (Casa)',
      'phoneNumberFax' => 'Teléfono (Fax)',
      'phoneNumberOffice' => 'Teléfono (Oficina)',
      'phoneNumberOther' => 'Teléfono (Otro)',
      'phoneNumberData' => 'Phone Number Data',
      'order' => 'Orden',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Ciudad',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'Código Postal',
      'billingAddressState' => 'Estado',
      'billingAddressStreet' => 'Calle',
      'billingAddressMap' => 'Mapa',
      'addressCity' => 'Ciudad',
      'addressStreet' => 'Calle',
      'addressCountry' => 'País',
      'addressState' => 'Estado',
      'addressPostalCode' => 'Código Postal',
      'addressMap' => 'Mapa',
      'shippingAddressCity' => 'Ciudad (envío)',
      'shippingAddressStreet' => 'Calle (envío)',
      'shippingAddressCountry' => 'País (envío)',
      'shippingAddressState' => 'Estado (envío)',
      'shippingAddressPostalCode' => 'Código Postal (envío)',
      'shippingAddressMap' => 'Mapa (envío)',
    ),
    'links' =>
    array (
      'assignedUser' => 'Usuario asignado',
      'createdBy' => 'Creado por',
      'modifiedBy' => 'Modificado Por',
      'team' => 'Equipo',
      'roles' => 'Roles',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'parent' => 'Padre',
      'children' => 'Hijos',
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Posibles clientes',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'accounts' => 'Cuentas',
      'cases' => 'Tickets',
      'documents' => 'Documentos',
      'account' => 'Cuenta',
      'opportunity' => 'Oportunidad',
      'contact' => 'Contacto',
    ),
    'dashlets' =>
    array (
      'Stream' => 'Historia',
      'Emails' => 'Mi bandeja de entrada',
      'Records' => 'Lista de registros',
      'Leads' => 'Mis posibles clientes',
      'Opportunities' => 'Mis oportunidades',
      'Tasks' => 'Mis tareas',
      'Cases' => 'Mis tickets',
      'Calendar' => 'Calendario',
      'Calls' => 'Mis llamadas',
      'Meetings' => 'Mis reuniones',
      'OpportunitiesByStage' => 'Oportunidades por Etapa',
      'OpportunitiesByLeadSource' => 'Oportunidades por toma de contacto del posible cliente',
      'SalesByMonth' => 'Ventas por mes',
      'SalesPipeline' => 'Canalización de ventas',
      'Activities' => 'Mis próximas actividades',
    ),
    'notificationMessages' =>
    array (
      'assign' => '{entityType} {entity} ha sido asignado a usted',
      'emailReceived' => 'Correo recibido de: <strong>{from}</strong>.',
      'entityRemoved' => '{user} ha eliminado: <strong>[{entityType}]</strong> {entity}',
    ),
    'streamMessages' =>
    array (
      'post' => '{user} ha publicado en: <strong>[{entityType}]</strong> {entity}',
      'attach' => '{user} ha añadido un archivo adjunto en: <strong>[{entityType}]</strong> {entity}',
      'status' => '{user} ha actualizado el campo <strong>{field}</strong> en: <strong>[{entityType}]</strong> {entity}',
      'update' => '{user} ha actualizado: <strong>[{entityType}]</strong> {entity}',
      'postTargetTeam' => '{user} ha publicado en el equipo {target}',
      'postTargetTeams' => '{user} ha publicado en los equipos {target}',
      'postTargetPortal' => '{user} ha publicado en el portal {target}',
      'postTargetPortals' => '{user} ha publicado en los portales {target}',
      'postTarget' => '{user} ha publicado en {target}',
      'postTargetYou' => '{user} ha publicado pora usted',
      'postTargetYouAndOthers' => '{user} ha publicado para {target} y para usted',
      'postTargetAll' => '{user} ha publicado para todos',
      'postTargetSelf' => '{user} se ha enviado un mensaje a sí mismo',
      'postTargetSelfAndOthers' => '{user} ha publicado para {target} y para sí mismo',
      'mentionInPost' => '{user} ha mencionado a {mentioned} en: <strong>[{entityType}]</strong> {entity}',
      'mentionYouInPost' => '{user} te ha mencionado en: <strong>[{entityType}]</strong> {entity}',
      'mentionInPostTarget' => '{user} ha mencionado a {mentioned} en la publicación',
      'mentionYouInPostTarget' => '{user} te ha mencionado en la publicación para {target}',
      'mentionYouInPostTargetAll' => '{user} te ha mencionado en una publicación para todos',
      'mentionYouInPostTargetNoTarget' => '{user} te ha mencionado en una publicación',
      'create' => '{user} ha creado: <strong>[{entityType}]</strong> {entity}',
      'createThis' => '{user} ha creado: <strong>{entityType}</strong>',
      'createAssignedThis' => '{user} ha creado y se lo ha asignado a {assignee}: {entityType}',
      'createAssigned' => '{user} ha creado y se lo ha asignado a {assignee}: <strong>[{entityType}]</strong> {entity}',
      'createAssignedYou' => '{user} ha creado y te lo ha asignado: <strong>[{entityType}]</strong> {entity}',
      'createAssignedThisSelf' => '{user} ha creado y se ha asignado a sí mismo: {entityType}',
      'createAssignedSelf' => '{user} ha creado y se ha asignado a sí mismo: <strong>[{entityType}]</strong> {entity}',
      'assign' => '{user} ha asignado: <strong>[{entityType}]</strong> {entity} a {assignee}',
      'assignThis' => '{user} ha asignado {entityType} a {assignee}',
      'assignYou' => '{user} te ha asignado <strong>[{entityType}]<strong> {entity} a ti',
      'assignThisVoid' => '{user} ha desasignado: {entityType}',
      'assignVoid' => '{user} ha desasignado: <strong>[{entityType}]</strong> {entity}',
      'assignThisSelf' => '{user} se ha asignado así mismo: {entityType}',
      'assignSelf' => '{user} se ha asignado así mismo: <strong>[{entityType}]</strong> {entity}',
      'postThis' => '{user} ha publicado',
      'attachThis' => '{user} ha adjuntado',
      'statusThis' => '{user} ha actualizado el campo <strong>{field}</strong>',
      'updateThis' => '{user} ha actualizado: {entityType}',
      'createRelatedThis' => '{user} ha creado: <strong>[{relatedEntityType}]</strong> {relatedEntity}, enlazado a {entityType}',
      'createRelated' => '{user} ha creado: <strong>[{relatedEntityType}]</strong> {relatedEntity} enlazado a <strong>[{entityType}]</strong> {entity}',
      'relate' => '{user} ha enlazado <strong>[{relatedEntityType}]</strong> {relatedEntity} a <strong>[{entityType}] {entity}',
      'relateThis' => '{user} vinculado {relatedEntityType} {relatedEntity} con este {entityType}',
      'emailReceivedFromThis' => 'Correo recibido de: <strong>{from}</strong>.',
      'emailReceivedInitialFromThis' => 'Correo recibido de {from}, se ha creado: {entityType}',
      'emailReceivedThis' => 'Correo recibido',
      'emailReceivedInitialThis' => 'Correo recibido, se ha creado: {entityType}',
      'emailReceivedFrom' => 'Correo recibido de {from}, relacionado a: <strong>[{entityType}]</strong> {entity}',
      'emailReceivedFromInitial' => 'Correo recibido de {from}, se ha creado: <strong>[{entityType}]<strong>
 {entityType}',
      'emailReceived' => 'El correo {email} ha sido recibido para el {entityType} {entity}',
      'emailReceivedInitial' => 'Correo recibido, se ha creado: <strong>[{entityType}]<strong>
 {entityType}',
      'emailReceivedInitialFrom' => 'Correo recibido de {from}, se ha creado: <strong>[{entityType}]<strong>
 {entityType}',
      'emailSent' => '{by} ha enviado un correo relacionado a: <strong>[{entityType}]</strong> {entity}',
      'emailSentThis' => '{by} ha enviado un correo',
    ),
    'streamMessagesMale' =>
    array (
      'postTargetSelfAndOthers' => '{user} ha publicado para {target} y para sí mismo',
    ),
    'streamMessagesFemale' =>
    array (
      'postTargetSelfAndOthers' => '{user} ha publicado para {target} y para sí misma',
    ),
    'lists' =>
    array (
      'monthNames' =>
      array (
        0 => 'Enero',
        1 => 'Febrero',
        2 => 'Marzo',
        3 => 'Abril',
        4 => 'Mayo',
        5 => 'Junio',
        6 => 'Julio',
        7 => 'Agosto',
        8 => 'Septiembre',
        9 => 'Octubre',
        10 => 'Noviembre',
        11 => 'Diciembre',
      ),
      'monthNamesShort' =>
      array (
        0 => 'Ene',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dic',
      ),
      'dayNames' =>
      array (
        0 => 'Domingo',
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miércoles',
        4 => 'Jueves',
        5 => 'Viernes',
        6 => 'Sábado',
      ),
      'dayNamesShort' =>
      array (
        0 => 'Dom',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mie',
        4 => 'Jue',
        5 => 'Vie',
        6 => 'Sab',
      ),
      'dayNamesMin' =>
      array (
        0 => 'Do',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Mi',
        4 => 'Ju',
        5 => 'Vi',
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
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Sta.',
        'Dr.' => 'Dr.',
      ),
      'language' =>
      array (
        'af_ZA' => 'Afrikáans',
        'az_AZ' => 'Azerbaiyán',
        'be_BY' => 'Bielorruso',
        'bg_BG' => 'Bulgaro',
        'bn_IN' => 'Bengalí',
        'bs_BA' => 'Bosnio',
        'ca_ES' => 'Catalán',
        'cs_CZ' => 'Checo',
        'cy_GB' => 'Galés',
        'da_DK' => 'Danés',
        'de_DE' => 'Alemán',
        'el_GR' => 'Griego',
        'en_GB' => 'Inglés (UK)',
        'es_MX' => 'Español (México)',
        'en_US' => 'Inglés (US)',
        'es_ES' => 'Español (España)',
        'et_EE' => 'Estonio',
        'eu_ES' => 'Vasco',
        'fa_IR' => 'Persa',
        'fi_FI' => 'Finlandés',
        'fo_FO' => 'Feroés',
        'fr_CA' => 'Francés (Canada)',
        'fr_FR' => 'Francés (Francia)',
        'ga_IE' => 'Irlandés',
        'gl_ES' => 'Gallego',
        'gn_PY' => 'Guaraní',
        'he_IL' => 'Hebreo',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croata',
        'hu_HU' => 'Hungaro',
        'hy_AM' => 'Armenio',
        'id_ID' => 'Indonesio',
        'is_IS' => 'Islandés',
        'it_IT' => 'Italiano',
        'ja_JP' => 'Japonés',
        'ka_GE' => 'Georgiano',
        'km_KH' => 'Camboyano',
        'ko_KR' => 'Coreano',
        'ku_TR' => 'Kurdo',
        'lt_LT' => 'Lituano',
        'lv_LV' => 'Latón',
        'mk_MK' => 'Macedonio',
        'ml_IN' => 'Malabar',
        'ms_MY' => 'Malayo',
        'nb_NO' => 'Noruego Bokmål',
        'nn_NO' => 'Noruego Nynorsk',
        'ne_NP' => 'Nepalí',
        'nl_NL' => 'Holandés',
        'pa_IN' => 'Punyabí',
        'pl_PL' => 'Polaco',
        'ps_AF' => 'Pastún',
        'pt_BR' => 'Portugués (Brasil)',
        'pt_PT' => 'Portugués (Portugal)',
        'ro_RO' => 'Rumano',
        'ru_RU' => 'Ruso',
        'sk_SK' => 'Eslovaco',
        'sl_SI' => 'Esloveno',
        'sq_AL' => 'Albanés',
        'sr_RS' => 'Serbio',
        'sv_SE' => 'Sueco',
        'sw_KE' => 'Suajili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Télugu',
        'th_TH' => 'Tailandés',
        'tl_PH' => 'Tagalo',
        'tr_TR' => 'Turco',
        'uk_UA' => 'Ucraniano',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamita',
        'zh_CN' => 'Chino Simplificado (China)',
        'zh_HK' => 'Chino Tradicional (Hong Kong)',
        'zh_TW' => 'Chino Traditional (Taiwán)',
      ),
      'dateSearchRanges' =>
      array (
        'on' => 'Está en',
        'notOn' => 'No está en',
        'after' => 'Después',
        'before' => 'Antes',
        'between' => 'Entre',
        'today' => 'Hoy',
        'past' => 'Pasado',
        'future' => 'Futuro',
        'currentMonth' => 'Mes Actual',
        'lastMonth' => 'Mes pasado',
        'nextMonth' => 'Siguiente mes',
        'currentQuarter' => 'Trimestre Actual',
        'lastQuarter' => 'Trimestre pasado',
        'currentYear' => 'Año Actual',
        'lastYear' => 'Año pasado',
        'lastSevenDays' => 'Últimos 7 Días',
        'lastXDays' => 'Últimos X Días',
        'nextXDays' => 'Próximos X Días',
        'ever' => 'Nunca',
        'isEmpty' => 'Está Vacío',
        'olderThanXDays' => 'Más de X Días',
        'afterXDays' => 'Después de X días',
      ),
      'searchRanges' =>
      array (
        'is' => 'Es',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'isOneOf' => 'Cualquiera de',
        'isFromTeams' => 'Es del equipo',
        'isNot' => 'No es',
        'isNotOneOf' => 'Ninguno de',
        'anyOf' => 'Cualquiera de',
        'noneOf' => 'Ninguno de',
      ),
      'varcharSearchRanges' =>
      array (
        'equals' => 'Equivale',
        'like' => 'Es como (%)',
        'notLike' => 'No es como (%)',
        'startsWith' => 'Comienza con',
        'endsWith' => 'Termina con',
        'contains' => 'Contiene',
        'notContains' => 'No contiene',
        'isEmpty' => 'Está vacío',
        'isNotEmpty' => 'No Está Vacío',
        'notEquals' => 'No es igual',
      ),
      'intSearchRanges' =>
      array (
        'equals' => 'Equivale',
        'notEquals' => 'Diferentes',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual que',
        'lessThanOrEquals' => 'Menor o igual que',
        'between' => 'Entre',
        'isEmpty' => 'Está Vacío',
        'isNotEmpty' => 'No está Vacío',
      ),
      'autorefreshInterval' =>
      array (
        0 => 'Ninguno',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos',
      ),
      'phoneNumber' =>
      array (
        'Mobile' => 'Teléfono móvil',
        'Office' => 'Oficina',
        'Fax' => 'Fax',
        'Home' => 'Hogar',
        'Other' => 'Otro',
      ),
      'reminderTypes' =>
      array (
        'Popup' => 'Ventana emergente',
        'Email' => 'Correo electrónico',
      ),
    ),
    'sets' =>
    array (
      'summernote' =>
      array (
        'NOTICE' => 'Usted puede encontrar aquí la traducción: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' =>
        array (
          'bold' => 'Negrita',
          'italic' => 'Itálico',
          'underline' => 'Subrayado',
          'strike' => 'Tachado',
          'clear' => 'Quitar Estilo de Fuente',
          'height' => 'Alto de línea',
          'name' => 'Familia de Fuente',
          'size' => 'Tamaño de Fuente',
        ),
        'image' =>
        array (
          'image' => 'Visualización',
          'insert' => 'Insertar imagen',
          'resizeFull' => 'Cambiar el tamaño a completo',
          'resizeHalf' => 'Cambiar el tamaño a la mitad',
          'resizeQuarter' => 'Cambiar el tamaño a un cuarto',
          'floatLeft' => 'Flotar Izquierda',
          'floatRight' => 'Flotar Derecha',
          'floatNone' => 'Sin Flotar',
          'dragImageHere' => 'Arrastrar una imagen aquí',
          'selectFromFiles' => 'Seleccionar desde Archivo',
          'url' => 'Url de imagen',
          'remove' => 'Eliminar imagen',
        ),
        'link' =>
        array (
          'link' => 'Enlace',
          'insert' => 'Insertar Enlace',
          'unlink' => 'Desenlazar',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto a mostrar',
          'url' => '¿A que URL debería ir este enlace?',
          'openInNewWindow' => 'Abrir en nueva ventana',
        ),
        'video' =>
        array (
          'video' => 'Video',
          'videoLink' => 'Enlace al Video',
          'insert' => 'Insertar Video',
          'url' => '¿URL del Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' =>
        array (
          'table' => 'Tabla',
        ),
        'hr' =>
        array (
          'insert' => 'Insertar regla horizontal',
        ),
        'style' =>
        array (
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Cita',
          'pre' => 'Código',
          'h1' => 'Cabecera 1',
          'h2' => 'Cabecera 2',
          'h3' => 'Cabecera 3',
          'h4' => 'Cabecera 4',
          'h5' => 'Cabecera 5',
          'h6' => 'Cabecera 6',
        ),
        'lists' =>
        array (
          'unordered' => 'Lista sin Ordenar',
          'ordered' => 'Lista Ordenada',
        ),
        'options' =>
        array (
          'help' => 'Ayuda',
          'fullscreen' => 'Pantalla Completa',
          'codeview' => 'Ver Código',
        ),
        'paragraph' =>
        array (
          'paragraph' => 'Párrafo',
          'outdent' => 'Anular sangría',
          'indent' => 'Sangría',
          'left' => 'Alinear Izquierda',
          'center' => 'Alinear Centro',
          'right' => 'Alinear Derecha',
          'justify' => 'Justificado',
        ),
        'color' =>
        array (
          'recent' => 'Color Reciente',
          'more' => 'Mas Colores',
          'background' => 'Color de Fondo',
          'foreground' => 'Color de Fuente',
          'transparent' => 'Transparente',
          'setTransparent' => 'Establecer transparente',
          'reset' => 'Resetear',
          'resetToDefault' => 'Restablecer a (por defecto)',
        ),
        'shortcut' =>
        array (
          'shortcuts' => 'Atajos de teclado',
          'close' => 'Cerrar',
          'textFormatting' => 'Formato de texto',
          'action' => 'Acción',
          'paragraphFormatting' => 'Formato de párrafo',
          'documentStyle' => 'Estilo de Documento',
        ),
        'history' =>
        array (
          'undo' => 'Deshacer',
          'redo' => 'Rehacer',
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
      'EspoVertical' => 'Espo con barra lateral',
      'SakuraVertical' => 'Sakura con barra lateral',
      'Violet' => 'Violeta',
      'VioletVertical' => 'Violet con barra lateral',
      'Hazyblue' => 'Hazyblue',
      'HazyblueVertical' => 'Hazyblue con barra lateral',
    ),
  ),
  'Import' =>
  array (
    'labels' =>
    array (
      'Revert Import' => 'Revertir Importación',
      'Return to Import' => 'Regreso a Importar',
      'Run Import' => 'Ejecutar importación',
      'Back' => 'Anterior',
      'Field Mapping' => 'Mapeo de Campos',
      'Default Values' => 'Valores por defecto',
      'Add Field' => 'Añadir Campo',
      'Created' => 'Creado',
      'Updated' => 'Actualizado',
      'Result' => 'Resultado',
      'Show records' => 'Mostrar registros',
      'Remove Duplicates' => 'Eliminar Duplicados',
      'importedCount' => 'Importado (recuento)',
      'duplicateCount' => 'Duplicados (recuento)',
      'updatedCount' => 'Actualizado (recuento)',
      'Create Only' => 'Solo crear',
      'Create and Update' => 'Crear y actualizar',
      'Update Only' => 'Solo actualizar',
      'Update by' => 'Actualizado por',
      'Set as Not Duplicate' => 'Establecer como No Duplicado',
      'File (CSV)' => 'Archivo (CSV)',
      'First Row Value' => 'Valor de la primera fila',
      'Skip' => 'Omitir',
      'Header Row Value' => 'Campo del sistema',
      'Field' => 'Columnas del archivo',
      'What to Import?' => '¿Qué va a importar?',
      'Entity Type' => 'Tipo de entidad',
      'What to do?' => '¿Qué hacer?',
      'Properties' => 'Propiedades',
      'Header Row' => '¿Tiene una fila de Encabezado?',
      'Person Name Format' => 'Formato del nombre de la persona',
      'John Smith' => 'Juan Pérez',
      'Smith John' => 'Pérez Juan',
      'Smith, John' => 'Pérez, Juan',
      'Field Delimiter' => 'Delimitador de campo',
      'Date Format' => 'Formato de fecha',
      'Decimal Mark' => 'Símbolo Decimal',
      'Text Qualifier' => 'Delimitador de texto',
      'Time Format' => 'Formato de hora',
      'Currency' => 'Moneda',
      'Preview' => 'Vista previa',
      'Next' => 'Siguiente',
      'Step 1' => 'Paso 1',
      'Step 2' => 'Paso 2',
      'Double Quote' => 'Comillas dobles',
      'Single Quote' => 'Comillas simples',
      'Imported' => 'Importado',
      'Duplicates' => 'Duplicados',
      'Skip searching for duplicates' => 'Omitir la búsqueda de duplicados',
      'Timezone' => 'Zona horaria',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
    ),
    'messages' =>
    array (
      'utf8' => 'Debe ser codificado en UTF-8',
      'duplicatesRemoved' => 'Duplicados eliminados',
      'inIdle' => 'Ejecutar en segundo plano (para gran cantidad de datos, vía cron)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You wan\'t be able to revert import results. Are you sure you?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.',
    ),
    'fields' =>
    array (
      'file' => 'Archivo',
      'entityType' => 'Tipo de entidad',
      'imported' => 'Registros Importados',
      'duplicates' => 'registros Duplicados',
      'updated' => 'registros Actualizados',
      'status' => 'Estado',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Failed' => 'Falló',
        'In Process' => 'En proceso',
        'Complete' => 'Completo',
      ),
    ),
  ),
  'InboundEmail' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Dirección de correo electrónico',
      'team' => 'Equipo objetivo',
      'status' => 'Estado',
      'assignToUser' => 'Asignar al usuario',
      'host' => 'Servidor',
      'username' => 'Nombre de usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas sincronizadas',
      'trashFolder' => 'Carpeta de papelera',
      'ssl' => 'SSL',
      'createCase' => 'Crear ticket',
      'reply' => 'Respuesta automática',
      'caseDistribution' => 'Distribución de tickets',
      'replyEmailTemplate' => 'Plantilla de respuesta de correo',
      'replyFromAddress' => 'Responder a (dirección)',
      'replyToAddress' => 'Responder a (dirección)',
      'replyFromName' => 'Respuesta De (nombre):',
      'targetUserPosition' => 'Objetivo posición usuario',
      'fetchSince' => 'Traer correos desde',
      'addAllTeamUsers' => 'Para todos los usuarios del equipo',
      'teams' => 'Equipos',
      'sentFolder' => 'Carpeta de enviados',
      'storeSentEmails' => 'Almacenar correos enviados',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Usar SMTP',
      'smtpHost' => 'Servidor SMTP',
      'smtpPort' => 'Puerto SMTP',
      'smtpAuth' => 'Autentificación SMTP',
      'smtpSecurity' => 'Seguridad SMTP',
      'smtpUsername' => 'Usuario SMTP',
      'smtpPassword' => 'Contraseña SMTP',
      'fromName' => 'De (nombre):',
      'smtpIsShared' => 'SMTP ¿Es compartido?',
      'smtpIsForMassEmail' => 'SMTP es para envíos masivos',
    ),
    'tooltips' =>
    array (
      'reply' => 'Notifique a los remitentes de correo que han recibido sus mensajes.

Solo un correo será enviado a un destinatario particular durante un período de tiempo para evitar bucles.',
      'createCase' => 'Automaticamente crear un ticket de los correos entrantes.',
      'replyToAddress' => 'Especifique la dirección de correo de este buzón para hacer que las respuestas vegan aquí.',
      'caseDistribution' => '¿Cómo serán asignados a los tickets? Asignados directamente a un usuario o al equipo.',
      'assignToUser' => 'Los tickets de usuario se asignarán a.',
      'team' => 'Los tickets del equipo serán asignados a.',
      'teams' => 'Los correos de equipos serán asignados a.',
      'targetUserPosition' => 'Los usuarios con la posición especificada serán distribuidos a los tickets.',
      'addAllTeamUsers' => 'Los correos aparecerán en la bandeja de entrada de todos los usuarios de los equipos especificados.',
      'monitoredFolders' => 'Las carpetas deben estar separadas por comas.',
      'smtpIsShared' => 'Si se marca, entonces los usuarios podrán enviar correos usando este SMTP. La disponibilidad está controlada por Roles a través de los permisos de la cuenta de correo grupal.',
      'smtpIsForMassEmail' => 'Si está marcado, SMTP estará disponible para correo masivo.',
      'storeSentEmails' => 'Los correos electrónicos enviados se almacenarán en el servidor IMAP.',
    ),
    'links' =>
    array (
      'filters' => 'Filtros',
      'emails' => 'Correos',
      'assignToUser' => 'Assign to User',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
      'caseDistribution' =>
      array (
        '' => 'Ninguno',
        'Direct-Assignment' => 'Asignación directa',
        'Round-Robin' => 'Todos contra todos',
        'Least-Busy' => 'Menos ocupado',
      ),
    ),
    'labels' =>
    array (
      'Create InboundEmail' => 'Crear cuenta pesonal',
      'IMAP' => 'IMAP',
      'Actions' => 'Acciones',
      'Main' => 'Principal',
    ),
    'messages' =>
    array (
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
    ),
  ),
  'Integration' =>
  array (
    'fields' =>
    array (
      'enabled' => 'Activado',
      'clientId' => 'ID Cliente',
      'clientSecret' => 'Secreto del cliente',
      'redirectUri' => 'Redireccionar URI',
      'apiKey' => ' Clave para el API de JavaScript',
    ),
    'titles' =>
    array (
      'GoogleMaps' => 'Google Maps',
    ),
    'messages' =>
    array (
      'selectIntegration' => 'Seleccionar una integración en menú',
      'noIntegrations' => 'No hay integraciones disponibles',
    ),
    'help' =>
    array (
      'Google' => '<p><b>Obtener las credenciales de  OAuth 2.0 desde la Consola de Google Developers.</b></p><p>Visita <a href="https://console.developers.google.com/project">Consola Google Developers</a> para obtener las credenciales de  OAuth 2.0 tales como  ID Cliente y Secreto de Cliente que son conocidos por ambos Google y la aplicación EspoCRM.</p>',
      'GoogleMaps' => '<p>Para obtener una clave para el API de JavaScript, haga <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">click aquí</a>.</p>',
    ),
  ),
  'Job' =>
  array (
    'fields' =>
    array (
      'status' => 'Estado',
      'executeTime' => 'Ejecutar a',
      'attempts' => 'Intentos restantes',
      'failedAttempts' => 'Intentos Fallidos',
      'serviceName' => 'Servicio',
      'method' => 'Método',
      'methodName' => 'Method',
      'scheduledJob' => 'Tarea Programada',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Datos',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Pending' => 'Pendiente',
        'Success' => 'Exitoso',
        'Running' => 'Corriendo',
        'Failed' => 'Falló',
      ),
    ),
  ),
  'LayoutManager' =>
  array (
    'fields' =>
    array (
      'width' => 'Ancho (%)',
      'link' => 'Enlace',
      'notSortable' => 'No ordenable',
      'align' => 'Alinear',
      'panelName' => 'Nombre del Panel',
      'style' => 'Estilo',
      'sticked' => 'Pegado',
      'isLarge' => 'Large font size',
      'dynamicLogicVisible' => 'Conditions making panel visible',
    ),
    'options' =>
    array (
      'align' =>
      array (
        'left' => 'Izquierda',
        'right' => 'Derecha',
      ),
      'style' =>
      array (
        'default' => 'Borrador',
        'success' => 'Exito',
        'danger' => 'Peligro',
        'info' => 'Información',
        'warning' => 'Advertencia',
        'primary' => 'Principal',
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
      'post' => 'Entrada',
      'attachments' => 'Adjuntos',
      'targetType' => 'Objetivo',
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'portals' => 'Portales',
      'type' => 'Tipo',
      'isGlobal' => 'Es global',
      'isInternal' => 'Es Interno (para usuarios internos)',
      'related' => 'Relacionado',
      'createdByGender' => 'Creado por género',
      'data' => 'Datos',
      'number' => 'Número',
    ),
    'filters' =>
    array (
      'all' => 'Todos',
      'posts' => 'Entradas',
      'updates' => 'Actualizaciones',
    ),
    'options' =>
    array (
      'targetType' =>
      array (
        'self' => 'Para mí',
        'users' => 'Para determinado/s usuario/s',
        'teams' => 'Para determinado/s equipo/s',
        'all' => 'Para todos los usuarios',
        'portals' => 'Para los usuarios del portal',
      ),
      'type' =>
      array (
        'Post' => 'Post',
      ),
    ),
    'messages' =>
    array (
      'writeMessage' => 'Escriba su mensaje aquí',
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
      'name' => 'Nombre',
      'logo' => 'Logotipo',
      'url' => 'URL',
      'portalRoles' => 'Roles',
      'isActive' => 'Está activo',
      'isDefault' => 'Portal por defecto',
      'tabList' => 'Lista de pestañas',
      'quickCreateList' => 'Lista de creación rápida',
      'companyLogo' => 'Logotipo',
      'theme' => 'Tema',
      'language' => 'Idioma',
      'dashboardLayout' => 'Diseño del escritorio',
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de hora',
      'timeZone' => 'Zona horaria',
      'weekStart' => 'Primer día de la semana',
      'defaultCurrency' => 'Moneda por defecto',
      'customUrl' => 'URL personalizada',
      'customId' => 'ID personalizado',
    ),
    'links' =>
    array (
      'users' => 'Usuarios',
      'portalRoles' => 'Roles',
      'notes' => 'Notas',
      'articles' => 'Artículos de la base de conocimiento',
    ),
    'tooltips' =>
    array (
      'portalRoles' => 'Los roles del portal indicados se aplicarán a todos los usuarios de este portal.',
    ),
    'labels' =>
    array (
      'Create Portal' => 'Crear portal',
      'User Interface' => 'Interfaz del Usuario',
      'General' => 'General',
      'Settings' => 'Ajustes',
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
      'users' => 'Usuarios',
    ),
    'tooltips' =>
    array (
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
    ),
    'labels' =>
    array (
      'Access' => 'Acceder',
      'Create PortalRole' => 'Crear rol del portal',
      'Scope Level' => 'Nivel de acceso a entidades',
      'Field Level' => 'Nivel de acceso a campos',
    ),
  ),
  'PortalUser' =>
  array (
    'labels' =>
    array (
      'Create PortalUser' => 'Crear usuario del portal',
    ),
  ),
  'Preferences' =>
  array (
    'fields' =>
    array (
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de hora',
      'timeZone' => 'Zona horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por defecto',
      'currencyList' => 'Lista de monedas',
      'language' => 'Idioma',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => '¿Requiere autenticación?',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'smtpEmailAddress' => 'Correo electrónico',
      'exportDelimiter' => 'Separador de campos',
      'receiveAssignmentEmailNotifications' => 'Recibir notificaciones por correo electrónico al ser asignado',
      'receiveMentionEmailNotifications' => 'Notificaciones por correo electrónico acerca de menciones en los mensajes',
      'receiveStreamEmailNotifications' => 'Notificaciones por correo electrónico sobre los mensajes y actualizaciones de estado',
      'autoFollowEntityTypeList' => 'Seguir automaticamente (global)',
      'signature' => 'Firma de correo',
      'dashboardTabList' => 'Lista de pestañas',
      'defaultReminders' => 'Recordatorios por defecto',
      'theme' => 'Tema',
      'useCustomTabList' => 'Lista de pestañas personalizadas',
      'tabList' => 'Lista de pestañas',
      'emailReplyToAllByDefault' => 'Correo: responder a todos por defecto',
      'dashboardLayout' => 'Diseño del escritorio',
      'emailReplyForceHtml' => 'Correo: responder en formato HTML',
      'doNotFillAssignedUserIfNotRequired' => 'No precompletar usuario asignado en la creación de registros',
      'followEntityOnStreamPost' => 'Seguimiento automático después de publicar en la historia',
      'followCreatedEntities' => 'Seguimiento automático de registros creados',
      'followCreatedEntityTypeList' => 'Seguimiento automático de registros creados de tipos de entidades específicos',
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
        1 => 'Lunes',
      ),
    ),
    'labels' =>
    array (
      'Notifications' => 'Notificaciones',
      'User Interface' => 'Interfaz de usuario',
      'SMTP' => 'SMTP',
      'Misc' => 'Misceláneos',
      'Locale' => 'Localización',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default',
    ),
    'tooltips' =>
    array (
      'autoFollowEntityTypeList' => 'Siguirá automáticamente todos los registros nuevos (creados por cualquier usuario) de los tipos de entidad seleccionados. Para poder ver información en la historia y recibir notificaciones sobre todos los registros en el sistema.',
      'doNotFillAssignedUserIfNotRequired' => 'Cuando cree un registro, el usuario asignado no se completará con su propio usuario a menos que el campo sea obligatorio.',
      'followCreatedEntities' => 'Al crear nuevos registros, se seguirán automáticamente incluso si se asignaron a otro usuario.',
      'followCreatedEntityTypeList' => 'Al crear nuevos registros de los tipos de entidad seleccionados, se seguirán automáticamente incluso si se asignaron a otro usuario.',
    ),
  ),
  'Role' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
      'assignmentPermission' => 'Asignación de permisos',
      'userPermission' => 'Permisos de Usuario',
      'portalPermission' => 'Permisos del portal',
      'groupEmailAccountPermission' => 'Permiso de la cuenta de correo grupal',
      'exportPermission' => 'Export Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
    ),
    'links' =>
    array (
      'users' => 'Usuarios',
      'teams' => 'Equipos',
    ),
    'tooltips' =>
    array (
      'assignmentPermission' => 'Permite restringir la capacidad de los usuarios para que asignen registros y publicaciones a otros usuarios.

todo - sin restricción

equipo - puede asignar a usuarios de su propio equipo

no - solo puede asignarse a sí mismo',
      'userPermission' => 'Permite restringir la capacidad de los usuarios para ver tareas, calendarios y la historia de otros usuarios.

todo - pueden ver todo

equipo - pueden ver las actividades de su equipo

no - solo las propias',
      'portalPermission' => 'Define un acceso a la información del portal, la capacidad de publicar mensajes a los usuarios del portal.
',
      'groupEmailAccountPermission' => 'Define el acceso a las cuentas de correo grupales, la capacidad de enviar correos a través del SMTP grupal.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
    ),
    'labels' =>
    array (
      'Access' => 'Acceso',
      'Create Role' => 'Crear rol',
      'Scope Level' => 'Nivel de acceso a entidades',
      'Field Level' => 'Nivel de acceso a campos',
    ),
    'options' =>
    array (
      'accessList' =>
      array (
        'not-set' => 'sin establecer',
        'enabled' => 'activado',
        'disabled' => 'desactivado',
      ),
      'levelList' =>
      array (
        'all' => 'Todos',
        'team' => 'Equipo',
        'account' => 'Cuenta',
        'contact' => 'Contacto',
        'own' => 'Propio',
        'no' => 'No',
        'yes' => 'Si',
        'not-set' => 'Sin establecer',
      ),
    ),
    'actions' =>
    array (
      'read' => 'Leer',
      'edit' => 'Editar',
      'delete' => 'Borrar',
      'stream' => 'Historia',
      'create' => 'Crear',
    ),
    'messages' =>
    array (
      'changesAfterClearCache' => 'Todos los cambios en el control de acceso serán aplicacados después de limpiar la caché',
    ),
  ),
  'ScheduledJob' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'job' => 'Trabajo',
      'scheduling' => 'Programación (notación CRONTab)',
    ),
    'links' =>
    array (
      'log' => 'Registro',
    ),
    'labels' =>
    array (
      'Create ScheduledJob' => 'Crear tarea programada',
    ),
    'options' =>
    array (
      'job' =>
      array (
        'Cleanup' => 'Limpiar',
        'CheckInboundEmails' => 'Comprobar cuentas de correo grupales',
        'CheckEmailAccounts' => 'Comprobar cuentas de correo personales',
        'SendEmailReminders' => 'Enviar Recordatorios por Email',
        'AuthTokenControl' => 'Control del Token de Autenticación',
        'SendEmailNotifications' => 'Enviar notificaciones por correo electrónico',
        'CheckNewVersion' => 'Check for New Version',
        'ProcessMassEmail' => 'Enviar correo masivo',
        'ControlKnowledgeBaseArticleStatus' => 'Controlar estado de los artículos de la base de conocimiento',
      ),
      'cronSetup' =>
      array (
        'linux' => 'Nota: añada esta línea al archivo crontab para que EspoCRM pueda ejecutar las tareas programadas:',
        'mac' => 'Nota: añada esta línea al archivo crontab para que EspoCRM pueda ejecutar las tareas programadas:',
        'windows' => 'Nota: Crear un archivo por lotes con los siguientes comandos para ejecutar tareas programadas de EspoCRM usando tareas programadas de Windows:',
        'default' => 'Nota: Agregar este comando a Cron Job (Tarea Programada):',
      ),
      'status' =>
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
    ),
    'tooltips' =>
    array (
      'scheduling' => 'Define cuándo y cada cuánto el trabajo será ejecutado

*/5 * * * * - cada 5 minutos

0 */2 * * * - cada 2 horas

30 1 * * * - a las 01:30 cada día

0 0 1 * * - el primer día del mes',
    ),
  ),
  'ScheduledJobLogRecord' =>
  array (
    'fields' =>
    array (
      'status' => 'Estado',
      'executionTime' => 'Fecha de ejecución',
      'target' => 'Objetivo',
    ),
  ),
  'Settings' =>
  array (
    'fields' =>
    array (
      'useCache' => 'Usar caché',
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de hora',
      'timeZone' => 'Zona horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por defecto',
      'baseCurrency' => 'Moneda Base',
      'currencyRates' => 'Tipos de cambio',
      'currencyList' => 'Lista de monedas',
      'language' => 'Idioma',
      'companyLogo' => 'Logo de la empresa',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => '¿Requiere autenticación?',
      'smtpSecurity' => 'Seguridad',
      'smtpUsername' => 'Nombre de usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'outboundEmailFromName' => 'De (nombre):',
      'outboundEmailFromAddress' => 'De (email)',
      'outboundEmailIsShared' => '¿Es compartido?',
      'recordsPerPage' => 'Registros por página',
      'recordsPerPageSmall' => 'Registros por página (pequeño)',
      'tabList' => 'Lista de pestañas',
      'quickCreateList' => 'Lista de creación rápida',
      'exportDelimiter' => 'Separador de campos',
      'globalSearchEntityList' => 'Búsqueda Global: Lista de entidades',
      'authenticationMethod' => 'Método de autenticación',
      'ldapHost' => 'Servidor',
      'ldapPort' => 'Puerto',
      'ldapAuth' => '¿Requiere autenticación?',
      'ldapUsername' => 'Nombre de usuario',
      'ldapPassword' => 'Contraseña',
      'ldapBindRequiresDn' => 'Bind Necesita Nd (Nombre Dominio)',
      'ldapBaseDn' => 'ND Base',
      'ldapAccountCanonicalForm' => 'Forma canónica de la cuenta',
      'ldapAccountDomainName' => 'Nombre de Dominio de la Cuenta',
      'ldapTryUsernameSplit' => 'Intentar dividir el nombre de Usuario',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Crear usuario en EspoCRM',
      'ldapSecurity' => 'Seguridad',
      'ldapUserLoginFilter' => 'Usar Filtro en el Login',
      'ldapAccountDomainNameShort' => 'Nombre Dominio Corto para la Cuenta',
      'ldapOptReferrals' => 'Referencias Opt',
      'ldapUserNameAttribute' => 'Atributo de nombre de usuario',
      'ldapUserObjectClass' => 'Usuario ObjectClass',
      'ldapUserTitleAttribute' => 'Atributo del usuario Título',
      'ldapUserFirstNameAttribute' => 'Nombre de usuario Atributo',
      'ldapUserLastNameAttribute' => 'Apellido de usuario Atributo',
      'ldapUserEmailAddressAttribute' => 'Dirección de correo electrónico del usuario atributo',
      'ldapUserTeams' => 'Los equipos de los usuarios',
      'ldapUserDefaultTeam' => 'Equipo de usuario por defecto',
      'ldapUserPhoneNumberAttribute' => 'Número de teléfono del usuario Atributo',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Desactivar exportar (Solo estará permitido para el administrador)',
      'assignmentNotificationsEntityList' => 'Estas entidades notificarán al usuario cuando le sean asignadas',
      'assignmentEmailNotifications' => 'Se enviará un correo cuando reciba una asignación',
      'assignmentEmailNotificationsEntityList' => 'Entidades a notificar',
      'streamEmailNotifications' => 'Se enviará un correo sobre las actualizaciones en la historia para los usuarios internos',
      'portalStreamEmailNotifications' => 'Se enviará un correo sobre actualizaciones en la historia a los usuarios del portal',
      'streamEmailNotificationsEntityList' => 'Se notificará por correo en las siguientes entidades',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'b2cMode' => 'Modo B2C',
      'avatarsDisabled' => 'Deshabilitar avatares',
      'followCreatedEntities' => 'Seguir los registros creados',
      'displayListViewRecordCount' => 'Mostrar totales (en la vista de lista)',
      'theme' => 'Tema',
      'userThemesDisabled' => 'Deshabilitar temas de usuarios',
      'emailMessageMaxSize' => 'Tamaño máximo de los correos entrantes (Mb)',
      'massEmailMaxPerHourCount' => 'Cantidad máxima de correos enviados por hora',
      'personalEmailMaxPortionSize' => 'Cantidad máxima de correos personales que se recuperarán cada vez',
      'inboundEmailMaxPortionSize' => 'Cantidad máxima de correos grupales que se recuperarán cada vez',
      'maxEmailAccountCount' => 'Cantidad máxima de cuentas personales que se pueden crear por usuario',
      'authTokenLifetime' => 'Vida del token de autenticación (horas)',
      'authTokenMaxIdleTime' => 'Máximo tiempo de inactividad del token de autenticación (horas)',
      'dashboardLayout' => 'Diseño del escritorio (por defecto)',
      'siteUrl' => 'URL del sitio',
      'addressPreview' => 'Vista previa de la dirección',
      'addressFormat' => 'Formato de la Dirección',
      'notificationSoundsDisabled' => 'Desactivar los sonidos de notificación',
      'applicationName' => 'Nombre de la aplicación',
      'calendarEntityList' => 'Lista de entidades calendario',
      'mentionEmailNotifications' => 'Se enviará un correo cuando sean mencionados en los mensajes',
      'massEmailDisableMandatoryOptOutLink' => 'Deshabilitar la obligatoridad del enlace "darse de baja" ',
      'activitiesEntityList' => 'Lista de entidades de actividades',
      'historyEntityList' => 'Lista de entidades de historia',
      'currencyFormat' => 'Formato de Moneda',
      'currencyDecimalPlaces' => 'Lugares decimales en la moneda',
      'aclStrictMode' => 'ACL en modo estricto',
      'aclAllowDeleteCreated' => 'Permitir eliminar registros creados',
      'adminNotifications' => 'Notificaciones del sistema en el panel de administración',
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
        1 => 'Lunes',
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
      'recordsPerPage' => 'Número de registros a mostrar inicialmente en las vistas.',
      'recordsPerPageSmall' => 'Número de registros a mostrar inicialmente en los paneles relacionados',
      'outboundEmailIsShared' => 'Permitir a los usuarios enviar correos electrónicos desde esta dirección.',
      'followCreatedEntities' => 'Los usuarios seguirán automáticamente los registros que ellos crearon.',
      'emailMessageMaxSize' => 'Todos los correos entrantes que superen un tamaño especificado se omitirán.',
      'authTokenLifetime' => 'Define cuanto tiempo de vida tienen los tokens.
0 - significa que no caduca.',
      'authTokenMaxIdleTime' => 'Define cuándo caduca el Token luego del último acceso.
0 - significa que no caduca.',
      'userThemesDisabled' => 'Si está marcado, los usuarios no podrán seleccionar otro tema.',
      'ldapUsername' => 'El sistema de usuario DN completo que permite a los usuarios buscar otros. E.g. "CN=LDAP usuario del sistema,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'La contraseña para acceder al servidor LDAP.',
      'ldapAuth' => 'Credenciales de acceso para el servidor LDAP.',
      'ldapUserNameAttribute' => 'El atributo para identificar al usuario.
Por ejemplo: "userPrincipalName" o "sAMAccountName" para Active Directory, "uid" para OpenLDAP.',
      'ldapUserObjectClass' => 'Atributo ObjectClass para buscar usuarios. Por ejemplo: "person" para AD, "inetOrgPerson" para OpenLDAP.',
      'ldapAccountCanonicalForm' => 'El tipo de canonización de su cuenta. Hay 4 opciones:<br><br>
\'Dn\' - en el formato \'CN=tester,OU=espocrm,DC=test,DC=lan\'<br>
\'Username\' - \'tester\'<br>
\'Backslash\' - "COMPANY/tester\'.<br>
\'Principal\' - \'tester@company.com \'.',
      'ldapBindRequiresDn' => 'La opción para formatear el nombre de usuario en el formulario de DN.',
      'ldapBaseDn' => 'La base DN predeterminado utilizado para la búsqueda de los usuarios. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'La opción de dividir un nombre de usuario con el dominio.',
      'ldapOptReferrals' => 'La opción de dividir un nombre de usuario con el dominio.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Esta opción permite EspoCRM para crear un usuario del LDAP.',
      'ldapUserFirstNameAttribute' => 'atributo LDAP que se utiliza para determinar el nombre de usuario primero. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Equipos de usuario creado. Para más información, véase el perfil de usuario.',
      'ldapUserDefaultTeam' => 'equipo predeterminado de usuario creado. Para más información, véase el perfil de usuario.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Por defecto EspoCRM esta adaptado para B2B. Usted puede cambiarlo a B2C.',
      'currencyDecimalPlaces' => 'Número de decimales. Si está vacía, se mostrarán todas las posiciones decimales disponibles.',
      'aclStrictMode' => 'Activado: el acceso a los ámbitos estará prohibido si no está especificado en roles.

Deshabilitado: se permitirá el acceso a ámbitos si no está especificado en roles.',
      'aclAllowDeleteCreated' => 'Los usuarios podrán eliminar los registros que hayan creado, incluso si no tienen un acceso de eliminación.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
    ),
    'labels' =>
    array (
      'System' => 'Sistema',
      'Locale' => 'Localización',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuración',
      'In-app Notifications' => 'Notificaciones del sistema',
      'Email Notifications' => 'Notificaciones de correo',
      'Currency Settings' => 'Ajustes de moneda',
      'Currency Rates' => 'Tasas de conversión de divisas',
      'Mass Email' => 'Correo masivo',
      'Test Connection' => 'Probar conexión',
      'Connecting' => 'Conectando...',
      'Activities' => 'Actividades planeadas',
      'Admin Notifications' => 'Notificaciones de administrador',
    ),
    'messages' =>
    array (
      'ldapTestConnection' => 'La conexión fue establecida con éxito.',
    ),
  ),
  'Team' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
      'positionList' => 'Lista de puestos',
    ),
    'links' =>
    array (
      'users' => 'Usuarios',
      'notes' => 'Notas',
      'roles' => 'Roles',
      'inboundEmails' => 'Cuentas de correo grupales',
    ),
    'tooltips' =>
    array (
      'roles' => 'Todos los usuarios de este equipo tendrán acceso a la configuración desde los roles seleccionados',
      'positionList' => 'Puestos disponibles en este equipo. Por ejemplo Vendedor, Gerente.',
    ),
    'labels' =>
    array (
      'Create Team' => 'Crear empresa',
    ),
  ),
  'Template' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'body' => 'Cuerpo',
      'entityType' => 'Tipo de entidad',
      'header' => 'Cabecera',
      'footer' => 'Pié',
      'leftMargin' => 'Margen Izquierdo',
      'topMargin' => 'Margen Superior',
      'rightMargin' => 'Margen Derecho',
      'bottomMargin' => 'Margen Inferior',
      'printFooter' => 'Imprimir Pié',
      'footerPosition' => 'Posición del Pié',
      'variables' => 'Etiquetas disponibles.',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'fontFace' => 'Font',
    ),
    'links' =>
    array (
    ),
    'labels' =>
    array (
      'Create Template' => 'Crear plantilla',
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
      'footer' => 'Use {pageNumber} para imprimir el número de página.',
      'variables' => 'Copie y Pegue la etiqueta necesaria en el encabezado, cuerpo o pie de página.',
    ),
  ),
  'User' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'userName' => 'Nombre Usuario',
      'title' => 'Título',
      'isAdmin' => 'Es administrador',
      'defaultTeam' => 'Equipo por defecto',
      'emailAddress' => 'Correo electrónico',
      'phoneNumber' => 'Teléfono',
      'roles' => 'Roles',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del portal',
      'teamRole' => 'Puesto',
      'password' => 'Contraseña',
      'currentPassword' => 'Contraseña Actual',
      'passwordConfirm' => 'Confirmar Contraseña',
      'newPassword' => 'Nueva Contraseña',
      'newPasswordConfirm' => 'Confirmar Contraseña Nueva',
      'avatar' => 'Avatar',
      'isActive' => 'Está activo',
      'isPortalUser' => 'Es usuario del portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'sendAccessInfo' => 'Enviar información de acceso al usuario',
      'portal' => 'Portal',
      'gender' => 'Sexo',
      'position' => 'Puesto en el equipo',
      'ipAddress' => 'Dirección IP',
      'passwordPreview' => 'Vista previa de la contraseña',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Last Access',
      'acceptanceStatus' => 'Estado de Aceptación',
      'acceptanceStatusMeetings' => 'Estado de aceptación (Reuniones)',
      'acceptanceStatusCalls' => 'Estado de aceptación (Llamadas)',
    ),
    'links' =>
    array (
      'teams' => 'Equipos',
      'roles' => 'Roles',
      'notes' => 'Notas',
      'portals' => 'Portales',
      'portalRoles' => 'Roles del portal',
      'contact' => 'Contacto',
      'accounts' => 'Cuentas',
      'account' => 'Cuenta (principal)',
      'tasks' => 'Tareas',
      'targetLists' => 'Lista de objetivos',
    ),
    'labels' =>
    array (
      'Create User' => 'Crear usuario',
      'Generate' => 'Generar',
      'Access' => 'Acceso',
      'Preferences' => 'Preferencias',
      'Change Password' => 'Cambiar Contraseña',
      'Teams and Access Control' => 'Equipos y control de acceso',
      'Forgot Password?' => '¿Olvidó la Contraseña?',
      'Password Change Request' => 'Solicitar Cambio de Contraseña',
      'Email Address' => 'Correo electrónico',
      'External Accounts' => 'Cuentas externas',
      'Email Accounts' => 'Cuentas de correo',
      'Portal' => 'Portal',
      'Create Portal User' => 'Crear usuario del portal',
      'Proceed w/o Contact' => 'Continuar sin contacto',
    ),
    'tooltips' =>
    array (
      'defaultTeam' => 'Todos los registros creados por este usuario serán relacionados a este equipo por defecto.',
      'userName' => 'Letras a-z, números 0-9 y guiones bajos están permitidos',
      'isAdmin' => 'El usuario administrador puede tener acceso a todo.',
      'isActive' => 'Si lo desmarca, el usuario no podrá iniciar sesión.',
      'teams' => 'Equipos a los que este usuario pertenece. Nivel de control de acceso se hereda de los roles de equipo.',
      'roles' => 'Roles de acceso adicionales. Úsalo si el usuario no pertenece a ningún equipo o si necesita ampliar el nivel de control de acceso solo para este usuario.',
      'portalRoles' => 'Roles adicionales del portal. Utilícelos para extender el nivel de acceso exclusivamente para este usuario.',
      'portals' => 'El usuario tiene accesos a los siguientes portales.',
    ),
    'messages' =>
    array (
      'passwordWillBeSent' => 'La Contraseña será enviada al correo electrónico del usuario',
      'accountInfoEmailSubject' => 'Información Cuenta',
      'accountInfoEmailBody' => 'Información de tu cuenta:

Nombre Usuario: {userName}
Contraseña: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Solicitud de Cambio de Contraseña',
      'passwordChangeLinkEmailBody' => 'Puede cambiar su contraseña siguiendo este enlace {link}. Esta URL única expirará pronto.',
      'passwordChanged' => 'La Contraseña ha sido cambiada',
      'userCantBeEmpty' => 'El nombre de usuario no puede estar vacío',
      'wrongUsernamePasword' => 'Nombre de usuario/contraseña incorrectos',
      'emailAddressCantBeEmpty' => 'La dirección de correo no puede estar vacía',
      'userNameEmailAddressNotFound' => 'Nombre de Usuario/Correo no encontrado',
      'forbidden' => 'Prohibido, por favor intente después',
      'uniqueLinkHasBeenSent' => 'El enlace único ha sido enviado a la dirección de correo electrónico especificada.',
      'passwordChangedByRequest' => 'La contraseña ha sido cambiada.',
      'setupSmtpBefore' => 'Necesita configurar los <a href="{url}">ajustes SMTP</a> para que el sistema pueda enviar contraseñas por correo.',
      'userNameExists' => 'User Name already exists',
    ),
    'options' =>
    array (
      'gender' =>
      array (
        '' => 'No definido',
        'Male' => 'Masculino',
        'Female' => 'Femenino',
        'Neutral' => 'Neutral',
      ),
    ),
    'boolFilters' =>
    array (
      'onlyMyTeam' => 'Solo de mi equipo',
    ),
    'presetFilters' =>
    array (
      'active' => 'Activo',
      'activePortal' => 'Portales activos',
    ),
  ),
  'Account' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'website' => 'Sitio web',
      'phoneNumber' => 'Teléfono',
      'billingAddress' => 'Dirección de facturación',
      'shippingAddress' => 'Dirección de envío',
      'description' => 'Descripción',
      'sicCode' => 'Código SIC',
      'industry' => 'Industria',
      'type' => 'Tipo',
      'contactRole' => 'Título',
      'contactIsInactive' => 'Inactivo',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de objetivos',
      'targetList' => 'Lista de objetivos',
      'originalLead' => 'Posible cliente de origen',
      'formularios' => 'Formularios',
    ),
    'links' =>
    array (
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'cases' => 'Tickets',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Reuniones (ampliado)',
      'callsPrimary' => 'Llamadas (ampliado)',
      'tasksPrimary' => 'Tareas (ampliado)',
      'emailsPrimary' => 'Correos (ampliado)',
      'targetLists' => 'Lista de objetivos',
      'campaignLogRecords' => 'Registro de Campaña',
      'campaign' => 'Campaña',
      'portalUsers' => 'Usuarios del portal',
      'originalLead' => 'Posible cliente de origen',
      'formularios' => 'Formularios',
    ),
    'options' =>
    array (
      'type' =>
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Inversor',
        'Partner' => 'Socio',
        'Reseller' => 'Revendedor',
      ),
      'industry' =>
      array (
        'Aerospace' => 'Aeroespacial',
        'Agriculture' => 'Agrícola',
        'Advertising' => 'Publicidad',
        'Apparel & Accessories' => 'Ropa y accesorios',
        'Architecture' => 'Arquitectura',
        'Automotive' => 'Automotriz',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnología',
        'Building Materials & Equipment' => 'Materiales de construcción y equipamiento',
        'Chemical' => 'Química',
        'Construction' => 'Construcción',
        'Computer' => 'Computación',
        'Defense' => 'Defensa',
        'Creative' => 'Creativa',
        'Culture' => 'Cultural',
        'Consulting' => 'Consultoría',
        'Education' => 'Educación',
        'Electronics' => 'Electrónicos',
        'Electric Power' => 'Energía eléctrica',
        'Energy' => 'Energía',
        'Entertainment & Leisure' => 'Entretenimiento y ocio',
        'Finance' => 'Finanzas',
        'Food & Beverage' => 'Alimentación y bebidas',
        'Grocery' => 'Comestibles',
        'Hospitality' => 'Hostelería',
        'Healthcare' => 'Cuidado de la salud',
        'Insurance' => 'Seguros',
        'Legal' => 'Jurídica',
        'Manufacturing' => 'Fabricación',
        'Mass Media' => 'Medios masivos',
        'Mining' => 'Minería',
        'Music' => 'Música',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publicaciones',
        'Petroleum' => 'Petróleo',
        'Real Estate' => 'Bienes raices',
        'Retail' => 'Venta al por menor',
        'Shipping' => 'Naviera',
        'Service' => 'Servicio',
        'Support' => 'Soporte',
        'Sports' => 'Deportes',
        'Software' => 'Software',
        'Technology' => 'Tecnología',
        'Telecommunications' => 'Telecomunicaciones',
        'Television' => 'Televisión',
        'Testing, Inspection & Certification' => 'Pruebas, inspección y certificación',
        'Transportation' => 'Transporte',
        'Travel' => 'Viajes',
        'Venture Capital' => 'Capital de riesgo',
        'Wholesale' => 'Venta al por mayor',
        'Water' => 'Agua',
      ),
    ),
    'labels' =>
    array (
      'Create Account' => 'Crear cuenta',
      'Copy Billing' => 'Copiar desde facturación',
      'Set Primary' => 'Establecer como principal',
    ),
    'presetFilters' =>
    array (
      'customers' => 'Clientes',
      'partners' => 'Socios',
      'recentlyCreated' => 'Creado recientemente',
    ),
  ),
  'Calendar' =>
  array (
    'modes' =>
    array (
      'month' => 'Mes',
      'week' => 'Semana',
      'day' => 'Día',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Día',
      'timeline' => 'Línea de tiempo',
    ),
    'labels' =>
    array (
      'Today' => 'Hoy',
      'Create' => 'Crear',
      'Shared' => 'Compartido',
      'Add User' => 'Agregar usuario',
      'current' => 'actual',
      'time' => 'hora',
      'User List' => 'Lista de usuarios',
      'Manage Users' => 'Administrar usuarios',
      'View Calendar' => 'Ver calendario',
      'Create Shared View' => 'Create Shared View',
    ),
  ),
  'Call' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de comienzo',
      'dateEnd' => 'Fecha de finalización',
      'direction' => 'Dirección',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estado de aceptación',
    ),
    'links' =>
    array (
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Planned' => 'Planeadas',
        'Held' => 'Celebradas',
        'Not Held' => 'Sin celebrar',
      ),
      'direction' =>
      array (
        'Outbound' => 'Saliente',
        'Inbound' => 'Entrante',
      ),
      'acceptanceStatus' =>
      array (
        'None' => 'Ninguno',
        'Accepted' => 'Aceptado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' =>
    array (
      'setHeld' => 'Marcar como celebrada',
      'setNotHeld' => 'Marcar como No celebrada',
    ),
    'labels' =>
    array (
      'Create Call' => 'Crear llamada',
      'Set Held' => 'Marcar como celebrada',
      'Set Not Held' => 'Marcar como No celebrada',
      'Send Invitations' => 'Enviar Invitaciones',
    ),
    'presetFilters' =>
    array (
      'planned' => 'Planeadas',
      'held' => 'Celebradas',
      'todays' => 'De hoy',
    ),
  ),
  'Campaign' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'description' => 'Descripción',
      'status' => 'Estado',
      'type' => 'Tipo',
      'startDate' => 'Fecha de inicio',
      'endDate' => 'Fecha de finalización',
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'sentCount' => 'Enviado',
      'openedCount' => 'Abierto',
      'clickedCount' => 'Cliqueados',
      'optedOutCount' => 'Se dieron de baja',
      'bouncedCount' => 'Rebotados',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Rebotados Duro',
      'softBouncedCount' => 'Rebotado Suave',
      'leadCreatedCount' => 'Posibles clientes creados',
      'revenue' => 'Ingresos',
      'revenueConverted' => 'ingresos (convertido)',
      'budget' => 'Presupuesto',
      'budgetConverted' => 'Presupuesto (convertido)',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address',
    ),
    'links' =>
    array (
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Registros',
      'massEmails' => 'Correos masivos',
      'trackingUrls' => 'URLs de seguimiento',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
    ),
    'options' =>
    array (
      'type' =>
      array (
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Boletín de noticias',
        'Mail' => 'Correo',
      ),
      'status' =>
      array (
        'Planning' => 'Planificación',
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
        'Complete' => 'Completada',
      ),
    ),
    'labels' =>
    array (
      'Create Campaign' => 'Crear campaña',
      'Target Lists' => 'Lista de objetivos',
      'Statistics' => 'Estadísticas',
      'hard' => 'duro',
      'soft' => 'suave',
      'Unsubscribe' => 'Desuscribirse',
      'Mass Emails' => 'Correos masivos',
      'Email Templates' => 'Plantillas de correos',
      'Unsubscribe again' => 'Cancelar otra vez la suscripción',
      'Subscribe again' => 'Suscribirse nuevamente',
      'Create Target List' => 'Crear lista de obejtivos',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF',
    ),
    'presetFilters' =>
    array (
      'active' => 'Activo',
    ),
    'messages' =>
    array (
      'unsubscribed' => 'Usted ha cancelado la suscripción a nuestra lista de correo.',
      'subscribedAgain' => 'Se ha vuelto a suscribir.',
    ),
    'tooltips' =>
    array (
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.',
    ),
  ),
  'CampaignLogRecord' =>
  array (
    'fields' =>
    array (
      'action' => 'Acción',
      'actionDate' => 'Fecha',
      'data' => 'Datos',
      'campaign' => 'Campaña',
      'parent' => 'Objetivo',
      'object' => 'Objeto',
      'application' => 'Aplicacion',
      'queueItem' => 'Elemento de la cola',
      'stringData' => 'Cadena de datos',
      'stringAdditionalData' => 'Cadena de datos adicional',
      'isTest' => 'Es una prueba',
    ),
    'links' =>
    array (
      'queueItem' => 'Elemento de la cola',
      'parent' => 'Padre',
      'object' => 'Objeto',
      'campaign' => 'Campaña',
    ),
    'options' =>
    array (
      'action' =>
      array (
        'Sent' => 'Enviado',
        'Opened' => 'Abierto',
        'Opted Out' => 'Se dieron de baja',
        'Bounced' => 'Rebotados',
        'Clicked' => 'Cliqueados',
        'Lead Created' => 'Posible cliente creado',
        'Opted In' => 'Opted In',
      ),
    ),
    'labels' =>
    array (
      'All' => 'Todos',
    ),
    'presetFilters' =>
    array (
      'sent' => 'Enviado',
      'opened' => 'Abierto',
      'optedOut' => 'Se dieron de baja',
      'optedIn' => 'Opted In',
      'bounced' => 'Rebotados',
      'clicked' => 'Cliqueados',
      'leadCreated' => 'Posible cliente creado',
    ),
  ),
  'CampaignTrackingUrl' =>
  array (
    'fields' =>
    array (
      'url' => 'URL',
      'urlToUse' => 'Código para insertar en lugar de la URL',
      'campaign' => 'Campaña',
    ),
    'links' =>
    array (
      'campaign' => 'Campaña',
    ),
    'labels' =>
    array (
      'Create CampaignTrackingUrl' => 'Crear URL de seguimiento',
    ),
  ),
  'Case' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'number' => 'Número',
      'status' => 'Estado',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'contacts' => 'Contactos',
      'priority' => 'Prioridad',
      'type' => 'Tipo',
      'description' => 'Descripción',
      'inboundEmail' => 'Cuenta de Correo',
      'lead' => 'Posible cliente',
      'attachments' => 'Adjuntos',
    ),
    'links' =>
    array (
      'inboundEmail' => 'Cuenta de correo',
      'account' => 'Cuenta',
      'contact' => 'Contratos (principal)',
      'Contacts' => 'Contactos',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
      'articles' => 'Artículos de la base de conocimiento',
      'lead' => 'Posible cliente',
      'attachments' => 'Adjuntos',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'Pending' => 'Pendiente',
        'Closed' => 'Cerrados',
        'Rejected' => 'Rechazado',
        'Duplicate' => 'Duplicar',
      ),
      'priority' =>
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
      'type' =>
      array (
        'Question' => 'Pregunta',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' =>
    array (
      'Create Case' => 'Crear ticket',
      'Close' => 'Cerrar',
      'Reject' => 'Rechazar',
      'Closed' => 'Cerrados',
      'Rejected' => 'Rechazado',
    ),
    'presetFilters' =>
    array (
      'open' => 'Abiertos',
      'closed' => 'Cerrados',
    ),
  ),
  'Contact' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'account' => 'Cuenta',
      'accounts' => 'Cuentas',
      'phoneNumber' => 'Teléfono',
      'accountType' => 'Tipo de Cuenta',
      'doNotCall' => 'No llamar',
      'address' => 'Dirección',
      'opportunityRole' => 'Rol de Oportunidad',
      'accountRole' => 'Título',
      'description' => 'Descripción',
      'campaign' => 'Campaña',
      'targetLists' => 'Lista de objetivos',
      'targetList' => 'Lista de objetivos',
      'portalUser' => 'Usuario del portal',
      'originalLead' => 'Posible cliente de origen',
      'acceptanceStatus' => 'Estado de Aceptación',
      'accountIsInactive' => 'Cuenta inactiva',
      'acceptanceStatusMeetings' => 'Estado de aceptación (Reuniones)',
      'acceptanceStatusCalls' => 'Estado de aceptación (Llamadas)',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
      'rutBeneficiario' => 'Rut Beneficiario',
    ),
    'links' =>
    array (
      'opportunities' => 'Oportunidades',
      'cases' => 'Tickets',
      'targetLists' => 'Lista de objetivos',
      'campaignLogRecords' => 'Registro de Campaña',
      'campaign' => 'Campaña',
      'account' => 'Cuentas (principal)',
      'accounts' => 'Cuentas',
      'casesPrimary' => 'Tickets (principal)',
      'tasksPrimary' => 'Tasks (expanded)',
      'portalUser' => 'Usuario del portal',
      'originalLead' => 'Posible cliente de origen',
      'documents' => 'Documentos',
      'formularios' => 'Formularios',
      'formularios1' => 'Formularios1',
    ),
    'labels' =>
    array (
      'Create Contact' => 'Crear contacto',
    ),
    'options' =>
    array (
      'opportunityRole' =>
      array (
        '' => '--Ninguno--',
        'Decision Maker' => 'Tomador de decisiones',
        'Evaluator' => 'Evaluador',
        'Influencer' => 'Factor de influencia',
      ),
    ),
    'presetFilters' =>
    array (
      'portalUsers' => 'Usuarios del portal',
      'notPortalUsers' => 'No son usuarios del portal',
      'accountActive' => 'Activo',
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
      'Create Document' => 'Crear documento',
      'Details' => 'Detalles',
    ),
    'fields' =>
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'file' => 'Archivo',
      'type' => 'Tipo',
      'publishDate' => 'Fecha de publicación',
      'expirationDate' => 'Fecha de caducidad',
      'description' => 'Descripción',
      'accounts' => 'Cuentas',
      'folder' => 'Carpeta',
      'formularios' => 'Formularios',
    ),
    'links' =>
    array (
      'accounts' => 'Cuentas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Carpeta',
      'leads' => 'Posibles clientes',
      'contacts' => 'Contactos',
      'formularios' => 'Formularios',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Active' => 'Activo',
        'Draft' => 'Borrador',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado',
      ),
      'type' =>
      array (
        '' => 'Ninguno',
        'Contract' => 'Contrato',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Contrato de licencia',
      ),
    ),
    'presetFilters' =>
    array (
      'active' => 'Activo',
      'draft' => 'Borrador',
    ),
  ),
  'DocumentFolder' =>
  array (
    'labels' =>
    array (
      'Create DocumentFolder' => 'Crear carpeta de documentos',
      'Manage Categories' => 'Administrar carpetas',
      'Documents' => 'Documentos',
    ),
    'links' =>
    array (
      'documents' => 'Documentos',
    ),
  ),
  'EmailQueueItem' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'target' => 'Objetivo',
      'sentAt' => 'Fecha de envío',
      'attemptCount' => 'Intentos',
      'emailAddress' => 'Correo electrónico',
      'massEmail' => 'Correo masivo',
      'isTest' => 'Es una prueba',
    ),
    'links' =>
    array (
      'target' => 'Objetivo',
      'massEmail' => 'Correo masivo',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Pending' => 'Pendiente',
        'Sent' => 'Enviado',
        'Failed' => 'Falló',
        'Sending' => 'Enviando',
      ),
    ),
    'presetFilters' =>
    array (
      'pending' => 'Pendiente',
      'sent' => 'Enviado',
      'failed' => 'Falló',
    ),
  ),
  'KnowledgeBaseArticle' =>
  array (
    'labels' =>
    array (
      'Create KnowledgeBaseArticle' => 'Crear artículo',
      'Any' => 'Cualquiera',
      'Send in Email' => 'Enviar por correo',
      'Move Up' => 'Mover arriba',
      'Move Down' => 'Mover abajo',
      'Move to Top' => 'Mover al inicio',
      'Move to Bottom' => 'Mover al final',
    ),
    'fields' =>
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'type' => 'Tipo',
      'attachments' => 'Adjuntos',
      'publishDate' => 'Fecha de publicación',
      'expirationDate' => 'Fecha de caducidad',
      'description' => 'Descripción',
      'body' => 'Cuerpo',
      'categories' => 'Categorías',
      'language' => 'Idioma',
      'portals' => 'Portales',
    ),
    'links' =>
    array (
      'cases' => 'Tickets',
      'opportunities' => 'Oportunidades',
      'categories' => 'Categorías',
      'portals' => 'Portales',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'In Review' => 'En revisión',
        'Draft' => 'Borrador',
        'Archived' => 'Archivado',
        'Published' => 'Publicado',
      ),
      'type' =>
      array (
        'Article' => 'Artículo',
      ),
    ),
    'tooltips' =>
    array (
      'portals' => 'El artículo estará disponible solo en los portales especificados.',
    ),
    'presetFilters' =>
    array (
      'published' => 'Publicado',
    ),
  ),
  'KnowledgeBaseCategory' =>
  array (
    'labels' =>
    array (
      'Create KnowledgeBaseCategory' => 'Crear categoría',
      'Manage Categories' => 'Administrar categorías',
      'Articles' => 'Artículos',
    ),
    'links' =>
    array (
      'articles' => 'Artículos',
    ),
  ),
  'Lead' =>
  array (
    'labels' =>
    array (
      'Converted To' => 'Convertido a',
      'Create Lead' => 'Crear posible cliente',
      'Convert' => 'Convertir',
      'convert' => 'convertir',
    ),
    'fields' =>
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'website' => 'Sitio web',
      'phoneNumber' => 'Teléfono',
      'accountName' => 'Nombre de la cuenta',
      'doNotCall' => 'No llamar',
      'address' => 'Dirección',
      'status' => 'Estado',
      'source' => 'Toma de contacto',
      'opportunityAmount' => 'Costo de oportunidad',
      'opportunityAmountConverted' => 'Costo de oportunidad (convertido)',
      'description' => 'Descripción',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'campaign' => 'Campaña',
      'targetLists' => 'Listas de objetivos',
      'targetList' => 'Lista objetivo',
      'industry' => 'Industria',
      'acceptanceStatus' => 'Estado de aceptación',
      'opportunityAmountCurrency' => 'Moneda del costo de oportunidad',
      'acceptanceStatusMeetings' => 'Estado de aceptación (Reuniones)',
      'acceptanceStatusCalls' => 'Estado de aceptación (Llamadas)',
    ),
    'links' =>
    array (
      'targetLists' => 'Lista de objetivos',
      'campaignLogRecords' => 'Registros de la campaña',
      'campaign' => 'Campaña',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Oportunidad',
      'cases' => 'Tickets',
      'documents' => 'Documentos',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'In Process' => 'En proceso',
        'Converted' => 'Convertidos',
        'Recycled' => 'Reciclado',
        'Dead' => 'Muerto',
      ),
      'source' =>
      array (
        '' => 'Ninguno',
        'Call' => 'Llamada',
        'Email' => 'Correo electrónico',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Socio',
        'Public Relations' => 'Relaciones Públicas',
        'Web Site' => 'Sitio web',
        'Campaign' => 'Campaña',
        'Other' => 'Otro',
      ),
    ),
    'presetFilters' =>
    array (
      'active' => 'Activo',
      'actual' => 'Actuales',
      'converted' => 'Convertidos',
    ),
  ),
  'MassEmail' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'storeSentEmails' => 'Almacenar correos enviados',
      'startAt' => 'Fecha de inicio',
      'fromAddress' => 'De (email)',
      'fromName' => 'De (nombre):',
      'replyToAddress' => 'Responder a (dirección)',
      'replyToName' => 'Responder a (nombre)',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de correo',
      'inboundEmail' => 'Cuenta de correo',
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'optOutEntirely' => 'Dar de baja completamente',
      'smtpAccount' => 'Cuenta SMTP',
    ),
    'links' =>
    array (
      'targetLists' => 'Lista de objetivos',
      'excludingTargetLists' => 'Lista de objetivos excluídos',
      'queueItems' => 'Elementos en cola',
      'campaign' => 'Campaña',
      'emailTemplate' => 'Plantilla de correo',
      'inboundEmail' => 'Cuenta de correo',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Draft' => 'Borrador',
        'Pending' => 'Pendiente',
        'In Process' => 'En proceso',
        'Complete' => 'Completada',
        'Canceled' => 'Cancelado',
        'Failed' => 'Falló',
      ),
    ),
    'labels' =>
    array (
      'Create MassEmail' => 'Crear correo masivo',
      'Send Test' => 'Enviar prueba',
      'System SMTP' => 'Sistema SMTP',
      'system' => 'sistema',
      'group' => 'grupo',
    ),
    'messages' =>
    array (
      'selectAtLeastOneTarget' => 'Seleccione al menos un objetivo.',
      'testSent' => 'Se supone que el/los email/s de preuebas fueron enviados',
    ),
    'tooltips' =>
    array (
      'optOutEntirely' => 'Las direcciones de correo de los destinatarios que se desuscriban serán marcadas como dadas de baja y no van a recibir ningún correo masivo.',
      'targetLists' => 'Los objetivos que deben recibir los mensajes.',
      'excludingTargetLists' => 'Los objetivos que no deben recibir mensajes.',
      'storeSentEmails' => 'Los correos se almacenarán en el CRM.',
    ),
    'presetFilters' =>
    array (
      'actual' => 'Actuales',
      'complete' => 'Completo',
    ),
  ),
  'Meeting' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de comienzo',
      'dateEnd' => 'Fecha de finalización',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'reminders' => 'Recordatorios',
      'account' => 'Cuenta',
      'acceptanceStatus' => 'Estado de aceptación',
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
        'Planned' => 'Planeadas',
        'Held' => 'Celebradas',
        'Not Held' => 'Sin celebrar',
      ),
      'acceptanceStatus' =>
      array (
        'None' => 'Ninguno',
        'Accepted' => 'Aceptado',
        'Declined' => 'Rechazado',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' =>
    array (
      'setHeld' => 'Marcar como celebrada',
      'setNotHeld' => 'Marcar como No celebrada',
    ),
    'labels' =>
    array (
      'Create Meeting' => 'Crear reunión',
      'Set Held' => 'Marcar como celebrada',
      'Set Not Held' => 'Marcar como No celebrada',
      'Send Invitations' => 'Enviar Invitaciones',
      'on time' => 'a tiempo',
      'before' => 'antes',
    ),
    'presetFilters' =>
    array (
      'planned' => 'Planeadas',
      'held' => 'Celebradas',
      'todays' => 'De hoy',
    ),
    'messages' =>
    array (
      'nothingHasBeenSent' => 'No se ha enviado nada',
    ),
  ),
  'Opportunity' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'account' => 'Cuenta',
      'stage' => 'Etapa de ventas',
      'amount' => 'Ingresos esperados',
      'probability' => 'Probabilidad de ganar (%)',
      'leadSource' => 'Toma de contacto del posible cliente',
      'doNotCall' => 'No llamar',
      'closeDate' => 'Fecha esperada de cierre',
      'contacts' => 'Contactos',
      'description' => 'Descripción',
      'amountConverted' => 'Cantidad (convertido)',
      'amountWeightedConverted' => 'Cantidad Ponderada',
      'campaign' => 'Campaña',
      'originalLead' => 'Posible cliente de origen',
      'amountCurrency' => 'Monto de la Moneda',
      'contactRole' => 'Rol de contacto',
      'lastStage' => 'Last Stage',
    ),
    'links' =>
    array (
      'contacts' => 'Contactos',
      'documents' => 'Documentos',
      'campaign' => 'Campaña',
      'originalLead' => 'Posible cliente de origen',
    ),
    'options' =>
    array (
      'stage' =>
      array (
        'Prospecting' => 'Prospección',
        'Qualification' => 'Calificación',
        'Proposal' => 'Propuesta',
        'Negotiation' => 'Negociación',
        'Needs Analysis' => 'Análisis de necesidades',
        'Value Proposition' => 'Propuesta de valor',
        'Id. Decision Makers' => 'Identificar tomador de decisiones',
        'Perception Analysis' => 'Análisis de percepcion',
        'Proposal/Price Quote' => 'Propuesta/Presupuesto',
        'Negotiation/Review' => 'Negociación/Revisión',
        'Closed Won' => 'Cerrado ganado',
        'Closed Lost' => 'Cerrado perdido',
      ),
    ),
    'labels' =>
    array (
      'Create Opportunity' => 'Crear oportunidad',
    ),
    'presetFilters' =>
    array (
      'open' => 'Abiertos',
      'won' => 'Ganados',
      'lost' => 'Perdido',
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
      'name' => 'Nombre',
      'description' => 'Descripción',
      'entryCount' => 'Contador de entrada',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campañas',
      'endDate' => 'Fecha de finalización',
      'targetLists' => 'Lista de objetivos',
      'includingActionList' => 'Incluyendo',
      'excludingActionList' => 'Excluyendo',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
    ),
    'links' =>
    array (
      'accounts' => 'Cuentas',
      'contacts' => 'Contactos',
      'leads' => 'Posibles clientes',
      'campaigns' => 'Campañas',
      'massEmails' => 'Correos masivos',
    ),
    'options' =>
    array (
      'type' =>
      array (
        'Email' => 'Correo electrónico',
        'Web' => 'Web',
        'Television' => 'Televisión',
        'Radio' => 'Radio',
        'Newsletter' => 'Boletín de noticias',
      ),
      'targetStatus' =>
      array (
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed',
      ),
    ),
    'labels' =>
    array (
      'Create TargetList' => 'Crear una lista de objetivos',
      'Opted Out' => 'Se dieron de baja',
      'Cancel Opt-Out' => 'Cancelar darse de baja',
      'Opt-Out' => 'Darse de baja',
    ),
  ),
  'Task' =>
  array (
    'fields' =>
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de comienzo',
      'dateEnd' => 'Fecha de vencimiento',
      'dateStartDate' => 'Fecha de Inicio (todo el día)',
      'dateEndDate' => 'Fecha de finalización (todo el día)',
      'priority' => 'Prioridad',
      'description' => 'Descripción',
      'isOverdue' => 'Atrasado',
      'account' => 'Cuenta',
      'dateCompleted' => 'Fecha de completado',
      'attachments' => 'Adjuntos',
      'reminders' => 'Recordatorios',
      'contact' => 'Contact',
    ),
    'links' =>
    array (
      'attachments' => 'Adjuntos',
      'account' => 'Account',
      'contact' => 'Contact',
    ),
    'options' =>
    array (
      'status' =>
      array (
        'Not Started' => 'Sin empezar',
        'Started' => 'Comenzado',
        'Completed' => 'Completado',
        'Canceled' => 'Cancelado',
        'Deferred' => 'Diferido',
      ),
      'priority' =>
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' =>
    array (
      'Create Task' => 'Crear tarea',
      'Complete' => 'Completada',
    ),
    'presetFilters' =>
    array (
      'actual' => 'Actuales',
      'completed' => 'Completado',
      'deferred' => 'Diferido',
      'todays' => 'De hoy',
      'overdue' => 'Atrazadas',
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
    ),
    'links' =>
    array (
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'doctosBeneficios' => 'DoctosBeneficios',
      'categoria' => 'Categoria',
      'empresa' => 'Empresa',
      'proveedor' => 'Proveedor',
      'rol' => 'Rol',
      'comuna' => 'Comuna',
    ),
    'labels' =>
    array (
      'Create Beneficios' => 'Crear Beneficios',
    ),
  ),
  'Categoria' =>
  array (
    'fields' =>
    array (
      'subcategorias7' => 'Subcategorias',
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
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'subcategorias7' => 'Subcategorias',
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
      'Create Categoria' => 'Crear Categoria',
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
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'comunas' => 'Comunas',
    ),
    'labels' =>
    array (
      'Create Ciudad' => 'Crear Ciudad',
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
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'ciudad' => 'Ciudad',
      'trabajador' => 'Trabajador',
      'beneficios' => 'Beneficios',
    ),
    'labels' =>
    array (
      'Create Comuna' => 'Crear Comuna',
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
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'beneficios' => 'Beneficios',
    ),
    'labels' =>
    array (
      'Create DoctosBeneficio' => 'Crear Doctos_beneficio',
    ),
  ),
  'Empresa' =>
  array (
    'fields' =>
    array (
      'beneficios' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'links' =>
    array (
      'beneficios' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' =>
    array (
      'Create Empresa' => 'Vytvořit Empresa',
    ),
  ),
  'Formularios' =>
  array (
    'fields' =>
    array (
      'address' => 'Dirección',
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
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
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
      'Create Formularios' => 'Crear Formulario',
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
      'Create Proveedor' => 'Vytvořit Proveedor',
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
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'beneficioss' => 'Beneficios',
      'trabajador' => 'Trabajador',
    ),
    'labels' =>
    array (
      'Create Rol' => 'Crear Rol',
    ),
  ),
  'Solicitudes' =>
  array (
    'fields' =>
    array (
      'address' => 'Dirección',
      'rut' => 'Rut',
      'estadoSolicitud' => 'Estado solicitud',
      'beneficio' => 'Beneficio',
      'carga' => 'Carga',
      'ciudad' => 'Ciudad',
      'categoria' => 'Categoria',
      'subcategoria' => 'Subcategoria',
      'documento' => 'Documento',
      'subcategorias' => 'Subcategorias',
      'subcategoria3' => 'Subcategoria',
      'numeroSolicitud' => 'N° Solicitud',
      'fechahasta' => 'Duración del beneficio',
      'relacionsubcategoria' => 'relacionSubcategoria',
      'categoriarela' => 'Categoriarela',
    ),
    'links' =>
    array (
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'subcategorias' => 'Subcategorias',
      'subcategoria3' => 'Subcategoria',
      'relacionsubcategoria' => 'relacionSubcategoria',
      'categoriarela' => 'Categoriarela',
    ),
    'labels' =>
    array (
      'Create Solicitudes' => 'Crear Solicitudes',
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
      'categoria4' => 'Categoria',
      'categoriass' => 'Categoriass',
      'relacioncategoria' => 'RelacionCategoria',
      'relacionsolicitudes' => 'relacionSolicitudes',
      'categoria' => 'Categoriarelacion',
      'reclamosMotivoReclamo' => 'Reclamos',
    ),
    'labels' =>
    array (
      'Create MotivoReclamo' => 'Crear MotivoReclamo',
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
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'categoria1' => 'Categoria',
      'categoria2' => 'Categoria2',
      'categoria4' => 'Categoria',
      'categoriass' => 'Categoriass',
      'relacioncategoria' => 'RelacionCategoria',
      'relacionsolicitudes' => 'relacionSolicitudes',
      'categoria' => 'Categoriarelacion',
    ),
    'labels' =>
    array (
      'Create Subcategoria' => 'Crear Subcategoria',
    ),
  ),
  'Trabajador' =>
  array (
    'fields' =>
    array (
      'nombre' => 'Nombres',
      'rut' => 'Rut',
      'apellidopaterno' => 'Apellido_paterno',
      'apellidomaterno' => 'Apellido_materno',
      'nombrecompleto' => 'Nombre_completo',
      'direccion' => 'Direccion',
      'email' => 'Email',
      'telefono' => 'Telefono',
      'comunarelacion' => 'Comunarelacion',
      'empresas' => 'Empresas',
      'rol' => 'Rolrelacion',
      'empresa' => 'Empresa',
    ),
    'links' =>
    array (
      'comunarelacion' => 'Comunarelacion',
      'empresas' => 'Empresas',
      'rol' => 'Rolrelacion',
      'empresa' => 'Empresa',
    ),
    'labels' =>
    array (
      'Create Trabajador' => 'Vytvořit Trabajador',
      'motivoReclamo' => 'MotivoReclamo',
    ),
    'labels' =>
    array (
      'Create Reclamo' => 'Crear Reclamo',
    ),
    'tooltips' =>
    array (
      'reclamoTitulo' => 'Breve descripción del reclamo',
      'reclamoObservacion' => 'Describa su situación',
    ),
  ),
);
?>
