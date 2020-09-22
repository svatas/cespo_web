<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/blueprints/styles/sidebar.yaml',
    'modified' => 1600164208,
    'data' => [
        'name' => 'Body Sidebar Styles',
        'description' => 'Body Sidebar styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#000000'
                ],
                'color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'position' => [
                    'type' => 'select.select',
                    'label' => 'Position',
                    'description' => 'Select if the Body Sidebar have fixed position or relative one. This applies to the desktop only.',
                    'default' => 'fixed',
                    'options' => [
                        'fixed' => 'Fixed',
                        'relative' => 'Relative'
                    ]
                ]
            ]
        ]
    ]
];
