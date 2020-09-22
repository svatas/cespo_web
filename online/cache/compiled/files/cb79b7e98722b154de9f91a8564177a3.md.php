<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/pages/01.home/default.cs.md',
    'modified' => 1600161747,
    'data' => [
        'header' => [
            'title' => 'Úvod',
            'process' => [
                'markdown' => true,
                'twig' => true
            ],
            'cache_enable' => false
        ],
        'frontmatter' => 'title: Úvod
process:
    markdown: true
    twig: true
cache_enable: false',
        'markdown' => '{% include "forms/form.html.twig" with {form: forms( {route: \'/form/contact\'} )} %}
'
    ]
];
