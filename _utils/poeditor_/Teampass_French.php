<?php
$LANG = array (
		0 => array (
				'term' => 'user_ga_code',
				'definition' => 'Envoyer le GoogleAuthenticator flash code à l\'utilisateur par email',
				'context' => '' 
		),
		1 => array (
				'term' => 'send_ga_code',
				'definition' => 'Google Authenticator pour l\\\'utilisateur',
				'context' => '' 
		),
		2 => array (
				'term' => 'error_no_email',
				'definition' => 'Cet utilisateur n\\\'a pas d\\\'email de défini !',
				'context' => '' 
		),
		3 => array (
				'term' => 'error_no_user',
				'definition' => 'Aucun utilisateur trouvé !',
				'context' => '' 
		),
		4 => array (
				'term' => 'email_ga_subject',
				'definition' => 'Votre code Google Authenticator pour Teampass',
				'context' => '' 
		),
		5 => array (
				'term' => 'email_ga_text',
				'definition' => 'Bonjour,<br><br>Merci de cliquer ce <a href=\'#link#\'>LIEN</a> et de le flasher le code avec GoogleAuthenticator application de façon à recevoir tes codes d\'identification pour Teampass.<br /><br />Salutations',
				'context' => '' 
		),
		6 => array (
				'term' => 'settings_attachments_encryption',
				'definition' => 'Activer le cryptage des Fichiers joints',
				'context' => '' 
		),
		7 => array (
				'term' => 'settings_attachments_encryption_tip',
				'definition' => 'CETTE OPTION PEUT CORROMPRE LES FICHIERS JOINTS alors merci de lire la suite avec attention. Si activée, cette option cryptera les fichiers joints sur le serveur. L\\\'algorithme de cryptage utilise le SALT défini pour Teampass. Cela requière également un peu de ressource supplémentaire de la part du serveur. ATTENTION, en cas de changement de stratégie, il est nécessaire de faire tourner le script permettant d\\\'adapter les fichiers joints existants. Pour cela, voir l\\\'onglet \\"Actions spécifiques\\".',
				'context' => '' 
		),
		8 => array (
				'term' => 'admin_action_attachments_cryption',
				'definition' => 'Décrypter ou crypter les pièces jointes aux objets',
				'context' => '' 
		),
		9 => array (
				'term' => 'admin_action_attachments_cryption_tip',
				'definition' => 'ATTENTION : cette opération ne DOIT être faite UNIQUEMENT après avoir modifier l\\\'option associée dans la page des Paramètres. Merci de réaliser une sauvegarde du répertoire \\\'upload\\\' avant de procéder.',
				'context' => '' 
		),
		10 => array (
				'term' => 'encrypt',
				'definition' => 'Crypter',
				'context' => '' 
		),
		11 => array (
				'term' => 'decrypt',
				'definition' => 'Décrypter',
				'context' => '' 
		),
		12 => array (
				'term' => 'admin_ga_website_name',
				'definition' => 'Nom affiché dans Google Authenticator',
				'context' => '' 
		),
		13 => array (
				'term' => 'admin_ga_website_name_tip',
				'definition' => 'Ce nom sera celui affiché pour le code d\'identification dans l\'application Google Authenticator',
				'context' => '' 
		),
		14 => array (
				'term' => 'admin_action_pw_prefix_correct',
				'definition' => 'Corriger le prefix des mots de passe',
				'context' => '' 
		),
		15 => array (
				'term' => 'admin_action_pw_prefix_correct_tip',
				'definition' => 'ATTENTION avant de lancer ce script, vous DEVEZ vous assurer d\\\'avoir réaliser une sauvegarde de votre Base de Données. Ce script va mettre à jour les prefix des mots de passe. Il doit etre utilisé UNIQUEMENT si vous avez remarqué que les mots de passe sont affichés avec un prefix de 15 caractères composés de lettres et de numéros.',
				'context' => '' 
		),
		16 => array (
				'term' => 'items_changed',
				'definition' => 'ont été changés.',
				'context' => '' 
		),
		17 => array (
				'term' => 'ga_not_yet_synchronized',
				'definition' => 'S\\\'identifier avec Google Authenticator',
				'context' => '' 
		),
		18 => array (
				'term' => 'ga_scan_url',
				'definition' => 'Merci de scanner ce flashcode avec votre application Google Authenticator. Copier ensuite le code obtenu.',
				'context' => '' 
		),
		19 => array (
				'term' => 'ga_identification_code',
				'definition' => 'Code d\\\'identification',
				'context' => '' 
		),
		20 => array (
				'term' => 'ga_enter_credentials',
				'definition' => 'Merci de saisir vos identifiants de connexion',
				'context' => '' 
		),
		21 => array (
				'term' => 'ga_bad_code',
				'definition' => 'Le code Google Authenticator est faux',
				'context' => '' 
		),
		22 => array (
				'term' => 'settings_get_tp_info',
				'definition' => 'Charger automatiquement des informations à propos de Teampass',
				'context' => '' 
		),
		23 => array (
				'term' => 'settings_get_tp_info_tip',
				'definition' => 'Cette option chargera dans la page d\\\'administration des informations concernant les versions et librairies utilisées.',
				'context' => '' 
		),
		24 => array (
				'term' => 'at_field',
				'definition' => 'Champ',
				'context' => '' 
		),
		25 => array (
				'term' => 'category_in_folders_title',
				'definition' => 'Répertoires associés',
				'context' => '' 
		),
		26 => array (
				'term' => 'category_in_folders',
				'definition' => 'Editer les Répertoires associés',
				'context' => '' 
		),
		27 => array (
				'term' => 'select_folders_for_category',
				'definition' => 'Sélectionner les Répertoires qui afficheront cette Catégorie',
				'context' => '' 
		),
		28 => array (
				'term' => 'offline_mode_warning',
				'definition' => 'Le mode Hors-Ligne permet d\\\'exporter les Eléments dans un fichier HTML, de façon à ce qu\\\'ils soient disponibles quand l\\\'utilisateur n\\\'est pas connecté au serveur Teampass. Les mots de passe sont cryptés à l\\\'aide de la clé fournie.',
				'context' => '' 
		),
		29 => array (
				'term' => 'offline_menu_title',
				'definition' => 'Exporter les Objets dans en mode Hors-Ligne',
				'context' => '' 
		),
		30 => array (
				'term' => 'settings_offline_mode',
				'definition' => 'Activer le mode Hors-Ligne',
				'context' => '' 
		),
		31 => array (
				'term' => 'settings_offline_mode_tip',
				'definition' => 'Le mode Hors-Ligne permet d\\\'exporter les Objets dans un fichier HTML qui peut être lu avec un simple navigateur Internet. Les objets sont cryptés avec la clé saisie par l\\\'Utilisateur.',
				'context' => '' 
		),
		32 => array (
				'term' => 'offline_mode_key_level',
				'definition' => 'Niveau de cryptage minimum de la clé du mode Hors-Ligne',
				'context' => '' 
		),
		33 => array (
				'term' => 'categories',
				'definition' => 'Catégories',
				'context' => '' 
		),
		34 => array (
				'term' => 'new_category_label',
				'definition' => 'Créer une nouvelle Catégories - Saisir un titre',
				'context' => '' 
		),
		35 => array (
				'term' => 'no_category_defined',
				'definition' => 'Aucune Catégorie existe',
				'context' => '' 
		),
		36 => array (
				'term' => 'confirm_deletion',
				'definition' => 'Confirmer la suppression ?',
				'context' => '' 
		),
		37 => array (
				'term' => 'confirm_rename',
				'definition' => 'Confirmer le renommage ?',
				'context' => '' 
		),
		38 => array (
				'term' => 'new_field_title',
				'definition' => 'Saisir le titre du nouveau Champ',
				'context' => '' 
		),
		39 => array (
				'term' => 'confirm_creation',
				'definition' => 'Confirmer la création ?',
				'context' => '' 
		),
		40 => array (
				'term' => 'confirm_moveto',
				'definition' => 'Confirmer le déplacement ?',
				'context' => '' 
		),
		41 => array (
				'term' => 'for_selected_items',
				'definition' => 'Pour l\\\'élément sélectionné',
				'context' => '' 
		),
		42 => array (
				'term' => 'move',
				'definition' => 'Déplacer vers',
				'context' => '' 
		),
		43 => array (
				'term' => 'field_add_in_category',
				'definition' => 'Ajouter un nouveau champ à cette Catégorie',
				'context' => '' 
		),
		44 => array (
				'term' => 'rename',
				'definition' => 'Renommer',
				'context' => '' 
		),
		45 => array (
				'term' => 'settings_item_extra_fields',
				'definition' => 'Permettre l\\\'ajout des champs complémentaire (par Catégories) à la définition des Objets',
				'context' => '' 
		),
		46 => array (
				'term' => 'settings_item_extra_fields_tip',
				'definition' => 'Cette fonction permet d\\\'ajouter des champs personnalisés aux Objets. Ces champs sont créés par un Administrateur et organisés en Catégories. Les données sauvegardées sont cryptées. Attention, cette fonction consomme plus de requetes SQL (environ 5 par champs lors de la mise à jour d\\\'un Objet) et peut surcharger votre serveur. Cela est dépendant de votre serveur.',
				'context' => '' 
		),
		47 => array (
				'term' => 'html',
				'definition' => 'html',
				'context' => '' 
		),
		48 => array (
				'term' => 'more',
				'definition' => 'Plus',
				'context' => '' 
		),
		49 => array (
				'term' => 'save_categories_position',
				'definition' => 'Sauvegarder l\\\'ordre des Catégories',
				'context' => '' 
		),
		50 => array (
				'term' => 'reload_table',
				'definition' => 'Recharger le tableau',
				'context' => '' 
		),
		51 => array (
				'term' => 'settings_ldap_type',
				'definition' => 'Type de serveur LDAP',
				'context' => '' 
		),
		52 => array (
				'term' => 'use_md5_password_as_salt',
				'definition' => 'Utiliser le mot de passe utilisateur comme SALTKey',
				'context' => '' 
		),
		53 => array (
				'term' => 'server_time',
				'definition' => 'Horaire serveur',
				'context' => '' 
		),
		54 => array (
				'term' => 'settings_tree_counters',
				'definition' => 'Montrer plus de compteurs dans l\'arborescence',
				'context' => '' 
		),
		55 => array (
				'term' => 'settings_tree_counters_tip',
				'definition' => 'Cette option affiche pour chaque répertoire 3 compteurs : le nombre d\'élément dans le répertoire; le nombre d\'éléments dans l\'ensemble des sous-répertoires; le nombre de sous-répertoires. Cette option requière des requêtes SQL supplémentaires.',
				'context' => '' 
		),
		56 => array (
				'term' => 'settings_encryptClientServer',
				'definition' => 'Crypter les échanges Client-Serveur',
				'context' => '' 
		),
		57 => array (
				'term' => 'settings_encryptClientServer_tip',
				'definition' => 'Le cryptage AES-256 est activé par défaut. Cela doit être le cas si aucun certificat SSL est utilisé pour sécuriser les transactions entre le client et le serveur. Si vous n\\\'utilisez pas un protocole SSL ou si Teampass est utilisé au sein d\\\'un intranet, alors il est possible de désactiver le cryptage par AES-256. /!\\\\ Gardez en mémoire que la solution la plus sécuritaire consiste à utiliser une connexion SSL.',
				'context' => '' 
		),
		58 => array (
				'term' => 'error_group_noparent',
				'definition' => 'Merci de sélectionner un répertoire !',
				'context' => '' 
		),
		59 => array (
				'term' => 'channel_encryption_no_iconv',
				'definition' => 'L\'extension ICONV n\'est pas activée !',
				'context' => '' 
		),
		60 => array (
				'term' => 'channel_encryption_no_bcmath',
				'definition' => 'L\'extension BCMATH n\'est pas activée !',
				'context' => '' 
		),
		61 => array (
				'term' => 'admin_action_check_pf',
				'definition' => 'Actualiser les Répertoires Personnel des utilisateurs (les créer s\'ils n\'existent pas',
				'context' => '' 
		),
		62 => array (
				'term' => 'admin_actions_title',
				'definition' => 'Actions spécifique',
				'context' => '' 
		),
		63 => array (
				'term' => 'enable_personal_folder_feature_tip',
				'definition' => 'Une fois activé, il est nécessaire de lancer manuellement le script de mise à jour des répertoires personnels pour les utilisateurs existants. Cela ne créera les répertoires personnels que pour les utilisateurs n\'en n\'ayant pas à ce jour. Le script \'".$txt[\'admin_action_check_pf\']."\' est accessible dans l\'onglet \'".$txt[\'admin_actions_title\']."\'.',
				'context' => '' 
		),
		64 => array (
				'term' => 'is_administrated_by_role',
				'definition' => 'L\'utilisateur est administré par',
				'context' => '' 
		),
		65 => array (
				'term' => 'administrators_only',
				'definition' => 'Administrateurs uniquement',
				'context' => '' 
		),
		66 => array (
				'term' => 'managers_of',
				'definition' => 'Managers du Role',
				'context' => '' 
		),
		67 => array (
				'term' => 'managed_by',
				'definition' => 'Administré par',
				'context' => '' 
		),
		68 => array (
				'term' => 'admin_small',
				'definition' => 'Admin',
				'context' => '' 
		),
		69 => array (
				'term' => 'setting_can_create_root_folder',
				'definition' => 'Autoriser la création des nouveaux répertoire à la Racine',
				'context' => '' 
		),
		70 => array (
				'term' => 'settings_enable_sts',
				'definition' => 'Renforcer la sécurité relative à HTTPS -- Attention à bien lire l\'info-bulle.',
				'context' => '' 
		),
		71 => array (
				'term' => 'settings_enable_sts_tip',
				'definition' => 'Cette option renforce le protocole HTTPS. STS permet de déjouer les attaques \'Man-in-the-middle\'. Il est IMPERATIF de disposer d\'un certificat SSL valid pour pouvoir l\'utiliser. Ne pas activier l\'option avec un certificat self-signed! Vous devez vous assurer d\'avoir activer l\'option \'SSLOptions +ExportCertData\' SSL de la configuration d\'Apache.',
				'context' => '' 
		),
		72 => array (
				'term' => 'channel_encryption_no_gmp',
				'definition' => 'L\'extention GMP n\'est pas chargée ! L\'encryptage ne peut pas être initialisé.',
				'context' => '' 
		),
		73 => array (
				'term' => 'channel_encryption_no_openssl',
				'definition' => 'L\'extention OpenSSL n\'est pas chargée ! L\'encryptage ne peut pas être initialisé.',
				'context' => '' 
		),
		74 => array (
				'term' => 'channel_encryption_no_file',
				'definition' => 'Fichier des clés de cryptage non trouvé !&lt;br&gt;Merci de lancer la mise à jour.',
				'context' => '' 
		),
		75 => array (
				'term' => 'admin_action_generate_encrypt_keys',
				'definition' => 'Générer un nouvel ensemble de clés de cryptage.',
				'context' => '' 
		),
		76 => array (
				'term' => 'admin_action_generate_encrypt_keys_tip',
				'definition' => 'Les clés de chiffrement ensemble est un aspect très important dans la sécurité de votre installation TeamPass. En effet, ces touches sont utilisées pour chiffrer le canal entre le serveur et le client. Même si ce fichier est sécurisé en dehors de la zone de votre serveur Web, il est recommandé de régénérer le temps de clés à temps. Notez que cette opération peut prendre jusqu\'à 1 minute',
				'context' => '' 
		),
		77 => array (
				'term' => 'settings_anyone_can_modify_bydefault',
				'definition' => 'Activer l\'option \'&lt;b&gt;Tout le monde peut modifier&lt;/b&gt; par défaut',
				'context' => '' 
		),
		78 => array (
				'term' => 'channel_encryption_in_progress',
				'definition' => 'Canal en cours de cryptage ...',
				'context' => '' 
		),
		79 => array (
				'term' => 'channel_encryption_failed',
				'definition' => 'Identification erronée !',
				'context' => '' 
		),
		80 => array (
				'term' => 'purge_log',
				'definition' => 'Purger le log depuis',
				'context' => '' 
		),
		81 => array (
				'term' => 'to',
				'definition' => 'à',
				'context' => '' 
		),
		82 => array (
				'term' => 'purge_now',
				'definition' => 'Purger maintenant !',
				'context' => '' 
		),
		83 => array (
				'term' => 'purge_done',
				'definition' => 'La purge a été faite !&lt;br /&gt;Nombre d\'objets supprimés :',
				'context' => '' 
		),
		84 => array (
				'term' => 'settings_upload_maxfilesize_tip',
				'definition' => 'Taille maximum autorisée. Cette taille doit être cohérente avec les paramètrages du serveur.',
				'context' => '' 
		),
		85 => array (
				'term' => 'settings_upload_docext_tip',
				'definition' => 'Les types de Documents. Préciser les extensions de fichiers autorisés en les séparant par une virgule (,)',
				'context' => '' 
		),
		86 => array (
				'term' => 'settings_upload_imagesext_tip',
				'definition' => 'Les types de Images. Préciser les extensions de fichiers autorisés en les séparant par une virgule (,)',
				'context' => '' 
		),
		87 => array (
				'term' => 'settings_upload_pkgext_tip',
				'definition' => 'Les types de Compression. Préciser les extensions de fichiers autorisés en les séparant par une virgule (,)',
				'context' => '' 
		),
		88 => array (
				'term' => 'settings_upload_otherext_tip',
				'definition' => 'Les autres types. Préciser les extensions de fichiers autorisés en les séparant par une virgule (,)',
				'context' => '' 
		),
		89 => array (
				'term' => 'settings_upload_imageresize_options_tip',
				'definition' => 'Quand activée, cette option permet de redimensionner les Images au format indiquée ci-dessous.',
				'context' => '' 
		),
		90 => array (
				'term' => 'settings_upload_maxfilesize',
				'definition' => 'Taille maximum par fichier (en Mo)',
				'context' => '' 
		),
		91 => array (
				'term' => 'settings_upload_docext',
				'definition' => 'Extensions des Documents autorisées',
				'context' => '' 
		),
		92 => array (
				'term' => 'settings_upload_imagesext',
				'definition' => 'Extensions des Images autorisées',
				'context' => '' 
		),
		93 => array (
				'term' => 'settings_upload_pkgext',
				'definition' => 'Extensions des fichiers de Compression autorisées',
				'context' => '' 
		),
		94 => array (
				'term' => 'settings_upload_otherext',
				'definition' => 'Autres extensions autorisées',
				'context' => '' 
		),
		95 => array (
				'term' => 'settings_upload_imageresize_options',
				'definition' => 'Les Images doivent-elles redimensionnées ?',
				'context' => '' 
		),
		96 => array (
				'term' => 'settings_upload_imageresize_options_w',
				'definition' => 'Redimensionnement des Images en Largeur (en pixels)',
				'context' => '' 
		),
		97 => array (
				'term' => 'settings_upload_imageresize_options_h',
				'definition' => 'Redimensionnement des Images en Hauteur (en pixels)',
				'context' => '' 
		),
		98 => array (
				'term' => 'settings_upload_imageresize_options_q',
				'definition' => 'Qualité de l\'Image redimensionnée',
				'context' => '' 
		),
		99 => array (
				'term' => 'admin_upload_title',
				'definition' => 'Uploads',
				'context' => '' 
		),
		100 => array (
				'term' => 'settings_importing',
				'definition' => 'Permettre d\'importer des données depuis des fichiers CVS/KeyPas',
				'context' => '' 
		),
		101 => array (
				'term' => 'admin_proxy_ip',
				'definition' => 'IP Prox',
				'context' => '' 
		),
		102 => array (
				'term' => 'admin_proxy_ip_tip',
				'definition' => 'Si votre connexion intenet passe par un proxy, indiquer ici son IP. Sinon, laisser vide',
				'context' => '' 
		),
		103 => array (
				'term' => 'admin_proxy_port',
				'definition' => 'PORT Prox',
				'context' => '' 
		),
		104 => array (
				'term' => 'admin_proxy_port_tip',
				'definition' => 'Si vous avez indiqué une IP pour le proxy, indiquez ici son port. En général 8080. Sinon, laisser vide',
				'context' => '' 
		),
		105 => array (
				'term' => 'settings_ldap_elusers',
				'definition' => 'Utilisateurs locaux de TeamPass uniquement',
				'context' => '' 
		),
		106 => array (
				'term' => 'settings_ldap_elusers_tip',
				'definition' => 'Cette fonction autorise les utilisateurs de la base de données de s\'identifier via LDAP. Désactiver ceci si vous voulez utiliser un annuaire LDAP.',
				'context' => '' 
		),
		107 => array (
				'term' => 'error_role_complex_not_set',
				'definition' => 'Il est nécessaire de définir un niveau de complexité minimum pour ce Role !',
				'context' => '' 
		),
		108 => array (
				'term' => 'item_updated_text',
				'definition' => 'Cet Objet a été édité. Vous devez le recharger avant de pouvoir l\'éditer.',
				'context' => '' 
		),
		109 => array (
				'term' => 'database_menu',
				'definition' => 'Base de données',
				'context' => '' 
		),
		110 => array (
				'term' => 'db_items_edited',
				'definition' => 'Objet actuellement en cours d\'édition',
				'context' => '' 
		),
		111 => array (
				'term' => 'item_edition_start_hour',
				'definition' => 'Edition démarrée depuis',
				'context' => '' 
		),
		112 => array (
				'term' => 'settings_delay_for_item_edition',
				'definition' => 'Après quelle durée, l\'édition d\'un Objet est-elle considérée comme échoué (en minutes)',
				'context' => '' 
		),
		113 => array (
				'term' => 'settings_delay_for_item_edition_tip',
				'definition' => '&lt;span style=\'font-size:11px;max-width:300px;\'&gt;Lorsqu\'un Objet est édité, ce dernier est verrouillé de façon à interdire tout autre édition parallèle.&lt;br /&gt;Cette option permet de supprimer ce verrou automatiquement dès lors qu\'un délai en minute est révolu. La valeur 0 indique que le verrou ne sera jamais supprimé automatiquement.&lt;/span&gt;',
				'context' => '' 
		),
		114 => array (
				'term' => 'db_users_logged',
				'definition' => 'Utilisateurs actuellement connectés',
				'context' => '' 
		),
		115 => array (
				'term' => 'action',
				'definition' => 'Action',
				'context' => '' 
		),
		116 => array (
				'term' => 'login_time',
				'definition' => 'Connecté depuis',
				'context' => '' 
		),
		117 => array (
				'term' => 'lastname',
				'definition' => 'Prénom',
				'context' => '' 
		),
		118 => array (
				'term' => 'user_login',
				'definition' => 'Identifiant',
				'context' => '' 
		),
		119 => array (
				'term' => 'at_user_new_lastname',
				'definition' => 'Prénom de l\'utilisateur #user_login# changé',
				'context' => '' 
		),
		120 => array (
				'term' => 'at_user_new_name',
				'definition' => 'Nom de l\'utilisateur #user_login# changé',
				'context' => '' 
		),
		121 => array (
				'term' => 'info_list_of_connected_users_approximation',
				'definition' => 'Information : Cette liste peut lister plus d\'utilisateurs connectés que la réalité.',
				'context' => '' 
		),
		122 => array (
				'term' => 'disconnect_all_users',
				'definition' => 'Déconnecter tous les Utilisateurs (à l\'exception des Administrateurs)',
				'context' => '' 
		),
		123 => array (
				'term' => 'role',
				'definition' => 'Rôle',
				'context' => '' 
		),
		124 => array (
				'term' => 'admin_2factors_authentication_setting',
				'definition' => 'Activer l\'authentification Google en deux étape',
				'context' => '' 
		),
		125 => array (
				'term' => 'admin_2factors_authentication_setting_tip',
				'definition' => 'L\'authentification Google en deux étapes permet d\'accroître la sécurité de connexion des Utilisateurs. Dès qu\'un utilisateur veut se connecter, un code à usage unique est généré. Ce code doit être scanné et fourni par l\'utilisateur en plus de son mot de passe traditionnel.&lt;br /&gt;ATTENTION : Cette fonctionnalité nécessite une connexion permanente à Internet ainsi qu\'un smartphone',
				'context' => '' 
		),
		126 => array (
				'term' => '2factors_tile',
				'definition' => 'Authentification en 2 étape',
				'context' => '' 
		),
		127 => array (
				'term' => '2factors_image_text',
				'definition' => 'Merci de scanner le QR code',
				'context' => '' 
		),
		128 => array (
				'term' => '2factors_confirm_text',
				'definition' => 'Saisir le mot de passe à usage unique',
				'context' => '' 
		),
		129 => array (
				'term' => 'bad_onetime_password',
				'definition' => 'Mauvais mot de passe unique',
				'context' => '' 
		),
		130 => array (
				'term' => 'error_string_not_utf8',
				'definition' => 'Erreur : La chaine retournée n\'est pas au format UTF8 !',
				'context' => '' 
		),
		131 => array (
				'term' => 'error_role_exist',
				'definition' => 'Ce Role existe déjà !',
				'context' => '' 
		),
		132 => array (
				'term' => 'error_no_edition_possible_locked',
				'definition' => 'Edition impossible. Cet objet est déjà en cours d\'édition !',
				'context' => '' 
		),
		133 => array (
				'term' => 'error_mcrypt_not_loaded',
				'definition' => 'L\'extension \'mcrypt\' n\'est actuellement pas chargée. Celle-ci est requise pour que TeamPass fonctionne. Merci d\'en informer votre Administrateur.',
				'context' => '' 
		),
		134 => array (
				'term' => 'at_user_added',
				'definition' => 'Utilisateur #user_login# ajouté',
				'context' => '' 
		),
		135 => array (
				'term' => 'at_user_deleted',
				'definition' => 'Utilisateur #user_login# supprimé',
				'context' => '' 
		),
		136 => array (
				'term' => 'at_user_locked',
				'definition' => 'Utilisateur #user_login# bloqué',
				'context' => '' 
		),
		137 => array (
				'term' => 'at_user_unlocked',
				'definition' => 'Utilisateur #user_login# débloqué',
				'context' => '' 
		),
		138 => array (
				'term' => 'at_user_email_changed',
				'definition' => 'Email utilisateur #user_login# changé',
				'context' => '' 
		),
		139 => array (
				'term' => 'at_user_pwd_changed',
				'definition' => 'Mot de passe Utilisateur #user_login# changé',
				'context' => '' 
		),
		140 => array (
				'term' => 'at_user_initial_pwd_changed',
				'definition' => 'Mot de passe Utilisateur Mot de passe initial Utilisateur #user_login# changé',
				'context' => '' 
		),
		141 => array (
				'term' => 'user_mngt',
				'definition' => 'Gestion de l\'Utilisateur',
				'context' => '' 
		),
		142 => array (
				'term' => 'select',
				'definition' => 'Sélection',
				'context' => '' 
		),
		143 => array (
				'term' => 'user_activity',
				'definition' => 'Activité de l\'Utilisateur',
				'context' => '' 
		),
		144 => array (
				'term' => 'items',
				'definition' => 'Eléments',
				'context' => '' 
		),
		145 => array (
				'term' => 'enable_personal_saltkey_cookie',
				'definition' => 'La clé de cryptage personnelle est sauvegardée dans un cookie',
				'context' => '' 
		),
		146 => array (
				'term' => 'personal_saltkey_cookie_duration',
				'definition' => 'Durée avant expiration du cookie de la clé de cryptage personnelle',
				'context' => '' 
		),
		147 => array (
				'term' => 'admin_emails',
				'definition' => 'E-mail',
				'context' => '' 
		),
		148 => array (
				'term' => 'admin_emails_configuration',
				'definition' => 'Configuration des e-mail',
				'context' => '' 
		),
		149 => array (
				'term' => 'admin_emails_configuration_testing',
				'definition' => 'Test de la Configuratio',
				'context' => '' 
		),
		150 => array (
				'term' => 'admin_email_smtp_server',
				'definition' => 'Serveur SMT',
				'context' => '' 
		),
		151 => array (
				'term' => 'admin_email_auth',
				'definition' => 'Le serveur SMTP requière une authentification',
				'context' => '' 
		),
		152 => array (
				'term' => 'admin_email_auth_username',
				'definition' => 'Authentification identifian',
				'context' => '' 
		),
		153 => array (
				'term' => 'admin_email_auth_pwd',
				'definition' => 'Authentification mot de pass',
				'context' => '' 
		),
		154 => array (
				'term' => 'admin_email_port',
				'definition' => 'Port du Serveu',
				'context' => '' 
		),
		155 => array (
				'term' => 'admin_email_from',
				'definition' => 'E-mail de l\'expéditeu',
				'context' => '' 
		),
		156 => array (
				'term' => 'admin_email_from_name',
				'definition' => 'Nom de l\'expéditeu',
				'context' => '' 
		),
		157 => array (
				'term' => 'admin_email_test_configuration',
				'definition' => 'Tester la configuration des e-mail',
				'context' => '' 
		),
		158 => array (
				'term' => 'admin_email_test_configuration_tip',
				'definition' => 'Ce test va envoyer un email à l\\\'adresse indiquée. Si vous ne le recevez pas, merci de vérifier le paramétrage.',
				'context' => '' 
		),
		159 => array (
				'term' => 'admin_email_test_subject',
				'definition' => '[TeamPass] E-mail de tes',
				'context' => '' 
		),
		160 => array (
				'term' => 'admin_email_test_body',
				'definition' => 'Bonjour,&lt;br&gt;&lt;br&gt;E-mail envoyé avec succès.&lt;br&gt;&lt;br&gt;Salutations',
				'context' => '' 
		),
		161 => array (
				'term' => 'admin_email_result_ok',
				'definition' => 'E-mail envoyé ... vérifiez votre boite de réception',
				'context' => '' 
		),
		162 => array (
				'term' => 'admin_email_result_nok',
				'definition' => 'E-mail non envoyé ... vérifiez votre configuration. Erreur retournée :',
				'context' => '' 
		),
		163 => array (
				'term' => 'email_subject_item_updated',
				'definition' => 'Mot de passe mis à jour',
				'context' => '' 
		),
		164 => array (
				'term' => 'email_body_item_updated',
				'definition' => 'Bonjour,&lt;br&gt;&lt;br&gt;Le mot de passe de l\'élément \'#item_label#\' a été mis à jour.&lt;br /&gt;&lt;br /&gt;Vous pouvez le vérifier &lt;a href=\'".@$_SESSION[\'settings\'][\'cpassman_url\']."/index.php?page=items&group=#item_category#&id=#item_id#\'&gt;ICI&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;Salutation',
				'context' => '' 
		),
		165 => array (
				'term' => 'email_bodyalt_item_updated',
				'definition' => 'Le mot de passe de #item_label# a été mis à jour.',
				'context' => '' 
		),
		166 => array (
				'term' => 'admin_email_send_backlog',
				'definition' => 'Envoyer les e-mails dans la file d\'attente (actuellement #nb_emails# e-mails',
				'context' => '' 
		),
		167 => array (
				'term' => 'admin_email_send_backlog_tip',
				'definition' => 'Ce script permet de forcer l\'envoi des e-mails dans la file d\'attente de la base de données.&lt;br /&gt; Cela peut prendre plusieurs minutes en fonction du nombre d\'e-mails à envoyer',
				'context' => '' 
		),
		168 => array (
				'term' => 'please_wait',
				'definition' => 'Merci de patienter !',
				'context' => '' 
		),
		169 => array (
				'term' => 'admin_url_to_files_folder',
				'definition' => 'URL du répertoire Files',
				'context' => '' 
		),
		170 => array (
				'term' => 'admin_path_to_files_folder',
				'definition' => 'Chemin du répertoire Fichier',
				'context' => '' 
		),
		171 => array (
				'term' => 'admin_path_to_files_folder_tip',
				'definition' => 'Le répertoire Fichiers est utilisé pour sauvegarder tous les fichiers générés par TeamPass ainsi que certains fichiers envoyés.&lt;br /&gt;IMPORTANT : pour des raisons de sécurité, ce répertoire ne devrait pas être dans le répertoire WWW de votre serveur. Il devrait être mis dans un endroit protégé avec une règle de redirection.&lt;br /&gt;IMPORTANT 2 : Il serait bien de rajouter une tâche périodique pour supprimer son contenu',
				'context' => '' 
		),
		172 => array (
				'term' => 'admin_path_to_upload_folder_tip',
				'definition' => 'Le répertoire Upload contient tous les fichiers attachés à vos Éléments.&lt;br /&gt;IMPORTANT : Pour des raisons de sécurité, ce répertoire ne devrait pas être dans le répertoire WWW de votre serveur. Il devrait être mis dans un endroit protégé avec une règle de redirection.&lt;br /&gt;IMPORTANT 2 : Ce répertoire ne doit absolument pas être nettoyé ! Ces fichiers sont associés à vos éléments',
				'context' => '' 
		),
		173 => array (
				'term' => 'pdf_export',
				'definition' => 'Exports PDF',
				'context' => '' 
		),
		174 => array (
				'term' => 'pdf_password',
				'definition' => 'Clé d\'encryptage du PDF',
				'context' => '' 
		),
		175 => array (
				'term' => 'pdf_password_warning',
				'definition' => 'Vous devez fournir une clé d\'encryptage',
				'context' => '' 
		),
		176 => array (
				'term' => 'admin_pwd_maximum_length',
				'definition' => 'Longueur maximale des mots de pass',
				'context' => '' 
		),
		177 => array (
				'term' => 'admin_pwd_maximum_length_tip',
				'definition' => 'La valeur par défaut est fixée à 40 caractères. Il est important de savoir qu\'une taille plus grande aura un impact sur les performances de l\'outil. En effet plus la longueur du mot de passe est grande et plus il faut de temps au serveur pour chiffrer, déchiffrer et afficher les éléments',
				'context' => '' 
		),
		178 => array (
				'term' => 'settings_insert_manual_entry_item_history',
				'definition' => 'Permettre l\'insertion manuelle dans l\'Historique',
				'context' => '' 
		),
		179 => array (
				'term' => 'settings_insert_manual_entry_item_history_tip',
				'definition' => 'Il peut être parfois utile de saisir une entrée dans l\'historique d\'un objet. En activant cette fonction, cela devient possible.',
				'context' => '' 
		),
		180 => array (
				'term' => 'add_history_entry',
				'definition' => 'Ajouter une entrée dans l\'Historique',
				'context' => '' 
		),
		181 => array (
				'term' => 'at_manual',
				'definition' => 'Action manuelle',
				'context' => '' 
		),
		182 => array (
				'term' => 'at_manual_add',
				'definition' => 'Ajouté manuellement',
				'context' => '' 
		),
		183 => array (
				'term' => 'admin_path_to_upload_folder',
				'definition' => 'Chemin vers le répertoire Uploa',
				'context' => '' 
		),
		184 => array (
				'term' => 'admin_url_to_upload_folder',
				'definition' => 'URL vers le répertoire Upload',
				'context' => '' 
		),
		185 => array (
				'term' => 'automatic_del_after_date_text',
				'definition' => 'ou après la date',
				'context' => '' 
		),
		186 => array (
				'term' => 'at_automatically_deleted',
				'definition' => 'Supprimé automatiquement',
				'context' => '' 
		),
		187 => array (
				'term' => 'admin_setting_enable_delete_after_consultation',
				'definition' => 'L\'élément consulté peut être automatiquement supprimé',
				'context' => '' 
		),
		188 => array (
				'term' => 'admin_setting_enable_delete_after_consultation_tip',
				'definition' => '&lt;span style=\'font-size:11px;max-width:300px;\'&gt;Quand activée, cette option permet à l\'auteur de l\'élément de décider si ce dernier devra être automatiquement supprimé après avoir été consulté X fois.&lt;/span&gt;',
				'context' => '' 
		),
		189 => array (
				'term' => 'enable_delete_after_consultation',
				'definition' => 'L\'élément sera automatiquement supprimé après avoir été consulté',
				'context' => '' 
		),
		190 => array (
				'term' => 'times',
				'definition' => 'fois',
				'context' => '' 
		),
		191 => array (
				'term' => 'automatic_deletion_activated',
				'definition' => 'Suppression automatique active',
				'context' => '' 
		),
		192 => array (
				'term' => 'at_automatic_del',
				'definition' => 'suppression automatique',
				'context' => '' 
		),
		193 => array (
				'term' => 'error_times_before_deletion',
				'definition' => 'Le nombre de consultation avant suppression doit être supérieur à 0 !',
				'context' => '' 
		),
		194 => array (
				'term' => 'enable_notify',
				'definition' => 'Autoriser la Notification',
				'context' => '' 
		),
		195 => array (
				'term' => 'disable_notify',
				'definition' => 'Désactiver la Notification',
				'context' => '' 
		),
		196 => array (
				'term' => 'notify_activated',
				'definition' => 'Notification active',
				'context' => '' 
		),
		197 => array (
				'term' => 'at_email',
				'definition' => 'email',
				'context' => '' 
		),
		198 => array (
				'term' => 'enable_email_notification_on_item_shown',
				'definition' => 'Envoyer la notification par email lorsque l\'élément est consulté',
				'context' => '' 
		),
		199 => array (
				'term' => 'bad_email_format',
				'definition' => 'L\'adresse email n\'a pas le formalisme requis !',
				'context' => '' 
		),
		200 => array (
				'term' => 'item_share_text',
				'definition' => 'De façon à pouvoir partager cet élément par email, vous devez saisir l\'email et appuyer sur le bouton ENVOYER.',
				'context' => '' 
		),
		201 => array (
				'term' => 'share',
				'definition' => 'Partager cet élément',
				'context' => '' 
		),
		202 => array (
				'term' => 'share_sent_ok',
				'definition' => 'Email envoyé',
				'context' => '' 
		),
		203 => array (
				'term' => 'email_share_item_subject',
				'definition' => '[TeamPass] Un élément a été partagé avec vous',
				'context' => '' 
		),
		204 => array (
				'term' => 'email_share_item_mail',
				'definition' => 'Hello,&lt;br&gt;&lt;br&gt;&lt;u&gt;#tp_user#&lt;/u&gt; a partagé l\'élément &lt;b&gt;#tp_item#&lt;/b&gt; avec vous.&lt;br&gt;Cliquez le &lt;a href=\'#tp_link#\'&gt;LIEN&lt;/a&gt; pour y accéder.&lt;br&gt;&lt;br&gt;Cordialement.',
				'context' => '' 
		),
		205 => array (
				'term' => 'see_item_title',
				'definition' => 'Détails de l\'élément',
				'context' => '' 
		),
		206 => array (
				'term' => 'email_on_open_notification_subject',
				'definition' => '[TeamPass] Notification suite à la consultation d\'un élément',
				'context' => '' 
		),
		207 => array (
				'term' => 'email_on_open_notification_mail',
				'definition' => 'Bonjour,&lt;br&gt;&lt;br&gt;#tp_user# a consulté l\'élément \'#tp_item#\'.&lt;br&gt;Cliquez sur le &lt;a href=\'#tp_link#\'&gt;LIEN&lt;/a&gt; pour y accéder.&lt;br&gt;&lt;br&gt;Cordialement.',
				'context' => '' 
		),
		208 => array (
				'term' => 'pdf',
				'definition' => 'PDF',
				'context' => '' 
		),
		209 => array (
				'term' => 'csv',
				'definition' => 'CSV',
				'context' => '' 
		),
		210 => array (
				'term' => 'user_admin_migrate_pw',
				'definition' => 'Migrer les Objets personnels vers un autre compte',
				'context' => '' 
		),
		211 => array (
				'term' => 'migrate_pf_select_to',
				'definition' => 'Migrer les Objets personnels vers un utilisateur',
				'context' => '' 
		),
		212 => array (
				'term' => 'migrate_pf_user_salt',
				'definition' => 'Saisir la clé de l\'utilisateur sélectionné',
				'context' => '' 
		),
		213 => array (
				'term' => 'migrate_pf_no_sk',
				'definition' => 'Vous n\'avez pas saisie la clé',
				'context' => '' 
		),
		214 => array (
				'term' => 'migrate_pf_no_sk_user',
				'definition' => 'Vous devez saisir la clé',
				'context' => '' 
		),
		215 => array (
				'term' => 'migrate_pf_no_user_id',
				'definition' => 'Vous devez saisir l\'utilisateur',
				'context' => '' 
		),
		216 => array (
				'term' => 'email_subject_new_user',
				'definition' => '[TeamPass] Votre nouveau compte',
				'context' => '' 
		),
		217 => array (
				'term' => 'email_new_user_mail',
				'definition' => 'Bonjour,&lt;br&gt;&lt;br&gt;Un Administrateur vous a créé un compte pour TeampPass.&lt;br&gt;Vos identifiants de connexion sont les suivants :&lt;br&gt;- Login: #tp_login#&lt;br&gt;- Mot de passe: #tp_pw#&lt;br&gt;&lt;br&gt;Cliquer le &lt;a href=\'#tp_link#\'&gt;LIEN&lt;/a&gt; pour y accéder.&lt;br&gt;&lt;br&gt;Cordialement',
				'context' => '' 
		),
		218 => array (
				'term' => 'error_empty_data',
				'definition' => 'Aucune donnée à traiter !',
				'context' => '' 
		),
		219 => array (
				'term' => 'error_not_allowed_to',
				'definition' => 'Vous n\\\'etes pas autorisé à faire cela !',
				'context' => '' 
		),
		220 => array (
				'term' => 'personal_saltkey_lost',
				'definition' => 'Je l\'ai perdu',
				'context' => '' 
		),
		221 => array (
				'term' => 'new_saltkey_warning_lost',
				'definition' => 'Vous ne vous souvenez plus de la clé de cryptage ? Celle-ci ne pourra être récupérée. &lt;br&gt;En ré-initialisant cette clé de cryptage, tous vos anciens éléments seront supprimés !',
				'context' => '' 
		),
		222 => array (
				'term' => 'previous_pw',
				'definition' => 'Anciens mots de passe utilisés :',
				'context' => '' 
		),
		223 => array (
				'term' => 'no_previous_pw',
				'definition' => 'Aucun ancien mot de passe',
				'context' => '' 
		),
		224 => array (
				'term' => 'request_access_ot_item',
				'definition' => 'Demander un accès au créateur',
				'context' => '' 
		),
		225 => array (
				'term' => 'email_request_access_subject',
				'definition' => '[TeamPass] Demande d\'accès à un élément',
				'context' => '' 
		),
		226 => array (
				'term' => 'email_request_access_mail',
				'definition' => 'Bonjour #tp_item_author#,&lt;br&gt;&lt;br&gt;L\'utilisateur #tp_user# a demandé un accès à l\'objet  \'#tp_item#\'.&lt;br&gt;&lt;br&gt;Avant d\'autoriser l\'accès, soyez sur de ce que vous faites.&lt;br&gt;&lt;br&gt;Cordialement.',
				'context' => '' 
		),
		227 => array (
				'term' => 'admin_action_change_salt_key',
				'definition' => 'Changer la clé de salage principal',
				'context' => '' 
		),
		228 => array (
				'term' => 'admin_action_change_salt_key_tip',
				'definition' => 'Avant de changer votre clé de salage principale, merci de vous assurer d\'avoir réalisé une sauvegarde complète de la base de données, et de mettre TeamPass en mode maintenance',
				'context' => '' 
		),
		229 => array (
				'term' => 'block_admin_info',
				'definition' => 'Infos Administrateur',
				'context' => '' 
		),
		230 => array (
				'term' => 'admin_new1',
				'definition' => '&lt;i&gt;&lt;u&gt;14FEV2012 :&lt;/i&gt;&lt;/u&gt;&lt;br&gt;Le profil Administrateur n\'est plus autorisé à voir les éléments. Ce profil est maintenant uniquement un profil technique.&lt;br /&gt;Voir&lt;a href=\\"http://www.teampass.net/how-to-handle-changes-on-administrator-profile\\" target=\\"_blank\\"&gt;TeamPass.net&lt;/a&gt; pour voir comment prendre en compte ce changement',
				'context' => '' 
		),
		231 => array (
				'term' => 'nb_items_by_query',
				'definition' => 'Nombre d\'objets à afficher par requête',
				'context' => '' 
		),
		232 => array (
				'term' => 'nb_items_by_query_tip',
				'definition' => '&lt;span style="font-size:11px;max-width:300px;"&gt;Plus d\'objets signifie plus de temps pour les afficher.&lt;br&gt;Sélectionner \'auto\' pour laisser l\'outil le nombre d\'objets à afficher en fonction de la taille de l\'écran.&lt;br&gt;Sélectionner \'max\' pour forcer l\'affichage de la liste complète en une seule fois.&lt;br&gt;Sélectionner un nombre fixe d\'objets à afficher à chaque nouvelle requête.&lt;/span&gt;',
				'context' => '' 
		),
		233 => array (
				'term' => 'error_no_selected_folder',
				'definition' => 'Vous devez sélectionner un répertoire',
				'context' => '' 
		),
		234 => array (
				'term' => 'open_url_link',
				'definition' => 'Ouvrir dans une nouvelle page',
				'context' => '' 
		),
		235 => array (
				'term' => 'error_pw_too_long',
				'definition' => 'Mot de passe trop long ! Maximum 40 caractères.',
				'context' => '' 
		),
		236 => array (
				'term' => 'at_restriction',
				'definition' => 'Restriction',
				'context' => '' 
		),
		237 => array (
				'term' => 'pw_encryption_error',
				'definition' => 'Erreur de décryptage du mot de passe !',
				'context' => '' 
		),
		238 => array (
				'term' => 'enable_send_email_on_user_login',
				'definition' => 'Envoyer un email aux Administrateurs lorsqu\'un utilisateur se connecte',
				'context' => '' 
		),
		239 => array (
				'term' => 'email_subject_on_user_login',
				'definition' => '[TeamPass] Un utilisateur s\'est connecté',
				'context' => '' 
		),
		240 => array (
				'term' => 'email_body_on_user_login',
				'definition' => 'Bonjour,&lt;br&gt;&lt;br&gt;L\'utilisateur #tp_user# s\'est connecté à TeamPass le #tp_date# à #tp_time#.&lt;br&gt;&lt;br&gt;Cordialement.',
				'context' => '' 
		),
		241 => array (
				'term' => 'account_is_locked',
				'definition' => 'Ce compte est bloqué',
				'context' => '' 
		),
		242 => array (
				'term' => 'activity',
				'definition' => 'Activité',
				'context' => '' 
		),
		243 => array (
				'term' => 'add_button',
				'definition' => 'Ajouter',
				'context' => '' 
		),
		244 => array (
				'term' => 'add_new_group',
				'definition' => 'Ajouter un nouveau répertoire',
				'context' => '' 
		),
		245 => array (
				'term' => 'add_role_tip',
				'definition' => 'Ajouter un rôle',
				'context' => '' 
		),
		246 => array (
				'term' => 'admin',
				'definition' => 'Administration',
				'context' => '' 
		),
		247 => array (
				'term' => 'admin_action',
				'definition' => 'Merci de confirmer votre actio',
				'context' => '' 
		),
		248 => array (
				'term' => 'admin_action_db_backup',
				'definition' => 'Réaliser une sauvegarde de la base de donnée',
				'context' => '' 
		),
		249 => array (
				'term' => 'admin_action_db_backup_key_tip',
				'definition' => 'Merci de saisir la clé de chiffrement. Pensez à la conserver. (laissez vide pour aucun chiffrement',
				'context' => '' 
		),
		250 => array (
				'term' => 'admin_action_db_backup_start_tip',
				'definition' => 'Lance',
				'context' => '' 
		),
		251 => array (
				'term' => 'admin_action_db_backup_tip',
				'definition' => 'C\'est une bonne pratique que de réaliser des sauvegardes. Elles sont utiles en cas de problèmes',
				'context' => '' 
		),
		252 => array (
				'term' => 'admin_action_db_clean_items',
				'definition' => 'Retirer tous les éléments orphelins de la base de donnée',
				'context' => '' 
		),
		253 => array (
				'term' => 'admin_action_db_clean_items_result',
				'definition' => 'éléments ont été supprimés',
				'context' => '' 
		),
		254 => array (
				'term' => 'admin_action_db_clean_items_tip',
				'definition' => 'Cela ne fera que supprimer tous les éléments qui sont associés à un répertoire ayant été supprimé. Pensez à faire une sauvegarde avant',
				'context' => '' 
		),
		255 => array (
				'term' => 'admin_action_db_optimize',
				'definition' => 'Optimiser la base de donnée',
				'context' => '' 
		),
		256 => array (
				'term' => 'admin_action_db_restore',
				'definition' => 'Restaurer la base de donnée',
				'context' => '' 
		),
		257 => array (
				'term' => 'admin_action_db_restore_key',
				'definition' => 'Merci de saisir la clé de chiffrement',
				'context' => '' 
		),
		258 => array (
				'term' => 'admin_action_db_restore_tip',
				'definition' => 'Doit être réalisé à partir d\'une sauvegarde',
				'context' => '' 
		),
		259 => array (
				'term' => 'admin_action_purge_old_files',
				'definition' => 'Purger les vieux fichier',
				'context' => '' 
		),
		260 => array (
				'term' => 'admin_action_purge_old_files_result',
				'definition' => 'fichiers ont été supprimés',
				'context' => '' 
		),
		261 => array (
				'term' => 'admin_action_purge_old_files_tip',
				'definition' => 'Cela va supprimer les fichiers temporaires de plus de 7 jours',
				'context' => '' 
		),
		262 => array (
				'term' => 'admin_action_reload_cache_table',
				'definition' => 'Reconstruire la table \'Cache',
				'context' => '' 
		),
		263 => array (
				'term' => 'admin_action_reload_cache_table_tip',
				'definition' => 'Cela permet de reconstruire entièrement la table Cache. Cette action peut-être réalisée de temps en temps',
				'context' => '' 
		),
		264 => array (
				'term' => 'admin_backups',
				'definition' => 'Sauvegarde',
				'context' => '' 
		),
		265 => array (
				'term' => 'admin_error_no_complexity',
				'definition' => '(&lt;a href=\'index.php?page=manage_groups\'&gt;Définir ?&lt;/a&gt;)',
				'context' => '' 
		),
		266 => array (
				'term' => 'admin_error_no_visibility',
				'definition' => 'Personne ne peut voir cet élément. (&lt;a href=\'index.php?page=manage_roles\'&gt;Paramétrer les rôles&lt;/a&gt;)',
				'context' => '' 
		),
		267 => array (
				'term' => 'admin_functions',
				'definition' => 'Gestion des Rôle',
				'context' => '' 
		),
		268 => array (
				'term' => 'admin_groups',
				'definition' => 'Gestion des Répertoire',
				'context' => '' 
		),
		269 => array (
				'term' => 'admin_help',
				'definition' => 'Aid',
				'context' => '' 
		),
		270 => array (
				'term' => 'admin_info',
				'definition' => 'Quelques informations sur l\'outi',
				'context' => '' 
		),
		271 => array (
				'term' => 'admin_info_loading',
				'definition' => 'Merci de patienter pendant la durée du chargement ..',
				'context' => '' 
		),
		272 => array (
				'term' => 'admin_ldap_configuration',
				'definition' => 'Configuration LDA',
				'context' => '' 
		),
		273 => array (
				'term' => 'admin_ldap_menu',
				'definition' => 'Options LDA',
				'context' => '' 
		),
		274 => array (
				'term' => 'admin_main',
				'definition' => 'Information',
				'context' => '' 
		),
		275 => array (
				'term' => 'admin_misc_cpassman_dir',
				'definition' => 'Chemin d\'accès à TeamPas',
				'context' => '' 
		),
		276 => array (
				'term' => 'admin_misc_cpassman_url',
				'definition' => 'URL complète vers TeamPas',
				'context' => '' 
		),
		277 => array (
				'term' => 'admin_misc_custom_login_text',
				'definition' => 'Texte personnel sur l\'écran de connexio',
				'context' => '' 
		),
		278 => array (
				'term' => 'admin_misc_custom_logo',
				'definition' => 'URL complète vers un logo personne',
				'context' => '' 
		),
		279 => array (
				'term' => 'admin_misc_favicon',
				'definition' => 'Chemin d\'accès vers le fichier favico',
				'context' => '' 
		),
		280 => array (
				'term' => 'admin_misc_title',
				'definition' => 'Personnalise',
				'context' => '' 
		),
		281 => array (
				'term' => 'admin_one_shot_backup',
				'definition' => 'Sauvegarde et restauration à la volé',
				'context' => '' 
		),
		282 => array (
				'term' => 'admin_script_backups',
				'definition' => 'Paramètres pour les Sauvegardes par scrip',
				'context' => '' 
		),
		283 => array (
				'term' => 'admin_script_backups_tip',
				'definition' => 'Pour plus de sécurité, il est conseillé de paramétrer des sauvegardes automatiques de votre base de donné',
				'context' => '' 
		),
		284 => array (
				'term' => 'admin_script_backup_decrypt',
				'definition' => 'Nom du fichier que vous voulez décoder',
				'context' => '' 
		),
		285 => array (
				'term' => 'admin_script_backup_decrypt_tip',
				'definition' => 'Pour décoder la sauvegarde, indiquer ici le nom du fichier (sans chemin ni extension).
Le fichier décodé sera sauvegardé dans le répertoire des sauvegardes.',
				'context' => '' 
		),
		286 => array (
				'term' => 'admin_script_backup_encryption',
				'definition' => 'Clé de codage optionnelle',
				'context' => '' 
		),
		287 => array (
				'term' => 'admin_script_backup_encryption_tip',
				'definition' => 'Si précisé cette clé sera utilisée pour crypter votre fichier',
				'context' => '' 
		),
		288 => array (
				'term' => 'admin_script_backup_filename',
				'definition' => 'Nom du fichier',
				'context' => '' 
		),
		289 => array (
				'term' => 'admin_script_backup_filename_tip',
				'definition' => 'Nom du fichier que vous souhaitez définir pour vos sauvegardes',
				'context' => '' 
		),
		290 => array (
				'term' => 'admin_script_backup_path',
				'definition' => 'Répertoire complet des fichiers',
				'context' => '' 
		),
		291 => array (
				'term' => 'admin_script_backup_path_tip',
				'definition' => 'Préciser le répertoire complet de sauvegardes des fichiers',
				'context' => '' 
		),
		292 => array (
				'term' => 'admin_settings',
				'definition' => 'Paramétres',
				'context' => '' 
		),
		293 => array (
				'term' => 'admin_settings_title',
				'definition' => 'Paramétres de TeamPass',
				'context' => '' 
		),
		294 => array (
				'term' => 'admin_setting_activate_expiration',
				'definition' => 'Activer l\'expiration des éléments',
				'context' => '' 
		),
		295 => array (
				'term' => 'admin_setting_activate_expiration_tip',
				'definition' => 'Quand activée, cette option permet de ne pas afficher les éléments expirés.',
				'context' => '' 
		),
		296 => array (
				'term' => 'admin_users',
				'definition' => 'Gestion des Utilisateurs',
				'context' => '' 
		),
		297 => array (
				'term' => 'admin_views',
				'definition' => 'Différentes vues',
				'context' => '' 
		),
		298 => array (
				'term' => 'alert_message_done',
				'definition' => 'Fait !',
				'context' => '' 
		),
		299 => array (
				'term' => 'alert_message_personal_sk_missing',
				'definition' => 'Vous devez saisir votre clef personnelle !',
				'context' => '' 
		),
		300 => array (
				'term' => 'all',
				'definition' => 'tous',
				'context' => '' 
		),
		301 => array (
				'term' => 'anyone_can_modify',
				'definition' => 'Cette élément peut être modifié par tout utilisateur',
				'context' => '' 
		),
		302 => array (
				'term' => 'associated_role',
				'definition' => 'Quel rôle doit être associé à ce répertoire :',
				'context' => '' 
		),
		303 => array (
				'term' => 'associate_kb_to_items',
				'definition' => 'Choisir les éléments à associer à cette fiche de connaissance',
				'context' => '' 
		),
		304 => array (
				'term' => 'assoc_authorized_groups',
				'definition' => 'Répertoires autorisés associés',
				'context' => '' 
		),
		305 => array (
				'term' => 'assoc_forbidden_groups',
				'definition' => 'Répertoires interdits associés',
				'context' => '' 
		),
		306 => array (
				'term' => 'at',
				'definition' => 'à',
				'context' => '' 
		),
		307 => array (
				'term' => 'at_add_file',
				'definition' => 'Fichier ajouté',
				'context' => '' 
		),
		308 => array (
				'term' => 'at_category',
				'definition' => 'Répertoire',
				'context' => '' 
		),
		309 => array (
				'term' => 'at_copy',
				'definition' => 'Copie faite',
				'context' => '' 
		),
		310 => array (
				'term' => 'at_creation',
				'definition' => 'Création',
				'context' => '' 
		),
		311 => array (
				'term' => 'at_delete',
				'definition' => 'Suppression',
				'context' => '' 
		),
		312 => array (
				'term' => 'at_del_file',
				'definition' => 'Fichier supprimé',
				'context' => '' 
		),
		313 => array (
				'term' => 'at_description',
				'definition' => 'Description.',
				'context' => '' 
		),
		314 => array (
				'term' => 'at_file',
				'definition' => 'Fichier',
				'context' => '' 
		),
		315 => array (
				'term' => 'at_import',
				'definition' => 'Importation',
				'context' => '' 
		),
		316 => array (
				'term' => 'at_label',
				'definition' => 'Label',
				'context' => '' 
		),
		317 => array (
				'term' => 'at_login',
				'definition' => 'Login',
				'context' => '' 
		),
		318 => array (
				'term' => 'at_modification',
				'definition' => 'Modification',
				'context' => '' 
		),
		319 => array (
				'term' => 'at_moved',
				'definition' => 'Déplacé',
				'context' => '' 
		),
		320 => array (
				'term' => 'at_personnel',
				'definition' => 'Personnel',
				'context' => '' 
		),
		321 => array (
				'term' => 'at_pw',
				'definition' => 'Mot de passe changé.',
				'context' => '' 
		),
		322 => array (
				'term' => 'at_restored',
				'definition' => 'Restauré',
				'context' => '' 
		),
		323 => array (
				'term' => 'at_shown',
				'definition' => 'Vu',
				'context' => '' 
		),
		324 => array (
				'term' => 'at_url',
				'definition' => 'Url',
				'context' => '' 
		),
		325 => array (
				'term' => 'auteur',
				'definition' => 'Auteur',
				'context' => '' 
		),
		326 => array (
				'term' => 'author',
				'definition' => 'Auteur',
				'context' => '' 
		),
		327 => array (
				'term' => 'authorized_groups',
				'definition' => 'Plus de Répertoires autorisés',
				'context' => '' 
		),
		328 => array (
				'term' => 'auth_creation_without_complexity',
				'definition' => 'Autoriser la création d\'un item sans que le niveau de complexité soit atteint',
				'context' => '' 
		),
		329 => array (
				'term' => 'auth_modification_without_complexity',
				'definition' => 'Autoriser la modification d\'un item sans que le niveau de complexité soit atteint',
				'context' => '' 
		),
		330 => array (
				'term' => 'auto_create_folder_role',
				'definition' => 'Créer le répertoire et le rôle pour ',
				'context' => '' 
		),
		331 => array (
				'term' => 'block_last_created',
				'definition' => 'Derniers créés',
				'context' => '' 
		),
		332 => array (
				'term' => 'bugs_page',
				'definition' => 'Si vous découvrais un bug, vous pouvez directement le reporter dans la section &lt;a href=\'http://code.google.com/p/TeamPass/issues/list\' target=\'_blank\'&gt;&lt;u&gt;Bugs&lt;/u&gt;&lt;/a&gt;.',
				'context' => '' 
		),
		333 => array (
				'term' => 'by',
				'definition' => 'par',
				'context' => '' 
		),
		334 => array (
				'term' => 'cancel',
				'definition' => 'Annuler',
				'context' => '' 
		),
		335 => array (
				'term' => 'cancel_button',
				'definition' => 'Annuler',
				'context' => '' 
		),
		336 => array (
				'term' => 'can_create_root_folder',
				'definition' => 'Peux créer un répertoire à la racine',
				'context' => '' 
		),
		337 => array (
				'term' => 'changelog',
				'definition' => 'Evolutions',
				'context' => '' 
		),
		338 => array (
				'term' => 'change_authorized_groups',
				'definition' => 'Changer les répertoires autorisés',
				'context' => '' 
		),
		339 => array (
				'term' => 'change_forbidden_groups',
				'definition' => 'Changer les répertoires interdis',
				'context' => '' 
		),
		340 => array (
				'term' => 'change_function',
				'definition' => 'Changer les rôles associées',
				'context' => '' 
		),
		341 => array (
				'term' => 'change_group_autgroups_info',
				'definition' => 'Sélection des répertoires autorisés associées à la rôle',
				'context' => '' 
		),
		342 => array (
				'term' => 'change_group_autgroups_title',
				'definition' => 'Paramétrage des répertoires autorisés',
				'context' => '' 
		),
		343 => array (
				'term' => 'change_group_forgroups_info',
				'definition' => 'Sélection des répertoires interdits associées à la rôle',
				'context' => '' 
		),
		344 => array (
				'term' => 'change_group_forgroups_title',
				'definition' => 'Paramétrage des répertoires interdits',
				'context' => '' 
		),
		345 => array (
				'term' => 'change_user_autgroups_info',
				'definition' => 'Sélection des répertoires autorisés associées au compte',
				'context' => '' 
		),
		346 => array (
				'term' => 'change_user_autgroups_title',
				'definition' => 'Paramétrage des répertoires autorisés',
				'context' => '' 
		),
		347 => array (
				'term' => 'change_user_forgroups_info',
				'definition' => 'Sélection des répertoires interdits associées au compte',
				'context' => '' 
		),
		348 => array (
				'term' => 'change_user_forgroups_title',
				'definition' => 'Paramétrage des répertoires interdits',
				'context' => '' 
		),
		349 => array (
				'term' => 'change_user_functions_info',
				'definition' => 'Sélection des rôles associées au compte',
				'context' => '' 
		),
		350 => array (
				'term' => 'change_user_functions_title',
				'definition' => 'Paramétrage des rôles associées',
				'context' => '' 
		),
		351 => array (
				'term' => 'check_all_text',
				'definition' => 'Tous',
				'context' => '' 
		),
		352 => array (
				'term' => 'close',
				'definition' => 'Fermer',
				'context' => '' 
		),
		353 => array (
				'term' => 'complexity',
				'definition' => 'Compléxité',
				'context' => '' 
		),
		354 => array (
				'term' => 'complex_asked',
				'definition' => 'Required complexity',
				'context' => '' 
		),
		355 => array (
				'term' => 'complex_level0',
				'definition' => 'Très faible',
				'context' => '' 
		),
		356 => array (
				'term' => 'complex_level1',
				'definition' => 'Faible',
				'context' => '' 
		),
		357 => array (
				'term' => 'complex_level2',
				'definition' => 'Moyen',
				'context' => '' 
		),
		358 => array (
				'term' => 'complex_level3',
				'definition' => 'Fort',
				'context' => '' 
		),
		359 => array (
				'term' => 'complex_level4',
				'definition' => 'Très fort',
				'context' => '' 
		),
		360 => array (
				'term' => 'complex_level5',
				'definition' => 'Sûr',
				'context' => '' 
		),
		361 => array (
				'term' => 'complex_level6',
				'definition' => 'Très sûr',
				'context' => '' 
		),
		362 => array (
				'term' => 'confirm',
				'definition' => 'Confirmation',
				'context' => '' 
		),
		363 => array (
				'term' => 'confirm_delete_group',
				'definition' => 'Etes vous sur de vouloir supprimer ce répertoire ainsi que tous les éléments inclus ?',
				'context' => '' 
		),
		364 => array (
				'term' => 'confirm_del_account',
				'definition' => 'Attention, vous allez supprimer ce compte ! ... poursuivre ?',
				'context' => '' 
		),
		365 => array (
				'term' => 'confirm_del_from_fav',
				'definition' => 'Merci de confirmer la suppression.',
				'context' => '' 
		),
		366 => array (
				'term' => 'confirm_del_role',
				'definition' => 'Merci de confirmer la suppression du rôle suivant :',
				'context' => '' 
		),
		367 => array (
				'term' => 'confirm_edit_role',
				'definition' => 'Merci de saisir l\'intitulé du role :',
				'context' => '' 
		),
		368 => array (
				'term' => 'confirm_lock_account',
				'definition' => 'Vous avez décidé de VERROUILLER cet utilisateur. Merci de confirmer.',
				'context' => '' 
		),
		369 => array (
				'term' => 'connection',
				'definition' => 'Connexion',
				'context' => '' 
		),
		370 => array (
				'term' => 'connections',
				'definition' => 'connexions',
				'context' => '' 
		),
		371 => array (
				'term' => 'copy',
				'definition' => 'Copier',
				'context' => '' 
		),
		372 => array (
				'term' => 'copy_to_clipboard_small_icons',
				'definition' => 'Activer les icônes de copie dans le presse papier',
				'context' => '' 
		),
		373 => array (
				'term' => 'copy_to_clipboard_small_icons_tip',
				'definition' => '&lt;span style=\'font-size:11px;max-width:300px;\'&gt;Cela peut permettre de limiter l\'utilisation de la mémoire de l\'ordinateur.&lt;br /&gt;En effet, le presse papier n\'est pas utilisé pour charger les informations des éléments. Dans ce cas, aucune copie rapide n\'est possible.&lt;/span&gt;',
				'context' => '' 
		),
		374 => array (
				'term' => 'creation_date',
				'definition' => 'Creation date',
				'context' => '' 
		),
		375 => array (
				'term' => 'csv_import_button_text',
				'definition' => 'Fichier CSV',
				'context' => '' 
		),
		376 => array (
				'term' => 'date',
				'definition' => 'Date',
				'context' => '' 
		),
		377 => array (
				'term' => 'date_format',
				'definition' => 'Format de la date',
				'context' => '' 
		),
		378 => array (
				'term' => 'days',
				'definition' => 'jours',
				'context' => '' 
		),
		379 => array (
				'term' => 'definition',
				'definition' => 'Définition',
				'context' => '' 
		),
		380 => array (
				'term' => 'delete',
				'definition' => 'Supprimé',
				'context' => '' 
		),
		381 => array (
				'term' => 'deletion',
				'definition' => 'Suppressions',
				'context' => '' 
		),
		382 => array (
				'term' => 'deletion_title',
				'definition' => 'Liste des éléments supprimés',
				'context' => '' 
		),
		383 => array (
				'term' => 'del_button',
				'definition' => 'Supprimer',
				'context' => '' 
		),
		384 => array (
				'term' => 'del_function',
				'definition' => 'Supprimer la Rôle',
				'context' => '' 
		),
		385 => array (
				'term' => 'del_group',
				'definition' => 'Supprimer le répertoire',
				'context' => '' 
		),
		386 => array (
				'term' => 'description',
				'definition' => 'Description',
				'context' => '' 
		),
		387 => array (
				'term' => 'disconnect',
				'definition' => 'Déconnexion',
				'context' => '' 
		),
		388 => array (
				'term' => 'disconnection',
				'definition' => 'Déconnexion',
				'context' => '' 
		),
		389 => array (
				'term' => 'div_dialog_message_title',
				'definition' => 'Information',
				'context' => '' 
		),
		390 => array (
				'term' => 'done',
				'definition' => 'Fait',
				'context' => '' 
		),
		391 => array (
				'term' => 'drag_drop_helper',
				'definition' => 'Déplacer l\'élément',
				'context' => '' 
		),
		392 => array (
				'term' => 'duplicate_folder',
				'definition' => 'Autoriser plusieurs répertoires avec le même nom.',
				'context' => '' 
		),
		393 => array (
				'term' => 'duplicate_item',
				'definition' => 'Autoriser plusieurs éléments avec le même nom.',
				'context' => '' 
		),
		394 => array (
				'term' => 'email',
				'definition' => 'Email',
				'context' => '' 
		),
		395 => array (
				'term' => 'email_altbody_1',
				'definition' => 'Le mot de passe de',
				'context' => '' 
		),
		396 => array (
				'term' => 'email_altbody_2',
				'definition' => 'a été créé.',
				'context' => '' 
		),
		397 => array (
				'term' => 'email_announce',
				'definition' => 'Annoncer par email ce nouveau mot de passe',
				'context' => '' 
		),
		398 => array (
				'term' => 'email_body1',
				'definition' => 'Bonjour,&lt;br&gt;&lt;br&gt;Le mot de passe de \'',
				'context' => '' 
		),
		399 => array (
				'term' => 'email_body2',
				'definition' => 'a été créé.&lt;br /&gt;&lt;br /&gt;Vous pouvez le consulter &lt;a href=\'',
				'context' => '' 
		),
		400 => array (
				'term' => 'email_body3',
				'definition' => '\'&gt;ICI&lt;/a&gt;&lt;br /&gt;&lt;br /&gt;A bientot.',
				'context' => '' 
		),
		401 => array (
				'term' => 'email_change',
				'definition' => 'Changer l\'email',
				'context' => '' 
		),
		402 => array (
				'term' => 'email_changed',
				'definition' => 'Email changé !',
				'context' => '' 
		),
		403 => array (
				'term' => 'email_select',
				'definition' => 'Sélectionner les personnes à avertir',
				'context' => '' 
		),
		404 => array (
				'term' => 'email_subject',
				'definition' => 'Création d\'un nouveau mot de passe',
				'context' => '' 
		),
		405 => array (
				'term' => 'email_text_new_user',
				'definition' => 'Bonjour,&lt;br /&gt;&lt;br /&gt;Votre compte a été créé dans TeamPass.&lt;br /&gt;Vous pouvez maintenant accéder à ".$TeamPass_url." en utilisant les informations de connexion suivants : &lt;br /&gt;',
				'context' => '' 
		),
		406 => array (
				'term' => 'enable_favourites',
				'definition' => 'Autoriser les utilisateurs à utiliser les Favoris',
				'context' => '' 
		),
		407 => array (
				'term' => 'enable_personal_folder',
				'definition' => 'Activer le Répertoire Personnel',
				'context' => '' 
		),
		408 => array (
				'term' => 'enable_personal_folder_feature',
				'definition' => 'Activer la fonctionnalité de Répertoire Personnel',
				'context' => '' 
		),
		409 => array (
				'term' => 'enable_user_can_create_folders',
				'definition' => 'Les utilisateurs peuvent gérer les sous-répertoires auxquels ils ont accès.',
				'context' => '' 
		),
		410 => array (
				'term' => 'encrypt_key',
				'definition' => 'Clé de cryptage',
				'context' => '' 
		),
		411 => array (
				'term' => 'errors',
				'definition' => 'erreurs',
				'context' => '' 
		),
		412 => array (
				'term' => 'error_complex_not_enought',
				'definition' => 'La complexité du mot de passe n\'est pas suffisante !',
				'context' => '' 
		),
		413 => array (
				'term' => 'error_confirm',
				'definition' => 'La confirmation du mot de passe n\'est pas correcte !',
				'context' => '' 
		),
		414 => array (
				'term' => 'error_cpassman_dir',
				'definition' => 'Aucun chemin d\'accès à TeamPass de défini. Merci de sélectionner l\'onglet \'Paramètres\' dans la page d\'administration.',
				'context' => '' 
		),
		415 => array (
				'term' => 'error_cpassman_url',
				'definition' => 'Aucune URL vers TeamPass de définie. Merci de sélectionner l\'onglet \'Paramètres\' dans la page d\'administration.',
				'context' => '' 
		),
		416 => array (
				'term' => 'error_fields_2',
				'definition' => 'Les 2 champs sont obligatoires !',
				'context' => '' 
		),
		417 => array (
				'term' => 'error_group',
				'definition' => 'Vous devez choisir un Répertoire !',
				'context' => '' 
		),
		418 => array (
				'term' => 'error_group_complex',
				'definition' => 'Le répertoire doit avoir un niveau de complexité minimal !',
				'context' => '' 
		),
		419 => array (
				'term' => 'error_group_exist',
				'definition' => 'Ce répertoire existe déjà !!',
				'context' => '' 
		),
		420 => array (
				'term' => 'error_group_label',
				'definition' => 'Le répertoire doit avoir un intitulé !',
				'context' => '' 
		),
		421 => array (
				'term' => 'error_html_codes',
				'definition' => 'Du texte contient du code html. Ceci n\'est pas une bonne idée !',
				'context' => '' 
		),
		422 => array (
				'term' => 'error_item_exists',
				'definition' => 'Cet élément existe déjà !',
				'context' => '' 
		),
		423 => array (
				'term' => 'error_label',
				'definition' => 'Un label est obligatoire !',
				'context' => '' 
		),
		424 => array (
				'term' => 'error_must_enter_all_fields',
				'definition' => 'Vous devez saisir chaque champs !',
				'context' => '' 
		),
		425 => array (
				'term' => 'error_mysql',
				'definition' => 'Erreur Mysql !',
				'context' => '' 
		),
		426 => array (
				'term' => 'error_not_authorized',
				'definition' => 'Vous n\\\'etes pas autorisé à accéder à cette page.',
				'context' => '' 
		),
		427 => array (
				'term' => 'error_not_exists',
				'definition' => 'Cette page n\'existe pas.',
				'context' => '' 
		),
		428 => array (
				'term' => 'error_no_folders',
				'definition' => 'Vous devriez commencer par créer des répertoires.',
				'context' => '' 
		),
		429 => array (
				'term' => 'error_no_password',
				'definition' => 'Vous devez renseigner votre login et mot de passe !',
				'context' => '' 
		),
		430 => array (
				'term' => 'error_no_roles',
				'definition' => 'Vous devriez aussi créer des roles et les associer à des répertoires.',
				'context' => '' 
		),
		431 => array (
				'term' => 'error_password_confirmation',
				'definition' => 'Les mots de passe doivent etre identiques',
				'context' => '' 
		),
		432 => array (
				'term' => 'error_pw',
				'definition' => 'Un mot de passe est obligatoire !',
				'context' => '' 
		),
		433 => array (
				'term' => 'error_renawal_period_not_integer',
				'definition' => 'Période de renouvellement exprimée en mois !',
				'context' => '' 
		),
		434 => array (
				'term' => 'error_salt',
				'definition' => '&lt;b&gt;La CLE de cryptage est trop longue! Merci de ne pas utiliser l\'outil tant qu\'un Administrateur n\'a pas modifié la CLE de cryptage.&lt;/b&gt; Dans le fichier settings.php, la longueur maximum autorisé pour SALT est 32 caractères.',
				'context' => '' 
		),
		435 => array (
				'term' => 'error_tags',
				'definition' => 'Aucune ponctuation n\'est autorisé ! Seulement des espaces.',
				'context' => '' 
		),
		436 => array (
				'term' => 'error_user_exists',
				'definition' => 'L\'utilisateur existe déjà !',
				'context' => '' 
		),
		437 => array (
				'term' => 'expiration_date',
				'definition' => 'Expiration date',
				'context' => '' 
		),
		438 => array (
				'term' => 'expir_one_month',
				'definition' => '1 mois',
				'context' => '' 
		),
		439 => array (
				'term' => 'expir_one_year',
				'definition' => '1 an',
				'context' => '' 
		),
		440 => array (
				'term' => 'expir_six_months',
				'definition' => '6 mois',
				'context' => '' 
		),
		441 => array (
				'term' => 'expir_today',
				'definition' => 'Aujourd\'hui',
				'context' => '' 
		),
		442 => array (
				'term' => 'files_&_images',
				'definition' => 'Fichiers &amp; Images',
				'context' => '' 
		),
		443 => array (
				'term' => 'find',
				'definition' => 'Rechercher',
				'context' => '' 
		),
		444 => array (
				'term' => 'find_text',
				'definition' => 'Votre recherche',
				'context' => '' 
		),
		445 => array (
				'term' => 'folders',
				'definition' => 'Répertoires',
				'context' => '' 
		),
		446 => array (
				'term' => 'forbidden_groups',
				'definition' => 'Plus de Répertoires interdits',
				'context' => '' 
		),
		447 => array (
				'term' => 'forgot_my_pw',
				'definition' => 'Mot de passe oublié ?',
				'context' => '' 
		),
		448 => array (
				'term' => 'forgot_my_pw_email_sent',
				'definition' => 'Email envoyé',
				'context' => '' 
		),
		449 => array (
				'term' => 'forgot_my_pw_error_email_not_exist',
				'definition' => 'Cet email n\'existe pas !',
				'context' => '' 
		),
		450 => array (
				'term' => 'forgot_my_pw_text',
				'definition' => 'Votre mot de passe vous sera envoyé sur l\'email associé à votre compte.',
				'context' => '' 
		),
		451 => array (
				'term' => 'forgot_pw_email_altbody_1',
				'definition' => 'Bonjour, Vos identifiants de connexion à TeamPass sont :',
				'context' => '' 
		),
		452 => array (
				'term' => 'forgot_pw_email_body',
				'definition' => 'Bonjour,&lt;br /&gt;&lt;br /&gt;Votre nouveau mot de passe pour TeamPass est : ',
				'context' => '' 
		),
		453 => array (
				'term' => 'forgot_pw_email_body_1',
				'definition' => 'Bonjour, &lt;br /&gt;&lt;br /&gt;Vos identifiants de connexion à TeamPass sont :&lt;br /&gt;&lt;br /&gt;',
				'context' => '' 
		),
		454 => array (
				'term' => 'forgot_pw_email_subject',
				'definition' => 'TeamPass - Votre mot de passe',
				'context' => '' 
		),
		455 => array (
				'term' => 'forgot_pw_email_subject_confirm',
				'definition' => 'TeamPass - Votre mot de passe - étape 2',
				'context' => '' 
		),
		456 => array (
				'term' => 'functions',
				'definition' => 'Rôles',
				'context' => '' 
		),
		457 => array (
				'term' => 'function_alarm_no_group',
				'definition' => 'Cette Rôle est associée à aucun Répertoire!',
				'context' => '' 
		),
		458 => array (
				'term' => 'generate_pdf',
				'definition' => 'Générer le fichier PDF',
				'context' => '' 
		),
		459 => array (
				'term' => 'generation_options',
				'definition' => 'Options de génération',
				'context' => '' 
		),
		460 => array (
				'term' => 'gestionnaire',
				'definition' => 'Gestionnaire',
				'context' => '' 
		),
		461 => array (
				'term' => 'give_function_tip',
				'definition' => 'Ajouter un nouveau rôle',
				'context' => '' 
		),
		462 => array (
				'term' => 'give_function_title',
				'definition' => 'Ajouter une nouvelle Rôle',
				'context' => '' 
		),
		463 => array (
				'term' => 'give_new_email',
				'definition' => 'Merci de préciser le nouvel email',
				'context' => '' 
		),
		464 => array (
				'term' => 'give_new_login',
				'definition' => 'Merci de préciser le login',
				'context' => '' 
		),
		465 => array (
				'term' => 'give_new_pw',
				'definition' => 'Merci de préciser le nouveau mot de passe',
				'context' => '' 
		),
		466 => array (
				'term' => 'god',
				'definition' => 'Administrateur/DIEU',
				'context' => '' 
		),
		467 => array (
				'term' => 'group',
				'definition' => 'Répertoire',
				'context' => '' 
		),
		468 => array (
				'term' => 'group_parent',
				'definition' => 'Répertoire parent',
				'context' => '' 
		),
		469 => array (
				'term' => 'group_pw_duration',
				'definition' => 'Période de renouvellement',
				'context' => '' 
		),
		470 => array (
				'term' => 'group_pw_duration_tip',
				'definition' => 'En mois. 0 pour désactiver.',
				'context' => '' 
		),
		471 => array (
				'term' => 'group_select',
				'definition' => 'Choix du répertoire',
				'context' => '' 
		),
		472 => array (
				'term' => 'group_title',
				'definition' => 'Titre du répertoire',
				'context' => '' 
		),
		473 => array (
				'term' => 'history',
				'definition' => 'Historique',
				'context' => '' 
		),
		474 => array (
				'term' => 'home',
				'definition' => 'Accueil',
				'context' => '' 
		),
		475 => array (
				'term' => 'home_personal_menu',
				'definition' => 'Actions personnelles',
				'context' => '' 
		),
		476 => array (
				'term' => 'home_personal_saltkey',
				'definition' => 'Votre clef personnelle',
				'context' => '' 
		),
		477 => array (
				'term' => 'home_personal_saltkey_button',
				'definition' => 'Sauvegarder',
				'context' => '' 
		),
		478 => array (
				'term' => 'home_personal_saltkey_info',
				'definition' => 'Vous devez saisir votre clé personnel pour pouvoir accéder à vos éléments personnels.',
				'context' => '' 
		),
		479 => array (
				'term' => 'home_personal_saltkey_label',
				'definition' => 'Saisir votre clef personnelle',
				'context' => '' 
		),
		480 => array (
				'term' => 'importing_details',
				'definition' => 'Liste des d&eacute;tails',
				'context' => '' 
		),
		481 => array (
				'term' => 'importing_folders',
				'definition' => 'Importation des r&eacute;pertoires',
				'context' => '' 
		),
		482 => array (
				'term' => 'importing_items',
				'definition' => 'Importation des &eacute;l&eacute;ments',
				'context' => '' 
		),
		483 => array (
				'term' => 'import_button',
				'definition' => 'Importer',
				'context' => '' 
		),
		484 => array (
				'term' => 'import_csv_anyone_can_modify_in_role_txt',
				'definition' => 'Permettre la modification par n\'importe qui ayant le même rôle des éléments importés.',
				'context' => '' 
		),
		485 => array (
				'term' => 'import_csv_anyone_can_modify_txt',
				'definition' => 'Permettre la modification par n\'importe qui des éléments importés.',
				'context' => '' 
		),
		486 => array (
				'term' => 'import_csv_dialog_info',
				'definition' => 'Information : l\'importation nécessite un fichier CSV. Un fichier exporté depuis Keepass a le format requis. Si vous désirez importer des données exportées depuis un autre outil, merci de vous assurer que ce dernier a la structure suivante : `Titre`,`Login`,`Mot de passe`,`Site Web`,`Commentaires`.',
				'context' => '' 
		),
		487 => array (
				'term' => 'import_csv_menu_title',
				'definition' => 'Importer des éléments depuis un fichier CSV / XML KeePass',
				'context' => '' 
		),
		488 => array (
				'term' => 'import_error_no_file',
				'definition' => 'Vous devez saisir un fichier !',
				'context' => '' 
		),
		489 => array (
				'term' => 'import_error_no_read_possible',
				'definition' => 'Impossible de lire le fichier !',
				'context' => '' 
		),
		490 => array (
				'term' => 'import_error_no_read_possible_kp',
				'definition' => 'Lecture du fichier impossible !Il ne semble pas etre généré par KeePass.',
				'context' => '' 
		),
		491 => array (
				'term' => 'import_keepass_dialog_info',
				'definition' => 'Cette fonctionnalité d\'importation ne fonctionne qu\'avec un fichier XML généré depuis KeePass ! Notez que le script d\'importation n\'importera pas les répertoires et/ou éléments qui existent déjà au meme de l\'arbre.',
				'context' => '' 
		),
		492 => array (
				'term' => 'import_keepass_to_folder',
				'definition' => 'Choisir le répertoire de destination',
				'context' => '' 
		),
		493 => array (
				'term' => 'import_kp_finished',
				'definition' => 'Importation depuis KeePass est maintenant termin&eacute;e !&lt;br /&gt;Par d&eacute;faut, le niveau de complexit&eacute; des nouveaux r&eacute;pertoires a &eacute;t&eacute; d&eacute;fini &agrave; \'Moyen\'. Vous devriez peut-etre le changer en fonction de vos besoins..',
				'context' => '' 
		),
		494 => array (
				'term' => 'import_to_folder',
				'definition' => 'Cocher les &eacute;l&eacute;ments que vous voulez importer dans le r&eacute;pertoire :',
				'context' => '' 
		),
		495 => array (
				'term' => 'index_add_one_hour',
				'definition' => 'Ajouter une heure',
				'context' => '' 
		),
		496 => array (
				'term' => 'index_alarm',
				'definition' => 'ATTENTION !!!',
				'context' => '' 
		),
		497 => array (
				'term' => 'index_bas_pw',
				'definition' => 'Mauvais mot de passe pour ce compte !',
				'context' => '' 
		),
		498 => array (
				'term' => 'index_change_pw',
				'definition' => 'Change your password',
				'context' => '' 
		),
		499 => array (
				'term' => 'index_change_pw_button',
				'definition' => 'Changer',
				'context' => '' 
		),
		500 => array (
				'term' => 'index_change_pw_confirmation',
				'definition' => 'Confirmation',
				'context' => '' 
		),
		501 => array (
				'term' => 'index_expiration_in',
				'definition' => 'expiration de la session dans',
				'context' => '' 
		),
		502 => array (
				'term' => 'index_get_identified',
				'definition' => 'Merci de vous identifier',
				'context' => '' 
		),
		503 => array (
				'term' => 'index_identify_button',
				'definition' => 'Entrer',
				'context' => '' 
		),
		504 => array (
				'term' => 'index_identify_you',
				'definition' => 'Veuillez vous identifier',
				'context' => '' 
		),
		505 => array (
				'term' => 'index_last_pw_change',
				'definition' => 'Mot de passe changé la dernière fois le',
				'context' => '' 
		),
		506 => array (
				'term' => 'index_last_seen',
				'definition' => 'Dernière connexion, le',
				'context' => '' 
		),
		507 => array (
				'term' => 'index_login',
				'definition' => 'Compte',
				'context' => '' 
		),
		508 => array (
				'term' => 'index_maintenance_mode',
				'definition' => 'Mode Maintenance activé. Seuls les Administrateurs peuvent s\'identifier.',
				'context' => '' 
		),
		509 => array (
				'term' => 'index_maintenance_mode_admin',
				'definition' => 'Mode Maintenance activé. Les Utilisateurs ne peuvent pas se connecter à TeamPass.',
				'context' => '' 
		),
		510 => array (
				'term' => 'index_new_pw',
				'definition' => 'Nouveau mot de passe',
				'context' => '' 
		),
		511 => array (
				'term' => 'index_password',
				'definition' => 'Mot de passe',
				'context' => '' 
		),
		512 => array (
				'term' => 'index_pw_error_identical',
				'definition' => 'Les mots de passe doivent être identiques !',
				'context' => '' 
		),
		513 => array (
				'term' => 'index_pw_expiration',
				'definition' => 'Expiration du mot de passe actuel dans',
				'context' => '' 
		),
		514 => array (
				'term' => 'index_pw_level_txt',
				'definition' => 'Complexité',
				'context' => '' 
		),
		515 => array (
				'term' => 'index_refresh_page',
				'definition' => 'Rafraichir la page',
				'context' => '' 
		),
		516 => array (
				'term' => 'index_session_duration',
				'definition' => 'Durée de la session',
				'context' => '' 
		),
		517 => array (
				'term' => 'index_session_ending',
				'definition' => 'Votre session expire dans 1 minute.',
				'context' => '' 
		),
		518 => array (
				'term' => 'index_session_expired',
				'definition' => 'Votre session a expiré ou vous n\'etes plus correctement authentifié !',
				'context' => '' 
		),
		519 => array (
				'term' => 'index_welcome',
				'definition' => 'Bienvenu',
				'context' => '' 
		),
		520 => array (
				'term' => 'info',
				'definition' => 'Informations',
				'context' => '' 
		),
		521 => array (
				'term' => 'info_click_to_edit',
				'definition' => 'Cliquer sur une cellule pour en éditer le contenu',
				'context' => '' 
		),
		522 => array (
				'term' => 'is_admin',
				'definition' => 'Est Admin',
				'context' => '' 
		),
		523 => array (
				'term' => 'is_manager',
				'definition' => 'Est Gestionnaire',
				'context' => '' 
		),
		524 => array (
				'term' => 'is_read_only',
				'definition' => 'Lecture Seule',
				'context' => '' 
		),
		525 => array (
				'term' => 'items_browser_title',
				'definition' => 'Catégories',
				'context' => '' 
		),
		526 => array (
				'term' => 'item_copy_to_folder',
				'definition' => 'Sélectionner le répertoire de destination',
				'context' => '' 
		),
		527 => array (
				'term' => 'item_menu_add_elem',
				'definition' => 'Ajouter un élément',
				'context' => '' 
		),
		528 => array (
				'term' => 'item_menu_add_rep',
				'definition' => 'Ajouter un Répertoire',
				'context' => '' 
		),
		529 => array (
				'term' => 'item_menu_add_to_fav',
				'definition' => 'Ajouter aux Favoris',
				'context' => '' 
		),
		530 => array (
				'term' => 'item_menu_collab_disable',
				'definition' => 'Edition non autorisée',
				'context' => '' 
		),
		531 => array (
				'term' => 'item_menu_collab_enable',
				'definition' => 'Edition autorisée',
				'context' => '' 
		),
		532 => array (
				'term' => 'item_menu_copy_elem',
				'definition' => 'Copier l\'élément',
				'context' => '' 
		),
		533 => array (
				'term' => 'item_menu_copy_login',
				'definition' => 'Copier login',
				'context' => '' 
		),
		534 => array (
				'term' => 'item_menu_copy_pw',
				'definition' => 'Copier mot de passe',
				'context' => '' 
		),
		535 => array (
				'term' => 'item_menu_del_elem',
				'definition' => 'Supprimer un élément',
				'context' => '' 
		),
		536 => array (
				'term' => 'item_menu_del_from_fav',
				'definition' => 'Supprimer des Favoris',
				'context' => '' 
		),
		537 => array (
				'term' => 'item_menu_del_rep',
				'definition' => 'Supprimer un Répertoire',
				'context' => '' 
		),
		538 => array (
				'term' => 'item_menu_edi_elem',
				'definition' => 'Editer un élément',
				'context' => '' 
		),
		539 => array (
				'term' => 'item_menu_edi_rep',
				'definition' => 'Editer un Répertoire',
				'context' => '' 
		),
		540 => array (
				'term' => 'item_menu_find',
				'definition' => 'Recherche avancée',
				'context' => '' 
		),
		541 => array (
				'term' => 'item_menu_mask_pw',
				'definition' => 'Masquer mot de passe',
				'context' => '' 
		),
		542 => array (
				'term' => 'item_menu_refresh',
				'definition' => 'Rafraichir la page',
				'context' => '' 
		),
		543 => array (
				'term' => 'kbs',
				'definition' => 'KBs',
				'context' => '' 
		),
		544 => array (
				'term' => 'kb_menu',
				'definition' => 'Base de connaissance',
				'context' => '' 
		),
		545 => array (
				'term' => 'keepass_import_button_text',
				'definition' => 'Fichier XML',
				'context' => '' 
		),
		546 => array (
				'term' => 'label',
				'definition' => 'Intitulé',
				'context' => '' 
		),
		547 => array (
				'term' => 'last_items_icon_title',
				'definition' => 'Montrer/Cacher les éléments consultés',
				'context' => '' 
		),
		548 => array (
				'term' => 'last_items_title',
				'definition' => 'Derniers éléments vus',
				'context' => '' 
		),
		549 => array (
				'term' => 'ldap_extension_not_loaded',
				'definition' => 'L\'extension LDAP n\'est pas activée sur le serveur.',
				'context' => '' 
		),
		550 => array (
				'term' => 'level',
				'definition' => 'Niveau',
				'context' => '' 
		),
		551 => array (
				'term' => 'link_copy',
				'definition' => 'Copier le lien',
				'context' => '' 
		),
		552 => array (
				'term' => 'link_is_copied',
				'definition' => 'Le lien vers cet objet a été copié en cache.',
				'context' => '' 
		),
		553 => array (
				'term' => 'login',
				'definition' => 'Login (si nécessaire)',
				'context' => '' 
		),
		554 => array (
				'term' => 'login_attempts_on',
				'definition' => ' tentatives sur ',
				'context' => '' 
		),
		555 => array (
				'term' => 'login_copied_clipboard',
				'definition' => 'Login copié dans le presse-papier',
				'context' => '' 
		),
		556 => array (
				'term' => 'login_copy',
				'definition' => 'Copier le compte de connexion dans le Presse-Papier',
				'context' => '' 
		),
		557 => array (
				'term' => 'logs',
				'definition' => 'Logs',
				'context' => '' 
		),
		558 => array (
				'term' => 'logs_1',
				'definition' => 'Générer le log de renouvellement des mots de passe pour la journée du',
				'context' => '' 
		),
		559 => array (
				'term' => 'logs_passwords',
				'definition' => 'Générer le log des mots de passe',
				'context' => '' 
		),
		560 => array (
				'term' => 'maj',
				'definition' => 'Majuscules',
				'context' => '' 
		),
		561 => array (
				'term' => 'mask_pw',
				'definition' => 'Masquer/Afficher le mot de passe',
				'context' => '' 
		),
		562 => array (
				'term' => 'max_last_items',
				'definition' => 'Nombre maximum d\'éléments dernièrement vus (par défaut 10)',
				'context' => '' 
		),
		563 => array (
				'term' => 'menu_title_new_personal_saltkey',
				'definition' => 'Changer votre Clé Personnelle',
				'context' => '' 
		),
		564 => array (
				'term' => 'minutes',
				'definition' => 'minutes',
				'context' => '' 
		),
		565 => array (
				'term' => 'modify_button',
				'definition' => 'Modifier',
				'context' => '' 
		),
		566 => array (
				'term' => 'my_favourites',
				'definition' => 'Mes Favoris',
				'context' => '' 
		),
		567 => array (
				'term' => 'name',
				'definition' => 'Nom',
				'context' => '' 
		),
		568 => array (
				'term' => 'nb_false_login_attempts',
				'definition' => 'Nombre de tentatives de connexion erronées avant blocage (0 pour désactiver)',
				'context' => '' 
		),
		569 => array (
				'term' => 'nb_folders',
				'definition' => 'Nombre de r&eacute;pertoires',
				'context' => '' 
		),
		570 => array (
				'term' => 'nb_items',
				'definition' => 'Nombre d\'&eacute;l&eacute;ments',
				'context' => '' 
		),
		571 => array (
				'term' => 'nb_items_by_page',
				'definition' => 'Nombre par page',
				'context' => '' 
		),
		572 => array (
				'term' => 'new_label',
				'definition' => 'Nouvel intitulé',
				'context' => '' 
		),
		573 => array (
				'term' => 'new_role_title',
				'definition' => 'Nouvel intitulé du role',
				'context' => '' 
		),
		574 => array (
				'term' => 'new_saltkey',
				'definition' => 'Nouvelle Clé Personnelle',
				'context' => '' 
		),
		575 => array (
				'term' => 'new_saltkey_warning',
				'definition' => 'Merci de vous assurer d\'utiliser la Clé Personnelle originale. Sans quoi le nouvel encryptage sera corrompu ! Avant tout changement, merci de tester votre Clé Personnelle.',
				'context' => '' 
		),
		576 => array (
				'term' => 'new_user_title',
				'definition' => 'Ajouter un nouvel utilisateur',
				'context' => '' 
		),
		577 => array (
				'term' => 'no',
				'definition' => 'Non',
				'context' => '' 
		),
		578 => array (
				'term' => 'nom',
				'definition' => 'Nom',
				'context' => '' 
		),
		579 => array (
				'term' => 'none',
				'definition' => 'Aucun',
				'context' => '' 
		),
		580 => array (
				'term' => 'none_selected_text',
				'definition' => 'Aucun',
				'context' => '' 
		),
		581 => array (
				'term' => 'not_allowed_to_see_pw',
				'definition' => 'Vous n\\\'avez pas le droit de consulter ce mot de passe',
				'context' => '' 
		),
		582 => array (
				'term' => 'not_allowed_to_see_pw_is_expired',
				'definition' => 'Cet élément a expiré !',
				'context' => '' 
		),
		583 => array (
				'term' => 'not_defined',
				'definition' => 'Non défini',
				'context' => '' 
		),
		584 => array (
				'term' => 'no_last_items',
				'definition' => 'Aucun',
				'context' => '' 
		),
		585 => array (
				'term' => 'no_restriction',
				'definition' => 'Aucune restriction',
				'context' => '' 
		),
		586 => array (
				'term' => 'numbers',
				'definition' => 'Numériques',
				'context' => '' 
		),
		587 => array (
				'term' => 'number_of_used_pw',
				'definition' => 'Nombre de mots de passe différents saisis avant de pouvoir en réuntiliser un.',
				'context' => '' 
		),
		588 => array (
				'term' => 'ok',
				'definition' => 'OK',
				'context' => '' 
		),
		589 => array (
				'term' => 'pages',
				'definition' => 'Pages',
				'context' => '' 
		),
		590 => array (
				'term' => 'pdf_del_date',
				'definition' => 'PDF généré le',
				'context' => '' 
		),
		591 => array (
				'term' => 'pdf_del_title',
				'definition' => 'Suivi du renouvellement des mots de passe',
				'context' => '' 
		),
		592 => array (
				'term' => 'pdf_download',
				'definition' => 'Télécharger le fichier',
				'context' => '' 
		),
		593 => array (
				'term' => 'personal_folder',
				'definition' => 'Répertoire personnel',
				'context' => '' 
		),
		594 => array (
				'term' => 'personal_saltkey_change_button',
				'definition' => 'Changer !',
				'context' => '' 
		),
		595 => array (
				'term' => 'personal_salt_key',
				'definition' => 'Votre clé personnel',
				'context' => '' 
		),
		596 => array (
				'term' => 'personal_salt_key_empty',
				'definition' => 'Clé non saisie !',
				'context' => '' 
		),
		597 => array (
				'term' => 'personal_salt_key_info',
				'definition' => 'Cette clé sera utilisée pour crypter et décrypter votre mot de passe.&lt;br /&gt;Elle n\'est pas sauvée en base de données et elle est seule connue de vous.&lt;br /&gt;Ne la perdait surtout pas !',
				'context' => '' 
		),
		598 => array (
				'term' => 'please_update',
				'definition' => 'Pensez à effectuer la mise à jour !',
				'context' => '' 
		),
		599 => array (
				'term' => 'print',
				'definition' => 'Imprimer',
				'context' => '' 
		),
		600 => array (
				'term' => 'print_out_menu_title',
				'definition' => 'Imprimer une liste de vos éléments',
				'context' => '' 
		),
		601 => array (
				'term' => 'print_out_pdf_title',
				'definition' => 'TeamPass - Liste des éléments exportés',
				'context' => '' 
		),
		602 => array (
				'term' => 'print_out_warning',
				'definition' => 'En imprimant ces éléments, vous prenez l\'entière responsabilité de les  rendre accessibles. Attention tous les mots de passe seront visibles !',
				'context' => '' 
		),
		603 => array (
				'term' => 'pw',
				'definition' => 'Mots de passe',
				'context' => '' 
		),
		604 => array (
				'term' => 'pw_change',
				'definition' => 'Changer le mot de passe',
				'context' => '' 
		),
		605 => array (
				'term' => 'pw_changed',
				'definition' => 'Mot de passe changé !',
				'context' => '' 
		),
		606 => array (
				'term' => 'pw_copied_clipboard',
				'definition' => 'Copié dans le Presse-Papier',
				'context' => '' 
		),
		607 => array (
				'term' => 'pw_copy_clipboard',
				'definition' => 'Copier le mot de passe dans le Presse-Papier',
				'context' => '' 
		),
		608 => array (
				'term' => 'pw_generate',
				'definition' => 'Générer',
				'context' => '' 
		),
		609 => array (
				'term' => 'pw_is_expired_-_update_it',
				'definition' => 'Cet élément a expiré ! Vous devez changer son mot de passe.',
				'context' => '' 
		),
		610 => array (
				'term' => 'pw_life_duration',
				'definition' => 'Durée avant expiration d\'un mot de passe utilisateur en jours (0 pour désactiver)',
				'context' => '' 
		),
		611 => array (
				'term' => 'pw_recovery_asked',
				'definition' => 'Vous avez réalisé une demande de réinitialisation de mot de passe',
				'context' => '' 
		),
		612 => array (
				'term' => 'pw_recovery_button',
				'definition' => 'Envoyer moi mon nouveau mot de passe',
				'context' => '' 
		),
		613 => array (
				'term' => 'pw_recovery_info',
				'definition' => 'En cliquant sur le bouton ci-dessous, vous allez recevoir votre nouveau mot de passe par email.',
				'context' => '' 
		),
		614 => array (
				'term' => 'pw_used',
				'definition' => 'Ce mot de passe a déjà été utilisé !',
				'context' => '' 
		),
		615 => array (
				'term' => 'readme_open',
				'definition' => 'Ouvrir le fichier ReadMe complet',
				'context' => '' 
		),
		616 => array (
				'term' => 'read_only_account',
				'definition' => 'Lecture Seule',
				'context' => '' 
		),
		617 => array (
				'term' => 'refresh_matrix',
				'definition' => 'Rafraichir la Matrice',
				'context' => '' 
		),
		618 => array (
				'term' => 'renewal_menu',
				'definition' => 'Suivi du renouvellement',
				'context' => '' 
		),
		619 => array (
				'term' => 'renewal_needed_pdf_title',
				'definition' => 'Liste des éléments devant etre renouvelés',
				'context' => '' 
		),
		620 => array (
				'term' => 'renewal_selection_text',
				'definition' => 'Liste des éléments prochainement expirés :',
				'context' => '' 
		),
		621 => array (
				'term' => 'restore',
				'definition' => 'Restore',
				'context' => '' 
		),
		622 => array (
				'term' => 'restricted_to',
				'definition' => 'Restreint à',
				'context' => '' 
		),
		623 => array (
				'term' => 'restricted_to_roles',
				'definition' => 'Autoriser la restrictions des éléments aux Utilisateurs et aux Rôles',
				'context' => '' 
		),
		624 => array (
				'term' => 'rights_matrix',
				'definition' => 'Matrice des droits',
				'context' => '' 
		),
		625 => array (
				'term' => 'roles',
				'definition' => 'Rôles',
				'context' => '' 
		),
		626 => array (
				'term' => 'role_cannot_modify_all_seen_items',
				'definition' => 'Ne pas permettre à ce rôle de modifier les éléments accessibles (paramétrage normal)',
				'context' => '' 
		),
		627 => array (
				'term' => 'role_can_modify_all_seen_items',
				'definition' => 'Permettre à ce rôle de modifier tous les éléments accessibles (paramétrage non sécuritaire)',
				'context' => '' 
		),
		628 => array (
				'term' => 'root',
				'definition' => 'Racine',
				'context' => '' 
		),
		629 => array (
				'term' => 'save_button',
				'definition' => 'Enregistrer',
				'context' => '' 
		),
		630 => array (
				'term' => 'secure',
				'definition' => 'Sécurisé',
				'context' => '' 
		),
		631 => array (
				'term' => 'see_logs',
				'definition' => 'Voir les logs',
				'context' => '' 
		),
		632 => array (
				'term' => 'select_folders',
				'definition' => 'Sélectionner les répertoires',
				'context' => '' 
		),
		633 => array (
				'term' => 'select_language',
				'definition' => 'Sélectionner votre langue',
				'context' => '' 
		),
		634 => array (
				'term' => 'send',
				'definition' => 'Envoyer',
				'context' => '' 
		),
		635 => array (
				'term' => 'settings_anyone_can_modify',
				'definition' => 'Activer l\'option permettant que chaque élément soit modifiable',
				'context' => '' 
		),
		636 => array (
				'term' => 'settings_anyone_can_modify_tip',
				'definition' => '&lt;span style=\'font-size:11px;max-width:300px;\'&gt;Quan activé, cela rajoutera une option dans la fiche de création et édition de l\'élément qui permettra à l\'auteur d\'autoriser la modification de l\'élément par tout utilisateur.&lt;/span&gt;',
				'context' => '' 
		),
		637 => array (
				'term' => 'settings_default_language',
				'definition' => 'Définir la langue par défaut',
				'context' => '' 
		),
		638 => array (
				'term' => 'settings_kb',
				'definition' => 'Activer la Base de Connaissance (béta)',
				'context' => '' 
		),
		639 => array (
				'term' => 'settings_kb_tip',
				'definition' => '&lt;span style=\'font-size:11px;max-width:300px;\'&gt;Quand activé, cela ajoutera la possibilité de créer votre propre Base de Connaissance au travers d\'une page dédiée.&lt;/span&gt;',
				'context' => '' 
		),
		640 => array (
				'term' => 'settings_ldap_domain',
				'definition' => 'Suffix LDAP de votre domaine',
				'context' => '' 
		),
		641 => array (
				'term' => 'settings_ldap_domain_controler',
				'definition' => 'Tableau des contrôleurs de votre domaine LDAP',
				'context' => '' 
		),
		642 => array (
				'term' => 'settings_ldap_domain_controler_tip',
				'definition' => '&lt;span style=\'font-size:11px;max-width:300px;\'&gt;Vous pouvez spécifier plusieurs controlleurs si vous désirez que la classe balance les requetes LDAP sur plusieurs serveurs.&lt;br /&gt;Attention, vous devez délimiter les domaines par une virgule ( , )!&lt;br /&gt;Par exemple : domaine_1,domaine_2,domaine_3&lt;/span&gt;',
				'context' => '' 
		),
		643 => array (
				'term' => 'settings_ldap_domain_dn',
				'definition' => 'Base dn de votre domaine LDAP',
				'context' => '' 
		),
		644 => array (
				'term' => 'settings_ldap_mode',
				'definition' => 'Activer l\'identification LDAP des utilisateurs',
				'context' => '' 
		),
		645 => array (
				'term' => 'settings_ldap_mode_tip',
				'definition' => 'Enable only if you have an LDAP server and if you want to use it to authentify TeamPass users through it.',
				'context' => '' 
		),
		646 => array (
				'term' => 'settings_ldap_ssl',
				'definition' => 'Connexion SSL de votre LDAP (LDAPS)',
				'context' => '' 
		),
		647 => array (
				'term' => 'settings_ldap_tls',
				'definition' => 'Connexion TLS de votre LDAP',
				'context' => '' 
		),
		648 => array (
				'term' => 'settings_log_accessed',
				'definition' => 'Activer l\'enregistrement (log) des accès aux éléments',
				'context' => '' 
		),
		649 => array (
				'term' => 'settings_log_connections',
				'definition' => 'Activer la sauvegarde en base de données des connextions utilisateurs.',
				'context' => '' 
		),
		650 => array (
				'term' => 'settings_maintenance_mode',
				'definition' => 'Passer TeamPass en mode Maintenance',
				'context' => '' 
		),
		651 => array (
				'term' => 'settings_maintenance_mode_tip',
				'definition' => 'Ce statut interdira toute connexion de la part des utilisateurs sauf pour les administrateurs.',
				'context' => '' 
		),
		652 => array (
				'term' => 'settings_manager_edit',
				'definition' => 'Les Gestionnaires peuvent éditer et supprimer les éléments auxquels ils ont accès.',
				'context' => '' 
		),
		653 => array (
				'term' => 'settings_printing',
				'definition' => 'Autoriser l\\\'impression PDF des éléments',
				'context' => '' 
		),
		654 => array (
				'term' => 'settings_printing_tip',
				'definition' => 'Quand activé, un bouton sera rajouté sur la page d\\\'accueil permettant à l\\\'utilisateur d\\\'imprimer un listing PDF des éléments auxquels il a accès. Attention, cette liste laisse apparaitre les mots de passe sans cryptage.',
				'context' => '' 
		),
		655 => array (
				'term' => 'settings_restricted_to',
				'definition' => 'Restreindre l\'accès aux Eléments',
				'context' => '' 
		),
		656 => array (
				'term' => 'settings_richtext',
				'definition' => 'Activer le mode d\'édition poussée du champ Description',
				'context' => '' 
		),
		657 => array (
				'term' => 'settings_richtext_tip',
				'definition' => '&lt;span style=\'font-size:11px;max-width:300px;\'&gt;Cela activera l\'utilisation de BBC codes dans le champ Description.&lt;/span&gt;',
				'context' => '' 
		),
		658 => array (
				'term' => 'settings_send_stats',
				'definition' => 'Envoyer des statistiques mensuelles',
				'context' => '' 
		),
		659 => array (
				'term' => 'settings_send_stats_tip',
				'definition' => 'Ces statistiques sont anonymes !&lt;br /&gt;&lt;span style=\'font-size:10px;max-width:300px;\'&gt;Aucune IP ou information privée n\'est collectée. Seuls les informations suivantes sont récupérées : Nb objets, Nb répertoires, Nb utilisateurs, la version de TeamPass, option Répertoires Persos, option LDAP.&lt;br /&gt;Un grand merci pour toute activation de ces statistiques qui nous permettent une meilleur compréhension de votre utilisation de TeamPass.&lt;/span&gt;',
				'context' => '' 
		),
		660 => array (
				'term' => 'settings_show_description',
				'definition' => 'Afficher la Description dans la liste des éléments',
				'context' => '' 
		),
		661 => array (
				'term' => 'show',
				'definition' => 'Afficher',
				'context' => '' 
		),
		662 => array (
				'term' => 'show_help',
				'definition' => 'Afficher l\'Aide',
				'context' => '' 
		),
		663 => array (
				'term' => 'show_last_items',
				'definition' => 'Montrer le block \'Récents\' sur la page d\'accueil',
				'context' => '' 
		),
		664 => array (
				'term' => 'size',
				'definition' => 'Taille',
				'context' => '' 
		),
		665 => array (
				'term' => 'start_upload',
				'definition' => 'Lancer le chargement des nouveaux fichier',
				'context' => '' 
		),
		666 => array (
				'term' => 'sub_group_of',
				'definition' => 'Sous répertoire de',
				'context' => '' 
		),
		667 => array (
				'term' => 'support_page',
				'definition' => 'Pour toute aide, merci d\'utiliser le &lt;a href=\'https://github.com/nilsteampassnet/TeamPass/issues\' target=\'_blank\'&gt;&lt;u&gt;Forum&lt;/u&gt;&lt;/a&gt;.',
				'context' => '' 
		),
		668 => array (
				'term' => 'symbols',
				'definition' => 'Symboles',
				'context' => '' 
		),
		669 => array (
				'term' => 'tags',
				'definition' => 'Mots clé',
				'context' => '' 
		),
		670 => array (
				'term' => 'thku',
				'definition' => 'Merci d\'utiliser TeamPass !',
				'context' => '' 
		),
		671 => array (
				'term' => 'timezone_selection',
				'definition' => 'Choix du fuseau horaire',
				'context' => '' 
		),
		672 => array (
				'term' => 'time_format',
				'definition' => 'Format de l\'heure',
				'context' => '' 
		),
		673 => array (
				'term' => 'uncheck_all_text',
				'definition' => 'Décocher tous',
				'context' => '' 
		),
		674 => array (
				'term' => 'unlock_user',
				'definition' => 'Compte bloqué. Voulez-vous le débloquer ?',
				'context' => '' 
		),
		675 => array (
				'term' => 'update_needed_mode_admin',
				'definition' => 'Il est recommandé de mettre à jour votre installation de TeamPass. Cliquer &lt;a href=\'install/upgrade.php\'&gt;ICI&lt;/a&gt;',
				'context' => '' 
		),
		676 => array (
				'term' => 'uploaded_files',
				'definition' => 'Fichiers existants',
				'context' => '' 
		),
		677 => array (
				'term' => 'upload_button_text',
				'definition' => 'Sélectionner',
				'context' => '' 
		),
		678 => array (
				'term' => 'upload_files',
				'definition' => 'Charger de nouveaux fichiers',
				'context' => '' 
		),
		679 => array (
				'term' => 'url',
				'definition' => 'Url',
				'context' => '' 
		),
		680 => array (
				'term' => 'url_copied',
				'definition' => 'Url copiée !',
				'context' => '' 
		),
		681 => array (
				'term' => 'used_pw',
				'definition' => 'Mot de passe utilisé',
				'context' => '' 
		),
		682 => array (
				'term' => 'user',
				'definition' => 'Utilisateur',
				'context' => '' 
		),
		683 => array (
				'term' => 'users',
				'definition' => 'Utilisateurs',
				'context' => '' 
		),
		684 => array (
				'term' => 'users_online',
				'definition' => 'utilisateurs en ligne',
				'context' => '' 
		),
		685 => array (
				'term' => 'user_action',
				'definition' => 'Action sur un utilisateur',
				'context' => '' 
		),
		686 => array (
				'term' => 'user_alarm_no_function',
				'definition' => 'Cet utilisateur n\'a aucune Rôle associée !',
				'context' => '' 
		),
		687 => array (
				'term' => 'user_del',
				'definition' => 'Supprimer le compte',
				'context' => '' 
		),
		688 => array (
				'term' => 'user_lock',
				'definition' => 'Verrouiller',
				'context' => '' 
		),
		689 => array (
				'term' => 'version',
				'definition' => 'Version actuelle',
				'context' => '' 
		),
		690 => array (
				'term' => 'views_confirm_items_deletion',
				'definition' => 'Merci de confirmer la suppression des éléments sélectionnés ?',
				'context' => '' 
		),
		691 => array (
				'term' => 'views_confirm_restoration',
				'definition' => 'Merci de confirmer la restauration de cet élément',
				'context' => '' 
		),
		692 => array (
				'term' => 'visibility',
				'definition' => 'Visibilité',
				'context' => '' 
		),
		693 => array (
				'term' => 'warning_screen_height',
				'definition' => 'ATTENTION : la hauteur de la page n\'est pas suffisante pour affichier les éléments !',
				'context' => '' 
		),
		694 => array (
				'term' => 'yes',
				'definition' => 'Oui',
				'context' => '' 
		),
		695 => array (
				'term' => 'your_version',
				'definition' => 'Votre version',
				'context' => '' 
		),
		696 => array (
				'term' => 'disconnect_all_users_sure',
				'definition' => 'Vous avez décidé de déconnecter tous les Utilisateurs. Vous confirmez ?',
				'context' => '' 
		),
		697 => array (
				'term' => 'Test the Email configuration',
				'definition' => 'Ce test doit envoyer un e-mail à l\'adresse de l\'expéditeur. Si vous ne le recevez pas, vérifiez vos informations.',
				'context' => '' 
		),
		698 => array (
				'term' => 'url_copied_clipboard',
				'definition' => 'URL copiée dans le presse-papier',
				'context' => '' 
		),
		699 => array (
				'term' => 'url_copy',
				'definition' => 'Copier l\'URL dans le presse-papier',
				'context' => '' 
		),
		700 => array (
				'term' => 'one_time_item_view',
				'definition' => 'Lien vers Vue Unique',
				'context' => '' 
		),
		701 => array (
				'term' => 'one_time_view_item_url_box',
				'definition' => 'Partager l\'URL de Vue Unique avec une personne de confiance<br><br>#URL#<br><br>Ce lien ne sera visible qu\'une seule fois jusqu\'au #DAY#',
				'context' => '' 
		),
		702 => array (
				'term' => 'admin_api',
				'definition' => 'API',
				'context' => '' 
		),
		703 => array (
				'term' => 'settings_api',
				'definition' => 'Autoriser l\'accès aux objets de Teampass via l\'API',
				'context' => '' 
		),
		704 => array (
				'term' => 'settings_api_tip',
				'definition' => 'L\'accès via API permet d\'accéder aux objets depuis une tierce application au format JSON.',
				'context' => '' 
		),
		705 => array (
				'term' => 'settings_api_keys_list',
				'definition' => 'Liste des clés',
				'context' => '' 
		),
		706 => array (
				'term' => 'settings_api_keys_list_tip',
				'definition' => 'Ce sont les clés d\'accès autorisées. Sans une clé valide, l\'accès n\'est pas possible. Vous devez partager ces clés avec précaution.',
				'context' => '' 
		),
		707 => array (
				'term' => 'settings_api_generate_key',
				'definition' => 'Générer une clé',
				'context' => '' 
		),
		708 => array (
				'term' => 'settings_api_delete_key',
				'definition' => 'Supprimer la clé',
				'context' => '' 
		),
		709 => array (
				'term' => 'settings_api_add_key',
				'definition' => 'ajouter une clé',
				'context' => '' 
		),
		710 => array (
				'term' => 'settings_api_key',
				'definition' => 'Clé',
				'context' => '' 
		),
		711 => array (
				'term' => 'settings_api_key_label',
				'definition' => 'Intitulé',
				'context' => '' 
		),
		712 => array (
				'term' => 'settings_api_ip_whitelist',
				'definition' => 'Liste des IP autorisées',
				'context' => '' 
		),
		713 => array (
				'term' => 'settings_api_ip_whitelist_tip',
				'definition' => 'Si aucune IP n\'est listée alors toute IP est autorisée.',
				'context' => '' 
		),
		714 => array (
				'term' => 'settings_api_add_ip',
				'definition' => 'Ajouter une nouvelle IP',
				'context' => '' 
		),
		715 => array (
				'term' => 'settings_api_db_intro',
				'definition' => 'Saisir un intitulé pour cette nouvelle clé (non obligatoire mais recommandé)',
				'context' => '' 
		),
		716 => array (
				'term' => 'error_too_long',
				'definition' => 'Erreur - Chaine trop longue !',
				'context' => '' 
		),
		717 => array (
				'term' => 'settings_api_ip',
				'definition' => 'IP',
				'context' => '' 
		),
		718 => array (
				'term' => 'settings_api_db_intro_ip',
				'definition' => 'Saisir un intitulé pour cette nouvelle IP',
				'context' => '' 
		),
		719 => array (
				'term' => 'settings_api_world_open',
				'definition' => 'Aucune IP de définie. L\'API est donc ouverte depuis n\'importe quel ordinateur (peut être dangeureux).',
				'context' => '' 
		),
		720 => array (
				'term' => 'subfolder_rights_as_parent',
				'definition' => 'Tout nouveau sous-répertoire hérite des droits du répertoire parent',
				'context' => '' 
		),
		721 => array (
				'term' => 'subfolder_rights_as_parent_tip',
				'definition' => 'Par défaut, chaque nouveau sous-répertoire hérite des droits associés aux rôles du créateur. En activant cette option, tout nouveau sous-répertoire hérite des droits du répertoire parent.',
				'context' => '' 
		),
		722 => array (
				'term' => 'show_only_accessible_folders_tip',
				'definition' => 'Par défaut, un utilisateur voit l\'arbre des répertoires dans son ensemble ce qui inclut les répertoires auxquels il n\'a pas accès. Il est possible de simplifier cette vue en supprimant ces répertoires auxquels il n\'a pas accès de l\'affichage de l\'arbe.',
				'context' => '' 
		),
		723 => array (
				'term' => 'show_only_accessible_folders',
				'definition' => 'Rendre l\'affichage de l\'arbe des répertoires plus lisible.',
				'context' => '' 
		),
		724 => array (
				'term' => 'suggestion',
				'definition' => 'Suggestion d\'Objets',
				'context' => '' 
		),
		725 => array (
				'term' => 'suggestion_add',
				'definition' => 'Ajouter une nouvelle suggestion',
				'context' => '' 
		),
		726 => array (
				'term' => 'comment',
				'definition' => 'Commentaire',
				'context' => '' 
		),
		727 => array (
				'term' => 'suggestion_error_duplicate',
				'definition' => 'Une suggestion similaire existe !',
				'context' => '' 
		),
		728 => array (
				'term' => 'suggestion_delete_confirm',
				'definition' => 'Merci de confirmer la suppression de la Suggestion',
				'context' => '' 
		),
		729 => array (
				'term' => 'suggestion_validate_confirm',
				'definition' => 'Merci de confirmer la validation de la Suggestion',
				'context' => '' 
		),
		730 => array (
				'term' => 'suggestion_validate',
				'definition' => 'Vous avez décidé de valider cette Suggestion pour l\'ajouter à la liste des Objets ... merci de confirmer.',
				'context' => '' 
		),
		731 => array (
				'term' => 'suggestion_error_cannot_add',
				'definition' => 'ERREUR - La Suggestion n\'a pas pu être ajoutée !',
				'context' => '' 
		),
		732 => array (
				'term' => 'suggestion_is_duplicate',
				'definition' => 'ATTENTION : cette suggestion a un Objet similaire (possèdant un intitulé identique dans un répertoire identique). Si vous cliquez le bouton AJOUTER, alors cette Objet sera mis à jour avec les données de cette Suggestion.',
				'context' => '' 
		),
		733 => array (
				'term' => 'suggestion_menu',
				'definition' => 'Suggestions',
				'context' => '' 
		),
		734 => array (
				'term' => 'settings_suggestion',
				'definition' => 'Autoriser le système de Suggestion pour les utilisateurs en lecture seule',
				'context' => '' 
		),
		735 => array (
				'term' => 'settings_suggestion_tip',
				'definition' => 'Le système de Suggestions permet aux utilisateurs en lecture seule de pouvoir proposer de nouveaux Objets ou d\'en demander la modification. Les Suggestions sont validées par les Administrateurs et les Gestionnaires.',
				'context' => '' 
		),
		736 => array (
				'term' => 'imported_via_api',
				'definition' => 'API',
				'context' => '' 
		),
		737 => array (
				'term' => 'settings_ldap_bind_dn',
				'definition' => 'Ldap Bind Dn',
				'context' => '' 
		),
		738 => array (
				'term' => 'settings_ldap_bind_passwd',
				'definition' => 'Ldap Bind Mot de Passe',
				'context' => '' 
		),
		739 => array (
				'term' => 'settings_ldap_search_base',
				'definition' => 'Ldap Base de Recherche',
				'context' => '' 
		),
		740 => array (
				'term' => 'settings_ldap_bind_dn_tip',
				'definition' => 'Un Bind dn qui attache et recherche les utilisateurs de l\'arbre',
				'context' => '' 
		),
		741 => array (
				'term' => 'settings_ldap_bind_passwd_tip',
				'definition' => 'Mot de passe pour le bind dn qui attache et recherche les utilisateurs de l\'arbre',
				'context' => '' 
		),
		742 => array (
				'term' => 'settings_ldap_search_base_tip',
				'definition' => 'Recherche le root dn pour les recherches dans l\'arbre',
				'context' => '' 
		),
		743 => array (
				'term' => 'old_saltkey',
				'definition' => 'Ancienne clé de salage',
				'context' => '' 
		),
		744 => array (
				'term' => 'define_old_saltkey',
				'definition' => 'Je veux définir l\'ancienne clé de salage à utiliser (optionnel)',
				'context' => '' 
		),
		745 => array (
				'term' => 'admin_email_server_url_tip',
				'definition' => 'Personnaliser l\'URL utilisée par les liens dans les emais si vous ne voulez pas celui par défaut',
				'context' => '' 
		),
		746 => array (
				'term' => 'admin_email_server_url',
				'definition' => 'URL serveur pour les liens dans les emails',
				'context' => '' 
		),
		747 => array (
				'term' => 'generated_pw',
				'definition' => 'Generated password',
				'context' => '' 
		),
		748 => array (
				'term' => 'enable_email_notification_on_user_pw_change',
				'definition' => 'Send an email to User when his password has been changed',
				'context' => '' 
		) 
);
?>