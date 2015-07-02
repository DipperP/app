<?php
/**
 * @addtogroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'wikia-videohandlers-desc' => 'Handling of videos within MediaWiki file architecture',
	'videohandler' => 'Video handler',
	'prototype-videohandler-extension-desc' => 'Prototype video handler',
	'movieclips-videohandler-extension-desc' => 'MovieClips video handler',
	'screenplay-videohandler-extension-desc' => 'Screenplay video handler',
	'youtube-videohandler-extension-desc' => 'YouTube video handler',
	'videohandler-error-missing-parameter' => 'Required parameter "$1" is missing',
	'videohandler-error-video-no-exist' => 'Video specified by title does not exist',
	'videohandler-unknown-title' => 'Unknown title',
	'videohandler-video-details' => '$1 (provider: $2)',
	'videohandler-category' => 'Videos',
	'videohandler-description' => 'Description',
	'videohandler-video-views' => '$1 {{PLURAL:$1|view|views}}',
	'videohandler-non-premium-with-links' => 'This wiki only allows licensed content from [http://video.wikia.com Wikia Video Library] to be added. Please go to [http://video.wikia.com video.wikia.com] to search for videos.',
	'videohandler-non-premium' => 'This wiki only allows licensed content from Wikia Video Library to be added. Please go to http://video.wikia.com to search for videos.',
	'videohandler-remove' => 'Remove',
	'videohandler-remove-video-modal-title' => 'Are you sure you want to remove this video from your wiki?',
	'videohandler-remove-video-modal-ok' => 'Remove',
	'videohandler-remove-video-modal-success' => 'File:$1 has been removed from this wiki',
	'videohandler-remove-video-modal-cancel' => 'Cancel',
	'videohandler-remove-error-unknown' => 'We are sorry, but something went wrong with the deletion.',
	'videohandler-log-add-description' => 'Adding video description',
	'videohandler-log-add-video' => 'created video',
	'videos-error-empty-title' => 'Empty title.',
	'videos-error-blocked-user' => 'Blocked user.',
	'videos-error-readonly' => 'Read only mode.',
	'videos-error-permissions' => 'you cannot delete this video.',
	'videohandler-error-restricted-video' => 'This video contains restricted content that cannot be displayed on this wiki',
	'videos-add-video' => 'Add a video',
	'videos-add-video-to-this-wiki' => 'Add a video to this wiki',
	'videos-add-video-label-name' => 'Enter the full URL, from any of the supported sites.',
	'videos-add-video-label-all' => 'See all',
	'videos-add-video-ok' => 'Add',
	'videos-notify' => 'Please wait while we process this video',
	'videos-something-went-wrong' => 'We are sorry, but something went wrong with the upload.',
	'videos-error-not-logged-in' => 'Please log in first.',
	'videos-error-no-video-url' => 'No video URL provided.',
	'videos-error-invalid-video-url' => 'Please enter a valid URL from a supported content provider.',
	'videos-error-unknown' => 'An unknown error occurred. Code: $1.',
	'videos-error-old-type-video' => 'Old type of videos no longer supported (VideoPage)',
	'videos-error-while-loading' => 'Error occurred while loading data. Please recheck your connection and refresh the page.',
	'videos-error-admin-only' => 'Sorry, only admins of this wiki are permitted to add videos',
	'videos-initial-upload-edit-summary' => 'created video',
	'videos-update-edit-summary' => 'updated video',
	'videos-error-provider-not-supported' => 'This video provider is not supported. View our list of [http://community.wikia.com/wiki/Help:Video_Embed_Tool#Supported_sites supported providers].',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'videohandler-category' => "Video's",
);

/** Azerbaijani (azərbaycanca)
 * @author Sortilegus
 * @author Vago
 */
$messages['az'] = array(
	'videohandler-category' => 'Videolar',
);

/** Belarusian (Taraškievica orthography) (‪беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'videohandler-category' => 'Відэа',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'videohandler-category' => 'Видео',
);

/** Breton (brezhoneg)
 * @author Gwenn-Ael
 * @author Y-M D
 */
$messages['br'] = array(
	'videohandler-category' => 'Videoioù',
	'videos-add-video-ok' => 'Graet',
	'videos-add-video-label-all' => 'Gwelet pep tra',
);

/** Bosnian (bosanski)
 * @author Palapa
 */
$messages['bs'] = array(
	'videohandler-category' => 'Videa',
);

/** Catalan (català)
 * @author Gemmaa
 * @author Paucabot
 */
$messages['ca'] = array(
	'videohandler-category' => 'Vídeos',
);

/** Czech (česky)
 * @author Mr. Richard Bolla
 */
$messages['cs'] = array(
	'videohandler-category' => 'Videa',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'videohandler-category' => 'Fideos',
);

/** German (Deutsch)
 * @author Inkowik
 * @author LWChris
 * @author PtM
 * @author Tiin
 */
