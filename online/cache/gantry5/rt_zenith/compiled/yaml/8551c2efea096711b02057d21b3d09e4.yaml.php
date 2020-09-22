<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/timeline.yaml',
    'modified' => 1600161769,
    'data' => [
        'name' => 'Timeline',
        'description' => 'Show timeline elements.',
        'type' => 'particle',
        'icon' => 'fa-calendar-o',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
                    'default' => true
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'timeline' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Timeline',
                    'description' => 'Create timeline element.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.class' => [
                            'type' => 'input.text',
                            'label' => 'Class',
                            'description' => 'CSS class name for the item.'
                        ],
                        '.subtitle' => [
                            'type' => 'input.text',
                            'label' => 'Subtitle'
                        ],
                        '.startyear' => [
                            'type' => 'input.text',
                            'label' => 'Start Year'
                        ],
                        '.endyear' => [
                            'type' => 'input.text',
                            'label' => 'End Year'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ],
                        '.target' => [
                            'type' => 'select.select',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_blank',
                            'options' => [
                                '_self' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
