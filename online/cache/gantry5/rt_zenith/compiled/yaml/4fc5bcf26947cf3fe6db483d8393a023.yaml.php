<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/blueprints/styles/base.yaml',
    'modified' => 1600164207,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => 'rgba(255, 255, 255, 0)'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#030303'
                ],
                'text-active-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Active Color',
                    'default' => '#afc1ff'
                ]
            ]
        ]
    ]
];
