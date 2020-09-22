<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/fixedheader.yaml',
    'modified' => 1600161768,
    'data' => [
        'name' => 'Fixed Header',
        'description' => 'Add fixed header to your site.',
        'type' => 'atom',
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
                'section' => [
                    'type' => 'input.text',
                    'label' => 'Section',
                    'description' => 'Define the ID or class of the section that you want to set as fixed.',
                    'default' => '#g-navigation'
                ],
                'pinnedbg' => [
                    'type' => 'select.selectize',
                    'label' => 'Background to Use',
                    'description' => 'Choose if the Pinned background should be set below or if it should come from the section styling.',
                    'default' => 'section',
                    'options' => [
                        'section' => 'Section',
                        'custom' => 'Custom'
                    ]
                ],
                'custombg' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Custom Background',
                    'default' => '#ffffff'
                ],
                'autohide' => [
                    'type' => 'select.selectize',
                    'label' => 'Autohide',
                    'description' => 'Choose if the fixed section should autohide on scroll.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'mobile' => [
                    'type' => 'select.selectize',
                    'label' => 'Mobile',
                    'description' => 'Enable or disable fixed header in mobile',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'padding' => [
                    'type' => 'input.number',
                    'label' => 'Padding Top',
                    'description' => 'Top padding in px for adjacent section / header',
                    'min' => 0,
                    'default' => 110
                ],
                'mobilepadding' => [
                    'type' => 'input.number',
                    'label' => 'Mobile Padding Top',
                    'description' => 'Top padding in px for adjacent section / header in mobile',
                    'min' => 0,
                    'default' => 110
                ],
                'offset' => [
                    'type' => 'input.number',
                    'label' => 'Offset',
                    'description' => 'Vertical offset in px before element is first unpinned',
                    'min' => 0,
                    'default' => 100
                ],
                'tolerance' => [
                    'type' => 'input.number',
                    'label' => 'Tolerance',
                    'description' => 'Scroll tolerance in px before state changes',
                    'min' => 0,
                    'placeholder' => 0
                ]
            ]
        ]
    ]
];
