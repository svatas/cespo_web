<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/audioplayer.yaml',
    'modified' => 1600161768,
    'data' => [
        'name' => 'Audio Player',
        'description' => 'Play music through audio player interface.',
        'type' => 'particle',
        'icon' => 'fa-music',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'nowplaying' => [
                    'type' => 'input.text',
                    'label' => 'Now Playing Label',
                    'description' => 'Customize the now playing text.',
                    'placeholder' => 'Now Playing',
                    'default' => 'Now Playing'
                ],
                'scrollbar' => [
                    'type' => 'select.selectize',
                    'label' => 'Playlist Layout',
                    'description' => 'Decide if you want playlist with scrollbar and overflow or without.',
                    'placeholder' => 'Select...',
                    'default' => 'noscrollbar',
                    'options' => [
                        'scrollbar' => 'With Scrollbar',
                        'noscrollbar' => 'Without Scrollbar'
                    ]
                ],
                'overflow' => [
                    'type' => 'input.number',
                    'label' => 'Overflow Height',
                    'description' => 'Specify overflow size for playlist with scrollbar.',
                    'placeholder' => 350,
                    'default' => 350
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Files',
                    'description' => 'Add audio player items.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Item Title',
                            'description' => 'Customize item title.',
                            'placeholder' => 'Enter item title.'
                        ],
                        '.artist' => [
                            'type' => 'input.text',
                            'label' => 'Artist',
                            'description' => 'Customize artist name.',
                            'placeholder' => 'Enter artist name.'
                        ],
                        '.tracktitle' => [
                            'type' => 'input.text',
                            'label' => 'Track Title',
                            'description' => 'Customize track title.',
                            'placeholder' => 'Enter track title.'
                        ],
                        '.cover' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Album Cover',
                            'description' => 'Select album cover.'
                        ],
                        '.source' => [
                            'type' => 'select.selectize',
                            'label' => 'Audio Source',
                            'description' => 'Audio source. Local or External Url.',
                            'placeholder' => 'Select...',
                            'default' => 'local',
                            'options' => [
                                'local' => 'Local File',
                                'external' => 'External Url'
                            ]
                        ],
                        '.externalurl' => [
                            'type' => 'input.text',
                            'label' => 'External Url',
                            'description' => 'URL for external audio file'
                        ],
                        '.localurl' => [
                            'type' => 'input.filepicker',
                            'label' => 'Local Audio',
                            'description' => 'Select desired audio file.'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Input the item link.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Input the text for the item link.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
