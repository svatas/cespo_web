<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1600760130,
    'checksum' => 'ed43a5b0827893340b38af07bb247260',
    'files' => [
        'user/config' => [
            'backups' => [
                'file' => 'user/config/backups.yaml',
                'modified' => 1600161746
            ],
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1600161746
            ],
            'plugins/admin' => [
                'file' => 'user/config/plugins/admin.yaml',
                'modified' => 1600161747
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1600161747
            ],
            'plugins/gantry5' => [
                'file' => 'user/config/plugins/gantry5.yaml',
                'modified' => 1600756198
            ],
            'plugins/simplesearch' => [
                'file' => 'user/config/plugins/simplesearch.yaml',
                'modified' => 1600161747
            ],
            'plugins/tinymce-editor' => [
                'file' => 'user/config/plugins/tinymce-editor.yaml',
                'modified' => 1600161747
            ],
            'scheduler' => [
                'file' => 'user/config/scheduler.yaml',
                'modified' => 1600161746
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1600161747
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1600161747
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1600161747
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1600756394
            ]
        ],
        'system/config' => [
            'backups' => [
                'file' => 'system/config/backups.yaml',
                'modified' => 1600161714
            ],
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1600161714
            ],
            'permissions' => [
                'file' => 'system/config/permissions.yaml',
                'modified' => 1600161714
            ],
            'security' => [
                'file' => 'system/config/security.yaml',
                'modified' => 1600161714
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1600161714
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1600161714
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1600161714
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1600161747
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1600161748
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1600161748
            ],
            'plugins/flex-objects' => [
                'file' => 'user/plugins/flex-objects/flex-objects.yaml',
                'modified' => 1600161749
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1600161750
            ],
            'plugins/gantry5' => [
                'file' => 'user/plugins/gantry5/gantry5.yaml',
                'modified' => 1600161750
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1600161750
            ],
            'plugins/map-quest' => [
                'file' => 'user/plugins/map-quest/map-quest.yaml',
                'modified' => 1600161751
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1600161751
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1600161751
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1600161752
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/shortcode-core.yaml',
                'modified' => 1600161752
            ],
            'plugins/tinymce-editor' => [
                'file' => 'user/plugins/tinymce-editor/tinymce-editor.yaml',
                'modified' => 1600161752
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1600756169
            ]
        ],
        'user/themes' => [
            'themes/rt_zenith' => [
                'file' => 'user/themes/rt_zenith/rt_zenith.yaml',
                'modified' => 1600161753
            ]
        ]
    ],
    'data' => [
        'themes' => [
            'rt_zenith' => [
                'enabled' => true
            ]
        ],
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => 'CESPO, o.p.s.',
                'body_classes' => NULL,
                'content_padding' => true,
                'twofa_enabled' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets_display' => [
                    'dashboard-maintenance' => 'true',
                    'dashboard-statistics' => 'false',
                    'dashboard-notifications' => 'false',
                    'dashboard-feed' => 'false',
                    'dashboard-pages' => 'true'
                ],
                'pages' => [
                    'show_parents' => 'both',
                    'show_modular' => true,
                    'parents_levels' => NULL
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true,
                    'secure_delete' => false
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => false,
                'pages_list_display_field' => 'title',
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => false,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => '30',
                        'monthly' => '12',
                        'visitors' => '20'
                    ]
                ],
                'whitelabel' => [
                    'quicktray_recompile' => false,
                    'codemirror_theme' => 'paper',
                    'codemirror_fontsize' => 'md',
                    'codemirror_md_font' => 'sans',
                    'logo_custom' => [
                        
                    ],
                    'logo_login' => [
                        'user/assets/logo_cespo_91x100.png' => [
                            'name' => 'logo_cespo_91x100.png',
                            'type' => 'image/png',
                            'size' => 17537,
                            'path' => 'user/assets/logo_cespo_91x100.png'
                        ]
                    ],
                    'color_scheme' => [
                        'accents' => [
                            'primary-accent' => 'button',
                            'secondary-accent' => 'notice',
                            'tertiary-accent' => 'critical'
                        ],
                        'colors' => [
                            'logo-bg' => '#323640',
                            'logo-link' => '#FFFFFF',
                            'nav-bg' => '#3D424E',
                            'nav-text' => '#B7B9BD',
                            'nav-link' => '#ffffff',
                            'nav-selected-bg' => '#323640',
                            'nav-selected-link' => '#ffffff',
                            'nav-hover-bg' => '#434753',
                            'nav-hover-link' => '#ffffff',
                            'toolbar-bg' => '#ffffff',
                            'toolbar-text' => '#3D424E',
                            'page-bg' => '#F6F6F6',
                            'page-text' => '#6f7b8a',
                            'page-link' => '#0090D9',
                            'content-bg' => '#ffffff',
                            'content-text' => '#6f7b8a',
                            'content-link' => '#0090D9',
                            'content-link2' => '#da4b46',
                            'content-header' => '#414147',
                            'content-tabs-bg' => '#e3e3e3',
                            'content-tabs-text' => '#808080',
                            'button-bg' => '#0090D9',
                            'button-text' => '#ffffff',
                            'notice-bg' => '#06A599',
                            'notice-text' => '#ffffff',
                            'update-bg' => '#77559D',
                            'update-text' => '#ffffff',
                            'critical-bg' => '#F45857',
                            'critical-text' => '#ffffff'
                        ],
                        'name' => NULL
                    ],
                    'custom_footer' => NULL,
                    'custom_css' => NULL,
                    'custom_presets' => NULL
                ],
                'google_fonts' => true,
                'log_viewer_files' => [
                    0 => 'grav',
                    1 => 'email'
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => false,
                    'dashboard-notifications' => false,
                    'dashboard-feed' => false,
                    'dashboard-pages' => true
                ],
                'show_beta_msg' => NULL,
                'pagemedia' => [
                    'resize_width' => 0,
                    'resize_height' => 0,
                    'res_min_width' => 0,
                    'res_min_height' => 0,
                    'res_max_width' => 0,
                    'res_max_height' => 0,
                    'resize_quality' => 0.8000000000000000444089209850062616169452667236328125
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => 'mail@example.com',
                'from_name' => NULL,
                'to' => 'mail@example.com',
                'to_name' => NULL,
                'queue' => [
                    'enabled' => false,
                    'flush_frequency' => '* * * * *',
                    'flush_msg_limit' => 10,
                    'flush_time_limit' => 100
                ],
                'mailer' => [
                    'engine' => 'none',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'flex-objects' => [
                'enabled' => true,
                'built_in_css' => true,
                'extra_admin_twig_path' => 'theme://admin/templates',
                'admin_list' => [
                    'per_page' => 15,
                    'order' => [
                        'by' => 'updated_timestamp',
                        'dir' => 'desc'
                    ]
                ],
                'directories' => [
                    0 => 'blueprints://flex-objects/pages.yaml',
                    1 => 'blueprints://flex-objects/user-accounts.yaml',
                    2 => 'blueprints://flex-objects/user-groups.yaml'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'recaptcha' => [
                    'version' => '2-checkbox',
                    'theme' => 'light',
                    'site_key' => NULL,
                    'secret_key' => NULL
                ]
            ],
            'gantry5' => [
                'enabled' => true,
                'production' => false,
                'use_media_folder' => false,
                'offline' => false,
                'offline_message' => NULL,
                'asset_timestamps' => true,
                'asset_timestamps_period' => 7,
                'debug' => false,
                'compile_yaml' => true,
                'compile_twig' => true
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'redirect_to_login' => false,
                'redirect_after_login' => false,
                'redirect_after_logout' => true,
                'session_user_sync' => false,
                'route' => '/login',
                'route_after_login' => '/',
                'route_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'twofa_enabled' => false,
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 2,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 5,
                'max_login_interval' => 10,
                'ipv6_subnet_size' => 64,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level',
                        6 => 'twofa_enabled'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'redirect_after_activation' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'manually_enable' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'map-quest' => [
                'enabled' => true,
                'api_key' => 'qwertyuiop'
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'base_classes' => 'notices',
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'shortcode-core' => [
                'enabled' => true,
                'active' => true,
                'active_admin' => true,
                'admin_pages_only' => true,
                'parser' => 'regular',
                'include_default_shortcodes' => true,
                'custom_shortcodes' => NULL,
                'fontawesome' => [
                    'load' => true,
                    'url' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css',
                    'v5' => false
                ]
            ],
            'tinymce-editor' => [
                'enabled' => false,
                'apikey' => 'xu0m70pxo7jiziof8vuz1bm4j6oc9lipp9jwx7n63hykiht2',
                'plugins' => [
                    0 => 'advlist',
                    1 => 'anchor',
                    2 => 'autoresize',
                    3 => 'charmap',
                    4 => 'code',
                    5 => 'colorpicker',
                    6 => 'emoticons',
                    7 => 'fullscreen',
                    8 => 'hr',
                    9 => 'image',
                    10 => 'insertdatetime',
                    11 => 'link',
                    12 => 'lists',
                    13 => 'media',
                    14 => 'nonbreaking',
                    15 => 'pagebreak',
                    16 => 'paste',
                    17 => 'print',
                    18 => 'searchreplace',
                    19 => 'table',
                    20 => 'textcolor',
                    21 => 'toc',
                    22 => 'visualchars',
                    23 => 'wordcount'
                ],
                'parameters' => [
                    0 => [
                        'name' => 'fontsize_formats',
                        'value' => '6pt 7pt 8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 32pt 36pt 40pt 44pt 48pt 54pt 60pt 66pt 72pt 80pt 88pt 96pt'
                    ],
                    1 => [
                        'name' => 'paste_data_images',
                        'value' => '1'
                    ]
                ],
                'menubar' => true,
                'menu' => [
                    0 => [
                        'title' => 'Soubor',
                        'items' => 'newdocument print'
                    ],
                    1 => [
                        'title' => 'Edit',
                        'items' => 'undo redo | cut copy paste pastetext | selectall | searchreplace'
                    ],
                    2 => [
                        'title' => 'Insert',
                        'items' => 'media link image | pagebreak charmap anchor hr insertdatetime nonbreaking toc'
                    ],
                    3 => [
                        'title' => 'View',
                        'items' => 'visualchars visualaid | fullscreen'
                    ],
                    4 => [
                        'title' => 'Format',
                        'items' => 'bold italic underline strikethrough superscript subscript | formats | removeformat'
                    ],
                    5 => [
                        'title' => 'Table',
                        'items' => 'inserttable tableprops deletetable | cell row column'
                    ],
                    6 => [
                        'title' => 'Tools',
                        'items' => 'code'
                    ]
                ],
                'toolbar' => [
                    0 => [
                        'row' => 'newdocument print | cut copy paste | undo redo | searchreplace visualchars | table image media emoticons toc | insertdatetime pagebreak charmap | link unlink anchor | blockquote nonbreaking hr | code'
                    ],
                    1 => [
                        'row' => 'formatselect | fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | indent outdent | forecolor backcolor | bullist numlist | superscript subscript | removeformat | fullscreen'
                    ]
                ],
                'branding' => false,
                'statusbar' => true
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'search_content' => 'rendered',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => [
                        0 => '@none'
                    ]
                ],
                'filter_combinator' => 'and',
                'ignore_accented_characters' => false,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'searchable_types' => [
                    'title' => true,
                    'content' => true,
                    'taxonomy' => true,
                    'header' => false
                ],
                'header_keys_ignored' => [
                    0 => 'title',
                    1 => 'taxonomy',
                    2 => 'content',
                    3 => 'form',
                    4 => 'forms',
                    5 => 'media_order'
                ]
            ]
        ],
        'backups' => [
            'purge' => [
                'trigger' => 'space',
                'max_backups_count' => 25,
                'max_backups_space' => 5,
                'max_backups_time' => 365
            ],
            'profiles' => [
                0 => [
                    'name' => 'Default Site Backup',
                    'root' => '/',
                    'schedule' => false,
                    'schedule_at' => '0 3 * * *',
                    'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                    'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules'
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'webp' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-webp.png',
                    'mime' => 'image/webp'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'permissions' => [
            'actions' => [
                'site' => [
                    'type' => 'access',
                    'label' => 'Site'
                ],
                'admin' => [
                    'type' => 'access',
                    'label' => 'Admin'
                ],
                'admin.pages' => [
                    'type' => 'access',
                    'label' => 'Pages'
                ],
                'admin.users' => [
                    'type' => 'access',
                    'label' => 'User Accounts'
                ]
            ],
            'types' => [
                'default' => [
                    'type' => 'access'
                ],
                'crud' => [
                    'type' => 'compact',
                    'letters' => [
                        'c' => [
                            'action' => 'create',
                            'label' => 'PLUGIN_ADMIN.CREATE'
                        ],
                        'r' => [
                            'action' => 'read',
                            'label' => 'PLUGIN_ADMIN.READ'
                        ],
                        'u' => [
                            'action' => 'update',
                            'label' => 'PLUGIN_ADMIN.UPDATE'
                        ],
                        'd' => [
                            'action' => 'delete',
                            'label' => 'PLUGIN_ADMIN.DELETE'
                        ]
                    ]
                ],
                'crudp' => [
                    'type' => 'crud',
                    'letters' => [
                        'p' => [
                            'action' => 'publish',
                            'label' => 'PLUGIN_ADMIN.PUBLISH'
                        ]
                    ]
                ],
                'crudl' => [
                    'type' => 'crud',
                    'letters' => [
                        'l' => [
                            'action' => 'list',
                            'label' => 'PLUGIN_ADMIN.LIST'
                        ]
                    ]
                ],
                'crudpl' => [
                    'type' => 'crud',
                    'use' => [
                        0 => 'crudp',
                        1 => 'crudl'
                    ]
                ]
            ]
        ],
        'security' => [
            'xss_whitelist' => [
                0 => 'admin.super'
            ],
            'xss_enabled' => [
                'on_events' => true,
                'invalid_protocols' => true,
                'moz_binding' => true,
                'html_inline_styles' => true,
                'dangerous_tags' => true
            ],
            'xss_invalid_protocols' => [
                0 => 'javascript',
                1 => 'livescript',
                2 => 'vbscript',
                3 => 'mocha',
                4 => 'feed',
                5 => 'data'
            ],
            'xss_dangerous_tags' => [
                0 => 'applet',
                1 => 'meta',
                2 => 'xml',
                3 => 'blink',
                4 => 'link',
                5 => 'style',
                6 => 'script',
                7 => 'embed',
                8 => 'object',
                9 => 'iframe',
                10 => 'frame',
                11 => 'frameset',
                12 => 'ilayer',
                13 => 'layer',
                14 => 'bgsound',
                15 => 'title',
                16 => 'base'
            ],
            'uploads_dangerous_extensions' => [
                0 => 'php',
                1 => 'html',
                2 => 'htm',
                3 => 'js',
                4 => 'exe'
            ],
            'sanitize_svg' => true,
            'salt' => 'TyowIf8UDQ4Gzg'
        ],
        'site' => [
            'title' => 'CESPO - centrum služeb pro sluchově postižené',
            'default_lang' => 'cs',
            'author' => [
                'name' => 'Petr Novák',
                'email' => 'pnovak@cespo.eu'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'CESPO, o.p.s. je samostatným a nezávislým občanským sdružením s plnou právní subjektivitou sdružujícím na základě dobrovolného  členství sluchově postižené osoby.'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'Stream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => 'Europe/Prague',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => NULL,
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'http_x_forwarded' => [
                'protocol' => true,
                'host' => false,
                'port' => true,
                'ip' => true
            ],
            'languages' => [
                'supported' => [
                    0 => 'cs'
                ],
                'default_lang' => 'cs',
                'include_default_lang' => false,
                'include_default_lang_file_extension' => false,
                'pages_fallback_only' => false,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => true
            ],
            'pages' => [
                'type' => 'regular',
                'theme' => 'rt_zenith',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => 'd-m-Y H:i',
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => true,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ],
                    'valid_link_attributes' => [
                        0 => 'rel',
                        1 => 'target',
                        2 => 'id',
                        3 => 'class',
                        4 => 'classes'
                    ]
                ],
                'types' => [
                    0 => 'html',
                    1 => 'htm',
                    2 => 'xml',
                    3 => 'txt',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => NULL,
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'hide_empty_folders' => false,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'purge_at' => '0 4 * * *',
                'clear_at' => '0 3 * * *',
                'clear_job_type' => 'standard',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => true,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => NULL,
                    'server' => NULL,
                    'port' => NULL,
                    'password' => NULL
                ],
                'memcache' => [
                    'server' => NULL,
                    'port' => NULL
                ],
                'memcached' => [
                    'server' => NULL,
                    'port' => NULL
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 0,
                'log' => true
            ],
            'log' => [
                'handler' => 'file',
                'syslog' => [
                    'facility' => 'local6'
                ]
            ],
            'debugger' => [
                'enabled' => false,
                'provider' => 'clockwork',
                'censored' => false,
                'shutdown' => [
                    'close_connection' => true
                ]
            ],
            'images' => [
                'default_image_quality' => 90,
                'cache_all' => true,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => true,
                'seofriendly' => false,
                'defaults' => [
                    'loading' => 'auto'
                ]
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => NULL,
                'allowed_fallback_types' => NULL,
                'auto_metadata_exif' => false,
                'upload_limit' => 134217728
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'cespo-site',
                'uniqueness' => 'path',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'testing',
                'proxy_url' => NULL,
                'method' => 'fopen',
                'verify_peer' => true,
                'official_gpm_only' => false
            ],
            'accounts' => [
                'type' => 'regular',
                'storage' => 'file'
            ],
            'flex' => [
                'cache' => [
                    'index' => [
                        'enabled' => true,
                        'lifetime' => 60
                    ],
                    'object' => [
                        'enabled' => true,
                        'lifetime' => 600
                    ],
                    'render' => [
                        'enabled' => true,
                        'lifetime' => 600
                    ]
                ]
            ],
            'strict_mode' => [
                'yaml_compat' => true,
                'twig_compat' => true,
                'blueprint_compat' => true
            ]
        ],
        'scheduler' => [
            
        ]
    ]
];
