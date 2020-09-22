<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/config/plugins/email.yaml',
    'modified' => 1600161747,
    'data' => [
        'enabled' => true,
        'from' => 'mail@example.com',
        'to' => 'mail@example.com',
        'mailer' => [
            'engine' => 'none',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
