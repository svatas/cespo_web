<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/heading.yaml',
    'modified' => 1600161768,
    'data' => [
        'name' => 'Heading',
        'description' => 'Show impressive heading on your website.',
        'type' => 'particle',
        'icon' => 'fa-font',
        'form' => [
            'overrideable' => false,
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
                'subtitle' => [
                    'type' => 'input.text',
                    'label' => 'Sub Title',
                    'description' => 'Customize the sub title text.',
                    'placeholder' => 'Enter sub title'
                ]
            ]
        ]
    ]
];