$messages['de'] = array(
	'wikia-videohandlers-desc' => 'Handhabung von Videos innerhalb der MediaWiki-Dateiorganisation',
	'videohandler' => 'Video-Handler',
	'prototype-videohandler-extension-desc' => 'Prototyp-Video-Steuerung',
	'movieclips-videohandler-extension-desc' => 'MovieClips-Video-Steuerung',
	'screenplay-videohandler-extension-desc' => 'Screenplay-Video-Steuerung',
	'youtube-videohandler-extension-desc' => 'YouTube-Video-Steuerung',
	'videohandler-error-missing-parameter' => 'Erforderlicher Parameter "$1" fehlt',
	'videohandler-error-video-no-exist' => 'Video mit diesem Titel existiert nicht',
	'videohandler-unknown-title' => 'Unbekannter Titel',
	'videohandler-video-details' => '$1 (zur Verfügung gestellt von: $2)',
	'videohandler-category' => 'Videos',
	'videohandler-description' => 'Beschreibung',
	'videos-error-while-loading' => 'Fehler beim Laden von Daten. Überprüfe bitte deine Verbindung und lade die Seite erneut.',
	'videos-add-video-label-name' => 'Gib die vollständige URL von einer der unterstützten Websites ein.',
	'videos-add-video-ok' => 'Hinzufügen',
	'videos-add-video-label-all' => 'Alle anzeigen',
	'videos-add-video' => 'Video hinzufügen',
	'videos-add-video-to-this-wiki' => 'Ein neues Video zu diesem Wiki hinzufügen',
	'videohandler-video-views' => '$1 {{PLURAL:$1|Abruf|Abrufe}}',
	'videohandler-non-premium-with-links' => 'Dieses Video erlaubt ausschließlich lizenzierte Inhalte von der [http://video.wikia.com englischen Wikia Video-Bibliothek]. Bitte besuche [http://video.wikia.com video.wikia.com (englisch)], um nach englischsprachigen Videos zu suchen.',
	'videohandler-non-premium' => 'Dieses Video erlaubt ausschließlich lizenzierte Inhalte von der englischen Wikia Video-Bibliothek. Bitte besuche http://video.wikia.com (englisch), um nach englischsprachigen Videos zu suchen.',
	'videohandler-remove' => 'Entfernen',
	'videohandler-remove-video-modal-title' => 'Bist du sicher, dass du dieses Video aus deinem Wiki entfernen willst?',
	'videohandler-remove-video-modal-ok' => 'Entfernen',
	'videohandler-remove-video-modal-success' => 'Datei:$1 wurde aus diesem Wiki entfernt',
	'videohandler-remove-video-modal-cancel' => 'Abbrechen',
	'videohandler-remove-error-unknown' => 'Es tut uns leid. Bei der Löschung ist etwas schief gelaufen.',
	'videohandler-log-add-description' => 'Videobeschreibung hinzugefügt',
	'videohandler-log-add-video' => 'Video erstellt',
	'videos-error-empty-title' => 'Kein Titel angegeben.',
	'videos-error-blocked-user' => 'Blockierter Benutzer.',
	'videos-error-readonly' => '"Nur lese"-Modus.',
	'videos-error-permissions' => 'du kannst dieses Video nicht löschen.',
	'videohandler-error-restricted-video' => 'Dieses Video beinhaltet Inhalte, die nicht in diesem Wiki angezeigt werden können',
	'videos-notify' => 'Bitte warte, während dieses Video verarbeitet wird.',
	'videos-something-went-wrong' => 'Es tut uns Leid, aber etwas ist schiefgegangen beim Hochladen der Datei.',
	'videos-error-not-logged-in' => 'Bitte melde dich zuerst an.',
	'videos-error-no-video-url' => 'Keine Video-URL angegeben.',
	'videos-error-invalid-video-url' => 'Bitte gib eine gültige URL von einem unterstützten Provider an.',
	'videos-error-unknown' => 'Ein unbekannter Fehler ist aufgetreten. Code: $1.',
	'videos-error-old-type-video' => 'Dieser Video-Typ ist veraltet und wird nicht mehr unterstützt (VideoPage)',
	'videos-error-admin-only' => 'Leider können nur die Admins dieses Wikis Videos hinzufügen.',
	'videos-initial-upload-edit-summary' => 'Video erstellt',
	'videos-update-edit-summary' => 'Video wurde aktualisiert',
	'videos-error-provider-not-supported' => 'Dieser Videoanbieter wird nicht von uns unterstützt. Hier findest du die Liste der von uns [http://de.community.wikia.com/wiki/Hilfe:Wikia-Video-Erweiterung#Unterstützte_Seiten unterstützten Anbieter].',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author LWChris
 */
$messages['de-formal'] = array(
	'videohandler-category' => 'Videos',
);

/** Spanish (español)
 * @author Bola
 * @author Ciencia Al Poder
 * @author Fitoschido
 * @author Translationista
 * @author VegaDark
 */
$messages['es'] = array(
	'wikia-videohandlers-desc' => 'Manejo de vídeos dentro de la arquitectura de archivos MediaWiki',
	'videohandler' => 'Controlador de vídeo',
	'prototype-videohandler-extension-desc' => 'Controlador de vídeo Prototype',
	'movieclips-videohandler-extension-desc' => 'Controlador de vídeo MovieClips',
	'screenplay-videohandler-extension-desc' => 'Controlador de vídeo Screnplay',
	'youtube-videohandler-extension-desc' => 'Controlador de vídeo de YouTube',
	'videohandler-error-missing-parameter' => 'Falta el parámetro requerido "$1"',
	'videohandler-error-video-no-exist' => 'El vídeo especificado por título no existe',
	'videohandler-unknown-title' => 'Título desconocido',
	'videohandler-video-details' => '$1 (proveedor: $2)',
	'videohandler-category' => 'Vídeos',
	'videohandler-description' => 'Descripción',
	'videos-error-while-loading' => 'Error al cargar los datos. Por favor vuelve a comprobar tu conexión a internet y refresca la página.',
	'videos-add-video-label-name' => 'Ingresa la dirección URL completa de cualquiera de los sitios respaldados.',
	'videos-add-video-ok' => 'Añadir',
	'videos-add-video-label-all' => 'Ver todo',
	'videohandler-video-views' => '$1 {{PLURAL:$1|vista|vistas}}',
	'videohandler-non-premium-with-links' => 'Esta wikia solo permite agregar contenido bajo licencia de [http://video.wikia.com Wikia Video Library]. Por favor dirígete a [http://video.wikia.com video.wikia.com] para buscar vídeos.',
	'videohandler-non-premium' => 'Esta wikia solo permite agregar contenido bajo licencia de la videoteca de Wikia. Por favor dirígete a http://video.wikia.com para buscar vídeos.',
	'videohandler-remove' => 'Eliminar',
	'videohandler-remove-video-modal-title' => '¿Estás seguro de que quieres eliminar este vídeo de tu wikia?',
	'videohandler-remove-video-modal-ok' => 'Eliminar',
	'videohandler-remove-video-modal-success' => 'Se ha eliminado el archivo:$1 de esta wikia',
	'videohandler-remove-video-modal-cancel' => 'Cancelar',
	'videohandler-remove-error-unknown' => 'Lo sentimos, pero algo salió mal al eliminar.',
	'videohandler-log-add-description' => 'Añadir descripción del vídeo',
	'videohandler-log-add-video' => 'vídeo creado',
	'videos-error-empty-title' => 'Título vacío.',
	'videos-error-blocked-user' => 'Usuario bloqueado.',
	'videos-error-readonly' => 'Modo solo de lectura.',
	'videos-error-permissions' => 'No puedes borrar este vídeo.',
	'videohandler-error-restricted-video' => 'Este vídeo contiene contenido restringido que no puede mostrarse en esta wikia',
	'videos-add-video' => 'Añadir video',
	'videos-add-video-to-this-wiki' => 'Añadir un vídeo a esta wikia',
	'videos-notify' => 'Por favor espera mientras procesamos este vídeo',
	'videos-something-went-wrong' => 'Lo sentimos, pero algo salió mal al subir.',
	'videos-error-not-logged-in' => 'Por favor identifícate primero.',
	'videos-error-no-video-url' => 'No se proporcionó el URL del vídeo.',
	'videos-error-invalid-video-url' => 'Ingresa una URL válida de un proveedor de contenido respaldado.',
	'videos-error-unknown' => 'Se produjo un error desconocido. Código: $1.',
	'videos-error-old-type-video' => 'Los tipos de videos antiguos ya no están respaldados (VideoPage)',
	'videos-error-admin-only' => 'Lo sentimos, solo los administradores de esta wikia pueden añadir videos',
	'videos-initial-upload-edit-summary' => 'vídeo creado',
	'videos-update-edit-summary' => 'vídeo actualizado',
	'videos-error-provider-not-supported' => 'Este proveedor de videos no está respaldado. Consulta la lista de [http://comunidad.wikia.com/wiki/Ayuda:Herramienta_de_inclusi%C3%B3n_de_v%C3%ADdeos# sitios aceptados].',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'videohandler-category' => 'Bideoak',
);

/** Persian (فارسی) */
$messages['fa'] = array(
	'videohandler-category' => 'ویدیو‌ها',
);

/** Finnish (suomi)
 * @author Centerlink
 * @author Crt
 */
$messages['fi'] = array(
	'videohandler-category' => 'Videot',
	'videohandler' => 'katsottu {{PLURAL:$1|kerran|$1 kertaa}}',
	'videohandler-video-views' => 'katsottu {{PLURAL:$1|kerran|$1 kertaa}}',
	'videos-add-video' => 'Lisää video',
);

/** French (français)
 * @author IAlex
 * @author Wyz
 */
$messages['fr'] = array(
	'wikia-videohandlers-desc' => "Gestion des vidéos au sein de l'architecture de fichiers de MediaWiki",
	'videohandler' => '$1 {{PLURAL:$1|vue|vues}}',
	'prototype-videohandler-extension-desc' => 'Gestionnaire de vidéos de Prototype',
	'movieclips-videohandler-extension-desc' => 'Gestionnaire de vidéos de MovieClips',
	'screenplay-videohandler-extension-desc' => 'Gestionnaire de vidéos de ScreenPlay',
	'youtube-videohandler-extension-desc' => 'Gestionnaire de vidéos de YouTube',
	'videohandler-error-missing-parameter' => 'Le paramètre « $1 » obligatoire est manquant',
	'videohandler-error-video-no-exist' => 'La vidéo dont le titre est indiqué n’existe pas',
	'videohandler-unknown-title' => 'Titre inconnu',
	'videohandler-video-details' => '$1 (fournisseur : $2)',
	'videohandler-category' => 'Vidéos',
	'videohandler-description' => 'Description',
	'videos-error-while-loading' => 'Une erreur est survenue lors du chargement des données. Veuillez vérifier votre connexion et rafraîchir la page.',
	'videos-add-video-label-name' => "Entrez l'URL complète, de n'importe lequel des sites pris en charge.",
	'videos-add-video-ok' => 'Ajouter',
	'videos-add-video-label-all' => 'Tout voir',
	'videohandler-video-views' => '$1 {{PLURAL:$1|vue|vues}}',
	'videohandler-non-premium-with-links' => "Ce wiki ne permet que l'ajout du contenu sous licence de [http://video.wikia.com Wikia Video Library]. Veuillez vous rendre sur [http://video.wikia.com video.wikia.com] pour rechercher des vidéos.",
	'videohandler-non-premium' => "Ce wiki n'autorise l'ajout de contenu sous licence que de Wikia Video Library. Veuillez vous rendre sur http://video.wikia.com pour rechercher des vidéos.",
	'videohandler-remove' => 'Retirer',
	'videohandler-remove-video-modal-title' => 'Êtes-vous sûr(e) de vouloir retirer cette vidéo du wiki ?',
	'videohandler-remove-video-modal-ok' => 'Retirer',
	'videohandler-remove-video-modal-success' => 'Fichier:$1 a été retiré de ce wiki',
	'videohandler-remove-video-modal-cancel' => 'Annuler',
	'videohandler-remove-error-unknown' => 'Désolés, une erreur a eu lieu lors de la suppression.',
	'videohandler-log-add-description' => 'description vidéo ajoutée',
	'videohandler-log-add-video' => 'vidéo ajoutée',
	'videos-error-empty-title' => 'Titre vide.',
	'videos-error-blocked-user' => 'Utilisateur bloqué.',
	'videos-error-readonly' => 'Mode lecture seule.',
	'videos-error-permissions' => 'vous ne pouvez pas supprimer cette vidéo.',
	'videohandler-error-restricted-video' => 'Cette vidéo contient du contenu restreint qui ne peut pas être affiché sur ce wiki',
	'videos-add-video' => 'Ajouter une vidéo',
	'videos-add-video-to-this-wiki' => 'Ajouter une vidéo à ce wiki',
	'videos-notify' => 'Veuillez patienter tandis que nous traitons cette vidéo',
	'videos-something-went-wrong' => "Désolé, l'importation s'est mal déroulée.",
	'videos-error-not-logged-in' => "Veuillez d'abord vous connecter.",
	'videos-error-no-video-url' => 'Aucune URL indiquée pour la vidéo.',
	'videos-error-invalid-video-url' => "Veuillez saisir une URL valide d'un fournisseur de contenu supporté.",
	'videos-error-unknown' => 'Une erreur inconnue est survenue. Code: $1.',
	'videos-error-old-type-video' => "Ancien type de vidéo qui n'est plus supporté (VideoPage)",
	'videos-error-admin-only' => "Désolé, seuls les administrateurs du wiki ont le droit d'ajouter des vidéos",
	'videos-initial-upload-edit-summary' => 'vidéo ajoutée',
	'videos-update-edit-summary' => 'vidéo téléchargéee',
	'videos-error-provider-not-supported' => "Ce fournisseur de vidéo n'est pas pris en charge. Consultez la liste des [http://communaute.wikia.com/wiki/Aide:Outil_d%27incorporation_de_vid%C3%A9o# fournisseurs pris en charge].",
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'wikia-videohandlers-desc' => 'Manipulación de vídeos dentro da arquitectura de ficheiros de MediaWiki',
	'videohandler' => 'Manipulador de vídeos',
	'prototype-videohandler-extension-desc' => 'Manipulador de vídeos de Prototype',
	'movieclips-videohandler-extension-desc' => 'Manipulador de vídeos de MovieClips',
	'screenplay-videohandler-extension-desc' => 'Manipulador de vídeos de Screnplay',
	'youtube-videohandler-extension-desc' => 'Manipulador de vídeos de YouTube',
	'videohandler-error-missing-parameter' => 'Falta o parámetro obrigatorio "$1"',
	'videohandler-error-video-no-exist' => 'Non existe ningún vídeo con ese título',
	'videohandler-unknown-title' => 'Título descoñecido',
	'videohandler-video-details' => '$1 (provedor: $2)',
	'videohandler-category' => 'Vídeos',
	'videohandler-description' => 'Descrición',
	'videos-error-while-loading' => 'Houbo un erro ao cargar os datos. Volva comprobar a súa conexión e recargue a páxina.',
	'videos-add-video-label-name' => 'Escriba o enderezo URL completo de calquera dos sitios soportados.',
	'videos-add-video-ok' => 'Engadir',
	'videos-add-video-label-all' => 'Ollar todos',
);

/** Hebrew (עברית)
 * @author שומבלע
 */
$messages['he'] = array(
	'videohandler-category' => 'סרטוני וידאו',
);

/** Hungarian (magyar)
 * @author Glanthor Reviol
 * @author TK-999
 */
$messages['hu'] = array(
	'videohandler' => 'Videókezelő',
	'prototype-videohandler-extension-desc' => 'Prototype videókezelő',
	'movieclips-videohandler-extension-desc' => 'MovieClips videókezelő',
	'screenplay-videohandler-extension-desc' => 'Screnplay videókezelő',
	'youtube-videohandler-extension-desc' => 'YouTube videókezelő',
	'videohandler-error-video-no-exist' => 'A cím által meghatározott videó nem létezik',
	'videohandler-unknown-title' => 'Ismeretlen cím',
	'videohandler-video-details' => '$1 (szolgáltató: $2 )',
	'videohandler-category' => 'Videók',
	'videohandler-description' => 'Leírás',
	'videos-error-while-loading' => 'Hiba történt az adatok betöltése közben. Kérlek, ellenőrizd az internetkapcsolatodat és frissítsd az oldalt.',
	'videos-add-video-label-name' => 'Írd be a teljes URL-címet valamely támogatott webhelyről.',
	'videos-add-video-ok' => 'Hozzáadás',
	'videos-add-video-label-all' => 'Összes megtekintése',
	'videos-update-edit-summary' => 'Videó frissítve',
);

/** Armenian (Հայերեն)
 * @author Pandukht
 */
$messages['hy'] = array(
	'videohandler-category' => 'Տեսանյութեր',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'videohandler' => 'Gestor de videos',
	'prototype-videohandler-extension-desc' => 'Gestor de videos Prototype',
	'movieclips-videohandler-extension-desc' => 'Gestor de videos MovieClips',
	'screenplay-videohandler-extension-desc' => 'Gestor de videos ScreenPlay',
	'youtube-videohandler-extension-desc' => 'Gestor de videos YouTube',
	'videohandler-error-video-no-exist' => 'Le video specificate per le titulo non existe',
	'videohandler-unknown-title' => 'Titulo incognite',
	'videohandler-video-details' => '$1 (fornitor: $2)',
	'videohandler-category' => 'Videos',
	'videohandler-description' => 'Description',
	'videos-error-while-loading' => 'Un error occurreva durante le cargamento del datos. Per favor re-verifica tu connexion e refresca le pagina.',
	'videos-add-video-label-name' => 'Entra le URL complete de un del sitos supportate.',
	'videos-add-video-ok' => 'Adder',
	'videos-add-video-label-all' => 'Vider totes',
);

/** Indonesian (Bahasa Indonesia)
 * @author Irwangatot
 * @author Kenrick95
 */
$messages['id'] = array(
	'videohandler-category' => 'Video',
);

/** Italian (italiano)
 * @author HalphaZ
 */
$messages['it'] = array(
	'videohandler-category' => 'Video',
	'wikia-videohandlers-desc' => 'Gestione dei video con MediaWikia',
	'videohandler' => 'Gestore di video',
	'prototype-videohandler-extension-desc' => 'Gestore video di Prototype',
	'movieclips-videohandler-extension-desc' => 'Gestore video di MovieClips',
	'screenplay-videohandler-extension-desc' => 'Gestore video di Screenplay',
	'youtube-videohandler-extension-desc' => 'Gestore video di YouTube',
	'videohandler-error-missing-parameter' => 'Manca il parametro richiesto "$1"',
	'videohandler-error-video-no-exist' => 'Il titolo del video specificato non esiste',
	'videohandler-unknown-title' => 'Titolo sconosciuto',
	'videohandler-video-details' => '$1 (provider: $2)',
	'videohandler-description' => 'Descrizione',
	'videohandler-video-views' => '$1 {{PLURAL:$1|visualizzazione|visualizzazioni}}',
	'videohandler-non-premium-with-links' => 'Questa wiki permette di inserire solo contenuti con licenza derivanti da [http://video.wikia.com Wikia Video Library]. Per favore visita [http://video.wikia.com video.wikia.com] per ricercare i video.',
	'videohandler-non-premium' => 'Questa wiki permette di inserire solo contenuti con licenza derivanti da Wikia Video Library. Per favore visita http://video.wikia.com per ricercare i video.',
	'videohandler-remove' => 'Rimuovi',
	'videohandler-remove-video-modal-title' => 'Sei sicuro/a di voler rimuovere questo video dalla wiki?',
	'videohandler-remove-video-modal-ok' => 'Rimuovi',
	'videohandler-remove-video-modal-success' => 'Il File:$1 è stato rimosso da questa wiki',
	'videohandler-remove-video-modal-cancel' => 'Annulla',
	'videohandler-remove-error-unknown' => 'Ci dispiace ma qualcosa non ha funzionato con la cancellazione.',
	'videohandler-log-add-description' => 'Aggiunta descrizione video',
	'videohandler-log-add-video' => 'video aggiunto',
	'videos-error-empty-title' => 'Titolo vuoto.',
	'videos-error-blocked-user' => 'Utente bloccato.',
	'videos-error-readonly' => 'Modalità di sola lettura.',
	'videos-error-permissions' => 'non puoi rimuovere questo video.',
	'videohandler-error-restricted-video' => 'Questo video contiene materiale riservato che non può essere visualizzato su questa wiki',
	'videos-add-video' => 'Carica un video',
	'videos-add-video-to-this-wiki' => 'Carica un video in questa wiki',
	'videos-add-video-label-name' => "Inserisci l'URL completo da uno dei siti supportati.",
	'videos-add-video-label-all' => 'Vedi tutti',
	'videos-add-video-ok' => 'Carica',
	'videos-notify' => 'Per favore aspetta mentre processiamo questo video',
	'videos-something-went-wrong' => 'Ci dispiace, ma qualcosa non ha funzionato durante il caricamento.',
	'videos-error-not-logged-in' => 'Per favore prima effettua il login.',
	'videos-error-no-video-url' => 'Non è stato fornito alcun URL del video.',
	'videos-error-invalid-video-url' => 'Per favore inserisci un URL valido da uno dei siti supportati.',
	'videos-error-unknown' => 'Si è verificato un errore sconosciuto. Codice: $1.',
	'videos-error-old-type-video' => 'Vecchio tipo di video non più supportato (VideoPage)',
	'videos-error-while-loading' => 'Si è verificato un errore durante il caricamento dei dati. Per favore controlla la tua connessione e ricarica la pagina.',
	'videos-error-admin-only' => 'Solo gli amministratori di questa wiki sono autorizzati ad aggiungere video',
	'videos-initial-upload-edit-summary' => 'ha inserito un video',
	'videos-update-edit-summary' => 'video aggiornato',
	'videos-error-provider-not-supported' => 'Questo provider di video non è supportato. Vedi la lista dei [http://community.wikia.com/wiki/Help:Video_Embed_Tool#Supported_sites provider supportati].',
);

/** Japanese (日本語)
 * @author Schu
 * @author Tommy6
 */
$messages['ja'] = array(
	'videohandler-category' => '動画',
	'wikia-videohandlers-desc' => 'MediaWikiファイルのアーキテクチャ内における動画の処理',
	'videohandler' => 'このウィキは唯一[http://video.wikia.com ウィキアビデオライブラリ]で許諾されたコンテンツを追加することができます。[http://video.wikia.com video.wikia.com] でビデオを検索してみてください。',
	'prototype-videohandler-extension-desc' => 'Prototype動画ハンドラ',
	'movieclips-videohandler-extension-desc' => 'MovieClips動画ハンドラ',
	'screenplay-videohandler-extension-desc' => 'Screenplay動画ハンドラ',
	'youtube-videohandler-extension-desc' => 'YouTube動画ハンドラ',
	'videohandler-error-missing-parameter' => '必須のパラメータ「$1」が入力されていません',
	'videohandler-error-video-no-exist' => '指定したタイトルの動画は存在しません',
	'videohandler-unknown-title' => '不明なタイトル',
	'videohandler-video-details' => '$1（提供元：$2）',
	'videohandler-description' => '説明',
	'videohandler-video-views' => '$1回の {{PLURAL:$1|view|views}}',
	'videohandler-non-premium-with-links' => 'このウィキは唯一[http://video.wikia.com ウィキアビデオライブラリ]で許諾されたコンテンツを追加することができます。[http://video.wikia.com video.wikia.com] でビデオを検索してみてください。',
	'videohandler-non-premium' => 'このウィキは唯一[http://video.wikia.com ウィキアビデオライブラリ]で許諾されたコンテンツを追加することができます。[http://video.wikia.com video.wikia.com] でビデオを検索してみてください。',
	'videohandler-remove' => '削除',
	'videohandler-remove-video-modal-title' => 'ウィキアからこの動画を削除してもよろしいですか？',
	'videohandler-remove-video-modal-ok' => '削除',
	'videohandler-remove-video-modal-success' => 'ファイル「$1」をこのウィキアから削除しました',
	'videohandler-remove-video-modal-cancel' => 'キャンセル',
	'videohandler-remove-error-unknown' => '申し訳ありませんが、削除中に問題が発生しました。',
	'videohandler-log-add-description' => '動画の説明を追加しています',
	'videohandler-log-add-video' => '動画を作成しました',
	'videos-error-empty-title' => 'タイトルが指定されていません。',
	'videos-error-blocked-user' => 'ユーザーはブロックされています。',
	'videos-error-readonly' => '読み取り専用モードです。',
	'videos-error-permissions' => 'この動画は削除できません。',
	'videohandler-error-restricted-video' => 'この動画には、このウィキアに表示することができない禁止のコンテンツが含まれています',
	'videos-add-video' => '動画を追加',
	'videos-add-video-to-this-wiki' => 'このウィキアに動画を追加する',
	'videos-add-video-label-name' => 'サポートされているサイトの完全なURLを入力してください。',
	'videos-add-video-label-all' => 'すべて表示',
	'videos-add-video-ok' => '追加',
	'videos-notify' => 'この動画の処理が終わるまでしばらくお待ちください',
	'videos-something-went-wrong' => '申し訳ありませんが、アップロード中に問題が発生しました。',
	'videos-error-not-logged-in' => 'まずログインしてください。',
	'videos-error-no-video-url' => '動画のURLが指定されていません。',
	'videos-error-invalid-video-url' => '対応しているコンテンツの提供元からの有効なURLを入力してください。',
	'videos-error-unknown' => '不明なエラーが発生しました。コード：$1。',
	'videos-error-old-type-video' => '種類が古い動画（VideoPage）は対応外です',
	'videos-error-while-loading' => 'データの読み込み中にエラーが発生しました。接続をもう一度確認して、ページを更新してください。',
	'videos-error-admin-only' => '申し訳ありませんが、動画を追加できるのはこのウィキアの管理者のみです',
	'videos-initial-upload-edit-summary' => '動画を作成しました',
	'videos-update-edit-summary' => '動画を更新しました',
	'videos-error-provider-not-supported' => 'この動画の提供元は対応外です。対応サイトのリストについては、[http://ja.community.wikia.com/wiki/ヘルプ:動画埋め込みツール#対応サイト こちら]をご覧ください。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'videohandler-category' => 'ვიდეოები',
);

$messages['ko'] = array(
	'videohandler' => '$1회 조회됨',
	'videohandler-error-missing-parameter' => "값이 필수로 들어가야 하는 '$1' 변수가 누락되어 있습니다.",
	'videohandler-error-video-no-exist' => '입력한 이름을 가진 동영상이 없습니다.',
	'videohandler-unknown-title' => '이름 알 수 없음',
	'videohandler-video-details' => '$1 (제공자: $2)',
	'videohandler-category' => '동영상',
	'videohandler-description' => '설명',
	'videohandler-video-views' => '$1회 조회됨',
	'videohandler-non-premium-with-links' => '이 위키에 [http://video.wikia.com 위키아 동영상 라이브러리 (영어)]의 저작권이 있는 동영상을 불러와 올릴 수 있습니다. 동영상을 찾아보려면 [http://video.wikia.com video.wikia.com]을 방문하세요.',
	'videohandler-non-premium' => '이 위키에 위키아 동영상 라이브러리의 저작권이 있는 동영상을 불러와 올릴 수 있습니다. 동영상을 찾아보려면 http://video.wikia.com 사이트를 방문하세요.',
	'videohandler-remove' => '삭제',
	'videohandler-remove-video-modal-title' => '정말로 이 동영상을 이 위키에서 삭제하시겠습니까?',
	'videohandler-remove-video-modal-ok' => '삭제',
	'videohandler-remove-video-modal-success' => 'File:$1 이(가) 이 위키에서 삭제되었습니다.',
	'videohandler-remove-video-modal-cancel' => '취소',
	'videos-error-empty-title' => '동영상의 제목을 입력하세요.',
	'videos-error-blocked-user' => '이 위키에서 차단되어 있으므로 동영상을 올릴 수 없습니다.',
	'videos-error-readonly' => '현재 읽기 전용 상태입니다. 읽기 전용 상태가 해제된 후 다시 시도하세요.',
	'videos-error-permissions' => '이 동영상을 삭제할 수 있는 권한이 없습니다.',
	'videohandler-error-restricted-video' => '이 동영상은 부적절한 내용을 포함하고 있어 이 위키에서 볼 수 없도록 차단되었습니다.',
	'videos-add-video' => '동영상 추가하기',
	'videos-add-video-to-this-wiki' => '이 위키에 동영상 추가하기',
	'videos-add-video-label-name' => '지원되는 동영상 사이트에 있는 동영상의 URL을 입력하세요.',
	'videos-add-video-label-all' => '모두 보기',
	'videos-add-video-ok' => '추가',
	'videos-notify' => '동영상을 처리하는 동안 잠시 기다려 주십시오.',
	'videos-something-went-wrong' => '동영상을 추가하는 과정에서 오류가 발생했습니다.',
	'videos-error-not-logged-in' => '동영상을 추가하기 위해서는 로그인이 필요합니다.',
	'videos-error-no-video-url' => '동영상의 URL이 입력되지 않았습니다.',
	'videos-error-invalid-video-url' => '지원되는 동영상 사이트의 이용 가능한 URL을 입력하십시오.',
	'videos-error-unknown' => '알 수 없는 오류가 발생했습니다. 오류 코드: $1',
	'videos-error-old-type-video' => '오래된 형태의 동영상은 더 이상 지원되지 않습니다. (동영상 이름공간)',
	'videos-error-while-loading' => '데이터를 불러오는 도중에 오류가 발생했습니다. 인터넷 연결 상태를 확인해보시고 페이지를 새로고침하세요.',
	'videos-initial-upload-edit-summary' => '새 동영상을 올림',
);

/** Karachay-Balkar (къарачай-малкъар)
 * @author Къарачайлы
 */
$messages['krc'] = array(
	'videohandler-category' => 'Видеола',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'videohandler-category' => 'Videoen',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'wikia-videohandlers-desc' => 'Поставување на видеа во рамките на податотечната архитектура на МедијаВики',
	'videohandler' => 'Поставување на видеа',
	'prototype-videohandler-extension-desc' => 'Прототипен поставувач на видеа',
	'movieclips-videohandler-extension-desc' => 'Поставувач на видеа од MovieClips',
	'screenplay-videohandler-extension-desc' => 'Поставувач на видеа од Screnplay',
	'youtube-videohandler-extension-desc' => 'Поставувач на видеа од YouTube',
	'videohandler-error-missing-parameter' => 'Недостасува задолжителниот параметар „$1“',
	'videohandler-error-video-no-exist' => 'Не постои видео со таков наслов',
	'videohandler-unknown-title' => 'Непознат наслов',
	'videohandler-video-details' => '$1 (добавувач: $2)',
	'videohandler-category' => 'Видеоснимки',
	'videohandler-description' => 'Опис',
	'videohandler-video-views' => '$1 {{PLURAL:$1|преглед|прегледи}}',
	'videos-error-while-loading' => 'Не појави грешка при вчитувањето на податоците. Проверете си ја врската со интернет и превчитајте ја страницата.',
	'videos-add-video-label-name' => 'Внесете ја полната URL-адреса од едно од поддржаните мрежни места.',
	'videos-add-video-ok' => 'Додај',
	'videos-add-video-label-all' => 'Прикажи ги сите',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'videohandler' => 'Pengelola video',
	'prototype-videohandler-extension-desc' => 'Pengelola video prototaip',
	'movieclips-videohandler-extension-desc' => 'Pengelola video MovieClips',
	'screenplay-videohandler-extension-desc' => 'Pengelola video ScreenPlay',
	'youtube-videohandler-extension-desc' => 'Pengelola video YouTube',
	'videohandler-error-missing-parameter' => 'Parameter wajib "$1" tertinggal',
	'videohandler-error-video-no-exist' => 'Tiada video dengan tajuk yang dinyatakan',
	'videohandler-unknown-title' => 'Tajuk tidak diketahui',
	'videohandler-video-details' => '$1 (penyedia: $2)',
	'videohandler-category' => 'Video',
	'videohandler-description' => 'Keterangan',
	'videos-error-while-loading' => 'Berlakunya ralat ketika memuatkan data. Sila semak semula sambungan anda dan muatkan semula laman ini.',
	'videos-add-video-label-name' => 'Isikan URL penuh dari mana-mana tapak web yang disokong.',
	'videos-add-video-ok' => 'Tambahkan',
	'videos-add-video-label-all' => 'Lihat semua',
);

/** Norwegian Bokmål (‪norsk (bokmål)‬)
 * @author Audun
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'wikia-videohandlers-desc' => 'Behandling av videoer innenfor MediaWikis filarkitektur',
	'videohandler' => 'Videobehandler',
	'prototype-videohandler-extension-desc' => 'Prototype-videobehandler',
	'movieclips-videohandler-extension-desc' => 'MovieClips-videobehandler',
	'screenplay-videohandler-extension-desc' => 'Screenplay-videobehandler',
	'youtube-videohandler-extension-desc' => 'YouTube-videobehandler',
	'videohandler-error-missing-parameter' => 'Påkrevd parameter «$1» mangler',
	'videohandler-error-video-no-exist' => 'Video spesifisert med tittel eksisterer ikke',
	'videohandler-unknown-title' => 'Ukjent tittel',
	'videohandler-video-details' => '$1 (leverandør: $2)',
	'videohandler-category' => 'Videoer',
	'videohandler-description' => 'Beskrivelse',
	'videos-error-while-loading' => 'Det oppstod en feil under lasting av data. Vennligst sjekk din netttilkobling og oppdater siden.',
	'videos-add-video-label-name' => 'Oppgi en fullstendig URL fra en av de støttede sidene.',
	'videos-add-video-ok' => 'Legg til',
	'videos-add-video-label-all' => 'Vis alle',
);

/** Dutch (Nederlands)
 * @author AvatarTeam
 * @author Siebrand
 */
$messages['nl'] = array(
	'videohandler' => 'Videoverwerking',
	'prototype-videohandler-extension-desc' => 'Prototype videoverwerking',
	'videohandler-error-missing-parameter' => 'Vereiste parameter "$1" ontbreekt',
	'videohandler-unknown-title' => 'Onbekende titel',
	'videohandler-video-details' => '$1 (provider: $2)',
	'videohandler-category' => "Video's",
	'videohandler-description' => 'Beschrijving',
	'videos-error-while-loading' => 'Fout is opgetreden tijdens het laden van gegevens. Controleer alstublieft uw verbinding en ververs de pagina.',
	'videos-add-video-label-name' => 'Geef een volledige URL op van een van de ondersteunde websites.',
	'videos-add-video-ok' => 'Toevoegen',
	'videos-add-video-label-all' => 'Allemaal bekijken',
	'wikia-videohandlers-desc' => 'Handling of videos within MediaWiki file architecture',
	'movieclips-videohandler-extension-desc' => 'MovieClips video handler',
	'screenplay-videohandler-extension-desc' => 'Screenplay video handler',
	'youtube-videohandler-extension-desc' => 'YouTube video handler',
	'videohandler-error-video-no-exist' => 'Video specified by title does not exist',
	'videohandler-video-views' => '$1 {{PLURAL:$1|view|views}}',
	'videohandler-non-premium-with-links' => 'This wiki only allows licensed content from [http://video.wikia.com Wikia Video Library] to be added. Please go to [http://video.wikia.com video.wikia.com] to search for videos.',
	'videohandler-non-premium' => 'This wiki only allows licensed content from Wikia Video Library to be added. Please go to http://video.wikia.com to search for videos.',
	'videohandler-remove' => 'Remove',
	'videohandler-remove-video-modal-title' => 'Are you sure you want to remove this video from your wiki?',
	'videohandler-remove-video-modal-ok' => 'Remove',
	'videohandler-remove-video-modal-success' => 'File:$1 has been removed from this wiki',
	'videohandler-remove-video-modal-cancel' => 'Cancel',
	'videohandler-remove-error-unknown' => 'We are sorry, but something went wrong with the deletion.',
	'videohandler-log-add-description' => 'Adding video description',
	'videohandler-log-add-video' => 'created video',
	'videos-error-empty-title' => 'Empty title.',
	'videos-error-blocked-user' => 'Blocked user.',
	'videos-error-readonly' => 'Read only mode.',
	'videos-error-permissions' => 'you cannot delete this video.',
	'videohandler-error-restricted-video' => 'This video contains restricted content that cannot be displayed on this wiki',
	'videos-add-video' => 'Add a video',
	'videos-add-video-to-this-wiki' => 'Add a video to this wiki',
	'videos-notify' => 'Please wait while we process this video',
	'videos-something-went-wrong' => 'We are sorry, but something went wrong with the upload.',
	'videos-error-not-logged-in' => 'Please log in first.',
	'videos-error-no-video-url' => 'No video URL provided.',
	'videos-error-invalid-video-url' => 'Please enter a valid URL from a supported content provider.',
	'videos-error-unknown' => 'An unknown error occurred. Code: $1.',
	'videos-error-old-type-video' => 'Old type of videos no longer supported (VideoPage)',
	'videos-error-admin-only' => 'Sorry, only admins of this wiki are permitted to add videos',
	'videos-initial-upload-edit-summary' => 'created video',
	'videos-update-edit-summary' => 'updated video',
	'videos-error-provider-not-supported' => 'This video provider is not supported. View our list of [http://community.wikia.com/wiki/Help:Video_Embed_Tool#Supported_sites supported providers].',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Aalam
 */
$messages['pa'] = array(
	'videohandler-category' => 'ਵਿਡੀਓ',
);

/** Polish (polski)
 * @author Marcin Łukasz Kiejzik
 * @author Sovq
 * @author Sp5uhe
 * @author Woytecr
 */
$messages['pl'] = array(
	'wikia-videohandlers-desc' => 'Obsługa filmów wewnątrz systemu plików MediaWiki',
	'videohandler' => '$1 {{PLURAL:$1|wyświetlenie|wyświetlenia|wyświetleń}}',
	'prototype-videohandler-extension-desc' => 'Odtwarzacz filmów Prototype',
	'movieclips-videohandler-extension-desc' => 'Odtwarzacz filmów MovieClips',
	'screenplay-videohandler-extension-desc' => 'Odtwarzacz filmów Screenplay',
	'youtube-videohandler-extension-desc' => 'Odtwarzacz filmów YouTube',
	'videohandler-error-missing-parameter' => 'Brak wymaganego parametru "$1"',
	'videohandler-error-video-no-exist' => 'Film o tym tytule nie istnieje',
	'videohandler-unknown-title' => 'Nieznany tytuł',
	'videohandler-video-details' => '$1 (z $2)',
	'videohandler-category' => 'Filmy',
	'videohandler-description' => 'Opis',
	'videos-error-while-loading' => 'Wystąpił błąd podczas ładowania danych. Sprawdź ponownie połączenie i odśwież stronę.',
	'videos-add-video-label-name' => 'Wpisz pełny adres URL z jednej z obsługiwanych witryn.',
	'videos-add-video-ok' => 'Dodaj',
	'videos-add-video-label-all' => 'Pokaż wszystko',
	'videohandler-video-views' => '$1 {{PLURAL:$1|wyświetlenie|wyświetlenia|wyświetleń}}',
	'videohandler-non-premium-with-links' => 'Na tej wiki dodać można jedynie licencjonowaną zawartość z [http://video.wikia.com Filmoteki Wikii]. Odwiedź [http://video.wikia.com video.wikia.com] aby znaleźć filmy.',
	'videohandler-non-premium' => 'Na tej wiki dodać można jedynie licencjonowaną zawartość z Filmoteki Wikii. Odwiedź http://video.wikia.com aby znaleźć filmy.',
	'videohandler-remove' => 'Usuń',
	'videohandler-remove-video-modal-title' => 'Czy na pewno chcesz usunąć ten film z Twojej wiki?',
	'videohandler-remove-video-modal-ok' => 'Usuń',
	'videohandler-remove-video-modal-success' => 'Plik:$1 został usunięty z tej wiki',
	'videohandler-remove-video-modal-cancel' => 'Anuluj',
	'videohandler-remove-error-unknown' => 'Przepraszamy, ale usunięcie pliku nie powiodło się.',
	'videohandler-log-add-description' => 'Dodanie opisu filmu',
	'videohandler-log-add-video' => 'dodano film',
	'videos-error-empty-title' => 'Pusty tytuł.',
	'videos-error-blocked-user' => 'Zablokowany użytkownik',
	'videos-error-readonly' => 'Tryb tylko do odczytu',
	'videos-error-permissions' => 'nie udało się usunąć filmu.',
	'videohandler-error-restricted-video' => 'Ten film zawiera treści, które nie mogą być wyświetlone na tej wiki.',
	'videos-add-video' => 'Dodaj film',
	'videos-add-video-to-this-wiki' => 'Dodaj film do wiki',
	'videos-notify' => 'Trwa przetwarzanie filmu',
	'videos-something-went-wrong' => 'Wystąpił błąd podczas przesyłania filmu.',
	'videos-error-not-logged-in' => 'Zaloguj się.',
	'videos-error-no-video-url' => 'Nie podano adresu URL filmu.',
	'videos-error-invalid-video-url' => 'Wprowadź poprawy adres URL jednego z obsługiwanych dostawców filmów.',
	'videos-error-unknown' => 'Wystąpił nieznany błąd. Kod: $1.',
	'videos-error-old-type-video' => 'Ten typ filmów nie jest już obsługiwany',
	'videos-error-admin-only' => 'Przepraszamy, ale tylko administratorzy tej wiki mogą dodawać filmy',
	'videos-initial-upload-edit-summary' => 'dodano film',
	'videos-update-edit-summary' => 'film został uaktualniony',
	'videos-error-provider-not-supported' => 'Ten dostawca filmów nie jest obsługiwany. Zobacz listę [http://spolecznosc.wikia.com/wiki/Pomoc:Video_Embed_Tool obsługiwanych dostawców].',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'videohandler-category' => 'Video',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'videohandler-category' => 'ويډيوګانې',
	'videos-add-video-ok' => 'ورګډول',
	'videos-add-video-label-all' => 'ټول کتل',
);

/** Portuguese (português)
 * @author Crazymadlover
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'videohandler-category' => 'Vídeos',
	'wikia-videohandlers-desc' => 'Manipulação de vídeos dentro da arquitetura de arquivo MediaWiki',
	'videohandler' => 'Manipulador de vídeo',
	'prototype-videohandler-extension-desc' => 'Manipulador de vídeo de Prototype',
	'movieclips-videohandler-extension-desc' => 'Manipulador de vídeo de MovieClips',
	'screenplay-videohandler-extension-desc' => 'Manipulador de vídeo de Screenplay',
	'youtube-videohandler-extension-desc' => 'Manipulador de vídeo do YouTube',
	'videohandler-error-missing-parameter' => 'O parâmetro necessário "$1" está faltando',
	'videohandler-error-video-no-exist' => 'Não existe vídeo especificado pelo título',
	'videohandler-unknown-title' => 'Título desconhecido',
	'videohandler-video-details' => '$1 (provedor: $2)',
	'videohandler-description' => 'Descrição',
	'videohandler-video-views' => '$1 {{PLURAL:$1|visualização|visualizações}}',
	'videohandler-non-premium-with-links' => 'Esta wikia permite apenas a adição de conteúdo licenciado da [http://video.wikia.com Wikia videoteca]. Por favor, vá para [http://video.wikia.com video.wikia.com] para procurar vídeos.',
	'videohandler-non-premium' => 'Esta wikia permite apenas a adição de conteúdo licenciado da videoteca da Wikia. Por favor, vá para http://video.wikia.com para procurar vídeos.',
	'videohandler-remove' => 'Remover',
	'videohandler-remove-video-modal-title' => 'Tem certeza que deseja remover este vídeo de sua wikia?',
	'videohandler-remove-video-modal-ok' => 'Remover',
	'videohandler-remove-video-modal-success' => 'Arquivo:$1 foi removido desta wikia',
	'videohandler-remove-video-modal-cancel' => 'Cancelar',
	'videohandler-remove-error-unknown' => 'Lamentamos, mas algo deu errado com a exclusão.',
	'videohandler-log-add-description' => 'Adicionando a descrição do vídeo',
	'videohandler-log-add-video' => 'criou vídeo',
	'videos-error-empty-title' => 'Título vazio.',
	'videos-error-blocked-user' => 'Usuário bloqueado.',
	'videos-error-readonly' => 'Modo só de leitura.',
	'videos-error-permissions' => 'Não é possível excluir este vídeo.',
	'videohandler-error-restricted-video' => 'Este vídeo contém conteúdo restrito que não pode ser exibido nesta wikia',
	'videos-add-video' => 'Adicione um vídeo',
	'videos-add-video-to-this-wiki' => 'Adicionar um vídeo a esta wikia',
	'videos-add-video-label-name' => 'Digite a URL completa, de qualquer um dos sites suportados.',
	'videos-add-video-label-all' => 'Ver todos',
	'videos-add-video-ok' => 'Adicionar',
	'videos-notify' => 'Por favor aguarde enquanto processamos este vídeo',
	'videos-something-went-wrong' => 'Lamentamos, mas algo deu errado com o upload.',
	'videos-error-not-logged-in' => 'Por favor, inicie sessão.',
	'videos-error-no-video-url' => 'Nenhuma URL de vídeo fornecida.',
	'videos-error-invalid-video-url' => 'Introduza um URL válido de um provedor de conteúdo suportado.',
	'videos-error-unknown' => 'Ocorreu um erro desconhecido. Código: $1.',
	'videos-error-old-type-video' => 'Tipo de vídeos não mais suportados (VideoPage)',
	'videos-error-while-loading' => 'Ocorreu um erro ao carregar dados. Por favor, verifique novamente sua conexão e atualize a página.',
	'videos-error-admin-only' => 'Apenas os administradores desta wikia são autorizados a adicionar vídeos',
	'videos-initial-upload-edit-summary' => 'criou vídeo',
	'videos-update-edit-summary' => 'atualizou vídeo',
	'videos-error-provider-not-supported' => 'Este provedor de vídeo não é suportado. Veja nossa lista de [http://community.wikia.com/wiki/Help:Video_Embed_Tool#Supported_sites suportada provedores].',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Daemorris
 */
$messages['pt-br'] = array(
	'videohandler-category' => 'Vídeos',
	'videos-add-video' => 'Adicione um vídeo',
);

/** Romanian (română)
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'videohandler-category' => 'Videoclipuri',
);

/** Russian (русский)
 * @author DCamer
 * @author Eleferen
 * @author Kuzura
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'wikia-videohandlers-desc' => 'Обработка видео с файловой архитектурой MediaWiki',
	'videohandler' => '$1 {{PLURAL:$1|просмотр|просмотра|просмотров}}',
	'prototype-videohandler-extension-desc' => 'Инструмент обработки видео Prototype',
	'movieclips-videohandler-extension-desc' => 'Инструмент обработки видео MovieClips',
	'screenplay-videohandler-extension-desc' => 'Инструмент обработки видео ScreenPlay',
	'youtube-videohandler-extension-desc' => 'Инструмент обработки видео YouTube',
	'videohandler-error-missing-parameter' => 'Отсутствует обязательный параметр «$1»',
	'videohandler-error-video-no-exist' => 'Видео с таким названием не существует',
	'videohandler-unknown-title' => 'Неизвестное название',
	'videohandler-video-details' => '$1 (источник: $2)',
	'videohandler-category' => 'Видео',
	'videohandler-description' => 'Описание',
	'videos-error-while-loading' => 'При загрузке данных произошла ошибка. Пожалуйста, проверьте соединение и обновите страницу.',
	'videos-add-video-label-name' => 'Введите полный URL-адрес от любого из поддерживаемых сайтов.',
	'videos-add-video-ok' => 'Добавить',
	'videos-add-video-label-all' => 'Смотреть всё',
	'videohandler-video-views' => '$1 {{PLURAL:$1|просмотр|просмотра|просмотров}}',
	'videohandler-non-premium-with-links' => 'На эту вики можно загружать только лицензионное видео из [http://video.wikia.com Видео Библиотеки Викия]. Пожалуйста, перейдите на [http://video.wikia.com video.wikia.com] для поиска видео.',
	'videohandler-non-premium' => 'На эту вики можно загружать только лицензионное видео из Видео Библиотеки Викия. Пожалуйста, перейдите на http://video.wikia.com для поиска видео.',
	'videohandler-remove' => 'Удалить',
	'videohandler-remove-video-modal-title' => 'Вы уверены, что хотите удалить это видео с вики?',
	'videohandler-remove-video-modal-ok' => 'Удалить',
	'videohandler-remove-video-modal-success' => 'File:$1 был удалён с этой вики',
	'videohandler-remove-video-modal-cancel' => 'Отмена',
	'videohandler-remove-error-unknown' => 'Приносим свои извинения: при удалении файла произошла ошибка.',
	'videohandler-log-add-description' => 'Добавлено описание видео',
	'videohandler-log-add-video' => 'видео создано',
	'videos-error-empty-title' => 'Поле заголовка не заполнено.',
	'videos-error-blocked-user' => 'Заблокированный участник.                                                                                                                                                                       ',
	'videos-error-readonly' => 'Режим «только чтение».',
	'videos-error-permissions' => 'Невозможно удалить это видео.',
	'videohandler-error-restricted-video' => 'Это видео содержит запрещенные материалы, которые не могут быть показаны на этой вики',
	'videos-add-video' => 'Добавить видео',
	'videos-add-video-to-this-wiki' => 'Добавить видео на вики',
	'videos-notify' => 'Пожалуйста, подождите, пока видео обрабатывается',
	'videos-something-went-wrong' => 'Сожалеем, но что-то пошло не так во время загрузки.',
	'videos-error-not-logged-in' => 'Войдите, чтобы продолжить.',
	'videos-error-no-video-url' => 'По этому URL видео отсутствует.',
	'videos-error-invalid-video-url' => 'Пожалуйста, введите корректный URL одного из поддерживаемых провайдеров.',
	'videos-error-unknown' => 'Произошла неизвестная ошибка. Код: $1.',
	'videos-error-old-type-video' => 'Старый тип видео больше не поддерживается (VideoPage)',
	'videos-error-admin-only' => 'Только администраторы вики могут добавлять видео.',
	'videos-initial-upload-edit-summary' => 'видео создано',
	'videos-update-edit-summary' => 'видео обновлено',
	'videos-error-provider-not-supported' => 'Этот поставщик видеоконтента не поддерживается. Посмотрите наш список [http://ru.community.wikia.com/wiki/%D0%A1%D0%BF%D1%80%D0%B0%D0%B2%D0%BA%D0%B0:%D0%92%D0%B8%D0%B4%D0%B5%D0%BE поддерживаемых поставщиков].',
);

/** Sinhala (සිංහල)
 * @author තඹරු විජේසේකර
 */
$messages['si'] = array(
	'videohandler-category' => 'වීඩියෝ',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'videohandler-category' => 'Videoposnetki',
);

/** Serbian (Cyrillic script) (‪српски (ћирилица)‬)
 * @author Charmed94
 * @author Rancher
 * @author Verlor
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'videohandler-category' => 'Видео-снимци',
);

/** Swedish (svenska)
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'videohandler' => 'Videohanterare',
	'prototype-videohandler-extension-desc' => 'Videohanterare för Prototype',
	'movieclips-videohandler-extension-desc' => 'Videohanterare för MovieClips',
	'screenplay-videohandler-extension-desc' => 'Videohanterare för Screnplay',
	'youtube-videohandler-extension-desc' => 'Videohanterare för YouTube',
	'videohandler-unknown-title' => 'Okänd titel',
	'videohandler-video-details' => '$1 (leverantör: $2)',
	'videohandler-category' => 'Videoklipp',
	'videohandler-description' => 'Beskrivning',
	'videos-error-while-loading' => 'Ett fel uppstod när data skulle läses in. Var god kontrollera din anslutning och uppdatera sidan.',
	'videos-add-video-label-name' => 'Ange en fullständig URL från någon av de stödjande sidorna.',
	'videos-add-video-ok' => 'Lägg till',
	'videos-add-video-label-all' => 'Se alla',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 */
$messages['ta'] = array(
	'videos-add-video-ok' => 'முடிந்தது',
	'videos-add-video-label-all' => 'எல்லாவற்றையும் பார்க்கவும்',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'wikia-videohandlers-desc' => 'Pag-aasikaso ng mga bidyo na nasa loob ng arkitektura ng talaksan ng MediaWiki',
	'videohandler' => 'Tagahawak ng bidyo',
	'prototype-videohandler-extension-desc' => 'Prototipong tagahawak ng bidyo',
	'movieclips-videohandler-extension-desc' => 'Tagahawak ng bidyo ng MovieClips',
	'screenplay-videohandler-extension-desc' => 'Tagahawak ng bidyo ng Screnplay',
	'youtube-videohandler-extension-desc' => 'Tagahawak ng bidyo ng YouTube',
	'videohandler-error-missing-parameter' => 'Nawawala ang kailangang parametrong "$1"',
	'videohandler-error-video-no-exist' => 'Hindi umiiral ang bidyo na tinukoy ayon sa pamagat',
	'videohandler-unknown-title' => 'Hindi nalalamang pamagat',
	'videohandler-video-details' => '$1 (tagapagbigay: $2)',
	'videohandler-category' => 'Mga bidyo',
	'videohandler-description' => 'Paglalarawan',
	'videos-error-while-loading' => 'Naganap ang kamalian habang ikinakarga ang dato. Pakisuring muli ang pagkakakunekta mo at sariwain ang pahina.',
	'videos-add-video-label-name' => 'Ipasok ang buong URL, mula sa anuman sa tinatangkilik na mga pook.',
	'videos-add-video-ok' => 'Idagdag',
	'videos-add-video-label-all' => 'Tingnan lahat',
);

/** Turkish (Türkçe)
 * @author Mert.subay
 */
$messages['tr'] = array(
	'videohandler-category' => 'Videolar',
);

/** Ukrainian (українська)
 * @author A1
 * @author Prima klasy4na
 * @author Тест
 */
$messages['uk'] = array(
	'videohandler-category' => 'Відео',
);

$messages['zh'] = array(
	'videohandler' => '$1次{{PLURAL:$1|浏览|浏览}}',
	'videohandler-error-missing-parameter' => '缺少需要的变量 "$1"',
	'videohandler-error-video-no-exist' => '这个标题的视频不存在',
	'videohandler-unknown-title' => '未知的标题',
	'videohandler-description' => '叙述',
	'videohandler-video-views' => '$1次{{PLURAL:$1|浏览|浏览}}',
	'videohandler-non-premium-with-links' => '這個Wiki只允許增加來自於[http://video.wikia.com Wikia视频圖書館]的授權內容。請至[http://video.wikia.com http://video.wikia.com ]搜尋视频。',
	'videohandler-non-premium' => '这个Wiki只允许增加来自于Wikia视频图书馆的授权内容。请至http://video.wikia.com 搜寻视频。',
	'videohandler-remove' => '移除',
	'videohandler-remove-video-modal-title' => '你确定要移除这个视频吗？',
	'videohandler-remove-video-modal-ok' => '移除',
	'videohandler-remove-video-modal-success' => 'File:$1 已自這個Wiki中移除',
	'videohandler-remove-video-modal-cancel' => '取消',
	'videohandler-remove-error-unknown' => '非常抱歉，在删除时出了问题。',
	'videohandler-log-add-description' => '增加视频描述',
	'videohandler-log-add-video' => '创建视频',
	'videohandler-error-restricted-video' => '这个视频有受限制的内容不能在这Wiki上播放。',
	'videos-add-video' => '添加视频',
);

/** Simplified Chinese (‪中文（简体）‬)
 * @author Hydra
 * @author Yanmiao liu
 */
$messages['zh-hans'] = array(
	'videohandler-category' => '影片（视频）',
	'wikia-videohandlers-desc' => 'MediaWiki文件架构内的影片（视频）处理',
	'videohandler' => '$1次{{PLURAL:$1|浏览|浏览}}',
	'prototype-videohandler-extension-desc' => 'Prototype影片处理器（或Prototype视频处理器）',
	'movieclips-videohandler-extension-desc' => 'MovieClips影片处理器（或MovieClips视频处理器）',
	'screenplay-videohandler-extension-desc' => 'Screenplay影片处理器（或Screenplay视频处理器）',
	'youtube-videohandler-extension-desc' => 'YouTube影片处理器（或YouTube视频处理器）',
	'videohandler-error-missing-parameter' => '缺少需要的变量 "$1"',
	'videohandler-error-video-no-exist' => '这个标题的视频不存在',
	'videohandler-unknown-title' => '未知的标题',
	'videohandler-video-details' => '$1（提供商：$2）',
	'videohandler-description' => '叙述',
	'videohandler-video-views' => '$1次{{PLURAL:$1|浏览|浏览}}',
	'videohandler-non-premium-with-links' => '這個Wiki只允許增加來自於[http://video.wikia.com Wikia视频圖書館]的授權內容。請至[http://video.wikia.com http://video.wikia.com ]搜尋视频。',
	'videohandler-non-premium' => '这个Wiki只允许增加来自于Wikia视频图书馆的授权内容。请至http://video.wikia.com 搜寻视频。',
	'videohandler-remove' => '移除',
	'videohandler-remove-video-modal-title' => '你确定要移除这个视频吗？',
	'videohandler-remove-video-modal-ok' => '移除',
	'videohandler-remove-video-modal-success' => 'File:$1 已自這個Wiki中移除',
	'videohandler-remove-video-modal-cancel' => '取消',
	'videohandler-remove-error-unknown' => '非常抱歉，在删除时出了问题。',
	'videohandler-log-add-description' => '增加视频描述',
	'videohandler-log-add-video' => '创建视频',
	'videos-error-empty-title' => '标题为空。',
	'videos-error-blocked-user' => '此用户已被屏蔽。',
	'videos-error-readonly' => '只读模式',
	'videos-error-permissions' => '无法删除此影片（视频）。',
	'videohandler-error-restricted-video' => '这个视频有受限制的内容不能在这Wiki上播放。',
	'videos-add-video' => '添加影片（视频）',
	'videos-add-video-to-this-wiki' => '添加影片（视频）到此维基网站',
	'videos-add-video-label-name' => '请输入来自任何受支持的网站的完整网址。',
	'videos-add-video-label-all' => '查看全部',
	'videos-add-video-ok' => '添加',
	'videos-notify' => '我们正在处理此影片（视频），请稍候。',
	'videos-something-went-wrong' => '很抱歉，但上传时出了问题。',
	'videos-error-not-logged-in' => '请先登入。',
	'videos-error-no-video-url' => '未提供影片（视频）网址。',
	'videos-error-invalid-video-url' => '请输入来自受支持的内容提供商的有效链接。',
	'videos-error-unknown' => '出现未知错误。代码：$1',
	'videos-error-old-type-video' => '不再支持老式影片或视频（影片或视频网页）',
	'videos-error-while-loading' => '加载数据时出错。请重新检查您的网络连接，并刷新页面。',
	'videos-error-admin-only' => '对不起，只有此维基的管理员有权添加影片（视频）。',
	'videos-initial-upload-edit-summary' => '视频已创建',
	'videos-update-edit-summary' => '影片（视频）已更新',
	'videos-error-provider-not-supported' => '不支持该影片（视频）提供商。请查看我们[http://zh.community.wikia.com/wiki/Help:%E5%BD%B1%E7%89%87%E5%B5%8C%E5%85%A5%E5%B7%A5%E5%85%B7 支持的供应商]列表。',
);

$messages['zh-hant'] = array(
	'videohandler' => '$1次{{PLURAL:$1|瀏覽|瀏覽}}',
	'videohandler-error-missing-parameter' => '缺少需要的變量 "$1"',
	'videohandler-error-video-no-exist' => '這個標題的影片不存在',
	'videohandler-unknown-title' => '未知的標題',
	'videohandler-category' => '影片',
	'videohandler-description' => '敘述',
	'videohandler-video-views' => '$1次{{PLURAL:$1|瀏覽|瀏覽}}',
	'videohandler-non-premium-with-links' => '這個Wiki只允許增加來自於[http://video.wikia.com Wikia影片圖書館]的授權內容。請至[http://video.wikia.com http://video.wikia.com ]搜尋影片。',
	'videohandler-non-premium' => '這個Wiki只允許增加來自於Wikia影片圖書館的授權內容。請至http://video.wikia.com 搜尋影片。',
	'videohandler-remove' => '移除',
	'videohandler-remove-video-modal-title' => '你確定要移除這個影片嗎？',
	'videohandler-remove-video-modal-ok' => '移除',
	'videohandler-remove-video-modal-success' => 'File:$1 已從這個Wiki中移除',
	'videohandler-remove-video-modal-cancel' => '取消',
	'videohandler-remove-error-unknown' => '非常抱歉，在刪除時出了問題。',
	'videohandler-log-add-description' => '增加影片描述',
	'videohandler-log-add-video' => '創建影片',
	'videohandler-error-restricted-video' => '這個影片有受限制的內容不能在這Wiki上播放。',
);

$messages['zh-hk'] = array(
	'videohandler' => '$1次{{PLURAL:$1|瀏覽|瀏覽}}',
	'videohandler-error-missing-parameter' => '缺少需要的變量 "$1"',
	'videohandler-error-video-no-exist' => '這個標題的影片不存在',
	'videohandler-unknown-title' => '未知的標題',
	'videohandler-category' => '影片',
	'videohandler-description' => '敘述',
	'videohandler-video-views' => '$1次{{PLURAL:$1|瀏覽|瀏覽}}',
	'videohandler-non-premium-with-links' => '這個Wiki只允許增加來自於[http://video.wikia.com Wikia影片圖書館]的授權內容。請至[http://video.wikia.com http://video.wikia.com ]搜尋影片。',
	'videohandler-non-premium' => '這個Wiki只允許增加來自於Wikia影片圖書館的授權內容。請至http://video.wikia.com 搜尋影片。',
	'videohandler-remove' => '移除',
	'videohandler-remove-video-modal-title' => '你確定要移除這個影片嗎？',
	'videohandler-remove-video-modal-ok' => '移除',
	'videohandler-remove-video-modal-success' => 'File:$1 已從這個Wiki中移除',
	'videohandler-remove-video-modal-cancel' => '取消',
	'videohandler-remove-error-unknown' => '非常抱歉，在刪除時出了問題。',
	'videohandler-log-add-description' => '增加影片描述',
	'videohandler-log-add-video' => '創建影片',
	'videohandler-error-restricted-video' => '這個影片有受限制的內容不能在這Wiki上播放。',
);

$messages['zh-tw'] = array(
	'wikia-videohandlers-desc' => 'MediaWiki文檔體系結構內的影片（視頻）處理',
	'videohandler' => '$1次{{PLURAL:$1|瀏覽|瀏覽}}',
	'prototype-videohandler-extension-desc' => 'Prototype影片處理器（或Prototype視頻處理器）',
	'movieclips-videohandler-extension-desc' => 'MovieClips影片處理器（或MovieClips視頻處理器）',
	'screenplay-videohandler-extension-desc' => 'Screenplay影片處理器（或Screenplay視頻處理器）',
	'youtube-videohandler-extension-desc' => 'YouTube影片處理器（或YouTube視頻處理器）',
	'videohandler-error-missing-parameter' => '缺少需要的變量 "$1"',
	'videohandler-error-video-no-exist' => '這個標題的影片不存在',
	'videohandler-unknown-title' => '未知的標題',
	'videohandler-video-details' => '$1（提供商: $2）',
	'videohandler-category' => '影片',
	'videohandler-description' => '敘述',
	'videohandler-video-views' => '$1次{{PLURAL:$1|瀏覽|瀏覽}}',
	'videohandler-non-premium-with-links' => '這個Wiki只允許增加來自於[http://video.wikia.com Wikia影片圖書館]的授權內容。請至[http://video.wikia.com http://video.wikia.com ]搜尋影片。',
	'videohandler-non-premium' => '這個Wiki只允許增加來自於Wikia影片圖書館的授權內容。請至http://video.wikia.com 搜尋影片。',
	'videohandler-remove' => '移除',
	'videohandler-remove-video-modal-title' => '你確定要移除這個影片嗎？',
	'videohandler-remove-video-modal-ok' => '移除',
	'videohandler-remove-video-modal-success' => 'File:$1 已從這個Wiki中移除',
	'videohandler-remove-video-modal-cancel' => '取消',
	'videohandler-remove-error-unknown' => '非常抱歉，在刪除時出了問題。',
	'videohandler-log-add-description' => '增加影片描述',
	'videohandler-log-add-video' => '創建影片',
	'videos-error-empty-title' => '標題為空。',
	'videos-error-blocked-user' => '此用戶已被屏蔽。',
	'videos-error-readonly' => '唯讀模式',
	'videos-error-permissions' => '無法刪除此影片（視頻）。',
	'videohandler-error-restricted-video' => '這個影片有受限制的內容不能在這Wiki上播放。',
	'videos-add-video' => '添加影片（視頻）',
	'videos-add-video-to-this-wiki' => '添加影片（視頻）到此維基網站',
	'videos-add-video-label-name' => '請輸入來自任何受支持的網站的完整網址。',
	'videos-add-video-label-all' => '查看全部',
	'videos-add-video-ok' => '添加',
	'videos-notify' => '我們正在處理此影片（視頻），請稍候。',
	'videos-something-went-wrong' => '很抱歉，但上載時出了問題。',
	'videos-error-not-logged-in' => '請先登入。',
	'videos-error-no-video-url' => '沒有提供影片（視頻）網址。',
	'videos-error-invalid-video-url' => '請輸入來自受支援的內容提供商的有效連接。',
	'videos-error-unknown' => '出現未知錯誤。代碼：$ 1。',
	'videos-error-old-type-video' => '不再支援舊式影片或視頻（視頻頁面）',
	'videos-error-while-loading' => '載入資料時出錯。請重新檢查你的網絡連接，並刷新頁面。',
	'videos-error-admin-only' => '對不起，只有此維基網站的管理員才有權上傳視頻。',
	'videos-initial-upload-edit-summary' => '影片（視頻）已創建',
	'videos-update-edit-summary' => '影片（視頻）已更新',
	'videos-error-provider-not-supported' => '不支援此影片（視頻）供應商。請查看我們查看我们[http://zh.community.wikia.com/wiki/Help:%E5%BD%B1%E7%89%87%E5%B5%8C%E5%85%A5%E5%B7%A5%E5%85%B7 支持的供应商]列表。',
);
