<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/search.yaml',
    'modified' => 1600161769,
    'data' => [
        'name' => 'Search',
        'description' => 'Display search icon with link to search page.',
        'type' => 'particle',
        'icon' => 'fa-search',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.'
                ],
                'placeholder' => [
                    'type' => 'input.text',
                    'label' => 'Placeholder',
                    'description' => 'Input your custom placeholder',
                    'placeholder' => 'Your keyword...'
                ]
            ]
        ]
    ]
];
