<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/domains1/gh43616200/public/www_root/user/pages/02.o-cespo/04.kontakty/default.cs.md',
    'modified' => 1600161754,
    'data' => [
        'header' => [
            'title' => 'Kontakty',
            'process' => [
                'markdown' => true,
                'twig' => true
            ],
            'cache_enable' => false
        ],
        'frontmatter' => 'title: Kontakty
process:
    markdown: true
    twig: true
cache_enable: false',
        'markdown' => '## Contact Form

{% include "forms/form.html.twig" with {form: forms( {route: \'/form/contact\'} )} %}'
    ]
];
