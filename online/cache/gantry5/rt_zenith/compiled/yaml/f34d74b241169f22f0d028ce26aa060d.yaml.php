<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/plugins/gantry5/engines/nucleus/particles/position.yaml',
    'modified' => 1600164228,
    'data' => [
        'name' => 'Module Position',
        'description' => 'Display a module position.',
        'type' => 'position',
        'icon' => 'fa-object-group',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable module positions.',
                    'default' => true
                ],
                'key' => [
                    'type' => 'input.text',
                    'label' => 'Key',
                    'description' => 'Position name.',
                    'pattern' => '[A-Za-z0-9-]+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Module chrome in this position.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];