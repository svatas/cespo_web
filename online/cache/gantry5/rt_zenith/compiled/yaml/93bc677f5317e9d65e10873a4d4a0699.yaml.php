<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/blueprints/styles/offcanvas.yaml',
    'modified' => 1600164208,
    'data' => [
        'name' => 'Offcanvas Styles',
        'description' => 'Parameters for the OffCanvas sidepanel section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#afc1ff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'toggle-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Toggle Color',
                    'default' => '#ffffff'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Panel Width',
                    'description' => 'Set offcanvas size in rem, em, px, or percentage unit values',
                    'default' => '13rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'toggle-visibility' => [
                    'type' => 'select.selectize',
                    'label' => 'Toggle Visibility',
                    'description' => 'Choose the OffCanvas Toggle Visibility.',
                    'default' => 1,
                    'options' => [
                        1 => 'Mobile Menu',
                        2 => 'Always'
                    ]
                ]
            ]
        ]
    ]
];
