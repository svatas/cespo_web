<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/config/site.yaml',
    'modified' => 1600161747,
    'data' => [
        'title' => 'CESPO - centrum služeb pro sluchově postižené',
        'default_lang' => 'cs',
        'author' => [
            'name' => 'Petr Novák',
            'email' => 'pnovak@cespo.eu'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'CESPO, o.p.s. je samostatným a nezávislým občanským sdružením s plnou právní subjektivitou sdružujícím na základě dobrovolného  členství sluchově postižené osoby.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
