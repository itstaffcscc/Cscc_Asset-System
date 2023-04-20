<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory Domäne',
    'ad_domain_help'			=> 'Meistens dieselbe wie die E-Mail Domäne.',
    'ad_append_domain_label'    => 'Domänenname anhängen',
    'ad_append_domain'          => 'Domänenname an das Feld Benutzername anhängen',
    'ad_append_domain_help'     => 'Benutzer muss nicht "username@domain.local" eingeben, "username" ist ausreichend.',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'Wenn Sie eine Kopie der Rücknahme- / Herausgabe-E-Mails, die an Benutzer gehen auch an zusätzliche E-Mail-Empfänger versenden möchten, geben Sie sie hier ein. Ansonsten lassen Sie dieses Feld leer.',
    'is_ad'				        => 'Dies ist ein Active Directory Server',
    'alerts'                	=> 'Alarme',
    'alert_title'               => 'Benachrichtigungseinstellungen ändern',
    'alert_email'				=> 'Alarme senden an',
    'alert_email_help'    => 'E-Mail-Adressen oder Verteilerlisten an die Warnungen gesendet werden sollen, durch Komma getrennt',
    'alerts_enabled'			=> 'E-Mail-Benachrichtigungen aktiviert',
    'alert_interval'			=> 'Ablauf Alarmschwelle (in Tagen)',
    'alert_inv_threshold'		=> 'Inventar Alarmschwelle',
    'allow_user_skin'           => 'Benutzerdesign erlauben',
    'allow_user_skin_help_text' => 'Wenn Sie dieses Kästchen aktivieren, kann ein Benutzer das Design mit einem anderen überschreiben.',
    'asset_ids'					=> 'Asset IDs',
    'audit_interval'            => 'Auditintervall',
    'audit_interval_help'       => 'Wenn Sie verpflichtet sind, Ihre Assets regelmäßig physisch zu überprüfen, geben Sie das Intervall in Monaten an. Wenn Sie diesen Wert aktualisieren, werden alle "nächsten Audittermine" für Assets mit einem anstehenden Prüfungsdatum aktualisiert.',
    'audit_warning_days'        => 'Audit-Warnschwelle',
    'audit_warning_days_help'   => 'Wie viele Tage im Voraus sollten wir Sie warnen, wenn Vermögenswerte zur Prüfung fällig werden?',
    'auto_increment_assets'		=> 'Erzeugen von fortlaufenden Asset Tags',
    'auto_increment_prefix'		=> 'Präfix (optional)',
    'auto_incrementing_help'    => 'Aktiviere zuerst fortlaufende Asset Tags um dies zu setzen',
    'backups'					=> 'Sicherungen',
    'backups_help'              => 'Backups erstellen, herunterladen und wiederherstellen ',
    'backups_restoring'         => 'Aus Backup wiederherstellen',
    'backups_upload'            => 'Backup hochladen',
    'backups_path'              => 'Sicherungen auf dem Server werden in <code>:path</code> gespeichert',
    'backups_restore_warning'   => 'Wählen Sie die Wiederherstellung <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> um ein Backup wieder herzustellen. (Funktioniert derzeit nicht mit S3 Datenspeicher oder Docker)<br><br>Die <strong>gesamte :app_name Datebank und alle Uploads werden mit den Inhalten des Backups überschrieben</strong>.  ',
    'backups_logged_out'         => 'Alle vorhandenen Benutzer, auch Sie, werden abgemeldet, sobald Ihre Wiederherstellung abgeschlossen ist.',
    'backups_large'             => 'Sehr große Sicherungen können beim Wiederherstellungsversuch ausfallen (Time-Out) und müssen eventuell über die Kommandozeile ausgeführt werden. ',
    'barcode_settings'			=> 'Barcode Einstellungen',
    'confirm_purge'			    => 'Bereinigung bestätigen',
    'confirm_purge_help'		=> 'Geben Sie den Text "DELETE" in das Feld unten ein, um die gelöschten Datensätze zu löschen. Diese Aktion kann nicht rückgängig gemacht werden. Alle Einträge und Benutzer werden DAUERHAFT gelöscht. (Um sicher zu gehen, sollten Sie zuerst ein Backup erstellen)',
    'custom_css'				=> 'Eigenes CSS',
    'custom_css_help'			=> 'Füge eigenes CSS hinzu. Benutze keine &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Benutzerdefinierte Passwort Reset URL',
    'custom_forgot_pass_url_help'	=> 'Dadurch wird die integrierte URL für vergessene Passwörter auf dem Anmeldebildschirm ersetzt. Dies ist nützlich, um Benutzer zur internen oder gehosteten Funktion zum Zurücksetzen von LDAP-Passwörtern zu leiten. Es wird effektiv die Funktionalität des lokalen, vergessenen Passworts deaktiviert.',
    'dashboard_message'			=> 'Dashboard-Nachricht',
    'dashboard_message_help'	=> 'Dieser Text wird für jeden sichtbar sein, der Berechtigungen hat das Dashboard zu sehen.',
    'default_currency'  		=> 'Standardwährung',
    'default_eula_text'			=> 'Standard EULA',
    'default_language'			=> 'Standardsprache',
    'default_eula_help_text'	=> 'Sie können ebenfalls eigene EULA\'s mit spezifischen Asset Kategorien verknüpfen.',
    'display_asset_name'        => 'Zeige Assetname an',
    'display_checkout_date'     => 'Zeige Herausgabedatum',
    'display_eol'               => 'Zeige EOL in der Tabellenansicht',
    'display_qr'                => 'Zeige quadratische Codes',
    'display_alt_barcode'		=> 'Zeige 1D Barcode an',
    'email_logo'                => 'E-Mail-Logo',
    'barcode_type'				=> '2D Barcode Typ',
    'alt_barcode_type'			=> '1D Barcode Typ',
    'email_logo_size'       => 'Quadratische Logos in E-Mails sehen am besten aus. ',
    'enabled'                   => 'Aktiviert',
    'eula_settings'				=> 'EULA Einstellungen',
    'eula_markdown'				=> 'Diese EULA <a href="https://help.github.com/articles/github-flavored-markdown/"> erlaubt Github Flavored Markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Zulässige Dateitypen sind ico, png und gif. Andere Bildformate funktionieren möglicherweise nicht in allen Browsern.',
    'favicon_size'          => 'Favicons sollten quadratische Bilder mit 16x16 Pixel sein.',
    'footer_text'               => 'Zusätzlicher Fußzeilentext ',
    'footer_text_help'          => 'Dieser Text wird in der rechten Fußzeile angezeigt. Links sind erlaubt mit <a href="https://help.github.com/articles/github-flavored-markdown/">Github Flavored Markdown</a>. Zeilenumbrüche, Kopfzeilen, Bilder usw. können zu unvorhersehbaren Verhalten führen.',
    'general_settings'			=> 'Allgemeine Einstellungen',
    'general_settings_keywords' => 'Firmenunterstützung, Unterschrift, Akzeptanz, E-Mail-Format, Benutzername-Format, Bilder pro Seite, Vorschaubilder, EULA, AGB, Dashboard, Privatsphäre',
    'general_settings_help'     => 'Standard EULA und mehr',
    'generate_backup'			=> 'Backup erstellen',
    'header_color'              => 'Farbe der Kopfzeile',
    'info'                      => 'Mit diesen Einstellungen können Sie verschiedene Bereiche Ihrer Installation anpassen.',
    'label_logo'                => 'Label-Logo',
    'label_logo_size'           => 'Quadratische Logos sehen am besten aus und werden rechts oben auf jedem Asset-Label angezeigt. ',
    'laravel'                   => 'Laravel Version',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Standard-Berechtigungsgruppe',
    'ldap_default_group_info'   => 'Wählen Sie eine Gruppe aus, die neu synchronisierten Benutzern zugewiesen werden soll. Denken Sie daran, dass ein Benutzer die Berechtigungen der zugewiesenen Gruppe übernimmt.',
    'no_default_group'          => 'Keine Standardgruppe',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client-seitiger TLS-Schlüssel',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Zertifikat',
    'ldap_enabled'              => 'LDAP aktiviert',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Einstellungen',
    'ldap_client_tls_cert_help' => 'Client-seitige TLS-Zertifikat und Schlüssel für LDAP Verbindungen sind in der Regel nur in Google Workspace Konfigurationen mit "Secure LDAP" nützlich. Beide werden benötigt.',
     'ldap_client_tls_key'       => 'LDAP Client-seitiger TLS-Schlüssel',
    'ldap_login_test_help'      => 'Geben Sie einen gültigen LDAP-Benutzernamen und ein Passwort von der oben angegebenen Basis-DN ein, um zu testen, ob Ihre LDAP-Anmeldung korrekt konfiguriert ist. SIE MÜSSEN IHRE AKTUALISIERTEN LDAP-EINSTELLUNGEN ZUERST SPEICHERN.',
    'ldap_login_sync_help'      => 'Dies testet nur, ob LDAP korrekt synchronisiert werden kann. Wenn Ihre LDAP-Authentifizierungsabfrage nicht korrekt ist, können sich Benutzer möglicherweise nicht anmelden. SIE MÜSSEN IHRE AKTUALISIERTEN LDAP-EINSTELLUNGEN ZUERST SPEICHERN.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Sollte mit ldap:// (für unencrypted oder TLS) oder ldaps:// (für SSL) starten',
    'ldap_server_cert'			=> 'LDAP SSL Zertifikatsüberprüfung',
    'ldap_server_cert_ignore'	=> 'Erlaube ungültige SSL Zertifikate',
    'ldap_server_cert_help'		=> 'Wählen Sie diese Option, wenn Sie selbstsignierte SSL Zertifikate verwenden und diese gegebenenfalls ungültigen Zertifikate akzeptieren möchten.',
    'ldap_tls'                  => 'TLS verwenden',
    'ldap_tls_help'             => 'Sollte nur wenn STARTTLS am LDAP Server verwendet wird, aktiviert sein. ',
    'ldap_uname'                => 'LDAP Bind Nutzername',
    'ldap_dept'                 => 'LDAP Abteilung',
    'ldap_phone'                => 'LDAP Rufnummer',
    'ldap_jobtitle'             => 'LDAP Position',
    'ldap_country'              => 'LDAP Land',
    'ldap_pword'                => 'LDAP Bind Passwort',
    'ldap_basedn'               => 'Basis Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP Passwörter synchronisieren',
    'ldap_pw_sync_help'         => 'Deaktivieren Sie diese Option, wenn Sie nicht möchten, dass LDAP-Passwörter mit lokalen Passwörtern synchronisiert werden. Wenn Sie dies deaktivieren, kann es sein, dass Benutzer sich möglicherweise nicht anmelden können falls der LDAP-Server aus irgendeinem Grund nicht erreichbar ist.',
    'ldap_username_field'       => 'Benutzername',
    'ldap_lname_field'          => 'Nachname',
    'ldap_fname_field'          => 'LDAP Vorname',
    'ldap_auth_filter_query'    => 'LDAP Authentifikationsabfrage',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Aktiv-Markierung',
    'ldap_activated_flag_help'  => 'Dieser Wert wird benutzt um zu entscheiden, ob synchronisierte Nutzer sich in Snipe-IT anmelden können. <strong> Items können unabhängig von ihm zum Nutzer zugewiesen werden</strong>. Der Wert sollte der <strong>Attributname</strong> im AD/LDAP sein <strong>und nicht der Wert</strong>.<br><br>Wenn diesem Feld ein Name zugewiesen wird, der im AD/LDAP nicht existiert bzw. der Wert im AD/LDAP <code>0</code> oder <code>false</code> ist <strong> wird der Nutzerlogin deaktiviert</strong>. Ist der Wert im AD\\LDAP <code>1</code> oder <code>true</code> oder <em>jeder beliebige andere Text</em> dann kann sich der Nutzer anmelden. Wenn das Feld im AD leer ist, dann gilt das <code>userAccountControl</code> Attribut, was normalerweise bedeutet, dass sich nicht deaktivierte Nutzer anmelden können.',
    'ldap_emp_num'              => 'LDAP Mitarbeiternummer',
    'ldap_email'                => 'LDAP E-Mail',
    'ldap_test'                 => 'LDAP testen',
    'ldap_test_sync'            => 'LDAP-Synchronisierung testen',
    'license'                   => 'Softwarelizenz',
    'load_remote_text'          => 'Remote Skripte',
    'load_remote_help_text'		=> 'Diese Installation von Snipe-IT kann Skripte von außerhalb laden.',
    'login'                     => 'Anmeldeversuche',
    'login_attempt'             => 'Anmeldeversuch',
    'login_ip'                  => 'IP-Adresse',
    'login_success'             => 'Erfolg?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'Liste der versuchten Logins',
    'login_note'                => 'Anmeldenotiz',
    'login_note_help'           => 'Fügen Sie optional ein paar Sätze zu Ihrem Anmeldebildschirm hinzu, beispielsweise um Personen zu helfen, welche ein verlorenes oder gestohlenes Gerät gefunden haben. Dieses Feld akzeptiert <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Remote Benutzer Login Optionen',
    'login_remote_user_enabled_text' => 'Aktiviere Login mit Remote User Header',
    'login_remote_user_enabled_help' => 'Diese Option aktiviert die Authentifizierung über den REMOTE_USER header gemäss dem "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Deaktiviere andere Authentifizierungsmethoden',
    'login_common_disabled_help' => 'Diese Option deaktiviert andere Authentifizierungsmethoden. Aktivieren Sie diese Option nur, wenn Sie sich sicher sind, dass REMOTE_USER Login bereits funktioniert',
    'login_remote_user_custom_logout_url_text' => 'Benutzerdefinierte Abmelde-URL',
    'login_remote_user_custom_logout_url_help' => 'Sofern hier eine URL angegeben ist, werden Benutzer automatisch zu dieser URL weitergeleitet, nachdem der Benutzer sich aus Snipe-IT ausloggt. Dies ist nützlich, um die Benutzersitzung Ihres Authentifizierungsproviders korrekt zu beenden.',
    'login_remote_user_header_name_text' => 'Benutzerdefinierter Benutzername Header',
    'login_remote_user_header_name_help' => 'Den angegebenen Header anstelle von REMOTE_USER verwenden',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Anzeigen beim Drucken',
    'logo_print_assets_help'    => 'Firmenlogo anzeigen beim Drucken der Asset-Liste ',
    'full_multiple_companies_support_help_text' => 'Beschränkung von Benutzern (inklusive Administratoren) die einer Firma zugewiesen sind zu den Assets der Firma.',
    'full_multiple_companies_support_text' => 'Volle Mehrmandanten-Unterstützung für Firmen',
    'show_in_model_list'   => 'In Modell-Dropdown-Liste anzeigen',
    'optional'					=> 'optional',
    'per_page'                  => 'Ergebnisse pro Seite',
    'php'                       => 'PHP Version',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, System, Info',
    'php_overview_help'         => 'PHP-Systeminfo',
    'php_gd_info'               => 'Um QR-Codes anzeigen zu können muss php-gd installiert sein, siehe Installationshinweise.',
    'php_gd_warning'            => 'PHP Image Processing and GD Plugin ist NICHT installiert.',
    'pwd_secure_complexity'     => 'Passwortkomplexität',
    'pwd_secure_complexity_help' => 'Wählen Sie aus, welche Komplexitätsregeln Sie für Passwörter erzwingen möchten.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Passwort darf nicht mit Vorname, Nachname, E-Mail oder Benutzername identisch sein',
    'pwd_secure_complexity_letters' => 'Mindestens einen Buchstaben erforderlich',
    'pwd_secure_complexity_numbers' => 'Mindestens eine Zahl erforderlich',
    'pwd_secure_complexity_symbols' => 'Mindestens ein Symbol erforderlich',
    'pwd_secure_complexity_case_diff' => 'Mindestens ein Großbuchstaben und ein Kleinbuchstaben erforderlich',
    'pwd_secure_min'            => 'Minimale Passwortlänge',
    'pwd_secure_min_help'       => 'Minimal zulässiger Wert ist 8',
    'pwd_secure_uncommon'       => 'Gebräuchliche Passwörter verhindern',
    'pwd_secure_uncommon_help'  => 'Verhindert die Verwendung der 10.000 häufigsten Passwörter aus im Internet geleakten Quellen.',
    'qr_help'                   => 'Schalte zuerst QR Codes an um dies zu setzen',
    'qr_text'                   => 'QR Code Text',
    'saml'                      => 'SAML',
    'saml_title'                => 'SAML-Einstellungen aktualisieren',
    'saml_help'                 => 'SAML-Einstellungen',
    'saml_enabled'              => 'SAML aktiviert',
    'saml_integration'          => 'SAML-Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Öffentliches Zertifikat',
    'saml_sp_metadata_url'      => 'Metadaten-URL',
    'saml_idp_metadata'         => 'SAML IdP Metadaten',
    'saml_idp_metadata_help'    => 'Sie können die IdP-Metadaten über eine URL oder XML-Datei angeben.',
    'saml_attr_mapping_username' => 'Zuordnung - Benutzername',
    'saml_attr_mapping_username_help' => 'NamensID wird verwendet, wenn Attribute nicht angegeben oder ungültig sind.',
    'saml_forcelogin_label'     => 'SAML Login erzwingen',
    'saml_forcelogin'           => 'SAML zum primären Login machen',
    'saml_forcelogin_help'      => 'Verwende \'/login?nosaml\' um zur normalen Anmeldeseite zu gelangen.',
    'saml_slo_label'            => 'SAML Abmeldung',
    'saml_slo'                  => 'Senden Sie eine Logout-Anfrage an IdP bei Abmeldung',
    'saml_slo_help'             => 'Dies wird dazu führen, dass der Benutzer beim Abmelden zuerst zum IdP weitergeleitet wird. Nicht aktivieren, wenn der IdP SP-initiated SAML SLO nicht korrekt unterstützt.',
    'saml_custom_settings'      => 'SAML Einstellungen',
    'saml_custom_settings_help' => 'Sie können zusätzliche Einstellungen für die onelogin/php-saml Bibliothek festlegen. Benutzung auf eigene Gefahr.',
    'saml_download'             => 'Metadaten herunterladen',
    'setting'                   => 'Einstellung',
    'settings'                  => 'Einstellungen',
    'show_alerts_in_menu'       => 'Warnungen im oberen Menü anzeigen',
    'show_archived_in_list'     => 'Archivierte Assets',
    'show_archived_in_list_text'     => 'Zeige archivierte Assets in der "Alle auflisten" Liste',
    'show_assigned_assets'      => 'Assets anzeigen, die anderen Assets zugeordnet sind',
    'show_assigned_assets_help' => 'Assets, die den anderen Assets zugewiesen wurden, in Benutzer -> Assets, Benutzer -> Info -> Alle zugewiesenen Assets drucken und unter Konto -> Zugewiesene Assets anzeigen.',
    'show_images_in_email'     => 'Verwende Bilder in E-Mals',
    'show_images_in_email_help'   => 'Deaktivieren Sie dieses Kontrollkästchen, wenn sich Ihre Snipe-IT-Installation hinter einem VPN oder einem geschlossenen Netzwerk befindet und Benutzer außerhalb des Netzwerks keine Bilder von dieser Installation in ihre E-Mails laden können.',
    'site_name'                 => 'Seitenname',
    'integrations'               => 'Integrationen',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Allgemeiner Webhook',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Teste zum Speichern',
    'webhook_title'               => 'Webhook Einstellungen aktualisieren',
    'webhook_help'                => 'Integrationseinstellungen',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Kanal',
    'webhook_endpoint'            => ':app Endpunkt',
    'webhook_integration'         => ':app Einstellungen',
    'webhook_test'                 =>':app Integration testen',
    'webhook_integration_help'    => ':app Integration ist optional, allerdings sind Endpunkt und Kanal erforderlich, wenn Sie sie verwenden möchten. Um die :app Integration zu konfigurieren, musst du zuerst in deinem :app Account <a href=":webhook_link" target="_new" rel="noopener">einen eingehenden Webhook erstellen</a>. Klicken Sie auf den <strong>:app Integration testen</strong> -Knopf, um zu bestätigen, dass die Einstellungen vor dem Speichern korrekt sind. ',
    'webhook_integration_help_button'    => 'Sobald Sie Ihre :app Informationen gespeichert haben, erscheint ein Test-Knopf.',
    'webhook_test_help'           => 'Testen Sie, ob Ihre :app Integration korrekt konfiguriert ist. SIE MÜSSEN SIE IHRE AKTUELLEN :app EINSTELLUNGEN ZUERST SPEICHERN.',
    'snipe_version'  			=> 'Snipe-IT Version',
    'support_footer'            => 'Fußzeile Support-Link ',
    'support_footer_help'       => 'Geben Sie an, wer die Links zum Snipe-IT Support-Info und Benutzerhandbuch sieht',
    'version_footer'            => 'Version in in der Fußzeile ',
    'version_footer_help'       => 'Spezifiert, wer die Version und Build-Nummer von Snipe-IT angezeigt bekommt.',
    'system'                    => 'Systeminformationen',
    'update'                    => 'Einstellungen übernehmen',
    'value'                     => 'Wert',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'Fußzeile, Logo, Druck, Theme, Skin, Header, Farben, Farbe, CSS',
    'brand_help'                => 'Logo, Seitenname',
    'web_brand'                 => 'Web Branding Typ',
    'about_settings_title'      => 'Über Einstellungen',
    'about_settings_text'       => 'Mit diesen Einstellungen können Sie verschiedene Aspekte Ihrer Installation anpassen.',
    'labels_per_page'           => 'Etiketten pro Seite',
    'label_dimensions'          => 'Etikettengröße (Zoll)',
    'next_auto_tag_base'        => 'Nächster Auto-Inkrement',
    'page_padding'              => 'Seiten Ränder (Zoll)',
    'privacy_policy_link'       => 'Link zur Datenschutzrichtlinie',
    'privacy_policy'            => 'Datenschutzrichtlinie',
    'privacy_policy_link_help'  => 'Wenn hier ein Link zu Ihrer Datenschutzerklärung enthalten ist, wird dieser in der Fußzeile der App und in allen E-Mails, die das System in Übereinstimmung mit der DSGVO versendet, hinzugefügt. ',
    'purge'                     => 'Gelöschte Einträge bereinigen',
    'purge_deleted'             => 'Gelöschte säubern ',
    'labels_display_bgutter'    => 'Ettiketten Spaltenzwischenraum unterhalb',
    'labels_display_sgutter'    => 'Ettikett Seitenabstand',
    'labels_fontsize'           => 'Schriftgröße der Etiketten',
    'labels_pagewidth'          => 'Etiketten Blatt Breite',
    'labels_pageheight'         => 'Etiketten Blatt Höhe',
    'label_gutters'        => 'Etikettenabstand (Zoll)',
    'page_dimensions'        => 'Seitengröße (Zoll)',
    'label_fields'          => 'sichtbare Beschriftungsfelder',
    'inches'        => 'Zoll',
    'width_w'        => 'b',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link zu Snipe-IT in E-Mails',
    'show_url_in_emails_help_text'      => 'Deaktivieren Sie dieses Kontrollkästchen, wenn Sie in Ihren E-Mail-Fußzeilen keine Verbindung zu Ihrer Snipe-IT-Installation herstellen möchten. Nützlich, wenn die meisten Ihrer Benutzer sich nie einloggen.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maximale Höhe der Miniaturansicht',
    'thumbnail_max_h_help'   => 'Maximale Höhe für Miniaturansichten in der Listenansicht in Pixel. Min. 25, Max. 500.',
    'two_factor'        => 'Zwei-Faktor-Authentifizierung',
    'two_factor_secret'        => 'Zwei-Faktor Code',
    'two_factor_enrollment'        => 'Zwei-Faktor Registrierung',
    'two_factor_enabled_text'        => 'Zwei-Faktor-Authentifizierung aktivieren',
    'two_factor_reset'        => 'Zwei-Faktor-Geheimnis zurücksetzen',
    'two_factor_reset_help'        => 'Dies zwingt den Benutzer sein Gerät mit der Google Authenticator App erneut zu registrieren. Dies kann nützlich sein, wenn das aktuell registrierte Gerät verloren ging oder gestohlen wurde. ',
    'two_factor_reset_success'          => 'Zwei-Faktor-Gerät erfolgreich zurückgesetzt',
    'two_factor_reset_error'          => 'Zwei-Faktor-Gerät zurücksetzen fehlgeschlagen',
    'two_factor_enabled_warning'        => 'Die Aktivierung der Zwei-Faktor-Authentifizierung bewirkt, dass Sie sich sofort mit einem bei der Google Authenticator App registrierten Gerät authentifizieren müssen. Sie haben die Möglichkeit ihr Gerät hinzuzufügen falls derzeit keines registriert ist.',
    'two_factor_enabled_help'        => 'Aktiviert die Zwei-Faktor-Authentifizierung mit der Google Authenticator App.',
    'two_factor_optional'        => 'Auswählbar (Benutzer können aktivieren oder deaktivieren, wenn erlaubt)',
    'two_factor_required'        => 'Für alle Benutzer erforderlich',
    'two_factor_disabled'        => 'Deaktiviert',
    'two_factor_enter_code'	=> 'Zwei-Faktor Code eingeben',
    'two_factor_config_complete'	=> 'Code absenden',
    'two_factor_enabled_edit_not_allowed' => 'Der Administrator erlaubt nicht, diese Einstellung zu ändern.',
    'two_factor_enrollment_text'	=> "Zwei-Faktor-Authentifizierung ist erforderlich, Ihr Gerät wurde jedoch noch nicht hinzugefügt. Öffnen Sie die Google Authenticator App und scannen Sie den QR-Code unterhalb um Ihr Gerät hinzuzufügen. Geben Sie anschließend den Code ein",
    'require_accept_signature'      => 'Signatur erforderlich',
    'require_accept_signature_help_text'      => 'Wenn aktiviert, wird eine physische Unterschrift durch den Benutzer notwendig, der das Asset erhält.',
    'left'        => 'links',
    'right'        => 'rechts',
    'top'        => 'Oben',
    'bottom'        => 'Unten',
    'vertical'        => 'Vertikal',
    'horizontal'        => 'Horizontal',
    'unique_serial'                => 'Eindeutige Seriennummern',
    'unique_serial_help_text'                => 'Wenn dieses Kontrollkästchen aktiviert wird, müssen Seriennummern von Assets eindeutig sein',
    'zerofill_count'        => 'Länge der Asset Tags, inklusive zerofill',
    'username_format_help'   => 'Diese Einstellung wird nur beim Import benutzt, wenn kein Benutzername angegeben wurde und ein Benutzername generiert werden muss.',
    'oauth_title' => 'OAuth API Einstellungen',
    'oauth' => 'OAuth',
    'oauth_help' => 'OAuth Endpunkt Einstellungen',
    'asset_tag_title' => 'Asset Tag Einstellungen aktualisieren',
    'barcode_title' => 'Barcode Einstellungen aktualisieren',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR Einstellungen',
    'barcodes_help' => 'Dies wird versuchen, zwischengespeicherte Barcodes zu löschen. Dies wird in der Regel nur verwendet werden, wenn sich die Barcode-Einstellungen geändert haben oder sich Ihre Snipe-IT-URL geändert hat. Barcodes werden beim nächsten Zugriff neu generiert.',
    'barcodes_spinner' => 'Versuche Dateien zu löschen...',
    'barcode_delete_cache' => 'Barcode-Cache löschen',
    'branding_title' => 'Branding Einstellungen aktualisieren',
    'general_title' => 'Allgemeine Einstellungen aktualisieren',
    'mail_test' => 'Test senden',
    'mail_test_help' => 'Dies wird versuchen, eine Testmail an :replyto zu senden.',
    'filter_by_keyword' => 'Nach Stichwort filtern',
    'security' => 'Sicherheit',
    'security_title' => 'Sicherheitseinstellungen aktualisieren',
    'security_keywords' => 'Passwort, Passwörter, Anforderungen, Zwei-Faktor, Zwei-Faktor, übliche Passwörter, Remote-Login, Logout, Authentifizierung',
    'security_help' => 'Zwei-Faktor, Passwort-Einschränkungen',
    'groups_keywords' => 'Berechtigungen, Berechtigungsgruppen, Autorisierung',
    'groups_help' => 'Account-Berechtigungsgruppen',
    'localization' => 'Lokalisierung',
    'localization_title' => 'Lokalisierungseinstellungen aktualisieren',
    'localization_keywords' => 'Lokalisierung, Währung, lokal, Lokal, Zeitzone, International, Internationalisierung, Sprache, Sprachen, Übersetzung',
    'localization_help' => 'Sprache, Datumsanzeige',
    'notifications' => 'Benachrichtigungen',
    'notifications_help' => 'E-Mail-Benachrichtigungen & Audit-Einstellungen',
    'asset_tags_help' => 'Inkrementieren und Präfixe',
    'labels' => 'Etiketten',
    'labels_title' => 'Etiketten-Einstellungen aktualisieren',
    'labels_help' => 'Labelgrößen &amp; Einstellungen',
    'purge' => 'Alles löschen',
    'purge_keywords' => 'Endgültig löschen',
    'purge_help' => 'Gelöschte Einträge bereinigen',
    'ldap_extension_warning' => 'Es sieht nicht so aus, als ob die LDAP-Erweiterung auf diesem Server installiert oder aktiviert ist. Sie können Ihre Einstellungen trotzdem speichern, aber Sie müssen die LDAP-Erweiterung für PHP aktivieren, bevor die LDAP-Synchronisierung oder der Login funktioniert.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Mitarbeiternummer',
    'create_admin_user' => 'Benutzer erstellen ::',
    'create_admin_success' => 'Erfolgreich! Ihr Admin-Benutzer wurde hinzugefügt!',
    'create_admin_redirect' => 'Klicke hier, um zu deinem App-Login zu gelangen!',
    'setup_migrations' => 'Datenbankmigrationen ::',
    'setup_no_migrations' => 'Es gab nichts zu migrieren. Ihre Datenbanktabellen wurden bereits eingerichtet!',
    'setup_successful_migrations' => 'Ihre Datenbanktabellen wurden erstellt',
    'setup_migration_output' => 'Migrationsausgabe:',
    'setup_migration_create_user' => 'Weiter: Benutzer erstellen',
    'ldap_settings_link' => 'LDAP Einstellungsseite',
    'slack_test' => '<i class="fab fa-slack"></i> Integration testen',
];