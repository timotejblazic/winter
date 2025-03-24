<?php

return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => 'Întoarcerea la elementele de bază',
    ],
    'locale' => [
        'ar' => 'العربية',
        'be' => 'Беларуская',
        'bg' => 'Български',
        'ca' => 'Català',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'rs' => 'Srpski',
        'ru' => 'Русский',
        'fi' => 'Suomi',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'th' => 'ไทย',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt',
    ],
    'directory' => [
        'create_fail' => 'Nu se poate crea dosarul: :name',
    ],
    'file' => [
        'create_fail' => 'Nu se poate crea fișierul: :name',
    ],
    'combiner' => [
        'not_found' => 'Fișierul compus ":name" nu a fost găsit.',
    ],
    'system' => [
        'name' => 'Sistem',
        'menu_label' => 'Sistem',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Diverse',
            'logs' => 'Jurnal',
            'mail' => 'Mail',
            'shop' => 'Magazin',
            'team' => 'Echipă',
            'users' => 'Utilizatori',
            'system' => 'Sistem',
            'social' => 'Social media',
            'backend' => 'Backend',
            'events' => 'Evenimente',
            'customers' => 'Clienți',
            'my_settings' => 'Setările mele',
            'notifications' => 'Notificări',
        ],
    ],
    'theme' => [
        'label' => 'Temă',
        'unnamed' => 'Temă fără nume',
        'name' => [
            'label' => 'Nume temă',
            'help' => 'Denumiți tema după codul ei unic. De exemplu Winter.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Instalați temele',
        'search' => 'căutați teme de instalat...',
        'installed' => 'Teme instalate',
        'no_themes' => 'Nu există teme instalate din magazinul Winter.',
        'recommended' => 'Recomandat',
        'remove_confirm' => 'Sigur doriți să eliminați această temă?',
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin fără nume',
        'name' => [
            'label' => 'Nume Plugin',
            'help' => 'Denumiți plugin-ul după codul lui unic. De exemplu Winter.Blog',
        ],
        'by_author' => 'De către :name',
    ],
    'plugins' => [
        'manage' => 'Gestionare plugin-uri',
        'install' => 'Instalați plugin-uri',
        'install_products' => 'Instalați produse',
        'search' => 'căutare plugin-uri de instalat...',
        'installed' => 'Plugin-uri instalate',
        'no_plugins' => 'Nu există plugin-uri instalate de pe piață.',
        'recommended' => 'Recomandat',
        'plugin_label' => 'Plugin',
        'unknown_plugin' => 'Pluginul a fost eliminat din sistemul de fișiere.',
        'select_label' => 'Selectați acțiune...',
        'bulk_actions_label' => 'Acțiuni în bloc',
        'check_yes' => 'Da',
        'check_no' => 'Nu',
        'unfrozen' => 'Actualizări activate',
        'enabled' => 'Plugin activat',
        'freeze' => 'Dezactivați actualizările pentru',
        'unfreeze' => 'Activați actualizările pentru',
        'enable' => 'Activați',
        'disable' => 'Dezactivați',
        'refresh' => 'Resetare',
        'remove' => 'Ștergere',
        'freeze_label' => 'Dezactivați actualizările',
        'unfreeze_label' => 'Activați actualizările',
        'enable_label' => 'Activați plugin-urile',
        'disable_label' => 'Dezactivează plugin-urile',
        'refresh_label' => 'Resetați datele plugin-ului',
        'action_confirm' => 'Sigur doriți să :action aceste plugin-uri?',
        'freeze_success' => 'Actualizări dezactivate cu succes pentru plugin-urile selectate.',
        'unfreeze_success' => 'Actualizări activate cu succes pentru plugin-urile selectate.',
        'enable_success' => 'Activare cu succes pentru plugin-urile selectate.',
        'disable_success' => 'Dezactivare cu succes pentru plugin-urile selectate.',
        'refresh_confirm' => 'Sigur doriți să resetați plugin-urile selectate? Aceasta va reseta datele fiecărui plugin, restabilindu-le la starea inițială de instalare.',
        'refresh_success' => 'Resetare cu succes pentru plugin-urile selectate.',
        'remove_confirm' => 'Sigur doriți să eliminați plugin-urile selectate? Aceasta va elimina și toate datele asociate.',
        'remove_success' => 'Ștergere cu succes a plugin-urilor selectate.',
        'replace' => [
            'multi_install_error' => 'Înlocuirea mai multor plugin-uri este în prezent neacceptată',
        ]
    ],
    'project' => [
        'name' => 'Proiect',
        'owner_label' => 'Proprietar',
        'attach' => 'Atașare Proiect',
        'detach' => 'Desprindere Proiect',
        'none' => 'Niciunul',
        'id' => [
            'label' => 'ID Proiect',
            'help' => 'Cum să găsiți ID-ul Proiectului',
            'missing' => 'Vă rugăm să specificați un ID de Proiect.',
        ],
        'detach_confirm' => 'Sunteți sigur(ă) că doriți să desprindeți acest proiect?',
        'unbind_success' => 'Proiectul a fost desprins.',
    ],
    'settings' => [
        'menu_label' => 'Setări',
        'not_found' => 'Imposibil de găsit setările specificate.',
        'missing_model' => 'Pe pagina de setări lipsește o definiție a modelului.',
        'update_success' => 'Setările pentru :name au fost actualizate.',
        'return' => 'Întoarcere la setările sistemului.',
        'search' => 'Căutare'
    ],
    'mail' => [
        'log_file' => 'Fișier jurnal',
        'menu_label' => 'Configurare email',
        'menu_description' => 'Gestionați configurarea e-mail-ului.',
        'general' => 'General',
        'method' => 'Metoda pentru email',
        'sender_name' => 'Numele expeditorului',
        'sender_email' => 'Emailul expeditorului',
        'php_mail' => 'E-mail PHP',
        'smtp' => 'SMTP',
        'smtp_address' => 'Adresă SMTP',
        'smtp_authorization' => 'Este necesară autorizarea SMTP',
        'smtp_authorization_comment' => 'Utilizați această casetă de selectare dacă serverul dvs. SMTP necesită autorizare.',
        'smtp_username' => 'Nume utilizator',
        'smtp_password' => 'Parolă',
        'smtp_port' => 'Port SMTP',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Calea către Sendmail',
        'sendmail_path_comment' => 'Vă rugăm să specificați calea programului Sendmail.',
    ],
    'mail_templates' => [
        'menu_label' => 'Șabloane de e-mail',
        'menu_description' => 'Modificați șabloanele de e-mail care sunt trimise utilizatorilor și administratorilor; gestionați schema lor.',
        'new_template' => 'Șablon nou',
        'new_layout' => 'Machetă nouă',
        'new_partial' => 'Parțial nou',
        'template' => 'Șablon',
        'templates' => 'Șabloane',
        'partial' => 'Parțial',
        'partials' => 'Parțiale',
        'menu_layouts_label' => 'Machete de e-mail',
        'menu_partials_label' => 'Parțiale de e-mail',
        'layout' => 'Machetă',
        'layouts' => 'Machete',
        'no_layout' => '- fără machetă -',
        'name' => 'Nume',
        'name_comment' => 'Numele unic utilizat pentru a face referire la acest șablon',
        'code' => 'Cod',
        'code_comment' => 'Cod unic utilizat pentru a face referire la acest șablon',
        'subject' => 'Subiect',
        'subject_comment' => 'Subiectul e-mail-ului',
        'description' => 'Descriere',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Text simplu',
        'test_send' => 'Trimiteți mesaj de testare',
        'test_success' => 'Mesaj de testare trimis.',
        'test_confirm' => 'Trimiteți mesajul de testare către ":email". Continuați?',
        'creating' => 'Crearea șablonului...',
        'creating_layout' => 'Crearea unei machete...',
        'saving' => 'Salvarea șablonului...',
        'saving_layout' => 'Salvarea schemei...',
        'delete_confirm' => 'Ștergeți acest șablon?',
        'delete_layout_confirm' => 'Ștergeți această machetă?',
        'deleting' => 'Ștergerea șablonului...',
        'deleting_layout' => 'Ștergerea machetei...',
        'sending' => 'Trimitere mesaj de testare...',
        'return' => 'Reveniți la lista șabloanelor',
        'options' => 'Opțiuni',
        'disable_auto_inline_css' => 'Dezactivează CSS automat inline',
    ],
    'mail_brand' => [
        'menu_label' => 'Branding e-mail',
        'menu_description' => 'Modificați culorile și aspectul șabloanelor de e-mail.',
        'page_title' => 'Personalizați aspectul e-mailului',
        'sample_template' => [
            'heading' => 'Heading',
            'paragraph' => 'Acesta este un paragraf umplut cu Lorem Ipsum și un link. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Articol',
                'description' => 'Descriere',
                'price' => 'Preț',
                'centered' => 'Centrat',
                'right_aligned' => 'Aliniere la dreapta',
            ],
            'buttons' => [
                'primary' => 'Buton principal',
                'positive' => 'Buton pozitiv',
                'negative' => 'Buton negativ',
            ],
            'panel' => 'Cât de minunat este acest panou?',
            'more' => 'Mai mult text',
            'promotion' => 'Cod cupon: WINTER',
            'subcopy' => 'Aceasta este subcopia emailului',
        ],
        'fields' => [
            '_section_background' => 'Fundal',
            'body_bg' => 'Fundal body',
            'content_bg' => 'Fundal conținut',
            'content_inner_bg' => 'Fundal interior conținut',
            '_section_buttons' => 'Butoane',
            'button_text_color' => 'Culoare text buton',
            'button_primary_bg' => 'Fundal buton principal',
            'button_positive_bg' => 'Fundal buton pozitiv',
            'button_negative_bg' => 'Fundal buton negativ',
            '_section_type' => 'Tipografie',
            'header_color' => 'Culoare antet',
            'heading_color' => 'Culoare titluri',
            'text_color' => 'Culoare text',
            'link_color' => 'Culoare link',
            'footer_color' => 'Culoare subsol',
            '_section_borders' => 'Borduri',
            'body_border_color' => 'Culoare margine body',
            'subcopy_border_color' => 'Culoare margine subcopie',
            'table_border_color' => 'Culoare chenar tabel',
            '_section_components' => 'Componente',
            'panel_bg' => 'Fundal panou',
            'promotion_bg' => 'Fundal promovare',
            'promotion_border_color' => 'Culoare chenar promovare',
        ],
    ],
    'install' => [
        'project_label' => 'Anexare la Proiect',
        'plugin_label' => 'Instalare Plugin',
        'theme_label' => 'Instalare Temă',
        'missing_plugin_name' => 'Vă rugăm să specificați un nume de Plugin pentru instalare.',
        'missing_theme_name' => 'Vă rugăm să specificați un nume de Temă pentru instalare.',
        'install_completing' => 'Se finalizează procesul de instalare',
        'install_success' => 'Acest plugin a fost instalat cu succes.',
    ],
    'updates' => [
        'title' => 'Gestionează Actualizări',
        'name' => 'Actualizare Software',
        'menu_label' => 'Actualizări',
        'menu_description' => 'Actualizați sistemul, gestionați și instalați plugin-uri și teme.',
        'return_link' => 'Întoarcere la actualizările sistemului',
        'check_label' => 'Caută actualizări disponibile',
        'retry_label' => 'Încercați din nou',
        'plugin_name' => 'Nume',
        'plugin_code' => 'Cod',
        'plugin_description' => 'Descriere',
        'plugin_version' => 'Versiune',
        'plugin_author' => 'Autor',
        'plugin_not_found' => 'Pluginul nu a fost găsit',
        'plugin_version_not_found' => 'Versiunea plugin-ului nu a fost găsită',
        'core_current_build' => 'Versiune curentă',
        'core_view_changelog' => 'Vezi registrul schimbărilor',
        'core_build' => 'Versiune :build',
        'core_build_help' => 'Ultima versiune este disponibilă.',
        'core_downloading' => 'Se descarcă fișierele aplicației',
        'core_extracting' => 'Se dezarhivează fișierele aplicației',
        'core_set_build' => 'Setarea numărului versiunii',
        'update_warnings_title' => 'Unele probleme au fost detectate și necesită atenție:',
        'update_warnings_plugin_missing' => 'Pluginul :parent_code necesită :code să fie instalat înainte ca acesta să funcționeze',
        'update_warnings_plugin_replace' => 'Pluginul :plugin înlocuiește :alias, vă rugăm să eliminați :alias pentru a vă asigura că nu există conflicte',
        'update_warnings_plugin_replace_cli' => 'Acest plugin înlocuiește :alias, vă rugăm să eliminați :alias pentru a vă asigura că nu există conflicte',
        'changelog' => 'Registrul schimbărilor',
        'changelog_view_details' => 'Vizualizați detaliile',
        'plugins' => 'Pluginuri',
        'themes' => 'Teme',
        'disabled' => 'Dezactivat',
        'plugin_downloading' => 'Se descarcă plugin-ul: :name',
        'plugin_extracting' => 'Se dezarhivează plugin-ul: :name',
        'plugin_version_none' => 'Plugin nou',
        'plugin_current_version' => 'Versiune curentă',
        'theme_new_install' => 'Instalare temă nouă.',
        'theme_downloading' => 'Se descarcă tema: :name',
        'theme_extracting' => 'Se dezarhivează tema: :name',
        'update_label' => 'Actualizare program',
        'update_completing' => 'Se finalizează procesul de actualizare',
        'update_loading' => 'Se încarcă actualizările disponibile...',
        'update_success' => 'Procesul de actualizare a fost finalizat cu succes.',
        'update_failed_label' => 'Actualizarea a eșuat',
        'force_label' => 'Forțează actualizarea',
        'found' => [
            'label' => 'Au fost găsite actualizări noi!',
            'help' => 'Apăsați pe Actualizare program pentru a începe procesul de actualizare.',
        ],
        'none' => [
            'label' => 'Nu există actualizări',
            'help' => 'Nu au fost găsite actualizări disponibile.',
        ],
        'important_action' => [
            'empty' => 'Selectați acțiunea',
            'confirm' => 'Confirmați actualizarea',
            'skip' => 'Omiteți această actualizare (o singură dată)',
            'ignore' => 'Omiteți această actualizare (întotdeauna)',
        ],
        'important_action_required' => 'Acțiune necesară',
        'important_view_guide' => 'Vizualizați ghidul de actualizare',
        'important_view_release_notes' => 'Vizualizați notele de lansare',
        'important_alert_text' => 'Unele actualizări au nevoie de atenția dumneavoastră.',
        'details_title' => 'Detalii despre plugin',
        'details_view_homepage' => 'Vizualizați pagina principală',
        'details_readme' => 'Documentație',
        'details_readme_missing' => 'Nu există nicio documentație furnizată.',
        'details_changelog' => 'Registrul schimbărilor',
        'details_changelog_missing' => 'Nu este furnizat nici un registru de schimbări.',
        'details_upgrades' => 'Ghid de actualizare',
        'details_upgrades_missing' => 'Nu sunt furnizate instrucțiuni de actualizare.',
        'details_licence' => 'Licență',
        'details_licence_missing' => 'Nu este furnizată nicio licență.',
        'details_current_version' => 'Versiunea curentă',
        'details_author' => 'Autor',
    ],
    'server' => [
        'connect_error' => 'Eroare la conectarea la server.',
        'response_not_found' => 'Serverul de actualizări nu a putut fi găsit.',
        'response_invalid' => 'Răspuns invalid de la server.',
        'response_empty' => 'Răspuns gol de la server.',
        'file_error' => 'Serverul a eșuat să livreze pachetul.',
        'file_corrupt' => 'Fișierul de pe server este corupt.',
    ],
    'behavior' => [
        'missing_property' => 'Clasa :class trebuie să definească proprietatea $:property folosită pentru comportamentul :behavior.',
    ],
    'config' => [
        'not_found' => 'Nu a fost găsit fișierul de configurare :file definit pentru :location.',
        'required' => "Configurația folosită în :location trebuie să furnizeze o valoare ':property'.",
    ],
    'zip' => [
        'extract_failed' => "Nu s-a putut extrage fișierul de bază ':file'.",
    ],
    'event_log' => [
        'hint' => 'Acest jurnal afișează o listă de erori potențiale în aplicație, cum ar fi excepții sau informații pentru depanare.',
        'menu_label' => 'Jurnal evenimente',
        'menu_description' => 'Vizualizați mesajele jurnalului de sistem cu înregistrările de timp și detaliile aferente.',
        'empty_link' => 'Golire jurnal de evenimente',
        'empty_loading' => 'Se golește jurnalul de evenimente...',
        'empty_success' => 'Jurnalul de evenimente a fost golit cu succes.',
        'return_link' => 'Întoarcere la jurnalul de evenimente',
        'id' => 'ID',
        'id_label' => 'ID eveniment',
        'created_at' => 'Data & Ora',
        'message' => 'Mesaj',
        'level' => 'Nivel',
        'preview_title' => 'Eveniment',
    ],
    'request_log' => [
        'hint' => 'Acest jurnal afișează o listă de solicitări efectuate de navigatorul web care pot să necesite atenție. De exemplu, dacă un vizitator deschide o pagină în CMS care nu poate fi găsită, o înregistrare va fi creată cu un cod de status 404.',
        'menu_label' => 'Jurnal solicitări',
        'menu_description' => 'Vizualizare solicitări eșuate sau redirecționate, precum Pagini care nu au fost găsite (404).',
        'empty_link' => 'Golire jurnal de solicitări',
        'empty_loading' => 'Se golește jurnalul de solicitări...',
        'empty_success' => 'Jurnalul de solicitări a fost golit cu succes.',
        'return_link' => 'Întoarcere la jurnal de solicitări',
        'id' => 'ID',
        'id_label' => 'ID Jurnal',
        'count' => 'Contor',
        'referer' => 'Referință',
        'url' => 'URL',
        'status_code' => 'Stare',
        'preview_title' => 'Solicitare',
    ],
    'permissions' => [
        'name' => 'Sistem',
        'manage_system_settings' => 'Gestionează setările sistemului',
        'manage_software_updates' => 'Gestionează actualizările programului',
        'access_logs' => 'Vizualizează jurnalele de sistem',
        'manage_mail_templates' => 'Gestionează șabloanele de email',
        'manage_mail_settings' => 'Gestionează setările pentru email',
        'manage_other_administrators' => 'Gestionează alți administratori',
        'impersonate_users' => 'Utilizați identitatea utilizatorilor',
        'manage_preferences' => 'Gestionați preferințele de backend',
        'manage_editor' => 'Gestionați preferințele editorului de cod global',
        'manage_own_editor' => 'Gestionați preferințele editorului de cod personal',
        'view_the_dashboard' => 'Vizualizați tabloul de bord',
        'manage_default_dashboard' => 'Gestionați tabloul de bord implicit',
        'manage_branding' => 'Personalizați backend-ul',
    ],
    'log' => [
        'menu_label' => 'Setări jurnal',
        'menu_description' => 'Specificați ce zone ar trebui să utilizeze jurnale.',
        'default_tab' => 'Înregistrare jurnal',
        'log_events' => 'Înregistrarea evenimentelor de sistem',
        'log_events_comment' => 'Stocați evenimentele de sistem în baza de date, în plus față de jurnalul bazat pe fișiere.',
        'log_requests' => 'Înregistrați solicitările greșite',
        'log_requests_comment' => 'Solicitări de navigator web care pot necesita atenție, cum ar fi erori 404.',
        'log_theme' => 'Înregistrează jurnal modificări temă',
        'log_theme_comment' => 'Când se face o modificare a temei utilizând backend-ul.',
    ],
    'media' => [
        'invalid_path' => "Calea specificată pentru fișier este invalidă: ':path'.",
        'folder_size_items' => 'element(e)',
    ],
    'pagina' => [
        'custom_error' => [
            'label' => 'Eroare de pagină',
            'help' => 'Ne pare rău, dar ceva nu a funcționat și pagina nu poate fi afișată.',
        ],
        'invalid_token' => [
            'label' => 'Cod de securitate invalid',
        ],
        'întreținere' => [
            'label' => "Vom reveni imediat!",
            'help' => "Momentan avem servicii de întreținere, reveniți în curând!",
            'message' => 'Mesaj:',
            'available_at' => 'Încercați din nou după:',
        ],
    ],
    'paginare' => [
        'previous' => 'Anterior',
        'next' => 'Următor',
    ],
];
