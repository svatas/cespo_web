<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/simplemenu.yaml',
    'modified' => 1600161769,
    'data' => [
        'name' => 'Simple Menu',
        'description' => 'Display simple menu.',
        'type' => 'particle',
        'icon' => 'fa-forward',
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
                'menus' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Menus',
                    'description' => 'Create menu.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'skip' => true
                        ],
                        '.items' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Menu Items',
                            'description' => 'Create each menu item to display.',
                            'value' => 'title',
                            'ajax' => true,
                            'fields' => [
                                '.title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'skip' => true
                                ],
                                '.icon' => [
                                    'type' => 'input.icon',
                                    'label' => 'Icon',
                                    'description' => 'Select the icon.'
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
        ]
    ]
];
