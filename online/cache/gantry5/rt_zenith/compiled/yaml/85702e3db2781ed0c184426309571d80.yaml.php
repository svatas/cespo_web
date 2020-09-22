<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/themes/rt_zenith/particles/aos.yaml',
    'modified' => 1600161767,
    'data' => [
        'name' => 'Animate On Scroll',
        'description' => 'Add animations on scroll',
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
                'duration' => [
                    'type' => 'input.text',
                    'label' => 'Duration',
                    'description' => 'Values from 0 to 3000, with step 50ms',
                    'default' => '1000'
                ],
                'once' => [
                    'type' => 'select.select',
                    'label' => 'Once',
                    'description' => 'Whether animation should happen only once - while scrolling down',
                    'default' => 1,
                    'options' => [
                        1 => 'true',
                        0 => 'false'
                    ]
                ],
                'delay' => [
                    'type' => 'input.text',
                    'label' => 'Delay',
                    'description' => 'Values from 0 to 3000, with step 50ms',
                    'default' => '0'
                ],
                'easing' => [
                    'type' => 'input.text',
                    'label' => 'Easing',
                    'description' => 'Default easing for AOS animations',
                    'default' => 'ease'
                ],
                'offset' => [
                    'type' => 'input.text',
                    'label' => 'Offset',
                    'description' => 'Offset (in px) from the original trigger point',
                    'default' => '120'
                ],
                'info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'For more information on how to use this atom, see <a href="https://rockettheme.com/docs/grav/themes/koleti/aos.md">AOS documentation<i class="fa fa-external-link" aria-hidden="true"></i></a>.'
                ]
            ]
        ]
    ]
];
