<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/blueprints/styles/menustyle.yaml',
    'modified' => 1600164208,
    'data' => [
        'name' => 'Menu Styles',
        'description' => 'Set menu style options.',
        'type' => 'core',
        'form' => [
            'fields' => [
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_toplevel' => [
                            'label' => 'Top Level',
                            'fields' => [
                                'background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'default' => '#ffffff'
                                ],
                                'text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#030303'
                                ],
                                'text-color-alt' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text Alt',
                                    'default' => '#ffffff'
                                ],
                                'text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#ffffff'
                                ],
                                'background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Background',
                                    'default' => '#afc1ff'
                                ]
                            ]
                        ],
                        '_tab_sublevel' => [
                            'label' => 'Sub Level',
                            'fields' => [
                                'sublevel-text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#030303'
                                ],
                                'sublevel-text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#ffffff'
                                ],
                                'sublevel-background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'default' => '#ffffff'
                                ],
                                'sublevel-background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Bg',
                                    'default' => '#afc1ff'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
